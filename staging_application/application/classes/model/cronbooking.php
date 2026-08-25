<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Cronbooking extends Model
{


	public function cron_recurrentbooking()
	{
		// Get all recurrent booking details //
		
		// Next 24 hours //
		$date_query = "SELECT now()+interval 24 hour as check_datetime";
		$date_result = Db::query(Database::SELECT, $date_query)->execute();
		$next_datetime = $date_result[0]['check_datetime'];
		$next_datetime_split = explode(' ',$next_datetime);
		$next_date = $next_datetime_split[0];
		$next_time = $next_datetime_split[1];

		//$next_datetime = '2014-02-10 03:51:00';
		//$next_datetime_split = explode(' ',$next_datetime);
		//$next_date = $next_datetime_split[0];
		//$next_time = $next_datetime_split[1];
		// Next 24 hours //

		// Next Days //
		$day_query = "select DATE_FORMAT(NOW()+interval 24 hour,'%a') as days";
		$day_result = Db::query(Database::SELECT, $day_query)->execute();
		$next_day = strtoupper($day_result[0]['days']);
		//$next_days = 'TUE';
		// Next Days //

		
		function toDate($x){return date('Y-m-d', $x);}

		$start_datetime = $next_date.' 00:00:00';
		$end_datetime = $next_date.' 23:59:59';	
		
		// Get all recurrent booking details query //

		$sql = "SELECT  ".RECURR_BOOKING.".reid,".RECURR_BOOKING.".passengers_log_id,".RECURR_BOOKING.".frmdate,".RECURR_BOOKING.".todate,".RECURR_BOOKING.".days,
".RECURR_BOOKING.".excludedates,".RECURR_BOOKING.".specific_dates  FROM ".RECURR_BOOKING." left join ".COMPANY." ON ( ".RECURR_BOOKING.".companyid = ".COMPANY.".cid ) left join  ".PEOPLE." ON ( ".PEOPLE.".company_id = ".RECURR_BOOKING.".companyid ) WHERE ".PEOPLE.".status = 'A' and ".PEOPLE.".user_type='C' and ".COMPANY.".company_status='A' and ".RECURR_BOOKING.".frmdate <= now() and ".RECURR_BOOKING.".todate >= now() and ".RECURR_BOOKING.".reid NOT IN (select ".PASSENGERS_LOG.".recurrent_id from ".PASSENGERS_LOG." where (".PASSENGERS_LOG.".pickup_time between '$start_datetime' and '$end_datetime')) ";

		$recurrent_result = Db::query(Database::SELECT, $sql)->execute()->as_array();

		// Get all recurrent booking details query //

	
		if(count($recurrent_result) > 0)
		{
			foreach($recurrent_result as $recurrent_details)
			{
				
				$recurrent_id = $recurrent_details['reid'];
				$startDate = $recurrent_details['frmdate'];
				$endDate = $recurrent_details['todate'];

				$insert_booking = 'N';
	
				// Table entry in Booking Log Table //
				if($recurrent_details['days'] !='')	
				{
					$days =  unserialize($recurrent_details['days']);
				}
				else
				{	
					$days = '';
				}	
				
				if($recurrent_details['specific_dates'] != '')
				{
					$all_dates =  unserialize($recurrent_details['specific_dates']);		
				}
				else
				{
					$all_dates =  '';		
				}	


				if($all_dates =='' && $days == '')
				{

					/** Check Today is between fromdate and todate **/
					$checknext_query ="select '$next_date'  between '$startDate' and '$endDate' as checkdate";
					$checknext_result = Db::query(Database::SELECT, $checknext_query)->execute()->as_array();
					
					/** Check Today is between fromdate and todate **/

					/** Insert Today Booking **/
					if($checknext_result[0]['checkdate'] == 1)
					{

						// Booking key generator //
						$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key from passengers_log Having NOT EXISTS (select booking_key from passengers_log having booking_key=random_key) limit 1";

					 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
					 	->execute()			
						->as_array();

						if(count($bookingkey_result) > 0)
						{
							$booking_key = $bookingkey_result[0]['random_key'];
						}
						else
						{
							$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key";

						 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
						 	->execute()			
							->as_array();

							$booking_key = $bookingkey_result[0]['random_key'];
						}

					       // Booking key generator //	

						// To get Recurrent Log details from Passenger Log Table //
						$recurrent_query = "SELECT * from ".RECURR_BOOKING." where ".RECURR_BOOKING.".reid ='$recurrent_id'"; 				

						$booking_details = Db::query(Database::SELECT, $recurrent_query)->execute()->as_array();			
						// To get Recurrent Log details from Passenger Log Table //

						// To get Passenger Log details from Passenger Log Table //
						$companytax_query = "SELECT company_tax from ".COMPANYINFO." where ".COMPANYINFO.".company_cid =".$booking_details[0]['companyid']; 				

			$companytax_details = Db::query(Database::SELECT, $companytax_query)->execute()->as_array();			

			$company_tax = $companytax_details[0]['company_tax'];
						
						// To get Passenger Log details from Passenger Log Table //

						// Insert into Passenger Log Table //	

						$pickup_datetime = $next_date.' '.$booking_details[0]['recurrent_pickuptime'];

						$insert_booking = 'S';

						$today_result = DB::insert(PASSENGERS_LOG, array('booking_key','passengers_id','company_id','current_location','pickup_latitude','pickup_longitude','drop_location','drop_latitude','drop_longitude',
						'pickup_time','no_passengers','approx_distance','approx_duration','approx_fare','search_city','notes_driver','faretype','fixedprice','luggage','bookby',
						'operator_id','additional_fields','travel_status','taxi_modelid','recurrent_type','recurrent_id','company_tax','account_id','accgroup_id'))->values(array($booking_key,$booking_details[0]['recurrent_passengerid'],$booking_details[0]['companyid'],$booking_details[0]['recurrent_pickuplocation'],$booking_details[0]['recurrent_pickuplatitude'],$booking_details[0]['recurrent_pickuplongitude'],$booking_details[0]['recurrent_droplocation'],$booking_details[0]['recurrent_droplatitude'],$booking_details[0]['recurrent_droplongitude'],$pickup_datetime,$booking_details[0]['recurrent_noofpassengers'],$booking_details[0]['recurrent_approxdistance'],$booking_details[0]['recurrent_approxduration'],$booking_details[0]['recurrent_approxfare'],$booking_details[0]['recurrent_city'],$booking_details[0]['recurrent_notes_driver'],$booking_details[0]['recurrent_faretype'],$booking_details[0]['recurrent_fixedprice'],$booking_details[0]['recurrent_luggage'],'2',$booking_details[0]['recurrent_operatorid'],$booking_details[0]['recurrent_additionalfields'],'0',$booking_details[0]['recurrent_modelid'],'2',$recurrent_id,$company_tax,$booking_details[0]['recurrent_accountid'],$booking_details[0]['recurrent_groupid']))->execute();	


						$ins_logid = $today_result[0];

						/* Create Log */		
						$company_id = $_SESSION['company_id'];			
						$user_createdby = $_SESSION['userid'];
						$log_message = __('log_message_added');
						$log_message = str_replace("PASS_LOG_ID",$ins_logid,$log_message); 
						$log_booking = __('log_booking_added');
						$log_booking = str_replace("PASS_LOG_ID",$ins_logid,$log_booking); 
						$log_status = $this->create_logs($ins_logid,$company_id,$user_createdby,$log_message,$log_booking);
						/* Create Log */


						// Insert into Passenger Log Table //
						
					}
					/** Insert Today Booking **/

				/** Insert booking based on fromdate and todate **/
					
				}
				/** daysofweek not empty **/
				else if($all_dates =='' && $days !='')
				{
					
					/** Check Today is between fromdate and todate **/
					$checknext_query ="select '$next_date'  between '$startDate' and '$endDate' as checkdate";
					$checknext_result = Db::query(Database::SELECT, $checknext_query)->execute()->as_array();
//					echo 'as'.$checknext_result[0]['checkdate'];
					/** Check Today is between fromdate and todate **/


					if($checknext_result[0]['checkdate'] == 1)
					{
						/** Insert Booking Today **/
						if(in_array($next_day,$days))
						{
							// Booking key generator //
							$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key from passengers_log Having NOT EXISTS (select booking_key from passengers_log having booking_key=random_key) limit 1";

						 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
						 	->execute()			
							->as_array();

							if(count($bookingkey_result) > 0)
							{
								$booking_key = $bookingkey_result[0]['random_key'];
							}
							else
							{
								$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key";

							 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
							 	->execute()			
								->as_array();

								$booking_key = $bookingkey_result[0]['random_key'];
							}

						       // Booking key generator //	

							// To get Recurrent Log details from Passenger Log Table //
							$recurrent_query = "SELECT * from ".RECURR_BOOKING." where ".RECURR_BOOKING.".reid ='$recurrent_id'"; 				

							$booking_details = Db::query(Database::SELECT, $recurrent_query)->execute()->as_array();			
							// To get Recurrent Log details from Passenger Log Table //

							// To get Passenger Log details from Passenger Log Table //
							$companytax_query = "SELECT company_tax from ".COMPANYINFO." where ".COMPANYINFO.".company_cid =".$booking_details[0]['companyid'];
							$companytax_details = Db::query(Database::SELECT, $companytax_query)->execute()->as_array();			
							$company_tax = $companytax_details[0]['company_tax'];
							// To get Passenger Log details from Passenger Log Table //


							// Insert into Passenger Log Table //	

							$pickup_datetime = $next_date.' '.$booking_details[0]['recurrent_pickuptime'];

							$insert_booking = 'S';

							$today_result = DB::insert(PASSENGERS_LOG, array('booking_key','passengers_id','company_id','current_location','pickup_latitude','pickup_longitude','drop_location','drop_latitude','drop_longitude',
							'pickup_time','no_passengers','approx_distance','approx_duration','approx_fare','search_city','faretype','fixedprice','luggage','bookby',
							'operator_id','additional_fields','travel_status','taxi_modelid','recurrent_type','recurrent_id','company_tax','account_id','accgroup_id'))->values(array($booking_key,$booking_details[0]['recurrent_passengerid'],$booking_details[0]['companyid'],$booking_details[0]['recurrent_pickuplocation'],$booking_details[0]['recurrent_pickuplatitude'],$booking_details[0]['recurrent_pickuplongitude'],$booking_details[0]['recurrent_droplocation'],$booking_details[0]['recurrent_droplatitude'],$booking_details[0]['recurrent_droplongitude'],$pickup_datetime,$booking_details[0]['recurrent_noofpassengers'],$booking_details[0]['recurrent_approxdistance'],$booking_details[0]['recurrent_approxduration'],$booking_details[0]['recurrent_approxfare'],$booking_details[0]['recurrent_city'],$booking_details[0]['recurrent_faretype'],$booking_details[0]['recurrent_fixedprice'],$booking_details[0]['recurrent_luggage'],'2',$booking_details[0]['recurrent_operatorid'],$booking_details[0]['recurrent_additionalfields'],'0',$booking_details[0]['recurrent_modelid'],'2',$recurrent_id,$company_tax,$booking_details[0]['recurrent_accountid'],$booking_details[0]['recurrent_groupid']))->execute();	


							$ins_logid = $today_result[0];

							/* Create Log */		
							$company_id = $_SESSION['company_id'];			
							$user_createdby = $_SESSION['userid'];
							$log_message = __('log_message_added');
							$log_message = str_replace("PASS_LOG_ID",$ins_logid,$log_message); 
							$log_booking = __('log_booking_added');
							$log_booking = str_replace("PASS_LOG_ID",$ins_logid,$log_booking); 
							$log_status = $this->create_logs($ins_logid,$company_id,$user_createdby,$log_message,$log_booking);
							/* Create Log */


							// Insert into Passenger Log Table //

						}
						/** Insert Booking Today **/
					}
				}
				/** daysofweek not empty **/
				/** all_dates not empty **/
				else
				{
					/** Check Tommorrow is between fromdate and todate **/
					$checknext_query ="select '$next_date'  between '$startDate' and '$endDate' as checkdate"; echo '<br>';
					$checknext_result = Db::query(Database::SELECT, $checknext_query)->execute()->as_array();
					/** Check Tommorrow is between fromdate and todate **/


					$specific_dates = implode(',',$all_dates);


					/** Check Tommorrow is exist in specific dates **/
					$checknext_query2 ="select FIND_IN_SET('$next_date', '$specific_dates' ) as finddate";
					$checknext_result2 = Db::query(Database::SELECT, $checknext_query2)->execute()->as_array();
				//	echo 'as1'.$checknext_result2[0]['finddate'];echo '<br>';
				//	echo 'as2'.$checknext_result[0]['checkdate'];

					/** Check Tommorrow is exist in specific dates **/

					/** Insert Today Booking **/
					if($checknext_result[0]['checkdate'] == 1 && $checknext_result2[0]['finddate'] >= 1)
					{

						//echo 'Ok';// Booking key generator //
						$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key from passengers_log Having NOT EXISTS (select booking_key from passengers_log having booking_key=random_key) limit 1";

					 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
					 	->execute()			
						->as_array();

						if(count($bookingkey_result) > 0)
						{
							$booking_key = $bookingkey_result[0]['random_key'];
						}
						else
						{
							$bookingkey_query = "select concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)) as random_key";

						 	$bookingkey_result = Db::query(Database::SELECT, $bookingkey_query)
						 	->execute()			
							->as_array();

							$booking_key = $bookingkey_result[0]['random_key'];
						}

					       // Booking key generator //	

						// To get Recurrent Log details from Passenger Log Table //
						$recurrent_query = "SELECT * from ".RECURR_BOOKING." where ".RECURR_BOOKING.".reid ='$recurrent_id'"; 				

						$booking_details = Db::query(Database::SELECT, $recurrent_query)->execute()->as_array();			
						// To get Recurrent Log details from Passenger Log Table //


						// To get Passenger Log details from Passenger Log Table //
						$companytax_query = "SELECT company_tax from ".COMPANYINFO." where ".COMPANYINFO.".company_cid =".$booking_details[0]['companyid'];
						$companytax_details = Db::query(Database::SELECT, $companytax_query)->execute()->as_array();			
						$company_tax = $companytax_details[0]['company_tax'];
						// To get Passenger Log details from Passenger Log Table //

						// Insert into Passenger Log Table //	

						$pickup_datetime = $next_date.' '.$booking_details[0]['recurrent_pickuptime'];

						$insert_booking = 'S';

						$today_result = DB::insert(PASSENGERS_LOG, array('booking_key','passengers_id','company_id','current_location','pickup_latitude','pickup_longitude','drop_location','drop_latitude','drop_longitude',
						'pickup_time','no_passengers','approx_distance','approx_duration','approx_fare','search_city','faretype','fixedprice','luggage','bookby',
						'operator_id','additional_fields','travel_status','taxi_modelid','recurrent_type','recurrent_id','company_tax','account_id','accgroup_id'))->values(array($booking_key,$booking_details[0]['recurrent_passengerid'],$booking_details[0]['companyid'],$booking_details[0]['recurrent_pickuplocation'],$booking_details[0]['recurrent_pickuplatitude'],$booking_details[0]['recurrent_pickuplongitude'],$booking_details[0]['recurrent_droplocation'],$booking_details[0]['recurrent_droplatitude'],$booking_details[0]['recurrent_droplongitude'],$pickup_datetime,$booking_details[0]['recurrent_noofpassengers'],$booking_details[0]['recurrent_approxdistance'],$booking_details[0]['recurrent_approxduration'],$booking_details[0]['recurrent_approxfare'],$booking_details[0]['recurrent_city'],$booking_details[0]['recurrent_faretype'],$booking_details[0]['recurrent_fixedprice'],$booking_details[0]['recurrent_luggage'],'2',$booking_details[0]['recurrent_operatorid'],$booking_details[0]['recurrent_additionalfields'],'0',$booking_details[0]['recurrent_modelid'],'2',$recurrent_id,$company_tax,$booking_details[0]['recurrent_accountid'],$booking_details[0]['recurrent_groupid']))->execute();	


						$ins_logid = $today_result[0];

						/* Create Log */		
						$company_id = $_SESSION['company_id'];			
						$user_createdby = $_SESSION['userid'];
						$log_message = __('log_message_added');
						$log_message = str_replace("PASS_LOG_ID",$ins_logid,$log_message); 
						$log_booking = __('log_booking_added');
						$log_booking = str_replace("PASS_LOG_ID",$ins_logid,$log_booking); 
						$log_status = $this->create_logs($ins_logid,$company_id,$user_createdby,$log_message,$log_booking);
						/* Create Log */


						// Insert into Passenger Log Table //
						
					}
					/** Insert Today Booking **/


				}
				/** all_dates not empty **/


				// Table entry in Booking Log Table //
				}

			}

			echo 'Recurrent Booking will be created successfully.';exit;
		}


		public function cron_autodispatch()
		{
			$mongo_db = MangoDB::instance('default'); 
			$this->commonmodel = Model::factory('commonmodel');
			$api = Model::factory('api');
			$this->tdispatch_model              = Model::factory('taxidispatch');
			// Auto Dispatch for booking before 2 hrs of pickup time 
			//echo BOOK_LATERAL_TIME;exit;
			$st_time = 0;
			$ed_time = 1;
			echo  $start_datetime = date('Y-m-d H:i:s', strtotime('+'.$st_time.' hour'));
			echo '</br>';
			echo  $end_datetime = date('Y-m-d H:i:s', strtotime('+'.$ed_time.' hour'));
			
			//echo '</br>';
			echo $cur_date = date('Y-m-d H:i:s');
			/** TESTING CRON **/
			$txt = $start_datetime.'@'.$end_datetime.' @ '.$cur_date.'<br>';
			file_put_contents("cron_check.txt",$txt.PHP_EOL , FILE_APPEND);
			/** TESTING CRON **/
			//exit;
			
			$stime =strtotime($start_datetime); ;
			$etime = strtotime($end_datetime);;
			$ctime = strtotime($cur_date);
			//exit;
			$match_query['company.dispatch_algorithm.labelname'] = '1';
		    $match_query['driver_id']    =(int)0;
		    $match_query['pickup_time']    = array('$gte' => new MongoDate(strtotime($start_datetime)),'$lte' => new MongoDate(strtotime($end_datetime)));
			
				$field_arguments = array(
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
					'$unwind' => '$company.dispatch_algorithm'
				),
				
				
				array(
				'$match' => $match_query
				),
				array(
					'$project' => array(
						'id' => '$_id',
						'company_id' => '$company_id',
						'pickup_latitude' => '$pickup_latitude',
						'pickup_longitude' => '$pickup_longitude',
						'pickup_time' => '$pickup_time',
						'no_passengers' => '$no_passengers',
						'taxi_modelid' => '$taxi_modelid',
						'operator_id' => '$operator_id',
						'max_luggage' => '$max_luggage'
						
						
						
					)
				)
			
			);
			$result    = $mongo_db->aggregate(MDB_PASSENGERS_LOGS, $field_arguments);
			//echo '<pre>';print_r($result);
			//exit;
			if((!empty($result['result']))){
			
			/*$startdate_query = "SELECT now()+interval 2 hour as startdate,now()+interval 4 hour as enddate";
			$startdate_result = Db::query(Database::SELECT, $startdate_query)->execute()->as_array();			

			$start_datetime = $startdate_result[0]['startdate']; 
			$end_datetime = $startdate_result[0]['enddate']; */

			
			
			
			
			
			//Get the Passenger Log details to assign the driver //

				/*$booking_sql = "SELECT * from ".PASSENGERS_LOG." left join ".TBLALGORITHM."  on  ".TBLALGORITHM.".alg_company_id = ".PASSENGERS_LOG.".company_id  where (".PASSENGERS_LOG.".pickup_time between '$start_datetime' and '$end_datetime') and driver_id=0 and labelname='1' ";

				$booking_results = Db::query(Database::SELECT, $booking_sql)->execute()->as_array();			
				
				if(count($booking_results) > 0)
				{ */
				
					foreach($result['result'] as $booking_details1)
					{

						$pass_logid = $booking_details1['_id'];
						$company_id = $booking_details1['company_id'];
						$operator_id = $booking_details1['operator_id'];

						$booking_details = $this->tdispatch_model->get_bookingdetails($pass_logid,$company_id);
						//echo '<pre>';print_r($booking_details);//exit;
						$latitude = $booking_details[0]["pickup_latitude"];
						$longitude = $booking_details[0]["pickup_longitude"];
						$miles = '';
						$no_passengers = $booking_details[0]["no_passengers"];
						$taxi_fare_km = $booking_details[0]["min_fare"];
						$taxi_model = $booking_details[0]["taxi_modelid"];
						$taxi_type = ''; 
						$maximum_luggage = $booking_details[0]["luggage"];
						$company_id = $booking_details[0]["company_id"];
						$cityname = '';			
						$search_driver = '';		

						$driver_details = $this->tdispatch_model->search_driver_location($latitude,$longitude,$miles,$no_passengers,$_REQUEST,$taxi_fare_km,$taxi_model,$taxi_type,$maximum_luggage,$cityname,$pass_logid,$company_id,$search_driver);
						
						//echo '<pre>'; 
						//print_r($driver_details);exit;

						if(count($driver_details) > 0)
						{
							foreach($driver_details as $key => $value)
							{
								$prev_min_distance='10000~0~0~0';
								$taxi_id='';
								$temp_driver=0;
								$nearest_key=0;
								$prev_key=0;
								$a=1;
								$total_count=count($driver_details);
								$prev_min_distance = explode('~',$prev_min_distance);
								$prev_key=$prev_min_distance[1]; 
								$prev_min_distance = $prev_min_distance[0];
								
								//checking with previous minimum 
								if($value['_id']['distance'] < $prev_min_distance)
								{	
									//new minimum distance
									$nearest_key=$key;
									$prev_min_distance = $value['_id']['distance'].'~'.$key;
								}
								else
								{
									//previous minimum
									$nearest_key=$prev_key;
									$prev_min_distance = $prev_min_distance.'~'.$prev_key;
								}
								$distance_miles='';
							
								if($a == $total_count)
								{
									
									$taxi_id=$value['_id']['taxi_id'];
									
									$nearest_driver=$driver_details[$nearest_key]['_id']['driver_id']; 
									$taxi_id=$driver_details[$nearest_key]['_id']['taxi_id'];
									$distance_miles=$driver_details[$nearest_key]['_id']['distance_miles'];
								}
								$a++;
							}
							$driver_id=$value['_id']['driver_id'];				
							//$driver_id = $driver_details['_id']['driver_id'];
							//$taxi_id = $driver_details[0]['id'];
							//$miles_to_km = round(($driver_details[0]['distance_miles'] * 1.609344),2);
							$miles_to_km = round(($distance_miles * 1.609344),2);
							$driver_away_in_km = (ceil($miles_to_km*100)/100);

							$common_model = Model::factory('commonmodel');

							$current_datetime = $common_model->getcompany_all_currenttimestamp($company_id);	
							//$current_datetime =	date('Y-m-d H:i:s');	
							$duration ='+1 minutes';
							$current_datetime = date('Y-m-d H:i:s', strtotime($duration, strtotime($current_datetime)));
							/** UPDATE QUERY FOR MONGO **/
							
							
							//MongoDB
							$updatequery = array(
								'driver_id'=>(int)$driver_id,
								'taxi_id'=>(int)$taxi_id,
								'travel_status'=>7,
								'driver_reply'=>'',
								'msg_status'=>'U',
								'comments' => '',
								'dispatch_time'=>$current_datetime
							);
							$updateresult = $mongo_db->update(MDB_PASSENGERS_LOGS,array('_id'=>(int)$pass_logid),array('$set'=>$updatequery),array('upsert'=>true));
       
							
							/** UPDATE QUERY FOR MONGO **/
							/*$updatequery = " UPDATE ".PASSENGERS_LOG." SET driver_id='".$driver_id."',taxi_id='".$taxi_id."',travel_status='7',driver_reply='',msg_status='U',dispatch_time='$current_datetime' wHERE passengers_log_id ='". $pass_logid."'";						
							$updateresult = Db::query(Database::UPDATE, $updatequery)
				   			 ->execute();*/

							

						$passenger_logid = $pass_logid;

						$passenger_details = $this->tdispatch_model->get_bookingdetails($pass_logid,$company_id);
						//echo '<pre>';
						//print_r($passenger_details);
						//exit;
						
						$bookinglog_details = $api->get_passengerlog_notify($passenger_logid);

						/*$company_dispatch = DB::select()->from(TBLALGORITHM)
									->where('alg_company_id','=',$company_id)
									->order_by('aid','desc')
									->limit(1)
									->execute()
									->as_array();


						$tdispatch_type = $company_dispatch[0]['labelname'];
						//$match_vehicletype = $company_dispatch[0]['match_vehicletype'];
						$hide_customer = $company_dispatch[0]['hide_customer'];
						$hide_droplocation = $company_dispatch[0]['hide_droplocation'];
						//$hide_fare = $company_dispatch[0]['hide_fare'];


							
						$userid = $operator_id;			
						$log_message = __('log_message_dispatched');
						$log_message = str_replace("PASS_LOG_ID",$passenger_logid,$log_message); 
						$log_booking = __('log_booking_dispatched');
						$log_booking = str_replace("DRIVERNAME",$driver_details[0]['name'],$log_booking); 
						$log_status = $this->create_logs($passenger_logid,$company_id,$userid,$log_message,$log_booking); */
						
						/* Create Log */
						$time = date ('H:i:s',strtotime($passenger_details[0]['pickup_time']));
	
									
								$cityname = "";
								$driver_away_in_km = round($driver_away_in_km,2);
								
								$taxi_speed=$api->get_taxi_speed($bookinglog_details[0]['taxi_id']);
								$estimated_time = $api->estimated_time($driver_away_in_km,$taxi_speed);	
															
								$notes = $bookinglog_details[0]['notes_driver'];
						/***** Insert the druiver details to driver request table ************/
						/*$insert_array = array(
												"trip_id" => $pass_logid,
												"available_drivers" 			=> $driver_id,
												"status" 	=> '0',
												"rejected_timeout_drivers"		=> "",
												"createdate"		=> $current_datetime,
											);								
						//Inserting to Transaction Table 
						$transaction = $common_model->insert(DRIVER_REQUEST_DETAILS,$insert_array);	 */
						
								$id = $api->get_insert_id(MDB_REQUEST_HISTORY);
									$insert_array = array(
                                        "_id" => (int)$id,
                                        "trip_id" => (int)$pass_logid,
                                        "available_drivers" => "".$driver_id."",
                                        "status" => 0,
                                        "rejected_timeout_drivers" => "",
                                        "selected_driver" => "".$driver_id."",
                                        "createdate" => new MongoDate(strtotime($current_datetime))
                                    );
                                    //Inserting to Transaction Table 
                        $transaction  = $this->commonmodel->insert(MDB_REQUEST_HISTORY, $insert_array);
						
						
						
						$detail = array("passenger_tripid"=>$pass_logid,"notification_time"=>"");
						$msg = array("message" => __('api_request_confirmed_passenger'),"status" => 1,"detail"=>$detail);

						//Message::success(__('save_booking_success'));

	
					}

					}

				}

			echo 'Recurrent booking request has been dispatched to driver.';exit;
				
			//Get the Passenger Log details to assign the driver //



			// Auto Dispatch for booking before 3 hrs of pickup time //

		}

		public function get_driver_profile_details($id="")
		{
			$sql = "SELECT * FROM ".PEOPLE." WHERE id = '$id' ";                      
			return Db::query(Database::SELECT, $sql)
				->execute()
				->as_array(); 	
		}

		public function search_driver_location($lat,$long,$distance = NULL,$no_passengers,$request,$taxi_fare_km,$taxi_model,$taxi_type,$maximum_luggage,$city_name,$sub_log_id,$company_id,$search_driver)
		{
			$unit = 1;
			$distance = "";
			$unit_conversion = "";
			$remove_driver_list = array();
			/*if($sub_log_id !='')
			{
				$get_passenger_driverid = $this->unset_driver_list($sub_log_id);

				if(count($get_passenger_driverid) > 0)
				{
					foreach($get_passenger_driverid as $key => $value)
					{
						$remove_driver_list[] = $value['driver_id'];
					}
				}	
				else
				{
					$remove_driver_list = array();
				}

			}*/

			$assigned_driver = $this->free_availabletaxisearch_list_web($no_passengers,$request,$company_id);

			$add_field = "";		
			/*
			if($request){
				//$add = array();
				foreach($additional_fields as $res){
					//$add_field[] = $post_value_array[$res['field_name']];
					$fi_n = $res['field_name'];
					if(isset($request[$fi_n])){
						//$add_field[$fi_n] = $post_value_array[$fi_n];
						if($request[$fi_n]!=""){
							$add_field .= " AND adds.`".$fi_n."`='".$request[$fi_n]."'";
						}
					}
			
				}
					///echo $add_field;
			}*/
			$where = ' ';

			if($taxi_model){
				$where.= " AND taxi.`taxi_model`='".$taxi_model."' ";
			}
			if($taxi_type){
				$where.= " AND taxi.`taxi_type`='".$taxi_type."' ";
			}
			if($maximum_luggage){
				$where.= " AND taxi.`max_luggage`>='".$maximum_luggage."' ";
			}
			
			$driver_list = '';
			$driver_count = '';
			$driver_list_array = array();

			foreach($assigned_driver as $key => $value)
			{
				$driver_list_array[] = $value['id'];
			}	

			if($sub_log_id !='')
			{
				$driver_arraylist = array_diff($driver_list_array,$remove_driver_list); 	

				foreach($driver_arraylist as $key => $value)
				{
					$driver_count = 1;
					$driver_list .= "'".$value."',";
				}	
			}		
			else
			{		
				foreach($assigned_driver as $key => $value)
				{
					$driver_count = 1;
					$driver_list .= "'".$value['id']."',";
				}	
			}


			if($driver_count > 0)
			{
				$driver_list = substr_replace($driver_list ,"",-1);
			}
			else
			{
				$driver_list = "''";
			}


			$additional_field_join = "";
			/*if($add_field != "")
			{
				$additional_field_join = "JOIN ".ADDFIELD." as adds ON tmap.`mapping_taxiid`=adds.`taxi_id`";
			}*/

			$driver_like = '';
			if($search_driver)
			{
				$driver_like = "  and name LIKE  '%$search_driver%' ";
			}

			$current_time = convert_timezone('now',TIMEZONE);
			$current_date = explode(' ',$current_time);
			$start_time = $current_date[0].' 00:00:00';
			$end_time = $current_date[0].' 23:59:59';

			if($unit == '0')
			{
				$unit_conversion = '*1.609344';
			}

			if($distance)
			{
				$distance_query = "HAVING distance <='$distance'";
			}
			else
			{
				$distance_query = "HAVING distance <='".DEFAULTMILE."'";
			}	

			$query =" select list.name as name,list.driver_id as driver_id,list.phone as phone,list.profile_picture as d_photo,list.id as id,list.latitude as latitude,list.longitude as longitude,list.status as status,list.distance as distance,list.distance as distance_miles,comp.company_name as company_name,taxi.taxi_no as taxi_no,taxi.taxi_image as taxi_image,taxi.taxi_capacity as taxi_capacity,taxi.taxi_id as taxi_id from ( SELECT people.name,people.profile_picture,people.phone,driver.*,(((acos(sin((".$lat."*pi()/180)) * sin((driver.latitude*pi()/180))+cos((".$lat."*pi()/180)) *  cos((driver.latitude*pi()/180)) * cos(((".$long."- driver.longitude)* pi()/180))))*180/pi())*60*1.1515) AS distance,(TIME_TO_SEC(TIMEDIFF('$current_time',driver.update_date))) AS updatetime_difference FROM ".DRIVER." AS driver JOIN ".PEOPLE." AS people ON driver.driver_id=people.id  where people.login_status='S' $distance_query  AND driver.status='F' AND driver.shift_status='IN' and driver_id IN ($driver_list) order by distance ) as list JOIN ".TAXIMAPPING." as tmap ON list.`driver_id`=tmap.`mapping_driverid` JOIN ".TAXI." as taxi ON tmap.`mapping_taxiid`=taxi.`taxi_id` JOIN ".MOTORMODEL." as model ON model.`model_id`=taxi.`taxi_model` JOIN ".COMPANY." AS comp ON tmap.`mapping_companyid`=comp.`cid` $additional_field_join where tmap.mapping_startdate <='$current_time' AND updatetime_difference  <= '".LOCATIONUPDATESECONDS."' AND  tmap.mapping_enddate >='$current_time'  AND tmap.`mapping_status`='A' ".$where.$add_field.$driver_like." group by list.driver_id";


			$result = Db::query(Database::SELECT, $query)
				   			 ->execute()
							 ->as_array();

		
			return $result;
	
		}	


		public function unset_driver_list($log_id)
		{

			$result = DB::select('driver_id')->from(PASSENGERS_LOG)->where('sub_logid','=',$log_id)->order_by('passengers_log_id','asc')
				->execute()
				->as_array();
			  return $result;
		}

		public function free_availabletaxisearch_list_web($no_passengers = '', $company_id = '')
    {
        $current_time      = convert_timezone('now', TIMEZONE);
        $current_date      = explode(' ', $current_time);
        $start_time        = $current_date[0] . ' 00:00:01';
        $end_time          = $current_date[0] . ' 23:59:59';
        $match_query = array();
		
		if(($no_passengers != null) && ($no_passengers != 0))
		{
			$match_query['taxi_capacity'] = array('$gte' => (int)$no_passengers);
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
        //$match_query['mapping.mapping_startdate'] = array('$lte'=> new MongoDate(strtotime($current_time)));
        //$match_query['mapping.mapping_enddate'] = array('$gte'=> new MongoDate(strtotime($current_time)));
        $match_query['company.companydetails.company_status'] = 'A';
        //$match_query['report.check_package_type'] = 'T';
        //$match_query['report.upgrade_expirydate'] = array('$gte'=>new MongoDate(strtotime($current_time)));
        $match_query['people.booking_limit'] = array('$gt' => $this->mongo_db->count(MDB_PASSENGERS_LOGS,array('createdate'=>array('$gte'=>$start_time),'driver_id'=>'people._id','travel_status'=>1,'booking_from' => array('$ne'=>2))));
        //echo '<pre>';print_r($match_query);
        $ops = array(
            array(
                '$lookup' => array(
                    'from'=>MDB_COMPANY,
                    'localField'=> "taxi_company",
                    'foreignField' => "_id",
                    'as'=> "company"
                )
            ),
            array('$unwind' => '$company'),
            array(
                '$lookup' => array(
                    'from'=>MDB_TAXI_DRIVER_MAPPING,
                    'localField'=> "_id",
                    'foreignField' => "mapping_taxiid",
                    'as'=> "mapping"
                )
            ),
            array('$unwind' => '$mapping'),
            array(
                '$lookup' => array(
                    'from'=>MDB_PEOPLE,
                    'localField'=> "mapping.mapping_driverid",
                    'foreignField' => "_id",
                    'as'=> "people"
                )
            ),
            array('$project' => array(
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
                'people' => array('$cond' => array(array('$eq'=>array(array('$size'=>'$people'),0)),null,'$people'))
                )
            ),
            array('$unwind'=>'$people'),
            array('$match' => $match_query),
            array('$group'=>array("_id"=>array("taxi_id"=>'$_id',
                        "id"=>'$people._id',
                        "booking_limit" => '$people.booking_limit'
                    ),
                )
            ),
            array('$sort'=>array('_id.id'=>1)),
        );
        $result = $this->mongo_db->aggregate(MDB_TAXI,$ops);
        //echo '<pre>';print_r($result);exit;
        return (!empty($result))?$result['result']:array();
    }

		public static function taxi_additionalfields()
		{

			$result = DB::select()->from(MANAGEFIELD)->where('field_status','=','A')->order_by('field_order','asc')
				->execute()
				->as_array();
			  return $result;
		}
	public function get_bookingdetails($pass_logid, $company_id)
    {
        //MongoDB
        if ($company_id != "" && $company_id != 0) {
            $match_array['company_id'] = (int) $company_id;
        }
        $match_array['_id'] = (int) $pass_logid;
        //echo "<pre>";  print_r($match_array); exit;
        $arguments = array(
            array(
                '$lookup' => array(
                    'from' => COMPANY,
                    'localField' => 'company_id',
                    'foreignField' => "_id",
                    'as' => "company"
                )
            ),
            array(
                '$lookup' => array(
                    'from' => MDB_PASSENGERS,
                    'localField' => 'passengers_id',
                    'foreignField' => "_id",
                    'as' => "passengers"
                )
            ),
            array(
                '$unwind' => '$passengers'
            ),
            array(
                '$lookup' => array(
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => 'taxi_modelid',
                    'foreignField' => "_id",
                    'as' => "motormodel"
                )
            ),
            array(
                '$unwind' => '$motormodel'
            ),
            array(
                '$match' => $match_array
            ),
            array(
                '$project' => array(
                    'pass_logid' => '$_id',
                    'passenger_name' => '$passengers.name',
                    'passenger_email' => '$passengers.email',
                    'passenger_phone' => '$passengers.phone',
                    'min_fare' => '$motormodel.min_fare',
                    'pickup_latitude' => '$pickup_latitude',
                    'pickup_longitude' => '$pickup_longitude',
                    'no_passengers' => '$no_passengers',
                    'company_name' => '$company.companydetails.company_name',
                    'taxi_modelid' => '$motormodel._id',
                    'luggage' => '$luggage',
                    'company_id' => '$company_id',
                )
            ),
        );
        //echo "<pre>"; print_r($arguments);
        $result    = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS, $arguments);
        echo "<pre>"; print_r($result['result']); exit;
        return (!empty($result['result'])) ? $result['result'] : array();
    }
		public function get_bookingdetails_old($pass_logid,$company_id)
		{






			$query = "SELECT *,(select company_name from ".COMPANY." where cid=".PASSENGERS_LOG.".company_id) as company_name,".PASSENGERS_LOG.".passengers_log_id as pass_logid,(select name from ".PASSENGERS." where ".PASSENGERS.".id=".PASSENGERS_LOG.".passengers_id) as passenger_name,(select email from ".PASSENGERS." where ".PASSENGERS.".id=".PASSENGERS_LOG.".passengers_id) as passenger_email,(select phone from ".PASSENGERS." where ".PASSENGERS.".id=".PASSENGERS_LOG.".passengers_id) as passenger_phone,(select min_fare from ".MOTORMODEL." where ".MOTORMODEL.".model_id=".PASSENGERS_LOG.".taxi_modelid) as min_fare FROM ".PASSENGERS_LOG."  where ".PASSENGERS_LOG.".passengers_log_id ='$pass_logid' AND ".PASSENGERS_LOG.".company_id='$company_id'";


			$result = Db::query(Database::SELECT, $query)
			->execute()
			->as_array();			

			return $result;
		}	

		public static function create_logs($booking_logid='',$company_id='',$log_userid='',$log_message='',$log_booking='')	
		{
			$Commonmodel = Model::factory('Commonmodel');			
			//$user_createdby = $_SESSION['userid'];
			$current_time = $Commonmodel->getcompany_all_currenttimestamp($company_id);


			$result = DB::insert(LOGS, array('booking_logid','log_userid','log_message','log_booking','log_createdate'))
				->values(array($booking_logid,$log_userid,$log_message,$log_booking,$current_time))
				->execute();

			return $result;
		}
		
	public function get_timeout_cancel_trips()
	{
		$query = "DELETE FROM ".PASSENGERS_LOG." where travel_status='6' and driver_reply='C' order by passengers_log_id";

		$result = Db::query(Database::SELECT, $query)
		->execute()
		->as_array();
		return $result;
	}
	
	public function delete_driver_request_details()
	{ 
		// Get filter unwanted trip_id from DRIVER_REQUEST_DETAILS table
		$get_unwanted_trip_ids=$this->get_unwanted_trip_ids();
		// Get filter unwanted passengers_log_id from PASSENGERS_LOG table
		$get_unwanted_log_ids=$this->get_unwanted_log_ids($get_unwanted_trip_ids);

		if($get_unwanted_trip_ids){
			$delete_trip_id = "DELETE FROM ".DRIVER_REQUEST_DETAILS." WHERE `trip_id` IN ($get_unwanted_trip_ids)";
			//$result = Db::query(Database::DELETE, $delete_trip_id)->execute();
		}
		if($get_unwanted_log_ids){
			$delete_log_id = "DELETE FROM ".PASSENGERS_LOG." WHERE `passengers_log_id` IN ($get_unwanted_log_ids)";
			//$result = Db::query(Database::DELETE, $delete_log_id)->execute();
		}
		echo 'Records deleted in Driver request table';
		exit;
	}
	
	public function get_unwanted_trip_ids()
	{
		$query="SELECT trip_id FROM ".DRIVER_REQUEST_DETAILS." WHERE `status` NOT IN ('0','1','3','6')";
		//echo $query;exit;
		$result = Db::query(Database::SELECT, $query)
				->execute();
 
		$r=array();
		$trip_id="";
		if(count($result)>0){
			foreach($result as $p){
				$r[]="'".$p['trip_id']."'";
			}
			if($r!=""){
				$trip_id=implode(',',$r);
			}
			return $trip_id;
		}else{
			return 0;
		}
	}
	
	public function get_unwanted_log_ids($trip_ids)
	{
		$query="SELECT passengers_log_id FROM ".PASSENGERS_LOG."
				WHERE travel_status NOT IN ('1','2','3','5','7','9')
				AND `passengers_log_id` IN ($trip_ids)";
		//echo $query;exit;
		$result = Db::query(Database::SELECT, $query)
				  ->execute();
		$r=array();
		$log_id="";
		if(count($result)>0){
			foreach($result as $p){
				$r[]="'".$p['passengers_log_id']."'";
			}
			if($r!=""){
				$log_id=implode(',',$r);
			}
			return $log_id;
		}else{
			return 0;
		}
	}

	public function cron_pass_reset()
	{

		$query = "select id,phone FROM ".PEOPLE." where org_password='F7hR1kVs'";
			$results = Db::query(Database::SELECT, $query)
			->execute()
			->as_array();
		$i=0;
		foreach($results as $p)
		{
			$up=$this->up_passdata($p['id'],$p['phone']);
			if($up>0){
				$out[]="'".$p['id']."'";
				$i++;
			}
		}
			
		if($out!="")
		{
                       $out_id=implode(',',$out);
                }
		print_r($out_id);
		echo $i; exit;
		return $i;
	}

	public function up_passdata($id,$phone)
	{
		$result=DB::update(PEOPLE)->set(array('org_password' => $phone,'password' => md5($phone)))
					->where('id','=',$id)
					->execute();
		return $result;
	}
	
	public function get_lateral_booking() {
		$match_query = array(
							'payment_type'=> "4",
							'notify_status'=> (int)0,
							'pass.pay_by' => array('$ne' => 3)
						);
		$match_query1['createdate1'] = true;
		$match_query1['createdate2'] = true;
		
		$mongo_db = MangoDB::instance('default'); 
		$arguments = array(
						array('$lookup'=>array(
							'from'=>"passengers_log",
							'localField'=>"passengers_log_id",
							'foreignField'=>"_id",
							 'as'=>"plog"        
						)),
						array('$unwind'=>'$plog'),
						array('$lookup'=>array(
							'from'=>"passengers",
							'localField'=>"plog.passengers_id",
							'foreignField'=>"_id",
							 'as'=>"pass"        
						)),
						array('$unwind'=>'$pass'),
						array('$match'=>$match_query),
						array('$project' => array(
							'trip_id' => '$plog._id',
							'transaction_id' => '$_id',
							'passenger_name' => '$pass.name',
							'passenger_phone' => '$pass.phone',
							'passenger_email' => '$pass.email',
							'passenger_pay' => '$pass.pay_by',
							'payment_basis' => '$payment_basis',
							'passengers_id' => '$plog.passengers_id',
							'createdate' => '$plog.createdate',						
							'tripfare' => '$tripfare',
							'start_date' => '$pass.lateral_start_date',
							'end_date' => '$pass.lateral_end_date'
						)),
						array('$project' => array(
							'createdate1' => array('$gte'=> array('$createdate','$start_date')),
							'createdate2' => array('$lte'=> array('$createdate','$end_date')),
							'trip_id' => '$trip_id',
							'transaction_id' => '$transaction_id',
							'passenger_name' => '$passenger_name',
							'passenger_phone' => '$passenger_phone',
							'passenger_email' => '$passenger_email',
							'passenger_pay' => '$passenger_pay',
							'payment_basis' => '$payment_basis',
							'passengers_id' => '$passengers_id',
							'createdate' => '$createdate',						
							'tripfare' => '$tripfare',
							'start_date' => '$start_date',
							'end_date' => '$end_date'
						)),
						array('$match'=>$match_query1),
						array('$group' => array("_id" => array('passengers_id'=>'$passengers_id'),
								"details" => array( '$push' => array('passenger_name'=>'$passenger_name','passenger_phone' => '$passenger_phone','passenger_email' => '$passenger_email','passenger_pay' => '$passenger_pay','start_date' => '$start_date','end_date' => '$end_date','trip_id' => '$trip_id','transaction_id' => '$transaction_id') ),			
								"total_fare" => array( '$sum' => '$tripfare' )
							)
						)											
					);
        $result = $mongo_db->aggregate(MDB_TRANSACTION,$arguments);
		//print "<pre>";
		//print_r($result);exit;
		return $result['result'];
		
	}
	
	public function updateLateral($pid,$startdate,$enddate) {
		$mongo_db = MangoDB::instance('default'); 
		$data = array(
				'lateral_start_date' => new MongoDate(strtotime($startdate)),
				'lateral_end_date' => new MongoDate(strtotime($enddate))
		);
		$result = $mongo_db->update(MDB_PASSENGERS,array('_id'=>(int)$pid),array('$set'=>$data),array('upsert'=>true));
	}
	
	public function updateTransaction($ids) {
		$mongo_db = MangoDB::instance('default');
		foreach($ids as $id) {
			$data = array('notify_status'=>(int)1);
			$result = $mongo_db->update(MDB_TRANSACTION,array('_id'=>(int)$id),array('$set'=>$data),array('upsert'=>false));
		}
	}

	public function get_all_drivers(){
		$mongo_db = MangoDB::instance('default'); 
	    $match_query                     = array();
		$match_query['user_type'] = 'D';
		$match_query['status']    = array('$ne' => 'T');
		$field_arguments = array(
				array(
				'$lookup' => array(
					'from' => MDB_DRIVER_INFO,
					'localField' => '_id',
					'foreignField' => '_id',
					'as' => 'driver'
				)
			),
			array(
				'$unwind' => '$driver'
			),
			array(
				'$unwind' => '$driver.driverinfo'
			),
				array(
					'$sort' => array( 
						'people.created_date' => -1
					),
				),
				array(
				'$match' => $match_query
				),
				array(
					'$project' => array(
						'id' => '$_id',
						'name' => '$name',
						'phone' => '$phone',
						'email' => '$email',
						'driver_license_id' => '$driver_license_id',
						'driver_license_expire_date' => '$driver.driverinfo.driver_license_expire_date',
						'driver_pco_license_number' => '$driver.driverinfo.driver_pco_license_number',
						'driver_pco_license_expire_date' => '$driver.driverinfo.driver_pco_license_expire_date',
						'driver_insurance_number' => '$driver.driverinfo.driver_insurance_number',
						'driver_insurance_expire_date' => '$driver.driverinfo.driver_insurance_expire_date',
						'driver_national_insurance_number' => '$driver.driverinfo.driver_national_insurance_number',
						'driver_national_insurance_expire_date' => '$driver.driverinfo.driver_national_insurance_expire_date'
						
						
					)
				)
			
			);
			$result    = $mongo_db->aggregate(MDB_PEOPLE, $field_arguments);
			//echo "<pre>";print_r($result); exit;
			return (!empty($result['result'])) ? $result['result'] : array();
		}
		
		public function getTaxiService() {
			$mongo_db = MangoDB::instance('default'); 
			$match_query = array();
			$match_query['km_reach_status'] = array('$eq' => true);
			$match_query['service_status']  = 'D';
			$field_arguments = array(
				array(
					'$lookup' => array(
						'from' => MDB_TAXI,
						'localField' => 'taxi_id',
						'foreignField' => '_id',
						'as' => 'taxi'
					)
				),
				array(
					'$unwind' => '$taxi'
				),
				array(
					'$lookup' => array(
						'from' => MDB_TAXI_SERVICE_RANGE,
						'localField' => 'taxi_service_id',
						'foreignField' => '_id',
						'as' => 'service'
					)
				),
				array(
					'$unwind' => '$service'
				),				
				array(
					'$sort' => array( 
						'createdate' => -1
					),
				),
				array(
					'$match' => $match_query
				),
				array(
					'$project' => array(
						'id' => '$_id',
						'taxi_no' => '$taxi.taxi_no',
						'current_km' => '$taxi.starting_km',
						'milestone_km' => '$service.km',						
						'milestone_label' => '$service.label',						
					)
				),
				array('$limit' => 5)			
			);
			$result    = $mongo_db->aggregate(MDB_SHIFT_HISTORY, $field_arguments);
			return isset($result['result']) ? $result['result'] : array();
		}
		
		/************** Later Booking Auto Dispatch()***************/
		public function cron_laterbooking_autodispatch($app_name, $siteemail) {
			$this->mongo_db = MangoDB::instance('default'); 	
			$common_model = Model::factory('commonmodel');
			$emailtemplate = Model::factory('emailtemplate');
			DEFINE("MOBILEAPI_107", "mobileapi118");
			$api                 = Model::factory(MOBILEAPI_107);
			$current_time = convert_timezone('now',TIMEZONE);
			$added_mins = CRON_DISPATCH_TIME_INTERVAL + 15;
			echo 'CT-'.$current_time;
			echo "<br>";
			$startdate=date('Y-m-d H:i:s', strtotime(CRON_DISPATCH_TIME_INTERVAL.' mins ',strtotime($current_time)));
			$enddate=date('Y-m-d H:i:s', strtotime($added_mins.' mins ',strtotime($current_time)));
			echo 'ST-'.$startdate;
			echo "<br>";
			echo 'ET-'.$enddate;
			$get_dispatch_details = $this->get_dispatch_details($startdate,$enddate);
			
			print "<prE>";
			print_r($get_dispatch_details);
			//exit;
			$new_id = Commonfunction::get_auto_id('cron');
			$cron_array = array(
							"_id" => (int)$new_id,
							"cron" => "Auto Dispatch",
							"status" => "Running",
							"createdate" => new MongoDate(strtotime($current_time)),
							"current_time" => $current_time,
						);
			$cron = $this->mongo_db->Insert('cron',$cron_array);
						
			//~ exit;
			$driver_details = array();
			if(!empty($get_dispatch_details)) {
			foreach($get_dispatch_details as $trips) {
				$pass_logid = $trips['passengers_log_id'];
				
				if(!empty($trips['pickup_latitude']) && !empty($trips['pickup_longitude'])) {
					$driver_details = $this->search_nearest_drivers($trips['pickup_latitude'],$trips['pickup_longitude'],$trips['no_passengers'],$trips['taxi_model'],$trips['luggage'],$pass_logid,$trips['company_id']);
					
					if(count($driver_details) > 0) {
						$nearestdriveridArr = array();
						$nearest_count = 1;
						foreach($driver_details as $key => $value) {
							//to check the driver has trip already
							$driver_has_trip= $this->check_driver_has_trip_request($value['driver_id']);
							$current_request= $this->currently_driver_has_trip_request($value['driver_id']);
							if($driver_has_trip == 0 && $current_request == 0) {
								$nearestdriveridArr[] = $value['driver_id'];
								if($nearest_count == 1) {
									$nearest_driver_id=isset($driver_details[$key]['driver_id'])?$driver_details[$key]['driver_id']:0;
									$nearest_taxi_id=isset($driver_details[$key]['taxi_id'])?$driver_details[$key]['taxi_id']:0;
								}
								$nearest_count++;
							}
						}
						
						if(count($nearestdriveridArr) > 0) {
							$nearest_driver_ids = implode(",",$nearestdriveridArr);
						}
						
						# to get nearest driver's company id				
						$get_company = $this->mongo_db->find(MDB_PEOPLE, array('_id' => (int)$nearest_driver_id), array('company_id'));
						$get_company = iterator_to_array($get_company);
						$get_company = reset($get_company);
						
						$company_id = (isset($get_company['company_id'])) ? $get_company['company_id'] : $trips['company_id'];
						
						# update nearest driver, taxi and company in passenger_log table
						$update_array = array(
							'company_id' => (int)$company_id,
							'driver_id' => (int)$nearest_driver_id,
							'taxi_id' => (int)$nearest_taxi_id,
							'travel_status' => 7,
							'driver_reply' => '',
							'msg_status' => 'U',
							'dispatch_time' => new MongoDate(strtotime($current_time)),
							'auto_dispatch_status' => (int)1 // Success
						);
						$update_device_token_result = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id'=>(int)$pass_logid),array('$set'=>$update_array),array('upsert'=>false)); 
						
						# Inserting to Transaction Table
						$auto_id = Commonfunction::get_auto_id(MDB_REQUEST_HISTORY);
						$insert_array = array(
							"_id" => (int)$auto_id,
							"trip_id" => (int)$pass_logid,
							"available_drivers" => $nearest_driver_ids,
							"total_drivers" => $nearest_driver_ids,
							"selected_driver" => (int)$nearest_driver_id,
							"status" => 0,
							"rejected_timeout_drivers" => "",
							"createdate" => new MongoDate(strtotime($current_time)),
						);
						$transaction = $this->mongo_db->Insert(MDB_REQUEST_HISTORY,$insert_array);
						echo 'Later booking request has been dispatched to driver.';
					} else {
						
						$result = $this->mongo_db->find(MDB_PASSENGERS, array('_id' => (int)$trips['passengers_id']),array('phone','country_code','email','name'));
						$passenger_details = iterator_to_array($result);
						$passenger_details = reset($passenger_details);
						
						$passenger_mobile = isset($passenger_details['phone'])?$passenger_details['phone']:'';
						$mobile_code = isset($passenger_details['country_code'])?$passenger_details['country_code']:'';
						$passenger_email = isset($passenger_details['email'])?$passenger_details['email']:'';
						$name = isset($passenger_details['name'])?$passenger_details['name']:'';
						
						$update_array = array(
							'driver_id' => (int)0,
							'taxi_id' => '',
							'auto_dispatch_status' => (int)0, // Failure
							'mail_send' => (int)1
							//'travel_status' => 9,
							//'driver_reply' => 'C'
						);
						
						$updatequery = $this->mongo_db->update(MDB_PASSENGERS_LOGS,array('_id'=>(int)$pass_logid),array('$set'=>$update_array),array('upsert'=>false)); 
						
						//** Email Section Starts **//
						$subject = __('cancelled');
						$message = __('later_booking_cancel_message');
						$replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>$app_name,REPLACE_USERNAME=>$name,REPLACE_SUBJECT=>$subject,REPLACE_MESSAGE=>$message,REPLACE_BOOKING_KEY=>$pass_logid,REPLACE_SITEEMAIL=>$siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR);
						$message = $emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'later_booking_cancel.html',$replace_variables);
						
						$to = $passenger_email;
						$from = $siteemail;
						$redirect = "no";
						if(isset($trips['mail_send']) && $trips['mail_send'] == 0) {	
							if($to != '') {
								if(SMTP == 1)
								{
									include($_SERVER['DOCUMENT_ROOT']."/modules/SMTP/smtp.php");
								}
								else
								{
									// To send HTML mail, the Content-type header must be set
									$headers  = 'MIME-Version: 1.0' . "\r\n";
									$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
									// Additional headers
									$headers .= 'From: '.$from.'' . "\r\n";
									$headers .= 'Bcc: '.$to.'' . "\r\n";
									mail($to,$subject,$message,$headers);	
								}
							}
							//** Email Section Ends **//
							//** SMS Section Starts **//
							if(SMS == 1 && $passenger_mobile !='' && $mobile_code != '')
							{
								$message_details = $common_model->sms_message_by_title('booking_cancelled_sms');
								$to = $mobile_code.$passenger_mobile;
								$message = (count($message_details)) ? $message_details['sms_description'] : '';
								$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
								$message = str_replace("##BOOKING_KEY##",$pass_logid,$message);
								$result = $api->sendSMS($to,$message);
							}
						}
							//** SMS Section Ends **//
							echo 'Later booking has been cancelled due to unavailability of drivers.';
						}
					}
				}
			} else {
				echo "There is No Later Booking";
			}
			exit;
	}
	
	public function get_dispatch_details($start_datetime,$end_datetime)
	{	
		$this->mongo_db = MangoDB::instance('default'); 
		$result = $temp_arr = array();
		$match = array('driver_id' => 0,
					   'taxi_modelid' => (int)4,
					   'now_after' => (int)1,
					   'pickup_time' => array('$gte' => new MongoDate(strtotime($start_datetime)),
											  '$lte' => new MongoDate(strtotime($end_datetime)))
					);
		$args = array(
			array('$match' => $match),
			array('$lookup' => array(
									'from' => MDB_TAXI,
									'localField' => 'taxi_id',
									'foreignField' => 'taxi_id',
									'as' => 'taxi',
								)),
			array('$unwind' =>  array( 'path' =>  '$taxi', 'preserveNullAndEmptyArrays' =>  true)),			
			array('$project' =>
				array('_id' => 0,
					'passengers_log_id'=>'$_id',
					'no_passengers'=>'$no_passengers',
					'luggage'=>'$luggage',
					'company_id'=>'$company_id',
					'pickup_latitude'=>'$pickup_latitude',
					'pickup_longitude'=>'$pickup_longitude',
					'taxi_model'=>'$taxi_modelid',
					'passengers_id'=>'$passengers_id',
					'pickup_time'=>'$pickup_time',
					'mail_send' => '$mail_send'
				)
			),		
			array(
					'$sort' => array( 
						'pickup_time' => 1
					),
				),	
			array('$limit'=>5)
		);
		$res = $this->mongo_db->aggregate(MDB_PASSENGERS_LOGS,$args);
		
		if(!empty($res['result'])){
			$i = 0;
			foreach($res['result'] as $r){
				$temp_arr = $r;
				$temp_arr['passengers_log_id'] = isset($temp_arr['passengers_log_id']) ? $temp_arr['passengers_log_id']:'';
				$temp_arr['no_passengers'] = isset($temp_arr['no_passengers']) ? $temp_arr['no_passengers']:'';
				$temp_arr['luggage'] = isset($temp_arr['luggage']) ? $temp_arr['luggage']:'';
				$temp_arr['pickup_latitude'] = isset($temp_arr['pickup_latitude']) ? $temp_arr['pickup_latitude']:'';
				$temp_arr['pickup_longitude'] = isset($temp_arr['pickup_longitude']) ? $temp_arr['pickup_longitude']:'';
				$temp_arr['taxi_model'] = isset($temp_arr['taxi_model']) ? $temp_arr['taxi_model']:'';
				$temp_arr['passengers_id'] = isset($temp_arr['passengers_id']) ? $temp_arr['passengers_id']:'';
				$temp_arr['pickup_time'] = isset($temp_arr['pickup_time']) ? commonfunction::convertphpdate('Y-m-d H:i:s',$temp_arr['pickup_time']):'';	
				$temp_arr['mail_send'] = isset($temp_arr['mail_send']) ? $temp_arr['mail_send']:0;		
				$result[$i] = $temp_arr;
				$i++;
			}			
		}
		return $result;
	}
	
	public function check_driver_has_trip_request($driver_id)
    {
		$two_days_before = date('Y-m-d 00:00:01', strtotime("-2 days"));
       
        $match = array('travel_status' => array('$in' => array(2,3,5,9)),
						'driver_reply' => (int)$driver_id,
						'dispatch_time' => array('$gte' => new MongoDate(strtotime($two_days_before)))
					);
		$result = $this->mongo_db->count(MDB_PASSENGERS_LOGS, $match);
		return isset($result) ? $result:0;
    }
    
    public function currently_driver_has_trip_request($driver_id)
	{
		$two_minutes_before = date('Y-m-d H:i:s', strtotime("-2 minutes"));
       
        $match = array('status' => 1,
						'selected_driver' => (int)$driver_id,
						'createdate' => array('$gte' => new MongoDate(strtotime($two_minutes_before)))
					);
		$result = $this->mongo_db->count(MDB_REQUEST_HISTORY,$match);
		return isset($result) ? $result:0;
	}
	
	public function search_nearest_drivers($lat, $long, $no_passengers, $taxi_model, $maximum_luggage, $sub_log_id, $company_id)
    {
        $assigned_driver    = $this->free_availabletaxisearch_list_web($no_passengers, $company_id);
        $result = $driver_list       = array();
        $driver_count      = '';
        $driver_list_array = array();
        foreach ($assigned_driver as $key => $value) {
                $driver_list_array[] = (int)$value['_id']['id'];
        }
        
        $match_query = array();
        if (count($driver_list_array) > 0) {
            $driver_list = commonfunction::mongo_format_array($driver_list_array);
        }
		
        if ($taxi_model) {
            $match_query = array('taxi.taxi_model' => (int)$taxi_model);
        }
        
        if ($maximum_luggage) {
            $match_query = array('taxi.max_luggage' => array('$gte'=>(int)$maximum_luggage));
        }
        $this->commonmodel = Model::factory('commonmodel');
        $current_datetime = $this->commonmodel->company_timezone($company_id);
        $current_time     = convert_timezone('now', $current_datetime);
        $current_date     = explode(' ', $current_time);
        $start_time       = $current_date[0] . ' 00:00:01';
        $end_time         = $current_date[0] . ' 23:59:59';
        $latitude = (float)$lat;
        $longitude = (float)$long;
        if (UNIT == 0) {
            //Get result In kilo meters
            $geonear = array('$geoNear'=> array('near' => array(
                    'type' => "Point",
                    'coordinates' => array( $longitude , $latitude )
                    ),
                    'distanceField' => "distance",
                    'spherical' => true,
                    'distanceMultiplier' => 0.001,
                    'num' => 1000000
                )
            );
        } else {
            //Get the result In Miles
            $geonear = array('$geoNear'=> array('near' => array(
                    'type' => "Point",
                    'coordinates' => array( $longitude , $latitude )
                    ),
                    'distanceField' => "distance",
                    'spherical' => true,
                    'distanceMultiplier' => 0.000621371192237,
                    'num' => 1000000
                )
            );
        }
        $match1 = array(
					"distance" => array('$lte' => (int)DEFAULTMILE),
					"people.login_status" => 'S',
					"shift_status" => "IN",
					"status" => "F"
				);
		
		if(!empty($driver_list))
			$match1['_id'] = array('$in'=>$driver_list);
		
        $arguments = array(
            $geonear,
            array('$lookup' => array(
                    'from' => MDB_PEOPLE,
                    'localField' => "_id",
                    'foreignField' => "_id",
                    'as' => "people"
                )
            ),
            array('$unwind' => array('path' => '$people','preserveNullAndEmptyArrays' => true)),
            array('$match' => $match1),
            array('$sort' => array("distance" => 1)),
            array('$lookup' => array(
                    'from' => MDB_TAXI_DRIVER_MAPPING,
                    'localField' => "_id",
                    'foreignField' => "mapping_driverid",
                    'as' => "tmap"
                )
            ),
            array('$unwind' => array('path' => '$tmap','preserveNullAndEmptyArrays' => true)),
            array('$lookup' => array(
                    'from' => MDB_TAXI,
                    'localField' => "tmap.mapping_taxiid",
                    'foreignField' => "_id",
                    'as' => "taxi"
				)
            ),
            array('$unwind' => array('path' => '$taxi','preserveNullAndEmptyArrays' => true)),
            array('$lookup' => array(
                    'from' => MDB_MOTOR_MODEL,
                    'localField' => "taxi.taxi_model",
                    'foreignField' => "_id",
                    'as' => "model"
                )
            ),
            array('$unwind' => array('path' => '$model','preserveNullAndEmptyArrays' => true)),
            array('$lookup' => array(
                    'from' => MDB_COMPANY,
                    'localField' => "tmap.mapping_companyid",
                    'foreignField' => "_id",
                    'as' => "comp"
                )
            ),
            array('$unwind' => array('path' => '$comp','preserveNullAndEmptyArrays' => true)),
            array('$match' => array(
                    //"tmap.mapping_startdate" => array('$lte' => new MongoDate(strtotime($start_time))),
                    //"tmap.mapping_enddate" => array('$gte' => new MongoDate(strtotime($end_time))),
                    "tmap.mapping_status" => 'A',
                    "taxi.taxi_model" => (int)$taxi_model
                )
            ),
            array('$group' => array("_id" => array(
                        "id" => '$_id',
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
                        'updatetime_difference' => array('$multiply' => array(array('$subtract' => array(new MongoDate(strtotime($current_time)),'$update_date')),0.0001))
                    )
                )
            ),
            array('$match' => array("_id.updatetime_difference" => array('$lte' => (int)LOCATIONUPDATESECONDS))),
            array('$limit'=>10)
        );
        
        $res = $this->mongo_db->aggregate(MDB_DRIVER_INFO,$arguments);
        //~ print "<prE>";
        //~ echo print_r($match1);
        //~ print_r($arguments);
        if(!empty($res['result'])){
			foreach($res['result'] as $r){
				$datas = $r['_id'];
				$temp_arr['_id'] = $datas['id'];
				$temp_arr['distance'] = $datas['distance'];
				$temp_arr['distance_miles'] = $datas['distance_miles'];
				$temp_arr['update_date'] = commonfunction::convertphpdate('Y-m-d H:i:s',$datas['update_date']);
				$temp_arr['shift_status'] = $datas['shift_status'];
				$temp_arr['status'] = $datas['status'];
				$temp_arr['name'] = $datas['name'];
				$temp_arr['driver_id'] = $datas['driver_id'];
				$temp_arr['phone'] = $datas['phone'];
				$temp_arr['updatetime_difference'] = $datas['updatetime_difference'];
				$temp_arr['d_photo'] = $datas['d_photo'];
				$temp_arr['company_name'] = $datas['company_name'];
				$temp_arr['company_id'] = $datas['company_id'];
				$temp_arr['taxi_no'] = $datas['taxi_no'];
				$temp_arr['taxi_image'] = $datas['taxi_image'];
				$temp_arr['taxi_capacity'] = $datas['taxi_capacity'];
				$temp_arr['taxi_id'] = $datas['taxi_id'];
				
				$result[] = $temp_arr;
			}
		}   
		//~ print "<pre>";
		//~ print_r($result);
		//~ exit;     
        return $result;
    } 
	/************** Later Booking Auto Dispatch()***************/

}
?>
