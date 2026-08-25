<?php defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users module details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Add extends Model
{
    public function __construct()
    {
        $this->session         = Session::instance();
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
		$this->user_createdby = $this->userid = $this->session->get("userid");
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
        $this->country_id     = $this->session->get('country_id');
        $this->state_id       = $this->session->get('state_id');
        $this->city_id        = $this->session->get('city_id');
		
		//MongoDB Instance
		$this->mongo_db        = MangoDB::instance('default');		
    }
    /**Validating for Add company**/
    public function validate_addcompany($arr, $files_value_array)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('firstname', 'alpha_dash')
            ->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')
        //->rule('lastname', 'alpha_dash')
            ->rule('lastname', 'min_length', array(
            ':value',
            '1'
        ))
        //->rule('lastname', 'max_length', array(':value', '30'))
        ->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '4'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '4'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('phone', 'max_length', array(
            ':value',
            '20'
        ))
        //->rule('phone', 'phone', array(':value'))
        ->rule('phone', 'contact_phone', array(
            ':value'
        ))->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ))->rule('company_name', 'not_empty')->rule('company_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('company_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('company_name', 'Model_Add::checkcompany', array(
            ':value',
            $arr['country'],
            $arr['state'],
            $arr['city']
        ))->rule('domain_name', 'not_empty')->rule('domain_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('domain_name', 'max_length', array(
            ':value',
            '60'
        ))->rule('domain_name', 'alpha_numeric', array(
            ':value',
            '/^[0-9]{1,}/'
        ))->rule('domain_name', 'Model_Add::checkdomain', array(
            ':value'
        ))->rule('address', 'not_empty')
		->rule('country', 'not_empty')
		->rule('state', 'not_empty')
		->rule('city', 'not_empty')
		->rule('company_address', 'not_empty')
		->rule('currency_code', 'not_empty')
		->rule('currency_symbol', 'not_empty')
		->rule('taxi_image', 'Upload::not_empty', array(
            $files_value_array['taxi_image']
        ))->rule('taxi_image', 'Upload::valid', array(
            $files_value_array['taxi_image']
        ))->rule('time_zone', 'not_empty');
		/* ->rule('paypal_api_username','not_empty')
        ->rule('paypal_api_password','not_empty')
        ->rule('paypal_api_signature','not_empty')
        ->rule('payment_method','not_empty') */
    }
    /**Validating for Add company**/
    public function validate_addmoderator($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')->rule('name', 'min_length', array(
            ':value',
            '4'
        ))->rule('name', 'max_length', array(
            ':value',
            '30'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('sales_person_email', 'not_empty')->rule('sales_person_email', 'email')->rule('sales_person_email', 'max_length', array(
            ':value',
            '50'
        ))->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('phone', 'max_length', array(
            ':value',
            '20'
        ))
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', array(
            ':value'
        ))->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ))->rule('company_name', 'not_empty')->rule('company_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('company_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('domain_name', 'not_empty')->rule('domain_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('domain_name', 'max_length', array(
            ':value',
            '60'
        ))->rule('domain_name', 'alpha_numeric', array(
            ':value',
            '/^[0-9]{1,}/'
        ))->rule('domain_name', 'Model_Add::checkdomain', array(
            ':value'
        ))->rule('no_of_taxi', 'not_empty')->rule('no_of_taxi', 'numeric')->rule('message', 'not_empty')->rule('time_zone', 'not_empty');
    }
    /**Validating for Add Taxi**/
    public function validate_addtaxi($arr, $files_value_array = "")
    {
        $rule = Validation::factory($arr)
		->rule('taxi_no', 'not_empty')
		->rule('taxi_no', 'min_length', array(
            ':value',
            '4'
        ))->rule('taxi_no', 'max_length', array(
            ':value',
            '30'
        ))
        //->rule('taxi_no', 'alpha_numeric', array(':value','/^[0-9]{1,}/'))
            ->rule('taxi_no', 'regex', array(
            ':value',
            '/^[a-z0-9A-Z -]++$/iD'
        ))->rule('taxi_no', 'Model_Add::check_taxino', array(
            ':value'
        ))->rule('taxi_type', 'not_empty')
			->rule('taxi_model', 'not_empty')
			->rule('taxi_stream_channel', 'not_empty')
			->rule('taxi_owner_name', 'not_empty')
			->rule('taxi_manufacturer', 'not_empty')
			->rule('taxi_colour', 'not_empty')
			->rule('taxi_motor_expire_date', 'not_empty')
			->rule('taxi_insurance_number', 'not_empty')
			->rule('taxi_insurance_number', 'Model_Add::check_taxinsurance_number', array(
            ':value'
        ))->rule('taxi_insurance_expire_date', 'not_empty')
			->rule('taxi_pco_licence_number', 'not_empty')
			->rule('taxi_pco_licence_number', 'Model_Add::check_taxipco_number', array(
            ':value'
        ))->rule('taxi_pco_licence_expire_date', 'not_empty')
			//->rule('country', 'not_empty')
			//->rule('state', 'not_empty')->rule('city', 'not_empty')
		//	->rule('company_name', 'not_empty')
			->rule('taxi_min_speed', 'not_empty') /*->rule('taxi_capacity', 'not_empty')
        ->rule('taxi_capacity', 'min_length', array(':value', '1'))
        ->rule('taxi_capacity', 'max_length', array(':value', '20'))
        ->rule('taxi_capacity', 'digit', array(':value','/^[0-9]{1,}/'))*/
			->rule('taxi_fare_km', 'not_empty')
			->rule('taxi_fare_km', 'min_length', array(
            ':value',
            '1'
        ))->rule('taxi_fare_km', 'max_length', array(
            ':value',
            '20'
        ))->rule('taxi_fare_km', 'digit', array(
            ':value',
            '/^[0-9]{1,}/'
        ));
        /*->rule('file', 'Upload::not_empty',array($files_value_array['taxi_image']))
        ->rule('file', 'Upload::type', array($files_value_array['taxi_image'], array('jpg','jpeg', 'png', 'gif')))
        ->rule('file', 'Upload::size', array($files_value_array['taxi_image'],'2M'));*/
       
 return $rule;
    }
    /**Validating for Add Taxi**/
    public function validate_addfield($arr)
    {
        $rule = Validation::factory($arr)->rule('field_labelname', 'not_empty')->rule('field_labelname', 'min_length', array(
            ':value',
            '2'
        ))->rule('field_labelname', 'max_length', array(
            ':value',
            '20'
        ))->rule('field_name', 'not_empty')->rule('field_name', 'min_length', array(
            ':value',
            '2'
        ))->rule('field_name', 'max_length', array(
            ':value',
            '20'
        ))->rule('field_name', 'small_letters', array(
            ':value'
        ))->rule('field_name', 'Model_Add::checkfieldname', array(
            ':value'
        ))->rule('field_type', 'not_empty');
        if ($arr['field_type'] != 'Textbox') {
            //$rule = $rule->rule('field_value', 'not_empty');
        }
        return $rule;
    }
    public static function checkfieldname($name)
    {
        // Check if the username already exists in the database
        $result = DB::select('field_name')->from(MANAGEFIELD)->where('field_name', '=', $name)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    /**Validating for Add Motor**/
    public function validate_addmotor($arr)
    {
        return Validation::factory($arr)->rule('companyname', 'not_empty')
        //->rule('country_name', 'alpha_dash')
            ->rule('companyname', 'min_length', array(
            ':value',
            '2'
        ))->rule('companyname', 'max_length', array(
            ':value',
            '30'
        ))->rule('companyname', 'Model_Add::checkmotorname', array(
            ':value'
        ));
    }
    /**Validating for Add Motor**/
    public function validate_addmodel($arr)
    {
        $validation = Validation::factory($arr)->rule('model_name', 'not_empty')
        //->rule('model_name', 'alpha_dash')
            ->rule('model_name', 'min_length', array(
            ':value',
            '2'
        ))->rule('model_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('model_name', 'Model_Add::checkmodelname', array(
            ':value',
            $arr['companyname']
        ))->rule('model_size', 'not_empty')->rule('model_size', 'Model_Edit::check_fare_zero', array(
            ':value',
            $arr['model_size']
        ))->rule('companyname', 'not_empty')->rule('waiting_time', 'not_empty')->rule('waiting_time', 'Model_Add::check_waiting_time', array(
            ':value',
            $arr['waiting_time']
        ))->rule('base_fare', 'not_empty')->rule('base_fare', 'Model_Add::check_base_fare', array(
            ':value',
            $arr['base_fare']
        ))->rule('min_km', 'not_empty')->rule('min_km', 'Model_Add::check_min_km', array(
            ':value',
            $arr['min_km']
        ))->rule('min_fare', 'not_empty')->rule('min_fare', 'Model_Add::check_min_fare', array(
            ':value',
            $arr['min_fare']
        ))->rule('cancellation_fare', 'not_empty')->rule('cancellation_fare', 'Model_Add::check_cancellation_fare', array(
            ':value',
            $arr['cancellation_fare']
        ))->rule('minutes_fare', 'not_empty')->rule('minutes_fare', 'Model_Edit::check_minute_fare', array(
            ':value',
            $arr['minutes_fare']
        ))->rule('below_and_above_km', 'not_empty')->rule('below_and_above_km', 'Model_Add::check_below_and_above_km', array(
            ':value',
            $arr['min_km']
        ))->rule('below_km', 'not_empty')->rule('below_km', 'Model_Add::check_below_km', array(
            ':value',
            $arr['below_km']
        ))->rule('above_km', 'not_empty')->rule('above_km', 'Model_Add::check_above_km', array(
            ':value',
            $arr['above_km']
        ))->rule('night_charge', 'not_empty');
        if (Arr::get($arr, 'night_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('night_timing_from', 'not_empty')->rule('night_timing_to', 'not_empty')->rule('night_fare', 'not_empty')->rule('night_fare', 'Model_Add::check_night_fare', array(
                ':value',
                $arr['night_fare']
            ));
        }
        return $validation;
    }
    /**Validating for Add Motor**/
    public function validate_addfare($arr)
    {
        $validation = Validation::factory($arr)->rule('model_name', 'not_empty')->rule('model_size', 'not_empty')->rule('model_size', 'Model_Edit::check_fare_zero', array(
            ':value',
            $arr['model_size']
        ))->rule('waiting_time', 'not_empty')->rule('waiting_time', 'Model_Add::check_waiting_time', array(
            ':value',
            $arr['waiting_time']
        ))->rule('base_fare', 'not_empty')->rule('base_fare', 'Model_Add::check_base_fare', array(
            ':value',
            $arr['base_fare']
        ))->rule('min_km', 'not_empty')->rule('min_km', 'Model_Add::check_min_km', array(
            ':value',
            $arr['min_km']
        ))->rule('min_fare', 'not_empty')->rule('min_fare', 'Model_Add::check_min_fare', array(
            ':value',
            $arr['min_fare']
        ))->rule('cancellation_fare', 'not_empty')->rule('cancellation_fare', 'Model_Add::check_cancellation_fare', array(
            ':value',
            $arr['cancellation_fare']
        ))->rule('below_and_above_km', 'not_empty')->rule('below_and_above_km', 'Model_Add::check_below_and_above_km', array(
            ':value',
            $arr['min_km']
        ))->rule('below_and_above_km', 'Model_Add::check_value_zero', array(
            ':value',
            $arr['below_and_above_km']
        ))->rule('below_km', 'not_empty')->rule('below_km', 'Model_Add::check_below_km', array(
            ':value',
            $arr['below_km']
        ))->rule('above_km', 'not_empty')->rule('above_km', 'Model_Add::check_above_km', array(
            ':value',
            $arr['above_km']
        ))->rule('minutes_fare', 'not_empty')->rule('minutes_fare', 'Model_Add::check_minute_fare', array(
            ':value',
            $arr['minutes_fare']
        ))->rule('night_charge', 'not_empty')->rule('evening_charge', 'not_empty');
        if (Arr::get($arr, 'night_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('night_timing_from', 'not_empty')->rule('night_timing_to', 'not_empty')->rule('night_fare', 'not_empty')->rule('night_fare', 'Model_Add::check_night_fare', array(
                ':value',
                $arr['night_fare']
            ))->rule('night_fare', 'Model_Admin::check_percentage', array(
                ':value'
            ));
        }
        if (Arr::get($arr, 'evening_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('evening_timing_from', 'not_empty')->rule('evening_timing_to', 'not_empty')->rule('evening_fare', 'not_empty')->rule('evening_fare', 'Model_Add::check_evening_fare', array(
                ':value',
                $arr['evening_fare']
            ))->rule('evening_fare', 'Model_Admin::check_percentage', array(
                ':value'
            ));
        }
        return $validation;
    }
    /**Validating for Add company**/
    public function validate_adddriver($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('username', 'alpha_dash')
            ->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')
        //->rule('username', 'alpha_dash')
            
        //->rule('lastname', 'min_length', array(':value', '4'))
            
        //->rule('lastname', 'max_length', array(':value', '30'))
            ->rule('dob', 'not_empty')->rule('phone', 'not_empty')
        //->rule('phone','Model_Add::check_valid_phone_number',array(':value','/^[0-9()-+]*$/u'))
            
        //->rule('phone', 'alpha_numeric')
            
        //->rule('phone', 'max_length', array(':value', '10'))
            
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', array(
            ':value'
        ))
        // Client Request
        //->rule('phone', 'Model_Add::checkphone', array(
            //':value'
        //))
        // Client Request
        ->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '6'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '6'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))->rule('driver_license_id', 'not_empty')
			->rule('driver_license_id', 'max_length', array(
            ':value',
            '30'
        ))->rule('driver_license_id', 'Model_Add::checklicenceId', array(
            ':value'
        ))->rule('driver_license_expire_date', 'not_empty')
			->rule('driver_pco_license_number', 'not_empty')
			->rule('driver_pco_license_number', 'max_length', array(
            ':value',
            '30'
        ))->rule('driver_pco_license_number', 'Model_Add::checkpcolicenceNo', array(
            ':value'
        ))->rule('driver_pco_license_expire_date', 'not_empty')
			->rule('driver_insurance_number', 'not_empty')
			->rule('driver_insurance_number', 'max_length', array(
            ':value',
            '30'
        ))->rule('driver_insurance_number', 'Model_Add::checkinsuranceNo', array(
            ':value'
        ))->rule('driver_insurance_expire_date', 'not_empty')
		->rule('driver_national_insurance_number', 'not_empty')
		->rule('driver_national_insurance_number', 'max_length', array(
            ':value',
            '30'
        ))->rule('driver_national_insurance_number', 'Model_Add::checkNationalinsuranceNo', array(
            ':value'
        ))->rule('driver_national_insurance_expire_date', 'not_empty')
		->rule('address', 'not_empty')
		//->rule('country', 'not_empty')
		//->rule('state', 'not_empty')
		//->rule('company_name', 'not_empty')
		->rule('booking_limit', 'not_empty')
		->rule('booking_limit', 'numeric')
		->rule('booking_limit', 'Model_Add::check_booking_limit', array(
            ':value',
            $arr['booking_limit']
        ))
        // Client Request
        ->rule('driver_code_prefix', 'not_empty')
        ->rule('driver_code_prefix', 'alpha')
        ->rule('driver_code_suffix', 'not_empty')
        ->rule('driver_code_suffix', 'numeric')
		// Client Request
		//->rule('city', 'not_empty')
		->rule('photo', 'Upload::not_empty', array(
            $arr['photo']
        ))->rule('photo', 'Upload::type', array(
            ':value',
            array(
                'jpeg',
                'jpg',
                'png',
                'gif'
            )
        ))->rule('website_photo', 'Upload::type', array(
            ':value',
            array(
                'jpeg',
                'jpg',
                'png',
                'gif'
            )
        ))->rule('facebook_account', 'url')
        ->rule('instagram_account', 'url')
        ->rule('twitter_account', 'url');
    }
    //To Add company Functionalities 
    public function addcompany($post, $path)
    {
        //echo '<pre>';print_r($post);//exit;
		// MongoDB Query Starts here
        $image_data = getimagesize($path['taxi_image']['tmp_name']);
        if (isset($image_data['mime'])) {
            $password        = Html::chars(md5($post['password']));
            $upgrade_package = $post['upgrade_package'];
            $upgrade_packid  = $post['pack'];
            $current_date    = convert_timezone('now', $post['time_zone']);
            
			//people collection data and inserts hee
			//Get the last object id
			$people_rs = $this->mongo_db->find(MDB_PEOPLE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
			$people_res = iterator_to_array($people_rs);
			reset($people_res);
			$people_first_key = key($people_res);
			$company_userid = $people_first_key+1;
			$people_data = array('_id'=>$company_userid,
                'name' => $post['firstname'],
                'address' => $post['address'],
                'lastname' => $post['lastname'],
                'email' => $post['email'],
                'phone' => (int)$post['phone'],
                'password' => $password,
                'org_password' => $post['password'],
                'login_country' => (int)$post['country'],
                'login_state' => (int)$post['state'],
                'login_city' => (int)$post['city'],
                'created_date' => $current_date,
                'user_type' => 'C',
                'status' => ACTIVE
            );
			$people_result = $this->mongo_db->insert(MDB_PEOPLE,$people_data);
			//print_r($people_result);//exit;			
			//Company Collection Data
			//Get the last object id
			$company_rs = $this->mongo_db->find(MDB_COMPANY,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
			$company_res = iterator_to_array($company_rs);
			reset($company_res);
			$company_first_key = key($company_res);
			$reg_companyid = $company_first_key+1;
			$company_data = array(
				'company_name' => $post['company_name'],
				'company_address' => $post['company_address'],
				'company_country' => (int)$post['country'],
				'company_state' => (int)$post['state'],
				'company_city' => (int)$post['city'],
				'userid' => (int)$company_userid,
				'time_zone' => $post['time_zone'],
				'header_bgcolor' => '#FFFFFF',
				'menu_color' => '#000000',
				'mouseover_color' => '#FFD800',
				'company_status' => ACTIVE				
            );			
			//Company info data
			$key      = "";
            $charset  = "abcdefghijklmnopqrstuvwxyz";
            $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $charset .= "0123456789";
            $length = mt_rand(30, 35);
            for ($i = 0; $i < $length; $i++):
                $key .= $charset[(mt_rand(0, (strlen($charset) - 1)))];
			endfor;
			$company_info_data = array(
                'company_domain' => $post['domain_name'],
                'company_app_name' => $post['company_name'],
                'company_currency' => $post['currency_symbol'],
                'company_currency_format' => $post['currency_code'],
                'company_notification_settings' => 60,
                'company_api_key' => $key,
                "customer_app_url" => "http://".$post['domain_name'].".taximobility.com/",
				"driver_app_url" => "http://".$post['domain_name'].".taximobility.com/",	
				"company_app_description" => "Taxi dispatch system & software | TaxiMobility",
				"company_meta_title" => "Demo |TaxiMobility",
				"company_meta_keyword" => "Taxi dispatch system & software | TaxiMobility",
				"company_meta_description" => "Login to the Demo version of Taxi Mobility for taxi companies to examine the features and technologies of Admin panel, dispatcher panel and Mobile apps.",
				"company_email_id" => "info@taxifargo.com",
				"company_phone_number" => (int)"7013532222",
				"company_created_date" => $current_date,
				"company_update_date" => "0000-00-00 00:00:00",        
				"payment_method" => "T",
				"company_paypal_username" => "taximobility2014-demo-1_api1.gmail.com",
				"company_paypal_password" => "NQU3M7RYM4WDQ76X",
				"company_paypal_signature" => "Ar8joD.HQLUKM9fXAQZt7J17cHr1AoIh-xNW1RlH.Hh4YtptHl0zshfc",
				"company_tagline" => "Taxi dispatch system",
				"company_copyrights" => "TaxiMobility. All Rights Reserved",
				"company_logo" => $post['company_name'].".png",
				"company_favicon" => "fav_demo",
				"company_facebook_key" => (int)"493260600783836",
				"company_facebook_secretkey" => "9b6a22aa0cfcca55106420597b9ddd1c",
				"company_facebook_share" => "https://facebook.com/taximobility",
				"company_twitter_share" => "https://twitter.com/taximobility",
				"company_google_share" => "http://".$post['domain_name'].".taximobility.com/",
				"company_linkedin_share" => "http://".$post['domain_name'].".taximobility.com/",
				"company_tax" => "15",
				"cancellation_fare" => "1",
				"company_sms_enable" => 0,
				"passenger_setting" => 2,
				"company_time_zone" => "",
				"home_page_title" => "Taxi dispatch system & software | TaxiMobility",
				"home_page_content" => "Brand your company with personalized app.",
				"default_unit" => "1",
				"skip_credit_card" => "0",
				"fare_calculation_type" => "2",
            );
			//Dispatch Algorithm with company collection
			$dispatch_algorithm_data = array(
                'labelname' => 1,
                'alg_created_by' => (int)$company_userid,
                'active' => 1,
                'hide_customer' => 0,
                'hide_droplocation' => 0,
                'hide_fare' => 0
            );
			
			//Payment module data with company collection
			$payment_module_data = array();
			foreach ($post['payid'] as $k => $id) {
                $default = ($id == $post['default'][0])?1:0;
                $paystatus = (in_array($id, $post['paymodstatus']))?1:0;
				$payment_module_data[] = array(
					'pay_mod_id' => (int)$post['payid'][$k],
					'pay_mod_name' => $post['paymodname'][$k],
					'pay_mod_image' => $post['paymodimage'][$k],
					'pay_active' => (int)$paystatus,
					'pay_mod_default' => (int)$default
				);
			}
			
			//Company CMS Data And inset with company collection            
            $pages    = array(
                'About us',
                'Privacy policy',
                'Servicing for Excellence',
                'Terms and Conditions',
                'Help'
            );
            $page_url = array(
                'aboutus',
                'privacypolicy',
                'service-area',
                'termsconditions',
                'help'
            );
			$cms_data = array();
			for ($i = 0; $i < 5; $i++) {
                $cms_data[] = array(
                    'menu_name' => $pages[$i],
                    'title' => $pages[$i],
                    'content' => $pages[$i],
                    'page_url' => $page_url[$i],
                    'type'=>1
                );
			}
			$company_insert = array('_id' => $reg_companyid,
				'companydetails'=> $company_data,
				'companyinfo' => $company_info_data,
				'dispatch_algorithm'=>$dispatch_algorithm_data,
				'company_cms' => $cms_data,
				'paymentmodule'=>$payment_module_data,
				'model_fare' => array()
			);
			$company_result = $this->mongo_db->insert(MDB_COMPANY,$company_insert);
			//print_r($company_result);//exit;
			
			// Company Image
            $image_name = $company_userid;
            $filename   = Upload::save($path['taxi_image'], $image_name, DOCROOT . COMPANY_IMG_IMGPATH);
            $logo_image = Image::factory($filename);
            $path1      = DOCROOT . COMPANY_IMG_IMGPATH;
            $path       = $image_name;
            $image_data = Commonfunction::multipleimageresize($logo_image, COMPANY_IMG_WIDTH, COMPANY_IMG_HEIGHT, $path1, $image_name, 90);
            // End Company Image
			
			//update company id with People Collection
			 $update_people = $this->mongo_db->update(MDB_PEOPLE,array('_id'=>$company_userid),array('$set'=>(array('company_id' => $reg_companyid))),array('upsert'=>true));
			 
            //Update company package details
            if ($upgrade_package == 'D') {
                $get_packagedetails = $this->payment_packagedetails($upgrade_packid);
                $package_name       = $get_packagedetails['package_name'];
                $no_of_taxi         = $get_packagedetails['no_of_taxi'];
                $no_of_driver       = $get_packagedetails['no_of_driver'];
                $days               = $get_packagedetails['days_expire'];
                $amount             = $get_packagedetails['package_price'];
                $package_type       = $get_packagedetails['package_type'];
                $userid             = $this->user_createdby;
                // Convert Time
                $current_time       = convert_timezone('now', $post['time_zone']);
                // Convert Time
                if ($days > 0) {
                    $expirydate = Commonfunction::getExpiryTimeStamp($current_time, $days);
                } else {
                    $expirydate = $current_time;
                }
				//Get the last object id
				$package_rs = $this->mongo_db->find(MDB_PACKAGE_REPORT,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
				$package_res = iterator_to_array($package_rs);
				reset($package_res);
				$package_first_key = key($package_res);
				$package_id = $package_first_key+1;
				//Package Report Data
				$package_report_data = array('_id'=> $package_id,
                    'upgrade_companyid' => (int)$reg_companyid,
                    'upgrade_packageid' => (int)$upgrade_packid,
                    'upgrade_packagename' => $package_name,
                    'upgrade_no_taxi' => (int)$no_of_taxi,
                    'upgrade_no_driver' => (int)$no_of_driver,
                    'upgrade_expirydate' => $expirydate,
                    'upgrade_ack' => 'Success',
                    'upgrade_capture' => 1,
                    'upgrade_amount' => (float)$amount,
                    'upgrade_type' => 'D',
                    'upgrade_by' => (int)$userid,
                    'check_expirydate' => $expirydate,
                    'check_package_type' => $package_type
                );
				$package_result = $this->mongo_db->insert(MDB_PACKAGE_REPORT,$package_report_data);
			}
			 return (!empty($package_result) && empty($package_result['err']))?1:0;
		} else {
			return 2;
		}
		// MongoDB Query Ends here
		
		/*$image_data = getimagesize($path['taxi_image']['tmp_name']);
        if (isset($image_data['mime'])) {
            $password        = Html::chars(md5($post['password']));
            $upgrade_package = $post['upgrade_package'];
            $upgrade_packid  = $post['pack'];
            $current_date    = convert_timezone('now', $post['time_zone']);
			$result          = DB::insert(PEOPLE, array(
                'name',
                'address',
                'lastname',
                'email',
                'paypal_account',
                'phone',
                'password',
                'org_password',
                'login_country',
                'login_state',
                'login_city',
                'created_date',
                'user_type',
                'status'
            ))->values(array(
                $post['firstname'],
                $post['address'],
                $post['lastname'],
                $post['email'],
                '',
                $post['phone'],
                $password,
                $post['password'],
                $post['country'],
                $post['state'],
                $post['city'],
                $current_date,
                'C',
                ACTIVE
            ))->execute();
            $company_userid  = $result[0];
            $in_company      = DB::insert(COMPANY, array(
                'company_name',
                'company_address',
                'company_country',
                'company_state',
                'company_city',
                'userid',
                'time_zone',
                'header_bgcolor',
                'menu_color',
                'mouseover_color'
            ))->values(array(
                $post['company_name'],
                $post['company_address'],
                $post['country'],
                $post['state'],
                $post['city'],
                $company_userid,
                $post['time_zone'],
                '#FFFFFF',
                '#000000',
                '#FFD800'
            ))->execute();
            $reg_companyid   = $in_company[0];
			
			
            /** ADD for Payment Models for comapny //
            foreach ($post['payid'] as $k => $id) {
                if ($id == $post['default'][0]) {
                    $default = '1';
                } else {
                    $default = '0';
                }
                if (in_array($id, $post['paymodstatus'])) {
                    $paystatus = "1";
                } else {
                    $paystatus = '';
                }
                $pay_result = DB::insert('company_payment_module', array(
                    'company_id',
                    'company_user_id',
                    'pay_mod_id',
                    'pay_mod_name',
                    'pay_mod_image',
                    'pay_active',
                    'pay_mod_default'
                ))->values(array(
                    $reg_companyid,
                    $company_userid,
                    $post['payid'][$k],
                    $post['paymodname'][$k],
                    $post['paymodimage'][$k],
                    $paystatus,
                    $default
                ))->execute();
				
            }
            
            /** ADD for subdomain Data Base Creation //
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
                $company_userid,
                $reg_companyid,
                1,
                0,
                0,
                0
            ))->execute();
			
            $key      = "";
            $charset  = "abcdefghijklmnopqrstuvwxyz";
            $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $charset .= "0123456789";
            $length = mt_rand(30, 35);
            for ($i = 0; $i < $length; $i++):
                $key .= $charset[(mt_rand(0, (strlen($charset) - 1)))];
			endfor;
            DB::insert(COMPANYINFO, array(
                'company_cid',
                'company_domain',
                'company_app_name',
                'company_currency',
                'company_currency_format',
                'company_paypal_username',
                'company_paypal_password',
                'company_paypal_signature',
                'payment_method',
                'company_notification_settings',
                'company_api_key'
            ))->values(array(
                $reg_companyid,
                $post['domain_name'],
                $post['company_name'],
                $post['currency_symbol'],
                $post['currency_code'],
                '',
                '',
                '',
                '',
                '60',
                $key
            ))->execute();
			
            
            $cms      = DB::insert(COMPANY_CMS, array(
                'company_id',
                'menu_name',
                'title',
                'content',
                'page_url',
                'type'
            ));
            
            $pages    = array(
                'About us',
                'Privacy policy',
                'Servicing for Excellence',
                'Terms and Conditions',
                'Help'
            );
            $page_url = array(
                'aboutus',
                'privacypolicy',
                'service-area',
                'termsconditions',
                'help'
            );
            for ($i = 0; $i < 5; $i++) {
                $cms->values(array(
                    $reg_companyid,
                    $pages[$i],
                    $pages[$i],
                    $pages[$i],
                    $page_url[$i],
                    1
                ));
                if ($i == 0) {
                    $srcfile = DOCROOT . PUBLIC_IMAGES_FOLDER . 'header_banner_bg.jpg';
                    $dstfile = DOCROOT . PUBLIC_UPLOAD_BANNER_FOLDER . $reg_companyid . '_header_banner_bg.jpg';
                    copy($srcfile, $dstfile);
                    $image_name   = $reg_companyid . '_header_banner_bg.jpg';
                    $banner_image = DB::insert(COMPANY_CMS, array(
                        'company_id',
                        'image_tag',
                        'alt_tags',
                        'banner_image',
                        'type'
                    ));
                    $banner_image->values(array(
                        $reg_companyid,
                        "image1",
                        "image1",
                        $image_name,
                        2
                    ));
                    $banner_image->execute();
                }
            }
            $cms->execute();
            //$banner_image->execute();
            // Company Image	
            // image
            $image_name = $company_userid;
            $filename   = Upload::save($path['taxi_image'], $image_name, DOCROOT . COMPANY_IMG_IMGPATH);
            $logo_image = Image::factory($filename);
            $path1      = DOCROOT . COMPANY_IMG_IMGPATH;
            $path       = $image_name;
            Commonfunction::multipleimageresize($logo_image, COMPANY_IMG_WIDTH, COMPANY_IMG_HEIGHT, $path1, $image_name, 90);
            // End Company Image
            $update_people = DB::update(PEOPLE)->set(array(
                'company_id' => $reg_companyid
            ))->where('id', '=', $company_userid)->execute();
            if ($upgrade_package == 'D') {
                $get_packagedetails = $add_company->payment_packagedetails($upgrade_packid);
                $package_name       = $get_packagedetails[0]['package_name'];
                $no_of_taxi         = $get_packagedetails[0]['no_of_taxi'];
                $no_of_driver       = $get_packagedetails[0]['no_of_driver'];
                $days               = $get_packagedetails[0]['days_expire'];
                $amount             = $get_packagedetails[0]['package_price'];
                $package_type       = $get_packagedetails[0]['package_type'];
                $userid             = $this->user_createdby;
                // Convert Time
                $current_time       = convert_timezone('now', $post['time_zone']);
                // Convert Time
                if ($days > 0) {
                    $expirydate = Commonfunction::getExpiryTimeStamp($current_time, $days);
                } else {
                    $expirydate = $current_time;
                }
				
                $result = DB::insert(PACKAGE_REPORT, array(
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
                ))->values(array(
                    $in_company[0],
                    $upgrade_packid,
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
                ))->execute();
            }
			
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 2;
        } */
    }
    public function check_array($value = "")
    {
        if (!empty($value)) {
            return true;
        } else {
            return false;
        }
    }
    //To Add Taxi Functionalities 
    public function addtaxi($post, $image, $files,$encodeString,$filename)
    {
		$taxi_createdby   = $this->user_createdby;
        $cid         = $post['company_name'];
		//Get count of uploaded with taxi multiple images
        if (isset($files['size']['name'])) {
            $count = count($files['size']['name']);
        } else {
            $count = 0;
        }
        /*$result           = DB::insert(TAXI, array(
            'taxi_no',
            'taxi_type',
            'taxi_model',
            'taxi_company',
            'taxi_owner_name',
            'taxi_manufacturer',
            'taxi_colour',
            'taxi_motor_expire_date',
            'taxi_insurance_number',
            'taxi_insurance_expire_date_time',
            'taxi_pco_licence_number',
            'taxi_pco_licence_expire_date',
            'taxi_country',
            'taxi_state',
            'taxi_city',
            'taxi_capacity',
            'taxi_speed',
            'taxi_min_speed',
            'max_luggage',
            'taxi_fare_km',
            'taxi_createdby',
            'taxi_status',
            'taxi_image',
            'taxi_sliderimage'
        ))->values(array(
            $post['taxi_no'],
            $post['taxi_type'],
            $post['taxi_model'],
            $post['company_name'],
            $post['taxi_owner_name'],
            $post['taxi_manufacturer'],
            $post['taxi_colour'],
            $post['taxi_motor_expire_date'],
            $post['taxi_insurance_number'],
            $post['taxi_insurance_expire_date'],
            $post['taxi_pco_licence_number'],
            $post['taxi_pco_licence_expire_date'],
            $post['country'],
            $post['state'],
            $post['city'],
            '',
            $post['taxi_speed'],
            $post['taxi_min_speed'],
            $post['minimum_luggage'],
            $post['taxi_fare_km'],
            $taxi_createdby,
            ACTIVE,
            $image,
            $count
        ))->execute(); //$post['taxi_capacity']
        
        $taxi_arrcount = array();
        for ($i = 0; $i < $count; $i++) {
            $file_array             = array();
            $file_array['name']     = $files['size']['name'][$i];
            $file_array['type']     = $files['size']['type'][$i];
            $file_array['tmp_name'] = $files['size']['tmp_name'][$i];
            $file_array['error']    = $files['size']['error'][$i];
            $image_name             = $taxi_id . '_' . $i;
            $taxi_arrcount[]        = $i;
            $filename               = Upload::save($file_array, $image_name, DOCROOT . TAXI_IMG_IMGPATH);
            $logo_image             = Image::factory($filename);
            $path1                  = DOCROOT . TAXI_IMG_IMGPATH;
            $path                   = $image_name;
            Commonfunction::multipleimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
        }
        $update_arrimage = serialize($taxi_arrcount);
        $updatequery     = " UPDATE " . TAXI . " SET taxi_serializeimage='$update_arrimage' wHERE taxi_id = '$taxi_id' ";
        $updateresult    = Db::query(Database::UPDATE, $updatequery)->execute();
        return ($result)?1:0;*/
	
	    $post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
		//MongoDB
		$rs = $this->mongo_db->find(MDB_TAXI,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $taxi_id = $first_key+1;
		$taxi_data = array('_id' => (int)$inc_id,
            'taxi_no' => $post['taxi_no'],
            'taxi_type' => (int)$post['taxi_type'],
            'taxi_model' => (int)$post['taxi_model'],
            'taxi_company' => (int)$post['company_name'],
            'taxi_owner_name' => $post['taxi_owner_name'],
            'taxi_manufacturer' => $post['taxi_manufacturer'],
            'taxi_colour' => $post['taxi_colour'],
            'taxi_motor_expire_date' => $post['taxi_motor_expire_date'],
            'taxi_insurance_number' => $post['taxi_insurance_number'],
            'taxi_insurance_expire_date_time' => $post['taxi_insurance_expire_date'],
            'taxi_pco_licence_number' => $post['taxi_pco_licence_number'],
            'taxi_pco_licence_expire_date' => $post['taxi_pco_licence_expire_date'],
            'taxi_country' => (int)$post['country'],
            'taxi_state' => (int)$post['state'],
            'taxi_city' => (int)$post['city'],
            'taxi_capacity' => 0,
            'taxi_speed' => (float)$post['taxi_speed'],
            'taxi_min_speed' => (float)$post['taxi_min_speed'],
            //'max_luggage' => (int)$post['minimum_luggage'],
            'taxi_fare_km' => (float)$post['taxi_fare_km'],
            'taxi_createdby' => (int)$taxi_createdby,
            'taxi_status' => ACTIVE,
			'taxi_availability' => ACTIVE,
            'taxi_image' => $image,
            'taxi_sliderimage' => (int)$count,
            'starting_km' => "0",            
            'qrencodeString' => $encodeString,            
            'qr_image_path' => $filename ,           
            'live_stream_channel' => $post['taxi_stream_channel']           
        );
		$result = $this->mongo_db->insert(MDB_TAXI,$taxi_data);
		//echo '<pre>';print_r($result);exit;
		//Upload taxi multiple images here and we can get images in front end based on this more images count
		$taxi_arrcount = array();
        for ($i = 0; $i < $count; $i++) {
            $file_array             = array();
            $file_array['name']     = $files['size']['name'][$i];
            $file_array['type']     = $files['size']['type'][$i];
            $file_array['tmp_name'] = $files['size']['tmp_name'][$i];
            $file_array['error']    = $files['size']['error'][$i];
            $image_name             = $taxi_id . '_' . $i;
            $taxi_arrcount[]        = $i;
            $filename               = Upload::save($file_array, $image_name, DOCROOT . TAXI_IMG_IMGPATH);
            $logo_image             = Image::factory($filename);
            $path1                  = DOCROOT . TAXI_IMG_IMGPATH;
            $path                   = $image_name;
            Commonfunction::multipleimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
        }
        $update_arrimage = serialize($taxi_arrcount);
		return (empty($result['err']))?1:0;
    }
    //To check the fare exist for the model
    public function check_fare_exist($comny_id, $modelid)
    {
        /*$result  = DB::select()->from(COMPANY_MODEL_FARE)->where(COMPANY_MODEL_FARE . '.company_cid', '=', $comny_id)->where(COMPANY_MODEL_FARE . '.model_id', '=', $modelid)->execute()->as_array();
        $result1 = count($result);
        return $result1;*/
		
		//MongoDB
		$result = $this->mongo_db->count(MDB_COMPANY,array('_id'=>(int)$comny_id,'model_fare.model_id'=>(int)$modelid),array('_id','model_fare.model_id'));
		//echo '<pre>';print_r($result);exit;
		return $result;
    }
    //To Add Motor company Functionalities 
    public static function addmotor($post)
    {
        $result = DB::insert(MOTORCOMPANY, array(
            'motor_name',
            'motor_status'
        ))->values(array(
            $post['companyname'],
            ACTIVE
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    //To Add Motor company Functionalities 
    public static function addfield($post)
    {
        $result       = DB::insert(MANAGEFIELD, array(
            'field_labelname',
            'field_name',
            'field_type',
            'field_value',
            'field_status'
        ))->values(array(
            $post['field_labelname'],
            $post['field_name'],
            $post['field_type'],
            $post['field_value'],
            ACTIVE
        ))->execute();
        $fetch_result = DB::select()->from(MANAGEFIELD)->execute()->as_array();
        $order_id     = count($fetch_result);
        $result       = DB::update(MANAGEFIELD)->set(array(
            'field_order' => $order_id
        ))->where('field_id', '=', $result[0])->execute();
        DB::query(5, "ALTER TABLE taxi_additional_field ADD " . $post['field_name'] . " varchar(250)  NOT NULL")->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
	
    //To Add Model Functionalities
    public static function addmodel($post)
    {
        $result = DB::insert(MOTORMODEL, array(
            'model_name',
            'model_size',
            'model_status',
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
            'evening_charge',
            'evening_timing_from',
            'evening_timing_to',
            'evening_fare',
            'waiting_time',
            'min_km',
            'below_above_km',
            'minutes_fare'
        ))->values(array(
            $post['model_name'],
            $post['model_size'],
            ACTIVE,
            $post['companyname'],
            $post['base_fare'],
            $post['min_fare'],
            $post['cancellation_fare'],
            $post['below_km'],
            $post['above_km'],
            $post['night_charge'],
            $post['night_timing_from'],
            $post['night_timing_to'],
            $post['night_fare'],
            $post['evening_charge'],
            $post['evening_timing_from'],
            $post['evening_timing_to'],
            $post['evening_fare'],
            $post['waiting_time'],
            $post['min_km'],
            $post['below_and_above_km'],
            $post['minutes_fare']
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
	
    //To Add Fare Functionalities
    public function addfare($post)
    {
        $company_id = $this->company_id;
        /*$model_name = DB::select("model_name")->from(MOTORMODEL)->where('model_status', '=', 'A')->where('model_id', '=', $post['model_name'])->execute()->as_array();
        if ($model_name) {
            $result = DB::insert(COMPANY_MODEL_FARE, array(
                'model_id',
                'model_name',
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
                'evening_charge',
                'evening_timing_from',
                'evening_timing_to',
                'evening_fare',
                'min_km',
                'below_above_km',
                'minutes_fare',
                'model_size',
                'waiting_time'
            ))->values(array(
                $post['model_name'],
                $model_name['0']['model_name'],
                $company_id,
                $post['companyname'],
                $post['base_fare'],
                $post['min_fare'],
                $post['cancellation_fare'],
                $post['below_km'],
                $post['above_km'],
                $post['night_charge'],
                $post['night_timing_from'],
                $post['night_timing_to'],
                $post['night_fare'],
                $post['evening_charge'],
                $post['evening_timing_from'],
                $post['evening_timing_to'],
                $post['evening_fare'],
                $post['min_km'],
                $post['below_and_above_km'],
                $post['minutes_fare'],
                $post['model_size'],
                $post['waiting_time']
            ))->execute();
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
		
		 if (isset($post['driver_tracking'])) {
            $driver_tracking = 'S';
        } else {
            $driver_tracking = 'N';
        }
		*/
		
		//MongoDB
		//Get the last object id
		$model_id = $post['model_name'];
		$rs = $this->mongo_db->find(MDB_MOTOR_MODEL,array('model_status'=>array('$eq'=>'A'), "_id"=>(int)$model_id), array('model_name'));
		$result = iterator_to_array($rs); 
		if (!empty($result)) {
			$query = array(
				'model_id' => (int)$model_id,
				'model_name' => $result[$model_id]['model_name'],
				'fare_status' => "A",
				'company_cid' => (int)$company_id,
				'motor_mid' => (int)$post['companyname'],
				'base_fare' => (float)$post['base_fare'],
				'min_fare' => (float)$post['min_fare'],
				'cancellation_fare' => (float)$post['cancellation_fare'],
				'below_km' => (float)$post['below_km'],
				'above_km' => (float)$post['above_km'],
				'night_charge' => (float)$post['night_charge'],
				'night_timing_from' => $post['night_timing_from'],
				'night_timing_to' => $post['night_timing_to'],
				'night_fare' => (float)$post['night_fare'],
				'evening_charge' => (float)$post['evening_charge'],
				'evening_timing_from' => $post['evening_timing_from'],
				'evening_timing_to' => $post['evening_timing_to'],
				'evening_fare' => (float)$post['evening_fare'],
				'min_km' => (float)$post['min_km'],
				'below_above_km' => (float)$post['below_and_above_km'],
				'minutes_fare' => (float)$post['minutes_fare'],
				'model_size' => (int)$post['model_size'],
				'waiting_time' => $post['waiting_time']
			);
			//echo "<pre>"; print_r($query); exit;
			$model_fare_array = array("model_fare" =>$query );
			$result = $this->mongo_db->update(MDB_COMPANY,array('_id'=>(int)$company_id),array('$push'=>$model_fare_array),array('upsert'=>false));
			return (empty($result['err']))?1:0;
		} else {
            return 0;
        }
    }
    //To Add Fare Functionalities 
    public function exist_models($model_id)
    {
		$id = $this->company_id;
        /*$result     = DB::select()->from(COMPANY_MODEL_FARE)->where(COMPANY_MODEL_FARE . '.company_cid', '=', $company_id)->where(COMPANY_MODEL_FARE . '.model_id', '=', $model_id)->execute()->as_array();
        return $result;*/
	
		$result = $this->mongo_db->find(MDB_COMPANY,array("_id"=>(int)$id, "model_fare.model_id"=>(int)$model_id ),array("model_fare"));
		$res = iterator_to_array($result);
		return (!empty($res))?$res:array();
    }
    //To Add company Functionalities 
    public function add_driver($post, $filename,$web_image_name='')
    {
        $post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
		$password       = Html::chars(md5($post['password']));
        $user_createdby = $this->user_createdby;
        $cid            = $post['company_name'];

        $post['facebook_account'] = isset($post['facebook_account'])?$post['facebook_account']:'';
        $post['instagram_account'] = isset($post['instagram_account'])?$post['instagram_account']:'';
        $post['twitter_account'] = isset($post['twitter_account'])?$post['twitter_account']:'';
        $post['driver_description'] = isset($post['driver_description'])?$post['driver_description']:'';
        $post['driver_description_arabic'] = isset($post['driver_description_arabic'])?$post['driver_description_arabic']:'';

        if(isset($post['website_show']) && $post['website_show'] ==1 ){
            $web_status = 1;
        }else{
            $web_status = 0;
        }       

        $current_date   = date('Y-m-d H:i:s', time());
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_PEOPLE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		///Driver Code///
		$driver_code = $post['driver_code_prefix'].$post['driver_code_suffix'];
		///Driver Code///
		$param = array(
			'_id' => $inc_id,
			'name'=>$post['firstname'],
			'address'=>$post['address'],
			'lastname'=>$post['lastname'],
			///Driver Code///
			'driver_code'=>$driver_code,
			///Driver Code///
			'gender'=>$post['gender'],
			'dob'=> new MongoDate(strtotime($post['dob'])),
			'email'=>$post['email'],
			'phone'=>$post['phone'],
			'password'=>$password,
			'org_password'=>$post['password'],
			'created_date' => new MongoDate(strtotime($current_date)),
			'user_type' => 'D',
			'status' => ACTIVE,
			'user_createdby' => (int)$user_createdby,
			'login_country' => (int)$post['country'],
			'login_state' => (int)$post['state'],
			'login_city' => (int)$post['city'],
			'login_status' => "N",
			'company_id' => (int)$post['company_name'],
			'driver_license_id' => $post['driver_license_id'],
			'booking_limit' => (int)$post['booking_limit'],
			'profile_picture' => $filename,
			'notification_setting' => 0,
			'login_from' => 'D',
			'device_token' =>'',
			'device_id' =>'',
			'device_type' =>'',
			'availability_status' => 'A', // for checking package purpose
            'facebook_account'=>$post['facebook_account'],
            'instagram_account'=>$post['instagram_account'],
            'twitter_account'=>$post['twitter_account'],
            'driver_description'=>$post['driver_description'],
            'driver_description_arabic'=>$post['driver_description_arabic'],
            'website_show'=>(int)$web_status,
            'web_image_name'=>$web_image_name,
		);
		$result = $this->mongo_db->insert(MDB_PEOPLE,$param);
		//print_r($result);exit;
        $driver_id      = $inc_id;
		$query = $this->mongo_db->find(MDB_DRIVER_INFO,array('_id'=> (int)$driver_id),array('_id'));
		$result = iterator_to_array($query);
        if (count($result) == 0) {
			/*
			$arguments = array(array('$unwind' => '$stateinfo'),array('$unwind' => '$stateinfo.cityinfo'),
				array('$match' => array('_id'=> (int)$post['country'],'stateinfo.state_id'=> (int)$post['state'],'stateinfo.cityinfo.city_id'=> (int)$post['city'],'stateinfo.cityinfo.city_status' => 'A')),
				array('$project' => array('_id' => 0,'city_name' => '$stateinfo.cityinfo.city_name',)),
				array('$sort' => array('stateinfo.cityinfo.city_name' => 1),)
			);
			$cityresult = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			$cityresult = $cityresult['result'];*/
            $address    = $post['address'];
           /* $address    = str_replace(' ', '+', $address);
            $url        = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
            $ch         = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $geoloc = curl_exec($ch);
            //print_r($geoloc);
            $json   = json_decode($geoloc);
            if (isset($json->status) == 'OK' && $json != '') {
				if(isset($json->results[0])) {
					$latitude  = $json->results[0]->geometry->location->lat;
					$longitude = $json->results[0]->geometry->location->lng;
				} else {
					$latitude  = LOCATION_LATI;
					$longitude = LOCATION_LONG;
				}
            } else {
                $latitude  = LOCATION_LATI;
                $longitude = LOCATION_LONG;
            }*/
            
            $latitude = $post['latitude'];
            $longitude = $post['longitude'];
			$dt = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
			$ts = $dt->getTimestamp();
			$today = new MongoDate($ts);
			$insert_data = array(
				'_id' => $driver_id,
				'status'=>'F',
				'shift_status' => 'OUT',
				'update_date' => $today,
				'loc'=>array('type' => 'Point', 'coordinates'=>array((double)$longitude,(double)$latitude)),
			);
			$result = $this->mongo_db->insert(MDB_DRIVER_INFO,$insert_data);
        }
        if ($result) {
			$driver_insert_data = array(
						'driverinfo' =>array(array(
								'driver_license_expire_date' => new MongoDate(strtotime($post['driver_license_expire_date'])),
								'driver_pco_license_number' => $post['driver_pco_license_number'],
								'driver_pco_license_expire_date'=> new MongoDate(strtotime($post['driver_pco_license_expire_date'])),
								'driver_insurance_number'=>(int)$post['driver_insurance_number'],
								'driver_insurance_expire_date'=> new MongoDate(strtotime($post['driver_insurance_expire_date'])),
								'driver_national_insurance_number'=>$post['driver_national_insurance_number'],
								'driver_national_insurance_expire_date'=> new MongoDate(strtotime($post['driver_national_insurance_expire_date'])))));			
			$result = $this->mongo_db->update(MDB_DRIVER_INFO,array('_id'=>(int)$driver_id),array('$set'=>$driver_insert_data),array('upsert'=>false));
            return $driver_id;
        } else {
            return 0;
        }
    }
    // To Check User Name is Already Available or Not
    public static function checkusername($name)
    {
        // Check if the username already exists in the database
        $result = DB::select('username')->from(PEOPLE)->where('username', '=', $name)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check User Name is Already Available or Not
    public static function check_taxino($name)
    {
        /*// Check if the username already exists in the database
        $result = DB::select('taxi_no')->from(TAXI)->where('taxi_no', '=', $name)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,array('taxi_no'=>$name),array('taxi_no'));
		return ($result>0)?false:true;
    }
    // To Check Motorname is Already Available or Not
    public static function checkmotorname($name)
    {
        // Check if the username already exists in the database
        $result = DB::select('motor_name')->from(MOTORCOMPANY)->where('motor_name', '=', $name)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check Motorname is Already Available or Not
    public static function checkmodelname($name, $motorid)
    {
        // Check if the username already exists in the database
        $result = DB::select('model_name')->from(MOTORMODEL)->where('model_name', '=', $name)->where('motor_mid', '=', $motorid)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check Taxi Name is Already Available or Not
    public static function checktaxiname($name)
    {
        // Check if the username already exists in the database
        $result = DB::select('taxi_name')->from(TAXI)->where('taxi_name', '=', $name)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check Company Name is Already Available or Not
    public static function checkcompany($companyname, $country, $state, $city)
    {
       /* $result = DB::select('company_name')->from(COMPANY)->where('company_name', '=', $companyname)->where('company_country', '=', $country)->where('company_state', '=', $state)->where('company_city', '=', $city)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_COMPANY,array('company_name'=>$companyname,'company_country'=>(int)$country,'company_state'=>(int)$state,'company_city'=>(int)$city));
		return ($result>0)?false:true;
    }
    // To Check Company Domain is Already Available or Not
    public static function checkdomain($domainname)
    {
        /*$result = DB::select('company_domain')->from(COMPANYINFO)->where('company_domain', '=', $domainname)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_COMPANY,array('company_domain'=>$domainname));
		return ($result>0)?false:true;
    }
    // To Check Company Domain is Already Available or Not
    public static function checkcompanydomain($domainname)
    {
		
        /*$result = DB::select('company_domain')->from(COMPANYINFO)->where('company_domain', '=', $domainname)->execute()->as_array();
        return (count($result) > 0)?1:0;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_COMPANY,array('company_domain'=>$domainname));
		return ($result > 0)?1:0;
    }
    // Check Whether Email is Already Exist or Not
    public static function checkemail($email = "")
    {
        /*$result = DB::select('email')->from(PEOPLE)->where('email', '=', $email)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('email'=>$email));
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    // Check Whether Email is Already Exist or Not
    public static function checkphone($phone = "")
    {
        /*$result = DB::select('phone')->from(PEOPLE)->where('phone', '=', $phone)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('phone'=>$phone));
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    public static function checkphone_autocreate($phone = "")
    {
        $phone  = $phone . '1';
        /*$result = DB::select('phone')->from(PEOPLE)->where('phone', '=', $phone)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('phone'=>(int)$phone));
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    // Check Whether Motor details is Already Exist or Not
    /*public function motor_details()
    {
        $result = DB::select()->from(MOTORCOMPANY)->where('motor_status', '=', 'A')->order_by('motor_name', 'asc')->execute()->as_array();
        return $result; 
    } */
	
	// Check Whether Motor details is Already Exist or Not
    public function modeldetails()
    {	
		$result = $this->mongo_db->find(MDB_MOTOR_MODEL,array("model_status"=>array('$eq'=> "A")),array("_id","model_name"))->sort(array('model_name'=>1));
		$res = iterator_to_array($result);
        return $res;
    }
    // Get the Additional Field for Taxi
    public static function taxi_additionalfields()
    {
        $result = DB::select()->from(MANAGEFIELD)->where('field_status', '=', 'A')->order_by('field_order', 'asc')->execute()->as_array();
        //	print_r($result);
        return $result;
    }
    /**Validating for Add Motor**/
    public function validate_addpackage($arr)
    {
        return Validation::factory($arr)->rule('package_name', 'not_empty')->rule('package_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('package_name', 'max_length', array(
            ':value',
            '100'
        ))->rule('package_name', 'Model_Add::checkpackagename', array(
            ':value',
            $arr['package_name']
        ))->rule('package_description', 'not_empty')->rule('package_description', 'min_length', array(
            ':value',
            '20'
        ))->rule('no_of_taxi', 'not_empty')->rule('no_of_taxi', 'Model_Edit::check_fare_zero', array(
            ':value'
        ))->rule('no_of_taxi', 'digit')->rule('no_of_driver', 'not_empty')->rule('no_of_driver', 'Model_Edit::check_fare_zero', array(
            ':value'
        ))->rule('no_of_driver', 'digit')->rule('days_expire', 'not_empty')->rule('days_expire', 'Model_Edit::check_fare_zero', array(
            ':value'
        ))->rule('days_expire', 'digit')->rule('package_price', 'not_empty')->rule('package_price', 'numeric');
    }
    // To Check Company Name is Already Available or Not
    public static function checkpackagename($packagename)
    {
        // Check if the username already exists in the database
        $result = DB::select('package_name')->from(PACKAGE)->where('package_name', '=', $packagename)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    //To Add company Functionalities 
    public function add_package($post)
    {
        if (isset($post['driver_tracking'])) {
            $driver_tracking = 'S';
        } else {
            $driver_tracking = 'N';
        }
       /* $result = DB::insert(PACKAGE, array(
            'package_name',
            'package_description',
            'no_of_taxi',
            'no_of_driver',
            'package_price',
            'days_expire',
            'package_status',
            'package_type',
            'driver_tracking'
        ))->values(array(
            $post['package_name'],
            $post['package_description'],
            $post['no_of_taxi'],
            $post['no_of_driver'],
            $post['package_price'],
            $post['days_expire'],
            ACTIVE,
            $post['package_type'],
            $driver_tracking
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_PACKAGE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		$query = array(
			'_id' => $inc_id,
            'package_name' => $post['package_name'],
            'package_description' => $post['package_description'],
            'no_of_taxi' => $post['no_of_taxi'],
            'no_of_driver' => $post['no_of_driver'],
            'package_price' => $post['package_price'],
            'days_expire' => $post['days_expire'],
			'package_status' => ACTIVE,
			'package_type' => $post['package_type'],
			'driver_tracking' => $driver_tracking
        );
		$result = $this->mongo_db->insert(MDB_PACKAGE,$query);
		return (empty($result['err']))?1:0;
    }
    /**Validating for Add Country**/
    public function validate_addcountry($arr)
    {
        //print_r($arr);
        //exit;
        return Validation::factory($arr)->rule('country_name', 'not_empty')
        //->rule('country_name', 'alpha_dash')
            ->rule('country_name', 'Model_Add::check_reg_countryname', array(
            ':value'
        ))->rule('country_name', 'min_length', array(
            ':value',
            '2'
        ))->rule('country_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('country_name', 'Model_Add::checkcountryname', array(
            ':value'
        ))->rule('iso_country_code', 'not_empty')->rule('iso_country_code', 'min_length', array(
            ':value',
            '2'
        ))->rule('iso_country_code', 'max_length', array(
            ':value',
            '5'
        ))->rule('iso_country_code', 'Model_Add::checkisocountrycode', array(
            ':value'
        ))->rule('telephone_code', 'not_empty')->rule('telephone_code', 'min_length', array(
            ':value',
            '2'
        ))->rule('telephone_code', 'max_length', array(
            ':value',
            '5'
        ))->rule('currency_code', 'not_empty')->rule('currency_code', 'min_length', array(
            ':value',
            '2'
        ))->rule('currency_code', 'max_length', array(
            ':value',
            '5'
        ))->rule('currency_symbol', 'not_empty')->rule('currency_symbol', 'max_length', array(
            ':value',
            '5'
        ));
    }
    // To Check Countryname is Already Available or Not
    public static function checkcountryname($name)
    {
        /*$result = DB::select('country_name')->from(COUNTRY)->where('country_name', '=', $name)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->count(MDB_CSC,array( "country_name" => new MongoRegex("/^$name/i")),array('country_name'));
		return ($res > 0)?false:true;
    }
    // To Check Countryname is Already Available or Not
    public static function checkfaqtitle($faq)
    {
        $result = DB::select('faq_title')->from(PASSENGERS_FAQ)->where('faq_title', '=', $faq)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check Countryname is Already Available or Not
    public static function checkisocountrycode($iso_country_code)
    {
        /*$result = DB::select('iso_country_code')->from(COUNTRY)->where('iso_country_code', '=', $iso_country_code)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->count(MDB_CSC,array('iso_country_code'=>new MongoRegex("/^$iso_country_code/i")),array('iso_country_code'));
		return ($res > 0)?false:true;
    }
    //To Add Country Functionalities 
    public function addcountry($post)
    {
        /*$result = DB::insert(COUNTRY, array(
            'country_name',
            'iso_country_code',
            'telephone_code',
            'currency_code',
            'currency_symbol',
            'country_status'
        ))->values(array(
            $post['country_name'],
            $post['iso_country_code'],
            $post['telephone_code'],
            $post['currency_code'],
            $post['currency_symbol'],
            ACTIVE
        ))->execute();		
        return ($result)?1:0;*/
		
		//MongoDB
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_CSC,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		
		$query = array(
			'_id' => $inc_id,
            'country_name' => $post['country_name'],
            'iso_country_code' => $post['iso_country_code'],
            'telephone_code' => $post['telephone_code'],
            'currency_code' => $post['currency_code'],
            'currency_symbol' => $post['currency_symbol'],
            'country_status' => ACTIVE,
			'default' => 0,
			'stateinfo' => array()
        );
		$result = $this->mongo_db->insert(MDB_CSC,$query);
		return (empty($result['err']))?1:0;
    }
    public function country_detail()
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '=', 'A')->order_by('country_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find(MDB_CSC,array('country_status'=>'A'),array('_id','country_name'))->sort(array('country_name'=>1));
		return (!empty($res))?iterator_to_array($res):array();
    }
    public function country_details_new()
    {
        /*$result = DB::select()->from(COUNTRY)->join(STATE)->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where('country_status', '=', 'A')->where('state_status', '=', 'A')->order_by('country_name', 'asc')->group_by(COUNTRY . '.country_id')->execute()->as_array();
        return $result;*/
		//MongoDB
		$result = $this->mongo_db->find(MDB_CSC,array('country_status'=>'A','stateinfo.state_status'=>'A'),array('_id','country_name','default'))->sort(array('country_name'=>1));
		//echo "<pre>";print_r(iterator_to_array($result));exit;
		return (!empty($result))?iterator_to_array($result):array();
    }
	//MongoDB Embedded document search value with assosciative array
    public function form_array($array, $key)
	{
		$results = array();
		if (is_array($array)) {
			$arrval = (isset($array[$key])) ? trim(strtolower($array[$key])) : '';
			//search other than department and role
			if ( !empty($arrval) ) {	
				$results[] = $array;
			}
			foreach ($array as $subarray) {
				$results = array_merge($results, $this->form_array($subarray, $key));
			}
		}
		return $results;
	}
	public function country_details()
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '=', 'A')->order_by('country_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find(MDB_CSC,array('country_status'=>'A'),array('_id','country_name'))->sort(array('country_name'=>1));
		return (!empty($res))?iterator_to_array($res):array();
    }
    public function city_details()
    {
        /*$result = DB::select()->from(CITY)->where('city_status', '=', 'A')->order_by('city_name', 'asc')->execute()->as_array();
        return $result;*/
		//MongoDB
		$ops = array(
			array('$unwind' => '$stateinfo'),
			array('$unwind' => '$stateinfo.cityinfo'),
			/*array('$match' => array('stateinfo.cityinfo.city_status'=>'A','stateinfo.state_id'=>(int)DEFAULT_STATE,'_id'=>(int)DEFAULT_COUNTRY)),*/
			array('$match' => array('stateinfo.cityinfo.city_status'=>'A')),
			array('$project' => array('_id' => 0,
				'city_id' => '$stateinfo.cityinfo.city_id', 
				'city_name' => '$stateinfo.cityinfo.city_name',
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
    public function state_details()
    {
        /*$result = DB::select()->from(STATE)->where('state_status', '=', 'A')->order_by('state_name', 'asc')->execute()->as_array();
        return $result;*/
		//MongoDB
		$ops = array(
			array('$unwind' => '$stateinfo'),
			array('$match' => array('stateinfo.state_status'=>'A')),
			/*array('$match' => array('stateinfo.state_status'=>'A','_id'=>(int)DEFAULT_COUNTRY)),*/
			array('$project' => array('_id' => 0,
				'state_id' => '$stateinfo.state_id', 
				'state_name' => '$stateinfo.state_name',
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
    public function get_city_state_details($countryid)
    {
        if ($countryid) {
            $state_countryid = $countryid;
        } else {
            $state_countryid = DEFAULT_COUNTRY;
        }
        /*$result = DB::select()->from(STATE)->where('state_status', '=', 'A')->where('state_countryid', '=', $state_countryid)->order_by('state_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB with aggregate process only
		$ops = array(
			array('$unwind' => '$stateinfo'),
			array('$match' => array('stateinfo.state_status'=>'A','stateinfo.state_countryid'=>(int)$state_countryid,'stateinfo.default' => 1)),
			array('$project' => array('_id' => 0,
				'state_id' => '$stateinfo.state_id', 
				'state_name' => '$stateinfo.state_name',
				'state_default' => '$stateinfo.default',
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
	public static function getstate_details($country_id)
    {
        /*$result = DB::select()->from(STATE)->join(COUNTRY, 'LEFT')->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where('state_countryid', '=', $country_id)->where('state_status', '=', 'A')->order_by('state_name', 'ASC')->execute()->as_array();
        return $result;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$ops = array(
			array('$unwind' => '$stateinfo'),
			array('$match' => array('stateinfo.state_status'=>'A','stateinfo.state_countryid'=>(int)$country_id)),
			array('$project' => array('_id' => 0,
				'state_id' => '$stateinfo.state_id', 
				'state_name' => '$stateinfo.state_name',
				'state_default' => '$stateinfo.default',
				)
			),
			array(
				'$sort' => array(
					'country_name' => 1
				),
			)
		);
		$result = $mongodb->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:array();
    }
	public static function getcity_details($country_id, $state_id)
    {
        /*$result = DB::select()->from(CITY)->join(STATE, 'LEFT')->on(CITY . '.city_stateid', '=', STATE . '.state_id')->join(COUNTRY, 'LEFT')->on(CITY . '.city_countryid', '=', COUNTRY . '.country_id')->where('city_countryid', '=', $country_id)->where('city_stateid', '=', $state_id)->where('state_status', '=', 'A')->where('city_status', '=', 'A')->order_by('city_name', 'ASC')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$ops = array(
			array('$unwind' => '$stateinfo'),
			array('$unwind' => '$stateinfo.cityinfo'),
			array('$match' => array('stateinfo.cityinfo.city_status'=>'A','stateinfo.state_id'=>(int)$state_id,'_id'=>(int)$country_id)),
			array('$project' => array('_id' => 0,
				'city_id' => '$stateinfo.cityinfo.city_id', 
				'city_name' => '$stateinfo.cityinfo.city_name',
				)
			),
			array(
				'$sort' => array(
					'country_name' => 1
				),
			)
		);
		$result = $mongodb->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:array();
    }
    public function validate_addcity($arr)
    {
        return Validation::factory($arr)->rule('city_name', 'not_empty')
        //->rule('city_name', 'alpha_dash')
            ->rule('city_name', 'Model_Add::check_reg_city_name', array(
            ':value'
        ))->rule('city_name', 'min_length', array(
            ':value',
            '2'
        ))->rule('city_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('city_name', 'Model_Add::checkcityname', array(
            ':value',
            DEFAULT_STATE,//$arr['state_name'],
            DEFAULT_COUNTRY//$arr['country_name']
      //  ))->rule('state_name', 'not_empty')->rule('country_name', 'not_empty')->rule('zipcode', 'not_empty')->rule('city_model_fare', 'not_empty')->rule('city_model_fare', 'numeric');
        ))->rule('zipcode', 'not_empty')/*->rule('city_model_fare', 'not_empty')->rule('city_model_fare', 'numeric')*/;
        //->rule('city_model_fare', 'decimal', array(':value', '2'));
        //->rule('city_model_fare', 'Model_Add::check_base_fare', array(':value',$arr['city_model_fare']));
    }
    public function validate_addstate($arr)
    {
        return Validation::factory($arr)->rule('state_name', 'not_empty')
        //->rule('state_name', 'alpha_dash')
            ->rule('state_name', 'Model_Add::check_reg_state_name', array(
            ':value'
        ))->rule('state_name', 'min_length', array(
            ':value',
            '2'
        ))->rule('state_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('state_name', 'Model_Add::checkstatename', array(
            ':value',
            $arr['country_name']
        ))->rule('country_name', 'not_empty');
    }
    public static function checkcityname($name, $stateid, $id)
    {
        /*$result = DB::select('city_name')->from(CITY)->where('city_name', '=', $name)->where('city_stateid', '=', $stateid)->where('city_countryid', '=', $id)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$country_id = (int)$id;
		$state_id = (int)$stateid;
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->find(MDB_CSC,array( "\$and" => array(array( "stateinfo.cityinfo.city_name" => new MongoRegex("/^$name/i")) , array('_id'=>array('$eq'=>$country_id)),array('stateinfo.state_id'=>array('$eq'=>$state_id)))),array('stateinfo.cityinfo.city_name'))->sort(array('stateinfo.cityinfo.city_id'=>-1));
		$result = (!empty($res))?iterator_to_array($res):array();
		//echo '<pre>';print_r($result);
		return (count($result) > 0)?false:true;
    }
    public static function checkstatename($name, $id)
    {
        /*$result = DB::select('state_name')->from(STATE)->where('state_name', '=', $name)->where('state_countryid', '=', $id)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$cid = (int)$id;
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->find(MDB_CSC,array( "\$and" => array(array( "stateinfo.state_name" => new MongoRegex("/^$name/i")) , array('_id'=>array('$eq'=>$cid)))),array('stateinfo.state_name'))->sort(array('stateinfo.state_id'=>-1));
		$result = (!empty($res))?iterator_to_array($res):array();
		//echo '<pre>';print_r($result);
		return (count($result) > 0)?false:true;
    }
    public function addcity($post)
    {
        /*$result = DB::insert(CITY, array(
            'city_name',
            'zipcode',
            'city_status',
            'city_countryid',
            'city_stateid',
            'city_model_fare'
        ))->values(array(
            $post['city_name'],
            $post['zipcode'],
            ACTIVE,
            $post['country_name'],
            $post['state_name'],
            $post['city_model_fare']
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
        $post['country_name'] = isset($post['country_name'])?$post['country_name']:DEFAULT_COUNTRY;
        $post['state_name'] = isset($post['state_name'])?$post['state_name']:DEFAULT_STATE;
		$country_id = (int)$post['country_name'];
		$state_id = (int)$post['state_name'];
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_CSC,array('_id'=>$country_id,'stateinfo.state_id'=>$state_id),array('stateinfo.cityinfo.$'=>1))->sort(array('stateinfo.cityinfo.city_id'=>-1))->limit(1);
		$result = (!empty($rs))?iterator_to_array($rs):array();
		//echo '<pre>';print_r($result);
		if (!empty($result)){
			$res = (count($result[$country_id]['stateinfo'][0]['cityinfo']) > 0) ? array_reverse($result[$country_id]['stateinfo'][0]['cityinfo']) : 0;
		} else {
			$res = 0;
		}
		//print_r($res);//exit;
		if($res == 0){
			$first_key = 0;
		} else {
			$first_key = $res[0]['city_id'];
		}
		//echo $first_key,'-';
		$inc_id = $first_key+1;
		//echo $inc_id,'-';exit;
		$query = array('city_id' => (int)$inc_id,
			'city_name' =>  $post['city_name'],
            'zipcode' => $post['zipcode'],
            'city_status' => ACTIVE,
            'city_countryid' => $country_id,
            'city_stateid' => $state_id,
            //'city_model_fare' => (float)$post['city_model_fare'],
			'default' => 0
		);
		$state_index = $state_index = commonfunction::get_collection_index($country_id,$state_id,0,'state');
		//print_r($index); //exit;
		$index_key = "stateinfo.".$state_index.".cityinfo";
		//echo $index_key;
		$city_array = array($index_key => $query );
		$mresult = $this->mongo_db->update(MDB_CSC,array('_id'=>$country_id,'stateinfo.state_id'=>$state_id),array('$push'=>$city_array),array('upsert'=>true));
		//echo '<pre>';print_r($mresult);exit;
		return (empty($mresult['err']))?1:$result['errmsg'];
    }
    public function addstate($post)
    {
        /*$result = DB::insert(STATE, array(
            'state_name',
            'state_status',
            'state_countryid'
        ))->values(array(
            $post['state_name'],
            ACTIVE,
            $post['country_name']
        ))->execute();
        return ($result)?1:0;*/
		
		//MongoDB
		$country_id = (int)$post['country_name'];
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_CSC,array('_id'=>$country_id),array('stateinfo.state_id'))->sort(array('stateinfo.state_id'=>-1))->limit(1);		
		$result = (!empty($rs))?iterator_to_array($rs):array();
		//echo '<pre>';print_r($result);
		if (!empty($result)){
			$res = (count($result[$country_id]['stateinfo']) > 0) ? array_reverse($result[$country_id]['stateinfo']) : 0;
		} else {
			$res = 0;
		}
		//print_r($res);
		if($res == 0){
			$first_key = 0;
		} else {
			$first_key = $res[0]['state_id'];
		}
		//echo $first_key,'-';
		$inc_id = $first_key+1;
		//echo $inc_id,'-';exit;
		$query = array("state_id" =>(int)$inc_id,
			"state_name"=>$post['state_name'],
			"state_countryid"=>$country_id,
			"state_status"=>ACTIVE,
			"default"=>0,
			"cityinfo"=>array()
		);
		$state_array = array("stateinfo" =>$query );
		$mresult = $this->mongo_db->update(MDB_CSC,array('_id'=>$country_id),array('$push'=>$state_array),array('upsert'=>true));
		//echo '<pre>';print_r($mresult);exit;
		return (empty($mresult['err']))?1:$result['err'];
    }
    public static function model_details()
    {
        $result = DB::select()->from(MOTORMODEL)->where('model_status', '=', 'A')->order_by('model_name', 'ASC')->execute()->as_array();
        return $result;
    }
    public function model_details_new()
    {
        $company_id = $this->company_id;        
        if (FARE_SETTINGS == 2 && $company_id != 0) //company_id = 0 as Admin
		{
            //$model_base_query = "select distinct " . MOTORMODEL . ".model_id," . COMPANY_MODEL_FARE . ".model_name from " . COMPANY_MODEL_FARE . " left join " . MOTORMODEL . " on " . MOTORMODEL . ".model_id=" . COMPANY_MODEL_FARE . ".model_id where " . COMPANY_MODEL_FARE . ".company_cid='$company_id'";
            //$result           = Db::query(Database::SELECT, $model_base_query)->execute()->as_array(); 
           $arguments = array(
							array('$lookup' => array(
								'from' => MDB_COMPANY,
								'localField' => '_id',
								'foreignField' => 'model_fare.model_id',					
								'as'=> "cdetails"
							)),
							array('$unwind'=>'$cdetails'),
							array('$match'=>array('cdetails._id'=>(int)$company_id)),
							array('$project'=>array('_id'=>'$_id','model_name'=>'$model_name'))
						);
            $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
            $res = $result['result'];
            return (isset($res)?$res:array());
        } else {
            //$result = DB::select()->from(MOTORMODEL)->where('model_status', '=', 'A')->where('motor_mid', '=', '1')->order_by('model_name', 'ASC')->execute()->as_array();
          
            $result = $this->mongo_db->find(MDB_MOTOR_MODEL,array('model_status'=>'A'))->sort(array('_id'=>1));
            $res = iterator_to_array($result);
            return (isset($res)?$res:array());
        }
    }
    public static function getmodel_details($motorid)
    {
        $result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->where('motor_mid', '=', $motorid)->order_by('model_name', 'ASC')->execute()->as_array();
        return $result;
    }
   
    public function taxicompany_details()
    {
        /*$result = DB::select()->from(COMPANY)->where('company_status', '=', 'A')->order_by('company_name', 'asc')->execute()->as_array();
        return $result;*/
		/*$result = $this->mongo_db->find(MDB_COMPANY,array('companydetails.company_status' => 'A'),array('companydetails'))->sort(array('companydetails.company_name' => 1));
		//echo "<pre>"; print_r(iterator_to_array($result)); exit;
		return (!empty($result))?iterator_to_array($result):array();*/
	
		$ops = array(
			array('$unwind' => '$companydetails'),
			array('$match' => array('companydetails.company_status' => 'A')),
			array('$project' => array('cid' => '$_id','company_name' => '$companydetails.company_name')),
			array(
				'$sort' => array(
					'companydetails.country_name' => 1
				),
			)
		);
		$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
		//echo '<pre>';print_r($result['result']);exit;
		return (!empty($result['result']))?$result['result']:array();
    }
    public function getcompany_details($country_id, $state_id, $city_id)
    {
        /*$result = DB::select()->from(COMPANY)->where('company_status', '=', 'A')->where('company_country', '=', $country_id)->where('company_state', '=', $state_id)->where('company_city', '=', $city_id)->order_by('company_name', 'asc')->execute()->as_array();
        return $result;*/
		//echo $country_id."--".$state_id."--".$city_id; exit;
		/*$result = $this->mongo_db->find(MDB_COMPANY,array('companydetails.company_status' => 'A','companydetails.company_country' => (int)$country_id, 'companydetails.company_state' => (int)$state_id, 'companydetails.company_city' => (int)$city_id),array('companydetails'))->sort(array('companydetails.company_name' => 1));
		echo "<pre>"; print_r(iterator_to_array($result)); exit;
		return (!empty($result))?iterator_to_array($result):array();*/
	
		$ops = array(
			array('$unwind' => '$companydetails'),
			array('$match' => array('companydetails.company_status' => 'A','companydetails.company_country' => (int)$country_id, 'companydetails.company_state' => (int)$state_id, 'companydetails.company_city' => (int)$city_id)),
			array('$project' => array('cid' => '$_id','company_name' => '$companydetails.company_name')
			),
			array(
				'$sort' => array(
					'companydetails.country_name' => 1
				),
			)
		);
		$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
		//echo '<pre>';print_r($result['result']);exit;
		return (!empty($result['result']))?$result['result']:array();
    }
    public static function getcompanydetails($company_id)
    {
        $result = DB::select()->from(COMPANY)->where('company_status', '=', 'A')->where('cid', '=', $company_id)->order_by('company_name', 'asc')->execute()->as_array();
        return $result;
    }
    public function validate_addmanager($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('firstname', 'alpha_dash') 
            ->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')
        //->rule('lastname', 'alpha_dash')            
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
        ->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('phone', 'not_empty')
        //->rule('phone', 'alpha_numeric')
        ->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('phone', 'max_length', array(
            ':value',
            '20'
        ))
        //->rule('phone', 'phone', array(':value'))
        ->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '4'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '4'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))
        //->rule('company_name', 'not_empty')
        //->rule('company_name', 'alpha_dash')
            
        //->rule('company_name', 'Model_Add::checkmanagercompany', array(':value',$arr['city'],$arr['state'],$arr['country']))
            ->rule('address', 'not_empty')/*->rule('country', 'not_empty')->rule('state', 'not_empty')->rule('city', 'not_empty')*/;
    }
    public function validate_addadmin($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('phone', 'not_empty')
        //->rule('phone', 'alpha_numeric')
            ->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('phone', 'max_length', array(
            ':value',
            '20'
        ))->rule('phone', 'contact_phone', array(
            ':value'
        ))->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '4'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '4'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))->rule('address', 'not_empty')->rule('country', 'not_empty');
    }
    public static function checkmanagercompany($companyname, $cityid, $stateid, $countryid)
    {
        $result = DB::select()->from(PEOPLE)->where('company_id', '=', $companyname)->where('login_country', '=', $countryid)->where('login_state', '=', $stateid)->where('login_city', '=', $cityid)->where('user_type', '=', 'M')->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function addmanager($post)
    {
        $password          = Html::chars(md5($post['password']));
        $manager_createdby = $this->user_createdby;
        $current_date      = date('Y-m-d H:i:s', time());
        /*$result            = DB::insert(PEOPLE, array(
            'name',
            'address',
            'lastname',
            'email',
            'phone',
            'password',
            'org_password',
            'created_date',
            'user_type',
            'status',
            'login_country',
            'login_state',
            'login_city',
            'company_id',
            'user_createdby'
        ))->values(array(
            $post['firstname'],
            $post['address'],
            $post['lastname'],
            $post['email'],
            $post['phone'],
            $password,
            $post['password'],
            $current_date,
            'M',
            ACTIVE,
            $post['country'],
            $post['state'],
            $post['city'],
            $post['company_name'],
            $manager_createdby
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
		
		$post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
		
		
		$rs = $this->mongo_db->find(MDB_PEOPLE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		$query = array(
			'_id' => (int)$inc_id,
			'name' => $post['firstname'],
            'address' =>  $post['address'],
            'lastname' =>  $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'password' => $password,
            'org_password' => $post['password'],
            'created_date' => $current_date,
            'user_type' => 'M',
            'status' => ACTIVE,
            'login_country' => (int)$post['country'],
            'login_state' => (int)$post['state'],
            'login_city' => (int)$post['city'],
            'company_id' => (int)$post['company_name'],
            'user_createdby' => (int)$manager_createdby
        );
		$result = $this->mongo_db->insert(MDB_PEOPLE,$query);
		return (empty($result['err']))?1:0;
    }
	
	public function insert_promocode($insert_array)
	{
		$rs = $this->mongo_db->find(MDB_PASSENGERS_PROMO,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
                $type = isset($insert_array['promo_type'])?1:2; 
                if($type == 1)
                {
                    $query = array(
			'_id' => (int)$inc_id,
                        'company_id' =>  (int)$insert_array['company_id'],
                        'promocode' =>  $insert_array['promocode'],
                        'package' =>(int) $insert_array['package'],
                        'start_date' => new MongoDate(strtotime($insert_array['start_date'])),
                        'expire_date' => new MongoDate(strtotime($insert_array['expire_date'])),
                        'promo_limit' => (int)$insert_array['promo_limit'],
                        'promo_type' => (string) $insert_array['promo_type'],
                        'createdate' => new MongoDate(strtotime($insert_array['createdate'])),
                        'fixed_fare_amt'=>(int)$insert_array['fixed_fare_amt'],
                        /* Sasidharan apr 15 2022 */
                        /* 
                            0 -> Normal promocode
                            1 -> Corporate promocode                            
                        */

                        'corporate_promocode'=> (isset($insert_array['corporate_promocode']) && !empty($insert_array['corporate_promocode'])) ? (int)$insert_array['corporate_promocode'] : 0,
                        'total_airport_trips'=> (isset($insert_array['total_airport_trips']) && !empty($insert_array['total_airport_trips'])) ? (int)$insert_array['total_airport_trips'] : 0,
                        /* Sasidharan june 20 - 2022 */
                        'register_promocode'=> (isset($insert_array['register_promocode']) && !empty($insert_array['register_promocode'])) ? (int)$insert_array['register_promocode'] : 0,

                        /* Sasidharan June 12 2024 */
                        'skipCard'=> (isset($insert_array['skipCard']) && !empty($insert_array['skipCard'])) ? (int)$insert_array['skipCard'] : 0,

                        /* Sasidharan july 16 2022 */
                        'apply_user_limit'=> (isset($insert_array['apply_user_limit']) && !empty($insert_array['apply_user_limit'])) ? (int)$insert_array['apply_user_limit'] : 0,
                        'maximum_allowed_limit'=> (isset($insert_array['maximum_allowed_limit']) && !empty($insert_array['maximum_allowed_limit'])) ? (int)$insert_array['maximum_allowed_limit'] : 0,

                        /* Sasidharan nov 15 2022 */
                        'corporate_group'=> (isset($insert_array['corporate_group']) && !empty($insert_array['corporate_group'])) ? (int)$insert_array['corporate_group'] : "",

                        'total_applied' => 0,
                        'total_used' => 0, 
                    );

                }
                else
                {
                    $query = array(
			'_id' => (int)$inc_id,
			'corporate_id' => (int)$insert_array['corporate_id'],
                        'company_id' =>  (int)$insert_array['company_id'],
                        'promocode' =>  $insert_array['promocode'],
                        //'promo_discount' => $insert_array['promo_discount'],
                        'package' =>(int) $insert_array['package'],
                        'promo_used' => (int)$insert_array['promo_used'],
                        'amount_earned' => (int)$insert_array['amount_earned'],
                        'start_date' => new MongoDate(strtotime($insert_array['start_date'])),
                        'expire_date' => new MongoDate(strtotime($insert_array['expire_date'])),
                        'promo_limit' => (int)$insert_array['promo_limit'],
                        'customer_number' => $insert_array['customer_number'],
                        'customer_email' => $insert_array['customer_email'],
                        'createdate' => new MongoDate(strtotime($insert_array['createdate'])),
                        'fixed_fare_amt'=>(int)$insert_array['fixed_fare_amt'],
                        /* Sasidharan apr 15 2022 */
                        /* 
                            0 -> Normal promocode
                            1 -> Corporate promocode                            
                        */
                        'corporate_promocode'=> (isset($insert_array['corporate_promocode']) && !empty($insert_array['corporate_promocode'])) ? (int)$insert_array['corporate_promocode'] : 0,
                        'total_airport_trips'=> (isset($insert_array['total_airport_trips']) && !empty($insert_array['total_airport_trips'])) ? (int)$insert_array['total_airport_trips'] : 0,
                        /* Sasidharan june 20 - 2022 */
                        'register_promocode'=> (isset($insert_array['register_promocode']) && !empty($insert_array['register_promocode'])) ? (int)$insert_array['register_promocode'] : 0,

                        /* Sasidharan july 16 2022 */
                        'apply_user_limit'=> (isset($insert_array['apply_user_limit']) && !empty($insert_array['apply_user_limit'])) ? (int)$insert_array['apply_user_limit'] : 0,
                        'maximum_allowed_limit'=> (isset($insert_array['maximum_allowed_limit']) && !empty($insert_array['maximum_allowed_limit'])) ? (int)$insert_array['maximum_allowed_limit'] : 0,

                        /* Sasidharan nov 15 2022 */
                        'corporate_group'=> (isset($insert_array['corporate_group']) && !empty($insert_array['corporate_group'])) ? (int)$insert_array['corporate_group'] : "",

                        'total_applied' => 0,
                        'total_used' => 0, 
                    );
                }
		
        	$result = $this->mongo_db->insert(MDB_PASSENGERS_PROMO,$query);
		return (empty($result['err']))?1:0;
	}
	
    public function addadmin($post)
    {
        $password          = Html::chars(md5($post['password']));
        $createdby 		   = $this->user_createdby;
        $current_date      = $this->currentdate;
        /*$result            = DB::insert(PEOPLE, array(
            'name',
            'address',
            'lastname',
            'email',
            'phone',
            'password',
            'org_password',
            'created_date',
            'user_type',
            'account_type',
            'status',
            'login_country',
            'user_createdby'
        ))->values(array(
            $post['firstname'],
            $post['address'],
            $post['lastname'],
            $post['email'],
            $post['phone'],
            $password,
            $post['password'],
            $current_date,
            'S',
            '0',
            ACTIVE,
            $post['country'],
            $manager_createdby
        ))->execute();
        return ($result)?1:0;*/
		
		//MongoDB		
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_PEOPLE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		$data = array(
			'_id' => $inc_id,
            'name' => $post['firstname'],
            'address' => $post['address'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'password' => $password,
            'org_password' => $post['password'],
            'created_date' => $current_date,
            'user_type' => 'S',
            'account_type' => 0,
            'status' => ACTIVE,
            'login_country' => (int)$post['country'],
			'login_state' => 0,
			'login_city' => 0,
            'user_createdby' => $createdby,
        );
		$result = $this->mongo_db->insert(MDB_PEOPLE,$data);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:0;
    }
   /* public function driver_details()
    {
        $user_createdby = $this->userid;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->where('login_country', '=', $country_id)->where('login_state', '=', $state_id)->where('login_city', '=', $city_id)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        }
    }*/
	
	public function driver_details( )
    {
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$match_query                     = array();
		$match_query['user_type'] = 'D';
		$match_query['status']    = 'A';
		$match_query['availability_status']    = 'A';
		if ($usertype == 'M') {
			$match_query['login_country'] = (int)$country_id;
			$match_query['login_state']   = (int)$state_id;
			$match_query['login_city']    = (int)$city_id;
			$match_query['company_id']    = (int)$company_id;
		} else if ($usertype == 'C') {
			$match_query['company_id'] = (int) $company_id;
		}
		$arguments = array(
			array(
				'$match' => $match_query
			),
			array(
				'$sort' => array( 
					'created_date' => -1
				),
			),
			array(
				'$project' => array(
					'id' => '$_id',
					'name' => '$name'
				)
			)
		);
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result'])) ? $result['result'] : array();
	}
	
   /* public function taxi_details()
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(TAXI)->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(TAXI)->where('taxi_company', '=', $company_id)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(TAXI)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        }
    } */
	
	public function taxi_details( )
    {
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
	  
		$match_query                     = array();
		$match_query['taxi_status'] = 'A';
		$match_query['taxi_availability']    = 'A';
		if ($usertype == 'M') {
			$match_query['taxi_country'] = (int)$country_id;
			$match_query['taxi_state']   = (int)$state_id;
			$match_query['taxi_city']    = (int)$city_id;
			$match_query['taxi_company']    = (int)$company_id;
		} else if ($usertype == 'C') {
			$match_query['taxi_company'] = (int) $company_id;
		}
		$arguments = array(
			array(
				'$match' => $match_query
			),
			array(
				'$sort' => array( 
					'_id' => -1
				),
			),
			array(
				'$project' => array(
					'taxi_id' => '$_id',
					'taxi_no' => '$taxi_no'
				)
			)
		);
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result'])) ? $result['result'] : array();
	}
	
    public function getassignedlist($country_id = '', $state_id = '', $city_id = '', $company_name = '', $driver_id = '', $taxi_id = '', $startdate = '', $enddate = '', $offset = '', $val = '', $find_count = FALSE)
    {
		//print_r('country_id='.$country_id.', state_id='.$state_id.', city_id='.$city_id.', company_name='.$company_name.', driver_id='.$driver_id.', taxi_id='.$taxi_id.', startdate='.$startdate.', enddate='.$enddate); exit;
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = ($company_name!="")?$company_name:$this->company_id;
		$country_id     = ($country_id!="")?$country_id:$this->country_id;
		$state_id      	= ($state_id!="")?$state_id:$this->state_id;
		$city_id      	= ($city_id!="")?$state_id:$this->city_id;
		$match_query = array();
		$match_query['mapping._id'] = array('$gte' => 0);
		if ($usertype == 'C' && $company_id!=0) {
			$match_query['mapping.mapping_companyid'] = (int)$company_id;
        }
        if ($usertype == 'M' && $company_id!=0) {
			$match_query['mapping.mapping_companyid'] = (int)$company_id;
			$match_query['mapping.mapping_countryid'] = (int)$country_id;
			$match_query['mapping.mapping_stateid'] = (int)$state_id;
			$match_query['mapping.mapping_cityid'] = (int)$city_id;
        }
		
		if ($driver_id) {
			$match_query['mapping.mapping_driverid'] = (int)$driver_id;
		}
		if ($taxi_id) {
			$match_query['mapping.mapping_taxiid'] = (int)$taxi_id;
		}
		
		if ($startdate && $enddate) {
			$match_query['mapping.mapping_startdate'] = array('$gte' => $startdate);
			$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
		}else{
			if ($startdate) {
				$match_query['mapping.mapping_startdate'] = array('$gte' => $startdate);
				$match_query['mapping.mapping_enddate'] = array('$lt' => $startdate);
			}
			if ($enddate) {
				$match_query['mapping.mapping_startdate'] = array('$gte' => $enddate);
				$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
			}
		}	
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = array(
			array(
				'$unwind' => '$stateinfo'
			),
			array(
				'$unwind' => '$stateinfo.cityinfo'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'mapping_countryid',
					'foreignField' => 'mapping_cityid',
					'as' => 'mapping'
				)
			),
			array(
				'$unwind' => '$mapping'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI,
					'localField' => 'mapping.mapping_taxiid',
					'foreignField' => '_id',
					'as' => 'taxi'
				)
			),
			array(
				'$unwind' => '$taxi'
			),
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'mapping.mapping_companyid',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				)
			),
			array(
				'$unwind' => '$people'
			),
			array(
				'$match' => $match_query
			),
		);
		if($find_count==TRUE){
			$count_arguments = array(
				array(
					'$project' => array(
						'result' => '$mapping._id'
					)
				),
				array(
					'$group' => array(
						'_id' => NULL,
						'count' => array(
							'$sum' => 1
						)
					)
				)
			);
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		}else{
			$field_arguments = array(
				array(
					'$sort' => array( 
						'mapping.mapping_createdate' => -1
					),
				),
				array(
					'$project' => array(
						'id' => '$mapping._id',
						'name' => '$people.name',
						'taxi_no' => '$taxi.taxi_no',
						'company_name' => '$company.companydetails.company_name',
						'country_name'=>'$country_name',
						'city_name'=>'$stateinfo.cityinfo.city_name',
						'mapping_status' => '$mapping.mapping_status',
						'mapping_startdate' => '$mapping.mapping_startdate',
						'mapping_enddate' => '$mapping.mapping_enddate',
						
					)
				),
				array('$skip'	=> (int)$offset ),
				array('$limit'	=> (int)$val )
			);
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : array();
		}
		
    }
    public function validate_addassigntaxi($arr)
    {
        return Validation::factory($arr)->rule('company_name', 'not_empty')->rule('country', 'not_empty')->rule('state', 'not_empty')->rule('city', 'not_empty')->rule('driver', 'not_empty')->rule('startdate', 'not_empty')->rule('enddate', 'not_empty')->rule('enddate', 'Model_Add::checkassigntaxi', array(
            ':value',
            $arr
        ))->rule('taxi', 'not_empty');
    }
   /* public static function checkassigntaxi($enddate, $post)
    {
        $country_id      = $post['country'];
        $state_id        = $post['state'];
        $city_id         = $post['city'];
        $company_name    = $post['company_name'];
        $driver_id       = $post['driver'];
        $taxi_id         = $post['taxi'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
        $driver_where    = '';
        $taxi_where      = '';
        $cond_where      = '';
        $startdate_where = '';
        $date_where      = '';
        $enddate_where   = '';
        if ($driver_id && $taxi_id) {
            $cond_where = "AND (mapping_driverid ='$driver_id' or mapping_taxiid ='$taxi_id')";
        } else {
            if ($driver_id) {
                $driver_where = " AND mapping_driverid = '$driver_id'";
            }
            if ($taxi_id) {
                $taxi_where = " AND mapping_taxiid = '$taxi_id'";
            }
            $cond_where = $driver_where . $taxi_where;
        }
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between mapping_startdate and  mapping_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between mapping_startdcheckassigntaxiate  and  mapping_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query  = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where 1=1 and mapping_status='A' $cond_where  $date_where order by mapping_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
		
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    } */
	
	public static function checkassigntaxi($enddate, $post)
    {
		$country_id      = $post['country'];
        $state_id        = $post['state'];
        $city_id         = $post['city'];
        $company_name    = $post['company_name'];
        $driver_id       = $post['driver'];
        $taxi_id         = $post['taxi'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
		$match_query                     = array();
		$match_query['mapping.mapping_status'] = 'A';
			if ($driver_id) {
			$match_query['mapping.mapping_driverid'] = (int)$driver_id;
		}
		if ($taxi_id) {
			$match_query['mapping.mapping_taxiid'] = (int)$taxi_id;
		}
		
		if ($startdate && $enddate) {
			$match_query['mapping.mapping_startdate'] = array('$gte' => $startdate);
			$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
		}else{
			if ($startdate) {
				$match_query['mapping.mapping_startdate'] = array('$gte' => $startdate);
				$match_query['mapping.mapping_enddate'] = array('$lt' => $startdate);
			}
			if ($enddate) {
				$match_query['mapping.mapping_startdate'] = array('$gte' => $enddate);
				$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
			}
		}
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = array(
			array(
				'$unwind' => '$stateinfo'
			),
			array(
				'$unwind' => '$stateinfo.cityinfo'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'mapping_countryid',
					'foreignField' => 'mapping_cityid',
					'as' => 'mapping'
				)
			),
			array(
				'$unwind' => '$mapping'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI,
					'localField' => 'mapping.mapping_taxiid',
					'foreignField' => '_id',
					'as' => 'taxi'
				)
			),
			array(
				'$unwind' => '$taxi'
			),
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'mapping.mapping_companyid',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				)
			),
			array(
				'$unwind' => '$people'
			),
			array(
				'$match' => $match_query
			),
			array(
				'$project' => array(
					'result' => '$mapping._id'
				)
			),
			array(
				'$group' => array(
					'_id' => NULL,
					'count' => array(
						'$sum' => 1
					)
				)
			)
		);
		//mongo Instance
		$mongo_db        = MangoDB::instance('default');
		$result          = $mongo_db->aggregate(MDB_CSC, $arguments);
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
	
    public static function checkactiveassigntaxi($enddate, $post)
    {
        $country_id      = $post['country'];
        $state_id        = $post['state'];
        $city_id         = $post['city'];
        $company_name    = $post['company_name'];
        $driver_id       = $post['driver'];
        $taxi_id         = $post['taxi'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
        $driver_where    = '';
        $taxi_where      = '';
        $cond_where      = '';
        $startdate_where = '';
        $date_where      = '';
        $enddate_where   = '';
        if ($driver_id && $taxi_id) {
            $cond_where = "AND (mapping_driverid ='$driver_id' or mapping_taxiid ='$taxi_id')";
        } else {
            if ($driver_id) {
                $driver_where = " AND mapping_driverid = '$driver_id'";
            }
            if ($taxi_id) {
                $taxi_where = " AND mapping_taxiid = '$taxi_id'";
            }
            $cond_where = $driver_where . $taxi_where;
        }
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between mapping_startdate and  mapping_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between mapping_startdate  and  mapping_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query  = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where 1=1 and mapping_status='A' $cond_where  $date_where order by mapping_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
  /*  public function addassigntaxi($post)
    {
        $mapping_createdby = $this->user_createdby;
        $result            = DB::insert(TAXIMAPPING, array(
            'mapping_driverid',
            'mapping_taxiid',
            'mapping_companyid',
            'mapping_countryid',
            'mapping_stateid',
            'mapping_cityid',
            'mapping_startdate',
            'mapping_enddate',
            'mapping_status',
            'mapping_createdby'
        ))->values(array(
            $post['driver'],
            $post['taxi'],
            $post['company_name'],
            $post['country'],
            $post['state'],
            $post['city'],
            $post['startdate'],
            $post['enddate'],
            ACTIVE,
            $mapping_createdby
        ))->execute();
        if ($result) {
            $resultquery = DB::select('email', 'name')->from(PEOPLE)->where('id', '=', $post['driver'])->execute()->as_array();
            $details     = array();
            foreach ($resultquery as $key => $res) {
                $details[$key]['taxi_no'] = $this->get_Taxino($post['taxi']);
                $details[$key]['name']    = $res['name'];
                $details[$key]['email']   = $res['email'];
            }
            return $details;
        } else {
            return 0;
        }
    } */
	
	public function addassigntaxi($post)
    {
        $mapping_createdby = $this->user_createdby;
		//people collection data and inserts hee
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_TAXI_DRIVER_MAPPING,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$_id = $first_key+1;
		$insert_data = array('_id'=>$_id,
			'mapping_driverid' => (int)$post['driver'],
            'mapping_taxiid' =>(int)$post['taxi'],
            'mapping_companyid' =>(int)$post['company_name'],
            'mapping_countryid' =>(int)$post['country'],
            'mapping_stateid' => (int)$post['state'],
            'mapping_cityid' =>(int)$post['city'],
            'mapping_startdate' =>$post['startdate'],
            'mapping_enddate' =>$post['enddate'],
            'mapping_status' =>ACTIVE,
            'mapping_createdby' =>$mapping_createdby
		);
		$result = $this->mongo_db->insert(MDB_TAXI_DRIVER_MAPPING,$insert_data);
        if ($result) {
			$arguments = array(
				array(
					'$lookup' => array(
						'from' => MDB_TAXI,
						'localField' => 'mapping_taxiid',
						'foreignField' => '_id',
						'as' => 'taxi'
					)
				),
				array(
					'$unwind' => '$taxi'
				),
				array(
					'$lookup' => array(
						'from' => MDB_PEOPLE,
						'localField' => 'mapping_driverid',
						'foreignField' => '_id',
						'as' => 'people'
					)
				),
				array(
					'$unwind' => '$people'
				),
				array(
					'$match' => array('people._id' => (int)$post['driver'] )
				),
				array(
					'$project' => array(
						'taxi_no' => '$taxi.taxi_no',
						'name' => '$people.name',
						'email' => '$people.email',
					)
				),
			);
			$result          = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING, $arguments);
			$resultquery = (!empty($result['result']) && isset($result['result'])) ? $result['result']: 0;
            return $resultquery;
        } else {
            return 0;
        }
    }
    public function get_Taxino($id)
    {
        $result = DB::select('taxi_no')->from(TAXI)->where('taxi_id', '=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['taxi_no'];
        } else {
            return '';
        }
    }
    public function getdriverdetails($company_id, $country_id, $state_id, $city_id, $usertype)
    {
        $user_createdby = $this->user_createdby;		
		$match_query = array();
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		$match_query['availability_status'] = 'A';
		if ($usertype == 'M') {
			$match_query['login_country'] = (int)$country_id;
			$match_query['login_state']   = (int)$state_id;
			$match_query['login_city']    = (int)$city_id;
			$match_query['company_id']    = (int)$company_id;
		} else if ($usertype == 'C') {
			$match_query['company_id'] = (int) $company_id;
		}
		
		$arguments = array(
			array(
				'$match' => $match_query
			),
			array(
				'$sort' => array( 
					'created_date' => -1
				),
			),
			array(
				'$project' => array(
					'id' => '$_id',
					'name' => '$name'
				)
			)
		);
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result'])) ? $result['result'] : array();
    }
	
	/*public function getdriverdetails($company_id, $country_id, $state_id, $city_id, $usertype)
    {
        $user_createdby = $this->user_createdby;
        if ($usertype == 'M') {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->where('login_country', '=', $country_id)->where('login_state', '=', $state_id)->where('login_city', '=', $city_id)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->where('login_country', '=', $country_id)->where('login_state', '=', $state_id)->where('login_city', '=', $city_id)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(PEOPLE)->where('user_type', '=', 'D')->where('status', '=', 'A')->where('availability_status', '=', 'A')->where('login_country', '=', $country_id)->where('login_state', '=', $state_id)->where('login_city', '=', $city_id)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        }
		
		
    } */
	
		
	public function gettaxidetails($company_id, $country_id, $state_id, $city_id, $usertype)
    {
        $taxi_createdby = $this->user_createdby;
        $match_query = array();
		$match_query['taxi_status'] = 'A';
		$match_query['taxi_availability'] = 'A';
		if ($usertype == 'M') {
			$match_query['taxi_country'] = (int)$country_id;
			$match_query['taxi_state']   = (int)$state_id;
			$match_query['taxi_city']    = (int)$city_id;
			$match_query['taxi_company']    = (int)$company_id;
		} else if ($usertype == 'C') {
			$match_query['taxi_company'] = (int) $company_id;
		}
		$arguments = array(
			array(
				'$match' => $match_query
			),
			array(
				'$sort' => array( 
					'created_date' => -1
				),
			),
			array(
				'$project' => array(
					'taxi_id' => '$_id',
					'taxi_no' => '$taxi_no'
				)
			)
		);
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>";print_r($result); exit;
		return (!empty($result['result'])) ? $result['result'] : array();
    }
	
    /*public function gettaxidetails($company_id, $country_id, $state_id, $city_id, $usertype)
    {
        $taxi_createdby = $this->user_createdby;
        if ($usertype == 'M') {
            $rs = DB::select()->from(TAXI)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(TAXI)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(TAXI)->where('taxi_status', '=', 'A')->where('taxi_availability', '=', 'A')->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        }
    }*/
    public function package_details()
    {
        /*$result = DB::select()->from(PACKAGE)->where('package_status', '=', 'A', 'package_type', '=', 'N')->order_by('package_name', 'asc')->execute()->as_array();
        return $result;*/
		//MongoDB
		$result = $this->mongo_db->find(MDB_PACKAGE,array('package_status'=>'A','package_type'=>'N'))->sort(array('package_name'=>1));
		return (!empty($result))?iterator_to_array($result):array();
    }
    public function payment_packagedetails($packid = 0)
    {
        /*$result = DB::select()->from(PACKAGE)->where('package_status', '=', 'A')//->where('package_type','=','N')
		->where('package_id', '=', $packid)->order_by('package_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_PACKAGE,array('_id'=>(int)$packid));
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:array();
    }
    public function company_timezone($cid)
    {
        $result = DB::select()->from(PEOPLE)->where('company_id', '=', $cid)->where('user_type', '=', 'C')->execute()->as_array();
        if ($result[0]['timezone'] != '') {
            return $result[0]['timezone'];
        } else {
            return 0;
        }
    }
    public function packageupgrade($post, $company_id)
    {
        $upgrade_type = $post['upgrade_type'];
        if (isset($post['upgrade_userid'])) {
            $upgrade_userid = $post['upgrade_userid'];
        } else {
            $upgrade_userid = $this->user_createdby;
        }
        $upgrade_packid     = $post['pack'];
        $get_packagedetails = $this->payment_packagedetails($upgrade_packid);
        $package_name       = $get_packagedetails[0]['package_name'];
        $no_of_taxi         = $get_packagedetails[0]['no_of_taxi'];
        $no_of_driver       = $get_packagedetails[0]['no_of_driver'];
        $days               = $get_packagedetails[0]['days_expire'];
        $amount             = $get_packagedetails[0]['package_price'];
        $package_type       = $get_packagedetails[0]['package_type'];
        $userid             = $this->user_createdby;
        $time_zone          = $this->company_timezone($company_id);
        if ($time_zone == 0) {
            $time_zone = TIMEZONE;
        }
        $upgrade_packagelist = " select * from " . PACKAGE_REPORT . "  where " . PACKAGE_REPORT . ".upgrade_companyid = '$company_id' order by upgrade_expirydate  DESC";
        $upgrade_result      = Db::query(Database::SELECT, $upgrade_packagelist)->execute()->as_array();
        if (count($upgrade_result) > 0) {
            $last_expirydate = $upgrade_result[0]['upgrade_expirydate'];
        } else {
            $last_expirydate = date('Y-m-d H:i:s');
        }
        $last_expirydate = convert_timezone('now', $time_zone);
        if ($upgrade_type == 1) {
            if ($days > 0) {
                $expirydate = Commonfunction::getExpiryTimeStamp($last_expirydate, $days);
                $now        = $expirydate;
            } else {
                $now = $expirydate = $last_expirydate;
            }
            $result = DB::insert(PACKAGE_REPORT, array(
                'upgrade_companyid',
                'upgrade_packageid',
                'upgrade_packagename',
                'upgrade_no_taxi',
                'upgrade_no_driver',
                'upgrade_startdate',
                'upgrade_expirydate',
                'upgrade_ack',
                'upgrade_capture',
                'upgrade_amount',
                'upgrade_type',
                'upgrade_by',
                'check_package_type'
            ))->values(array(
                $company_id,
                $upgrade_packid,
                $package_name,
                $no_of_taxi,
                $no_of_driver,
                $now,
                $expirydate,
                'Success',
                '1',
                $amount,
                'D',
                $userid,
                $package_type
            ))->execute();
        } else {
            if ($days > 0) {
                $expirydate = Commonfunction::getExpiredTimeStamp($last_expirydate, $days);
                $now        = $expirydate;
            } else {
                $now = $expirydate = $last_expirydate;
            }
            $result = DB::insert(PACKAGE_REPORT, array(
                'upgrade_companyid',
                'upgrade_packageid',
                'upgrade_packagename',
                'upgrade_no_taxi',
                'upgrade_no_driver',
                'upgrade_startdate',
                'upgrade_expirydate',
                'upgrade_ack',
                'upgrade_capture',
                'upgrade_amount',
                'upgrade_type',
                'upgrade_by',
                'check_package_type'
            ))->values(array(
                $company_id,
                $upgrade_packid,
                $package_name,
                $no_of_taxi,
                $no_of_driver,
                $last_expirydate,
                $expirydate,
                'Success',
                '1',
                $amount,
                'D',
                $userid,
                $package_type
            ))->execute();
        }
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function validate_package_assigntaxi($cid)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        /*$total_query  = "SELECT people.id ,(select upgrade_no_taxi from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as no_taxi,(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( check_package_type = 'T' or upgrade_expirydate >='$current_time' )";
        $total_result = Db::query(Database::SELECT, $total_query)->execute()->as_array();
        return (count($total_result) > 0)?1:0;*/
		
		//MongoDB
        $arguments = array(
			array('$match'=> array('upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>array('$gte' => $current_time ))),
			array('$project' => array('no_taxi'=> '$upgrade_no_taxi','check_package_type' => '$check_package_type')),
			array('$sort' => array('upgrade_id' => -1)),
			array('$limit' => 1),
		);
		$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
		return (isset($result['result']) && count($result['result']) > 0)?1:0;
    }
    public function validate_packagetaxi($cid)
    {
		$current_time = convert_timezone('now', TIMEZONE);
		//MongoDB
        $arguments = array(
			array('$match'=> array('upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>array('$gte' => $current_time ))),
			array('$project' => array('no_taxi'=> '$upgrade_no_taxi','check_package_type' => '$check_package_type')),
			array('$sort' => array('upgrade_id' => -1)),
			array('$limit' => 1),
		);
		$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
		$taxi_count = $this->mongo_db->count(MDB_TAXI,array('taxi_company' => (int)$cid, 'taxi_availability' => 'A'));
		
		if (isset($result['result']) && count($result['result']) > 0) {
			if ($result['result'][0]['check_package_type'] != 'T') {
				$taxi_add = 1;
			} else {
				$taxi_add = $result['result'][0]['no_taxi'] - $taxi_count;
			}
       } else {
           $taxi_add = 0;
       }
       return $taxi_add;
    }
    public function validate_packagedriver($cid)
    {
		$current_time = convert_timezone('now', TIMEZONE);
		$arguments = array(array('$match'=> array('upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>array('$gte' => $current_time ))),
			array('$project' => array('no_driver'=> '$upgrade_no_driver','check_package_type' => '$check_package_type')),
			array('$sort' => array('upgrade_id' => -1)),
			array('$limit' => 1),
		);
		$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
		$driver_count = $this->mongo_db->count(MDB_PEOPLE,array('company_id' => (int)$cid, 'user_type' => 'D', 'availability_status' => 'A'));
		if (isset($result['result']) && count($result['result']) > 0) {
			if ($result['result'][0]['check_package_type'] != 'T') {
				$driver_add = 1;
			} else {
				$driver_add = $result['result'][0]['no_driver'] - $driver_count;
			}
		} else {
			$driver_add = 0;
		}
		return $driver_add;
		
		/*$total_query  = "SELECT people.id ,(select upgrade_no_driver from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as no_driver,(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( upgrade_expirydate >='$current_time' )"; 
       $total_result = Db::query(Database::SELECT, $total_query)->execute()->as_array();
       $added_query  = " select count(id) as driver_count from " . PEOPLE . "  where company_id = '$cid' and user_type='D' and availability_status='A'";
               
       $added_result = Db::query(Database::SELECT, $added_query)->execute()->as_array();
       if (count($total_result) > 0) {
           if ($total_result[0]['check_package_type'] == 'T') {
               $driver_add = 1;
           } else {
               $driver_add = $total_result[0]['no_driver'] - $added_result[0]['driver_count'];
           }
       } else {
           $driver_add = 0;
       }
	   return $driver_add;*/
    }
    /** validate add contents **/
    public function validate_addcontents($arr)
    {
        return Validation::factory($arr)->rule('meta_title', 'not_empty')->rule('meta_keyword', 'not_empty')->rule('meta_description', 'not_empty')->rule('menu_name', 'not_empty')->rule('menu_name', 'Model_Add::menu_content_exits', array(':value'));
    }
    /** inserting the contents **/
    public function addcontents($post)
    {
        //$string = preg_replace('/\s+/', '', $post['menu']);
        //$link = 'users/'.strtolower($string);		
        /*$result = DB::select()->from(MENU)->where(MENU . '.menu_id', '=', $post['menu_name'])->execute()->as_array();
        if (count($result) > 0) {
            $menu_name = $result[0]['menu_name'];
        } else {
            $menu_name = "";
        }
        $result = DB::insert(CMS, array(
            'menu_id',
            'menu',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'content',
            'type',
            'status'
        ))->values(array(
            $post['menu_name'],
            $menu_name,
            $post['meta_title'],
            $post['meta_keyword'],
            $post['meta_description'],
            $post['content'],
            '1',
            '1'
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
        $ops = array(array('$match'=>array('_id'=>array('$eq'=>(int)$post['menu_name']))),
					array('$project'=>array('menu_name'=>'$menu_name')));
        $result = $this->mongo_db->aggregate(MDB_CMS,$ops);
        $menu_name = (!empty($result['result']))?$result['result'][0]['menu_name']:"";        
        $data_set = array('menu'=>$menu_name,
				'meta_title'=>$post['meta_title'],
				'meta_keyword'=>$post['meta_keyword'],
				'meta_description'=>$post['meta_description'],
				'content'=>$post['content'],
				'arabic_content'=>$post['arabic_content'],
				'content_status'=>(int)1				
				);
        
        $update = $this->mongo_db->update(MDB_CMS,array('_id'=>(int)$post['menu_name']),array('$set'=>$data_set),array('upsert'=>false));
        return (count($update))?1:0;
    }
    //Check the menu name already exists while adding a content
    public static function menu_content_exits($menu_name)
    {
        /*$result = DB::select()->from(CMS)->where(CMS . '.menu_id', '=', $post['menu_name'])->execute()->as_array();
        if ($result) {
            return 1;
        }*/
        $mongodb = MangoDB::instance('default');
		$res = $mongodb->find(MDB_CMS,array('_id'=>(int)$menu_name),array('menu'=>1));
		$result = iterator_to_array($res);
		if(isset($result[$menu_name]['menu'])){
			//Message::error(__('content_already_exits'));
			return false;
		}
		return true;
		//return iterator_to_array($res);
    }
    //selected manus 
    public function get_menus()
    {
        /*$result = DB::select()->from(MENU)->order_by('order_status', 'ASC')->execute()->as_array();
        return $result;*/
        $ops = array(
					array(
						'$project' => array(
						'menu_id' => '$_id',
						'menu_name' => '$menu_name',
						'status_post' => '$status_post',
						)
					),
					array(
						'$sort' => array("_id"=>-1)
					),
			);
		$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
		return  (!empty($result['result']))?$result['result']:array();       
        
    }
    public function check_companyid($cid)
    {
        /*$result = DB::select()->from(COMPANY)->where('cid', '=', $cid)->where('company_status', '=', 'A')->execute()->as_array();
        if (count($result) > 0) {
            return 1;
        } else {
            return 0;
        }*/
		$res = $this->mongo_db->count(MDB_COMPANY,array('_id'=>(int)$cid,'companydetails.company_status'=>'A'),array('_id'));
		return $res;
    }
    public function current_package($company_id)
    {
        $query  = " select upgrade_packageid from " . PACKAGE_REPORT . "  where " . PACKAGE_REPORT . ".upgrade_companyid = '$company_id'  order by upgrade_id desc limit 0,1";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['upgrade_packageid'];
        } else {
            return 0;
        }
    }
    public static function countdriverassignedlist($driver_id = '', $startdate = '', $enddate = '')
    {
        $driver_where    = '';
        $cond_where      = '';
        $startdate_where = '';
        $date_where      = '';
        $enddate_where   = '';
        $company_where   = '';
        $manager_where   = '';
        if ($driver_id) {
            $driver_where = " AND mapping_driverid = '$driver_id'";
        }
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between mapping_startdate and  mapping_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between mapping_startdate  and  mapping_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query   = " select * from " . TAXIMAPPING . " left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid = " . PEOPLE . ".id left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid = " . TAXI . ".taxi_id  left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where 1=1 $driver_where  $date_where order by mapping_startdate ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public static function getdriverassignedlist($driver_id = '', $startdate = '', $enddate = '', $offset = '', $val = '')
    {
        $driver_where    = '';
        $cond_where      = '';
        $startdate_where = '';
        $date_where      = '';
        $enddate_where   = '';
        $company_where   = '';
        $manager_where   = '';
        if ($driver_id) {
            $driver_where = " AND mapping_driverid = '$driver_id'";
        }
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between mapping_startdate and  mapping_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between mapping_startdate  and  mapping_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query   = " select * from " . TAXIMAPPING . "  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid = " . PEOPLE . ".id left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid = " . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where 1=1 $driver_where  $date_where order by mapping_startdate ASC limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function change_imagecount($taxi_id = '', $image_id = '')
    {
        /*$get_query       = " select taxi_sliderimage from " . TAXI . " where taxi_id=$taxi_id";
        $get_result      = Db::query(Database::SELECT, $get_query)->execute()->as_array();
        $get_slidercount = $get_result[0]['taxi_sliderimage'];
        if ($get_slidercount > 0) {
            $updatequery  = " UPDATE " . TAXI . " SET taxi_sliderimage=taxi_sliderimage-1 wHERE taxi_id = '$taxi_id' ";
            $updateresult = Db::query(Database::UPDATE, $updatequery)->execute();
        }
        $array_query      = " select taxi_serializeimage from " . TAXI . " where taxi_id=$taxi_id";
        $array_result     = Db::query(Database::SELECT, $array_query)->execute()->as_array();
        $image_serialize  = unserialize($array_result[0]['taxi_serializeimage']);
        $remove_array     = array();
        $remove_array[]   = $image_id;
        $update_array     = array_diff($image_serialize, $remove_array);
        $update_serialize = serialize($update_array);
        $updatequery      = " UPDATE " . TAXI . " SET taxi_serializeimage='$update_serialize' wHERE taxi_id = '$taxi_id' ";
        $updateresult     = Db::query(Database::UPDATE, $updatequery)->execute();
        $query            = " select taxi_serializeimage from " . TAXI . " where taxi_id=$taxi_id";
        $results          = Db::query(Database::SELECT, $query)->execute()->as_array();
        $count_image      = unserialize($results[0]['taxi_serializeimage']);
        return $count_image;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_TAXI,array('_id'=>(int)$taxi_id),array('taxi_sliderimage'));
		$count_image = (!empty($result))?$result['taxi_sliderimage']:0;
		if($count_image > 0) {
			$count_image = $count_image-1 ;
            $res = $this->mongo_db->update(MDB_TAXI,array('_id'=>($taxi_id)),array('$set'=>array('taxi_sliderimage'=>(int)$count_image)),array('upsert'=>true));
        }
		return $count_image;
    }
    /**Validating for Add Menu**/
    public function validate_addmenu($arr)
    {
        //print_r($arr);
        //exit;
        return Validation::factory($arr)->rule('menu_name', 'not_empty')->rule('menu_name', 'min_length', array(
            ':value','2'
        ))->rule('menu_name', 'max_length', array(
            ':value',
            '30'
        ))->rule('slug', 'not_empty')->rule('menu_name','Model_Add::menu_name_exits',array(':value'));
    }
    //To Add Menu Functionalities 
    public function addmenu($post)
    {
        $status = $post['status_posts'];
        if ($status == 'Publish') {
            $status = 'P';
        } else if ($status == 'Unpublish') {
            $status = 'U';
        }
        
        $cms_rs = $this->mongo_db->find(MDB_CMS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$cms_rs = iterator_to_array($cms_rs);
		reset($cms_rs);
		$cms_first_key = key($cms_rs);
		$cms_id = $cms_first_key + 1;
		$cms_menu = array('_id'=>$cms_id,
			'menu_name' => $post['menu_name'],
			'arabic_menu_name' => $post['arabic_menu_name'],
			'menu_link' => $post['slug'],
			'status_post' => $status,
			'order_status' => (int)0,
		);
		$cms_result = $this->mongo_db->insert(MDB_CMS,$cms_menu);
		return (!empty($cms_result) && empty($cms_result['err']))?1:0;
        
        /*$sql     = "select menu_id from " . MENU . " order by menu_id DESC";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['menu_id'])) {
            $id = $results[0]['menu_id'];
        } else {
            $id = 0;
        }
        if ($id > 0) {
            $result = DB::insert(MENU, array(
                'menu_name',
                'menu_link',
                'status_post',
                'order_status'
            ))->values(array(
                $post['menu_name'],
                $post['slug'],
                $status,
                $id + 1
            ))->execute();
        } else {
            $result = DB::insert(MENU, array(
                'menu_name',
                'menu_link',
                'status_post',
                'order_status'
            ))->values(array(
                $post['menu_name'],
                $post['slug'],
                $status,
                '1'
            ))->execute();
        }
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
    }
    //Check the menu already exists
    public static function menu_name_exits($menu_name="")
    {
        /*$result = DB::select()->from(MENU)->where(MENU . '.menu_name', '=', $post['menu_name'])->execute()->as_array();
        if ($result) {
            return 1;
        }*/
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_CMS,array("menu_name"=>$menu_name));
        return ($result ==1)?false:true;
    }
    //String Convert the URL format
    function string_convertoUrl($str_val)
    {
        // small fonts
        $strurl = strtolower($str_val);
        // change spaces to -
        $strurl = str_replace(' ', '-', $strurl);
        // delete all other characters to -
        $strurl = preg_replace('|[^0-9a-z\-\/+]|', '', $strurl);
        // delete too much - if near
        $strurl = preg_replace('/[\-]+/', '-', $strurl);
        // trim -
        $strurl = trim($strurl, '-');
        return $strurl;
    }
    public function packagecount($cid)
    {
        $result = DB::select()->from(PACKAGE_REPORT)->where(PACKAGE_REPORT . '.upgrade_companyid', '=', $cid)->execute()->as_array();
        return count($result);
    }
    /**Validating for Add Mile**/
    public function validate_addmile($arr)
    {
        //print_r($arr);
        //exit;
        return Validation::factory($arr)->rule('mile', 'not_empty')->rule('mile', 'digit')->rule('mile', 'max_length', array(
            ':value',
            '30'
        ));
    }
    //To Add Menu Functionalities 
    public static function addmile($post)
    {
        $result = DB::insert(MILES, array(
            'mile_name'
        ))->values(array(
            $post['mile']
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    //Check the mile already exists
    public function mile_name_exits($post)
    {
        $result = DB::select()->from(MILES)->where(MILES . '.mile_name', '=', $post['mile'])->execute()->as_array();
        if ($result) {
            return 1;
        }
    }
    public static function check_reg_countryname($name)
    {
        if (preg_match('/^[A-Za-z ]+$/', $name)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_reg_state_name($name)
    {
        if (preg_match('/^[A-Za-z ]+$/', $name)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_reg_city_name($name)
    {
        if (preg_match('/^[A-Za-z ]+$/', $name)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_base_fare($base_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $base_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_min_km($min_km)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $min_km)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_below_and_above_km($below_and_above_km, $min_km)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $below_and_above_km) && $below_and_above_km > $min_km) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_min_fare($min_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $min_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_cancellation_fare($cancellation_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $cancellation_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_below_km($below_km)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $below_km)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_above_km($above_km)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $above_km)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_waiting_time($waiting_time)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $waiting_time)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_night_fare($night_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $night_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_evening_fare($night_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $night_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_booking_limit($night_fare)
    {
        if (preg_match('/^\d+(\\d+)*$/', $night_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_valid_phone_number($phone, $regex)
    {
        if (preg_match($regex, $phone)) {
            return false;
        } else {
            return true;
        }
    }
    /** validating the banners images **/
    public function validate_addbanner($arr = "", $files_value_array = "")
    {
        return Validation::factory($arr)->rule('tags', 'not_empty')->rule('image_tag', 'not_empty')->rule('file', 'Upload::not_empty', array(
            $files_value_array['banner_image']
        ))->rule('file', 'Upload::type', array(
            $files_value_array['banner_image'],
            array(
                'jpg',
                'jpeg',
                'png',
                'gif'
            )
        ))->rule('file', 'Upload::size', array(
            $files_value_array['banner_image'],
            '2M'
        ));
    }
    /** Updating the banner images **/
    public function update_banner($tag, $image_tag, $path1, $id)
    {
        $banner_image = DB::insert(COMPANY_CMS, array(
            'company_id',
            'image_tag',
            'alt_tags',
            'banner_image',
            'type'
        ))->values(array(
            $id,
            "$image_tag",
            "$tag",
            "$path1",
            2
        ))->execute();
        return $banner_image;
    }
    /** Validating Faq **/
    public function validate_addfaq($arr)
    {
        $validation = Validation::factory($arr)->rule('faq_title', 'not_empty')->rule('faq_title', 'Model_Add::checkfaqtitle', array(
            ':value'
        ))->rule('faq_details', 'not_empty');
        return $validation;
    }
    public static function addfaq($post)
    {
        $result = DB::insert(PASSENGERS_FAQ, array(
            'faq_title',
            'faq_details',
            'status'
        ))->values(array(
            $post['faq_title'],
            $post['faq_details'],
            'A'
        ))->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function check_minute_fare($minute_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $minute_fare)) {
            return true;
        } else {
            return false;
        }
    }
    public static function check_value_zero($value)
    {
        if ($value == "0") {
            return false;
        } else {
            return true;
        }
    }
    /**Validating for Create Login**/
    public function validate_createlogin($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')->rule('firstname', 'Model_Add::checkname', array(
            ':value'
        ))->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')->rule('no_of_login', 'not_empty')->rule('phone', 'numeric')->rule('phone', 'not_empty')->rule('phone', 'contact_phone', array(
            ':value'
        ))->rule('phone', 'Model_Add::checkphone_autocreate', array(
            ':value'
        ));
    }
    public static function checkname($firstname = "")
    {
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->find(PEOPLE,array('name'=>$firstname."1"),array());
        $res= (!empty($result))?iterator_to_array($result):array();
        $count = (isset($res['result']))?count($res['result']):0;        
        if ($count > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function create_login($post)
    {
        ///print_r($post);
        $no_of_login = $post['no_of_login'];
        for ($i = 1; $i <= $no_of_login; $i++) {
            $password          = Html::chars(md5($post['password']));
            $user_createdby    = $this->user_createdby;
            $mapping_createdby = $this->user_createdby;
            $cid               = $post['company_name'];
            $email             = $post['firstname'] . $i . "@taximobility.com";
            $name              = $post['firstname'] . $i;
            $phone             = $post['phone'] . $i;
            $taxi_no           = "TX" . $post['phone'] . $i;
            $current_date      = date('Y-m-d H:i:s', time());
            $result            = DB::insert(PEOPLE, array(
                'salutation',
                'name',
                'address',
                'lastname',
                'gender',
                'dob',
                'email',
                'phone',
                'password',
                'org_password',
                'created_date',
                'user_type',
                'status',
                'user_createdby',
                'login_country',
                'login_state',
                'login_city',
                'company_id',
                'driver_license_id',
                'booking_limit'
            ))->values(array(
                $post['salutation'],
                $name,
                'USA',
                $post['lastname'],
                'Male',
                '1990-05-05',
                $email,
                $phone,
                $password,
                $post['password'],
                $current_date,
                'D',
                ACTIVE,
                $user_createdby,
                $post['country'],
                $post['state'],
                $post['city'],
                $post['company_id'],
                $phone,
                $post['booking_limit']
            ))->execute();
            $driver_id         = $result[0];
            $latitude          = "34.0500";
            $longitude         = "-118.2500";
            $result            = DB::insert(DRIVER, array(
                'driver_id',
                'latitude',
                'longitude',
                'status',
                'shift_status'
            ))->values(array(
                $driver_id,
                $latitude,
                $longitude,
                'F',
                'OUT'
            ))->execute();
            /** Taxi added**/
            $result            = DB::insert(TAXI, array(
                'taxi_no',
                'taxi_type',
                'taxi_model',
                'taxi_company',
                'taxi_owner_name',
                'taxi_manufacturer',
                'taxi_colour',
                'taxi_motor_expire_date',
                'taxi_insurance_number',
                'taxi_insurance_expire_date_time',
                'taxi_pco_licence_number',
                'taxi_pco_licence_expire_date',
                'taxi_country',
                'taxi_state',
                'taxi_city',
                'taxi_capacity',
                'taxi_speed',
                'max_luggage',
                'taxi_fare_km',
                'taxi_createdby',
                'taxi_status',
                'taxi_image'
            ))->values(array(
                $taxi_no,
                '1',
                $post['taxi_model'],
                $post['company_id'],
                'Ndot',
                'Ndot',
                'red',
                '2018-05-05',
                $phone,
                '2018-05-05 00:00:00',
                '2018-05-05',
                '2018-05-05',
                $post['country'],
                $post['state'],
                $post['city'],
                '5',
                '80',
                '8',
                '80',
                $current_date,
                ACTIVE,
                ''
            ))->execute();
            $taxi_id           = $result[0];
            /** Taxi Mapping**/
            $result            = DB::insert(TAXIMAPPING, array(
                'mapping_driverid',
                'mapping_taxiid',
                'mapping_companyid',
                'mapping_countryid',
                'mapping_stateid',
                'mapping_cityid',
                'mapping_startdate',
                'mapping_enddate',
                'mapping_status',
                'mapping_createdby'
            ))->values(array(
                $driver_id,
                $taxi_id,
                '1',
                $post['country'],
                $post['state'],
                $post['city'],
                $post['start_booking_date'],
                $post['end_booking_date'],
                ACTIVE,
                $mapping_createdby
            ))->execute();
            /** Add Passenger**/
            $result            = DB::insert(PASSENGERS, array(
                'salutation',
                'name',
                'lastname',
                'email',
                'password',
                'org_password',
                'phone',
                'creditcard_no',
                'creditcard_cvv',
                'expdatemonth',
                'expdateyear',
                'activation_status',
                'login_status',
                'user_status'
            ))->values(array(
                $post['salutation'],
                $name,
                $post['lastname'],
                $email,
                $password,
                $post['password'],
                $phone,
                'bmRvdGVuY3JpcHRfNDU1NjM2ODM3MDg4NDQ3MQ==',
                '567',
                '01',
                '2020',
                '1',
                'N',
                'A'
            ))->execute();
            $passenger_id      = $result[0];
            /** Passenger Credit card **/
            $result            = DB::insert(PASSENGERS_CARD_DETAILS, array(
                'passenger_id',
                'passenger_email',
                'card_type',
                'creditcard_no',
                'creditcard_cvv',
                'expdatemonth',
                'expdateyear',
                'default_card',
                'createdate'
            ))->values(array(
                $passenger_id,
                $email,
                'P',
                'bmRvdGVuY3JpcHRfNDExMTExMTExMTExMTExMQ==',
                '567',
                '5',
                '2020',
                '1',
                $current_date
            ))->execute();
        }
    }
    public static function view_login($post)
    {
        $no_of_login    = $post['no_of_login'];
        //$driver_id = $post['phone'].$i;
        $query          = "select name,phone,org_password from " . PEOPLE . " ORDER BY id DESC LIMIT $no_of_login ";
        $driver_details = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $driver_details;
    }
    public static function view_passengerlogin($post)
    {
        $no_of_login       = $post['no_of_login'];
        //$driver_id = $post['phone'].$i;
        $query             = "select name,phone,org_password from " . PASSENGERS . " ORDER BY id DESC LIMIT $no_of_login ";
        $passenger_details = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $passenger_details;
    }
    // Check driver licence Id is Already Exist or Not
    public static function checklicenceId($value)
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('driver_license_id'=>$value),array('driver_license_id'));
		return ($result>0)?false:true;		
    }
    //pco licence number already exist
    public static function checkpcolicenceNo($value)
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_DRIVER_INFO,array('driverinfo.driver_pco_license_number'=>$value),array('_id'));
		return ($result>0)?false:true;	
    }
    //insurance number already exist
    public static function checkinsuranceNo($value)
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_DRIVER_INFO,array('driverinfo.driver_insurance_number'=>$value),array('_id'));
		return ($result>0)?false:true;		
    }
    //national insurance number already exist
    public static function checkNationalinsuranceNo($value)
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_DRIVER_INFO,array('driverinfo.driver_national_insurance_number'=>$value),array('_id'));
		return ($result>0)?false:true;	
    }
    // To Check taxi insurance number is Already Available or Not
    public static function check_taxinsurance_number($number)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(taxi_id)'),
            'total'
        ))->from(TAXI)->where('taxi_insurance_number', '=', $number)->execute()->get('total');
        return ($result > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,array('taxi_insurance_number'=>$number),array('taxi_insurance_number'));
		return ($result>0)?false:true;
    }
    // To Check taxi pco licence number is Already Available or Not
    public static function check_taxipco_number($number)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(taxi_id)'),
            'total'
        ))->from(TAXI)->where('taxi_pco_licence_number', '=', $number)->execute()->get('total');
        return ($result > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,array('taxi_pco_licence_number'=>$number),array('taxi_pco_licence_number'));
		return ($result>0)?false:true;
    }
	//To Get all payment modules
	public function payment_modules()
	{
		/*$query2 = "SELECT * FROM ".PAYMENT_MODULES." order by pay_mod_id asc";
		$result = Db::query(Database::SELECT, $query2)->execute()->as_array();
		//print_r($result);exit;*/
		//MongoDB
		$result = $this->mongo_db->find(MDB_PAYMENT_MODULES,array(),array());
		return (!empty($result))?iterator_to_array($result):array();
	}
	
	
	/**Validating for Add Accounts Type**/
    public function validate_addaccounttype($arr)
    {        
        return Validation::factory($arr)->rule('account_type', 'not_empty')->rule('account_type', 'min_length', array(
            ':value','2'
        ))->rule('account_type', 'max_length', array(
            ':value',
            '30'
        ))->rule('account_type','Model_Add::account_type_exits',array(':value'))->rule('account_type_arabic', 'not_empty');
    }
	
	// Accounts Type Module
	//To Add Account Type Functionalities 
    public function addaccounttype($post)
    {
		/*
		$status = $post['status_posts'];
        if ($status == 'Publish') {
            $status = 'A';
        } else if ($status == 'Unpublish') {
            $status = 'D';
        }
        */
        $cat_rs = $this->mongo_db->find(MDB_CHILD_ACCOUNT_TYPE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$cat_rs = iterator_to_array($cat_rs);
		reset($cat_rs);
		$cat_first_key = key($cat_rs);
		$cat_id = $cat_first_key + 1;
		$cat_account_type = array('_id'=>$cat_id,
			'account_type' => $post['account_type'],
			'account_type_arabic' => $post['account_type_arabic'],
			//'status' => $status,			
		);
		$cat_result = $this->mongo_db->insert(MDB_CHILD_ACCOUNT_TYPE,$cat_account_type);
		return (!empty($cat_result) && empty($cat_result['err']))?1:0;
        
    }
	
	//Check the accounts type already exists
    public static function account_type_exits($account_type="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_CHILD_ACCOUNT_TYPE,array('$text' => array('$search' => "\"$account_type\"")));
		return ($result ==1)?false:true;
    }
	
	public static function account_type_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_CHILD_ACCOUNT_TYPE,array('_id' => (int)$id));
		return ($result ==1)?true:false;
    }
	
	public function passenger_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS,array('_id' => (int)$id));		
		return ($result ==1)?true:false;
    }
	
	public static function civilid_exist($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS,array('civilid' => $id));//exit;
		return ($result >= 1)?false:true;
    }
	
	public static function parent_id_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS,array('_id' => (int)$id));		
		return ($result ==1)?true:false;
    }
	
	public static function phone_isValid($phone="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PASSENGERS,array('phone' => $phone));	
		return ($result ==1)?true:false;
    }
	
	public static function driverphone_isValid($phone="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('phone' => $phone));		
		return ($result ==1)?true:false;
    }
	public static function civilid_isValid($id="")
    {
		$pattern = '/^(1|2|3)((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229)(\d{5})$/';
		if (!preg_match($pattern, $id)) {
			return false;
		} else {
			return true;
		}		
    }

public static function driver_id_isValid($id="")
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,array('_id' => (int)$id,'user_type' =>'D'));		
		return ($result ==1)?true:false;
    }

	
    /** ADD COUPON PACKAGE **/
     public function validate_addcoupon_package($arr)
    {
        return Validation::factory($arr)->rule('coupon_package_name', 'not_empty')->rule('coupon_package_name', 'min_length', array(
            ':value',
            '4'
        ))->rule('coupon_package_name', 'max_length', array(
            ':value',
            '100'
        ))->rule('coupon_package_name', 'Model_Add::checkcoupon_packagename', array(
            ':value',
            $arr['coupon_package_name']
        ))->rule('coupon_package_description', 'not_empty')->rule('coupon_package_description', 'min_length', array(
            ':value',
            '20'
        ))->rule('corporate_commission', 'not_empty')->rule('corporate_commission', 'digit')->rule('corporate_commission', 'Model_Edit::check_fare_zero', array(
            ':value',
            $arr['corporate_commission']
        ))->rule('passenger_commission', 'not_empty')->rule('passenger_commission', 'digit')->rule('passenger_commission', 'Model_Edit::check_fare_zero', array(
            ':value',
            $arr['passenger_commission']
        ))
         ->rule('coupon_package_name_ar', 'not_empty')
        ->rule('coupon_package_name_ar', 'min_length', array(':value', '4'))
        ->rule('coupon_package_name_ar', 'max_length', array(':value', '100'))
        ->rule('coupon_package_description_ar', 'not_empty')
        ->rule('coupon_package_description_ar', 'min_length', array(':value', '20'));


    }
    // To Check Company Name is Already Available or Not
    public static function checkcoupon_packagename($coupon_packagename)
    {
		$mongodb = MangoDB::instance('default');
        // Check if the username already exists in the database
		$result = $mongodb->find_one(MDB_COUPON_PACKAGE,array('coupon_package_name' => $coupon_packagename),array('_id'));

        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    //To Add company Functionalities 
    public function add_coupon_package($post)
    {
       
        $fixed_fare_apply = isset($post['fixed_fare_apply'])?$post['fixed_fare_apply']:0;
      
		//MongoDB
		$this->mongo_db = MangoDB::instance('default');
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_COUPON_PACKAGE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		$query = array(
			'_id' => $inc_id,
            'coupon_package_name' => $post['coupon_package_name'],
            'coupon_package_description' => $post['coupon_package_description'],
             'coupon_package_name_ar' => $post['coupon_package_name_ar'],
              'coupon_package_description_ar' => $post['coupon_package_description_ar'],
            'corporate_commission' => (int)$post['corporate_commission'],
            'passenger_commission' => (int)$post['passenger_commission'],
            'fixed_fare_apply' => (int)$fixed_fare_apply,
            'coupon_package_status' => ACTIVE
           
        );
		$result = $this->mongo_db->insert(MDB_COUPON_PACKAGE,$query);
		return (empty($result['err']))?1:0;
    }
      public function validate_addcorporate($arr)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('username', 'alpha_dash')
            ->rule('firstname', 'min_length', array(
            ':value',
            '4'
        ))->rule('firstname', 'max_length', array(
            ':value',
            '30'
        ))->rule('lastname', 'not_empty')->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ))->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('email', 'Model_Add::checkemail', array(
            ':value'
        ))->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '6'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '6'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))
		->rule('photo', 'Upload::not_empty', array(
            $arr['photo']
        ))->rule('photo', 'Upload::type', array(
            ':value',
            array(
                'jpeg',
                'jpg',
                'png',
                'gif'
            )
        ))->rule('address', 'not_empty')
			->rule('phone', 'contact_phone', array(
            ':value'
        ))->rule('phone', 'not_empty') ->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('phone', 'max_length', array(
            ':value',
            '20'
        ))->rule('phone', 'Model_Add::checkphone', array(
            ':value'
        ));
    }
     public function add_corporate($post, $filename)
    {
        $post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
		$password       = Html::chars(md5($post['password']));
        $user_createdby = $this->user_createdby;

        $current_date   = date('Y-m-d H:i:s', time());
		//Get the last object id
		$rs = $this->mongo_db->find(MDB_PEOPLE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
		
		$param = array(
			'_id' => $inc_id,
			'name'=>$post['firstname'],
			'address'=>$post['address'],
			'lastname'=>$post['lastname'],
			'email'=>$post['email'],
			'phone'=>$post['phone'],
			'password'=>$password,
			'org_password'=>$post['password'],
			'created_date' => new MongoDate(strtotime($current_date)),
			'user_type' => 'O',
			'status' => ACTIVE,
			'user_createdby' => (int)$user_createdby,
			'login_country' => (int)$post['country'],
			'login_state' => (int)$post['state'],
			'login_city' => (int)$post['city'],
			'company_id' => (int)COMPANY_CID,
			'login_status' => "N",
			'profile_picture' => $filename,
			'notification_setting' => 0,
			'login_from' => 'D',
			'device_token' =>'',
			'device_id' =>'',
			'device_type' =>'',
			'availability_status' => 'A' // for checking package purpose
		);
		$result = $this->mongo_db->insert(MDB_PEOPLE,$param);
		//print_r($result);exit;
        $corporate_id      = $inc_id;
		return $corporate_id;
     
    }
    public function update_corporateimage($image,$userid)
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
    /** ADD COUPON PACKAGE **/
    /* Chnages on 24-may-2016 */
  
    /* Chnages on 24-may-2016 */
	// Accounts Type Module


      public static function check_ratingsno($ratings_no = "",$edit_id="")
    {
        if(isset($edit_id) && $edit_id!=''){
            if($edit_id == $ratings_no){
                $flag = 2;
                return true;
            }else{
                $flag = 1;
            }
        }else{
            $flag = 1;
        }
        if($flag == 1){
            $mongodb = MangoDB::instance('default');
            $result = $mongodb->count('ratings',array('ratings_no'=>(int)$ratings_no,'status'=>'A') );
            //print_r($result);exit;
            return ($result > 0)?false:true;    
        }
        
    }
    /**Validating for Add ratings**/
    public function validate_addratings($arr)
    {
        $rule = Validation::factory($arr)
        ->rule('ratings_no', 'not_empty')
            ->rule('ratings_title', 'not_empty')
            ->rule('ratings_tags', 'not_empty')
            ->rule('ratings_no', 'Model_Add::check_ratingsno', array(
            ':value'))
            ->rule('ratings_title', 'alpha_spaces')
            ->rule('ratings_tags', 'alpha_spaces');
      // echo "<pre>";print_r($rule);exit();
        return $rule;
    }
    /**Validating for Add ratings**/

      public function add_ratings($postval){
        $rs = $this->mongo_db->find('ratings',array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
        $res = iterator_to_array($rs);
        reset($res);
        $first_key = key($res);
        $inc_id = $first_key+1;
        $postval['_id'] = $inc_id;
        $postval['status'] ='A';
        //echo "<pre>";print_r($postval);exit();
        
        $result = $this->mongo_db->insert('ratings',$postval);
        return (empty($result['err']))?1:0;

        
    }
    
    /**-------DRIVER CODE---------**/
    public function getDriverUniqueId() {
		$unique_id = Commonfunction::get_auto_id(MDB_PEOPLE);
		return $unique_id;
	}
    /**-------DRIVER CODE---------**/


    public function validate_testimonial($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')       
            ->rule('name', 'min_length', array(
            ':value',
            '2'
        ))->rule('name', 'max_length', array(
            ':value',
            '130'
        ))->rule('skype', 'not_empty')       
            ->rule('skype', 'min_length', array(
            ':value',
            '2'
        ))->rule('skype', 'max_length', array(
            ':value',
            '130'
        ))->rule('description', 'not_empty')       
            ->rule('description', 'min_length', array(
            ':value',
            '2'
        ))->rule('description', 'max_length', array(
            ':value',
            '500'
        ))->rule('description_arabic', 'not_empty')       
            ->rule('description_arabic', 'min_length', array(
            ':value',
            '2'
        ))->rule('description_arabic', 'max_length', array(
            ':value',
            '500'
        ))->rule('image', 'Upload::not_empty', array(
            $arr['image']
        ))->rule('image', 'Upload::type', array(
            ':value',
            array(
                'jpeg',
                'jpg',
                'png',
                'gif'
            )
        ));
    }

    public function add_testimonial($post,$image){

            $rs = $this->mongo_db->find(MDB_TESTIMONIAL,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
            $rs = iterator_to_array($rs);
            reset($rs);
            $rs_first_key = key($rs);
            $_id = $rs_first_key + 1;
            
            $current_date      = date('Y-m-d H:i:s', time());
            $currentdate = new MongoDate(strtotime($current_date));

            $status = isset($post['status'])?$post['status']:0;
            $data = array('_id'=>$_id,
                'name'=>$post['name'],
                'skype'=>$post['skype'],
                'description' => $post['description'],
                'description_arabic'=>$post['description_arabic'],
                'status' => (int)$status,
                'image'=>$image,  
                'created_date'=>$currentdate                                              
            );
            $result = $this->mongo_db->insert(MDB_TESTIMONIAL,$data);
            return empty($result['err'])?1:0;

    }
    
    // Customization
    /**Validating for Add trip package**/
    public function validate_add_zone($arr)
    {
       $arr['source_polygon'] = !empty($arr['source_polygon_drawn']) ? $arr['source_polygon_drawn'] : $arr['source_polygon'];
       $validate = Validation::factory($arr)
            ->rule('zone_name', 'not_empty')
            ->rule('zone_name', 'min_length', array(':value', '2'))
            ->rule('zone_name', 'max_length', array(':value', '30'))
            ->rule('source_polygon','not_empty');
       return $validate;
    }

    public function add_zone($post,$sourceloc){
        //echo"<pre>"; print_r($post);exit();
        $user_createdby = $this->user_createdby;
        $rs = $this->mongo_db->find(MDB_ZONES,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$rs = iterator_to_array($rs);
		reset($rs);
		$rs_first_key = key($rs);
		$inc_id = $rs_first_key + 1;
        
        $source_polygon['type'] ="Polygon";
        $source_polygon['coordinates'] =array($sourceloc);
        
        $source_location = isset($post['source_location']) ? $post['source_location'] : '';
        $source_latlng[] = isset($post['source_lng']) && isset($post['source_lat']) ? array('type'=>'Point','coordinates'=>array((double)$post['source_lng'],(double)$post['source_lat'])) : '';

        $param = array(
                    '_id' => $inc_id,
                    'zone_name'=>$post['zone_name'],
                    'source_location'=> $source_location,
                    'source_latlng'=> $source_latlng,
                    'loc' => $source_polygon,
                    'is_pickup' => isset($post['is_pickup']) ? (int)$post['is_pickup'] : (int)0,
                    'is_drop' => isset($post['is_drop']) ? (int)$post['is_drop'] : (int)0,
                    'status' => 'A',                    
                    'is_airport' => isset($post['is_airport']) ? (int)1 : (int)0, 
                    'created_by'=>$user_createdby                 
        );
        //~ print "<pre>";
        //~ print_r($source_polygon);
        //~ exit;
        $result = $this->mongo_db->insert(MDB_ZONES,$param);
        return $result;        
    }
    // Customization

    /* Sasidharan */
    public function insert_promocode_corporate($insert_array)
    {
        $rs = $this->mongo_db->find(MDB_CORPORATE_GROUP_PROMOCODE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
        $res = iterator_to_array($rs);
        reset($res);
        $first_key = key($res);
        $inc_id = $first_key+1;
                $type = isset($insert_array['promo_type'])?1:2; 
                if($type == 1)
                {
                    $query = array(
            '_id' => (int)$inc_id,
                        'company_id' =>  (int)$insert_array['company_id'],
                        'promocode' =>  $insert_array['promocode'],
                        'package' =>(int) $insert_array['package'],
                        'start_date' => new MongoDate(strtotime($insert_array['start_date'])),
                        'expire_date' => new MongoDate(strtotime($insert_array['expire_date'])),
                        'promo_limit' => (int)$insert_array['promo_limit'],
                        'promo_type' => (string) $insert_array['promo_type'],
                        'createdate' => new MongoDate(strtotime($insert_array['createdate'])),
                        'fixed_fare_amt'=>(int)$insert_array['fixed_fare_amt'],
                        'total_applied' => 0,
                        'total_used' => 0, 
                    );

                }
                else
                {
                    $query = array(
            '_id' => (int)$inc_id,
            'corporate_id' => (int)$insert_array['corporate_id'],
                        'company_id' =>  (int)$insert_array['company_id'],
                        'promocode' =>  $insert_array['promocode'],
                        //'promo_discount' => $insert_array['promo_discount'],
                        'package' =>(int) $insert_array['package'],
                        'promo_used' => (int)$insert_array['promo_used'],
                        'amount_earned' => (int)$insert_array['amount_earned'],
                        'start_date' => new MongoDate(strtotime($insert_array['start_date'])),
                        'expire_date' => new MongoDate(strtotime($insert_array['expire_date'])),
                        'promo_limit' => (int)$insert_array['promo_limit'],
                        'customer_number' => $insert_array['customer_number'],
                        'customer_email' => $insert_array['customer_email'],
                        'createdate' => new MongoDate(strtotime($insert_array['createdate'])),
                        'fixed_fare_amt'=>(int)$insert_array['fixed_fare_amt'],
                        'total_applied' => 0,
                        'total_used' => 0, 
                    );
                }
        
        $result = $this->mongo_db->insert(MDB_CORPORATE_GROUP_PROMOCODE,$query);
        return (empty($result['err']))?1:0;
    }

    // Sasidharan Jan 17 2025
    public function getPassengerCouponDetails($passengerPhone) {
        $passenger = $this->mongo_db->find(MDB_PASSENGERS,
            array("phone" => $passengerPhone),
            array('_id', "couponAmount")
        );
        return (!empty($passenger))?iterator_to_array($passenger, false):array();
    }

    public function getCouponDetails($code) {
        $coupon = $this->mongo_db->find("driverIssuedCoupons",
            array("coupon" => $code),
            array('_id')
        );
        return (!empty($coupon))?iterator_to_array($coupon, false):array();
    }

    public function deductCouponPoints($passengerId, $points) {
        $coupon = $this->mongo_db->update(
            MDB_PASSENGERS,
            array("_id" => (int)$passengerId),
            array('$inc' => [ "couponAmount" => (int)$points ])
        );
        return (empty($result['err'])) ? 1 : 0;
    }

    public function addPassengerCoupon($couponDetails) {
        $coupon = $this->mongo_db->insert("driverIssuedCoupons",$couponDetails);
	    return (!empty($coupon) && empty($coupon['err'])) ? 1 : 0;
    }


    /* Sasidharan april 28 2025 */
    public function addPromotionalPushNotification($pushNotificationDetails) {

        $rs = $this->mongo_db->find("promotional_push_notifications",array(),array('_id'))
        ->sort(array('_id'=>-1))
        ->limit(1);
        $res = iterator_to_array($rs);
        reset($res);
        $first_key = key($res);
        $inc_id = $first_key+1;

        $pushNotificationDetails['_id'] = (int)$inc_id;
        $result = $this->mongo_db->insert("promotional_push_notifications",$pushNotificationDetails);
        return (!empty($result) && empty($result['err'])) ? 1 : 0;
    }

}
