<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains API details - Version 1.1.5

* @Package: Taximobility

* @Author:  NDOT Team

* @URL : http://www.ndot.in

****************************************************************/
Class Controller_Mobileapi120 extends Controller_Mobile102
{
    public function __construct()
    {
        try {
            //require Kohana::find_file('classes','table_config');
            require Kohana::find_file('classes', 'mobile_common_config');
            $this->commonmodel = Model::factory('commonmodel');
            $current_time = convert_timezone('now',TIMEZONE);

            $this->current_datetime = date('Y-m-d H:i:s',strtotime($current_time));

            DEFINE("MOBILEAPI_107", "mobileapi120");
            DEFINE("FIND", "find113");
            if ((COMPANY_CID != '0')) {
                $this->app_name    = COMPANY_SITENAME;
                $this->siteemail   = COMPANY_CONTACT_EMAIL;
                $this->domain_name = SUBDOMAIN;
            } else {
                $this->siteemail   = $this->commonmodel->select_site_settings('email_id', SITEINFO);
                $this->app_name    = $this->commonmodel->select_site_settings('app_name', SITEINFO);
                $this->domain_name = 'demo';
            }
           
            $this->lang                    = I18n::lang(LANG);
            $this->app_description         = APP_DESCRIPTION;
            $this->app_description_ar      = APP_DESCRIPTION_AR;
            $this->emailtemplate           = Model::factory('emailtemplate');
            $this->notification_time       = ADMIN_NOTIFICATION_TIME;
            $this->customer_google_api = $this->commonmodel->select_site_settings('customer_android_key_new',SITEINFO); // For GCM
            $this->driver_android_api = $this->commonmodel->select_site_settings('driver_android_key',SITEINFO);    // For GCM
            $this->tab_android_api = $this->commonmodel->select_site_settings('tab_android_key',SITEINFO);
            //$this->customer_app_url = $this->commonmodel->select_site_settings('customer_app_url',SITEINFO);  
            //$this->driver_app_url = $this->commonmodel->select_site_settings('driver_app_url',SITEINFO);      
            //$this->google_geocode_api = $this->commonmodel->select_site_settings('google_geocode_api',SITEINFO);      
            $this->continuous_request_time = CONTINOUS_REQUEST_TIME;
            $this->currentdate             = Commonfunction::getCurrentTimeStamp();
            $this->favarray                = ["airport","bank","college","home","hospital","office","park","restaurant","school","store","others"];
        }
        catch (Database_Exception $e) {
            // Insert failed. Rolling back changes...
            // print_r($e);
            $message = [
                "message" => __('Database Connection Failed'),
                "status" => 2
            ];
            echo json_encode($message);
            exit;
        }
        //MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
    }
    public function action_index()
    {
        $find_url            = explode('/', urldecode($_SERVER['REQUEST_URI']));
        
        $split               = explode('?', $find_url[3]);
        $company_api_encrypt = trim($split[0]);
        
        //echo "<br>";
        //$company_api_key = "grandlimo"."_"."bOHgDIW3aFTu3DCNKXbUG7Lb9Ow2HNXDYm";
        
        //demo_RH7PVsKE18qGe6Y6YOC8kdRntOEyDnD0uW
        //$encrypted_txt = $this->encrypt_decrypt('encrypt', $company_api_key);
        //echo "<br>";
        //echo "Encrypted Text = $encrypted_txt\n";
        //exit;
        
        //bnRheGlfUkg3UFZzS0UxOHFHZTZZNllPQzhrZFJudE9FeURuRDB1Vw==
        
        //Z3JhbmRsaW1vX2JPSGdESVczYUZUdTNEQ05LWGJVRzdMYjlPdzJITlhEWW0=
        //exit;*/
        $company_api_decrypt = $this->encrypt_decrypt('decrypt', $company_api_encrypt);
        
        $company_split       = explode('_', $company_api_decrypt);
        
        if(!isset($company_split[1])) {
            $message = [
                "message" => __('invalid_company'),
                "status" => -8
            ];
            echo json_encode($message);
            exit;
        }
        $company_api_key     = trim($company_split[1]);
        
        $api                 = Model::factory(MOBILEAPI_107);
        /// We are getting the date from mobile as urlencoded format in POST method
        $mobile_encodeddata  = file_get_contents('php://input');
        // Here we are decode the url encoded values and conver the values in to array
        $mobiledata          = (array) json_decode($mobile_encodeddata, true);

        //log::instance()->add(Log::NOTICE, $_REQUEST["type"]);
        //log::instance()->add(Log::NOTICE, $mobile_encodeddata);

        $errors              = [];
        $method              = $_REQUEST["type"];
        $apikey_result       = [];
        //CHECK FOR VALID API KEY
        if ($company_api_key != 'all') {
            $arguments = [
                ['$match'=>[
                    'companyinfo.company_api_key'=> $company_api_key,                   
                    'companydetails.company_status'=>'A'
                ]],
                ['$project'=>[
                    'company_cid'=>'$_id',
                    'company_currency'=>'$companyinfo.company_currency',
                    'company_app_description'=>'$companyinfo.company_app_description'
                ]],
            ];
            $result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
            $apikey_result = $result['result'];             
        }
        if ((count($apikey_result) > 0) || ($company_api_key == 'all')) {
            if ($company_api_key == 'all') {
                $default_companyid   = 1;
                $this->site_currency = '$';
            } else {
                $default_companyid     = $apikey_result[0]['company_cid'];
                $this->site_currency   = COMPANY_CURRENCY;
                //$this->app_description = $apikey_result[0]['company_app_description'];
            }
        if(ENABLE_LOGS == 1)
        {
            if((string)$_GET['type'] != 'driver_location_history' &&
            (string)$_GET['type'] !=  'getpassenger_update' )        
            {
             $file_name = date('Y-m-d-H');
            @file_put_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER."/api/".$file_name.".txt","Method ".$_GET['type'].".....\n".
            json_encode($mobiledata) ."\n". PHP_EOL, FILE_APPEND);
            } 
        }

         if(ENABLE_LOGS == 2)
        {
            $file_name = date('Y-m-d-H');
            @file_put_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER."/api/".$file_name.".txt","Method ".$_GET['type'].".....\n".
            json_encode($mobiledata) ."\n". PHP_EOL, FILE_APPEND);
        }
            
            
            $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
            //echo 'as'.$default_companyid;
            switch ($method) {
                //Company URL : http://192.168.1.88:1000/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=getcoreconfig
                //All Company URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=getcoreconfig
                case 'getcoreconfig':
                    $config_array = [];
                    $config_array['app_name']               = $this->app_name;
                    $config_array['share_content']          = __('download_app_links');
                    $config_array['site_country']           = DEFAULT_COUNTRY;
                    $config_array['site_currency_symbol']          = CURRENCY;
                    $config_array['site_currency']          = CURRENCY_FORMAT;
                    $config_array['noimage_base']           = URL_BASE . 'public/images/noimages109.png';
                    $config_array['image_base']           = URL_BASE . 'public/images/';
                    $config_array['api_base']               = URL_BASE;
                    $config_array['driver_image'] = URL_BASE.SITE_DRIVER_IMGPATH;
                    $config_array['site_country']           = "Kuwait";
                    $config_array['site_logo']              = URL_BASE . 'public/uploads/site_logo/logo.png';
                     $config_array['sitead_image']              = '';//URL_BASE.SITEAD_IMGPATH.'sitead_image.png';
                    $config_array['aboutpage_description']  = $this->app_description;
                    $config_array['aboutpage_description_ar']  = $this->app_description_ar;
                    $config_array['admin_email']            = $this->siteemail;
                    //$config_array['tell_to_friend_subject'] = __('telltofrien_subject');
                    $config_array['skip_credit']            = SKIP_CREDIT_CARD;
                    $config_array['metric']                 = UNIT_NAME;
                    $config_array['book_later_interval']    = BOOK_LATERAL_TIME;
                    $config_array['book_now_interval']      = BOOK_NOW_TIME;
                    $config_array['airport_trip_interval']  = AIRPORT_TRIP_TIME;
                    $config_array['repeat_trip_interval']   = REPEAT_TRIP_TIME;
					$config_array['airport_pick_up']  = AIRPORT_PICK_UP;
                    $config_array['airport_drop']  = AIRPORT_DROP_OF;
                    
		            $config_array['default_country_code']   = DEFAULT_COUNTRY_CODE;
                    $config_array['cancellation_setting']   = CANCELLATION_FARE;
                    $config_array['facebook_share']         = FB_SHARE;
                    $config_array['twitter_share']          = TW_SHARE;
                    $config_array['instagram_share']          = IN_SHARE;
                    $config_array['facebook_key']           = FB_KEY;
                    $config_array['version_code']           = VERSION_CODE;
                    $config_array['version_name']           = VERSION_NAME;
                    $config_array['is_mandatory_update']    = VERSION_MANDATORY;
                    $config_array['fav_icons']              = $this->favarray;
                    $details = $api->getChildAccounts($this->lang);
                    $cms_details = $api->cms_details();
                    
                    $config_array['cms_pages']    = $cms_details;
                    $config_array['child_account_types']    = $details;
                    $config_array['customer_support']       =  COMPANY_CONTACT_PHONE_NUMBER;
                    /***Get Company car model details start***/
                   // $getrecentLocation                   = $api->getrecentLocation();
                    $config_array['recent_location'] = [];
                    $company_model_details                   = $api->company_model_details('');
//print_r($company_model_details ); die();
                    foreach($company_model_details as $key => $value) {
                        
                        if ((!empty($value['model_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image'])) {
                            $model_image = URL_BASE.MODEL_IMGPATH.$value['model_image'];
                        } else {
                            $model_image = URL_BASE . "public/images/no_image109.png";
                        }


                        if ((!empty($value['model_image_new'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_new'])) {
                            $model_image_new = URL_BASE.MODEL_IMGPATH.$value['model_image_new'];
                        } else {
                            $model_image_new = URL_BASE . "public/images/no_image109.png";
                        }

                        if ((!empty($value['model_fare_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_fare_image'])) {
                            $model_fare_image = URL_BASE.MODEL_IMGPATH.$value['model_fare_image'];
                        } else {
                            $model_fare_image = URL_BASE . "public/images/no_image109.png";
                        }
                        
                        if ((!empty($value['model_image_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_thumb'])) {
                            $model_image_thumb = URL_BASE.MODEL_IMGPATH.$value['model_image_thumb'];
                        } else {
                            $model_image_thumb = URL_BASE . "public/images/no_image109.png";
                        }

                        if ((!empty($value['model_image_unfocus'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_unfocus'])) {
                            $model_image_unfocus = URL_BASE.MODEL_IMGPATH.$value['model_image_unfocus'];
                        } else {
                            $model_image_unfocus = URL_BASE . "public/images/no_image109.png";
                        }

                        if ((!empty($value['model_image_2'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_2'])) {
                            $model_image_2 = URL_BASE.MODEL_IMGPATH.$value['model_image_2'];
                        } else {
                            $model_image_2 = URL_BASE . "public/images/no_image109.png";
                        }
                        
                        
                       /* if ((!empty($value['model_image_unfocus_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_unfocus_thumb'])) {
                            $model_image_unfocus_thumb = URL_BASE.MODEL_IMGPATH.$value['model_image_unfocus_thumb'];
                        } else {
                            $model_image_unfocus_thumb = URL_BASE . "public/images/no_image109.png";
                        }*/



                        if ((!empty($value['iconic_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['iconic_image'])) {
                            $iconic_image = URL_BASE.MODEL_IMGPATH.$value['iconic_image'];
                        } else {
                            $iconic_image = URL_BASE . "public/images/no_image109.png";
                        }
                        if ((!empty($value['iconic_image_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['iconic_image_thumb'])) {
                            $iconic_image_thumb = URL_BASE.MODEL_IMGPATH.$value['iconic_image_thumb'];
                        } else {
                            $iconic_image_thumb = URL_BASE . "public/images/no_image109.png";
                        }
                        $company_model_details[$key]['model_image'] = $model_image;
                        $company_model_details[$key]['model_image_fare'] = $model_fare_image;
                        $company_model_details[$key]['model_image_new'] = $model_image_new;
                        $company_model_details[$key]['model_image_thumb'] = $model_image_thumb;
                        $company_model_details[$key]['model_image_unfocus'] = $model_image_unfocus;
                       // $company_model_details[$key]['model_image_unfocus_thumb'] = $model_image_unfocus_thumb;
                        $company_model_details[$key]['iconic_image'] = $iconic_image;
                        $company_model_details[$key]['iconic_image_thumb'] = $iconic_image_thumb;
                        $company_model_details[$key]['model_image_confirmation'] = $model_image_2;
                        
                        $company_model_details[$key]['category_name'] = isset($value['category_name']) ? $value['category_name'] : "";
                    }
                    
                    if (count($company_model_details) > 0) {
                        $config_array['model_details'] = $company_model_details;
                    } else {
                        $config_array['model_details'] = "model details not found";
                    }
                    /***Get Company car model details end***/
                    $message = [
                        "message" => __('success'),
                        "detail" => $config_array,
                        "status" => 1
                    ];
                    echo json_encode($message);
                    unset(MangoDB::$instances['default']);
                    break;
                case 'getmodel_fare_details':
                
                    
                    if (count($company_model_details) > 0) {
                        $details = [
                            "model_details" => $company_model_details
                        ];
                        $message = [
                            "message" => __('success'),
                            "detail" => $details,
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" => __('model_detail_not_found'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($message);
                    break;                   
                //URL :http://192.168.1.88:1020/api/?type=driver_location_history&driver_id=8&trip_id=268&locations=11.017194,76.964758&status=A&device_token=
                case 'driver_location_history':
                    $location_array = $mobiledata;
                    //print_r($location_array);exit;
                    if (!empty($location_array)) {
                        $check_driver_login_status = $api->logged_user_status_web($location_array['driver_id'], $default_companyid);
            
                        $logout_notification       = isset($check_driver_login_status[0]['notification_status']) ? $check_driver_login_status[0]['notification_status'] : '';
                        $logout_status             = isset($check_driver_login_status[0]['login_status']) ? $check_driver_login_status[0]['login_status'] : '';
                        $admin_logout_status       = isset($check_driver_login_status[0]['admin_logout']) ? $check_driver_login_status[0]['admin_logout'] : '0';
            $check_driver_login_status = 1;
            $logout_notification = $logout_status = '';
            $admin_logout_status = 0;
                        //print_r($check_driver_login_status);exit;
            
                        if ($check_driver_login_status == 1) {
                            $history_validator = $this->history_validation($location_array);
                            if ($history_validator->check()) {
                                $driver_status = $location_array['status'];
                                $device_token  = ""; //$location_array['device_token'];
                                $driver_id     = $location_array['driver_id'];
                                $trip_id       = $location_array['trip_id'];
                                $bearing       = isset($location_array['bearing'])?$location_array['bearing']:'';
                                $accuracy       = isset($location_array['accuracy'])?$location_array['accuracy']:'';
                                /*$company_det   = $api->get_company_id($location_array['driver_id']);
                                $company_id    = '';
                                if (count($company_det) > 0 && isset($company_det['company_id'])) {
                                    $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det['company_id']);
                                    $company_id = isset($company_det['company_id']) ? $company_det['company_id'] : '';
                                }*/
                $company_id = COMPANY_CID;
                                $company_all_currenttimestamp = convert_timezone( 'now', TIMEZONE );
                                $coordinates = explode('|', $location_array['locations']);
                                //print_r($coordinates);exit;
                                if (count($coordinates) > 1) {
                                    $last_1      = array_slice($coordinates, -2, 2, true);
                                    $coordinates = explode(',', $last_1[count($coordinates) - 2]);
                                    //print_r($coordinates);
                                } else {
                                    $coordinates = explode(',', $coordinates[0]);
                                }
                                $latitude  = empty($coordinates['0']) ? '0.0' : $coordinates['0'];
                                $longitude = empty($coordinates['1']) ? '0.0' : $coordinates['1'];
                               
                if ($trip_id != "") {
                                    $trip_details = $this->commonmodel->select_all(PASSENGERS_LOG,['_id'=>(int)$trip_id],['travel_status']);
                                    if(!empty($trip_details))
                                    {
                                        $t_s  = $trip_details[0]['travel_status'];
                                        if($t_s == 4 || $t_s == 8)
                                        {
                                            $msg['status'] = 10;
                                            if($t_s == 4)
                                                $msg['message'] = __('passenger_trip_cancelled');
                                            else
                                                $msg['message'] = __('dispatcher_trip_cancelled');
                                            
                                            $update_driver_array = [
                                                "notification_status" => 5
                                            ];    
                                            $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_driver_array, '_id', $trip_id);
                                            echo json_encode($msg);
                                            break;
                                        }
                                    }
                                    else{
                                        echo json_encode(__('invalid_trip'));
                                        break;
                                    }
                                }
                                if ($driver_status == 'F') {

                                    $fare_update_status =  $api->get_fare_trip_data($driver_id);
                                    if($fare_update_status)
                                    {
                                        $msg = [
                                                        "message" => __('trip_fare_updated'),
                                                        "status" => 21
                                                    ];
                                        echo json_encode($msg);
                                        unset(MangoDB::$instances['default']);
                                        exit;
                                    }

                    $d_s = $this->commonmodel->select_all(MDB_DRIVER_INFO,['_id'=>(int)$driver_id,'shift_status'=>'OUT'],['_id']);
                                    if(count($d_s) == 1)
                                    {
                                         /*$msg = array( "message" => __('driver_history_updated'),"status" => 1);
                                         echo json_encode($msg);
                     unset(MangoDB::$instances['default']); 
                                         die(); */
                     $update_driver_array = [
                            'loc' => ['type' => 'Point',
                            'coordinates' => [(double)$longitude,(double)$latitude]],
                                                        'status' => 'F',
                            'shift_status' => 'OUT',
                            'bearing'=>(double)$bearing ,
                            'accuracy'=>(int)$accuracy ,
                                                        'update_date' => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                                                ];
                                    } 
                                    /***** Update Driver Current Location *********************/
                                    if (count($coordinates) > 0) {
                                        if (($latitude != 0) && ($longitude != 0)) {                                            
                                            if (($location_array['trip_id'] == 0) || ($location_array['trip_id'] == "")) {
                                                $update_driver_array = [
                                                    'loc' => ['type' => 'Point',
                                                                   'coordinates' => [(double)$longitude,(double)$latitude]],
                                                    'status' => 'F',
                                                    'bearing'=>(double)$bearing ,
                                                     'accuracy'=>(int)$accuracy ,
                                                    'update_date' => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                                                ];
                                            } else {
                                                $update_driver_array = [
                                                    "loc" => ["type" => "Point",
                                                                   "coordinates" => [(double)$longitude,(double)$latitude]],
                                                    'bearing'=>(double)$bearing ,
                                                    'accuracy'=>(int)$accuracy ,
                                                    "status" => strtoupper($driver_status),
                                                    "update_date" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                                                ];
                                            }                                           
                                            if ($trip_id > 0) {
                                                $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
                                                //print_r($get_passenger_log_details);exit;
                                                if (count($get_passenger_log_details) > 0) {
                                                    $driver_reply  = (isset($get_passenger_log_details[0]['driver_reply'])) ? $get_passenger_log_details[0]['driver_reply'] : '';
                                                    $travel_status = (isset($get_passenger_log_details[0]['travel_status'])) ? $get_passenger_log_details[0]['travel_status'] : '';
                                                    if (($driver_reply == 'A') && ($travel_status == 4)) {
                                                        $msg = [
                                                            "message" => __("trip_cancelled_passenger"),
                                                            "detail" => "",
                                                            "status" => 7
                                                        ];
                                                        echo json_encode($msg);
                            unset(MangoDB::$instances['default']);
                                                        break;
                                                    }
                                                }
                                            }
                                            $update_current_result        = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', $driver_id);
                                          
                                            $check_new_request            = $api->check_new_request($driver_id, $company_all_currenttimestamp);
                                            //print_r($check_new_request);exit;
                            if ($check_new_request > 0) {
                                $passenger_name            = "";
                                $get_passenger_log_details = $api->get_passenger_log_detail($check_new_request);
                                //print_r($get_passenger_log_details);exit;
                                if (count($get_passenger_log_details) > 0) {
                                    foreach ($get_passenger_log_details as $values) {
                                        $p_device_type        = isset($values['passenger_device_type']) ? $values['passenger_device_type'] :'';
                                        $p_device_token       = isset($values['passenger_device_token']) ? $values['passenger_device_token']:'';
                                        /** get minimum speed **/
                                        $taxi_id              = isset($values['taxi_id']) ? $values['taxi_id'] :'';
                                        $dr_company_id        = isset($values['company_id']) ? $values['company_id']:'';
                                        $get_min_speed        = $api->get_minimum_speed($taxi_id, $default_companyid);
                                        $belowspeed_mins      = isset($get_min_speed[0]['taxi_min_speed']) ? $get_min_speed[0]['taxi_min_speed']:'';
                                        /** get minimum speed **/
                                        $pickupplace          = isset($values['current_location']) ? urldecode($values['current_location']) : '';
                                        $dropplace            = isset($values['drop_location']) ? urldecode($values['drop_location']) :'';
                                        $passenger_id         = isset($values['passengers_id']) ? $values['passengers_id']: '';
                                        $passenger_phone      = isset($values['passenger_phone']) ? $values['passenger_phone'] :'';
                                        $time_to_reach_passen = isset($values['time_to_reach_passen']) ? $values['time_to_reach_passen']:'';
                                        $sub_logid            = isset($values['sub_logid']) ? $values['sub_logid'] : '';
                                        $pickup_latitude      = isset($values['pickup_latitude']) ? $values['pickup_latitude']:'';
                                        $pickup_longitude     = isset($values['pickup_longitude']) ? $values['pickup_longitude']:'';
                                        $drop_latitude        = isset($values['drop_latitude']) ? $values['drop_latitude']: '';
                                        $drop_longitude       = isset($values['drop_longitude']) ? $values['drop_longitude'] : '';
                                        $passenger_salutation = isset($values['passenger_salutation']) ? $values['passenger_salutation']: '';
                                        $p_name               = isset($values['passenger_name']) ? $values['passenger_name']: '';
                                        $pickup_time          = isset($values['pickup_time']) ? $values['pickup_time'] : '';
                                        $bookby               = isset($values['bookby']) ? $values['bookby'] : '';
                                        $notes_driver         = isset($values['notes_driver']) ? $values['notes_driver']: '';
                                        $payment_type         = isset($values['payment_type']) ? $values['payment_type']: '';
                                    }
                                    $passenger_name    = $passenger_salutation . ' ' . ucfirst($p_name);
                                    $notification_time = $this->notification_time;
                                    if ($notification_time != 0) {
                                        $timeoutseconds = $notification_time;
                                    } else {
                                        $timeoutseconds = 15;
                                    }
                                    //if timeout seconds greater than 60 seconds we have to convert to mins and secs
                                    if ($timeoutseconds > 60) {
                                        $notification_minutes = floor($timeoutseconds / 60);
                                        $notification_seconds = $timeoutseconds % 60;
                                        $notification_minutes = ($notification_minutes < 10) ? '0' . $notification_minutes : $notification_minutes;
                                    } else {
                                        $notification_minutes = "00";
                                        $notification_seconds = $timeoutseconds;
                                    }
                                    $notification_seconds  = ($notification_seconds < 10) ? '0' . $notification_seconds : $notification_seconds;
                                                    $total_timeout         = $notification_minutes . " : " . $notification_seconds;
                                                    $trip_details          = [
                                                        "message" => __('api_request_confirmed_passenger'),
                                                        "status" => "1",
                                                        "passengers_log_id" => $check_new_request,
                                                        "booking_details" => [
                                                            "pickupplace" => $pickupplace,
                                                            "dropplace" => $dropplace,
                                                            "pickup_time" => $pickup_time,
                                                            "driver_id" => $driver_id,
                                                            "passenger_id" => $passenger_id,
                                                            "roundtrip" => "",
                                                            "passenger_phone" => $passenger_phone,
                                                            "cityname" => "",
                                                            "distance_away" => "",
                                                            "sub_logid" => $sub_logid,
                                                            "drop_latitude" => $drop_latitude,
                                                            "drop_longitude" => $drop_longitude,
                                                            "taxi_id" => $taxi_id,
                                                            "company_id" => $dr_company_id,
                                                            "pickup_latitude" => $pickup_latitude,
                                                            "pickup_longitude" => $pickup_longitude,
                                                            "bookedby" => $bookby,
                                                            "payment_type" => $payment_type,
                                                            "passenger_name" => $passenger_name,
                                                            "profile_image" => "",
                                                            "drop" => $dropplace
                                                        ],
                                                        "estimated_time" => $time_to_reach_passen,
                                                        "notification_time" => $timeoutseconds,
                                                        "notification_minutes" => $notification_minutes,
                                                        "notification_seconds" => $notification_seconds,
                                                        "notes" => $notes_driver,
                                                        "belowspeed_mins" => $belowspeed_mins
                                                    ];
                                                    $msg                   = [
                                                        "message" => __('driver_history_updated'),
                                                        "trip_details" => $trip_details,
                                                        "status" => 5
                                                    ];
                                                    $check_another_request = $api->check_new_request_bydriver($driver_id, $company_all_currenttimestamp, $check_new_request);
                                                    if (count($check_another_request) > 0) {
                                                        foreach ($check_another_request as $cns) {
                                                            $api->change_driver_reqflow($cns['trip_id'], $cns['available_drivers'], $cns['rejected_timeout_drivers']);
                                                        }
                                                    }
                                                    $update_trip_array   = [
                                                        "status" => 1
                                                    ];
                                                    $result              = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', (int)$check_new_request);
                                                    $update_driver_array = [
                                                        "status" => 'B'
                                                    ];
                                                    $result              = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', (int)$driver_id);
                                                } else {
                                                    $msg = [
                                                        "message" => __('driver_history_updated'),
                                                        "status" => 1
                                                    ];
                                                }
                                            } else {
                                                $msg = [
                                                    "message" => __('driver_history_updated'),
                                                    "status" => 1
                                                ];
                                            }
                                        }
                                        /********* Update driver device token every specified seconds *************
                                        if($device_token != "")
                                        {
                                        $update_array  = array("device_token" => $device_token);                            
                                        $login_status_update = $api->update_driver_phone($update_array,$driver_id,$default_companyid);
                                        }
                                        /***************************************************************************/
                                    }
                                } else if ($driver_status == 'A') {

                                    $fare_update_status =  $api->get_fare_trip_data($driver_id);
                                    if($fare_update_status)
                                    {
                                        $msg = [
                                                        "message" => __('trip_fare_updated'),
                                                        "status" => 21
                                                    ];
                                        echo json_encode($msg);
                                        unset(MangoDB::$instances['default']);
                                        exit;
                                    }
                                    
                                    
                                    
                                    $update_driver_array   = [
                                            "loc" => ["type" => "Point",
                                                           "coordinates" => [(double)$longitude,(double)$latitude]],
                                            "status" => strtoupper($driver_status),
                                            'bearing'=>(double)$bearing ,
                                            'accuracy'=>(int)$accuracy ,
                                            "update_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                                        ];
                                    $update_current_result = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', (int)$driver_id);
                                    /*******************************************************************************/
                                    $result                = $api->save_driver_location_history($location_array, $default_companyid);
                                    /** UPDATE DRIVER IF PASSENGER CONFIRM HIS PAYMENT TYPE **/
                                    $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
                                    
                                    /* RUNING TIME UPDATE */
                                    $hours              = '';
                                    $minutes            = '';
                                    $seconds            = '';
                                   $pickuptime1 = commonfunction::convertphpdate('Y-m-d H:i:s',$get_passenger_log_details[0]['actual_pickup_time']);
                                    $pickuptime = strtotime($pickuptime1);
                                    $total_time =abs($pickuptime - time());
                                    $days       = floor($total_time /86400);        
                                    $hours      = floor($total_time /3600);     
                                    $minutes    = intval(($total_time/60) % 60);        
                                    $seconds    = intval($total_time % 60);    
                                    $results = "";
                                    if($days > 0) $results = $days . (($days > 1)?" days ":" day ");
                                    $runningtime = sprintf("%s%02d:%02d:%02d",$results,$hours,$minutes,$seconds);
                                    /*$hours += floor((($total_differnce % 604800) % 86400) / 3600);
                                    $minutes += floor(((($total_differnce % 604800) % 86400) % 3600) / 60);
                                    $seconds += floor((((($total_differnce % 604800) % 86400) % 3600) % 60));
                                    $runningtime =  $hours.':'.$minutes.':'.$seconds;*/
                                    /* RUNNING TIME UPDATE */ 
                                    $travel_status = 0;
                                    if (count($get_passenger_log_details) > 0) {
                $payment_type  = $get_passenger_log_details[0]['payment_type'];
                $payment_chosen_flag  = $get_passenger_log_details[0]['payment_chosen_flag'];
$travel_status  = $get_passenger_log_details[0]['travel_status'];
                                    }
                                    /** UPDATE DRIVER IF PASSENGER CONFIRM HIS PAYMENT TYPE **/
                                    $distance              = isset($result[1]) ? $result[1] : 0;
                                    if ($result[0] == 1) {
                                        $msg = [
                                            "message" => __('driver_history_updated'),
                                            "status" => 1,
                                            "distance" => $distance,
                                            "runningtime" => $runningtime,
                                            "payment_type" => $payment_type,
                                            "payment_chosen_flag" => $payment_chosen_flag,
                        "travel_status" => $travel_status
                                        ];
                                    } else if ($result == -1) {
                                        $msg = [
                                            "message" => __('driver_history_already'),
                                            "status" => -1
                                        ];
                                    } else if ($result == 2) {
                                        $msg = [
                                            "message" => __('invalid_user'),
                                            "status" => 2
                                        ];
                                    } else if ($result == 3) {
                                        $msg = [
                                            "message" => __('no_access'),
                                            "status" => 3
                                        ];
                                    } else if ($result == 5) {
                                        $msg = [
                                            "message" => __('driver_history_not_updated'),
                                            "status" => 1,
                                            "distance" => $distance
                                        ];
                                    } else {
                                        $msg = [
                                            "message" => __('invalid_user'),
                                            "status" => -1
                                        ];
                                    }
                                } elseif ($driver_status == 'B') {
                                    
                                    
                                    
                                    
                                    /***** Update Driver Current Location *********************************************************/
                                    if (($latitude != 0) && ($longitude != 0)) {
                                        $update_driver_array   = [
                                            "loc" => ["type" => "Point",
                                                           "coordinates" => [(double)$longitude,(double)$latitude]],
                                            "status" => strtoupper($driver_status),
                                            'bearing'=>(double)$bearing ,
                                             'accuracy'=>(int)$accuracy ,
                                            "update_date" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                                        ];
                                        $update_current_result = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', (int)$driver_id);
                                    }
                                    /**********************************************************************************************/
                                    $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
                                    if (count($get_passenger_log_details) > 0) {
                                        $driver_reply  = $get_passenger_log_details[0]['driver_reply'];
                                        $travel_status = $get_passenger_log_details[0]['travel_status'];
                                        $msg           = [
                                            "message" => __('driver_history_updated'),
                                            "status" => 1
                                        ];
                                        if (($driver_reply == 'A') && ($travel_status == 4 || $travel_status == 8)) {
                    $message = ($travel_status == 4)?__("trip_cancelled_passenger"):__('trip_cancelled_dispatcher');
                                            $msg = [
                                                "message" => $message,
                                                "detail" => "",
                                                "status" => 7
                                            ];
                                        }
                                    } else {
                                        $msg = [
                                            "message" => __('driver_history_updated'),
                                            "status" => 1
                                        ];
                                    }
                                    /*$check_new_request_trip   = $api->check_new_request_bydriver($driver_id, $company_all_currenttimestamp, $trip_id);
                                    $check_driver_status_free = $api->check_driver_status_free($driver_id);
                                    if ($check_driver_status_free == "B" && count($check_new_request_trip) > 0) {
                                        foreach ($check_new_request_trip as $cns) {
                                            //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                            //$get_request_dets=$api->check_new_request_tripid("","",$cns['trip_id'],$driver_id,$company_all_currenttimestamp,"");
                                            $api->change_driver_reqflow($cns['trip_id'], $cns['available_drivers'], $cns['rejected_timeout_drivers']);
                                        }
                                    }*/
                                } else {
                                    $msg = [
                                        "message" => __('validation_error'),
                                        "detail" => "",
                                        "status" => -3
                                    ];
                                }
                            } else {
                                $errors = $history_validator->errors('errors');
                                $msg    = [
                                    "message" => __('validation_error'),
                                    "detail" => $errors,
                                    "status" => -3
                                ];
                                //echo json_encode($msg);
                            }
                        } else {
                            if ($logout_notification == 1 && $logout_status == "N" && $admin_logout_status == 0) {
                                $msg                        = [
                                    "message" => __('driver_logout_via_admin'),
                                    "status" => 15,
                                    "display" => 1
                                ];
                                $update_notification_status = [
                                    "notification_status" => 0
                                ];
                                $api->update_table(MDB_PEOPLE, $update_notification_status, '_id', (int)$location_array['driver_id']);
                            } /*else if ($logout_notification == 1 && $logout_status == "N" && $admin_logout_status == '1') {
                                $msg                        = array(
                                    "message" => __('driver_assigned_expired'),
                                    "status" => 15,
                                    "display" => 1
                                );
                                $update_notification_status = array(
                                    "notification_status" => '0'
                                );
                                $api->update_table(MDB_PEOPLE, $update_notification_status, '_id', (int)$location_array['driver_id']);
                            } */else {
                                $msg = [
                                    "message" => __('driver_not_login'),
                                    "status" => 15,
                                    "display" => 0
                                ];
                            }
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_request'),
                            "status" => -4
                        ];
                    }
                    echo json_encode($msg);
                    unset(MangoDB::$instances['default']);
                    break;
                //Passenger Signup with Referral code concept
                /*Url : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_signup_single
                 * Params : {"first_name":"Pandiarajan","last_name":"V","email":"pandiarajan.v@ndot.in","phone":"8124783922","password":"qwerty","confirm_password":"qwerty","deviceid":"","devicetoken":"sdsd333","devicetype":"1","referral_code":""}
                 * Method: POST
                 * */
                case 'passenger_signup_single':
                    $p_first_name       = (isset($mobiledata['first_name'])) ? $mobiledata['first_name'] : '';
                    $p_last_name        = (isset($mobiledata['last_name'])) ? $mobiledata['last_name'] : '';
                    $p_email            = (isset($mobiledata['email'])) ? $mobiledata['email'] : '';
                    $p_phone            = (isset($mobiledata['phone'])) ? $mobiledata['phone'] : '';
                    $country_code       = (isset($mobiledata['country_code'])) ? $mobiledata['country_code'] : '';
                    $p_password         = (isset($mobiledata['password'])) ? $mobiledata['password'] : '';
                    $p_confirm_password = (isset($mobiledata['confirm_password'])) ? $mobiledata['confirm_password'] : '';
                    $devicetoken        = (isset($mobiledata['devicetoken'])) ? $mobiledata['devicetoken'] : '';
                    $device_id          = (isset($mobiledata['deviceid'])) ? $mobiledata['deviceid'] : '';
                    $devicetype         = (isset($mobiledata['devicetype'])) ? $mobiledata['devicetype'] : '';
                    $accessToken        = (isset($mobiledata['accesstoken'])) ? $mobiledata['accesstoken'] : '';
                    $uid                = (isset($mobiledata['userid'])) ? $mobiledata['userid'] : '';
                    $referral_code      = (isset($mobiledata['referral_code'])) ? $mobiledata['referral_code'] : '';
                    $p_acc_validator    = $this->pasenger_signup_validation($mobiledata);
                    if ($p_acc_validator->check()) {
                        $email_exist        = $api->check_email_passengers($p_email, $default_companyid);
                        $phone_exist        = $api->check_phone_passengers($p_phone, $default_companyid, $country_code);
                        $referralcode_exist = $api->check_referral_code_exist($referral_code, $default_companyid);
                        if ($email_exist > 0) {
                            $message = [
                                "message" => __('email_exists'),
                                "status" => 2
                            ];
                            echo json_encode($message);
                        } else if ($phone_exist > 0) {
                            $message = [
                                "message" => __('phone_exists'),
                                "status" => 3
                            ];
                            echo json_encode($message);
                        } else if (!empty($referral_code) && $referralcode_exist == 0) {
                            $message = [
                                "message" => __('referral_code_not_exists'),
                                "status" => 5
                            ];
                            echo json_encode($message);
                        } else {
                            $image_name = '';
                            if ($uid != '') {
                                //to get profile image from facebook and store it passenger
                                $thumb_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                                $thumb_image_name = 'thumb_' . $uid . '.jpg';
                                $thumb_image_path = DOCROOT . PASS_IMG_IMGPATH . $thumb_image_name;
                                @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                                @chmod($thumb_image_path, 0777);
                                file_put_contents($thumb_image_path, $thumb_image);
                                $edit_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                                $edit_image_name = 'edit_' . $uid . '.jpg';
                                $edit_image_path = DOCROOT . PASS_IMG_IMGPATH . $edit_image_name;
                                @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                                @chmod($edit_image_path, 0777);
                                file_put_contents($edit_image_path, $edit_image);
                                /** Big Image **/
                                $big_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_IMG_WIDTH . "&height=" . PASS_IMG_HEIGHT . "");
                                $image_name     = $uid . '.jpg';
                                $big_image_path = DOCROOT . PASS_IMG_IMGPATH . $image_name;
                                @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                                @chmod($big_image_path, 0777);
                                file_put_contents($big_image_path, $big_image);
                                $base_image   = imagecreatefromjpeg($edit_image_path);
                                $width        = 100;
                                $height       = 19;
                                $top_image    = imagecreatefrompng(URL_BASE . "public/images/edit.png");
                                $merged_image = DOCROOT . PASS_IMG_IMGPATH . 'edit_' . $uid . '.jpg';
                                imagesavealpha($top_image, true);
                                imagealphablending($top_image, true);
                                imagecopy($base_image, $top_image, 0, 83, 0, 0, $width, $height);
                                imagejpeg($base_image, $merged_image);
                            }
                            /******/
                            $otp                = text::random($type = 'numeric', $length = 4);
                            //$otp = '';
                            $acc_details_result = $api->passenger_signup_with_referral($mobiledata, $otp, $referral_code, $devicetoken, $device_id, $devicetype, $default_companyid, $accessToken, $uid, $image_name);
                            if ($acc_details_result == 1) {
                                $mail              = "";
                                $replace_variables = [
                                    REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                                    REPLACE_SITENAME => $this->app_name,
                                    REPLACE_USERNAME => '',
                                    REPLACE_OTP => $otp,
                                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                    REPLACE_SITEEMAIL => $this->siteemail,
                                    REPLACE_SITEURL => URL_BASE,
                                    REPLACE_COMPANYDOMAIN => $this->domain_name,
                                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                                ];
                                //$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
                                if ($this->lang != 'en') {
                                    if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/otp-' . $this->lang . '.html')) {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/otp-' . $this->lang . '.html', $replace_variables);
                                    } else {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp.html', $replace_variables);
                                    }
                                } else {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp.html', $replace_variables);
                                }
                                /*$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$p_first_name,REPLACE_MOBILE=>$p_phone,REPLACE_PASSWORD=>$p_password,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COPYRIGHTS=>COMPANY_COPYRIGHT);
                                $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'passenger-register.html',$replace_variables);*/
                                $to       = $p_email;
                                $from     = $this->siteemail;
                                //$subject = __('passenger_registration_confirmation')." - ".$this->app_name;   
                                $subject  = __('otp_subject') . " - " . $this->app_name;
                                $redirect = "no";
                                if (SMTP == 1) {
                                    include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                                } else {
                                    // To send HTML mail, the Content-type header must be set
                                    $headers = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                    // Additional headers
                                    $headers .= 'From: ' . $from . '' . "\r\n";
                                    $headers .= 'Bcc: ' . $to . '' . "\r\n";
                                    mail($to, $subject, $message, $headers);
                                }
                                //free sms url with the arguments
                                if (SMS == 1) {
                                    /*$message_details = $this->commonmodel->sms_message_by_title('passenger_signup_success');
                                    $to = $p_phone;
                                    $message = $message_details['sms_description'];
                                    //$message = str_replace("##OTP##",$otp,$message);
                                    $message = str_replace("##PHONE##",$p_phone,$message);
                                    $message = str_replace("##PASSWORD##",$p_password,$message);
                                    $message = str_replace("##SITE_NAME##",SITE_NAME,$message);*/
                                    //$api->send_sms($to,$message);
                                    $message_details = $this->commonmodel->sms_message_by_title('otp');
                                    $to              = $p_phone;
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##OTP##", $otp, $message);
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);
                                    //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                                }
                                $detail  = [
                                    "email" => $p_email,
                                    "phone" => $p_phone,
                                    "skip_credit" => SKIP_CREDIT_CARD
                                ];
                                $message = [
                                    "message" => __('account_save_otp'),
                                    "detail" => $detail,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => 4
                                ];
                            }
                            echo json_encode($message);
                        }
                    } else {
                        $errors = $p_acc_validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                    break;
                /** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=otp_verify
                 * Params :- {"otp":"169105","email":"pandiarajan.v@ndot.in"}
                 *  **/
                case 'otp_verify':
                    $otp   = isset($mobiledata['otp']) ? $mobiledata['otp'] : '';
                    $email = isset($mobiledata['email']) ? $mobiledata['email'] : '';
                    if (!empty($otp)) {
                        $otp_verification = $api->otp_verification($otp, $email);
                        if ($otp_verification > 0) {
                            $update_passenger_array = [
                                "user_status" => "A"
                            ]; // activate user if the otp is valid
                            $result                 = $api->update_table(MDB_PASSENGERS, $update_passenger_array, 'email', $email);
                            $detail                 = [
                                "email" => $email,
                                "skip_credit" => SKIP_CREDIT_CARD
                            ];
                            $msg                    = [
                                "message" => __('signup_success'),
                                "detail" => $detail,
                                "status" => 1
                            ];
                        } else {
                            if($otp_verification == '-2'){
                                $msg = [
                                "message" => __('otp_expire'),
                                "status" => 2
                                ];
                            }
                            $msg = [
                                "message" => __('invalid_otp'),
                                "status" => -2
                            ];
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    exit;
                    break;
                /** Url : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_wallet
                 * Params : {"passenger_id":"1638"}
                 *  **/
                case 'passenger_wallet':
                    $passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
                    if (!empty($passenger_id)) {
                        $passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
                        $siteInfo         = $api->siteinfo_details();
                        $amount_details   = [
                            "wallet_amount1" => $siteInfo[0]['wallet_amount1'],
                            "wallet_amount2" => $siteInfo[0]['wallet_amount2'],
                            "wallet_amount3" => $siteInfo[0]['wallet_amount3'],
                            "wallet_amount_range" => $siteInfo[0]['wallet_amount_range']
                        ];
                        if (count($passenger_wallet) > 0) {
                            $msg = [
                                "wallet_amount" => $passenger_wallet[0]['wallet_amount'],
                                "amount_details" => $amount_details,
                                "status" => 1
                            ];
                        } else {
                            $msg = [
                                "message" => __('invalid_user'),
                                "status" => -2
                            ];
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    exit;
                    break;
                /** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=wallet_addmoney
                 *  Params : {"passenger_id":"1633","creditcard_no":"5555555555554444","creditcard_cvv":"222","expmonth":"11","expyear":"2021","money":"150","cardholder_name":"Pandiarajan","payment_type":"2","savecard":"0"}
                 *  **/
                case 'wallet_addmoney':
                    $passenger_id    = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
                    $money           = isset($mobiledata['money']) ? $mobiledata['money'] : '';
                    $promo_code      = isset($mobiledata['promo_code']) ? $mobiledata['promo_code'] : '';
                    $p_validator     = $this->wallet_addmoney_validation($mobiledata);
                    $promocodeAmount = 0;
                    if ($p_validator->check()) {
                        if ($promo_code != "") {
                            $promodiscount       = $api->getpromodetails($promo_code, $passenger_id);
                            $promocodeAmount     = ($promodiscount / 100) * $money;
                            $mobiledata['money'] = $money + $promocodeAmount;
                        }
                        $passenger_wallet = $this->wallet_addmoney($mobiledata, $default_companyid, $promo_code, $promocodeAmount);
                        $cancelFare       = $api->get_passenger_cancel_farebyid($passenger_id);
                        $wallAmount       = 0;
                        if ($passenger_wallet != 0) {
                            $passwallArr      = explode("#", $passenger_wallet);
                            $wallAmount       = isset($passwallArr[1]) ? $passwallArr[1] : 0;
                            $passenger_wallet = $passwallArr[0];
                        }
                        $credit_card_sts = ($wallAmount >= $cancelFare) ? 0 : SKIP_CREDIT_CARD;
                        if ($passenger_wallet == 1) {
                            $msg = [
                                "message" => __('amount_added_wallet'),
                                "credit_card_status" => $credit_card_sts,
                                "status" => 1
                            ];
                        } else if ($passenger_wallet == 0) {
                            $gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                            $msg              = [
                                "message" => $gateway_response,
                                "gateway_response" => $gateway_response,
                                "status" => 0
                            ];
                        } else {
                            $msg = [
                                "message" => __('no_payment_gateway'),
                                "status" => -1
                            ];
                        }
                    } else {
                        //$msg = array("message" => __('invalid_request'),"status"=>-1);
                        $errors = $p_validator->errors('errors');
                        $msg    = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    exit;
                    break;
                case 'invite_with_referral':
                    $passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
                    if (!empty($passenger_id)) {
                        $passengerReferral = $api->get_passenger_wallet_amount($passenger_id);
                        if (count($passengerReferral) > 0) {
                            $detail = [
                                "referral_code" => $passengerReferral[0]['referral_code'],
                                "referral_amount" => $passengerReferral[0]['referral_code_amount']
                            ];
                            $msg    = [
                                "message" => __('referral_amount'),
                                "detail" => $detail,
                                "status" => 1
                            ];
                        } else {
                            $msg = [
                                "message" => __('invalid_user'),
                                "status" => -2
                            ];
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    break;
                //api to check valid promocode
                case 'check_valid_promocode':
                    $passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
                    $promo_code   = isset($mobiledata['promo_code']) ? $mobiledata['promo_code'] : '';
                    if (!empty($passenger_id) && !empty($promo_code)) {
                        $check_promo = $api->checkwalletpromocode($promo_code, $passenger_id, $default_companyid);
                        //echo $check_promo;
                        //exit;
                        if ($check_promo == 0) {
                            $msg = [
                                "message" => __('invalid_promocode_wallet'),
                                "status" => 3
                            ];
                        } else if ($check_promo == 3) {
                            $msg = [
                                "message" => __('promo_code_startdate'),
                                "status" => 3
                            ];
                        } else if ($check_promo == 4) {
                            $msg = [
                                "message" => __('promo_code_expired'),
                                "status" => 3
                            ];
                        } else if ($check_promo == 2) {
                            $msg = [
                                "message" => __('promo_code_limit_exceed'),
                                "status" => 3
                            ];
                        } else {
                            $msg = [
                                "message" => __('promocode_valid'),
                                "status" => 1
                            ];
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    exit;
                    break;
                //URL : http://192.168.1.88:1009/api/index/?type=passenger_account_details&email=prabhu.r@ndot.in&phone=8888888885&password=123456&deviceid=&devicetoken=&devicetype=
                /*
                case 'passenger_account_details':
                    $datas = file_get_contents('php://input');
                    $data =  (array)json_decode($datas,true);
                    $mobiledata = $_REQUEST;
                    $p_email         = $mobiledata['email'];
                    $p_phone         = $mobiledata['phone'];
                    $p_password      = $mobiledata['password'];
                    $devicetoken     = $mobiledata['devicetoken'];
                    $device_id       = ""; //$mobiledata['deviceid'];
                    $devicetype      = $mobiledata['devicetype'];
                    $p_acc_validator = $this->account_validation($mobiledata);
                    if ($p_acc_validator->check()) {
                        $email_exist = $api->check_email_passengers($p_email, $default_companyid);
                        $phone_exist = $api->check_phone_passengers($p_phone, $default_companyid);
                        
                        if ($email_exist > 0) {
                            $message = array(
                                "message" => __('email_exists'),
                                "status" => 2
                            );
                            echo json_encode($message);
                        } else if ($phone_exist > 0) {
                            $message = array(
                                "message" => __('phone_exists'),
                                "status" => 3
                            );
                            echo json_encode($message);
                        } else {
                            $otp                = text::random($type = 'alnum', $length = 5);
                            $referral_code      = text::random($type = 'alnum', $length = 6);
                            $acc_details_result = $api->add_p_account_details($mobiledata, $otp, $referral_code, $devicetoken, $device_id, $devicetype, $default_companyid);
                            if ($acc_details_result == 1) {
                                /*  $mail="";                       
                                $replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE);
                                $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
                                
                                $to = $p_email;
                                $from = $this->siteemail;
                                $subject = __('otp_subject')." - ".$this->app_name; 
                                $redirect = "no";   
                                if(SMTP == 1)
                                {
                                include($_SERVER['DOCUMENT_ROOT']."/modules/SMTP/smtp.php");
                                }
                                else
                                {
                                // To send HTML mail, the Content-type header must be set
                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                // Additional headers
                                $headers .= 'From: '.$from.'' . "\r\n";
                                $headers .= 'Bcc: '.$to.'' . "\r\n";
                                mail($to,$subject,$message,$headers);   
                                }*/
                                //free sms url with the arguments
                                /*
                                if (SMS == 1) {
                                    $message_details = $this->commonmodel->sms_message_by_title('otp');
                                    $to              = $p_phone;
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##OTP##", $otp, $message);
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->send_sms($to, $message);
                                    //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                                }
                                $detail  = array(
                                    "email" => $p_email,
                                    "skip_credit" => SKIP_CREDIT_CARD
                                );
                                $message = array(
                                    "message" => __('account_saved'),
                                    "detail" => $detail,
                                    "status" => 1
                                );
                            } else {
                                $message = array(
                                    "message" => __('try_again'),
                                    "status" => 4
                                );
                            }
                            echo json_encode($message);
                        }
                    } else {
                        $errors = $p_acc_validator->errors('errors');
                        $result = array(
                            "message" => $errors,
                            "status" => -1
                        );
                        echo json_encode($result);
                        exit;
                    }
                    break;
                */
                case 'passenger_account_registration_step1':
                    $tmp = $mobiledata;
                                        unset($mobiledata['devicetoken']);
                            $requireIndex = $fromIndex = array_keys($mobiledata);
                    //$requireIndex = array('phone','deviceid','devicetype','country_code');
                    sort($fromIndex);
                    sort($requireIndex);
                    $mobiledata = $tmp;
                    
                    if($fromIndex == $requireIndex) {
                        $p_acc_validator = $this->passenger_account_validation($mobiledata);
                        if ($p_acc_validator->check()) {
                             $p_country_code     = isset($mobiledata['country_code'])?$mobiledata['country_code']:'+965';

                            $p_phone         = $mobiledata['phone'];
                            $devicetoken     = isset($mobiledata['devicetoken'])?$mobiledata['devicetoken']:'';
                            $device_id       = $mobiledata['deviceid'];
                            $devicetype      = $mobiledata['devicetype'];
                            $phone_exist = $api->check_phone_passengers($p_phone);

                            $code = isset($phone_exist['code'])?$phone_exist['code']:1;
                            if($code  == 3)
                            {
                                $result = [
                                "message" => __('not_allowed_register'),                                      
                                "status" => -1
                                ];                                      
                                echo json_encode($result);
                                exit;
                            }
                            
                            if ($phone_exist['code'] == 2 || $phone_exist['code'] == 1) {
$verification_code  = text::random($type = 'numeric', $length = 4);


                                
                                if (SMS == 1) {
                                        $passenger = $api->update_passenger_devicetoken($mobiledata, $verification_code, $devicetoken, $device_id, $devicetype,$default_companyid);
                                        $message_details = $this->commonmodel->sms_message_by_title('verification_code');
                                        $to              = $p_country_code.$p_phone;
                                        $message         = $message_details['sms_description'];
                                        $message         = str_replace("##VERIFY_CODE##", $verification_code, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                        $iosmessage = '';
if($devicetype == 2){
   $iosmessage = "iPhone users click on the link Q8Grandlimo://otp=".$verification_code;
}
$message = $message." ".$iosmessage;$send            = $api->sendSMS($to, $message);
                                       
                                }

                                 $result = [
                                            "message" => __('verification_code_sent'),                                      
                                            "status" => 3
                                        ];                                      
                                        echo json_encode($result);
                                        exit;                               
                            } else {
                                $verification_code  = text::random($type = 'numeric', $length = 4);
                                if ($phone_exist['code'] != 1) {
                                    if (SMS == 1) {


                                        $passenger = $api->add_passenger($mobiledata, $verification_code, $devicetoken, $device_id, $devicetype,$default_companyid);
                                        $message_details = $this->commonmodel->sms_message_by_title('verification_code');
                                        $to              = $p_country_code.$p_phone;
                                        $message         = $message_details['sms_description'];
                                        $message         = str_replace("##VERIFY_CODE##", $verification_code, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);$iosmessage = '';
if($devicetype == 2){
   $iosmessage = "iPhone users click on the link Q8Grandlimo://otp=".$verification_code;
}
$message = $message." ".$iosmessage;
                                        $api->sendSMS($to, $message);
                                        
                                    }
                                    $result = [
                                            "message" => __('verification_code_sent'),                                      
                                            "status" => 1
                                        ];                                      
                                        echo json_encode($result);
                                        exit;
                                } else {
                                    $result = [
                                        "message" => __('verification_code_already_sent'),                                      
                                        "status" => 2
                                    ];                                      
                                    echo json_encode($result);
                                    exit;
                                }
                            }
                        }  else {
                            $errors = $p_acc_validator->errors('errors');
                            $diffIndex = array_diff($requireIndex,$fromIndex);
                            $errors = 'Missing following params '.implode(',',$diffIndex);
                            $result = [
                                "message" => $errors,
                                "status" => -1
                            ];
                            echo json_encode($result);
                            exit;
                        }                           
                    } else {
                        $diffIndex = array_diff($requireIndex,$fromIndex);
                        $errors = 'Missing following params '.implode(',',$diffIndex);
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }                   
                break;
                case 'passenger_account_registration_step2':
                    $fromIndex = array_keys($mobiledata);
                    $requireIndex = ['phone','verification_code'];
                    sort($fromIndex);
                    sort($requireIndex);
                    if($fromIndex == $requireIndex) {
                        $p_acc_validator = $this->phone_verify_code_validation($mobiledata);
                        if ($p_acc_validator->check()) {
                            $p_phone         = $mobiledata['phone'];
                            $verification_code     = $mobiledata['verification_code'];
                            $passenger = $api->check_passenger($p_phone, $verification_code);
                            
                            
                            if($passenger) {
                                
                                $phone_exist = $api->check_phone_passengers($p_phone);
                                
                                
                                if($phone_exist['code'] == 2) {
                                    $updatestatus = $api->update_passenger_status($p_phone);
                                    $infoDetails = $api->passenger_login_details_with_phone($p_phone);
                                    if(!empty($infoDetails)) {
                                        if(count($infoDetails) > 0)
                                        {
                                            $passenger_image = isset($infoDetails['profile_image'])?$infoDetails['profile_image']:'';
                                            if($passenger_image != '')
                                            {
                                                if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . $passenger_image)) {
                                                $profile_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                                } else {
                                                $profile_image = URL_BASE . "public/images/no_image109.png";
                                                }
                                                $infoDetails['passenger_image']= $profile_image;
                                            }
                                            else
                                            {
                                                $profile_image = URL_BASE . "public/images/no_image109.png";
                                                 $infoDetails['passenger_image']=$profile_image;
                                            }
                                        }
                                        $result = [
                                            "message" => __('valid_verification_code'),
                                            "details" => $infoDetails,
                                            "status" => 1
                                        ];
                                    } else {
                                        $result = [
                                            "message" => __('valid_verification_code'),
                                            "status" => 1
                                        ];
                                    }
                                } else {
                                    $result = [
                                        "message" => __('valid_verification_code'),
                                        "status" => 1
                                    ];
                                }
                                echo json_encode($result);
                                exit;
                            } else {
                                $result = [
                                    "message" => __('invalid_verification_code'),
                                    "status" => -1
                                ];
                                echo json_encode($result);
                                exit;
                            }                           
                        } else {
                            $errors = $p_acc_validator->errors('errors');
                            $result = [
                                "message" => $errors,
                                "status" => -1
                            ];
                            echo json_encode($result);
                            exit;
                        }
                    } else {
                        $diffIndex = array_diff($requireIndex,$fromIndex);
                        $errors = 'Missing following params '.implode(',',$diffIndex);
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                break;
                case 'passenger_account_registration_step3':
                    //$mobiledata = array_merge($_POST);
		$tmp  = $mobiledata;
unset($mobiledata['salutation']);
                    $fromIndex = array_keys($mobiledata);
                    
                    $requireIndex = ['phone','country_code','firstname','lastname','email','civilid','creditcard_no','expdatemonth','expdateyear','creditcard_cvv','cardholder_name','civilid_front','civilid_back'];
                    sort($fromIndex);
                    sort($requireIndex);
                    $mobiledata = $tmp;
                    if($fromIndex == $requireIndex) {
                        $p_acc_validator = $this->passenger_register_validation($mobiledata);
                        
                        if ($p_acc_validator->check()) {
                            $p_country_code  = isset($mobiledata['country_code'])?$mobiledata['country_code']:'';
                            $p_phone         = $mobiledata['phone'];
                            $p_email     = $mobiledata['email'];
                            $email_exist = $api->check_email_passengers($p_email, $default_companyid);
                            
                            if ($email_exist > 0) {
                                $message = [
                                    "message" => __('email_exists'),
                                    "status" => 2
                                ];
                                echo json_encode($message);
                            } else {
                                /*$uploaddir = PASS_CIVIL_IMGPATH;
                                if(!file_exists(DOCROOT.$uploaddir)) {
                                    mkdir(DOCROOT.$uploaddir,0777,true);
                                }*/
                                $civilid_front     = '';
                                $civilid_back      = '';
                                $civil_front_thumb = '';
                                $civil_back_thumb  = '';
                                if ($mobiledata['civilid_front'] != NULL) {
                                    /* Profile Update */
                                    $imgdata   = base64_decode($mobiledata['civilid_front']);
                                    $f         = finfo_open();
                                    $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                    $mime_type = explode('/', $mime_type);
                                    $mime_type = $mime_type[1];
                                    $img       = imagecreatefromstring($imgdata);
                                    
                                    if ($img != false) {
                                        //$result = $api->driver_profile($d_personal_array['driver_id'], $default_companyid);
                                        if (count($result) > 0) {
                                            
                                            $civil_front  = text::random($type = 'alnum', $length = 12);
                                            $thumb_image      = 'thumb_' . $civil_front;
                                            $main_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH . $civil_front;
                                            $thumb_image_path = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH . 'thumb_' . $civil_front;
                                            if (file_exists($main_image_path) && ($civil_front != "")) {
                                                unlink($main_image_path);
                                            }
                                            if (file_exists($thumb_image_path) && ($thumb_image != "")) {
                                                unlink($thumb_image_path);
                                            }
                                        } //unlink($filename);
                                        $image_name       = uniqid() . '.' . $mime_type;
                                        $thumb_image_name = 'thumb_' . $image_name;
                                        $image_url        = DOCROOT . PASS_CIVIL_IMGPATH . '/' . $image_name;                   
                                        $image_path       = DOCROOT . PASS_CIVIL_IMGPATH . $image_name;
                                        imagejpeg($img, $image_url);
                                        imagedestroy($img);
                                        chmod($image_path, 0777);
                                        $d_image = Image::factory($image_path);
                                        $path11  = DOCROOT . PASS_CIVIL_IMGPATH;
                                        Commonfunction::imageoriginalsize($d_image, $path11, $image_name, 90);
                                        $path12 = $thumb_image_name;
                                        Commonfunction::imageresize($d_image, CIVIL_THUMBIMG_WIDTH, CIVIL_THUMBIMG_WIDTH, $path11, $thumb_image_name, 90);
                                        $civilid_front = $image_name;
                                        $civil_front_thumb = $thumb_image_name;
                                    }
                                }
                                if ($mobiledata['civilid_back'] != NULL) {
                                    /* Profile Update */
                                    $imgdata   = base64_decode($mobiledata['civilid_back']);
                                    $f         = finfo_open();
                                    $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                    $mime_type = explode('/', $mime_type);
                                    $mime_type = $mime_type[1];
                                    $img       = imagecreatefromstring($imgdata);
                                    
                                    if ($img != false) {
                                        //$result = $api->driver_profile($d_personal_array['driver_id'], $default_companyid);
                                        if (count($result) > 0) {
                                            
                                            $civilid_back  = text::random($type = 'alnum', $length = 12);
                                            $thumb_image      = 'thumb_' . $civilid_back;
                                            $main_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH . $civilid_back;
                                            $thumb_image_path = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH . 'thumb_' . $civil_front;
                                            if (file_exists($main_image_path) && ($civilid_back != "")) {
                                                unlink($main_image_path);
                                            }
                                            if (file_exists($thumb_image_path) && ($thumb_image != "")) {
                                                unlink($thumb_image_path);
                                            }
                                        } //unlink($filename);
                                        $image_name       = uniqid() . '.' . $mime_type;
                                        $thumb_image_name = 'thumb_' . $image_name;
                                        $image_url        = DOCROOT . PASS_CIVIL_IMGPATH . '/' . $image_name;                   
                                        $image_path       = DOCROOT . PASS_CIVIL_IMGPATH . $image_name;
                                        imagejpeg($img, $image_url);
                                        imagedestroy($img);
                                        chmod($image_path, 0777);
                                        $d_image = Image::factory($image_path);
                                        $path11  = DOCROOT . PASS_CIVIL_IMGPATH;
                                        Commonfunction::imageoriginalsize($d_image, $path11, $image_name, 90);
                                        $path12 = $thumb_image_name;
                                        Commonfunction::imageresize($d_image, CIVIL_THUMBIMG_WIDTH, CIVIL_THUMBIMG_WIDTH, $path11, $thumb_image_name, 90);
                                        $civilid_back = $image_name;
                                        $civil_back_thumb = $thumb_image_name;
                                    }
                                }
                                $mobiledata['civilid_front'] = $civilid_front;
                                $mobiledata['civilid_front_thumb'] = $civil_front_thumb;
                                $mobiledata['civilid_back']  = $civilid_back;
                                $mobiledata['civilid_back_thumb'] = $civil_back_thumb;
                                
                                $passenger = $api->add_passenger_data($mobiledata);
                                
                                $info = $api->get_passenger_info($passenger);
                                
                                
                                $mail="";
                                
                                $replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$mobiledata['firstname'],REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_MOBILE=>$p_phone,REPLACE_PASSWORD => $info[0]['org_password'],REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP];                               
                                if ($this->lang != 'en') {
                                    if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html')) {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html', $replace_variables);
                                    } else {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                                    }
                                } else {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                                }
                                $subject = __('passenger_registration_confirmation')." - ".$this->app_name;
                                
                                if(SMTP == 1) {
                                    $notify = App::helper('notification');
                                    $notify->setReceivers([$p_email]);
                                    $notify->setSubject($subject);
                                    $notify->setContent($message);
                                    $notify->sendNotification();
                                } else {
                                    // To send HTML mail, the Content-type header must be set
                                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                    // Additional headers
                                    $headers .= 'From: '.$from.'' . "\r\n";
                                    $headers .= 'Bcc: '.$to.'' . "\r\n";
                                    mail($to,$subject,$message,$headers);   
                                }
                               
                                if (SMS == 1) {
                                    $message_details = $this->commonmodel->sms_message_by_title('account_create_sms');
                                    $to              = $p_country_code.$p_phone;
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);
                                    
                                }

                                $infoDetails = $api->passenger_login_details($info[0]['_id']);
                                if(count($infoDetails) > 0)
                                {
                                    $passenger_image = isset($infoDetails['profile_image'])?$infoDetails['profile_image']:'';

                                    if($passenger_image != '')
                                    {
                                        if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . $passenger_image)) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                        } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                        $infoDetails['passenger_image']= $profile_image;
                                    }
                                    else
                                    {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                         $infoDetails['passenger_image']=$profile_image;
                                    }
                                }
                                    $result = [
                                        "message" => __('account_saved'),
                                        "video_url" => VIDEO_URL,
                                        "details" => $infoDetails,
                                        "status" => 1
                                    ];
                                    echo json_encode($result);
                                    exit;
                            }
                        }  else {
                            $errors = $p_acc_validator->errors('errors');
                            $result = [
                                "message" => $errors,
                                "status" => -1
                            ];
                            
                            echo json_encode($result);
                            exit;
                        }                           
                    } else {
                        $diffIndex = array_diff($requireIndex,$fromIndex);
                        $errors = 'Missing following params '.implode(',',$diffIndex);
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }                   
                break;
                case 'child_account_types':
                    $details = $api->getChildAccounts($this->lang);
                    $result = [
                            "message" => __('child_account_details'),
                            "detail" => $details,
                            "status" => 1
                        ];
                    echo json_encode($result);
                    exit;
                break;
                case 'get_taxi_list':
                    $fromIndex = array_keys($mobiledata);
                    $requireIndex = ['taxi_model','taxi_no'];
                    sort($fromIndex);
                    sort($requireIndex);
                    
                    if($fromIndex == $requireIndex) {
                        $taxiModels = [1,2,3,4];
                        if(!in_array($mobiledata['taxi_model'], $taxiModels)) {
                            $result = [
                                "message" => __('invalid_model'),
                                "status" => -1
                            ];
                            echo json_encode($result);
                            exit;
                        }
                        $details = $api->getTaxiList($mobiledata['taxi_model'],$mobiledata['taxi_no']);
                        if(!empty($details)){
                        $result = [
                                "message" => __('taxi_list'),
                                "detail" => $details,
                                "status" => 1
                            ];
                        echo json_encode($result);
                        exit;
                    }else {
                         $result = [
                            "message" => __('no_vehicle_found'),
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        
                        }
                    } else {
                        $diffIndex = array_diff($requireIndex,$fromIndex);
                        $errors = 'Missing following params '.implode(',',$diffIndex);
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                break;              
                case 'child_passenger_account_details':
                    $requireIndex = ['parent_id','account_type','email','phone','name','lastname','allow_creditcard'];
                    $fromIndex = array_keys($mobiledata);
                    sort($fromIndex);
                    sort($requireIndex);
                    
                    if($fromIndex == $requireIndex) {                   
                        $p_parent_id     = $mobiledata['parent_id'];
                        $p_account_type  = $mobiledata['account_type'];
                        $p_email         = $mobiledata['email'];
                        $p_phone         = $mobiledata['phone'];
                        $p_name         = $mobiledata['name'];
                        
                        $p_acc_validator = $this->child_account_validation($mobiledata);
                        if ($p_acc_validator->check()) {
                            $email_exist = $api->check_email_passengers($p_email, $default_companyid);
                            $phone_exist = $api->check_phone_passengers_register($p_phone, $default_companyid);
                            
                            if ($email_exist > 0) {
                                $message = [
                                    "message" => __('email_exists'),
                                    "status" => 2
                                ];
                                echo json_encode($message);
                            } else if ($phone_exist > 0) {
                                $message = [
                                    "message" => __('phone_exists'),
                                    "status" => 3
                                ];
                                echo json_encode($message);
                            } else {
                                $otp                = text::random($type = 'numeric', $length = 4);
                                $acc_details_result = $api->add_cp_account_details($mobiledata, $otp, $default_companyid);
                                //$acc_details_result  = 1;
                                if ($acc_details_result == 1) {
                                    $mail="";
                                    $parentInfo = $this->commonmodel->getParent($p_parent_id);
                                    $username   = $parentInfo['name'].' '.$parentInfo['lastname'];
                                    $updateChild = $api->update_child($p_parent_id);
                                    $requestDetails = $api->insert_child_request($p_account_type,$p_parent_id,$p_name,$p_phone,$p_email,$acc_details_result);
                                    
                                    $replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>'taxi',REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>'taxi',REPLACE_SITEURL=>URL_BASE,REPLACE_PARENTID=>$username];                                 
                                    $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'child_registration.html',$replace_variables);
                                    $subject = __('add_child_request')." - ".'taxi';;
                                        
                                    if(SMTP == 1) {
                                        $notify = App::helper('notification');
                                        $notify->setReceivers([$p_email]);
                                        $notify->setSubject($subject);
                                        $notify->setContent($message);
                                        $notify->sendNotification();
                                    } else {
                                        // To send HTML mail, the Content-type header must be set
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                        // Additional headers
                                        $headers .= 'From: '.$from.'' . "\r\n";
                                        $headers .= 'Bcc: '.$to.'' . "\r\n";
                                        mail($to,$subject,$message,$headers);   
                                    }
                                    
                                    if (SMS == 1) {
                                        $message_details = $this->commonmodel->sms_message_by_title('add_child_request');
                                        $to              = $p_phone;
                                        $message         = $message_details['sms_description'];
                                        $message         = str_replace("##OTP##", $otp, $message);
                                        $message         = str_replace("##PARENTID##", $username, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                        $message         = str_replace("##SITEURL##", URL_BASE, $message);
                                        $message         = str_replace("##ANDROID_PASSENGER_APP##", ANDROID_PASSENGER_APP, $message);
                                        $message         = str_replace("##IOS_PASSENGER_APP##", IOS_PASSENGER_APP, $message);
                                        $api->sendSMS($to, $message);                                       
                                    }
                                    $detail  = [
                                        "email" => $p_email,
                                        "skip_credit" => SKIP_CREDIT_CARD
                                    ];
                                    $message = [
                                        "message" => __('account_saved'),
                                        "detail" => $detail,
                                        "status" => 1
                                    ];
                                } else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => 4
                                    ];
                                }
                                echo json_encode($message);
                                exit;
                            }
                        } else {
                            $errors = $p_acc_validator->errors('errors');
                            $result = [
                                "message" => $errors,
                                "status" => -1
                            ];
                            echo json_encode($result);
                            exit;
                        }
                    } else {
                        $diffIndex = array_diff($requireIndex,$fromIndex);
                        $errors = 'Missing following params '.implode(',',$diffIndex);
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;                       
                    }
                break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=resend_otp&email=senthilcse2008@gmail.com&user_type=P
                
                case 'resend_otp':
                    $otp_array = $mobiledata;
                    $user_type = $otp_array['user_type'];
                    if (isset($mobiledata['phone'])) {
                        $phone     = $mobiledata['phone'];
$country_code     = isset($mobiledata['country_code'])?$mobiledata['country_code']:'';
                        $devicetype = isset($mobiledata['devicetype'])?$mobiledata['devicetype']:'';
                        
                        $otp        = text::random($type = 'numeric', $length = 4);
                        $otp_result = $api->update_otp($otp_array, $otp, $default_companyid);
                        if ($otp_result == 1) {
                            if (SMS == 1) {
                                $message_details = $this->commonmodel->sms_message_by_title('otp');
                                $to              = $country_code.$phone;
                                
                                $message         = $message_details['sms_description'];
                                $message         = str_replace("##OTP##", $otp, $message);
                                $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
$iosmessage = '';
                                if($devicetype == 2){
                                   $iosmessage = "iPhone users click on the link Q8Grandlimo://otp=".$otp;
                                }
                                $message = $message." ".$iosmessage;
                                $api->sendSMS($to, $message);
                            }
                            $detail  = [
                                "phone" => $phone
                            ];
                            $message = [
                                "message" => __('resend_otp'),
                                "detail" => $detail,
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('try_again'),
                                "status" => 4
                            ];
                        }
                        echo json_encode($message);
                        exit;
                    } else {
                        $result = [
                            "message" => __('missing_phone_number'),
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_personal_details&email=sakthivel.s.m@ndot.in&otp=mwS0Q&salutation=Mr&referral_code=jNs7q&firstname=senthil&lastname=kumar&profile_image=
                case 'passenger_personal_details':
                    $p_personal_array      = $mobiledata;
                    $referred_passenger_id = "";
                    //print_r($p_personal_array);
                    //exit;
                    if (isset($p_personal_array['email'])) {
                        $validator = $this->passenger_profile_validation($p_personal_array);
                        if ($validator->check()) {
                            $referral_code = $p_personal_array['referral_code'];
                            /*$validate_otp = $api->check_otp($p_personal_array['otp'],$p_personal_array['email'],'P',$default_companyid);
                            //check_otp_expire
                            if($validate_otp == 1)
                            {
                            $check_otp_expiry = $api->check_otp_expire($p_personal_array['otp'],$p_personal_array['email'],'P',$default_companyid);
                            if(TIMEZONE)
                            {
                            $current_time = convert_timezone('now',TIMEZONE);
                            $current_date = explode(' ',$current_time);
                            $start_time = $current_date[0].' 00:00:01';
                            $end_time = $current_date[0].' 23:59:59';
                            $date = $current_date[0].' %';
                            }
                            else
                            {
                            $current_time = date('Y-m-d H:i:s');
                            $start_time = date('Y-m-d').' 00:00:01';
                            $end_time = date('Y-m-d').' 23:59:59';
                            $date = date('Y-m-d %');
                            }                               
                            //print_r($check_otp_expiry);
                            //$current_time =   date('Y-m-d H:i:s');
                            $updated_date = $check_otp_expiry[0]['updated_date'];
                            $otp_expiry = $check_otp_expiry[0]['otp_expiry'];
                            if($current_time <= $otp_expiry)
                            {       */
                            if ($referral_code != "") {
                                $validate_referral_code = $api->check_referral_code($referral_code);
                                //echo count($validate_referral_code);
                                if (is_array($validate_referral_code)) {
                                    $referred_passenger_id = $validate_referral_code[0]['id'];
                                } else {
                                    //$referred_passenger_id = '';
                                    $message = [
                                        "message" => __('invalid_referral_code'),
                                        "status" => 3
                                    ];
                                    echo json_encode($message);
                                    exit;
                                }
                            }
                            if ($p_personal_array['profile_image'] != NULL) {
                                /* Profile Update */
                                $imgdata   = base64_decode($p_personal_array['profile_image']);
                                $f         = finfo_open();
                                $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                $mime_type = explode('/', $mime_type);
                                $mime_type = $mime_type[1];
                                //echo $imgdata;exit;
                                $img       = imagecreatefromstring($imgdata);
                                if ($img != false) {
                                    $image_name       = uniqid() . '.' . $mime_type;
                                    $thumb_image_name = 'thumb_' . $image_name;
                                    $image_url        = DOCROOT . PASS_IMG_IMGPATH . '/' . $image_name;
                                    //header('Content-Type: image/jpeg');                   
                                    $image_path       = DOCROOT . PASS_IMG_IMGPATH . $image_name;
                                    imagejpeg($img, $image_url);
                                    imagedestroy($img);
                                    chmod($image_path, 0777);
                                    $d_image = Image::factory($image_path);
                                    $path11  = DOCROOT . PASS_IMG_IMGPATH;
                                    //Commonfunction::imageresize($d_image,PASS_IMG_WIDTH, PASS_IMG_HEIGHT,$path11,$image_name,90);                             
                                    Commonfunction::imageoriginalsize($d_image, $path11, $image_name, 90);
                                    $path12 = $thumb_image_name;
                                    //Commonfunction::imageresize($d_image,PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT,$path11,$thumb_image_name,90);
                                    Commonfunction::imageoriginalsize($d_image, $path11, $thumb_image_name, 90);
                                    $update_array = [
                                        "salutation" => $p_personal_array['salutation'],
                                        "name" => $p_personal_array['firstname'],
                                        "lastname" => $p_personal_array['lastname'],
                                        "email" => $p_personal_array['email'],
                                        "profile_image" => $image_name,
                                        "user_status" => 'A',
                                        "activation_status" => 1
                                    ];
                                    $message      = $api->save_passenger_personaldata($update_array, $referred_passenger_id, $default_companyid);
                                    //chmod($image_path, 0777);                    
                                } else {
                                    $message = [
                                        "message" => __('image_not_upload'),
                                        "status" => 4
                                    ];
                                }
                            } else {
                                $update_array = [
                                    "salutation" => $p_personal_array['salutation'],
                                    "name" => $p_personal_array['firstname'],
                                    "lastname" => $p_personal_array['lastname'],
                                    "email" => $p_personal_array['email'],
                                    "user_status" => 'A',
                                    "activation_status" => 1
                                ];
                                $message      = $api->save_passenger_personaldata($update_array, $referred_passenger_id, $default_companyid);
                            }
                            /*****************************************/
                            if ($message == 0) {
                                $passenger_details = $api->passenger_detailsbyemail($p_personal_array['email'], $default_companyid);
                                $id                = "";
                                if (count($passenger_details) > 0) {
                                    $id    = $passenger_details[0]['id'];
                                    $email = $passenger_details[0]['email'];
                                }
                                $detail  = [
                                    "passenger_id" => $id,
                                    "skip_credit" => SKIP_CREDIT_CARD
                                ];
                                $message = [
                                    "message" => __('personal_updated'),
                                    "detail" => $detail,
                                    "status" => 1
                                ];
                            }
                            if ($message == -1) {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => -1
                                ];
                            }
                            /*  }
                            else
                            {
                            $message = array("message" => __('otp_expire'),"status"=>-7);
                            }
                            }
                            else
                            {
                            $message = array("message" => __('invalid_otp'),"status"=>-5);
                            }*/
                        } else {
                            $validation_error = $validator->errors('errors');
                            $message          = [
                                "message" => $validation_error,
                                "status" => -3
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_email'),
                            "status" => -4
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_card_details&email=sakthivel.s.m@ndot.in&creditcard_no=4111111111111111&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&savecard=1&default=
                case 'passenger_card_details':
                    $p_card_array = $mobiledata;
                    $savecard     = $p_card_array['savecard'];
                    $email        = $p_card_array['email'];
                    $config_array = $api->select_site_settings($default_companyid);
                    if ($savecard == 1) {
                        $card_validation = $this->passenger_card_validation($p_card_array);
                        if ($card_validation->check()) {
                            $creditcard_no    = $p_card_array['creditcard_no'];
                            $card_holder_name = (isset($p_card_array['card_holder_name'])) ? $p_card_array['card_holder_name'] : '';
                            //isVAlidCreditCard($ccnum,"",true);
                            $authorize_status = $api->isVAlidCreditCard($creditcard_no, "", true);
                            //print_r($authorize_status);
                            //exit;
                            if ($authorize_status == 0) {
                                $message = [
                                    "message" => __('invalid_card'),
                                    "status" => 2
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            $result = $api->save_passenger_carddata($p_card_array, $default_companyid);
                            
                            if ($result == 2) {
                                $passenger_details = $api->passenger_detailsbyemail($email, $default_companyid);
                                $total_array       = [];
                                if (count($result) > 0) {
                                    if ((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'])) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'];
                                    } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                    }
                                  
                                    $passenger_id                          = $passenger_details['_id'];
                                    $total_array['salutation']             = $passenger_details['passengerdetails'][0]['salutation'];
                                    $total_array['name']                   = $passenger_details['passengerdetails'][0]['name'];
                                    $total_array['lastname']               = $passenger_details['passengerdetails'][0]['lastname'];
                                    $total_array['email']                  = $passenger_details['passengerdetails'][0]['email'];
                                    $total_array['profile_image']          = $profile_image;                                    
                                    $total_array['country_code']           = $passenger_details['passengerdetails'][0]['country_code'];
                                    $total_array['phone']                  = $passenger_details['passengerdetails'][0]['phone'];
                                    $total_array['address']                = $passenger_details['passengerdetails'][0]['address'];
                                    $referral_code                         = $passenger_details['passengerdetails'][0]['referral_code'];
                                    $total_array['referral_code']          = $referral_code;
                                    $total_array['referral_code_amount']   = $passenger_details['passengerdetails'][0]['referral_code_amount'];
                                    $ref_message                           = TELL_TO_FRIEND_MESSAGE . '' . $referral_code;
                                    $ref_discount                          = REFERRAL_DISCOUNT;
                                    $telltofriend_message                  = TELL_TO_FRIEND_MESSAGE;
                                    //Newly Added-13.11.2014
                                    $total_array['site_currency']          = $config_array[0]['site_currency'];
                                    $total_array['aboutpage_description']  = $this->app_description;
                                    $total_array['tell_to_friend_subject'] = __('telltofrien_subject');
                                    $total_array['skip_credit']            = SKIP_CREDIT_CARD;
                                    $total_array['metric']                 = UNIT_NAME;
                                    //variable to know whether the passenger have credit card details
                                    $total_array['credit_card_status']     = 1;
                                    //str_replace("#REFDIS#",$ref_discount,$ref_message); 
                                    /***Get Company car model details start***/
                                    $company_model_details                 = $api->company_model_details($default_companyid);
                                    if (count($company_model_details) > 0) {
                                        $total_array['model_details'] = $company_model_details;
                                    } else {
                                        $total_array['model_details'] = "model details not found";
                                    }
                                    /***Get Company car model details end***/
                                    $total_array['telltofriend_message'] = $telltofriend_message;
                                }
                                //free sms url with the arguments
                                if (SMS == 1) {
                                    $message_details = $this->commonmodel->sms_message_by_title('account_create_sms');
                                    $to              = isset($total_array['phone']) ? $total_array['phone'] : '';
                                    //$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
                                    $p_password      = "";
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##USERNAME##", $email, $message);
                                    $message         = str_replace("##PASSWORD##", $p_password, $message);
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);
                                    //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                                }
                                $p_password        = isset($passenger_details[0]['org_password']) ? $passenger_details[0]['org_password'] : '';
                                $mobile_no         = isset($passenger_details[0]['phone']) ? $passenger_details[0]['country_code'] . $passenger_details[0]['phone'] : '';
                                $username          = isset($passenger_details[0]['name']) ? $passenger_details[0]['name'] : '';
                                $replace_variables = [
                                    REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                                    REPLACE_SITENAME => $this->app_name,
                                    REPLACE_USERNAME => $username,
                                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                    REPLACE_MOBILE => $mobile_no,
                                    REPLACE_PASSWORD => $p_password,
                                    REPLACE_SITEEMAIL => $this->siteemail,
                                    REPLACE_SITEURL => URL_BASE,
                                    REPLACE_COMPANYDOMAIN => $this->domain_name,
                                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                                ];
                                //$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
                                /* Added for language email template */
                                if ($this->lang != 'en') {
                                    if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html')) {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html', $replace_variables);
                                    } else {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
                                    }
                                } else {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
                                }
                                /* Added for language email template */
                                $to       = $email;
                                $from     = $this->siteemail;
                                $subject  = __('pass_account_details') . " - " . $this->app_name;
                                $redirect = "no";
                                if (SMTP == 1) {
                                    include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                                } else {
                                    // To send HTML mail, the Content-type header must be set
                                    $headers = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                    // Additional headers
                                    $headers .= 'From: ' . $from . '' . "\r\n";
                                    $headers .= 'Bcc: ' . $to . '' . "\r\n";
                                    mail($to, $subject, $message, $headers);
                                }
                                /*** Update Pssenger password as empty ************/
                                $update_passenger_array = [
                                    "org_password" => ""
                                ]; // 
                                $result                 = $api->update_table(PASSENGERS, $update_passenger_array, 'id', $passenger_id);
                                /***************************************************/
                                $message                = [
                                    "message" => __('signup_success'),
                                    "detail" => $total_array,
                                    "status" => 1
                                ];
                            } elseif ($result == 2) {
                                $message = [
                                    "message" => __('you_have_detail'),
                                    "status" => 3
                                ];
                            } else {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => 1
                                ];
                            }
                        } else {
                            $validation_error = $card_validation->errors('errors');
                            $message          = [
                                "message" => __('validation_error'),
                                "detail" => $validation_error,
                                "status" => -3
                            ];
                        }
                    } else {
                        $update_cred_sts       = [
                            "skip_credit_card" => '1'
                        ];
                        $update_current_result = $api->update_table(PASSENGERS, $update_cred_sts, 'email', $email);
                        $passenger_details     = $api->passenger_detailsbyemail($email, $default_companyid);
                        $total_array           = [];
                        if (count($passenger_details) > 0) {
                            if ((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'])) {
                                $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'];
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
                            $passenger_id                          = $passenger_details[0]['id'];
                            $total_array['id']                     = $passenger_details[0]['id'];
                            $total_array['salutation']             = $passenger_details[0]['salutation'];
                            $total_array['name']                   = $passenger_details[0]['name'];
                            $total_array['lastname']               = $passenger_details[0]['lastname'];
                            $total_array['email']                  = $passenger_details[0]['email'];
                            $total_array['profile_image']          = $profile_image;
                            $total_array['phone']                  = $passenger_details[0]['phone'];
                            $total_array['address']                = $passenger_details[0]['address'];
                            $referral_code                         = $passenger_details[0]['referral_code'];
                            $total_array['referral_code']          = $referral_code;
                            $total_array['referral_code_amount']   = $passenger_details[0]['referral_code_amount'];
                            $ref_message                           = TELL_TO_FRIEND_MESSAGE . '' . $referral_code;
                            $ref_discount                          = REFERRAL_DISCOUNT;
                            $telltofriend_message                  = TELL_TO_FRIEND_MESSAGE; //str_replace("#REFDIS#",$ref_discount,$ref_message); 
                            //Newly Added-13.11.2014
                            $total_array['site_currency']          = $config_array[0]['site_currency'];
                            $total_array['facebook_share']         = $config_array[0]['facebook_share'];
                            $total_array['twitter_share']          = $config_array[0]['twitter_share'];
                            $total_array['aboutpage_description']  = $this->app_description;
                            $total_array['tell_to_friend_subject'] = __('telltofrien_subject');
                            $total_array['skip_credit']            = SKIP_CREDIT_CARD;
                            $total_array['metric']                 = UNIT_NAME;
                            $total_array['credit_card_status']     = 0;
                            /***Get Company car model details start***/
                            $company_model_details                 = $api->company_model_details($default_companyid);
                            if (count($company_model_details) > 0) {
                                $total_array['model_details'] = $company_model_details;
                            } else {
                                $total_array['model_details'] = "model details not found";
                            }
                            /***Get Company car model details end***/
                            $total_array['telltofriend_message'] = $telltofriend_message;
                        }
                        if (SMS == 1) {
                            $message_details = $this->commonmodel->sms_message_by_title('account_create_sms');
                            $to              = isset($total_array['phone']) ? $total_array['phone'] : '';
                            //$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
                            $p_password      = "";
                            $message         = $message_details['sms_description'];
                            $message         = str_replace("##USERNAME##", $email, $message);
                            $message         = str_replace("##PASSWORD##", $p_password, $message);
                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                            $api->sendSMS($to, $message);
                            //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                        }
                        $p_password        = isset($passenger_details[0]['org_password']) ? $passenger_details[0]['org_password'] : '';
                        $mobile_no         = isset($passenger_details[0]['phone']) ? $passenger_details[0]['phone'] : '';
                        $username          = isset($passenger_details[0]['name']) ? $passenger_details[0]['name'] : '';
                        $replace_variables = [
                            REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => $username,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_MOBILE => $mobile_no,
                            REPLACE_PASSWORD => $p_password,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COMPANYDOMAIN => $this->domain_name,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                        //$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
                        /* Added for language email template */
                        if ($this->lang != 'en') {
                            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html')) {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html', $replace_variables);
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
                            }
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
                        }
                        $to       = $email;
                        $from     = $this->siteemail;
                        $subject  = __('pass_account_details') . " - " . $this->app_name;
                        $redirect = "no";
                        if (SMTP == 1) {
                            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                        } else {
                            // To send HTML mail, the Content-type header must be set
                            $headers = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            // Additional headers
                            $headers .= 'From: ' . $from . '' . "\r\n";
                            $headers .= 'Bcc: ' . $to . '' . "\r\n";
                            mail($to, $subject, $message, $headers);
                        }
                        /*** Update Pssenger password as empty ************/
                        $update_passenger_array = [
                            "org_password" => ""
                        ]; // 
                        $result                 = $api->update_table(PASSENGERS, $update_passenger_array, 'id', $passenger_id);
                        /***************************************************/
                        $message                = [
                            "message" => __('signup_success'),
                            "detail" => $total_array,
                            "status" => 1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_referral_code
                 * Params : {"email":"pandiarajan.v@ndot.in","referral_code":"EMJIOL"}
                 *  **/
                case 'passenger_referral_code':
                    $referral_code = (isset($mobiledata['referral_code'])) ? $mobiledata['referral_code'] : '';
                    $email         = (isset($mobiledata['email'])) ? $mobiledata['email'] : '';
                    if (!empty($referral_code)) {
                        $referralcode_exist = $api->check_referral_code_exist($referral_code, $default_companyid);
                        if ($referralcode_exist > 0) {
                            $passenger_details = $api->passenger_detailsbyemail($email, $default_companyid);
                            if (count($passenger_details) > 0) {
                                $referral_used = $api->check_referral_code_used($passenger_details[0]['id']);
                                if ($referral_used == 0) {
                                    $save_referral = $api->save_referral_code($passenger_details[0]['id'], $referral_code, $default_companyid, $passenger_details[0]['device_id'], $passenger_details[0]['device_token']);
                                    if ($save_referral == 1) {
                                        $message = [
                                            "message" => __('referral_code_save_successful'),
                                            "status" => 1
                                        ];
                                    } else {
                                        $message = [
                                            "message" => __('try_again'),
                                            "status" => -1
                                        ];
                                    }
                                } else {
                                    $message = [
                                        "message" => __('referral_code_already_used'),
                                        "status" => 4
                                    ];
                                }
                            } else {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => -1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('referral_code_not_exists'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('referral_code_not_empty'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=passenger_fb_connect&accesstoken=sdfdssdsfdsfasdfassfasfsdfsdf&userid=100000222346359&fname=senthil&lname=kumar&fbemail=janani.senthilcse@gmail.com&devicetoken=e10adc3949ba59abbe56e057f20f883e&deviceid=SDfsdf454&devicetype=1
                case 'passenger_fb_connect':
                    $array            = $mobiledata;
                    $accessToken      = $array['accesstoken'];
                    $uid              = $array['userid'];
                    $fname            = $array['fname'];
                    $lname            = $array['lname'];
                    $email            = $array['fbemail'];
                    $devicetoken      = $array['devicetoken'];
                    $device_id        = $array['deviceid'];
                    $devicetype       = $array['devicetype'];
                    /*$profile_data_url = "https://graph.facebook.com/me?access_token=".$accessToken;
                    $Profile_data = json_decode($this->curl_function($profile_data_url));
                    if(isset($Profile_data->error))
                    {
                    $message = array("message" => 'Problem on Facebook Connect.Please Try Again',"status"=>-1);
                    }
                    else{*/
                    /** Thumb Image ****/
                    //echo "http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."";
                    $thumb_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                    $thumb_image_name = 'thumb_' . $uid . '.jpg';
                    $thumb_image_path = DOCROOT . PASS_IMG_IMGPATH . $thumb_image_name;
                    @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                    @chmod($thumb_image_path, 0777);
                    file_put_contents($thumb_image_path, $thumb_image);
                    $edit_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                    $edit_image_name = 'edit_' . $uid . '.jpg';
                    $edit_image_path = DOCROOT . PASS_IMG_IMGPATH . $edit_image_name;
                    @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                    @chmod($edit_image_path, 0777);
                    file_put_contents($edit_image_path, $edit_image);
                    /** Big Image **/
                    $big_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_IMG_WIDTH . "&height=" . PASS_IMG_HEIGHT . "");
                    $image_name     = $uid . '.jpg';
                    $big_image_path = DOCROOT . PASS_IMG_IMGPATH . $image_name;
                    @chmod(DOCROOT . PASS_IMG_IMGPATH, 0777);
                    @chmod($big_image_path, 0777);
                    file_put_contents($big_image_path, $big_image);
                    $base_image   = imagecreatefromjpeg($edit_image_path);
                    $width        = 100;
                    $height       = 19;
                    $top_image    = imagecreatefrompng(URL_BASE . "public/images/edit.png");
                    $merged_image = DOCROOT . PASS_IMG_IMGPATH . 'edit_' . $uid . '.jpg';
                    imagesavealpha($top_image, true);
                    imagealphablending($top_image, true);
                    imagecopy($base_image, $top_image, 0, 83, 0, 0, $width, $height);
                    imagejpeg($base_image, $merged_image);
                    /*************************/
                    //print_r($Profile_data); exit;
                    $otp               = text::random($type = 'alnum', $length = 5);
                    $referral_code     = text::random($type = 'alnum', $length = 6);
                    $status            = $api->register_facebook_user($accessToken, $uid, $otp, $referral_code, $fname, $lname, $email, $image_name, $devicetoken, $device_id, $devicetype, $default_companyid);
                    //echo $status;exit;
                    $passenger_details = $api->passenger_detailsbyemail($email, $default_companyid);
                    if ((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'])) {
                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details[0]['profile_image'];
                    } else {
                        $profile_image = URL_BASE . "public/uploads/no_image109.png";
                    }
                    $passenger_details[0]['profile_image'] = $profile_image;
                    $config_array                          = $api->select_site_settings($default_companyid);
                    //print_r($config_array);exit;
                    //echo 'as'.$status;exit;                               
                    $total_array                           = [];
                    $result                                = $passenger_details;
                    $fbemail                               = '';
                    $skip_credit_card                      = 2;
                    if (count($result) > 0) {
                        $total_array['id']                     = $result[0]['id'];
                        $total_array['name']                   = $result[0]['name'];
                        $total_array['email']                  = $result[0]['email'];
                        $fbemail                               = $total_array['email'];
                        $total_array['profile_image']          = $profile_image;
                        $total_array['country_code']           = $result[0]['country_code'];
                        $total_array['phone']                  = $result[0]['phone'];
                        $total_array['address']                = $result[0]['address'];
                        $total_array['user_status']            = $result[0]['user_status'];
                        $total_array['login_from']             = $result[0]['login_from'];
                        $total_array['referral_code']          = $result[0]['referral_code'];
                        $total_array['referral_code_amount']   = $result[0]['referral_code_amount'];
                        //to check whether the passenger gave
                        $skip_credit_card                      = $result[0]['skip_credit_card'];
                        $telltofriend_message                  = TELL_TO_FRIEND_MESSAGE; //str_replace("#REFDIS#",$ref_discount,$ref_message); 
                        $total_array['telltofriend_message']   = $telltofriend_message;
                        //Newly Added-13.11.2014
                        $total_array['site_currency']          = $config_array[0]['site_currency'];
                        $total_array['aboutpage_description']  = $this->app_description;
                        $total_array['tell_to_friend_subject'] = __('telltofrien_subject');
                        $total_array['skip_credit']            = SKIP_CREDIT_CARD;
                        $total_array['metric']                 = UNIT_NAME;
                        //variable to know whether the passenger have credit card
                        $check_card_data                       = $api->check_passenger_card_data($result[0]['id']);
                        $credit_card_sts                       = ($check_card_data == 0) ? 0 : 1;
                        $total_array['credit_card_status']     = $credit_card_sts;
                    }
                    //print_r($total_array);exit;
                    //echo $status;exit('sdfdsf');
                    if ($status == 1) {
                        //echo $passenger_details[0]['id']; 
                        /***Get Company car model details start***/
                        $company_model_details = $api->company_model_details($default_companyid);
                        if (count($company_model_details) > 0) {
                            $total_array['model_details'] = $company_model_details;
                        } else {
                            $total_array['model_details'] = "model details not found";
                        }
                        /***Get Company car model details end***/
                        $message = [
                            "message" => __('succesful_login_flash'),
                            "detail" => $total_array,
                            "status" => 1
                        ]; //url::redirect(PATH);                                                               
                    } else if ($status == 2) {
                        $detail  = [
                            "email" => $fbemail
                        ];
                        $message = [
                            "message" => __('account_saved_withoutmobile'),
                            "detail" => $detail,
                            "status" => 2
                        ];
                        //$message = array("message"=>__('account_saved_withoutmobile'),"status"=>2);                    
                    }
                    /*else if($status==3)
                    {                                   
                    $message = array("message"=>__('p_personal_data_not_filled'),"detail"=>$total_array,"status"=>3);                                                    
                    } */
                    else if ($status == 4 || $status == 3) {
                        if (SKIP_CREDIT_CARD != 1 || $skip_credit_card != 1) {
                            $message = [
                                "message" => __('p_card_data_not_filled'),
                                "detail" => $total_array,
                                "status" => 4
                            ];
                        } else {
                            /***Get Company car model details start***/
                            $company_model_details = $api->company_model_details($default_companyid);
                            if (count($company_model_details) > 0) {
                                $total_array['model_details'] = $company_model_details;
                            } else {
                                $total_array['model_details'] = "model details not found";
                            }
                            /***Get Company car model details end***/
                            $message = [
                                "message" => __('succesful_login_flash'),
                                "detail" => $total_array,
                                "status" => 1
                            ];
                        }
                    } else if ($status == -2) {
                        //$message = array("message"=>__('email_exists'),"status"=>-2);     
                        $detail  = [
                            "email" => $email
                        ];
                        $message = [
                            "message" => __('account_not_activated'),
                            "detail" => $detail,
                            "status" => -2
                        ];
                    } else {
                        $message = [
                            "message" => __('facebook_error'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_mobile_otp&fbemail=test@gmail.com&mobile=9789648588&fname=senthil&lname=kumar&otp=HH6tC
                case 'passenger_mobile_otp':
                    $array        = $mobiledata;
                    $email        = $array['fbemail'];
                    $mobile       = $array['mobile'];
                    $country_code = isset($array['country_code']) ? $array['country_code'] : '';
                    $phone_exist  = $api->check_phone_bypassengers($mobile, $email, $default_companyid, $country_code);
                    if ($phone_exist != 0) {
                        $message = [
                            "message" => __('phone_exists'),
                            "status" => 4
                        ];
                    } else {
                        if ($email != null && $mobile != null) {
                            $status = $api->update_passenger_mobile($email, $mobile, '', '', '', '', $default_companyid, $country_code);
                            if ($status == 1) {
                                $passenger_details = $api->passenger_detailsbyemail($email, $default_companyid);
                                $otp               = $passenger_details[0]['otp'];
                                $id                = $passenger_details[0]['id'];
                                /*$mail="";                     
                                $replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE);
                                $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
                                
                                $to = $email;
                                $from = $this->siteemail;
                                $subject = __('otp_subject')." - ".$this->app_name; 
                                $redirect = "no";   
                                if(SMTP == 1)
                                {
                                include($_SERVER['DOCUMENT_ROOT']."/modules/SMTP/smtp.php");
                                }
                                else
                                {
                                // To send HTML mail, the Content-type header must be set
                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                // Additional headers
                                $headers .= 'From: '.$from.'' . "\r\n";
                                $headers .= 'Bcc: '.$to.'' . "\r\n";
                                mail($to,$subject,$message,$headers);   
                                }*/
                                if (SMS == 1) {
                                    $message_details = $this->commonmodel->sms_message_by_title('otp');
                                    $to              = $passenger_details[0]['phone'];
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##OTP##", $otp, $message);
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);
                                }
                                $total_array = [];
                                if (count($passenger_details) > 0) {
                                    $total_array['id']      = $passenger_details[0]['id'];
                                    $total_array['name']    = $passenger_details[0]['name'];
                                    $total_array['email']   = $passenger_details[0]['email'];
                                    $total_array['phone']   = $passenger_details[0]['phone'];
                                    $total_array['address'] = $passenger_details[0]['address'];
                                }
                                $detail  = [
                                    "passenger_id" => $id
                                ];
                                $message = [
                                    "message" => __('account_saved'),
                                    "detail" => $total_array,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => 2
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => 3
                            ];
                        }
                    }
                    echo json_encode($message);
                    break;
                //URL:  //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_login&phone=9999999999&password=123456&deviceid=4&devicetoken=geerge&devicetype=1
                case 'passenger_login':
                    $p_login_array = $mobiledata;
                    $validator     = $this->passenger_login_validation($p_login_array);
                    //print_r($p_login_array);exit;
                    if ($validator->check()) {
                        $phone_exist = $api->check_phone_passengers($p_login_array['phone'], $default_companyid, $p_login_array['country_code']);
                        if ($phone_exist == 0) {
                            $message = [
                                "message" => __('phone_not_exists'),
                                "status" => 2
                            ];
                            echo json_encode($message);
                            break;
                        } 
                        else {
                            $result = $api->passenger_login($p_login_array['phone'], md5($p_login_array['password']), $p_login_array['devicetoken'], $p_login_array['deviceid'], $p_login_array['devicetype'], $default_companyid, $p_login_array['country_code']);
                            //echo print_r($result);exit;
                            if (count($result) > 0) {
                                //Checking the User Status                  
                                $user_status     = $result[0]['user_status'];
                                $passenger_email = $result[0]['email'];
                                $passenger_id    = $result[0]['id'];
                                $device_id       = $result[0]['device_token'];
                                $login_status    = $result[0]['login_status'];
                                if ($user_status == 'D' || $user_status == 'T') {
                                    $message = [
                                        "message" => __('user_blocked'),
                                        "status" => 3
                                    ];
                                } else if ($user_status == 'I') {
                                    $detail  = [
                                        "email" => $passenger_email,
                                        "phone" => $p_login_array['phone'],
                                        "passenger_id" => $passenger_id
                                    ];
                                    //$message = array("message" => __('p_personal_data_not_filled'),"detail"=>$detail,"status"=> -2);                              
                                    $message = [
                                        "message" => __('account_not_activated'),
                                        "detail" => $detail,
                                        "status" => -2
                                    ];
                                } else {
                                    $device_token = isset($p_login_array['devicetoken']) ? $p_login_array['devicetoken'] : '';
                                    $device_id;
                                    $update_id           = $result[0]['id'];
                                    $check_personal_date = $api->check_passenger_personal_data($update_id);
                                    $check_card_data     = $api->check_passenger_card_data($update_id);
                                    //variable to know whether the passenger have credit card
                                    $credit_card_sts     = ($check_card_data == 0) ? 0 : 1;
                                    if ($check_personal_date == 1) {
                                        $detail  = [
                                            "email" => $passenger_email,
                                            "phone" => $p_login_array['phone'],
                                            "passenger_id" => $passenger_id
                                        ];
                                        $message = [
                                            "message" => __('p_personal_data_not_filled'),
                                            "status" => -2,
                                            "detail" => $detail
                                        ];
                                    }
                                    //else if(SKIP_CREDIT_CARD !=1 && $check_card_data == 0)
                                    else if ($result[0]['skip_credit_card'] != 1 && $check_card_data == 0) {
                                        $detail  = [
                                            "email" => $passenger_email,
                                            "phone" => $p_login_array['phone'],
                                            "passenger_id" => $passenger_id
                                        ];
                                        $message = [
                                            "message" => __('p_card_data_not_filled'),
                                            "status" => -3,
                                            "detail" => $detail
                                        ];
                                    }
                                    /*else if(($login_status == 'S')  && ($device_id != $device_token))
                                    {
                                    $message = array("message" => __('already_login'),"status"=> 0);                                
                                    }*/
                                    else //  && ($device_id == $device_token)
                                        {
                                        if ((!empty($result[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'edit_' . $result[0]['profile_image'])) {
                                            $edit_image = URL_BASE . PASS_IMG_IMGPATH . 'edit_' . $result[0]['profile_image'];
                                        } else {
                                            $edit_image = URL_BASE . "public/images/edit_image.png";
                                        }
                                        $result[0]['edit_image'] = $edit_image;
                                        if ((!empty($result[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $result[0]['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $result[0]['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                        $config_array = $api->select_site_settings($default_companyid);
                                        $total_array  = [];
                                        if (count($result) > 0) {
                                            $total_array['id']                     = $result[0]['id'];
                                            $total_array['name']                   = $result[0]['name'];
                                            $total_array['email']                  = $result[0]['email'];
                                            $total_array['profile_image']          = $profile_image;
                                            $total_array['country_code']           = $result[0]['country_code'];
                                            $total_array['phone']                  = $result[0]['phone'];
                                            $total_array['login_from']             = $result[0]['login_from'];
                                            $total_array['referral_code']          = $result[0]['referral_code'];
                                            $total_array['referral_code_amount']   = $result[0]['referral_code_amount'];
                                            $telltofriend_message                  = TELL_TO_FRIEND_MESSAGE; //str_replace("#REFDIS#",$ref_discount,$ref_message); 
                                            $total_array['telltofriend_message']   = $telltofriend_message;
                                            //Newly Added-13.11.2014
                                            $total_array['site_currency']          = $config_array[0]['site_currency'];
                                            $total_array['aboutpage_description']  = $this->app_description;
                                            $total_array['tell_to_friend_subject'] = __('telltofrien_subject');
                                            /***Get Company car model details start***/
                                            $company_model_details                 = $api->company_model_details($default_companyid);
                                            if (count($company_model_details) > 0) {
                                                $total_array['model_details'] = $company_model_details;
                                            } else {
                                                $total_array['model_details'] = "model details not found";
                                            }
                                            $total_array['credit_card_status'] = $credit_card_sts;
                                            /***Get Company car model details end***/
                                            $message                           = [
                                                "message" => __('succesful_login_flash'),
                                                "detail" => $total_array,
                                                "status" => 1
                                            ];
                                            echo json_encode($message);
                                            exit;
                                        }
                                    }
                                }
                                echo json_encode($message);
                                exit;
                            } else {
                                $message = [
                                    "message" => __('password_failed'),
                                    "status" => 4
                                ];
                                echo json_encode($message);
                                exit;
                            }
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "detail" => $validation_error,
                            "status" => -5
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_profile&userid=2
                case 'passenger_profile':
                    $mobiledata = $_REQUEST;
                    if ($mobiledata['passengerid'] != null) {
                        $result = $api->passenger_profile($mobiledata['passengerid']);
                        if (count($result) > 0) {
                            $passenger_image = isset($result['profile_image'])?$result['profile_image']:'';
                            /*************************** Passenger Image ************************************/
                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                $profile_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            $civilid_front = isset($result['civilid_front'])?$result['civilid_front']:'';
                            $civilid_back  = isset($result['civilid_back'])?$result['civilid_back']:'';
                            
                            $civilid_front_thumb = isset($result['civilid_front_thumb'])?$result['civilid_front_thumb']:'';
                            $civilid_back_thumb  = isset($result['civilid_back_thumb'])?$result['civilid_back_thumb']:'';
                            
                            if ((!empty($civilid_front)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_front)) {
                                $civilid_front = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_front;
                            } else {
                                $civilid_front = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_back)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_back)) {
                                $civilid_back = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_back;
                            } else {
                                $civilid_back = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_front_thumb)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_front_thumb)) {
                                $civilid_front_thumb = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_front_thumb;
                            } else {
                                $civilid_front_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_back_thumb)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_back_thumb)) {
                                $civilid_back_thumb = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_back_thumb;
                            } else {
                                $civilid_back_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            $result['profile_image'] = $profile_image;
                            
                            $result['civilid_front'] = $civilid_front;
                            $result['civilid_back'] = $civilid_back;
                            $result['civilid_front_thumb'] = $civilid_front_thumb;
                            $result['civilid_back_thumb'] = $civilid_back_thumb;
                            
                            $message                    = [
                                "message" => __('success'),
                                "detail" => $result,
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('invalid_passengerid'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;                
                case 'edit_passenger_profile':
                    //$mobiledata = $_REQUEST;
                    
                    $addModel = Model::factory('add');
                    /*if(isset($_FILES['profile_image']['name']) && !empty($_FILES['profile_image']['name'])) {
                        $mobiledata['profile_image'] = $_FILES['profile_image']['name'];
                    }*/
                    $p_personal_array = $mobiledata;
                    if (count($p_personal_array) > 0) {
                        if ($p_personal_array['email'] != null) {
                            $p_email      = urldecode($p_personal_array['email']);
                            $p_firstname  = urldecode($p_personal_array['firstname']);
                            $p_lastname   = urldecode($p_personal_array['lastname']);
                            $p_phone      = $p_personal_array['phone'];
                            $passenger_id = $p_personal_array['passenger_id'];
                            $valid = $addModel->parent_id_isValid($passenger_id);
                            
                            
                            if($valid != true) {
                                $message = [
                                    "message" => __('invalid_passengerid'),
                                    "status" => 3
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            $validator    = $this->edit_passengers_profile_validation($p_personal_array);
                            if ($validator->check()) {
                                $email_exist = $api->edit_check_email_passengers($p_email, $passenger_id, $default_companyid);
                                
                                $phone_exist = $api->edit_check_phone_passengers($p_phone, $passenger_id, $default_companyid);
                                if ($email_exist != 1) {
                                    $message = [
                                        "message" => __('email_exists'),
                                        "status" => -1
                                    ];                                    
                                } else /* if ($phone_exist != 1) {
                                    $message = array(
                                        "message" => __('phone_exists'),
                                        "status" => 2
                                    );                                    
                                } else */ {
                                    if ($p_personal_array['profile_image'] != NULL) {
                                        /* Profile Update */
                                        $imgdata   = base64_decode($p_personal_array['profile_image']);
                                        $f         = finfo_open();
                                        $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                        $mime_type = explode('/', $mime_type);
                                        $mime_type = $mime_type[1];
                                        $img       = imagecreatefromstring($imgdata);
                                        
                                        if ($img != false) {
                                            //$result = $api->driver_profile($d_personal_array['driver_id'], $default_companyid);
                                            if (count($result) > 0) {
                                                
                                                $profile_picture  = text::random($type = 'alnum', $length = 12);
                                                $thumb_image      = 'thumb_' . $profile_picture;
                                                $main_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . $profile_picture;
                                                $thumb_image_path = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $profile_picture;
                                                if (file_exists($main_image_path) && ($profile_picture != "")) {
                                                    unlink($main_image_path);
                                                }
                                                if (file_exists($thumb_image_path) && ($thumb_image != "")) {
                                                    unlink($thumb_image_path);
                                                }
                                            } //unlink($filename);
                                            $image_name       = uniqid() . '.' . $mime_type;
                                            $thumb_image_name = 'thumb_' . $image_name;
                                            $image_url        = DOCROOT . PASS_IMG_IMGPATH . '/' . $image_name;                 
                                            $image_path       = DOCROOT . PASS_IMG_IMGPATH . $image_name;
                                            imagejpeg($img, $image_url);
                                            imagedestroy($img);
                                            chmod($image_path, 0777);
                                            $d_image = Image::factory($image_path);
                                            $path11  = DOCROOT . PASS_IMG_IMGPATH;
                                            Commonfunction::imageoriginalsize($d_image, $path11, $image_name, 90);
                                            $path12 = $thumb_image_name;
                                            Commonfunction::imageresize($d_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                                            //Commonfunction::imageoriginalsize($d_image,$path11,$thumb_image_name,90);
                                            $update_array["profile_picture"] = $image_name;
                                            $update_array = [
                                                "salutation" => urldecode($p_personal_array['salutation']),
                                                "name" => urldecode($p_personal_array['firstname']),
                                                "lastname" => urldecode($p_personal_array['lastname']),
                                                "email" => urldecode($p_email),                                                
                                                "phone" =>urldecode($p_phone),
                                                "profile_image" => $image_name,
                                                "profile_thumb_image" => $thumb_image_name
                                            ];
                                            
                                            $message = $api->edit_passenger_personaldata($update_array, $passenger_id, $default_companyid);
                                        } else {
                                            $message = [
                                                "message" => __('image_not_upload'),
                                                "status" => 4
                                            ];
                                        }
                                    } else {                                       
                                        $update_array = [
                                            "salutation" => urldecode($p_personal_array['salutation']),
                                            "name" => urldecode($p_personal_array['firstname']),
                                            "lastname" => urldecode($p_personal_array['lastname']),
                                            "email" => urldecode($p_email),                                            
                                            "phone" => urldecode($p_phone)
                                        ];                                        
                                        $message = $api->edit_passenger_personaldata($update_array, $passenger_id, $default_companyid);
                                    }
                                    /*****************************************/
                                    if ($message == 0) {
                                        $passenger_details = $api->passenger_profile($p_personal_array['passenger_id']);
                                        if ((!empty($passenger_details['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' .$passenger_details['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_details['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                        $message = [
                                            "message" => __('personal_updated'),
                                            "profile_image" => $profile_image,
                                            "status" => 1
                                        ];
                                    }
                                    if ($message == -1) {
                                        $message = [
                                            "message" => __('try_again'),
                                            "status" => -1
                                        ];
                                    }
                                }
                            } else {
                                $validation_error = $validator->errors('errors');
                                $message          = [
                                    "message" => __('validation_error'),
                                    "detail" => $validation_error,
                                    "status" => -3
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_email'),
                                "status" => -4
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('try_again'),
                            "status" => -5
                        ];
                    }
                    echo json_encode($message);
                    exit;
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=add_card_details&passenger_id=58&email=sakthivel.s.m@ndot.in&creditcard_no=4111111111111111&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&card_type=P&default=1
                case 'add_card_details':
                    $p_card_array    = $mobiledata;
                    $creditcard_no   = $p_card_array['creditcard_no'];
                    $creditcard_cvv  = $p_card_array['creditcard_cvv'];
                    $expdatemonth    = $p_card_array['expdatemonth'];
                    $expdateyear     = $p_card_array['expdateyear'];
                    $passenger_id    = $p_card_array['passenger_id'];
                    $default         = $p_card_array['default'];
                    $card_validation = $this->passenger_card_validation($p_card_array);
                    if ($card_validation->check()) {
                        /*$authorize_status = $api->isVAlidCreditCard($creditcard_no, "", true);
                        //print_r($authorize_status);
                        //exit;
                        if ($authorize_status == 0) {
                            $message = array(
                                "message" => __('invalid_card'),
                                "status" => 2
                            );
                            echo json_encode($message);
                            exit;
                        }*/
                        $card_exist = $api->check_card_exist($creditcard_no, $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id);
                        if ($card_exist > 0) {
                            $message = [
                                "message" => __('card_exist'),
                                "status" => 3
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        $result = $api->add_passenger_carddata($p_card_array);
                        //echo $result; 
                        if ($result == 1) {
                            $message = [
                                "message" => __('card_success'),
                                "status" => 1
                            ];
                        }else if($result == -1){
                                $message = ["message" => __('invalid_passengerid'),
                                "status" => -1
                                  ];
                        }
                        else {
                            $message = [
                                "message" => __('try_again'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $validation_error = $card_validation->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "detail" => $validation_error,
                            "status" => -3
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=edit_card_details&passenger_cardid=58&passenger_id=2&creditcard_no=3530111333300000&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&card_type=P&default=0
                case 'edit_card_details':
                    $p_card_array     = $mobiledata;
                    $passenger_cardid = $p_card_array['passenger_cardid'];
                    $passenger_id     = $p_card_array['passenger_id'];
                    if ($passenger_cardid != null) {
                        $creditcard_no   = $p_card_array['creditcard_no'];
                        $creditcard_cvv  = $p_card_array['creditcard_cvv'];
                        $expdatemonth    = $p_card_array['expdatemonth'];
                        $expdateyear     = $p_card_array['expdateyear'];
                        $default         = $p_card_array['default'];
                        $card_validation = $this->edit_passenger_card_validation($p_card_array);
                        if ($card_validation->check()) {
                            /*$authorize_status = $api->isVAlidCreditCard($creditcard_no, "", true);
                            if ($authorize_status == 0) {
                                $message = array(
                                    "message" => __('invalid_card'),
                                    "status" => 2
                                );
                                echo json_encode($message);
                                exit;
                            }*/
                           $card_exist = $api->edit_check_card_exist($passenger_cardid, $creditcard_no, $creditcard_cvv, $expdatemonth, $expdateyear, $passenger_id, $default);
                           if ($card_exist == 1) {
                                $message = [
                                    "message" => __('card_exist'),
                                    "status" => 3
                                ];                      
                            } else if ($card_exist == 2) {
                                $message = [
                                    "message" => __('one_card_exist'),
                                    "status" => 2
                                ];                      
                            } else {
                                $result = $api->edit_passenger_carddata($p_card_array);
                                if ($result == 1) {
                                    $message = [
                                        "message" => __('edit_card_success'),
                                        "status" => 1
                                    ];
                                }
                                else if($result == -1){
                                $message = ["message" => __('invalid_passengerid'),
                                "status" => -1
                                  ];
                                }
                                else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => -1
                                    ];
                                }
                            }
                        } else {
                            $validation_error = $card_validation->errors('errors');
                            $message          = [
                                "message" => __('validation_error'),
                                "detail" => $validation_error,
                                "status" => -3
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('try_again'),
                            "status" => 1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /*URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=chg_password_passenger&id=1&old_password=61be360905cecd0e96e31c9d575283b1&new_password=e10adc3949ba59abbe56e057f20f883e&confirm_password=e10adc3949ba59abbe56e057f20f883e&org_new_password=123456
                 */
                case 'chg_password_passenger':
                    $p_chg_pass_array = $mobiledata;
                    if (!empty($p_chg_pass_array)) {
                        if ($p_chg_pass_array['id'] != null) {
                            $validator = $this->chg_password_passenger_validation($p_chg_pass_array);
                            if ($validator->check()) {
                                //array_shift($p_chg_pass_array);
                                //array_shift($p_chg_pass_array);
                                $message = $api->chg_password_passenger($p_chg_pass_array, PASSENGERS, $default_companyid, 'P');
                                //{-1 : confirm password must be the same as new password , -2 : Old Password is In Correct: -3: Invalid User,1:Password Changed Successfully   }
                                switch ($message) {
                                    case -1:
                                        $message = [
                                            "message" => __('confirm_new_same'),
                                            "status" => -1
                                        ];
                                        break;
                                    case -2:
                                        $message = [
                                            "message" => __('old_pass_incorrect'),
                                            "status" => -2
                                        ];
                                        break;
                                    case -3:
                                        $message = [
                                            "message" => __('invalid_user'),
                                            "status" => -3
                                        ];
                                        break;
                                    case 1:
                                        $message = [
                                            "message" => __('password_changed'),
                                            "status" => 1
                                        ];
                                        break;
                                    case -4:
                                        $message = [
                                            "message" => __('old_new_pass_same'),
                                            "status" => -4
                                        ];
                                        break;
                                }
                            } else {
                                $validation_error = $validator->errors('errors');
                                $message          = [
                                    "message" => $validation_error,
                                    "status" => -3
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => -6
                        ];
                        //  echo json_encode($message); 
                    }
                    echo json_encode($message);
                    break;
                //URL : api/?type=mark_favourite&pass_log_id=1
                //http://192.168.1.49:1003/mobileapi108/index/dGF4aV9hbGw=/?type=add_favourite&passenger_id=78&p_favourite_place=Vadavalli,coimbatore&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=test&p_fav_locationtype=home
                case 'add_favourite':
                    $add_fav_array = $mobiledata;
                    
                    $validator     = $this->favourite_validation($add_fav_array);
                    if ($validator->check()) {
                        $passenger_id       = $add_fav_array['passenger_id'];
                        $fav_comments       = $add_fav_array['fav_comments'];
                        
                        $p_favourite_place  = (isset($add_fav_array['p_favourite_place'])) ? urldecode($add_fav_array['p_favourite_place']) : '';
                        $p_fav_latitude     = (isset($add_fav_array['p_fav_latitude'])) ? $add_fav_array['p_fav_latitude'] : '';
                        $p_fav_longtitute   = (isset($add_fav_array['p_fav_longtitute'])) ? $add_fav_array['p_fav_longtitute'] : '';
                        
                        $d_favourite_place  = (isset($add_fav_array['d_favourite_place'])) ? urldecode($add_fav_array['d_favourite_place']) : '';
                        $d_fav_latitude     = (isset($add_fav_array['d_fav_latitude'])) ? $add_fav_array['d_fav_latitude'] : '';
                        $d_fav_longtitute   = (isset($add_fav_array['d_fav_longtitute'])) ? $add_fav_array['d_fav_longtitute'] : '';
                        
                        $p_fav_locationtype = urldecode(trim($add_fav_array['p_fav_locationtype']));
                        $fav_icon = urldecode($add_fav_array['fav_icon']);
                        
                        $notes              = isset($add_fav_array['notes']) ? $add_fav_array['notes'] : "";
                        $check_fav_place    = $api->check_fav_place($passenger_id, $p_favourite_place, $d_favourite_place, $p_fav_locationtype);
                        if ($check_fav_place == 0) {
                            //Set the Favourite Trips
                            $status = $api->save_favourite($passenger_id, $p_favourite_place, $p_fav_latitude, $p_fav_longtitute, $d_favourite_place, $d_fav_latitude, $d_fav_longtitute, $fav_comments, $notes, $p_fav_locationtype,$fav_icon);
                            if ($status) {
                                $message = [
                                    "message" => __('mark_fav'),
                                    "detail" => "",
                                    "status" => 1
                                ];
                            } else {
                                $p_favourite_id = $check_fav_place['0']['p_favourite_id'];
                                $message        = [
                                    "message" => __('try_again'),
                                    "status" => 0
                                ];
                            }
                        } else if ($check_fav_place == -1) {
                            $message = [
                                "message" => __('fav_already_exist_type'),
                                "status" => 3
                            ];
                        } else {
                            $message = [
                                "message" => __('fav_already_exist'),
                                "status" => 2
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "status" => -3
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=get_favourite_list&passenger_id=2
                case 'get_favourite_list':
                    if (count($mobiledata) > 0) {
                        //$passenger_id   = $this->mysql->escape($mobiledata['passenger_id']);
                        $passenger_id   = $mobiledata['passenger_id'];
                        $favourite_list = $api->get_favourite_list($passenger_id);
                        if (count($favourite_list) > 0) {
                            $message = [
                                "message" => __('success'),
                                "detail" => $favourite_list,
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('no_favourite_trips'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('no_favourite_trips'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                break;
                 case 'get_favourite_list_from_driver':
                    if (count($mobiledata) > 0) {
                        //$passenger_id   = $this->mysql->escape($mobiledata['passenger_id']);
                        $passenger_id   = $mobiledata['passenger_id'];
                        $favourite_list = $api->get_favourite_list($passenger_id);
                        //print_r($favourite_list);
                        $new_fav = [];
                        foreach($favourite_list as $fav){
                            if($fav['p_fav_latitude'] != '' && $fav['d_fav_latitude'] != ''){
                                
                            } else {
                                $new_fav[] = $fav;
                                
                                }
                            
                        }
                        //print_r($new_fav);
                       // exit;
                        if (count($favourite_list) > 0) {
                            $message = [
                                "message" => __('success'),
                                "detail" => $new_fav,
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('no_favourite_trips'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('no_favourite_trips'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                break;
                case 'update_drop_location':
                $trip_id = (isset($mobiledata['trip_id'])) ? $mobiledata['trip_id'] : '';
                $latitude = (isset($mobiledata['latitude'])) ? $mobiledata['latitude'] : '';
                $longitude = (isset($mobiledata['longitude'])) ? $mobiledata['longitude'] : '';
                $drop_location = (isset($mobiledata['drop_location'])) ? $mobiledata['drop_location'] : '';
                $validator = $this->validate_update_drop_location($mobiledata);
                    if ($validator->check()) {
                        $update_payment_type = $api->update_drop_location($trip_id,$latitude,$longitude,$drop_location);
                        if($update_payment_type){
                            $message      = [
                                        "message" => __('success'),
                                        "status" => 1
                                    ];
                            echo json_encode($message);
                            exit;
                        }       
                    } else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                }
                break;
                
                
                
                //URL       
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=get_favourite_details&p_favourite_id=2
                case 'get_favourite_details':
                    $p_fav_array = $mobiledata;
                    if ($p_fav_array['p_favourite_id'] != null) {
                        $favourite_details = $api->get_favourite_details($p_fav_array['p_favourite_id']);
                        $message           = [
                            "message" => $favourite_details,
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" => __('no_favourite'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /*Favourite Delete
                 * URL :
                 * 
                 * */
                case 'delete_favourite':
                    $p_fav_array = $mobiledata;
                    if ($p_fav_array['p_favourite_id'] != null && $p_fav_array['passenger_id'] != null) {
                        $favourite_details = $api->delete_favourite($p_fav_array['p_favourite_id'], $p_fav_array['passenger_id']);
                        if ($favourite_details) {
                            $message = [
                                "message" => __('favourite_deleted'),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('no_favourite'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('no_favourite'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //http://192.168.1.49:1003/mobileapi108/index/dGF4aV9hbGw=/?type=edit_favourite&p_favourite_id=53&passenger_id=78&p_favourite_place=Vadavalli,coimbatore-41&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=test=78&p_favourite_place=Vadavalli,Gandhipuram,west&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=&p_fav_locationtype=office
                case 'edit_favourite':
                    $edit_fav_array = $mobiledata;
                    //echo $key;exit;
                    $validator      = $this->edit_favourite_validation($edit_fav_array);
                    if ($validator->check()) {                      
                        $favourite_id       = $edit_fav_array['p_favourite_id'];
                        $fav_comments       = $edit_fav_array['fav_comments'];
                        $passenger_id       = $edit_fav_array['passenger_id'];
                        
                        $p_favourite_place  = (isset($edit_fav_array['p_favourite_place'])) ? urldecode($edit_fav_array['p_favourite_place']) : '';
                        $p_fav_latitude     = (isset($edit_fav_array['p_fav_latitude'])) ? $edit_fav_array['p_fav_latitude'] : '';
                        $p_fav_longtitute   = (isset($edit_fav_array['p_fav_longtitute'])) ? $edit_fav_array['p_fav_longtitute'] : '';
                        
                        $d_favourite_place  = (isset($edit_fav_array['d_favourite_place'])) ? urldecode($edit_fav_array['d_favourite_place']) : '';
                        $d_fav_latitude     = (isset($edit_fav_array['d_fav_latitude'])) ? $edit_fav_array['d_fav_latitude'] : '';
                        $d_fav_longtitute   = (isset($edit_fav_array['d_fav_longtitute'])) ? $edit_fav_array['d_fav_longtitute'] : '';
                        
                        $p_fav_locationtype = $edit_fav_array['p_fav_locationtype'];
                        $notes              = isset($edit_fav_array['notes']) ? $edit_fav_array['notes'] : "";
                        $fav_icon              = isset($edit_fav_array['fav_icon']) ? $edit_fav_array['fav_icon'] : "others";
                        //Set the Favourite Trips
                        $check_fav_place    = $api->check_fav_editplace($passenger_id, $p_favourite_place, $d_favourite_place, $favourite_id, $p_fav_locationtype);
                        //print_r($check_fav_place);exit;
                        if ($check_fav_place == 0) {
                            $check_fav_place_exist = $api->check_fav_editplacecheck($passenger_id, $p_favourite_place, $d_favourite_place, $favourite_id, $p_fav_locationtype);
                            if ($check_fav_place_exist == 0) {
                                $status = $api->edit_favourite($favourite_id, $p_favourite_place, $p_fav_latitude, $p_fav_longtitute, $d_favourite_place, $d_fav_latitude, $d_fav_longtitute, $fav_comments, $notes, $p_fav_locationtype,$fav_icon);
                                if ($status == 1) {
                                    $message = [
                                        "message" => __('edit_mark_fav'),
                                        "detail" => "",
                                        "status" => 1
                                    ];
                                } else {
                                    $message = [
                                        "message" => __('no_chage_made'),
                                        "status" => 0
                                    ];
                                }
                            } else {
                                $message = [
                                    "message" => __('fav_already_exist'),
                                    "status" => 2
                                ];
                            }
                        } else if ($check_fav_place == -1) {
                            $message = [
                                "message" => __('no_data'),
                                "status" => -3
                            ];
                        } else {
                            $message = [
                                "message" => __('fav_already_exist_type'),
                                "status" => 3
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            //"message" => $edit_fav_array,
                            "status" => -3
                        ];
                    }
                    echo json_encode($message);
                break;
                case 'check_passenger_trip':
                    $passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
                    if (!empty($passenger_id)) {
                        $passengerCompany = $api->get_passenger_company_id($passenger_id);
                        $company_id       = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
                        $passengerInTrip  = $api->check_passenger_in_trip($passenger_id, $company_id);
                        if ($passengerInTrip > 0) {
                            $message = [
                                "message" => __('passenger_in_journey'),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
                    break;
                   case 'savebooking': // As Per Mongo DB Conversion
            
                    /*$message = array(
                            "message" => "Oops!! We are updating our Server. We will be back in few minutes",
                            "status" => 3
                        );
                        echo json_encode($message);
                        exit;*/


                    $search_array  = $mobiledata;
                    if(!isset($search_array['flag'])) {
							$message = [
								"message" => "Oops!! We are updating our Server. We will be back in few hours. Please contact us at +96566307956",
								"status" => 3
							];
							echo json_encode($message);
							exit;
					}
                    $s_check = [
                        '_id' => (int)$search_array['passenger_id'],
                        'user_status' => 'A'
                        ];
                    $p_st = $this->commonmodel->select_all(PASSENGERS,$s_check,["_id"]);
                    if(empty($p_st))
                    {
                        $message = [
                            "message" => __('account_blocked'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $validator     = $this->search_validation($search_array);
                    $passenger_id  = $search_array['passenger_id'];
                   
                    $promo_code    = isset($search_array['promo_code']) ? $search_array['promo_code'] : '';
                    $referral_code = isset($search_array['referral_code']) ? $search_array['referral_code'] : '';
                    if ($validator->check()) {
                          if ($promo_code != "") {
                            $passenger_info =  $api->get_passenger_details_by_id($passenger_id);
                            $passenger_number = $passenger_info[0]['phone'];
                            $check_promo = $api->checkpromocode($promo_code, $passenger_number, $default_companyid,$passenger_id);
                            //echo $check_promo;
                            //exit;
                            if ($check_promo == 0) {
                                $msg = [
                                    "message" => __('invalid_promocode'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 3) {
                                $msg = [
                                    "message" => __('promo_code_startdate'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 4) {
                                $msg = [
                                    "message" => __('promo_code_expired'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 2) {
                                $msg = [
                                    "message" => __('promo_code_limit_exceed'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else {
                                $formvalues['promo_code'] = $promo_code;
                            }
                        }

                        $passenger_wallet = $api->get_passenger_data($passenger_id,'wallet_amount');
                        $vip_user = $api->get_passenger_data($passenger_id,'vip_user');

                        if($passenger_wallet < WALLET_NEGATIVE_LIMIT   && $vip_user != 1)
                        {
                             $msg = [
                                    "message" => __('wallet_limit_exceeded'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                        }

                        if($vip_user == 1  && $passenger_wallet <  WALLET_ADVANCE_LIMIT)
                        {
                             $msg = [
                                    "message" => __('wallet_limit_exceeded'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                        }

                        if ($search_array['latitude'] != '0' && $search_array['longitude'] != '0') {
                            $add_model        = Model::factory('add');
                            $find_model       = Model::factory(FIND);
                            $latitude         = $search_array['latitude'];
                            $longitude        = $search_array['longitude'];
                            $miles            = ""; //$search_array['no_of_miles'];
                            $no_passengers    = ""; //$search_array['no_of_passengers'];
                            $pickup_time      = $search_array['pickup_time'];
                            $pickupplace      = urldecode($search_array['pickupplace']);
                           /* $dropplace        = urldecode($search_array['dropplace']);
                            $drop_latitude    = $search_array['drop_latitude'];
                            $drop_longitude   = $search_array['drop_longitude'];*/
                            //$taxi_fare_km = $search_array['taxi_fare_km'];
                            $taxi_fare_km     = '';
                            $motor_company    = '1'; //$search_array['motor_company'];
                            $motor_model      = $search_array['motor_model'];
                            $maximum_luggage  = ""; //$search_array['maximum_luggage']; 
                            $cityname         = $search_array['cityname'];
                            $sub_logid        = $search_array['sub_logid'];
                            $now_after        = $search_array['now_after'];
                            $passenger_id     = $search_array['passenger_id'];
                            $notes            = isset($search_array['notes']) ? urldecode($search_array['notes']) : '';
                            $unit             = UNIT; // 0 - KM, 1 - Miles  
                            $service_type     = "";
                            //print_r($_REQUEST);
                            $city_id          = $api->get_city_id($cityname);
                             $passengerCompany = (!empty($passenger_id)) ? $api->get_passenger_company_id($passenger_id) : 0;
                            $company_id       = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;//exit;
                            $passengerInTrip  = $api->check_passenger_in_trip($passenger_id, $company_id);
                            if ($passengerInTrip > 0) {
                                $msg = [
                                    "message" => __('passenger_in_journey'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            }
                            $params = [];
                            $params['latitude'] = $latitude;
                            $params['longitude'] = $longitude;
                            $params['miles'] = $miles;
                            $params['passenger_id'] = $passenger_id;
                            $params['taxi_fare_km'] = $taxi_fare_km;
                            $params['motor_company'] = $motor_company;
                            $params['motor_model'] = $motor_model;
                            $params['maximum_luggage'] = $maximum_luggage;
                            $params['cityname'] = $cityname;
                            $params['sub_logid'] = $sub_logid;
                            $params['company_id'] = $company_id;
                            $params['unit'] = $unit;
                            $params['service_type'] = $service_type;
                            $driver_details     = $find_model->search_driver_mobileapp($params);
                            $filename = DOCROOT.PUBLIC_UPLOADS_FOLDER.'/savebok.json';
                            /*$fp = fopen($filename,'w+');
                            fwrite($fp, json_encode($driver_details));
                            fclose($fp);*/
                            //print_r($driver_details);//exit;
                            $nearest_driver     = '';
                            $a                  = 1;
                            $temp               = '10000';
                            $prev_min_distance  = '10000~0';
                            $taxi_id            = '';
                            $temp_driver        = 0;
                            $nearest_key        = 0;
                            $prev_key           = 0;
                            $driver_list        = "";
                            $available_drivers  = "";
                            $total_count        = count($driver_details);
                            //print_r($total_count);
                            //exit;
                            //echo COMPANY_CONTACT_PHONE_NUMBER;                    
                            $company_contact_no = '';
                            if (COMPANY_CID != 0) {
                                $company_contact_no = COMPANY_CONTACT_PHONE_NUMBER;
                            }
                            $no_vehicle_msg    = __('no_vehicle_msg') . $company_contact_no;
                            $notification_time = $this->notification_time;
                            //print_r($driver_details);     
                            //exit;
                            if ($notification_time != 0) {
                                $timeoutseconds = $notification_time;
                            } else {
                                $timeoutseconds = 15;
                            }
                            //Form Values//
                            $formvalues = Arr::extract($mobiledata, [
                                'pickupplace',
                                'dropplace',
                                'pickup_time',
                                'driver_id',
                                'passenger_id',
                                'roundtrip',
                                'passenger_phone',
                                'cityname',
                                'distance_away',
                                'sub_logid',
                                'drop_latitude',
                                'drop_longitude',
                                'promo_code',
                                'now_after',
                                'motor_model',
                                'all_dates', // recurring 
                                'no_passengers',//airport
                                'max_luggage',//airport
                                'airport_pickup',// 'airport_pickup' yes = 1, no =0,
                                'airport_flight_number',//  'airport
                                'airport_flight_time',//    'airport same time set as in pickup_time field
                                'airport_notes',//  'airport
                                'payment_type',//   'payment_type
                                'bookedby',//   
                                
                                
                            ]);
							$formvalues['os_ver']   = isset($search_array['os_ver'])?$search_array['os_ver']:'';
							// New Field //
							$formvalues['approx_distance']   = isset($search_array['approx_distance'])?$search_array['approx_distance']:'';
							$formvalues['approx_duration']   = isset($search_array['approx_duration'])?$search_array['approx_duration']:'';
							// New Field //
                            $formvalues['app_ver']  = isset($search_array['app_ver'])?$search_array['app_ver']:'';
                            $formvalues['mod_ver']  = isset($search_array['mod_ver'])?$search_array['mod_ver']:'';
                            if ($total_count > 0) {
                             $driver_id   = isset($driver_details[0]['_id']['driver_id']) ? $driver_details[0]['_id']['driver_id'] : "";
                            $taxi_id     = isset($driver_details[0]['_id']['taxi_id']) ? $driver_details[0]['_id']['taxi_id'] : "";
                              // exit;
                                //$company_tax = isset($driver_details[0]['company_tax'])?$driver_details[0]['company_tax']:"";
                                $totalrating = 0;
                                foreach ($driver_details as $key => $value1) {
                                     foreach ($value1 as $k => $value) {
                                        $updatetime_difference = (isset($value['updatetime_difference'])?$value['updatetime_difference']:'');
                                        $updatetime_difference = $updatetime_difference /1000;
                                    //Exclude the drivers who has not logged in and not update the status last specified seconds
                                    if ($updatetime_difference <= LOCATIONUPDATESECONDS) {
                                        $driver_list .= (isset($value['driver_id'])?$value['driver_id']:'') . ',';
                                        $available_drivers = substr_replace($driver_list, "", -1);
                                    }
                                  }
                                }
                                //print_r($driver_details);
                                //print_r($available_drivers);
                                //exit;
                              
                                /*********************************************Save booking ***************************************/
                                $formvalues['taxi_id']          = $taxi_id;
                                $formvalues['motor_model']          = $search_array['motor_model'];
                                $formvalues['pickup_latitude']  = $search_array['latitude'];
                                $formvalues['pickup_longitude'] = $search_array['longitude'];
                                $formvalues['driver_id']        = $driver_id;
                                $formvalues['notes']            = $notes;
                                $formvalues['airport_type']     = isset($search_array['airport_type'])?$search_array['airport_type']:0;
                                /** Recurrent Trip **/
                                if(isset($search_array['all_dates']) && $search_array['all_dates'] != ''){
                                $specific_dates = explode(',', $search_array['all_dates']);
                                sort($specific_dates);
                                $formvalues['specific_dates']    = $specific_dates;
                                }
                                /** Recurrent Trip **/
                                //print_r($formvalues);     
                                $result                         = $api->savebooking($formvalues, $company_id);
                                //print_r($result);exit;    
                                //to get nearest driver
                                $avail_nearest_driver           = explode(',', $available_drivers);
                                //print_r($avail_nearest_driver);exit;
                                if (count($avail_nearest_driver) > 0) {
                                    $nearest_driver = $avail_nearest_driver[0];
                                }
                                $totalNoofDrivers   = (count($avail_nearest_driver) < 5) ? count($avail_nearest_driver) : 5;
                                $total_request_time = ($totalNoofDrivers * $notification_time) + 20;
                                //function to check whether the passenger have wallet amount by this we can give credit card status
                                //$total_cancelfare   = $api->get_passenger_cancel_faredetail($result);
                                //$passenger_wallet   = $api->get_passenger_wallet_amount($passenger_id);
                                $credit_card_sts    = SKIP_CREDIT_CARD;
                                $wall_amount = (isset($passenger_wallet['wallet_amount'])?$passenger_wallet['wallet_amount']:'');
                               /* if (count($passenger_wallet) > 0 && $wall_amount >= $total_cancelfare) {
                                    $credit_card_sts = 0;
                                }*/
                                if (($result > 0) && ($formvalues['now_after'] == 0)) {
									
                                    //echo "test";exit;
                                    //$driver_details['city_id'] = $city_id;
                                    /***** Insert the druiver details to driver request table ************/
                                    /*if (!empty($nearest_driver)) {
                                        if (count($avail_nearest_driver) > 0) {
                                            $available_drivers_Arr = array();
                                            foreach ($avail_nearest_driver as $key => $driveridVal) {
                                                $driver_has_request = $api->check_driver_has_trip_request($driveridVal, $company_all_currenttimestamp);
                                                if ($driver_has_request == 0) {
                                                    $available_drivers_Arr[] = $driveridVal;
                                                }
                                            }
                                            $available_drivers = implode(",", $available_drivers_Arr);
                                            $nearest_driver    = (count($available_drivers_Arr) > 0) ? $available_drivers_Arr[0] : '';
                                        }
                                    }*/
                                   
                                    //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                    $company_det = $api->get_company_id($nearest_driver);
                                    if (count($company_det) > 0) {
                                        $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp(1);
                                    }
                                   
                                    $id = $api->get_insert_id(MDB_REQUEST_HISTORY);
                                    $insert_array = [
                                        "_id" => (int)$id,
                                        "trip_id" => (int)$result,
                                        "available_drivers" => $available_drivers,
                                        "total_drivers" => $available_drivers,
                                        "selected_driver" => (int)$nearest_driver,
                                        "status" => 0,
                                        "rejected_timeout_drivers" => null,
                                        "createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                                    ];
                                    //Inserting to Transaction Table 
                                    $transaction  = $this->commonmodel->insert(MDB_REQUEST_HISTORY, $insert_array);
                                    $detail       = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $total_request_time,
                                        "credit_card_status" => $credit_card_sts,
                                        "model_id" => $motor_model
                                    ];
                                    $msg          = [
                                        "message" => __('api_request_confirmed_passenger'),
                                        "status" => 1,
                                        "detail" => $detail
                                    ];
                                    
                                
                                    
                                    
                                    
                                    echo json_encode($msg);
                                    exit;
                                } else if (($result > 0) && ($formvalues['now_after'] == 1)) {
                                    if (SMS == 1) 
                                    {
                                $message_details = $this->commonmodel->sms_message_by_title('book_later');
                                $to              = $api->get_passenger_phone_by_id($passenger_id);
                                $message = (isset($message_details['sms_description']) ?$message_details['sms_description'] :"");
                    $message         = str_replace("##TRIP_ID##", $result, $message);
                                        $message         = str_replace("##PICKUP_DATE_TIME##", $pickup_time, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                $api->sendSMS($to, $message);   
                                    }
                                 
                                     $detail = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $total_request_time,
                                        "credit_card_status" => $credit_card_sts,
                                        "passenger_pickup_time"=> date("Y-m-d h:i:s A", strtotime($pickup_time))
                                    ];
                                    $msg    = [
                                        "message" => __('api_request_disapatcher'),
                                        "status" => 1,
                                        "detail" => $detail
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                } else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => 2
                                    ];
                                     echo json_encode($message);
                                     exit;
                                }
                                if ($result > 0) {
                                    /* SEND PUSH TO IF PASS HAVE PARENT */
                                        $get_passenger_log_details = $api->get_passenger_log_detail($result);
                                        /** CHECK PASSNEGER'S PARENT **/
                                        $passeger_name = (isset($get_passenger_log_details[0]['passenger_name']) ? $get_passenger_log_details[0]['passenger_name'] :0);
                                        $passenger_parent_id        = (isset($get_passenger_log_details[0]['passenger_parent']) ?$get_passenger_log_details[0]['passenger_parent'] :0);
                                         $passenger_trip_alert        = (isset($get_passenger_log_details[0]['passenger_trip_alert']) ?$get_passenger_log_details[0]['passenger_trip_alert'] :0);
                                        /** CHECK PASSNEGER'S PARENT **/


                                        if($passenger_trip_alert == 1){ 
                                            /*** Child Details ***/
                                            $result = $api->passenger_profile($passenger_id);
                                            if (count($result) > 0) {
                                            $passenger_image = $result['profile_image'];
                                            $passenger_name = $result['name'];
                                            $passenger_phone = $result['phone'];
                                            /*************************** Passenger Image ************************************/
                                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                                $passenger_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                            } else {
                                                $passenger_image = URL_BASE . "public/images/no_image109.png";
                                            }
                                            }   
                                            /*** Child Details ***/ 
                                                
                                            $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                            $parent_device_token = $parentInfo[0]['device_token'];
                                            $parent_device_type = $parentInfo[0]['device_type'];
                                            $parent_pushmessage           = [
                                            "message" => str_replace("%s",$passeger_name,__('p_passenger_on_book')),
                                            "detail" => ['name'=>$passenger_name,'image'=>$passenger_image,'phone'=>$passenger_phone],
                                            "status" => 10
                                        ];
                                            $title =  __('p_passenger_on_book');
                                            $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                        }
                                    /* SEND PUSH TO IF PASS HAVE PARENT */
                                }
                            } else {
                                if ($formvalues['now_after'] == 1|| $formvalues['now_after'] == 0) {
                                   if($formvalues['now_after'] == 0){
                                    $passengerInBookNow  = $api->check_passenger_in_book_now($passenger_id);
                                    if(!empty($passengerInBookNow)){
                                        $passengerpickup = isset($passengerInBookNow['pickup_time'])?$passengerInBookNow['pickup_time']:'';
                                        $passengertripid = isset($passengerInBookNow['_id'])?$passengerInBookNow['_id']:'';
                                        $passengerconfirm = isset($passengerInBookNow['confirm_flag'])?$passengerInBookNow['confirm_flag']:0;
                                        
                                        $exists_flag = 1;
                                        $book_now_message = __('nxt_no_driver');
                                        
                                        if($passengerconfirm == 1){
                                            $exists_flag = 2;
                                            $book_now_message = __('api_request_disapatcher');
                                        }
                                        
                                        if($passengerpickup!=''){
                                            $passengerpickup = Commonfunction::convertphpdate('Y-m-d h:i:s A',$passengerpickup);

                                           // echo $passengerpickup;exit();
                                            $pickup_time     = $search_array['pickup_time'];

                                            $pick_seconds                  = strtotime($pickup_time) - strtotime($passengerpickup);
                                                                           
                                            $pick_minutes                  = floor(($pick_seconds) / 60);


                                            
                                            $detail                         = [
                                                "passenger_tripid" => $passengertripid,
                                                "passenger_pickup_time" => $passengerpickup,
                                                "exists_flag"=>$exists_flag
                                            ];
                                     
                                            if($pick_minutes <= BOOK_NOW_TIME){
                                                $msg = [
                                                    "message" => $book_now_message,
                                                    "status" => 7,
                                                    "detail" =>$detail
                                                ];
                                                echo json_encode($msg);
                                                break;
                                            }
                                            
                                        }    
                                    }
                                }
                                /** recurrent trip changes on  26-may-2016 **/
                                    $specific_dates ='';
                                    if($search_array['all_dates'] != ''){
                                        $specific_dates = explode(',', $search_array['all_dates']);
                                         sort($specific_dates);
                                    }
                                    
                                
                                /** recurrent trip changes on  26-may-2016 **/
                                    $formvalues['taxi_id']          = 0;
                                    $formvalues['pickup_latitude']  = $search_array['latitude'];
                                    $formvalues['pickup_longitude'] = $search_array['longitude'];
                                    $formvalues['driver_id']        = 0;
                                    $formvalues['notes']            = $notes;
                                    $formvalues['specific_dates']   = $specific_dates;
                                    $formvalues['airport_type']     = isset($search_array['airport_type'])?$search_array['airport_type']:0;
                                    $result                         = $api->savebooking($formvalues, $default_companyid);
                                    if ($result > 0) {
                                    /* SEND PUSH TO IF PASS HAVE PARENT */
                                        $get_passenger_log_details = $api->get_passenger_log_detail($result);
                                        /** CHECK PASSNEGER'S PARENT **/
                                        $passeger_name = (isset($get_passenger_log_details[0]['passenger_name']) ? $get_passenger_log_details[0]['passenger_name'] :0);
                                        $passenger_parent_id        = (isset($get_passenger_log_details[0]['passenger_parent']) ?$get_passenger_log_details[0]['passenger_parent'] :0);
                                         $passenger_trip_alert      = (isset($get_passenger_log_details[0]['passenger_trip_alert']) ?$get_passenger_log_details[0]['passenger_trip_alert'] :0);
                                        /** CHECK PASSNEGER'S PARENT **/


                                        if($passenger_trip_alert == 1){ 
                                            /*** Child Details ***/
                                            $presult = $api->passenger_profile($passenger_id);
                                            if (count($presult) > 0) {
                                            $passenger_image = $presult['profile_image'];
                                            $passenger_name = $presult['name'];
                                            $passenger_phone = $presult['phone'];
                                            /*************************** Passenger Image ************************************/
                                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                                $passenger_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                            } else {
                                                $passenger_image = URL_BASE . "public/images/no_image109.png";
                                            }
                                            }   
                                            /*** Child Details ***/ 
                                                
                                            $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                            $parent_device_token = $parentInfo[0]['device_token'];
                                            $parent_device_type = $parentInfo[0]['device_type'];
                                            $parent_pushmessage           = [
                                            "message" => str_replace("%s",$passeger_name,__('p_passenger_on_book')),
                                            "detail" => ['name'=>$passenger_name,'image'=>$passenger_image,'phone'=>$passenger_phone],
                                            "status" => 10
                                        ];
                                            $title =  __('p_passenger_on_book');
                                            $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                        }
                                    /* SEND PUSH TO IF PASS HAVE PARENT */
                                if (SMS == 1)
                                {
                                    if($formvalues['now_after'] == 1)
			                             $message_details = $this->commonmodel->sms_message_by_title('book_later');
                    				else
                    				$message_details = $this->commonmodel->sms_message_by_title('book_now_nodriver');

                                    $to              = $api->get_passenger_phone_by_id($passenger_id);
                                    $message         = (isset($message_details['sms_description']) ?$message_details['sms_description'] :"");
                                    $message         = ($formvalues['now_after'] == 1)?str_replace("##TRIP_ID##", $result, $message):$message;
                                    $message         = str_replace("##PICKUP_DATE_TIME##", $pickup_time, $message);
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);   
                                                                                }
                                }
                                   
                                    $detail                         = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $notification_time,
                                        "passenger_pickup_time"=> date("Y-m-d h:i:s A", strtotime($pickup_time)),
										"exists_flag"=> 0

                                      //  "credit_card_status" => $credit_card_sts
                                    ];
                                $apimessage = '';
                                if ($formvalues['now_after'] == 1) {
                                    //$apimessage = __('api_request_disapatcher');
                                    if(isset($search_array['airport_type']) && $search_array['airport_type'] == 1) {
										$apimessage = __('api_request_disapatcher');
									} else {
										$apimessage = __('api_response_no_driver');	
									}                                    
                                    $status = 1;
                                }else if($formvalues['now_after'] == 0){
                                    $apimessage = __('api_response_no_driver');
                                    $status = 7;
                                }
                                    $msg                            = [
                                        "message" => $apimessage,
                                        "status" => $status,
                                        "detail" => $detail
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                } else {
                                    $msg = [
                                        "message" => $no_vehicle_msg,
                                        "status" => 3
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                }
                            }
                        } else {
                            $message = [
                                "message" => __('lat_not_zero'),
                                "status" => -4
                            ];
                            echo json_encode($message);
                            exit;
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -5
                        ];
                        echo json_encode($message);
                        exit;
                    }
            unset(MangoDB::$instances['default']);
                    break; 
                    
                    
                    
                //URL : http://192.168.1.49:1015/mobileapi108/index/dGF4aV9hbGw/?type=savebooking&latitude=11.0213687&longitude=76.916638&pickupplace=&dropplace=&drop_latitude=&drop_longitude=&pickup_time=03:00:00&motor_model=1&cityname=Coimbatore&sub_logid=&distance_away=&passenger_id=1&request_type=0&now_after=1&notes=test
                //Append the Additional Fields while sending ...
                case 'savebooking_old':
                    $search_array  = $mobiledata;
                    $validator     = $this->search_validation($search_array);
                    $passenger_id  = $search_array['passenger_id'];
                    $promo_code    = isset($search_array['promo_code']) ? $search_array['promo_code'] : '';
                    $referral_code = isset($search_array['referral_code']) ? $search_array['referral_code'] : '';
                    //exit;
                    if ($validator->check()) {
                        if ($promo_code != "") {
                            $check_promo = $api->checkpromocode($promo_code, $passenger_id, $default_companyid);
                            //echo $check_promo;
                            //exit;
                            if ($check_promo == 0) {
                                $msg = [
                                    "message" => __('invalid_promocode'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 3) {
                                $msg = [
                                    "message" => __('promo_code_startdate'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 4) {
                                $msg = [
                                    "message" => __('promo_code_expired'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else if ($check_promo == 2) {
                                $msg = [
                                    "message" => __('promo_code_limit_exceed'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            } else {
                                $formvalues['promo_code'] = $promo_code;
                            }
                        }
                        if ($search_array['latitude'] != '0' && $search_array['longitude'] != '0') {
                            $add_model        = Model::factory('add');
                            $find_model       = Model::factory(FIND);
                            $latitude         = $search_array['latitude'];
                            $longitude        = $search_array['longitude'];
                            $miles            = ""; //$search_array['no_of_miles'];
                            $no_passengers    = ""; //$search_array['no_of_passengers'];
                            $pickup_time      = $search_array['pickup_time'];
                            $pickupplace      = urldecode($search_array['pickupplace']);
                            $dropplace        = urldecode($search_array['dropplace']);
                            $drop_latitude    = $search_array['drop_latitude'];
                            $drop_longitude   = $search_array['drop_longitude'];
                            //$taxi_fare_km = $search_array['taxi_fare_km'];
                            $taxi_fare_km     = '';
                            $motor_company    = '1'; //$search_array['motor_company'];
                            $motor_model      = $search_array['motor_model'];
                            $maximum_luggage  = ""; //$search_array['maximum_luggage']; 
                            $cityname         = $search_array['cityname'];
                            $sub_logid        = $search_array['sub_logid'];
                            $now_after        = $search_array['now_after'];
                            $passenger_id     = $search_array['passenger_id'];
                            $notes            = isset($search_array['notes']) ? $search_array['notes'] : '';
                            $unit             = UNIT; // 0 - KM, 1 - Miles  
                            $service_type     = "";
                            //print_r($_REQUEST);
                            $city_id          = $api->get_city_id($cityname);
                            $passengerCompany = (!empty($passenger_id)) ? $api->get_passenger_company_id($passenger_id) : 0;
                            $company_id       = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
                            $passengerInTrip  = $api->check_passenger_in_trip($passenger_id, $company_id);
                            if ($passengerInTrip > 0) {
                                $msg = [
                                    "message" => __('passenger_in_journey'),
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                break;
                            }
                            $driver_details     = $find_model->search_driver_mobileapp($latitude, $longitude, $miles, $passenger_id, $taxi_fare_km, $motor_company, $motor_model, $maximum_luggage, $cityname, $sub_logid, $company_id, $unit, $service_type);
                            //print_r($driver_details);exit;    
                            $nearest_driver     = '';
                            $a                  = 1;
                            $temp               = '10000';
                            $prev_min_distance  = '10000~0';
                            $taxi_id            = '';
                            $temp_driver        = 0;
                            $nearest_key        = 0;
                            $prev_key           = 0;
                            $driver_list        = "";
                            $available_drivers  = "";
                            $total_count        = count($driver_details);
                            //echo COMPANY_CONTACT_PHONE_NUMBER;                    
                            $company_contact_no = '';
                            if (COMPANY_CID != 0) {
                                $company_contact_no = COMPANY_CONTACT_PHONE_NUMBER;
                            }
                            $no_vehicle_msg    = __('no_vehicle_msg') . $company_contact_no;
                            $notification_time = $this->notification_time;
                            //print_r($driver_details);     
                            //exit;
                            if ($notification_time != 0) {
                                $timeoutseconds = $notification_time;
                            } else {
                                $timeoutseconds = 15;
                            }
                            //Form Values//
                            $formvalues = Arr::extract($mobiledata, [
                                'pickupplace',
                                'dropplace',
                                'pickup_time',
                                'driver_id',
                                'passenger_id',
                                'roundtrip',
                                'passenger_phone',
                                'cityname',
                                'distance_away',
                                'sub_logid',
                                'drop_latitude',
                                'drop_longitude',
                                'promo_code',
                                'now_after',
                                'motor_model'
                            ]);
                            if ($total_count > 0) {
                                $driver_id   = isset($driver_details[0]['driver_id']) ? $driver_details[0]['driver_id'] : "";
                                $taxi_id     = isset($driver_details[0]['taxi_id']) ? $driver_details[0]['taxi_id'] : "";
                                //$company_tax = isset($driver_details[0]['company_tax'])?$driver_details[0]['company_tax']:"";
                                $totalrating = 0;
                                foreach ($driver_details as $key => $value) {
                                    $updatetime_difference = $value['updatetime_difference'];
                                    //Exclude the drivers who has not logged in and not update the status last specified seconds
                                    if ($updatetime_difference <= LOCATIONUPDATESECONDS) {
                                        $driver_list .= $value['driver_id'] . ',';
                                        $available_drivers = substr_replace($driver_list, "", -1);
                                    }
                                    /*else
                                    {
                                    $shiftout_array  = array("shift_status" => 'OUT');
                                    //$transaction = $this->commonmodel->update(DRIVER,$shiftout_array,'driver_id',$value['driver_id']);
                                    }*/
                                }
                                /*********************************************Save booking ***************************************/
                                $formvalues['taxi_id']          = $taxi_id;
                                $formvalues['pickup_latitude']  = $search_array['latitude'];
                                $formvalues['pickup_longitude'] = $search_array['longitude'];
                                $formvalues['driver_id']        = $driver_id;
                                $formvalues['notes']            = $notes;
                                //print_r($formvalues);exit;            
                                $result                         = $api->savebooking($formvalues, $company_id);
                                //to get nearest driver
                                $avail_nearest_driver           = explode(',', $available_drivers);
                                //print_r($avail_nearest_driver);exit;
                                if (count($avail_nearest_driver) > 0) {
                                    $nearest_driver = $avail_nearest_driver[0];
                                }
                                $totalNoofDrivers   = (count($avail_nearest_driver) < 5) ? count($avail_nearest_driver) : 5;
                                $total_request_time = ($totalNoofDrivers * $notification_time) + 20;
                                //function to check whether the passenger have wallet amount by this we can give credit card status
                                $total_cancelfare   = $api->get_passenger_cancel_faredetail($result);
                                $passenger_wallet   = $api->get_passenger_wallet_amount($passenger_id);
                                $credit_card_sts    = SKIP_CREDIT_CARD;
                                if (count($passenger_wallet) > 0 && $passenger_wallet[0]['wallet_amount'] >= $total_cancelfare) {
                                    $credit_card_sts = 0;
                                }
                                if (($result > 0) && ($formvalues['now_after'] == 0)) {
                                    //$driver_details['city_id'] = $city_id;
                                    /***** Insert the druiver details to driver request table ************/
                                    if (!empty($nearest_driver)) {
                                        if (count($avail_nearest_driver) > 0) {
                                            $available_drivers_Arr = [];
                                            foreach ($avail_nearest_driver as $key => $driveridVal) {
                                                $driver_has_request = $api->check_driver_has_trip_request($driveridVal, $company_all_currenttimestamp);
                                                if ($driver_has_request == 0) {
                                                    $available_drivers_Arr[] = $driveridVal;
                                                }
                                            }
                                            $available_drivers = implode(",", $available_drivers_Arr);
                                            $nearest_driver    = (count($available_drivers_Arr) > 0) ? $available_drivers_Arr[0] : '';
                                        }
                                    }
                                    /*echo 'as'.$available_drivers;
                                    echo '<br>';
                                    echo $nearest_driver;
                                    exit;*/
                                    //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                    $company_det = $api->get_company_id($nearest_driver);
                                    if (count($company_det) > 0) {
                                        $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det[0]['company_id']);
                                    }
                                    $insert_array = [
                                        "trip_id" => $result,
                                        "available_drivers" => $available_drivers,
                                        "total_drivers" => $available_drivers,
                                        "selected_driver" => $nearest_driver,
                                        "status" => 0,
                                        "rejected_timeout_drivers" => "",
                                        "createdate" => $company_all_currenttimestamp
                                    ];
                                    //Inserting to Transaction Table 
                                    $transaction  = $this->commonmodel->insert(DRIVER_REQUEST_DETAILS, $insert_array);
                                    $detail       = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $total_request_time,
                                        "credit_card_status" => $credit_card_sts
                                    ];
                                    $msg          = [
                                        "message" => __('api_request_confirmed_passenger'),
                                        "status" => 1,
                                        "detail" => $detail
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                } else if (($result > 0) && ($formvalues['now_after'] == 1)) {
                                    //$driver_details['city_id'] = $city_id;
                                    /***** Insert the druiver details to driver request table ************/
                                    $detail = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $total_request_time,
                                        "credit_card_status" => $credit_card_sts
                                    ];
                                    $msg    = [
                                        "message" => __('api_request_disapatcher'),
                                        "status" => 1,
                                        "detail" => $detail
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                } else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => 2
                                    ];
                                }
                            } else {
                                if ($formvalues['now_after'] == 1) {
                                    $formvalues['taxi_id']          = 0;
                                    $formvalues['pickup_latitude']  = $search_array['latitude'];
                                    $formvalues['pickup_longitude'] = $search_array['longitude'];
                                    $formvalues['driver_id']        = 0;
                                    $formvalues['notes']            = $notes;
                                    $result                         = $api->savebooking($formvalues, $default_companyid);
                                    $detail                         = [
                                        "passenger_tripid" => $result,
                                        "notification_time" => $notification_time,
                                        "total_request_time" => $notification_time,
                                        "credit_card_status" => $credit_card_sts
                                    ];
                                    $msg                            = [
                                        "message" => __('api_request_disapatcher'),
                                        "status" => 1,
                                        "detail" => $detail
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                } else {
                                    $msg = [
                                        "message" => $no_vehicle_msg,
                                        "status" => 3
                                    ];
                                    echo json_encode($msg);
                                    exit;
                                }
                            }
                        } else {
                            $message = [
                                "message" => __('lat_not_zero'),
                                "status" => -4
                            ];
                            echo json_encode($message);
                            exit;
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -5
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    break;
                //http://192.168.1.88:1020/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0=/?type=nearestdriver_list&latitude=10.978942571323032&longitude=76.761474609375&motor_model=&passenger_id=
                case 'nearestdriver_list':
                    $search_array = $mobiledata;
                    $validator    = $this->nearestdriver_validation($search_array);
                    $current_datetime = $this->current_datetime;
                    if ($validator->check()) {
$intq = [
                            'passengers_id' => (int)$search_array['passenger_id'],
                            'travel_status' => ['$in' => [2,3,9]]
                            ];
                        $in_trip = (!empty($search_array['passenger_id']))?$this->commonmodel->select_all(PASSENGERS_LOG,$intq,['_id']):[];
                        $in_trip_res = !empty($in_trip)?count($in_trip):0;
                        if($in_trip_res > 0)
                        {
                            $message = [
                                "trip_id" => $in_trip[0]['_id'],
                                "current_time"=>$current_datetime,
                                "status" => 4
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        if ($search_array['latitude'] != '0' && $search_array['longitude'] != '0') {
                            
							$bk_later_time         = $this->commonmodel->select_all(MDB_SITEINFO,['_id'=>1],['book_later_time','max_fare_est']);
                            $max_est_mins          = (isset($bk_later_time[0]['max_fare_est']))?$bk_later_time[0]['max_fare_est']:0;
                            $bk_later_time         = (isset($bk_later_time[0]['book_later_time']))?$bk_later_time[0]['book_later_time']:0;
                            $passenger_id          = $search_array['passenger_id'];
                            $find_model            = Model::factory(FIND);
                            //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);                      
                            $latitude              = $search_array['latitude'];
                            $longitude             = $search_array['longitude'];
                            $miles                 = DEFAULTMILE; //$search_array['no_of_miles'];
                            $unit                  = UNIT; // 0 - KM, 1 - Miles
                            $taxi_model            = $search_array['motor_model'];
                            $service_type          = "";
                            $passengerCompany      = (!empty($passenger_id)) ? $api->get_passenger_company_id($passenger_id) : 0;
                            $company_id            = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
                            //$driver_details        = $find_model->nearestdrivers($latitude, $longitude, $taxi_model, $passenger_id, $miles, $company_id, $unit, $service_type);
                            $params = [];
                            $params['motor_company'] = $company_id;
                            $params['motor_model'] = $taxi_model;
                            $params['company_id'] = $company_id;
                            $params['latitude'] = $latitude;
                            $params['longitude'] = $longitude;
                            $params['taxi_fare_km'] = '';
                            $driver_details        = $find_model->search_driver_mobileapp($params);

                            //echo '<pre>'; 
                            //print_r($driver_details);
                            //exit;
                            
                            $get_modelfare_details = $api->get_modelfare_details($default_companyid, $taxi_model);
                            $nearest_driver        = '';
                            $a                     = 1;
                            $temp                  = '10000';
                            $prev_min_distance     = '10000~0~0~0';
                            $taxi_id               = '';
                            $temp_driver           = 0;
                            $nearest_key           = 0;
                            $prev_key              = 0;
                            $total_count           = count($driver_details);
                            //echo COMPANY_CONTACT_PHONE_NUMBER;                    
                            $company_contact_no    = '';
                            if (COMPANY_CID != 0) {
                                $company_contact_no = COMPANY_CONTACT_PHONE_NUMBER;
                            }
                            $no_vehicle_msg = __('no_vehicle_msg') . $company_contact_no;
                            //Get Fare details of the Taxi model_id Start
                            $fare_details   = __('no_fare_details_found');
                            $fare_details   = [];
                            if (!empty($get_modelfare_details)) {
                                $fare_details = $get_modelfare_details;
                                $fare_details['model_id'] = $get_modelfare_details['_id'];
                            }
                            //echo $fare_details; exit;
                            //Get Fare details of the Taxi model_id End
                            //$fare_details['metric'] = UNIT_NAME;
                            //print_r($driver_details);
                            if ($total_count > 0) {
                                $driver_id   = ""; //isset($driver_details[0]['driver_id'])?$driver_details[0]['driver_id']:"";
                                $totalrating = 0;
                                //$new_detail = $driver_details['_id'];
                                $new_detail = [];
                                //echo '<pre>'; 
                                $newcnt = count($driver_details);//exit;
                                for($newcnt1 = 0; $newcnt1 < $newcnt; $newcnt1++){
                                    foreach($driver_details[$newcnt1]['_id'] as $k=>$s){
                                        if($k != 'loc'){
                                            $new_detail[$newcnt1][$k] = $s;
                                        }       
                                    }                               
                                $new_detail[$newcnt1]['latitude'] = $driver_details[$newcnt1]['_id']['loc'][1];
                                $new_detail[$newcnt1]['longitude'] = $driver_details[$newcnt1]['_id']['loc'][0];
                                $new_detail[$newcnt1]['distance'] = $driver_details[$newcnt1]['_id']['distance'];
                                $new_detail[$newcnt1]['taxi_speed'] = $driver_details[$newcnt1]['_id']['taxi_speed'];
                                $new_detail[$newcnt1]['bearing'] = isset($driver_details[$newcnt1]['_id']['bearing'])?(double)$driver_details[$newcnt1]['_id']['bearing']:0;
                                $new_detail[$newcnt1]['nearest_driver'] = 0;
                                $new_detail[$newcnt1]['driver_coordinates'] = 0;
                                $estimated_time = $api->estimated_time($new_detail[$newcnt1]['distance'],$new_detail[$newcnt1]['taxi_speed']);
                                
                                }
                                
                                $fare_details['fare_calculation_type']      = FARE_CALCULATION_TYPE;
                                //$estimated_time = $api->estimated_time($new_detail['distance'],$new_detail['taxi_speed']);
                                $child_trip_count = $api->get_child_trip_count($passenger_id);
                                if (count($driver_details) > 0)
                                    $message = [
                                        "book_later_interval" => $bk_later_time,
                    "max_est_mins" => $max_est_mins,
                    "detail" => $new_detail,
                                        "fare_details" => [$fare_details],
                                        "driver_around_miles" => DEFAULTMILE,
                                        "approx_duration" => $estimated_time,
                                        "status" => 1,
                                        "message" => 'success',
                                        "metric" => UNIT_NAME,
                                        "chil_trip_count" => $child_trip_count,
                                        "current_time"=>$current_datetime

                                    ];
                                else
                                    $message = [
                                        "message" => $no_vehicle_msg,
                    "max_est_mins" => $max_est_mins,
                                        "fare_details" => $fare_details,
                                        "driver_around_miles" => DEFAULTMILE,
                                        "current_time"=>$current_datetime,
                                        "status" => 0
                                    ];
                                echo json_encode($message);
                                break;
                            } else {
                                $msg = [
                                    "message" => $no_vehicle_msg,
                    "max_est_mins" => $max_est_mins,
                                    "fare_details" => $fare_details,
                                     "current_time"=>$current_datetime,
                                    "status" => 3
                                ];
                                echo json_encode($msg);
                                exit;
                            }
                        } else {
                            $message = [
                                "message" => __('lat_not_zero'),
                                "current_time"=>$current_datetime,
                                "status" => -4
                            ];
                            echo json_encode($message);
                            exit;
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "current_time"=>$current_datetime,
                            "status" => -5
                        ];
                        echo json_encode($message);
            unset(MangoDB::$instances['default']);
                        exit;
                    }
                    break;
                //url :                                     
                //http://192.168.1.88:1000/api/?type=driver_arrived&trip_id=205
                case 'driver_arrived':
                    $array   = $mobiledata;
                    $trip_id = $array['trip_id'];
                    
                        
                    if ($array['trip_id'] != null) {
                       $check_travelstatus = $api->check_travelstatus($trip_id);
                       
                        if ($check_travelstatus == -1) {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => 2
                            ];
                            echo json_encode($message);
                            break;
                        }
                        if ($check_travelstatus == 4) {
                            $message = [
                                "message" => __('trip_cancelled_passenger'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            break;
                        }
                        if ($check_travelstatus != 9) {
                            $message = [
                                "message" => __('passenger_in_journey'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            break;
                        }
                        // print_r($check_travelstatus);exit;
                        $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
                        $driver_id                 = (isset($get_passenger_log_details[0]['driver_id'])?$get_passenger_log_details[0]['driver_id']:"");//exit;
                        $driver_current_location   = $api->get_driver_current_status($driver_id);
                        $driver_latitute           = $driver_longtitute = "";
                        if (count($driver_current_location) > 0) {
                            $driver_status     = $driver_current_location['status'];
                            $driver_latitute   = $driver_current_location['loc']['coordinates'][0]['latitude'];
                            $driver_longtitute = $driver_current_location['loc']['coordinates'][0]['longtitute'];                            
                        }
                        //if($driver_status == 'A' || $driver_status == 'B')
                        if ($driver_status == 'A') {
                            $message = [
                                "message" => __('already_trip'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            break;
                        }
                        /********** Update Driver Status after complete Payments *****************/
                        $update_pass_array     = [
                            "travel_status" => (int)3,
                            "arrived_time" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
                        ]; // Start to Pickup
                        $result                = $api->update_table(MDB_PASSENGERS_LOGS, $update_pass_array, '_id', $trip_id);
                        /*************** Update arrival in driver request table ******************/
                        $update_trip_array     = [
                            "status" => 5
                        ];
                        $driver_request_result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $trip_id);
                        /**************************** Update status in driver table *********/
                        $update_driver_arrary  = [
                            "status" => 'B'
                        ];
                        $driver_result         = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_id);
                        /*************************************************************************/
                        /** Send Trip fare details to Passenger ***/
                        
                        $p_device_token        = (isset($get_passenger_log_details[0]['passenger_device_token']) ?$get_passenger_log_details[0]['passenger_device_token'] :0);
                        $device_type           = (isset($get_passenger_log_details[0]['passenger_device_type']) ? $get_passenger_log_details[0]['passenger_device_type'] :0);
                        $passenger_id          = (isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] :0);
    $taxi_no            = (isset($get_passenger_log_details[0]['taxi_no']) ? $get_passenger_log_details[0]['taxi_no'] :0);
    $taxi_colour        = (isset($get_passenger_log_details[0]['taxi_colour']) ? $get_passenger_log_details[0]['taxi_colour'] :0);
    $taxi_manufacturer  = (isset($get_passenger_log_details[0]['taxi_manufacturer']) ? $get_passenger_log_details[0]['taxi_manufacturer'] :0);

                        /** CHECK PASSNEGER'S PARENT **/
                        $passeger_name = (isset($get_passenger_log_details[0]['passenger_name']) ? $get_passenger_log_details[0]['passenger_name'] :0);
                        $passenger_parent_id        = (isset($get_passenger_log_details[0]['passenger_parent']) ?$get_passenger_log_details[0]['passenger_parent'] :0);
                         $passenger_trip_alert        = (isset($get_passenger_log_details[0]['passenger_trip_alert']) ?$get_passenger_log_details[0]['passenger_trip_alert'] :0);
                        /** CHECK PASSNEGER'S PARENT **/
                        
                        $pushmessage           = [
                            "message" => __('passenger_on_board'),
                            "trip_id" => $trip_id,
                            "driver_latitute" => $driver_latitute,
                            "driver_longtitute" => $driver_longtitute,
                            "status" => 2
                        ];
                        
                        if (SMS == 1) {
                            //$this->phone=$this->commonmodel->get_passengers_details($email,1);
                            $message_details = $this->commonmodel->sms_message_by_title('driver_arrived');
                            $to              = $api->get_passenger_phone_by_id($passenger_id);
                            $message         = (isset($message_details['sms_description']) ?$message_details['sms_description'] :"");
                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                $message         = str_replace("##COLOR##", $taxi_colour, $message);
                $message         = str_replace("##MANUFACTURE##", $taxi_manufacturer, $message);
                $message         = str_replace("##NUMBER##", $taxi_no, $message);
                            $result = $api->sendSMS($to, $message);
                        }
                        /* Send Push notification to their parent */
                        if($passenger_parent_id == 0){}
                        else{
                            
                            if($passenger_trip_alert == 1){ 
                                /*** Child Details ***/
                                $result = $api->passenger_profile($passenger_id);
                                if (count($result) > 0) {
                                    $passenger_image = $result['profile_image'];
                                    $passenger_name = $result['name'];
                                    $passenger_phone = $result['phone'];
                                    /*************************** Passenger Image ************************************/
                                    if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                        $passenger_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                    } else {
                                        $passenger_image = URL_BASE . "public/images/no_image109.png";
                                    }
                                    
                                    $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                    $parent_device_token = $parentInfo[0]['device_token'];
                                    $parent_device_type = $parentInfo[0]['device_type'];
                                    $parent_pushmessage           = [
                                        "message" => str_replace("%s",$passeger_name,__('p_passenger_on_board')),
                                        "detail" => ['name'=>$passenger_name,'image'=>$passenger_image,'phone'=>$passenger_phone],
                                        "trip_id" => $trip_id,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "status" => 2
                                    ];
                                    $title =  __('passenger_on_board_child');
                                    $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                }   
                                /*** Child Details ***/                                 
                            }
                        }
                         /* Send Push notification to their passenger */
                        $title =  __('passenger_on_board');
                        //$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$device_type,$pushmessage,$this->customer_google_api,$title);
                        $message = [
                            "message" => __('driver_arrival_send'),
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" => __('invalid_trip'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=user_logout&driver_id=99&shiftupdate_id=
                case 'user_logout':
                    $driver_logout_array = $mobiledata;
                    $driver_id           = $mobiledata['driver_id'];
                    $model_type = (isset($mobiledata['model_type'])) ? $mobiledata['model_type'] : '';
                    $taxi_number = (isset($mobiledata['taxi_number'])) ? $mobiledata['taxi_number'] : '';
                    $feedback =  (isset($mobiledata['feedback'])) ? $mobiledata['feedback'] : '';
                    $end_km =  (isset($mobiledata['end_km'])) ? $mobiledata['end_km'] : '';
                    $validator = $this->car_info_validation1($mobiledata);
                    if ($validator->check()) {
                    $check_taxino = $api->taxino_isValid($taxi_number);
                     if ($driver_id != null && $check_taxino != '-1') {
                        $taxi_id = $check_taxino['_id'];//exit;
                        $taxino_isValidstart_km = $api->taxino_isValidstart_km($taxi_id);
                        if($end_km < $taxino_isValidstart_km){
							 $message = [
                                "message" => __('endkm_sholuld').$taxino_isValidstart_km,
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
						}
                        $update_taxi_info = $api->driver_feedback($driver_id,$taxi_id,$default_companyid,$model_type,$feedback);
                        $shiftupdate_id = $driver_logout_array['shiftupdate_id'];
                        $driver_model   = Model::factory('driver');
                        $update_id      = $driver_id;
                        $check_result   = $api->check_driver_companydetails($driver_id, $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        $driver_current_status = $api->get_driver_current_status($update_id);
            $status = isset($driver_current_status['status'])?$driver_current_status['status']:'';
                        if ($status != 'A') {
                            $get_driver_log_details = $api->get_driver_log_details($update_id, $default_companyid);
                            //print_r($get_driver_log_details);
                            $driver_trip_count      = count($get_driver_log_details); //exit;
                            if ($driver_trip_count == 0) {
                                
                                /* DRIVER FEEDBACK */
                                
                                /* DRIVER FEEDBACK */
                                
                                
                                
                                $update_array        = [
                                    "login_from" => "",
                                    "login_status" => "N",
                                    "device_id" => "",
                                    "device_token" => "",
                                    "device_type" => "",
                                    "notification_setting" => "0",
                                    "notification_status" => "0"
                                ];
                                $mapping_array = ["mapping_status" => "D"];
                                $login_status_update = $this->commonmodel->update(MDB_PEOPLE, $update_array, '_id', $update_id);
                                
                                $mapping_update = $this->commonmodel->update(MDB_TAXI_DRIVER_MAPPING, $mapping_array, 'mapping_driverid', $update_id);
                                /*** Update in Driver table **/
                                $driver_reply        = $driver_model->update_driver_shift_status($update_id, '0');
                                /** Update in driver shift history table **/
                                $ifTaxiReachService = $api->ifTaxiReachService($end_km);
                                $km_reach_status = is_array($ifTaxiReachService) ? true : false;
                                $service_id = is_array($ifTaxiReachService) ? $ifTaxiReachService['_id'] : 0;
                                $shiftupdate_arrary  = [
                                    "shift_end" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                    "login_end" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                    "status" => "Logout",
                                    "end_km" => (int)$end_km,
                                    "km_reach_status" => $km_reach_status
                                ];
                                $service = [];
                                if($service_id != 0) {
									$service = ["taxi_service_id" => (int)$service_id];
								}
								$shiftupdate_arrary = array_merge($shiftupdate_arrary, $service);
                                
                                $update_taxi_km = $this->commonmodel->update(MDB_TAXI, ["starting_km" => $end_km], '_id', $taxi_id);
                                $shiftupdateid       = $shiftupdate_id;
                                if ($shiftupdateid) {
                                    $transaction = $this->commonmodel->update(MDB_SHIFT_HISTORY, $shiftupdate_arrary, '_id', $shiftupdateid);
                                }
                                $message = [
                                    "message" => __('logout_success'),
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('trip_in_future'),
                                    "status" => -4
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_in_trip'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    } else {
                        $errors = $validator->errors('errors');
                        $message = [
                            "message" => $errors,
                            "status" => -1
                        ];
                      
                    }
                    echo json_encode($message);
                    break;
               
               
                case 'user_logout_old':
                    $driver_logout_array = $mobiledata;
                    $driver_id           = $mobiledata['driver_id'];
                    if ($driver_id != null) {
                        $shiftupdate_id = $driver_logout_array['shiftupdate_id'];
                        $driver_model   = Model::factory('driver');
                        $update_id      = $driver_id;
                        $check_result   = $api->check_driver_companydetails($driver_id, $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        $driver_current_status = $api->get_driver_current_status($update_id);
                       
                        if (count($driver_current_status) > 0) {
                            $get_driver_log_details = $api->get_driver_log_details($update_id, $default_companyid);
                            //print_r($get_driver_log_details);
                            $driver_trip_count      = count($get_driver_log_details); //exit;
                            if ($driver_trip_count == 0) {
                                $update_array        = [
                                    "login_from" => "",
                                    "login_status" => "N",
                                    "device_id" => "",
                                    "device_token" => "",
                                    "device_type" => "",
                                    "notification_setting" => "0",
                                    "notification_status" => "0"
                                ];
                                $mapping_array = ["mapping_status" => "D"];
                                $login_status_update = $this->commonmodel->update(MDB_PEOPLE, $update_array, '_id', $update_id);
                                
                                $mapping_update = $this->commonmodel->update(MDB_TAXI_DRIVER_MAPPING, $mapping_array, 'mapping_driverid', $update_id);
                                /*** Update in Driver table **/
                                $driver_reply        = $driver_model->update_driver_shift_status($update_id, '0');
                                /** Update in driver shift history table **/
                                $shiftupdate_arrary  = [
                                    "shift_end" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                                ];
                                $shiftupdateid       = $shiftupdate_id;
                                if ($shiftupdateid) {
                                    $transaction = $this->commonmodel->update(MDB_SHIFT_HISTORY, $shiftupdate_arrary, '_id', $shiftupdateid);
                                }
                                $message = [
                                    "message" => __('logout_success'),
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('trip_in_future'),
                                    "status" => -4
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_in_trip'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                // http://192.168.1.104:1003/mobileapi/index/dGF4aV9hbGw=/?type=get_trip_detail&trip_id=1064
                case 'get_trip_detail':
                    $array        = $mobiledata;
                    $trip_id      = ($array['trip_id'] == 5300)?'':$array['trip_id'];
            //passenger_id params come from ios passenger app only
                    $passenger_id = isset($array['passenger_id']) ? $array['passenger_id'] : '';
                    if ($trip_id != null) {
                        $trip_id                   = $trip_id;
                        $api_model                 = Model::factory(MOBILEAPI_107);
                        $get_passenger_log_details = $api_model->get_trip_detail($trip_id, $passenger_id);

                        //print_r($get_passenger_log_details);exit;
                        
                        if (count($get_passenger_log_details) > 0) {
                            foreach ($get_passenger_log_details as $journey) {
                                 $journey['drop_location'] = ($journey['drop_location'] == "(null)")?'':$journey['drop_location'];

                $driver_id                            = $journey['driver_id'];

                                $taxi_id                              = $journey['taxi_id'];
                                $driver_image_name                    = $journey['driver_image'];
                                $passenger_image                      = $journey['passenger_image'];
                                $trip_details['taxi_min_speed']       = $journey['taxi_min_speed'];
                                $trip_details['trip_id']              = $journey['passengers_log_id'];
                                $trip_details['current_location']     = $journey['pickup_location'];
                                $trip_details['pickup_latitude']      = $journey['pickup_latitude'];
                                $trip_details['pickup_longitude']     = $journey['pickup_longitude'];
                                $trip_details['drop_location']        = $journey['drop_location'];
                                $trip_details['drop_latitude']        = $journey['drop_latitude'];
                                $trip_details['drop_longitude']       = $journey['drop_longitude'];
                                $trip_details['drop_time']            = (isset($journey['drop_time']))?Commonfunction::convertphpdate('Y-m-d h:i:s A',$journey['drop_time']):'';
                                
                                $trip_details['pickup_time']          = (isset($journey['actual_pickup_time']))?Commonfunction::convertphpdate('Y-m-d h:i:s A',$journey['actual_pickup_time']):'';

                                $trip_details['droptime']            = (isset($journey['drop_time']))?Commonfunction::convertphpdate('h:i A',$journey['drop_time']):'';
                                
                                $trip_details['pickuptime']          = (isset($journey['actual_pickup_time']))?Commonfunction::convertphpdate(' h:i A',$journey['actual_pickup_time']):'';

                                $trip_details['booking_time']         = Commonfunction::convertphpdate('D, F d Y, h:i A',$journey['pickup_time']);
                                $time_to_reach_passennew = isset($journey['time_to_reach_passen'])?$journey['time_to_reach_passen']:'';
                                $trip_details['time_to_reach_passen'] = str_replace('Min', '', $time_to_reach_passennew);
                                $trip_details['no_passengers']        = $journey['no_passengers'];
                                $trip_details['rating']               = isset($journey['rating']) ? $journey['rating']:'';
                                $trip_details['notes']                = isset($journey['notes_driver'])?$journey['notes_driver']:'';
                                $trip_details['driver_name']          = isset($journey['driver_name'])?$journey['driver_name']:'';
                                $trip_details['driver_id']            = $journey['driver_id'];
                                $trip_details['taxi_id']              = $journey['taxi_id'];
                                $trip_details['taxi_number']          = $journey['taxi_no'];
                                $trip_details['driver_phone']         = $journey['driver_phone'];
                                $trip_details['passenger_phone']      = $journey['passenger_phone'];
                                $trip_details['passenger_name']       = $journey['passenger_name'];
                                $trip_details['travel_status']        = $journey['travel_status'];
                                $trip_details['taxi_modelid']         = $journey['taxi_modelid'];
                                $trip_details['taxi_model_name']      = $journey['taxi_model_name'];
                $trip_details['taxi_manufacturer']      = $journey['taxi_manufacturer'];
                $trip_details['model_image']          = $journey['model_image'];
                $trip_details['bookedby']             = $journey['bookby'];
                                $trip_details['waiting_time']         = isset($journey['waiting_time'])?$journey['waiting_time']:'';
                                $trip_details['waiting_cost']         = isset($journey['waiting_cost'][0])?$journey['waiting_cost'][0]:'';
                $trip_details['ratings']              = isset($journey['ratings']) ? $journey['ratings']:'';
                            $trip_details['tags']                 = isset($journey['tags']) ? $journey['tags']:[];
                                /* WAITING  TIME */
                                 $convertSeconds = $trip_details['waiting_time'] * 3600;
                                        $converthours   = floor($convertSeconds / 3600);
                                        $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                                        $convertsecs    = floor($convertSeconds % 60);
                                        $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                                        $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                                        $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                                        $trip_details['waiting_time']     = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS  : $waitM .':' . $waitS;
                                /* WAITING  TIME */

                               $trip_details['waiting_time_mins'] = $trip_details['waiting_time'] * 60;

                                $wallet_used_amount = isset($journey['wallet_used_amount'][0])?(($journey['wallet_used_amount'][0] != '')?$journey['wallet_used_amount'][0]:0):0;
                                $waiting_cost = isset($journey['waiting_cost'][0])?$journey['waiting_cost'][0]:0;
                                $fare = isset($journey['fare'][0])?$journey['fare'][0]:0;
                                $o_fare = isset($journey['o_fare'][0])?$journey['o_fare'][0]:0;

                                $trip_fare = $fare+$wallet_used_amount;

                                $trip_details['trip_fare'] = round($o_fare,2);
                                $trip_details['amt'] = round($o_fare,2);
                                //ride fare
                                $minutes_fare = $trip_fare - $waiting_cost; 
                                $trip_details['minutes_fare'] = round($minutes_fare,2);
                                //cash / Wallet
                                $paid_amt = $trip_fare - $wallet_used_amount; 
                                $trip_details['paid_amt'] = round($paid_amt,2);

                                 $static_map='';
                                 $trip_id = $journey['passengers_log_id'];
                                   //$mapurl   = "https://maps.googleapis.com/maps/api/staticmap?size=".MAP_WIDTH."x".MAP_HEIGHT."&markers=".URL_BASE."/ic.png?s=32%26d=identicon%26r=PG|$marker_start&markers=".URL_BASE."/ic.png?s=32%26d=identicon%26r=PG|$marker_end";

                                $mapdata = @file_get_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$trip_id.'.png');

                                if (file_exists(DOCROOT.PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$trip_id.'.png' &&  $mapdata != '')) {
                                $static_map = URL_BASE .PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$trip_id.'.png';
                                }
                                else
                                {

                                    $location_data = $api_model->get_location_details($trip_id);
                                     $path   = isset($location_data[0]['active_record'])?$location_data[0]['active_record']:[];

                                        include_once MODPATH . "/email/vendor/polyline_encoder/encoder.php";
                                        $polylineEncoder = new PolylineEncoder();
                                        if (count($path) > 0) {
                                        foreach ($path as $values) {
                                        //$values = explode(',', $values);
                                         $polylineEncoder->addPoint($values[1], $values[0]);
                                         $polylineEncoder->encodedString();
                                        }
                                        }
                                    $encodedString = $polylineEncoder->encodedString();
                                    $marker_start = $journey['pickup_latitude'].",".$journey['pickup_longitude'];
                                    $marker_end = $journey['drop_latitude'].",".$journey['drop_longitude'];
                                    $mapurl   = "https://maps.googleapis.com/maps/api/staticmap?size=".MAP_WIDTH."x".MAP_HEIGHT."&markers=icon:".URL_BASE."ic.png?s=32%26d=identicon%26r=PG|$marker_start&markers=icon:".URL_BASE."ic2.png?s=32%26d=identicon%26r=PG|$marker_end&path=weight:3%7Ccolor:blue%7Cenc:$encodedString";

                                    //$trip_details['mapurl'] = $mapurl;


                                    $data = @file_get_contents( $mapurl);
                                    if($data != '')
                                    {
                                        @file_put_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$trip_id.'.png', $data);
                                        $static_map = URL_BASE .PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$trip_id.'.png';
                                    }
                                    else
                                    {
                                        $static_map='';
                                    }
                                }
                                $trip_details['static_map'] = $static_map;
                                
                                $trip_details['distance']             = isset($journey['distance']) ? $journey['distance']:'';
                                $trip_details['actual_distance']      = ($journey['actual_distance'][0] != 0)?$journey['actual_distance'][0]:'';
                                $trip_details['metric']               = ($journey['metric'][0] != 0)?$journey['metric'][0]:'';
                                //$trip_details['amt']                  = round($journey['amt'], 2);
                                $wallet_used_amount = isset($journey['wallet_used_amount'][0])?(($journey['wallet_used_amount'][0] != '')?$journey['wallet_used_amount'][0]:0):0;
                                $waiting_cost = isset($journey['waiting_cost'][0])?$journey['waiting_cost'][0]:0;
                                $trip_details['used_wallet_amount']   = $wallet_used_amount;

                                $trip_details['waiting_cost']   = round($waiting_cost,2);
                                $trip_details['job_ref']              = isset($journey['job_ref'][0])?$journey['job_ref'][0]:'';
                                $trip_details['payment_type']         = isset($journey['payment_type'][0])?$journey['payment_type'][0]:'';
                                $trip_details['taxi_speed']           = isset($journey['taxi_speed'])?$journey['taxi_speed']:'';
                                $trip_details['model_image_new']           = isset($journey['model_image_new'])?$journey['model_image_new']:'';
                                $trip_details['trip_duration']        = 0;
                                $trip_details['trip_duration_mins']        = 0;
                                if ($trip_details['drop_time'] != "") {
                                    //total trip duration
                                    $trip_seconds                  = strtotime($trip_details['drop_time']) - strtotime($trip_details['pickup_time']);
                                    $tripseconds                  = strtotime($trip_details['drop_time']) - strtotime($trip_details['pickup_time']);
                                    $trip_days                     = floor($trip_seconds / 86400);
                                    $trip_hours                    = floor(($trip_seconds - ($trip_days * 86400)) / 3600);
                                    $trip_minutes                  = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600)) / 60);
                                    $trip_seconds                  = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600) - ($trip_minutes * 60)));
                                    $trip_hours                    = ($trip_hours < 10) ? '0' . $trip_hours : $trip_hours;
                                    $trip_minutes                  = ($trip_minutes < 10) ? '0' . $trip_minutes : $trip_minutes;
                                    $trip_seconds                  = ($trip_seconds < 10) ? '0' . $trip_seconds : $trip_seconds;
                                    $trip_details['trip_duration'] = $trip_hours . ":" . $trip_minutes . ":" . $trip_seconds;

                                   $trip_duration_mins = $tripseconds/60;

                                   $trip_details['trip_duration_mins'] = round($trip_duration_mins);
                                }
                            }
                            $paymentname = "";
                            $trip_details['pay_mod_id'] = $trip_details['payment_type'];
                            if ($trip_details['payment_type'] != '5') {
                                $paymentname_sql = $api->get_payment_name($trip_details['payment_type']);
                                if (count($paymentname_sql) > 0) {
                                    $paymentname = $paymentname_sql['pay_mod_name'];
                                }
                            } else {
                                $paymentname = "Wallet";
                            }
                            if($wallet_used_amount == 0)
                            {
                            $trip_details['payment_type'] = $paymentname;
                            }
                            else
                            {
                                if($wallet_used_amount > 0 && $fare == 0)
                                {
                                    $trip_details['payment_type'] = 'Wallet';
                                }
                                else
                                {
                                 $trip_details['payment_type'] = 'Wallet & '.$paymentname;
                                }
                            }
                            /************************************Driver Image *******************************/
                            $driver_image                 = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . 'thumb_' . $driver_image_name;
                            if (file_exists($driver_image) && ($driver_image_name != '')) {
                                $driver_image = URL_BASE . SITE_DRIVER_IMGPATH . $driver_image_name;
                            } else {
                                $driver_image = URL_BASE . "/public/images/noimages109.png";
                            }
                            $trip_details['driver_image'] = $driver_image;
                            /*************************** Passenger Image ************************************/
                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image;
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
             if ((!empty($trip_details['model_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $trip_details['model_image'])) {
                                $trip_details['model_image'] = URL_BASE.MODEL_IMGPATH.$trip_details['model_image'];
                            } else {
                                $trip_details['model_image'] = URL_BASE . "public/images/no_image109.png";
                            }

                            if ((!empty($trip_details['model_image_new'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $trip_details['model_image_new'])) {
                                $trip_details['model_image_new'] = URL_BASE.MODEL_IMGPATH.$trip_details['model_image_new'];
                            } else {
                                $trip_details['model_image_new'] = URL_BASE . "public/images/no_image109.png";
                            }

                            $trip_details['passenger_image'] = $profile_image;
                            $trip_details['driver_latitute'] = $trip_details['driver_longtitute'] = '0.0';

                            $pass_id_image= isset($journey['pass_id_image'])?$journey['pass_id_image']:0;
                            if($pass_id_image != 0)
                            {
                                $pass_id_image = 1;
                            }
                            $trip_details['pass_id_image'] = $pass_id_image;
                            $current_driver_status           = $api_model->get_driver_current_status($driver_id);
                            if (count($current_driver_status) > 0) {
                                //print_r($current_driver_status); exit;
                                $trip_status                       = isset($current_driver_status['status'])?$current_driver_status['status']:'';
                                $trip_details['driver_latitute']   = isset($current_driver_status['loc']['coordinates'][1])?$current_driver_status['loc']['coordinates'][1]:'';
                                $trip_details['driver_longtitute'] = isset($current_driver_status['loc']['coordinates'][0])?$current_driver_status['loc']['coordinates'][0]:'';
                            }
                            $trip_details['driver_status'] = (isset($trip_status) && $trip_status != 'B') ? $trip_status : 'F';
                            $dresult                       = $api->driver_ratings($driver_id);
                            $totalrating                   = 0;
                            if (count($dresult) > 0) {
                                $overall_rating       = 0;
                                $i                    = 0;
                                $trip_total_with_rate = 0;
                                foreach ($dresult as $comments) {
                                    $rating_dr = isset($comments['rating'])?$comments['rating']:0;
                                    if ($rating_dr != 0)
                                        $trip_total_with_rate++;
                                    $rating = $rating_dr;
                                    //print_r($comments);
                                    $overall_rating += $rating_dr;
                                    $i++;
                                }
                                if ($trip_total_with_rate != 0 && $overall_rating != 0) {
                                    $totalrating = $overall_rating / $trip_total_with_rate;
                                } else {
                                    $totalrating = 0;
                                }
                                $totalrating = round($totalrating);
                                //echo 'as'.$totalrating;                                               
                            } else {
                                $totalrating = 0;
                            }
                            $trip_details['driver_rating'] = $totalrating;
                            $ratings_info = $api->get_ratings_info();
                            $trip_details['ratings_info'] = $ratings_info;


                            //print_r($upcoming_journey);
                            if (count($get_passenger_log_details) == 0) {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => 0,
                                    "site_currency" => $this->site_currency
                                ];
                            } else {
                                $mes = __('success');
                                if ($trip_details['travel_status'] == 5) {
                                    $mes = __('trip_waiting_payment');
                                } else if ($trip_details['travel_status'] == 4) {
                                    $mes = __('cancel_by_passenger');
                                }
                                $message = [
                                    "message" => $mes,
                                    "detail" => $trip_details,
                                    "status" => 1,
                                    "site_currency" => $this->site_currency
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_trip'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
            unset(MangoDB::$instances['default']);
                    break;
                //URL : api/?type=passenger_logout&id=7
                case 'passenger_logout':
                    $passenger_log_array = $mobiledata;
                    if ($passenger_log_array['id'] != null) {
                        $api_model    = Model::factory(MOBILEAPI_107);
                        //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);                      
                        $update_id    = $passenger_log_array['id'];
                        $check_result = $api->check_passenger_companydetails($passenger_log_array['id'], $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        $update_array          = [
                            "login_from" => "",
                            "login_status" => "N",
                            "device_id" => "",
                            "device_token" => "",
                            "device_type" => ""
                        ];
                        $logout_status_update  = $api_model->update_passengers($update_array, $update_id, $default_companyid);
                        $delete_rejected_trips = $api_model->delete_rejected_trips($update_id, $company_all_currenttimestamp);
                        if ($logout_status_update > 0) {
                            $message = [
                                "message" => __('logout_success'),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
                    break;
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_message&id=58&usertype=P
                case 'tell_to_friend_message':
                    $array       = $mobiledata;
                    $id          = $array['id'];
                    $type        = $array['usertype'];
                    $device_type = $array['device_type'];
                    //$referral_code = $telltofriend_message = "";
                    $subject     = __('telltofrien_subject');
                    $name        = "";
                    $message     = "";
                    if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/public/uploads/site_logo/' . $this->domain_name . '_email_logo.png')) {
                        $email_logo = $this->domain_name;
                    } else {
                        $email_logo = "demo";
                    }
                    if ($device_type == 1) {
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_NAME => $name,
                            REPLACE_MESSAGE => TELL_TO_FRIEND_MESSAGE,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_EMAIL_LOGO => $email_logo,
                            REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                            REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,
                            REPLACE_ANDROID_DRIVER_APP => ANDROID_DRIVER_APP
                        ];
                    } else {
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_NAME => $name,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_MESSAGE => TELL_TO_FRIEND_MESSAGE,
                            REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                            REPLACE_EMAIL_LOGO => $email_logo,
                            REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,
                            REPLACE_ANDROID_DRIVER_APP => ANDROID_DRIVER_APP,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                    }
                    /* Added for language email template */
                    if ($this->lang != 'en') {
                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html')) {
                            $message_temp = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html', $replace_variables);
                        } else {
                            $message_temp = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
                        }
                    } else {
                        $message_temp = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
                    }
                    /* Added for language email template */
                    //echo $message_temp;exit;
                    //print_r($message_temp);
                    $message_template = htmlspecialchars($message_temp);
                    if (($id != null) && ($type != null)) {
                        if ($type == 'D') {
                            $driver_profile = $api->driver_profile($id);
                            if (count($driver_profile) > 0) {
                                $referral_code        = $driver_profile[0]['driver_referral_code'];
                                $name                 = $passenger_profile[0]['name'];
                                $telltofriend_message = DRIVER_TELL_TO_FRIEND_MESSAGE;
                                $detail               = [
                                    "tell_message" => $telltofriend_message,
                                    "message_template" => $message_template,
                                    "subject" => $subject
                                ];
                                $message              = [
                                    "detail" => $detail,
                                    "status" => 1,
                                    "message" => __('success')
                                ];
                            } else {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => 0
                                ];
                            }
                        } else {
                            $passenger_profile = $api->passenger_profile($id);
                            if (count($passenger_profile) > 0) {
                                $referral_code        = $passenger_profile[0]['referral_code'];
                                $name                 = $passenger_profile[0]['name'];
                                $ref_message          = TELL_TO_FRIEND_MESSAGE . '' . $referral_code;
                                $ref_discount         = REFERRAL_DISCOUNT;
                                $telltofriend_message = TELL_TO_FRIEND_MESSAGE; //str_replace("#REFDIS#",$ref_discount,$ref_message);                       
                                $detail               = [
                                    "tell_message" => $telltofriend_message,
                                    "message_template" => $message_template,
                                    "subject" => $subject
                                ];
                                $message              = [
                                    "detail" => $detail,
                                    "status" => 1,
                                    "message" => __('success')
                                ];
                            } else {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => 0,
                                    "message" => __('failed')
                                ];
                            }
                        }
                        //$message = array("message" => $telltofriend_message,"status"=>1,"message"=>__('success'));                                
                    } else {
                        $message = [
                            "message" => __('validation_error'),
                            "status" => -1,
                            "message" => __('failed')
                        ];
                    }
                    if ($device_type == 1) {
                        $search  = [
                            '"'
                        ];
                        $replace = [
                            "'"
                        ];
                        echo $str = str_ireplace($search, $replace, $message_temp);
                    } else {
                        echo json_encode($message);
                    }
                    break;
                //URL
                // http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend&to=ndottagmytaxi2014@gmail.com&message=Flagger left you hail a taxi. Download it for free to get 5% off your first ride&passenger_id=58
                case 'tell_to_friend':
                    $tell_array = $mobiledata;
                    if (!empty($tell_array)) {
                        $to               = $tell_array['to'];
                        $message          = $tell_array['message'];
                        $passenger_id     = $tell_array['passenger_id'];
                        $name             = $email = $referral_code = "";
                        $check_validation = $this->check_tell_to_friend($tell_array);
                        if ($check_validation->check()) {
                            $passenger_details = $api->passenger_profile($passenger_id);
                            $referral_code     = "";
                            if (count($passenger_details) > 0) {
                                $name          = $passenger_details[0]['name'];
                                $email         = $passenger_details[0]['email'];
                                $referral_code = $passenger_details[0]['referral_code'];
                            }
                            $friends_email  = explode(',', $to);
                            $rejectedemails = "";
                            $successemails  = "";
                            $mail           = "";
                            foreach ($friends_email as $femail) {
                                $check_list = $api->check_email_passengers($femail);
                                if ($check_list > 0) {
                                    $rejectedemails .= $femail . ',';
                                    //$message = array("message" => $rejectedemails.' '.__('already_reg'),"status"=> -1);
                                    //echo json_encode($message);
                                } else {
                                    if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/public/uploads/site_logo/' . $this->domain_name . '_email_logo.png')) {
                                        $email_logo = $this->domain_name;
                                    } else {
                                        $email_logo = "demo";
                                    }
                                    $subject           = __('telltofrien_subject');
                                    $replace_variables = [
                                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                                        REPLACE_SITENAME => $this->app_name,
                                        REPLACE_NAME => $name,
                                        REPLACE_EMAIL => $email,
                                        REPLACE_SUBJECT => $subject,
                                        REPLACE_MESSAGE => $message,
                                        REPLACE_SITEEMAIL => $this->siteemail,
                                        REPLACE_SITEURL => URL_BASE,
                                        REPLACE_COMPANYDOMAIN => $this->domain_name,
                                        REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                                        REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,
                                        REPLACE_EMAIL_LOGO => $email_logo,
                                        REPLACE_ANDROID_DRIVER_APP => ANDROID_DRIVER_APP,
                                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                                    ];
                                    //print_r($replace_variables);exit;
                                    /* Added for language email template */
                                    if ($this->lang != 'en') {
                                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html')) {
                                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html', $replace_variables);
                                        } else {
                                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
                                        }
                                    } else {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
                                    }
                                    /* Added for language email template */
                                    //print_r(htmlspecialchars($message));exit;
                                    $friend_to = $femail;
                                    $from      = $this->siteemail;
                                    $successemails .= $femail . ',';
                                    $redirect = "no";
                                    if (SMTP == 1) {
                                        include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                                    } else {
                                        // To send HTML mail, the Content-type header must be set
                                        $headers = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                        // Additional headers
                                        $headers .= 'From: ' . $from . '' . "\r\n";
                                        $headers .= 'Bcc: ' . $to . '' . "\r\n";
                                        mail($to, $subject, $message, $headers);
                                    }
                                }
                                //$rejectedemails.' '.__('already_reg')
                                if (empty($successemails)) {
                                    $detail = __('already_reg');
                                } else {
                                    $detail = __('invitation_send');
                                }
                                $message = [
                                    "detail" => $detail,
                                    "status" => 1,
                                    "message" => __('success')
                                ];
                            }
                        } else {
                            $detail  = $check_validation->errors('errors');
                            $message = [
                                "detail" => $detail,
                                "status" => 2,
                                "message" => __('validation_error')
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => 5
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL
                // http://192.168.1.88:1003/api/index/dGF4aV9hbGw=/?type=dynamic_page&pagename=termsconditions&device_type=1
                case 'dynamic_page':
                    $page_array       = $_GET;
                    $check_validation = $this->check_dynamic_array($page_array);
                    if ($check_validation->check()) {
                        $pagename    = $page_array['pagename'];
                        $device_type = $page_array['device_type'];
                        $pagecontent = $content = "";
                        if ($pagename != null) {
                            $content_cms = $api->getcmscontent($pagename, $default_companyid);
                            if (count($content_cms) > 0) {
                                //foreach ($content_cms as $value) {
                                    $pagecontent = $content_cms['content'];
                                    //$content = stripcslashes($pagecontent);
                                    //$content     = htmlentities($pagecontent);
                                    $content     = htmlentities($pagecontent);
                                    $menu        = $content_cms['menu'];
                                //}
                            } else {
                                if ($device_type == 1) {
                                    echo __('page_not_found');
                                    break;
                                } else if ($device_type == 2) {
                                    $message = [
                                        "message" => __('page_not_found'),
                                        "status" => 2
                                    ];
                                    echo $json_decode = json_encode($message);
                                    break;
                                } else {
                                    $message = [
                                        "message" => __('page_not_found'),
                                        "status" => 2
                                    ];
                                    echo $json_decode = json_encode($message);
                                    break;
                                }
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_page'),
                                "status" => -1
                            ];
                            echo $json_decode = json_encode($message);
                            break;
                        }
                        if ($device_type == 1) {
                            echo $pagecontent;
                            break;
                        } else if ($device_type == 2) {
                            $result  = [
                                "content" => $content,
                                "title" => $menu
                            ];
                            $message = [
                                "message" => __('success'),
                                "detail" => $result,
                                "status" => 1
                            ];
                            echo $json_decode = json_encode($message);
                            break;
                        } else {
                            $message = [
                                "message" => __('invalid_page'),
                                "status" => -1
                            ];
                            echo $json_decode = json_encode($message);
                            break;
                        }
                    } else {
                        $detail  = $check_validation->errors('errors');
                        $message = [
                            "detail" => $detail,
                            "status" => -3,
                            "message" => __('validation_error')
                        ];
                        echo json_encode($message);
                    }
                    //echo $pagecontent;
                    //*/
                    break;
                //URL : http://192.168.1.88:1000/api/index/?type=completed_journey_datewise&passenger_id=1&start=0&limit=5&date=2012-12-26&device_type=1            
                case 'completed_journey_datewise':
                    $array = $mobiledata;
                    if ($array['passenger_id'] != null) {
                        $validator = $this->trip_history_date_wise($array);
                        if ($validator->check()) {
                            $userid       = $array['passenger_id'];
                            $start        = $array['start'];
                            $limit        = $array['limit'];
                            $date         = $array['date'];
                            $device_type  = $array['device_type']; // 1 Android , 2 - IOS
                            //Getting from Passenger Model Directly
                            $passengers   = Model::factory('passengers');
                            $booktype     = "2";
                            
                            $ids = [];
                            if($array['child_id'] == "") {
                                $childs = $api->get_passenger_childlist($array['passenger_id'],'');
                                foreach($childs as $child) {
                                    $ids[] = (int)$child['_id'];
                                }
                            } else {
                                $ids[] = (int)$array['child_id'];
                            }
                            
                            $fromdate     = $date . ' 00:00:01';
                            $todate       = $date . ' 23:59:59';
                            $arraydetails = [];
                            $alldetails   = [];
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $total_array = [];
                            for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                                $cdate                = date("Y-m-d", $i);
                                $passengers_all_compl = $api->get_passenger_trips_bydate($pagination, $booktype, $ids, 1, 'A', '1', $start, $limit, $cdate);
                                
                                if (count($passengers_all_compl) > 0) {
                                    foreach ($passengers_all_compl as $result) {
                                        $arraydetails['trip_id']          = $result['trip_id'];
                                        $arraydetails['pickup_location']  = $result['place'];
                                        $arraydetails['booking_time']     = $result['pickup_time'];
                                        $arraydetails['pickup_time']      = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
                                        $arraydetails['booking_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['booking_time']);
                                        $arraydetails['pickup_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['pickup_time']);
                                        $arraydetails['fare']             = $result['fare'];
                                        $arraydetails['pickup_latitude']  = $result['pickup_latitude'];
                                        $arraydetails['pickup_longitude'] = $result['pickup_longitude'];
                                        $arraydetails['drop_latitude']    = $result['drop_latitude'];
                                        $arraydetails['drop_longitude']   = $result['drop_longitude'];
                                        $arraydetails['notes_driver']     = $result['notes_driver'];
                                        $arraydetails['drivername']       = $result['drivername'];
                                        $arraydetails['drop_location']    = $result['drop_location'];
                                        $arraydetails['taxi_no']          = $result['taxi_no'];
                                        $arraydetails['model']            = $result['model'];
                                        $arraydetails['distance']         = $result['distance'];
                                            /* NEW CHANGES */
                                    $arraydetails['metric']            = $result['metric'];
                                    $arraydetails['driver_image']            = $result['driver_image'];
                                    $arraydetails['model_name']            = $result['model_name'];
                                    $arraydetails['taxi_no']            = $result['taxi_no'];
                                    $arraydetails['drivername']            = $result['drivername'];
                                    $arraydetails['account_type']            = $result['account_type'];
                                    $arraydetails['account_type_name']  = (!empty($result['account_type_name'])) ? current($result['account_type_name']) : '';
                                    
                                    $convertSeconds = $result['waitingtime'] * 3600;
                                    $converthours   = floor($convertSeconds / 3600);
                                    $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                                    $convertsecs    = floor($convertSeconds % 60);
                                    $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                                    $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                                    $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                                    $waitingTime    = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS : $waitM .':' . $waitS;
                                    $arraydetails['waiting_time']    = $waitingTime;    
                                    
                                    /* NEW CHANGES */
                                        $date                             = $result['pickup_time'];
                                        $alldetails[]                     = $arraydetails;
                                    }
                                    $total_array[] = [
                                        "trip_Date" => $cdate,
                                        "trip_details" => $alldetails
                                    ];
                                }
                            }
                            if (count($total_array) > 0) {
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $total_array,
                                    "status" => 1,
                                    "site_currency" => $this->site_currency
                                ];
                                //$message = $passengers_all_compl;
                            } else {
                                $message = [
                                    "message" => __('no_completed_data_date'),
                                    "status" => 0,
                                    "site_currency" => $this->site_currency
                                ];
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=completed_journey_monthwise&passenger_id=1&start=1&limit=5&month=12&year=2013         
                case 'completed_journey_monthwise':
                    $array = $mobiledata;
                    if ($array['passenger_id'] != null) {
                        $validator = $this->trip_history_month_wise($array);
                        if ($validator->check()) {
                            $userid      = $array['passenger_id'];
                            $start       = $array['start'];
                            $limit       = $array['limit'];
                            $month       = $array['month'];
                            $year        = $array['year'];
                            $device_type = $array['device_type']; // 1 Android , 2 - IOS
                            //Getting from Passenger Model Directly
                            $passengers  = Model::factory('passengers');
                            // Booktype 0 -> Flagger Ride, 1-> Strret Ride, 2-> All
                            $booktype    = "2";
                            
                            $ids = [];
                            if($array['child_id'] == "") {
                                $childs = $api->get_passenger_childlist($array['passenger_id'],'');
                                foreach($childs as $child) {
                                    $ids[] = (int)$child['_id'];
                                }
                            } else {
                                $ids[] = (int)$array['child_id'];
                            }
                            
                    
                            // all records from 1 month //
                            //$fromdate = $year.'-'.$month.'-'.'01';
                            //$todate = date('Y-m-t', strtotime($fromdate));
                            if ($device_type == 1) {
                                $fromdate = $year . '-' . $month . '-' . '01';
                                $todate   = $year . '-' . $month . '-' . '31';
                            } else {
                                $fromdate = $year . '-' . $month . '-' . '01';
                                $todate   = date('Y-m-t', strtotime($fromdate));
                            }
                            $arraydetails = [];
                            //$alldetails = array();
                            $perdayarray  = [];
                            $pagination   = 1;
                            $j            = $start;
                            
                            
                            $passengers_all_compl = $api->get_passenger_trips_bymonth($pagination, $booktype, $ids, 1, 'A', '1', $start, $limit, $fromdate, $todate);
                            
                                
                                
                            if (count($passengers_all_compl) > 0) {
                                $alldetails = [];
                                foreach ($passengers_all_compl as $result) {
                            $driver_image = isset($result['driver_image'])?$result['driver_image']:'';
            if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/driver_image/'.$driver_image) &&($driver_image != "")){ 
                             $arraydetails['driver_image']      = $driver_image;
                                }
                                else{
                                  $arraydetails['driver_image']      = 'noimages109.png';
                                }                                   
                                    $arraydetails['trip_id']          = $result['trip_id'];
                                    $arraydetails['pickup_location']            = $result['place'];
                                    $arraydetails['booking_time']     = $result['pickup_time'];
                                    $arraydetails['pickup_time']      = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
                                    $arraydetails['booking_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['booking_time']);
                                    $arraydetails['pickup_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['pickup_time']);
                                    $arraydetails['fare']             = $result['fare'];
                                    $arraydetails['pickup_latitude']  = $result['pickup_latitude'];
                                    $arraydetails['pickup_longitude'] = $result['pickup_longitude'];
                                    $arraydetails['drop_latitude']    = $result['drop_latitude'];
                                    $arraydetails['drop_longitude']   = $result['drop_longitude'];
                                    $arraydetails['notes_driver']     = $result['notes_driver'];
                                    $arraydetails['drivername']       = $result['drivername'];
                                    $arraydetails['drop_location']    = $result['drop_location'];
                                    $arraydetails['model']            = $result['model'];
                                    $arraydetails['distance']         = $result['distance'];
                                    /* NEW CHANGES */
                                    $arraydetails['metric']            = $result['metric'];
                                    $arraydetails['driver_image']            = $result['driver_image'];
                                    $arraydetails['model_name']            = $result['model_name'];
                                    $arraydetails['taxi_no']            = $result['taxi_no'];
                                    $arraydetails['drivername']            = $result['drivername'];
                                    $arraydetails['account_type']            = $result['account_type'];
                                    $arraydetails['account_type_name']  = (!empty($result['account_type_name'])) ? current($result['account_type_name']) : '';
                                    
                                    $convertSeconds = $result['waitingtime'] * 3600;
                                    $converthours   = floor($convertSeconds / 3600);
                                    $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                                    $convertsecs    = floor($convertSeconds % 60);
                                    $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                                    $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                                    $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                                    $waitingTime    = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS : $waitM .':' . $waitS;
                                    $arraydetails['waiting_time']    = $waitingTime;    
                                    
                                    /* NEW CHANGES */
                                    
                                    $date                             = $result['pickup_time'];
                                    if ($j == ($limit + $start)) {
                                        break;
                                    } else {
                                        $alldetails[] = $arraydetails;
                                    }
                                    $j++;
                                }
                                if (count($alldetails) > 0) {
                                    $perdayarray[] = [
                                        //"trip_Date" => $req_date,
                                        "trip_details" => $alldetails
                                    ];
                                }
                            }
                            
                            if (count($perdayarray) > 0) {
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $perdayarray,
                                    "status" => 1,
                                    "site_currency" => $this->site_currency
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_completed_data_month'),
                                    "status" => 0,
                                    "site_currency" => $this->site_currency
                                ];
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1234/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=completed_journey&id=1&start=0&limit=5
                //Company URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=completed_journey&id=1&start=0&limit=5
                case 'completed_journey':
                    $array = $mobiledata;
                    if ($array['id'] != '') {
                        $userid       = $array['id'];
                        $start        = $array['start'];
                        $limit        = $array['limit'];
                        $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1,
                                "site_currency" => $this->site_currency
                            ];
                            echo json_encode($message);
                            exit;
                            ;
                        }
                        //Getting from Passenger Model Directly
                        $passengers           = Model::factory('passengers');
                        $passengers_all_compl = $api->get_passenger_log_detail($userid, 1, 'A', '1', $start, $limit, $default_companyid);
                        //print_r($passengers_all_compl);
                        if (count($passengers_all_compl) > 0) {
                            $message = [
                                "message" => __('success'),
                                "detail" => $passengers_all_compl,
                                "currency" => $this->site_currency
                            ];
                        } else {
                            $message = [
                                "message" => __('no_completed_data'),
                                "status" => 0,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
                    break;
                // Cancelled Trip by Passenger
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=cancelled_journey&id=1&start=0&limit=5&device_type=1
                case 'cancelled_journey':
                    $cancel_array = $mobiledata;
                    if ($cancel_array['id'] != null) {
                        $validator = $this->coming_cancel($array);
                        if ($validator->check()) {
                            $userid       = $cancel_array['id'];
                            $start        = $cancel_array['start'];
                            $limit        = $cancel_array['limit'];
                            $device_type  = $cancel_array['device_type'];
                            $check_result = $api->check_passenger_companydetails($userid, $default_companyid);
                            if ($check_result == 0) {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => -1
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $passengers_cancel = $api->get_passenger_cancelled_trip_details($default_companyid, $pagination, $userid, '', 'A', '', $start, $limit);
                            //print_r($passengers_cancel);  
                            $trip_details      = [];
                            $i                 = 0;
                            $alldetails        = [];
                            if (count($passengers_cancel) > 0) {
                                foreach ($passengers_cancel as $journey) {
                                    $driver_id                            = $journey['driver_id'];
                                    $payment_type                         = $journey['payment_type'];
                                    $driver_image                         = $journey['driver_image'];
                                    $trip_details['trip_id']              = $journey['passengers_log_id'];
                                    $trip_details['pickup_location']      = $journey['pickup_location'];
                                    $trip_details['pickup_latitude']      = $journey['pickup_latitude'];
                                    $trip_details['pickup_longitude']     = $journey['pickup_longitude'];
                                    $trip_details['drop_location']        = $journey['drop_location'];
                                    $trip_details['drop_latitude']        = $journey['drop_latitude'];
                                    $trip_details['drop_longitude']       = $journey['drop_longitude'];
                                    $trip_details['pickup_time']          = $journey['pickup_time'];
                                    $trip_details['time_to_reach_passen'] = $journey['time_to_reach_passen'];
                                    $trip_details['driver_name']          = $journey['driver_name'];
                                    $trip_details['driver_id']            = $journey['driver_id'];
                                    $trip_details['taxi_id']              = $journey['taxi_id'];
                                    $trip_details['taxi_number']          = $journey['taxi_no'];
                                    $trip_details['driver_phone']         = $journey['driver_phone'];
                                    $trip_details['passenger_name']       = $journey['passenger_name'];
                                    $trip_details['travel_status']        = $journey['travel_status'];
                                    $trip_details['amt']                  = $journey['amt'];
                                    $trip_details['job_ref']              = $journey['job_ref'];
                                    $paymentname                          = "";
                                    $paymentname_sql                      = $api->get_payment_name($journey['payment_type']);
                                    if (count($paymentname_sql) > 0) {
                                        $paymentname = $paymentname_sql[0]['pay_mod_name'];
                                    }
                                    $trip_details['payment_type'] = $paymentname;
                                    /************************************Driver Image *******************************/
                                    $driver_image                 = URL_BASE . SITE_DRIVER_IMGPATH . $driver_image;
                                    if (file_exists($driver_image) && $driver_image != '') {
                                        $driver_image = URL_BASE . SITE_DRIVER_IMGPATH . $driver_image;
                                    } else {
                                        $driver_image = URL_BASE . "/public/images/noimages109.png";
                                    }
                                    $trip_details['driver_image'] = $driver_image;
                                    $alldetails[]                 = $trip_details;
                                    $i                            = $i + 1;
                                }
                                if (SMS == 1) {
                                    //$this->phone=$this->commonmodel->get_drivers_details($email,1);
                                    $message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
                                    //$to = isset($this->phone[0]['phone'])?$this->phone[0]['phone']:'';
                                    $to              = $api->get_driver_phone_by_id($driver_id);
                                    $message         = $message_details['sms_description'];
                                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                    $api->sendSMS($to, $message);
                                    //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");                             
                                }
                                //$message = $passengers_cancel;
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $alldetails,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_data'),
                                    "status" => 0
                                ];
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:100/api/index/dGF4aV9hbGw=?type=coming_trips&id=1&start=0&limit=10&device_type=1
                case 'coming_trips':
                    $passenger_list_array = $mobiledata;
                    //Current Journey after driver confirmation //TN1013619352
                    if ($passenger_list_array['id'] != null) {
                        $validator = $this->coming_cancel($passenger_list_array);
                        if ($validator->check()) {
                            $userid       = $passenger_list_array['id'];
                            $start        = $passenger_list_array['start'];
                            $limit        = $passenger_list_array['limit'];
                            $device_type  = $passenger_list_array['device_type'];
                            $check_result = $api->check_passenger_companydetails($passenger_list_array['id'], $default_companyid);
                            if ($check_result == 0) {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => -1
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $passengers_current = $api->get_passenger_current_log_details($default_companyid, $pagination, $userid, '', 'A', '0', $start, $limit);
                            if (count($passengers_current) > 0) {
                                //$message = $passengers_current;
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $passengers_current,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_data'),
                                    "status" => 0
                                ];
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                case 'booking_list':
                    //Current Journey after driver confirmation //TN1013619352
                    $array = $mobiledata;
                    
                    $ids = [];
                    if($array['child_id'] == "") {
                        $childs = $api->get_passenger_childlist($array['id'],'');
                        foreach($childs as $child) {
                            $ids[] = (int)$child['_id'];
                        }
                    } else {
                        $ids[] = (int)$array['child_id'];
                    }
                    
                    if ($array['id'] != null) {
                        $validator = $this->coming_cancel($array);
                        if ($validator->check()) {
                            $userid       = $array['id'];
                            $start        = $array['start'];
                            $limit        = $array['limit'];
                            $device_type  = $array['device_type'];
                            $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                            if ($check_result == 0) {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => -1
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $passengers_trips = [];
                            
                            $pending_bookings_zero = $api->get_pending_bookings_travel_statuszero($default_companyid, $pagination, $ids, '0', 'A', '0', $start, $limit);
                             foreach ($pending_bookings_zero as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $pending_bookings_zero[$key]['pickup_time'] = $pickup_time;
                                $acc = (!empty($val['account_type_name'])) ? current($val['account_type_name']) : '';
                                $pending_bookings_zero[$key]['account_type_name']    = $acc;
                                  switch ($val['travel_status']) {
                                      case 0:
                                        $pending_bookings_zero[$key]['travel_msg'] = "Waiting for driver";
                                        break;
                             }
                            }
                            
                           //print "<pre>"; print_r($pending_bookings_zero);exit;
                            $pending_bookings = $api->get_pending_bookings($default_companyid, $pagination, $ids, '', 'A', '0', $start, $limit);
                            //print "<pre>"; print_r($pending_bookings);exit;
                            foreach ($pending_bookings as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $pending_bookings[$key]['pickup_time'] = $pickup_time;
                                $acc = (!empty($val['account_type_name'])) ? current($val['account_type_name']) : '';
                                $pending_bookings[$key]['account_type_name']    = $acc;
                                switch ($val['travel_status']) {
                                    
                                    case 1:
                                        $pending_bookings[$key]['travel_msg'] = "Fare Updated";
                                        break;
                                    case 2:
                                        $pending_bookings[$key]['travel_msg'] = "Inprogress";
                                        break;
                                    case 3:
                                        $pending_bookings[$key]['travel_msg'] = "Arrived";
                                        break;
                                    case 5:
                                        $pending_bookings[$key]['travel_msg'] = "Completed";
                                        break;
                                    case 9:
                                        $pending_bookings[$key]['travel_msg'] = "Trip Confirmed";
                                        break;
                                    default:
                                        $pending_bookings[$key]['travel_msg'] = "Cancelled";
                                        break;
                                }
                            }
                            
                            $past_bookings                        = $api->get_past_bookings($ids, 1, 'A', '1', $start, $limit, $default_companyid);
                            //print "<pre>"; print_r($past_bookings);exit;
                            foreach ($past_bookings as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $past_bookings[$key]['pickup_time'] = $pickup_time;
                                $drop_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['drop_time']);
                                $past_bookings[$key]['drop_time'] = $drop_time;
                                $acc = (!empty($val['account_type_name'])) ? current($val['account_type_name']) : '';
                                $metric = (!empty($val['metric'])) ? current($val['metric']) : '';
                                $past_bookings[$key]['account_type_name']    = $acc;
                                $past_bookings[$key]['metric']    = $metric;
                                
                                $convertSeconds = $val['waitingtime'] * 3600;
                                $converthours   = floor($convertSeconds / 3600);
                                $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                                $convertsecs    = floor($convertSeconds % 60);
                                $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                                $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                                $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                                $waitingTime    = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS : $waitM .':' . $waitS;
                                $past_bookings[$key]['waiting_time']    = $waitingTime;
                                $past_bookings[$key]['tags'] = isset($val['tags'])?$val['tags']:[];
                                $past_bookings[$key]['ratings'] = isset($val['ratings'])?$val['ratings']:'';
                              
                            }
                            $passengers_trips['pending_bookings'] = array_merge($pending_bookings,$pending_bookings_zero);
                            $passengers_trips['past_bookings']    = $past_bookings;
                            if (count($passengers_trips) > 0) {
                                //$message = $passengers_current;
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $passengers_trips,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_data'),
                                    "status" => 0
                                ];
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                    
                /** CHILD  TRIP BOOKING  **/
                case 'childtrip_booking_list':
                    //Current Journey after driver confirmation //TN1013619352
                    $array = $mobiledata;
                    //print_r($array);
                    if ($array['id'] != null) {
                        $validator = $this->coming_cancel($array);
                        if ($validator->check()) {
                            $userid       = $array['id'];
                            $start        = $array['start'];
                            $limit        = $array['limit'];
                            $device_type  = $array['device_type'];
                            $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                            if ($check_result == 0) {
                                $message = [
                                    "message" => __('invalid_user'),
                                    "status" => -1
                                ];
                                echo json_encode($message);
                                exit;
                            }
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $passengers_trips = [];
                            //$pending_bookings = array();
                            //$past_bookings    = array();
                            
                            /** CHILD TRIP BOOKING **/
                                $get_child_details = $api->get_passenger_childlist($userid,'');
                                if(!empty($get_child_details)){
                                //print_r($get_child_details);exit;
                                foreach($get_child_details as $get_child){
                                    //echo $get_child['_id']."-".$get_child['name'];
                                    /** PASSENGERS PROFILE PHOTO **/
                                   if ((!empty($get_child['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                /** PASSENGERS PROFILE PHOTO **/
                                
                                
                                
                            /** CHILD TRIP BOOKING **/
                            
                              
                            $pending_bookings_zero = $api->get_pending_bookings_travel_statuszero($default_companyid, $pagination, $get_child['_id'], '0', 'A', '0', $start, $limit);
                             foreach ($pending_bookings_zero as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $pending_bookings_zero[$key]['pickup_time'] = $pickup_time;
                                  switch ($val['travel_status']) {
                                      case 0:
                                        $pending_bookings_zero[$key]['travel_msg'] = "upcoming";
                                        break;
                             }
                            }
                            
                           //print_r($pending_bookings_zero);exit;
                            $pending_bookings = $api->get_pending_bookings($default_companyid, $pagination, $get_child['_id'], '', 'A', '0', $start, $limit);
                            
                            foreach ($pending_bookings as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $pending_bookings[$key]['pickup_time'] = $pickup_time;
                                switch ($val['travel_status']) {
                                    
                                    case 1:
                                        $pending_bookings[$key]['travel_msg'] = "Fare Updated";
                                        break;
                                    case 2:
                                        $pending_bookings[$key]['travel_msg'] = "Inprogress";
                                        break;
                                    case 3:
                                        $pending_bookings[$key]['travel_msg'] = "Arrived";
                                        break;
                                    case 5:
                                        $pending_bookings[$key]['travel_msg'] = "Completed";
                                        break;
                                    case 9:
                                        $pending_bookings[$key]['travel_msg'] = "Confirmed";
                                        break;
                                    default:
                                        $pending_bookings[$key]['travel_msg'] = "Cancelled";
                                        break;
                                }
                            }
                            
                            $new = array_merge($pending_bookings,$pending_bookings_zero);
                            $passengers_trips['pending_bookings'] = $new;
                            //$passengers_trips['past_bookings'] = $response;
                            $past_bookings                        = $api->get_past_bookings($get_child['_id'], 1, 'A', '1', $start, $limit, $default_companyid);
                            if(count($past_bookings) > 0 ) {
                            foreach ($past_bookings as $key => $val) {
                                $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                                $past_bookings[$key]['pickup_time'] = $pickup_time;
                                $drop_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['drop_time']);
                                $past_bookings[$key]['drop_time'] = $drop_time;
                                $past_bookings[$key]['passenger_name']    = current($val['passenger_name']);
                                $past_bookings[$key]['passenger_image']    = current($val['passenger_image']);
                                $past_bookings[$key]['passenger_id']    = current($val['passenger_id']);
                                $past_bookings[$key]['metric']    = current($val['metric']);
                            
                            }
                            $passengers_trips['past_bookings']    = $past_bookings;
                            }
                                      
                        }
                    
                            if (count($passengers_trips) > 0) {
                                //$message = $passengers_current;
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $passengers_trips,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_data'),
                                    "status" => 0
                                ];
                            }
                            
                         
                        }else{
                            $message = [
                                "message" => __('no_child'),
                                "status" => 2
                            ];
                        }
                            
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                
                 case 'childtrip_completed_journey_monthwise':
                    $array = $mobiledata;
                    if ($array['passenger_id'] != null) {
                        $validator = $this->trip_history_month_wise($array);
                        if ($validator->check()) {
                            $userid      = $array['passenger_id'];
                            $start       = $array['start'];
                            $limit       = $array['limit'];
                            $month       = $array['month'];
                            $year        = $array['year'];
                            $device_type = $array['device_type']; // 1 Android , 2 - IOS
                            //Getting from Passenger Model Directly
                            $passengers  = Model::factory('passengers');
                            // Booktype 0 -> Flagger Ride, 1-> Strret Ride, 2-> All
                            $booktype    = "2";
                            // all records from 1 month //
                            //$fromdate = $year.'-'.$month.'-'.'01';
                            //$todate = date('Y-m-t', strtotime($fromdate));
                            if ($device_type == 1) {
                                $fromdate = $year . '-' . $month . '-' . '01';
                                $todate   = $year . '-' . $month . '-' . '31';
                            } else {
                                $fromdate = $year . '-' . $month . '-' . '01';
                                $todate   = date('Y-m-t', strtotime($fromdate));
                            }
                            $arraydetails = [];
                            //$alldetails = array();
                            $perdayarray  = [];
                            $pagination   = 1;
                            $j            = $start;
                            
                             /** CHILD TRIP BOOKING **/
                                $get_child_details = $api->get_passenger_childlist($userid,'');
                                if(!empty($get_child_details)){
                                //print_r($get_child_details);exit;
                                foreach($get_child_details as $get_child){
                                    //echo $get_child['_id']."-".$get_child['name'];
                                    /** PASSENGERS PROFILE PHOTO **/
                                   if ((!empty($get_child['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                /** PASSENGERS PROFILE PHOTO **/
                                
                            //$past_bookings_new['child_id'] = $get_child['_id'];
                            //$past_bookings_new['child_name'] = $get_child['name'];
                            //$past_bookings_new['child_profile_image'] = $profile_image;   
                                
                            /** CHILD TRIP BOOKING **/
                            
                            
                            
                            $passengers_all_compl = $api->get_passenger_trips_bymonth($pagination, $booktype, $get_child['_id'], 1, 'A', '1', $start, $limit, $fromdate, $todate);
                            
                                
                            $alldetails = [];    
                           
                            if (count($passengers_all_compl) > 0) {
                                
                                foreach ($passengers_all_compl as $result) {
                                    $arraydetails['trip_id']          = $result['trip_id'];
                                    $arraydetails['place']            = $result['place'];
                                    $arraydetails['booking_time']     = $result['pickup_time'];
                                    $arraydetails['pickup_time']      = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
                                    $arraydetails['booking_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['booking_time']);
                                    $arraydetails['pickup_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['pickup_time']);
                                    $arraydetails['fare']             = $result['fare'];
                                    $arraydetails['pickup_latitude']  = $result['pickup_latitude'];
                                    $arraydetails['pickup_longitude'] = $result['pickup_longitude'];
                                    $arraydetails['drop_latitude']    = $result['drop_latitude'];
                                    $arraydetails['drop_longitude']   = $result['drop_longitude'];
                                    $arraydetails['notes_driver']     = $result['notes_driver'];
                                    $arraydetails['drivername']       = $result['drivername'];
                                    $arraydetails['drop_location']    = $result['drop_location'];
                                    $arraydetails['model']            = $result['model'];
                                    //$arraydetails['distance']         = $result['distance'].' '.UNIT_NAME;
                                    $arraydetails['distance']         = $result['distance'];
                                    /* NEW CHANGES */
                                    $arraydetails['metric']            = $result['metric'];
                                    $arraydetails['driver_image']            = $result['driver_image'];
                                    $arraydetails['model_name']            = $result['model_name'];
                                    $arraydetails['taxi_no']            = $result['taxi_no'];
                                    $arraydetails['drivername']            = $result['drivername'];
                                    
                                    /* NEW CHANGES */
                                    
                                    
                                    
                                    $date                             = $result['pickup_time'];
                                    if ($j == ($limit + $start)) {
                                        break;
                                    } else {
                                        $alldetails[] = $arraydetails;
                                    }
                                    $j++;
                                }
                                  $total_array = [
                                        "trip_details" => $alldetails
                                    ];
                                
                                //$alldetails = array_merge($alldetails,$past_bookings_new);
                            }
                            
                                }//foreach
                                //print_r($total_array);exit;
                                if (count($total_array) > 0) {
                                    $perdayarray[] = $total_array;
                                }
                            
                            
                            
                            
                           
                            
                            if (count($perdayarray) > 0) {
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $perdayarray,
                                    "status" => 1,
                                    "site_currency" => $this->site_currency
                                ];
                            } else {
                                $message = [
                                    "message" => __('no_completed_data_month'),
                                    "status" => 0,
                                    "site_currency" => $this->site_currency
                                ];
                            }
                        }else{
                            $message = [
                                "message" => __('no_child'),
                                "status" => 2
                            ];
                        }
                        
                    }  else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
                    break;
                    
                    
                  case 'childtrip_completed_journey_datewise':
                    $array = $mobiledata;
                    if ($array['passenger_id'] != null) {
                        $validator = $this->trip_history_date_wise($array);
                        if ($validator->check()) {
                            $userid       = $array['passenger_id'];
                            $start        = $array['start'];
                            $limit        = $array['limit'];
                            $date         = $array['date'];
                            $device_type  = $array['device_type']; // 1 Android , 2 - IOS
                            //Getting from Passenger Model Directly
                            $passengers   = Model::factory('passengers');
                            $booktype     = "2";
                            $fromdate     = $date . ' 00:00:01';
                            $todate       = $date . ' 23:59:59';
                            $arraydetails = [];
                            $alldetails   = [];
                            if ($device_type == 1)
                                $pagination = 1;
                            else
                                $pagination = 0;
                            $total_array = [];
                            
                             /** CHILD TRIP BOOKING **/
                                $get_child_details = $api->get_passenger_childlist($userid,'');
                                if(!empty($get_child_details)){
                                //print_r($get_child_details);exit;
                                foreach($get_child_details as $get_child){
                                    //echo $get_child['_id']."-".$get_child['name'];
                                    /** PASSENGERS PROFILE PHOTO **/
                                   if ((!empty($get_child['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                /** PASSENGERS PROFILE PHOTO **/
                                
                            //$past_bookings_new['child_id'] = $get_child['_id'];
                        //$past_bookings_new['child_name'] = $get_child['name'];
                            //$past_bookings_new['child_profile_image'] = $profile_image;   
                                
                            /** CHILD TRIP BOOKING **/
                            
                            
                            
                            
                            for ($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i)) {
                                $cdate                = date("Y-m-d", $i);
                                $passengers_all_compl = $api->get_passenger_trips_bydate($pagination, $booktype, $get_child['_id'], 1, 'A', '1', $start, $limit, $cdate);
                                
                                if (count($passengers_all_compl) > 0) {
                                    foreach ($passengers_all_compl as $result) {
                                        $arraydetails['trip_id']          = $result['trip_id'];
                                        $arraydetails['place']            = $result['place'];
                                        $arraydetails['booking_time']     = $result['pickup_time'];
                                        $arraydetails['pickup_time']      = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
                                        $arraydetails['booking_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['booking_time']);
                                        $arraydetails['pickup_time']  =  Commonfunction::convertphpdate('Y-m-d h:i:s A',$arraydetails['pickup_time']);
                                        $arraydetails['fare']             = $result['fare'];
                                        $arraydetails['pickup_latitude']  = $result['pickup_latitude'];
                                        $arraydetails['pickup_longitude'] = $result['pickup_longitude'];
                                        $arraydetails['drop_latitude']    = $result['drop_latitude'];
                                        $arraydetails['drop_longitude']   = $result['drop_longitude'];
                                        $arraydetails['notes_driver']     = $result['notes_driver'];
                                        $arraydetails['drivername']       = $result['drivername'];
                                        $arraydetails['drop_location']    = $result['drop_location'];
                                        $arraydetails['taxi_no']          = $result['taxi_no'];
                                        $arraydetails['model']            = $result['model'];
                                        $arraydetails['distance']         = $result['distance'].' '.UNIT_NAME;
                                        $arraydetails['distance']         = $result['distance'];
                                    /* NEW CHANGES */
                                    $arraydetails['metric']            = $result['metric'];
                                    $arraydetails['driver_image']            = $result['driver_image'];
                                    $arraydetails['model_name']            = $result['model_name'];
                                    $arraydetails['taxi_no']            = $result['taxi_no'];
                                    $arraydetails['drivername']            = $result['drivername'];
                                        $date                             = $result['pickup_time'];
                                        $alldetails[]                     = $arraydetails;
                                    }
                                    
                                   //  $total_array = array_merge($total_array,$past_bookings_new);
                                   //  $total_array = array_merge($total_array,$past_bookings_new);
                                    $total_array = [
                                        "trip_Date" => $cdate,
                                        "trip_details" => $alldetails
                                    ];
                                }
                            }
                           
                        }
                            if (count($total_array) > 0) {
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $total_array,
                                    "status" => 1,
                                    "site_currency" => $this->site_currency
                                ];
                                //$message = $passengers_all_compl;
                            } else {
                                $message = [
                                    "message" => __('no_completed_data_date'),
                                    "status" => 0,
                                    "site_currency" => $this->site_currency
                                ];
                            }
                            }else{
                            $message = [
                                "message" => __('no_child'),
                                "status" => 2
                            ];
                        }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2,
                                "site_currency" => $this->site_currency
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1,
                            "site_currency" => $this->site_currency
                        ];
                    }
                    echo json_encode($message);
                    break;   
                    
                    
                /** CHILD  TRIP BOOKING  **/    
                    
                    
                case 'driver_booking_list':
                    //Current Journey after driver confirmation //TN1013619352
                    $driver_list_array = $mobiledata;
                    if ($driver_list_array['driver_id'] != null) {
                        $validator = $this->driver_coming_cancel($driver_list_array);
                        if ($validator->check()) {
                            $driver_id               = $driver_list_array['driver_id'];
                            $start                   = $driver_list_array['start'];
                            $limit                   = $driver_list_array['limit'];
                            $device_type             = $driver_list_array['device_type'];
                            
                            /*if($device_type == 1)
                            $pagination = 1;
                            else
                            $pagination = 0;*/
                            
                            $pagination              = 0;
                            //$ongoing_journey = array();
                            /***********************Driver Upcoming******************************/
                            $driver_pending_bookings = $api->driver_pending_bookings($driver_id, 'R', 'A', '2', $default_companyid);
                            
                            if (count($driver_pending_bookings) > 0) {
                                foreach ($driver_pending_bookings as $key => $journey) {

                                    $passenger_photo = isset($journey['passenger_profile_image']) ? $journey['passenger_profile_image'] : '';
                                    $driver_pending_bookings[$key]['distance'] = isset($journey['distance'])?$journey['distance']:0;
                                    
                                    $driver_pending_bookings[$key]['tags'] = isset($journey['tags'])?$journey['tags']:[];
                                    if ((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo)) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo;
                                    } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                    }
                                    $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$journey['pickup_time']);
                                    $driver_pending_bookings[$key]['pickup_time'] = $pickup_time;
                                    $driver_pending_bookings[$key]['profile_image'] = $profile_image;
                                    $driver_pending_bookings[$key]['drivername']    = current($journey['drivername']);

                                    
                                    $payment_type                                   = isset($journey['payment_type'][0]) ? $journey['payment_type'][0]: '';
                                    switch ($payment_type) {
                                        case 1:
                                            $driver_pending_bookings[$key]['payment_type'] = "Cash";
                                            break;
                                        case 2:
                                            $driver_pending_bookings[$key]['payment_type'] = "Credit Card";
                                            break;
                                        case 3:
                                            $driver_pending_bookings[$key]['payment_type'] = "Online-Knet";
                                            break;
                                        case 6:
                                            $driver_pending_bookings[$key]['payment_type'] = "Card";
                                            break;
                                        default:
                                            $driver_pending_bookings[$key]['payment_type'] = "Cash";
                                            break;
                                    }
                                }                               
                            }                           
                            $booktype        = 1;
                            $pending_booking = $api->driver_past_bookings($pagination, $booktype, $driver_id, 'R', 'A', '1', $start, $limit, $default_companyid);
                            //print_r($pending_booking);exit;
                            foreach ($pending_booking as $key => $journey) {
                        $passenger_photo = isset($journey['profile_image'][0]) ? $journey['profile_image'][0] : '';//exit;
            $pending_booking[$key]['distance'] = isset($journey['distance'])?$journey['distance']:0;
                    $pending_booking[$key]['tags'] = isset($journey['tags'])?$journey['tags']:[];
            $pending_booking[$key]['ratings'] = isset($journey['ratings'])?$journey['ratings']:'';
            $advance_payment = isset($journey['advance_payment'])?$journey['advance_payment']:0;
            if($advance_payment == 1)
            {
               $pending_booking[$key]['amt'] = isset($journey['pending_amt'])?$journey['pending_amt']:0; 
            }
            else
            {
                $pending_booking[$key]['amt'] = isset($journey['amt'])?$journey['amt']:0;
            }

                                if ((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo)) {
                                    $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo;
                                } else {
                                    $profile_image = URL_BASE . "public/images/no_image109.png";
                                }
                                $pending_booking[$key]['profile_image'] = $profile_image;
                                $pickup_time = Commonfunction::convertphpdate('Y-m-d H:i:s',$journey['pickup_time']);
                                $pending_booking[$key]['pickup_time'] = Commonfunction::convertphpdate('d-M-Y h:i:s A',$journey['pickup_time']);
                                $act_pickup_time = Commonfunction::convertphpdate('Y-m-d H:i:s',$journey['actual_pickup_time']);
                                $pending_booking[$key]['actual_pickup_time'] = Commonfunction::convertphpdate('d-M-Y h:i:s A',$journey['actual_pickup_time']);
                                $drop_time = Commonfunction::convertphpdate('Y-m-d H:i:s',$journey['drop_time']);
                                $pending_booking[$key]['drop_time'] = Commonfunction::convertphpdate('d-M-Y h:i:s A',$journey['drop_time']);
                                $pending_booking[$key]['metric'] = $journey['metric'];
                                
                                $date1=date_create($act_pickup_time);
                                $date2=date_create($drop_time);
                                $diff=date_diff($date1,$date2);
                                
                                $pending_booking[$key]['waiting_hour'] = $journey['waiting_hour'];
                                $pending_booking[$key]['duration'] = $diff->format("%h:%i:%s");
                                //$pending_booking[$key]['duration'] = date_format($diff,'H:i:s');
                                $pending_booking[$key]['passenger_name']    = current($journey['passenger_name']);
                                $payment_type                           = isset($journey['payment_type']) ? $journey['payment_type'] : '';
                                switch ($payment_type) {
                                    case 1:
                                        $pending_booking[$key]['payment_type'] = "Cash";
                                        break;
                                    case 2:
                                        $pending_booking[$key]['payment_type'] = "Credit Card";
                                        break;
                                    case 3:
                                        $pending_booking[$key]['payment_type'] = "Online-Knet";
                                        break;
                                    case 6:
                                        $pending_booking[$key]['payment_type'] = "Card";
                                        break;
                                    default:
                                        $pending_booking[$key]['payment_type'] = "Cash";
                                        break;
                                }
                            }
                            
                            $detail  = [
                                "pending_booking" => $driver_pending_bookings,
                                "past_booking" => $pending_booking
                            ];
                            $message = [
                                "message" => __('success'),
                                "detail" => $detail,
                                "status" => 1
                            ];
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /************** Driver upcoming and ongoing details **************************/
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=driver_coming_trips&driver_id=1&start=0&limit=2&device_type=1
                case 'driver_coming_trips':
                    //Current Journey after driver confirmation //TN1013619352
                    $driver_coming_list_array = $mobiledata;
                    if ($driver_coming_list_array['driver_id'] != null) {
                        $validator = $this->driver_coming_cancel($driver_coming_list_array);
                        if ($validator->check()) {
                            $driver_id            = $driver_coming_list_array['driver_id'];
                            $start                = $driver_coming_list_array['start'];
                            $limit                = $driver_coming_list_array['limit'];
                            $device_type          = $driver_coming_list_array['device_type'];
                            /*
                            if($device_type == 1)
                            $pagination = 1;
                            else
                            $pagination = 0;
                            */
                            $pagination           = 0;
                            //$ongoing_journey = array();
                            $driver_logs_prog     = [];
                            /*************** Driver Ongoing Journey ***************************/
                            $driver_logs_progress = $api->get_driver_current_ongoigtrips($driver_id, 'R', 'A', '2', $default_companyid);
                            //print_r($driver_logs_progress);
                            //exit;
                            $driver_logs          = [];
                            if (count($driver_logs_progress) > 0) {
                                $i          = 0;
                                $alldetails = [];
                                //for($i=0;$i<count($driver_logs_progress);$i++)
                                foreach ($driver_logs_progress as $v) {
                                    if ($v['bookby'] == 2 && ($v['travel_status'] == 9 || $v['travel_status'] == 3)) {
                                        //echo "restrict";
                                        //$alldetails = __('no_ongoing_data');
                                        //$ongoing = 0;
                                    } else {
                                        $driver_logs['passenger_name']  = $v['passenger_name'];
                                        $driver_logs['passenger_phone'] = $v['passenger_phone'];
                                        if ($v['profile_image'] != "" && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . $v['profile_image'])) {
                                            $profile_image = URL_BASE . PASS_IMG_IMGPATH . $v['profile_image'];
                                        } else {
                                            $profile_image = URL_BASE . "public/images/no_image109.png";
                                        }
                                        $driver_logs['profile_image']     = $profile_image;
                                        $driver_logs['passengers_log_id'] = $v['passengers_log_id'];
                                        $driver_logs['pickup_location']   = $v['pickup_location'];
                                        $driver_logs['drop_location']     = $v['drop_location'];
                                        $driver_logs['pickup_longitude']  = $v['pickup_longitude'];
                                        $driver_logs['pickup_latitude']   = $v['pickup_latitude'];
                                        $driver_logs['drop_latitude']     = $v['drop_latitude'];
                                        $driver_logs['drop_longitude']    = $v['drop_longitude'];
                                        $driver_logs['travel_status']     = $v['travel_status'];
                                        $driver_logs['notes']             = $v['notes'];
                                        $driver_logs['distance']          = $v['distance'];
                                        $driver_logs['waiting_hour']      = $v['waiting_hour'];
                                        $driver_logs['bookby']            = $v['bookby'];
                                        //$alldetails[] = $v;
                                        $alldetails[]                     = $driver_logs;
                                        //$ongoing = 1;
                                    }
                                    $i++;
                                }
                                $ongoing = 1;
                                if (empty($alldetails)) {
                                    $alldetails = __('no_ongoing_data');
                                    $ongoing    = 0;
                                }
                                $ongoing_journey = $alldetails;
                                $ongoing_status  = $ongoing;
                                foreach ($driver_logs_progress as $key => $journey) {
                                    $passenger_photo = $journey['profile_image'];
                                    if ((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo)) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $passenger_photo;
                                    } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                    }
                                    $driver_logs_progress[$key]['profile_image'] = $profile_image;
                                }
                            } else {
                                $ongoing_journey = __('no_ongoing_data');
                                $ongoing_status  = 0;
                            }
                            /***********************Driver Upcoming******************************/
                            $driver_upcoming = $api->get_driver_current_log_details($default_companyid, $pagination, $driver_id, '', 'A', '0', $start, $limit);
                            //print_r($driver_upcoming);
                            if (count($driver_upcoming) > 0) {
                                $upcoming_journey = $driver_upcoming;
                                $upgoing_status   = 1;
                            } else {
                                $upcoming_journey = __('no_upcoming_data');
                                $upgoing_status   = 0;
                            }
                            $detail  = [
                                "ongoing_journey" => $ongoing_journey,
                                "upcoming_journey" => $upcoming_journey
                            ];
                            $message = [
                                "message" => __('success'),
                                "detail" => $detail,
                                "ongoing_status" => $ongoing_status,
                                "upcoming_status" => $upgoing_status
                            ];
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : api/?type=update_ratings_comments&pass_id=1&ratings=&comments=  
                case 'update_ratings_comments':
                    $rating_array = $mobiledata;
                    if ($rating_array['pass_id'] != null) {
                        $logvalid = $api->log_isValid($rating_array['pass_id']);
                        if($logvalid != true) {
                            $message = [
                                "message" => __('invalid_passengerlogid'),
                                "status" => 3
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        $ratings = [1,2,3,4,5];
                        if(!in_array($rating_array['ratings'],$ratings)) {
                            $message = [
                                "message" => __('invalid_ratings'),
                                "status" => 2
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        
                        $validator = $this->update_ratings_comments_validation($rating_array);
                        if ($validator->check()) {
                            $pass_id  = $rating_array['pass_id'];
                            $ratings  = $rating_array['ratings'];
                            $comments = urldecode($rating_array['comments']);
                            $driver_tags = isset($rating_array['driver_tags'])?urldecode($rating_array['driver_tags']):[];
                            $tags = explode(",",$driver_tags);
                            $api->savecomments($pass_id, $ratings, $comments,$tags);

                            $message = [
                                "message" => __('rate_comment_updated'),
                                "status" => 1
                            ];
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "detail" => $errors,
                                "status" => -2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1009/api/index/?type=get_credit_card_details&passenger_id=58&card_type=P&default=yes
                case 'get_credit_card_details':
                    $array        = $mobiledata;
                    $passenger_id = $array['passenger_id'];
                    $default      = $array['default'];
                    $card_type    = strtoupper($array['card_type']);
                    if ($array['passenger_id'] != null) {
                        $result = $api->get_creadit_card_details($passenger_id, $card_type, $default);
                      if(is_array($result)){
                        if (count($result) > 0) {
                            $carddetails = [];
                            if ($default == 'yes') {
                                $plain_cardno                         = encrypt_decrypt('decrypt', $result[0]['creditcard_no']);
                                $carddetails['creditcard_no']         = $plain_cardno;
                                $carddetails['masked_creditcard_no']  = repeatx($plain_cardno, 'X', 4);
                                $carddetails['expdatemonth']          = $result[0]['expdatemonth'];
                                $carddetails['expdateyear']           = $result[0]['expdateyear'];
                                $get_length = strlen($result[0]['creditcard_cvv']);$get_cvv='';for($i=1;$i<=$get_length;$i++){$get_cvv = $get_cvv.'X'; }

                                $carddetails['creditcard_cvv']        = $result[0]['creditcard_cvv']; //$result[0]['creditcard_cvv'];
                                $carddetails['masked_creditcard_cvv'] = $get_cvv; //repeatx($result[0]['creditcard_cvv'],'X','All');        
                                $carddetails['passenger_cardid']      = $result[0]['passenger_cardid'];
                                $carddetails['card_type']             = $result[0]['card_type'];
                                $message                              = [
                                    "message" => __('success'),
                                    "detail" => $carddetails,
                                    "status" => 1
                                ];
                            } else {
                                $i          = 0;
                                $alldetails = [];
                                foreach ($result as $value) {
                                    $plain_cardno                         = encrypt_decrypt('decrypt', $value['creditcard_no']);
                                    $carddetails['creditcard_no']         = $plain_cardno;
                                    $carddetails['masked_creditcard_no']  = repeatx($plain_cardno, 'X', 4);
                                    $carddetails['expdatemonth']          = $value['expdatemonth'];
                                    $carddetails['expdateyear']           = $value['expdateyear'];
                                    $get_length = strlen($value['creditcard_cvv']);$get_cvv='';for($i=1;$i<=$get_length;$i++){$get_cvv = $get_cvv.'X'; }
                                    $carddetails['creditcard_cvv']        = $value['creditcard_cvv']; //$value['creditcard_cvv'];
                                    $carddetails['masked_creditcard_cvv'] = $get_cvv; //repeatx($value['creditcard_cvv'],'X','All');        
                                    $carddetails['default_card']          = $value['default_card'];
                                    $carddetails['passenger_cardid']      = $value['passenger_cardid'];
                                    $carddetails['card_type']             = $value['card_type'];
                                    $alldetails[]                         = $carddetails;
                                    $i                                    = $i + 1;
                                }
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $alldetails,
                                    "status" => 1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('no_card'),
                                "status" => 2
                            ];
                        }
                    }else {
                         $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => -1
                        ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /** Credit Card delete option//
                 * URI : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=credit_card_delete
                 * Params : {"passenger_cardid":"1125","passenger_id":"123"}
                 * **/
                case 'credit_card_delete':
                    if (!empty($mobiledata['passenger_cardid']) && !empty($mobiledata['passenger_id'])) {
                        $favourite_details = $api->delete_credit_card($mobiledata['passenger_cardid'], $mobiledata['passenger_id']);
                        if ($favourite_details == 1) {
                            $message = [
                                "message" => __('credit_card_deleted'),
                                "status" => 1
                            ];
                        }elseif ($favourite_details == -1){
                         $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => -1
                        ];
                        } elseif ($favourite_details == -2){
                         $message = [
                            "message" => __('one_card_exist'),
                            "status" => -1
                        ];
                        }else {
                            $message = [
                                "message" => __('invalid_card_id'),
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_card_id'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : api/?type=update_driver_reply&pass_id=1&driver_reply=C
                case 'update_driver_reply':
                    $update_driver_array = $mobiledata;
                    if ($update_driver_array['pass_id'] != null) {
                        $pass_id      = $update_driver_array['pass_id'];
                        $driver_reply = $update_driver_array['driver_reply'];
                        $update_array = [
                            "driver_reply" => $driver_reply
                        ];
                        $api->update_table(PASSENGERS_LOG, $update_array, "passengers_log_id", $pass_id);
                        $message = [
                            "message" => __('get_another_taxi'),
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /*END OF PASSENGER DETAILS*/
                /*START OF DRIVER DETAILS*/
                //http://192.168.1.88:1000/api/index/wiOBAfPKdmAr544Tl1ayDEsUQN9Og3/?type=driver_profile&userid=6
                //URL : api/?type=driver_profile&userid=1
                case 'driver_profile':
                    $driver_array = $mobiledata;    
                     $add_model        = Model::factory('add'); // Check Passenger id is avail or not
                     $check_driver_avail = $add_model->driver_id_isValid($driver_array['userid']);                
                    if ($driver_array['userid'] != null && $check_driver_avail == 1) {
                        $check_driver_login_status = $this->is_login_status($driver_array['userid'], $default_companyid);
                        if ($check_driver_login_status == 1) {
                            $result = $api->driver_profile($driver_array['userid']);
                            
                            if (count($result) > 0) {
                                $name              = $result[0]['name'];
                                $salutation        = isset($result[0]['salutation'])?$result[0]['salutation']:'';
                                $driver_code       = isset($result[0]['driver_code'])?$result[0]['driver_code']:'';
                                $email             = $result[0]['email'];
                                $phone             = $result[0]['phone'];
                                $profile_picture   = $result[0]['profile_picture'];
                                $address           = $result[0]['address'];
                                $driver_license_id = $result[0]['driver_license_id'];
                                $lastname          = $result[0]['lastname'];
                                $bankname          = $result[0]['bankname'];
                                $bankaccount_no    = $result[0]['bankaccount_no'];
                                $taxi_no           = $result[0]['taxi_no'];
                                $password           = $result[0]['password'];
                                $starting_km           = $result[0]['starting_km'];
                               // $mapping_startdate = $result[0]['mapping_startdate'];
                              //  $mapping_enddate   = $result[0]['mapping_enddate'];
                                $model_name        = $result[0]['model_name'];
                                /************************************Driver Image *******************************/
                                $main_image_path   = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . $profile_picture;
                                $thumb_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . 'thumb_' . $profile_picture;
                                if (file_exists($main_image_path) && ($profile_picture != '')) {
                                    //echo 'as';
                                    $driver_main_image = URL_BASE . SITE_DRIVER_IMGPATH . $profile_picture;
                                } else {
                                    //echo 'as';
                                    $driver_main_image = URL_BASE . "/public/images/noimages109.png";
                                }
                                if (file_exists($thumb_image_path) && ($profile_picture != '')) {
                                    $driver_thumb_image = URL_BASE . SITE_DRIVER_IMGPATH . 'thumb_' . $profile_picture;
                                } else {
                                    $driver_thumb_image = URL_BASE . "/public/images/noimages109.png";
                                }
                                $dresult     = $api->driver_ratings($driver_array['userid']);
                                $totalrating = 5;
                                if (count($dresult) > 0) {
                                    $overall_rating       = 0;
                                    $i                    = 0;
                                    $trip_total_with_rate = 0;
                                    foreach ($dresult as $comments) {
                                        $rating_dr = isset($comments['rating'])?$comments['rating']:0;
                                        if ($rating_dr != 0)
                                            $trip_total_with_rate++;
                                        $rating = $rating_dr;
                                        //print_r($comments);
                                        $overall_rating += $rating_dr;
                                        $i++;
                                    }
                                    if ($trip_total_with_rate != 0 && $overall_rating != 0) {
                                        $totalrating = $overall_rating / $trip_total_with_rate;
                                    }
                                    $totalrating = round($totalrating);
                                }
                                $result  = [
                                    "salutation" => $salutation,
                                    "name" => $name,
                                    "lastname" => $lastname,
                                    "driver_code" => $driver_code,
                                    //"bankaccount_no" => $bankaccount_no,
                                    "email" => $email,
                                    "phone" => $phone,
                                    "main_image_path" => $driver_main_image,
                                    "thumb_image_path" => $driver_thumb_image,
                                    "address" => $address,
                                    "taxi_no" => $taxi_no,
                                    "password" => $password,
                                    "start_km" => $starting_km,
                                   // "taxi_map_from" => $mapping_startdate,
                                   // "taxi_map_to" => $mapping_enddate,
                                    "taxi_model" => $model_name,
                                    "driver_license_id" => $driver_license_id,
                                    "driver_rating" => $totalrating
                                ];
                                $message = [
                                    "message" => __('success'),
                                    "detail" => $result,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('invalid_user_driver'),
                                    "status" => 0
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_not_login'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user_driver'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1003/api/index/dGF4aV9hbGw=/?type=driver_login&phone=9999988888&password=a4321f23a0119191688621018a0b2b0b&device_id=dfff&device_token=4534534&device_type=2
                case 'driver_login':
                    $array = $mobiledata;
                    //print_r($array);
                    if (!empty($array)) {
                        $validator    = $this->driver_login_validation($array);
                        $driver_model = Model::factory('driver');
                        if ($validator->check()) {
                            $phone_exist = $api->new_check_phone_people($array, $default_companyid);
                            //$phone_exist=1;
                            if ($phone_exist == 0) {
                                $message = [
                                    "message" => __('phone_not_exists'),
                                    "status" => 2
                                ];
                                echo json_encode($message);
                                exit;
                            } else {
                                //$result = $api->driver_login($array['phone'], $array['password'], $default_companyid);
                                $result = $api->new_driver_login($array, $default_companyid);
                                
                                if (!empty($result)) {
                                    $result = current($result);
                                    //Checking the User Status                      
                                    $user_status    = $result['status'];
                                    $login_status   = $result['login_status'];
                                    $login_from     = $result['login_from'];
                                    $device_token   = $result['device_token'];
                                    $device_id      = $result['device_id'];
                                    $company_id     = $result['company_id'];
                                    $driver_id      = $result['_id'];
                                    $driver_details = $api->driver_profile($driver_id);    
                                                
                                    $get_driver_trip_details      = $api->get_driver_log_details($driver_id, $company_id);
                                    //print_r($get_driver_trip_details);exit;
                                    if ($user_status == 'D') {
                                        $message = [
                                            "message" => __('account_deactivte'),
                                            "status" => 0
                                        ];
                                    } else if ($user_status == 'T') {
                                        $message = [
                                            "message" => __('account_deactivte'),
                                            "status" => 0
                                        ];
                                    } else if (($login_status == 'S') && ($login_from == 'D') && ($device_id != $array['device_id'])) {
                                        $message = [
                                            "message" => __('already_login'),
                                            "status" => 0
                                        ];
                                    } else if (($login_status == 'S') && ($login_from == 'D') && ($device_id == $array['device_id'])) {
                                       /* AS per requirement have to change flow */
                                             $update_id        = $result['_id'];
                                             $taxi_id          = "";
                                             $update_array                 = [
                                                "notification_setting" => "1",
                                                "login_from" => "D",
                                                "login_status" => "S",
                                                "device_id" => $array['device_id'],
                                                "device_token" => $array['device_token'],
                                                "device_type" => $array['device_type'],
                                                "notification_status" => "1",
                                                "phone" => $array['phone']
                                            ];
                                           
                                            $driver_details[0]["driver_id"]        = $driver_id;
                                            // Need for update labong settings automatically
                                            $login_status_update          = $api->update_driver_phone($update_array, $update_id, $default_companyid);
                                             // Driver Statistics ********************/
                                            $driver_cancelled_trips              = $api->get_driver_cancelled_trips($driver_id, $company_id);
                                            $driver_logs_rejected                = $api->get_rejected_drivers($driver_id, $company_id);
                                            $rejected_trips                      = $driver_logs_rejected;
                                            $driver_earnings                     = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                                            $driver_tot_earnings                 = $api->get_driver_total_earnings($driver_id);
                                            $statistics                          = [];
                                            $total_trip                          = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                            
                                            foreach ($driver_earnings as $stat) {
                                                $total_trip++;
                                                $total_ratings += $stat['rating'];
                                                $total_amount += $stat['total_amount'];
                                            }
                                            
                                            //echo $total_trip;
                                            
                                            
                                            
                                            
                                            $overall_trip                           = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                            $time_driven                            = $api->get_time_driven($driver_id, 'R', 'A', '1','1');
                                            $waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                                            $statistics                             = [
                                                "total_trip" => $overall_trip,
                                                "completed_trip" => $total_trip,
                                                "total_earnings" => round($driver_tot_earnings, 2),
                                                "overall_rejected_trips" => $rejected_trips,
                                                "cancelled_trips" => $driver_cancelled_trips,
                                                "today_earnings" => round($total_amount, 2),
                                                "shift_status" => 'IN',
                                                "time_driven" => $time_driven,
                                                "waiting_time" => $waittime,
                                                "status" => 1
                                            ];
                                            $driver_details[0]["driver_statistics"] = $statistics;
                                            /**************************************************/
                                            $details                                = [
                                                "driver_details" => $driver_details
                                            ];
                                            $message                                = [
                                                "message" => __('login_success'),
                                                "status" => 1,
                                                "detail" => $details
                                            ];
                                        /* AS per requirement have to change flow */
                                        }  else {
                                        /* AS per requirement have to change flow */
                                             $update_id        = $result['_id'];
                                             $driver_details[0]["driver_id"]        = $update_id;
                                             $taxi_id          = "";
                                             $update_array                 = [
                                                "notification_setting" => "1",
                                                "login_from" => "D",
                                                "login_status" => "S",
                                                "device_id" => $array['device_id'],
                                                "device_token" => $array['device_token'],
                                                "device_type" => $array['device_type'],
                                                "notification_status" => "1"
                                            ];
                                            // Need for update labong settings automatically
                                            $login_status_update          = $api->update_driver_phone($update_array, $update_id, $default_companyid);
                                             // Driver Statistics ********************/
                                            $driver_cancelled_trips              = $api->get_driver_cancelled_trips($driver_id, $company_id);
                                            $driver_logs_rejected                = $api->get_rejected_drivers($driver_id, $company_id);
                                            $rejected_trips                      = $driver_logs_rejected;
                                            $driver_earnings                     = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                                            $driver_tot_earnings                 = $api->get_driver_total_earnings($driver_id);
                                            $statistics                          = [];
                                            $total_trip                          = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                            foreach ($driver_earnings as $stat) {
                                                $total_trip++;
                                                $total_ratings += $stat['rating'];
                                                $total_amount += $stat['total_amount'];
                                            }
                                            $overall_trip                           = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                            $time_driven                            = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                                            $statistics                             = [
                                                "total_trip" => $overall_trip,
                                                "completed_trip" => $total_trip,
                                                "total_earnings" => round($driver_tot_earnings, 2),
                                                "overall_rejected_trips" => $rejected_trips,
                                                "cancelled_trips" => $driver_cancelled_trips,
                                                "today_earnings" => round($total_amount, 2),
                                                "shift_status" => 'IN',
                                                "time_driven" => $time_driven,
                                                "waiting_time" => $waittime,
                                                "status" => 1
                                            ];
                                            $driver_details[0]["driver_statistics"] = $statistics;
                                            /**************************************************/
                                            $details                                = [
                                                "driver_details" => $driver_details
                                            ];
                                            $message                                = [
                                                "message" => __('login_success'),
                                                "status" => 1,
                                                "detail" => $details
                                            ];
                                        /* AS per requirement have to change flow */
                                        
                                           
                                        } 
                                    
                                } else {
                                    $message = [
                                        "message" => __('password_failed'),
                                        "status" => -1
                                    ];
                                }
                                echo json_encode($message);
                            }
                        } else {
                            $errors  = $validator->errors('errors');
                            $message = [
                                "message" => __('validation_error'),
                                "status" => -5,
                                "detail" => $errors
                            ];
                            echo json_encode($message);
                            exit;
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => -6
                        ];
                        echo json_encode($message);
                    }
                    break;
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=edit_driver_profile&driver_id=3&email=senthilkumar.a@ndot.in&phone=9999988888&salutation=Mr&firstname=senthil&lastname=kumar&password=e10adc3949ba59abbe56e057f20f883e&org_password=123456&profile_picture=&bankname=&bankaccount_no=
                case 'edit_driver_profile':
                    $d_personal_array = $mobiledata;
                    if (!empty($d_personal_array)) {
                        $driver_id = $d_personal_array['driver_id'];
                        $taxi_id = $d_personal_array['taxi_id'];
                        $start_km = $d_personal_array['start_km'];
                        if ($d_personal_array["driver_id"] != null) {
                            $validator = $this->edit_passenger_profile_validation($d_personal_array);
                            if ($validator->check()) {
                                $d_email        = $d_personal_array['email'];
                                $d_phone        = $d_personal_array['phone'];
                                //$bankname       = $d_personal_array['bankname'];
                                //$bankaccount_no = $d_personal_array['bankaccount_no'];
                                $email_exist    = $api->edit_check_email_people($d_email, $driver_id);
                                $phone_exist    = $api->edit_check_phone_people($d_phone, $driver_id);
                                if ($email_exist > 0) {
                                    $message = [
                                        "message" => __('email_exists'),
                                        "status" => 0
                                    ];
                                }/* else if ($phone_exist > 0) {
                                    $message = array(
                                        "message" => __('phone_exists'),
                                        "status" => 2
                                    );
                                } */else {
                                    /*
                                    $bank_array = array(
                                                    "companydetails.bankname" => $bankname,
                                                    "companydetails.bankaccount_no" => $bankaccount_no
                                                );  */
                                                $password       = Html::chars(md5($d_personal_array['password']));
                                    $update_array = [
                                                    //  "salutation" => $d_personal_array['salutation'],
                                                        "name" => $d_personal_array['firstname'],
                                                        "lastname" => $d_personal_array['lastname'],
                                                        "email" => $d_email,
                                                        "phone" => $d_phone,
                                                        "password" => $password,
                                                        "org_password" => $d_personal_array['password']
                                                    ];                                  
                                    
                                    if ($d_personal_array['profile_picture'] != NULL) {
                                        /* Profile Update */
                                        $imgdata   = base64_decode($d_personal_array['profile_picture']);
                                        $f         = finfo_open();
                                        $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                        $mime_type = explode('/', $mime_type);
                                        $mime_type = $mime_type[1];
                                        $img       = imagecreatefromstring($imgdata);
                                        if ($img != false) {
                                            $result = $api->driver_profile($d_personal_array['driver_id'], $default_companyid);
                                            if (count($result) > 0) {
                                                $profile_picture  = $result[0]['profile_picture'];
                                                $thumb_image      = 'thumb_' . $profile_picture;
                                                $main_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . $profile_picture;
                                                $thumb_image_path = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . 'thumb_' . $profile_picture;
                                                if (file_exists($main_image_path) && ($profile_picture != "")) {
                                                    unlink($main_image_path);
                                                }
                                                if (file_exists($thumb_image_path) && ($thumb_image != "")) {
                                                    unlink($thumb_image_path);
                                                }
                                            } //unlink($filename);
                                            $image_name       = uniqid() . '.' . $mime_type;
                                            $thumb_image_name = 'thumb_' . $image_name;
                                            $image_url        = DOCROOT . SITE_DRIVER_IMGPATH . '/' . $image_name;                  
                                            $image_path       = DOCROOT . SITE_DRIVER_IMGPATH . $image_name;
                                            imagejpeg($img, $image_url);
                                            imagedestroy($img);
                                            chmod($image_path, 0777);
                                            $d_image = Image::factory($image_path);
                                            $path11  = DOCROOT . SITE_DRIVER_IMGPATH;
                                            Commonfunction::imageoriginalsize($d_image, $path11, $image_name, 90);
                                            $path12 = $thumb_image_name;
                                            Commonfunction::imageresize($d_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                                            //Commonfunction::imageoriginalsize($d_image,$path11,$thumb_image_name,90);
                                            $update_array["profile_picture"] = $image_name;
                                        } else {
                                            $message = [
                                                "message" => __('image_not_upload'),
                                                "status" => 4
                                            ];
                                        }
                                    }
                                    
                                    $taxino_isValidstart_km = $api->taxino_isValidstart_km($taxi_id);
                                    if($start_km >= $taxino_isValidstart_km){                                   
                                    $message           = $api->edit_driver_profile($driver_id,$taxi_id,$start_km,$update_array, $default_companyid);
                                    //$update_bank       = $api->edit_company_profile($driver_id,$bank_array);
                                    /*****************************************/
                                    if ($message == 1) {
                                        $message = [
                                            "message" => __('profile_updated'),
                                            "status" => 1
                                        ];
                                    } else {
                                        $message = [
                                            "message" => __('try_again'),
                                            "status" => -1
                                        ];
                                    }
                                } else{
                                    $message      = [
                                        "message" => __('startkm_sholuld').$taxino_isValidstart_km,
                                        "status" => -1
                                    ];
                                }
                                }
                            } else {
                                $errors  = $validator->errors('errors');
                                $message = [
                                    "message" => __('validation_error'),
                                    "status" => -5,
                                    "detail" => $errors
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_user_driver'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                /*URL : api?type=chg_password_driver&id=7&old_password=a4541576840a7a08f5331f84491d915d&new_password=e10adc3949ba59abbe56e057f20f883e&confirm_password=e10adc3949ba59abbe56e057f20f883e&org_new_password=123456
                 */
                case 'chg_password_driver':
                    $driver_chg_password = $mobiledata;
                    if ($driver_chg_password['id'] != null) {
                        $validator = $this->chg_password_passenger_validation($driver_chg_password);
                        if ($validator->check()) {
                            //array_shift($array);
                            //array_shift($array);
                            $message = $api->chg_password_passenger($driver_chg_password, PEOPLE, $default_companyid, 'D');
                            //{-1 : confirm password must be the same as new password , -2 : Old Password is In Correct: -3: Invalid User,1:Password Changed Successfully   }
                            switch ($message) {
                                case -1:
                                    $message = [
                                        "message" => __('confirm_new_same'),
                                        "status" => -1
                                    ];
                                    break;
                                case -2:
                                    $message = [
                                        "message" => __('old_pass_incorrect'),
                                        "status" => -2
                                    ];
                                    break;
                                case -3:
                                    $message = [
                                        "message" => __('invalid_user'),
                                        "status" => -3
                                    ];
                                    break;
                                case 1:
                                    $message = [
                                        "message" => __('password_changed'),
                                        "status" => 1
                                    ];
                                    break;
                                case -4:
                                    $message = [
                                        "message" => __('old_new_pass_same'),
                                        "status" => -4
                                    ];
                                    break;
                            }
                        } else {
                            $message = $validator->errors('errors');
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL: http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getdriver_update&passenger_tripid=703
                case 'getdriver_update':
                    $array             = $mobiledata;
                    $message           = [];
                    $trip_id           = $array["passenger_tripid"];
                     /* NEW CHANGES */
                    $driverdetails = $api->get_passenger_log_detail_reply($trip_id);
                    $passengers_id        = (isset($driverdetails[0]['passengers_id']) ?$driverdetails[0]['passengers_id'] :0);
                    $bookedby        = (isset($driverdetails[0]['bookedby']) ?$driverdetails[0]['bookedby'] :0);
                    $passenger_parent_id        = (isset($driverdetails[0]['passenger_parent']) ?$driverdetails[0]['passenger_parent'] :0);
                    $booking_type = 0;
                    if($passengers_id == $bookedby){ $booking_type = 0;}
                    else{
                    $booking_type = 1;
                    }
                /* NEW CHANGES */
                    
                    
                    $notification_time = $this->notification_time;      
                    if ($notification_time != 0) {
                        $timeoutseconds = $notification_time;
                    } else {
                        $timeoutseconds = 15;
                    }
                    $timeout      = $this->continuous_request_time; //$timeoutseconds; // timeout in seconds
                    $microseconds = $timeout * 1000000; //Seconds to microseconds 1 second = 1000000 
                    $flag         = 0;
                    $now          = time();
                    //exit;
                    $search_flag  = 0;
                    if ($trip_id != "") {                           
                        $i = 0;
                        while ((time() - $now) < $timeout) {
                            $driver_status       = $api->get_request_status($trip_id);  
                            //print_r($driver_status);exit;
                            $driver_status_count = count($driver_status);
                            if ($driver_status_count > 0) { 
                                                    
                               // $req_count                = $driver_status_count * $timeoutseconds;
                                //$req_count                = 1 * $timeoutseconds;
                                $driver_reply             = (isset($driver_status['status'])?$driver_status['status']:'');
                                $selected_driver_id       = (isset($driver_status['selected_driver'])? $driver_status['selected_driver']:'');
                                $available_drivers        = explode(',', (isset($driver_status['total_drivers'])? $driver_status['total_drivers']:''));
                                $rejected_timeout_drivers = explode(',', (isset($driver_status['rejected_timeout_drivers'])? $driver_status['rejected_timeout_drivers']:''));
                                $comp_result              = array_diff($available_drivers, $rejected_timeout_drivers);
                                $timeout                  = count($available_drivers) * 25 + 20;
                                if ($timeout < $this->continuous_request_time) {
                                    $timeout = $this->continuous_request_time;
                                }
                                $microseconds = $timeout * 1000000;
                                //to get drivers company timestamp
                                $company_det  = $api->get_company_id($selected_driver_id);                              
                                if (count($company_det) > 0) {
                                    $comp_id = (isset($company_det['company_id'])) ? $company_det['company_id']:'';
                                    $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($comp_id);
                                }
                                //condition to check driver not updated for above 30seconds if it is means we should change the request to next driver
                                $driver_not_updated1 = '';
                                $driver_not_updated = $api->check_driver_not_updated($selected_driver_id, $company_all_currenttimestamp);
                                //print_r($driver_not_updated);exit;
                                if(isset($driver_not_updated)){
                                    $driver_not_updated1 = strtotime(Commonfunction::convertphpdate('Y-m-d H:i:s',$driver_not_updated));
                                }                               
                                 $time_difference    = strtotime($company_all_currenttimestamp) - $driver_not_updated1;
                                if ($time_difference > 25 && count($comp_result) != 0 && $driver_reply != '4') {
                                    //$get_request_dets = $api->check_new_request_tripid("", "", $trip_id, $selected_driver_id, $company_all_currenttimestamp, "");
                                }
                                //echo count($comp_result);exit;
                                if (count($comp_result) == 0) {
                                    $driver_reply = 5;
                                }
                                if (!empty($driver_reply)) {
                                    if ($driver_reply == '3') {
                                        $message = [
                                            "message" => __("request_confirmed_passenger"),
                                            "trip_id" => $trip_id,
                                            "booking_type" => $booking_type, // 0 - Normal,1 - child
                                            "status" => 1
                                        ];
                                        echo json_encode($message);
                                        exit;
                                    } elseif ($driver_reply == '4') {
                                        $message = [
                                            "message" => __("driver_busy"),
                                            "status" => 2
                                        ];
                                        echo json_encode($message);
                                        exit;
                                    } elseif ($driver_reply == '5') {
                                        $message = [
                                            "message" => __("driver_busy"),
                                            "status" => 2
                                        ];
                                        echo json_encode($message);
                                        exit;
                                    } else {
                                        $message = [
                                            "message" => __('try_again'),
                                            "status" => 0
                                        ];
                                    }
                                    //echo json_encode($message);
                                    //exit;
                                }
                                /*usleep(5000000);
                                $i = $i + 5000000;
                                // echo $i;
                                if ($i == $microseconds) {
                                    $update_trip_array = array(
                                        "status" => 4
                                    );
                                    $result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id',$trip_id);
                                    $message = array(
                                        "message" => __("driver_busy"),
                                        "status" => 2
                                    );
                                    echo json_encode($message);
                                    exit;
                                }*/
                            } else {
                                $message = [
                                    "message" => __('try_again'),
                                    "status" => 0
                                ];
                            }
                        }
                    } else {
                        $message = [
                            "message" => __('validation_error'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
            unset(MangoDB::$instances['default']);
                    break;
                //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getdriver_reply&passenger_tripid=346                  
                case 'getdriver_reply':
                    $array = $mobiledata;
                    if ($array['passenger_tripid'] != null) {
                        $passenger_tripid      = $array["passenger_tripid"];
                        $get_passenger_log_det = $api->get_trip_detail_only($passenger_tripid);
                        //echo '<pre>';print_r($get_passenger_log_det);exit;
                        if (count($get_passenger_log_det) > 0) {
                            $driver_reply = $get_passenger_log_det['driver_reply'];
                            if ($driver_reply == 'A') {
                                $detail  = [
                                    "trip_id" => $passenger_tripid,
                                    "driverdetails" => ""
                                ];
                                $message = [
                                    "message" => __("request_confirmed_passenger"),
                                    "detail" => $detail,
                                    "status" => 1
                                ];
                            } else {

                                /** move to passengerlog split table **/
                                $update_cancel_trip_det = $api->update_cancel_trip_det($passenger_tripid);

                                $change_driver_status = $api->change_driver_status($passenger_tripid, 'C');
                                $update_trip_array    = [
                                    "status" => 4
                                ];
                                $result               = $api->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $passenger_tripid);
                                $message              = [
                                    "message" => __("request_canceled_passenger"),
                                    "status" => 3
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('try_again'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
            unset(MangoDB::$instances['default']);
                    break;
                //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getpassenger_update&trip_id=627&request_type=0                    
                case 'getpassenger_update':
                    $array     = $mobiledata;
                    $validator = $this->getpassenger_update_validation($array);
                    if ($validator->check()) {
                        $trip_id      = isset($array["trip_id"]) ? $array["trip_id"] : '';
                        $passenger_id = $array["passenger_id"];
                        $request_type = $array['request_type'];
                        /**Optimize -- Start*/
                        $get_passenger_log_det = $api->get_request_detail($passenger_id,$trip_id);
                        $get_taxi_min_speed = isset($get_passenger_log_det[0]['taxi_min_speed'])?$get_passenger_log_det[0]['taxi_min_speed']:0;
			            $app_ver = isset($get_passenger_log_det[0]['app_ver'])?$get_passenger_log_det[0]['app_ver']:'';
                        /* RUNING TIME UPDATE */
                        $hours              = '';
                        $minutes            = '';
                        $seconds            = '';
                        $pickuptime1 = isset($get_passenger_log_det[0]['actual_pickup_time'])?commonfunction::convertphpdate('Y-m-d H:i:s',$get_passenger_log_det[0]['actual_pickup_time']):date('Y-m-d H:i:s');        

                        $pickuptime = strtotime($pickuptime1);
                        $total_time =abs($pickuptime - strtotime($company_all_currenttimestamp));
                        $days       = floor($total_time /86400);        
                        $hours      = floor($total_time /3600);     
                        $minutes    = intval(($total_time/60) % 60);        
                        $seconds    = intval($total_time % 60);    
                        $results = "";
                        if($days > 0) $results = $days . (($days > 1)?" days ":" day ");
                        $runningtime = sprintf("%s%02d:%02d:%02d",$results,$hours,$minutes,$seconds);
                                    
                         /* RUNNING TIME UPDATE */     
                        /*Optimize -- End*/
                        if ($request_type == 0) {
                            $arrived_display       = $tripstart_display = $trip_complete_display = $tripfare_update_display = $driver_cancel_display = 0;
                            $amt                   = "";
                            $pickup                = "";
                            $get_passenger_log_det = $api->get_request_detail($passenger_id,$trip_id);
                            if (count($get_passenger_log_det) == 1) {
                                $driver_reply          = $get_passenger_log_det[0]['driver_reply'];
                                $travel_status         = $get_passenger_log_det[0]['travel_status'];
                                $driver_id             = $get_passenger_log_det[0]['driver_id'];
                                $transId               = $get_passenger_log_det[0]['job_ref'];
                                $amt              = round(current($get_passenger_log_det[0]['amt']), 2);
                                $pickup_location       = isset($get_passenger_log_det[0]['pickup_location']) ? $get_passenger_log_det[0]['pickup_location'] : '';
                                $drop_location       = isset($get_passenger_log_det[0]['drop_location']) ? $get_passenger_log_det[0]['drop_location'] : '';
                                $notification_status   = isset($get_passenger_log_det[0]['notification_status']) ? $get_passenger_log_det[0]['notification_status'] : 0;
                                $driver_profile_image   = isset($get_passenger_log_det[0]['driver_image']) ? $get_passenger_log_det[0]['driver_image'] : '';
                                $driver_name   = isset($get_passenger_log_det[0]['driver_name']) ? $get_passenger_log_det[0]['driver_name'] : '';
                                $taxi_colour   = isset($get_passenger_log_det[0]['taxi_colour']) ? $get_passenger_log_det[0]['taxi_colour'] : '';
                                $taxi_no   = isset($get_passenger_log_det[0]['taxi_no']) ? $get_passenger_log_det[0]['taxi_no'] : '';
                                $taxi_manufacturer   = isset($get_passenger_log_det[0]['taxi_manufacturer']) ? $get_passenger_log_det[0]['taxi_manufacturer'] : '';

                            if($driver_profile_image != '')
                            {
                                $driver_image                 = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . 'thumb_' . $driver_profile_image;
                                if (file_exists($driver_image) && ($driver_profile_image != '')) {
                                    $driver_image = URL_BASE . SITE_DRIVER_IMGPATH . $driver_profile_image;
                                } else {
                                    $driver_image = URL_BASE . "/public/images/noimages109.png";
                                }
                            }
                            else
                            {
                               $driver_image = URL_BASE . "/public/images/noimages109.png";
 
                            }
                              
                                
                                
                                /************** Driver Location ***************************/
                                $driver_latitute       = $driver_longtitute = '0.0';
                                $current_driver_status = $api->get_driver_current_status($driver_id);
                                 $accuracy = 0;

                                if (count($current_driver_status) > 0) {
                                    $trip_status       = $current_driver_status['status'];
                                    $bearing       = isset($current_driver_status['bearing'])?$current_driver_status['bearing']:0;
                                    $accuracy       = isset($current_driver_status['accuracy'])?$current_driver_status['accuracy']:0;
                                    $driver_latitute   = $current_driver_status['loc']['coordinates'][1];
                                    $driver_longtitute = $current_driver_status['loc']['coordinates'][0];
                                    /*foreach ($current_driver_status as $driver_details) {
                                        $trip_status       = $driver_details->status;
                                        $driver_latitute   = $driver_details->latitude;
                                        $driver_longtitute = $driver_details->longitude;
                                    }*/
                                }
                                /**********************************************************/
                                if (($driver_reply == 'A') && ($travel_status == 9)) {
                                    $detail  = [
                                        "trip_id" => $trip_id,
                                        "pickup_location" => $pickup_location,
                                        "drop_location" => $drop_location,
                                        "driverdetails" => ""
                                    ];
                                    $message = [
                                        "message" => __("request_confirmed_passenger"),
                                        "detail" => $detail,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "bearing" => $bearing,
                                        "accuracy" => $accuracy,
                                        "status" => 1
                                    ];
                                } elseif (($driver_reply == 'A') && ($travel_status == 8)) {
                                    $dispatcher_cancel_display = ($notification_status != 8) ? 1 : 0;
                                    $message                   = [
                                        "message" => __("dispatcher_trip_cancelled"),
                                        "detail" => "",
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                         "bearing" => $bearing,
                                        "status" => 10,
                                        "display" => $dispatcher_cancel_display
                                    ];
                                    $update_trip_array         = [
                                        "notification_status" => 8
                                    ];
                                    $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
                                } elseif (($driver_reply == 'C') && ($travel_status == 6)) {
                                    $message = [
                                        "message" => __("trip_cancel"),
                                        "detail" => "",
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "bearing" => $bearing,
                                        "accuracy" => $accuracy,
                                        "status" => 7
                                    ];
                                } elseif (($driver_reply == 'C') && ($travel_status == 9)) {
                                    $driver_cancel_display = ($notification_status != 5) ? 1 : 0;
                                    $message               = [
                                        "message" => __("driver_cancel_after_confirm"),
                                        "detail" => "",
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                         "bearing" => $bearing,
                                         "accuracy" => $accuracy,
                                        "status" => 8,
                                        "display" => $driver_cancel_display
                                    ];
                                    $update_trip_array     = [
                                        "notification_status" => 5
                                    ];
                                    $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                } elseif (($driver_reply == 'A') && ($travel_status == 3)) {
                                    $arrived_display   = ($notification_status != 1) ? 1 : 0;

                                    if($this->lang == 'ar')
                                    {
                                        
                                        $msg_txt = "وصل سائق غراند ليمو إلى موقع الاصطحاب ، يرجى الرّكوب في السيّارة خلال 10 دقائق. الرّجاء البحث عن سيّارة أوديسي ، رقم اللّوحة ";

                                    }else
                                    {
                                        $msg_txt = "Your Grand Limo Driver has arrived at your pick up location, please board within 10 Minutes. Please look for a ##COLOR## ##MANUFACTURE## ,Plate Number - ##NUMBER##";
                                    }


                                    $msg_txt         = str_replace("##COLOR##", $taxi_colour, $msg_txt);
                                    $msg_txt         = str_replace("##MANUFACTURE##", $taxi_manufacturer, $msg_txt);
                                    $msg_txt         = str_replace("##NUMBER##", $taxi_no, $msg_txt);

                                    $message           = [
                                        "message" => $msg_txt,
                                        "trip_id" => $trip_id,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "taxi_min_speed" => $get_taxi_min_speed,
                                        "bearing" => $bearing,
                                        "accuracy" => $accuracy,
                                        "status" => 2,
                                        "display" => $arrived_display
                                    ];
                                    $update_trip_array = [
                                        "notification_status" => 1
                                    ];
                                    $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                }
                                elseif (($driver_reply == 'A') && ($travel_status == 1) && $transId != 0) {
                                        $tripfare_update_display = ($notification_status != 4) ? 1 : 0;
                                        $ratings_info = $api->get_ratings_info();
                                        $message                 = [
                                            "message" => __('trip_fare_updated'),
                                            "fare" => $amt,
                                            "trip_id" => $trip_id,
                                            "pickup" => $pickup_location,
                                            "drop" => $drop_location,
                                            "driver_name" => $driver_name,
                                            "driver_image" => $driver_image,
                                            "status" => 5,
                                            "display" => $tripfare_update_display,
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing" => $bearing,
                                             "accuracy" => $accuracy,
                                            "ratings_info" => $ratings_info,

                                        ];
                                        $update_trip_array       = [
                                            "notification_status" => 4
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                    }
                                elseif (($driver_reply == 'A') && ($travel_status == 2)) {
                                    $tripstart_display  = ($notification_status != 2) ? 1 : 0;
                                    $actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                    //$change_driver_status = $passengers->change_driver_status($passenger_tripid,'C');
                                    //$update_trip_array  = array("status"=>'4');
                                    //$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_tripid);
                                    $currentdistance = $api->getCurrentDistance($trip_id);
                                    $liveDistance = isset($currentdistance['distance']) ? $currentdistance['distance'] : 0;
                                    $message            = [
                                        "message" => __('journey_started'),
                                        "pickup_time" =>$pickuptime1,
                                        "trip_id" => $trip_id,
                                        "driver_status" => $trip_status,
                                        "distance" => $liveDistance,
                                        "runningtime" => $runningtime, //Running Time Update
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                         "bearing" => $bearing,
                                         "accuracy" => $accuracy,
                                        "status" => 3,
                                        "display" => $tripstart_display
                                    ];
                                    $update_trip_array  = [
                                        "notification_status" => 2
                                    ];
                                    $result             = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                } elseif (($driver_reply == 'A') && ($travel_status == 5)) {
                                    $trip_complete_display = ($notification_status != 3) ? 1 : 0;
                                    $trip_pay_details = $this->commonmodel->select('trip_pay_details',['trip_id'=>(int)$trip_id]);
                                    $mat = $remove_later = 0;
                                    $bk_type = isset($get_passenger_log_det[0]['book_tag'])?$get_passenger_log_det[0]['book_tag']:'N';
                                    $c_fare = isset($trip_pay_details['total_fare'])?$trip_pay_details['total_fare']:0;
                                    if($get_passenger_log_det[0]['book_tag'] == 'R')
                                    {
                                        $pay_by = isset($get_passenger_log_det[0]['pas_pay_by'])?$get_passenger_log_det[0]['pas_pay_by']:1;
                                        if($pay_by != 3)
                                        {
                                            $amt_lmt = isset($get_passenger_log_det[0]['pas_pay_lmt'])?$get_passenger_log_det[0]['pas_pay_lmt']:1;
                                            if($pay_by == 1)
                                            {
                                                $st_dt = (date('D') == 'Mon')?date('Y-m-d')." 00:00:01":date('Y-m-d',strtotime("last Monday"))." 00:00:01";
                                            }
                                            elseif($pay_by == 2)
                                            {
                                                $st_dt = date('Y-m')."-01 00:00:01";
                                            }
                                            
                                            $en_dt = date('Y-m-d')." 23:59:59";
                                            $trip_details = $this->commonmodel->get_tripdetails($passenger_id,1,5,$en_dt,$st_dt);
                                            if(isset($trip_details['result']) && count($trip_details['result']) > 0)
                                            {
                                                foreach($trip_details['result'] as $k)
                                                {
                                                    $mat+=$k['fare'];
                                                }
                                                if(($mat > $amt_lmt) || ($c_fare > ($amt_lmt - $mat)))
                                                {
                                                    $remove_later = 1;
                                                }
                                            }
                                            
                                        }
                                        else
                                            $remove_later = 1;
                                        
                                    }
                                    else
                                        $remove_later = 1;
                                    
                                   /* if($remove_later == 1)
                                    {
                                        $pay_types = $trip_pay_details['gateway_details'];
                                        foreach($pay_types as $k=>$v)
                                        {
                                            if($v['pay_mod_name'] != "Pay Later")
                                                $smpleArr[] = $v;
                                        }
                                        $trip_pay_details['gateway_details'] = $smpleArr;
                                    }*/
                                    $smpleArr = [];
 				   if($remove_later == 1)
                                   {
                                       $default_pay_array = ["_id"=>"3",
                                            "image_active"=>URL_BASE."/public/images/knet_active.png",
                                            "image_normal"=>URL_BASE."/public/images/knet_normal.png",
                                            "pay_mod_default"=>"0",
                                            "pay_mod_name"=>"Knet"];
                                       $pay_types = isset($trip_pay_details['gateway_details'])?$trip_pay_details['gateway_details']:$default_pay_array;
                                      
                                       foreach($pay_types as $k=>$v)
                                       {
                                           if($v['pay_mod_name'] != 'Cash'){
                                               if($v['pay_mod_name'] != "Pay Later"){
                                                   if($v['pay_mod_name'] != 'Card'){
                                                       $smpleArr[] = $v;    
                                                   }
                                                   else{
                                                       if($v['pay_mod_name'] == 'Card' && ($app_ver == '2.2.1' || $app_ver == '2.1.1' || $app_ver == '2.8')){
                                                           $smpleArr[] = $v;           
                                                       }
                                                   }
                                                                                                   
                                               }
                                            }
                                       }
                                       $trip_pay_details['gateway_details'] = $smpleArr;
                                   }
                                    $message               = [
                                        "message" => __('trip_completed'),
                                        "driver_status" => $trip_status,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                         "bearing" => $bearing,
                                       "accuracy" => $accuracy,
                                        "status" => 4,
                                        "display" => $trip_complete_display,
                                        "trip_pay_details" => $trip_pay_details,
                                        "finished_fare" => $mat
                                    ];
                                    $update_trip_array     = [
                                        "notification_status" => 3
                                    ];
                                    $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                                
                } elseif (($driver_reply == 'A') && ($travel_status == 4)) {
                                    $message = [
                                        "message" => __('trip_cancelled_passenger'),
                                        "driver_status" => $trip_status,
                                        "bearing" => $bearing,
                                        "accuracy" => $accuracy,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "status" => 9
                                    ];
                                } else {
                                    $message = [
                                        "message" => __('trip_not_started'),
                                        "driver_status" => $trip_status,
                                        "driver_latitute" => $driver_latitute,
                                        "driver_longtitute" => $driver_longtitute,
                                        "bearing" => $bearing,
                                        "accuracy" => $accuracy,
                                        "status" => 6
                                    ];
                                }
                            } else if (count($get_passenger_log_det) > 0) {
                                foreach ($get_passenger_log_det as $status) {
                                    $driver_reply          = $status['driver_reply'];
                                    $trip_id               = $status['trip_id'];
                                    $travel_status         = $status['travel_status'];
                                    $driver_id             = $status['driver_id'];
                                    $transId               = $status['job_ref'];
                                    $amt                   = round($status['amt'], 2);
                                    $pickup_location       = $status['pickup_location'];
                                    $notification_status   = $status['notification_status'];
                                    /************** Driver Location ***************************/
                                    $driver_latitute       = $driver_longtitute = '0.0';
                                    $current_driver_status = $api->get_driver_current_status($driver_id);
                                    $accuracy=0;
                                    if (count($current_driver_status) > 0) {
                                        $trip_status       = $current_driver_status['status'];
                                        $bearing       = isset($current_driver_status['bearing'])?$current_driver_status['bearing']:0;
                                        $accuracy       = isset($current_driver_status['accuracy'])?$current_driver_status['accuracy']:0;
                                        $driver_latitute   = $current_driver_status['loc']['coordinates'][1];
                                        $driver_longtitute = $current_driver_status['loc']['coordinates'][0];
                                       /* foreach ($current_driver_status as $driver_details) {
                                            $trip_status       = trim($driver_details->status);
                                            $driver_latitute   = trim($driver_details->latitude);
                                            $driver_longtitute = trim($driver_details->longitude);
                                        }*/
                                    }
                                    /**********************************************************/
                                    if (($driver_reply == 'A') && ($travel_status == 9)) {
                                        $detail  = [
                                            "trip_id" => $trip_id,
                                            "driverdetails" => ""
                                        ];
                                        $message = [
                                            "message" => __("request_confirmed_passenger"),
                                            "detail" => $detail,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            'bearing'=>$bearing,
                                            "accuracy" => $accuracy,
                                            "status" => 1
                                        ];
                                    } elseif (($driver_reply == 'A') && ($travel_status == 8)) {
                                        $dispatcher_cancel_display = ($notification_status != 8) ? 1 : 0;
                                        $message                   = [
                                            "message" => __("dispatcher_trip_cancelled"),
                                            "detail" => "",
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            'bearing'=>$bearing,
                                            "accuracy" => $accuracy,
                                            "status" => 10,
                                            "display" => $dispatcher_cancel_display
                                        ];
                                        $update_trip_array         = [
                                            "notification_status" => 8
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                    } elseif (($driver_reply == 'C') && ($travel_status == 6) && ($notification_status != 5)) {
                                        $message           = [
                                            "message" => __("trip_cancel"),
                                            "detail" => "",
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                            "accuracy" => $accuracy,
                                            "status" => 7
                                        ];
                                        $update_trip_array = [
                                            "notification_status" => 5
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                    } elseif (($driver_reply == 'C') && ($travel_status == 9)) {
                                        $driver_cancel_display = ($notification_status != 5) ? 1 : 0;
                                        $message               = [
                                            "message" => __("driver_cancel_after_confirm"),
                                            "detail" => "",
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                            "accuracy" => $accuracy,
                                            "status" => 8,
                                            "display" => $driver_cancel_display
                                        ];
                                        $update_trip_array     = [
                                            "notification_status" => 5
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                    } elseif (($driver_reply == 'A') && ($travel_status == 3)) {
                                        $arrived_display   = ($notification_status != 1) ? 1 : 0;
                                        $message           = [
                                            "message" => __('passenger_on_board'),
                                            "trip_id" => $trip_id,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                            "accuracy" => $accuracy,
                                            "taxi_min_speed" => $get_taxi_min_speed,
                                            "status" => 2,
                                            "display" => $arrived_display
                                        ];
                                        $update_trip_array = [
                                            "notification_status" => 1
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
                                    } elseif (($driver_reply == 'A') && ($travel_status == 2)) {
                                        $tripstart_display  = ($notification_status != 2) ? 1 : 0;
                                        $actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);  
                                        $message            = [
                                            "message" => __('journey_started'),
                                            "pickup_time" => $actual_pickup_time,
                                            "trip_id" => $trip_id,
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "runningtime" => $runningtime,//Running Time Update
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                            "accuracy" => $accuracy,
                                            "status" => 3,
                                            "display" => $tripstart_display
                                        ];
                                        $update_trip_array  = [
                                            "notification_status" => 2
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
                                    } elseif (($driver_reply == 'A') && ($travel_status == 5)) {
                                        $trip_complete_display = ($notification_status != 3) ? 1 : 0;
                                        $message               = [
                                            "message" => __('trip_completed'),
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                             "bearing"=>$bearing,
                                             "accuracy" => $accuracy,
                                            "status" => 4,
                                            "display" => $trip_complete_display
                                        ];
                                        $update_trip_array     = [
                                            "notification_status" => 3
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
                                    } elseif (($driver_reply == 'A') && ($travel_status == 1) && $transId != 0) {
                                        $tripfare_update_display = ($notification_status != 4) ? 1 : 0;
                                        $message                 = [
                                            "message" => __('trip_fare_updated'),
                                            "fare" => $amt,
                                            "trip_id" => $trip_id,
                                            "pickup" => $pickup_location,
                                            "status" => 5,
                                            "display" => $tripfare_update_display,
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                            "accuracy" => $accuracy

                                        ];
                                        $update_trip_array       = [
                                            "notification_status" => 4
                                        ];
                                        $result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id', $trip_id);
                                    } elseif (($driver_reply == 'A') && ($travel_status == 4) && ($notification_status != 5)) {
                                        $message = [
                                            "message" => __('trip_cancelled_passenger'),
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                            "bearing"=>$bearing,
                                             "accuracy" => $accuracy,

                                            "status" => 9
                                        ];
                                    } else {
                                        $message = [
                                            "message" => __('trip_not_started'),
                                            "driver_status" => $trip_status,
                                            "driver_latitute" => $driver_latitute,
                                            "driver_longtitute" => $driver_longtitute,
                                             "accuracy" => $accuracy,
                                            "status" => 6
                                        ];
                                    }
                                }
                            } else {
                                $message = [
                                    "message" => __('invalid_trip'),
                                    "status" => -1
                                ];
                            }
                        } elseif ($request_type == 1) {
                            $get_driver_request = $api->get_driver_request($trip_id);
                            //echo "<pre>"; print_r($get_driver_request); die();
                            /* NEW CHANGES */
                                $driverdetails = $api->get_passenger_log_detail_reply($trip_id);
                                $passenger_id        = (isset($driverdetails[0]['passengers_id']) ?$driverdetails[0]['passengers_id'] :0);
                                $bookedby        = (isset($driverdetails[0]['bookedby']) ?$driverdetails[0]['bookedby'] :0);
                                $passenger_parent_id        = (isset($driverdetails[0]['passenger_parent']) ?$driverdetails[0]['passenger_parent'] :0);
                                $booking_type = 0;
                                if($passenger_id == $bookedby){ $booking_type = 0;}
                                else{
                                $booking_type = 1;
                                }
                            /* NEW CHANGES */
                            //print_r($get_driver_request);exit;
                            if (count($get_driver_request) > 0) {
                                //print_r($get_passenger_log_det);
                                $driver_reply             = $get_driver_request['status'];
                                $available_drivers        = explode(',', $get_driver_request['total_drivers']);
                                $rejected_timeout_drivers = explode(',', $get_driver_request['rejected_timeout_drivers']);
                                $comp_result              = array_diff($available_drivers, $rejected_timeout_drivers);
                                /*print_r($comp_result);
                                echo count($comp_result); die();*/
                                if (count($comp_result) == 0) {
                                    $driver_reply = 5;
                                }
                                if ($driver_reply == '3') {
                                    $detail  = [
                                        "trip_id" => $trip_id,
                                        "driverdetails" => ""
                                    ];
                                    $message = [
                                        "message" => __("request_confirmed_passenger"),
                                        "detail" => $detail,
                                        "booking_type" => $booking_type,  // 0- Noraml 1 - Child 
                                        "status" => 1
                                    ];
                                } elseif ($driver_reply == '4') {
                                    $message = [
                                        "message" => __("trip_cancel"),
                                        "detail" => "",
                                        "status" => 7
                                    ];
                                } elseif ($driver_reply == '5') {
                                    $message = [
                                        "message" => __("driver_busy"),
                                        "status" => 2
                                    ];
                                    echo json_encode($message);
                                    exit;
                                } else {
                                    $message = [
                                        "message" => __('trip_not_started'),
                                        "status" => 6
                                    ];
                                }
                            } else {
                                $message = [
                                    "message" => __('invalid_trip'),
                                    "status" => -1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('No Trips '),
                                "status" => -1
                            ];
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "status" => -5,
                            "detail" => $errors
                        ];
                    }
                    echo json_encode($message);
            unset(MangoDB::$instances['default']);
                    break;
                //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=gettriprequest_status&trip_id=627                 
                case 'gettriprequest_status':
                    $array = $mobiledata;
                    if ($array['trip_id'] != null) {
                        $trip_id            = $array["trip_id"];
                        $amount             = "";
                        $pickup             = "";
                        $get_driver_request = $api->get_driver_request($trip_id);
                        if ($get_driver_request != 0) {
                            //print_r($get_passenger_log_det);
                            $driver_reply = $get_driver_request[0]->status;
                            if ($driver_reply == '3') {
                                $detail  = [
                                    "trip_id" => $trip_id,
                                    "driverdetails" => ""
                                ];
                                $message = [
                                    "message" => __("request_confirmed_passenger"),
                                    "detail" => $detail,
                                    "status" => 1
                                ];
                            } elseif ($driver_reply == '4') {
                                $message = [
                                    "message" => __("trip_cancel"),
                                    "detail" => "",
                                    "status" => 7
                                ];
                            } else {
                                $message = [
                                    "message" => __('trip_not_started'),
                                    "status" => 6
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('trip_id_req'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
                    break;
                //For Driver Cancell the trip
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=driver_status_update&driver_id=35&latitude=11&longitude=76.7997&status=A&trip_id=1216
                //Push Notifications in Driver Table
                 case 'driver_status_update':
                    $driver_status_array = $mobiledata;
                    $act_pickup_location = isset($driver_status_array['actual_pickup_location']) ? urldecode($driver_status_array['actual_pickup_location']) : '';
                    if ($driver_status_array['driver_id'] != null && $driver_status_array['driver_id'] != 0) {
                        $check_driver_login_status = $this->is_login_status($driver_status_array['driver_id'], $default_companyid);
                        if ($check_driver_login_status == 1) {
                            $driver_model          = Model::factory('driver');
                            $current_driver_status = $driver_model->get_driver_current_status($driver_status_array['driver_id']);
                            //print_r($current_driver_status);exit;
                            if (count($current_driver_status) > 0) {
                                $trip_details         = [];
                                $passengers_log_id    = $driver_status_array['trip_id'];
                                $update_driver_arrary = [
                                    "loc" => ["type" => "Point",
                                                   "coordinates" => [(double)$driver_status_array['longitude'],
                                                                          (double)$driver_status_array['latitude']]],
                                    "status" => strtoupper($driver_status_array['status'])
                                ];
                                if ($current_driver_status['status'] != 'A') {
                                    if (($driver_status_array['status'] == 'A') && ($passengers_log_id != null)) {
                                        
                                        $get_passenger_log_details = $api->get_passenger_log_detail($passengers_log_id);
                                        $tab_token = $api->getTabToken($get_passenger_log_details[0]['taxi_id']);
                                        $grandlimoUrl = $api->getVideoURL();
                                        
                                        if(isset($tab_token['tab_token']) && !empty($tab_token['tab_token'])) {
                                            $tabmessage = [
                                                "message" => __('success'),
                                                "version" => $grandlimoUrl['version'],
                                                "video_url" => $grandlimoUrl['tab_video'],
                                                "status" => 1
                                            ];
                                            $title = __('journey_started');
                                            $tab_send_notification = $api->send_passenger_mobile_pushnotification($tab_token['tab_token'],1,$tabmessage,$this->tab_android_api,$title);
                                        }
                                        foreach ($get_passenger_log_details as $values) {
                                            $current_location   = isset($values['current_location']) ? $values['current_location'] :'';
                                            $pickup_latitude    = isset($values['pickup_latitude']) ? $values['pickup_latitude'] :'';
                                            $pickup_longitude   = isset($values['pickup_longitude']) ? $values['pickup_longitude'] :'';
                                            $drop_location      = isset($values['drop_location']) ? $values['drop_location']:'';
                                            $drop_latitude      = isset($values['drop_latitude']) ? $values['drop_latitude']:'';
                                            $drop_longitude     = isset($values['drop_longitude']) ? $values['drop_longitude'] :'';
                                            $driver_name        = isset($values['driver_name']) ? $values['driver_name'] :'';
                                            $p_device_type      = isset($values['passenger_device_type']) ? $values['passenger_device_type'] : '';
                                            $p_device_token     = isset($values['passenger_device_token']) ? $values['passenger_device_token'] : '';
                                            $actual_pickup_time = isset($values['actual_pickup_time']) ? Commonfunction::convertphpdate('Y-m-d H:i:s', $values['actual_pickup_time']) : '';
                                            $travel_status      = isset($values['travel_status']) ? $values['travel_status'] :'';
                                            $driver_reply       = isset($values['driver_reply']) ? $values['driver_reply'] : '';
                                        }
                                        /********** Check whther the Trip is alreadt cancelled by the passenger **********/
                                        if (($driver_reply == 'A') && ($travel_status == 4)) {
                                            $msg = [
                                                "message" => __("trip_cancelled_passenger"),
                                                "detail" => "",
                                                "status" => 7
                                            ];
                                            echo json_encode($msg);
                                            exit;
                                        }
                                        /*********************************************************************************/
                                        /** update journey inprogress in Passenger log table when driver start the journey**/
                                        $company_det        = $api->get_company_id($driver_status_array['driver_id']);
                                        $compId             = (count($company_det) > 0 && isset($company_det['company_id'])) ? $company_det['company_id'] : $default_companyid;
                                        $actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($compId);
                                        $travel_status      = 2;
                                        
                                        //if($act_pickup_location == false)
                                        if (empty($act_pickup_location)) {
                                            $act_pickup_location = $current_location;
                                        }
                                        $act_pic_lat                = ($driver_status_array['latitude'] != 0) ? $driver_status_array['latitude'] : $pickup_latitude;
                                        $act_pic_long               = ($driver_status_array['longitude'] != 0) ? $driver_status_array['longitude'] : $pickup_longitude;
                                        $update_passenger_log_array = [
                                            'travel_status' =>(int)$travel_status,
                                            'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($actual_pickup_time) * 1000),
                                            'current_location' => $act_pickup_location,
                                            'pickup_latitude' => (double)$act_pic_lat,
                                            'pickup_longitude' => (double)$act_pic_long
                                        ];
                                        
                                        $result                     = $api->update_table(MDB_PASSENGERS_LOGS, $update_passenger_log_array, '_id', $passengers_log_id);
                                        
                                        
                                        /** Passenger log table update end **/
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array          = [
                                            "status" => 6
                                        ];
                                        $result                     = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $passengers_log_id);
                                        
                     /*************************************************************************/
                    if(($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                        //$result = $api->update_driverinfo($update_driver_arrary,$driver_status_array['driver_id']);
                        $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_status_array['driver_id']);
                    }                   
                                        $trip_details = [
                                            "pickup_latitude" => (double)$driver_status_array['latitude'],
                                            "pickup_longitude" =>(double)$driver_status_array['longitude'],
                                            "pickup_location" => $act_pickup_location,
                                            "drop_latitude" => (double)$drop_latitude,
                                            "drop_longitude" => (double)$drop_longitude,
                                            "drop_location" => $drop_location
                                        ];
                                        $message      = [
                                            "message" => __('driver_location_update'),
                                            "status" => 1,
                                            "detail" => $trip_details
                                        ];
                                        $push_message = [
                                            "message" => __('journey_started'),
                                            "pickup_time" => $actual_pickup_time,
                                            "trip_id" => $passengers_log_id,
                                            "status" => 3
                                        ];      
                                        /* SEND VIDEO STREAM URL TO PARENT IF HIS CHILD IN TRIP */
                                        $get_passenger_log_details_chk = $api->get_passenger_log_detail($passengers_log_id);
                                    
                                        $passeger_name = (isset($get_passenger_log_details_chk[0]['passenger_name']) ? $get_passenger_log_details_chk[0]['passenger_name'] :0);
                                        $passenger_parent_id        = (isset($get_passenger_log_details_chk[0]['passenger_parent']) ?$get_passenger_log_details_chk[0]['passenger_parent'] :0);
                                        $passengers_id        = (isset($get_passenger_log_details_chk[0]['passengers_id']) ?$get_passenger_log_details_chk[0]['passengers_id'] :0);
                                         $passenger_trip_alert        = (isset($get_passenger_log_details_chk[0]['passenger_trip_alert']) ?$get_passenger_log_details_chk[0]['passenger_trip_alert'] :0);
                                        if($passenger_trip_alert == 1){
                                            
                                            /*** Child Details ***/
                                            $result = $api->passenger_profile($passengers_id);
                                            if (count($result) > 0) {
                                            $passenger_image = $result['profile_image'];
                                            $passenger_name = $result['name'];
                                            $passenger_phone = $result['phone'];
                                            $passenger_id = $result['_id'];
                                            /*************************** Passenger Image ************************************/
                                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                                $passenger_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                            } else {
                                                $passenger_image = URL_BASE . "public/images/no_image109.png";
                                            }
                                            }   
                                            /*** Child Details ***/ 
                                            
                                            $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                            $parent_device_token = $parentInfo[0]['device_token'];
                                            $parent_device_type = $parentInfo[0]['device_type'];
                                            $get_taxi_channel_details = $api->get_taxi_channel_details($get_passenger_log_details[0]['taxi_id']);
                                            $channel_id =  $get_taxi_channel_details['live_stream_channel'];
                                            $parent_pushmessage           = [
                                            "message" => str_replace("%s",$passeger_name,__('p_journey_started')),
                                            "detail" => ['trip_id' => $passengers_log_id,'name'=>$passenger_name,'image'=>$passenger_image,'phone'=>$passenger_phone,'live_video' => 'https://www.ustream.tv/embed/'.$channel_id],
                                            "status" => 12
                                            ];
                                            $title =  __('p_journey_started');
                                            $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                        }
                                    


                                        
                                        
                                     /* SEND VIDEO STREAM URL TO PARENT IF HIS CHILD IN TRIP */
                                        
                                        
                                        
                                                        
                                    } elseif (($driver_status_array['status'] == 'A') && ($passengers_log_id == null)) {
                                        $message = [
                                            "message" => __('invalid_trip_id'),
                                            "status" => -1,
                                            "detail" => $trip_details
                                        ];
                                    } else {
                                        
                                        if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                            
                                            $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_status_array['driver_id']);
                                        }
                                        $message = [
                                            "message" => __('driver_location_update'),
                                            "status" => 1
                                        ];
                                    }
                                } else {
                                    $update_driver_arrary = [
                                        "loc" => ["type" => "Point",
                                                       "coordinates" => [(double)$driver_status_array['longitude'],
                                                                              (double)$driver_status_array['latitude']]],
                                        "status" => strtoupper($driver_status_array['status'])
                                    ];
                                    if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                        $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_status_array['driver_id']);
                                    }
                                    $message = [
                                        "message" => __('already_trip'),
                                        "status" => -1
                                    ];
                                }
                            } else {
                                //echo "else"; exit;
                                $insert_array = [
                                    "_id" => $driver_status_array['driver_id'],
                                    "status" => 'F',
                                    "shift_status" => 'OUT',
                                    "loc" => ["type" => "Point",
                                                   "coordinates" => [(double)$driver_status_array['longitude'],
                                                                          (double)$driver_status_array['latitude']]],
                                    /*"latitude" => $driver_status_array['latitude'],
                                    "longitude" => $driver_status_array['longitude'],*/
                                ];
                                if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                    $transaction = $this->commonmodel->insert(MDB_DRIVER_INFO, $insert_array);
                                }
                                $message = [
                                    "message" => __('driver_location_update'),
                                    "status" => 1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_not_login'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                
                
                case 'driver_status_update_old':
                    $driver_status_array = $mobiledata;
                    $act_pickup_location = isset($driver_status_array['actual_pickup_location']) ? urldecode($driver_status_array['actual_pickup_location']) : '';
                    if ($driver_status_array['driver_id'] != null) {
                        $check_driver_login_status = $this->is_login_status($driver_status_array['driver_id'], $default_companyid);
                        if ($check_driver_login_status == 1) {
                            $driver_model          = Model::factory('driver');
                            $current_driver_status = $driver_model->get_driver_current_status($driver_status_array['driver_id']);
                            if (count($current_driver_status) > 0) {
                                //print_r($current_driver_status);
                                //array_shift($driver_status_array);
                                //array_shift($driver_status_array);                            
                                $trip_details         = [];
                                $passengers_log_id    = $driver_status_array['trip_id'];
                                $update_driver_arrary = [
                                    "latitude" => $driver_status_array['latitude'],
                                    "longitude" => $driver_status_array['longitude'],
                                    "status" => strtoupper($driver_status_array['status'])
                                ];
                                if ($current_driver_status[0]->status != 'A') {
                                    if (($driver_status_array['status'] == 'A') && ($passengers_log_id != null)) {
                                        $get_passenger_log_details = $api->get_passenger_log_detail($passengers_log_id);
                                        foreach ($get_passenger_log_details as $values) {
                                            $current_location   = $values->current_location;
                                            $pickup_latitude    = $values->pickup_latitude;
                                            $pickup_longitude   = $values->pickup_longitude;
                                            $drop_location      = $values->drop_location;
                                            $drop_latitude      = $values->drop_latitude;
                                            $drop_longitude     = $values->drop_longitude;
                                            $driver_name        = $values->driver_name;
                                            $p_device_type      = $values->passenger_device_type;
                                            $p_device_token     = $values->passenger_device_token;
                                            $passeger_name     = $values->passeger_name;
                                            $passenger_parent_id     = $values->passenger_parent;
                                            $passenger_trip_alert     = $values->passenger_trip_alert;
                                            $actual_pickup_time = $values->actual_pickup_time;
                                            $travel_status      = $values->travel_status;
                                            $driver_reply       = $values->driver_reply;
                                        }
                                        /********** Check whther the Trip is alreadt cancelled by the passenger **********/
                                        if (($driver_reply == 'A') && ($travel_status == 4)) {
                                            $msg = [
                                                "message" => __("trip_cancelled_passenger"),
                                                "detail" => "",
                                                "status" => 7
                                            ];
                                            echo json_encode($msg);
                                            exit;
                                        }
                                        /*********************************************************************************/
                                        /** update journey inprogress in Passenger log table when driver start the journey**/
                                        $company_det        = $api->get_company_id($driver_status_array['driver_id']);
                                        $compId             = (count($company_det) > 0) ? $company_det[0]['company_id'] : $default_companyid;
                                        $actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($compId);
                                        $travel_status      = 2;
                                        //$act_pickup_location=$api->getaddress($driver_status_array['latitude'],$driver_status_array['longitude']);
                                        //if($act_pickup_location == false)
                                        if (empty($act_pickup_location)) {
                                            $act_pickup_location = $current_location;
                                        }
                                        $act_pic_lat                = ($driver_status_array['latitude'] != 0) ? $driver_status_array['latitude'] : $pickup_latitude;
                                        $act_pic_long               = ($driver_status_array['longitude'] != 0) ? $driver_status_array['longitude'] : $pickup_longitude;
                                        $update_passenger_log_array = [
                                            'travel_status' => $travel_status,
                                            'actual_pickup_time' => $actual_pickup_time,
                                            'current_location' => $act_pickup_location,
                                            'pickup_latitude' => $act_pic_lat,
                                            'pickup_longitude' => $act_pic_long
                                        ];
                                        $result                     = $api->update_table(PASSENGERS_LOG, $update_passenger_log_array, 'passengers_log_id', $passengers_log_id);
                                        /** Passenger log table update end **/
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array          = [
                                            "status" => 6
                                        ];
                                        $result                     = $api->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $passengers_log_id);
                                        /*************************************************************************/
                                        if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                            $result = $api->update_table(DRIVER, $update_driver_arrary, 'driver_id', $driver_status_array['driver_id']);
                                        }
                                        $trip_details = [
                                            "pickup_latitude" => $driver_status_array['latitude'],
                                            "pickup_longitude" => $driver_status_array['longitude'],
                                            "pickup_location" => $act_pickup_location,
                                            "drop_latitude" => $drop_latitude,
                                            "drop_longitude" => $drop_longitude,
                                            "drop_location" => $drop_location
                                        ];
                                        $message      = [
                                            "message" => __('driver_location_update'),
                                            "status" => 1,
                                            "detail" => $trip_details
                                        ];
                                        $push_message = [
                                            "message" => __('journey_started'),
                                            "pickup_time" => $actual_pickup_time,
                                            "trip_id" => $passengers_log_id,
                                            "status" => 3
                                        ];
                                        
                                        /* Send Push notification to their parent */
                                        if($passenger_parent_id == 0){}
                                        else{
                                            if($passenger_trip_alert == 1){ 
                                        $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                        $parent_device_token = $parentInfo[0]['device_token'];
                                        $parent_device_type = $parentInfo[0]['device_type'];
                                        $parent_pushmessage = [
                                            "message" => str_replace("%s",$passeger_name,__('p_journey_started')),
                                            "pickup_time" => $actual_pickup_time,
                                            "trip_id" => $passengers_log_id,
                                            "status" => 3
                                        ];
                                        $title = __('journey_started_child');
                                        $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                        }
                                        }
                                        /* Send Push notification to their parent */
                                        
                                        //print_r($push_message);
                                        //exit;
                                        $title = __('journey_started');
                                        $p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api,$title);                                                            
                                    } elseif (($driver_status_array['status'] == 'A') && ($passengers_log_id == null)) {
                                        $message = [
                                            "message" => __('invalid_trip_id'),
                                            "status" => -1,
                                            "detail" => $trip_details
                                        ];
                                    } else {
                                        if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                            $result = $api->update_table(DRIVER, $update_driver_arrary, 'driver_id', $driver_status_array['driver_id']);
                                        }
                                        $message = [
                                            "message" => __('driver_location_update'),
                                            "status" => 1
                                        ];
                                    }
                                } else {
                                    $update_driver_arrary = [
                                        "latitude" => $driver_status_array['latitude'],
                                        "longitude" => $driver_status_array['longitude'],
                                        "status" => strtoupper($driver_status_array['status'])
                                    ];
                                    //print_r($update_driver_arrary);
                                    if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                        $result = $api->update_table(DRIVER, $update_driver_arrary, 'driver_id', $driver_status_array['driver_id']);
                                    }
                                    $message = [
                                        "message" => __('already_trip'),
                                        "status" => -1
                                    ];
                                }
                            } else {
                                $insert_array = [
                                    "driver_id" => $driver_status_array['driver_id'],
                                    "latitude" => $driver_status_array['latitude'],
                                    "longitude" => $driver_status_array['longitude'],
                                    "status" => 'F',
                                    "shift_status" => 'OUT'
                                ];
                                if (($driver_status_array['latitude'] != 0) && ($driver_status_array['longitude'] != 0)) {
                                    $transaction = $this->commonmodel->insert(DRIVER, $insert_array);
                                }
                                $message = [
                                    "message" => __('driver_location_update'),
                                    "status" => 1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_not_login'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1020/api/index/dGF4aV9KcUJRWjgwVjRJajc1RXhrSXFwaXpSUHA5Umd3eGI=?type=driver_reply&pass_logid=1138&driver_id=37&taxi_id=3&company_id=1&driver_reply=R&field=Sample Comments for rejection&flag=1
                case 'driver_reply':
                    $driver_reply_array = $mobiledata;
                    $passenger_push_status ='';
                    if ($driver_reply_array['pass_logid'] != null) {
                        //$api_model    = Model::factory(MOBILEAPI_107);                    
                        $pass_logid   = $driver_reply_array['pass_logid'];
                        $driver_reply = $driver_reply_array['driver_reply'];
                        $driver_id    = $driver_reply_array['driver_id'];
                        $taxi_id      = $driver_reply_array['taxi_id'];
                        $company_id   = $driver_reply_array['company_id'];
                        $field        = $driver_reply_array['field'];
                        $flag         = $driver_reply_array['flag'];                        
                        if ($driver_reply == 'R') {
                            $travel_status = 10;
                        } else {
                            $travel_status = 9;
                        }
                        $driver_statistics = [];
                        $result            = $api->update_driverreply_status($pass_logid, $driver_id, $taxi_id, $company_id, $driver_reply, $travel_status, $field, $flag, $default_companyid);
                        //echo $result;exit;
                        if ($result == 1) {
                            if ($driver_reply == 'A') {
                                /********* Update the status in driver request table **************/
                                $update_trip_array    = [
                                    "status" => 3
                                ];
                                $version    = isset($mobiledata['version_no'])?$mobiledata['version_no']:'';
                                if($version != '')
                                {
                                    $update_trip_array['app_version'] = $version;
                                }
                                $update_result        = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id',$pass_logid);
                                /********** Update the Driver table he goes Busy status ****************/
                                $update_driver_array  = [
                                    "status" => 'B'
                                ];
                                $update_driver_result = $api->update_table(MDB_DRIVER_INFO,$update_driver_array,'_id',$driver_id);
                                /**************************************************************************/
                            }
                            $message         = __('request_confirmed');
                            $push_msg        = __('driver_confirm_push');
                            $push_status     = 1;//for child
                            $passenger_push_status  = 16;//for the dispatcher trip push to passenger


                            $response_status = 1;
                            //$delete_pass_log_temp =$api->delete_passengers_log_temp($pass_logid);
                        } else if ($result == 2) {
                            /********** Update the Driver table he goes Busy status ****************/
                            $update_driver_array  = [
                                "status" => 'F'
                            ];
                            $update_driver_result = $api->update_table(MDB_DRIVER_INFO,$update_driver_array,'_id',$driver_id);
                            /**************************************************************************/
                            /** move to passengerlog split table **/
                            $update_reject_trip_det = $api->update_reject_trip_det($pass_logid);                            
                            $message              = __('request_rejected');
                            $push_msg             = __('request_rejected_passenger');
                            $push_status          = 6;
                            $response_status      = 2;
                        } else if ($result == 3) {
                            // Driver Statistics ********************/
                            $driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id, $company_id);
                            $rejected_trips1   = $api->get_rejected_drivers($driver_id, $company_id);
                            $rejected_trips = count($rejected_trips);
                            $driver_earnings        = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                            $driver_tot_earnings    = $api->get_driver_total_earnings($driver_id);
                            $statistics             = [];
                            $total_trip             = $today_earnings = $total_amount = 0;
                            foreach ($driver_earnings as $stat) {
                                $total_trip++;
                                $total_amount += $stat['total_amount'];
                            }
                            $overall_trip         = $total_trip + $rejected_trips + $driver_cancelled_trips;
                            $time_driven          = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                            $driver_statistics    = [
                                "total_trip" => $overall_trip,
                                "completed_trip" => $total_trip,
                                "total_earnings" => round($driver_tot_earnings, 2),
                                "overall_rejected_trips" => $rejected_trips,
                                "cancelled_trips" => $driver_cancelled_trips,
                                "today_earnings" => round($total_amount, 2),
                                "shift_status" => 'IN',
                                "time_driven" => $time_driven,
                                "waiting_time" => $waittime,
                                "status" => 1
                            ];

                            /** move to passengerlog split table **/
                            $update_cancel_trip_det = $api->update_cancel_trip_det($pass_logid);

                            //print_r($driver_statistics);exit;
                            //Driver Statistics Functionality End
                            /********** Update the Driver table he goes Busy status ****************/
                            $update_driver_array  = [
                                "status" => 'F'
                            ];
                            $update_driver_result = $api_model->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', (int)$driver_id);
                            /*************** Update in driver request table ******************/
                            $update_trip_array    = [
                                "status" => 9
                            ];
                            $result               = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', (int)$pass_logid);
                            /*************************************************************************/
                            $message              = __('trip_cancelled_driver');
                            $push_msg             = __('driver_cancel_after_confirm');
                            $push_status          = 7;
                            $response_status      = 3;
                            //$message = array("message" => __('trip_fare_updated'),"detail"=>$detail,"driver_statistics"=>$driver_statistics,"status"=>1);
                        } else if ($result == 4) {
                            $message         = __('trip_already_cancel_rejected');
                            $push_msg        = __('trip_already_cancel_rejected');
                            $push_status     = 8;
                            $response_status = 4;
                        } else if ($result == 5) {
                            $message         = __('trip_already_confirm');
                            $push_msg        = __('trip_already_confirm');
                            $push_status     = 9;
                            $response_status = 5;
                        } else if ($result == 6) {
                            $message         = __('trip_already_rejected');
                            $push_msg        = __('trip_already_rejected');
                            $push_status     = 10;
                            $response_status = 6;
                        } else if ($result == 7) {

                            /** move to passengerlog split table **/
                            $update_cancel_trip_det = $api->update_cancel_trip_det($pass_logid);                            
                            $message         = __('trip_cancel');
                            $push_msg        = __('trip_cancel');
                            $push_status     = 11;
                            $response_status = 7;
                        } else {
                            $message         = __('trip_cancel_timeout');
                            $push_msg        = __('trip_cancel_timeout');
                            $push_status     = 12;
                            $response_status = 8;
                        }
                        //echo $push_status;
                        $phone_no     = '';
                        $device_token = '';
                        $driver_name  = $p_device_token = $phone_no = $driver_phone = $p_device_type = "";
                        $latitude     = $longitude = "";
                        $taxi_details = "";
                        //free sms url with the arguments
                        if ((SMS == 1) && ($driver_phone != '')) {
                            $message_details = $this->commonmodel->sms_message('3');
                            $to              = $driver_phone;
                            $message_temp    = isset($message_details['sms_description']) ? $message_details['sms_description'] : '';
                            $sms_message     = str_replace("##booking_key##", $pass_logid, $message_temp);
                            //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($sms_message)."&senderid=NAJIK&recipient=$to");
                        }
                        $totalrating   = "";
                        $driverdetails = [];
                        $trip_detail   = [];
                        $driverdetails = $api->get_passenger_log_detail_reply($pass_logid);
                    
                        
                        
                        foreach ($driverdetails as $values) {
                            if ($values['profile_image']) {
                                $img = URL_BASE . 'public/uploads/passenger/thumb_' . $values['profile_image'];
                            } else {
                                $img = URL_BASE . "/public/images/noimages109.png";
                            }
                            $values['profile_image'] = $img;
                        }
                        $detail = [
                            "trip_id" => $pass_logid,
                            "driverdetails" => $driverdetails,
                            "driver_statistics" => $driver_statistics
                        ];
                        if ($response_status == 1) {
                            $msg = [
                                "message" => $message,
                                "status" => $response_status,
                                "detail" => $detail
                            ];
                        } else {
                            $msg = [
                                "message" => $message,
                                "status" => $response_status,
                                "driver_statistics" => $driver_statistics
                            ];
                        }
                        if ($push_status == 1 || $push_status == 6 || $push_status == 7) {
                           
                            if ($push_status == 1) {
                                $custom_status = 1;
                                if($passenger_push_status==16){
                                    $custom_status = 16;
                                }
 
                                $driver_latitute   = isset($driverdetails['loc']['coordinates'][1])?$driverdetails['loc']['coordinates'][1]:0;
                                $driver_longtitute = isset($driverdetails['loc']['coordinates'][0])?$driverdetails['loc']['coordinates'][0]:0;
				$app_version = isset($driverdetails[0]['app_ver'])?$driverdetails[0]['app_ver']:''; 
                                $push_message = [
                                    "message" => $push_msg,
                                    "trip_id" => $pass_logid,
                                    "driverdetails" => $driverdetails,
                                    "status" => $custom_status,
                                    "driv_lat" => $driver_latitute,
                                    "driv_long" => $driver_longtitute,
				    "app_ver"=>$app_version 
                                ];
                            } 
                            else {
                                $push_message = [
                                    "message" => $push_msg,
                                    "trip_id" => $pass_logid,
                                    "trip_detail" => $trip_detail,
                                    "status" => $push_status
                                ];
                            }
                           $title = $push_msg ;
                           
                            /* IF Passenger having parent then send notification to child */
                            $passenger_id        = (isset($driverdetails[0]['passengers_id']) ?$driverdetails[0]['passengers_id'] :0);
                            $passenger_parent_id        = (isset($driverdetails[0]['passenger_parent']) ?$driverdetails[0]['passenger_parent'] :0);
                            if($passenger_parent_id == 0){}
                            else{
                                $childInfo = $api->get_passenger_details_by_id($passenger_id);
                                $child_device_token = isset($childInfo[0]['device_token'])?$childInfo[0]['device_token']:'';
                                $child_device_type = isset($childInfo[0]['device_type']) ? $childInfo[0]['device_type'] : '';
                                $p_send_notification = $api->send_passenger_mobile_pushnotification($child_device_token,$child_device_type,$push_message,$this->customer_google_api,$title);
                            }
                            
                       if(isset($driverdetails[0]['dispatch_time']) && $driverdetails[0]['dispatch_time']!=''){
 
                            $p_device_token = isset($driverdetails[0]['passenger_device_token'])?$driverdetails[0]['passenger_device_token']:'';
                            $p_device_type = isset($driverdetails[0]['passenger_device_type']) ? $driverdetails[0]['passenger_device_type'] : '';
                            
                            $p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api,$title);
                        
                        }

                           
                           
                          
                            //print_r($push_message);
                            //exit;
                        }
                    } else {
                        $msg = [
                            "message" => __('invalid_trip'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($msg);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=driver_status_select&driver_id=60  
                case 'driver_status_select':
                    $driver_status_array = $mobiledata;
                    $check_result        = $api->check_driver_companydetails($driver_status_array['driver_id'], $default_companyid);
                    if ($check_result == 0) {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        exit;
                        ;
                    }
                    if ($driver_status_array['driver_id'] != null) {
                        //$result = $api->select_table(DRIVER,'driver_id',$array['driver_id']); 
                        $result         = $api->select_driverloc($driver_status_array['driver_id'], $default_companyid);
                        $driver_details = [];
                        $latitude       = $longitude = '0.0';
                        $status         = 'F';
                        //print_r($result);
                        if (count($result) > 0) {
                            foreach ($result as $details) {
                                $driver_status = $details['status'];
                                $id            = $details['id']; //             
                                $shift_status  = $details['shift_status'];
                                $driver_id     = $details['driver_id'];
                                $latitude      = $details['latitude'];
                                $longitude     = $details['longitude'];
                                $update_date   = $details['update_date'];
                            }
                            //$result[0]['status'] =  ($driver_status != 'B') ?  $driver_status : 'F';
                            $driver_details = [
                                "id" => $id,
                                "driver_id" => $driver_id,
                                "latitude" => $latitude,
                                "longitude" => $longitude,
                                "status" => $status,
                                "shift_status" => $shift_status,
                                "update_date" => $update_date
                            ];
                        }
                        $driver_current_journey = $api->get_driver_current_journey($driver_status_array['driver_id'], $default_companyid, '0');
                        $trip_details           = [];
                        if (count($driver_current_journey) > 0) {
                            foreach ($driver_current_journey as $values) {
                                $current_location  = $values['current_location'];
                                $drop_location     = $values['drop_location'];
                                $current_latitude  = $values['pickup_latitude'];
                                $current_longitude = $values['pickup_longitude'];
                                $drop_latitude     = $values['drop_latitude'];
                                $drop_longitude    = $values['drop_longitude'];
                                //$no_passengers = $value->no_passengers;                                   
                            }
                            $trip_details = [
                                "pickup_location" => $current_location,
                                "drop_location" => $drop_location,
                                "current_latitude" => $current_latitude,
                                "current_longitude" => $current_longitude,
                                "drop_latitude" => $drop_latitude,
                                "drop_longitude" => $drop_longitude
                            ];
                        } else {
                            $trip_details = [
                                'No Trip Found.'
                            ];
                        }
                        if (count($result) > 0)
                            $message = [
                                "current_location" => $result,
                                "current_trip" => $trip_details,
                                "status" => 1
                            ];
                        else
                            $message = [
                                "message" => 'Driver Not Found or Kindly update your status',
                                "status" => -1
                            ];
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : api/?type=driver_journey_status&pass_logid=7    
                case 'driver_journey_status':
                    $driver_journey_array = $mobiledata;
                    if ($driver_journey_array['pass_logid'] != null) {
                        $result = $api->select_table(PASSENGERS_LOG, 'passengers_log_id', $driver_journey_array['pass_logid']);
                        if (count($result) > 0)
                            $message = $result;
                        else
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => 0
                            ];
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //PASSENGER LOG TABLE UPDATE        
                //URL : api/?type=driver_journey_status_update&pass_logid=7&time_to_reach_passen=&drop_time=&pickupdrop=&waitingtime=&rating=&comments=&travel_status=&driver_reply=&driver_comments=&msg_status
                case 'driver_journey_status_update':
                    $journey_status_update = $mobiledata;
                    if ($journey_status_update['pass_logid'] != null) {
                        //Removing the URL Other parameters
                        array_shift($journey_status_update);
                        array_shift($journey_status_update);
                        //print_r($array);
                        $passengers_log_id = $journey_status_update['pass_logid'];
                        //Removing the $array['pass_logid'] from array  for the $org_array
                        array_shift($journey_status_update);
                        foreach ($journey_status_update as $key => $arr) {
                            if ($arr != null)
                                $org_array[$key] = $arr;
                        }
                        if (count($org_array) > 0) {
                            $result  = $api->update_table(PASSENGERS_LOG, $org_array, 'passengers_log_id', $passengers_log_id);
                            $message = [
                                "message" => 'Data Updated Successfully',
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => 'Atleast Provide Single Field Data',
                                "status" => 0
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1235/api/index/dGF4aV9KcUJRWjgwVjRJajc1RXhrSXFwaXpSUHA5Umd3eGI=?type=driver_upcoming_journey&driver_id=3
                case 'driver_upcoming_journey':
                    $driver_upcoming_journey = $mobiledata;
                    $check_result            = $api->check_driver_companydetails($driver_upcoming_journey['driver_id'], $default_companyid);
                    if ($check_result == 0) {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    if ($array['driver_id'] != null) {
                        $driver_id            = $driver_upcoming_journey['driver_id'];
                        $driver_model         = Model::factory('driver');
                        $driver_logs_upcoming = $api->get_driver_logs($driver_id, 'R', 'A', '9', $default_companyid);
                        $array_inc            = 0;
                        foreach ($driver_logs_upcoming as $journey) {
                            $upcoming_journey[] = (array) $journey;
                            $pickuptime         = date('H:i:s', strtotime($journey->pickup_time));
                            $currenttime        = date('H:i:s', strtotime("+10 min"));
                            //$currenttime ="<script>document.write(currenttime);</script>";
                            if ($pickuptime <= $currenttime) {
                                //$this->array_put_to_position($upcoming_journey, 'P', 1, 'pickstatus');
                                $upcoming_journey = $this->array_push_assoc($upcoming_journey, $array_inc, 'pickstatus', 'P');
                            } else {
                                $upcoming_journey = $this->array_push_assoc($upcoming_journey, $array_inc, 'pickstatus', 'w');
                            }
                            $array_inc++;
                        }
                        if (count($driver_logs_upcoming) == 0) {
                            $message = [
                                "message" => __('no_data'),
                                "status" => 0
                            ];
                        } else {
                            $message = [
                                "message" => $upcoming_journey,
                                "status" => 1
                            ];
                            //$message = Arr::merge($msg,$upcoming_journey);
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                // http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_by_sms&driver_id=16&phone=
                case 'tell_to_friend_by_sms':
                    $tell_sms_array = $mobiledata;
                    //print_r();
                    $validator      = $this->tellfri_sms_validation($tell_sms_array);
                    if ($validator->check()) {
                        //Set the Favourite Trips
                        $driver_details       = $api->driver_profile($tell_sms_array['driver_id'], $default_companyid);
                        $driver_referral_code = "";
                        if (count($driver_details) > 0) {
                            $driver_referral_code = $driver_details[0]['driver_referral_code'];
                        }
                        $message_details = $this->commonmodel->sms_message('7');
                        $to              = $tell_sms_array['phone'];
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##SITENAME##", ucfirst(COMPANY_SITENAME), $message);
                        $message         = str_replace("##REFERRAL_CODE##", $driver_referral_code, $message);
                        $message         = str_replace("##ANDROID_PASSENGER_APP##", ANDROID_PASSENGER_APP, $message);
                        $message         = str_replace("##IOS_PASSENGER_APP##", IOS_PASSENGER_APP, $message);
                        $message         = str_replace("##ANDROID_DRIVER_APP##", ANDROID_DRIVER_APP, $message);
                        //echo $message;exit;
                        //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                        $result          = true;
                        if ($result) {
                            $message = [
                                "message" => __('sms_invite_send'),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('try_again'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "status" => -3,
                            "detail" => $validation_error
                        ];
                    }
                    echo json_encode($message);
                    break;
                    break;
                //URL
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_by_email&driver_id=16&email=
                case 'tell_to_friend_by_email':
                    $tell_mail_array = $mobiledata;
                    $driver_id       = $tell_mail_array['driver_id'];
                    $email           = $tell_mail_array['email'];
                    $validator       = $this->tellfri_email_validation($tell_mail_array);
                    if ($validator->check()) {
                        $name                 = $driver_referral_code = "";
                        $driver_details       = $api->driver_profile($tell_mail_array['driver_id'], $default_companyid);
                        $driver_referral_code = "";
                        if (count($driver_details) > 0) {
                            $driver_referral_code = $driver_details[0]['driver_referral_code'];
                            $name                 = $driver_details[0]['name'];
                        }
                        $message           = DRIVER_TELL_TO_FRIEND_MESSAGE;
                        $mail              = "";
                        $subject           = __('driver_telltofriend_subject') . ' ' . $this->app_name;
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_NAME => $name,
                            REPLACE_SUBJECT => $subject,
                            REPLACE_MESSAGE => $message,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COMPANYDOMAIN => $this->domain_name,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                        /* Added for language email template */
                        if ($this->lang != 'en') {
                            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver_telltofriend-' . $this->lang . '.html')) {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver_telltofriend-' . $this->lang . '.html', $replace_variables);
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver_telltofriend.html', $replace_variables);
                            }
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver_telltofriend.html', $replace_variables);
                        }
                        /* Added for language email template */
                        $to       = $email;
                        $from     = $this->siteemail;
                        $redirect = "no";
                        if (SMTP == 1) {
                            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                        } else {
                            // To send HTML mail, the Content-type header must be set
                            $headers = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            // Additional headers
                            $headers .= 'From: ' . $from . '' . "\r\n";
                            $headers .= 'Bcc: ' . $to . '' . "\r\n";
                            mail($to, $subject, $message, $headers);
                        }
                        //$rejectedemails.' '.__('already_reg')
                        $message = [
                            "message" => __('driver_tellfri_email_success'),
                            "status" => 1
                        ];
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "status" => -3,
                            "detail" => $validation_error
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=driver_statistics&driver_id=7
                case 'driver_statistics':
                    $driver_model = Model::factory('driver');
                    $add_model        = Model::factory('add'); // Check Passenger id is avail or not
                    $check_driver_avail = $add_model->driver_id_isValid($mobiledata['driver_id']);
                    if ($mobiledata['driver_id'] != null && $check_driver_avail == 1) {
                        $company_det               = $api->get_company_id($mobiledata['driver_id']);
                        $default_companyid         = ($company_det > 0) ? $company_det['company_id'] : $default_companyid;
                        $check_driver_login_status = $this->is_login_status($mobiledata['driver_id'], $default_companyid);
                        if ($check_driver_login_status == 1) {
                            $driver_id              = $mobiledata['driver_id'];
                $version    = isset($mobiledata['version_no'])?$mobiledata['version_no']:'';
                            if($version != '')
                            {
                                $arr    = ['app_version'=>$version];
                                $result = $api->update_table(MDB_DRIVER_INFO, $arr, '_id', $driver_id);
                            }
                            $driver_details         = $api->driver_profile($driver_id);
                            $driver_logs_rejected   = $api->get_rejected_drivers($driver_id, $default_companyid);
                            $rejected_trips         = $driver_logs_rejected;
                            $driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id, $default_companyid);
                            //$driver_earnings = $driver_model->get_driver_earnings($driver_id);
                            $driver_tot_earnings    = $api->get_driver_total_earnings($driver_id);
                            //$driver_comments = $api->get_driver_comments($driver_id,'',$default_companyid);   
                            $driver_comments        = $api->get_driver_earnings_with_rating($driver_id, $default_companyid);
                            $today_goal             = $amount_left = $today_earnings = 0;
                            $goal_detail            = $api->get_goal_details($driver_id, 'R', 'A', '1');
                            if (count($goal_detail) > 0) {
                                $today_earnings = $goal_detail[0]['acheive_amt'];
                            }
                            $statistics = [];
                            $total_trip = $trip_total_with_rate = $total_ratings = $total_amount = 0;
                            foreach ($driver_comments as $stat) {
                                 $total_trip++;//exit;
                                $total_ratings += $stat['rating'];
                                $total_amount += $stat['total_amount'];
                                if ($stat['rating'] != 0)
                                    $trip_total_with_rate++;
                            }
                           
                            $time_driven = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                            if (count($driver_details) > 0) {
                                $drivername           = ucfirst($driver_details[0]['name']) . ' ' . ucfirst($driver_details[0]['lastname']);
                                $notification_setting = $driver_details[0]['notification_setting'];
                                
                                $overall_trip         = $total_trip + $rejected_trips + $driver_cancelled_trips; //exit;
                                $statistics           = [
                                    "drivername" => $drivername,
                                    "total_trip" => $overall_trip,
                                    "completed_trip" => $total_trip,
                                    //"total_earnings" => round($driver_earnings[0]['total_amount'],2),
                                    "total_earnings" => round($driver_tot_earnings, 2),
                                    //"overall_rejected_trips" => $rejected_trips,
                                    "cancelled_trips" => $driver_cancelled_trips,
                                    //"today_earnings"=>round($today_earnings,2),                                           
                                    "today_earnings" => round($total_amount, 2),
                                    "shift_status" => 'IN',
                                    "time_driven" => $time_driven,
                                    "waiting_time" => $waittime,
                                    "status" => 1
                                ];
                                $message              = [
                                    "message" => __('success'),
                                    "detail" => $statistics,
                                    "status" => 1
                                ];
                            } else {
                                $message = [
                                    "message" => __('invalid_driver'),
                                    "status" => 2
                                ];
                            }
                            //  $message = $statistics;     
                            //} 
                        } else {
                            $message = [
                                "message" => __('driver_not_login'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
            unset(MangoDB::$instances['default']);
                    break;
                //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=driver_shift_status&driver_id=8&shiftstatus=IN&reason=&update_id=
                case 'driver_shift_status':
                    $array        = $mobiledata;
                    $validator    = $this->shift_status_validation($array);
                    if ($validator->check()) {
                        $driver_id      = $array['driver_id'];
                        $company_status = $api->api_companystatus($array['driver_id']);
                        if (($company_status == 'D') || ($company_status == 'T')) {
                            $message = [
                                "message" => __('user_blocked'),
                                "status" => -7
                            ];
                            echo json_encode($message);
                            //return;
                            exit;
                        }
                        if ($array['driver_id'] != null) {
                            $check_result = $api->check_driver_companydetails($array['driver_id'], $default_companyid);
                            if ($check_result == 0) {
                                $message = [
                                    "message" => __('company_deactivaed_driver'),
                                    "status" => '-1'
                                ];
                                echo json_encode($message);
                                exit;
                            }else if($check_result == -1){
                                
                                $message = [
                                "message" => __('invalid_user_driver'),
                                "status" => -1
                            ];
                             echo json_encode($message);
                                exit;
                            }
                            $getTaxiassignedforDriver = $api->get_assignedtaxi_list($driver_id, $default_companyid);
                            //echo count($getTaxiassignedforDriver);    
                            $current_driver_status    = $api->get_driver_current_status($array['driver_id'], $default_companyid);
                            $shiftstatus              = $array['shiftstatus'];
                            if ($array['shiftstatus'] == 'IN') {
                                if (count($getTaxiassignedforDriver) > 0) {
                                    $taxi_id          = "";
                                    $getTaxiforDriver = $api->getTaxiforDriver($driver_id, $default_companyid);
                                   // print_r($getTaxiforDriver);exit;
                                    if (count($getTaxiforDriver) > 0) {
                                        $taxi_id      = $getTaxiforDriver['mapping_taxiid'];
                                        //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                        $driver_reply = $api->update_driver_shift_status($driver_id, $array['shiftstatus']);
                                        /* Shift history */
                                        $cat_id = commonfunction::get_auto_id(MDB_SHIFT_HISTORY);
                                        /* Shift history */
                                        $taxi_km = $api->getTaxiKM($taxi_id);
                                        $taxi_start_km = isset($taxi_km['starting_km']) ? (int)$taxi_km['starting_km'] : (int)0;
                                        $ifTaxiReachService = $api->ifTaxiReachService($taxi_start_km);
                                            
										$km_reach_status = is_array($ifTaxiReachService) ? true : false;
										$service_id = is_array($ifTaxiReachService) ? $ifTaxiReachService['_id'] : 0;
                                            
                                        $insert_array = [
                                            "_id"=>$cat_id,
                                            "driver_shift_id" => (int)$driver_id,
                                            "taxi_id" => $taxi_id,
                                            "shift_start" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000),
                                            "shift_end" => "",
                                            "reason" => $array['reason'],
                                            "createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                            "start_km" => (int)$taxi_start_km,
											"end_km" => (int)0,
											"km_reach_status" => $km_reach_status,
											"taxi_service_id" => (int)$service_id,
											"service_status" => "D",
											"status" => "Shift IN",
											"driver_id" => (int)$driver_id,
                                        ];
                                        //Inserting to Transaction Table 
                                        $transaction  = $this->commonmodel->insert(MDB_SHIFT_HISTORY, $insert_array);
                                        //print_r($transaction);    exit;   
                                       // $insert_id    = $transaction[0];
                                        $insert_id    = $cat_id;
                                        if ($transaction) {
                                            $detail  = [
                                                "update_id" => $insert_id
                                            ];
                                            $message = [
                                                "message" => __('driver_shift'),
                                                "status" => 1,
                                                "detail" => $detail
                                            ];
                                        } else {
                                            $message = [
                                                "message" => __('try_again'),
                                                "status" => -2
                                            ];
                                        }
                                    } else {
                                        $message = [
                                            "message" => __('taxi_not_assigned'),
                                            "status" => -3
                                        ];
                                        //exit;                
                                    }
                                } else {
                                    $message = [
                                        "message" => __('taxi_not_assigned'),
                                        "status" => -3
                                    ];
                                }
                            } else {
                                //print_r($current_driver_status);exit;
                                if ($current_driver_status['status'] != 'A' && $current_driver_status['status'] != 'B') {
                                    $get_driver_log_details = $api->get_driver_log_details($driver_id, $default_companyid);
                                    $driver_trip_count      = count($get_driver_log_details); //exit;
                                    if ($driver_trip_count == 0) {
                                      $update_id     = $array['update_id'];
                                        //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                        $update_arrary = [
                                            "shift_end" => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000),
                                            "status" => "Shift OUT",
                                        ];
                                        if ($update_id != "") {
											 //~ print_r($update_arrary);exit;
                                           
                                            $transaction  = $this->commonmodel->update(DRIVERSHIFTSERVICE, $update_arrary, '_id', (int)$update_id);
                                            $driver_reply = $api->update_driver_shift_status((int)$driver_id, 'OUT');
                                            if ($transaction) {
                                                $message = [
                                                    "message" => __('driver_shift_out'),
                                                    "status" => 1
                                                ];
                                            } else {
                                                $message = [
                                                    "message" => __('try_again'),
                                                    "status" => -2
                                                ];
                                            }
                                        } else {
                                            $message = [
                                                "message" => __('update_id_missing'),
                                                "status" => -5
                                            ];
                                        }
                                    } else {
                                        $message = [
                                            "message" => __('trip_in_future'),
                                            "status" => -4
                                        ];
                                    }
                                } else {
                                    $message = [
                                        "message" => __('driver_in_trip'),
                                        "status" => -1
                                    ];
                                }
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_user_driver'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "status" => -3,
                            "detail" => $validation_error
                        ];
                    }
                    echo json_encode($message);
                    break;
                case 'driver_shift':
                    $array     = $mobiledata;
                    $validator = $this->shift_status_validation($array);
                    if ($validator->check()) {
                        $check_driver_login_status = $this->is_login_status($array['driver_id'], $default_companyid);
                        if ($check_driver_login_status == 1) {
                            $driver_id      = $array['driver_id'];
                            $company_status = $api->api_companystatus($array['driver_id']);
                            if (($company_status == 'D') || ($company_status == 'T')) {
                                $message = [
                                    "message" => __('user_blocked'),
                                    "status" => -7
                                ];
                                echo json_encode($message);
                                //return;
                                exit;
                            }
                            if ($array['driver_id'] != null) {
                                $getTaxiassignedforDriver = $api->get_assignedtaxi_list($driver_id, $default_companyid);
                                //print_r($getTaxiassignedforDriver);   
                                $current_driver_status    = $api->get_driver_current_status($array['driver_id'], $default_companyid);
                                $shiftstatus              = $array['shiftstatus'];
                                if ($array['shiftstatus'] == 'IN') {
                                    if (count($getTaxiassignedforDriver) > 0) {
                                        $taxi_id             = "";
                                        $taxi_id             = $getTaxiassignedforDriver[0]['taxi_id'];
                                        //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                        $update_shift_status = $api->update_driver_shift_status($driver_id, $array['shiftstatus']);
                                        if ($update_shift_status != 0) {
                                            $message = [
                                                "message" => __('driver_shift'),
                                                "status" => 1
                                            ];
                                        } else {
                                            $message = [
                                                "message" => __('try_again'),
                                                "status" => -2
                                            ];
                                        }
                                    } else {
                                        $message = [
                                            "message" => __('taxi_not_assigned'),
                                            "status" => -3
                                        ];
                                    }
                                } else {
                                    if ($current_driver_status[0]->status != 'A') {
                                        $get_driver_log_details = $api->get_driver_log_details($driver_id, $default_companyid);
                                        $driver_trip_count      = count($get_driver_log_details); //exit;
                                        if ($driver_trip_count == 0) {
                                            //$update_id = $array['update_id'];
                                            //$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
                                            //$update_arrary  = array("shift_end" => $company_all_currenttimestamp);
                                            //if($update_id != "")
                                            //{
                                            //$transaction = $this->commonmodel->update(DRIVERSHIFTSERVICE,$update_arrary,'driver_shift_id',$update_id);
                                            $driver_reply = $api->update_driver_shift_status($driver_id, 'OUT');
                                            if ($driver_reply) {
                                                $message = [
                                                    "message" => __('driver_shift_out'),
                                                    "status" => 2
                                                ];
                                            } else {
                                                $message = [
                                                    "message" => __('try_again'),
                                                    "status" => -2
                                                ];
                                            }
                                            /*}
                                            else
                                            {
                                            $message = array("message" => __('update_id_missing'),"status"=>-5);
                                            }*/
                                        } else {
                                            $message = [
                                                "message" => __('trip_in_future'),
                                                "status" => -4
                                            ];
                                        }
                                    } else {
                                        $message = [
                                            "message" => __('driver_in_trip'),
                                            "status" => -1
                                        ];
                                    }
                                }
                            } else {
                                $message = [
                                    "message" => __('invalid_user_driver'),
                                    "status" => -1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('driver_not_login'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => __('validation_error'),
                            "status" => -3,
                            "detail" => $validation_error
                        ];
                    }
                    echo json_encode($message);
                    break;
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=complete_trip&trip_id=574&drop_latitude=11.7625134&drop_longitude=76.1235648&drop_location=vadavalli,coimbatoe&distance=6&actual_distance=&waiting_time=1.5
                 case 'complete_trip':
                    $array = $mobiledata;

                    $api_model    = Model::factory(MOBILEAPI_107);
                    if (!empty($array)) {
                        $driver_model    = Model::factory('driver');
                        $drop_latitude   = $array['drop_latitude'];
                        $drop_longitude  = $array['drop_longitude'];
                        $drop_location   = urldecode($array['drop_location']);
                        $trip_id         = $array['trip_id'];
                        $distance        = $array['distance'];
                        $actual_distance = $array['actual_distance'];
                        $waiting_hours   = $array['waiting_hour'];
                        $waiting_cost='';
                        
                        if ($trip_id != null) {
                            
                            $gateway_details           = $this->commonmodel->gateway_details($default_companyid);
                            
                            $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
                            
                            $p_referral_discount       = 0;
                            $pickupdrop                = $taxi_id = $company_id = 0;
                            $fare_per_hour             = $waiting_per_hour = $total_fare = $nightfare = 0;
                            
                            if (count($get_passenger_log_details) > 0) {
                                /******* Check whether the trip is completed if so we change the driver status and trip travel status and give response **********/
                                $flag         = 0;
                                $trans_result = $api->check_tranc($trip_id, $flag);
                                
                                if (count($trans_result) > 0) {
                                    $travel_status = $trans_result[0]['travel_status'];
                                    //exit;
                                    $transid       = $trans_result[0]['id'];
                                    $driver_id     = $trans_result[0]['driver_id'];
                                    if ($travel_status == 1 && $transid != "") {
                                        /********** Update Driver Status after complete Payments *****************/
                                        $update_driver_arrary = [
                                            "status" => 'F'
                                        ];
                                        //$result               = $api->update_table(DRIVER, $update_driver_arrary, 'driver_id', $driver_id);
                                        $result               = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_id);
                                        /************Update Driver Status ***************************************/
                                        $msg_status           = 'R';
                                        $driver_reply         = 'A';
                                        $journey_status       = 1; // Waiting for Payment
                                        $journey              = $api->update_journey_status($trip_id, $msg_status, $driver_reply, $journey_status);
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array    = [
                                            "status" => 7
                                        ];
                                        //$result               = $api->update_table(DRIVER_REQUEST_DETAILS, $update_trip_array, 'trip_id', $trip_id);
                                        $result               = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $trip_id); 
                                        /*************************************************************************/
                                        $message              = [
                                            "message" => __('trip_fare_already_updated'),
                                            "status" => -1
                                        ];
                                        echo json_encode($message);
                                        break;
                                    }
                                    
                                    if ($travel_status == 5 && $transid != "") {
                                        /*****fd***** Update Driver Status after complete Payments *****************/
                                        $update_driver_arrary = [
                                            "status" => 'F'
                                        ];
                                        $result               = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_id);
                                        /************Update Driver Status ***************************************/
                                        $msg_status           = 'R';
                                        $driver_reply         = 'A';
                                        $journey_status       = 1; // Waiting for Payment
                                        $journey              = $api->update_journey_status($trip_id, $msg_status, $driver_reply, $journey_status);
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array    = [
                                            "status" => 7
                                        ];
                                        $result               = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $trip_id);
                                        /*************************************************************************/
                                        $message              = [
                                            "message" => __('trip_fare_and_status_updated'),
                                            "status" => -1
                                        ];
                                        echo json_encode($message);
                                        break;
                                    }
                                    if ($travel_status == 2 && $transid != "") {
                                        /********** Update Driver Status after complete Payments *****************/
                                        $update_driver_arrary = [
                                            "status" => 'F'
                                        ];
                                        $result               = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_id);
                                        /************Update Driver Status ***************************************/
                                        $msg_status           = 'R';
                                        $driver_reply         = 'A';
                                        $journey_status       = 1; // Waiting for Payment
                                        $journey              = $api->update_journey_status($trip_id, $msg_status, $driver_reply, $journey_status);
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array    = [
                                            "status" => 7
                                        ];
                                        $result               = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $trip_id);
                                        /*************************************************************************/
                                        $message              = [
                                            "message" => __('trip_fare_and_status_updated'),
                                            "status" => -1
                                        ];
                                        echo json_encode($message);
                                        break;
                                    }
                                } else {
                                    $passenger_discount  = $get_passenger_log_details[0]['passenger_discount']; // 
                                   // echo '<pre>'; print_r($get_passenger_log_details);//exit;
                                    $passengers_id       = $get_passenger_log_details[0]['passengers_id'];
                                    $payment_type       = $get_passenger_log_details[0]['payment_type'];
                                    $referred_by         = $get_passenger_log_details[0]['referred_by'];
                                    //$referral_earned_amount = $get_passenger_log_details[0]->referral_earned_amount;
                                    $referrer_earned     = $get_passenger_log_details[0]['referrer_earned'];
                                    $company_tax         = $get_passenger_log_details[0]['company_tax'];
                                    $tax                 = (FARE_SETTINGS != 2) ? TAX : $company_tax;
                                    $total_distance      = $get_passenger_log_details[0]['distance'];
                                   // $used_wallet_amount  = $get_passenger_log_details[0]['used_wallet_amount'];
                                    $promocode           = $get_passenger_log_details[0]['promocode'];
                                   // print_r($get_passenger_log_details);exit;
                                    $travel_status       = $get_passenger_log_details[0]['travel_status'];
                                    $vip_user            = isset($get_passenger_log_details[0]['vip_user'])?$get_passenger_log_details[0]['vip_user']:0;
                                    $p_referral_discount = 0;
                                    $pickupdrop          = $taxi_id = $company_id = 0;
                                    $fare_per_hour       = $waiting_per_hour = $total_fare = $nightfare = $eveningfare= 0;
                                              

                                    //echo $travel_status;exit;
                                    //$travel_status =2;
                                    if (($travel_status == 2) || ($travel_status == 5)) {
                                        $pickup             = $get_passenger_log_details[0]['current_location'];
                                        $drop               = $get_passenger_log_details[0]['droplocation'];
                                        $pickupdrop         = $get_passenger_log_details[0]['pickupdrop'];
                                        $taxi_id            = $get_passenger_log_details[0]['taxi_id'];
                                       
                                        //echo $pickuptime         = date('Y-m-d H:i:s', strtotime($get_passenger_log_details[0]['pickup_time']));exit;
                                        $pickuptime1 = commonfunction::convertphpdate('Y-m-d H:i:s',$get_passenger_log_details[0]['pickup_time']);
                                        $pickuptime = strtotime($pickuptime1);
                                        $pickuptime         = date('H:i:s', $pickuptime);
                                        $company_id         = $get_passenger_log_details[0]['company_id'];
                                        $driver_id          = $get_passenger_log_details[0]['driver_id'];
                                        $approx_distance    = $get_passenger_log_details[0]['approx_distance'];
                                        $approx_fare        = $get_passenger_log_details[0]['approx_fare'];
                                        $fixedprice         = $get_passenger_log_details[0]['fixedprice'];
                                        $passengers_id      = $get_passenger_log_details[0]['passengers_id'];
                                        $referred_by        = $get_passenger_log_details[0]['referred_by'];
                                        $promo_code        = $get_passenger_log_details[0]['promocode'];
                                       $actual_pickup_time = isset($get_passenger_log_details[0]['actual_pickup_time'])?$get_passenger_log_details[0]['actual_pickup_time']:'';
                                       /* WAITING TIME UPDATE - NEW CHANGES - STARTS*/
                                       $actual_arrived_time = isset($get_passenger_log_details[0]['arrived_time'])?$get_passenger_log_details[0]['arrived_time']:'';
                                       $actual_pickup_time = commonfunction::convertphpdate('Y-m-d H:i:s',$actual_pickup_time);
                                         $actual_arrived_time = commonfunction::convertphpdate('Y-m-d H:i:s',$actual_arrived_time);
                                        
                                         $waiting_interval = abs(strtotime($actual_pickup_time) - strtotime($actual_arrived_time));
                                        
                                         $waiting_minutes  = round($waiting_interval / 60);
                                         $waiting_hours = $waiting_minutes / 60; //The formula to convert from minutes to hours is: hours = minutes ÷ 60
                                       /* WAITING TIME UPDATE - NEW CHANGES  - ENDS */
                                        $company_id         = $get_passenger_log_details[0]['company_id'];
                                        $airport_pickup         = $get_passenger_log_details[0]['airport_pickup'];
                                        //$taxi_details       = $api->get_taxi_model_details($taxi_id); //as per new requiremnt on aug 20 / 2016
                                        //$taxi_model_id      = $taxi_details['taxi_model'];//as per new requiremnt on aug 20 / 2016
                                        $taxi_model_id  = $get_passenger_log_details[0]['taxi_modelid'];
                                        $passenger_wallet  = $get_passenger_log_details[0]['passenger_wallet_amount'];
                                        
                                       
                                        
                                        if ($travel_status != 5) {
                                            $drop_time      = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
                                            //echo $drop_time."--".$actual_pickup_time;exit;
                                            $msg_status     = 'R';
                                            $driver_reply   = 'A';
                                            $journey_status = 5; // Waiting for Payment
                                            $journey        = $api->update_journey_statuswith_drop($trip_id, $msg_status, $driver_reply, $journey_status, $drop_latitude, $drop_longitude, $drop_location, $drop_time, $distance, $waiting_hours, $tax);
                                            $trip_pay_drop  = $api->update_dropstatus_trippaydetails($trip_id, $drop_latitude, $drop_longitude, $drop_location);
                                            
                                        } else {
                                            $drop_time = $get_passenger_log_details[0]['drop_time'];
                                        }
                                        /*************** Update arrival in driver request table ******************/
                                        $update_trip_array    = [
                                            "status" => 7
                                        ];
                                        $result               = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $trip_id);
                                        /*************************************************************************/
                                        /** Update Driver Status **/
                                        
                                        $update_driver_array   = [
                                            "loc" => ["type" => "Point",
                                                           "coordinates" => [(double)$array['drop_longitude'],(double)$array['drop_latitude']]],
                                            "status" => strtoupper('A'),
                                            "update_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                                        ];
                                        if (($array['drop_latitude'] > 0) && ($array['drop_longitude'] > 0)) {
                                            $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', $driver_id);
                                        } else {
                                            $update_driver_arrary = [
                                                "status" => 'A'
                                            ];
                                            $result               = $api->update_table(MDB_DRIVER_INFO, $update_driver_array, '_id', $driver_id);
                                        }
                                        /*********************/
                                        $base_fare            = '0';
                                        $min_km_range         = '0';
                                        $min_fare             = '0';
                                        $cancellation_fare    = '0';
                                        $below_above_km_range = '0';
                                        $below_km             = '0';
                                        $above_km             = '0';
                                        $night_charge         = '0';
                                        $night_timing_from    = '0';
                                        $night_timing_to      = '0';
                                        $night_fare           = '0';
                                        $evening_charge       = '0';
                                        $evening_timing_from  = '0';
                                        $evening_timing_to    = '0';
                                        $evening_fare         = '0';
                                        $waiting_per_hour     = '0';
                                        $minutes_cost         = '0';
                                        $minutes_fare         = '0';
                                        $time                 = '0';
                                        $waiting_free         = '0';
                                        $corporate_fare       = "0.00";
                                        $discount_fare        = "0.00";
                                        $nightfare_applicable  = 0;
                                        $evefare_applicable  = 0;


                                        $roundtrip = "No";
                                        if ($pickupdrop == 1) {
                                            $roundtrip = "Yes";
                                            //$total_distance = $total_distance * 2;
                                        }

                                        $drop_time = (is_object($drop_time))?commonfunction::convertphpdate('Y-m-d H:i:s',$drop_time):$drop_time;

                                        $interval = abs(strtotime($drop_time) - strtotime($actual_pickup_time));
                                       
                                        $minutes  = round($interval / 60);

                                        if($airport_pickup == 1 ){
                                            
                                            $siteinfo_details   = $api_model->siteinfo_details();
                                            $airport_drop       = $siteinfo_details['airport_drop_of'];
                                            $airport_pick       = $siteinfo_details['airport_pick_up'];
                                            $air_fare           = ($get_passenger_log_details[0]['airport_type'] == 1)?$airport_pick:$airport_drop;
                                            $total_fare         = $air_fare;
                                            $trip_fare            = $total_fare;

                                           
                                        }
                                        else
                                        {

                                        $taxi_fare_details  = $api->get_model_fare_details($company_id, $taxi_model_id, $get_passenger_log_details[0]['search_city']);  
                                        if (count($taxi_fare_details) > 0) {
                                            $base_fare            = $taxi_fare_details[0]['base_fare'];
                                            $min_km_range         = $taxi_fare_details[0]['min_km'];
                                            $min_fare             = $taxi_fare_details[0]['min_fare'];
                                            $cancellation_fare    = $taxi_fare_details[0]['cancellation_fare'];
                                            $below_above_km_range = $taxi_fare_details[0]['below_above_km'];
                                            $below_km             = $taxi_fare_details[0]['below_km'];
                                            $above_km             = $taxi_fare_details[0]['above_km'];
                                            $night_charge         = $taxi_fare_details[0]['night_charge'];
                                            $night_timing_from    = $taxi_fare_details[0]['night_timing_from'];
                                            $night_timing_to      = $taxi_fare_details[0]['night_timing_to'];
                                            $night_fare           = $taxi_fare_details[0]['night_fare'];
                                            $evening_charge       = $taxi_fare_details[0]['evening_charge'];
                                            $evening_timing_from  = $taxi_fare_details[0]['evening_timing_from'];
                                            $evening_timing_to    = $taxi_fare_details[0]['evening_timing_to'];
                                            $evening_fare         = $taxi_fare_details[0]['evening_fare'];
                                            $waiting_per_hour     = $taxi_fare_details[0]['waiting_time'];
                                            $minutes_fare         = $taxi_fare_details[0]['minutes_fare'];
                                            $time                 = $taxi_fare_details[0]['time'];
                                            $waiting_free         = $taxi_fare_details[0]['waiting_free'];                                          
                                        }
                                        
                                        /*$roundtrip = "No";
                                        if ($pickupdrop == 1) {
                                            $roundtrip = "Yes";
                                            //$total_distance = $total_distance * 2;
                                        }*/
                                        
                                        /********Minutes fare calculation *******/
                                    //  $drop_time = (is_object($drop_time))?commonfunction::convertphpdate('Y-m-d H:i:s',$drop_time):$drop_time;
                                        //$pickuptime =(is_object($pickuptime))?commonfunction::convertphpdate('Y-m-d H:i:s',$pickuptime):$pickuptime;
                                        //exit;
                                        
                                        //echo "drop".$drop_time = commonfunction::convertphpdate('Y-m-d h:i:s',$drop_time);
                                        //echo "pickuptime".$pickuptime = commonfunction::convertphpdate('Y-m-d h:i:s',$pickuptime);
                                        
                                    
                                        
                                        
                                      /* $interval = abs(strtotime($drop_time) - strtotime($actual_pickup_time));
                                       
                                        $minutes  = round($interval / 60);*/
                                        if($minutes<=$time){
                                            $total_fare = $base_fare;
                                            
                                        }

                                        if (FARE_CALCULATION_TYPE == 1 || FARE_CALCULATION_TYPE == 3) {
                                            if ($total_distance < $min_km_range) {
                                                $total_fare = $min_fare;
                                            } else if ($total_distance <= $below_above_km_range) {
                                                $fare       = $total_distance * $below_km;
                                                $total_fare = $fare + $base_fare;
                                            } else if ($total_distance > $below_above_km_range) {
                                                $fare       = $total_distance * $above_km;
                                                $total_fare = $fare + $base_fare;
                                            }
                                        }
                                        if (FARE_CALCULATION_TYPE == 2 || FARE_CALCULATION_TYPE == 3) {
                                            
                                            if ($minutes_fare > 0 && $minutes>$time) {
                                                $minute_per_15 = ceil($minutes / $time);
                                                /*if($minutes > $waiting_free){ 
                                                $deduct_mins = $minutes - $waiting_free;
                                                $minute_per_15 = ceil($deduct_mins / $time);
                                                }*/
                                                $minutes_cost = $minute_per_15 * $minutes_fare;
                                                $total_fare   = $total_fare + $minutes_cost;
                                            }

                                            /************************************************/
                                        }
                                        $minutes_traveled = $minutes;

                                        //$trip_fare            = $total_fare;
                                        // Airport Parking charge
                                        /*if($airport_pickup == 1 ){
                                            
                                            $siteinfo_details   = $api_model->siteinfo_details();
                                            $airport_drop       = $siteinfo_details['airport_drop_of'];
                                            $airport_pick       = $siteinfo_details['airport_pick_up'];
                                            $air_fare           = ($get_passenger_log_details[0]['airport_type'] == 1)?$airport_pick:$airport_drop;
                                            $total_fare         = $air_fare + $total_fare;
                                        }*/
                                        //echo "TOTAL". $total_fare;   
                                        // Waiting Time calculation
                                        //if($airport_pickup != 1 ){ As confirmed with Don on 22 Dec 2016
                                                
                                        /** WAITING COST DEDEUCTION BASED ON WAITING FREE MINUTES **/
                                        /* WAITING TIME - NEW UPDATE - STARTS */
                                        
                                        
                                        if($waiting_minutes > $waiting_free){
                                                $deduct_mins = $waiting_minutes - $waiting_free;
                                                $waiting_hours = $deduct_mins / 60; //The formula to convert from minutes to hours is: hours = minutes ÷ 60
                                                $waiting_cost         = $waiting_per_hour * $waiting_hours; 
                                            }
                                        
                                        /* WAITING TIME - NEW UPDATE - ENDS */
                                        
                                        
                                        
                                        
                                        //The formula to convert from hours to minutes is:minutes = hours x 60
                                            /*$waiting_mins_check = $waiting_hours * 60;
                                            if($waiting_mins_check > $waiting_free){
                                                $deduct_mins = $waiting_mins_check - $waiting_free;
                                                $waiting_hours = $deduct_mins / 60; //The formula to convert from minutes to hours is: hours = minutes ÷ 60
                                                $waiting_cost         = $waiting_per_hour * $waiting_hours; 
                                            }*/
                                        /** WAITING COST DEDEUCTION BASED ON WAITING FREE MINUTES **/   
                                            
                                       
                                        $total_fare           = $waiting_cost + $total_fare;
                                        $trip_fare            = $total_fare;
                                    
                                        //} As confirmed with Don on 22 Dec 2016
                                        //echo "TOTAL". $total_fare;   
                                        // Passenger individual Discount Calculation    
                                        /*$corporate_fare = "0.00";
                                        $discount_fare = "0.00";*/
                                        /*if ($promocode != "") {
                                            $passenger_info =  $api->get_passenger_details_by_id($passengers_id);
                                            $passenger_number = $passenger_info[0]['phone'];
                                            $getpromodetails = $api->getpromodetails($promocode, $passengers_id,$passenger_number);
                                           //echo '<pre>'; 
                                          //print_r($getpromodetails);//exit;
                                            $passenger_discount = explode("|",$getpromodetails);
                                             // echo "OFFER %". $passenger_discount[0];
                                            if($passenger_discount[0] > 0) {
                                                
                                                if ($passenger_discount[0] != '0') {
                                                    $corporate_fare = ($passenger_discount[1] / 100) * $total_fare;
                                                    $discount_fare = ($passenger_discount[0] / 100) * $total_fare;
                                                    $total_fare    = $total_fare - $discount_fare;
                                                }
                                            }
                                        }*/
                                        
                                    /*  
                                        //Night Fare Calculation
                                        $nightfare_applicable = $date_difference = 0;
                                        if ($night_charge != 0) {
                                            if ($pickuptime >= $night_timing_from && $pickuptime <= $night_timing_to) {
                                                $nightfare_applicable = 1;
                                                $nightfare            = ($night_fare / 100) * $total_fare; //night_charge%100;                  
                                                $total_fare           = $nightfare + $total_fare;
                                            }
                                        }
                                        // echo "TOTAL". $total_fare;  //exit;
                                        // echo "<br>";
                                        //Evening Fare Calculation
                                        // $eveningfare        = 0;
                                        $evefare_applicable = $date_difference = 0;
                                        if ($evening_charge != 0) {
                                            
                                            if ($pickuptime >= $evening_timing_from && $pickuptime <= $evening_timing_to) {
                                                $evefare_applicable = 1;
                                                 $eveningfare        = ($evening_fare / 100) * $total_fare; //night_charge%100;                 
                                                $total_fare         = $eveningfare + $total_fare;
                                            }
                                        }*/

                                    }//else part of if airport pickup

                                    if ($promocode != "") {
                                            $passenger_info =  $api->get_passenger_details_by_id($passengers_id);
                                            $passenger_number = $passenger_info[0]['phone'];
                                            $getpromodetails = $api->getpromodetails($promocode, $passengers_id,$passenger_number);
                                           //echo '<pre>'; 
                                          //print_r($getpromodetails);//exit;
                                            $passenger_discount = explode("|",$getpromodetails);
                                             // echo "OFFER %". $passenger_discount[0];
                                            if($passenger_discount[0] > 0) {
                                                
                                                if ($passenger_discount[0] != '0') {
                                                    $corporate_fare = ($passenger_discount[1] / 100) * $total_fare;
                                                    $discount_fare = ($passenger_discount[0] / 100) * $total_fare;
                                                    $total_fare    = $total_fare - $discount_fare;
                                                }
                                            }

                                    }
                                    if($airport_pickup!=1){
                                        //Night Fare Calculation
                                        if ($night_charge != 0) {
                                            if ($pickuptime >= $night_timing_from && $pickuptime <= $night_timing_to) {
                                                $nightfare_applicable = 1;
                                                $nightfare            = ($night_fare / 100) * $total_fare; //night_charge%100;                  
                                                $total_fare           = $nightfare + $total_fare;
                                            }
                                        }
                                        // echo "TOTAL". $total_fare;  //exit;
                                        // echo "<br>";
                                        //Evening Fare Calculation
                                        // $eveningfare        = 0;
                                        if ($evening_charge != 0) {
                                            
                                            if ($pickuptime >= $evening_timing_from && $pickuptime <= $evening_timing_to) {
                                                $evefare_applicable = 1;
                                                 $eveningfare        = ($evening_fare / 100) * $total_fare; //night_charge%100;                 
                                                $total_fare         = $eveningfare + $total_fare;
                                            }
                                        }
                                    }

                                   if(PENDING_PAYMENT_ENABLE == 1)
                                   {
                                    //passenger pending payment
                                    $passenger_pending_amt = $api->get_pending_amt($passengers_id);
                                    $total_fare = $passenger_pending_amt+$total_fare; 
                                   }
                                   else
                                   {
                                    $passenger_pending_amt = 0;
                                   }

                                    

                                       //echo "TOTAL". $total_fare;  exit;
                                        $total_fare    = ($fixedprice != 0) ? $fixedprice : $total_fare;
                                        $trip_fare     = round($trip_fare, 2);
                                        $total_fare    = round($total_fare, 2);
                                        $subtotal_fare = $total_fare; //to display the actual total trip fare in complete trip page
                                        $usedAmount    = 0;
                                        $nightfare     = round($nightfare, 2);

                                       
                                        if (SMS == 1 && $travel_status != 5) {
                                            $passenger_phone_no = $api->get_passenger_phone_by_id($passengers_id);
                                            $message_details    = $this->commonmodel->sms_message_by_title('complete_trip');
                                            $to                 = $passenger_phone_no;
                                            $message            = $message_details['sms_description'];
                                            $message            = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                            $api->sendSMS($to,$message);
                                        }
                                        
                                        $p_device_token = isset($get_passenger_log_details[0]['passenger_device_token']) ? $get_passenger_log_details[0]['passenger_device_token'] : '';
                                        $p_device_type  = isset($get_passenger_log_details[0]['passenger_device_type']) ? $get_passenger_log_details[0]['passenger_device_type'] : '';
                                        /** CHECK PASSNEGER'S PARENT **/
                                        $passeger_name = (isset($get_passenger_log_details[0]['passenger_name']) ? $get_passenger_log_details[0]['passenger_name'] :0);
                                        $passenger_id        = (isset($get_passenger_log_details[0]['passengers_id']) ?$get_passenger_log_details[0]['passengers_id'] :0);
                                        $passenger_parent_id        = (isset($get_passenger_log_details[0]['passenger_parent']) ?$get_passenger_log_details[0]['passenger_parent'] :0);
                                        $passenger_allow_creditcard        = (isset($get_passenger_log_details[0]['passenger_allow_creditcard'])?$get_passenger_log_details[0]['passenger_allow_creditcard'] :0);
                                        $pay_by        = (isset($get_passenger_log_details[0]['pay_by'])?$get_passenger_log_details[0]['pay_by'] :0);
                                        $lateral_start_date        = (isset($get_passenger_log_details[0]['lateral_start_date'])?$get_passenger_log_details[0]['lateral_start_date'] :0);
                                        $lateral_end_date        = (isset($get_passenger_log_details[0]['lateral_end_date'])?$get_passenger_log_details[0]['lateral_end_date'] :0);
                                        $passenger_trip_alert        = (isset($get_passenger_log_details[0]['passenger_trip_alert']) ?$get_passenger_log_details[0]['passenger_trip_alert'] :0);
                                        /** CHECK PASSNEGER'S PARENT **/
                                        if($pay_by == 1 || $pay_by == 2 ){
                                             $gateway_details_new           = $this->commonmodel->gateway_details($default_companyid,4);
                                              $gateway_details = array_merge($gateway_details,$gateway_details_new);
                                        }
                                        /*if($passenger_parent_id == 0){}
                                        else{
                                            if($passenger_allow_creditcard == 1){
                                                $gateway_details_new = array(
                                                 array(
                                                    "_id" => "5",
                                                    "pay_mod_name" => "Pay By Primary Account",
                                                    "pay_mod_default" => "0"
                                                
                                            )
                                            );
                                            $gateway_details = array_merge($gateway_details,$gateway_details_new);
                                            }
                                            
                                        }*//*comented as told*/
                                      foreach($gateway_details as $k => $g){
                                            $gateway_details[$k]['image_normal'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_normal.png';
                                            $gateway_details[$k]['image_active'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_active.png';
                                      }
                                       
                                        /** Update Driver Status End**/
                                        //variable to know whether the passenger have credit card
                                        
                                       /* $check_card_data = $api->check_passenger_card_data($passengers_id);
                                        $credit_card_sts = ($check_card_data == 0) ? 0 : 1;*/
                                        $credit_card_sts = 1;
                                        //condition checked to remove creditcard key value from array
                                        
                                        /*
                                        if ($check_card_data == 0) {
                                            //condition checked to remove credit card if the passenger dont have credit card details
                                            $smpleArr = array();
                                            foreach ($gateway_details as $key => $valArr) {
                                                if ($valArr['pay_mod_id'] != 2) {
                                                    $smpleArr[] = $valArr;
                                                }
                                            }
                                            $gateway_details = $smpleArr;
                                        }
                                        
                                        */
                                        //to change the payment mode detail if trip fare is zero
                                        /*
                                        if ($total_fare == 0) {
                                            $gateway_details = array(
                                                "0" => array(
                                                    "pay_mod_id" => "5",
                                                    "pay_mod_name" => "Wallet",
                                                    "pay_mod_default" => "1"
                                                )
                                            );
                                        }
                                        */
                                        
                                        
                                        //the hours value has been changed to seconds
                                        $convertSeconds = $waiting_hours * 3600;
                                        $converthours   = floor($convertSeconds / 3600);
                                        $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                                        $convertsecs    = floor($convertSeconds % 60);
                                        $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                                        $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                                        $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                                        $waitingTime    = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS : $waitM .':' . $waitS;
                                        $detail         = [
                                            "trip_id" => $trip_id,
                                            "pass_id" => $passengers_id,
                                            "distance" => $total_distance,
                                            "trip_fare" => $trip_fare,
                                            "referdiscount" => 0,
                                            "promo_discount_per" => 0,
                                            "promodiscount_amount" => 0,
                                            "passenger_discount" =>  $discount_fare,
                                            "corporate_discount" =>  $corporate_fare,
                                            "nightfare_applicable" => $nightfare_applicable,
                                            "nightfare" => $nightfare,
                                            "eveningfare_applicable" => $evefare_applicable,
                                            "eveningfare" => $eveningfare,
                                            "waiting_time" => $waitingTime,
                                            "waiting_cost" => $waiting_cost,
                                            "tax_amount" => 0,
                                            "subtotal_fare" => $subtotal_fare,
                                            "total_fare" => $total_fare,
                                            "gateway_details" => $gateway_details,
                                            "pickup" => $pickup,
                                            "drop" => $drop_location,
                                            "pickup_latitude" => $get_passenger_log_details[0]['pickup_latitude'],
                                            "pickup_longitude" => $get_passenger_log_details[0]['pickup_longitude'],
                                            "drop_latitude" => $drop_latitude,
                                            "drop_longitude" => $drop_longitude,
                                            "company_tax" => $tax,
                                            "waiting_per_hour" => $waiting_per_hour,
                                            "roundtrip" => $roundtrip,
                                            "minutes_traveled" => $minutes,
                                            "minutes_fare" => $minutes_cost,
                                            "metric" => UNIT_NAME,
                                            "credit_card_status" => $credit_card_sts,
                                            "wallet_amount_used" => 0,
                                            "payment_type" => $payment_type,
                                            "passenger_pending_amt" => $passenger_pending_amt,
                                        ];
                                        //update data for passenger notification
                                        //wallet modification

                                        $update_query = ['passenger_pending_amt'=>abs($passenger_pending_amt)];
                                        $api->update_wallet_amt_in_log($trip_id,$update_query);

                                        $lateral_end_date_sec = 0;

                                        if($lateral_end_date != '')
                                        {
                                            $lateral_end_date_sec = (isset($lateral_end_date->sec) ? $lateral_end_date->sec : (is_object($lateral_end_date) && method_exists($lateral_end_date, 'toDateTime') ? $lateral_end_date->toDateTime()->getTimestamp() : 0));
                                        }

                                        if(($passenger_wallet >= $total_fare && $passenger_wallet != 0 && $passenger_wallet > 0 && WALLET_ENABLE == 1) || ($vip_user == 1 && $passenger_wallet >= WALLET_ADVANCE_LIMIT && strtotime($this->currentdate) < $lateral_end_date_sec && WALLET_ENABLE == 1))
                                        {
                                            $passenger_log_id = $trip_id;

                                            $total_fare = $total_fare - $passenger_pending_amt;


                                            $used_wallet_amount =  $total_fare;


                                            $total_fare=(double)0;
                                            $details['wallet_amount_used'] = $used_wallet_amount;

                                            $tips = 0;
                                            $tax_amount = 0;
                                            $remarks="-";
                                            $eveningfare_applicable = 0;
                                            $eveningfare = 0;
                                            $advance_payment = 0;

                                            if ($vip_user == 1 && $passenger_wallet >= WALLET_ADVANCE_LIMIT && $passenger_wallet < 0) {
                                                $advance_payment = 1;
                                            }

                                            try {
                                                $update_commission = $this->commonmodel->update_commission($passenger_log_id, $total_fare, ADMIN_COMMISSON);
                                                $inc_id = $api->get_insert_id(MDB_TRANSACTION);
                                                $insert_array = [
                                                    "passengers_log_id" => (int)$passenger_log_id,
                                                    "distance" => $detail['distance'],
                                                    "actual_distance" => $detail['distance'],
                                                    "distance_unit" => UNIT_NAME,
                                                    "tripfare" => (double)$trip_fare,
                                                    "fare" => (double)$total_fare,
                                                    "tips" => (double)$tips,
                                                    "waiting_cost" => (double)$detail['waiting_cost'],
                                                    "passenger_discount" => (double)$detail['passenger_discount'],
                                                    "corporate_amount" => isset($detail['corporate_discount'])?(double)$detail['corporate_discount']:0,
                                                    "company_tax" => (double)$tax_amount,
                                                    "waiting_time" => $detail['waiting_time'],
                                                    "trip_minutes" => $minutes,
                                                    "minutes_fare" => (double)$minutes_fare,
                                                    "remarks" => $remarks,
                                                    "payment_type" => (int)6,
                                                    "amt" => (double)$total_fare,
                                                    "nightfare_applicable" => $nightfare_applicable,
                                                    "nightfare" => (double)$nightfare,
                                                    "eveningfare_applicable" => $eveningfare_applicable,
                                                    "eveningfare" => (double)$eveningfare,
                                                    "admin_amount" => (double)$update_commission['admin_commission'],
                                                    "company_amount" => (double)$update_commission['company_commission'],
                                                    "trans_packtype" => $update_commission['trans_packtype'],
                                                    "payment_basis" => (int)3,
                                                    "notify_status" => (int)0,
                                                    "advance_payment" => (int)$advance_payment,
                                                    "wallet_amount_used" => (double)$used_wallet_amount,
                                                    "current_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                                    "driver_edit_status"=>(int)3
                                                ];

                                                if($advance_payment == 1)
                                                {
                                                     $insert_array['wallet_amount_used']  = (int)0;
                                                     $insert_array['pending_amt'] = (double)$used_wallet_amount;

                                                }

                                                $check_trans_already_exist = $api->checktrans_details($passenger_log_id);
                                                
                                                if (count($check_trans_already_exist) > 0) {
                                                    $tranaction_id      = $check_trans_already_exist['_id'];
                                                    $update_transaction = $api->update_table(MDB_TRANSACTION, $insert_array, '_id',$tranaction_id);
                                                    $jobreferral        = $tranaction_id;
                                                } else {
                                                    $insert_array['_id'] = $inc_id;
                                                    $transaction = $this->commonmodel->insert(MDB_TRANSACTION, $insert_array);
                                                    $jobreferral = $inc_id;
                                                }

                                                if($promo_code!='')
                                                {
                                                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                                                }
                                                $update_query = ['wallet_amount_used'=>abs($used_wallet_amount)];
                                                $api->update_wallet_amt_in_log($passenger_log_id,$update_query);


                                                if($advance_payment == 1)
                                                {
                                                    $payment_array =[
                                                    'add_amt'=>0,
                                                    'cash_pay'=>0,
                                                    'card_pay'=>0,
                                                    'knet_pay'=>0,
                                                    'pending_pay'=>(double)$used_wallet_amount,
                                                    'wallet_pay'=>0,
                                                    'fare_note'=>''
                                                    ]; 
                                                }
                                                else
                                                {
                                                   $payment_array =[
                                                    'add_amt'=>0,
                                                    'cash_pay'=>0,
                                                    'card_pay'=>0,
                                                    'knet_pay'=>0,
                                                    'pending_pay'=>0,
                                                    'wallet_pay'=>(double)$used_wallet_amount,
                                                    'fare_note'=>''
                                                    ];
                                                }

                                                $api->payentry($passenger_log_id,$payment_array);
                                

                                                /********** Update Driver Status after complete Payments *****************/
                                                $drivers_id = isset($get_passenger_log_details[0]['driver_id']) ? $get_passenger_log_details[0]['driver_id'] : '';
                                                $update_driver_arrary = [
                                                    "status" => 'F'
                                                ];
                                                $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $drivers_id);
                                                /************Update Driver Status ***************************************/
                                                /*************** Update in driver request table ******************/
                                                $update_trip_array = [
                                                    "status" => 8
                                                ];
                                                $result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id',$passenger_log_id);

                                                $update_wallet = $api->update_wallet_without_log($passenger_id,$used_wallet_amount,1,$passenger_log_id);
                                                /*************************************************************************/
                                                $pickup            = isset($get_passenger_log_details[0]['current_location']) ? $get_passenger_log_details[0]['current_location'] : '';
                                                if (SMS == 1) {
                                                    $passenger_phone_no = isset($get_passenger_log_details[0]['phone']) ? $get_passenger_log_details[0]['phone'] : '';
                                                    $message_details    = $this->commonmodel->sms_message_by_title('payment_confirmed_sms');
                                                    $to         = $passenger_phone_no;
                                                    $message    = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                                    $message    = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                                    $result     = $api->sendSMS($to, $message);
                                                }
                                                $detail           = [
                                                    "fare" => $total_fare,
                                                    "pickup" => $pickup,
                                                    "jobreferral" => $jobreferral,
                                                    "trip_id" => $passenger_log_id
                                                ];
                                                $message          = [
                                                    "message" => __('fare_update_wallet'),
                                                    "detail" => $detail,
                                                    "status" => 5
                                                ];
                                                $pushmessage      = [
                                                    "message" => __('fare_update_wallet'),
                                                    "fare" => $total_fare,
                                                    "trip_id" => $passenger_log_id,
                                                    "pickup" => $pickup,
                                                    "status" => 5
                                                ];
                                                //print_r($pushmessage);
                                                //exit;
                                                //$message = $pushmessage;  
                                                $send_mail_status = $this->send_mail_passenger($passenger_log_id, 1);
                                            }
                                            catch (Kohana_Exception $e) {
                                                //  print_r($e);
                                                $message = [
                                                    "message" => __('trip_fare_already_updated'),
                                                    "status" => -1
                                                ];
                                            }
                                            echo json_encode($message);
                                            exit;

                                        }
                                        else if($passenger_wallet != 0 && $passenger_wallet > 0 && WALLET_ENABLE == 1)
                                        {
                                            $used_wallet_amount = $passenger_wallet; 
                                            $remaining_amount = $total_fare - $passenger_wallet; 
                                            $total_fare    = round($remaining_amount, 2);
                                            $subtotal_fare = $remaining_amount; 
                                            $detail['total_fare']=$total_fare; 
                                            $detail['subtotal_fare']=$subtotal_fare; 
                                            $detail['wallet_amount_used']=$used_wallet_amount;
                                            $update_query = ['wallet_amount_used'=>abs($used_wallet_amount)];
                                            $api->update_wallet_amt_in_log($trip_id,$update_query);

                                             $message        = [
                                                "message" => __('trip_completed_driver'),
                                                "detail" => $detail,
                                                "status" => 4
                                            ];
                                        }
                                        else
                                        {
                                            $message        = [
                                                "message" => __('trip_completed_driver'),
                                                "detail" => $detail,
                                                "status" => 4
                                            ];
                                        }
                                       

                                        $det_pay = $detail;
                                        $det_pay['trip_id'] = (int)$trip_id;

                                        $this->commonmodel->insert('trip_pay_details',$det_pay);
                                        //print_r($message);
                                        //exit;
                                        /** Send Trip fare details to Driver ***/
                                        
                                        $d_device_token = $get_passenger_log_details[0]['driver_device_token'];
                                        $d_device_type  = $get_passenger_log_details[0]['driver_device_type'];
                                       
                                        /** Send Trip fare details to Passenger ***/
                                        $pushmessage    = [
                                            "message" => __('trip_completed'),
                                            "detail" => $detail,
                                            "status" => 9
                                        ];
                                        //$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);  
                                        
                                       
                                        
                                        /* Send Push notification to their parent */
                                        if($passenger_parent_id == 0){}
                                        else{
                                            if($passenger_trip_alert == 1){ 
                                                
                                                    /*** Child Details ***/
                                                    
                                                $result = $api->passenger_profile($passenger_id);
                                                
                                                if (count($result) > 0) {
                                                    $passenger_image = $result['profile_image'];
                                                    $passenger_name = $result['name'];
                                                    $passenger_phone = $result['phone'];
                                                    /*************************** Passenger Image ************************************/
                                                    if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                                        $passenger_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                                                    } else {
                                                        $passenger_image = URL_BASE . "public/images/no_image109.png";
                                                    }
                                                    
                                                    $parentInfo = $api->get_passenger_details_by_id($passenger_parent_id);
                                                    $parent_device_token = $parentInfo[0]['device_token'];
                                                    $parent_device_type = $parentInfo[0]['device_type'];
                                                    $parent_pushmessage           = [
                                                    "message" => str_replace("%s",$passeger_name,__('p_trip_completed')),
                                                    "detail" => ['name'=>$passenger_name,'image'=>$passenger_image,'phone'=>$passenger_phone],
                                                    "trip_detail" => $detail,
                                                    "status" => 4
                                                ];
                                                    $title = __('trip_completed_child');
                                                    $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                                                }   
                                                /*** Child Details ***/ 
                                                
                                                
                                                
                                            
                                        }
                                        }
                                         /* Send Push notification to their parent */
                                        
                                        $title = __('trip_completed');
                                        //$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api,$title);                       
                                        //$message = $pushmessage;
                                    } else if ($travel_status == 1) {
                                        $message = [
                                            "message" => __('trip_already_completed'),
                                            "status" => -1
                                        ];
                                    } else {
                                        $message = [
                                            "message" => __('trip_not_started'),
                                            "status" => -1
                                        ];
                                    }
                                }
                            } else {
                                $message = [
                                    "message" => __('invalid_trip'),
                                    "status" => -1
                                ];
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_request'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    break;
                //http://192.168.1.88:1003/api/index/dGF4aV9hbGw=?type=tripfare_update&trip_id=7&distance=25&actual_distance=&actual_amount=85&trip_fare=&fare=90&tips=0.50&passenger_discount=remarks=test%20driviing&nightfare_applicable=&remarks=&tax_amount=100&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&nightfare=&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=1
                //Cash :
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=1252&distance=25&actual_distance=&actual_amount=&trip_fare=120&fare=180.50&tips=10.50&passenger_discount=10&tax_amount=20&remarks=test%20driviing&nightfare_applicable=1&nightfare=20&waiting_time=1.6&waiting_cost=0.50&minutes_traveled=10&minutes_fare=150&creditcard_no=&creditcard_cvv=&expmonth=&expyear=&pay_mod_id=1
                //Card :
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=709&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=2
                //Uncard :
                //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=990&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=3
                //Account :
                //http://192.168.1.73:1013/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0==/?type=tripfare_update&trip_id=58&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=4&group_id=&account_id=
                case 'tripfare_update':
                    $array        = $mobiledata;
                    $driver_model = Model::factory('driver');
                    $pay_mod_id   = $array['pay_mod_id'];
                   
                    $validator = $this->payment_validation($array);
                   
                    $driver_statistics = [];
                    if ($validator->check()) {
                        $passenger_log_id = $array['trip_id'];
                        if($array['actual_distance'] == "")
                            $distance = $array['distance'];
                        else
                            $distance = $array['actual_distance'];
                        $actual_amount             = $array['actual_amount'];
                        $remarks                   = $array['remarks'];
                        $minutes_traveled          = $array['minutes_traveled'];
                        $minutes_fare              = $array['minutes_fare'];
                        $trip_fare                 = $array['trip_fare']; // Trip Fare without Tax,Tips and Discounts
                        $fare                      = round($array['fare'], 2); // Total Fare with Tax,Tips and Discounts can editable by driver
                        $tips                      = round($array['tips'], 2); // Tips Optional
                        $nightfare_applicable      = $array['nightfare_applicable'];
                        $nightfare                 = $array['nightfare'];
                        $eveningfare_applicable    = $array['eveningfare_applicable'];
                        $eveningfare               = $array['eveningfare'];
                        $tax_amount                = $array['tax_amount'];
                        $actual_paid_amt           = isset($array['paid_amt'])?$array['paid_amt']:0;
                        $edit_status               = isset($array['edit_status'])?$array['edit_status']:'';
                       // $passenger_pending_amt               = isset($array['passenger_pending_amt'])?$array['passenger_pending_amt']:0;

                        $pending_wallet_amt = 0;
                        $array['edit_status']  = $edit_status;
                        $array['actual_paid_amt']  = $actual_paid_amt;
                        $array['driver_edit_status'] = 0;


                        // if($actual_paid_amt > $fare)
                        // {
                        //     $message                 = array(
                        //             "message" => __('edit_amt_must_not_fare'),
                        //             "status" => -1
                        //         );
                        //         echo json_encode($message);
                        //         break; 
                        // }
                        // else
                        // {
                            //remaining amount added to wallet as pending amount
                            if($edit_status ==  1)
                            {
                                $pending_wallet_amt = $fare-$actual_paid_amt;
                                $array['driver_edit_status'] = (int)1;
                            }
                            else
                            {
                                $pending_wallet_amt = $fare-$actual_paid_amt;
                                if($fare != $actual_paid_amt)
                                $array['driver_edit_status'] = 0;
                            }

                            $add_amt = 0;
                            if($actual_paid_amt > $fare)
                            {
                                $pending_wallet_amt = 0;
                                $add_amt = $actual_paid_amt-$fare;
                                $actual_paid_amt = $fare;
                            }
                        //}

                        $array['pending_amt'] = $pending_wallet_amt;
                        $array['add_amt'] = $add_amt;

                        // Actual amount means if any deviations in trip fare driver will update it manualy but now this is not required.
                        $trip_fare                 = round($trip_fare, 2);
                        $total_fare                = $fare; // + $tips; // Total fare with Tips if exist
                        $amount                    = round($total_fare, 2); // Total amount which is used for pass to payment gateways
                        $get_passenger_log_details = $api->get_passenger_log_detail($passenger_log_id);
                        
                        if($array['pay_mod_id'] == 4) {
                            $passStatus = $api->getPassAvailable($get_passenger_log_details[0]['passengers_id']);
                            if($passStatus != 1) {
                                $message                      = [
                                    "message" => __('not_eligible'),
                                    "status" => -1
                                ];
                                echo json_encode($message);
                                exit;
                            }
                        }
                        if (count($get_passenger_log_details) > 0) {
                            $promo_code = $promocode            = (isset($get_passenger_log_details[0]['promocode']) ? $get_passenger_log_details[0]['promocode'] : '');
                            $used_wallet_amount            = isset($get_passenger_log_details[0]['wallet_amount_used']) ? $get_passenger_log_details[0]['wallet_amount_used'] :'';
                            $passenger_pending_amt    = isset($get_passenger_log_details[0]['passenger_pending_amt']) ? $get_passenger_log_details[0]['passenger_pending_amt'] :'';
                            if($edit_status ==  0)
                            {
                                $passenger_pending_amt = 0;
                            }
                            $forceclose_status    = isset($get_passenger_log_details[0]['forceclose_status']) ? $get_passenger_log_details[0]['forceclose_status'] :0;


                            $array['wallet_amount_used'] = $used_wallet_amount;
                            $array['passenger_pending_amt'] = $passenger_pending_amt;
                            $array['forceclose_status'] = $forceclose_status;
                            if($array['forceclose_status'] == 1)
                            {
                               $array['pending_amt'] = 0;
                               $array['driver_edit_status'] = (int)2;
                                $actual_paid_amt = $fare;
                            }
                            $promodiscount_amount =  isset($array['passenger_promo_discount']) ? $array['passenger_promo_discount'] : "";
                            $flag                 = 1;
                            $trans_result         = $api->check_tranc($passenger_log_id, $flag);
                                    
                            if (count($trans_result) > 0) {
                                /********** Update Driver Status after complete Payments *****************/
                                $drivers_id           = isset($get_passenger_log_details[0]['driver_id']) ? $get_passenger_log_details[0]['driver_id'] : '';
                                $update_driver_arrary = [
                                    "status" => 'F'
                                ];
                                $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $drivers_id);
                                /************Update Driver Status ***************************************/
                                $journey = $api->update_journey_status($passenger_log_id, 'R', 'A', 1);

                                /** Update in passnger_log_complete table **/
                                $update_complete = $api->update_complete_trip_det($passenger_log_id);            

                                /*************** Update in driver request table ******************/
                                $update_trip_array    = [
                                    "status" => 8
                                ];
                                $result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $passenger_log_id);
                                /*************************************************************************/
                                $default_companyid      = isset($get_passenger_log_details[0]['company_id']) ? $get_passenger_log_details[0]['company_id'] : $default_companyid;
                                // Driver Statistics ********************/
                                $rejected_trips1   = $api->get_rejected_drivers($drivers_id, $default_companyid);
                                $rejected_trips = count($rejected_trips1);
                                $driver_cancelled_trips = $api->get_driver_cancelled_trips($drivers_id, $default_companyid);
                                $driver_earnings        = $api->get_driver_earnings_with_rating($drivers_id, $default_companyid);
                                $driver_tot_earnings    = $api->get_driver_total_earnings($drivers_id);
                                $driver_statistics      = [];
                                
                                $total_trip             = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                foreach ($driver_earnings as $stat) {
                                    $total_trip++;
                                    //$total_ratings += $stat['rating'];
                                    $total_amount += $stat['total_amount'];
                                }
                                $overall_trip      = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                
                                $time_driven       = $api->get_time_driven($drivers_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($drivers_id, 'R', 'A', '1','2');
                                $driver_statistics = [
                                    "total_trip" => $overall_trip,
                                    "completed_trip" => $total_trip,
                                    "total_earnings" => round($driver_tot_earnings, 2),
                                    "overall_rejected_trips" => $rejected_trips,
                                    "cancelled_trips" => $driver_cancelled_trips,
                                    "today_earnings" => round($total_amount, 2),
                                    "shift_status" => 'IN',
                                    "time_driven" => $time_driven,
                                    "waiting_time" => $waittime,
                                    "status" => 1
                                ];                              
                                //Driver Statistics Functionality End
                                $message                      = [
                                    "message" => __('trip_fare_already_updated'),
                                    "status" => -1
                                ];
                                $message['driver_statistics'] = $driver_statistics;
                                echo json_encode($message);
                                break;
                            }                           
                            if ($array['pay_mod_id'] == 1 || $array['pay_mod_id'] == 6 || $array['pay_mod_id'] == 2) 
                            {
                                //Inserting to Transaction Table 
                               // try {
                                    $update_commission = $this->commonmodel->update_commission($passenger_log_id, $total_fare, ADMIN_COMMISSON);
                                    $inc_id = $api->get_insert_id(MDB_TRANSACTION);
                                    $insert_array = [
                                        "passengers_log_id" => (int)$passenger_log_id,
                                        "distance" => $array['distance'],
                                        "actual_distance" => $array['actual_distance'],
                                        "distance_unit" => UNIT_NAME,
                                        "tripfare" => (double)$trip_fare,
                                        "fare" => (double)$fare,
                                        "tips" => (double)$tips,
                                        "waiting_cost" => (double)$array['waiting_cost'],
                                        "passenger_discount" => (double)$array['passenger_discount'],
                                        "corporate_amount" => isset($array['corporate_discount'])?(double)$array['corporate_discount']:0,
                                        "company_tax" => (double)$tax_amount,
                                        "waiting_time" => $array['waiting_time'],
                                        "trip_minutes" => $minutes_traveled,
                                        "minutes_fare" => (double)$minutes_fare,
                                        "remarks" => $remarks,
                                        "payment_type" => (int)$array['pay_mod_id'],
                                        "wallet_amount_used" => (double)abs($array['wallet_amount_used']),
                                        "amt" => (double)$amount,
                                        "nightfare_applicable" => $nightfare_applicable,
                                        "nightfare" => (double)$nightfare,
                                        "eveningfare_applicable" => $eveningfare_applicable,
                                        "eveningfare" => (double)$eveningfare,
                                        "admin_amount" => (double)$update_commission['admin_commission'],
                                        "company_amount" => (double)$update_commission['company_commission'],
                                        "trans_packtype" => $update_commission['trans_packtype'],
                                        "payment_basis" => (int)3,
                                        "notify_status" => (int)0,
                                        "driver_edit_status" => (int)$array['driver_edit_status'],
                                        "actual_paid_amt" => (double)$array['actual_paid_amt'],
                                        "pending_amt" => (double)$array['pending_amt'],
                                        "passenger_pending_amt" => isset($array['passenger_pending_amt'])?(double)$array['passenger_pending_amt']:(double)0,
                                        "current_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                                    ];
                                    $check_trans_already_exist = $api->checktrans_details($passenger_log_id);
                                    
                                    if (count($check_trans_already_exist) > 0) {
                                        $tranaction_id      = $check_trans_already_exist['_id'];
                                        $update_transaction = $api->update_table(MDB_TRANSACTION, $insert_array, '_id',$tranaction_id);
                                        $jobreferral        = $tranaction_id;
                                    } else {
                                        $insert_array['_id'] = $inc_id;
                                        $transaction = $this->commonmodel->insert(MDB_TRANSACTION, $insert_array);
                                        $jobreferral = $inc_id;
                                    }

                                    if($promo_code!='')
                                    {
                                        $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                                    }
                                    $used_wallet_amount = $array['wallet_amount_used'];
                                    $passenger_pending_amt = isset($array['passenger_pending_amt'])?$array['passenger_pending_amt']:0;
                                    $pending_amt = $array['pending_amt'];
                                    if($used_wallet_amount > 0)
                                    {

                                        $passenger_id = isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '';
                                        $update_wallet = $api->update_wallet_without_log($passenger_id,$used_wallet_amount,1,$passenger_log_id);
                                    }      
                                    if($passenger_pending_amt > 0  || ($array['add_amt'] > 0 && $array['driver_edit_status'] == 1))
                                    {

                                        $passenger_id = isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '';

                                            if($array['add_amt'] > 0)
                                            {
                                                $payamt = $passenger_pending_amt+$array['add_amt'];
                                            }
                                            else
                                            {
                                                $payamt =$passenger_pending_amt;
                                            }
                                        $update_wallet = $api->update_wallet_without_log($passenger_id,$payamt,0,$passenger_log_id,6);
                                    }

                                    if($pending_amt > 0)
                                    {

                                        if($array['driver_edit_status'] == 1)
                                        {
                                            $passenger_id = isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '';
                                            $update_wallet = $api->update_wallet_without_log($passenger_id,$pending_amt,1,$passenger_log_id,5);
                                        }
                                    }

                                    // if($array['add_amt'] > 0)
                                    // {
                                    //     if($array['driver_edit_status'] == 1)
                                    //     {
                                    //         $passenger_id = isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '';
                                    //         $update_wallet = $api->update_wallet_without_log($passenger_id,$array['add_amt'],0,$passenger_log_id,9);
                                    //     } 
                                    // }

                                    if($used_wallet_amount == '')
                                    {
                                        $used_wallet_amount = 0;
                                    }

                                    if($array['pay_mod_id']  == 1)
                                    {
                                        if($array['driver_edit_status'] == 1)
                                        {
                                            $payment_array =[
                                            'add_amt'=>$add_amt,
                                            'cash_pay'=>$actual_paid_amt,
                                            'card_pay'=>0,
                                            'knet_pay'=>0,
                                            'pending_pay'=>$pending_amt,
                                            'wallet_pay'=>$used_wallet_amount,
                                            'fare_note'=>''
                                            ];
                                        }
                                        else
                                        {
                                             $payment_array =[
                                            'add_amt'=>$add_amt,
                                            'cash_pay'=>$actual_paid_amt,
                                            'card_pay'=>0,
                                            'knet_pay'=>0,
                                            'pending_pay'=>0,
                                            'wallet_pay'=>$used_wallet_amount,
                                            'fare_note'=>''
                                            ];  
                                        }
                                    } 
                                    else
                                    {
                                        if($array['driver_edit_status'] == 1)
                                        {
                                            $payment_array =[
                                            'add_amt'=>$add_amt,
                                            'cash_pay'=>0,
                                            'card_pay'=>$actual_paid_amt,
                                            'knet_pay'=>0,
                                            'pending_pay'=>$pending_amt,
                                            'wallet_pay'=>$used_wallet_amount,
                                            'fare_note'=>''
                                            ];
                                        }
                                        else
                                        {
                                            $payment_array =[
                                            'add_amt'=>$add_amt,
                                            'cash_pay'=>0,
                                            'card_pay'=>$actual_paid_amt,
                                            'knet_pay'=>0,
                                            'pending_pay'=>0,
                                            'wallet_pay'=>$used_wallet_amount,
                                            'fare_note'=>''
                                            ];
                                        }
                                    }  

                                    if($array['forceclose_status'] == 1)
                                    {
                                        $payment_array =[
                                            'add_amt'=>$add_amt,
                                            'cash_pay'=>$pending_amt,
                                            'card_pay'=>0,
                                            'knet_pay'=>0,
                                            'pending_pay'=>0,
                                            'wallet_pay'=>$used_wallet_amount,
                                            'fare_note'=>''
                                            ]; 
                                    }

                                    $api->payentry($passenger_log_id,$payment_array);

                
                                    /********** Update Driver Status after complete Payments *****************/
                                    $drivers_id = isset($get_passenger_log_details[0]['driver_id']) ? $get_passenger_log_details[0]['driver_id'] : '';
                                    $update_driver_arrary = [
                                        "status" => 'F'
                                    ];
                                    $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $drivers_id);
                                    /************Update Driver Status ***************************************/
                                    /*************** Update in driver request table ******************/
                                    $update_trip_array = [
                                        "status" => 8
                                    ];
                                    $result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id',$passenger_log_id);
                                    /*************************************************************************/
                                    $pickup            = isset($get_passenger_log_details[0]['current_location']) ? $get_passenger_log_details[0]['current_location'] : '';
                                    if (SMS == 1) {
                                        $passenger_phone_no = isset($get_passenger_log_details[0]['phone']) ? $get_passenger_log_details[0]['phone'] : '';
                                        $message_details    = $this->commonmodel->sms_message_by_title('payment_confirmed_sms');
                                        $to         = $passenger_phone_no;
                                        $message    = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                        $message    = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                        $result     = $api->sendSMS($to, $message);
                                    }
                                    $detail           = [
                                        "fare" => $amount,
                                        "pickup" => $pickup,
                                        "jobreferral" => $jobreferral,
                                        "trip_id" => $passenger_log_id
                                    ];
                                    $message          = [
                                        "message" => __('trip_fare_updated'),
                                        "detail" => $detail,
                                        "status" => 1
                                    ];
                                    $pushmessage      = [
                                        "message" => __('trip_fare_updated'),
                                        "fare" => $amount,
                                        "trip_id" => $passenger_log_id,
                                        "pickup" => $pickup,
                                        "status" => 5
                                    ];
                                    //print_r($pushmessage);
                                    //exit;
                                    //$message = $pushmessage;  
                                    $send_mail_status = $this->send_mail_passenger($passenger_log_id, 1);
                                // }
                                // catch (Kohana_Exception $e) {
                                //     //  print_r($e);
                                //     $message = array(
                                //         "message" => __('trip_fare_already_updated'),
                                //         "status" => -1
                                //     );
                                // }
                            /*} else if ($array['pay_mod_id'] == 2) {
                                //$passenger_cardid = $array['passenger_cardid'];
                                //$carddetails = $api->getcard_details($passenger_cardid);
                                $passengers_id = (isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '');
                                $card_type     = '';
                                $default       = 'yes';
                                $carddetails   = $api->get_creadit_card_details($passengers_id, $card_type, $default);
                                if (count($carddetails) > 0) {
                                    $creditcard = (isset($carddetails[0]['creditcard_no']) ? $carddetails[0]['creditcard_no'] : '');
                                    $creditcard_no  = encrypt_decrypt('decrypt', $creditcard);
                                    $creditcard_cvv = $array['creditcard_cvv'];
                                    $expmonth       = (isset($carddetails[0]['expdatemonth']) ? $carddetails[0]['expdatemonth'] : '');
                                    $expyear        = $carddetails[0]['expdateyear'];(isset($carddetails[0]['expdateyear']) ? $carddetails[0]['expdateyear'] : '');                                 
                                    if ($creditcard_no != "") {
                                        $payment_status = $this->trippayment($array, $default_companyid); //$account_id
                                        //echo "test".print_r($payment_status);exit;
                                        if ($payment_status == 0) {
                                            $gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                                            $message          = array(
                                                "message" => $gateway_response,
                                                "gateway_response" => $gateway_response,
                                                "status" => 0
                                            );
                                        } else if ($payment_status == 3) {
                                            $message = array(
                                                "message" => __('gve_credit_card_details'),
                                                "status" => -2
                                            );
                                        } else if ($payment_status == 1) {


                                            if($promo_code!='')
                                            {
                                            $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,array('promocode' => $promo_code, 'promo_type' => "1"),array('$inc'=>array('total_applied'=>1)));
                                            }
                                            $used_wallet_amount = $array['wallet_amount_used'];
                                            if($used_wallet_amount > 0)
                                            {
                                                $passenger_id = isset($get_passenger_log_details[0]['passengers_id']) ? $get_passenger_log_details[0]['passengers_id'] : '';
                                                $update_wallet = $api->update_wallet_without_log($passenger_id,$used_wallet_amount,1,$passenger_log_id);
                                            }


                                            $tranaction_id             = "";
                                            $check_trans_already_exist = $api->checktrans_details($passenger_log_id);
                                            if (count($check_trans_already_exist) > 0) {
                                                $tranaction_id = $check_trans_already_exist['_id'];
                                            }
                         /*                   if ($promodiscount_amount > 0)
                                                $update_promo_discount = $api->update_promo_discount($passenger_log_id, $promocode, $promodiscount_amount);*/
                                           /* $jobreferral       = $tranaction_id;
                                            $pickup            = isset($get_passenger_log_details[0]['current_location']) ? $get_passenger_log_details[0]['current_location'] :'';
                                            $detail            = array(
                                                "fare" => $amount,
                                                "pickup" => $pickup,
                                                "jobreferral" => $jobreferral,
                                                "trip_id" => $passenger_log_id
                                            );
                                            $message           = array(
                                                "message" => __('trip_fare_updated'),
                                                "detail" => $detail,
                                                "status" => 1
                                            );
                                            $pushmessage       = array(
                                                "message" => __('trip_fare_updated'),
                                                "fare" => $amount,
                                                "trip_id" => $passenger_log_id,
                                                "pickup" => $pickup,
                                                "status" => 5
                                            );
                                            /*************** Update in driver request table ******************/
                                           /* $update_trip_array = array(
                                                "status" => 8
                                            );
                                            $result            = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $passenger_log_id);
                                            /*************************************************************************/
                                          /*  $send_mail_status  = $this->send_mail_passenger($passenger_log_id, 1);
                                        } else if ($payment_status == -1) {
                                            $message = array(
                                                "message" => __('invalid_trip'),
                                                "status" => -1
                                            );
                                        } else if ($payment_status == 7) {
                                            $message = array(
                                                "message" => __('no_payment_gateway'),
                                                "status" => -1
                                            );
                                        }
                                    } else {
                                        $message = array(
                                            "message" => __('no_creditcard'),
                                            "status" => -9
                                        );
                                    }
                                } else {
                                    $message = array(
                                        "message" => __('no_card'),
                                        "status" => -9
                                    );
                                }*/
                            } else if ($array['pay_mod_id'] == 3) {
                                $updateMode = $api->update_payment_type($array['trip_id'],$array['pay_mod_id']);
                                $token = "";
                                $paymenturl = "";
                                $hespay = $this->hasabe_pay($array);
                                
                                if($hespay->status == 'success') {
                                    $token      = $hespay->data->token;
                                    $paymenturl = $hespay->data->paymenturl;
                                    $array['token'] = $token;
                                    $log_temp = $api->add_passenger_log_temp($array);

                                    if($promo_code!='')
                                    {
                                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                                    }
                                                                                
                                    $message = [
                                            "message" => $hespay->message,
                                            "status" => 1,
                                            "payment_url" => $paymenturl.$token
                                    ];
                                    echo json_encode($message);
                                    exit;
                                } else {
                                    $gateway_details = $this->commonmodel->gateway_details($default_companyid);
                                    /* NEW CHNAGES */
                                    $passenger_parent_id        = (isset($get_passenger_log_details[0]['passenger_parent']) ?$get_passenger_log_details[0]['passenger_parent'] :0);
                                    $passenger_allow_creditcard        = (isset($get_passenger_log_details[0]['passenger_allow_creditcard'])?$get_passenger_log_details[0]['passenger_allow_creditcard'] :0);
                                    $pay_by        = (isset($get_passenger_log_details[0]['pay_by'])?$get_passenger_log_details[0]['pay_by'] :0);
                                        if($pay_by == 1 || $pay_by == 2 ){
                                             $gateway_details_new           = $this->commonmodel->gateway_details($default_companyid,4);
                                              $gateway_details = array_merge($gateway_details,$gateway_details_new);
                                        }
                                        if($passenger_parent_id == 0){}
                                        else{
                                            if($passenger_allow_creditcard == 1){
                                                $gateway_details_new = [
                                                 [
                                                    "_id" => "5",
                                                    "pay_mod_name" => "Pay By Primary Account",
                                                    "pay_mod_default" => "0"
                                                
                                            ]
                                            ];
                                            $gateway_details = array_merge($gateway_details,$gateway_details_new);
                                            }
                                            
                                        }
                                         foreach($gateway_details as $k => $g){
                                            $gateway_details[$k]['image_normal'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_normal.png';
                                            $gateway_details[$k]['image_active'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_active.png';
                                      }
                                    /* NEW CHNAGES */
                                    
                                    
                                    $mes = ($amount == 0)?__('zero_amt'):$hespay->message;
                                    $message = [
                                            "message" => $mes,
                                            "status" => 0,
                                            "gateway_details" => $gateway_details
                                    ];
                                    echo json_encode($message);
                                    exit;
                                }
                                /*
                                $creditcard_no    = $array['creditcard_no'];
                                $creditcard_cvv   = $array['creditcard_cvv'];
                                $expmonth         = $array['expmonth'];
                                $expyear          = $array['expyear'];
                                $authorize_status = $api->isVAlidCreditCard($creditcard_no, "", true);                              
                                if ($authorize_status == 1) {
                                    $payment_status = $this->trippayment($array, $default_companyid); //$account_id
                                    if ($payment_status == 0) {
                                        $gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                                        $message          = array(
                                            "message" => $gateway_response,
                                            "gateway_response" => $gateway_response,
                                            "status" => 0
                                        );
                                    } else if ($payment_status == 3) {
                                        $message = array(
                                            "message" => __('gve_credit_card_details'),
                                            "status" => -2
                                        );
                                    } else if ($payment_status == 1) {
                                        $tranaction_id             = "";
                                        $check_trans_already_exist = $api->checktrans_details($passenger_log_id);
                                        if (count($check_trans_already_exist) > 0) {
                                            $tranaction_id = $check_trans_already_exist['_id'];
                                        }
                                        $jobreferral       = $tranaction_id;
                                        $pickup            = isset($get_passenger_log_details[0]['current_location']) ? $get_passenger_log_details[0]['current_location'] : '';
                                        $detail            = array(
                                            "fare" => $amount,
                                            "pickup" => $pickup,
                                            "jobreferral" => $jobreferral,
                                            "trip_id" => $passenger_log_id
                                        );
                                        $message           = array(
                                            "message" => __('trip_fare_updated'),
                                            "detail" => $detail,
                                            "status" => 1
                                        );
                                        $pushmessage       = array(
                                            "message" => __('trip_fare_updated'),
                                            "fare" => $amount,
                                            "trip_id" => $passenger_log_id,
                                            "pickup" => $pickup,
                                            "status" => 5
                                        );
                                        
                                        $update_trip_array = array(
                                            "status" => 8
                                        );
                                        $result = $api->update_table(MDB_REQUEST_HISTORY,$update_trip_array,'_id',$passenger_log_id);
                                        
                                        
                                        $d_device_token    = isset($get_passenger_log_details[0]['driver_device_token']) ? $get_passenger_log_details[0]['driver_device_token'] : '';
                                        $d_device_type     = isset($get_passenger_log_details[0]['driver_device_type']) ? $get_passenger_log_details[0]['driver_device_type'] : '';
                                        //$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);  
                                        
                                        $p_device_token    = isset($get_passenger_log_details[0]['passenger_device_token']) ? $get_passenger_log_details[0]['passenger_device_token'] : '';
                                        $p_device_type     = isset($get_passenger_log_details[0]['passenger_device_type']) ? $get_passenger_log_details[0]['passenger_device_type'] : '';
                                        //$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api);  
                                        $send_mail_status  = $this->send_mail_passenger($passenger_log_id, 1);
                                    } else if ($payment_status == -1) {
                                        $message = array(
                                            "message" => __('invalid_trip'),
                                            "status" => -1
                                        );
                                    }
                                } else {
                                    $message = array(
                                        "message" => __('invalid_card'),
                                        "status" => -9
                                    );
                                }
                                */
                            } else if ($array['pay_mod_id'] == 4) 
                            {
                                //Inserting to Transaction Table 
                                try {
                                    $update_commission = $this->commonmodel->update_commission($passenger_log_id, $total_fare, ADMIN_COMMISSON);
                                    $payBy = $api->getPayBy($get_passenger_log_details[0]['passengers_id']);
                                    $inc_id = $api->get_insert_id(MDB_TRANSACTION);
                                    $insert_array = [
                                        "passengers_log_id" => (int)$passenger_log_id,
                                        "distance" => $array['distance'],
                                        "actual_distance" => $array['actual_distance'],
                                        "distance_unit" => UNIT_NAME,
                                        "tripfare" => (double)$trip_fare,
                                        "fare" => (double)$fare,
                                        "tips" => (double)$tips,
                                        "waiting_cost" => (double)$array['waiting_cost'],
                                        "passenger_discount" => (double)$array['passenger_discount'],
                                        "corporate_amount" => isset($array['corporate_discount'])?(double)$array['corporate_discount']:0,
                                        "company_tax" => (double)$tax_amount,
                                        "waiting_time" => $array['waiting_time'],
                                        "trip_minutes" => $minutes_traveled,
                                        "minutes_fare" => (double)$minutes_fare,
                                        "remarks" => $remarks,
                                        "payment_type" => $array['pay_mod_id'],
                                        "amt" => (double)$amount,
                                        "nightfare_applicable" => $nightfare_applicable,
                                        "nightfare" => (double)$nightfare,
                                        "eveningfare_applicable" => $eveningfare_applicable,
                                        "eveningfare" => (double)$eveningfare,
                                        "admin_amount" => (double)$update_commission['admin_commission'],
                                        "company_amount" => (double)$update_commission['company_commission'],
                                        "trans_packtype" => $update_commission['trans_packtype'],
                                        "payment_basis" => (int)$payBy['pay_by'],
                                        "notify_status" => (int)0,
                                        "current_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000)
                                    ];
                                    $check_trans_already_exist = $api->checktrans_details($passenger_log_id);
                                    
                                    if (count($check_trans_already_exist) > 0) {
                                        $tranaction_id      = $check_trans_already_exist['_id'];
                                        $update_transaction = $api->update_table(MDB_TRANSACTION, $insert_array, '_id',$tranaction_id);
                                        $jobreferral        = $tranaction_id;
                                    } else {
                                        $insert_array['_id'] = $inc_id;
                                        $transaction = $this->commonmodel->insert(MDB_TRANSACTION, $insert_array);
                                        $jobreferral = $inc_id;
                                    }

                                    if($promo_code!='')
                                    {
                                    $update_promo = $this->mongo_db->update(MDB_PASSENGERS_PROMO ,['promocode' => $promo_code, 'promo_type' => "1"],['$inc'=>['total_applied'=>1]]);
                                    }

                                    /********** Update Driver Status after complete Payments *****************/
                                    $drivers_id = isset($get_passenger_log_details[0]['driver_id']) ? $get_passenger_log_details[0]['driver_id'] : '';
                                    $update_driver_arrary = [
                                        "status" => 'F'
                                    ];
                                    $result = $api->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $drivers_id);
                                    /************Update Driver Status ***************************************/
                                    /*************** Update in driver request table ******************/
                                    $update_trip_array = [
                                        "status" => 8
                                    ];
                                    $result = $api->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id',$passenger_log_id);
                                    /*************************************************************************/
                                    $pickup            = isset($get_passenger_log_details[0]['current_location']) ? $get_passenger_log_details[0]['current_location'] : '';
                                    if (SMS == 1) {
                                        $passenger_phone_no = isset($get_passenger_log_details[0]['phone']) ? $get_passenger_log_details[0]['phone'] : '';
                                        $message_details    = $this->commonmodel->sms_message_by_title('payment_confirmed_sms');
                                        $to                 = $passenger_phone_no;
                                        $message    = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                            $message    = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                         $result     = $api->sendSMS($to, $message);
                                    }
                                    $detail           = [
                                        "fare" => $amount,
                                        "pickup" => $pickup,
                                        "jobreferral" => $jobreferral,
                                        "trip_id" => $passenger_log_id
                                    ];
                                    $message          = [
                                        "message" => __('trip_fare_updated'),
                                        "detail" => $detail,
                                        "status" => 1
                                    ];
                                    $pushmessage      = [
                                        "message" => __('trip_fare_updated'),
                                        "fare" => $amount,
                                        "trip_id" => $passenger_log_id,
                                        "pickup" => $pickup,
                                        "status" => 5
                                    ];
                                    //print_r($pushmessage);
                                    //exit;
                                    //$message = $pushmessage;  
                                    $send_mail_status = $this->send_mail_passenger($passenger_log_id, 1);
                                }
                                catch (Kohana_Exception $e) {
                                    //  print_r($e);
                                    $message = [
                                        "message" => __('trip_fare_already_updated'),
                                        "status" => -1
                                    ];
                                }
                            }
                            //Driver Statistics Functionality Start
                            $driver_id              = isset($get_passenger_log_details[0]['driver_id']) ? $get_passenger_log_details[0]['driver_id'] : '';
                            $default_companyid      = isset($get_passenger_log_details[0]['company_id']) ? $get_passenger_log_details[0]['company_id'] : $default_companyid;
                            // Driver Statistics ********************/
                            $rejected_trips1   = $api->get_rejected_drivers($driver_id, $default_companyid); $rejected_trips = count($rejected_trips1);
                            $driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id, $default_companyid);
                            $driver_earnings        = $api->get_driver_earnings_with_rating($driver_id, $default_companyid);
                            
                            $statistics             = [];
                            $total_trip             = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                            foreach ($driver_earnings as $stat) {
                                $total_trip++;
                                $total_ratings += $stat['rating'];
                                $total_amount += $stat['total_amount'];
                            }
                            $overall_trip      = $total_trip + $rejected_trips + $driver_cancelled_trips;
                            $time_driven       = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                            $driver_statistics = [
                                "total_trip" => $overall_trip,
                                "completed_trip" => $total_trip,
                                "total_earnings" => round($total_amount, 2),
                                "overall_rejected_trips" => $rejected_trips,
                                "cancelled_trips" => $driver_cancelled_trips,
                                "today_earnings" => round($total_amount, 2),
                                "shift_status" => 'IN',
                                "time_driven" => $time_driven,
                                "waiting_time" => $waittime,
                                "status" => 1
                            ];
                            /**************************************************/
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $validation_error = $validator->errors('errors');
                        $message          = [
                            "message" => $validation_error,
                            "status" => -3
                        ];
                    }
                    //Driver Statistics Functionality End
                    $message['driver_statistics'] = $driver_statistics;
                    echo json_encode($message);
unset(MangoDB::$instances['default']);
                    break;
                /*END OF DRIVER DETAILS*/
                //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=cancel_trip&passenger_log_id=48&travel_status=4&remarks=test driviing&pay_mod_id=2&creditcard_cvv=
                case 'cancel_trip':
                    $driver_model       = Model::factory('driver');
                    $api_model          = Model::factory(MOBILEAPI_107);
                    $cancel_trip_array  = $mobiledata;
                    $passenger_log_id   = $cancel_trip_array['passenger_log_id'];
                    $remarks            = $cancel_trip_array['remarks'];
                    $check_travelstatus = $api_model->check_travelstatus($passenger_log_id);
                    
                    if ($check_travelstatus == -1) {
                        $message = [
                            "message" => __('invalid_trip'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        break;
                    }
                    if ($check_travelstatus != 9 && $check_travelstatus != 0 && $check_travelstatus != 7 && $check_travelstatus != 3 && $check_travelstatus != 6) {
                        $message = [
                            "message" => __('Not_Cancel'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        break;
                    }

		            if ($check_travelstatus == 4) {
                        $message = [
                            "message" => __('trip_already_canceled'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        break;
                    }
                    if ($check_travelstatus == 2) {
                        $message = [
                            "message" => __('passenger_in_journey'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        break;
                    }
                    $flag         = 1;
                    $trans_result = $api_model->check_tranc($passenger_log_id, $flag);
                    if (count($trans_result) > 1) {
                        $message = [
                            "message" => __('trip_fare_already_updated'),
                            "status" => -1
                        ];
                        echo json_encode($message);
                        break;
                    }
                    
                    if ($cancel_trip_array['passenger_log_id'] != null) {
                        
                        $get_passenger_log_det           = $api_model->get_passenger_log_detail($passenger_log_id);
                        $driver_id                       = isset($get_passenger_log_det[0]['driver_id']) ?$get_passenger_log_det[0]['driver_id'] : '';
                        $passenger_id                    = isset($get_passenger_log_det[0]['passengers_id']) ? $get_passenger_log_det[0]['passengers_id'] : '';
                        $passenger_name                  = isset($get_passenger_log_det[0]['passenger_name']) ? $get_passenger_log_det[0]['passenger_name'] : '';
                        $passenger_email                 = isset($get_passenger_log_det[0]['passenger_email']) ? $get_passenger_log_det[0]['passenger_email'] : '';
                        $pickup_location                 = isset($get_passenger_log_det[0]['current_location']) ? $get_passenger_log_det[0]['current_location'] : '';
                        $cancel_trip_array['company_id'] = isset($get_passenger_log_det[0]['company_id']) ? $get_passenger_log_det[0]['company_id'] : '';
                        $cancellation_nfree              = (FARE_SETTINGS == 2) ? $get_passenger_log_det[0]['cancellation_nfree'] : CANCELLATION_FARE;
						
                        $status                          = "F";
                        $result                          = $api_model->update_driver_status($status, $driver_id);
						$upd                 = ['status' => 4];
                        $upd_req_det                     = $this->commonmodel->update(MDB_REQUEST_HISTORY,$upd,'trip_id',$passenger_log_id);
                        
                        if ($cancellation_nfree == 0) {
                            if (SMS == 1) {
                                $phone_no        = $api->get_driver_phone_by_id($driver_id);
                                $message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
                                
                                $to              = $phone_no;
                                $message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                $result = $api->sendSMS($to,$message);
                            }
                            $payment_types      = 0;
                            
                            $transaction_detail = $api_model->cancel_triptransact_details($cancel_trip_array, $cancellation_nfree, $payment_types);

                            /** move to passengerlog split table **/
                            $update_cancel_trip_det = $api->update_cancel_trip_det($passenger_log_id);                            
                            $pushmessage        = [
                                "message" => __('trip_cancelled_passenger'),
                                "status" => 2
                            ];
                           
                            $d_device_token     = isset($get_passenger_log_det[0]['driver_device_token'])?$get_passenger_log_det[0]['driver_device_token']:'';
                            $d_device_type      = isset($get_passenger_log_det[0]['driver_device_type'])?$get_passenger_log_det[0]['driver_device_type']:'';
                            //$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);
                            $message            = [
                                "message" => __('trip_cancel_passenger'),
                                "cancellation_from" => __('Free'),
                                "cancellation_amount" => 0,
                                "status" => 1
                            ]; //with out cancellation fee
                            echo json_encode($message);
                        } else {
                            $total            = $api_model->get_passenger_cancel_faredetail($passenger_log_id);
                            $passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
                            if ($cancel_trip_array['pay_mod_id'] == 3 || (count($passenger_wallet) > 0 && $passenger_wallet['wallet_amount'] >= $total)) // By cash
                                {
                                $get_passenger_log_details = $driver_model->get_passenger_log_details($passenger_log_id);
                                if (count($get_passenger_log_details) > 0) {
                                    //Inserting to Transaction Table
                                    try {
                                        $siteinfo_details           = $api_model->siteinfo_details();
                                        $update_commission          = $this->commonmodel->update_commission($passenger_log_id, $total, $siteinfo_details['admin_commission']);
                                        
                                        $auto_id = $this->commonmodel->get_auto_id(MDB_TRANSACTION);
                                        $insert_array               = [
                                            "_id" => $auto_id,
                                            "passengers_log_id" => $passenger_log_id,
                                            "remarks" => $remarks,
                                            "payment_type" => $cancel_trip_array['pay_mod_id'],
                                            "amt" => $total,
                                            "admin_amount" => $update_commission['admin_commission'],
                                            "company_amount" => $update_commission['company_commission'],
                                            "trans_packtype" => $update_commission['trans_packtype'],
                                            'current_date' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                        ];
                                        $transaction                = $this->commonmodel->insert(MDB_TRANSACTION, $insert_array);
                                        $update_travel_status_array = [
                                            "travel_status" => (int)4
                                        ]; // Passenger Cancelled
                                        $result_sts_update          = $api->update_table(MDB_PASSENGERS_LOGS, $update_travel_status_array, '_id', (int)$passenger_log_id);
                                        $cancel_from                = __('Cash');
                                        //to reduce the wallet amount while cancelling the trip
                                        if (count($passenger_wallet) > 0 && $passenger_wallet['wallet_amount'] >= $total) {
                                            $balance_wallet_amount = $passenger_wallet['wallet_amount'] - $total;
                                            //update wallet amount in passenger table
                                            $update_wallet_array   = [
                                                "wallet_amount" => $balance_wallet_amount
                                            ];
                                            $wallet_update         = $api->update_table(MDB_PASSENGERS, $update_wallet_array, '_id', (int)$passenger_id);
                                            $cancel_from           = __('Wallet');
                                        }

                                        /** move to passengerlog split table **/
                                        $update_cancel_trip_det = $api->update_cancel_trip_det($passenger_log_id);

                                        if (SMS == 1) {
                                            $phone_no        = $api->get_driver_phone_by_id($driver_id);
                                            $message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
                                            $to              = $phone_no;
                                            $message_details = reset($message_details);
                                            $message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                            
                                            $result = $api->sendSMS($to,$message);
                                        }
                                        $pushmessage    = [
                                            "message" => __('trip_cancelled_passenger'),
                                            "status" => 2
                                        ];
                                        $d_device_token = $get_passenger_log_det[0]['driver_device_token'];
                                        $d_device_type  = $get_passenger_log_det[0]['driver_device_type'];
                                        $message        = [
                                            "message" => __('trip_cancel_passenger'),
                                            "cancellation_from" => $cancel_from,
                                            "cancellation_amount" => $total,
                                            "status" => 1
                                        ];
                                        echo json_encode($message);
                                    }
                                    catch (Kohana_Exception $e) {
                                        //  print_r($e);
                                        $message = [
                                            "message" => __('try_again'),
                                            "status" => 3
                                        ];
                                    }
                                } else {
                                    $message = [
                                        "message" => __('invalid_trip'),
                                        "status" => 3
                                    ];
                                }
                            } else {
                                $card_type       = '';
                                $default         = 'yes';
                                $carddetails     = $api->get_creadit_card_details($passenger_id, $card_type, $default);
                                
                                $no_default_card = $api->get_creadit_card_details($passenger_id, $card_type, "");
                                if (count($carddetails) > 0) {
                                    $payment_status = $this->cancel_trippayment($cancel_trip_array, $cancellation_nfree, $default_companyid);
                                    $cancelArr      = ($payment_status != 0) ? explode("#", $payment_status) : '';
                                    $payment_status = isset($cancelArr[0]) ? $cancelArr[0] : 0;
                                    $cancelAmount   = isset($cancelArr[1]) ? $cancelArr[1] : 0;
                                    if ($payment_status == 0) {
                                        $gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                                        $message          = [
                                            "message" => __('cancel_payment_failed'),
                                            "gateway_response" => $gateway_response,
                                            "status" => 0
                                        ];
                                        echo json_encode($message);
                                        break;
                                    } else if ($payment_status == 1) {
                                        if (SMS == 1) {
                                            $phone_no          = $api->get_driver_phone_by_id($driver_id);
                                            $this->commonmodel = Model::factory('commonmodel');
                                            $message_details   = $this->commonmodel->sms_message_by_title('trip_cancel');
                                            $to                = $phone_no;
                                            $message_details = reset($message_details);
                                            $message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                            //$message = str_replace("##OTP##",$otp,$message);
                                            $message           = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                            $result = $this->commonmodel->sendSMS($to,$message);
                                        }

                                        /** move to passengerlog split table **/
                                        $update_cancel_trip_det = $api->update_cancel_trip_det($passenger_log_id);

                                        $message          = [
                                            "message" => __('trip_cancel_passenger'),
                                            "cancellation_from" => __('credit_card'),
                                            "cancellation_amount" => $cancelAmount,
                                            "status" => 1
                                        ];
                                        $pushmessage      = [
                                            "message" => __('trip_cancelled_passenger'),
                                            "status" => 2
                                        ];
                                        $d_device_token   = $get_passenger_log_det[0]['driver_device_token'];
                                        $d_device_type    = $get_passenger_log_det[0]['driver_device_type'];
                                        
                                        $send_mail_status = $this->send_cancel_fare_mail_passenger($cancelAmount, $passenger_name, $pickup_location, $passenger_email);
                                        echo json_encode($message);
                                        break;
                                    } else if ($payment_status == -1) {
                                        $message = [
                                            "message" => __('invalid_trip'),
                                            "status" => 3
                                        ];
                                        echo json_encode($message);
                                        break;
                                    }
                                } else if (count($carddetails) == 0 && count($no_default_card) > 0) {
                                    $message = [
                                        "message" => __('passenger_has_no_default_creditcard'),
                                        "status" => 5
                                    ];
                                    echo json_encode($message);
                                    break;
                                } else {
                                    $message = [
                                        "message" => __('cancel_no_creditcard'),
                                        "status" => 4
                                    ];
                                    echo json_encode($message);
                                    break;
                                }
                            }
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_trip'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        break;
                    }
                    //echo json_encode($message);
                    break;
                /** driver document upload api ***/
                //http://192.168.1.82:1023/mobileapi109/index/dGF4aV9hbGw=/?type=driver_document_upload, method = post, driver_id,driver_document,device_type
                case 'driver_document_upload':
                    $p_personal_array = $mobiledata;
                    //for ios
                    if ($p_personal_array['driver_document'] != NULL) {
                        $dirname   = $p_personal_array['driver_id'];
                        $imgdata   = base64_decode($p_personal_array['driver_document']);
                        $f         = finfo_open();
                        $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                        //echo '<img src="data:image/jpg;base64,' . $p_personal_array['driver_document'].'" />';
                        //print_r($mime_type);
                        //exit;
                        $mime_type = explode('/', $mime_type);
                        $mime_type = $mime_type[1];
                        $img       = imagecreatefromstring($imgdata);
                        if ($img != false) {
                            $image_name       = uniqid() . '.' . $mime_type;
                            $thumb_image_name = 'thumb_' . $image_name;
                            $image_path       = DOCROOT . PUBLIC_UPLOADS_FOLDER . '/' . $image_name;
                            $image_url        = DOCROOT . PUBLIC_UPLOADS_FOLDER . '/' . $image_name;
                            //header('Content-Type: image/jpeg');                   
                            //$image_path = DOCROOT.PUBLIC_UPLOADS_FOLDER.'/'.$image_name; 
                            //echo  $image_path;exit;
                            imagejpeg($img, $image_url);
                            imagedestroy($img);
                            chmod($image_path, 0777);
                            $d_image    = Image::factory($image_path);
                            $foldername = DOCROOT . PUBLIC_UPLOADS_FOLDER . "/driver_documents/" . $dirname . "/";
                            if (!file_exists($foldername)) {
                                mkdir(DOCROOT . PUBLIC_UPLOADS_FOLDER . "/driver_documents/" . $dirname, 0777);
                            }
                            //function called to unlink previous files from the folder
                            $api->previous_files_unlink($foldername);
                            Commonfunction::imageresize($d_image, DRIVER_DOC_IMG_WIDTH, DRIVER_DOC_IMG_HEIGHT, $foldername, $image_name, 90);
                            chmod($foldername, 0777);
                            unlink($image_path);
                            $message = [
                                "message" => __('file_upload_success'),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('image_not_upload'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('image_not_upload'),
                            "status" => -1
                        ];
                    }
                    echo json_encode($message);
                    exit;
                /* start of Passenger Forgot Password */
                //URL : api/?type=forgot_password&phone_no=9999999999&user_type=P
                case 'forgot_password':
                    $array_values = $mobiledata;
                    $message      = "";
                    if ($array_values['user_type'] == 'P') {

                        $check_fb_user = $api->check_fb_user($array_values['phone_no'], $default_companyid, $array_values['country_code']);
                        if ($check_fb_user > 0) {
                            $message = [
                                "message" => __('fb_user'),
                                'status' => 3
                            ];
                            echo json_encode($message);
                            break;
                        }
                        $phone_exist = $api->check_phone_passengers($array_values['phone_no'], $default_companyid, $array_values['country_code']);
                    } else {
						if(!isset($array_values['driver_code'])) {
							$message = [
                                "message" => __('driver_code_missing'),
                                'status' => -1
                            ];
                            echo json_encode($message);
                            break;
						}
                        $phone_exist = $api->new_check_phone_people($array_values, $default_companyid);
                    }
                    if ($phone_exist > 0) {
                        $forgot_result = $api->get_passenger_details_phone($array_values, $default_companyid);
                        //print_r( $forgot_result);exit;
                        if (count($forgot_result) > 0) {
                           $email = $forgot_result[0]['email'];
                            $mail  = "";
                            if ($array_values['user_type'] == 'P') {
                                $replace_variables = [
                                    REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                                    REPLACE_SITENAME => $this->app_name,
                                    REPLACE_USERNAME => $forgot_result[0]['name'],
                                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                    REPLACE_SITEEMAIL => $this->siteemail,
                                    REPLACE_SITEURL => URL_BASE,
                                    SITE_DESCRIPTION => $this->app_description,
                                    RESET_LINK => URL_BASE . 'passengers/resetpassword/?phone_no=' . $array_values['phone_no'] . '&activation_key=' . $forgot_result[0]['activation_key'],
                                    REPLACE_COMPANYDOMAIN => $this->domain_name,
                                    REPLACE_COPYRIGHTS => COMPANY_COPYRIGHT
                                ];
                            } else {
                                $replace_variables = [
                                    REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                                    REPLACE_SITENAME => $this->app_name,
                                    REPLACE_USERNAME => $forgot_result[0]['name'],
                                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                    REPLACE_SITEEMAIL => $this->siteemail,
                                    REPLACE_SITEURL => URL_BASE,
                                    SITE_DESCRIPTION => $this->app_description,
                                    RESET_LINK => URL_BASE . 'driver/resetpassword/?phone_no=' . $array_values['phone_no']. '&driver_code=' . $array_values['driver_code'],
                                    REPLACE_COMPANYDOMAIN => $this->domain_name,
                                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                                ];
                            }
                            /*Added for language email template */
                            if ($this->lang != 'en') {
                                if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/reset-forgotpassword-' . $this->lang . '.html')) {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/reset-forgotpassword-' . $this->lang . '.html', $replace_variables);
                                } else {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'reset-forgotpassword.html', $replace_variables);
                                }
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'reset-forgotpassword.html', $replace_variables);
                            }
                            //                              echo "sssss";exit;

                            /* Added for language email template */
                            $to       = $email;
                            $from     = $this->siteemail;
                            $subject  = __('forgot_password_subject') . " - " . $this->app_name;
                            $redirect = "no";
                            if (SMTP == 1) {
                            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                            } else {
                                // To send HTML mail, the Content-type header must be set
                                $headers = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                // Additional headers
                                $headers .= 'From: ' . $from . '' . "\r\n";
                                $headers .= 'Bcc: ' . $to . '' . "\r\n";
                                mail($to, $subject, $message, $headers);
                            }
                           
                            $message = [
                                "message" => __('forgot_pass_success'),
                                'status' => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('invalid_user'),
                                'status' => 2
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('invalid_user'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($message);
                    break;
                    case 'get_model_types': // Get Car Model
                    $details = $api->company_model_details($default_companyid);
                    foreach($details as $key => $value) {
                            if ((!empty($value['model_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image'])) {
                                $model_image = URL_BASE.MODEL_IMGPATH.$value['model_image'];
                            } else {
                                $model_image = URL_BASE . "public/images/no_image109.png";
                            }
                            if ((!empty($value['model_image_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['model_image_thumb'])) {
                                $model_image_thumb = URL_BASE.MODEL_IMGPATH.$value['model_image_thumb'];
                            } else {
                                $model_image_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            if ((!empty($value['iconic_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['iconic_image'])) {
                                $iconic_image = URL_BASE.MODEL_IMGPATH.$value['iconic_image'];
                            } else {
                                $iconic_image = URL_BASE . "public/images/no_image109.png";
                            }
                            if ((!empty($value['iconic_image_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . MODEL_IMGPATH .  $value['iconic_image_thumb'])) {
                                $iconic_image_thumb = URL_BASE.MODEL_IMGPATH.$value['iconic_image_thumb'];
                            } else {
                                $iconic_image_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            $details[$key]['model_image'] = $model_image;
                            $details[$key]['model_image_thumb'] = $model_image_thumb;
                            $details[$key]['iconic_image'] = $iconic_image;
                            $details[$key]['iconic_image_thumb'] = $iconic_image_thumb;
                    }
                    $result = [
                            "message" => __('taxi_model'),
                            "detail" => $details,
                            "status" => 1
                        ];
                    echo json_encode($result);
                    exit;
                    break;  
                    case 'view_child_request_details':
                    $alreadyReg =  [];
                    $passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
                    $validator = $this->check_validation_passenger($mobiledata);
                    if ($validator->check()) {
                        $get_child_requestt_details = $api->get_child_request_details($mobiledata);
                        
                        if(!empty($get_child_requestt_details)){
                            //print_r($get_child_requestt_details);exit;
                            //foreach($get_child_requestt_details as $child){
                            //if($child['user_status'] == 1){$alreadyReg['details'][] = array('_id' => 'phone' => $child['phone'],'name' => $child['name'],'status' => 1); }else{$alreadyReg['details'][] = array('phone' => $child['phone'],'name' => $child['name'],'status' => 2 ); }
                                
                        //  }
                        $result = [
                            "message" => __('view_child_request_details'),
                            "detail" => $get_child_requestt_details,
                            "status" => 1
                        ];
                    }else{
                        $result = [
                            "message" => __('invalid_user'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($result);
                    exit;
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'view_child_members_list':
                    $addModel = Model::factory('add');  
                    $passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
                    $account_type = (isset($mobiledata['account_type'])) ? $mobiledata['account_type'] : '';
                    $valid = $addModel->parent_id_isValid($passenger_id);
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $validator = $this->check_validation_passenger1($mobiledata);
                    if ($validator->check()) {
                        $get_child_details = $api->get_passenger_childlist($passenger_id,$account_type);
                        if(!empty($get_child_details)){
                            //print_r($get_child_details);
                            foreach($get_child_details as $get_child){
                                /** PASSENGERS PROFILE PHOTO **/
                             if ((!empty($get_child['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'])) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'];
                                    } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                    }
                            /** PASSENGERS PROFILE PHOTO **/
                                $response[] = ['id' => $get_child['_id'],'name' => $get_child['name'],'phone' => $get_child['phone'],'profile_image' => $profile_image,'allow_creditcard' => $get_child['allow_creditcard'],'account_type' => $get_child['account_type'],'account_type_name' =>$get_child['account_type_name'],'request_id' =>$get_child['request_id']];
                            }
                            
                        $result = [
                            "message" => __('child_account_details'),
                            "detail" => $response,
                            "status" => 1
                        ];
                    }else{
                        $result = [
                            "message" => __('no_child'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($result);
                    exit;
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'view_child_members_list_new':
                    $addModel = Model::factory('add');  
                    $passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
                    $account_type = (isset($mobiledata['account_type'])) ? $mobiledata['account_type'] : '';
                    $valid = $addModel->parent_id_isValid($passenger_id);
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $validator = $this->check_validation_passenger1($mobiledata);
                    if ($validator->check()) {
                        $get_child_details = $api->get_passenger_childlist($passenger_id,$account_type);
                        if(!empty($get_child_details)){
                            //print_r($get_child_details);
                            foreach($get_child_details as $get_child){
                                /** PASSENGERS PROFILE PHOTO **/
                             if ((!empty($get_child['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'])) {
                                        $profile_image = URL_BASE . PASS_IMG_IMGPATH . 'thumb_' . $get_child['profile_image'];
                                    } else {
                                        $profile_image = URL_BASE . "public/images/no_image109.png";
                                    }
                            /** PASSENGERS PROFILE PHOTO **/
                                $response[$get_child['account_type_name']][] = ['id' => $get_child['_id'],'name' => $get_child['name'],'phone' => $get_child['phone'],'profile_image' => $profile_image,'allow_creditcard' => $get_child['allow_creditcard'],'account_type' => $get_child['account_type'],'account_type_name' =>$get_child['account_type_name'],'request_id' =>$get_child['request_id']];
                            
                            
                            }
                            
                        $result = [
                            "message" => __('child_account_details'),
                            "detail" => $response,
                            "status" => 1
                        ];
                    }else{
                        $result = [
                            "message" => __('no_child'),
                            "status" => 2
                        ];
                    }
                    echo json_encode($result);
                    exit;
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'child_members_list_operations': 
                    $child_id = (isset($mobiledata['child_id'])) ? $mobiledata['child_id'] : '';
                    $flag = (isset($mobiledata['flag'])) ? $mobiledata['flag'] : '';
                    $checkflag = (isset($mobiledata['checkflag'])) ? $mobiledata['checkflag'] : '';
                    $request_id = (isset($mobiledata['request_id'])) ? $mobiledata['request_id'] : '';
                    $validator = $this->check_validation_child_member($mobiledata);
                    if ($validator->check()) {
                        $get_child_details = $api->child_member_operations($child_id,$flag,$checkflag,$request_id);//Flag 1 : Remove Member, Flag 2: Allow creditcard 
                        if($get_child_details == 1){
                        $message      = [
                                    "message" => __('profile_updated_successfully'),
                                    "status" => 1
                                ];
                        echo json_encode($message);
                        exit;
                        }       
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'update_payment_mode':
                    $trip_id = (isset($mobiledata['trip_id'])) ? $mobiledata['trip_id'] : '';
                    $payment_type = (isset($mobiledata['payment_type'])) ? $mobiledata['payment_type'] : '';
                    
                    $validator = $this->validate_update_payment_type($mobiledata);
                                if ($validator->check()) {
                        $update_payment_type = $api->update_payment_type($trip_id,$payment_type);
                         if($update_payment_type){
                                    $ratings_info = $api->get_ratings_info();
                        
                            $message      = [
                                        "message" => __('success'),
                                        "ratings_info"=>$ratings_info,
                                        "status" => 1
                                    ];
                            echo json_encode($message);
                            exit;
                        }       
                    } else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                    break;
                    case 'taxiqr_scan':
                    $code = (isset($mobiledata['code'])) ? $mobiledata['code'] : '';
                    $tabdeviceToken = (isset($mobiledata['tab_device_token'])) ? $mobiledata['tab_device_token'] : '';
                    $validator = $this->validate_qrcode($mobiledata);
                    
                    if ($validator->check()) {
                        $check_taxisacn = $api->check_taxisacn($code);
                        if($check_taxisacn){
                            if(!empty($tabdeviceToken)) {
                                $tabTokenUpdate = $api->tabTokenUpdate($check_taxisacn['_id'],$tabdeviceToken);
                                $grandlimoUrl = $api->getVideoURL();
                                if($tabTokenUpdate) {
                                    $message      = [
                                        "message" => __('success'),
                                        "version" => $grandlimoUrl['version'],
                                        "video_url" => $grandlimoUrl['tab_video'],                                      
                                        "status" => 1
                                    ];
                                    echo json_encode($message);
                                    exit;
                                }
                            }
                            $message      = [
                                        "message" => __('success'),
                                        "detail" => $check_taxisacn,
                                        "status" => 1
                                    ];
                            echo json_encode($message);
                            exit;
                        }  else {
                            $message      = [
                                "message" => __('invalid_taxinumber'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }       
                    } else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                    }
                    break;
                    
                    case 'send_sms_app':
                    $addModel = Model::factory('add');
                    $fromname = (isset($mobiledata['fromname'])) ? $mobiledata['fromname'] : '';
                    $to = (isset($mobiledata['to'])) ? $mobiledata['to'] : '';
                    $content = (isset($mobiledata['content'])) ? $mobiledata['content'] : '';
                    $app = (isset($mobiledata['app'])) ? $mobiledata['app'] : ''; //1 - driver app, 2- pass app
                    $validator = $this->check_validation_send_sms($mobiledata);
                    if($app == 1 ){
                    $check_avail = $addModel->phone_isValid($to);   
                    } else {
                    $check_avail = $addModel->driverphone_isValid($to);
                    }
                    //echo $check_avail;exit;
                    if ($validator->check() && $check_avail == 1) {
                        if (SMS == 1) {
                        $api                 = Model::factory('mobileapi115');
                        $message_details = $this->commonmodel->sms_message_by_title('send_sms_app');
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                        $message         = str_replace("##FROM##", $fromname, $message);
                        $message         = str_replace("##MESSAGE##", $content, $message);
                        $result          = $api->sendSMS($to, $message);    
                        $message      = [
                                    "message" => __('success'),
                                    "status" => 1
                                ];
                        echo json_encode($message);
                        exit;               
                        }
                        }
                    else {
                        $errors = $validator->errors('errors');
                        $errors = ($errors == '[]')?$errors:__('invalid_phone');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    
                    
                    case 'update_taxi_info':
                        $driver_id = (isset($mobiledata['driver_id'])) ? $mobiledata['driver_id'] : '';
                        $model_type = (isset($mobiledata['model_type'])) ? $mobiledata['model_type'] : '';
                        $taxi_number = (isset($mobiledata['taxi_number'])) ? $mobiledata['taxi_number'] : '';
                        $start_km =  (isset($mobiledata['start_km'])) ? $mobiledata['start_km'] : '';
                        $validator = $this->car_info_validation($mobiledata);
                        $add_model        = Model::factory('add'); // Check Passenger id is avail or not
                        $check_driver_avail = $add_model->driver_id_isValid($mobiledata['driver_id']); 
                        $company_id     = $default_companyid;
                        //~ print "<pre>";
                        //~ ptint_r($mobiledata);
                        //~ exit;
                        if ($validator->check()) {
                            $check_taxino = $api->taxino_isValid($taxi_number);
                            if($check_driver_avail == 1){
                            if($check_taxino != '-1')
                            {
                                $taxi_id = $check_taxino['_id'];//exit;
                                $taxino_isValidstart_km = $api->taxino_isValidstart_km($taxi_id);
                                //~ if($start_km >= $taxino_isValidstart_km){
                                $update_taxi_info = $api->update_taxi_info($driver_id,$taxi_id,$default_companyid,$model_type,$start_km);
                                if($update_taxi_info == 1){
                                        $driver_details = $api->driver_profile($driver_id);
                                        $update_id        = $driver_id;
                                        //print_r($login_status_update);
                                        $driver_status    = 'F';
                                        $taxi_id          = "";
                                        $getTaxiforDriver = $api->getTaxiforDriver($driver_id, $default_companyid);
                                        if (count($getTaxiforDriver) > 0) {

                                            $version = isset($mobiledata['version_no'])?$mobiledata['version_no']:'';
                                            if($version != '')
                                            {
                                                $arr    = ['app_version'=>$version];
                                                $result = $api->update_table(MDB_DRIVER_INFO, $arr, '_id', $driver_id);
                                            }
                                            //Enable Driver Shift status
                                            $driver_reply                 = $api->update_driver_shift_status($driver_id, 'IN');
                                            $taxi_id                      = $getTaxiforDriver['mapping_taxiid'];
                                            $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
                                            $cat_id = commonfunction::get_auto_id(MDB_SHIFT_HISTORY);
                                            
                                            $ifTaxiReachService = $api->ifTaxiReachService($start_km);
                                            
                                            $km_reach_status = is_array($ifTaxiReachService) ? true : false;
                                            $service_id = is_array($ifTaxiReachService) ? $ifTaxiReachService['_id'] : 0;
                                            $insert_array                 = [
                                                '_id' => (int)$cat_id,
                                                'driver_shift_id' => (int)$driver_id,
                                                'taxi_id' => (int)$taxi_id,
                                                'shift_start' => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000),
                                                'login_start' => new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000),
                                                'shift_end' => null,
                                                'reason' => null,
                                                'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
                                                'start_km' => (int)$start_km,
                                                'end_km' => (int)0,
                                                'km_reach_status' => $km_reach_status,
                                                'taxi_service_id' => (int)$service_id,
                                                'service_status' => 'D',
                                                'status' => 'Login / Shift IN',
                                                'driver_id' => (int)$driver_id,
                                            ];
                                            //Inserting to Transaction Table 
                                            $transaction                  = $this->commonmodel->insert(MDB_SHIFT_HISTORY, $insert_array);
                                            //print_r($transaction);        
                                           // $shiftupdate_id               = $transaction[0];
                                            $shiftupdate_id               =  $cat_id;
                                            /***** Check whether new trips or payment waiting trips is availavble for the driver ********/
                                            $trip_id                      = $travel_status = "";
                                            $get_driver_trip_details      = $api->get_driver_log_details($update_id, $company_id);
                                            //print_r($get_driver_log_details);
                                            $driver_trip_count            = count($get_driver_trip_details); //exit;
                                            if ($driver_trip_count > 0) {
                                                foreach ($get_driver_trip_details as $details) {
                                                    $trip_id       = $details->passengers_log_id;
                                                    $travel_status = $details->travel_status;
                                                    $driver_status = ($travel_status != '9') ? 'A' : $driver_status;
                                                }
                                            }
                                            /*************************************************************************************/
                                            $driver_details[0]["shiftupdate_id"] = $shiftupdate_id;
                                            $driver_details[0]["taxi_id"]        = $taxi_id;
                                            $driver_details[0]["trip_id"]        = $trip_id;
                                            $driver_details[0]["travel_status"]  = $travel_status;
                                            $driver_details[0]["driver_status"]  = $driver_status;
                                            $driver_details[0]["shift_status"]   = 'IN';
                                            // Driver Statistics ********************/
                                            $driver_cancelled_trips              = $api->get_driver_cancelled_trips($driver_id, $company_id);
                                            $driver_logs_rejected                = $api->get_rejected_drivers($driver_id, $company_id);
                                            $rejected_trips                      = $driver_logs_rejected;
                                            $driver_earnings                     = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                                            $driver_tot_earnings                 = $api->get_driver_total_earnings($driver_id);
                                            $statistics                          = [];
                                            $total_trip                          = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                            foreach ($driver_earnings as $stat) {
                                                $total_trip++;
                                                $total_ratings += $stat['rating'];
                                                $total_amount += $stat['total_amount'];
                                            }
                                            $overall_trip                           = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                            $time_driven                            = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                                            $statistics                             = [
                                                "total_trip" => $overall_trip,
                                                "completed_trip" => $total_trip,
                                                "total_earnings" => round($driver_tot_earnings, 2),
                                                "overall_rejected_trips" => $rejected_trips,
                                                "cancelled_trips" => $driver_cancelled_trips,
                                                "today_earnings" => round($total_amount, 2),
                                                "shift_status" => 'IN',
                                                "time_driven" => $time_driven,
                                                "waiting_time" => $waittime,
                                                "status" => 1
                                            ];
                                            $driver_details[0]["driver_statistics"] = $statistics;
                                            /**************************************************/
                                            $details                                = [
                                                "driver_details" => $driver_details
                                            ];
                                            $message                                = [
                                                "message" => __('driver_info_update'),
                                                "status" => 1,
                                                "detail" => $details
                                            ];
                                    
                                    
                                    echo json_encode($message);
                                    exit;
                                }
                                }else if($update_taxi_info == -3){
                                    $message      = [
                                        "message" => __('selected_taxi_already_assign'),
                                        "status" => -1
                                    ];
                                echo json_encode($message);
                                exit;
                                }
                            //~ }else{
                                //~ $message      = array(
                                        //~ "message" => __('startkm_sholuld').$taxino_isValidstart_km,
                                        //~ "status" => -1
                                    //~ );
                                //~ echo json_encode($message);
                                //~ exit;
                                
                                //~ }
                            }else{
                                $message      = [
                                        "message" => __('invalid_taxinumber'),
                                        "status" => -1
                                    ];
                                echo json_encode($message);
                                exit;
                                
                            }
                        }
                             else {
                            $message = [
                                "message" => __('invalid_user_driver'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                            }
                        }
                    
                        else {
                            $errors = $validator->errors('errors');
                            $result = [
                                "message" => $errors,
                                "status" => -1
                            ];
                            echo json_encode($result);
                            exit;
                        }
                    break;
                    case 'driver_feedback':
                        $driver_id = (isset($mobiledata['driver_id'])) ? $mobiledata['driver_id'] : '';
                        $model_type = (isset($mobiledata['model_type'])) ? $mobiledata['model_type'] : '';
                        $taxi_number = (isset($mobiledata['taxi_number'])) ? $mobiledata['taxi_number'] : '';
                        $feedback =  (isset($mobiledata['feedback'])) ? $mobiledata['feedback'] : '';
                        $validator = $this->car_info_validation1($mobiledata);
                        if ($validator->check()) {
                        $check_taxino = $api->taxino_isValid($taxi_number);
                        
                        if($check_taxino != '-1')
                        {
                        $taxi_id = $check_taxino['_id'];//exit;
                        $update_taxi_info = $api->driver_feedback($driver_id,$taxi_id,$default_companyid,$model_type,$feedback);
                        if($update_taxi_info == 1){
                        $message      = [
                                    "message" => __('driver_info_update'),
                                    "status" => 1
                                ];
                        echo json_encode($message);
                        exit;
                        }else{
                            $message      = [
                                    "message" => __('invalid_user_driver'),
                                    "status" => 1
                                ];
                        echo json_encode($message);
                        exit;
                        }
                        }else{
                            $message      = [
                                    "message" => __('invalid_taxinumber'),
                                    "status" => 1
                                ];
                        echo json_encode($message);
                        exit;
                            
                        }
                        }
                        else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'find_contacts':
                    $response = [];
                    $contacts = (isset($mobiledata['phone'])) ? $mobiledata['phone'] : '';
                    $validator = $this->find_contacts_validation($mobiledata);
                    if ($validator->check()) {
                        echo count(explode(',',$contacts));exit;
                    $arr = array_unique(explode(',',$contacts));    
                    foreach($arr as $phone){
                        $status = $api->compare_contacts($phone);
                             if( $status != '-1' ){
                                $response[] = $status;
                                    
                            }
                        }
                        if(count($response)>0){
                         $result = [
                            "message" => __('success'),
                            "details" => $response,
                            "status" => 1
                        ];}else{
                         $result = [
                            "message" => __('no_contacts'),
                            "status" => -1
                        ];
                        }
                        echo json_encode($result);
                        exit;
                    }else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'create_child_account_by_contacts':
                   
                    $addModel = Model::factory('add');
                    $app_user = 0;
                    $new_user = 0;
                    $child_user = 0;
                    $bulkmessages     = [];
                    
                    $contacts = (isset($mobiledata['phone'])) ? $mobiledata['phone'] : '';
                    $account_type = (isset($mobiledata['account_type'])) ? $mobiledata['account_type'] : '';
                    $passenger_id = (isset($mobiledata['parent_id'])) ? $mobiledata['parent_id'] : '';
                    $valid = $addModel->parent_id_isValid($passenger_id);
                    $accvalid = $addModel->account_type_isValid($account_type);
                    $requestDetails = [];
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    if($accvalid != true) {
                        $message = [
                            "message" => __('invalid_account_type'),
                            "status" => 2
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $name='';$email='';$requestDetails_exists=[];$requestPassengers1=[];
                    
                    $validator = $this->find_contacts_validation($mobiledata);
                    if ($validator->check()) {
                    $arr = array_unique(explode(',',$contacts));    
                    $total_primary_contacts = count($arr);
                        foreach($arr as $phones){
                            $res_phone = explode('-',$phones);
                            $name = $res_phone[1];
                            $phone = $res_phone[0];
                            $phone_exist = $api->check_phone_passengers_register_check($phone);
                            /* EXIST USER OR NEW ACCOUNT CREATION */
                            if($phone_exist == 1){
                                
                            $requestDetails[] = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$phone_exist);
                            $sender_details = $api->get_passenger_details_by_id($passenger_id);
                            $username = $sender_details[0]['name'].' '.$sender_details[0]['lastname'];
                            if ((!empty($sender_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH .  $sender_details[0]['profile_image'])) {
                                $profile_image= URL_BASE.PASS_IMG_IMGPATH.$sender_details[0]['profile_image'];
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            $pushmessage           = [
                            "message" => str_replace("%s",$name,__('sent_child_account')),
                            "detail" => ['name'=>$username,'image'=>$profile_image,'phone'=>$sender_details[0]['phone'],'parent_id' => $passenger_id,'request_id' =>current($requestDetails)],
                             "status" => 8
                            ];
                            $get_passenger_details = $api->get_passenger_details($phone, $default_companyid);
                            $notify = App::helper('notifications');
                            $notify->setSender($passenger_id);
                            $notify->setReceiver($get_passenger_details[0]['id']);
                            $notify->setMessage('');
                            $notify->setRequestId(current($requestDetails));
                            $notify->setNotificationType(1);
                            $notify->sendNotification(); 
                            //print_r($get_passenger_details);exit;
                            if(isset($get_passenger_details[0]['device_token']) && !empty($get_passenger_details[0]['device_token']) && isset($get_passenger_details[0]['device_type']) && !empty($get_passenger_details[0]['device_type'])) {
                                $p_device_token    = $get_passenger_details[0]['device_token'];
                                $p_device_type     = $get_passenger_details[0]['device_type'];
                                $title = _('child_account_request');
                                $p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api,$title);
                            }
                            
                            $message = [
                                "message" => __('sent_child_account_success'),
                                "status" => 1
                            ];
                            $app_user++;
                            //echo json_encode($message);
                            //exit;     
                            }else if($phone_exist == 0){
                                $check_user_status = 2;
                                $requestDetails[] = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$check_user_status);
                                
                                $otp                = text::random($type = 'numeric', $length = 4);
                                $mobiledata['name'] = $name;
                                $acc_details_result = $api->add_cp_account_details($mobiledata, $phone, $otp, $default_companyid);
                                //$acc_details_result  = 1;
                                if ($acc_details_result == 1) {
                                    $mail="";
                                    $parentInfo = $this->commonmodel->getParent($passenger_id);
                                    $username   = $parentInfo['name'].' '.$parentInfo['lastname'];
                                    $updateChild = $api->update_child($passenger_id);
                                    
                                    $subject = __('add_child_request')." - ".'taxi';;
                                    
                                    $message = __('account_saved');
                                    if (SMS == 1) {
                                        $message_details = $this->commonmodel->sms_message_by_title('add_child_request');
                                        $to              = $phone;
                                        $message         = $message_details['sms_description'];
                                        $message         = str_replace("##VERIFY_CODE##", $otp, $message);
                                        $message         = str_replace("##PARENTID##", $username, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                        $message         = str_replace("##SITEURL##", URL_BASE, $message);
                                        $message         = str_replace("##ANDROID_PASSENGER_APP##", ANDROID_PASSENGER_APP, $message);
                                        $message         = str_replace("##IOS_PASSENGER_APP##", IOS_PASSENGER_APP, $message);
                                        $bulkmessages[$to]  = $message;
                                        //$result          = $api->sendSMS($to, $message);                                      
                                    }
                                    $detail  = [
                                        "email" => $email,
                                        "skip_credit" => SKIP_CREDIT_CARD
                                    ];
                                    $message = [
                                        "message" => $message,
                                        "detail" => $detail,
                                        "status" => 1
                                    ];
                                } else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => 4
                                    ];
                                }
                                $new_user++;
                                //echo json_encode($message);
                                //exit;
                                
                            }
                            else{
                                
                                $requestDetails_exists[] = $phone_exist;
                                $result = [
                                    "message" =>__('sent_child_account_fail'),
                                    "status" => -1
                                ];
                                $child_user++;
                                //echo json_encode($result);
                                //exit;
                                
                            }
                            
                            /*   USER OR NEW ACCOUNT CREATION */
                        }
                        
                        if(!empty($bulkmessages)) {
                            $result          = $api->sendSMSBulk($bulkmessages);
                        }
                        //print_r($requestDetails);
                         //exit;
                         $requestPassengers = $api->getRequestPassengers($requestDetails);
                         if(count($requestDetails_exists) > 0){
                            $requestPassengers1 = $api->getRequestPassengers_details($requestDetails_exists);
                         }
                         $requestPassengers = array_merge($requestPassengers,$requestPassengers1);
                         $message = [
                                        "message" => str_replace("%s",$total_primary_contacts,__('request_sent_from_contact')),
                                        "sub_message1" => str_replace("%s",$app_user,__('request_sent_from_contact_popup')), 
                                        "sub_message2" => str_replace("%s",$new_user,__('request_sent_from_contact_popup1')),
                                        "sub_message3" => str_replace("%s",$child_user,__('request_sent_from_contact_popup2')),
                                        "grandlimo_account" => $app_user,
                                        "new_account" => $new_user,
                                        "existing_child_account" => $child_user,
                                        "details" => $requestPassengers,
                                        "status" => 1
                                    ];
                        echo json_encode($message);        
                        exit;
                        
                        
                        
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    break;
                    case 'create_child_account_by_sendrequest':
                        
                    $addModel = Model::factory('add');  
                    $account_type = (isset($mobiledata['account_type'])) ? $mobiledata['account_type'] : '';
                    $passenger_id = (isset($mobiledata['parent_id'])) ? $mobiledata['parent_id'] : '';
                    $name = (isset($mobiledata['name'])) ? $mobiledata['name'] : '';
                    $email = (isset($mobiledata['email'])) ? $mobiledata['email'] : '';
                    $phone = (isset($mobiledata['phone'])) ? $mobiledata['phone'] : '';
                    
                    $valid = $addModel->parent_id_isValid($passenger_id);
                    $accvalid = $addModel->account_type_isValid($account_type);
                    
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    if($accvalid != true) {
                        $message = [
                            "message" => __('invalid_account_type'),
                            "status" => 2
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $validator = $this->send_request_validation($mobiledata);
                    if ($validator->check()) {
                        
                            $phone_exist = $api->check_phone_passengers_register_check($phone);
                            
                            if($phone_exist == 1){
                            $requestDetails[] = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$phone_exist);
                            $sender_details = $api->get_passenger_details_by_id($passenger_id);
                            $username = $sender_details[0]['name'].' '.$sender_details[0]['lastname'];
                            if ((!empty($sender_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH .  $sender_details[0]['profile_image'])) {
                                $profile_image= URL_BASE.PASS_IMG_IMGPATH.$sender_details[0]['profile_image'];
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
                        
                            $pushmessage           = [
                                "message" => str_replace("%s",$username,__('sent_child_account')),
                                "detail" => ['name'=>$username,'image'=>$profile_image,'phone'=>$sender_details[0]['phone'],'parent_id' => $passenger_id,'request_id' =>current($requestDetails)],
                                
                                "status" => 8
                            ];
                            //print_r($pushmessage);exit;
                            
                            $get_passenger_details = $api->get_passenger_details($phone, $default_companyid);
                            
                            $notify = App::helper('notifications');
                            $notify->setSender($passenger_id);
                            $notify->setReceiver($get_passenger_details[0]['id']);
                            $notify->setMessage('');
                            $notify->setRequestId(current($requestDetails));
                            $notify->setNotificationType(1);
                            $notify->sendNotification();
                            
                            
                            if(isset($get_passenger_details[0]['device_token']) && !empty($get_passenger_details[0]['device_token']) && isset($get_passenger_details[0]['device_type']) && !empty($get_passenger_details[0]['device_type'])) {
                                $p_device_token    = $get_passenger_details[0]['device_token'];
                                $p_device_type     = $get_passenger_details[0]['device_type'];
                                $title = __('child_account_request');
                                $p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api,$title);
                            }
                            $message = [
                                "message" => __('sent_child_account_success'),
                                "detail" => ['name'=>$username,'image'=>$profile_image,'phone'=>$sender_details[0]['phone'],'parent_id' => $passenger_id,'request_id' =>current($requestDetails)],
                                "status" => 1
                            ];
                            echo json_encode($message);
                            exit;       
                            }else if($phone_exist == 0){
                                $check_user_status = 2;
                                $requestDetails[] = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$check_user_status); 
                                $otp                = text::random($type = 'numeric', $length = 4);
                                $acc_details_result = $api->add_cp_account_details($mobiledata, $phone, $otp, $default_companyid);
                                //$acc_details_result  = 1;
                                if ($acc_details_result == 1) {
                                    $mail="";
                                    $parentInfo = $this->commonmodel->getParent($passenger_id);
                                    $username   = $parentInfo['name'].' '.$parentInfo['lastname'];
                                    $updateChild = $api->update_child($passenger_id);
                                    
                                    $replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_PARENTID=>$username,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP];                                 
                                    //$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'child_registration.html',$replace_variables);
                                    if ($this->lang != 'en') {
                                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/child_registration-' . $this->lang . '.html')) {
                                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/child_registration-' . $this->lang . '.html', $replace_variables);
                                        } else {
                                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'child_registration.html', $replace_variables);
                                        }
                                    } else {
                                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'child_registration.html', $replace_variables);
                                    }
                                    
                                    $subject = __('add_child_request')." - ".'taxi';;
                                        
                                    if(SMTP == 1) {
                                        $notify = App::helper('notification');
                                        $notify->setReceivers([$email]);
                                        $notify->setSubject($subject);
                                        $notify->setContent($message);
                                        $notify->sendNotification();
                                    } else {
                                        // To send HTML mail, the Content-type header must be set
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                        // Additional headers
                                        $headers .= 'From: '.$from.'' . "\r\n";
                                        $headers .= 'Bcc: '.$to.'' . "\r\n";
                                        mail($to,$subject,$message,$headers);   
                                    }
                                    
                                    if (SMS == 1) {
                                        $message_details = $this->commonmodel->sms_message_by_title('add_child_request');
                                        $to              = $phone;
                                        $message         = $message_details['sms_description'];
                                        $message         = str_replace("##VERIFY_CODE##", $otp, $message);
                                        $message         = str_replace("##PARENTID##", $name, $message);
                                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                        $message         = str_replace("##SITEURL##", URL_BASE, $message);
                                        $message         = str_replace("##ANDROID_PASSENGER_APP##", ANDROID_PASSENGER_APP, $message);
                                        $message         = str_replace("##IOS_PASSENGER_APP##", IOS_PASSENGER_APP, $message);
                                        $result = $api->sendSMS($to, $message);                                     
                                    }
                                    $detail  = [
                                        "email" => $email,
                                        "skip_credit" => SKIP_CREDIT_CARD
                                    ];
                                    $message = [
                                        "message" => __('account_saved'),
                                        "detail" => $detail,
                                        "status" => 1
                                    ];
                                } else {
                                    $message = [
                                        "message" => __('try_again'),
                                        "status" => 4
                                    ];
                                }
                                echo json_encode($message);
                                exit;
                            }
                            else{
                                
                                $result = [
                                    "message" =>__('sent_child_account_fail'),
                                    "status" => -1
                                ];
                                echo json_encode($result);
                                exit;
                                
                            }
                        
                    }
                    else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];
                        echo json_encode($result);
                        exit;
                        }
                    
                    break;
                    //http://192.168.1.88:1020/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0==/?type=reject_trip&trip_id=12&driver_id=&reason=&reject_type=1
                case 'child_request_status':
                    $parent_id    = (isset($mobiledata['parent_id'])) ? $mobiledata['parent_id'] : '';
                    $passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
                    $status        = (isset($mobiledata['status'])) ? $mobiledata['status'] : '';
                    $request_id        = (isset($mobiledata['request_id'])) ? $mobiledata['request_id'] : '';
                    $addModel = Model::factory('add');
                    
                    $pvalid  = $addModel->parent_id_isValid($parent_id);
                    $ppvalid = $addModel->parent_id_isValid($passenger_id);
                    
                    if($pvalid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    if($ppvalid != true) {
                        $message = [
                            "message" => __('invalid_passengerid'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    
                    $parentInfo = $api->get_passenger_details_by_id($parent_id);
                    $childInfo = $api->get_passenger_details_by_id($passenger_id);
                    $name = $childInfo[0]['name'].' '.$childInfo[0]['lastname'];
                    if($status == 1) {
                        $child_request_status = $api->child_request_status($parent_id,$passenger_id,$status,$request_id);
                        $pushmessage           = [
                            "message" => str_replace("%s",$name,__('request_accept')),
                            "passenger_id" => $passenger_id,
                            "status" => 11
                        ];
                        $title= __('child_request_accept');
                        $p_send_notification = $api->send_passenger_mobile_pushnotification($parentInfo[0]['device_token'],$parentInfo[0]['device_type'],$pushmessage,$this->customer_google_api,$title);
                        $message = [
                            "message" =>str_replace("%s",$name,__('request_accept')),
                            "status" => 1
                        ];
                    } else {
                        
                        $child_request_status = $api->delete_child_request($parent_id,$passenger_id,$request_id);
                        $pushmessage           = [
                            "message" => str_replace("%s",$name,__('request_decline')),
                            "passenger_id" => $passenger_id,
                            "status" => 11
                        ];
                        $title= __('child_request_decline');
                        $p_send_notification = $api->send_passenger_mobile_pushnotification($parentInfo[0]['device_token'],$parentInfo[0]['device_type'],$pushmessage,$this->customer_google_api,$title);
                        $message = [
                            "message" =>str_replace("%s",$name,__('request_decline')),
                            "status" => 1
                        ];
                    }
                    echo json_encode($message);
                    exit;           
                break;
                case 'get_notification_count':
                    $id    = (isset($mobiledata['_id'])) ? $mobiledata['_id'] : '';
                    $addModel = Model::factory('add');
                    $valid = $addModel->passenger_isValid($id);
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passenger'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $request = $api->get_notification_count($id);
                    if($request != 0) {
                        $message = [
                            "message" =>__('you_have_request'),
                            "details" => $request,
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" =>__('no_request'),
                            "details" => $request,
                            "status" => 0
                        ];
                    }                   
                    echo json_encode($message);
                    exit;
                break;  
                case 'get_child_request_status':
                    $id    = (isset($mobiledata['_id'])) ? $mobiledata['_id'] : '';
                    $this->lang    = (isset($mobiledata['lang'])) ? $mobiledata['lang'] : $this->lang;
                    $addModel = Model::factory('add');
                    $valid = $addModel->passenger_isValid($id);
                    if($valid != true) {
                        $message = [
                            "message" => __('invalid_passenger'),
                            "status" => 3
                        ];
                        echo json_encode($message);
                        exit;
                    }
                    $request = $api->get_child_request_status($id,$this->lang);
                    foreach($request as $key => $value) {
                        
                        if ((!empty($value['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH .  $value['profile_image'])) {
                            $request[$key]['profile_image'] = URL_BASE.PASS_IMG_IMGPATH.$value['profile_image'];
                        } else {
                            $request[$key]['profile_image'] = URL_BASE . "public/images/no_image109.png";
                        }
                        
                        if ((!empty($value['profile_thumb'])) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH .  $value['profile_thumb'])) {
                            $request[$key]['profile_thumb'] = URL_BASE.PASS_IMG_IMGPATH.$value['profile_thumb'];
                        } else {
                            $request[$key]['profile_thumb'] = URL_BASE . "public/images/no_image109.png";
                        }
                    }
                    
                    if(!empty($request)) {
                        $message = [
                            "message" =>__('you_have_request'),
                            "details" => $request,
                            "status" => 1
                        ];
                    } else {
                        $message = [
                            "message" =>__('no_request'),
                            "details" => $request,
                            "status" => 0
                        ];
                    }                   
                    echo json_encode($message);
                    exit;           
                break;
                case 'update_device_token':
                    $validator = $this->token_validation($mobiledata);
                    $update_token = $api->update_device_token($mobiledata);//type 1 - android mobile 2 - android tab
                    if($validator->check()) {
                        $result = [
                            "message" => __('token_update'),
                            "status" => 1
                        ];
                    } else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];                      
                    }
                    echo json_encode($result);
                    exit;               
                break;  
                
                
                case 'passenger_register_validation_step3':
                    $validator = $this->passenger_register_validation_step3($mobiledata);
                    if($validator->check()) {
                        $p_email     = $mobiledata['email'];
                        $email_exist = $api->check_email_passengers($p_email, $default_companyid);
                            if ($email_exist > 0) {
                                $result = [
                                    "message" => __('email_exists'),
                                    "status" => 2
                                ];
                                echo json_encode($result);
                                exit;   
                        }
                        $result = [
                            "message" => __('success'),
                            "status" => 1
                        ];
                        echo json_encode($result);
                        exit;   
                    } else {
                        $errors = $validator->errors('errors');
                        $result = [
                            "message" => $errors,
                            "status" => -1
                        ];  
                        echo json_encode($result);
                        exit;                   
                    }
                                    
                break;  
                
                case 'send_push':
                /*$gateway_details           = $this->commonmodel->gateway_details($default_companyid);
                echo '<pre>'; 
                foreach($gateway_details as $k => $g){
                    $gateway_details[$k]['image_normal'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_normal.png';
                    $gateway_details[$k]['image_active'] = URL_BASE. 'public/images/'.strtolower(str_replace(' ','',$g['pay_mod_name'])).'_active.png';
                }
                print_r($gateway_details);exit;
                
                */
                    $pushmessage           = [
                            "message" => __('success'),
                            "status" => 11,
                            "video_url" => 'http://182.72.62.190:2222/public/video/79193296grandlimo.mp4'
                        ];
                        $title= __('child_request_decline');
                        $p_send_notification = $api->send_tab_mobile_pushnotification('fluJqc-alLM:APA91bFSRyXh8UD7zCKH3CHuEimg1FZ4tl_yyq7lnd3lrX8g51WVLqBqH73WI-54IwFE2cEm9s63hKNRboVP5umDlsLvd8Lq_IQCx2zVPj1mwhUsxoRdtzE2-sOhCME_npcX5c0esmv2',1,$pushmessage,$this->customer_google_api,$title);
                        print "<pre>";
                        echo "cool";
                        print_r($p_send_notification);
                        exit;
                break;
                case 'api_for_qa_purpose':
                $phone     = $mobiledata['phone'];
                $get_otp = $api->get_otp($phone);
                echo $get_otp['otp'];
                exit;
                break;
               case 'reject_trip':
                    $array       = $mobiledata;
                    $trip_id     = $array['trip_id'];
                    $reject_type = $array['reject_type'];
                    $driver_id   = $array['driver_id'];
                    $taxi_id     = $array['taxi_id'];
                    $company_id  = $array['company_id'];
                    if ($trip_id != "") {
                        $passenger_log_details = $api->get_trip_detail_only($trip_id);                    
                        if (count($passenger_log_details) > 0) {
                            $post                         = [];
                            $post['driver_id']            = $driver_id;
                            $post['passengers_id']        = isset($passenger_log_details['passengers_id']) ? $passenger_log_details['passengers_id']: '';
                            $post['passengers_log_id']    = $trip_id;
                            $post['reason']               = $array['reason'];
                            $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
                            $post['createdate']           = $company_all_currenttimestamp;
                            $operator_id                  = isset($passenger_log_details['operator_id']) ? $passenger_log_details['operator_id']:'';
                            $travel_status       = isset($passenger_log_details['travel_status']) ? $passenger_log_details['travel_status']: '';
                            if ($reject_type == 1) {
                                $driver_checkabcd     = $api->setdrivercheck(['status' => 'request1']);
                                $driver_reply = isset($passenger_log_details['driver_reply']) ? $passenger_log_details['driver_reply'] : '';
                                $driver_checkabcd     = $api->setdrivercheck(['status' => $passenger_log_details]);
                                if ($driver_reply == 'R') {
                                    $message = __('trip_cancel_timeout');
                                    $msg     = [
                                        "message" => $message,
                                        "status" => '8'
                                    ];
                                    echo json_encode($msg); //exit;
                                } else if ($travel_status == 6) {
                                            
                                    $message = [
                                        "message" => __('trip_already_canceled'),
                                        "status" => 4
                                    ];
                                    echo json_encode($message);
                                    break;
                                } else {
                                    //push message for rejected driver
                                    $rejected_driver    = isset($passenger_log_details['driver_id']) ? $passenger_log_details['driver_id']:'';
                                    $passengers_log_id  = $trip_id;
                                    $push_msg           = __('request_rejected');
                                    $message            = [
                                        "message" => $push_msg,
                                        "trip_id" => $passengers_log_id,
                                        "trip_detail" => "",
                                        "status" => 6
                                    ];
                                    /********** Update Trip Status *****************/
                                    $driver_reply       = "";
                                    //$update_trip_array  = array("driver_reply" => 'R');
                                    //$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$passengers_log_id);   
                                   
                                    $get_driver_request = $api->get_driver_request($trip_id);
                                    if (count($get_driver_request)>0) {
                                        
                                        /******* Update the driver id in */
                                        $rejection_type                = 1;
                                        $prev_rejected_timeout_drivers = isset($get_driver_request['rejected_timeout_drivers']) ? $get_driver_request['rejected_timeout_drivers']:'';
                                        $status                        = isset($get_driver_request['status']) ? $get_driver_request['status'] : '';
                                        $get_request_dets              = $api->check_new_request_tripid($taxi_id, $company_id, $trip_id, $driver_id, $company_all_currenttimestamp, "", $operator_id);
                                        if ($prev_rejected_timeout_drivers != "") {
                                            $rejected_timeout_drivers = $prev_rejected_timeout_drivers . ',' . $driver_id;
                                        } else {
                                            $rejected_timeout_drivers = $driver_id;
                                        }
                                        if ($status != '4') {
                                            $update_trip_array = [
                                                "status" => '0',
                                                "rejected_timeout_drivers" => $rejected_timeout_drivers
                                            ];
                                            //$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);                           
                                        }
                                        $add_rejected_list      = $api->add_rejected_list($post, $rejection_type);
                                        // Driver Statistics ********************/
                                        $rejected_trips   = $api->get_rejected_drivers($driver_id, $company_id);
                                        //to get cancelled trip counts from drivers
                                        $driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id, $company_id);
                                        $driver_earnings        = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                                        $driver_tot_earnings    = $api->get_driver_total_earnings($driver_id);
                                        $statistics             = [];
                                        $total_trip             = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                        foreach ($driver_earnings as $stat) {
                                            $total_trip++;
                                            $rate = isset($stat['rating']) ? $stat['rating']:0;
                                            $total_ratings += $rate;
                                            $total_amount += $stat['total_amount'];
                                        }
                                        $overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                        $time_driven  = $api->get_time_driven($driver_id, 'R', 'A', '1');
                                        $statistics   = [
                                            "total_trip" => $overall_trip,
                                            "completed_trip" => $total_trip,
                                            "total_earnings" => round($driver_tot_earnings, 2),
                                            "overall_rejected_trips" => $rejected_trips,
                                            "cancelled_trips" => $driver_cancelled_trips,
                                            "today_earnings" => round($total_amount, 2),
                                            "shift_status" => 'IN',
                                            "time_driven" => $time_driven,
                                            "status" => 1
                                        ];
                                        $message      = [
                                            "message" => __('request_rejected'),
                                            "driver_statistics" => $statistics,
                                            "status" => 6
                                        ];

                                        /** move to passengerlog split table **/
                                        $update_reject_trip_det = $api->update_reject_trip_det($trip_id);

                                    }
                                    /***********************************************************************************/
                                }
                            } else {
                                $get_driver_request = $api->get_driver_request($trip_id);
                                //print_r($get_driver_request);exit;
                                $rejection_type     = 0;
                                if (count($get_driver_request) > 0) {
                                    /******* Update the driver id in */
                                    $prev_rejected_timeout_drivers = isset($get_driver_request['rejected_timeout_drivers']) ? $get_driver_request['rejected_timeout_drivers'] : '';
                                    $status                        = isset($get_driver_request['status']) ? $get_driver_request['status'] : '';
                                    $reject_driversArr             = explode(",", $prev_rejected_timeout_drivers);
                                    if (!in_array($driver_id, $reject_driversArr)) {
                                        if ($prev_rejected_timeout_drivers != "") {
                                            $rejected_timeout_drivers = $prev_rejected_timeout_drivers . ',' . $driver_id;
                                        } else {
                                            $rejected_timeout_drivers = $driver_id;
                                        }
                                        $driver_checkabcd     = $api->setdrivercheck(['status' => 'check_new_request_tripid']);
                                        $get_request_dets = $api->check_new_request_tripid($taxi_id, $company_id, $trip_id, $driver_id, $company_all_currenttimestamp, "", $operator_id);
                                        if ($status != '4') { 
                                            $update_trip_array = [
                                                "status" => 0,
                                                "rejected_timeout_drivers" => $rejected_timeout_drivers
                                            ];
                                            $result = $api->update_table(MDB_REQUEST_HISTORY,$update_trip_array,'trip_id',$trip_id);
                                        }
                                    }
                                    $add_rejected_list      = $api->add_rejected_list($post, $rejection_type);
                                    // Driver Statistics ********************/
                                    $rejected_trips   = $api->get_rejected_drivers($driver_id, $company_id);
                                    //to get cancelled trip counts from drivers
                                    $driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id, $company_id);
                                    $driver_earnings        = $api->get_driver_earnings_with_rating($driver_id, $company_id);
                                    $driver_tot_earnings    = $api->get_driver_total_earnings($driver_id);
                                    $statistics             = [];
                                    $total_trip             = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount = 0;
                                    foreach ($driver_earnings as $stat) {
                                        $total_trip++;
                                        $rate = isset($stat['rating']) ? $stat['rating']:0;
                                        $total_ratings += $rate;
                                        $total_amount += $stat['total_amount'];
                                    }
                                    $overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;
                                     $time_driven                            = $api->get_time_driven($driver_id, 'R', 'A', '1','1');$waittime =  $api->get_time_driven($driver_id, 'R', 'A', '1','2');
                                    //$time_driven  = $api->get_time_driven($driver_id, 'R', 'A', '1');
                                    $statistics   = [
                                        "total_trip" => $overall_trip,
                                        "completed_trip" => $total_trip,
                                        "total_earnings" => round($driver_tot_earnings, 2),
                                        "overall_rejected_trips" => $rejected_trips,
                                        "cancelled_trips" => $driver_cancelled_trips,
                                        "today_earnings" => round($total_amount, 2),
                                        "shift_status" => 'IN',
                                        "time_driven" => $time_driven,
                                         "waiting_time" => $waittime,
                                        "status" => 1
                                    ];
                                    $message      = [
                                        "message" => __('driver_reply_timeout'),
                                        "driver_statistics" => $statistics,
                                        "status" => 7
                                    ];
                                }
                            }
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => 2
                            ];
                        }
                    } else {
                        $message = __('trip_id_req');
                        $message = [
                            "message" => $message,
                            "status" => '-1'
                        ];
                    }
                echo json_encode($message);
            case 'get_trip_update':					
				$trip_id      = isset($mobiledata['trip_id']) ? $mobiledata['trip_id'] : ""; 
				$passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : ""; 
				$get_passenger_log_det = $api->get_trip_update_detail($passenger_id,$trip_id);
				
				if (is_array($get_passenger_log_det)) {
					$driver_reply          = $get_passenger_log_det['driver_reply'];
					$travel_status         = $get_passenger_log_det['travel_status'];
					$notification_status   = isset($get_passenger_log_det['notification_status']) ? $get_passenger_log_det['notification_status'] : 0;
						  
					if (($driver_reply == 'A') && ($travel_status == 8) || ($travel_status == 8)) { // Dispatcher Cancel
						$dispatcher_cancel_display = ($notification_status != 8) ? 1 : 0;
                        $message                   = [
							"message" => __("dispatcher_trip_cancelled"),
							"trip_id" => $trip_id,
							"display" => $dispatcher_cancel_display,
							"status" => 1							
						];					
						$update_trip_array         = [
							"notification_status" => 8
						];
						$result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);	
					} elseif (($driver_reply == 'A') && ($travel_status == 9)) { // Trip Confirm
						$message = [
							"message" => __("request_confirmed_passenger"),
							"trip_id" => $trip_id,
							"display" => 0,
							"status" => 2
						];						
					} elseif (($driver_reply == 'C') && ($travel_status == 6)) { // Driver Cancel
						$message = [
							"message" => __("trip_cancel"),
							"trip_id" => $trip_id,
							"display" => 0,
							"status" => 3
						];						
					} elseif (($driver_reply == 'C') && ($travel_status == 9)) { // Driver Cancel After Confirm
						$driver_cancel_display = ($notification_status != 5) ? 1 : 0;
						$message               = [
							"message" => __("driver_cancel_after_confirm"),
							"trip_id" => $trip_id,
							"display" => $driver_cancel_display,
							"status" => 4
						];						
						$update_trip_array         = [
							"notification_status" => 5
						];
						$result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
					} elseif (($driver_reply == 'A') && ($travel_status == 3)) { // Trip Inprogress
						$arrived_display   = ($notification_status != 1) ? 1 : 0;
						$message           = [
							"message" => __("passenger_on_board"),
							"trip_id" => $trip_id,
							"display" => $arrived_display,
							"status" => 5
						];
						$update_trip_array         = [
							"notification_status" => 1
						];
						$result = $api->update_table(MDB_PASSENGERS_LOGS, $update_trip_array, '_id',$trip_id);
					} else { //Invalid 
						$message = [
							"message" => __('invalid_trip'),
							"trip_id" => $trip_id,
							"display" => 0,
							"status" => -1
						];	
					}
				} else { //Invalid 
					$message = [
						"message" => __('invalid_trip'),
						"trip_id" => $trip_id,
						"display" => 0,
						"status" => -1
					];
				}
				echo json_encode($message);
				break;    
                //URL : http://192.168.1.118:1055/mobileapi114/index/dGF4aV9hbGw=/?type=get_recent_places&passenger_id=1
            case 'get_recent_places':
                $place_array = $mobiledata;
                                $validator = $this->passenger_place_validation($place_array);
                                if($validator->check())
                {
                    $passenger_id   = $place_array['passenger_id'];
                    $place_type     = $place_array['place_type'];
                    $pending_fav    = 10;
                    
                                        $get_recent_place_list = $api->get_recent_place_list($passenger_id,$pending_fav,$place_type);

                    if(count($get_recent_place_list)>0)
                    {
                        $message = ["message" => __('success'),"detail"=>$get_recent_place_list,"status"=>1];
                    }
                    else
                    {
                        $message = ["message" => __('no_data'),"status"=>0];
                    }
                }
                else
                {
                    $validation_error = $validator->errors('errors');
                    $message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-5];
                    echo json_encode($message);
                    exit;
                }
                echo json_encode($message);
                unset(MangoDB::$instances['default']);
                break;
                exit;
                case 'forceclose_tirp':
                $trip_id = $mobiledata['trip_id'];
                $update = ['travel_status'=>1,"payment_chosen_flag"=>1,'forceclose_status'=>1];
                $res = $this->commonmodel->update(PASSENGERS_LOG,$update, '_id',$trip_id);
                $api->update_complete_trip_det($trip_id);
                if($res == 1)
                    $message = ["status"=>1];
                else
                    $message = ["status"=>0];
                
                echo json_encode($message);
                break;
                                exit;
                case 'demo':
                                $driver_id = $mobiledata['driver_id'];
                        $company_det   = $api->get_company_id($driver_id);
                                $company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det['company_id']);                  $company_all_currenttimestampdemo = convert_timezone( 'now', TIMEZONE );             
                                $message = ['compy_details'=>$company_det,'time'=>$company_all_currenttimestamp,'com'=>COMPANY_CID,'zone'=>$company_all_currenttimestampdemo];
                echo json_encode($message);
                break;
                                exit;

                case 'passenger_log_complete':
                    $trip_id = $mobiledata['trip_id'];
                    $company_det   = $api->update_complete_trip_det($trip_id);

                    $message = ['message'=>'Successfully Updated!'];
                echo json_encode($message);
                break;
                exit;

                case 'sendSMS';
                $to = $_REQUEST['to'];
                //$message = $_REQUEST['message'];
                $parent_device_token = $_REQUEST['parent_device_token'];
                $parent_device_type = $_REQUEST['parent_device_type'];
                $parent_pushmessage = $_REQUEST['parent_pushmessage'];
                $title="";
               // $api->sendSMS($to,$message);
                 $p_send_notification = $api->send_passenger_mobile_pushnotification($parent_device_token,$parent_device_type,$parent_pushmessage,$this->customer_google_api,$title);
                echo "here";exit;
                break;
                exit;

                case 'passenger_trips_list':
                //Current Journey after driver confirmation //TN1013619352
                $array = $mobiledata;
                
                $ids = [];
                if($array['child_id'] == "") {
                    $childs = $api->get_passenger_childlist($array['id'],'');
                    foreach($childs as $child) {
                        $ids[] = (int)$child['_id'];
                    }
                } else {
                    $ids[] = (int)$array['child_id'];
                }
                
                if ($array['id'] != null) {
                    $validator = $this->coming_cancel($array);
                    if ($validator->check()) {
                        $userid       = $array['id'];
                        $start        = $array['start'];
                        $limit        = $array['limit'];
                        $device_type  = $array['device_type'];
                        $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        if ($device_type == 1)
                            $pagination = 1;
                        else
                            $pagination = 0;
                        $passengers_trips = [];
                        
                        // $pending_bookings_zero = $api->get_pending_bookings_travel_statuszero($default_companyid, $pagination, $ids, '0', 'A', '0', $start, $limit);
                        //  foreach ($pending_bookings_zero as $key => $val) {
                        //     $pickup_time = Commonfunction::convertphpdate('d-M-Y h:i:s A',$val['pickup_time']);
                        //     $pending_bookings_zero[$key]['pickup_time'] = $pickup_time;
                        //     $acc = (!empty($val['account_type_name'])) ? current($val['account_type_name']) : '';
                        //     $pending_bookings_zero[$key]['account_type_name']    = $acc;
                        //       switch ($val['travel_status']) {
                        //           case 0:
                        //             $pending_bookings_zero[$key]['travel_msg'] = "Waiting for driver";
                        //             break;
                        //  }
                        // }
                        $past_bookings                        = $api->passenger_trip_list($array['id'], 1, 'A', '1', $start, $limit, $default_companyid);
                        //print "<pre>"; print_r($past_bookings);exit;
                        foreach ($past_bookings as $key => $val) {
                            $pickup_time = Commonfunction::convertphpdate('D, F d Y h:i A',$val['pickup_time']);

                            $actual_pickup_time =isset($val['actual_pickup_time'])?$val['actual_pickup_time']:'';

                            if( $actual_pickup_time != '')
                            $actual_pickup_time = Commonfunction::convertphpdate('D, F d Y, h:i A',$actual_pickup_time);
                            else
                            $actual_pickup_time = '';

                            $drop_time = Commonfunction::convertphpdate('D, F d Y, h:i A',$val['drop_time']);
                            $past_bookings[$key]['drop_time'] = $drop_time;
                            $acc = (!empty($val['account_type_name'])) ? $val['account_type_name'] : '';
                            $drivername = (!empty($val['drivername'])) ? $val['drivername'] : '';
                            $driverlastname = (!empty($val['driverlastname'])) ? $val['driverlastname'] : '';
                            $metric = (!empty($val['metric'])) ? $val['metric'] : '';
                            $past_bookings[$key]['account_type_name']    = $acc;
                            $past_bookings[$key]['metric']    = $metric;
                            $past_bookings[$key]['drivername']    = $drivername." ".$driverlastname;
                            
                            $convertSeconds = $val['waitingtime'] * 3600;
                            $converthours   = floor($convertSeconds / 3600);
                            $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
                            $convertsecs    = floor($convertSeconds % 60);
                            $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
                            $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
                            $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
                            $waitingTime    = ($waitH != "00") ? $waitH . ':' . $waitM . ':' . $waitS : $waitM .':' . $waitS;
                            $past_bookings[$key]['waiting_time']    = $waitingTime;
                            $past_bookings[$key]['tags'] = isset($val['tags'])?$val['tags']:[];
                            $past_bookings[$key]['ratings'] = isset($val['ratings'])?$val['ratings']:'';
                            $wallet_used_amount = isset($val['wallet_amount_used'])?$val['wallet_amount_used']:0;
                            $waiting_cost = isset($val['waiting_cost'])?$val['waiting_cost']:0;
                            $fare = isset($val['fare'])?$val['fare']:0;
                            $additional_fare = isset($val['additional_fare']['value'])?$val['additional_fare']['value']:0;
                            $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:0;
                            $actual_paid_amt = isset($val['actual_paid_amt'])?$val['actual_paid_amt']:0;
                            $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;

                            $trip_fare = $fare+$wallet_used_amount+$additional_fare;

                            if($driver_edit_status == 0 && $pending_amt > 0 && $actual_paid_amt != '' && $actual_paid_amt != 0)
                            {
                                $trip_fare = $actual_paid_amt;
                            }


                            $past_bookings[$key]['trip_fare'] = $trip_fare;
                            $minutes_fare = $trip_fare - $waiting_cost; 
                            $past_bookings[$key]['minutes_fare'] = $minutes_fare;

                            $driver_image_name = isset($val['driver_image'])?$val['driver_image']:'';
                            $trip_id = isset($val['passengers_log_id'])?$val['passengers_log_id']:'';
                            $driver_image                 = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . $driver_image_name;
                            if (file_exists($driver_image) && ($driver_image_name != '')) {
                                $driver_image = URL_BASE . SITE_DRIVER_IMGPATH . $driver_image_name;
                            } else {
                                $driver_image = URL_BASE . "/public/images/noimages109.png";
                            }
                            $past_bookings[$key]['driver_image'] = $driver_image;

                            switch ($val['travel_status']) {
                                
                                case 1:
                                    $past_bookings[$key]['travel_msg'] = "Fare Updated";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;
                                    break;
                                case 2:
                                    $past_bookings[$key]['travel_msg'] = "Inprogress";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;
                                    break;
                                case 3:
                                    $past_bookings[$key]['travel_msg'] = "Arrived";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;

                                    break;
                                case 5:
                                    $past_bookings[$key]['travel_msg'] = "Completed";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;

                                    break;
                                case 9:
                                    $past_bookings[$key]['travel_msg'] = "Trip Confirmed";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;

                                    break;
                                default:
                                    $past_bookings[$key]['travel_msg'] = "Cancelled";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;

                                    break;
                            }
                        }
                        //$passengers_trips['pending_bookings'] = array_merge($pending_bookings,$pending_bookings_zero);
                        $passengers_trips    = $past_bookings;
                        if (count($passengers_trips) > 0) {
                            //$message = $passengers_current;
                            $message = [
                                "message" => __('success'),
                                "detail" => $passengers_trips,
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('no_data'),
                                "status" => 0
                            ];
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -1
                        ];
                    }
                } else {
                    $message = [
                        "message" => __('invalid_user'),
                        "status" => -1
                    ];
                }
                echo json_encode($message);
                break;

                case 'check_api':
               // $get_passenger_log_details = $api->get_passenger_log_detail('249');
                $get_passenger_log_details = $api->get_total_sum();
                print_r($get_passenger_log_details);exit;
                echo json_encode($get_passenger_log_details);
                break;

                case 'update_pass_id_image':
                    $p_personal_array = $mobiledata;
                    if ($p_personal_array['id_image'] != NULL &&  $p_personal_array['passenger_id']) {
                        $passenger_id = $p_personal_array['passenger_id'];
                                        /* Profile Update */
                                        $imgdata   = base64_decode($p_personal_array['id_image']);
                                        $f         = finfo_open();
                                        $mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
                                        $mime_type = explode('/', $mime_type);
                                        $mime_type = $mime_type[1];
                                        $img       = imagecreatefromstring($imgdata);
                                        
                                        if ($img != false) {
                                            //$result = $api->driver_profile($d_personal_array['driver_id'], $default_companyid);
                                            if (count($result) > 0) {
                                                
                                                $profile_picture  = text::random($type = 'alnum', $length = 12);
                                                $main_image_path  = $_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH ."id_image".$profile_picture;
                                            } //unlink($filename);
                                            $image_name       = uniqid() . '.' . $mime_type;
                                            $image_url        = DOCROOT . PASS_IMG_IMGPATH . '/id_image/' . $image_name;                 
                                            $image_path       = DOCROOT . PASS_IMG_IMGPATH . '/id_image/'.$image_name;
                                            imagejpeg($img, $image_url);
                                            imagedestroy($img);
                                            chmod($image_path, 0777);
                                            $d_image = Image::factory($image_path);
                                            $path11  = DOCROOT . PASS_IMG_IMGPATH;
                                            $update_array["id_image"] = $image_name;    
                                            $message = $api->edit_passenger_personaldata($update_array, $passenger_id, $default_companyid);

                                            $message = [
                                                "message" => __('id_image_succcess'),
                                                "status" => 1
                                            ];

                                        } else {
                                            $message = [
                                                "message" => __('image_not_upload'),
                                                "status" => 4
                                            ];
                                        }
                    } else {
                        $message = [
                            "message" => __('try_again'),
                            "status" => -5
                        ];
                    }
                    echo json_encode($message);
                    exit;
                    break;

                case 'passenger_later_bookings':
                //Current Journey after driver confirmation //TN1013619352
                $array = $mobiledata;
                $ids = [];
                if ($array['id'] != null) {
                    $validator = $this->validate_passenger_detail($array);
                    if ($validator->check()) {
                        $userid       = $array['id'];
                        $device_type  = isset($array['device_type'])?$array['device_type']:'';
                        $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            $message['current_time'] = $this->current_datetime;

                            echo json_encode($message);
                            exit;
                        }
                        $passengers_trips = [];

                        
                        $past_bookings  = $api->passenger_pending_list($array['id'], 1, 'A', '1', $default_companyid);
                        foreach ($past_bookings as $key => $val) {
                            $pickup_time = Commonfunction::convertphpdate('D, F d Y h:i A',$val['pickup_time']);

                           $pickup_date =  Commonfunction::convertphpdate('Y-m-d',$val['pickup_time']);
                           $pickuptime =  Commonfunction::convertphpdate('h:i A',$val['pickup_time']);
                            $current_date = date('Y-m-d',strtotime($this->currentdate));
                           $next_date = date('Y-m-d',strtotime('+1 days',strtotime($this->currentdate)));

                           if(strtotime($current_date)  == strtotime($pickup_date))
                           {
                             $past_bookings[$key]['pickup_day_text'] = __('today_label');
                             $past_bookings[$key]['pickup_time_text'] = $pickuptime;
                           }
                           elseif(strtotime($next_date)  == strtotime($pickup_date))
                           {
                             $past_bookings[$key]['pickup_day_text'] = __('tommorrow_label');
                             $past_bookings[$key]['pickup_time_text'] = $pickuptime;
                           }
                           else
                           {
                            $past_bookings[$key]['pickup_day_text'] = Commonfunction::convertphpdate('M d,Y',$val['pickup_time']);
                             $past_bookings[$key]['pickup_time_text'] = $pickuptime;
                           }

                            $past_bookings[$key]['pickup_date_text'] = Commonfunction::convertphpdate('M d,y',$val['pickup_time']);

                            $actual_pickup_time =isset($val['actual_pickup_time'])?$val['actual_pickup_time']:'';

                            if( $actual_pickup_time != '')
                            $actual_pickup_time = Commonfunction::convertphpdate('D, F d Y, h:i A',$actual_pickup_time);
                            else
                            $actual_pickup_time = '';

                            $drop_time = Commonfunction::convertphpdate('D, F d Y, h:i A',$val['drop_time']);
                            $past_bookings[$key]['drop_time'] = $drop_time;


                            $acc = (!empty($val['account_type_name'])) ? $val['account_type_name'] : '';
                            $drivername = (!empty($val['drivername'])) ? $val['drivername'] : '';
                            $driverlastname = (!empty($val['driverlastname'])) ? $val['driverlastname'] : '';
                            $metric = (!empty($val['metric'])) ? $val['metric'] : '';
                            $past_bookings[$key]['account_type_name']    = $acc;
                            $past_bookings[$key]['metric']    = $metric;
                            $past_bookings[$key]['drivername']    = $drivername." ".$driverlastname;

                            $driver_image_name = isset($val['driver_image'])?$val['driver_image']:'';
                            $trip_id = isset($val['passengers_log_id'])?$val['passengers_log_id']:'';
                            $driver_image                 = $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DRIVER_IMGPATH . $driver_image_name;
                            if (file_exists($driver_image) && ($driver_image_name != '')) {
                                $driver_image = URL_BASE . SITE_DRIVER_IMGPATH . $driver_image_name;
                            } else {
                                $driver_image = URL_BASE . "/public/images/noimages109.png";
                            }
                            $past_bookings[$key]['driver_image'] = $driver_image;

                            switch ($val['travel_status']) {
                                
                                case 1:
                                    $past_bookings[$key]['travel_msg'] = "Fare Updated";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;
                                    break;
                                case 2:
                                    $past_bookings[$key]['travel_msg'] = "Inprogress";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;

                                    break;
                                case 3:
                                    $past_bookings[$key]['travel_msg'] = "Arrived";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;
                                    break;
                                case 5:
                                    $past_bookings[$key]['travel_msg'] = "Completed";
                                    $past_bookings[$key]['pickup_time'] = $actual_pickup_time;
                                    break;
                                case 9:
                                    $past_bookings[$key]['travel_msg'] = "Trip Confirmed";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;

                                    break;
                                default:
                                    $past_bookings[$key]['travel_msg'] = "Yet to be Assigned";
                                    $past_bookings[$key]['pickup_time'] = $pickup_time;

                                    break;
                            }
                        }

                        $pass_result = $api->passenger_profile($array['id']);                       
                        if (count($result) > 0) {
                            $passenger_image = isset($pass_result['profile_image'])?$pass_result['profile_image']:'';
                            $vip_user = isset($pass_result['vip_user'])?$pass_result['vip_user']:0;
                            /*************************** Passenger Image ************************************/
                            if ((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_IMG_IMGPATH . 'thumb_' . $passenger_image)) {
                                $profile_image = URL_BASE . PASS_IMG_IMGPATH . $passenger_image;
                            } else {
                                $profile_image = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            $civilid_front = isset($pass_result['civilid_front'])?$pass_result['civilid_front']:'';
                            $civilid_back  = isset($pass_result['civilid_back'])?$pass_result['civilid_back']:'';
                            
                            $civilid_front_thumb = isset($pass_result['civilid_front_thumb'])?$pass_result['civilid_front_thumb']:'';
                            $civilid_back_thumb  = isset($pass_result['civilid_back_thumb'])?$pass_result['civilid_back_thumb']:'';
                            
                            if ((!empty($civilid_front)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_front)) {
                                $civilid_front = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_front;
                            } else {
                                $civilid_front = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_back)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_back)) {
                                $civilid_back = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_back;
                            } else {
                                $civilid_back = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_front_thumb)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_front_thumb)) {
                                $civilid_front_thumb = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_front_thumb;
                            } else {
                                $civilid_front_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            if ((!empty($civilid_back_thumb)) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . PASS_CIVIL_IMGPATH .  $civilid_back_thumb)) {
                                $civilid_back_thumb = URL_BASE . PASS_CIVIL_IMGPATH . $civilid_back_thumb;
                            } else {
                                $civilid_back_thumb = URL_BASE . "public/images/no_image109.png";
                            }
                            
                            $pass_result['profile_image'] = $profile_image;
                            
                            $pass_result['civilid_front'] = $civilid_front;
                            $pass_result['civilid_back'] = $civilid_back;
                            $pass_result['civilid_front_thumb'] = $civilid_front_thumb;
                            $pass_result['civilid_back_thumb'] = $civilid_back_thumb;
                            $pass_result['vip_user'] = $vip_user;
                        }
                        //$passengers_trips['pending_bookings'] = array_merge($pending_bookings,$pending_bookings_zero);
                        $passengers_trips    = $past_bookings;
                        if (count($passengers_trips) > 0) {

                            $current_trip_id = $api->passenger_current_trip($array['id']);
                            //$message = $passengers_current;
                            $message = [
                                "message" => __('success'),
                                "detail" => $passengers_trips,
                                "current_trip_id" => isset($current_trip_id['_id'])?$current_trip_id['_id']:'',
                                "passenger_details"=>$pass_result,
                                "status" => 1
                            ];
                        } else {
                             $current_trip_id = $api->passenger_current_trip($array['id']);
                            $message = [
                                "message" => __('no_data'),
                                "current_trip_id" => isset($current_trip_id['_id'])?$current_trip_id['_id']:'',
                                "detail"=>[],
                                "passenger_details"=>$pass_result,
                                "status" => 1
                            ];
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -1
                        ];
                    }
                } else {
                    $message = [
                        "message" => __('invalid_user'),
                        "status" => -1
                    ];
                }
                $message['current_time'] = $this->current_datetime;

                echo json_encode($message);
                break;

                case 'passenger_wallet_history':
                //Current Journey after driver confirmation //TN1013619352
                $array = $mobiledata;
                
                if ($array['id'] != null) {
                    $validator = $this->coming_cancel($array);
                    if ($validator->check()) {
                        $userid       = $array['id'];
                        $start        = $array['start'];
                        $limit        = $array['limit'];
                        $device_type  = $array['device_type'];
                        $check_result = $api->check_passenger_companydetails($array['id'], $default_companyid);
                        if ($check_result == 0) {
                            $message = [
                                "message" => __('invalid_user'),
                                "status" => -1
                            ];
                            echo json_encode($message);
                            exit;
                        }
                        if ($device_type == 1)
                            $pagination = 1;
                        else
                            $pagination = 0;
                        $passengers_trips = [];
                        
                        $passenger_wallet_logs    = $api->passenger_wallet_logs($array['id'],$start, $limit);
                        foreach ($passenger_wallet_logs as $key => $val) {

                            switch($val['recharge_type'])
                            {
                                case 1:
                                $recharge_type = __('manual_pay'); 
                                break;
                                case 2:
                                $recharge_type = __('credit_pay');
                                break;
                                case 3:
                                $recharge_type = __('pending_pay');
                                break;
                                case 4:
                                $recharge_type = __('trip_payment');
                                break;
                                case 5:
                                $recharge_type = __('trip_pending_payment');
                                break; 
                                case 6:
                                $recharge_type = __('pending_repayment');
                                break;
                                case 7:
                                $recharge_type = __('dispatcher_alteration');
                                break;
                                case 8:
                                $recharge_type = __('knet_payment');
                                break;
                                default:
                                $recharge_type = __('manual_pay'); 
                                break;
                            }

                            $passenger_wallet_logs[$key]['recharge_type']=$recharge_type;
                            $passenger_wallet_logs[$key]['created_date']=Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['created_date']);
                            $passenger_wallet_logs[$key]['paid']=(int)1;
                            $passenger_wallet_logs[$key]['paid_status']=__('success');
                            if($val['created_by'] == 1)
                            {
                            $passenger_wallet_logs[$key]['created_by']=__('admin_label');
                            }
                            else
                            {
                            $passenger_wallet_logs[$key]['created_by']=__('yourself_label');
                            }
                           
                        };
                        $passengers_trips    = $passenger_wallet_logs;
                        $wallet_amount    = $api->get_passenger_data($array['id'],'wallet_amount');

                        $wallet_detail    = $api->get_passenger_data($array['id'],'last_wallet_update');

                        $last_wallet_update =(isset($wallet_detail->sec) ? date('Y-m-d', $wallet_detail->sec) : (is_object($wallet_detail) && method_exists($wallet_detail, 'toDateTime') ? $wallet_detail->toDateTime()->format('Y-m-d') : ''));
                       $wallet_amt_list =  WALLET_AMOUNT_LIST;
                        if (count($passengers_trips) > 0) {
                            //$message = $passengers_current;
                            $message = [
                                "message" => __('success'),
                                "detail" => $passengers_trips,
                                "wallet_amount" => $wallet_amount,
                                "last_wallet_update" => $last_wallet_update,
                                "wallet_amount_list" => json_decode($wallet_amt_list),
                                "status" => 1
                            ];
                        } else {
                            $message = [
                                "message" => __('no_data'),
                                "wallet_amount" => $wallet_amount,
                                "last_wallet_update" => $last_wallet_update,
                                "wallet_amount_list" => json_decode($wallet_amt_list),
                                "status" => 0
                            ];
                        }
                    } else {
                        $errors  = $validator->errors('errors');
                        $message = [
                            "message" => __('validation_error'),
                            "detail" => $errors,
                            "status" => -1
                        ];
                    }
                } else {
                    $message = [
                        "message" => __('invalid_user'),
                        "status" => -1
                    ];
                }
                echo json_encode($message);
                break;


                case 'check_confirmed_status':
                    $array = $mobiledata;
                    if ($array['passenger_tripid'] != null) {
                        $passenger_tripid      = $array["passenger_tripid"];
                        $get_passenger_log_det = $api->check_confirmed_status($passenger_tripid);
                        if (count($get_passenger_log_det) > 0) {
                            $travel_status = $get_passenger_log_det['travel_status'];
                            $confirm_flag = isset($get_passenger_log_det['confirm_flag'])?$get_passenger_log_det['confirm_flag']:0;
                            $book_type = $get_passenger_log_det['book_type'];
                            $driver_reply = isset($get_passenger_log_det['driver_reply'])?$get_passenger_log_det['driver_reply']:'';

                            if($travel_status == 0 && $confirm_flag == 1 && $book_type != __('book_later')){
                                $message = [
                                    "message" => __("trip_confirmed_dispatcher"),
                                    "status" => 1
                                ]; 
                            }
                            elseif($travel_status == 2 || $travel_status == 3 || $travel_status == 5 || ($travel_status == 9 && $driver_reply == 'A'))
                            {
                                 $message = [
                                    "message" => __("trip_confirmed_driver"),
                                    "status" => 2
                                ]; 
                            }
                            elseif($travel_status == 6 || $travel_status == 8 ||($travel_status == 9 && $driver_reply == 'C'))
                            {
                                 $message = [
                                    "message" => __("trip_cancelled"),
                                    "status" => 3
                                ]; 
                            }
                            else
                            {
                                $message = [
                                    "message" => __("trip_yet_confirmed_dispatcher"),
                                    "status" => 0
                                ];  
                            }
                            
                        } else {
                            $message = [
                                "message" => __('invalid_trip'),
                                "status" => -1
                            ];
                        }
                    } else {
                        $message = [
                            "message" => __('try_again'),
                            "status" => 0
                        ];
                    }
                    echo json_encode($message);
                unset(MangoDB::$instances['default']);
                    break;

                case 'wallet_add_money':
                $array = $mobiledata;
                $validator = $this->wallet_add_validation($array);
                if($validator->check())
                {
                    $id = $array['passenger_id'];
                    if($api->validate_passenger($id) > 0)
                    {
                        $hespay = $this->hasabe_pay_wallet($array);

                        if($hespay->status == 'success') {
                            $token      = $hespay->data->token;
                            $paymenturl = $hespay->data->paymenturl;
                            $details = [];
                            $details['token']=$token;
                            $details['paymenturl']=$paymenturl;
                            $message = ["message" => __('success'),"detail"=>$details,"status"=>1];
                        }
                        else
                        {
                            $message = ["message" => __('payment_failed_try_again'),"status"=>-1];
                        }
                    }
                    else
                    {
                        $message = ["message" => __('invalid_passenger'),"status"=>-1];
                    }
                }
                else
                {
                    $validation_error = $validator->errors('errors');
                    $message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-5];
                    echo json_encode($message);
                    exit;
                }
                echo json_encode($message);
                unset(MangoDB::$instances['default']);
                break;
                exit;



            }
            exit;
        } else {
            $message = [
                "message" => __('invalid_company'),
                "status" => -8
            ];
            //"url_explode"=>$find_url,"count"=>count($apikey_result),"encrypt valu"=>$company_api_encrypt,"decrypt valu"=>$company_api_decrypt,"descrypt_split"=>$company_split,"Company APK"=>$company_api_key);
            echo json_encode($message);
            exit;
        }
    }
    //Passenger Recent Place Validation
    private function passenger_place_validation($array)
    {
            return Validation::factory($array)
                            ->rule('passenger_id','not_empty')
                            ->rule('place_type','not_empty');
    }
    
    public function driver_login_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')->rule('password', 'not_empty')->rule('driver_code', 'not_empty');        
    }


    public function wallet_add_validation($array)
    {
        return Validation::factory($array)->rule('amt', 'not_empty')->rule('passenger_id', 'not_empty');       
    }
    
    
    
    
    
    
    
}
