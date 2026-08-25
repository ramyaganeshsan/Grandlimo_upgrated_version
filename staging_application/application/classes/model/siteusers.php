<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************
* Contains Users module details
* @Package: ConnectTaxi
* @Author: NDOT Team
* @URL : http://www.ndot.in
********************************************/
Class Model_Siteusers extends Model
{
    public function __construct()
    {
        $this->session         = Session::instance();
        $this->username        = $this->session->get("username");
        $this->admin_username  = $this->session->get("username");
        $this->admin_userid    = $this->session->get("id");
        $this->admin_email     = $this->session->get("email");
        $this->user_admin_type = $this->session->get("user_type");
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
        $this->lat             = '';
        $this->lon             = '';
        if (isset($_SESSION['id']) && ($_SESSION['id'] != '')) {
            $this->lat = isset($_SESSION['ip_lati']) ? $_SESSION['ip_lati'] : LOCATION_LATI;
            $this->lon = isset($_SESSION['ip_lng']) ? $_SESSION['ip_lng'] : LOCATION_LONG;
        } else {
            $this->lat = isset($_COOKIE['c_lati']) ? $_COOKIE['c_lati'] : LOCATION_LATI;
            $this->lon = isset($_COOKIE['c_lng']) ? $_COOKIE['c_lng'] : LOCATION_LONG;
        }
    }
    /**Validating User SignUP details**/
    public function validate_signup($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'min_length', array(
            ':value',
            '4'
        ))->rule('name', 'max_length', array(
            ':value',
            '32'
        ))->rule('lastname', 'not_empty')->rule('lastname', 'min_length', array(
            ':value',
            '1'
        ))->rule('lastname', 'max_length', array(
            ':value',
            '32'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '5'
        ))->rule('password', 'max_length', array(
            ':value',
            '50'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        )) /*->rule('repassword', 'not_empty')
        ->rule('repassword', 'min_length', array(':value', '5'))
        ->rule('repassword', 'max_length', array(':value', '50'))
        ->rule('repassword',  'matches', array(':validation', 'password', 'repassword'))*/ ;
    }
    public function validate_twittersignup($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'min_length', array(
            ':value',
            '4'
        ))->rule('name', 'max_length', array(
            ':value',
            '32'
        ))->rule('lastname', 'not_empty')->rule('lastname', 'min_length', array(
            ':value',
            '1'
        ))->rule('lastname', 'max_length', array(
            ':value',
            '32'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '5'
        ))->rule('password', 'max_length', array(
            ':value',
            '50'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('account_type', 'not_empty');
    }
    /**User Signup**/
    public function signup($sign, $val, $img_name, $location_details, $account_type, $userurl = null, $random_key = null, $verifylink)
    {
        $accounttype = ($account_type == "job") ? 2 : 1; // job means : careseeker login
        $username    = Html::chars($sign['name']);
        $password    = Html::chars(md5($sign['password']));
        $result      = DB::insert(PEOPLE, array(
            'name',
            'lastname',
            'email',
            'user_url',
            'user_uniq_urlid',
            'password',
            'created_date',
            'user_type',
            /*'photo'*/
            'status',
            'account_type',
            'verify_link'
        ))->values(array(
            $sign['name'],
            $sign['lastname'],
            $sign['email'],
            $userurl,
            $random_key,
            $password,
            $this->currentdate,
            NORMALUSER,
            /*$img_name*/
            ACTIVE,
            $accounttype,
            $verifylink
        ))->execute();
        if ($result) {
            $email = DB::select()->from(PEOPLE)->where('email', '=', $val['email'])->execute()->as_array();
            $this->session->set("user_name", $email["0"]["name"] . $email["0"]["lastname"]);
            $this->session->set("name", $sign['name']);
            $this->session->set("id", $email["0"]["id"]);
            $this->session->set("usertype", $email["0"]["user_type"]);
            $this->session->set("user_email", $email["0"]["email"]);
            return 1;
        } else {
            return 0;
        }
    }
    /** get site information**/
    public function get_site_info()
    {
        // Check if the username already exists in the database
        /*$sql    = "SELECT app_description,site_tagline,site_copyrights,site_logo FROM " . SITEINFO . " WHERE id='1'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;*/
        
		$result = $this->mongo_db->find_one(MDB_SITEINFO,array('_id'=>(int)1),array('app_description','site_tagline','site_copyrights','android_passenger_app_url','ios_passenger_app_url'));
         return $result;
        
    }
    /** get site information**/
    public function get_sitecms_info()
    {
        // Check if the username already exists in the database
       /* $sql    = "SELECT content,alt_tags FROM " . CMS . " WHERE TYPE =  '3' ORDER BY  `order` ASC LIMIT 0 , 5";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
        */
         $arguments = array(
		
			array('$project' =>
				array(
					
					'content'=>'$content',
					'alt_tags'=>'$alt_tags',
					
				)
			),
			array('$match'=>array('TYPE' => 3)),
			array('$sort'=>array('order' => 1)),
			array('$skip'=>0),
			array('$limit'=>5),
		);
        $result = $this->mongo_db->aggregate(MDB_CMS,$arguments);
		//print_r($result);exit;
        return (isset($result['result']))?$result['result']:array();
        
    }
    /** get banner images **/
    public function get_banner_images()
    {
        $result = array();
        // Check if the username already exists in the database
        //$sql    = "SELECT banner_image1,banner_image2,banner_image3,banner_image4,banner_image5 FROM " . CMS . " WHERE TYPE =  '2' ";
        //$result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function get_company_images($cid)
    {
       /* $result = DB::select()->from(MDB_COMPANY)->where('company_id', '=', $cid)->where('type', '=', 2)->order_by('id', 'ASC')->execute()->as_array();
        return $result;
        */
        
         $ops = array(
         array('$unwind' => '$company_cms'),
				array('$match' => array('_id' => $cid,'company_cms.type'=>(int)2)),
				array('$project' => array('_id' => 0,
					'menu_name' => '$company_cms.menu_name', 
					'title' => '$company_cms.title',
					'content' => '$company_cms.content',
					'page_url' => '$company_cms.page_url',
					'state_default' => '$company_cms.state_default',
					'type' => '$company_cms.type'
					)
				),
				
			);
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:array();
        
      
    }
    public function get_company_cms($cid)
    {
        $result = array();
        //$result = DB::select()->from(COMPANYINFO)->where('company_cid', '=', $cid)->limit(1)->execute()->as_array();
        return $result;
    }
    public function get_company_cms_page($cid)
    {
        $result = array();
        //$result = DB::select()->from(COMPANY_CMS)->where('company_id', '=', $cid)->execute()->as_array();
        return $result;
    }
    public function update_currency_code($uid, $currency)
    {
        $currency_arr = array(
            'currency' => $currency
        );
        $user_update  = DB::update(PEOPLE)->set($currency_arr)->where('id', '=', $uid)->execute();
        $session      = Session::instance();
        $session->set('currency_select', $currency);
    }
    // To Check User Name is Already Available or Not
    public static function unique_username($name)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT name FROM " . PEOPLE . " WHERE name='$name'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // To Check UserName is Already Available while Edit User Details
    public static function unique_username_update($name, $id)
    {
        // Check if the username already exists in the database
        $sql    = "SELECT name FROM " . PEOPLE . " WHERE name='$name' AND id !='$id' ";
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
    /**User Login**/
    public function login($log, $location_details)
    {
		 echo "sssssssssss". ADMIN;exit;
		
		
		 $phone    = Html::chars($log['phone']);
         $password = Html::chars(md5($log['password']));
         echo "sssssssssss". ADMIN;exit;
         
         $result = $this->mongo_db->find_one(MDB_PASSENGERS,array('phone'=>$phone,'user_status'=>'A','password'=>$password),array('_id','salutation','name','lastname','email','phone','deviceid','devicetoken','devicetype','child_exist','allow_creditcard','login_status'));
		if (count($result) > 0) {
			$login_time   = $this->currentdate;
            $update_array    = array(
                'last_login' => $login_time
            );
           
				$update = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>(int)$result['_id']),array('$set'=> $update_array));
			 if (($result["user_type"] == ADMIN)) {
                return 0;
            } else {
                $this->session->set("user_name", $result["0"]["username"]);
                $this->session->set("username", $result[0]["name"]);
                $this->session->set("id", $result["0"]["id"]);
                $this->session->set("usertype", $result["0"]["user_type"]);
                $this->session->set("user_email", $result["0"]["email"]);
                $this->session->set("lat", $lat);
                $this->session->set("long", $lng);
                $this->session->set("account_type", $result["0"]["account_type"]);
                return 1;
            }
           
            
        } elseif (count($result) == 1 && $result[0]['status'] == 'I') {
            return -1;
        } else {
            return 0;
        }
    
    }
    // Validating User Details while Updating User Details
    public function validate_user_settings($arr, $files_value_array)
    {
        return Validation::factory($arr, $files_value_array)->rule('file', 'Upload::type', array(
            $files_value_array['photo'],
            array(
                'jpg',
                'jpeg',
                'png',
                'gif'
            )
        ))->rule('file', 'Upload::size', array(
            $files_value_array['photo'],
            '2M'
        ));
    }
    // Validating User Details while Updating User Details
    public function validate_carepicture_settings($arr, $files_value_array)
    {
        return Validation::factory($arr, $files_value_array)->rule('file', 'Upload::type', array(
            $files_value_array['image'],
            array(
                'jpg',
                'jpeg',
                'png',
                'gif'
            )
        ))->rule('file', 'Upload::size', array(
            $files_value_array['image'],
            '2M'
        ));
    }
    public function validate_user_profilesettings($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('name', 'min_length', array(
            ':value',
            '4'
        ))->rule('name', 'max_length', array(
            ':value',
            '32'
        ))->rule('lastname', 'not_empty')->rule('lastname', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('lastname', 'min_length', array(
            ':value',
            '1'
        ))->rule('lastname', 'max_length', array(
            ':value',
            '32'
        ))->rule('email', 'not_empty')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'email_domain')->rule('description', 'not_empty')->rule('description', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('description', 'min_length', array(
            ':value',
            '5'
        ))->rule('school', 'not_empty')->rule('education', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('education', 'not_empty')->rule('education', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ));
    }
    public function validate_user_profilesettings_optional($arr)
    {
        return Validation::factory($arr)->rule('phone', 'phone')->rule('dob', 'date')->rule('organisation', 'alpha_space')->rule('organisation', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('organisation', 'not_numeric')->rule('work', 'alpha_space')->rule('work', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('work', 'not_numeric')->rule('website', 'url')->rule('user_paypal_account', 'max_length', array(
            ':value',
            '60'
        ))->rule('user_paypal_account', 'email')->rule('user_paypal_account', 'Model_Authorize::unique_email')->rule('account_balance_amt', 'numeric')->rule('group', 'alpha_space')->rule('group', 'illegal_chars', array(
            ':value',
            '/^[\p{L}-.,_; \'0-9]*$/u'
        ))->rule('group', 'not_numeric');
    }
    public function update_user_settings_optional($array_data, $id)
    {
        if (isset($array_data['time_zone']) && $array_data['time_zone'] != "") {
            $name                  = $array_data['time_zone'];
            $sql_query['timezone'] = $name;
        }
        if (isset($array_data['phone']) && $array_data['phone'] != "") {
            $name               = $array_data['phone'];
            $sql_query['phone'] = $name;
        }
        if (isset($array_data['gender']) && $array_data['gender'] != "") {
            $name                = $array_data['gender'];
            $sql_query['gender'] = $name;
        }
        if (isset($array_data['dob']) && $array_data['dob'] != "") {
            $name             = $array_data['dob'];
            $sql_query['dob'] = $name;
        }
        if (isset($array_data['known_language']) && $array_data['known_language'] != "") {
            $name                        = $array_data['known_language'];
            $sql_query['known_language'] = implode(',', $array_data['known_language']);
        }
        if (isset($array_data['group']) && $array_data['group'] != "") {
            $name               = $array_data['group'];
            $sql_query['group'] = $name;
        }
        if (isset($array_data['work']) && $array_data['work'] != "") {
            $name              = $array_data['work'];
            $sql_query['work'] = $name;
        }
        if (isset($array_data['website']) && $array_data['website'] != "") {
            $name                 = $array_data['website'];
            $sql_query['website'] = $name;
        }
        $optional_result = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $id)->execute();
    }
    // Updating User Details
    public function update_user_settings($array_data, $post_value_array, $userid, $photo)
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
        if (isset($array_data['lastname']) && $array_data['lastname'] != "") {
            $name                  = $array_data['lastname'];
            $sql_query['lastname'] = $name;
        }
        if (isset($array_data['description']) && $array_data['description'] != "") {
            $name                     = $array_data['description'];
            $sql_query['description'] = $name;
        }
        if (isset($array_data['education']) && $array_data['education'] != "") {
            $name                   = $array_data['education'];
            $sql_query['education'] = $name;
        }
        if (isset($array_data['school']) && $array_data['school'] != "") {
            $name                = $array_data['school'];
            $sql_query['school'] = $name;
        }
        if ($photo != "") {
            $sql_query['photo'] = $photo;
        }
        $result         = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $userid)->execute();
        /* optional record update */
        $mdate          = $this->currentdate;
        $known_language = "";
        if (isset($post_value_array['known_language'])) {
            foreach ($post_value_array['known_language'] as $lang) {
                $known_language = $known_language . $lang . ",";
            }
            $sql_query['known_language'] = $known_language;
        }
        $sql_query['updated_date'] = $mdate;
        $sql_query['lati']         = isset($post_value_array['lati']) ? $post_value_array['lati'] : '';
        $sql_query['lng']          = isset($post_value_array['lng']) ? $post_value_array['lng'] : '';
        $optional_result           = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $userid)->execute();
        return ($result) ? 1 : 0;
    }
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
    // Check Whether Email is Already Exist or Not
    public function check_email($email = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Email Exist or Not while Updating User Details
    public function check_email_update($email = "", $id = "")
    {
        $sql    = "SELECT email FROM " . PEOPLE . " WHERE email='$email' AND id !='$id' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    // Check Image Exist or Not while Updating User Details
    public function check_photo($userid = "")
    {
        $sql    = "SELECT photo FROM " . PEOPLE . " WHERE id ='$userid'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['photo'];
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
            'updated_date' => $mdate
        ))->where('email', '=', $array_data['email'])->execute();
        if ($result) {
            $rs = DB::select('name', 'username', 'email', 'password')->from(PEOPLE)->where('email', '=', $post_value_array['email'])->where('status', '=', ACTIVE)->execute()->as_array();
            return $rs;
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
            'updated_date' => $mdate
        ))->where('id', '=', $userid)->execute();
        if (count($result) == SUCESS) {
            $rs = DB::select('username', 'name', 'password', 'email')->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
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
    //update user photo null 
    public function update_user_photo($userid)
    {
        $sql_query = array(
            'photo' => ""
        );
        //print_r($sql_query);exit;
        $result    = DB::update(PEOPLE)->set($sql_query)->where('id', '=', $userid)->execute();
        return 1;
    }
    //set user status by following activation url	
    public function set_description_active($usr_id, $key, $settings)
    {
        if ($settings[0]['admin_activation_reg'] == YES) {
            $sql_query = array(
                'activation_code_status' => ACTIVATION_CODE_STATUS
            );
        } else {
            $sql_query = array(
                'status' => ACTIVE,
                'activation_code_status' => ACTIVATION_CODE_STATUS
            );
        }
        $result = DB::update(USERS)->set($sql_query)->where('id', '=', $usr_id)->where('activation_code', '=', $key)->where('status', '=', IN_ACTIVE)->execute();
        if ($result == 1) {
            $rs = DB::select('activation_code_status', 'status')->from(USERS)->where('id', '=', $usr_id)->execute()->as_array();
            return $rs;
        }
    }
    public function check_userdetails_exist($id, $key)
    {
        $result = DB::select('id', 'activation_code_status')->from(USERS)->where('id', '=', $id)->where('activation_code', '=', $key)->execute()->as_array();
        return $result;
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
    public function get_uname($uid = "")
    {
        $sql    = "SELECT name,lastname FROM " . PEOPLE . " WHERE id='$uid' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result["0"]["name"] . "" . $result["0"]["lastname"];
        } else {
            return "";
        }
    }
    public function get_people_details($id)
    {
        $result = DB::select()->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
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
    /**For Facebook user signup insertion**/
    public function register_facebook_user($profile_data = array(), $fb_access_token, $arr, $location_details, $userurl = null, $random_key = null, $pwd = '', $verify_code)
    {
        $lat         = $this->lat;
        $lng         = $this->lon;
        $accounttype = ($this->session->get('account_type') == "job") ? 2 : 1; // job means : careseeker login
        $result      = DB::select()->from(PEOPLE)->where('email', '=', $profile_data->email)->execute()->as_array();
        if (empty($result)) {
            $username      = Html::chars($profile_data->first_name);
            $password      = md5($pwd); //  md5(Commonfunction::randomkey_generator());
            $insert_result = DB::insert(PEOPLE, array(
                'username',
                'name',
                'email',
                'password',
                'user_url',
                'user_uniq_urlid',
                'photo',
                'login_type',
                'user_type',
                'status',
                'created_date',
                'access_key',
                'secret_key',
                'facebook_session_key',
                'last_login',
                'account_type',
                'verify_link'
            ))->values(array(
                strtolower($username),
                $profile_data->name,
                $profile_data->email,
                $password,
                $userurl,
                $random_key,
                $arr['picture'],
                FACEBOOK,
                NORMALUSER,
                ACTIVE,
                $this->currentdate,
                $fb_access_token,
                FB_APP_SECRET,
                '',
                $this->currentdate,
                $accounttype,
                $verify_code
            ))->execute();
            //'latitude','langitude','login_city','login_state','login_country','login_country_code','login_ip',
            //,$lat,$lng,$city,$state,$country,$country_code,$ip
            $this->session->set("id", $insert_result[0]);
            $this->session->set("username", $profile_data->first_name);
            $this->session->set("email", $profile_data->email);
            $this->session->set("fb_access_token", $fb_access_token);
            unset($_SESSION["account_type"]);
            $rslt = array();
            $rslt = array(
                "name" => $profile_data->first_name,
                "email" => $profile_data->email,
                "password" => $password
            );
            return $rslt;
        } else {
            $login_time   = $this->currentdate;
            $result_login = DB::update(PEOPLE)->set(array(
                'last_login' => $login_time
            ))->execute();
            if (($result["0"]["user_type"] == ADMIN)) {
                $this->session->set("user_email", $result[0]["email"]);
                $this->session->set("name", $result[0]["name"]);
                $this->session->set("username", $result[0]["username"]);
                $this->session->set("userid", $result[0]["id"]);
                $this->session->set("user_type", $result[0]["user_type"]);
            }
            $this->session->set("user_name", $result["0"]["username"]);
            $this->session->set("name", $result[0]["name"]);
            $this->session->set("id", $result["0"]["id"]);
            $this->session->set("usertype", $result["0"]["user_type"]);
            $this->session->set("email", $result["0"]["email"]);
            return 1;
        }
    }
    /**For Facebook user signup insertion**/
    public function register_facebook_user1($profile_data = array(), $fb_access_token, $arr, $location_details, $userurl = null, $random_key = null, $verify_code)
    {
        $lat         = $this->lat;
        $lng         = $this->lon;
        $accounttype = ($this->session->get('account_type') == "job") ? 2 : 1; // job means : careseeker login
        $result      = DB::select()->from(PEOPLE)->where('email', '=', $profile_data->email)->execute()->as_array();
        if (empty($result)) {
            $username      = Html::chars($profile_data->first_name);
            $password      = md5(Commonfunction::randomkey_generator());
            $insert_result = DB::insert(PEOPLE, array(
                'username',
                'name',
                'email',
                'password',
                'user_url',
                'user_uniq_urlid',
                'photo',
                'login_type',
                'user_type',
                'status',
                'created_date',
                'access_key',
                'secret_key',
                'facebook_session_key',
                'last_login',
                'account_type',
                'verify_link'
            ))->values(array(
                strtolower($username),
                $profile_data->name,
                $profile_data->email,
                $password,
                $userurl,
                $random_key,
                $arr['picture'],
                FACEBOOK,
                NORMALUSER,
                INACTIVE,
                $this->currentdate,
                $fb_access_token,
                FB_APP_SECRET,
                '',
                $this->currentdate,
                $accounttype,
                $verify_code
            ))->execute();
            //'latitude','langitude','login_city','login_state','login_country','login_country_code','login_ip',
            //,$lat,$lng,$city,$state,$country,$country_code,$ip
            $this->session->set("fb_id", $insert_result[0]);
            unset($_SESSION["account_type"]);
            $rslt = array();
            $rslt = array(
                "name" => $profile_data->first_name,
                "email" => $profile_data->email,
                "password" => $password
            );
            return $rslt;
        } else {
            $login_time   = $this->currentdate;
            $result_login = DB::update(PEOPLE)->set(array(
                'last_login' => $login_time
            ))->execute();
            if (($result["0"]["user_type"] == ADMIN)) {
                $this->session->set("user_email", $result[0]["email"]);
                $this->session->set("name", $result[0]["name"]);
                $this->session->set("username", $result[0]["username"]);
                $this->session->set("userid", $result[0]["id"]);
                $this->session->set("user_type", $result[0]["user_type"]);
            }
            $this->session->set("user_name", $result["0"]["username"]);
            $this->session->set("name", $result[0]["name"]);
            $this->session->set("id", $result["0"]["id"]);
            $this->session->set("usertype", $result["0"]["user_type"]);
            $this->session->set("email", $result["0"]["email"]);
            return 1;
        }
    }
    public function logged_user_status()
    {
        $query  = "SELECT status FROM " . PEOPLE . "  where id = '" . $this->session->get("id") . "'  and user_type!='" . ADMIN . "' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) == 1 && $result[0]['status'] == 'A') {
            return 1;
        } else if (count($result) == 1 && $result[0]['status'] == 'I') {
            return -1;
        } else {
            return 0;
        }
    }
    // user balance get
    public function get_user_accountbalance($uid)
    {
        $sql    = "SELECT account_balance_amt as balance  FROM " . PEOPLE . " as ppl  WHERE ppl.id='$uid' and ppl.status='A' ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function get_user_email()
    {
        $query  = "SELECT email FROM " . PEOPLE . "  where id != '" . $this->session->get("id") . "' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function get_verify_userid($verify_code)
    {
        $sql    = "SELECT id FROM " . PEOPLE . " WHERE verify_link='$verify_code'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return ($result[0]["id"]) ? $result[0]["id"] : '';
    }
    public function get_verify($verifycode)
    {
        $query = DB::select(array(
            'verify_link_status',
            'status'
        ))->from(PEOPLE)->where('verify_link', '=', $verifycode)->execute()->get('status');
        if ($query == 1) {
            return 0;
        } else {
            DB::update(PEOPLE)->set(array(
                'verify_link_status' => '1'
            ))->where('verify_link', '=', $verifycode)->execute();
            return 1;
        }
    }
    public function get_userallinfo($userid)
    {
        $result = DB::select()->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
        return $result;
    }
    public function dash_canview($id)
    {
        $can_view     = 0;
        $sql          = "select account_type from " . PEOPLE . " where id='$id' and status='A' ";
        $account_type = Db::query(Database::SELECT, $sql)->execute()->as_array();
        // print_r($account_type);
        if (count($account_type) > 0) {
            if ($account_type[0]['account_type'] == 2) {
                $can_view = 1;
            }
            if ($account_type[0]['account_type'] == 1) {
                $can_view = 0;
            }
        }
        return $can_view;
    }
    public function get_usernames($userid)
    {
        $result = DB::select('name')->from(PEOPLE)->where('id', '=', $userid)->execute()->as_array();
        return $result;
    }
    public function get_smtpdetails()
    {
        $result = DB::select()->from(SMTP_SETTINGS)->limit(1)->execute()->as_array();
        return $result;
    }
    public function get_email_settinguser($user_id, $cols = "")
    {
        $result = DB::select($cols)->from(USER_EMAIL_SETTINGS)->where('userid', '=', $user_id)->limit(1)->execute()->as_array();
        return $result;
    }
    public function get_currentuser($userid)
    {
        $query  = "select * from " . PEOPLE . " where id=$userid and status='A' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function update_useremail_settings($arr, $userid)
    {
        $result = DB::select()->from(USER_EMAIL_SETTINGS)->where('userid', '=', $userid)->execute()->as_array();
        if (count($result) > 0) {
            $set_arr = array(
                'gen_1' => isset($arr['gen_1']) ? $arr['gen_1'] : '0',
                'gen_2' => isset($arr['gen_2']) ? $arr['gen_2'] : '0',
                'mycon_1' => isset($arr['mycon_1']) ? $arr['mycon_1'] : '0',
                'mycon_2' => isset($arr['mycon_2']) ? $arr['mycon_2'] : '0',
                'mycon_3' => isset($arr['mycon_3']) ? $arr['mycon_3'] : '0',
                'offer_lis_1' => isset($arr['offer_lis_1']) ? $arr['offer_lis_1'] : '0',
                'offer_lis_2' => isset($arr['offer_lis_2']) ? $arr['offer_lis_2'] : '0',
                'offer_lis_3' => isset($arr['offer_lis_3']) ? $arr['offer_lis_3'] : '0',
                'offer_lis_4' => isset($arr['offer_lis_4']) ? $arr['offer_lis_4'] : '0',
                'offer_lis_5' => isset($arr['offer_lis_5']) ? $arr['offer_lis_5'] : '0',
                'offer_lis_6' => isset($arr['offer_lis_6']) ? $arr['offer_lis_6'] : '0',
                'offer_lis_7' => isset($arr['offer_lis_7']) ? $arr['offer_lis_7'] : '0',
                'offer_lis_8' => isset($arr['offer_lis_8']) ? $arr['offer_lis_8'] : '0',
                'offer_lis_9' => isset($arr['offer_lis_9']) ? $arr['offer_lis_9'] : '0',
                'offer_lis_10' => isset($arr['offer_lis_10']) ? $arr['offer_lis_10'] : '0',
                'offer_lis_11' => isset($arr['offer_lis_11']) ? $arr['offer_lis_11'] : '0',
                'book_lis_1' => isset($arr['book_lis_1']) ? $arr['book_lis_1'] : '0',
                'book_lis_2' => isset($arr['book_lis_2']) ? $arr['book_lis_2'] : '0',
                'book_lis_3' => isset($arr['book_lis_3']) ? $arr['book_lis_3'] : '0'
            );
            $rs      = DB::update(USER_EMAIL_SETTINGS)->set($set_arr)->where('userid', '=', $userid)->execute();
        } else {
            $cols   = array(
                'userid',
                'gen_1',
                'gen_2',
                'mycon_1',
                'mycon_2',
                'mycon_3',
                'offer_lis_1',
                'offer_lis_2',
                'offer_lis_3',
                'offer_lis_4',
                'offer_lis_5',
                'offer_lis_6',
                'offer_lis_7',
                'offer_lis_8',
                'offer_lis_9',
                'offer_lis_10',
                'offer_lis_11',
                'book_lis_1',
                'book_lis_2',
                'book_lis_3'
            );
            $vals   = array(
                $userid,
                isset($arr['gen_1']) ? $arr['gen_1'] : '0',
                isset($arr['gen_2']) ? $arr['gen_2'] : '0',
                isset($arr['mycon_1']) ? $arr['mycon_1'] : '0',
                isset($arr['mycon_2']) ? $arr['mycon_2'] : '0',
                isset($arr['mycon_3']) ? $arr['mycon_3'] : '0',
                isset($arr['offer_lis_1']) ? $arr['offer_lis_1'] : '0',
                isset($arr['offer_lis_2']) ? $arr['offer_lis_2'] : '0',
                isset($arr['offer_lis_3']) ? $arr['offer_lis_3'] : '0',
                isset($arr['offer_lis_4']) ? $arr['offer_lis_4'] : '0',
                isset($arr['offer_lis_5']) ? $arr['offer_lis_5'] : '0',
                isset($arr['offer_lis_6']) ? $arr['offer_lis_6'] : '0',
                isset($arr['offer_lis_7']) ? $arr['offer_lis_7'] : '0',
                isset($arr['offer_lis_8']) ? $arr['offer_lis_8'] : '0',
                isset($arr['offer_lis_9']) ? $arr['offer_lis_9'] : '0',
                isset($arr['offer_lis_10']) ? $arr['offer_lis_10'] : '0',
                isset($arr['offer_lis_11']) ? $arr['offer_lis_11'] : '0',
                isset($arr['book_lis_1']) ? $arr['book_lis_1'] : '0',
                isset($arr['book_lis_2']) ? $arr['book_lis_2'] : '0',
                isset($arr['book_lis_3']) ? $arr['book_lis_3'] : '0'
            );
            $result = DB::insert(USER_EMAIL_SETTINGS, $cols)->values($vals)->execute();
        }
    }
    public function get_user_email_setting($userid)
    {
        $result = DB::select()->from(USER_EMAIL_SETTINGS)->where('userid', '=', $userid)->execute()->as_array();
        return $result;
    }
    public function usermapupdate($id, $locat, $lati, $lng)
    {
        $query  = array(
            "location" => $locat,
            "lati" => $lati,
            "lng" => $lng
        );
        $result = DB::update('people')->set($query)->where('id', '=', $id)->execute();
        return $result;
    }
    public function getusermap_details($id)
    {
        $result = DB::select('location', 'lati', 'lng')->from('people')->where("id", "=", $id)->execute()->as_array();
        return $result;
    }
    public function page_details_terms()
    {
        $sql           = 'SELECT * FROM cms where type=7 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function page_details_privacy()
    {
        $sql           = 'SELECT * FROM cms where type=8 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function page_details_help()
    {
        $sql           = 'SELECT * FROM cms where type=4 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function page_details_press()
    {
        $sql           = 'SELECT * FROM cms where type=3 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function page_details_contact()
    {
        $sql           = 'SELECT * FROM cms where type=9 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function validate_contact($arr)
    {
        $arr['email'] = trim($arr['email']);
        return Validation::factory($arr)->rule('name1', 'not_empty')->rule('name1', 'not_numeric')->rule('name1', 'min_length', array(
            ':value',
            '3'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('phone', 'numeric') //num
            ->rule('type', 'not_empty')->rule('subject', 'not_empty')->rule('message', 'not_empty');
    }
    public function savecontact($arr)
    {
        $result = DB::insert('contact', array(
            'name',
            'email',
            'phone',
            'type',
            'subject',
            'message'
        ))->values(array(
            $arr['name1'],
            $arr['email'],
            $arr['phone'],
            $arr['type'],
            $arr['subject'],
            $arr['message']
        ))->execute();
        return $result;
    }
    public function page_details_aboutus()
    {
        $sql           = 'SELECT * FROM cms where type=2 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function page_details_jobs()
    {
        $sql           = 'SELECT * FROM cms where type=6 order by id desc';
        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $footer_result;
    }
    public function get_logged_user_details($userid)
    {
      /*  $result = DB::select()->from(PEOPLE)->where("id", "=", $userid)->and_where("user_type", "=", "N") //NORMAL
            ->execute()->as_array(); // print_r($result);exit;   				
        return $result; */
        
$result = $this->mongo_db->find_one(MDB_PEOPLE,array('_id'=>(int)$userid,'user_type' => 'N'),array('name','email','phone'));
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
        $sql = "SELECT * FROM " . PEOPLE . " WHERE id = '$id' ";
        return Db::query(Database::SELECT, $sql)->execute()->as_array();
    }
    /**Validating User conatct details**/
    public function validate_contact_form($arr)
    {
        $arr['email1'] = trim($arr['email1']);
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'not_numeric')
        //->rule('name','alpha')  
            ->rule('name', 'min_length', array(
            ':value',
            '3'
        ))->rule('email1', 'not_empty')->rule('email1', 'email')->rule('email1', 'max_length', array(
            ':value',
            '50'
        ))->rule('message', 'not_empty')->rule('message', 'min_length', array(
            ':value',
            '10'
        ));
    }
    public function add_contact_details($data)
    {
        $rs = DB::insert(QUICK_CONTACTS)->columns(array(
            'name',
            'email',
            'message',
            'contact_date'
        ))->values(array(
            $data['name'],
            $data['email1'],
            $data['message'],
            $this->currentdate
        ))->execute();
        return $rs;
    }
    /**Validating company Signup details**/
    public function validate_company_signup($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '32'
        ))->rule('lastname', 'not_empty')->rule('lastname', 'max_length', array(
            ':value',
            '32'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '100'
        ))->rule('companyname', 'not_empty')->rule('companyname', 'min_length', array(
            ':value',
            '4'
        ))->rule('companyname', 'max_length', array(
            ':value',
            '30'
        ))->rule('company_name', 'Model_Siteusers::checkcompany', array(
            ':value',
            $arr['country'],
            $arr['state'],
            $arr['city']
        ))->rule('paypal_account', 'not_empty')->rule('paypal_account', 'email')->rule('paypal_account', 'max_length', array(
            ':value',
            '150'
        ))->rule('country', 'not_empty')->rule('city', 'not_empty')->rule('state', 'not_empty')->rule('address', 'not_empty')->rule('companyaddress', 'not_empty')->rule('mobile', 'not_empty')->rule('mobile', 'phone')->rule('mobile', 'min_length', array(
            ':value',
            '4'
        ))->rule('mobile', 'max_length', array(
            ':value',
            '36'
        ))->rule('mobile', 'Model_Siteusers::checkphone', array(
            ':value'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '4'
        ))->rule('password', 'max_length', array(
            ':value',
            '36'
        ))->rule('confirm_password', 'not_empty')->rule('confirm_password', 'min_length', array(
            ':value',
            '4'
        ))->rule('confirm_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('confirm_password', 'matches', array(
            ':validation',
            'password',
            'confirm_password'
        ))->rule('confirm_password', 'max_length', array(
            ':value',
            '36'
        ))->rule('domain_name', 'not_empty')->rule('domain_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('domain_name', 'max_length', array(
            ':value',
            '10'
        ))->rule('domain_name', 'alpha_numeric', array(
            ':value',
            '/^[0-9]{1,}/'
        ))->rule('domain_name', 'Model_Add::checkdomain', array(
            ':value'
        ))->rule('time_zone', 'not_empty');
    }
    public static function checkdomain($domainname)
    {
        // Check if the username already exists in the database
        $result = DB::select('company_domain')->from(COMPANYINFO)->where('company_domain', '=', $domainname)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    // Check Whether Email is Already Exist or Not
    public static function checkphone($phone = "")
    {
        $result = DB::select('phone')->from(PEOPLE)->where('phone', '=', $phone)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    /**User Signup**/
    public function company_signup($sign, $val)
    {
        //$company_username = Html::chars($sign['company_username']);
        $org_password              = Html::chars($sign['password']);
        $password                  = Html::chars(md5($sign['confirm_password']));
        $result                    = DB::insert(PEOPLE, array(
            'name',
            'lastname',
            'email',
            'address',
            'paypal_account',
            'password',
            'org_password',
            'created_date',
            'login_country',
            'login_city',
            'login_state',
            'phone',
            'login_type',
            'user_type',
            'account_type',
            'status',
            'login_from'
        ))->values(array(
            $sign['firstname'],
            $sign['lastname'],
            $sign['email'],
            $sign['address'],
            $sign['paypal_account'],
            $password,
            $org_password,
            $this->currentdate,
            $sign['country'],
            $sign['city'],
            $sign['state'],
            $sign['mobile'],
            '1',
            'C',
            '0',
            'A',
            'WD'
        ))->execute();
        $last_insert_id            = $result[0];
        $cresult                   = DB::insert(COMPANY, array(
            'company_name',
            'company_address',
            'company_country',
            'company_state',
            'company_city',
            'userid',
            'company_status',
            'time_zone'
        ))->values(array(
            $sign['companyname'],
            $sign['companyaddress'],
            $sign['country'],
            $sign['state'],
            $sign['city'],
            $last_insert_id,
            'D',
            $sign['time_zone']
        ))->execute();
        $last_insert_id1           = $cresult[0];
        $update_people             = DB::update(PEOPLE)->set(array(
            'company_id' => $last_insert_id1
        ))->where('id', '=', $last_insert_id)->execute();
        $insert_tdispatchalogrithm = DB::insert(TBLALGORITHM, array(
            'labelname',
            'alg_created_by',
            'alg_company_id',
            'active',
            'hide_customer',
            'hide_droplocation',
            'hide_fare'
        ))->values(array(
            1,
            $last_insert_id,
            $last_insert_id1,
            1,
            0,
            0,
            0
        ))->execute();
        $key                       = "";
        $charset                   = "abcdefghijklmnopqrstuvwxyz";
        $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charset .= "0123456789";
        $length = mt_rand(30, 35);
        for ($i = 0; $i < $length; $i++)
            $key .= $charset[(mt_rand(0, (strlen($charset) - 1)))];
        DB::insert(COMPANYINFO, array(
            'company_cid',
            'company_domain',
            'company_app_name',
            'company_currency',
            'company_notification_settings',
            'company_api_key',
            'header_bgcolor',
            'menu_color',
            'mouseover_color'
        ))->values(array(
            $last_insert_id1,
            $sign['domain_name'],
            $sign['companyname'],
            '$',
            '60',
            $key,
            '#FFFFFF',
            '#000000',
            '#FFD800'
        ))->execute();
        $cms          = DB::insert(COMPANY_CMS, array(
            'company_id',
            'menu_name',
            'title',
            'content',
            'page_url',
            'type'
        ));
        $banner_image = DB::insert(COMPANY_CMS, array(
            'company_id',
            'image_tag',
            'alt_tags',
            'banner_image',
            'type'
        ));
        for ($i = 1; $i <= 5; $i++) {
            $cms->values(array(
                $last_insert_id1,
                "page$i",
                "page$i",
                "page$i",
                "page$i",
                1
            ));
            $banner_image->values(array(
                $last_insert_id1,
                "banner$i",
                "banner$i",
                "",
                2
            ));
        }
        $cms->execute();
        $banner_image->execute();
        if ($result && $cresult && $update_people)
            return $result[0];
        else
            return 0;
    }
    // To Check Company Name is Already Available or Not
    public static function checkcompany($companyname, $country, $state, $city)
    {
        // Check if the username already exists in the database
        $result = DB::select('company_name')->from(COMPANY)->where('company_name', '=', $companyname)->where('company_country', '=', $country)->where('company_state', '=', $state)->where('company_city', '=', $city)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    /**get country details**/
    public function country_details()
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '=', 'A')->order_by('country_name', 'asc')->execute()->as_array();*/
        
       
		$result = $this->mongo_db->find_one(MDB_CSC,array('country_status'=>'A'),array('country_name'));
        return $result;
    }
    /**get city details**/
    public function city_details()
    {
       /* $result = DB::select()->from(CITY)->where('city_status', '=', 'A')->order_by('city_name', 'asc')->execute()->as_array();
        return $result;*/
       
			//MongoDB with aggregate process only
			$ops = array(
				array('$unwind' => '$stateinfo'),
				array('$unwind' => '$stateinfo.cityinfo'),
				array('$match' => array('stateinfo.cityinfo.city_status'=>array('$ne'=>'T'))),
				array('$project' => array('_id' => 0,
					'city_id' => '$stateinfo.cityinfo.city_id', 
					'city_name' => '$stateinfo.cityinfo.city_name',
					'city_stateid' => '$stateinfo.cityinfo.city_stateid',
					'city_countryid' => '$stateinfo.cityinfo.city_countryid',
					'city_status' => '$stateinfo.cityinfo.city_status',
					//'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
					'city_default' => '$stateinfo.cityinfo.default',
					'state_name' => '$stateinfo.state_name',
					'country_name' => '$country_name'
					)
				),
				array(
					'$sort' => array(
						'country_name' => 1
					),
				),
			
			);
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:array();
		
        
        
    }
    /**get state details**/
    public function state_details()
    {
        /*$result = DB::select()->from(STATE)->where('state_status', '=', 'A')->order_by('state_name', 'asc')->execute()->as_array();
        return $result;*/
        $ops = array(
				array('$unwind' => '$stateinfo'),
				array('$match' => array('stateinfo.state_status'=>array('$ne'=>'T'))),
				array('$project' => array('_id' => 0,
					'state_id' => '$stateinfo.state_id', 
					'state_name' => '$stateinfo.state_name',
					'state_countryid' => '$stateinfo.state_countryid',
					'state_status' => '$stateinfo.state_status',
					'state_default' => '$stateinfo.default',
					'country_name' => '$country_name'
					)
				),
				array(
					'$sort' => array(
						'country_name' => 1
					),
				)
				
			);
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:array();
        
    }
    /** for getting city details **/
    public static function getcity_details($country_id, $state_id)
    {
        $result = DB::select()->from(CITY)->join(STATE, 'LEFT')->on(CITY . '.city_stateid', '=', STATE . '.state_id')->join(COUNTRY, 'LEFT')->on(CITY . '.city_countryid', '=', COUNTRY . '.country_id')->where('city_countryid', '=', $country_id)->where('city_stateid', '=', $state_id)->order_by('city_name', 'ASC')->execute()->as_array();
        return $result;
    }
    /** for getting state details **/
    public function getstate_details($country_id)
    {
        $result = DB::select()->from(STATE)->join(COUNTRY, 'LEFT')->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where('state_countryid', '=', $country_id)->order_by('state_name', 'ASC')->execute()->as_array();
        return $result;
    }
    /** for vlaidate company login details **/
    public function validate_company_login($arr)
    {
        return Validation::factory($arr)->rule('company_email', 'not_empty')->rule('company_email', 'email')->rule('company_email', 'max_length', array(
            ':value',
            '100'
        ))->rule('company_password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('company_password', 'not_empty')->rule('company_password', 'min_length', array(
            ':value',
            '4'
        ))->rule('company_password', 'max_length', array(
            ':value',
            '36'
        ));
    }
    /** for getting package status **/
    public function package_details()
    {
        $result = DB::select()->from(PACKAGE)->where('package_status', '=', 'A')->order_by('package_name', 'asc')->execute()->as_array();
        return $result;
    }
    /** for getting package details **/
    public function payment_packagedetails($packid = 0)
    {
        $result = DB::select()->from(PACKAGE)->where('package_status', '=', 'A')->where('package_id', '=', $packid)->order_by('package_name', 'asc')->execute()->as_array();
        return $result;
    }
    /** menu listing in header pages **/
    public function menu_listingorder()
    {
       /* $sql         = "select * from " . MENU . " where status_post='P' order by order_status ASC";
        $menu_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $menu_result;*/

        $menu_result = $this->mongo_db->find_one(MDB_CMS,array('status_post'=>'P'),array('menu_name','menu_link','status_post','order_status','menu','meta_title','meta_keyword','meta_description','content','content_status'));
		return $menu_result;
    }
    /** menu listing in header pages **/
    public function footer_contents()
    {
        $sql           = "select * from " . SITEINFO . " where id=1";
//        $footer_result = Db::query(Database::SELECT, $sql)->execute()->as_array();
  //      return $footer_result;
    }
    /** contact us validation**/
    public function validate_contactus($arr = "")
    {
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'Model_Siteusers::checkurlgiven', array(
            ':value'
        )) //to avoid injection
            ->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '100'
        ))->rule('email', 'Model_Siteusers::checkurlgiven', array(
            ':value'
        )) //to avoid injection
            ->rule('phone', 'phone', array(
            ':value'
        ))->rule('phone', 'Model_Siteusers::checkurlgiven', array(
            ':value'
        )) //to avoid injection
            ->rule('subject', 'not_empty')->rule('subject', 'Model_Siteusers::checkurlgiven', array(
            ':value'
        )) //to avoid injection
            ->rule('security_code', 'not_empty')->rule('security_code', 'Model_Siteusers::checkurlgiven', array(
            ':value'
        )) //to avoid injection
            ->rule('message', 'not_empty');
    }
    /** inserting a contacus info in table **/
    public function contactus_add($sign, $cid)
    {
       
        $message = ucfirst($sign['message']);
        $current_time = date('Y-m-d H:i:s');
        if (COMPANY_CID == 1) {
         
            /** MONGO CONVERSION **/
            $this->commonmodel = Model::factory('commonmodel');
            $auto_id = $this->commonmodel->get_auto_id(MDB_CONTACTS);
            $fieldname_array = array(
			'_id' => (int)$auto_id,
			'name' => $sign['name'],
			'email' => $sign['email'],
			'subject' => $sign['subject'],
			'message'=> $message,
			'phone' =>  $sign['phone'],
			'sent_date' =>  new MongoDate(strtotime($current_time))
			
		);	
			$insert      = $this->mongo_db->Insert(MDB_CONTACTS,$fieldname_array);
			return $passresult = (isset($insert['err']) ? 0 : 1);
            
            /** MONGO CONVERSION **/
            
            
        } else {
            /* Create Log */
            $ins_logid      = 0;
            $company_id     = $cid;
            $user_createdby = "";
            $log_message    = __('You have enquiry from ') . "," . __('name_label') . ":" . $sign['name'] . "," . __('message') . ":" . $sign['message'] . "," . __('phone_number') . ":" . $sign['phone'] . "," . __('Current_Location') . ":" . $sign['clocation'] . "," . __('Drop_Location') . ":" . $sign['droplocation'];
            $log_booking    = __('You have enquiry from ') . "," . __('name_label') . ":" . $sign['name'] . "," . __('message') . ":" . $sign['message'] . "," . __('phone_number') . ":" . $sign['phone'] . "," . __('Current_Location') . ":" . $sign['clocation'] . "," . __('Drop_Location') . ":" . $sign['droplocation'];
            $log_status     = $this->create_logs($ins_logid, COMPANY_CID, $user_createdby, $log_message, $log_booking);
            return $log_status;
            /* Create Log */
        }
    }
    //===============================================================================================================		
    public static function create_logs($booking_logid = '', $company_id = '', $log_userid = '', $log_message = '', $log_booking = '')
    {
        $Commonmodel  = Model::factory('Commonmodel');
        //$user_createdby = $_SESSION['userid'];
        $current_time = $Commonmodel->getcompany_all_currenttimestamp($company_id);
        $result       = DB::insert(LOGS, array(
            'booking_logid',
            'log_userid',
            'log_message',
            'log_booking',
            'log_createdate'
        ))->values(array(
            $booking_logid,
            $company_id,
            $log_message,
            $log_booking,
            $current_time
        ))->execute();
        return $result;
    }
    public static function country_citylist($country_id)
    {
        $result = DB::select()->from(CITY)->join(STATE, 'LEFT')->on(CITY . '.city_stateid', '=', STATE . '.state_id')->join(COUNTRY, 'LEFT')->on(CITY . '.city_countryid', '=', COUNTRY . '.country_id')->where('city_countryid', '=', $country_id)->where('state_status', '=', 'A')->where('city_status', '=', 'A')->order_by('city_name', 'ASC')->execute()->as_array();
        return $result;
    }
    public static function get_company_taxi_image($company_id)
    {
        $result = array();
        //$result = DB::select('taxi_image')->from(TAXI)->join(TAXIMAPPING, 'LEFT')->on(TAXIMAPPING . '.mapping_taxiid', '=', TAXI . '.taxi_id')->where('taxi_company', '=', $company_id)->execute()->as_array();
        return $result;
    }
    public static function get_company_info($company_id)
    {
        $result = array();
        //$result = DB::select('company_phone_number', 'company_address', 'company_tagline', 'company_name', 'header_bgcolor', 'menu_color', 'mouseover_color')->from(PEOPLE)->join(COMPANYINFO, 'LEFT')->on(COMPANYINFO . '.company_cid', '=', PEOPLE . '.company_id')->join(COMPANY, 'LEFT')->on(COMPANY . '.cid', '=', PEOPLE . '.company_id')->where('user_type', '=', 'C')->where('company_id', '=', $company_id)->execute()->as_array();
        return $result;
    }
    public static function get_company_type($company_id)
    {
        $result = array();
        //$sql    = "SELECT upgrade_packageid FROM package_report WHERE upgrade_companyid=$company_id ORDER BY  `upgrade_id` desc LIMIT 0 , 1";
        //$result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function all_driver_map_list($company_id)
    {
		
		/** MONGO CONVERSION **/
		$arguments = array(
						array('$lookup'=>array(
							'from'=>MDB_DRIVER_INFO,
							'localField'=>"_id",
							'foreignField'=>"_id",
							 'as'=>"driverinfo"        
						)),
						array('$unwind'=>'$driverinfo'),
						
						array('$project' => array(
						
							'_id' => '$_id',
							'phone' => '$phone',
							'user_type' => '$user_type',
							'status' => '$status',
							'login_status' => '$login_status',
							'company_id' => '$company_id',
							'coordinates' => '$driverinfo.loc.coordinates',
							'driver_phone'=>'$phone',
							"name" => '$name',
							"driver_photo" => '$profile_picture',
							"driver_device_id" => '$device_id',
							"driver_device_token"  => '$device_token',
							"driver_device_type" => '$device_type',
							"driver_status" => '$driverinfo.status',
							"shift_status" => '$driverinfo.shift_status',
							"driver_device_type" => '$device_type',
							"driver_device_type" => '$device_type',
						
						)),
						array('$match'=>array(
							'user_type'=>'D',
							'status'=>'A',
							'login_status'=>'S',
							'company_id'=>(int)$company_id,
							'driver_status'=>'F',
							'shift_status'=>'IN'
							
							
						)),					
					);
					
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
        //echo '<pre>'; print_r($result);exit;
        return (!empty($result['result'])?$result['result']:array());
		
		/** MONGO CONVERSION **/
		
		
		
		
		
		
       /* $result = DB::select("*", array(
            DRIVER . '.status',
            'driver_status'
        ))->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where(PEOPLE . '.user_type', '=', 'D')->where(DRIVER . '.status', '=', 'F')->where(DRIVER . '.shift_status', '=', 'IN')->where(PEOPLE . '.status', '=', 'A')->where(PEOPLE . '.login_status', '=', 'S')->where('company_id', '=', $company_id)
        //->order_by('created_date','desc')->limit($val)->offset($offset)
            ->execute()->as_array();
            
            
            
        return $result; */
    }
    public static function checkurlgiven($value)
    {
        if (preg_match("/http/i", $value)) {
            return false;
        } else {
            return true;
        }
    }
    
    /////// Slider Settings ///////
    public function slider_settings()
    {
        //MongoDB
        $res    = $this->mongo_db->find_one(MDB_SLIDER_SETTINGS, array(
            '_id' => 2
        ));
        $result = array();
        foreach ($res as $keys => $values) {
            $result[0][$keys] = $values;
        }
        return $result;
    }
    /////// Slider Settings ///////
}
