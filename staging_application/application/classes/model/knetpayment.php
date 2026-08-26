<?php defined('SYSPATH') or die('No direct script access.');
class Model_Knetpayment extends Model
{
	public function __construct()
	{	
		$this->mongo_db  = MangoDB::instance('default');
		$this->session = Session::instance();		
	}

	
	public function get_log_temp($token) {
		$result = $this->mongo_db->find_one(MDB_PASSENGERS_LOGS_TEMP,['token' => (int)$token],['trip_id','distance','actual_distance','actual_amount','trip_fare','fare','tips','passenger_discount','tax_amount','remarks','nightfare_applicable','nightfare','eveningfare_applicable','eveningfare','waiting_time','waiting_cost','minutes_traveled','minutes_fare','pay_mod_id','token','passenger_discount','corporate_amount','pending_amt','driver_edit_status','actual_paid_amt','passenger_pending_amt','wallet_amount_used']);
		return $result;
	}	
}
