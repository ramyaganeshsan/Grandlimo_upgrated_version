<?php defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users module details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Manage extends Model
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
		$this->mongo_db         = MangoDB::instance('default');
    }
    public function all_company_list($offset, $val,$find_count=false)
    {
		/*$result  = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->where(PEOPLE . '.user_type', '=', 'C')->where(PEOPLE . '.status', '=', 'A')->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['no_of_taxi']      = $this->taxicount($res['cid']);
            $details[$key]['no_of_driver']    = $this->drivercount($res['cid']);
            $details[$key]['no_of_manager']   = $this->managercount($res['cid']);
            $details[$key]['no_of_package']   = $this->packagecount($res['cid']);
            $details[$key]['name']            = $res['name'];
            $details[$key]['username']        = $res['username'];
            $details[$key]['email']           = $res['email'];
            $details[$key]['cid']             = $res['cid'];
            $details[$key]['company_name']    = $res['company_name'];
            $details[$key]['company_address'] = $res['company_address'];
            $details[$key]['company_status']  = $res['company_status'];
            $details[$key]['userid']          = $res['userid'];
            $details[$key]['id']              = $res['id'];
        }
        return $details;*/
		
		//MongoDB
		if($find_count) {
			$ops = [
				['$match' => ['user_type'=>'C','status'=>['$ne'=>'T']]],
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
					'id' => '$_id',
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			//echo '<pre>';print_r($result);//exit;
			return (!empty($result['result']))?count($result['result']):0;
		} else {
			$ops = [
				['$match' => ['user_type'=>'C','status'=>['$ne'=>'T']]],
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
					'name' => '$name',
					'company_id' => '$company_id',
					'email' => '$email',
					'user_type' => '$user_type',
					'id' => '$_id',
					]
				],
				[
					'$sort' => [
						'company_id' => -1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			//echo '<pre>';print_r($result);//exit;
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			$details = [];
			if(!empty($result['result'])){
				foreach ($result['result'] as $key => $res) {
					$details[$key]['no_of_taxi']      = $this->taxicount($res['company_id']);
					$details[$key]['no_of_driver']    = $this->drivercount($res['company_id']);
					$details[$key]['no_of_manager']   = $this->managercount($res['company_id']);
					$details[$key]['no_of_package']   = $this->packagecount($res['company_id']);
					$details[$key]['name']            = $res['name'];
					$details[$key]['email']           = $res['email'];
					$details[$key]['cid']             = $res['company_id'];
					$details[$key]['company_name']    = (isset($res['company_name'][0]))?$res['company_name'][0]:'';
					$details[$key]['company_address'] = (isset($res['company_address'][0]))?$res['company_address'][0]:'';
					$details[$key]['company_status']  = (isset($res['company_status'][0]))?$res['company_status'][0]:'';
					$details[$key]['id']              = $res['id'];
				}
			}
			return $details;
		}
    }
    public function all_company_searchlist($keyword = "", $status = "",  $offset = "", $val = "", $find_count=false)
    {
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		/*$company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND company_status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . COMPANY . " left join " . PEOPLE . " on " . PEOPLE . ".id =" . COMPANY . ".userid  where user_type='C' $company_where $staus_where $name_where order by created_date DESC limit $val offset  $offset";
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['no_of_taxi']      = $this->taxicount($res['cid']);
            $details[$key]['no_of_driver']    = $this->drivercount($res['cid']);
            $details[$key]['no_of_manager']   = $this->managercount($res['cid']);
            $details[$key]['no_of_package']   = $this->packagecount($res['cid']);
            $details[$key]['name']            = $res['name'];
            $details[$key]['username']        = $res['username'];
            $details[$key]['email']           = $res['email'];
            $details[$key]['company_name']    = $res['company_name'];
            $details[$key]['company_address'] = $res['company_address'];
            $details[$key]['company_status']  = $res['company_status'];
            $details[$key]['cid']             = $res['cid'];
            $details[$key]['id']              = $res['id'];
        }
        return $details;*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [['user_type' => 'C' ],['status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'cdetails.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "\$and" => [['user_type' => 'C' ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'cdetails.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($status)) {
			$srch_query = [ "\$and" => [['user_type' => 'C' ],['status' => $status ]]];
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count) {
			$ops = [
				['$match' => $srch_query],
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
					'id' => '$_id',
					]
				],
			];
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			//echo '<pre>';print_r($result);//exit;
			return (!empty($result['result']))?count($result['result']):0;
		} else {
			$ops = [
				['$match' => $srch_query],
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
					'name' => '$name',
					'company_id' => '$company_id',
					'email' => '$email',
					'user_type' => '$user_type',
					'id' => '$_id',
					]
				],
				[
					'$sort' => [
						'company_id' => -1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			//echo '<pre>else';print_r($result);exit;
			$details = [];
			if(!empty($result['result'])){
				foreach ($result['result'] as $key => $res) {
					$details[$key]['no_of_taxi']      = $this->taxicount($res['company_id']);
					$details[$key]['no_of_driver']    = $this->drivercount($res['company_id']);
					$details[$key]['no_of_manager']   = $this->managercount($res['company_id']);
					$details[$key]['no_of_package']   = $this->packagecount($res['company_id']);
					$details[$key]['name']            = $res['name'];
					$details[$key]['email']           = $res['email'];
					$details[$key]['cid']             = $res['company_id'];
					$details[$key]['company_name']    = (isset($res['company_name'][0]))?$res['company_name'][0]:'';
					$details[$key]['company_address'] = (isset($res['company_address'][0]))?$res['company_address'][0]:'';
					$details[$key]['company_status']  = (isset($res['company_status'][0]))?$res['company_status'][0]:'';
					$details[$key]['id']              = $res['id'];
				}
			}
			return $details;
		}
    }
	
	public function get_allcompany( $status="")
    {
		if ($status != "") {
			$arguments = [
				[
					'$match' => ['companydetails.company_status'=>$status]
				],
				[
					'$project' => [
						'cid' => '$_id',
						'company_name' => '$companydetails.company_name'
					]
				]
			];
		}else{
			$arguments = [
				[
					'$project' => [
						'cid' => '$_id',
						'company_name' => '$companydetails.company_name'
					]
				]
			];
		}
		$result    = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result'])) ? $result['result'] : [];
    }
	
	/*public static function get_allcompany($status = "")
    {
        $result = DB::select()->from(COMPANY);
        if ($status != "") {
            $result->where('company_status', '=', $status);
        }
        return $result->order_by('company_name', 'asc')->execute()->as_array();
    }*/
    public function packagecount($cid)
    {
        /*$result = DB::select()->from(PACKAGE_REPORT)->where(PACKAGE_REPORT . '.upgrade_companyid', '=', $cid)->execute()->as_array();
        return count($result);*/
		
		//MongoDB
		$result = $this->mongo_db->count(MDB_PACKAGE_REPORT,['upgrade_companyid'=>(int)$cid]);
		return (!empty($result))?$result:0;
    }
    public function get_front_company_request($activeids)
    {
        $res_com = DB::select(PEOPLE . '.*')->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where(COMPANY . '.company_status', '=', 'D')->where(PEOPLE . '.login_from', '=', 'WD')->where(PEOPLE . '.user_type', '=', 'C')->where(PEOPLE . '.id', 'IN', $activeids)->execute()->as_array();
        return $res_com;
    }
    public function active_company_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================   
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'A'
        ))->where('id', 'IN', $activeids)->where('user_type', '=', 'C')->execute();
        $result = DB::update(COMPANY)->set(array(
            'company_status' => 'A'
        ))->where('userid', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'C'],['$set'=>['status' => 'A']],['multiple'=>true]);
		$result1 = $this->mongo_db->update(MDB_COMPANY,['companydetails.userid'=>['$in'=>$active_ids]],['$set'=>['companydetails.company_status' => 'A']],['multiple'=>true]);
		return (empty($result['err']) && empty($result1['err']))?1:$result['errmsg'];
    }
    public function block_company_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================	       
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'D'
        ))->where('id', 'IN', $activeids)->where('user_type', '=', 'C')->execute();
        $result = DB::update(COMPANY)->set(array(
            'company_status' => 'D'
        ))->where('userid', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);exit;
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'C'],['$set'=>['status' => 'D']],['multiple'=>true]);
		$result1 = $this->mongo_db->update(MDB_COMPANY,['companydetails.userid'=>['$in'=>$active_ids]],['$set'=>['companydetails.company_status' => 'D']],['multiple'=>true]);
		//echo '<pre>';print_r($result);print_r($result1);exit;
		return (empty($result['err']) && empty($result1['err']))?1:$result['errmsg'];
    }
	public function trash_company_request($activeids)
    {
        /*$result = DB::update(COMPANY)->set(array(
            'company_status' => 'T'
        ))->where('userid', 'IN', $activeids)->execute();
        $result = DB::update(PEOPLE)->set(array(
            'status' => 'T'
        ))->where('id', 'IN', $activeids)->where('user_type', '=', 'C')->execute();
        return $result;*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'C'],['$set'=>['status' => 'T']],['multiple'=>true]);
		$result1 = $this->mongo_db->update(MDB_COMPANY,['companydetails.userid'=>['$in'=>$active_ids]],['$set'=>['companydetails.company_status' => 'T']],['multiple'=>true]);
		return (empty($result['err']) && empty($result1['err']))?1:$result['errmsg'];
    }
    public function driver_list()
    {
        $user_createdby = $this->userid;
        $usertype       = $this->user_type;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'D')->where('status', '!=', 'T')->where('login_country', '=', $country_id)->where('login_state', '=', $state_id)->where('login_city', '=', $city_id)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'D')->where('status', '!=', 'T')->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'D')->where('status', '!=', 'T')->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        }
    }
	
	public function all_driver_list( $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$match_query                     = [];
		$match_query['people.user_type'] = 'D';
		$match_query['people.status']    = ['$ne' => 'T'];
		
		if ($usertype == 'M' ||$usertype == 'A' ) {
			$match_query['people.company_id']    = (int) $company_id;
			//echo $country_id.'/'.$state_id.'/'.$city_id;exit;
			//$match_query['_id'] = (int) $country_id;
			//$match_query['stateinfo.state_id']   = (int) $state_id;
			//$match_query['cityinfo.city_id']    = (int) $city_id;
			$match_query['people.login_country'] = (int) $country_id;
			$match_query['people.login_state']   = (int) $state_id;
			$match_query['people.login_city']    = (int) $city_id;
			
		} else if ($usertype == 'C') {
			$match_query['people.company_id'] = (int) $company_id;
		}
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'people.company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'people._id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $match_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						///Driver Code///
						'driver_code' => '$people.driver_code',
						///Driver Code///
						'email' => '$people.email',
						'company_name' => '$company.companydetails.company_name',
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'driver_license_id' => '$people.driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'driver_status' => '$people.status',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($merge_arguments); exit;
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
   
    public function active_driver_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'A'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function block_driver_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'D'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function motor_list()
    {
        $rs = DB::select()->from(MOTORCOMPANY)->where('motor_status', '!=', 'T')->order_by('motor_name', 'ASC')->execute()->as_array();
        return $rs;
    }
    public function count_motor_list()
    {
        $rs = DB::select()->from(MOTORCOMPANY)->where('motor_status', '!=', 'T')->order_by('motor_name', 'ASC')->execute()->as_array();
        return count($rs);
    }
    public function all_motor_list($offset, $val)
    {
        $result = DB::select()->from(MOTORCOMPANY)->where('motor_status', '!=', 'T')->order_by('motor_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;
    }
    public function active_motor_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(MOTORCOMPANY)->set([
            'motor_status' => 'A'
        ])->where('motor_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function block_motor_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        // $arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(MOTORCOMPANY)->set([
            'motor_status' => 'D'
        ])->where('motor_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function model_list()
    {
        $result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->where('model_status', '!=', 'T')->order_by('model_name', 'ASC')->execute()->as_array();
        return $result;
    }
    public function all_model_list($offset, $val,$find_count=false)
    {
        /*$result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->where('model_status', '!=', 'T')->order_by('model_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		if($find_count){
			$result = $this->mongo_db->count(MDB_MOTOR_MODEL,['model_status'=>['$ne'=>'T']],['_id','model_name','model_status','priority']);
			return $result;
		} else {
			$result = $this->mongo_db->find(MDB_MOTOR_MODEL,['model_status'=>['$ne'=>'T']],['_id','model_name','model_status','priority'])->sort(['_id'=>1])->skip($offset)->limit($val);
			//echo '<pre>';print_r(iterator_to_array($result));exit;
			return (!empty($result))?iterator_to_array($result):[];
		}
    }
	public function get_all_model_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        /*$staus_where = ($status) ? " AND model_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (model_name LIKE  '%$keyword%'";
            $name_where .= " or motor_name LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . MOTORMODEL . " left join " . MOTORCOMPANY . " on " . MOTORMODEL . ".motor_mid =" . MOTORCOMPANY . ".motor_id  where 1=1 $staus_where $name_where order by model_name ASC  limit $val offset  $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [[ "model_name" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["model_status" => $status ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "model_name" => new \MongoDB\BSON\Regex($keyword, 'i')];
		} else if (!empty($status)) {
			$srch_query = ["model_status" => $status ];
		}
		//print_r($srch_query);exit;
		if($find_count) {
			$res = $this->mongo_db->count(MDB_MOTOR_MODEL,$srch_query);
			return $res;
		} else {
			$res = $this->mongo_db->find(MDB_MOTOR_MODEL,$srch_query,['_id','model_name','model_status','priority'])->sort(['model_name'=>-1])->skip($offset)->limit($val);
			return (!empty($res))?iterator_to_array($res):[];
		}
    }
	public function block_model_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        // $arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(MOTORMODEL)->set(array(
            'model_status' => 'D'
        ))->where('model_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>['$in'=>$active_ids]],['$set'=>['model_status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
	public function active_model_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(MOTORMODEL)->set(array(
            'model_status' => 'A'
        ))->where('model_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>['$in'=>$active_ids]],['$set'=>['model_status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
	public function trash_model_request($activeids)
    {
        /*$result = DB::update(MOTORMODEL)->set(array(
            'model_status' => 'T'
        ))->where('model_id', 'IN', $activeids)->execute();
        return $result;*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>['$in'=>$active_ids]],['$set'=>['model_status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
	public function model_motordetails($uid)
    {
        /*$result = DB::select()->from(MOTORMODEL)->join(MOTORCOMPANY, 'LEFT')->on(MOTORMODEL . '.motor_mid', '=', MOTORCOMPANY . '.motor_id')->where(MOTORMODEL . '.model_id', '=', $uid)->execute()->as_array();
        return $result;*/
	
		$result = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["_id"=>(int)$uid]);
//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:[];
    }
    public function all_fare_list($company_id, $offset, $val,$find_count = FALSE)
	{
		/*$query  = "select * from " . COMPANY_MODEL_FARE . " where " . COMPANY_MODEL_FARE . ".company_cid = $company_id  ORDER BY " . COMPANY_MODEL_FARE . ".`model_name` ASC limit  $offset,$val";
			//left join ".MOTORMODEL." on ".MOTORMODEL.".model_id = ".COMPANY_MODEL_FARE.".model_id and `model_status` != 'T'
			$result = Db::query(Database::SELECT, $query)->execute()->as_array();
			return $result;*/
		
		if($find_count == TRUE){
			$result = $this->mongo_db->find(MDB_COMPANY,['_id' => (int)$company_id],['model_fare.model_id']);
			$res = iterator_to_array($result);
			return (!empty($res) && isset($res[$company_id]['model_fare']))?count($res[$company_id]['model_fare']):[];
		}else{
			//MongoDB with aggregate process only
			$ops = [
				['$unwind' => '$model_fare'],
				['$match' => ['_id' => (int)$company_id, 'model_fare.fare_status'=>['$nin'=>['T']]]],
				['$project' => ['_id' => 0,
					'model_id' => '$model_fare.model_id',
					'model_name' => '$model_fare.model_name',
					'fare_status' => '$model_fare.fare_status',
					]
				],
				[
					'$sort' => [ 
						'model_fare.model_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    public function count_banner_list($company_id)
    {
        $query  = "select * from " . COMPANY_CMS . " where company_id = $company_id and type= '2' ORDER BY `id` ASC";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);
    }
    public function all_banner_list($company_id, $offset, $val)
    {
        $query  = "select * from " . COMPANY_CMS . " where company_id = $company_id and type= '2' ORDER BY `id` ASC limit  $offset,$val";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
    public function count_company_searchbanner_list($keyword = "", $status = "")
    {
        $company_id     = $this->company_id;
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = "";
        if ($status != '') {
            $staus_where = " AND status = '$status'";
        }
        //search result export
        //=====================
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (image_tag LIKE  '%$keyword%' or alt_tags LIKE  '%$keyword%')";
        }
        $query   = "select * from " . COMPANY_CMS . " where company_id = $company_id and type= '2'$staus_where $name_where  ORDER BY `id` ASC";
        //echo $query; exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_company_all_banner_searchlist($keyword = "", $status = "", $offset = "", $val = "")
    {
        $company_id     = $this->company_id;
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = "";
        if ($status != '') {
            $staus_where = " AND status = '$status'";
        }
        //search result export
        //=====================
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (image_tag LIKE  '%$keyword%' or alt_tags LIKE  '%$keyword%')";
        }
        $query   = "select * from " . COMPANY_CMS . " where company_id = $company_id and type= '2'$staus_where $name_where ORDER BY `id` ASC limit  $offset,$val";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function block_banner_request($activeids)
    {
        $result = DB::update(COMPANY_CMS)->set([
            'status' => '0'
        ])->where('id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function active_banner_request($activeids)
    {
        $result = DB::update(COMPANY_CMS)->set([
            'status' => '1'
        ])->where('id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function count_company_searchmodel_list($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        /* $company_id     = $this->company_id;
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
		$staus_where = ($status) ? " AND " . COMPANY_MODEL_FARE . ".fare_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (" . COMPANY_MODEL_FARE . ".model_name LIKE  '%$keyword%')";
        }
        $query   = "select * from " . COMPANY_MODEL_FARE . " left join " . MOTORMODEL . " on " . MOTORMODEL . ".model_id = " . COMPANY_MODEL_FARE . ".model_id where " . COMPANY_MODEL_FARE . ".company_cid = $company_id and " . MOTORMODEL . ".model_status != 'T' $staus_where $name_where ORDER BY " . COMPANY_MODEL_FARE . ".model_name ASC";
        //echo $query; exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);*/
		
    }
    public function get_all_company_list()
    {
        /*$query   = "select cid,company_name from " . COMPANY . " join " . PACKAGE_REPORT . " on " . PACKAGE_REPORT . ".upgrade_companyid = " . COMPANY . ".cid where " . COMPANY . ".company_status = 'A' group by " . COMPANY . ".cid ORDER BY " . COMPANY . ".company_name ASC ";
        //echo $query; exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
		$ops = [
			['$match' => ['companydetails.company_status'=>'A']],
			[
					'$lookup' => [
					'from'=>MDB_PACKAGE_REPORT,
					'localField'=> "_id",
					'foreignField' => "upgrade_companyid",
					'as'=> "company"
					]
				],
			[
				'$project' => ['_id' => 0,
				'cid' => '$_id',
				'company_name' => '$companydetails.company_name',
				]
			],
			[
				'$sort' => [
					'_id' => -1
				],
			],
		];
		$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result['result']:[];
    }
    public function get_rating_company()
    {
        /*$query   = "select cid,company_name from " . COMPANY . " where company_status = 'A' ORDER BY company_name ASC ";
        //echo $query; exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();*/
        $ops = [
					['$project' => ['cid' => '$_id','company_name' => '$companydetails.company_name']],
					['$sort' => ['_id' => -1]],
				];
        $results = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
        //print_r($results);exit;
        return (!empty($results))?$results['result']:[];
    }
    public function get_company_all_model_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        /*$keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND " . COMPANY_MODEL_FARE . ".fare_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (" . COMPANY_MODEL_FARE . ".model_name LIKE  '%$keyword%')";
        }
        $query   = "select * from " . COMPANY_MODEL_FARE . " left join " . MOTORMODEL . " on " . MOTORMODEL . ".model_id = " . COMPANY_MODEL_FARE . ".model_id where " . COMPANY_MODEL_FARE . ".company_cid = $company_id and " . MOTORMODEL . ".model_status != 'T' $staus_where $name_where ORDER BY " . COMPANY_MODEL_FARE . ".model_name ASC limit  $offset,$val";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
	
		$company_id     = $this->company_id;
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
	  
		//MongoDB with aggregate process only
		if($status!=""){
			$match_query = ['_id' => (int)$company_id, 'model_fare.fare_status' => $status ];	
		}else{
			$match_query = ['_id' => (int)$company_id];
		}
		
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'model_fare.model_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else {
			$srch_query = $match_query;
		}
		
		//echo '<pre>';print_r($srch_query); exit;
		if($find_count == TRUE) {
			$ops = [
				['$match' => $srch_query],
				[
						'$group'=>["_id"=>NULL,'count'=>[
							'$sum' =>['$size'=> '$model_fare']
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count']))?$result['result'][0]['count']:0;
		} else {
			$ops = [
					['$unwind' => '$model_fare'],
					['$match' => $srch_query],
					['$project' => ['_id' => 0,
					'model_id' => '$model_fare.model_id',
					'model_name' => '$model_fare.model_name',
					'fare_status' => '$model_fare.fare_status',
					]
				],
				[
					'$sort' => [ 
						'model_fare.model_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_COMPANY,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    
    public function active_fare_request($activeids)
    {
        /*$result = DB::update(COMPANY_MODEL_FARE)->set(array(
            'fare_status' => 'A'
        ))->where('company_model_fare_id', 'IN', $activeids)->execute();
        return count($result);*/
		$company_id     = (int)$this->company_id;
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$model_fare = ['model_fare.$.fare_status' => 'A'];
		$res = $this->mongo_db->update(MDB_COMPANY,['_id'=>$company_id, 'model_fare.model_id'=>['$in'=>$active_ids]],['$set'=>$model_fare],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    
    public function block_fare_request($activeids)
    {
        /*$result = DB::update(COMPANY_MODEL_FARE)->set(array(
            'fare_status' => 'D'
        ))->where('company_model_fare_id', 'IN', $activeids)->execute();
        return count($result);*/
		$company_id     = (int)$this->company_id;
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($company_id); exit;
		$model_fare = ['model_fare.$.fare_status' => 'D'];
		$res = $this->mongo_db->update(MDB_COMPANY,['_id'=>$company_id, 'model_fare.model_id'=>['$in'=>$active_ids]],['$set'=>$model_fare],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function field_list()
    {
        $rs = DB::select()->from(MANAGEFIELD)->order_by('field_order', 'ASC')->execute()->as_array();
        return $rs;
    }
    public function count_field_list()
    {
        $rs = DB::select()->from(MANAGEFIELD)->order_by('field_order', 'ASC')->execute()->as_array();
        return count($rs);
    }
    public function all_field_list($offset, $val)
    {
        $result = DB::select()->from(MANAGEFIELD)->where('field_status', '=', 'A')->or_where('field_status', '=', 'D')->order_by('field_order', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;
    }
    public function fieldsearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND field_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (field_labelname LIKE  '%$keyword%' ";
            $name_where .= " or field_name LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . MANAGEFIELD . " where 1=1 $staus_where $name_where order by field_order ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_fieldsearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND field_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (field_labelname LIKE  '%$keyword%' ";
            $name_where .= " or field_name LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . MANAGEFIELD . " where 1=1 $staus_where $name_where order by field_order ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_all_field_searchlist($keyword = "", $status = "", $offset = "", $val = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND field_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (field_labelname LIKE  '%$keyword%' ";
            $name_where .= " or field_name LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . MANAGEFIELD . " where 1=1 $staus_where $name_where order by field_order ASC limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function active_field_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(MANAGEFIELD)->set([
            'field_status' => 'A'
        ])->where('field_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function block_field_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        // $arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(MANAGEFIELD)->set([
            'field_status' => 'D'
        ])->where('field_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function change_order_request($activeids)
    {
        $split_val   = explode('_', $activeids);
        $field_id    = $split_val[0];
        $field_order = $split_val[1];
        $order_id    = $split_val[2];
        //check whether id is exist in checkbox or single active request
        //==================================================================
        $rs          = DB::select()->from(MANAGEFIELD)->where('field_order', '=', $field_order)->execute()->as_array();
        if ($field_order < $order_id) {
            $set_order = $field_order;
            for ($i = $field_order; $i < $order_id; $i++) {
                $set_order++;
                /* echo '<br/>'.$set_order.'=>'.$i;
                echo '<br/>'."update manage_field set field_order = ".$i." field_order = ".$set_order; */
                $result = DB::update(MANAGEFIELD)->set([
                    'field_order' => $i
                ])->where('field_order', '=', $set_order)->execute();
            }
            /* echo '<br/>'."update manage_field set field_order = ".$order_id." field_id = ".$field_id; */
            $result = DB::update(MANAGEFIELD)->set([
                'field_order' => $order_id
            ])->where('field_id', '=', $field_id)->execute();
        } else {
            $set_value = $set_order = $field_order;
            for ($i = $order_id; $i < $field_order; $i++) {
                $set_value--;
                /* echo '<br/>'.$set_order.'=>'.$i;
                echo '<br/>'."update manage_field set field_order = ".$set_order." field_order = ".$set_value; */
                $result = DB::update(MANAGEFIELD)->set([
                    'field_order' => $set_order
                ])->where('field_order', '=', $set_value)->execute();
                $set_order--;
            }
            /* echo '<br/>'."update manage_field set field_order = ".$order_id." field_id = ".$field_id; */
            $result = DB::update(MANAGEFIELD)->set([
                'field_order' => $order_id
            ])->where('field_id', '=', $field_id)->execute();
        }
        //exit;
        return count($result);
    }
    public function taxi_list()
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_company', '=', $company_id)->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc')->execute()->as_array();
            return $rs;
        }
    }
	public function validate_packagetaxi($cid)
    {
		$current_time = convert_timezone('now', TIMEZONE);
		/*$total_query  = "SELECT people.id ,(select upgrade_no_taxi from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as no_taxi,(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( check_package_type = 'T' or upgrade_expirydate >='$current_time' )";
        //$total_query = " select (upgrade_no_taxi) as no_taxi,check_package_type.upgrade_expirydate from " . PACKAGE_REPORT . "  where ".PACKAGE_REPORT.".upgrade_companyid = '$cid'  and (upgrade_expirydate >= now() or check_package_type ='T') order by upgrade_id desc limit 0,1";
        //	$total_query = " select (upgrade_no_taxi) as no_taxi,upgrade_expirydate from " . PACKAGE_REPORT . "  where ".PACKAGE_REPORT.".upgrade_companyid = '$cid'  and (upgrade_expirydate >= now() or check_package_type ='T') order by upgrade_id desc limit 0,1";
        $total_result = Db::query(Database::SELECT, $total_query)->execute()->as_array();
        $added_query  = " select count(taxi_id) as taxi_count from " . TAXI . "  where taxi_company = '$cid' and taxi_availability = 'A'";
        $added_result = Db::query(Database::SELECT, $added_query)->execute()->as_array();
		//echo '<pre>';print_r($total_result);print_r($added_result);exit;
        if (count($total_result) > 0) {
            if ($total_result[0]['check_package_type'] == 'T') {
                $taxi_add = 1;
            } else {
                $taxi_add = $total_result[0]['no_taxi'] - $added_result[0]['taxi_count'];
            }
        } else {
            $taxi_add = 0;
        }
        return $taxi_add; */
		
		//MongoDB
        $arguments = [
			['$match'=> ['upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>['$gte' => $current_time ]]],
			['$project' => ['no_taxi'=> '$upgrade_no_taxi','check_package_type' => '$check_package_type']],
			['$sort' => ['upgrade_id' => -1]],
			['$limit' => 1],
		];
		$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
		$taxi_count = $this->mongo_db->count(MDB_TAXI,['taxi_company' => (int)$cid, 'taxi_availability' => 'A']);
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
	public function validate_package_assigntaxi($cid)
    {
        $current_time = convert_timezone('now', TIMEZONE);
        /*$total_query  = "SELECT people.id ,(select upgrade_no_taxi from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as no_taxi,(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( check_package_type = 'T' or upgrade_expirydate >='$current_time' )";
        $total_result = Db::query(Database::SELECT, $total_query)->execute()->as_array();
        return (count($total_result) > 0)?1:0;*/
		
		//MongoDB
        $arguments = [
			['$match'=> ['upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>['$gte' => $current_time ]]],
			['$project' => ['no_taxi'=> '$upgrade_no_taxi','check_package_type' => '$check_package_type']],
			['$sort' => ['upgrade_id' => -1]],
			['$limit' => 1],
		];
		$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
		return (isset($result['result']) && count($result['result']) > 0)?1:0;
    }

    public function all_taxi_list($offset, $val,$find_count=false)
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        /*if ($usertype == 'M') {
            $result  = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_country', '=', $country_id)->where('taxi_state', '=', $state_id)->where('taxi_city', '=', $city_id)->where('taxi_company', '=', $company_id)->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc');
        } else if ($usertype == 'C') {
            $result  = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_company', '=', $company_id)->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc');
        } else {
            $result  = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where('taxi_status', '!=', 'T')->order_by('taxi_id', 'desc');			
        }
        if($find_count){
			$result = $result->execute()->as_array();
			return count($result);
		} else {
			$result = $result->limit($val)->offset($offset)->execute()->as_array();
			$details = array();
			foreach ($result as $key => $res) {
				$details[$key]['created_by']        = $this->userNamebyId($res['taxi_createdby']);
				$details[$key]['taxi_id']           = $res['taxi_id'];
				$details[$key]['taxi_availability'] = $res['taxi_availability'];
				$details[$key]['taxi_status']       = $res['taxi_status'];
				$details[$key]['taxi_no']           = $res['taxi_no'];
				$details[$key]['company_name']      = $res['company_name'];
				$details[$key]['motor_name']        = $res['motor_name'];
				$details[$key]['model_name']        = $res['model_name'];
				$details[$key]['taxi_capacity']     = $res['taxi_capacity'];
				$details[$key]['taxi_fare_km']      = $res['taxi_fare_km'];
				$details[$key]['company_id']        = $res['userid'];
				$details[$key]['taxi_owner_name']   = $res['taxi_owner_name'];
			}
			return $details;
		}
		*/
		//MongoDB
		if ($usertype == 'M' || $usertype == 'A') {
			$match_query = ['taxi.taxi_country'=>(int)$country_id,'taxi.taxi_state'=>(int)$state_id,'taxi.taxi_city'=>(int)$city_id,'taxi.taxi_company'=>(int)$company_id,'taxi.taxi_status'=>['$ne'=>'T']];
		} else if ($usertype == 'C' ) {
			$match_query = ['taxi.taxi_company'=>(int)$company_id,'taxi.taxi_status'=>['$ne'=>'T']];
		} else {
			$match_query = ['taxi.taxi_status'=>['$ne'=>'T']];
		}
		if($find_count){
			$arguments = [
				['$unwind' => '$stateinfo'],
				['$unwind' => '$stateinfo.cityinfo'],
				['$lookup' => [
						'from' => MDB_TAXI,
						'localField'=> 'stateinfo.cityinfo.city_id',
						'foreignField'=> "taxi_country",
						'foreignField'=> "taxi_city",
						'as'=> "taxi"
					]
				],
				['$unwind' => '$taxi'],
				['$lookup' => [
						'from' => MDB_COMPANY,
						'localField' => 'taxi.taxi_company',
						'foreignField' => "_id",
						'as' => "company"
					]
				],
				['$unwind' => '$company'],
				['$lookup' => [
						'from' => MDB_MOTOR_MODEL,
						'localField' => 'taxi.taxi_model',
						'foreignField' => "_id",
						'as' => "motormodel"
					]
				],
				['$unwind' => '$motormodel'],
				['$match'  => $match_query],
				['$sort' =>['taxi.created_date' => -1] ],
				['$project' => ['_id'=>0,
						'taxi_id' => '$taxi._id',
					]
				],[
					'$group' => [
						'_id' => NULL,
						'count' => [
							'$sum' => 1
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result'][0]['count']:0;
		} else {
			$arguments = [
				['$unwind' => '$stateinfo'],
				['$unwind' => '$stateinfo.cityinfo'],
				['$lookup' => [
						'from' => MDB_TAXI,
						'localField'=> 'stateinfo.cityinfo.city_id',
						'foreignField'=> "taxi_country",
						'foreignField'=> "taxi_city",
						'as'=> "taxi"
					]
				],
				['$unwind' => '$taxi'],
				['$lookup' => [
						'from' => MDB_COMPANY,
						'localField' => 'taxi.taxi_company',
						'foreignField' => "_id",
						'as' => "company"
					]
				],
				['$unwind' => '$company'],
				['$lookup' => [
						'from' => MDB_MOTOR_MODEL,
						'localField' => 'taxi.taxi_model',
						'foreignField' => "_id",
						'as' => "motormodel"
					]
				],
				['$unwind' => '$motormodel'],
				['$match'  => $match_query],
				['$sort' =>['taxi.created_date' => -1] ],
				['$project' => ['_id'=>0,
						'created_by' => '$taxi.taxi_createdby',
						'taxi_id' => '$taxi._id',
						'taxi_availability' => '$taxi.taxi_availability',
						'taxi_status' => '$taxi.taxi_status',
						'company_name' => '$company.companydetails.company_name',
						'model_name' => '$motormodel.model_name',
						'taxi_capacity' => '$taxi.taxi_capacity',
						'taxi_no' => '$taxi.taxi_no',
						'taxi_fare_km' => '$taxi.taxi_fare_km',
						'company_id' => '$taxi.taxi_company',
						'taxi_owner_name' => '$taxi.taxi_owner_name',
						'company_userid' => '$company.companydetails.userid',
					]
				],				
				['$skip' => (int)$offset],
				['$limit' => (int)$val]
			];
			//echo $offset.'='.$val;
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    public function get_all_taxi_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "",$find_count=false)
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        /*if ($usertype == 'M') {
            $createdby_where = " AND taxi_country=$country_id AND taxi_state=$state_id AND taxi_city=$city_id AND taxi_company=$company_id ";
        } else if ($usertype == 'C') {
            $createdby_where = " AND taxi_company = $company_id ";
        } else {
            $createdby_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND taxi_status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (taxi_no LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or taxi_type LIKE '%$keyword%' escape '!' ) ";
        }
		if($find_count){
			$query   = "select * from " . TAXI . " left join " . COUNTRY . "  on  " . TAXI . ".taxi_country =" . COUNTRY . ".country_id left join " . STATE . " on " . TAXI . ".taxi_state =" . STATE . ".state_id left join " . CITY . " on " . TAXI . ".taxi_city =" . CITY . ".city_id   left join " . COMPANY . " on " . TAXI . ".taxi_company = " . COMPANY . ".cid  left join " . MOTORCOMPANY . " on " . TAXI . ".taxi_type =" . MOTORCOMPANY . ".motor_id left join " . MOTORMODEL . " on " . TAXI . ".taxi_model = " . MOTORMODEL . ".model_id where 1=1 $company_where $staus_where $name_where $createdby_where order by taxi_id DESC";
			echo $query;exit;
			$result  = Db::query(Database::SELECT, $query)->execute()->as_array();
			return count($result);
		} else {
			$query   = " select * from " . TAXI . " left join " . COUNTRY . "  on  " . TAXI . ".taxi_country =" . COUNTRY . ".country_id left join " . STATE . " on " . TAXI . ".taxi_state =" . STATE . ".state_id left join " . CITY . " on " . TAXI . ".taxi_city =" . CITY . ".city_id   left join " . COMPANY . " on " . TAXI . ".taxi_company = " . COMPANY . ".cid  left join " . MOTORCOMPANY . " on " . TAXI . ".taxi_type =" . MOTORCOMPANY . ".motor_id left join " . MOTORMODEL . " on " . TAXI . ".taxi_model = " . MOTORMODEL . ".model_id where 1=1 $company_where $staus_where $name_where $createdby_where order by taxi_id DESC limit $val offset  $offset";
			echo $query;exit;
			$result  = Db::query(Database::SELECT, $query)->execute()->as_array();
			$details = array();
			foreach ($result as $key => $res) {
				$details[$key]['created_by']        = $this->userNamebyId($res['taxi_createdby']);
				$details[$key]['taxi_id']           = $res['taxi_id'];
				$details[$key]['taxi_availability'] = $res['taxi_availability'];
				$details[$key]['taxi_status']       = $res['taxi_status'];
				$details[$key]['taxi_no']           = $res['taxi_no'];
				$details[$key]['company_name']      = $res['company_name'];
				$details[$key]['motor_name']        = $res['motor_name'];
				$details[$key]['model_name']        = $res['model_name'];
				$details[$key]['taxi_capacity']     = $res['taxi_capacity'];
				$details[$key]['taxi_fare_km']      = $res['taxi_fare_km'];
				$details[$key]['cid']               = $res['userid'];
			}
			return $details;
		}*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status)) && (!empty($company))) {
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if ((!empty($keyword)) && (!empty($status))){
			if($usertype=='A'){
				$srch_query = [ "\$and" => [['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			}
		} else if ((!empty($keyword)) && (!empty($company))){
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if ((!empty($status)) && (!empty($company))){
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ] ] ];
		} else if (!empty($keyword)) {
			if($usertype=='A'){
				$srch_query = [ "\$and" => [["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			}
		} else if (!empty($company)) {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ]]];
		} else if (!empty($status)) {
			if($usertype=='A'){
				$srch_query = [ "\$and" => [['taxi.taxi_status' => $status ]]];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ]]];
			}
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$lookup' => [
							'from' => MDB_MOTOR_MODEL,
							'localField' => 'taxi.taxi_model',
							'foreignField' => "_id",
							'as' => "motormodel"
						]
					],
					['$unwind' => '$motormodel'],
					['$match'  => $srch_query],
					['$project' => ['_id'=>0,
							'taxi_id' => '$taxi._id',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$lookup' => [
							'from' => MDB_MOTOR_MODEL,
							'localField' => 'taxi.taxi_model',
							'foreignField' => "_id",
							'as' => "motormodel"
						]
					],
					['$unwind' => '$motormodel'],
					['$match'  => $srch_query],
					['$project' => ['_id'=>0,
							'created_by' => '$taxi.taxi_createdby',
							'taxi_id' => '$taxi._id',
							'taxi_availability' => '$taxi.taxi_availability',
							'taxi_status' => '$taxi.taxi_status',
							'company_name' => '$company.companydetails.company_name',
							'model_name' => '$motormodel.model_name',
							'taxi_capacity' => '$taxi.taxi_capacity',
							'taxi_no' => '$taxi.taxi_no',
							'taxi_fare_km' => '$taxi.taxi_fare_km',
							'company_id' => '$taxi.taxi_company',
							'taxi_owner_name' => '$taxi.taxi_owner_name',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    public function active_taxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(TAXI)->set(array(
            'taxi_status' => 'A'
        ))->where('taxi_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>['$in'=>$active_ids]],['$set'=>['taxi_status' => 'A']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function block_taxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        // $arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(TAXI)->set(array(
            'taxi_status' => 'D'
        ))->where('taxi_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>['$in'=>$active_ids]],['$set'=>['taxi_status' => 'D']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
	public function trash_taxi_request($activeids)
    {
        /*$result = DB::update(TAXI)->set(array(
            'taxi_status' => 'T'
        ))->where('taxi_id', 'IN', $activeids)->execute();
        return $result;*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>['$in'=>$active_ids]],['$set'=>['taxi_status' => 'T']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function motorsearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND motor_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (motor_name LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . MOTORCOMPANY . " where 1=1 $staus_where $name_where order by motor_name ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_motorsearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND motor_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (motor_name LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . MOTORCOMPANY . " where 1=1 $staus_where $name_where order by motor_name ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_all_motor_searchlist($keyword = "", $status = "", $offset = "", $val = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND motor_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (motor_name LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . MOTORCOMPANY . " where 1=1 $staus_where $name_where order by motor_name ASC limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function package_list()
    {
        $rs = DB::select()->from(PACKAGE)->order_by('package_name', 'ASC')->execute()->as_array();
        return $rs;
    }
    public function count_package_list()
    {
		/*$rs = DB::select()->from(PACKAGE)->execute()->as_array();
        return count($rs);*/
	   
		
    }
    public function all_package_list($offset, $val,$condition=FALSE)
    {
      /* $result = DB::select()->from(PACKAGE)->order_by('package_name', 'asc')->limit($val)->offset($offset)->execute()->as_array();
		echo '<pre>'; print_r($result);exit;
        return $result;*/
	  //MongoDB
		if($condition == TRUE){
			$res = $this->mongo_db->count(MDB_PACKAGE);
			return $res;
		}else{
			//MongoDB
			$res = $this->mongo_db->find(MDB_PACKAGE,['package_status'=>['$ne'=>'T']],['_id','package_name','package_description','no_of_taxi','no_of_driver','package_price','days_expire','driver_tracking','package_status'])->sort(['package_name'=>1])->skip($offset)->limit($val);
			//echo '<pre>'; print_r(iterator_to_array($res));exit;
			return (!empty($res))?iterator_to_array($res):[];	
		}
		
	
    }
    public function active_package_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PACKAGE)->set(array(
            'package_status' => 'A'
        ))->where('package_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = [];
		foreach($activeids as $each_id):
			$active_ids[] = (int)$each_id;
		endforeach;
		$res = $this->mongo_db->update(MDB_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['package_status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
	
    }
    public function block_package_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PACKAGE)->set(array(
            'package_status' => 'D'
        ))->where('package_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = [];
		foreach($activeids as $each_id):
			$active_ids[] = (int)$each_id;
		endforeach;
		$res = $this->mongo_db->update(MDB_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['package_status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
		
    }
    public function packagesearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND package_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (package_name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . PACKAGE . " where 1=1 $staus_where $name_where order by package_name ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_packagesearch_list($keyword = "", $status = "")
    {
       /* $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND package_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (package_name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . PACKAGE . " where 1=1 $staus_where $name_where order by package_name ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);*/
	
    }
    public function get_all_package_searchlist($keyword = "", $status = "", $offset = "", $val = "", $find_count = FALSE)
    {
       /* $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND package_status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (package_name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . PACKAGE . " where 1=1 $staus_where $name_where order by package_name ASC limit $val offset $offset ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
	   
	   //MongoDB
	   $srch_query = [];
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [[ "package_name" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["package_status" => $status ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "package_name" => new \MongoDB\BSON\Regex($keyword, 'i')];
		} else if (!empty($status)) {
			$srch_query = ["package_status" => $status ];
			
		}
		
		if($find_count) {
			$res = $this->mongo_db->count(MDB_PACKAGE,$srch_query,['_id']);
			return $res;
		} else {
			$res = $this->mongo_db->find(MDB_PACKAGE,$srch_query,['_id','package_name','package_description','no_of_taxi','no_of_driver','package_price','days_expire','driver_tracking','package_status'])->sort(['country_name'=>1])->skip($offset)->limit($val);
			return (!empty($res))?iterator_to_array($res):[];
		}
    }
    public function country_list()
    {
        $rs = DB::select()->from(COUNTRY)->where('country_status', '!=', 'T')->order_by('country_name', 'ASC')->execute()->as_array();
        return $rs;
    }
    public function all_country_list($offset, $val,$find_count=false)
    {
        /*$result = DB::select()->from(COUNTRY)->where('country_status', '!=', 'T')->order_by('country_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;*/
		
		//MongoDB
		if($find_count){
			$res = $this->mongo_db->count(MDB_CSC,['country_status'=>['$ne'=>'T']]);
			return $res;
		} else {
			$res = $this->mongo_db->find(MDB_CSC,['country_status'=>['$ne'=>'T']],['_id','country_name','iso_country_code','telephone_code','currency_code','currency_symbol','country_status','default'])->sort(['country_name'=>1])->skip($offset)->limit($val);
			//echo '<pre>';print_r(iterator_to_array($res));exit;
			return (!empty($res))?iterator_to_array($res):[];
		}
	
    }
    /** update default country status **/
    public function update_default_country($id)
    {
        if ($id == DEFAULT_COUNTRY) {
            return -2;
        }
		/*$country = DB::select('country_status')->from(COUNTRY)->where('country_id', '=', $id)->execute();
        if ($country[0]['country_status'] == 'A') {
            $res    = DB::update(SITEINFO)->set(array(
                'site_country' => $id
            ))->where('id', '=', '1')->execute();
            $result = DB::update(COUNTRY)->set(array(
                'default' => '1'
            ))->where('country_id', '=', $id)->execute();
            if ($result == 1) {
                $result1 = DB::update(COUNTRY)->set(array(
                    'default' => '0'
                ))->where('country_id', '!=', $id)->execute();
            }
            return $result;
        } else {
            return -1;
        }*/
		
		//MongoDB
		$pid = (int)$id;
		$country = $this->mongo_db->find_one(MDB_CSC,['_id'=>$pid],['country_status']);
		if(!empty($country['country_status']) && $country['country_status']=='A'){
			//update with site info collection
			$rs = $this->mongo_db->update(MDB_SITEINFO,['_id'=>1],['$set'=>['site_country' => $pid]],['upsert'=>true]);
			//update default status with 1
			$res = $this->mongo_db->update(MDB_CSC,['_id'=>$pid],['$set'=>['default' => 1]],['upsert'=>true]);
			//update default status with 0
			if(empty($res['err'])){
				$result = $this->mongo_db->update(MDB_CSC,['_id'=>['$ne'=>$pid],'default'=>1],['$set'=>['default' => 0]],['multiple'=>true]);
			}
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return -1;
		}
    }
    /** update default state status **/
    public function update_default_state($pid)
    {
		$data = explode('_',$pid);
		$country_id = (int)$data[0];
		$state_id = (int)$data[1];
		if ($state_id == DEFAULT_STATE) {
            return -2;
        }
        /*$state         = DB::select()->from(STATE)->where('state_countryid', '=', DEFAULT_COUNTRY)->where('state_id', '=', $id)->execute();
        $state_country = $state[0]['state_countryid'];
        
        if ($state_country == DEFAULT_COUNTRY) {
            if ($state[0]['state_status'] == 'A') {
                $result = DB::update(STATE)->set(array(
                    'default' => '1'
                ))->where('state_id', '=', $id)->execute();
                $res    = DB::update(SITEINFO)->set(array(
                    'site_state' => $id
                ))->where('id', '=', '1')->execute();
                if ($result == 1) {
                    $result1 = DB::update(STATE)->set(array(
                        'default' => '0'
                    ))->where('state_id', '!=', $id)->execute();
                }
                return $result;
            } else {
                return -1;
            }
        } else {
            return 0;
        }*/
		//MongoDB
		$state = $this->mongo_db->find_one(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id],['stateinfo.$'=>1]);
		//echo '<pre>';print_r($state);exit;
		if ($country_id == DEFAULT_COUNTRY) {
			if(!empty($state['stateinfo'][0]['state_status']) && $state['stateinfo'][0]['state_status']=='A'){
				//update with site info collection
				$rs = $this->mongo_db->update(MDB_SITEINFO,['_id'=>1],['$set'=>['site_state' => $state_id]],['upsert'=>true]);
				//update default status with 1
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id],['$set'=>['stateinfo.$.default' => 1]],['upsert'=>false]);
				//update default status with 0
				if(empty($res['err'])){
					$result = $this->mongo_db->update(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>['$ne'=>$state_id],'stateinfo.default'=>1],['$set'=>['stateinfo.$.default' => 0]],['multiple'=>true]);
				}
				return (empty($res['err']))?1:$res['errmsg'];
			} else {
				return -1;
			}
		}else{
			return 0;
		}
    }
    /** update default city status **/
    public function update_default_city($pid)
    {
		$data = explode('_',$pid);
		$country_id = (int)$data[0];
		$state_id = (int)$data[1];
		$city_id = (int)$data[2];
		if ($city_id == DEFAULT_CITY) {
            return -2;
        }
        /*$city         = DB::select()->from(CITY)->where('city_countryid', '=', DEFAULT_COUNTRY)->where('city_stateid', '=', DEFAULT_STATE)->where('city_id', '=', $id)->execute();
        $city_country = $city[0]['city_countryid'];
        $city_state   = $city[0]['city_stateid'];
        
        if ($city_country == DEFAULT_COUNTRY && $city_state == DEFAULT_STATE) {
            if ($city[0]['city_status'] == 'A') {
                $result = DB::update(CITY)->set(array(
                    'default' => '1'
                ))->where('city_id', '=', $id)->execute();
                $res    = DB::update(SITEINFO)->set(array(
                    'site_city' => $id
                ))->where('id', '=', '1')->execute();
                if ($result == 1) {
                    $result1 = DB::update(CITY)->set(array(
                        'default' => '0'
                    ))->where('city_id', '!=', $id)->execute();
                }
                return $result;
            } else {
                return -1;
            }
        } else {
            return 0;
        }*/
		//MongoDB
		$city = $this->mongo_db->find_one(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id,'stateinfo.cityinfo.city_id'=>$city_id],['stateinfo.cityinfo.city_status.$'=>1]);
		//echo '<pre>';print_r($city);//exit;
		//Use recursive function search & get value for specific city details with array
		$resultset = $this->recursive_array_search($city,'city_id',$city_id);
		//print_r($resultset);exit;
		if ($country_id == DEFAULT_COUNTRY && $state_id == DEFAULT_STATE) {
			if(!empty($resultset[0]['city_status']) && $resultset[0]['city_status']=='A'){
				//update with site info collection
				$rs = $this->mongo_db->update(MDB_SITEINFO,['_id'=>1],['$set'=>['site_city' => $city_id]],['upsert'=>true]);
				//update default status with 1
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id,'stateinfo.cityinfo.city_id'=>$city_id,'stateinfo.cityinfo.default'=>['$ne'=>1]],['$set'=>['stateinfo.cityinfo.$.default' => 1]],['multiple'=>true]);
				//echo '<pre>';print_r($res);//exit;
				//update default status with 0
				if(empty($res['err'])){
					$result = $this->mongo_db->update(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id,'stateinfo.cityinfo.city_id'=>['$ne'=>$city_id],'stateinfo.cityinfo.default'=>['$ne'=>1]],['$set'=>['stateinfo.cityinfo.$.default' => 0]],['multiple'=>true]);
				}
				//echo '<pre>';print_r($result);exit;
				return (empty($res['err']))?1:$res['errmsg'];
			} else {
				return -1;
			}
		} else {
			return 0;
		}
    }
	//MongoDB Embedded document search value with assosciative array
    function recursive_array_search($array, $key, $value)
	{
		$results = [];
		if (is_array($array)) {
			$arrval = (isset($array[$key])) ? trim(strtolower($array[$key])) : '';
			if($value) $searchval = trim(strtolower($value));
			//search other than department and role
			if ( !empty($arrval) && (($arrval == $searchval) || (is_array($value) && in_array($arrval,$value))) ) {
				$results[] = $array;
			}
			
			foreach ($array as $subarray) {
				$results = array_merge($results, $this->recursive_array_search($subarray, $key, $value));
			}
		}
		return $results;
	}
    public function active_country_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        /*$result = DB::update(COUNTRY)->set(array(
            'country_status' => 'A'
        ))->where('country_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_CSC,['_id'=>['$in'=>$active_ids]],['$set'=>['country_status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function block_country_request($activeids)
    {
        /*$result       = DB::select()->from(PEOPLE)->where('login_country', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $people_count = count($result);
        $result       = DB::select()->from(TAXI)->where('taxi_country', 'IN', $activeids)->order_by('taxi_id', 'ASC')->execute()->as_array();
        $taxi_count   = count($result);
        if ($people_count == 0 && $taxi_count == 0) {
            $result = DB::update(COUNTRY)->set(array(
                'country_status' => 'D'
            ))->where('country_id', 'IN', $activeids);
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		//Checking people & taxi table whether data's are existing with country
		$people_count = $this->mongo_db->count(MDB_PEOPLE,['login_country'=>['$in'=>$active_ids]],	['login_country']);
		$taxi_count = $this->mongo_db->count(MDB_TAXI,['taxi_country'=>['$in'=>$active_ids]],['taxi_country']);
		if($people_count==0 && $taxi_count==0){
			$res = $this->mongo_db->update(MDB_CSC,['_id'=>['$in'=>$active_ids]],['$set'=>['country_status' => 'D']],['multiple'=>true]);
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return 0;
		}
    }
	public function trash_country_request($activeids)
    {
        /*$query        = " select * from " . PEOPLE . " where  login_country IN $activeids order by id ASC";
        $result       = DB::select()->from(PEOPLE)->where('login_country', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $people_count = count($result);
        $result       = DB::select()->from(TAXI)->where('taxi_country', 'IN', $activeids)->order_by('taxi_id', 'ASC')->execute()->as_array();
        $taxi_count   = count($result);
        if ($people_count == 0 && $taxi_count == 0) {
            $result = DB::update(COUNTRY)->set(array(
                'country_status' => 'T'
            ))->where('country_id', 'IN', $activeids)->execute();
            return 1;
        } else {
            return 0;
        }*/
		//Here changing array values with string to integers values
		$active_ids = [];
		foreach($activeids as $each_id):
			$active_ids[] = (int)$each_id;
		endforeach;
		//var_dump($active_ids);
		//Checking people & taxi table whether data's are existing with country
		$people_count = $this->mongo_db->count(MDB_PEOPLE,['login_country'=>['$in'=>$active_ids]],	['login_country']);
		$taxi_count = $this->mongo_db->count(MDB_TAXI,['taxi_country'=>['$in'=>$active_ids]],['taxi_country']);
		if($people_count==0 && $taxi_count==0){
			$res = $this->mongo_db->update(MDB_CSC,['_id'=>['$in'=>$active_ids]],['$set'=>['country_status' => 'T']],['multiple'=>true]);
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return 0;
		}
    }
    public function block_gateway($activeids)
    {
        $company_id = $this->company_id;
        /*if ($activeids) {
            $result = DB::update(PAYMENT_GATEWAYS)->set(array(
                'payment_status' => 'D'
            ))->where('id', 'IN', $activeids)->where('company_id', '=', $company_id)->execute();
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		if(!empty($active_ids)){
			$res = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>['$in'=>$active_ids],'company_id'=>(int)$company_id],['$set'=>['payment_status' => 'D']],['multiple'=>true]);
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return 0;
		}
    }
    public function trash_gateway($activeids)
    {
        $company_id = $this->company_id;
        /*if ($activeids) {
            $result = DB::update(PAYMENT_GATEWAYS)->set(array(
                'payment_status' => 'T'
            ))->where('id', 'IN', $activeids)->where('company_id', '=', $company_id)->execute();
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		if(!empty($active_ids)){
			$res = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>['$in'=>$active_ids],'company_id'=>(int)$company_id],['$set'=>['payment_status' => 'T']],['multiple'=>true]);
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return 0;
		}
    }
    public function active_gateway($activeids)
    {
        $company_id = $this->company_id;
        /*if ($activeids) {
            $result = DB::update(PAYMENT_GATEWAYS)->set(array(
                'payment_status' => 'A'
            ))->where('id', 'IN', $activeids)->where('company_id', '=', $company_id)->execute();
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		if(!empty($active_ids)){
			$res = $this->mongo_db->update(MDB_PAYMENT_GATEWAYS,['_id'=>['$in'=>$active_ids],'company_id'=>(int)$company_id],['$set'=>['payment_status' => 'A']],['multiple'=>true]);
			return (empty($res['err']))?1:$res['errmsg'];
		} else {
			return 0;
		}
    }
    public function get_all_country_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        /*//condition for status
        //====================== 
        $staus_where = ($status) ? " AND country_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (country_name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . COUNTRY . " where 1=1 $staus_where $name_where order by country_name ASC limit $val offset $offset ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [[ "country_name" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["country_status" => $status ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "country_name" => new \MongoDB\BSON\Regex($keyword, 'i')];
		} else if (!empty($status)) {
			$srch_query = ["country_status" => $status ];
		}
		//print_r($srch_query);exit;
		if($find_count) {
			$res = $this->mongo_db->count(MDB_CSC,$srch_query);
			return $res;
		} else {
			$res = $this->mongo_db->find(MDB_CSC,$srch_query,['_id','country_name','iso_country_code','telephone_code','currency_code','currency_symbol','country_status','default'])->sort(['country_name'=>1])->skip($offset)->limit($val);
			return (!empty($res))?iterator_to_array($res):[];
		}
    }
    
    public function all_city_list($offset, $val,$find_count=false)
    {
        /*$result = DB::select('*', array(
            CITY . '.default',
            'city_default'
        ))->from(CITY)->join(STATE, 'LEFT')->on(CITY . '.city_stateid', '=', STATE . '.state_id')->join(COUNTRY, 'LEFT')->on(CITY . '.city_countryid', '=', COUNTRY . '.country_id')->where('city_status', '!=', 'T')->order_by('city_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;*/
		
		if($find_count){
			//MongoDB with aggregate process only
			$ops = [
				['$unwind' => '$stateinfo'],
				['$match' => ['stateinfo.cityinfo.city_status'=>['$nin'=>['T']]]],
				['$group'=>['_id' => null,'count'=>[
						'$sum' =>['$size'=> '$stateinfo.cityinfo']
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result'][0]['count']:0;
		} else {
			//MongoDB with aggregate process only
			$ops = [
				['$unwind' => '$stateinfo'],
				['$unwind' => '$stateinfo.cityinfo'],
				['$match' => ['stateinfo.cityinfo.city_status'=>['$ne'=>'T']]],
				['$project' => ['_id' => 0,
					'city_id' => '$stateinfo.cityinfo.city_id', 
					'city_name' => '$stateinfo.cityinfo.city_name',
					'city_stateid' => '$stateinfo.cityinfo.city_stateid',
					'city_countryid' => '$stateinfo.cityinfo.city_countryid',
					'city_status' => '$stateinfo.cityinfo.city_status',
					//'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
					'city_default' => '$stateinfo.cityinfo.default',
					'state_name' => '$stateinfo.state_name',
					'country_name' => '$country_name'
					]
				],
				[
					'$sort' => [
						'country_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    public function active_city_request($activeids)
    {
        /*$result = DB::update(CITY)->set(array(
            'city_status' => 'A'
        ))->where('city_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			$city_id = $data[2];
			//echo $country_id.'=='.$state_id.'=='.$city_id;//exit;
			//Here we getting nested dcouemnts index keys while updating data with city embedded documents
			$state_index = commonfunction::get_collection_index($country_id,$state_id,$city_id,'state');
			$cityindex = commonfunction::get_collection_index($country_id,$state_id,$city_id,'city',true);
			//print_r($state_index);print_r($city_index);
			$city_index = $cityindex['city_index'];
			$index_key = "stateinfo.".$state_index.".cityinfo.".$city_index;
			//echo $index_key;exit;
			$data_set = ['city_id'=>(int)$city_id,
					'city_stateid' => (int)$state_id,
					'city_countryid' => (int)$country_id,
					'default' => $cityindex['city_default'],
					'city_name' => $cityindex['city_name'],
					'zipcode' => $cityindex['zipcode'],
				//	'city_model_fare' => $cityindex['city_model_fare'],
					'city_status'=>'A'
				];
			$data = [$index_key=>$data_set];
			$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id,'stateinfo.cityinfo.city_id'=>(int)$city_id],['$set'=>$data],['upsert'=>true]);
			//echo '<pre>-'.$city_id.'==';print_r($res);exit;
			$cnt+=(empty($res['err']))?1:0;
		}
		return ($count==$cnt)?1:0;
    }
    public function block_city_request($activeids)
    {
        /*$result          = DB::select()->from(SITEINFO)->where('site_city', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $site_city_count = count($result);
        if ($site_city_count == 0) {
            $result = DB::update(CITY)->set(array(
                'city_status' => 'D'
            ))->where('city_id', 'IN', $activeids)->execute();
            return 1;
        } else {
            return 0;
        }
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			$city_id = $data[2];
			//echo $country_id.'=='.$state_id.'=='.$city_id;//exit;
			//Checking site info collection whether data's are existing with country.state
			$city_count = $this->mongo_db->count(MDB_SITEINFO,['site_city'=>(int)$city_id],['site_city']);
			//Here we getting nested dcouemnts index keys while updating data with city embedded documents
			$state_index = commonfunction::get_collection_index($country_id,$state_id,$city_id,'state');
			$cityindex = commonfunction::get_collection_index($country_id,$state_id,$city_id,'city',true);
			//print_r($state_index);print_r($city_index);
			$city_index = $cityindex['city_index'];
			
			$index_key = "stateinfo.".$state_index.".cityinfo.".$city_index;
			//echo $index_key;exit;
			$data_set = ['city_id'=>(int)$city_id,
					'city_stateid' => (int)$state_id,
					'city_countryid' => (int)$country_id,
					'default' => $cityindex['city_default'],
					'city_name' => $cityindex['city_name'],
					'zipcode' => $cityindex['zipcode'],
//					'city_model_fare' => $cityindex['city_model_fare'],
					'city_status'=>'D'
				];
			$data = [$index_key=>$data_set];
			if($city_count==0){
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id,'stateinfo.cityinfo.city_id'=>(int)$city_id],['$set'=>$data],['upsert'=>true]);
				//echo '<pre>-'.$city_id.'==';print_r($res);exit;
				$cnt+=(empty($res['err']))?1:0;
			}
		}
		return ($count==$cnt)?1:0;
    }
    public function trash_city_request($activeids)
    {
        /*$result          = DB::select()->from(SITEINFO)->where('site_city', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $site_city_count = count($result);
        if ($site_city_count == 0) {
            $result = DB::update(CITY)->set(array(
                'city_status' => 'T'
            ))->where('city_id', 'IN', $activeids)->execute();
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			$city_id = $data[2];
			//echo $country_id.'=='.$state_id.'=='.$city_id;//exit;
			//Checking site info collection whether data's are existing with country.state
			$city_count = $this->mongo_db->count(MDB_SITEINFO,['site_city'=>(int)$city_id],['site_city']);
			//Here we getting nested dcouemnts index keys while updating data with city embedded documents
			$state_index = commonfunction::get_collection_index($country_id,$state_id,$city_id,'state');
			$cityindex = commonfunction::get_collection_index($country_id,$state_id,$city_id,'city',true);
			//print_r($state_index);print_r($city_index);
			$city_index = $cityindex['city_index'];
			
			$index_key = "stateinfo.".$state_index.".cityinfo.".$city_index;
			//echo $index_key;exit;
			$data_set = ['city_id'=>(int)$city_id,
					'city_stateid' => (int)$state_id,
					'city_countryid' => (int)$country_id,
					'default' => $cityindex['city_default'],
					'city_name' => $cityindex['city_name'],
					'zipcode' => $cityindex['zipcode'],
					//'city_model_fare' => $cityindex['city_model_fare'],
					'city_status'=>'T'
				];
			$data = [$index_key=>$data_set];
			if($city_count==0){
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id,'stateinfo.cityinfo.city_id'=>(int)$city_id],['$set'=>$data],['upsert'=>true]);
				//echo '<pre>-'.$city_id.'==';print_r($res);exit;
				$cnt+=(empty($res['err']))?1:0;
			}
		}
		return ($count==$cnt)?1:0;
    }
    public function all_state_list($offset, $val,$find_count=false)
    {
		//echo $offset.'='.$val;exit;
        /*$result = DB::select('*', array(
            STATE . '.default',
            'state_default'
        ))->from(STATE)->join(COUNTRY, 'LEFT')->on(STATE . '.state_countryid', '=', COUNTRY . '.country_id')->where('state_status', '!=', 'T')->order_by('state_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;*/
		
		if($find_count){
			//MongoDB with aggregate process only
			$ops = [
				['$match' => ['stateinfo.state_status'=>['$nin'=>['T']]]],
				[
					'$group'=>['_id' => null,'count'=>[
							'$sum' =>['$size'=> '$stateinfo']
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			return (!empty($result['result']))?$result['result'][0]['count']:0;
		} else {
			//MongoDB with aggregate process only
			$ops = [
				['$unwind' => '$stateinfo'],
				['$match' => ['stateinfo.state_status'=>['$ne'=>'T']]],
				['$project' => ['_id' => 0,
					'state_id' => '$stateinfo.state_id', 
					'state_name' => '$stateinfo.state_name',
					'state_countryid' => '$stateinfo.state_countryid',
					'state_status' => '$stateinfo.state_status',
					'state_default' => '$stateinfo.default',
					'country_name' => '$country_name'
					]
				],
				[
					'$sort' => [
						'country_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    public function active_state_request($activeids)
    {
		//echo '<pre>';print_r($activeids);exit;
        /*$result = DB::update(STATE)->set(array(
            'state_status' => 'A'
        ))->where('state_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_countryid'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id],['$set'=>['stateinfo.$.state_status' => 'A']],['upsert'=>true]);
			//echo '<pre>-'.$state_id.'==';print_r($res);exit;
			$cnt+=(empty($res['err']))?1:0;
		}
		return ($count==$cnt)?1:0;
    }
    public function block_state_request($activeids)
    {
		//echo '<pre>';print_r($activeids);exit;
        /*$result      = DB::select()->from(SITEINFO)->where('site_state', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $state_count = count($result);
        if ($state_count == 0) {
            $result = DB::update(STATE)->set(array(
                'state_status' => 'D'
            ))->where('state_id', 'IN', $activeids)->execute();
            return 1;
        } else {
            return 0;
        }
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			//Checking site info collection whether data's are existing with country.state
			$state_count = $this->mongo_db->count(MDB_SITEINFO,['site_state'=>(int)$state_id],	['site_state']);
			if($state_count==0){
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_countryid'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id],['$set'=>['stateinfo.$.state_status' => 'D']],['upsert'=>true]);
				//echo '<pre>-'.$state_id.'==';print_r($res);exit;
				$cnt+=(empty($res['err']))?1:0;
			}
		}
		return ($count==$cnt)?1:0;
    }
    public function trash_state_request($activeids)
    {
		/*echo '<pre>';print_r($activeids);exit;
        $result      = DB::select()->from(SITEINFO)->where('site_state', 'IN', $activeids)->order_by('id', 'ASC')->execute()->as_array();
        $state_count = count($result);
        if ($state_count == 0) {
            $result = DB::update(STATE)->set(array(
                'state_status' => 'T'
            ))->where('state_id', 'IN', $activeids)->execute();
            return 1;
        } else {
            return 0;
        }*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$count = count($active_ids);
		$cnt=0;
		foreach($activeids as $val){
			$data = explode('_',$val);
			$country_id = $data[0];
			$state_id = $data[1];
			//Checking site info collection whether data's are existing with country.state
			$state_count = $this->mongo_db->count(MDB_SITEINFO,['site_state'=>(int)$state_id],	['site_state']);
			if($state_count==0){
				$res = $this->mongo_db->update(MDB_CSC,['_id'=>(int)$country_id,'stateinfo.state_countryid'=>(int)$country_id,'stateinfo.state_id'=>(int)$state_id],['$set'=>['stateinfo.$.state_status' => 'T']],['upsert'=>true]);
				//echo '<pre>-'.$state_id.'==';print_r($res);exit;
				$cnt+=(empty($res['err']))?1:0;
			}
		}
		return ($count==$cnt)?1:0;
    }
    public function get_all_state_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        /*$staus_where = ($status) ? " AND state_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (state_name LIKE  '%$keyword%'";
            $name_where .= " or country_name LIKE  '%$keyword%' )";
        }
        $query   = " select *," . STATE . ".default as state_default from " . STATE . " left join " . COUNTRY . " on " . STATE . ".state_countryid =" . COUNTRY . ".country_id  where 1=1 $staus_where $name_where order by state_name ASC limit $val offset  $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return ($find_count)?count($results):$results;*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [['stateinfo.state_status' => $status ],["\$or"=>[[ 'country_name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'stateinfo.state_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "\$or" => [[ 'country_name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'stateinfo.state_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ];
		} else if (!empty($status)) {
			$srch_query = ["stateinfo.state_status" => $status ];
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count) {
			$ops = [
				[
					  '$match' => $srch_query,
				],
				[
						'$group'=>['_id' => null,'count'=>[
							'$sum' =>['$size'=> '$stateinfo']
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>if';print_r($result);exit;
			return (!empty($result['result']))?$result['result'][0]['count']:0;
		} else {
			$ops = [
					['$unwind' => '$stateinfo'],
					['$match' => $srch_query],
					['$project' => ['_id' => 0,
						'state_id' => '$stateinfo.state_id', 
						'state_name' => '$stateinfo.state_name',
						'state_countryid' => '$stateinfo.state_countryid',
						'state_status' => '$stateinfo.state_status',
						'state_default' => '$stateinfo.default',
						'country_name' => '$country_name'
					]
				],
				[
					'$sort' => [
						'country_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>else';print_r($result);//exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    
    public function get_all_city_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        /*$staus_where = ($status) ? " AND city_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (city_name LIKE  '%$keyword%'";
            $name_where .= " or state_name LIKE  '%$keyword%'";
            $name_where .= " or country_name LIKE  '%$keyword%' )";
        }
        $query   = " select *," . CITY . ".default as city_default from " . CITY . " left join " . STATE . " on " . CITY . ".city_stateid =" . STATE . ".state_id left join " . COUNTRY . " on " . CITY . ".city_countryid =" . COUNTRY . ".country_id  where 1=1 $staus_where $name_where order by city_name ASC limit $val offset  $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [['stateinfo.cityinfo.city_status' => $status ],["\$or"=>[[ 'country_name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'stateinfo.state_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] , [ 'stateinfo.cityinfo.city_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "\$or" => [[ 'country_name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'stateinfo.state_name' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'stateinfo.cityinfo.city_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ];
		} else if (!empty($status)) {
			$srch_query = ["stateinfo.cityinfo.city_status" => $status ];
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count) {
			$ops = [
				['$unwind' => '$stateinfo'],
				[
					  '$match' => $srch_query,
				],
				[
						'$group'=>['_id' => null,'count'=>[
							'$sum' =>['$size'=> '$stateinfo.cityinfo']
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>if';print_r($result);exit;
			return (!empty($result['result']))?count($result['result']):0;
		} else {
			$ops = [
				['$unwind' => '$stateinfo'],
				['$unwind' => '$stateinfo.cityinfo'],
				['$match' => $srch_query],
				['$project' => ['_id' => 0,
					'city_id' => '$stateinfo.cityinfo.city_id', 
					'city_name' => '$stateinfo.cityinfo.city_name',
					'city_stateid' => '$stateinfo.cityinfo.city_stateid',
					'city_countryid' => '$stateinfo.cityinfo.city_countryid',
					'city_status' => '$stateinfo.cityinfo.city_status',
					//'city_model_fare' => '$stateinfo.cityinfo.city_model_fare',
					'city_default' => '$stateinfo.cityinfo.default',
					'state_name' => '$stateinfo.state_name',
					'country_name' => '$country_name'
					]
				],
				[
					'$sort' => [
						'country_name' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$ops);
			//echo '<pre>else';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    public function searchmanager_list($keyword = "", $status = "", $company = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND user_createdby = $user_createdby AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . PEOPLE . " left join " . COMPANY . " on " . PEOPLE . ".company_id = " . COMPANY . ".cid  left join " . COUNTRY . " on " . PEOPLE . ".login_country = " . COUNTRY . ".country_id   left join " . STATE . " on " . PEOPLE . ".login_state = " . STATE . ".state_id    left join " . CITY . " on " . PEOPLE . ".login_city = " . CITY . ".city_id  where " . PEOPLE . ".user_type = 'M' $company_where $staus_where $name_where $user_created_where order by created_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_searchmanager_list($keyword = "", $status = "", $company = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND user_createdby = $user_createdby AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . PEOPLE . " left join " . COMPANY . " on " . PEOPLE . ".company_id = " . COMPANY . ".cid  left join " . COUNTRY . " on " . PEOPLE . ".login_country = " . COUNTRY . ".country_id   left join " . STATE . " on " . PEOPLE . ".login_state = " . STATE . ".state_id    left join " . CITY . " on " . PEOPLE . ".login_city = " . CITY . ".city_id  where " . PEOPLE . ".user_type = 'M' $company_where $staus_where $name_where $user_created_where order by created_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
	
	public function all_manager_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = (int)$this->company_id;
        
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$status = ($status!="")?$status:['$ne' => 'T'];
		
		$company_id = ($company_id!="" || $company_id!=0)?$company_id:"";
		$c_id = ($company!="")?$company:$company_id;
		//echo $c_id.",".$company_id;
		if ($usertype == 'M' && $c_id!="") {
			$match_query = ['people.user_createdby' => (int)$user_createdby, 'people.company_id' => (int)$c_id, 'people.user_type' => 'M', 'people.status' => $status ];
		} else if ($usertype == 'C' && $c_id!="") {
			$match_query = ['people.company_id' => (int)$c_id, 'people.user_type' => 'M', 'people.status' => $status ];
		}else if ($c_id!="") {
			$match_query = ["people.company_id" => (int)$c_id,'people.status' => $status, 'people.user_type' => 'M'];
		}else {
			$match_query = ['people.status' => $status,'people.user_type' => 'M' ];
		}
		
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}
		//echo '<pre>';print_r($srch_query);//exit;
        if($find_count==TRUE){	
			$arguments = [
						['$unwind' => '$stateinfo'],
						['$unwind' => '$stateinfo.cityinfo'],
						['$lookup' 		=> [
								'from'			=>	MDB_PEOPLE,
								'localField'	=> 'stateinfo.cityinfo.city_id',
								'foreignField'	=> "login_country",
								'foreignField'	=> "login_state",
								'foreignField'	=> "login_city",
								'as'			=> "people"
							]
						],
						['$unwind' => '$people'],
						['$lookup' 		=> [
								'from'			=>	MDB_COMPANY,
								'localField'	=> 'people.company_id',
								'foreignField'	=> "_id",
								'as'			=> "company"
							]
						],
						['$unwind' => '$company'],
						['$match'	=> $srch_query],
						[
							'$project' => [
								'result' => '$people._id',
							]
						],
					];
            $result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r(count($result['result'])); exit;
            return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		}else{
			$arguments = [
						['$unwind' => '$stateinfo'],
						['$unwind' => '$stateinfo.cityinfo'],
						['$lookup' 		=> [
								'from'			=>	MDB_PEOPLE,
								'localField'	=> 'stateinfo.cityinfo.city_id',
								'foreignField'	=> "login_country",
								'foreignField'	=> "login_state",
								'foreignField'	=> "login_city",
								'as'			=> "people"
							]
						],
						['$unwind' => '$people'],
						['$lookup' 		=> [
								'from'			=>	MDB_COMPANY,
								'localField'	=> 'people.company_id',
								'foreignField'	=> "_id",
								'as'			=> "company"
							]
						],
						['$unwind' => '$company'],
						['$match'	=> $srch_query],
						[
							'$project' => [
								'pid' => '$people._id',
								'status' => '$people.status',
								'name'=>'$people.name',
								'email'=>'$people.email',
								'address'=>'$people.address',
								'country_name'=>'$country_name',
								'state_name'=>'$stateinfo.state_name',
								'city_name'=>'$stateinfo.cityinfo.city_name',
								'company_name' => '$company.companydetails.company_name',
								'userid' => '$company.companydetails.userid',
								'company_id' => '$company._id',
							]
						],
						[
							'$sort' => [
								'people.created_date' => 1
							],
						],
						[
							'$skip' => (int)$offset
						],
						[
						  '$limit' => (int)$val
						]
					];
            $result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
	
    public function all_admin_searchlist($keyword = "", $status = "", $offset = "", $val = "",$find_count=false)
    {
        /*$keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND status = '$status'" : "";
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . PEOPLE . " left join " . COUNTRY . " on " . PEOPLE . ".login_country = " . COUNTRY . ".country_id   left join " . STATE . " on " . PEOPLE . ".login_state = " . STATE . ".state_id    left join " . CITY . " on " . PEOPLE . ".login_city = " . CITY . ".city_id  where " . PEOPLE . ".user_type = 'S' $staus_where $name_where order by created_date DESC limit $val offset  $offset ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [['user_type' => 'S' ],['status' => $status ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "\$and" => [['user_type' => 'S' ],["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if (!empty($status)) {
			$srch_query = [ "\$and" => [['user_type' => 'S' ],["status" => $status ]]];
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count) {
			$ops = [
				[
					  '$match' => $srch_query,
				],
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
						'$group'=>['_id' => null,'count'=>[
							'$sum' =>1
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			//echo '<pre>if';print_r($result);exit;
			return (!empty($result['result']))?count($result['result']):0;
		} else {
			$ops = [
				['$match' => $srch_query],
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
				],
				[
					'$sort' => [
						'_id' => 1
					],
				],
				[
					'$skip' => (int)$offset
				],
				[
				  '$limit' => (int)$val
				]
			];
			$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			//echo '<pre>else';print_r($result);exit;
			return (!empty($result['result']))?$result['result']:[];
		}
    }
    
    public function searchdriver_list($keyword = "", $status = "", $company = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $user_created_where = " AND login_country = $country_id AND login_state = $state_id AND login_city = $city_id AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query  = " select * from " . PEOPLE . " left join " . COMPANY . " on " . PEOPLE . ".company_id = " . COMPANY . ".cid  left join " . COUNTRY . " on " . PEOPLE . ".login_country = " . COUNTRY . ".country_id   left join " . STATE . " on " . PEOPLE . ".login_state = " . STATE . ".state_id    left join " . CITY . " on " . PEOPLE . ".login_city = " . CITY . ".city_id  where " . PEOPLE . ".user_type = 'D' $company_where $staus_where $name_where $user_created_where order by created_date DESC";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
	
	public function get_all_driver_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$status = ($status!="")?$status:['$ne' => 'T'];
		$c_id = ($company!="")?$company:$company_id;
		if ($usertype == 'M') {
			$match_query = ['people.user_type'=>'D', 'people.login_country'=>(int) $country_id,'people.login_state' =>(int) $state_id,'people.login_city'=>(int) $city_id,'people.company_id' => (int)$c_id,'people.status' => $status];
		} else if ($usertype == 'C') {
			$match_query = ['people.user_type'=>'D', 'people.company_id' => (int)$c_id,'people.status' => $status ];
		}elseif((int)$c_id!="" || (int)$c_id!=0) {
			$match_query = ['people.user_type'=>'D', 'people.company_id' => (int)$c_id,'people.status' => $status ];
		}else{
			$match_query = ['people.user_type'=>'D', 'people.status' => $status ];
		}
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.phone' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}
		//echo "<pre>"; print_r($srch_query); exit;
		$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'people.company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'people._id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $srch_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
		//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'driver_code' => '$people.driver_code',
						'email' => '$people.email',
						'company_name' => '$company.companydetails.company_name',
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'driver_license_id' => '$people.driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'driver_status' => '$people.status',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
    
    public function get_all_undriver_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count=false)
    {
        $user_createdby                  = $this->userid;
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$status = ($status!="")?$status:['$ne' => 'T'];
		$c_id = ($company!="")?$company:$company_id;
		if ($usertype == 'M') {
			$match_query = ['people.user_type'=>'D', 'people.login_country'=>(int) $country_id,'people.login_state' =>(int) $state_id,'people.login_city'=>(int) $city_id,'people.company_id' => (int)$c_id,'people.availability_status' => $status];
		} else if ($usertype == 'C') {
			$match_query = ['people.user_type'=>'D', 'people.company_id' => (int)$c_id,'people.availability_status' => $status ];
		}elseif((int)$c_id!="" || (int)$c_id!=0) {
			$match_query = ['people.user_type'=>'D', 'people.company_id' => (int)$c_id,'people.availability_status' => $status ];
		}else{
			$match_query = ['people.user_type'=>'D', 'people.availability_status' => $status ];
		}
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}
		$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'people.company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'people._id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $srch_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'email' => '$people.email',
						'company_name' => '$company.companydetails.company_name',
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'driver_license_id' => '$people.driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'driver_status' => '$people.status',
					]
				],
				['$skip'	=> (int)$offset ],
				//array('$limit'	=> (int)$val )
			];
			
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			return (!empty($result['result'])) ? $result['result'] : [];
		}
		/*$user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $user_created_where = " AND login_country = $country_id AND login_state = $state_id
			AND login_city = $city_id AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND " . PEOPLE . ".status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or phone LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select *," . PEOPLE . ".id," . PEOPLE . ".status as driver_status from " . PEOPLE . " left join " . COMPANY . " on " . PEOPLE . ".company_id = " . COMPANY . ".cid  left join " . COUNTRY . " on " . PEOPLE . ".login_country = " . COUNTRY . ".country_id   left join " . STATE . " on " . PEOPLE . ".login_state = " . STATE . ".state_id    left join " . CITY . " on " . PEOPLE . ".login_city = " . CITY . ".city_id left join " . DRIVER . " on " . PEOPLE . ".id = " . DRIVER . ".driver_id where " . PEOPLE . ".user_type = 'D' $company_where $staus_where $name_where $user_created_where order by created_date DESC limit $val offset  $offset";
		echo $query;exit;
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['created_by']          = $this->userNamebyId($res['user_createdby']);
            $details[$key]['name']                = $res['name'];
            $details[$key]['username']            = $res['username'];
            $details[$key]['email']               = $res['email'];
            $details[$key]['address']             = $res['address'];
            $details[$key]['company_name']        = $res['company_name'];
            $details[$key]['availability_status'] = $res['availability_status'];
            $details[$key]['status']              = $res['status'];
            $details[$key]['id']                  = $res['id'];
            $details[$key]['driver_license_id']   = $res['driver_license_id'];
            $details[$key]['shift_status']        = $res['shift_status'];
            $details[$key]['phone']               = $res['phone'];
            $details[$key]['country_name']        = $res['country_name'];
            $details[$key]['city_name']           = $res['city_name'];
            $details[$key]['state_name']          = $res['state_name'];
            $details[$key]['cid']                 = $res['userid'];
            $details[$key]['photo']               = $res['profile_picture'];
            $details[$key]['driver_status']       = $res['driver_status'];
        }
        return $details;*/
    }

    
    public function get_all_untaxi_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "",$find_count=false)
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		
        /*if ($usertype == 'M') {
            $createdby_where = " AND taxi_country=$country_id AND taxi_state=$state_id AND taxi_city=$city_id AND taxi_company=$company_id ";
        } else if ($usertype == 'C') {
            $createdby_where = " AND taxi_company = $company_id ";
        } else {
            $createdby_where = "";
        }
        
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $staus_where   = ($status) ? " AND taxi_availability = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (taxi_no LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or taxi_type LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . TAXI . " left join " . COUNTRY . "  on  " . TAXI . ".taxi_country =" . COUNTRY . ".country_id left join " . STATE . " on " . TAXI . ".taxi_state =" . STATE . ".state_id left join " . CITY . " on " . TAXI . ".taxi_city =" . CITY . ".city_id   left join " . COMPANY . " on " . TAXI . ".taxi_company = " . COMPANY . ".cid  left join " . MOTORCOMPANY . " on " . TAXI . ".taxi_type =" . MOTORCOMPANY . ".motor_id left join " . MOTORMODEL . " on " . TAXI . ".taxi_model = " . MOTORMODEL . ".model_id where 1=1 $company_where $staus_where $name_where $createdby_where order by taxi_id DESC limit $val offset  $offset";
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['created_by']        = $this->userNamebyId($res['taxi_createdby']);
            $details[$key]['taxi_id']           = $res['taxi_id'];
            $details[$key]['taxi_availability'] = $res['taxi_availability'];
            $details[$key]['taxi_status']       = $res['taxi_status'];
            $details[$key]['taxi_no']           = $res['taxi_no'];
            $details[$key]['company_name']      = $res['company_name'];
            $details[$key]['motor_name']        = $res['motor_name'];
            $details[$key]['model_name']        = $res['model_name'];
            $details[$key]['taxi_capacity']     = $res['taxi_capacity'];
            $details[$key]['taxi_fare_km']      = $res['taxi_fare_km'];
            $details[$key]['cid']               = $res['userid'];
        }
        return $details;*/
		
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status)) && (!empty($company))) {
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if ((!empty($keyword)) && (!empty($status))){
			if($usertype=='A'){
				$srch_query = [ "\$and" => [['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			}
		} else if ((!empty($keyword)) && (!empty($company))){
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		} else if ((!empty($status)) && (!empty($company))){
			$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ] ] ];
		} else if (!empty($keyword)) {
			if($usertype=='A'){
				$srch_query = [ "\$and" => [["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'taxi.taxi_type' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
			}
		} else if (!empty($company)) {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ]]];
		} else if (!empty($status)) {
			if($usertype=='A'){
				$srch_query = [ "\$and" => [['taxi.taxi_status' => $status ]]];
			} else {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['taxi.taxi_status' => $status ]]];
			}
		}
		//echo '<pre>';print_r($srch_query);//exit;
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$lookup' => [
							'from' => MDB_MOTOR_MODEL,
							'localField' => 'taxi.taxi_model',
							'foreignField' => "_id",
							'as' => "motormodel"
						]
					],
					['$unwind' => '$motormodel'],
					['$match'  => $srch_query],
					['$project' => ['_id'=>0,
							'taxi_id' => '$taxi._id',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$lookup' => [
							'from' => MDB_MOTOR_MODEL,
							'localField' => 'taxi.taxi_model',
							'foreignField' => "_id",
							'as' => "motormodel"
						]
					],
					['$unwind' => '$motormodel'],
					['$match'  => $srch_query],
					['$project' => ['_id'=>0,
							'created_by' => '$taxi.taxi_createdby',
							'taxi_id' => '$taxi._id',
							'taxi_availability' => '$taxi.taxi_availability',
							'taxi_status' => '$taxi.taxi_status',
							'company_name' => '$company.companydetails.company_name',
							'model_name' => '$motormodel.model_name',
							'taxi_capacity' => '$taxi.taxi_capacity',
							'taxi_no' => '$taxi.taxi_no',
							'taxi_fare_km' => '$taxi.taxi_fare_km',
							'company_id' => '$taxi.taxi_company',
							'taxi_owner_name' => '$taxi.taxi_owner_name',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    
    public function manager_list()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'M')->where('user_createdby', '=', $user_createdby)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'M')->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'M')->order_by('created_date', 'desc')->execute()->as_array();
            return $rs;
        }
    }

    public function all_manager_list($offset, $val,$find_count=FALSE)
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
		
		/*if ($usertype == 'M') {
            $result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where('user_type', '=', 'M')->where('status', '!=', 'T')->where('user_createdby', '=', $user_createdby)->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
				return $result;
			 } else if ($usertype == 'C') {
				$result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where('user_type', '=', 'M')->where('status', '!=', 'T')->where('company_id', '=', $company_id)->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
				return $result;
			} else {
				$result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where(PEOPLE . '.user_type', '=', 'M')->where('status', '!=', 'T')->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
				return $result;
			}
			*/
		if ($usertype == 'M') {
			$match_query = ['people.company_id' => (int)$company_id,'people.user_createdby' => (int)$this->user_createdby, 'people.user_type' => 'M', 'people.status' => ['$ne' => 'T'] ];
		} else if ($usertype == 'C') {
			$match_query = ['people.company_id' => (int)$company_id, 'people.user_type' => 'M', 'people.status' => ['$ne' => 'T'] ];
		} else {
			$match_query = [ 'people.user_type' => 'M', 'people.status' => ['$ne' => 'T']];
		}
		
        if($find_count==TRUE){	
			$arguments = [
						['$unwind' => '$stateinfo'],
						['$unwind' => '$stateinfo.cityinfo'],
						['$lookup' 		=> [
								'from'			=>	MDB_PEOPLE,
								'localField'	=> 'stateinfo.cityinfo.city_id',
								'foreignField'	=> "login_country",
								'foreignField'	=> "login_city",
								'as'			=> "people"
							]
						],
						['$unwind' => '$people'],
						['$lookup' 		=> [
								'from'			=>	MDB_COMPANY,
								'localField'	=> 'people.company_id',
								'foreignField'	=> "_id",
								'as'			=> "company"
							]
						],
						['$unwind' => '$company'],
						['$match'	=> $match_query],
						[
							'$project' => [
								'result' => '$people._id',
							]
						],
					];
            $result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r(count($result['result'])); exit;
            return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
        }else{
            $arguments = [
						['$unwind' => '$stateinfo'],
						['$unwind' => '$stateinfo.cityinfo'],
						['$lookup' 		=> [
								'from'			=>	MDB_PEOPLE,
								'localField'	=> 'stateinfo.cityinfo.city_id',
								'foreignField'	=> "login_country",
								'foreignField'	=> "login_city",
								'as'			=> "people"
							]
						],
						['$unwind' => '$people'],
						['$lookup' 		=> [
								'from'			=>	MDB_COMPANY,
								'localField'	=> 'people.company_id',
								'foreignField'	=> "_id",
								'as'			=> "company"
							]
						],
						['$unwind' => '$company'],
						['$match'	=> $match_query],
						['$project' 		=> [
								'country_name' => '$country_name',
								'state_name' => '$stateinfo.state_name',
								'city_name' => '$stateinfo.cityinfo.city_name',
								'company_id' 	=> '$company._id',
								'company_name' 	=> '$company.companydetails.company_name',
								'userid' 	=> '$company.companydetails.userid',
								'created_date' => '$people.created_date',
								'pid' => '$people._id',
								'status' => '$people.status',
								'name' => '$people.name',
								'email' => '$people.email',
								'address'=>'$people.address'
							]
						],
						['$sort'	=>['people.created_date' => -1] ],
						['$skip'	=> (int)$offset ],
						['$limit'	=> (int)$val ]
					];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
            return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
        }
    }
    public function all_admin_list($offset, $val,$find_count=false)
    {
		//MongoDB
		if($find_count){
			$result = $this->mongo_db->count(MDB_PEOPLE,['user_type'=>'S','status'=>['$ne'=>'T']],['_id']);
			return $result;
		} else {
			$ops = [
				['$match'=>['user_type'=>'S','status'=>['$ne'=>'T']]],
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
					'lastname' => '$lastname',
					'email' => '$email',
					'address' => '$address',
					'status' => '$status',
					'login_country' => '$login_country'
					]
				]
			];
			$results = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
			return (!empty($results['result']))?$results['result']:[];
		}
    }
	
    public function active_manager_request($activeids)
    {
		/* //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";
        $result = DB::update(PEOPLE)->set(array(
            'status' => 'A'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
		
		$ids = Commonfunction::mongo_format_array($activeids);
		$set_array = ['status' => 'A'];
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$ids],'user_type'=>'M'],['$set'=>$set_array], ['multiple'=>true]);
		//print_r($result); exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    
    public function block_manager_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'D'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		$ids = Commonfunction::mongo_format_array($activeids);
	
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$ids],'user_type'=>'M'],['$set'=>['status' => 'D']], ['multiple'=>true]);
		
		return (empty($result['err']))?1:$result['errmsg'];
    }
	public function trash_manager_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'T'
        ))->where('id', 'IN', $activeids)->execute();
        return $result;*/
		
		//MongoDB
		$ids = Commonfunction::mongo_format_array($activeids);
		$set_array = ['status' => 'T'];
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$ids],'user_type'=>'M'],['$set'=>$set_array], ['multiple'=>true]);
		//print_r($result); exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
	public function active_admin_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'A'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'S'],['$set'=>['status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function block_admin_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'D'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'S'],['$set'=>['status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
	public function trash_admin_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'T'
        ))->where('id', 'IN', $activeids)->execute();
        return $result;*/
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		//var_dump($active_ids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids],'user_type'=>'S'],['$set'=>['status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function assigntaxi_list()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $rs = DB::select()->from(TAXIMAPPING)->join(COMPANY, 'LEFT')->on(TAXIMAPPING . '.mapping_companyid', '=', COMPANY . '.cid')->join(TAXI, 'LEFT')->on(TAXIMAPPING . '.mapping_taxiid', '=', TAXI . '.taxi_id')->join(COUNTRY, 'LEFT')->on(TAXIMAPPING . '.mapping_countryid', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXIMAPPING . '.mapping_stateid', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXIMAPPING . '.mapping_cityid', '=', CITY . '.city_id')->join(PEOPLE, 'LEFT')->on(TAXIMAPPING . '.mapping_driverid', '=', PEOPLE . '.id')->where(COMPANY . '.cid', '=', $company_id)->order_by('mapping_startdate', 'desc')->execute()->as_array();
            return $rs;
        } else if ($usertype == 'C') {
            $rs = DB::select()->from(TAXIMAPPING)->join(COMPANY, 'LEFT')->on(TAXIMAPPING . '.mapping_companyid', '=', COMPANY . '.cid')->join(TAXI, 'LEFT')->on(TAXIMAPPING . '.mapping_taxiid', '=', TAXI . '.taxi_id')->join(COUNTRY, 'LEFT')->on(TAXIMAPPING . '.mapping_countryid', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXIMAPPING . '.mapping_stateid', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXIMAPPING . '.mapping_cityid', '=', CITY . '.city_id')->join(PEOPLE, 'LEFT')->on(TAXIMAPPING . '.mapping_driverid', '=', PEOPLE . '.id')->where(COMPANY . '.cid', '=', $company_id)->order_by('mapping_startdate', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(TAXIMAPPING)->join(COMPANY, 'LEFT')->on(TAXIMAPPING . '.mapping_companyid', '=', COMPANY . '.cid')->join(TAXI, 'LEFT')->on(TAXIMAPPING . '.mapping_taxiid', '=', TAXI . '.taxi_id')->join(COUNTRY, 'LEFT')->on(TAXIMAPPING . '.mapping_countryid', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXIMAPPING . '.mapping_stateid', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXIMAPPING . '.mapping_cityid', '=', CITY . '.city_id')->join(PEOPLE, 'LEFT')->on(TAXIMAPPING . '.mapping_driverid', '=', PEOPLE . '.id')->order_by('mapping_startdate', 'desc')->execute()->as_array();
            return $rs;
        }
    }

	public function all_assigntaxi_list( $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
		$match_query = [];
		//$match_query['mapping.mapping_status'] = array('$ne' => 'T');
		$match_query['map.mapping_status'] = ['$eq' => 'A'];
		if (($usertype == 'M' || $usertype == 'C')  && $company_id!=0) {
			$match_query['company._id'] = (int)$company_id;
        }
		
		//echo "<pre>"; print_r($match_query); exit;
		/*$common_arguments = array(
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
			//echo "<pre>";print_r($result['result']); exit;
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
						'mapping_id' => '$mapping._id',
						'id' => '$people._id',
						'name' => '$people.name',
						'taxi_id' => '$taxi._id',
						'taxi_no' => '$taxi.taxi_no',
						'cid' => '$company.companydetails.userid',
						'company_name' => '$company.companydetails.company_name',
						'country_name'=>'$country_name',
						'state_name'=>'$stateinfo.state_name',
						'city_name'=>'$stateinfo.cityinfo.city_name',
						'mapping_status' => '$mapping.mapping_status',
						'created_by' => '$mapping.mapping_createdby',
						'mapping_startdate' => '$mapping.mapping_startdate',
						'mapping_enddate' => '$mapping.mapping_enddate',
					)
				),
				//$details[$key]['created_by']        = $this->userNamebyId($res['mapping_createdby']);
				array('$skip'	=> (int)$offset ),
				array('$limit'	=> (int)$val )
			);
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments); */
			$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'people.company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => 'people._id',
					'foreignField' => 'mapping_driverid',
					'as' => 'map'
				]
			],
			[
				'$unwind' => '$map'
			],
			[
				'$lookup' => [
					'from' => MDB_TAXI,
					'localField' => 'map.mapping_taxiid',
					'foreignField' => '_id',
					'as' => 'taxi'
				]
			],
			[
				'$unwind' => '$taxi'
			],
			[
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'people._id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			
			[
				'$match' => $match_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'email' => '$people.email',
						'company_name' => '$company.companydetails.company_name',
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'driver_license_id' => '$people.driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$people.phone',
						'taxi_id' => '$map.mapping_taxiid',
						'taxi_no' => '$taxi.taxi_no',
						'model_id' => '$taxi.taxi_model',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'driver_status' => '$people.status',
						'updatetime_difference' => ['$subtract'=>
								[new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),'$driver.update_date']]
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			for($i=0;$i<count($result['result']);$i++){				
				$result['result'][$i]['created_by'] = isset($result['result'][$i]['created_by'])?$this->userNamebyId($result['result'][$i]['created_by']):"";
			}
			
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
   
    public function assigntaxisearch_list($keyword = "", $status = "", $company = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $status_where  = ($status) ? " AND mapping_status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query  = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid = " . TAXI . ".taxi_id  left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where 1=1 $company_where $user_created_where $status_where $name_where order by mapping_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;
    }
	
   /* public function get_all_assigntaxi_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $company_where = ($company) ? " AND cid = '$company'" : "";
        $status_where  = ($status) ? " AND mapping_status = '$status'" : "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid = " . TAXI . ".taxi_id  left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where 1=1 $company_where $user_created_where $status_where $name_where order by mapping_startdate DESC limit $val offset  $offset ";
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['created_by']        = $this->userNamebyId($res['mapping_createdby']);
            $details[$key]['mapping_id']        = $res['mapping_id'];
            $details[$key]['mapping_status']    = $res['mapping_status'];
            $details[$key]['name']              = $res['name'];
            $details[$key]['company_name']      = $res['company_name'];
            $details[$key]['taxi_no']           = $res['taxi_no'];
            $details[$key]['country_name']      = $res['country_name'];
            $details[$key]['state_name']        = $res['state_name'];
            $details[$key]['city_name']         = $res['city_name'];
            $details[$key]['mapping_startdate'] = $res['mapping_startdate'];
            $details[$key]['mapping_enddate']   = $res['mapping_enddate'];
            $details[$key]['id']                = $res['id'];
            $details[$key]['cid']               = $res['userid'];
            $details[$key]['taxi_id']           = $res['taxi_id'];
        }
        return $details;
    }
	*/
	
	public function get_all_assigntaxi_searchlist( $keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$match_query = [];
		$match_query['_id'] = ['$gte' => 0];
		if (($usertype == 'M' || $usertype == 'C')  && $company_id!=0) {
			$match_query['mapping.mapping_companyid'] = (int)$company_id;
        }
		if ($company!="" && $company_id!=0) {
			$match_query['company._id'] = (int)$company_id;
        }
		if ($status!="") {
			$match_query['mapping.mapping_status'] = $status;
        }
		$matchquery = $match_query;
		if ($keyword!="") {
			$srch_query = ["\$or"=>[['people.name'=>new \MongoDB\BSON\Regex($keyword, 'i')],['people.lastname'=>new \MongoDB\BSON\Regex($keyword, 'i')],['people.email'=>new \MongoDB\BSON\Regex($keyword, 'i')],['people.username'=>new \MongoDB\BSON\Regex($keyword, 'i')]]];
			$matchquery = array_merge($match_query,$srch_query);
		}
		//echo "<pre>"; print_r($matchquery); exit;
		$common_arguments = [
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
				'$match' => $matchquery
			],
		];
		if($find_count==TRUE){
			$count_arguments = [
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		}else{
			$field_arguments = [
				[
					'$sort' => [ 
						'mapping.mapping_createdate' => -1
					],
				],
				[
					'$project' => [
						'mapping_id' => '$mapping._id',
						'id' => '$people._id',
						'name' => '$people.name',
						'taxi_id' => '$taxi._id',
						'taxi_no' => '$taxi.taxi_no',
						'cid' => '$company.companydetails.userid',
						'company_name' => '$company.companydetails.company_name',
						'country_name'=>'$country_name',
						'state_name'=>'$stateinfo.state_name',
						'city_name'=>'$stateinfo.cityinfo.city_name',
						'mapping_status' => '$mapping.mapping_status',
						'created_by' => '$mapping.mapping_createdby',
						'mapping_startdate' => '$mapping.mapping_startdate',
						'mapping_enddate' => '$mapping.mapping_enddate',
					]
				],
				//$details[$key]['created_by']        = $this->userNamebyId($res['mapping_createdby']);
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			for($i=0;$i<count($result['result']);$i++){
				$result['result'][$i]['created_by'] = (isset($result['result'][$i]['created_by']))?$this->userNamebyId($result['result'][$i]['created_by']):"";
			}
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
	
    public function active_assigntaxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_TAXI_DRIVER_MAPPING,['_id'=>['$in'=>$active_ids]],['$set'=>['mapping_status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function block_assigntaxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*$result = DB::update(TAXIMAPPING)->set(array(
            'mapping_status' => 'D'
        ))->where('mapping_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_TAXI_DRIVER_MAPPING,['_id'=>['$in'=>$active_ids]],['$set'=>['mapping_status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function trash_assigntaxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================	
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_TAXI_DRIVER_MAPPING,['_id'=>['$in'=>$active_ids]],['$set'=>['mapping_status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function rating_drivers_list()
    {
        /*$rs = DB::select('*',array('SUM("rating_points")', 'total_posts'))->from(RATING)
        ->join(PEOPLE, 'INNER')->on(RATING.'.rating_driverid', '=', PEOPLE.'.id')
        ->group_by(RATING.'.rating_driverid')
        ->execute()
        ->as_array();*/
        $query = "SELECT log.*,sum(log.rating) as total_posts,count(log.passengers_log_id) as co_nt,p.name as name FROM `" . PASSENGERS_LOG . "` as log Join `" . PEOPLE . "` as p ON log.driver_id=p.id group by log.driver_id";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function rating_companies_list()
    {
        $rs = DB::select('*', [
            'SUM("rating_points")',
            'total_posts'
        ])->from(RATING)->join(COMPANY, 'INNER')->on(RATING . '.rating_companyid', '=', COMPANY . '.cid')->join(PEOPLE, 'INNER')->on(RATING . '.rating_userid', '=', PEOPLE . '.id')->group_by(RATING . '.rating_companyid')->execute()->as_array();
        return $rs;
    }
    public function count_rating_companies_list()
    {
        $rs = DB::select('*', [
            'SUM("rating_points")',
            'total_posts'
        ])->from(RATING)->join(COMPANY, 'INNER')->on(RATING . '.rating_companyid', '=', COMPANY . '.cid')->join(PEOPLE, 'INNER')->on(RATING . '.rating_userid', '=', PEOPLE . '.id')->group_by(RATING . '.rating_companyid')->execute()->as_array();
        return count($rs);
    }
    public function count_rating_drivers_list($keyword = "", $comp_id = "")
    {
        $keyword          = str_replace("%", "!%", $keyword);
        $keyword          = str_replace("_", "!_", $keyword);
        $usertype         = $this->usertype;
        $driver_createdby = $this->user_createdby;
        $company_id       = $this->company_id;
        $country_id       = $this->country_id;
        $state_id         = $this->state_id;
        $city_id          = $this->city_id;
        if ($usertype == 'C') {
            $condition  = "";
            //$joins="LEFT JOIN `state` as s ON p.`login_state` = s.`state_id` LEFT JOIN `city` as c ON p.`login_city` = c.`city_id` ";
            $condition  = " p.`company_id`='" . $company_id . "'";
            $name_where = "";
            if ($keyword) {
                $condition .= " AND (p.name LIKE  '%$keyword%')";
            }
            $query   = "SELECT r.*,sum(r.rating) as total_posts,count(r.passengers_log_id) as co_nt,p.name as name FROM " . PASSENGERS_LOG . " as r JOIN " . PEOPLE . " as p ON r.`driver_id`=p.`id`  WHERE $condition AND r.travel_status='1' and r.rating!=0 and p.user_type='D' GROUP BY r.driver_id";
            //echo $query;
            $results = Db::query(Database::SELECT, $query)->execute()->as_array();
            return count($results);
        } else if ($usertype == 'M') {
            $condition  = "";
            $joins      = "LEFT JOIN `state` as s ON p.`login_state` = s.`state_id` LEFT JOIN `city` as c ON p.`login_city` = c.`city_id` ";
            $condition  = " p.`login_state` = '" . $state_id . "' AND p.`login_city` = '" . $city_id . "' AND s.`state_status` = 'A' and c.`city_status` = 'A'";
            $name_where = "";
            if ($keyword) {
                $condition .= " AND (p.name LIKE  '%$keyword%')";
            }
            $query   = "SELECT r.*,sum(r.rating) as total_posts,count(r.passengers_log_id) as co_nt,p.name as name FROM " . PASSENGERS_LOG . " as r JOIN " . PEOPLE . " as p ON r.`driver_id`=p.`id` $joins WHERE $condition AND r.travel_status='1' and r.rating!=0 and p.user_type='D' and p.company_id='$company_id' GROUP BY r.driver_id";
            //echo $query;
            $results = Db::query(Database::SELECT, $query)->execute()->as_array();
            return count($results);
        } else if ($usertype == 'D') {
            $result = DB::select('*', [
                'SUM("rating_points")',
                'total_posts'
            ])->from(RATING)->join(PEOPLE, 'INNER')->on(RATING . '.rating_driverid', '=', PEOPLE . '.id')->where(PEOPLE . '.id', '=', $driver_createdby)->group_by(RATING . '.rating_driverid')->execute()->as_array();
            return count($result);
        } else {
            $name_where = "";
            if ($keyword) {
                $name_where .= " AND (p.name LIKE  '%$keyword%')";
            }
            if ($comp_id) {
                $name_where .= " AND p.`company_id`='" . $comp_id . "'";
            }
            //$query = " select *,SUM(rating_points) as total_posts from " . RATING . " INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_driverid = " . PEOPLE . " .id where 1=1 $name_where group by rating_driverid order by rating_id ASC";
            $query = "SELECT log.*,sum(log.rating) as total_posts,count(log.passengers_log_id) as co_nt,p.name as name FROM `" . PASSENGERS_LOG . "` as log Join `" . PEOPLE . "` as p ON log.driver_id=p.id where 1=1 AND log.travel_status='1' and log.rating!=0 $name_where group by log.driver_id";
            //echo $query;
            $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
            return count($rs);
        }
    }
    public function all_rating_companies($offset, $val)
    {
        $com_createdby = $this->user_createdby;
        $usertype      = $this->usertype;
        $company_id    = $this->company_id;
        $country_id    = $this->country_id;
        $state_id      = $this->state_id;
        $city_id       = $this->city_id;
        if ($usertype == 'C') {
            $result = DB::select('*', [
                'SUM("rating_points")',
                'total_posts'
            ])->from(RATING)->join(COMPANY, 'INNER')->on(RATING . '.rating_companyid', '=', COMPANY . '.cid')->join(PEOPLE, 'INNER')->on(RATING . '.rating_userid', '=', PEOPLE . '.id')->where(RATING . '.rating_companyid', '=', $company_id)->where(COMPANY . '.cid', '=', $company_id)->where(COMPANY . '.userid', '=', $com_createdby)->group_by(RATING . '.rating_companyid')->execute()->as_array();
            return $result;
        } else {
            $result = DB::select('*', [
                'SUM("rating_points")',
                'total_posts'
            ])->from(RATING)->join(COMPANY, 'INNER')->on(RATING . '.rating_companyid', '=', COMPANY . '.cid')->join(PEOPLE, 'INNER')->on(RATING . '.rating_userid', '=', PEOPLE . '.id')->group_by(RATING . '.rating_companyid')->execute()->as_array();
            return $result;
        }
    }
    
    public function delete_ratingcompanies($id)
    {
        $user = DB::delete(RATING)->where('rating_id', '=', $id)->execute();
        return $user;
    }
	public function all_rating_drivers($offset, $val,$find_count=false)
    {
        $driver_createdby = $this->user_createdby;
        $usertype         = $this->usertype;
        $company_id       = $this->company_id;
        $country_id       = $this->country_id;
        $state_id         = $this->state_id;
        $city_id          = $this->city_id;
       
		//MongoDB
		$lookup_arguments = [
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => '_id',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
		];
		if($usertype == 'C'){
			$srch_query = ['travel_status'=>1,'rating'=>['$ne'=>0]];
                        $common_arguments = [['$match' => $srch_query],];
			$srch_q = ['people.company_id' => (int)$company_id,'people.user_type'=>'D'];
                        $common_a = [['$match' => $srch_q],];
        } else if($usertype=='M'){
			
			$lookup_argument = [
				[
					'$lookup' => [
						'from' => MDB_CSC,
						'localField'=> 'stateinfo.cityinfo.city_id',
						'foreignField'=> "people.login_city",
						'as' => 'csc'
					]
				],
				[
					'$unwind' => '$csc'
				],
			];
			$srch_query = ['travel_status'=>1,'rating'=>['$ne'=>0]];
			$common_arguments = [['$match' => $srch_query],];
			$srch_q = ['people.company_id' => (int)$company_id,'people.user_type'=>'D','people.login_country'=>(int)$country_id,'people.login_state'=>(int)$state_id,'people.login_city'=>(int)$city_id];
			$common_a = [['$match' => $srch_q],];
			$lookup_arguments = array_merge($lookup_arguments,$lookup_argument);
		} else {
			$srch_query = ['travel_status'=>1,'rating'=>['$ne'=>0]];
			$common_arguments = [['$match' => $srch_query],];
			$srch_q = ['people.user_type'=>'D'];
			$common_a = [['$match' => $srch_q],];
		}
		if($find_count){
			$common_argument = array_merge($common_arguments,$lookup_arguments,$common_a);
			$count_arguments = [
				[
					'$group' => [
						'_id' => ['driver_id'=>'$driver_id'],
						'count' => [
							'$sum' => 1
						]
					]
				]
			];
			$merge_arguments = array_merge($common_argument, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
			//echo "<pre>";print_r($merge_arguments);exit;
			return (!empty($result['result']) && isset($result['result'])) ? count($result['result']) : 0;
		} else {
			$common_argument = array_merge($common_arguments,$lookup_arguments,$common_a);
			$field_arguments = [
				[
					'$sort' => [ 
						'createdate' => -1
					],
				],
				['$group' => ["_id" => ['driver_id'=>'$driver_id','name'=>'$people.name'],
						"total_ratings" => [ '$sum' => '$rating' ],
						"count" => [ '$sum' => 1 ],
					]
				],
				[ '$project' =>['_id' => 0,
						'driver_id' => '$_id.driver_id',
						'name' => '$_id.name',
						'total_posts' => '$total_ratings',
						'co_nt' => '$count',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_argument, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
			//echo "<pre>else";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
    public function delete_ratingdrivers($id)
    {
        $user = DB::delete(RATING)->where('rating_id', '=', $id)->execute();
        return $user;
    }
    public function get_all_ratingdrivers_searchlist($keyword = "", $comp_id = "",$offset = "", $val = "", $find_count=false)
    {
        $keyword          = str_replace("%", "!%", $keyword);
        $keyword          = str_replace("_", "!_", $keyword);
        $usertype         = $this->usertype;
        $driver_createdby = $this->user_createdby;
        $company_id       = $this->company_id;
        $country_id       = $this->country_id;
        $state_id         = $this->state_id;
        $city_id          = $this->city_id;
        
	$lookup_arguments = [
		[
			'$lookup' => [
				'from' => MDB_PEOPLE,
				'localField' => 'driver_id',
				'foreignField' => '_id',
				'as' => 'people'
			]
		],
		[
			'$unwind' => '$people'
		],
	];
	if($usertype == 'C'){
		$srch_query = ['people.company_id' => (int)$company_id,'people.user_type'=>'D'];
            if (!empty($keyword)) {				
                $srch_query = ["people.name" => new \MongoDB\BSON\Regex($keyword, 'i'),'people.company_id' => (int)$company_id,'people.user_type'=>'D'];
            }
            $common_arguments = [['$match' => $srch_query],];
            $srch_q = ['travel_status'=>1,'rating'=>['$ne'=>0]];
            $common_a = [['$match' => $srch_q],];
	} else if($usertype=='M'){
			$srch_query = ['people.company_id' => (int)$company_id,'people.user_type'=>'D','people.login_country'=>(int)$country_id,'people.login_state'=>(int)$state_id,'people.login_city'=>(int)$city_id];
            if (!empty($keyword)) {
                    $srch_query = ["people.name" => new \MongoDB\BSON\Regex($keyword, 'i'),'people.company_id' => (int)$company_id,'people.user_type'=>'D','people.login_country'=>(int)$country_id,'people.login_state'=>(int)$state_id,'people.login_city'=>(int)$city_id];
            }
			$lookup_argument = [
				[
					'$lookup' => [
						'from' => MDB_CSC,
						'localField'=> 'stateinfo.cityinfo.city_id',
						'foreignField'=> "people.login_city",
						'as' => 'csc'
					]
				],
				[
					'$unwind' => '$csc'
				],
			];
		    $common_arguments = [['$match' => $srch_query],];
		    $srch_q = ['travel_status'=>1,'rating'=>['$ne'=>0]];
		    $common_a = [['$match' => $srch_q],];
	            $lookup_arguments = array_merge($lookup_arguments,$lookup_argument);
		} else {
			if (!empty($keyword) && !empty($comp_id)) {
                        $srch_query = ["people.name" => new \MongoDB\BSON\Regex($keyword, 'i'),'people.company_id' => (int)$comp_id,'people.user_type'=>'D'];
                } else if (!empty($keyword)) {
                        $srch_query = ["people.name" => new \MongoDB\BSON\Regex($keyword, 'i'),'people.user_type'=>'D'];
                } else if (!empty($comp_id)) {
                        $srch_query = ['people.company_id' => (int)$comp_id,'people.user_type'=>'D'];
                }
                $common_arguments = [['$match' => $srch_query],];
                $srch_q = ['travel_status'=>1,'rating'=>['$ne'=>0]];
                $common_a = [['$match' => $srch_q],];
		}
		if($find_count){
			$common_argument = array_merge($common_a,$lookup_arguments,$common_arguments);
                    	$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
					]
				],
				[
					'$group' => [
						'_id' => ['driver_id'=>'$driver_id'],
						'count' => [
							'$sum' => 1
						]
					]
				]
			];
			$merge_arguments = array_merge($common_argument, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
			//echo "<pre>if";print_r(count($result['result']));//exit;
			return (!empty($result['result']) && isset($result['result'])) ? count($result['result']) : 0;
		} else {
			$common_argument = array_merge($common_a,$lookup_arguments,$common_arguments);
                    	$field_arguments = [
				[
					'$sort' => [ 
						'createdate' => -1
					],
				],
				['$group' => ["_id" => ['driver_id'=>'$driver_id','name'=>'$people.name'],
						"total_ratings" => [ '$sum' => '$rating' ],
						"count" => [ '$sum' => 1 ],
					]
				],
				[ '$project' =>['_id' => 0,
						'driver_id' => '$_id.driver_id',
						'name' => '$_id.name',
						'total_posts' => '$total_ratings',
						'co_nt' => '$count',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_argument, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
			//echo "<pre>else";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
    public function get_all_ratingcompanies_searchlist($keyword = "")
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (" . COMPANY . ".company_name LIKE  '%$keyword%')";
        }
        $query   = " select *,SUM(rating_points) as total_posts from " . RATING . " INNER JOIN " . COMPANY . " ON " . RATING . " .rating_companyid = " . COMPANY . " .cid INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_userid = " . PEOPLE . " .id where 1=1 $name_where group by rating_companyid order by rating_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function userNamebyId($id)
    {
        /*$result = DB::select('name')->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['name'];
        } else {
            return '';
        }*/
		$result = $this->mongo_db->find_one(MDB_PEOPLE,['_id' => $id],['name']);
		if (count($result) > 0) {
            return $result['name'];
        } else {
            return '';
        }
    }
    public function userNamebyEmail($id)
    {
        $result = DB::select('email')->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['email'];
        } else {
            return '';
        }
    }
    public function packagereport_list()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'C') {
            $rs = DB::select()->from(PACKAGE_REPORT)->where('upgrade_userid', '=', $company_id)->order_by('upgrade_id', 'desc')->execute()->as_array();
            return $rs;
        } else {
            $rs = DB::select()->from(PACKAGE_REPORT)->order_by('upgrade_id', 'desc')->execute()->as_array();
            return $rs;
        }
    }
    public function all_packagereport_list($comp_id = "", $offset, $val, $find_count=false)
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        /*if ($usertype == 'C') {
            $rs      = DB::select()->from(PACKAGE_REPORT)->where('upgrade_companyid', '=', $company_id)->order_by('upgrade_id', 'desc')->limit($val)->offset($offset)->execute()->as_array();
            $details = array();
            foreach ($rs as $key => $res) {
                $details[$key]['name']          = $this->userNamebyCompanyId($res['upgrade_companyid']);
                $details[$key]['email']         = $this->userNamebyCompanyEmail($res['upgrade_companyid']);
                $details[$key]['package_name']  = $res['upgrade_packagename'];
                $details[$key]['package_type']  = $res['check_package_type'];
                $details[$key]['no_taxi']       = $res['upgrade_no_taxi'];
                $details[$key]['no_driver']     = $res['upgrade_no_driver'];
                $details[$key]['package_price'] = $res['upgrade_amount'];
                $details[$key]['credit_date']   = $res['upgrade_date'];
                $details[$key]['expiry_date']   = $res['upgrade_expirydate'];
            }
            return $details;
        } else {
            $name_where = "";
            if ($comp_id != "") {
                $name_where .= " and upgrade_companyid=$comp_id ";
            }
            if ($comp_id == "All") {
                $name_where = "";
            }
            $query   = " select * from " . PACKAGE_REPORT . " where 1=1 $name_where order by upgrade_id DESC limit $offset,$val";
            $rs      = Db::query(Database::SELECT, $query)->execute()->as_array();
            $details = array();
            foreach ($rs as $key => $res) {
                $details[$key]['name']          = $this->userNamebyCompanyId($res['upgrade_companyid']);
                $details[$key]['email']         = $this->userNamebyCompanyEmail($res['upgrade_companyid']);
                $details[$key]['package_name']  = $res['upgrade_packagename'];
                $details[$key]['package_type']  = $res['check_package_type'];
                $details[$key]['no_taxi']       = $res['upgrade_no_taxi'];
                $details[$key]['no_driver']     = $res['upgrade_no_driver'];
                $details[$key]['package_price'] = $res['upgrade_amount'];
                $details[$key]['credit_date']   = $res['upgrade_date'];
                $details[$key]['expiry_date']   = $res['upgrade_expirydate'];
            }
            return $details;
        }*/
		
		//MongoDB
		$condition = [];
		if($this->usertype=='C'){
			$condition = ['upgrade_companyid' => (int)$company_id];
		} else {
			$condition = (!empty($comp_id) && $comp_id != "All")?['upgrade_companyid' => (int)$comp_id]:[];
		}
		$common_arguments = [];
		//MongoDB
		if(!empty($condition)){
			$common_arguments = [
				['$match' => $condition]
			];
		} else {
			$common_arguments = [];
		}
		//print_r($common_arguments);
		if($find_count){
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT, $merge_arguments);
			//echo "<pre>if";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [
						'_id' => -1
					],
				],
				[
					'$project' => ['_id' => 0,
						'cid' => '$_id',
						'package_name' => '$upgrade_packagename',
						'package_type' => '$check_package_type',
						'no_taxi' => '$upgrade_no_taxi',
						'no_driver' => '$upgrade_no_driver',
						'package_price' => '$upgrade_amount',
						'credit_date' => '$upgrade_date',
						'expiry_date' => '$upgrade_expirydate',
						'companyid' => '$upgrade_companyid',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$res = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$merge_arguments);
			//echo '<pre>';print_r($res);//exit;
			$result = [];
			foreach ($res['result'] as $key => $rs) {
				$details = $this->userCompanyDetails($rs['companyid']);
				$name = isset($details['name'])?$details['name']:"-";
				$email = isset($details['email'])?$details['email']:"-";
				$result[$key]['name']          = $name;
				$result[$key]['email']         = $email;
				$result[$key]['package_name']  = $rs['package_name'];
				$result[$key]['package_type']  = $rs['package_type'];
				$result[$key]['no_taxi']       = $rs['no_taxi'];
				$result[$key]['no_driver']     = $rs['no_driver'];
				$result[$key]['package_price'] = $rs['package_price'];
				$result[$key]['credit_date']   = isset($rs['credit_date'])?$rs['credit_date']:"";
				$result[$key]['expiry_date']   = $rs['expiry_date'];
			}
			return $result;
		}
    }
    public function userCompanyDetails($id)
    {
        /*$result = DB::select('name')->from(PEOPLE)->where('company_id', '=', $id)->where('user_type', '=', 'C')->execute()->as_array();
        if (count($result) > 0) {
            return $result[0]['name'];
        } else {
            return '';
        }*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_PEOPLE,['company_id'=>(int)$id,'user_type'=>'C'],['name','email']);
		return (!empty($result))?$result:[];
    }
    public function get_all_packagereport_searchlist($keyword = "", $status = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword      = str_replace("%", "!%", $keyword);
        $keyword      = str_replace("_", "!_", $keyword);
        //condition for status
        //====================== 
        $status_where = ($status) ? " AND mapping_status = '$status'" : "";
        //search result export
        //=====================
        $name_where   = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or lastname LIKE  '%$keyword%' ";
            $name_where .= " or email LIKE  '%$keyword%' ";
            $name_where .= " or username LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " select * from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid = " . TAXI . ".taxi_id  left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id  left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id  left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id where 1=1 $user_created_where $status_where $name_where order by mapping_startdate DESC ";
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = [];
        foreach ($result as $key => $res) {
            $details[$key]['created_by']        = $this->userNamebyId($res['mapping_createdby']);
            $details[$key]['mapping_id']        = $res['mapping_id'];
            $details[$key]['mapping_status']    = $res['mapping_status'];
            $details[$key]['name']              = $res['name'];
            $details[$key]['company_name']      = $res['company_name'];
            $details[$key]['taxi_no']           = $res['taxi_no'];
            $details[$key]['country_name']      = $res['country_name'];
            $details[$key]['state_name']        = $res['state_name'];
            $details[$key]['city_name']         = $res['city_name'];
            $details[$key]['mapping_startdate'] = $res['mapping_startdate'];
            $details[$key]['mapping_enddate']   = $res['mapping_enddate'];
        }
        return $details;
    }
    public function active_packagereport_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(TAXIMAPPING)->set([
            'mapping_status' => 'A'
        ])->where('mapping_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function block_packagereport_request($activeids)
    {
        $result = DB::update(TAXIMAPPING)->set([
            'mapping_status' => 'D'
        ])->where('mapping_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function trash_motor_request($activeids)
    {
        $result = DB::update(MOTORCOMPANY)->set([
            'motor_status' => 'T'
        ])->where('motor_id', 'IN', $activeids)->execute();
        return $result;
    }
    
    public function trash_field_request($activeids)
    {
        $result = DB::update(MANAGEFIELD)->set([
            'field_status' => 'T'
        ])->where('field_id', 'IN', $activeids)->execute();
        return $result;
    }
    public function trash_package_request($activeids)
    {
       /* $result = DB::update(PACKAGE)->set(array(
            'package_status' => 'T'
        ))->where('package_id', 'IN', $activeids)->execute();
        return $result;*/
		$active_ids = Commonfunction::mongo_format_array($activeids);
		
		$res = $this->mongo_db->update(MDB_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['package_status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
           
    
    public function trash_driver_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'T'
        ))->where('id', 'IN', $activeids)->execute();
        return $result;*/
	
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function get_all_contacts_searchlist_count($keyword = "", $cid = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        /*$name_where = "";
        if ($keyword) {
            $name_where = " AND (" . CONTACTS . ".name LIKE  '%$keyword%' OR " . CONTACTS . ".subject LIKE  '%$keyword%')";
        }
        $company_cid = "";
        if ($cid != '')
            $company_cid = " AND contact_cid=$cid";
        $query   = " select * from " . CONTACTS . " where 1=1 $name_where $company_cid order by sent_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results); */
		
		//MongoDB
		if($keyword){
			$srch_query = [ "\$or" => [[ "feedback" => new \MongoDB\BSON\Regex($keyword, 'i')]  ] ];
		}
		if(!empty($cid)){
			$srch_query = [["\$and"=>["contact_cid"=>$cid]],"\$or"=>[['feedback'=>new \MongoDB\BSON\Regex($keyword, 'i')]]];
		}
		//print_r($srch_query);exit;
		$res = $this->mongo_db->count(MDB_DRIVER_FEEDBACK,$srch_query);
		return $res;
	}
    public function get_all_contacts_searchlist($offset,$val,$keyword = "", $cid = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        /*$name_where = "";
        if ($keyword) {
            $name_where = " AND (" . CONTACTS . ".name LIKE  '%$keyword%' OR " . CONTACTS . ".subject LIKE  '%$keyword%')";
        }
        $company_cid = "";
        if ($cid != '')
            $company_cid = " AND contact_cid=$cid";
        $query   = " select * from " . CONTACTS . " where 1=1 $name_where $company_cid order by sent_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
		if($keyword){
			$srch_query = [ "\$or" => [[ "feedback" => new \MongoDB\BSON\Regex($keyword, 'i')]  ] ];
		}
		if(!empty($cid)){
			$srch_query = [["\$and"=>["contact_cid"=>$cid]],"\$or"=>[['feedback'=>new \MongoDB\BSON\Regex($keyword, 'i')]]];
		}
		//print_r($srch_query);exit;
		$res = $this->mongo_db->find(MDB_DRIVER_FEEDBACK,$srch_query)->sort(['_id'=>-1])->skip($offset)->limit($val);
		return $res;
    }
    public function get_all_free_quotes_searchlist_count($keyword = "")
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (" . GET_FREE_QUOTES . ".name LIKE  '%$keyword%' OR " . GET_FREE_QUOTES . ".email LIKE  '%$keyword%')";
        }
        $query   = " select * from " . GET_FREE_QUOTES . " where 1=1 $name_where order by id DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_all_free_quotes_searchlist($keyword = "")
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (" . GET_FREE_QUOTES . ".name LIKE  '%$keyword%' OR " . GET_FREE_QUOTES . ".email LIKE  '%$keyword%')";
        }
        $query   = " select * from " . GET_FREE_QUOTES . " where 1=1 $name_where  order by id DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function delete_free_quotes($id)
    {
        $user = DB::delete(GET_FREE_QUOTES)->where('id', '=', $id)->execute();
        return $user;
    }
    public function delete_contacts($id)
    {
        /*$user = DB::delete(CONTACTS)->where('cid', '=', $id)->execute();
        return $user;*/
		
		//MongoDB
		$result = $this->mongo_db->remove(MDB_CONTACTS,['_id'=>(int)$id]);
		return (empty($result['err']))?1:$result['err'];
    }
    
    public function count_contacts_list($cid = '')
    {
		
		$arguments = [
				
				['$lookup' => [
						'from' => MDB_TAXI,
						'localField' => 'taxi_id',
						'foreignField' => '_id',
						'as' => 'taxi'
					]
				],
				['$unwind' => '$taxi'],
				 [
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
				],
				['$unwind' => '$driver'],
					 [
				'$lookup' => [
					'from' => MDB_MOTOR_MODEL,
					'localField' => 'taxi.taxi_model',
					'foreignField' => '_id',
					'as' => 'model'
				]
				],
				['$unwind' => '$model'],
                [
                    '$project' => [
						'_id' => '$_id',
						'name' => '$driver.name',
						'taxi_no' => '$taxi.taxi_no',
						'model_type' => '$model.model_name',
						'feedback' => '$feedback',
						
                    ]
                ],[
					'$group' => [
						'_id' => NULL,
						'count' => [
							'$sum' => 1
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_DRIVER_FEEDBACK,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result'][0]['count']:0;
		  
        /*if ($cid == '') {
            //$rs = DB::select()->from(CONTACTS)->execute();
			
			//MongoDB
			$rs = $this->mongo_db->count(MDB_CONTACTS);
        } else {
            //$rs = DB::select()->from(CONTACTS)->where('contact_cid', '=', $cid)->execute();
			
			//MongoDB
			$rs = $this->mongo_db->count(MDB_CONTACTS,array('contact_cid'=>$cid));
        } */
        //return count($rs);
		//return $rs;
    }
    public function all_contacts_list($offset, $val, $cid = '')
    {
		
		  $arguments =  [
              [
				'$lookup' => [
					'from' => MDB_TAXI,
					'localField' => 'taxi_id',
					'foreignField' => '_id',
					'as' => 'taxi'
				]
				],
				['$unwind' => '$taxi'],
				 [
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
					'foreignField' => '_id',
					'as' => 'driver'
				]
				],
				['$unwind' => '$driver'],
					 [
				'$lookup' => [
					'from' => MDB_MOTOR_MODEL,
					'localField' => 'taxi.taxi_model',
					'foreignField' => '_id',
					'as' => 'model'
				]
				],
				['$unwind' => '$model'],
                [
                    '$project' => [
						'_id' => '$_id',
						'name' => '$driver.name',
						'taxi_no' => '$taxi.taxi_no',
						'driver_id' => '$driver._id',
						'taxi_id' => '$taxi._id',
						'model_type' => '$model.model_name',
						'feedback' => '$feedback',
						
                    ]
                ],
            ['$sort'=>['_id' => -1]],
				['$skip' => (int)$offset],
				['$limit' => (int)$val]
                
                
		];
		
			$result    = $this->mongo_db->aggregate(MDB_DRIVER_FEEDBACK, $arguments);
		     return (isset($result['result']))?$result['result']:[];
       /* if ($cid == '') {
            //$rs = DB::select()->from(CONTACTS)->order_by('sent_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
			
			//MongoDB
			$res = $this->mongo_db->find(MDB_CONTACTS)->sort(array('sent_date'=>-1))->skip($offset)->limit($val);
			
        } else {
            //$rs = DB::select()->from(CONTACTS)->where('contact_cid', '=', $cid)->order_by('sent_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
			
			$res = $this->mongo_db->find(MDB_CONTACTS,array('contact_cid'=>$cid))->sort(array('sent_date'=>-1))->skip($offset)->limit($val);
        }*/
		


    }
    public function count_free_quotes_list($cid = '')
    {
        if ($cid == '') {
            $rs = DB::select()->from(GET_FREE_QUOTES)->execute();
        }
        return count($rs);
    }
    public function all_free_quotes_list($offset, $val, $cid = '')
    {
        if ($cid == '') {
            $rs = DB::select()->from(GET_FREE_QUOTES)->order_by('id', 'desc')->limit($val)->offset($offset)->execute()->as_array();
        }
        return $rs;
    }
    public function content_list()
    {
        $rs = DB::select()->from(CMS)->join(MENU, 'LEFT')->on(CMS . '.menu_id', '=', MENU . '.menu_id')->where(CMS . '.type', '=', '1')->where(CMS . '.status', '=', '1')->execute()->as_array();
        return $rs;
    }
    public function count_content_list()
    {
        /*$rs = DB::select()->from(CMS)->join(MENU)->on(CMS . '.menu_id', '=', MENU . '.menu_id')->where(CMS . '.type', '=', '1')->where(CMS . '.status', '=', '1')->execute();
        return count($rs);*/
        $result = $this->mongo_db->count(MDB_CMS,['content_status'=>(int)1]);
        return $result;
    }
    public function count_company_content_list($cid)
    {
        $rs = DB::select()->from(COMPANY_CMS)->where('type', '=', '1')->where('company_id', '=', $cid)->execute();
        return count($rs);
    }
    public function all_content_list($offset = '', $val = '')
    {
        /*$rs = DB::select()->from(CMS)->join(MENU)->on(CMS . '.menu_id', '=', MENU . '.menu_id')->where(CMS . '.type', '=', '1')->where(CMS . '.status', '=', '1')->order_by(CMS . '.menu', 'asc')->limit($val)->offset($offset)->execute()->as_array();
        return $rs;*/
        $ops = [['$match'=>['content_status'=>['$eq'=>(int)1]]],
						['$project'=>[
							'id'=>'$_id',
							'menu_name'=>'$menu_name',
							'status_post'=>'$status_post',
						]],
						['$sort'=>['_id'=>-1]],
						['$skip'=>(int)$offset],
						['$limit'=>(int)$val],												
					];
		$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
		return (!empty($result['result']))?$result['result']:[];
        
    }
    public function all_company_content_list($offset = '', $val = '', $cid = '')
    {
        $rs = DB::select()->from(COMPANY_CMS)->where('type', '=', '1')->where('company_id', '=', $cid)->order_by('id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
        return $rs;
    }
    public function company_content_request_change($activeids, $status)
    {
        $result = DB::update(COMPANY_CMS)->set([
            'status' => $status
        ])->where('id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function contacts_list_view($id)
    {
        /*$user = DB::select(CONTACTS . '.*', COMPANY . '.company_name')->from(CONTACTS)->join(COMPANY, 'LEFT')->on(CONTACTS . '.contact_cid', '=', COMPANY . '.cid')->where(CONTACTS . '.cid', '=', $id)->execute()->as_array();
        return $user;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_CONTACTS,['_id'=>(int)$id]);
		return $result;
    }
    public function free_quotes_list_view($id)
    {
        $user = DB::select()->from(GET_FREE_QUOTES)->where(GET_FREE_QUOTES . '.id', '=', $id)->execute()->as_array();
        return $user;
    }
    public function taxicount($cid)
    {
        /*$query  = " select count(taxi_id) as taxi_count from " . TAXI . " where  taxi_company='$cid' order by taxi_id ASC";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result[0]['taxi_count'];*/
		
		//MongoDB
		$result = $this->mongo_db->count(MDB_TAXI,['taxi_company'=>(int)$cid]);
		return (!empty($result))?$result:0;
    }
    public function drivercount($cid)
    {
        /*$query  = " select count(id) as driver_count from " . PEOPLE . " where  company_id='$cid' and user_type='D' order by id ASC";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result[0]['driver_count'];*/
		
		//MongoDB
		$result = $this->mongo_db->count(MDB_PEOPLE,['company_id'=>(int)$cid,'user_type'=>'D']);
		return (!empty($result))?$result:0;
    }
    public function managercount($cid)
    {
        /*$query  = " select count(id) as driver_count from " . PEOPLE . " where  company_id='$cid' and user_type='M' order by id ASC";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result[0]['driver_count'];*/
		
		//MongoDB
		$result = $this->mongo_db->count(MDB_PEOPLE,['company_id'=>(int)$cid,'user_type'=>'M']);
		return (!empty($result))?$result:0;
    }
    public function details_taxiinfo($id)
    {
        /*$result = DB::select()->from(TAXI)->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(MOTORCOMPANY, 'LEFT')->on(TAXI . '.taxi_type', '=', MOTORCOMPANY . '.motor_id')->join(MOTORMODEL, 'LEFT')->on(TAXI . '.taxi_model', '=', MOTORMODEL . '.model_id')->where(TAXI . '.taxi_id', '=', $id)->execute()->as_array(); //->join(ADDFIELD, 'LEFT')->on(TAXI.'.taxi_id', '=', ADDFIELD.'.taxi_id')
        return $result;*/
		
		//MongoDB
		$match_query = ['taxi._id'=>(int)$id];
		$arguments = [
			['$unwind' => '$stateinfo'],
			['$unwind' => '$stateinfo.cityinfo'],
			['$lookup' => [
					'from' => MDB_TAXI,
					'localField'=> 'stateinfo.cityinfo.city_id',
					'foreignField'=> "taxi_country",
					'foreignField'=> "taxi_state",
					'foreignField'=> "taxi_city",
					'as'=> "taxi"
				]
			],
			['$unwind' => '$taxi'],
			['$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'taxi.taxi_company',
					'foreignField' => "_id",
					'as' => "company"
				]
			],
			['$unwind' => '$company'],
			['$lookup' => [
					'from' => MDB_MOTOR_MODEL,
					'localField' => 'taxi.taxi_model',
					'foreignField' => "_id",
					'as' => "motormodel"
				]
			],
			['$unwind' => '$motormodel'],
			['$match'  => $match_query],
			['$project' => ['_id'=>0,
					'created_by' => '$taxi.taxi_createdby',
					'taxi_id' => '$taxi._id',
					'taxi_availability' => '$taxi.taxi_availability',
					'taxi_status' => '$taxi.taxi_status',
					'company_name' => '$company.companydetails.company_name',
					'model_name' => '$motormodel.model_name',
					'taxi_capacity' => '$taxi.taxi_capacity',
					'taxi_no' => '$taxi.taxi_no',
					'taxi_fare_km' => '$taxi.taxi_fare_km',
					'company_id' => '$taxi.taxi_company',
					'taxi_company' => '$taxi.taxi_company',
					'taxi_owner_name' => '$taxi.taxi_owner_name',
					'taxi_image' => '$taxi.taxi_image',
					'taxi_sliderimage' => '$taxi.taxi_sliderimage',
					'taxi_speed' => '$taxi.taxi_speed',
					'taxi_min_speed' => '$taxi.taxi_min_speed',
					'max_luggage' => '$taxi.max_luggage',
					'taxi_manufacturer' => '$taxi.taxi_manufacturer',
					'taxi_colour' => '$taxi.taxi_colour',
					'taxi_motor_expire_date' => '$taxi.taxi_motor_expire_date',
					'taxi_pco_licence_number' => '$taxi.taxi_pco_licence_number',
					'taxi_pco_licence_expire_date' => '$taxi.taxi_pco_licence_expire_date',
					'taxi_insurance_number' => '$taxi.taxi_insurance_number',
					'taxi_insurance_expire_date_time' => '$taxi.taxi_insurance_expire_date_time',
					'qr_image_path' => '$taxi.qr_image_path'
				]
			],
			['$sort' =>['taxi.created_date' => -1] ],
		];
		$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
    }
    public static function taxi_additionalfields()
    {
        $result = DB::select()->from(MANAGEFIELD)->where('field_status', '=', 'A')->order_by('field_order', 'asc')->execute()->as_array();
        return $result;
    }
	
    public function details_userinfo($id, $driver = 0)
    {
		if ($driver == 1) {
			$match_query        = [];
			$match_query['_id'] = (int)$id;
			$match_query['user_type'] = 'D';
			$arguments = [
				[
					'$match' => $match_query
				],
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
					'$project' => [
						'id' => '$_id',
						'created_by' => '$user_createdby',
						'name' => '$name',
						'username' => '$username',
						'lastname'=>'$lastname',
						///Driver Code///
						'driver_code'=>'$driver_code',
						///Driver Code///
						'email' => '$email',
						'address' => '$address',
						'availability_status' => '$availability_status',
						'status' => '$status',
						'driver_license_id' => '$driver_license_id',
						'shift_status' => '$driver.shift_status',
						'phone' => '$phone',
						'photo' => '$profile_picture',
						'driver_status' => '$status',
						'login_status' => '$login_status',
						'login_country'=>'$login_country',
						'login_state'=>'$login_state',
						'login_city'=>'$login_city',
						'company_id'=>'$company_id',
						'user_type'=>'$user_type',
						'gender' => '$gender',
						'dob'=>'$dob',
						'booking_limit'=>'$booking_limit',
						'driver_license_expire_date' => '$driver.driverinfo.driver_license_expire_date',
						'driver_pco_license_number' => '$driver.driverinfo.driver_pco_license_number',
						'driver_pco_license_expire_date' => '$driver.driverinfo.driver_pco_license_expire_date',
						'driver_insurance_number' => '$driver.driverinfo.driver_insurance_number',
						'driver_insurance_expire_date' => '$driver.driverinfo.driver_insurance_expire_date',
						'driver_national_insurance_number' => '$driver.driverinfo.driver_national_insurance_number',
						'driver_national_insurance_expire_date' => '$driver.driverinfo.driver_national_insurance_expire_date',
						'driver_app_version' => '$driver.app_version'
					]
				]
			];
			$result	= $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
			//echo "<pre>"; print_r($result); exit;
			$res	=  (isset($result['result']) && !empty($result['result']))?$result['result']:[];
		}else {
			$result = $this->mongo_db->find(MDB_PEOPLE,['_id'=>(int)$id]);
			$result = iterator_to_array($result);
			$res = (!empty($result))?$result:[];
		}
		//echo '<pre>';print_r($res);//exit;
        $details = [];
		if(!empty($res) && count($res) > 0){
			foreach($res as $result){
				if (($result['user_type'] != 'N') && ($result['user_type'] != 'S') && (isset($result['company_id']) && ($result['company_id'] != ''))) {
					$company_details            = $this->companydetails($result['company_id']);
					if(!empty($company_details)){
						$details['company_id']      = $company_details['_id'];
						$details['company_name']    = $company_details['companydetails']['company_name'];
						$details['company_address'] = $company_details['companydetails']['company_address'];
					}
				}
				if(isset($result['login_country']) && $result['login_country'] != ''){
					$details['country_name'] = $this->countrydetails($result['login_country']);
				}
				if(isset($result['login_state']) && $result['login_state'] != ''){
					$details['state_name'] = $this->statedetails($result['login_state'],$result['login_country']);
				}
				if(isset($result['login_city']) && $result['login_city'] != ''){
					$details['city_name'] = $this->citydetails($result['login_city'],$result['login_state'],$result['login_country']);
				}
				$details['name'] = $result['name'];
				$details['username'] = isset($result['username'])?$result['username']:'';
				///Driver Code///
				$details['driver_code'] = isset($result['driver_code'])?$result['driver_code']:'';
				///Driver Code///
				$details['lastname'] = $result['lastname'];
				$details['email'] = $result['email'];
				$details['phone'] = $result['phone'];
				$details['address'] = $result['address'];
				$details['user_type'] = $result['user_type'];
				$details['driver_license_id'] = isset($result['driver_license_id'])?$result['driver_license_id']:'';
				$details['dob'] = isset($result['dob'])?$result['dob']:'';
				$details['id'] = $result['_id'];
				$details['account_balance'] = isset($result['account_balance'])?$result['account_balance']:'';
				$details['booking_limit'] = isset($result['booking_limit'])?$result['booking_limit']:'';
				$details['login_status'] = isset($result['login_status'])?$result['login_status']:'';
				if($driver == 1) {
					$details['gender'] = $result['gender'];
					$details['driver_license_expire_date'] = (isset($result['driver_license_expire_date'][0]))?$result['driver_license_expire_date'][0]:"";
					$details['driver_pco_license_number'] = (isset($result['driver_pco_license_number'][0]))?$result['driver_pco_license_number'][0]:"";
					$details['driver_pco_license_expire_date'] = (isset($result['driver_pco_license_expire_date'][0]))?$result['driver_pco_license_expire_date'][0]:"";
					$details['driver_insurance_number'] = (isset($result['driver_insurance_number'][0]))?$result['driver_insurance_number'][0]:"";
					$details['driver_insurance_expire_date'] = (isset($result['driver_insurance_expire_date'][0]))?$result['driver_insurance_expire_date'][0]:"";
					$details['driver_national_insurance_number'] = (isset($result['driver_national_insurance_number'][0]))?$result['driver_national_insurance_number'][0]:"";
					$details['driver_national_insurance_expire_date'] = (isset($result['driver_national_insurance_expire_date'][0]))?$result['driver_national_insurance_expire_date'][0]:"";
					$details['driver_app_version'] = isset($result['driver_app_version'])?$result['driver_app_version']:'';
				}
			}
		}
        return $details;
    }
	
	/** passenger info **/
    public function details_passengerinfo($id)
    {
		//$result  = DB::select()->from(PASSENGERS)->where('id', '=', $id)->execute()->as_array();
		  $arguments = [
              /*  array(
                    '$unwind' => '$passengerdetails'
                ),*/
                [
				'$lookup' => [
					'from' => MDB_CHILD_ACCOUNT_TYPE,
					'localField' => 'account_type',
					'foreignField' => '_id',
					'as' => 'account'
				]
				],
				
                [
                    '$project' => [
						'_id' => '$_id',
						'name' => '$name',
						'email' => '$email',
						'phone' => '$phone',
						'address' => '$address',
						'otp' => '$otp',
						'id_image' => '$id_image',
						'user_status' => '$user_status',
						'discount' => '$discount',
						'referral_code' => '$referral_code',
						'referral_code_amount' => '$referral_code_amount',
						'wallet_amount' => '$wallet_amount',
						'parent_id' => '$parent_id',
						'account_type' => '$account_type',
						'civil_id' => '$civilid',
						'civilid_front' => '$civilid_front',
						'civilid_back' => '$civilid_back',
						'account_type_name' => '$account.account_type',
                    ]
                ],
                [
				'$match' => ['_id' => (int)$id]]
		];
		$result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
        //$result  = $this->mongo_db->find(MDB_PASSENGERS,array('_id' => (int)$id),array('_id','name', 'email', 'phone', 'address', 'user_status', 'discount', 'referral_code', 'referral_code_amount', 'wallet_amount','account_type','parent_id'));
	

		$details = [];
		$key = 0;
        foreach ($result['result'] as $main_doc) {
		if(!empty($main_doc['account_type_name'])){	
		$get_child_type = $main_doc['account_type_name'];	
		$child_type = $get_child_type[0];
		
		}else{
			$child_type = '';
		}
				$details[$key]['id']                   = $main_doc['_id'];
				$details[$key]['user_status']          = $main_doc['user_status'];
				$details[$key]['name']                 = $main_doc['name'];
				$details[$key]['email']                = $main_doc['email'];
				$details[$key]['phone']                = $main_doc['phone'];
				$details[$key]['otp']                = $main_doc['otp'];
				$details[$key]['id_image']                = isset($main_doc['id_image'])?$main_doc['id_image']:'';
				$details[$key]['address']              = isset($main_doc['address'])?$main_doc['address']:'';
				$details[$key]['discount']             = isset($main_doc['discount'])?$main_doc['discount']:'';
				$details[$key]['referral_code']        = isset($main_doc['referral_code'])?$main_doc['referral_code']:'';
				$details[$key]['referral_code_amount'] = isset($main_doc['referral_code_amount'])?$main_doc['referral_code_amount']:'';
				$details[$key]['wallet_amount']        = isset($main_doc['wallet_amount'])?$main_doc['wallet_amount']:'';
				$details[$key]['account_type']         = isset($main_doc['account_type'])?$main_doc['account_type']:'';
				$details[$key]['civil_id']             = isset($main_doc['civil_id'])?$main_doc['civil_id']:'';
				$details[$key]['civilid_front']        = isset($main_doc['civilid_front'])?$main_doc['civilid_front']:'';
				$details[$key]['civilid_back']         = isset($main_doc['civilid_back'])?$main_doc['civilid_back']:'';
				$details[$key]['account_type_name']    = $child_type; 
				$details[$key]['parent_id']            = isset($main_doc['parent_id'])?$main_doc['parent_id']:'';
				$refer_name = $this->get_reference_details($main_doc['_id']);
				$details[$key]['referred_by']          = $refer_name;
		
			$key++;
		}
		//echo "<pre>"; print_r($details); exit;
		return $details;
    }
	
	public function get_reference_details($id)
	{
		$arguments = [
			['$unwind' => '$_id'],
			[
				'$lookup' => [
							'from'=>MDB_PASSENGER_REFERRAL,
							'localField'=> '_id',
							'foreignField' => "passenger_id",
							'as'=> "referral"
						]
			],
			['$match'=> ['referral.passenger_id' => (int)$id]],
			[
				'$project' => [
					'name' => '$name',
				]
			],
		];
		$referred_by = $this->mongo_db->aggregate(MDB_PASSENGERS,$arguments);
		return (!empty($referred_by) && isset($referred_by['name']))?$referred_by['name']:"-";
	}
   
    /** comapny details **/
    public function companydetails($id)
    {
        /*$result = DB::select()->from(COMPANY)->where('cid', '=', $id)->execute()->as_array();
        return (count($result) > 0)?$result:'';*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_COMPANY,['_id'=>(int)$id],['companydetails.company_name','companydetails.company_address']);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result) && count($result)>0)?$result:[];
    }
    public function countrydetails($id)
    {
        /*$result = DB::select('country_name')->from(COUNTRY)->where('country_id', '=', $id)->execute()->as_array();
		return (count($result) > 0)?$result[0]['country_name']:'';*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_CSC,['_id'=>(int)$id],['country_name']);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result) && count($result)>0)?$result['country_name']:'-';
    }
    public function statedetails($id,$cid)
    {
        /*$result = DB::select('state_name')->from(STATE)->where('state_id', '=', $id)->execute()->as_array();
		return (count($result) > 0)?$result[0]['state_name']:'';*/
		
		//MongoDB
		$country_id = (int)$cid;
		$state_id = (int)$id;
		$rs = $this->mongo_db->find(MDB_CSC,['stateinfo.state_id'=>$state_id,'_id'=>$country_id],['stateinfo.$'=>1])->sort(['stateinfo.state_id'=>-1]);
		//echo '<pre>';print_r(iterator_to_array($rs));exit;
		$result = (!empty($rs))?iterator_to_array($rs):[];
		if (!empty($result)){
			$result = (count($result[$country_id]['stateinfo']) > 0) ? array_reverse($result[$country_id]['stateinfo']) : [];
			$state_name = $result[0]['state_name'];
		} else {
			$state_name = '';
		}
		return $state_name;
    }
    public function citydetails($id,$sid,$cid)
    {
        /*$result = DB::select('city_name')->from(CITY)->where('city_id', '=', $id)->execute()->as_array();
		return (count($result) > 0)?$result[0]['city_name']:'';*/
		//echo $id.'=>'.$sid.'=>'.$cid;
		$country_id = (int)$cid;
		$state_id = (int)$sid;
		$city_id = (int)$id;
		$rs = $this->mongo_db->find(MDB_CSC,['_id'=>$country_id,'stateinfo.state_id'=>$state_id,'stateinfo.cityinfo.city_id'=>$city_id],['stateinfo.cityinfo.$'=>1])->sort(['stateinfo.cityinfo.city_id'=>-1]);
		//echo '<pre>';//print_r(iterator_to_array($rs));exit;
		$result = (!empty($rs))?iterator_to_array($rs):[];
		if (!empty($result)){
			//print_r($result);
			$city_detail = $result[$country_id]['stateinfo'][0]['cityinfo'];
			//Use recursive function search & get value for specific city details with array
			$resultset = $this->recursive_array_search($city_detail,'city_id',$city_id);
			//print_r($resultset);exit;
			$city_name = $resultset[0]['city_name'];
		} else {
			$city_name = '';
		}
		return $city_name;
    }
    //For select the view for rating company
    public function ratingcompanies_viewlist($id = '', $val, $offset)
    {
        $query   = " select * from " . RATING . " INNER JOIN " . COMPANY . " ON " . RATING . " .rating_companyid = " . COMPANY . " .cid INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_userid = " . PEOPLE . " .id  where rating_companyid='$id' order by rating.rating_id ASC limit " . $val . " , " . $offset . "";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //For select the view for rating drivers
    public function ratingdrivers_viewlist($id = '', $val, $offset)
    {
        $query   = " select * from " . RATING . " INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_driverid = " . PEOPLE . " .id where rating_driverid=" . $id . " order by rating_id ASC limit " . $val . " , " . $offset . "";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //For count the view for rating drivers
    public function ratingdrivers_countlist()
    {
        $query   = " select * from " . RATING . " INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_driverid = " . PEOPLE . " .id where 1=1 order by rating_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    //For count the view for rating companies
    public function ratingcompanies_countlist()
    {
        $query   = " select * from " . RATING . " INNER JOIN " . COMPANY . " ON " . RATING . " .rating_companyid = " . COMPANY . " .cid INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_userid = " . PEOPLE . " .id where 1=1 order by rating_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    //For select the view for rating company
    public function ratingcompanies_listview()
    {
        $query   = " select * from " . RATING . " INNER JOIN " . COMPANY . " ON " . RATING . " .rating_companyid = " . COMPANY . " .cid INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_userid = " . PEOPLE . " .id where 1=1 order by rating.rating_id ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //For select the view for rating drivers
    public function ratingdrivers_listview()
    {
        $query   = " select * from " . RATING . " INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_driverid = " . PEOPLE . " .id where 1=1  order by rating_id ASC ";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //For search the view for rating drivers
    public function get_all_ratingcompanies_searchlist_view($keyword = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (" . PEOPLE . ".name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . RATING . " INNER JOIN " . COMPANY . " ON " . RATING . " .rating_companyid = " . COMPANY . " .cid INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_userid = " . PEOPLE . " .id where 1=1 $name_where group by rating_companyid order by rating_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //For search the view for rating drivers
    public function get_all_ratingdrivers_searchlist_view($keyword = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        $name_where = "";
        if ($keyword) {
            $name_where = " AND (" . PEOPLE . ".name LIKE  '%$keyword%')";
        }
        $query   = " select * from " . RATING . " INNER JOIN " . PEOPLE . " ON " . RATING . " .rating_driverid = " . PEOPLE . " .id where 1=1 $name_where group by rating_driverid order by rating_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //for manage content view 
    public function content_list_view($id = '')
    {
        /*$query   = " select * from " . CMS . " LEFT join " . MENU . " on " . MENU . ".menu_id = " . CMS . ".menu_id where id='$id' and status='1' and type='1'";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        $ops = [['$match'=>['_id'=>['$eq'=>(int)$id]]],
						['$project'=>[
							'menu_id'=>'$_id',
							'menu_name'=>'$menu_name',
							'menu_link'=>'$menu_link',
							'status_post'=>'$status_post',
							'menu'=>'$menu',
							'meta_title'=>'$meta_title',
							'meta_keyword'=>'$meta_keyword',
							'meta_description'=>'$meta_description',
							'content'=>'$content',
							'arabic_content'=>'$arabic_content',
						]],											
				];
        $result = $this->mongo_db->aggregate(MDB_CMS,$ops);
        //print_r($result);
        return !empty($result['result'])?$result['result']:[];
        
    }
    //for manage content view 
    public function company_content_list_view($id = '')
    {
        $query   = " select * from " . COMPANY_CMS . " where id='$id' and type='1'";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    //for deleting contents
    public function delete_content($id)
    {
        /*$user = DB::delete(CMS)->where('id', '=', $id)->execute();
        return $user;*/
        $result = $this->mongo_db->remove(MDB_CMS,['_id'=>(int)$id]);
		return (empty($result['err']))?1:$result['err'];
    }
    /** Validating for edit view content **/
    public function validate_editview($arr)
    {
        return Validation::factory($arr)->rule('meta_title', 'not_empty')->rule('meta_keyword', 'not_empty')->rule('meta_description', 'not_empty')->rule('menu_name', 'not_empty');
    }
    /** Validating for edit view content **/
    public function validate_companyeditview($arr, $cid, $id)
    {
        return Validation::factory($arr)->rule('page_title', 'not_empty')->rule('page_title', 'max_length', [
            ':value',
            '50'
        ])->rule('menu_name', 'not_empty')->rule('menu_name', 'max_length', [
            ':value',
            '20'
        ])->rule('page_url', 'not_empty')->rule('page_url', 'max_length', [
            ':value',
            '20'
        ])
        //->rule('page_url', 'alpha_numeric', array(':value','/^[0-9]{1,}/'))
            ->rule('page_url', 'Model_Manage::checkpageurl', [
            ':value',
            $cid,
            $id
        ]);
    }
    public static function checkpageurl($pageurl, $cid, $id)
    {
        // Check if the username already exists in the database
        $result = DB::select('page_url')->from(COMPANY_CMS)->where('page_url', '=', $pageurl)->where('company_id', '=', $cid)->where('id', '!=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    /** Updating content view while editing **/
    public function update_editview_content($post, $id)
    {
        /*$result = DB::select()->from(MENU)->where(MENU . '.menu_id', '=', $post['menu_name'])->execute()->as_array();
        if (count($result) > 0) {
            $menu_name = $result[0]['menu_name'];
        } else {
            $menu_name = "";
        }
        $result = DB::update(CMS)->set(array(
            'menu_id' => $post['menu_name'],
            'menu' => $menu_name,
            'meta_title' => $post['meta_title'],
            'meta_keyword' => $post['meta_keyword'],
            'meta_description' => $post['meta_description'],
            'content' => $post['content']
        ))->where('id', '=', $id)->execute();
        return $result;*/
        $ops = [['$match'=>['_id'=>['$eq'=>(int)$post['menu_name']]]],
					['$project'=>['menu_name'=>'$menu_name']]];
        $result = $this->mongo_db->aggregate(MDB_CMS,$ops);
        $menu_name = (!empty($result['result']))?$result['result'][0]['menu_name']:"";        
        $data_set = ['menu'=>$menu_name,
				'meta_title'=>$post['meta_title'],
				'meta_keyword'=>$post['meta_keyword'],
				'meta_description'=>$post['meta_description'],
				'content'=>$post['content'],
				'arabic_content'=>$post['arabic_content']
				];        
        $update = $this->mongo_db->update(MDB_CMS,['_id'=>(int)$post['menu_name']],['$set'=>$data_set],['upsert'=>false]);
        return (count($update))?1:0;
    }
    /** Updating content view while editing **/
    public function update_edit_company_content($post, $id)
    {
        $result = DB::update(COMPANY_CMS)->set([
            'menu_name' => $post['menu_name'],
            'title' => $post['page_title'],
            'page_url' => $post['page_url'],
            'meta_title' => $post['meta_title'],
            'meta_keyword' => $post['meta_keyword'],
            'meta_description' => $post['meta_description'],
            'content' => $post['content']
        ])->where('id', '=', $id)->execute();
        return $result;
    }
    //Check the menu already exists
    public function menu_name_exits($post, $id)
    {
        /*$result = DB::select()->from(CMS)->where(CMS . '.menu_id', '!=', $post['menu_name'])->where(CMS . '.id', '=', $id)->execute()->as_array();
        if ($result) {
            return 1;
        }*/        
        $result=0;
        if($post['menu_name'] != $id){
			$ops = [['$match'=>['_id'=>['$eq'=>(int)$post['menu_name']]]],
			['$project'=>['menu'=>'$menu']]];
			$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
			$result = (isset($result['result'][0]['menu']))?1:0;		
		}        
        return $result;
    }
    public function get_companymanagerlist($id, $offset = '', $val = '',$find_count=false)
    {
        /*if($find_count){
            $result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->where('user_type', '=', 'M')->order_by('id', 'asc')->execute()->as_array();
            return count($result);
        } else {
            $result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->where('user_type', '=', 'M')->order_by('id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
            return $result;
        }*/
            
		//MongoDB
		$match_query = ['company._id'=>(int)$id,'people.user_type'=>'M'];
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' =>        MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from'   => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'company_id' => '$company._id',
						]
					],
				['$sort' =>['people.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => ['_id'=>0,
							'country_name' => '$country_name',
							'state_name' => '$stateinfo.state_name',
							'city_name' => '$stateinfo.cityinfo.city_name',
							'company_id' => '$company._id',
							'company_name' => '$company.companydetails.company_name',
							'created_date' => '$people.created_date',
							'status' => '$people.status',
							'name' => '$people.name',
							'email' => '$people.email',
							'address'=>'$people.address',
							'id' => '$_id',
						]
					],
				['$sort' =>['people.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    //selected manus 
    public function get_menus()
    {
        /*$result = DB::select()->from(MENU)->order_by('order_status', 'ASC')->execute()->as_array();
        return $result;*/
        $ops = [
					[
						'$project' => [
						'menu_id' => '$_id',
						'menu_name' => '$menu_name',
						'status_post' => '$status_post',
						]
					],
					[
						'$sort' => ["_id"=>-1]
					],
			];
		$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
		return  (!empty($result['result']))?$result['result']:[];       
    }
    public function get_companydriverlist($id, $offset = '', $val = '',$find_count=false)
    {
        /*if($find_count){
            $result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->where('user_type', '=', 'D')->order_by('id', 'asc')->execute()->as_array();
            return count($result);
        } else {
            $result = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->where('user_type', '=', 'D')->order_by('id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
            return $result;
        }*/
		//MongoDB
		$match_query = ['company._id'=>(int)$id,'people.user_type'=>'D'];
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'company_id' => '$company._id',
						]
					],
				['$sort' =>['people.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => ['_id'=>0,
							'country_name' => '$country_name',
							'state_name' => '$stateinfo.state_name',
							'city_name' => '$stateinfo.cityinfo.city_name',
							'company_id' => '$company._id',
							'company_name' => '$company.companydetails.company_name',
							'created_date' => '$people.created_date',
							'status' => '$people.status',
							'name' => '$people.name',
							'email' => '$people.email',
							'address'=>'$people.address',
							'id' => '$_id',
						]
					],
				['$sort' =>['people.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    public function get_companytaxilist($id, $offset = '', $val = '',$find_count=false)
    {
        /*if($find_count){
            $result = DB::select()->from(TAXI)->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->order_by('taxi_id', 'asc')->execute()->as_array();
            return count($result);
        } else {
            $result = DB::select()->from(TAXI)->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->where(COMPANY . '.cid', '=', $id)->order_by('taxi_id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
            return $result;
        }*/
        
        //MongoDB
		$match_query = ['taxi.taxi_company'=>(int)$id];
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'taxi_id' => '$taxi._id',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'country_name' => '$country_name',
							'state_name' => '$stateinfo.state_name',
							'city_name' => '$stateinfo.cityinfo.city_name',
							'taxi_id' => '$taxi._id',
							'company_name' => '$company.companydetails.company_name',
							'created_date' => '$taxi.created_date',
							'taxi_status' => '$taxi.taxi_status',
							'taxi_no' => '$taxi.taxi_no',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    /** getting driver rating given by users**/
    public function getdriverratinglist($id)
    {
        $result = DB::select()->from(PASSENGERS_LOG)->join(PASSENGERS, 'left')->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->order_by('passengers_log_id', 'asc')->execute()->as_array();
        return count($result);
    }
    /** getting driver rating given by users**/
    public function get_driverratinglist($id, $offset = '', $val = '')
    {
        $result = DB::select()->from(PASSENGERS_LOG)->join(PASSENGERS, 'left')->on(PASSENGERS_LOG . '.passengers_id', '=', PASSENGERS . '.id')->where(PASSENGERS_LOG . '.driver_id', '=', $id)->order_by('passengers_log_id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
        return $result;
    }
    /** getting user rating given to drivers**/
    public function getuserratinglist($id)
    {
        $result = DB::select()->from(PASSENGERS_LOG)->join(PEOPLE, 'left')->on(PASSENGERS_LOG . '.driver_id', '=', PEOPLE . '.id')->where(PASSENGERS_LOG . '.passengers_id', '=', $id)->order_by('passengers_log_id', 'asc')->execute()->as_array();
        return count($result);
    }
    /** getting user rating given to drivers**/
    public function get_userratinglist($id, $offset = '', $val = '')
    {
        $result = DB::select()->from(PASSENGERS_LOG)->join(PEOPLE, 'left')->on(PASSENGERS_LOG . '.driver_id', '=', PEOPLE . '.id')->where(PASSENGERS_LOG . '.passengers_id', '=', $id)->order_by('passengers_log_id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
        return $result;
    }
    /** getting data for manager driver list **/
    public function getmanagerdriverlist($id)
    {
        /*$rs            = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'M')->where('id', '=', $id)->execute()->as_array();
        $company_id    = $rs[0]['company_id'];
        $login_city    = $rs[0]['login_city'];
        $login_country = $rs[0]['login_country'];
        $login_state   = $rs[0]['login_state'];
		if($find_count){
			$result        = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where('user_type', '=', 'D')->where('login_city', '=', $login_city)->where('login_country', '=', $login_country)->where('login_state', '=', $login_state)->where('company_id', '=', $company_id)->order_by('id', 'asc')->execute()->as_array();
			return count($result);
		} else {
			$result        = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(PEOPLE . '.login_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(PEOPLE . '.login_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(PEOPLE . '.login_city', '=', CITY . '.city_id')->where('user_type', '=', 'D')->where('login_city', '=', $login_city)->where('login_country', '=', $login_country)->where('login_state', '=', $login_state)->where('company_id', '=', $company_id)->order_by('id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
			return $result;
		}*/
		
		//MongoDB
		//Checking the manager id with people and company details here
		$check_query =  ['_id'=>(int)$id,'user_type'=>'M'];
		$check_args = [
			['$match'  => $check_query],
			['$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company._id',
					'foreignField' => "company_id",
					'as' => "company"
				]
			],
			['$project' => ['_id'=>0,
					'id'=>'$_id',
					'company_id' => '$company_id',
					'login_city' => '$login_city',
					'login_state' => '$login_state',
					'login_country' => '$login_country',
				]
			],
		];
		$res = $this->mongo_db->aggregate(MDB_PEOPLE,$check_args);
		//echo "<pre>"; print_r($res); exit;
		if(count($res['result'])==0){
			return ($find_count)?0:[];
		}
		$company_id    = $res['result'][0]['company_id'];
		$login_city    = $res['result'][0]['login_city'];
		$login_country = $res['result'][0]['login_country'];
		$login_state   = $res['result'][0]['login_state'];
		
		$match_query = ['company._id'=>(int)$company_id,'people.user_type'=>'D','people.login_country'=>(int)$login_country,'people.login_state'=>(int)$login_state,'people.login_city'=>(int)$login_city];
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_state",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'company_id' => '$company._id',
						]
					],
				['$sort' =>['people.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>if"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_PEOPLE,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "login_country",
							'foreignField'=> "login_city",
							'as'=> "people"
						]
					],
					['$unwind' => '$people'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'people.company_id',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'country_name' => '$country_name',
							'state_name' => '$stateinfo.state_name',
							'city_name' => '$stateinfo.cityinfo.city_name',
							'company_id' => '$company._id',
							'company_name' => '$company.companydetails.company_name',
							'created_date' => '$people.created_date',
							'status' => '$people.status',
							'name' => '$people.name',
							'email' => '$people.email',
							'address'=>'$people.address'
						]
					],
				['$sort' =>['people.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>else"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    
    /** getting data for manager taxi list **/
    public function get_managertaxilist($id, $offset = '', $val = '',$find_count=false)
    {
        /*$rs            = DB::select()->from(PEOPLE)->join(COMPANY, 'LEFT')->on(PEOPLE . '.company_id', '=', COMPANY . '.cid')->where('user_type', '=', 'M')->where('id', '=', $id)->execute()->as_array();
        $company_id    = $rs[0]['company_id'];
        $login_city    = $rs[0]['login_city'];
        $login_country = $rs[0]['login_country'];
        $login_state   = $rs[0]['login_state'];
		if($find_count){
			$result        = DB::select()->from(TAXI)->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->where('taxi_country', '=', $login_country)->where('taxi_state', '=', $login_state)->where('taxi_city', '=', $login_city)->where('cid', '=', $company_id)->order_by('taxi_id', 'asc')->execute()->as_array();
			return count($result);
		} else {
			$result        = DB::select()->from(TAXI)->join(COMPANY, 'LEFT')->on(TAXI . '.taxi_company', '=', COMPANY . '.cid')->join(COUNTRY, 'LEFT')->on(TAXI . '.taxi_country', '=', COUNTRY . '.country_id')->join(STATE, 'LEFT')->on(TAXI . '.taxi_state', '=', STATE . '.state_id')->join(CITY, 'LEFT')->on(TAXI . '.taxi_city', '=', CITY . '.city_id')->where('taxi_country', '=', $login_country)->where('taxi_state', '=', $login_state)->where('taxi_city', '=', $login_city)->where('cid', '=', $company_id)->order_by('taxi_id', 'asc')->limit($val)->offset($offset)->execute()->as_array();
			return $result;
		}*/
		
		//MongoDB
		//Checking the manager id with people and company details here
		$check_query =  ['_id'=>(int)$id,'user_type'=>'M'];
		$check_args = [
			['$match'  => $check_query],
			['$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company._id',
					'foreignField' => "company_id",
					'as' => "company"
				]
			],
			['$project' => ['_id'=>0,
					'id'=>'$_id',
					'company_id' => '$company_id',
					'login_city' => '$login_city',
					'login_state' => '$login_state',
					'login_country' => '$login_country',
				]
			],
		];
		$res = $this->mongo_db->aggregate(MDB_PEOPLE,$check_args);
		//echo "<pre>"; print_r($res); exit;
		if( count($res['result'])==0){
			return ($find_count)?0:[];
		}
		$company_id    = $res['result'][0]['company_id'];
        $login_city    = $res['result'][0]['login_city'];
        $login_country = $res['result'][0]['login_country'];
        $login_state   = $res['result'][0]['login_state'];
		
		$match_query = ['taxi.taxi_company'=>(int)$id];
		if($find_count){
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'taxi_id' => '$taxi._id',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?count($result['result']):0;
		} else {
			$arguments = [
					['$unwind' => '$stateinfo'],
					['$unwind' => '$stateinfo.cityinfo'],
					['$lookup' => [
							'from' => MDB_TAXI,
							'localField'=> 'stateinfo.cityinfo.city_id',
							'foreignField'=> "taxi_country",
							'foreignField'=> "taxi_state",
                            'foreignField'=> "taxi_city",
							'as'=> "taxi"
						]
					],
					['$unwind' => '$taxi'],
					['$lookup' => [
							'from' => MDB_COMPANY,
							'localField' => 'taxi.taxi_company',
							'foreignField' => "_id",
							'as' => "company"
						]
					],
					['$unwind' => '$company'],
					['$match'  => $match_query],
					['$project' => [
							'country_name' => '$country_name',
							'state_name' => '$stateinfo.state_name',
							'city_name' => '$stateinfo.cityinfo.city_name',
							'taxi_id' => '$taxi._id',
							'company_name' => '$company.companydetails.company_name',
							'created_date' => '$taxi.created_date',
							'taxi_status' => '$taxi.taxi_status',
							'taxi_no' => '$taxi.taxi_no',
							'company_id' => '$taxi.taxi_company',
						]
					],
				['$sort' =>['taxi.created_date' => -1] ],
				['$skip' => (int)$offset ],
				['$limit' => (int)$val ]
			];
			$result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
   
    public function get_allcompany_tranaction()
    {
        $result = DB::select()->from(COMPANY)->order_by('company_name', 'asc')->execute()->as_array();
        return $result;
		
    }
    public function rating_drivers($uid)
    {
        $query = "SELECT log.*,p.name as name FROM `" . PASSENGERS_LOG . "` as log Join `" . PEOPLE . "` as p ON log.driver_id=p.id WHERE log.driver_id=$uid";
        //echo $query;
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function count_rating_for_a_driver($uid)
    {
        $query = "SELECT count(`passengers_log_id`) as co_nt FROM `" . PASSENGERS_LOG . "` as log Join `" . PEOPLE . "` as p ON log.driver_id=p.id WHERE log.driver_id=$uid";
        //echo $query;
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function driver_unavailable($id = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_driverid=$id";
        //echo $query;
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function validate_unavailabledriver($arr)
    {
        return Validation::factory($arr)->rule('reason', 'not_empty')->rule('startdate', 'not_empty')->rule('enddate', 'not_empty')->rule('enddate', 'Model_Manage::date_diff', [
            'value',
            $arr['startdate']
        ])->rule('enddate', 'Model_Manage::checkunavailable', [
            ':value',
            $arr
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
    public static function checkunavailable($enddate, $post)
    {
        $driver_id       = $post['driver_id'];
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
        $query  = " select * from " . UNAVAILABILITY . " where 1=1  and u_driverid='$driver_id' $date_where order by u_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function add_unavailabledriver($post)
    {
        $createdby  = $this->user_createdby;
        $driver_id  = $post['driver_id'];
        $company_id = $this->get_companyid($driver_id);
        $result     = DB::insert(UNAVAILABILITY, [
            'u_driverid',
            'u_companyid',
            'u_reason',
            'u_startdate',
            'u_enddate',
            'u_createdby',
            'u_status'
        ])->values([
            $post['driver_id'],
            $company_id,
            $post['reason'],
            $post['startdate'],
            $post['enddate'],
            $createdby,
            ACTIVE
        ])->execute();
        return $result;
    }
    public function get_companyid($id)
    {
        $result = DB::select('company_id')->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
		return (count($result) > 0)?$result[0]['company_id']:0;
    }
    public function check_peoplecompanyid($id)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $id)->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return 0;
        }*/
		$result = $this->mongo_db->find_one(MDB_PEOPLE,['_id'=>(int)$id]);
		return (!empty($result))?$result:[];
	}
    public function check_taxicompanyid($id)
    {
        /*$result = DB::select()->from(TAXI)->where('taxi_id', '=', $id)->execute()->as_array();
        return (count($result) > 0)?$result:0;*/
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_TAXI,['_id'=>(int)$id],['taxi_company','taxi_country','taxi_state','taxi_city']);
		return (!empty($result) && count($result)>0)?$result:0;
    }
    public function check_companyid($id)
    {
        /*$result = DB::select()->from(COMPANY)->where('userid', '=', $id)->execute()->as_array();
        return (count($result) > 0)?$result:0;*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_COMPANY,['companydetails.userid'=>(int)$id],['_id']);
		return (!empty($result) && count($result)>0)?$result:0;
    }
    public function getunavailabledriverlist($driver_id = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id  Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_driverid=$driver_id";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($rs);
    }
    public function get_unavailabledriverlist($driver_id = '', $offset = '', $val = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id  Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid WHERE unable.u_driverid=$driver_id limit $val offset $offset";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function count_unavailability_list()
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($rs);
    }
    public function unavailability_details($offset = '', $val = '')
    {
        $query = "SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid limit $val offset $offset";
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;
    }
    public function count_unavailabilitysearch_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND u_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid  where 1=1 $staus_where $name_where order by u_id ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_unavailabilitysearch_list($keyword = "", $status = "", $offset = '', $val = '')
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND u_status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE '%$keyword%' escape '!' ) ";
        }
        $query   = " SELECT * FROM `" . UNAVAILABILITY . "` as unable Join `" . PEOPLE . "` as p ON unable.u_driverid=p.id Join `" . COMPANY . "` as c ON unable.u_companyid=c.cid  where 1=1 $staus_where $name_where order by u_id ASC limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function count_transaction_list($company, $startdate, $enddate)
    {
        $condition = "WHERE pl.travel_status = '1' and pl.driver_reply = 'A' ";
        if ($company != "") {
            $condition .= "and pl.company_id =  '$company'";
        }
        if ($startdate != "") {
            $condition .= "and pl.pickup_time >=  '$startdate' and pl.pickup_time <=  '$enddate' ";
        }
        $query   = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc";
        //echo $query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function transaction_details($company, $startdate, $enddate, $offset = '', $val = '')
    {
        $totalfare = "select sum(fare) from `transacation`";
        $condition = "WHERE pl.travel_status = '1' and pl.driver_reply = 'A' ";
        if ($company != "") {
            $condition .= "and pl.company_id =  '$company'";
        }
        if ($startdate != "") {
            $condition .= "and pl.pickup_time >=  '$startdate' and pl.pickup_time <=  '$enddate' ";
        }
        $query   = " SELECT * ,(" . $totalfare . ") AS totalfare, pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc limit $val offset $offset";
        //echo $query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    public function active_availabilitytaxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*$result = DB::update(TAXI)->set(array(
            'taxi_availability' => 'A'
        ))->where('taxi_id', 'IN', $activeids)->execute();
        return count($result);*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>['$in'=>$active_ids]],['$set'=>['taxi_availability' => 'A']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function block_availabilitytaxi_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*$result = DB::update(TAXI)->set(array(
            'taxi_availability' => 'D'
        ))->where('taxi_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_TAXI,['_id'=>['$in'=>$active_ids]],['$set'=>['taxi_availability' => 'D']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function active_availabilitydriver_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
       // print_r( $activeids);exit;
      /*  $result = DB::update(PEOPLE)->set(array(
            'availability_status' => 'A'
        ))->where('id', 'IN', $activeids)->execute();*/
        
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['availability_status' => 'A']],['multiple'=>true]);
        
        return count($result);
        
    }
    public function block_availabilitydriver_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        /*$result = DB::update(PEOPLE)->set(array(
            'availability_status' => 'D'
        ))->where('id', 'IN', $activeids)->execute();*/
        $active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['availability_status' => 'D']],['multiple'=>true]);
        return count($result);
    }
    // get menu list	
    public function count_menu_list()
    {
        /*$rs = DB::select()->from(MENU)->execute();
        return count($rs);*/
        $result = $this->mongo_db->count(MDB_CMS,[]);
        return $result;
    }
	
	public function menu_list()
    {
        $rs = DB::select()->from(MENU)->execute()->as_array();
        return $rs;
    }
    public function all_menu_list($offset, $val)
    {
        /*$rs = DB::select()->from(MENU)->limit($val)->offset($offset)->execute()->as_array();
        return $rs;*/
		$ops = [
					[
						'$project' => [
						'menu_id' => '$_id',
						'menu_name' => '$menu_name',
						'status_post' => '$status_post',
						]
					],
					[
						'$sort' => ["_id"=>-1]
					],
					[
						'$skip' => (int)$offset
					],
					[
						'$limit' => (int)$val
					]
			];
		$result = $this->mongo_db->aggregate(MDB_CMS,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];
    } 
    //For deleting menu
    public function delete_menu($id)
    {
        /*$result  = DB::delete(MENU)->where('menu_id', '=', $id)->execute();
        $result1 = DB::delete(CMS)->where('menu_id', '=', $id)->execute();
        return $result;*/
        $result = $this->mongo_db->remove(MDB_CMS,['_id'=>(int)$id]);
		return (empty($result['err']))?1:$result['err'];
    }
    public function details_taxi_driver($id)
    {
        $now   = date('Y-m-d H:i:s');
       /*$query = "SELECT m.mapping_driverid as driverid FROM " . TAXIMAPPING . " as m WHERE m.mapping_taxiid='" . $id . "' AND m.mapping_startdate<='" . $now . "' AND m.mapping_enddate>='" . $now . "'";
        //echo $query;exit;
        $rs    = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $rs;*/
		
		 //MongoDB
		 $result = $this->mongo_db->find_one(MDB_TAXI_DRIVER_MAPPING,['mapping_taxiid'=>(int)$id],['mapping_driverid']);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result))?$result:[];
    }
    // get mile list	
    public function count_mile_list()
    {
        $rs = DB::select()->from(MILES)->execute();
        return count($rs);
    }
    public function all_mile_list($offset = '', $val = '')
    {
        $rs = DB::select()->from(MILES)->order_by('mile_name', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $rs;
    } // end
    //Change the miles status  
    public function active_mile_request($activeids)
    {
        $result = DB::update(MILES)->set([
            'mile_status' => 'A'
        ])->where('id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function block_mile_request($blockids)
    {
        $result = DB::update(MILES)->set([
            'mile_status' => 'D'
        ])->where('id', 'IN', $blockids)->execute();
        return count($result);
    }
    public function trash_mile_request($trashids)
    {
        $result = DB::update(MILES)->set([
            'mile_status' => 'T'
        ])->where('id', 'IN', $trashids)->execute();
        return $result;
    } // End 
    //For deleting mile
    public function delete_mile($id)
    {
        $result = DB::delete(MILES)->where('id', '=', $id)->execute();
        return $result;
    }
    public function update_comments($passengers_log_id)
    {
       /* $result = DB::update(PASSENGERS_LOG)->set(array(
            'comments' => ''
        ))->where('passengers_log_id', '=', $passengers_log_id)->execute();
        return $result;
        
        */
        $update_log_array = ['comments' => ''];
		$pass_log_update          = $this->mongo_db->update(MDB_PASSENGERS_LOGS,['_id'=>(int)$passengers_log_id],['$set'=> $update_log_array],['upsert'=>false]);
		return $pass_log_update;
    }
    public function count_unassign_searchtaxi_list($keyword = "")
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $createdby_where = " AND taxi_country=$country_id AND taxi_state=$state_id AND taxi_city=$city_id AND taxi_company=$company_id ";
        } else if ($usertype == 'C') {
            $createdby_where = " AND taxi_company = $company_id ";
        } else {
            $createdby_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        //$company_where= ($company) ? " AND cid = '$company'" : "";
        //$staus_where= ($status) ? " AND taxi_status = '$status'" : "";
        $company_where = "";
        $staus_where   = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (taxi_no LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or taxi_type LIKE '%$keyword%' escape '!' ) ";
        }
        $booked_driver = $this->free_availabletaxi_list();
        $taxi_list     = "";
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list .= "'" . $value['taxi_id'] . "',";
            }
            $taxi_list = rtrim($taxi_list, ',');
        }
        $sql    = "select * from " . TAXI . " JOIN " . COMPANY . " ON " . TAXI . ".taxi_company = company.cid where " . TAXI . ".taxi_status='A' and  " . TAXI . ".taxi_availability='A'  and " . TAXI . ".taxi_id NOT IN ($taxi_list) $name_where $createdby_where order by " . TAXI . ".taxi_id asc";
        //$query = " select * from " . TAXI . " left join ".COUNTRY."  on  ".TAXI.".taxi_country =".COUNTRY.".country_id left join ".STATE." on ".TAXI.".taxi_state =".STATE.".state_id left join ".CITY." on ".TAXI.".taxi_city =".CITY.".city_id   left join ".COMPANY." on ".TAXI.".taxi_company = ".COMPANY.".cid  left join ".MOTORCOMPANY." on ".TAXI.".taxi_type =".MOTORCOMPANY.".motor_id left join ".MOTORMODEL." on ".TAXI.".taxi_model = ".MOTORMODEL.".model_id where 1=1 $company_where $staus_where $name_where $createdby_where order by taxi_id DESC";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return count($result);
    }
    public function get_unassign_taxi_searchlist($keyword = "", $offset = "", $val = "")
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $createdby_where = " AND taxi_country=$country_id AND taxi_state=$state_id AND taxi_city=$city_id AND taxi_company=$company_id ";
        } else if ($usertype == 'C') {
            $createdby_where = " AND taxi_company = $company_id ";
        } else {
            $createdby_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        //$company_where= ($company) ? " AND cid = '$company'" : "";
        //$staus_where= ($status) ? " AND taxi_status = '$status'" : "";
        $company_where = "";
        $staus_where   = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (taxi_no LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ";
            $name_where .= " or taxi_type LIKE '%$keyword%' escape '!' ) ";
        }
        $booked_driver = $this->free_availabletaxi_list();
        $taxi_list     = "";
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list .= "'" . $value['taxi_id'] . "',";
            }
            $taxi_list = rtrim($taxi_list, ',');
        }
        $sql     = "select * from " . TAXI . " JOIN " . COMPANY . " ON " . TAXI . ".taxi_company = company.cid where " . TAXI . ".taxi_status='A' and  " . TAXI . ".taxi_availability='A'  and " . TAXI . ".taxi_id NOT IN ($taxi_list) $name_where $createdby_where order by " . TAXI . ".taxi_id asc limit $offset,$val";
        $result  = Db::query(Database::SELECT, $sql)->execute()->as_array();
        $details = [];
        foreach ($result as $key => $res) {
            $details[$key]['created_by']        = $this->userNamebyId($res['taxi_createdby']);
            $details[$key]['taxi_id']           = $res['taxi_id'];
            $details[$key]['taxi_availability'] = $res['taxi_availability'];
            $details[$key]['taxi_status']       = $res['taxi_status'];
            $details[$key]['taxi_no']           = $res['taxi_no'];
            $details[$key]['company_name']      = $res['company_name'];
            $details[$key]['taxi_capacity']     = $res['taxi_capacity'];
            $details[$key]['taxi_fare_km']      = $res['taxi_fare_km'];
            $details[$key]['cid']               = $res['userid'];
        }
        return $details;
    }
    public function free_availabletaxi_list()
    {
		$company_id  = $this->session->get('company_id');
		$cuurentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query = [];
		$match_query['people.status'] = 'A';
		$match_query['mapping.mapping_status'] = 'A';
		if ($company_id!="" && $company_id!=0) {
			$match_query['taxi_company'] = (int)$company_id;
		}
		/*if ($cuurentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = array('$gte' => $cuurentdate);
			$match_query['mapping.mapping_enddate'] = array('$lt' => $enddate);
		}*/
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [
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
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
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
					'id' => '$people._id',
					'taxi_id' => '$_id'
				]
			]
			
		];
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
    }
	
	public function all_freetaxi_list($offset, $val, $cid = 0, $find_count = FALSE)
    {
		$currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query                     = [];
		$match_query['mapping.mapping_status'] = 'A';
		$match_query['driver.status'] = 'A';
		$match_query['company.companydetails.company_status'] = 'A';
		$match_query['country_status'] = 'A';
		$match_query['stateinfo.state_status'] = 'A';
		$match_query['stateinfo.cityinfo.city_status'] = 'A';
		$match_query['taxi.taxi_status'] = 'A';
		$match_query['taxi.taxi_availability'] = 'A';
		$match_query['people.status'] = 'A';
		$match_query['people.availability_status'] = 'A';
		$match_query['people.user_type'] = 'D';
		
		if ($cid!="" && $cid!=0) {
			$match_query['taxi.taxi_company'] = (int)$cid;
		}
		if ($currentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = ['$gte' => $currentdate];
			$match_query['mapping.mapping_enddate'] = ['$lte' => $enddate];
		}
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
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
				'$lookup' => [
					'from' => MDB_DRIVER_INFO,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'driver'
				]
			],
			[
				'$unwind' => '$driver'
			],
			[
				'$match' => $match_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'name' => '$people.name',
						'taxi_id' => '$taxi._id',
						'taxi_no' => '$taxi.taxi_no',
						'cid' => '$company._id',
						'company_name' => '$company.companydetails.company_name',
						'phone' => '$people.phone'
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
	
    public function count_freetaxisearch_list($keyword = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        //$company_where= ($company) ? " AND cid = '$company'" : "";
        //$status_where= ($status) ? " AND mapping_status = '$status'" : "";
        $company_where = "";
        $status_where  = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ) ";
        }
        //$query = " select * from " . TAXIMAPPING . " left join " .COMPANY. " on " .TAXIMAPPING.".mapping_companyid = " .COMPANY.".cid left join ".TAXI." on ".TAXIMAPPING.".mapping_taxiid = ".TAXI.".taxi_id  left join ".COUNTRY." on ".TAXIMAPPING.".mapping_countryid = ".COUNTRY.".country_id left join ".STATE." on ".TAXIMAPPING.".mapping_stateid = ".STATE.".state_id left join ".CITY." on ".TAXIMAPPING.".mapping_cityid = ".CITY.".city_id  left join ".PEOPLE." on ".TAXIMAPPING.".mapping_driverid =".PEOPLE.".id where 1=1 $company_where $user_created_where $status_where $name_where order by mapping_startdate DESC ";
        $currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
        $query_where = " AND ( ( '$currentdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        $query       = " select * from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id left join " . DRIVER . " on " . TAXIMAPPING . ".mapping_driverid =" . DRIVER . ".driver_id where " . TAXIMAPPING . ".mapping_status = 'A'  and " . DRIVER . ".status='F' and " . COMPANY . ".company_status='A' and " . COUNTRY . ".country_status='A' and " . STATE . ".state_status='A' and " . CITY . ".city_status='A' and " . TAXI . ".taxi_status='A' and " . TAXI . ".taxi_availability='A' and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and people.user_type='D' $name_where $query_where $user_created_where order by mapping_startdate ASC ";
        $result      = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);
    }
    public function get_all_freetaxi_searchlist($keyword = "", $offset = "", $val = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype == 'M') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND mapping_companyid = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        //$company_where= ($company) ? " AND cid = '$company'" : "";
        //$status_where= ($status) ? " AND mapping_status = '$status'" : "";
        $company_where = "";
        $status_where  = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ) ";
        }
        //$query = " select * from " . TAXIMAPPING . " left join " .COMPANY. " on " .TAXIMAPPING.".mapping_companyid = " .COMPANY.".cid left join ".TAXI." on ".TAXIMAPPING.".mapping_taxiid = ".TAXI.".taxi_id  left join ".COUNTRY." on ".TAXIMAPPING.".mapping_countryid = ".COUNTRY.".country_id left join ".STATE." on ".TAXIMAPPING.".mapping_stateid = ".STATE.".state_id left join ".CITY." on ".TAXIMAPPING.".mapping_cityid = ".CITY.".city_id  left join ".PEOPLE." on ".TAXIMAPPING.".mapping_driverid =".PEOPLE.".id where 1=1 $company_where $user_created_where $status_where $name_where order by mapping_startdate DESC limit $val offset  $offset ";
        $currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
        $query_where = " AND ( ( '$currentdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) )";
        $query       = " select * from " . TAXIMAPPING . " left join " . TAXI . " on " . TAXIMAPPING . ".mapping_taxiid =" . TAXI . ".taxi_id left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id  left join " . PEOPLE . " on " . TAXIMAPPING . ".mapping_driverid =" . PEOPLE . ".id left join " . DRIVER . " on " . TAXIMAPPING . ".mapping_driverid =" . DRIVER . ".driver_id where " . TAXIMAPPING . ".mapping_status = 'A'  and " . DRIVER . ".status='F' and " . COMPANY . ".company_status='A' and " . COUNTRY . ".country_status='A' and " . STATE . ".state_status='A' and " . CITY . ".city_status='A' and " . TAXI . ".taxi_status='A' and " . TAXI . ".taxi_availability='A' and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and people.user_type='D' $name_where $query_where $user_created_where order by mapping_startdate ASC limit $offset,$val ";
        $result      = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details     = [];
        foreach ($result as $key => $res) {
            $details[$key]['created_by']        = $this->userNamebyId($res['mapping_createdby']);
            $details[$key]['mapping_id']        = $res['mapping_id'];
            $details[$key]['mapping_status']    = $res['mapping_status'];
            $details[$key]['name']              = $res['name'];
            $details[$key]['company_name']      = $res['company_name'];
            $details[$key]['taxi_no']           = $res['taxi_no'];
            $details[$key]['country_name']      = $res['country_name'];
            $details[$key]['state_name']        = $res['state_name'];
            $details[$key]['city_name']         = $res['city_name'];
            $details[$key]['mapping_startdate'] = $res['mapping_startdate'];
            $details[$key]['phone']             = $res['phone'];
            $details[$key]['mapping_enddate']   = $res['mapping_enddate'];
            $details[$key]['id']                = $res['id'];
            $details[$key]['cid']               = $res['userid'];
            $details[$key]['taxi_id']           = $res['taxi_id'];
        }
        return $details;
    }
  /*  public function free_driver_list_count($cid = 0)
    {
        $usertype        = $this->usertype;
        $country_id      = $this->country_id;
        $state_id        = $this->state_id;
        $city_id         = $this->city_id;
        $assigned_driver = $this->free_availabletaxi_list();
        $driver_list     = '';
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list .= "'" . $value['id'] . "',";
            }
            $driver_list = rtrim($driver_list, ',');
        }
        $companyCond = "";
        if (!empty($cid)) {
            $companyCond = " and " . PEOPLE . ".company_id = '$cid'";
        }
        if ($usertype == 'M') {
            $companyCond .= " and " . PEOPLE . ".login_country='$country_id' and " . PEOPLE . ".login_state='$state_id' and " . PEOPLE . ".login_city='$city_id'";
        }
        $sql    = "select * from " . PEOPLE . " JOIN " . COMPANY . " ON " . PEOPLE . ".company_id = company.cid where " . PEOPLE . ".user_type='D'  and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and " . PEOPLE . ".id NOT IN ($driver_list) $companyCond order by " . PEOPLE . ".id asc ";
        $result = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return count($result);
    }
    public function all_free_driver_list($offset, $val, $cid = 0)
    {
        $usertype        = $this->usertype;
        $country_id      = $this->country_id;
        $state_id        = $this->state_id;
        $city_id         = $this->city_id;
        $assigned_driver = $this->free_availabletaxi_list();
        $driver_list     = '';
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list .= "'" . $value['id'] . "',";
            }
            $driver_list = rtrim($driver_list, ',');
        }
        $companyCond = "";
        if (!empty($cid)) {
            $companyCond = " and " . PEOPLE . ".company_id = '$cid'";
        }
        if ($usertype == 'M') {
            $companyCond .= " and " . PEOPLE . ".login_country='$country_id' and " . PEOPLE . ".login_state='$state_id' and " . PEOPLE . ".login_city='$city_id'";
        }
        $sql     = "select * from " . PEOPLE . "
        JOIN " . COMPANY . " ON " . PEOPLE . ".company_id = company.cid
        where " . PEOPLE . ".user_type='D'  and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and " . PEOPLE . ".id NOT IN ($driver_list) $companyCond order by " . PEOPLE . ".id asc limit $offset,$val";
        $result  = Db::query(Database::SELECT, $sql)->execute()->as_array();
        $details = array();
        foreach ($result as $key => $res) {
            $details[$key]['created_by']          = $this->userNamebyId($res['user_createdby']);
            $details[$key]['name']                = $res['name'];
            $details[$key]['username']            = $res['username'];
            $details[$key]['email']               = $res['email'];
            $details[$key]['address']             = $res['address'];
            $details[$key]['availability_status'] = $res['availability_status'];
            $details[$key]['company_name']        = $res['company_name'];
            $details[$key]['status']              = $res['status'];
            $details[$key]['id']                  = $res['id'];
            $details[$key]['driver_license_id']   = $res['driver_license_id'];
            $details[$key]['phone']               = $res['phone'];
            $details[$key]['cid']                 = $res['userid'];
        }
        return $details;
    } */
  
	public function all_free_driver_list($offset, $val, $cid = 0,$find_count=false)
    {
        $usertype       = $this->usertype;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$match_query = $taxi_list = [];
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		$match_query['availability_status'] = 'A';
		$booked_driver = $this->free_availabletaxi_list();
		//echo count($booked_driver); exit;
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list[] = (int)$value['id'];
            }
			$match_query['_id'] = ['$nin' => $taxi_list];
        }
        if (!empty($cid) && $cid!=0) {
			$match_query['company_id'] = (int)$cid;
        }
        if ($usertype == 'M') {
			$match_query['login_country'] = (int)$country_id;
			$match_query['login_state'] = (int)$state_id;
			$match_query['login_city'] = (int)$city_id;
        }
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				]
			],
			[
				'$unwind' => '$company'
			],
			[
				'$match' => $match_query
			],
		];
		if($find_count == TRUE){
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$arguments = array_merge($common_arguments,$count_arguments);
			$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
			//echo "<pre>"; print_r($result); exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		}else{
			$field_arguments = [
				[
					'$project' => [
						'id'=>'$_id',
						'user_createdby' => '$user_createdby',
						'name' => '$name',
						'username' => '$username',
						'email' => '$email',
						'address'=>'$address',
						'availability_status'=>'$availability_status',
						'company_name' => '$company.companydetails.company_name',
						'status'=>'$status',
						'driver_license_id'=>'$driver_license_id',
						'phone'=>'$phone',
						'cid'=>'$company.companydetails.userid',	
					]
				],
				[
					'$sort' => ['_id' => 1]
				],
				[
					'$skip' => $offset
				],
				[
					'$limit' => (int)$val
				],
			];
			$arguments = array_merge($common_arguments,$field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
			for($i=0;$i<count($result['result']);$i++){				
				$result['result'][$i]['user_createdby'] = isset($result['result'][$i]['user_createdby'])?$this->userNamebyId($result['result'][$i]['user_createdby']):"";
			}
			return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
		}
	}
	
    /*public function free_driver_list_count()
    {
    
    $assigned_driver = $this->free_availabletaxi_list();
    
    $driver_list = '';
    
    if(count($assigned_driver) > 0)
    {
    foreach($assigned_driver as $key => $value)
    {
    $driver_list .= "'".$value['id']."',";
    }
    $driver_list = rtrim($driver_list,',');
    }
    
    $sql = "select * from ".PEOPLE." JOIN ".COMPANY." ON ".PEOPLE.".company_id = company.cid where ".PEOPLE.".user_type='D'  and ".PEOPLE.".status='A' and ".PEOPLE.".availability_status='A' and ".PEOPLE.".id NOT IN ($driver_list) order by ".PEOPLE.".id asc ";
    
    $result = Db::query(Database::SELECT, $sql)
    ->execute()
    ->as_array();
    
    return count($result);
    
    }*/
    public function count_unassign_searchdriver_list($keyword = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $user_created_where = " AND login_country = $country_id AND login_state = $state_id AND login_city = $city_id AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        //$company_where= ($company) ? " AND cid = '$company'" : "";	
        //$staus_where= ($status) ? " AND status = '$status'" : "";
        $company_where = "";
        $staus_where   = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%' ) ";
        }
        //$query = " select * from " . PEOPLE . " left join ".COMPANY." on ".PEOPLE.".company_id = ".COMPANY.".cid  left join ".COUNTRY." on ".PEOPLE.".login_country = ".COUNTRY.".country_id   left join ".STATE." on ".PEOPLE.".login_state = ".STATE.".state_id    left join ".CITY." on ".PEOPLE.".login_city = ".CITY.".city_id where ".PEOPLE.".user_type = 'D' $company_where $staus_where $name_where $user_created_where order by created_date DESC";
        $assigned_driver = $this->free_availabletaxi_list();
        $driver_list     = '';
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list .= "'" . $value['id'] . "',";
            }
            $driver_list = rtrim($driver_list, ',');
        }
        $query  = "select * from " . PEOPLE . " JOIN " . COMPANY . " ON " . PEOPLE . ".company_id = company.cid where " . PEOPLE . ".user_type='D'  and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and " . PEOPLE . ".id NOT IN ($driver_list) $name_where $user_created_where order by " . PEOPLE . ".id asc ";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($result);
    }
    public function get_unassign_driver_searchlist($keyword = "", $offset = "", $val = "")
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'M') {
            $user_created_where = " AND login_country = $country_id AND login_state = $state_id AND login_city = $city_id AND company_id = $company_id ";
        } else if ($usertype == 'C') {
            $user_created_where = " AND company_id = $company_id ";
        } else {
            $user_created_where = "";
        }
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        /*$company_where= ($company) ? " AND cid = '$company'" : "";	
        $staus_where= ($status) ? " AND status = '$status'" : "";*/
        $company_where = "";
        $staus_where   = "";
        $name_where    = "";
        if ($keyword) {
            $name_where = " AND (name LIKE  '%$keyword%' ";
            $name_where .= " or company_name LIKE  '%$keyword%') ";
        }
        //$query = " select * from " . PEOPLE . " left join ".COMPANY." on ".PEOPLE.".company_id = ".COMPANY.".cid  left join ".COUNTRY." on ".PEOPLE.".login_country = ".COUNTRY.".country_id   left join ".STATE." on ".PEOPLE.".login_state = ".STATE.".state_id    left join ".CITY." on ".PEOPLE.".login_city = ".CITY.".city_id  where ".PEOPLE.".user_type = 'D' $company_where $staus_where $name_where $user_created_where order by created_date DESC limit $val offset  $offset";
        $assigned_driver = $this->free_availabletaxi_list();
        $driver_list     = '';
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list .= "'" . $value['id'] . "',";
            }
            $driver_list = rtrim($driver_list, ',');
        }
        $query   = "select * from " . PEOPLE . " JOIN " . COMPANY . " ON " . PEOPLE . ".company_id = company.cid where " . PEOPLE . ".user_type='D'  and " . PEOPLE . ".status='A' and " . PEOPLE . ".availability_status='A' and " . PEOPLE . ".id NOT IN ($driver_list) $name_where $user_created_where order by " . PEOPLE . ".id asc limit $val offset  $offset ";
        $result  = Db::query(Database::SELECT, $query)->execute()->as_array();
        $details = [];
        foreach ($result as $key => $res) {
            $details[$key]['created_by']          = $this->userNamebyId($res['user_createdby']);
            $details[$key]['name']                = $res['name'];
            $details[$key]['username']            = $res['username'];
            $details[$key]['email']               = $res['email'];
            $details[$key]['address']             = $res['address'];
            $details[$key]['company_name']        = $res['company_name'];
            $details[$key]['availability_status'] = $res['availability_status'];
            $details[$key]['status']              = $res['status'];
            $details[$key]['id']                  = $res['id'];
            $details[$key]['driver_license_id']   = $res['driver_license_id'];
            $details[$key]['phone']               = $res['phone'];
            $details[$key]['cid']                 = $res['userid'];
        }
        return $details;
    }
	public function current_package_details($cid)
    {
        /*$array  = array();
        $query  = "SELECT people.id ,(select upgrade_packageid from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_packageid,(select check_package_type from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as check_package_type,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate FROM people WHERE user_type='C' and company_id ='$cid' group by people.id Having ( check_package_type = 'T' or upgrade_expirydate >=now() )";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        if (count($result) > 0) {
            $package_query  = "select *,(select upgrade_expirydate from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as upgrade_expirydate,(select upgrade_no_taxi from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as total_taxi,(select upgrade_no_driver from package_report where package_report.upgrade_companyid = '$cid' order by upgrade_id desc limit 0,1 ) as total_driver from package where package_id = " . $result[0]['upgrade_packageid'];
            $package_result = Db::query(Database::SELECT, $package_query)->execute()->as_array();
            return $package_result;
        } else {
            return $array;
        }*/
		
		//MongoDB
		$current_time = convert_timezone('now', TIMEZONE);
		$resultset = $this->mongo_db->count(MDB_PEOPLE,['company_id' => (int)$cid, 'user_type' => 'C']);
		if ($resultset > 0) {
			$arguments = [
				['$match'=> ['upgrade_companyid' => (int)$cid, 'upgrade_expirydate' =>['$gte' => $current_time ]]],
				['$project' => ['total_driver'=> '$upgrade_no_driver','total_taxi'=> '$upgrade_no_taxi','package_type' => '$check_package_type','upgrade_expirydate'=>'$upgrade_expirydate','package_name'=>'$upgrade_packagename','upgrade_packageid'=>'$upgrade_packageid']],
				['$sort' => ['upgrade_id' => -1]],
				['$limit' => 1],
			];
			$result = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$arguments);
			return (!empty($result['result']))?$result['result'][0]:[];
		} else {
			return [];
		}
    }
    public function mute_driver_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(PEOPLE)->set([
            'status' => 'M'
        ])->where('id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function company_info($cid)
    {
        /*$rs = DB::select()->from(COMPANYINFO)->where('company_cid', '=', $cid)->execute()->as_array();
        return $rs;*/
        $arguments = [
            ['$match'	=> ['_id' => $cid]],
            ['$unwind'=>'$companyinfo'],
            [
                '$project' => [
					'company_domain'=>'$companyinfo.company_domain',
					'company_currency'=>'$companyinfo.company_currency',
                ]
            ]
        ];
        $result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
		//echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    /*********************************************************************************************/
    //Function used to get all driver logs with transactions
    public function get_driver_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $start = null, $limit = null, $current_date, $fromdate, $todate)
    {
        if ($current_date == 1) {
            $start_time =  date('Y-m-d') . ' 00:00:01';//'2014-05-06 00:00:01';
            $end_time   = date('Y-m-d') . ' 23:59:59';
        } else {
            $start_time = $fromdate;//'2014-05-06 00:00:01';
            $end_time   = $todate;
        }
	
		//MongoDB
		 $match_query = ["\$and" => [["pickup_time"=>['$gte' => $start_time,'$lte'=> $end_time]],['driver_id' => (int)$id],['travel_status' => (int)$travel_status],['msg_status' => $msg_status],['driver_reply' => $driver_reply] ]];
		//print_r($match_query);//exit;
        $arguments = [
            ['$match'	=> $match_query],
			['$lookup' 		=> [
                    'from'			=>	MDB_PASSENGERS,
                    'localField'	=> 'passengers_id',
                    'foreignField'	=> "_id",
                    'as'			=> "passengers"
                ]
            ],
            ['$unwind'=>'$passengers'],
            ['$lookup' 		=> [
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                ]
            ],
            ['$unwind'=>'$trans'],
            [
                '$project' => [
					'passengers_id'=>'$passengers_id',
					'driver_id'=>'$driver_id',
					'taxi_id'=>'$taxi_id',
					'company_id'=>'$company_id',
					'current_location'=>'$current_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_location'=>'$drop_location',
					'drop_latitude'=>'$drop_latitude',
					'drop_latitude'=>'$drop_longitude',
					'distance'=>'$distance',
					'approx_duration'=>'$approx_duration',
					'approx_fare'=>'$approx_fare',
					'pickup_time'=>'$pickup_time',
					'travel_status'=>'$travel_status',
					'driver_reply'=>'$driver_reply',
					'driver_comments'=>'$driver_comments',
					'fixedprice'=>'$fixedprice',
					'company_tax'=>'$company_tax',
					'faretype'=>'$faretype',
					'bookingtype'=>'$bookingtype',
					'luggage'=>'$luggage',
					'bookby'=>'$bookby',
					'operator_id'=>'$operator_id',
					'distance'=>'$trans.distance',
					'actual_distance'=>'$trans.actual_distance',
                    'fare' => '$trans.fare',
					'remarks' => '$trans.remarks',
					'payment_type' => '$trans.payment_type',
					'amt' => '$trans.amt',
					'distance_unit' => '$trans.distance_unit',
					'payment_status'=>'$trans.payment_status',
					'Taxamt'=>'$trans.company_tax',
					'name'=>'$passengers.name',
                ]
            ],
            [
                '$skip' => 0
            ],
            [
              '$limit' => (int)$start
            ]
        ];

		$table=MDB_PASSENGERS_LOGS;
		if($travel_status=='1')
		{
			$table=MDB_PASSENGERSLOGS_COMPLETED;
		}
		else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
		{
			$table=MDB_PASSENGERSLOGS_CANCELED;
		}

        $result = $this->mongo_db->aggregate($table,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    /*********************************************************************************************/
    //Function used to Passenegr completed logs with transactions
    public function get_passenger_completed_transaction($id, $msg_status, $driver_reply = null, $travel_status = null, $limit = null, $offset = null, $current_date, $fromdate, $todate)
    {
		
        if($current_date != 1){
			$match_query =  ['passengers_id' => (int)$id,'msg_status' => $msg_status,'driver_reply'=>$driver_reply,'travel_status' => (int)$travel_status,'$and' => [['pickup_time' =>  ['$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($fromdate) * 1000)] ],['pickup_time' =>  ['$lte'=>new \MongoDB\BSON\UTCDateTime(strtotime($todate) * 1000)] ] ] ];
		}else{
			$match_query =  ['passengers_id' => (int)$id,'msg_status' => $msg_status,'driver_reply'=>$driver_reply,'travel_status' => (int)$travel_status];
		}
		//print_r($match_query); exit;
		$arguments = [
			['$lookup' 		=> [
					'from'			=>	MDB_PASSENGERS,
					'localField'	=> 'passengers_id',
					'foreignField'	=> '_id',
					'as'			=> 'passenger'
				]
			],
			['$unwind' => '$passenger'],
			['$lookup' 		=> [
					'from'			=>	MDB_TRANSACTION,
					'localField'	=> '_id',
					'foreignField'	=> 'passengers_log_id',
					'as'			=> 'transaction'
				]
			],
			['$unwind' => '$transaction'],
			['$match'	=> $match_query],
			[
				'$project' => [
					'passengers_log_id' => '$_id',
					'passenger_id' => '$passenger_id',
					'driver_id' => '$driver_id',
					'taxi_id' => '$taxi_id',
					'company_id' => '$company_id',
					'current_location'=>'$current_location',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'drop_location'=>'$drop_location',
					'drop_latitude'=>'$drop_latitude',
					'drop_longitude'=>'$drop_longitude',
					'approx_distance'=>'$approx_distance',
					'approx_duration'=>'$approx_duration',
					'approx_fare'=>'$approx_fare',
					'pickup_time'=>'$pickup_time',
					'travel_status'=>'$travel_status',
					'driver_reply'=>'$driver_reply',
					'driver_comments'=>'$driver_comments',
					'fixedprice'=>'$fixedprice',
					'company_tax'=>'$company_tax',
					'faretype'=>'$faretype',
					'bookingtype'=>'$bookingtype',
					'luggage'=>'$luggage',
					'bookby'=>'$bookby',
					'operator_id'=>'$operator_id',
					'distance'=>'$transaction.distance',
					'actual_distance'=>'$transaction.actual_distance',
					'fare'=>'$transaction.fare',
					'remarks'=>'$transaction.remarks',
					'payment_type'=>'$transaction.payment_type',
					'amt'=>'$transaction.amt',
					'distance'=>'$transaction.distance',
					'payment_status'=>'$transaction.payment_status',
					'Taxamt'=>'$transaction.company_tax',
					'name' => '$passenger.name'
				]
			],
			[
				'$sort' => [
					'_id' => 1
				]
			],
			['$skip' => (int)$offset],
			['$limit' => (int)$limit]
		];

		$table=MDB_PASSENGERS_LOGS;
		if($travel_status=='1')
		{
			$table=MDB_PASSENGERSLOGS_COMPLETED;
		}
		else if($travel_status=='4' || $travel_status=='8' || $driver_reply =='C')
		{
			$table=MDB_PASSENGERSLOGS_CANCELED;
		}

		$result = $this->mongo_db->aggregate($table,$arguments);
		//echo "<pre>"; print_r($result); exit;			
		return (!empty($result['result']))?$result['result']:[];
    }
	

    /*** Common Function for generating PDF *************/
    public function generate_pdf($html, $filename)
    {
        require_once(APPPATH . 'vendor/pdf/config/lang/eng.php');
        require_once(APPPATH . 'vendor/pdf/tcpdf.php');
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        // set header and footer fonts
        // $pdf->setHeaderFont(Array(
        //     PDF_FONT_NAME_MAIN,
        //     '',
        //     PDF_FONT_SIZE_MAIN
        // ));


        $pdf->setFooterFont(Array(
            PDF_FONT_NAME_DATA,
            '',
            PDF_FONT_SIZE_DATA
        ));
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetMargins(5, 5, 5);
        $pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);

        // set default monospaced font
       // $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        //set margins00
        //$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        //set some language-dependent strings
        $pdf->setLanguageArray($l);
        // ---------------------------------------------------------
        // set font
        $pdf->SetFont('helvetica', '', 0);
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 9);
        $pdf->writeHTML($html, true, false, false, false, '');
        // add a page
        // output the HTML content
        // reset pointer to the last page
        //Close and output PDF document
        ob_end_clean();
        $pdf->Output($filename . '.pdf', 'D');
        exit;
    }
    /*** Common Function for Send PDF *************/
    public function send_pdf($html, $driver_name, $driver_email, $filepath)
    {
        require_once(APPPATH . 'vendor/pdf/config/lang/eng.php');
        require_once(APPPATH . 'vendor/pdf/tcpdf.php');
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        // set header and footer fonts
        $pdf->setHeaderFont(Array(
            PDF_FONT_NAME_MAIN,
            '',
            PDF_FONT_SIZE_MAIN
        ));
        $pdf->setFooterFont(Array(
            PDF_FONT_NAME_DATA,
            '',
            PDF_FONT_SIZE_DATA
        ));
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        //set margins
        //$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        //$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        //set some language-dependent strings
        //$pdf->setLanguageArray($l);
        // ---------------------------------------------------------
        // set font
        $pdf->SetFont('helvetica', '', 12);
        $pdf->AddPage();
        //$pdf->SetFont('helvetica', '', 8);
        $pdf->writeHTML($html, true, false, false, false, '');
        // add a page
        // output the HTML content
        // reset pointer to the last page
        //Close and output PDF document
        ob_end_clean();
        $pdf->Output($filepath . '.pdf', 'F');
        if (file_exists($filepath . '.pdf')) {
            return 1;
        } else {
            return 0;
        }
    }
    public function model_faredetails($model_id)
    {
        $company_id = $this->company_id;
        /*$query      = "select * from " . COMPANY_MODEL_FARE . " where " . COMPANY_MODEL_FARE . ".company_cid = '$company_id' and " . COMPANY_MODEL_FARE . ".model_id= '$model_id' ORDER BY `company_model_fare_id` ASC";
        $result     = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result;*/
		
		$result = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id, 'model_fare.model_id'=>(int)$model_id],['model_fare.$.id']);
		$res = iterator_to_array($result);
		return (!empty($res) && isset($res[$company_id]['model_fare']))?$res[$company_id]['model_fare']:[];
			
    }
    public function count_faq_list()
    {
        $result = DB::select()->from(PASSENGERS_FAQ)->where('status', '!=', 'N')->order_by('faq_id', 'ASC')->execute()->as_array();
        return count($result);
    }
    public function all_faq_list($offset, $val)
    {
        $result = DB::select()->from(PASSENGERS_FAQ)->where('status', '!=', 'N')->order_by('faq_id', 'ASC')->limit($val)->offset($offset)->execute()->as_array();
        return $result;
    }
    public function block_faq_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        // $arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(PASSENGERS_FAQ)->set([
            'status' => 'D'
        ])->where('faq_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function active_faq_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " motor_id in ('" . implode("','",$activeids) . "') ";	
        $result = DB::update(PASSENGERS_FAQ)->set([
            'status' => 'A'
        ])->where('faq_id', 'IN', $activeids)->execute();
        return count($result);
    }
    public function trash_faq_request($activeids)
    {
        $result = DB::update(PASSENGERS_FAQ)->set([
            'status' => 'T'
        ])->where('faq_id', 'IN', $activeids)->execute();
        return $result;
    }
    public function count_searchfaq_list($keyword = "", $status = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (faq_title LIKE  '%$keyword%'";
            $name_where .= " or faq_title LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . PASSENGERS_FAQ . "  where 1=1 $staus_where $name_where order by faq_title ASC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    public function get_all_faq_searchlist($keyword = "", $status = "", $offset = "", $val = "")
    {
        $keyword     = str_replace("%", "!%", $keyword);
        $keyword     = str_replace("_", "!_", $keyword);
        $staus_where = ($status) ? " AND status = '$status'" : "";
        //search result export
        //=====================
        $name_where  = "";
        if ($keyword) {
            $name_where = " AND (faq_title LIKE  '%$keyword%'";
            $name_where .= " or faq_title LIKE  '%$keyword%' )";
        }
        $query   = " select * from " . PASSENGERS_FAQ . "  where 1=1 $staus_where $name_where order by faq_title ASC  limit $val offset  $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /************* Dashboard All Driver status***************/
    public function all_driver_map_list()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'C') {
            $result = DB::select("*", [
                DRIVER . '.status',
                'driver_status'
            ])->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where('user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
            //->where(PEOPLE.'.login_status','=','S')
                ->where('company_id', '=', $company_id)
            //->order_by('created_date','desc')->limit($val)->offset($offset)
                ->execute()->as_array();
            return $result;
        } else if ($usertype == 'M') {
            $result = DB::select("*", [
                DRIVER . '.status',
                'driver_status'
            ])->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where('user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
            //->where(PEOPLE.'.login_status','=','S')
                ->where('company_id', '=', $company_id)
            //->where(PEOPLE.'.user_createdby','=',$user_createdby)
                
            //->order_by('created_date','desc')->limit($val)->offset($offset)
                ->execute()->as_array();
            return $result;
        } else {
            $result = DB::select("*", [
                DRIVER . '.status',
                'driver_status'
            ])->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where('user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
            //->where(PEOPLE.'.login_status','=','S')
                
            //->order_by('created_date','desc')->limit($val)->offset($offset)
                ->execute()->as_array();
            return $result;
        }
    }
    public function all_driver_map_list_company($company)
    {
        $company_cond = "";
        if ($company != "") {
            $company_cond .= " AND PP.company_id =  $company";
        }
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        if ($usertype == 'C') {
            $result = DB::select("*", [
                DRIVER . '.status',
                'driver_status'
            ])->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where('user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
            //->where(PEOPLE.'.login_status','=','S')
                ->where('company_id', '=', $company_id)
            //->order_by('created_date','desc')->limit($val)->offset($offset)
                ->execute()->as_array();
            return $result;
        } else if ($usertype == 'M') {
            $result = DB::select("*", [
                DRIVER . '.status',
                'driver_status'
            ])->from(PEOPLE)->join(DRIVER)->on(DRIVER . '.driver_id', '=', PEOPLE . '.id')->where('user_type', '=', 'D')->where(PEOPLE . '.status', '=', 'A')
            //->where(PEOPLE.'.login_status','=','S')
                ->where('company_id', '=', $company_id)
            //->where(PEOPLE.'.user_createdby','=',$user_createdby)
                
            //->order_by('created_date','desc')->limit($val)->offset($offset)
                ->execute()->as_array();
            return $result;
        } else {
            $query  = "SELECT *,D.status AS driver_status FROM " . PEOPLE . " AS PP
					 JOIN " . DRIVER . " AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 AND PP.status =  'A'
					 $company_cond";
            //echo $query;exit;
            $result = Db::query(Database::SELECT, $query)->execute()->as_array();
            return $result;
            /*$result = DB::select("*",array(DRIVER.'.status','driver_status'))->from(PEOPLE)
            ->join(DRIVER)->on(DRIVER.'.driver_id', '=', PEOPLE.'.id')
            ->where('user_type','=','D')
            ->where(PEOPLE.'.status','=','A')
            //->where(PEOPLE.'.login_status','=','S')
            //->order_by('created_date','desc')->limit($val)->offset($offset)
            ->execute()
            ->as_array();
            return $result;*/
        }
    }
    /*public function getpromocode()
    {
        $promo_code       = "";
        $promocode_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as promocode from passengers_promo Having NOT EXISTS (select promocode from passengers_promo having promocode=promocode) limit 1";
        $promocode_result = Db::query(Database::SELECT, $promocode_query)->execute()->as_array();
		
        if (count($promocode_result) > 0) {
            $promo_code = $promocode_result[0]['promocode'];
        } else {
            $promocode_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as promocode";
            $promocode_result = Db::query(Database::SELECT, $promocode_query)->execute()->as_array();
            $promo_code       = $promocode_result[0]['promocode'];
			
        }
        print_r($promo_code);exit;
        return $promo_code;
    }*/
	
	public function getpromocode()
    { 
		$promo_code = Commonfunction::randomkey_generator(6);
		$query = $this->mongo_db->find(MDB_PASSENGERS_PROMO,['promocode' => $promo_code], ['_id']);
		$promocode_result = iterator_to_array($query);
        if (count($promocode_result) > 0) {
			$promo_code = Commonfunction::randomkey_generator(6);
        }
        return $promo_code;
    }
	
    public function getuserslist($company_id = 0)
    {
        $demo_company = ""; //1-Demo. For testing purpose only
        $demo_cond    = "";
        /*if ($demo_company != "") {
            $demo_cond = "and passenger_cid=" . $demo_company . "";
        }
        //condition to get passengers who are related to the company in company login. for admin login all users listed
        if ($company_id != 0) {
            $demo_cond = "and passenger_cid=" . $company_id . "";
        }
        $query  = "select id,name,salutation,email from " . PASSENGERS . "
			where user_status = 'A'
			and activation_status = '1'
			$demo_cond
			order by created_date desc";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array(); 
        if (count($result) > 0) {
            $emails = "";
            foreach ($result['result'] as $value) {
                $id         = $value['id'];
                $name       = $value['name'];
                $salutation = empty($value['salutation']) ? '' : $value['salutation'] . ' ';
                $email      = $value['email'];
                $pname      = $salutation . $name;
                $emails .= '<option value="' . $id . '~' . $email . '~' . $pname . '">' . $email . '(' . $pname . ')' . '</option>';
            }
            $list = '<select name="to_user[]" id="to_user" class="required" multiple>
						' . $emails . '
				  </select> ';
        } else {
            $list = __('No Passenger') . '<br><input type="hidden" id="to_user" class="promo_send_user" name="to_user" value="">';
        }
        return $list;*/
        
        if ($demo_company != "") {  $demo_cond = $demo_company;  }        
        if ($company_id != 0) {  $demo_cond = $company_id;     }
		$ops = [
				['$match' => ["status" => 'A', "user_type" => "O"]],
				[
					'$project' => [
					'id' => '$_id',
					'name' => '$name',
					'lastname' => '$lastname',
					'salutation' => '$salutation',
					'email' => '$email'
					]
				]
			];
		//	print_r($ops);
		$result = $this->mongo_db->aggregate(MDB_PEOPLE,$ops);
		//echo "<pre>";print_r($result);echo count($result['result']);exit;
        $list   = "";$emails = "";
        $count_result = count($result['result']);
        if( $count_result > 0){
			for($i=0;$i< $count_result;$i++){			
				$id         = $result['result'][$i]['id'];
				$name       = $result['result'][$i]['name'].' '.$result['result'][$i]['lastname'];
				//$salutation = empty($result['result'][$i]['name']) ? '' : $result['result'][$i]['name'] . ' ';
				$email      = $result['result'][$i]['email'];
				$pname      = $name;
				$emails .= '<option value="' . $id . '~' . $email . '~' . $pname . '">' . $email . '(' . $name . ')' . '</option>';
			}
			$list = '<select name="to_user[]" id="to_user" class="required" multiple>' . $emails . '</select> ';
		} else {
            $list = __('No Passenger') . '<br><input type="hidden" id="to_user" class="promo_send_user" name="to_user" value="">';
        }
        return $list;        
    }
    public function getpassengerscount($company_id = 0)
    {		
		$match_query = [];
		$match_query['user_status'] = "A";
		$match_query['activation_status'] = "1";
		if($company_id != 0){
			$match_query['passenger_cid'] = (int)$company_id;
		}
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = [['$match'=> $match_query],
					/* array('$unwind' => '$passengerdetails'),*/
					['$project' => ['pid' => '$_id']],
					['$group' =>['_id' => NULL,'count' => ['$sum' => 1]]],
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$arguments);
		//echo "<pre>"; print_r($result['result'][0]['count']); exit;
		return (!empty($result['result']) && isset($result['result'][0]['count']))?$result['result'][0]['count']:0;
	
    }
    public function check_promo_exit($promo_code = "", $company_id = 0)
    {
        /*$cond = "";
        if ($company_id != 0) {
            $cond = "and company_id=" . $company_id . "";
        }
        $promo_query = "SELECT promocode,promo_discount,promo_used FROM  " . PASSENGER_PROMO . " WHERE  promocode = '$promo_code' $cond";
        $promo_fetch = Db::query(Database::SELECT, $promo_query)->execute()->as_array();
        if (count($promo_fetch) > 0) {
            return 1;
        } else {
            return 0;
        }*/
		
		$match_query = [];
		$match_query['promocode'] = $promo_code;
		if($company_id != 0){
			$match_query['company_id'] = (int)$company_id;
		}
		$arguments = [
			['$match'=> $match_query],
			['$project' => ['promocode' 	=> '$promocode', 'promo_discount' => '$promo_discount','promo_used' => '$promo_used']],
			['$group' =>['_id' => NULL,'count' => ['$sum' => 1]]],
		];
		//echo "<pre>"; print_r($arguments); exit;	
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
		//echo "<pre>"; print_r($result['result']); exit;
        return (isset($result['result'][0]['count']))?$result['result'][0]['count']:0;
    }
   
	
	public function promocode_list($offset, $val, $search, $company_id = 0, $corporate_id = 0, $find_count = FALSE)
    {
		
		$match_query = [];
		$match_query['company.companydetails.company_status'] = "A";
		if(!empty($search))
		{
			$keyword       = str_replace("%", "!%", $search["keyword"]);
			$keyword       = str_replace("_", "!_", $search["keyword"]);
			if($search['keyword'] != "") {
				$match_query['promocode'] = new \MongoDB\BSON\Regex($keyword, 'i');
			}
			if (!empty($search['startdate']) && !empty($search['enddate'])) {
				$match_query['start_date'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["startdate"]) * 1000), '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["enddate"]) * 1000)];
            }elseif(!empty($search['startdate'])) {
				$match_query['start_date'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["startdate"]) * 1000)];
            }elseif(!empty($search['enddate'])) {
				$match_query['start_date'] = ['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["enddate"]) * 1000)];
            }
			
			if (!empty($search['e_startdate']) && !empty($search['e_enddate'])) {
				$match_query['expire_date'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["e_startdate"]) * 1000), '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["e_enddate"]) * 1000)];
            }elseif(!empty($search['e_startdate'])) {
				$match_query['expire_date'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["e_startdate"]) * 1000)];
            }elseif(!empty($search['e_enddate'])) {
				$match_query['expire_date'] = ['$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($search["e_enddate"]) * 1000)];
            }
			
            if (!empty($search['company'])) {
				$match_query['company_id'] = (int)$search["company"];
            }elseif($company_id != 0){
				$match_query['company_id'] = (int)$company_id;
			}
		}else{
			if($company_id != 0){
				$match_query['company_id'] = (int)$company_id;
			}
			
			if($corporate_id != 0){
				$match_query['corporate_id'] = (int)$corporate_id;
			}
			
		}
		//echo "<pre>"; print_r($match_query); exit;
		if($find_count == TRUE){
            $arguments = [
						[
							'$lookup' => [
										'from'=>MDB_COMPANY,
										'localField'=> 'company_id',
										'foreignField' => "_id",
										'as'=> "company"
									]
						],
						[
							'$lookup' => [
										'from'=>MDB_COUPON_PACKAGE,
										'localField'=> 'package',
										'foreignField' => "_id",
										'as'=> "package"
									]
						],
						['$unwind' => '$promocode'],
						['$unwind' => '$company'],
						['$unwind' => '$package'],
						['$match'=> $match_query],
						['$project' => ['promocode' => 1]],
						['$group' =>['_id' => '$promocode','count' => ['$sum' => 1]]],
						['$group' =>['_id' => NULL,'count' => ['$sum' => 1 ]]],
                    ];
            $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
			//echo "<pre>"; print_r($result['result'][0]['count']); exit;
            return (!empty($result['result']) && isset($result['result'][0]['count']))?$result['result'][0]['count']:0;
		}else{
			$arguments = [
					[
						'$lookup' => [
							'from'=>MDB_COMPANY,
							'localField'=> 'company_id',
							'foreignField' => "_id",
							'as'=> "company"
						]
					],['$unwind' => '$company'],
					[
						'$lookup' => [
									'from'=>MDB_COUPON_PACKAGE,
									'localField'=> 'package',
									'foreignField' => "_id",
									'as'=> "package"
								]
					],
					
					['$unwind' => '$package'],
					['$match'=> $match_query],
					['$unwind' => '$_id'],
					['$project' => ['promocode' 	=> 1,'promo_discount'=> 1,'passenger_id'	=> 1,'start_date'	=> 1,'expire_date'	=> 1,'promo_limit'	=> 1,'company_name'	=> '$company.companydetails.company_name','package_name'	=> '$package.coupon_package_name']],
					['$group' =>['_id' => ['passenger_promoid'=> '$_id','promocode'=> '$promocode','promo_discount'=>'$promo_discount','package' => '$package','passenger_id' => '$passenger_id','start_date'=>'$start_date','expire_date'=>'$expire_date','promo_limit'=>'$promo_limit','company_name'=>'$company_name','package_name' => '$package_name'],'passenger_count' => ['$sum' => 1]]],
					[ '$group' =>['_id' => '$_id.promocode','promodetails' =>[ '$first' =>['passenger_promoid'=> '$_id.passenger_promoid','package' => '$_id.package','promocode'=> '$_id.promocode','promo_discount'=>'$_id.promo_discount','start_date'=>'$_id.start_date','expire_date'=>'$_id.expire_date','promo_limit'=>'$_id.promo_limit','company_name'=>'$_id.company_name','package_name' => '$_id.package_name']],'count' => ['$sum' => '$passenger_count']]],
					['$skip' => (int)$offset],
					['$limit' => (int)$val],
				];
			//	echo REC_PER_PAGE;
			//	echo "<pre>"; print_r($arguments); exit;
            $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
			
            return (!empty($result['result']) && isset($result['result']))?$result['result']:0;
		}
    }
	
  
    public function getactive_users($companyId = "")
    {
        /*$company_cond = "";
        if (!empty($companyId)) {
            $company_cond = "and passenger_cid=" . $companyId . "";
        }
        $query     = "select id,salutation,name,email from " . PASSENGERS . "
			where user_status = 'A'
			and activation_status = '1'
			$company_cond
			order by created_date desc";
        $result    = Db::query(Database::SELECT, $query)->execute()->as_array();
        $all_plist = array();
        foreach ($result as $value) {
            $id          = $value['id'];
            $name        = $value['name'];
            $salutation  = empty($value['salutation']) ? '' : $value['salutation'] . ' ';
            $email       = $value['email'];
            $pname       = $salutation . $name;
            $list        = $id . '~' . $email . '~' . $pname;
            $all_plist[] = $list;
        }
        return $all_plist;*/
	
		$match_query = [];
		$match_query['user_status'] = "A";
		$match_query['activation_status'] = 1;
		if($companyId != 0){
			$match_query['passenger_cid'] = (int)$companyId;
		}
		$arguments = [
			['$match'=> $match_query],
			['$project' => ['salutation' 	=> '$salutation','name'=> '$name','email'	=> '$email']],
			['$sort' => ['created_date' => -1]],
		];
		$result = $this->mongo_db->aggregate(MDB_PASSENGERS,$arguments);
		$all_plist = [];
        foreach ($result['result'] as $value) {
            $id          = $value['_id'];
            $name        = (isset($value['name'][0]) && $value['name'][0]!="")?$value['name'][0]:"";
            $salutation  = (isset($value['salutation'][0]) && $value['salutation'][0]!="") ? $value['salutation'][0] : ' ';
            $email       = (isset($value['email'][0]) && $value['email'][0]!="")?$value['email'][0]:"";
            $pname       = $salutation . $name;
            $list        = $id . '~' . $email . '~' . $pname;
            $all_plist[] = $list;
        }
		//echo "<pre>"; print_r($all_plist); exit;
        return $all_plist;
    }
	
    /**function to get company name **/
    public function getcompanydomainName($cid)
    {
        /*$query  = "select company_domain from " . COMPANYINFO . " where company_cid = $cid";
        $result = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $result[0];*/
		
		$query = $this->mongo_db->find(MDB_COMPANY,['_id' => (int)$cid],['companyinfo.company_domain']);
		$result = iterator_to_array($query);
		return (isset($result[$cid]['companyinfo']))?$result[$cid]['companyinfo']:"-";
    }
    /** Function to get driver's current status **/
    public function get_driver_current_status($driver_id, $company_id = '')
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
            $query = $this->mongo_db->find(MDB_COMPANY,['_id'=>(int)$company_id],['companydetails.time_zone']);
            $result = iterator_to_array($query);
            $result = current($result);
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
		$match = [];
		$match['driver_id'] = (int)$driver_id;
		$match['driver_reply'] = "A";
		$match['pickup_time'] = ['$gte'=> new \MongoDB\BSON\UTCDateTime(strtotime($start_time) * 1000)];
		$match['travel_status'] = ['$in' => [9,5,3,2]];
		if ($company_id != "" && $company_id != 0) {
			$match['company_id'] = (int)$company_id;
		}
		//$result = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match,array('_id','travel_status'));
                ## fields_projection code added to support LAMP 7.0 and its mongo version 3.4.0
                $options=[
                    'projection'=>[
                        '_id'=>1, 
                        'travel_status'=>1
                    ]
                ];
                $res = $this->mongo_db->find(MDB_PASSENGERS_LOGS,$match,['_id','travel_status']);      
                 
		return (!empty($res))?iterator_to_array($res):[];		
    }
    //** to check whether the taxi is assigned **//
    public function istaxiassigned($taxiIds)
    {
        /*$rs = DB::select(TAXI . '.taxi_no')->from(TAXIMAPPING)->join(TAXI, 'LEFT')->on(TAXIMAPPING . '.mapping_taxiid', '=', TAXI . '.taxi_id')->where(TAXIMAPPING . '.mapping_taxiid', 'IN', $taxiIds)->where(TAXIMAPPING . '.mapping_status', '=', 'A')->execute()->as_array();
        return $rs;*/
		
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($taxiIds);
		$match_query = ['mapping.mapping_taxiid'=>['$in'=>$active_ids],'mapping.mapping_status'=>'A'];
		$ops = [
			[
					'$lookup' => [
					'from'=>MDB_TAXI_DRIVER_MAPPING,
					'localField'=> "_id",
					'foreignField' => "mapping_taxiid",
					'as'=> "mapping"
					]
				],
			['$unwind'=>'$mapping'],
			['$match' => $match_query],
			[
				'$project' => ['_id' => '$_id',
				]
			],
		];
		$result = $this->mongo_db->aggregate(MDB_TAXI,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?count($result['result']):0;
    }
    //** to check whether the taxi is assigned **//
    public function isdriverassigned($driverIds)
    {
		//MongoDB
		//Here changing array values with string to integers values
		$driverIds = Commonfunction::mongo_format_array($driverIds);
		$match_query = ['mapping_driverid'=>['$in'=>$driverIds],'mapping_status'=>'A'];
		$ops = [
			[
					'$lookup' => [
					'from'=>MDB_PEOPLE,
					'localField'=> "mapping_driverid",
					'foreignField' => "_id",
					'as'=> "people"
					]
				],
			['$unwind'=>'$people'],
			['$match' => $match_query],
			['$project' => ['_id' => '$_id']],
		];
		$result = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING,$ops);
		//echo '<pre>'; print_r($result);exit;
		return (!empty($result['result']))?count($result['result']):0;
    }
    //** to get the assigned taxi details **//
    public function get_assigned_details($assignId)
    {
      /*  $result = DB::select('mapping_driverid', 'mapping_taxiid', 'mapping_startdate', 'mapping_enddate')->from(TAXIMAPPING)->where(TAXIMAPPING . '.mapping_id', '=', $assignId)->execute()->as_array();
        return $result;
	*/
		//MongoDB
		$match_query = ['_id'=>(int)$assignId];
		$ops = [
			['$match' => $match_query],
			['$project' => ['mapping_driverid' => '$mapping_driverid','mapping_taxiid' => '$mapping_taxiid','mapping_startdate' => '$mapping_startdate', 'mapping_enddate' => '$mapping_enddate']],
		];
		$result = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING,$ops);
		//echo '<pre>'; print_r($result);exit;
		return (!empty($result['result']))?$result['result']:0;
    }
	
	public function check_already_assigned($driver_id, $taxi_id, $startdate, $enddate)
    {
		$match_query = [];
		$match_query['mapping.mapping_status'] = 'A';
		if ($driver_id!="") {
			$match_query['mapping.mapping_driverid'] = (int)$driver_id;
		}
		if ($taxi_id!="") {
			$match_query['mapping.mapping_taxiid'] = (int)$taxi_id;
		}
		if ($startdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
			$match_query['mapping.mapping_enddate'] = ['$lte' => $enddate];
		}else{
			if ($startdate!="") {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
				$match_query['mapping.mapping_enddate'] = ['$lte' => $startdate];
			}
			if ($enddate!="") {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $enddate];
				$match_query['mapping.mapping_enddate'] = ['$lte' => $enddate];
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
		$result    = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
	
    /*public static function check_driver_have_taxi($mapId, $driver_id, $startdate, $enddate)
    {
        $query  = " select count(*) as total from " . TAXIMAPPING . " left join " . COMPANY . " on " . TAXIMAPPING . ".mapping_companyid = " . COMPANY . ".cid left join " . COUNTRY . " on " . TAXIMAPPING . ".mapping_countryid = " . COUNTRY . ".country_id left join " . STATE . " on " . TAXIMAPPING . ".mapping_stateid = " . STATE . ".state_id left join " . CITY . " on " . TAXIMAPPING . ".mapping_cityid = " . CITY . ".city_id where mapping_id != '$mapId' and (mapping_driverid ='$driver_id')  AND ( ( '$startdate' between mapping_startdate and  mapping_enddate ) or ( '$enddate' between mapping_startdate and  mapping_enddate) ) order by mapping_startdate DESC ";
        $result = Db::query(Database::SELECT, $query)->execute()->get('total');
        return $result;
    }*/
	
	public function check_driver_have_taxi($mapId, $driver_id, $startdate, $enddate)
    {
		$match_query = [];
		$match_query['mapping._id'] = ['$ne' => $mapId];
		if ($driver_id!="") {
			$match_query['mapping.mapping_driverid'] = (int)$driver_id;
		}
		if ($startdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
			$match_query['mapping.mapping_enddate'] = ['$lte' => $enddate];
		}else{
			if ($startdate!="") {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $startdate];
				$match_query['mapping.mapping_enddate'] = ['$lte' => $startdate];
			}
			if ($enddate!="") {
				$match_query['mapping.mapping_startdate'] = ['$gte' => $enddate];
				$match_query['mapping.mapping_enddate'] = ['$lte' => $enddate];
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
		$result    = $this->mongo_db->aggregate(MDB_CSC, $arguments);
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
    /************* Dashboard All Driver status***************/
	
	// Accounts Type Module
	public function count_account_type_list()
    {
        $result = $this->mongo_db->count(MDB_CHILD_ACCOUNT_TYPE,[]);
        return $result;
    }
	
	public function all_account_list($offset, $val)
    {
        
		$ops = [
					[
						'$project' => [
						'_id' => '$_id',
						'account_type' => '$account_type',
						'status' => '$status',
						]
					],
					[
						'$sort' => ["_id"=>1]
					],
					[
						'$match' => ["status"=>'A']
					],
					[
						'$skip' => (int)$offset
					],
					[
						'$limit' => (int)$val
					]
			];
		$result = $this->mongo_db->aggregate(MDB_CHILD_ACCOUNT_TYPE,$ops);
		//echo '<pre>';print_r($result);exit;
		return (!empty($result['result']))?$result['result']:[];
    }
	
	//For deleting account_type
    public function delete_account_type($id)
    {
        $result = $this->mongo_db->remove(MDB_CHILD_ACCOUNT_TYPE,['_id'=>(int)$id]);
		return (empty($result['err']))?1:$result['err'];
    }
	// Accounts Type Module
	//Passenger Module : View Passenger info: Get Child Details 
	public function get_passenger_childlist($id){
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
                    '$project' => [
						'_id' => '$_id',
						'name' => '$name',
						'email' => '$email',
						'phone' => '$phone',
						'address' => '$address',
						'user_status' => '$user_status',
						'country_code' => '$country_code',
						'parent_id' => '$parent_id',
						'account_type' => '$account_type',
						'account_type_name' => '$account.account_type',
                    ]
                ],
                [
				'$match' => ['parent_id' => (int)$id]]
		];
		$result    = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
		//echo '<pre>'; print_r($result['result']);echo '</pre>';exit;
		return (!empty($result['result']))?$result['result']:[];
	}
	
	public function get_favourite_list($passenger_id="")
    {	
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
		return (isset($res['result'])) ? $res['result'] : [];
    }
	/*** MANAGE CONTACTS ***/
	  public function count_contact_list($cid = '')
    {
        if ($cid == '') {
            //$rs = DB::select()->from(CONTACTS)->execute();
			
			//MongoDB
			$rs = $this->mongo_db->count(MDB_CONTACTS);
        } else {
            //$rs = DB::select()->from(CONTACTS)->where('contact_cid', '=', $cid)->execute();
			
			//MongoDB
			$rs = $this->mongo_db->count(MDB_CONTACTS,['contact_cid'=>$cid]);
        }
        //return count($rs);
		return $rs;
    }
    public function all_contact_list($offset, $val, $cid = '')
    {
        if ($cid == '') {
            //$rs = DB::select()->from(CONTACTS)->order_by('sent_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
			
			//MongoDB
			$res = $this->mongo_db->find(MDB_CONTACTS)->sort(['sent_date'=>-1])->skip($offset)->limit($val);
			
        } else {
            //$rs = DB::select()->from(CONTACTS)->where('contact_cid', '=', $cid)->order_by('sent_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
			
			$res = $this->mongo_db->find(MDB_CONTACTS,['contact_cid'=>$cid])->sort(['sent_date'=>-1])->skip($offset)->limit($val);
        }
		
		$rs = iterator_to_array($res);
        return $rs;
    }
     public function get_all_contact_searchlist_count($keyword = "", $cid = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        /*$name_where = "";
        if ($keyword) {
            $name_where = " AND (" . CONTACTS . ".name LIKE  '%$keyword%' OR " . CONTACTS . ".subject LIKE  '%$keyword%')";
        }
        $company_cid = "";
        if ($cid != '')
            $company_cid = " AND contact_cid=$cid";
        $query   = " select * from " . CONTACTS . " where 1=1 $name_where $company_cid order by sent_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results); */
		
		//MongoDB
		if($keyword){
			$srch_query = [ "\$or" => [[ "subject" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["name" => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ];
		}
		if(!empty($cid)){
			$srch_query = [["\$and"=>["contact_cid"=>$cid]],"\$or"=>[['name'=>new \MongoDB\BSON\Regex($keyword, 'i')],['subject'=>new \MongoDB\BSON\Regex($keyword, 'i')]]];
		}
		//print_r($srch_query);exit;
		$res = $this->mongo_db->count(MDB_CONTACTS,$srch_query);
		return $res;
	}
    public function get_all_contact_searchlist($offset,$val,$keyword = "", $cid = '')
    {
        $keyword    = str_replace("%", "!%", $keyword);
        $keyword    = str_replace("_", "!_", $keyword);
        /*$name_where = "";
        if ($keyword) {
            $name_where = " AND (" . CONTACTS . ".name LIKE  '%$keyword%' OR " . CONTACTS . ".subject LIKE  '%$keyword%')";
        }
        $company_cid = "";
        if ($cid != '')
            $company_cid = " AND contact_cid=$cid";
        $query   = " select * from " . CONTACTS . " where 1=1 $name_where $company_cid order by sent_date DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
		
		//MongoDB
		if($keyword){
			$srch_query = [ "\$or" => [[ "subject" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["name" => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ];
		}
		if(!empty($cid)){
			$srch_query = [["\$and"=>["contact_cid"=>$cid]],"\$or"=>[['name'=>new \MongoDB\BSON\Regex($keyword, 'i')],['subject'=>new \MongoDB\BSON\Regex($keyword, 'i')]]];
		}
		//print_r($srch_query);exit;
		$res = $this->mongo_db->find(MDB_CONTACTS,$srch_query)->sort(['sent_date'=>-1])->skip($offset)->limit($val);
		return $res;
    }
	/*** MANAGE CONTACTS ***/
	public function update_priority($priority,$model_id){
			
			$result1 = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["_id"=>(int)$model_id],['priority']);
			$result2 = $this->mongo_db->find_one(MDB_MOTOR_MODEL,["priority"=>(int)$priority],['_id']);
			//print_r($result);exit;
			
			$res1 = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>(int)$model_id],['$set'=>['priority' => (int)$priority]]);
			$res2 = $this->mongo_db->update(MDB_MOTOR_MODEL,['_id'=>(int)$result2['_id']],['$set'=>['priority' => (int)$result1['priority']]]);
			return (int)$result2['_id'].'||'.(int)$result1['priority'];	
	}
	
	/** MANAGE COUPON PACKAGE **/
	  public function all_coupon_package_list($offset, $val,$condition=FALSE)
    {
      
	  //MongoDB
		if($condition == TRUE){
			$res = $this->mongo_db->count(MDB_COUPON_PACKAGE);
			return $res;
		}else{
			//MongoDB
			$res = $this->mongo_db->find(MDB_COUPON_PACKAGE,['coupon_package_status'=>['$ne'=>'T']],['_id','coupon_package_name','coupon_package_description','corporate_commission','passenger_commission','coupon_package_status'])->sort(['coupon_package_name'=>1])->skip($offset)->limit($val);
			//echo '<pre>'; print_r(iterator_to_array($res));exit;
			return (!empty($res))?iterator_to_array($res):[];	
		}
		
	
    }
     public function get_all_coupon_package_searchlist($keyword = "", $status = "", $offset = "", $val = "", $find_count = FALSE)
    {
       
	   //MongoDB
	   $srch_query = [];
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = [ "\$and" => [[ "coupon_package_name" => new \MongoDB\BSON\Regex($keyword, 'i')] , ["coupon_package_status" => $status ] ] ];
		} else if (!empty($keyword)) {
			$srch_query = [ "coupon_package_name" => new \MongoDB\BSON\Regex($keyword, 'i')];
		} else if (!empty($status)) {
			$srch_query = ["coupon_package_status" => $status ];
			
		}
		
		if($find_count) {
			$res = $this->mongo_db->count(MDB_COUPON_PACKAGE,$srch_query,['_id']);
			return $res;
		} else {
			$res = $this->mongo_db->find(MDB_COUPON_PACKAGE,$srch_query,['_id','coupon_package_name','coupon_package_description','corporate_commission','passenger_commission','coupon_package_status'])->sort(['coupon_package_name'=>1])->skip($offset)->limit($val);
			return (!empty($res))?iterator_to_array($res):[];
		}
		
    }
      public function active_coupon_package_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PACKAGE)->set(array(
            'coupon_package_status' => 'A'
        ))->where('coupon_package_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = [];
		foreach($activeids as $each_id):
			$active_ids[] = (int)$each_id;
		endforeach;
		$res = $this->mongo_db->update(MDB_COUPON_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['coupon_package_status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
	
    }
    public function block_coupon_package_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PACKAGE)->set(array(
            'coupon_package_status' => 'D'
        ))->where('coupon_package_id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = [];
		foreach($activeids as $each_id):
			$active_ids[] = (int)$each_id;
		endforeach;
		$res = $this->mongo_db->update(MDB_COUPON_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['coupon_package_status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
		
    }
     public function trash_coupon_package_request($activeids)
    {
       /* $result = DB::update(PACKAGE)->set(array(
            'coupon_package_status' => 'T'
        ))->where('coupon_package_id', 'IN', $activeids)->execute();
        return $result;*/
		$active_ids = Commonfunction::mongo_format_array($activeids);
		
		$res = $this->mongo_db->update(MDB_COUPON_PACKAGE,['_id'=>['$in'=>$active_ids]],['$set'=>['coupon_package_status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
         
	/** MANAGE COUPON PACKAGE **/
	/** MANAGE CORPORATE COUPON CODE **/
	public function all_corporate_list( $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$match_query                     = [];
		$match_query['people.user_type'] = 'O';
		$match_query['people.status']    = ['$ne' => 'T'];
		
		if ($usertype == 'M' ||$usertype == 'A' ) {
			//$match_query['people.company_id']    = (int) $company_id;
			//echo $country_id.'/'.$state_id.'/'.$city_id;exit;
			//$match_query['_id'] = (int) $country_id;
			//$match_query['stateinfo.state_id']   = (int) $state_id;
			//$match_query['cityinfo.city_id']    = (int) $city_id;
			$match_query['people.login_country'] = (int) $country_id;
			$match_query['people.login_state']   = (int) $state_id;
			$match_query['people.login_city']    = (int) $city_id;
			
		} else if ($usertype == 'C') {
			$match_query['people.company_id'] = (int) $company_id;
		}
		//echo "<pre>"; print_r($match_query); exit;
		$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			
			
			[
				'$match' => $match_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'email' => '$people.email',
						
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'corporate_license_id' => '$people.corporate_license_id',
						'shift_status' => '$corporate.shift_status',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'corporate_status' => '$people.status',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($merge_arguments); exit;
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
   
    public function active_corporate_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'A'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'A']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
    public function block_corporate_request($activeids)
    {
        //check whether id is exist in checkbox or single active request
        //==================================================================
        //$arr_chk = " userid in ('" . implode("','",$activeids) . "') ";	
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'D'
        ))->where('id', 'IN', $activeids)->execute();
        return count($result);*/
	
		//MongoDB
		//Here changing array values with string to integers values
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'D']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
     public function trash_corporate_request($activeids)
    {
        /*$result = DB::update(PEOPLE)->set(array(
            'status' => 'T'
        ))->where('id', 'IN', $activeids)->execute();
        return $result;*/
	
		$active_ids = Commonfunction::mongo_format_array($activeids);
		$res = $this->mongo_db->update(MDB_PEOPLE,['_id'=>['$in'=>$active_ids]],['$set'=>['status' => 'T']],['multiple'=>true]);
		return (empty($res['err']))?1:$res['errmsg'];
    }
	
	public function get_all_corporate_searchlist($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$usertype                        = $this->usertype;
		$company_id                      = $this->company_id;
		$country_id                      = $this->country_id;
		$state_id                        = $this->state_id;
		$city_id                         = $this->city_id;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$status = ($status!="")?$status:['$ne' => 'T'];
		if ($usertype == 'M') {
			$match_query = ['people.user_type'=>'O', 'people.login_country'=>(int) $country_id,'people.login_state' =>(int) $state_id,'people.login_city'=>(int) $city_id,'people.company_id' => (int)$c_id,'people.status' => $status];
		} else if ($usertype == 'C') {
			$match_query = ['people.user_type'=>'O', 'people.status' => $status ];
		}else{
			$match_query = ['people.user_type'=>'O', 'people.status' => $status ];
		}
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ],[ 'people.phone' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'company.companydetails.company_name' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
}else{
			$srch_query = $match_query;
		}
		//echo "<pre>"; print_r($srch_query); exit;
		$common_arguments = [
			[
				'$unwind' => '$stateinfo'
			],
			[
				'$unwind' => '$stateinfo.cityinfo'
			],
			[
				'$lookup' => [
					'from' => MDB_PEOPLE,
					'localField' => 'stateinfo.cityinfo.city_id',
					'foreignField' => 'login_country',
					'foreignField' => 'login_city',
					'as' => 'people'
				]
			],
			[
				'$unwind' => '$people'
			],
			
			
			[
				'$match' => $srch_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$people._id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
		//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'people.created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$people._id',
						'created_by' => '$people.user_createdby',
						'name' => '$people.name',
						'username' => '$people.username',
						'email' => '$people.email',
						
						'address' => '$people.address',
						'availability_status' => '$people.availability_status',
						'status' => '$people.status',
						'corporate_license_id' => '$people.corporate_license_id',
						'phone' => '$people.phone',
						'country_name' => '$country_name',
						'state_name' => '$stateinfo.state_name',
						'city_name' => '$stateinfo.cityinfo.city_name',
						'cid' => '$company.companydetails.userid',
						'photo' => '$people.profile_picture',
						'corporate_status' => '$people.status',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(MDB_CSC, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }
	public function avail_package(){
		$res = $this->mongo_db->find(MDB_COUPON_PACKAGE,['coupon_package_status'=>['$ne'=>'T']],['_id','coupon_package_name','coupon_package_description','corporate_commission','passenger_commission','coupon_package_status'])->sort(['coupon_package_name'=>1]);
		return (!empty($res))?iterator_to_array($res,false):[];	
	}
	/* Promo Report */
	public function promocode_list_report($offset, $val, $search, $company_id = 0, $corporate_id = 0, $package_id = 0,$find_count = FALSE)
    {
		
		$match_query = [];
		$match_query['company.companydetails.company_status'] = "A";
		if(!empty($search))
		{
			$keyword       = str_replace("%", "!%", $search["keyword"]);
			$keyword       = str_replace("_", "!_", $search["keyword"]);
			if($search['keyword'] != "") {
				$match_query['promocode'] = new \MongoDB\BSON\Regex($keyword, 'i');
			}
			
			
            if (!empty($search['company'])) {
				$match_query['company_id'] = (int)$search["company"];
            }elseif($company_id != 0){
				$match_query['company_id'] = (int)$company_id;
			}
			  if (!empty($search['coporate'])) {
				$match_query['corporate_id'] = (int)$search["coporate"];
            }elseif($corporate_id != 0){
				$match_query['corporate_id'] = (int)$corporate_id;
			}
			  if (!empty($search['package'])) {
				$match_query['package'] = (int)$search["package"];
            }elseif($package_id != 0){
				$match_query['package'] = (int)$package_id;
			}
			
			
			
		}else{
			if($company_id != 0){
				$match_query['company_id'] = (int)$company_id;
			}
			
			if($corporate_id != 0){
				$match_query['corporate_id'] = (int)$corporate_id;
			}
			
			
		}
		//print_r($match_query);
		//exit;
			
		
		if($find_count == TRUE){
            $arguments = [
						[
							'$lookup' => [
										'from'=>MDB_COMPANY,
										'localField'=> 'company_id',
										'foreignField' => "_id",
										'as'=> "company"
									]
						],
						['$unwind' => '$company'],
						[
							'$lookup' => [
										'from'=>MDB_PEOPLE,
										'localField'=> 'corporate_id',
										'foreignField' => "_id",
										'as'=> "corporate"
									]
						],
						['$unwind' => '$corporate'],
						['$lookup' =>
							[
								'from'=>MDB_PASSENGERS,
								'localField'=> "customer_number",
								'foreignField' => "phone",
								'as'=> "passengers"
							]
						],
						['$unwind'=>'$passengers'],
						[
							'$lookup' => [
										'from'=>MDB_COUPON_PACKAGE,
										'localField'=> 'package',
										'foreignField' => "_id",
										'as'=> "pack"
									]
						],
						['$unwind' => '$pack'],
						[
							'$lookup' => [
										'from'=>MDB_PASSENGERSLOGS_COMPLETED,
										'localField'=> 'promocode',
										'foreignField' => "promocode",
										'as'=> "passlog"
							]
						],
						['$unwind' => '$passlog'],
						[
							'$lookup' => [
										'from'=>MDB_TRANSACTION,
										'localField'=> 'passlog._id',
										'foreignField' => "passengers_log_id",
										'as'=> "trans"
							]
						],
						['$unwind' => '$trans'],
						['$match'=> $match_query],
						[
							'$project' => [
							'id' => '$_id',
							]
						]
                    ];
            $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
			//echo "<pre>"; print_r($result['result'][0]['count']); exit;
            return (!empty($result['result']) )?count($result['result']):0;
		}else{
			//echo "ssss";exit;
			$arguments = [
					[
							'$lookup' => [
										'from'=>MDB_COMPANY,
										'localField'=> 'company_id',
										'foreignField' => "_id",
										'as'=> "company"
									]
						],
						['$unwind' => '$company'],
						[
							'$lookup' => [
										'from'=>MDB_PEOPLE,
										'localField'=> 'corporate_id',
										'foreignField' => "_id",
										'as'=> "corporate"
									]
						],
						['$unwind' => '$corporate'],
						['$lookup' =>
							[
								'from'=>MDB_PASSENGERS,
								'localField'=> "customer_number",
								'foreignField' => "phone",
								'as'=> "passengers"
							]
						],
						['$unwind'=>'$passengers'],
						[
							'$lookup' => [
										'from'=>MDB_COUPON_PACKAGE,
										'localField'=> 'package',
										'foreignField' => "_id",
										'as'=> "pack"
									]
						],
						['$unwind' => '$pack'],
						[
							'$lookup' => [
										'from'=>MDB_PASSENGERSLOGS_COMPLETED,
										'localField'=> 'promocode',
										'foreignField' => "promocode",
										'as'=> "passlog"
							]
						],
						['$unwind' => '$passlog'],
						[
							'$lookup' => [
										'from'=>MDB_TRANSACTION,
										'localField'=> 'passlog._id',
										'foreignField' => "passengers_log_id",
										'as'=> "trans"
							]
						], 
						['$unwind' => '$trans'],
						['$match'=> $match_query],
						['$project' => [
						
						'passenger_number' => '$passengers.phone',
						'passenger_name' => '$passengers.name',
						'promocode' => '$promocode',
						'package_name' => '$pack.coupon_package_name',
						'corporate_name' => '$corporate.name',
						'package' => '$package',
						'corporate_id' => '$corporate_id',
						'discount' => '$trans.passenger_discount',
						'corporate_amount' => '$trans.corporate_amount'
						]
						],
				
					['$skip' => (int)$offset],
					['$limit' => (int)$val],
				];
			//	echo REC_PER_PAGE;
			//	echo "<pre>"; print_r($arguments); exit;
            $result = $this->mongo_db->aggregate(MDB_PASSENGERS_PROMO,$arguments);
			//echo "<pre>"; print_r($result['result']); exit;
            return (!empty($result['result']) && isset($result['result']))?$result['result']:0;
		}
    }
	
	/* Promo Report */
	
	
	
	/** MANAGE CORPORATE COUPON CODE **/
	public function ratings_management_list($total_flag,$search,$offset,$val){
          $status_query['status'] = 'A';
          $status_query['ratings_no'] = ['$ne'=>NULL];
          $srch_query = [];
          $baba_query = [];

        if(isset($search['keyword']) && $search['keyword']!=''){
            $keyword = rtrim($search['keyword']);
         //   echo "<pre>";print_r($keyword);exit();
             $srch_query = [
                "\$or" => [
                    [
                        'ratings_no' => new \MongoDB\BSON\Regex($keyword, 'i')
                    ],
                    [
                        'ratings_title' => new \MongoDB\BSON\Regex($keyword, 'i')
                    ],
                     [
                        'ratings_tags' => new \MongoDB\BSON\Regex($keyword, 'i')
                    ]
                ]
                    
            ];
             //db.ratings.find({'ratings_title': {'$regex': 'ratings','$options':'i'}})

            /* $baba_query = array(
             	'ratings_title'=>array('$regex'=>"$keyword",'$options'=>"s")


             	);*/
     		        
        }

       //echo "<pre>";print_r($status_query);exit();
       $match_query = array_merge($status_query,$srch_query);
 
  	//echo "<pre>";print_r($match_query);exit();
        $ops = [
                    ['$match'=>$match_query],
                    [
                        '$project' => [
                        '_id' => '$_id',
                        'ratings_no' => '$ratings_no',
                        'ratings_title' => '$ratings_title',
                        'ratings_tags' => '$ratings_tags',
                        ]
                    ],
                    [
                        '$sort' => ["_id"=>-1]
                    ],
            ];
        if($total_flag == 1){
        	$countarr = ['$group'=> ['_id'=> NULL, 'total'=> [ '$sum'=> 1 ] ] ];
            array_push($ops,$countarr);
        }
        if($offset!='' && $val!=''){
         //$limitarr = array('$skip'($offset)->limit($val))    
         $offsetarray = ['$skip'  => (int)$offset ];
        
         array_push($ops,$offsetarray);
         
        }
        if($val!=''){
            $limitarray = ['$limit'  => (int)$val ];
             array_push($ops,$limitarray);
        }

        $result = $this->mongo_db->aggregate('ratings',$ops);
      	 if($total_flag == 1){
	        return (!empty($result['result']))?count($result['result']):0;

        }else{
        	return (!empty($result['result']))?$result['result']:[];	
        }
        
	}
	
	public function delete_ratings($id)
    {
      
        $update_log_array = ['status' => 'T'];
		$update_res          = $this->mongo_db->update('ratings',['_id'=>(int)$id],['$set'=> $update_log_array],['upsert'=>false]);
	//	echo "<pre>";print_r($update_res);exit();
		return empty($update_res['err'])?1:0;
    }
    public function get_allpassenger_details()
    {
	$field_arguments = [
				[
					  '$match'=>['user_status'=>'A','device_type'=>['$in'=>['1','2']],'device_token'=>['$ne'=>'']]
					],
				[ '$project' => ['_id'=>'$_id','device_type'=>'$device_type','device_token'=>'$device_token']
				],
				
				['$group' => ["_id" => ['device_type'=>'$device_type'],

						"details" => [ '$push' => ['_id'=>'$_id','device_type' => '$device_type','device_token' => '$device_token'] ],
							
						"count" => [ '$sum' => 1 ],
					]
				],
				
			];

		
		$qresult = $this->mongo_db->aggregate(MDB_PASSENGERS,$field_arguments);	
		return (!empty($qresult['result']))?$qresult['result']:[];	

				
    }
     public function admin_push_notification($pushmessage,$image='') {

            $rs = $this->mongo_db->find(MDB_NOTIFICATIONS,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$rs = iterator_to_array($rs);
			reset($rs);
			$rs_first_key = key($rs);
			$_id = $rs_first_key + 1;
            
            $current_date      = date('Y-m-d H:i:s', time());
            $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);

            $data = ['_id'=>$_id,
				'message' => $pushmessage,
				'image'=>$image,
				'notification_type' => (int)4,	
				'created_date'=>$currentdate		
													
			];
			$result = $this->mongo_db->insert(MDB_NOTIFICATIONS,$data);
			return empty($result['err'])?1:0;
			//echo "<pre>";print_r($result);exit();
          
      }

    public function pushnotification_list($offset, $val,$find_count = FALSE){
    	$ops = ['notification_type'=>(int)4];
		$select_ops = ['_id','message','created_date'];
		if($find_count){
	    	$qresult = $this->mongo_db->count(MDB_NOTIFICATIONS,$ops);
			return $qresult;
		}else{
	    	$qresult = $this->mongo_db->find(MDB_NOTIFICATIONS,$ops,$select_ops)->sort(['_id'=>-1]);
			$itqresult = iterator_to_array($qresult);
	    	$ar_result = array_values($itqresult);
	    	return $ar_result;
		}
    	
    
    }
    
    /////////// Service History ////////////
    public function all_taxi_service_list($offset, $val,$find_count=false)
    {
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        
		//MongoDB
		if ($usertype == 'M' || $usertype == 'A') {
			$match_query = ['taxi.taxi_status'=>['$ne'=>'T'],'km_reach_status'=>['$eq'=>true],'end_km'=>['$ne'=>0]];
		} else if ($usertype == 'C' ) {
			$match_query = ['taxi.taxi_company'=>(int)$company_id,'taxi.taxi_status'=>['$ne'=>'T'],'km_reach_status'=>['$eq'=>true],'end_km'=>['$ne'=>0]];
		} else {
			$match_query = ['taxi.taxi_status'=>['$ne'=>'T'],'km_reach_status'=>['$eq'=>true],'end_km'=>['$ne'=>0]];
		}
		
		$srch_query = [];
		if(!empty($_REQUEST)) {
			$keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : "";
			$status = isset($_REQUEST['status']) ? $_REQUEST['status'] : "";
			$company = isset($_REQUEST['filter_company']) ? $_REQUEST['filter_company'] : "";
			
			if((!empty($keyword)) && (!empty($status)) && (!empty($company))) {
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['service_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
			} else if ((!empty($keyword)) && (!empty($status))){
				if($usertype=='A'){
					$srch_query = [ "\$and" => [['service_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
				} else {
					$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['service_status' => $status ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
				}
			} else if ((!empty($keyword)) && (!empty($company))){				
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
			} else if ((!empty($status)) && (!empty($company))){
				$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['service_status' => $status ] ] ];
			} else if (!empty($keyword)) {
				if($usertype=='A'){
					$srch_query = [ "\$and" => [["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
				} else {
					$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],["\$or"=>[[ 'taxi.taxi_no' => new \MongoDB\BSON\Regex($keyword, 'i')], ['driver.name' => new \MongoDB\BSON\Regex($keyword, 'i')] ] ] ] ];
				}
			} else if (!empty($company)) {
					$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ]]];
			} else if (!empty($status)) {
				if($usertype=='A'){
					$srch_query = [ "\$and" => [['service_status' => $status ]]];
				} else {
					$srch_query = [ "\$and" => [['taxi.taxi_company' => (int)$company ],['service_status' => $status ]]];
				}
			}
		}
		
		$match_query = array_merge($match_query, $srch_query);
		
		
		if($find_count){
			$arguments = [
				['$lookup' => [
						'from' => MDB_TAXI,
						'localField' => 'taxi_id',
						'foreignField' => "_id",
						'as' => "taxi"
					]
				],
				['$unwind' => '$taxi'],
				['$lookup' => [
						'from' => MDB_MOTOR_MODEL,
						'localField' => 'taxi.taxi_model',
						'foreignField' => "_id",
						'as' => "motormodel"
					]
				],
				['$unwind' => '$motormodel'],
				['$lookup' => [
						'from' => MDB_TAXI_SERVICE_RANGE,
						'localField' => 'taxi_service_id',
						'foreignField' => "_id",
						'as' => "service"
					]
				],
				['$unwind' => '$service'],
				['$lookup' => [
						'from' => MDB_PEOPLE,
						'localField' => 'driver_id',
						'foreignField' => "_id",
						'as' => "driver"
					]
				],
				['$unwind' => '$driver'],
				['$match'  => $match_query],
				['$sort' =>['created_date' => -1] ],
				['$project' => ['_id'=>0,
						'service_id' => '$_id',
					]
				],[
					'$group' => [
						'_id' => NULL,
						'count' => [
							'$sum' => 1
						]
					]
				]
			];
			$result = $this->mongo_db->aggregate(MDB_SHIFT_HISTORY,$arguments);
			return (!empty($result['result']) && isset($result['result']))?$result['result'][0]['count']:0;
		} else {
			$arguments = [
				['$lookup' => [
						'from' => MDB_TAXI,
						'localField' => 'taxi_id',
						'foreignField' => "_id",
						'as' => "taxi"
					]
				],
				['$unwind' => '$taxi'],
				['$lookup' => [
						'from' => MDB_MOTOR_MODEL,
						'localField' => 'taxi.taxi_model',
						'foreignField' => "_id",
						'as' => "motormodel"
					]
				],
				['$unwind' => '$motormodel'],
				['$lookup' => [
						'from' => MDB_TAXI_SERVICE_RANGE,
						'localField' => 'taxi_service_id',
						'foreignField' => "_id",
						'as' => "service"
					]
				],
				['$unwind' => '$service'],
				['$lookup' => [
						'from' => MDB_PEOPLE,
						'localField' => 'driver_id',
						'foreignField' => "_id",
						'as' => "driver"
					]
				],
				['$unwind' => '$driver'],
				['$match'  => $match_query],
				['$sort' =>['created_date' => -1] ],
				['$project' => ['_id'=>0,
						'service_id' => '$_id',
						'service_status' => '$service_status',
						'start_km' => '$start_km',
						'end_km' => '$end_km',
						'current_km' => '$taxi.starting_km',
						'model_name' => '$motormodel.model_name',
						'taxi_no' => '$taxi.taxi_no',
						'taxi_id' => '$taxi._id',
						'driver_name' => '$driver.name',
						'service_label' => '$service.label',
						'service_km' => '$service.km',
						'createdate' => '$createdate',
					]
				],				
				['$skip' => (int)$offset],
				['$limit' => (int)$val]
			];
			//echo $offset.'='.$val;
			$result = $this->mongo_db->aggregate(MDB_SHIFT_HISTORY,$arguments);
			return (!empty($result['result']) && isset($result['result']))?$result['result']:[];
		}
    }
    
    public function active_taxi_service_request($activeids)
    {
        $active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_SHIFT_HISTORY,['_id'=>['$in'=>$active_ids]],['$set'=>['service_status' => 'A']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
    public function block_taxi_service_request($activeids)
    {
        $active_ids = Commonfunction::mongo_format_array($activeids);
		$result = $this->mongo_db->update(MDB_SHIFT_HISTORY,['_id'=>['$in'=>$active_ids]],['$set'=>['service_status' => 'D']],['multiple'=>true]);
		//echo '<pre>';print_r($result);exit;
		return (empty($result['err']))?1:$result['errmsg'];
    }
	/////////// Service History ////////////

	//wallet Logs
	public function passenger_wallet_logs($keyword = "", $status = "",$recharge_type,$start_date="",$end_date="", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$match_query = ['pass.user_status'=>'A'];

		if(!empty($recharge_type))
		{
			$match_query['recharge_type'] = (int)$recharge_type; 
		}

		if($start_date == '' && $end_date == '')
		{
			$start_date = date("Y-m-d 00:00:01");
            $end_date = date("Y-m-d 23:59:59");
		}
		
		$match_query['created_date'] = [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_date) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_date) * 1000)
                    ];
	
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'pass.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'pass.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'pass.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'pass.phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}


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
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(PASSENGER_WALLET_LOG, $merge_arguments);
		//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'created_date' => -1
					],
				],
				[
					'$project' => [
						'id' => '$_id',
						'passenger_email' => '$pass.email',
						'passenger_id' => '$pass._id',
						'passenger_name' => '$pass.name',
						'passenger_phone' => '$pass.phone',
						'passenger_country_code' => '$pass.country_code',
						'change_amount' => '$change_amount',
						'wallet_amount' => '$wallet_amount',
						'created_date' => '$created_date',
						'created_by' => '$created_by',
						'recharge_type' => '$recharge_type',
						'transaction_id' => '$transaction_id',
						'trip_id' => '$trip_id',
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(PASSENGER_WALLET_LOG, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }

    public function update_wallet_amount($id,$add_amt,$negative)
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

			$data = [
				'passenger_id'=>$id,
				'add_amt'=>$additional_amt,
				'current_wallet_amt'=>$update_wallet_amt
			];
			$this->add_wallet_log($data);
			return true;
		}	
		else
		{
			return false;
		}
	}

	public function validate_update_wallet($arr)
    {
        return Validation::factory($arr)
        ->rule('amount', 'not_empty')
        ->rule('passenger', 'not_empty');
    }


	public function validate_passenger_payout($arr)
    {
        return Validation::factory($arr)
        ->rule('amount', 'not_empty')
        ->rule('passenger', 'not_empty');
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
                    $condition =['phone' => new \MongoDB\BSON\Regex($phone_no, 'i'),'user_status'=>'A','passenger_cid'=>(int)$company_id];
                } else {
                    $condition =['name' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A','passenger_cid'=>(int)$company_id];
                }
            } else if($type==2){
                $condition =['email' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A','passenger_cid'=>(int)$company_id];
            } else if($type==3){
               $condition =['phone' => new \MongoDB\BSON\Regex($like, 'i'),'user_status'=>'A','passenger_cid'=>(int)$company_id];
            }
            $results = $this->mongo_db->find(MDB_PASSENGERS,$condition,['name','phone','email','wallet_amount']);
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
            $results = $this->mongo_db->find(MDB_PASSENGERS,$condition,['_id','name','phone','email','wallet_amount'])->sort(['name'=>1]);
            return (!empty($results))?iterator_to_array($results):[];
        }
    }

    public function add_wallet_log($data)
    {
    	$insert_array      = [
			"passenger_id"=>(int)$data['passenger_id'],
			"change_amount"=>(double)$data['add_amt'],
			"wallet_amount"=>(double)$data['current_wallet_amt'],
            "created_date" => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000),
            "created_by" => (int)$this->user_createdby,
            "recharge_type" =>(int)1
			];
		$result= $this->mongo_db->Insert(PASSENGER_WALLET_LOG,$insert_array);
		return true;
    }

    public function vip_pending_payments($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$match_query = [
			'user_status'=>'A',
			'vip_user'=>(int)1,
			'wallet_amount'=>['$lt'=>(int)0]
		];
	
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_PASSENGERS_LOGS,
					'localField' => '_id',
					'foreignField' => 'passengers_id',
					'as' => 'pass'
				]
			],
			[
				'$unwind' => ['path'=>'$passengers_log','preserveNullAndEmptyArrays'=>true]
			],
			[
				'$match' => $srch_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(PASSENGERS, $merge_arguments);
		//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'created_date' => -1
					],
				],
				[
					'$project' => [
						'passenger_email' => '$email',
						'id' => '$_id',
						'passenger_name' => '$name',
						'passenger_phone' => '$phone',
						'passenger_country_code' => '$country_code',
						'wallet_amount' => '$wallet_amount',
						'last_payment_update' => ['$ifNull'=>['$last_payment_update','']],
						'last_payment_amt' => ['$ifNull'=>['$last_payment_amt','0']],
						'lateral_start_date' => ['$ifNull'=>['$lateral_start_date','']],
						'lateral_end_date' => ['$ifNull'=>['$lateral_end_date','']],
						'pay_by' => ['$ifNull'=>['$pay_by','']],
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(PASSENGERS, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }

    public function update_payout($id,$add_amt)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,['_id' => (int)$id],['wallet_amount']);
        
        if(count($result) > 0)
        {
            $current_wallet_amt =  isset($result['wallet_amount'])?$result['wallet_amount']:0;

            //negative decides addition or subtraction of amount
            // if($negative == 1)
            // {
            //     $update_wallet_amt = $current_wallet_amt - $add_amt;
            //     $additional_amt = -$add_amt;
            // }
            // else
            // {
                $update_wallet_amt = $current_wallet_amt + $add_amt;
                $additional_amt = $add_amt;
           // } 

            $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000);

            $update_data      = [
            "wallet_amount"=>(double)$update_wallet_amt,
            "last_payment_update"=>$currentdate,
            "last_payment_amt"=>(double)$add_amt
            ];
            $people_result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>(int)$id],['$set'=>$update_data],['upsert'=>false]);

            $data = [
                'passenger_id'=>$id,
                'add_amt'=>$additional_amt,
                'current_wallet_amt'=>$update_wallet_amt,
                'recharge_type'=>(int)3,
                //'transaction_id'=>''
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
            //"transaction_id" =>(int)$data['transaction_id'],
            ];
        $result= $this->mongo_db->Insert(PASSENGER_WALLET_LOG,$insert_array);
        return true;
    }

    public function driver_shift_logs($keyword = "", $status = "",$start_date,$end_date,$search_date, $company = "",$offset = "", $val = "", $find_count = FALSE)
    {
        $user_createdby                  = $this->userid;
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
       // $match_query = array('status'=>'A');

        $match_query =[];   

        //$start_date = $search_date." 05:00:01";
        //$end_date = date('Y-m-d',strtotime('+1 days '.$search_date))." 05:00:01";

       $match_query['shift_start'] = [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_date) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_date) * 1000)
                    ];
   

        if(!empty($keyword)) {
            $srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        }else{
            $srch_query = $match_query;
        }
        $common_arguments = [
            [
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => '_id',
                    'as' => 'people'
                ]
            ],
            [
                '$unwind' =>['path'=>'$people','preserveNullAndEmptyArrays'=>true]
            ],
            [
                '$match' => $srch_query
            ],
        ];
        
        if ($find_count == TRUE) {
            $count_arguments = [
                // array(
                // '$match' => $srch_query
                // ),
                [
                    '$project' => [
                        'create_day'=>['$dateToString' => ['format'=> "%Y-%m-%d", 'date'=> '$shift_start']],
                        'driver_id'=>'$driver_id'
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$driver_id',
                         'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
            $result          = $this->mongo_db->aggregate(MDB_PEOPLE, $count_arguments);
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            $field_arguments = [
              
                [
                    '$project' => [
                    	'driver_name'=>'$people.name',
                    	'driver_id'=>'$driver_id',
                    	'driver_lastname'=>'$people.lastname',
                    	'shift_start'=>'$shift_start',
                    	'shift_end'=>'$shift_end',
                    	'login_start'=>'$login_start',
                    	'login_end'=>'$login_end',
                    	'shift_end'=>'$shift_end',
                    	'status'=>'$status',
                    	//'createdate'=>'$createdate',
                    	'create_day'=>['$dateToString' => ['format'=> "%Y-%m-%d", 'date'=> '$shift_start']]

                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$driver_id',
                        'tripdet' =>['$push'=>'$$ROOT'],
                        'driver_name' => ['$first'=>'$driver_name'],
                        'driver_lastname' => ['$first'=>'$driver_lastname'],
                        'driver_id' => ['$first'=>'$driver_id'],
                        //'create_day' => array('$first'=>'$create_day'),
                        //'shift_hours' => array('$first'=>'$shift_hours'),
                        //'shift_start' => array('$first'=>'$shift_start'),
                        //'shift_start_date' => array('$first'=>'$shift_start_date'),
                        //'shift_end' => array('$first'=>'$shift_end'),
                        //'driver_id' => array('$first'=>'$driver_id'),
                      ]
                ],
               // array('$skip'   => (int)$offset ),
               // array('$limit'  => (int)$val ),
                 [
                    '$sort' => [ 
                        'create_day' => -1
                    ],
                ],
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);

            $result    = $this->mongo_db->aggregate(MDB_SHIFT_HISTORY, $merge_arguments);
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }


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

    public function get_allpassenger_details_limit()
    {
		$field_arguments = [
				[
					  '$match'=>['push_notification' => ['$ne' => (int)1], 'user_status'=>'A','device_type'=>['$in'=>['1','2']],'device_token'=>['$ne'=>'']]
					],
				[ '$project' => ['_id'=>'$_id','device_type'=>'$device_type','device_token'=>'$device_token']
				],
				
				['$group' => ["_id" => ['device_type'=>'$device_type'],

						"details" => [ '$push' => ['_id'=>'$_id','device_type' => '$device_type','device_token' => '$device_token'] ],
							
						"count" => [ '$sum' => 1 ],
					]
				],
				[
					'$sort' => [
						'_id' => -1
					],
				],
				[
					'$skip' => 0
				],
				[
				  '$limit' => 100
				]

				
			];

		$qresult = $this->mongo_db->aggregate(MDB_PASSENGERS,$field_arguments);	
		//print_r($qresult);exit;
		return (!empty($qresult['result']))?$qresult['result']:[];					
    }

    public function passengers_count_push()
    {	
		//MongoDB
		$result = $this->mongo_db->count(MDB_PASSENGERS,['user_status'=>'A', 'push_notification' => (int)1 ]);
		return (!empty($result))?$result:0;
    }

    public function passengers_uncount_push()
    {	
		//MongoDB
		$result = $this->mongo_db->count(MDB_PASSENGERS,['user_status'=>'A', 'push_notification' => ['$ne' => (int)1] ]);
		return (!empty($result))?$result:0;
    }

     public function passengers_count_update($id)
    {	
		//MongoDB
		$result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>$id], ['$set' => ['push_notification' => (int)1]],['multiple'=>true]);
		return (!empty($result))?$result:0;

		//$result = $this->mongo_db->update(MDB_PEOPLE,array('_id'=>array('$in'=>$active_ids),'user_type'=>'C'),array('$set'=>array('status' => 'A')),array('multiple'=>true));
    }

     public function all_passengers_count()
    {	
		//MongoDB
		$result = $this->mongo_db->count(MDB_PASSENGERS,['user_status'=>'A']);
		return (!empty($result))?$result:0;
    }

        public function normal_pending_payments($keyword = "", $status = "", $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
		$user_createdby                  = $this->userid;
		$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$match_query = [
			'user_status'=>'A',
			'vip_user'=>(int)0,
			'wallet_amount'=>['$lt'=>(int)0]
		];
	
		if(!empty($keyword)) {
			$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
		}else{
			$srch_query = $match_query;
		}
		$common_arguments = [
			[
				'$lookup' => [
					'from' => MDB_PASSENGERS_LOGS,
					'localField' => '_id',
					'foreignField' => 'passengers_id',
					'as' => 'pass'
				]
			],
			[
				'$unwind' => ['path'=>'$passengers_log','preserveNullAndEmptyArrays'=>true]
			],
			[
				'$match' => $srch_query
			],
		];
		
		if ($find_count == TRUE) {
			$count_arguments = [
				[
					'$project' => [
						'result' => '$_id'
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
			$merge_arguments = array_merge($common_arguments, $count_arguments);
			$result          = $this->mongo_db->aggregate(PASSENGERS, $merge_arguments);
		//echo "<pre>";print_r($result['result']);exit;
			return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
		} else {
			$field_arguments = [
				[
					'$sort' => [ 
						'created_date' => -1
					],
				],
				[
					'$project' => [
						'passenger_email' => '$email',
						'id' => '$_id',
						'passenger_name' => '$name',
						'passenger_phone' => '$phone',
						'passenger_country_code' => '$country_code',
						'wallet_amount' => '$wallet_amount',
						'last_payment_update' => ['$ifNull'=>['$last_payment_update','']],
						'last_payment_amt' => ['$ifNull'=>['$last_payment_amt','0']],
						'lateral_start_date' => ['$ifNull'=>['$lateral_start_date','']],
						'lateral_end_date' => ['$ifNull'=>['$lateral_end_date','']],
						'pay_by' => ['$ifNull'=>['$pay_by','']],
					]
				],
				['$skip'	=> (int)$offset ],
				['$limit'	=> (int)$val ]
			];
			$merge_arguments = array_merge($common_arguments, $field_arguments);
			$result    = $this->mongo_db->aggregate(PASSENGERS, $merge_arguments);
			//echo "<pre>";print_r($result['result']); exit;
			return (!empty($result['result'])) ? $result['result'] : [];
		}
    }


    public function careers_list($keyword = "", $status = "",$offset, $val,$find_count = FALSE){
    	
			$match_query =['_id'=>['$ne'=>(int)0]];

			if($status){
				$match_query['status'] = $status;
			}
			if(!empty($keyword)) {
            	$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'title' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'title_ar' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'description' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'description_ar' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
	        }else{
	            $srch_query = $match_query;
	        }
	//print_r($srch_query);exit;
			if ($find_count == TRUE) {
	            $count_arguments = [
	                [
	                '$match' => $srch_query
	                ],
	                [
	                    '$project' => [
	                        'result' => '$_id'
	                    ]
	                ],
	                [
	                    '$group' => [
	                        '_id' => NULL,
	                        'count' => [
	                            '$sum' => 1
	                        ]
	                    ]
	                ],
	            ];
	           // $merge_arguments = array_merge($common_arguments, $count_arguments);

	            $result          = $this->mongo_db->aggregate(MDB_CARRERS_LIST, $count_arguments);
	            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
	        } else {

	        	$field_arguments = [['$project' => ['title'=>'$title',
							        							'description'=>'$description',
							        							'status'=>'$status',
							        							'created_date'=>['$dateToString' => ['format'=> "%d/%m/%Y", 'date'=> '$created_date']],							        							
							        							'_id'=>'$_id']
							        		],
	        							['$match' => $srch_query],	        							
	        							[
						                    '$sort' => [ 
						                        '_id' => -1,
						                    ],
						                ],
						                ['$skip'	=> (int)$offset ],
                    					['$limit'	=> (int)$val ],
	        							];        	

	        	$result    = $this->mongo_db->aggregate(MDB_CARRERS_LIST, $field_arguments);
				// echo "<pre>";
	           	//print_r($result);exit;
	            return (!empty($result['result'])) ? $result['result'] : [];
    
    		}

    }

    public function validate_add_career($arr){

    	return Validation::factory($arr)->rule('title', 'not_empty')	        
	            ->rule('title', 'min_length', [
	            ':value',
	            '2'
	        ]) ->rule('title_ar', 'not_empty')->rule('title_ar', 'min_length', [
	            ':value',
	            '2'
	        ])->rule('description', 'not_empty')->rule('description', 'min_length', [
	            ':value',
	            '10'
	        ])->rule('description_ar', 'not_empty')->rule('description_ar', 'min_length', [
	            ':value',
	            '10'
	        ]);

    }

    public function add_career($arr){

    	$rs = $this->mongo_db->find(MDB_CARRERS_LIST,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $taxi_id = $first_key+1;

		
		if(isset($arr['status']) && $arr['status'] == 1 ){
			$status = 'A';
		}else{
			$status = 'D';
		}

		$career_data = ['_id' => (int)$inc_id,'title'=>$arr['title'],'title_ar'=>$arr['title_ar'],'description'=>$arr['description'],'description_ar'=>$arr['description_ar'],'status'=>$status,'created_date' => new \MongoDB\BSON\UTCDateTime(strtotime($this->currentdate) * 1000) ];

		$result = $this->mongo_db->insert(MDB_CARRERS_LIST,$career_data);

		return $result;
    }

    public function block_career($activeids)
    {
       
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->update(MDB_CARRERS_LIST, [
            '_id' => [
                '$in' => $active_ids
            ]
        ], [
            '$set' => [
                'status' => 'D'
            ]
        ], [
            'multiple' => true
        ]);
        //echo '<pre>';print_r($result);exit;
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }
    public function active_career($activeids)
    {
       
        $active_ids = Commonfunction::mongo_format_array($activeids);
        $result     = $this->mongo_db->update(MDB_CARRERS_LIST, [
            '_id' => [
                '$in' => $active_ids
            ]
        ], [
            '$set' => [
                'status' => 'A'
            ]
        ], [
            'multiple' => true
        ]);
       
        return (empty($result['err'])) ? 1 : $result['errmsg'];
    }

    public function get_careers($id){

    	$query = $this->mongo_db->find(MDB_CARRERS_LIST,['_id' => (int)$id]);
        $result = iterator_to_array($query);
        $finrest = array_shift($result);
        //echo "<pre>";print_r($finrest);exit();
        return $finrest;

    }

    public function update_career($arr,$id){

    	if(isset($arr['status']) && $arr['status'] == 1 ){
			$status = 'A';
		}else{
			$status = 'D';
		}

    	$query = ['title'=>$arr['title'],'title_ar'=>$arr['title_ar'],'description'=>$arr['description'],'description_ar'=>$arr['description_ar'],'status'=>$status];
    	$result = $this->mongo_db->update(MDB_CARRERS_LIST,['_id'=>(int)$id],['$set'=>$query]);

    	return (empty($result['err']))?1:$result['err'];
    }

    public function careers_request_list($keyword = "", $status = "",$offset, $val,$find_count = FALSE){    		
    	
			$match_query =['_id'=>['$ne'=>(int)0]];

			if($status){
				$match_query['status'] = $status;
			}
			if(!empty($keyword)) {
            	$srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'jobs.title' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
	        }else{
	            $srch_query = $match_query;
	        }

	//print_r($srch_query);exit;
			if ($find_count == TRUE) {
	            $count_arguments = [
	            	['$lookup'=>[
                            'from'=>MDB_CARRERS_LIST,
                            'localField'=>"job_id",
                            'foreignField'=>"_id",
                             'as'=>"jobs"        
                        ]],
                        ['$unwind'=>'$jobs'],
	                [
	                '$match' => $srch_query
	                ],
	                [
	                    '$project' => [
	                        'result' => '$_id'
	                    ]
	                ],
	                [
	                    '$group' => [
	                        '_id' => NULL,
	                        'count' => [
	                            '$sum' => 1
	                        ]
	                    ]
	                ],
	            ];
	           // $merge_arguments = array_merge($common_arguments, $count_arguments);

	            $result          = $this->mongo_db->aggregate(MDB_CARRERS_LIST, $count_arguments);
	            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
	        } else {

	        	/*$field_arguments = array(array('$project' => array('title'=>'$title',
							        							'description'=>'$description',
							        							'status'=>'$status',
							        							'created_date'=>array('$dateToString' => array('format'=> "%d/%m/%Y", 'date'=> '$created_date')),							        							
							        							'_id'=>'$_id')
							        		),
	        							array('$match' => $srch_query),	        							
	        							array(
						                    '$sort' => array( 
						                        '_id' => -1,
						                    ),
						                ),
						                array('$skip'	=> (int)$offset ),
                    					array('$limit'	=> (int)$val ),
	        							);    */
	        	$arguments = [ ['$lookup'=>[
                            'from'=>MDB_CARRERS_LIST,
                            'localField'=>"job_id",
                            'foreignField'=>"_id",
                             'as'=>"jobs"        
                        ]],
                        ['$unwind'=>'$jobs'],                        
                        ['$match'=>$srch_query],
                        ['$project' => [                        
                            'name' => '$name',
                            'email' => '$email',
                            'phone' => '$phone',
                            'resume_file' => '$resume_file',                            
                            'title' => '$jobs.title',
                            'created_date'=>['$dateToString' => ['format'=> "%d/%m/%Y", 'date'=> '$created_date']],				
							'_id'=>'$_id'],
                        ],['$sort' => ['_id' => -1]],
                          ['$skip'	=> (int)$offset ],
                    	  ['$limit'	=> (int)$val ],
                        ];


	        	$result    = $this->mongo_db->aggregate(MDB_RESUMES, $arguments);
				// echo "<pre>";
	           	//print_r($result);exit;
	            return (!empty($result['result'])) ? $result['result'] : [];
    
    		}

    }

    public function validate_add_push_notification($arr){

    	return Validation::factory($arr)->rule('admin_push_message', 'not_empty')        
						            ->rule('admin_push_message', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('admin_push_message', 'max_length', [
						            ':value',
						            '200'
						        ])->rule('push_title', 'not_empty')        
						            ->rule('push_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('push_title', 'max_length', [
						            ':value',
						            '30'
						        ])->rule('push_sub_title', 'not_empty')        
						            ->rule('push_sub_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('push_sub_title', 'max_length', [
						            ':value',
						            '60'
						        ])->rule('notification_image', 'Upload::not_empty', [
						            $arr['notification_image']
						        ])->rule('notification_image', 'Upload::type', [
						            ':value', ['jpeg','jpg','png','gif']
						        ]);
    }


    public function admin_add_push_notification($pushmessage,$image='',$title,$sub_title) {

            $rs = $this->mongo_db->find(MDB_NOTIFICATIONS,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$rs = iterator_to_array($rs);
			reset($rs);
			$rs_first_key = key($rs);
			$_id = $rs_first_key + 1;
            
            $current_date      = date('Y-m-d H:i:s', time());
            $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);

            $data = ['_id'=>$_id,
            	'title'=>$title,
            	'sub_title'=>$sub_title,
				'message' => $pushmessage,
				'image'=>$image,
				'notification_type' => (int)4,	
				'created_date'=>$currentdate		
													
			];
			$result = $this->mongo_db->insert(MDB_NOTIFICATIONS,$data);
			return empty($result['err'])?1:0;
			//echo "<pre>";print_r($result);exit();
          
      }

      public function get_testimonial($keyword){
      		
      		$match_query =['_id'=>['$ne'=>(int)0]];
			
			if(!empty($keyword)) {      		

      			$match_data = ['name' => new \MongoDB\BSON\Regex($keyword, 'i')];
      		}else{
      			$match_data = ['_id'=>['$ne'=>(int)0]];
      		}

      		$arguments = [
	      					['$match'=>$match_data],
	                        ['$project' => [                        
	                            'name' => '$name',
	                            'skype' => '$skype',
	                            'description' => '$description',
	                            'status' => '$status',                            
	                            'image' => '$image',
	                            'created_date'=>['$dateToString' => ['format'=> "%d/%m/%Y", 'date'=> '$created_date']],				
								'_id'=>'$_id'],
	                        ],['$sort' => ['_id' => -1]]	                          
	                      ];


      		$result = $this->mongo_db->aggregate(MDB_TESTIMONIAL, $arguments);
      		
      		return (!empty($result['result'])) ? $result['result'] : [];
      }

      public function delete_testimonial($id){

      	$result = $this->mongo_db->remove(MDB_TESTIMONIAL,['_id'=>(int)$id]);
		return (empty($result['err']))?1:$result['err'];
      }

      public function get_website_content(){

      		$result = $this->mongo_db->aggregate(MDB_WEBSITE_CONTENT,[ [ '$match'=> ['_id'=>1]] ] );
      		
      		//echo "<pre>";print_r($result);exit();
      		return (!empty($result['result'][0])) ? $result['result'][0] : [];

      }


      public function validate_website_content($arr){

    	return Validation::factory($arr)->rule('vehicle_type', 'not_empty')        
						            ->rule('vehicle_type', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('vehicle_type_arabic', 'not_empty')        
						            ->rule('vehicle_type_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('vehicle_description', 'not_empty')        
						            ->rule('vehicle_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('vehicle_description_arabic', 'not_empty')        
						            ->rule('vehicle_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('meet_driver', 'not_empty')        
						            ->rule('meet_driver', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('meet_driver_arabic', 'not_empty')        
						            ->rule('meet_driver_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('meet_driver_description', 'not_empty')        
						            ->rule('meet_driver_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('meet_driver_description_arabic', 'not_empty')        
						            ->rule('meet_driver_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_title', 'not_empty')        
						            ->rule('banner_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_title_arabic', 'not_empty')        
						            ->rule('banner_title_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_description', 'not_empty')        
						            ->rule('banner_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_description_arabic', 'not_empty')        
						            ->rule('banner_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pick_at_title', 'not_empty')        
						            ->rule('pick_at_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pick_at_title_arabic', 'not_empty')        
						            ->rule('pick_at_title_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pick_at_description', 'not_empty')        
						            ->rule('pick_at_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pick_at_description_arabic', 'not_empty')        
						            ->rule('pick_at_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('card_payment', 'not_empty')        
						            ->rule('card_payment', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('card_payment_arabic', 'not_empty')        
						            ->rule('card_payment_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('card_description', 'not_empty')        
						            ->rule('card_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('card_description_arabic', 'not_empty')        
						            ->rule('card_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('secure_title', 'not_empty')        
						            ->rule('secure_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('secure_title_arabic', 'not_empty')        
						            ->rule('secure_title_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('web_email_contact', 'not_empty')->rule('web_email_contact', 'email')
						          ->rule('web_phone', 'not_empty')        
						            ->rule('web_phone', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('country_arabic', 'not_empty')        
						            ->rule('country_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('country', 'not_empty')        
						            ->rule('country', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('address_two_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('address_two', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('address_arabic', 'not_empty')        
						            ->rule('address_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('address', 'not_empty')        
						            ->rule('address', 'min_length', [
						            ':value',
						            '4'
						        ])  ;
    }


    public function update_website_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);

         $home_page = ['vehicle_type'=>$post['vehicle_type'],'vehicle_type_arabic'=> $post['vehicle_type_arabic'],'vehicle_description'=>$post['vehicle_description'],'vehicle_description_arabic'=>$post['vehicle_description_arabic'],'meet_driver'=>$post['meet_driver'],'meet_driver_arabic'=>$post['meet_driver_arabic'],'meet_driver_description'=>$post['meet_driver_description'],'meet_driver_description_arabic'=>$post['meet_driver_description_arabic'],'banner_title'=>$post['banner_title'],'banner_title_arabic'=>$post['banner_title_arabic'],'banner_description'=>$post['banner_description'],'banner_description_arabic'=>$post['banner_description_arabic'],'pick_at_title'=>$post['pick_at_title'],'pick_at_title_arabic'=>$post['pick_at_title_arabic'],'pick_at_description'=>$post['pick_at_description'],'pick_at_description_arabic'=>$post['pick_at_description_arabic'],'card_payment'=>$post['card_payment'],'card_payment_arabic'=>$post['card_payment_arabic'],'card_description'=>$post['card_description'],'card_description_arabic'=>$post['card_description_arabic'],'secure_title'=>$post['secure_title'],'secure_title_arabic'=>$post['secure_title_arabic'],'secure_description'=>$post['secure_description'],'secure_description_arabic'=>$post['secure_description_arabic'],'update_date'=>$currentdate];

         $query = ['home_page'=>$home_page];

         $result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         $site_query = ['address_one'=>$post['address'],'address_one_arabic'=>$post['address_arabic'],'address_two'=>$post['address_two'],'address_two_arabic'=>$post['address_two_arabic'],'country'=>$post['country'],'country_arabic'=>$post['country_arabic'],'web_email_contact'=>$post['web_email_contact'],'web_phone'=>$post['web_phone']];
         $result = $this->mongo_db->update(MDB_SITEINFO,['_id'=>1],['$set'=>$site_query],['upsert'=>true]);

         return (empty($result['err']))?1:$result['err'];
    }


    public function validate_website_features_content($arr){

    	return Validation::factory($arr)->rule('banner_content', 'not_empty')        
						            ->rule('banner_content', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_content_arabic', 'not_empty')        
						            ->rule('banner_content_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('feature_title', 'not_empty')        
						            ->rule('feature_title', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('feature_title_arabic', 'not_empty')        
						            ->rule('feature_title_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('feature_description', 'not_empty')        
						            ->rule('feature_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('feature_description_arabic', 'not_empty')        
						            ->rule('feature_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('gps', 'not_empty')        
						            ->rule('gps', 'min_length', [
						            ':value',
						            '3'
						        ])->rule('gps_arabic', 'not_empty')        
						            ->rule('gps_arabic', 'min_length', [
						            ':value',
						            '3'
						        ])->rule('gps_description', 'not_empty')        
						            ->rule('gps_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('gps_description_arabic', 'not_empty')        
						            ->rule('gps_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_quote', 'not_empty')        
						            ->rule('fare_quote', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_quote_arabic', 'not_empty')        
						            ->rule('fare_quote_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_quote_description', 'not_empty')        
						            ->rule('fare_quote_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_quote_description_arabic', 'not_empty')        
						            ->rule('fare_quote_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('social_share', 'not_empty')        
						            ->rule('social_share', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('social_share_arabic', 'not_empty')        
						            ->rule('social_share_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('social_share_description', 'not_empty')        
						            ->rule('social_share_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('social_share_description_arabic', 'not_empty')        
						            ->rule('social_share_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_your_driver', 'not_empty')        
						            ->rule('rate_your_driver', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_your_driver_arabic', 'not_empty')        
						            ->rule('rate_your_driver_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_your_driver_description_arabic', 'not_empty')        
						            ->rule('rate_your_driver_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('reliability', 'not_empty')        
						            ->rule('reliability', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('reliability_arabic', 'not_empty')        
						            ->rule('reliability_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('reliability_description', 'not_empty')        
						            ->rule('reliability_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('reliability_description_arabic', 'not_empty')        
						            ->rule('reliability_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('schedule_ride', 'not_empty')        
						            ->rule('schedule_ride', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('schedule_ride_arabic', 'not_empty')        
						            ->rule('schedule_ride_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('schedule_ride_decription', 'not_empty')        
						            ->rule('schedule_ride_decription', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('schedule_ride_decription_arabic', 'not_empty')        
						            ->rule('schedule_ride_decription_arabic', 'min_length', [
						            ':value',
						            '4'
						        ]);
    }


    public function update_website_features_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);

         $home_page = ['banner_content'=>$post['banner_content'],'banner_content_arabic'=> $post['banner_content_arabic'],'feature_title'=>$post['feature_title'],'feature_title_arabic'=>$post['feature_title_arabic'],'feature_description'=>$post['feature_description'],'feature_description_arabic'=>$post['feature_description_arabic'],'gps'=>$post['gps'],'gps_arabic'=>$post['gps_arabic'],'gps_description'=>$post['gps_description'],'gps_description_arabic'=>$post['gps_description_arabic'],'fare_quote'=>$post['fare_quote'],'fare_quote_arabic'=>$post['fare_quote_arabic'],'fare_quote_description'=>$post['fare_quote_description'],'fare_quote_description_arabic'=>$post['fare_quote_description_arabic'],'social_share'=>$post['social_share'],'social_share_arabic'=>$post['social_share_arabic'],'social_share_description'=>$post['social_share_description'],'social_share_description_arabic'=>$post['social_share_description_arabic'],'rate_your_driver'=>$post['rate_your_driver'],'rate_your_driver_arabic'=>$post['rate_your_driver_arabic'],'rate_your_driver_description'=>$post['rate_your_driver_description'],'rate_your_driver_description_arabic'=>$post['rate_your_driver_description_arabic'],'reliability'=>$post['reliability'],'reliability_arabic'=>$post['reliability_arabic'],'reliability_description'=>$post['reliability_description'],'reliability_description_arabic'=>$post['reliability_description_arabic'],'schedule_ride'=>$post['schedule_ride'],'schedule_ride_arabic'=>$post['schedule_ride_arabic'],'schedule_ride_decription'=>$post['schedule_ride_decription'],'schedule_ride_decription_arabic'=>$post['schedule_ride_decription_arabic'],'update_date'=>$currentdate];

         $query = ['features_page'=>$home_page];

         $result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         return (empty($result['err']))?1:$result['err'];
    }

    public function validate_website_how_works_content($arr){

    	return Validation::factory($arr)->rule('banner_content', 'not_empty')        
						            ->rule('banner_content', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_content_arabic', 'not_empty')        
						            ->rule('banner_content_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('how_its_work', 'not_empty')        
						            ->rule('how_its_work', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('how_its_work_arabic', 'not_empty')        
						            ->rule('how_its_work_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('how_its_work_description', 'not_empty')        
						            ->rule('how_its_work_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('how_its_work_description_arabic', 'not_empty')        
						            ->rule('how_its_work_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('booking', 'not_empty')        
						            ->rule('booking', 'min_length', [
						            ':value',
						            '3'
						        ])->rule('booking_arabic', 'not_empty')        
						            ->rule('booking_arabic', 'min_length', [
						            ':value',
						            '3'
						        ])->rule('booking_description', 'not_empty')        
						            ->rule('booking_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('booking_description_arabic', 'not_empty')        
						            ->rule('booking_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('select_car', 'not_empty')        
						            ->rule('select_car', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('select_car_arabic', 'not_empty')        
						            ->rule('select_car_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('airport_pickup', 'not_empty')        
						            ->rule('airport_pickup', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('airport_pickup_arabic', 'not_empty')        
						            ->rule('airport_pickup_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('airport_pickup_description', 'not_empty')        
						            ->rule('airport_pickup_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('airport_pickup_description_arabic', 'not_empty')        
						            ->rule('airport_pickup_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare', 'not_empty')        
						            ->rule('fare', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_arabic', 'not_empty')        
						            ->rule('fare_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_description', 'not_empty')        
						            ->rule('fare_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('fare_description_arabic', 'not_empty')        
						            ->rule('fare_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_confirm', 'not_empty')        
						            ->rule('ride_confirm', 'min_length', [
						            ':value',
						            '4'
						        ]) ->rule('ride_confirm_arabic', 'not_empty')        
						            ->rule('ride_confirm_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_confirm_description', 'not_empty')        
						            ->rule('ride_confirm_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_confirm_description_arabic', 'not_empty')        
						            ->rule('ride_confirm_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_complete', 'not_empty')        
						            ->rule('ride_complete', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_complete_arabic', 'not_empty')        
						            ->rule('ride_complete_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_complete_description', 'not_empty')        
						            ->rule('ride_complete_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('ride_complete_description_arabic', 'not_empty')        
						            ->rule('ride_complete_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_driver', 'not_empty')        
						            ->rule('rate_driver', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_driver_arabic', 'not_empty')        
						            ->rule('rate_driver_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_driver_description', 'not_empty')        
						            ->rule('rate_driver_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('rate_driver_description_arabic', 'not_empty')        
						            ->rule('rate_driver_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ]);
    }


    public function update_website_how_works_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);

         $home_page = ['banner_content'=>$post['banner_content'],'banner_content_arabic'=> $post['banner_content_arabic'],'how_its_work'=>$post['how_its_work'],'how_its_work_arabic'=>$post['how_its_work_arabic'],'how_its_work_description'=>$post['how_its_work_description'],'how_its_work_description_arabic'=>$post['how_its_work_description_arabic'],'booking'=>$post['booking'],'booking_arabic'=>$post['booking_arabic'],'booking_description'=>$post['booking_description'],'booking_description_arabic'=>$post['booking_description_arabic'],'select_car'=>$post['select_car'],'select_car_arabic'=>$post['select_car_arabic'],'select_car_description'=>$post['select_car_description'],'select_car_description_arabic'=>$post['select_car_description_arabic'],'airport_pickup'=>$post['airport_pickup'],'airport_pickup_arabic'=>$post['airport_pickup_arabic'],'airport_pickup_description'=>$post['airport_pickup_description'],'airport_pickup_description_arabic'=>$post['airport_pickup_description_arabic'],'fare'=>$post['fare'],'fare_arabic'=>$post['fare_arabic'],'fare_description'=>$post['fare_description'],'fare_description_arabic'=>$post['fare_description_arabic'],'ride_confirm'=>$post['ride_confirm'],'ride_confirm_arabic'=>$post['ride_confirm_arabic'],'ride_confirm_description'=>$post['ride_confirm_description'],'ride_confirm_description_arabic'=>$post['ride_confirm_description_arabic'],'ride_complete'=>$post['ride_complete'],'ride_complete_arabic'=>$post['ride_complete_arabic'],'ride_complete_description'=>$post['ride_complete_description'],'ride_complete_description_arabic'=>$post['ride_complete_description_arabic'],'rate_driver'=>$post['rate_driver'],'rate_driver_arabic'=>$post['rate_driver_arabic'],'rate_driver_description'=>$post['rate_driver_description'],'rate_driver_description_arabic'=>$post['rate_driver_description_arabic'],'update_date'=>$currentdate];

         $query = ['how_its_work_page'=>$home_page];

         $result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         return (empty($result['err']))?1:$result['err'];
    }


    public function validate_website_pricing_content($arr){

    	return Validation::factory($arr)->rule('banner_content', 'not_empty')        
						            ->rule('banner_content', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_content_arabic', 'not_empty')        
						            ->rule('banner_content_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pricing', 'not_empty')        
						            ->rule('pricing', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pricing_arabic', 'not_empty')        
						            ->rule('pricing_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pricing_description', 'not_empty')        
						            ->rule('pricing_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('pricing_description_arabic', 'not_empty')        
						            ->rule('pricing_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ]);
    }


    public function update_website_pricing_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);  

         $home_page = ['banner_content'=>$post['banner_content'],'banner_content_arabic'=> $post['banner_content_arabic'],'pricing'=>$post['pricing'],'pricing_arabic'=>$post['pricing_arabic'],'pricing_description'=>$post['pricing_description'],'pricing_description_arabic'=>$post['pricing_description_arabic'],'update_date'=>$currentdate];

         $query = ['pricing_page'=>$home_page];

         $result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         return (empty($result['err']))?1:$result['err'];
    }


    public function validate_website_careers_content($arr){

    	return Validation::factory($arr)->rule('banner_content', 'not_empty')        
						            ->rule('banner_content', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('banner_content_arabic', 'not_empty')        
						            ->rule('banner_content_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('career', 'not_empty')        
						            ->rule('career', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('career_arabic', 'not_empty')        
						            ->rule('career_arabic', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('career_description', 'not_empty')        
						            ->rule('career_description', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('career_description_arabic', 'not_empty')        
						            ->rule('career_description_arabic', 'min_length', [
						            ':value',
						            '4'
						        ]);
    }


    public function update_website_careers_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);  

         $home_page = ['banner_content'=>$post['banner_content'],'banner_content_arabic'=> $post['banner_content_arabic'],'career'=>$post['career'],'career_arabic'=>$post['career_arabic'],'career_description'=>$post['career_description'],'career_description_arabic'=>$post['career_description_arabic'],'update_date'=>$currentdate];

         $query = ['careers_page'=>$home_page];

         $result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         return (empty($result['err']))?1:$result['err'];
    }

    public function validate_website_cms_content($arr){

    	return Validation::factory($arr)->rule('content', 'not_empty')        
						            ->rule('content', 'min_length', [
						            ':value',
						            '4'
						        ])->rule('content_arabic', 'not_empty')        
						            ->rule('content_arabic', 'min_length', [
						            ':value',
						            '4'
						        ]);
    }


    public function update_website_cms_content($post){

    	 $current_date      = date('Y-m-d H:i:s', time());
         $currentdate = new \MongoDB\BSON\UTCDateTime(strtotime($current_date) * 1000);  

         $page = isset($post['type'])?$post['type']:"";

         $home_page = ['content'=>$post['content'],'content_arabic'=> $post['content_arabic'],'update_date'=>$currentdate];

         $query = ['careers_page'=>$home_page];

         if($page=='about_us_page'){

         	$query = ['about_us_page'=>$home_page];

         }else if($page=='terms_and_conditions_page'){

         	$query = ['terms_and_conditions_page'=>$home_page];
         }

         if($page=='terms_and_conditions_page' || $page=='about_us_page'){

         	$result = $this->mongo_db->update(MDB_WEBSITE_CONTENT,['_id'=>1],['$set'=>$query],['upsert'=>true]);

         	return (empty($result['err']))?1:$result['err'];

         }

         return 0;         
    }

    

}

