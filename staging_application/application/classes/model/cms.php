<?php
defined('SYSPATH') OR die('No Direct Script Access');
Class Model_Cms extends Model
{
    public function __construct()
    {
        //MongoDB Instance
        $this->mongo_db = MangoDB::instance('default');
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
    }
    /*Get the CMS Content*/
    public function getcmscontent($content, $default_companyid = "")
    {
        $default_companyid = COMPANY_CID;
        //echo $content.'=='.$default_companyid;//exit;
        if ($default_companyid != 1) {
            $cms_result = $this->mongo_db->find_one(MDB_COMPANY, array(
                'cid' => (int) $default_companyid,
                'cms.type' => 1,
                'cms.status' => 1,
                'cms.page_url' => $content
            ), array(
                'cms.page_url' => 1,
                'cms.content' => 1,
                'cms.menu_name' => 1
            ));
            $res        = array();
            //echo '<pre>';
            //print_r($cms_result);
            if (count($cms_result) > 0) {
                foreach ($cms_result['cms'] as $key => $val) {
                    if ($val['page_url'] == $content) {
                        $res[0]['page_url'] = $val['page_url'];
                        $res[0]['content']  = $val['content'];
                        $res[0]['menu']     = $val['menu_name'];
                    }
                }
            }
        } else {
			$array = array(
                'content',
				'arabic_content',
                'meta_keyword',
                'meta_title',
                'meta_description',
                'menu',
				'arabic_menu_name'
            );
			//echo $content;exit;
            $cms_result = $this->mongo_db->find_one(MDB_CMS, array(
                'type' => "1",
                'status' => (int)1,
                'menu_link' => $content
            ), $array);
            $res        = $cms_result;
			/*echo '<pre>',print_r($cms_result);exit;
            foreach ($cms_result as $keys => $values) {
                $res[0][$keys] = $values;
            }*/
        }
       
        return $res;
    }
    /*Get the CMS Content*/
    public function getcompanycontent($pagename, $cid)
    {
        $contentcom = $this->mongo_db->find_one(MDB_COMPANY, array(
            'cid' => $cid,
            'cms.page_url' => $pagename,
            'cms.status' => 1
        ));
        $res        = array();
        foreach ($contentcom as $keys => $values) {
            $res[0][$keys] = $values;
        }
        return $res;
    }
    public function get_company_addr($cid)
    {
        $res = array();
        if ($cid != 1) {
            $contentcom = $this->mongo_db->find_one(MDB_COMPANY, array(
                'cid' => $cid
            ), array(
                'company_address'
            ));
            foreach ($contentcom as $keys => $values) {
                $res[0][$keys] = $values;
            }
        }
        return $res;
    }

    public function get_model_list(){

        $arguments = array(array('$match'=>array('model_status'=> 'A')),
                               array('$project'=>array(
                                    'model_id' => '$_id',
                                    'model_name' => '$model_name',
                                    'model_name_ar' => '$model_name_ar',
                                    'category_name' => '$category_name',
                                    'model_size' => '$model_size',
                                    'max_luggage' => '$max_luggage',
                                    'model_image' => '$model_image',
                                    'model_image_unfocus' => '$model_image_unfocus',
                                    'iconic_image' => '$iconic_image',
                                    'model_image_thumb' => '$model_image_thumb',
                                    'model_image_unfocus_thumb' => '$model_image_unfocus_thumb',
                                    'iconic_image_thumb' => '$iconic_image_thumb',
                                    'base_fare' => '$minutes_fare',
                                    'min_fare' => '$base_fare',
                                    'base_mins' => '$time',
                                    'waiting_cost_per_hour' => '$waiting_time',
                                    'waiting_free' => '$waiting_free',
                                    'base_fare_data' => '$base_fare',
                                    'min_fare_data' => '$min_fare',
                                    'min_km' => '$min_km',
                                    //'below_above_km' => '$below_above_km',
                                    'below_km' => '$below_km',
                                    'above_km' => '$above_km',
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
                                    'model_fare_image'=>'$model_fare_image',
                                    'minutes_fare'=>'$minutes_fare',
                                    'website_model_image'=>array('$ifNull'=>array('$website_model_image','')),
                                    'category_name'=>'$category_name',
                                    'airport_pickup_fare'=>array('$ifNull'=>array('$airport_pickup_fare','')),
                                    'airport_drop_fare'=>array('$ifNull'=>array('$airport_drop_fare','')),

                               )),
                                array(
                                    '$sort' => array( 
                                        'priority' => 1
                                    ),
                                ),                              
                            );   
                           // echo "<pre>";print_r($arguments);exit();         
            $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
            return (!empty($result['result'])) ? $result['result']: array();

    }

    public function get_jobs_list(){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";

        if($lang=='ar'){
            $title = '$title_ar';
            $description = '$description_ar';
        }else{
            $title = '$title';
            $description = '$description';
        }
        $arguments = array(array('$match'=>array('status'=> 'A')),
                               array('$project'=>array(
                                    'id' => '$_id',
                                    'title' => $title,                                    
                                    'description'=>$description,
                                )),
                                array(
                                    '$sort' => array( 
                                        '_id' => -1
                                    ),
                                ),                              
                            ); 

        $result = $this->mongo_db->aggregate(MDB_CARRERS_LIST,$arguments);

        //echo "<pre>";print_r($result);exit();
        return (!empty($result['result'])) ? $result['result']: array();
    }


    public function validate_resume_data($arr,$files_value_array){

        //print_r($files_value_array);exit;

        return Validation::factory($arr)->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', array(
            ':value',
            '50'
        ))->rule('name', 'not_empty')->rule('phone', 'not_empty')->rule('resume_file', 'Upload::not_empty', array(
            $files_value_array['resume_file']
        ))->rule('resume_file', 'Upload::type', array(
            $files_value_array['resume_file'],
            array(
                'jpg',
                'jpeg',
                'png',
                'gif'
            )
        ))->rule('resume_file', 'Upload::size', array(
            $files_value_array['resume_file'],
            '2M'
        ));

    }

     public function add_resumes($arr,$filename){

        $rs = $this->mongo_db->find(MDB_RESUMES,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
        $res = iterator_to_array($rs);
        reset($res);
        $first_key = key($res);
        $inc_id = $taxi_id = $first_key+1;       
      

        $career_data = array('_id' => (int)$inc_id,'job_id'=>(int)$arr['job_id'],'name'=>$arr['name'],'email'=>$arr['email'],'phone'=>$arr['phone'],'resume_file'=>$filename,'created_date' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000) );

        $result = $this->mongo_db->insert(MDB_RESUMES,$career_data);

        return $result;
    }

    public function get_home_page_drivers(){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
        if($lang=='ar'){           
            $description = array('$ifNull'=>array('$driver_description_arabic',''));
        }else{           
            $description = array('$ifNull'=>array('$driver_description',''));
        }

        $arguments = array(
            array('$match'  => array('website_show' => 1, 'user_type' => 'D')),
            array(
                '$project' => array(
                    'id' => '$_id',
                    'name'=>'$name',
                    'facebook_account' => array('$ifNull'=>array('$facebook_account','')),
                    'instagram_account' => array('$ifNull'=>array('$instagram_account','')),
                    'twitter_account' => array('$ifNull'=>array('$twitter_account','')),
                    'driver_description' => $description,                   
                    'website_show' => array('$ifNull'=>array('$website_show','')),
                    'web_image_name' => array('$ifNull'=>array('$web_image_name','')),
                )
            ),            
            array(
                '$sort' => array( 
                    'id' => 1
                ),
            ),
           array('$skip'   => 0),
           array('$limit'  => 3),
        );
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result']))?$result['result']:array();
    }

    public function get_drivers_list($from,$limit){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
        if($lang=='ar'){           
            $description = array('$ifNull'=>array('$driver_description_arabic',''));
        }else{           
            $description = array('$ifNull'=>array('$driver_description',''));
        }

        $arguments = array(
            array('$match'  => array('user_type' => 'D')),
            array(
                '$project' => array(
                    'id' => '$_id',
                    'name'=>'$name',
                    'facebook_account' => array('$ifNull'=>array('$facebook_account','')),
                    'instagram_account' => array('$ifNull'=>array('$instagram_account','')),
                    'twitter_account' => array('$ifNull'=>array('$twitter_account','')),
                    'driver_description' => $description,                   
                    'website_show' => array('$ifNull'=>array('$website_show','')),
                    'web_image_name' => array('$ifNull'=>array('$web_image_name','')),
                )
            ),            
            array(
                '$sort' => array( 
                    '_id' => -1
                ),
            ),
            array('$skip'   => $from),
            array('$limit'  => $limit),
        );
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result']))?$result['result']:array();
    }

    public function get_drivers_count(){

        $arguments = array(
            array('$match'  => array('user_type' => 'D')),
            array(
                '$project' => array(
                    'id' => '$_id')
                ));
        $result = $this->mongo_db->aggregate(MDB_PEOPLE,$arguments);

        return count($result['result']);

    }

    public function get_testimonials(){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
        if($lang=='ar'){           
            $description = array('$ifNull'=>array('$description_arabic',''));
        }else{           
            $description = array('$ifNull'=>array('$description',''));
        }

        $arguments = array(
            array('$match'  => array('status' => 1)),
            array(
                '$project' => array(
                    'id' => '$_id',
                    'name'=>'$name',
                    'skype' => array('$ifNull'=>array('$skype','')),
                    'image' => array('$ifNull'=>array('$image','')),                   
                    'description' => $description,             
                )
            ),            
            array(
                '$sort' => array( 
                    'id' => -1
                ),
            ),
           array('$skip'   => 0),
           array('$limit'  => 10),
        );
        $result = $this->mongo_db->aggregate(MDB_TESTIMONIAL,$arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result']))?$result['result']:array();
    }


    public function get_website_page_content($type=''){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";   
        
        $project = array();

        if($type=='home_page'){

            if($lang=='ar'){  

                $project = array('vehicle_type'=>'$home_page.vehicle_type_arabic','vehicle_description'=>'$home_page.vehicle_description_arabic','meet_driver'=>'$home_page.meet_driver_arabic','meet_driver_description'=>'$home_page.meet_driver_description_arabic','website_certificate'=>'$home_page.website_certificate_arabic','website_certificate_description'=>'$home_page.website_certificate_description_arabic','banner_title'=>'$home_page.banner_title_arabic','banner_description'=>'$home_page.banner_description_arabic','pick_at_title'=>'$home_page.pick_at_title_arabic','pick_at_description'=>'$home_page.pick_at_description_arabic','card_payment'=>'$home_page.card_payment_arabic','card_description'=>'$home_page.card_description_arabic','secure_title'=>'$home_page.secure_title_arabic','secure_description'=>'$home_page.secure_description_arabic');         
               
            }else{

                $project = array('vehicle_type'=>'$home_page.vehicle_type','vehicle_description'=>'$home_page.vehicle_description','meet_driver'=>'$home_page.meet_driver','meet_driver_description'=>'$home_page.meet_driver_description','website_certificate'=>'$home_page.website_certificate','website_certificate_description'=>'$home_page.website_certificate_description','banner_title'=>'$home_page.banner_title','banner_description'=>'$home_page.banner_description','pick_at_title'=>'$home_page.pick_at_title','pick_at_description'=>'$home_page.pick_at_description','card_payment'=>'$home_page.card_payment','card_description'=>'$home_page.card_description','secure_title'=>'$home_page.secure_title','secure_description'=>'$home_page.secure_description');            
                
            }
        }else if($type=='features_page'){
             
            if($lang=='ar'){           
               
               $project = array('banner_content'=>'$features_page.banner_content_arabic','feature_title'=>'$features_page.feature_title_arabic','feature_description'=>'$features_page.feature_description_arabic','gps'=>'$features_page.gps_arabic','gps_description'=>'$features_page.gps_description_arabic','fare_quote'=>'$features_page.fare_quote_arabic','fare_quote_description'=>'$features_page.fare_quote_description_arabic','social_share'=>'$features_page.social_share_arabic','social_share_description'=>'$features_page.social_share_description_arabic','rate_your_driver'=>'$features_page.rate_your_driver_arabic','rate_your_driver_description'=>'$features_page.rate_your_driver_description_arabic','reliability'=>'$features_page.reliability_arabic','reliability_description'=>'$features_page.reliability_description_arabic','schedule_ride'=>'$features_page.schedule_ride_arabic','schedule_ride_decription'=>'$features_page.schedule_ride_decription_arabic');
            }else{

                 $project = array('banner_content'=>'$features_page.banner_content','feature_title'=>'$features_page.feature_title','feature_description'=>'$features_page.feature_description','gps'=>'$features_page.gps','gps_description'=>'$features_page.gps_description','fare_quote'=>'$features_page.fare_quote','fare_quote_description'=>'$features_page.fare_quote_description','social_share'=>'$features_page.social_share','social_share_description'=>'$features_page.social_share_description','rate_your_driver'=>'$features_page.rate_your_driver','rate_your_driver_description'=>'$features_page.rate_your_driver_description','reliability'=>'$features_page.reliability','reliability_description'=>'$features_page.reliability_description','schedule_ride'=>'$features_page.schedule_ride','schedule_ride_decription'=>'$features_page.schedule_ride_decription');           
                
            }
        }
        else if($type=='how_its_work_page'){            

            if($lang=='ar'){

                $project = array('banner_content'=>'$how_its_work_page.banner_content_arabic','how_its_work'=>'$how_its_work_page.how_its_work_arabic','how_its_work_description'=>'$how_its_work_page.how_its_work_description_arabic','booking'=>'$how_its_work_page.booking_arabic','booking_description'=>'$how_its_work_page.booking_description_arabic','select_car'=>'$how_its_work_page.select_car_arabic','select_car_description'=>'$how_its_work_page.select_car_description_arabic','airport_pickup'=>'$how_its_work_page.airport_pickup_arabic','airport_pickup_description'=>'$how_its_work_page.airport_pickup_description_arabic','fare'=>'$how_its_work_page.fare_arabic','fare_description'=>'$how_its_work_page.fare_description_arabic','ride_confirm'=>'$how_its_work_page.ride_confirm_arabic','ride_confirm_description'=>'$how_its_work_page.ride_confirm_description_arabic','ride_complete'=>'$how_its_work_page.ride_complete_arabic','ride_complete_description'=>'$how_its_work_page.ride_complete_description_arabic','rate_driver'=>'$how_its_work_page.rate_driver_arabic','rate_driver_description'=>'$how_its_work_page.rate_driver_description_arabic');           
               
            }else{

                $project = array('banner_content'=>'$how_its_work_page.banner_content','how_its_work'=>'$how_its_work_page.how_its_work','how_its_work_description'=>'$how_its_work_page.how_its_work_description','booking'=>'$how_its_work_page.booking','booking_description'=>'$how_its_work_page.booking_description','select_car'=>'$how_its_work_page.select_car','select_car_description'=>'$how_its_work_page.select_car_description','airport_pickup'=>'$how_its_work_page.airport_pickup','airport_pickup_description'=>'$how_its_work_page.airport_pickup_description','fare'=>'$how_its_work_page.fare','fare_description'=>'$how_its_work_page.fare_description','ride_confirm'=>'$how_its_work_page.ride_confirm','ride_confirm_description'=>'$how_its_work_page.ride_confirm_description','ride_complete'=>'$how_its_work_page.ride_complete','ride_complete_description'=>'$how_its_work_page.ride_complete_description','rate_driver'=>'$how_its_work_page.rate_driver','rate_driver_description'=>'$how_its_work_page.rate_driver_description');             
                
            }
        }else if($type=='pricing_page'){           

            if($lang=='ar'){ 

                $project = array('banner_content'=>'$pricing_page.banner_content_arabic','pricing'=>'$pricing_page.pricing_arabic','pricing_description'=>'$pricing_page.pricing_description_arabic');          
               
            }else{           
                $project = array('banner_content'=>'$pricing_page.banner_content','pricing'=>'$pricing_page.pricing','pricing_description'=>'$pricing_page.pricing_description');
            }

        }else if($type=='careers_page'){           

            if($lang=='ar'){ 

                $project = array('banner_content'=>'$careers_page.banner_content_arabic','career'=>'$careers_page.career_arabic','career_description'=>'$careers_page.career_description_arabic');          
               
            }else{           
                $project = array('banner_content'=>'$careers_page.banner_content','career'=>'$careers_page.career','career_description'=>'$careers_page.career_description');
            }

        }else if($type=='about_us_page'){           

            if($lang=='ar'){ 

                $project = array('content'=>'$about_us_page.content_arabic');          
               
            }else{           
                $project = array('content'=>'$about_us_page.content');
            }

        }else if($type=='terms_and_conditions_page'){           

            if($lang=='ar'){ 

                $project = array('content'=>'$terms_and_conditions_page.content_arabic');          
               
            }else{           
                $project = array('content'=>'$terms_and_conditions_page.content');
            }

        }else if($type=='booking_confirm_page'){

            if($lang=='ar'){ 

                $project = array('confirm_title'=>'$confirm_page.confirm_title_arabic','confirm_description'=>'$confirm_page.confirm_description_arabic','confirm_contact_us'=>'$confirm_page.confirm_contact_us_arabic');          
               
            }else{           
                $project = array('confirm_title'=>'$confirm_page.confirm_title','confirm_description'=>'$confirm_page.confirm_description','confirm_contact_us'=>'$confirm_page.confirm_contact_us');
            }

        }

        $arguments = array(
            array('$match'  => array('_id' => 1)),
            array(
                '$project' => $project
            )
        );
        $result = $this->mongo_db->aggregate(MDB_WEBSITE_CONTENT,$arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result']))?$result['result']:array();
    }

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
            //to avoid injection
            ->rule('message', 'not_empty');
    }

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
            'sent_date' =>  new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)
            
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


    public function get_website_certificate(){

        $lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
        if($lang=='ar'){           
            $certificate_name = array('$ifNull'=>array('$certificate_name_arabic',''));
            $certificate_description = array('$ifNull'=>array('$certificate_description_arabic',''));            
        }else{           
            $certificate_name = array('$ifNull'=>array('$certificate_name',''));
            $certificate_description = array('$ifNull'=>array('$certificate_description',''));            
        }


        $field_arguments = array(      
                                    array('$project' => array('certificate_name'=>$certificate_name,'certificate_description'=>$certificate_description,'image'=>'$image','status'=>'$status') ),
                                    array('$match' => array('status'=> 1) ),                              
                                    array('$limit' => 3)
                            );          

        $result    = $this->mongo_db->aggregate(MDB_WEBSITE_CERTIFICATES, $field_arguments);
                // echo "<pre>";
                //print_r($result);exit;
        return (!empty($result['result'])) ? $result['result'] : array();
    }
    
    public function get_model_detail($id){

        $arguments = array(array('$match'=>array('_id'=>(int)$id)),
                               array('$project'=>array(
                                    'model_id' => '$_id',
                                    'model_name' => '$model_name',
                                    'model_name_ar' => '$model_name_ar',
                                    'category_name' => '$category_name',
                                    'model_size' => '$model_size',
                                    'max_luggage' => '$max_luggage',
                                    'model_image' => '$model_image',
                                    'model_image_unfocus' => '$model_image_unfocus',
                                    'iconic_image' => '$iconic_image',
                                    'model_image_thumb' => '$model_image_thumb',
                                    'model_image_unfocus_thumb' => '$model_image_unfocus_thumb',
                                    'iconic_image_thumb' => '$iconic_image_thumb',
                                    'base_fare' => '$minutes_fare',
                                    'min_fare' => '$base_fare',
                                    'base_mins' => '$time',
                                    'waiting_cost_per_hour' => '$waiting_time',
                                    'waiting_free' => '$waiting_free',
                                    'base_fare_data' => '$base_fare',
                                    'min_fare_data' => '$min_fare',
                                    'min_km' => '$min_km',
                                    //'below_above_km' => '$below_above_km',
                                    'below_km' => '$below_km',
                                    'above_km' => '$above_km',
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
                                    'model_fare_image'=>'$model_fare_image',
                                    'minutes_fare'=>'$minutes_fare',
                                    'website_model_image'=>array('$ifNull'=>array('$website_model_image','')),
                                    'category_name'=>'$category_name',
                                    'airport_pickup_fare'=>array('$ifNull'=>array('$airport_pickup_fare','')),
                                    'airport_drop_fare'=>array('$ifNull'=>array('$airport_drop_fare','')),

                               )),
                                array(
                                    '$sort' => array( 
                                        'priority' => 1
                                    ),
                                ),                              
                            );   
                           // echo "<pre>";print_r($arguments);exit();         
            $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
            return (!empty($result['result'])) ? $result['result']: array();

    }

    public function validate_save_booking_request($arr = "")
    {   $arr['pickup_date'] = $arr['p_date'];
        $arr['pickup_time'] = $arr['p_time'];

        $pickup_time = date("H:i:s", strtotime($arr['p_time']));
        $arr['pickup_date_time'] = $arr['p_date'].' '.$pickup_time;

       return Validation::factory($arr)
                ->rule('car_model', 'not_empty')
                //->rule('firstname', 'min_length', array(':value', '3'))
                //->rule('firstname', 'max_length', array(':value', '32'))
                //->rule('email', 'not_empty')
                ->rule('email', 'email')->rule('email', 'max_length', array(
                    ':value',
                    '100'
                ))
                //->rule('country_code', 'not_empty')
                ->rule('phone', 'not_empty')
                ->rule('pickup', 'not_empty')
                ->rule('pickup_lat', 'not_empty')
                ->rule('pickup_lng', 'not_empty')
                ->rule('drop', 'not_empty')
                ->rule('drop_lat', 'not_empty')
                ->rule('drop_lng', 'not_empty')
                ->rule('baggage', 'numeric')
                ->rule('passenger', 'numeric')
                ->rule('pickup_date', 'not_empty')
                ->rule('pickup_date_time', 'Model_Cms::check_date_valid', array(':value'))
                ->rule('pickup_time', 'not_empty');
    }

    public function save_booking_request($post=[]){
		$company_id  = 1;        
        $this->commonmodel = Model::factory('commonmodel');
        $this->company_current_time = $this->commonmodel->getcompany_all_currenttimestamp($company_id);

        $firstname        = isset($post['firstname']) ? Html::chars($post['firstname']) :'';
        $email        = isset($post['email']) ? Html::chars($post['email']) :'';
        $pass_logid       = '';
        $recurrent_id     = '';
        $send_mail        = 'N';
        $insert_booking   = 'N';
        $passenger_id     = '';//$post['passenger_id'];
        
        $search_city  = 0;
        
        $current_datetime        = $this->company_current_time;
        $current_datesplit       = explode(' ', $current_datetime);

        $pickup_time = date("H:i:s", strtotime($post['p_time']));
        $post['p_date'] = $post['p_date'].' '.$pickup_time;
        $pickup_date             =  convert_timezone($post['p_date'],TIMEZONE);        

        if ($pickup_date == '' || $pickup_date == 'Date') {
            $pickup_date = $current_datesplit[0];
        }
        if ($pickup_time == '' || $pickup_time == 'Now') {
            $pickup_time = $current_datesplit[1];
        }
        //$pickup_datetime = $pickup_date.' '.$pickup_time;
        $pickup_datetime = $pickup_date;        
        if (isset($post['dispatch'])) {
            $booktype = 1;
        } else {
            $booktype = 2;
        }

        $email = isset($post['email'])?$post['email']:'';
        $password        = text::random($type = 'alnum', $length = 6);
        $random_key      = text::random($type = 'alnum', $length = 10);
        //$post['country_code'] = '+965';
		
        $pass_condition = array('phone'=>$post['phone'],'country_code'=>$post['country_code']); //(!empty($post['email'])) ? array('email'=>$post['email'],'phone'=>$post['phone']) : array('phone'=>$post['phone']);
        $passenger_exist = $this->mongo_db->find_one(MDB_PASSENGERS,$pass_condition,array('_id'));
        
        if (count($passenger_exist) == 0) {
            //Get the last object id
            $pass_rs = $this->mongo_db->find(MDB_PASSENGERS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
            $pass_res = iterator_to_array($pass_rs);
            reset($pass_res);
            $pass_first_key = key($pass_res);
            $passengers_id = $pass_first_key+1;
            $pass_data = array('_id' => (int)$passengers_id,
                'name' => $firstname,
                'parent_id' => (int)0,
                'account_type' => '',                    
                'salutation' => '',
                'lastname' => '',
                'email' => $email,
                'password' => md5($password),
                'org_password' => $password,
                'profile_image' => '',
                'otp' => '',
                'country_code' => $post['country_code'],
                'address' => '',
                'phone' => $post['phone'],
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
                'expdateyear' => '' ,
                'cardholder_name' => '',
                'civilid' => '',
                'civilid_front' => '',
                'civilid_back' => '',
                'civilid_front_thumb' => '',
                'civilid_back_thumb' => '',     
                'fb_user_id' => '',
                'fb_access_token' => '',    
                'created_date' => $current_datetime,
                'activation_key' => $random_key,
                'user_status' => ACTIVE,
                'passenger_cid' => (int)$company_id,
                'activation_status' => 1,
                'login_from' => 0,          
                'updated_date' => $current_datetime,
                'last_login' => '',
                'login_status' => 'N',
                'referred_by' => 0,
                'skip_credit_card' => 0,
                'loc' => array(),
                'creditcard_details' => array(),                        
                'child_exist' => 0,
                'allow_creditcard' => (int)0,
                'trip_alert' => (int)0,
                'profile_thumb_image' =>'',
                'pay_by' => (int)3,
                'lateral_start_date' => '',
                'lateral_end_date' => '',               
            );
            $pass_result = $this->mongo_db->insert(MDB_PASSENGERS,$pass_data);
            $send_mail        = 'S';
            $passenger_id     = $passengers_id;
        } else {
            $passenger_id           = $passenger_exist['_id'];
            /*$name                   = explode('- (', $firstname);
            $firstname              = isset($name[0]) ? $name[0] : $firstname;
            $update_passenger_array = array(
                'name' => $firstname,
                'email' => $post['email'],
                'country_code' => $post['country_code']
            );
            $updateresult = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>(int)$passenger_id),array('$set'=>$update_passenger_array),array('upsert'=>true)); */
        }        
        
        $promocode = isset($post['promo_code'])?$post['promo_code']:'';
        /** if single booking **/
        
        $booking_key  = commonfunction::randomkey_generator();
        if(isset($post['booking_type']) && $post['booking_type']==1){
            $airport_type = 1;
        }else{
            $airport_type = 0;
        }
        
        //Get the last object id
        // $rs = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
        // $res = iterator_to_array($rs);
        // reset($res);
        // $first_key = key($res);
        // $log_id = $first_key+1;

        $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,array('_id' => 1),array('last_logid'));
        $log_id =  $last_logidresult['last_logid']+1;
        
        $insert_array   = array('_id' => (int)$log_id,
            'booking_key' => $booking_key,
            'passengers_id' => (int)$passenger_id,
            'company_id' => (int)$company_id,
            'driver_id' => 0,//empty insert purpose
            'taxi_id' => 0,//empty insert purpose
            'msg_status' => "",
            'current_location' => $post['pickup'],
            'pickup_latitude' => $post['pickup_lat'],
            'pickup_longitude' => $post['pickup_lng'],
            'drop_location' => $post['drop'],
            'drop_latitude' => $post['drop_lat'],
            'drop_longitude' => $post['drop_lng'],
            'pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
            'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
            'no_passengers' => $post['passenger'],
            'approx_distance' => '',
            'approx_duration' => '',
            'approx_fare' => '',
            'search_city' => (int)0,
            'notes_driver' => '',
            'faretype' => (int)0,
            'fixedprice' => (float)0,
            'bookingtype' => (int)$booktype,
            'luggage' => (int)$post['baggage'],
            'max_luggage' => (int)$post['baggage'],
            'payment_type' => 1,
            'promocode' => $promocode,
            "pickupdrop" => "",
            'airport_pickup' => (int)$airport_type,
            'airport_flight_number' => (isset($post['flight_no']) ? $post['flight_no'] : null),
            'airport_flight_time' => null,
            'airport_notes' => null,
            "payment_chosen_flag" => "0",
            'bookby' => 2,
            'rating' => 0,
            'drop_time' => null,
            'waitingtime' => null,
            'operator_id' => 1,
            'travel_status' => 0,
            'taxi_modelid' => (int)$post['car_model'],
            'recurrent_type' => 0,
            'company_tax' => 0,
            'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000),
            'logs' => array(),
            "book_type" => "Book Later",
            "book_tag" => "N",
            "moved" => 0,
            "createdby_username"=>'',
            "passenger_admin_notes"=>'',
            "airport_type"=> (int)$airport_type,
            "web_booking"=>1,

        );
        $today_result   = $this->mongo_db->insert(PASSENGERS_LOG, $insert_array);
        $trip_id        = $log_id;
        $pass_logid     = $log_id;
        $insert_booking = 'S';

        $update_logidquery  = array('last_logid' => (int)$log_id);

        $update_logidresult = $this->mongo_db->update(MDB_SITEINFO, array('_id' => 1), array('$set' => $update_logidquery), array('upsert' => true));


        return $trip_id;
    }

    public static function check_date_valid($value)
    {
        $date = strtotime($value);
        if ($date === false) {
            return false;
        }else{
            return true;
        }        
    }

    /* Sasidharan july 28 2022 */
    public function getPassengerDetails ($phone, $country_code) {
        $filter = array(
            "phone" => $phone,
            "country_code" => $country_code
        );
        $options = array(
            "name" => 1
        );
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,$filter,$options);
        return $result;
    }

}
