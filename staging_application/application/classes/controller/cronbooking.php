<?php defined('SYSPATH') or die('No direct script access.');
/******************************************

* Contains Cron details

* @Package: Taximobility

* @Author: taxi Team

* @URL : taximobility.com

********************************************/
class Controller_Cronbooking extends Controller_Siteadmin 
{

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		$this->cronbooking_model = Model::factory('cronbooking');
	}

/**Function which is used for run the cron daily basis. 
Scope of the function is check the every company recurent booking history in recurent booking tabel and create the new trip before some of time **/
	public function action_cron_recurrentbooking()
	{				
		$status = $this->cronbooking_model->cron_recurrentbooking();		
	}
/**Function which is used for run the cron daily basis. 
Scope of the function is check the every company recurent booking history in recurent booking tabel and dispatch the trip automatically on the time
Search the driver based on current update of the every driver **/
	public function action_cron_autodispatch()
	{		
		$status = $this->cronbooking_model->cron_autodispatch();
	}
/*
 * This function is used to delete the expired temporary logs in driver_request_details
 * We have to delete the records in basis of status
 * 2 - Time out request, 4 - Passenger cancelled the request,5 - Driver Arrived,7 - Trip Completed,8 - Trip fare updated, 9 - Driver Cancelled
 * */	
	public function action_delete_expired_records()
	{
		$delete_expired_request = $this->cronbooking_model->delete_driver_request_details();
	}

	public function action_password_reset()
	{ 
		$cronbooking_model = Model::factory('cronbooking');
		$status = $cronbooking_model->cron_pass_reset();

	}
	
	public function action_lateralbooking() {
		$cronbooking_model = Model::factory('cronbooking');
		$records = $cronbooking_model->get_lateral_booking();
		
		$array = array();
		$result = array();
		$transaction_id = array();
		foreach($records as $key=>$val) {
			foreach($val['details'] as $detail) {
				$transaction_id[] = $detail['transaction_id'];
				$result[$key]['passengers_id']  = $val['_id']['passengers_id'];
				$result[$key]['tripfare']  = $val['total_fare'];
				$result[$key]['startdate'] = commonfunction::convertphpdate('Y-m-d',$detail['start_date']);
				$result[$key]['enddate'] = commonfunction::convertphpdate('Y-m-d',$detail['end_date']);
				$result[$key]['passenger_name']  = $detail['passenger_name'];
				$result[$key]['passenger_phone']  = $detail['passenger_phone'];
				$result[$key]['passenger_email']  = $detail['passenger_email'];
				$result[$key]['passenger_pay']  = $detail['passenger_pay'];
			}
		}
		
		if(count($result) > 0) {
			foreach($result as $res) {
				if (SMS == 1) {
					$api                 = Model::factory('mobileapi115');
					$message_details = $this->commonmodel->sms_message_by_title('lateral_booking');
					$to              = $res['passenger_phone'];
					$message         = $message_details['sms_description'];
					$message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
					$message         = str_replace("##PAY##", CURRENCY.$res['tripfare'], $message);
					$message         = str_replace("##NAME##", $res['passenger_name'], $message);
					$result 		 = $api->sendSMS($to, $message);					
				}
				$replace_variables = array(
					REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
					REPLACE_SITENAME => $this->app_name,
					REPLACE_USERNAME => '',
					REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
					REPLACE_SITEEMAIL => $this->siteemail,
					REPLACE_SITEURL => URL_BASE,
					REPLACE_NAME => $res['passenger_name'],
					REPLACE_PAY => CURRENCY.$res['tripfare'],
					REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
					REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
				);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/lateral-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/lateral-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'lateral.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'lateral.html', $replace_variables);
				}
				$to       = $res['passenger_email'];
				$from     = $this->siteemail;
				$subject  = __('lateral_booking') . " - " . $this->app_name;
				if (SMTP == 1) {
					include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
				} else {
					// To send HTML mail, the Content-type header must be set
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					// Additional headers
					$headers .= 'From: ' . $from . '' . "\r\n";
					$headers .= 'Bcc: ' . $to . '' . "\r\n";
					mail($to, $subject, $message, $headers);
				}
				$startdate = $res['enddate'];
				
				if($res['passenger_pay'] == 1) {
					$enddate = date( "Y-m-d", strtotime( "$startdate +7 day" ) );
					$update = $cronbooking_model->updateLateral($res['passengers_id'],$startdate,$enddate);
				} else {
					$enddate = date( "Y-m-d", strtotime( "$startdate +30 day" ) );
					$update = $cronbooking_model->updateLateral($res['passengers_id'],$startdate,$enddate);
				}				
			}
			
			$updateTransaction = $cronbooking_model->updateTransaction($transaction_id);
		}
		exit;
	}
	
	public function action_sendreminder(){
		
		$cronbooking_model = Model::factory('cronbooking');
		$get_all_drivers = $cronbooking_model->get_all_drivers();
		$Commonmodel       = Model::factory('Commonmodel');
        $this->currentdate = $Commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
        $current_time = strtotime($this->currentdate);
        $today = date('Y-m-d', strtotime($current_time));
        $message_details = $Commonmodel->sms_message_by_title('expiry_date_notification');
        $message         = $message_details['sms_description'];
		// echo '<pre>'; print_r($get_all_drivers);//exit;
		foreach($get_all_drivers as $drivers){
			 $name = $drivers['name'];
			 $email = $drivers['email'];
			 $phone = $drivers['phone'];
			 $driver_license_expire_date1 = commonfunction::convertphpdate('Y-m-d',$drivers['driver_license_expire_date']);
			 $driver_license_expire_date2 = strtotime($driver_license_expire_date1);
			 $driver_license_expire_date3 = date('Y-m-d',strtotime('-1 day', $driver_license_expire_date2));
			 
			  $driver_pco_license_expire_date1 = commonfunction::convertphpdate('Y-m-d',$drivers['driver_pco_license_expire_date']);
			 $driver_pco_license_expire_date2 = strtotime($driver_pco_license_expire_date1);
			 $driver_pco_license_expire_date3 = date('Y-m-d',strtotime('-1 day', $driver_pco_license_expire_date2));
			 
			  $driver_insurance_expire_date1 = commonfunction::convertphpdate('Y-m-d',$drivers['driver_insurance_expire_date']);
			 $driver_insurance_expire_date2 = strtotime($driver_insurance_expire_date1);
			 $driver_insurance_expire_date3 = date('Y-m-d',strtotime('-1 day', $driver_insurance_expire_date2));
			 
			  $driver_national_insurance_expire_date1 = commonfunction::convertphpdate('Y-m-d',$drivers['driver_national_insurance_expire_date']);
			 $driver_national_insurance_expire_date2 = strtotime($driver_national_insurance_expire_date1);
			 $driver_national_insurance_expire_date3 = date('Y-m-d',strtotime('-1 day', $driver_national_insurance_expire_date2));
			 
			 if($today  == $driver_license_expire_date3 ){
				 $message         = str_replace("##EXPIRY_ITEM##", __('driver_license_id'), $message);
				 $message         = str_replace("##EXPIRY_DATE##", $driver_license_expire_date3, $message);
				 $email_item = __('driver_license_id');
				 $email_date = $driver_license_expire_date3;
				 }
			 if($today  == $driver_pco_license_expire_date3 ){
				 $message         = str_replace("##EXPIRY_ITEM##",  __('enter_driver_pco_license_no'), $message);
				 $message         = str_replace("##EXPIRY_DATE##", $driver_pco_license_expire_date3, $message);
				  $email_item = __('enter_driver_pco_license_no');
				 $email_date = $driver_pco_license_expire_date3;
				 }
			 if($today  == $driver_insurance_expire_date3 ){
				 $message         = str_replace("##EXPIRY_ITEM##",  __('driver_insurance_number'), $message);
				 $message         = str_replace("##EXPIRY_DATE##", $driver_insurance_expire_date3, $message);
				  $email_item = __('driver_insurance_number');
				 $email_date = $driver_insurance_expire_date3;
				}
			 if($today  == $driver_national_insurance_expire_date3 ){
				  $message         = str_replace("##EXPIRY_ITEM##",  __('driver_national_insurance_number'), $message);
				  $message         = str_replace("##EXPIRY_DATE##", $driver_national_insurance_expire_date3, $message);
				   $email_item = __('driver_national_insurance_number');
				 $email_date = $driver_national_insurance_expire_date3;
			}
			 
			 
			 if (SMS == 1) {
					$api                 = Model::factory('mobileapi115');
					$to              = $phone;
					$message         = str_replace("##NAME##", $name, $message);
					$result 		 = $api->sendSMS($to, $message);					
				}
				$replace_variables = array(
					REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
					REPLACE_SITENAME => $this->app_name,
					REPLACE_USERNAME => '',
					REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
					REPLACE_SITEEMAIL => $this->siteemail,
					REPLACE_SITEURL => URL_BASE,
					REPLACE_NAME => $name,
					REPLACE_EXPIRY_ITEM =>  $email_item,
					REPLACE_EXPIRY_DATE =>  $email_date,
					REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
					REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
				);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/expiry_date_notification-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/expiry_date_notification-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'expiry_date_notification.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'expiry_date_notification.html', $replace_variables);
				}
				$to       = $res['passenger_email'];
				$from     = $this->siteemail;
				$subject  = __('expiry_date_notification') . " - " . $this->app_name;
				if (SMTP == 1) {
					include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
				} else {
					// To send HTML mail, the Content-type header must be set
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					// Additional headers
					$headers .= 'From: ' . $from . '' . "\r\n";
					$headers .= 'Bcc: ' . $to . '' . "\r\n";
					mail($to, $subject, $message, $headers);
				}
		}
		 exit;
		
	}
	
	/************** Service Notification ***************/
	public function action_service_notification() {
		$getServiceList = $this->cronbooking_model->getTaxiService();
		foreach($getServiceList as $key => $list) {
			$replace_variables = array(
				REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
				REPLACE_SITENAME => $this->app_name,
				REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
				REPLACE_SITEEMAIL => $this->siteemail,
				REPLACE_SITEURL => URL_BASE,
				REPLACE_KM => $list['current_km'],
				REPLACE_LABEL =>  $list['milestone_label'],
				REPLACE_TAXINO =>  $list['taxi_no'],
				REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
				REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
			);

			if ($this->lang != 'en') {
				if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/limousine_service-' . $this->lang . '.html')) {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/limousine_service-' . $this->lang . '.html', $replace_variables);
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'limousine_service.html', $replace_variables);
				}
			} else {
				$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'limousine_service.html', $replace_variables);
			}
			$to       = $this->siteemail;
			$from     = $this->siteemail;
			$subject  = __('taxi_service_notification') . " - " . $this->app_name;
			$redirect = "no";
			if (SMTP == 1) {
				include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
			} else {
				// To send HTML mail, the Content-type header must be set
				$headers = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				// Additional headers
				$headers .= 'From: ' . $from . '' . "\r\n";
				$headers .= 'Bcc: ' . $to . '' . "\r\n";
				mail($to, $subject, $message, $headers);
			}
		}		
		exit;	
	}
	/************** Service Notification ***************/
	
	/************** Later Booking Auto Dispatch()***************/
	public function action_cron_laterbooking_autodispatch() {
		$status = $this->cronbooking_model->cron_laterbooking_autodispatch($this->app_name, $this->siteemail);
	}
	/************** Later Booking Auto Dispatch()***************/
	

	// Move completed trips
	public function action_move_completed_trips()
	{

		$this->mongo_db = MangoDB::instance('default'); 

        $arguments = array(array('$match'=>array(
						'moved'=>array('$ne' => 1), 'travel_status'=> 1 
					)),
					array('$limit' => 5000),
				);

		$complete_result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);

        if(!empty($complete_result['result'])){
        	$i = 0;
			foreach ($complete_result['result'] as $key => $value) {

				$trip_id = $value['_id'];

		        $check_arguments = array(array('$match'=>array(
								'_id'=> $trip_id
							))
						);
				$check_result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_COMPLETED,$check_arguments);

				if(!empty($check_result['result'])){
                	$set_query = array(
	                'moved' => 1,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));
				}
				else
				{

					$insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_COMPLETED,$complete_result['result'][$i]);

	                $set_query = array(
	                'moved' => 1,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));					
				}	
                

                $i++;
			}

			exit('Records moved to passengerslog completed table !!!');
        } 
        else
        {
        	exit('No records available');
        }	
	}


	// Move cancelled trips
	public function action_move_cancelled_trips()
	{

		$this->mongo_db = MangoDB::instance('default'); 

        $arguments = array(array('$match'=>array(
						'moved'=>array('$ne' => 1), 
						'travel_status'=> array('$in'=>array(4,8))
					)),
					array('$limit' => 5000),
				);

		$complete_result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);


        if(!empty($complete_result['result'])){
        	$i = 0;
			foreach ($complete_result['result'] as $key => $value) {

				$trip_id = $value['_id'];

		        $check_arguments = array(array('$match'=>array(
								'_id'=> $trip_id
							))
						);
				$check_result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_CANCELLED,$check_arguments);

				if(!empty($check_result['result'])){

                	$set_query = array(
	                'moved' => 1,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));
				}
				else
				{

					$insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_CANCELLED,$complete_result['result'][$i]);

	                $set_query = array(
	                'moved' => 1,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));					
				}	

                $i++;
			}

			exit('Records moved to passengerslog cancelled table !!!');
        } 
        else
        {
			exit('No records available');
        }	

	}				

	// Delete Completed and Cancelled trips from Passengers Log
	public function action_delete_moved_trips()
	{
		$this->mongo_db = MangoDB::instance('default'); 
        $datetime = date('Y-m-d 23:59:59', strtotime('-2 days', strtotime(date('Y-m-d'))));

		$match = array(
						'moved'=> array('$in'=>array(1,2)),
						'pickup_time' => array('$lte' => new MongoDate(strtotime($datetime)))
					);

		$delete = $this->mongo_db->remove(MDB_PASSENGERS_LOGS,$match);
		
		//echo Database::instance()->last_query;
		exit("Delete moved trips working !!!!");
	}

	// Move Missed trips
	public function action_move_missed_trips()
	{

		$this->mongo_db = MangoDB::instance('default'); 
		$datetime = date('Y-m-d 23:50:00', strtotime('-1 days', strtotime(date('Y-m-d'))));

        $arguments = array(array('$match'=>array(
						'moved'=> 0,
						'travel_status'=> 0,
						'pickup_time' => array('$lte' => new MongoDate(strtotime($datetime)))
					)),
					array('$limit' => 1000),
				);

		$complete_result = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$arguments);

        if(!empty($complete_result['result'])){
        	$i = 0;
			foreach ($complete_result['result'] as $key => $value) {

				$trip_id = $value['_id'];

		        $check_arguments = array(array('$match'=>array(
								'_id'=> $trip_id
							))
						);
				$check_result = $this->mongo_db->aggregate(MDB_PASSENGERSLOGS_MISSED,$check_arguments);

				if(!empty($check_result['result'])){
                	$set_query = array(
	                'moved' => 2,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));
				}
				else
				{

					$insert_result = $this->mongo_db->Insert(MDB_PASSENGERSLOGS_MISSED,$complete_result['result'][$i]);

	                $set_query = array(
	                'moved' => 2,
	                );
	                $result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id' => (int)$trip_id),array( '$set'=> $set_query ));					
				}	
                

                $i++;
			}

			exit('Records moved to passengerslog missed table !!!');
        } 
        else
        {
        	exit('No records available');
        }	
	}

	
}
?>
