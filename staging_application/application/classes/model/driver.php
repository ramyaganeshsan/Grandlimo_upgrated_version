<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Driver module details

* @Package: Driver

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Driver extends Model
{
    /**
     ****__construct()**
     *** Common Function in this model
     */
    public function __construct()
    {
        $this->session         = Session::instance();
        $this->name            = $this->session->get("name");
        $this->admin_userid    = $this->session->get("passenger_id");
        $this->admin_email     = $this->session->get("email");
        $this->user_admin_type = $this->session->get("user_type");
        $this->commonmodel     = Model::factory('commonmodel');
        $this->currentdate     = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
        //$this->currentdate=Commonfunction::getCurrentTimeStamp();
        $this->lat             = '';
        $this->lon             = '';
        if (isset($_SESSION['id']) && ($_SESSION['id'] != '')) {
            $this->lat = isset($_SESSION['ip_lati']) ? $_SESSION['ip_lati'] : LOCATION_LATI;
            $this->lon = isset($_SESSION['ip_lng']) ? $_SESSION['ip_lng'] : LOCATION_LONG;
        } else {
            $this->lat = isset($_COOKIE['c_lati']) ? $_COOKIE['c_lati'] : LOCATION_LATI;
            $this->lon = isset($_COOKIE['c_lng']) ? $_COOKIE['c_lng'] : LOCATION_LONG;
        }
        //MongoDB Instance
        $this->mongo_db = MangoDB::instance('default');
    }
    /**Validating User SignUP details**/
    // Check Email Exist or Not while Updating User Details
    public function check_passenger_email_update($email = "", $id = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' AND id !='$id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    /**Validating Login Datas**/
    public function validate_login($arr)
    {
        if ($arr['password'] == 'Password') {
            $arr['password'] = "";
        }
        return Validation::factory($arr)->rule('email', 'not_empty')->rule('email', 'email')->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '5'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ));
    }
    /** Validate Profile Settings **/
    public function validate_driver_profilesettings($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')
        //->rule('name','illegal_chars',array(':value','/^[\p{L}-.,_; \'0-9]*$/u'))
            ->rule('name', 'min_length', array(
            ':value',
            '4'
        ))->rule('name', 'max_length', array(
            ':value',
            '32'
        ))->rule('phone', 'not_empty')->rule('phone', 'numeric') //num
            ->rule('address', 'not_empty');
        //->rule('description','illegal_chars',array(':value','/^[\p{L}-.,_; \'0-9]*$/u'));						
    }
    /**User Login**/
    public function login($phone, $pwd, $remember)
    {
        $password = Html::chars(md5($pwd));
        if (COMPANY_CID != 0) {
            $query = "SELECT * FROM " . PEOPLE . " WHERE phone = '$phone' AND password='$password' AND user_type='D' AND company_id=" . COMPANY_CID;
        } else {
            $query = "SELECT * FROM " . PEOPLE . " WHERE phone = '$phone' AND password='$password' AND user_type='D'";
        }
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) == 1 && ($result[0]['status'] == 'A' || $result[0]['status'] == 'M')) {
            //Whenever user logged into the application, Add their IP and other details..
            $login_time   = $this->currentdate;
            $sql_query    = array(
                'last_login' => $login_time,
                "login_status" => "S",
                "login_from" => "W"
            );
            $result_login = DB::update(PEOPLE)->set($sql_query)->where('phone', '=', $phone)->execute();
            $this->session->set("id", $result["0"]["id"]);
            $this->session->set("email", $result["0"]["email"]);
            $this->session->set("phone", $result["0"]["phone"]);
            $this->session->set("name", $result["0"]["name"]);
            $this->session->set("usertype", "driver");
            if ($remember == "yes") {
                setcookie("driver_phone", $phone, time() + 3600 * 24, '/');
                setcookie("driver_password", $pwd, time() + 3600 * 24, '/');
            }
            return 1;
        } elseif (count($result) == 1 && $result[0]['status'] == 'D') {
            return -1;
        } elseif (count($result) == 1 && $result[0]['status'] == 'T') {
            return -3;
        } else {
            return 0;
        }
    }
    // Updating User Details
public function update_driverimage($image,$userid)
{
    $query = $this->mongo_db->find(MDB_PEOPLE,array('_id' => (int)$userid),array('profile_picture'));
    $result = iterator_to_array($query);
    
    if(isset($result[$userid]['profile_picture']) && $result[$userid]['profile_picture']!=""){
        $id1 = SITE_DRIVER_IMGPATH.$result[$userid]['profile_picture'];
        $id2 = SITE_DRIVER_IMGPATH.'thumb_'.$result[$userid]['profile_picture'];
        if(file_exists($id1) && file_exists($id2)){
            unlink($id1);
            unlink($id2);
        }
    }
    $mdate = $this->currentdate;
    $query = array();
    $query['updated_date'] = $mdate;
    if(isset($image)){
        $query[ 'profile_picture' ]=$image;
    }
    $result = $this->mongo_db->update(MDB_PEOPLE,array('_id'=>(int)$userid),array('$set'=>$query),array('upsert'=>false));
    return (empty($result['err']))?1:$result['err'];
}
    public function update_user_settings($array_data, $post_value_array, $userid)
    {
        $mdate     = $this->currentdate;
        // Update user records in the database
        $sql_query = (array(
            'updated_date' => $mdate
        )); //'location' =>$array_data['location'] ,'industry' =>$array_data['industry'],'smart_tags' => $array_data['smart_tags'],
        if (isset($array_data['name']) && $array_data['name'] != "") {
            $name              = $array_data['name'];
            $sql_query['name'] = $name;
        }
        if (isset($array_data['phone']) && $array_data['phone'] != "") {
            $name               = $array_data['phone'];
            $sql_query['phone'] = $name;
        }
        if (isset($array_data['address']) && $array_data['address'] != "") {
            $name                 = $array_data['address'];
            $sql_query['address'] = $name;
        }
        $result                    = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $userid)->execute();
        $sql_query['updated_date'] = $mdate;
        //echo $sql_query;
        //exit;
        $this->session->set("name", $array_data['name']);
        return ($result) ? 1 : 0;
    }
    public function get_driver_profile_details($id = "")
    {
        $sql = "SELECT * FROM " . PEOPLE . " WHERE id = '$id' ";
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
        $result = $this->mongo_db->find(MDB_PEOPLE, array(
            '_id' => (int) $id
        ));
        $res    = iterator_to_array($result);
        return (!empty($res)) ? $res : array();
    }
    // Validating User Details while Updating User Details
    /**Get User Details at User Profile Page**/
    public function get_user_details($userid = null, $location_details = null) //,$offset=0,$rec=0
    {
        $lat    = $this->lat;
        $lon    = $this->lon;
        $rad    = '';
        $result = array();
        if ($userid != null) {
            if ($rad == "") {
                if (($lat != null) && ($lon != null)) {
                    $query = "SELECT *,(((acos(sin((" . $lat . "*pi()/180)) * 
                        sin((`latitude`*pi()/180))+cos((" . $lat . "*pi()/180)) * 
                        cos((`latitude`*pi()/180)) * cos(((" . $lon . "- `Langitude`)*
                        pi()/180))))*180/pi())*60*1.1515) as distance FROM " . PEOPLE . "  where id = '" . $userid . "' 
                         ORDER BY `distance` ASC "; //limit $offset,$rec	
                } else {
                    $query = "SELECT * FROM " . PEOPLE . "  where id = '" . $userid . "' ";
                }
            }
            $result = Db::query(Database::SELECT, $query)->execute()->as_array();
            return $result;
        } else {
            return $result;
        }
    }
    // Validating Forgot Password Details
    public function validate_forgotpwd($arr)
    {
        return Validation::factory($arr)->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '100'
        ))->rule('email', 'not_empty');
    }
    // Check Whether Passenger Email is Already Exist or Not
    public function check_email_driver($email = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' and company_id=" . COMPANY_CID;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function check_phone_passengers($phone = "")
    {
        $match_query=array();
		$match_query['phone'] = $phone;
        if (COMPANY_CID != 0) {
			$match_query['company_id'] = (int)COMPANY_CID;
        }
		$result = $this->mongo_db->count(MDB_PEOPLE,$match_query);
        return (!empty($result)) ? $result : 0 ;
    }
    public function new_check_phone_passengers($data)
    {
        $match_query=array();
		$match_query['phone'] = $data['phone_no'];
		$match_query['driver_code'] = $data['driver_code'];
        if (COMPANY_CID != 0) {
			$match_query['company_id'] = (int)COMPANY_CID;
        }
		$result = $this->mongo_db->count(MDB_PEOPLE,$match_query);
        return (!empty($result)) ? $result : 0 ;
    }
    public function check_driver_phone_update($email = "", $id = "")
    {
        $sql    = "SELECT phone FROM " . PEOPLE . " WHERE phone='$email' AND id !='$id' AND company_id=" . COMPANY_CID;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Reset User Password if User Forgot Password 
    public function forgot_password($array_data, $post_value_array, $random_key)
    {
        $mdate  = $this->currentdate;
        $pass   = md5($random_key);
        // Create a new user record in the database
        $result = DB::update(PEOPLE)->set(array(
            'password' => $pass,
            'org_password' => $random_key,
            'updated_date' => $mdate
        ))->where('email', '=', $array_data['email'])->where('status', '=', 'A')->where('company_id', '=', COMPANY_CID)->execute();
        if ($result) {
            $rs = DB::select('name', 'username', 'email', 'password', 'phone')->from(PEOPLE)->where('email', '=', $post_value_array['email'])->where('status', '=', 'A')->where('company_id', '=', COMPANY_CID)->execute()->as_array();
            return $rs;
        } else {
            return 0;
        }
    }
    public function forgot_password_phone($array_data, $value, $random_key)
    {
        $mdate  = new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000);
        $pass   = md5($random_key);
        $pwd_arr = array('password' => $pass, 'org_password' => $random_key,'updated_date'=>$mdate);
        $update = $this->mongo_db->Update(MDB_PEOPLE,array('phone'=>$value['phone_no'],'driver_code'=>$value['driver_code']),
                                          array('$set'=>$pwd_arr),array('upsert'=>true));
        $result = (isset($update['err'])) ? 0 :1;
        if ($result) {
            $project = array('name', 'email', 'password', 'phone');
            $res = $this->mongo_db->find_one(MDB_PEOPLE,array('phone'=>$value['phone_no'],'driver_code'=>$value['driver_code'],'status'=>'A'),$project);
            return (isset($res)) ? $res : array();
        } else {
            return 0;
        }
    }
    // User Change Password
    public function change_password($array_data, $post_value_array, $userid = "")
    {
        $userid = (isset($_SESSION['id']) ? $_SESSION['id'] : "");
        $mdate  = $this->currentdate;
        $pass   = md5($array_data['confirm_password']);
        // Create a new user record in the database
        $result = DB::update(PEOPLE)->set(array(
            'password' => $pass,
            'org_password' => $array_data['confirm_password'],
            'updated_date' => $mdate
        ))->where('id', '=', $userid)->execute();
        if (count($result) == SUCESS) {
            $rs = DB::select('name', 'password', 'email', 'phone')->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
            return $rs;
        }
    }
    // Validating Change Password Details
    public function validate_changepwd($arr)
    {
        return Validation::factory($arr)->rule('old_password', 'not_empty')->rule('old_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('old_password', 'max_length', array(
            ':value',
            '16'
        ))->rule('new_password', 'not_empty')->rule('new_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('new_password', 'min_length', array(
            ':value',
            '5'
        ))->rule('new_password', 'max_length', array(
            ':value',
            '16'
        ))->rule('confirm_password', 'not_empty')->rule('confirm_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('confirm_password', 'matches', array(
            ':validation',
            'new_password',
            'confirm_password'
        ))->rule('confirm_password', 'min_length', array(
            ':value',
            '5'
        ))->rule('confirm_password', 'max_length', array(
            ':value',
            '16'
        ));
    }
    /**Validating Reset Password Details **/
    public function validate_resetpwd($arr)
    {
        return Validation::factory($arr)->rule('new_password', 'not_empty')
        //->rule('new_password','alpha_dash')
            ->rule('new_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('new_password', 'max_length', array(
            ':value',
            '16'
        ))->rule('conf_password', 'not_empty')
        //->rule('conf_password','alpha_dash')
            
        //->rule('conf_password', array(':equals','new_password'))
            ->rule('conf_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('conf_password', 'max_length', array(
            ':value',
            '16'
        ));
    }
    // Check Whether the Eneterd Password is Correct While User Change Password
    public function check_pass($pass = "", $userid = "")
    {
        $userid   = (isset($_SESSION['id']) ? $_SESSION['id'] : "");
        $result   = DB::select()->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
        $pass     = md5($pass);
        $password = $result["0"]["password"];
        if ($password == $pass) {
            return 1;
        } else {
            return 0;
        }
    }
    public function get_email($uid = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE id='$uid' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result["0"]["email"];
        } else {
            return "";
        }
    }
    public function get_passenger_details($key)
    {
        $result = DB::select()->from(PEOPLE)->where('activation_key', '=', $key)->execute()->as_array();
        return $result;
    }
    /**
     * Validation rule for fields in email
     */
    public function validate_email($arr)
    {
        return Validation::factory($arr)->rule('email', 'not_empty')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Authorize::check_label_not_empty', array(
            ":value",
            __('enter_email')
        ))->rule('email', 'email_domain')->rule('email', 'Model_Authorize::unique_email');
    }
    public function logged_user_status()
    {
        $query  = "SELECT status FROM " . PEOPLE . "  where id = '" . $this->session->get("id") . "' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) == 1 && $result[0]['status'] == 'A') {
            return 1;
        } else if (count($result) == 1 && $result[0]['status'] == 'D') {
            return -1;
        } else {
            return 0;
        }
    }
    public function get_smtpdetails()
    {
        $result = DB::select()->from(SMTP_SETTINGS)->limit(1)->execute()->as_array();
        return $result;
    }
    public function get_logged_user_details($userid)
    {
        $result = DB::select()->from(PEOPLE)->where("id", "=", $userid)->and_where("user_type", "=", "N") //NORMAL
            ->execute()->as_array(); // print_r($result);exit;   				
        return $result;
    }
    public function check_password_exist($userid)
    {
        $query = DB::select('email', 'name', 'password')->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
        if (count($query) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    
    public function get_my_profile_details($id)
    {
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE,
            array(
                '_id' => (int)$id
            ),
            array(
                'name',
                'notification_setting',
                'company_id'
            )
        );
        return (!empty($result))?$result:array();
    }
    
    public function get_my_trips($id)
    {
        $match_query    = array('driver_id' => (int)$id,'travel_status' => 1);
        $match_query2   = array('dlh.status' => 'A');
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_LOCATION_HISTORY,
                    'localField'	=> "driver_id",
                    'foreignField'	=> "driver_id",
                    'localField'	=> "_id",
                    'foreignField'	=> "trip_id",
                    'as'			=> "dlh"
                )
            ),
            array('$unwind'=>'$dlh'),
            array('$match'	=> $match_query2),
            array(
                '$project' => array('_id'=>0,
                    'passengers_log_id' => '$_id',
                    'active_record' => '$dlh.loc',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                )
            ),
            array(
                '$skip' => 0
            ),
            array(
              '$limit' => 3
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    
    //Function used to get the get_driver_logs $driver_id,'R','A','1',COMPANY_CID);
    public function get_driver_logs($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id)
    {
        if ($company_id == '') {
            $current_time = date('Y-m-d H:i:s');
            $start_time   = date('Y-m-d') . ' 00:00:01';
            $end_time     = date('Y-m-d') . ' 23:59:59';
        } else {
          /*  $timezone_base_query = "select time_zone from  company where cid='$company_id'";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();*/
            $time_arguments = array(array('$match'=>array('_id'=>(int)$company_id)),
									array('$unwind'=>'$companydetails'),
									array('$project'=>array('time_zone'=>'$companydetails.time_zone'))
								);
            
            $time = $this->mongo_db->aggregate(MDB_COMPANY,$time_arguments); 
			$timezone_fetch = $time['result'];
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
		/*  $result = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit($start)->offset($limit)
        //->order_by(PASSENGERS.'.id', 'ASC')					
            ->order_by(PASSENGERS_LOG . '.passengers_log_id', 'DESC')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->where(PASSENGERS_LOG . '.pickup_time', '>=', $start_time)->as_object()->execute();
        return $result;*/
    
        //MongoDB
        $match_query = array("\$and" => array(array("pickup_time"=>array('$gte' => $start_time)),array('driver_id' => (int)$id),array('travel_status' => (int)$travel_status),array('msg_status' => $msg_status),array('driver_reply' => $driver_reply) ));
        //print_r($match_query);//exit;
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_PASSENGERS,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "passengers"
                )
            ),
            array('$unwind'=>'$passengers'),
            array(
                '$project' => array(
                    'name' => '$passengers.name',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                    'no_passengers' => '$no_passengers',
                    'pickup_time' => '$pickup_time',
                )
            ),
            array(
                '$sort' => array('_id' => -1 )
            )
        );

        $table=MDB_PASSENGERS_LOGS;
        if($travel_status==1)
        {
            $table=MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
        {
            $table=MDB_PASSENGERSLOGS_CANCELED;
        }

        $result = $this->mongo_db->aggregate($table,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    //Function used to find the completed logs
    public function get_driver_logs_completed($id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null)
    {
        $match_query = array('driver_id' => (int)$id, 'travel_status' => (int)$travel_status, 'msg_status' => $msg_status, 'driver_reply' => $driver_reply);
        //print_r($match_query);//exit;
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_PEOPLE,
                    'localField'	=> 'driver_id',
                    'foreignField'	=> "_id",
                    'as'			=> "people"
                )
            ),
            array('$unwind'=>'$people'),
            array(
                '$project' => array(
                    'name' => '$people.name',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                    'no_passengers' => '$no_passengers',
                    'pickup_time' => '$pickup_time',
                )
            ),
            array(
                '$sort' => array('_id' => -1 )
            ),
            array(
              '$limit' => (int)$start
            ),
	    array(
                '$skip' => (int)$limit
            )
            
        );

        $table=MDB_PASSENGERS_LOGS;
        if($travel_status==1)
        {
            $table=MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
        {
            $table=MDB_PASSENGERSLOGS_CANCELED;
        }

        $result = $this->mongo_db->aggregate($table,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    //Function used to getting upcoming trips with first in fisrt
    //Function used to get all driver logs with transactions
    public function get_driver_logs_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null)
    {
        $result = DB::select(PASSENGERS_LOG . '.passengers_id', PASSENGERS_LOG . '.driver_id', PASSENGERS_LOG . '.taxi_id', PASSENGERS_LOG . '.company_id', PASSENGERS_LOG . '.current_location', PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.approx_distance', PASSENGERS_LOG . '.approx_duration', PASSENGERS_LOG . '.approx_fare', PASSENGERS_LOG . '.pickup_time', PASSENGERS_LOG . '.travel_status', PASSENGERS_LOG . '.driver_reply', PASSENGERS_LOG . '.comments', PASSENGERS_LOG . '.rating', PASSENGERS_LOG . '.driver_comments', PASSENGERS_LOG . '.fixedprice', PASSENGERS_LOG . '.company_tax', PASSENGERS_LOG . '.faretype', PASSENGERS_LOG . '.bookingtype', PASSENGERS_LOG . '.luggage', PASSENGERS_LOG . '.bookby', PASSENGERS_LOG . '.operator_id', TRANS . '.distance', TRANS . '.actual_distance', TRANS . '.fare', TRANS . '.remarks', TRANS . '.payment_type', TRANS . '.amt', TRANS . '.distance', TRANS . '.payment_status', PASSENGERS . '.name')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS, 'LEFT')->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit($start)->offset($limit)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
        //print_r($result);           
        return $result;
    }
    //Function used to get all driver logs with transactions
    public function get_taxi_logs_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null,$find_count = FALSE)
    {
        
        $match_query = array('taxi_id' => (int)$id, 'msg_status' => $msg_status, 'driver_reply' => $driver_reply, 'travel_status' => (int)$travel_status );
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	PASSENGERS,
                    'localField'	=> 'passengers_id',
                    'foreignField'	=> "_id",
                    'as'			=> "passengers"
                )
            ),
            array('$unwind' => '$passengers'),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind' => '$trans')
            
           );
				if($find_count ){
					$carguments = array(
                array(
                   '$project' => array('_id'=>0,
                    'id' => '$_id',
                  
                    )
                )
                );
				 $merge_arguments = array_merge($arguments,$carguments);

                $table=MDB_PASSENGERS_LOGS;
                if($travel_status==1)
                {
                    $table=MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
                {
                    $table=MDB_PASSENGERSLOGS_CANCELED;
                }

					$result = $this->mongo_db->aggregate($table,$merge_arguments);
					return (!empty($result['result']))?count($result['result']):0;
				}else{
				
				$carguments = array(
                array(
                   '$project' => array('_id'=>0,
                    'id' => '$_id',
                    'distance' => '$distance',
                    'distance_unit'=>'$trans.distance_unit',
                    'fare'=>'$trans.fare',
                    'name'=>'$passengers.name',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'no_passengers'=>'$no_passengers',
                    'pickup_time' => '$pickup_time',
                    )
                ),
                  array(
                '$sort' => array(
                    '_id' => -1
                ),
            ),
                array(
                    '$skip' => (int)$start
                ),
                array(
                  '$limit' => (int)$limit
                )
				);
			 $merge_arguments = array_merge($arguments,$carguments);

            $table=MDB_PASSENGERS_LOGS;
            if($travel_status==1)
            {
                $table=MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
            {
                $table=MDB_PASSENGERSLOGS_CANCELED;
            }

            $result = $this->mongo_db->aggregate($table,$merge_arguments);
             return (!empty($result['result']))?$result['result']:array();
			}
            
        
    }
    //Function used to get all driver logs with transactions
    public function get_driver_total_logs_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null)
    {
        $result = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS, 'LEFT')->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit($start)->offset($limit)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
        //print_r($result);           
        return $result;
    }
    //Function used to get the get_driver_logs
    public function get_driver_logs1($id, $msg_status, $driver_reply = null, $travel_status = null, $start, $limit,$find_count=false)
    {
        /*$result = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'DESC')->limit($start)->offset($limit)->as_object()->execute();
        return $result;*/
        
        //MongoDB
        $match_query = array('driver_id' => (int)$id, 'msg_status' => $msg_status, 'driver_reply' => $driver_reply, 'travel_status' => (int)$travel_status );
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup'         => array(
                    'from'          =>  PASSENGERS,
                    'localField'    => 'passengers_id',
                    'foreignField'  => "_id",
                    'as'            => "passengers"
                )
            ),
            array('$unwind' => '$passengers'), 
            array('$lookup'         => array(
                    'from'          => 'ratings',
                    'localField'    => 'rating',
                    'foreignField'  => "ratings_no",
                    'as'            => "ratingsinfo"
                )
            ),
            array('$unwind' => '$ratingsinfo'),
            array(
                '$sort' => array(
                    '_id' => -1
                ),
            ),
        );
        if($find_count){
            $carguments = array(
                array('$group' => array("_id" => 0,
                        "count" => array( '$sum' => 1 ),
                    )
                ),
            );
            $merge_arguments = array_merge($arguments,$carguments);

            $table=MDB_PASSENGERS_LOGS;
            if($travel_status==1)
            {
                $table=MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
            {
                $table=MDB_PASSENGERSLOGS_CANCELED;
            }

            $result = $this->mongo_db->aggregate($table,$merge_arguments);
           // echo "<pre>";print_r($result); //exit;
            return (!empty($result['result'][0]['count']))?$result['result'][0]['count']:0;
        } else {
            //echo $start.'=='.$limit.'=='.$find_count;exit;
            $carguments = array(
                array(
                    '$project' => array('_id'=>0,
                        'id' => '$_id',
                        'rating' => '$rating',
                        'comments' => '$comments',
                        'profile_image' => '$passengers.profile_image',
                        'name'=>'$passengers.name',
                        'driver_tags'=>'$driver_tags',
                        'ratings_title'=>'$ratingsinfo.ratings_title',
                        'createdate'=>'$createdate',
                    )
                ),
                array(
                    '$skip' => (int)$start
                ),
                array(
                  '$limit' => (int)$limit
                )
            );
            $merge_arguments = array_merge($arguments,$carguments);

            $table=MDB_PASSENGERS_LOGS;
            if($travel_status==1)
            {
                $table=MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
            {
                $table=MDB_PASSENGERSLOGS_CANCELED;
            }

            $result = $this->mongo_db->aggregate($table,$merge_arguments);
            //echo "<pre>"; print_r($result); exit;
            return (!empty($result['result']))?$result['result']:array();
        }
    }
    public function getDriverShiftStatus($id) {
        $result = $this->mongo_db->find_one(MDB_DRIVER_INFO,array('_id'=>(int)$id),array('shift_status'));
        return $result;
    }
    // Function used to get Drivers comments Today and Totally
    public function get_driver_comments($id, $today = null, $company_id = '')
    {
        if ($company_id == '') {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
        }
        if ($today == 1)
        // It will take the today transaction too
            $result = DB::select('rating', 'fare')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS)->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)
            //->where(PASSENGERS_LOG.'.comments','!=','')
                ->where(PASSENGERS_LOG . '.travel_status', '=', 1)->where(PASSENGERS_LOG . '.pickup_time', 'LIKE', $date)->order_by(PASSENGERS . '.id', 'desc')->as_object()->execute();
        else
            $result = DB::select('name', 'rating', 'comments')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)
            //->where(PASSENGERS_LOG.'.comments','!=','')
                ->where(PASSENGERS_LOG . '.travel_status', '=', 1)->order_by('id', 'desc')->as_object()->execute();
        // print_r($result);        
        return $result;
    }
    /*** Get Passenger Profile details using passenger log id ***/
    public function get_passenger_log_details($passengerlog_id = "")
    {
		$arguments = array(
			array('$match' => array('_id' => (int)$passengerlog_id)),
			array('$lookup' =>
				array(
                    'from' => MDB_COMPANY,
                    'localField' => "company_id",
                    'foreignField' => "_id",
                    'as' => "company"
                )
            ),
            array('$unwind' => '$company'),
			
			array(
                '$lookup' =>
				array(
					'from'=>MDB_PASSENGERS,
					'localField'=> "passengers_id",
					'foreignField' => "_id",
					'as'=> "passengers"
				)
            ),
            array('$unwind'=>'$passengers'),
			
			array(
                '$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => "_id",
					'as' => "people"
				)
			),
			array('$unwind' => '$people'),
            
			array('$project' =>
				array(
					'passengers_log_id' => '$_id',
                    'get_companyid' => '$company._id',
					'driver_name' => '$people.name',
                    'driver_phone' => '$people.phone',
                    'passenger_discount' => '$passengers.discount',
                    'passenger_name' => '$passengers.name',
                    'passenger_email' => '$passengers.email',
                    'passenger_creditcard_no' => '$passengers.creditcard_details.creditcard_no',
                    'passenger_phone' => '$passengers.phone',
				)
			)							
		);
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		return (!empty($result['result'])?$result['result']:array());
    }
    /*** Get Passenger Profile details with tranaction using passenger log id ***/
    public function get_passenger_log_tranaction_details($passengerlog_id = "")
    {
        $sql    = "SELECT " . PASSENGERS_LOG . ".current_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".rating,  " . PEOPLE . ".name AS driver_name," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name," . PASSENGERS . ".email AS passenger_email," . PASSENGERS . ".phone AS passenger_phone," . TRANS . ".distance," . TRANS . ".actual_distance," . TRANS . ".fare," . TRANS . ".waiting_time," . TRANS . ".waiting_cost," . TRANS . ".remarks FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TRANS . " ON (  " . TRANS . ".`passengers_log_id` =  " . PASSENGERS_LOG . ".`passengers_log_id` ) 
WHERE  " . PASSENGERS_LOG . ".`passengers_log_id` =  '$passengerlog_id'";
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get Taxi fare per KM & Waiting charge of the company Based on Taxi***/
    public function get_taxi_fare_waiting_charge($taxi_id = "")
    {
        $sql    = "SELECT * FROM  " . TAXI . " JOIN  " . COMPANY . " ON (  " . COMPANY . ".`cid` =  " . TAXI . ".`taxi_company` ) WHERE  " . TAXI . ".`taxi_id` =  '$taxi_id'";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get Taxi fare per KM & Waiting charge of the company based Company***/
    public function get_taxi_fare_details($company_id = "")
    {
        $sql    = "SELECT * FROM  " . COMPANY . "  WHERE  `cid` =  '$company_id'";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get Taxi Model***/
    public function get_taxi_model_details($taxi_id = "")
    {
        $sql    = "SELECT * FROM  " . TAXI . "  WHERE  `taxi_id` =  '$taxi_id'";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get Taxi fare per KM & Waiting charge of the company based Company***/
    public function get_model_fare_details($model_id = "", $search_city = "", $company_id = '')
    {
        if ($search_city != '') {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_name like '%" . $search_city . "%' limit 0,1";
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
        }
        $model_fetch = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            $city_model_fare  = $model_fetch[0]['city_model_fare'];
        }
        if (FARE_SETTINGS == 2) {
            $sql = "SELECT (SUM(company_model_fare.base_fare)*($city_model_fare)/100) + company_model_fare.base_fare as base_fare,(SUM(company_model_fare.min_fare)*($city_model_fare)/100) + company_model_fare.min_fare as min_fare,(SUM(company_model_fare.cancellation_fare)*($city_model_fare)/100) + company_model_fare.cancellation_fare as cancellation_fare,(SUM(company_model_fare.below_km)*($city_model_fare)/100) + company_model_fare.below_km as below_km,(SUM(company_model_fare.above_km)*($city_model_fare)/100) + company_model_fare.above_km as above_km,company_model_fare.night_charge,company_model_fare.night_timing_from,company_model_fare.night_timing_to,company_model_fare.night_fare,
company_model_fare.waiting_time,company_model_fare.min_km,company_model_fare.below_above_km FROM  " . COMPANY_MODEL_FARE . " as company_model_fare WHERE company_model_fare.company_cid='$company_id' and company_model_fare.`model_id` = '$model_id'";
        } else {
            $sql = "SELECT (SUM(model.base_fare)*($city_model_fare)/100) + model.base_fare as base_fare,(SUM(model.min_fare)*($city_model_fare)/100) + model.min_fare as min_fare,(SUM(model.cancellation_fare)*($city_model_fare)/100) + model.cancellation_fare as cancellation_fare,(SUM(model.below_km)*($city_model_fare)/100) + model.below_km as below_km,(SUM(model.above_km)*($city_model_fare)/100) + model.above_km as above_km,model.night_charge,model.night_timing_from,model.night_timing_to,model.night_fare,model.waiting_time,model.min_km,model.below_above_km FROM  " . MOTORMODEL . " as model WHERE  model.`model_id` = '$model_id'";
        }
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    public function get_citymodel_fare_details($model_id = "", $search_city = "", $company_id = '')
    {
        if ($search_city != '') {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_id ='" . $search_city . "' limit 0,1";
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
        }
        $model_fetch = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            $city_model_fare  = $model_fetch[0]['city_model_fare'];
        }
        if (FARE_SETTINGS == 2) {
            $sql = "SELECT (SUM(company_model_fare.base_fare)*($city_model_fare)/100) + company_model_fare.base_fare as base_fare,(SUM(company_model_fare.min_fare)*($city_model_fare)/100) + company_model_fare.min_fare as min_fare,(SUM(company_model_fare.cancellation_fare)*($city_model_fare)/100) + company_model_fare.cancellation_fare as cancellation_fare,(SUM(company_model_fare.below_km)*($city_model_fare)/100) + company_model_fare.below_km as below_km,(SUM(company_model_fare.above_km)*($city_model_fare)/100) + company_model_fare.above_km as above_km,company_model_fare.night_charge,company_model_fare.night_timing_from,company_model_fare.night_timing_to,(SUM(company_model_fare.night_fare)*($city_model_fare)/100) + company_model_fare.night_fare as night_fare,
company_model_fare.waiting_time,company_model_fare.min_km,company_model_fare.below_above_km FROM  " . COMPANY_MODEL_FARE . " as company_model_fare WHERE company_model_fare.company_cid='$company_id' and company_model_fare.`model_id` = '$model_id'";
        } else {
            $sql = "SELECT (SUM(model.base_fare)*($city_model_fare)/100) + model.base_fare as base_fare,(SUM(model.min_fare)*($city_model_fare)/100) + model.min_fare as min_fare,(SUM(model.cancellation_fare)*($city_model_fare)/100) + model.cancellation_fare as cancellation_fare,(SUM(model.below_km)*($city_model_fare)/100) + model.below_km as below_km,(SUM(model.above_km)*($city_model_fare)/100) + model.above_km as above_km,model.night_charge,model.night_timing_from,model.night_timing_to,(SUM(model.night_fare)*($city_model_fare)/100) + model.night_fare as night_fare,model.waiting_time,model.min_km,model.below_above_km  FROM  " . MOTORMODEL . " as model WHERE  model.`model_id` = '$model_id'";
        }
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    //Function used to get the get_driver_logs
    public function get_driver_logs_ajax($id, $msg_status, $driver_reply = null)
    {
        $current_date = date('Y-m-d ' . '00:00:01');
        $result       = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->order_by('id', 'ASC')->where(PASSENGERS_LOG . '.travel_status', '!=', 8)->where(PASSENGERS_LOG . '.pickup_time', '>=', $current_date)->as_object()->execute();
        return $result;
    }
    //Get Driver Current Status if he is break,Avtive,Free
    public function get_driver_current_status($id)
    {
        /*$result = DB::select('*')->from(DRIVER)->where(DRIVER . '.driver_id', '=', $id)->order_by('id', 'ASC')->as_object()->execute();            
        return $result;*/
        
        //MongoDB
		$result = $this->mongo_db->find_one(MDB_DRIVER_INFO,array('_id'=>(int)$id),array('shift_status','update_date','loc.coordinates','status'));
		return (!empty($result))?$result:array();
    }
    public function get_shift_status($id)
    {
        //$res = $this->mongo_db->Find(MDB_SHIFT_HISTORY,array('driver_id' => (int)$id))->sort(array('_id'=>-1))->limit(1);
           ## fields_projection code added to support LAMP 7.0 and its mongo version 3.4.0
                $options=[
                    'sort'=>[
                        '_id'=>-1                        
                    ],
                    'limit'=>1
                ];
                $res = $this->mongo_db->find(MDB_SHIFT_HISTORY,array('driver_id' => (int)$id),array())->sort(array('_id'=>-1))->limit(1);
        $result = $res;
        $result = iterator_to_array($result);        
        return (!empty($result)) ? Commonfunction::change_key($result) : array();
    }
    /** Driver Current Travel Availability **/
    public function check_driver_travel_availability($driver_id, $pickup_time)
    {
        /*$condition   = "AND " . PASSENGERS_LOG . ".pickup_time >='" . date('Y-m-d 00:00:01') . "'";
        $sql         = "SELECT * FROM " . PASSENGERS_LOG . " WHERE `pickup_time` < '" . $pickup_time . "'  and `driver_id` = '" . $driver_id . "' and `driver_reply` = 'A' and (`travel_status` = 2)  $condition order by passengers_log_id desc limit 1 ";
        	echo $sql;exit;
        $availablity = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $availablity;*/
        
        $start_date = date('Y-m-d 00:00:01');
        //echo $start_date.'='.$pickup_time;
        //MongoDB
        $result = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array('driver_id'=>(int)$driver_id,'driver_reply'=>'A','travel_status'=>1,'pickup_time'=>array('$gte'=>$start_date,'$lt'=>$pickup_time)),array('driver_id','current_location','drop_location','_id','msg_status','driver_reply'))->sort(array('_id'=>-1))->limit(1);
        //echo '<pre>';print_r(iterator_to_array($result));exit;
        return (!empty($result))?iterator_to_array($result):array();
    }
    //Update Driver Break Status
    public function update_driver_break_status($id, $status, $stat = null)
    {
        if ($status == 1) {
            $break_status = $stat;
        } else {
            $break_status = 'F';
        }
        $sql_query = array(
            'status' => $break_status
        );
        DB::update(DRIVER)->set($sql_query)->where('driver_id', '=', $id)->execute();
    }
    //Update Driver Shift Status
    public function update_driver_shift_status($id, $status, $stat = null)
    {
      $sql_query          = array(
            'shift_status' => 'OUT'
        );
        $notification_query = array(
            'notification_setting' => 0
        );
        if ($status == 1) {
            $shift_status = 'IN';
            $sql_query          = array(
                'shift_status' => 'IN'
            );
            $notification_query = array(
                'notification_setting' => 1
            );
        }
		$result = $this->mongo_db->update(MDB_DRIVER_INFO,array('_id' => (int)$id),
                                          array('$set'=>$sql_query),array('upsert'=>false));
        
        $result1 = $this->mongo_db->update(MDB_PEOPLE,array('_id' => (int)$id),
                                           array('$set'=>$notification_query),array('upsert'=>false));
    }
    //Update Driver Status
    public function update_driver_status($id, $status, $field, $flag)
    {
        $data = DB::select('*')->from(PASSENGERS_LOG)->where(PASSENGERS_LOG . '.passengers_log_id', '=', $id)->as_object()->execute();
        foreach ($data as $values) {
            $driver_reply = $values->driver_reply;
        }
        //Acceptred Status
        if ($status == 'A') {
            $sql_query = array(
                'driver_reply' => $status,
                'time_to_reach_passen' => $field,
                'travel_status' => '9',
                'msg_status' => 'R'
            );
        }
        //Rejected Status and Adding the Driver Comments 
        else {
            $sql_query = array(
                'driver_reply' => $status,
                'driver_comments' => $field,
                'travel_status' => '10',
                'msg_status' => 'R'
            );
        }
        if ($driver_reply == '') {
            DB::update(PASSENGERS_LOG)->set($sql_query)->where('passengers_log_id', '=', $id)->execute();
            if ($status == 'A')
                return 1;
            else if ($status == 'R')
                return 2;
            else if ($status == 'C')
                return 3;
        } else {
            // Driver cancel the drip when pick up
            if ($flag == 1) {
                $sql_query = array(
                    'travel_status' => '10',
                    'driver_reply' => $status,
                    'driver_comments' => $field,
                    'msg_status' => 'R'
                );
                DB::update(PASSENGERS_LOG)->set($sql_query)->where('passengers_log_id', '=', $id)->execute();
                if ($status == 'R')
                    return 2;
                else if ($status == 'C')
                    return 3;
            } else {
                return 0;
            }
        }
    }
    //Function used to get the Manager Details
    public function get_manager_details($login_city, $login_state, $login_country, $company_id)
    {
        $data = DB::select('*')->from(PEOPLE)->where(PEOPLE . '.login_city', '=', $login_city)->where(PEOPLE . '.login_state', '=', $login_state)->where(PEOPLE . '.login_country', '=', $login_country)->where(PEOPLE . '.company_id', '=', $company_id)->where(PEOPLE . '.user_type', '=', 'M')->as_object()->execute();
        if (count($data) > 0) {
            $result = $data;
        } else {
            $result = DB::select('*')->from(PEOPLE)->join(COMPANY)->on(COMPANY . '.userid', '=', PEOPLE . '.id')->where(COMPANY . '.cid', '=', $company_id)->as_object()->execute();
        }
        return $result;
    }
    public function get_assignedtaxi_list($driver_id = '')
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $current_date[0] . ' 00:00:01';
        $end_time     = $current_date[0] . ' 23:59:59';
        $query        = " select * from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where mapping_driverid='$driver_id' AND mapping_startdate <=  '" . $end_time . "'
AND mapping_enddate >= '" . $start_time . "' and mapping_enddate >= '$current_time' order by mapping_startdate ASC";
        $result       = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function get_assignedtaxi_alllist($driver_id = '', $company_id)
    {
        if ($company_id == '') {
            $current_time = date('Y-m-d H:i:s');
            $start_time   = date('Y-m-d') . ' 00:00:01';
            $end_time     = date('Y-m-d') . ' 23:59:59';
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $company_condition = "";
        if ($company_id != "") {
            $company_condition = " AND mapping_companyid = '$company_id'";
        }
        $query  = " select * from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where mapping_driverid='$driver_id' and mapping_enddate >= '" . $current_time . "' $company_condition order by mapping_startdate ASC";
        ///echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //Update the Journey Status
    public function update_journey_status($id, $msg_status, $driver_reply, $travel_status)
    {
        $sql_query = array(
            'msg_status' => $msg_status,
            'driver_reply' => $driver_reply,
            'travel_status' => $travel_status
        );
        //print_r($sql_query);
        $result    = DB::update(PASSENGERS_LOG)->set($sql_query)->where('passengers_log_id', '=', $id)->execute();
    }
   
    public function get_trans_of_driver($id, $limit, $days_ago = '', $cur_day = '')
    {
        $d_day_ago = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 7, date("Y")));
        $d_cur_day = (date('Y-m-d'));
        if (($days_ago == '') && ($cur_day == '')) {
            $start = $d_day_ago;
            $end   = $d_cur_day;
        } else {
            $start = $days_ago;
            $end   = $cur_day;
        }
        //MongoDB
        $match_query = array("\$and" => array(array("pickup_time"=>array('$gte' => $start,'$lt'=> $end)),array('driver_id' => (int)$id),array('travel_status' => 1)));
       //print_r($match_query);//exit;
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind'=>'$trans'),
            array(
                '$project' => array(
                    'fare' => '$trans.fare',
                    'month' => array( '$substr' => array( '$pickup_time', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$pickup_time', 8, 2 ) ),
                )
            ),
            array('$group' => array('_id' => array('date' => '$day','month' => '$month'),
                    'fare' => array( '$sum' => '$fare' ),
                    'date' => array( '$first' => '$day' ),
                    'month' => array( '$first' => '$month' ),
                    'trips' => array( '$sum' => 1 ),
                    )
            ),
            array(
                '$skip' => 0
            ),
            array(
              '$limit' => (int)$limit
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    public function get_trans_of_taxi($id, $limit, $days_ago = '', $cur_day = '')
    {
        $d_day_ago = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 7, date("Y")));
        $d_cur_day = (date('Y-m-d'));
        if (($days_ago == '') && ($cur_day == '')) {
            $start = $d_day_ago;
            $end   = $d_cur_day;
        } else {
            $start = $days_ago;
            $end   = $cur_day;
        }
       /* $query  = "SELECT round(sum(t.`fare`)) as fare,count(t.`fare`) as trips,DATE_FORMAT(log.`pickup_time`,'%d') as date,DATE_FORMAT(log.`pickup_time`,'%M') as month  FROM " . PASSENGERS_LOG . " as log LEFT JOIN " . TRANS . " as t on log.`passengers_log_id`=t.`passengers_log_id` WHERE log.`taxi_id` = " . $id . " AND log.`travel_status` = 1 AND log.`pickup_time` BETWEEN '" . $start . "' AND '" . $end . "' group by DATE(log.`pickup_time`) limit 0,$limit ";
        //echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;*/
       
       //MongoDB
       $match_query = array("\$and" => array(array("pickup_time"=>array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start) * 1000),'$lt'=>  new \MongoDB\BSON\UTCDateTime(strtotime($end) * 1000))),array('taxi_id' => (int)$id),array('travel_status' => 1)));
       //$match_query = array("\$and" => array(array("pickup_time"=>array('$gte' => $start,'$lt'=> $end)),array('taxi_id' => (int)$id),array('travel_status' => 1)));
       //print_r($match_query);//exit;
       $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind'=>'$trans'),
            array(
                '$project' => array(
                    'fare' => '$trans.fare',
                    "month" => array( '$substr' => array( '$pickup_time', 5, 2 ) ),
                    "day" => array( '$substr'=> array( '$pickup_time', 8, 2 ) ),
                )
            ),
            array('$group' => array("_id" => array("date" => '$day',"month" => '$month'),
                    "fare" => array( '$sum' => '$fare' ),
                    "trips" => array( '$sum' => 1 ),
                    )
            ),
            array(
                '$skip' => 0
            ),
            array(
              '$limit' => (int)$limit
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    //** function to get total transaction count of a taxi **//
    public function get_total_trans_taxi($id)
    {
        /*$query  = "SELECT count(log.`passengers_log_id`) as total  FROM " . PASSENGERS_LOG . " as log LEFT JOIN " . TRANS . " as t on log.`passengers_log_id`=t.`passengers_log_id` WHERE log.`taxi_id` = " . $id . " AND log.`travel_status` = 1 group by DATE(log.`pickup_time`)";
        //echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->get('total');
        echo $result;exit;
        return $result;*/
        
       //MongoDB
       $match_query = array("\$and" => array(array('taxi_id' => (int)$id),array('travel_status' => 1)));
       $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind'=>'$trans'),
            array('$group' => array("_id" => 0,
                    "count" => array( '$sum' => 1 ),
                    )
            ),
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result'][0]['count']:0;
    }
    public function get_taxi_trips($id)
    {
        $match_query = array("\$and" => array(array('taxi_id' => (int)$id),array('travel_status' => 1),array('dlh.status' => 'A')));
        $match_query2 = array("\$and" => array(array('dlh.status' => 'A')));
        $arguments = array(
            array('$lookup' 		=> array(
                    'from'			=>	MDB_LOCATION_HISTORY,
                    'localField'	=> "driver_id",
                    'foreignField'	=> "driver_id",
                    'localField'	=> "_id",
                    'foreignField'	=> "trip_id",
                    'as'			=> "dlh"
                )
            ),
            array('$unwind'=>'$dlh'),
            array('$match'	=> $match_query2),
            array(
                '$project' => array('_id'=>0,
                    'passengers_log_id' => '$_id',
                    'active_record' => '$dlh.loc',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                )
            ),
            array(
                '$skip' => 0
            ),
            array(
              '$limit' => 3
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        return (!empty($result['result']))?$result['result']:array();
    }
    //Function used to get all driver break and service logs 
    public function count_get_driver_logs_service($id)
    {
        $query  = " select * from " . DRIVERBREAKSERVICE . " join " . TAXI . " on " . DRIVERBREAKSERVICE . ".taxi_id =" . TAXI . ".taxi_id where driver_id='$id' order by driver_break_service_id DESC";
        //echo $query;
        $result = Db::query(Database::SELECT, $query)->as_object()->execute();
        return count($result);
    }

    //Function used to get all Shift logs
    public function count_get_driver_shift_logs($id)
    {
        $result = $this->mongo_db->count(MDB_SHIFT_HISTORY,array('driver_id' => (int)$id));
        return (isset($result)) ? $result : 0;
    }
    public function get_driver_shift_logs($id, $start, $limit)
    {    
		
		$sort = array('$sort' => array('_id' => 1)); // Asc
		
		if(isset($_REQUEST['order'])) { 
			if($_REQUEST['order'] == 'desc') { // Desc
				$sort = array('$sort' => array('_id' => -1));
			}
		}
        //MongoDB
        $match_query = array('driver_id' =>(int)$id);
        
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TAXI,
                    'localField'	=> "taxi_id",
                    'foreignField'	=> "_id",
                    'as'			=> "taxi"
                )
            ),
            array('$unwind'=>'$taxi'),
              array('$lookup' 		=> array(
                    'from'			=>	MDB_PEOPLE,
                    'localField'	=> "driver_id",
                    'foreignField'	=> "_id",
                    'as'			=> "driver"
                )
            ),
            array('$unwind'=>'$driver'),
            $sort,
            array(
                '$project' => array('_id'=>0,
                    'driver_id' => '$driver_id',
                    'reason' => '$reason',
                    'shift_start' =>'$shift_start',
                    'shift_end' => '$shift_end',
                    'taxi_no' => '$taxi.taxi_no',
                    'taxi_id' => '$taxi._id',
                    'current_km' => '$taxi.starting_km',
                    'start_km' => '$start_km',
                    'end_km' => '$end_km',
                    'shift_status' => '$status',
                )
            ),
            
            array(
                '$skip' => (int)$limit
            ),
            array(
              '$limit' => (int)$start
            )
        );
        $result = $this->mongo_db->aggregate(MDB_SHIFT_HISTORY,$arguments);
  //~ echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    public function getTaxiforDriver($id)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $query        = "select mapping_taxiid from " . TAXIMAPPING . " where mapping_status='A' and mapping_driverid='" . $id . "' AND '$current_time'  between mapping_startdate  and  mapping_enddate order by mapping_startdate DESC";
        //echo $query;exit;
        $result       = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function get_driver_earnings($driver_id)
    {
        $query  = "select *, sum(fare) as total_amount from " . PASSENGERS_LOG . " join 
		" . TRANS . " on " . PASSENGERS_LOG . ".passengers_log_id = " . TRANS . ".passengers_log_id 
		where " . PASSENGERS_LOG . ".driver_id='$driver_id' and " . PASSENGERS_LOG . ".travel_status='1'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function set_trans_commissiondetails($passenger_logid, $total_fare)
    {
        $passengerlog_query   = "select * from " . PASSENGERS_LOG . " where passengers_log_id='$passenger_logid'";
        $passengerlog_results = Db::query(Database::SELECT, $passengerlog_query)->execute()->as_array();
        $company_id           = $passengerlog_results[0]['company_id'];
        $trans_commission     = array();
        /** Commission Part **/
        $first_query          = "select * from " . PACKAGE_REPORT . " join " . PACKAGE . " on " . PACKAGE . ".package_id =" . PACKAGE_REPORT . ".upgrade_packageid  where " . PACKAGE_REPORT . ".upgrade_companyid = " . $company_id . "  order by upgrade_id desc limit 0,1";
        $first_results        = Db::query(Database::SELECT, $first_query)->execute()->as_array();
        if (count($first_results) > 0) {
            $check_package_type = $first_results[0]['check_package_type'];
            $package_id         = $first_results[0]['upgrade_packageid'];
        } else {
            $check_package_type = 'T';
            $package_id         = '';
        }
        if ($check_package_type != 'N') {
            $admin_amt     = ($total_fare * ADMIN_COMMISSON) / 100; //payable to admin
            $admin_amt     = round($admin_amt, 2);
            $total_balance = round($total_fare, 2);
            //Set Commission to Admin	
            $updatequery   = " UPDATE " . PEOPLE . " SET account_balance=account_balance+$admin_amt wHERE user_type = 'A'";
            $updateresult  = Db::query(Database::UPDATE, $updatequery)->execute();
        } else {
            $admin_amt = 0;
        }
        //$company_amt = $total_fare - $admin_amt; 	
        $company_amt                            = $total_fare;
        $company_amt                            = round($company_amt, 2);
        $trans_commission['admin_commission']   = $admin_amt;
        $trans_commission['company_commission'] = $company_amt;
        $trans_commission['package_type']       = $check_package_type;
        //Set Commission to Admin	
        $updatequery                            = " UPDATE " . PEOPLE . " SET account_balance=account_balance+$company_amt WHERE user_type = 'C' and company_id=" . $company_id;
        $updateresult                           = Db::query(Database::UPDATE, $updatequery)->execute();
        /** Commission Part **/
        return $trans_commission;
    }
    public function driver_companystatus($user_id)
    {
        $query  = "SELECT * FROM " . PEOPLE . " WHERE id='$user_id'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            $company_id = $result[0]['company_id'];
            $query      = "SELECT company_status FROM " . COMPANY . " WHERE cid='$company_id'";
            $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
            if (count($result) > 0) {
                return $result[0]['company_status'];
            } else {
                $result[0]['company_status'] = 'A';
                return $result[0]['company_status'];
            }
        } else {
            $result[0]['company_status'] = 'A';
            return $result[0]['company_status'];
        }
    }
    public function get_company_ownerid($company_id)
    {
        $query  = "SELECT id FROM " . PEOPLE . " WHERE company_id='$company_id' and user_type='C'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    
    public function get_trip_statitics($driver_id)
    {
        $start_date      = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 7, date("Y"))).' 00:00:01'; //'2015-03-06 00:00:01';
        $end_date        = (date('Y-m-d')).' 23:59:59';
        //MongoDB
        //Rejection query starts
        $match_query = array("\$and" => array(array("createdate"=>array('$gte' => $start_date,'$lt'=> $end_date)),array('driver_id' => (int)$driver_id)));
        $rejected_arguments = array(
            array('$match'	=> $match_query),
            array(
                '$project' => array(
                    'createdate' => '$createdate',
                    'year' => array( '$substr' => array( '$createdate', 0, 4 ) ),
                    'month' => array( '$substr' => array( '$createdate', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$createdate', 8, 2 ) ),
                )
            ),
            array('$group' => array('_id' => array('year' => '$year','date' => '$day','month' => '$month'),
                'createdate' => array('$first' => '$createdate'),
                'rejected_count' => array( '$sum' => 1 ),
                )
            )
        );
        $rejected_trips = $this->mongo_db->aggregate(MDB_REJECTION_HISTORY,$rejected_arguments);
        //Rejection query End
        //Cancelled query starts
        $match_query = array("\$and" => array(array("createdate"=>array('$gte' => $start_date,'$lt'=> $end_date)),array('driver_id' => (int)$driver_id),array('driver_reply' => 'C')));
        $cancelled_arguments = array(
            array('$match'	=> $match_query),
            array(
                '$project' => array(
                    'createdate' => '$createdate',
                    'year' => array( '$substr' => array( '$createdate', 0, 4 ) ),
                    'month' => array( '$substr' => array( '$createdate', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$createdate', 8, 2 ) ),
                )
            ),
            array('$group' => array('_id' => array('year' => '$year','date' => '$day','month' => '$month'),
                'createdate' => array('$first' => '$createdate'),
                'cancelled_count' => array( '$sum' => 1 ),
                )
            )
        );
        $cancelled_trips = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_CANCELLED,$cancelled_arguments);
        //Cancelled query End
        //Completed query starts
        $match_query = array("\$and" => array(array("createdate"=>array('$gte' => $start_date,'$lt'=> $end_date)),array('driver_id' => (int)$driver_id),array('driver_reply' => 'A'),array('travel_status' => 1)));
        $completed_arguments = array(
            array('$match'	=> $match_query),
            array(
                '$project' => array(
                    'createdate' => '$createdate',
                    'year' => array( '$substr' => array( '$createdate', 0, 4 ) ),
                    'month' => array( '$substr' => array( '$createdate', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$createdate', 8, 2 ) ),
                )
            ),
            array('$group' => array('_id' => array( 'year' => '$year','date' => '$day','month' => '$month'),
                'createdate' => array('$first' => '$createdate'),
                'completed_count' => array( '$sum' => 1 ),
                )
            )
        );
         
        $completed_trips = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$completed_arguments);
        $result = array(
            'completed_trips' => (isset($completed_trips['result']))?$completed_trips['result']:array(),
            'rejected_trips' => (isset($rejected_trips['result']))?$rejected_trips['result']:array(),
            'cancelled_trips' => (isset($cancelled_trips['result']))?$cancelled_trips['result']:array()
        );
        //print_r($result); exit;
        return $result;
    }  
    public function get_current_trip_logs($id)
    {
        if (TIMEZONE) {
            $current_time = convert_timezone('now', TIMEZONE);
            $current_date = explode(' ', $current_time);
            $start_time   = $current_date[0] . ' 00:00:01';
            $end_time     = $current_date[0] . ' 23:59:59';
            $date         = $current_date[0] . ' %';
        } else {
            $current_time = date('Y-m-d H:i:s');
            $start_time   = date('Y-m-d') . ' 00:00:01';
            $end_time     = date('Y-m-d') . ' 23:59:59';
            $date         = date('Y-m-d %');
        }
        
        //MongoDB
        $match_query = array('driver_id' => (int)$id,'driver_reply' => 'A', 'pickup_time'=>array('$gte'=>$start_time,'$lte'=>$end_time), "travel_status"=> array('$in'=>array(5,2)));
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	PASSENGERS,
                    'localField'	=> 'driver_id',
                    'foreignField'	=> "_id",
                    'as'			=> "people"
                )
            ),
            array('$unwind' => '$people'),
            array(
                '$project' => array('_id'=>0,
                    'id' => '$_id',
                    'approx_distance' => '$approx_distance',
                    'approx_fare'=>'$approx_fare',
                    'distance'=>'$distance',
                    'company_id'=>'$company_id',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'travel_status' => '$travel_status',
                )
            ),
            array(
                '$sort' => array(
                    '_id' => -1
                ),
            ),
            array(
              '$limit' => (int)1
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
    
    //** function to get total transaction count of a driver **//
    public function get_total_trans_driver($id)
    {
        /*$query  = "SELECT count(log.`passengers_log_id`) as total  FROM " . PASSENGERS_LOG . " as log LEFT JOIN " . TRANS . " as t on log.`passengers_log_id`=t.`passengers_log_id` WHERE log.`driver_id` = " . $id . " AND log.`travel_status` = 1 group by DATE(log.`pickup_time`)";
        //echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->get('total');
        return $result;*/
    
        //MongoDB
       $match_query = array("\$and" => array(array('driver_id' => (int)$id),array('travel_status' => 1)));
       $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind'=>'$trans'),
            array('$group' => array("_id" => 0,
                    "count" => array( '$sum' => 1 ),
                    )
            ),
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']) && isset($result['result'][0]['count']))?$result['result'][0]['count']:0;
    }
        
    //** function to get total ratings of a driver **//
    public function get_total_ratings_driver($id)
    {
        //MongoDB
        $match_query = array('driver_id' => (int)$id, 'travel_status' => 1, 'rating' => array('$ne' => 0));
        //print_r($match_query);//exit;
        $arguments = array(
            array('$match'	=> $match_query),
            array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind'=>'$trans'),
            array(
                '$project' => array(
                    'rating' => '$rating',
                    'month' => array( '$substr' => array( '$pickup_time', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$pickup_time', 8, 2 ) ),
                )
            ),
            array('$group' => array('_id' => array('date' => '$day','month' => '$month'),
                    'total_ratings' => array( '$sum' => '$rating' ),
                    'trip_cnt' => array( '$sum' => 1 ),
                    )
            )
        );
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:array();
    }
   
    //** function to get overall trip statistics count **//
    public function getoverall_trip_statitics_count($driver_id)
    {
        $rejected_query  = "SELECT count(`createdate`) as rejected_count FROM " . DRIVER_REJECTION . " where driver_id = $driver_id group by DATE(`createdate`)";
        $rejected_trips  = Db::query(Database::SELECT, $rejected_query)->execute()->get('rejected_count');
        $cancelled_query = "SELECT count(`createdate`) as cancelled_count FROM `passengers_log` where `driver_reply`='C' and `driver_id` = '$driver_id' group by DATE(`createdate`)";
        $cancelled_trips = Db::query(Database::SELECT, $cancelled_query)->execute()->get('cancelled_count');
        $completed_query = "SELECT count(`createdate`) as completed_count FROM `passengers_log` where `driver_reply`='A' and `driver_id` = '$driver_id' and `travel_status` = '1' group by DATE(`createdate`)";
        $completed_trips = Db::query(Database::SELECT, $completed_query)->execute()->get('completed_count');
        if ($rejected_trips == 0 && $cancelled_trips == 0 && $completed_trips == 0) {
            return 0;
        } else {
            return 1;
        }
    }
}
