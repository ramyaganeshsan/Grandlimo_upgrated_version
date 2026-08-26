<?php defined('SYSPATH') or die('No direct script access.');

/************************************************

* Contains Dashboard(Site Statistics - Count) details


* @Package: Taximobility

* @Author: Taximobility Team

* @URL : http://ndot.in/

************************************************/

class Model_Dashboard extends Model
{

	/**
	 * ****__construct()****
	 *
	 * setting up session variables
	 */
	public function __construct()
	{	
		$this->session = Session::instance();	
		$this->username = $this->session->get("username");
		$this->admin_session_id = $this->session->get("id");
		
		$this->user_createdby = $this->userid = $this->session->get("userid");
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
        $this->country_id     = $this->session->get('country_id');
        $this->state_id       = $this->session->get('state_id');
        $this->city_id        = $this->session->get('city_id');
		
		//MongoDB Instance
		$this->mongo_db         = MangoDB::instance('default');
	}



	public function getUsers($month, $year)
	{
		$query = "select count(*) as count from " . PEOPLE . " where status='" . ACTIVE . "' and user_type ='M' and month(created_date) ='" . $month . "' and year(created_date)='" . $year . "' group by month(created_date)";

		$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

		if ($result)
		{
			return $result[0]['count'];
		}
		return '0';
	}

	public function getUsersbydate($startdate, $enddate)
	{
			$date_where = "  (created_date between '$startdate' and '$enddate') ";
			
		$query = "select count(*) as count from " . PEOPLE . " where status='" . ACTIVE . "' and user_type ='M' and 	$date_where group by month(created_date)";

		$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

		if ($result)
		{
			return $result[0]['count'];
		}
		return '0';
	}

	public function get_company_trip_count($month, $year)
	{
		$query = "SELECT count(c.cid) as count
				FROM ".COMPANY." as c
				Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
				Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
				where month(T.current_date) ='" . $month . "'
				and year(T.current_date)='" . $year . "'
				and p.travel_status = 1
				group by month(T.current_date)";
				
		$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

		if ($result)
		{
			return $result[0]['count'];
		}
		return '0';
	}

	public function get_company_trip_count_date($month, $year,$startdate, $enddate)
	{
		$date_where="";
		if($startdate !="" && $enddate!="")
		{
			//$date_where = "and (T.current_date between '$startdate' and '$enddate') ";
			$date_where = " and T.current_date >=  '$startdate' and T.current_date <=  '$enddate' ";
		}

		$query = "SELECT count(c.cid) as count
				FROM ".COMPANY." as c
				Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
				Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
				where month(T.current_date) ='" . $month . "'
				and year(T.current_date)='" . $year . "'
				and p.travel_status = 1
				$date_where
				group by month(T.current_date)";

		$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

		if ($result){
			return $result[0]['count'];
		}
		return '0';
	}

	public function get_company_trip_revenues($month, $year)
	{
		/*
		$query = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `".PASSENGERS_LOG."` as pl
		join `".TRANS."` as t ON pl.passengers_log_id=t.passengers_log_id
		Join `".COMPANY."` as c ON pl.company_id=c.cid
		Join `".PEOPLE."` as pe ON pe.id=pl.driver_id
		Join `".PASSENGERS."` as pa ON pl.passengers_id=pa.id
		$condition $trans_condition
		order by pl.passengers_log_id desc
		limit $val offset $offset";
		
		$query = " SELECT sum(fare) as revenues FROM `".PASSENGERS_LOG."` as pl
		join `".TRANS."` as t ON pl.passengers_log_id=t.passengers_log_id
		Join `".COMPANY."` as c ON pl.company_id=c.cid
		Join `".PEOPLE."` as pe ON pe.id=pl.driver_id
		Join `".PASSENGERS."` as pa ON pl.passengers_id=pa.id
		where month(current_date) ='" . $month . "'
		and year(current_date)='" . $year . "'
		group by month(current_date)";
		*/
		$query = "SELECT sum(fare) as revenues
				FROM ".COMPANY." as c
				Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
				Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
				where month(T.current_date) ='" . $month . "'
				and year(T.current_date)='" . $year . "'
				and p.travel_status = 1
				group by month(T.current_date)";
				
		$result = Db::query(Database::SELECT, $query)
				->execute()
				->as_array();	

		if (count($result)>0)
		{
			return $result[0]['revenues'];
		}
		return '0';
	}

	/*
	 *db.passengers_log.aggregate([
		{$match: {$and:[{'pickup_time':{ $gte:ISODate("2015-03-01 00:00:00"),$lte:ISODate("2015-03-31 00:00:00")}},{'taxi_id':2},
		{'travel_status':1},]}},
		{$lookup:{ from: "transaction",localField: "passengers_log_i"mapping_driverid":1286d",foreignField: "passengers_log_id",as: "trans"}},
		{$unwind: '$trans'},
		{
			   "$project": {
				  "year": { $year: "$pickup_time" },
				   "month": { $month: "$pickup_time" },
				   "day": { $dayOfMonth: "$pickup_time" },
				   "fare" : "$trans.fare",
			   }
		   },
		{
			   "$group": {
				   "_id": {"day":"$day","month": "$month" },
				   "fare": { "$sum": "$fare" },
					"trips": { "$sum":1 },
				   
			   }
		   }
		])
	 */
	
	/********* Total Trip and Revenue details *********************/
	public function total_trip_details($company_id,$start='',$end='')
	{
		
		$match_query['travel_status'] = 1;
		
		$match_query['pickup_time'] = array('$gte'=>new \MongoDB\BSON\UTCDateTime(strtotime($start) * 1000),'$lte'=>new \MongoDB\BSON\UTCDateTime(strtotime($end) * 1000));
		if($company_id != 0 && $company_id!=""){
			$match_query['company_id'] = (int)$company_id;
		}
		//echo "<pre>"; print_r($match_query); exit;
        $arguments = array(
			array('$lookup' 		=> array(
                    'from'			=>	MDB_TRANSACTION,
                    'localField'	=> '_id',
                    'foreignField'	=> "passengers_log_id",
                    'as'			=> "trans"
                )
            ),
            array('$unwind' => '$trans'),
            array('$match'	=> $match_query),
			array(
                '$project' => array(
					'year' => array( '$substr' => array( '$pickup_time', 0, 4 ) ),
                    'month' => array( '$substr' => array( '$pickup_time', 5, 2 ) ),
                    'day' => array( '$substr'=> array( '$pickup_time', 8, 2 ) ),
					'fare' => '$trans.fare',
                )
            ),
            array('$group' => array('_id' => array( 'date' => '$day','month' => '$month'),
                'fare' => array('$sum' => '$fare'),
                'trips' => array( '$sum' => 1 ),
                )
            )
        );
         
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result) && $result['result'])?$result['result']:array();
	}
	
	
	/*public function total_trip_details($company_id,$start='',$end='')
	{
		$company_where="";
		if($company_id !="")
		{
			$company_where="AND log.`company_id` = ".$company_id."";
		}
		print_r($company_where); exit;
		 $query = "SELECT round(sum(t.`fare`)) as fare,count(fare) as trips,DATE_FORMAT(log.`pickup_time`,'%d') as date,DATE_FORMAT(log.`pickup_time`,'%M') as month
		 FROM ".PASSENGERS_LOG." as log
		 LEFT JOIN ".TRANS." as t on log.`passengers_log_id`=t.`passengers_log_id`
		 WHERE log.`travel_status` = 1
		 AND log.`pickup_time` BETWEEN '".$start." 00:00:01' AND '".$end." 23:59:59'
		 $company_where
		 group by DATE(log.`pickup_time`)";
		 
		//echo $query;exit;
		$result = Db::query(Database::SELECT, $query)
   			 ->execute();
			 //->as_array();
			 print_r($result); exit;
		return $result;
	}
	
	public function driver_status_details($driver_status)
	{
		$user_createdby = $this->userid;
        $usertype       = $this->user_type;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
		$match_query 	= array();
		$match_query['people.user_type'] = 'D';
		if($company_id != 0 && $company_id != "" && ($usertype  == 'C'|| $usertype  == 'M')){
			$match_query['people.company_id'] = (int)$company_id;
		}
		if($driver_status=='A' || $driver_status=='F'){
			$match_query['driver.status'] = $driver_status;
			$match_query['driver.shift_status'] = 'IN';
		}elseif($driver_status=='OUT'){
			$match_query['driver.status'] = 'F';
			$match_query['driver.shift_status'] = $driver_status;
		}
		$arguments = array(
				array(
					'$lookup' => array(
						'from' => MDB_DRIVER_INFO,
						'localfield' => '_id',
						'foreginfield' => '_id',
						'as' => 'driver'
					)
				),
				array(
					'$unwind' => '$driver'
				),
				array(
					'$project' => array(
						'name' => '$name',
						'location'=>'$driver.loc.coordinates',
						'shift_status'=>'$driver.shift_status',
						'driver_status'=>'$driver.status',
					)
				),
		);
		
		$result = $this->mongo_db->aggrgate(MDB_PEOPLE,$arguments);
		return (!empty($result) && $result['result'])?$result['result']:array();
	}*/
	
	/*************************Dashboard Driver status ***********************************/
	public function driver_status_details($driver_status)
	{
		$where_cond="";
		if($driver_status=='A' || $driver_status=='F'){
			$where_cond.="AND D.status='$driver_status' AND D.shift_status='IN'";
		}elseif($driver_status=='OUT'){
			$where_cond.="AND D.status='F' AND D.shift_status='$driver_status'";
		} 
		
		$user_createdby = $_SESSION['userid'];
		$usertype = $_SESSION['user_type'];
		$company_id = $_SESSION['company_id'];	
	   	$country_id = $_SESSION['country_id'];
	   	$state_id = $_SESSION['state_id'];
	   	$city_id = $_SESSION['city_id'];
	   	
		if($usertype  == 'C')
		{
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 AND PP.company_id =  $company_id
					 $where_cond";

			//echo $query;//exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
		else if($usertype  == 'M')
		{
			/*$result = DB::select("*",array(DRIVER.'.status','driver_status'))->from(PEOPLE)
					->join(DRIVER)->on(DRIVER.'.driver_id', '=', PEOPLE.'.id')
					->where('user_type','=','D')
					->where(PEOPLE.'.status','=','A')
					//->where(PEOPLE.'.login_status','=','S')
					->where('company_id','=',$company_id)
					//->where(PEOPLE.'.user_createdby','=',$user_createdby)
					//->order_by('created_date','desc')->limit($val)->offset($offset)
					->execute()
					->as_array();
			return $result;*/
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 AND PP.company_id =  $company_id
					 $where_cond";

			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
		else 
		{
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 $where_cond";

			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
	}

	public function driver_status_details_company($driver_status,$company)
	{
		$where_cond="";
		if($driver_status=='A' || $driver_status=='F'){
			$where_cond.="AND D.status='$driver_status' AND D.shift_status='IN'";
		}elseif($driver_status=='OUT'){
			$where_cond.="AND D.status='F' AND D.shift_status='$driver_status'";
		}

		$company_cond="";
		if($company!=""){
			$company_cond.=" AND PP.company_id =  $company";
		}
		
		$user_createdby = $_SESSION['userid'];
		$usertype = $_SESSION['user_type'];
		$company_id = $_SESSION['company_id'];	
	   	$country_id = $_SESSION['country_id'];
	   	$state_id = $_SESSION['state_id'];
	   	$city_id = $_SESSION['city_id'];
	   	
		if($usertype  == 'C')
		{
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 AND PP.company_id =  $company_id
					 $where_cond";

			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
		else if($usertype  == 'M')
		{
			/*$result = DB::select("*",array(DRIVER.'.status','driver_status'))->from(PEOPLE)
					->join(DRIVER)->on(DRIVER.'.driver_id', '=', PEOPLE.'.id')
					->where('user_type','=','D')
					->where(PEOPLE.'.status','=','A')
					//->where(PEOPLE.'.login_status','=','S')
					->where('company_id','=',$company_id)
					//->where(PEOPLE.'.user_createdby','=',$user_createdby)
					//->order_by('created_date','desc')->limit($val)->offset($offset)
					->execute()
					->as_array();
			return $result;*/
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 AND PP.company_id =  $company_id
					 $where_cond";

			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
		else 
		{
			$query = "SELECT PP.name,D.latitude,D.longitude,D.shift_status,D.status AS driver_status FROM ".PEOPLE." AS PP
					 JOIN ".DRIVER." AS D ON PP.`id` = D.`driver_id` 
					 WHERE PP.user_type =  'D'
					 $company_cond
					 $where_cond";

			//echo $query;exit;
			$result = Db::query(Database::SELECT, $query)
				 ->execute()
				 ->as_array();
			return $result;
		}
	}
	
	/*************************Dashboard Driver status ***********************************/
	/** to get company details and Driver, Taxi and passengers details for that particular company **/
	public function getCompanyUsersTaxi($company_id)
	{	
		$match_query = array();
		$match_query['user_type'] = 'D';
		$match_query['status'] = 'A';
		if($company_id!="" && $company_id!=0){
			$match_query['company_id'] = (int)$company_id;	
		}
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
				'$group' => array(
					'_id' => array('company_id' => '$company_id','company_name' => '$company.companydetails.company_name'),
					'totaldrivers' => array('$sum' => 1)
				)
			),
			array(
				'$lookup' => array(
					'from' => MDB_TAXI,
					'localField' => '_id.company_id',
					'foreignField' => 'taxi_company',
					'as' => 'taxi'
				)
			),
			array(
				'$unwind' => '$taxi'
			),
			array(
				'$group' => array(
					'_id' => array('taxi' => '_id','company_id' => '$_id.company_id','company_name' => '$_id.company_name','totaldrivers' => '$totaldrivers'),
					'totaltaxis' => array('$sum' => 1)
				)
			),
			array(
				'$lookup' => array(
					'from' => MDB_PASSENGERS,
					'localField' => '_id.company_id',
					'foreignField' => 'passenger_cid',
					'as' => 'passenger'
				)
			),
			array(
				'$unwind' => '$passenger'
			),
			array(
				'$group' => array(
					'_id' => array('taxi' => '_id','company_name' => '$_id.company_name','totaldrivers' => '$_id.totaldrivers','totaltaxis' => '$totaltaxis'),
					'totalpassengers' => array('$sum' => 1)
				)
			),
			array(
				'$group' => array(
					'_id' => array('company_name' => '$_id.company_name','totaldrivers' => '$_id.totaldrivers','totaltaxis' => '$_id.totaltaxis','totalpassengers' => '$totalpassengers')
				)
			),
		);
		$result = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
		//echo "<pre>";print_r($result['result']);exit;
		return (!empty($result['result']) && isset($result['result'])) ? $result['result']:array();
	}
	
	/** to get the trip counts in both mobile app and webapp, total trip counts and total trip revenues **/
	/*public function appwise_trips($month, $year)
	{ 
		$query = "SELECT count(c.cid) as total_trips,
		sum(fare) as revenues,
		sum(T.admin_amount) as admincommission,
		sum(case when p.bookby = '2' then 1 else 0 end) as webtrips,
		sum(case when p.bookby = '1' then 1 else 0 end) as mobiletrips
		FROM ".COMPANY." as c
		Join ".PASSENGERS_LOG." as p ON p.company_id=c.cid
		Join ".TRANS." as T on T.passengers_log_id=p.passengers_log_id
		where month(T.current_date) ='" .$month. "'
		and year(T.current_date)='" . $year . "'
		and p.travel_status = 1
		group by month(T.current_date)";
		
		$result = Db::query(Database::SELECT, $query)->execute()->as_array();
		return $result;
	} */
	
	public function appwise_trips($month, $year)
	{
		$arguments = array(
			array(
				'$lookup' => array(
					'from' => MDB_PASSENGERSLOGS_COMPLETED,
					'localField' => '_id',
					'foreignField' => 'company_id',
					'as' => 'passenger'
				)
			),
			array(
				'$unwind' => '$passenger'
			),
			array(
				'$lookup' => array(
					'from' => MDB_TRANSACTION,
					'localField' => 'passenger._id',
					'foreignField' => 'passengers_log_id',
					'as' => 'trans'
				)
			),
			array(
				'$unwind' => '$trans'
			),			
			array(
				'$project' => array(
					'month' => array( '$substr' => array( '$trans.current_date', 5, 2 ) ),
					'year' => array( '$substr' => array( '$trans.current_date', 0, 4 ) ),
					'travel_status'=>'$passenger.travel_status',
					'fare'=>'$trans.fare',
					'trips'=>'$_id',
					'admin_amount'=>'$trans.admin_amount',
					'bookby'=>'$passenger.bookby',
				)
			),
			array(
				'$match' => array('month' =>(string)$month,'year'=>(string)$year,'travel_status'=>1)
			),
			array(
				'$group' => array(
					'_id' => array('month' => '$month','year'=>'$year'),
					'total_trips' => array('$sum' => 1),
					'revenues' => array('$sum' => '$fare'),
					'admincommission' => array('$sum' => '$admin_amount'),
					'webtrips' => array('$sum' => array('$cond' => array(array('$eq' => array('$bookby',2)),1,0))),
					'mobiletrips' => array('$sum' =>array('$cond' => array(array('$eq' => array('$bookby',1)),1,0)))
				)
			),
		);
		$result = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
		return (!empty($result['result']) && isset($result['result'])) ? $result['result']:array();
	}	
	
}
?>
