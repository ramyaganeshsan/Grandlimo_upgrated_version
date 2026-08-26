<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users module details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Edit extends Model
{
    public function __construct()
    {
        $this->session         = Session::instance();
        $this->user_admin_type = $this->session->get("user_type");
		$this->company_id     = $this->session->get('company_id');
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
    }
    /**Validating for Add company**/
    public function validate_editcompany($arr, $uid)
    {
        $validation = Validation::factory($arr)->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('firstname', 'not_empty')
        //->rule('firstname', 'alpha_dash')
            ->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')
        //->rule('lastname', 'alpha_dash')
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
            ->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])->rule('phone', 'Model_Edit::checkphone', [
            ':value',
            $uid
        ])->rule('company_name', 'not_empty')->rule('company_name', 'min_length', [
            ':value',
            '4'
        ])->rule('company_name', 'max_length', [
            ':value',
            '30'
        ])
        //->rule('company_name', 'Model_Edit::checkcompany', array(':value',$arr['country'],$arr['state'],$arr['city'],$uid))            
        //->rule('paypal_api_username','not_empty')            
        //->rule('paypal_api_password','not_empty')            
        //->rule('paypal_api_signature','not_empty')            
        //->rule('payment_method','not_empty')
            ->rule('address', 'not_empty')
			->rule('country', 'not_empty')
			->rule('state', 'not_empty')
			->rule('city', 'not_empty')
			->rule('company_address', 'not_empty')
			->rule('currency_code', 'not_empty')
			->rule('currency_symbol', 'not_empty')
			->rule('currency_symbol', 'Model_Edit::checksite_currency', [
            ':value',
            $arr['currency_code']
        ])->rule('time_zone', 'not_empty');
        if ($this->user_admin_type == 'A') {
            $validation->rule('paymodstatus', 'not_empty');
        }
        return $validation;
    }
    /**Validating for Add Motor**/
    public function validate_editmotor($arr, $uid)
    {
        return Validation::factory($arr)->rule('companyname', 'not_empty')
        //->rule('companyname', 'alpha_dash')
            ->rule('companyname', 'min_length', [
            ':value',
            '2'
        ])->rule('companyname', 'max_length', [
            ':value',
            '30'
        ])->rule('companyname', 'Model_Edit::checkmotor', [
            ':value',
            $uid
        ]);
    }
    /**Validating for Add company**/
    public function validate_editdriver($arr, $uid)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('username', 'alpha_dash')
            ->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')
        //->rule('username', 'alpha_dash')            
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
            ->rule('dob', 'not_empty')->rule('phone', 'not_empty')
        //->rule('phone','Model_Add::check_valid_phone_number',array(':value','/^[0-9()-+]*$/u'))            
        //->rule('phone', 'alpha_numeric')			
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])
        // Client Request
        //->rule('phone', 'Model_Edit::checkphone', array(
            //':value',
            //$uid
        //))
        // Client Request
        ->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('password', 'not_empty')->rule('password', 'min_length', [
            ':value',
            '6'
        ])->rule('password', 'max_length', [
            ':value',
            '20'
        ])->rule('password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('repassword', 'not_empty')->rule('repassword', 'min_length', [
            ':value',
            '6'
        ])->rule('repassword', 'max_length', [
            ':value',
            '20'
        ])->rule('repassword', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('repassword', 'matches', [
            ':validation',
            'password',
            'repassword'
        ])->rule('driver_license_id', 'not_empty')->rule('driver_license_id', 'max_length', [
            ':value',
            '30'
        ])->rule('driver_license_id', 'Model_Edit::checklicenceId', [
            ':value',
            $uid
        ])->rule('driver_license_expire_date', 'not_empty')->rule('driver_pco_license_number', 'not_empty')->rule('driver_pco_license_number', 'max_length', [
            ':value',
            '30'
        ])->rule('driver_pco_license_number', 'Model_Edit::checkpcolicenceNo', [
            ':value',
            $uid
        ])->rule('driver_pco_license_expire_date', 'not_empty')->rule('driver_insurance_number', 'not_empty')->rule('driver_insurance_number', 'max_length', [
            ':value',
            '30'
        ])->rule('driver_insurance_number', 'Model_Edit::checkinsuranceNo', [
            ':value',
            $uid
        ])->rule('driver_insurance_expire_date', 'not_empty')->rule('driver_national_insurance_number', 'not_empty')->rule('driver_national_insurance_number', 'max_length', [
            ':value',
            '30'
        ])->rule('driver_national_insurance_number', 'Model_Edit::checkNationalinsuranceNo', [
            ':value',
            $uid
        ])->rule('driver_national_insurance_expire_date', 'not_empty')->rule('address', 'not_empty')/*->rule('country', 'not_empty')->rule('state', 'not_empty')/*->rule('company_name', 'not_empty')*/->rule('booking_limit', 'not_empty')->rule('booking_limit', 'numeric')->rule('booking_limit', 'Model_Add::check_booking_limit', [
            ':value',
            $arr['booking_limit']
        ])
		//->rule('city', 'not_empty')
		->rule('profile_picture', 'Upload::type', [
            ':value',
            [
                'jpg',
                'png',
                'gif'
            ]
        ])->rule('website_photo', 'Upload::type', [
            ':value',
            [
                'jpeg',
                'jpg',
                'png',
                'gif'
            ]
        ])->rule('facebook_account', 'url')
        ->rule('instagram_account', 'url')
        ->rule('twitter_account', 'url');
        //->rule('company_name', 'Model_Edit::checkassigneddriver',array($arr['city'],$arr['country'],$arr['state'],$arr['company_name'],$uid));
        //->rule('photo', 'Upload::type', array(':value', array('jpeg','jpg','png','gif')));
    }
    public static function checkassigneddriver($city, $country, $state, $company_name, $uid)
    {
        $date_where = " AND ( mapping_startdate >= now() or mapping_enddate >= now() ) ";
        $query      = " select * from " . TAXIMAPPING . " where (" . TAXIMAPPING . ".mapping_companyid != '$company_name' or " . TAXIMAPPING . ".mapping_countryid != '$country'  or " . TAXIMAPPING . ".mapping_stateid != '$state' or " . TAXIMAPPING . ".mapping_cityid !='$city') and " . TAXIMAPPING . ".mapping_driverid =$uid $date_where ";
        $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function validate_editmodel($arr, $uid)
    { 
		$validation = Validation::factory($arr)->rule('model_name', 'not_empty')->rule('time', 'not_empty')->rule('waiting_free', 'not_empty')->rule('waiting_free', 'numeric')
        //->rule('model_name', 'alpha_dash')
			->rule('model_name', 'min_length', [
            ':value',
            '2'
        ])->rule('model_name', 'max_length', [
            ':value',
            '30'
        ])->rule('model_name_ar', 'max_length', [
            ':value',
            '30'
        ])
        ->rule('category_name', 'not_empty')
        ->rule('airport_pickup_fare', 'not_empty')
        ->rule('airport_drop_fare', 'not_empty')
        /*->rule('model_name', 'Model_Edit::checkmodelname', array(
            ':value',
            $arr['companyname'],
            $uid
        ))*/->rule('model_size', 'not_empty')->rule('model_size', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['model_size']
        ])->rule('companyname', 'not_empty')->rule('waiting_time', 'not_empty')->rule('waiting_time', 'Model_Edit::check_waiting_time', [
            ':value',
            $arr['waiting_time']
        ])->rule('base_fare', 'not_empty')->rule('base_fare', 'Model_Edit::check_base_fare', [
            ':value',
            $arr['base_fare']
        ])->rule('min_km', 'not_empty')->rule('min_km', 'Model_Add::check_min_km', [
            ':value',
            $arr['min_km']
        ])->rule('min_fare', 'not_empty')->rule('min_fare', 'Model_Edit::check_min_fare', [
            ':value',
            $arr['min_fare']
        ])->rule('cancellation_fare', 'not_empty')->rule('cancellation_fare', 'Model_Edit::check_cancellation_fare', [
            ':value',
            $arr['cancellation_fare']
        ])->rule('below_and_above_km', 'not_empty')->rule('below_and_above_km', 'Model_Add::check_below_and_above_km', [
            ':value',
            $arr['min_km']
        ])->rule('below_km', 'not_empty')->rule('below_km', 'Model_Edit::check_below_km', [
            ':value',
            $arr['below_km']
        ])->rule('above_km', 'not_empty')->rule('above_km', 'Model_Edit::check_above_km', [
            ':value',
            $arr['above_km']
        ])->rule('night_charge', 'not_empty')->rule('minutes_fare', 'not_empty')->rule('max_luggage', 'not_empty')->rule('minutes_fare', 'Model_Edit::check_minute_fare', [
            ':value',
            $arr['minutes_fare']
        ]);
        if(!empty($arr['model_image_2']['name']))
        {
            $validation->rule('model_image_2', 'Upload::type', [
                $arr['model_image_2'],
                [
                    'jpg',
                    'png',
                    'gif'
                ]
            ]);
        }
        if(!empty($arr['model_image_unfocus_2']['name']))
        {
            $validation->rule('model_image_unfocus_2', 'Upload::type', [
                $arr['model_image_unfocus_2'],
                [
                    'jpg',
                    'png',
                    'gif'
                ]
            ]);
        }
        if(!empty($arr['iconic_image_2']['name']))
        {
            $validation->rule('iconic_image_2', 'Upload::type', [
                $arr['iconic_image_2'],
                [
                    'jpg',
                    'png',
                    'gif'
                ]
            ]);
        }
        if (Arr::get($arr, 'night_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('night_timing_from', 'not_empty')->rule('night_timing_to', 'not_empty')->rule('night_fare', 'not_empty')->rule('night_fare', 'Model_Edit::check_night_fare', [
                ':value',
                $arr['night_fare']
            ]);
        }
		return $validation;
    }
    public function validate_editfare($arr)
    {
        $validation = Validation::factory($arr)->rule('base_fare', 'not_empty')->rule('base_fare', 'Model_Edit::check_base_fare', [
            ':value',
            $arr['base_fare']
        ])->rule('base_fare', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['base_fare']
        ])->rule('model_name', 'not_empty')->rule('model_size', 'not_empty')->rule('model_size', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['model_size']
        ])->rule('min_km', 'not_empty')->rule('min_km', 'Model_Add::check_min_km', [
            ':value',
            $arr['min_km']
        ])->rule('min_fare', 'not_empty')->rule('min_fare', 'Model_Edit::check_min_fare', [
            ':value',
            $arr['min_fare']
        ])->rule('cancellation_fare', 'not_empty')->rule('cancellation_fare', 'Model_Edit::check_cancellation_fare', [
            ':value',
            $arr['cancellation_fare']
        ])->rule('below_and_above_km', 'not_empty')->rule('below_and_above_km', 'Model_Add::check_below_and_above_km', [
            ':value',
            $arr['min_km']
        ])->rule('below_km', 'not_empty')->rule('below_km', 'Model_Edit::check_below_km', [
            ':value',
            $arr['below_km']
        ])->rule('below_km', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['below_km']
        ])->rule('above_km', 'not_empty')->rule('above_km', 'Model_Edit::check_above_km', [
            ':value',
            $arr['above_km']
        ])->rule('above_km', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['above_km']
        ])->rule('minutes_fare', 'not_empty')->rule('minutes_fare', 'Model_Edit::check_minute_fare', [
            ':value',
            $arr['minutes_fare']
        ])->rule('night_charge', 'not_empty')->rule('evening_charge', 'not_empty');
        if (Arr::get($arr, 'night_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('night_timing_from', 'not_empty')->rule('night_timing_to', 'not_empty')->rule('night_fare', 'not_empty')->rule('night_fare', 'Model_Edit::check_night_fare', [
                ':value',
                $arr['night_fare']
            ])->rule('night_fare', 'Model_Admin::check_percentage', [
                ':value'
            ]);
        }
        if (Arr::get($arr, 'evening_charge') == 1) {
            //echo "dsf";exit;
            $validation->rule('evening_timing_from', 'not_empty')->rule('evening_timing_to', 'not_empty')->rule('evening_fare', 'not_empty')->rule('evening_fare', 'Model_Add::check_evening_fare', [
                ':value',
                $arr['evening_fare']
            ])->rule('evening_fare', 'Model_Admin::check_percentage', [
                ':value'
            ]);
        }
        return $validation;
    }
    /**Validating for Add Taxi**/
    public function validate_editfield($arr, $uid)
    {
        $rule = Validation::factory($arr)->rule('field_labelname', 'not_empty')->rule('field_labelname', 'min_length', [
            ':value',
            '2'
        ])->rule('field_labelname', 'max_length', [
            ':value',
            '20'
        ])->rule('field_name', 'not_empty')->rule('field_name', 'min_length', [
            ':value',
            '2'
        ])->rule('field_name', 'max_length', [
            ':value',
            '20'
        ])->rule('field_name', 'small_letters', [
            ':value'
        ])->rule('field_name', 'Model_Edit::checkfieldname', [
            ':value',
            $uid
        ])->rule('field_type', 'not_empty');
        if ($arr['field_type'] != 'Textbox') {
            //$rule = $rule->rule('field_value', 'not_empty');
        }
        return $rule;
    }
    public static function checkfieldname($name, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('field_name')->from(MANAGEFIELD)->where('field_name', '=', $name)->where('field_id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    /**Validating for Add Taxi**/
    public function validate_edittaxi($arr, $uid)
    {
        $rule = Validation::factory($arr)->rule('taxi_no', 'not_empty')
		->rule('taxi_no', 'min_length', [
            ':value',
            '4'
        ])->rule('taxi_no', 'max_length', [
            ':value',
            '30'
        ])
        //->rule('taxi_no', 'alpha_numeric', array(':value','/^[0-9]{1,}/'))
        ->rule('taxi_no', 'regex', [
            ':value',
            '/^[a-z0-9A-Z -]++$/iD'
        ])->rule('taxi_no', 'Model_Edit::check_taxino', [
            ':value',
            $uid
        ])
        //->rule('taxi_type', 'not_empty')
        ->rule('taxi_model', 'not_empty')
        ->rule('taxi_stream_channel', 'not_empty')
		->rule('taxi_min_speed', 'not_empty')
		->rule('taxi_owner_name', 'not_empty')
		->rule('taxi_manufacturer', 'not_empty')
		->rule('taxi_colour', 'not_empty')
		->rule('taxi_motor_expire_date', 'not_empty')
		->rule('taxi_insurance_number', 'not_empty')
		->rule('taxi_insurance_number', 'Model_Edit::check_taxinsurance_number', [
            ':value',
            $uid
        ])->rule('taxi_insurance_expire_date', 'not_empty')
		->rule('taxi_pco_licence_number', 'not_empty')
		->rule('taxi_pco_licence_number', 'Model_Edit::check_taxipco_number', [
            ':value',
            $uid
        ])->rule('taxi_pco_licence_expire_date', 'not_empty')
		//->rule('country', 'not_empty')
		//->rule('state', 'not_empty')
		//->rule('city', 'not_empty')
		//->rule('company_name', 'not_empty')
		/*	->rule('taxi_capacity', 'not_empty')
        ->rule('taxi_capacity', 'min_length', array(':value', '1'))
        ->rule('taxi_capacity', 'max_length', array(':value', '20'))
        ->rule('taxi_capacity', 'digit', array(':value','/^[0-9]{1,}/'))*/ /*->rule('taxi_fare_km', 'not_empty')
        ->rule('taxi_fare_km', 'min_length', array(':value', '1'))
        ->rule('taxi_fare_km', 'max_length', array(':value', '20'))
        ->rule('taxi_fare_km', 'digit', array(':value','/^[0-9]{1,}/'))*/
		/*->rule('company_name', 'Model_Edit::checkassignedtaxi', array(
            $arr['city'],
            $arr['country'],
            $arr['state'],
            $arr['company_name'],
            $uid
        ))*/;
        return $rule;
    }
    public static function checkassignedtaxi($city, $country, $state, $company_name, $uid)
    {
        /*$date_where = " AND ( mapping_startdate >= now() or mapping_enddate >= now() ) ";
        $query      = " select * from " . TAXIMAPPING . " where (" . TAXIMAPPING . ".mapping_companyid != '$company_name' or " . TAXIMAPPING . ".mapping_countryid != '$country'  or " . TAXIMAPPING . ".mapping_stateid != '$state' or " . TAXIMAPPING . ".mapping_cityid !='$city') and " . TAXIMAPPING . ".mapping_taxiid =$uid $date_where ";
        $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		//echo $city.',' .$country.', '.$state.', '.$company_name.', '.$uid;
		$mongodb        = MangoDB::instance('default');
		$current_time = Commonfunction::getCurrentTimeStamp();
		$result = $mongodb->find_one(MDB_TAXI_DRIVER_MAPPING,['mapping_taxiid'=>(int)$uid,"\$and"=>[["\or"=>["mapping_startdate"=>[['$gte'=>$current_time],['$lte'=>$current_time]]]],["\or"=>[['mapping_companyid'=>['$ne'=>(int)$company_name]],['mapping_countryid'=>['$ne'=>(int)$country]],['mapping_stateid'=>['$ne'=>(int)$state]],['mapping_cityid'=>['$ne'=>(int)$city]]]]]],['_id']);
		//echo '<pre>';print_r($result);exit;
		return ($result>0)?false:true;
    }
    /**Validating for Add Motor**/
    public function validate_editpackage($arr, $uid)
    {
        return Validation::factory($arr)->rule('package_name', 'not_empty')->rule('package_name', 'min_length', [
            ':value',
            '4'
        ])->rule('package_name', 'max_length', [
            ':value',
            '100'
        ])->rule('package_name', 'Model_Edit::checkpackagename', [
            ':value',
            $uid
        ])->rule('package_description', 'not_empty')->rule('package_description', 'min_length', [
            ':value',
            '20'
        ])->rule('no_of_taxi', 'not_empty')->rule('no_of_taxi', 'Model_Edit::check_fare_zero', [
            ':value'
        ])->rule('no_of_taxi', 'digit')->rule('no_of_driver', 'not_empty')->rule('no_of_driver', 'Model_Edit::check_fare_zero', [
            ':value'
        ])->rule('no_of_driver', 'digit')->rule('days_expire', 'not_empty')->rule('days_expire', 'Model_Edit::check_fare_zero', [
            ':value'
        ])->rule('days_expire', 'digit')->rule('package_price', 'not_empty')->rule('package_price', 'numeric');
    }
    public function validate_editcompanypayment($arr, $uid)
    {
        return Validation::factory($arr)
		->rule('description', 'not_empty')
		->rule('currency_code', 'not_empty')
		->rule('currency_code', 'max_length', [
            ':value',
            '3'
        ])->rule('currency_symbol', 'not_empty')
		->rule('currency_symbol', 'Model_Admin::checksite_currency', [
            ':value',
            $arr['currency_code']
        ])->rule('payment_method', 'not_empty')
		//->rule('paypal_api_username', 'not_empty')
		//->rule('paypal_api_password', 'not_empty')
		//->rule('paypal_api_signature', 'not_empty')
		//->rule('knet_response_url', 'not_empty')
		//->rule('knet_error_url', 'not_empty')
		//->rule('knet_resource_path', 'not_empty')
		->rule('knet_alias', 'not_empty');
    }
    //To update company Functionalities 
    public function editcompany($uid, $post, $files)
    {
		$company_cid = $post['company_id'];
		if (isset($files['taxi_image']['name']) && $files['taxi_image']['name'] != '') {
            $image_name = $uid;
            $filename   = Upload::save($files['taxi_image'], $image_name, DOCROOT . COMPANY_IMG_IMGPATH);
            $logo_image = Image::factory($filename);
            $path1      = DOCROOT . COMPANY_IMG_IMGPATH;
            $path       = $image_name;
            Commonfunction::multipleimageresize($logo_image, COMPANY_IMG_WIDTH, COMPANY_IMG_HEIGHT, $path1, $image_name, 90);
            $check = 1;
		}
		$people_data      = [
			'name' => $post['firstname'],
			'lastname' => $post['lastname'],
			'phone' => $post['phone'],
			'address' => $post['address'],
			'email' => $post['email'],
			'login_country' => (int)$post['country'],
			'login_state' => (int)$post['state'],
			'login_city' => (int)$post['city']
		];
		$people_result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$people_data],['upsert'=>false]);
		$company_data     = [
			'companydetails.company_name' => $post['company_name'],
			'companydetails.company_address' => $post['company_address'],
			'companydetails.company_country' => (int)$post['country'],
			'companydetails.company_state' => (int)$post['state'],
			'companydetails.company_city' => (int)$post['city'],
			'companydetails.time_zone' => $post['time_zone']
		];
		$company_result = $this->mongo_db->update(MDB_COMPANY,['_id'=>(int)$company_cid],['$set'=>$company_data],['upsert'=>false]);
        //Company payment settings Update
        if (isset($post['payid'])) {
            foreach ($post['payid'] as $k => $id) {
                //print_r($id);exit;
                $default = ($id == $post['default'][0])?1:0;
                $paystatus = (in_array($id, $post['paymodstatus']))?1:0;
				$payment_modules_data = [
                    'pay_active' => (int)$paystatus,
                    'pay_mod_default' => (int)$default
                ];
				$pay_result = $this->mongo_db->update(MDB_COMPANY,['_id'=>(int)$company_cid,'paymentmodule.pay_mod_id'=>(int)$id],['$set'=>$payment_modules_data],['upsert'=>true]);
            }
        }
        if ($uid != 0) {
            //Company payment module settings Update
            if (isset($post['payid_add'])) {
                $payment_module_data = [];
				foreach ($post['payid_add'] as $k => $id) {
					$default = ($id == $post['default'][0])?1:0;
					$paystatus = (in_array($id, $post['paymodstatus']))?1:0;
					$payment_module_data[] = [
						'pay_mod_id' => (int)$post['payid_add'][$k],
						'pay_mod_name' => $post['paymodname'][$k],
						'pay_mod_image' => $post['paymodimage'][$k],
						'pay_active' => (int)$paystatus,
						'pay_mod_default' => (int)$default
					];
				}
				$pay_result = $this->mongo_db->update(MDB_COMPANY,['_id'=>(int)$company_cid],['$set'=>['paymentmodule'=>$payment_module_data]],['upsert'=>true]);
            }
        }
		return (empty($people_result['err']) && empty($company_result['err']))?1:0;
        /*
		 $result     = '';
        $result1    = '';
        $result2    = '';
        $check      = '';
        $company_id = $this->company_id;
		 if (isset($files['taxi_image']['name']) && $files['taxi_image']['name'] != '') {
            $image_name = $uid;
            $filename   = Upload::save($files['taxi_image'], $image_name, DOCROOT . COMPANY_IMG_IMGPATH);
            $logo_image = Image::factory($filename);
            $path1      = DOCROOT . COMPANY_IMG_IMGPATH;
            $path       = $image_name;
            Commonfunction::multipleimageresize($logo_image, COMPANY_IMG_WIDTH, COMPANY_IMG_HEIGHT, $path1, $image_name, 90);
            $check = 1;
            if ($filename != '') {
				$company_cid = $post['company_id'];
                $result      = DB::update(PEOPLE)->set(array(
                    'name' => $post['firstname'],
                    'lastname' => $post['lastname'],
                    'phone' => $post['phone'],
                    'address' => $post['address'],
                    'email' => $post['email'],
                    'login_country' => $post['country'],
                    'login_state' => $post['state'],
                    'login_city' => $post['city']
                ))->where('id', '=', $uid)->where('user_type', '=', 'C')->execute();
                $result1     = DB::update(COMPANY)->set(array(
                    'company_name' => $post['company_name'],
                    'company_address' => $post['company_address'],
                    'company_country' => $post['country'],
                    'company_state' => $post['state'],
                    'company_city' => $post['city'],
                    'time_zone' => $post['time_zone']
                ))->where('userid', '=', $uid)
                    ->execute();
                $result2     = DB::update(COMPANYINFO)->set(array(
                    'company_currency' => $post['currency_symbol'],
                    'company_currency_format' => $post['currency_code']
                ))->where('company_cid', '=', $company_cid)->execute();
            }
        } else {
            $check       = 1;
            $result      = DB::update(PEOPLE)->set(array(
                'name' => $post['firstname'],
                'lastname' => $post['lastname'],
                'phone' => $post['phone'],
                'address' => $post['address'],
                'email' => $post['email'],
                'login_country' => $post['country'],
                'login_state' => $post['state'],
                'login_city' => $post['city']
            ))->where('id', '=', $uid)->where('user_type', '=', 'C')->execute();
            $result1     = DB::update(COMPANY)->set(array(
                'company_name' => $post['company_name'],
                'company_address' => $post['company_address'],
                'company_country' => $post['country'],
                'company_state' => $post['state'],
                'company_city' => $post['city'],
                'time_zone' => $post['time_zone']
            ))->where('userid', '=', $uid)->where('cid', '=', $post['company_id'])->execute();
            $company_cid = $post['company_id'];
            $result2     = DB::update(COMPANYINFO)->set(array(
                'company_currency' => $post['currency_symbol'],
                'company_currency_format' => $post['currency_code']
            ))->where('company_cid', '=', $company_cid)->execute();
        }
        //Company payment settings Update
        if (isset($post['payid'])) {
            foreach ($post['payid'] as $k => $id) {
                //print_r($id);exit;
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
                $result3 = DB::update(COMPANY_PAYMENT_MODULES)->set(array(
                    'pay_active' => $paystatus,
                    'pay_mod_default' => $default
                ))->where('compay_payment_id', '=', $id)->execute();
            }
        }
        if ($uid != 0) {
            //Company payment settings Insert
            if (isset($post['payid_add'])) {
                foreach ($post['payid_add'] as $k => $id) {
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
                        $post['company_id'],
                        $uid,
                        $post['payid_add'][$k],
                        $post['paymodname'][$k],
                        $post['paymodimage'][$k],
                        $paystatus,
                        $default
                    ))->execute();
                }
            }
        }
        //echo $uid."--".$result."--".$result1."--".$result2."--".$check;exit;
        if ($result || $result1 || $result2 || $check == 1) {
            return 1;
        } else {
            return 0;
        }*/
    }
    //To update company Functionalities 
    public static function editmotor($uid, $post)
    {
        $result = DB::update(MOTORCOMPANY)->set([
            'motor_name' => $post['companyname']
        ])->where('motor_id', '=', $uid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function editcompanypayment($uid, $post)
    {
        $company_id = $this->company_id;
        $query      = [
            'description' => $post['description'],
            'currency_code' => $post['currency_code'],
            'currency_symbol' => $post['currency_symbol'],
            //'knet_response_url' => $post['knet_response_url'],
            //'knet_error_url' => $post['knet_error_url'],
            //'knet_resource_path' => $post['knet_resource_path'],
            'knet_alias' => $post['knet_alias'],
            'payment_method' => $post['payment_method']
            //'paypal_api_username' => $post['paypal_api_username'],
            //'paypal_api_password' => $post['paypal_api_password'],
           // 'paypal_api_signature' => $post['paypal_api_signature']
        ];
        /*$result     = DB::update(PAYMENT_GATEWAYS)->set($query)->where('id', '=', $uid)->where('company_id', '=', $company_id)->execute();
        return count($result);*/
		//print_r($query);exit;
		//MongoDB
		$result = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>(int)$uid,'company_id'=>(int)$company_id],['$set'=>$query],['upsert'=>true]);
		return (empty($result['err']))?1:$result['err_msg'];
    }
    //To update company Functionalities 
    public function editmodel($uid, $post)
    {
		
        /*$result = DB::update(MOTORMODEL)->set(array(
            'model_name' => $post['model_name'],
            'model_size' => $post['model_size'],
            'motor_mid' => $post['companyname'],
            'base_fare' => $post['base_fare'],
            'min_fare' => $post['min_fare'],
            'cancellation_fare' => $post['cancellation_fare'],
            'below_km' => $post['below_km'],
            'above_km' => $post['above_km'],
            'night_charge' => $post['night_charge'],
            'night_timing_from' => $post['night_timing_from'],
            'night_timing_to' => $post['night_timing_to'],
            'night_fare' => $post['night_fare'],
            'evening_charge' => $post['evening_charge'],
            'evening_timing_from' => $post['evening_timing_from'],
            'evening_timing_to' => $post['evening_timing_to'],
            'evening_fare' => $post['evening_fare'],
            'waiting_time' => $post['waiting_time'],
            'min_km' => $post['min_km'],
            'below_above_km' => $post['below_and_above_km'],
            'minutes_fare' => $post['minutes_fare']
        ))->where('model_id', '=', $uid)->execute();
        return ($result)?1:0;*/
		$query = [
            'model_name' => $post['model_name'],
            'model_name_ar' => $post['model_name_ar'],
            'category_name' => $post['category_name'],
            'model_size' => (int)$post['model_size'],
            'base_fare' =>(float) $post['base_fare'],
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
            'waiting_time' => (float)$post['waiting_time'],
            'max_luggage' => (float)$post['max_luggage'],
			'time' => (int)$post['time'],
			'waiting_free' => (int)$post['waiting_free'],
           'min_km' => (float)$post['min_km'],
           'below_above_km' => (float)$post['below_and_above_km'],
            'minutes_fare' => (float)$post['minutes_fare'],
            'airport_pickup_fare' => (float)$post['airport_pickup_fare'],
            'airport_drop_fare' => (float)$post['airport_drop_fare']
        ];
		$array1 = $array2 = $array3 = $array4 = $array5 = $array6 = [];
        $array7 = $array8 = $array9 = $array10 = $array11 = $array12 = $array13 = [];

		if(isset($post['model_image'])) {
			$array1 = ['model_image' => $post['model_image']];
		}
		if(isset($post['model_image_thumb'])) {
			$array2 = ['model_image_thumb' => $post['model_image_thumb']];
		}
		if(isset($post['iconic_image'])) {
			$array3 = ['iconic_image' => $post['iconic_image']];
		}
		if(isset($post['iconic_image_thumb'])) {
			$array4 = ['iconic_image_thumb' => $post['iconic_image_thumb']];
		}
        if(isset($post['model_image_unfocus'])) {
            $array5 = ['model_image_unfocus' => $post['model_image_unfocus']];
        }
        if(isset($post['model_image_unfocus_thumb'])) {
            $array6 = ['model_image_unfocus_thumb' => $post['model_image_unfocus_thumb']];
        }
        if(isset($post['model_image_2'])) {
            $array7 = ['model_image_2' => $post['model_image_2']];
        }
        if(isset($post['model_image_thumb_2'])) {
            $array8 = ['model_image_thumb_2' => $post['model_image_thumb_2']];
        }
        if(isset($post['iconic_image_2'])) {
            $array9 = ['iconic_image_2' => $post['iconic_image_2']];
        }
        if(isset($post['iconic_image_thumb_2'])) {
            $array10 = ['iconic_image_thumb_2' => $post['iconic_image_thumb_2']];
        }
        if(isset($post['model_image_unfocus_2'])) {
            $array11 = ['model_image_unfocus_2' => $post['model_image_unfocus_2']];
        }
        if(isset($post['model_image_unfocus_thumb_2'])) {
            $array12 = ['model_image_unfocus_thumb_2' => $post['model_image_unfocus_thumb_2']];
        }
        if(isset($post['website_model_image'])) {
            $array13 = ['website_model_image' => $post['website_model_image']];
        }

        $hourly_fare_list = [];

        foreach($post["hourly_fare_list"] as $key => $val)
        {
            $hourly_fare_list[$key+1] = $val;
        }

        $array14 = ["hourly_fare_list" => $hourly_fare_list];
		$updateQry = array_merge($query,$array1,$array2,$array3,$array4,$array5,$array6,$array7,$array8,$array9,$array10,$array11,$array12,$array13,$array14);
		
		//MongoDB
		$result = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>(int)$uid],['$set'=>$updateQry],['upsert'=>true]);
		return (empty($result['err']))?1:$result['err_msg'];
    }
    //To update company Functionalities 
    public function editfare($post)
    {
    /*    $result = DB::update(COMPANY_MODEL_FARE)->set(array(
            'model_name' => $post['model_name'],
            'model_size' => $post['model_size'],
            'base_fare' => $post['base_fare'],
            'min_fare' => $post['min_fare'],
            'cancellation_fare' => $post['cancellation_fare'],
            'below_km' => $post['below_km'],
            'above_km' => $post['above_km'],
            'night_charge' => $post['night_charge'],
            'night_timing_from' => $post['night_timing_from'],
            'night_timing_to' => $post['night_timing_to'],
            'night_fare' => $post['night_fare'],
            'evening_charge' => $post['evening_charge'],
            'evening_timing_from' => $post['evening_timing_from'],
            'evening_timing_to' => $post['evening_timing_to'],
            'evening_fare' => $post['evening_fare'],
            'min_km' => $post['min_km'],
            'waiting_time' => $post['waiting_time'],
            'below_above_km' => $post['below_and_above_km'],
            'minutes_fare' => $post['minutes_fare']
        ))->where('company_model_fare_id', '=', $post['company_model_fare_id'])->execute();*/
			$company_id = $this->company_id;
			$model_fare_array = [
				'model_fare.$.model_name' => $post['model_name'],
				'model_fare.$.model_size' => (int)$post['model_size'],
				'model_fare.$.base_fare' => (float)$post['base_fare'],
				'model_fare.$.min_fare' => (float)$post['min_fare'],
				'model_fare.$.cancellation_fare' => (float)$post['cancellation_fare'],
				'model_fare.$.below_km' => (float)$post['below_km'],
				'model_fare.$.above_km' => (float)$post['above_km'],
				'model_fare.$.night_charge' => (float)$post['night_charge'],
				'model_fare.$.night_timing_from' => $post['night_timing_from'],
				'model_fare.$.night_timing_to' => $post['night_timing_to'],
				'model_fare.$.night_fare' => (float)$post['night_fare'],
				'model_fare.$.evening_charge' => (float)$post['evening_charge'],
				'model_fare.$.evening_timing_from' => $post['evening_timing_from'],
				'model_fare.$.evening_timing_to' => $post['evening_timing_to'],
				'model_fare.$.evening_fare' => (float)$post['evening_fare'],
				'model_fare.$.min_km' => (float)$post['min_km'],
				'model_fare.$.waiting_time' => $post['waiting_time'],
				'model_fare.$.below_above_km' => (float)$post['below_and_above_km'],
				'model_fare.$.minutes_fare' => (float)$post['minutes_fare']
			];
			$model_id = (int)$post['company_model_fare_id'];
			$result = $this->mongo_db->update(MDB_COMPANY,['_id'=>(int)$company_id, 'model_fare.model_id'=>(int)$model_id],['$set'=>$model_fare_array],['multiple'=>true]);
			return (empty($result['err']))?1:0;
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function get_payment_details($uid)
    {
       $company_id = $this->company_id;
        /*$result     = DB::select('*')->from(PAYMENT_GATEWAYS)->where('company_id', '=', $company_id)->where('id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_PAYMENT_GATEWAYS,['_id'=>(int)$uid,'company_id'=>(int)$company_id]);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:[];
    }
    //To update Edit field Functionalities 
    public function editfield($uid, $post)
    {
        $result            = DB::select('field_name')->from(MANAGEFIELD)->where('field_id', '=', $uid)->execute()->as_array();
        $get_field_name    = $result[0]['field_name'];
        $posted_field_name = $post['field_name'];
        if ($posted_field_name != $get_field_name) {
            DB::query(5, "ALTER TABLE taxi_additional_field CHANGE " . $get_field_name . " " . $posted_field_name . " varchar(250)  NOT NULL")->execute();
        }
        $result = DB::update(MANAGEFIELD)->set([
            'field_labelname' => $post['field_labelname'],
            'field_name' => $post['field_name'],
            'field_type' => $post['field_type'],
            'field_value' => $post['field_value']
        ])->where('field_id', '=', $uid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    // To Check Company Name is Already Available or Not
    public static function checkcompany($companyname, $country, $state, $city, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('company_name')->from(COMPANY)->where('company_name', '=', $companyname)->where('company_country', '=', $country)->where('company_state', '=', $state)->where('company_city', '=', $city)->where('userid', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // To Check Company Name is Already Available or Not
    public static function checkmotor($companyname, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('motor_name')->from(MOTORCOMPANY)->where('motor_name', '=', $companyname)->where('motor_id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    public static function checkmodel($companyname, $modelname, $motorid, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('model_name')->from(MOTORMODEL)->where('model_name', '=', $modelname)->where('model_id', '!=', $uid)->where('motor_mid', '=', $companyname)->execute()->as_array();
        return (count($result) > 0)?false:true;
    }
    // Check Whether Email is Already Exist or Not
    public static function checkemail($email = "", $uid)
    {
        /*$result = DB::select('email')->from(PEOPLE)->where('email', '=', $email)->where('id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,['email'=>$email,'_id'=>['$ne'=>(int)$uid]]);
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    // Check Whether Email is Already Exist or Not
    public static function checkphone($phone = "", $uid)
    {
        /*$result = DB::select('phone')->from(PEOPLE)->where('phone', '=', $phone)->where('id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,['phone'=>$phone,'_id'=>['$ne'=>(int)$uid]]);
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    // Check Whether Email is Already Exist or Not
    public static function check_passengeremail($email = "", $uid)
    {
        /*$result = DB::select('email')->from(PASSENGERS)->where('email', '=', $email)->where('id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_PEOPLE,['passengerdetails.email'=>$email,'_id'=>['$ne'=>(int)$uid]]);
		//print_r($result);exit;
		return ($result > 0)?false:true;
    }
    // Check Whether Company details is Already Exist or Not
    public static function company_details($uid)
    {
        $result = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->join(COMPANYINFO, 'LEFT')->on(COMPANY . '.cid', '=', COMPANYINFO . '.company_cid')->where(PEOPLE . '.user_type', '=', 'C')->where(COMPANY . '.userid', '=', $uid)->execute()->as_array();
        return $result;
    }
    public function company_details_new($uid)
    {
        /*$result = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->join(COMPANYINFO, 'LEFT')->on(COMPANY . '.cid', '=', COMPANYINFO . '.company_cid')->where(PEOPLE . '.user_type', '=', 'C')->where(PEOPLE . '.id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$ops = [
			['$match' => ['user_type'=>'C','_id'=>(int)$uid]],
			[
					'$lookup' => [
						'from'=>MDB_COMPANY,
						'localField'=> "company_id",
						'foreignField' => "_id",
						'as'=> "cdetails"
					]
				],
			[
				'$project' => [
					'company_status' => '$cdetails.companydetails.company_status',
					'company_name' => '$cdetails.companydetails.company_name',
					'company_address' => '$cdetails.companydetails.company_address',
					'company_country' => '$cdetails.companydetails.company_country',
					'company_state' => '$cdetails.companydetails.company_state',
					'company_city' => '$cdetails.companydetails.company_city',
					'company_domain' => '$cdetails.companyinfo.company_domain',
					'time_zone' => '$cdetails.companydetails.time_zone',
					'userid' => '$cdetails.companydetails.userid',
					'name' => '$name',
					'lastname' => '$lastname',
					'phone' => '$phone',
					'address' => '$address',
					'company_id' => '$company_id',
					'email' => '$email',
					'user_type' => '$user_type',
					'id' => '$_id',
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
		//echo '<pre>else';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];
    }
    // Check Whether Motor details is Already Exist or Not
    public static function motor_details($uid)
    {
        $result = DB::select()->from(MOTORCOMPANY)->where('motor_id', '=', $uid)->execute()->as_array();
        return $result;
    }
    public function model_details($offset, $val)
    {
        $result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->order_by('model_name', 'ASC')->limit($offset)->limit($val)->execute()->as_array();
        return $result;		
    }
    public function model_motordetails($uid)
    {
        /*$result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->where(MOTORMODEL . '.model_id', '=', $uid)->execute()->as_array();
        return $result;*/
	
		$result = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["_id"=>(int)$uid]);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:[];
    }
	// Check Whether Motor details is Already Exist or Not
    public function motordetails()
    {
        /*$result = DB::select()->from(MOTORCOMPANY)->where('motor_status', '=', 'A')->order_by('motor_name', 'asc')->execute()->as_array();
        return $result;*/
	
		$result = $this->mongo_db->find(MDB_MOTOR_MODEL,["model_status"=>"A"])->sort(['model_name'=>1]);
		return (!empty($result))?iterator_to_array($result):[];
    }
    public function model_faredetails($uid)
    {
        $company_id = $this->company_id;
        /*$query      = "select * from " . COMPANY_MODEL_FARE . " where " . COMPANY_MODEL_FARE . ".company_cid = '$company_id' and " . COMPANY_MODEL_FARE . ".company_model_fare_id= '$uid' ORDER BY `company_model_fare_id` ASC";
        $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;*/

		$ops = 	[
					['$unwind' => '$model_fare'],
					['$match'=>['_id' => (int)$company_id,'model_fare.model_id' => (int)$uid]],
					[
						'$project' => [
							'model_fare' => 1,
						]
					],
				];
		$results = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
		//$res = iterator_to_count($results);
		//echo "<pre>"; print_r($results['result']); exit;
		return (!empty($results['result'][0]['model_fare']))?$results['result'][0]['model_fare']:0;
    }
    
    // Check Whether Manage Field details is Already Exist or Not
    public static function managefield_details($uid)
    {
        $result = DB::select()->from(MANAGEFIELD)->where(MANAGEFIELD . '.field_id', '=', $uid)->execute()->as_array();
        return $result;
    }
    // Check Whether Manage Field details is Already Exist or Not
    public function managetaxi_details($uid)
    {
        /*$result = DB::select()->from(TAXI)->join(ADDFIELD, 'LEFT')->on(TAXI . '.taxi_id', '=', ADDFIELD . '.taxi_id')->where(TAXI . '.taxi_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$uid]);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:[];
    }
    /** for updating taxi image **/
    public function edittaxi_image($image, $uid)
    {
        /*$sql     = "select taxi_image from " . TAXI . " where taxi_id='$uid'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results)) {
            $id1 = $results[0]['taxi_image'];
            if (file_exists($id1)) {
                unlink($id1);
            }
        }
        $result = DB::update(TAXI)->set(array(
            'taxi_image' => $image
        ))->where('taxi_id', '=', $uid)->execute();
        return $result;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$uid],['taxi_image']);
		if(!empty($result)) {
			$id1 = $result['taxi_image'];
            if (file_exists($id1)) {
                unlink($id1);
            }
        }
		$res = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$uid],['$set'=>['taxi_image'=>$image]],['upsert'=>true]);
		return (empty($res['err']))?1:$res['err_msg'];
    }
    //To Edit Taxi Functionalities 
    public function edittaxi($post, $uid, $files,$encodeString,$filename)
    {
        //print_r($post); exit;
        $nexti            = '';
        $add_count        = $post['add_count'];
        if (isset($files['updateimage']['name']) && $files['updateimage']['type'] != '') {
            foreach ($files['updateimage']['name'] as $key => $value) {
                $nexti      = $key;
                $file_array = [];
                if (isset($files['updateimage']['name'][$key]) && $files['updateimage']['name'][$key] != '') {
                    $file_array['name']     = $files['updateimage']['name'][$key];
                    $file_array['type']     = $files['updateimage']['type'][$key];
                    $file_array['tmp_name'] = $files['updateimage']['tmp_name'][$key];
                    $file_array['error']    = $files['updateimage']['error'][$key];
                    $image_name             = $uid . '_' . $key;
                    $filename               = Upload::save($file_array, $image_name, DOCROOT . TAXI_IMG_IMGPATH);
                    $logo_image             = Image::factory($filename);
                    $path1                  = DOCROOT . TAXI_IMG_IMGPATH;
                    $path                   = $image_name;
                    Commonfunction::multipleimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
                }
            }
        }
        /*$taxi_arrcount = array();
        if (isset($files['size']['name']) && $files['size']['type'] != '') {
            $count = count($files['size']['name']);
            $z     = 0;
            for ($j = 0; $j < $count; $j++) {
                $file_array = array();
                if ($files['size']['name'][$j] != '') {
                    $z++;
                    if ($nexti == '') {
                        $nexti = $add_count;
                    } else {
                        $nexti++;
                    }
                    $file_array['name']     = $files['size']['name'][$j];
                    $file_array['type']     = $files['size']['type'][$j];
                    $file_array['tmp_name'] = $files['size']['tmp_name'][$j];
                    $file_array['error']    = $files['size']['error'][$j];
                    $image_name             = $uid . '_' . $nexti;
                    $taxi_arrcount[]        = $nexti;
                    $filename               = Upload::save($file_array, $image_name, DOCROOT . TAXI_IMG_IMGPATH);
                    $logo_image             = Image::factory($filename);
                    $path1                  = DOCROOT . TAXI_IMG_IMGPATH;
                    $path                   = $image_name;
                    Commonfunction::multipleimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
                }
            }
			$image_serialize = array();
            $updatequery     = " UPDATE " . TAXI . " SET taxi_sliderimage=taxi_sliderimage+$z wHERE taxi_id = '$uid'";
            $updateresult    = Db::query(Database::UPDATE, $updatequery)->execute();
            $array_query     = " select taxi_serializeimage from " . TAXI . " where taxi_id=$uid";
            $array_result    = Db::query(Database::SELECT, $array_query)->execute()->as_array();
            $image_serialize = unserialize($array_result[0]['taxi_serializeimage']);
            if (is_array($image_serialize) > 0) {
                $update_array = array_merge($image_serialize, $taxi_arrcount);
            } else {
                $update_array = $taxi_arrcount;
            }
            $update_arrimage = serialize($update_array);
            $updatequery     = " UPDATE " . TAXI . " SET taxi_serializeimage='$update_arrimage' wHERE taxi_id = '$uid' ";
            $updateresult    = Db::query(Database::UPDATE, $updatequery)->execute();
        }
        $post['taxi_type'] = 1;
        $result            = DB::update(TAXI)->set(array(
            'taxi_no' => $post['taxi_no'],
            'taxi_type' => $post['taxi_type'],
            'taxi_model' => $post['taxi_model'],
            'taxi_country' => $post['country'],
            'taxi_state' => $post['state'],
            'taxi_city' => $post['city'],
            'taxi_capacity' => '',
            'taxi_speed' => $post['taxi_speed'],
            'max_luggage' => $post['minimum_luggage'],
            'taxi_fare_km' => $post['taxi_fare_km'],
            'taxi_company' => $post['company_name'],
            'taxi_owner_name' => $post['taxi_owner_name'],
            'taxi_manufacturer' => $post['taxi_manufacturer'],
            'taxi_colour' => $post['taxi_colour'],
            'taxi_motor_expire_date' => $post['taxi_motor_expire_date'],
            'taxi_pco_licence_number' => $post['taxi_pco_licence_number'],
            'taxi_pco_licence_expire_date' => $post['taxi_pco_licence_expire_date'],
            'taxi_insurance_number' => $post['taxi_insurance_number'],
            'taxi_insurance_expire_date_time' => $post['taxi_insurance_expire_date'],
            'taxi_min_speed' => $post['taxi_min_speed']
        ))->where('taxi_id', '=', $uid)->execute();
        //$post['taxi_capacity']        
        return ($result)?1:0;
		*/
		$taxi_arrcount = [];
        if (isset($files['size']['name']) && $files['size']['type'] != '') {
            $count = count($files['size']['name']);
            $z     = 0;
            for ($j = 0; $j < $count; $j++) {
                $file_array = [];
                if ($files['size']['name'][$j] != '') {
                    $z++;
                    if ($nexti == '') {
                        $nexti = $add_count;
                    } else {
                        $nexti++;
                    }
                    $file_array['name']     = $files['size']['name'][$j];
                    $file_array['type']     = $files['size']['type'][$j];
                    $file_array['tmp_name'] = $files['size']['tmp_name'][$j];
                    $file_array['error']    = $files['size']['error'][$j];
                    $image_name             = $uid . '_' . $nexti;
                    $taxi_arrcount[]        = $nexti;
                    $filename               = Upload::save($file_array, $image_name, DOCROOT . TAXI_IMG_IMGPATH);
                    $logo_image             = Image::factory($filename);
                    $path1                  = DOCROOT . TAXI_IMG_IMGPATH;
                    $path                   = $image_name;
                    Commonfunction::multipleimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
                }
            }
			//MongoDB
			$uresult = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$uid],['$inc'=>['taxi_sliderimage'=>(int)$z]],['upsert'=>true]);
        }
        
        $post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
        
		$post['taxi_type'] = 1;
		$query = [
            'taxi_no' => $post['taxi_no'],
            'taxi_type' => (int)$post['taxi_type'],
            'taxi_model' => (int)$post['taxi_model'],
            'taxi_country' => (int)$post['country'],
            'taxi_state' => (int)$post['state'],
            'taxi_city' => (int)$post['city'],
            'taxi_capacity' => 0,
            'taxi_speed' => (float)$post['taxi_speed'],
            //'max_luggage' => (float)$post['minimum_luggage'],
            'taxi_fare_km' => (float)$post['taxi_fare_km'],
            'taxi_company' => (int)$post['company_name'],
            'taxi_owner_name' => $post['taxi_owner_name'],
            'taxi_manufacturer' => $post['taxi_manufacturer'],
            'taxi_colour' => $post['taxi_colour'],
            'taxi_motor_expire_date' => $post['taxi_motor_expire_date'],
            'taxi_pco_licence_number' => $post['taxi_pco_licence_number'],
            'taxi_pco_licence_expire_date' => $post['taxi_pco_licence_expire_date'],
            'taxi_insurance_number' => $post['taxi_insurance_number'],
            'taxi_insurance_expire_date_time' => $post['taxi_insurance_expire_date'],
            'taxi_min_speed' => (float)$post['taxi_min_speed'],
            'qrencodeString' => $encodeString,            
            'qr_image_path' => $filename,     
            'live_stream_channel' => $post['taxi_stream_channel']
        ];
		//MongoDB
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>(int)$uid],['$set'=>$query],['upsert'=>true]);
		return (empty($result['err']))?1:$result['err'];
    }
	public function check_taxicompanyid($id)
    {
        /*$result = DB::select()->from(TAXI)->where('taxi_id', '=', $id)->execute()->as_array();
        return (count($result) > 0)?$result:0;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$id],['_id','taxi_company','taxi_state','taxi_city','taxi_country']);
		return (!empty($result))?$result:[];
    }
    public static function check_taxino($name, $uid)
    {
        /*// Check if the username already exists in the database
        $result = DB::select('taxi_no')->from(TAXI)->where('taxi_no', '=', $name)->where('taxi_id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,['taxi_no'=>$name,'_id'=>['$ne'=>(int)$uid]],['taxi_no']);
		return ($result>0)?false:true;
    }
    // To Check Motorname is Already Available or Not
    public static function checkmodelname($name, $motorid, $uid)
    {
        // Check if the username already exists in the database
        /*$result = DB::select('model_name')->from(MOTORMODEL)->where('model_name', '=', $name)->where('motor_mid', '=', $motorid)->where('model_id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_MOTOR_MODEL,["model_name" => new \MongoDB\BSON\Regex($name, 'i'),"_id"=>['$ne'=>(int)$uid]]);
		return ($result>0)?false:true;
    }
    public function driver_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'D')->execute()->as_array();
        return $result;*/
		$arguments = [
			['$match'	=> ['_id' => (int)$uid, 'user_type' => 'D']],
			[
				'$project' => [
					'id' => '$_id',
					'name'=>'$name',
					///Driver Code///
					'driver_code'=>'$driver_code',
					///Driver Code///
					'address'=>'$address',
					'lastname'=>'$lastname',
					'gender'=>'$gender',
					'dob'=>'$dob',
					'email'=>'$email',
					'phone'=>'$phone',
					'org_password'=>'$org_password',
					'user_type' => '$user_type',
					'status' => '$status',
					'login_country' => '$login_country',
					'login_state' => '$login_state',
					'login_city' => '$login_city',
					'company_id' => '$company_id',
					'driver_license_id' => '$driver_license_id',
					'booking_limit' => '$booking_limit',
					'profile_picture' => '$profile_picture',
                    'facebook_account' => ['$ifNull'=>['$facebook_account','']],
                    'instagram_account' => ['$ifNull'=>['$instagram_account','']],
                    'twitter_account' => ['$ifNull'=>['$twitter_account','']],
                    'driver_description' => ['$ifNull'=>['$driver_description','']],
                    'driver_description_arabic' => ['$ifNull'=>['$driver_description_arabic','']],
                    'website_show' => ['$ifNull'=>['$website_show','']],
                    'web_image_name' => ['$ifNull'=>['$web_image_name','']],
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result']))?$result['result']:[];
    }
    public function manager_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'M')->execute()->as_array();
        return $result; */
		$result = $this->mongo_db->find_one(MDB_PEOPLE,['_id' => (int)$uid, 'user_type' => 'M']);
		//print_r($result); exit;
		$res = (!empty($result))?$result:[];
        return $res;
    }
	public function taxicompany_details()
    {
        /*$result = DB::select()->from(COMPANY)->where('company_status', '=', 'A')->order_by('company_name', 'asc')->execute()->as_array();
        return $result;*/
		$result = $this->mongo_db->find(MDB_COMPANY,['companydetails.company_status' => 'A'],['_id','companydetails'])->sort(['companydetails.company_name' => 1]);
		//echo "<pre>"; print_r(iterator_to_array($result)); exit;
		return (!empty($result))?iterator_to_array($result):[];
    }
	 public function peoplecompany_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'M')->execute()->as_array();
        return $result; */
		$result = $this->mongo_db->find(MDB_PEOPLE,['_id' => (int)$uid]);
		//print_r(iterator_to_array($result)); exit;
		$res = (!empty($result))?iterator_to_array($result):[];
        return $res;
    }
	
    public function moderator_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'S')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$ops = [
			['$match'=>['user_type'=>'S','_id'=>(int)$uid]],
			[
				'$lookup' => [
				'from'=>MDB_CSC,
				'localField'=> "login_country",
				'foreignField' => "_id",
				'as'=> "countrydetails"
				]
			],
			['$unwind'=>'$countrydetails'],
			[
				'$project' => [
				'country_name' => '$countrydetails.country_name',
				'name' => '$name',
				'email' => '$email',
				'address' => '$address',
				'status' => '$status',
				'lastname' => '$lastname',
				'login_country' => '$login_country',
				'phone' => '$phone'
				]
			]
		];
		$results = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
		//echo '<pre>';print_r($results);exit;
		return (!empty($results['result']))?$results['result']:[];

    }
    //to get driver's licence and insurance details from driver info table
    public function driver_info_details($driver_id)
    {
        /*$result = DB::select()->from(DRIVER_INFO)->where('driver_id', '=', $driver_id)->execute()->as_array();
        return $result;*/
	
		//MongoDB
		$arguments = [
			['$match'=>['_id'=>(int)$driver_id]],
			['$unwind'=>'$driverinfo'],
			['$unwind'=>'$loc'],
			[
				'$project' => [
					'loc' => '$loc.coordinates',
					'driver_license_expire_date' => '$driverinfo.driver_license_expire_date',
					'driver_pco_license_number' => '$driverinfo.driver_pco_license_number',
					'driver_pco_license_expire_date' => '$driverinfo.driver_pco_license_expire_date',
					'driver_insurance_number' => '$driverinfo.driver_insurance_number',
					'driver_insurance_expire_date' => '$driverinfo.driver_insurance_expire_date',
					'driver_national_insurance_number' => '$driverinfo.driver_national_insurance_number',
					'driver_national_insurance_expire_date' => '$driverinfo.driver_national_insurance_expire_date'
				]
			]
		];
		$result = $this->mongo_db->aggregate(MDB_DRIVER_INFO,$arguments);
		//echo '<pre>';print_r($result['result']);exit;
		return (!empty($result['result']))?$result['result']:[];
    }
    // To Check User Name is Already Available or Not
    public static function checkusername($name, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('username')->from(PEOPLE)->where('username', '=', $name)->where('id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    //To update Edit Driver Functionalities 
    public function edit_driver($post, $uid,$web_img)
    {
		$post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
        $password = Html::chars(md5($post['password']));

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
        /*if (COMPANY_CID == 1 || SUBDOMAIN == 'demo') {
			$param = array(
				'name' => $post['firstname'],
                'address' => $post['address'],
                'login_country' => (int)$post['country'],
                'login_state' => (int)$post['state'],
                'login_city' => (int)$post['city'],
                'lastname' => $post['lastname'],
                'gender' => $post['gender'],
                'dob' => new \MongoDB\BSON\UTCDateTime(strtotime($post['dob']) * 1000),
                'email' => $post['email'],
                'driver_license_id' => $post['driver_license_id'],
                'phone' => $post['phone'],
                'company_id' => (int)$post['company_name'],
                'booking_limit' =>(int) $post['booking_limit']
			);
			//MongoDB
			$result = $this->mongo_db->update(MDB_PEOPLE,array('_id'=>(int)$uid),array('$set'=>$param),array('upsert'=>false));
        } else {*/
			$param = [
				'name' => $post['firstname'],
				'address' => $post['address'],
				'login_country' => (int)$post['country'],
				'login_state' => (int)$post['state'],
				'login_city' => (int)$post['city'],
				'lastname' => $post['lastname'],
				'gender' => $post['gender'],
				'dob' => new \MongoDB\BSON\UTCDateTime(strtotime($post['dob']) * 1000),
				'email' => $post['email'],
				'password' => $password,
				'org_password' => $post['password'],
				'driver_license_id' => $post['driver_license_id'],
				'phone' => $post['phone'],
				'company_id' => (int)$post['company_name'],
				'booking_limit' => (int)$post['booking_limit'],
                'facebook_account'=>$post['facebook_account'],
                'instagram_account'=>$post['instagram_account'],
                'twitter_account'=>$post['twitter_account'],
                'driver_description'=>$post['driver_description'],
                'driver_description_arabic'=>$post['driver_description_arabic'],
                'website_show'=>(int)$web_status,                
			];
            if($web_img){
                $param['web_image_name'] = $web_img;
            }
			//MongoDB
			$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$param],['upsert'=>false]);
       // }
		/*
		$arguments = array(array('$unwind' => '$stateinfo'),array('$unwind' => '$stateinfo.cityinfo'),
			array('$match' => array('stateinfo.cityinfo.city_id'=> (int)$post['city'],'stateinfo.cityinfo.city_status' => 'A')),
			array('$project' => array('_id' => 0,'city_name' => '$stateinfo.cityinfo.city_name',)),
			array('$sort' => array('stateinfo.cityinfo.city_name' => 1),)
		);
		$cityresult = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		$cityresult = $cityresult['result'];
		*/
		$address    = $post['address'];
        /*$address    = str_replace(' ', '+', $address);
        $url        = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $ch         = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $geoloc = curl_exec($ch);
        //print_r($geoloc);
        $json   = json_decode($geoloc);
        if ($json->status == 'OK') {
            $latitude  = $json->results[0]->geometry->location->lat;
            $longitude = $json->results[0]->geometry->location->lng;
        } else {
            $latitude  = LOCATION_LATI;
            $longitude = LOCATION_LONG;
        } */
        $latitude = $post['latitude'];
        $longitude = $post['longitude'];
		$driver_data = [
		    'loc'=>['type' => 'Point', 'coordinates'=>[(double)$longitude,(double)$latitude]],
		];
		//echo '<pre>'; 		print_r($driver_data);
		//exit;
		$result = $this->mongo_db->update(MDB_DRIVER_INFO,['_id'=>(int)$uid],['$set'=>$driver_data],['upsert'=>false]);
		//Driver Info
		$driver_info_data = [
			'driverinfo' => [
				[
					'driver_license_expire_date' => new \MongoDB\BSON\UTCDateTime(strtotime($post['driver_license_expire_date']) * 1000),
					'driver_pco_license_number' => $post['driver_pco_license_number'],
					'driver_pco_license_expire_date'=> new \MongoDB\BSON\UTCDateTime(strtotime($post['driver_pco_license_expire_date']) * 1000),
					'driver_insurance_number'=>(int)$post['driver_insurance_number'],
					'driver_insurance_expire_date'=> new \MongoDB\BSON\UTCDateTime(strtotime($post['driver_insurance_expire_date']) * 1000),
					'driver_national_insurance_number'=>$post['driver_national_insurance_number'],
					'driver_national_insurance_expire_date'=> new \MongoDB\BSON\UTCDateTime(strtotime($post['driver_national_insurance_expire_date']) * 1000)
				]
			]
		];	
		$driver_info = $this->mongo_db->update(MDB_DRIVER_INFO,['_id'=>(int)$uid],['$set'=>$driver_info_data],['upsert'=>false]);
        //the condition to get the response 1 if driver or driver info detials changed
        if ($result || $driver_info) {
            return 1;
        } else {
            return 0;
        }
    }
    public function package_details($uid)
    {
        /*$result = DB::select()->from(PACKAGE)->where('package_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find_one(MDB_PACKAGE,['_id'=>(int)$uid],['_id','package_name','package_description','no_of_taxi','no_of_driver','package_price','days_expire','driver_tracking','package_status','package_type']);
		return (!empty($res))?$res:[];
    }
    // To Check Company Name is Already Available or Not
    public static function checkpackagename($packagename, $uid)
    {
        // Check if the username already exists in the database
        $result = DB::select('package_name')->from(PACKAGE)->where('package_name', '=', $packagename)->where('package_id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function edit_package($post, $uid)
    {
        //print_r($post);exit;
        if (isset($post['driver_tracking'])) {
            $driver_tracking = 'S';
        } else {
            $driver_tracking = 'N';
        }
        /*$result = DB::update(PACKAGE)->set(array(
            'package_name' => $post['package_name'],
            'package_description' => $post['package_description'],
            'no_of_taxi' => $post['no_of_taxi'],
            'no_of_driver' => $post['no_of_driver'],
            'package_price' => $post['package_price'],
            'days_expire' => $post['days_expire'],
            'package_type' => $post['package_type'],
            'driver_tracking' => $driver_tracking
        ))->where('package_id', '=', $uid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
		
		$query = [
            'package_name' => $post['package_name'],
            'package_description' => $post['package_description'],
            'no_of_taxi' => $post['no_of_taxi'],
            'no_of_driver' => $post['no_of_driver'],
            'package_price' => $post['package_price'],
            'days_expire' => $post['days_expire'],
            'package_type' => $post['package_type'],
            'driver_tracking' => $driver_tracking
        ];
		
		//MongoDB
		$result = $this->mongo_db->update(MDB_PACKAGE,['_id'=>(int)$uid],['$set'=>$query],['upsert'=>false]);
		return (empty($result['err']))?1:$result['err'];
    }
    // Check Whether Country details is Already Exist or Not
    public function country_detail($uid)
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find_one(MDB_CSC,['_id'=>(int)$uid],['_id','country_name','iso_country_code','telephone_code','currency_code','currency_symbol','country_status','default']);
		return (!empty($res))?$res:[];
    }
	public function country_details()
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '=', 'A')->order_by('country_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find(MDB_CSC,['country_status'=>'A'],['_id','country_name'])->sort(['country_name'=>1]);
		return (!empty($res))?iterator_to_array($res):[];
    }
    public function validate_editcountry($arr, $uid)
    {
        return Validation::factory($arr)->rule('country_name', 'not_empty')
        //->rule('country_name', 'alpha_dash')
            ->rule('country_name', 'Model_Edit::check_reg_countryname', [
            ':value'
        ])->rule('country_name', 'min_length', [
            ':value',
            '2'
        ])->rule('country_name', 'max_length', [
            ':value',
            '30'
        ])->rule('country_name', 'Model_Edit::checkcountryname', [
            ':value',
            $uid
        ])->rule('iso_country_code', 'not_empty')->rule('iso_country_code', 'min_length', [
            ':value',
            '2'
        ])->rule('iso_country_code', 'max_length', [
            ':value',
            '5'
        ])->rule('iso_country_code', 'Model_Edit::checkisocountrycode', [
            ':value',
            $uid
        ])->rule('telephone_code', 'not_empty')->rule('telephone_code', 'min_length', [
            ':value',
            '2'
        ])->rule('telephone_code', 'max_length', [
            ':value',
            '5'
        ])->rule('currency_code', 'not_empty')->rule('currency_code', 'min_length', [
            ':value',
            '2'
        ])->rule('currency_code', 'max_length', [
            ':value',
            '5'
        ])->rule('currency_symbol', 'not_empty')->rule('currency_symbol', 'max_length', [
            ':value',
            '5'
        ]);
    }
    public function validate_edit_template($arr, $uid)
    {
        return Validation::factory($arr)->rule('sms_description', 'not_empty');
    }
	
	public function validate_edit_emailtemplate($arr, $uid)
    {
        return Validation::factory($arr)->rule('english_content', 'not_empty');
    }
    public static function checkcountryname($name, $uid)
    {
        /*$result = DB::select('country_name')->from(COUNTRY)->where('country_name', '=', $name)->where('country_id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }*/
		$cid = (int)$uid;
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->count(MDB_CSC,['country_name'=>new \MongoDB\BSON\Regex('^' . $name, 'i'),'_id'=>['$ne'=>$cid]],['country_name']);
		return ($res > 0)?false:true;
    }
    public static function checkfaqtitle($faq, $fid)
    {
        $result = DB::select('faq_title')->from(PASSENGERS_FAQ)->where('faq_title', '=', $faq)->where('faq_id', '!=', $fid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public static function checkisocountrycode($iso_country_code, $uid)
    {
        /*$result = DB::select('iso_country_code')->from(COUNTRY)->where('iso_country_code', '=', $iso_country_code)->where('country_id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }*/
		$cid = (int)$uid;
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->count(MDB_CSC,['iso_country_code'=>new \MongoDB\BSON\Regex('^' . $iso_country_code, 'i'),'_id'=>['$ne'=>$cid]],['iso_country_code']);
		return ($res > 0)?false:true;
    }
    public function editcountry($uid, $post)
    {
		$query = [
            'country_name' => $post['country_name'],
            'iso_country_code' => $post['iso_country_code'],
            'telephone_code' => $post['telephone_code'],
            'currency_code' => $post['currency_code'],
            'currency_symbol' => $post['currency_symbol']
		];
        /*$result = DB::update(COUNTRY)->set($query)->where('country_id', '=', $uid)->execute();
        return ($result)?1:0;*/
		
		//MongoDB
		$result = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$uid],['$set'=>$query],['upsert'=>true]);
		return (empty($result['err']))?1:$result['err'];
    }
    public function edittemplate($uid, $post)
    {
        /*$result = DB::update(SMS_TEMPLATE)->set(array(
            'sms_description' => $post['sms_description']
        ))->where('sms_id', '=', $uid)->execute();
        return ($result)?1:0;*/
		$query = ['sms_description' => $post['sms_description'], 'arabic_sms_description' => $post['arabic_sms_description']];
		//MongoDB
		$result = $this->mongo_db->update(MDB_SMS_TEMPLATES,['_id'=>(int)$uid],['$set'=>$query],['upsert'=>true]);
		return (empty($result['err']))?1:$result['err'];
    }
	
    public function sms_template($id)
    {
        //return $result = DB::select()->from(SMS_TEMPLATE)->where('sms_id','=',$id)->execute()->as_array();
		
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_SMS_TEMPLATES, ['_id' => (int)$id],["_id","sms_title","sms_description","arabic_sms_title","arabic_sms_description"]);
		//echo '<pre>';print_r($response);exit;
        //$result = iterator_to_array($response);
        return $result;
    }
	
    public function countrydetails()
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '=', 'A')->order_by('country_name', 'asc')->execute()->as_array();
        return $result;*/
	
		//MongoDB
        $result = $this->mongo_db->find(MDB_CSC, ['country_status' => 'A'],["_id","country_name"]);
		//echo '<pre>';print_r(iterator_to_array($result));exit;
        $res = (!empty($result))?iterator_to_array($result):[];
        return $res;
    }
	
	public function city_details()
    {
        /*$result = DB::select()->from(CITY)->where('city_status', '=', 'A')->order_by('city_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$ops = [
			['$unwind' => '$stateinfo'],
			['$unwind' => '$stateinfo.cityinfo'],
			/*array('$match' => array('stateinfo.cityinfo.city_status'=>'A','stateinfo.state_id'=>(int)DEFAULT_STATE,'_id'=>(int)DEFAULT_COUNTRY)),*/
			['$match' => ['stateinfo.cityinfo.city_status'=>'A']],
			['$project' => ['_id' => 0,
				'city_id' => '$stateinfo.cityinfo.city_id',
				'city_name' => '$stateinfo.cityinfo.city_name',
				]
			],
			[
				'$sort' => [
					'country_name' => 1
				],
			]
		];
		$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];
    }
    public function state_details()
    {
        /*$result = DB::select()->from(STATE)->where('state_status', '=', 'A')->order_by('state_name', 'asc')->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$ops = [
			['$unwind' => '$stateinfo'],
			/*array('$match' => array('stateinfo.state_status'=>'A','_id'=>(int)DEFAULT_COUNTRY)),*/
			['$match' => ['stateinfo.state_status'=>'A']],
			['$project' => ['_id' => 0,
				'state_id' => '$stateinfo.state_id', 
				'state_name' => '$stateinfo.state_name',
				]
			],
			[
				'$sort' => [
					'country_name' => 1
				],
			]
		];
		$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];
    }
    public function country_details_new()
    {
        /*$result = DB::select()->from(COUNTRY)->join(STATE)->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where('country_status', '=', 'A')->where('state_status', '=', 'A')->order_by('country_name', 'asc')->group_by(COUNTRY . '.country_id')->execute()->as_array();
        return $result;*/		
		//MongoDB
		$res = $this->mongo_db->find(MDB_CSC,['country_status'=>'A'],['_id','country_name'])->sort(['country_name'=>1]);
		return (!empty($res))?iterator_to_array($res):[];
    
    }
    public function city_countrydetails($countryid,$stateid,$cityid)
    {
        /*$result = DB::select()->from(CITY)->join(STATE, 'LEFT')->on(CITY . '.city_stateid', '=', STATE . '.state_id')->join(COUNTRY, 'LEFT')->on(CITY . '.city_countryid', '=', COUNTRY . '.country_id')->where(CITY . '.city_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$country_id = (int)$countryid;
		$state_id = (int)$stateid;
		$city_id = (int)$cityid;
		
		/*$rs = $this->mongo_db->find(MDB_CSC,array('stateinfo.cityinfo.city_id'=>$city_id,'stateinfo.cityinfo.city_stateid'=>$state_id,'stateinfo.cityinfo.city_countryid'=>$country_id),array('stateinfo.cityinfo.$'=>1))->sort(array('stateinfo.cityinfo.city_id'=>-1));
		echo '<pre>';print_r(iterator_to_array($rs));//exit;
		$result = (!empty($rs))?iterator_to_array($rs):array();
		if (!empty($result)){
			$res = (count($result[$country_id]['stateinfo'][0]['cityinfo']) > 0) ? $result[$country_id]['stateinfo'][0]['cityinfo'] : array();
		} else {
			$res = $result;
		}
		print_r($res);exit;
		return $res;*/
		
		//MongoDB with aggregate process only
		$ops = [
			['$unwind' => '$stateinfo'],
			['$unwind' => '$stateinfo.cityinfo'],
			['$match' => ['stateinfo.cityinfo.city_id'=>$city_id,'stateinfo.cityinfo.city_stateid'=>$state_id,'stateinfo.cityinfo.city_countryid'=>$country_id]],
			['$project' => ['_id' => 0,
				'city_id' => '$stateinfo.cityinfo.city_id', 
				'city_name' => '$stateinfo.cityinfo.city_name',
				'city_countryid' => '$stateinfo.cityinfo.city_countryid',
				'city_stateid' => '$stateinfo.cityinfo.city_stateid',
				'zipcode' => '$stateinfo.cityinfo.zipcode',
				'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
			]]
		];
		$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result'][0]:[];
    }
    
    public function validate_editcity($arr, $uid)
    {
        return Validation::factory($arr)->rule('city_name', 'not_empty')
        //->rule('city_name', 'alpha_dash')
            ->rule('city_name', 'Model_Edit::check_reg_city_name', [
            ':value'
        ])->rule('city_name', 'min_length', [
            ':value',
            '2'
        ])->rule('city_name', 'max_length', [
            ':value',
            '30'
        ])->rule('city_name', 'Model_Edit::checkcityname', [
            ':value',
           DEFAULT_STATE,// $arr['state_name'],
            DEFAULT_COUNTRY, //$arr['country_name'],
            $uid
        ])->rule('zipcode', 'not_empty');
		//->rule('state_name', 'not_empty')
		//->rule('country_name', 'not_empty')
		/*->rule('city_model_fare', 'not_empty')
		->rule('city_model_fare', 'numeric')
		->rule('city_model_fare', 'decimal', array(
            ':value',
            '2'
        ));*/
    }
    // To Check Motorname is Already Available or Not
    public static function checkcityname($name, $stateid, $countryid, $uid)
    {
        // Check if the username already exists in the database
        /*$result = DB::select('city_name')->from(CITY)->where('city_name', '=', $name)->where('city_stateid', '=', $stateid)->where('city_countryid', '=', $countryid)->where('city_id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$city_id = (int)$uid;
		$country_id = (int)$countryid;
		$state_id = (int)$stateid;
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->find(MDB_CSC,[ "\$and" => [[ "stateinfo.cityinfo.city_name" => new \MongoDB\BSON\Regex('^' . $name, 'i')] , ['stateinfo.cityinfo.city_countryid'=>['$eq'=>$country_id]],['stateinfo.cityinfo.city_stateid'=>['$eq'=>$state_id]],['stateinfo.cityinfo.city_id'=>['$ne'=>$city_id]]]],['stateinfo.cityinfo.city_name'])->sort(['stateinfo.cityinfo.city_id'=>-1]);
		$result = (!empty($res))?iterator_to_array($res):[];
		//echo '<pre>';print_r($result);
		return (count($result) > 0)?false:true;
    }
    public function editcity($cityid, $post)
    {
        /*$result = DB::update(CITY)->set(array(
            'city_name' => $post['city_name'],
            'zipcode' => $post['zipcode'],
            'city_stateid' => $post['state_name'],
            'city_countryid' => $post['country_name'],
            'city_model_fare' => $post['city_model_fare']
        ))->where('city_id', '=', $uid)->execute();
        return ($result)?1:0;*/
		
		//MongodB
		$city_id = (int)$cityid;
		$post['country_name'] = isset($post['country_name'])?$post['country_name']:DEFAULT_COUNTRY;
        $post['state_name'] = isset($post['state_name'])?$post['state_name']:DEFAULT_STATE;
		$country_id = (int)$post['country_name'];
		$state_id = (int)$post['state_name'];
		
		$state_index = commonfunction::get_collection_index($country_id,$state_id,$city_id,'state');
		$cityindex = commonfunction::get_collection_index($country_id,$state_id,$city_id,'city');
		//print_r($state_index);print_r($city_index);
		$city_status = $cityindex['city_status'];
		$city_default = $cityindex['city_default'];
		$city_index = $cityindex['city_index'];
		
		$data = [
			"city_id" => $city_id,
			"city_status" => $city_status,
			"default" => (int)$city_default,
            'city_name' => $post['city_name'],
            'zipcode' => $post['zipcode'],
            'city_stateid' => $state_id,
            'city_countryid' => $country_id
            //'city_model_fare' => (float)$post['city_model_fare']
        ];
		$index_key = "stateinfo.".$state_index.".cityinfo.".$city_index;
		//echo $index_key;exit;
		$city_array = [$index_key => $data ];
		$result = $this->mongo_db->update(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id,'stateinfo.cityinfo.city_id'=>$city_id],['$set'=>$city_array],['upsert'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function state_countrydetails($stateid,$countryid)
    {
        /*$result = DB::select()->from(STATE)->join(COUNTRY, 'LEFT')->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where(STATE . '.state_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$country_id = (int)$countryid;
		$state_id = (int)$stateid;
		
		/*$rs = $this->mongo_db->find(MDB_CSC,array('stateinfo.state_id'=>$state_id,'_id'=>$country_id),array('stateinfo.$'=>1))->sort(array('stateinfo.state_id'=>-1));
		//echo '<pre>';print_r(iterator_to_array($rs));exit;
		$result = (!empty($rs))?iterator_to_array($rs):array();
		if (!empty($result)){
			$res = (count($result[$country_id]['stateinfo']) > 0) ? array_reverse($result[$country_id]['stateinfo']) : array();
		} else {
			$res = $result;
		}
		//print_r($res);exit;
		return $res; */
		//MongoDB with aggregate process only
		$ops = [
			['$unwind' => '$stateinfo'],
			['$match' => ['stateinfo.state_id'=>$state_id,'stateinfo.state_countryid'=>$country_id]],
			['$project' => ['_id' => 0,
				'state_id' => '$stateinfo.state_id', 
				'state_name' => '$stateinfo.state_name',
				'state_countryid' => '$stateinfo.state_countryid',
			]]
		];
		$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result'][0]:[];
    }
    public function validate_editstate($arr, $uid)
    {
        return Validation::factory($arr)->rule('state_name', 'not_empty')
        //->rule('state_name', 'alpha_dash')
            ->rule('state_name', 'Model_Edit::check_reg_state_name', [
            ':value'
        ])->rule('state_name', 'min_length', [
            ':value',
            '2'
        ])->rule('state_name', 'max_length', [
            ':value',
            '30'
        ])->rule('state_name', 'Model_Edit::checkstatename', [
            ':value',
            $arr['country_name'],
            $uid
        ])->rule('country_name', 'not_empty');
    }
	// Check if the state_name already exists in the database
    public static function checkstatename($name, $countryid, $uid)
    {
        /*$result = DB::select('state_name')->from(STATE)->where('state_name', '=', $name)->where('state_countryid', '=', $countryid)->where('state_id', '!=', $uid)->execute()->as_array();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$cid = (int)$uid;
		$sid = (int)$countryid;
		$mongodb = MangoDB::instance('default');
		$res = $mongodb->find(MDB_CSC,[ "\$and" => [[ "stateinfo.state_name" => new \MongoDB\BSON\Regex('^' . $name, 'i')] , ['_id'=>['$eq'=>$sid]],['stateinfo.state_id'=>['$ne'=>$cid]]]],['stateinfo.state_name'])->sort(['stateinfo.state_id'=>-1]);
		$result = (!empty($res))?iterator_to_array($res):[];
		//echo '<pre>';print_r($result);
		return (count($result) > 0)?false:true;
    }
    public function editstate($uid, $post)
    {
        /*$result = DB::update(STATE)->set(array(
            'state_name' => $post['state_name'],
            'state_countryid' => $post['country_name']
        ))->where('state_id', '=', $uid)->execute();
        return (count($result) > 0)?false:true;*/
		
		//MongoDB
		$query = [
            'stateinfo.state_name' => $post['state_name'],
            'stateinfo.state_countryid' => (int)$post['country_name']
        ];
		$cid = (int)$post['country_name'];
		$result = $this->mongo_db->update(MDB_CSC,['stateinfo.state_id'=>(int)$uid,'stateinfo.state_countryid'=>(int)$cid],['$set'=>$query],['upsert'=>true]);
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function validate_editmanager($arr, $uid)
    {
        return Validation::factory($arr)
		->rule('firstname', 'not_empty')
        //->rule('firstname', 'alpha_dash') 
        ->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')
        //->rule('lastname', 'alpha_dash')             
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
        ->rule('email', 'not_empty')->rule('email', 'email')
		->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])->rule('phone', 'Model_Edit::checkphone', [
            ':value',
            $uid
        ])
        //->rule('company_name', 'not_empty')
        //->rule('company_name', 'alpha_dash')             
        //->rule('company_name', 'Model_Edit::checkmanagercompany', array(':value',$arr['city'],$arr['state'],$arr['country'],$uid))
		->rule('address', 'not_empty');
		/*->rule('country', 'not_empty')
		->rule('state', 'not_empty') */
		//->rule('city', 'not_empty');
    }
    public function validate_editadmin($arr, $uid)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('phone', 'not_empty')
        //->rule('phone', 'numeric')
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])->rule('phone', 'Model_Edit::checkphone', [
            ':value',
            $uid
        ])->rule('address', 'not_empty')->rule('country', 'not_empty');
    }
    public static function checkmanagercompany($companyname, $cityid, $stateid, $countryid, $uid)
    {
        $result = DB::select()->from(PEOPLE)->where('company_id', '=', $companyname)->where('login_country', '=', $countryid)->where('login_state', '=', $stateid)->where('login_city', '=', $cityid)->where('user_type', '=', 'M')->where('id', '!=', $uid)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    //To update Edit Manager Functionalities 
    public function edit_manager($post, $uid)
    {
        //$username = Html::chars($post['username']);
        //$password = Html::chars(md5($post['password']));
        /*$result = DB::update(PEOPLE)->set(array(
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => $post['country'],
            'login_state' => $post['state'],
            'login_city' => $post['city'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'company_id' => $post['company_name']
        ))->where('id', '=', $uid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
		
		$post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
		//MongoDB
		$array = [
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => (int)$post['country'],
            'login_state' => (int)$post['state'],
            'login_city' => (int)$post['city'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'company_id' => (int)$post['company_name']
        ];
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$array],['upsert'=>true]);
		return (empty($result['err']))?1:0;
    }
    public function edit_admin($post, $uid)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => $post['country'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => $post['phone']
        ))->where('id', '=', $uid)->execute();
        return ($result)?1:0;*/
		//MongoDB
		$data = [
            'name' => $post['firstname'],
            'address' => $post['address'],
            'login_country' => (int)$post['country'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'phone' => (int)$post['phone'],
			'updated_date' => $this->currentdate,
        ];
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$data],['upsert'=>true]);
		//print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
	
    public function validate_editassigntaxi($arr, $uid)
    {
        return Validation::factory($arr)->rule('company_name', 'not_empty')->rule('country', 'not_empty')->rule('state', 'not_empty')->rule('city', 'not_empty')->rule('driver', 'not_empty')->rule('startdate', 'not_empty')->rule('enddate', 'not_empty')->rule('enddate', 'Model_Edit::checkassigntaxi', [
            ':value',
            $arr,
            $uid
        ])->rule('taxi', 'not_empty');
    }
   /* public static function checkassigntaxi($enddate, $post, $uid)
    {
        $country_id      = $post['country'];
        $state_id        = $post['state'];
        $city_id         = $post['city'];
        $company_name    = $post['company_name'];
        $driver_id       = $post['driver'];
        $taxi_id         = $post['taxi'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
        /*$country_where = ($country_id) ? " AND mapping_countryid = '$country_id'" : "";
        $city_where = ($city_id) ? " AND mapping_cityid = '$city_id'" : "";
        $company_where = ($company_name) ? " AND mapping_companyid = '$company_name'" : "";
        */
      /*  $driver_where    = '';
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
        $query  = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id  left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where 1=1  and mapping_status='A' $cond_where  $date_where and mapping_id != '$uid' order by mapping_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    } */
	
	public static function checkassigntaxi($enddate, $post, $uid)
    {
		$country_id      = $post['country'];
        $state_id        = $post['state'];
        $city_id         = $post['city'];
        $company_name    = $post['company_name'];
        $driver_id       = $post['driver'];
        $taxi_id         = $post['taxi'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
		$match_query                     = [];
		$match_query['mapping.mapping_status'] = 'A';
		$match_query['mapping._id'] = ['$ne' =>(int)$uid];
		if ($driver_id) {
			$match_query['mapping.mapping_driverid'] = (int)$driver_id;
		}
		if ($taxi_id) {
			$match_query['mapping.mapping_taxiid'] = (int)$taxi_id;
		}
		
		if ($startdate && $enddate) {
			$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
			$match_query['mapping.mapping_enddate'] = ['$lt' => $enddate];
		}else{
			if ($startdate) {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
				$match_query['mapping.mapping_enddate'] = ['$lt' => $startdate];
			}
			if ($enddate) {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $enddate];
				$match_query['mapping.mapping_enddate'] = ['$lt' => $enddate];
			}
		}
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'mapping_countryid',
					'foreignField' => 'mapping_cityid',
					'as' => 'mapping'
				]
			],
			[
				'$unwind' => '$mapping'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI,
					'localField' => 'mapping.mapping_taxiid',
					'foreignField' => '_id',
					'as' => 'taxi'
				]
			],
			[
				'$unwind' => '$taxi'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'mapping.mapping_companyid',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'result' => '$mapping._id'
				]
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
		//mongo Instance
		$mongo_db        = MangoDB::instance('default');
		$result          = $mongo_db->aggregate(MDB_CSC, $arguments);
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }	
	
	public function assigntaxi_details($uid)
    {
        $match_query = [];
		$match_query['mapping._id'] = (int)$uid;
		$arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'mapping_countryid',
					'foreignField' => 'mapping_cityid',
					'as' => 'mapping'
				]
			],
			[
				'$unwind' => '$mapping'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'mapping.mapping_companyid',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$match' => $match_query
			],
			[
				'$project' => [
					'mapping_companyid' => '$mapping.mapping_companyid',
					'mapping_countryid' => '$mapping.mapping_countryid',
					'mapping_stateid' => '$mapping.mapping_stateid',
					'mapping_cityid' => '$mapping.mapping_cityid',
					'mapping_driverid' => '$mapping.mapping_driverid',
					'mapping_taxiid' => '$mapping.mapping_taxiid',
					'mapping_startdate' => '$mapping.mapping_startdate',
					'mapping_enddate' => '$mapping.mapping_enddate',
				]
			],
		];
		$result    = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result'])) ? $result['result'] : [];
    }
    //To update Edit Manager Functionalities
    /*public static function edit_assigntaxi($post, $uid)
    {
        $edit_company = Model::factory('edit');
        $result       = DB::update(TAXIMAPPING)->set(array(
            'mapping_driverid' => $post['driver'],
            'mapping_taxiid' => $post['taxi'],
            'mapping_companyid' => $post['company_name'],
            'mapping_countryid' => $post['country'],
            'mapping_stateid' => $post['state'],
            'mapping_cityid' => $post['city'],
            'mapping_startdate' => $post['startdate'],
            'mapping_enddate' => $post['enddate']
        ))->where('mapping_id', '=', $uid)->execute();
        if ($result) {
            $resultquery = DB::select('email', 'name')->from(PEOPLE)->where('id', '=', $post['driver'])->execute()->as_array();
            $details     = array();
            foreach ($resultquery as $key => $res) {
                $details[$key]['taxi_no'] = $edit_company->get_Taxino($post['taxi']);
                $details[$key]['name']    = $res['name'];
                $details[$key]['email']   = $res['email'];
            }
            return $details;
        } else {
            return 0;
        }
    } */
	public function edit_assigntaxi($post, $uid)
    {       
		$data      = [
            'mapping_driverid' => (int)$post['driver'],
            'mapping_taxiid' => (int)$post['taxi'],
            'mapping_companyid' => (int)$post['company_name'],
            'mapping_countryid' => (int)$post['country'],
            'mapping_stateid' => (int)$post['state'],
            'mapping_cityid' => (int)$post['city'],
            'mapping_startdate' => $post['startdate'],
            'mapping_enddate' => $post['enddate']
		];
		$result = $this->mongo_db->update(MDB_TAXI_DRIVER_MAPPING,['_id'=>(int)$uid],['$set'=>$data],['upsert'=>false]);
		if ($result) {
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
					'$match' => ['people._id' => (int)$post['driver'] ]
				],
				[
					'$project' => [
						'taxi_no' => '$taxi.taxi_no',
						'name' => '$people.name',
						'email' => '$people.email',
					]
				],
			];
			$result          = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING, $arguments);
			$resultquery = (!empty($result['result']) && isset($result['result'])) ? $result['result']: 0; 
            return $resultquery;
        } else {
            return 0;
        }
    }
	
    public function get_Taxino($taxi_id)
    {
        $result = DB::select()->from(TAXI)->where('taxi_id', '=', $taxi_id)->execute()->as_array();
        return $result[0]['taxi_no'];
    }
    public function unavailability_details($id = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id  Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_id=$id";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function validate_unavailabledriver($arr, $uid)
    {
        return Validation::factory($arr)->rule('reason', 'not_empty')->rule('startdate', 'not_empty')->rule('enddate', 'not_empty')->rule('enddate', 'Model_Manage::date_diff', [
            'value',
            $arr['startdate']
        ])->rule('enddate', 'Model_Edit::checkunavailable', [
            ':value',
            $arr,
            $uid
        ]);
    }
    public static function date_diff($enddate, $startdate)
    {
        if ($startdate > $enddate) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function checkunavailable($enddate, $post, $uid)
    {
        $driver_id       = $post['driver_id'];
        $taxi_id         = $post['taxi_id'];
        $reason          = $post['reason'];
        $startdate       = $post['startdate'];
        $enddate         = $post['enddate'];
        $driver_where    = '';
        $startdate_where = '';
        $date_where      = '';
        $enddate_where   = '';
        if ($startdate && $enddate) {
            $date_where = " AND ( ( '$startdate' between u_startdate and  u_enddate ) or ( '$enddate' between u_startdate and  u_enddate) )";
        } else {
            if ($startdate) {
                $startdate_where = " AND '$startdate'  between u_startdate and  u_enddate ";
            }
            if ($enddate) {
                $enddate_where = " AND '$enddate'  between u_startdate  and  u_enddate ";
            }
            $date_where = $startdate_where . $enddate_where;
        }
        $query  = " select * from " . UNAVAILABILITY . " where 1=1  and u_driverid='$driver_id' and taxi_id='$taxi_id' $date_where and u_id!='$uid' ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function edit_unavailabledriver($post, $uid)
    {
        $result = DB::update(UNAVAILABILITY)->set([
            'u_reason' => $post['reason'],
            'u_startdate' => $post['startdate'],
            'u_enddate' => $post['enddate']
        ])->where('u_id', '=', $uid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function getunavailabledriverlist($driver_id = '', $taxi_id = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id  Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_driverid='$driver_id' and unable.u_taxiid='$taxi_id'";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($rs);
    }
    public function get_unavailabledriverlist($driver_id = '', $taxi_id = '', $offset = '', $val = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id  Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_driverid='$driver_id' and unable.u_taxiid='$taxi_id' limit $val offset $offset";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    //Validate the edit menu
    public function validate_editmenu($arr, $mid)
    {
        return Validation::factory($arr)->rule('menu_name', 'not_empty')->rule('menu_name', 'min_length', [
            ':value',
            '2'
        ])->rule('menu_name', 'max_length', [
            ':value',
            '30'
        ])->rule('slug', 'not_empty')->rule('menu_name','Model_Edit::menu_name_exits',[':value',$mid]);
    }
    //selected manu 
    public function get_menu($mid)
    {
        /*$result = DB::select()->from(MENU)->where(MENU . '.menu_id', '=', $mid)->execute()->as_array();
        return $result;*/
        $ops = [
					['$match'=>['_id'=>(int)$mid]],
					[
						'$project' => [
						'_id' => '$_id',
						'menu_name' => '$menu_name',
						'arabic_menu_name' => '$arabic_menu_name',
						'menu_link' => '$menu_link',
						'status_post' => '$status_post',
						]
					],
					[
						'$sort' => ["_id"=>-1]
					],
			];
        $result = $this->mongo_db->aggregate(MDB_CMS,$ops);
        //print_r(($result));exit;
        return $result['result'];
    }
    public function update_menu($mid, $post)
    {
        $status = $post['status_posts'];
        if ($status == 'Publish') {
            $status = 'P';
        } else if ($status == 'Unpublish') {
            $status = 'U';
        }
        $cms_data      = [
			'menu_name' => $post['menu_name'],
			'arabic_menu_name' => $post['arabic_menu_name'],
			'menu_link' => $post['slug'],
			'status_post' => $status,
		];
		$cms_result = $this->mongo_db->update(MDB_CMS,['_id'=>(int)$mid],['$set'=>$cms_data],['upsert'=>false]);
		return (count($cms_result))?1:0;
        /*$result = DB::update(MENU)->set(array(
            'menu_name' => $post['menu_name'],
            'menu_link' => $post['slug'],
            'status_post' => $status
        ))->where('menu_id', '=', $mid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }*/
    }
    //Check the menu already exists
    public static function menu_name_exits($menu_name,$mid)
    {
        /*$result = DB::select()->from(MENU)->where(MENU . '.menu_id', '!=', $mid)->where(MENU . '.menu_name', '=', $post['menu_name'])->execute()->as_array();
        if ($result) {
            return 1;
        }*/
        $mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_CMS,['_id'=>['$ne'=>(int)$mid],"menu_name"=>$menu_name]);
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
    //Validate the edit menu
    public function validate_editmile($arr, $mid)
    {
        return Validation::factory($arr)->rule('mile', 'not_empty')->rule('mile', 'digit')->rule('mile', 'max_length', [
            ':value',
            '30'
        ]);
    }
    //selected mile 
    public function get_mile($mid)
    {
        $result = DB::select()->from(MILES)->where(MILES . '.id', '=', $mid)->execute()->as_array();
        return $result;
    }
    public function update_mile($mid, $post)
    {
        $result = DB::update(MILES)->set([
            'mile_name' => $post['mile']
        ])->where('id', '=', $mid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    //Check the mile already exists
    public function mile_name_exits($mid, $post)
    {
        $result = DB::select()->from(MILES)->where(MILES . '.id', '!=', $mid)->where(MILES . '.mile_name', '=', $post['mile'])->execute()->as_array();
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
    public static function check_fare_zero($base_fare)
    {
        if ($base_fare == 0) {
            return false;
        } else {
            return true;
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
    public static function check_minute_fare($minute_fare)
    {
        if (preg_match('/^\d+(\.\d+)*$/', $minute_fare)) {
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
        if (preg_match('/^[+-]?([0-9]*[.])?[0-9]+$/', $night_fare)) {
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
    public function bannerdetails($uid)
    {
        $company_id = $this->company_id;
        $query      = "select * from " . COMPANY_CMS . " where company_id = $company_id and id= $uid ORDER BY `id` ASC";
        $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function update_banner_image($image, $id)
    {
        $sql     = "select banner_image from " . COMPANY_CMS . " where id='$id'";
        $results = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (!empty($results[0]['banner_image'])) {
            $id1 = DOCROOT . BANNER_IMGPATH . $results[0]['banner_image'];
            if (file_exists($id1)) {
                $id1 = BANNER_IMGPATH . $results[0]['banner_image'];
                unlink($id1);
            }
        }
        if ($id > 0) {
            if (isset($image)) {
                $query = [
                    'banner_image' => $image,
                    'type' => '2'
                ];
            }
            $result = DB::update(COMPANY_CMS)->set($query)->where('id', '=', $id)->execute();
        } else {
            $result = DB::insert(CMS)->columns([
                'banner_image',
                'type',
                'status'
            ])->values([
                $image,
                '2',
                '1'
            ])->execute();
        }
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    public function update_banner_details($tag, $image_tag, $id)
    {
        $company_id = $this->company_id;
        $query      = [
            'alt_tags' => $tag,
            'image_tag' => $image_tag
        ];
        $rs         = DB::update(COMPANY_CMS)->set($query)->where('company_id', '=', $company_id)->where('id', '=', $id)->execute();
        if ($rs) {
            return 1;
        } else {
            return 0;
        }
    }
    public function get_faqdetails($fid)
    {
        $query  = "select * from " . PASSENGERS_FAQ . " where faq_id = $fid";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function validate_editfaq($arr, $fid)
    {
        return Validation::factory($arr)->rule('faq_title', 'not_empty')->rule('faq_title', 'Model_Edit::checkfaqtitle', [
            ':value',
            $fid
        ])->rule('faq_details', 'not_empty');
    }
    public function editfaq($post, $fid)
    {
        $result = DB::update(PASSENGERS_FAQ)->set([
            'faq_title' => $post['faq_title'],
            'faq_details' => $post['faq_details'],
            'status' => 'A'
        ])->where('faq_id', '=', $fid)->execute();
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    // To Check Currency code is equal to Currency symbol
    public static function checksite_currency($currencysymbol, $currencycode)
    {
        // To Check Currency code is equal to Currency symbol
        $result = DB::select('country_id')->from(COUNTRY)->where('currency_code', '=', $currencycode)->where('currency_symbol', '=', $currencysymbol)->execute()->as_array();
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_company_payment_settings($company_user_id)
    {
        /*$result = DB::select()->from(COMPANY_PAYMENT_MODULES)->where('company_user_id', '=', $company_user_id)->execute()->as_array();
        return $result;*/
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_COMPANY,['companydetails.userid'=>(int)$company_user_id],['paymentmodule.pay_mod_id','paymentmodule.pay_mod_image','paymentmodule.pay_mod_name','paymentmodule.pay_active','paymentmodule.pay_mod_default']);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['paymentmodule']))?$result['paymentmodule']:[];
    }
    function findcompany_timezone($company_cid)
    {
        $rs = DB::select('time_zone')->from(COMPANY)->where('cid', '=', $company_cid)->execute()->as_array();
        if (count($rs) > 0)
            return $rs[0]['time_zone'];
        else
            return 0;
    }
    public function get_promocodedetails($id)
    {
        /*$query  = "SELECT distinct * ,count(passenger_id) as passenger_count  FROM " . PASSENGER_PROMO . " group by promocode  HAVING `passenger_promoid` = $id";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;*/
		
		$query = $this->mongo_db->find_one(MDB_PASSENGERS_PROMO,['_id' => (int)$id],['_id', 'promocode', 'promo_discount', 'start_date', 'expire_date', 'promo_limit']);
		//echo "<pre>"; print_r($query); exit;
		return $query;
    }
    public function validate_editpromocode($arr, $id)
    {
        $validation = Validation::factory($arr)->rule('promo_limit', 'not_empty')
        //->rule('model_name', 'alpha_dash')
            ->rule('promo_limit', 'numeric');
        return $validation;
    }
    public function get_promocode_users($promocode)
    {
        /* $result = DB::select()->from(PASSENGER_PROMO)->where(PASSENGER_PROMO . '.promocode', '=', $promocode)->join(PASSENGERS)->on(PASSENGERS . '.id', '=', PASSENGER_PROMO . '.passenger_id')->where(PASSENGERS . '.user_status', '=', 'A')->execute()->as_array();
        return $result; */
		//MongoDB
		$arguments = [
			['$lookup' => [
				'from'=>MDB_PASSENGERS,
				'localField'=> "passenger_id",
				'foreignField' => "_id",
				'as'=> "passenger"
				]
			],
			['$match'=>['passenger.user_status'=>"A","promocode" => $promocode]],
			['$unwind'=>'$passenger'],
			['$project' => [
					'promocode' => '$promocode',
					'name'=>'$passenger.name',
					'email'=>'$passenger.email',
				]
			]
		];
		$results = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
		return (!empty($results['result']))?$results['result']:[];
    }
    public function editpromocode($post, $promocode)
    {
        /*$result = DB::update(PASSENGER_PROMO)->set(array(
            'start_date' => $post['start_date'],
            'expire_date' => $post['expire_date'],
            'promo_limit' => $post['promo_limit']
        ))->where('promocode', '=', $promocode)->execute();
        return 1;*/
	
		$data     = [
			'start_date' => new \MongoDB\BSON\UTCDateTime(strtotime($post['start_date']) * 1000),
            'expire_date' => new \MongoDB\BSON\UTCDateTime(strtotime( $post['expire_date']) * 1000),
            'promo_limit' => (int)$post['promo_limit']
		];
		$result = $this->mongo_db->update(MDB_PASSENGERS_PROMO,['promocode'=>$promocode],['$set'=>$data],['upsert'=>false,'multiple'=>true]);
		return (empty($result['err']))?1:$result['err'];
    }
    // Check driver licence Id is Already Exist or Not
    public static function checklicenceId($value, $uid)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(id)'),
            'total'
        ))->from(PEOPLE)->where('driver_license_id', '=', $value)->where('id', '!=', $uid)->execute()->get('total');
        if ($result > 0) {
            return false;
        } else {
            return true;
        }*/
		//MongoDB with aggregate process only
		$mongodb        = MangoDB::instance('default');
		$arguments = [
			['$match'=>['_id'=>['$ne' => (int)$uid], 'driver_license_id'=> $value]],
			['$project' => ['pid' => '$_id']],
			['$group'=>['_id' => NULL,'count' => ['$sum' => 1 ]]],
		];
		$results = $mongodb->aggregate(MDB_PEOPLE,$arguments);
		//print_r($results['result'][0]['count']);exit;
		return (isset($results['result'][0]['count']) && $results['result'][0]['count'] > 0)?false:true;
	
    }
    //pco licence number already exist
    public static function checkpcolicenceNo($value, $uid)
    {
       /* $result = DB::select(array(
            DB::expr('COUNT(' . PEOPLE . '.id)'),
            'total'
        ))->from(PEOPLE)->join(DRIVER_INFO, 'LEFT')->on(DRIVER_INFO . '.driver_id', '=', PEOPLE . '.id')->where(DRIVER_INFO . '.driver_pco_license_number', '=', $value)->where(PEOPLE . '.id', '!=', $uid)->execute()->get('total');
        if ($result > 0) {
            return false;
        } else {
            return true;
        }*/
		
		//MongoDB with aggregate process only
		
		$mongodb        = MangoDB::instance('default');
		$arguments = [
			['$lookup' => [
				'from'=>MDB_DRIVER_INFO,
				'localField'=> "_id",
				'foreignField' => "_id",
				'as'=> "driver_info"
				]
			],
			['$match'=>['_id'=>['$ne' => (int)$uid], 'driver_info.driverinfo.driver_pco_license_number'=> $value]],
			['$project' => ['pid' => '$_id']],
			['$group'=>['_id' => NULL,'count' => ['$sum' => 1 ]]],
		];
		$results = $mongodb->aggregate(MDB_PEOPLE,$arguments);
		//print_r($results['result']);exit;
		return (isset($results['result'][0]['count']) && $results['result'][0]['count'] > 0)?false:true;
    }
    //insurance number already exist
    public static function checkinsuranceNo($value, $uid)
    {
        /* $result = DB::select(array(
            DB::expr('COUNT(' . PEOPLE . '.id)'),
            'total'
        ))->from(PEOPLE)->join(DRIVER_INFO, 'LEFT')->on(DRIVER_INFO . '.driver_id', '=', PEOPLE . '.id')->where(DRIVER_INFO . '.`driver_insurance_number`', '=', $value)->where(PEOPLE . '.id', '!=', $uid)->execute()->get('total');
        if ($result > 0) {
            return false;
        } else {
            return true;
        } */
		
		//MongoDB with aggregate process only
		
		$mongodb        = MangoDB::instance('default');
		//MongoDB
		$arguments = [
			['$lookup' => [
				'from'=>MDB_DRIVER_INFO,
				'localField'=> "_id",
				'foreignField' => "_id",
				'as'=> "driver_info"
				]
			],
			['$match'=>['_id'=>['$ne' => (int)$uid], 'driver_info.driverinfo.driver_insurance_number'=> $value]],
			['$project' => ['pid' => '$_id']],
			['$group'=>['_id' => NULL,'count' => ['$sum' => 1 ]]],
		];
		$results = $mongodb->aggregate(MDB_PEOPLE,$arguments);
		//print_r($results['result']);exit;
		return (isset($results['result'][0]['count']) && $results['result'][0]['count'] > 0)?false:true;
    }
    //national insurance number already exist
    public static function checkNationalinsuranceNo($value, $uid)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(' . PEOPLE . '.id)'),
            'total'
        ))->from(PEOPLE)->join(DRIVER_INFO, 'LEFT')->on(DRIVER_INFO . '.driver_id', '=', PEOPLE . '.id')->where(DRIVER_INFO . '.driver_national_insurance_number', '=', $value)->where(PEOPLE . '.id', '!=', $uid)->execute()->get('total');
        if ($result > 0) {
            return false;
        } else {
            return true;
        }*/
		
		//MongoDB with aggregate process only
		$mongodb        = MangoDB::instance('default');
		$arguments = [
			['$lookup' => [
				'from'=>MDB_DRIVER_INFO,
				'localField'=> "_id",
				'foreignField' => "_id",
				'as'=> "driver_info"
				]
			],
			['$match'=>['_id'=>['$ne' => (int)$uid], 'driver_info.driverinfo.driver_national_insurance_number'=> $value]],
			['$project' => ['pid' => '$_id']],
			['$group'=>['_id' => NULL,'count' => ['$sum' => 1 ]]],
		];
		$results = $mongodb->aggregate(MDB_PEOPLE,$arguments);
		//print_r($results['result']);exit;
		return (isset($results['result'][0]['count']) && $results['result'][0]['count'] > 0)?false:true;
    }
    // To Check taxi insurance number is Already Available or Not
    public static function check_taxinsurance_number($number, $uid)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(taxi_id)'),
            'total'
        ))->from(TAXI)->where('taxi_insurance_number', '=', $number)->where('taxi_id', '!=', $uid)->execute()->get('total');
        return ($result > 0)?false:true;*/
		
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,['taxi_insurance_number'=>$number,'_id'=>['$ne'=>(int)$uid]],['taxi_insurance_number']);
		return ($result>0)?false:true;
    }
    // To Check taxi pco licence number is Already Available or Not
    public static function check_taxipco_number($number, $uid)
    {
        /*$result = DB::select(array(
            DB::expr('COUNT(taxi_id)'),
            'total'
        ))->from(TAXI)->where('taxi_pco_licence_number', '=', $number)->where('taxi_id', '!=', $uid)->execute()->get('total');
        return ($result > 0)?false:true;*/
	
		//MongoDB
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_TAXI,['taxi_pco_licence_number'=>$number,'_id'=>['$ne'=>(int)$uid]],['taxi_pco_licence_number']);
		return ($result>0)?false:true;
    }
	//To Get all payment modules
	public function payment_modules()
	{
		/*$query2 = "SELECT * FROM ".PAYMENT_MODULES." order by pay_mod_id asc";
		$result = Db::query(Database::SELECT, $query2)->execute()->as_array();
		//print_r($result);exit;*/
		//MongoDB
		$result = $this->mongo_db->find(MDB_PAYMENT_MODULES,[],[]);
		return (!empty($result))?iterator_to_array($result):[];
	}
	
	public function check_peoplecompanyid($id)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return 0;
        }*/
		
		$result = $this->mongo_db->find(MDB_PEOPLE,['_id'=>(int)$id]);
		return (!empty($result))?iterator_to_array($result):0;
	}
	
	// Accounts Type Module
	//selected accounts type 
    public function get_account_type($mid)
    {
        $ops = [
					['$match'=>['_id'=>(int)$mid]],
					[
						'$project' => [
						'_id' => '$_id',
						'account_type' => '$account_type',
						'account_type_arabic' => '$account_type_arabic',
						'status' => '$status',
						]
					],
					[
						'$sort' => ["_id"=>-1]
					],
			];
		$result = $this->mongo_db->aggregate(MDB_CHILD_ACCOUNT_TYPE,$ops);		
        return $result['result'];
    }
	
	//Validate the edit account type
    public function validate_editaccounttype($arr, $mid)
    {
        return Validation::factory($arr)->rule('account_type', 'not_empty')->rule('account_type', 'min_length', [
            ':value',
            '2'
        ])->rule('account_type', 'max_length', [
            ':value',
            '30'
        ])->rule('account_type','Model_Edit::account_type_exists',[':value',$mid])->rule('account_type_arabic', 'not_empty');
    }
	
	//Check the account type already exists
    public static function account_type_exists($account_type,$mid)
    {
		$mongodb = MangoDB::instance('default');
		$result = $mongodb->count(MDB_CHILD_ACCOUNT_TYPE,['_id'=>['$ne'=>(int)$mid],'$text' => ['$search' => "\"$account_type\""]]);		
		//$result = $mongodb->count(MDB_CHILD_ACCOUNT_TYPE,array('_id'=>array('$ne'=>(int)$mid),"account_type"=>$account_type));
        return ($result ==1)?false:true;
    }
	
	public function update_account_type($mid, $post)
    {
		/*
        $status = $post['status_posts'];
		
        if ($status == 'Publish') {
            $status = 'A';
        } else if ($status == 'Unpublish') {
            $status = 'D';
        }
        */
        $cat_data      = [
			'account_type' => $post['account_type'],
			'account_type_arabic' => $post['account_type_arabic'],
			//'status' => $status,
		];
		$cat_result = $this->mongo_db->update(MDB_CHILD_ACCOUNT_TYPE,['_id'=>(int)$mid],['$set'=>$cat_data],['upsert'=>false]);
		return (count($cat_result))?1:0;        
    }
    
    /** COUPON PACKAGE **/
       public function coupon_package_details($uid)
    {
        /*$result = DB::select()->from(MDB_COUPON_PACKAGE)->where('coupon_package_id', '=', $uid)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$res = $this->mongo_db->find_one(MDB_COUPON_PACKAGE,['_id'=>(int)$uid],['_id','coupon_package_name','coupon_package_description','corporate_commission','passenger_commission','coupon_package_status']);
		return (!empty($res))?$res:[];
    }
    public function validate_editcoupon_package($arr, $uid)
    {
        return Validation::factory($arr)->rule('coupon_package_name', 'not_empty')->rule('coupon_package_name', 'min_length', [
            ':value',
            '4'
        ])->rule('coupon_package_name', 'max_length', [
            ':value',
            '100'
        ])->rule('coupon_package_description', 'not_empty')->rule('coupon_package_description', 'min_length', [
            ':value',
            '20'
        ])->rule('corporate_commission', 'not_empty')->rule('corporate_commission', 'digit')->rule('corporate_commission', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['corporate_commission']
        ])->rule('passenger_commission', 'not_empty')->rule('passenger_commission', 'digit')->rule('passenger_commission', 'Model_Edit::check_fare_zero', [
            ':value',
            $arr['passenger_commission']
        ]);
    }
    
    public function edit_coupon_package($post, $uid)
    {
       
		
		$query = [
            'coupon_package_name' => $post['coupon_package_name'],
            'coupon_package_description' => $post['coupon_package_description'],
            'corporate_commission' =>(int) $post['corporate_commission'],
            'passenger_commission' =>(int) $post['passenger_commission']
          
        ];
		
		//MongoDB
		$result = $this->mongo_db->update(MDB_COUPON_PACKAGE,['_id'=>(int)$uid],['$set'=>$query],['upsert'=>false]);
		return (empty($result['err']))?1:$result['err'];
    }
     public static function checkcoupon_packagename($coupon_packagename)
    {
		$mongodb = MangoDB::instance('default');
        // Check if the username already exists in the database
		$result = $mongodb->find_one(MDB_COUPON_PACKAGE,['coupon_package_name' => $coupon_packagename],['_id']);

        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
     public function corporate_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'D')->execute()->as_array();
        return $result;*/
		$arguments = [
			['$match'	=> ['_id' => (int)$uid, 'user_type' => 'O']],
			[
				'$project' => [
					'id' => '$_id',
					'name'=>'$name',
					'address'=>'$address',
					'lastname'=>'$lastname',
					'gender'=>'$gender',
					'email'=>'$email',
					'phone'=>'$phone',
					'org_password'=>'$org_password',
					'user_type' => '$user_type',
					'status' => '$status',
					'login_country' => '$login_country',
					'login_state' => '$login_state',
					'login_city' => '$login_city',
					
					'profile_picture' => '$profile_picture'
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result']))?$result['result']:[];
    }
      public function validate_editcorporate($arr, $uid)
    {
        return Validation::factory($arr)->rule('firstname', 'not_empty')
        //->rule('username', 'alpha_dash')
            ->rule('firstname', 'min_length', [
            ':value',
            '4'
        ])->rule('firstname', 'max_length', [
            ':value',
            '30'
        ])->rule('lastname', 'not_empty')
        //->rule('username', 'alpha_dash')            
        //->rule('lastname', 'min_length', array(':value', '4'))            
        //->rule('lastname', 'max_length', array(':value', '30'))
           ->rule('phone', 'not_empty')
        //->rule('phone','Model_Add::check_valid_phone_number',array(':value','/^[0-9()-+]*$/u'))            
        //->rule('phone', 'alpha_numeric')			
            ->rule('phone', 'min_length', [
            ':value',
            '7'
        ])->rule('phone', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('phone', 'phone', array(':value'))
            ->rule('phone', 'contact_phone', [
            ':value'
        ])->rule('phone', 'Model_Edit::checkphone', [
            ':value',
            $uid
        ])->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('email', 'Model_Edit::checkemail', [
            ':value',
            $uid
        ])->rule('password', 'not_empty')->rule('password', 'min_length', [
            ':value',
            '6'
        ])->rule('password', 'max_length', [
            ':value',
            '20'
        ])->rule('password', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('repassword', 'not_empty')->rule('repassword', 'min_length', [
            ':value',
            '6'
        ])->rule('repassword', 'max_length', [
            ':value',
            '20'
        ])->rule('repassword', 'valid_password', [
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ])->rule('repassword', 'matches', [
            ':validation',
            'password',
            'repassword'
        ])
		//->rule('city', 'not_empty')
		->rule('profile_picture', 'Upload::type', [
            ':value',
            [
                'jpg',
                'png',
                'gif'
            ]
        ]);
        //->rule('company_name', 'Model_Edit::checkassigneddriver',array($arr['city'],$arr['country'],$arr['state'],$arr['company_name'],$uid));
        //->rule('photo', 'Upload::type', array(':value', array('jpeg','jpg','png','gif')));
    }
     public function edit_corporate($post, $uid)
    {
		$post['country'] = isset($post['country'])?$post['country']:DEFAULT_COUNTRY;
        $post['state'] = isset($post['state'])?$post['state']:DEFAULT_STATE;
		$post['city'] = isset($post['city'])?$post['city']:DEFAULT_CITY;
        $password = Html::chars(md5($post['password']));
        if (COMPANY_CID == 1 || SUBDOMAIN == 'demo') {
			$param = [
				'name' => $post['firstname'],
                'address' => $post['address'],
                'login_country' => (int)$post['country'],
                'login_state' => (int)$post['state'],
                'login_city' => (int)$post['city'],
                'lastname' => $post['lastname'],
                'email' => $post['email'],
              	'password' => $password,
				'org_password' => $post['password'],
                'phone' => $post['phone']
			];
			//MongoDB
			$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$param],['upsert'=>false]);
        } else {
			$param = [
				'name' => $post['firstname'],
                'address' => $post['address'],
                'login_country' => (int)$post['country'],
                'login_state' => (int)$post['state'],
                'login_city' => (int)$post['city'],
                'lastname' => $post['lastname'],
                'email' => $post['email'],
              	'password' => $password,
				'org_password' => $post['password'],
                'phone' => $post['phone']
			];
			//MongoDB
			$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$uid],['$set'=>$param],['upsert'=>false]);
        }
	
		
        if ($result ) {
            return 1;
        } else {
            return 0;
        }
    }
 public function update_corporateimage($image,$userid)
{
    $query = $this->mongo_db->find(MDB_PEOPLE,['_id' => (int)$userid],['profile_picture']);
    $result = iterator_to_array($query);
    
    if(isset($result[$userid]['profile_picture']) && $result[$userid]['profile_picture']!=""){
        $id1 = SITE_CORPORATE_IMGPATH.$result[$userid]['profile_picture'];
        $id2 = SITE_CORPORATE_IMGPATH.'thumb_'.$result[$userid]['profile_picture'];
        if(file_exists($id1) && file_exists($id2)){
            unlink($id1);
            unlink($id2);
        }
    }
    $mdate = $this->currentdate;
    $query = [];
    $query['updated_date'] = $mdate;
    if(isset($image)){
        $query[ 'profile_picture' ]=$image;
    }
    $result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>(int)$userid],['$set'=>$query],['upsert'=>false]);
    return (empty($result['err']))?1:$result['err'];
}


    /** COUPON PACKAGE **/
    
	
	// Accounts Type Module

     public function getratingsdetails($id){
         $query = $this->mongo_db->find('ratings',['ratings_no' => (int)$id]);
        $result = iterator_to_array($query);
        $finrest = array_shift($result);
        //echo "<pre>";print_r($finrest);exit();
        return $finrest;
    }

    public function validate_editratings($arr,$uid)
    {
           $rule = Validation::factory($arr)
        ->rule('ratings_no', 'not_empty')
         ->rule('ratings_no', 'Model_Add::check_ratingsno', [
            ':value',$uid])
            ->rule('ratings_title', 'not_empty')
            ->rule('ratings_tags', 'not_empty')
           // ->rule('moretags', 'alpha')
            ->rule('ratings_title', 'alpha_spaces')
            ->rule('ratings_tags', 'alpha_spaces');
        
        return $rule;

    }

    public function edit_ratings($post, $uid)
    {
        //echo "<pre>";print_r($post);exit();
        //MongoDB
        $array = [
            'ratings_no' => (int)$post['ratings_no'],
            'ratings_title' => $post['ratings_title'],
          //  'ratings_tags' => $post['ratings_tags'],
            'ratings_tags' => $post['ratings_tags'],
        ];
        $result = $this->mongo_db->update('ratings',['ratings_no'=>(int)$uid],['$set'=>$array],['upsert'=>true]);
        return (empty($result['err']))?1:0;
    }

    public function get_testimonial_details($id){
         $query = $this->mongo_db->find(MDB_TESTIMONIAL,['_id' => (int)$id]);
        $result = iterator_to_array($query);
        $finrest = array_shift($result);
        //echo "<pre>";print_r($finrest);exit();
        return $finrest;
    }

    public function validate_testimonial($arr)
    {
        return Validation::factory($arr)->rule('name', 'not_empty')       
            ->rule('name', 'min_length', [
            ':value',
            '2'
        ])->rule('name', 'max_length', [
            ':value',
            '130'
        ])->rule('skype', 'not_empty')       
            ->rule('skype', 'min_length', [
            ':value',
            '2'
        ])->rule('skype', 'max_length', [
            ':value',
            '130'
        ])->rule('description', 'not_empty')       
            ->rule('description', 'min_length', [
            ':value',
            '2'
        ])->rule('description', 'max_length', [
            ':value',
            '500'
        ])->rule('description_arabic', 'not_empty')       
            ->rule('description_arabic', 'min_length', [
            ':value',
            '2'
        ])->rule('description_arabic', 'max_length', [
            ':value',
            '500'
        ])->rule('image', 'Upload::type', [
            ':value',
            [
                'jpeg',
                'jpg',
                'png',
                'gif'
            ]
        ]);
    }

    public function update_testimonial($post,$image)
    {       
    
           $status = isset($post['status'])?$post['status']:0;
            $data = [
                'name'=>$post['name'],
                'skype'=>$post['skype'],
                'description' => $post['description'],
                'description_arabic'=>$post['description_arabic'],
                'status' => (int)$status,                                                   
            ];

            if($image){
                $data['image'] = $image;
            }

        $result = $this->mongo_db->update(MDB_TESTIMONIAL,['_id'=>(int)$post['id']],['$set'=>$data],['upsert'=>false,'multiple'=>true]);
        return (empty($result['err']))?1:$result['err'];
    }



}
