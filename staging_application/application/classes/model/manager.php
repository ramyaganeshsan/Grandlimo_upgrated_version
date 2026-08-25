<?php defined('SYSPATH') OR die('No Direct Script Access');

/******************************************

* Contains Users Module details

* @Created on July, 2013

* @Updated on July, 2013

* @Package: taxi

* @Author: taxi Team

* @URL : taxiapp.com

********************************************/

Class Model_Manager extends Model
{
	public function __construct()
	{	
		$this->session = Session::instance();	
		//$this->username = $this->session->get("user_name");
		$this->currentdate=Commonfunction::getCurrentTimeStamp();
		$this->userid 			= $this->session->get("userid");
		$this->company_id     	= $this->session->get('company_id');
        $this->usertype 		= $this->session->get("user_type");
        $this->country_id      	= $this->session->get('country_id');
        $this->state_id        	= $this->session->get('state_id');
        $this->city_id         	= $this->session->get('city_id');
		//MongoDB Instance
        $this->mongo_db         = MangoDB::instance('default');
	}
	
	public function get_availabletaxi_list($find_count = false)
    {
        $company_id  = (int)$this->company_id;
		$usertype = $this->usertype;	
	   	$country_id = $this->country_id;
	   	$state_id = $this->state_id;
	   	$city_id = $this->city_id;
		
		$currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query = array();
        $match_query['driver.status'] = 'A';
		$match_query['mapping.mapping_status'] = 'A';
		$match_query['people.status'] = 'A';
		$match_query['mapping.mapping_cityid'] = (int)$city_id;
		$match_query['taxi_country'] = (int)$country_id;
		$match_query['taxi_state'] = (int)$state_id;
		$match_query['taxi_city'] = (int)$city_id;
		$match_query['people.login_country'] = (int)$country_id;
		$match_query['people.login_state'] = (int)$state_id;
		$match_query['people.login_city'] = (int)$city_id;

        if ($company_id!="" && $company_id!=0) {
			$match_query['company._id'] = $company_id;
		}
		if ($currentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = array('$gte' => new MongoDate(strtotime($currentdate)));
			$match_query['mapping.mapping_enddate'] = array('$lt' => new MongoDate(strtotime($enddate)));
		}
		$arguments = array(
            array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_taxiid',
					'as' => 'mapping'
				)
			),
			array(
				'$unwind' => '$mapping'
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
				'$lookup' => array(
					'from' => MDB_DRIVER_INFO,
					'localField' => 'mapping.mapping_driverid',
					'foreignField' => '_id',
					'as' => 'driver'
				)
			),
			array(
				'$unwind' => '$driver'
			),
			array(
				'$match' => $match_query
			),
			array( '$project' =>
				array(
					'taxi_id' => '$_id',
					'taxi_no'=>'$taxi_no',
					'userid'=>'$company.companydetails.userid',
					'company_name'=>'$company.companydetails.company_name',
					'driver_id'=>'$driver._id',
					'name'=>'$people.name',
					'phone'=>'$people.phone',
				)
			),
			array('$skip' => 0),
			array('$limit' => 10)
		);
		$result          = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result']:array();
    }
	
	public function free_driver_list()
    {
		$usertype = $this->usertype;
		$company_id  = (int)$this->company_id;
	   	$country_id = $this->country_id;
	   	$state_id = $this->state_id;
	   	$city_id = $this->city_id;
		$assigned_driver = $this->free_availabletaxi_list();
		$match_query = $driver_list = array();
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		$match_query['availability_status'] = 'A';
		$match_query['login_country'] = (int)$country_id;
		$match_query['login_state'] = (int)$state_id;
		$match_query['login_city'] = (int)$city_id;
        if ($company_id!="" && $company_id!=0) {
			$match_query['company_id'] = $company_id;
		}
        if (count($assigned_driver) > 0) {
            foreach ($assigned_driver as $key => $value) {
                $driver_list[] = (int)$value['id'];
            }
			$match_query['_id'] = array('$nin' => $driver_list);
        }
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = array(
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'company_id',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$match' => $match_query
			),
			array(
				'$project' => array(
					'id' => '$_id',
					'name' => '$name',
					'userid' => '$company.companydetails.userid',
					'company_name' => '$company.companydetails.company_name',
				)
			),
			array(
				'$sort' => array('_id' => 1)
			)
		);
		$result    = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : array();
    }
	
	public function free_taxi_list($find_count = false, $cid = 0)
    {
        $usertype       = $this->usertype;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$company_id  	= (int)$this->company_id;
		$match_query = $taxi_list = array();
		$match_query['taxi_status'] = 'A';
		$match_query['taxi_availability'] = 'A';
		$match_query['taxi_country'] = (int)$country_id;
		$match_query['taxi_state'] = (int)$state_id;
		$match_query['taxi_city'] = (int)$city_id;
		$booked_driver = $this->free_availabletaxi_list();
        if (count($booked_driver) > 0) {
            foreach ($booked_driver as $key => $value) {
                $taxi_list[] = (int)$value['id'];
            }
			$match_query['_id'] = array('$nin' => $taxi_list);
        }
        if ($company_id !='' && $company_id != 0) {
			$match_query['taxi_company'] = (int)$cid;
        }
		$arguments = array(
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
					'foreignField' => '_id',
					'as' => 'company'
				)
			),
			array(
				'$unwind' => '$company'
			),
			array(
				'$match' => $match_query
			),
			array(
				'$project' => array(
					'taxi_id' => '$_id',
					'taxi_no' => '$taxi_no',
					'cid' => '$company._id',
					'company_name' => '$company.companydetails.company_name',
					'userid' => '$company.companydetails.userid'
				)
			),
			array(
				'$sort' => array('_id' => 1)
			),
		);
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : array();
	}	
	
	public function free_availabletaxi_list()
    {
		$usertype = $this->usertype;
		$company_id  = (int)$this->company_id;
	   	$country_id = $this->country_id;
	   	$state_id = $this->state_id;
	   	$city_id = $this->city_id;
		
		$currentdate = date('Y-m-d H:i:s');
        $enddate     = date('Y-m-d') . ' 23:59:59';
		$match_query = array();			
		$match_query['people.status'] = 'A';
		$match_query['mapping.mapping_status'] = 'A';
		$match_query['mapping.mapping_cityid'] = (int)$city_id;
		$match_query['taxi_country'] = (int)$country_id;
		$match_query['taxi_state'] = (int)$state_id;
		$match_query['taxi_city'] = (int)$city_id;
		$match_query['people.login_country'] = (int)$country_id;
		$match_query['people.login_state'] = (int)$state_id;
		$match_query['people.login_city'] = (int)$city_id;
		if ($company_id!="" && $company_id!=0) {
			$match_query['company._id'] = $company_id;
		}
		if ($currentdate!="" && $enddate!="") {
			$match_query['mapping.mapping_startdate'] = array('$gte' => new MongoDate(strtotime($currentdate)));
			$match_query['mapping.mapping_enddate'] = array('$lt' => new MongoDate(strtotime($enddate)));
		}
		//echo "<pre>"; print_r($match_query); exit;
		$arguments = array(
			array(
				'$lookup' => array(
					'from' => MDB_TAXI_DRIVER_MAPPING,
					'localField' => '_id',
					'foreignField' => 'mapping_taxiid',
					'as' => 'mapping'
				)
			),
			array(
				'$unwind' => '$mapping'
			),
			array(
				'$lookup' => array(
					'from' => MDB_COMPANY,
					'localField' => 'taxi_company',
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
					'id' => '$people._id',
					'taxi_id' => '$_id'
				)
			),
			array(
				'$skip' => 0
			),
			array(
				'$limit' => 10
			),
		);
		$result    = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
		//echo "<pre>"; print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : array();
    }
	
	public function getUserbyCompany()
	{
		$query = "SELECT count(`id`) as co_nt,c.company_name FROM `people` as p Join `company` as c ON p.company_id=c.cid WHERE p.user_type='D' group by p.company_id";
		$queryval = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();
		$result = "";
		foreach($queryval as $res)
		{
			$result .= "['".$res["company_name"]."', ".$res["co_nt"].""."],";
		}
		$result = rtrim($result,",");

		return $result;
	}
	
	public function gettransaction($id)
	{
		$match_query = array();
		$ids = Commonfunction::mongo_format_array($id);
		$match_query['driver_id'] = array('$in' => $ids);
		$match_query['travel_status'] = 1;
		$arguments=array(
			array(
				'$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
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
				'$group' => array(
					'_id' => array('driver_id' => '$driver_id','name' => '$people.name'),
					'count' => array('$sum' => 1)
				) 
			),
			array(
				'$project' => array(
					'_id' => 0,
					'driver_name' => '$_id.name',
					'count' => '$count'
				)
			),
		);
		$result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
		return (!empty($result) && isset($result['result'])) ? $result['result'] : array();
	}
	
	public function changegettransaction($id = '',$startdate = '',$enddate = '')
	{
		$match_query = array();
		$ids = Commonfunction::mongo_format_array($id);
		$match_query['driver_id'] = array('$in' => $ids);
		$match_query['travel_status'] = 1;
		if($startdate!="" && $enddate!=""){
			$match_query['createdate'] = array('$gte'=>new MongoDate(strtotime($startdate)),'$lte'=>new MongoDate(strtotime($enddate)));
		}
		$match_query['travel_status'] = 1;
		$arguments=array(
			array(
				'$lookup' => array(
					'from' => MDB_PEOPLE,
					'localField' => 'driver_id',
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
				'$group' => array(
					'_id' => array('driver_id' => '$driver_id','name' => '$people.name'),
					'count' => array('$sum' => 1)
				) 
			),
			array(
				'$project' => array(
					'_id' => 0,
					'driver_name' => '$_id.name',
					'count' => '$count'
				)
			),
		);
		$result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
		return (!empty($result) && isset($result['result'])) ? $result['result'] : array();
	}
	
	public function get_admin_dashboard_data($company_id)
    {		
		$result["general_users"] = $this->mongo_db->count(MDB_PASSENGERS,array('user_status' => 'A'),array('_id'));		
		$result["driver"] = $this->mongo_db->count(MDB_PEOPLE,array('user_type' => 'D','status' => 'A','company_id' => (int)$company_id),array('_id'));
		$result["country"] = $this->mongo_db->count(MDB_CSC,array('country_status' => 'A'),array('_id'));
		$arguments = array(array('$unwind' => '$stateinfo'),array('$match'=> array('stateinfo.state_status' => 'A')),array('$project' => array('id' 	=> '$stateinfo.state_id')),array('$group' =>array('_id' => NULL,'count' => array('$sum' => 1))));
		$state_count = $this->mongo_db->aggregate(MDB_CSC,$arguments);
        $result["state"] = (isset($state_count['result'][0]['count']))?$state_count['result'][0]['count']:0;
		$arguments = array(array('$unwind' => '$stateinfo'),array('$unwind' => '$stateinfo.cityinfo'),array('$match'=> array('stateinfo.cityinfo.city_status' => 'A')),array('$project' => array('id' 	=> '$stateinfo.cityinfo.city_id')),array('$group' =>array('_id' => NULL,'count' => array('$sum' => 1))));
		$city_count = $this->mongo_db->aggregate(MDB_CSC,$arguments);
        $result["city"] = (isset($city_count['result'][0]['count']))?$city_count['result'][0]['count']:0;
		$result["taxi"] = $this->mongo_db->count(MDB_TAXI,array('taxi_company' => (int)$company_id, 'taxi_status' => 'A'),array('_id'));
        return $result;
    }
	
	/*public function get_activeusers_list($company_id)
	{
		$results = DB::select()->from(PASSENGERS)
				->where('login_status', '=', 'A')
				->where('passenger_cid', '=', $company_id)
				->order_by('last_login','desc')
				->limit('0,10')
				->execute()
				->as_array();
	 	return $results;
	}*/
	
	public function get_activeusers_list($company_id)
    {
		$arguments = array(
			array(
				'$match' => array('login_status' => 'A', 'passenger_cid' => (int)$company_id)
			),
			array(
				'$project' => array(
					'name' => '$name',
					'last_login' => '$last_login',
					'phone' => '$phone',
					'address' => '$address'
				)
			),
			array('$sort' => array('last_login'=>-1)),
			array('$skip' => 0),
			array('$limit' => 10)
		);
		$result          = $this->mongo_db->aggregate(MDB_PASSENGERS, $arguments);
		//echo "<pre>";print_r($result['result']); exit;
		return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
    }
		//dashboard active users count
	public function get_activeusers_list_count($company_id)
	{
		$results = DB::select()->from(PASSENGERS)
				->where('login_status', '=', 'A')
				->where('passenger_cid', '=', $company_id)
				->order_by('last_login','desc')
				->execute()
				->as_array();
	 	return count($results);
	}

	/***********Dashboard Trip details chart************/
	public function get_company_trip_count($month, $year)
	{
		$user_type=$_SESSION['user_type'];
		$dispatcher_id=$_SESSION['userid'];
		$company_id=$_SESSION['company_id'];
		if($user_type == 'M'){
			$query = "SELECT count(c.cid) as count
				FROM ".COMPANY." as c
				Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
				Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
				Join ".PEOPLE." as PP on PP.user_createdby=c.userid
				where month(T.current_date) ='" . $month . "'
				and year(T.current_date)='" . $year . "'
				and p.travel_status = 1
				and p.driver_reply = 'A'
				and c.cid=".$company_id."
				and PP.id=".$dispatcher_id."
				group by month(T.current_date)";
			$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

			if ($result)
			{
				return $result[0]['count'];
			}
		}
		return '0';
	}

	public function get_company_trip_revenues($month, $year)
	{
		$user_type=$_SESSION['user_type'];
		$dispatcher_id=$_SESSION['userid'];
		$company_id=$_SESSION['company_id'];
		if($user_type == 'M'){
			$query = "SELECT sum(fare) as revenues
				FROM ".COMPANY." as c
				Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
				Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
				Join ".PEOPLE." as PP on PP.user_createdby=c.userid
				where month(T.current_date) ='" . $month . "'
				and year(T.current_date)='" . $year . "'
				and p.travel_status = 1
				and c.cid=".$company_id."
				and PP.id=".$dispatcher_id."
				group by month(T.current_date)";
				
			$result = Db::query(Database::SELECT, $query)
					->execute()
					->as_array();	

			if (count($result)>0)
			{
				return $result[0]['revenues'];
			}
		}
		
		return '0';
	}

	/*public function total_trip_details($start='',$end='')
	{
		$user_type=$_SESSION['user_type'];
		$dispatcher_id=$_SESSION['userid'];
		$company_id=$_SESSION['company_id'];
		if($start!=''&& $end!=''){
			$date_where="AND p.`pickup_time` >= '".$start." 00:00:01' AND  p.`pickup_time` <= '".$end." 23:59:59'";
		}
		if($user_type == 'M'){
			$query = "SELECT round(sum(T.`fare`)) as fare,count(fare) as trips,DATE_FORMAT(p.`pickup_time`,'%d') as date,DATE_FORMAT(p.`pickup_time`,'%M') as month
					FROM ".COMPANY." as c
					Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
					Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
					Join ".PEOPLE." as PP on PP.user_createdby=c.userid
					WHERE p.`travel_status` = 1
					$date_where
					and p.company_id=".$company_id."
					and PP.id=".$dispatcher_id."
					group by DATE(p.`pickup_time`)";
			 
			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();		

			return $result;
		}
		return '0';
	}*/
	
	/********* Total Trip and Revenue details *********************/
	public function total_trip_details($start='',$end='')
	{
		$dispatcher_id	= $this->userid;
		$company_id		= $this->company_id;
		$match_query = array();
		$match_query['plog.travel_status'] = 1;
		if($start!=''&& $end!=''){
			$match_query['plog.pickup_time'] = array('$gte'=>new MongoDate(strtotime($start)),'$lte'=>new MongoDate(strtotime($end)));
		}
		if($company_id != 0 && $company_id!=""){
			$match_query['plog.company_id'] = (int)$company_id;
		}
		if($dispatcher_id!=""){
			$match_query['people.id'] = (int)$dispatcher_id;
		}
        $arguments = array(
			array('$lookup' 		=> array(
                    'from'			=>	MDB_PASSENGERSLOGS_COMPLETED,
                    'localField'	=> '_id',
                    'foreignField'	=> "company_id",
                    'as'			=> "plog"
                )
            ),
            array('$unwind' => '$plog'),			
			array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> 'plog._id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind' => '$trans'),
			array('$lookup' 		=> array(
                    'from'			=>	MDB_PEOPLE,
                    'localField'	=> 'companydetails.userid',
                    'foreignField'	=> 'user_createdby',
                    'as'			=> 'people'
                )
            ),
            array('$unwind' => '$people'),
            array('$match'	=> $match_query),
			array(
                '$project' => array(
					'year' => array( '$substr' => array( '$plog.pickup_time', 0, 4 ) ),
                    'month' => array( '$substr' => array( '$plog.pickup_time', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$plog.pickup_time', 8, 2 ) ),
					'fare' => '$trans.fare',
                )
            ),
            array('$group' => array('_id' => array( 'date' => '$day','month' => '$month'),
                'fare' => array('$sum' => '$fare'),
                'trips' => array( '$sum' => 1 ),
                )
            )
        );
         
        $result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
		return (!empty($result) && $result['result'])?$result['result']:array();
	}
	/***********Dashboard Trip details chart************/
		
}
