<?php
defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Transaction model details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************/
Class Model_Zonefare extends Model
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


    public function validate_add_zone_fare($arr)
    {
       $validate = Validation::factory($arr)
            ->rule('zone_id', 'not_empty')
            ->rule('model_id', 'not_empty')
            ->rule('model_id', 'Model_Zonefare::checkZoneExistsModel', array(':value',$arr['zone_id']))
            ->rule('zone_fixed_fare', 'not_empty');
       return $validate;
    }

    public function add_zone_fare($post){
        //echo"<pre>"; print_r($post);exit();
        $user_createdby = $this->admin_userid;
        $rs = $this->mongo_db->find(MDB_ZONE_FARE,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$rs = iterator_to_array($rs);
		reset($rs);
		$rs_first_key = key($rs);
		$inc_id = $rs_first_key + 1;

        $param = array(
                    '_id' => $inc_id,
                    'zone_id'=>(int)$post['zone_id'],
                    'model_id'=>(int)$post['model_id'],
                    'is_pickup'=>isset($post['is_pickup'])?(int)$post['is_pickup']:(int)0,
                    'is_drop'=>isset($post['is_drop'])?(int)$post['is_drop']:(int)0,
                    'zone_fixed_fare'=>(double)$post['zone_fixed_fare'],
                    'status' => 'A',                     
                    'created_by'=>$user_createdby                 
        );
        $result = $this->mongo_db->insert(MDB_ZONE_FARE,$param);
        return $result;        
    }

    public function zone_detail($id)
    {
        $query = $this->mongo_db->find(MDB_ZONE_FARE,array('_id' => (int)$id));
        $result = iterator_to_array($query);
        $finrest = array_shift($result);
        return $finrest;
    }

    public function all_zone_detail()
    {
        $query = $this->mongo_db->find(MDB_ZONES,array('status' => 'A','is_airport'=>(int)0));
        $result = iterator_to_array($query);
        return $result;
    }

    public static function checkZoneExistsModel($model_id="",$zone_id)
    {		
        $mongodb = MangoDB::instance('default');
        $result = $mongodb->count(MDB_ZONE_FARE,array('model_id'=>(int)$model_id,'zone_id'=>(int)$zone_id));
        return ($result > 0)?false:true;
    }

    public function zone_fare_detail($id)
    {
        $arguments = array(
            array(
                '$match' => array('_id'=>(int)$id)
            ),
            array(
                '$lookup' => array(
                    'from' => MDB_ZONES,
                    'localField' => 'zone_id',
                    'foreignField' => '_id',
                    'as' => 'zones'
                )
            ),
            array(
                '$unwind' =>'$zones'
            ),
            array(
                '$lookup' => array(
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'model_id',
                    'foreignField' => '_id',
                    'as' => 'model'
                )
            ),
            array(
                '$unwind' =>'$model'
            ),
            //array('$sort' => array('zone_name' => -1)),
            array(
                '$project' => array(
                    '_id'=>'$_id',
                    'zone_id'=>'$zone_id',
                    'model_id'=>'$model_id',
                    'is_pickup'=>'$is_pickup',
                    'is_drop'=>'$is_drop',
                    'model_name'=>'$model.model_name',
                    'zone_name'=>'$zones.zone_name',
                    'zone_fixed_fare'=>'$zone_fixed_fare',
                    'status'=>'$status'
                )
            )
        );
    
    $res = $this->mongo_db->aggregate(MDB_ZONE_FARE,$arguments);
    return isset($res['result'][0])?$res['result'][0]:array();
    }

    public function validate_edit_zone_fare($arr,$id)
    {
        $validate = Validation::factory($arr)
            ->rule('zone_fixed_fare', 'not_empty');
        return $validate;
    }
    public function edit_zone_fare($postvalues,$id)
    {
        $user_createdby = $_SESSION['userid'];
		$param = array(
                    //'zone_id'=>$postvalues['zone_id'],
                    'zone_fixed_fare'=>(double)$postvalues['zone_fixed_fare'],
                    'is_pickup'=>isset($postvalues['is_pickup'])?(int)$postvalues['is_pickup']:(int)0,
                    'is_drop'=>isset($postvalues['is_drop'])?(int)$postvalues['is_drop']:(int)0,
                    'created_by'=>$user_createdby
                );
        $result = $this->mongo_db->update(MDB_ZONE_FARE,array('_id'=>(int)$id),array('$set'=>$param),array('upsert'=>false));        
        return (empty($result['err']))?1:$result['err'];
    }

    public function manage_zone_fare_search($keyword = "", $status = "",$offset ="",$val ="", $find_count=false)
    {	
    	$keyword       = str_replace("%", "!%", $keyword);
        $keyword       = str_replace("_", "!_", $keyword);
		$srch_query = array();
		//MongoDB with aggregate process only
		if((!empty($keyword)) && (!empty($status))) {
			$srch_query = array( "\$and" => array(array('status' => $status ),array("\$or"=>array(array( 'zone_name' => new MongoRegex("/$keyword/i")) ) ) ) );
		} else if (!empty($keyword)) {
			$srch_query = array("\$or"=>array(array( '$zones.zone_name' => new MongoRegex("/$keyword/i")) ));
		} else if (!empty($status)) {
			$srch_query = array( "\$and" => array(array('status' => $status )));
		} else {
			$srch_query = array( "\$and" => array(array('status' => 'A' )));
		}

		//echo '<pre>'; print_r($srch_query); exit();
		if(!empty($srch_query))
		{
			$arguments = array(
				array(
					'$match' => $srch_query
                ),
                array(
                    '$lookup' => array(
                        'from' => MDB_ZONES,
                        'localField' => 'zone_id',
                        'foreignField' => '_id',
                        'as' => 'zones'
                    )
                ),
                array(
                    '$unwind' =>'$zones'
                ),
                array(
                    '$lookup' => array(
                        'from' => MDB_MOTOR_MODEL,
                        'localField' => 'model_id',
                        'foreignField' => '_id',
                        'as' => 'model'
                    )
                ),
                array(
                    '$unwind' =>'$model'
                ),
				//array('$sort' => array('zone_name' => -1)),
				array(
					'$project' => array(
						'_id'=>'$_id',
                        'model_name'=>'$model.model_name',
                        'zone_name'=>'$zones.zone_name',
                        'zone_id'=>'$zone_id',
                        'model_id'=>'$model_id',
                        'zone_fixed_fare'=>'$zone_fixed_fare',
						'status'=>'$status'
					)
				)
			);
		}
		else
		{
			$arguments = array(
				array(
					'$match' => $srch_query
                ),
                array(
                    '$lookup' => array(
                        'from' => MDB_ZONES,
                        'localField' => 'zone_id',
                        'foreignField' => '_id',
                        'as' => 'zones'
                    )
                ),
                array(
                    '$unwind' =>'$zones'
                ),
                array(
                    '$lookup' => array(
                        'from' => MDB_MOTOR_MODEL,
                        'localField' => 'model_id',
                        'foreignField' => '_id',
                        'as' => 'model'
                    )
                ),
                array(
                    '$unwind' =>'$model'
                ),
				//array('$sort' => array('zone_name' => -1)),
				array(
					'$project' => array(
                        '_id'=>'$_id',
                        'model_name'=>'$model.model_name',
                        'zone_name'=>'$zones.zone_name',
                        'zone_id'=>'$zone_id',
                        'model_id'=>'$model_id',
                        'status'=>'$status',
                        'zone_fixed_fare'=>'$zone_fixed_fare',

					)
				)
			);
		}
		
		if($find_count == false){
			
			$arguments[]['$skip'] = (int)$offset;
			$arguments[]['$limit'] = (int)$val;
		}
	    $res = $this->mongo_db->aggregate(MDB_ZONE_FARE,$arguments);
	    //echo '<pre>'; print_r($res); exit();
	    $result = [];
	   if(!empty($res['result'])){
				foreach($res['result'] as $r){
                    $temp_arr['_id'] = $r['_id'];
                    $temp_arr['zone_id'] = $r['zone_id'];
                    $temp_arr['model_id'] = $r['model_id'];
                    $temp_arr['zone_name'] = $r['zone_name'];
                    $temp_arr['model_name'] = $r['model_name'];
                    $temp_arr['zone_fixed_fare'] = $r['zone_fixed_fare'];
					$temp_arr['status'] = isset($r['status'])?$r['status']:"";
					$result[] = $temp_arr;
				}
		}
		//echo '<pre>'; print_r($result); exit();
	   	return $result;
    }
    
    public function block_zone_fare_request($activeids)
    {
    	$active_ids = Commonfunction::mongo_format_array($activeids);
		//print_r($active_ids); exit();
		$result = $this->mongo_db->update(MDB_ZONE_FARE,array('_id'=>array('$in'=>$active_ids)),array('$set'=>array('status' => 'D')), array('multiple'=>true));
		return (empty($res['err']))?1:$res['errmsg'];
    }

    public function active_zone_fare_request($activeids)
    {
    	$active_ids = Commonfunction::mongo_format_array($activeids);
		//print_r($active_ids); exit();
		$result = $this->mongo_db->update(MDB_ZONE_FARE,array('_id'=>array('$in'=>$active_ids)),array('$set'=>array('status' => 'A')), array('multiple'=>true));
		return (empty($res['err']))?1:$res['errmsg'];
    }

    public function trash_zone_fare_request($activeids)
    {
    	$active_ids = Commonfunction::mongo_format_array($activeids);
		//print_r($active_ids); exit();
		$result = $this->mongo_db->update(MDB_ZONE_FARE,array('_id'=>array('$in'=>$active_ids)),array('$set'=>array('status' => 'T')), array('multiple'=>true));
		return (empty($res['err']))?1:$res['errmsg'];
    }

    public function all_model_details()
    {
        $company_id = 0;        
        if (FARE_SETTINGS == 2 && $company_id != 0) //company_id = 0 as Admin
		{
           $arguments = array(
							array('$lookup' => array(
								'from' => MDB_COMPANY,
								'localField' => '_id',
								'foreignField' => 'model_fare.model_id',					
								'as'=> "cdetails"
							)),
							array('$unwind'=>'$cdetails'),
							array('$match'=>array('cdetails._id'=>(int)$company_id)),
							array('$project'=>array('_id'=>'$_id','model_name'=>'$model_name'))
						);
            $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);
            $res = $result['result'];
            return (isset($res)?$res:array());
        } else {          
            $result = $this->mongo_db->find(MDB_MOTOR_MODEL,array('model_status'=>'A'))->sort(array('_id'=>1));
            $res = iterator_to_array($result);
            return (isset($res)?$res:array());
        }
    }
}