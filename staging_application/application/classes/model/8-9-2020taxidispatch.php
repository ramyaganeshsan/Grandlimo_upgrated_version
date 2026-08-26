<?php defined('SYSPATH') OR die('No Direct Script Access');
class Model_Taxidispatch extends Model
{
    public function __construct()
    {
        $this->session     = Session::instance();
        $this->usertype    = $this->session->get("user_type");
        $this->userid     =  $this->user_id     = $this->session->get('userid');
        $this->company_id  = $this->session->get('company_id');
        $this->country_id  = $this->session->get('country_id');
        $this->state_id    = $this->session->get('state_id');
        $this->city_id     = $this->session->get('city_id');
        $this->currentdate = Commonfunction::getCurrentTimeStamp();
        $this->commonmodel = Model::factory('commonmodel');
        $this->company_current_time = $this->commonmodel->getcompany_all_currenttimestamp($this->company_id);
        $this->api_model   = Model::factory('mobileapi120');
        $this->customer_google_api = CUS_ANDROID_KEY; 

        //MongoDB Instance
        $this->mongo_db    = MangoDB::instance('default');
    }
    public function getpassenger_Detailinfo_new($data)
    {
        $company_id      = $this->company_id;
        $date_field_name = $data['field_name'];
        $split_value     = explode('-', $date_field_name);
        //MongoDB
        /*if($company_id!=0){
            if ($data['field_value'] == 'firstname') {
                if (isset($split_value[1])) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =array('phone' => $phone_no,'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
                } else {
                    $condition =array('name' => $data['field_name'],'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
                }
            } elseif ($data['field_value'] == 'email') {
                $condition =array('email' => $data['field_name'],'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
            } elseif ($data['field_value'] == 'phone') {
                 $condition =array('phone' => $data['field_name'],'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
            }
            $arguments = array(
                array(
                    '$lookup' => array(
                        'from' => MDB_PASSENGERS_LOGS,
                        'localField' => '_id',
                        'foreignField' => '_id',
                        'as' => 'logs'
                    )
                ),
                array(
                    '$unwind' => '$logs'
                ),
                array(
                    '$match' => $condition
                ),
                array(
                    '$project' => array('_id' => 0,
                        '_id' => '$_id',
                        'name' => '$name',
                        'email' => '$email',
                        'phone' => '$phone',
                        'country_code' => '$country_code',
                    )
                ),
                array('$limit'=>1)
            );
            $result          = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
            //echo "<pre>if";print_r($result['result']); exit;
            return (!empty($result['result']))?$result['result'][0]:0;
        }*/ if($company_id!=0){
            if ($data['field_value'] == 'firstname') {
                if (isset($split_value[1])) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =['phone' => $phone_no,'user_status'=>'A'];//'passenger_cid'=>(int)$company_id
                } else {
                    $condition =['name' => $data['field_name'],'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
                }
            } elseif ($data['field_value'] == 'email') {
                $condition =['email' => $data['field_name'],'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
            } elseif ($data['field_value'] == 'phone') {
                 $condition =['phone' => $data['field_name'],'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
            }
            $results = $this->mongo_db->find_one(MDB_PASSENGERS,$condition,['_id','name','phone','email','country_code']);
            return (!empty($results))?$results:0;
        }else {
            if ($data['field_value'] == 'firstname') {
                if (isset($split_value[1])) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =['phone' => $phone_no,'user_status'=>'A'];
                } else {
                    $condition =['name' => $data['field_name'],'user_status'=>'A'];
                }
            } elseif ($data['field_value'] == 'email') {
                $condition =['email' => $data['field_name'],'user_status'=>'A'];
            } elseif ($data['field_value'] == 'phone') {
                $condition =['phone' => $data['field_name'],'user_status'=>'A'];
            }
            //echo '<pre>';print_r($condition);exit;
            $results = $this->mongo_db->find_one(MDB_PASSENGERS,$condition,['_id','name','phone','email','country_code']);
            //echo "<pre>else";print_r($results);exit;
            return (!empty($results))?$results:0;
        }
    }
    public function getuser_details($like, $type)
    {
        $company_id  = $this->company_id;
 if($company_id!=0){
            if($type==1){
                $split_value = explode('-', urldecode($like));
                if (count($split_value) > 1) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =['phone' => new \MongoDB\BSON\Regex($phone_no, 'i'),'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
                } else {
                    $condition =['name' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
                }
            } else if($type==2){
                $condition =['email' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
            } else if($type==3){
               $condition =['phone' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];//,'passenger_cid'=>(int)$company_id
            }
            $results = $this->mongo_db->find(MDB_PASSENGERS,$condition,['name','phone','email']);
            return (!empty($results))?iterator_to_array($results):[];
        }
        /*if($company_id!=0){
            if($type==1){
                $split_value = explode('-', urldecode($like));
                if (count($split_value) > 1) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =array('phone' => new \MongoDB\BSON\Regex($phone_no, 'i'),'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
                } else {
                    $condition =array('name' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
                }
            } else if($type==2){
                $condition =array('email' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
            } else if($type==3){
               $condition =array('phone' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A',"\$or"=>array(array('passenger_cid'=>(int)$company_id),array('logs.company_id'=>(int)$company_id)));
            }
            $arguments = array(
                array(
                    '$lookup' => array(
                        'from' => MDB_PASSENGERS_LOGS,
                        'localField' => '_id',
                        'foreignField' => '_id',
                        'as' => 'logs'
                    )
                ),
                array(
                    '$unwind' => '$logs'
                ),
                array(
                    '$match' => $condition
                ),
                array(
                    '$project' => array('_id' => 0,
                        'name' => '$name',
                        'email' => '$email',
                        'phone' => '$phone',
                    )
                ),
            );
            $result          = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
            return (!empty($result['result']))?$result['result']:array();
        } */else {
            if($type==1){
                $split_value = explode('-', urldecode($like));
                if (count($split_value) > 1) {
                    $phone_split = substr(trim($split_value[1]), 0, -1);
                    $phone_no    = substr(trim($phone_split), 1);
                    $phone_no    = trim($phone_no);
                    $condition =['phone' => new \MongoDB\BSON\Regex($phone_no, 'i'),'user_status'=>'A'];
                } else {
                    $condition =['name' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];
                }
            } else if($type==2){
                $condition =['email' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];
            } else if($type==3){
               $condition =['phone' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A'];
            }
            $results = $this->mongo_db->find(MDB_PASSENGERS,$condition,['_id','name','phone','email'])->sort(['name'=>1]);
            return (!empty($results))?iterator_to_array($results):[];
        }
    }
    /*************************Dashboard Driver status ***********************************/
    public function driver_status_details( $array )
    {
        $user_createdby = $this->user_id;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        $driver_status = isset( $array[ 'driver_status' ] ) ? $array[ 'driver_status' ] : "";
        $taxi_company  = isset( $array[ 'taxi_company' ] ) ? $array[ 'taxi_company' ] : "";
        $match_query = [];
        $match_query['people.user_type'] = 'D';
        $match_query['people.status'] = 'A';
        if ($usertype == 'C' || $usertype == 'M') {
            if($company_id!="" && $company_id!=0){
                $match_query['people.company_id'] = (int)$company_id;
            }
        } else {
            if ($taxi_company != "" && $taxi_company != 0) {
                $match_query['people.company_id'] = (int)$taxi_company;
            }
        }
        if ( $driver_status == 'A' || $driver_status == 'F' || $driver_status == 'B' ) {
            $match_query['status'] = $driver_status;
            $match_query['shift_status'] = 'IN';
        } elseif ( $driver_status == 'OUT' ) {
            $match_query['status'] = 'F';
            $match_query['shift_status'] = $driver_status;
        }
       
        //echo date(DATE_ISO8601, (new \MongoDB\BSON\UTCDateTime())->sec);echo '--';echo new \MongoDB\BSON\UTCDateTime();exit;
        $company_current_time = $this->company_current_time;
        //print_r(new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000));
		$arguments = [
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => '_id',
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
                    'driver_id' => '$people._id',
                    'name' => '$people.name',
                    'driver_status' => '$people.status',
                    'shift_status' => '$shift_status',
                    'update_date' => '$update_date',
                    'loc' => '$loc.coordinates',
                   'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$update_date']], 1000]],
                    //'updatetime_difference' => '$update_date',
                ]
            ],
            //array('$match' => array('updatetime_difference'=>array('$lte'=>(int)LOCATIONUPDATESECONDS ))),
            [
                '$sort' => [ 
                    'people.created_date' => -1
                ],
            ],
		];
        $result = $this->mongo_db->aggregate(MDB_DRIVER_INFO, $arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }

    public function driver_status_details_model( $array )
    {
        //print_r($array);exit;
        $user_createdby       = $this->user_id;
        $usertype             = $this->usertype;
        $company_id           = $this->company_id;
        $country_id           = $this->country_id;
        $state_id             = $this->state_id;
        $city_id              = $this->city_id;
        $company_current_time = $this->company_current_time;
        $driver_status = isset($array['driver_status']) ? $array['driver_status'] : "";
        $taxi_company  = isset($array['taxi_company']) ? $array['taxi_company'] : "";
        $taxi_model    = isset($array['taxi_model']) ? $array['taxi_model'] : "";
        $match_query = [];
        $match_query['user_type'] = 'D';
        $match_query['status'] = 'A';
        if ($usertype == 'C' || $usertype == 'M') {
            if($company_id!="" && $company_id!=0){
                $match_query['company_id'] = $company_id;
            }
        } else {
            if ($taxi_company != "" && $taxi_company != 0) {
                $match_query['company_id'] = $taxi_company;
            }
        }
        
        if ( $driver_status == 'A' || $driver_status == 'F' ) {
            $match_query['driver.status'] = $driver_status;
            $match_query['driver.shift_status'] = 'IN';
        } elseif ( $driver_status == 'OUT' ) {
            $match_query['driver.status'] = 'F';
            $match_query['driver.shift_status'] = $driver_status;
        }
        $match_query['taxi.taxi_model'] = (int)$taxi_model;
       
        $arguments = [
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => '_id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
            [
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_driverid',
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
				'$match' => $match_query
			],
            [
                '$project' => [
                    '$_id' => 0,
                    'driver_id' => '$_id',
                    'name' => '$name',
                    'driver_status' => '$status',
                    'driver.shift_status' => '$shift_status',
                    '$update_date' => '$driver.update_date',
                   // 'updatetime_difference' => array('$subtract' =>array(new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver.update_date')),
                      'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver.update_date']], 1000]],
                ]
            ],
            ['$match' => ['updatetime_difference'=>['$lte'=>(int)LOCATIONUPDATESECONDS ]]],
            [
                '$sort' => [ 
                    'created_date' => -1
                ],
            ],
		];
        $result          = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    public function all_driver_map_list($array)
    {
        $taxi_company         = isset($array['taxi_company']) ? $array['taxi_company'] : 0;        
        //echo $taxi_company;exit;
        $date = $this->company_current_time;
        //$date = '2015-04-10 00:00:00';
        /*if ($this->usertype == 'C') {
            $query  = "SELECT list.latitude as latitude, list.longitude as longitude, list.update_date as update_date,people.name as name, list.driver_id as driver_id, list.status AS driver_status,list.shift_status as shift_status, list.updatetime_difference AS updatetime_difference
					 FROM (	 SELECT * , (TIME_TO_SEC( TIMEDIFF(  '" . $this->company_current_time . "', driver.update_date ) )) AS updatetime_difference FROM driver 
					) AS list 
					 JOIN people ON people.id = list.driver_id 
					 WHERE people.user_type =  'D' 
					 AND people.status =  'A' 
					 AND people.company_id =  '" . $this->company_id . "'
					 AND list.shift_status =  'IN' 
					 AND updatetime_difference <=  '" . LOCATIONUPDATESECONDS . "'  ";
            echo 'if--'. $query;exit;
            $result = Db::query(Database::SELECT, $query)->execute()->as_array();
            return $result;
        } else if ($this->usertype == 'M') {
            $query  = "SELECT list.latitude as latitude, list.longitude as longitude, list.update_date as update_date,people.name as name, list.driver_id as driver_id, list.status AS driver_status,list.shift_status as shift_status, list.updatetime_difference AS updatetime_difference 
					 FROM (	 SELECT * , (TIME_TO_SEC( TIMEDIFF(  '" . $this->company_current_time . "', driver.update_date ) )) AS updatetime_difference FROM driver 
					) AS list 
					 JOIN people ON people.id = list.driver_id 
					 WHERE people.user_type =  'D' 
					 AND people.status =  'A' 
					 AND people.company_id =  '" . $this->company_id . "'
					 AND list.shift_status =  'IN' 
					 AND updatetime_difference <=  '" . LOCATIONUPDATESECONDS . "'  ";
                     echo 'elseif--'.$query;exit;
            $result = Db::query(Database::SELECT, $query)->execute()->as_array();
            return $result;
        } else {
            $company_where = "";
            if ($taxi_company != 0) {
                $company_where = "AND people.company_id =  '" . $taxi_company . "'";
            }
            $query  = "SELECT list.latitude as latitude, list.longitude as longitude, list.update_date as update_date,people.name as name, list.driver_id as driver_id, list.status AS driver_status,list.shift_status as shift_status, list.updatetime_difference AS updatetime_difference 
					 FROM (	 SELECT * , (TIME_TO_SEC( TIMEDIFF(  '" . $date . "', driver.update_date ) )) AS updatetime_difference FROM driver 
					) AS list 
					 JOIN people ON people.id = list.driver_id 
					 WHERE people.user_type =  'D' 
					 AND people.status =  'A'
					 AND list.shift_status =  'IN'
					 $company_where
					 AND updatetime_difference <=  '" . LOCATIONUPDATESECONDS . "'  ";
            echo 'else--<pre>'.$query;//exit;
            $result = Db::query(Database::SELECT, $query)->execute()->as_array();
            print_r($result);exit;
            return $result;
        }*/
                
       if($this->usertype=='C' || $this->usertype=='M'){
            $company_condition = ['company_id' => (int)$this->company_id,'user_type'=>'D','status'=>'A','driver.shift_status'=>'IN'];
        } else {
            $company_condition = ($taxi_company!=0) ? ['company_id' => (int)$taxi_company,'user_type'=>'D','status'=>'A','driver.shift_status'=>'IN'] : ['user_type'=>'D','status'=>'A','driver.shift_status'=>'IN'];
        }
        $arguments = [
            ['$lookup' => [
                    'from' => MDB_DRIVER_INFO,
                    'localField' => '_id',
                    'foreignField' => "_id",
                    'as' => "driver"
                ]
            ],
            ['$unwind' => '$driver'],
            ['$match' => $company_condition],
            ['$project' => [
                "_id" => 0,
                "loc" => '$driver.loc.coordinates',
                "driver_id" => '$driver._id',
                "driver_status" => '$driver.status',
                "shift_status" => '$driver.shift_status',
                "update_date" => '$driver.update_date',
                "name" => '$name',
                "user_type" => '$user_type',
                "status" => '$status',
               // 'updatetime_difference' => array('$subtract' =>array(new \MongoDB\BSON\UTCDateTime(strtotime($date) * 1000),'$driver.update_date')),
                'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($date) * 1000),'$driver.update_date']], 1000]],
                ]
            ],
            ['$match' => ['updatetime_difference'=>['$lte'=>(int)LOCATIONUPDATESECONDS]]],
        ];
        //echo '<pre>';print_r($arguments);//exit;
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
        //echo '<pre>';print_r($result);exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    public function all_driver_map_list_model($array)
    {
        $taxi_model           = isset($array['taxi_model']) ? $array['taxi_model'] : 0;
        $taxi_company         = isset($array['taxi_company']) ? $array['taxi_company'] : 0;
        $user_createdby       = $this->user_id;
        $usertype             = $this->usertype;
        $company_id           = $this->company_id;
        $country_id           = $this->country_id;
        $state_id             = $this->state_id;
        $city_id              = $this->city_id;
        $company_current_time = $this->company_current_time;        
        $match_query = [];
        $match_query['user_type'] = 'D';
        $match_query['status'] = 'A';
        if ($usertype == 'C' || $usertype == 'M') {
            if($company_id!="" && $company_id!=0){
                $match_query['company_id'] = $company_id;
            }
        } else {
            if ($taxi_company != "" && $taxi_company != 0) {
                $match_query['company_id'] = $taxi_company;
            }
        }
        $match_query['driver.shift_status'] = 'IN';
        $match_query['taxi.taxi_model'] = (int)$taxi_model;
       
        $arguments = [
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => '_id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
            [
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_driverid',
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
				'$match' => $match_query
			],
            [
                '$project' => [
                    "_id" => 0,
                    "loc" => '$driver.loc.coordinates',
                    'driver_id' => '$_id',
                    'update_date' => '$driver.update_date',
                    'name' => '$name',
                    'driver_status' => '$status',
                    'driver.shift_status' => '$shift_status',
                   // 'updatetime_difference' => array('$subtract' =>array(new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver.update_date')),
                      'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver.update_date']], 1000]],
                ]
            ],
            ['$match' => ['updatetime_difference'=>['$lte'=>(int)LOCATIONUPDATESECONDS ]]],
            [
                '$sort' => [ 
                    'created_date' => -1
                ],
            ],
		];
        $result          = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    public function validate_dispatchbooking($arr)
    {
        return Validation::factory($arr)
        ->rule('firstname', 'not_empty')
        //->rule('firstname', 'min_length', array(':value', '3'))
        //->rule('firstname', 'max_length', array(':value', '32'))
        //->rule('email', 'not_empty')
        ->rule('email', 'email')->rule('email', 'max_length', [
            ':value',
            '100'
        ])
        ->rule('country_code', 'not_empty')
        ->rule('phone', 'not_empty')
        ->rule('current_location', 'not_empty')
        ->rule('pickup_lat', 'not_empty')
        ->rule('pickup_lng', 'not_empty')
        /*->rule('drop_location', 'not_empty')
        ->rule('drop_lat', 'not_empty')
        ->rule('drop_lng', 'not_empty')*/ 
        //->rule('luggage', 'numeric')
        //->rule('no_passengers', 'numeric')
        ->rule('pickup_date', 'not_empty')
        ->rule('pickup_time', 'not_empty');
    }
    public function check_passenger_email_phone_exist($passenger_id, $email, $phone)
    {
        $passenger_exist = DB::select('id')->from(PASSENGERS)->where_open()->where('email', '=', $email)->or_where('phone', '=', $phone)->where_close()->where('id', '!=', $passenger_id)->execute()->as_array();
        return count($passenger_exist);
    }
    public function addbooking($post, $random_key, $password, $company_tax)
    {
        $firstname        = Html::chars($post['firstname']);
        $pass_logid       = '';
        $recurrent_id     = '';
        $send_mail        = 'N';
        $insert_booking   = 'N';
        $passenger_id     = $post['passenger_id'];
        $admin_company_id = isset($post['admin_company_id']) ? $post['admin_company_id'] : "";
        if ($admin_company_id != "") {
            $company_id = $admin_company_id;
        } else {
            $company_id = $this->company_id;
        }
        $search_city  = trim($post['cityname']);
        $search_cityid = trim($post['city_id']);
        if ($search_city != '') {
			$condition = ["stateinfo.cityinfo.city_name"=> new \MongoDB\BSON\Regex($search_city, 'i')];
		} elseif ($search_cityid != '') {
			$condition = ["stateinfo.cityinfo.city_id"=> (int)$search_cityid];
		} else {
			$condition = ["stateinfo.cityinfo.default"=> 1];
		}
		$arguments = [
			['$unwind' =>'$stateinfo'],
			['$unwind' =>'$stateinfo.cityinfo'],
			['$match' => $condition],
			['$project' =>[
					'_id' => 0,
					'city_id' => '$stateinfo.cityinfo.city_id',
					'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
				]
			],
			['$limit' => 1]
		];
		$city_result = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		//echo "<pre>if";print_r($city_result['result']); exit;
		$city_id = 0;
		if(!empty($city_result['result']) && count($city_result['result'][0])>0){
			$city_id = $city_result['result'][0]['city_id'];
		}
        $current_datetime        = $this->company_current_time;
        $current_datesplit       = explode(' ', $current_datetime);
        $pickup_date             =  convert_timezone($post['pickup_date'],TIMEZONE);
        $pickup_time             = $post['pickup_time'];
        if ($pickup_date == '' || $pickup_date == 'Date') {
            $pickup_date = $current_datesplit[0];
        }
        if ($pickup_time == '' || $pickup_time == 'Now') {
            $pickup_time = $current_datesplit[1];
        }
        //$pickup_datetime = $pickup_date.' '.$pickup_time;
        $pickup_datetime = $pickup_date;
        $userid          = $this->user_id;
        if (isset($post['dispatch'])) {
            $booktype = 1;
        } else {
            $booktype = 2;
        }
        $pass_condition = (!empty($post['email'])) ? ['email'=>$post['email'],'phone'=>$post['phone']] : ['phone'=>$post['phone']];
        $passenger_exist = $this->mongo_db->find_one(MDB_PASSENGERS,$pass_condition,['_id']);
        if ($post['passenger_id'] == '' && count($passenger_exist) == 0) {
            //Get the last object id
			$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$pass_res = iterator_to_array($pass_rs);
			reset($pass_res);
			$pass_first_key = key($pass_res);
			$passengers_id = $pass_first_key+1;
            $pass_data = ['_id' => (int)$passengers_id,
                'name' => $firstname,
                'parent_id' => (int)0,
                'account_type' => '',					 
			    'salutation' => '',
                'lastname' => '',
                'email' => $post['email'],
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
				'loc' => [],
				'creditcard_details' => [],						
				'child_exist' => 0,
				'allow_creditcard' => (int)0,
				'trip_alert' => (int)0,
				'profile_thumb_image' =>'',
				'pay_by' => (int)3,
				'lateral_start_date' => '',
				'lateral_end_date' => '',             
             
                
            ];
            $pass_result = $this->mongo_db->insert(MDB_PASSENGERS,$pass_data);
            $send_mail        = 'S';
            $passenger_id     = $passengers_id;
        } else {
            $passenger_id           = $passenger_exist['_id'];
            $name                   = explode('- (', $firstname);
            $firstname              = isset($name[0]) ? $name[0] : $firstname;
            $update_passenger_array = [
                'name' => $firstname,
                'email' => $post['email'],
                'country_code' => $post['country_code']
            ];
            $updateresult = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=>$update_passenger_array],['upsert'=>true]);
        }
        
        $user_createdby = $this->user_id;
        $promocode = isset($post['promo_code'])?$post['promo_code']:'';
        /** if single booking **/
        if ($post['recurrent'] == 1) {
            $booking_key  = commonfunction::randomkey_generator();
            //Get the last object id
			// $rs = $this->mongo_db->find(MDB_PASSENGERS_LOGS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
			// $res = iterator_to_array($rs);
			// reset($res);
			// $first_key = key($res);
			// $log_id = $first_key+1;
            $fixed_estimate_fare_type = 0;
            $fixed_estimate_result = [];
            if($post['current_location'] !='' && $post['drop_location'] !='' && $post['pickup_lat'] != '' && $post['pickup_lng'] != '' && $post['drop_lat'] !='' && $post['drop_lng']!=''){
                if($post['total_fare'] >0 ){
                    $fixed_estimate_fare_type = 1;
                    $fixed_estimate_result = ['estimate_fare'=>(float)$post['total_fare'],'estimate_km'=>(float)$post['distance_km'],'estimate_duration'=>0,'estimate_model'=>(int)$post['taxi_model']];
                }
            }

            $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,['_id' => 1],['last_logid']);
            $log_id =  $last_logidresult['last_logid']+1;
            
            $insert_array   = ['_id' => (int)$log_id,
                'booking_key' => $booking_key,
                'passengers_id' => (int)$passenger_id,
                'company_id' => (int)$company_id,
                'driver_id' => 0,//empty insert purpose
                'taxi_id' => 0,//empty insert purpose
                'msg_status' => "",
                'current_location' => $post['current_location'],
                'pickup_latitude' => $post['pickup_lat'],
                'pickup_longitude' => $post['pickup_lng'],
                'drop_location' => $post['drop_location'],
                'drop_latitude' => $post['drop_lat'],
                'drop_longitude' => $post['drop_lng'],
                'pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
		        'actual_pickup_time' => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
                'no_passengers' => $post['no_passengers'],
                'approx_distance' => (float)$post['distance_km'],
                'approx_duration' => $post['total_duration'],
                'approx_fare' => (float)$post['total_fare'],
                'search_city' => (int)$city_id,
                'notes_driver' => $post['notes'],
                'faretype' => (int)$post['payment_type'],
                'fixedprice' => (float)$post['fixedprice'],
                'bookingtype' => (int)$booktype,
                'luggage' => (int)$post['luggage'],
                'max_luggage' => (int)$post['luggage'],
                'payment_type' => 1,
                'promocode' => $promocode,
                "pickupdrop" => "",
                'airport_pickup' => '',
                'airport_flight_number' => null,
                'airport_flight_time' => null,
                'airport_notes' => null,
                "payment_chosen_flag" => "0",
                'bookby' => 2,
                'rating' => 0,
                'drop_time' => null,
                'waitingtime' => null,
                'operator_id' => (int)$userid,
                'travel_status' => 0,
                'taxi_modelid' => (int)$post['taxi_model'],
                'recurrent_type' => (int)$post['recurrent'],
                'company_tax' => (int)$post['company_tax'],
                'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000),
                'logs' => [],
                "book_type" => "Book Later",
                "book_tag" => "N",
                "moved" => 0,
                "createdby_username"=>$this->session->get('name'),
                "passenger_admin_notes"=>$this->get_passenger_notes($passenger_id),
                "fixed_estimate_fare_type"=> (int) $fixed_estimate_fare_type,
                "fixed_estimate_result"=> $fixed_estimate_result
            ];
            //Kumaresh
            try {
                $today_result   = $this->mongo_db->insert(PASSENGERS_LOG, $insert_array);
            } catch(Exception $e) {
                if($e->getCode() == 11000) {
                    $last_logidresult = $this->mongo_db->find_one(MDB_SITEINFO,['_id' => 1],['last_logid']);
                    $log_id =  $last_logidresult['last_logid']+1;
                    $insert_array['_id'] = (int)$log_id;                    
                    $today_result   = $this->mongo_db->insert(PASSENGERS_LOG, $insert_array);
                }                
            }
            //Kumaresh
            $trip_id        = $log_id;
            $pass_logid     = $log_id;
            $insert_booking = 'S';
        }

        $update_logidquery  = ['last_logid' => (int)$log_id];

        $update_logidresult = $this->mongo_db->update(MDB_SITEINFO, ['_id' => 1], ['$set' => $update_logidquery], ['upsert' => true]);
        /** if single booking end**/
        /** if recurrent booking **/
        if ($post['dispatch'] != '') {
            $dispatch_data = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['dispatch_algorithm'=>1])->sort(['dispatch_algorithm.aid'=>-1])->limit(1);
            //echo '<pre>';print_r(iterator_to_array($dispatch_data));exit;
            $companydispatch = (!empty($dispatch_data))?iterator_to_array($dispatch_data):[];
            if (count($companydispatch) > 0) {
                $company_dispatch  = $companydispatch[$company_id]['dispatch_algorithm'];
                if(count($company_dispatch)==1){
                    $tdispatch_type    = $company_dispatch[0]['labelname'];
                } else {
                    $data = array_reverse($company_dispatch);
                    $tdispatch_type    = '2';
                }
                $pass_logid = ($trip_id != "")?$this->get_autodispatch($trip_id):'';
                if ($tdispatch_type == (int)1 && $pass_logid != '') {
                    $booking_details   = $this->get_bookingdetails($pass_logid, $company_id);
                    $latitude          = isset($booking_details[0]["pickup_latitude"])?$booking_details[0]["pickup_latitude"]:"";
                    $longitude         = isset($booking_details[0]["pickup_longitude"])?$booking_details[0]["pickup_longitude"]:"";
                    $miles             = '';
                    $no_passengers     = isset($booking_details[0]["no_passengers"])?$booking_details[0]["no_passengers"]:0;
                    $taxi_fare_km      = isset($booking_details[0]["min_fare"])?$booking_details[0]["min_fare"]:0;
                    $taxi_model        = isset($booking_details[0]["taxi_modelid"])?$booking_details[0]["taxi_modelid"]:0;
                    $taxi_type         = '';
                    $maximum_luggage   = isset($booking_details[0]["luggage"])?$booking_details[0]["luggage"]:"";
                    $company_id        = isset($booking_details[0]["company_id"])?$booking_details[0]["company_id"]:0;
                    $cityname          = '';
                    $search_driver     = '';
                    $driver_details    = $this->search_driver_location($latitude, $longitude, $miles, $no_passengers, $_REQUEST, $taxi_fare_km, $taxi_model, $taxi_type, $maximum_luggage, $cityname, $pass_logid, $company_id, $search_driver);
                    //print_r($driver_details);exit;
                    $nearest_driver    = '';
                    $a                 = 1;
                    $temp              = '10000';
                    $prev_min_distance = '10000~0';
                    $taxi_id           = '';
                    $temp_driver       = 0;
                    $nearest_key       = 0;
                    $prev_key          = 0;
                    $driver_list       = "";
                    $available_drivers = "";
                    $nearest_driver_id = $nearest_taxi_id = "";
                    $total_count       = count($driver_details);
                    //exit;
                    if ($total_count > 0) {
                        /*Nearest driver calculation */
                        $nearest_driver_ids = [];
                        $nearest_count      = 1;
                        foreach ($driver_details as $key => $value) {
                            $prev_min_distance = explode('~', $prev_min_distance);
                            $prev_key          = $prev_min_distance[1];
                            $prev_min_distance = $prev_min_distance[0];
                            //to check the driver has trip already
                            $driver_has_trip   = $this->check_driver_has_trip_request($value['_id']['driver_id']);
                            $current_request   = $this->currently_driver_has_trip_request($value['_id']['driver_id']);
                            if ($driver_has_trip == 0 && $current_request == 0) {
                                $nearest_driver_ids[] = $value['_id']['driver_id'];
                                if ($nearest_count == 1) {
                                    $nearest_driver_id = isset($driver_details['_id']['driver_id']) ? $driver_details['_id']['driver_id'] : 0;
                                    $nearest_taxi_id   = isset($driver_details['_id']['taxi_id']) ? $driver_details['_id']['taxi_id'] : 0;
                                }
                                $nearest_count++;
                            }
                            //checking with previous minimum 
                            if ($value['_id']['distance'] < $prev_min_distance) {
                                //new minimum distance
                                $nearest_key       = $key;
                                $prev_min_distance = $value['_id']['distance'] . '~' . $key;
                            } else {
                                //previous minimum
                                $nearest_key       = $prev_key;
                                $prev_min_distance = $prev_min_distance . '~' . $prev_key;
                            }
                        }
                        $drivers_count = count($nearest_driver_ids);
                        if ($nearest_driver_ids != NULL) {
                            $nearest_driver_ids = implode(",", $nearest_driver_ids);
                        }
                        /*Nearest driver calculation End*/
                        $miles_or_km            = round(($prev_min_distance), 2);
                        $driver_away_in_km      = (ceil($miles_or_km * 100) / 100);
                        $duration               = '+1 minutes';
                        $current_datetime       = date('Y-m-d H:i:s', strtotime($duration, strtotime($current_datetime)));
                        /****** Estimated Arival *************/
                        $taxi_speed             = $this->api_model->get_taxi_speed($nearest_taxi_id);
                        $estimated_time         = $this->api_model->estimated_time($driver_away_in_km, $taxi_speed);
                        /**************************************/
                        //to get nearest driver's company id
                        $driver_company_details = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$nearest_driver_id],['company_id','name','phone']);
                        $companyid              = $driver_company_details[0]['company_id'];
                        $companyName            = $this->get_company_name($companyid);
                        $driver_name            = (isset($driver_company_details[0]['name'])) ? $driver_company_details[0]['name'] : "";
                        $driver_phone           = (isset($driver_company_details[0]['phone'])) ? $driver_company_details[0]['phone'] : "";
                        $driver_reachable_no    = (isset($driver_company_details[0]['phone'])) ? $driver_company_details[0]['phone'] : "";
                        //condition checked to update the company id and name only in admin side
                       if ($this->usertype == 'A') {
                            $updatequery = [
                                'driver_id'=>(int)$nearest_driver_id,
                                'taxi_id'=>(int) $nearest_taxi_id,
                                'company_id'=>(int)$companyid,
                                'travel_status'=>7,
                                'driver_reply'=>'',
                                'msg_status'=>'U',
                                'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
                            ];
                        } else {
                            $updatequery = [
                                'driver_id'=>(int)$nearest_driver_id,
                                'taxi_id'=>(int)$nearest_taxi_id,
                                'travel_status'=>7,
                                'driver_reply'=>'',
                                'msg_status'=>'U',
                                'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
                            ];
                        }
                        $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$pass_logid],['$set'=>$updatequery],['upsert'=>true]);
                        /* Create Log */
                        $company_id   = $this->company_id;
                        $userid       = $this->user_id;
                        $driver_data    = $this->tdispatch_model->get_driver_profile_details($nearest_driver_id);
                        $log_message  = __('log_message_dispatched');
                        $log_message  = str_replace("PASS_LOG_ID", $pass_logid, $log_message);
                        $log_booking  = __('log_booking_dispatched');
                        $log_booking  = str_replace("DRIVERNAME", $driver_data['name'], $log_booking);
                        $log_status   = $this->create_logs($pass_logid, $company_id, $userid, $log_message, $log_booking);
                    ?>
                        <!--script type="text/javascript">load_logcontent();</script this function is in mysql[addedby]-->
                    <?php
                        /***** Insert the druiver details to driver request table ************/
                        $req_id = $this->commonmodel->get_auto_id(MDB_REQUEST_HISTORY);
                        $insert_array = [
                            "_id" => (int)$req_id,
                            "trip_id" => (int)$pass_logid,
                            "available_drivers" => $nearest_driver_ids,
                            "total_drivers" => $nearest_driver_ids,
                            "selected_driver" => (int)$nearest_driver_id,
                            "status" => 0,
                            "rejected_timeout_drivers" => "",
                            "createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
                        ];
                        //Inserting to Transaction Table 
                        $transaction        = $this->mongo_db->insert(MDB_REQUEST_HISTORY, $insert_array);
                        $detail       = [
                            "passenger_tripid" => $pass_logid,
                            "notification_time" => ""
                        ];
                        $msg          = [
                            "message" => __('api_request_confirmed_passenger'),
                            "status" => 1,
                            "detail" => $detail
                        ];
                    }
                }
                /** Auto Dispatch **/
            }
        }
        $req_result['send_mail']      = $send_mail;
        $req_result['pass_logid']     = $pass_logid;
        $req_result['recurrent_id']   = $recurrent_id;
        $req_result['insert_booking'] = $insert_booking;
        return $req_result;
    }
    public function get_autodispatch($pass_logid)
    {
        $company_id       = $this->company_id;
        $current_datetime = $this->company_current_time;
        //MongoDB
        $match_array['_id'] = (int) $pass_logid;
        $match_array['driver_id'] = 0;
        //echo "<pre>";  print_r($match_array); exit;
        $arguments = [
            [
                '$match' => $match_array
            ],[
                '$lookup' => [
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                ]
            ],
            [
                '$project' => [
                    '_id' => '$_id'
                ]
            ],
        ];
        //echo "<pre>"; print_r($arguments);
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result'])) ? $result['result'][0]['_id'] : [];
    }
    public function all_booking_list()
    {
        $currentdate = date('Y-m-d') . ' 00:00:00';
        $enddate     = date('Y-m-d') . ' 23:59:59';
        $company_id  = $this->company_id;
        $query       = "SELECT *,
		(select company_name from " . COMPANY . " where cid=" . PASSENGERS_LOG . ".company_id) as company_name,
		" . PASSENGERS_LOG . ".passengers_log_id as pass_logid,
		(select name from " . PASSENGERS . " where " . PASSENGERS . ".id=" . PASSENGERS_LOG . ".passengers_id) as passenger_name,
		(select name from " . PEOPLE . " where " . PEOPLE . ".id=" . PASSENGERS_LOG . ".driver_id) as driver_name,
		(select phone from " . PEOPLE . " where " . PEOPLE . ".id=" . PASSENGERS_LOG . ".driver_id) as driver_phone,
		(select phone from " . PASSENGERS . " where " . PASSENGERS . ".id=" . PASSENGERS_LOG . ".passengers_id) as passenger_phone
		FROM " . PASSENGERS_LOG . "
		where bookby='2'
		AND " . PASSENGERS_LOG . ".company_id='$company_id'
		AND ( pickup_time between '$currentdate' and  '$enddate' )
		order by passengers_log_id desc";
        $result      = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function get_all_booking_list($array)
    {
        //$travel_status=$array['travel_status'].",8";
        $travel_status       = $array['travel_status'];
        $driver_reply_cancel = $array['driver_reply_cancel'];
        $manage_status       = $array['manage_status'];
        $taxi_company        = $array['taxi_company'];
        //echo $travel_status."--".$driver_reply_cancel;exit;
        $date                = date('Y-m-d', strtotime($array['current_time']));
        $currentdate         = $date . ' 00:00:00';
        $enddate             = $date . ' 23:59:59';
        $company_id          = $this->company_id;
        $company_query       = "";
        if ($company_id != 0) {
            $company_query = "AND plog.company_id='$company_id'";
        }
        $company_where = "";
        if ($taxi_company != "" && $taxi_company != 0) {
            $company_where = "AND plog.company_id='$taxi_company'";
        }
        $two_days_before = date('Y-m-d 00:00:00', strtotime($date . ' -2 day'));
        $date_query      = "";
        if ($manage_status == 0) {
            $date_query = "AND plog.pickup_time >= '$two_days_before'";
        }
        $status_query = "";
        if ($travel_status != "" && $driver_reply_cancel == "") {
            //$status_query="AND driver_reply NOT IN('C','R') AND travel_status IN(".$travel_status.") AND travel_status NOT IN('8')";
            $status_query = "AND plog.driver_reply NOT IN('C','R') AND plog.travel_status IN(" . $travel_status . ") AND plog.travel_status NOT IN('8')";
        } else {
            //$status_query="AND travel_status IN(".$travel_status.")";
            $status_query = "AND plog.travel_status IN(" . $travel_status . ")";
        }
        /*$query = "SELECT *,
        (select company_name from ".COMPANY." where cid=".PASSENGERS_LOG.".company_id) as company_name,
        ".PASSENGERS_LOG.".passengers_log_id as pass_logid,
        (select name from ".PASSENGERS." where ".PASSENGERS.".id=".PASSENGERS_LOG.".passengers_id) as passenger_name,
        (select name from ".PEOPLE." where ".PEOPLE.".id=".PASSENGERS_LOG.".driver_id) as driver_name,
        (select phone from ".PEOPLE." where ".PEOPLE.".id=".PASSENGERS_LOG.".driver_id) as driver_phone,
        (select reachable_mobile from ".PEOPLE." where ".PEOPLE.".id=".PASSENGERS_LOG.".driver_id) as reachable_mobile,
        (select phone from ".PASSENGERS." where ".PASSENGERS.".id=".PASSENGERS_LOG.".passengers_id) as passenger_phone,
        (select total_drivers from ".DRIVER_REQUEST_DETAILS." where ".DRIVER_REQUEST_DETAILS.".trip_id=".PASSENGERS_LOG.".passengers_log_id order by request_id desc limit 0,1) as total_drivers,
        (select fare from ".TRANS." where ".TRANS.".passengers_log_id=".PASSENGERS_LOG.".passengers_log_id) as fare,
        (select distance from ".TRANS." where ".TRANS.".passengers_log_id=".PASSENGERS_LOG.".passengers_log_id) as distance
        FROM ".PASSENGERS_LOG." where bookby='2' $date_query $status_query $company_where order by ".PASSENGERS_LOG.".passengers_log_id desc";*/
        $query  = "SELECT *, c.company_name as company_name, plog.passengers_log_id as pass_logid, pass.name as passenger_name, pass.phone as passenger_phone, p.name as driver_name, p.phone as driver_phone, p.reachable_mobile as reachable_mobile, dr.total_drivers as total_drivers, trans.fare as fare, trans.distance as distance FROM " . PASSENGERS_LOG . " as plog LEFT JOIN " . COMPANY . " as c ON c.cid = plog.company_id LEFT JOIN " . PASSENGERS . " as pass ON pass.id = plog.passengers_id LEFT JOIN " . PEOPLE . " as p ON p.id = plog.driver_id LEFT JOIN " . DRIVER_REQUEST_DETAILS . " as dr ON dr.trip_id = plog.passengers_log_id LEFT JOIN " . TRANS . " as trans ON trans.passengers_log_id = plog.passengers_log_id where plog.bookby='2' $date_query $status_query $company_where order by plog.passengers_log_id desc";
        //echo $query;exit;
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    
   /* public function get_all_booking_list_all($array)
    {
        $travel_status       = $array['travel_status'];
        $driver_reply_cancel = $array['driver_reply_cancel'];
        $manage_status       = $array['manage_status'];
        $search_txt          = $array['search_txt'];
        $search_location     = $array['search_location'];
        $filter_date         = $array['filter_date'];
        $to_date             = $array['to_date'];
        $booking_filter      = $array['booking_filter'];
        $fromdate            = $filter_date . ':00';
        $todate              = $to_date . ':00';
        $date_where          = '';
        $pickupdrop_where    = '';
        $status_query        = '';
        if ($search_txt != '') {
            $pickupdrop_where = " AND ( pass.name LIKE '%$search_txt%' escape '!' or p.name  LIKE '%$search_txt%' escape '!' or p.phone LIKE '%$search_txt%' escape '!' or c.company_name LIKE '%$search_txt%' or pass.phone LIKE '%$search_txt%' escape '!' ";
            $pickupdrop_where .= " or plog.passengers_log_id = '$search_txt' ) ";
        }
        if ($search_location != '') {
            $pickupdrop_where .= " AND (plog.current_location LIKE  '%$search_location%' ";
            $pickupdrop_where .= " or plog.drop_location LIKE '%$search_location%' ) ";
        }
        $date            = date('Y-m-d', strtotime($array['current_time']));
        $currentdate     = $date . ' 00:00:00';
        $enddate         = $date . ' 23:59:59';
        $company_id      = $this->company_id;
        $two_days_before = date('Y-m-d 00:00:00', strtotime($date . ' 0 day'));
        if ($filter_date != '' && $to_date != '') {
            $date_where = " AND ( (plog.pickup_time >= '$fromdate' and plog.pickup_time <= '$todate') OR (plog.actual_pickup_time >= '$fromdate' and plog.actual_pickup_time <= '$todate') ) ";
        } else if ($filter_date != '' || $to_date != '') {
            $datesearch = ($to_date != '') ? $to_date : $filter_date;
            $dateArr    = explode(" ", $datesearch);
            $staDate    = $dateArr[0] . ' 00:00:01';
            $endDate    = $dateArr[0] . ' 23:59:59';
            $date_where = " AND ( (plog.pickup_time >= '$staDate' and plog.pickup_time <= '$endDate') OR (plog.actual_pickup_time >= '$staDate' and plog.actual_pickup_time <= '$endDate') ) ";
        } else {
            $date_where = " AND plog.pickup_time >= '$two_days_before'";
        }
        $date_query = "";
        if ($manage_status == 0) {
            $date_query = "AND plog.pickup_time >= '$two_days_before'";
        }
        if ($booking_filter != '') {
            $status_query = " AND ( plog.travel_status = '$booking_filter' ) ";
        }
        $status_query = "";
        if ($travel_status != "" && $driver_reply_cancel == "") {
            $status_query = "AND plog.driver_reply NOT IN('C','R') AND plog.travel_status IN(" . $travel_status . ") AND plog.travel_status NOT IN('8')";
        } elseif ($travel_status == "" && $driver_reply_cancel == "") {
            $status_query = "AND plog.driver_reply NOT IN('C','R') AND plog.travel_status NOT IN('8')";
        } else {
            $status_query = "AND plog.travel_status IN(" . $travel_status . ")";
        }
        $company_where = "";
        if ($company_id != 0) {
            $company_where = "AND plog.company_id='$company_id'";
        }
        $query  = "SELECT plog.company_id,plog.notes_driver as notes,plog.pickup_time,IF(plog.actual_pickup_time = '0000-00-00 00:00:00','-',plog.actual_pickup_time) as act_pickuptime,plog.pickup_latitude,plog.pickup_longitude,plog.drop_latitude,plog.drop_longitude,plog.no_passengers,plog.current_location,plog.drop_location,plog.dispatch_time,plog.travel_status,plog.driver_reply,plog.approx_distance,plog.approx_fare,c.company_name as company_name, plog.passengers_log_id as pass_logid, pass.name as passenger_name, pass.phone as passenger_phone, pass.country_code as passenger_country_code, p.name as driver_name, p.phone as driver_phone,p.id as driver_id,mmodel.model_name as model_name, dr.total_drivers as total_drivers, trans.fare as fare, trans.distance as distance FROM " . PASSENGERS_LOG . " as plog 
		LEFT JOIN " . COMPANY . " as c ON c.cid = plog.company_id LEFT JOIN " . PASSENGERS . " as pass ON pass.id = plog.passengers_id 
		LEFT JOIN " . PEOPLE . " as p ON p.id = plog.driver_id 
		LEFT JOIN " . DRIVER_REQUEST_DETAILS . " as dr ON dr.trip_id = plog.passengers_log_id 
		LEFT JOIN  " . MOTORMODEL . " as mmodel ON (  mmodel.`model_id` =  plog.`taxi_modelid` )
		LEFT JOIN " . TRANS . " as trans ON trans.passengers_log_id = plog.passengers_log_id 
		where plog.bookby='2' $company_where $pickupdrop_where $date_where $date_query $status_query  order by plog.passengers_log_id desc";
        $result = Db::query(Database::SELECT, $query)->execute();//->as_array();
        print_r($result); exit;
        return $result;
    }*/
    
    public function get_all_booking_list_all($array)
    {
        $travel_status       = $array['travel_status'];
        $driver_reply_cancel = $array['driver_reply_cancel'];
        $manage_status       = $array['manage_status'];
        $search_txt          = $array['search_txt'];
        $search_location     = $array['search_location'];
        $filter_date         = $array['filter_date'];
        $to_date             = $array['to_date'];
        $booking_filter      = $array['booking_filter'];
        $booking_key         = $array['booking_key'];
        $type                = $array['type'];
        $fromdate            = ($filter_date!="")?$filter_date . ':00':"";
        $todate              = ($to_date!="") ?$to_date . ':00':"";
        $date                       = date('Y-m-d', strtotime($array['current_time']));
        $currentdate                = $date . ' 00:00:00';
        $enddate                    = $date . ' 23:59:59';
        $company_id                 = $this->company_id;
        $travel_status              = Commonfunction::mongo_format_array(explode(",", $travel_status));
        $two_days_before            = date( 'Y-m-d 00:00:00', strtotime( $date . ' 0 day' ) );
        $match_query = [];
		$wind_query = [];
        //$match_query['bookby']        = 2;
        $match_query['travel_status'] = ['$in' => $travel_status];
		if ($company_id!="" && $company_id!=0) {
			$wind_query['company._id'] = (int)$company_id;
        }
        if ($driver_reply_cancel == "") {
            $match_query['driver_reply'] = ['$nin' => ['C','R']];
            $key = array_search('8', $travel_status);
            if (false !== $key) {
                unset($travel_status[$key]);
            }
            $match_query['travel_status'] = ['$in' => $travel_status];
        }
        if ($fromdate != '' && $todate != '') {
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($fromdate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($todate) * 1000)];
            //$match_query['actual_pickup_time'] = array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($fromdate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($todate) * 1000));
        }elseif($fromdate != '' || $todate != ''){
            $datesearch = ($to_date != '') ? $to_date : $filter_date;
            $dateArr    = explode(" ", $datesearch);
            $staDate    = $dateArr[0] . ' 00:00:01';
            $endDate    = $dateArr[0] . ' 23:59:59';
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($staDate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($endDate) * 1000)];
            //$match_query['actual_pickup_time'] = array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($staDate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($endDate) * 1000));
        }else{
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)];
        }
        if ($manage_status == 0) {
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)];
        }
        if($booking_key != '') {
            $match_query['booking_key'] = $booking_key;
        }
        
        if($type != '' && $type == 'R') {
            $match_query['book_tag'] = $type;
        }
		$matchquery = $match_query;
      
		if ($search_txt!="") {
			$srch_query = ["\$or"=>
                [
                    ['_id'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['passengers.name'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['passengers.phone'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.name'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.phone'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.driver_code'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['company.companydetails.company_name'=>new \MongoDB\BSON\Regex($search_txt, 'i')]
                ]
            ];
            $wind_query = array_merge($wind_query,$srch_query);
        }
       
        if ($search_location!="") {
            $location_query = ["\$or"=>
                [
                    ['current_location'=>new \MongoDB\BSON\Regex($search_location, 'i')],
                    ['drop_location'=>new \MongoDB\BSON\Regex($search_location, 'i')],
                ]
            ];
            $matchquery = array_merge($matchquery,$location_query);
        }
        
        if($booking_key==""){
            if($type != 'N') {
            $arrays = [['$group' => ['_id'=>'$booking_key','details' =>['$push' =>[
                    'company_id'=>'$company_id',
                    'notes'=>'$notes',
                    'pickup_time'=>'$pickup_time',
                    'booking_time'=>'$booking_time',
                    'act_pickuptime' => '$act_pickuptime',
                    'pickup_latitude'=>'$pickup_latitude',
                    'pickup_longitude'=>'$pickup_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'no_passengers'=>'$no_passengers',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'dispatch_time'=>'$dispatch_time',
                    'travel_status'=>'$travel_status',
                    'driver_reply'=>'$driver_reply',
                    'approx_distance'=>'$approx_distance',
                    'approx_fare'=>'$approx_fare',
                    'company_name'=>'$company_name',
                    'pass_logid'=>'$pass_logid',
                    'passenger_name'=>'$passenger_name',
                    'passenger_phone'=>'$passenger_phone',
                    'passenger_country_code'=>'$passenger_country_code',
                    'driver_name'=>'$driver_name',
                    'driver_code'=>'$driver_code',
                    'driver_phone'=>'$driver_phone',
                    'driver_id'=>'$driver_id',
                    'model_name'=>'$model_name',
                    'total_drivers'=>'$total_drivers',
                    'fare'=>'$fare',
                    'distance'=>'$distance',
                    'book_tag'=>'$book_tag',
                    'booking_key' => '$booking_key'
            ]]]],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
                            
             ];
            } else {
                $arrays=[[
                '$sort' => [
                    '_id' => -1
                ]
            ]];
            }
         }
         else{
             $arrays=[[
                '$sort' => [
                    '_id' => -1
                ]
            ]];
         }
       //print "<pre>"; print_r($matchquery); exit;
        $arguments = [
             [
                '$match' => $matchquery
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
                '$lookup' => [
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                ]
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
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel"
                ]
            ],
            [
                '$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_edit_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel_edit"
                ]
            ],
            [
                '$unwind' =>['path'=>'$motormodel_edit','preserveNullAndEmptyArrays'=>true]
            ],
            [
                  '$lookup' => [
                    'from' => MDB_REQUEST_HISTORY,
                    'localField' => '_id',
                    'foreignField' => "_id",
                    'as' => "driver_request"
                ]
            ],
            [
                  '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ]
            ];
        if(!empty($wind_query)){
            $wquery = [[
                '$match' => $wind_query
            ]];
            $arguments = array_merge($arguments,$wquery);
        }
          /*  array(
                '$match' => $wind_query
            ),*/
            
      $project_query = [      [
                '$project' => [
                    //'_id'=>0,
                    'company_id'=>'$company._id',
                    'notes'=>'$notes_driver',
                    'pickup_time'=>'$pickup_time',
                    'booking_time'=>'$createdate',
                    'act_pickuptime' => ['$sum' => ['$cond' => [['$eq' => ['$actual_pickup_time',new \MongoDB\BSON\UTCDateTime(strtotime('0000-00-00 00:00:00') * 1000)]],'$pickup_time','$actual_pickup_time']]],
                    'pickup_latitude'=>'$pickup_latitude',
                    'pickup_longitude'=>'$pickup_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'no_passengers'=>'$no_passengers',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'dispatch_time'=>'$dispatch_time',
                    'travel_status'=>'$travel_status',
                    'driver_reply'=>'$driver_reply',
                    'approx_distance'=>'$approx_distance',
                    'approx_fare'=>'$approx_fare',
                    'company_name'=>'$company.companydetails.company_name',
                    'pass_logid'=>'$_id',
                    'passenger_name'=>'$passengers.name',
                    'passenger_phone'=>'$passengers.phone',
                    'wallet_amount'=>'$passengers.wallet_amount',
                    'passenger_id'=>'$passengers._id',
                    'passenger_country_code'=>'$passengers.country_code',
                    'driver_name'=>'$people.name',
                    'driver_code'=>'$people.driver_code',
                    'driver_phone'=>'$people.phone',
                    'driver_id'=>'$people._id',
                    'model_name'=>'$motormodel.model_name',
                    'edit_model_name' => ['$ifNull'=>['$motormodel_edit.model_name','']],
                    'total_drivers'=>'$driver_request.total_drivers',
                    'fare'=>'$trans.fare',
                    'distance'=>'$trans.distance',
                    'book_tag'=>'$book_tag',
                    'edit_fare'=>'$fare_detail.value',
                    'booking_key' => '$booking_key',
                    'actual_distance'=>['$ifNull'=>['$distance',0]],
                    'createdby_username'=>['$ifNull'=>['$createdby_username','-']],
                    'payment_type'=>['$ifNull'=>['$trans.payment_type',0]],
                    'advance_payment'=>['$ifNull'=>['$trans.advance_payment',0]],
                    'wallet_amount_used'=>['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'pending_amt'=>['$ifNull'=>['$trans.pending_amt',0]],
                    'fare'=>['$ifNull'=>['$trans.fare',0]],
                    'tripfare'=>['$ifNull'=>['$trans.tripfare',0]],
                    'add_amt'=>['$ifNull'=>['$trans.add_amt',0]],
                    'actual_paid_amt'=>['$ifNull'=>['$trans.actual_paid_amt',0]],
                    'driver_edit_status'=>['$ifNull'=>['$trans.driver_edit_status',0]],
                    'passenger_wallet_amount'=>['$ifNull'=>['$passengers.wallet_amount',0]],
                ]
            ]];
            $args = array_merge($arguments,$project_query,$arrays);
        
        //$args = array_merge($arguments,$arrays);
      // echo "<pre>";print_r($args);exit();
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $args);
       // print "<pre>";print_r($result);
        //exit;
        if($booking_key==""){
            
            if($type != 'N') {
                $new_array = [];
            foreach($result['result'] as $key => $val){
                $new_array[$key] = $val['details'][0];   
            }
           // print "<pre>";
           // print_r($new_array); exit;
            return (!empty($new_array)) ? $new_array : [];
            } else {
                return (!empty($result['result'])) ? $result['result'] : [];
            }
        }else{
            return (!empty($result['result'])) ? $result['result'] : [];
        }
        
    } 
   
    public function load_logcontent()
    {
        $company_id       = $this->company_id;
        $user_createdby   = $this->user_id;
        $current_datetime = $this->company_current_time;
        $currentdate      = date('Y-m-d', strtotime($current_datetime));
        $sdate            = $currentdate . ' 00:00:00';
        $query            = "SELECT booking_logid, log_message, log_booking, log_createdate FROM " . LOGS . "
				WHERE log_userid='" . $user_createdby . "'
				AND log_createdate >= '" . $sdate . "'
				ORDER BY `logid` DESC
				LIMIT 0,50";
        //echo $query;exit;
        $results          = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function edit_bookingdetails($pass_logid = '')
    {
        $company_id    = $this->company_id;
        //MongoDB
       /* if ($company_id != "" && $company_id != 0) {
            $match_array['company_id'] = (int) $company_id;
        }*/
        $match_array['_id'] = (int) $pass_logid;
        //echo "<pre>";  print_r($match_array); exit;
        if (FARE_SETTINGS == 2 && !empty($company_id)) {
            $arguments = [
                [
                    '$match' => $match_array
                ],
               /* array(
                    '$lookup' => array(
                        'from' => COMPANY,
                        'localField' => 'company_id',
                        'foreignField' => "_id",
                        'as' => "company"
                    )
                ),*/
                [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => '_id',
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => ['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
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
                    '$unwind' => '$passengers',
                    '$unwind' => '$fare_detail'
                ],
               
                [
                    '$project' => [
                        'pass_logid' => '$_id',
                        'passenger_name' => '$passengers.name',
                        'passengers_id' => '$passengers._id',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'pickup_latitude' => '$pickup_latitude',
                        'pickup_longitude' => '$pickup_longitude',
                        'no_passengers' => '$no_passengers',
                        'luggage' => '$luggage',
                        'company_id' => '$company_id',
                        'approx_fare' => '$approx_fare',
                        'approx_distance' => '$approx_distance',
                        'country_code' => '$passengers.country_code',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'drop_latitude' => '$drop_latitude',
                        'drop_longitude' => '$drop_longitude',
                        'pickup_time' => '$pickup_time',
                        'notes_driver' => '$notes_driver',
                        'taxi_modelid' => '$taxi_modelid',
                        'search_city' => '$search_city',
                        'travel_status' => '$travel_status',
                        'pay' => '$fare_detail.value',
                        'faretype'=>'$payment_type',
                        'bookby'=>'$bookby',
                        'taxi_edit_modelid'=>['$ifNull'=>['$taxi_edit_modelid','']],
                        'promocode'=>['$ifNull'=>['$promocode','']],
                        'pending_amt'=>['$ifNull'=>['$trans.pending_amt','']]
                    ]
                ],
            ];
            //echo "<pre>"; print_r($arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        } else {
            $arguments = [
                [
                    '$match' => $match_array
                ],
               /* array(
                    '$lookup' => array(
                        'from' => COMPANY,
                        'localField' => 'company_id',
                        'foreignField' => "_id",
                        'as' => "company"
                    )
                ),*/
                [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => '_id',
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => ['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
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
                        'from' => MDB_MOTOR_MODEL,
                        'localField' => 'taxi_modelid',
                        'foreignField' => "_id",
                        'as' => "motormodel"
                    ]
                ],
                [
                    '$unwind' => '$motormodel'
                ],
                [
                    '$project' => [
                        'pass_logid' => '$_id',
                        'passengers_id' => '$passengers._id',
                        'passenger_name' => '$passengers.name',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'min_fare' => '$motormodel.min_fare',
                        'pickup_latitude' => '$pickup_latitude',
                        'pickup_longitude' => '$pickup_longitude',
                        'no_passengers' => '$no_passengers',
                        'taxi_modelid' => '$motormodel._id',
                        'luggage' => '$luggage',
                        'company_id' => '$company_id',
                        'approx_fare' => '$approx_fare',
                        'approx_distance' => '$approx_distance',
                        'country_code' => '$passengers.country_code',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'drop_latitude' => '$drop_latitude',
                        'drop_longitude' => '$drop_longitude',
                        'pickup_time' => '$pickup_time',
                        'notes_driver' => '$notes_driver',
                        'search_city' => '$search_city',
                        'travel_status' => '$travel_status',
                        'pay' => '$fare_detail.value',
                        'faretype'=>'$payment_type',
                        'bookby'=>'$bookby',
                        'taxi_edit_modelid'=>['$ifNull'=>['$taxi_edit_modelid','']],
                        'promocode'=>'$promocode',
                        'pending_amt'=>['$ifNull'=>['$trans.pending_amt','']]
                    ]
                ],
            ];
            //echo "<pre>"; print_r($arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            if(isset($result['result'][0]['pickup_time']) && $result['result'][0]['pickup_time'] != '') {
               $result['result'][0]['pickup_time'] = commonfunction::convertphpdate('Y-m-d H:i:s',$result['result'][0]['pickup_time']);
            }
            if(isset($result['result'][0]['pay']) && $result['result'][0]['pay'] != '') {
                foreach($result['result'][0]['pay'] as $key => $value) {
                    if($key == 5) {
                        $result['result'][0]['pay'][$key] = ($result['result'][0]['pending_amt'] != '') ? $result['result'][0]['pending_amt'] : $value;
                    }
                }
            }
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    public function validate_dispatchbooking_edit($arr)
    {
        return Validation::factory($arr)
        ->rule('edit_firstname', 'not_empty')
        //->rule('edit_firstname', 'min_length', array(':value', '3'))            
        //->rule('firstname', 'max_length', array(':value', '32'))            
        //->rule('edit_email', 'not_empty')
        ->rule('edit_email', 'email')->rule('edit_email', 'max_length', [
            ':value',
            '50'
        ])->rule('edit_country_code', 'not_empty')
        ->rule('edit_phone', 'not_empty')
        ->rule('edit_current_location', 'not_empty')
        ->rule('edit_pickup_lat', 'not_empty')
        ->rule('edit_pickup_lng', 'not_empty')
        /*->rule('drop_location', 'not_empty')
        ->rule('drop_lat', 'not_empty')
        ->rule('drop_lng', 'not_empty')*/ 
        //->rule('luggage', 'numeric')            
        //->rule('no_passengers', 'numeric')            
        //->rule('edit_pickup_time', 'not_empty')
        ->rule('edit_pickup_date', 'not_empty');
    }
    public function updatebooking($post, $random_key, $password)
    {   //echo $this->session->get('name');
        //print_r($post);exit;
        $firstname   = Html::chars($post['edit_firstname']);
        $send_mail   = 'N';
        //print_r($post);exit;
        $search_cityid     = $post['edit_city_id'];
        $search_city = trim($post['edit_cityname']);
        if ($search_city != '') {
			$condition = ["stateinfo.cityinfo.city_name"=> new \MongoDB\BSON\Regex($search_city, 'i')];
		} elseif ($search_cityid != '') {
			$condition = ["stateinfo.cityinfo.city_id"=> (int)$search_cityid];
		} else {
			$condition = ["stateinfo.cityinfo.default"=> 1];
		}
		$arguments = [
			['$unwind' =>'$stateinfo'],
			['$unwind' =>'$stateinfo.cityinfo'],
			['$match' => $condition],
			['$project' =>[
					'_id' => 0,
					'city_id' => '$stateinfo.cityinfo.city_id',
					'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
				]
			],
			['$limit' => 1]
		];
		$city_result = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		//echo "<pre>if";print_r($city_result['result']); exit;
		$city_id = 0;
		if(!empty($city_result['result']) && count($city_result['result'][0])>0){
			$city_id = $city_result['result'][0]['city_id'];
		}
        $passenger_id     = $post['edit_passenger_id'];
        $admin_company_id = isset($post['edit_admin_company_id']) ? $post['edit_admin_company_id'] : "";
        $company_id = ($admin_company_id != "") ?$admin_company_id:$this->company_id;
        $current_datetime  = $this->company_current_time;
        $current_datesplit = explode(' ', $current_datetime);
        $pickup_datetime       =  convert_timezone($post['edit_pickup_date'],TIMEZONE);
        $user_createdby    = $userid = $this->user_id;
        $booktype = (isset($post['dispatch'])) ? 1 : 2;
        $pass_condition = (!empty($post['edit_email'])) ? ['email'=>$post['edit_email'],'phone'=>$post['edit_phone']] : ['phone'=>$post['edit_phone']];
        $passenger_exist = $this->mongo_db->find_one(MDB_PASSENGERS,$pass_condition,['_id']);
        if (count($passenger_exist) == 0) {
            //Get the last object id
			$pass_rs = $this->mongo_db->find(MDB_PASSENGERS,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$pass_res = iterator_to_array($pass_rs);
			reset($pass_res);
			$pass_first_key = key($pass_res);
			$passengers_id = $pass_first_key+1;
            $insert_array     = ['_id' => (int)$passengers_id,
                'name' => $firstname,
                'email' => $post['edit_email'],
                'phone' => $post['edit_phone'],
                'country_code' => $post['edit_country_code'],
                'address' => '',
                'password' => md5($password),
                'org_password' => $password,
                'created_date' => $current_datetime,
                'activation_key' => $random_key,
                'user_status' => ACTIVE,
                'passenger_cid' => (int)$company_id,
                'activation_status' => 1,
                'pay_by' => 3,
                'createdby'=>(int)$userid,
                "createdby_username"=>$this->session->get('name'),
            ];
            //Inserting to PASSENGERS Table 
            $insert_passenger = $this->mongo_db->insert(MDB_PASSENGERS, $insert_array);
            $send_mail        = 'S';
            $passenger_id     = $passengers_id;
        } else {
            $passenger_id           = $passenger_exist['_id'];
            $name                   = explode('- (', $firstname);
            $firstname              = isset($name[0]) ? $name[0] : $firstname;
            $update_passenger_array = [
                'name' => $firstname,
                'email' => $post['edit_email']
            ];
            $updateresult = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['$set'=>$update_passenger_array],['upsert'=>true]);
        }
        $promocode = isset($post['edit_promo_code'])?$post['edit_promo_code']:'';
         
        if( isset($post['fare_type']) && $post['fare_type'] ==1 ){
            $taxi_edit_modelid = (int)$post['edit_taxi_model'];
            $post['edit_taxi_model'] = (int)$post['old_model_id'];
        }else{
            $taxi_edit_modelid = '';
        }

        $fixed_estimate_fare_type = 0;
        $fixed_estimate_result = [];
        if($post['edit_current_location'] !='' && $post['edit_drop_location'] !='' && $post['edit_pickup_lat'] != '' && $post['edit_pickup_lng'] != '' && $post['edit_drop_lat'] !='' && $post['edit_drop_lng']!=''){
            if($post['edit_total_fare'] >0 ){
                $fixed_estimate_fare_type = 1;
                $fixed_estimate_result = ['estimate_fare'=>(float)$post['edit_total_fare'],'estimate_km'=>(float)$post['edit_distance_km'],'estimate_duration'=>0,'estimate_model'=>(int)$post['edit_taxi_model']];
            }
        }


        $companyName  = $this->get_company_name($company_id);
        if(!isset($post["cash_pay"]) && !isset($post["card_pay"]) && !isset($post["knet_pay"]) )
        {
            
        $update_array = [
            "passengers_id" => (int)$passenger_id,
            "company_id" => (int)$company_id,
            "current_location" => $post['edit_current_location'],
            "pickup_latitude" => $post['edit_pickup_lat'],
            "pickup_longitude" => $post['edit_pickup_lng'],
            "drop_location" => $post['edit_drop_location'],
            "drop_latitude" => $post['edit_drop_lat'],
            "drop_longitude" => $post['edit_drop_lng'],
            "pickup_time" => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
            "no_passengers" => (int)$post['edit_no_passengers'],
            "approx_distance" => (float)$post['edit_distance_km'],
            "approx_duration" => $post['edit_total_duration'],
            //"approx_fare" => (float)$post['edit_total_fare'],
            "search_city" => (int)$city_id,
            "notes_driver" => $post['edit_notes'],
            "faretype" => (int)$post['edit_payment_type'],
            "fixedprice" => (float)$post['edit_fixedprice'],
            "bookingtype" => (int)$booktype,
            "luggage" => (int)$post['edit_luggage'],
            "bookby" => 2,
            //"operator_id" => (int)$userid,
            "taxi_modelid" => (int)$post['edit_taxi_model'],
            "company_tax" => (float)$post['edit_company_tax'],
            "notification_status" => 6,
            "createdby_username"=>$this->session->get('name'),
            "promocode"=>$promocode,
            "taxi_edit_modelid"=>$taxi_edit_modelid,
            "fixed_estimate_fare_type"=> (int) $fixed_estimate_fare_type,
            "fixed_estimate_result"=> $fixed_estimate_result

        ];
    }
        else{
             $update_array = [
            "passengers_id" => (int)$passenger_id,
            "company_id" => (int)$company_id,
            "current_location" => $post['edit_current_location'],
            "pickup_latitude" => $post['edit_pickup_lat'],
            "pickup_longitude" => $post['edit_pickup_lng'],
            "drop_location" => $post['edit_drop_location'],
            "drop_latitude" => $post['edit_drop_lat'],
            "drop_longitude" => $post['edit_drop_lng'],
            "pickup_time" => new \MongoDB\BSON\UTCDateTime(strtotime($pickup_datetime) * 1000),
            "no_passengers" => (int)$post['edit_no_passengers'],
            "approx_distance" => (float)$post['edit_distance_km'],
            "approx_duration" => $post['edit_total_duration'],
            //"approx_fare" => (float)$post['edit_total_fare'],
            "search_city" => (int)$city_id,
            "notes_driver" => $post['edit_notes'],
            "faretype" => (int)$post['edit_payment_type'],
            "fixedprice" => (float)$post['edit_fixedprice'],
            "bookingtype" => (int)$booktype,
            "luggage" => (int)$post['edit_luggage'],
            "bookby" => 2,
            //"operator_id" => (int)$userid,
            "taxi_modelid" => (int)$post['taxi_model_edit'],
            "company_tax" => (float)$post['edit_company_tax'],
            "notification_status" => 6,
            "fare_detail" => [ "1" => (int)$post["cash_pay"],"6" => (int)$post["card_pay"],"3" => (int)$post["knet_pay"],"additional amount"=> (int)$post["add_amt"]],
            "createdby_username"=>$this->session->get('name'),
            "promocode"=>$promocode,
            "taxi_edit_modelid"=>$taxi_edit_modelid,
            "fixed_estimate_fare_type"=> (int) $fixed_estimate_fare_type,
            "fixed_estimate_result"=> $fixed_estimate_result
            ];
        }
        if ($company_id == 0) {
            unset($update_array['company_id']);
            unset($update_array['company_name']);
        }
        //print_r($update_array);exit;
        $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS, ['_id'=>(int)$post['edit_pass_logid']],['$set'=>$update_array],[ 'upsert' => true]);
//echo 333;exit;
        if ($post['update_dispatch'] != '') {
            //echo "1";exit;
            $trip_id          = $post['edit_pass_logid'];
            $company_id       = $this->company_id;
            $dispatch_data = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['dispatch_algorithm'=>1])->sort(['dispatch_algorithm.aid'=>-1])->limit(1);
            //echo '<pre>';print_r(iterator_to_array($dispatch_data));exit;
            $companydispatch = (!empty($dispatch_data))?iterator_to_array($dispatch_data):[];
            
            if (count($companydispatch) > 0) {
                $company_dispatch  = $companydispatch[$company_id]['dispatch_algorithm'];
                
                if(count($company_dispatch)==1){
                    $tdispatch_type    = $company_dispatch[1]['labelname'];
                } else {
                    $data = array_reverse($company_dispatch);
                    $tdispatch_type    = $data['labelname'];
                }
                $pass_logid = ($trip_id != "")? $trip_id:0;
                if ($tdispatch_type == (int)1 && $pass_logid != '') {
                   // echo $tdispatch_type;exit();
                    $booking_details   = $this->get_bookingdetails($pass_logid, $company_id);
                    $latitude          = $booking_details[0]["pickup_latitude"];
                    $longitude         = $booking_details[0]["pickup_longitude"];
                    $miles             = '';
                    $no_passengers     = $booking_details[0]["no_passengers"];
                    $taxi_fare_km      = $booking_details[0]["min_fare"];
                    $taxi_model        = $booking_details[0]["taxi_modelid"];
                    $taxi_type         = '';
                    $maximum_luggage   = $booking_details[0]["luggage"];
                    $company_id        = $booking_details[0]["company_id"];
                    $cityname          = '';
                    $search_driver     = '';
                    $_REQUEST['dispatch_type'] = 1;//for auto dispatch
                    //echo "<pre>";print_r($_REQUEST);exit();

                    $taxi_edit_modelid    = isset($booking_details[0]["taxi_edit_modelid"])?$booking_details[0]["taxi_edit_modelid"]:'';
                    if($taxi_edit_modelid!=''){
                        $request_taxi_model = $taxi_edit_modelid;
                    }else{
                        $request_taxi_model = $taxi_model;
                    }
                
                    $driver_details    = $this->search_driver_location($latitude, $longitude, $miles, $no_passengers, $_REQUEST, $taxi_fare_km, $request_taxi_model, $taxi_type, $maximum_luggage, $cityname, $pass_logid, $company_id, $search_driver);
                    //print_r($driver_details);exit;
                    $nearest_driver    = '';
                    $a                 = 1;
                    $temp              = '10000';
                    $prev_min_distance = '10000~0';
                    $taxi_id           = '';
                    $temp_driver       = 0;
                    $nearest_key       = 0;
                    $prev_key          = 0;
                    $driver_list       = "";
                    $available_drivers = "";
                    $nearest_driver_id = $nearest_taxi_id = "";
                    $total_count       = count($driver_details);
                    //exit;
                    if (count($driver_details) > 0) {
                        $nearest_count      = 1;
                        /*Nearest driver calculation */
                        $nearest_driver_ids = [];
                       
                        foreach ($driver_details as $key => $value) {
                            $prev_min_distance = explode('~', $prev_min_distance);
                            $prev_key          = $prev_min_distance[1];
                            $prev_min_distance = $prev_min_distance[0];
                            //to check the driver has trip already
                            $driver_has_trip   = $this->check_driver_has_trip_request($value['_id']['driver_id']);
                            $current_request   = $this->currently_driver_has_trip_request($value['_id']['driver_id']);
                            if ($driver_has_trip == 0 && $current_request == 0) {
                                $nearest_driver_ids[] = $value['_id']['driver_id'];
                                if ($nearest_count == 1) {
                                    $nearest_driver_id = isset($driver_details[$key]['_id']['driver_id']) ? $driver_details[$key]['_id']['driver_id'] : 0;
                                    $nearest_taxi_id   = isset($driver_details[$key]['_id']['taxi_id']) ? $driver_details[$key]['_id']['taxi_id'] : 0;
                                }
                                $nearest_count++;
                            }
                            //checking with previous minimum 
                            if ($value['_id']['distance'] < $prev_min_distance) {
                                //new minimum distance
                                $nearest_key       = $key;
                                $prev_min_distance = $value['_id']['distance'] . '~' . $key;
                            } else {
                                //previous minimum
                                $nearest_key       = $prev_key;
                                $prev_min_distance = $prev_min_distance . '~' . $prev_key;
                            }
                        } 
                        $drivers_count = count($nearest_driver_ids);
                        if ($nearest_driver_ids != NULL) {
                            $nearest_driver_ids = implode(",", $nearest_driver_ids);
                        }
                        /*Nearest driver calculation End*/
                        $miles_or_km       = round(($prev_min_distance), 2);
                        $driver_away_in_km = (ceil($miles_or_km * 100) / 100);
                        $company_id        = $this->company_id;
                        $duration          = '+1 minutes';
                        $current_datetime  = date('Y-m-d H:i:s', strtotime($duration, strtotime($current_datetime)));
                        /****** Estimated Arival *************/
                        $taxi_speed        = $this->api_model->get_taxi_speed($nearest_taxi_id);
                        $estimated_time    = $this->api_model->estimated_time($driver_away_in_km, $taxi_speed);
                        /**************************************/
                        //to get nearest driver's company id
                        if (!empty($nearest_driver_id)) {
                            $driver_company_details = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$nearest_driver_id],['company_id','name','phone']);
                        }
                        $companyName         = (isset($driver_company_details['name'])) ? $this->get_company_name($driver_company_details['company_id']) : "";
                        $companyid           = (isset($driver_company_details['company_id'])) ? $driver_company_details['company_id'] : 0;
                        $driver_name         = (isset($driver_company_details['name'])) ? $driver_company_details['name'] : "";
                        $driver_phone        = (isset($driver_company_details['phone'])) ? $driver_company_details['phone'] : "";
                        $driver_reachable_no = (isset($driver_company_details['phone'])) ? $driver_company_details['phone'] : "";
                        //condition checked to update the company id and name only in admin side
                        if ($this->usertype == 'A') {
                            $updatequery = ['driver_id'=>(int)$nearest_driver_id,
                                'taxi_id'=>(int) $nearest_taxi_id,
                                'company_id'=>(int)$companyid,
                                'travel_status'=>7,
                                'driver_reply'=>'',
                                'msg_status'=>'U',
                                'dispatch_time'=>$current_datetime,
                                "createdby_username"=>$this->session->get('name'),
                            ];
                        } else {
                            $updatequery = ['driver_id'=>(int)$nearest_driver_id,
                                'taxi_id'=>(int)$nearest_taxi_id,
                                'travel_status'=>7,
                                'driver_reply'=>'',
                                'msg_status'=>'U',
                                'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000),
                                "createdby_username"=>$this->session->get('name'),
                            ];
                        }
                        $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$pass_logid],['$set'=>$updatequery],['upsert'=>true]);
                        /* Create Log */
                        $company_id   = $this->company_id;
                        $userid       = $this->user_id;
                        $log_message  = __('log_message_dispatched');
                        $log_message  = str_replace("PASS_LOG_ID", $pass_logid, $log_message);
                        $log_booking  = __('log_booking_dispatched');
                        
                        $log_booking  = str_replace("DRIVERNAME", $driver_details[0]['_id']['name'], $log_booking);
                        $log_status   = $this->create_logs($pass_logid, $company_id, $userid, $log_message, $log_booking);
?>
						<script type="text/javascript">load_logcontent();</script>
						<?php
                        $exist_request = $this->exist_request($pass_logid);
                        if ($exist_request == 1) {
                             $delete_exist_request = $this->mongo_db->remove(MDB_REQUEST_HISTORY,['_id'=>(int)$pass_logid]);
                        }
                        // Insert the driver details to driver request table /
                        $nearest_driver_ids = (!empty($nearest_driver_ids)) ? $nearest_driver_ids : '';
			$req_id = $this->commonmodel->get_auto_id(MDB_REQUEST_HISTORY);
                        $insert_array       = [
                            "_id" => (int)$req_id,
			    "trip_id" => (int)$pass_logid,
                            "available_drivers" => $nearest_driver_ids,
                            "total_drivers" => $nearest_driver_ids,
                            "selected_driver" => (int)$nearest_driver_id,
                            "status" => 0,
                            "rejected_timeout_drivers" => "",
                            "createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
                        ];
                        //print_r($insert_array);exit;
                        //Inserting to Driver request table Table 
                        $driver_request        = $this->mongo_db->insert(MDB_REQUEST_HISTORY, $insert_array);
                        $detail             = [
                            "passenger_tripid" => $pass_logid,
                            "notification_time" => ""
                        ];
                        $msg                = [
                            "message" => __('api_request_confirmed_passenger'),
                            "status" => 1,
                            "detail" => $detail
                        ];
                    }
                }
                /** Auto Dispatch **/
            }
        }
        $req_result['send_mail']  = $send_mail;
        $req_result['pass_logid'] = $post['edit_pass_logid'];
        return $req_result;
    }
    public function exist_request($pass_logid)
    {
        //MongoDB
        $result = $this->mongo_db->count(MDB_REQUEST_HISTORY,['trip_id'=>(int)$pass_logid],['_id']);
        return ($result>0)?1:0;
    }
    public function get_bookingdetails($pass_logid, $company_id)
    {
        //MongoDB
        if ($company_id != "" && $company_id != 0) {
            $match_array['company_id'] = (int) $company_id;
        }
        $match_array['_id'] = (int) $pass_logid;
        //echo "<pre>";  print_r($match_array); exit;
        $arguments = [
            [
                '$match' => $match_array
            ],
            [
                '$lookup' => [
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                ]
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
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel"
                ]
            ],
            [
                '$unwind' => '$motormodel'
            ],
            [
                '$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_edit_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel_edit"
                ]
            ],
            [
                '$unwind' =>['path'=>'$motormodel_edit','preserveNullAndEmptyArrays'=>true]
            ],            
            [
                '$project' => [
                    'pass_logid' => '$_id',
                    'passenger_name' => '$passengers.name',
                    'passenger_email' => '$passengers.email',
                    'passenger_phone' => '$passengers.phone',
                    'min_fare' => '$motormodel.min_fare',
                    'pickup_latitude' => '$pickup_latitude',
                    'pickup_time' => '$pickup_time',
                    'pickup_longitude' => '$pickup_longitude',
                    'no_passengers' => '$no_passengers',
                    'company_name' => '$company.companydetails.company_name',
                    'taxi_modelid' => '$motormodel._id',
                    'luggage' => '$luggage',
                    'company_id' => '$company_id',
                    'airport_pickup' => '$airport_pickup',
                    'edit_model_min_fare' => ['$ifNull'=>['$motormodel_edit.min_fare','']],
                    'taxi_edit_modelid'=>['$ifNull'=>['$motormodel_edit._id','']],
                ]
            ],
        ];
        //echo "<pre>"; print_r($arguments);
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    public function search_driver_location($lat, $long, $distance = NULL, $no_passengers, $request, $taxi_fare_km, $taxi_model, $taxi_type, $maximum_luggage, $city_name, $sub_log_id, $company_id, $search_driver, $airport= 0)
    {
		//$taxi_model = 3;
        $assigned_driver1    = $this->free_availabletaxisearch_list($taxi_type, $taxi_model, $company_id);
        //echo '<pre>';
        //print_r($assigned_driver1);exit;
        $driver_list       = '';
        $driver_count      = '';
        $driver_list_array = [];
        /************** NEW CHNAGES *******************/
        /* AVAIL MOTOR MODEL */
        $modelrs = $this->mongo_db->find(MDB_MOTOR_MODEL,['model_status' => 'A'],['_id','model_name','priority'])->sort(['priority'=>1]);
		$modelres = iterator_to_array($modelrs,false);
		reset($modelres);
		$countres = count($modelres);
		//print_r($modelres);
		//echo "sssssss".
		$countres1 = $countres-1;
		$last_model = $modelres[$countres1];
		//print_r($last_model['priority']);
		
        
       
        /* AVAIL MOTOR MODEL */
        
        
        $result1 = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["_id"=>(int)$taxi_model],['priority']);
        //print_r($result1);
        $count_check1 = count($assigned_driver1);
        //$chosen_model = $params['motor_model'];
        //echo "choosen". 
        $chosen_model = $result1['priority']; 
        
        /* */
        foreach($modelres as $k => $v){
		if($v['priority'] == $chosen_model){
		$got_current_model_key = $k;
		break;	
		}	
		}
		//echo "eeee".$got_current_model_key."eeee";
        /* */
        
        
        //echo "cOUNT AVAIL".count($modelres);
		if($got_current_model_key < count($modelres) ){ 
		$next_model_key = $got_current_model_key + 1;
		
		}
		if($next_model_key < count($modelres) ){ 
		//echo "kkkk".
		$next_model	 = $modelres[$next_model_key]['priority'];
		//exit;
		}
        if($chosen_model == $last_model['priority'] || $airport == 1){
			 $assigned_driver = $assigned_driver1;
        }
		else{
			if($next_model <= $last_model['priority']){
				if($count_check1 > 0){
					//echo "HI";
					$assigned_driver = $assigned_driver1;
				}else{
						//echo "ELSE HI";
						//echo $next_model;
						//echo '<br>';
						//echo '<pre>';
					$result2 = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["priority"=>(int)$next_model],['_id']);
					//echo $result2['_id'];//exit;
					$assigned_driver = $this->free_availabletaxisearch_list($taxi_type,$result2['_id'], $company_id);
					
					if(count($assigned_driver) == 0){
						
						if($got_current_model_key < count($modelres) ){ 
							$next_model_key = $next_model_key + 1;
							
							}
							if($next_model_key < count($modelres) ){ 
							
							 $next_model	 = $modelres[$next_model_key]['priority'];
						}
						
					$result2 = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["priority"=>(int)$next_model],['_id']);
					//echo $result2['_id'];//exit;
					$assigned_driver = $this->free_availabletaxisearch_list($taxi_type,$result2['_id'], $company_id);
						//print_r($assigned_driver);exit;
					}
					
					
					
					
					  //print_r($assigned_driver);exit;
					
				}
			}
		}
		
        /************** NEW CHNAGES *******************/
        
        
        
        
        
        
        
        
        
        
        
        //echo '<pre>';print_r($assigned_driver);exit;
        foreach ($assigned_driver as $key => $value) {
                $driver_list_array[] = $value['_id']['id'];
        }
        $shift_array = ['IN','OUT'];
        if(isset($request['dispatch_type']) && $request['dispatch_type'] == 1){

            $shift_array = ['IN'];
        }
        
        //echo "<pre>";print_r($shift_array);exit();
         //$shift_list = commonfunction::mongo_format_array($shift_array);

        $match_query = [];
        if (count($driver_list_array) > 0) {
            $driver_list = commonfunction::mongo_format_array($driver_list_array);
        }
        //echo '<pre>';print_r($driver_list_array);print_r($driver_list);exit;
        if ($search_driver) {
            $match_query = ['people.name'=>new \MongoDB\BSON\Regex($search_driver, 'i')];
        }
        if ($taxi_model) {
            //$match_query = array('taxi.taxi_model' => (int)$taxi_model);
        }
        if ($taxi_type) {
            $match_query = ['taxi.taxi_type' => (int)$taxi_type];
        }
        if ($maximum_luggage) {
            $match_query = ['taxi.max_luggage' => ['$gte'=>(int)$maximum_luggage]];
        }
        if(!empty($driver_list)) {
            $match_query = ['$match' => [
                    "distance" => ['$lte' => (int)DEFAULTMILE],
                    "people.login_status" => 'S',
                    "shift_status" =>['$in'=>$shift_array],
                   // "shift_status" =>'IN',
                    "status" => "F",
                    '_id'=>['$in'=>$driver_list]
                ]
            ];
        }
        $current_datetime = $this->commonmodel->company_timezone($company_id);
        $current_time     = convert_timezone('now', $current_datetime);
        $current_date     = explode(' ', $current_time);
        $start_time       = $current_date[0] . ' 00:00:01';
        $end_time         = $current_date[0] . ' 23:59:59';
        //$current_time = '2015-04-21 00:00:01';
        //$start_time = '2015-04-30 00:00:01';
       // $end_time = '2015-05-30 13:05:03';
        $latitude = (float)$lat;
        $longitude = (float)$long;
        //print "<pre>";
       // print_r($assigned_driver);
       // exit;
        if (UNIT == 0) {
            //Get result In kilo meters
            $geonear = ['$geoNear'=> ['near' => [
                    'type' => "Point",
                    'coordinates' => [ $longitude , $latitude ]
                    ],
                    'distanceField' => "distance",
                    'spherical' => true,
                    'distanceMultiplier' => 0.001,
                    'num' => 1000000
                ]
            ];
        } else {
            //Get the result In Miles
            $geonear = ['$geoNear'=> ['near' => [
                    'type' => "Point",
                    'coordinates' => [ $longitude , $latitude ]
                    ],
                    'distanceField' => "distance",
                    'spherical' => true,
                    'distanceMultiplier' => 0.000621371192237,
                    'num' => 1000000
                ]
            ];
        }
        if($driver_list != ''){
$mat['updatetime_difference'] = [ '$lte' => (int)LOCATIONUPDATESECONDS];
             $mat['tmap.mapping_status'] = 'A';
             if( $airport == 1 )
                 $mat['taxi.taxi_model'] = $taxi_model;
             
        $arguments = [
            $geonear,
            ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => "_id",
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            ['$unwind' => '$people'],
            ['$project' => ["_id" => 1,
                "distance" => '$distance',
                'update_date' => '$update_date',
                "shift_status" => '$shift_status',
                "status" => '$status',
                "people" => 1,
               // "updatetime_difference" => array('$subtract' =>array(new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),'$update_date'))
                'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000),'$update_date']], 1000]],
                ]
            ],
            /*array('$match' => array(
                    "distance" => array('$lte' => (int)DEFAULTMILE),
                    "people.login_status" => 'S',
                    "shift_status" => "IN",
                    "status" => "F",
                    '_id'=>array('$in'=>$driver_list)
                )
            ),*/            
            ['$lookup' => [
                    'from' => MDB_TAXI_DRIVER_MAPPING,
                    'localField' => "_id",
                    'foreignField' => "mapping_driverid",
                    'as' => "tmap"
                ]
            ],
            ['$unwind' => '$tmap'],
            ['$lookup' => [
                    'from' => MDB_TAXI,
                    'localField' => "tmap.mapping_taxiid",
                    'foreignField' => "_id",
                    'as' => "taxi"
                 ]
            ],
            ['$unwind' => '$taxi'],
            ['$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",
                    'foreignField' => "_id",
                    'as' => "model"
                ]
            ],
            ['$unwind' => '$model'],
            ['$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => "tmap.mapping_companyid",
                    'foreignField' => "_id",
                    'as' => "comp"
                ]
            ],
            ['$unwind' => '$comp'],
            ['$match' => $mat
            ],
            $match_query,
            ['$sort' => ['distance' =>-1]],

            ['$group' => ["_id" => [
                        "distance" => '$distance',
                        "distance_miles" => '$distance',
                        "update_date" => '$update_date',
                        "shift_status" => '$shift_status',
                        "status" => '$status',
                        "name" => '$people.name',
                        "driver_id" => '$people._id',
                        "phone" => '$people.phone',
                        "updatetime_difference" => '$updatetime_difference',
                        "d_photo" => '$people.profile_picture',
                        "location" => '$location',
                        "company_name" => '$comp.companydetails.company_name',
                        "company_id" => '$comp._id',
                        "taxi_no" => '$taxi.taxi_no',
                        "taxi_image" => '$taxi.taxi_image',
                        "taxi_capacity" => '$taxi.taxi_capacity',
                        "taxi_id" => '$taxi._id',
                        "driver_model"=>'$model.model_name',
                        'driver_status' => '$status',
                        'shift_status' => '$shift_status',

                    ]
                ]
            ],
            ['$limit'=>10]
        ];
        //echo '<pre>';print_r($arguments);
        $result = $this->mongo_db->aggregate(MDB_DRIVER_INFO,$arguments);
        //print_r($result);exit;
        return (!empty($result['result']))?$result['result']:[];
        }
        return [];
        
    }
    public function check_driver_booking_limit($driver_id,$book_limit)
    {
        $current_time      = convert_timezone('now', TIMEZONE);
        $current_date      = explode(' ', $current_time);
        $start_time        = $current_date[0] . ' 00:00:01';
        $end_time          = $current_date[0] . ' 23:59:59';
        $arguments = [
            [
					'$lookup' => [
					'from'=>MDB_PEOPLE,
					'localField'=> "driver_id",
					'foreignField' => "_id",
					'as'=> "people"
				]
			],
            ['$unwind' => '$people'],
            ['$match' => [
                'createdate' => ['$gte' => '2015-04-21 00:00:01'], //$start_time
                'travel_status' => 1,
                'booking_from' => ['$ne'=>2],
                'driver_id' => (int)$driver_id]
            ],
            ['$group' => ['_id'=>0,'count' => ['$sum'=>1]]]
        ];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);
        //echo '<pre>';print_r($result);exit;
        $booking_limit = (!empty($result['result'][0]))?$result['result'][0]['count']:0;
        return ($booking_limit!=0) ? ($book_limit > $booking_limit) ? 1 : 0 : 0;
    }
    public function free_availabletaxisearch_list($motor_company = '', $motor_model = '', $company_id = '')
    {
        $current_time      = convert_timezone('now', TIMEZONE);
        $current_date      = explode(' ', $current_time);
        $start_time        = $current_date[0] . ' 00:00:01';
        $end_time          = $current_date[0] . ' 23:59:59';
        //$current_time = '2015-04-21 00:00:01';
        //$start_time = '2015-04-30 00:00:01';
        //$end_time = '2015-05-30 13:05:03';
        $match_query = [];
        if (isset($motor_company) && $motor_company != '') {
            $match_query['taxi_type'] = 1;
        }
        if (isset($motor_model) && ($motor_model != '')) {
           $match_query['taxi_model'] =(int)$motor_model; // AS PER NEXT MODEL CHOSEN
        }        
        if ($company_id != "" && $company_id != 0) {
            $match_query['mapping.mapping_companyid'] = (int)$company_id;
            $match_query['people.company_id'] = (int)$company_id;
            $match_query['taxi_company'] = (int)$company_id;
        }
        $match_query['taxi_status'] = 'A';
        $match_query['taxi_availability'] = 'A';
        $match_query['people.status'] = 'A';
        $match_query['people.availability_status'] = 'A';
        $match_query['mapping.mapping_status'] = 'A';
        //$match_query['mapping.mapping_startdate'] = array('$lte'=>$current_time);
        //$match_query['mapping.mapping_enddate'] = array('$gte'=>$current_time);
        $match_query['company.companydetails.company_status'] = 'A';
        //$match_query['driverinfo.status'] = 'F';
        //$match_query['driverinfo.shift_status'] = 'IN';
        
        
         $check_pass_log = $this->mongo_db->count(MDB_PASSENGERS_LOGS);//exit;
        if($check_pass_log > 0 ){
			
			$match['people.booking_limit'] = ['$gt' => $this->mongo_db->count(MDB_PASSENGERS_LOGS,['createdate'=>[
									'$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)],
									//'driver_id'=>'people._id',
									'travel_status'=>1,
									'booking_from' => ['$ne'=>2]])];
			}
        //$match_query['report.check_package_type'] = 'T';
        //$match_query['report.upgrade_expirydate'] = array('$gte'=>$current_time);
        //$match_query['people.booking_limit'] = array('$gt' => $this->mongo_db->count(MDB_PASSENGERS_LOGS,array('createdate'=>array('$gte'=>$start_time),'driver_id'=>'people._id','travel_status'=>0)));
        //echo '<pre>';print_r($match_query);
        $ops = [
            [
                '$lookup' => [
                    'from'=>MDB_COMPANY,
                    'localField'=> "taxi_company",
                    'foreignField' => "_id",
                    'as'=> "company"
                ]
            ],
            ['$unwind' => '$company'],
            [
                '$lookup' => [
                    'from'=>MDB_TAXI_DRIVER_MAPPING,
                    'localField'=> "_id",
                    'foreignField' => "mapping_taxiid",
                    'as'=> "mapping"
                ]
            ],
            ['$unwind' => '$mapping'],
            /*
            array(
                '$lookup' => array(
                    'from'=>MDB_PACKAGE_REPORT,
                    'localField'=> "upgrade_companyid",
                    'foreignField' => "taxi_company",
                    'as'=> "report"
                )
            ),
            array('$unwind' => '$report'),
            */
            [
                '$lookup' => [
                    'from'=>MDB_PEOPLE,
                    'localField'=> "mapping.mapping_driverid",
                    'foreignField' => "_id",
                    'as'=> "people"
                ]
            ],
			/*array('$lookup'=>array(
		'from'=>'driver_driverinfo',
		'localField'=>"mapping.mapping_driverid",
		'foreignField'=>"_id",
		 'as'=>"driverinfo"        
	)),
	array('$unwind'=>'$driverinfo'),*/
            ['$project' => [
                'taxi_status' => 1,
                'taxi_availability' => 1,
                'taxi_company' => 1,
                'taxi_model' => 1,
                'taxi_type' => 1,
                'driver_id' => '$mapping.mapping_driverid',
                'company' => 1,
                'mapping' => 1,
                'report' => 1,
                'people' => 1,
                'people' => ['$cond' => [['$eq'=>[['$size'=>'$people'],0]],null,'$people']]
                ]
            ],
            ['$unwind'=>'$people'],
            ['$match' => $match_query],
            ['$group'=>["_id"=>["taxi_id"=>'$_id',
                        "id"=>'$people._id',
                        //"check_package_type" => '$report.check_package_type',
                        //"upgrade_expirydate" => '$report.upgrade_expirydate',
                        "booking_limit" => '$people.booking_limit'
                    ],
                ]
            ],
            ['$sort'=>['_id.id'=>1]],
        ];
        //echo '<pre>';print_r($ops);
        $result = $this->mongo_db->aggregate(MDB_TAXI,$ops);
       //echo '<pre>';print_r($result);exit;
        return (!empty($result))?$result['result']:[];
    }
    public function create_logs($booking_logid = '', $company_id = '', $log_userid = '', $log_message = '', $log_booking = '')
    {
        $current_time = $this->company_current_time;        
        //MongoDB
        $log_data = [
            'log_userid' => (int)$log_userid,
            'log_message' => $log_message,
            'log_booking' => $log_booking,
            'log_createdate' => $current_time
        ];
        $log_array = ["logs" =>$log_data ];
        $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$booking_logid],['$push'=>$log_array],['upsert'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function get_taxi_model()
    {
        $sql    = "SELECT model_id,model_name FROM " . MOTORMODEL . " WHERE model_status = 'A'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return $result;
    }
    public function get_active_company_details()
    {
        //MongoDB
         $arguments = [
            [
                '$match' => ['companydetails.company_status'=>'A']
            ],
            [
                '$project' => ['cid'=>'$_id','company_name'=>'$companydetails.company_name'] 
            ],
            ['$sort'=>['companydetails.company_name'=>1]]
        ];
        $result          = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
        //echo "<pre>";print_r($result['result']);exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    /** to get company name from company id **/
    public function get_company_name($cid)
    {
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$cid],['companydetails.company_name']);
        return (!empty($result))?$result['companydetails']['company_name']:"";
    }
    public function get_driver_sequence_list($trip_id)
    {
        $sql    = "SELECT trip_id,total_drivers FROM " . DRIVER_REQUEST_DETAILS . " WHERE trip_id IN($trip_id) ";
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return "";
        }
    }
    public function get_selected_driver_sequence_list($driver_ids, $trip_id)
    {
        if ($driver_ids != "") {
            $sql             = "SELECT id,name FROM " . PEOPLE . " WHERE id IN(" . $driver_ids . ")";
            //echo $sql;exit;
            $result          = Db::query(Database::SELECT, $sql)->execute()->as_array();
            $selected_driver = $this->get_selected_driver_list($trip_id);
            //echo $selected_driver;exit;
            if (count($result) > 0) {
                $op = [];
                foreach ($result as $val) {
                    $driver_id        = $val['id'];
                    $driver_name      = $val['name'];
                    $rejected_drivers = $this->get_rejected_drivers_list($trip_id, $driver_id);
                    $color            = "black";
                    if ($driver_id == $selected_driver) {
                        $color = "Green";
                    } elseif ($driver_id == $rejected_drivers) {
                        $color = "Red";
                    }
                    $op[] .= "<span style=color:" . $color . ";>" . $driver_name . "</span><br>";
                }
                if ($op != NULL) {
                    $output = implode(" ", $op);
                }
                return $output;
            } else {
                return "";
            }
        } else {
            return "";
        }
    }
    public function get_selected_driver_list($trip_id)
    {
        $sql    = "SELECT selected_driver,rejected_timeout_drivers FROM " . DRIVER_REQUEST_DETAILS . " WHERE trip_id=$trip_id ";
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['selected_driver'];
        } else {
            return "";
        }
    }
    public function get_rejected_drivers_list($trip_id, $driver_id)
    {
        $sql    = "SELECT rejected_timeout_drivers FROM " . DRIVER_REQUEST_DETAILS . " WHERE trip_id=$trip_id
				AND rejected_timeout_drivers IN($driver_id)";
        //echo $sql;exit;
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($result) > 0) {
            return $driver_id;
        } else {
            return "";
        }
    }
    public function cancelbooking_logid($data)
    {
        $log_id = trim($data['pass_logid']);
        $cancel_reason = trim($data['reason']);
        $selectresult = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,['_id'=>(int)$log_id],['travel_status','now_after','passengers_id','driver_id']);
       
        if (!empty($selectresult) && count($selectresult)>0) {
            if ($selectresult['travel_status'] != '5' || $selectresult['travel_status'] != '2') {
                $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$log_id],['$set'=>['travel_status'=>8,'cancel_reason'=>$cancel_reason]],['upsert'=>true]);
                /*$request_result = $this->mongo_db->find_one(MDB_REQUEST_HISTORY,array('_id' => (int)$log_id),array('_id'));
                if(count($request_result) == 0)
                {
                    $updateresult = $this->mongo_db->update(MDB_REQUEST_HISTORY,array('_id'=>(int)$log_id),array('$set'=>array('status'=>20)),array('upsert'=>true));
                }*/


                $complete_result = $this->mongo_db->find_one(MDB_PASSENGERSLOGS_CANCELLED,['_id' => (int)$log_id],['_id']);

                if(!empty($complete_result)){
                    //return;
                } 
                else {

                        //Move the data to Completed table
                        $match = ['_id' => (int)$log_id, 'moved' => ['$ne' => 1]];
                        $fetch_result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,$match,[]);

                        if(!empty($fetch_result))
                        {

                            $insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_CANCELLED,$fetch_result);

                            $set_query = [
                            'moved' => 1,
                            ];
                            $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id' => (int)$log_id],[ '$set'=> $set_query ]);

                        }

                        //return;
                }
                        
                        


                $get_passenger_log_det = $this->get_passenger_log_detail($log_id);
                
                //////Push Notification for Dispatcher Cancel////////
                $p_device_token    = $get_passenger_log_det[0]['passenger_device_token'];
                $p_device_type     = $get_passenger_log_det[0]['passenger_device_type'];
                $app_ver           = isset($get_passenger_log_det[0]['app_ver']) ? $get_passenger_log_det[0]['app_ver'] : "";
                $title 			   = __('dispatcher_trip_cancelled');
								
				$pushmessage    = [
								"message" => $title, 
								"trip_id" => "",
								"app_ver"=>$app_ver,
								"status" => 17
							];			
                //Kumaresh comment this for client request             	
				//$p_send_notification = $this->api_model->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api,$title);
                //Kumaresh comment this for client request 
                //////Push Notification for Dispatcher Cancel////////        
                        
                if (SMS == 1) {
                    $passenger_phone       = isset($get_passenger_log_det[0]['passenger_phone']) ? $get_passenger_log_det[0]['passenger_phone'] : "";
                    if ($passenger_phone != "") {
                        $to              = $passenger_phone;
                        $message_details = $this->commonmodel->sms_message('6');
                        $message_temp    = $message_details['sms_description'];
                        $sms_message     = str_replace([
                            "##SITE_NAME##",
                            "##BOOKING_KEY##"
                        ], [
                            SITE_NAME,
                            $log_id
                        ], $message_temp);
                        //Kumaresh comment this for client request 
                         //$this->api_model->sendSMS($to, $sms_message);
                        //Kumaresh comment this for client request  
                    }
                }
                return 1;
            }
            return 0;
        }
        return 0;
    }
    public function get_passenger_log_detail($passengerlog_id = "")
    {        
        $ops = [
            ['$match' => ['_id'=>(int)$passengerlog_id]],
            [
                '$lookup' => [
                'from'=>MDB_PASSENGERS,
                'localField'=> "passengers_id",
                'foreignField' => "_id",
                'as'=> "passengers"
                ]
            ],
            ['$unwind'=>'$passengers'],
            [
                '$project' => [
                    '_id' => 0,
                    'passenger_phone'=> ['$concat'=>['$passengers.country_code','','$passengers.phone']],
                    'pickup_time'=>'$pickup_time',
                    'travel_status'=>'$travel_status',
                    "passenger_device_id"=>'$passengers.device_id',
                    "passenger_device_token"=>'$passengers.device_token',
                    "passenger_device_type"=>'$passengers.device_type',
					"app_ver"=>'$app_ver'
                ]
            ]
        ];
        $results = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$ops);
        return (!empty($results['result']))?$results['result']:[];
    }
    public function send_sms($to = '', $message = '')
    {
        require_once(DOCROOT . 'application/vendor/smsgateway/Services/Twilio.php');
        $sid   = SMS_ACCOUNT_ID; // Your Account SID from www.twilio.com/user/account
        $token = SMS_AUTH_TOKEN; // Your Auth Token from www.twilio.com/user/account
        try {
            $country_res = DB::select()->from(COUNTRY)->where('default', '=', '1')->execute()->as_array();
            $to          = $country_res[0]['telephone_code'] . $to;
            $client      = new Services_Twilio($sid, $token);
            $res         = $client->account->messages->sendMessage(SMS_FROM_NUMBER, // From a valid Twilio number
                $to, // Text this number
                $message);
        }
        catch (Exception $e) {
        }
    }
    public function check_driver_has_trip_request($driver_id)
    {
        $two_days_before = date('Y-m-d 00:00:01', strtotime("-2 days"));
        /*$sql             = "SELECT count(passengers_log_id) as trip_count FROM " . PASSENGERS_LOG . " WHERE (travel_status='2' or travel_status='3' or travel_status='5') and `driver_reply`='A' and driver_id='$driver_id' and dispatch_time >= '$two_days_before'";
        $trip_count      = Db::query(Database::SELECT, $sql)->execute()->get('trip_count');
        return ($trip_count > 0) ? $trip_count : 0;*/
        
        //MongoDB
        $srch_query = [ "\$and" => [['driver_reply'=>'A','driver_id'=>(int)$driver_id,'dispatch_time'=>['$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)]],["\$or"=>[[ 'travel_status' => ['$in' => [2,3,5,9] ]] ] ] ] ];
        $result = $this->mongo_db->count(MDB_PASSENGERS_LOGS,$srch_query);
        return $result;
    }
    public function currently_driver_has_trip_request($driver_id)
    {
        $two_minutes_before = date('Y-m-d H:i:s', strtotime("-2 minutes"));
        /*$sql                = "SELECT count(trip_id) as trip_count FROM " . DRIVER_REQUEST_DETAILS . " WHERE status='1' and selected_driver='$driver_id' and createdate >='$two_minutes_before' ORDER BY trip_id DESC";
        $trip_count         = Db::query(Database::SELECT, $sql)->execute()->get('trip_count');
        return ($trip_count > 0) ? $trip_count : 0;*/
    
        //MongoDB
        $srch_query = ['status'=>1,'selected_driver'=>(int)$driver_id,'createdate'=>['$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($two_minutes_before) * 1000)]];
        $result = $this->mongo_db->count(MDB_REQUEST_HISTORY,$srch_query);
        return $result;
    }
    public function get_driver_list_with_status_old($array, $company_id, $usertype)
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
            $result          = $this->mongo_db->find_one(MDB_COMPANY, [
                '_id' => (int) $company_id
            ], [
                'companydetails.time_zone'
            ]);
            $timezone_fetch = isset($result['companydetails']['time_zone']) ? $result['companydetails']['time_zone'] : "";
            if ($timezone_fetch != '') {
                $current_time = convert_timezone('now', $timezone_fetch);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        // print_r($array);exit;
        $driver_status                   = isset($array['driver_status']) ? $array['driver_status'] : "";
        $taxi_company                    = isset($array['taxi_company']) ? $array['taxi_company'] : "";
        $taxi_model                      = isset($array['taxi_model']) ? $array['taxi_model'] : "";
        $match_query                     = [];
        $match_query['people.user_type'] = 'D';
        $match_query['people.status']    = 'A';
        if ($driver_status == 'A' || $driver_status == 'F') {
            $match_query['status']       = $driver_status;
            $match_query['shift_status'] = 'IN';
        } elseif ($driver_status == 'OUT') {
            $match_query['status']       = 'F';
            $match_query['shift_status'] = $driver_status;
        }
        $company_current_time = $this->company_current_time;
        if ($usertype != 'A') {
           // $match_query['people.company_id'] = (int) $company_id;
        } else if ($usertype == 'A' && $taxi_company != "" && $taxi_company != 0) {
            $match_query['people.company_id'] = (int) $taxi_company;
        }
        if ($taxi_model != '') {
             //$match_query['taxi_driver_mapping.mapping_status'] = 'A';
            $match_query['taxi.taxi_model']                     = (int) $taxi_model;
           // $match_query['updatetime_difference'] = array('$lte'=>(int)LOCATIONUPDATESECONDS );
            $arguments = [[
                    '$match' => $match_query
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => '_id',
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_TAXI_DRIVER_MAPPING,
                        'localField' => '_id',
                        'foreignField' => "mapping_driverid",
                        'as' => "taxi_driver_mapping"
                    ]
                ],
                [
                    '$unwind' => '$taxi_driver_mapping'
                ],

                ['$match' => ['taxi_driver_mapping.mapping_status'=>'A']],

                [
                    '$lookup' => [
                        'from' => MDB_TAXI,
                        'localField' => 'taxi_driver_mapping.mapping_taxiid',
                        'foreignField' => "_id",
                        'as' => "taxi"
                    ]
                ],
                [
                    '$unwind' => '$taxi'
                ],
                ['$match' => ['taxi.taxi_model'=>(int) $taxi_model]],
                  ['$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",          
                    'foreignField' => "_id",
                    'as' => "model"
                ]
            ],
            ['$unwind' => '$model'],
                [
                    '$project' => [
                        'driver_id' => '$people._id',
                        'name' => '$people.name',
                        'driver_code' => '$people.driver_code',
                        'taxi_no' => '$taxi.taxi_no',
                        'driver_status' => '$status',
                        'loc' => '$loc.coordinates',
                        'shift_status' => '$shift_status',
                        'gps_enable' => ['$ifNull'=>['$gps_enable',1]],
                        'update_date' => '$update_date',
                        'model_name'=>'$model.model_name',
                        'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$update_date']], 1000]],
                    ]
                ],
               //array('$match' => array('updatetime_difference'=>array('$lte'=>(int)LOCATIONUPDATESECONDS ))),

                
            ];
        } else {
            $arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => '_id',
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                 [
                    '$lookup' => [
                        'from' => MDB_TAXI_DRIVER_MAPPING,
                        'localField' => '_id',
                        'foreignField' => "mapping_driverid",
                        'as' => "taxi_driver_mapping"
                    ]
                ],
                [
                    '$unwind' => '$taxi_driver_mapping'
                ],
                ['$match' => ['taxi_driver_mapping.mapping_status'=>'A']],

                [
                    '$lookup' => [
                        'from' => MDB_TAXI,
                        'localField' => 'taxi_driver_mapping.mapping_taxiid',
                        'foreignField' => "_id",
                        'as' => "taxi"
                    ]
                ],
                [
                    '$unwind' => '$taxi'
                ],
        //        array('$match' => array('taxi.taxi_model'=>(int) $taxi_model)),
                  ['$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",          
                    'foreignField' => "_id",
                    'as' => "model"
                ]
            ],
            ['$unwind' => '$model'],
               [
                    '$match' => $match_query
                ],
                [
                    '$project' => [
                        'driver_id' => '$people._id',
                        'name' => '$people.name',
                        'driver_code' => '$people.driver_code',
                        'taxi_no' => '$taxi.taxi_no',
                        'driver_status' => '$status',
                        'loc' => '$loc.coordinates',
                        'shift_status' => '$shift_status',
                        'gps_enable' => ['$ifNull'=>['$gps_enable',1]],
                         'model_name'=>'$model.model_name',
                        'update_date' => '$update_date',
                        'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$update_date']], 1000]],
                    ]
                ],
               // array('$match' => array('updatetime_difference'=>array('$lte'=>(int)LOCATIONUPDATESECONDS )))
            ];
        }
            
        //echo "<pre>"; print_r($arguments);
        $result = $this->mongo_db->aggregate(MDB_DRIVER_INFO, $arguments);
       // echo "<pre>"; print_r($result); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }

    public function get_driver_list_with_status($array, $company_id, $usertype)
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
            $result          = $this->mongo_db->find_one(MDB_COMPANY, [
                '_id' => (int) $company_id
            ], [
                'companydetails.time_zone'
            ]);
            $timezone_fetch = isset($result['companydetails']['time_zone']) ? $result['companydetails']['time_zone'] : "";
            if ($timezone_fetch != '') {
                $current_time = convert_timezone('now', $timezone_fetch);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
            }
        }
        // print_r($array);exit;
        $driver_status                   = isset($array['driver_status']) ? $array['driver_status'] : "";
        $taxi_company                    = isset($array['taxi_company']) ? $array['taxi_company'] : "";
        $taxi_model                      = isset($array['taxi_model']) ? $array['taxi_model'] : "";
        $match_query                     = [];
        $match_query['user_type'] = 'D';
        $match_query['status']    = 'A';
        if ($driver_status == 'A' || $driver_status == 'F') {
            $match_query['driver_driverinfo.status']       = $driver_status;
            $match_query['driver_driverinfo.shift_status'] = 'IN';
        } elseif ($driver_status == 'OUT') {
            $match_query['driver_driverinfo.status']       = 'F';
            $match_query['driver_driverinfo.shift_status'] = $driver_status;
        }
        $company_current_time = $this->company_current_time;
        if ($usertype != 'A') {
           // $match_query['people.company_id'] = (int) $company_id;
        } else if ($usertype == 'A' && $taxi_company != "" && $taxi_company != 0) {
            $match_query['company_id'] = (int) $taxi_company;
        }
        if ($taxi_model != '') {
             //$match_query['taxi_driver_mapping.mapping_status'] = 'A';
            $match_query['taxi.taxi_model']                     = (int) $taxi_model;
           // $match_query['updatetime_difference'] = array('$lte'=>(int)LOCATIONUPDATESECONDS );
            $arguments = [[
                    '$match' => $match_query
                ],
                [
                    '$lookup' => [
                        'from' => MDB_DRIVER_INFO,
                        'localField' => '_id',
                        'foreignField' => "_id",
                        'as' => "driver_driverinfo"
                    ]
                ],
                [
                    '$unwind' => '$driver_driverinfo'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_TAXI_DRIVER_MAPPING,
                        'localField' => '_id',
                        'foreignField' => "mapping_driverid",
                        'as' => "taxi_driver_mapping"
                    ]
                ],
                [
                    '$unwind' => '$taxi_driver_mapping'
                ],

                ['$match' => ['taxi_driver_mapping.mapping_status'=>'A']],

                [
                    '$lookup' => [
                        'from' => MDB_TAXI,
                        'localField' => 'taxi_driver_mapping.mapping_taxiid',
                        'foreignField' => "_id",
                        'as' => "taxi"
                    ]
                ],
                [
                    '$unwind' => '$taxi'
                ],
                ['$match' => ['taxi.taxi_model'=>(int) $taxi_model]],
                  ['$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",          
                    'foreignField' => "_id",
                    'as' => "model"
                ]
            ],
            ['$unwind' => '$model'],
                [
                    '$project' => [
                        'driver_id' => '$_id',
                        'name' => '$name',
                        'driver_code' => '$driver_code',
                        'taxi_no' => '$taxi.taxi_no',
                        'driver_status' => '$driver_driverinfo.status',
                        'loc' => '$driver_driverinfo.loc.coordinates',
                        'shift_status' => '$driver_driverinfo.shift_status',
                        'gps_enable' => ['$ifNull'=>['$driver_driverinfo.gps_enable',1]],
                        'update_date' => '$driver_driverinfo.update_date',
                        'model_name'=>'$model.model_name',
                        'trip_remaining_time'=>['$ifNull'=>['$driver_driverinfo.trip_remaining_time',0]],
                        'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver_driverinfo.update_date']], 1000]],
                    ]
                ],
               //array('$match' => array('updatetime_difference'=>array('$lte'=>(int)LOCATIONUPDATESECONDS ))),

                
            ];
        } else {
            $arguments = [
                [
                    '$match' => $match_query
                ],
                [
                    '$lookup' => [
                        'from' => MDB_DRIVER_INFO,
                        'localField' => '_id',
                        'foreignField' => "_id",
                        'as' => "driver_driverinfo"
                    ]
                ],
                [
                    '$unwind' => '$driver_driverinfo'
                ],
                 [
                    '$lookup' => [
                        'from' => MDB_TAXI_DRIVER_MAPPING,
                        'localField' => '_id',
                        'foreignField' => "mapping_driverid",
                        'as' => "taxi_driver_mapping"
                    ]
                ],
                [
                    '$unwind' => '$taxi_driver_mapping'
                ],
                ['$match' => ['taxi_driver_mapping.mapping_status'=>'A']],

                [
                    '$lookup' => [
                        'from' => MDB_TAXI,
                        'localField' => 'taxi_driver_mapping.mapping_taxiid',
                        'foreignField' => "_id",
                        'as' => "taxi"
                    ]
                ],
                [
                    '$unwind' => '$taxi'
                ],
        //        array('$match' => array('taxi.taxi_model'=>(int) $taxi_model)),
                  ['$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",          
                    'foreignField' => "_id",
                    'as' => "model"
                ]
            ],
            ['$unwind' => '$model'],               
            [
                    '$project' => [
                        'driver_id' => '$_id',
                        'name' => '$name',
                        'driver_code' => '$driver_code',
                        'taxi_no' => '$taxi.taxi_no',
                        'driver_status' => '$driver_driverinfo.status',
                        'loc' => '$driver_driverinfo.loc.coordinates',
                        'shift_status' => '$driver_driverinfo.shift_status',
                        'gps_enable' => ['$ifNull'=>['$gps_enable',1]],
                         'model_name'=>'$model.model_name',
                        'update_date' => '$driver_driverinfo.update_date',
                        'update_date' => '$driver_driverinfo.update_date',
                        'trip_remaining_time'=>['$ifNull'=>['$driver_driverinfo.trip_remaining_time',0]],
                        'updatetime_difference' =>  [ '$divide' => [ ['$subtract' =>[new \MongoDB\BSON\UTCDateTime(strtotime($company_current_time) * 1000),'$driver_driverinfo.update_date']], 1000]],
                    ]
                ],
               // array('$match' => array('updatetime_difference'=>array('$lte'=>(int)LOCATIONUPDATESECONDS )))
            ];
        }
            
        //echo "<pre>"; print_r($arguments);
        $result = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
       // echo "<pre>"; print_r($result); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }

    /* public function get_driver_list_with_status( $array )
    {
    $company_id ="";
    if ( $company_id == '' ) {
    if ( TIMEZONE ) {
    $current_time = convert_timezone( 'now', TIMEZONE );
    $current_date = explode( ' ', $current_time );
    $start_time   = $current_date[ 0 ] . ' 00:00:01';
    $end_time     = $current_date[ 0 ] . ' 23:59:59';
    $date         = $current_date[ 0 ] . ' %';
    } else {
    $current_time = date( 'Y-m-d H:i:s' );
    $start_time   = date( 'Y-m-d' ) . ' 00:00:01';
    $end_time     = date( 'Y-m-d' ) . ' 23:59:59';
    $date         = date( 'Y-m-d %' );
    }
    } else {
    $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
    $timezone_fetch      = Db::query( Database::SELECT, $timezone_base_query )->execute()->as_array();
    
    if ( $timezone_fetch [0]['time_zone'] != '' ) {
    $current_time = convert_timezone( 'now', $timezone_fetch [0]['time_zone'] );
    $current_date = explode( ' ', $current_time );
    $start_time   = $current_date[ 0 ] . ' 00:00:01';
    $end_time     = $current_date[ 0 ] . ' 23:59:59';
    } else {
    $current_time = date( 'Y-m-d H:i:s' );
    $start_time   = date( 'Y-m-d' ) . ' 00:00:01';
    $end_time     = date( 'Y-m-d' ) . ' 23:59:59';
    }
    }
    //print_r($array);exit;
    $driver_status = isset( $array[ 'driver_status' ] ) ? $array[ 'driver_status' ] : "";
    $taxi_company  = isset( $array[ 'taxi_company' ] ) ? $array[ 'taxi_company' ] : "";
    $taxi_model    = isset( $array[ 'taxi_model' ] ) ? $array[ 'taxi_model' ] : "";
    
    $where_cond    = "";
    if ( $driver_status == 'A' || $driver_status == 'F' ) {
    $where_cond .= "AND list.status='$driver_status' AND list.shift_status='IN'";
    } elseif ( $driver_status == 'OUT' ) {
    $where_cond .= "AND list.status='F' AND list.shift_status='$driver_status'";
    }
    $usertype             = $this->usertype;
    $company_id           = $this->company_id;
    $company_current_time = $this->company_current_time;
    $company_where        = "";
    if ( $usertype != 'A' ) {
    $company_where = "AND people.company_id =  '" . $company_id . "'";
    } else if ( $usertype == 'A' && $taxi_company != "" && $taxi_company != 0 ) {
    $company_where = "AND people.company_id =  '" . $taxi_company . "'";
    }
    $taxi_join       = '';
    $taxi_model_cond = '';
    if ( $taxi_model != '' ) {
    $taxi_join       = "JOIN taxi_driver_mapping ON taxi_driver_mapping.mapping_driverid = list.driver_id JOIN taxi ON taxi.taxi_id = taxi_driver_mapping.mapping_taxiid";
    $taxi_model_cond = " AND taxi.taxi_model='" . $taxi_model . "'  AND  taxi_driver_mapping.mapping_enddate >= '$current_time' ";
    }
    $query  = "SELECT people.id as driver_id,people.name, list.status AS driver_status, list.update_date as update_date,list.latitude as latitude, list.longitude as longitude,list.shift_status as shift_status, list.updatetime_difference AS updatetime_difference FROM (SELECT * , (TIME_TO_SEC( TIMEDIFF('" . $company_current_time . "', driver.update_date) )) AS updatetime_difference FROM driver) AS list JOIN people ON people.id = list.driver_id $taxi_join WHERE people.user_type =  'D' AND people.status =  'A' $where_cond $company_where $taxi_model_cond AND updatetime_difference <=  '" . LOCATIONUPDATESECONDS . "'";
    //company id checked for users who are not admin
    $result = Db::query( Database::SELECT, $query )->execute()->as_array();
    return $result;
    }*/
    public function dispatcher_booking_list($array)
    {
        $usertype = isset($this->usertype)?$this->usertype:'';
        
        $travel_status                = $array['travel_status'];
        $driver_reply_cancel          = $array['driver_reply_cancel'];
        $manage_status                = $array['manage_status'];
        $taxi_company                 = $array['taxi_company'];
       /* $current_time_hour            = (int)date('H', strtotime($array['current_time']));
        if($current_time_hour > 5)
        {
        $date                         = date('Y-m-d', strtotime($array['current_time']));
        $end_date                     = date('Y-m-d', strtotime($array['current_time'].'+1 day'));
        }
        else
        {
        $date                         = date('Y-m-d', strtotime($array['current_time'].'-1 day'));
        $end_date                     = date('Y-m-d', strtotime($array['current_time']));   
        }
        $currentdate                  = $date . ' 05:00:01';
        $enddate                      = $end_date . ' 05:00:00';*/
        //existing functionality
        $date                         = date('Y-m-d', strtotime($array['current_time']));
        $currentdate                  = $date . ' 00:00:00';
        $enddate                      = $date . ' 23:59:59';

        $status_query                 = "";
        $travel_status                = Commonfunction::mongo_format_array(explode(",", $travel_status));
        $two_days_before              = date( 'Y-m-d 00:00:00', strtotime( $date . ' 0 day' ) );
        $match_array                  = [];

        if($usertype == 'O'){
            $match_array['user_type']        = 'O';
            $match_array['operator_id']      = $this->userid;
        }
        //$match_array['bookby']        = 2;
        $match_array['travel_status'] = [
            '$in' => $travel_status
        ];
        /*Filter Book Type Search --Starts */
        if( isset($array['book_type']) && $array['book_type'] != 'undefined')
        {
            if($array['book_type'] == __('airport'))
            {
                $match_array['airport_pickup'] = 1;
            }
            else
            {
                $match_array['book_type'] = $array['book_type'];
                $match_array['airport_pickup'] = '';
            }
        }
        /*Filter Book Type Search --Ends*/
        if ($taxi_company != "" && $taxi_company != 0) {
            $match_array['company_id'] = (int) $taxi_company;
        }
        /*if ($driver_reply_cancel == "") {
            $match_array['driver_reply'] = array(
                '$nin' => array(
                    'C',
                    'R'
                )
            );
            $key                         = array_search('8', $travel_status);
            if (false !== $key) {
                unset($travel_status[$key]);
            }
            $match_array['travel_status'] = array(
                '$in' => $travel_status
            );
        }*/
        if ($manage_status == 0) {
            $match_array['pickup_time'] = [
                '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)
                //'$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000),
                //'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
            ];
        }
        
        //echo "<pre>";  print_r($match_array); exit;
        $arguments = [[
                '$match' => $match_array
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
                '$unwind' => ['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            [
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            /*array(
                '$lookup' => array(
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                )
            ),*/
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
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel"
                ]
            ],
            [
                '$unwind' => '$motormodel'
            ],
            [
                '$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_edit_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel_edit"
                ]
            ],
            [
                '$unwind' =>['path'=>'$motormodel_edit','preserveNullAndEmptyArrays'=>true]
            ],
            
            [
                '$project' => [
                    'pass_logid' => '$_id',
                    'company_id' => '$company_id',
                    'notes' => '$notes_driver',
                    'total_drivers' => '$driver_id',
                    'fare' => '$approx_fare',
                    'faretype' => '$payment_type',
                    'distance' => '$approx_distance',
                    'pickup_time' => '$pickup_time',
                    'booking_time'=>'$createdate',
                    'act_pickuptime' => '$actual_pickup_time',
                    'drop_time' => '$drop_time',
                    'driver_id' => '$driver_id',
                    'pickup_latitude' => '$pickup_latitude',
                    'pickup_longitude' => '$pickup_longitude',
                    'drop_latitude' => '$drop_latitude',
                    'drop_longitude' => '$drop_longitude',
                    'no_passengers' => '$no_passengers',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                    'dispatch_time' => '$dispatch_time',
                    'travel_status' => '$travel_status',
                    'driver_reply' => '$driver_reply',
                    'driver_name' => '$people.name',
                    'driver_phone' => '$people.phone',
                    'reachable_mobile' => '$people.phone',
                    'driver_code' => '$people.driver_code',
                    'passenger_name' => '$passengers.name',
                    'passenger_id' => '$passengers._id',
                    'passenger_country_code' => '$passengers.country_code',
                    'passenger_wallet_amount' => '$passengers.wallet_amount',
                    'passenger_phone' => '$passengers.phone',
                    'model_name' => '$motormodel.model_name',
                    'edit_model_name' => ['$ifNull'=>['$motormodel_edit.model_name','']],
                    //'company_name' => '$company.companydetails.company_name',
                    'book_tag' => '$book_tag',
                    'booking_key' => '$booking_key',
                    'book_type' => '$book_type',
                    'airport_pickup' => '$airport_pickup',
                    'confirm_flag' => '$confirm_flag',
                    'edit_fare'=>'$fare_detail.value',
                    'airport_flight_number'=>'$airport_flight_number',
                    'max_luggage'=>'$max_luggage',
                    'no_passengers'=>'$no_passengers',
                    'actual_distance'=>['$ifNull'=>['$distance',0]],
                    'passenger_admin_notes'=>['$ifNull'=>['$passenger_admin_notes','']],
                    'createdby_username'=>['$ifNull'=>['$createdby_username','-']],
                    // New Field //
                    'approx_distance'=>'$approx_distance',
                    'approx_duration'=>'$approx_duration',
                    'payment_type'=>['$ifNull'=>['$trans.payment_type',0]],
                    'advance_payment'=>['$ifNull'=>['$trans.advance_payment',0]],
                    'wallet_amount_used'=>['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'pending_amt'=>['$ifNull'=>['$trans.pending_amt',0]],
                    'tripfare'=>['$ifNull'=>['$trans.tripfare',0]],
                    'fare'=>['$ifNull'=>['$trans.fare',0]],
                    'driver_edit_status'=>['$ifNull'=>['$trans.driver_edit_status',0]],
                    'add_amt'=>['$ifNull'=>['$trans.add_amt',0]],
                    'actual_paid_amt'=>['$ifNull'=>['$trans.actual_paid_amt',0]],
                    'passenger_pending_amt'=>['$ifNull'=>['$trans.passenger_pending_amt',0]],
                    'forceclose_status'=>['$ifNull'=>['$forceclose_status',0]],
                    'hourly_booking'=>['$ifNull'=>['$hourly_booking',0]],
                    'hourly_booking_hrs'=>['$ifNull'=>['$hourly_booking_hrs',0]],
                    'tripDistance'=>['$ifNull'=>['$trans.distance',0]],
                    'distanceUnit'=>['$ifNull'=>['$trans.distance_unit',0]],
                    'apply_estimate_fare'=>['$ifNull'=>['$trans.apply_estimate_fare',0]],
                    // New Field //
                ]
            ],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
        ];
        //echo "<pre>"; print_r($arguments);
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
        //echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    /** to get dispatcher side trip list from passenger log table **/
    /* public function dispatcher_booking_list( $array )
    {
    //print_r($array);exit;
    //$travel_status=$array['travel_status'].",8";
    $travel_status       = $array[ 'travel_status' ];
    $driver_reply_cancel = $array[ 'driver_reply_cancel' ];
    $manage_status       = $array[ 'manage_status' ];
    $taxi_company        = $array[ 'taxi_company' ];
    //echo $travel_status."--".$driver_reply_cancel;exit;
    $date                = date( 'Y-m-d', strtotime( $array[ 'current_time' ] ) );
    $currentdate         = $date . ' 00:00:00';
    $enddate             = $date . ' 23:59:59';
    //$company_id = $this->company_id;
    $company_id          = 0;
    $company_query       = "";
    if ( $company_id != 0 ) {
    $company_query = "AND " . PASSENGERS_LOG . ".company_id='$company_id'";
    }
    $company_where = "";
    if ( $taxi_company != "" && $taxi_company != 0 ) {
    $company_where = "AND " . PASSENGERS_LOG . ".company_id='$taxi_company'";
    }
    //$date_query="AND ( pickup_time between '$currentdate' and  '$enddate' )";
    $two_days_before = date( 'Y-m-d 00:00:00',otadmin strtotime( $date . ' 0 day' ) );
    $date_query      = "";
    if ( $manage_status == 0 ) {
    $date_query = "AND pickup_time >= '$two_days_before'";
    }
    $status_query = "";
    if ( $travel_status != "" && $driver_reply_cancel == "" ) {
    $status_query = "AND driver_reply NOT IN('C','R') AND travel_status IN(" . $travel_status . ") AND travel_status NOT IN('8')";
    } else {
    $status_query = "AND travel_status IN(" . $travel_status . ")";
    }
    //$query = "SELECT company_name, passengers_log_id as pass_logid, passenger_name, driver_name, driver_phone, driver_reachable_mobile as reachable_mobile, drivers_count as total_drivers, approx_fare as fare, approx_distance as distance,pickup_time,driver_id,pickup_latitude,pickup_longitude,drop_latitude,drop_longitude,no_passengers,current_location,drop_location,dispatch_time,travel_status,driver_reply FROM ".PASSENGERS_LOG." where bookby='2' $date_query $status_query $company_where order by passengers_log_id desc";
    $query  = "SELECT " . PASSENGERS_LOG . ".company_id," . PASSENGERS_LOG . ".notes_driver as notes," . COMPANY . ".company_name as company_name, passengers_log_id as pass_logid, " . PASSENGERS . ".name as passenger_name, " . PASSENGERS . ".phone as passenger_phone, " . PASSENGERS . ".country_code as passenger_country_code, " . PEOPLE . ".name as driver_name, " . PEOPLE . ".phone as driver_phone, " . PEOPLE . ".phone as reachable_mobile, " . MOTORMODEL . ".model_name as model_name, driver_id as total_drivers, approx_fare as fare, approx_distance as distance,pickup_time,IF(" . PASSENGERS_LOG . ".actual_pickup_time = '0000-00-00 00:00:00','-'," . PASSENGERS_LOG . ".actual_pickup_time) as act_pickuptime,driver_id,pickup_latitude,pickup_longitude,drop_latitude,drop_longitude,no_passengers,current_location,drop_location,dispatch_time,travel_status,driver_reply FROM " . PASSENGERS_LOG . "  
    LEFT JOIN  " . PEOPLE . " ON (  " . PEOPLE . ".`id` =  " . PASSENGERS_LOG . ".`driver_id` )
    LEFT JOIN  " . PASSENGERS . " ON (  " . PASSENGERS . ".`id` =  " . PASSENGERS_LOG . ".`passengers_id` )
    LEFT JOIN  " . MOTORMODEL . " ON (  " . MOTORMODEL . ".`model_id` =  " . PASSENGERS_LOG . ".`taxi_modelid` )
    LEFT JOIN  " . COMPANY . " ON (  " . COMPANY . ".`cid` =  " . PASSENGERS_LOG . ".`company_id` ) where
    bookby='2' $date_query $status_query $company_where order by passengers_log_id desc";
    echo $query;
    exit;
    $result = Db::query( Database::SELECT, $query )->execute()->as_array();
    return $result;
    }*/
    public function dispatcher_booking_transaction($trip_id)
    {
        /*$query  = "SELECT distance, fare FROM " . TRANS . " where passengers_log_id=$trip_id ";
        //echo $query;exit;
        $result = Db::query( Database::SELECT, $query )->execute()->as_array();
        return $result; */
        $query  = $this->mongo_db->find(MDB_TRANSACTION, [
            'passengers_log_id' => (int) $trip_id
        ], [
            'distance',
            'fare'
        ]);
        $result = iterator_to_array($query,false);
        return (!empty($query)) ? $result : [];
    }
    public function check_driver_not_updated($driver_id)
    {
        //$sql = "SELECT count(id) as total FROM ".DRIVER." WHERE driver_id='$driver_id' and (TIME_TO_SEC(TIMEDIFF('$company_timestamp',update_date))) > 15";
        /*$sql   = "SELECT update_date  FROM " . DRIVER . " WHERE driver_id='$driver_id'";
        $total = Db::query( Database::SELECT, $sql )->execute()->as_array();
        return isset( $total[ 0 ][ 'update_date' ] ) ? $total[ 0 ][ 'update_date' ] : '0';*/
        
        //MongoDB
        $query  = $this->mongo_db->find(MDB_DRIVER_INFO, [
            '_id' => (int) $driver_id
        ], [
            'statusdetails.update_date'
        ]);
        $result = iterator_to_array($query);
        $result = (isset($result[$driver_id]['statusdetails'][0]['update_date'])) ? $result[$driver_id]['statusdetails'][0]['update_date'] : 0;
        return $result;
    }
    public function check_new_request_tripid($taxi_id = null, $company_id = null, $trip_id, $driver_id, $company_all_currenttimestamp, $driver_reply, $operator_id = 0)
    {
        $datetime    = explode(' ', $company_all_currenttimestamp);
        $currentdate = $datetime[0] . ' 00:00:01';
        $sql         = "SELECT trip_id,available_drivers,total_drivers,rejected_timeout_drivers FROM " . DRIVER_REQUEST_DETAILS . " WHERE trip_id='$trip_id' and selected_driver='$driver_id' and createdate >= '$currentdate' ORDER BY trip_id DESC LIMIT 0 , 1";
        $result      = Db::query(Database::SELECT, $sql)->execute()->as_array();
        //print_r($result);exit;
        //return $result;
        if (count($result) > 0) {
            //echo "1";
            if ($driver_reply != 'C') {
                //echo "here";exit;
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
                    //condition checked to null the company id and name only in admin side
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
                    $this->update_table(PASSENGERS_LOG, $update_log_array_driver, 'passengers_log_id', $trip_id);
                }
                $driver_details         = $this->get_driver_taxi($temp_driver);
                //print_r($driver_details);exit;
                $drivertaxi             = isset($driver_details[0]['mapping_taxiid']) ? $driver_details[0]['mapping_taxiid'] : $taxi_id;
                $drivercompany          = isset($driver_details[0]['mapping_companyid']) ? $driver_details[0]['mapping_companyid'] : $company_id;
                $driver_profile_details = [];
                if ($temp_driver != '') {
                    //to get the driver profile details and company name
                    $sql                    = "SELECT name,phone FROM " . PEOPLE . " WHERE id = " . $temp_driver;
                    $driver_profile_details = Db::query(Database::SELECT, $sql)->execute()->as_array();
                }
                $driver_name         = (isset($driver_profile_details[0]['name'])) ? $driver_profile_details[0]['name'] : "";
                $driver_phone        = (isset($driver_profile_details[0]['phone'])) ? $driver_profile_details[0]['phone'] : "";
                $driver_reachable_no = (isset($driver_profile_details[0]['phone'])) ? $driver_profile_details[0]['phone'] : "";
                //company Name
                $companyDets         = [];
                if ($drivercompany != '') {
                    $sql         = "SELECT company_name FROM " . COMPANY . " WHERE cid = $drivercompany ";
                    $companyDets = Db::query(Database::SELECT, $sql)->execute()->as_array();
                }
                $companyName = (count($companyDets) > 0) ? $companyDets[0]['company_name'] : "";
                //to update driver,passenger and company details
                /*if($driver_reply=="C"){
                $update_log_array=array("driver_id"=>$temp_driver,"taxi_id"=>$drivertaxi,"company_id"=>$drivercompany,"driver_reply"=>"C");
                }else{ */
                //condition checked to update the company id and name only in admin side
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
                //}
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
                    //condition checked to null the company id and name only in admin side
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
                //echo "2";exit;
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
    //Common Function for updation
    public function update_table($table, $arr, $cond1, $cond2)
    {
        $result = DB::update($table)->set($arr)->where($cond1, "=", $cond2)->execute();
        return $result;
    }
    public function get_driver_taxi($driver_id = "")
    {
        //$sql = "SELECT driver_reply,time_to_reach_passen FROM ".PASSENGERS_LOG." WHERE `passengers_log_id` = '".$passenger_log_id."'";
        $sql    = "SELECT `mapping_taxiid`,`mapping_companyid`  FROM " . TAXIMAPPING . " WHERE `mapping_driverid` = '" . $driver_id . "' and `mapping_status`='A'";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return isset($result) ? $result : '0';
    }
    public function model_details()
    {
        $company_id = $this->company_id;        
        //MongoDB
        if (FARE_SETTINGS == 2 && !empty($company_id)) {
            $arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => '_id',
                        'foreignField' => 'model_fare.model_id',
                        'as' => 'company'
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
                [
                    '$match' => ["\$and"=>[['company._id'=>(int)$company_id],['company.model_fare.fare_status'=>'A'],['model_status'=>'A']]]
                ],
                [
                    '$project' => ['_id'=>'$_id','model_id'=>'$_id','model_name'=>'$model_name'] 
                ]
            ];
            $result          = $this->mongo_db->aggregate(MDB_MOTOR_MODEL, $arguments);
			//echo "<pre>if";print_r($result['result']);exit;
            return (!empty($result['result']))?$result['result']:[];
        } else {
            $arguments = [
                [
                    '$match' => ['model_status'=>'A']
                ],
                [
                    '$project' => ['model_id'=>'$_id','model_name'=>'$model_name'] 
                ]
            ];
            $result          = $this->mongo_db->aggregate(MDB_MOTOR_MODEL, $arguments);
			//echo "<pre>else";print_r($result['result']);exit;
            return (!empty($result['result']))?$result['result']:[];
        }
    }
    public function updatebooking_logid($data)
    {
        $company_id       = $this->company_id;
        $current_datetime = $this->company_current_time;
        $userid = $this->userid;
        $duration         = '+1 minutes';
        $current_datetime = date('Y-m-d H:i:s', strtotime($duration, strtotime($current_datetime)));
        
        //MongoDB
        $updatequery = [
            'company_id' => (int)1,
            'driver_id'=>(int)$data['driver_id'],
            'taxi_id'=>(int)$data['taxi_id'],
            'travel_status'=>7,
            'driver_reply'=>'',
            'msg_status'=>'U',
            'comments' => '',
            "createdby_username"=>$this->session->get('name'),
            "operator_id"=>$userid,
            'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
        ];
        $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$data['pass_logid']],['$set'=>$updatequery],['upsert'=>true]);
        return (empty($updateresult['err']))?1:$updateresult['errmsg'];
    }
    public function get_driver_profile_details($id = "")
    {
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE,['_id' => (int)$id],['name']);
        return (!empty($result))?$result:[];
    }
    //function to get dispatch settings
    public function dispatch_settings($company_id)
    {
        $dispatch_data = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['dispatch_algorithm'=>1])->limit(1);
        //echo '<pre>';print_r(iterator_to_array($dispatch_data));exit;die();
        $companydispatch = (!empty($dispatch_data))?iterator_to_array($dispatch_data):[];
        return $companydispatch;
    }
     //function to get admin dispatch settings
    public function admin_dispatch_settings()
    {
        $dispatch_data = $this->mongo_db->find_one(MDB_SITEINFO,['_id'=>1],['labelname']);
       // echo '<pre>';print_r($dispatch_data);exit;
        $companydispatch = (!empty($dispatch_data) && isset($dispatch_data['labelname']))?$dispatch_data['labelname']:'';
        return $companydispatch;
    }
    public function directdispatch($pass_logid)
    {
        $company_id = $this->company_id;
        /** Auto Dispatch **/
        if ($pass_logid != '') {
            $booking_details   = $this->get_bookingdetails($pass_logid, $company_id);
            if(count($booking_details)>0)
            {
                $latitude          = $booking_details[0]["pickup_latitude"];
                $longitude         = $booking_details[0]["pickup_longitude"];
                $miles             = '';
                $no_passengers     = $booking_details[0]["no_passengers"];
                $taxi_fare_km      = $booking_details[0]["min_fare"];
                $taxi_model        = $booking_details[0]["taxi_modelid"];
                $taxi_type         = '';
                $maximum_luggage   = $booking_details[0]["luggage"];
                $company_id        = $booking_details[0]["company_id"];
                $cityname          = '';
                $search_driver     = '';
                $dispatch_type = 1;//for auto dispatch

                
                $taxi_edit_modelid    = isset($booking_details[0]["taxi_edit_modelid"])?$booking_details[0]["taxi_edit_modelid"]:'';
                if($taxi_edit_modelid!=''){
                    $request_taxi_model = $taxi_edit_modelid;
                }else{
                    $request_taxi_model = $taxi_model;
                }
                
                $driver_details    = $this->search_driver_location($latitude, $longitude, $miles, $no_passengers, $_REQUEST, $taxi_fare_km, $request_taxi_model, $taxi_type, $maximum_luggage, $cityname, $pass_logid, $company_id, $search_driver,$dispatch_type);
             //  print_r($driver_details); die();
                $nearest_driver    = '';
                $a                 = 1;
                $temp              = '10000';
                $prev_min_distance = '10000~0';
                $taxi_id           = '';
                $temp_driver       = 0;
                $nearest_key       = 0;
                $prev_key          = 0;
                $driver_list       = "";
                $available_drivers = "";
                $nearest_driver_id = $nearest_taxi_id = "";
                $total_count       = count($driver_details);
                if ($total_count > 0) {
                   // echo "stringcount";exit();
                    $nearest_count      = 1;
                    /*Nearest driver calculation */
                    $nearest_driver_ids = [];
                    
                    foreach ($driver_details as $key => $value) {
                        $prev_min_distance = explode('~', $prev_min_distance);
                        $prev_key          = $prev_min_distance[1];
                        $prev_min_distance = $prev_min_distance[0];
                        //to check the driver has trip already
                        $driver_has_trip   = $this->check_driver_has_trip_request($value['_id']['driver_id']);
                        $current_request   = $this->currently_driver_has_trip_request($value['_id']['driver_id']);
                        if ($driver_has_trip == 0 && $current_request == 0) {
                            $nearest_driver_ids[] = $value['_id']['driver_id'];
                            if ($nearest_count == 1) {
                                $nearest_driver_id = isset($value['_id']['driver_id']) ? $value['_id']['driver_id'] : 0;
                                $nearest_taxi_id   = isset($value['_id']['taxi_id']) ? $value['_id']['taxi_id'] : 0;
                            }
                            $nearest_count++;
                        }
                        //checking with previous minimum
                        if ($value['_id']['distance'] < $prev_min_distance) {
                        //new minimum distance
                        $nearest_key       = $key;
                        $prev_min_distance = $value['_id']['distance'] . '~' . $key;
                    } else {
                        //previous minimum
                        $nearest_key       = $prev_key;
                        $prev_min_distance = $prev_min_distance . '~' . $prev_key;
                    }
                }
                $drivers_count = count($nearest_driver_ids);
                if ($nearest_driver_ids != NULL) {
                    $nearest_driver_ids = implode(",", $nearest_driver_ids);
                }
                $miles_or_km       = round(($prev_min_distance), 2);
                $driver_away_in_km = (ceil($miles_or_km * 100) / 100);
                $current_datetime  = date('Y-m-d H:i:s');
                $duration          = '+1 minutes';
                $current_datetime  = date('Y-m-d H:i:s', strtotime($duration, strtotime($current_datetime)));
                /****** Estimated Arival *************/
                $taxi_speed        = $this->api_model->get_taxi_speed($nearest_taxi_id);
                $estimated_time    = $this->api_model->estimated_time($driver_away_in_km, $taxi_speed);
                /**************************************/
                //to get nearest driver's company id
                if (!empty($nearest_driver_id)) {
                    $driver_company_details = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$nearest_driver_id],['company_id','name','phone']);
                }
                $companyName         = (isset($driver_company_details['name'])) ? $this->get_company_name($driver_company_details['company_id']) : "";
                    $companyid           = (isset($driver_company_details['company_id'])) ? $driver_company_details['company_id'] : "";
                    $driver_name         = (isset($driver_company_details['name'])) ? $driver_company_details['name'] : "";
                    $driver_phone        = (isset($driver_company_details['phone'])) ? $driver_company_details['phone'] : "";
                    $driver_reachable_no = (isset($driver_company_details['phone'])) ? $driver_company_details['phone'] : "";
                    //condition checked to update the company id and name only in admin side
                    if ($this->usertype == 'A') {                    
                        $updatequery = ['driver_id'=>(int)$nearest_driver_id,
                            'taxi_id'=>(int) $nearest_taxi_id,
                            'company_id'=>(int)$companyid,
                            'travel_status'=>7,
                            'driver_reply'=>'',
                            'msg_status'=>'U',
                            'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000),
                            "createdby_username"=>$this->session->get('name'),
                            ];
                   } else {
                    $updatequery = ['driver_id'=>(int)$nearest_driver_id,
                        'taxi_id'=>(int)$nearest_taxi_id,
                        'travel_status'=>7,
                        'driver_reply'=>'',
                        'msg_status'=>'U',
                        'dispatch_time'=>new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000),
                        "createdby_username"=>$this->session->get('name'),
                    ];
                }
                $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$pass_logid],['$set'=>$updatequery],['upsert'=>true]);
                /* Create Log */
                $company_id   = $this->company_id;
                $userid       = $this->user_id;
                $log_message  = __('log_message_dispatched');
                $log_message  = str_replace("PASS_LOG_ID", $pass_logid, $log_message);
                $log_booking  = __('log_booking_dispatched');
                $log_booking  = str_replace("DRIVERNAME", $driver_details[0]['_id']['name'], $log_booking);
                $log_status   = $this->create_logs($pass_logid, $company_id, $userid, $log_message, $log_booking);
            ?>
				<script type="text/javascript">load_logcontent();</script>
			<?php
                $exist_request = $this->exist_request($pass_logid);
                if ($exist_request == 1) {
                    $delete_exist_request = $this->mongo_db->remove(MDB_REQUEST_HISTORY,['trip_id'=>(int)$pass_logid]);
                }

  /***** Insert the druiver details to driver request table ************/
                    $nearest_driver_ids = (!empty($nearest_driver_ids)) ? $nearest_driver_ids : '';
                    $id = $this->commonmodel->get_auto_id(MDB_REQUEST_HISTORY);
                    $insert_array       = [

                        "_id" => (int)$id,//have changed _id to trip_id
                        "trip_id" => (int)$pass_logid,//have changed _id to trip_id
                        "available_drivers" => $nearest_driver_ids,
                        "total_drivers" => $nearest_driver_ids,
                        "selected_driver" => (int)$nearest_driver_id,
                        "status" => 0,
                        "rejected_timeout_drivers" => "",
                        "createdate" => new \MongoDB\BSON\UTCDateTime(strtotime($current_datetime) * 1000)
                    ];
           //print_r($insert_array);exit;
                //Inserting to Driver Request Table
                $driver_request        = $this->mongo_db->insert(MDB_REQUEST_HISTORY, $insert_array);
                if($driver_request['ok']==1){
      // print_r($driver_request);exit;
       $this->session->set('auto_dispatch_driver_id', $nearest_driver_id);
        $this->session->set('auto_dispatch_trip_id', $pass_logid);
         $this->session->set('auto_dispatch_emit_event', true);
     }
              
                $detail             = [
                    "passenger_tripid" => $pass_logid,
                    "notification_time" => ""
                ];
                $msg                = [
                    "message" => __('api_request_confirmed_passenger'),
                    "status" => 1,
                    "detail" => $detail
                ];
                }//end of total count
            }//end of count($booking_details)
        
	}
        /** Auto Dispatch **/
        $req_result['send_mail']  = 'N';
        $req_result['pass_logid'] = $pass_logid;
        return $req_result;
    }
    public function sendSMSDispatcher($to,$message) {
		
        /*require(DOCROOT.'includes/twilio-php-master/Services/Twilio.php');
        $response = array();
        $result = $this->mongo_db->find_one(MDB_SITEINFO,array('_id'=>1),array('twilio_accout_sid','twilio_auth_token','twilio_number','default_country_code'));

        $account_sid = $result['twilio_accout_sid']; 
        $auth_token = $result['twilio_auth_token']; 
        $client = new Services_Twilio($account_sid, $auth_token);
	$findme   = '+';
        $pos = strpos($to, $findme);

        if ($pos === false) {
            $to  =  $result['default_country_code'].$to;
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
        return $response;*/
        $result = $this->mongo_db->find_one(MDB_SITEINFO,['_id'=>1],['default_country_code']);
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
        return true;		
    }

         public function confirmbooking_logid($data)
    {
        $log_id = trim($data['pass_logid']);
        $get_passenger_log_det = $this->get_passenger_log_detail($log_id);
        //echo "<pre>";print_r($get_passenger_log_det);exit();
        if (isset($get_passenger_log_det[0]) && !empty($get_passenger_log_det[0])) {
            if ($get_passenger_log_det[0]['travel_status'] == '0' ) {
                $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$log_id],['$set'=>['confirm_flag'=>1]],['upsert'=>false]);
 
                if(isset($get_passenger_log_det[0]['passenger_device_token']) && !empty($get_passenger_log_det[0]['passenger_device_token']) && isset($get_passenger_log_det[0]['passenger_device_type']) && !empty($get_passenger_log_det[0]['passenger_device_type'])) {
                               
                        $p_device_token    = $get_passenger_log_det[0]['passenger_device_token'];
                        $p_device_type     = $get_passenger_log_det[0]['passenger_device_type'];
                        $pickup            = isset($get_passenger_log_det[0]['pickup_time']) ? $get_passenger_log_det[0]['pickup_time'] : "";
                        $pickuptime = commonfunction::convertphpdate('Y-m-d h:i:s A',$pickup);
 
                        $title = _('trip_confirm');
                        
                        $message_details = $this->commonmodel->sms_message_by_title('book_later');
                        $message         = (isset($message_details['sms_description']) ?$message_details['sms_description'] :"");
                        $message         = str_replace("##TRIP_ID##", $log_id, $message);
                        $message         = str_replace("##PICKUP_DATE_TIME##", $pickuptime, $message);
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
			$app_ver         = isset($get_passenger_log_det[0]['app_ver']) ? $get_passenger_log_det[0]['app_ver'] : "";
                        $detail        = [
                                                "confirm_message" => __('api_request_disapatcher'),
                                                "passenger_tripid" => $log_id,
                                                "passenger_pickup_time"=>$pickuptime,
                                                "exists_flag"=>2,
						//"app_ver"=>$app_ver
                                        ]; 
                                          
                        $pushmessage    = [
                                            "message" => $message, 
                                            "detail" =>$detail,
					    "app_ver"=>$app_ver,
                                            "status" => 15
                                        ];
 
                        $p_send_notification = $this->api_model->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api,$title);
 
                        return 1;
 
                }
 
              /*  if (SMS == 1) {
                    $get_passenger_log_det = $this->get_passenger_log_detail($log_id);
 
                   // echo "<pre>";print_r($get_passenger_log_det);exit();
                     $passenger_phone       = isset($get_passenger_log_det[0]['passenger_phone']) ? $get_passenger_log_det[0]['passenger_phone'] : "";
                     $pickup    = isset($get_passenger_log_det[0]['pickup_time']) ? $get_passenger_log_det[0]['pickup_time'] : "";
                      $pickuptime = commonfunction::convertphpdate('Y-m-d H:i:s',$pickup);
                 
                    if ($passenger_phone != "") {
                        $to              = $passenger_phone;
                        $message_details = $this->commonmodel->sms_message_by_title('book_later');
                        $message         = (isset($message_details['sms_description']) ?$message_details['sms_description'] :"");
                        $message         = str_replace("##TRIP_ID##", $log_id, $message);
                        $message         = str_replace("##PICKUP_DATE_TIME##", $pickuptime, $message);
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                        $message_status = $this->api_model->sendSMS($to, $message);   
                        //echo "<pre>";print_r($message_status);exit();
                       
                    }
                }
                return 1;
                */
            }
            return 0;
        }
        return 0;
    }
 public function search_upcoming_trips()
    {
       $match_array                  = [];
      
       $match_array['travel_status'] = 0;
      
       $current_time_per_zone = convert_timezone( 'now', TIMEZONE );//2017-06-22 08:30:32

    
       $endTime = strtotime("+".DISPATCHER_NOTIFICATION_TIME." minutes", strtotime($current_time_per_zone));
       
       $interval_time_per_zone = date('Y-m-d H:i:s', $endTime);//2017-06-22 08:45:32

   
        $match_array['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time_per_zone) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($interval_time_per_zone) * 1000)];
  $arguments = [[
                '$match' => $match_array
            ],
            [
                '$project' => [
                    'pass_logid' => '$_id',
                    'pickup_time' => '$pickup_time',
                    'confirm_flag' => '$confirm_flag',
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

    public function payentry($id,$post)
    {
    $update_array = ["fare_detail" => [ ["key"=>"1","value" => (double)$post["cash_pay"]], ["key"=>"6","value" => (double)$post["card_pay"]], ["key"=>"3","value" => (double)$post["knet_pay"]], ["key"=>"additional amount","value" => (double)$post["add_amt"]],["key"=>"wallet","value"=>$post["wallet_pay"]],["key"=>"pending","value"=>$post["pending_pay"]],["key"=>"fare_note","value"=>$post["fare_note"]]],"createdby_username"=>$this->session->get('name')];
    $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS, ['_id'=>(int)$id],['$set'=>$update_array],[ 'upsert' => true]);

    $pending_pay =$post["pending_pay"];
    $prev_pending_pay =$post["prev_pending_pay"];


    if($prev_pending_pay > $pending_pay)
    {
        $add_amt= $prev_pending_pay-$pending_pay;
        $negative = 0;
        
        if($add_amt != 0)
        $update_wallet = $this->update_wallet_without_log($post['pass_id'],abs($add_amt),$negative,$post['trip_id'],'7');
    }
    else
    {
        $add_amt= $prev_pending_pay-$pending_pay;
        $negative = 1;

        if($add_amt != 0)
        $update_wallet = $this->update_wallet_without_log($post['pass_id'],abs($add_amt),$negative,$post['trip_id'],'7');
    }

    $driver_edit_status = 0;
    if($pending_pay > 0 )
    {
        $driver_edit_status = 1;   
    }

    $actual_paid_amt=0;
    $payment_type = '';
    if($post["card_pay"] > 0 )
    {
        $actual_paid_amt = $post["card_pay"];
         $payment_type = 2;
    }

    if($post["cash_pay"] > 0 )
    {
        $actual_paid_amt = $post["cash_pay"];
        $payment_type = 1;
    }

    if($post["card_pay"] == 0 && $post["cash_pay"] == 0 && $pending_pay > 0)
    {
    $driver_edit_status = 4;
    }


    //if($actual_paid_amt > 0)
    //{
    $update_trans_array = ['add_amt'=>(double)$post['add_amt'],'pending_amt'=>(double)$pending_pay,'driver_edit_status'=>(int)$driver_edit_status,'actual_paid_amt'=>(double)$actual_paid_amt,'payment_type'=>(int)$payment_type,"dispatcher_fare_edit"=>(int)1,"driver_edit_status"=>(int)$driver_edit_status];
   /* }
    else
    {
     $update_trans_array = array('add_amt'=>(double)$post['add_amt'],'pending_amt'=>(double)$pending_pay,'driver_edit_status'=>(int)$driver_edit_status);
    }*/

    $trans_result_data = $this->checktrans_details($id);
    //print_r($trans_result_data);exit;
    if (count($trans_result_data) > 0) {
       $updateresult = $this->mongo_db->update(MDB_TRANSACTION, ['passengers_log_id'=>(int)$id],['$set'=>$update_trans_array]);
    } else {

        $rs = $this->mongo_db->find(MDB_TRANSACTION,[],['_id'])->sort(['_id'=>-1])->limit(1);
        $res = (!empty($rs))?iterator_to_array($rs):[1];
        reset($res);
        $first_key = key($res);
        $inc_id = $first_key+1;

        $update_trans_array['_id'] = (int)$inc_id;
        $update_trans_array['passengers_log_id'] = (int)$id;
        $updateresult = $this->mongo_db->insert(MDB_TRANSACTION, $update_trans_array);
    }

    //$updateresult = $this->mongo_db->update(MDB_TRANSACTION, array('passengers_log_id'=>(int)$id),array('$set'=>$update_trans_array),array( 'upsert' => true));

    return $updateresult;
    }


    public function checktrans_details($log_id)
    {
        //echo $log_id.'-->trans';exit;
        $result = $this->mongo_db->find_one(MDB_TRANSACTION,['passengers_log_id' => (int)$log_id],['_id']);
        //print_r($result);exit;
        return (!empty($result) ? $result : []);
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

     public function get_passenger_notes($passenger_id) 
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id'=>(int)$passenger_id],['notes']);
        return isset($result['notes'])?$result['notes']:'';
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
            "wallet_amount"=>(double)$update_wallet_amt
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
            ];
        $result= $this->mongo_db->Insert(PASSENGER_WALLET_LOG,$insert_array);
        return true;
    }


    public function get_total_sum($operator_id)
    {
        $currentdate = date('Y-m-01 h:i:s',strtotime(Commonfunction::getCurrentTimeStamp()));
        $current_date_last = date('Y-m-d 23:59:59',strtotime(Commonfunction::getCurrentTimeStamp()));

        //$match_array = array('pickup_time' => array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)),'travel_status'=>(int)1);
        // if($operator_id != '')
        // {
        //     $match_array['operator_id']=(int)$operator_id;
        // }

        $match_array = [ "\$and" => [ ['pickup_time' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]], ['pickup_time' =>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_date_last) * 1000)] ], ['travel_status'=>(int)1 ]] ];


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

    public function get_total_sum_day($operator_id)
    {
        $currentdate = date('Y-m-d 00:00:00',strtotime(Commonfunction::getCurrentTimeStamp()));
        $current_date_last = date('Y-m-d 23:59:59',strtotime(Commonfunction::getCurrentTimeStamp()));
        
        //echo $current_date_last;exit;

        $match_array = [ "\$and" => [ ['pickup_time' => ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($currentdate) * 1000)]], ['pickup_time' =>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_date_last) * 1000)] ], ['travel_status'=>(int)1 ]] ];
        // if($operator_id != '')
        // {
        //     $match_array['operator_id']=(int)$operator_id;
        // }
        //print_r($match_array);exit;

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
        //print_r($result['result']);exit;
        return (!empty($result['result'])?$result['result']:[]);
    }

    public function get_promocodes(){

        $current_time = convert_timezone('now', TIMEZONE);
         $match_arg = ['auto_generated_promocode'=>['$ne'=>(int)1],'start_date'=>['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)],'expire_date'=>['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($current_time) * 1000)]];

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
                            'fixed_fare_apply' => '$coupon.fixed_fare_apply',
                            'fixed_fare_amt' => '$fixed_fare_amt',
                            'passenger_commission' => '$coupon.passenger_commission',
                        ]],
                        ];

         //$arguments = array('$match'=>$match_arg);
         //echo json_encode($arguments);exit;
         $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
         //print_r($result);exit;
         return (!empty($result['result'])?$result['result']:[]);
    }

    public function checkpromocode($promo_code = "", $customer_number = "", $company_id = "",$passenger_id="")
    {
       // $match = array('promocode' => $promo_code, array( "\$or"=> array( array( 'promo_type' => "1"),array('promo_type' => 1) ) ) );
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

    public function get_all_complete_booking_list_all($array)
    {
        $travel_status       = $array['travel_status'];
        $driver_reply_cancel = $array['driver_reply_cancel'];
        $manage_status       = $array['manage_status'];
        $search_txt          = $array['search_txt'];
        $search_location     = $array['search_location'];
        $filter_date         = $array['filter_date'];
        $to_date             = $array['to_date'];
        $booking_filter      = $array['booking_filter'];
        $booking_key         = $array['booking_key'];
        $type                = $array['type'];
        $fromdate            = ($filter_date!="")?$filter_date . ':00':"";
        $todate              = ($to_date!="") ?$to_date . ':00':"";
        $date                       = date('Y-m-d', strtotime($array['current_time']));
        $currentdate                = $date . ' 00:00:00';
        $enddate                    = $date . ' 23:59:59';
        $company_id                 = $this->company_id;
        $travel_status              = Commonfunction::mongo_format_array(explode(",", $travel_status));
        $two_days_before            = date( 'Y-m-d 00:00:00', strtotime( $date . ' 0 day' ) );
        $match_query = [];
        $wind_query = [];
        //$match_query['bookby']        = 2;
        $match_query['travel_status'] = ['$in' => $travel_status];
        if ($company_id!="" && $company_id!=0) {
            $wind_query['company._id'] = (int)$company_id;
        }
        if ($driver_reply_cancel == "") {
            $match_query['driver_reply'] = ['$nin' => ['C','R']];
            $key = array_search('8', $travel_status);
            if (false !== $key) {
                unset($travel_status[$key]);
            }
            $match_query['travel_status'] = ['$in' => $travel_status];
        }
        if ($fromdate != '' && $todate != '') {
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($fromdate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($todate) * 1000)];
            //$match_query['actual_pickup_time'] = array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($fromdate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($todate) * 1000));
        }elseif($fromdate != '' || $todate != ''){
            $datesearch = ($to_date != '') ? $to_date : $filter_date;
            $dateArr    = explode(" ", $datesearch);
            $staDate    = $dateArr[0] . ' 00:00:01';
            $endDate    = $dateArr[0] . ' 23:59:59';
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($staDate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($endDate) * 1000)];
            //$match_query['actual_pickup_time'] = array('$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($staDate) * 1000),'$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($endDate) * 1000));
        }else{
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)];
        }
        if ($manage_status == 0) {
            $match_query['pickup_time'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($two_days_before) * 1000)];
        }
        if($booking_key != '') {
            $match_query['booking_key'] = $booking_key;
        }
        
        if($type != '' && $type == 'R') {
            $match_query['book_tag'] = $type;
        }
        $matchquery = $match_query;
      
        if ($search_txt!="") {
            $srch_query = ["\$or"=>
                [
                    ['_id'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['passengers.name'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['passengers.phone'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.name'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.phone'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['people.driver_code'=>new \MongoDB\BSON\Regex($search_txt, 'i')],
                    ['company.companydetails.company_name'=>new \MongoDB\BSON\Regex($search_txt, 'i')]
                ]
            ];
            $wind_query = array_merge($wind_query,$srch_query);
        }
       
        if ($search_location!="") {
            $location_query = ["\$or"=>
                [
                    ['current_location'=>new \MongoDB\BSON\Regex($search_location, 'i')],
                    ['drop_location'=>new \MongoDB\BSON\Regex($search_location, 'i')],
                ]
            ];
            $matchquery = array_merge($matchquery,$location_query);
        }
        
        if($booking_key==""){
            if($type != 'N') {
            $arrays = [['$group' => ['_id'=>'$booking_key','details' =>['$push' =>[
                    'company_id'=>'$company_id',
                    'notes'=>'$notes',
                    'pickup_time'=>'$pickup_time',
                    'booking_time'=>'$booking_time',
                    'act_pickuptime' => '$act_pickuptime',
                    'pickup_latitude'=>'$pickup_latitude',
                    'pickup_longitude'=>'$pickup_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'no_passengers'=>'$no_passengers',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'dispatch_time'=>'$dispatch_time',
                    'travel_status'=>'$travel_status',
                    'driver_reply'=>'$driver_reply',
                    'approx_distance'=>'$approx_distance',
                    'approx_fare'=>'$approx_fare',
                    'company_name'=>'$company_name',
                    'pass_logid'=>'$pass_logid',
                    'passenger_name'=>'$passenger_name',
                    'passenger_phone'=>'$passenger_phone',
                    'passenger_country_code'=>'$passenger_country_code',
                    'driver_name'=>'$driver_name',
                    'driver_code'=>'$driver_code',
                    'driver_phone'=>'$driver_phone',
                    'driver_id'=>'$driver_id',
                    'model_name'=>'$model_name',
                    'total_drivers'=>'$total_drivers',
                    'fare'=>'$fare',
                    'distance'=>'$distance',
                    'book_tag'=>'$book_tag',
                    'booking_key' => '$booking_key'
            ]]]],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
                            
             ];
            } else {
                $arrays=[[
                '$sort' => [
                    '_id' => -1
                ]
            ]];
            }
         }
         else{
             $arrays=[[
                '$sort' => [
                    '_id' => -1
                ]
            ]];
         }
       //print "<pre>"; print_r($matchquery); exit;
        $arguments = [
             [
                '$match' => $matchquery
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
                '$lookup' => [
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                ]
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
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel"
                ]
            ],
            [
                '$lookup' => [
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_edit_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel_edit"
                ]
            ],
            [
                '$unwind' =>['path'=>'$motormodel_edit','preserveNullAndEmptyArrays'=>true]
            ],
            [
                  '$lookup' => [
                    'from' => MDB_REQUEST_HISTORY,
                    'localField' => '_id',
                    'foreignField' => "_id",
                    'as' => "driver_request"
                ]
            ],
            [
                  '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ]
            ];
        if(!empty($wind_query)){
            $wquery = [[
                '$match' => $wind_query
            ]];
            $arguments = array_merge($arguments,$wquery);
        }
          /*  array(
                '$match' => $wind_query
            ),*/
            
      $project_query = [      [
                '$project' => [
                    //'_id'=>0,
                    'company_id'=>'$company._id',
                    'notes'=>'$notes_driver',
                    'pickup_time'=>'$pickup_time',
                    'booking_time'=>'$createdate',
                    'act_pickuptime' => ['$sum' => ['$cond' => [['$eq' => ['$actual_pickup_time',new \MongoDB\BSON\UTCDateTime(strtotime('0000-00-00 00:00:00') * 1000)]],'$pickup_time','$actual_pickup_time']]],
                    'pickup_latitude'=>'$pickup_latitude',
                    'pickup_longitude'=>'$pickup_longitude',
                    'drop_latitude'=>'$drop_latitude',
                    'drop_longitude'=>'$drop_longitude',
                    'no_passengers'=>'$no_passengers',
                    'current_location'=>'$current_location',
                    'drop_location'=>'$drop_location',
                    'dispatch_time'=>'$dispatch_time',
                    'travel_status'=>'$travel_status',
                    'driver_reply'=>'$driver_reply',
                    'approx_distance'=>'$approx_distance',
                    'approx_fare'=>'$approx_fare',
                    'company_name'=>'$company.companydetails.company_name',
                    'pass_logid'=>'$_id',
                    'passenger_name'=>'$passengers.name',
                    'passenger_phone'=>'$passengers.phone',
                    'wallet_amount'=>'$passengers.wallet_amount',
                    'passenger_id'=>'$passengers._id',
                    'passenger_country_code'=>'$passengers.country_code',
                    'driver_name'=>'$people.name',
                    'driver_code'=>'$people.driver_code',
                    'driver_phone'=>'$people.phone',
                    'driver_id'=>'$people._id',
                    'model_name'=>'$motormodel.model_name',
                    'edit_model_name' => ['$ifNull'=>['$motormodel_edit.model_name','']],
                    'total_drivers'=>'$driver_request.total_drivers',
                    'fare'=>'$trans.fare',
                    'distance'=>'$trans.distance',
                    'book_tag'=>'$book_tag',
                    'edit_fare'=>'$fare_detail.value',
                    'booking_key' => '$booking_key',
                    'actual_distance'=>['$ifNull'=>['$distance',0]],
                    'createdby_username'=>['$ifNull'=>['$createdby_username','-']],
                    'payment_type'=>['$ifNull'=>['$trans.payment_type',0]],
                    'advance_payment'=>['$ifNull'=>['$trans.advance_payment',0]],
                    'wallet_amount_used'=>['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'pending_amt'=>['$ifNull'=>['$trans.pending_amt',0]],
                    'fare'=>['$ifNull'=>['$trans.fare',0]],
                    'tripfare'=>['$ifNull'=>['$trans.tripfare',0]],
                    'add_amt'=>['$ifNull'=>['$trans.add_amt',0]],
                    'actual_paid_amt'=>['$ifNull'=>['$trans.actual_paid_amt',0]],
                    'driver_edit_status'=>['$ifNull'=>['$trans.driver_edit_status',0]],
                    'passenger_wallet_amount'=>['$ifNull'=>['$passengers.wallet_amount',0]],
                ]
            ]];
            $args = array_merge($arguments,$project_query,$arrays);
        
        //$args = array_merge($arguments,$arrays);
      // echo "<pre>";print_r($args);exit();
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $args);
       // print "<pre>";print_r($result);
        //exit;
        if($booking_key==""){
            
            if($type != 'N') {
                $new_array = [];
            foreach($result['result'] as $key => $val){
                $new_array[$key] = $val['details'][0];   
            }
           // print "<pre>";
           // print_r($new_array); exit;
            return (!empty($new_array)) ? $new_array : [];
            } else {
                return (!empty($result['result'])) ? $result['result'] : [];
            }
        }else{
            return (!empty($result['result'])) ? $result['result'] : [];
        }
        
    }

    public function edit_complete_bookingdetails($pass_logid = '')
    {
        $company_id    = $this->company_id;
        //MongoDB
       /* if ($company_id != "" && $company_id != 0) {
            $match_array['company_id'] = (int) $company_id;
        }*/
        $match_array['_id'] = (int) $pass_logid;
        //echo "<pre>";  print_r($match_array); exit;
        if (FARE_SETTINGS == 2 && !empty($company_id)) {
            $arguments = [
                [
                    '$match' => $match_array
                ],
               /* array(
                    '$lookup' => array(
                        'from' => COMPANY,
                        'localField' => 'company_id',
                        'foreignField' => "_id",
                        'as' => "company"
                    )
                ),*/
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => 'passengers_id',
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers',
                    '$unwind' => '$fare_detail'
                ],
               
                [
                    '$project' => [
                        'pass_logid' => '$_id',
                        'passenger_name' => '$passengers.name',
                        'passengers_id' => '$passengers._id',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'pickup_latitude' => '$pickup_latitude',
                        'pickup_longitude' => '$pickup_longitude',
                        'no_passengers' => '$no_passengers',
                        'luggage' => '$luggage',
                        'company_id' => '$company_id',
                        'approx_fare' => '$approx_fare',
                        'approx_distance' => '$approx_distance',
                        'country_code' => '$passengers.country_code',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'drop_latitude' => '$drop_latitude',
                        'drop_longitude' => '$drop_longitude',
                        'pickup_time' => '$pickup_time',
                        'notes_driver' => '$notes_driver',
                        'taxi_modelid' => '$taxi_modelid',
                        'search_city' => '$search_city',
                        'travel_status' => '$travel_status',
                        'pay' => '$fare_detail.value',
                        'faretype'=>'$payment_type',
                        'bookby'=>'$bookby',
                        'taxi_edit_modelid'=>['$ifNull'=>['$taxi_edit_modelid','']],
                        'promocode'=>['$ifNull'=>['$promocode','']],
                    ]
                ],
            ];
            //echo "<pre>"; print_r($arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        } else {
            $arguments = [
                [
                    '$match' => $match_array
                ],
               /* array(
                    '$lookup' => array(
                        'from' => COMPANY,
                        'localField' => 'company_id',
                        'foreignField' => "_id",
                        'as' => "company"
                    )
                ),*/
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
                        'from' => MDB_MOTOR_MODEL,
                        'localField' => 'taxi_modelid',
                        'foreignField' => "_id",
                        'as' => "motormodel"
                    ]
                ],
                [
                    '$unwind' => '$motormodel'
                ],
                [
                    '$project' => [
                        'pass_logid' => '$_id',
                        'passengers_id' => '$passengers._id',
                        'passenger_name' => '$passengers.name',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'min_fare' => '$motormodel.min_fare',
                        'pickup_latitude' => '$pickup_latitude',
                        'pickup_longitude' => '$pickup_longitude',
                        'no_passengers' => '$no_passengers',
                        'taxi_modelid' => '$motormodel._id',
                        'luggage' => '$luggage',
                        'company_id' => '$company_id',
                        'approx_fare' => '$approx_fare',
                        'approx_distance' => '$approx_distance',
                        'country_code' => '$passengers.country_code',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'drop_latitude' => '$drop_latitude',
                        'drop_longitude' => '$drop_longitude',
                        'pickup_time' => '$pickup_time',
                        'notes_driver' => '$notes_driver',
                        'search_city' => '$search_city',
                        'travel_status' => '$travel_status',
                        'pay' => '$fare_detail.value',
                        'faretype'=>'$payment_type',
                        'bookby'=>'$bookby',
                        'taxi_edit_modelid'=>['$ifNull'=>['$taxi_edit_modelid','']],
                        'promocode'=>'$promocode',
                    ]
                ],
            ];
            //echo "<pre>"; print_r($arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $arguments);
            //echo "<pre>"; print_r($result['result']); exit;
            if(isset($result['result'][0]['pickup_time']) && $result['result'][0]['pickup_time'] != '') {
               $result['result'][0]['pickup_time'] = commonfunction::convertphpdate('Y-m-d H:i:s',$result['result'][0]['pickup_time']);
            }
            
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }

    public function pay_complete_entry($id,$post)
    {
    $update_array = ["fare_detail" => [ ["key"=>"1","value" => (double)$post["cash_pay"]], ["key"=>"6","value" => (double)$post["card_pay"]], ["key"=>"3","value" => (double)$post["knet_pay"]], ["key"=>"additional amount","value" => (double)$post["add_amt"]],["key"=>"wallet","value"=>$post["wallet_pay"]],["key"=>"pending","value"=>$post["pending_pay"]],["key"=>"fare_note","value"=>$post["fare_note"]]],"createdby_username"=>$this->session->get('name')];
    $updateresult = $this->mongo_db->update(MDB_PASSENGERS_LOGS, ['_id'=>(int)$id],['$set'=>$update_array]);
    $updateresult = $this->mongo_db->update(MDB_PASSENGERSLOGS_COMPLETED, ['_id'=>(int)$id],['$set'=>$update_array],[ 'upsert' => true]);

    $pending_pay =$post["pending_pay"];
    $prev_pending_pay =$post["prev_pending_pay"];


    if($prev_pending_pay > $pending_pay)
    {
        $add_amt= $prev_pending_pay-$pending_pay;
        $negative = 0;
        
        if($add_amt != 0)
        $update_wallet = $this->update_wallet_without_log($post['pass_id'],abs($add_amt),$negative,$post['trip_id'],'7');
    }
    else
    {
        $add_amt= $prev_pending_pay-$pending_pay;
        $negative = 1;

        if($add_amt != 0)
        $update_wallet = $this->update_wallet_without_log($post['pass_id'],abs($add_amt),$negative,$post['trip_id'],'7');
    }

    $driver_edit_status = 0;
    if($pending_pay > 0 )
    {
        $driver_edit_status = 1;   
    }

    $actual_paid_amt=0;
    $payment_type = '';
    if($post["card_pay"] > 0 )
    {
        $actual_paid_amt = $post["card_pay"];
         $payment_type = 2;
    }

    if($post["cash_pay"] > 0 )
    {
        $actual_paid_amt = $post["cash_pay"];
        $payment_type = 1;
    }

    if($post["card_pay"] == 0 && $post["cash_pay"] == 0 && $pending_pay > 0)
    {
    $driver_edit_status = 4;
    }


    //if($actual_paid_amt > 0)
    //{
    $update_trans_array = ['add_amt'=>(double)$post['add_amt'],'pending_amt'=>(double)$pending_pay,'driver_edit_status'=>(int)$driver_edit_status,'actual_paid_amt'=>(double)$actual_paid_amt,'payment_type'=>(int)$payment_type,"dispatcher_fare_edit"=>(int)1,"driver_edit_status"=>(int)$driver_edit_status];
   /* }
    else
    {
     $update_trans_array = array('add_amt'=>(double)$post['add_amt'],'pending_amt'=>(double)$pending_pay,'driver_edit_status'=>(int)$driver_edit_status);
    }*/

    $updateresult = $this->mongo_db->update(MDB_TRANSACTION, ['passengers_log_id'=>(int)$id],['$set'=>$update_trans_array],[ 'upsert' => true]);

    return $updateresult;
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

   public function get_past_places($passenger_id = "")
   {
         //echo $passenger_id.'--id--'.$current_lat.'-lat lng-'.$current_lng;exit;
        $match_query = ['passengers_id'=>(int)$passenger_id,'current_location'=>['$ne'=>''],'drop_location'=>['$ne'=>''],'pickup_latitude'=>['$ne'=>''],'pickup_longitude'=>['$ne'=>''],'drop_latitude'=>['$ne'=>''],'drop_longitude'=>['$ne'=>'']];
    
        $srch_query = $match_query;
        $common_arguments = [            
            [
                '$match' => $srch_query
            ],
        ];
            $field_arguments = [
                [
                    '$sort' => [ 
                        '_id' => -1
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
                ['$limit'  => (int)50 ],
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
            //echo "<pre>";print_r($result['result']); exit;
            $res = (!empty($result['result'])) ? $result['result'] : [];

            $total_places = $total_place_lat_long = [];
            //print_r($result);exit;
            if(count($res)){

                foreach($res as $k=>$val){

                    $pickup_lat = $val['pickup_latitude'];
                    $pickup_lng = $val['pickup_longitude'];
                    $pickup_place = $val['current_location'];

                    $drop_lat = $val['drop_latitude'];
                    $drop_lng = $val['drop_longitude'];
                    $drop_place = $val['drop_location'];

                    //$pickup_distance = $this->calculate_distance($current_lat,$current_lng,$pickup_lat,$pickup_lng,'K');
                    //echo $pickup_distance.' distance--->'.$pickup_place.'<br>';//exit;

                    if(!in_array($pickup_place,$total_places) ){

                        $total_places[] = $pickup_place;
                        $total_place_lat_long[] = ['place'=>$pickup_place,'latitude'=>$pickup_lat,'longitude'=>$pickup_lng];
                    }           

                    if(!in_array($drop_place,$total_places) ){

                        $total_places[] = $drop_place;
                        $total_place_lat_long[] = ['place'=>$drop_place,'latitude'=>$drop_lat,'longitude'=>$drop_lng];
                    }                  

                    //$total_places = array_unique($total_places);
                }
            }
            //echo 555;exit;

            return $total_place_lat_long;
       
   }



}
?>
