<?php defined('SYSPATH') OR die('No Direct Script Access');

/******************************************

* Contains Users Module details

* @Created on July, 2013

* @Updated on July, 2013

* @Package: taxi

* @Author: taxi Team

* @URL : taxiapp.com

********************************************/

Class Model_Corporate extends Model
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
        $this->manage_model= Model::factory('manage');
		//MongoDB Instance
        $this->mongo_db         = MangoDB::instance('default');
	}
	 public function corporate_details($uid)
    {
        /*$result = DB::select()->from(PEOPLE)->where('id', '=', $uid)->where('user_type', '=', 'M')->execute()->as_array();
        return $result; */
		$result = $this->mongo_db->find_one(MDB_PEOPLE,['_id' => (int)$uid, 'user_type' => 'O']);
		//print_r($result); exit;
		$res = (!empty($result))?$result:[];
        return $res;
    }
    public function edit_corporate($post, $uid)
    {
      
		
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
    public function get_admin_dashboard_data($company_id)
    {	
		$count_promocode_list       = $this->manage_model->promocode_list(NULL,NULL,'', $company_id,$this->userid ,TRUE);	
		$result["promo"] = $count_promocode_list;
		$result["package"] = $this->mongo_db->count(MDB_COUPON_PACKAGE,['coupon_package_status' => 'A'],['_id']);
		
        return $result;
    }
	
    /* Sasi */
	// public function get_passengers_list($filter = "", $page = 1) {
	// 	$options = array(
	// 		"\$or" => array(
	// 			array(
	// 				'name' => new \MongoDB\BSON\Regex($filter, 'i'),
	// 			),
	// 			array(
	// 				'phone' => new \MongoDB\BSON\Regex($filter, 'i'),
	// 			)
	// 		),
	// 		'user_status'=>'A',
	// 	);
	// 	$project = array(
	// 		"name" => 1,
	// 		"_id" => 1,
	// 		"phone" => 1
	// 	);
	// 	$totalPassengers = $this->mongo_db->count(MDB_PASSENGERS,$options);
	// 	$offset = 0;
	// 	if($page != 0 && $page != 1) {
	// 		$offset = $page * 30;
	// 	}

	// 	$passengers = $this->mongo_db->find(MDB_PASSENGERS,$options,$project)->skip($offset)->limit(30);
	// 	$passengers = !empty($passengers) ? iterator_to_array($passengers) : array();
	// 	$passengersList = array();

	// 	foreach ($passengers as $key => $value) {
	// 		$newArray = array(
	// 			"id" => $value['_id']."--".$value['name']."--".$value['phone'],
	// 			"text" => $value['name']."-".$value['phone'],
	// 		);
	// 		array_push($passengersList,$newArray);
	// 	}

	// 	$response = array();
	// 	$response['results'] = $passengersList;
	// 	$response['count_filtered'] = $totalPassengers;
	// 	$response['pagination'] = array("more" => ($totalPassengers >  ($offset + 30)));
	// 	return $response;
	// }

	// public function validate_category_group($arr) {
    //     return Validation::factory($arr)
    //     	->rule('surge_price', 'not_empty')
    //     	->rule('group_name', 'not_empty')
    //     	// ->rule('discount_wallet', 'not_empty')
    //     	// ->rule('minimum_wallet_balance', 'not_empty')
    //     	// ->rule('minimum_wallet_balance', 'numeric')
    //     	->rule('corporate_discount', 'not_empty')
    //     	->rule('corporate_discount', 'numeric')
    //     	->rule('corporate_discount','range', array(':value', 0, 100))
    //     	->rule('apply_to_airport', 'not_empty')
    //     	->rule('corporate_trip_discount', 'not_empty')
    //     	->rule('restrict_wallet_amount', 'not_empty')
    //     	->rule('members', 'not_empty');
    // }

    // /* Fix this in furure i have no time to do this... */
    // public function checkPassengerAlreadyInGroup($ids,$id = "") {

	// 	if($id != "") {
	// 		$aggregationFilter = array(
	// 			array(
	// 				'$match' => array('_id' =>  array( '$ne' => (int)$id ) )
	// 			),
	// 			array(
	// 				'$project' => array(
	// 					"_id" => 0,
	// 					"group_name" => '$group_name',
	// 					"members" => array(
	// 						'$filter' => array(
	// 							"input" => '$members',
	// 							"as" => "member",
	// 							"cond" =>  array(
	// 			                   '$setIsSubset' => [['$$member'],$ids]           
	// 			                )
	// 						)
	// 					)
	// 				)
	// 			),
	// 			array( '$unwind' => '$members'),
	// 			array(
	// 				'$group' => array(
	// 					'_id' => '$_id',
	// 					"group_name" => array('$first' => '$group_name'),
    //         			"members" => array('$push' => '$members')
	// 				)
	// 			)
	// 		);

	// 	} else {
	// 		$aggregationFilter = array(
	// 			array(
	// 				'$project' => array(
	// 					"_id" => 0,
	// 					"group_name" => '$group_name',
	// 					"members" => array(
	// 						'$filter' => array(
	// 							"input" => '$members',
	// 							"as" => "member",
	// 							"cond" =>  array(
	// 			                   '$setIsSubset' => [['$$member'],$ids]           
	// 			                )
	// 						)
	// 					)
	// 				)
	// 			),
	// 			array( '$unwind' => '$members'),
	// 			array(
	// 				'$group' => array(
	// 					'_id' => '$_id',
	// 					"group_name" => array('$first' => '$group_name'),
    //         			"members" => array('$push' => '$members')
	// 				)
	// 			)
	// 		);
	// 	}

	// 	$result = $this->mongo_db->aggregate(MDB_CORPORATE_GROUP_NEW,$aggregationFilter);
	// 	return (!empty($result['result'])) ? $result['result'] : [];
    // }

    // public function add_corporate_group($groupDetails) {

    // 	$rs = $this->mongo_db->find(MDB_CORPORATE_GROUP_NEW,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
	// 	$res = iterator_to_array($rs);
	// 	reset($res);
	// 	$first_key = key($res);
	// 	$inc_id = $first_key+1;

	// 	$groupDetails['_id'] = $inc_id;

	// 	$response = $this->mongo_db->insert(MDB_CORPORATE_GROUP_NEW,$groupDetails);
	// 	return (!empty($response) && empty($response['err'])) ? 1 : 0;
    // }

    // public function countAllCorporateGroups() {
	// 	$result = $this->mongo_db->count(MDB_CORPORATE_GROUP_NEW,array(),array());
	// 	return $result;
    // }

    // public function get_corporate_groups($offset = 0, $limit = REC_PER_PAGE) {
	// 	$result = $this->mongo_db->find(MDB_CORPORATE_GROUP_NEW,array(),array('_id','group_name','surge_price','discount_wallet','restrict_wallet_amount','minimum_wallet_balance','corporate_discount','apply_to_airport','corporate_trip_discount'))->sort(array('_id'=>1))->skip($offset)->limit($limit);
	// 	return (!empty($result))?iterator_to_array($result):array();	
    // }

    // public function getGroupInfo($id) {
    // 	$filter = array(
    // 		array('$match' => array( "_id" => (int)$id ) ),
    // 		array('$unwind' => '$members'),
    // 		array(
    // 			'$lookup' => array(
    // 				"from" => MDB_PASSENGERS,
	// 			    "foreignField" => "_id",
	// 			    "localField" => "members",
	// 			    "as" => "passenger"
    // 			)
    // 		),
    // 		array('$unwind' => '$passenger'),
    // 		array(
    // 			'$project' => array(
    // 				'_id' => '$_id',
    // 				'group_name' => '$group_name',
    // 				'minimum_wallet_balance' => '$minimum_wallet_balance',
    // 				'surge_price' => '$surge_price',
    // 				'discount_wallet' => '$discount_wallet',
    // 				'restrict_wallet_amount' => '$restrict_wallet_amount',
    // 				'apply_to_airport' => '$apply_to_airport',
    // 				'corporate_trip_discount' => '$corporate_trip_discount',
    // 				'corporate_discount' => '$corporate_discount',
    // 				'passenger._id' => 1,
    // 				'passenger.name' => 1,
    // 				'passenger.email' => 1,
    // 				'passenger.phone' => 1,
    // 			)
    // 		),
    // 		array(
    // 			'$group' => array(
    // 				'_id' => '$_id',
    // 				'group_name' => array('$first' => '$group_name'),
    // 				'minimum_wallet_balance' => array('$first' => '$minimum_wallet_balance'),
    // 				'surge_price' => array('$first' => '$surge_price'),
    // 				'discount_wallet' => array('$first' => '$discount_wallet'),
    // 				'restrict_wallet_amount' => array('$first' => '$restrict_wallet_amount'),
    // 				'apply_to_airport' => array('$first' => '$apply_to_airport'),
    // 				'corporate_trip_discount' => array('$first' => '$corporate_trip_discount'),
    // 				'corporate_discount' => array('$first' => '$corporate_discount'),
    // 				'members' => array(
    // 					'$push' => '$passenger'
    // 				)
    // 			)
    // 		)
    // 	);
    // 	$result = $this->mongo_db->aggregate(MDB_CORPORATE_GROUP_NEW,$filter);
	// 	return (!empty($result['result'])) ? $result['result'] : [];
    // }

    // public function update_corporate_group($groupDetails,$id) {
    // 	$filter = array(
    // 		"_id" => (int)$id
    // 	);
    // 	$result = $this->mongo_db->update(MDB_CORPORATE_GROUP_NEW,$filter,array('$set'=>$groupDetails),array('upsert'=>false));
	// 	return (!empty($result) && empty($result['err'])) ? 1 : 0;	
    // }

    /* Sasidharan nov 15 2022 */
	public function get_passengers_list($filter = "", $page = 1) {
		$options = [
			"\$or" => [
				[
					'name' => new \MongoDB\BSON\Regex($filter, 'i'),
				],
				[
					'phone' => new \MongoDB\BSON\Regex($filter, 'i'),
				]
			],
			'user_status'=>'A',
		];
		$project = [
			"name" => 1,
			"_id" => 1,
			"phone" => 1
		];
		$totalPassengers = $this->mongo_db->count(MDB_PASSENGERS,$options);
		$offset = 0;
		if($page != 0 && $page != 1) {
			$offset = $page * 30;
		}

		$passengers = $this->mongo_db->find(MDB_PASSENGERS,$options,$project)->skip($offset)->limit(30);
		$passengers = !empty($passengers) ? iterator_to_array($passengers) : [];
		$passengersList = [];

		foreach ($passengers as $key => $value) {
			$newArray = [
				"id" => $value['_id']."--".$value['name']."--".$value['phone'],
				"text" => $value['name']."-".$value['phone'],
			];
			array_push($passengersList,$newArray);
		}

		$response = [];
		$response['results'] = $passengersList;
		$response['count_filtered'] = $totalPassengers;
		$response['pagination'] = ["more" => ($totalPassengers >  ($offset + 30))];
		return $response;
	}

	public function validate_category_group($arr) {
        return Validation::factory($arr)
        	->rule('group_name', 'not_empty');
    }

    /* Fix this in furure i have no time to do this... */
    /*
	    public function checkPassengerAlreadyInGroup($ids,$id = "") {

			if($id != "") {
				$aggregationFilter = array(
					array(
						'$match' => array('_id' =>  array( '$ne' => (int)$id ) )
					),
					array(
						'$project' => array(
							"_id" => 0,
							"group_name" => '$group_name',
							"members" => array(
								'$filter' => array(
									"input" => '$members',
									"as" => "member",
									"cond" =>  array(
					                   '$setIsSubset' => [['$$member'],$ids]           
					                )
								)
							)
						)
					),
					array( '$unwind' => '$members'),
					array(
						'$group' => array(
							'_id' => '$_id',
							"group_name" => array('$first' => '$group_name'),
	            			"members" => array('$push' => '$members')
						)
					)
				);

			} else {
				$aggregationFilter = array(
					array(
						'$project' => array(
							"_id" => 0,
							"group_name" => '$group_name',
							"members" => array(
								'$filter' => array(
									"input" => '$members',
									"as" => "member",
									"cond" =>  array(
					                   '$setIsSubset' => [['$$member'],$ids]           
					                )
								)
							)
						)
					),
					array( '$unwind' => '$members'),
					array(
						'$group' => array(
							'_id' => '$_id',
							"group_name" => array('$first' => '$group_name'),
	            			"members" => array('$push' => '$members')
						)
					)
				);
			}

			$result = $this->mongo_db->aggregate(MDB_CORPORATE_GROUP_NEW,$aggregationFilter);
			return (!empty($result['result'])) ? $result['result'] : [];
	    }
    */

    public function add_corporate_group($groupDetails) {

    	$rs = $this->mongo_db->find(MDB_PROMOCODE_CORPORATE_GROUP,[],['_id'])->sort(['_id'=>-1])->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;

		$groupDetails['_id'] = $inc_id;

		$response = $this->mongo_db->insert(MDB_PROMOCODE_CORPORATE_GROUP,$groupDetails);
		return (!empty($response) && empty($response['err'])) ? 1 : 0;
    }

    public function countAllCorporateGroups() {
		$result = $this->mongo_db->count(MDB_PROMOCODE_CORPORATE_GROUP,[],[]);
		return $result;
    }

    public function get_corporate_groups($offset = 0, $limit = REC_PER_PAGE) {
		$result = $this->mongo_db->find(MDB_PROMOCODE_CORPORATE_GROUP,[],['_id','group_name'])->sort(['_id'=>1])->skip($offset)->limit($limit);
		return (!empty($result))?iterator_to_array($result):[];	
    }

    public function get_all_corporate_groups() {
		$result = $this->mongo_db->find(MDB_PROMOCODE_CORPORATE_GROUP,[],['_id','group_name']);
		return (!empty($result))?iterator_to_array($result):[];	
    }

    public function getGroupInfo($id) {
    	$filter = [
    		['$match' => [
    			'_id' => (int)$id
    		]],
    		[
    			'$project' => [
    				'_id' => '$_id',
    				'group_name' => '$group_name',
    			]
    		],
    	];
    	$result = $this->mongo_db->aggregate(MDB_PROMOCODE_CORPORATE_GROUP,$filter);
		return (!empty($result['result'])) ? $result['result'] : [];
    }

    public function update_corporate_group($groupDetails,$id) {
    	$filter = [
    		"_id" => (int)$id
    	];
    	$result = $this->mongo_db->update(MDB_PROMOCODE_CORPORATE_GROUP,$filter,['$set'=>$groupDetails],['upsert'=>false]);
		return (!empty($result) && empty($result['err'])) ? 1 : 0;	
    }

}
