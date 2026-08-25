<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );
/**
 * Contains commonly used queries
 
 * @author     Ndot Team
 
 * @license    http://ndot.in/license
 
 */
class Model_Commonmodel extends Model
{
    public function __construct()
    {
        $this->session     = Session::instance();
        $this->currentdate = Commonfunction::getCurrentTimeStamp();
		
		//MongoDB Instance
        $this->mongo_db        = MangoDB::instance('default');
    }
    public function insert( $table, $arr )
    {
		$result = $this->mongo_db->insert($table, $arr );
		return ( empty($result['err']))?1:0;
    }
    public function update( $table, $arr, $cond1, $cond2 )
    {
        /*$result = DB::update( $table )->set( $arr )->where( $cond1, "=", $cond2 )->execute();
        //print_r($result);
        return $result;*/
         //~ print_r($arr);exit;
        //~ echo $cond2;exit;
       $result = $this->mongo_db->update($table,array($cond1 =>(int)$cond2),array('$set'=> $arr),array('multiple'=>true));
       //print_r($result);exit;
       
        return (empty($result['err']))? 1: $result['err'];
    }
    public function delete( $table, $cond1, $cond2 )
    {
        /*$result = DB::delete( $table )->where( $cond1, '=', $cond2 )->execute();
        return $result;*/
        $result = $this->mongo_db->remove($table,array($cond1 => (int)$cond2));
		return (empty($result['err']))?1:$result['err'];
    }
    public function select($table, $query )
    {
        $result = $this->mongo_db->find_one($table,$query);
        return $result;
    }
    public function select_all($table, $query, $fields )
    {
        $result = $this->mongo_db->find($table,$query, $fields);
        return (!empty($result))?iterator_to_array($result,false):array();
        
    }
       public function select_site_settings($field_name,$tablename)
    {
		if(is_array($field_name)){
			//MongoDB
			$result = $this->mongo_db->find_one($tablename,array(),$field_name);
			if(count($field_name) > 1){
				for($i=0;$i<count($field_name); $i++){
					$index = $field_name[$i];
					$result[$index] = $result[$index];
				}	
			}else{
				$result = $result[$field_name[0]];
			}
		}elseif(empty($field_name)){
			//MongoDB
			$result = $this->mongo_db->find_one($tablename,array());
			$result = isset($result)?$result:"";
		}else{
			//MongoDB
			$result = $this->mongo_db->find_one($tablename,array(),array($field_name));
			$result = isset($result[$field_name])?$result[$field_name]:"";
		}
		return (!empty($result))?$result:'';
    }
    public function select_site_settings_old()
    {
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_SITEINFO,array('_id'=>1));
		return (!empty($result))?$result:array();
    }
    public function get_meta_settings( $action )
    {
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_CMS,array('menu_link'=>$action),array('meta_keyword','meta_description','meta_title'));
		return (!empty($result))?$result:array();
    }
    /*Function Used to get the 
     * Driver and Taxi Details 
     * based upon the ID 
     */
    public function get_driver_details( $id )
    {
        $taxi_id               = DB::select( 'mapping_taxiid' )->from( TAXIMAPPING )->where( 'mapping_driverid', '=', $id )->where( 'mapping_status', '=', 'A' )->where( 'mapping_startdate', '<=', $this->currentdate )->where( 'mapping_enddate', '>=', $this->currentdate )->execute()->get( 'mapping_taxiid' );
        $mapping_companyid     = DB::select( 'mapping_companyid' )->from( TAXIMAPPING )->where( 'mapping_driverid', '=', $id )->where( 'mapping_status', '=', 'A' )->where( 'mapping_startdate', '<=', $this->currentdate )->where( 'mapping_enddate', '>=', $this->currentdate )->execute()->get( 'mapping_companyid' );
        //Driver Rating Need to bind with the result
        $ratings[ 'comments' ] = DB::select()->from( PASSENGERS_LOG )->where( 'driver_id', '=', $id )->where( 'travel_status', '=', 1 )->order_by( 'createdate', 'DESC' )->limit( 5 )->offset( 0 )->execute()->as_array();
        if ( isset( $_SESSION[ 'search_city' ] ) ) {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".city_name like '%" . $_SESSION[ 'search_city' ] . "%'  limit 0,1";
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
        }
        $model_fetch = Db::query( Database::SELECT, $model_base_query )->execute()->as_array();
        if ( count( $model_fetch ) > 0 ) {
            $city_model_fare = $model_fetch[ 0 ][ 'city_model_fare' ];
        } else {
            $model_base_query = "select city_model_fare from " . CITY . " where " . CITY . ".default=1";
            $model_fetch      = Db::query( Database::SELECT, $model_base_query )->execute()->as_array();
            $city_model_fare  = $model_fetch[ 0 ][ 'city_model_fare' ];
        }
        if ( FARE_SETTINGS == 2 ) {
            $fare_details_query = "select company.company_name,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".id=company.cid ) as cancellation_nfree,(SUM(company_model_fare.base_fare)*($city_model_fare)/100) + company_model_fare.base_fare as base_fare,(SUM(company_model_fare.min_fare)*($city_model_fare)/100) + company_model_fare.min_fare as min_fare,(SUM(company_model_fare.cancellation_fare)*($city_model_fare)/100) + company_model_fare.cancellation_fare as cancellation_fare,(SUM(company_model_fare.below_km)*($city_model_fare)/100) + company_model_fare.below_km as below_km,(SUM(company_model_fare.above_km)*($city_model_fare)/100) + company_model_fare.above_km as above_km,(SUM(company_model_fare.waiting_time)*($city_model_fare)/100) + motor_model.waiting_time as waiting_time,company_model_fare.below_above_km as below_above_km,motor_model.model_name,taxi.* from taxi 
			join company on taxi.taxi_company=company.cid
			JOIN " . COMPANY_MODEL_FARE . " as company_model_fare ON company_model_fare.`model_id`=taxi.`taxi_model` 
			join motor_model on taxi.taxi_model = motor_model.model_id 
			where company_cid=" . $mapping_companyid . " and taxi_id=" . $taxi_id;
        } else {
            $fare_details_query = "select company.company_name,(select cancellation_fare from " . COMPANYINFO . " where " . COMPANYINFO . ".id=company.cid ) as cancellation_nfree,(SUM(motor_model.base_fare)*($city_model_fare)/100) + motor_model.base_fare as base_fare,(SUM(motor_model.min_fare)*($city_model_fare)/100) + motor_model.min_fare as min_fare,(SUM(motor_model.cancellation_fare)*($city_model_fare)/100) + motor_model.cancellation_fare as cancellation_fare,(SUM(motor_model.below_km)*($city_model_fare)/100) + motor_model.below_km as below_km,(SUM(motor_model.above_km)*($city_model_fare)/100) + motor_model.above_km as above_km,(SUM(motor_model.waiting_time)*($city_model_fare)/100) + motor_model.waiting_time as waiting_time,motor_model.below_above_km as below_above_km,motor_model.model_name,taxi.* from taxi 
			join company on taxi.taxi_company=company.cid 
			join motor_model on taxi.taxi_model = motor_model.model_id 
			where taxi_id=" . $taxi_id;
        }
        //echo $fare_details_query; exit;
        $result                           = Db::query( Database::SELECT, $fare_details_query )->execute()->as_array();
        $taxi_additional_field            = DB::select( '*' )->from( ADDFIELD )->where( 'taxi_id', '=', $taxi_id )->execute()->as_array();
        $additional_field[ 'label_name' ] = DB::select( '*' )->from( MANAGEFIELD )->where( 'field_status', '=', 'A' )->execute()->as_array();
        return array_merge( $result, $taxi_additional_field, $ratings, $additional_field );
    }
    /** Driver availability **/
    public function get_driver_availability( $driver_id, $company_id, $pickup_time )
    {
        /*$sql = "SELECT * FROM ".PASSENGERS_LOG." WHERE `pickup_time` < '".$pickup_time."'  and `driver_id` = '".$driver_id."' and `driver_reply` = 'A' and `travel_status` != 1 order by passengers_log_id desc limit 1 "; */
        ///echo $company_id;
        if ( $company_id == '' ) {
            $current_time = date( 'Y-m-d H:i:s' );
            $start_time   = date( 'Y-m-d' ) . ' 00:00:01';
            $end_time     = date( 'Y-m-d' ) . ' 23:59:59';
        } else {
            $timezone_base_query = "select time_zone from  company where cid='$company_id' ";
            $timezone_fetch      = Db::query( Database::SELECT, $timezone_base_query )->execute()->as_array();
            if ( $timezone_fetch[ 0 ][ 'time_zone' ] != '' ) {
                $current_time = convert_timezone( 'now', $timezone_fetch[ 0 ][ 'time_zone' ] );
                $current_date = explode( ' ', $current_time );
                $start_time   = $current_date[ 0 ] . ' 00:00:01';
                $end_time     = $current_date[ 0 ] . ' 23:59:59';
            } else {
                $current_time = date( 'Y-m-d H:i:s' );
                $start_time   = date( 'Y-m-d' ) . ' 00:00:01';
                $end_time     = date( 'Y-m-d' ) . ' 23:59:59';
            }
        }
        if ( $company_id != '' ) {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . $start_time . "'";
            $sql       = "SELECT * FROM " . PASSENGERS_LOG . " WHERE `pickup_time` < '" . $pickup_time . "'  and `driver_id` = '" . $driver_id . "' and `driver_reply` = 'A' and `travel_status` != 1 and `travel_status` != 4  $condition order by passengers_log_id desc limit 1 ";
            //echo $sql;
        } else {
            $condition = "AND " . PASSENGERS_LOG . ".pickup_time >='" . date( 'Y-m-d 00:00:01' ) . "'";
            $sql       = "SELECT * FROM " . PASSENGERS_LOG . " WHERE `pickup_time` < '" . $pickup_time . "'  and `driver_id` = '" . $driver_id . "' and `driver_reply` = 'A' and `travel_status` != 1 and `travel_status` != 4  $condition order by passengers_log_id desc limit 1 ";
            //echo $sql;
        }
        //echo $sql;
        $availablity = Db::query( Database::SELECT, $sql )->execute()->as_array();
        return $availablity;
    }
    //Set Driver Status in Active in DRIVER Table
    public function set_status_driver( $lat, $long, $max, $id, $status )
    {
        $data      = $this->get_randorm_values( $lat, $long, $max );
        $dat_arr   = explode( "$", $data );
        $sql_query = array(
             'latitude' => $dat_arr[ 0 ],
            'longitude' => $dat_arr[ 1 ],
            'status' => $status 
        );
        $result    = DB::update( DRIVER )->set( $sql_query )->where( 'driver_id', '=', $id )->execute();
        return $data;
    }
    function get_randorm_values( $lat, $long, $max )
    {
        $longitude = (float) $long;
        $latitude  = (float) $lat;
        $radius    = rand( 1, $max ); // in miles
        $lng_min   = $longitude - $radius / abs( cos( deg2rad( $latitude ) ) * 69 );
        $lng_max   = $longitude + $radius / abs( cos( deg2rad( $latitude ) ) * 69 );
        $lat_min   = $latitude - ( $radius / 69 );
        $lat_max   = $latitude + ( $radius / 69 );
        return $lat_max . "$" . $lng_max;
    }
    public function get_passenger_details( $id )
    {
        $sql = "SELECT * FROM " . PASSENGERS . " WHERE id = '$id' ";
        //echo $sql;
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    //Get driver current status from driver break status 
    public function get_driver_current_break_status( $id )
    //echo $id;
    {
        $sql = "SELECT * FROM " . DRIVERBREAKSERVICE . " WHERE driver_break_service_id = '$id' ";
        //echo $sql;
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    //Get driver current Shift status from driver shift
    public function get_driver_current_shift_status( $driver_id )
    {
        $result = DB::select( '*' )->from( DRIVER )->join( DRIVERSHIFTSERVICE )->on( DRIVERSHIFTSERVICE . '.driver_id', '=', DRIVER . '.driver_id' )->where( DRIVER . '.driver_id', '=', $driver_id )->where( 'shift_start', '!=', '0000-00-00 00-00-00' )->where( 'shift_end', '=', '0000-00-00 00-00-00' )->execute()->as_array();
        if ( count( $result ) > 0 ) {
            $shift_status = $result[ 0 ][ 'shift_status' ];
        } else {
            $shift_status = "";
        }
        //$sql = "SELECT * FROM ".DRIVERSHIFTSERVICE." WHERE driver_shift_id = '$id' "; 
        //echo $sql;
        return $shift_status;
    }
    function get_motor_model( $motor_type )
    {
        $sql = "SELECT * FROM " . MOTORMODEL . " WHERE motor_mid = '$motor_type' ";
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    function getcontents( $action )
    {
        $sql = "SELECT * FROM " . CMS . " join " . MENU . " on " . CMS . ".menu_id = " . MENU . ".menu_id WHERE menu_link = '$action' and " . MENU . ".status_post='P' ";
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    public static function header_citylist( $country_id )
    {
        $result = DB::select()->from( CITY )->join( STATE, 'LEFT' )->on( CITY . '.city_stateid', '=', STATE . '.state_id' )->join( COUNTRY, 'LEFT' )->on( CITY . '.city_countryid', '=', COUNTRY . '.country_id' )->where( 'city_countryid', '=', $country_id )->where( 'state_status', '=', 'A' )->where( 'city_status', '=', 'A' )->order_by( 'city_name', 'ASC' )->execute()->as_array();
        return $result;
    }
    /**get country details**/
    public function country_details()
    {
        $result = DB::select()->from( COUNTRY )->where( 'country_status', '=', 'A' )->order_by( 'country_name', 'asc' )->execute()->as_array();
        return $result;
    }
    /**get city details**/
    public function city_details()
    {
        $result = DB::select()->from( CITY )->where( 'city_status', '=', 'A' )->order_by( 'city_name', 'asc' )->execute()->as_array();
        return $result;
    }
    /**get state details**/
    public function state_details()
    {
        $result = DB::select()->from( STATE )->where( 'state_status', '=', 'A' )->order_by( 'state_name', 'asc' )->execute()->as_array();
        return $result;
    }
    /** get location **/
    public function company_location( $cid )
    {
		$condition = array('_id'=>(int)$cid);
		$arguments = array(
		
		array('$project' => array(
		 'login_city' => '$companydetails.company_city',
		 'login_state' => '$companydetails.company_state',
		 'login_country' => '$companydetails.company_country'
		))
		);
		 $result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
		 return (!empty($result))?$result['result'][0]:array();
		
		/*$condition = ( $cid != 0 ) ? array('company_id'=>(int)$cid,'user_type'=>'C') : array('user_type'=>'A');
		$result = $this->mongo_db->find_one(MDB_PEOPLE,$condition,array('login_country', 'login_state', 'login_city'));
        return (!empty($result))?$result:array(); */
    }
    /**get state details**/
    public function gateway_details( $company_id = null, $booktype = null )
    {
		//MongoDB
		/*
		if ($company_id==null) {*/
			$query = ($booktype == 4)?array('pay_mod_active'=>1,'_id'=>array('$eq'=>4)):array('pay_mod_active'=>1,'_id'=>array('$ne'=>4));
			$result = $this->mongo_db->find(MDB_PAYMENT_MODULES,$query,array('_id','pay_mod_name','pay_mod_default'))->sort(array('_id'=>1));
			//echo '<pre>if';print_r(iterator_to_array($result));exit;
			return (!empty($result))?iterator_to_array($result,false):array();
		/*} else {
			$query = ($booktype == 1)?array('_id'=>(int)$company_id,'paymentmodule.pay_active'=>1,'paymentmodule.pay_mod_id'=>array('$ne'=>1)):array('_id'=>(int)$company_id,'paymentmodule.pay_active'=>1);
			
			$result = $this->mongo_db->find(MDB_COMPANY,$query,array('_id','paymentmodule.pay_mod_id','paymentmodule.pay_mod_name','paymentmodule.pay_mod_default'))->sort(array('paymentmodule.pay_mod_id'=>1));
			//echo '<pre>else';print_r(iterator_to_array($result));exit;
			$res = (!empty($result))?iterator_to_array($result):array();
			return (!empty($res))?$res[$company_id]['paymentmodule']:$res;
		}*/
    }
    public function sms_message( $sms_id = '' )
    {
		$trace = debug_backtrace();
		$lang = 'en';
		if (isset($trace[1])) {
          //$class = $trace[1]['class'];
		  //$function = $trace[1]['function'];
		  //$lang = $trace[1]['object']->lang;
		}
		$match_query = array('_id'=>(int)$sms_id);
		$arg = array(
				array('$match'	=> $match_query),
				array(
				'$project' => array(
					'sms_title'=>($lang == 'en')? '$sms_title' : '$arabic_sms_title',
					'sms_description' => ($lang == 'en')? '$sms_description' : '$arabic_sms_description'
				)
			));
		
		//$result = $this->mongo_db->find_one(MDB_SMS_TEMPLATES,array('sms_title'=> $sms_title));
		$qry = $this->mongo_db->aggregate(MDB_SMS_TEMPLATES,$arg);
		$result = $qry['result'];
		return (isset($result[0])?$result[0]:array()); 
    }
    public function get_passengers_details( $value = '', $check = '' )
    {
        if ( $check == 1 ) {
            $sql = "SELECT * FROM " . PASSENGERS . " WHERE email = '$value' ";
        } else {
            $sql = "SELECT * FROM " . PASSENGERS . " WHERE phone = '$value' ";
        }
        //echo $sql;
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    public function get_drivers_details( $value = '', $check = '' )
    {
        if ( $check == 1 ) {
            $sql = "SELECT * FROM " . PEOPLE . " WHERE email = '$value' and user_type='D'";
        } else {
            $sql = "SELECT * FROM " . PEOPLE . " WHERE phone = '$value' and user_type='D'";
        }
        //echo $sql;
        return Db::query( Database::SELECT, $sql )->execute()->as_array();
    }
    //Get driver current Shift status from driver shift
    public function get_driver_currentstatus( $driver_id )
    {
        /*$result = DB::select( 'shift_status' )->from( DRIVER )->where( DRIVER . '.driver_id', '=', $driver_id )->execute()->as_array();
       return ( count( $result ) > 0 )?$result[ 0 ][ 'shift_status' ]:"";*/
		
		//MongoDB
		$result = $this->mongo_db->find_one(MDB_DRIVER_INFO,array('_id'=>(int)$driver_id),array('shift_status'));
		return (!empty($result))?$result['shift_status']:"";
    }
    public function package_details()
    {
		$args = array(array('$project'=>array('package_name'=>'$package_name')),
					  array('$sort'=> array('package_name' => 1)));
		$result = $this->mongo_db->aggregate(MDB_PACKAGE,$args);
		//echo "<pre>";print_r($result);exit;
        return (!empty($result['result']) ? $result['result'] : array());
    }
    
    public function package_details_old()
    {
        $result = DB::select( 'package_name' )->from( PACKAGE )->order_by( 'package_name', 'asc' )->execute()->as_array();
        return $result;
    }
    public function update_commission( $pass_logid, $total_amount, $admin_commission )
    {
		$c_id = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS,array('_id'=> (int)$pass_logid),array('company_id')); 
        $company_id      = (!empty($c_id) ? $c_id['company_id'] : '');
		$match_query = array();
		if($company_id !='' && $company_id !=0){
			$match_query['upgrade_companyid'] = (int)$company_id;
		}
		$args = array(array('$lookup' => array(
											   'from' => MDB_PACKAGE,
											   'localField' => 'upgrade_packageid',
											   'foreignField' => '_id',
											   'as' => 'package')),
					  array('$unwind' => '$package'),
					  array('$match' => $match_query),
					  array('$project' => array('check_package_type' => '$check_package_type')),
					  array('$sort' => array('upgrade_id' => -1)),
					  array('$limit' => 1)					  
				);
		$first = $this->mongo_db->aggregate(MDB_PACKAGE_REPORT,$args);
		$first_results = (isset($first['result']) ? $first['result'] : array());
        if (count( $first_results ) > 0 ) {
            $check_package_type = $first_results[0]['check_package_type'];
        } else {
            $check_package_type = 'T';
        }        
		if ($check_package_type != 'N') {
            $admin_amt     = ( $total_amount * $admin_commission ) / 100; //payable to admin
            $admin_amt     = round( $admin_amt, 2);
            $total_balance = round($total_amount, 2);
            //Set Commission to Admin
			$update = $this->mongo_db->Update(MDB_PEOPLE,array('user_type' => 'A'),
											  array('$inc' =>array('account_balance' => $admin_amt)),
											  array('upsert' => false));
        } else {
            $admin_amt = 0;
        }
        $company_amt                          = $total_amount - $admin_amt;
        $company_amt                          = round( $company_amt, 2 );
		//Set Commission to Admin
		$update1 = $this->mongo_db->Update(MDB_PEOPLE,array('user_type' => 'C', 'company_id' => (int)$company_id),array('$inc' =>array('account_balance' => $company_amt)),array('upsert' => false));		
        $result_array                         = array();
        $result_array['admin_commission']   = $admin_amt;
        $result_array['company_commission'] = $company_amt;
        $result_array['trans_packtype']     = $check_package_type;
        return $result_array;
    }
    //Getting Current Time of the company Time
    public function getcompany_all_currenttimestamp( $company_id )
    {
        //echo $company_id;exit;
        if ( empty( $company_id ) ) {
            $current_time = convert_timezone( 'now', TIMEZONE );
            $current_date = explode( ' ', $current_time );
            $start_time   = $current_date[ 0 ] . ' 00:00:01';
            $end_time     = $current_date[ 0 ] . ' 23:59:59';
            $date         = $current_date[ 0 ] . ' %';
        } else {
			$time_zone="";
			$query = $this->mongo_db->find(MDB_COMPANY,array('_id'=>(int)$company_id),array('companydetails.time_zone'));
			$result = iterator_to_array($query);
			if(!empty($result)){
				$time_zone = isset($result[ $company_id ]['companydetails'][ 'time_zone' ])?$result[ $company_id ]['companydetails'][ 'time_zone' ]:"";
			}
            $timezonefetch       = $time_zone;
            if ( $timezonefetch != '' ) {
                $current_time = convert_timezone( 'now', $time_zone );
                $current_date = explode( ' ', $current_time );
            } else {
                $current_time = convert_timezone( 'now', TIMEZONE );
                $current_date = explode( ' ', $current_time );
                $start_time   = $current_date[ 0 ] . ' 00:00:01';
                $end_time     = $current_date[ 0 ] . ' 23:59:59';
                $date         = $current_date[ 0 ] . ' %';
            }
        }
        return $current_time;
    }
    //Getting Current Time of the company Time
    public function getdriver_currenttimestamp( $driver_id )
    {
        $timezone_base_query = "select time_zone from " . PEOPLE . " join " . COMPANY . " on " . COMPANY . ".cid=" . PEOPLE . ".company_id where id=" . $driver_id . "";
        $timezone_fetch      = Db::query( Database::SELECT, $timezone_base_query )->execute()->as_array();
        if ( $timezone_fetch[ 0 ][ 'time_zone' ] != '' ) {
            $current_time = convert_timezone( 'now', $timezone_fetch[ 0 ][ 'time_zone' ] );
            $current_date = explode( ' ', $current_time );
        } else {
            $current_time = convert_timezone( 'now', TIMEZONE );
            $current_date = explode( ' ', $current_time );
            $start_time   = $current_date[ 0 ] . ' 00:00:01';
            $end_time     = $current_date[ 0 ] . ' 23:59:59';
            $date         = $current_date[ 0 ] . ' %';
        }
        return $current_time;
    }
    public function company_tax( $company_id = '' )
    {
		//MongoDB
		$query = $this->mongo_db->find_one(MDB_COMPANY,array('_id'=>(int)$company_id),array('companyinfo.company_tax'));
		//echo '<pre>';print_r($query);exit;
		return (!empty($query))?$query['companyinfo'][ 'company_tax' ]:0;
    }
    public function company_timezone( $company_id = '' )
    {
		//MongoDB
		$query = $this->mongo_db->find_one(MDB_COMPANY,array('_id'=>(int)$company_id),array('companydetails.time_zone'));
		//echo '<pre>';print_r($query);exit;
		return (!empty($query))?$query['companydetails'][ 'time_zone' ]:TIMEZONE;
    }
    public function getcurrencycode()
    {
		//MongoDB
		$result = $this->mongo_db->find(MDB_CSC,array('country_status'=>'A'),array('currency_code','currency_symbol'))->sort(array('_id'=>1));
		//echo '<pre>';print_r(iterator_to_array($result));exit;
		return (!empty($result))?iterator_to_array($result):array();
    }
    public function getcurrencysymbol()
    {
        $getcurrencysymbol = DB::select( 'currency_symbol' )->from( COUNTRY )->order_by( 'country_id', 'ASC' )->execute();
        return $getcurrencysymbol;
    }
    public function get_passengerlogdetails( $log_id )
    {
        $driverid_query = "select driver_id from  passengers_log where passengers_log_id='$log_id' ";
        $driverid_fetch = Db::query( Database::SELECT, $driverid_query )->execute()->as_array();
        $driver_id      = $driverid_fetch[ 0 ][ 'driver_id' ];
        if ( $driver_id != '' ) {
            $drivername_query = "select name from  people where id='$driver_id' ";
            $drivername_fetch = Db::query( Database::SELECT, $drivername_query )->execute()->as_array();
            $driver_name      = $drivername_fetch[ 0 ][ 'name' ];
        } else {
            $driver_name = '';
        }
        return $driver_name;
    }
    public function sms_message_by_title( $sms_title = '' )
    {
		$trace = debug_backtrace();
		$lang = 'en';
		if (isset($trace[1])) {
          //$class = $trace[1]['class'];
		  //$function = $trace[1]['function'];
		 // $lang = $trace[1]['object']->lang;
		}
		$match_query = array('sms_title'=>$sms_title);
		$arg = array(
				array('$match'	=> $match_query),
				array(
				'$project' => array(
					'sms_title'=>($lang == 'en')? '$sms_title' : '$arabic_sms_title',
					'sms_description' => ($lang == 'en')? '$sms_description' : '$arabic_sms_description'
				)
			));
		
		//$result = $this->mongo_db->find_one(MDB_SMS_TEMPLATES,array('sms_title'=> $sms_title));
		$qry = $this->mongo_db->aggregate(MDB_SMS_TEMPLATES,$arg);
		$result = $qry['result'];
		return (isset($result[0])?$result[0]:array());        
    }
	
	public function getParent($id)
    {
        $result = $this->mongo_db->find_one(MDB_PASSENGERS,array('_id'=> (int)$id), array('name','lastname'));
		return (isset($result)?$result:array());        
    }
	
    //**** Booking key generator *******/
    public function get_randonkey()
    {
        // Booking key generator //
        $bookingkey_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key from passengers_log Having NOT EXISTS (select booking_key from passengers_log having booking_key=random_key) limit 1";
        $bookingkey_result = Db::query( Database::SELECT, $bookingkey_query )->execute()->as_array();
        if ( count( $bookingkey_result ) > 0 ) {
            $booking_key = $bookingkey_result[ 0 ][ 'random_key' ];
        } else {
            $bookingkey_query  = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key";
            $bookingkey_result = Db::query( Database::SELECT, $bookingkey_query )->execute()->as_array();
            $booking_key       = $bookingkey_result[ 0 ][ 'random_key' ];
        }
        return $booking_key;
    }
    /** get location **/
    public function get_country_details( $cid )
    {
        /*$result = DB::select( PEOPLE . '.login_country', PEOPLE . '.login_state', PEOPLE . '.login_city', COUNTRY . '.country_name' )->from( PEOPLE )->join( COUNTRY, 'LEFT' )->on( COUNTRY . '.country_id', '=', PEOPLE . '.login_country' )->where( PEOPLE . '.company_id', '=', $cid )->where( PEOPLE . '.user_type', '=', 'C' )->execute()->as_array();
        return $result;*/
		
		//MongoDB
		$match_query = array('people.company_id'=>(int)$cid,'people.user_type'=>'C');
		$arguments = array(
			array('$unwind' => '$stateinfo'),
			array('$unwind' => '$stateinfo.cityinfo'),
			array('$lookup' 		=> array(
					'from'			=>	MDB_PEOPLE,
					'localField'	=> 'stateinfo.cityinfo.city_id',
					'foreignField'	=> "login_city",
					'as'			=> "people"
				)
			),
			array('$unwind' => '$people'),
			array('$match'	=> $match_query),
			array(
				'$project' => array('_id'=>0,
					'country_name'=>'$country_name',
					'login_country' => '$people.login_country',
					'login_state' => '$people.login_state',
					'login_city' => '$people.login_city',
				)
			),
			array(
				'$sort' => array(
					'people.created_date' => 1
				),
			),
		);
        $result = $this->mongo_db->aggregate(MDB_CSC,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']))?$result['result']:array();
    }
	/******************** Get default payment gateway of Specific company *********************/
	public function company_payment_details($cid)
	{
		/*$sql = "SELECT pg.payment_gateway_id as payment_type,pg.paypal_api_username as payment_gateway_username,pg.paypal_api_password as payment_gateway_password,pg.paypal_api_signature as payment_gateway_key,ci.company_currency_format as gateway_currency_format,pg.payment_method as payment_method FROM ".PAYMENT_GATEWAYS." as pg join ".COMPANYINFO." as ci on pg.company_id=ci.company_cid WHERE pg.company_id = '$cid' and pg.default_payment_gateway=1";
		$result =  Db::query(Database::SELECT, $sql)->execute()->as_array();
		return $result;*/
		
		//MongoDB
		$match_query = array('pg.company_id'=>(int)$cid,'pg.default_payment_gateway'=>1);
		$arguments = array(
			array('$lookup' 		=> array(
					'from'			=>	MDB_PAYMENT_GATEWAYS,
					'localField'	=> "_id",
					'foreignField'	=> "company_id",
					'as'			=> "pg"
				)
			),
			array('$unwind' => '$pg'),
			array('$match'	=> $match_query),
			array(
				'$project' => array('_id'=>0,
					'payment_type'=>'$pg.payment_gateway_id',
					'payment_gateway_username' => '$pg.paypal_api_username',
					'payment_gateway_password' => '$pg.paypal_api_password',
					'payment_gateway_key' => '$pg.paypal_api_signature',
					'gateway_currency_format' => '$companyinfo.company_currency_format',
					'payment_method' => '$pg.payment_method',
					'gateway_name' => '$pg.payment_gatway',
				)
			)
		);
        $result = $this->mongo_db->aggregate(MDB_COMPANY,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']))?$result['result']:array();
	}
	/******************** Get default payment gateway of Specific company *********************/
	public function payment_gateway_details()
	{
		/*$sql = "SELECT payment_gateway_id as payment_type,paypal_api_username as payment_gateway_username,paypal_api_password as payment_gateway_password,paypal_api_signature as payment_gateway_key,currency_code as gateway_currency_format,payment_method as payment_method FROM ".PAYMENT_GATEWAYS."  WHERE company_id = '0' and default_payment_gateway=1";
		$result =  Db::query(Database::SELECT, $sql)->execute()->as_array();
		return $result;*/
		
		//MongoDB
		$match_query = array('company_id'=>0,'default_payment_gateway'=>1);
		$arguments = array(
			array('$match'	=> $match_query),
			array(
				'$project' => array('_id'=>0,
					'payment_type'=>'$payment_gateway_id',
					'payment_gateway_username' => '$paypal_api_username',
					'payment_gateway_password' => '$paypal_api_password',
					'payment_gateway_key' => '$paypal_api_signature',
					'gateway_currency_format' => '$currency_code',
					'payment_method' => '$payment_method',
					'gateway_name' => '$payment_gatway',
				)
			)
		);
        $result = $this->mongo_db->aggregate(MDB_PAYMENT_GATEWAYS,$arguments);
		//echo "<pre>"; print_r($result); exit;
		return (!empty($result['result']))?$result['result']:array();
	}
	//update brain tree settlement payment status
	public function mongo_update($collection_name,$update_array,$match_condition)
	{
		$result = $this->mongo_db->update($collection_name,$match_condition,array('$set'=>$update_array),array('upsert'=>false));
		return (empty($result['err']))?1:$result['errmsg'];
	}
	
	public function get_auto_id($table_name)
	{
		$result = $this->mongo_db->find($table_name,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$id = iterator_to_array($result);
		reset($id);
		$first_key = key($id);
		return $first_key+1;
	}
	public function get_tripdetails($passenger_id,$travel_status,$pay_choosen_flag,$end_time,$weekstart_time)
        {
            $match_array = array(
                'travel_status' => $travel_status,
                'payment_type' => $pay_choosen_flag,
                'passengers_id' => array('$in'=>array((int)$passenger_id)),
                'actual_pickup_time' => array('$gte' => new MongoDate(strtotime($weekstart_time)),'$lte' => new MongoDate(strtotime($end_time))),
            );
                 //print_r($match_array);
            $arguments = array(
                            array('$lookup'=> array(
                                'from'          => PASSENGERS,
                                'localField'    => 'passengers_id',
                                'foreignField'  => '_id',
                                'as'            => 'passenger'
                            )), array('$unwind'=> '$passenger'),
                            array('$lookup' 		=> array(
                                'from'		=> PEOPLE,
                                'localField'	=> "driver_id",
                                'foreignField'	=> "_id",
                                'as'		=> "driver"
				)),array('$unwind' => '$driver'),
                            array('$lookup' => array(
                                'from' => MDB_TRANSACTION,
                                'localField'=>'_id',
                                'foreignField' => 'passengers_log_id',
                                'as'=>'trans'
                            )),array('$unwind'=>'$trans'),
                
                            array('$match'  => $match_array),
                            array(
                                '$project' => array('_id'=>'$_id',
					'passenger_name'=>'$passenger.name',
					'passenger_email'=>'$passenger.email',
					'driver_name'=>'$driver.name',
					'current_location' => '$current_location',
					'drop_location' => '$drop_location',
					'fare' => '$trans.fare',
					'trip_fare' => '$trans.tripfare',
					'distance_unit' => '$trans.distance_unit',
					'distance' => '$distance',
					'company_tax' => '$company_tax',
					'createdate' => '$createdate',
					)
                                )
                        );
            return $this->mongo_db->aggregate(PASSENGERS_LOG,$arguments); 
    }
	public function hasabe_auth($array) 
        {        
            $var1   = number_format($array['amt'], 3, '.', '');
            $var2   = $array['_id'];
            $var3   = $array['passenger_id'];
            $var4   = $array['from'];
        
            $api_model      = Model::factory(MOBILEAPI_107);
            $success_url    = URL_BASE."knet_response.html";
            $failure_url    = URL_BASE."knet_response.html";

            $knet_details   = $api_model->knet_details();
            $knet_alias     = $knet_details['knet_alias'];
            $payment_method = $knet_details['payment_method'];
            $knet_type      = ($payment_method =="L") ? "live" : "sandbox";
            
            if ( $knet_type == "live") {
                $url ="https://www.hesabe.com/authpost";                        
            } else {
                $url ="http://demo.hesabe.com/authpost";        
            }
        
            $data="MerchantCode=$knet_alias&Amount=$var1&SuccessUrl=$success_url&FailureUrl=$failure_url&Variable1=$var1&Variable2=$var2&Variable3=$var3&Variable4=$var4&Method=1";

            $result= $this->common_curl_json_request($data,$url);
            return $result;
    }
    
    public function common_curl_json_request($data,$url) 
    {
        $data_string = $data;        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        $result = json_decode(curl_exec($ch));
        return $result;
    }
    
    // 03 Feb 2020
    public function get_dispacttripdetails($plog_id)
    {
        $match_array = array(
            '_id' => (int)$plog_id
            );
             //print_r($match_array);
        $arguments = array(
                        array('$match'  => $match_array),
                        array('$lookup'=> array(
                            'from'          => PASSENGERS,
                            'localField'    => 'passengers_id',
                            'foreignField'  => '_id',
                            'as'            => 'passenger'
                        )), array('$unwind' =>  array( 'path' =>  '$passenger', 'preserveNullAndEmptyArrays' =>  true)),
                        array('$lookup' 		=> array(
                            'from'		=> PEOPLE,
                            'localField'	=> "driver_id",
                            'foreignField'	=> "_id",
                            'as'		=> "driver"
                            )),array('$unwind' =>  array( 'path' =>  '$driver', 'preserveNullAndEmptyArrays' =>  true)),
                        array(
                            '$project' => array('_id'=>'$_id',
                            'p_phone'=>'$passenger.phone',
                            'p_country_code'=>'$passenger.country_code',
                            'p_device_token'=>'$passenger.device_token',
                            'p_device_id'=>'$passenger.device_id',
            			    'p_device_type'=>'$passenger.device_type',
                            'd_name'=>'$driver.name',
                            'd_phone'=>'$driver.phone',
                            )
                            )
                    );
        return $this->mongo_db->aggregate(PASSENGERS_LOG,$arguments); 
    }
    // 03 Feb 2020

    public function get_tripdetails_forcron($travel_status,$pay_choosen_flag,$end_time,$weekstart_time,$pay_mod)
        {
            $match_array = array(
                'travel_status' => $travel_status,
                'payment_type' => $pay_choosen_flag,
                'passenger.pay_by'=>(int)$pay_mod,
                'actual_pickup_time' => array('$gte' => new MongoDate(strtotime($weekstart_time)),'$lte' => new MongoDate(strtotime($end_time))),
            );
                 //print_r($match_array);
            $arguments = array(
                            array('$lookup'=> array(
                                'from'          => PASSENGERS,
                                'localField'    => 'passengers_id',
                                'foreignField'  => '_id',
                                'as'            => 'passenger'
                            )), array('$unwind'=> '$passenger'),
                            
                            array('$lookup'         => array(
                                'from'      => PEOPLE,
                                'localField'    => "driver_id",
                                'foreignField'  => "_id",
                                'as'        => "driver"
                            )),array('$unwind' => '$driver'),
                            
                            array('$lookup' => array(
                                'from' => MDB_TRANSACTION,
                                'localField'=>'_id',
                                'foreignField' => 'passengers_log_id',
                                'as'=>'trans'
                            )),array('$unwind'=>'$trans'),
                
                            array('$match'  => $match_array),
                            
                            array(
                                '$project' => array('trip_id'=>'$_id',
                                    'passenger_id'=>'$passenger._id',
                                    'passenger_name'=>'$passenger.name',
                                    'passenger_email'=>'$passenger.email',
                                    'passenger_phone'=>'$passenger.phone',
                                    'passenger_country_code'=>'$passenger.country_code',
                                    'passenger_payby'=>'$passenger.pay_by',
                                    'driver_name'=>'$driver.name',
                                    'current_location' => '$current_location',
                                    'drop_location' => '$drop_location',
                                    'fare' => '$trans.fare',
                                    'trip_fare' => '$trans.tripfare',
                                    'distance_unit' => '$trans.distance_unit',
                                    'distance' => '$distance',
                                    'company_tax' => '$company_tax',
                                    'createdate' => '$createdate',
                                )
                            ),
                            
                            array(
                                '$group' =>array('_id' => array(
                                        'passenger_id'=>'$passenger_id',
                                        'passenger_name'=>'$passenger_name',
                                        'passenger_email'=>'$passenger_email',
                                        'passenger_phone'=>'$passenger_phone',
                                        'passenger_country_code'=>'$passenger_country_code',
                                        'passenger_payby'=>'$passenger_payby',

                                    ),
                                    'total_fare'=>array('$sum'=>'$fare'),
                                    'trip_count' => array('$sum' => 1),
                                    'trip_details'=>array(
                                        '$push'=>array(
                                            'driver_name'=>'$driver_name',
                                            '_id'=>'$trip_id',
                                            'current_location'=>'$current_location',
                                            'createdate'=>'$createdate',
                                            'drop_location'=>'$drop_location',
                                            'distance_unit'=>'$distance_unit',
                                            'trip_fare'=>'$trip_fare',
                                            'fare'=>'$fare',
                                            'distance'=>'$distance'
                                        )
                                    ),
                                   
                                )
                            )
                            
                        );
            return $this->mongo_db->aggregate(PASSENGERS_LOG,$arguments); 
        }
        
		public function get_milestones() {			
			//MongoDB
			$result    = $this->select_all(MDB_TAXI_SERVICE_RANGE, array('status'=>'A') ,array('km','label'));
			return $result;
		}
		
		// 03 Feb 2020
		public function get_model_detail_info($model_id) {
			$match_array = array(
				'_id' => (int)$model_id
				);
				 //print_r($match_array);
			$arguments = array(
							array('$match'  => $match_array),
							array(
								'$project' => array('_id'=>'$_id',
								'model_name'=>'$model_name'
								)
							)
						);
			$result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments); 			
			return isset($result['result'][0]['model_name']) ? $result['result'][0]['model_name'] : '';
		}
		
		public function generateStaticMap($log_id,$pickup,$drop) {			
			$pickup = str_replace(" ","%20",$pickup);
			$drop = str_replace(" ","%20",$drop);
			$mapurl = "https://maps.googleapis.com/maps/api/staticmap?&size=400x150&style=visibility:on%20&style=feature:landscape%7Celement:geometry%7Cvisibility:on%20&markers=anchor:topleft%7Cicon:http://www.q8grandlimo.com/public/images/pickup_icon.png%7C".$pickup."&markers=anchor:topright%7Cicon:http://www.q8grandlimo.com/public/images/drop_icon.png%7C".$drop."&zoom=8&key=AIzaSyDkF0LxjCzQCOItfPcOfNlp5j6KeKqOI90";
			
			try {
				 $data = @file_get_contents( $mapurl);
				 @file_put_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$log_id.'.png', $data);
			}
			catch (Kohana_Exception $e) {
				
			}						
		}
		
		public function get_surge_price_model_list() {
     $match_array = array(
            'model_status' => 'A'
        );
         //print_r($match_array);
      $arguments = array(
              array('$match'  => $match_array),
              array(
                '$project' => array('_id'=>'$_id',
                'model_name'=>'$model_name',
                'surge_pricing_status'=>'$surge_pricing_status',
                'surge_pricing_fare'=>'$surge_pricing_fare',
                'surge_pricing_custom_interval' => array('$filter' => array('input'=>'$surge_pricing_custom_interval','as'=>'custom_interval','cond'=>array('$eq'=>array('$$custom_interval.default',1)))),
                'surge_pricing_manual_interval' => array('$filter' => array('input'=>'$surge_pricing_manual_interval','as'=>'manual_interval','cond'=>array('$eq'=>array('$$manual_interval.default',1)))),
                )
            ),
            // array('$unwind'=>'$surge_pricing_manual_interval'),
            // array('$unwind'=>'$surge_pricing_fare'),
            array(
                '$sort' => array(
                    'surge_pricing_fare.fare'=> -1,
                    'surge_pricing_manual_interval.default'=> 1
                ),
            ),
            array('$group'=>array(
                "_id" => '$_id',
                'surge_pricing_manual_interval'=>array('$first'=>'$surge_pricing_manual_interval'),
                'surge_pricing_custom_interval'=>array('$first'=>'$surge_pricing_custom_interval'),
                'surge_pricing_fare'=> array('$first'=>'$surge_pricing_fare'),
                'model_name'=>array('$first'=>'$model_name'),
                'surge_pricing_status'=>array('$first'=>'$surge_pricing_status'),

            )),
            array('$sort'=>array('_id'=>1))
        );
      $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);       
      //echo "<pre>";print_r($result);exit;
      return isset($result['result']) ? $result['result'] : array();
    }

    public function get_surge_price_model_list2() {
      $match_array = array(
        'model_status' => 'A'
        );
         //print_r($match_array);
      $arguments = array(
                array('$match'  => $match_array),
                array(
                    '$project' => array('_id'=>'$_id',
                    'model_name'=>'$model_name',
                    'surge_pricing_status'=>'$surge_pricing_status',
                    'surge_pricing_fare'=>'$surge_pricing_fare',
                    'surge_pricing_manual_interval'=>'$surge_pricing_manual_interval',
                    'surge_pricing_custom_interval'=>'$surge_pricing_custom_interval',
                    'surge_pricing_status'=>'$surge_pricing_status',
                    )
                ),
                array('$unwind'=>'$surge_pricing_manual_interval'),
                array('$unwind'=>'$surge_pricing_fare'),
                array(
                    '$sort' => array(
                        '_id'=>-1,
                        'surge_pricing_fare.fare'=> -1,
                        'surge_pricing_manual_interval.default'=> 1
                    ),
                ),
                array('$group'=>array('_id' => '$_id',
                    'id' => array('$first' => '$_id' ),
                    'model_name' => array('$first' => '$model_name' ),
                    'surge_pricing_manual_interval' => array('$addToSet' => '$surge_pricing_manual_interval' ),
                    'surge_pricing_fare' => array('$addToSet' => '$surge_pricing_fare' ),
                    'surge_pricing_custom_interval' => array('$first' => '$surge_pricing_custom_interval' ),
                    'surge_pricing_status' => array('$first' => '$surge_pricing_status' 
                )))
            );
      $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);      
       //echo "<pre>";print_r($result);exit;
      return isset($result['result']) ? $result['result'] : array();
    }
		
		public function update_surge_price($model_id, $data) {	
			// print "<pre>";
			// print_r($model_id);
			// print_r($data);
   //          exit;
			$result = $this->mongo_db->find_one(MDB_MOTOR_MODEL,array('_id'=>(int)$model_id),array('surge_pricing_fare','surge_pricing_manual_interval','surge_pricing_custom_interval'));
			
			if(isset($data['surge_pricing_manual_interval']) && !empty($data['surge_pricing_manual_interval'])) {
				$interval = isset($data['surge_pricing_manual_interval'][$model_id]) ? $data['surge_pricing_manual_interval'][$model_id] : array();				
				if(isset($interval) && !empty($interval)) {
					foreach($result['surge_pricing_manual_interval'] as $k => $v) {
						$range = $v['from'].'-'.$v['to'];
						if(in_array($range, $interval)) {
							$result['surge_pricing_manual_interval'][$k]['default'] = 1;
						} else {
							$result['surge_pricing_manual_interval'][$k]['default'] = 0;
						}
					}					
				} else {
					foreach($result['surge_pricing_manual_interval'] as $k => $v) {
						$result['surge_pricing_manual_interval'][$k]['default'] = 0;						
					}
				}
				$qry = array('_id'=>(int)$model_id);
				$update_array['surge_pricing_manual_interval'] = $result['surge_pricing_manual_interval'];
				$res = $this->mongo_db->update(MDB_MOTOR_MODEL,$qry,array('$set'=>$update_array),array('multiple'=>true));								
			}
			
			if(isset($data['surge_pricing_custom_interval'])&&isset($data['surge_pricing_manual_interval_backup'])) {
				$interval = isset($data['surge_pricing_custom_interval'][$model_id]) ? $data['surge_pricing_custom_interval'][$model_id] : array();	
                $custom_price = $data['surge_pricing_manual_interval_backup'];
                $form_value = array();
				if(isset($interval) && !empty($interval)) {
					foreach($custom_price as $k => $v) {
                        $temp = explode("-", $v);
                        if($temp[0] == $model_id){
                            $range = $temp[1].'-'.$temp[2];
    						if(in_array($range, $interval)) {
    							array_push($form_value,(object)["from"=>(int)$temp[1],"to"=>(int)$temp[2],'default'=>(int)1]);
    						} else {
    							array_push($form_value,(object)["from"=>(int)$temp[1],"to"=>(int)$temp[2],'default'=>(int)0]);
    						}
                        }
					}					
				} else {
					foreach($custom_price as $k => $v) {
                        $temp = explode("-", $v);
                        if($temp[0] == $model_id){
						array_push($form_value,(object)["from"=>(int)$temp[1],"to"=>(int)$temp[2],'default'=>(int)0]);
                        }						
					}
				}
				
				$qry = array('_id'=>(int)$model_id);
				$update_array['surge_pricing_custom_interval'] = $form_value;
				$res = $this->mongo_db->update(MDB_MOTOR_MODEL,$qry,array('$set'=>$update_array),array('multiple'=>true));								
			}

            if(isset($data['surge_pricing_fare']) && !empty($data['surge_pricing_fare'])) {
				$fare = isset($data['surge_pricing_fare'][$model_id]) ? $data['surge_pricing_fare'][$model_id] : 0;				
				if(isset($fare) && !empty($fare)) {
					foreach($result['surge_pricing_fare'] as $k => $v) {
						if($v['fare'] == $fare) {
							$result['surge_pricing_fare'][$k]['default'] = 1;
						} else {
							$result['surge_pricing_fare'][$k]['default'] = 0;
						}
					}					
				}
				$qry = array('_id'=>(int)$model_id);
				$update_array['surge_pricing_fare'] = $result['surge_pricing_fare'];
				$res = $this->mongo_db->update(MDB_MOTOR_MODEL,$qry,array('$set'=>$update_array),array('multiple'=>true));
				
				//~ $fare = $data['surge_pricing_fare'][$model_id];
				//~ $res = $this->mongo_db->update(MDB_MOTOR_MODEL,array('_id'=>(int)$model_id,'surge_pricing_fare.fare'=>(double)$fare),array('$set'=>array('surge_pricing_fare.$.default' => (int)1)),array('multiple'=>true));
				//~ if(empty($res['err'])){
					//~ echo "cool";
					//~ $result = $this->mongo_db->update(MDB_MOTOR_MODEL,array('_id'=>(int)$model_id,'surge_pricing_fare.fare'=>array('$ne'=>$fare),'surge_pricing_fare.default'=>(int)1),array('$set'=>array('surge_pricing_fare.$.default' => (int)0)),array('multiple'=>true));
				//~ }				
			}

            //Feb 19 2021
            if(isset($data['time_interval']) && empty($data['time_interval']) && !isset($data['surge_pricing_custom_interval'])) {
                $form_value = array();
                $qry = array('_id'=>(int)$model_id);
                $update_array['surge_pricing_custom_interval'] = $form_value;
                $res = $this->mongo_db->update(MDB_MOTOR_MODEL,$qry,array('$set'=>$update_array),array('multiple'=>true));
            }
            //Feb 19 2021

			if(empty($res['err'])){
                echo 1;
            } else {
                echo 0;
            }
			exit;
		
		}
		
		public function get_surge_price_model_item($id) {
			 $match_array = array(
					'model_status' => 'A',
					'_id' => (int)$id
				);
				 //print_r($match_array);
			  $arguments = array(
					  array('$match'  => $match_array),
					  array(
						'$project' => array('_id'=>'$_id',
						'model_name'=>'$model_name',
						'surge_pricing_status'=>'$surge_pricing_status',
						'surge_pricing_fare'=>'$surge_pricing_fare',
						'surge_pricing_custom_interval' => '$surge_pricing_custom_interval',
						'surge_pricing_manual_interval' => '$surge_pricing_manual_interval',
                        'surge_pricing_interval' => '$surge_pricing_interval',//26 feb 2021
                        'total_drivers' => '$total_drivers',//26 feb 2021
                        'book_later_fare' => '$book_later_fare',//26 feb 2021
                        'book_later_display_fare' => '$book_later_display_fare',//26 feb 2021
                        'book_later_time_interval' => '$book_later_time_interval',//26 feb 2021

						)
					),
					array('$unwind'=>'$surge_pricing_manual_interval'),
					array('$unwind'=>'$surge_pricing_fare'),
					array(
						'$sort' => array(
							'surge_pricing_fare.fare'=> -1,
							'surge_pricing_manual_interval.default'=> 1
						),
					),
					array('$group'=>array('_id' => '$_id',
						'id' => array('$first' => '$_id' ),
						'model_name' => array('$first' => '$model_name' ),
						'surge_pricing_manual_interval' => array('$addToSet' => '$surge_pricing_manual_interval' ),
						'surge_pricing_fare' => array('$addToSet' => '$surge_pricing_fare' ),
						'surge_pricing_custom_interval' => array('$first' => '$surge_pricing_custom_interval' ),
                        'surge_pricing_interval' => array('$first' => '$surge_pricing_interval' ),//26 feb 2021
                        'total_drivers' => array('$first' => '$total_drivers' ),//26 feb 2021 
                        'book_later_fare' => array('$first' => '$book_later_fare' ),//26 feb 2021
                        'book_later_display_fare' => array('$first' => '$book_later_display_fare' ),//26 feb 2021
                        'book_later_time_interval' => array('$first' => '$book_later_time_interval' ),//26 feb 2021
						'surge_pricing_status' => array('$first' => '$surge_pricing_status')
                    ))					
				);
			  //echo json_encode($arguments); exit;	
			  $result = $this->mongo_db->aggregate(MDB_MOTOR_MODEL,$arguments);       
			  return isset($result['result']) ? $result['result'] : array();
		}
		// 03 Feb 2020

        //Feb 19 2021
        public function update_trip_surge_price($model_id,$pickup_date,$trip_id) {
            $surge_item = $this->get_surge_price_model_item($model_id);
            if(isset($surge_item[0]['surge_pricing_status']) && $surge_item[0]['surge_pricing_status'] == 'A') {
                $pdate = explode(" ",$pickup_date); 
                $date = new DateTime($pdate[1]);
                $h_m = $date->format("H:i");
                $h_m_s = Commonfunction::convert_hours_to_seconds($h_m);
                $surge_pricing_status = $surge_price_percentage = 0;
                if(isset($surge_item[0]['surge_pricing_custom_interval']) && !empty($surge_item[0]['surge_pricing_custom_interval'])) {
                    foreach($surge_item[0]['surge_pricing_custom_interval'] as $k => $v) {
                        if($v['default'] == 1) {
                            if ($h_m_s > $v['from'] && $h_m_s < $v['to']) {
                               $surge_pricing_status = 1;
                            }
                        }
                    }
                }
                if(isset($surge_item[0]['surge_pricing_custom_interval']) && empty($surge_item[0]['surge_pricing_custom_interval'])) {
                    if(isset($surge_item[0]['surge_pricing_manual_interval']) && !empty($surge_item[0]['surge_pricing_manual_interval'])) {
                        foreach($surge_item[0]['surge_pricing_manual_interval'] as $k => $v) {
                            if($v['default'] == 1) {
                                if ($h_m_s > $v['from'] && $h_m_s < $v['to']) {
                                   $surge_pricing_status = 1;
                                }
                            }
                        }
                    }
                }

                if(isset($surge_item[0]['surge_pricing_fare']) && !empty($surge_item[0]['surge_pricing_fare']) && $surge_pricing_status == 1) {
                    foreach($surge_item[0]['surge_pricing_fare'] as $k => $v) {
                        if($v['default'] == 1) {
                            $surge_price_percentage = $v['fare'];
                        }
                    }
                }
                if($surge_price_percentage != 0) {
                    $qry = array('_id'=>(int)$trip_id);
                    $update_array['surge_price_status'] = (int)1;
                    $update_array['surge_price_percentage'] = $surge_price_percentage;
                    $res = $this->mongo_db->update(MDB_PASSENGERS_LOGS,$qry,array('$set'=>$update_array),array('multiple'=>true));
                }

            }            
        }
        //Feb 19 2021

        //26 feb 2021
        public function update_trip_data($model_id,$trip_id,$free_drivers,$pickup_date,$now_after,$passengerid = "",$checkCorporateGroup = false) {
            $surge_item = $this->get_surge_price_model_item($model_id);
            if(isset($surge_item[0]['surge_pricing_status']) && $surge_item[0]['surge_pricing_status'] == 'A') {
                $total_drivers = isset($surge_item[0]['total_drivers']) ? $surge_item[0]['total_drivers'] : 1;
                $free_drivers_percentage = ($free_drivers / $total_drivers * 100);
                //$free_drivers_percentage = 26;

                $closest = null;
                $surge_pricing_status = $surge_price_percentage = 0;

                /* Sasidharan oct 04 2022 */
                $surge_display_fare = "";

                if($now_after == 0) {
                    foreach ($surge_item[0]['surge_pricing_interval'] as $key => $item) {
                      if ($closest === null || abs($free_drivers_percentage - $closest) > abs($item['from'] - $free_drivers_percentage)) {
                         $closest = $item['from'];
                         $surge_pricing_status = 1;
                         $surge_price_percentage = $item['fare'];

                         /* Sasidharan oct 04 2022 */
                         $surge_display_fare = isset($item['display_fare']) ? $item['display_fare'] : "";
                      }
                    }
                } else {
                    $book_later_time_interval = isset($surge_item[0]['book_later_time_interval']) ? $surge_item[0]['book_later_time_interval'] : 1;
                    $book_later_fare = isset($surge_item[0]['book_later_fare']) ? $surge_item[0]['book_later_fare'] : 0;

                    /* Sasidharan oct 04 2022 */
                    $surge_display_fare = isset($surge_item[0]['book_later_display_fare']) ? $surge_item[0]['book_later_display_fare'] : "";

                    $current_time = convert_timezone( 'now', TIMEZONE );
                    $pickup_date = date('Y-m-d H:i',strtotime($pickup_date));
                    $begintime = date('Y-m-d H:i',strtotime($current_time));
                    $later_time = date('Y-m-d H:i:s',strtotime('+'.$book_later_time_interval.' minutes',strtotime($current_time)));
                    $endtime = date('Y-m-d H:i',strtotime($later_time));
                    
                    $date1 = DateTime::createFromFormat('Y-m-d H:i', $pickup_date);
                    $date2 = DateTime::createFromFormat('Y-m-d H:i', $begintime);
                    $date3 = DateTime::createFromFormat('Y-m-d H:i', $endtime);
                    // if ($date1 > $date2 && $date1 < $date3)
                    // {
                       $surge_pricing_status = 1;
                       $surge_price_percentage = $book_later_fare;
                    // }          
                }

                if($free_drivers == 0) {
                    //$surge_pricing_status = 0;
                    //$surge_price_percentage = 0;
                }

                if($checkCorporateGroup && $passengerid != "") {
                  $filter = array(
                    "members" => (int)$passengerid
                  );
                  $project = array(
                    '_id' => 1,
                    'corporate_trip_discount' => 1,
                    'corporate_discount' => 1
                  );
                  $passengerGroup = $this->mongo_db->find(MDB_CORPORATE_GROUP_NEW,$filter,$project);
                  $passengerGroup = (!empty($passengerGroup)) ? iterator_to_array($passengerGroup,false) : array();

                  if(isset($passengerGroup[0]) && isset($passengerGroup[0]['corporate_trip_discount']) && $passengerGroup[0]['corporate_trip_discount'] == 1) {

                    $discount = isset($passengerGroup[0]['corporate_discount']) ? $passengerGroup[0]['corporate_discount'] : 0;
                    $surge_price_percentage = -$discount;
                  }
                }

                if($surge_price_percentage != 0) {
                    $qry = array('_id'=>(int)$trip_id);
                    $update_array['surge_price_status'] = (int)1;
                    $update_array['surge_price_percentage'] = (float)$surge_price_percentage;

                    /* Sasidharan oct 04 2022 */
                    $update_array['surge_display_fare'] = $surge_display_fare;

                    $res = $this->mongo_db->update(MDB_PASSENGERS_LOGS,$qry,array('$set'=>$update_array),array('multiple'=>true));
                }
            }
        }
        //26 feb 2021

    /* Sasi */
    public function getPassengerGroupInfo($passengerid) {
        $filter = array(
          "members" => (int)$passengerid
        );
        $project = array(
          '_id' => 1,
          'corporate_trip_discount' => 1,
          'corporate_discount' => 1
        );
        $passengerGroup = $this->mongo_db->find(MDB_CORPORATE_GROUP_NEW,$filter,$project);
        return (!empty($passengerGroup))?iterator_to_array($passengerGroup,false):array(); 
    }

    /* Sasidharan Jan 31 2023 */
    public function sendNotificationEmail($tripId, $editedBy = "",$fareInfo, $oldFareInfo) {

    $cashPayment = (isset($oldFareInfo[0]['key']) && $oldFareInfo[0]['key'] == "1") ? $oldFareInfo[0]['value'] : 0;
    $UpdatedCashPayment = (isset($fareInfo[0]['key']) && $fareInfo[0]['key'] == "1") ? $fareInfo[0]['value'] : 0;

    $cardPayment = (isset($oldFareInfo[1]['key']) && $oldFareInfo[1]['key'] == "6") ? $oldFareInfo[1]['value'] : 0;
    $UpdatedCardPayment = (isset($fareInfo[1]['key']) && $fareInfo[1]['key'] == "6") ? $fareInfo[1]['value'] : 0;

    $knetPayment = (isset($oldFareInfo[2]['key']) && $oldFareInfo[2]['key'] == "3") ? $oldFareInfo[2]['value'] : 0;
    $UpdatedKnetPayment = (isset($fareInfo[2]['key']) && $fareInfo[2]['key'] == "3") ? $fareInfo[2]['value'] : 0;

    $additionalFare = (isset($oldFareInfo[3]['key']) && $oldFareInfo[3]['key'] == "additional amount") ? $oldFareInfo[3]['value'] : 0;
    $UpdatedAdditionalFare = (isset($fareInfo[3]['key']) && $fareInfo[3]['key'] == "additional amount") ? $fareInfo[3]['value'] : 0;

    $walletFare = (isset($oldFareInfo[4]['key']) && $oldFareInfo[4]['key'] == "wallet") ? $oldFareInfo[4]['value'] : 0;
    $UpdatedWalletFare = (isset($fareInfo[4]['key']) && $fareInfo[4]['key'] == "wallet") ? $fareInfo[4]['value'] : 0;

    $pendingFare = (isset($oldFareInfo[5]['key']) && $oldFareInfo[5]['key'] == "pending") ? $oldFareInfo[5]['value'] : 0;
    $UpdatedPendingFare = (isset($fareInfo[5]['key']) && $fareInfo[5]['key'] == "pending") ? $fareInfo[5]['value'] : 0;

    $fareNotes = (isset($oldFareInfo[6]['key']) && $oldFareInfo[6]['key'] == "fare_note") ? $oldFareInfo[6]['value'] : 0;
    $UpdatedFareNotes = (isset($fareInfo[6]['key']) && $fareInfo[6]['key'] == "fare_note") ? $fareInfo[6]['value'] : 0;

    $discountWallet = (isset($oldFareInfo[7]['key']) && $oldFareInfo[7]['key'] == "discount_wallet") ? $oldFareInfo[7]['value'] : 0;
    $updatedDiscountWallet = (isset($fareInfo[7]['key']) && $fareInfo[7]['key'] == "discount_wallet") ? $fareInfo[7]['value'] : 0;

    $corporateAmount = (isset($oldFareInfo[8]['key']) && $oldFareInfo[8]['key'] == "corporate_amount") ? $oldFareInfo[8]['value'] : 0;
    $updatedCorporateAmount = (isset($fareInfo[8]['key']) && $fareInfo[8]['key'] == "corporate_amount") ? $fareInfo[8]['value'] : 0;

    // $to = "dsasi5757@gmail.com";
    $from = CONTACT_EMAIL;
    $subject = "Fare updated on Trip ID : ".$tripId." By : ".$editedBy;
    $message = "<!DOCTYPE html> <html> <head> <style> #fare_table { margin : auto; width : 600px } #customers { font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%; text-align : center; min-width : 600px; max-width : 600px; } #customers td, #customers th { border: 1px solid #ddd; padding: 8px; } #customers tr:nth-child(even){background-color: #f2f2f2;} #customers tr:hover {background-color: #ddd;} #customers th { padding-top: 12px; padding-bottom: 12px; background-color: #BB2649; color: white; } h2 { text-align : center; } h4 { text-align : center; } </style> </head> <body> <h2>Trip ID : ".$tripId."</h2> <h4>Edited By : ".$editedBy."</h4> <div id='fare_table'> <table id='customers'> <tr> <th></th> <th>Old Value</th> <th>New Value</th> </tr> <tr> <td>Cash</td> <td>".$cashPayment."</td> <td>".$UpdatedCashPayment."</td> </tr> <tr> <td>Card</td> <td>".$cardPayment."</td> <td>".$UpdatedCardPayment."</td> </tr> <tr> <td>Knet</td> <td>".$knetPayment."</td> <td>".$UpdatedKnetPayment."</td> </tr> <tr> <td>Pending</td> <td>".$pendingFare."</td> <td>".$UpdatedPendingFare."</td> </tr> <tr> <td>Wallet</td> <td>".$walletFare."</td> <td>".$UpdatedWalletFare."</td> </tr> <tr> <td>Discount Wallet</td> <td>".$discountWallet."</td> <td>".$updatedDiscountWallet."</td> </tr> <tr> <td>Corporate Amount</td> <td>".$corporateAmount."</td> <td>".$updatedCorporateAmount."</td> </tr> <tr> <td>Additional Amount</td> <td>".$additionalFare."</td> <td>".$UpdatedAdditionalFare."</td> </tr> <tr> <td>Notes</td> <td>".$fareNotes."</td> <td>".$UpdatedFareNotes."</td> </tr> </table> </div> </body> </html>";

    require_once($_SERVER['DOCUMENT_ROOT'].'/modules/SMTP/class.phpmailer.php');

    try {
        $mail = new PHPMailer(true);

        /* $mail->SMTPDebug = 0; */
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'grandlimoq8@gmail.com';
        $mail->Password   = 'jfeuuweputoopvks';
        // $mail->Password   = 'fbdemndhqawbicgd';

        $mail->SMTPSecure = "ssl";
        $mail->Port       = 465;   
        $mail->SetFrom($from);
        $mail->Subject    = $subject;


        $emails = TRIP_FARE_NOTIFICATION_EMAILS;
        $emails = explode(",",$emails);

        $mail->addAddress($emails[0], 'User');
        
        array_shift($emails);

        foreach ($emails as $value) {
          $mail->AddCC($value, 'User');
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];

        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }

        if(!empty($mail->ErrorInfo)) {
            return false;
        }
    } catch (Exception $e) {
        echo "<pre>";
        print_r($e);
        exit;

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }


}
?>
