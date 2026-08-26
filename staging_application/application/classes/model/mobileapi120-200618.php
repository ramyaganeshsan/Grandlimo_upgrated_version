<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contain API model details - Version 1.1.5

* @Package: Taximobility

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Mobileapi120 extends Model
{
    public function __construct()
    {
        /*$this->session = Session::instance();	
        $this->name = $this->session->get("name");
        $this->admin_userid = $this->session->get("passenger_id");
        $this->admin_email = $this->session->get("email");
        $this->user_admin_type = $this->session->get("user_type");*/
        $this->currentdate = Commonfunction::getCurrentTimeStamp();
        //$this->mysql = Database::instance();
		
		//MongoDB Instance
		$this->mongo_db = MangoDB::instance('default');
		
    }
    public function search($search)
    {
        echo "API Model";
    }
    //Get Common config
    public function select_site_settings($company_id)
    {
        //$result=DB::select_array($field)->from($table)->limit(1)->execute()->as_array();
        if ($company_id != '') {
            /*$query = "SELECT company_currency as site_currency,company_facebook_key as facebook_key,
company_facebook_secretkey as facebook_secretkey,company_facebook_share as facebook_share,company_twitter_share as twitter_share,cancellation_fare,company_logo as site_logo  FROM " . COMPANYINFO . " where company_cid = '$company_id' limit 0,1 ";*/

			$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=> (int)$company_id],['companyinfo.company_currency','companyinfo.company_facebook_key','companyinfo.company_facebook_secretkey','companyinfo.company_facebook_share','companyinfo.company_twitter_share','companyinfo.cancellation_fare','companyinfo.company_logo']);
        } else {
           /*$query = "SELECT app_name,site_country,site_currency,facebook_key,
facebook_secretkey,facebook_share,twitter_share,site_logo FROM " . SITEINFO . " limit 0,1 ";*/

			$result = $this->mongo_db->find_one(MDB_SITEINFO,[],['app_name','site_country','site_currency','facebook_key','facebook_secretkey','facebook_share','twitter_share','site_logo']);
        }
        /*echo $query;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();*/
        //$result = iterator_to_array($res);
        return (!empty($result)) ? $result: [];
    }
    //Passenger Login
    public function passenger_login($data)
    {
		$result = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=>$data['phone'],'user_status'=>'A'],['_id','salutation','name','lastname','email','phone','deviceid','devicetoken','devicetype','child_exist','allow_creditcard','login_status']);
		if (count($result) > 0) {
            if ($data['deviceid'] != "") {
                $update_array = [
                    "device_token" => $data['devicetoken'],
                    "device_id" => $data['deviceid'],
                    "device_type" => $data['devicetype'],
                    "login_status" => "S"
                ];                
				$update = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$result['_id']],['$set'=> $update_array]);
			}
            return $result;
        } else {
            return [];
        }
    }
	
	public function passenger_login_details($id)
    {
		$result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$id,'user_status'=>'A'],['_id','salutation','name','lastname','email','phone','deviceid','devicetoken','devicetype','child_exist','allow_creditcard','login_status','profile_image','wallet_amount']);
		return $result;
    }
	
	public function passenger_login_details_with_phone($phone)
    {
		$result = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=>$phone,'user_status'=>'A'],['_id','salutation','name','lastname','email','phone','deviceid','devicetoken','devicetype','child_exist','allow_creditcard','login_status','profile_image','wallet_amount']);
		return $result;
    }
    // Check Whether Passenger Email is Already Exist or Not
    public function check_email_passengers($email = "", $company_id = "")
    {
		$res = $this->mongo_db->find(MDB_PASSENGERS,['email'=> $email, 'passenger_cid'=>(int)$company_id],['email']);
        $result = iterator_to_array($res);
        return (count($result)>0) ? 1 : 0 ;
    }
    // Check Whether Passenger phone is Already Exist or Not
    public function check_phone_passengers($phone = "")
    {
		$response = [];
		$response['code'] = 0;		
        $is_child = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$phone,'user_status'=>'I'],['phone'])->limit(1);
		$result1 = iterator_to_array($is_child);
		if(is_array($result1) && !empty($result1)) {
			$response['code'] = 1;		
		}
		$is_register = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$phone,'user_status'=>'A'],['phone'])->limit(1);
		$result2 = iterator_to_array($is_register);
		if(is_array($result2) && !empty($result2)) {
			$response['code'] = 2;			
		}

        $is_register = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$phone,'user_status'=>'PB'],['phone'])->limit(1);
        $result2 = iterator_to_array($is_register);
        if(is_array($result2) && !empty($result2)) {
            $response['code'] = 3;          
        }

		return $response;
    }
	
	public function check_phone_passengers_register($phone = "", $company_id = "", $country_code = "")
    {
        $c_id = 0;
        if ($company_id != '') {
            $c_id = $company_id;
        }
		$res = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$phone],['phone']);
		
        $result = iterator_to_array($res);
        return (count($result)>0) ? 1 : 0 ;
    }
    // Check Whether Passenger phone is Already Exist or Not
    public function check_phone_bypassengers($phone = "", $email = '', $company_id = '', $country_code = '')
    {
		$match_query=[];
		$match_query['phone'] = $phone;
		$match_query['country_code'] = $country_code;
		if($company_id !=''){
			$match_query['passenger_cid'] = (int)$company_id;
		}
        $result = $this->mongo_db->count(MDB_PASSENGERS,$match_query,['phone']);
        if ($result > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function check_phone_bypassengers_old($phone = "", $email = '', $company_id = '', $country_code = '')
    {
        if ($company_id != '') {
            $sql = "SELECT phone FROM " . PASSENGERS . " WHERE ( phone='$phone' and country_code='$country_code') and passenger_cid = '$company_id'";
        } else {
            $sql = "SELECT phone FROM " . PASSENGERS . " WHERE ( phone='$phone' and country_code='$country_code') and passenger_cid = '0'";
        }
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Whether People phone is Already Exist or Not
    // Check with all placed before going to edit this function
    public function check_phone_people($phone = "", $user_type = "", $company_id)
    {
        /*if ($company_id != '') {
            $sql = "SELECT phone FROM " . PEOPLE . " WHERE phone='$phone' and user_type='$user_type' and company_id='$company_id'";
        } else {
            $sql = "SELECT phone FROM " . PEOPLE . " WHERE phone='$phone' and user_type='$user_type'";
			$condition = array('phone'=>(int)$phone,'user_type'=>$user_type);
        } 
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }*/
        
        $match = ["phone"=>$phone, "user_type"=>$user_type, "company_id" => (int)$company_id];
        $result = $this->mongo_db->find_one(MDB_PEOPLE,$match,["phone"]);
		return (count($result)>0)?1:0;
    }
    public function new_check_phone_people($data, $company_id)
    {
        //$match = array("phone"=>isset($data['phone_no']) ? $data['phone_no'] : $data['phone'], "user_type"=>'D', "driver_code"=>$data['driver_code'], "company_id" => (int)$company_id);
        $match = ["phone"=>isset($data['phone_no']) ? $data['phone_no'] : $data['phone'], "user_type"=>'D', "company_id" => (int)$company_id];
        $result = $this->mongo_db->find_one(MDB_PEOPLE,$match,["phone"]);
		return (count($result)>0)?1:0;
    }
    /**User Signup**/
    public function signup($val, $password = '', $random_key = "", $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = "")
    {
        if ($company_id != '') {
            $cid = $company_id;
        } else {
            $cid = 0;
        }
        $username                 = Html::chars($val['name']);
        //$activation_key = Commonfunction::admin_random_user_password_generator();
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        /*$fieldname_array = array('name','email','password','org_password','phone','address','creditcard_no','creditcard_cvv','expdatemonth','expdateyear','activation_key','activation_status','user_status','created_date','passenger_cid');
        $values_array = array($val['name'],$val['email'],md5($val['password1']),$val['password1'],$val['mobileno'],$val['address'],$val['creditcard_no'],$val['creditcard_cvv'],$val['expdatemonth'],$val['expdateyear'],$activation_key,'1','A',$current_time,$cid);
        $result = DB::insert(PASSENGERS, $fieldname_array)
        ->values($values_array)
        ->execute(); */
        $name                     = $val['name'];
        $email                    = $val['email'];
        $mdpassword               = md5($password);
        $phone                    = $val['mobileno'];
        $address                  = $val['address'];
        $creditcard_no            = encrypt_decrypt('encrypt', $val['creditcard_no']);
        $creditcard_cvv           = ""; //$val['creditcard_cvv'];
        $expdatemonth             = $val['expdatemonth'];
        $expdateyear              = $val['expdateyear'];
        $query                    = "insert into " . PASSENGERS . "(name,email,password,phone,address,activation_key,activation_status,user_status,created_date,passenger_cid)values('" . $name . "','" . $email . "','" . $mdpassword . "','" . $phone . "','" . $address . "','" . $random_key . "','1','A','" . $current_time . "','" . $cid . "')";
        $result                   = Db::query(Database::INSERT, $query)->execute();
        if ($result) {
            $email = DB::select()->from(PASSENGERS)->where('email', '=', $val['email'])->execute()->as_array();
            if ($devicetoken != "") {
                $update_array               = [
                    "device_token" => $devicetoken,
                    "device_id" => $deviceid,
                    "device_type" => $devicetype
                ];
                /*if($company_id != '')
                {
                $update_device_token_result = DB::update(PASSENGERS)
                ->set($update_array)
                ->where('email', '=', $val['email'])
                ->where('passenger_cid', '=', '0')
                ->execute();				
                }
                else
                {
                $update_device_token_result = DB::update(PASSENGERS)
                ->set($update_array)
                ->where('email', '=', $val['email'])
                ->where('passenger_cid', '=', $company_id)
                ->execute();				
                }*/
                $update_device_token_result = DB::update(PASSENGERS)->set($update_array)->where('email', '=', $val['email'])->execute();
            }
            return 1;
        } else {
            return 0;
        }
    }
    // Passenger Mobile Number 
    public function update_passenger_mobile($email = "", $mobile = "", $creditcard_no = "", $creditcard_cvv = "", $expdatemonth = "", $expdateyear = "", $company_id = "", $country_code = "")
    {
        try {
            $update_array = ["phone" => $mobile,"country_code" => $country_code];
			$match_query = [];
			$match_query['email'] = $email;
			if ($company_id != '' & $company_id!=0) {
			   $match_query['passenger_cid'] = (int)$company_id;
			}
			$result = $this->mongo_db->update(MDB_PASSENGERS,$match_query,['$set'=>$update_array],['upsert'=>false]);
			return (empty($result['err']))?1:0;
        }
        catch (Kohana_Exception $e) {
            return -1;
        }
    }
    public function update_passenger_mobile_old($email = "", $mobile = "", $creditcard_no = "", $creditcard_cvv = "", $expdatemonth = "", $expdateyear = "", $company_id = "", $country_code = "")
    {
        try {
            $update_array = [
                "phone" => $mobile,
                "country_code" => $country_code
            ];
            if ($company_id != '') {
                $result = DB::update(PASSENGERS)->set($update_array)->where('email', '=', $email)->where('passenger_cid', '=', $company_id)->execute();
            } else {
                $result = DB::update(PASSENGERS)->set($update_array)->where('email', '=', $email)->where('passenger_cid', '=', '0')->execute();
            }
            return 1;
        }
        catch (Kohana_Exception $e) {
            return -1;
        }
    }
    //Passenger Profile
    public function passenger_profile($passid)
    {
		$result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=> (int)$passid],['_id','name','lastname','salutation','email','profile_image','phone','civilid','civilid_front','civilid_back','civilid_front_thumb','civilid_back_thumb','user_status','login_from','wallet_amount','vip_user','wallet_block']);
       return (!empty($result)) ? $result: [];		
    }
    /** Save Customer Booking **/
      /** Save Customer Booking **/
    public function savebooking($val, $company_id)
    {		
		
        $specific_dates      = isset($val['specific_dates'])?$val['specific_dates']:'';
        $pickup_time      = urldecode($val['pickup_time']);
        $payment_type      = $val['payment_type'];
        $roundtrip        = $val['roundtrip'];
        $cityname         = $val['cityname'];
        //$approx_distance  = ""; //mysql_real_escape_string($val['approx_distance']);
        $approx_fare      = ""; //mysql_real_escape_string($val['approx_fare']);		
        $pickup_latitude  = $val['pickup_latitude'];
        $pickup_longitude = $val['pickup_longitude'];
        $drop_latitude    = $val['drop_latitude'];
        $drop_longitude   = $val['drop_longitude'];
        $notes_driver     = $val['notes'];
        $distance_away    = $val['distance_away'];
        $promo_code       = $val['promo_code'];
        $now_after        = $val['now_after'];
        // New Field // 
        $approx_distance  = isset($val['approx_distance']) ? $val['approx_distance'] : "";        
        $approx_duration  = isset($val['approx_duration']) ? $val['approx_duration'] : "";
        // New Field //
        $sub_logid        = $this->get_sublogid($val['sub_logid']);
        $city_id          = "";
        // Get Pickup & Drop location Lat & Long using Google API 
        // Which is used when we calculating approximat fare and distance from api side
		$city_id     = "";
		$arguments = [['$unwind'=>'$stateinfo'],
							['$unwind'=>'$stateinfo.cityinfo'],
							['$match'=>[
								'stateinfo.cityinfo.city_name' =>  new \MongoDB\BSON\Regex($cityname, 'i')]],
							['$project'=>['city_id'=>'$stateinfo.cityinfo.city_id']],
							['$limit' => 1]
					];		
		$city_query = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		$city = (!empty($city_query['result'])?$city_query['result']:[]);
        if (count($city) > 0) {
            $city_id = $city[0]['city_id'];
        } else {
            $arguments = [['$unwind'=>'$stateinfo'],
							   ['$unwind'=>'$stateinfo.cityinfo'],
								['$match'=>[
													  'default'=>1,
													  'stateinfo.default'=>1,
													  'stateinfo.cityinfo.default'=>1
												 ]],
								 ['$project'=>['city_id'=>'$stateinfo.cityinfo.city_id']]
						];
			$city_query = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			$city = (!empty($city_query['result'])?$city_query['result']:[]);
			$city_id = $city[0]['city_id'];
        }
        //$get_taxi_fare_based_model = $this->get_current_taxi_details($val["driver_id"],$val["taxi_id"],$city_id);						
        $company_tax      = ""; //$get_taxi_fare_based_model[0]['company_tax'];			
        if ($roundtrip == 'true') {
            $pickupdrop = 1;
        } else {
            $pickupdrop = 0;
        }
        $waitingtime = '';
       
       /* $company_id  = $this->get_company_id($val['driver_id']);
        if (count($company_id) > 0) {
            $company_id = $company_id['company_id'];
        } else {
            $company_id = 0;
        } */
       
        if ($company_id == 0) {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
                $time         = date('H:i:s', strtotime($pickup_time));
                $update_time  = $current_date[0] . ' ' . $time;
            } else {
                $time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        } else {
			$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            if (!empty($result)) {
				$time_zone = (isset($result['companydetails']['time_zone'])?$result['companydetails']['time_zone']:"");
                $time                    = date('H:i:s', strtotime($pickup_time));
                $current_datetime        = convert_timezone('now', $time_zone);
                $curretnt_datetime_split = explode(' ', $current_datetime);
                $update_time             = $curretnt_datetime_split[0] . ' ' . $time;
            } else {
				$time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        }
        $booking_key                = text::random($type = 'alnum', $length = 10);	
        $driver_availability_result = $this->get_driver_availability($val['driver_id'], $update_time);
        if (count($driver_availability_result) == 0) {
			
            if ((int)$now_after == 0) {
				//echo " 0 Now After".$now_after;exit;
                /*
				$rs = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
				$res = (!empty($rs))?iterator_to_array($rs):array(1);
				reset($res);
				$first_key = key($res);
				$inc_id = $first_key+1;
                */

                $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,['_id' => 1],['last_logid']);
                $inc_id =  $last_logidresult['last_logid']+1;

				$insert_array = [
					'_id' => (int)$inc_id,
					'passengers_id' => (int)$val['passenger_id'],
					'driver_id' => (int)$val['driver_id'],
					'booking_key' => $booking_key,
					//'driver_reply' =>"",
					'msg_status' => "",
					'company_id' => (int)$company_id,
					'current_location' => (urldecode($val['pickupplace'])),
					'pickup_latitude' => $pickup_latitude,
					'pickup_longitude' => $pickup_longitude,
					'drop_location' => (urldecode($val['dropplace']))?(urldecode($val['dropplace'])):'',
					'drop_latitude' => (isset($drop_latitude))?$drop_latitude:'',
					'drop_longitude' => (isset($drop_longitude))?$drop_longitude:'',
					'no_passengers' => (int)$val['no_passengers'],
					'max_luggage' => (int)$val['max_luggage'],
					'luggage' => (int)$val['max_luggage'],
					'airport_pickup' => ((int)$val['airport_pickup'])?(int)$val['airport_pickup']:'',
					'airport_flight_number' =>$val['airport_flight_number'],
					'airport_flight_time' => $val['airport_flight_time'],
					'airport_notes' => $val['airport_notes'],
					// New Field //
					'approx_distance' => (double)$approx_distance,
					'approx_duration' => $approx_duration,
					// New Field //
					'approx_fare' => (double)$approx_fare,
					'time_to_reach_passen' => $distance_away,
					//'pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($update_time) * 1000),
					//'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($update_time) * 1000),
                    'pickup_time' => new \MongoDB\BSON\UTCDateTime((time() * 1000)+900),
                    'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime((time() * 1000)+900),
					'pickupdrop' => $pickupdrop,
					'waitingtime' => $waitingtime,
					'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
					'taxi_modelid' => (int)$val['motor_model'],
					'taxi_id' => (int)$val['taxi_id'],
					'booking_from' => 1,
					'search_city' => (int)$city_id,
					'sub_logid' => (int)$sub_logid,
					'notes_driver' => $notes_driver,
					'booking_from_cid' => (int)$company_id,
					'company_tax' => (float)$company_tax,
					'bookingtype' => 1,
					'bookby' => 1,
					'travel_status' => 0,
					'promocode' => $promo_code,
					'distance' => (isset($val['distance']))?$val['distance']:'',
					 'pickupdrop' => (isset($val['pickupdrop']))?$val['pickupdrop']:'',
					  'fixedprice' => (isset($val['fixedprice']))?$val['fixedprice']:'',
					'now_after' => 0,
					'book_type' => 'Book Now',
					'book_tag' => 'N',
					'payment_type' => $payment_type,
					'rating' =>0,
					'drop_time' =>"",
					'driver_reply' =>"",
					'driver_comments' =>"",
					"payment_chosen_flag" => '0',
					"os_ver" => $val['os_ver'],
					"app_ver" => $val['app_ver'],
					"mod_ver" => $val['mod_ver'],
					"bookedby" => (int)$val['bookedby'],
                    "moved" => 0,
                    "passenger_admin_notes"=>$this->get_passenger_notes($val['passenger_id'])
				];
                $result = $this->mongo_db->Insert(MDB_PASSENGERS_LOGS,$insert_array);

                $update_logidquery  = ['last_logid' => (int)$inc_id];

                $update_logidresult = $this->mongo_db->update(MDB_SITEINFO, ['_id' => 1], ['$set' => $update_logidquery], ['upsert' => true]);

                if($promo_code!='')
                {
                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                }

            } elseif($now_after == 1) {
				//echo " 1 Now After".$specific_dates;exit;
				if(!empty($specific_dates)){
					foreach($specific_dates as $recur_date){
				
                $pickup_time = date("Y-m-d H:i:s", strtotime($recur_date));
                /*
				$rs = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
				$res = (!empty($rs))?iterator_to_array($rs):array(1);
				reset($res);
				$first_key = key($res);
				$inc_id = $first_key+1;
                */

                $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,['_id' => 1],['last_logid']);
                $inc_id =  $last_logidresult['last_logid']+1;

				$insert_array = [
					'_id' => (int)$inc_id,
					'booking_key' => $booking_key,
                    'passengers_id' => (int)$val['passenger_id'],
                    'company_id' => (int)$company_id,
                    'driver_id' => 0,
                    //'driver_reply' =>"",
					'msg_status' => "",
                    'current_location' => urldecode($val['pickupplace']),
                    'pickup_latitude' => $pickup_latitude,
                    'pickup_longitude' => $pickup_longitude,
                    'drop_location' => (urldecode($val['dropplace']))?(urldecode($val['dropplace'])):'',
					'drop_latitude' => (isset($drop_latitude))?$drop_latitude:'',
					'drop_longitude' => (isset($drop_longitude))?$drop_longitude:'',
                    'pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_time) * 1000),
                    'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($update_time) * 1000),
                    'no_passengers' => (int)$val['no_passengers'],
					'max_luggage' => (int)$val['max_luggage'],
					'luggage' => (int)$val['max_luggage'],
					'airport_pickup' => ((int)$val['airport_pickup'])?(int)$val['airport_pickup']:'',
					'airport_flight_number' =>$val['airport_flight_number'],
					'airport_flight_time' => $val['airport_flight_time'],
					'airport_notes' => $val['airport_notes'],
					// New Field //
                    'approx_distance' => (double)$approx_distance,
                    'approx_duration' => $approx_duration,
                    //'approx_duration' => $distance_away,
                    // New Field //
                    'approx_fare' => $approx_fare,
                    'search_city' => (int)$city_id,
                    'notes_driver' => $notes_driver,
                    'faretype' => 0,
                    'fixedprice' => 0,
                    'bookingtype' => 2,
                    'bookby' => 2,
                    'operator_id' => 0,
                    'travel_status' => 0,
                    'taxi_modelid' => (int)$val['motor_model'],
                    'taxi_id' => (int)$val['taxi_id'],
                    'recurrent_type' => 0,
                    'company_tax' => (float)$company_tax,
                    'promocode' => $promo_code,               
                    'now_after' => 1,
					'book_type' => 'Schedule Trip',
					'book_tag' => 'R',
                    'distance' => (isset($val['distance']))?$val['distance']:'',
                     'pickupdrop' => (isset($val['pickupdrop']))?$val['pickupdrop']:'',
                     'fixedprice' => (isset($val['fixedprice']))?$val['fixedprice']:'',
                    'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                    'payment_type' => $payment_type,
					'rating' =>0,
					'drop_time' =>"",
					'driver_reply' =>"",
					'driver_comments' =>"",
					"payment_chosen_flag" => '0',
					"os_ver" => $val['os_ver'],
					"app_ver" => $val['app_ver'],
					"mod_ver" => $val['mod_ver'],
					"bookedby" => (int)$val['bookedby'],
                    "moved" => 0,
                    "passenger_admin_notes"=>$this->get_passenger_notes($val['passenger_id'])

				];
                $result = $this->mongo_db->Insert(MDB_PASSENGERS_LOGS,$insert_array);    

                $update_logidquery  = ['last_logid' => (int)$inc_id];

                $update_logidresult = $this->mongo_db->update(MDB_SITEINFO, ['_id' => 1], ['$set' => $update_logidquery], ['upsert' => true]);

                if($promo_code!='')
                {
                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                }

			}      
					
				}else{
				
                $pickup_time = date("Y-m-d H:i:s", strtotime($pickup_time));
                /*
				$rs = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
				$res = (!empty($rs))?iterator_to_array($rs):array(1);
				reset($res);
				$first_key = key($res);
				$inc_id = $first_key+1;
                */

                $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,['_id' => 1],['last_logid']);
                $inc_id =  $last_logidresult['last_logid']+1;

				$insert_array = [
					'_id' => (int)$inc_id,
					'booking_key' => $booking_key,
                    'passengers_id' => (int)$val['passenger_id'],
                    'company_id' =>(int)$company_id,
                    'driver_id' => 0,
                    //'driver_reply' =>"",
					'msg_status' => "",
                    'current_location' => urldecode($val['pickupplace']),
                    'pickup_latitude' => $pickup_latitude,
                    'pickup_longitude' => $pickup_longitude,
                    'drop_location' => (urldecode($val['dropplace']))?(urldecode($val['dropplace'])):'',
					'drop_latitude' => (isset($drop_latitude))?$drop_latitude:'',
					'drop_longitude' => (isset($drop_longitude))?$drop_longitude:'',
                    'pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_time) * 1000),
                    'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($update_time) * 1000),
                    'no_passengers' => (int)$val['no_passengers'],
					'max_luggage' => (int)$val['max_luggage'],
					'luggage' => (int)$val['max_luggage'],
					'airport_pickup' => ((int)$val['airport_pickup'])?(int)$val['airport_pickup']:'',
					'airport_flight_number' =>$val['airport_flight_number'],
					'airport_flight_time' => $val['airport_flight_time'],
					'airport_notes' => $val['airport_notes'],
					// New Field //
                    'approx_distance' => (double)$approx_distance,
                    'approx_duration' => $approx_duration,
                    //'approx_duration' => $distance_away,
                    // New Field //
                    'approx_fare' => $approx_fare,
                    'search_city' => (int)$city_id,
                    'notes_driver' => $notes_driver,
                    'faretype' => 0,
                    'fixedprice' => 0,
                    'bookingtype' => 2,
                    'bookby' => 2,
                    'operator_id' => 0,
                    'travel_status' => 0,
                    'taxi_modelid' => (int)$val['motor_model'],
                    'taxi_id' => (int)$val['taxi_id'],
                    'recurrent_type' => 0,
                    'company_tax' => (float)$company_tax,
                    'promocode' => $promo_code,       
                    'distance' => (isset($val['distance']))?$val['distance']:'',
                    'pickupdrop' => (isset($val['pickupdrop']))?$val['pickupdrop']:'',
                     'fixedprice' => (isset($val['fixedprice']))?$val['fixedprice']:'',
                    'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),        
                    'now_after' => 1,
					'book_type' => 'Book Later',
					'book_tag' => 'N',
					'payment_type' => $payment_type,
					'rating' =>0,
					'drop_time' =>"",
					'driver_reply' => '',
					'driver_comments' =>"",
					"payment_chosen_flag" => '0',
					"os_ver" => $val['os_ver'],
					"app_ver" => $val['app_ver'],
					"mod_ver" => $val['mod_ver'],
					"bookedby" => (int)$val['bookedby'],
					"airport_type" => (int)$val['airport_type'],
                    "moved" => 0,
                     "passenger_admin_notes"=>$this->get_passenger_notes($val['passenger_id'])

				];
                $result = $this->mongo_db->Insert(MDB_PASSENGERS_LOGS,$insert_array);   

                $update_logidquery  = ['last_logid' => (int)$inc_id];

                $update_logidresult = $this->mongo_db->update(MDB_SITEINFO, ['_id' => 1], ['$set' => $update_logidquery], ['upsert' => true]);

                if($promo_code!='')
                {
                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                }
                

			}            
            }
            if ($sub_logid == '' || $sub_logid == '0') {
				$update = $this->mongo_db->update(MDB_PASSENGERS_LOGS ,['_id'=>(int)$inc_id],['$set'=>['sub_log_id'=>(int)$inc_id]],['upsert'=>false]);
            }
			return (isset($result['err'])?0:$inc_id);
        } else {
            return 'F'; //Driver already booed for this time
           // return -1; //Driver already booed for this time
        }
    }
    public function savebooking_old($val, $company_id)
    {
        $pickup_time      = mysql_real_escape_string($val['pickup_time']);
        $roundtrip        = mysql_real_escape_string($val['roundtrip']);
        $cityname         = mysql_real_escape_string($val['cityname']);
        $approx_distance  = ""; //mysql_real_escape_string($val['approx_distance']);
        $approx_fare      = ""; //mysql_real_escape_string($val['approx_fare']);		
        $pickup_latitude  = mysql_real_escape_string($val['pickup_latitude']);
        $pickup_longitude = mysql_real_escape_string($val['pickup_longitude']);
        $drop_latitude    = mysql_real_escape_string($val['drop_latitude']);
        $drop_longitude   = mysql_real_escape_string($val['drop_longitude']);
        $notes_driver     = mysql_real_escape_string($val['notes']);
        $distance_away    = mysql_real_escape_string($val['distance_away']);
        $promo_code       = mysql_real_escape_string($val['promo_code']);
        $now_after        = mysql_real_escape_string($val['now_after']);
        $sub_logid        = $this->get_sublogid($val['sub_logid']);
        $city_id          = "";
        // Get Pickup & Drop location Lat & Long using Google API 
        // Which is used when we calculating approximat fare and distance from api side
        /*$model_query = "select city_id from ".CITY." where city_name like '%".$cityname."%' limit 0,1";	
        $model_fetch = Db::query(Database::SELECT, $model_query)
        ->execute()
        ->as_array();
        
        if(count($model_fetch) > 0)
        {
        $city_id = $model_fetch[0]['city_id'];
        }
        else
        {
        $model_query = "select city_id from ".CITY." where city.default='1' limit 0,1";	
        
        $model_fetch = Db::query(Database::SELECT, $model_query)
        ->execute()
        ->as_array();
        $city_id = $model_fetch[0]['city_id'];
        }*/
        //$get_taxi_fare_based_model = $this->get_current_taxi_details($val["driver_id"],$val["taxi_id"],$city_id);						
        $company_tax      = ""; //$get_taxi_fare_based_model[0]['company_tax'];			
        if ($roundtrip == 'true') {
            $pickupdrop = 1;
        } else {
            $pickupdrop = 0;
        }
        $waitingtime = '';
        $company_id  = $this->get_company_id(mysql_real_escape_string($val['driver_id']));
        if (count($company_id) > 0) {
            $company_id = $company_id[0]['company_id'];
        } else {
            $company_id = 0;
        }
        //echo $company_id;exit;
        if ($company_id == '') {
            //echo TIMEZONE;exit;
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
                $time         = date('H:i:s', strtotime($pickup_time));
                $update_time  = $current_date[0] . ' ' . $time;
            } else {
                $time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        } else {
            $model_base_query  = "select time_zone from  company where cid='$company_id' ";
            $model_fetch       = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            $company_time_zone = isset($model_fetch[0]['time_zone']) ? $model_fetch[0]['time_zone'] : 0;
            if ($company_time_zone != 0) {
                $time                    = date('H:i:s', strtotime($pickup_time));
                $current_datetime        = convert_timezone('now', $model_fetch[0]['time_zone']);
                $curretnt_datetime_split = explode(' ', $current_datetime);
                $update_time             = $curretnt_datetime_split[0] . ' ' . $time;
            } else {
                $time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        }
        //echo $update_time;exit;
        $booking_key                = text::random($type = 'alnum', $length = 10);
        $fieldname_array            = [
            'passengers_id',
            'driver_id',
            'company_id',
            'current_location',
            'pickup_latitude',
            'pickup_longitude',
            'drop_location',
            'drop_latitude',
            'drop_longitude',
            'no_passengers',
            'approx_distance',
            'approx_fare',
            'time_to_reach_passen',
            'pickup_time',
            'pickupdrop',
            'waitingtime',
            'createdate',
            'taxi_id',
            'booking_from',
            'search_city',
            'sub_logid',
            'notes_driver',
            'booking_from_cid',
            'company_tax',
            'bookingtype',
            'bookby',
            'promocode',
            'now_after'
        ];
        //'pickup','drop','no_of_passengers','pickup_time','driver_id','roundtrip','taxi_id','passenger_id'
        $values_array               = [
            mysql_real_escape_string($val['passenger_id']),
            mysql_real_escape_string($val['driver_id']),
            $company_id,
            mysql_real_escape_string(urldecode($val['pickupplace'])),
            $pickup_latitude,
            $pickup_longitude,
            mysql_real_escape_string(urldecode($val['dropplace'])),
            $drop_latitude,
            $drop_longitude,
            '',
            $approx_distance,
            $approx_fare,
            $distance_away,
            $update_time,
            $pickupdrop,
            $waitingtime,
            $this->currentdate,
            mysql_real_escape_string($val['taxi_id']),
            '1',
            $city_id,
            $sub_logid,
            $notes_driver,
            $company_id,
            $company_tax,
            '1',
            '1',
            $promo_code,
            '0'
        ];
        //}
        //'pickup_latitude','pickup_longitude','drop_latitude','drop_longitude'
        $driver_availability_result = $this->get_driver_availability(mysql_real_escape_string($val['driver_id']), $update_time);
        if (count($driver_availability_result) == 0) {
            if ($now_after == 0) {
                $result = DB::insert(PASSENGERS_LOG, $fieldname_array)->values($values_array)->execute();
            } else {
                $pickup_time = date("Y-m-d H:i:s", strtotime($pickup_time));
                $result      = DB::insert(PASSENGERS_LOG, [
                    'booking_key',
                    'passengers_id',
                    'company_id',
                    'current_location',
                    'pickup_latitude',
                    'pickup_longitude',
                    'drop_location',
                    'drop_latitude',
                    'drop_longitude',
                    'pickup_time',
                    'no_passengers',
                    'approx_distance',
                    'approx_duration',
                    'approx_fare',
                    'search_city',
                    'notes_driver',
                    'faretype',
                    'fixedprice',
                    'bookingtype',
                    'luggage',
                    'bookby',
                    'operator_id',
                    'travel_status',
                    'taxi_modelid',
                    'recurrent_type',
                    'company_tax',
                    'promocode',
                    'now_after'
                ])->values([
                    $booking_key,
                    $val['passenger_id'],
                    '0',
                    urldecode($val['pickupplace']),
                    $pickup_latitude,
                    $pickup_longitude,
                    urldecode($val['dropplace']),
                    $drop_latitude,
                    $drop_longitude,
                    $pickup_time,
                    '',
                    $approx_distance,
                    $distance_away,
                    $approx_fare,
                    $city_id,
                    $notes_driver,
                    '',
                    '',
                    '2',
                    '0',
                    '2',
                    '0',
                    '0',
                    $val['motor_model'],
                    '0',
                    $company_tax,
                    $promo_code,
                    '1'
                ])->execute(); //$company_id
            }
            if ($sub_logid == '' || $sub_logid == '0') {
                $update_pass_logid = DB::update(PASSENGERS_LOG)->set([
                    'sub_logid' => $result[0]
                ])->where('passengers_log_id', '=', $result[0])->execute();
            }
            if ($result) {
                return $result[0];
            } else {
                return 0;
            }
        } else {
            return 'F'; //Driver already booed for this time
        }
    }
    /** Get Company id for the Driver **/
    public function get_company_id($driver_id)
    {
        /*$sql = "SELECT company_id FROM " . PEOPLE . " WHERE `id` = '" . $driver_id . "'";
        return Db::query(Database::SELECT, $sql)->execute()->as_array();*/
		
		$result = $this->mongo_db->find(MDB_PEOPLE,['_id'=> (int)$driver_id],['company_id']);
		$result = iterator_to_array($result,false);
		//print_r($result);exit;
        return (isset($result)) ? reset($result) : [];
    }
    /** Mark as favourite Trip**/
    public function set_markfav_tripdetails($pass_log_id, $mark_status)
    {
        $update_result = DB::update(PASSENGERS_LOG)->set([
            'favourite_trip' => $mark_status
        ])->where('passengers_log_id', '=', $pass_log_id)->execute();
        return $update_result;
    }
    /** Driver availability **/
      public function get_driver_availability($driver_id, $pickup_time)
    {
		$match = ['pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_time) * 1000),
					   'driver_id' => (int)$driver_id,
					   'driver_reply' => 'A',
					   'travel_status' => 9 ];
		$res = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match,['_id']);
		$result = iterator_to_array($res);
		return (!empty($result)?$result:[]);
    }
    public function get_driver_availability_old($driver_id, $pickup_time)
    {
        $sql = "SELECT passengers_log_id FROM " . PASSENGERS_LOG . " WHERE `pickup_time` = '" . $pickup_time . "' and `driver_id` = '" . $driver_id . "' and `driver_reply` = 'A' and 'travel_status' = 9";
        //echo $sql;exit;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    //Passenger Profile Edit
    public function edit_passenger_profile($array, $company_id)
    {
        try {
            if ($company_id != '') {
                /*$result = DB::update(PASSENGERS)
                ->set($array)
                ->where('id', '=', $array['id'])
                ->where('passenger_cid', '=', $company_id)
                ->execute();*/
                $name           = $array['name'];
                /*$profile_picture = $array['profile_picture'];*/
                $address        = $array['address'];
                $creditcard_no  = encrypt_decrypt('encrypt', $array['creditcard_no']);
                $creditcard_cvv = ""; //$array['creditcard_cvv'];
                $expdatemonth   = $array['expdatemonth'];
                $expdateyear    = $array['expdateyear'];
                $id             = $array['id'];
                //$sql = "UPDATE `passengers` SET `name` = '$name', `address` = '$address', `creditcard_no` = '$creditcard_no', `creditcard_cvv` = '$creditcard_cvv', `expdatemonth` = '$expdatemonth', `expdateyear` = '$expdateyear' WHERE `id` = '$id' AND `passenger_cid` = '$company_id'";
                $sql            = "UPDATE `passengers` SET `name` = '$name', `address` = '$address' WHERE `id` = '$id' ";
                $result         = Db::query(Database::UPDATE, $sql)->execute();
                $sql            = "UPDATE " . PASSENGERS_CARD_DETAILS . " SET `creditcard_no` = '$creditcard_no', `expdatemonth` = '$expdatemonth', `expdateyear` = '$expdateyear' WHERE `passenger_id` = '$id' ";
                $result         = Db::query(Database::UPDATE, $sql)->execute();
            } else {
                /*$result = DB::update(PASSENGERS)
                ->set($array)
                ->where('id', '=', $array['id'])
                ->where('passenger_cid', '=', '0')
                ->execute();*/
                $name           = $array['name'];
                /*$profile_picture = $array['profile_picture'];*/
                $address        = $array['address'];
                $creditcard_no  = encrypt_decrypt('encrypt', $array['creditcard_no']);
                $creditcard_cvv = ""; //$array['creditcard_cvv'];
                $expdatemonth   = $array['expdatemonth'];
                $expdateyear    = $array['expdateyear'];
                $id             = $array['id'];
                $sql            = "UPDATE `passengers` SET `name` = '$name', `address` = '$address' WHERE `id` = '$id'";
                $result         = Db::query(Database::UPDATE, $sql)->execute();
                $sql            = "UPDATE " . PASSENGERS_CARD_DETAILS . " SET `creditcard_no` = '$creditcard_no', `expdatemonth` = '$expdatemonth', `expdateyear` = '$expdateyear' WHERE `passenger_id` = '$id'";
                $result         = Db::query(Database::UPDATE, $sql)->execute();
            }
            return 0;
        }
        catch (Kohana_Exception $e) {
            return -1;
        }
    }
    //Change Password for Both Driver and Passenger
    public function chg_password_passenger($array, $table, $company_id = '', $type = '')
    {
        //Checking the Confirmation of Password
        if ($array['new_password'] == $array['confirm_password']) {
            if ($type == 'D')
                $profile = $this->getDriverInfo($array['id']);
            else
                $profile = $this->passenger_profile($array['id']);
            if (count($profile) > 0) {
				if ($type == 'D')
					$profile_password = $profile['password'];
				else
					$profile_password = $profile['password'];						
                //Checking the Old Password
                if ($array['old_password'] == $array['new_password']) {
                    return -4;
                } else if ($profile_password == md5($array['old_password'])) {
					$update_array = ['password' => md5($array['new_password']),'org_password' => $array['new_password']];
					$match = [];
					$match['_id'] = (int)$array['id'];		
                    if ($type == 'D') {
						$result = $this->mongo_db->Update($table,$match,['$set'=>$update_array],['upsert'=>false]);
                    } else {						
                        if ($company_id != '' && $company_id != 0) {							
							$match['passenger_cid'] = (int)$company_id;
                        }
						$result = $this->mongo_db->Update($table,$match,['$set'=>$update_array],['upsert'=>false]);
                    }
                    return 1;
                } else
                    return -2;
            } else
                return -3;
        } else {
            return -1;
        }
    }
    //Save Comments and Ratings from Passenger
     public function savecomments($log_id = "", $ratings = "", $comments = "",$driver_tags = "")
    {
        $update = ['comments' => urldecode($comments),'rating' => (int)$ratings,'driver_tags'=>$driver_tags];

		$result = $this->mongo_db->Update(MDB_PASSENGERSLOGS_COMPLETED,['_id'=>(int)$log_id],
										  ['$set'=>$update],['upsert'=>false]);
        return (!isset($result['err']) ? 1 : 0);
    }
    public function savecomments_old($log_id = "", $ratings = "", $comments = "")
    {
        $update_result = DB::update(PASSENGERS_LOG)->set([
            'comments' => $comments,
            'rating' => (int)$ratings
        ])->where('passengers_log_id', '=', $log_id)->execute();
        return $update_result;
    }
    //Common Function for updation
     public function update_table($table, $arr, $cond1, $cond2)
    {
		if(is_numeric($cond2)){
			$cond2 = (int)$cond2;
		}
		$result = $this->mongo_db->update($table,[$cond1 => $cond2],[ '$set'=>$arr],['upsert'=>false]);
		return (empty($result['err'])?1:$result['errmsg']);
    }
    //Common Function for Select
    public function select_table($table, $cond1, $cond2)
    {
        $result = DB::select('*')->from($table)->where($cond1, "=", $cond2)->execute()->as_array();
        return $result;
    }
    public function select_driverloc($driverid, $company_id)
    {
        $result = DB::select('status', 'id', 'shift_status', 'driver_id', 'latitude', 'longitude', 'update_date')->from(DRIVER)->where('driver_id', "=", $driverid)->execute()->as_array();
        return $result;
    }
    //Driver Profile
    public function driver_profile($userid)
    {        
        
        $arguments = [['$match'=>[
							'_id'=>(int)$userid,
							'user_type'=>"D"
						]],['$lookup'=>[
							'from'=>"company",
							'localField'=>"company_id",
							'foreignField'=>"_id",
							 'as'=>"company"        
						]],
						['$unwind'=>'$company'],
						
						['$lookup'=>[
							'from'=>"taxi_driver_mapping",
							'localField'=>"_id",
							'foreignField'=>"mapping_driverid",
							 'as'=>"taxi_driver_mapping"        
						]],
						['$unwind'=>'$taxi_driver_mapping'],
						['$lookup'=>[
							'from'=>"taxi",
							'localField'=>"taxi_driver_mapping.mapping_taxiid",
							'foreignField'=>"_id",
							 'as'=>"taxi"        
						]],
						['$unwind'=>'$taxi'],
						['$lookup'=>[
							'from'=>"motor_model",
							'localField'=>"taxi.taxi_model",
							'foreignField'=>"_id",
							 'as'=>"motor_model"        
						]],
						['$unwind'=>'$motor_model'],
						['$match'=>[
							"taxi_driver_mapping.mapping_status"=>"A"   
						]],
						['$project' => [
							//'salutation' => '$salutation',
							'name' => '$name',
							'driver_code' => '$driver_code',
							'company_address' => '$company.companydetails.company_address',
							//'name' => '$name',
							'lastname' => '$lastname',
							'email' => '$email',
							'phone' => '$phone',
							'userid' => '$_id',
							'address' => '$address',
							'password' => '$org_password',
							'otp' => '$otp',
							'photo' => '$photo',
							'starting_km' => '$taxi.starting_km',
							'device_type' => '$device_type',
							'device_token' => '$device_token',
							'login_status' => '$login_status',
							'user_type' => '$user_type',
							'driver_referral_code' => '$driver_referral_code',
							'notification_setting' => '$notification_setting',
							'company_id' => '$company_id',
							'driver_license_id' => '$driver_license_id',
							'profile_picture'=>'$profile_picture',
							'bankname'=>'$company.companydetails.bankname',
							'bankaccount_no'=>'$company.companydetails.bankaccount_no',
							'company_ownerid'=>'$company.companydetails.userid',
							'taxi_no'=>'$taxi.taxi_no',
							//'mapping_startdate'=>'$taxi_driver_mapping.mapping_startdate',
							//'mapping_enddate'=>'$taxi_driver_mapping.mapping_enddate',
							'model_name'=>'$motor_model.model_name'							
						]]					
					];
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
       // print_r($result['result']);exit;
        return (isset($result['result']) ? $result['result']: []); 
    }
	
	public function getDriverInfo($driver_id) {
		$match = ['_id'=>(int)$driver_id, 'user_type' => 'D'];
		$result = $this->mongo_db->find_one(MDB_PEOPLE,$match,['_id','name','lastname','password','org_password']);
		return $result;
	}
    //Driver Login
    public function driver_login($phone, $pwd, $company_id)
    {
		
        //$password = Html::chars(md5($pwd));
        /*if ($company_id != '') {
            $query = "SELECT status,login_status,login_from,device_token,device_id,id,company_id FROM " . PEOPLE . " WHERE phone = '$phone' AND password='$pwd' AND user_type = 'D' and company_id='$company_id'";
        } else {
            $query = "SELECT status,login_status,login_from,device_token,device_id,id,company_id FROM " . PEOPLE . " WHERE phone = '$phone' AND password='$pwd' AND user_type = 'D' ";
        }
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;*/
        if($company_id != ''){
			$match= [
					"phone" => $phone,
					"driver_code" => $phone,
					"password" => md5($pwd),
					"user_type" => 'D',
					"company_id" => (int)$company_id
				];
		}else{
			$match= [
					"phone" => $phone,
					"password" => md5($pwd),
					"user_type" => 'D'
				];
		}			
		$project = [
						"status",
						"login_status",
						"login_from",
						"device_token",
						"device_id",					
						"company_id",											
						"id"
					];
		$res = $this->mongo_db->find(MDB_PEOPLE,$match,$project);
		$result = iterator_to_array($res);
		
		return (isset($result) ? $result : []);
    }
    //Driver Login
    public function new_driver_login($data, $company_id)
    {
		if($company_id != ''){
			$match= [
					//"phone" => $data['phone'],
					"driver_code" => $data['driver_code'],
					"password" => md5($data['password']),
					"user_type" => 'D',
					"company_id" => (int)$company_id
				];
		}else{
			$match= [
					//"phone" => $data['phone'],
					"driver_code" => $data['driver_code'],
					"password" => md5($data['password']),
					"user_type" => 'D'
				];
		}			
		$project = [
						"status",
						"login_status",
						"login_from",
						"device_token",
						"device_id",					
						"company_id",											
						"id"
					];
		$res = $this->mongo_db->find(MDB_PEOPLE,$match,$project);
		$result = iterator_to_array($res);
		
		return (isset($result) ? $result : []);
    }
    public function check_driver_companydetails($driver_id, $company_id)
    {
        //$password = Html::chars(md5($pwd));
        /*if ($company_id != '') {
            $query = "SELECT id FROM " . PEOPLE . " WHERE id = '$driver_id' AND user_type = 'D' and company_id='$company_id'";
        } else {
            $query = "SELECT id FROM " . PEOPLE . " WHERE id = '$driver_id' AND user_type = 'D'";
        }
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);*/
        $add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_driver_avail = $add_model->driver_id_isValid($driver_id);
		if($check_driver_avail == 1){
        if($company_id != ''){
			$match = ['_id'=>(int)$driver_id, 'user_type' => 'D','company_id'=> (int)$company_id];
		}else{
			$match = ['_id'=>(int)$driver_id, 'user_type' => 'D'];
		}        
        $res = $this->mongo_db->find(MDB_PEOPLE,$match,['_id']);
        $result = iterator_to_array($res);
        $result1 = reset($res);
        return (count($result1)>0)?count($result1):0;
		}else {
				return -1;
			
		}
    }
    public function check_passenger_companydetails($id, $company_id)
    {
        $match = [];
		$match['_id'] = (int)$id;
		if ($company_id != '' && $company_id !=0) {
			$match['passenger_cid'] = (int)$company_id;
		}
		$result = $this->mongo_db->count(MDB_PASSENGERS,$match);
		return (isset($result)?$result:0);
    }
    // Driver Login Status
     public function logged_user_status($driver_id, $company_id)
    {
        if ($company_id != '' && $company_id !=0) {
            $result = $this->mongo_db->find_one(MDB_PEOPLE,['company_id'=>(int)$company_id,'_id'=>(int)$driver_id],
												['login_status']);
        } else {
			$result = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$driver_id],['login_status']);
        }
        return ((count($result) >= 1 && $result['login_status'] == 'S') ? 1 : 0);
    }
	
	public static function log_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS_LOGS,['_id' => (int)$id]);		
		return ($result ==1)?true:false;
    }
	
    public function logged_user_status_old($driver_id, $company_id)
    {
        //echo 'as'.$company_id;
        if ($company_id != '') {
            $query = "SELECT login_status FROM " . PEOPLE . " where id = '" . $driver_id . "' and company_id='$company_id'";
        } else {
            $query = "SELECT login_status FROM " . PEOPLE . " where id = '" . $driver_id . "'";
        }
        //echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        //print_r($result);exit;
        if (count($result) == 1 && $result[0]['login_status'] == 'S') {
            return 1;
        } else {
            return 0;
        }
    }
    //Update Driver Status
    public function update_driverreply_status($id, $driver_id, $taxi_id, $company_id, $status, $travel_status, $field, $flag, $default_companyid)
    {
        $driver_reply = '';
        $data = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['_id'=>(int)$id],['driver_reply']);
        
        $taxidata = $this->mongo_db->find_one('taxi',['_id'=>(int)$taxi_id],['taxi_model']);
        if(!empty($taxidata)){
                $taxi_model = isset($taxidata['taxi_model']) ? $taxidata['taxi_model'] : '';
        }


        if(!empty($data)){
				$driver_reply = isset($data['driver_reply']) ? $data['driver_reply'] : '';
		}
		
        //Acceptred Status
        if ($status == 'A') {
            $update_query = [
                'travel_status' => (int)$travel_status,
                'driver_reply' => $status,
                'driver_id' => (int)$driver_id,
                'taxi_id' => (int)$taxi_id,
                'company_id' => (int)$company_id,
                //'time_to_reach_passen' => $field,
                'msg_status' => 'R'
            ];
             if($taxi_model !=''){
                $taxi_query = ['taxi_modelid'=>(int)$taxi_model];
                $taxiupdate = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$id],['$set'=>$taxi_query],['upsert'=>false]);
            }

        }else {  //Rejected Status and Adding the Driver Comments 
            $update_query = [
                'travel_status' => (int)$travel_status,
                'driver_reply' => $status,
                'driver_id' => (int)$driver_id,
                'taxi_id' => (int)$taxi_id,
                'company_id' => (int)$company_id,
                'driver_comments' => $field,
                'msg_status' => 'R'
            ];
        }
        if ($driver_reply == '') {
            $update = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$id],['$set'=>$update_query],['upsert'=>false]);
            $update_result = (empty($update['err'])) ? 1: 0;
            if ($update_result > 0) {
                if ($status == 'A')
                    return 1;
                else if ($status == 'R')
                    return 2;
                else if ($status == 'C')
                    return 3;
            } else {
                return 4;
            }
        } else {
            // Driver cancel the trip when pick up
            if ($flag == 1) {
                $update_query     = [
                    'travel_status' => 9,
                    'driver_reply' => $status,
                    'driver_comments' => $field,
                    'msg_status' => 'R'
                ];
                $update = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$id],['$set'=>$update_query],['upsert'=>false]);
				$update_result = (empty($update['err']))?1:0;
                if ($update_result > 0) {
                    if ($status == 'R')
                        return 2;
                    else if ($status == 'C')
                        return 3;
                } else {
                    return 4; //
                }
            } else {
                if ($driver_reply == 'A') {
                    return 5; // driver already confirmed
                } else if ($driver_reply == 'R') {
                    return 6; // driver already rejected
                } else if ($driver_reply == 'C') {
                    return 7; // driver already cancelled
                } else {
                    return 0; // Time out or some technical issues
                }
            }
        }
    }
     public function edit_driver_profile($id="",$taxi_id="",$start_km="",$array, $default_companyid)
    {
        try {
			
            $chk_driver = $this->driver_profile($id);
            if (count($chk_driver) > 0) {
				$match = ['_id' => (int)$id,'user_type' => 'D'];
				$result = $this->mongo_db->Update(MDB_PEOPLE,$match,['$set'=>$array],['upsert'=>false]);
				$check_startkm = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],['starting_km']);
				if($start_km >= $check_startkm['starting_km']){ 
				$mresult1 = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$taxi_id],['$set'=> ["starting_km" => $start_km]]);
				}
				return (!isset($result['err'])) ? 1 : 0;
            } else {
                return -2;
            }
        }
        catch (Kohana_Exception $e) {
            return 0;
        }
    }
    //Company Profile Edit
    public function edit_company_profile($id="",$array)
    {
        try {
            $chk_driver = $this->driver_profile($id);		
            if (count($chk_driver) > 0) {
                $company_id = $chk_driver[0]['company_id'];
				$result = $this->mongo_db->Update(MDB_COMPANY,['_id'=>(int)$company_id],
												  ['$set' => $array],['upsert'=>false]);
                return 0;
            } else {
                return -2;
            }
        }
        catch (Kohana_Exception $e) {
            return 1;
        }
    }
    //Driver Profile Edit
    public function edit_driver_profile_old($array, $default_companyid)
    {
        //print_r($array);
        //exit;
        try {
            $chk_driver = $this->driver_profile($array['id']);
            //$chk_phone = $this->check_driver_phone_update($array['phone'],$array['id']);		
            if (count($chk_driver) > 0) {					
                $result = DB::update(PEOPLE)->set($array)->where('id', '=', $array['id'])->where('user_type', '=', 'D')->execute();
                return 0;
            } else {
                return -2;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Company Profile Edit
    public function edit_company_profile_old($array)
    {
        //print_r($array);
        //exit;
        try {
            $chk_driver = $this->driver_profile($array['id']);
            //print_r($chk_driver);
            //$chk_phone = $this->check_driver_phone_update($array['phone'],$array['id']);		
            if (count($chk_driver) > 0) {
                //if($chk_phone > 0)			
                //{	
                //	return 3;
                //}
                //else
                //{		
                $company_id = $chk_driver[0]['company_id'];
                array_shift($array);
                $result = DB::update(COMPANY)->set($array)->where('cid', '=', $company_id)->execute();
                //print_r($result);
                return 0;
                //}
            } else {
                return -2;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Function used to check Phone number exist or not
    public function check_driver_phone_update($email = "", $id = "")
    {
        $sql    = "SELECT phone FROM " . PEOPLE . " WHERE phone='$email' AND id !='$id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Function used to get Drivers comments Today and Totally
    public function get_driver_comments($id, $today = null, $company_id = '')
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        if ($today == 1)
        // It will take the today transaction too
            $result = DB::select('rating', 'fare')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS)->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)
            //->where(PASSENGERS_LOG.'.comments','!=','')
                ->where(PASSENGERS_LOG . '.travel_status', '=', 1)->where(PASSENGERS_LOG . '.pickup_time', 'LIKE', $date)->order_by(PASSENGERS . '.id', 'desc')->execute()->as_array();
        else
            $result = DB::select('name', 'rating', 'comments')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)
            //->where(PASSENGERS_LOG.'.comments','!=','')
                ->where(PASSENGERS_LOG . '.travel_status', '=', 1)->order_by('id', 'desc')->execute()->as_array();
        // print_r($result);        
        return $result;
    }
    //Function used to get the get_driver_logs
    public function get_driver_logs($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id = '', $start = null, $limit = null) //
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        if ($company_id != '') {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS . '.phone', PASSENGERS_LOG . '.passengers_log_id', PASSENGERS_LOG . '.pickup_time', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->where(PASSENGERS_LOG . '.company_id', '=', $company_id)->limit($start)->offset($limit)->order_by(PASSENGERS . '.id', 'ASC')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->where(PASSENGERS_LOG . '.pickup_time', '>=', $start_time)->where(PASSENGERS_LOG . '.company_id', '=', $company_id)->as_object()->execute();
        } else {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS . '.phone', PASSENGERS_LOG . '.passengers_log_id', PASSENGERS_LOG . '.pickup_time', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit($start)->offset($limit)->order_by(PASSENGERS . '.id', 'ASC')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->where(PASSENGERS_LOG . '.pickup_time', '>=', $start_time)->as_object()->execute();
        }
        //print_r($result);           exit;
        return $result;
    }
    //Function used to get the get_driver_logs
    public function get_driver_current_trip($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id, $start = null, $limit = null) //
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        if ($company_id != '') {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS_LOG . '.passengers_log_id', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.travel_status')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->where(PASSENGERS_LOG . '.company_id', '=', $company_id) ///$this->currentdate
                ->limit(1)->offset(0)->order_by(PASSENGERS_LOG . '.pickup_time', 'ASC')
            //->where(PASSENGERS_LOG.'.pickup_time','=',$this->currentdate)
                ->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->where(PASSENGERS_LOG . '.pickup_time', '>=', $start_time)->where(PASSENGERS_LOG . '.company_id', '=', $company_id)->as_object()->execute();
        } else {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS_LOG . '.passengers_log_id', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.travel_status')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit(1)->offset(0)->order_by(PASSENGERS_LOG . '.pickup_time', 'ASC')->where(PASSENGERS_LOG . '.pickup_time', '>=', $start_time)->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
        }
        //print_r($result);
        return $result;
    }
    //Function used to get all driver logs with transactions
    public function get_driver_logs_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id = '', $start = null, $limit = null)
    {
        if ($company_id != '') {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS_LOG . '.passengers_log_id', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.rating')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS, 'LEFT')->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->where(PASSENGERS_LOG . '.company_id', '=', $company_id)->limit($start)->offset($limit)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
        } else {
            $result = DB::select(PASSENGERS . '.name', PASSENGERS_LOG . '.passengers_log_id', [
                PASSENGERS_LOG . '.current_location',
                'pickup_location'
            ], PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.rating')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->join(TRANS, 'LEFT')->on(PASSENGERS_LOG . '.passengers_log_id', '=', TRANS . '.passengers_log_id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->limit($start)->offset($limit)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
        }
        //print_r($result);           exit;
        return $result;
    }
    /*** Get Passenger Profile details with tranaction using passenger log id ***/
    public function get_passenger_log_tranaction_details($passengerlog_id = "", $company_id = "")
    {
        $company_condition = '';
        if ($company_id != '') {
            $company_condition = " and " . PASSENGERS_LOG . ".`company_id` =  '$company_id' ";
        }
        $sql    = "SELECT " . PASSENGERS_LOG . ".current_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".rating,  " . PEOPLE . ".name AS driver_name," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name," . PASSENGERS . ".email AS passenger_email," . PASSENGERS . ".phone AS passenger_phone," . TRANS . ".distance," . TRANS . ".actual_distance," . TRANS . ".fare," . TRANS . ".waiting_time," . TRANS . ".waiting_cost," . TRANS . ".remarks FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TRANS . " ON (  " . TRANS . ".`passengers_log_id` =  " . PASSENGERS_LOG . ".`passengers_log_id` ) 
WHERE  " . PASSENGERS_LOG . ".`passengers_log_id` =  '$passengerlog_id' $company_condition";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    public function get_assignedtaxi_alllist($driver_id = '', $company_id = '')
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $company_condition        = '';
        if ($company_id != '') {
            $company_condition = " and " . TAXIMAPPING . ".`mapping_companyid` =  '$company_id' ";
        }
        $query  = " select 
		" . TAXI . ".taxi_no," . TAXI . ".taxi_capacity," . TAXI . ".taxi_speed," . TAXI . ".max_luggage from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where mapping_driverid='$driver_id' $company_condition and mapping_enddate >= '$current_time'  order by mapping_startdate ASC";
        //and mapping_enddate >= '$current_time'
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //notification reminder for driver
    public function cron_push()
    {
        $current_date = date('Y-m-d');
        $query        = "SELECT *,NOW() FROM " . DRIVER . " AS driver JOIN " . PASSENGERS_LOG . " AS pass ON `driver`.`driver_id`= `pass`.`driver_id` WHERE `status` = 'F' AND `pass`.`travel_status`=0 AND `pass`.`driver_reply`='A' AND  `pass`.`pickup_time` >= (NOW() - INTERVAL " . REMINDER_TIME . " MINUTE) AND `pass`.`pickup_time` LIKE '$current_date %' GROUP BY `driver`.`driver_id` ";
        $result       = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //Update driver break status
    public function update_driver_break_status($driver_id, $breakstatus, $interval_type)
    {
        if ($breakstatus == 'IN') {
            $break_status = $interval_type;
        } else {
            $break_status = 'F';
        }
        $sql_query = [
            'status' => $break_status
        ];
        //print_r($driver_id);
        DB::update(DRIVER)->set($sql_query)->where('driver_id', '=', $driver_id)->execute();
    }
    /** Get Driver Current Journey **/
    public function get_driver_current_journey($driver_id, $company_id, $createdate)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        /*$sql = "SELECT * FROM ".PASSENGERS_LOG." WHERE `pickup_time` < '".$pickup_time."'  and `driver_id` = '".$driver_id."' and `driver_reply` = 'A' and `travel_status` != 1 order by passengers_log_id desc limit 1 "; */
        $condition                = "";
        if ($createdate == 0) {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "'";
        }
        if ($company_id != '') {
            $sql = "SELECT drop_location,pickup_latitude,pickup_longitude,drop_latitude,drop_longitude FROM " . PASSENGERS_LOG . " WHERE `driver_id` = '" . $driver_id . "' and company_id='$company_id' and `driver_reply` = 'A' and `travel_status` = 2 $condition order by passengers_log_id desc limit 1 ";
        } else {
            $sql = "SELECT drop_location,pickup_latitude,pickup_longitude,drop_latitude,drop_longitude FROM " . PASSENGERS_LOG . " WHERE `driver_id` = '" . $driver_id . "' and `driver_reply` = 'A' and `travel_status` = 2 $condition order by passengers_log_id desc limit 1 ";
        }
        $availablity = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $availablity;
    }
    /** Get Motor Company **/
    public static function motor_details()
    {
        $result = DB::select('motor_id', 'motor_name', 'motor_status')->from(MOTORCOMPANY)->where('motor_status', '=', 'A')->order_by('motor_name', 'ASC')->execute()->as_array();
        return $result;
    }
    public function getLatLong($address)
    {
        $address = str_replace(' ', '+', $address);
        $url     = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $geoloc = curl_exec($ch);
        //print_r($geoloc);
        $json   = json_decode($geoloc);
        if ($json->status == 'OK') {
            return [
                $json->results[0]->geometry->location->lat,
                $json->results[0]->geometry->location->lng
            ];
        } else {
            return [
                11.621354,
                76.14253698
            ];
        }
    }
    //Getting the latitude and Longitude with City
    public function getLatLongwithcity($address)
    {
        $address = str_replace(' ', '+', $address);
        $url     = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $geoloc = curl_exec($ch);
        //print_r($geoloc);
        $json   = json_decode($geoloc);
        if ($json->status == 'OK') {
            $address_arr = $json->results[0]->address_components;
            $address     = "";
            foreach ($address_arr as $arr1) {
                if (strcmp($arr1->types[0], "locality") == 0) {
                    $city = $arr1->long_name;
                    continue;
                }
                if (strcmp($arr1->types[0], "administrative_area_level_1") == 0) {
                    $state = $arr1->long_name;
                    continue;
                }
                if (strcmp($arr1->types[0], "administrative_area_level_2") == 0) {
                    $state2 = $arr1->long_name;
                    continue;
                }
            }
            $response = [
                $json->results[0]->geometry->location->lat,
                $json->results[0]->geometry->location->lng,
                $city
            ]; //level_1 administrative data not exist
        } else {
            $cityresult = DB::select()->from(CITY)->where('city_id', '=', DEFAULT_CITY)->where('city_status', '=', 'A')->order_by('city_name', 'ASC')->execute()->as_array();
            $city       = $cityresult[0]['city_name'];
            $response   = [
                LOCATION_LATI,
                LOCATION_LONG,
                $city
            ]; //level_1 administrative data not exist
        }
        return $response;
        //}		
    }
    //Applying the Haversine Function to get the Distance
    function Haversine($start, $finish)
    {
        $theta    = $start[1] - $finish[1];
        $distance = (sin(deg2rad($start[0])) * sin(deg2rad($finish[0]))) + (cos(deg2rad($start[0])) * cos(deg2rad($finish[0])) * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = $distance * 60 * 1.1515;
        return round($distance, 2);
    }
    function Tripdistance_Haversine($start, $finish)
    {
		if ((count($start) > 0) && (count($finish) > 0)) {
            $theta        = $start[1] - $finish[1];
            // modifiedon 04-05-2014
            /*$distance = (sin(deg2rad($start[0])) * sin(deg2rad($finish[0]))) + (cos(deg2rad($start[0])) * cos(deg2rad($finish[0])) * cos(deg2rad($theta))); 
            $distance = acos($distance); 
            $distance = rad2deg($distance); 
            $distance = $distance * 60 * 1.1515; 
            
            return round($distance, 4);*/
            //if($theta > 0 )
            //{
            //echo '<br>';
            //echo 'theta'.$theta;
            //echo '<br>';
            $distance     = (sin(deg2rad($start[0])) * sin(deg2rad($finish[0]))) + (cos(deg2rad($start[0])) * cos(deg2rad($finish[0])) * cos(deg2rad($theta)));
            //echo '<br>';
            $cal_distance = acos($distance);
            //var_dump($cal_distance);
            if (is_nan($cal_distance)) {
                $distance = '0';
                return $distance;
            } else {
                //echo 'cos_distance'.$cal_distance;
                $red_deg_distance = rad2deg($cal_distance);
                //echo '<br>';
                //echo 'distance'.$red_deg_distance;
                $final_distance   = $red_deg_distance * 60 * 1.1515;
                //echo '<br>';
                //echo 'miles'.$final_distance;
                $after_round      = round($final_distance, 4);
                //echo '<br>'.'After Round'.$after_round;
                return $after_round;
            }
            /*}
            else
            
            {
            $distance = '0';
            return $distance;				
            }	*/
        } else {
            $distance = 0;
            return $distance;
        }
    }
    /*** Get Taxi fare per KM & Waiting charge of the company ***/
    public function get_taxi_fare_waiting_charge($taxi_id = "")
    {
        $sql    = "SELECT * FROM  " . TAXI . " JOIN  " . COMPANY . " ON (  " . COMPANY . ".`cid` =  " . TAXI . ".`taxi_company` ) WHERE  " . TAXI . ".`taxi_id` =  '$taxi_id'";
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /** Get Driver Location */
    public function get_driver_location($driver_id)
    {
        $result = DB::select('driver_id', 'latitude', 'longitude', 'status')->from(DRIVER)->where('driver_id', '=', $driver_id)->execute()->as_array();
        return $result;
    }
    /** Get Passenger Details
    public function passenger_details($id,$company_id)
    {
    $query = "SELECT * FROM ".PASSENGERS." WHERE id = '$id' ";
    
    //$query= "SELECT *, CONCAT(REPEAT('X', CHAR_LENGTH(creditcard_no) - 4),SUBSTRING(creditcard_no, -4)) AS masked_card,creditcard_cvv,CONCAT(REPEAT('X', CHAR_LENGTH(creditcard_cvv))) AS masked_cvv FROM ".PASSENGERS." WHERE id = '$id' ";
    
    /*if($company_id != '')
    {
    $query .= " and passenger_cid = '$company_id'";
    }
    else
    {
    $query .= " and passenger_cid = '0'";
    }
    *
    //echo $query;exit;
    $result =  Db::query(Database::SELECT, $query)
    ->execute()
    ->as_array();
    
    return $result;
    } */
    public function passenger_detailsbyemail($email, $company_id)
    {
        //$query = "SELECT id,email,profile_image,salutation,name,lastname,country_code,phone,org_password,address,referral_code,referral_code_amount,otp,fb_user_id,fb_access_token,user_status,login_from,device_id,device_token,skip_credit_card FROM " . PASSENGERS . " WHERE email = '$email' ";
        if ($company_id != '') {
			$match = ['passengerdetails.email'=>$email,'passengerdetails.passenger_cid'=>(int)$company_id];
            //$query .= " and passenger_cid = '$company_id'";
        } else {
			$match = ['passengerdetails.email'=>$email,'passengerdetails.passenger_cid'=> 0];
            //$query .= " and passenger_cid = 0";
        }
        //$result = Db::query(Database::SELECT, $query)->execute()->as_array();
        $res = $this->mongo_db->find(MDB_PASSENGERS,$match,['_id','passengerdetails.email','passengerdetails.profile_image','passengerdetails.profile_image','passengerdetails.salutation','passengerdetails.name','passengerdetails.lastname','passengerdetails.country_code','passengerdetails.phone','passengerdetails.org_password','passengerdetails.address','passengerdetails.referral_code','passengerdetails.referral_code_amount','passengerdetails.otp','passengerdetails.fb_user_id','passengerdetails.fb_access_token','passengerdetails.user_status','passengerdetails.login_from','passengerdetails.device_id','passengerdetails.device_token','passengerdetails.skip_credit_card']);
        $result = iterator_to_array($res);
        $result1 = reset($result);
        return (!empty($result1)) ? $result1 : [];
    }
    /** Get Passenger Details Using Email */
    public function getpassengerdetails($email)
    {
        $result = DB::select()->from(PASSENGERS)->where('email', '=', $email)->execute()->as_array();
        return $result;
    }
    //Forgot Password for Both Driver and Passenger
    public function forgot_password($array, $password)
    {
        if ($array['user_type'] == 'P') {
            $result = DB::update(PASSENGERS)->set([
                'password' => Html::chars(md5($password))
            ])->where('phone', '=', $array['phone_no'])->execute();
            $result = DB::select()->from(PASSENGERS)->where('phone', '=', $array['phone_no'])->execute()->as_array();
            return $result;
        } else {
            $result = DB::update(PEOPLE)->set([
                'password' => Html::chars(md5($password))
            ])->where('phone', '=', $array['phone_no'])->execute();
            $result = DB::select()->from(PEOPLE)->where('phone', '=', $array['phone_no'])->execute()->as_array();
            return $result;
        }
    }
    /*** Get Passenger Profile details using passenger log id ***/
    public function get_driverupcoming_log_details($passengerlog_id = "", $company_id = '')
    {
        $company_condition = '';
        if ($company_id != '') {
            $company_condition = "  AND " . PASSENGERS_LOG . ".company_id = '$company_id' ";
        }
        $sql    = "SELECT * ,  " . PEOPLE . ".name AS driver_name," . PEOPLE . ".phone AS driver_phone, " . PASSENGERS . ".discount AS passenger_discount, " . PASSENGERS . ".name AS passenger_name," . PASSENGERS . ".email AS passenger_email," . PASSENGERS . ".phone AS passenger_phone FROM  " . PASSENGERS_LOG . " 
				JOIN  " . COMPANY . " ON (  " . PASSENGERS_LOG . ".`company_id` =  " . COMPANY . ".`cid` ) 
				JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
				JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) 
				
				WHERE  " . PASSENGERS_LOG . ".`passengers_log_id` =  '$passengerlog_id' $company_condition";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get  Passenger Completed Trip Log **/
    public function get_passenger_log_details($userid = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $condition                = "";
        if ($createdate == 0) {
            $condition = "AND pg.pickup_time >='" . $start_time . "'";
        }
        /*$sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=pg.driver_id) as drivername  FROM ".PASSENGERS_LOG." as pg LEFT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition  order by pg.passengers_log_id desc LIMIT $start,$limit";     */
        /*if($start == 0 && $limit ==0)
        {*/
        $company_condition = "";
        if ($company_id != "") {
            $company_condition = " AND pg.company_id = '$company_id'";
        }
        $sql = "SELECT *,pg.passengers_log_id,
		(select concat(name,' ',lastname) from " . PEOPLE . " where id=pg.driver_id) as drivername,
		(select pay_mod_name from " . PAYMENT_MODULES . " where pay_mod_id=t.payment_type) as payment_name,
		pg.passengers_log_id as pass_log_id,t.company_tax as tax_amount,pg.company_tax as tax_percentage,		
		FROM " . PASSENGERS_LOG . " as pg 
		RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id  
		WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition $company_condition order by pg.passengers_log_id desc LIMIT $start,$limit";
        //echo $sql;
        /*}
        else
        {
        $sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=pg.driver_id) as drivername,pg.passengers_log_id as pass_log_id   FROM ".PASSENGERS_LOG." as pg LEFT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition  order by pg.passengers_log_id desc LIMIT $start,$limit";
        }
        */
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    public function get_favourite_trip_details($userid = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $condition                = "";
        if ($createdate == 0) {
            $condition = "AND pg.pickup_time >='" . $start_time . "'";
        }
        $company_condition = "";
        if ($company_id != "") {
            $company_condition = " AND pg.company_id = '$company_id'";
        }
        $sql = "SELECT *,pg.passengers_log_id,(select concat(name,' ',lastname) from " . PEOPLE . " where id=pg.driver_id) as drivername,(select pay_mod_name from " . PAYMENT_MODULES . " where pay_mod_id=t.payment_type) as payment_name,pg.passengers_log_id as pass_log_id,(select count(*) from  " . PASSENGERS_LOG . " as pg RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' AND favourite_trip='S' $condition $company_condition ) as total_count  FROM " . PASSENGERS_LOG . " as pg RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' AND favourite_trip='S' $condition  $company_condition order by pg.passengers_log_id desc LIMIT $start,$limit";
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
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
        /*$sql    = "SELECT taxi_model FROM  " . TAXI . "  WHERE  `taxi_id` =  '$taxi_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        
        $result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],["taxi_model"]);
        //print_r($result);exit;
        return (isset($result)? $result:[]);
    }
    /*** Get Taxi fare per KM & Waiting charge of the company based Company***/
    public function get_model_fare_details($company_id, $model_id = "", $search_city = "")
    {
        $arguments = [
			['$project' => [
				"base_fare"=> '$base_fare',
				"min_fare"=> '$min_fare',
				"cancellation_fare"=> '$cancellation_fare',						
				"below_km"=> '$below_km',
				"above_km"=> '$above_km',
				"minutes_fare"=> '$minutes_fare',						
				"night_charge"=> '$night_charge',
				"night_timing_from" => '$night_timing_from',
				"night_timing_to" => '$night_timing_to',						
				"night_fare"=> '$night_fare',
				"evening_charge" => '$evening_charge',
				"evening_timing_from" => '$evening_timing_from',
				"evening_timing_to" => '$evening_timing_to',						
				"evening_fare"=> '$evening_fare',
				"waiting_time" => '$waiting_time',
				"min_km" => '$min_km',
				"below_above_km" => '$below_above_km',
				"time" => '$time',
				"waiting_free" => '$waiting_free'
			]],
			['$match' => [
				"_id"=> $model_id
			]]					
		];
			$result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);

        return (isset($result['result']) ? $result['result']: []); 
    }
    /*Function Used to get the 
     * Driver and Taxi Details 
     * based upon the ID 
     */
    public function get_driver_details($driver_id, $taxi_id, $cityid)
    {
        /*$taxi_id = DB::select('mapping_taxiid')->from(TAXIMAPPING)
        ->where('mapping_driverid','=',$id)				
        ->where('mapping_status','=','A')
        ->where('mapping_startdate','<=',$this->currentdate)
        ->where('mapping_enddate','>=',$this->currentdate)					
        ->execute()
        ->get('mapping_taxiid');*/
        $taxi_id             = $taxi_id;
        //Driver Rating Need to bind with the result
        $ratings['comments'] = DB::select(PASSENGERS_LOG . '.passengers_log_id', PASSENGERS_LOG . '.passengers_id', PASSENGERS_LOG . '.driver_id', PASSENGERS_LOG . '.taxi_id', PASSENGERS_LOG . '.company_id', PASSENGERS_LOG . '.current_location', PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.rating', PASSENGERS_LOG . '.comments', PASSENGERS_LOG . '.driver_comments', PEOPLE . '.salutation', PEOPLE . '.name', PEOPLE . '.lastname', PEOPLE . '.email', PEOPLE . '.photo', PEOPLE . '.device_token', PEOPLE . '.device_type')->from(PASSENGERS_LOG)->where('driver_id', '=', $driver_id)->join(PEOPLE)->on(PASSENGERS_LOG . '.driver_id', '=', PEOPLE . '.id')->where('travel_status', '=', 1)->where('driver_reply', '=', 'A')->order_by('createdate', 'DESC')->limit(5)->offset(0)->execute()->as_array();
        $model_query         = "select city_model_fare from " . CITY . " where city_id = '" . $cityid . "' limit 0,1";
        $model_fetch         = Db::query(Database::SELECT, $model_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        } else {
            $model_query     = "select city_model_fare from " . CITY . " where city.default='1' limit 0,1";
            $model_fetch     = Db::query(Database::SELECT, $model_query)->execute()->as_array();
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        }
        //echo FARE_SETTINGS;
        if (FARE_SETTINGS == 2) {
            $result_query = "select company.company_name,(SUM(company_model_fare.base_fare)*($city_model_fare)/100) + company_model_fare.base_fare as base_fare,(SUM(company_model_fare.min_fare)*($city_model_fare)/100) + company_model_fare.min_fare as min_fare,(SUM(company_model_fare.cancellation_fare)*($city_model_fare)/100) + company_model_fare.cancellation_fare as cancellation_fare,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as cancellation_nfree,(select company_tax from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as company_tax,(SUM(company_model_fare.below_km)*($city_model_fare)/100) + company_model_fare.below_km as below_km,(SUM(company_model_fare.above_km)*($city_model_fare)/100) + company_model_fare.above_km as above_km,company_model_fare.night_charge,company_model_fare.night_timing_to,company_model_fare.night_fare,company_model_fare.min_km,company_model_fare.below_above_km,motor_model.model_name,taxi.taxi_id,taxi.taxi_no,taxi.taxi_type,taxi.taxi_model,taxi.taxi_company,taxi.taxi_capacity,taxi.taxi_speed,taxi.max_luggage,taxi.taxi_image,taxi.taxi_serializeimage  from " . TAXI . " join " . COMPANY . "  ON taxi.taxi_company=company.cid 
		JOIN " . MOTORMODEL . "  ON taxi.`taxi_model`=motor_model.model_id 
		JOIN " . COMPANY_MODEL_FARE . " as company_model_fare ON taxi.taxi_model = company_model_fare.model_id
		where company_model_fare.company_cid=company.cid  and taxi_id=$taxi_id";
        } else {
            $result_query = "select company.company_name,(SUM(motor_model.base_fare)*($city_model_fare)/100) + motor_model.base_fare as base_fare,(SUM(motor_model.min_fare)*($city_model_fare)/100) + motor_model.min_fare as min_fare,(SUM(motor_model.cancellation_fare)*($city_model_fare)/100) + motor_model.cancellation_fare as cancellation_fare,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as cancellation_nfree,(select company_tax from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as company_tax,(SUM(motor_model.below_km)*($city_model_fare)/100) + motor_model.below_km as below_km,(SUM(motor_model.above_km)*($city_model_fare)/100) + motor_model.above_km as above_km,motor_model.night_charge,motor_model.night_timing_to,motor_model.night_fare,motor_model.min_km,motor_model.below_above_km,motor_model.model_name,taxi.* from " . TAXI . " join " . COMPANY . "  ON taxi.taxi_company=company.cid JOIN " . MOTORMODEL . "  ON taxi.taxi_model=motor_model.model_id where taxi_id=$taxi_id";
        }
        //echo $result_query;
        $result                = Db::query(Database::SELECT, $result_query)->execute()->as_array();
        $taxi_additional_field = DB::select('*')->from(ADDFIELD)->where('taxi_id', '=', $taxi_id)->execute()->as_array();
        //$additional_field['label_name'] = DB::select('*')->from(MANAGEFIELD)->where('field_status','=','A')->execute()->as_array();
        return array_merge($result, $taxi_additional_field, $ratings);
    }
    /************* Get Current Taxi Details *******************/
    public function get_current_taxi_details($driver_id, $taxi_id, $cityid)
    {
        /*$taxi_id = DB::select('mapping_taxiid')->from(TAXIMAPPING)
        ->where('mapping_driverid','=',$id)				
        ->where('mapping_status','=','A')
        ->where('mapping_startdate','<=',$this->currentdate)
        ->where('mapping_enddate','>=',$this->currentdate)					
        ->execute()
        ->get('mapping_taxiid');*/
        $taxi_id             = $taxi_id;
        //Driver Rating Need to bind with the result
        $ratings['comments'] = DB::select('rating', 'comments')->from(PASSENGERS_LOG)->where('driver_id', '=', $driver_id)->where('travel_status', '=', 1)->order_by('createdate', 'DESC')->limit(5)->offset(0)->execute()->as_array();
        $model_query         = "select city_model_fare from " . CITY . " where city_id='$cityid' limit 0,1";
        $model_fetch         = Db::query(Database::SELECT, $model_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        } else {
            $model_query     = "select city_model_fare from " . CITY . " where city.default='1' limit 0,1";
            $model_fetch     = Db::query(Database::SELECT, $model_query)->execute()->as_array();
            $city_model_fare = $model_fetch[0]['city_model_fare'];
        }
        //echo FARE_SETTINGS;
        if (FARE_SETTINGS == 2) {
            $result_query = "select company.company_name,company.cid,(SUM(company_model_fare.base_fare)*($city_model_fare)/100) + company_model_fare.base_fare as base_fare,(SUM(company_model_fare.min_fare)*($city_model_fare)/100) + company_model_fare.min_fare as min_fare,(SUM(company_model_fare.cancellation_fare)*($city_model_fare)/100) + company_model_fare.cancellation_fare as cancellation_fare,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as cancellation_nfree,(select company_tax from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as company_tax,(SUM(company_model_fare.below_km)*($city_model_fare)/100) + company_model_fare.below_km as below_km,(SUM(company_model_fare.above_km)*($city_model_fare)/100) + company_model_fare.above_km as above_km,company_model_fare.night_charge,company_model_fare.night_timing_to,company_model_fare.night_fare,company_model_fare.min_km,company_model_fare.below_above_km,motor_model.model_name,taxi.taxi_id,taxi.taxi_no,taxi.taxi_type,taxi.taxi_model,taxi.taxi_company,taxi.taxi_capacity,taxi.taxi_speed,taxi.max_luggage,taxi.taxi_image,taxi.taxi_serializeimage  from " . TAXI . " 
		join " . COMPANY . "  ON taxi.taxi_company=company.cid 
		JOIN " . MOTORMODEL . "  ON taxi.`taxi_model`=motor_model.model_id 
		JOIN " . COMPANY_MODEL_FARE . " as company_model_fare ON taxi.taxi_model = company_model_fare.model_id
		where company_model_fare.company_cid=company.cid  and taxi_id=$taxi_id";
        } else {
            $result_query = "select company.company_name,company.cid,(SUM(motor_model.base_fare)*($city_model_fare)/100) + motor_model.base_fare as base_fare,(SUM(motor_model.min_fare)*($city_model_fare)/100) + motor_model.min_fare as min_fare,(SUM(motor_model.cancellation_fare)*($city_model_fare)/100) + motor_model.cancellation_fare as cancellation_fare,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as cancellation_nfree,(select company_tax from " . COMPANYINFO . " where " . COMPANYINFO . ".company_cid=company.cid ) as company_tax,(SUM(motor_model.below_km)*($city_model_fare)/100) + motor_model.below_km as below_km,(SUM(motor_model.above_km)*($city_model_fare)/100) + motor_model.above_km as above_km,motor_model.night_charge,motor_model.night_timing_to,motor_model.night_fare,motor_model.min_km,motor_model.below_above_km,motor_model.model_name,taxi.* from " . TAXI . " 
			join " . COMPANY . "  ON taxi.taxi_company=company.cid 
			JOIN " . MOTORMODEL . "  ON taxi.taxi_model=motor_model.model_id where taxi_id=$taxi_id";
        }
        //echo $result_query;					
        $result = Db::query(Database::SELECT, $result_query)->execute()->as_array();
        return array_merge($result, $ratings);
    }
    public function passengerlogid_details($log_id)
    {
       $args = [
			['$match' => ['_id' => (int)$log_id]],
                        ['$lookup' => [
									'from' => MDB_PASSENGERS,
									'localField' => 'passengers_id',
									'foreignField' => '_id',
									'as' => 'pass',
								]],
			['$unwind' => '$pass'],
			['$lookup' => [
									'from' => MDB_PEOPLE,
									'localField' => 'driver_id',
									'foreignField' => '_id',
									'as' => 'people',
								]],
			['$unwind' => '$people'],
			
			['$lookup' => [
									'from' => MDB_LOCATION_HISTORY,
									'localField' => '_id',
									'foreignField' => 'trip_id',
									'as' => 'driver_location',
								]],
			['$unwind' => '$driver_location'],
			
			['$project' =>
				['_id' => 0,
					'passengers_id'=>'$passengers_id',
                    'driver_id'=>'$driver_id',
					'passengers_id'=>'$passengers_id',
					'company_id'=>'$company_id',
					'passenger_name'=>'$pass.name',
					'passenger_lastname'=>'$pass.lastname',
					'passenger_email'=>'$pass.email',
					'passenger_phone'=>'$pass.phone',
					'name'=>'$people.name',
					'email'=>'$people.email',
					'phone'=>'$people.phone',
					'driver_name'=>'$people.name',
					'driver_email'=>'$people.email',
					'driver_phone'=>'$people.phone',
					'passenger_devicetoken'=>'$pass.device_token',
					'driver_devicetoken'=>'$people.device_token',
					'passenger_devicetype'=>'$pass.device_type',
					'driver_devicetype'=>'$people.device_type',
					'search_city'=>'$search_city',
					'taxi_id'=>'$taxi_id',
					'pickup_time'=>'$pickup_time',
					'pickupLocation' => '$current_location',
					'dropLocation' => '$drop_location',
					'pickup_latitude' => '$pickup_latitude',
					'pickup_longitude' => '$pickup_longitude',
					'drop_latitude' => '$drop_latitude',
					'drop_longitude' => '$drop_longitude',
					'pre_transaction_id' => '$pre_transaction_id',
                    'pre_transaction_amount' => '$pre_transaction_amount',
					'passenger_pending_amt' => '$passenger_pending_amt',
                    'used_wallet_amount' => '$used_wallet_amount',              
                    'wallet_amount_used' => ['$ifNull'=>['$wallet_amount_used',0]],					
                    'active_record' => '$driver_location.active_record'
				]
			]
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		return (!empty($result['result']) ? $result['result'] : []);
    }
    public function passenger_transdetails($log_id)
    {		
		$args = [
			['$match' => ['_id' => (int)$log_id]],
			['$lookup' => [
									'from' => MDB_PASSENGERS,
									'localField' => 'passengers_id',
									'foreignField' => '_id',
									'as' => 'passengers',
								]],
			['$unwind' => '$passengers'],
			['$lookup' => [
									'from' => MDB_TRANSACTION,
									'localField' => '_id',
									'foreignField' => 'passengers_log_id',
									'as' => 'trans',
								]],
			['$unwind' => '$trans'],
			['$lookup' => [
									'from' => MDB_PEOPLE,
									'localField' => 'driver_id',
									'foreignField' => '_id',
									'as' => 'people',
								]],
			['$unwind' => '$people'],
			['$project' =>
				['passengers_log_id' => '$_id',
					'booking_key' => '$booking_key',
					'passengers_id' => '$passengers_id',
					'driver_id' => '$driver_id',
					'taxi_id' => '$taxi_id',
					'company_id' => '$company_id',
					'current_location' => '$current_location',
					'pickup_latitude' => '$pickup_latitude',
					'pickup_longitude' => '$pickup_longitude',
					'drop_location' => '$drop_location',
					 'drop_latitude' => '$drop_latitude',
					'drop_longitude' => '$drop_longitude',
					'no_passengers' => '$no_passengers',
					'approx_distance' => '$approx_distance',
					'approx_duration' => '$approx_duration',
					'approx_fare' => '$approx_fare',
					'time_to_reach_passen' => '$time_to_reach_passen',
					'pickup_time' => '$pickup_time',
					'dispatch_time' => '$dispatch_time',
					'pickupdrop' => '$pickupdrop',
					'rating' => '$rating',
					'comments' => '$comments',
					'travel_status' => '$travel_status',
					'driver_reply' => '$driver_reply',
					'createdate' => '$createdate',
					'booking_from' => '$booking_from',
					'company_tax' => '$company_tax',
					'faretype' => '$faretype',
					'bookingtype' => '$bookingtype',
					'driver_comments' => '$driver_comments',
					'travel_time' => ['$subtract' => ['$drop_time','$actual_pickup_time']],
					'used_wallet_amount' => '$used_wallet_amount',
					'job_referral' => '$trans._id',
					'distance' => '$trans.distance',
					'actual_distance' => '$trans.actual_distance',
					'tripfare' => '$trans.tripfare',
					'fare' => '$trans.fare',
					'tips' => '$trans.tips',
					'waiting_time' => '$trans.waiting_time',
					'waiting_cost' => '$trans.waiting_cost',
					'tax_amount' => '$trans.company_tax',
					'amt' => '$trans.amt',
					'passenger_discount' => '$trans.passenger_discount',
					'account_discount' => '$trans.account_discount',
					'credits_used' => '$trans.credits_used',
					'transaction_id' => '$trans.transaction_id',
					'payment_type' => '$trans.payment_type',
					'payment_status' => '$trans.payment_status',
					'admin_amount' => '$trans.admin_amount',
					'company_amount' => '$trans.company_amount',
					'nightfare_applicable' => '$trans.nightfare_applicable',
					'nightfare' => '$trans.nightfare',
					'eveningfare_applicable' => '$trans.eveningfare_applicable',
					'eveningfare' => '$trans.eveningfare',
					'trans_packtype' => '$trans.trans_packtype',
					'waiting_time' => '$trans.waiting_time',
					'minutes_fare' => '$trans.minutes_fare',
					'trip_minutes' => '$trans.trip_minutes',
					'driver_name' => '$people.name',
					'driver_email' => '$people.email',
					'passenger_name' => '$passengers.name',
					'passenger_email' => '$passengers.email'  ]]
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		return (!empty($result['result']) ? $result['result'] : []);
    }
    public function paypal_details()
    {
        $sql = "SELECT *  FROM " . PAYMENT_GATEWAYS;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
	
	public function knet_details()
    {
        $result = $this->mongo_db->find_one(MDB_PAYMENT_GATEWAYS,['payment_gatway'=>'KNET','company_id'=>(int)1,'payment_status'=> 'A'],["_id","knet_alias","payment_method","knet_response_url","knet_error_url"]);
		return (isset($result)?$result:[]);
    }
	
    public function siteinfo_details()
    {
        /*$sql = "SELECT admin_commission,referral_discount,currency_format,referral_amount,referral_settings,wallet_amount1,wallet_amount2,wallet_amount3,wallet_amount_range  FROM " . SITEINFO;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        
        $result = $this->mongo_db->find_one(MDB_SITEINFO,[],["admin_commission","referral_discount","currency_format","referral_amount","referral_settings","wallet_amount1","wallet_amount2","wallet_amount3","wallet_amount_range","airport_parking_charge","airport_drop_of","airport_pick_up"]);
        return (isset($result)?$result:[]);
    }
    public function triptransact_details($details, $payment_types)
    {
		$args = [
					  ['$lookup' => ['from' => MDB_PACKAGE,
											   'localField' => 'upgrade_packageid',
											   'foreignField' => '_id',
											   'as' => 'package'
											   ]],
					  ['$unwind' => '$package'],
					  ['$match' => ['upgrade_companyid' => (int)$details['company_id']]],
					  ['$project' => ['check_package_type' => '$check_package_type']]
					];
		$res = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$args);
		$result = (!empty($res['result']) ? $res['result'] : []);
        if (count($result) > 0) {
            $check_package_type = $result[0]['check_package_type'];
        } else {
            $check_package_type = 'T';
        }
        if ($check_package_type != 'N') {
            $admin_amt     = ($details['fare'] * $details[0]['admin_commission']) / 100; //payable to admin
            $admin_amt     = round($admin_amt, 2);
            $total_balance = round($details['fare'], 2);
            //Set Commission to Admin
			$update = $this->mongo_db->Update(MDB_PEOPLE,['user_type' => 'A'],
											  ['$inc' => ['account_balance' => $total_balance ]],
											  ['upsert' => true]);
        } else {
            $admin_amt = 0;
        }
        $company_amt              = $details['fare'] - $admin_amt;
        $company_amt              = round($company_amt, 2);
        //Set Commission to Admin
		$update = $this->mongo_db->Update(MDB_PEOPLE,['user_type' => 'C','company_id' => (int)$details['company_id']],
										  ['$inc' => ['account_balance' => $company_amt ]]);		
        $current_time             = date('Y-m-d H:i:s');
        $details['CORRELATIONID'] = isset($details['CORRELATIONID']) ? $details['CORRELATIONID'] : '';
        $details['ACK']           = isset($details['ACK']) ? $details['ACK'] : '1';
        $details['CURRENCYCODE']  = isset($details['CURRENCYCODE']) ? $details['CURRENCYCODE'] : '';
		$inc_id = $this->get_insert_id(MDB_TRANSACTION);
        $insert_array = [
			'_id' => (int)$inc_id,
			'passengers_log_id' => (int)$details['passengers_log_id'],
			'distance' => $details['distance'],
			'actual_distance' => $details['actual_distance'],
			'tripfare' => (double)$details['tripfare'],
			'fare' => (double)$details['fare'],
			'tips' => (double)$details['tips'],
			'waiting_cost' => (double)$details['waiting_cost'],
			'waiting_time' => $details['waiting_time'],
			'company_tax' => (double)$details['company_tax'],
			'trip_minutes' => $details['trip_minutes'],
			'minutes_fare' => (double)$details['minutes_fare'],
			'passenger_discount' => (double)$details['passenger_discount'],
			'account_discount' => (double)$details['account_discount'],
			'credits_used' => $details['credits_used'],
			'remarks' => $details['remarks'],
			'correlation_id' => $details['CORRELATIONID'],
			'ack' => $details['ACK'],
			'transaction_id' => $details['TRANSACTIONID'],
			'payment_type' => $details['payment_type'],
			'order_time' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),
			'amt' => (float)$details['amt'],
			'currency_code' => $details['CURRENCYCODE'],
			'payment_status' => $details['ACK'],
			'captured' => 1,
			'admin_amount' => (double)$admin_amt,
			'company_amount' => (double)$company_amt,
			'trans_packtype' => $check_package_type,
			'nightfare_applicable' => $details['nightfare_applicable'],
			'nightfare' => (double)$details['nightfare'],
			'payment_gateway_id' => (int)$payment_types
		];
		$result = $this->mongo_db->Insert(MDB_TRANSACTION,$insert_array);
        return (isset($result['err']) ? 0 : 1);
    }
    public function cancel_triptransact_details($details, $cancellation_nfree, $payment_types)
    {
		$update_array = [
			"comments" => $details['remarks'],
			"travel_status" => 4
		];
		$res = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$details['passenger_log_id']],['$set'=>$update_array],['upsert'=>true]);
		return (empty($res['err']))?1:$res['err_msg'];
    }
    public function cancel_triptransact_details_old($details, $cancellation_nfree, $payment_types)
    {
        if ($cancellation_nfree != 0) {
            $first_query   = "select " . PACKAGE_REPORT . ".check_package_type from " . PACKAGE_REPORT . " join " . PACKAGE . " on " . PACKAGE . ".package_id =" . PACKAGE_REPORT . ".upgrade_packageid  where " . PACKAGE_REPORT . ".upgrade_companyid = " . $details['company_id'] . "  order by upgrade_id desc limit 0,1";
            echo $first_query;exit;
            $first_results = Db::query(Database::SELECT, $first_query)->execute()->as_array();
            if (count($first_results) > 0) {
                $check_package_type = $first_results[0]['check_package_type'];
            } else {
                $check_package_type = 'T';
            }
            if ($check_package_type != 'N') {
                $admin_amt     = ($details['total_fare'] * $details[0]['admin_commission']) / 100; //payable to admin
                $admin_amt     = round($admin_amt, 2);
                $total_balance = round($details['total_fare'], 2);
                //Set Commission to Admin	
                $updatequery   = " UPDATE " . PEOPLE . " SET account_balance=account_balance+$total_balance wHERE user_type = 'A'";
                $updateresult  = Db::query(Database::UPDATE, $updatequery)->execute();
            } else {
                $admin_amt = 0;
            }
            //$company_amt = $details['total_fare'] - $admin_amt; 	
            $company_amt  = $details['total_fare'];
            $company_amt  = round($company_amt, 2);
            //Set Commission to Admin	
            $updatequery  = " UPDATE " . PEOPLE . " SET account_balance=account_balance+$company_amt wHERE user_type = 'C' and company_id=" . $details['company_id'];
            $updateresult = Db::query(Database::UPDATE, $updatequery)->execute();
            if ($details['travel_status'] == 4) {
                $updatequery  = " UPDATE " . PASSENGERS_LOG . " SET comments='" . $details['remarks'] . "', travel_status='" . $details['travel_status'] . "' WHERE passengers_log_id=" . $details['passenger_log_id'];
                $updateresult = Db::query(Database::UPDATE, $updatequery)->execute();
            }
            $current_time             = date('Y-m-d H:i:s');
            $details['CORRELATIONID'] = isset($details['CORRELATIONID']) ? $details['CORRELATIONID'] : '';
            $details['ACK']           = isset($details['ACK']) ? $details['ACK'] : '1';
            $details['CURRENCYCODE']  = isset($details['CURRENCYCODE']) ? $details['CURRENCYCODE'] : '';
            $result                   = DB::insert(TRANS, [
                'passengers_log_id',
                'fare',
                'remarks',
                'correlation_id',
                'ack',
                'transaction_id',
                'payment_type',
                'order_time',
                'amt',
                'currency_code',
                'payment_status',
                'captured',
                'admin_amount',
                'company_amount',
                'trans_packtype',
                'payment_gateway_id'
            ])->values([
                $details['passenger_log_id'],
                $details['total_fare'],
                $details['remarks'],
                $details['CORRELATIONID'],
                $details['ACK'],
                $details['TRANSACTIONID'],
                $details['pay_mod_id'],
                $current_time,
                $details['total_fare'],
                $details['CURRENCYCODE'],
                $details['ACK'],
                '1',
                $admin_amt,
                $company_amt,
                $check_package_type,
                $payment_types
            ])->execute();
            return $result;
        } else {
            $updatequery  = " UPDATE " . PASSENGERS_LOG . " SET comments='" . $details['remarks'] . "', travel_status='4' WHERE passengers_log_id=" . $details['passenger_log_id'];
            $updateresult = Db::query(Database::UPDATE, $updatequery)->execute();
        }
    }
    public function check_tranc($log_id, $flag)
    {
        $match = ['_id'=> (int)$log_id];
        if($flag == 1){
			$match['travel_status'] = 1;
		}
		$arguments = [
			['$match' => $match],
			['$lookup' => [
					'from'=>MDB_TRANSACTION,
					'localField'=> "_id",
					'foreignField' => "passengers_log_id",
					'as'=> "transaction"]],
			['$unwind' => '$transaction'],
			['$project' => [
					'travel_status'=>'$travel_status',
					'driver_id' =>'$driver_id',
					'id' => '$transaction._id']]							
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		if ($flag == 1) {
            return (!empty($result['result']) ? $result['result'] : []);		
        } else {
            return (!empty($result['result']) ? $result['result'] : []);		
        }		
    }
    public function check_travelstatus($log_id)
    {
        /*$sql    = "SELECT travel_status,driver_reply FROM " . PASSENGERS_LOG . " WHERE passengers_log_id = '$log_id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['travel_status'];
        } else {
            return -1;
        }*/
		
		$result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['_id'=>(int)$log_id],["travel_status","driver_reply"]);
		
        return isset($result['travel_status'])?$result['travel_status']: -1 ;
    }
    public function company_details($cid)
    {
        $sql    = "SELECT * FROM " . COMPANY . " WHERE cid = '$cid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function get_driver_profile_details($id = "", $company_id = "")
    {
        if ($company_id != "") {
            $sql = "SELECT salutation,name,lastname,email,address,password,otp,photo,device_type,device_token,device_id,phone,login_status,user_type,driver_referral_code,notification_setting,company_id,driver_license_id,profile_picture," . COMPANY . ".bankname," . COMPANY . ".userid," . COMPANY . ".bankaccount_no FROM " . PEOPLE . " JOIN  " . COMPANY . " ON (  " . PEOPLE . ".`company_id` =  " . COMPANY . ".`cid` )  WHERE id = '$id' and company_id='$company_id' AND user_type = 'D' ";
        } else {
            $sql = "SELECT salutation,name,lastname,email,address,password,otp,photo,device_type,device_token,device_id,phone,login_status,user_type,driver_referral_code,notification_setting,company_id,driver_license_id,profile_picture," . COMPANY . ".bankname," . COMPANY . ".userid," . COMPANY . ".bankaccount_no FROM " . PEOPLE . " JOIN  " . COMPANY . " ON (  " . PEOPLE . ".`company_id` =  " . COMPANY . ".`cid` )  WHERE id = '$id' AND user_type = 'D' ";
        }
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    public function save_driver_location_history_old($location_array, $default_companyid) //renamed for resolve distance issue
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $driver_id                = $location_array['driver_id'];
        $trip_id                  = $location_array['trip_id'];
        $status                   = $location_array['status'];
		$coordinates = explode('|', $location_array['locations']);
		if (count($coordinates) > 1) {
			$last_1      = array_slice($coordinates, -2, 2, true);
			$coordinates = explode(',', $last_1[count($coordinates) - 2]);
		} else {
			$coordinates = explode(',', $coordinates[0]);
		}
		$latitude  = empty($coordinates['0']) ? '0.0' : $coordinates['0'];
		$longitude = empty($coordinates['1']) ? '0.0' : $coordinates['1'];
        if ($driver_id != "") {
            if ($trip_id != '') {
				//MongoDB
				$trip_query = $this->mongo_db->find_one(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['loc.coordinates','distance','_id']);
				$trip_check = (!empty($trip_query))?$trip_query:[];
				
                if (count($trip_check) == 0) {
                    if ($trip_id != 0) {
						//MongoDB
						//Get the last object id
						$rs = $this->mongo_db->find(MDB_LOCATION_HISTORY,[],['_id'])->sort(['_id'=>-1])->limit(1);
						$res = (!empty($rs))?iterator_to_array($rs):[1];
						reset($res);
						$first_key = key($res);
						$inc_id = $first_key+1;
						$loc_data = ['_id' => $inc_id,
							'driver_id' => (int)$driver_id,
							'trip_id' => (int)$trip_id,
							'status' => $status,
							'distance' => (float)0,
							'createdate' =>$current_time,
							'loc' => ["type"=>"MultiPoint","coordinates"=>[[(double)$longitude,(double)$latitude]]]
						];
						$loc_result = $this->mongo_db->insert(MDB_LOCATION_HISTORY,$loc_data);
						return (!empty($loc_result) && empty($loc_result['err']))?1:0;
                    } else {
                        return 5; // If there is no trip id means update only driver current location. This is done at controller it self
                    }
                } else {
					//MongoDB					
					if (!empty($trip_check['loc']['coordinates'][0])) {
						$pickup_location = [$trip_check['loc']['coordinates'][0][1],$trip_check['loc']['coordinates'][0][0]];
						$drop_location = [$latitude,$longitude];
						// Pass pickup lat,lon and drop lat,lon to Haversine formula
						$distance         = $this->Tripdistance_Haversine($pickup_location, $drop_location);
						$current_distance = 0;
						if ($distance > 0) {
							if (UNIT_NAME != "KM") { //to get distance in miles
								$current_distance = round($distance, 4);
							} else { //to get distance in km
								$current_distance = round($distance * 1.609344, 4);
							}
						}
						/*
						if (isset($total_distance)) {
							$prev_distance  = $total_distance;
							$total_distance = $prev_distance + $current_distance;
						} else {
							$prev_distance  = isset($trip_check['distance'])?$trip_check['distance']:0;
							$total_distance = $prev_distance + $current_distance;
						}*/
						$total_distance = $current_distance;
						if ($trip_id != 0) {
							$result = $this->mongo_db->update(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['$push'=>['loc.coordinates'=>[(double)$longitude,(double)$latitude]]],['upsert'=>false]);
							
							
							$result1 = $this->mongo_db->update(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['$set'=>['status'=>$status,'driver_id'=>(int)$driver_id,'distance'=>(float)$total_distance]],['upsert'=>false]);
							
							//$distance_updatequery  = " UPDATE passengers_log SET distance='$total_distance' where passengers_log_id = '$trip_id'";
							//$distance_updateresult = Db::query(Database::UPDATE, $distance_updatequery)->execute();
							
							$distance_updateresult = $this->mongo_db->update(PASSENGERS_LOG,['_id'=>(int)$trip_id],['$set'=>['distance'=>$total_distance]],['upsert'=>false]);
							
							if(empty($result['err']) && empty($result1['err'])){
								
								//echo $total_distance;
								//echo '<pre>'; print_r($result);exit;
								$result[0] = 1;
                                $result[1] = $total_distance;
                                return $result;
							} else {
								return 0;
							}
                        } else {
                            return 5;
                        }
                    } else {
                        return 3;
                    }
                }
            } else {
                return 5;
            }
        } else {
            return 2;
        }
    }
    public function save_driver_location_history($location_array, $default_companyid)
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $driver_id                = $location_array['driver_id'];
        $trip_id                  = $location_array['trip_id'];
        $status                   = $location_array['status'];
		
        $location_record_array = explode('|',$location_array['locations']);		
		$location_record = '';	
		$loc_array = [];
		foreach($location_record_array as $key=>$value)
		{
			if($value !=""){
				//$location_record .='['.$value.']'.',';
				$lat_long = explode(',',$value);
				$temp = $lat_long[0];
				$lat_long[0] = (double)$lat_long[1];
				$lat_long[1] = (double)$temp;
				$loc_array[] = $lat_long;
			}
		}		
        if ($driver_id != "") {
            if ($trip_id != '') {
				$trip_query = $this->mongo_db->find_one(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['loc.coordinates','distance','_id']);
				$trip_check = (!empty($trip_query))?$trip_query:[];
                if (count($trip_check) == 0) {
                    if ($trip_id != 0) {
						$rs = $this->mongo_db->find(MDB_LOCATION_HISTORY,[],['_id'])->sort(['_id'=>-1])->limit(1);
						$res = (!empty($rs))?iterator_to_array($rs):[1];
						reset($res);
						$first_key = key($res);
						$inc_id = $first_key+1;
						$loc_data = ['_id' => $inc_id,
							'driver_id' => (int)$driver_id,
							'trip_id' => (int)$trip_id,
							'status' => $status,
							'distance' => (float)0,
							'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),
							'loc' => ["type"=>"MultiPoint","coordinates"=> $loc_array]];
							//print_r($loc_data);exit;
						$loc_result = $this->mongo_db->insert(MDB_LOCATION_HISTORY,$loc_data);
						return (!empty($loc_result) && empty($loc_result['err']))?1:0;
                    } else {
                        return 5; // If there is no trip id means update only driver current location. This is done at controller it self
                    }
                } else {
					$pickup=[];
					$drop=[];					
					if (!empty($trip_check['loc']['coordinates'])) {					
						$pickup_location = (!empty($trip_check['loc']['coordinates'])) ? end($trip_check['loc']['coordinates']) : [];
						$temp = $pickup_location[0];
						$pickup_location[0] = $pickup_location[1];
						$pickup_location[1] = $temp;
						$coordinates=[];$lat_long=[];
						$c=0;
						$explode_location=explode('|',$location_array['locations']);
						for($count=0;$count<count($explode_location);$count++){
							if($explode_location[$count] !=""){
								if($count!=0){
									$pickup_location=explode(',',$explode_location[$c]);
									if($c < count($explode_location)-1){
										$drop_location=explode(',',$explode_location[$c+1]);
									}
									$c++;
								}else{
									$drop_location = explode(',',$explode_location[$count]);
								}
								//$coordinates[] = '['.$explode_location[$count].']';
								$lat_long = explode(',',$explode_location[$count]);
								$temp = $lat_long[0];
								$lat_long[0] = (double)$lat_long[1];
								$lat_long[1] = (double)$temp;
								$coordinates[] = $lat_long;
				
								$distance=$this->Tripdistance_Haversine($pickup_location, $drop_location);
								$current_distance = 0;
								if($distance > 0)
								{
									if(UNIT_NAME != "KM") { //to get distance in miles
										$current_distance = round($distance,4);
									} else { //to get distance in km
										$current_distance = round($distance * 1.609344,4);
									}
								}
								if(isset($total_distance)){
									$prev_distance = $total_distance;
									$total_distance = $prev_distance+$current_distance;
								}else{
									$prev_distance = $trip_check['distance'];
									$total_distance = $prev_distance+$current_distance;
								}
							}								
						}
						
						if ($trip_id != 0) {
							//print_r($coordinates);exit;
							foreach($coordinates as $latlong){
								$result = $this->mongo_db->update(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['$push'=>['loc.coordinates'=> $latlong]],['upsert'=>false]);
							}							
							
							$result1 = $this->mongo_db->update(MDB_LOCATION_HISTORY,['trip_id'=>(int)$trip_id],['$set'=>['status'=>$status,'driver_id'=>(int)$driver_id,'distance'=>(float)$total_distance]],['upsert'=>false]);
							
							$result2 = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=>['distance'=>(double)$total_distance]],['upsert'=>false]);
							if(empty($result['err']) && empty($result1['err'])){
								$result[0] = 1;
                                $result[1] = $total_distance;
                                return $result;
							} else {
								return 0;
							}
                        } else {
                            return 5;
                        }
                    } else {
                        return 3;
                    }
                }
            } else {
                return 5;
            }
        } else {
            return 2;
        }
    }
    public function get_current_distance($location_array, $default_companyid)
    {
        $driver_id       = $location_array['driver_id'];
        $trip_id         = $location_array['trip_id'];
        $distance_query  = "SELECT distance FROM " . PASSENGERS_LOG . " WHERE driver_id = '$driver_id' and passengers_log_id='$trip_id' ";
        $distance_result = Db::query(Database::SELECT, $distance_query)->execute()->as_array();
        return $distance_result;
    }
      public function save_driver_location_history_free($location_array, $default_companyid)
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        //echo $start_time;exit;
        $driver_id                = $location_array['driver_id'];
        $trip_id                  = $location_array['trip_id'];
        $status                   = $location_array['status'];
		$people_result = $this->mongo_db->find_one(MDB_PEOPLE,['_id' => (int)$driver_id,'user_type' => 'D'],['company_id']);
        
		/*
		if (count($people_result) > 0) {
			$arguments = array(
				array('$lookup'=>array(
					'from'=>MDB_PACKAGE,
					'localField'=>"upgrade_packageid",
					'foreignField'=>"_id",
					 'as'=>"package"
				)),
				array('$unwind'=>'$package'),
				array('$match'=> array('upgrade_companyid' =>(int)$people_result['company_id'])),
				array('$project' => array('driver_tracking' => '$driver_tracking'))
			);
			$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
			$first_results = (isset($result['result']) ? $result['result']: array());
            if (count($first_results) > 0) {
                $check_package_type = (isset($first_results[0]['driver_tracking'])) ? $first_results[0]['driver_tracking'] :'';
            }
            if ($check_package_type != 'S') {
                return 3;
            }
        } else {
            return 3;
        }*/
		$coordinates = explode('|', $location_array['locations']);
		
		if (count($coordinates) > 1) {
			$last_1      = array_slice($coordinates, -2, 2, true);
			$coordinates = explode(',', $last_1[count($coordinates) - 2]);
		} else {
			$coordinates = explode(',', $coordinates[0]);
		}
		
		$latitude  = empty($coordinates['0']) ? '0.0' : $coordinates['0'];
		$longitude = empty($coordinates['1']) ? '0.0' : $coordinates['1'];
        if ($driver_id != "") {
            if (($trip_id == '') || (($trip_id == 0))) {
				$find_query = $this->mongo_db->find_one(MDB_LOCATION_HISTORY,['driver_id'=>(int)$driver_id,'status'=>'F'],['_id']);
				
				$find_result = (!empty($find_query))?$find_query:[];				
                if (count($find_result) == 0) {
					//Get the last object id
					$rs = $this->mongo_db->find(MDB_LOCATION_HISTORY,[],['_id'])->sort(['_id'=>-1])->limit(1);
					$res = (!empty($rs))?iterator_to_array($rs):[1];
					reset($res);
					$first_key = key($res);
					$inc_id = $first_key+1;
					$loc_data = ['_id' => (int)$inc_id,
						'driver_id' => (int)$driver_id,
						'distance' => (float)0,
						'status' => $status,
						'createdate' =>$current_time,
						'loc' => ["type"=>"MultiPoint","coordinates"=>[[(double)$longitude,(double)$latitude]]]
					];					
					$loc_result = $this->mongo_db->insert(MDB_LOCATION_HISTORY,$loc_data);
					return (!empty($loc_result) && empty($loc_result['err']))?1:0;
                } else {
					$location_hid = $find_result['_id'];
					$result = $this->mongo_db->update(MDB_LOCATION_HISTORY,['_id'=>(int)$location_hid],['$push'=>['loc.coordinates'=>[(double)$longitude,(double)$latitude]]],['upsert'=>false]);
					return (empty($result['err']))?1:0;
                }
            }
        } else {
            return 2;
        }
    }
    public function save_driver_location_history_free_old($location_array, $default_companyid)
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        //echo $start_time;exit;
        $driver_id                = $location_array['driver_id'];
        $trip_id                  = $location_array['trip_id'];
        $status                   = $location_array['status'];
        $check_package_type       = "";
        $company_query            = "SELECT company_id FROM people WHERE id = '$driver_id' and user_type='D' ";
        $company_result           = Db::query(Database::SELECT, $company_query)->execute()->as_array();
        if (count($company_result) > 0) {
            $first_query   = "select " . PACKAGE . ".driver_tracking from " . PACKAGE_REPORT . " join " . PACKAGE . " on " . PACKAGE . ".package_id =" . PACKAGE_REPORT . ".upgrade_packageid  where " . PACKAGE_REPORT . ".upgrade_companyid = " . $company_result[0]['company_id'] . "  order by upgrade_id desc limit 0,1";
            $first_results = Db::query(Database::SELECT, $first_query)->execute()->as_array();
            if (count($first_results) > 0) {
                $check_package_type = $first_results[0]['driver_tracking'];
            }
            if ($check_package_type != 'S') {
                return 3;
            }
        } else {
            return 3;
        }
        /*$location_record_array = explode(',', $location_array['locations']);
        //print_r($location_record_array);
        $location_record       = '';
        //foreach($location_record_array as $key=>$value)
        {
        $location_record .='['.$value.']'.',';
        }//
        $location_record       = '[' . $location_array['locations'] . ']';
        $string                = str_replace(array(
            '[',
            ']'
        ), '', $location_record);
        $exp                   = explode('|', $string);
        $coordinates           = array();
        foreach ($exp as $v) {
            if ($v != "") {
                $coordinates[] = "[" . $v . "]";
            }
        }
        if ($coordinates != NULL) {
            $location_record = implode(",", $coordinates);
        }*/
		$coordinates = explode('|', $location_array['locations']);
		//print_r($coordinates);exit;
		if (count($coordinates) > 1) {
			$last_1      = array_slice($coordinates, -2, 2, true);
			$coordinates = explode(',', $last_1[count($coordinates) - 2]);
			//print_r($last_1);
		} else {
			$coordinates = explode(',', $coordinates[0]);
		}
		$latitude  = empty($coordinates['0']) ? '0.0' : $coordinates['0'];
		$longitude = empty($coordinates['1']) ? '0.0' : $coordinates['1'];
		//echo $latitude."-F-".$longitude;exit;
        if ($driver_id != "") {
            if (($trip_id == '') || (($trip_id == 0))) {
                /*$driver_track_db = Database::instance(DRIVER_TRACK_DB);
                $find_query      = "SELECT location_hid FROM driver_location_history WHERE status='F' and driver_id='$driver_id' and createdate >= '$start_time'";
                $find_result     = Db::query(Database::SELECT, $find_query)->execute(DRIVER_TRACK_DB)->as_array();*/
				
				//MongoDB
				$find_query = $this->mongo_db->find_one(MDB_LOCATION_HISTORY,['driver_id'=>(int)$driver_id,'status'=>'F'],['_id']);
				//echo '<pre>aa';print_r($find_result);exit;
				$find_result = (!empty($find_query))?$find_query:[];
				//echo count($find_result);exit;
                if (count($find_result) == 0) {
                    //$location_record = substr($location_record, 0, -1);
                    /*$fieldname_array = array(
                        'driver_id',
                        'free_record',
                        'status',
                        'createdate'
                    );
                    $values_array    = array(
                        $driver_id,
                        $location_record,
                        $status,
                        $current_time
                    );
                    $result          = DB::insert('driver_location_history', $fieldname_array)->values($values_array)->execute(DRIVER_TRACK_DB);
                    return ($result)?1:0;*/
					
					//MongoDB
					//Get the last object id
					$rs = $this->mongo_db->find(MDB_LOCATION_HISTORY,[],['_id'])->sort(['_id'=>-1])->limit(1);
					$res = (!empty($rs))?iterator_to_array($rs):[1];
					reset($res);
					$first_key = key($res);
					$inc_id = $first_key+1;
					$loc_data = ['_id' => $inc_id,
						'driver_id' => (int)$driver_id,
						'distance' => (float)0,
						'status' => $status,
						'createdate' =>$current_time,
						'loc' => ["type"=>"MultiPoint","coordinates"=>[[(double)$longitude,(double)$latitude]]]
					];
					
					$loc_result = $this->mongo_db->insert(MDB_LOCATION_HISTORY,$loc_data);
					return (!empty($loc_result) && empty($loc_result['err']))?1:0;
                } else {
                    //$location_record = substr($location_record, 0, -1);
                    //$location_record = $find_result[0]['free_record'].','.$location_record;
                    //$location_hid = $find_result[0]['location_hid'];
					$location_hid = $find_result['_id'];
                    // $updatequery = " UPDATE driver_location_history SET driver_id='$driver_id',status='$status',free_record='$location_record',createdate='$current_time' where location_hid = '$location_hid'";
                    /*$updatequery  = " UPDATE driver_location_history SET free_record = concat(free_record,'" . $location_record . "') where location_hid = '$location_hid'";
                    $updateresult = Db::query(Database::UPDATE, $updatequery)->execute(DRIVER_TRACK_DB);
                    if ($updateresult) {
                        return 1;
                    } else {
                        return 0;
                    }*/
					$result = $this->mongo_db->update(MDB_LOCATION_HISTORY,['_id'=>(int)$location_hid],['$push'=>['loc.coordinates'=>[(double)$longitude,(double)$latitude]]]);
					return (empty($result['err']))?1:0;
                }
                //unset($driver_track_db);
            }
            /*else
            {
            
            } */
        } else {
            return 2;
        }
    }
    public function trip_id_check($trip_id = "")
    {
        $sql    = "SELECT * FROM driver_location_history WHERE trip_id = '$trip_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return count($result);
    }
    //Update the Journey Status with drop location
    public function update_journey_statuswith_drop($id, $msg_status, $driver_reply, $travel_status, $drop_latitude, $drop_longitude, $drop_location, $drop_time, $total_distance, $waiting_hours, $tax)
    {
		//echo $id;
		
        $set_query = [
            'msg_status' => $msg_status,
            'driver_reply' => $driver_reply,
            'travel_status' => $travel_status,
            'drop_latitude' => $drop_latitude,
            'drop_longitude' => $drop_longitude,
            'drop_location' => $drop_location,
			'distance' => $total_distance,
            'drop_time' => new \MongoDB\BSON\UTCDateTime(strtotime($drop_time) * 1000),
            'waitingtime' => $waiting_hours,
            'company_tax' => $tax
        ];
       // print_r($set_query);exit;
        //DB::update(PASSENGERS_LOG)->set($set_query)->where('passengers_log_id', '=', $id)->execute();
        $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$id],[ '$set'=> $set_query ]);
       // print_r($result);exit;
        
    }
    //Update the Journey Status with out drop location
    public function update_journey_status($id, $msg_status, $driver_reply, $travel_status)
    {
        $set_query = [
            'msg_status' => $msg_status,
            'driver_reply' => $driver_reply,
            'travel_status' => $travel_status
        ];
        //DB::update(PASSENGERS_LOG)->set($set_query)->where('passengers_log_id', '=', $id)->execute();
		$result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$id],[ '$set'=> $set_query ],[]);
    }
    //Function used to Transactions for driver
    public function get_transaction_driver_details($company_id, $driver_id, $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
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
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $condition = "";
        if ($createdate == 0) {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "'";
        }
        $sql = "SELECT " . PASSENGERS . ".name as name," . PASSENGERS_LOG . ".current_location as pickup_location," . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".pickup_latitude as pickup_latitude," . PASSENGERS_LOG . ".pickup_longitude as pickup_longitude,
		" . PASSENGERS_LOG . ".drop_location AS drop_location," . PASSENGERS_LOG . ".drop_latitude as drop_latitude,
		" . PASSENGERS_LOG . ".drop_longitude as drop_longitude," . PASSENGERS_LOG . ".rating as rating," . TRANS . ".fare as fare,	
		" . TRANS . ".payment_status as payment_status from " . PASSENGERS_LOG . " left join " . TRANS . " 
		on  " . PASSENGERS_LOG . ".passengers_log_id = " . TRANS . ".passengers_log_id left join " . PASSENGERS . " 
		on  " . PASSENGERS_LOG . ".passengers_id = " . PASSENGERS . ".id		
		WHERE " . PASSENGERS_LOG . ".driver_id = '$driver_id' AND " . PASSENGERS_LOG . ".travel_status = '$status' AND " . PASSENGERS_LOG . ".driver_reply = '$driver_reply' $condition 
		  order by " . PASSENGERS_LOG . ".passengers_log_id desc LIMIT $start,$limit";
        //print_r($sql);
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    /*** Get Passenger Profile details with tranaction using passenger log id ***/
    public function get_transaction_passenger_log_tranaction_details($passengerlog_id = "")
    {
        $sql    = "SELECT " . PASSENGERS_LOG . ".current_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".taxi_id," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".rating, " . PEOPLE . ".name AS driver_name," . PEOPLE . ".photo AS driver_image," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name," . TRANS . ".transaction_id," . TRANS . ".payment_type," . TRANS . ".amt," . TRANS . ".payment_status," . TRANS . ".pending_reason," . TRANS . ".distance," . TRANS . ".actual_distance," . TRANS . ".tripfare," . TRANS . ".fare," . TRANS . ".company_tax," . TRANS . ".passenger_discount," . TRANS . ".account_discount," . TRANS . ".waiting_time," . TRANS . ".waiting_cost," . TRANS . ".remarks," . TRANS . ".passenger_discount," . TRANS . ".amt FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TRANS . " ON (  " . TRANS . ".`passengers_log_id` =  " . PASSENGERS_LOG . ".`passengers_log_id` ) 
WHERE  " . PASSENGERS_LOG . ".`passengers_log_id` =  '$passengerlog_id'";
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /*** Get Passenger get_trip_detail passenger log id ***/
    public function get_trip_detail($passengerlog_id = "", $passenger_id = "")
    {
		$match_query = [];
		$match_query['_id'] = (int)$passengerlog_id;
		if($passenger_id!=""){
			$match_query['passengers_id'] = (int)$passenger_id;
		}
		$arguments = [[
				'$match' => $match_query
			],
			[
				'$lookup' => [
					'from' => MDB_PASSENGERS,
					'localField' => 'passengers_id',
					'foreignField'=>'_id',
					'as'=>'passengers'
				]
			],
			[
				'$unwind' => '$passengers'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField'=>'_id',
					'as'=>'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI,
					'localField' => 'taxi_id',
					'foreignField'=>'_id',
					'as'=>'taxi'
				]
			],
			[
				'$unwind' => '$taxi'
			],
                        ['$lookup' 		=> [
                                'from'		=> MDB_MOTOR_MODEL,
                                'localField'	=> "taxi_modelid",
                                'foreignField'	=> "_id",
                                'as'		=> "model"
                                ]
                            ],
                        ['$unwind'=>'$model'],
			[
				'$lookup' => [
					'from' => MDB_TRANSACTION,
					'localField' => '_id',
					'foreignField'=>'passengers_log_id',
					'as'=>'trans'
				]
			],		
			[
				'$project' => [
					//'_id' => 0,
                    'wallet_amount' => '$used_wallet_amount',
                    'waiting_cost' => ['$ifNull'=>['$trans.waiting_cost',0]],
                    'fare' => ['$ifNull'=>['$trans.fare',0]],
					'wallet_used_amount' => ['$ifNull'=>['$trans.wallet_amount_used',0]],
                     'o_fare'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$sum'=>['$trans.fare','$trans.wallet_amount_used','$trans.add_amt']],
                             ['$sum'=>['$trans.actual_paid_amt','$trans.wallet_amount_used']]]
                        ],
					'amt' => [ '$sum'=> '$trans.amt'],
					//'actual_distance'=> array('$sum'=>'$trans.distance'),
					//'metric' => array('$sum'=>'$trans.distance_unit'),
					//'job_ref' => array('$sum'=>'$trans.job_ref'),
					//'payment_type' => array('$sum'=>'$trans.payment_type'),
					'actual_distance' => ['$cond' => [['$eq' => ['$trans.distance',[]]],0,'$trans.distance']],
					'metric' => ['$cond' => [['$eq' => ['$trans.distance_unit',[]]],0,'$trans.distance_unit']],
					'job_ref' => ['$cond' => [['$eq' => ['$trans._id',[]]],0,'$trans._id']],
					'payment_type' => ['$cond' => [['$eq' => ['$trans.payment_type',[]]],0,'$trans.payment_type']],
					'passengers_id' => '$passengers_id',
					'passengers_log_id' => '$_id',
					'current_location' => '$current_location',
					'no_passengers' => '$no_passengers',
					'pickup_time' => '$pickup_time',
					'actual_pickup_time' => '$actual_pickup_time',
					'drop_time' => '$drop_time',
					'rating' => '$rating',
					'notes_driver' => '$notes_driver',
					'travel_status' => '$travel_status',
					'driver_reply' => '$driver_reply',
					'city_id' => '$search_city',
					'pickup_location' => '$current_location',
					'pickup_latitude' => '$pickup_latitude',
					'pickup_longitude' => '$pickup_longitude',
					'drop_location' => '$drop_location',
					'drop_latitude' => '$drop_latitude',
					'drop_longitude' => '$drop_longitude',
					'taxi_modelid' => '$taxi_modelid',
					'taxi_model_name' => '$model.model_name',
                    'model_image' => '$model.model_image',
					'model_image_new' => '$model.model_image_new',
					'time_to_reach_passen' => '$time_to_reach_passen',
					'notification_status' => '$notification_status',
					'used_wallet_amount' => '$used_wallet_amount',
					'bookby' => '$bookby',
					'passenger_name' => '$passengers.name',
					'passenger_phone' => '$passengers.phone',
                    'passenger_image' => '$passengers.profile_image',
					'lateral_end_date' => '$passengers.lateral_end_date',
					'driver_name' => ['$ifNull'=>['$people.name','']],
					'driver_image' => ['$ifNull'=>['$people.profile_picture','']],
					'driver_id' => ['$ifNull'=>['$people._id','']],
					'driver_phone' => ['$ifNull'=>['$people.phone','']],
					'taxi_no' => '$taxi.taxi_no',
					'taxi_speed' => '$taxi.taxi_speed',
					'taxi_min_speed' => '$taxi.taxi_min_speed',
					'taxi_id' => '$taxi._id',
					'taxi_manufacturer' => '$taxi.taxi_manufacturer',
					'waiting_time' => '$waitingtime',
					'distance' => '$distance',
					'drop_location' => '$drop_location',
					'book_tag' => '$book_tag',
                                        'pas_pay_by' => '$passengers.pay_by',
                                        'pas_pay_lmt' => '$passengers.trip_amt_limit',
                                        'pass_id_image' => '$passengers.id_image',
					'tags'=>'$driver_tags',
                                      	'ratings'=>'$rating',

				]
			]
			
		];

		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        if(empty($result['result']))
        {
            $result  = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $arguments);    
            if(empty($result['result']))
            {
                $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_CANCELLED, $arguments);
            }   
        }   
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result) && isset($result['result']))?$result['result']:[];
    }
    public function get_trip_detail_old($passengerlog_id = "", $passenger_id = "")
    {
        $passenger_cond = "";
        if ($passenger_id != "") {
            //passenger_id params come from ios passenger app only
            $passenger_cond = " AND " . PASSENGERS_LOG . ".`passengers_id` = '$passenger_id'";
        }
        $sql    = "SELECT 
				" . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".current_location,IFNULL(" . PASSENGERS_LOG . ".drop_location,0) as drop_location ," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".actual_pickup_time," . PASSENGERS_LOG . ".drop_time," . PASSENGERS_LOG . ".rating," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".notes_driver, " . PEOPLE . ".name AS driver_name," . PEOPLE . ".profile_picture AS driver_image," . PEOPLE . ".id AS driver_id," . TAXI . ".taxi_no AS taxi_no," . TAXI . ".taxi_speed AS taxi_speed," . TAXI . ".taxi_min_speed AS taxi_min_speed," . TAXI . ".taxi_id AS taxi_id," . PASSENGERS_LOG . ".travel_status AS travel_status," . PASSENGERS_LOG . ".driver_reply AS driver_reply," . PASSENGERS_LOG . ".search_city AS city_id ," . PASSENGERS_LOG . ".current_location AS pickup_location," . PASSENGERS_LOG . ".pickup_latitude," . PASSENGERS_LOG . ".pickup_longitude," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".drop_latitude," . PASSENGERS_LOG . ".drop_longitude," . PASSENGERS_LOG . ".time_to_reach_passen," . PASSENGERS_LOG . ".notification_status," . PASSENGERS_LOG . ".used_wallet_amount," . PASSENGERS_LOG . ".bookby," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name, " . PASSENGERS . ".phone AS passenger_phone," . PASSENGERS . ".profile_image AS passenger_image,IFNULL(" . TRANS . ".id,0) as job_ref,IFNULL(" . TRANS . ".payment_type,0) as payment_type, IFNULL((" . TRANS . ".amt+" . PASSENGERS_LOG . ".used_wallet_amount),0) as amt, " . PASSENGERS_LOG . ".waitingtime as waiting_time, " . PASSENGERS_LOG . ".distance as distance, IFNULL(" . TRANS . ".distance,0) as actual_distance, IFNULL(" . TRANS . ".distance_unit,0) as metric FROM  " . PASSENGERS_LOG . " 
				JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
				JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) 
				JOIN  " . TAXI . " ON (  " . TAXI . ".`taxi_id` =  " . PASSENGERS_LOG . ".`Taxi_id` )  
				LEFT JOIN  " . TRANS . " ON ( " . PASSENGERS_LOG . ".`passengers_log_id` =  " . TRANS . ".`passengers_log_id` ) 
				WHERE  " . PASSENGERS_LOG . ".`passengers_log_id` =  '$passengerlog_id' $passenger_cond";
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    public function get_minimum_speed($taxi_id, $default_companyid)
    {
        $company_id = $default_companyid;
		if (FARE_SETTINGS == 2 && $company_id != "") {			
			$arguments = [
				['$unwind' => '$model_fare'],
				['$lookup' =>
					[
						'from' => MDB_TAXI,
						'localField' => 'model_fare.model_id',
						'foreignField' => 'taxi_model',
						'as' => 'taxi',
					]	
				],
				['$unwind' => '$taxi'],
				['$match' => ['_id' => $taxi_id,'model_fare.fare_status' => $taxi_id,'taxi._id' => $taxi_id]],
				['$project' => ['taxi_min_speed' => '$model_fare.taxi_min_speed']],
			];
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
			return (!empty($result['result'])?$result['result']:[]);					
		} else {
			$arguments = [
				['$lookup' =>
					[
						'from' => MDB_TAXI,
						'localField' => '_id',
						'foreignField' => 'taxi_model',
						'as' => 'taxi',
					]	
				],
				['$unwind' => '$taxi'],
				['$match' => ['taxi._id' => $taxi_id]],
				['$project' => ['taxi_min_speed' => '$taxi_min_speed']],
			];
			$result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
			return (!empty($result['result'])?$result['result']:[]);
		}	
    }
    /*** Get Passenger get_trip_detail passenger log id ***/
     public function get_request_detail($passenger_id = "",$trip_id)
    {
		$year = date('Y');
		$month = date('m');
		$day = date('d');
		$date = $year.'-'.$month.'-'.$day;
		$match_array = [];
		$match_array['passengers_id'] = (int)$passenger_id;
$match_array['_id'] = (int)$trip_id;
		$match_array['travel_status'] = ['$in' => [7,3,5,6,9,8,1,2]];
		//$match_array['notification_status'] = array('$ne' => array(4));
		//$match_array['yearMonthDay'] = $date;
		/*$match_array['year'] = (int)$year;
		$match_array['month'] = (int)$month;
		$match_array['day'] = (int)$day;*/
        $arguments = [['$match'=>$match_array],
			['$lookup'=>[
				'from'=>MDB_PASSENGERS,
				'localField'=>"passengers_id",
				'foreignField'=>"_id",
				 'as'=>"passengers"        
			]],
			['$unwind'=>'$passengers'],
			['$lookup'=>[
				'from'=>MDB_TAXI,
				'localField'=>"taxi_id",
				'foreignField'=>"_id",
				 'as'=>"taxi"
			]],
			['$unwind'=>'$taxi'],
			['$lookup'=>[
				'from'=>MDB_PEOPLE,
				'localField'=>"driver_id",
				'foreignField'=>"_id",
				 'as'=>"people"
			]],
			['$unwind'=>'$people'],
			['$lookup'=>[
				'from'=>MDB_TRANSACTION,
				'localField'=>"_id",
				'foreignField'=>"passengers_log_id",
				'as'=>"trans"
			]],
			['$project' =>
				[
					/*'year'=> array('$year' => '$createdate'),
					'month'=> array('$month' => '$createdate'),
					'day'=> array('$dayOfMonth' => '$createdate'),*/
					'yearMonthDay' => ['$dateToString' => ['format' => '%Y-%m-%d','date' => '$createdate']],
					'trip_id'=>'$passengers_log_id',
					'passengers_id'=>'$passengers_id',
					'current_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'no_passengers'=>'$no_passengers',
					'pickup_time'=>'$pickup_time',
					'rating'=>'$rating',
					'no_passengers'=>'$no_passengers',
					'notes_driver'=>'$notes_driver', 
					'driver_name'=>'$people.name',
					'driver_image'=>'$people.profile_picture',
					'driver_id'=>'$people._id',
                    'taxi_no'=>'$taxi.taxi_no',
                    'taxi_colour'=>'$taxi.taxi_colour',
					'taxi_manufacturer'=>'$taxi.taxi_manufacturer',
					'taxi_id'=>'$taxi._id',
					'travel_status'=>'$travel_status',
					'driver_reply'=>'$driver_reply',
					'city_id'=>'$search_city' ,
					'pickup_location'=>'$current_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_location'=>'$drop_location',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'time_to_reach_passen'=>'$time_to_reach_passen',
					'notification_status'=>'$notification_status',
					'bookby'=>'$bookby',
					'driver_phone'=>'$phone', 
					'passenger_name'=>'$name', 
					'passenger_phone'=>'$phone',
					'passenger_image'=>'$profile_image',
					'job_ref' => ['$cond' => [['$eq' => ['$trans._id',null]],0,'$trans._id']],
					'payment_type' => ['$cond' => [['$eq' => ['$trans.payment_type',null]],0,'$trans.payment_type']],
					'amt' => ['$cond' => [['$eq' => ['$trans.amt',null]],0,'$trans.amt']],
					'taxi_min_speed'=>'$taxi.taxi_min_speed',
					'actual_pickup_time'=>'$actual_pickup_time',
					'book_tag'=>'$book_tag',
					'pas_pay_by'=>'$pas_pay_by',
					'pas_pay_lmt'=>'$pas_pay_lmt',
					'app_ver'=>'$app_ver'
				]
			],
			
			['$sort'=>['_id' => -1]],
			['$skip'=>0],
			['$limit'=>1],
		];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		return (isset($result['result']))?$result['result']:[];
    }
	
    public function get_request_detail_old($passenger_id = "")
    {
        $date   = date('Y-m-d');
        $sql    = "SELECT 
				" . PASSENGERS_LOG . ".passengers_log_id as trip_id," . PASSENGERS_LOG . ".current_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".rating," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".notes_driver, " . PEOPLE . ".name AS driver_name," . PEOPLE . ".profile_picture AS driver_image," . PEOPLE . ".id AS driver_id," . TAXI . ".taxi_no AS taxi_no," . TAXI . ".taxi_id AS taxi_id," . PASSENGERS_LOG . ".travel_status AS travel_status," . PASSENGERS_LOG . ".driver_reply AS driver_reply," . PASSENGERS_LOG . ".search_city AS city_id ," . PASSENGERS_LOG . ".current_location AS pickup_location," . PASSENGERS_LOG . ".pickup_latitude," . PASSENGERS_LOG . ".pickup_longitude," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".drop_latitude," . PASSENGERS_LOG . ".drop_longitude," . PASSENGERS_LOG . ".time_to_reach_passen," . PASSENGERS_LOG . ".notification_status," . PASSENGERS_LOG . ".bookby," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name, " . PASSENGERS . ".phone AS passenger_phone," . PASSENGERS . ".profile_image AS passenger_image,IFNULL(" . TRANS . ".id,0) as job_ref,IFNULL(" . TRANS . ".payment_type,0) as payment_type, IFNULL(" . TRANS . ".amt,0) as amt FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
				JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TAXI . " ON (  " . TAXI . ".`taxi_id` =  " . PASSENGERS_LOG . ".`Taxi_id` )  LEFT JOIN  " . TRANS . " ON ( " . PASSENGERS_LOG . ".`passengers_log_id` =  " . TRANS . ".`passengers_log_id` ) 
				WHERE  " . PASSENGERS_LOG . ".`passengers_id` =  '$passenger_id' AND 
				(" . PASSENGERS_LOG . ".travel_status = '2' OR 
				" . PASSENGERS_LOG . ".travel_status='3' OR 
				" . PASSENGERS_LOG . ".travel_status='5' OR 
				" . PASSENGERS_LOG . ".travel_status='6' OR 
				" . PASSENGERS_LOG . ".travel_status='9'OR 
				" . PASSENGERS_LOG . ".travel_status='8'OR 
				" . PASSENGERS_LOG . ".travel_status='1') AND 
				" . PASSENGERS_LOG . ".`notification_status` !='4'
				AND DATE(" . PASSENGERS_LOG . ".createdate)='$date' order by trip_id desc limit 0,1";
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
    }
    /** Get passengers Current booked details for passenger with Upcoming and ongoing trip details**/
    public function get_passenger_current_log_details($company_id, $pagination, $userid = "", $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
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
			$time_arguments = [['$match'=>['_id'=>(int)$company_id]],['$unwind'=>'$companydetails'],['$project'=>['time_zone'=>'$companydetails.time_zone']]];            
            $time = $this->mongo_db->aggregate(MDB_COMPANY,$time_arguments);
			$timezone_fetch = $time['result'];
			 if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
		
		$match_array = [];
		$match_array['passengers_id'] = (int)$userid;
		$match_array['travel_status'] = ['$in' => [9,2,3]];
		$match_array['driver_reply'] = $driver_reply;
		$match_array['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
		
        $arguments = [
			['$lookup'=>[
				'from'=>MDB_PASSENGERS,
				'localField'=>"passengers_id",
				'foreignField'=>"_id",
				 'as'=>"passengers"        
			]],
			['$unwind'=>'$passengers'],
			['$lookup'=>[
				'from'=>MDB_TAXI,
				'localField'=>"taxi_id",
				'foreignField'=>"_id",
				 'as'=>"taxi"        
			]],
			['$unwind'=>'$taxi'],
			['$lookup'=>[
				'from'=>MDB_PEOPLE,
				'localField'=>"driver_id",
				'foreignField'=>"_id",
				 'as'=>"people"        
			]],
			['$unwind'=>'$people'],
			['$match'=>$match_array],
			['$project' =>
				[
					'passengers_log_id'=>'$_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'no_passengers'=>'$no_passengers',
					'pickuptime'=>'$pickup_time',
					'rating'=>'$rating',
					'driver_name'=>'$people.name',
					'driver_lastname'=>'$people.lastname',
					'driver_image'=>'$people.photo',
					'driver_id'=>'$people._id',
					'taxi_no'=>'$taxi.taxi_no',
					'taxi_id'=>'$taxi._id',
					'travel_status'=>'$travel_status',
					'city_id'=>'$search_city' ,
					'pickup_location'=>'$current_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_location'=>'$drop_location',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'time_to_reach_passen'=>'$time_to_reach_passen',
					'driver_phone'=>'$people.phone',
					'passenger_name'=>'$passengers.name',
					'passenger_lastname'=>'$passengers.lastname'
				]
			],
			['$sort' => ['passengers_log_id' => -1]],
		];
		
        if ($pagination == 1) {
			$page_field = [['$skip' => (int)$start],['$limit' => (int)$limit]];
			$arguments 	=  array_merge($arguments,$page_field);
        }
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (!empty($result['result'])?$result['result']:[]); 
    }
    /** Get passengers Cancelled trip details**/
    public function get_passenger_cancelled_trip_details($company_id, $pagination, $userid = "", $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
    {
        //echo $createdate;
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
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $condition = "";
        //if($createdate == 0){ $condition = "AND ".PASSENGERS_LOG.".pickup_time >='".$start_time."'"; }
        if ($pagination == 1) {
            $orderby = "order by " . PASSENGERS_LOG . ".passengers_log_id desc LIMIT $start,$limit";
        } else {
            $orderby = "order by " . PASSENGERS_LOG . ".passengers_log_id desc";
        }
        //passengers_log_id,passengers_id,driver_id,taxi_id,current_location,pickup_latitude,pickup_longitude,drop_location,drop_latitude,drop_longitude,pickup_time,travel_status
        $sql = "SELECT " . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".current_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".rating, " . PEOPLE . ".name AS driver_name," . PEOPLE . ".photo AS driver_image," . PEOPLE . ".id AS driver_id," . TAXI . ".taxi_no AS taxi_no," . TAXI . ".taxi_id AS taxi_id," . PASSENGERS_LOG . ".travel_status AS travel_status," . PASSENGERS_LOG . ".search_city AS city_id ," . PASSENGERS_LOG . ".current_location AS pickup_location," . PASSENGERS_LOG . ".pickup_latitude," . PASSENGERS_LOG . ".pickup_longitude," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".drop_latitude," . PASSENGERS_LOG . ".drop_longitude," . PASSENGERS_LOG . ".time_to_reach_passen," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name,IFNULL(" . TRANS . ".id,0) as job_ref,IFNULL(" . TRANS . ".payment_type,0) as payment_type, IFNULL(" . TRANS . ".amt,0) as amt FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
				JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TAXI . " ON (  " . TAXI . ".`taxi_id` =  " . PASSENGERS_LOG . ".`Taxi_id` )  LEFT JOIN  " . TRANS . " ON ( " . PASSENGERS_LOG . ".`passengers_log_id` =  " . TRANS . ".`passengers_log_id` ) 
				WHERE   passengers_id = '$userid' AND (travel_status = '4') AND driver_reply = '" . $driver_reply . "'  $condition  $orderby";
        //echo $sql;
        /*$sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=".PASSENGERS_LOG.".driver_id) as drivername  FROM ".PASSENGERS_LOG."   order by passengers_log_id desc LIMIT $start";     */
        //echo $sql;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    /** Get passengers Current booked details for passenger with Upcoming and ongoing trip details**/
    public function get_driver_current_log_details($company_id, $pagination, $userid = "", $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
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
			$time_arguments = [['$match'=>['_id'=>(int)$company_id]],['$unwind'=>'$companydetails'],['$project'=>['time_zone'=>'$companydetails.time_zone']]];            
            $time = $this->mongo_db->aggregate(MDB_COMPANY,$time_arguments);
			$timezone_fetch = $time['result'];
			 if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }

		$match_array = [];
		$match_array['driver_id'] = (int)$userid;
		$match_array['bookby'] = BOOK_BY_CONTROLLER;
		$match_array['travel_status'] = ['$in' => [9,3]];
		$match_array['driver_reply'] = '';		
		$match_array['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];

        $arguments = [
			['$lookup'=>[
				'from'=>MDB_PASSENGERS,
				'localField'=>"passengers_id",
				'foreignField'=>"_id",
				 'as'=>"passengers"
			]],
			['$unwind'=>'$passengers'],
			['$lookup'=>[
				'from'=>MDB_PEOPLE,
				'localField'=>"driver_id",
				'foreignField'=>"_id",
				 'as'=>"people"
			]],
			['$unwind'=>'$people'],
			['$lookup'=>[
				'from'=>MDB_TAXI,
				'localField'=>"taxi_id",
				'foreignField'=>"_id",
				 'as'=>"taxi"
			]],
			['$match'=>$match_array],
			['$project' =>
				[
					'passengers_log_id'=>'$_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'no_passengers'=>'$no_passengers',
					'pickup_time' => ['$cond' => [['$eq' => ['$actual_pickup_time',new \MongoDB\BSON\UTCDateTime(strtotime('1969-12-31 00:00:00') * 1000)]],'$pickup_time','$actual_pickup_time']],
					'rating'=>'$rating', 
					'driver_name'=>'$people.name',
					'driver_lastname'=>'$people.lastname',
					'driver_image'=>'$people.photo',
					'driver_id'=>'$people._id',
					'taxi_no'=>'$taxi.taxi_no',
					'taxi_id'=>'$taxi._id',
					'travel_status'=>'$travel_status',
					'city_id'=>'$search_city',
					'pickup_location'=>'$current_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_location'=>'$drop_location',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'time_to_reach_passen'=>'$time_to_reach_passen',
					'driver_phone'=>'$people.phone',
					'passenger_name'=>'$passengers.name',
					'passenger_phone'=>'$passengers.phone',
					'passenger_lastname'=>'$passengers.lastname'
				]
			],
			['$sort' => ['pickup_time' => -1]],
		];
		
        if ($pagination == 1) {
			$page_field = [['$skip' => (int)$start],['$limit' => (int)$limit]];
			$arguments 	=  array_merge($arguments,$page_field);
        }
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (!empty($result['result'])?$result['result']:[]);
	}
    
    public function get_driver_current_log_details_old($company_id, $pagination, $userid = "", $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
    {
        if ($company_id == '') {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $condition = "";
        if ($createdate == 0) {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "'";
        }
        if ($pagination == 1) {
            $orderby = "order by " . PASSENGERS_LOG . ".pickup_time asc LIMIT $start,$limit";
        } else {
            $orderby = "order by " . PASSENGERS_LOG . ".pickup_time desc";
        }
        //passengers_log_id,passengers_id,driver_id,taxi_id,current_location,pickup_latitude,pickup_longitude,drop_location,drop_latitude,drop_longitude,pickup_time,travel_status,time(".PASSENGERS_LOG.".pickup_time) as pickuptime
        $sql = "SELECT " . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".current_location as pickup_location," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".no_passengers,IF(" . PASSENGERS_LOG . ".actual_pickup_time = '0000-00-00 00:00:00'," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".actual_pickup_time) as pickuptime," . PASSENGERS_LOG . ".rating, " . PEOPLE . ".name AS driver_name," . PEOPLE . ".lastname AS driver_lastname," . PEOPLE . ".photo AS driver_image," . PEOPLE . ".id AS driver_id," . TAXI . ".taxi_no AS taxi_no," . TAXI . ".taxi_id AS taxi_id," . PASSENGERS_LOG . ".travel_status AS travel_status," . PASSENGERS_LOG . ".search_city AS city_id ," . PASSENGERS_LOG . ".current_location AS pickup_location," . PASSENGERS_LOG . ".pickup_latitude," . PASSENGERS_LOG . ".pickup_longitude," . PASSENGERS_LOG . ".drop_location," . PASSENGERS_LOG . ".drop_latitude," . PASSENGERS_LOG . ".drop_longitude," . PASSENGERS_LOG . ".time_to_reach_passen," . PEOPLE . ".phone AS driver_phone,  " . PASSENGERS . ".name AS passenger_name," . PASSENGERS . ".`phone` AS `passenger_phone`," . PASSENGERS . ".lastname AS passenger_lastname FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) JOIN  " . TAXI . " ON (  " . TAXI . ".`taxi_id` =  " . PASSENGERS_LOG . ".`Taxi_id` )  WHERE driver_id = '$userid' AND " . PASSENGERS_LOG . ".bookby = '" . BOOK_BY_CONTROLLER . "' AND (travel_status = '9' or travel_status = '3') AND driver_reply = '" . $driver_reply . "'  $condition  $orderby";
        //echo $sql;echo '<br>';
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    /*** Get Passenger Profile details using passenger log id  ***/
    public function get_passenger_log_detail($passengerlog_id = "")
    {
		
		$arguments = [['$match'=>[
							'_id'=>(int)$passengerlog_id
						]],['$lookup'=>[
							'from'=>MDB_PASSENGERS,
							'localField'=>"passengers_id",
							'foreignField'=>"_id",
							 'as'=>"passengers"        
						]],
						['$unwind'=>'$passengers'],
						['$lookup'=>[
							    'from'=>MDB_TAXI,
							    'localField'=>"taxi_id",
							    'foreignField'=>"_id",
							     'as'=>"taxi"
						]],
						['$unwind'=>'$taxi'],
						['$lookup'=>[
							'from'=>MDB_PEOPLE,
							'localField'=>"driver_id",
							'foreignField'=>"_id",
							 'as'=>"people"        
						]],
						['$unwind'=>'$people'],
						['$lookup'=>[
							'from'=>MDB_COMPANY,
							'localField'=>"company_id",
							'foreignField'=>"_id",
							 'as'=>"company"        
						]],
						['$unwind'=>'$company'],
						['$unwind'=>'$company.companyinfo'],
						['$project' => [
						
							'_id' => '$_id',
							'phone' => '$people.phone',
							'promocode' => '$promocode',
							'booking_key' => '$booking_key',
							'passengers_id' => '$passengers_id',
							'driver_id' => '$driver_id',
							'taxi_no'=>'$taxi.taxi_no',
						    	'taxi_manufacturer' => '$taxi.taxi_manufacturer',
						    	'taxi_colour' => '$taxi.taxi_colour',
						    	'taxi_id' => '$taxi._id',
							'taxi_modelid' => '$taxi_modelid',
							'company_id' => '$company_id',
							'current_location' => '$current_location',
							//'pickup_location' => '$pickup_location',
							'drop_location' => '$drop_location',
							'pickup_latitude' => '$pickup_latitude',
							'pickup_longitude' => '$pickup_longitude',
							'drop_latitude' => '$drop_latitude',
							'drop_longitude' => '$drop_longitude',
							'no_passengers' => '$no_passengers',
							'approx_distance' => '$approx_distance',
							'approx_duration' => '$approx_duration',
							'approx_fare' => '$approx_fare',
							'fixedprice' => '$fixedprice',
							'time_to_reach_passen' => '$time_to_reach_passen',
							'pickup_time' => '$pickup_time',
							'actual_pickup_time' => '$actual_pickup_time',
							'arrived_time' => '$arrived_time',
							'drop_time'=>'$drop_time',
							'account_id'=>'$account_id',
							'accgroup_id'=>'$accgroup_id',
							'airport_pickup'=>'$airport_pickup',
							'pickupdrop'=>'$pickupdrop',
							'rating'=>'$rating',
							'comments'=>'$comments',
							'travel_status'=>'$travel_status',
							'driver_reply'=>'$driver_reply',
							'msg_status' => '$msg_status',
							'createdate' => '$createdate',
							'booking_from' => '$booking_from',
							'search_city' => '$search_city',
							'sub_logid'=>'$sub_logid',
                            'bookby'=>'$bookby',
							'forceclose_status'=>'$forceclose_status',
							'booking_from_cid'=>'$booking_from_cid',
							'distance'=>['$ifNull'=>['$distance',0]],
							'notes_driver'=>'$notes_driver',
                            'wallet_amount_used'=>'$wallet_amount_used',
                            'passenger_pending_amt'=>'$passenger_pending_amt',
							'promocode'=>'$promocode',
							'driver_phone'=>'$people.phone',
							'passenger_discount'=>'$passengers.discount',
							"driver_name" => '$people.name',
							"driver_photo" => '$people.profile_picture',
							"driver_device_id" => '$people.device_id',
							"driver_device_token"  => '$people.device_token',
							"driver_device_type" => '$people.device_type',
							"passenger_discount" => '$passengers.discount',
							"passenger_device_id"=>'$passengers.device_id',
							"passenger_device_token"=>'$passengers.device_token',
							"referred_by"=>'$passengers.referred_by',
							"referrer_earned"=>'$passengers.referrer_earned',
							"passenger_device_type"=>'$passengers.device_type',
							"passenger_salutation"=>'$passengers.salutation',
							"passenger_name"=>'$passengers.name',
							"passenger_lastname"=>'$passengers.lastname',
							"passenger_email"=>'$passengers.email',
							"passenger_phone"=>'$passengers.phone',
							'payment_type'  =>  '$payment_type',
                            "passenger_parent"=>'$passengers.parent_id',
                            "lateral_start_date"=>'$passengers.lateral_start_date',
							"lateral_end_date"=>'$passengers.lateral_end_date',
							"passenger_trip_alert"=>'$passengers.trip_alert',
                            "pay_by"=>'$passengers.pay_by',
							"vip_user"=>'$passengers.vip_user',
                            "passenger_allow_creditcard"=>'$passengers.allow_creditcard',
							"passenger_wallet_amount"=>'$passengers.wallet_amount',
							"cancellation_nfree"=>'$company.companyinfo.cancellation_fare',
							"company_tax"=>'$company.companyinfo.company_tax',
							"payment_type"=>'$payment_type',
							"payment_chosen_flag"=>'$payment_chosen_flag',
"airport_type"=>'$airport_type',
							'droplocation' => ['$ifNull'=>['$drop_location',0]] 
						]],
											
					];
					
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        //print_r($result);exit;
        return (!empty($result['result'])?$result['result']:[]);
    }
    public function get_passenger_log_detail_reply($passengerlog_id = "")
    {        
        $arguments = [['$match'=>[
							'_id'=> (int)$passengerlog_id
						]],
						['$lookup'=>[
							'from'=> MDB_COMPANY,
							'localField'=>"company_id",
							'foreignField'=>"_id",
							 'as'=>"company"        
						]],
						['$unwind'=>'$company'],
						['$lookup'=>[
							'from'=> MDB_PASSENGERS,
							'localField'=>"passengers_id",
							'foreignField'=>"_id",
							 'as'=>"passengers"        
						]],
						['$unwind'=>'$passengers'],
						['$lookup'=>[
							'from'=> MDB_PEOPLE,
							'localField'=>"driver_id",
							'foreignField'=>"_id",
							 'as'=>"people"        
						]],
						['$unwind'=>'$people'],
                         ['$lookup'=>[
                            'from'=> MDB_DRIVER_INFO,
                            'localField'=>"people._id",
                            'foreignField'=>"_id",
                             'as'=>"driver_info"        
                        ]],
                        ['$unwind'=>'$driver_info'], // for geting driver lat and lang for driver r

						['$project' => [
							'phone' => '$people.phone',
							'booking_key'  =>  '$booking_key',
							'passengers_id'  =>  '$passengers_id',
							'bookedby'  =>  '$bookedby',
							'taxi_id'  =>  '$taxi_id',
							'driver_id'  =>  '$driver_id',
							'company_id'  =>  '$company_id',
							'current_location'  =>  '$current_location',
							'pickup_latitude'  =>  '$pickup_latitude',
							'pickup_longitude'  =>  '$pickup_longitude',
							'drop_location'  =>  '$drop_location',
							'drop_latitude'  =>  '$drop_latitude',
							'drop_longitude'  =>  '$drop_longitude',
							'no_passengers'  =>  '$no_passengers',
							'approx_distance'  =>  '$approx_distance',
							'approx_duration'  =>  '$approx_duration',
							'approx_fare'  =>  '$approx_fare',
							'time_to_reach_passen'  =>  '$time_to_reach_passen',
							'pickup_time'  =>  '$pickup_time',
							'actual_pickup_time'  =>  '$actual_pickup_time',
							'drop_time'  =>  '$drop_time',
							'account_id'  =>  '$account_id',
							'accgroup_id'  =>  '$accgroup_id',
							'pickupdrop'  =>  '$pickupdrop',
							'rating'  =>  '$rating',
							'comments'  =>  '$comments',
							'travel_status'  =>  '$travel_status',
							'driver_reply'  =>  '$driver_reply',
							'msg_status'  =>  '$msg_status',
							'createdate'  =>  '$createdate',
							'booking_from'  =>  '$booking_from',
							'search_city'  =>  '$search_city',
							'sub_logid'  =>  '$sub_logid',
							'passengers_log_id'  =>  '$_id',
							'payment_type'  =>  '$payment_type',
							'bookby'  =>  '$bookby',
							'booking_from_cid'  =>  '$booking_from_cid',
							'company_tax'  =>  '$company_tax',
							'distance'  =>  '$distance',
							'driver_name'  =>  '$people.name',
							'discount'  =>  '$passengers.passenger_discount',
							'profile_image'  =>  '$passengers.profile_image',
							'notes'  =>  '$notes_driver',
							'driver_phone'  =>  '$people.phone',
							'driver_photo'  =>  '$people.profile_picture',
							'driver_device_id'  =>  '$people.device_id',
							'driver_device_token'  =>  '$people.device_token',
							'driver_device_type'  =>  '$people.device_type',
							'passenger_discount'  =>  '$passengers.discount ',
							'passenger_device_id'  =>  '$passengers.device_id',
							'passenger_device_token'  =>  '$passengers.device_token',
							'referred_by'  =>  '$passengers.referred_by',
							'referrer_earned'  =>  '$passengers.referrer_earned',
							'passenger_device_type'  =>  '$passengers.device_type',
							'passenger_salutation'  =>  '$passengers.salutation', 
							'passenger_name'  =>  '$passengers.name',
							'passenger_lastname'  =>  '$passenger_lastname',
							"passenger_parent"=>'$passengers.parent_id',
							'passenger_email'  =>  '$passengers.email',
                            'passenger_phone'  =>  '$passengers.phone',
                            'dispatch_time' =>'$dispatch_time',
                            'driver_latlang' => '$driver_info.loc.coordinates',
			    'app_ver'=>'$app_ver'
				]]					
					];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (isset($result['result'])) ? $result['result']: []; 
    }
    /*** Get Passenger Profile details using passenger log id ***/
    public function get_passenger_cancel_faredetail($passengerlog_id = "")
    {
		/*
		$find = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,array('_id'=>(int)$passengerlog_id),array('search_city'));
		$find_result = (!empty($find)?$find:array());
        if (count($find_result) > 0) {
            $city_id           = $find_result['search_city'];
			$args = array(array('$unwind'=>'$stateinfo'),
						  array('$unwind'=>'$stateinfo.cityinfo'),
						  array('$match'=>array('stateinfo.cityinfo.city_id'=>(int)$city_id)),
						  array('$project'=>array('city_model_fare' => '$stateinfo.cityinfo.city_model_fare'))
						);
			$city1 = $this->mongo_db->aggregate(MDB_CSC,$args);
			$city1_result = (isset($city1['result'])?$city1['result']:'');
            if (count($city1_result) > 0) {
                $city_model_fare = $city1_result[0]['city_model_fare'];
            } 
        } else {
			//default
            $city_id = $find_result['search_city'];
			$args = array(array('$unwind'=>'$stateinfo'),
						  array('$unwind'=>'$stateinfo.cityinfo'),
						  array('$match'=>
								array('default'=> 1,
									  'stateinfo.default'=> 1,
									  'stateinfo.cityinfo.default'=> 1)),
						  array('$project'=>array('city_model_fare' => '$stateinfo.cityinfo.city_model_fare'))
						);
			$city1 = $this->mongo_db->aggregate(MDB_CSC,$args);
			$city1_result = (isset($city1['result'])?$city1['result']:'');
            if (count($city1_result) > 0) {
                $city_model_fare = $city1_result['city_model_fare'];
            }
        }
		*/
		$args = [
					['$lookup'=>['from' => MDB_TAXI,
								  'localField' => 'taxi_id',
								  'foreignField' => '_id',
								  'as' => 'taxi']],
					['$unwind' => '$taxi'],
					['$lookup'=>['from' => MDB_MOTOR_MODEL,
								  'localField' => 'taxi.taxi_model',
								  'foreignField' => '_id',
								  'as' => 'mm']],
					['$unwind' => '$mm'],
					['$match' => ['_id' => (int)$passengerlog_id]],
					['$project'=>
								['Passenger_log_id' => '$_id','cancellation_fare' => '$mm.cancellation_fare']]					  
				];
		$res = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		return (isset($result[0]['cancellation_fare'])?$result[0]['cancellation_fare']:0);
    }
    
    public function get_passenger_cancel_faredetail_old($passengerlog_id = "")
    {
        $model_base_query = "select search_city from " . PASSENGERS_LOG . " where passengers_log_id=" . $passengerlog_id;
        $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_id           = $model_fetch[0]['search_city'];
            $model_base1_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_id=" . $city_id;
            $model_fetch1      = Db::query(Database::SELECT, $model_base1_query)->execute()->as_array();
            if (count($model_fetch1) > 0) {
                $city_model_fare = $model_fetch1[0]['city_model_fare'];
            } else {
                $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
                $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
                $city_model_fare  = $model_fetch[0]['city_model_fare'];
            }
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            $city_model_fare  = $model_fetch[0]['city_model_fare'];
        }
        $sql    = "select (SUM(model.cancellation_fare)*($city_model_fare)/100) + model.cancellation_fare as cancellation_fare FROM " . PASSENGERS_LOG . " AS pg JOIN " . TAXI . " as taxi ON pg.`taxi_id`=taxi.`taxi_id` JOIN " . MOTORMODEL . " as model ON model.`model_id`=taxi.`taxi_model` where pg.passengers_log_id='$passengerlog_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result[0]['cancellation_fare'];
    }
    /*** Get Passenger Profile details using passenger log id ***/
      public function get_passenger_cancel_farebyid($passenger_id = "")
    {
		$match = ['passengers_id' => (int)$passenger_id,
					   'travel_status' => ['$in' => [2,3]]
					   ];
		$search  = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,['search_city']);
		$search_city = (!empty($search)) ? $search['search_city'] : 0;
		if ($search_city != 0) {
			$city_arg = [['$unwind'=>'$stateinfo'],
						['$unwind'=>'$stateinfo.cityinfo'],
						['$match'=>[
							'stateinfo.cityinfo.city_id' => (int)$search_city
						]],
						['$project'=>[
							'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
						]]
					];
        }else{
			$city_arg = [['$unwind'=>'$stateinfo'],
						['$unwind'=>'$stateinfo.cityinfo'],
						['$match'=>[
							'stateinfo.cityinfo.default' => 1
						]],
						['$project'=>[
							'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
						]]
					];
        }  
        //$city_model_fare=1;
        $model_base_query = $this->mongo_db->aggregate(MDB_CSC,$city_arg);
        $result_fare = (!empty($model_base_query['result'])?$model_base_query['result']:[]);        
        $city_model_fare = (!empty($result_fare[0]['city_model_fare']) ? $result_fare[0]['city_model_fare'] : 0);
		$args = [
					['$lookup' =>['from' => MDB_TAXI,
										  'localField' => 'taxi_id',
										  'foreignField' => '_id',
										  'as' => 'taxi']],
					['$unwind' => '$taxi'],
					['$lookup' =>['from' => MDB_MOTOR_MODEL,
										  'localField' => 'taxi.taxi_model',
										  'foreignField' => '_id',
										  'as' => 'model']],
					['$unwind' => '$model'],
					['$match' => $match],
					['$project' => ['cancellation_fare' =>['$add' => ['$model.cancellation_fare',
																	['$divide' => [$city_model_fare,100]]]]]],
					['$sort' => ['_id' => -1]]					  
				];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		return (!empty($result['result']) ? $result['result'][0]['cancellation_fare'] : 0);
    }
    public function get_passenger_cancel_farebyid_old($passenger_id = "")
    {
        $model_base_query = "select search_city from " . PASSENGERS_LOG . " where passengers_id=" . $passenger_id . " AND (travel_status = 2 or travel_status = 3) order by passengers_log_id desc limit 0,1";
        $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_id           = $model_fetch[0]['search_city'];
            $model_base1_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_id=" . $city_id;
            $model_fetch1      = Db::query(Database::SELECT, $model_base1_query)->execute()->as_array();
            if (count($model_fetch1) > 0) {
                $city_model_fare = $model_fetch1[0]['city_model_fare'];
            } else {
                $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
                $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
                $city_model_fare  = $model_fetch[0]['city_model_fare'];
            }
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            $city_model_fare  = $model_fetch[0]['city_model_fare'];
        }
        $sql    = "select (SUM(model.cancellation_fare)*($city_model_fare)/100) + model.cancellation_fare as cancellation_fare FROM " . PASSENGERS_LOG . " AS pg JOIN " . TAXI . " as taxi ON pg.`taxi_id`=taxi.`taxi_id` JOIN " . MOTORMODEL . " as model ON model.`model_id`=taxi.`taxi_model` where pg.passengers_id='$passenger_id' AND (travel_status = 2 or travel_status = 3) order by passengers_log_id desc limit 0,1";
        
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return (count($result) > 0) ? $result[0]['cancellation_fare'] : 0;
    }
    /*** Get Passenger Profile details using Driver id ***/
    public function get_driver_log_details($driver_id = "", $company_id)
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
            /*$model_base_query = "select time_zone from  company where cid='$company_id' ";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();*/
            $res = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            $model_fetch = iterator_to_array($res);
            $result = reset($model_fetch);
            //print_r($model_fetch);exit;
            if ($result['companydetails']['time_zone'] != '') {
                $current_time = convert_timezone('now', $result['companydetails']['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        /*$company_condition = "";
        if ($company_id != "") {
            $company_condition = " AND " . PASSENGERS_LOG . ".company_id = '$company_id'";
        }
        $sql    = "SELECT " . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".travel_status FROM  " . PASSENGERS_LOG . " WHERE  " . PASSENGERS_LOG . ".`driver_id` =  '$driver_id' and " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "' $company_condition and (travel_status = '9' OR travel_status = '5' OR travel_status='3' OR travel_status='2') and driver_reply = 'A' ORDER BY " . PASSENGERS_LOG . ".passengers_log_id DESC LIMIT 0 , 1 ";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;*/    
        //,"\$or"=>array( 'travel_status' => 5,'travel_status' => 1, 'travel_status' => 3) 
		if ($company_id != "") {			
			$condition =  [ "\$and" => [["driver_id" => (int)$driver_id],["driver_reply" => "A"],["pickup_time" => [	'$gte'=>$start_time]],["company_id"=>(int)$company_id],["\$or"=>[['travel_status' => 5] , ['travel_status' => 5],[ 'travel_status' => 5]]]
			]];
		} else {
			$condition =  [ "\$and" => [["driver_id" => (int)$driver_id],["driver_reply" => "A"],["pickup_time" => [	'$gte'=>$start_time]],["company_id"=>(int)$company_id],["\$or"=>[['travel_status' => 5] , ['travel_status' => 5],[ 'travel_status' => 5]]]
			]];
		}
		$result = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$condition,['_id','travel_status']);
		$res = iterator_to_array($result);
        return (!empty($res)?$res:[]);        
    }
      public function update_driver_status($status, $driverid)
    {
        $update_array = [
            "status" => $status
        ];		
		$result = $this->mongo_db->update(MDB_DRIVER_INFO,['_id'=>(int)$driverid],['$set'=>$update_array],['upsert'=>false]);
		return (empty($result['err']))?1:0;
	
    }
    
    public function update_driver_status_old($status, $driverid)
    {
        $update_array = [
            "status" => $status
        ];
        return $result = DB::update(DRIVER)->set($update_array)->where('driver_id', '=', $driverid)->execute();
    }
    // Update Driver Shift Status
    public function update_driver_shift_status($id, $shift_status, $stat = null)
    {
        
       
        $set_query    = [
            'shift_status' => $shift_status,
            'status' => 'F'
        ];
        //print_r($sql_query);
        /*$updatequery  = " UPDATE " . DRIVER . " SET shift_status='$shift_status',status='F' where driver_id = '$id'";
        $updateresult = Db::query(Database::UPDATE, $updatequery)->execute();
        return $updateresult;*/
        $result = $this->mongo_db->update(MDB_DRIVER_INFO,['_id' => (int)$id],['$set' => $set_query],['upsert'=>false]);
        return (empty($result['err']))?1:0;
    }
    // Update Driver Sattus
    //Set Driver Status in Active in DRIVER Table
    // Get City Name
     public function get_city_id($cityname)
    {
		$city_id     = "";
		$arguments = [['$unwind'=>'$stateinfo'],
							['$unwind'=>'$stateinfo.cityinfo'],
							['$match'=>['stateinfo.cityinfo.city_name' =>  new \MongoDB\BSON\Regex($cityname, 'i')]],
							['$project'=>['city_id'=>'$stateinfo.cityinfo.city_id']],
							['$limit' => 1]
					];		
		$city_query = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		$city = (!empty($city_query['result']))?$city_query['result']:[];
        if (count($city) > 0) {
            $city_id = $city[0]['city_id'];
        } else {
            $arguments = [['$unwind'=>'$stateinfo'],
							   ['$unwind'=>'$stateinfo.cityinfo'],
								['$match'=>[
													  'default'=>1,
													  'stateinfo.default'=>1,
													  'stateinfo.cityinfo.default'=>1
												 ]],
								 ['$project'=>['city_id'=>'$stateinfo.cityinfo.city_id']]
						];
			$city_query = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			$city = (!empty($city_query['result'])?$city_query['result']:[]);
			$city_id = $city[0]['city_id'];
        }
        return $city_id;
    }
    public function get_city_id_old($cityname)
    {
        $city_id     = "";
        $model_query = "select city_id from " . CITY . " where city_name like '%" . $cityname . "%' limit 0,1";
        $model_fetch = Db::query(Database::SELECT, $model_query)->execute()->as_array();
        if (count($model_fetch) > 0) {
            $city_id = $model_fetch[0]['city_id'];
        } else {
            $model_query = "select city_id from " . CITY . " where city.default='1' limit 0,1";
            $model_fetch = Db::query(Database::SELECT, $model_query)->execute()->as_array();
            $city_id     = $model_fetch[0]['city_id'];
        }
        return $city_id;
    }
    public function get_passenger_details_phone($array, $company_id)
    {
		$match_query = [];
		$match_query['phone'] = $array['phone_no'];
		if ($array['user_type'] == 'P') {
			if($company_id!="" && $company_id !=0){
				$match_query['passenger_cid'] = (int)$company_id;
			}
			$project = ['_id' => 0,'email' =>'$email','name'=>'$name','activation_key'=>'$activation_key','phone'=>'$phone'];
			$table = MDB_PASSENGERS;
		}else{
			$match_query['driver_code'] = $array['driver_code'];
			$project = ['_id' => 0,'email' =>'$email','name'=>'$name'];
			$table = MDB_PEOPLE;
		}
		$result = $this->mongo_db->find($table,$match_query,$project);
		
		$res = iterator_to_array($result);
	//print_r($res);exit;
		return (!empty($res))?$res:[];
    }
    public function get_passenger_details_phone_old($array, $company_id)
    {
        if ($array['user_type'] == 'P') {
            if ($company_id != '') {
                $sql = "SELECT email,name,activation_key,phone FROM " . PASSENGERS . " WHERE phone = '" . $array['phone_no'] . "' and country_code = '" . $array['country_code'] . "' and passenger_cid='" . $company_id . "'";
            } else {
                $sql = "SELECT email,name,activation_key,phone FROM " . PASSENGERS . " WHERE phone = '" . $array['phone_no'] . "' and country_code = '" . $array['country_code'] . "'";
            }
            //$sql = "SELECT * FROM ".PASSENGERS." WHERE phone = '".$array['phone_no']."' "; 
            //echo $sql;exit;
            return Db::query(Database::SELECT, $sql)->execute()->as_array();
        } else {
            $sql = "SELECT email,name FROM " . PEOPLE . " WHERE phone = '" . $array['phone_no'] . "'  and user_type='D'";
            return Db::query(Database::SELECT, $sql)->execute()->as_array();
        }
    }
     public function get_sublogid($log_id)
    {
		$res = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['_id'=>(int)$log_id],['sub_logid']);
        $result = (!empty($res)?$res:[]);
		return (isset($result['sub_logid'])?$result['sub_logid']:0);
    }
    public function get_sublogid_old($log_id)
    {
        $sql    = "select sub_logid from " . PASSENGERS_LOG . " where passengers_log_id='$log_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['sub_logid'];
        } else {
            return '0';
        }
    }
    public function update_passengers($update_array, $update_id, $default_companyid)
    {
        if ($default_companyid != '') {
            $result = DB::update(PASSENGERS)->set($update_array)->where('id', "=", $update_id)->where('passenger_cid', '=', $default_companyid)->execute();
        } else {
            $result = DB::update(PASSENGERS)->set($update_array)->where('id', "=", $update_id)->where('passenger_cid', '=', '0')->execute();
        }
        //$result=DB::update(PASSENGERS)->set($update_array)->where('id',"=",$update_id)->execute();
        return $result;
    }
    public function update_passengers_phone($update_array, $phone, $default_companyid)
    {
        //$result=DB::update(PASSENGERS)->set($update_array)->where('phone',"=",$phone)->where('passenger_cid','=',$default_companyid)->execute();
        $result = DB::update(PASSENGERS)->set($update_array)->where('phone', "=", $phone)->execute();
        return $result;
    }
    public function update_driver_phone($update_array, $id, $default_companyid)
    {
        if ($default_companyid != '') {
			
            //$result = DB::update(PEOPLE)->set($update_array)->where('id', "=", $id)->where('company_id', '=', $default_companyid)->execute();
            $update = $this->mongo_db->Update(MDB_PEOPLE,['_id' => (int)$id,'company_id' => (int)$default_companyid],['$set'=>$update_array]);
        } else {
            //$result = DB::update(PEOPLE)->set($update_array)->where('id', "=", $id)->execute();
            $update = $this->mongo_db->Update(MDB_PEOPLE,['_id' => (int)$id],['$set'=>$update_array]);
        }
        return count($update);
    }
    //Get Driver Current Status if he is break,Avtive,Free
    public function get_driver_current_status($id, $company_id = '')
    {
        /*$result = DB::select('status', 'latitude', 'longitude')->from(DRIVER)->where(DRIVER . '.driver_id', '=', $id)->order_by('id', 'ASC')->as_object()->execute();
        //print_r($result);              
        return $result;*/
		$res = $this->mongo_db->find(MDB_DRIVER_INFO,['_id'=>(int)$id],['status', 'loc.coordinates','bearing','accuracy'])->sort(['_id'=>1]);
		$result = iterator_to_array($res);
		return (isset($result)? reset($result) :[]);  
    }
    public function get_driver_list($id)
    {
        $result = DB::select(PEOPLE . '.id', PEOPLE . '.salutation', PEOPLE . '.name', DRIVER . '.latitude', DRIVER . '.longitude')->from(PEOPLE)->join(DRIVER)->on(PEOPLE . '.id', '=', DRIVER . '.driver_id')->where(PEOPLE . '.user_type', '=', 'D')->where(PEOPLE . '.login_status', '=', 'S') //
            ->where(PEOPLE . '.status', '=', 'A')->where(DRIVER . '.status', '!=', 'A')->where(DRIVER . '.shift_status', '=', 'IN')->order_by(DRIVER . '.driver_id', 'desc')->as_object()->execute();
        //print_r($result);              
        return $result;
    }
    public function getTaxiforDriver($id, $company_id = '')
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
            /*$timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();*/
            $result = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            $model_fetch = iterator_to_array($result);
            $timezone_fetch = reset($model_fetch);
            if ($timezone_fetch['companydetails']['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch['companydetails']['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $company_condition = '';
        if ($company_id != '') {
            $company_condition = " and mapping_companyid='$company_id'";
        }
        /*$query  = "select mapping_taxiid from " . TAXIMAPPING . " where mapping_status='A' and mapping_driverid='" . $id . "' $company_condition AND mapping_startdate <='$current_time' and mapping_enddate >= '$current_time' order by mapping_startdate DESC";
		$result = Db::query(Database::SELECT, $query)->execute()->as_array();*/
        $match = ["mapping_driverid" => (int)$id,
						//'mapping_startdate'=>array('$lte'=>$current_time),
						//'mapping_enddate'=>array('$gte'=>$current_time),
						"mapping_status" => 'A',
						'mapping_companyid'=>(int)$company_id];						
        $result = $this->mongo_db->find(MDB_TAXI_DRIVER_MAPPING,$match,['mapping_taxiid']);    
            
        $res = iterator_to_array($result);
        return (!empty($res) ? reset($res): []);
    }
     public function get_assignedtaxi_list($driver_id = '', $company_id = '')
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
			$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            if (!empty($result)) {
				$time_zone = (isset($result['companydetails']['time_zone'])?$result['companydetails']['time_zone']:"");
                $current_time = convert_timezone('now', $time_zone);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
		//$start_time   = '2015-04-20 00:00:01';
		//$end_time     = '2015-04-20 23:59:59';
		$match = ['mapping_driverid'=>(int)$driver_id,
						//'mapping_startdate'=>array('$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)),
						//'mapping_enddate'=>array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000))
						];
		if ($company_id != '' && $company_id != 0) {
            $match['mapping_companyid'] = (int)$company_id;
        }
		$args = [
					['$lookup' => ['from' => MDB_TAXI,
											'localField' => 'mapping_taxiid',
											'foreignField' => '_id',
											'as' => 'taxi']],
					['$lookup' => ['from' => MDB_COMPANY,
											'localField' => 'mapping_companyid',
											'foreignField' => '_id',
											'as' => 'companyinfo']],
					['$lookup' => ['from' => MDB_PEOPLE,
											'localField' => 'mapping_driverid',
											'foreignField' => '_id',
											'as' => 'people']],
					['$lookup' => ['from' => MDB_CSC,
											'localField' => 'mapping_countryid',
											'foreignField' => '_id',
											'localField' => 'mapping_stateid',
											'foreignField' => 'stateinfo.state_id',
											'localField' => 'mapping_cityid',
											'foreignField' => 'stateinfo.cityinfo.city_id',
											'as' => 'csc']],
					['$sort'=>['mapping_startdate'=>1]],
					['$match'=>$match],
					['$project' => ['mapping_taxiid' => '$_id']]
				];
		$result = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING,$args);
		return (!empty($result['result'])) ? $result['result'] : []; 
    }
    public function get_assignedtaxi_list_old($driver_id = '', $company_id = '')
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
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $company_condition = '';
        if ($company_id != '') {
            $company_condition = " and mapping_companyid='$company_id'";
        }
        $query  = " select taxi_id from " . TAXIMAPPING . " 
		left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id 
		left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid 
		left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id 
		left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id 
		left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  
		left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id 
		where mapping_driverid='$driver_id' $company_condition 
		AND mapping_startdate <=  '" . $end_time . "' 
		AND mapping_enddate >= '" . $start_time . "'  order by mapping_startdate ASC";
        //AND mapping_startdate <=  '".$end_time."' AND mapping_enddate >= '".$start_time."' 
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //Get Company Current Package Details
    public function current_package_details($cid)
    {
        $array  = [];
        $query  = "SELECT people.id ,(select upgrade_packageid from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_packageid,
		(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,
		(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( check_package_type = 'T' or upgrade_expirydate >=now() )";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            $package_query  = "select driver_tracking from package where package_id = " . $result[0]['upgrade_packageid'];
            $package_result = Db::query(Database::SELECT, $package_query)->execute()->as_array();
            return $package_result;
        } else {
            return $array;
        }
    }
    public function get_driver_bylocation($lat, $long, $distance = NULL, $no_passengers, $bookingtime, $company_id = '')
    {
        $assigned_driver = $this->free_availabletaxi_list($no_passengers, $bookingtime);
        //$this->currentdate = Commonfunction::getCurrentTimeStamp();
        $driver_list     = '';
        $driver_count    = '';
        foreach ($assigned_driver as $key => $value) {
            $driver_count = 1;
            $driver_list .= "'" . $value['id'] . "',";
        }
        if ($driver_count > 0) {
            $driver_list = substr_replace($driver_list, "", -1);
        } else {
            $driver_list = "''";
        }
        $query       = " DROP FUNCTION IF EXISTS CONV_MI_KM";
        $find_result = Database::instance()->query(NULL, $query);
        $query       = "CREATE FUNCTION CONV_MI_KM (measurement INT,  base_type ENUM('m','k')) RETURNS FLOAT(65,4) DETERMINISTIC RETURN IF(base_type = 'm', measurement * 1.609344, IF(base_type = 'k', measurement * 0.62137, NULL))";
        Database::instance()->query(NULL, $query);
        if (isset($_SESSION['search_city'])) {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_name like '%" . $_SESSION['search_city'] . "%'  limit 0,1";
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
        }
        $model_fetch     = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
        $city_model_fare = $model_fetch[0]['city_model_fare'];
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
            $model_base_query = "select time_zone from  company where cid='$company_id' ";
            $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            if ($model_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $model_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        $query  = "select list.name as name,list.driver_id as driver_id,list.phone as phone,list.id as id,list.latitude as latitude,list.longitude as longitude,list.status as status,list.distance as distance,(SELECT CONV_MI_KM(list.distance,'m')) as distance_km,comp.company_name as company_name,taxi.taxi_no as taxi_no,taxi.taxi_fare_km as taxi_fare,taxi.taxi_image as taxi_image,taxi.taxi_capacity as taxi_capacity,taxi.taxi_id as taxi_id from ( SELECT people.name,people.phone,driver.*,(((acos(sin((" . $lat . "*pi()/180)) * sin((driver.latitude*pi()/180))+cos((" . $lat . "*pi()/180)) *  cos((driver.latitude*pi()/180)) * cos(((" . $long . "- driver.longitude)* pi()/180))))*180/pi())*60*1.1515) AS distance FROM " . DRIVER . " AS driver JOIN " . PEOPLE . " AS people ON driver.driver_id=people.id  where driver.status='F' and driver_id IN ($driver_list) order by distance ) as list JOIN " . TAXIMAPPING . " as tmap ON list.`driver_id`=tmap.`mapping_driverid` JOIN " . TAXI . " as taxi ON tmap.`mapping_taxiid`=taxi.`taxi_id` JOIN " . COMPANY . " AS comp ON tmap.`mapping_companyid`=comp.`cid` WHERE tmap.mapping_startdate <='$current_time' AND  tmap.mapping_enddate >='$current_time' AND tmap.`mapping_status`='A'  group by list.driver_id";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    //Driver logs for rejected trips used in Statistics
    //Function used to find the completed logs
    public function get_driver_logs_completed($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id)
    {
        if ($company_id != '') {
            $result = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')
            //->join(PEOPLE)->on(PASSENGERS_LOG.'.driver_id','=',PEOPLE.'.id')
                ->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->where(PASSENGERS_LOG . '.company_id', '=', $company_id)->as_object()->execute();
            //print_r($result);           
            return $result;
        } else {
            $result = DB::select('*')->from(PASSENGERS_LOG)->join(PASSENGERS)->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')
            //->join(PEOPLE)->on(PASSENGERS_LOG.'.driver_id','=',PEOPLE.'.id')
                ->where(PASSENGERS_LOG . '.driver_id', '=', $id)->where(PASSENGERS_LOG . '.msg_status', '=', $msg_status)->where(PASSENGERS_LOG . '.driver_reply', '=', $driver_reply)->order_by(PASSENGERS_LOG . '.passengers_log_id', 'desc')->where(PASSENGERS_LOG . '.travel_status', '=', $travel_status)->as_object()->execute();
            //print_r($result);           
            return $result;
        }
    }
    //Function used to get total driven details
    public function get_time_driven($id, $msg_status, $driver_reply = null, $travel_status = null,$flag)
    {
		//$flag 1 - time driver, 2-waiting time
        $date         = date("Y-m-d");
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $current_date[0] . ' 00:00:01';
        $end_time     = $current_date[0] . ' 23:59:59';
        //$start_time = '2014-01-09 00:00:01';
        //$end_time = '2014-01-09 23:59:59';
		$arguments = [
				['$match'=>[
					'createdate'=>['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),
										'$lte'=> new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)],
					'driver_id'=>(int)$id,
					'msg_status'=> $msg_status,
					'driver_reply'=> $driver_reply,
					"travel_status"=> (int)$travel_status
				]],
				['$lookup'=>[
					'from'=>MDB_PASSENGERS,
					'localField'=>"passengers_id",
					'foreignField'=>"_id",
					'as'=>"passengers"]],
				['$unwind'=>'$passengers'],
				['$sort' => ["_id"=>-1]],
				['$project'=>[
					'actual_pickup_time'=>'$actual_pickup_time',
					'drop_time'=>'$drop_time',
					'waitingtime'=>'$waitingtime'
				]]
		];
        $res = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        $result = $res['result'];
        //print_r($result);exit;
        if (count($result) > 0) {
			//    print_r($result);exit;
            $actual_pickup_time = '';
            $drop_time          = '';
            $hours              = '';
            $minutes            = '';
            $seconds            = '';
            $date_difference    = "";
            $total_differnce    = "";
            foreach ($result as $get_details) {
                 $actual_pickup_time = strtotime((isset($get_details['actual_pickup_time'])?commonfunction::convertphpdate('Y-m-d H:i:s',$get_details['actual_pickup_time']):''));
                 $drop_time          = strtotime((isset($get_details['drop_time'])?commonfunction::convertphpdate('Y-m-d H:i:s',$get_details['drop_time']):''));
                 $waitingtime          = strtotime((isset($get_details['waitingtime'])?commonfunction::convertphpdate('Y-m-d H:i:s',$get_details['waitingtime']):''));
				if($flag == 1){
                $date_difference    = abs($drop_time - $actual_pickup_time);
                $total_differnce += $date_difference;
			}else {
				$total_differnce += $waitingtime;
			}
            }
            //echo $total_differnce;exit;
            //$date_difference = $drop_time - $actual_pickup_time;
            $hours += floor((($total_differnce % 604800) % 86400) / 3600);
            $minutes += floor(((($total_differnce % 604800) % 86400) % 3600) / 60);
            $seconds += floor((((($total_differnce % 604800) % 86400) % 3600) % 60));
            $time_result = $minutes . ':' . $seconds;
        } else {
            $time_result = "00:00";
        }
        return $time_result;
    }
      public function api_companystatus($user_id)
    {
		$args = [['$lookup' => ['from' => MDB_COMPANY,
											   'localField' => 'company_id',
											   'foreignField' => '_id',
											   'as' => 'company']],
					  ['$unwind' => '$company'],
					  ['$unwind' => '$company.companydetails'],
					  ['$match' => ['_id' => (int)$user_id]],
					  ['$project' => ['company_status' => '$company.companydetails.company_status']]
					];
		$check = $this->mongo_db->aggregate(MDB_PEOPLE,$args);
		$result = (!empty($check['result'])) ? $check['result'] : [];
		if(count($result)>0){
			return $result[0]['company_status'];
		}else{
			return 'A';
		}
    }
    /************************ TDispatch **************************/
    public function get_account_discount($aid)
    {
        //$user_createdby = $_SESSION['userid'];
        //select * from " . PASSENGERS . " where FIND_IN_SET (id,'$passenger_id') order by name asc
        $sql    = " SELECT " . TBLGROUPACCOUNT . ".limit," . TBLGROUPACCOUNT . ".discount," . TBLGROUPACCOUNT . ".passid FROM " . TBLGROUPACCOUNT . " LEFT JOIN " . PASSENGERS . " ON (" . TBLGROUPACCOUNT . ".passid = " . PASSENGERS . ".id) WHERE `aid` = '$aid' and " . TBLGROUPACCOUNT . ".status=1";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r($result);
        return $result;
    }
    public function get_groupdetails($groupid)
    {
        ///$user_query = " select * from " . TBLGROUP . " where FIND_IN_SET ('$check_passid',passenger_id) and gid='$groupid'";
        $user_query  = " select " . TBLGROUP . ".limit,passenger_id from " . TBLGROUP . " where gid='$groupid' and status = '1'";
        $user_result = Db::query(Database::SELECT, $user_query)->execute()->as_array();
        return $user_result;
    }
    public function check_used_limit($passengers_id)
    {
        $sql         = "SELECT sum(" . TRANS . ".credits_used) as total_used_limit FROM  " . PASSENGERS_LOG . " JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
			JOIN  " . TRANS . " ON (  " . TRANS . ".`passengers_log_id` =  " . PASSENGERS_LOG . ".`passengers_log_id` ) 
			WHERE  " . PASSENGERS_LOG . ".`passengers_id` =  '$passengers_id'";
        $user_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $user_result;
    }
    public function company_paypal_details($cid)
    {
        $sql    = "SELECT company_paypal_username,company_paypal_password,company_paypal_signature,company_currency_format,payment_method FROM " . COMPANYINFO . " WHERE company_cid = '$cid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    /******************** Get default payment gateway of Specific company *********************/
    public function company_payment_details($cid)
    {
        $sql    = "SELECT pg.payment_gateway_id as payment_type,pg.paypal_api_username as payment_gateway_username,pg.paypal_api_password as payment_gateway_password,pg.paypal_api_signature as payment_gateway_key,ci.company_currency_format as gateway_currency_format,pg.payment_method as payment_method FROM " . PAYMENT_GATEWAYS . " as pg join " . COMPANYINFO . " as ci on pg.company_id=ci.company_cid WHERE pg.company_id = '$cid' and pg.default_payment_gateway=1";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    /******************** Get default payment gateway of Specific company *********************/
    public function payment_gateway_details()
    {
        $sql    = "SELECT payment_gateway_id as payment_type,paypal_api_username as payment_gateway_username,paypal_api_password as payment_gateway_password,paypal_api_signature as payment_gateway_key,currency_code as gateway_currency_format,payment_method as payment_method FROM " . PAYMENT_GATEWAYS . "  WHERE company_id = '0' and default_payment_gateway=1";

        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    /** Get Payment gateway details by payment type **/
    public function payment_gateway_bytype($paymentType = "")
	{
		$match = ['payment_gateway_id' => (int)$paymentType, 'company_id' => 0];
		$project = ['payment_type' => '$payment_gateway_id',
						 'payment_gateway_username' => '$paypal_api_username',
						 'payment_gateway_password' => '$paypal_api_password',
						 'payment_gateway_key' => '$paypal_api_signature',
						 'gateway_currency_format' => '$currency_code',
						 'payment_method' => '$payment_method'];
		$args = [['$match' => $match],
					['$project' => $project]];
		$res = $this->mongo_db->find_one(MDB_PAYMENT_GATEWAYS,$args);
		return (!empty($res) ? $res : []);
	}

    /**************************** Customer enhancement - Edited Senthil *************************/
    /**Passenger Signup**/
    public function add_p_account_details($val, $otp = null, $referral_code = "", $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = "")
    {
        //$username = Html::chars($val['name']);
        $password       = text::random($type = 'alnum', $length = 6);
       
        $common_model   = Model::factory('commonmodel');
        $activation_key = Commonfunction::admin_random_user_password_generator();
        $company_id=1;
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        /*$current_time = convert_timezone('now',TIMEZONE);
        $current_date = explode(' ',$current_time);
        $start_time = $current_date[0].' 00:00:01';
        $end_time = $current_date[0].' 23:59:59';*/
        //$referral_code = text::random($type = 'alnum', $length = 6);
        /** Referrral key generator **/
        $referralcode_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1)) as referral_code from passengers Having NOT EXISTS (select referral_code from passengers having referral_code=referral_code) limit 1";
        
        //echo $referralcode_query;exit;
        $referralcode_result = Db::query(Database::SELECT, $referralcode_query)->execute()->as_array();
        if (count($referralcode_result) > 0) {
            $referral_code = $referralcode_result[0]['referral_code'];
        } else {
            $referralcode_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1)) as referral_code";
            $referralcode_result = Db::query(Database::SELECT, $referralcode_query)->execute()->as_array();
            $referral_code       = $referralcode_result[0]['referral_code'];
        }
        /** Referrral key generator **/
        $fieldname_array = [
            'name',
            'email',
            'password',
            'org_password',
            'otp',
            'phone',
            'address',
            'referral_code',
            'activation_key',
            'activation_status',
            'user_status',
            'created_date',
            'updated_date',
            'passenger_cid'
        ];
        $values_array    = [
            '',
            $val['email'],
            md5($val['password']),
            $val['password'],
            $otp,
            $val['phone'],
            '',
            $referral_code,
            '',
            '0',
            'I',
            $current_time,
            $current_time,
            $company_id
        ];
        $result          = DB::insert(PASSENGERS, $fieldname_array)->values($values_array)->execute();
        if ($result) {
            $email = DB::select()->from(PASSENGERS)->where('email', '=', $val['email'])->execute()->as_array();
            if ($devicetoken != "") {
                $update_array               = [
                    "device_token" => $devicetoken,
                    "device_id" => $deviceid,
                    "device_type" => $devicetype
                ];
                $update_device_token_result = DB::update(PASSENGERS)->set($update_array)->where('email', '=', $val['email'])->execute();
            }
            return 1;
        } else {
            return 0;
        }
    }
	
	public function add_passenger($val, $otp = null, $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = "")
    {		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_first_key = key($pass_rs);
		$pass_id = $pass_first_key + 1;
		$password       = text::random($type = 'alnum', $length = 6);   
        $common_model   = Model::factory('commonmodel');
        $company_id=1;
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
		        
		$child_passenger = [
			'_id'=>$pass_id,
			'parent_id' => 0,
			'account_type' => '',					 
			'salutation' => '',
			'name' => '',
			'lastname' => '',			
			'email' => '',			
			'password' => md5($password),
			'org_password' => $password,
			'profile_image' => '',
			'otp' => $otp,
			'country_code' => isset($val['country_code'])?$val['country_code']:'+965',
			'address' => '',
			'phone' => $val['phone'],
			'referral_code' => '',
			'referral_code_amount' => 0,
			'referral_code_limit' => 0,
			'wallet_amount' => 0,
			'referral_earned_amount' => 0,
			'referrer_earned' => 0,
			'discount' => 0,
			'creditcard_no' => '',
			'creditcard_cvv' => '',
			'expdatemonth' => '',
			'expdateyear' => '',
			'cardholder_name' => '',
			'civilid' => '',
			'civilid_front' => '',
			'civilid_back' => '',
			'civilid_front_thumb' => '',
			'civilid_back_thumb' => '',			
			'fb_user_id' => '',
			'fb_access_token' => '',
			'device_id' => $deviceid,
			'device_token' => $devicetoken,
			'device_type' => $devicetype,
			'activation_key' => '',
			'activation_status' => '0',
			'login_from' => 0,			
			'created_date' => $current_time,
			'updated_date' => $current_time,
			'last_login' => '',
			'login_status' => 'N',
			'referred_by' => 0,
			'passenger_cid' => $company_id,
			'skip_credit_card' => 0,
			'loc' => [],
			'creditcard_details' => [],						
			'user_status' => 'I',
			'child_exist' => 0,
			'allow_creditcard' => (isset($val['allow_creditcard']))?(int)$val['allow_creditcard']:(int)0,
			'trip_alert' => (isset($val['trip_alert']))?(int)$val['trip_alert']:(int)0,
			'profile_thumb_image' =>'',
			'pay_by' => (int)3,
			'lateral_start_date' => '',
			'lateral_end_date' => ''
		];
		$child_result = $this->mongo_db->insert(MDB_PASSENGERS,$child_passenger);
		return (!empty($child_result) && empty($child_result['err']))?1:0;		
    }
	
	public function add_passenger_data($data)
    {		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$data['phone']],['_id']);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_id = key($pass_rs);
		$current_time = convert_timezone( 'now', TIMEZONE );
		
		$creditcard_no            = isset($data['creditcard_no']) ? $data['creditcard_no'] : '';
		$creditcard_cvv           = isset($data['creditcard_cvv']) ? $data['creditcard_cvv'] : '';
		$expdatemonth             = isset($data['expdatemonth']) ? $data['expdatemonth'] : '';
		$expdateyear              = isset($data['expdateyear']) ? $data['expdateyear'] : '';
		$cardholder_name          = isset($data['cardholder_name']) ? $data['cardholder_name'] : '';
		$salute         	  = isset($data['salutation']) ? $data['salutation'] : '';
		
        $passenger = [			
			'name' => $data['firstname'],
			'salutation' => $salute,
			'lastname' => $data['lastname'],			
			'email' => $data['email'],			
			'creditcard_no' => $creditcard_no,
			'creditcard_cvv' => $creditcard_cvv,
			'expdatemonth' => $expdatemonth,
			'expdateyear' => $expdateyear,
			'cardholder_name' => $cardholder_name,
			'civilid_front' => $data['civilid_front'],
			'civilid_back' => $data['civilid_back'],
			'civilid_front_thumb' => $data['civilid_front_thumb'],
			'civilid_back_thumb' => $data['civilid_back_thumb'],
			'civilid' => $data['civilid'],
			//'created_date' => $current_time,
			'updated_date' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),
			'activation_status' => '1',
			'login_status' => 'S',
			'skip_credit_card' => 2,
			'creditcard_details' => [],						
			'user_status' => 'A',			
		];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$pass_id],['$set'=>$passenger],['upsert'=>false]);
		if($creditcard_no != '') {
			$data['passenger_id'] = $pass_id;
			$data['default'] = 1;
			$data['card_type'] = 'P';
			$update_card_data = $this->add_passenger_carddata($data);
		}
		return $pass_id;
		
    }
	
	public function check_passenger($p_phone, $verification_code) {
		$pass_rs = $this->mongo_db->count(MDB_PASSENGERS,['phone'=>$p_phone,'otp'=>$verification_code],['_id']);
		return ($pass_rs == 1) ? true : false;		
	}
	
	public function update_child($parentid) {
		$update = ['child_exist'=>(int)1];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$parentid],['$set'=>$update],['upsert'=>false]);
		return (count($pass_result))?1:0;
	}
	
	public function add_cp_account_details($val, $phone, $otp = null, $company_id = "")
    {		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_first_key = key($pass_rs);
		$pass_id = $pass_first_key + 1;
		$password       = text::random($type = 'alnum', $length = 6);   
        $common_model   = Model::factory('commonmodel');
        $company_id=1;
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
		        
		$child_passenger = [
			'_id'=>$pass_id,
			'parent_id' => (int)$val['parent_id'],
			'account_type' => (int)$val['account_type'],					 
			'salutation' => '',
			'name' => (isset($val['name'])) ? $val['name'] : '',
			'lastname' => (isset($val['lastname']))?$val['lastname']:'',			
			'email' => '',			
			'password' => md5($password),
			'org_password' => $password,
			'profile_image' => '',
			'otp' => $otp,
			'country_code' => '',
			'address' => '',
			'phone' => (isset($phone)) ? $phone : '',
			'referral_code' => '',
			'referral_code_amount' => 0,
			'referral_code_limit' => 0,
			'wallet_amount' => 0,
			'referral_earned_amount' => 0,
			'referrer_earned' => 0,
			'discount' => 0,
			'creditcard_no' => '',
			'creditcard_cvv' => '',
			'expdatemonth' => '',
			'expdateyear' => '',
			'cardholder_name' => '',
			'civilid' => '',
			'civilid_front' => '',
			'civilid_back' => '',
			'civilid_front_thumb' => '',
			'civilid_back_thumb' => '',
			'fb_user_id' => '',
			'fb_access_token' => '',
			'device_id' => '',
			'device_token' => '',
			'device_type' => '',
			'activation_key' => '',
			'activation_status' => '0',
			'login_from' => 0,			
			'created_date' => $current_time,
			'updated_date' => $current_time,
			'last_login' => '',
			'login_status' => 'N',
			'referred_by' => 0,
			'passenger_cid' => $company_id,
			'skip_credit_card' => 0,
			'loc' => [],
			'creditcard_details' => [],						
			'user_status' => 'I',
			'child_exist' => 0,
			'allow_creditcard' => (isset($val['allow_creditcard']))?(int)$val['allow_creditcard']:(int)0,
			'trip_alert' => (isset($val['trip_alert']))?(int)$val['trip_alert']:(int)0,
			'profile_thumb_image' =>'',
			'pay_by' => (int)3,
			'lateral_start_date' => '',
			'lateral_end_date' => ''
		];
		$child_result = $this->mongo_db->insert(MDB_PASSENGERS,$child_passenger);
		return (!empty($child_result) && empty($child_result['err']))?1:0;		
    }
	
	public function add_cp_account($val, $otp = null, $company_id = "")
    {		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_first_key = key($pass_rs);
		$pass_id = $pass_first_key + 1;
		   
        $common_model   = Model::factory('commonmodel');
        $company_id=1;
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
		$activation_key = Commonfunction::admin_random_user_password_generator();        
		$child_passenger = [
			'_id'=>$pass_id,
			'parent_id' => (int)$val['parent_id'],
			'account_type' => (int)$val['account_type'],					 
			'salutation' => '',
			'name' => (isset($val['name'])) ? $val['name'] : '',
			'lastname' => (isset($val['lastname']))?$val['lastname']:'',			
			'email' => '',			
			'password' => '',
			'org_password' => '',
			'profile_image' => '',
			'otp' => $otp,
			'country_code' => '',
			'address' => '',
			'phone' => (isset($val['phone'])) ? $val['phone'] : '',
			'referral_code' => '',
			'referral_code_amount' => 0,
			'referral_code_limit' => 0,
			'wallet_amount' => 0,
			'referral_earned_amount' => 0,
			'referrer_earned' => 0,
			'discount' => 0,
			'creditcard_no' => '',
			'creditcard_cvv' => '',
			'expdatemonth' => '',
			'expdateyear' => '',
			'cardholder_name' => '',
			'civilid' => '',
			'civilid_front' => '',
			'civilid_back' => '',
			'civilid_front_thumb' => '',
			'civilid_back_thumb' => '',
			'fb_user_id' => '',
			'fb_access_token' => '',
			'device_id' => '',
			'device_token' => '',
			'device_type' => '',
			'activation_key' => $activation_key,
			'activation_status' => '1',
			'login_from' => 0,			
			'created_date' => $current_time,
			'updated_date' => $current_time,
			'last_login' => '',
			'login_status' => 'N',
			'referred_by' => 0,
			'passenger_cid' => $company_id,
			'skip_credit_card' => 0,
			'loc' => [],
			'creditcard_details' => [],						
			'user_status' => 'I',
			'child_exist' => 0,
			'allow_creditcard' => (isset($val['allow_creditcard']))?(int)$val['allow_creditcard']:(int)0,
			'trip_alert' => (isset($val['trip_alert']))?(int)$val['trip_alert']:(int)0,
			'profile_thumb_image' =>'',
			'pay_by' => (int)3,
			'lateral_start_date' => '',
			'lateral_end_date' => ''
		];
		$child_result = $this->mongo_db->insert(MDB_PASSENGERS,$child_passenger);
		
		return $pass_id;		
    }
	
	public function getChildAccounts($lang) {
		$ops = [
					[
						'$project' => [
						'_id' => '$_id',
						'account_type' => ($lang == 'en') ? '$account_type' : '$account_type_arabic',
						'status' => '$status',
						]
					],
					[
						'$match' => ["status"=>"A"]
					],
					[
						'$sort' => ["_id"=>1]
					]
			];
		$result = $this->mongo_db->aggregate(MDB_CHILD_ACCOUNT_TYPE,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];	
	}
	
	public function getTaxiList($model,$keyword) {
		$get_ids = [];
					$match['mapping_status'] = 'A';
                    $sql = $this->mongo_db->find(MDB_TAXI_DRIVER_MAPPING,$match,['mapping_taxiid']);
                    $sqlres = iterator_to_array($sql,false);	
                    foreach($sqlres as $sql){
					$get_ids[] = 	$sql['mapping_taxiid'];
						
					}				
		//print_r($get_ids);exit;
		 $match = ['taxi_status' => 'A', 'taxi_availability' => 'A' , 'taxi_model' => (int)$model, 'taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i'),'_id' => ['$nin' => $get_ids]];
		$args = [
				[
					'$lookup' => [
						'from' => MDB_TAXI_DRIVER_MAPPING,
						'localField' => '_id',
						'foreignField' => 'mapping_taxiid',
						'as' => 'mapping'
					]
				],
			/*	array(
					'$unwind' => '$mapping'
				),*/
			['$match' => $match],
			[
		
			  '$project' => [
			  '_id' => '$_id',
			  'taxi_no' => '$taxi_no',
			  'taxi_model' => '$taxi_model',
			  ]]					  		  
		  ];
		
		$result = $this->mongo_db->aggregate(MDB_TAXI,$args);		
		return (!empty($result['result']))?$result['result']:[];	
	}
	
	/** Resend OTP **/
	 public function update_otp($otp_array, $otp, $company_id = '')
    {
        if ($company_id != '' && $company_id != 0) {
            $common_model     = Model::factory('commonmodel');
            $current_datetime = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_datetime = date('Y-m-d H:i:s');
        }
        if ($otp_array['user_type'] == 'P') {            
			$update_otp = $this->mongo_db->update(MDB_PASSENGERS,['phone'=>$otp_array['phone'],'passenger_cid'=>(int)$company_id],['$set'=>['otp'=>$otp,'updated_date'=> new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000) ]],['upsert'=>false]);            
        } else if ($otp_array['user_type'] == 'D') {
			$update_otp = $this->mongo_db->update(MDB_PEOPLE,['phone'=>$otp_array['phone']],['$set'=>['otp'=>$otp,'updated_date'=> new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000) ]],['upsert'=>false]);
        } else {
            $update_otp = false;
        }
        return (empty($update_otp['err']))?1:$result['err'];
    }
	
    public function update_otp_old($otp_array, $otp, $company_id = '')
    {
        if ($company_id != '') {
            $common_model     = Model::factory('commonmodel');
            $current_datetime = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_datetime = date('Y-m-d H:i:s');
        }
        if ($otp_array['user_type'] == 'P') {
            if ($company_id != '') {
                $update_otp = DB::update(PASSENGERS)->set([
                    'otp' => $otp,
                    'updated_date' => $current_datetime
                ])->where('email', '=', $otp_array['email'])->where('passenger_cid', '=', $company_id)->execute();
            } else {
                $update_otp = DB::update(PASSENGERS)->set([
                    'otp' => $otp,
                    'updated_date' => $current_datetime
                ])->where('email', '=', $otp_array['email'])->where('passenger_cid', '=', 0)->execute();
            }
        } else if ($otp_array['user_type'] == 'D') {
            $update_otp = DB::update(PEOPLE)->set([
                'otp' => $otp,
                'updated_date' => $current_datetime
            ])->where('email', '=', $otp_array['email'])->execute();
        } else {
            $update_otp = false;
        }
        if ($update_otp) {
            return 1;
        } else {
            return 0;
        }
    }
    //Check OTP 
    public function check_otp($otp = null, $email = null, $user_type = null, $company_id = '')
    {
        try {
            if ($user_type == 'P') {
                if ($company_id != '') {
                    $sql = "SELECT id FROM " . PASSENGERS . " WHERE email='$email' and otp='$otp' and passenger_cid='$company_id'";
                } else {
                    $sql = "SELECT id FROM " . PASSENGERS . " WHERE email='$email' and otp='$otp' and passenger_cid='0'";
                }
            } else {
                $sql = "SELECT id FROM " . PEOPLE . " WHERE email='$email' and otp='$otp'";
            }
            $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
            if (count($result) > 0) {
                return 1;
            } else {
                return 0;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 2;
        }
    }
    public function check_otp_expire($otp = null, $email = null, $user_type = null, $company_id = '')
    {
		
        try {
            if ($user_type == 'P') {
                if ($company_id != '') {
					$match['otp'] = $otp;
					$match['passenger_cid'] = $company_id;
                    $sql = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id','email','otp','created_date','updated_date']);
                   // $sql = "SELECT id,email, otp, created_date,updated_date,DATE_ADD(  `updated_date` , INTERVAL 15 MINUTE ) AS otp_expiry FROM " . PASSENGERS . " WHERE email='$email' and otp='$otp' and passenger_cid='$company_id'";
                } else {
					$match['otp'] = $otp;
					$match['passenger_cid'] = 0;
					$sql = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id','email','otp','created_date','updated_date']);
                    //$sql = "SELECT id,email, otp, created_date,updated_date,DATE_ADD(  `updated_date` , INTERVAL 15 MINUTE ) AS otp_expiry FROM " . PASSENGERS . " WHERE email='$email' and otp='$otp' and passenger_cid='0'";
                }
            } else {
                    $match['otp'] = $otp;
					$match['passenger_cid'] =  $company_id;
					$sql = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id','email','otp','created_date','updated_date']);
            }
            
           // print_r($sql);exit;
            return (empty($sql['err']))?1:0;
           
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 2;
        }
    }
    //Check Referral code
     public function check_referral_code($referral_code = null, $company_id = '')
    {
        try {            
			$match = [];
			$match['referral_code'] = $referral_code;
			if ($company_id != '' && $company_id !=0) {
				$match['passenger_cid'] = (int)$company_id;
			}
			$res = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id']);
			return (isset($res)?$res:[]); 
        }
        catch (Kohana_Exception $e) {
            return [];
        }
    }
    public function check_referral_code_old($referral_code = null, $company_id = '')
    {
        try {
            if ($company_id != '') {
                $sql = "SELECT id FROM " . PASSENGERS . " WHERE referral_code='$referral_code' and passenger_cid='$company_id' ";
            } else {
                $sql = "SELECT id FROM " . PASSENGERS . " WHERE referral_code='$referral_code' and passenger_cid='0' ";
            }
            $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
            if (count($result) > 0) {
                return $result;
            } else {
                return 0;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Check Referral code
    public function check_driver_referral_code($referral_code = null)
    {
        try {
            $sql    = "SELECT id FROM " . PEOPLE . " WHERE driver_referral_code='$referral_code'";
            $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
            if (count($result) > 0) {
                return $result;
            } else {
                return 0;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Save Passenger Personal Profile Data
    public function save_passenger_personaldata($array, $referred_passenger_id, $company_id = '')
    {
        try {
            $p_email = $array['email'];
			$match = [];
			$match['email'] = $p_email;
			if ($company_id != '' && $company_id !=0) {
				$match['passenger_cid'] = (int)$company_id;
			}
			$result = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id']);
			$passenger_id = (isset($result['_id'])?$result['_id']:0);
            if ($passenger_id != 0) {
				$match['_id'] = (int)$passenger_id;
				$result = $this->mongo_db->Update(MDB_PASSENGERS,$match,['$set'=>$array],['upsert'=>false]);
                return (isset($result['err'])?0:1);
            } else {
                return 0;
            }
        }
        catch (Kohana_Exception $e) {
            return 0;
        }
    }
    public function save_passenger_personaldata_old($array, $referred_passenger_id, $company_id = '')
    {
        //print_r($array);
        //exit;
        try {
            $p_email = $array['email'];
            if ($company_id != '') {
                $data = DB::select('id')->from(PASSENGERS)->where(PASSENGERS . '.email', '=', $p_email)->where(PASSENGERS . '.passenger_cid', '=', $company_id)->as_object()->execute();
            } else {
                $data = DB::select('id')->from(PASSENGERS)->where(PASSENGERS . '.email', '=', $p_email)->where(PASSENGERS . '.passenger_cid', '=', 0)->as_object()->execute();
            }
            if (count($data) > 0) {
                $passenger_id = $data[0]->id;
            } else {
                $passenger_id = '';
            }
            if ($passenger_id != '') {
                $result = DB::update(PASSENGERS)->set($array)->where('email', '=', $array['email'])->where('id', '=', $passenger_id)->execute();
                /********************************************************								
                $referer_data_count = DB::select('*')->from(PASSENGERS_REF_DETAILS)
                ->where(PASSENGERS_REF_DETAILS.'.registered_passenger_id','=',$passenger_id)
                ->as_object()		
                ->execute();
                if(count($referer_data_count)==0)
                {
                $ref_result = DB::insert(PASSENGERS_REF_DETAILS, array('referred_passenger_id','registered_passenger_id','referral_status','referrer_earned','earned_amount'))
                ->values(array($referred_passenger_id,$passenger_id,'1','0',''))
                ->execute();	
                /***************************************
                $refby_array = array("referred_by"=>$referred_passenger_id);
                $refby_result = DB::update(PASSENGERS)
                ->set($refby_array)
                ->where('email', '=', $p_email)							
                ->execute();
                }				
                //print_r($ref_result);			
                /*****************************************/
                return 0;
            } else {
                return 1;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Save Passenger Card Data
    public function save_passenger_carddata($array, $default_companyid)
    {
        //print_r($array);
        //echo $referred_passenger_id;
        //exit;
        try {
            $p_email = $array['email'];
           
            if ($default_companyid != "") { 
                //$data = DB::select('id')->from(PASSENGERS)->where(PASSENGERS . '.email', '=', $p_email)->where('passenger_cid', '=', $default_companyid)->as_object()->execute();
				$result = $this->mongo_db->find_one(MDB_PASSENGERS,['passengerdetails.email'=> $p_email,'passengerdetails.passenger_cid'=> $default_companyid],['_id']);
				
				$data = (!empty($result)) ? $result: [];
            } else {
                //$data = DB::select('id')->from(PASSENGERS)->where(PASSENGERS . '.email', '=', $p_email)->where('passenger_cid', '=', '0')->as_object()->execute();
                $result = $this->mongo_db->find_one(MDB_PASSENGERS,['passengerdetails.email'=> $p_email,'passengerdetails.passenger_cid'=> 0],['_id']);
				$data =  (!empty($result)) ? $result: [];
            }
            
            if (count($data) > 0) {
                $passenger_id = $data['_id'];
            } else {
                $passenger_id = '';
            }
            if ($passenger_id != '') {
                $card_holder_name = isset($array['card_holder_name']) ? $array['card_holder_name'] : '';
                $creditcard_no    = $array['creditcard_no'];
                $creditcard_no    = encrypt_decrypt('encrypt', $creditcard_no);
                $creditcard_cvv   = ""; //$array['creditcard_cvv'];
                $expdatemonth     = $array['expdatemonth'];
                $expdateyear      = $array['expdateyear'];
                $email = $array['email'];
                
                
               /* $sql              = "SELECT passenger_cardid FROM " . PASSENGERS_CARD_DETAILS . " WHERE passenger_id='$passenger_id' and creditcard_no = '$creditcard_no'";
                $result           = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
                
				$result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=> (int)$passenger_id,'creditcard_details.creditcard_no'=> $creditcard_no],['creditcard_details.passenger_cardid']);	
				//print_r($result);exit;	
                if (count($result) > 0) {
                    return 2;
                } else {
					$passenger_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['creditcard_details.passenger_cardid'])->sort(['creditcard_details.passenger_cardid'=>-1])->limit(1);					
					$passenger_rs = iterator_to_array($passenger_rs);					
					$passenger_rs1 = reset($passenger_rs);
					$passenger_first_key = $passenger_rs1['creditcard_details'][0]['passenger_cardid'];
					$passenger_cardid = $passenger_first_key+1;
					/*$set = array("creditcard_details"=>array(array("creditcard_details.$.passenger_cardid" => $passenger_cardid,
								"creditcard_details.$.passenger_email" => $email,
								"creditcard_details.$.card_type" => "P",
								"creditcard_details.$.creditcard_no" => $creditcard_no,
								"creditcard_details.$.creditcard_cvv" => "",
								"creditcard_details.$.card_holder_name" => $card_holder_name,
								"creditcard_details.$.expdatemonth" => $expdatemonth,
								"creditcard_details.$.expdateyear" => $expdateyear,
								"creditcard_details.$.createdate" => $this->currentdate)));*/
					$set = ["creditcard_details"=>[["passenger_cardid" => $passenger_cardid,
								"passenger_email" => $email,
								"card_type" => "P",
								"creditcard_no" => $creditcard_no,
								"creditcard_cvv" => "",
								"card_holder_name" => $card_holder_name,
								"expdatemonth" => $expdatemonth,
								"expdateyear" => $expdateyear,
								"createdate" => $this->currentdate]]];
					$insert = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=>$set],['multiple'=>true]);
                    /*$card_result = DB::insert(PASSENGERS_CARD_DETAILS, array(
                        'passenger_id',
                        'passenger_email',
                        'card_type',
                        'creditcard_no',
                        'card_holder_name',
                        'expdatemonth',
                        'expdateyear',
                        'default_card'
                    ))->values(array(
                        $passenger_id,
                        $p_email,
                        'P',
                        $creditcard_no,
                        $card_holder_name,
                        $expdatemonth,
                        $expdateyear,
                        '1'
                    ))->execute();*/                     
                    return 0;
                }
            } else {
                return 1;
            }
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    // Check Whether Driver People Email is Already Exist or Not
    public function check_people_personal_data($userid = "", $user_type = "")
    {
        $sql    = "SELECT id FROM " . PEOPLE . " WHERE id='$userid' and user_type = '$user_type' and (name = '' or lastname = '')";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //check_people_taxi_data
    public function check_people_taxi_data($userid = "")
    {
        $sql    = "SELECT id FROM " . PEOPLE . " WHERE id = '$userid' and company_id =0";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Whether Passenger Personal Data is Already Exist or Not //check_passenger_card_data
     public function check_passenger_personal_data($userid = "")
    {
		$match = ['\$and'=>[['_id'=>(int)$userid],['\$or'=>[['name'=>['$eq'=>'']],['lastname'=>['$eq'=>'']]]]]];
		$result = $this->mongo_db->count(MDB_PASSENGERS,$match);
		return (isset($result))? $result: 0;
    }
    public function check_passenger_personal_data_old($userid = "")
    {
        $sql    = "SELECT id FROM " . PASSENGERS . " WHERE id='$userid' and (name = '' or lastname = '')";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
     public function check_passenger_card_data($userid = "")
    {
		$arguments = [['$unwind'=>'$creditcard_details'],
						   ['$match'=>['_id'=>(int)$userid]]
						  ];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$arguments);
		return isset($result['result']) ? 1 : 0;  
    }
    //Check Passenger Card Details
    public function check_passenger_card_data_old($userid = "")
    {
        /*$sql    = "SELECT passenger_cardid FROM " . PASSENGERS_CARD_DETAILS . " WHERE passenger_id = '$userid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return 0;
        }*/
		$res = $this->mongo_db->find(MDB_PASSENGERS,['_id'=>(int)$userid],['creditcard_details.passenger_cardid'])->sort(["_id"=>1]);
		$result = iterator_to_array($res);
		return (isset($result) ? reset($result) : []);  
    }
    // edit_check_email_passengers
    public function edit_check_email_passengers($email = "", $passenger_id = "", $company_id = '')
    {
		$result = $this->mongo_db->count(MDB_PASSENGERS,['_id'=>['$ne'=>(int)$passenger_id], 'email'=> $email],['_id']);
        if ($result == 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // edit_check_email_passengers
      public function edit_check_email_people($email = "", $driver_id = "")
    {
		$match = ['email' => $email, 'user_type' => 'D', '_id' => ['$ne'=> (int)$driver_id]];
		$result = $this->mongo_db->count(MDB_PEOPLE,$match);
		return (!empty($result)) ? $result : 0 ;
    }
    public function edit_check_email_people_old($email = "", $driver_id = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' and id!='$driver_id' and user_type='D'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //edit_check_phone_passengers
   public function edit_check_phone_passengers($phone = "", $passenger_id = '', $company_id = '')
    {
		if ($company_id != '') {
            $result = $this->mongo_db->count(MDB_PASSENGERS,['_id'=>['$ne'=>(int)$passenger_id], 'phone'=> $phone, 'passenger_cid'=>(int)$company_id],['_id']);
        } else {
            $result = $this->mongo_db->count(MDB_PASSENGERS,['_id'=>['$ne'=>(int)$passenger_id], 'phone'=> $phone, 'passenger_cid'=>(int)0],['_id']);
        }
       
        if ($result == 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //edit_check_phone_passengers
     public function edit_check_phone_people($phone = "", $driver_id = '')
    {
		$match = ['phone' => $phone, 'user_type' => 'D', '_id' => ['$ne'=> (int)$driver_id]];
		$result = $this->mongo_db->count(MDB_PEOPLE,$match);
		return (!empty($result)) ? $result : 0 ;
    }
    public function edit_check_phone_people_old($phone = "", $driver_id = '')
    {
        $sql    = "SELECT phone FROM " . PEOPLE . " WHERE phone='$phone' and id != '$driver_id' and user_type='D'";
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Whether People phone is Already Exist or Not //
    public function check_email_people($email = "", $user_type = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' and user_type='$user_type'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //Edit Passenger Personal Profile Data
    public function edit_passenger_personaldata($array, $passenger_id, $company_id = '')
    {
		try {
            if ($company_id != '') {
                $result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$passenger_id,'passenger_cid'=>(int)$company_id],['$set'=>$array]);
            } else {
                $result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=>$array]);
            }
            return 0;
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    //Check card exist for passenger
      public function check_card_exist($creditcard_no = "", $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id = "")
    {
        $creditcard_no = encrypt_decrypt('encrypt', $creditcard_no);
		$match = ['_id'=>(int)$passenger_id, 'creditcard_details.creditcard_no' => $creditcard_no, 'status'=>1];
		$args = [['$unwind' => '$creditcard_details'],
					  ['$match' => $match]				  
					];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
		return (!empty($result['result'])) ? count($result['result']) : 0;
    }
    public function check_card_exist_old($creditcard_no = "", $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id = "")
    {
        $creditcard_no = encrypt_decrypt('encrypt', $creditcard_no);
        $sql           = "SELECT passenger_cardid FROM " . PASSENGERS_CARD_DETAILS . " WHERE passenger_id='$passenger_id' and creditcard_no = '$creditcard_no'";
        //   and creditcard_cvv = '$creditcard_cvv' and expdatemonth = '$expdatemonth' and expdateyear = '$expdateyear' and default_card = '$default'
        $result        = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //Check card exist for passenger
     public function edit_check_card_exist($passenger_cardid, $creditcard_no = "", $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id = "", $default)
    {
		$creditcard_no = encrypt_decrypt('encrypt', $creditcard_no);
		$match = ['_id'=>(int)$passenger_id,
					   'creditcard_details.creditcard_no' => $creditcard_no,
					   'creditcard_details.passenger_cardid' => ['$ne'=>(int)$passenger_cardid],
					   'creditcard_details.status' =>1];
		$args = [['$unwind' => '$creditcard_details'],
					  ['$match' => $match]				  
					];
		$res = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
		$result =  (!empty($res['result'])) ? $res['result'] : [];
		//echo '<pre>';print_r($result);exit;
		if(count($result) > 0){
			$default_card = $result[0]['creditcard_details']['default_card'];
            if ($default_card == $default) {
                return 2;
            } else {
                return 1;
            }			
		}else {
            return 0;
        }
    }
    public function edit_check_card_exist_old($passenger_cardid, $creditcard_no = "", $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id = "", $default)
    {
        $creditcard_no = encrypt_decrypt('encrypt', $creditcard_no);
        $sql           = "SELECT passenger_cardid,default_card FROM " . PASSENGERS_CARD_DETAILS . " WHERE passenger_id='$passenger_id' and creditcard_no = '$creditcard_no' and passenger_cardid != '$passenger_cardid' ";
        //and creditcard_cvv = '$creditcard_cvv' and expdatemonth = '$expdatemonth' and expdateyear = '$expdateyear' and default_card = '$default'
        $result        = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            $default_card = $result[0]['default_card'];
            if ($default_card == $default) {
                return 2;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }
    //Check Favourite Place exist for passenger
    public function check_fav_place($passenger_id = "", $favourite_place = "", $d_favourite_place = "", $p_fav_locationtype = "")
    {
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		if($check_passenger_avail == 1){
		$match = ['passenger_id' => (int)$passenger_id,'fav_loction_type' => $p_fav_locationtype];
		$fav_check = $this->mongo_db->count(MDB_PASSENGERS_FAVOURITES,$match);
		if($fav_check == 0){
			$favourite_place   = $favourite_place;
            $d_favourite_place = $d_favourite_place;
			$match1 = ['passenger_id' => (int)$passenger_id,'p_favourite_place' => new \MongoDB\BSON\Regex($favourite_place, 'i')];
			if ($d_favourite_place != '') {
				$match1['d_favourite_place'] = new \MongoDB\BSON\Regex($d_favourite_place, 'i') ;
			}
			$fav_count = $this->mongo_db->count(MDB_PASSENGERS_FAVOURITES,$match1);
			return $fav_count;
		}else{
            return -1;
        }
        }else{return -2;}
    }
    public function check_fav_editplace($passenger_id = "", $favourite_place = "", $d_favourite_place = "", $favourite_id = "", $p_fav_locationtype = "")
    {
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		if($check_passenger_avail == 1){
		$match = ['passenger_id' => (int)$passenger_id,'_id' => (int)$favourite_id];
		$fav_check = $this->mongo_db->find_one(MDB_PASSENGERS_FAVOURITES,$match);		
		if(count($fav_check) > 0){
			if ($fav_check['fav_loction_type'] == $p_fav_locationtype){
				return 0;
			}else{
				$match1 =[];
				$match1['p_favourite_id'] = ['$ne'=> (int)$favourite_id];
				$match1['fav_loction_type'] = ['$eq'=> $p_fav_locationtype];
				$type_check = $this->mongo_db->find_one(MDB_PASSENGERS_FAVOURITES,$match1);
				return (isset($type_check)) ? $type_check : 0;
			}			
		}else{
            return -1;
        }
	}else{return -2;}
        
    }
    public function check_fav_editplacecheck($passenger_id = "", $favourite_place = "", $d_favourite_place = "", $favourite_id = "", $p_fav_locationtype = "")
    {
		$favourite_place   = $favourite_place;
		$d_favourite_place = $d_favourite_place;
		$match1 = ['_id'=>['$ne'=>(int)$favourite_id],
						'passenger_id' => (int)$passenger_id,
						'p_favourite_place' => new \MongoDB\BSON\Regex($favourite_place, 'i')];
		if ($d_favourite_place != '') {
			$match1['d_favourite_place'] = new \MongoDB\BSON\Regex($d_favourite_place, 'i');
		}
		$fav_count = $this->mongo_db->count(MDB_PASSENGERS_FAVOURITES,$match1);
		return $fav_count;
    }
    //Check Trip exist for passenger
    public function check_trip_data($passenger_id = "")
    {
        $sql    = "SELECT passengers_log_id FROM " . PASSENGERS_LOG . " WHERE passengers_log_id='$passenger_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //Add Passenger Card Data
    public function add_passenger_carddata($array, $referred_passenger_id = null)
    {
        try {
			$add_model        = Model::factory('add'); // Check Passenger id is avail or not
			$check_passenger_avail = $add_model->parent_id_isValid( $array['passenger_id']);
			if($check_passenger_avail == 1){
            $p_email        = $array['email'];
            $passenger_id   = $array['passenger_id'];
            $creditcard_no  = $array['creditcard_no'];
            $creditcard_no  = encrypt_decrypt('encrypt', $creditcard_no);
            $creditcard_cvv = $array['creditcard_cvv'];
            $expdatemonth   = $array['expdatemonth'];
            $expdateyear    = $array['expdateyear'];
            $card_type      = $array['card_type'];
            $default        = $array['default'];
			
			$args = [['$unwind' => '$creditcard_details'],
						  ['$sort' => ['creditcard_details.passenger_cardid' => -1]],
						  ['$project' => ['card_id' => '$creditcard_details.passenger_cardid']],
						  ['$limit' => 1]
						  ];
			$get_id = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
			$inc_id = (!empty($get_id['result'])) ? $get_id['result'][0]['card_id'] : 0;
			$inc_id +=1;			
			$update_array = ["creditcard_details"=>[
								'passenger_cardid' => (int)$inc_id,
								'passenger_id' => (int)$passenger_id,
								'passenger_email' => $p_email,
								'card_type' => $card_type,
								'creditcard_no' => $creditcard_no,
								'creditcard_cvv' => $creditcard_cvv,
								'expdatemonth' => $expdatemonth,
								'expdateyear' => $expdateyear,
								'default_card' => (int)$default,
								'status' => 1,
								"createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)]];
								//print_r($update_array);exit;
            if ($default == 1) {
				//echo "ssdsds ";exit;
				$match = ['_id'=>(int)$passenger_id];
				$args = [['$unwind' => '$creditcard_details'],
						  ['$match' => ['_id' => (int)$passenger_id]],
						  ['$project' => ['card_id' => '$creditcard_details.passenger_cardid']]
						];
				$keys = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
				//print_r($keys);exit;
				$val = [];
				if(!empty($keys['result'])){
					foreach($keys['result'] as $k => $v ){
						$val["creditcard_details.".$k.".default_card"] = 0;
					}
					$def_update          = $val;
					$update = $this->mongo_db->Update(MDB_PASSENGERS,$match,['$set'=>$def_update],['upsert' => true]);
				}				
            }
				//print_r($update_array);exit;
			$result = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],
											  ['$push'=>$update_array],
											  ['upsert' => true]);
											  
            return (!isset($result['err'])) ? 1 : 0;
		}else {return -1;}
        }
        catch (Kohana_Exception $e) {
            return 0;
        }
    }
    //edit Passenger Card Data
    public function edit_passenger_carddata($array)
    {
        try {	
			
			$add_model        = Model::factory('add'); // Check Passenger id is avail or not
			$check_passenger_avail = $add_model->parent_id_isValid( $array['passenger_id']);
			if($check_passenger_avail == 1){
            $passenger_cardid = $array['passenger_cardid'];
            $passenger_id     = $array['passenger_id'];
            $creditcard_no    = $array['creditcard_no'];
            $creditcard_no    = encrypt_decrypt('encrypt', $creditcard_no);
            $creditcard_cvv   = $array['creditcard_cvv'];
            $expdatemonth     = $array['expdatemonth'];
            $expdateyear      = $array['expdateyear'];
            $card_type        = $array['card_type'];
            $default          = $array['default'];
			$match = ['_id'=>(int)$passenger_id];
			$args = [['$unwind' => '$creditcard_details'],
					  ['$match' => ['_id' => (int)$passenger_id]],
					  ['$project' => ['card_id' => '$creditcard_details.passenger_cardid']]
					];
			$keys = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);			
			$i =0;$val = [];
			foreach($keys['result'] as $k => $v ){
				if($v['card_id'] == $array['passenger_cardid']){
					$i = $k;
				}
				$val["creditcard_details.$k.default_card"] = 0;
			}
			$update_array = [
								"creditcard_details.$i.card_type" => $card_type,
								"creditcard_details.$i.creditcard_no" => $creditcard_no,
								"creditcard_details.$i.creditcard_cvv" => $creditcard_cvv,
								"creditcard_details.$i.expdatemonth" => $expdatemonth,
								"creditcard_details.$i.expdateyear" => $expdateyear,
								"creditcard_details.$i.default_card" => (int)$default
							];
            if ($default == 1) {
				$def_update          = $val;
				$update = $this->mongo_db->Update(MDB_PASSENGERS,$match,['$set'=>$def_update],['upsert' => true]);
				
            }
			$result = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],
											['$set'=>$update_array],
											['upsert' => true]);
			return (!isset($result['err'])) ? 1 : 0;	
		}else {return -1;}
        }
        catch (Kohana_Exception $e) {
            return 0;
        }
    }
    
    public function edit_passenger_carddata_old($array)
    {
        //print_r($array);
        //echo $referred_passenger_id;
        //exit;
        try {
            //$p_email = $array['email'];			
            $passenger_cardid = $array['passenger_cardid'];
            $passenger_id     = $array['passenger_id'];
            $creditcard_no    = $array['creditcard_no'];
            $creditcard_no    = encrypt_decrypt('encrypt', $creditcard_no);
            $creditcard_cvv   = ""; //$array['creditcard_cvv'];
            $expdatemonth     = $array['expdatemonth'];
            $expdateyear      = $array['expdateyear'];
            $card_type        = $array['card_type'];
            $default          = $array['default'];
            if ($default == 1) {
                $update_array = [
                    "card_type" => $card_type,
                    "creditcard_no" => $creditcard_no,
                    "expdatemonth" => $expdatemonth,
                    "expdateyear" => $expdateyear,
                    "default_card" => '1'
                ];
                //print_r($update_array);exit;
                $array        = [
                    "default_card" => '0'
                ];
                $result       = DB::update(PASSENGERS_CARD_DETAILS)->set($array)->where('passenger_id', '=', $passenger_id)->execute();
                $udate_result = DB::update(PASSENGERS_CARD_DETAILS)->set($update_array)->where('passenger_cardid', '=', $passenger_cardid)->execute();
            } else {
                $update_array = [
                    "card_type" => $card_type,
                    "creditcard_no" => $creditcard_no,
                    "expdatemonth" => $expdatemonth,
                    "expdateyear" => $expdateyear
                ];
                $udate_result = DB::update(PASSENGERS_CARD_DETAILS)->set($update_array)->where('passenger_cardid', '=', $passenger_cardid)->execute();
            }
            //print_r($ref_result);														
            return 0;
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    /** Save favourite Trip**/
    public function save_favourite($passenger_id = null, $p_favourite_place = null, $p_fav_latitude = null, $p_fav_longtitute = null, $d_favourite_place = null, $d_fav_latitude = null, $d_fav_longtitute = null, $fav_comments = null, $notes = null, $p_fav_locationtype = null,$fav_icon=null)
    {
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		if($check_passenger_avail == 1){
		$inc_id = $this->get_insert_id(MDB_PASSENGERS_FAVOURITES);
		$insert_array = [
			'_id' => (int)$inc_id,
			'passenger_id' => (int)$passenger_id,
			'p_favourite_place' => $p_favourite_place,
			'p_fav_latitude' => $p_fav_latitude,
			'p_fav_longtitute' => $p_fav_longtitute,
			'd_favourite_place' => $d_favourite_place,
			'd_fav_latitude' => $d_fav_latitude,
			'd_fav_longtitute' => $d_fav_longtitute,
			'fav_comments' => $fav_comments,
			'status' => 'A',
			'notes' => $notes,
			'fav_loction_type' => $p_fav_locationtype,
			'fav_icon' => $fav_icon
			
		];
		$result = $this->mongo_db->Insert(MDB_PASSENGERS_FAVOURITES,$insert_array);
        return (!isset($result['err'])) ? 1 : 0;}else{return -2;}
    }
    /** Get Favourite list **/
    public function get_favourite_list($passenger_id="")
    {	
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		if($check_passenger_avail == 1){
		$match = ['passenger_id' => (int)$passenger_id,'status' => 'A'];
		$project = ['p_favourite_id' => '$_id',
						 'passenger_id' => '$passenger_id',
						 'p_favourite_place' => '$p_favourite_place',
						 'p_fav_latitude' => '$p_fav_latitude',
						 'p_fav_longtitute' => '$p_fav_longtitute',
						 'd_favourite_place' => '$d_favourite_place',
						 'd_fav_latitude' => '$d_fav_latitude',
						 'd_fav_longtitute' => '$d_fav_longtitute',
						 'fav_comments' => '$fav_comments',
						 'fav_icon' => '$fav_icon',
						 'notes' => '$notes',
						 'fav_loction_type' => '$fav_loction_type'];		
		$args = [['$match' => $match],
					  ['$project' => $project]
					  ];
		$res = $this->mongo_db->aggregate(MDB_PASSENGERS_FAVOURITES,$args);

        $result_array = [];

        if(isset($res['result']))
        {
            foreach($res['result'] as $key => $val)
            {
               $result_array[$key] =  $val;
               $result_array[$key]['p_fav_latitude'] = (string)$val['p_fav_latitude'];
               $result_array[$key]['p_fav_longtitute'] = (string)$val['p_fav_longtitute'];
            }
        }

		return $result_array;
	}else {return -1;}
    }
     public function favourite_id_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS_FAVOURITES,['_id' => (int)$id]);		
		return ($result ==1)?1:0;
    }
    /** Get Favourite Details **/
    public function get_favourite_details($p_favourite_id)
    {
		$check_favourite_id_avail = $this->favourite_id_isValid($p_favourite_id);
		
		if($check_favourite_id_avail == 1) {
        $match = ['_id' => (int)$p_favourite_id];
		$project = ['p_favourite_id' => '$_id',
						 'p_favourite_place' => '$p_favourite_place',
						 'p_fav_latitude' => '$p_fav_latitude',
						 'p_fav_longtitute' => '$p_fav_longtitute',
						 'd_favourite_place' => '$d_favourite_place',
						 'd_fav_latitude' => '$d_fav_latitude',
						 'd_fav_longtitute' => '$d_fav_longtitute',
						 'fav_comments' => '$fav_comments',
						 'fav_icon' => '$fav_icon',
						 'notes' => '$notes',
						 'fav_loction_type' => '$fav_loction_type'];		
		$args = [['$match' => $match],
					  ['$project' => $project]
					  ];
		$res = $this->mongo_db->aggregate(MDB_PASSENGERS_FAVOURITES,$args);
		return (isset($res['result'])) ? $res['result'] : [];
		}else{
		 return [];
		}
             
    }
   
    //$favourite_id,$p_favourite_place,$p_fav_latitude,$p_fav_longtitute,$d_favourite_place,$d_fav_latitude,$d_fav_longtitute,$fav_comments
    public function edit_favourite($favourite_id = null, $p_favourite_place = null, $p_fav_latitude = null, $p_fav_longtitute = null, $d_favourite_place = null, $d_fav_latitude = null, $d_fav_longtitute = null, $fav_comments = null, $notes = null, $p_fav_locationtype = null, $fav_icon=null)
    {
	
		$update_array = [
            'p_favourite_place' => $p_favourite_place,
            'p_fav_latitude' => $p_fav_latitude,
            'p_fav_longtitute' => $p_fav_longtitute,
            'd_favourite_place' => $d_favourite_place,
            'd_fav_latitude' => $d_fav_latitude,
            'd_fav_longtitute' => $d_fav_longtitute,
            'fav_comments' => $fav_comments,
            'notes' => $notes,
            'fav_loction_type' => $p_fav_locationtype,
            'fav_icon' => $fav_icon
        ];
		$result = $this->mongo_db->Update(MDB_PASSENGERS_FAVOURITES,['_id'=>(int)$favourite_id],['$set'=>$update_array],['upsert'=>false]);
        return (!isset($result['err'])) ? 1 : 0;
	
	
    }
    /** Delete Favourite **/
    public function delete_favourite($favourite_id, $passenger_id)
    {
		/*$result = DB::delete(PASSENGERS_FAV)->where('p_favourite_id', '=', $favourite_id)->where('passenger_id', '=', $passenger_id)->execute();
        return $result;*/
        $match = ['passenger_id' => (int)$passenger_id,'_id' => (int)$favourite_id];
		$fav_check = $this->mongo_db->find_one(MDB_PASSENGERS_FAVOURITES,$match);		
		if(count($fav_check) > 0){
        $add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		$check_favourite_id_avail = $this->favourite_id_isValid($favourite_id);
		
			if($check_passenger_avail == 1 && $check_favourite_id_avail == 1){
				$result = $this->mongo_db->remove(MDB_PASSENGERS_FAVOURITES,['_id'=> (int)$favourite_id,'passenger_id'=> (int)$passenger_id]);
				return (!empty($result['err']))?0:1;
			}else{ return -2;}
		}else{ return -1; }
    }
    //Passenger Completed Trips by Date wise
    public function get_passenger_trips_bydate($pagination, $booktype, $ids, $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $date)
    {

        $start_time   = $date . ' 00:00:01';
        $end_time     = $date . ' 23:59:59';
		$match = ['createdate'=>['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),
										   '$lte'=> new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)],
						//'passengers_id'=> (int)$userid,
						'passengers_id'=> ['$in' =>$ids],
						'travel_status'=> (int)$status,
						'driver_reply'=> $driver_reply];
		if($booktype != 2){
			$match['bookingtype'] = (int)$booktype;
		}
		
		$args = [['$match' => $match],
					  [
							'$lookup' => [
								'from' => MDB_PASSENGERS,
								'localField' => "passengers_id",
								'foreignField' => "_id",
								'as' => "passengers"
							]
						],
						['$unwind' => '$passengers'],
						[
							'$lookup' => [
								'from' => MDB_CHILD_ACCOUNT_TYPE,
								'localField' => "passengers.account_type",
								'foreignField' => "_id",
								'as' => "account"
							]
						],
					  ['$lookup' => ['from' => MDB_TRANSACTION,
											   'localField' => '_id',
											   'foreignField' => 'passengers_log_id',
											   'as' => 'transaction']],
					  ['$unwind' => '$transaction'],
					  ['$lookup' => ['from' => MDB_PEOPLE,
											   'localField' => 'driver_id',
											   'foreignField' => '_id',
											   'as' => 'people']],
					  ['$unwind' => '$people'],
					  ['$lookup' => ['from' => MDB_TAXI,
											   'localField' => 'taxi_id',
											   'foreignField' => '_id',
											   'as' => 'taxi']],
					  ['$unwind' => '$taxi'],
					  ['$lookup'=>['from' => MDB_MOTOR_MODEL,
								  'localField' => 'taxi.taxi_model',
								  'foreignField' => '_id',
								  'as' => 'mm']],
					  ['$unwind' => '$mm'],
					
					  ['$project'=>['place'=>'$current_location',
											'pickup_time'=>'$pickup_time',
											'actual_pickup_time'=>'$actual_pickup_time',
											'drop_location'=>'$drop_location',
											'pickup_latitude'=>'$pickup_latitude',
											'pickup_longitude'=>'$pickup_longitude',
											'drop_latitude'=>'$drop_latitude',
											'drop_longitude'=>'$drop_longitude',
											'notes_driver'=>'$notes_driver',
											'fare'=>'$transaction.fare',
											'drivername'=> ['$concat'=>['$people.name',' ','$people.lastname']],
											'driverimage'=>'$people.photo',
											'taxi_no'=>'$taxi.taxi_no',
											'model'=>'$mm.model_name',
											'payment_name'=>'$payment_modules.pay_mod_name',
											'trip_id'=>'$_id',
											'jobreferral'=>'$transaction._id',
											'createdate'=>'$createdate',
											'passengers_id'=>'$passengers_id',
											'travel_status'=>'$travel_status',
											'driver_reply'=>'$driver_reply',
											'msg_status'=>'$msg_status',
											'distance'=>'$distance',
											'metric'=>'$transaction.distance_unit',
											'driver_image'=>'$people.profile_picture',
											'model_name' => '$mm.model_name',
											'waitingtime' => '$waitingtime',
											'taxi_no' => '$taxi.taxi_no',
											'drivername' => ['$concat' => ['$people.name', ' ', '$people.lastname']],
											'account_type' => '$passengers.account_type',
											'account_type_name' => '$account.account_type'
											]],
					  ['$sort' => ['_id'=>-1]]			  
					];
		$pagination_arr = [];
		if ($pagination == 1) {
			$pagination_arr = [['$skip' => (int)$start],['$limit' => (int)$limit]];
        }
		$arguments = array_merge($args,$pagination_arr);


        $travel_status = $status;

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
		//print "<pre>";
		//print_r($result);exit;
		return (isset($result['result'])) ? $result['result'] : [];
    }
	
	
    public function get_passenger_trips_bydate_old($pagination, $booktype, $userid = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $date)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $date . ' 00:00:01';
        $end_time     = $date . ' 23:59:59';
        //echo $history_type;
        $condition    = "";
        $condition    = "AND pg.createdate >='" . $start_time . "' and pg.createdate <= '" . $end_time . "'";
        if ($booktype != 2) {
            $condition .= " AND passengers_log.bookingtype = '$booktype'";
        }
        /*$company_condition="";
        if($company_id != ""){
        $company_condition = " AND pg.company_id = '$company_id'";
        }*/
        if ($pagination == 1) {
            $orderby = "order by pg.passengers_log_id desc LIMIT $start,$limit";
        } else {
            $orderby = "order by pg.passengers_log_id desc";
        }
        $sql = "SELECT pg.current_location as place,pg.pickup_time,pg.actual_pickup_time,pg.drop_location,
		pg.pickup_latitude,pg.pickup_longitude,pg.drop_latitude,pg.drop_longitude,pg.notes_driver,
		t.fare,(select concat(name,' ',lastname) from " . PEOPLE . " where id=pg.driver_id) as drivername,(select photo from " . PEOPLE . " where id=pg.driver_id) as driverimage,(select taxi_no from " . TAXI . " where taxi_id=pg.taxi_id) as taxi_no,(select pay_mod_name from " . PAYMENT_MODULES . " where pay_mod_id=t.payment_type) as payment_name,pg.passengers_log_id as trip_id,t.id as jobreferral,pg.createdate,(select count(*) from  " . PASSENGERS_LOG . " as pg RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition) as total_count  FROM " . PASSENGERS_LOG . " as pg RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition $orderby ";
        //echo $sql.'<br>';
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    // Get Passenger trips by Fromdate anda to date
    public function get_passengertrips_byfrmdate($pagination, $booktype, $userid = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $date)
    {
		$current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = '2016-06-01' . ' 00:00:01';
        $end_time     = '2016-06-31' . ' 23:59:59';
        //echo $start_time.'xxx'.$end_time; exit;
		
        $arguments = [['$match'=>[
						'createdate'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000), '$lte'=> new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)],
						'passengers_id' => (int)$userid,		
						'travel_status' => (int)1,	
						'driver_reply' => 'A',	
					]],['$lookup'=>[
						'from'=>MDB_TRANSACTION,
						'localField'=>"_id",
						'foreignField'=>"passengers_log_id",
						 'as'=>"transaction"        
					]],
					['$unwind'=>'$transaction'],
					['$lookup'=>[
						'from'=>MDB_PEOPLE,
						'localField'=>"driver_id",
						'foreignField'=>"_id",
						 'as'=>"people"        
					]],
					['$unwind'=>'$people'],
					['$lookup'=>[
						'from'=>MDB_TAXI,
						'localField'=>"taxi_id",
						'foreignField'=>"_id",
						 'as'=>"taxi"        
					]],
					['$unwind'=>'$taxi'],
					['$lookup'=>[
						'from'=>MDB_PAYMENT_MODULES,
						'localField'=>"transaction.payment_type",
						'foreignField'=>"_id",
						 'as'=>"payment_modules"        
					]],
					['$unwind'=>'$payment_modules'],					
					['$project' => [
						'place' => '$current_location',
						'pickup_time' => '$pickup_time',
						'actual_pickup_time' => '$actual_pickup_time',
						'drop_location' => '$drop_location',
						'pickup_latitude' => '$pickup_latitude',
						'pickup_longitude' => '$pickup_longitude',
						'drop_latitude' => '$drop_latitude',
						'drop_longitude' => '$drop_longitude',
						'notes_driver' => '$notes_driver',
						'fare' => '$transaction.fare',
						'drivername' => ['$concat'=>['$people.name',' ', '$people.lastname']],
						'driverimage' => '$people.photo',
						'taxi_no' => '$taxi.taxi_no',
						'payment_name' => '$payment_modules.pay_mod_name',
						'trip_id' => '$_id',
						'jobreferral' => '$transaction._id',							
						'createdate' => '$createdate',
						'passengers_id' => '$passengers_id',
						'travel_status' => '$travel_status',
						'driver_reply' => '$driver_reply',
						'msg_status' => '$msg_status'						
					]],
					
					['$skip' => (int)$start],
					['$limit' => (int)$limit],
				];
		
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		
        return (!empty($result['result'])?$result['result']:[]); 
    }
    //Passenger Completed Trips by Month wise
    public function get_passenger_trips_bymonth($pagination, $booktype, $ids, $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $fdate, $tdate)
    {

		$start_time   = $fdate . ' 00:00:01';
        $end_time     = $tdate . ' 23:59:59';
		
		//$match_query['passengers_id'] = array('$in' =>$ids);
		
		$match = ['createdate'=>['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),
										   '$lte'=> new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)],
						'passengers_id'=> ['$in' =>$ids],
						'travel_status'=> (int)$status,
						'driver_reply'=> $driver_reply];
		if($booktype != 2){
			$match['bookingtype'] = (int)$booktype;
		}
		
		$args = [['$match' => $match],
						[
							'$lookup' => [
								'from' => MDB_PASSENGERS,
								'localField' => "passengers_id",
								'foreignField' => "_id",
								'as' => "passengers"
							]
						],
						['$unwind' => '$passengers'],
						[
							'$lookup' => [
								'from' => MDB_CHILD_ACCOUNT_TYPE,
								'localField' => "passengers.account_type",
								'foreignField' => "_id",
								'as' => "account"
							]
						],
					  ['$lookup' => ['from' => MDB_TRANSACTION,
											   'localField' => '_id',
											   'foreignField' => 'passengers_log_id',
											   'as' => 'transaction']],
					  ['$unwind' => '$transaction'],
					  ['$lookup' => ['from' => MDB_PEOPLE,
											   'localField' => 'driver_id',
											   'foreignField' => '_id',
											   'as' => 'people']],
					  ['$unwind' => '$people'],
					  ['$lookup' => ['from' => MDB_TAXI,
											   'localField' => 'taxi_id',
											   'foreignField' => '_id',
											   'as' => 'taxi']],
					  ['$unwind' => '$taxi'],
					  ['$lookup'=>['from' => MDB_MOTOR_MODEL,
								  'localField' => 'taxi.taxi_model',
								  'foreignField' => '_id',
								  'as' => 'mm']],
					  ['$unwind' => '$mm'],
					  ['$project'=>['place'=>'$current_location',
											'pickup_time'=>'$pickup_time',
											'actual_pickup_time'=>'$actual_pickup_time',
											'drop_location'=>'$drop_location',
											'pickup_latitude'=>'$pickup_latitude',
											'pickup_longitude'=>'$pickup_longitude',
											'drop_latitude'=>'$drop_latitude',
											'drop_longitude'=>'$drop_longitude',
											'notes_driver'=>'$notes_driver',
											'fare'=>'$transaction.fare',
											'drivername'=> ['$concat'=>['$people.name',' ','$people.lastname']],
											'driverimage'=>'$people.photo',
											'taxi_no'=>'$taxi.taxi_no',
											'model'=>'$mm.model_name',
											'payment_name'=>'$payment_modules.pay_mod_name',
											'trip_id'=>'$_id',
											'jobreferral'=>'$transaction._id',
											'createdate'=>'$createdate',
											'passengers_id'=>'$passengers_id',
											'travel_status'=>'$travel_status',
											'driver_reply'=>'$driver_reply',
											'msg_status'=>'$msg_status',
											'distance'=>'$distance',
											'metric'=>'$transaction.distance_unit',
											'driver_image'=>'$people.profile_picture',
											'model_name' => '$mm.model_name',
											'waitingtime' => '$waitingtime',
											'taxi_no' => '$taxi.taxi_no',
											'drivername' => ['$concat' => ['$people.name', ' ', '$people.lastname']],
											'account_type' => '$passengers.account_type',
											'account_type_name' => '$account.account_type'
											
											]],
					  
					  ['$sort' => ['_id'=>-1]]			  
					];
		$pagination_arr = [];
		if ($pagination == 1) {
			$pagination_arr = [['$skip' => (int)$start],['$limit' => (int)$limit]];
        }
		$arguments = array_merge($args,$pagination_arr);

        $travel_status = $status;
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
		
		return (isset($result['result'])) ? $result['result'] : [];
    }
    /*********************************************************************************************/
    /****************************  Driver enhancements - Edited by sakthivel ********************/
    /*************************** Driver Registration ********************************/
    /**Driver Account Signup**/
    public function add_d_account_details($val, $otp = null, $referral_code, $devicetoken = "", $deviceid = "", $devicetype = "")
    {
        //$username = Html::chars($val['name']);
        $password        = text::random($type = 'alnum', $length = 6);
        $activation_key  = Commonfunction::admin_random_user_password_generator();
        $current_time    = convert_timezone('now', TIMEZONE);
        $current_date    = explode(' ', $current_time);
        $start_time      = $current_date[0] . ' 00:00:01';
        $end_time        = $current_date[0] . ' 23:59:59';
        $fieldname_array = [
            'name',
            'email',
            'password',
            'otp',
            'phone',
            'driver_referral_code',
            'user_type',
            'status',
            'created_date',
            'updated_date',
            'company_id',
            'booking_limit'
        ];
        $values_array    = [
            '',
            $val['email'],
            md5($val['password']),
            $otp,
            $val['phone'],
            $referral_code,
            'D',
            'D',
            $current_time,
            $current_time,
            '',
            '100'
        ];
        $result          = DB::insert(PEOPLE, $fieldname_array)->values($values_array)->execute();
        if ($result) {
            $email = DB::select()->from(PEOPLE)->where('email', '=', $val['email'])->execute()->as_array();
            if ($devicetoken != "") {
                $update_array               = [
                    "device_token" => $devicetoken,
                    "device_id" => $deviceid,
                    "device_type" => $devicetype
                ];
                $update_device_token_result = DB::update(PEOPLE)->set($update_array)->where('email', '=', $val['email'])->execute();
            }
            return 1;
        } else {
            return 0;
        }
    }
    // ** Add Taxi Details **//
    //&email=senthilkumar.a@ndot.in&company_email=&tvdlno=&taxi_company=&taxi_model=&referral_code=&bank_name=&bank_account_no=
    public function add_taxi_details($array, $referred_driver_id = null)
    {
        try {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_time; //$current_date[0].' 00:00:01';
                $end_time     = $current_date[0];
                $edate        = strtotime($end_time);
                $new_date     = strtotime('+ 1 year', $edate);
                $end_time     = date('Y-m-d', $new_date) . ' 23:59:59';
                $date         = $current_date[0] . ' %';
                //$end = date('Y-m-d', strtotime('+5 years'));
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = $current_time; //date('Y-m-d').' 00:00:01';
                $end_time     = date('Y-m-d', strtotime('+1 years')) . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
            //echo $start_time;
            //echo $end_time;
            //echo $end_time = date('Y-m-d', strtotime('+1 years')).' 23:59:59';
            //exit;
            $d_email = $array['email'];
            $data    = DB::select('*')->from(PEOPLE)->where(PEOPLE . '.email', '=', $d_email)->where(PEOPLE . '.user_type', '=', 'D')->as_object()->execute();
            if (count($data) > 0) {
                $driver_id = $data[0]->id;
                $cname     = $data[0]->name;
            } else {
                $driver_id = '';
                $cname     = '';
            }
            //echo $driver_id;exit;
            $company_email      = $array['email'];
            $tvdlno             = $array['tvdlno'];
            $plate_no           = $array['plate_no'];
            $company_name       = $array['taxi_company'];
            $taxi_model         = $array['taxi_model'];
            $bank_name          = $array['bank_name'];
            $bank_account_no    = $array['bank_account_no'];
            $company_owner_name = $array['taxi_company'];
            $comp_password      = text::random($type = 'alnum', $length = 5);
            /** Insert Owner Details *******/
            $owner_result       = DB::insert(PEOPLE, [
                'name',
                'email',
                'password',
                'user_type',
                'login_country',
                'login_state',
                'login_city',
                'status'
            ])->values([
                $company_owner_name,
                $company_email,
                md5($comp_password),
                'C',
                DEFAULT_COUNTRY,
                DEFAULT_STATE,
                DEFAULT_CITY,
                'A'
            ])->execute();
            $user_id            = $owner_result[0];
            /** Insert Company Details *******/
            $comp_result        = DB::insert(COMPANY, [
                'company_name',
                'bankname',
                'bankaccount_no',
                'time_zone',
                'userid',
                'company_country',
                'company_state',
                'company_city',
                'company_status'
            ])->values([
                $company_name,
                $bank_name,
                $bank_account_no,
                TIMEZONE,
                $user_id,
                DEFAULT_COUNTRY,
                DEFAULT_STATE,
                DEFAULT_CITY,
                'A'
            ])->execute();
            $company_id         = $comp_result[0];
            if ($company_id != "") {
                /** Insert Company Package *************/
                $package_name       = 'Unlimited';
                $no_of_taxi         = $no_of_driver = 1;
                $days               = 30;
                $amount             = 0;
                $package_typ        = 'T';
                $get_packagedetails = $this->payment_packagedetails(1);
                if (count($get_packagedetails) > 0) {
                    $package_name = $get_packagedetails[0]['package_name'];
                    $no_of_taxi   = $get_packagedetails[0]['no_of_taxi'];
                    $no_of_driver = $get_packagedetails[0]['no_of_driver'];
                    $days         = $get_packagedetails[0]['days_expire'];
                    $amount       = $get_packagedetails[0]['package_price'];
                    $package_type = $get_packagedetails[0]['package_type'];
                }
                $userid           = $user_id;
                // Convert Time				
                $expirydate       = $current_time;
                $result           = DB::insert(PACKAGE_REPORT, [
                    'upgrade_companyid',
                    'upgrade_packageid',
                    'upgrade_packagename',
                    'upgrade_no_taxi',
                    'upgrade_no_driver',
                    'upgrade_expirydate',
                    'upgrade_ack',
                    'upgrade_capture',
                    'upgrade_amount',
                    'upgrade_type',
                    'upgrade_by',
                    'check_expirydate',
                    'check_package_type'
                ])->values([
                    $company_id,
                    '1',
                    $package_name,
                    $no_of_taxi,
                    $no_of_driver,
                    $expirydate,
                    'Success',
                    '1',
                    $amount,
                    'D',
                    $userid,
                    $expirydate,
                    $package_type
                ])->execute();
                /** Insert Company Info Details *******/
                $comp_info_result = DB::insert(COMPANYINFO, [
                    'company_cid',
                    'cancellation_fare',
                    'company_currency',
                    'company_currency_format',
                    'company_time_zone'
                ])->values([
                    $company_id,
                    '0',
                    CURRENCY,
                    CURRENCY_FORMAT,
                    TIMEZONE
                ])->execute();
                $company_info_id  = $comp_info_result[0];
                /** Insert Taxi Details *******/
                $taxi_type        = '1';
                $taxi_result      = DB::insert(TAXI, [
                    'taxi_no',
                    'taxi_type',
                    'taxi_model',
                    'taxi_company',
                    'taxi_country',
                    'taxi_state',
                    'taxi_city'
                ])->values([
                    $plate_no,
                    $taxi_type,
                    $taxi_model,
                    $company_id,
                    DEFAULT_COUNTRY,
                    DEFAULT_STATE,
                    DEFAULT_CITY
                ])->execute();
                $taxi_id          = $taxi_result[0];
                /*** Insert Model fare for the company ***********/
                $adminmodeldata   = DB::select('*')->from(MOTORMODEL)->where(MOTORMODEL . '.model_id', '=', $taxi_model)->execute()->as_array();
                if (count($adminmodeldata) > 0) {
                    foreach ($adminmodeldata as $values) {
                        $model_id          = $values['model_id'];
                        $motor_mid         = $values['motor_mid'];
                        $base_fare         = $values['base_fare'];
                        $min_km            = $values['min_km'];
                        $min_fare          = $values['min_fare'];
                        $cancellation_fare = $values['cancellation_fare'];
                        $below_above_km    = $values['below_above_km'];
                        $below_km          = $values['below_km'];
                        $above_km          = $values['above_km'];
                        $night_charge      = $values['night_charge'];
                        $night_timing_from = $values['night_timing_from'];
                        $night_timing_to   = $values['night_timing_to'];
                        $night_fare        = $values['night_fare'];
                        $waiting_time      = $values['waiting_time'];
                    }
                    $result = DB::insert(COMPANY_MODEL_FARE, [
                        'model_id',
                        'company_cid',
                        'motor_mid',
                        'base_fare',
                        'min_fare',
                        'cancellation_fare',
                        'below_km',
                        'above_km',
                        'night_charge',
                        'night_timing_from',
                        'night_timing_to',
                        'night_fare',
                        'min_km',
                        'below_above_km',
                        'waiting_time'
                    ])->values([
                        $model_id,
                        $company_id,
                        $motor_mid,
                        $base_fare,
                        $min_fare,
                        $cancellation_fare,
                        $below_km,
                        $above_km,
                        $night_charge,
                        $night_timing_from,
                        $night_timing_to,
                        $night_fare,
                        $min_km,
                        $below_above_km,
                        $waiting_time
                    ])->execute();
                }
                /** Insert Taxi Mappning Details *******/
                $taxi_mapping_result          = DB::insert(TAXIMAPPING, [
                    'mapping_driverid',
                    'mapping_taxiid',
                    'mapping_companyid',
                    'mapping_countryid',
                    'mapping_stateid',
                    'mapping_cityid',
                    'mapping_startdate',
                    'mapping_enddate',
                    'mapping_createdby'
                ])->values([
                    $driver_id,
                    $taxi_id,
                    $company_id,
                    DEFAULT_COUNTRY,
                    DEFAULT_STATE,
                    DEFAULT_CITY,
                    $start_time,
                    $end_time,
                    1
                ])->execute();
                /** Insert Taxi Additional Details *******/
                $taxi_additional_result       = DB::insert(ADDFIELD, [
                    'taxi_id'
                ])->values([
                    $taxi_id
                ])->execute();
                /**********  Insert Driver status in DRIVER table************/
                $driver_status_result         = DB::insert(DRIVER, [
                    'driver_id',
                    'status',
                    'shift_status'
                ])->values([
                    $driver_id,
                    'F',
                    'OUT'
                ])->execute();
                /**************************************************************/
                $d_update_array              = [
                    "company_id" => $company_id,
                    "driver_license_id" => $tvdlno
                ];
                $update_driver_company_result = DB::update(PEOPLE)->set($d_update_array)->where('email', '=', $d_email)->where(PEOPLE . '.user_type', '=', 'D')->execute();
                $update_owner_company_result  = DB::update(PEOPLE)->set($d_update_array)->where('email', '=', $company_email)->where('user_type', '=', 'C')->execute();
                //print_r($ref_result);														
                return 1;
            } else {
                return 2;
            }
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    //Save Driver Personal Profile Data
    public function save_driver_personaldata($array)
    {
        //print_r($array);
        //exit;
        try {
            $d_email = $array['email'];
            $data    = DB::select('id')->from(PEOPLE)->where(PEOPLE . '.email', '=', $d_email)->where(PEOPLE . '.user_type', '=', 'D')->as_object()->execute();
            if (count($data) > 0) {
                $driver_id = $data[0]->id;
            } else {
                $driver_id = '';
            }
            $result = DB::update(PEOPLE)->set($array)->where('email', '=', $array['email'])->execute();
            /** Insert Referral Details ******
            if($referred_driver_id != "")
            {
            $ref_result = DB::insert(DRIVER_REF_DETAILS, array('referred_driver_id','registered_driver_id','referral_status'))
            ->values(array($referred_driver_id,$driver_id,'1'))
            ->execute();
            }	
            */
            return 0;
        }
        catch (Kohana_Exception $e) {
            //echo $e->getMessage();
            return 1;
        }
    }
    public function check_tvdlno_people($tvdlno = "")
    {
        $sql    = "SELECT driver_license_id FROM " . PEOPLE . " WHERE driver_license_id='$tvdlno'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function check_plateno_people($tvdlno = "")
    {
        $sql    = "SELECT taxi_no FROM " . TAXI . " WHERE taxi_no='$tvdlno'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // //Check tvdl no already exist 
    public function check_owner_list($email = "", $user_type = "")
    {
        $sql    = "SELECT id FROM " . PEOPLE . " JOIN  " . COMPANY . " ON (" . COMPANY . ".cid = " . PEOPLE . ".company_id) WHERE " . PEOPLE . ".email='$email' and user_type='$user_type'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //Driver Profile
    public function driver_profile_by_email($email)
    {
        $query  = "SELECT id,salutation,name,lastname,email,address,password,otp,photo,device_type,device_token,login_status,user_type,driver_referral_code,notification_setting,company_id,driver_license_id,profile_picture FROM " . PEOPLE . " WHERE email = '$email' AND user_type = 'D' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return 1;
        }
    }
    // Function for get driver sales by week
    public function get_driver_sales_by_week($summary, $pagination, $booktype, $id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $startdate, $enddate)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $startdate . ' 00:00:01';
        $end_time     = $enddate . ' 23:59:59';
        $condition    = "";
        $condition    = " AND passengers_log.createdate >='" . $start_time . "' and passengers_log.createdate <= '" . $end_time . "'";
        if ($booktype == 2) {
            $condition .= " AND passengers_log.booking_from = '$booktype'";
        } else {
            $condition .= " AND passengers_log.booking_from != 2 ";
        }
        $selection = "";
        if ($summary == 1) {
            $selection = "ROUND(sum(`transacation`.`amt`),2) as total";
        } else {
            $selection = "`passengers_log`.`pickup_time`, `passengers_log`.`passengers_log_id`, `passengers_log`.`current_location` AS `pickup_location`, `passengers_log`.`drop_location`, `passengers_log`.`rating`, IFNULL(ROUND(`transacation`.`amt`,2),0) as amt";
        }
        if ($pagination == 1) {
            $orderby = "ORDER BY `passengers_log`.`passengers_log_id` DESC LIMIT $start,$limit";
        } else {
            $orderby = "ORDER BY `passengers_log`.`passengers_log_id` DESC";
        }
        $sql    = "SELECT $selection FROM `passengers_log` LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '$travel_status' $condition ORDER BY `passengers_log`.`passengers_log_id` DESC";
        //echo $sql;echo '<br>';echo '<br>';
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        // print_r($result);           exit;
        return $result;
    }
    //******* Get Driver Expense by Week *********************************/
    public function get_driver_expense_by_week($summary, $pagination, $expense_type_id = "", $driver_id, $start, $limit, $startdate, $enddate)
    {
        try {
            $current_time = convert_timezone('now', TIMEZONE);
            $current_date = explode(' ', $current_time);
            $start_time   = $startdate . ' 00:00:01';
            $end_time     = $enddate . ' 23:59:59';
            $condition    = "";
            $condition    = " AND " . DRIVER_EXP . ".expense_date >='" . $start_time . "' and " . DRIVER_EXP . ".expense_date <= '" . $end_time . "'";
            if ($expense_type_id != "") {
                $condition .= " AND " . DRIVER_EXP . ".expense_type_id ='" . $expense_type_id . "'";
            }
            $selection = "";
            if ($summary == 1) {
                $selection = "ROUND(sum(" . DRIVER_EXP . ".`expense_amount`),2) as total_amt," . DRIVER_EXP . ".`expense_date`," . DRIVER_EXP . ".expense_type_id";
            } else {
                $selection = "" . DRIVER_EXP . ".expense_id," . DRIVER_EXP . ".fromdate," . DRIVER_EXP . ".todate," . DRIVER_EXP . ".`expense_date`, " . DRIVER_EXP . ".`expense_type_id`, " . DRIVER_EXP . ".`expense_amount`," . DRIVER_EXP . ".`recurrent`," . DRIVER_EXP . ".`notes`";
            }
            if ($pagination == 1) {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id` DESC LIMIT $start,$limit";
            } else {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id` DESC";
            }
            $sql    = "SELECT $selection FROM " . DRIVER_EXP . " LEFT JOIN " . EXP_TYPE . " ON (" . EXP_TYPE . ".`expense_type_id` = " . DRIVER_EXP . ".`expense_type_id`) WHERE " . DRIVER_EXP . ".`expense_driver_id` = '$driver_id' $condition $orderby";
            //echo $sql;echo '<br>';echo '<br>';
            $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
            return $result;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    //Function used to get all driver logs with transactions
    public function get_driver_sales_by_month($summary, $booktype, $id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $month, $year)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        //$start_time = $date.' 00:00:01';
        //$end_time = $date.' 23:59:59';
        $condition    = "";
        $condition    = " and MONTH( passengers_log.createdate ) = '$month' AND YEAR( passengers_log.createdate) = '$year'";
        if ($booktype == 2) {
            $condition .= " AND passengers_log.booking_from = '$booktype'";
        } else {
            $condition .= " AND passengers_log.booking_from != 2 ";
        }
        $selection = "";
        if ($summary == 1) {
            $selection = "ROUND(sum(`transacation`.`amt`),2) as total";
            $orderby   = "ORDER BY `passengers_log`.`passengers_log_id` DESC";
        } else {
            $selection = "`passengers_log`.`pickup_time`, `passengers_log`.`passengers_log_id`, `passengers_log`.`current_location` AS `pickup_location`, `passengers_log`.`drop_location`, `passengers_log`.`rating`, IFNULL(ROUND(`transacation`.`amt`,2),0) as amt";
            $orderby   = "ORDER BY `passengers_log`.`passengers_log_id` DESC LIMIT $start,$limit";
        }
        //LEFT JOIN `passengers` ON (`passengers_log`.`passengers_id` = `passengers`.`id`)
        $sql    = "SELECT $selection FROM `passengers_log`  LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '$travel_status' $condition $orderby";
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        return $result;
        //$condition = "AND pg.createdate >='".$start_time."' and pg.createdate <= '".$end_time."'"; 									
        //print_r($result);           exit;
        return $result;
    }
    //******* Get Driver Expense by Month *********************************/
    public function get_driver_expense_by_month($summary, $expense_type_id, $driver_id, $start, $limit, $month, $year)
    {
        try {
            $current_time = convert_timezone('now', TIMEZONE);
            $current_date = explode(' ', $current_time);
            //$start_time = $date.' 00:00:01';
            //$end_time = $date.' 23:59:59';
            $condition    = "";
            $condition    = " and MONTH( " . DRIVER_EXP . ".expense_date ) = $month AND YEAR( " . DRIVER_EXP . ".expense_date) = $year";
            if ($expense_type_id != "") {
                $condition .= " AND " . DRIVER_EXP . ".expense_type_id ='" . $expense_type_id . "'";
            }
            $selection = "";
            $selection = "" . DRIVER_EXP . ".expense_id," . DRIVER_EXP . ".fromdate," . DRIVER_EXP . ".todate," . DRIVER_EXP . ".`expense_date`, " . DRIVER_EXP . ".`expense_type_id`, " . DRIVER_EXP . ".`expense_amount`," . DRIVER_EXP . ".`recurrent`," . DRIVER_EXP . ".`notes`";
            if ($summary == 1) {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id`";
            } else {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id` DESC LIMIT $start,$limit";
            }
            $sql    = "SELECT $selection FROM " . DRIVER_EXP . " LEFT JOIN " . EXP_TYPE . " ON (" . EXP_TYPE . ".`expense_type_id` = " . DRIVER_EXP . ".`expense_type_id`) WHERE " . DRIVER_EXP . ".`expense_driver_id` = '$driver_id' $condition $orderby";
            //echo $sql;
            $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
            return $result;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    //Function used to get all driver logs with transactions
    public function get_driver_sales_by_date($summary, $pagination, $booktype, $id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $date)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $date . ' 00:00:01';
        $end_time     = $date . ' 23:59:59';
        $condition    = "";
        $condition    = " AND passengers_log.createdate >='" . $start_time . "' and passengers_log.createdate <= '" . $end_time . "'";
        if ($booktype == 2) {
            $condition .= " AND passengers_log.booking_from = '$booktype'";
        } else {
            $condition .= " AND passengers_log.booking_from != 2 ";
        }
        $selection = "";
        if ($summary == 1) {
            $selection = "ROUND(sum(`transacation`.`amt`),2) as total";
        } else {
            $selection = "`passengers_log`.`pickup_time`, `passengers_log`.`passengers_log_id`, `passengers_log`.`current_location` AS `pickup_location`, `passengers_log`.`drop_location`, `passengers_log`.`rating`, IFNULL(ROUND(`transacation`.`amt`,2),0) as amt";
        }
        if ($pagination == 1) {
            $orderby = "ORDER BY `passengers_log`.`passengers_log_id` DESC LIMIT $start,$limit";
        } else {
            $orderby = "ORDER BY `passengers_log`.`passengers_log_id` DESC";
        }
        $sql    = "SELECT $selection FROM `passengers_log` LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '$travel_status' $condition $orderby";
        //echo $sql;echo '<br>';echo '<br>';
        $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
        // print_r($result);           exit;
        return $result;
    }
    //******* Get Driver Expense by Date *********************************/
    public function get_driver_expense_by_date($summary, $pagination, $expense_type_id = "", $driver_id, $start, $limit, $date)
    {
        try {
            $current_time = convert_timezone('now', TIMEZONE);
            $current_date = explode(' ', $current_time);
            $start_time   = $date . ' 00:00:01';
            $end_time     = $date . ' 23:59:59';
            $condition    = "";
            $condition    = " AND " . DRIVER_EXP . ".expense_date >='" . $start_time . "' and " . DRIVER_EXP . ".expense_date <= '" . $end_time . "'";
            if ($expense_type_id != "") {
                $condition .= " AND " . DRIVER_EXP . ".expense_type_id ='" . $expense_type_id . "'";
            }
            $selection = "";
            if ($summary == 1) {
                $selection = "ROUND(sum(" . DRIVER_EXP . ".`expense_amount`),2) as total_amt,DAYNAME(" . DRIVER_EXP . ".`expense_date`) as expense_day," . DRIVER_EXP . ".`expense_date`";
            } else {
                $selection = "" . DRIVER_EXP . ".expense_id," . DRIVER_EXP . ".fromdate," . DRIVER_EXP . ".todate," . DRIVER_EXP . ".`expense_date`, " . DRIVER_EXP . ".`expense_type_id`, ROUND(" . DRIVER_EXP . ".`expense_amount`,2) as expense_amount ," . DRIVER_EXP . ".`recurrent`," . DRIVER_EXP . ".`notes`";
            }
            if ($pagination == 1) {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id` DESC LIMIT $start,$limit";
            } else {
                $orderby = "ORDER BY " . DRIVER_EXP . ".`expense_id` DESC";
            }
            $sql    = "SELECT $selection FROM " . DRIVER_EXP . " LEFT JOIN " . EXP_TYPE . " ON (" . EXP_TYPE . ".`expense_type_id` = " . DRIVER_EXP . ".`expense_type_id`) WHERE " . DRIVER_EXP . ".`expense_driver_id` = '$driver_id' $condition $orderby";
            //echo $sql;echo '<br>';
            $result = Db::query(Database::SELECT, $sql)->as_object()->execute();
            return $result;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    public function get_expensetype_list()
    {
        $sql    = "select expense_type_id,expense_name from " . EXP_TYPE . "";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    //******* Get Driver Expense by Date *********************************/
    //driver_id=16&pickup_location=gandhipuram,coimbatore&drop_location=marudhamalai,coimbatore&distance=10&fare=100.32&tips=10.00&travel_date=2012-12-26 15:16:00
    public function save_streetpickup($street_array)
    {
        try {
            $driver_id       = $street_array['driver_id'];
            $pickup_location = $street_array['pickup_location'];
            $drop_location   = $street_array['drop_location'];
            $distance        = $street_array['distance'];
            $fare            = round($street_array['fare'], 2);
            $tips            = round($street_array['tips'], 2);
            $travel_date     = $street_array['travel_date'];
            $taxi_id         = $company_id = "";
            $gettaxidetails  = $this->get_assignedtaxi_list($driver_id);
            if (count($gettaxidetails) > 0) {
                $taxi_id    = $gettaxidetails[0]['taxi_id'];
                $company_id = $gettaxidetails[0]['mapping_companyid'];
            }
            /************** Insert into pass log table ***************/
            $log_result        = DB::insert(PASSENGERS_LOG, [
                'driver_id',
                'taxi_id',
                'company_id',
                'current_location',
                'drop_location',
                'pickup_time',
                'bookingtype',
                'travel_status',
                'driver_reply',
                'msg_status',
                'createdate',
                'booking_from'
            ])->values([
                $driver_id,
                $taxi_id,
                $company_id,
                $pickup_location,
                $drop_location,
                $travel_date,
                '1',
                '1',
                'A',
                'R',
                $travel_date,
                '2'
            ])->execute();
            //print_r($log_result);
            $passengers_log_id = $log_result[0];
            $amount            = $fare + $tips;
            /*********** Insert into Transaction table *****************/
            $siteinfo_details  = $this->siteinfo_details();
            $Commonmodel       = Model::factory('Commonmodel');
            $update_commission = $Commonmodel->update_commission($passengers_log_id, $amount, $siteinfo_details[0]['admin_commission']);
            $trans_result      = DB::insert(TRANS, [
                'passengers_log_id',
                'distance',
                'fare',
                'tips',
                'payment_type',
                'amt',
                'trans_packtype',
                'admin_amount',
                'company_amount'
            ])->values([
                $passengers_log_id,
                $distance,
                $fare,
                $tips,
                '1',
                $amount,
                $update_commission['trans_packtype'],
                $update_commission['admin_commission'],
                $update_commission['company_commission']
            ])->execute();
            /******************************************************************/
            return 1;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    //save_expense 
    public function save_expense($add_exp_array)
    {
        try {
            $expense_driver_id = $add_exp_array['expense_driver_id'];
            $expense_amount    = $add_exp_array['expense_amount'];
            $expense_type_id   = $add_exp_array['expense_type_id'];
            $current_time      = convert_timezone('now', TIMEZONE);
            $current_date      = explode(' ', $current_time);
            $expense_date      = $add_exp_array['expense_date'] . ' ' . $current_date[1];
            //echo $expense_date;exit;
            $recurring         = $add_exp_array['recurring'];
            $notes             = $add_exp_array['notes'];
            $fromdate          = $add_exp_array['fromdate'];
            $todate            = $add_exp_array['todate'];
            $payment_type      = "Cash";
            if ($recurring == 0) {
                $exp_result = DB::insert(DRIVER_EXP, [
                    'expense_driver_id',
                    'expense_amount',
                    'expense_type_id',
                    'payment_type',
                    'recurrent',
                    'notes',
                    'expense_date'
                ])->values([
                    $expense_driver_id,
                    $expense_amount,
                    $expense_type_id,
                    $payment_type,
                    $recurring,
                    $notes,
                    $expense_date
                ])->execute();
            } else {
                for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                    //echo date('l Y-m-d', $i);
                    $expense_date = date('Y-m-d', $i);
                    $check_date   = date('d', $i);
                    $check_month  = date('m', $i);
                    $check_year   = date('Y', $i);
                    $fromdate     = date('Y-m-d', strtotime($fromdate)) . ' ' . $current_date[1];
                    $todate       = date('Y-m-d', strtotime($todate)) . ' ' . $current_date[1];
                    /** check valid date or not and check exclus date **/
                    //if(checkdate($check_month,$check_date,$check_year) && !in_array($booking_date,$remove_date))		
                    if (checkdate($check_month, $check_date, $check_year)) {
                        $expense_date = $expense_date . ' ' . $current_date[1];
                        //echo '<br>';
                        $exp_result   = DB::insert(DRIVER_EXP, [
                            'expense_driver_id',
                            'expense_amount',
                            'expense_type_id',
                            'payment_type',
                            'recurrent',
                            'notes',
                            'expense_date',
                            'fromdate',
                            'todate'
                        ])->values([
                            $expense_driver_id,
                            $expense_amount,
                            $expense_type_id,
                            $payment_type,
                            $recurring,
                            $notes,
                            $expense_date,
                            $fromdate,
                            $todate
                        ])->execute();
                    }
                }
            }
            return 1;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    public function edit_expense($add_exp_array)
    {
        try {
            $expense_id        = $add_exp_array['expense_id'];
            $expense_driver_id = $add_exp_array['expense_driver_id'];
            $expense_amount    = $add_exp_array['expense_amount'];
            $expense_type_id   = $add_exp_array['expense_type_id'];
            $current_time      = convert_timezone('now', TIMEZONE);
            $current_date      = explode(' ', $current_time);
            $expense_date      = $add_exp_array['expense_date'] . ' ' . $current_date[1];
            $recurring         = $add_exp_array['recurring'];
            $notes             = $add_exp_array['notes'];
            $fromdate          = $add_exp_array['fromdate'];
            $todate            = $add_exp_array['todate'];
            $payment_type      = "Cash";
            if ($recurring == 0) {
                $update_array  = [
                    "expense_amount" => $expense_amount,
                    "expense_type_id" => $expense_type_id,
                    "recurrent" => $recurring,
                    "notes" => $notes,
                    "expense_date" => $expense_date,
                    "fromdate" => '0000:00:00 00:00:00',
                    "todate" => '0000:00:00 00:00:00'
                ];
                $update_result = DB::update(DRIVER_EXP)->set($update_array)->where('expense_id', '=', $expense_id)->where('expense_driver_id', '=', $expense_driver_id)->execute();
            } else {
                //echo strtotime($fromdate);
                //echo '<br>';
                //echo strtotime($todate);
                //echo '<br>';
                for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                    //echo date('l Y-m-d', $i);						    
                    $expense_date = date('Y-m-d', $i);
                    //echo '<br>';
                    $check_date   = date('d', $i);
                    $check_month  = date('m', $i);
                    $check_year   = date('Y', $i);
                    $fromdate     = date('Y-m-d', strtotime($fromdate)) . ' ' . $current_date[1];
                    $todate       = date('Y-m-d', strtotime($todate)) . ' ' . $current_date[1];
                    /** check valid date or not and check exclus date **/
                    //if(checkdate($check_month,$check_date,$check_year) && !in_array($booking_date,$remove_date))		
                    if (checkdate($check_month, $check_date, $check_year)) {
                        $expense_datetime = $expense_date . ' ' . $current_date[1];
                        //if(strtotime($expense_date) > strtotime($current_time) )
                        if (strtotime($expense_date) >= strtotime($current_time)) {
                            //echo $expense_date;
                            //echo '<br>';
                            $delete_query = "DELETE FROM " . DRIVER_EXP . " WHERE " . DRIVER_EXP . ".expense_driver_id = $expense_driver_id and " . DRIVER_EXP . ".`expense_date` > '$current_time'";
                            $result       = Db::query(Database::DELETE, $delete_query)->execute();
                        }
                    }
                }
                for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                    //echo date('l Y-m-d', $i);						    
                    $expense_date = date('Y-m-d', $i);
                    //echo '<br>';
                    $check_date   = date('d', $i);
                    $check_month  = date('m', $i);
                    $check_year   = date('Y', $i);
                    $fromdate     = date('Y-m-d', strtotime($fromdate)) . ' ' . $current_date[1];
                    $todate       = date('Y-m-d', strtotime($todate)) . ' ' . $current_date[1];
                    /** check valid date or not and check exclus date **/
                    //if(checkdate($check_month,$check_date,$check_year) && !in_array($booking_date,$remove_date))		
                    if (checkdate($check_month, $check_date, $check_year)) {
                        $expense_datetime = $expense_date . ' ' . $current_date[1];
                        //print_r($delete_query);
                        //exit;
                        /*$update_array = array(
                        "expense_amount"=>$expense_amount,
                        "expense_type_id"=>$expense_type_id,
                        "recurring"=>$recurring,
                        "notes"=>$notes,
                        "expense_date"=>$expense_datetime,						
                        );*/
                        //echo $current_time;
                        //echo '<br>';
                        if (strtotime($expense_date) > strtotime($current_time)) {
                            $exp_result = DB::insert(DRIVER_EXP, [
                                'expense_driver_id',
                                'expense_amount',
                                'expense_type_id',
                                'payment_type',
                                'recurrent',
                                'notes',
                                'expense_date',
                                'fromdate',
                                'todate'
                            ])->values([
                                $expense_driver_id,
                                $expense_amount,
                                $expense_type_id,
                                $payment_type,
                                $recurring,
                                $notes,
                                $expense_datetime,
                                $fromdate,
                                $todate
                            ])->execute();
                            //print_r($exp_result);
                        }
                    }
                }
            }
            return 1;
        }
        catch (Kohana_Exception $e) {
            //print_r($e);
            return -1;
        }
    }
    public function delete_expense($add_exp_array)
    {
        $expense_id   = $add_exp_array['expense_id'];
        $delete_query = "DELETE FROM " . DRIVER_EXP . " WHERE " . DRIVER_EXP . ".expense_id = $expense_id";
        $result       = Db::query(Database::DELETE, $delete_query)->execute();
        return 1;
    }
     public function delete_rejected_trips($passenger_id, $company_all_currenttimestamp)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $currentdate  = $datetime[0] . ' 00:00:01';
		$match = ['passengers_id'=>(int)$passenger_id,'createdate'=>['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]];
		$result = $this->mongo_db->remove(MDB_REJECTION_HISTORY,$match);		
        return (isset($result['err'])?0:1);
    }
    public function delete_rejected_trips_old($passenger_id, $company_all_currenttimestamp)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $currentdate  = $datetime[0] . ' 00:00:01';
        $passenger_id = $passenger_id;
        $delete_query = "DELETE FROM " . DRIVER_REJECTION . " WHERE " . DRIVER_REJECTION . ".passengers_id = '$passenger_id' and createdate >= '$currentdate'";
        $result       = Db::query(Database::DELETE, $delete_query)->execute();
        return 1;
    }
    public function delete_card($delete_card_array)
    {
        $card_id      = $delete_card_array['passenger_cardid'];
        $delete_query = "DELETE FROM " . PASSENGERS_CARD_DETAILS . " WHERE " . PASSENGERS_CARD_DETAILS . ".passenger_cardid = $card_id";
        $result       = Db::query(Database::DELETE, $delete_query)->execute();
        return 1;
    }
    // Get target by current date 
    public function get_target($target_date, $target_driver_id)
    {
        //DATE_FORMAT(fromdate,'%Y-%m-%d') as fromdate,DATE_FORMAT(todate,'%Y-%m-%d') as todate
        $sql    = "select target_id,target_amount,recurrent,fromdate,todate from " . DRIVER_TARGET . " where target_driver_id = '$target_driver_id' and target_date = '$target_date'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function check_today_target($target_date, $target_driver_id)
    {
        $sql    = "select target_id from " . DRIVER_TARGET . " where target_driver_id = '$target_driver_id' and target_date = '$target_date'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //save_target &target_driver_id=16&target_amount=100&target_date=2012-12-26 15:16:00
    public function save_target($add_target_array)
    {
        $target_driver_id = $add_target_array['target_driver_id'];
        $target_amount    = $add_target_array['target_amount'];
        //$target_date = $add_target_array['target_date'];
        $target_date      = convert_timezone('now', TIMEZONE);
        $createdate       = convert_timezone('now', TIMEZONE);
        $current_date     = explode(' ', $target_date);
        //$expense_date = $add_exp_array['expense_date']. $current_date[1];
        $recurring        = $add_target_array['recurring'];
        $fromdate         = $add_target_array['fromdate'];
        $todate           = $add_target_array['todate'];
        if ($recurring == 0) {
            $target_date = date('Y-m-d', strtotime($add_target_array['target_date']));
            $exp_result  = DB::insert(DRIVER_TARGET, [
                'target_driver_id',
                'target_amount',
                'recurrent',
                'target_date',
                'createdate'
            ])->values([
                $target_driver_id,
                $target_amount,
                $recurring,
                $target_date,
                $createdate
            ])->execute();
        } else {
            for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                //echo date('l Y-m-d', $i);
                $target_date = date('Y-m-d', $i);
                $check_date  = date('d', $i);
                $check_month = date('m', $i);
                $check_year  = date('Y', $i);
                /** check valid date or not and check exclus date **/
                //if(checkdate($check_month,$check_date,$check_year) && !in_array($booking_date,$remove_date))		
                if (checkdate($check_month, $check_date, $check_year)) {
                    //if(strtotime($target_date) > strtotime($current_date[0]) )
                    //{
                    $target_date = $target_date . ' ' . $current_date[1];
                    //echo '<br>';
                    $target_date = date('Y-m-d', strtotime($target_date));
                    $fromdate    = date('Y-m-d', strtotime($fromdate)) . ' ' . $current_date[1];
                    $todate      = date('Y-m-d', strtotime($todate)) . ' ' . $current_date[1];
                    $exp_result  = DB::insert(DRIVER_TARGET, [
                        'target_driver_id',
                        'target_amount',
                        'recurrent',
                        'target_date',
                        'fromdate',
                        'todate',
                        'createdate'
                    ])->values([
                        $target_driver_id,
                        $target_amount,
                        $recurring,
                        $target_date,
                        $fromdate,
                        $todate,
                        $createdate
                    ])->execute();
                    //}
                }
            }
        }
        return $exp_result;
    }
    //save_target &target_driver_id=16&target_amount=100&target_date=2012-12-26 15:16:00
    public function update_target($add_target_array)
    {
        $target_driver_id = $add_target_array['target_driver_id'];
        $target_amount    = $add_target_array['target_amount'];
        //$target_date = $add_target_array['target_date'];
        $target_date      = convert_timezone('now', TIMEZONE);
        $createdate       = convert_timezone('now', TIMEZONE);
        $current_date     = explode(' ', $target_date);
        //$expense_date = $add_exp_array['expense_date']. $current_date[1];
        $recurring        = $add_target_array['recurring'];
        $fromdate         = $add_target_array['fromdate'];
        $todate           = $add_target_array['todate'];
        $target_id        = $add_target_array['target_id'];
        if ($recurring == 0) {
            $target_date   = date('Y-m-d', strtotime($add_target_array['target_date']));
            //$exp_result = DB::insert(DRIVER_TARGET, array('target_driver_id','target_amount','recurrent','target_date','createdate'))
            //	->values(array($target_driver_id,$target_amount,$recurring,$target_date,$createdate))
            //	->execute();
            $update_array  = [
                "target_amount" => $target_amount,
                "recurrent" => $recurring,
                "target_date" => $target_date
            ];
            //echo 'as'.$target_id;
            $update_result = DB::update(DRIVER_TARGET)->set($update_array)->where('target_id', '=', $target_id)->where('target_driver_id', '=', $target_driver_id)->execute();
            //print_r($update_array);
            $exp_result    = 1;
        } else {
            for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                //echo date('l Y-m-d', $i);
                $target_date = date('Y-m-d', $i);
                $check_date  = date('d', $i);
                $check_month = date('m', $i);
                $check_year  = date('Y', $i);
                /** check valid date or not and check exclus date **/
                //if(checkdate($check_month,$check_date,$check_year) && !in_array($booking_date,$remove_date))		
                if (checkdate($check_month, $check_date, $check_year)) {
                    if (strtotime($target_date) >= strtotime($current_date[0])) {
                        //echo $expense_date;
                        //echo '<br>';
                        /******** Delete the record after current date if recurrent booking is enabled *****/
                        $delete_query = "DELETE FROM " . DRIVER_TARGET . " WHERE " . DRIVER_TARGET . ".target_driver_id = $target_driver_id and " . DRIVER_TARGET . ".`target_date` >= '$target_date'";
                        $result       = Db::query(Database::DELETE, $delete_query)->execute();
                        /************ Insert new records after current date ***************/
                        $target_date  = date('Y-m-d', strtotime($target_date));
                        $fromdate     = date('Y-m-d', strtotime($fromdate)) . ' ' . $current_date[1];
                        $todate       = date('Y-m-d', strtotime($todate)) . ' ' . $current_date[1];
                        $exp_result   = DB::insert(DRIVER_TARGET, [
                            'target_driver_id',
                            'target_amount',
                            'recurrent',
                            'target_date',
                            'fromdate',
                            'todate',
                            'createdate'
                        ])->values([
                            $target_driver_id,
                            $target_amount,
                            $recurring,
                            $target_date,
                            $fromdate,
                            $todate,
                            $createdate
                        ])->execute();
                    }
                }
            }
        }
        return $exp_result;
    }
    // Get today Goal Details //
    public function get_goal_details($id, $msg_status, $driver_reply = null, $travel_status = null)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $current_date[0] . ' 00:00:01';
        $end_time     = $current_date[0] . ' 23:59:59';
		$match_query = [];
		$match_query['driver_id'] = (int)$id;
		$match_query['msg_status'] = $msg_status;
		$match_query['driver_reply'] = $driver_reply;
		$match_query['travel_status'] = (int)$travel_status;
		
		$arguments = [
			['$match' => $match_query],
			['$lookup'  		=> [
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                ]
            ],
			['$project' =>['amt' =>['$sum'=>'$trans.amt']]],
			['$group' =>['_id' =>['_id' => null],'acheive_amt' => ['$sum'=>'$amt']]],
			['$project' =>['_id' =>0,'acheive_amt' => '$acheive_amt']],
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		return (!empty($result['result'])?$result['result']:[]);
    }
    // Check Whether People phone is Already Exist or Not //
    /*********************************************************************************************/
    /*********** Function Used for validate credit cards ***************/
    function _checkSum($ccnum)
    {
        $checksum = 0;
        for ($i = (2 - (strlen($ccnum) % 2)); $i <= strlen($ccnum); $i += 2) {
            $checksum += (int) ($ccnum{$i - 1});
        }
        // Analyze odd digits in even length strings or even digits in odd length strings.
        for ($i = (strlen($ccnum) % 2) + 1; $i < strlen($ccnum); $i += 2) {
            $digit = (int) ($ccnum{$i - 1}) * 2;
            if ($digit < 10) {
                $checksum += $digit;
            } else {
                $checksum += ($digit - 9);
            }
        }
        if (($checksum % 10) == 0)
            return true;
        else
            return false;
    }
    function isVAlidCreditCard($ccnum, $type = "", $returnobj = false)
    {
        $creditcard = [
            "visa" => "/^4\d{3}-?\d{4}-?\d{4}-?\d{4}$/",
            "mastercard" => "/^5[1-5]\d{2}-?\d{4}-?\d{4}-?\d{4}$/",
            "discover" => "/^6011-?\d{4}-?\d{4}-?\d{4}$/",
            "amex" => "/^3[4,7]\d{13}$/",
            "diners" => "/^3[0,6,8]\d{12}$/",
            "bankcard" => "/^5610-?\d{4}-?\d{4}-?\d{4}$/",
            "jcb" => "/^[3088|3096|3112|3158|3337|3528|3530]\d{12}$/",
            "enroute" => "/^[2014|2149]\d{11}$/",
            "switch" => "/^[4903|4911|4936|5641|6333|6759|6334|6767]\d{12}$/"
        ];
        if (empty($type)) {
            $match = false;
            foreach ($creditcard as $type => $pattern)
                if (preg_match($pattern, $ccnum) == 1) {
                    $match = true;
                    break;
                }
            if (!$match)
                return 0;
            else {
                if ($returnobj) {
                    $return        = new stdclass;
                    $return->valid = $this->_checkSum($ccnum);
                    $return->ccnum = $ccnum;
                    $return->type  = $type;
                    return 1;
                } else
                    return 0;
            }
        } else {
            if (@preg_match($creditcard[strtolower(trim($type))], $ccnum) == 0) {
                return false;
            } else {
                if ($returnobj) {
                    //print_r($returnobj);
                    $return        = new stdclass;
                    $return->valid = $this->_checkSum($ccnum);
                    $return->ccnum = $ccnum;
                    $return->type  = $type;
                    return 1;
                } else
                    return 1;
            }
        }
    }
    /*************************************************************************************/
    //Mobile Driver Push Notification Sending
    public function send_driver_mobile_pushnotification($d_device_token = "", $device_type = "", $pushmessage = null, $android_api = "", $android_title="")
    {
		//---------------------------------- ANDROID ----------------------------------//                            
        if ($device_type == 1) {
			
			$apiKey          = $android_api;
            $registrationIDs = [
                $d_device_token
            ];
            //echo $d_device_token;
            // Message to be sent                                    
            if (!empty($registrationIDs)) {
                // Set POST variables
                $url         = 'https://android.googleapis.com/gcm/send';//https://fcm.googleapis.com/fcm/send
                //print_r($registrationIDs);exit;
                $pushmessage = json_encode($pushmessage);
                //print_r($pushmessage);exit;
                
				/*$fields = array(
					'to' => $d_device_token,
					'notification' => array('title' => $android_title,'body' => $pushmessage)
				);*/
				
				
				
				$fields      = [
                    'registration_ids' => $registrationIDs,
                    'data' => [
                        "message" => $pushmessage
                    ]
                ];
                //print_r( $fields );exit;
                $headers     = [
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                ];
                // Open connection
                $ch          = curl_init();
                // Set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                // Execute post
                $result = curl_exec($ch);
				
				//print_r($result); exit;
				
                // Close connection
                curl_close($ch);
                //echo $result;                            
            }
			
        } else if ($device_type == 2) {
            //---------------------------------- IPHONE ----------------------------------//  
            //print_r($contact_iphone);exit;
            $deviceToken = $d_device_token;
            $deviceToken = trim($deviceToken);
            if (!empty($deviceToken)) {
                //print_r($deviceToken);exit;
                // Put your private key's passphrase here:
                $passphrase = '';
                // Put your alert message here:
                //$message = $message = "A new business ".$business_name." is added in Yiper";
                //$message = $deal_id.".".ucfirst($merchant_name)." has a new deal for you. View now...";                                    
                $badge      = 0;
                ////////////////////////////////////////////////////////////////////////////////
                //$root       = $_SERVER['DOCUMENT_ROOT'] . '/application/classes/controller/ck.pem';
                $root       = $_SERVER['DOCUMENT_ROOT'] . '/GrandlimoDriver.pem';
                // echo  $root;
                $ctx        = stream_context_create();
                stream_context_set_option($ctx, 'ssl', 'local_cert', $root);
                stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
                // Open a connection to the APNS server
                $fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
                if (!$fp)
                    exit("Failed to connect: $err $errstr" . PHP_EOL);
                //echo 'Connected to APNS' . PHP_EOL;
                // Create the payload body
                $status = $pushmessage['status'];
                if ($status == 1) {
                    $pickup       = $pushmessage['pickup'];
                    $passenger_id = $pushmessage['passenger_id'];
                    $taxi_id      = $pushmessage['taxi_id'];
                    $company_id   = $pushmessage['company_id'];
                    $distance     = $pushmessage['distance'];
                    $trip_details = $passenger_id . '-' . $taxi_id . '-' . $company_id . '-' . $distance;
                    $body['aps']  = [
                        'alert' => 'You have new booking request',
                        'trip_details' => $trip_details,
                        'sound' => 'default'
                    ];
                } else if ($status == 3) {
                    $pickup            = $pushmessage['pickup'];
                    $fare              = $pushmessage['fare'];
                    $referral_discount = $pushmessage['referral_discount'];
                    $message           = $pushmessage['result'];
                    $fare_details      = $pickup . '-' . $fare . '-' . $referral_discount;
                    $body['aps']       = [
                        'alert' => $message,
                        'fare_details' => $fare_details,
                        'sound' => 'default'
                    ];
                    $body['aps']       = [
                        'alert' => $pushmessage,
                        'badge' => $badge,
                        'sound' => 'default'
                    ];
                } else if ($status == 5) {
                    $fare        = $pushmessage['fare'];
                    $pickup      = $pushmessage['pickup'];
                    $message = $pushmessage['message'];
                    $body['aps'] = [
                        'alert' => $message,
                        'fare' => $fare,
                        'pickup' => $pickup,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }
                // print_r($body);
                // exit;
                // Encode the payload as JSON
                $payload = json_encode($body);
                // Build the binary notification
                //$msg     = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
                // Send it to the server
                //$result  = fwrite($fp, $msg, strlen($msg));
				try {
					$msg     = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
					$result  = fwrite($fp, $msg, strlen($msg));
				} catch(Exception $e) {
					$message = [
						"message" => $e->getMessage(),
						"status" => -1
					];
					echo json_encode($message);
					exit;					
				}
                //if (!$result)
                //  echo 'Message not delivered' . PHP_EOL;
                //else
                //echo 'Message successfully delivered' . PHP_EOL;
                // Close the connection to the server
                fclose($fp);
            }
        } else {
        }
    }
    /** Get Driver Target by Date ********/
    public function get_driver_target_by_week($id, $msg_status, $driver_reply = null, $travel_status = null, $target_date)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $target_date . ' 00:00:00';
        $end_time     = $target_date . ' 23:59:59';
        /*
        $sql = "SELECT sum(`transacation`.`amt`) as ach_amt,  DATE(passengers_log.createdate) datewise,(select `driver_target`.`target_amount`from driver_target where Date(driver_target.target_date) = Date(passengers_log.createdate) and target_driver_id = '$id' limit 1) as target_amount  FROM `passengers_log`  LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`)  LEFT JOIN `driver_target` ON ( driver_target.target_driver_id = passengers_log.driver_id  ) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '1' AND passengers_log.createdate >='$start_time' and passengers_log.createdate <= '$end_time' group by datewise";
        */
        $sql          = "select target_amount, (select sum(transacation.amt) from transacation left join  passengers_log on  passengers_log.passengers_log_id=transacation.passengers_log_id WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = 'R' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '1' AND passengers_log.createdate >='$start_time' and passengers_log.createdate <= '$end_time' limit 1 ) as ach_amt from driver_target where target_date = '$target_date' and target_driver_id='$id'";
        //echo $sql;echo '<br>';
        $result       = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r($result);exit;
        return $result;
    }
    /** Get Driver Target by Month ********/
    public function get_driver_target_by_month($id, $msg_status, $driver_reply = null, $travel_status = null, $from, $to)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        $current_date = explode(' ', $current_time);
        $start_time   = $from . ' 00:00:00';
        $end_time     = $to . ' 23:59:59';
        /*$sql = "SELECT sum(`transacation`.`amt`) as ach_amt,  DATE(passengers_log.createdate) datewise,(select `driver_target`.`target_amount`from driver_target where Date(driver_target.target_date) = Date(passengers_log.createdate) and target_driver_id = '$id' limit 1) as target_amount  FROM `passengers_log`  LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`)  LEFT JOIN `driver_target` ON ( driver_target.target_driver_id = passengers_log.driver_id  ) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '1' AND passengers_log.createdate >='$start_time' and passengers_log.createdate <= '$end_time' group by datewise";*/
        $sql          = "select target_amount, (select sum(transacation.amt) from transacation left join  passengers_log on  passengers_log.passengers_log_id=transacation.passengers_log_id WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = 'R' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '1' AND ( passengers_log.createdate >='$start_time' and passengers_log.createdate <= '$end_time' ) limit 1 ) as ach_amt from driver_target where ( target_date >='$from' and target_date <='$to' ) and  target_driver_id='$id'";
        //echo $sql;
        //echo '<br/<br/><br/>',
        $result       = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r($result);exit;
        $achve_amt    = '';
        $tar_amt      = '';
        if (count($result) > 0) {
            foreach ($result as $amount) {
                $achve_amt += $amount['ach_amt'];
                $tar_amt += $amount['target_amount'];
            }
        } else {
            $achve_amt += 0;
            $tar_amt += 0;
        }
        $achve_amt     = number_format($achve_amt, 2, '.', '');
        $tar_amt       = number_format($tar_amt, 2, '.', '');
        $total_amounts = [
            "ach_amt" => $achve_amt,
            "target_amount" => $tar_amt
        ];
        return $total_amounts;
    }
    /** Get Driver Target by Year ********/
    public function get_driver_target_by_year($id, $msg_status, $driver_reply = null, $travel_status = null, $year)
    {
        $condition = "AND YEAR( passengers_log.createdate) = $year";
        $sql       = "SELECT sum(`transacation`.`amt`) as ach_amt,  DATE(passengers_log.createdate) datewise,(select `driver_target`.`target_amount`from driver_target where Date(driver_target.target_date) = Date(passengers_log.createdate) and target_driver_id = '$id' limit 1) as target_amount FROM `passengers_log`  LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`)  LEFT JOIN `driver_target` ON ( driver_target.target_driver_id = passengers_log.driver_id  ) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '1' $condition group by datewise";
        //echo $sql;
        $result    = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    //Mobile Passenger Push Notification Sending
     public function send_tab_mobile_pushnotification($d_device_token = "", $device_type = "", $pushmessage = null, $android_api = "",$android_title="")
    {
		if ($device_type == 1) {
			$apiKey          = $android_api;
            $registrationIDs = [
                $d_device_token
            ];
            //echo $d_device_token;
            // Message to be sent                                    
            if (!empty($registrationIDs)) {
                // Set POST variables
                $url         = 'https://android.googleapis.com/gcm/send';//https://fcm.googleapis.com/fcm/send
                //print_r($registrationIDs);exit;
                $pushmessage = json_encode($pushmessage);
                //print_r($pushmessage);exit;
                
				/*$fields = array(
					'to' => $d_device_token,
					'notification' => array('title' => $android_title,'body' => $pushmessage),
					'data' => array(
                        "message" => $pushmessage
                    )
				);*/
				
				
				
				$fields      = [
                    'registration_ids' => $registrationIDs,
                    'data' => [
                        "message" => $pushmessage
                    ]
                ];
                //print_r( $fields );exit;
                $headers     = [
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                ];
                // Open connection
                $ch          = curl_init();
                // Set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                // Execute post
                $result = curl_exec($ch);
				
				//print_r($result); exit;
				
                // Close connection
                curl_close($ch);
                //echo $result;                            
            }
            //exit;  
        }
		
	}
    
    
    
    public function send_passenger_mobile_pushnotification($d_device_token = "", $device_type = "", $pushmessage = null, $android_api = "",$android_title="")
    {
        
		
        //---------------------------------- ANDROID ----------------------------------//                            
        if ($device_type == 1) {
			$apiKey          = $android_api;
             if(is_array($d_device_token)){
               $registrationIDs = $d_device_token;
            }else
            {
                $registrationIDs = [
                    $d_device_token
                ];
            }
            // Message to be sent                                    
            if (!empty($registrationIDs)) {
                // Set POST variables
              //  $url         = 'https://android.googleapis.com/gcm/send'; //https://fcm.googleapis.com/fcm/send
                  $url         = 'https://fcm.googleapis.com/fcm/send';

                $pushmessage = json_encode($pushmessage);
                //print_r($pushmessage);exit;
                
				/*$fields = array(
					'to' => $d_device_token,
					'notification' => array('title' => $android_title,'body' => $pushmessage)
				);
				*/
				
				
				$fields      = [
                    'registration_ids' => $registrationIDs,
                    'data' => [
                        "message" => $pushmessage
                    ]
                ];
                //print_r( $fields );exit;
                $headers     = [
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                ];
                // Open connection
                $ch          = curl_init();
                // Set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                // Execute post
                $result = curl_exec($ch);
				
				//print_r($result); exit;
				
                // Close connection
                curl_close($ch);
                //echo $result;                            
            }
            //exit;  
        } elseif ($device_type == 2) {
            //---------------------------------- IPHONE ----------------------------------//  
                    
            if (!empty($d_device_token)) {

                if(is_array($d_device_token)){
                    $deviceToken = $d_device_token;
                }else
                {
                    $deviceToken = [
                        $d_device_token
                    ];
                }

                $message = $pushmessage['message'];
                $status  = $pushmessage['status'];
		$app_ver  = isset($pushmessage['app_ver'])?$pushmessage['app_ver']:'';
                if ($status == 1) {
                    $trip_id     = $pushmessage['trip_id'];
                    $body['aps'] = [
                        'alert' => $message,
                        'trip_id' => $trip_id,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 2) {
                    $trip_id     = $pushmessage['trip_id'];
                    $body['aps'] = [
                        'alert' => $message,
                        'trip_id' => $trip_id,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 3) {
                    $trip_id     = $pushmessage['trip_id'];
                    $body['aps'] = [
                        'alert' => $message,
                        'trip_id' => $trip_id,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 4) {
					$body['aps'] = [
                        'alert' => $message,
					    'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 5) {
                    $fare        = $pushmessage['fare'];
                    $pickup      = $pushmessage['pickup'];
                    $body['aps'] = [
                        'alert' => $message,
                        'fare' => $fare,
                        'pickup' => $pickup,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 6) {
                    $trip_id     = $pushmessage['trip_id'];
                    $body['aps'] = [
                        'alert' => $message,
                        'trip_id' => $trip_id,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 7) {
                    $trip_id     = $pushmessage['trip_id'];
                    $body['aps'] = [
                        'alert' => $message,
                        'trip_id' => $trip_id,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 8) {
					$detail      = $pushmessage['detail'];
                    $body['aps'] = [
                        'alert' => $message,
						'detail' => $detail,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 9) {
					$detail      = $pushmessage['detail'];
                    $body['aps'] = [
                        'alert' => $message,
						'detail' => $detail,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }else if ($status == 10) {
					$detail      = $pushmessage['detail'];
                    $body['aps'] = [
                        'alert' => $message,
						'detail' => $detail,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }
                else if ($status == 11) {
					$body['aps'] = [
                        'alert' => $message,					
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }
                else if ($status == 12) { // LIVE VIDEO STREAMING
					$detail      = $pushmessage['detail'];
					$body['aps'] = [
                        'alert' => $message,	
                        'detail' => $detail,				
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }
                   else if ($status == 15) { // confirm push to passenger
                    	 	    $status = ($app_ver != '2.7')?$status:13;
			$detail      = $pushmessage['detail'];
                    $body['aps'] = [
                        'alert' => $message,    
                        'detail' => $detail,                
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }            

                else if ($status == 16) { // driver accept push to passenger

                    $trip_id      = $pushmessage['trip_id'];
                    $driverdetails= $pushmessage['driverdetails'];
                    $driv_lat      = $pushmessage['driv_lat'];
                    $driv_long      = $pushmessage['driv_long'];
  	 	    $status = ($app_ver != '2.7')?$status:13;

                    $body['aps'] = [
                        'alert' => $message,    
                        'trip_id' => $trip_id,                
                        'driverdetails' => $driverdetails,                
                        'driv_lat' => $driv_lat,                
                        'driv_long' => $driv_long,                
                        'status' => $status,
                        'sound' => 'default'
                    ];
                } else if ($status == 17) {
                        $trip_id     = $pushmessage['trip_id'];
                        $body['aps'] = [
                            'alert' => $message,
                            'trip_id' => $trip_id,
                            'status' => $status,
                            'sound' => 'default'
                        ];
                }else if ($status == 20) {
						$trip_id     = $pushmessage['trip_id'];
						$body['aps'] = [
							'alert' => $message,
							'trip_id' => $trip_id,
							'status' => $status,
							'sound' => 'default'
						];
				} else {
                    $body['aps'] = [
                        'alert' => $message,
						'badge' => 18,
                        'status' => $status,
                        'sound' => 'default'
                    ];
                }

					$passphrase = '';
					$live = false;
					//$root = ($live == true) ? $_SERVER['DOCUMENT_ROOT'] . '/GrandlimoDistribution.pem' : $_SERVER['DOCUMENT_ROOT'] . '/localGrandlimoDistribution.pem';
					$root = $_SERVER['DOCUMENT_ROOT'] . '/GrandlimoDistribution.pem';
					$ctx        = stream_context_create();
					stream_context_set_option($ctx, 'ssl', 'local_cert', $root);
					stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
					foreach ($deviceToken as $tokenvalue) {
					//$pushURL = ($live == true) ? 'ssl://gateway.push.apple.com:2195' : 'ssl://gateway.sandbox.push.apple.com:2195';	
					$pushURL = 'ssl://gateway.push.apple.com:2195';	

					$fp = stream_socket_client($pushURL , $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
					
                if (!$fp)
                     exit("Failed to connect: $err $errstr" . PHP_EOL);
					// Encode the payload as JSON
					$payload = json_encode($body);
					$tokenvalue = trim($tokenvalue);
					$msg     = chr(0) . pack('n', 32) . pack('H*', $tokenvalue) . pack('n', strlen($payload)) . $payload;
					$result  = fwrite($fp, $msg, strlen($msg));
					fclose($fp);                
                }

            }
        } else {
        }
    }
    /******** reg_passenger_first_trip ***********/
    public function reg_passenger_first_trip($passengers_id)
    {
        /*$sql    = "select " . PASSENGERS_LOG . ".passengers_log_id from " . PASSENGERS_LOG . " RIGHT JOIN " . TRANS . " as t ON " . PASSENGERS_LOG . ".passengers_log_id = t.passengers_log_id where passengers_id = '$passengers_id' and travel_status = '1' and  driver_reply = 'A' and msg_status='R'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) == 0) {
            return 1;
        } else {
            return 0;
        }*/
        
         $arguments = [['$lookup'=>[
							'from'=>"transaction",
							'localField'=>"_id",
							'foreignField'=>"passengers_log_id",
							 'as'=>"transaction"        
						]],
						['$unwind'=>'$transaction'],
						['$match'=> [
							'passengers_id'=>(int)$passengers_id,
							'travel_status'=> 1,
							'driver_reply'=>"A",
							'msg_status'=>"R"     
						]],
						['$project' => [
							'passengers_log_id' => '$transaction.passengers_log_id'			
						]]					
					];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (count($result['result'])>0) ? 1 : 0; 
    }
    /************* Update Referral Discount ***********************/
    public function update_ref_discount($referred_by, $referral_discount)
    {
        /****************************************/
        $refby_array  = [
            "referral_earned_amount" => $referral_discount
        ];
        $refby_result = DB::update(PASSENGERS)->set($refby_array)->where('id', '=', $referred_by)->where('referrer_earned', '=', '0')->execute();
        //print_r($ref_result);			
        /*****************************************/
    }
    /************* Update Registerer Discount ***********************/
    public function update_registerer_discount($passengers_id, $trip_id, $referral_discount)
    {
        /****************************************/
        $refby_array  = [
            "registerer_earned" => '1',
            "registerer_tripid" => $trip_id,
            "earned_amount" => $referral_discount
        ];
        $refby_result = DB::update(PASSENGERS_REF_DETAILS)->set($refby_array)->where('registered_passenger_id', '=', $passengers_id)->execute();
        //print_r($ref_result);			
        /*****************************************/
    }
    /*********************** update_referer_earn_status **********/
    public function update_referer_earn_status($passengers_id)
    {
        /****************************************/
        $refby_array  = [
            "referrer_earned" => '1'
        ];
        $refby_result = DB::update(PASSENGERS)->set($refby_array)->where('id', '=', $passengers_id)->execute();
        //print_r($ref_result);			
        /*****************************************/
    }
    // Get Passenger credit card details
    public function get_creadit_card_details($passenger_id = "", $card_type = "", $default = "")
    {
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		if($check_passenger_avail == 1){
		
		$match = [];
		$match['_id'] = (int)$passenger_id;
		$match['creditcard_details.status'] =  ['$in'=> [0,1]];
		//$match['status'] = 1;
		if (($card_type == "P") || ($card_type == "B")) {
			$match['creditcard_details.card_type'] = $card_type;
			
        }
        if ($default == 'yes') {
			$match['creditcard_details.default_card'] = 1;
        }
		
	//print_r($match);exit;
		$args = [
			['$unwind' => '$creditcard_details'],
			['$match' => $match],
			['$project' =>
				['passenger_cardid' => '$creditcard_details.passenger_cardid',
					'passenger_id' => '$creditcard_details.passenger_id',
					'card_type' => '$creditcard_details.card_type',
					'expdatemonth' => '$creditcard_details.expdatemonth',
					'default_card' => '$creditcard_details.default_card',
					'expdateyear' => '$creditcard_details.expdateyear',
					'creditcard_cvv' => '$creditcard_details.creditcard_cvv',
					'creditcard_no' => '$creditcard_details.creditcard_no'
				]
			]
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
		return (!empty($result['result']) ? $result['result'] : []);
	}else {return -1;}
    }
    /** Credit card delete function **/
    public function delete_credit_card($passenger_cardid, $passenger_id)
    {//echo $passenger_cardid;
    //echo $passenger_id;
		/*"creditcard_details.$i.passenger_id" => (int)$passenger_id,
					"creditcard_details.$i.passenger_email" => isset($v['passenger_email']) ? $v['passenger_email']: '',
					"creditcard_details.$i.card_type" => isset($v['card_type']) ? $v['card_type']: '',
					"creditcard_details.$i.creditcard_no" => isset($v['creditcard_no']) ? $v['creditcard_no']: '',
					"creditcard_details.$i.creditcard_cvv" => isset($v['creditcard_cvv']) ? $v['creditcard_cvv']: '',
					"creditcard_details.$i.expdatemonth" => isset($v['expdatemonth']) ? $v['expdatemonth']: '',
					"creditcard_details.$i.expdateyear" => isset($v['expdateyear']) ? $v['expdateyear']: '',
					"creditcard_details.$i.default_card" => (int) isset($v['default_card']) ? $v['default_card']: '',
					"creditcard_details.$i.createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
					"creditcard_details.$i.card_holder_name" =>isset($v['expdateyear']) ? $v['expdateyear']: '',*/
		/*if($default == 1){
			if(count($result) > 1)
				$default_update = array("creditcard_details.0.default_card" => 1);
		}
		print_r($update_array);exit;*/
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_passenger_avail = $add_model->parent_id_isValid($passenger_id);
		
		if($check_passenger_avail == 1){
			
		$args = [['$unwind' => '$creditcard_details'],
					  ['$match' => ['_id' => (int)$passenger_id]],
					  ['$project' => ['card_id' => '$creditcard_details.passenger_cardid',
												'default' => '$creditcard_details.default_card']]
					];	
		/*$args = array(array('$unwind' => '$creditcard_details'),
					  array('$match' => array('_id' => (int)$passenger_id,'creditcard_details.default_card'  => array('$ne'=>(int)1))),
					  array('$project' => array('card_id' => '$creditcard_details.passenger_cardid',
												'default' => '$creditcard_details.default_card'))
					); */
		$keys = $this->mongo_db->aggregate(MDB_PASSENGERS,$args);
		$result = isset($keys['result']) ? $keys['result'] : [];
		//print_r($result);
		//exit;
		$update_array = [];
		if(count($result) > 0){
			$i =0;$default=0;
			foreach($keys['result'] as $k => $v ){
				if($v['card_id'] == $passenger_cardid){
					//echo "creditcard_details.".$k.".status";
					$val["creditcard_details.".$k.".status"] = 2;
					//$val["creditcard_details.".$k.".default_card"] = 0;
					$def_update          = $val;
					$delete = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],
										['$set'=>$def_update],
										['upsert' => true]);
										//print_r($delete);exit;
				}
				$i++;
			}
			
			/*$delete = $this->mongo_db->Update(MDB_PASSENGERS,array('_id'=>(int)$passenger_id),
										array('$set'=>$update_array),
										array('upsert' => true)); */
		return (isset($delete['err'])) ? 0 : 1;
		}
		else{
			return -2;
			}
		
	}else {return -1;}
    }
   
    public function driver_ratings($driver_id)
    {
		$arguments = [
			['$match' => [
					'driver_id' => (int)$driver_id,
					'travel_status' => 1,
					'driver_reply' => 'A'
				]
			],
			['$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$project' => [
					'passengers_log_id' => '$_id',
					'passengers_id' => '$passengers_id',
					'driver_id' => '$driver_id',
					'taxi_id' => '$taxi_id',
					'company_id' => '$company_id',
					'current_location' => '$current_location',
					'pickup_latitude' => '$pickup_latitude',
					'pickup_longitude' => '$pickup_longitude',
					'drop_location' => '$drop_location',
					'drop_latitude' => '$drop_latitude',
					'drop_longitude' => '$drop_longitude',
					'rating' => '$rating',
					'comments' => '$comments',
					'driver_comments' => '$driver_comments',
					'salutation' => '$people.salutation',
					'name' => '$people.name',
					'lastname' => '$people.lastname',
					'email' => '$people.email',
					'photo' => '$people.photo',
					'device_token' => '$people.device_token',
					'device_type' => '$people.device_type',
				]
			],
			[
				'$sort' => ['createdate' => -1]
			],
			[
				'$skip' => 0
			],
			[
				'$limit' => 5
			]
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (!empty($result) && $result['result'])?$result['result']:[];
    }
    
    public function driver_ratings_old($driver_id)
    {
        $result = DB::select(PASSENGERS_LOG . '.passengers_log_id', PASSENGERS_LOG . '.passengers_id', PASSENGERS_LOG . '.driver_id', PASSENGERS_LOG . '.taxi_id', PASSENGERS_LOG . '.company_id', PASSENGERS_LOG . '.current_location', PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.rating', PASSENGERS_LOG . '.comments', PASSENGERS_LOG . '.driver_comments', PEOPLE . '.salutation', PEOPLE . '.name', PEOPLE . '.lastname', PEOPLE . '.email', PEOPLE . '.photo', PEOPLE . '.device_token', PEOPLE . '.device_type')->from(PASSENGERS_LOG)->where('driver_id', '=', $driver_id)->join(PEOPLE)->on(PASSENGERS_LOG . '.driver_id', '=', PEOPLE . '.id')->where('travel_status', '=', 1)->where('driver_reply', '=', 'A')->order_by('createdate', 'DESC')->limit(5)->offset(0)->execute();//->as_array();
        //print_r($result);exit;
        return $result;
    }
    public function get_passengerlog_notify($log_id)
    {
        $log_query       = "select approx_fare,drop_latitude,pickup_longitude,notes_driver,approx_distance,sub_logid,passengers_id,drop_longitude,pickup_latitude,search_city,taxi_id,(select name from passengers where passengers.id=passengers_log.passengers_id) as passenger_name, (select profile_image from passengers where passengers.id=passengers_log.passengers_id) as profile_image from  passengers_log where passengers_log_id='$log_id' ";
        $log_fetch       = Db::query(Database::SELECT, $log_query)->execute()->as_array();
        $passenger_photo = $log_fetch[0]['profile_image'];
        if ((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'] . PASS_IMG_IMGPATH . $passenger_photo)) {
            $passenger_image = $passenger_photo;
        } else {
            $passenger_image = 0;
        }
        $log_fetch[0]['passenger_image'] = $passenger_image;
        return $log_fetch;
    }
    // Get Payment type name
     public function get_payment_name($payment_id)
    {
		$result = $this->mongo_db->find_one(MDB_PAYMENT_MODULES,['_id' => (int)$payment_id], ['pay_mod_name','pay_mod_image'] );
		return (!empty($result))?$result:[];
    }
    
    
    public function get_payment_name_old($payment_id)
    {
        $log_query = "SELECT pay_mod_name,pay_mod_image FROM  " . PAYMENT_MODULES . " WHERE  `pay_mod_id` ='$payment_id' ";
        $log_fetch = Db::query(Database::SELECT, $log_query)->execute()->as_array();
        return $log_fetch;
    }
    public function payment_packagedetails($packid = 0)
    {
        $result = DB::select('package_name', 'no_of_taxi', 'no_of_driver', 'days_expire', 'package_price', 'package_type')->from(PACKAGE)->where('package_status', '=', 'A')->where('package_id', '=', $packid)->order_by('package_name', 'asc')->execute()->as_array();
        return $result;
    }
    public function checktrans_details($log_id)
    {
		$result = $this->mongo_db->find_one(MDB_TRANSACTION,['passengers_log_id' => (int)$log_id],['_id']);
		return (!empty($result) ? $result : []);
    }
    //Function used to get the get_driver ongoign trips
    public function get_driver_current_ongoigtrips($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id, $start = null, $limit = null)
    {
		  if ($company_id == '') {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
        } else {
			$time_arguments = [['$match'=>['_id'=>(int)$company_id]],['$unwind'=>'$companydetails'],['$project'=>['time_zone'=>'$companydetails.time_zone']]];            
            $time = $this->mongo_db->aggregate(MDB_COMPANY,$time_arguments); 
			$timezone_fetch = $time['result'];
			 if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }		
		$match_array = [];
		$match_array['driver_id'] = (int)$id;
		$match_array['msg_status'] = $msg_status;
		$match_array['driver_reply'] = $driver_reply;
		$match_array['travel_status'] = ['$in' => [2,3,5,9]];
		$match_array['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
        $arguments = [
			['$lookup'=>[
				'from'=>MDB_PASSENGERS,
				'localField'=>"passengers_id",
				'foreignField'=>"_id",
				 'as'=>"passengers"        
			]],
			['$unwind'=>'$passengers'],
			['$lookup'=>[
				'from'=>MDB_TRANSACTION,
				'localField'=>"_id",
				'foreignField'=>"passengers_log_id",
				 'as'=>"trans"
			]],
			['$match'=>$match_array],
			['$project' =>
				[
					'_id' => 0,
					'passenger_name'=>'$pass.name',
					'passenger_phone'=>'$passengers.phone',
					'profile_image'=>'$passengers.profile_image',
					'passengers_log_id'=>'$_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'pickup_longitude'=>'$pickup_longitude',
					'pickup_latitude'=>'$pickup_latitude',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'travel_status'=>'$travel_status',
					'notes'=>'$notes_driver',
					'distance'=>'$distance',
					'waiting_hour'=>'$waitingtime',
					'bookby'=>'$bookby'
				]
			],
			['$sort' => ['pickup_time' => 1]],
		];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        return (!empty($result['result'])?$result['result']:[]); 
    }
	
    public function get_driver_current_ongoigtrips_old($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id, $start = null, $limit = null) //
    {
        if ($company_id == '') {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            }
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:00';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:00';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        //drop_location
        $query  = "SELECT " . PASSENGERS . ".`name` as passenger_name, " . PASSENGERS . ".`phone` AS `passenger_phone`," . PASSENGERS . ".profile_image," . PASSENGERS_LOG . ".`passengers_log_id`, " . PASSENGERS_LOG . ".`current_location` AS `pickup_location`," . PASSENGERS_LOG . ".`drop_location`, " . PASSENGERS_LOG . ".`drop_location`, " . PASSENGERS_LOG . ".`pickup_longitude`, " . PASSENGERS_LOG . ".`pickup_latitude`, " . PASSENGERS_LOG . ".`drop_latitude`, " . PASSENGERS_LOG . ".`drop_longitude`, " . PASSENGERS_LOG . ".`travel_status`, " . PASSENGERS_LOG . ".`notes_driver` AS `notes`, " . PASSENGERS_LOG . ".`distance`, " . PASSENGERS_LOG . ".`waitingtime` AS `waiting_hour`, " . PASSENGERS_LOG . ".`bookby` AS `bookby` FROM " . PASSENGERS_LOG . " JOIN `passengers` ON (" . PASSENGERS_LOG . ".`passengers_id` = `passengers`.`id`) left join " . TRANS . "  on 
				" . TRANS . ".passengers_log_id=" . PASSENGERS_LOG . ".passengers_log_id  WHERE " . PASSENGERS_LOG . ".`driver_id` = '$id' AND " . PASSENGERS_LOG . ".`msg_status` = '$msg_status' AND " . PASSENGERS_LOG . ".`driver_reply` = '$driver_reply'  AND " . PASSENGERS_LOG . ".`pickup_time` >= '$start_time'  AND (" . PASSENGERS_LOG . ".`travel_status` = '2' OR " . PASSENGERS_LOG . ".`travel_status` = '5' OR " . PASSENGERS_LOG . ".`travel_status` = '3' OR " . PASSENGERS_LOG . ".`travel_status` = '9') ORDER BY `passengers_log`.`pickup_time` ASC";
        // echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        //AND ".PASSENGERS_LOG.".bookby = '".BOOK_BY_CONTROLLER."' 
        /*DB::select(PASSENGERS.'.name',array(PASSENGERS.'.phone','passenger_phone'),PASSENGERS_LOG.'.passengers_log_id',array(PASSENGERS_LOG.'.current_location','pickup_location'),PASSENGERS_LOG.'.drop_location',PASSENGERS_LOG.'.pickup_longitude',
        PASSENGERS_LOG.'.pickup_latitude',PASSENGERS_LOG.'.drop_latitude',PASSENGERS_LOG.'.drop_longitude',PASSENGERS_LOG.'.travel_status',array(PASSENGERS_LOG.'.notes_driver','notes'),PASSENGERS_LOG.'.distance',array(PASSENGERS_LOG.'.waitingtime','waiting_hour'))->from(PASSENGERS_LOG)
        ->join(PASSENGERS)->on(PASSENGERS_LOG.'.passengers_id','=',PASSENGERS.'.id')
        ->where(PASSENGERS_LOG.'.driver_id','=',$id)
        ->where(PASSENGERS_LOG.'.msg_status','=',$msg_status)
        ->where(PASSENGERS_LOG.'.driver_reply','=',$driver_reply)
        ->order_by(PASSENGERS_LOG.'.pickup_time', 'ASC')		
        ->where(PASSENGERS_LOG.'.pickup_time','>=',$start_time)			
        ->where(PASSENGERS_LOG.'.travel_status','=','2')
        ->or_where(PASSENGERS_LOG.'.travel_status','=','5')
        ->execute();
        //->as_array();	*/
        //print_r($result);
        return $result;
    }
    /******** Get Taxi Speed *****************/
/*    public function get_taxi_speed($taxi_id = "")
    {
        $taxi_query = "SELECT taxi_id,taxi_speed FROM  " . TAXI . " WHERE  `taxi_id` ='$taxi_id' ";
        $taxi_speed = Db::query(Database::SELECT, $taxi_query)->execute()->as_array();
        if (count($taxi_speed) > 0) {
            return $taxi_speed[0]['taxi_speed'];
        } else {
            return 0;
        }
    }*/
    public function get_taxi_speed($taxi_id = "")
    {
        /*$taxi_query = "SELECT taxi_id,taxi_speed FROM  " . TAXI . " WHERE  `taxi_id` ='$taxi_id' ";
        $taxi_speed = Db::query(Database::SELECT, $taxi_query)->execute()->as_array();
        return (count($taxi_speed) > 0)?$taxi_speed[0]['taxi_speed']:0;*/
        
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],['taxi_speed']);
        return (!empty($result))?$result['taxi_speed']:0;
    }
    /***************** Calculate ETA Time *********************/
    public function estimated_time($distance, $taxi_speed)
    {
        $ttime = "";
        if ($distance != 0 && $taxi_speed != 0) {
            $time = $distance / $taxi_speed;
            //Titanium.API.info("Response ETA" + distance + "-" + taxi_speed);					                                                                          
            $time = $time * 3600; // time duration in seconds
            $days = floor($time / (60 * 60 * 24));
            $time -= $days * (60 * 60 * 24);
            $hours = floor($time / (60 * 60));
            $time -= $hours * (60 * 60);
            $minutes = floor($time / 60);
            $time -= $minutes * 60;
            $seconds = floor($time);
            $time -= $seconds;
            if ($minutes > 0) {
               $ttime .= $minutes . __('Min'). ":";
            }
            if ($seconds > 0) {
                $ttime .= $seconds . __('Sec');
            }
        } else {
            $ttime = 1;
        }
        return $ttime;
    }
    public function get_passenger_account_credits($pass_id)
    {
        //$query = "select * from ".TBLGROUP." left JOIN ".TBLGROUPACCOUNT." on  ".TBLGROUP.".aid = ".TBLGROUPACCOUNT.".aid where FIND_IN_SET($pass_id, passenger_id)";
        $query  = "select gid,aid,gcompany_id," . TBLGROUP . ".limit,department from " . TBLGROUP . " where FIND_IN_SET($pass_id, passenger_id)";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
     public function add_rejected_list($post, $rejection_type)
    {
		$id = Commonfunction::get_auto_id(MDB_REJECTION_HISTORY);
		$insert_data = ['_id'=>$id,
			'driver_id' => (int)$post['driver_id'],
            'passengers_log_id' => (int)$post['passengers_log_id'],
            'passengers_id' => (int)$post['passengers_id'],
            'reason' => $post['reason'],
            'rejection_type' => (int)$rejection_type,
            'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($post['createdate']) * 1000)
		];
		$result = $this->mongo_db->insert(MDB_REJECTION_HISTORY,$insert_data);
    }
    public function add_rejected_list_old($post, $rejection_type)
    {
        $result = DB::insert(DRIVER_REJECTION, [
            'driver_id',
            'passengers_log_id',
            'passengers_id',
            'reason',
            'rejection_type',
            'createdate'
        ])->values([
            $post['driver_id'],
            $post['passengers_log_id'],
            $post['passengers_id'],
            $post['reason'],
            $rejection_type,
            $post['createdate']
        ])->execute();
        return $result;
    }
    public function passenger_log_det($trip_id)
    {
        $result = $result = DB::select(PASSENGERS_LOG . '.pickup_latitude', PASSENGERS_LOG . '.pickup_longitude', PASSENGERS_LOG . '.no_passengers', PASSENGERS_LOG . '.pickup_time', PASSENGERS_LOG . '.current_location', PASSENGERS_LOG . '.drop_location', PASSENGERS_LOG . '.drop_latitude', PASSENGERS_LOG . '.drop_longitude', PASSENGERS_LOG . '.passengers_id', PASSENGERS_LOG . '.time_to_reach_passen', PASSENGERS_LOG . '.driver_id', PASSENGERS_LOG . '.driver_comments', TAXI . '.taxi_company', TAXI . '.taxi_model', CITY . '.city_name')->from(PASSENGERS_LOG)->join(TAXI)->on(TAXI . '.taxi_id', '=', PASSENGERS_LOG . '.taxi_id')
        //->join(MOTORCOMPANY)->on(TAXI.'.taxi_company','=',MOTORCOMPANY.'.motor_id')
            ->join(MOTORMODEL)->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->join(CITY)->on(CITY . '.city_id', '=', PASSENGERS_LOG . '.search_city')->where(PASSENGERS_LOG . '.passengers_log_id', '=', $trip_id)->execute()->as_array();
        return $result;
    }
    public function update_booking($driver_id, $pass_id)
    {
        $result = DB::update(PASSENGERS_LOG)->set([
            'driver_id' => $driver_id,
            'travel_status' => '9'
        ])->where('passengers_log_id', '=', $pass_id)->execute();
        return $result;
    }
    public function get_passenger_phone_by_id($id)
    {
        /*$query  = "SELECT phone FROM " . PASSENGERS . " WHERE id = '$id'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return ($result[0]['phone']) ? $result[0]['phone'] : '';*/
         
		$res = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$id],['phone','country_code']);
		$country_code = (isset($res['country_code']))?$res['country_code']:"";
		$phone = (isset($res['phone']))?$res['phone']:"";
		return $country_code.$phone;
    }
    public function get_driver_phone_by_id($id)
    {
		$arguments = [
			['$lookup' 		=> [
					'from'			=>	MDB_PEOPLE,
					'localField'	=> '_id',
					'foreignField'	=> "login_country",
					'as'			=> "people"
				]
			],
			['$unwind' => '$people'],
			['$match'	=> ['people._id'=>(int)$id]],
			[
				'$project' => ['_id'=>0,
					'telephone_code'=>'$telephone_code',
					'phone' => '$people.phone',
				]
			]
		];
        $result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		$telephone_code = (isset($result['result'][0]['telephone_code']))?$result['result'][0]
		['telephone_code']:"";
		$phone = (isset($result['result'][0]['phone']))?$result['result'][0]['phone']:"";
		return $telephone_code.$phone;
    }
    
    public function get_driver_phone_by_id_old($id)
    {
        $query  = "SELECT phone FROM " . PEOPLE . " WHERE id = '$id'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return ($result[0]['phone']) ? $result[0]['phone'] : '';
    }
    /*	public function send_sms($to='',$message='')
    {
    //Kohana::find_file('vendor/smsgateway/Services', 'Twilio');
    require_once(DOCROOT.'application/vendor/smsgateway/Services/Twilio.php');
    //$sid = SMS_ACCOUNT_ID; // Your Account SID from www.twilio.com/user/account
    $sid ='ACd23c9836bf8708b3ece3e926c9dda4bc'; // Your Account SID from www.twilio.com/user/account
    //$token = SMS_AUTH_TOKEN; // Your Auth Token from www.twilio.com/user/account
    $token = 'fe4d28dfb94ec8eadb5dad2ae34064e9'; // Your Auth Token from www.twilio.com/user/account
    try
    {
    $country_res = DB::select()->from(COUNTRY)->where('default', '=', '1')->execute()->as_array();
    $to=$country_res[0]['telephone_code'].$to;
    $client = new Services_Twilio($sid, $token);
    $res = $client->account->messages->sendMessage(
    //SMS_FROM_NUMBER, // From a valid Twilio number
    '+14432254992', // From a valid Twilio number
    $to, // Text this number
    $message
    );
    }
    catch(Exception $e)
    {
    
    }
    //echo $res->sid;exit;
    }*/
    public function send_sms($number, $msg)
    {
		$result = $this->mongo_db->find_one(MDB_CSC,['default' => 1],['telephone_code']);
        $to          = str_replace('+', '', $result['telephone_code'] . $number);
        require_once(DOCROOT . 'application/vendor/mobility_sms/includeSettings.php');
        $userAccount = '';
        $passAccount = '';
        $timeSend    = time();
        $dateSend    = 0;
        $deleteKey   = 0;
        $viewResult  = 1;
        $sender      = "Taximobility";
        $sms_send    = sendSMS($userAccount, $passAccount, $to, $sender, $msg, $timeSend, $dateSend, $deleteKey, $viewResult);
        return $sms_send;
    }
    
    public function send_sms_old($number, $msg)
    {
        $country_res = DB::select('telephone_code')->from(COUNTRY)->where('default', '=', '1')->execute()->as_array();
        $to          = str_replace('+', '', $country_res[0]['telephone_code'] . $number);
        require_once(DOCROOT . 'application/vendor/mobility_sms/includeSettings.php');
        $userAccount = '';
        $passAccount = '';
        $timeSend    = time();
        $dateSend    = 0;
        $deleteKey   = 0;
        $viewResult  = 1;
        $sender      = "Taximobility";
        $sms_send    = sendSMS($userAccount, $passAccount, $to, $sender, $msg, $timeSend, $dateSend, $deleteKey, $viewResult);
        return $sms_send;
    }

    public function sendSMS($to,$message)
    {   
	/*
       $result = $this->mongo_db->find_one(MDB_SITEINFO,array('_id'=>1),array('default_country_code'));
        $findme   = '+';
        $pos = strpos($to, $findme);

        if ($pos === false) {
            $to          =  $result['default_country_code'].$to;
        }
        try {
        $url     = 'http://www.smsbox.com/smsgateway/services/messaging.asmx/Http_SendSMS?username='.SMSBOX_USERNAME.'&password='.SMSBOX_PASSWORD.'&customerid='.SMSBOX_CUSTOMER_ID.'&sendertext='.SMSBOX_SENDERTXT.'&messagebody='.$message.'&recipientnumbers='.$to.'&defdate=&isblink=false&isflash=false';
        $url = str_replace(' ', '%20', $url);
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);

        } catch(Services_Twilio_RestException $ex) {

        }
        return true;*/
        
    }
	
	
	//public function sendSMS($to,$message) {
		
		/*require_once(DOCROOT.'includes/twilio-php-master/Services/Twilio.php');
		$response = array();
		$result = $this->mongo_db->find_one(MDB_SITEINFO,array('_id'=>1),array('twilio_accout_sid','twilio_auth_token','twilio_number','default_country_code'));
		
		$account_sid = $result['twilio_accout_sid']; 
		$auth_token = $result['twilio_auth_token']; 
		$client = new Services_Twilio($account_sid, $auth_token);
		$findme   = '+';
		$pos = strpos($to, $findme);

		if ($pos === false) {
		    $to          =  $result['default_country_code'].$to;
		}
		try {
			$result = $client->account->messages->create(array( 
				'To' => $to, 
				'From' => $result['twilio_number'], 
				'Body' => $message,   
			));
			$response['code'] = 1;
			$response['message'] = 'Message Sent Successfully';
		} catch(Services_Twilio_RestException $ex) {
			$response['code'] = 0;
			$response['message'] = $ex->getMessage();			
		}
		//~ print "<pre>";
		//~ print_r($response);
		//~ exit;
		return $response;*/		
	//}
	
	public function sendSMSBulk($bulkmessages) {
		
		require(DOCROOT.'includes/twilio-php-master/Services/Twilio.php');
		$response = [];
		$result = $this->mongo_db->find_one(MDB_SITEINFO,['_id'=>1],['twilio_accout_sid','twilio_auth_token','twilio_number','default_country_code']);
		
		$account_sid = $result['twilio_accout_sid']; 
		$auth_token = $result['twilio_auth_token']; 
		$client = new Services_Twilio($account_sid, $auth_token);
		
		$msg = [];
		try {
			foreach($bulkmessages as $key => $value) {
				if(isset($result['default_country_code']) && isset($result['twilio_number']) ) {				
					$msg[] = [ 
							'To' => $result['default_country_code'].$key, 
							'From' => $result['twilio_number'], 
							'Body' => $value,
					];
				}				
			}
			$result = $client->account->messages->create($msg);
			$response['code'] = 1;
			$response['message'] = 'Message Sent Successfully';
			
		} catch(Services_Twilio_RestException $ex) {
			$response['code'] = 0;
			$response['message'] = $ex->getMessage();			
		}
		return $response;	
	}
			

    /** Get driver job status **/
    public function get_request_status($passenger_log_id = "")
    {
        //$sql = "SELECT driver_reply,time_to_reach_passen FROM ".PASSENGERS_LOG." WHERE `passengers_log_id` = '".$passenger_log_id."'";
        /*$sql = "SELECT available_drivers,rejected_timeout_drivers,total_drivers,selected_driver,status FROM " . DRIVER_REQUEST_DETAILS . " WHERE `trip_id` = '" . $passenger_log_id . "'";
        return Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        $res = $this->mongo_db->find(MDB_REQUEST_HISTORY,['trip_id'=> (int)$passenger_log_id],['available_drivers','rejected_timeout_drivers','total_drivers','selected_driver','status']);
        $result = iterator_to_array($res);
        return (!empty($result)) ? reset($result): [];
    }
    public function get_location_details($trip_id)
    {
		$args = [['$match' => ['_id' => (int)$trip_id]],
					  ['$lookup' => [
											   'from' => MDB_LOCATION_HISTORY,
											   'localField' => '_id',
											   'foreignField' => 'trip_id',
											   'as' => 'location']],
					  ['$unwind' => '$location'],
					  ['$project' => [
											   'current_location' => '$current_location',
											   'drop_location' => '$drop_location',
											   'active_record' => '$location.loc.coordinates',
											   'drop_latitude' => '$drop_latitude',
											   'drop_longitude' => '$drop_longitude',
											   'pickup_latitude' => '$pickup_latitude',
											   'pickup_longitude' => '$pickup_longitude'
											]]					  
					];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		return (!empty($result['result']) ? $result['result'] : []);
    }
      public function get_rejected_drivers($driver_id, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; 
        $end_time                 = $get_company_time_details['end_time']; 
        //echo  $driver_id.'//'.$end_time;exit;
        $match = ['driver_id'=> (int)$driver_id,
						'createdate'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)]
						];
        $res = $this->mongo_db->count(MDB_REJECTION_HISTORY,$match);
        return (isset($res)) ? $res : 0 ;		
    }
    public function get_rejected_drivers_old($driver_id, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; 
        $end_time                 = $get_company_time_details['end_time']; 
        $res = $this->mongo_db->count(MDB_REJECTION_HISTORY, ['driver_id'=>(int)$driver_id,'createdate'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)]]);
		
        return (isset($result)) ? $result : [] ;		
    }
    public function delete($table, $cond1, $cond2)
    {
        $result = DB::delete($table)->where($cond1, '=', $cond2)->execute();
        return $result;
    }
    /************ Used to add the temp passenger log details ************/
    public function add_passengers_log_temp($post)
    {
        $passenger_log = DB::select('tpassenger_log_id', 'tdriver_ids')->from(PASSENGER_LOG_TEMP)->where('tpassenger_log_id', '=', $post['passengers_log_id'])->execute()->as_array();
        if (count($passenger_log) > 0) {
            $trip_id = $post['passengers_log_id'];
            $drivers = explode(",", $passenger_log[0]['tdriver_ids']);
            if (end($drivers) == $post['driver_id']) {
                $driver_ids = $passenger_log[0]['tdriver_ids'];
            } else {
                $driver_ids = $passenger_log[0]['tdriver_ids'] . ',' . $post['driver_id'];
            }
            $updatequery = " UPDATE " . PASSENGER_LOG_TEMP . " SET tdriver_ids='$driver_ids' where tpassenger_log_id = '$trip_id'";
            $result      = Db::query(Database::UPDATE, $updatequery)->execute();
        } else {
            $result = DB::insert(PASSENGER_LOG_TEMP, [
                'tpassenger_log_id',
                'tdriver_ids',
                'tpassenger_id',
                'createdate'
            ])->values([
                $post['passengers_log_id'],
                $post['driver_id'],
                $post['passengers_id'],
                $post['createdate']
            ])->execute();
        }
        return $result;
    }
    /********************* Check any new job request for the driver ***********************/
    public function check_new_request($driver_id, $company_all_currenttimestamp)
    {
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
		$arguments = [['$match' => ['status' => (int)0,
												   'selected_driver' =>(int) $driver_id,
												   'createdate' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]
												   ]],
									['$project' => ['trip_id' => '$trip_id',
														   'available_drivers' => '$available_drivers']],
								 ['$sort'=>['_id'=>-1]],
								 ['$limit' => 1]
							];
		$result = $this->mongo_db->aggregate(MDB_REQUEST_HISTORY,$arguments);
		$res = isset($result['result']) ? $result['result'] : [];
		//print_r($res);exit;
        if (count($res) > 0) {
			//$result =Commonfunction::change_key($result);
            $trip_id = $res[0]['trip_id'];
        } else {
            $trip_id = 0;
        }
        return $trip_id;
    }
    public function check_new_request_old($driver_id, $company_all_currenttimestamp)
    {
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
        //$sql = "SELECT trip_id FROM ".DRIVER_REQUEST_DETAILS." WHERE status = '0' and FIND_IN_SET('$driver_id',available_drivers)  and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers) and createdate >= '$currentdate' ORDER BY trip_id DESC LIMIT 0 , 1";
        /*$sql = "SELECT trip_id,available_drivers FROM ".DRIVER_REQUEST_DETAILS."
        WHERE status = '0'
        and selected_driver='$driver_id'
        and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers)
        and createdate >= '$currentdate'
        ORDER BY trip_id DESC
        LIMIT 0 , 1";*/
        $sql         = "SELECT trip_id,available_drivers FROM " . DRIVER_REQUEST_DETAILS . "
			WHERE status = '0'
			and selected_driver='$driver_id'
			and createdate >= '$currentdate'
			ORDER BY trip_id DESC
			LIMIT 0 , 1";
        $result      = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            $trip_id = $result[0]['trip_id'];
            //$updatequery = " UPDATE ".DRIVER_REQUEST_DETAILS." SET status='1' where trip_id = '$trip_id'";	
            //$result = Db::query(Database::UPDATE, $updatequery)
            //->execute();			
        } else {
            $trip_id = 0;
        }
        return $trip_id;
    }
    /****************** Select driver request ******************/
     public function get_driver_request($trip_id)
    {
		$result = $this->mongo_db->find_one(MDB_REQUEST_HISTORY,['trip_id' => (int)$trip_id ],['available_drivers', 'total_drivers', 'rejected_timeout_drivers', 'status']);
		return (!empty($result) && isset($result)) ?$result:[];
    }
    public function get_driver_request_old($trip_id)
    {
        $driver_request = DB::select('available_drivers', 'total_drivers', 'rejected_timeout_drivers', 'status')->from(DRIVER_REQUEST_DETAILS)->where('trip_id', '=', $trip_id)->execute()->as_array();
        //print_r($driver_request);
        if (count($driver_request) > 0) {
            return $driver_request;
        } else {
            return 0;
        }
    }
    public function company_addr_details($company_id)
    {
        $addr_details = DB::select('login_city', 'login_state', 'login_country', 'address')->from(PEOPLE)->where('company_id', '=', $company_id)->limit(1)->execute()->as_array();
        if (count($addr_details) > 0) {
            return $addr_details;
        } else {
            return 0;
        }
    }
    public function company_get_city_name($city)
    {
        $addr_details = DB::select('city_name')->from(CITY)->where('city_id', '=', $city)->where('city_status', '=', 'A')->limit(1)->execute()->as_array();
        if (count($addr_details) > 0) {
            return $addr_details[0]['city_name'];
        } else {
            return 0;
        }
    }
    public function company_get_state_name($state)
    {
        $addr_details = DB::select('state_name')->from(STATE)->where('state_id', '=', $state)->where('state_status', '=', 'A')->limit(1)->execute()->as_array();
        if (count($addr_details) > 0) {
            return $addr_details[0]['state_name'];
        } else {
            return 0;
        }
    }
    public function company_get_country_code($country)
    {
        $addr_details = DB::select()->from(COUNTRY)->where('country_id', '=', $country)->where('country_status', '=', 'A')->limit(1)->execute()->as_array();
        if (count($addr_details) > 0) {
            return $addr_details;
        } else {
            return 0;
        }
    }
    public function get_driver_coordinates($driver_id)
    {
        $result = DB::select('free_record')->from(DRIVER_LOCATION_HISTORY)->where('driver_id', '=', $driver_id)->where('trip_id', '=', '0')->order_by('location_hid', 'desc')->limit(1)->execute()->as_array();
        if (count($result) > 0) {
            $exp         = explode('],[', $result[0]['free_record']);
            $last_20     = array_slice($exp, -20, 20, true);
            //print_r($last_20);exit;
            $coordinates = [];
            foreach ($last_20 as $k => $v) {
                $string        = str_replace([
                    '[',
                    ']'
                ], '', $v);
                $coordinates[] = $string;
            }
            if ($coordinates != NULL) {
                $coordinates = implode("#", $coordinates);
            }
            return $coordinates;
        } else {
            return 0;
        }
    }
    public static function company_model_details($default_companyid)
    {
		
		$mongo_db = MangoDB::instance('default');
		
        if (FARE_SETTINGS == 2 && $company_id != "") {
			$arguments = [['$unwind'=>['$model_fare']],
							   [$lookup =>
									['from' => MDB_MOTOR_MODEL,
											'localField' => 'model_fare.model_id',
											'foreignField' => '_id',
											'as' => 'motor_model']
									],
							   ['$unwind'=>['$motor_model']],
							   ['$match'=>['_id'=> 1,'model_fare.fare_status'=>'A']],
							   ['$group'=>[
									'_id'=>['model_id'=>'$motor_model._id',
									'model_name' => '$model_fare.model_name',
									'model_name_ar' => '$model_fare.model_name_ar',
									'model_size' => '$model_fare.model_size',
									'max_luggage' => '$model_fare.max_luggage',
                                    'model_image' => '$model_fare.model_image',
                                    'model_image_new' => '$model_fare.model_image_new',
                                    'model_image_unfocus' => '$model_fare.model_image_unfocus',
									'iconic_image' => '$model_fare.iconic_image',
                                    'model_image_thumb' => '$model_fare.model_image_thumb',
                                    'model_image_unfocus_thumb' => '$model_fare.model_image_unfocus_thumb',
									'iconic_image_thumb' => '$model_fare.iconic_image_thumb',
									'base_fare' => '$model_fare.minutes_fare',
                                   					'min_fare' => '$model_fare.base_fare',
									'base_mins' => '$model_fare.time',
									'waiting_cost_per_hour' => '$model_fare.waiting_time',
                                    'waiting_free' => '$model_fare.waiting_free',
                                    'airport_pickup_fare' => '$model_fare.airport_pickup_fare',
									'airport_drop_fare' => '$model_fare.airport_drop_fare',
									//'min_fare' => '$model_fare.min_fare',
									//'min_km' => '$model_fare.min_km',
									//'below_above_km' => '$model_fare.below_above_km',
									//'below_km' => '$model_fare.below_km',
									//'above_km' => '$model_fare.above_km',
									//'cancellation_fare' => '$model_fare.cancellation_fare',
									'night_charge' => '$model_fare.night_charge',
									'night_timing_from' => '$model_fare.night_timing_from',
									'night_timing_to' => '$model_fare.night_timing_to',
									'night_fare' => '$model_fare.night_fare',
									'evening_charge' => '$model_fare.evening_charge',
									'evening_timing_from' => '$model_fare.evening_timing_from',
									'evening_timing_to' => '$model_fare.evening_timing_to',
									'evening_fare' => '$model_fare.evening_fare',
									'priority' => '$motor_model.priority',
                                    'model_image_2'=>'$motor_model.model_image_2',
                                    'model_fare_image'=>'$motor_model.model_fare_image'
							   ]]],
							   ['$sort'=>['_id.model_id'=>1]]
							];            
			$result = $mongo_db->aggregate(MDB_COMPANY,$arguments);
			return (!empty($result['result'])) ? $result['result']: [];
        } else {
			$arguments = [['$match'=>['model_status'=> 'A']],
							   ['$project'=>[
									'model_id' => '$_id',
									'model_name' => '$model_name',
									'model_name_ar' => '$model_name_ar',
									'category_name' => '$category_name',
									'model_size' => '$model_size',
									'max_luggage' => '$max_luggage',
                                    'model_image' => '$model_image',
									'model_image_new' => '$model_image_new',
                                    'model_image_unfocus' => '$model_image_unfocus',
									'iconic_image' => '$iconic_image',
									'model_image_thumb' => '$model_image_thumb',
                                    'model_image_unfocus_thumb' => '$model_image_unfocus_thumb',
									'iconic_image_thumb' => '$iconic_image_thumb',
									'base_fare' => '$minutes_fare',
									'min_fare' => '$base_fare',
									'base_mins' => '$time',
                                    'waiting_cost_per_hour' => '$waiting_time',
                                    'airport_pickup_fare' => '$airport_pickup_fare',
									'airport_drop_fare' => '$airport_drop_fare',
									'waiting_free' => '$waiting_free',
									//'min_fare' => '$min_fare',
									//'min_km' => '$min_km',
									//'below_above_km' => '$below_above_km',
									//'below_km' => '$below_km',
									//'above_km' => '$above_km',
									//'cancellation_fare' => '$cancellation_fare',
									'night_charge' => '$night_charge',
									'night_timing_from' => '$night_timing_from',
									'night_timing_to' => '$night_timing_to',
									'night_fare' => '$night_fare',
									'evening_charge' => '$evening_charge',
									'evening_timing_from' => '$evening_timing_from',
									'night_fare' => '$night_fare',
									'evening_charge' => '$evening_charge',
									'evening_timing_from' => '$evening_timing_from',
									'evening_timing_to' => '$evening_timing_to',
									'evening_fare' => '$evening_fare',
									'priority' => '$priority',
                                    'model_image_2'=>'$model_image_2',
                                    'model_fare_image'=>'$model_fare_image'

							   ]],
				['$sort' => ['priority' => 1]],

							];   
                           // echo "<pre>";print_r($arguments);exit();         
			$result = $mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
			return (!empty($result['result'])) ? $result['result']: [];
        }
    }
    public static function company_model_details_old($default_companyid)
    {
        $company_id = $default_companyid;
        if (FARE_SETTINGS == 2 && $company_id != "") {
            $model_base_query = "select distinct " . MOTORMODEL . ".model_id," . COMPANY_MODEL_FARE . ".model_name," . COMPANY_MODEL_FARE . ".model_size,
								" . COMPANY_MODEL_FARE . ".base_fare,
								" . COMPANY_MODEL_FARE . ".min_fare,
								" . COMPANY_MODEL_FARE . ".min_km,
								" . COMPANY_MODEL_FARE . ".below_above_km,
								" . COMPANY_MODEL_FARE . ".below_km,
								" . COMPANY_MODEL_FARE . ".above_km,
								" . COMPANY_MODEL_FARE . ".cancellation_fare,
								" . COMPANY_MODEL_FARE . ".night_charge,
								DATE_FORMAT(" . COMPANY_MODEL_FARE . ".night_timing_from,'%h:%i %p') as night_timing_from,
								DATE_FORMAT(" . COMPANY_MODEL_FARE . ".night_timing_to,'%h:%i %p') as night_timing_to,
								" . COMPANY_MODEL_FARE . ".night_fare,
								" . COMPANY_MODEL_FARE . ".evening_charge,
								DATE_FORMAT(" . COMPANY_MODEL_FARE . ".evening_timing_from,'%h:%i %p') as evening_timing_from,
								DATE_FORMAT(" . COMPANY_MODEL_FARE . ".evening_timing_to,'%h:%i %p') as evening_timing_to,
								" . COMPANY_MODEL_FARE . ".evening_fare
								from " . COMPANY_MODEL_FARE . "
								left join " . MOTORMODEL . " on " . MOTORMODEL . ".model_id=" . COMPANY_MODEL_FARE . ".model_id
								where " . COMPANY_MODEL_FARE . ".company_cid='$company_id'
								and " . COMPANY_MODEL_FARE . ".fare_status='A'
								order by model_id ASC";
            /* DATE_FORMAT(".COMPANY_MODEL_FARE.".night_timing_from,'%h:%i %p'),
            DATE_FORMAT(".COMPANY_MODEL_FARE.".night_timing_to,'%h:%i %p'), */
            $result           = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            //print_r($result);exit;
            return $result;
        } else {
            /*$result = DB::select('model_id','model_name','base_fare','min_fare','min_km','below_above_km','below_km','above_km','night_charge','night_timing_from','night_timing_to','night_fare')->from(MOTORMODEL)
            ->where('model_status','=','A')
            ->order_by('model_id','ASC')
            ->execute()
            ->as_array();*/
           
           /* $model_base_query = "SELECT `model_id`, `model_name`, `model_size`, `base_fare`, `min_fare`, `cancellation_fare`, `min_km`, `below_above_km`, `below_km`, `above_km`, `night_charge`, DATE_FORMAT(`night_timing_from`,'%h:%i %p') as night_timing_from, DATE_FORMAT(`night_timing_to`,'%h:%i %p') as night_timing_to, `night_fare`, `evening_charge`, DATE_FORMAT(`evening_timing_from`,'%h:%i %p') as evening_timing_from, DATE_FORMAT(`evening_timing_to`,'%h:%i %p') as evening_timing_to, `evening_fare` FROM " . MOTORMODEL . " WHERE `model_status` = 'A' ORDER BY `model_id` ASC";
            $result           = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
            */
			$res = $this->mongo_db->find(MDB_MOTOR_MODEL,['model_status'=> 'A'],['available_drivers','rejected_timeout_drivers','total_drivers','selected_driver','status']);
			$result = iterator_to_array($res);
			return (!empty($result)) ? reset($result): [];
        }
    }
    public function get_modelfare_details($default_companyid, $taxi_model)
    {
		
        if ($default_companyid != "") {
            /*$result = DB::select('model_id', 'model_name', 'model_size', 'motor_mid', 'base_fare', 'min_km', 'min_fare', 'cancellation_fare', 'below_above_km', 'below_km', 'above_km', 'night_fare', 'waiting_time', 'minutes_fare')->from(COMPANY_MODEL_FARE)->where('company_cid', '=', $default_companyid)->where('model_id', '=', $taxi_model)->where('fare_status', '=', 'A')->order_by('company_model_fare_id', 'DESC')->limit(1)->execute()->as_array();*/
           
			$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=> (int)$default_companyid,'model_fare.model_id'=>(int)$taxi_model,'model_fare.fare_status'=>'A'],['model_fare.model_id', 'model_fare.model_name', 'model_fare.model_size', 'model_fare.motor_mid', 'model_fare.base_fare', 'model_fare.min_km', 'model_fare.min_fare', 'model_fare.cancellation_fare', 'model_fare.below_above_km', 'model_fare.below_km', 'model_fare.above_km', 'model_fare.night_fare', 'model_fare.waiting_time', 'model_fare.minutes_fare']);
			return (!empty($result)) ? $result: [];
        } else {
            /*$result = DB::select('model_id', 'model_name', 'model_size', 'motor_mid', 'base_fare', 'min_km', 'min_fare', 'cancellation_fare', 'below_above_km', 'below_km', 'above_km', 'night_fare', 'waiting_time', 'minutes_fare')->from(MOTORMODEL)->where('model_id', '=', $taxi_model)->order_by('model_id', 'DESC')->limit(1)->execute()->as_array();*/
            
            $result = $this->mongo_db->find_one(MDB_MOTOR_MODEL,['_id'=> (int)$taxi_model],['model_id', 'model_name', 'model_size', 'motor_mid', 'base_fare', 'min_km', 'min_fare', 'cancellation_fare', 'below_above_km', 'below_km', 'above_km', 'night_fare', 'waiting_time', 'minutes_fare']);
			return (!empty($result)) ? $result: [];
        }
        //print_r( $result);exit;
        return (count($result)>0)?$result:[];
    }
    public function get_driver_taxi_speed($taxi_id)
    {
        $result = DB::select('taxi_speed')->from(TAXI)->where('taxi_id', '=', $taxi_id)->where('taxi_status', '=', 'A')->order_by('taxi_id', 'DESC')->limit(1)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['taxi_speed'];
        } else {
            return 0;
        }
    }
    public function getpromodetails($promo_code = "", $passenger_id = "",$passeger_number="")
    {
       
        $promo_fetch = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,['promocode'=>$promo_code,'customer_number'=>$passeger_number],["promocode","package","promo_used","promo_limit","total_used","total_applied"]);
        if(count($promo_fetch) <= 0) 
        {
            $promo_fetch = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,['promocode'=>$promo_code,'promo_type' => "1"],["promocode","package","promo_used","promo_limit","total_used","total_applied"]);
        }    
        
        if (count($promo_fetch) > 0) {
            $promocode        = $promo_fetch['promocode'];
            $package   = $promo_fetch['package'];
            $get_passenger_commission = $this->mongo_db->find_one(MDB_COUPON_PACKAGE,['_id'=>(int)$package],["passenger_commission","corporate_commission"]);
            $corporate_commission = $get_passenger_commission['corporate_commission'];
            $promo_discount = $get_passenger_commission['passenger_commission'];
            $promo_used       = isset($promo_fetch['promo_used'])?$promo_fetch['promo_used']:0;
            $promo_limit      = $promo_fetch['promo_limit'];   
            $total_used      = $promo_fetch['total_used'];   
            $total_applied      = $promo_fetch['total_applied'];   

          
            //$promo_user_count = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,array('promocode'=>$promo_code,'passenger_id'=>(int)$passenger_id));
            if ($total_used >= $promo_limit) {
                return -1;
            } else {
                return $promo_discount."|".$corporate_commission;
            }
        } else {
            return 0;
        }
    }
    public function update_promo_discount($passenger_log_id, $promocode, $referral_discount)
    {
        /****************************************/
        /* $promo_array = array("promo_amount"=>$referral_discount);
        $refby_result = DB::update(PASSENGERS_LOG)
        ->set($promo_array)
        ->where('passengers_log_id', '=', $passenger_log_id)
        ->execute();		*/
        //print_r($ref_result);			
        /*****************************************/
    }
    /*** Get Passenger Profile details using passenger log id  ***/
    public function get_driver_request_detail($trip_id = "", $passenger_id = "")
    {
        $date = date('Y-m-d');
        if ($trip_id != "") {
            $sql = "SELECT " . DRIVER_REQUEST_DETAILS . ".trip_id,
						" . PASSENGERS_LOG . ".driver_id,
						" . PASSENGERS_LOG . ".passengers_id,
						" . DRIVER_REQUEST_DETAILS . ".status,
						" . PASSENGERS_LOG . ".notification_status,
						" . PASSENGERS_LOG . ".current_location AS pickup_location,
						" . PASSENGERS_LOG . ".now_after,
						" . PASSENGERS_LOG . ".company_id,
						IFNULL(" . TRANS . ".amt,0) as amt
					FROM " . DRIVER_REQUEST_DETAILS . "
					LEFT JOIN " . PASSENGERS_LOG . " ON ( " . DRIVER_REQUEST_DETAILS . ".trip_id =  " . PASSENGERS_LOG . ".passengers_log_id)
					LEFT JOIN " . TRANS . " ON ( " . DRIVER_REQUEST_DETAILS . ".trip_id =  " . TRANS . ".passengers_log_id )
					WHERE trip_id = '$trip_id' AND DATE(" . DRIVER_REQUEST_DETAILS . ".createdate)='$date'";
        } else {
            $sql = "SELECT " . DRIVER_REQUEST_DETAILS . ".trip_id,
						" . PASSENGERS_LOG . ".driver_id,
						" . PASSENGERS_LOG . ".passengers_id,
						" . DRIVER_REQUEST_DETAILS . ".status,
						" . PASSENGERS_LOG . ".now_after,
						" . PASSENGERS_LOG . ".notification_status,
						" . PASSENGERS_LOG . ".current_location AS pickup_location,
						" . PASSENGERS_LOG . ".company_id,
						IFNULL(" . TRANS . ".amt,0) as amt
					FROM " . DRIVER_REQUEST_DETAILS . "
					LEFT JOIN " . PASSENGERS_LOG . " ON ( " . DRIVER_REQUEST_DETAILS . ".trip_id =  " . PASSENGERS_LOG . ".passengers_log_id )
					LEFT JOIN " . TRANS . " ON ( " . DRIVER_REQUEST_DETAILS . ".trip_id =  " . TRANS . ".passengers_log_id )
					WHERE " . PASSENGERS_LOG . ".passengers_id = '$passenger_id' AND (status = '2' OR status='3' OR status='5' OR status='6' OR status='7' OR status='8' OR status='9') AND DATE(" . DRIVER_REQUEST_DETAILS . ".createdate)='$date'";
        }
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function get_notification_status($trip_id, $current_status)
    {
        $result_value = 1;
        if (!empty($trip_id)) {
            $result = DB::select('notification_status')->from(PASSENGERS_LOG)->where('passengers_log_id', 'IN', $trip_id)->execute()->as_array();
            foreach ($result as $r) {
                if ($r['notification_status'] == $current_status) {
                    $result_value = 0;
                } else {
                    $result_value = 1;
                    break;
                }
            }
        }
        return $result_value;
    }
    public function get_passengerlog_details($trip_id)
    {
        $sql    = "SELECT * FROM  `passengers_log` WHERE `passengers_log_id` = '$trip_id'";
        $result = DB::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    /********************** Check Promo Code ***************/
      public function checkpromocode($promo_code = "", $customer_number = "", $company_id = "",$passenger_id="")
    {
		$match = ['promocode' => $promo_code, 'promo_type' => "1"];
                $promo = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,$match);
                if(count($promo) <= 0)
                {
                    $promo = [];
                    $match = ['promocode' => $promo_code,'customer_number' => $customer_number];
                    $project = ['promocode','promo_discount','promo_used','start_date','expire_date','promo_limit','total_applied','total_used'];		
                    $promo = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,$match,$project);
                }
                $promo_fetch = (isset($promo)?$promo:[]);
        if (count($promo_fetch) > 0) {
            $promocode      = (isset($promo_fetch['promocode'])?$promo_fetch['promocode']:'');
            $promo_discount = (isset($promo_fetch['promo_discount'])?$promo_fetch['promo_discount']:'');
            $promo_used     = (isset($promo_fetch['promo_used'])?$promo_fetch['promo_used']:'');
            $promo_start_date    = (isset($promo_fetch['start_date'])?$promo_fetch['start_date']:'');
            $promo_expire_date   = (isset($promo_fetch['expire_date'])?$promo_fetch['expire_date']:'');
            $promo_limit    = (isset($promo_fetch['promo_limit'])?$promo_fetch['promo_limit']:'');
			$promo_start = Commonfunction::convertphpdate('Y-m-d H:i:s',$promo_start_date);
			$promo_expire = Commonfunction::convertphpdate('Y-m-d H:i:s',$promo_expire_date);
            $total_applied     = (isset($promo_fetch['total_applied'])?$promo_fetch['total_applied']:'');
            $total_used     = (isset($promo_fetch['total_used'])?$promo_fetch['total_used']:'');

            if ($company_id == '') {
                if (TIMEZONE) {
                    $current_time = convert_timezone('now', TIMEZONE);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            } else {
				$timezone_query = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
				$timezone = (isset($timezone_query) ? $timezone_query :[]);
                if (isset($timezone['companydetails']['time_zone'])) {
                    $current_time = convert_timezone('now', $timezone['companydetails']['time_zone']);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            }
			
            if (strtotime($promo_start) > strtotime($current_time)) {
                return 3;
            } else if (strtotime($promo_expire) < strtotime($current_time)) {
                return 4;
            } else {

                if($total_applied >= $promo_limit)
                {
                    return 2;
                }
                else
                {
                    return 1;
                }    

            }
        } else {
            return 0;
        }
    }
    public function checkpromocode_old($promo_code = "", $passenger_id = "", $company_id = "")
    {
        $promo_query = "SELECT promocode,promo_discount,promo_used,start_date,expire_date,promo_limit FROM  " . PASSENGER_PROMO . " WHERE  promocode = '$promo_code' and  `passenger_id` ='$passenger_id'  ";
        $promo_fetch = Db::query(Database::SELECT, $promo_query)->execute()->as_array();
        if (count($promo_fetch) > 0) {
            $promocode      = $promo_fetch[0]['promocode'];
            $promo_discount = $promo_fetch[0]['promo_discount'];
            $promo_used     = $promo_fetch[0]['promo_used'];
            $promo_start    = $promo_fetch[0]['start_date'];
            $promo_expire   = $promo_fetch[0]['expire_date'];
            $promo_limit    = $promo_fetch[0]['promo_limit'];
            if ($company_id == '') {
                if (TIMEZONE) {
                    $current_time = convert_timezone('now', TIMEZONE);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            } else {
                $model_base_query = "select time_zone from  company where cid='$company_id' ";
                $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
                if ($model_fetch[0]['time_zone'] != '') {
                    $current_time = convert_timezone('now', $model_fetch[0]['time_zone']);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            }
            // echo "start"."       ".$promo_start;
            // echo "end"."       ".$current_time;
            if (strtotime($promo_start) > strtotime($current_time)) {
                return 3;
            } else if (strtotime($promo_expire) < strtotime($current_time)) {
                return 4;
            } else {
                $promo_use_query  = "SELECT COUNT(passengers_log_id) as promo_count  FROM  " . PASSENGERS_LOG . " WHERE  promocode = '$promo_code' and  `passengers_id` ='$passenger_id' and  travel_status='1' and driver_reply='A'";
                $promo_user_count = Db::query(Database::SELECT, $promo_use_query)->execute()->as_array();
                if (count($promo_user_count) > 0 && $promo_user_count[0]['promo_count'] >= $promo_limit) {
                    return 2;
                } else {
                    return 1;
                }
            }
        } else {
            return 0;
        }
    }
    //To get the passenger cancel request data
     public function get_passenger_cancel_request_data($driver_id = "", $company_id = "")
    {
		$get_company_time_details = $this->get_company_time_details($company_id);
        $current_time             = $get_company_time_details['current_time']; // Current Time
		$match_array = [
						'driver_id' => (int)$driver_id,
						'travel_status' => 4,
						'notification_status' => ['$nin' => [4,5]],
						'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)
					];
		$arguments = [
			['$match'=>$match_array],
			['$group' => [
				'_id' => NULL,
				'total_amount' => ['$sum' => '$transaction.fare']
			]],
			['$project'=>[
				'trip_id'=>'$_id',
				'status'=>'$travel_status',
				'notification_status'=>'$notification_status',
			]]
		];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		//print_r($result);exit;
        $result = (!empty($result['result']) ? $result['result']:[]);
        return $result;
    }
 
    public function get_passenger_cancel_request_data_old($driver_id = "", $company_id = "")
    {
        if ($company_id == '') {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
            } else {
                $current_time = date('Y-m-d H:i:s');
            }
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();
            if ($timezone_fetch[0]['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch[0]['time_zone']);
            } else {
                $current_time = date('Y-m-d H:i:s');
            }
        }
        //$date = date('Y-m-d');
        $sql    = "SELECT " . PASSENGERS_LOG . ".passengers_log_id as trip_id,
					" . PASSENGERS_LOG . ".travel_status as status,
					" . PASSENGERS_LOG . ".notification_status
				FROM " . PASSENGERS_LOG . "
				WHERE " . PASSENGERS_LOG . ".driver_id = '$driver_id' AND " . PASSENGERS_LOG . ".travel_status = '4' AND " . PASSENGERS_LOG . ".notification_status !='4' AND " . PASSENGERS_LOG . ".notification_status !='5' AND " . PASSENGERS_LOG . ".createdate = '$current_time' "; //DATE(".PASSENGERS_LOG.".createdate)='$date'
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
        //				LEFT JOIN ".DRIVER." ON ( ".DRIVER_REQUEST_DETAILS.".driver_id = ".DRIVER.".id)
    }
    /**************** Get Promo details ***************/
    public function get_past_bookings($ids = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $company_id)
    {
		$get_company_time_details = $this->get_company_time_details($company_id);
        $start_time  = $get_company_time_details['start_time']; //Start time
		$match_query = [];
		
		$match_query['driver_reply'] = $driver_reply;
		$match_query['travel_status'] = (int)$status;
		$match_query['passengers_id'] = ['$in' =>$ids];
		
		
		if ($createdate == 0) {
			$match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
        }
		 if ($company_id != "" && $company_id != 0 ) {
			$match_query['company_id'] = (int)$company_id;
        }
		
		$arguments = [
			['$match' => $match_query],
			['$lookup' 		=> [
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                ]
            ],
			['$lookup' =>
				[
					'from'=>MDB_PASSENGERS,
					'localField'=> "passengers_id",
					'foreignField' => "_id",
					'as'=> "passenger"
				]
            ],
			['$unwind' => '$passenger'],
			[
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => "passenger.account_type",
					'foreignField' => "_id",
					'as' => "account"
				]
			],
			//array('$unwind' => '$account'),
			['$lookup' 		=> [
                    'from'			=>	MDB_TAXI,
                    'localField'	=> "taxi_id",
                    'foreignField'	=> "_id",
                    'as'			=> "taxi"
                ]
            ],
            ['$unwind' => '$taxi'],
			['$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => "_id",
					'as' => "people"
				]
			],
			['$unwind' => '$people'],
			   ['$lookup' 		=> [
                    'from'			=>	MDB_MOTOR_MODEL,
                    'localField'	=> "taxi_modelid",
                    'foreignField'	=> "_id",
                    'as'			=> "model"
                ]
            ],
            ['$unwind'=>'$model'],
			['$project' =>
				['_id' => 0,
					'passengers_log_id'=>'$_id',
					'passengers_id' => '$passengers_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'pickup_longitude'=>'$pickup_longitude',
					'pickup_latitude'=>'$pickup_latitude',
					'drop_longitude'=>'$drop_longitude',
					'drop_latitude'=>'$drop_latitude',
					'pickup_time' => '$pickup_time',
					'travel_status'=>'$travel_status',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'passenger_name'=>'$passenger.name',//newely added for child
					'passenger_image'=>'$passenger.profile_image', //newely added for child
					'passenger_id'=>'$passenger._id',//newely added for child
					'passengers_log_id'=>'$_id',
					'driver_id'=>'$people._id',
					'notes_driver'=>'$passenger.notes_driver',
					'name'=>'$people.name',
					'lastname'=>'$people.lastname',
					'drop_time'=>'$drop_time',
					'actual_pickup_time' => '$actual_pickup_time',
					'driver_image'=>'$people.profile_picture',
					'model_name' => '$model.model_name',
					'taxi_no' => '$taxi.taxi_no',
					'distance'=>'$distance',
					'account_type' => '$passenger.account_type',
					'account_type_name' => '$account.account_type',
					'metric'=>'$trans.distance_unit',
					'waitingtime' => '$waitingtime',
					'drivername' => ['$concat' => ['$people.name', ' ', '$people.lastname']],
					//'trip_duration' => array('$subtract' => array('$drop_time','$actual_pickup_time')),
				]
			],
			['$sort' => ['_id' => -1]],
			['$skip' => (int)$start],
			['$limit' => (int)$limit]
		];
		//print "<pre>";
		//print_r($arguments);

        $travel_status = $status;
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
		//print_r($result);
		//exit;
		return (!empty($result['result'])?$result['result']:[]);
    }
    
    public function get_past_bookings_old($userid = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $condition                = "";
        if ($createdate == 0) {
            $condition = "AND pg.pickup_time >='" . $start_time . "'";
        }
        /*$sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=pg.driver_id) as drivername  FROM ".PASSENGERS_LOG." as pg LEFT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition  order by pg.passengers_log_id desc LIMIT $start,$limit";     */
        /*if($start == 0 && $limit ==0)
        {*/
        $company_condition = "";
        if ($company_id != "") {
            $company_condition = " AND pg.company_id = '$company_id'";
        }
        $sql = "SELECT pg.passengers_log_id,pg.current_location as pickup_location,pg.drop_location,pg.pickup_longitude,pg.pickup_latitude,pg.drop_longitude,pg.drop_latitude,IF(pg.actual_pickup_time = '0000-00-00 00:00:00',pg.pickup_time,pg.actual_pickup_time) as pickuptime,pg.travel_status AS travel_status,pg.current_location AS pickup_location,pg.drop_location, ps.name AS passenger_name,pg.passengers_log_id,pe.id AS driver_id,pg.notes_driver AS notes_driver,(select concat(name,' ',lastname) from " . PEOPLE . " where id=pg.driver_id) as drivername,pg.drop_time, TIMEDIFF(pg.drop_time,IF(pg.actual_pickup_time = '0000-00-00 00:00:00',pg.pickup_time,pg.actual_pickup_time)) as trip_duration
		FROM " . PASSENGERS_LOG . " as pg
		RIGHT JOIN " . TRANS . " as t ON pg.passengers_log_id = t.passengers_log_id
		RIGHT JOIN " . PASSENGERS . " as ps ON pg.passengers_id = ps.id
		RIGHT JOIN " . TAXI . " as tx ON tx.taxi_id = pg.taxi_id
		RIGHT JOIN " . PEOPLE . " as pe ON  pg.driver_id = pe.id
		WHERE pg.passengers_id = '$userid'
		AND pg.travel_status = '$status'
		AND pg.driver_reply = '$driver_reply'
		$condition $company_condition
		order by pg.passengers_log_id desc
		LIMIT $start,$limit";
        //DATE_FORMAT(pg.pickup_time,'%h:%i %p,%d %b %Y') as pickuptime
        //$sql = "SELECT pg.passengers_log_id,pg.current_location as pickup_location,pg.drop_location,pg.no_passengers,time(pg.pickup_time) as pickuptime,pg.rating,tx.taxi_no AS taxi_no,tx.taxi_id AS taxi_id,pg.travel_status AS travel_status,pg.search_city AS city_id ,pg.current_location AS pickup_location,pg.pickup_latitude,pg.pickup_longitude,pg.drop_location,pg.drop_latitude,pg.drop_longitude,pg.time_to_reach_passen, ps.name AS passenger_name,ps.lastname AS passenger_lastname,pg.passengers_log_id,pe.phone AS driver_phone,pe.photo AS driver_image,pe.id AS driver_id,(select concat(name,' ',lastname) from ".PEOPLE." where id=pg.driver_id) as drivername,(select pay_mod_name from ".PAYMENT_MODULES." where pay_mod_id=t.payment_type) as payment_name,pg.passengers_log_id as pass_log_id,t.company_tax as tax_amount,pg.company_tax as tax_percentage,(select count(*) from  ".PASSENGERS_LOG." as pg RIGHT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' and pg.company_id='$company_id' $condition) as total_count  FROM ".PASSENGERS_LOG." as pg RIGHT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id RIGHT JOIN ".PASSENGERS." as ps ON pg.passengers_id = ps.id RIGHT JOIN ".TAXI." as tx ON tx.taxi_id = pg.taxi_id RIGHT JOIN ".PEOPLE." as pe ON  pg.driver_id = pe.id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition $company_condition order by pg.passengers_log_id desc LIMIT $start,$limit";
        //echo $sql;
        /*}
        else
        {
        $sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=pg.driver_id) as drivername,pg.passengers_log_id as pass_log_id   FROM ".PASSENGERS_LOG." as pg LEFT JOIN ".TRANS." as t ON pg.passengers_log_id = t.passengers_log_id  WHERE pg.passengers_id = '$userid' AND pg.travel_status = '$status' AND pg.driver_reply = '$driver_reply' $condition  order by pg.passengers_log_id desc LIMIT $start,$limit";
        }
        */
        //echo $sql;exit;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    
    public function get_pending_bookings_travel_statuszero($company_id, $pagination, $ids, $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $current_time               = $get_company_time_details['current_time']; //Start time
		
		$match_query = [];
		$match_query['passengers_id'] = ['$in' =>$ids];
		
		$match_query['travel_status'] = 0;
		if ($createdate == 0) {
			$match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)];
        }
		if ($pagination == 1) {
			$field_arguments = [
				['$sort' => ['pickup_time' => 1]],
				['$skip' => (int)$start],
				['$limit' => (int)$limit]
			];
        } else {
			$field_arguments = [['$sort' => ['travel_status' => -1]]];
        }
		
		$common_arguments = [['$match' => $match_query],
			['$lookup' =>
				[
					'from'=>MDB_PASSENGERS,
					'localField'=> "passengers_id",
					'foreignField' => "_id",
					'as'=> "passengers"
				]
            ],
            ['$unwind'=>'$passengers'],
			//array('$unwind' => '$passenger'),
			[
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => "passengers.account_type",
					'foreignField' => "_id",
					'as' => "account"
				]
			],
			['$project' =>
				['_id' => 0,
					'passengers_log_id' => '$_id',
					'passengers_id' => '$passengers_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'travel_status'=>'$travel_status',
					'pickup_location'=>'$current_location',
					'notes_driver'=>'$notes_driver',
					'waitingtime'=>'$waitingtime',
					'distance'=>'$distance',
					'pickup_time' => '$pickup_time',
					//'drivername'=>'$people.name',
					//'driver_id'=>'$people._id',
					'passenger_name'=>'$passengers.name',
					'bookings_type' => '$bookingtype',
					'account_type' => '$passengers.account_type',
					'account_type_name' => '$account.account_type'
				]
			]
									
		];
		$arguments = array_merge($common_arguments,$field_arguments);
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		//echo '<pre>';print_r($result['result']);exit;
		return (!empty($result['result'])?$result['result']:[]);
    }
    
    public function get_pending_bookings($company_id, $pagination, $ids, $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
		
		$match_query = [];
		//$match_query['passengers_id'] = (int)$userid;
		$match_query['passengers_id'] = ['$in' =>$ids];
		$match_query['driver_reply'] = $driver_reply;
		$match_query['travel_status'] = ['$in' => [9,2,3,5]];
		if ($createdate == 0) {
			$match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
        }
		if ($pagination == 1) {
			$field_arguments = [
				//array('$sort' => array('travel_status' => -1)),
				['$sort' => ['pickup_time' => 1]],
				['$skip' => (int)$start],
				['$limit' => (int)$limit]
			];
        } else {
			$field_arguments = [['$sort' => ['travel_status' => -1]]];
        }
		$common_arguments = [
			['$match' => $match_query],
			['$lookup' =>
				[
					'from'=>MDB_PASSENGERS,
					'localField'=> "passengers_id",
					'foreignField' => "_id",
					'as'=> "passengers"
				]
            ],
            ['$unwind'=>'$passengers'],
			[
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => "passengers.account_type",
					'foreignField' => "_id",
					'as' => "account"
				]
			],
			['$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => "_id",
					'as' => "people"
				]
			],
			['$unwind' => '$people'],
			['$lookup' 		=> [
                    'from'			=>	MDB_TAXI,
                    'localField'	=> "taxi_id",
                    'foreignField'	=> "_id",
                    'as'			=> "taxi"
                ]
            ],
            ['$unwind'=>'$taxi'],
            ['$lookup' 		=> [
                    'from'			=>	MDB_MOTOR_MODEL,
                    'localField'	=> "taxi_modelid",
                    'foreignField'	=> "_id",
                    'as'			=> "model"
                ]
            ],
            ['$unwind'=>'$model'],
			['$project' =>
				['_id' => 0,
					'passengers_log_id' => '$_id',
					'passengers_id' => '$passengers_id',
					'pickup_location'=>'$current_location',
					'drop_location'=>'$drop_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'travel_status'=>'$travel_status',
					'pickup_location'=>'$current_location',
					'notes_driver'=>'$notes_driver',
					'waitingtime'=>'$waitingtime',
					'distance'=>'$distance',
					'pickup_time' => '$pickup_time',
					'driver_id'=>'$people._id',
					'passenger_name'=>'$passengers.name',
					'bookings_type' => '$bookingtype',
					'drivername' => ['$concat' => ['$people.name', ' ', '$people.lastname']],
					'driver_image'=>'$people.profile_picture',
					'model_name' => '$model.model_name',
					'taxi_no' => '$taxi.taxi_no',
					'account_type' => '$passengers.account_type',
					'account_type_name' => '$account.account_type'
					
				]
			]							
		];
		$arguments = array_merge($common_arguments,$field_arguments);
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		return (!empty($result['result'])?$result['result']:[]);
    }
    
    
    public function get_pending_bookings_old($company_id, $pagination, $userid = "", $travelstatus = "", $driver_reply = "", $createdate = "", $start = null, $limit = null)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $condition                = "";
        if ($createdate == 0) {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "'";
        }
        if ($pagination == 1) {
            $orderby = "order by " . PASSENGERS_LOG . ".travel_status desc LIMIT $start,$limit";
        } else {
            $orderby = "order by " . PASSENGERS_LOG . ".travel_status desc";
        }
        //passengers_log_id,passengers_id,driver_id,taxi_id,current_location,pickup_latitude,pickup_longitude,drop_location,drop_latitude,drop_longitude,pickup_time,travel_status
        $sql = "SELECT " . PASSENGERS_LOG . ".passengers_log_id,
			" . PASSENGERS_LOG . ".current_location as pickup_location,
			" . PASSENGERS_LOG . ".drop_location,
			" . PASSENGERS_LOG . ".pickup_latitude,
			" . PASSENGERS_LOG . ".pickup_longitude,
			" . PASSENGERS_LOG . ".drop_latitude,
			" . PASSENGERS_LOG . ".drop_longitude,
			IF(" . PASSENGERS_LOG . ".actual_pickup_time = '0000-00-00 00:00:00'," . PASSENGERS_LOG . ".pickup_time," . PASSENGERS_LOG . ".actual_pickup_time) as pickuptime,
			" . PEOPLE . ".name AS drivername," . PEOPLE . ".id AS driver_id,
			" . PASSENGERS_LOG . ".travel_status AS travel_status,
			" . PASSENGERS_LOG . ".current_location AS pickup_location,
			" . PASSENGERS_LOG . ".drop_location,
			" . PASSENGERS_LOG . ".notes_driver,
			" . PASSENGERS_LOG . ".waitingtime,
			" . PASSENGERS_LOG . ".distance,
			" . PASSENGERS . ".name AS passenger_name 
			FROM  " . PASSENGERS_LOG . " 
			JOIN  " . PASSENGERS . " ON (  " . PASSENGERS_LOG . ".`passengers_id` =  " . PASSENGERS . ".`id` ) 
			JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` ) 
			JOIN  " . TAXI . " ON (  " . TAXI . ".`taxi_id` =  " . PASSENGERS_LOG . ".`Taxi_id` )  
			WHERE " . PASSENGERS_LOG . ".passengers_id = '$userid' 
			AND (travel_status = '9' or travel_status = '2' or travel_status = '3' or travel_status = '5') 
			AND driver_reply = '" . $driver_reply . "'  $condition  $orderby";
        //echo $sql;
        /*$sql = "SELECT *,(select concat(name,' ',lastname) from ".PEOPLE." where id=".PASSENGERS_LOG.".driver_id) as drivername  FROM ".PASSENGERS_LOG."   order by passengers_log_id desc LIMIT $start";     */
        //echo $sql;exit;
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    public function driver_past_bookings($pagination, $booktype, $id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $default_companyid = null)
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
		$match_query = [];
		$match_query['driver_id'] = (int)$id;
		$match_query['msg_status'] = $msg_status;
		$match_query['driver_reply'] = $driver_reply;
		$match_query['travel_status'] = (int)$travel_status;
		if ($booktype == 2) {
			$match_query['booking_from'] = (int)$booktype;
        } else {
			$match_query['booking_from'] = ['$ne' => 2];
        }
		if ($pagination == 1) {
			$custom_arguments = [
				[
					'$sort' => [
						'pickup_time' => -1
					]
				],
				[ '$skip' => (int)$start],
				[ '$limit' => (int)$limit]
			];
        } else {
			$custom_arguments = [
				[
					'$sort' => [
						'pickup_time' => -1
					]
				],
			];
        }
        $common_arguments = [[
                '$match' => $match_query
            ],
			[
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => "_id",
                    'as' => "passengers"
                ]
            ],
            [
                  '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ],
            [
                '$unwind' => '$trans'
            ],
			[
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            		
			[
                '$project' => [
					'pickup_time' => ['$sum' => ['$cond' => [['$eq' => ['$actual_pickup_time',new \MongoDB\BSON\UTCDateTime(strtotime('0000-00-00 00:00:00') * 1000)]],'$pickup_time','$actual_pickup_time']]],
					'passengers_log_id'=>'$_id',
					'pickup_location'=>'$current_location',
					'passenger_name'=>'$passengers.name',
					'profile_image'=>'$passengers.profile_image',
					//'profile_image'=>'$passengers._id',
					'drop_location' => [ '$ifNull' => [ '$drop_location', 0 ] ],
					'wallet_amount'=>'$used_wallet_amount',
					'amt'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$sum'=>['$trans.fare','$trans.wallet_amount_used','$trans.add_amt','$trans.pending_amt']],
                             ['$sum'=>['$trans.actual_paid_amt','$trans.wallet_amount_used']]]
                    ],
					'travel_status'=>'$travel_status',
					'payment_type'=>'$trans.payment_type',
					'bookby'=>'$bookby',
					'pickup_longitude'=>'$pickup_longitude',
					'pickup_latitude'=>'$pickup_latitude',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'travel_status'=>'$travel_status',
					'notes'=>'$notes_driver',
					'distance'=>'$distance',
					'waiting_hour'=>'$trans.waiting_time',
					'pickup_time'=>'$pickup_time',
					'actual_pickup_time'=>'$actual_pickup_time',
					'drop_time'=>'$drop_time',
                    'metric'=> '$trans.distance_unit',
                    'advance_payment'=> [ '$ifNull' => [ '$trans.advance_payment', 0 ] ],
					'pending_amt'=> [ '$ifNull' => [ '$trans.pending_amt', 0 ] ],
                    'ratings'=>'$rating',
                    'tags'=>'$driver_tags'
                ]
            ],
        ];
		$arguments = array_merge($common_arguments,$custom_arguments);

        $table=MDB_PASSENGERS_LOGS;
        if($travel_status==1)
        {
            $table=MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
        {
            $table=MDB_PASSENGERSLOGS_CANCELED;
        }

        $result    = $this->mongo_db->aggregate($table, $arguments);
		
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    
    public function driver_past_bookings_old($pagination, $booktype, $id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $default_companyid = null)
    {
        $get_company_time_details = $this->get_company_time_details($default_companyid);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        //$current_time = convert_timezone('now',TIMEZONE);
        //$current_date = explode(' ',$current_time);
        //$start_time = $date.' 00:00:01';
        //$end_time = $date.' 23:59:59';
        $condition                = "";
        //$condition = " AND passengers_log.createdate >='".$start_time."' and passengers_log.createdate <= '".$end_time."'"; 									
        if ($booktype == 2) {
            $condition .= " AND passengers_log.booking_from = '$booktype'";
        } else {
            $condition .= " AND passengers_log.booking_from != 2 ";
        }
        $selection = "";
        $selection = "IF(`passengers_log`.`actual_pickup_time` = '0000-00-00 00:00:00',`passengers_log`.`pickup_time`,`passengers_log`.`actual_pickup_time`) as pickup_time , 
			`passengers_log`.`passengers_log_id`, 
			`passengers_log`.`current_location` AS 
			`pickup_location`,`passengers`.`name`as 
			passenger_name,`passengers`.`profile_image`as profile_image, 
			IFNULL(`passengers_log`.drop_location,0) as 
			drop_location,IFNULL(ROUND((`transacation`.`amt`+`passengers_log`.`used_wallet_amount`),2),0) as 
			amt,`passengers_log`.`travel_status`,`passengers_log`.`used_wallet_amount`,`transacation`.`payment_type`,`passengers_log`.`bookby`,`passengers_log`.`pickup_longitude`, `passengers_log`.`pickup_latitude`, `passengers_log`.`drop_latitude`, `passengers_log`.`drop_longitude`, `passengers_log`.`travel_status`, `passengers_log`.`notes_driver` AS `notes`, `passengers_log`.`distance`, `passengers_log`.`waitingtime` AS `waiting_hour`,`passengers_log`.drop_time, TIMEDIFF(`passengers_log`.drop_time,IF(`passengers_log`.`actual_pickup_time` = '0000-00-00 00:00:00',`passengers_log`.`pickup_time`,`passengers_log`.`actual_pickup_time`)) as trip_duration,IFNULL(`transacation`.`distance_unit`,0) as metric";
        if ($pagination == 1) {
            $orderby = "ORDER BY `passengers_log`.`pickup_time` DESC LIMIT $start,$limit";
        } else {
            $orderby = "ORDER BY `passengers_log`.`pickup_time` DESC";
        }
        $sql    = "SELECT $selection FROM `passengers_log` LEFT JOIN `transacation` ON (`passengers_log`.`passengers_log_id` = `transacation`.`passengers_log_id`) LEFT JOIN `people` ON (`passengers_log`.`driver_id` = `people`.`id`) LEFT JOIN `passengers` ON (`passengers_log`.`passengers_id` = `passengers`.`id`) WHERE `passengers_log`.`driver_id` = '$id' AND `passengers_log`.`msg_status` = '$msg_status' AND `passengers_log`.`driver_reply` = '$driver_reply' AND `passengers_log`.`travel_status` = '$travel_status' $condition $orderby";
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        // print_r($result);           exit;
        return $result;
    }
    //Function used to get the get_driver ongoign trips
      public function driver_pending_bookings($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id, $start = null, $limit = null)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
		$match_query = [];
		$match_query['driver_id'] = (int)$id;
		$match_query['msg_status'] = $msg_status;
		$match_query['driver_reply'] = $driver_reply;
		$srch_query = ["\$or"=>
			[
				['travel_status'=>2],
				['travel_status'=>5],
				['travel_status'=>3],
				['travel_status'=>9]
			]
		];
		$matchquery = $match_query;
		$matchquery = array_merge($match_query,$srch_query);
        $arguments = [[
                '$match' => $matchquery
            ],
			[
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => "_id",
                    'as' => "passengers"
                ]
            ],
			[
				'$unwind' => '$passengers'
			],
            [
                  '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ],
			[
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            
			[
                '$project' => [
                    'pickup_time' => '$pickup_time',
					'pickup_longitude' => '$pickup_longitude',
					'pickup_latitude' => '$pickup_latitude',
					'drop_latitude' => '$drop_latitude',
					'drop_longitude' => '$drop_longitude',
					'travel_status' => '$travel_status',
					'notes' => '$notes_driver',
					'distance' => '$distance',
					'waiting_hour' => '$waitingtime',
					'bookby' => '$bookby',
					'drivername' => '$people.name',
					'passenger_name' => '$passengers.name',
					'passenger_id' => '$passengers._id',
					'passenger_profile_image' => '$passengers.profile_image',
					'passengers_log_id' => '$_id',
					'pickup_location' => '$current_location',
					'drop_location' => ['$ifNull' => [ '$drop_location', 0 ] ],
					'travel_status' => '$travel_status',
                    'ratings'=>'$rating',
                    'tags'=>'$driver_tags'
                ]
            ],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
        ];
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
		
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    public function driver_pending_bookings_old($id, $msg_status, $driver_reply = null, $travel_status = null, $company_id, $start = null, $limit = null) //
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        //drop_location
        $query                    = "SELECT " . PASSENGERS_LOG . ".`pickup_time` as pickup_time," . PASSENGERS_LOG . ".`pickup_longitude`, 
			" . PASSENGERS_LOG . ".`pickup_latitude`, " . PASSENGERS_LOG . ".`drop_latitude`, " . PASSENGERS_LOG . ".`drop_longitude`, " . PASSENGERS_LOG . ".`travel_status`, " . PASSENGERS_LOG . ".`notes_driver` AS `notes`, " . PASSENGERS_LOG . ".`distance`, " . PASSENGERS_LOG . ".`waitingtime` AS `waiting_hour`," . PASSENGERS_LOG . ".`bookby`," . PEOPLE . ".`name` as drivername," . PASSENGERS . ".`name` as passenger_name," . PASSENGERS . ".`profile_image` as passenger_profile_image," . PASSENGERS_LOG . ".`passengers_log_id`, " . PASSENGERS_LOG . ".`current_location` AS `pickup_location`, IFNULL(" . PASSENGERS_LOG . ".drop_location,0) as drop_location, " . PASSENGERS_LOG . ".`travel_status` FROM " . PASSENGERS_LOG . " JOIN `passengers` ON (" . PASSENGERS_LOG . ".`passengers_id` = `passengers`.`id`) left join " . TRANS . "  on 
				" . TRANS . ".passengers_log_id=" . PASSENGERS_LOG . ".passengers_log_id left join " . PEOPLE . "  on 
				" . PASSENGERS_LOG . ".driver_id=" . PEOPLE . ".id  WHERE " . PASSENGERS_LOG . ".`driver_id` = '$id' AND " . PASSENGERS_LOG . ".`msg_status` = '$msg_status' AND " . PASSENGERS_LOG . ".`driver_reply` = '$driver_reply'  AND " . PASSENGERS_LOG . ".`pickup_time` >= '$start_time'  AND (" . PASSENGERS_LOG . ".`travel_status` = '2' OR " . PASSENGERS_LOG . ".`travel_status` = '5' OR " . PASSENGERS_LOG . ".`travel_status` = '3' OR " . PASSENGERS_LOG . ".`travel_status` = '9') ORDER BY `passengers_log`.`travel_status` DESC";
				
			//	echo $query ;exit;
        $result                   = Db::query(Database::SELECT, $query)->execute()->as_array();
        //DATE_FORMAT(".PASSENGERS_LOG.".`pickup_time`,'%h:%i %p,%d %b %Y') as pickup_time	
        //echo '<br>';
        //AND ".PASSENGERS_LOG.".bookby = '".BOOK_BY_CONTROLLER."' 
        /*DB::select(PASSENGERS.'.name',array(PASSENGERS.'.phone','passenger_phone'),PASSENGERS_LOG.'.passengers_log_id',array(PASSENGERS_LOG.'.current_location','pickup_location'),PASSENGERS_LOG.'.drop_location',PASSENGERS_LOG.'.pickup_longitude',
        PASSENGERS_LOG.'.pickup_latitude',PASSENGERS_LOG.'.drop_latitude',PASSENGERS_LOG.'.drop_longitude',PASSENGERS_LOG.'.travel_status',array(PASSENGERS_LOG.'.notes_driver','notes'),PASSENGERS_LOG.'.distance',array(PASSENGERS_LOG.'.waitingtime','waiting_hour'))->from(PASSENGERS_LOG)
        ->join(PASSENGERS)->on(PASSENGERS_LOG.'.passengers_id','=',PASSENGERS.'.id')
        ->where(PASSENGERS_LOG.'.driver_id','=',$id)
        ->where(PASSENGERS_LOG.'.msg_status','=',$msg_status)
        ->where(PASSENGERS_LOG.'.driver_reply','=',$driver_reply)
        ->order_by(PASSENGERS_LOG.'.pickup_time', 'ASC')		
        ->where(PASSENGERS_LOG.'.pickup_time','>=',$start_time)			
        ->where(PASSENGERS_LOG.'.travel_status','=','2')
        ->or_where(PASSENGERS_LOG.'.travel_status','=','5')
        ->execute();
        //->as_array();	*/
        //print_r($result);
        return $result;
    }
     public function check_new_request_bydriver($driver_id, $company_all_currenttimestamp, $trip_id)
    {
		$datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
		$result = $this->mongo_db->find(MDB_REQUEST_HISTORY,
										['status' => 0, 'selected_driver' => (int)$driver_id,
											  'trip_id' => ['$ne' => (int)$trip_id],
											  'createdate' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]],
										['trip_id','available_drivers','rejected_timeout_drivers'])
								->sort(['trip_id' => -1]);
		$result = iterator_to_array($result);
        return (!empty($result))?Commonfunction::change_key($result):[];
    }
    public function check_new_request_bydriver_old($driver_id, $company_all_currenttimestamp, $trip_id)
    {
        $datetime            = explode(' ', $company_all_currenttimestamp);
        $currentdate         = $datetime[0] . ' 00:00:01';
        //$sql = "SELECT trip_id,available_drivers FROM ".DRIVER_REQUEST_DETAILS." WHERE status = '0' and FIND_IN_SET('$driver_id',available_drivers)  and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers) and createdate >= '$currentdate' ORDER BY trip_id DESC LIMIT 0 , 1";
        /*$sql = "SELECT trip_id,available_drivers FROM ".DRIVER_REQUEST_DETAILS."
        WHERE status = '0'
        and selected_driver='$driver_id'
        and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers)
        and createdate >= '$currentdate'
        ORDER BY trip_id DESC
        "; */
        $sql                 = "SELECT trip_id,available_drivers,rejected_timeout_drivers FROM " . DRIVER_REQUEST_DETAILS . " WHERE status = '0' and selected_driver='$driver_id' and trip_id != '$trip_id' and createdate >= '$currentdate' ORDER BY trip_id DESC ";
        $result              = Db::query(Database::SELECT, $sql)->execute()->as_array();
        Database::$instances = [];
        return $result;
    }
    /********************* Check any new job request for the driver ***********************/
     public function check_new_request_tripid($taxi_id = null, $company_id = null, $trip_id, $driver_id, $company_all_currenttimestamp, $driver_reply, $operator_id = 0)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $current_date = $datetime[0] . ' 00:00:01';
        $createdate   = isset($current_date) ? $current_date : $datetime;
		$createdate = new \MongoDB\BSON\UTCDateTime(strtotime($createdate) * 1000);
		$match = ['trip_id'=>(int)$trip_id,
					   'selected_driver'=> (int)$driver_id,
					   'status'=>['$ne'=>4],
					   'createdate'=>['$gte'=> $createdate]
					  ];
		$project = ['_id',
						 'available_drivers',
						 'total_drivers',
						 'rejected_timeout_drivers',
						 'status'];
		 $s_driver = '';
		$result = $this->mongo_db->find_one(MDB_REQUEST_HISTORY,$match,$project);
        if (count($result) > 0) {
            if ($driver_reply != 'C') {
                $available_drivers = (isset($result['available_drivers'])?$result['available_drivers']:'');
                $exp_drivers       = explode(',', $available_drivers);
                $s_array           = [];
                $first_driver      = isset($exp_drivers[0]) ? $exp_drivers[0] : 0;
                for ($i = 1; $i < count($exp_drivers); $i++) {
                    $s_array[]   = $exp_drivers[$i];
                    $temp_driver = isset($exp_drivers[1]) ? $exp_drivers[1] : $exp_drivers[0];
                }
                if (count($s_array) >0) {
                    $s_driver = implode(',', $s_array);
                }
                $prev_rejected_timeout_drivers = isset($result['rejected_timeout_drivers']) ? $result['rejected_timeout_drivers'] : "";
                if ($prev_rejected_timeout_drivers != "") {
                    $rejected_timeout_drivers = $prev_rejected_timeout_drivers . ',' . $driver_id;
                } else {
                    $rejected_timeout_drivers = $driver_id;
                }
                //to get the usertypes
                if ($operator_id != 0) {
					$user_type_detail = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$operator_id],['user_type']);
					$user_type_dets = (isset($user_type_detail)) ? $user_type_detail : [];
                }
                $temp_driver       = isset($temp_driver) ? $temp_driver : "";
                $update_trip_array = [
                    "available_drivers" => $s_driver,
                    "selected_driver" => (int)$temp_driver,
                    "status" => 0,
                    "rejected_timeout_drivers" => $rejected_timeout_drivers
                ];
                
                $update_result     = $this->mongo_db->update(MDB_REQUEST_HISTORY,['trip_id'=>(int)$trip_id],['$set'=>$update_trip_array],['upsert'=>false]);
                //print_r($update_trip_array);exit;
                //to update driver request and passenger log if selected driver is empty
                if ($temp_driver == '') {
                    $update_trip_array_one = [
                        "status" => 4
                    ];
                    $update_result         = $this->mongo_db->update(MDB_REQUEST_HISTORY, ['trip_id'=>(int)$trip_id],['$set'=>$update_trip_array_one],['upsert'=>false]);
                    if ($operator_id != 0 && $user_type_dets['user_type'] == 'A') {
                        $update_log_array_driver = [
                            "driver_id" => 0,
                            "taxi_id" => 0,
                            "company_id" => 0
                        ];
                    } else {
                        $update_log_array_driver = [
                            "driver_id" => 0,
                            "taxi_id" => 0
                        ];
                    }
                    $results = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=>$update_log_array_driver],['upsert'=>false]);
                }
                $driver_details = $this->get_driver_taxi($temp_driver);
				$driver_details = reset($driver_details);
                $drivertaxi     = isset($driver_details['mapping_taxiid']) ? $driver_details['mapping_taxiid'] : $taxi_id;
                $drivercompany  = isset($driver_details['mapping_companyid']) ? $driver_details['mapping_companyid'] : $company_id;
                if ($operator_id != 0 && $user_type_dets['user_type'] == 'A') {
                    $update_log_array = [
                        "driver_id" => (int)$temp_driver,
                        "taxi_id" => (int)$drivertaxi,
                        "company_id" => (int)$drivercompany
                    ];
                } else {
                    $update_log_array = [
                        "driver_id" => (int)$temp_driver,
                        "taxi_id" => (int)$drivertaxi
                    ];
                }
                $pass_log_update          = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=> $update_log_array],['upsert'=>false]);
                $update_driver_array      = [
                    "status" => 'B'
                ];
                $driver_tbl_update        = $this->mongo_db->update(MDB_DRIVER_INFO,['_id'=>(int)$driver_id],['$set'=>$update_driver_array],['upsert'=>false]);
                $available_drivers        = explode(',', $result['total_drivers']);
                $rejected_timeout_drivers = explode(',', $rejected_timeout_drivers);
                $comp_result              = array_diff($available_drivers, $rejected_timeout_drivers);
                if (count($comp_result) == 0) {
                    $update_trip_array_one = [
                        "status" => 4
                    ];
                    $update_result         = $this->mongo_db->update(MDB_REQUEST_HISTORY, ['trip_id '=>(int)$trip_id],['$set'=>$update_trip_array_one],['$upsert'=>true]);
                    if ($operator_id != 0 && $user_type_dets['user_type'] == 'A') {
                        $update_log_array_driver = [
                            "driver_id" => 0,
                            "taxi_id" => 0,
                            "company_id" => 0
                        ];
                    } else {
                        $update_log_array_driver = [
                            "driver_id" => 0,
                            "taxi_id" => 0
                        ];
                    }
                    $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=>$update_log_array_driver],['$upsert'=>true]);
                }
            } else {
                $drivertaxi    = $taxi_id; 
                $drivercompany = $company_id; 
                if ($driver_reply == "C") {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi,
                        "driver_reply" => "C"
                    ];
                } else {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi
                    ];
                }
            }
        } else {
            $trip_id = 0;
        }
        return "";
    }
    public function check_new_request_tripid_old($taxi_id = null, $company_id = null, $trip_id, $driver_id, $company_all_currenttimestamp, $driver_reply, $operator_id = 0)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $current_date = $datetime[0] . ' 00:00:01';
        $createdate   = isset($current_date) ? $current_date : $datetime;
        //$sql = "SELECT trip_id,available_drivers FROM ".DRIVER_REQUEST_DETAILS." WHERE status = '0' and FIND_IN_SET('$driver_id',available_drivers)  and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers) and createdate >= '$currentdate' ORDER BY trip_id DESC LIMIT 0 , 1";
        /*$sql = "SELECT trip_id,available_drivers,total_drivers,rejected_timeout_drivers FROM ".DRIVER_REQUEST_DETAILS."
        WHERE trip_id='$trip_id'
        and NOT FIND_IN_SET('$driver_id', rejected_timeout_drivers)
        and createdate >= '$currentdate'		
        ORDER BY trip_id DESC
        LIMIT 0 , 1";*/
        $sql          = "SELECT trip_id,available_drivers,total_drivers,rejected_timeout_drivers,status FROM " . DRIVER_REQUEST_DETAILS . " WHERE trip_id='$trip_id' and selected_driver='$driver_id' and status !='4' and createdate >= '$createdate' ORDER BY trip_id DESC LIMIT 0 , 1";
        $result       = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r($result);exit;
        //return $result;
        if (count($result) > 0) {
            if ($driver_reply != 'C') {
                $available_drivers = $result[0]['available_drivers'];
                $exp_drivers       = explode(',', $available_drivers);
                //print_r($exp_drivers);exit;
                $s_array           = [];
                $first_driver      = isset($exp_drivers[0]) ? $exp_drivers[0] : 0;
                //$temp_driver=$first_driver;
                for ($i = 1; $i < count($exp_drivers); $i++) {
                    $s_array[]   = $exp_drivers[$i];
                    $temp_driver = isset($exp_drivers[1]) ? $exp_drivers[1] : $exp_drivers[0];
                }
                if ($s_array != "") {
                    $s_driver = implode(',', $s_array);
                }
                $prev_rejected_timeout_drivers = isset($result[0]['rejected_timeout_drivers']) ? $result[0]['rejected_timeout_drivers'] : "";
                if ($prev_rejected_timeout_drivers != "") {
                    $rejected_timeout_drivers = $prev_rejected_timeout_drivers . ',' . $driver_id;
                } else {
                    $rejected_timeout_drivers = $driver_id;
                }
                //to get the usertypes
                if ($operator_id != 0) {
                    $sql_query      = "SELECT user_type FROM " . PEOPLE . " WHERE id = " . $operator_id;
                    $user_type_dets = Db::query(Database::SELECT, $sql_query)->execute()->as_array();
                }
                $temp_driver       = isset($temp_driver) ? $temp_driver : "";
                $update_trip_array = [
                    "available_drivers" => $s_driver,
                    "selected_driver" => $temp_driver,
                    "status" => "0",
                    "rejected_timeout_drivers" => $rejected_timeout_drivers
                ];
                $update_result     = $this->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $trip_id);
                //to update driver request and passenger log if selected driver is empty
                if ($temp_driver == '') {
                    $update_trip_array_one = [
                        "status" => "4"
                    ];
                    $update_result         = $this->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array_one, 'trip_id', $trip_id);
                    if ($operator_id != 0 && $user_type_dets[0]['user_type'] == 'A') {
                        $update_log_array_driver = [
                            "driver_id" => "0",
                            "taxi_id" => "0",
                            "company_id" => "0"
                        ];
                    } else {
                        $update_log_array_driver = [
                            "driver_id" => "0",
                            "taxi_id" => "0"
                        ];
                    }
                    $results = $this->update_table(PASSENGERS_LOG, $update_log_array_driver, 'passengers_log_id', $trip_id);
                }
                $driver_details = $this->get_driver_taxi($temp_driver);
                //print_r($driver_details);exit;
                $drivertaxi     = isset($driver_details[0]['mapping_taxiid']) ? $driver_details[0]['mapping_taxiid'] : $taxi_id;
                $drivercompany  = isset($driver_details[0]['mapping_companyid']) ? $driver_details[0]['mapping_companyid'] : $company_id;
                if ($operator_id != 0 && $user_type_dets[0]['user_type'] == 'A') {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi,
                        "company_id" => $drivercompany
                    ];
                } else {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi
                    ];
                }
                $pass_log_update          = $this->update_table(PASSENGERS_LOG, $update_log_array, 'passengers_log_id', $trip_id);
                $update_driver_array      = [
                    "status" => 'B'
                ];
                $driver_tbl_update        = $this->update_table(DRIVER, $update_driver_array, 'driver_id', $driver_id);
                //$driver_status = $this->get_request_status($trip_id);
                $available_drivers        = explode(',', $result[0]['total_drivers']);
                $rejected_timeout_drivers = explode(',', $rejected_timeout_drivers);
                $comp_result              = array_diff($available_drivers, $rejected_timeout_drivers);
                //echo count($comp_result);exit;
                if (count($comp_result) == 0) {
                    $update_trip_array_one = [
                        "status" => "4"
                    ];
                    $update_result         = $this->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array_one, 'trip_id', $trip_id);
                    if ($operator_id != 0 && $user_type_dets[0]['user_type'] == 'A') {
                        $update_log_array_driver = [
                            "driver_id" => "0",
                            "taxi_id" => "0",
                            "company_id" => "0"
                        ];
                    } else {
                        $update_log_array_driver = [
                            "driver_id" => "0",
                            "taxi_id" => "0"
                        ];
                    }
                    $result = $this->update_table(PASSENGERS_LOG, $update_log_array_driver, 'passengers_log_id', $trip_id);
                }
            } else {
                $drivertaxi    = $taxi_id; //isset($driver_details[0]['mapping_taxiid'])?$driver_details[0]['mapping_taxiid']:"";
                $drivercompany = $company_id; //isset($driver_details[0]['mapping_companyid'])?$driver_details[0]['mapping_companyid']:"";
                if ($driver_reply == "C") {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi,
                        "driver_reply" => "C"
                    ];
                } else {
                    $update_log_array = [
                        "driver_id" => $temp_driver,
                        "taxi_id" => $drivertaxi
                    ];
                }
            }
        } else {
            $trip_id = 0;
        }
        return "";
    }
     public function get_driver_taxi($driver_id = "")
    {
		$match = ['mapping_driverid' => (int)$driver_id, 'mapping_status' => 'A'];
		$project = ['mapping_taxiid' , 'mapping_companyid'];
		$result = $this->mongo_db->find(MDB_TAXI_DRIVER_MAPPING,$match,$project);
		$res = iterator_to_array($result);
        return isset($res) ? $res : [];
    }
    public function get_driver_taxi_old($driver_id = "")
    {
        //$sql = "SELECT driver_reply,time_to_reach_passen FROM ".PASSENGERS_LOG." WHERE `passengers_log_id` = '".$passenger_log_id."'";
        $sql    = "SELECT `mapping_taxiid`,`mapping_companyid`  FROM " . TAXIMAPPING . " WHERE `mapping_driverid` = '" . $driver_id . "' and `mapping_status`='A'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return isset($result) ? $result : '0';
    }
     public function check_driver_status_free($driver_id = "")
    {
		$result = $this->mongo_db->find_one(MDB_DRIVER_INFO,['_id'=>(int)$driver_id],['status']);
        /*$sql    = "SELECT status FROM " . DRIVER . " WHERE driver_id='$driver_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        return (isset($result)) ? $result['status'] : ''; 
    }
    public function check_driver_status_free_old($driver_id = "")
    {
        $sql    = "SELECT status FROM " . DRIVER . " WHERE driver_id='$driver_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result[0]['status'];
    }
    public function previous_files_unlink($dir)
    {
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $images = [];
                while (($file = readdir($dh)) !== false) {
                    if (!is_dir($dir . $file)) {
                        //$images[$listings['id']] = $file;
                        unlink($dir . $file);
                    }
                }
                closedir($dh);
            }
        }
    }
     public function check_driver_has_trip_request($driver_id, $company_all_currenttimestamp)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $current_date = $datetime[0] . ' 00:00:01';
        $createdate   = isset($current_date) ? $current_date : $datetime;
		$match = ['status' => 1,
					   'selected_driver' =>(int)$driver_id,
					   'createdate' => ['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($createdate) * 1000)],
					   ];
		$result = $this->mongo_db->count(MDB_REQUEST_HISTORY,$match);
		return isset($result) ? $result:0;
    }
    
    public function check_driver_has_trip_request_old($driver_id, $company_all_currenttimestamp)
    {
        $datetime     = explode(' ', $company_all_currenttimestamp);
        $current_date = $datetime[0] . ' 00:00:01';
        $createdate   = isset($current_date) ? $current_date : $datetime;
        $sql          = "SELECT count(trip_id) as trip_count FROM " . DRIVER_REQUEST_DETAILS . " WHERE status='1' and selected_driver='$driver_id' and createdate >= '$createdate' ORDER BY trip_id DESC";
        $trip_count   = Db::query(Database::SELECT, $sql)->execute()->get('trip_count');
        if ($trip_count > 0) {
            return $trip_count;
        } else {
            return 0;
        }
    }
    /*** Get Passenger Profile details using passenger log id  ***/
   public function get_trip_detail_only($passengerlog_id = "")
    {
        $match = ['_id'=>(int)$passengerlog_id];
        $project = ['passengers_id','driver_id','taxi_id','operator_id','travel_status','driver_reply'];
        $result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,$project);
        return (!empty($result)) ? $result :[];
    }
    /** Change Driver Status **/
     public function change_driver_status($passenger_log_id = "", $status = "")
    {
        if ($status == 'A') {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => 9,
                "driver_comments" => __('confirmed')
            ];
        } elseif ($status == 'R') {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => 10,
                "driver_comments" => __('missed')
            ];
        } else {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => 6,
                "driver_comments" => ""
            ];
        }
		$result = $this->mongo_db->Update(MDB_PASSENGERS_LOGS,['_id'=>(int)$passenger_log_id],['$set'=>$changearr],['upsert'=>false]);
		//$result = $this->mongo_db->Update(MDB_PASSENGERS_LOGS,array('_id'=>(int)$passenger_log_id),$changearr,array('upsert'=>true));
		return (!isset($result['err']) ?1:$result['err']);
    }
    public function change_driver_status_old($passenger_log_id = "", $status = "")
    {
        if ($status == 'A') {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => '9',
                "driver_comments" => __('confirmed')
            ];
        } elseif ($status == 'R') {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => '10',
                "driver_comments" => __('missed')
            ];
        } else {
            $changearr = [
                "driver_reply" => $status,
                "msg_status" => 'R',
                "travel_status" => '6',
                "driver_comments" => ""
            ];
        }
        return DB::update(PASSENGERS_LOG)->set($changearr)->where('passengers_log_id', '=', $passenger_log_id)->execute();
    }
    /*** Notification to driver for Dispatcher cancelled the trip *********************/
      public function get_dispatcher_cancel_data($driver_id = "", $company_id)
    {		
		$year = date('Y');
		$month = date('m');
		$day = date('d');
		$match_array = [];
		$date = date('Y-m-d');
		
		$match_array['driver_id'] = (int)$driver_id;
		$match_array['travel_status'] = 8;
		$match_array['notification_status'] = ['$ne' => 5];
		$match_array['bookby'] = 2;
		$match_array['yearMonthDay'] = $date;
		$arguments = [
			['$project' =>
				[
					'yearMonthDay' => ['$dateToString' => ['format' => '%Y-%m-%d','date' => '$createdate']],
					'trip_id'=>'$passengers_log_id',
					'status'=>'$travel_status'
				]
			],
			['$match'=>$match_array]
		];		
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
		//print_r($result);exit;
        return (!empty($result['result'])?$result['result']:[]);
    }
    public function get_dispatcher_cancel_data_old($driver_id = "", $company_id)
    {
        $date                     = date('Y-m-d');
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $sql                      = "SELECT " . PASSENGERS_LOG . ".passengers_log_id as trip_id,
                    " . PASSENGERS_LOG . ".travel_status as status FROM " . PASSENGERS_LOG . "
                WHERE " . PASSENGERS_LOG . ".driver_id = '$driver_id'
                AND " . PASSENGERS_LOG . ".travel_status = '8'
                AND " . PASSENGERS_LOG . ".notification_status != '5'
                AND " . PASSENGERS_LOG . ".bookby ='2'
                AND DATE(" . PASSENGERS_LOG . ".createdate)='$date' ";
        $result                   = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r( $result );exit;
        return $result;
    }
    /************************************************************************************/
    public function get_driver_earnings_with_rating($driver_id, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $current_time             = $get_company_time_details['current_time']; // Current Time
        $arguments = [
				['$match'=>[
					'createdate'=>['$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),
										'$lte'=>new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)],
					'driver_id'=>(int)$driver_id,
					'travel_status'=>1
				]],
				['$lookup'=>[
					'from'=>MDB_TRANSACTION,
					'localField'=>"_id",
					'foreignField'=>"passengers_log_id",
					'as'=>"transaction"]],
				['$unwind'=>'$transaction'],
				['$project'=>[
					'rating'=>'$rating',
					'total_amount'=>'$transaction.fare',
				]],
        ];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        //print_r($result['result']);exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    public function get_driver_total_earnings($driver_id)
    {
         $arguments = [
				['$match'=>[
							'driver_id'=>(int)$driver_id,
							'travel_status'=>1
						]],
				['$lookup'=>[
					'from'=>MDB_TRANSACTION,
					'localField'=>"_id",
					'foreignField'=>"passengers_log_id",
					'as'=>"transaction"]],
				['$unwind'=>'$transaction'],
				['$group' => [
					'_id' => NULL,
					'total_amount' => ['$sum' => '$transaction.fare']
				]],
				['$project'=>[
					'rating'=>'$rating',
					'total_amount'=>'$total_amount',
				]]
			];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        return (!empty($result['result'])) ? $result['result'][0]['total_amount'] : 0;
    }
    /************************************************************************************/
    public function get_company_time_details($companyid)
    {
        $timezone_details = [];
        /*** Start ***/
        if ($companyid == '') {
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
            /*$timezone_base_query = "select time_zone from  company where cid='$companyid' ";
            $timezone_fetch      = Db::query(Database::SELECT, $timezone_base_query)->execute()->as_array();*/
            $result = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$companyid],['companydetails.time_zone']);
            $model_fetch = iterator_to_array($result);
            $timezone_fetch = reset($model_fetch);
            if ($timezone_fetch['companydetails']['time_zone'] != '') {
                $current_time = convert_timezone('now', $timezone_fetch['companydetails']['time_zone']);
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
        $timezone_details['current_time'] = $current_time;
        $timezone_details['start_time']   = $start_time;
        $timezone_details['end_time']     = $end_time;
        $timezone_details['date']         = $date;
        return $timezone_details;
        /*** End ***/
    }
    /** to check driver not updated for a particular period **/
    public function check_driver_not_updated($driver_id, $company_timestamp)
    {
        /*$sql   = "SELECT update_date  FROM " . DRIVER . " WHERE driver_id='$driver_id'";
        $total = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return isset($total[0]['update_date']) ? $total[0]['update_date'] : '0';*/
        
		/*$res = $this->mongo_db->find(MDB_DRIVER_INFO,array('driver_id'=> (int)$driver_id),array('update_date'));
        $result = iterator_to_array($res);
        $result1 = reset($res);
        return (isset($result1['update_date'])) ? $result1['update_date'] : 0; */
        
        $result = $this->mongo_db->find_one(MDB_DRIVER_INFO,['_id'=> (int)$driver_id],['update_date']);
        return (isset($result['update_date'])) ? $result['update_date'] : [];
    }
    /** Change driver request flow **/
     public function change_driver_reqflow($trip_id, $available_drivers, $rejected_timeout_drivers)
    {
        $availDriversArr = explode(",", $available_drivers);
        if (count($availDriversArr) > 1) {
            $temp                = $availDriversArr[0];
            $availDriversArr[0]  = $availDriversArr[1];
            $availDriversArr[1]  = $temp;
            $driver_avail        = implode(",", $availDriversArr);
            $temp_driver         = isset($availDriversArr[0]) ? $availDriversArr[0] : 0;
            $update_trip_array   = [
                "available_drivers" => (int)$driver_avail,
                "selected_driver" => (int)$temp_driver,
                "status" => 0
            ];
            $update_result       = $this->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', (int)$trip_id);
            $driver_details      = $this->get_driver_taxi($temp_driver);
            $drivertaxi          = isset($driver_details[0]['mapping_taxiid']) ? $driver_details[0]['mapping_taxiid'] : 0;
            $drivercompany       = isset($driver_details[0]['mapping_companyid']) ? $driver_details[0]['mapping_companyid'] : 0;
            $update_log_array    = [
                "driver_id" => (int)$temp_driver,
                "taxi_id" => (int)$drivertaxi,
                "company_id" => (int)$drivercompany
            ];
            $pass_log_update     = $this->update_table(MDB_PASSENGERS_LOGS, $update_log_array, '_id', (int)$trip_id);
            $update_driver_array = [
                "status" => 'B'
            ];
            $driver_tbl_update   = $this->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', (int)$temp_driver);
        } else {
            $reject_drivers    = ($rejected_timeout_drivers != '') ? $rejected_timeout_drivers . ',' . $available_drivers : $available_drivers;
            $update_trip_array = [
                "available_drivers" => null,
                "selected_driver" => null,
                "rejected_timeout_drivers" => $reject_drivers,
                "status" => 4
            ];
            $update_result     = $this->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', (int)$trip_id);
            $update_log_array  = [
                "driver_id" => 0,
                "taxi_id" => 0,
                "company_id" => 0
            ];
            $pass_log_update   = $this->update_table(MDB_PASSENGERS_LOGS, $update_log_array, '_id', (int)$trip_id);
        }
    }
    public function change_driver_reqflow_old($trip_id, $available_drivers, $rejected_timeout_drivers)
    {
        $availDriversArr = explode(",", $available_drivers);
        if (count($availDriversArr) > 1) {
            /*$shiftedDriver = array_shift($availDriversArr);
            array_push($availDriversArr,$shiftedDriver); */
            $temp                = $availDriversArr[0];
            $availDriversArr[0]  = $availDriversArr[1];
            $availDriversArr[1]  = $temp;
            $driver_avail        = implode(",", $availDriversArr);
            $temp_driver         = isset($availDriversArr[0]) ? $availDriversArr[0] : 0;
            $update_trip_array   = [
                "available_drivers" => $driver_avail,
                "selected_driver" => $temp_driver,
                "status" => "0"
            ];
            $update_result       = $this->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $trip_id);
            $driver_details      = $this->get_driver_taxi($temp_driver);
            //print_r($driver_details);exit;
            $drivertaxi          = isset($driver_details[0]['mapping_taxiid']) ? $driver_details[0]['mapping_taxiid'] : 0;
            $drivercompany       = isset($driver_details[0]['mapping_companyid']) ? $driver_details[0]['mapping_companyid'] : 0;
            $update_log_array    = [
                "driver_id" => $temp_driver,
                "taxi_id" => $drivertaxi,
                "company_id" => $drivercompany
            ];
            $pass_log_update     = $this->update_table(PASSENGERS_LOG, $update_log_array, 'passengers_log_id', $trip_id);
            $update_driver_array = [
                "status" => 'B'
            ];
            $driver_tbl_update   = $this->update_table(DRIVER, $update_driver_array, 'driver_id', $temp_driver);
        } else {
            $reject_drivers    = ($rejected_timeout_drivers != '') ? $rejected_timeout_drivers . ',' . $available_drivers : $available_drivers;
            $update_trip_array = [
                "available_drivers" => "",
                "selected_driver" => "",
                "rejected_timeout_drivers" => $reject_drivers,
                "status" => "4"
            ];
            $update_result     = $this->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $trip_id);
            $update_log_array  = [
                "driver_id" => "0",
                "taxi_id" => "0",
                "company_id" => "0"
            ];
            $pass_log_update   = $this->update_table(PASSENGERS_LOG, $update_log_array, 'passengers_log_id', $trip_id);
        }
    }
    /** to get the updated trip details ( updated from dispatcher ) **/
    public function get_trip_update_status($trip_id = "")
    {
        $sql    = "SELECT drop_location, current_location, pickup_latitude, pickup_longitude, drop_latitude, drop_longitude,notes_driver FROM " . PASSENGERS_LOG . " WHERE passengers_log_id='$trip_id' AND notification_status='6'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function passenger_signup_with_referral($val, $otp = null, $referral_code = "", $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = "", $accessToken = "", $uid = "", $image_name = "")
    {
        $common_model = Model::factory('commonmodel');
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        /** Referrral key generator **/
		$auto_referral_code = commonfunction::randomkey_generator('6');
        /** Referrral key generator **/
        /** to get referral setting and amount from siteinfo table **/
        $siteInfo            = $this->siteinfo_details();
        $referralAmount      = (isset($siteInfo['referral_amount'])?$siteInfo['referral_amount']:'');
		$referral_settings      = (isset($siteInfo['referral_settings'])?$siteInfo['referral_settings']:'');
        if ($referral_settings == 2) {
            $auto_referral_code = '';
            $referralAmount     = '';
        }
        /** Insert in passenger table **/
		$rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$res = (!empty($rs))?iterator_to_array($rs):[1];
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		$md_pwd = md5($val['password']);
		$fieldname_array = [
			'_id' => (int)$inc_id,
			'name' => $val['first_name'],
			'lastname' => $val['last_name'],
			'email' => $val['email'],
			'password' => $md_pwd,
			'org_password'=> $val['password'], 
			'otp' => $otp,
			'country_code' => $val['country_code'],
			'phone' => $val['phone'],
			'address' => null,
			'referral_code' => $auto_referral_code,
			'referral_code_amount' => (float)$referralAmount,
			'referral_code_limit' => 1,
			'activation_key' => null,
			'activation_status' => '1',
			'user_status' => 'I',
			'created_date' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),
			'updated_date' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),
			'passenger_cid' => (int)$company_id,
			'device_token'=> $devicetoken,
			'device_id' => $deviceid,
			'device_type' => (int)$devicetype,
			'fb_user_id' => $accessToken,
			'fb_access_token' => $uid,
			'discount' => (float)0,
			'salutation' => '',
			'profile_image' => $image_name
		];	
		$insert      = $this->mongo_db->Insert(MDB_PASSENGERS,$fieldname_array);
		$passresult = (isset($insert['err']) ? 0 : 1);
		
        if ($passresult) {
            if (isset($referral_code)) {
                //to get the referral amount and referral limit from the referral code
				$referral_check = $this->mongo_db->find_one(MDB_PASSENGERS,['referral_code' =>$referral_code],['_id','referral_code_amount','referral_code_limit']);
				$refer_dets = (isset($referral_check) ? $referral_check : []);
				//print_r($refer_dets);exit;
                if (count($refer_dets) > 0) {
					$referral_code_amount = (isset($refer_dets['referral_code_amount']) ? $refer_dets['referral_code_amount'] : '' );
					$referral_code_limit = (isset($refer_dets['referral_code_limit']) ? $refer_dets['referral_code_limit'] : '' );
					$referred_id = (isset($refer_dets['_id']) ? $refer_dets['_id'] : '' );
				
					$rs = $this->mongo_db->find(MDB_PASSENGER_REFERRAL,[],['_id'])->sort(['_id'=>-1])->limit(1);
					$res = (!empty($rs))?iterator_to_array($rs):[1];
					reset($res);
					$first_key = key($res);
					$inc_ref_id = $first_key+1;
					$ref_fieldArr = [
						'_id' => (int)$inc_ref_id,
                        'passenger_id' => (int)$inc_id,
                        'referral_code' => $referral_code,
                        'referral_amount' => (float)$referral_code_amount,
                        'referral_limit' => $referral_code_limit,
                        'device_id' => $deviceid,
                        'device_token' => $devicetoken,
                        'referred_by' => (int)$referred_id,
                        'createdate' => $current_time
                    ];
					$passRef = $this->mongo_db->insert(MDB_PASSENGER_REFERRAL,$ref_fieldArr);
                    //to update the referral amount into the wallet column in passenger table
                    $update_array         = [
                        'wallet_amount' => (float)$referral_code_amount
                    ];
					//print_r($update_array);exit;
					$update_wallet_amount = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$inc_id],['$set'=>$update_array],['upsert'=>false]);
					//print_r($update_array);exit;
                }
            }
            return 1;
        } else {
            return 0;
        }
    }
    public function passenger_signup_with_referral_old($val, $otp = null, $referral_code = "", $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = "", $accessToken = "", $uid = "", $image_name = "")
    {
        $common_model = Model::factory('commonmodel');
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        /** Referrral key generator **/
        //$referralcode_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1)) as referral_code";
        $referralcode_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as referral_code";
        
        $referralcode_result = Db::query(Database::SELECT, $referralcode_query)->execute()->as_array();
        //this referral code generated automatically. Passenger can refer this
        $auto_referral_code  = $referralcode_result[0]['referral_code'];
        /** Referrral key generator **/
        /** to get referral setting and amount from siteinfo table **/
        $siteInfo            = $this->siteinfo_details();
        $referralAmount      = $siteInfo[0]['referral_amount'];
        if ($siteInfo[0]['referral_settings'] == 2) {
            $auto_referral_code = '';
            $referralAmount     = '';
        }
        /** Insert in passenger table **/
        $fieldname_array = [
            'name',
            'lastname',
            'email',
            'password',
            'org_password',
            'otp',
            'country_code',
            'phone',
            'address',
            'referral_code',
            'referral_code_amount',
            'referral_code_limit',
            'activation_key',
            'activation_status',
            'user_status',
            'created_date',
            'updated_date',
            'passenger_cid',
            'device_token',
            'device_id',
            'device_type',
            'fb_user_id',
            'fb_access_token',
            'profile_image'
        ];
        $values_array    = [
            $val['first_name'],
            $val['last_name'],
            $val['email'],
            md5($val['password']),
            $val['password'],
            $otp,
            $val['country_code'],
            $val['phone'],
            '',
            $auto_referral_code,
            $referralAmount,
            '1',
            '',
            '1',
            'I',
            $current_time,
            $current_time,
            $company_id,
            $devicetoken,
            $deviceid,
            $devicetype,
            $accessToken,
            $uid,
            $image_name
        ];
        $passresult      = DB::insert(PASSENGERS, $fieldname_array)->values($values_array)->execute();
        if ($passresult) {
            if (!empty($referral_code)) {
                //to get the referral amount and referral limit from the referral code
                $referral_sql = "SELECT id,referral_code_amount,referral_code_limit FROM " . PASSENGERS . " WHERE referral_code='$referral_code'";
                $refer_dets   = Db::query(Database::SELECT, $referral_sql)->execute()->as_array();
                if (count($refer_dets) > 0) {
                    $ref_fieldArr         = [
                        'passenger_id',
                        'referral_code',
                        'referral_amount',
                        'referral_limit',
                        'device_id',
                        'device_token',
                        'referred_by',
                        'createdate'
                    ];
                    $ref_valueArr         = [
                        $passresult[0],
                        $referral_code,
                        $refer_dets[0]['referral_code_amount'],
                        $refer_dets[0]['referral_code_limit'],
                        $deviceid,
                        $devicetoken,
                        $refer_dets[0]['id'],
                        $current_time
                    ];
                    $passRef              = DB::insert(PASSENGER_REFERRAL, $ref_fieldArr)->values($ref_valueArr)->execute();
                    //to update the referral amount into the wallet column in passenger table
                    $update_array         = [
                        'wallet_amount' => $refer_dets[0]['referral_code_amount']
                    ];
                    $update_wallet_amount = DB::update(PASSENGERS)->set($update_array)->where('id', '=', $passresult[0])->execute();
                }
            }
            return 1;
        } else {
            return 0;
        }
    }
     public function save_referral_code($passenger_id = "", $referral_code = "", $company_id = "", $deviceid = "", $devicetoken = "")
    {
        $common_model = Model::factory('commonmodel');
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        //to get the referral amount and referral limit from the referral code		
		$referral_query = $this->mongo_db->find(MDB_PASSENGERS,['referral_code'=>$referral_code],['_id','referral_code_amount','referral_code_limit']);
		$referral_res = iterator_to_array($referral_query);
        $refer_dets = (isset($referral_res)?$referral_res:[]);
		$ref_id = (isset($refer_dets[0]['_id'])?$refer_dets[0]['_id']:0);
		$ref_amount = (isset($refer_dets[0]['referral_code_amount'])?$refer_dets[0]['referral_code_amount']:0);
        $ref_code = (isset($refer_dets[0]['referral_code_limit'])?$refer_dets[0]['referral_code_limit']:'');        
		if (count($refer_dets) > 0) {
			$rs = $this->mongo_db->find(MDB_PASSENGER_REFERRAL,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$res = (!empty($rs))?iterator_to_array($rs):[1];
			reset($res);
			$first_key = key($res);
			$inc_id = $first_key+1;
            $ref_fieldArr         = [
				'_id' => (int)$inc_id,
                'passenger_id' => (int)$passenger_id,
                'referral_code' => $referral_code,
                'referral_amount' => (float)$ref_amount,
                'referral_limit' => $ref_code,
                'device_id' => $deviceid,
                'device_token' => $devicetoken,
                'referred_by' => (int)$ref_id,
                'createdate' =>  new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)
            ];
			$passRef = $this->mongo_db->Insert(MDB_PASSENGER_REFERRAL,$ref_fieldArr);
            //to update the referral amount into the wallet column in passenger table
            $update_array         = [
                'wallet_amount' => (float)$ref_amount
            ];
			$update_wallet_amount = $this->mongo_db->Update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=>$update_array],['upsert'=>false]);
            return 1;
        } else {
            return 0;
        }
    }
    public function save_referral_code_old($passenger_id = "", $referral_code = "", $company_id = "", $deviceid = "", $devicetoken = "")
    {
        $common_model = Model::factory('commonmodel');
        if ($company_id != '') {
            $current_time = $common_model->getcompany_all_currenttimestamp($company_id);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        //to get the referral amount and referral limit from the referral code
        $referral_sql = "SELECT id,referral_code_amount,referral_code_limit FROM " . PASSENGERS . " WHERE referral_code='$referral_code'";
        $refer_dets   = Db::query(Database::SELECT, $referral_sql)->execute()->as_array();
        if (count($refer_dets) > 0) {
            $ref_fieldArr         = [
                'passenger_id',
                'referral_code',
                'referral_amount',
                'referral_limit',
                'device_id',
                'device_token',
                'referred_by',
                'createdate'
            ];
            $ref_valueArr         = [
                $passenger_id,
                $referral_code,
                $refer_dets[0]['referral_code_amount'],
                $refer_dets[0]['referral_code_limit'],
                $deviceid,
                $devicetoken,
                $refer_dets[0]['id'],
                $current_time
            ];
            $passRef              = DB::insert(PASSENGER_REFERRAL, $ref_fieldArr)->values($ref_valueArr)->execute();
            //to update the referral amount into the wallet column in passenger table
            $update_array         = [
                'wallet_amount' => $refer_dets[0]['referral_code_amount']
            ];
            $update_wallet_amount = DB::update(PASSENGERS)->set($update_array)->where('id', '=', $passenger_id)->execute();
            return 1;
        } else {
            return 0;
        }
    }
    //check passenger already used referral code
     public function check_referral_code_used($passenger_id)
    {
		$result = $this->db->count(MDB_PASSENGER_REFERRAL,['passenger_id'=>(int)$passenger_id]);
        return (!empty($result) ? $result:0);
    }
    public function check_referral_code_used_old($passenger_id)
    {
        $sql    = "SELECT count(passenger_referralid) as total FROM " . PASSENGER_REFERRAL . " WHERE passenger_id='$passenger_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->get('total');
        return $result;
    }
    //check otp exist for a passenger
    public function otp_verification($otp = "", $email = "")
    {
        /*$sql    = "SELECT count(id) as total FROM " . PASSENGERS . " WHERE email='$email' and otp='$otp'";
        $result = Db::query(Database::SELECT, $sql)->execute()->get('total');
        return $result;*/
        $match['otp'] = $otp;
        $sql = $this->mongo_db->find_one(MDB_PASSENGERS,$match,['_id','email','otp','created_date','updated_date']);
		$current_time =	date('Y-m-d H:i:s');
		$otpcreated_date = $sql['created_date'];
		$otp_expiry   = strtotime("+5 minutes", strtotime($otpcreated_date));
        if ($current_time <= $otp_expiry) {
		$result = $this->mongo_db->count(MDB_PASSENGERS,['email'=> $email,'otp' => $otp]);
        return ($result>0) ? $result: 0;
		}
		return -2;
    }
    // Check Whether Passenger phone is Already Exist or Not
    public function check_referral_code_exist($referral_code = "", $company_id = "")
    {
		$match = ['referral_code'=>$referral_code];
        if ($company_id != '' && $company_id != 0) {
			$match['passenger_cid'] = (int)$company_id;
        }
		$result = $this->mongo_db->count(MDB_PASSENGERS,$match);
		return (!empty($result)?1:0);
    }
    public function check_referral_code_exist_old($referral_code = "", $company_id = "")
    {
        if ($company_id != '') {
            $sql = "SELECT phone FROM " . PASSENGERS . " WHERE referral_code='$referral_code' and passenger_cid='$company_id'";
        } else {
            $sql = "SELECT phone FROM " . PASSENGERS . " WHERE referral_code='$referral_code'";
        }
        //echo $sql;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    //to check the passenger have wallet amount to use
    public function get_passenger_wallet_amount($passenger_id)
    {
        /*$sql    = "SELECT wallet_amount,name,lastname,email,phone,referral_code_amount,referral_code FROM " . PASSENGERS . " WHERE id='$passenger_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;*/
        
		$res = $this->mongo_db->find(MDB_PASSENGERS,['_id'=>(int)$passenger_id],["wallet_amount","name","lastname","email","phone","referral_code_amount","referral_code"])->sort(["_id"=>1]);
		$result = iterator_to_array($res);
        return (isset($result)?reset($result):[]);
    }
    //function to get passenger details by referral code
    public function passenger_detailsbyreferralcode($referral_code)
    {
        /*$sql    = "SELECT id,wallet_amount FROM " . PASSENGERS . " WHERE referral_code='$referral_code'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;*/
        $res = $this->mongo_db->find(MDB_PASSENGERS,['passenger_details.referral_code'=> $referral_code],['_id','passenger_details.wallet_amount']);
        $result = iterator_to_array($res);
        print_r($result);exit;
        return (isset($result)?reset($result):[]);
    }
    //to check the passenger have referral amount to use
    public function check_passenger_referral_amount($passenger_id)
    {
        /*$sql    = "SELECT referral_amount,referral_code FROM " . PASSENGER_REFERRAL . " WHERE passenger_id='$passenger_id' and referral_amount_used='0'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
       
        $result = $this->mongo_db->find(MDB_PASSENGER_REFERRAL,['passenger_id'=>(int)$passenger_id,'referral_amount_used'=>0],["referral_amount","referral_code"]);
        $res = iterator_to_array($result);
        return (isset($res)?$res:[]);
    }
    //insert into wallet log table
    public function add_wallet_log($fieldname_array, $values_array)
    {
        return DB::insert(PASSENGER_WALLET_LOG, $fieldname_array)->values($values_array)->execute();
    }
    //insert credit card details if savecard is 1
    public function add_credit_card_details($fieldname_array, $values_array)
    {
        return DB::insert(PASSENGERS_CARD_DETAILS, $fieldname_array)->values($values_array)->execute();
    }
    /** check promocode used limit for wallet **/
    public function checkwalletpromocode($promo_code = "", $passenger_id = "", $company_id = "")
    {
		$match = ['promocode'=>$promo_code,'passenger_id'=>(int)$passenger_id];
		$project = ['promocode',
						 'promo_discount',
						 'promo_used',
						 'start_date',
						 'expire_date',
						 'promo_limit'];
		$promo_query = $this->mongo_db->find(MDB_PASSENGERS_PROMO,$match,$project);
		$promo_fetch = iterator_to_array($promo_query);
		$promo_fetch = reset($promo_fetch);
        if (count($promo_fetch) > 0) {
			$promocode      = (isset($promo_fetch['promocode'])?$promo_fetch['promocode']:'');
            $promo_discount = (isset($promo_fetch['promo_discount'])?$promo_fetch['promo_discount']:'');
            $promo_used     = (isset($promo_fetch['promo_used'])?$promo_fetch['promo_used']:'');
            $promo_start_date    = (isset($promo_fetch['start_date'])?$promo_fetch['start_date']:'');
            $promo_expire_date   = (isset($promo_fetch['expire_date'])?$promo_fetch['expire_date']:'');
            $promo_limit    = (isset($promo_fetch['promo_limit'])?$promo_fetch['promo_limit']:'');
			$promo_start = Commonfunction::convertphpdate('Y-m-d H:i:s',$promo_start_date);
			$promo_expire = Commonfunction::convertphpdate('Y-m-d H:i:s',$promo_expire_date);
            if ($company_id == '' || $company_id == 0) {
                if (TIMEZONE) {
                    $current_time = convert_timezone('now', TIMEZONE);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            } else {
				$model_base_query = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
				$model_res = (isset($model_base_query)?$model_base_query:[]);
				if(!empty($model_res)){
					$timezone = (isset($model_res['companydetails']['time_zone'])?$model_res['companydetails']['time_zone']:'');
					$current_time = convert_timezone('now', $timezone);
				}else {
                    $current_time = date('Y-m-d H:i:s');
                }
            }
            if (strtotime($promo_start) > strtotime($current_time)) {
                return 3;
            } else if (strtotime($promo_expire) < strtotime($current_time)) {
                return 4;
            } else {
				$promo_use_query = $this->mongo_db->count(MDB_PASSENGER_WALLET_LOG,['promocode' => '$promo_code','passenger_id' => (int)'$passenger_id']);
				$promo_user_count = (!empty($promo_use_query)?$promo_use_query:0);
                if ($promo_user_count > 0 && $promo_user_count >= $promo_limit) {
                    return 2;
                } else {
                    return 1;
                }
            }
        } else {
            return 0;
        }
    }
    
    public function checkwalletpromocode_old($promo_code = "", $passenger_id = "", $company_id = "")
    {
        $promo_query = "SELECT promocode,promo_discount,promo_used,start_date,expire_date,promo_limit FROM  " . PASSENGER_PROMO . " WHERE  promocode = '$promo_code' and  `passenger_id` ='$passenger_id'  ";
        $promo_fetch = Db::query(Database::SELECT, $promo_query)->execute()->as_array();
        if (count($promo_fetch) > 0) {
            $promocode      = $promo_fetch[0]['promocode'];
            $promo_discount = $promo_fetch[0]['promo_discount'];
            $promo_used     = $promo_fetch[0]['promo_used'];
            $promo_start    = $promo_fetch[0]['start_date'];
            $promo_expire   = $promo_fetch[0]['expire_date'];
            $promo_limit    = $promo_fetch[0]['promo_limit'];
            if ($company_id == '') {
                if (TIMEZONE) {
                    $current_time = convert_timezone('now', TIMEZONE);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            } else {
                $model_base_query = "select time_zone from  company where cid='$company_id' ";
                $model_fetch      = Db::query(Database::SELECT, $model_base_query)->execute()->as_array();
                if ($model_fetch[0]['time_zone'] != '') {
                    $current_time = convert_timezone('now', $model_fetch[0]['time_zone']);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
            }
            // echo "start"."       ".$promo_start;
            // echo "end"."       ".$current_time;
            if (strtotime($promo_start) > strtotime($current_time)) {
                return 3;
            } else if (strtotime($promo_expire) < strtotime($current_time)) {
                return 4;
            } else {
                $promo_use_query  = "SELECT COUNT(passenger_wallet_logid) as promo_count  FROM  " . PASSENGER_WALLET_LOG . " WHERE  promocode = '$promo_code' and  `passenger_id` ='$passenger_id'";
                $promo_user_count = Db::query(Database::SELECT, $promo_use_query)->execute()->as_array();
                if (count($promo_user_count) > 0 && $promo_user_count[0]['promo_count'] >= $promo_limit) {
                    return 2;
                } else {
                    return 1;
                }
            }
        } else {
            return 0;
        }
    }
    /** to get location from latittude and longitude **/
    public function getaddress($lat, $lng)
    {
        try {
            $url    = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
            $json   = @file_get_contents($url);
            $data   = json_decode($json);
            $status = ($data) ? $data->status : 0;
            if ($status == "OK")
                return $data->results[0]->formatted_address;
            else
                return false;
        }
        catch (Kohana_Exception $e) {
            return false;
        }
    }
    /*Get the CMS Content*/
      public function getcmscontent($content, $default_companyid = "")
    {
		$result = $this->mongo_db->find_one(MDB_CMS,['menu_link'=> $content]);
		return (!empty($result)) ? $result: [];        
    }
    
    public function getcmscontent_old($content, $default_companyid = "")
    {
        $default_companyid = COMPANY_CID;
        if ($default_companyid != 0) {
            $sql = "select " . COMPANY_CMS . ".content," . COMPANY_CMS . ".menu_name as menu from " . COMPANY_CMS . "  where " . COMPANY_CMS . ".type='1' and status='1' AND " . COMPANY_CMS . ".page_url= '$content' AND company_id = '" . $default_companyid . "'";
        } else {
            $sql = "select " . CMS . ".content," . CMS . ".meta_keyword," . CMS . ".meta_title," . CMS . ".meta_description," . CMS . ".menu from " . CMS . " JOIN  " . MENU . " ON ( " . MENU . ".`menu_id` =  " . CMS . ".`menu_id` ) where " . CMS . ".type='1' and status='1' and " . MENU . ".menu_id='" . $content . "'";
        }
        //echo $sql;
        $cms_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $cms_result;
    }
    public function get_driver_cancelled_trips($driver_id, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time               = $get_company_time_details['start_time']; //Start time
        $end_time                 = $get_company_time_details['end_time']; //end time
        $result = $this->mongo_db->count(MDB_PASSENGERSLOGS_CANCELLED,['travel_status'=>9,'driver_reply'=>"C",'createdate'=>['$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000),'$lte'=>new \MongoDB\BSON\UTCDateTime(strtotime($end_time) * 1000)]]);
        return (isset($result))?$result:0;
    }
     public function logged_user_status_web($driver_id, $company_id)
    {
        $company_id = "";
		if ($company_id == 0) {
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        } else {
			$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            if (!empty($result)) {
				$time_zone = (isset($result['companydetails']['time_zone'])?$result['companydetails']['time_zone']:"");
                $time                    = date('H:i:s', strtotime($pickup_time));
                $current_datetime        = convert_timezone('now', $time_zone);
                $curretnt_datetime_split = explode(' ', $current_datetime);
                $update_time             = $curretnt_datetime_split[0] . ' ' . $time;
            } else {
				$time        = date('H:i:s', strtotime($pickup_time));
                $update_time = date('Y-m-d') . ' ' . $time;
            }
        }
		$match_array = [];
		$match_array['_id']=(int)$driver_id;
		if($company_id!="" && $company_id!=0){
			$match_array['company_id']=(int)$company_id;
		}
		//$match_array['taxi_driver_mapping.mapping_enddate']= array('$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000));
		$arguments = [
						['$match'=> $match_array],
						['$lookup'=>[
							'from'=>MDB_TAXI_DRIVER_MAPPING,
							'localField'=>"_id",
							'foreignField'=>"mapping_driverid",
							 'as'=>"taxi_driver_mapping"
						]],
						['$unwind'=>'$taxi_driver_mapping'],
						['$project' => [
							'login_status' => '$login_status',
							'notification_status' => '$notification_status'
						]]
					];
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
        $result = (isset($result['result']) ? $result['result']: []);
        if (count($result) == 0) {
            $result[0]['login_status']        = 'N';
            $result[0]['notification_status'] = '0';
            $result[0]['admin_logout']        = '1';
			$match_array = [];
			$match_array['driver_id']=(int)$driver_id;
			$match_array['travel_status']=['$in' => [2,3,5,9]];
			$match_array['driver_reply'] = 'A';
			if($company_id!="" && $company_id!=0){
				$match_array['company_id']=(int)$company_id;
			}
			$match_array['pickup_time']= ['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
			$result1 = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match_array,['_id','travel_status'])->sort(['_id' => -1])->skip(0)->limit(1);
			$get_driver_log_details = iterator_to_array($result1);
            if (count($get_driver_log_details) == 0) {
                $update_array        = [
                    "login_from" => "",
                    "login_status" => "N",
                    "device_id" => "",
                    "device_token" => "",
                    "device_type" => "",
                    "notification_setting" => 0
                ];
                $login_status_update = $this->update_table(MDB_PEOPLE, $update_array, '_id', $driver_id);
                if ($login_status_update) {					
                    $result[0]['login_status']        = 'N';
                    $result[0]['notification_status'] = '1';
                    $result[0]['admin_logout']        = '1';
                    $update_driverArr                 = [
                        "shift_status" => "OUT"
                    ];
					$dr_status_update                 = $this->update_table(MDB_DRIVER_INFO, $update_driverArr, '_id', $driver_id);
                }
                /** GET Shift ID **/
                $driver_shift = $this->get_driver_shift_log($driver_id);
                if (count($driver_shift) > 0) {
                    $this->currentdate  = Commonfunction::getCurrentTimeStamp();
                    $shiftupdate_arrary = [
                        "shift_end" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                    ];
                    $driver_shift_id    = isset($driver_shift[0]['_id']) ? $driver_shift[0]['_id'] : '';
					if($driver_shift_id != ''){
						$transaction        = $this->update_table(MDB_SHIFT_HISTORY, $shiftupdate_arrary, '_id', $driver_shift_id);	
					}                    
                }
            }
            return $result;
        } else {
            if ($result[0]['login_status'] == 'S' && $result[0]['notification_status'] == 1) {
                return 1;
            }
            if ($result[0]['login_status'] == 'N') {
                return $result;
            } else {
                return 1;
            }
        }
    }
    public function logged_user_status_web_old($driver_id, $company_id)
    {
        //echo 'as'.$company_id;
        $company_id = "";
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
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        if ($company_id != '') {
            $query = "SELECT login_status,notification_status FROM " . PEOPLE . " Join " . TAXIMAPPING . " on " . TAXIMAPPING . ".`mapping_driverid` = " . PEOPLE . ".`id` where id = '" . $driver_id . "' and company_id='$company_id' and " . TAXIMAPPING . ".`mapping_enddate` >= '$current_time'";
        } else {
            $query = "SELECT login_status,notification_status FROM " . PEOPLE . " Join " . TAXIMAPPING . " on " . TAXIMAPPING . ".`mapping_driverid` = " . PEOPLE . ".`id` where id = '" . $driver_id . "' and " . TAXIMAPPING . ".`mapping_enddate` >= '$current_time'";
        }
        //echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) == 0) {
            $result[0]['login_status']        = 'N';
            $result[0]['notification_status'] = '0';
            $result[0]['admin_logout']        = '1';
            $company_condition                = "";
            if ($company_id != "") {
                $company_condition = " AND " . PASSENGERS_LOG . ".company_id = '$company_id'";
            }
            $driverlogsql           = "SELECT " . PASSENGERS_LOG . ".passengers_log_id," . PASSENGERS_LOG . ".travel_status FROM  " . PASSENGERS_LOG . " WHERE  " . PASSENGERS_LOG . ".`driver_id` =  '$driver_id' and " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "' $company_condition and (travel_status = '9' OR travel_status = '5' OR travel_status='3' OR travel_status='2') and driver_reply = 'A' ORDER BY " . PASSENGERS_LOG . ".passengers_log_id DESC LIMIT 0 , 1 ";
            $get_driver_log_details = Db::query(Database::SELECT, $driverlogsql)->as_object()->execute();
            if (count($get_driver_log_details) == 0) {
                $update_array        = [
                    "login_from" => "",
                    "login_status" => "N",
                    "device_id" => "",
                    "device_token" => "",
                    "device_type" => "",
                    "notification_setting" => "0"
                ];
                $login_status_update = $this->update_table(PEOPLE, $update_array, 'id', $driver_id);
                if ($login_status_update) {
                    $result[0]['login_status']        = 'N';
                    $result[0]['notification_status'] = '1';
                    $result[0]['admin_logout']        = '1';
                    $update_driverArr                 = [
                        "shift_status" => "OUT"
                    ];
                    $dr_status_update                 = $this->update_table(DRIVER, $update_driverArr, 'driver_id', $driver_id);
                }
                /** GET Shift ID **/
                $driver_shift = $this->get_driver_shift_log($driver_id);
                if (count($driver_shift) > 0) {
                    $this->currentdate  = Commonfunction::getCurrentTimeStamp();
                    $shiftupdate_arrary = [
                        "shift_end" => $this->currentdate
                    ];
                    $driver_shift_id    = isset($driver_shift[0]['driver_shift_id']) ? $driver_shift[0]['driver_shift_id'] : '';
                    $transaction        = $this->update_table(DRIVERSHIFTSERVICE, $shiftupdate_arrary, 'driver_shift_id', $driver_shift_id);
                }
            }
            return $result;
        } else {
            if ($result[0]['login_status'] == 'S' && $result[0]['notification_status'] == 1) {
                return 1;
            }
            if ($result[0]['login_status'] == 'N') {
                return $result;
            } else {
                return 1;
            }
        }
    }
    public function get_driver_shift_log($id)
    {
		$result = $this->mongo_db->find(MDB_SHIFT_HISTORY,['driver_id' => (int)$id],['_id']);
		$res = iterator_to_array($result);
		return (!empty($res) && $res)?Commonfunction::change_key($res):[];
    }
    public function get_passenger_company_id($id)
    {
        /*$query  = "SELECT passenger_cid FROM " . PASSENGERS . " WHERE id = '$id'";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return ($result[0]['passenger_cid']) ? $result[0]['passenger_cid'] : 0;*/
		
			$result1 = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=> (int)$id],['passenger_cid']);
        return (!empty($result1)) ? $result1['passenger_cid']: 0;
    }
    //** to check the passenger in trip or not **//
    public function check_passenger_in_trip($passengerId, $company_id)
    {
		
        $get_company_time_details = $this->get_company_time_details($company_id);
        $st_time               = $get_company_time_details['start_time'];
		$start_time = Commonfunction::convertphpdate('Y-m-d H:i:s',$st_time);
		
		$match = ['pickup_time' => ['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)],
						'passengers_id' => (int)$passengerId,
						'driver_reply' => 'A',
						'now_after' => '0',
						'travel_status'=>['$in'=>[9,2,3,5]]	
					];
		
		$count = $this->mongo_db->count(MDB_PASSENGERS_LOGS,$match);
		return (!empty($count)?$count:0);
    } 
    // Check Whether Passenger is fb user or normal
     public function check_fb_user($phone = "", $company_id = "", $country_code = "")
    {
		$match_query = [];
		$match_query['phone'] = $phone;
		$match_query['country_code'] = $country_code;
		$match_query['fb_user_id'] = ['$ne' => ""];
		$match_query['fb_access_token'] = ['$ne' => ""];
		if($company_id!="" && $company_id!=0){
			$match_query['passenger_cid'] = (int)$company_id;
		}
		$result = $this->mongo_db->count(MDB_PASSENGERS,$match_query,['_id']);
		return ($result > 0)? 1:0;
    }
	
    public function check_fb_user_old($phone = "", $company_id = "", $country_code = "")
    {
        if ($company_id != '') {
            $sql = "SELECT count(id) as total FROM " . PASSENGERS . " WHERE phone='$phone' and country_code='$country_code' and passenger_cid='$company_id' and fb_user_id != '' and fb_access_token != ''";
        } else {
            $sql = "SELECT count(id) as total FROM " . PASSENGERS . " WHERE phone='$phone' and country_code='$country_code' and fb_user_id != '' and fb_access_token != ''";
        }
       // echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->get('total');
        return $result;
    }
    
    //Invite From Contacts 
    public function insert_child_request($account_type='',$passenger_id='',$user_name='',$user_number='',$email='',$check_user_status='',$request_type=''){
		$res = $this->mongo_db->find(MDB_CHILD_REQUEST_TYPE,['parent_id'=>(int)$passenger_id,'phone'=> $user_number],['phone']);
		
        $result = iterator_to_array($res);
		$cat_first_key = '';
		$count = (count($result)>0) ? 1 : 0 ;
		if($count ==  0 ){
			$cat_rs = $this->mongo_db->find(MDB_CHILD_REQUEST_TYPE,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$cat_rs = iterator_to_array($cat_rs);
			reset($cat_rs);
			$cat_first_key = key($cat_rs);
			$cat_id = $cat_first_key + 1;
			$cat_request_type = ['_id'=>$cat_id,
				'account_type' =>(int) $account_type,			
				'parent_id' => (int)$passenger_id,			
				'name' => $user_name,			
				'phone' => $user_number,			
				'email' => $email,			
				'user_status' => $check_user_status,			
				'status' => (int)0
			];
			$cat_result = $this->mongo_db->insert(MDB_CHILD_REQUEST_TYPE,$cat_request_type);
			$cat_rs = $this->mongo_db->find(MDB_CHILD_REQUEST_TYPE,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$cat_rs = iterator_to_array($cat_rs);
			reset($cat_rs);
			$cat_first_key = key($cat_rs);           
		}
		return $cat_first_key;
	}
	
	public function alreadyExist($passenger_id,$phone,$email) {
		$result = $this->mongo_db->count(MDB_CHILD_REQUEST_TYPE,['parent_id'=>(int)$passenger_id,'phone'=>$phone,'email'=>$email],['_id']);
		return $result;
	}
	
	public function requestedCheck($phone,$passenger_id) {
		$user = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=>$phone],['_id']);
		$info = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['phone']);
		$result = $this->mongo_db->count(MDB_CHILD_REQUEST_TYPE,['parent_id'=>(int)$user['_id'],'phone'=>$info['phone'],'status'=>(int)0],['_id']);
		
		return $result;
	}
	
	public function getRequestPassengers($ids) {		
		$match_query = ['_id'=>['$in'=>$ids]];		
		$ops = [				
			['$match' => $match_query],
			[
				'$project' => ['_id' => '$_id','name' => '$name', 'phone' => '$phone', 'user_status' => '$user_status'
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_CHILD_REQUEST_TYPE,$ops);		
		return $result['result'];		
	}
	
	public function getRequestPassengers_details($ids) {		
		$match_query = ['_id'=>['$in'=>$ids]];		
		$ops = [				
			['$match' => $match_query],
			[
				'$project' => ['_id' => '$_id','name' => '$name', 'phone' => '$phone', 'user_status' => '$user_status'
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$ops);		
		return $result['result'];		
	}
	//get Model types
	public function modeldetails()
    {	
		$match_query = ['model_status'=>['$eq'=>"A"]];
		$ops = [				
			['$match' => $match_query],
			[
						'$sort' => ["priority"=>1]
				],
			[
				'$project' => ['model_name' => '$model_name','model_name_ar' => '$model_name_ar','cancellation_fare' => '$cancellation_fare','evening_fare' => '$evening_fare', 'evening_timing_from' => '$evening_timing_from', 'evening_timing_to' => '$evening_timing_to', 'night_fare' => '$night_fare', 'night_timing_from' => '$night_timing_from', 'night_timing_to' => '$night_timing_to', 'max_luggage' => '$max_luggage','model_size'=>'$model_size','priority' => '$priority',"model_image" => '$model_image',"iconic_image" => '$iconic_image'
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$ops);	
		return $result['result'];
		
    }
    public function update_taxi_info($driver_id='',$taxi_id='',$default_companyid='',$model_type='',$start_km=''){

		
			
				$arguments = [
				[
					'$lookup' => [
						'from' => MDB_TAXI,
						'localField' => 'mapping_taxiid',
						'foreignField' => '_id',
						'as' => 'taxi'
					]
				],
				[
					'$unwind' => '$taxi'
				],
				[
					'$lookup' => [
						'from' => MDB_PEOPLE,
						'localField' => 'mapping_driverid',
						'foreignField' => '_id',
						'as' => 'people'
					]
				],
				[
					'$unwind' => '$people'
				],
				[
					'$match' => ['people._id' => (int)$driver_id,"mapping_status" => 'D' ]
				],
				[
					'$project' => [
						'_id' => '$_id',
						'taxi_no' => '$taxi.taxi_no',
						'name' => '$people.name',
						'email' => '$people.email',
					]
				],
			];
			$result          = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING, $arguments);
			$res_set = $result['result'];
			if(count($res_set)>0){
				
				/* NEW CHANGES */
				    $ck_result = $this->mongo_db->find_one(MDB_TAXI_DRIVER_MAPPING,['mapping_taxiid'=>$taxi_id,'mapping_status' => 'A'], ['_id','mapping_status']);
					if (count($ck_result) == 0) {
				
				/* NEW CHANGES */
				
				
				
				$mapping_id = $res_set[0]['_id'];
				$mresult = $this->mongo_db->update(MDB_TAXI_DRIVER_MAPPING,['_id'=>(int)$mapping_id],['$set'=> ["mapping_taxiid" =>(int)$taxi_id,'mapping_status' =>ACTIVE]]);
				}
				else {
				return -3;	
				}
				
				//echo count($mresult);exit;
				
			}else{
				
				/* NEW CHANGES */
				    $ck_result = $this->mongo_db->find_one(MDB_TAXI_DRIVER_MAPPING,['mapping_taxiid'=>$taxi_id,'mapping_status' => 'A'], ['_id','mapping_status']);
					if (count($ck_result) == 0) {
				
				/* NEW CHANGES */
				
				$rs = $this->mongo_db->find(MDB_TAXI_DRIVER_MAPPING,[],['_id'])->sort(['_id'=>-1])->limit(1);
				$res = iterator_to_array($rs);
				reset($res);
				$first_key = key($res);
				$_id = $first_key+1;
				$insert_data = ['_id'=>$_id,
					'mapping_driverid' => (int)$driver_id,
					'mapping_taxiid' =>(int)$taxi_id,
					'mapping_companyid' =>(int)$default_companyid,
				   /* 'mapping_countryid' =>(int)$post['country'],
					'mapping_stateid' => (int)$post['state'],
					'mapping_cityid' =>(int)$post['city'],
					'mapping_startdate' =>$post['startdate'],
					'mapping_enddate' =>$post['enddate'],*/
					'mapping_status' =>ACTIVE,
					'mapping_createdby' =>$driver_id
				];
				$result = $this->mongo_db->insert(MDB_TAXI_DRIVER_MAPPING,$insert_data);
			}else {
				return -3;	
				}
			}
			$mresult = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$driver_id],['$set'=> ["model_type" => $model_type]]);
			
			$check_startkm = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],['starting_km']);
			
			if($start_km >= $check_startkm['starting_km']){ 
			$mresult1 = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$taxi_id],['$set'=> ["starting_km" => $start_km]]);
			}
			return (empty($mresult['err']))?1:$mresult['errmsg'];
			
			/* Changes on 24-may-2016 */
				
           
            
			
	}
	public function get_child_request_details($array){
		$profile = $this->passenger_profile($array['passenger_id']);
	    if (count($profile) > 0) {
					$match_query = ['parent_id'=> (int)$array['passenger_id']];
					$ops = [				
						['$match' => $match_query],
						[
							'$project' => ['phone' => '$phone','name' => '$name','user_status' => '$user_status'
							]
						],
					];
					$result = $this->mongo_db->aggregate(MDB_CHILD_REQUEST_TYPE,$ops);	
					return $result['result'];
				
		}
	}
	public function get_passenger_childlist($id,$account_type){
		$array = [
				'$match' => ['parent_id' => (int)$id,				
				'user_status' => "A",
								
		]];
		if(!empty($account_type)) {
			$array = [
				'$match' => ['parent_id' => (int)$id,
				'account_type' => (int)$account_type,
				'user_status' => "A"				
			]];
		}
		$arguments = [
             
                [
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => 'account_type',
					'foreignField' => '_id',
					'as' => 'account'
				]
				],
				['$unwind' => '$account'],
				[
				'$lookup' => [
					'from' => MDB_CHILD_REQUEST_TYPE,
					'localField' => 'phone',
					'foreignField' => 'phone',
					'as' => 'request'
				]
				],
				['$unwind' => '$request'],
				$array,
                [
                    '$project' => [
						'_id' => '$_id',
						'name' => '$name',
						'email' => '$email',
						'phone' => '$phone',
						'address' => '$address',
						'user_status' => '$user_status',
						'country_code' => '$country_code',
						'profile_image' => '$profile_image',
						'parent_id' => '$parent_id',
						'account_type' => '$account_type',
						'request_id' => '$request._id',
						'account_type_name' => '$account.account_type',
						'allow_creditcard' => '$allow_creditcard',
                    ]
                ],
                ['$sort'=>['account_type' => 1]],
                
		];
		$result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
		//echo '<pre>'; print_r($result['result']);echo '</pre>';exit;
		return (!empty($result['result']))?$result['result']:[];
	}
	
	public function child_member_operations($child,$flag,$check_flag,$request_id){
		if($flag == 1){	// Trash Child Member
			if($check_flag == 1){	
			$mresult = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$child],['$set'=> ["parent_id" => 0 ,"account_type" => 0]]);
			$match = ['_id'=>(int)$request_id];
			$delete = $this->mongo_db->remove(MDB_CHILD_REQUEST_TYPE,$match);
			
			}/*else{
			$mresult = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>(int)$child),array('$set'=> array("user_status" => "A")));
			}*/
			return (empty($mresult['err']))?1:$mresult['errmsg'];
		}else if($flag == 2){//Allow credit card
			$mresult = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$child],['$set'=> ["allow_creditcard" => $check_flag]]);
			return (empty($mresult['err']))?1:$mresult['errmsg'];
		}
		
	}
	/* Changes on 23-may-2016 */
	public function get_passenger_details($phone = "", $company_id = "")
    {
		$ops = [
				  ['$match'=>['phone'=>$phone]],
				  [
					  '$project' => [
					  'id' => '$_id',
					  'phone' => '$phone', 	
					  'device_token' => '$device_token',
					  'device_type' => '$device_type',						
					  ]
				  ],
				  [
					  '$sort' => ["_id"=>-1]
				  ],
		  ];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$ops);		
        return $result['result'];
		
    }
	
	public function get_passenger_details_by_id($id = "", $company_id = "")
    {
		  $ops = [
					['$match'=>['_id'=>(int)$id]],
					[
						'$project' => [
						'name' => '$name',
						'lastname' => '$lastname',
						'phone' => '$phone',
						'profile_image' => '$profile_image',
						'device_token' => '$device_token',
						'device_type' => '$device_type',						
						]
					],
					[
						'$sort' => ["_id"=>-1]
					],
			];
		
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$ops);		
        return $result['result'];
		
    }
	
	public function get_passenger_info($id) {
		$ops = [
				  ['$match'=>['_id'=>(int)$id]],
				  [
					  '$project' => [
					  'phone' => '$phone',
					  'org_password' => '$org_password',						
					  ]
				  ],
				  [
					  '$sort' => ["_id"=>-1]
				  ],
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$ops);
		return $result['result'];
	}
	
	/* Changes on 23-may-2016 */
	/* Changes On 24-may-2016 */
	  public function compare_contacts($phone=''){
		$res_phone = explode('-',$phone);
		$result = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=> $res_phone[0]],['_id','name','parent_id','email','phone']);
		$contacts = [];
			if (count($result) > 0) {
				$check_having_parent = $result['parent_id'];
				if($check_having_parent == 0 ){
					return $result['phone'].'-'.$res_phone[1];	
				}else{
					return -1;	
				}
			}else{
				return $res_phone[0].'-'.$res_phone[1];	
			}
       	}
    public function check_phone_passengers_register_check($phone = "")
    {
		$res = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=>$phone],['phone','parent_id']);
		if (count($res) > 0) {
			$check_having_parent = $res['parent_id'];
			if($check_having_parent == 0 ){
				return 1;
			}else{
				return $res['_id'];	
			}
		}else{
			return 0;
		}
        
    }
    public function taxino_isValid($name="")
    {
		$res = $this->mongo_db->find_one(MDB_TAXI,['taxi_no'=>$name],['taxi_no','_id']); 
        return (count($res) >0 )?$res:'-1';
	
    }
    public function taxino_isValidstart_km($taxi_id="")
    {
		$check_startkm = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],['starting_km']);
		return $check_startkm['starting_km'];	
		
       
	
    }
    
	
	public function child_request_status($parent_id,$passenger_id,$status,$request_id) {
		$type = $this->mongo_db->find_one(MDB_CHILD_REQUEST_TYPE,['_id'=>(int)$request_id],['account_type']);
		$update_array = ["parent_id" => (int)$parent_id, "user_status" => "A", "account_type" => (int)$type['account_type']];
		$mresult = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=> $update_array]);
		$result = $this->mongo_db->update(MDB_CHILD_REQUEST_TYPE,['_id'=>(int)$request_id],['$set'=> ["status" => 1]]);
		$match = ['request_id'=>(int)$request_id];
		$notify = App::helper('notifications');
		$notify->setSender($passenger_id);
		$notify->setReceiver($parent_id);
		$notify->setMessage('');		
		$notify->setNotificationType(2);
		$notify->sendNotification();
		$delete = $this->mongo_db->remove(MDB_NOTIFICATIONS,$match);
		
		return $mresult;
	}
	public function delete_child_request($parent_id,$passenger_id,$request_id){
		
		$result = $this->mongo_db->update(MDB_CHILD_REQUEST_TYPE,['_id'=>(int)$request_id],['$set'=> ["status" => (int)2]]);
		$match = ['request_id'=>(int)$request_id];
		$notify = App::helper('notifications');
		$notify->setSender($passenger_id);
		$notify->setReceiver($parent_id);
		$notify->setMessage('');		
		$notify->setNotificationType(3);
		$notify->sendNotification();
		$delete = $this->mongo_db->remove(MDB_NOTIFICATIONS,$match);
		return $result;
	}
	
	

	public function get_child_request_status($id,$lang)
    {
		$update = ['read_status'=>(int)1];
		$readUpdate = $this->mongo_db->update(MDB_NOTIFICATIONS,['receiver'=>(int)$id],['$set'=>$update],[
    'multiple' => true,'upsert' => false]);
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_NOTIFICATIONS_TYPE,
					'localField' => 'notification_type',
					'foreignField' => '_id',
					'as' => 'type'
				]
			],
			[
				'$unwind' => '$type'
			],
			[
				'$lookup' => [
					'from' => MDB_PASSENGERS,
					'localField' => 'sender',
					'foreignField' => '_id',
					'as' => 'pass'
				]
			],
			[
				'$unwind' => '$pass'
			],
			[
				'$match' =>['receiver'=>(int)$id],
			],
			[
				'$project' => [
				'name' => '$pass.name',
				'profile_image' => '$pass.profile_image',
				'profile_thumb' => '$pass.profile_thumb_image',
				'id' => '$pass._id',
				'lastname' => '$pass.lastname',
				'phone' => '$pass.phone',				
				'device_token' => '$pass.device_token',
				'device_type' => '$pass.device_type',
				'notification_type' => ($lang == 'en') ? '$type.notification_type_en' : '$type.notification_type_ar',
				'type' => '$notification_type',
				'message' => '$message',
				'request_id' => '$request_id'
				]
			]			
		];		
		$result = $this->mongo_db->aggregate(MDB_NOTIFICATIONS,$common_arguments);
		return $result['result'];	
    }
	
	public function get_notification_count($id)
    {
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_NOTIFICATIONS_TYPE,
					'localField' => 'notification_type',
					'foreignField' => '_id',
					'as' => 'type'
				]
			],
			[
				'$unwind' => '$type'
			],
			[
				'$lookup' => [
					'from' => MDB_PASSENGERS,
					'localField' => 'sender',
					'foreignField' => '_id',
					'as' => 'pass'
				]
			],
			[
				'$unwind' => '$pass'
			],
			[
				'$match' =>['receiver'=>(int)$id,'read_status'=>(int)0],
			],
			[
				'$project' => [
				'name' => '$pass.name',
				'profile_image' => '$pass.profile_image',
				'profile_thumb' => '$pass.profile_thumb_image',
				'id' => '$pass._id',
				'lastname' => '$pass.lastname',
				'phone' => '$pass.phone',				
				'device_token' => '$pass.device_token',
				'device_type' => '$pass.device_type',
				'type' => '$notification_type',
				'message' => '$message'
				]
			]			
		];		
		$result = $this->mongo_db->aggregate(MDB_NOTIFICATIONS,$common_arguments);
		return count($result['result']);	
    }
	
	public function get_insert_id($collection = ""){
		$rs = $this->mongo_db->find($collection,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$res = (!empty($rs))?iterator_to_array($rs):[1];
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		return $inc_id;
	}
	
	public function check_taxi_free($taxi_id=""){
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_taxiid',
					'as' => 'mapping'
				]
			],
			[
				'$unwind' => '$mapping'
			],
			
			[
				'$match' =>['_id'=>(int)$taxi_id],
			],
			[
					'$group' => [
						'_id' => NULL,
						'count' => [
							'$sum' => 1
						]
					]
				]
		];
		//print_r($common_arguments);
		$result = $this->mongo_db->aggregate(MDB_TAXI,$common_arguments);		
		
        return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		
	}
	public function driver_feedback($driver_id='',$taxi_id='',$default_companyid='',$model_type='',$feedback=''){
		$add_model        = Model::factory('add'); // Check Passenger id is avail or not
		$check_driver_avail = $add_model->driver_id_isValid($driver_id);
		if($check_driver_avail == 1){
	/* Driver Feedback section */
			if($feedback != ''){
			$rs = $this->mongo_db->find(MDB_DRIVER_FEEDBACK,[],['_id'])->sort(['_id'=>-1])->limit(1);
				$res = iterator_to_array($rs);
				reset($res);
				$first_key = key($res);
				$_id = $first_key+1;
			    $insert_data = ['_id'=>$_id,
					'driver_id' => (int)$driver_id,
					'taxi_id' =>(int)$taxi_id,
					'company_id' =>(int)$default_companyid,
					'car_model' => $model_type,
					'feedback' => $feedback
					
				];
				$result = $this->mongo_db->insert(MDB_DRIVER_FEEDBACK,$insert_data);
			}
			/* Driver Feedback section */
	return (empty($result['err']))?1:$result['errmsg'];
}else { return -1;}
	}
	
	public function get_child_trip_count($passId) {
		$common_arguments = [
			[
				'$match' =>['parent_id'=>(int)$passId],
			],[
				'$lookup' => [
					'from' => MDB_PASSENGERS_LOGS,
					'localField' => '_id',
					'foreignField' => 'passengers_id',
					'as' => 'plog'
				]
			],
			[
				'$unwind' => '$plog'
			],
			
			[
				'$match' =>['plog.travel_status' => (int)2],
			],
			[
					'$group' => [
						'_id' => NULL,
						'count' => [
							'$sum' => 1
						]
					]
				]
		];
		
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$common_arguments);
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
	}
	public function getPassAvailable($pid) {
		$res = $this->mongo_db->count(MDB_PASSENGERS,['_id'=>$pid,'pay_by'=>['$ne'=>(int)3]],['_id']);
		return (count($res) >0 )?$res:$res;
	}
	
	public function getPayBy($pid) {
		$res = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>$pid,'pay_by'=>['$ne'=>(int)3]],['pay_by']);
		return $res;
	}
	
	public function update_passenger_data($data)
    {		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$data['phone']],['_id']);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_id = key($pass_rs);
		$current_time = date('Y-m-d H:i:s');
		$password        = text::random($type = 'alnum', $length = 6);
		
		$passenger = [			
			'email' => $data['email'],
			'password' => md5($password),
			'org_password' => $password,
			'created_date' => $current_time,
			'updated_date' => $current_time,			
			'login_status' => 'S',
			'skip_credit_card' => 2,
			'creditcard_details' => [],						
			'user_status' => 'A',			
		];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$pass_id],['$set'=>$passenger],['upsert'=>false]);
		$info = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>$pass_id],['_id','parent_id','email','org_password','phone','name']);
		return $info;		
    }
	
	
	public function update_passenger_devicetoken($val, $otp = null, $devicetoken = "", $deviceid = "", $devicetype = "", $company_id = ""){
		
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$val['phone']],['_id']);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_id = key($pass_rs);
		$current_time = date('Y-m-d H:i:s');
		$password        = text::random($type = 'alnum', $length = 6);
		$c_code = isset($val['country_code'])?$val['country_code']:'';

		$passenger = [			
			'otp' => $otp,
			'device_id' => $deviceid,
			'device_token' => $devicetoken,
			'device_type' => $devicetype,
			'country_code' => $c_code,
			//'activation_status' => '0',
			//'user_status' => 'I',			
		];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$pass_id],['$set'=>$passenger],['upsert'=>false]);
	}
	
	public function update_device_token($mobiledata) {
			
		if($mobiledata['type'] == 1 ){
			$passenger = [
			'device_id' => $mobiledata['device_id'],
			'device_token' => $mobiledata['device_token'],
			'device_type' => $mobiledata['device_type']					
		];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$mobiledata['id']],['$set'=>$passenger],['upsert'=>false]);
		}else {
			$tab = [
			'device_id' => $mobiledata['device_id'],
			'tab_token' => $mobiledata['device_token'],
			'device_type' => $mobiledata['device_type']					
		];
		$pass_result = $this->mongo_db->update(MDB_TAXI,['qrencodeString'=>(int)$mobiledata['id']],['$set'=>$passenger],['upsert'=>false]);
		}
	}
	
	public function update_passenger_status($p_phone) {
		$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,['phone'=>$p_phone],['_id']);
		$pass_rs = iterator_to_array($pass_rs);
		reset($pass_rs);
		$pass_id = key($pass_rs);
		
		$passenger = [			
			'user_status' => 'A'			
		];
		$pass_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$pass_id],['$set'=>$passenger],['upsert'=>false]);
	}
	
	public function update_payment_type($trip_id,$payment_type) {
		$update_log_array = ['payment_type' => $payment_type,"payment_chosen_flag" => '1'];
		$pass_log_update          = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=> $update_log_array],['upsert'=>false]);
		return $pass_log_update;
	}
	public function check_taxisacn($code){
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_MOTOR_MODEL,
					'localField' => 'taxi_model',
					'foreignField' => '_id',
					'as' => 'model'
				]
			],
			[
				'$unwind' => '$model'
			],
			[
				'$match' =>['qrencodeString'=>$code]
			],
			[
				'$project' => [
				'taxi_id' => '$_id',
				'taxi_no' => '$taxi_no',
				'taxi_model' => '$taxi_model',
				'starting_km' => '$starting_km',
				'model_name' => '$model.model_name',
				]
			],
						
		];		
		$result = $this->mongo_db->aggregate(MDB_TAXI,$common_arguments);//	print_r($result['result'][0]);exit;
		return (!empty($result['result']))?$result['result'][0]:[];
	
		
	}
	
	public function getCurrentDistance($trip_id) {
		$result = $this->mongo_db->find_one(MDB_LOCATION_HISTORY,['trip_id' => (int)$trip_id],['distance']);
		return $result;
	}
	
	public function cms_details(){
		
		$ops = [['$match'=>['content_status'=>['$eq'=>(int)1]]],
						['$project'=>[
							'id'=>'$_id',
							'menu_name'=>'$menu_name',
							'menu_link'=>'$menu_link',
						]],
						['$sort'=>['_id'=>-1]]
																
					];
		$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
		return (!empty($result['result']))?$result['result']:[];
	}
	
	public function add_passenger_log_temp($post) {
		$match = ['trip_id'=>$post['trip_id']];
		$delete = $this->mongo_db->remove(MDB_PASSENGERS_LOGS_TEMP,$match);
		$id = Commonfunction::get_auto_id(MDB_PASSENGERS_LOGS_TEMP);
		$insert_data = ['_id'=>$id];
		$insert_data_array = array_merge($insert_data,$post);
		$result = $this->mongo_db->insert(MDB_PASSENGERS_LOGS_TEMP,$insert_data_array);		
    }
	
	public function tabTokenUpdate($taxiid,$token) {
		$update = ['tab_token'=>$token];
		$pass_result = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$taxiid],['$set'=>$update],['upsert'=>false]);
		return (count($pass_result))?1:0;
	}
	
	public function getVideoURL() {
		$result = $this->mongo_db->find_one(MDB_SITEINFO,[],['tab_video','version']);
		return $result;
	}
	
	public function getTabToken($taxiid) {
		$info = $this->mongo_db->find_one(MDB_TAXI,['_id'=>$taxiid],['_id','tab_token']);
		return $info;
	}
	public function getrecentLocation(){
		$new_arr = [];
		$new_arr1 = [];
		$loation = [];
		$ops = [
				  ['$match'=>['travel_status'=>(int)1]],
				  [
					  '$project' => [
					  'location' => '$drop_location',						
					  'latitude' => '$drop_latitude',						
					  'longitude' => '$drop_longitude',
					 						
					  ]
				  ],
				  [
					  '$sort' => ["_id"=>-1]
				  ]
				 
		];
		$dresult = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$ops);
		$ops1 = [
				  ['$match'=>['travel_status'=>(int)1]],
				  [
					  '$project' => [
					  'location' => '$current_location',						
					  'latitude' => '$pickup_latitude',						
					  'longitude' => '$pickup_longitude',
					 						
					  ]
				  ],
				  [
					  '$sort' => ["_id"=>-1]
				  ]
				 
		];
		$presult = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$ops1);
		$tot = array_merge($dresult['result'],$presult['result']);
		
		foreach($tot as $k =>$arr){
			$myloc = str_replace(' ','',$arr['location']);
			if(!in_array($myloc,$loation)){
				$new_arr[$k]['location'] = $arr['location'];
				$new_arr[$k]['latitude'] = $arr['latitude'];
				$new_arr[$k]['longitude'] = $arr['longitude'];
				$loation[] = str_replace(' ','',$arr['location']);	
			}
		}

		if(count($new_arr) > 10){
		$output =  array_slice($new_arr, 0, 10);	
		}else {
			$output = $new_arr;
		}
		
	//	echo "<pre>";
	//print_r($output);exit;	 
	foreach($output as $value) { $new_arr1[] = $value; }

	return $new_arr1;
		
	}
	  public function get_taxi_channel_details($taxi_id = "")
    {
        /*$sql    = "SELECT taxi_model FROM  " . TAXI . "  WHERE  `taxi_id` =  '$taxi_id'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();*/
        
        $result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],["live_stream_channel"]);
        //print_r($result);exit;
        return (isset($result)? $result:[]);
    }
    public function update_drop_location($trip_id,$latitude,$longitude,$drop_location) {
		$update_log_array = ['drop_location' => $drop_location,"drop_latitude" => $latitude,"drop_longitude"=>$longitude];
		$pass_log_update          = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$trip_id],['$set'=> $update_log_array],['upsert'=>false]);
		return $pass_log_update;
	}
	/* Changes On 24-may-2016 */
	
	/* MULTIPLE TRIP FLOW 1 */
	public function check_new_request_multitrip1($driver_id, $company_all_currenttimestamp,$pickup_location,$drop_location,$second_job_taxi_id)
    {
     /* GET TAXI SPEED */
     $arguments = [
				['$lookup' =>
					[
						'from' => MDB_TAXI,
						'localField' => '_id',
						'foreignField' => 'taxi_model',
						'as' => 'taxi',
					]	
				],
				['$unwind' => '$taxi'],
				['$match' => ['taxi._id' => $second_job_taxi_id]],
				['$project' => ['taxi_speed' => '$taxi_speed']],
			];
			$speed_result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
			$speed = $speed_result[0]['taxi_speed'];
     /* GET TAXI SPEED */
		
		$distance         = $this->Tripdistance_Haversine($pickup_location, $drop_location);
		if ($distance > 0) {
							if (UNIT_NAME != "KM") { //to get distance in miles
								$current_distance = round($distance, 4);
							} else { //to get distance in km
								$current_distance = round($distance * 1.609344, 4);
							}
		}
		$estimated_time = $current_distance / $speed; // TIME IN SECONDS
		
		if($estimated_time < ( 2 * 3600 ) ){						
		
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
		$arguments = [['$match' => ['status' => (int)0,
												   'selected_driver' =>(int) $driver_id,
												   'createdate' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]
												   ]],
									['$project' => ['trip_id' => '$trip_id',
														   'available_drivers' => '$available_drivers']],
								 ['$sort'=>['_id'=>-1]],
								 ['$limit' => 1]
							];
		$result = $this->mongo_db->aggregate(MDB_REQUEST_HISTORY,$arguments);
		$res = isset($result['result']) ? $result['result'] : [];
		//print_r($res);exit;
        if (count($res) > 0) {
			//$result =Commonfunction::change_key($result);
            $trip_id = $res[0]['trip_id'];
        } else {
            $trip_id = 0;
        }
        return $trip_id;
		}
    }
	
	public function check_new_request_multitrip2($driver_id, $company_all_currenttimestamp,$pickup_location,$drop_location,$second_job_taxi_id)
    {
		$current_distance =0;
	//	echo $second_job_taxi_id;exit;
     /* GET TAXI SPEED */
     $arguments = [
				/*array('$lookup' =>
					array(
						'from' => MDB_TAXI,
						'localField' => '_id',
						'foreignField' => 'taxi_model',
						'as' => 'taxi',
					)	
				),
				array('$unwind' => '$taxi'),*/
				['$match' => ['_id' => $second_job_taxi_id]],
				['$project' => ['taxi_speed' => '$taxi_speed']],
			];
			$speed_result = $this->mongo_db->aggregate(MDB_TAXI,$arguments);
			//echo '<pre>'; 
			//print_r($speed_result);exit;
			$speed = $speed_result['result'][0]['taxi_speed'];
     /* GET TAXI SPEED */
		
		$distance         = $this->Tripdistance_Haversine($pickup_location, $drop_location);
		if ($distance > 0) {
							if (UNIT_NAME != "KM") { //to get distance in miles
								$current_distance = round($distance, 4);
							} else { //to get distance in km
								$current_distance = round($distance * 1.609344, 4);
							}
		}
		//$estimated_time = $this->estimated_time($current_distance,$speed);
		
		$estimated_time = $current_distance / $speed; 
		//exit;// TIME IN SECONDS exit;
		
		if($estimated_time < 300 ){		// 900 sec  = 15 Mins				
		
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
		$arguments = [['$match' => ['status' => (int)0,
												   'selected_driver' => (int)$driver_id,
												   'createdate' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]
												   ]],
									['$project' => ['trip_id' => '$trip_id',
														   'available_drivers' => '$available_drivers']],
								 ['$sort'=>['_id'=>-1]],
								 ['$limit' => 1]
							];
		$result = $this->mongo_db->aggregate(MDB_REQUEST_HISTORY,$arguments);
		$res = isset($result['result']) ? $result['result'] : [];
		//print_r($res);exit;
        if (count($res) > 0) {
			//$result =Commonfunction::change_key($result);
            $trip_id = $res[0]['trip_id'];
        } else {
            $trip_id = 0;
        }
        return $trip_id;
		}
    }
    public function check_new_request_multitrip2_by2($driver_id, $company_all_currenttimestamp,$pickup_location,$drop_location,$second_job_taxi_id)
    {
	$current_distance = 0;
	  /* GET TAXI SPEED */
     $arguments = [
				/*array('$lookup' =>
					array(
						'from' => MDB_TAXI,
						'localField' => '_id',
						'foreignField' => 'taxi_model',
						'as' => 'taxi',
					)	
				),
				array('$unwind' => '$taxi'),*/
				['$match' => ['_id' => $second_job_taxi_id]],
				['$project' => ['taxi_speed' => '$taxi_speed']],
			];
			$speed_result = $this->mongo_db->aggregate(MDB_TAXI,$arguments);
			$speed = $speed_result['result'][0]['taxi_speed'];
     /* GET TAXI SPEED */
		
		$distance         = $this->Tripdistance_Haversine($pickup_location, $drop_location);
		if ($distance > 0) {
							if (UNIT_NAME != "KM") { //to get distance in miles
								$current_distance = round($distance, 4);
							} else { //to get distance in km
								$current_distance = round($distance * 1.609344, 4);
							}
		}
		//$estimated_time = $this->estimated_time($current_distance,$speed);
		
		$estimated_time = $current_distance / $speed; // TIME IN SECONDS
		
		if($estimated_time < 600 ){		// 1800 sec  = 30 Mins				
		
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
		$arguments = [['$match' => ['status' => (int)0,
												   'selected_driver' => (int)$driver_id,
												   'createdate' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]
												   ]],
									['$project' => ['trip_id' => '$trip_id',
														   'available_drivers' => '$available_drivers']],
								 ['$sort'=>['_id'=>-1]],
								 ['$limit' => 1]
							];
		$result = $this->mongo_db->aggregate(MDB_REQUEST_HISTORY,$arguments);
		$res = isset($result['result']) ? $result['result'] : [];
		//print_r($res);exit;
        if (count($res) > 0) {
			//$result =Commonfunction::change_key($result);
            $trip_id = $res[0]['trip_id'];
        } else {
            $trip_id = 0;
        }
        return $trip_id;
		}
		
	
	}
	public function get_otp($phone){
		
		 $result = $this->mongo_db->find_one(MDB_PASSENGERS,['phone'=>$phone],["otp"]);
        //print_r($result);exit;
        return (isset($result)? $result:[]);
	}
	public function setdrivercheck($array = ''){
		$this->mongo_db->Insert('driver_check', $array);		
	}
	/* MULTIPLE TRIP FLOW 1 */
	//Get the Recent places List
	public function get_recent_place_list($passenger_id,$fav_static_count,$place_type)
	{
        
            $lat = ($place_type == 0)?'pickup_latitude':'drop_latitude';
            $lng = ($place_type == 0)?'pickup_longitude':'drop_longitude';
            $loc = ($place_type == 0)?'current_location':'drop_location';
            
            /*$arguments = array( 
                array(
                    '$match' => array(
                    'passengers_id' => (int)$passenger_id,
                    'travel_status' => (int)1,
                    $lat => array('$ne' => 0),
                    $lng => array('$ne' => 0),
                    $loc => array('$ne' => ''),
                    )),
                array('$project' => array(
                    'passengers_log_id' => '$passengers_log_id',
                    //'location_count' => '$current_location',
                    'p_favourite_place' => '$'.$loc,
                    'p_fav_latitude' => '$'.$lat,
                    'p_fav_longtitute' => '$'.$lng,
                    'fav_loction_type' => '$'.$loc,
                    )),
                array('$group' => array(
                    '_id' => array('p_favourite_place'=>'$p_favourite_place'),
                    'lat' => array('$first' => '$p_fav_latitude'),
                    'lng' => array('$first' => '$p_fav_longtitute'),
                    'loc' => array('$first' => '$p_favourite_place')
                        )),
                array('$sort' => array('_id'=>-1)),
                array('$limit' => $fav_static_count));*/
		$arguments = [ 
		[
		'$match' => [
		'passengers_id' => (int)$passenger_id,
		'travel_status' => (int)1,
		$lat => ['$ne' => 0],
		$lng => ['$ne' => 0],
		$loc => ['$ne' => ''],
		]],
		['$project' => [
		'log_id' => '$_id',
		//'location_count' => '$current_location',
		'p_favourite_place' => '$'.$loc,
		'p_fav_latitude' => '$'.$lat,
		'p_fav_longtitute' => '$'.$lng,
		'fav_loction_type' => '$'.$loc,
		]],
		['$group' => [
		'_id' => ['p_favourite_place'=>'$p_favourite_place'],
		'log_id' => ['$first' => '$log_id'],
		'lat' => ['$first' => '$p_fav_latitude'],
		'lng' => ['$first' => '$p_fav_longtitute'],
		'loc' => ['$first' => '$p_favourite_place'],
		]],
		['$sort' => ['log_id'=>-1]],
		['$limit' => $fav_static_count]
		];
            
            $result = $this->mongo_db->aggregate(PASSENGERS_LOG,$arguments);
            return $result['result'];
	}
public function update_dropstatus_trippaydetails($id, $drop_latitude, $drop_longitude, $drop_location)
        {
		
            $set_query = [
                'drop_latitude' => $drop_latitude,
                'drop_longitude' => $drop_longitude,
                'drop_location' => $drop_location
            ];
            $result = $this->mongo_db->update('trip_pay_details',['trip_id' => (int)$id],[ '$set'=> $set_query ]);
         }

         public function get_ratings_info(){
        $match = ['status' => 'A'];
        $query_result = $this->mongo_db->find('ratings',$match,['ratings_no','ratings_title','ratings_title_ar','ratings_tags','ratings_tags_ar']);
        $iterator_result = iterator_to_array($query_result);
        $result = array_values($iterator_result);
        return $result;
    }

    public function check_passenger_in_book_now($passengerId)
    {
        $match = [ 'passengers_id' => (int)$passengerId,
                        'now_after' => (int)0,
                        'travel_status'=>['$in'=>[0]]   
                    ];
        
        $res = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match,['pickup_time','_id','confirm_flag'])->sort(['_id'=>-1])->limit(1);
         $result = iterator_to_array($res);
         $re = reset($result);

        return $re;
    } 
    
    public function get_trip_update_detail($passenger_id = "",$trip_id)
    {
		$match = [ 'passengers_id' => (int)$passenger_id,
                        '_id'=>(int)$trip_id   
                 ];
        
        $res = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match,['driver_reply','travel_status','notification_status'])->sort(['_id'=>-1])->limit(1);       
        $result = iterator_to_array($res);        
        $re = reset($result);
		return $re;
    }
    
    public function ifTaxiReachService($km) {
		$match = [ 'status' => 'A'];
		$condition =  ["status"=>"A", "km" => ['$lte'=>(int)$km]];						
		$res = $this->mongo_db->find(MDB_TAXI_SERVICE_RANGE,$condition,['km','label'])->sort(['_id'=>-1])->limit(1);
		$result = iterator_to_array($res);     
		$re = reset($result);
		return $re;
	}
	
	public function getTaxiKM($taxi_id) {
		$check_startkm = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$taxi_id],['starting_km']);
		return $check_startkm;
	}

    /** Update in passnger_log_complete table **/

    public function update_complete_trip_det($trip_id)
    {

        Log::instance()->add(Log::NOTICE, 'Run Completed');
        $complete_result = $this->mongo_db->find_one(MDB_PASSENGERSLOGS_COMPLETED,['_id' => (int)$trip_id],['_id']);
                
        if(!empty($complete_result)){
            Log::instance()->add(Log::NOTICE, 'If Completed');
            return;
        } 
        else {
                Log::instance()->add(Log::NOTICE, 'Else Completed');
                //Move the data to Completed table
                $match = ['_id' => (int)$trip_id,'travel_status' => 1, 'moved' => ['$ne' => 1]];
                $fetch_result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,[]);
                    Log::instance()->add(Log::NOTICE, 'Match'.json_encode($match));
                if(!empty($fetch_result))
                {
                    Log::instance()->add(Log::NOTICE, 'Fetch'.json_encode($fetch_result));
                    $insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_COMPLETED,$fetch_result);

                    $set_query = [
                    'moved' => 1,
                    ];
                    $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$trip_id],[ '$set'=> $set_query ]);

                }

                return;
        }
        
        
    }

    public function update_reject_trip_det($trip_id)
    {

        $complete_result = $this->mongo_db->find_one(MDB_PASSENGERSLOGS_REJECTED,['_id' => (int)$trip_id],['_id']);

        if(!empty($complete_result)){
            return;
        } 
        else {

                //Move the data to Completed table
                $match = ['_id' => (int)$trip_id, 'moved' => 0];
                $fetch_result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,[]);

                if(!empty($fetch_result))
                {

                    $insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_REJECTED,$fetch_result);

                    $set_query = [
                    'moved' => 2,
                    ];
                    $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$trip_id],[ '$set'=> $set_query ]);

                }

                return;
        }
        
        
    }

    public function update_cancel_trip_det($trip_id)
    {

        $complete_result = $this->mongo_db->find_one(MDB_PASSENGERSLOGS_CANCELLED,['_id' => (int)$trip_id],['_id']);

        if(!empty($complete_result)){
            return;
        } 
        else {

                //Move the data to Completed table
                $match = ['_id' => (int)$trip_id];
                $fetch_result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,[]);

                if(!empty($fetch_result))
                {

                    $insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_CANCELLED,$fetch_result);

                    $set_query = [
                    'moved' => 1,
                    ];
                    $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$trip_id],[ '$set'=> $set_query ]);

                }

                return;
        }
        
        
    }

    public function update_wallet_amount($id,$add_amt,$negative,$paymentid)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id' => (int)$id],['wallet_amount']);
        
        if(count($result) > 0)
        {
            $current_wallet_amt =  isset($result['wallet_amount'])?$result['wallet_amount']:0;

            //negative decides addition or subtraction of amount
            if($negative == 1)
            {
                $update_wallet_amt = $current_wallet_amt - $add_amt;
                $additional_amt = -$add_amt;
            }
            else
            {
                $update_wallet_amt = $current_wallet_amt + $add_amt;
                $additional_amt = $add_amt;
            }

            $update_data      = [
            "wallet_amount"=>(double)$update_wallet_amt,
            "last_wallet_update"=>new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
            ];
            $people_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$id],['$set'=>$update_data],['upsert'=>false]);

            $data = [
                'passenger_id'=>$id,
                'add_amt'=>$additional_amt,
                'current_wallet_amt'=>$update_wallet_amt,
                'recharge_type'=>(int)2,
                'transaction_id'=>$paymentid
            ];
            $this->insert_wallet_log($data);
            return true;
        }   
        else
        {
            return false;
        }
    }

    public function update_wallet_without_log($id,$add_amt,$negative,$trip_id,$recharge_type='')
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id' => (int)$id],['wallet_amount']);
        
        if(count($result) > 0)
        {
            $current_wallet_amt =  isset($result['wallet_amount'])?$result['wallet_amount']:0;

            //negative decides addition or subtraction of amount
            if($negative == 1)
            {
                $update_wallet_amt = $current_wallet_amt - $add_amt;
                $additional_amt = -$add_amt;
            }
            else
            {
                $update_wallet_amt = $current_wallet_amt + $add_amt;
                $additional_amt = $add_amt;
            }

            $update_data      = [
            "wallet_amount"=>(double)$update_wallet_amt,
            "last_wallet_update"=>new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
            ];
            $people_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$id],['$set'=>$update_data],['upsert'=>false]);

            if($recharge_type == '')
            {
                $recharge_type = 4 ;
            }
            $data = [
                'passenger_id'=>$id,
                'add_amt'=>$additional_amt,
                'current_wallet_amt'=>$update_wallet_amt,
                'recharge_type'=>(int)$recharge_type,
                'trip_id'=>$trip_id
            ];
            $this->insert_wallet_log($data);

            return true;
        }   
        else
        {
            return false;
        }
    }

    public function insert_wallet_log($data)
    {
        $insert_array      = [
            "passenger_id"=>(int)$data['passenger_id'],
            "change_amount"=>(double)$data['add_amt'],
            "wallet_amount"=>(double)$data['current_wallet_amt'],
            "created_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
            "created_by" => (int)$data['passenger_id'],
            "recharge_type" =>(int)$data['recharge_type'],
            "trip_id" =>(int)$data['trip_id'],
            "paid_status" =>(int)1,
            ];
        $result= $this->mongo_db->Insert(PASSENGER_WALLET_LOG,$insert_array);
        return true;
    }

    public function insert_wallet_fail_log($data)
    {
        $insert_array      = [
            "passenger_id"=>(int)$data['passenger_id'],
            "change_amount"=>(double)$data['add_amt'],
            "wallet_amount"=>(double)$data['current_wallet_amt'],
            "created_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
            "created_by" => (int)$data['passenger_id'],
            "recharge_type" =>(int)$data['recharge_type'],
            "trip_id" =>(int)$data['trip_id'],
            "paid_status" =>(int)0,
            ];
        $result= $this->mongo_db->Insert(PASSENGER_WALLET_LOG,$insert_array);
        return true;
    }

    public function validate_passenger($id) {
        $pass_rs = $this->mongo_db->count(MDB_PASSENGERS,['_id'=>(int)$id],['_id']);
        return $pass_rs;      
    }

    public function update_wallet_amt_in_log($id,$set_query)
    {;
        $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$id],[ '$set'=> $set_query ]);
    }

    public function passenger_trip_list($ids = "", $status = "", $driver_reply = "", $createdate = "", $start = null, $limit = null, $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time  = $get_company_time_details['start_time']; //Start time
        $match_query = [];
        
       // $match_query['driver_reply'] = $driver_reply;
       // $match_query['travel_status'] = (int)$status;
       // $match_query['passengers_id'] = array('$in' =>$ids);
        $match_query['passengers_id'] = (int)$ids;
        
        
        /*if ($createdate == 0) {
            $match_query['pickup_time'] = array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000));
        }*/

         if ($company_id != "" && $company_id != 0 ) {
            $match_query['company_id'] = (int)$company_id;
        }
        
        $arguments = [
            ['$match' => $match_query],
            ['$lookup'         => [
                    'from'          =>  MDB_TRANSACTION,
                    'localField'    => '_id',
                    'foreignField'  => "passengers_log_id",
                    'as'            => "trans"
                ]
            ],
            [
                '$unwind' => ['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            ['$lookup' =>
                [
                    'from'=>MDB_PASSENGERS,
                    'localField'=> "passengers_id",
                    'foreignField' => "_id",
                    'as'=> "passenger"
                ]
            ],
            ['$unwind' => '$passenger'],
            [
                '$lookup' => [
                    'from' => MDB_CHILD_ACCOUNT_TYPE,
                    'localField' => "passenger.account_type",
                    'foreignField' => "_id",
                    'as' => "account"
                ]
            ],
            // //array('$unwind' => '$account'),
            ['$lookup'         => [
                    'from'          =>  MDB_TAXI,
                    'localField'    => "taxi_id",
                    'foreignField'  => "_id",
                    'as'            => "taxi"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$taxi','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$people','preserveNullAndEmptyArrays'=>true]
            ],              
            ['$lookup'      => [
                    'from'          =>  MDB_MOTOR_MODEL,
                    'localField'    => "taxi_modelid",
                    'foreignField'  => "_id",
                    'as'            => "model"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$model','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$project' =>
                ['_id' => 0,
                    'passengers_log_id'=>'$_id',
                    'passengers_id' => '$passengers_id',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'pickup_longitude'=>'$pickup_longitude',
                    'pickup_latitude'=>'$pickup_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'pickup_time' => '$pickup_time',
                    'travel_status'=>'$travel_status',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'passenger_name'=>'$passenger.name',//newely added for child
                    'passenger_image'=>'$passenger.profile_image', //newely added for child
                    'passenger_id'=>'$passenger._id',//newely added for child
                    'passengers_log_id'=>'$_id',
                    'driver_id'=>['$ifNull'=>['$people._id','0']],
                    'notes_driver'=>'$passenger.notes_driver',
                    'name'=>['$ifNull'=>['$people.name','']],
                    'lastname'=>['$ifNull'=>['$people.lastname','']],
                    'drop_time'=>['$ifNull'=>['$drop_time','']],
                    'driver_reply'=>['$ifNull'=>['$driver_reply','']],
                    'actual_pickup_time' => '$actual_pickup_time',
                    'driver_image'=>['$ifNull'=>['$people.profile_picture','']],
                    'model_name' => ['$ifNull'=>['$model.model_name','-']],
                    'taxi_no' => ['$ifNull'=>['$taxi.taxi_no','-']],
                    'taxi_manufacturer' => ['$ifNull'=>['$taxi.taxi_manufacturer','-']],
                    'distance'=>'$distance',
                    'account_type' => '$passenger.account_type',
                    'account_type_name' => '$account.account_type',
                    'metric'=>'$trans.distance_unit',
                    'waitingtime' => ['$ifNull'=>['$trans.waitingtime',0]],
                    'payment_type' => ['$ifNull'=>['$trans.payment_type',0]],
                    'fare' => ['$ifNull'=>['$trans.fare',0]],
                    'wallet_amount_used' => ['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'add_amt' => ['$ifNull'=>['$trans.add_amt',0]],
                    'driver_edit_status' => ['$ifNull'=>['$trans.driver_edit_status',0]],
                    'actual_paid_amt' => ['$ifNull'=>['$trans.actual_paid_amt',0]],
                    'pending_amt' => ['$ifNull'=>['$trans.pending_amt',0]],
                    'drivername' => ['$ifNull'=>['$people.name','']],
                    'driverlastname' => ['$ifNull'=>['$people.lastname','']],
                    'additional_fare' =>['$arrayElemAt'=> ['$fare_detail', 3 ] ],

                    //'trip_duration' => array('$subtract' => array('$drop_time','$actual_pickup_time')),
                ]
            ],
            ['$sort' => ['_id' => -1]],
           // array('$skip' => (int)$start),
           // array('$limit' => (int)$limit)
        ];
        //print "<pre>";
        $travel_status = $status;

        $table=MDB_PASSENGERSLOGS_COMPLETED;
        $completed_result = $this->mongo_db->aggregate($table,$arguments); 

        $table=MDB_PASSENGERSLOGS_CANCELLED;
        $cancelled_result = $this->mongo_db->aggregate($table,$arguments);

        $table=MDB_PASSENGERSLOGS_MISSED;
        $missed_result = $this->mongo_db->aggregate($table,$arguments);

        $result =[];

        // $table=MDB_PASSENGERSLOGS_REJECTED;
        // $rejected_result = $this->mongo_db->aggregate($table,$arguments);

        $trip_array=$missed_array=$cancelled_array=$completed_array=[];


        if(!empty($missed_result['result']))
        $missed_array = $missed_result['result'];

        if(!empty($cancelled_result['result']))
        $cancelled_array = $cancelled_result['result'];

        if(!empty($completed_result['result']))
        $completed_array = $completed_result['result'];

        // echo count($trip_result['result']);echo "<br/>";
        // echo count($missed_result['result']);echo "<br/>";
        // echo count($cancelled_result['result']);echo "<br/>";
        // echo count($completed_result['result']);echo "<br/>";exit;

        $table=MDB_PASSENGERS_LOGS;
        $match_query['travel_status'] = ['$in'=>[(int)9,(int)3,(int)2,(int)7,(int)0]];
        $arguments = [
            ['$match' => $match_query],
            ['$lookup'         => [
                    'from'          =>  MDB_TRANSACTION,
                    'localField'    => '_id',
                    'foreignField'  => "passengers_log_id",
                    'as'            => "trans"
                ]
            ],
            [
                '$unwind' => ['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            ['$lookup' =>
                [
                    'from'=>MDB_PASSENGERS,
                    'localField'=> "passengers_id",
                    'foreignField' => "_id",
                    'as'=> "passenger"
                ]
            ],
            ['$unwind' => '$passenger'],
            [
                '$lookup' => [
                    'from' => MDB_CHILD_ACCOUNT_TYPE,
                    'localField' => "passenger.account_type",
                    'foreignField' => "_id",
                    'as' => "account"
                ]
            ],
            // //array('$unwind' => '$account'),
            ['$lookup'         => [
                    'from'          =>  MDB_TAXI,
                    'localField'    => "taxi_id",
                    'foreignField'  => "_id",
                    'as'            => "taxi"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$taxi','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$people','preserveNullAndEmptyArrays'=>true]
            ],              
            ['$lookup'      => [
                    'from'          =>  MDB_MOTOR_MODEL,
                    'localField'    => "taxi_modelid",
                    'foreignField'  => "_id",
                    'as'            => "model"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$model','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$project' =>
                ['_id' => 0,
                    'passengers_log_id'=>'$_id',
                    'passengers_id' => '$passengers_id',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'pickup_longitude'=>'$pickup_longitude',
                    'pickup_latitude'=>'$pickup_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'pickup_time' => '$pickup_time',
                    'travel_status'=>'$travel_status',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'passenger_name'=>'$passenger.name',//newely added for child
                    'passenger_image'=>'$passenger.profile_image', //newely added for child
                    'passenger_id'=>'$passenger._id',//newely added for child
                    'passengers_log_id'=>'$_id',
                    'driver_id'=>['$ifNull'=>['$people._id','0']],
                    'notes_driver'=>'$passenger.notes_driver',
                    'name'=>['$ifNull'=>['$people.name','']],
                    'lastname'=>['$ifNull'=>['$people.lastname','']],
                    'drop_time'=>['$ifNull'=>['$drop_time','']],
                    'driver_reply'=>['$ifNull'=>['$driver_reply','']],
                    'actual_pickup_time' => '$actual_pickup_time',
                    'driver_image'=>['$ifNull'=>['$people.profile_picture','']],
                    'model_name' => ['$ifNull'=>['$model.model_name','-']],
                    'taxi_no' => ['$ifNull'=>['$taxi.taxi_no','-']],
                    'taxi_manufacturer' => ['$ifNull'=>['$taxi.taxi_manufacturer','-']],
                    'distance'=>'$distance',
                    'account_type' => '$passenger.account_type',
                    'account_type_name' => '$account.account_type',
                    'metric'=>'$trans.distance_unit',
                    'waitingtime' => ['$ifNull'=>['$trans.waitingtime',0]],
                    'payment_type' => ['$ifNull'=>['$trans.payment_type',0]],
                    'fare' => ['$ifNull'=>['$trans.fare',0]],
                    'wallet_amount_used' => ['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'add_amt' => ['$ifNull'=>['$trans.add_amt',0]],
                    'drivername' => ['$ifNull'=>['$people.name','']],
                    'driverlastname' => ['$ifNull'=>['$people.lastname','']],
                    'additional_fare' =>['$arrayElemAt'=> ['$fare_detail', 3 ] ],
                    'driver_edit_status' => ['$ifNull'=>['$trans.driver_edit_status',0]],
                    'pending_amt' => ['$ifNull'=>['$trans.pending_amt',0]],
                    'actual_paid_amt' => ['$ifNull'=>['$trans.actual_paid_amt',0]]
                    //'trip_duration' => array('$subtract' => array('$drop_time','$actual_pickup_time')),
                ]
            ],
            ['$sort' => ['travel_status' => -1]],
           // array('$skip' => (int)$start),
           // array('$limit' => (int)$limit)
        ];

        $trip_result = $this->mongo_db->aggregate($table,$arguments);

        $trip_array=[];
        if(!empty($trip_result['result']))
        $trip_array = $trip_result['result'];

        $result = array_merge($missed_array,$cancelled_array,$completed_array);

        $trip_id = [];
        $travel_status = [];
        foreach($result as $key=>$val)
        {
            $trip_id[] = $val['passengers_log_id'];
            $travel_status[] = $val['passengers_log_id'];
        }

        array_multisort($trip_id, SORT_DESC, $result);

        $result=array_merge($trip_array,$result);

       $start = $start-1;
       $result_array =  array_slice($result, $start*$limit, $limit);

       if(count($result) > 0)
        return $result_array;
        else
        return [];

    }


    public function get_passenger_notes($passenger_id) 
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['notes']);
        return isset($result['notes'])?$result['notes']:'';
    }

    public function payentry($id,$post)
    {
    $update_array = ["fare_detail" => [ ["key"=>"1","value" => (double)$post["cash_pay"]], ["key"=>"6","value" => (double)$post["card_pay"]], ["key"=>"3","value" => (double)$post["knet_pay"]], ["key"=>"additional amount","value" => (double)$post["add_amt"]],["key"=>"wallet","value"=>$post["wallet_pay"]],["key"=>"pending","value"=>$post["pending_pay"]],["key"=>"fare_note","value"=>$post["fare_note"]]]];
    $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS, ['_id'=>(int)$id],['$set'=>$update_array],[ 'upsert' => true]);
    return $updateresult;
    }


    public function get_total_sum($operator_id)
    {
        $match_array = [
                    'pickup_time' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)],
                            'travel_status'=>(int)1
                        ];
        if($operator_id != '')
        {
            $match_array['operator_id']=(int)$operator_id;
        }

        $currentdate = date('Y-m-01 h:i:s',strtotime(Commonfunction::getCurrentTimeStamp()));
                $arguments = [['$match'=>$match_array],['$lookup'=>[
                            'from'=>MDB_TRANSACTION,
                            'localField'=>"_id",
                            'foreignField'=>"passengers_log_id",
                             'as'=>"trans"        
                        ]],
                        ['$unwind'=>'$trans'],
                        ['$project' => [
                        
                            '_id' => '$_id',
                            'operator_id' => '$operator_id',
                            'fare' => '$trans.fare',
                            'wallet_amount_used' => '$trans.wallet_amount_used',
                            'pending_amt' => '$trans.pending_amt',
                            'actual_paid_amt' => '$trans.actual_paid_amt',
                            'tripfare'=>['$sum'=>['$trans.fare','$trans.wallet_amount_used']]
                        ]],
                        ['$group' => [
                        '_id'=>'',
                        'total_sum'=>['$sum'=>'$tripfare'],
                        'total_pending'=>['$sum'=>'$pending_amt']
                        ]
                        ]                    
                    ];
                    
        //$result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
        return (!empty($result['result'])?$result['result']:[]);
    }


    public function passenger_pending_list($ids = "", $status = "", $driver_reply = "", $createdate = "", $company_id)
    {
        $get_company_time_details = $this->get_company_time_details($company_id);
        $start_time  = $get_company_time_details['start_time']; //Start time
        $match_query = [];
        
        $match_query['travel_status'] = ['$in'=>[(int)0,(int)7]];
        $match_query['passengers_id'] = (int)$ids;
        //$match_query['bookby'] = (int)2;
        
        
        $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];

        //  if ($company_id != "" && $company_id != 0 ) {
        //     $match_query['company_id'] = (int)$company_id;
        // }
        
        $arguments = [
            ['$match' => $match_query],
            ['$lookup' =>
                [
                    'from'=>MDB_PASSENGERS,
                    'localField'=> "passengers_id",
                    'foreignField' => "_id",
                    'as'=> "passenger"
                ]
            ],
            ['$unwind' => '$passenger'],
            [
                '$lookup' => [
                    'from' => MDB_CHILD_ACCOUNT_TYPE,
                    'localField' => "passenger.account_type",
                    'foreignField' => "_id",
                    'as' => "account"
                ]
            ],
            // //array('$unwind' => '$account'),
            ['$lookup'         => [
                    'from'          =>  MDB_TAXI,
                    'localField'    => "taxi_id",
                    'foreignField'  => "_id",
                    'as'            => "taxi"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$taxi','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$people','preserveNullAndEmptyArrays'=>true]
            ],              
            ['$lookup'      => [
                    'from'          =>  MDB_MOTOR_MODEL,
                    'localField'    => "taxi_modelid",
                    'foreignField'  => "_id",
                    'as'            => "model"
                ]
            ],
            [
                  '$unwind' => ['path'=>'$model','preserveNullAndEmptyArrays'=>true]
            ], 
            ['$project' =>
                ['_id' => 0,
                    'passengers_log_id'=>'$_id',
                    'passengers_id' => '$passengers_id',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'pickup_longitude'=>'$pickup_longitude',
                    'pickup_latitude'=>'$pickup_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'pickup_time' => '$pickup_time',
                    'travel_status'=>'$travel_status',
                    'pickup_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'trip_notes'=>'$notes_driver',
                    'passenger_name'=>'$passenger.name',//newely added for child
                    'passenger_image'=>'$passenger.profile_image', //newely added for child
                    'passenger_id'=>'$passenger._id',//newely added for child
                    'passengers_log_id'=>'$_id',
                    'driver_id'=>['$ifNull'=>['$people._id','0']],
                    'notes_driver'=>'$passenger.notes_driver',
                    'name'=>['$ifNull'=>['$people.name','']],
                    'lastname'=>['$ifNull'=>['$people.lastname','']],
                    'drop_time'=>['$ifNull'=>['$drop_time','']],
                    'driver_reply'=>['$ifNull'=>['$driver_reply','']],
                    'actual_pickup_time' => '$actual_pickup_time',
                    'driver_image'=>['$ifNull'=>['$people.profile_picture','']],
                    'model_id' => ['$ifNull'=>['$model._id',0]],
                    'model_name' => ['$ifNull'=>['$model.model_name','-']],
                    'taxi_no' => ['$ifNull'=>['$taxi.taxi_no','-']],
                    'taxi_manufacturer' => ['$ifNull'=>['$taxi.taxi_manufacturer','-']],
                    'distance'=>'$distance',
                    'account_type' => '$passenger.account_type',
                    'account_type_name' => '$account.account_type',
                    'metric'=>'$trans.distance_unit',
                    'drivername' => ['$ifNull'=>['$people.name','']],
                    'driverlastname' => ['$ifNull'=>['$people.lastname','']],
                ]
            ],
            ['$sort' => ['_id' => -1]],
        ];

        $table=MDB_PASSENGERS_LOGS;
        $result = $this->mongo_db->aggregate($table,$arguments); 
        return (!empty($result['result'])?$result['result']:[]);

    }


    public function passenger_current_trip($id)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['passengers_id'=> (int)$id,'travel_status'=>['$in'=>[(int)5,(int)9,(int)3,(int)2]],'driver_reply'=>'A'],['_id']);  
         return (!empty($result)) ? $result: [];
    }

    public function get_pending_amt($id)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=> (int)$id],['wallet_amount']);  
         if (!empty($result)) 
        {
           $wallet_amount = isset($result['wallet_amount'])?$result['wallet_amount']:0;
           if($wallet_amount < 0)
           {
            return abs($wallet_amount);
           }
           else
           {
            return 0;
           }
        }
        else{
            return 0;
        }
    }

    public function get_passenger_data($id,$field)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=> (int)$id],[$field]);  
         if (!empty($result)) 
        {
           return $wallet_amount = isset($result[$field])?$result[$field]:0;
        }
        else{
            return 0;
        }
    }

    public function passenger_wallet_logs($userid,$offset,$limit)
    {
        $match_query = ['pass._id'=>(int)$userid];
    
        $srch_query = $match_query;
        $common_arguments = [
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passenger_id',
                    'foreignField' => '_id',
                    'as' => 'pass'
                ]
            ],
            [
                '$unwind' => '$pass'
            ],
            [
                '$match' => $srch_query
            ],
        ];
            $field_arguments = [
                [
                    '$sort' => [ 
                        'created_date' => -1
                    ],
                ],
                [
                    '$project' => [
                        'id' => '$pass._id',
                        'passenger_email' => '$pass.email',
                        'passenger_id' => '$pass._id',
                        //'passenger_name' => '$pass.name',
                        //'passenger_phone' => '$pass.phone',
                        //'passenger_country_code' => '$pass.country_code',
                        'change_amount' => '$change_amount',
                        'current_wallet_amount' => '$wallet_amount',
                        'created_date' => '$created_date',
                        'created_by' => '$created_by',
                        'recharge_type' => '$recharge_type',
                        'transaction_id' => '$transaction_id',
                        'trip_id' => '$trip_id',
                    ]
                ],
                ['$skip'   => (int)$offset ],
                ['$limit'  => (int)$limit ]
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);
            $result    = $this->mongo_db->aggregate(PASSENGER_WALLET_LOG, $merge_arguments);
            //echo "<pre>";print_r($result['result']); exit;
            return (!empty($result['result'])) ? $result['result'] : [];
    }

    public function get_fare_trip_data($driver_id)
    {
        // $result = $this->mongo_db->find_one(MDB_PASSENGERSLOGS_COMPLETED,array('driver_id'=> (int)$driver_id,'travel_status'=>(int)1,'fare_update_status'=>(int)0),array('fare_update_status','_id')); 

        $match_array=[];
        $match_array['driver_id'] = (int)$driver_id;
        $match_array['travel_status'] = (int)1;
        $match_array['fare_update_status'] =(int)0;

                $arguments = [
                    ['$match'=>$match_array],
                        ['$project' => [
                        
                            '_id' => '$_id',
                            'fare_update_status' => '$fare_update_status'
                        ]],                  
                    ];
                    
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);

         if (!empty($result['result'])) 
        {
            $results = $result['result'];
            $fare_update_status = isset($results[0]['fare_update_status'])?$results[0]['fare_update_status']:0;
            $trip_id = isset($results[0]['_id'])?$results[0]['_id']:0;

            if($fare_update_status == 0)
            {
                if($trip_id != 0)
                {
                     $updateresult = $this->mongo_db->update(MDB_PASSENGERSLOGS_COMPLETED, ['_id'=>(int)$trip_id],['$set'=>['fare_update_status'=>(int)1]],[ 'upsert' => true]);
                    return 1;
                }
                else
                {
                    return 0;
                }
            }
            else
            {
                return 0;
            }
        }
        else{
            return 0;
        }
    }


    public function check_confirmed_status($passengerlog_id = "")
    {
        $match = ['_id'=>(int)$passengerlog_id];
        $project = ['travel_status','confirm_flag','book_type','driver_reply'];
        $result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,$project);
        return (!empty($result)) ? $result :[];
    }

    public function get_recent_trip_places($passenger_id,$current_lat,$current_lng){

        //echo $passenger_id.'--id--'.$current_lat.'-lat lng-'.$current_lng;exit;
        $match_query = ['passengers_id'=>(int)$passenger_id];
    
        $srch_query = $match_query;
        $common_arguments = [            
            [
                '$match' => $srch_query
            ],
        ];
            $field_arguments = [
                [
                    '$sort' => [ 
                        'pickup_time' => -1
                    ],
                ],
                [
                    '$project' => [
                        'passengers_id' => '$passengers_id',
                        'current_location' => '$current_location',
                        'drop_location'=>'$drop_location',
                        'pickup_latitude'=>'$pickup_latitude',
                        'pickup_longitude'=>'$pickup_longitude',
                        'drop_latitude'=>'$drop_latitude',
                        'drop_longitude'=>'$drop_longitude',
                    ]
                ],
                ['$skip'   => (int)0 ],
                ['$limit'  => (int)15 ],
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
            //echo "<pre>";print_r($result['result']); exit;
            $res = (!empty($result['result'])) ? $result['result'] : [];

            $total_places = $total_place_lat_long = [];
            if(count($res)){

                foreach($res as $k=>$val){

                    $pickup_lat = $val['pickup_latitude'];
                    $pickup_lng = $val['pickup_longitude'];
                    $pickup_place = $val['current_location'];

                    $drop_lat = $val['drop_latitude'];
                    $drop_lng = $val['drop_longitude'];
                    $drop_place = $val['drop_location'];

                    $pickup_distance = $this->calculate_distance($current_lat,$current_lng,$pickup_lat,$pickup_lng,'K');
                    //echo $pickup_distance.' distance--->'.$pickup_place.'<br>';//exit;

                    if($pickup_distance>1 && !in_array($pickup_place,$total_places) ){

                        $total_places[] = $pickup_place;
                        $total_place_lat_long[] = ['place'=>$pickup_place,'latitude'=>$pickup_lat,'longitude'=>$pickup_lng];
                    }

                    if(count($total_places)>2){
                        return $total_place_lat_long;
                    }

                    $pickup_distance = $this->calculate_distance($current_lat,$current_lng,$drop_lat,$drop_lng,'K');

                    if($pickup_distance>1 && !in_array($drop_place,$total_places) ){

                        $total_places[] = $drop_place;
                        $total_place_lat_long[] = ['place'=>$drop_place,'latitude'=>$drop_lat,'longitude'=>$drop_lng];
                    }

                    if(count($total_places)>2){
                        return $total_place_lat_long;
                    }

                    //$total_places = array_unique($total_places);
                }
            }
            //echo 555;exit;

            return $total_place_lat_long;

    }


    public function calculate_distance($lat1, $lon1, $lat2, $lon2, $unit) {

        //echo $lat1.'--'.$lon1.'--'.$lat2.'--'.$lon2.'--'. $unit.'<br>';
        //$lat1, $lon1, $lat2, $lon2, $unit
        //$lat1 ='11.0317';$lon1='77.0187';$lat2='11.0319612';$lon2='77.018474';$unit = 'K';
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);

          if ($unit == "K") {
            return ($miles * 1.609344);
          } else if ($unit == "N") {
              return ($miles * 0.8684);
            } else {
                return $miles;
              }
    }


    public function get_promo_codes(){

        $current_time = convert_timezone('now', TIMEZONE);
         $match_arg = ['start_date'=>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)],'expire_date'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)]];

          $arguments = [ ['$lookup'=>[
                            'from'=>MDB_COUPON_PACKAGE,
                            'localField'=>"package",
                            'foreignField'=>"_id",
                             'as'=>"coupon"        
                        ]],
                        ['$unwind'=>'$coupon'],                        
                        ['$match'=>$match_arg],
                        ['$project' => [                        
                            'promocode' => '$promocode',
                            'passenger_commission' => '$coupon.passenger_commission',
                            'expiry_date'=> '$expire_date',                     
                        ]],
                        ];

          //'start_date'=>array('$dateToString' => array('format'=> "%d/%m/%Y", 'date'=> '$start_date')),
         //'expiry_date'=>array('$dateToString' => array('format'=> "%d/%m/%Y %H:%M:%S", 'date'=> '$expire_date')),

         //$arguments = array('$match'=>$match_arg);
         //echo json_encode($arguments);exit;
         $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
         //print_r($result);exit;
         return (!empty($result['result'])?$result['result']:[]);
    }

    public function check_already_promocode_added($id=''){

        //echo $id;exit;

        //$match = array('passenger_id'=>(int)$id);

        $current_time = convert_timezone('now', TIMEZONE);
         $match_arg = ['passenger_id'=>(int)$id,'promo.start_date'=>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)],'promo.expire_date'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)]];

         //,'promo.promo_limit'=>array('$gt'=>'$promo.total_used')
        $arguments = [ ['$lookup'=>[
                            'from'=>MDB_PASSENGERS_PROMO,
                            'localField'=>"promocode_id",
                            'foreignField'=>"_id",
                             'as'=>"promo"        
                        ]],
                        ['$unwind'=>'$promo'],                        
                        ['$match'=>$match_arg],
                        ['$project' => [                        
                            'promocode' => '$promocode',
                            'passenger_commission' => '$coupon.passenger_commission',
                            'expiry_date'=> '$promo.expire_date',
                            'total_used' => '$promo.total_used',
                            'total_applied'=> '$promo.total_applied', 
                            'promo_limit' => '$promo.promo_limit',                   
                        ]],
                        ];

        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_ADDED_PROMO,$arguments);
//print_r($result['result']);exit;
        if(count($result['result'])){

            foreach($result['result'] as $promo_fetch){

                $promo_limit    = (isset($promo_fetch['promo_limit'])?$promo_fetch['promo_limit']:'');                
                $total_used     = (isset($promo_fetch['total_used'])?$promo_fetch['total_used']:'');
                $total_applied  = (isset($promo_fetch['total_applied'])?$promo_fetch['total_applied']:'');

                //echo $total_used.''.$promo_limit;exit;
                if($total_applied < $promo_limit)
                {                   
                    return 2;
                } 
            }
        }

        return 1;

        //print_r($result);exit;
    }

    public function add_passenger_promo($promo_code,$passenger_id){

        //echo $passenger_id.''.$promo_code;exit;

        $promo_detail = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,['promocode'=>$promo_code],['_id'=>1]);

        if(count($promo_detail)){

            $promo_id = $promo_detail['_id'];
            $rs = $this->mongo_db->find(MDB_PASSENGERS_ADDED_PROMO,[],['_id'])->sort(['_id'=>-1])->limit(1);
            $res = iterator_to_array($rs);
            reset($res);
            $first_key = key($res);
            $_id = $first_key+1;

            $insert_data = ['_id'=>$_id,'passenger_id'=>(int)$passenger_id,'promocode_id'=>(int)$promo_id,'promo_code'=>$promo_code,'created_date'=>new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)];

            $result = $this->mongo_db->Insert(MDB_PASSENGERS_ADDED_PROMO,$insert_data);

            return 1;

        }else{

            return 0;
        }

        //print_r($promo_detail);exit;       

    }

    public function check_promocode_added($promo_code,$passenger_id){

        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['promo_code'=>$promo_code,'passenger_id'=>(int)$passenger_id],[]);

        print_r($result);exit;
    }

    public function get_added_promocodes($id){

        $current_time = convert_timezone('now', TIMEZONE);
         $match_arg = ['passenger_id'=>(int)$id];

         //,'promo.promo_limit'=>array('$gt'=>'$promo.total_used')
        $arguments = [ ['$lookup'=>[
                            'from'=>MDB_PASSENGERS_PROMO,
                            'localField'=>"promocode_id",
                            'foreignField'=>"_id",
                             'as'=>"promo"        
                        ]],
                        ['$unwind'=>'$promo'],
                        ['$lookup'=>[
                            'from'=>MDB_COUPON_PACKAGE,
                            'localField'=>"promo.package",
                            'foreignField'=>"_id",
                             'as'=>"coupon"        
                        ]],
                        ['$unwind'=>'$coupon'],                        
                        ['$match'=>$match_arg],
                        ['$project' => [                        
                            'promo_code' => '$promo_code',
                            'passenger_commission' => '$coupon.passenger_commission',
                            'expiry_date'=> '$promo.expire_date',
                            'total_used' => '$promo.total_used',
                            'total_applied'=> '$promo.total_applied', 
                            'promo_limit' => '$promo.promo_limit',                   
                        ]],
                        ['$sort'=>['_id' => -1]],
                        ];

        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_ADDED_PROMO,$arguments);
//print_r($result['result']);exit;
        $get_promo_list = $result['result'];
        if(count($get_promo_list)){

            $current_time = strtotime($this->currentdate);

            foreach($result['result'] as $k=>$val){

                 $expiry_date      = commonfunction::convertphpdate('d-M-Y h:i:s A',$val['expiry_date']);
                 $get_promo_list[$k]['expiry_date'] = $expiry_date;

                $promo_limit    = (isset($val['promo_limit'])?$val['promo_limit']:'');
                $total_applied     = (isset($val['total_applied'])?$val['total_applied']:'');

                 $expiry_time = strtotime($expiry_date);

                 if($current_time>$expiry_time || $promo_limit <= $total_applied){
                    $expiry_status = 1;
                 }else{
                    $expiry_status = 0;
                 }

                 $get_promo_list[$k]['expiry_status'] = $expiry_status;
            }
        }

        return $get_promo_list;
    }


    public function get_passenger_added_promocode($id=''){
        

        $current_time = convert_timezone('now', TIMEZONE);
         $match_arg = ['passenger_id'=>(int)$id,'promo.start_date'=>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)],'promo.expire_date'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)]];

         //,'promo.promo_limit'=>array('$gt'=>'$promo.total_used')
        $arguments = [ ['$lookup'=>[
                            'from'=>MDB_PASSENGERS_PROMO,
                            'localField'=>"promocode_id",
                            'foreignField'=>"_id",
                             'as'=>"promo"        
                        ]],
                        ['$unwind'=>'$promo'],                        
                        ['$match'=>$match_arg],
                        ['$project' => [                        
                            'promo_code' => '$promo_code',
                            'passenger_commission' => '$coupon.passenger_commission',
                            'expiry_date'=> '$promo.expire_date',
                            'total_used' => '$promo.total_used',
                            'total_applied'=> '$promo.total_applied',
                            'promo_limit' => '$promo.promo_limit',                   
                        ]],
                        ];

        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_ADDED_PROMO,$arguments);

        if(count($result['result'])){

            foreach($result['result'] as $promo_fetch){

                $promo_limit    = (isset($promo_fetch['promo_limit'])?$promo_fetch['promo_limit']:'');                
                $total_used     = (isset($promo_fetch['total_used'])?$promo_fetch['total_used']:'');

                $total_applied     = (isset($promo_fetch['total_applied'])?$promo_fetch['total_applied']:'');

                $promo_code     = (isset($promo_fetch['promo_code'])?$promo_fetch['promo_code']:'');

                //echo $total_used.''.$promo_limit;exit;
                if($total_applied < $promo_limit)
                {                   
                    return ['status'=>1,'promo_code'=>$promo_code];
                } 
            }
        }
        return ['status'=>0];       
    }

    public function get_passenger_notifications(){

        $arguments = [ ['$project'=> ['title'=>['$ifNull'=>['$title','']],'sub_title'=>['$ifNull'=>['$sub_title','']],'message'=>'$message','image'=>'$image','created_date'=>'$created_date' ] ],['$sort'=>['_id' => -1]], ];
        $result = $this->mongo_db->aggregate(MDB_NOTIFICATIONS,$arguments);

        return $result['result'];
    }

    public function passenger_update_drop_location($arr){

        $trip_id = (int)$arr['trip_id'];

        $trip_detail = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['_id'=>$trip_id],['_id'=>1,'drop_location'=>1]);

        if(count($trip_detail)){

            $drop_location = isset($trip_detail['drop_location'])?$trip_detail['drop_location']:'';

            if(trim($drop_location)==''){
                unset($arr['trip_id']);
                $res = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>$trip_id],['$set'=>$arr]);
                return (empty($res['err']))?1:$res['err_msg'];
            }else{
                return 3;
            }            

        }else{

            return 2;
        }

    }


}
