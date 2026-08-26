<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Transaction model details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Transaction extends Model
{
    /**
     ****__construct()**
     *** Common Function in this model
     */
    public function __construct()
    {
        //** Session variables initialization goes here **//
        $this->session         = Session::instance();
        $this->username        = $this->session->get("username");
        $this->admin_username  = $this->session->get("username");
        $this->admin_userid    = $this->session->get("id");
        $this->admin_email     = $this->session->get("email");
        $this->user_admin_type = $this->session->get("user_type");
        $this->userid          = $this->session->get('userid');
        $this->country_id      = $this->session->get('country_id');
        $this->state_id        = $this->session->get('state_id');
        $this->city_id         = $this->session->get('city_id');
        $this->currentdate     = Commonfunction::getCurrentTimeStamp();
        //MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
        $this->common_model      = Model::factory('commonmodel');
    }
    /**
     ****Company list function**
     *** Returns total list of the company
     */
    public function company_list()
    {
        $result = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->where(PEOPLE . '.user_type', '=', 'C')->order_by('created_date', 'desc')->execute()->as_array();
        return $result;
    }
    /**
     ****Company count function**
     *** Returns total count of the company
     */
    public function count_company_list()
    {
        $result = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->where(PEOPLE . '.user_type', '=', 'C')->order_by('created_date', 'desc')->execute()->as_array();
        return count($result);
    }
    /**
     ****Company list function**
     *** Returns overall list of the company with limit, offset for pagination
     */
    public function all_company_list($offset, $val)
    {
        $result  = DB::select()->from(COMPANY)->join(PEOPLE, 'LEFT')->on(PEOPLE . '.id', '=', COMPANY . '.userid')->where(PEOPLE . '.user_type', '=', 'C')->order_by('created_date', 'desc')->limit($val)->offset($offset)->execute()->as_array();
        $details = [];
        foreach ($result as $key => $res) {
            $details[$key]['no_of_taxi']      = $this->taxicount($res['cid']);
            $details[$key]['no_of_driver']    = $this->drivercount($res['cid']);
            $details[$key]['no_of_manager']   = $this->managercount($res['cid']);
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
        return $details;
    }
    /**
     ****Company list function**
     *** Returns overall list of the company
     */
    public static function get_allcompany()
    {
        $result = DB::select()->from(COMPANY)->order_by('company_name', 'asc')->execute()->as_array();
        return $result;
    }
    /**
     ****Company list function**
     *** Returns overall list of the company based on status
     */
    public function get_allcompany_tranaction($status = "")
    {
        /*$result = DB::select()->from(COMPANY);
        if ($status != "") {
            $result->where('company_status', '=', $status);
        }
        return $result->order_by('company_name', 'asc')->execute()->as_array();*/
        
        //MongoDB
        $condition = (!empty($status))?['companydetails.company_status'=>$status]:[];
        $result = $this->mongo_db->find(MDB_COMPANY,$condition,['_id','companydetails.company_name'])->sort(['companydetails.company_name'=>1]);
        //echo '<pre>';print_r(iterator_to_array($result));exit;
        return (!empty($result))?iterator_to_array($result):[];
    }
    /**
     ****Transaction list function**
     *** Returns overall transaction list && Count also
     */
    public function transaction_details($list, $company, $manager_id, $taxiid, $driverid, $passengerid, $startdate, $enddate, $transaction_id, $payment_type, $offset = '', $val = '',$download = '')
    {

        if($list == 'upcoming') {
             $startdate              = date('Y-m-d 00:00:00');//2017-01-24 00:00:00
        }
        //echo $list.','. $company.','. $manager_id.','. $taxiid.','. $driverid.','. $passengerid.','. $startdate.','. $enddate.','. $transaction_id.','. $payment_type.','.$offset .','. $val;
        //exit;
        $usertype = $this->user_admin_type;
        
        // Condition to search based on taxi and driver for user type "Managers" //
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            // Function to get taxi details //
            $taxilist = $this->gettaxidetails($company, $manager_id);
            if (count($taxilist) > 0) {
                foreach ($taxilist as $key => $taxis) {
                    $tid[] = isset($taxis["taxi_id"]) ? $taxis["taxi_id"] : $taxis["_id"];
                }
                $taxi_ids = Commonfunction::mongo_format_array($tid);
            } else {
                $taxi_ids = [];
            }
            //echo 'taxilist=>';print_r($taxi_ids);echo '<br>';
            // Function to get driver details //
            $driverlist = $this->getdriverdetails($company, $manager_id);
            if (count($driverlist) > 0) {
                foreach ($driverlist as $key => $drivers) {
                    $cdriver_id[] = $drivers["id"];
                }
                $driver_ids = Commonfunction::mongo_format_array($cdriver_id);
            } else {
                $driver_ids = [];
            }
            //echo 'driverlist=>';print_r($driver_ids);echo '<br>';
        }
        // Function to get passenger details //
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        // Condition to search based on passengers //
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $key => $passengers) {
                $cpassenger_id[] = $passengers["id"];
            }
            $passenger_ids = Commonfunction::mongo_format_array($cpassenger_id);
        } else {
            $passenger_ids = [];
        }
        //echo 'passengerlist=>';print_r($passenger_ids);echo '<br>';//exit;
        //echo $startdate.'xxx'.$enddate;
        $date_condition = [];
        if ($startdate != "") {
            if( $list == 'success' || $list == 'inprogress')
            {
                $date_condition = [
                    'actual_pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                    ]
                ];
            }
            else
            {
                $date_condition = [
                    'pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                    ]
                ];
            }
        }
        
        // Condition to search based on transaction id //
        $trans_condition = [];
        if ($transaction_id != '') {
            $trans_condition = [
                'trans._id' => (int)$transaction_id
            ];
        }
        // Condition to search based on status //
        $condition = [];
        if ($list == 'all') {
            $condition = [];
        } else if ($list == 'success') {
            $condition = [
                'travel_status' => 1,
                'driver_reply' => 'A'
            ];
        } else if ($list == 'upcoming') {
            $condition = ['driver_reply' => 'A',"travel_status"=> ['$in'=>[0,3,9]]];
        } else if ($list == 'inprogress') {
            $condition = ['driver_reply' => 'A',"travel_status"=> ['$in'=>[5,2]]];
        } else if ($list == 'cancelled') {
            /*$condition = array("driver_reply"=> array('$in'=>array('C','A')),"travel_status"=> array('$in'=>array(0,4)));*/
            $condition = ["travel_status"=> ['$in'=>[0,4,8]]];
        } else if ($list == 'rejected') {
            $condition = [
                'driver_reply' => 'R'
            ];
        }
        $pay_condition = [];
        // Condition to search based on payment type //
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $pay_condition = [
                    'trans.payment_type' =>  $payment_type
                ];
            }
        }
        // Condition to search based on company //
        $company_condition = [];
        if (($company != "") && ($company != "All")) {
            $company_condition = [
                'company_id' => (int) $company
            ];
        }
        // Condition to search based on taxi id //
        $taxi_condition = [];
        if (($taxiid != "All") && !empty($taxiid) ) {
            $taxi_condition = [
                'taxi_id' => (int) $taxiid
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $taxi_condition = [
                        'taxi_id' => [
                            '$in' => $taxi_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on driver id //
        $driver_condition = [];
        if (($driverid != "All") && !empty($driverid)) {
            //echo "HELLO DRIVER".$driverid;exit;
            $driver_condition = [
                "driver_id" => (int) $driverid
            ];
        } else {
            //  echo "HELLO DRIVER ELSE".$driverid;exit;
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $driver_condition = [
                        "driver_id" => [
                            '$in' => $driver_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on passenger id //
        $passengers_condition = [];
        if (($passengerid != "") && ($passengerid != "All")) {
            $passengers_condition = [
                "passengers_id" => (int) $passengerid
            ];
        }
        
        $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition);
              
        if ($list == 'rejected') {
           // $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition);
            $common_arguments = [
                [
                    '$match' => $match_query
                ],[
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
                  [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => '$trans'
                ],
                [
                    '$match' => $pay_condition
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ],
                [
                    '$unwind' => '$fare_detail'
                ]
            ];
            if (empty($offset) && empty($val) && empty($download)) {
                $arguments = [
                    [
                        '$project' => [
                            '_id' => 0,
                            'id' => '$_id'
                        ]
                    ],
                    [
                        '$group' => [
                            '_id' => NULL,
                            'count' => [
                                '$sum' => 1
                            ]
                        ]
                    ]/*,
                    array(
                        '$sort' => array(
                            '_id' => 1
                        )
                    )*/
                ];
                $merge_arguments = array_merge($common_arguments,$arguments);
                //echo '<pre>';print_r($merge_arguments);exit;

                $table = MDB_PASSENGERS_LOGS;        

                if($list == 'all')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'success')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                
                }        
                else if($list == 'rejected')
                {
                    $table = MDB_PASSENGERSLOGS_REJECTED;
                }                
                else if($list == 'cancelled')
                {
                    $table = MDB_PASSENGERSLOGS_CANCELLED;
                }

                $result    = $this->mongo_db->aggregate($table, $merge_arguments);
                //echo '<pre>';print_r($result);exit;
                return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
            } else { 
                $arguments = [
                    [
                        '$project' => [
                            '_id' => 0,
                            'id' => '$_id',
                            'driver_id' => '$people._id',
                            'driver_name' => '$people.name',
                            'driver_phone' => '$people.phone',
                          //'passenger_name' => '$passengers.name',
                            'passenger_name' => ['$concat'=>['$passengers.name',' ','$passengers.lastname']],
                            'passenger_email' => '$passengers.email',
                            'passenger_phone' => '$passengers.phone',
                            'company_id' => '$company_id',
                            'company_name' => '$company.companydetails.company_name',
                            'createdate' => '$createdate',
                            'current_location' => '$current_location',
                            'drop_location' => '$drop_location',
                            'distance' => '$distance',
                            'used_wallet_amount' => '$used_wallet_amount',
                            'wallet_amount_used' => '$wallet_amount_used',
                            'travel_status' => '$travel_status',
                            'driver_reply' => '$driver_reply',
                            'driver_comments' => '$driver_comments',
                            'userid' => '$company.companydetails.userid',
                        ]
                    ]
                ];
                if(empty($download)){
                     $limitarguments = [                    
                                          
                        [
                            '$skip' => (int) $offset
                        ],
                        [
                            '$limit' => (int) $val
                        ]
                    ];
                    
                    $merge_arguments = array_merge($common_arguments,$arguments,$limitarguments);
                   
                }
                else{

                    $merge_arguments = array_merge($common_arguments,$arguments);
                }

                $table = MDB_PASSENGERS_LOGS;        

                if($list == 'all')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'success')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'rejected')
                {
                    $table = MDB_PASSENGERSLOGS_REJECTED;
                }                     
                else if($list == 'cancelled')
                {
                    $table = MDB_PASSENGERSLOGS_CANCELLED;
                }

                //echo '<pre>';print_r($merge_arguments);exit;
                $result    = $this->mongo_db->aggregate($table, $merge_arguments);
                //echo '<pre>';print_r($result);exit;
                return (!empty($result['result'])) ? $result['result'] : [];
            }
        } else { 
       //   $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition,$driver_condition, $condition,$corpquery);
        $mat_query_trans = array_merge($pay_condition, $trans_condition);

            $common_arguments = [
                [
                    '$match' => $match_query
                ],[
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],                                
            ];
            
            $condition_arg = [[
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ]/*,
                array(
                    '$unwind' => '$trans'
                )*/
            ];
             if(!empty($mat_query_trans))
                {
                 $mat = [['$match' => $mat_query_trans]];
            $condition_arg = array_merge($condition_arg,$mat);

                }

            if($list != 'inprogress' && $list != 'upcoming') {
                $common_arguments = array_merge($common_arguments,$condition_arg);
            }
            
            $driver_arg = [[
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ]/*,
                array(
                    '$unwind' => '$people'
                )*/
            ];
            
            $concat_arguments = [               
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ]/*,                               
                array(
                        '$sort' => array(
                            '_id' => -1
                        )
                    )*/
            ];
            if($list == 'upcoming') {
                $common_arguments = array_merge($common_arguments,$concat_arguments);
            }
            else if($list == 'missed') {
                $common_arguments = array_merge($common_arguments,$concat_arguments);
            }
            else {
                 $common_arguments = array_merge($common_arguments,$driver_arg,$concat_arguments);

                //$common_arguments = array_merge($driver_arg,$common_arguments,$concat_arguments);
            }
            
            
            if (empty($offset) && empty($val) && empty($download)) {
               $arguments = [
                    [
                        '$project' => [
                            '_id' => 0,
                            'id' => '$_id',
                            'fare'=>'$trans.fare'
                        ]
                    ],
                    ['$unwind' => ['path' => '$fare', 'preserveNullAndEmptyArrays' => true ]],
                   
                    [
                        '$group' => [
                            '_id' => NULL,
                            'count' => [
                                '$sum' => 1
                            ],
                            "total_fare" => [ '$sum' => '$fare' ]
                        ]
                    ]/*,
                    array(
                        '$sort' => array(
                            'id' => 1
                        )
                    )*/
                ];
                //$options = array("allowDiskUse" => true);
                $merge_arguments = array_merge($common_arguments,$arguments);
		//echo "<pre>";print_r($merge_arguments);exit();


        $table = MDB_PASSENGERS_LOGS;        

        if($list == 'all')
        {
            $table = MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($list == 'success')
        {
            $table = MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($list == 'rejected')
        {
            $table = MDB_PASSENGERSLOGS_REJECTED;
        } 
        else if($list == 'missed')
        {
            $table = MDB_PASSENGERSLOGS_MISSED;
        } 
        else if($list == 'cancelled')
        {
            $table = MDB_PASSENGERSLOGS_CANCELLED;
        }

		$result    = $this->mongo_db->aggregate($table, $merge_arguments); //,$options

                return (!empty($result['result']) && isset($result['result'][0])) ? $result['result'][0] : [];
            } else {
                
                $arguments = [                    
                    [
                        '$project' => [
                           // '_id' => 0,
                            'id' => '$_id',
                            'driver_id' => '$people._id',
                            'driver_name' => '$people.name',
                            'driver_phone' => '$people.phone',
                           // 'passenger_name' => '$passengers.name',
                            'passenger_name' => ['$concat'=>['$passengers.name',' ','$passengers.lastname']],

                            'passenger_email' => '$passengers.email',
                            'passenger_phone' => '$passengers.phone',
                            'company_id' => '$company_id',
                            'company_name' => '$company.companydetails.company_name',
                            'userid' => '$company.companydetails.userid',
                            'admin_amount' => '$trans.admin_amount',
                            'company_amount' => '$trans.company_amount',
                            'transaction_id' => '$trans._id',
                            'passengers_log_id' => '$trans.passengers_log_id',
                            'payment_type' => '$trans.payment_type',
                            'createdate' => '$createdate',
                            'current_location' => '$current_location',
                            'drop_location' => '$drop_location',
                            'promocode' => '$promocode',
                            'distance' => '$distance',
                            'nightfare' => '$trans.nightfare',
                            'wallet_amount_used' => '$trans.wallet_amount_used',
                            'eveningfare' => '$trans.eveningfare',
                            'passenger_discount' => '$trans.passenger_discount',
                            'used_wallet_amount' => '$used_wallet_amount',
                            'fare' => '$trans.fare',
                            'travel_status' => '$travel_status',
                            'driver_reply' => '$driver_reply',
                            'driver_comments' => '$driver_comments',
                            'distance_unit' => '$trans.distance_unit',
                            'pickup_time' => '$pickup_time',
                            'dispatch_time' => '$dispatch_time',
                            'total_fare_detail'=>['$sum'=>'$fare_detail.value'],
                            'fare_detail'=>'$fare_detail',
                            'cancel_reason'=>'$cancel_reason',
                            'payment_type' => ['$ifNull'=>['$trans.payment_type',0]],
                            'wallet_amount_used' => ['$ifNull'=>['$trans.wallet_amount_used',0]],
                            'pending_amt' => ['$ifNull'=>['$trans.pending_amt',0]],
                            'add_amt' => ['$ifNull'=>['$trans.add_amt',0]],
                            'driver_edit_status' => ['$ifNull'=>['$trans.driver_edit_status',0]],
                            'advance_payment' => ['$ifNull'=>['$trans.advance_payment',0]],
                            'additional_fare' =>['$arrayElemAt'=> ['$fare_detail', 3 ] ],
                        ]
                    ], [
                        '$sort' => [
                            '_id' => -1
                        ]
                    ]
                   
                ];
                $merge_arguments = array_merge($common_arguments,$arguments);
                if(empty($download)){
                    $tot =$val+$offset;           
                    
                   // echo "string";exit();
                     $limitarguments = [                    
                                          
                        [
                            '$limit' => (int) $tot
                        ],
                        [
                            '$skip' => (int) $offset
                        ]
                    ];
 
                 //   $merge_arguments = array_merge($common_arguments,$limitarguments,$arguments);
                    $merge_arguments = array_merge($common_arguments,$arguments,$limitarguments);
                   
                }
//print_r($merge_arguments); die();
               /*seg else{

 $download_arg = array(array('$unwind' => array('path' => '$fare', 'preserveNullAndEmptyArrays' => true )),
                      array('$group' => array("_id" => array('payment_type'=>'$payment_type'),
                                "total_fare" => array( '$sum' => '$fare' ),
                                "total_edited_fare_per_type" => array( '$sum' => '$total_fare_detail' ),
                                "details" => array( '$push' => array('id' => '$id','passengers_log_id'=>'$passengers_log_id','passenger_name'=>'$passenger_name','passenger_phone'=>'$passenger_phone','passenger_email' => '$passenger_email','driver_id'=>'$driver_id','driver_name'=>'$driver_name','driver_phone'=>'$driver_phone','createdate' => '$createdate','pickup_time' => '$pickup_time','dispatch_time' => '$dispatch_time','current_location' => '$current_location','drop_location' => '$drop_location','distance' => '$distance','nightfare' => '$nightfare','eveningfare' => '$eveningfare','passenger_discount'=>'$passenger_discount','fare'=>'$fare','company_id' => '$company_id','company_name' => '$company_name','userid'=>'$userid','admin_amount'=>'$admin_amount','company_amount'=>'$company_amount','transaction_id'=>'$transaction_id','promocode' => '$promocode','used_wallet_amount' => '$used_wallet_amount','travel_status' => '$travel_status','driver_reply' => '$driver_reply','driver_comments' => '$driver_comments','distance_unit'=>'$distance_unit','total_fare_detail'=>'$total_fare_detail','fare_detail'=>'$fare_detail','cancel_reason'=>'$cancel_reason') ),            
                                )
                            ),array(
                                '$sort' => array(
                                'payment_type' => 1
                                )
                            )
                        );
                    $merge_arguments = array_merge($common_arguments,$arguments,$download_arg);
                }seg*/
                 
	        //$options = array("allowDiskUse" => true);

                $table = MDB_PASSENGERS_LOGS;
                if($list == 'all')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'success')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'rejected')
                {
                    $table = MDB_PASSENGERSLOGS_REJECTED;
                }  
                else if($list == 'missed')
                {
                    $table = MDB_PASSENGERSLOGS_MISSED;
                } 
                else if($list == 'cancelled')
                {
                    $table = MDB_PASSENGERSLOGS_CANCELLED;
                } 

                $result    = $this->mongo_db->aggregate($table, $merge_arguments);
                //echo "<pre>";print_r($result);exit();

             // seg  if(empty($download)){
                    if(!empty($result['result'])){
                        for($i=0; $i<count($result['result']);$i++){
                            $result['result'][$i]['createdate'] = Commonfunction::convertphpdate('Y-m-d H:i:s',$result['result'][$i]['createdate']);
                            $result['result'][$i]['pickup_time'] = Commonfunction::convertphpdate('Y-m-d',$result['result'][$i]['pickup_time']);
                            $result['result'][$i]['additional_fare'] = $result['result'][$i]['additional_fare']['value'];
                        }
                    }
                     return (!empty($result['result'])) ? $result['result'] : [];

             //  seg }
              
               /*segelse{
                    $total_fare_knet = $total_fare_cash = $total_fare_card = $total_fare_pos = $total_fare_others = 0;
                    $total_edited_fare_knet = $total_edited_fare_cash = $total_edited_fare_card = $total_edited_fare_pos = $total_edited_fare_others = 0;
                    $knet_details=$cash_details=$card_details=$pos_details = $others_details=array();

//echo "<pre>";print_r($result);exit();
                foreach ($result['result'] as $key => $value) {
                    if(isset($value['_id']['payment_type'][0]) && $value['_id']['payment_type'][0]!=''){


                        if($value['_id']['payment_type'][0] == 1){
                            $total_fare_cash += $value['total_fare'];
                            $total_edited_fare_cash += $value['total_edited_fare_per_type'];

                            $cash_details = array_merge($cash_details,$value['details']);
                             
                        }
                        if($value['_id']['payment_type'][0] == 2){
                            $total_fare_card += $value['total_fare'];
                            $total_edited_fare_card += $value['total_edited_fare_per_type'];
                            $card_details = array_merge($card_details,$value['details']);
                             
                        }
                          if($value['_id']['payment_type'][0] == 3){
                            $total_fare_knet += $value['total_fare'];
                            $total_edited_fare_knet += $value['total_edited_fare_per_type'];
                            $knet_details = array_merge($knet_details,$value['details']);
                             
                        }
                          if($value['_id']['payment_type'][0] == 6){
                            $total_fare_pos += $value['total_fare'];
                            $total_edited_fare_pos += $value['total_edited_fare_per_type'];
                            $pos_details = array_merge($pos_details,$value['details']);
                             
                        }
                    }else{
                            $total_fare_others += $value['total_fare'];
                            $total_edited_fare_others += $value['total_edited_fare_per_type'];
                            $others_details = array_merge($others_details,$value['details']);
                        }

                  
                }
                $baba_result  =array();
                //echo count($cash_details);exit();
                if(isset($cash_details) && !empty($cash_details)){
                     $cash_result = array('_id'=>array('payment_type'=>1),'total_fare'=>$total_fare_cash,'total_edited_fare_per_type'=>$total_edited_fare_cash,'details'=>$cash_details);
                     array_push($baba_result,$cash_result);
                } 
                 if(isset($card_details) && !empty($card_details)){
                     $card_result = array('_id'=>array('payment_type'=>2),'total_fare'=>$total_fare_card,'total_edited_fare_per_type'=>$total_edited_fare_card,'details'=>$card_details);
                     array_push($baba_result,$card_result);
                }  
                if(isset($knet_details) && !empty($knet_details)){
                     $knet_result = array('_id'=>array('payment_type'=>3),'total_fare'=>$total_fare_knet,'total_edited_fare_per_type'=>$total_edited_fare_knet,'details'=>$knet_details);
                     array_push($baba_result,$knet_result);
                }   if(isset($pos_details) && !empty($pos_details)){
                     $pos_result = array('_id'=>array('payment_type'=>6),'total_fare'=>$total_fare_pos,'total_edited_fare_per_type'=>$total_edited_fare_pos,'details'=>$pos_details);
                     array_push($baba_result,$pos_result);
                }
                if(isset($others_details) && !empty($others_details)){
                     $others_result = array('_id'=>array('payment_type'=>0),'total_fare'=>$total_fare_others,'total_edited_fare_per_type'=>$total_edited_fare_others,'details'=>$others_details);
                     array_push($baba_result,$others_result);
                }

                
                //$baba_result = array('_id'=>array('payment_type'=>3),'total_fare'=>$total_fare_knet,'details'=>$knet_details);
           //   echo "<pre>";print_r(count($baba_result[0]['details']));exit();
                return (!empty($baba_result)) ? $baba_result : array();
               }seg*/
            }//else part of empty of offset and download
        }//end of else
    }
    /**
     ****Reject/Cancel Trips Count function**
     *** Returns overall count of Reject/Cancel Trips
     */
    public function count_rejcancel_list($company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate)
    {
        $usertype = $this->user_admin_type;
        //** Condition to search based on taxi and driver id in manager login **//
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
            //** function to get taxi details **//
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            //** function to get driver details **//
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $driver_id  = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $driver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($driver_id, 0, strlen($driver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        //** Condition to search based on travel status **//
        $condition = "WHERE pl.travel_status = '0' and pl.driver_reply != 'A' ";
        //** Condition to search based on company **//
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        //** Condition to search based on taxi id **//
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= "AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        //** Condition to search based on driver id **//
        if (($driver_id != "All")) {
            $condition .= " and pl.driver_id =  '$driver_id'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= "AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        //** Condition to search based on passenger id **//
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        }
        //** Condition to search based on date **//
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        $query   = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc";
        //echo $query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    /**
     ****Reject/Cancel Trip List function**
     *** Returns overall list of Reject/Cancel Trips
     */
    public function rejcancel_details($company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $offset = '', $val = '')
    {
        $usertype = $this->user_admin_type;
        //** Condition to search based on taxi and driver id in manager login **//
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
            //** function to get taxi details **//
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            //** function to get driver details **//
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $cdriver_id = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $cdriver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        //** Condition to search based on travel status **//
        $condition = "WHERE pl.travel_status != '1' and pl.driver_reply != 'A' ";
        //** Condition to search based on company **//
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        //** Condition to search based on taxi id **//
        if (($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
                if (count($taxilist) > 0) {
                    $condition .= " AND pl.taxi_id IN ( $taxi_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        //** Condition to search based on driver id **//
        if (($driver_id != "All")) {
            $condition .= " and pl.driver_id  =  '$driver_id'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype = 'M')) {
                if (count($driverlist) > 0) {
                    $condition .= " AND pl.driver_id IN ( $driver_ids )";
                }
            } else {
                $condition .= "";
            }
        }
        //** Condition to search based on passenger id **//
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        }
        //** Condition to search based on date **//
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        $query   = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc limit $val offset $offset";
        //echo $query;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /** Function Used for Driver Dashboard Transaction log ****/
    public function front_driver_transaction_details($company, $taxiid, $driver_id, $startdate, $enddate, $offset = '', $val = '')
    {
        $condition = "WHERE pl.travel_status = '1' and pl.driver_reply = 'A' ";
        //** Condition to search based on company id **//
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        //** Condition to search based on taxi id **//
        if (($taxiid != "") && ($taxiid != "All")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        }
        //** Condition to search based on driver id **//
        if (($driver_id != "") && ($driver_id != "All")) {
            $condition .= " and pl.driver_id =  '$driver_id'";
        }
        //** Condition to search based on date **//
        if ($startdate != "") {
            $condition .= "and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        $query   = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc limit $val offset $offset";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;
    }
    /************* Get Taxi List ******************/
    public function gettaxidetails($company_id, $manager_id)
    {
        $usertype = $this->user_admin_type;
        /*$joins     = "";
        $condition = "";
        if (($manager_id != "") && ($manager_id != "All") || ($usertype == 'M')) {
        if ($usertype == 'M') {
        $manager_id = $this->userid;
        }
        // function to get manager details ( city, state, country and company ) //
        $manager_details = $this->manager_details($manager_id);
        $country_id      = $manager_details['login_country'];
        $state_id        = $manager_details['login_state'];
        $city_id         = $manager_details['login_city'];
        $company_id      = $manager_details['company_id'];
        
        // Condition to search based on state, city, company id in manager login //
        $joins = "LEFT JOIN `country` ON (`taxi`.`taxi_country` = `country`.`country_id`) LEFT JOIN `state` ON (`taxi`.`taxi_state` = `state`.`state_id`) LEFT JOIN `city` ON (`taxi`.`taxi_city` = `city`.`city_id`) ";
        $condition .= "where `taxi_state` = '" . $state_id . "' AND `taxi_city` = '" . $city_id . "' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        if (($company_id != "") && ($company_id != "All")) {
        $condition .= "AND `taxi_company` = '" . $company_id . "'";
        }
        } else {
        // Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
        $condition .= "Where `taxi_company` = '" . $company_id . "'";
        }
        }
        $query   = "SELECT * FROM " . TAXI . " $joins $condition ORDER BY `taxi_id` DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        
        //MongoDB
        if (($manager_id != "") && ($manager_id != "All") || ($usertype == 'M')) {
            if ($usertype == 'M') {
                $manager_id      = $this->userid;
                // function to get manager details ( city, state, country and company ) //
                $manager_details = $this->manager_details($manager_id);
                $country_id      = $manager_details['login_country'];
                $state_id        = $manager_details['login_state'];
                $city_id         = $manager_details['login_city'];
                $company_id      = $manager_details['company_id'];
            } else {
                $country_id = $this->country_id;
                $state_id   = $this->state_id;
                $city_id    = $this->city_id;
            }
            $match_query = [
                'taxi.taxi_country' => (int) $country_id,
                'taxi.taxi_state' => (int) $state_id,
                'taxi.taxi_city' => (int) $city_id
            ];
            if (($company_id != "") && ($company_id != "All")) {
                $match_query = [
                    'taxi.taxi_company' => (int) $company_id,
                    'taxi.taxi_country' => (int) $country_id,
                    'taxi.taxi_state' => (int) $state_id,
                    //'taxi.taxi_city' => (int) $city_id
                ];
            }
            $arguments = [
                [
                    '$unwind' => '$stateinfo'
                ],
                [
                    '$unwind' => '$stateinfo.cityinfo'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_TAXI,
                        'localField' => 'stateinfo.cityinfo.city_id',
                        'foreignField' => "taxi_country",
                        'foreignField' => "taxi_state",
                        'foreignField' => "taxi_city",
                        'as' => "taxi"
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
                        '_id' => 0,
                        'taxi_id' => '$taxi._id',
                        'taxi_no' => '$taxi.taxi_no'
                    ]
                ],
                [
                    '$sort' => [
                        'taxi.created_date' => -1
                    ]
                ]
            ];
            $result    = $this->mongo_db->aggregate(MDB_CSC, $arguments);
            //echo "<pre>"; print_r($result);exit;
            return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
        } else {
            // Condition to search based on company id //
            if (($company_id != "") && ($company_id != "All")) {
                $match_query = [
                    'taxi_company' => (int) $company_id,
                ];
                $arguments   = [
                     [
                        '$match' => $match_query
                    ],
                    [
                        '$project' => [
                            '_id' => 0,
                            'taxi_id' => '$_id',
                            'taxi_no' => '$taxi_no'
                        ]
                    ],
                    [
                        '$sort' => [
                            'taxi_country' => -1
                        ]
                    ]
                ];
                $result      = $this->mongo_db->aggregate(MDB_TAXI, $arguments);
                //echo "<pre>else"; print_r($arguments);exit;
                return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
            }
        }
    }
    /************* Get Driver List ******************/
    public function getdriverdetails($company_id, $manager_id)
    {
        $usertype = $this->user_admin_type;
        //echo $company_id.'==>'.$manager_id;//exit;
        /*if (($manager_id != "") && ($manager_id != "All")) {
        // function to get manager details ( city, state, country and company ) //
        $manager_details = $this->manager_details($manager_id);
        $country_id      = $manager_details[0]['login_country'];
        $state_id        = $manager_details[0]['login_state'];
        $city_id         = $manager_details[0]['login_city'];
        $company_id      = $manager_details[0]['company_id'];
        } else {
        $country_id = $this->country_id;
        $state_id   = $this->state_id;
        $city_id    = $this->city_id;
        }
        
        $joins     = "";
        $condition = "WHERE `user_type` = 'D'";
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
        // Condition to search based on state, city, company id in manager login //
        $joins = "LEFT JOIN `country` ON (`" . PEOPLE . "`.`login_country` = `country`.`country_id`) LEFT JOIN `state` ON (`" . PEOPLE . "`.`login_state` = `state`.`state_id`) LEFT JOIN `city` ON (`" . PEOPLE . "`.`login_city` = `city`.`city_id`) ";
        $condition .= " and `login_country` = '" . $country_id . "' AND `login_state` = '" . $state_id . "' AND `login_city` = '" . $city_id . "' AND `country`.`country_status` = 'A' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        }
        // Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
        $condition .= " AND `company_id` = '" . $company_id . "'";
        }
        $query   = "SELECT * FROM " . PEOPLE . " $joins $condition  ORDER BY `id` DESC";
        echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        //MongoDB
        if (($manager_id != "") && ($manager_id != "All") || ($usertype == 'M')) {
            // function to get manager details ( city, state, country and company ) //
            $manager_details = $this->manager_details($manager_id);
            $country_id      = $manager_details['login_country'];
            $state_id        = $manager_details['login_state'];
            $city_id         = $manager_details['login_city'];
            $company_id      = $manager_details['company_id'];
        } else {
            $country_id = $this->country_id;
            $state_id   = $this->state_id;
            $city_id    = $this->city_id;
        }
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $match_query = [
                'people.user_type' => 'D',
                'people.company_id' => $company_id,
                'people.login_country' => (int) $country_id,
                'people.login_state' => (int) $state_id,
                'people.login_city' => (int) $city_id
            ];
            $arguments   = [
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
                        'foreignField' => "login_country",
                        'foreignField' => "login_state",
                        'foreignField' => "login_city",
                        'as' => "people"
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
                        '_id' => 0,
                        'id' => '$people._id',
                        'name' => '$people.name',
                        'lastname' => '$people.lastname'
                    ]
                ],
                [
                    '$sort' => [
                        'created_date' => -1
                    ]
                ]
            ];
            
            $result      = $this->mongo_db->aggregate(MDB_CSC, $arguments);
            //echo "<pre>if"; print_r($arguments);exit;
            return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
        }
        // Condition to search based on company id //
        
        if (($company_id != "") && ($company_id != "All")) {
            
            $match_query = [
                'user_type' => 'D',
                'company_id' => (int) $company_id,
            ];
            $arguments   = [
                 [
                    '$match' => $match_query
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'name' => '$name',
                        'lastname' => '$lastname'
                    ]
                ],
                [
                    '$sort' => [
                        'created_date' => -1
                    ]
                ]
            ];
            $result      = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
            //echo "<pre>else"; print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    /************* Function to get Manager Details ******************/
    public function manager_details($manager_id)
    {
        /*$query   = "SELECT * FROM " . PEOPLE . " where user_type='M' and id='$manager_id' ORDER BY `id` DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        //MongoDB
        $result = $this->mongo_db->find_one(MDB_PEOPLE, [
            'user_type' => 'M',
            '_id' => (int) $manager_id
        ], [
            'login_country',
            'login_state',
            'login_city',
            'company_id'
        ]);
        return (!empty($result)) ? $result : [];
    }
    /************* Get Taxi List ******************/
    public function getmanager_taxidetails($company_id, $manager_id)
    {
        //** function to get manager details ( city, state, country and company ) **//
        $manager_details = $this->manager_details($manager_id);
        $country_id      = isset($manager_details['login_country'])?$manager_details['login_country']:DEFAULT_COUNTRY;
        $state_id        = isset($manager_details['login_state'])?$manager_details['login_state']:DEFAULT_STATTE;
        $city_id         = isset($manager_details['login_city'])?$manager_details['login_city']:DEFAULT_CITY;
        $manager_cmid    = $manager_details['company_id'];
        
        /*//** Condition to search based on state, city, company id //
        $joins           = "LEFT JOIN `country` ON (`taxi`.`taxi_country` = `country`.`country_id`) LEFT JOIN `state` ON (`taxi`.`taxi_state` = `state`.`state_id`) LEFT JOIN `city` ON (`taxi`.`taxi_city` = `city`.`city_id`) ";
        $condition       = "where `taxi_country` = '" . $country_id . "' AND `taxi_state` = '" . $state_id . "' AND `taxi_city` = '" . $city_id . "' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        //** Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
            $condition .= "AND `taxi_company` = '" . $company_id . "'";
        } else {
            $condition .= "AND `taxi_company` = '" . $manager_cmid . "'";
        }
        $query   = "SELECT * FROM " . TAXI . " $joins $condition ORDER BY `taxi_id` DESC";
        echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        
         //MongoDB
        $cid = (($company_id != "") && ($company_id != "All"))?$company_id:$manager_cmid;
        $match_query = [
            'taxi.taxi_company' => (int) $cid,
            'taxi.taxi_country' => (int) $country_id,
            'taxi.taxi_state' => (int) $state_id,
            'taxi.taxi_city' => (int) $city_id
        ];
        $arguments = [
            [
                '$unwind' => '$stateinfo'
            ],
            [
                '$unwind' => '$stateinfo.cityinfo'
            ],
            [
                '$lookup' => [
                    'from' => MDB_TAXI,
                    'localField' => 'stateinfo.cityinfo.city_id',
                    'foreignField' => "taxi_city",
                    'as' => "taxi"
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
                    '_id' => 0,
                    'taxi_id' => '$taxi._id',
                    'taxi_no' => '$taxi.taxi_no'
                ]
            ],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
        ];
        $result    = $this->mongo_db->aggregate(MDB_CSC, $arguments);
        //echo "<pre>"; print_r($result['result']);exit;
        return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
        
    }
    /************* Get Driver List ******************/
    public function getmanager_driverdetails($company_id, $manager_id)
    {
        //** function to get manager details ( city, state, country and company ) **//
        $manager_details = $this->manager_details($manager_id);
        $country_id      = $manager_details['login_country'];
        $state_id        = $manager_details['login_state'];
        $city_id         = $manager_details['login_city'];
        $manager_cmid    = $manager_details['company_id'];
        
        /*//** Condition to search based on state, city, company id and usertype //
        $condition       = "WHERE `user_type` = 'D'";
        $joins           = "LEFT JOIN `country` ON (`" . PEOPLE . "`.`login_country` = `country`.`country_id`) LEFT JOIN `state` ON (`" . PEOPLE . "`.`login_state` = `state`.`state_id`) LEFT JOIN `city` ON (`" . PEOPLE . "`.`login_city` = `city`.`city_id`) ";
        $condition .= " and `login_country` = '" . $country_id . "' and `login_state` = '" . $state_id . "' AND `login_city` = '" . $city_id . "' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        //** Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
            $condition .= "AND `company_id` = '" . $company_id . "'";
        } else {
            $condition .= "AND `company_id` = '" . $manager_cmid . "'";
        }
        $query   = "SELECT * FROM " . PEOPLE . " $joins $condition  ORDER BY `id` DESC";
        echo $query;exit;
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        
        $cid = ($company_id != "") && ($company_id != "All")?$company_id:$manager_cmid;
        //MongoDB
        $match_query = [
            'people.user_type' => 'D',
            'people.company_id' => (int)$cid,
            'people.login_country' => (int) $country_id,
            'people.login_state' => (int) $state_id,
            'people.login_city' => (int) $city_id
        ];
        $arguments   = [
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
                    'foreignField' => "login_city",
                    'as' => "people"
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
                    '_id' => 0,
                    'id' => '$people._id',
                    'name' => '$people.name',
                    'lastname' => '$people.lastname'
                ]
            ],
            [
                '$sort' => [
                    '_id' => -1
                ]
            ]
        ];
        
        $result      = $this->mongo_db->aggregate(MDB_CSC, $arguments);
        //echo "<pre>if"; print_r($result['result']);exit;
        return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
    }
    /************* Get Manager List ******************/
    public function getmanagerdetails($company_id)
    {
        $country_id = $this->country_id;
        $state_id   = $this->state_id;
        $city_id    = $this->city_id;
        $usertype   = $this->user_admin_type;
        /*// Condition to search based on state, city, company id and usertype //
        $joins      = "";
        $condition  = "WHERE `user_type` = 'M'";
        if ($usertype == 'M') {
        $joins = "LEFT JOIN `state` ON (`" . PEOPLE . "`.`login_state` = `state`.`state_id`) LEFT JOIN `city` ON (`" . PEOPLE . "`.`login_city` = `city`.`city_id`) ";
        $condition .= "and `login_state` = '" . $state_id . "' AND `login_city` = '" . $city_id . "' AND `state`.`state_status` = 'A' and `city`.`city_status` = 'A'";
        }
        // Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
        $condition .= "AND `company_id` = '" . $company_id . "'";
        }
        $query   = "SELECT * FROM " . PEOPLE . " $joins $condition  ORDER BY `id` DESC";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
        // Condition to search based on state, city, company id and usertype //
        if ($usertype == 'M') {
            $match_query = [
                'people.user_type' => 'M',
                'people.login_country' => (int) $country_id,
                'people.login_state' => (int) $state_id,
                'people.login_city' => (int) $city_id
            ];
            $arguments   = [
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
                        'foreignField' => "login_city",
                        'as' => "people"
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
                        '_id' => 0,
                        'id' => '$people._id',
                        'name' => '$people.name',
                        'lastname' => '$people.lastname'
                    ]
                ],
                [
                    '$sort' => [
                        'people.created_date' => -1
                    ]
                ]
            ];
            $result      = $this->mongo_db->aggregate(MDB_CSC, $arguments);
            //echo "<pre>if"; print_r($result['result']);exit;
            return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
        }
        // Condition to search based on company id //
        if (($company_id != "") && ($company_id != "All")) {
            $match_query = [
                'user_type' => 'M',
                'company_id' => (int) $company_id,
            ];
            $arguments   = [
                 [
                    '$match' => $match_query
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'name' => '$name',
                        'lastname' => '$lastname'
                    ]
                ],
                [
                    '$sort' => [
                        'created_date' => -1
                    ]
                ]
            ];
            $result      = $this->mongo_db->aggregate(MDB_PEOPLE, $arguments);
            //echo "<pre>else"; print_r($result['result']);exit;
            return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
            /*$result = $this->mongo_db->find(MDB_PEOPLE, array(
                'user_type' => 'M',
                'company_id' => (int) $company_id
            ), array(
                '_id',
                'name',
                'lastname'
            ))->sort(array(
                'created_date' => -1
            ));
            echo '<pre>else';print_r(iterator_to_array($result));exit;
            return (!empty($result)) ? iterator_to_array($result) : array();*/
        }
    }
   
    /** Get Passengers List **************/
public function getpassengerdetails($company_id, $manager_id)
   {
       //echo $company_id;
       $usertype    = $this->user_admin_type;        
       $match_query = ['companydetails.company_status'=>['$ne'=>'T']];
       if (($company_id != "") && ($company_id != "All")) {
           $match_query = [
               'passengers.passenger_cid' => (int) $company_id
           ];
       }
       $match_query = ['passengers.name' => ['$ne' => '']];
      
       $arguments = [
           [
               '$lookup' => [
                   'from' => MDB_PASSENGERS,
                   'localField' => "_id",
                   'foreignField' => "passenger_cid",
                   'as' => "passengers"
               ]
           ],
           [
               '$unwind' => '$passengers'
           ],
           [
               '$match' => $match_query
           ],
           [
               '$project' => [
                   '_id' => 0,
                   'id' => '$passengers._id',
                   'name' => '$passengers.name',
                   'company_name' => '$companydetails.company_name'
               ]
           ],
           [
               '$sort' => [
                   'passengers.created_date' => -1
               ]
           ]
       ];
       $result    = $this->mongo_db->aggregate(MDB_COMPANY, $arguments);
       //echo "<pre>"; print_r($result['result']);exit;
       return (!empty($result['result']) && isset($result['result'])) ? $result['result'] : [];
   }
    /**
     * ****export_data()****
     *@export user listings
     */
   public function export_data($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type)
    {
        $usertype        = $this->user_admin_type;
        if($list == 'upcoming') {
             $startdate              = date('Y-m-d 00:00:00');
        }
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            // Function to get taxi details //
            $taxilist = $this->gettaxidetails($company, $manager_id);
            if (count($taxilist) > 0) {
                //$taxi_id  = "";
                foreach ($taxilist as $key => $taxis) {
                    $tid[] = isset($taxis["taxi_id"]) ? $taxis["taxi_id"] : $taxis["_id"];
                }
                //$taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
                $taxi_ids = Commonfunction::mongo_format_array($tid);
            } else {
                //$taxi_ids = "";
                $taxi_ids = [];
            }
            //echo 'taxilist=>';print_r($taxi_ids);echo '<br>';
            // Function to get driver details //
            $driverlist = $this->getdriverdetails($company, $manager_id);
            if (count($driverlist) > 0) {
                //$cdriver_id = "";
                foreach ($driverlist as $key => $drivers) {
                    $cdriver_id[] = $drivers["id"];
                    //$cdriver_id .= $drivers["id"] . ',';
                }
                //$driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
                $driver_ids = Commonfunction::mongo_format_array($cdriver_id);
            } else {
                //$driver_ids = "";
                $driver_ids = [];
            }
            //echo 'driverlist=>';print_r($driver_ids);echo '<br>';
        }
        // Function to get passenger details //
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        // Condition to search based on passengers //
        if (count($passengerlist) > 0) {
            //$cpassenger_id = "";
            foreach ($passengerlist as $key => $passengers) {
                $cpassenger_id[] = $passengers["id"];
                //$cpassenger_id .= $passengers["id"] . ',';
            }
            //$passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
            $passenger_ids = Commonfunction::mongo_format_array($cpassenger_id);
        } else {
            //$passenger_ids = "";
            $passenger_ids = [];
        }
        //echo 'passengerlist=>';print_r($passenger_ids);echo '<br>';//exit;
        $date_condition = [];
        if ($startdate != "") {
            if( $list == 'success' || $list == 'inprogress')
            {
                $date_condition = [
                    'actual_pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                    ]
                ];
            }
            else
            {
                $date_condition = [
                    'pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                    ]
                ];
            }
        }
        // Condition to search based on transaction id //
        $trans_condition = [];
        if ($transaction_id != '') {
            $trans_condition = [
                'trans._id' => $transaction_id
            ];
        }
        // Condition to search based on status //
        $condition = [];
        if ($list == 'all') {
            $condition = [];
        } else if ($list == 'success') {
            $condition = [
                'travel_status' => 1,
                'driver_reply' => 'A'
            ];
        }  else if ($list == 'upcoming') {
            $condition = ['driver_reply' => 'A',"travel_status"=> ['$in'=>[0,3,9]]];
        } else if ($list == 'inprogress') {
            $condition = ['driver_reply' => 'A',"travel_status"=> ['$in'=>[5,2]]];
        } else if ($list == 'cancelled') {
            $condition = ["driver_reply"=> ['$in'=>['C','A']],"travel_status"=> ['$in'=>[0,4]]];
        } else if ($list == 'rejected') {
            $condition = [
                'driver_reply' => 'R'
            ];
        }
        $pay_condition = [];
        // Condition to search based on payment type //
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $pay_condition = [
                    'trans.payment_type' => (int) $payment_type
                ];
            }
        }
        // Condition to search based on company //
        $company_condition = [];
        if (($company != "") && ($company != "All")) {
            $company_condition = [
                'company_id' => (int) $company
            ];
        }
        // Condition to search based on taxi id //
        $taxi_condition = [];
        if (($taxiid != "All") && !empty($taxiid)) {
            $taxi_condition = [
                'taxi_id' => (int) $taxiid
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $taxi_condition = [
                        'taxi_id' => [
                            '$in' => $taxi_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on driver id //
        $driver_condition = [];
        if (($driver_id != "All") && !empty($driver_id)) {
            $driver_condition = [
                "driver_id" => (int) $driver_id
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $driver_condition = [
                        "driver_id" => [
                            '$in' => $driver_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on passenger id //
        $passengers_condition = [];
        if (($passengerid != "") && ($passengerid != "All")) {
            $passengers_condition = [
                "passengers_id" => (int) $passengerid
            ];
        }
        if ($list == 'rejected') {
            $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition, $pay_condition);
            //print_r($match_query);//exit;
             $common_arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
                  [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => '$trans'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ],
                 [
                    '$match' => $match_query
                ]
            ];


              $arguments = [
                    [
                        '$project' => [
                            '_id' => 0,
                            'id' => '$_id',
                            'driver_id' => '$people._id',
                            'driver_name' => '$people.name',
                            'driver_phone' => '$people.phone',
                            'passenger_name' => '$passengers.name',
                            'passenger_email' => '$passengers.email',
                            'passenger_phone' => '$passengers.phone',
                            'company_id' => '$company_id',
                            'company_name' => '$company.companydetails.company_name',
                            'createdate' => '$createdate',
                            'current_location' => '$current_location',
                            'drop_location' => '$drop_location',
                            'distance' => '$distance',
                            'used_wallet_amount' => '$used_wallet_amount',
                            'travel_status' => '$travel_status',
                            'driver_reply' => '$driver_reply',
                            'driver_comments' => '$driver_comments',
                            'userid' => '$company.companydetails.userid',
                        ]
                    ],
                    [
                        '$sort' => [
                            '_id' => 1
                        ]
                    ],
                    [
                        '$skip' => (int) $offset
                    ],
                    [
                        '$limit' => (int) $val
                    ]
                ];
                $merge_arguments = array_merge($common_arguments,$arguments);
                //echo '<pre>';print_r($merge_arguments);exit;

                $table = MDB_PASSENGERS_LOGS;        

                if($list == 'all')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'success')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'rejected')
                {
                    $table = MDB_PASSENGERSLOGS_REJECTED;
                }                      
                else if($list == 'cancelled')
                {
                    $table = MDB_PASSENGERSLOGS_CANCELLED;
                }                
                $result    = $this->mongo_db->aggregate($table, $merge_arguments);
                //echo '<pre>';print_r($result);exit;
                return (!empty($result['result'])) ? $result['result'] : [];
        } else {
            $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition, $pay_condition, $trans_condition);
             $common_arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],                                
            ];
            
            $condition_arg = [[
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => '$trans'
                ]
            ];
            
            if($list != 'inprogress' && $list != 'upcoming') {
                $common_arguments = array_merge($common_arguments,$condition_arg);
            }
            
            $driver_arg = [[
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ]
            ];
            
            $concat_arguments = [               
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ],                               
                [
                    '$match' => $match_query
                ],
                [
                        '$sort' => [
                            '_id' => 1
                        ]
                    ]
            ];
            if($list == 'upcoming') {
                $common_arguments = array_merge($common_arguments,$concat_arguments);
            } else {
                $common_arguments = array_merge($driver_arg,$common_arguments,$concat_arguments);
            }

             $arguments = [                    
                   [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'driver_id' => '$people._id',
                        'driver_name' => '$people.name',
                        'driver_phone' => '$people.phone',
                        'passenger_name' => '$passengers.name',
                        'email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'company_id' => '$company_id',
                        'company_name' => '$company.companydetails.company_name',
                        'userid' => '$company.companydetails.userid',
                        'admin_amount' => '$trans.admin_amount',
                        'company_amount' => '$trans.company_amount',
                        'transaction_id' => '$trans._id',
                        'passengers_log_id' => '$trans.passengers_log_id',
                        'payment_type' => '$trans.payment_type',
                        'createdate' => '$createdate',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'distance' => '$distance',
                        'nightfare' => '$trans.nightfare',
                        'eveningfare' => '$trans.eveningfare',
                        'used_wallet_amount' => '$used_wallet_amount',
                        'fare' => '$trans.fare',
                        'travel_status' => '$travel_status',
                        'driver_reply' => '$driver_reply',
                        'driver_comments' => '$driver_comments',
                        'distance_unit' => '$trans.distance_unit',
                        'comments' => '$comments',
                        'rating' => '$rating',
                        'company_tax' => '$company_tax',
                        'pickup_time' => '$pickup_time'

                    ]
                    ],
                    [
                        '$sort' => [
                            'id' => -1
                        ]
                    ]
                ];
                $merge_arguments = array_merge($common_arguments,$arguments);

                $table = MDB_PASSENGERS_LOGS;        

                if($list == 'all')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'success')
                {
                    $table = MDB_PASSENGERSLOGS_COMPLETED;
                }
                else if($list == 'rejected')
                {
                    $table = MDB_PASSENGERSLOGS_REJECTED;
                }                         
                else if($list == 'cancelled')
                {
                    $table = MDB_PASSENGERSLOGS_CANCELLED;
                }

                $result    = $this->mongo_db->aggregate($table, $merge_arguments);
                  for($i=0; $i<count($result['result']);$i++){
                    $result['result'][$i]['createdate'] = Commonfunction::convertphpdate('Y-m-d H:i:s',$result['result'][$i]['createdate']);
  $result['result'][$i]['pickup_time'] = Commonfunction::convertphpdate('Y-m-d',$result['result'][$i]['pickup_time']);
                }
           // echo '<pre>else';print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    /**
     * ****export_data()****
     *@export user listings as pdf
     */
    public function export_data_pdf($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type)
    {
        //$company;
        //$company,$taxiid,$driver_id,$startdate,$enddate,
        $usertype        = $this->user_admin_type;
        /*$condition       = '';
        $driver_reply    = '';
        $driver_comments = '';
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $cdriver_id = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $cdriver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        //echo $passenger_ids;
        if ($transaction_id != '') {
            $trans_condition = " and t.transaction_id like '%" . $transaction_id . "%'";
        } else {
            $trans_condition = '';
        }
        if ($list == 'all') {
            $condition = ""; //"WHERE pl.driver_reply = 'A' ";
        } else if ($list == 'success') {
            $condition = "WHERE pl.travel_status = '1' and pl.driver_reply = 'A' ";
        } else if ($list == 'cancelled') {
            $condition = "WHERE ((pl.travel_status = '4' and pl.driver_reply = 'A') or (pl.travel_status = '0' and pl.driver_reply = 'C'))";
        } else if ($list == 'rejected') {
            $condition = "WHERE pl.driver_reply = 'R'";
        }
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $condition .= " and payment_type = '$payment_type'";
            }
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All") && ($taxiid != "")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                $condition .= " AND pl.taxi_id IN ( $taxi_ids )";
            } else {
                $condition .= "";
            }
        }
        if (($driver_id != "All") && ($driver_id != "")) {
            $condition .= " and pl.driver_id =  '$driver_id'";
        } else if (($driver_id != "All") && ($driver_id == "")) {
            $condition .= "";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                $condition .= " AND pl.driver_id IN ( $driver_ids )";
            } else {
                $condition .= "";
            }
        }
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        $cpassenger_id = "";
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $passengers) {
                $cpassenger_id .= $passengers["id"] . ',';
            }
            $passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
        } else {
            $passenger_ids = "";
        }
        //echo $passenger_ids;
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        }
        if ($list == 'rejected') {
            $query = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition order by pl.passengers_log_id desc";
        } else {
            $query = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition $trans_condition order by pl.passengers_log_id desc";
        }
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return $results;*/
    
        //MongoDB
        //echo '<pre>';
        // Condition to search based on taxi and driver for user type "Managers" //
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            // Function to get taxi details //
            $taxilist = $this->gettaxidetails($company, $manager_id);
            if (count($taxilist) > 0) {
                //$taxi_id  = "";
                foreach ($taxilist as $key => $taxis) {
                    $tid[] = isset($taxis["taxi_id"]) ? $taxis["taxi_id"] : $taxis["_id"];
                    //$tid[] = isset($taxis["taxi_id"])?$taxis["taxi_id"]:$taxis["_id"];
                    //$taxi_id .= $tid . ',';
                }
                //$taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
                $taxi_ids = Commonfunction::mongo_format_array($tid);
            } else {
                //$taxi_ids = "";
                $taxi_ids = [];
            }
            //echo 'taxilist=>';print_r($taxi_ids);echo '<br>';
            // Function to get driver details //
            $driverlist = $this->getdriverdetails($company, $manager_id);
            if (count($driverlist) > 0) {
                //$cdriver_id = "";
                foreach ($driverlist as $key => $drivers) {
                    $cdriver_id[] = $drivers["id"];
                    //$cdriver_id .= $drivers["id"] . ',';
                }
                //$driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
                $driver_ids = Commonfunction::mongo_format_array($cdriver_id);
            } else {
                //$driver_ids = "";
                $driver_ids = [];
            }
            //echo 'driverlist=>';print_r($driver_ids);echo '<br>';
        }
        // Function to get passenger details //
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        // Condition to search based on passengers //
        if (count($passengerlist) > 0) {
            //$cpassenger_id = "";
            foreach ($passengerlist as $key => $passengers) {
                $cpassenger_id[] = $passengers["id"];
                //$cpassenger_id .= $passengers["id"] . ',';
            }
            //$passenger_ids = substr($cpassenger_id, 0, strlen($cpassenger_id) - 1);
            $passenger_ids = Commonfunction::mongo_format_array($cpassenger_id);
        } else {
            //$passenger_ids = "";
            $passenger_ids = [];
        }
        //echo 'passengerlist=>';print_r($passenger_ids);echo '<br>';//exit;
        $date_condition = [];
        if ($startdate != "") {
            //$date_condition = array('createdate'=>array('$lte'=>$enddate));
            //$date_condition = array('createdate'=>array(array('$gte'=>$startdate),array('$lte'=>$enddate)));
            $date_condition = [
                   'createdate' => [
                    '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                    '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                ]
            ];
        }
        // Condition to search based on transaction id //
        $trans_condition = [];
        if ($transaction_id != '') {
            $trans_condition = [
                'trans._id' => $transaction_id
            ];
        }
        // Condition to search based on status //
        $condition = [];
        if ($list == 'all') {
            $condition = [];
        } else if ($list == 'success') {
            $condition = [
                'travel_status' => 1,
                'driver_reply' => 'A'
            ];
        } else if ($list == 'cancelled') {
            $condition = [
                "\$or" => [
                    [
                        'travel_status' => 4,
                        'driver_reply' => 'A'
                    ],
                    [
                        'travel_status' => 0,
                        'driver_reply' => 'C'
                    ]
                ]
            ];
        } else if ($list == 'rejected') {
            $condition = [
                'driver_reply' => 'R'
            ];
        }
        $pay_condition = [];
        // Condition to search based on payment type //
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $pay_condition = [
                    'payment_type' => (int) $payment_type
                ];
            }
        }
        // Condition to search based on company //
        $company_condition = [];
        if (($company != "") && ($company != "All")) {
            $company_condition = [
                'company_id' => (int) $company
            ];
        }
        // Condition to search based on taxi id //
        $taxi_condition = [];
        if (($taxiid != "All") && !empty($taxiid)) {
            $taxi_condition = [
                'taxi_id' => (int) $taxiid
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $taxi_condition = [
                        'taxi_id' => [
                            '$in' => $taxi_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on driver id //
        $driver_condition = [];
        if (($driver_id != "All") && !empty($driver_id)) {
            $driver_condition = [
                "driver_id" => (int) $driver_id
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $driver_condition = [
                        "driver_id" => [
                            '$in' => $driver_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on passenger id //
        $passengers_condition = [];
        if (($passengerid != "") && ($passengerid != "All")) {
            $passengers_condition = [
                "passengers_id" => (int) $passengerid
            ];
        }
        if ($list == 'rejected') {
            $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition, $pay_condition);
            //print_r($match_query);//exit;
            $arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
                
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                 [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => '$trans'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ],
                [
                    '$match' => $match_query
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'driver_id' => '$people._id',
                        'driver_name' => '$people.name',
                        'driver_phone' => '$people.phone',
                        'passenger_name' => '$passengers.name',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'company_id' => '$company_id',
                        'company_name' => '$company.companydetails.company_name',
                        'userid' => '$company.companydetails.userid',
                        'admin_amount' => '$trans.admin_amount',
                        'company_amount' => '$trans.company_amount',
                        'transaction_id' => '$trans._id',
                        'passengers_log_id' => '$trans.passengers_log_id',
                        'payment_type' => '$trans.payment_type',
                        'createdate' => '$createdate',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'distance' => '$distance',
                        'nightfare' => '$trans.nightfare',
                        'eveningfare' => '$trans.eveningfare',
                        'used_wallet_amount' => '$used_wallet_amount',
                        'fare' => '$trans.fare',
                        'travel_status' => '$travel_status',
                        'driver_reply' => '$driver_reply',
                        'driver_comments' => '$driver_comments',
                        'distance_unit' => '$trans.distance_unit',
                        'rating' => '$rating',
                    ]
                ],
                [
                    '$sort' => [
                        '_id' => 1
                    ]
                ],
            ];

            $table = MDB_PASSENGERS_LOGS;        

            if($list == 'all')
            {
                $table = MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($list == 'success')
            {
                $table = MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($list == 'rejected')
            {
                $table = MDB_PASSENGERSLOGS_REJECTED;
            }                     
            else if($list == 'cancelled')
            {
                $table = MDB_PASSENGERSLOGS_CANCELLED;
            }

            $result    = $this->mongo_db->aggregate($table, $arguments);
            
            //echo '<pre>';print_r($result);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        } else {
            $match_query = array_merge($date_condition, $passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition, $pay_condition, $trans_condition);
           // print_r($match_query);exit;
            $arguments = [
                [
                    '$lookup' => [
                        'from' => MDB_COMPANY,
                        'localField' => "company_id",
                        'foreignField' => "_id",
                        'as' => "company"
                    ]
                ],
                [
                    '$unwind' => '$company'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PEOPLE,
                        'localField' => "driver_id",
                        'foreignField' => "_id",
                        'as' => "people"
                    ]
                ],
                [
                    '$unwind' => '$people'
                ],
                 [
                    '$lookup' => [
                        'from' => MDB_TRANSACTION,
                        'localField' => "_id",
                        'foreignField' => "passengers_log_id",
                        'as' => "trans"
                    ]
                ],
                [
                    '$unwind' => '$trans'
                ],
                [
                    '$lookup' => [
                        'from' => MDB_PASSENGERS,
                        'localField' => "passengers_id",
                        'foreignField' => "_id",
                        'as' => "passengers"
                    ]
                ],
                [
                    '$unwind' => '$passengers'
                ],
                
                [
                    '$match' => $match_query
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'driver_id' => '$people._id',
                        'driver_name' => '$people.name',
                        'driver_phone' => '$people.phone',
                        'passenger_name' => '$passengers.name',
                        'passenger_email' => '$passengers.email',
                        'passenger_phone' => '$passengers.phone',
                        'company_id' => '$company_id',
                        'company_name' => '$company.companydetails.company_name',
                        'userid' => '$company.companydetails.userid',
                        'admin_amount' => '$trans.admin_amount',
                        'company_amount' => '$trans.company_amount',
                        'transaction_id' => '$trans._id',
                        'passengers_log_id' => '$trans.passengers_log_id',
                        'payment_type' => '$trans.payment_type',
                        'createdate' => '$createdate',
                        'current_location' => '$current_location',
                        'drop_location' => '$drop_location',
                        'distance' => '$distance',
                        'nightfare' => '$trans.nightfare',
                        'eveningfare' => '$trans.eveningfare',
                        'used_wallet_amount' => '$used_wallet_amount',
                        'fare' => '$trans.fare',
                        'travel_status' => '$travel_status',
                        'driver_reply' => '$driver_reply',
                        'driver_comments' => '$driver_comments',
                        'distance_unit' => '$trans.distance_unit',
                        'comments' => '$comments',
                        'rating' => '$rating',
                        'company_tax' => '$company_tax',
                    ]
                ],
                [
                    '$sort' => [
                        '_id' => 1
                    ]
                ],
            ];

            $table = MDB_PASSENGERS_LOGS;        

            if($list == 'all')
            {
                $table = MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($list == 'success')
            {
                $table = MDB_PASSENGERSLOGS_COMPLETED;
            }
            else if($list == 'rejected')
            {
                $table = MDB_PASSENGERSLOGS_REJECTED;
            }   
            else if($list == 'cancelled')
            {
                $table = MDB_PASSENGERSLOGS_CANCELLED;
            }

            $result    = $this->mongo_db->aggregate($table, $arguments);
             for($i=0; $i<count($result['result']);$i++){
                    $result['result'][$i]['createdate'] = Commonfunction::convertphpdate('Y-m-d H:i:s',$result['result'][$i]['createdate']);
                }
           // echo '<pre>else';print_r($result['result']);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    public function accountexport_data($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id)
    {
        $usertype        = $this->user_admin_type;
        $condition       = '';
        $driver_reply    = '';
        $driver_comments = '';
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            $taxilist = $this->gettaxidetails($company, $manager_id);
            $taxi_id  = "";
            if (count($taxilist) > 0) {
                foreach ($taxilist as $taxis) {
                    $taxi_id .= $taxis["taxi_id"] . ',';
                }
                $taxi_ids = substr($taxi_id, 0, strlen($taxi_id) - 1);
            } else {
                $taxi_ids = "";
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            $cdriver_id = "";
            if (count($driverlist) > 0) {
                foreach ($driverlist as $drivers) {
                    $cdriver_id .= $drivers["id"] . ',';
                }
                $driver_ids = substr($cdriver_id, 0, strlen($cdriver_id) - 1);
            } else {
                $driver_ids = "";
            }
        }
        $xls_output = "<table border='1' cellspacing='0' cellpadding='5'>";
        $xls_output .= "<th>" . __('cctransaction_id') . "</th>";
        $xls_output .= "<th>" . __('payment_type') . "</th>";
        $xls_output .= "<th>" . __('trip_id') . "</th>";
        /*$xls_output .= "<th>".__('package_type')."</th>";*/
        $xls_output .= "<th>" . __('companyname') . "</th>";
        $xls_output .= "<th>" . __('admin_commision') . "</th>";
        $xls_output .= "<th>" . __('company_commision') . "</th>";
        $xls_output .= "<th>" . __('journey_date') . "</th>";
        $xls_output .= "<th>" . __('trip_total_fare') . '(' . CURRENCY . ')' . "</th>";
        $file = 'Export';
        if ($transaction_id != '') {
            $trans_condition = " and t.transaction_id like '%" . $transaction_id . "%'";
        } else {
            $trans_condition = '';
        }
        $condition = " WHERE ( pl.travel_status = '1' or pl.travel_status = '4' ) and pl.driver_reply = 'A' ";
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if (($taxiid != "All") && ($taxiid != "")) {
            $condition .= " and pl.taxi_id =  '$taxiid'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                $condition .= " AND pl.taxi_id IN ( $taxi_ids )";
            } else {
                $condition .= "";
            }
        }
        if (($driver_id != "All") && ($driver_id != "")) {
            $condition .= " and pl.driver_id =  '$driver_id'";
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                $condition .= " AND pl.driver_id IN ( $driver_ids )";
            } else {
                $condition .= "";
            }
        }
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        if (($passengerid != "") && ($passengerid != "All")) {
            $condition .= " and pl.passengers_id =  '$passengerid'";
        }
        $query   = " SELECT * ,pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition $trans_condition order by pl.passengers_log_id desc";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        foreach ($results as $result) {
            if ($result['fare'] == 0) {
                $fare = '-';
            } else {
                $fare = round($result['fare'], 2);
            }
            $xls_output .= "<tr>";
            $xls_output .= "<td>" . ucfirst($result['transaction_id']) . "</td>";
            if ($result['payment_type'] == 2) {
                $xls_output .= "<td>Credit Card Using Paypal</td>";
            } else {
                $xls_output .= "<td>Cash</td>";
            }
            $xls_output .= "<td>" . $result['passengers_log_id'] . "</td>";
            $xls_output .= "<td>" . wordwrap($result['company_name'], 25, '<br />', 1) . "</td>";
            $xls_output .= "<td>" . $result['admin_amount'] . "</td>";
            $xls_output .= "<td>" . $result['company_amount'] . "</td>";
            $xls_output .= "<td>" . $result['createdate'] . "</td>";
            $xls_output .= "<td>" . $fare . "</td>";
            $xls_output .= "</tr>";
        }
        $xls_output .= "</table>";
        $filename = $file . "_" . date("Y-m-d_H-i", time());
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Length: " . strlen($xls_output));
        header("Content-type: application/vnd.ms-excel");
        header("Content-type: application/octet-stream, charset=UTF-8; encoding=UTF-8");
        header("Content-Disposition: attachment; filename=" . $filename . ".xls");
        echo $xls_output;
        exit;
    }
    /********* Graph ****************/
    public function getgraphvalues($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate,$pickupstart="",$pickupend="", $transaction_id="", $payment_type="")
    {
        $usertype = $this->user_admin_type;
        if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
            // Function to get taxi details //
            $taxilist = $this->gettaxidetails($company, $manager_id);
            if (count($taxilist) > 0) {
                foreach ($taxilist as $key => $taxis) {
                    $tid[] = isset($taxis["taxi_id"]) ? $taxis["taxi_id"] : $taxis["_id"];
                }
                $taxi_ids = Commonfunction::mongo_format_array($tid);
            } else {
                $taxi_ids = [];
            }
            $driverlist = $this->getdriverdetails($company, $manager_id);
            if (count($driverlist) > 0) {
                foreach ($driverlist as $key => $drivers) {
                    $cdriver_id[] = $drivers["id"];
                }
                $driver_ids = Commonfunction::mongo_format_array($cdriver_id);
            } else {
                $driver_ids = [];
            }
        }
        // Function to get passenger details //
        $passengerlist = $this->getpassengerdetails($company, $manager_id);
        // Condition to search based on passengers //
        if (count($passengerlist) > 0) {
            foreach ($passengerlist as $key => $passengers) {
                $cpassenger_id[] = $passengers["id"];
            }
            $passenger_ids = Commonfunction::mongo_format_array($cpassenger_id);
        } else {
            $passenger_ids = [];
        }
        $date_condition = [];
        if ($startdate != "") {
            $date_condition = [
 'createdate' => [
                    '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                    '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)
                ]
            ];
        }
           $pickdate_condition = [];
        if ($pickupstart != "") {
            if( $list == 'success' || $list == 'inprogress')
            {
                $pickdate_condition = [
                    'actual_pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($pickupstart) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($pickupend) * 1000)
                    ]
                ];
            }
            else
            {
                $pickdate_condition = [
                    'pickup_time' => [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($pickupstart) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($pickupend) * 1000)
                    ]
                ];
            }
        }
        
        // Condition to search based on transaction id //
        $trans_condition = [];
        if ($transaction_id != '') {
            $trans_condition = [
                'trans._id' => $transaction_id
            ];
        }
        // Condition to search based on status //
        $condition = [];
        if ($list == 'all') {
            $condition = [];
        } else if ($list == 'success') {
            $condition = [
                'travel_status' => 1,
                'driver_reply' => 'A'
            ];
        } else if ($list == 'cancelled') {
            $condition = [
                "\$or" => [
                    [
                        'travel_status' => 4,
                        'driver_reply' => 'A'
                    ],
                    [
                        'travel_status' => 0,
                        'driver_reply' => 'C'
                    ]
                ]
            ];
        } else if ($list == 'rejected') {
            $condition = [
                'driver_reply' => 'R'
            ];
        }
        $pay_condition = [];
        // Condition to search based on payment type //
        if ($payment_type != 'All' && $payment_type != '') {
            if ($list != 'rejected') {
                $pay_condition = [
                    'payment_type' => (int) $payment_type
                ];
            }
        }
        // Condition to search based on company //
        $company_condition = [];
        if (($company != "") && ($company != "All")) {
            $company_condition = [
                'company_id' => (int) $company
            ];
        }
        // Condition to search based on taxi id //
        $taxi_condition = [];
        if (($taxiid != "All") && !empty($taxiid)) {
            $taxi_condition = [
                'taxi_id' => (int) $taxiid
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($taxilist) > 0) {
                    $taxi_condition = [
                        'taxi_id' => [
                            '$in' => $taxi_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on driver id //
        $driver_condition = [];
        if (($driver_id != "All") && !empty($driver_id)) {
            $driver_condition = [
                "driver_id" => (int) $driver_id
            ];
        } else {
            if ((($manager_id != '') && ($manager_id != 'All')) || ($usertype == 'M')) {
                if (count($driverlist) > 0) {
                    $driver_condition = [
                        "driver_id" => [
                            '$in' => $driver_ids
                        ]
                    ];
                }
            }
        }
        // Condition to search based on passenger id //
        $passengers_condition = [];
        if (($passengerid != "") && ($passengerid != "All")) {
            $passengers_condition = [
                "passengers_id" => (int) $passengerid
            ];
        }
        
         $match_query = array_merge($date_condition,$pickdate_condition,$passengers_condition, $company_condition, $taxi_condition, $driver_condition, $condition,$pay_condition);
        //$q_trans = array_merge($pay_condition, $trans_condition);
        
        //print_r($match_query);exit;
        $arguments   = [
         ['$match' => $match_query],
            [
                '$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => "company_id",
                    'foreignField' => "_id",
                    'as' => "company"
                ]
            ],
            [
                '$unwind' => '$company'
            ],
            [
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => "driver_id",
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
           /* array(
                '$unwind' => '$people'
            ),*/
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => "passengers_id",
                    'foreignField' => "_id",
                    'as' => "passengers"
                ]
            ],
            [
                '$unwind' => '$passengers'
            ],
            [
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => "_id",
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ],
          /*            array('$unwind' => '$trans'),
*/            [
                '$project' => [
                    '_id' => 0,
                    'createdate' => '$createdate',
                    'fare' => '$trans.fare',
                     'year' => ['$year' => '$createdate'],
                    'month' => ['$month' => '$createdate'],
                    'day' => ['$dayOfMonth' => '$createdate']
                ]
            ],
         ['$unwind' => ['path' => '$fare', 'preserveNullAndEmptyArrays' => true ]],
                   
                   
           ['$group' => [
                    '_id' => ['day' => '$day','month' => '$month','year' => '$year'],
                    'amount' => ['$sum' => '$fare'],
                    'trips' =>  ['$sum' => 1]
                ]]
        ];
        //  echo "<pre>";print_r($q_trans);exit();
        //$arguments =(!empty($q_trans))?array_merge($q_trans,$arguments):$arguments;
    // echo '<pre>';print_r($arguments);exit;

        $table = MDB_PASSENGERS_LOGS;        

        if($list == 'all')
        {
            $table = MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($list == 'success')
        {
            $table = MDB_PASSENGERSLOGS_COMPLETED;
        }
        else if($list == 'rejected')
        {
            $table = MDB_PASSENGERSLOGS_REJECTED;
        } 
        else if($list == 'missed')
        {
            $table = MDB_PASSENGERSLOGS_MISSED;
        } 
        else if($list == 'cancelled')
        {
            $table = MDB_PASSENGERSLOGS_CANCELLED;
        }

        $result      = $this->mongo_db->aggregate($table, $arguments);
     //echo '<pre>';print_r($result);exit;
        return (!empty($result['result'])) ? $result['result'] : [];
    }
    public function viewtransaction_details($log_id)
    {
        //MongoDB
        $match_query = [
            '_id' => (int)$log_id
        ];
        //print_r($match_query);exit;
        $arguments   = [
            [
                '$match' => $match_query
            ],
            [
                '$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => "company_id",
                    'foreignField' => "_id",
                    'as' => "company"
                ]
            ],
            [
                '$unwind' => '$company'
            ],
            [
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => "driver_id",
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            [
                '$unwind' => [
                    'path' => '$people', 'preserveNullAndEmptyArrays' => true 
                ]
            ],
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => "passengers_id",
                    'foreignField' => "_id",
                    'as' => "passengers"
                ]
            ],
            [
                '$unwind' => '$passengers'
            ],
            [
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => "_id",
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ],
            ['$unwind' => ['path' => '$trans', 'preserveNullAndEmptyArrays' => true ]],
            [
                '$project' => [
                    '_id' => 0,
                    'id' => '$_id',
                    'driver_id' => '$people._id',
                    'driver_name' =>  ['$ifNull'=>['$people.name','']],
                    'driver_phone' => '$people.phone',
                    'passenger_name' => '$passengers.name',
                    'passenger_email' => '$passengers.email',
                    'passenger_phone' => '$passengers.phone',
                    'company_id' => '$company_id',
                    'company_name' => '$company.companydetails.company_name',
                    'userid' => '$company.companydetails.userid',
                    'admin_amount' => '$trans.admin_amount',
                    'company_amount' => '$trans.company_amount',
                    'transaction_id' => '$trans._id',
                    'passengers_log_id' => '$trans.passengers_log_id',
                    'payment_type' => ['$ifNull' => ['$trans.payment_type','']],
                    'createdate' => '$createdate',
                    'current_location' => '$current_location',
                    'drop_location' => '$drop_location',
                    'distance' => '$distance',
                    'nightfare' => '$trans.nightfare',
                    'eveningfare' => '$trans.eveningfare',
                    'used_wallet_amount' => '$used_wallet_amount',
                    'fare' => ['$ifNull' => ['$trans.fare','']],
                    'travel_status' => '$travel_status',
                    'driver_reply' => '$driver_reply',
                    'driver_comments' => '$driver_comments',
                    'distance_unit' => '$trans.distance_unit',
                    'comments' => '$comments',
                    'rating' => '$rating',
                    'org_tax' => '$company_tax',
                    'company_tax' => '$company_tax',
                    'actual_pickup_time' => '$actual_pickup_time',
                    'drop_time' => '$drop_time',
                    'drop_latitude' => '$drop_latitude',
                    'drop_longitude' => '$drop_longitude',
                    'tripfare' => ['$ifNull' => ['$trans.fare','']],
                    'minutes_fare' => '$trans.minutes_fare',
                    'trip_minutes' => '$trans.trip_minutes',
                    'wallet_amount_used' => '$trans.wallet_amount_used',
                    'subtotal' => '$trans.tripfare',
                    'taxi_waiting_time' => ['$ifNull' => ['$trans.waiting_time','0']],
                    'taxi_waiting_cost' => ['$ifNull' => ['$trans.waiting_cost','0']],
                    'nightfare_applicable' => ['$ifNull' => ['$trans.nightfare_applicable','']],
                    'eveningfare_applicable' => ['$ifNull' => ['$trans.eveningfare_applicable','']],
                     'fare_details'=>'$fare_detail',
                    'total_edited_fare'=>['$sum'=>'$fare_detail.value'],
                    'createdby_username'=>['$ifNull'=>['$createdby_username','-']],
                    'payment_type'=>['$ifNull'=>['$trans.payment_type',0]],
                    'advance_payment'=>['$ifNull'=>['$trans.advance_payment',0]],
                    'wallet_amount_used'=>['$ifNull'=>['$trans.wallet_amount_used',0]],
                    'pending_amt'=>['$ifNull'=>['$trans.pending_amt',0]],
                    'driver_edit_status'=>['$ifNull'=>['$trans.driver_edit_status',0]],
                    'actual_paid_amt'=>['$ifNull'=>['$trans.actual_paid_amt',0]],
                ]
            ],
            [
                '$sort' => [
                    '_id' => 1
                ]
            ]
        ];


        $result  = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $arguments);

        if(empty($result['result']))
        {

            $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_CANCELLED, $arguments);
                    
        }    

        return (!empty($result['result'])) ? $result['result'] : [];

    }
    public function viewdriver_tracking($trip_id)
    {
        /*$sql        = "SELECT * FROM driver_location_history WHERE trip_id = '$trip_id'";
        //echo $sql;exit;
        $trip_check = Db::query(Database::SELECT, $sql)->execute()->as_array();
        return (count($trip_check) > 0)?$trip_check:0;*/
        
        //MongoDB
        $arguments = [
            ['$match'  => ["trip_id" => (int)$trip_id]],
            [
                '$project' => ['_id'=>0,
                    'id' => '$_id',
                    'active_record' => '$loc',
                ]
            ]
        ];
        $result = $this->mongo_db->aggregate(MDB_LOCATION_HISTORY,$arguments);
        //echo "<pre>"; print_r($result); exit;
        return (!empty($result['result']))?$result['result']:[];
    }
    public function count_accountreport_list($list = "", $company = "", $startdate = "", $enddate = "", $payment_type = "")
    {
        $usertype        = $this->user_admin_type;
        $condition       = "";
        $trans_condition = "";
        if ($payment_type != 'All' && $payment_type != '') {
            $condition .= " and payment_type = '$payment_type' ";
        }
        if (($company != "") && ($company != "All")) {
            $condition .= " and pl.company_id =  '$company'";
        }
        if ($startdate != "") {
            $condition .= " and pl.createdate >=  '$startdate' and pl.createdate <=  '$enddate' ";
        }
        $query   = " SELECT * , pe.name AS driver_name,pe.phone AS driver_phone,  pa.name AS passenger_name,pa.email AS passenger_email,pa.phone AS passenger_phone FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id $condition $trans_condition order by pl.passengers_log_id desc";
        $results = Db::query(Database::SELECT, $query)->execute()->as_array();
        return count($results);
    }
    
     public function accountreport_details($list, $company, $startdate, $enddate, $payment_type)
    {
        $match = [];
        $usertype        = $this->user_admin_type;
        if (($company != "") && ($company != "All") && $company != 0) {
            $match['company_id'] = (int)$company;
        }
        //$startdate = '2015-05-01 00:00:00';
        //$enddate = '2015-05-31 12:59:59';
        if ($startdate != "") {
            $match['createdate'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                                         '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)];
        }
        if ($payment_type != 'All' && $payment_type != '') {
            $match['trans.payment_type'] = (int)$payment_type;
        }
        $args = [
                ['$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => 'passengers_log_id',
                    'as' => 'trans',
                ]],
                ['$unwind' => '$trans'],
                ['$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => '_id',
                    'as' => 'company',
                ]],
                ['$unwind' => '$company'],
                ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => '_id',
                    'as' => 'people',
                ]],
                ['$unwind' => '$people'],                
                ['$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => '_id',
                    'as' => 'passengers',
                ]],
                ['$unwind' => '$passengers'],
                ['$match' => $match],
                ['$project' => [
                    'passengers_log_id' => '$_id',
                    'driver_name' => '$people.name',
                    'passenger_name' => '$passengers.name',
                    'passenger_email' => '$passengers.email',
                    'passenger_phone' => '$passengers.phone',
                    'fare' => '$trans.fare',
                    'cid' => '$company_id',
                ]]
            ];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$args);        
        //echo "<pre>";print_r($result);exit;
        return (!empty($result['result']) ? $result['result']: []);    
    }
   
    //public function getaccountreportvalues($list,$company,$manager_id,$taxiid,$driver_id,$passengerid,$startdate,$enddate,$transaction_id,$payment_type)
     public function getaccountreportvalues($list, $company, $startdate, $enddate, $payment_type)
    {
        $match = [];
        $usertype        = $this->user_admin_type;
        if (($company != "") && ($company != "All") && $company != 0) {
            $match['company_id'] = (int)$company;
        }
        //$startdate = '2015-03-01 00:00:00';
        //$enddate = '2015-03-31 00:00:00';
        if ($startdate != "") {
            $match['createdate'] = ['$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($startdate) * 1000),
                                         '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($enddate) * 1000)];
        }
        if ($payment_type != 'All' && $payment_type != '') {
            $match['trans.payment_type'] = $payment_type;
        }
        $args = [
                ['$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => 'passengers_log_id',
                    'as' => 'trans',
                ]],
                ['$unwind' => '$trans'],
                ['$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => '_id',
                    'as' => 'company',
                ]],
                ['$unwind' => '$company'],
                ['$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => 'driver_id',
                    'foreignField' => '_id',
                    'as' => 'people',
                ]],
                ['$unwind' => '$people'],                
                ['$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => '_id',
                    'as' => 'passengers',
                ]],
                ['$unwind' => '$passengers'],
                ['$match' => $match],
                ['$project' => [
                    'fare' => '$trans.fare',
                    'year' => ['$year' => '$createdate'],
                    'month' => ['$month' => '$createdate'],
                    'day' => ['$dayOfMonth' => '$createdate']
                ]],
                ['$group' => [
                    '_id' => ['day' => '$day','month' => '$month','year' => '$year'],
                    'amount' => ['$sum' => '$fare'],
                    'trips' =>  ['$sum' => 1]
                ]]
            ];
        $result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$args);
        
        return (!empty($result['result']) ? $result['result']: []);        
    }
        
    public function close_mysql_connection($instance)
    {
        $db = Database::$instances[$instance];
        //print_r($db);
        $db->disconnect();
    }
    // PHP strtotime compatible strings
    public function dateDiff($time1, $time2, $precision = 6)
    {
        // If not numeric then convert texts to unix timestamps
        if (!is_int($time1)) {
            $time1 = strtotime($time1);
        }
        if (!is_int($time2)) {
            $time2 = strtotime($time2);
        }
        // If time1 is bigger than time2
        // Then swap time1 and time2
        if ($time1 > $time2) {
            $ttime = $time1;
            $time1 = $time2;
            $time2 = $ttime;
        }
        // Set up intervals and diffs arrays
        $intervals = [
            'year',
            'month',
            'day',
            'hour',
            'minute',
            'second'
        ];
        $diffs     = [];
        // Loop thru all intervals
        foreach ($intervals as $interval) {
            // Create temp time from time1 and interval
            $ttime  = strtotime('+1 ' . $interval, $time1);
            // Set initial values
            $add    = 1;
            $looped = 0;
            // Loop until temp time is smaller than time2
            while ($time2 >= $ttime) {
                // Create new temp time from time1 and interval
                $add++;
                $ttime = strtotime("+" . $add . " " . $interval, $time1);
                $looped++;
            }
            $time1            = strtotime("+" . $looped . " " . $interval, $time1);
            $diffs[$interval] = $looped;
        }
        $count = 0;
        $times = [];
        // Loop thru all diffs
        foreach ($diffs as $interval => $value) {
            // Break if we have needed precission
            if ($count >= $precision) {
                break;
            }
            // Add value and interval 
            // if value is bigger than 0
            if ($value > 0) {
                // Add s if value is not 1
                if ($value != 1) {
                    $interval .= "s";
                }
                // Add value and interval to times array
                $times[] = $value . " " . $interval;
                $count++;
            }
        }
        // Return string with times
        return implode(", ", $times);
    }
    public function braintree_transaction_details($keyword = "", $start_date = "", $end_date = "", $company_id = "", $filter_company = "", $val = "", $offset = "",$find_count=false)
    {
        /*$limit_condition = $condition ="";
        if ($keyword != '') {
            $condition .= "AND (t.passengers_log_id = '$keyword'";
            $condition .= "OR  t.transaction_id = '$keyword')";
        }
        if ($start_date != '') {
            $condition .= "AND  pl.createdate >= '$start_date'";
        }
        if ($end_date != '') {
            $condition .= "AND  pl.createdate <= '$end_date'";
        }
        if ($company_id != '') {
            $condition .= "AND  pl.company_id = '$company_id'";
        }
        if ($filter_company != '' && $filter_company != 'All') {
            $condition .= "AND  pl.company_id = '$filter_company'";
        }
        if($find_count){
            $query   = " SELECT c.company_name,t.transaction_id,t.payment_status,t.amt,t.passengers_log_id as trip_id,pl.createdate ,pl.company_id FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where t.payment_type in(2,3) and t.payment_gateway_id='2' $condition order by pl.passengers_log_id desc";
            //echo $query;
            $results = Db::query(Database::SELECT, $query)->execute()->as_array();
            return count($results);
        } else {
            $limit_condition = "limit $val offset $offset ";
            $query   = " SELECT c.company_name,t.transaction_id,t.payment_status,t.amt,t.passengers_log_id as trip_id,pl.createdate ,pl.company_id FROM `" . PASSENGERS_LOG . "` as pl join `" . TRANS . "` as t ON pl.passengers_log_id=t.passengers_log_id Join `" . COMPANY . "` as c ON pl.company_id=c.cid Join `" . PEOPLE . "` as pe ON pe.id=pl.driver_id   Join `" . PASSENGERS . "` as pa ON pl.passengers_id=pa.id where t.payment_type in(2,3) and t.payment_gateway_id='2' $condition order by pl.passengers_log_id desc $limit_condition ";
            //echo $query;
            $results = Db::query(Database::SELECT, $query)->execute()->as_array();
            return $results;
        }*/
        //MongoDB
        $date_condition = [];
        if ($start_date != "") {
            $date_condition = [
                'createdate' => [
                    '$gte' => $start_date,
                    '$lte' => $end_date
                ]
            ];
        }
        $company_condition = [];
        if ($filter_company != '' && $filter_company != 'All') {
            $company_condition = [
                'company_id' => (int)$filter_company
            ];
        }
        if($company_id!=''){
             $company_condition = [
                'company_id' => (int)$company_id
            ];
        }
        $keyword_condition = [];
        if($keyword!=''){
            $keyword_condition = ["\$or"=>[[ 'trans.transaction_id' => (string)$keyword] , [ 'trans.passengers_log_id' => (int)$keyword ]]];
        }
        $search_query = [
            'trans.payment_gateway_id' => 2,
            'trans.payment_type'=>['$in'=>[2,3]]
        ];
        $match_query = array_merge($search_query,$company_condition,$date_condition,$keyword_condition);
        //echo '<pre>';print_r($match_query);exit;
        $common_arguments   = [
            [
                '$lookup' => [
                    'from' => MDB_COMPANY,
                    'localField' => "company_id",
                    'foreignField' => "_id",
                    'as' => "company"
                ]
            ],
            [
                '$unwind' => '$company'
            ],
            [
                '$lookup' => [
                    'from' => MDB_PEOPLE,
                    'localField' => "driver_id",
                    'foreignField' => "_id",
                    'as' => "people"
                ]
            ],
            [
                '$unwind' => '$people'
            ],
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => "passengers_id",
                    'foreignField' => "_id",
                    'as' => "passengers"
                ]
            ],
            [
                '$unwind' => '$passengers'
            ],
            [
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => "_id",
                    'foreignField' => "passengers_log_id",
                    'as' => "trans"
                ]
            ],
            ['$unwind' => '$trans'],
            [
                '$match' => $match_query
            ]
        ];
        if($find_count){
            $arguments = [
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id'
                    ]
                ],
                [
                    '$group' => [
                        '_id' => 0,
                        'count' => [
                            '$sum' => 1
                        ]
                    ]
                ],
                [
                    '$sort' => [
                        '_id' => 1
                    ]
                ]
            ];
            $merge_arguments = array_merge($common_arguments,$arguments);
            //echo '<pre>';print_r($merge_arguments);//exit;
            $result      = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $merge_arguments);
            //echo '<pre>';print_r($result);exit;
            return (!empty($result['result'][0])) ? $result['result'][0]['count'] : 0;
        } else{
            $arguments = [
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
                        'company_name' => '$company.companydetails.company_name',
                        'transaction_id'=>'$trans.transaction_id',
                        'payment_status' => '$trans.payment_status',
                        'amt' => '$trans.amt',
                        'trip_id' => '$trans.passengers_log_id',
                        'createdate' => '$createdate',
                        'company_id' => '$company_id',
                    ]
                ],
                [
                    '$sort' => [
                        '_id' => 1
                    ]
                ]
            ];
            $merge_arguments = array_merge($common_arguments,$arguments);
            $result      = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $merge_arguments);
            //echo '<pre>';print_r($result);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }
    public function update_settlement_status($transaction_array = [], $company_id = "")
    {
        if ($company_id > 0) {
            $paypal_details           = $this->common_model->company_payment_details($company_id);
            $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
            $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
            $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
            $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
            $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
            $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
            $street                   = COMPANY_STREET_ADDR;
            $city                     = COMPANY_LOGIN_CITY_NAME;
            $state                    = COMPANY_LOGIN_STATE_NAME;
            $country_code             = COMPANY_LOGIN_ISO_COUNTRYCODE;
            $currency_code            = COMPANY_CURRENCY_FORMAT;
            $zipcode                  = COMPANY_ZIPCODE;
        } else {
            $paypal_details           = $this->common_model->payment_gateway_details();
            $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
            $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
            $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
            $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
            $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
            $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
            $payment_gateway            = isset($paypal_details[0]['gateway_name']) ? $paypal_details[0]['gateway_name'] : "";
        }
        if(!empty($payment_gateway) && ($payment_gateway=='Brain tree' || $payment_gateway=='Braintree')){
            /** Brain Tree payment gateway **/
            $product_title  = Html::chars('Complete Trip');
            $payment_action = 'sale';
            require_once(APPPATH . 'vendor/braintree-payment/lib/Braintree.php');
            $pay_type = ($payment_method == "L") ? "live" : "sandbox";
            if ($pay_type == "live") {
                Braintree_Configuration::environment('production');
            } else {
                Braintree_Configuration::environment('sandbox');
            }
            Braintree_Configuration::merchantId($payment_gateway_username); //your_merchant_id
            Braintree_Configuration::publicKey($payment_gateway_password); //your_public_key
            Braintree_Configuration::privateKey($payment_gateway_key); //your_private_key
            foreach ($transaction_array as $key => $val) {
                $trans          = explode(":", $val);
                $transaction_id = $trans[0];
                $trip_id        = $trans[1];
                $transaction    = Braintree_Transaction::find($transaction_id);
                //echo json_encode($transaction);echo "<br/>";
                if (isset($transaction->_attributes)) {
                    $result = $transaction->_attributes;
                    /*$this->common_model->update_table(TRANS, array(
                        'payment_status' => str_replace('_', ' ', $result['status'])
                    ), 'passengers_log_id', $trip_id);*/
                    
                    //MongoDB update
                    $update_array = ['payment_status' => str_replace('_', ' ', $result['status'])];
                    $result = $this->mongo_db->update(MDB_TRANSACTION,['passengers_log_id'=>(int)$trip_id],['$set'=>$update_array],['upsert'=>false]);
                }
            }
            return 1;
        }
        return 0;
    }
    public function getaddress($lat, $lng)
    {
        $url    = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $json   = @file_get_contents($url);
        $data   = json_decode($json);
        $status = $data->status;
        if ($status == "OK")
            return $data->results[0]->formatted_address;
        else
            return false;
    }
public function getAllInvoice($passenger,$pay_status,$offset = '', $val = '')
    {
        $p = ($passenger != '' && $passenger != 'All')?['passenger_id' => (int)$passenger]:[];
        $s = ($pay_status != '')?['pay_status' => $pay_status]:[];
        $match_query = array_merge($p,$s);
        //print_r($match_query); die();
        
        $look = [
            ['$lookup'=>[
            'from' => PASSENGERS,
            'localField'=>'passenger_id',
            'foreignField' => '_id',
            'as' => 'p'
                ]
                ],['$unwind' => '$p']
            ];
        if(!empty($match_query))
        {
            $mat = [(['$match' => $match_query])];
            $args = array_merge($mat,$look);
        }
        else
            $args = $look;
        
        if (empty($offset) && empty($val)) 
        {
            $arguments = [
                [
                    '$project' => [
                        '_id' => 0,
                        'id' => '$_id',
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
                [
                    '$sort' => [
                        'id' => -1
                    ]
                ]
            ];
            $merge_arguments = array_merge($args,$arguments);
            $result    = $this->mongo_db->aggregate('invoice_schedule_trip', $merge_arguments);
            //echo '<pre>if';print_r($result);exit;
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        }
        else
        {
            
            $ar = [
            ['$project'=>[
            'name'=>'$p.name',
            'invoice'=>'$invoice',
            'amt'=>'$amount',
            'period'=>'$period',
            'pay_status'=>'$pay_status',
            'mail_status'=>'$mail_status',
            'file'=>'$file',
            'created_date'=>'$created_date'
                ]
                ],
            ['$sort'=>['created_date'=> 1]]
            ,
                    [
                        '$skip' => (int) $offset
                    ],
                    [
                        '$limit' => (int) $val
                    ]];
            $newarg = array_merge($args,$ar);
            //echo "<pre>";print_r($newarg); die();
            $invoices = $this->mongo_db->aggregate('invoice_schedule_trip',$newarg);
            return (isset($invoices['result']))?$invoices['result']:[];
        }
        
    }


    public function driver_sales_report($keyword = "", $status = "",$start_date = "",$end_date = "",$year,$month, $company = "", $offset = "", $val = "", $find_count = FALSE)
    {
        $user_createdby                  = $this->userid;
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
        $match_query = ['status'=>'A'];

        //$get_company_time_details = $this->get_company_time_details('');
       // $current_time  = $get_company_time_details['current_time']; //Start time
        if($start_date != '' && $end_date != '')
        {
            $start_date =$start_date;
            $end_date =$end_date;
        }
        elseif($month != '' && $year != '')
        {
            $start_date = date("$year-$month-01 00:00:01");
            $end_date = date("$year-$month-t 23:59:59");
        }
        else
        {
            $month = date('n');
            $year = date('Y');
            $start_date = date("$year-$month-01 00:00:01");
            $end_date = date("$year-$month-t 23:59:59");
        }


        $match_query['pass.pickup_time'] = [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_date) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_date) * 1000)
                    ];

//        print_r($match_query);exit;

        if(!empty($keyword)) {
            $srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        }else{
            $srch_query = $match_query;
        }
        $common_arguments = [
  
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERSLOGS_COMPLETED,
                    'localField' => '_id',
                    'foreignField' => 'driver_id',
                    'as' => 'pass'
                ]
            ],
            [
                 '$unwind' =>['path'=>'$pass','preserveNullAndEmptyArrays'=>true]
            ],
            [
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => 'pass._id',
                    'foreignField' => 'passengers_log_id',
                    'as' => 'trans'
                ]
            ],
            [
                '$unwind' =>['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            [
                '$match' => $srch_query
            ],
        ];
        
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
            $result          = $this->mongo_db->aggregate(MDB_PEOPLE, $count_arguments);
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
                        'driver_id' => '$_id',
                        'driver_name' => ['$concat'=>['$name',' ','$lastname']],
                        //'tfare'=>array('$sum'=>array('$trans.fare','$trans.wallet_amount_used','$trans.add_amt')),
                        'tfare'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$sum'=>['$trans.fare','$trans.wallet_amount_used','$trans.add_amt']],
                             ['$sum'=>['$trans.actual_paid_amt','$trans.wallet_amount_used']]]
                        ],
                       // 'wallet_amount_used'=>'$trans.wallet_amount_used',
                        'pending_amt'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$ifNull'=>['$trans.pending_amt',0]],
                            0,
                         ]], 
                       // 'wallet_amount_used'=>'$trans.wallet_amount_used',
                        'wallet_amount_used'=>'$trans.wallet_amount_used',                    
                        'add_amt'=>'$trans.add_amt',                    
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$_id',
                        'driver_name' => ['$first'=>'$driver_name'],
                        'driver_id' => ['$first'=>'$driver_id'],
                        'total_amount' => ['$sum' => '$tfare'],
                        'total_pending_amt' => ['$sum' => '$pending_amt'],
                        'total_count' => ['$sum' => 1]
                    ]
                ],
               ['$skip'   => (int)$offset ],
               ['$limit'  => (int)$val ]
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);
            $result    = $this->mongo_db->aggregate(MDB_PEOPLE, $merge_arguments);
            //print_r($result);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }


    public function get_company_time_details($companyid="")
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

    public function limo_sales_report($keyword = "", $status = "",$start_date = "",$end_date = "",$year="",$month="",$company = "",$offset = "", $val = "", $find_count = FALSE)
    {
        $user_createdby                  = $this->userid;
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
       // $match_query = array('status'=>'A');

        $match_query =[];   

        if($start_date != '' && $end_date != '')
        {
            $start_date =$start_date;
            $end_date =$end_date;
        }
        elseif($month != '' && $year != '')
        {
            $start_date = date("$year-$month-01 00:00:01");
            $end_date = date("$year-$month-t 23:59:59");
        }
        else
        {
            $month = date('n');
            $year = date('Y');
            $start_date = date("$year-$month-01 00:00:01");
            $end_date = date("$year-$month-t 23:59:59");
        }


       $match_query['pickup_time'] = [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_date) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_date) * 1000)
                    ];
    
        // if(!empty($keyword)) {
        //     $srch_query = array( "\$and" => array($match_query,array("\$or"=>array(array( 'name' => new \MongoDB\BSON\Regex($keyword, 'i')) , array( 'lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ), array( 'email' => new \MongoDB\BSON\Regex($keyword, 'i') ), array( 'phone' => new \MongoDB\BSON\Regex($keyword, 'i') ) ) ) ) );
        // }else{
            $srch_query = $match_query;
        //}
        $common_arguments = [
  
            // array(
            //     '$lookup' => array(
            //         'from' => MDB_PASSENGERSLOGS_COMPLETED,
            //         'localField' => '_id',
            //         'foreignField' => 'driver_id',
            //         'as' => 'pass'
            //     )
            // ),
            // array(
            //      '$unwind' =>array('path'=>'$pass','preserveNullAndEmptyArrays'=>true)
            // ),
            [
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => 'passengers_log_id',
                    'as' => 'trans'
                ]
            ],
            [
                '$unwind' =>['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            [
                '$match' => $srch_query
            ],
        ];
        
        if ($find_count == TRUE) {
            $count_arguments = [
                [
                '$match' => $srch_query
                ],
                [
                    '$project' => [
                        'create_day'=>['$dateToString' => ['format'=> "%Y-%m-%d", 'date'=> '$pickup_time']]
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$create_day',
                         'count' => [
                            '$sum' => 1
                        ]
                    ]
                ]
            ];
           // $merge_arguments = array_merge($common_arguments, $count_arguments);

            $result          = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $count_arguments);
       // echo "<pre>";print_r($result['result']);exit;
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? count($result['result']) : 0;
        } else {
            $field_arguments = [
              
                [
                    '$project' => [
                        'fare'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$sum'=>['$trans.fare','$trans.wallet_amount_used','$trans.add_amt']],
                             ['$sum'=>['$trans.actual_paid_amt','$trans.wallet_amount_used']]]
                        ],
                       // 'wallet_amount_used'=>'$trans.wallet_amount_used',
                        'pending_amt'=>['$cond'=>[
                            ['$eq'=>['$trans.driver_edit_status',0]],
                            ['$ifNull'=>['$trans.pending_amt',0]],
                            0,
                         ]], 
                        'createdate'=>'$createdate',
                        'pickup_time'=>'$pickup_time',
                        'create_day'=>['$dateToString' => ['format'=> "%Y-%m-%d", 'date'=> '$pickup_time']]
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$create_day',
                        'create_day' => ['$first'=>'$create_day'],
                        'pickup_time' => ['$first'=>'$pickup_time'],
                        'total_amount' => ['$sum' => '$fare'],
                        'total_pending_amt' => ['$sum' => '$pending_amt'],
                        'total_count' => ['$sum' => 1]
                    ]
                ],
               ['$skip'   => (int)$offset ],
               ['$limit'  => (int)$val ],
                 [
                    '$sort' => [ 
                        'create_day' => -1
                    ],
                ],
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);

            //echo "<pre>";echo json_encode($merge_arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);

           // print_r($result);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }

     public function daily_sales_report($keyword = "", $status = "",$start_date,$end_date, $company = "",$offset = "", $val = "", $find_count = FALSE)
    {
        $user_createdby                  = $this->userid;
        $keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
       // $match_query = array('status'=>'A');

        $match_query =[];   

       // $start_date = $search_date." 05:00:01";
       // $end_date = date('Y-m-d',strtotime('+1 days '.$search_date))." 05:00:01";

        if($start_date != '' && $end_date != '')
        {
            $start_date =$start_date;
            $end_date =$end_date;
        }
        else
        {
            $start_date = date("Y-m-d 05:00:01");
            $end_date = date("Y-m-d H:i:s");
        }

       $match_query['actual_pickup_time'] = [
                        '$gte' => new \MongoDB\BSON\UTCDateTime(strtotime($start_date) * 1000),
                        '$lte' => new \MongoDB\BSON\UTCDateTime(strtotime($end_date) * 1000)
                    ];
    


        if(!empty($keyword)) {
            $srch_query = [ "\$and" => [$match_query,["\$or"=>[[ 'people.name' => new \MongoDB\BSON\Regex($keyword, 'i')] , [ 'people.lastname' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.email' => new \MongoDB\BSON\Regex($keyword, 'i') ], [ 'people.phone' => new \MongoDB\BSON\Regex($keyword, 'i') ] ] ] ] ];
        }else{
            $srch_query = $match_query;
        }
        $common_arguments = [
  
            // array(
            //     '$lookup' => array(
            //         'from' => MDB_PASSENGERSLOGS_COMPLETED,
            //         'localField' => '_id',
            //         'foreignField' => 'driver_id',
            //         'as' => 'pass'
            //     )
            // ),
            // array(
            //      '$unwind' =>array('path'=>'$pass','preserveNullAndEmptyArrays'=>true)
            // ),
            [
                '$lookup' => [
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => '_id',
                    'as' => 'pass'
                ]
            ],
             [
                '$unwind' =>['path'=>'$pass','preserveNullAndEmptyArrays'=>true]
            ],
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
                '$lookup' => [
                    'from' => MDB_TRANSACTION,
                    'localField' => '_id',
                    'foreignField' => 'passengers_log_id',
                    'as' => 'trans'
                ]
            ],
            [
                '$unwind' =>['path'=>'$trans','preserveNullAndEmptyArrays'=>true]
            ],
            // array(
            //      '$unwind' =>array('path'=>'$fare_detail','preserveNullAndEmptyArrays'=>true)
            // ),
            [
                '$match' => $srch_query
            ],
        ];
        
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

            $result          = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $count_arguments);
            return (!empty($result['result']) && isset($result['result'][0]['count'])) ? $result['result'][0]['count'] : 0;
        } else {
            $field_arguments = [              
                [
                    '$project' => [
                          'fare'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$sum'=>['$trans.fare','$trans.wallet_amount_used','$trans.add_amt']],
                             ['$sum'=>['$trans.actual_paid_amt','$trans.wallet_amount_used']]]
                        ],
                       // 'wallet_amount_used'=>'$trans.wallet_amount_used',
                        'pending_amt'=>'$trans.pending_amt',
                        'driver_name'=>'$people.name',
                        'driver_id' =>'$people._id',
                        'pass_id' =>'$pass._id',
                        'driver_lname'=>'$people.lastname',
                        'pass_name'=>'$pass.name',
                        'pass_lastname'=>'$pass.lastname',
                        'trip_id'=>'$_id',
                        'pickup'=>'$current_location',
                        'phone'=>'$pass.phone',
                        'drop'=>'$drop_location',
                        'pickup_time'=>'$pickup_time',
                        //'fare'=>'$trans.fare',
                        'wallet_amount_used'=>['$ifNull'=>['$trans.wallet_amount_used',0]],
                        'payment_type'=>'$trans.payment_type',
                        'add_amt'=>['$ifNull'=>['$trans.add_amt',0]],
                        'fare_details'=>'$fare_detail',
                        'fare_notes'=>'$fare_detail[6].value',
                        //'total_edited_fare'=>array('$sum'=>'$fare_detail.value'),
                        'createdby_username'=>['$ifNull'=>['$createdby_username','-']],
                        'payment_type'=>['$ifNull'=>['$trans.payment_type',0]],
                        'advance_payment'=>['$ifNull'=>['$trans.advance_payment',0]],
                        'pending_amt'=>['$cond'=>[
                            ['$gt'=>['$trans.driver_edit_status',0]],
                            ['$ifNull'=>['$trans.pending_amt',0]],
                            0,
                        ]],
                        'driver_edit_status'=>['$ifNull'=>['$trans.driver_edit_status',0]],
                        'actual_paid_amt'=>['$ifNull'=>['$trans.actual_paid_amt',0]],
                        //'create_day'=>array('$dateToString' => array('format'=> "%Y-%m-%d", 'date'=> '$pickup_time'))
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$driver_id',
                        'tripdet' =>['$push'=>'$$ROOT'],
                        //'create_day' => array('$first'=>'$create_day'),
                        'driver_id' => ['$first'=>'$driver_id'],
                        'driver_names' => ['$first'=>'$driver_name'],
                        'driver_lnames' => ['$first'=>'$driver_lname'],
                       //  'pass_id' => array('$push'=>'$pass_id'),
                       //  'trip_id' => array('$addToSet'=>'$trip_id'),
                       //  'phone' => array('$push'=>'$phone'),
                       //  'pickup' => array('$push'=>'$pickup'),
                       //  'drop' => array('$push'=>'$drop'),
                       //  'pass_names' => array('$push'=>'$pass_name'),
                       //  'pass_lastnames' => array('$push'=>'$pass_lastname'),
                       //  'fare' => array('$push'=>'$fare'),
                       //  'wallet_amount_used' => array('$push'=>'$wallet_amount_used'),
                       // //'total_edited_fare' => array('$addToSet,'$trans.add_amt''=>'$total_edited_fare'),
                       //  'payment_type' => array('$push'=>'$payment_type'),
                       //  'advance_payment' => array('$push'=>'$advance_payment'),
                       //  'pending_amt' => array('$push'=>'$pending_amt'),
                       //  'driver_edit_status' => array('$push'=>'$driver_edit_status'),
                       //  'pickup_time' => array('$push'=>'$pickup_time'),
                        'total_amount' => ['$sum' => '$fare'],
                        'total_pending_amt' => ['$sum' => '$pending_amt'],
                        'total_count' => ['$sum' => 1]
                    ]
                ],
               //array('$skip'   => (int)$offset ),
               //array('$limit'  => (int)$val ),
                 [
                    '$sort' => [ 
                        'driver_id' => -1
                    ],
                ],
            ];
            $merge_arguments = array_merge($common_arguments, $field_arguments);

            //echo "<pre>";echo json_encode($merge_arguments);
            $result    = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED, $merge_arguments);
// echo "<pre>";
//             print_r($result);exit;
            return (!empty($result['result'])) ? $result['result'] : [];
        }
    }

}
