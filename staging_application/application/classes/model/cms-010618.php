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
            $cms_result = $this->mongo_db->find_one(MDB_COMPANY, [
                'cid' => (int) $default_companyid,
                'cms.type' => 1,
                'cms.status' => 1,
                'cms.page_url' => $content
            ], [
                'cms.page_url' => 1,
                'cms.content' => 1,
                'cms.menu_name' => 1
            ]);
            $res        = [];
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
			$array = [
                'content',
				'arabic_content',
                'meta_keyword',
                'meta_title',
                'meta_description',
                'menu',
				'arabic_menu_name'
            ];
			//echo $content;exit;
            $cms_result = $this->mongo_db->find_one(MDB_CMS, [
                'type' => "1",
                'status' => (int)1,
                'menu_link' => $content
            ], $array);
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
        $contentcom = $this->mongo_db->find_one(MDB_COMPANY, [
            'cid' => $cid,
            'cms.page_url' => $pagename,
            'cms.status' => 1
        ]);
        $res        = [];
        foreach ($contentcom as $keys => $values) {
            $res[0][$keys] = $values;
        }
        return $res;
    }
    public function get_company_addr($cid)
    {
        $res = [];
        if ($cid != 1) {
            $contentcom = $this->mongo_db->find_one(MDB_COMPANY, [
                'cid' => $cid
            ], [
                'company_address'
            ]);
            foreach ($contentcom as $keys => $values) {
                $res[0][$keys] = $values;
            }
        }
        return $res;
    }

    public function get_model_list(){

        $arguments = [['$match'=>['model_status'=> 'A']],
                               ['$project'=>[
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
                                    'model_fare_image'=>'$model_fare_image',
                                    'minutes_fare'=>'$minutes_fare',
                                    'website_model_image'=>['$ifNull'=>['$website_model_image','']],
                                    'category_name'=>'$category_name',

                               ]],
                                [
                                    '$sort' => [ 
                                        'priority' => 1
                                    ],
                                ],                              
                            ];   
                           // echo "<pre>";print_r($arguments);exit();         
            $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
            return (!empty($result['result'])) ? $result['result']: [];

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
        $arguments = [['$match'=>['status'=> 'A']],
                               ['$project'=>[
                                    'id' => '$_id',
                                    'title' => $title,                                    
                                    'description'=>$description,
                                ]],
                                [
                                    '$sort' => [ 
                                        '_id' => -1
                                    ],
                                ],                              
                            ]; 

        $result = $this->mongo_db->aggregate(MDB_CARRERS_LIST,$arguments);

        //echo "<pre>";print_r($result);exit();
        return (!empty($result['result'])) ? $result['result']: [];
    }


    public function validate_resume_data($arr,$files_value_array){

        //print_r($files_value_array);exit;

        return Validation::factory($arr)->rule('email', 'not_empty')->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '50'
        ])->rule('name', 'not_empty')->rule('phone', 'not_empty')->rule('resume_file', 'Upload::not_empty', [
            $files_value_array['resume_file']
        ])->rule('resume_file', 'Upload::type', [
            $files_value_array['resume_file'],
            [
                'jpg',
                'jpeg',
                'png',
                'gif'
            ]
        ])->rule('resume_file', 'Upload::size', [
            $files_value_array['resume_file'],
            '2M'
        ]);

    }

     public function add_resumes($arr,$filename){

        $rs = $this->mongo_db->find(MDB_RESUMES,[],['_id'])->sort(['_id'=>-1])->limit(1);
        $res = iterator_to_array($rs);
        reset($res);
        $first_key = key($res);
        $inc_id = $taxi_id = $first_key+1;       
      

        $career_data = ['_id' => (int)$inc_id,'job_id'=>(int)$arr['job_id'],'name'=>$arr['name'],'email'=>$arr['email'],'phone'=>$arr['phone'],'resume_file'=>$filename,'created_date' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000) ];

        $result = $this->mongo_db->insert(MDB_RESUMES,$career_data);

        return $result;
    }
}
