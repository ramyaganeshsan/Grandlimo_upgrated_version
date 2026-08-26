<?php defined('SYSPATH') or die('No direct script access.');

/****************************************************************

* Contains API details - Version 1.1.5

* @Package: Taximobility

* @Author:  NDOT Team

* @URL : http://www.ndot.in 

****************************************************************/
Class Controller_Mobileapi114 extends Controller_Mobile101
{

	public function __construct()
	{	
		try {		
		//require Kohana::find_file('classes','table_config');
		require Kohana::find_file('classes','mobile_common_config');		
		$this->commonmodel=Model::factory('commonmodel');
		DEFINE("MOBILEAPI_107","mobileapi114");
		DEFINE("FIND","find113");

		if((COMPANY_CID !='0'))
		{
			$this->app_name = COMPANY_SITENAME;
			$this->siteemail= COMPANY_CONTACT_EMAIL;
			$this->domain_name = SUBDOMAIN;
		}
		else
		{
			 $this->siteemail=$this->commonmodel->select_site_settings('email_id',SITEINFO);
			 $this->app_name = $this->commonmodel->select_site_settings('app_name',SITEINFO);
			 $this->domain_name='demo';
		}
		$this->lang = I18n::lang(LANG);
		$this->app_description=APP_DESCRIPTION;	
		$this->emailtemplate=Model::factory('emailtemplate');
		$this->notification_time = ADMIN_NOTIFICATION_TIME;		
		//$this->customer_google_api = $this->commonmodel->select_site_settings('customer_android_key',SITEINFO); // For GCM
		//$this->driver_android_api = $this->commonmodel->select_site_settings('driver_android_key',SITEINFO);	// For GCM
		//$this->customer_app_url = $this->commonmodel->select_site_settings('customer_app_url',SITEINFO);	
		//$this->driver_app_url = $this->commonmodel->select_site_settings('driver_app_url',SITEINFO);		
		//$this->google_geocode_api = $this->commonmodel->select_site_settings('google_geocode_api',SITEINFO);		
		$this->continuous_request_time = CONTINOUS_REQUEST_TIME;
		$this->currentdate=Commonfunction::getCurrentTimeStamp();
		}
		catch (Database_Exception $e)
		{
			 // Insert failed. Rolling back changes...
			// print_r($e);
			$message = ["message" => __('Database Connection Failed'),"status" => 2];			
			echo json_encode($message);
			exit;
		}
	}
	public function action_index()
	{	

		$find_url = explode('/',urldecode($_SERVER['REQUEST_URI']));  	
		//print_r($find_url);
		$split = explode('?',$find_url[3]);  	
		$company_api_encrypt = trim($split[0]);		
		/*$company_api_key = "ntaxi"."_"."eoqITaphgQ7f6ZcBTF85VSSlRwPeAdIZQT";
		$encrypted_txt = $this->encrypt_decrypt('encrypt', $company_api_key);
		echo "Encrypted Text = $encrypted_txt\n";
		exit;
		//*/
		//bnRheGlfUkg3UFZzS0UxOHFHZTZZNllPQzhrZFJudE9FeURuRDB1Vw==
		//exit;*/
		$company_api_decrypt = $this->encrypt_decrypt('decrypt', $company_api_encrypt);		
		$company_split = explode('_',$company_api_decrypt);
		$company_api_key = trim($company_split[1]);
		//print_r($company_api_key);		
		$api = Model::factory(MOBILEAPI_107);	
		/// We are getting the date from mobile as urlencoded format in POST method
		$mobile_encodeddata = file_get_contents('php://input');
		// Here we are decode the url encoded values and conver the values in to array
		$mobiledata =  (array)json_decode($mobile_encodeddata,true);
		$errors = [];		
		$method = $_REQUEST["type"];
		$apikey_result =[];

		//CHECK FOR VALID API KEY
		if($company_api_key != 'all')
		{
		$apikey_query = "select company_cid,company_currency,company_app_description from ".COMPANYINFO." left join ".COMPANY." on ".COMPANY.".cid=".COMPANYINFO.".company_cid where company_api_key='".$company_api_key."' and company_status='A'";

		$apikey_result =  Db::query(Database::SELECT, $apikey_query)
			->execute()
			->as_array(); 
		}
		
		if((count($apikey_result) > 0) || ($company_api_key == 'all'))
		{ 
			if($company_api_key == 'all')
			{
				$default_companyid = '';
				$this->site_currency='$';
			}
			else
			{
				$default_companyid = $apikey_result[0]['company_cid'];
				$this->site_currency = COMPANY_CURRENCY;
				$this->app_description = $apikey_result[0]['company_app_description'];
			}
		$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
//echo 'as'.$default_companyid;
		switch($method)
		{
			//Company URL : http://192.168.1.88:1000/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=getcoreconfig
			//All Company URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=getcoreconfig
			case 'getcoreconfig':
			//echo 'as';
			$config_array = $api->select_site_settings($default_companyid);
			
			if(count($config_array) > 0)
			{
				if($default_companyid == '')
				{
					$config_array[0]['noimage_base'] = URL_BASE.'/public/images/noimages109.png';
					$config_array[0]['api_base'] = URL_BASE;
					$config_array[0]['logo_base'] = URL_BASE.'/public/admin/images/';					
					$config_array[0]['aboutpage_description'] = $this->app_description;
					$config_array[0]['admin_email'] = $this->siteemail;
					$config_array[0]['tell_to_friend_subject'] = __('telltofrien_subject');
					$config_array[0]['skip_credit'] = SKIP_CREDIT_CARD;
					$config_array[0]['metric'] = UNIT_NAME;
				}
				else
				{					
					$config_array[0]['noimage_base'] = URL_BASE.'/public/images/noimages109.png';
					$config_array[0]['api_base'] = URL_BASE;
					$config_array[0]['site_country'] = "";
					$config_array[0]['logo_base'] = URL_BASE.'/public/uploads/site_logo/';	
					$config_array[0]['aboutpage_description'] = $this->app_description;		
					$config_array[0]['admin_email'] = $this->siteemail;	
					$config_array[0]['tell_to_friend_subject'] = __('telltofrien_subject');
					$config_array[0]['skip_credit'] = SKIP_CREDIT_CARD;
					$config_array[0]['metric'] = UNIT_NAME;
				}
				$config_array[0]['share_content'] = __('telltofriend_content');
				$config_array[0]['referral_code_info'] = __('referral_code_info_details');
				$config_array[0]['cancellation_setting']=CANCELLATION_FARE;
				/***Get Company car model details start***/
				$company_model_details = $api->company_model_details($default_companyid);
				if(count($company_model_details)>0){
					$config_array[0]['model_details']=$company_model_details;
				}else{ 
					$config_array[0]['model_details']="model details not found";
				}
				/***Get Company car model details end***/				
				$message = ["message" =>__('success'),"detail" => $config_array,"status" => 1];
			}
			else
			{
				$message = ["message" => __('failed'),"status" => 2];
			}
			echo json_encode($message);
			break;
			
			case 'getmodel_fare_details':
				$company_model_details = $api->company_model_details($default_companyid);
				if(count($company_model_details) > 0){
					$details = ["model_details"=>$company_model_details];
					$message = ["message" =>__('success'),"detail" => $details,"status" => 1];
				}else{ 
					$message = ["message" => __('model_detail_not_found'),"status" => 2];
				}
				echo json_encode($message);
			break;																
	
			//URL :http://192.168.1.88:1020/api/?type=driver_location_history&driver_id=8&trip_id=268&locations=11.017194,76.964758&status=A&device_token=
			case 'driver_location_history':
					$location_array = $mobiledata;
					//print_r($location_array);exit;
					$api = Model::factory(MOBILEAPI_107);	
					//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
					
					if(!empty($location_array))
					{
						$check_driver_login_status = $api->logged_user_status_web($location_array['driver_id'],$default_companyid);
						$logout_notification = isset($check_driver_login_status[0]['notification_status'])?$check_driver_login_status[0]['notification_status']:'';
						$logout_status = isset($check_driver_login_status[0]['login_status'])?$check_driver_login_status[0]['login_status']:'';
						$admin_logout_status = isset($check_driver_login_status[0]['admin_logout'])?$check_driver_login_status[0]['admin_logout']:'0';
						//print_r($check_driver_login_status);exit;
						if($check_driver_login_status == 1)
						{
						   $history_validator = $this->history_validation($location_array);
						   if($history_validator->check())
						   {
								$driver_status = $location_array['status'];
								$device_token = "";//$location_array['device_token'];
								$driver_id = $location_array['driver_id'];
								$trip_id = $location_array['trip_id'];
								
								$company_det =$api->get_company_id($location_array['driver_id']);
								$company_id = '';
								if(count($company_det)>0){
									$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det[0]['company_id']);
									$company_id = $company_det[0]['company_id'];
								}
								
								$coordinates = explode('|',$location_array['locations']);
								//print_r($coordinates);exit;
								if(count($coordinates)>1){
									$last_1=array_slice($coordinates, -2, 2, true);
									$coordinates = explode(',',$last_1[count($coordinates)-2]);
									//print_r($last_1);
								}else{
									$coordinates = explode(',',$coordinates[0]);
								}
								
								$latitude = empty($coordinates['0'])?'0.0':$coordinates['0'];		
								$longitude = empty($coordinates['1'])?'0.0':$coordinates['1'];
								//echo $latitude."--".$longitude;exit;
								//If passenger cancelled means driver have get notification
								if($location_array['driver_id']!=""){
									/** to check the taxi assigning period is completed or not **/
									/*$getTaxiforDriver = $api->getTaxiforDriver($location_array['driver_id'],$company_id);
									if(count($getTaxiforDriver) == 0 )
									{
										$msg = array("message" => __('taxi_assign_period_end'),"status"=>11);
										echo json_encode($msg); break;
									} */
									/********** Get passenger cancelled details *****************/
									$driver_request_details = $api->get_passenger_cancel_request_data($location_array['driver_id'],$company_id);
									if(count($driver_request_details) > 0){
										$msg = ["message" => __('passenger_trip_cancelled'),"status"=>10];
										$update_driver_request_array  = ["notification_status" => '5']; // Passenger Cancelled
										$result = $api->update_table(PASSENGERS_LOG,$update_driver_request_array,'passengers_log_id',$driver_request_details[0]['trip_id']);
										echo json_encode($msg); break;
									}
								}
								
								/*** Notification to driver for Dispatcher cancelled the trip *********************/
								if($driver_id != '') {
										 $driver_request_details = $api->get_dispatcher_cancel_data($driver_id,$default_companyid);
										  if(count($driver_request_details) == 1)
											{
												$msg = ["message" => __('dispatcher_trip_cancelled'),"device_id"=>$device_token,"status"=>10];
												$update_driver_array  = ["notification_status" => '5'];
												$update_current_result = $api->update_table(PASSENGERS_LOG,$update_driver_array,'passengers_log_id',$driver_request_details[0]['trip_id']);
												echo json_encode($msg); break;                                        
											}
									}
								/************************************************************************************/
								/** driver update from dispatcher *
								if($trip_id !="" && $trip_id !=0){
									$trip_update_status = $api->get_trip_update_status($trip_id);
									if(count($trip_update_status) > 0)
									{
										$drop_location=isset($trip_update_status[0]['drop_location'])?$trip_update_status[0]['drop_location']:"";
										$drop_latitude=isset($trip_update_status[0]['drop_latitude'])?$trip_update_status[0]['drop_latitude']:"";
										$drop_longitude=isset($trip_update_status[0]['drop_longitude'])?$trip_update_status[0]['drop_longitude']:"";
										$pickup_location=isset($trip_update_status[0]['current_location'])?$trip_update_status[0]['current_location']:"";
										$pickup_latitude=isset($trip_update_status[0]['pickup_latitude'])?$trip_update_status[0]['pickup_latitude']:"";
										$pickup_longitude=isset($trip_update_status[0]['pickup_longitude'])?$trip_update_status[0]['pickup_longitude']:"";
										$driver_notes=isset($trip_update_status[0]['notes_driver'])?$trip_update_status[0]['notes_driver']:"";
										$msg = array("message" => __('disptcher_updated'),"drop_location"=>$drop_location,"drop_latitude"=>$drop_latitude,"drop_longitude"=>$drop_longitude,"pickup_location"=>$pickup_location,"pickup_latitude"=>$pickup_latitude,"pickup_longitude"=>$pickup_longitude,"driver_notes"=>$driver_notes,"status"=>11);
										$update_driver_array  = array("notification_status" => '7');
										$update_current_result = $api->update_table(PASSENGERS_LOG,$update_driver_array,'passengers_log_id',$trip_id);
										echo json_encode($msg); break;                                 
									}
								}
								/** driver update from dispatcher **/
								if($driver_status == 'F')
								{														
									/***** Update Driver Current Location *********************/								
									if(count($coordinates)>0)
									{		
										if(($latitude != 0) && ($longitude != 0))
										{													
											if(($location_array['trip_id'] == 0) || ($location_array['trip_id'] == ""))
											{
												$update_driver_array  = [		
																	"latitude" => $latitude,
																	"longitude" => $longitude,
																	"status" => 'F',
																	"update_date"=> $company_all_currenttimestamp];										
											}
											else
											{
												$update_driver_array  = [
																	"latitude" => $latitude,
																	"longitude" => $longitude,
																	"status" => strtoupper($driver_status),
																	"update_date"=> $company_all_currenttimestamp];
											}
											
											if($trip_id>0){
												   $get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
												   if(count($get_passenger_log_details)>0)
												   {                                                                
														   $driver_reply = $get_passenger_log_details[0]->driver_reply;
														   $travel_status = $get_passenger_log_details[0]->travel_status;
														   if(($driver_reply == 'A') && ($travel_status == 4))
														   {
															   $msg = ["message" => __("trip_cancelled_passenger"),"detail"=>"","status"=>7];
															   echo json_encode($msg);
															   break;                                       
														   }                                                                                                                                       
												   }
											}
											
											$update_current_result = $api->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);
											$driver_location_history_free = $api->save_driver_location_history_free($location_array,$default_companyid);
											
											$check_new_request = $api->check_new_request($driver_id,$company_all_currenttimestamp);
											if($check_new_request > 0)
											{	
												$passenger_name = "";
												$get_passenger_log_details = $api->get_passenger_log_detail($check_new_request);
												if(count($get_passenger_log_details)>0)
												{
													foreach($get_passenger_log_details as $values)
													{														
														$p_device_type = $values->passenger_device_type;
														$p_device_token  = $values->passenger_device_token;	
														/** get minimum speed **/
														$taxi_id=$values->taxi_id;
														$dr_company_id=$values->company_id;
														$get_min_speed=$api->get_minimum_speed($taxi_id,$default_companyid);
														$belowspeed_mins=$get_min_speed[0]['taxi_min_speed'];  
														/** get minimum speed **/
														$pickupplace  = urldecode($values->current_location);	
														$dropplace = urldecode($values->drop_location);	
														$passenger_id = $values->passengers_id;
														$passenger_phone = $values->passenger_phone;
														$time_to_reach_passen = $values->time_to_reach_passen;
														$sub_logid = $values->sub_logid;
														$pickup_latitude = $values->pickup_latitude;
														$pickup_longitude = $values->pickup_longitude;
														$drop_latitude = $values->drop_latitude;
														$drop_longitude = $values->drop_longitude;
														$passenger_salutation = $values->passenger_salutation;
														$p_name = $values->passenger_name;
														$pickup_time = $values->pickup_time;
														$bookby = $values->bookby;
														$notes_driver = $values->notes_driver;	
													}	
													$passenger_name = $passenger_salutation.' '.ucfirst($p_name);
													$notification_time = $this->notification_time;
													if($notification_time != 0 ){ $timeoutseconds = $notification_time;}else{$timeoutseconds = 15;}
													//if timeout seconds greater than 60 seconds we have to convert to mins and secs
													if($timeoutseconds > 60) {
														$notification_minutes = floor($timeoutseconds / 60);
														$notification_seconds = $timeoutseconds % 60;
														$notification_minutes = ($notification_minutes < 10) ? '0'.$notification_minutes : $notification_minutes;
													} else {
														$notification_minutes = "00";
														$notification_seconds = $timeoutseconds;
													}
													$notification_seconds = ($notification_seconds < 10) ? '0'.$notification_seconds : $notification_seconds;
													$total_timeout = $notification_minutes." : ".$notification_seconds;
													$trip_details = ["message" => __('api_request_confirmed_passenger'),"status" => "1","passengers_log_id" => $check_new_request,"booking_details" => [ "pickupplace" => $pickupplace, "dropplace" => $dropplace, "pickup_time" => $pickup_time,"driver_id" => $driver_id,"passenger_id" => $passenger_id,"roundtrip" => "","passenger_phone" => $passenger_phone,"cityname" => "", "distance_away" => "","sub_logid" => $sub_logid,"drop_latitude" => $drop_latitude,"drop_longitude" => $drop_longitude, "taxi_id" => $taxi_id, "company_id" => $dr_company_id,"pickup_latitude" => $pickup_latitude, "pickup_longitude" => $pickup_longitude,"bookedby" => $bookby, "passenger_name" => $passenger_name,"profile_image" => "","drop" => $dropplace],"estimated_time" => $time_to_reach_passen ,"notification_time" => $timeoutseconds,"notification_minutes" => $notification_minutes,"notification_seconds" => $notification_seconds,"notes" =>$notes_driver,"belowspeed_mins"=>$belowspeed_mins];	
													$msg = ["message" => __('driver_history_updated'),"trip_details"=>$trip_details,"status" => 5];	
													
													$check_another_request = $api->check_new_request_bydriver($driver_id,$company_all_currenttimestamp,$check_new_request);
													if(count($check_another_request) > 0){
														foreach($check_another_request as $cns){
															$api->change_driver_reqflow($cns['trip_id'],$cns['available_drivers'],$cns['rejected_timeout_drivers']);
														}
													}
													$update_trip_array  = ["status"=>'1'];
													$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$check_new_request);	
													
													$update_driver_array  = ["status"=>'B'];
													$result = $api->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);
												}	
												else
												{
													$msg = ["message" => __('driver_history_updated'),"status" => 1];
												}
											}
											else
											{
												$msg = ["message" => __('driver_history_updated'),"status" => 1];
											}
										}
										/********* Update driver device token every specified seconds *************
										if($device_token != "")
										{
										$update_array  = array("device_token" => $device_token);							
										$login_status_update = $api->update_driver_phone($update_array,$driver_id,$default_companyid);
										}
										/***************************************************************************/									
									}
								}
								else if($driver_status == 'A')
								{
									/***** Update Driver Current Location ******************************************/
									$update_driver_array  = [
																	"latitude" => $latitude,
																	"longitude" => $longitude,
																	"status" => strtoupper($driver_status),
																	"update_date"=> $company_all_currenttimestamp];
									$update_current_result = $api->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);
									/*******************************************************************************/
									$result = $api->save_driver_location_history($location_array,$default_companyid);
									$distance = isset($result[1]) ? $result[1]  :'0';
									if($result[0] == 1)
									{
										$msg = ["message" => __('driver_history_updated'),"status" => 1,"distance"=>$distance];	
									}
									else if($result == -1)
									{
										$msg = ["message" => __('driver_history_already'),"status" => -1];	
									}
									else if($result == 2)
									{
										$msg = ["message" => __('invalid_user'),"status" => 2];	
									}
									else if($result == 3)
									{
										$msg = ["message" => __('no_access'),"status" => 3];	
									}
									else if($result == 5)
									{
										$msg = ["message" => __('driver_history_updated'),"status" => 1,"distance"=>$distance];	
									}
									else
									{
										$msg = ["message" => __('invalid_user'),"status"=>-1];	
									}
								}
								elseif($driver_status == 'B')
								{									
									/***** Update Driver Current Location *********************************************************/
									if(($latitude != 0) &&($longitude != 0))
									{
											$update_driver_array  = [
																	"latitude" => $latitude,
																	"longitude" => $longitude,
																	"status" => strtoupper($driver_status),
																	"update_date"=> $company_all_currenttimestamp];
											$update_current_result = $api->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);
									}
									/**********************************************************************************************/
									$get_passenger_log_details = $api->get_passenger_log_detail($trip_id);
									if(count($get_passenger_log_details)>0)
									{								
										$driver_reply = $get_passenger_log_details[0]->driver_reply;
										$travel_status = $get_passenger_log_details[0]->travel_status;
										$msg = ["message" => __('driver_history_updated'),"status" => 1];	
										if(($driver_reply == 'A') && ($travel_status == 4))
										{
											$msg = ["message" => __("trip_cancelled_passenger"),"detail"=>"","status"=>7];
										}
									}
									else
									{
										$msg = ["message" => __('driver_history_updated'),"status" => 1];	
									}
									
									$check_new_request_trip = $api->check_new_request_bydriver($driver_id,$company_all_currenttimestamp,$trip_id);
									$check_driver_status_free=$api->check_driver_status_free($driver_id);
									if($check_driver_status_free=="B" && count($check_new_request_trip) > 0){
										foreach($check_new_request_trip as $cns){
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											//$get_request_dets=$api->check_new_request_tripid("","",$cns['trip_id'],$driver_id,$company_all_currenttimestamp,"");
											$api->change_driver_reqflow($cns['trip_id'],$cns['available_drivers'],$cns['rejected_timeout_drivers']);
										}
									} 
								}
								else
								{
									$msg = ["message" => __('validation_error'),"detail"=>"","status"=>-3];
								}
							}
							else
							{
								$errors = $history_validator->errors('errors');	
								$msg = ["message" => __('validation_error'),"detail"=>$errors,"status"=>-3];	
								//echo json_encode($msg);
							}
						} else {
							if($logout_notification==1 && $logout_status=="N" && $admin_logout_status == 0){
								$msg = ["message" => __('driver_logout_via_admin'),"status"=>15,"display"=>1];
								$update_notification_status  = ["notification_status"=>'0'];
								$api->update_table(PEOPLE,$update_notification_status,'id',$location_array['driver_id']);
							}else if($logout_notification==1 && $logout_status=="N" && $admin_logout_status == '1'){
								$msg = ["message" => __('driver_assigned_expired'),"status"=>15,"display"=>1];
								$update_notification_status  = ["notification_status"=>'0'];
								$api->update_table(PEOPLE,$update_notification_status,'id',$location_array['driver_id']);
							}else{
								$msg = ["message" => __('driver_not_login'),"status"=>15,"display"=>0];
							}
						}
					}
					else
					{
						$msg = ["message" => __('invalid_request'),"status"=>-4];
					}
					
					echo json_encode($msg);
					unset(Database::$instances['default']);
					break;	
					
			//Passenger Signup with Referral code concept
			/*Url : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_signup_single
			 * Params : {"first_name":"Pandiarajan","last_name":"V","email":"pandiarajan.v@ndot.in","phone":"8124783922","password":"qwerty","confirm_password":"qwerty","deviceid":"","devicetoken":"sdsd333","devicetype":"1","referral_code":""}
			 * Method: POST
			 * */
			case 'passenger_signup_single':
			   $p_first_name = (isset($mobiledata['first_name'])) ? $mobiledata['first_name'] : '';
			   $p_last_name = (isset($mobiledata['last_name'])) ? $mobiledata['last_name'] : '';
			   $p_email = (isset($mobiledata['email'])) ? $mobiledata['email'] : '';
			   $p_phone = (isset($mobiledata['phone'])) ? $mobiledata['phone'] : '';
			   $country_code = (isset($mobiledata['country_code'])) ? $mobiledata['country_code'] : '';
			   $p_password = (isset($mobiledata['password'])) ? $mobiledata['password'] : '';
			   $p_confirm_password = (isset($mobiledata['confirm_password'])) ? $mobiledata['confirm_password'] : '';
			   $devicetoken = (isset($mobiledata['devicetoken'])) ? $mobiledata['devicetoken'] : '';
			   $device_id = (isset($mobiledata['deviceid'])) ? $mobiledata['deviceid'] : '';
			   $devicetype = (isset($mobiledata['devicetype'])) ? $mobiledata['devicetype'] : '';	
			   $accessToken = (isset($mobiledata['accesstoken'])) ? $mobiledata['accesstoken'] : '';
			   $uid = (isset($mobiledata['userid'])) ? $mobiledata['userid'] : '';				   
			   $referral_code = (isset($mobiledata['referral_code'])) ? $mobiledata['referral_code'] : '';					   
			   
			   $p_acc_validator = $this->pasenger_signup_validation($mobiledata);
			   if($p_acc_validator->check())
			   {
				   $email_exist = $api->check_email_passengers($p_email,$default_companyid);
				   $phone_exist = $api->check_phone_passengers($p_phone,$default_companyid,$country_code);
				   $referralcode_exist = $api->check_referral_code_exist($referral_code,$default_companyid);
				   
				   if($email_exist > 0)
					{
						$message = ["message" => __('email_exists'),"status"=> 2];
						echo json_encode($message);
					}
					else if($phone_exist > 0)
					{
						$message = ["message" => __('phone_exists'),"status"=> 3];
						echo json_encode($message);
					}
					else if(!empty($referral_code) && $referralcode_exist == 0)
					{
						$message = ["message" => __('referral_code_not_exists'),"status"=> 5];
						echo json_encode($message);
					}
					else
					{
						$image_name = '';
						if($uid != '') {
							//to get profile image from facebook and store it passenger
							$thumb_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."");
							$thumb_image_name =  'thumb_'.$uid.'.jpg';
							$thumb_image_path = DOCROOT.PASS_IMG_IMGPATH.$thumb_image_name; 
							@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
							@chmod($thumb_image_path,0777);
							file_put_contents($thumb_image_path, $thumb_image);

							$edit_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."");
							$edit_image_name =  'edit_'.$uid.'.jpg';
							$edit_image_path = DOCROOT.PASS_IMG_IMGPATH.$edit_image_name; 
							@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
							@chmod($edit_image_path,0777);
							file_put_contents($edit_image_path, $edit_image);

							/** Big Image **/
							$big_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_IMG_WIDTH."&height=".PASS_IMG_HEIGHT."");
							$image_name =  $uid.'.jpg';
							$big_image_path = DOCROOT.PASS_IMG_IMGPATH.$image_name; 
							@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
							@chmod($big_image_path,0777);
							file_put_contents($big_image_path, $big_image);


							$base_image = imagecreatefromjpeg($edit_image_path);
							$width = 100;
							$height = 19;
							$top_image = imagecreatefrompng(URL_BASE."public/images/edit.png");
							$merged_image = DOCROOT.PASS_IMG_IMGPATH.'edit_'.$uid.'.jpg';
							imagesavealpha($top_image, true);
							imagealphablending($top_image, true);
							imagecopy($base_image, $top_image, 0, 83, 0, 0, $width, $height);
							imagejpeg($base_image, $merged_image);
						}
						/******/						
						$otp = text::random($type = 'numeric', $length = 4);
						//$otp = '';
						$acc_details_result=$api->passenger_signup_with_referral($mobiledata,$otp,$referral_code,$devicetoken,$device_id,$devicetype,$default_companyid,$accessToken,$uid,$image_name);							
						if($acc_details_result == 1) 
						{ 
							$mail="";					
							$replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
							//$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
							if($this->lang!='en')
							{				
								if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/otp-'.$this->lang.'.html'))
								{
									$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/otp-'.$this->lang.'.html',$replace_variables);
								}else
								{
									$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
								}
							}
							else
							{
								$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
							}
							/*$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$p_first_name,REPLACE_MOBILE=>$p_phone,REPLACE_PASSWORD=>$p_password,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COPYRIGHTS=>COMPANY_COPYRIGHT);
							$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'passenger-register.html',$replace_variables);*/

							$to = $p_email;
							$from = $this->siteemail;
							//$subject = __('passenger_registration_confirmation')." - ".$this->app_name;	
							$subject = __('otp_subject')." - ".$this->app_name;
							$redirect = "no";	
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

							//free sms url with the arguments
							if(SMS == 1)
							{
							/*$message_details = $this->commonmodel->sms_message_by_title('passenger_signup_success');
							$to = $p_phone;
							$message = $message_details['sms_description'];
							//$message = str_replace("##OTP##",$otp,$message);
							$message = str_replace("##PHONE##",$p_phone,$message);
							$message = str_replace("##PASSWORD##",$p_password,$message);
							$message = str_replace("##SITE_NAME##",SITE_NAME,$message);*/
							//$api->send_sms($to,$message);
							$message_details = $this->commonmodel->sms_message_by_title('otp');
							$to = $p_phone;
							$message = $message_details['sms_description'];
							$message = str_replace("##OTP##",$otp,$message);
							$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
							$api->send_sms($to,$message);
							//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
							} 
							$detail = ["email"=>$p_email,"phone"=>$p_phone,"skip_credit"=>SKIP_CREDIT_CARD];
							$message = ["message" =>__('account_save_otp'),"detail"=>$detail,"status"=> 1];
						}
						else
						{
							$message = ["message" => __('try_again'),"status"=> 4];
						}	
					 echo json_encode($message);        	
					}							    					    
			   }
			   else
			   {
					$errors = $p_acc_validator->errors('errors');	
					$result = ["message"=>$errors,"status"=>-1];
					echo json_encode($result);
					exit;					
				}											
				break;	
			/** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=otp_verify
			 * Params :- {"otp":"169105","email":"pandiarajan.v@ndot.in"}
			 *  **/	
			case 'otp_verify':
				$otp = isset($mobiledata['otp']) ? $mobiledata['otp'] : '';
				$email = isset($mobiledata['email']) ? $mobiledata['email'] : '';
				if(!empty($otp)) {
					$otp_verification = $api->otp_verification($otp,$email);
					if($otp_verification > 0) {
						$update_passenger_array  = ["user_status" => "A"]; // activate user if the otp is valid
						$result = $api->update_table(PASSENGERS,$update_passenger_array,'email',$email);
						$detail = ["email"=>$email,"skip_credit"=>SKIP_CREDIT_CARD];
						$msg = ["message" =>__('signup_success'),"detail"=>$detail,"status"=>1];
					} else {
						$msg = ["message" => __('invalid_otp'),"status"=>-2];
					}
				} else {
					$msg = ["message" => __('invalid_request'),"status"=>-1];
				}
				echo json_encode($msg);
				exit; 
			break;
			/** Url : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_wallet
			 * Params : {"passenger_id":"1638"}
			 *  **/	
			case 'passenger_wallet':
				$passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
				if(!empty($passenger_id)) {
					$passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
					$siteInfo = $api->siteinfo_details();
					$amount_details = ["wallet_amount1"=>$siteInfo[0]['wallet_amount1'],"wallet_amount2"=>$siteInfo[0]['wallet_amount2'],"wallet_amount3"=>$siteInfo[0]['wallet_amount3'],"wallet_amount_range"=>$siteInfo[0]['wallet_amount_range']];
					if(count($passenger_wallet) > 0) {
						$msg = ["wallet_amount" => $passenger_wallet[0]['wallet_amount'],"amount_details"=>$amount_details,"status"=>1];
					} else {
						$msg = ["message" => __('invalid_user'),"status"=>-2];
					}
				} else {
					$msg = ["message" => __('invalid_request'),"status"=>-1];
				}
				echo json_encode($msg);
				exit;
			break;
			/** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=wallet_addmoney
			 *  Params : {"passenger_id":"1633","creditcard_no":"5555555555554444","creditcard_cvv":"222","expmonth":"11","expyear":"2021","money":"150","cardholder_name":"Pandiarajan","payment_type":"2","savecard":"0"}
			 *  **/
			case 'wallet_addmoney':
				$passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
				$money = isset($mobiledata['money']) ? $mobiledata['money'] : '';
				$promo_code = isset($mobiledata['promo_code']) ? $mobiledata['promo_code'] : '';
				$p_validator = $this->wallet_addmoney_validation($mobiledata);
				$promocodeAmount = 0;
			   if($p_validator->check())
			   {
				   if($promo_code != "")
					{
						$promodiscount = $api->getpromodetails($promo_code,$passenger_id);
						$promocodeAmount = ($promodiscount/100) * $money;
						$mobiledata['money'] = $money + $promocodeAmount;
					}
					
					$passenger_wallet = $this->wallet_addmoney($mobiledata,$default_companyid,$promo_code,$promocodeAmount);
					$cancelFare = $api->get_passenger_cancel_farebyid($passenger_id);
					$wallAmount = 0;
					if($passenger_wallet != 0) {
						$passwallArr = explode("#",$passenger_wallet);
						$wallAmount = isset($passwallArr[1]) ? $passwallArr[1] : 0;
						$passenger_wallet = $passwallArr[0];
					}
					
					$credit_card_sts = ($wallAmount >= $cancelFare) ? 0 : SKIP_CREDIT_CARD;
					
					if($passenger_wallet == 1) {
						$msg = ["message" => __('amount_added_wallet'), "credit_card_status" => $credit_card_sts,"status"=>1];
					} 
					else if($passenger_wallet == 0)
					{
						$gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0'])?$_SESSION['paymentresponse']['L_LONGMESSAGE0']:'Payment Failed';
						$msg = ["message" => $gateway_response, "gateway_response" =>$gateway_response,"status"=>0];		
					} else {
						$msg = ["message" => __('no_payment_gateway'),"status"=>-1];
					}
				} else {
					//$msg = array("message" => __('invalid_request'),"status"=>-1);
					$errors = $p_validator->errors('errors');	
					$msg = ["message" => __('validation_error'),"detail"=>$errors,"status"=>-1];
				}
				echo json_encode($msg);
				exit;
			break;
			
			case 'invite_with_referral':
				$passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
				if(!empty($passenger_id)) {
					$passengerReferral = $api->get_passenger_wallet_amount($passenger_id);
					if(count($passengerReferral) > 0) {
						$detail = ["referral_code" => $passengerReferral[0]['referral_code'],"referral_amount" => $passengerReferral[0]['referral_code_amount']];
						$msg = ["message" => __('referral_amount'),"detail" => $detail,"status"=>1];
					} else {
						$msg = ["message" => __('invalid_user'),"status"=>-2];
					}
				} else {
					$msg = ["message" => __('invalid_request'),"status"=>-1];
				}
				echo json_encode($msg);
			break;
			
			//api to check valid promocode
			case 'check_valid_promocode':
				$passenger_id = isset($mobiledata['passenger_id']) ? $mobiledata['passenger_id'] : '';
				$promo_code = isset($mobiledata['promo_code']) ? $mobiledata['promo_code'] : '';
				if(!empty($passenger_id) && !empty($promo_code)) {
					$check_promo = $api->checkwalletpromocode($promo_code,$passenger_id,$default_companyid);
						//echo $check_promo;
						//exit;
						if($check_promo == 0)
						{
							$msg = ["message" => __('invalid_promocode_wallet'),"status" => 3];
						}
						else if($check_promo == 3)
						{
							$msg = ["message" => __('promo_code_startdate'),"status" => 3];
						}
						else if($check_promo == 4)
						{
							$msg = ["message" => __('promo_code_expired'),"status" => 3];
						}
						else if($check_promo == 2)
						{
							$msg = ["message" => __('promo_code_limit_exceed'),"status" => 3];
						}
						else
						{
							$msg = ["message" => __('promocode_valid'),"status" => 1];
						}
				} else {
					$msg = ["message" => __('invalid_request'),"status"=>-1];
				}
				echo json_encode($msg);
				exit;
			break;
													
			//URL : http://192.168.1.88:1009/api/index/?type=passenger_account_details&email=prabhu.r@ndot.in&phone=8888888885&password=123456&deviceid=&devicetoken=&devicetype=
			case 'passenger_account_details':
				  //$datas = file_get_contents('php://input');
				  //$data =  (array)json_decode($datas,true);
				   //print_r($mobiledata);
				   //exit;
				   $p_email = $mobiledata['email'];
				   $p_phone = $mobiledata['phone'];
				   $p_password = $mobiledata['password'];
				   $devicetoken = $mobiledata['devicetoken'];
				   $device_id = "";//$mobiledata['deviceid'];
				   $devicetype = $mobiledata['devicetype'];					   
				   
				   $p_acc_validator = $this->account_validation($mobiledata);
				   if($p_acc_validator->check())
				   {
					   $email_exist = $api->check_email_passengers($p_email,$default_companyid);
					   $phone_exist = $api->check_phone_passengers($p_phone,$default_companyid);
					   if($email_exist > 0)
						{
							$message = ["message" => __('email_exists'),"status"=> 2];
							echo json_encode($message);
						}
						else if($phone_exist > 0)
						{
							$message = ["message" => __('phone_exists'),"status"=> 3];
							echo json_encode($message);
						}
						else
						{							
							$otp = text::random($type = 'alnum', $length = 5);
							$referral_code = text::random($type = 'alnum', $length = 6);
							$acc_details_result=$api->add_p_account_details($mobiledata,$otp,$referral_code,$devicetoken,$device_id,$devicetype,$default_companyid);							
							if($acc_details_result == 1) 
							{ 
							/*	$mail="";						
								$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE);
								$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);

							$to = $p_email;
							$from = $this->siteemail;
							$subject = __('otp_subject')." - ".$this->app_name;	
							$redirect = "no";	
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
							}*/

							//free sms url with the arguments
							if(SMS == 1)
							{
							$message_details = $this->commonmodel->sms_message_by_title('otp');
							$to = $p_phone;
							$message = $message_details['sms_description'];
							$message = str_replace("##OTP##",$otp,$message);
							$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
							$api->send_sms($to,$message);
							//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
							} 
							$detail = ["email"=>$p_email,"skip_credit"=>SKIP_CREDIT_CARD];
							$message = ["message" =>__('account_saved'),"detail"=>$detail,"status"=> 1];
							}
							else
							{
								$message = ["message" => __('try_again'),"status"=> 4];
							}	
						 echo json_encode($message);        	
						}							    					    
				   }
				   else
				   {
						$errors = $p_acc_validator->errors('errors');	
						$result = ["message"=>$errors,"status"=>-1];
						echo json_encode($result);
						exit;					
					}											
					break;			
				   //URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=resend_otp&email=senthilcse2008@gmail.com&user_type=P
				   case 'resend_otp':	
				   $otp_array = $mobiledata;
				   $email = $mobiledata['email'];	
				   $user_type = $otp_array['user_type'];
				   if(isset($email))
				   {				
							$otp = text::random($type = 'numeric', $length = 4);
							$otp_result=$api->update_otp($otp_array,$otp,$default_companyid);							
							if($otp_result == 1) 
							{ 
								$mail="";						
								$replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
								
			/* Added for language email template */
			if($this->lang!='en')
			{				
				if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/otp-'.$this->lang.'.html'))
				{
					$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/otp-'.$this->lang.'.html',$replace_variables);
				}else
				{
					$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
				}
			}
			else
			{
				$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);
			}
			/* Added for language email template */

							$to = $email;
							$from = $this->siteemail;
							if($user_type == 'D')
							{
								$subject = __('otp_driver_subject')." - ".$this->app_name;	
							}
							else
							{
								$subject = __('otp_subject')." - ".$this->app_name;	
							}
							$redirect = "no";	
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

							//free sms url with the arguments
							if(SMS == 1)
							{							
							if($otp_array['user_type']=='P')
							{
								$this->phone=$this->commonmodel->select_site_settings('phone',PASSENGERS);
							}
							else
							{
								$this->phone=$this->commonmodel->select_site_settings('phone',PEOPLE);
							}
							$message_details = $this->commonmodel->sms_message_by_title('otp');
							$to = $this->phone;
							$message = $message_details['sms_description'];
							$message = str_replace("##OTP##",$otp,$message);
							$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
							$api->send_sms($to,$message);
							//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");

							}
							$detail = ["email"=>$email];
								$message = ["message" => __('resend_otp'),"detail"=>$detail,"status"=> 1];
							}
							else
							{
								$message = ["message" => __('try_again'),"status"=> 4];
							}	
						 echo json_encode($message);   
						 exit;     						    
				   }
				   else
				   {
						$result = ["message"=>__('invalid_email'),"status"=>-1];
						echo json_encode($result);
						exit;									  
				   }   		
				   break;
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_personal_details&email=sakthivel.s.m@ndot.in&otp=mwS0Q&salutation=Mr&referral_code=jNs7q&firstname=senthil&lastname=kumar&profile_image=
			case 'passenger_personal_details':
					$p_personal_array= $mobiledata;										
					$referred_passenger_id="";
					//print_r($p_personal_array);
					//exit;
					if(isset($p_personal_array['email']))
					{
						$validator = $this->passenger_profile_validation($p_personal_array);						
						if($validator->check())
						{
							$referral_code = $p_personal_array['referral_code'];
							/*$validate_otp = $api->check_otp($p_personal_array['otp'],$p_personal_array['email'],'P',$default_companyid);
							//check_otp_expire
							if($validate_otp == 1)
							{
								$check_otp_expiry = $api->check_otp_expire($p_personal_array['otp'],$p_personal_array['email'],'P',$default_companyid);
								if(TIMEZONE)
								{
									$current_time = convert_timezone('now',TIMEZONE);
									$current_date = explode(' ',$current_time);
									$start_time = $current_date[0].' 00:00:01';
									$end_time = $current_date[0].' 23:59:59';
									$date = $current_date[0].' %';
								}
								else
								{
									$current_time =	date('Y-m-d H:i:s');
									$start_time = date('Y-m-d').' 00:00:01';
									$end_time = date('Y-m-d').' 23:59:59';
									$date = date('Y-m-d %');
								}								
								//print_r($check_otp_expiry);
								//$current_time =	date('Y-m-d H:i:s');
								$updated_date = $check_otp_expiry[0]['updated_date'];
								$otp_expiry = $check_otp_expiry[0]['otp_expiry'];
								if($current_time <= $otp_expiry)
								{		*/				
									if($referral_code != "")
									{					
										$validate_referral_code = $api->check_referral_code($referral_code);						
										//echo count($validate_referral_code);
										if(is_array($validate_referral_code))
										{
											$referred_passenger_id = $validate_referral_code[0]['id'];
										}		
										else
										{
											//$referred_passenger_id = '';
											$message = ["message" => __('invalid_referral_code'),"status"=> 3];
											echo json_encode($message);
											exit;
										}		
									}																			
								if($p_personal_array['profile_image'] != NULL)
								{
								/* Profile Update */
								$imgdata = base64_decode($p_personal_array['profile_image']);
								$f = finfo_open();
								$mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
								$mime_type = explode('/',$mime_type);
								$mime_type = $mime_type[1];
								//echo $imgdata;exit;
								$img = imagecreatefromstring($imgdata); 

								if($img != false)
								{                   
									$image_name = uniqid().'.'.$mime_type;
									$thumb_image_name = 'thumb_'.$image_name;
									$image_url = DOCROOT.PASS_IMG_IMGPATH.'/'.$image_name;                    								
									//header('Content-Type: image/jpeg');					
									$image_path = DOCROOT.PASS_IMG_IMGPATH.$image_name;  
									imagejpeg($img,$image_url);
									imagedestroy($img);
									chmod($image_path,0777);
									$d_image = Image::factory($image_path);
									$path11=DOCROOT.PASS_IMG_IMGPATH;
									//Commonfunction::imageresize($d_image,PASS_IMG_WIDTH, PASS_IMG_HEIGHT,$path11,$image_name,90);								
									Commonfunction::imageoriginalsize($d_image,$path11,$image_name,90);
									$path12=$thumb_image_name;
									//Commonfunction::imageresize($d_image,PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT,$path11,$thumb_image_name,90);
									Commonfunction::imageoriginalsize($d_image,$path11,$thumb_image_name,90);
									$update_array = [								
									"salutation"=>$p_personal_array['salutation'],
									"name" => $p_personal_array['firstname'],
									"lastname" => $p_personal_array['lastname'],
									"email" => $p_personal_array['email'],
									"profile_image" => $image_name,
									"user_status"=>'A',
									"activation_status"=>1];
									$message = $api->save_passenger_personaldata($update_array,$referred_passenger_id,$default_companyid);
								//chmod($image_path, 0777);                    
								}
								else
								{
									$message = ["message" => __('image_not_upload'),"status"=>4];								
								}
								
							}
							else
							{
									$update_array = [
									"salutation"=>$p_personal_array['salutation'],
									"name" => $p_personal_array['firstname'],
									"lastname" => $p_personal_array['lastname'],
									"email" => $p_personal_array['email'],
									"user_status"=>'A',
									"activation_status"=>1];
									$message = $api->save_passenger_personaldata($update_array,$referred_passenger_id,$default_companyid);
							}
								/*****************************************/												
								if($message == 0)
								{
									$passenger_details = $api->passenger_detailsbyemail($p_personal_array['email'],$default_companyid);
											$id="";
											if(count($passenger_details) >0)
											{
												$id = $passenger_details[0]['id'];
												$email =  $passenger_details[0]['email'];
											}
											$detail = ["passenger_id"=>$id,"skip_credit"=>SKIP_CREDIT_CARD];
											$message = ["message" => __('personal_updated'),"detail"=>$detail,"status"=>1];	
								}	
								if($message == -1)
								{
									$message = ["message" => __('try_again'),"status"=>-1];	
								}	
						/*	}
							else
							{
								$message = array("message" => __('otp_expire'),"status"=>-7);
							}
							}
							else
							{
								$message = array("message" => __('invalid_otp'),"status"=>-5);
							}*/
						}
						else
						{							
							$validation_error = $validator->errors('errors');	
							$message = ["message" => $validation_error,"status"=>-3];		
						}
					}
					else
					{
						$message = ["message" => __('invalid_email'),"status"=>-4];	
					}
					
					echo json_encode($message);
					break;			
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_card_details&email=sakthivel.s.m@ndot.in&creditcard_no=4111111111111111&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&savecard=1&default=
			case 'passenger_card_details':
			$p_card_array= $mobiledata;			
			$savecard = $p_card_array['savecard'];
			$email = $p_card_array['email'];
			$config_array = $api->select_site_settings($default_companyid);
			if($savecard == 1)
			{
				$card_validation = $this->passenger_card_validation($p_card_array);			
				if($card_validation->check())
				{
					$creditcard_no = $p_card_array['creditcard_no'];
					$card_holder_name = (isset($p_card_array['card_holder_name'])) ? $p_card_array['card_holder_name'] : '';
					//isVAlidCreditCard($ccnum,"",true);
					$authorize_status =$api->isVAlidCreditCard($creditcard_no,"",true);
					//print_r($authorize_status);
					//exit;
					if($authorize_status == 0)
					{
						$message = ["message" => __('invalid_card'),"status"=> 2];
						echo json_encode($message);
						exit;
					}
					$result = $api->save_passenger_carddata($p_card_array,$default_companyid);		
					if($result == 0)
					{
					$passenger_details = $api->passenger_detailsbyemail($email,$default_companyid);
									$total_array = [];
									if(count($result) > 0)
									{
										if((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image'])){ 
										$profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image']; 
										}
										else{ 
										$profile_image = URL_BASE."public/images/no_image109.png";
										} 										
										$passenger_id= $passenger_details[0]['id'];
										$total_array['id'] = $passenger_details[0]['id'];
										$total_array['salutation'] = $passenger_details[0]['salutation'];
										$total_array['name'] = $passenger_details[0]['name'];
										$total_array['lastname'] = $passenger_details[0]['lastname'];
										$total_array['email'] = $passenger_details[0]['email'];
										$total_array['profile_image'] = $profile_image;
										$total_array['country_code'] = $passenger_details[0]['country_code'];
										$total_array['phone'] = $passenger_details[0]['phone'];
										$total_array['address'] = $passenger_details[0]['address'];
										$referral_code = $passenger_details[0]['referral_code'];
										$total_array['referral_code'] = $referral_code;
										$total_array['referral_code_amount'] = $passenger_details[0]['referral_code_amount'];
										$ref_message = TELL_TO_FRIEND_MESSAGE.''.$referral_code;
										$ref_discount = REFERRAL_DISCOUNT;
										$telltofriend_message = TELL_TO_FRIEND_MESSAGE;
										//Newly Added-13.11.2014
										$total_array['site_currency'] = $config_array[0]['site_currency'];
										$total_array['aboutpage_description'] = $this->app_description;
										$total_array['tell_to_friend_subject'] = __('telltofrien_subject');
										$total_array['skip_credit'] = SKIP_CREDIT_CARD;
										$total_array['metric'] = UNIT_NAME;
										//variable to know whether the passenger have credit card details
										$total_array['credit_card_status'] = 1;
										//str_replace("#REFDIS#",$ref_discount,$ref_message); 
										/***Get Company car model details start***/
											$company_model_details = $api->company_model_details($default_companyid);
											if(count($company_model_details)>0){
												$total_array['model_details']=$company_model_details;
											}else{
												$total_array['model_details']="model details not found";
											}
										/***Get Company car model details end***/										
										$total_array['telltofriend_message'] = $telltofriend_message;	
										}				
										
									//free sms url with the arguments
										if(SMS == 1)
										{
											$message_details = $this->commonmodel->sms_message_by_title('account_create_sms');
											$to = isset($total_array['phone'])? $total_array['country_code'].$total_array['phone']:'';
											//$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
											$p_password ="";
											$message = $message_details['sms_description'];
											$message = str_replace("##USERNAME##",$email,$message);
											$message = str_replace("##PASSWORD##",$p_password,$message);
											$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
											$api->send_sms($to,$message);
											//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
											
										}
			$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
			$mobile_no = isset( $passenger_details[0]['phone'])? $passenger_details[0]['country_code'].$passenger_details[0]['phone']:'';
			$username = isset( $passenger_details[0]['name'])? $passenger_details[0]['name']:'';
			$replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$username,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_MOBILE=>$mobile_no,REPLACE_PASSWORD=>$p_password,REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
								
				//$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
				/* Added for language email template */
				if($this->lang!='en')
				{				
					if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/driver-register-'.$this->lang.'.html'))
					{
						$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/driver-register-'.$this->lang.'.html',$replace_variables);
					}else
					{
						$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
					}
				}
				else
				{
					$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
				}
				/* Added for language email template */
							$to = $email;
							$from = $this->siteemail;
								$subject = __('pass_account_details')." - ".$this->app_name;	
							$redirect = "no";	
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
					/*** Update Pssenger password as empty ************/
					$update_passenger_array  = ["org_password" => ""]; // 
					$result = $api->update_table(PASSENGERS,$update_passenger_array,'id',$passenger_id);
					/***************************************************/
					
					$message = ["message" => __('signup_success'),"detail"=>$total_array,"status"=>1];		
					}
					elseif($result == 2)
					{
						$message = ["message" => __('you_have_detail'),"status"=>3];
					}
					else
					{
					$message = ["message" => __('try_again'),"status"=>1];	
					}
				
				}
				else
				{							
					$validation_error = $card_validation->errors('errors');	
					$message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-3];		
				}
			}
			else
			{
					$update_cred_sts  = ["skip_credit_card" => '1'];
					$update_current_result = $api->update_table(PASSENGERS,$update_cred_sts,'email',$email);
					$passenger_details = $api->passenger_detailsbyemail($email,$default_companyid);
									$total_array = [];
									if(count($passenger_details) > 0)
									{
										if((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image'])){ 
										$profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image']; 
										}
										else{ 
										$profile_image = URL_BASE."public/images/no_image109.png";
										} 								
										$passenger_id = $passenger_details[0]['id'];
										$total_array['id'] = $passenger_details[0]['id'];
										$total_array['salutation'] = $passenger_details[0]['salutation'];
										$total_array['name'] = $passenger_details[0]['name'];
										$total_array['lastname'] = $passenger_details[0]['lastname'];
										$total_array['email'] = $passenger_details[0]['email'];
										$total_array['profile_image'] = $profile_image;
										$total_array['phone'] = $passenger_details[0]['phone'];
										$total_array['address'] = $passenger_details[0]['address'];
										$referral_code = $passenger_details[0]['referral_code'];
										$total_array['referral_code'] = $referral_code;
										$total_array['referral_code_amount'] = $passenger_details[0]['referral_code_amount'];
										$ref_message = TELL_TO_FRIEND_MESSAGE.''.$referral_code;
										$ref_discount = REFERRAL_DISCOUNT;
										$telltofriend_message = TELL_TO_FRIEND_MESSAGE;//str_replace("#REFDIS#",$ref_discount,$ref_message); 
										//Newly Added-13.11.2014
										$total_array['site_currency'] = $config_array[0]['site_currency'];
										$total_array['facebook_share'] = $config_array[0]['facebook_share'];
										$total_array['twitter_share'] = $config_array[0]['twitter_share'];
										$total_array['aboutpage_description'] = $this->app_description;
										$total_array['tell_to_friend_subject'] = __('telltofrien_subject');
										$total_array['skip_credit'] = SKIP_CREDIT_CARD;
										$total_array['metric'] = UNIT_NAME;
										$total_array['credit_card_status'] = 0;
										/***Get Company car model details start***/
											$company_model_details = $api->company_model_details($default_companyid);
											if(count($company_model_details)>0){
												$total_array['model_details']=$company_model_details;
											}else{
												$total_array['model_details']="model details not found";
											}
										/***Get Company car model details end***/										
										$total_array['telltofriend_message'] = $telltofriend_message;	
									}						

										if(SMS == 1)
										{
											$message_details = $this->commonmodel->sms_message_by_title('account_create_sms');
											$to = isset($total_array['phone'])?$total_array['phone']:'';
											//$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
											$p_password ="";
											$message = $message_details['sms_description'];
											$message = str_replace("##USERNAME##",$email,$message);
											$message = str_replace("##PASSWORD##",$p_password,$message);
											$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
											$api->send_sms($to,$message);
											//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
											
										}
			$p_password = isset($passenger_details[0]['org_password'])?$passenger_details[0]['org_password']:'';
			$mobile_no = isset( $passenger_details[0]['phone'])? $passenger_details[0]['phone']:'';
			$username = isset( $passenger_details[0]['name'])? $passenger_details[0]['name']:'';
			$replace_variables=[REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$username,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_MOBILE=>$mobile_no,REPLACE_PASSWORD=>$p_password,REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
								
				//$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
				/* Added for language email template */
				if($this->lang!='en')
				{				
					if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/driver-register-'.$this->lang.'.html'))
					{
						$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/driver-register-'.$this->lang.'.html',$replace_variables);
					}else
					{
						$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
					}
				}
				else
				{
					$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver-register.html',$replace_variables);
				}
							$to = $email;
							$from = $this->siteemail;
								$subject = __('pass_account_details')." - ".$this->app_name;	
							$redirect = "no";	
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
					/*** Update Pssenger password as empty ************/
					$update_passenger_array  = ["org_password" => ""]; // 
					$result = $api->update_table(PASSENGERS,$update_passenger_array,'id',$passenger_id);
					/***************************************************/							
				$message = ["message" => __('signup_success'),"detail"=>$total_array,"status"=>1];	
			}
			echo json_encode($message);
			break;
			/** URL : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=passenger_referral_code
			 * Params : {"email":"pandiarajan.v@ndot.in","referral_code":"EMJIOL"}
			 *  **/
			case 'passenger_referral_code':
				$referral_code = (isset($mobiledata['referral_code'])) ? $mobiledata['referral_code'] : '';
				$email = (isset($mobiledata['email'])) ? $mobiledata['email'] : '';
				if(!empty($referral_code)) {
					$referralcode_exist = $api->check_referral_code_exist($referral_code,$default_companyid);
					if($referralcode_exist > 0) {
						$passenger_details = $api->passenger_detailsbyemail($email,$default_companyid);
						if(count($passenger_details) > 0) {
							$referral_used = $api->check_referral_code_used($passenger_details[0]['id']);
							if($referral_used == 0) {
								$save_referral = $api->save_referral_code($passenger_details[0]['id'],$referral_code,$default_companyid,$passenger_details[0]['device_id'],$passenger_details[0]['device_token']);
								if($save_referral == 1) {
									$message = ["message" => __('referral_code_save_successful'),"status"=> 1];
								} else {
									$message = ["message" => __('try_again'),"status"=>-1];	
								}
							} else {
								$message = ["message" => __('referral_code_already_used'),"status"=> 4];
							}
						} else {
							$message = ["message" => __('invalid_user'),"status"=>-1];
						}
					} else {
						$message = ["message" => __('referral_code_not_exists'),"status"=> -1];
					}
				} else {
					$message = ["message" => __('referral_code_not_empty'),"status"=> -1];
				}
				echo json_encode($message);
			break;
			
			//URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=passenger_fb_connect&accesstoken=sdfdssdsfdsfasdfassfasfsdfsdf&userid=100000222346359&fname=senthil&lname=kumar&fbemail=janani.senthilcse@gmail.com&devicetoken=e10adc3949ba59abbe56e057f20f883e&deviceid=SDfsdf454&devicetype=1
			case 'passenger_fb_connect':
					$array = $mobiledata;
					$accessToken = $array['accesstoken'];
					$uid = $array['userid'];
					$fname = $array['fname'];
					$lname = $array['lname'];
					$email = $array['fbemail'];
					$devicetoken = $array['devicetoken'];
					$device_id = $array['deviceid'];
					$devicetype = $array['devicetype'];
										
								/*$profile_data_url = "https://graph.facebook.com/me?access_token=".$accessToken;
								$Profile_data = json_decode($this->curl_function($profile_data_url));
								if(isset($Profile_data->error))
								{
									$message = array("message" => 'Problem on Facebook Connect.Please Try Again',"status"=>-1);
								}
								else{*/
								/** Thumb Image ****/
//echo "http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."";
								$thumb_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."");
								$thumb_image_name =  'thumb_'.$uid.'.jpg';
								$thumb_image_path = DOCROOT.PASS_IMG_IMGPATH.$thumb_image_name; 
								@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
								@chmod($thumb_image_path,0777);
								file_put_contents($thumb_image_path, $thumb_image);

								$edit_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_THUMBIMG_WIDTH1."&height=".PASS_THUMBIMG_HEIGHT1."");
								$edit_image_name =  'edit_'.$uid.'.jpg';
								$edit_image_path = DOCROOT.PASS_IMG_IMGPATH.$edit_image_name; 
								@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
								@chmod($edit_image_path,0777);
								file_put_contents($edit_image_path, $edit_image);

								/** Big Image **/
								$big_image = file_get_contents("http://graph.facebook.com/".$uid."/picture?width=".PASS_IMG_WIDTH."&height=".PASS_IMG_HEIGHT."");
								$image_name =  $uid.'.jpg';
								$big_image_path = DOCROOT.PASS_IMG_IMGPATH.$image_name; 
								@chmod(DOCROOT.PASS_IMG_IMGPATH,0777);
								@chmod($big_image_path,0777);
								file_put_contents($big_image_path, $big_image);


								$base_image = imagecreatefromjpeg($edit_image_path);
								$width = 100;
								$height = 19;
								$top_image = imagecreatefrompng(URL_BASE."public/images/edit.png");
								$merged_image = DOCROOT.PASS_IMG_IMGPATH.'edit_'.$uid.'.jpg';
								imagesavealpha($top_image, true);
								imagealphablending($top_image, true);
								imagecopy($base_image, $top_image, 0, 83, 0, 0, $width, $height);
								imagejpeg($base_image, $merged_image);

								/*************************/	
								//print_r($Profile_data); exit;
								$otp = text::random($type = 'alnum', $length = 5);
								$referral_code = text::random($type = 'alnum', $length = 6);
								$status = $api->register_facebook_user($accessToken,$uid,$otp,$referral_code,$fname,$lname,$email,$image_name,$devicetoken,$device_id,$devicetype,$default_companyid);
								//echo $status;exit;
								$passenger_details = $api->passenger_detailsbyemail($email,$default_companyid);	
								
								if((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image'])){ 
									$profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image']; 
								 }
								else{ 
									$profile_image = URL_BASE."public/uploads/no_image109.png";
								 } 

								$passenger_details[0]['profile_image'] = $profile_image;
								$config_array = $api->select_site_settings($default_companyid);

									//print_r($config_array);exit;
								//echo 'as'.$status;exit;								
									$total_array = [];
									$result = $passenger_details;
									$fbemail = '';
									$skip_credit_card = 2;
									if(count($result) > 0)
									{
										$total_array['id'] = $result[0]['id'];
										$total_array['name'] = $result[0]['name'];
										$total_array['email'] = $result[0]['email'];
										$fbemail = $total_array['email'];
										$total_array['profile_image'] = $profile_image;
										$total_array['country_code'] = $result[0]['country_code'];
										$total_array['phone'] = $result[0]['phone'];
										$total_array['address'] = $result[0]['address'];
										$total_array['user_status'] = $result[0]['user_status'];
										$total_array['login_from'] = $result[0]['login_from'];
										$total_array['referral_code'] = $result[0]['referral_code'];
										$total_array['referral_code_amount'] = $result[0]['referral_code_amount'];
										//to check whether the passenger gave
										$skip_credit_card = $result[0]['skip_credit_card'];
										$telltofriend_message = TELL_TO_FRIEND_MESSAGE;//str_replace("#REFDIS#",$ref_discount,$ref_message); 
										$total_array['telltofriend_message'] = $telltofriend_message;
										
										//Newly Added-13.11.2014
										$total_array['site_currency'] = $config_array[0]['site_currency'];
										$total_array['aboutpage_description'] = $this->app_description;
										$total_array['tell_to_friend_subject'] = __('telltofrien_subject');
										$total_array['skip_credit'] = SKIP_CREDIT_CARD;
										$total_array['metric'] = UNIT_NAME;
										//variable to know whether the passenger have credit card
										$check_card_data = $api->check_passenger_card_data($result[0]['id']);
										$credit_card_sts = ($check_card_data == 0) ? 0:1;
										$total_array['credit_card_status'] = $credit_card_sts;
									}
									//print_r($total_array);exit;
									//echo $status;exit('sdfdsf');
							    if($status==1)
								{
									//echo $passenger_details[0]['id'];	
									/***Get Company car model details start***/
											$company_model_details = $api->company_model_details($default_companyid);
											if(count($company_model_details)>0){
												$total_array['model_details']=$company_model_details;
											}else{
												$total_array['model_details']="model details not found";
											}
										/***Get Company car model details end***/
									$message = ["message" => __('succesful_login_flash'),"detail"=>$total_array,"status"=> 1]; //url::redirect(PATH);																
								}
								else if($status==2)
								{	
									$detail = ["email"=>$fbemail];														
									$message = ["message"=>__('account_saved_withoutmobile'),"detail"=>$detail,"status"=>2];					 
									//$message = array("message"=>__('account_saved_withoutmobile'),"status"=>2);					 
								}
								/*else if($status==3)
								{									
									$message = array("message"=>__('p_personal_data_not_filled'),"detail"=>$total_array,"status"=>3);													 
								} */
								else if($status==4 || $status==3)
								{
									if(SKIP_CREDIT_CARD !=1 || $skip_credit_card != 1)
									{
										$message = ["message"=>__('p_card_data_not_filled'),"detail"=>$total_array,"status"=>4];	
									}
									else
									{
										/***Get Company car model details start***/
											$company_model_details = $api->company_model_details($default_companyid);
											if(count($company_model_details)>0){
												$total_array['model_details']=$company_model_details;
											}else{
												$total_array['model_details']="model details not found";
											}
										/***Get Company car model details end***/
										$message = ["message" => __('succesful_login_flash'),"detail"=>$total_array,"status"=> 1];
									}
								}
								else if($status==-2)
								{
									//$message = array("message"=>__('email_exists'),"status"=>-2);		
									$detail = ["email"=>$email];							 
									$message = ["message"=>__('account_not_activated'),"detail"=>$detail,"status"=>-2];													 
								}
								else
								{
									$message = ["message" => __('facebook_error'),"status"=>-1];
								}

					echo json_encode($message);
					break;
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_mobile_otp&fbemail=test@gmail.com&mobile=9789648588&fname=senthil&lname=kumar&otp=HH6tC
			case 'passenger_mobile_otp':

					$array = $mobiledata;
					$email = $array['fbemail'];
					$mobile = $array['mobile'];
					$country_code = isset($array['country_code']) ? $array['country_code'] : '';

					$phone_exist = $api->check_phone_bypassengers($mobile,$email,$default_companyid,$country_code);
					
					if($phone_exist != 0)
					{
						$message = ["message" => __('phone_exists'),"status"=>4];
					}
					else 
					{
						if($email != null && $mobile != null)
						{
							$status = $api->update_passenger_mobile($email,$mobile,'','','','',$default_companyid,$country_code);

							if($status == 1)
							{
								$passenger_details = $api->passenger_detailsbyemail($email,$default_companyid);
								$otp = $passenger_details[0]['otp'];
								$id = $passenger_details[0]['id'];
								/*$mail="";						
										$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE);
										$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'otp.html',$replace_variables);

									$to = $email;
									$from = $this->siteemail;
									$subject = __('otp_subject')." - ".$this->app_name;	
									$redirect = "no";	
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
									}*/
									if(SMS == 1)
									{
										$message_details = $this->commonmodel->sms_message_by_title('otp');
										$to = $passenger_details[0]['phone'];
										$message = $message_details['sms_description'];
										$message = str_replace("##OTP##",$otp,$message);
										$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
										
										$api->send_sms($to,$message);
									}									
									
									$total_array = [];
									if(count($passenger_details) > 0)
									{
										$total_array['id'] = $passenger_details[0]['id'];
										$total_array['name'] = $passenger_details[0]['name'];
										$total_array['email'] = $passenger_details[0]['email'];
										$total_array['phone'] = $passenger_details[0]['phone'];
										$total_array['address'] = $passenger_details[0]['address'];
									}
									$detail = ["passenger_id"=>$id];
									$message = ["message" => __('account_saved'),"detail"=>$total_array,"status"=>1];
							}
							else
							{
								$message = ["message" => __('try_again'),"status"=>2];
							}
						}
						else
						{
							$message = ["message" => __('invalid_user'),"status"=>3];
						}	

					}
					echo json_encode($message);
					break;

			//URL:	//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_login&phone=9999999999&password=123456&deviceid=4&devicetoken=geerge&devicetype=1
			case 'passenger_login':
				$p_login_array = $mobiledata;
				$validator = $this->passenger_login_validation($p_login_array);
					//print_r($p_login_array);exit;
					if($validator->check())
					{ 
					   $phone_exist = $api->check_phone_passengers($p_login_array['phone'],$default_companyid,$p_login_array['country_code']);
					   if($phone_exist == 0)
						{
							$message = ["message" => __('phone_not_exists'),"status"=> 2];
							echo json_encode($message);
							break;
						} //
						else
						{
						$result = $api->passenger_login($p_login_array['phone'],md5($p_login_array['password']),$p_login_array['devicetoken'],$p_login_array['deviceid'],$p_login_array['devicetype'],$default_companyid,$p_login_array['country_code']);
			//echo print_r($result);exit;
						if(count($result) > 0)
						{	
							//Checking the User Status					
							$user_status = $result[0]['user_status'];
							$passenger_email = $result[0]['email'];
							$passenger_id = $result[0]['id'];
							$device_id = $result[0]['device_token'];
							$login_status = $result[0]['login_status'];
							if($user_status == 'D' || $user_status == 'T' )
							{
								$message = ["message" => __('user_blocked'),"status"=> 3];								
							}
							else if($user_status == 'I')
							{
								$detail = ["email"=>$passenger_email,"phone"=>$p_login_array['phone'],"passenger_id"=>$passenger_id];
								//$message = array("message" => __('p_personal_data_not_filled'),"detail"=>$detail,"status"=> -2);								
								$message = ["message" => __('account_not_activated'),"detail"=>$detail,"status"=> -2];								
							}
							else
							{
								$device_token=isset($p_login_array['devicetoken'])?$p_login_array['devicetoken']:'';
								$device_id;
								$update_id = $result[0]['id'];
								
								$check_personal_date = $api->check_passenger_personal_data($update_id);
								$check_card_data = $api->check_passenger_card_data($update_id);
								//variable to know whether the passenger have credit card
								$credit_card_sts = ($check_card_data == 0) ? 0:1;
								if($check_personal_date == 1)
								{ 
									$detail = ["email"=>$passenger_email,"phone"=>$p_login_array['phone'],"passenger_id"=>$passenger_id];
									$message = ["message" => __('p_personal_data_not_filled'),"status"=> -2,"detail"=>$detail];
								}
								//else if(SKIP_CREDIT_CARD !=1 && $check_card_data == 0)
								else if($result[0]['skip_credit_card'] !=1 && $check_card_data == 0)
								{
									$detail = ["email"=>$passenger_email,"phone"=>$p_login_array['phone'],"passenger_id"=>$passenger_id];
									$message = ["message" => __('p_card_data_not_filled'),"status"=> -3,"detail"=>$detail];
								}
								/*else if(($login_status == 'S')  && ($device_id != $device_token))
								{
									$message = array("message" => __('already_login'),"status"=> 0);								
								}*/					
								else//  && ($device_id == $device_token)
								{ 
									if((!empty($result[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'edit_'.$result[0]['profile_image'])){ 
									$edit_image = URL_BASE.PASS_IMG_IMGPATH.'edit_'.$result[0]['profile_image']; 
									}
									else{ 
									$edit_image = URL_BASE."public/images/edit_image.png";
									} 

									$result[0]['edit_image'] = $edit_image;


									if((!empty($result[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$result[0]['profile_image'])){ 
									$profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$result[0]['profile_image']; 
									}
									else{ 
									$profile_image = URL_BASE."public/images/no_image109.png";
									} 
									$config_array = $api->select_site_settings($default_companyid);
									$total_array = [];
									if(count($result) > 0)
									{
										$total_array['id'] = $result[0]['id'];
										$total_array['name'] = $result[0]['name'];
										$total_array['email'] = $result[0]['email'];
										$total_array['profile_image'] = $profile_image;
										$total_array['country_code'] = $result[0]['country_code'];
										$total_array['phone'] = $result[0]['phone'];
										$total_array['login_from'] = $result[0]['login_from'];
										$total_array['referral_code'] = $result[0]['referral_code'];
										$total_array['referral_code_amount'] = $result[0]['referral_code_amount'];
										$telltofriend_message = TELL_TO_FRIEND_MESSAGE;//str_replace("#REFDIS#",$ref_discount,$ref_message); 
										$total_array['telltofriend_message'] = $telltofriend_message;
										//Newly Added-13.11.2014
										$total_array['site_currency'] = $config_array[0]['site_currency'];
										$total_array['aboutpage_description'] = $this->app_description;
										$total_array['tell_to_friend_subject'] = __('telltofrien_subject');
										/***Get Company car model details start***/
											$company_model_details = $api->company_model_details($default_companyid);
											if(count($company_model_details)>0){
												
												$total_array['model_details']=$company_model_details;
											}else{
												$total_array['model_details']="model details not found";
											}
										$total_array['credit_card_status'] = $credit_card_sts;
										/***Get Company car model details end***/
										$message = ["message" => __('succesful_login_flash'),"detail"=>$total_array,"status"=> 1];
										echo json_encode($message);
										exit;	
									}
								}											
                            }
                            echo json_encode($message);
									exit;												
						}							
						else
						{
							$message = ["message" => __('password_failed'),"status"=> 4];
							echo json_encode($message);
							exit;										
						}						
						}					
					}
					else
					{
						$validation_error = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-5];
						echo json_encode($message);
						exit;				
					}										
					break;					
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=passenger_profile&userid=2
			case 'passenger_profile':			
					if($mobiledata['userid'] != null)
					{
						$result = $api->passenger_profile($mobiledata['userid']);
						if(count($result) >0)
						{
							$passenger_image = $result[0]['profile_image'];							
							/*************************** Passenger Image ************************************/
							if((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_image))
							{ 
								$profile_image = URL_BASE.PASS_IMG_IMGPATH.$passenger_image; 
							}
							else
							{ 
								$profile_image = URL_BASE."public/images/no_image109.png";
							}
							$result[0]['profile_image'] = 	$profile_image;
							$message = ["message" => __('success'),"detail"=>$result,"status"=>1];	
						}
						else
						{
							$message = ["message" => __('invalid_user'),"status"=>0];	
						}
						
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;			
			//new
			
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=edit_passenger_profile&passenger_id=17&email=prabhu.r@ndot.in&phone=34234234323&salutation=Mr&firstname=Sidhes&lastname=kumar&password=789456&profile_image=
			
			case 'edit_passenger_profile':
			/*$p_personal_array=array(
					"passenger_id"=>17,
					"salutation"=>"Mr",
					"email"=>"harishankar.k@ndot.in",
					"phone"=>"34234234323",
					"firstname"=>"Sidhes",
					"lastname"=>"kumar",
					"password"=>"789456",
					"profile_image"=>"/9j/4AAQSkZJRgABAQAAAQABAAD/4QBYRXhpZgAATU0AKgAAAAgAAgESAAMAAAABAAEAAIdpAAQAAAABAAAAJgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAB9KADAAQAAAABAAABTQAAAAD/2wBDAB8VFxsXEx8bGRsjIR8lL04yLysrL19ESDhOcGN2dG5jbWt8jLKXfISphmttm9Odqbi+yMrIeJXb6tnC6bLEyMD/2wBDASEjIy8pL1syMlvAgG2AwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMD/wAARCAFNAfQDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwB2+l3Go80uaokkDGnrKR3qDNGaAL0dzjrUy3A9azM04MR3osBqeePWjzc1miUinCciiwGkHpd4FZ4uDR55oGXy4PemmQDvVEyk96bvJ70WEXWnHaommJqvuo3UASls0ZqLdS7qAH5ozTN1GaAHZpM03NJmgB+aTNNzSZoAdmjNNzRmgBSaQmkJppNAATTCaUmmGgYhptKaSgApKKKACkopDQAlJSmkpAJRRSUAFLSUtACilFIKcKBjhU8JwaripUOCDQI0I2wKso2apIcip42oAtZozTAeKUmgAJ5pM02loAXNITRSGgBofBpxcEdahbrUcjEKTmmImLimmT3rP+0MDTWuGpiLzTY71C9yB3qk0rN1NNBpBYmZyxyaTNNBpaBiGo2p5qNqAGUUUUhlvNLmmA0uaYD80ZpuaM0CHZpc03NFMB2aXNMpc0APzS5pmaXNAD80ZpmaM0gH5ozTM0ZpgPzS5pmaM0gH5ozTM0ZoGOzSbqTNNzQA/dSbqZmjNAD91GaZmjNADs0hNJmkJoAUmmmjNIaAA02lNJQAUlFFABSGikNIYhpKU02gBaSiigQUtJS0DFFOFMpwoAcKcDTBTgaALUMnY1ZRgDWcDipUmx1oEaKygU/dmqAfPenpMV60CLmaM1Esyt3p28UAPzSE1G0oHU1XlulHemBMziqtxMMYFQyXBbpxUBbNACk00mkJppNAxc0opmactAEopaaKWgQGo2qQ1G1ADKKKKQyYGnA0ylzTAfmjNNzS5oAdmlpuaUGgB1LTaWgBaM0lGaAFzRmkzRmgBc0ZpuaM0AOzS5puaM0APzRmm5ozQAuaTNJmkoAWikooAWikooAWkopKACkoooASkpaSgAooowaQxKQ0/YSMimGgBppKU0lACUUUUALRSUtAC0uabS0AOBpQaaKUUAOzRmkooAcGI6Gl81vWo6QmgRL5zCgzuf4jUOaM0APLk9SaTNNzSZoAXNJmkzRmmAE0maM0lIAp60ynLQBIKdTBTqYgNRtTzTGoAbRRRSGSUtJRTAXNLmm0tADqUU0U4UAOpabS5oAXNFJmkzQAtGaTNFAC0UlFAC0tJRQA7NFJRQMKKSikAUUUUAFFFFABRSU9I3kPyg0AMpyxs/QVaS0VeXNWV2qMACk2FimtkxGWOKnjtETrzUhY9jSbz0IxSuOwgtYQ2cVMbeA9VGai8wikaTINMRKbeA/dUDtUUlhG/wBz5TTTNsGf73FN8/5slj7CgCrLYToThdw9qqujIcMCD71spcE8sxA+lPYwyKA4Uk+tK47GDRWnc6cCC8Rx7VnOjI2GGDVCG0tJS0AFFFFAC0tJS0AOopBS0AIaaacaaaAG0ZoNJQAuaTNFJQAtJRSUALSUUUAFPFMFPFADxS00U6mIDTDTzTDQA2iiikA+lpKWmAUtFFAC0tJRQA7NGaSigBaM0lJQAuaXNNpaAFopKWgBaWkpaAClpKKBhRRRSAKKKKACkpakghMrYHSgBsMZkcccVfBEYCgUMohQBaZnPcipbGkPJzRk46A1HgnqaTdzgEUhjzlxg8Co2XaPvZHuaTMgOQVpGZmIyB+dAChyOCfpQz8dMGmlRnPIoJ9elUmIXOeD+FN6AHHOKOlI33aYhApYk5qVVC9SBUTNg4z17U05Pf8ASpGaEcnH38ikliiuQdwGexrPIwOKsRSkgBucetAFS4tWhbqCKgrbVUdMHFZ1zamNiQRimmDRVpaPpRimIKWkoFADhS02nCgAppp1IRQAw0w08imkUAJRRgml2mgBtFOCE0vlt6UAMoAqQRnuKeI6QEarTwlTpASucVMlufSgRT2mirUkWDVdhg0wGmmGnmmGmAlFFFIBwpaQUtMBaKKKAFpaSloAKKKKAEopaSgAooooAKWkpaAFpaSloAWikooGLSUUUgClpKWgB0aGRworTSJYowB1qOzhCR7yOTUj5Y8Umxoibk4zUbEjgY/OptuOtRSDHK1IxpwRyQPpTMAnjnFKQM5Zhn0pVz6GgY0/Q0mMdRmnOVP9786i+mDTEKAR0zilGR24pA1HODg5oAOQKN3T3NLgEZ7VEDlvoKYh4HGfX9aCF70hOAB7U3cTz0oAfgdBgfUU9UYnOQfpUAY8nHPalDMMKD+VIZZB2tUxImj2vUUMaj7x5qx5eOn5UgM2WAocdaiZSDitSRdw+aoBBk9KoRSWNm6ClMRBrUSBVXmlaJDTEZJQigVpSRoBjiqUiAHigCOkNPxSEUAR4zT0hLc9qfFGXbFXFjGMUCuVVhx2p4gDdqtrGO4qVYsc0xFFbXnpU6249KthKNtAFN7QEZFMS2O7mtELSlBSGVxGFUDFGMCpXFMI4oAqS8k1TfrV1x1qnJ1piIjTDTzTDQMSiiikA4UtJS0wFoopaAClpKWgBaKKKAEooooAMUUUUAJS0UUAFLSUtAC0UlLQMKKKKQCipIYy8oFJEm4itGCIRjPehsCUYUBQOKaevFL1pMkVJQ1sY96gkPqM1O5GOc0wRlznP6UgKgQs3GKlztGMVYMQQcflUEmRyDj60ARFlPRaiOQeKlbB54Bpu0Hr1NAyPr9afGD3o+XoetKJAOCOopiAD5efXBqIDa5HqKleQetVRJtk5oCxawDimyAAYFRrLTGlyeetA7EgIHNOj457n3qt5gHJpPOUmgC+smD1qxDNkYP3e5rNSQHp/Op1lAHpQI0SocZBqJxsOcio7eYA8sT+NTXCkjPP50CI2l45NQPKT0pkhwaI+aYhQzM3NMk5NWUjBqOddtAFfFAGTilopgW4Ytq5qYLRAQ8YNTBaZIiJmp1WkQYqQUhibaTbUlJigBoFBFPxTSKAI2GaikGBU5qGYcUAU5OlUn5ar0o4qk/BNMRC1MNPamGgYlFFFIB1FFFAxaWkpaAFpaSigBaKSimAtFJRQAtFJS0CCiiigBaKKekZfpQMZSgVN9mkz0qeK0PU0hFVVzQYyOa01tkHNOMCFcUDK1moI5FWqjijMRx2qTPapGITg0jH3xQcU0g9QQaQwBLHB5p/yqtJGD1wKbJIecnj6UwGu64+8QahZ1Gec/jSSvjkn86qyTL70hkrsoHTJqu0/ODULzM3C1FjnLtinYLlkyhhSFzngmoB5f8AfNToqsOSD6EUAIXOOAaiOSevP0q0qcY70wx4bOKVx2IwHxTXyCf5mrOMc46CqsaGd8scCmJjCy9yTSZQ9yPrVhWg3eWASex9aV4EPsMc4pkkIBXkGniUjg8VGVMbYByucUuDjpmgaLMcvPB5rTicvDyTwKw1OPWtCzmy2Ae1IB83AwDUCuRVmQgk8CqjjDYoEXIZSaldQ61BCQFqUHimIquMNimE06U/MaiJoAt2k21tp6GtNORWCGwcitWynDjBPNMRdAp4pBThQAoopaKBhikIpaQ0ARMKgkOOtWWNVpuhoEU53G04qkxzVmU8GqrUxEbUw05jTDQMKKKKQD6KKKBi0opop1AC0UlLQAUUlFABRRRQAtFJS0wFopKUUCFq1bkIMmqoqdDuXFIZcF0npQbpQODWeQQ2Kk8vIpXHYtfax60n2jPeqjR4FRbsGi4WNJZtxxmpdw65qjAwLDFWkPODUsY5nANN3bj2pHyORTY2BPagCyCAnSqdxLjIqzIQV4zWbOQPXNMaGSzHv+FVWYs1Oc5bmmlG6CgBBlzsSpRFHGm+T/E0kLhRg4BAweOtPdVkXDdPahsQqxwzKSgx9arAmCXjkZ5FWBtiTC//AF6SG3LndJwD+ZouFiaNw4yAfqal2EjOcUqKBzjGOg9KkxxUllaWMspAP41VVGgbDA4I4PatHFNKjB4yKZJSVI1YuBzSPJ2A3e1WjAG5G0/UYphiKfw/kaAIFjON8vboKcVIHPFTBOQWNRyjJ4pgQOrDnPHepLRsSD601lO3ikgYK4zTEaZyBzVWYFTnPerAKkDHSopyrn5egpALE2aspyKqwqanDYNUSQXAw1QVPcHJqCkMKkikMbBgajpRTEblpcrKg55q0DXPQSmN85rWguQw680CLuaXNQCSnb6AJCaaTTd1JmgBHNVrhsKanY1RupO1MRVlbNQMaex5qFjQA1jTKUmm0hjqKKKAHUtFFAwFLSUtAC0UlFAC0UlFAC0UUtABRRRQAUtFFAC1LEcGoqenWgC4IQ3NOK4FLC3y02VzSGV5mqm/WrMpGOarEjNIZPasVODWhjkVmxSYYCtNOUBNDAGGR0qsW8uXGRVojvVedAQCo/KpGOlf5M84rNnkJ9qvsMx/MTxWbNzJgdM00AiDkYGT61NtDDg4IpuQAAooQ7WpgOK5GJEz7ikEcY5AbHtVhXDAVIGHQcmkOxBHH3Chfc8mplX+7nnqxp4BI5pGbsv50AHHQUuT0pAv1peAaYC4BHvTSDjIp9GOM0ySLIJ+YYPrS4J54NKQD+NMwQ2Oh/nSsO4xyw7VXbduxirTMwP3eajYMT2FAFchh0yaYVw+cVOw28kk0zhjkGmIkLdhgn2pwBKimAAGnljt4pATRuoIWpWUA5qlGP3g5q6TkCqJZDOBVU1Zn6VWNIBKWkpaYC1LFKVPNQ0tAGpHLuUHNSrIay4ZShx2q0JwBmmSX1bNO3cVnLdgGpDc8cUATTyhAazpHLEmlkkLnk1CxoAaxqJjT2NRmgY00AUuKUCgBcUUtFABRRRSGFLRRQAUUtFACUUtFABQKKKBi0UUUCClpKKAFp6HmmUoNAGhDylMlU5qKCYg4qycMM0hlSZDtqi2Q1ar4IxVKeLHOKAGQIzSDFa8YIXbVKwUZOau5wfakxi7uOn4VXkbB68HsetTtjGfzqvMM5DDg0hg2CnLZHpnms6c/NU5VhwH3DtmomQk80IAAGB60oQ7sgHFSxoPYUrbQaYxoQt7VMqqmMkknsKakcbHipCUhXI60gFbOPnOB6CkVskhcY9aRBwHk5Y9B6Uq5Zj8vHYUAP3YGBSgHFKAcelL7UxDOlL+NDDigUxDHDLyDkUhwwGRUmecUMMjpQBFuxwajL84NSsMx575qOVD8pFIZVkIL4zSAD1zTCSGPrRvNAiVSSfap9jGMYGKjgjJGSeKvKARgdBSuMqJGVbJqcP6UyU4bFIuPWqRDFm5FVjU8jcYqA0wEoopKAFopKKAFpQTSUUxDwacHOMVFmlzQA8tTSaTNJQAhptONJQAmKWiigAopaKAEooopDFpaBS0AJRS0lIYUlLSUAFLSUUwFopKKBC0tJS0ALRSUtACg4NW4CWWqdWbdqAJcbTzTWXecUrZzSx4oAEjWPHY1M33eKhnwycdaSBzt25qWNE4OVqORSR14p6k5xSNnpmpKKRG1+fx96Rl5/8Ar1JJy+CCDTCPTI9qBiE7RwSaa6EoGzgelN74p0rgLjH50wJAyqpwcDFCDKiSToPuiobYgly3OOcGrCKZHy2OO1MQ+PIJOMt/KpFB9RSqoUYFHGaAFYlVyPyqulydx3rx2qwTxURRT1oGhUuI5SVHWo7mfyUGBkmkWEKcqMGmum4/NzQFiNJZZHDHoKvA5WoFQZAAqUHFAMTA6YqOUkISBk9MVLnPakPfNMkycHkk0Rjc9S3Q2yEKOM5otl6GkwLgwqACrCDtn61WQbmFWUXAPbNSMrTDL9ajzVmRKrMMGqRLGsfWm0ppDVCEpKWkoAKKKKACiiigQUUUUwCikooAWikozQAUUZpM0ALmim0UALSikpRSGOFLSCloAKSlooAbRRRSGFFJRTAKWkooAWlptLQIdRSUtAC1JE201FSjrQBeHzCkPy0QqzLTnTjmmhEav601SFal25PFMdtnFJoaLW4Y6U7ORVOKYscGrS8fSsjQbIgYYI+lVJIiv3TVxzj6VERuGOMGgDPeRlPSmli7ZPNSXK7Tnn8aiQjOapCHRFvOAx7VpLjdxxVW2QSTkqM4q+EC0xXsRu2BigE+lOZEPc5oICDgZNFhpjW47UgJPNNMiHgnNG8YxSGOLUwUZHJpU9+tADs4+tFITk9KUYxQAA0hOKQ5FNbJ6UxFW6+eYCnAhV4pG5kJNOWPcRSYIntwcZNWV6dagVu2KlzgUgHYyPrVaZMHNWlOaHjDChMTM4001YljI7ioGGK0RI2kpaSmIKSlpKQBRRRTAKKKKACkpaSgAoopKAFpKKKACiiigApRTRThUlDhS00UtMQ6koooAKSlpKAEopaKAEooooAKWiloAKWkpaACpYIy7gUxRk1fs0FJjLUUYRKZJHvqfoKYzVIFbycd6gmQDtzVt+RgVE68UDRST5WqwrHPtUbpT4vSkyibqOlQsP8A9VScqemaaT1FICncrkH1FU1Vi+FBJ7VoSKWOAKsWlqsPzsMv/KqQmLbQmGPDfePJNEjEDjmppDmoS2O9WiGVHeQNnP4VJHPk4NSkpIMECoJLfuppiLBhjc8jBqCWBkOUyRSRs6HDZIqdZgw68ilYdymZ8NhwRT/PAGARViYRuMOn41mXCeW/HTtSsUmXlkyKcr1mJMyng1PHK57cUrDuXhz35psjYGTxUKl2H0pXUhck5oERpyasKMLUKjjipQxpMZIoApd3OKZ3xmnKMUgLCCpQKhjarCnIpiIJkUjniqEigHjmtSVCRWdNHtamhMr0UppKokSkpaKAEooopgFFJS0AJRRRQAUlLSUAFJS0lAC0UlFIApRTaUUih9LTaWgBaKSloELRRS0wEoxS0UANxRS0UAJS0UtABRRS0AOXk4rTs02pWdCpLVrQjCVLGOc0zg96VhmmEUgDjNMkp3SkbBNAyArUeSG9KsEVA45pDH7iRxSHk+hpqBmOFFWBGI+c5NFguEMYXk8t/KnFsDPekByeOTTSvOSc+1USNlyKrO4HWrLZ7ioZBnjAqhEKuuetSCUdKqzIycgVGs3ODQBoqwJwacYlPTiqcc3PIzU3mZ+6aBWHNFIo+Ugj0NU7iNmIB4+tXFkOcGkmAYUDKccAFWVjUCkUc4qVCDUNmlhQBtyaZLgJxUhAPWo5B2oEMjHyn6UqU5RtBoTpSAOjcmpARjrmoz1p6igCWMirCmqqsBU6MKYiY8ris65DA4PStAdKq3Y+XIoQjPNJSmkqyQpKWkpgJRRSUAFFFFABRRS0AJRRRQAlJTqSgBKKKKQCUtFJSKHZozSUZoAdmlpopaAHUtNpRQA6iiimIKKKWgBKKWigBKKWgCgCaBjuGK1YwdvNUbNAWzitHoKkY1qjJFOeoiGNABkUhNBWmkGgYjE0wIXNSBSfYVJgYOOOwpBcaFEfAODQw75yaTnIAwffPSnEfKO/vTEItHAyTSkY60jDC0xFeVz1FQtIWGRxT35PFQOpU0wH7gV5pgiRjytR+YBxUiS8ZFFwBrf+5UTMyHDCrKyg9aT5WODzQBAsuehp/netJJag8ocGmIhU4cUhrUsKOfrTh1I9aiQ4U1KuCOag0Hrnb/OoWbJNPZtoxTFUkZIpiJCRtz7U0HmhyBgU3JpCHqMtU6nb15qAE08cimIkJBPApyD3qMLipFBoAsKeKrXX3anHSoLrlDQgM89aSlNJVkCUUUUwEooooASiiigApaSigAoopKACiiigAooopAJSUUUigooooEKKUUlLQMWnU0U4UAKKdTRThQAtGKKWgBKKWimIShRkgUtTWybpKQF21j2KKsE01R0p/SpGMIprD3pXY1GaYAcU3b3NLg9fSmSsQgINIBSxx8o/DNCkHIAYH1xQvAG0jPfmn4Y8c+9MAA9+3ehRxgGlAAHA470KSDz+lMQBOc1FcPtqcnaSc8VVuvn6UAVgcnmnMy4qLOM0ikkUXGDQq/IphhZeVNSqdop+4EUAU92GweDUgftRNGG571Bkg4oAtGUkAjrSSMTgioVOadu4pMaJUx2p5cLVfzO1IWNKxVyUsWNPBKrkniq6sacMnrQIk3bmzmpUHBqFR+VWI8enFACqvGaXaO1Kg9BS4IOe9AgX5TUiNSLg9RinbcUCH9qrznKmpzylQTfcpIZRPWkpW60laECUUUUwEooooASkpaSgAoopKAFoopKAFopKWgAooopANooopDCiiigYtKKSlFACilFJS0AOFOFMBpwNADqWmg0tAC0UlLQAoGTV61j2jNVIlLOBWnGmFFJgSL0oIzS4pDxQA1vpUbH8hTmfFRSHJwKGA1nz1I+lMOThehPQ0gxk5OPX1oKkAkDK9gRSGSqB3PHtS/MBgMSPU1GiqIcLnHUYp6KQMHkHoaYhRu7496fjbzURBVsAcfypykjoePQ0AK74qtOwC7qfK46dKqSOQCOtIdiLzAWIJoVtvNRhAzE9KfjtTAeXyKTfkVGPrRkDjNADi5pjEE0hbJpKADNHWjFAzQAUuMmlGKf9KAEQU4AUoHHWlCkmkA4AD3qVfamKMDilHPXNAEue45pQQe+KYnH0p5HagRIv61KhBWoYqlXg0DGyHaMVA/K1LMcnFJt+WkBnt1ptTTrhs1DWiJCkoopiCkoooAKSiigBKKKKQBRRRQAUtJS0wCiiikAylpKKBi0tJS0gClpKWgYUtJS0ALSim0tADgadTBThQA4UopBUsEZdxQBatIuNxq6tMiTaoFS5wKQCHimNQzVE0nOKLhYJDkEZ5qpK4AwFJA6kVJI2chmKio9oIG1dw9xSGCZdcEAKegxyafGvPDcHjPpTVB2luw7Dip0UKeQAOBn1oQMeoyvPJH60zfjKggHsDUiYViMYP8xUMihzlRyOx7UxEbyc9T/UUm/I65+lLtB74NRPGV5GKQxsjHHdh6VUZucc/Sp3De1RFcnnrQA2NsZp/UVEcjmlVveqEPIAFM6DNPPNNIoAj70veg9aBSAeOaMe1KopaAEAp4BoVcinqKAFC5GaULTlFPI6elADAMDNPX5hg0uOKQDmgB20injsDwexpIzuGCacw4B7jrSAIzg4PrUp7VHwcU4nNIY08tTlHFJ1pVoAhnjytUWGDitVhkVQuI9rZqkxMr0UUVZIlFFFACUUvekPWgBKKXFJQAUUUUALRRSUAFFJRSAKKKKQwooooAWiiigYtFJRQAtLSUUAOFOFNFOFADlrQs0J5xVOGMuwrWhTYgFICTgCo2ahzVdzxjNIBzvk4BqInJzkikBzxjHpzSEdRuFIYocDsSPp1pm7ByCQCcYNKq7u7f0p6RZU7jz2OetACgNgcbvQ1KBwNvY8j1FNRiuSfmOeeacTgbh2NUhBjk1HKOd6n6+9P34bb+IpCQCcdKBkO8HqMGmMRjuamcD0qBsY71IxhAPfFRyJx9KGcfw/ypjNTER5pnAapO5ppFMQ89KSkB5pT1piGMKFHNKetOQfMKQxyinhc0Y5p60CAjGMfnTkXNAGRT1+U4oGLjmlx2pcck0HtQAinsaUJx70Fe4py8gEdjzQAYwc1J1H1FMIO36U5T8tJgMThyPXpTx1qNzhwacDzSGOHWlHWkUdKeRQAg61HPHuWpBQ3IxTEZTrtOKbVuWAu2R+NRG3bOBzV3EQUu3v2q0LY9BxU62yuoU8AUXEZveneWSckYFaH2KPP0pksG0cDPueaLgUGx0FNqSTOSCoGPao8UAFFFFMAooooASiiikAYpKmljCHANRmkMbRS0lAC0UlLQAtFFFAwpaSigBwqROTUQqzbIGcZpAX7OIBc4qyzBRTUAVOKhnchaQDWlySDxTD19qap3cGnD72KBiYB700ckZJ9u1SAcmm5BydoFIB4OD6mlAbcG/hNEcYfIOafGMK3Oc00JiMMEcdepoPK0p5+U8jimzDYu7r7UwBuCoPpQQRzTkAKVHIxXgUhkUr7DwaqvNv602eU5wBj3qHHOM0ASZ6GlpoHIqQAEkUAMKnGRQRTzwKRhzigCHJBp2c80jCgdKZIuKfGOaaOlPXpQA7vUmMUxfvCnjk0APQfN9KU8mhOd1L3oAeDxSnB+hpB6Uo6kUDDH50qnDZpQPvfSjGMGgQp+9ge4poOBinnqKYTwT70hojf7w9uKXPzYpkn+sWnjllPqKQyb+EU7qKaOUoXpQIQHBpc5pr9abnimA8EZ9adwOMVCCRzUisTQIk6HgcUhPJ5/Wm5yMGmMe9MCRjzxmgPknI/GoVJLAZpWzjOelAD3iRxnHNZtxGEcr09K0Uf2qG7VWGSOaEwM6ilYYbFJViCkpaQ0AFFFFID//Z",					
					);	*/		
					$p_personal_array = $mobiledata;
					//print_r($p_personal_array);
					//echo 'profiletest';
					//exit;
					if(count($p_personal_array)>0)
					{
							if($p_personal_array['email'] != null)
							{
								$p_email = $p_personal_array['email'];
								$country_code = $p_personal_array['country_code'];
								$p_phone = $p_personal_array['phone'];
								$passenger_id = $p_personal_array['passenger_id'];
								$password = $p_personal_array['password'];
								$validator = $this->edit_passenger_profile_validation($p_personal_array);						
								if($validator->check())
								{															
								   $email_exist = $api->edit_check_email_passengers($p_email,$passenger_id,$default_companyid);
								   $phone_exist = $api->edit_check_phone_passengers($p_phone,$passenger_id,$default_companyid,$country_code);
									if($email_exist > 0)
									{
										$message = ["message" => __('email_exists'),"status"=> 1];
										//echo json_encode($message);
									}
									else if($phone_exist > 0)
									{
										$message = ["message" => __('phone_exists'),"status"=> 2];
										//echo json_encode($message);
									}
									else
									{	
										if($p_personal_array['profile_image'] != "")
										{							
										/* Profile Update */
										$imgdata = base64_decode($p_personal_array['profile_image']);
										$f = finfo_open();
										$mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
										//echo '<img src="data:image/jpg;base64,'.$p_personal_array['profile_image'].'" />';
										//print_r($mime_type);
										//exit;
										$mime_type = explode('/',$mime_type);
										$mime_type = $mime_type[1];
										//print_r($mime_type);exit;
										//ini_set('gd.jpeg_ignore_warning', true);
										$img = imagecreatefromstring($imgdata); 

										if($img != false)
										{                   
											// get prev image
											$result = $api->passenger_profile($p_personal_array['passenger_id']);
											if(count($result) >0)
											{
												$profile_picture = $result[0]['profile_image'];
												if($profile_picture != "")
												{
													$main_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.$profile_picture;
													$thumb_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$profile_picture;
													if(file_exists($main_image_path) &&($profile_picture != ""))
													{
													unlink($main_image_path);
													}
													if(file_exists($thumb_image_path) &&($profile_picture != ""))
													{
													unlink($thumb_image_path);
													}
												}
											}										
											$image_name = uniqid().'.'.$mime_type;
											$thumb_image_name = 'thumb_'.$image_name;
											$image_url = DOCROOT.PASS_IMG_IMGPATH.'/'.$image_name;                    								
											//header('Content-Type: image/jpeg');					
											$image_path = DOCROOT.PASS_IMG_IMGPATH.$image_name;  
											imagejpeg($img,$image_url);
											imagedestroy($img);
											chmod($image_path,0777);
											$d_image = Image::factory($image_path);
											$path11=DOCROOT.PASS_IMG_IMGPATH;
											//Commonfunction::imageresize($d_image,PASS_IMG_WIDTH, PASS_IMG_HEIGHT,$path11,$image_name,90);
											Commonfunction::imageoriginalsize($d_image,$path11,$image_name,90);
											
											$path12=$thumb_image_name;
											//Commonfunction::imageresize($d_image,PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT,$path11,$thumb_image_name,90);
											Commonfunction::imageoriginalsize($d_image,$path11,$thumb_image_name,90);
											if($password != "")
											{
												$update_array = [								
												"salutation"=>$p_personal_array['salutation'],
												"name" => $p_personal_array['firstname'],
												"lastname" => $p_personal_array['lastname'],
												"email" => $p_email,
												"country_code" => $country_code,
												"phone" => $p_phone,
												"password" => md5($password),
												//"org_password" => $password,
												"profile_image" => $image_name];
											}
											else
											{
												$update_array = [								
												"salutation"=>$p_personal_array['salutation'],
												"name" => $p_personal_array['firstname'],
												"lastname" => $p_personal_array['lastname'],
												"email" => $p_email,
												"country_code" => $country_code,
												"phone" => $p_phone,
												"profile_image" => $image_name];										
											}
											
											$message = $api->edit_passenger_personaldata($update_array,$passenger_id,$default_companyid);
										//chmod($image_path, 0777);                    
										}
										else
										{
											$message = ["message" => __('image_not_upload'),"status"=>4];								
										}
										
									}
									else
									{
											if($password != "")
											{
												$update_array = [								
												"salutation"=>$p_personal_array['salutation'],
												"name" => $p_personal_array['firstname'],
												"lastname" => $p_personal_array['lastname'],
												"email" => $p_email,
												"country_code" => $country_code,
												"phone" => $p_phone,
												"password" => md5($password)];
												//"org_password" => $password);
												
											}
											else
											{
												$update_array = [								
												"salutation"=>$p_personal_array['salutation'],
												"name" => $p_personal_array['firstname'],
												"lastname" => $p_personal_array['lastname'],
												"email" => $p_email,
												"country_code" => $country_code,
												"phone" => $p_phone];										
											}
											//print_r($update_array);
											//exit;
											$message = $api->edit_passenger_personaldata($update_array,$passenger_id,$default_companyid);
									}
										/*****************************************/												
										if($message == 0)
										{
											$passenger_details = $api->passenger_profile($p_personal_array['passenger_id']);
											if((!empty($passenger_details[0]['profile_image'])) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image'])){ 
												$profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_details[0]['profile_image']; 
											} else { 
												$profile_image = URL_BASE."public/images/no_image109.png";
											}
											$message = ["message" => __('personal_updated'),"profile_image"=>$profile_image,"status"=>1];	
										}	
										if($message == -1)
										{
											$message = ["message" => __('try_again'),"status"=>-1];	
										}											
								}
							}
								else
								{							
									$validation_error = $validator->errors('errors');	
									$message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-3];	
								}
							}
							else
							{
								$message = ["message" => __('invalid_email'),"status"=>-4];	
							}
					}
					else
					{
						$message = ["message" => __('try_again'),"status"=>-5];	
					}
					echo json_encode($message);
					break;

			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=add_card_details&passenger_id=58&email=sakthivel.s.m@ndot.in&creditcard_no=4111111111111111&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&card_type=P&default=1
			case 'add_card_details':
			$p_card_array= $mobiledata;
			$creditcard_no = $p_card_array['creditcard_no'];
			$creditcard_cvv = $p_card_array['creditcard_cvv'];
			$expdatemonth = $p_card_array['expdatemonth'];
			$expdateyear = $p_card_array['expdateyear'];			
			$passenger_id = $p_card_array['passenger_id'];
			$default = $p_card_array['default'];
			$card_validation = $this->passenger_card_validation($p_card_array);
			if($card_validation->check())
			{				
				$authorize_status =$api->isVAlidCreditCard($creditcard_no,"",true);
				//print_r($authorize_status);
				//exit;
				if($authorize_status == 0)
				{
					$message = ["message" => __('invalid_card'),"status"=> 2];
					echo json_encode($message);
					exit;
				}
				$card_exist = $api->check_card_exist($creditcard_no,$creditcard_cvv,$expdatemonth,$expdateyear,$passenger_id);
				if($card_exist > 0)
				{
					$message = ["message" => __('card_exist'),"status"=> 3];
					echo json_encode($message);
					exit;
				}
				$result = $api->add_passenger_carddata($p_card_array);	
				//echo $result;	
				if($result == 0)
				{
				$message = ["message" => __('card_success'),"status"=>1];		
				}
				else
				{
				$message = ["message" => __('try_again'),"status"=>-1];	
				}
			
			}
			else
			{							
				$validation_error = $card_validation->errors('errors');	
				$message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-3];		
			}
			echo json_encode($message);
			break;

			//URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=edit_card_details&passenger_cardid=58&passenger_id=2&creditcard_no=3530111333300000&expdatemonth=08&expdateyear=2014&creditcard_cvv=567&card_type=P&default=0
			case 'edit_card_details':
			$p_card_array= $mobiledata;
			$passenger_cardid = $p_card_array['passenger_cardid'];
			$passenger_id = $p_card_array['passenger_id'];
			if($passenger_cardid != null)
			{
				$creditcard_no = $p_card_array['creditcard_no'];
				$creditcard_cvv = $p_card_array['creditcard_cvv'];
				$expdatemonth = $p_card_array['expdatemonth'];
				$expdateyear = $p_card_array['expdateyear'];
				$default = $p_card_array['default'];
				$card_validation = $this->edit_passenger_card_validation($p_card_array);
				if($card_validation->check())
				{				
					$authorize_status =$api->isVAlidCreditCard($creditcard_no,"",true);
					//print_r($authorize_status);
					//exit;
					if($authorize_status == 0)
					{
						$message = ["message" => __('invalid_card'),"status"=> 2];
						echo json_encode($message);
						exit;
					}
					$card_exist = $api->edit_check_card_exist($passenger_cardid,$creditcard_no,$creditcard_cvv,$expdatemonth,$expdateyear,$passenger_id,$default);
					if($card_exist == 1)
					{
						$message = ["message" => __('card_exist'),"status"=> 3];
						//echo json_encode($message);						
					}
					else if($card_exist == 2)
					{
						$message = ["message" => __('one_card_exist'),"status"=> 2];
						//echo json_encode($message);							
					}
					else					
					{					
						$result = $api->edit_passenger_carddata($p_card_array);	
						//echo $result;	
						if($result == 0)
						{
						$message = ["message" => __('edit_card_success'),"status"=>1];		
						}
						else
						{
						$message = ["message" => __('try_again'),"status"=>-1];	
						}
					}
				
				}
				else
				{							
					$validation_error = $card_validation->errors('errors');	
					$message = ["message" => __('validation_error'),"detail"=>$validation_error,"status"=>-3];		
				}
			}
			else
			{
				$message = ["message" => __('try_again'),"status"=>1];
			}
			echo json_encode($message);
			break;
						
						
			/*URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=chg_password_passenger&id=1&old_password=61be360905cecd0e96e31c9d575283b1&new_password=e10adc3949ba59abbe56e057f20f883e&confirm_password=e10adc3949ba59abbe56e057f20f883e&org_new_password=123456
			*/
			case 'chg_password_passenger':
			$p_chg_pass_array = $mobiledata;			
			if(!empty($p_chg_pass_array))
			{
					if($p_chg_pass_array['id'] != null)
					{
						$validator = $this->chg_password_passenger_validation($p_chg_pass_array);						
						if($validator->check())
						{
							//array_shift($p_chg_pass_array);
							//array_shift($p_chg_pass_array);
							$message = $api->chg_password_passenger($p_chg_pass_array,PASSENGERS,$default_companyid,'P');								
							//{-1 : confirm password must be the same as new password , -2 : Old Password is In Correct: -3: Invalid User,1:Password Changed Successfully	}
							
							switch($message){
								case -1 :
									$message = ["message" => __('confirm_new_same'),"status"=>-1];	
									break;
								case -2 :
									$message = ["message" => __('old_pass_incorrect'),"status"=>-2];
									break;
								case -3 :
									$message = ["message" => __('invalid_user'),"status"=>-3];
									break;
								case 1 :
									$message = ["message" => __('password_changed'),"status"=>1];	
									break;
								case -4 :
									$message = ["message" => __('old_new_pass_same'),"status"=>-4];	
									break;
								}
						}
						else
						{							
							$validation_error = $validator->errors('errors');	
							$message = ["message" => $validation_error,"status"=>-3];							
						}
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>0];	
					}
			}
			else
			{
					$message = ["message" => __('invalid_request'),"status"=>-6];	
				//	echo json_encode($message);	
			}
					echo json_encode($message);
					break;
							
			//URL : api/?type=mark_favourite&pass_log_id=1
			//http://192.168.1.49:1003/mobileapi108/index/dGF4aV9hbGw=/?type=add_favourite&passenger_id=78&p_favourite_place=Vadavalli,coimbatore&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=test&p_fav_locationtype=home
	case 'add_favourite':
				$add_fav_array = $mobiledata;
				//print_r();
				$validator = $this->favourite_validation($add_fav_array);				
				if($validator->check())
				{
					$passenger_id= $add_fav_array['passenger_id'];					
					$fav_comments = $add_fav_array['fav_comments'];
					$p_favourite_place = urldecode($add_fav_array['p_favourite_place']);
					$p_fav_latitude = $add_fav_array['p_fav_latitude'];
					$p_fav_longtitute = $add_fav_array['p_fav_longtitute'];
					$d_favourite_place = (isset($add_fav_array['d_favourite_place'])) ? urldecode($add_fav_array['d_favourite_place']) : '';
					$d_fav_latitude = (isset($add_fav_array['d_fav_latitude'])) ? $add_fav_array['d_fav_latitude'] : '';
					$d_fav_longtitute = (isset($add_fav_array['d_fav_longtitute'])) ? $add_fav_array['d_fav_longtitute'] : '';
					$p_fav_locationtype = $add_fav_array['p_fav_locationtype'];
					$notes = isset($add_fav_array['notes'])?$add_fav_array['notes']:"";
					$check_fav_place = $api->check_fav_place($passenger_id,$p_favourite_place,$d_favourite_place,$p_fav_locationtype);
					if($check_fav_place==0)
					{
						//Set the Favourite Trips
						$status = $api->save_favourite($passenger_id,$p_favourite_place,$p_fav_latitude,$p_fav_longtitute,$d_favourite_place,$d_fav_latitude,$d_fav_longtitute,$fav_comments,$notes,$p_fav_locationtype);
						if($status)					
						{
							$message = ["message" => __('mark_fav'),"detail"=>"","status"=>1];
						}
						else
						{
							$p_favourite_id = $check_fav_place['0']['p_favourite_id'];
							$message = ["message" => __('try_again'),"status"=>0];	
						}	
					}else if($check_fav_place==-1)
					{
						$message = ["message" => __('fav_already_exist_type'),"status"=>3];
					}
					else
					{
						$message = ["message" => __('fav_already_exist'),"status"=>2];
					}					
				}
				else
				{
						$validation_error = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"status"=>-3];								
				}
				echo json_encode($message);
				break;
			//URL
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=get_favourite_list&passenger_id=2
			case 'get_favourite_list':		
				if(count($mobiledata) > 0)
				{					
					$passenger_id = mysql_real_escape_string($mobiledata['passenger_id']);
					$favourite_list = $api->get_favourite_list($passenger_id);
					if(count($favourite_list)>0)
					{
						$message = ["message" => __('success'),"detail"=>$favourite_list,"status"=>1];	
					}
					else
					{
						$message = ["message" => __('no_favourite_trips'),"status"=>0];	
					}				
				}
				else
				{
					$message = ["message" => __('no_favourite_trips'),"status"=>-1];								
				}
				echo json_encode($message);
				break;		
			//URL		
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=get_favourite_details&p_favourite_id=2
			case 'get_favourite_details':
				$p_fav_array = $mobiledata;
				if($p_fav_array['p_favourite_id'] != null)
				{
					$favourite_details = $api->get_favourite_details($p_fav_array['p_favourite_id']);
					$message = ["message" => $favourite_details,"status"=>1];	
				}
				else
				{
					$message = ["message" => __('no_favourite'),"status"=>-1];								
				}
				echo json_encode($message);
				break;
				
			/*Favourite Delete
			 * URL :
			 * 
			 * */
			case 'delete_favourite':
				$p_fav_array = $mobiledata;
				if($p_fav_array['p_favourite_id'] != null && $p_fav_array['passenger_id'] != null)
				{
					$favourite_details = $api->delete_favourite($p_fav_array['p_favourite_id'],$p_fav_array['passenger_id']);
					if($favourite_details) {
						$message = ["message" => __('favourite_deleted'),"status"=>1];	
					} else {
						$message = ["message" => __('no_favourite'),"status"=>-1];
					}
				}
				else
				{
					$message = ["message" => __('no_favourite'),"status"=>-1];								
				}
				echo json_encode($message);
			break;	
			//http://192.168.1.49:1003/mobileapi108/index/dGF4aV9hbGw=/?type=edit_favourite&p_favourite_id=53&passenger_id=78&p_favourite_place=Vadavalli,coimbatore-41&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=test=78&p_favourite_place=Vadavalli,Gandhipuram,west&p_fav_latitude=11.1425367&p_fav_longtitute=76.1253648&d_favourite_place=Gandhipuram,coimbatore&d_fav_latitude=11.1425367&d_fav_longtitute=76.1253648&fav_comments=&p_fav_locationtype=office
	case 'edit_favourite':
				$edit_fav_array = $mobiledata;
				$validator = $this->edit_favourite_validation($edit_fav_array);	
				if($validator->check())
				{
					$favourite_id= $edit_fav_array['p_favourite_id'];
					$fav_comments = $edit_fav_array['fav_comments'];
					$passenger_id  = $edit_fav_array['passenger_id'];
					$p_favourite_place = urldecode($edit_fav_array['p_favourite_place']);
					$p_fav_latitude = $edit_fav_array['p_fav_latitude'];
					$p_fav_longtitute = $edit_fav_array['p_fav_longtitute'];
					$d_favourite_place = (isset($edit_fav_array['d_favourite_place'])) ? urldecode($edit_fav_array['d_favourite_place']) : '';
					$d_fav_latitude = (isset($edit_fav_array['d_fav_latitude'])) ? $edit_fav_array['d_fav_latitude'] : '';
					$d_fav_longtitute = (isset($edit_fav_array['d_fav_longtitute'])) ? $edit_fav_array['d_fav_longtitute'] : '';
					
					$p_fav_locationtype = $edit_fav_array['p_fav_locationtype'];
					$notes = isset($edit_fav_array['notes'])?$edit_fav_array['notes']:"";
					//Set the Favourite Trips
					$check_fav_place = $api->check_fav_editplace($passenger_id,$p_favourite_place,$d_favourite_place,$favourite_id,$p_fav_locationtype);

					if($check_fav_place==0)
					{ 
						$check_fav_place_exist = $api->check_fav_editplacecheck($passenger_id,$p_favourite_place,$d_favourite_place,$favourite_id,$p_fav_locationtype);
						if($check_fav_place_exist==0)
						{
							$status = $api->edit_favourite($favourite_id,$p_favourite_place,$p_fav_latitude,$p_fav_longtitute,$d_favourite_place,$d_fav_latitude,$d_fav_longtitute,$fav_comments,$notes,$p_fav_locationtype);
							if($status)					
							{
								$message = ["message" => __('edit_mark_fav'),"detail"=>"","status"=>1];
							}
							else
							{
								$message = ["message" => __('no_chage_made'),"status"=>0];	
							}

						 }else{
							$message = ["message" => __('fav_already_exist'),"status"=>2];

						}	
					}else if($check_fav_place==-1){
						$message = ["message" => __('no_data'),"status"=>-3];

					}
					else
					{
						$message = ["message" => __('fav_already_exist_type'),"status"=>3];
					}										
				}
				else
				{
						$validation_error = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"status"=>-3];	
				}
				echo json_encode($message);
				break;
			case 'check_passenger_trip':
				$passenger_id = (isset($mobiledata['passenger_id'])) ? $mobiledata['passenger_id'] : '';
				if(!empty($passenger_id)) {
					$passengerCompany = $api->get_passenger_company_id($passenger_id);
					$company_id = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
					$passengerInTrip = $api->check_passenger_in_trip($passenger_id,$company_id);
					if($passengerInTrip > 0) {
						$message = ["message" => __('passenger_in_journey'),"status" => 1];
					} else {
						$message = ["message" => __('invalid_trip'),"status" => 2];
					}
				} else {
					$message = ["message" => __('invalid_request'),"status"=>0];
				}
				echo json_encode($message);
			break;
			//URL : http://192.168.1.49:1015/mobileapi108/index/dGF4aV9hbGw/?type=savebooking&latitude=11.0213687&longitude=76.916638&pickupplace=&dropplace=&drop_latitude=&drop_longitude=&pickup_time=03:00:00&motor_model=1&cityname=Coimbatore&sub_logid=&distance_away=&passenger_id=1&request_type=0&now_after=1&notes=test
                       //Append the Additional Fields while sending ...
			case 'savebooking':
					$search_array = $mobiledata;															
					$validator = $this->search_validation($search_array);
					$passenger_id = $search_array['passenger_id'];
					$promo_code = isset($search_array['promo_code'])?$search_array['promo_code']:'';
					$referral_code = isset($search_array['referral_code'])?$search_array['referral_code']:'';
					//exit;
					if($validator->check())
					{
					if($promo_code != "")
					{
						$check_promo = $api->checkpromocode($promo_code,$passenger_id,$default_companyid);
						//echo $check_promo;
						//exit;
						if($check_promo == 0)
						{
							$msg = ["message" => __('invalid_promocode'),"status" => 3];
							echo json_encode($msg);
							break;
						}
						else if($check_promo == 3)
						{
							$msg = ["message" => __('promo_code_startdate'),"status" => 3];
							echo json_encode($msg);					
							break;								
						}
						else if($check_promo == 4)
						{
							$msg = ["message" => __('promo_code_expired'),"status" => 3];
							echo json_encode($msg);					
							break;								
						}						
						else if($check_promo == 2)
						{
							$msg = ["message" => __('promo_code_limit_exceed'),"status" => 3];
							echo json_encode($msg);					
							break;							
						}
						else
						{
							$formvalues['promo_code'] = $promo_code;
						}
					}				
					
						if($search_array['latitude'] !='0' && $search_array['longitude'] !='0')
						{							
							$add_model = Model::factory('add');			
							$find_model = Model::factory(FIND);	
							$latitude = $search_array['latitude'];
							$longitude = $search_array['longitude'];
							$miles = "";//$search_array['no_of_miles'];
							$no_passengers = "";//$search_array['no_of_passengers'];
							$pickup_time = $search_array['pickup_time'];	
							
							$pickupplace = urldecode($search_array['pickupplace']);
							$dropplace = urldecode($search_array['dropplace']);
							$drop_latitude = $search_array['drop_latitude'];
							$drop_longitude = $search_array['drop_longitude'];
							
							//$taxi_fare_km = $search_array['taxi_fare_km'];
							$taxi_fare_km = '';
							$motor_company = '1';//$search_array['motor_company'];
							$motor_model = $search_array['motor_model'];		
							$maximum_luggage = "";//$search_array['maximum_luggage'];	
							$cityname = $search_array['cityname'];		
							$sub_logid = $search_array['sub_logid'];	
							$now_after = $search_array['now_after'];	
							$passenger_id = $search_array['passenger_id'];	
							$notes = isset($search_array['notes']) ? $search_array['notes'] : '';	
							$unit = UNIT; // 0 - KM, 1 - Miles	
							$service_type="";
							//print_r($_REQUEST);
							$city_id  = $api->get_city_id($cityname);	
							$passengerCompany = (!empty($passenger_id)) ? $api->get_passenger_company_id($passenger_id) : 0;
							$company_id = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
							$passengerInTrip = $api->check_passenger_in_trip($passenger_id,$company_id);
							if($passengerInTrip > 0) {
								$msg = ["message" => __('passenger_in_journey'),"status" => 3];
								echo json_encode($msg);
								break;
							}	
							$driver_details = $find_model->search_driver_mobileapp($latitude,$longitude,$miles,$passenger_id,$taxi_fare_km,$motor_company,$motor_model,$maximum_luggage,$cityname,$sub_logid,$company_id,$unit,$service_type);	
							//print_r($driver_details);exit;	
							$nearest_driver='';
							$a=1;
							$temp='10000';
							$prev_min_distance='10000~0';
							$taxi_id='';
							$temp_driver=0;
							$nearest_key=0;
							$prev_key=0;
							$driver_list="";
							$available_drivers ="";
							$total_count = count($driver_details);		
							//echo COMPANY_CONTACT_PHONE_NUMBER;					
							$company_contact_no='';
							if(COMPANY_CID != 0)
							{
								$company_contact_no=COMPANY_CONTACT_PHONE_NUMBER;
							}
							$no_vehicle_msg=__('no_vehicle_msg').$company_contact_no;
							$notification_time = $this->notification_time;	
							//print_r($driver_details);		
							//exit;
														
							if($notification_time != 0 ){ $timeoutseconds = $notification_time;}else{$timeoutseconds = 15;}
							//Form Values//
									$formvalues = Arr::extract($mobiledata, ['pickupplace','dropplace','pickup_time','driver_id','passenger_id','roundtrip','passenger_phone','cityname','distance_away','sub_logid','drop_latitude','drop_longitude','promo_code','now_after','motor_model']);
							if($total_count > 0)
							{										
										$driver_id = isset($driver_details[0]['driver_id'])?$driver_details[0]['driver_id']:"";
										$taxi_id = isset($driver_details[0]['taxi_id'])?$driver_details[0]['taxi_id']:"";
										//$company_tax = isset($driver_details[0]['company_tax'])?$driver_details[0]['company_tax']:"";
										$totalrating = 0;
										foreach($driver_details as $key => $value)
										{												
												$updatetime_difference = $value['updatetime_difference'];
												//Exclude the drivers who has not logged in and not update the status last specified seconds
												if($updatetime_difference <= LOCATIONUPDATESECONDS)
												{
													$driver_list .= $value['driver_id'].',';
													$available_drivers = substr_replace($driver_list ,"",-1);
												}
										       /*else
												{
													$shiftout_array  = array("shift_status" => 'OUT');
													//$transaction = $this->commonmodel->update(DRIVER,$shiftout_array,'driver_id',$value['driver_id']);
												}*/											
										}
										
									/*********************************************Save booking ***************************************/
										
									$formvalues['taxi_id']=$taxi_id;
									$formvalues['pickup_latitude']=$search_array['latitude'];
									$formvalues['pickup_longitude']=$search_array['longitude'];
									$formvalues['driver_id'] =$driver_id;
									$formvalues['notes'] =$notes;
									//print_r($formvalues);exit;			
									$result= $api->savebooking($formvalues,$company_id);
									//to get nearest driver
									$avail_nearest_driver=explode(',',$available_drivers);
									//print_r($avail_nearest_driver);exit;
									if(count($avail_nearest_driver)>0){
										$nearest_driver=$avail_nearest_driver[0];
									}
									$totalNoofDrivers = (count($avail_nearest_driver) < 5) ? count($avail_nearest_driver) : 5;
									$total_request_time = ($totalNoofDrivers * $notification_time) + 20;
									//function to check whether the passenger have wallet amount by this we can give credit card status
									$total_cancelfare = $api->get_passenger_cancel_faredetail($result);
									$passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
									$credit_card_sts = SKIP_CREDIT_CARD; 
									if(count($passenger_wallet) > 0 && $passenger_wallet[0]['wallet_amount'] >= $total_cancelfare) {
										$credit_card_sts = 0;
									}
									
									if(($result > 0) && ($formvalues['now_after'] == 0))
									{
									//$driver_details['city_id'] = $city_id;
											/***** Insert the druiver details to driver request table ************/
											if(!empty($nearest_driver)) {
												
												if(count($avail_nearest_driver)>0) {
													$available_drivers_Arr = [];
													foreach($avail_nearest_driver as $key=>$driveridVal){
														$driver_has_request = $api->check_driver_has_trip_request($driveridVal,$company_all_currenttimestamp);
														if($driver_has_request == 0 ){
															$available_drivers_Arr[] = $driveridVal;
														}
													}
													$available_drivers =  implode(",",$available_drivers_Arr);
													$nearest_driver = (count($available_drivers_Arr) > 0) ? $available_drivers_Arr[0]: '';
												}
											}
											/*echo 'as'.$available_drivers;
											echo '<br>';
											echo $nearest_driver;
											exit;*/
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											$company_det =$api->get_company_id($nearest_driver);
											if(count($company_det)>0){
												$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det[0]['company_id']);
											}
												$insert_array = [
																		"trip_id" => $result,
																		"available_drivers" 			=> $available_drivers,
																		"total_drivers" 			=> $available_drivers,
																		"selected_driver"		=> $nearest_driver,
																		"status" 	=> '0',
																		"rejected_timeout_drivers"		=> "",
																		"createdate"		=> $company_all_currenttimestamp,
																	];								
												//Inserting to Transaction Table 
												$transaction = $this->commonmodel->insert(DRIVER_REQUEST_DETAILS,$insert_array);
													
												$detail = ["passenger_tripid"=>$result,"notification_time"=>$notification_time,"total_request_time"=>$total_request_time,"credit_card_status"=>$credit_card_sts];
											
											$msg = ["message" => __('api_request_confirmed_passenger'),"status" => 1,"detail"=>$detail];
											echo json_encode($msg);
											exit;	
									}
									else if(($result > 0) && ($formvalues['now_after'] == 1))
									{
									//$driver_details['city_id'] = $city_id;
											/***** Insert the druiver details to driver request table ************/
											$detail = ["passenger_tripid"=>$result,"notification_time"=>$notification_time,"total_request_time"=>$total_request_time,"credit_card_status"=>$credit_card_sts];
											$msg = ["message" => __('api_request_disapatcher'),"status" => 1,"detail"=>$detail];
											echo json_encode($msg);
											exit;	
									}						
									else
									{
										$message = ["message" => __('try_again'),"status"=>2];	
									}						
						  }
						  else
						  {
							  if($formvalues['now_after'] == 1) {	
									$formvalues['taxi_id'] = 0;
									$formvalues['pickup_latitude']=$search_array['latitude'];
									$formvalues['pickup_longitude']=$search_array['longitude'];
									$formvalues['driver_id'] = 0;
									$formvalues['notes'] =$notes;
								  $result= $api->savebooking($formvalues,$default_companyid);
								  $detail = ["passenger_tripid"=>$result,"notification_time"=>$notification_time,"total_request_time"=>$notification_time,"credit_card_status"=>$credit_card_sts];
								  $msg = ["message" => __('api_request_disapatcher'),"status" => 1,"detail"=>$detail];
								  echo json_encode($msg);
								  exit;
							  } else { 
								  $msg = ["message" => $no_vehicle_msg,"status" => 3];
								  echo json_encode($msg);
								  exit;
							  }							  
						  }
					  }
					  else
					  {
							$message = ["message" => __('lat_not_zero'),"status"=>-4];
							echo json_encode($message);
							exit;	
					  }
					}
					else
					{
						$errors = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>-5];
						echo json_encode($message);
						exit;					
					}							
					
					break;
			//http://192.168.1.88:1020/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0=/?type=nearestdriver_list&latitude=10.978942571323032&longitude=76.761474609375&motor_model=&passenger_id=
			case 'nearestdriver_list':
					$search_array = $mobiledata;															
					$validator = $this->nearestdriver_validation($search_array);
									
					if($validator->check())
					{
						if($search_array['latitude'] !='0' && $search_array['longitude'] !='0')
						{
							$passenger_id = $search_array['passenger_id'];
							$find_model = Model::factory(FIND);	
							//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);						
							$latitude = $search_array['latitude'];
							$longitude = $search_array['longitude'];
							$miles = DEFAULTMILE;//$search_array['no_of_miles'];
							$unit = UNIT; // 0 - KM, 1 - Miles
							$taxi_model = $search_array['motor_model'];
							$service_type="";
							$passengerCompany = (!empty($passenger_id)) ? $api->get_passenger_company_id($passenger_id) : 0;
							$company_id = ($passengerCompany != 0) ? $passengerCompany : $default_companyid;
							$driver_details = $find_model->nearestdrivers($latitude,$longitude,$taxi_model,$passenger_id,$miles,$company_id,$unit,$service_type);
							$get_modelfare_details=$api->get_modelfare_details($default_companyid,$taxi_model);
							//print_r($driver_details );exit;
							$nearest_driver='';
							$a=1;
							$temp='10000';
							$prev_min_distance='10000~0~0~0';
							$taxi_id='';
							$temp_driver=0;
							$nearest_key=0;
							$prev_key=0;
							$total_count = count($driver_details);		
							//echo COMPANY_CONTACT_PHONE_NUMBER;					
							$company_contact_no='';
							if(COMPANY_CID != 0)
							{
								$company_contact_no=COMPANY_CONTACT_PHONE_NUMBER;
							}
							$no_vehicle_msg=__('no_vehicle_msg').$company_contact_no;
							
							//Get Fare details of the Taxi model_id Start
							$fare_details=__('no_fare_details_found');
							if($get_modelfare_details!=0){
								$fare_details=$get_modelfare_details[0];
							}
							//print_r($fare_details); 
							//Get Fare details of the Taxi model_id End
							$fare_details['metric'] = UNIT_NAME;
							if($total_count > 0)
							{
								$driver_id = "";//isset($driver_details[0]['driver_id'])?$driver_details[0]['driver_id']:"";
								$totalrating = 0;
								foreach($driver_details as $key => $value)
								{
									 //Set nearest driver equal to 1											
										if($driver_id == $value['driver_id'])
										{
											$driver_details[$nearest_key]['nearest_driver'] ='1';
										}
										else
										{
											$driver_details[$key]['nearest_driver'] ='0';
										}
									// Get last 20 coordinates of the driver Start
										$get_driver_coordinates= '0';//$api->get_driver_coordinates($value['driver_id']);
										$driver_details[$key]['driver_coordinates'] = $get_driver_coordinates;
									// Get last 20 coordinates of the driver End

									//Get Nearest driver Taxi speed Start										
											//FARE_CALCULATION_TYPE : 1 => Distance, 2 => Time, 3=> Distance / Time
											$fare_details['fare_calculation_type']=FARE_CALCULATION_TYPE; 
									//Get Nearest driver Taxi speed Start

									$driver_details[$key]['distance_km'] =$value['distance_km'];
								}
										
								//$driver_details['city_id'] = $city_id;								
									if(count($driver_details) > 0)
										$message = ["detail" => $driver_details,"fare_details"=>$fare_details,"driver_around_miles"=>DEFAULT_DRIVER_MILE,"status" => 1,"message" => 'success','metric'=>UNIT_NAME];
									else
										$message = ["message" => $no_vehicle_msg,"fare_details"=>$fare_details,"driver_around_miles"=>DEFAULT_DRIVER_MILE,"status" => 0];	
											
									echo json_encode($message);
									break;
						  }
						  else
						  {
							  $msg = ["message" => $no_vehicle_msg,"fare_details"=>$fare_details,"status" => 3];
							  echo json_encode($msg);
							  exit;							  
						  }
					  }
					  else
					  {
							$message = ["message" => __('lat_not_zero'),"status"=>-4];
							echo json_encode($message);
							exit;	
					  }
					}
					else
					{
						$errors = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>-5];
						echo json_encode($message);
						exit;					
					}							
					
					break;					
					
            //url : 									
            //http://192.168.1.88:1000/api/?type=driver_arrived&trip_id=205
			case 'driver_arrived':
			$array = $mobiledata;
			$trip_id = $array['trip_id'];
			if($array['trip_id'] != null)
			{
			$check_travelstatus = $api->check_travelstatus($trip_id);

				if($check_travelstatus == -1)
				{
					$message = ["message" => __('invalid_trip'),"status"=>2];
					echo json_encode($message);
					break;
				}				
				if($check_travelstatus == 4)
				{
					$message = ["message" => __('trip_cancelled_passenger'), "status"=>-1];
					echo json_encode($message);
					break;
				}
				if($check_travelstatus != 9)
				{
					$message = ["message" => __('passenger_in_journey'), "status"=>-1];
					echo json_encode($message);
					break;
				}						
				$get_passenger_log_details = $api->get_passenger_log_detail($trip_id);		
				//print_r($get_passenger_log_details);
				//exit;			
				$driver_id = $get_passenger_log_details[0]->driver_id;
				$driver_current_location = $api->get_driver_current_status($driver_id);
				//print_r($driver_current_location);
				//exit;						
				$driver_latitute = $driver_longtitute="";
				if(count($driver_current_location)>0)
				{
					$driver_latitute = $driver_current_location[0]->latitude;
					$driver_longtitute  = $driver_current_location[0]->longitude;
					$driver_status  = $driver_current_location[0]->status;					
				}
		
				//if($driver_status == 'A' || $driver_status == 'B')
				if($driver_status == 'A')
				{
					$message = ["message" => __('already_trip'), "status"=>-1];
					echo json_encode($message);
					break;					
				}
				/********** Update Driver Status after complete Payments *****************/
				$update_pass_array  = ["travel_status" => '3']; // Start to Pickup
				$result = $api->update_table(PASSENGERS_LOG,$update_pass_array,'passengers_log_id',$trip_id);	
				/*************** Update arrival in driver request table ******************/
				$update_trip_array  = ["status"=>'5'];
				$driver_request_result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);		
				/**************************** Update status in driver table *********/
				$update_driver_arrary  = ["status"=>'B'];
				$driver_result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);		
				/*************************************************************************/				
				/** Send Trip fare details to Passenger ***/
				$p_device_token = $get_passenger_log_details[0]->passenger_device_token;
				$device_type = $get_passenger_log_details[0]->passenger_device_type;
				$passenger_id = $get_passenger_log_details[0]->passengers_id;
				$pushmessage = ["message"=>__('passenger_on_board'),"trip_id"=>$trip_id,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>2];
				//print_r($pushmessage);
				//exit;
				if(SMS == 1)
				{
					//$this->phone=$this->commonmodel->get_passengers_details($email,1);
					$message_details = $this->commonmodel->sms_message_by_title('driver_arrived');
					$to = $api->get_passenger_phone_by_id($passenger_id);
					//$to = isset($this->phone[0]['phone'])?$this->phone[0]['phone']:'';
					$message = $message_details['sms_description'];
					$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
					
					$api->send_sms($to,$message);

				}
				//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$device_type,$pushmessage,$this->customer_google_api);
				$message = ["message" => __('driver_arrival_send'),"status"=>1];					
			}
			else
			{
				$message = ["message" => __('invalid_trip'),"status"=>-1];	
			}
			echo json_encode($message);	
			break;
												
			//URL : http://192.168.1.104:1003/api/index/dGF4aV9hbGw=/?type=user_logout&driver_id=99&shiftupdate_id=
			case 'user_logout':		
			$driver_logout_array = $mobiledata;
			$driver_id = $mobiledata['driver_id'];			
					if($driver_id != null)
					{
						$shiftupdate_id = $driver_logout_array['shiftupdate_id'];
						$driver_model = Model::factory('driver');
						$update_id = $driver_id;							
						$check_result = $api->check_driver_companydetails($driver_id,$default_companyid);
						if($check_result == 0)	
						{
							$message = ["message" => __('invalid_user'),"status"=>-1];
							echo json_encode($message);
							exit;
						}
					
						$driver_current_status = $api->get_driver_current_status($update_id);
						//print_r($driver_current_status);exit;
						if(count($driver_current_status) > 0)
						{
								$get_driver_log_details = $api->get_driver_log_details($update_id,$default_companyid);
								//print_r($get_driver_log_details);
								 $driver_trip_count = count($get_driver_log_details);//exit;
								if($driver_trip_count == 0)
								{
									$update_array  = ["login_from"=>"","login_status"=>"N","device_id" => "","device_token" => "","device_type" => "","notification_setting"=>"0","notification_status"=>"0"];
									$login_status_update = $this->commonmodel->update(PEOPLE,$update_array,'id',$update_id);
									/*** Update in Driver table **/
									$driver_reply = $driver_model->update_driver_shift_status($update_id,'0');
									/** Update in driver shift history table **/
									$shiftupdate_arrary  = ["shift_end" => $this->currentdate];
									$shiftupdateid = $shiftupdate_id;		
									if($shiftupdateid)
									{
										$transaction = $this->commonmodel->update(DRIVERSHIFTSERVICE,$shiftupdate_arrary,'driver_shift_id',$shiftupdateid);
									}
									$message = ["message" => __('logout_success'),"status"=>1];
								}
								else
								{
									$message = ["message" => __('trip_in_future'),"status"=>-4];
								}
						}
						else
						{
							$message = ["message" => __('driver_in_trip'),"status"=>0];
						}
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
				echo json_encode($message);	
				break;		
			
			// http://192.168.1.104:1003/mobileapi/index/dGF4aV9hbGw=/?type=get_trip_detail&trip_id=1064
			case 'get_trip_detail':
					$array = $mobiledata;
					$trip_id = $array['trip_id'];
					//passenger_id params come from ios passenger app only
					$passenger_id = isset($array['passenger_id']) ? $array['passenger_id'] : '';
					if($trip_id != null)
					{
						$trip_id = $trip_id;						
						$api_model = Model::factory(MOBILEAPI_107);			
						$get_passenger_log_details = $api_model->get_trip_detail($trip_id,$passenger_id);
						if(count($get_passenger_log_details)>0)
						{
							foreach($get_passenger_log_details as $journey)
							{
									$driver_id = $journey->driver_id;
									$taxi_id = $journey->taxi_id;
									$driver_image_name = $journey->driver_image;
									$passenger_image = $journey->passenger_image;
									$trip_details['taxi_min_speed']=$journey->taxi_min_speed;
									$trip_details['trip_id'] = $journey->passengers_log_id;
									$trip_details['current_location'] = $journey->pickup_location;
									$trip_details['pickup_latitude'] = $journey->pickup_latitude;
									$trip_details['pickup_longitude'] = $journey->pickup_longitude;
									$trip_details['drop_location'] = $journey->drop_location;
									$trip_details['drop_latitude'] = $journey->drop_latitude;
									$trip_details['drop_longitude'] = $journey->drop_longitude;
									$trip_details['drop_time'] = ($journey->drop_time != "0000-00-00 00:00:00") ? $journey->drop_time : "";
									$trip_details['pickup_time'] = ($journey->actual_pickup_time != "0000-00-00 00:00:00") ? $journey->actual_pickup_time : $journey->pickup_time;
									$trip_details['time_to_reach_passen'] = str_replace('Min','',$journey->time_to_reach_passen);		
									$trip_details['no_passengers']= $journey->no_passengers;	
									$trip_details['rating'] = $journey->rating;
									$trip_details['notes']= $journey->notes_driver;																
									$trip_details['driver_name'] = $journey->driver_name;								
									$trip_details['driver_id'] = $journey->driver_id;							
									$trip_details['taxi_id'] = $journey->taxi_id;
									$trip_details['taxi_number'] = $journey->taxi_no;
									$trip_details['driver_phone'] = $journey->driver_phone;
									$trip_details['passenger_phone'] = $journey->passenger_phone;
									$trip_details['passenger_name'] = $journey->passenger_name;									
									$trip_details['travel_status'] = $journey->travel_status;	
									$trip_details['bookedby'] =  $journey->bookby;
									$trip_details['waiting_time'] =  $journey->waiting_time;
									$trip_details['distance'] =  $journey->distance;
									$trip_details['actual_distance'] =  $journey->actual_distance;
									$trip_details['metric'] =  $journey->metric;
									$trip_details['amt'] = round($journey->amt,2);		
									$trip_details['used_wallet_amount'] = round($journey->used_wallet_amount,2);		
									$trip_details['job_ref'] = $journey->job_ref;		
									$trip_details['payment_type'] = $journey->payment_type;		
									$trip_details['taxi_speed'] = $journey->taxi_speed;	
									$trip_details['trip_duration'] = "0";
									if($trip_details['drop_time'] != "") {
										//total trip duration
										$trip_seconds = strtotime($trip_details['drop_time']) - strtotime($trip_details['pickup_time']);
										$trip_days    = floor($trip_seconds / 86400);
										$trip_hours   = floor(($trip_seconds - ($trip_days * 86400)) / 3600);
										$trip_minutes = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600))/60);
										$trip_seconds = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600) - ($trip_minutes*60)));
										$trip_hours = ($trip_hours < 10) ? '0'.$trip_hours : $trip_hours;
										$trip_minutes = ($trip_minutes < 10) ? '0'.$trip_minutes : $trip_minutes;
										$trip_seconds = ($trip_seconds < 10) ? '0'.$trip_seconds : $trip_seconds;
										$trip_details['trip_duration'] = $trip_hours.":".$trip_minutes.":".$trip_seconds;
									}														
							}
							
							$paymentname="";
							if($trip_details['payment_type'] != '5') {
								$paymentname_sql = $api->get_payment_name($trip_details['payment_type']);
								if(count($paymentname_sql) > 0)
								{
									$paymentname = $paymentname_sql[0]['pay_mod_name'];
								}
							} else {
								$paymentname = "Wallet";
							}
							$trip_details['payment_type'] = $paymentname;
							/************************************Driver Image *******************************/					
								$driver_image = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DRIVER_IMGPATH.'thumb_'.$driver_image_name;
								if(file_exists($driver_image) && ($driver_image_name !=''))
								{
								$driver_image = URL_BASE.SITE_DRIVER_IMGPATH.'thumb_'.$driver_image_name;
								}else{
								$driver_image = URL_BASE."/public/images/noimages109.png";
								}		
								$trip_details['driver_image'] = $driver_image;
								
							/*************************** Passenger Image ************************************/
							if((!empty($passenger_image)) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_image))
							{ 
								 $profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_image; 
							}
							else
							{ 
								$profile_image = URL_BASE."public/images/no_image109.png";
							}	
							$trip_details['passenger_image'] = $profile_image;
							$trip_details['driver_latitute'] = $trip_details['driver_longtitute'] = '0.0';
							$current_driver_status = $api_model->get_driver_current_status($driver_id);
							if(count($current_driver_status)>0)
							{
								foreach($current_driver_status as $driver_details)
								{
									$trip_status = $driver_details->status;
									$trip_details['driver_latitute'] = $driver_details->latitude;
									$trip_details['driver_longtitute'] = $driver_details->longitude;									
								}
							}
							
							$trip_details['driver_status'] =  ($trip_status != 'B') ?  $trip_status : 'F';

							$dresult = $api->driver_ratings($driver_id);
							$totalrating=0;
							if(count($dresult) > 0)
							{
								$overall_rating = 0; $i=0; $trip_total_with_rate=0;
								
									foreach($dresult as $comments)
									{
										if($comments['rating'] != 0)
										$trip_total_with_rate++;
										$rating = $comments['rating'];
										//print_r($comments);
										$overall_rating += $comments['rating'];
										$i++;	
									}
																			
									if($trip_total_with_rate!=0 && $overall_rating!=0){
										$totalrating = $overall_rating/$trip_total_with_rate;
									}else{
										$totalrating = 0;
									}		
																	
									$totalrating = round($totalrating);	
										 //echo 'as'.$totalrating;												
								}
								else
								{
									$totalrating = 0;
								}							
							$trip_details['driver_rating'] = $totalrating;
							//print_r($upcoming_journey);
							if(count($get_passenger_log_details) == 0)
							{
								$message = ["message" => __('try_again'),"status"=>0,"site_currency"=>$this->site_currency];	
							}
							else
							{
								$mes = __('success');
								if($trip_details['travel_status'] == 5) {
									$mes = __('trip_waiting_payment');
								} else if($trip_details['travel_status'] == 4) {
									$mes = __('cancel_by_passenger');
								}
								$message = ["message" => $mes,"detail"=>$trip_details,"status" => 1,"site_currency"=>$this->site_currency];
							}	
					}
					else
					{
						$message = ["message" => __('invalid_trip'),"status"=>-1,"site_currency"=>$this->site_currency];	
					}									
				}
				else
				{
					$message = ["message" => __('invalid_trip'),"status"=>-1,"site_currency"=>$this->site_currency];	
				}			
				echo json_encode($message);	
				break;
			//URL : api/?type=passenger_logout&id=7
			case 'passenger_logout':	
			$passenger_log_array = $mobiledata;		
					if($passenger_log_array['id'] != null)
					{
						$api_model = Model::factory(MOBILEAPI_107);	
						//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);						
						$update_id = $passenger_log_array['id'];
						$check_result = $api->check_passenger_companydetails($passenger_log_array['id'],$default_companyid);
						if($check_result == 0)	
						{
							$message = ["message" => __('invalid_user'),"status"=>-1];
							echo json_encode($message);
							exit;
						}

						$update_array  = ["login_from"=>"","login_status"=>"N","device_id" => "","device_token" => "","device_type" => ""];
						$logout_status_update = $api_model->update_passengers($update_array,$update_id,$default_companyid);
						$delete_rejected_trips = $api_model->delete_rejected_trips($update_id,$company_all_currenttimestamp);
						if($logout_status_update > 0)
						{
							$message = ["message" => __('logout_success'),"status"=>1];
						}
						else
						{
							$message = ["message" => __('invalid_user'),"status"=>-1];
						}						
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>0];	
					}
				echo json_encode($message);	
				break;		
				
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_message&id=58&usertype=P
			case 'tell_to_friend_message':			
			$array = $mobiledata;
			$id = $array['id'];
			$type = $array['usertype'];
			$device_type = $array['device_type'];
			//$referral_code = $telltofriend_message = "";
				$subject = __('telltofrien_subject');
				$name="";
				$message = "";
				if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/site_logo/'.$this->domain_name.'_email_logo.png')){  $email_logo=$this->domain_name; }else{ $email_logo="demo"; }
				if($device_type == 1)
				{
					$replace_variables=[
						REPLACE_LOGO=>EMAILTEMPLATELOGO,
						REPLACE_SITENAME=>$this->app_name,
						REPLACE_NAME=>$name,
						REPLACE_MESSAGE=>TELL_TO_FRIEND_MESSAGE,
						REPLACE_SITEEMAIL=>$this->siteemail,
						REPLACE_SITEURL=>URL_BASE,
						REPLACE_EMAIL_LOGO=>$email_logo,
						REPLACE_ANDROID_PASSENGER_APP=>ANDROID_PASSENGER_APP,
						REPLACE_IOS_PASSENGER_APP=>IOS_PASSENGER_APP,
						REPLACE_ANDROID_DRIVER_APP=>ANDROID_DRIVER_APP,
					];
				}
				else
				{
					$replace_variables=[REPLACE_LOGO=>EMAILTEMPLATELOGO,
						REPLACE_SITENAME=>$this->app_name,
						REPLACE_NAME=>$name,
						REPLACE_SITEEMAIL=>$this->siteemail,
						REPLACE_SITEURL=>URL_BASE,
						REPLACE_MESSAGE=>TELL_TO_FRIEND_MESSAGE,
						REPLACE_ANDROID_PASSENGER_APP=>ANDROID_PASSENGER_APP,
						REPLACE_EMAIL_LOGO=>$email_logo,
						REPLACE_IOS_PASSENGER_APP=>IOS_PASSENGER_APP,
						REPLACE_ANDROID_DRIVER_APP=>ANDROID_DRIVER_APP,
						REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,
						REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR
					];					
				}
				
				/* Added for language email template */
			if($this->lang!='en'){
			if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/telltofriend-'.$this->lang.'.html')){
			$message_temp=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/telltofriend-'.$this->lang.'.html',$replace_variables);
			}else{
			$message_temp=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'telltofriend.html',$replace_variables);
			}
			}else{
			$message_temp=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'telltofriend.html',$replace_variables);
			}
			/* Added for language email template */
				//echo $message_temp;exit;
				//print_r($message_temp);
				$message_template = htmlspecialchars($message_temp);
							
			if(($id != null) && ($type != null))
			{
				if($type == 'D')
				{
					$driver_profile = $api->driver_profile($id);	
					if(count($driver_profile)>0)
					{
						$referral_code = $driver_profile[0]['driver_referral_code'];		
						$name = $passenger_profile[0]['name'];				
						$telltofriend_message = DRIVER_TELL_TO_FRIEND_MESSAGE; 
						$detail = ["tell_message" => $telltofriend_message,"message_template"=>$message_template,"subject"=>$subject];
						$message = ["detail"=>$detail,"status"=>1,"message"=>__('success')];
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>0];
					}
					
				}				
				else
				{
					$passenger_profile = $api->passenger_profile($id);
					if(count($passenger_profile)>0)
					{
						$referral_code = $passenger_profile[0]['referral_code'];
						$name = $passenger_profile[0]['name'];
						$ref_message = TELL_TO_FRIEND_MESSAGE.''.$referral_code;
						$ref_discount = REFERRAL_DISCOUNT;
						$telltofriend_message = TELL_TO_FRIEND_MESSAGE;//str_replace("#REFDIS#",$ref_discount,$ref_message); 						
						$detail = ["tell_message" => $telltofriend_message,"message_template"=>$message_template,"subject"=>$subject];
						$message = ["detail"=>$detail,"status"=>1,"message"=>__('success')];
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>0,"message"=>__('failed')];
					}
				}		
				//$message = array("message" => $telltofriend_message,"status"=>1,"message"=>__('success'));								
			}
			else
			{
				$message = ["message" => __('validation_error'),"status"=>-1,"message"=>__('failed')];	
			}			
									
            if($device_type == 1)
            {
				$search = ['"'];
				$replace = ["'"];			
				echo $str = str_ireplace($search,$replace,$message_temp);							
			}
			else
			{
				echo json_encode($message);
			}
				
			break;			
						//URL
			// http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend&to=ndottagmytaxi2014@gmail.com&message=Flagger left you hail a taxi. Download it for free to get 5% off your first ride&passenger_id=58
			case 'tell_to_friend':
			$tell_array = $mobiledata;
			if(!empty($tell_array))
			{
				$to = $tell_array['to'];
				$message = $tell_array['message'];
				$passenger_id = $tell_array['passenger_id'];
				$name = $email = $referral_code = "";
				$check_validation = $this->check_tell_to_friend($tell_array);
				if($check_validation->check()) 
				{
					$passenger_details = $api->passenger_profile($passenger_id);
					$referral_code = "";
					if(count($passenger_details)>0)
					{
						$name = $passenger_details[0]['name'];
						$email = $passenger_details[0]['email'];
						$referral_code = $passenger_details[0]['referral_code'];
					}
					
							$friends_email = explode(',',$to);
							$rejectedemails="";
							$successemails = "";
							$mail="";
							foreach($friends_email as $femail)					
							{	
								$check_list = $api->check_email_passengers($femail);
								if($check_list > 0)
								{
									$rejectedemails .= $femail.',';
									//$message = array("message" => $rejectedemails.' '.__('already_reg'),"status"=> -1);
									//echo json_encode($message);
								}
								else
								{ 
				
								if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/site_logo/'.$this->domain_name.'_email_logo.png')){  $email_logo=$this->domain_name; }else{ $email_logo="demo"; }
								
									$subject = __('telltofrien_subject');
									$replace_variables=[
										REPLACE_LOGO=>EMAILTEMPLATELOGO,
										REPLACE_SITENAME=>$this->app_name,
										REPLACE_NAME=>$name,
										REPLACE_EMAIL=>$email,
										REPLACE_SUBJECT=>$subject,
										REPLACE_MESSAGE=>$message,
										REPLACE_SITEEMAIL=>$this->siteemail,
										REPLACE_SITEURL=>URL_BASE,
										REPLACE_COMPANYDOMAIN=>$this->domain_name,
										REPLACE_ANDROID_PASSENGER_APP=>ANDROID_PASSENGER_APP,
										REPLACE_IOS_PASSENGER_APP=>IOS_PASSENGER_APP,
										REPLACE_EMAIL_LOGO=>$email_logo,
										REPLACE_ANDROID_DRIVER_APP=>ANDROID_DRIVER_APP,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
									//print_r($replace_variables);exit;
									
			/* Added for language email template */
			if($this->lang!='en'){
			if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/telltofriend-'.$this->lang.'.html')){
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/telltofriend-'.$this->lang.'.html',$replace_variables);
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'telltofriend.html',$replace_variables);
			}
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'telltofriend.html',$replace_variables);
			}
			/* Added for language email template */
									
									//print_r(htmlspecialchars($message));exit;
									$friend_to = $femail;
									$from = $this->siteemail;
									$successemails .= $femail.',';	
									$redirect = "no";	
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
								//$rejectedemails.' '.__('already_reg')
								if(empty($successemails))
								{
									$detail = __('already_reg');
								}
								else
								{
									$detail =  __('invitation_send');						
								}
								$message = ["detail"=>$detail,"status"=>1,"message"=>__('success')];
							}	
					}
					else
					{
						$detail = $check_validation->errors('errors');
						$message = ["detail"=>$detail,"status"=>2,"message"=>__('validation_error')];
					}
			}
			else
			{
				$message = ["message" => __('invalid_request'),"status"=> 5];
			}	
            echo json_encode($message);								
			break;		
			//URL
			// http://192.168.1.88:1003/api/index/dGF4aV9hbGw=/?type=dynamic_page&pagename=termsconditions&device_type=1
			case 'dynamic_page':			
			$page_array = $_GET;
			$check_validation = $this->check_dynamic_array($page_array);
			if($check_validation->check()) 
			{
					$pagename = $page_array['pagename'];
					$device_type = $page_array['device_type'];
					$pagecontent=$content="";
					if($pagename != null)
					{	
						$content_cms = $api->getcmscontent($pagename,$default_companyid);
						if(count($content_cms)>0)
						{
							foreach($content_cms as $value)
							{								
								$pagecontent = $value['content'];
								//$content = stripcslashes($pagecontent);
								$content = htmlentities($pagecontent);								
								$menu = $value['menu'];
							}
						}
						else
						{
							if($device_type == 1)
							{
								echo __('page_not_found');
								break;	
							}
							else if($device_type == 2)
							{
								$message = ["message" => __('page_not_found'),"status"=>2];
								echo $json_decode = json_encode($message);	
								break;	
							}			
							else
							{
								$message = ["message" => __('page_not_found'),"status"=>2];
								echo $json_decode = json_encode($message);	
								break;
							}	
	
						}							
					}
					else
					{
						$message = ["message" => __('invalid_page'),"status"=>-1];	
						echo $json_decode = json_encode($message);
						break;	
					}
				if($device_type == 1)
				{
					echo $pagecontent;
					break;	
				}
				else if($device_type == 2)
				{
					$result = ["content"=>$content,"title"=>$menu];
					$message = ["message"=>__('success'),"detail" => $result,"status"=>1];
					echo $json_decode = json_encode($message);	
					break;	
				}			
				else
				{
					$message = ["message" => __('invalid_page'),"status"=>-1];	
					echo $json_decode = json_encode($message);
					break;	
				}	 
			}
			else
			{
					$detail = $check_validation->errors('errors');
					$message = ["detail"=>$detail,"status"=>-3,"message"=>__('validation_error')];		
					echo json_encode($message);			
			}			
				//echo $pagecontent;
				//*/
			break;								

			//URL : http://192.168.1.88:1000/api/index/?type=completed_journey_datewise&passenger_id=1&start=0&limit=5&date=2012-12-26&device_type=1			
			case 'completed_journey_datewise':
				$array = $mobiledata;				
				if($array['passenger_id'] != null)
				{
					$validator = $this->trip_history_date_wise($array);					
					if($validator->check()) 
					{					
						$userid= $array['passenger_id'];
						$start = $array['start'];
						$limit = $array['limit'];	
						$date = $array['date'];		
						$device_type = $array['device_type']; // 1 Android , 2 - IOS
						//Getting from Passenger Model Directly
						$passengers = Model::factory('passengers');
						$booktype="2";
						$fromdate = $date.' 00:00:01';
						$todate = $date.' 23:59:59';
						$arraydetails = [];
						$alldetails = [];
						if($device_type == 1)
						$pagination = 1;
						else
						$pagination = 0;
						$total_array = [];
						for($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i))
						{
							$cdate = date("Y-m-d",$i);						
							$passengers_all_compl = $api->get_passenger_trips_bydate($pagination,$booktype,$userid,1,'A','1',$start,$limit,$cdate);
							if(count($passengers_all_compl) > 0)
							{
								foreach($passengers_all_compl as $result)
								{
									$arraydetails['trip_id'] = $result['trip_id'];
									$arraydetails['place'] = $result['place'];
									$arraydetails['pickup_time'] = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
									$arraydetails['fare'] = $result['fare'];
									$arraydetails['pickup_latitude'] = $result['pickup_latitude'];
									$arraydetails['pickup_longitude'] = $result['pickup_longitude'];
									$arraydetails['drop_latitude'] = $result['drop_latitude'];
									$arraydetails['drop_longitude'] = $result['drop_longitude'];
									$arraydetails['notes_driver'] = $result['notes_driver'];
									$arraydetails['drivername'] = $result['drivername'];
									$arraydetails['drop_location'] = $result['drop_location'];
									$date =$result['pickup_time'];
									$alldetails[] = $arraydetails;
								}
								$total_array[] = ["trip_Date" => $cdate,"trip_details" => $alldetails];
							}							
						}						
						if(count($total_array) > 0)
						{
							$message = ["message" => __('success'),"detail"=>$total_array,"status"=>1,"site_currency"=>$this->site_currency];	
							//$message = $passengers_all_compl;
						}
						else
						{
							$message = ["message" => __('no_completed_data_date'),"status"=>0,"site_currency"=>$this->site_currency];	
						}	
					}
					else
					{
						$errors = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2,"site_currency"=>$this->site_currency];
					}											
				}
				else
				{
					$message = ["message" => __('invalid_user'),"status"=>-1,"site_currency"=>$this->site_currency];	
				}
				echo json_encode($message);
				break;
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=completed_journey_monthwise&passenger_id=1&start=1&limit=5&month=12&year=2013			
			case 'completed_journey_monthwise':
				$array = $mobiledata;				
				if($array['passenger_id'] != null)
				{
					$validator = $this->trip_history_month_wise($array);					
					if($validator->check()) 
					{
						$userid= $array['passenger_id'];
						$start = $array['start'];
						$limit = $array['limit'];	
						$month = $array['month'];	
						$year = $array['year'];	
						$device_type = $array['device_type']; // 1 Android , 2 - IOS
						//Getting from Passenger Model Directly
						$passengers = Model::factory('passengers');
						// Booktype 0 -> Flagger Ride, 1-> Strret Ride, 2-> All
						$booktype="2";
						// all records from 1 month	//
						//$fromdate = $year.'-'.$month.'-'.'01';
						//$todate = date('Y-m-t', strtotime($fromdate));
						if($device_type == 1)
						{
							$fromdate = $year.'-'.$month.'-'.$start;
							$todate = $year.'-'.$month.'-'.$limit;
						}
						else
						{
							$fromdate = $year.'-'.$month.'-'.'01';
							$todate = date('Y-m-t', strtotime($fromdate));						
						}
						$arraydetails = [];
						$alldetails = [];
						$perdayarray = [];
						$pagination = 0;
						//for($i = strtotime($fromdate); $i <= strtotime($todate); $i = strtotime('+1 Day', $i))
						for($i = strtotime($todate); $i >= strtotime($fromdate); $i = strtotime('-1 Day', $i))
						{
							
							$cdate = date("Y-m-d",$i);
							$req_date = date("Y-m-d",$i);
							$passengers_all_compl = $api->get_passengertrips_byfrmdate($pagination,$booktype,$userid,1,'A','1',$start,$limit,$cdate);
							
							if(count($passengers_all_compl) > 0)
							{
								foreach($passengers_all_compl as $result)
								{
									$arraydetails['trip_id'] = $result['trip_id'];
									$arraydetails['place'] = $result['place'];
									$arraydetails['pickup_time'] = ($result['actual_pickup_time'] != "0000-00-00 00:00:00") ? $result['actual_pickup_time'] : $result['pickup_time'];
									$arraydetails['fare'] = $result['fare'];
									$arraydetails['fare'] = $result['fare'];
									$arraydetails['pickup_latitude'] = $result['pickup_latitude'];
									$arraydetails['pickup_longitude'] = $result['pickup_longitude'];
									$arraydetails['drop_latitude'] = $result['drop_latitude'];
									$arraydetails['drop_longitude'] = $result['drop_longitude'];
									$arraydetails['notes_driver'] = $result['notes_driver'];
									$arraydetails['drivername'] = $result['drivername'];
									$arraydetails['drop_location'] = $result['drop_location'];
									$date =$result['pickup_time'];
									$alldetails[] = $arraydetails;
								}
								$perdayarray[] = ["trip_Date"=>$req_date,"trip_details" => $alldetails];
								$alldetails = [];
							}
						}
						
						if(count($perdayarray) > 0)
						{
							$message = ["message" =>__('success'),"detail"=>$perdayarray,"status"=>1,"site_currency"=> $this->site_currency];
						}
						else
						{
							$message = ["message" => __('no_completed_data_month'),"status"=>0,"site_currency"=>$this->site_currency];	
						}						
					}
					else
					{
						$errors = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2,"site_currency"=>$this->site_currency];
					}							
				}
				else
				{
					$message = ["message" => __('invalid_user'),"status"=>-1,"site_currency"=>$this->site_currency];	
				}
				echo json_encode($message);
				break;	
				
			//URL : http://192.168.1.88:1234/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=completed_journey&id=1&start=0&limit=5
			//Company URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=completed_journey&id=1&start=0&limit=5
			case 'completed_journey':
				$array = $mobiledata;
				if($array['id'] != '')
				{
					$userid= $array['id'];
					$start = $array['start'];
					$limit = $array['limit'];

					$check_result = $api->check_passenger_companydetails($array['id'],$default_companyid);
					if($check_result == 0)	
					{
						$message = ["message" => __('invalid_user'),"status"=>-1,"site_currency"=>$this->site_currency];
						echo json_encode($message);
						exit;;
					}
					
					//Getting from Passenger Model Directly
					$passengers = Model::factory('passengers');
					$passengers_all_compl = $api->get_passenger_log_details($userid,1,'A','1',$start,$limit,$default_companyid);
					
					//print_r($passengers_all_compl);
					
					if(count($passengers_all_compl) > 0)
					{
						$message = ["message" =>__('success'),"detail"=>$passengers_all_compl,"currency"=>$this->site_currency];
					}
					else
					{
						$message = ["message" => __('no_completed_data'),"status"=>0,"site_currency"=>$this->site_currency];	
					}						
						
				}
				else
				{
					$message = ["message" => __('invalid_user'),"status"=>-1,"site_currency"=>$this->site_currency];	
				}
				echo json_encode($message);
				break;	

			 // Cancelled Trip by Passenger
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=cancelled_journey&id=1&start=0&limit=5&device_type=1
			case 'cancelled_journey':
			$cancel_array = $mobiledata;
				if($cancel_array['id'] != null)
				{
					$validator = $this->coming_cancel($array);					
					if($validator->check()) 
					{
						$userid= $cancel_array['id'];
						$start = $cancel_array['start'];
						$limit = $cancel_array['limit'];
						$device_type = $cancel_array['device_type'];

						$check_result = $api->check_passenger_companydetails($userid,$default_companyid);
						if($check_result == 0)	
						{
							$message = ["message" => __('invalid_user'),"status"=>-1];
							echo json_encode($message);
							exit;
						}
						if($device_type == 1)
						$pagination = 1;
						else
						$pagination = 0;
						$passengers_cancel = $api->get_passenger_cancelled_trip_details($default_companyid,$pagination,$userid,'','A','',$start,$limit);
								//print_r($passengers_cancel);	
						$trip_details = [];
						$i = 0;
						$alldetails = [];
						if(count($passengers_cancel) > 0)
						{
							foreach($passengers_cancel as $journey)
							{
									$driver_id = $journey['driver_id'];
									$payment_type = $journey['payment_type'];
									$driver_image = $journey['driver_image'];
									$trip_details['trip_id'] = $journey['passengers_log_id'];
									$trip_details['pickup_location'] = $journey['pickup_location'];
									$trip_details['pickup_latitude'] = $journey['pickup_latitude'];
									$trip_details['pickup_longitude'] = $journey['pickup_longitude'];
									$trip_details['drop_location'] = $journey['drop_location'];
									$trip_details['drop_latitude'] = $journey['drop_latitude'];
									$trip_details['drop_longitude'] = $journey['drop_longitude'];
									$trip_details['pickup_time'] = $journey['pickup_time'];
									$trip_details['time_to_reach_passen'] = $journey['time_to_reach_passen'];
									$trip_details['driver_name'] = $journey['driver_name'];								
									$trip_details['driver_id'] = $journey['driver_id'];							
									$trip_details['taxi_id'] = $journey['taxi_id'];
									$trip_details['taxi_number'] = $journey['taxi_no'];
									$trip_details['driver_phone'] = $journey['driver_phone'];
									$trip_details['passenger_name'] = $journey['passenger_name'];
									$trip_details['travel_status'] = $journey['travel_status'];
									$trip_details['amt'] = $journey['amt'];		
									$trip_details['job_ref'] = $journey['job_ref'];		
							$paymentname="";
							$paymentname_sql = $api->get_payment_name($journey['payment_type']);
							if(count($paymentname_sql) > 0)
							{
								$paymentname = $paymentname_sql[0]['pay_mod_name'];
							}
							$trip_details['payment_type'] = $paymentname;		
							/************************************Driver Image *******************************/					
								$driver_image = URL_BASE.SITE_DRIVER_IMGPATH.$driver_image;
								if(file_exists($driver_image) && $driver_image !='')
								{
								$driver_image = URL_BASE.SITE_DRIVER_IMGPATH.$driver_image;
								}else{
								$driver_image = URL_BASE."/public/images/noimages109.png";
								}		
								$trip_details['driver_image'] = $driver_image;			
							$alldetails[] = $trip_details;
							$i = $i+1;			
							}
								if(SMS == 1)
							{
								//$this->phone=$this->commonmodel->get_drivers_details($email,1);
								
								$message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
								//$to = isset($this->phone[0]['phone'])?$this->phone[0]['phone']:'';
								$to = $api->get_driver_phone_by_id($driver_id);
								$message = $message_details['sms_description'];
								$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
								$api->send_sms($to,$message);
								//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");								
							}																		
							//$message = $passengers_cancel;
							$message = ["message" => __('success'),"detail"=>$alldetails,"status"=>1];
						}
						else
						{
							$message = ["message" => __('no_data'),"status"=>0];	
						}	
					}
					else
					{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2];							
					}					
						
				}
				else
				{
					$message = ["message" => __('invalid_user'),"status"=>-1];	
				}
				echo json_encode($message);
				break;					
				
				//URL : http://192.168.1.88:100/api/index/dGF4aV9hbGw=?type=coming_trips&id=1&start=0&limit=10&device_type=1
				case 'coming_trips':
				$passenger_list_array = $mobiledata;
				//Current Journey after driver confirmation //TN1013619352
				
					if($passenger_list_array['id'] != null)
					{
						$validator = $this->coming_cancel($passenger_list_array);					
						if($validator->check()) 
						{						
							$userid= $passenger_list_array['id'];
							$start = $passenger_list_array['start'];
							$limit = $passenger_list_array['limit'];	
							$device_type = $passenger_list_array['device_type'];	
							$check_result = $api->check_passenger_companydetails($passenger_list_array['id'],$default_companyid);
							if($check_result == 0)	
							{
								$message = ["message" => __('invalid_user'),"status"=>-1];
								echo json_encode($message);
								exit;
							}
							if($device_type == 1)
							$pagination = 1;
							else
							$pagination = 0;
							$passengers_current = $api->get_passenger_current_log_details($default_companyid,$pagination,$userid,'','A','0',$start,$limit);
							
							if(count($passengers_current) > 0)
							{
								//$message = $passengers_current;
								$message = ["message" => __('success'),"detail"=>$passengers_current,"status"=>1];
							}					
							else
							{
								$message = ["message" => __('no_data'),"status"=>0];	
							}	
						}
						else
						{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2];							
						}												
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
				case 'booking_list':
				//Current Journey after driver confirmation //TN1013619352
					$array=$mobiledata;
					//print_r($array);
					if($array['id'] != null)
					{
						//echo "1";exit;
						$validator = $this->coming_cancel($array);					
						if($validator->check()) 
						{						
							$userid= $array['id'];
							$start = $array['start'];
							$limit = $array['limit'];	
							$device_type = $array['device_type'];	
							$check_result = $api->check_passenger_companydetails($array['id'],$default_companyid);
							if($check_result == 0)	
							{
								$message = ["message" => __('invalid_user'),"status"=>-1];
								echo json_encode($message);
								exit;
							}
							if($device_type == 1)
							$pagination = 1;
							else
							$pagination = 0;
							$passengers_trips=[];
							$pending_bookings = $api->get_pending_bookings($default_companyid,$pagination,$userid,'','A','0',$start,$limit);
							foreach($pending_bookings as $key => $val)
							{
								switch($val['travel_status'])
								{
									case 1:
									$pending_bookings[$key]['travel_msg']="Fare Updated";
									break;
									case 2:
									$pending_bookings[$key]['travel_msg']="Inprogress";
									break;
									case 3:
									$pending_bookings[$key]['travel_msg']="Arrived";
									break;
									case 5:
									$pending_bookings[$key]['travel_msg']="Completed";
									break;
									case 9:
									$pending_bookings[$key]['travel_msg']="Confirmed";
									break;
									default:
									$pending_bookings[$key]['travel_msg']="Cancelled";
									break;
								}
							}
							$past_bookings = $api->get_past_bookings($userid,1,'A','1',$start,$limit,$default_companyid);
							$passengers_trips['pending_bookings']=$pending_bookings;
							$passengers_trips['past_bookings']=$past_bookings;
							if(count($passengers_trips) > 0)
							{
								//$message = $passengers_current;
								$message = ["message" => __('success'),"detail"=>$passengers_trips,"status"=>1];
							}					
							else
							{
								$message = ["message" => __('no_data'),"status"=>0];	
							}	
						}
						else
						{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2];							
						}												
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
				case 'driver_booking_list':
				//Current Journey after driver confirmation //TN1013619352
				$driver_list_array = $mobiledata;					
					if($driver_list_array['driver_id'] != null)
					{
						$validator = $this->driver_coming_cancel($driver_list_array);					
						if($validator->check()) 
						{						
							$driver_id= $driver_list_array['driver_id'];
							$start = $driver_list_array['start'];
							$limit = $driver_list_array['limit'];	
							$device_type = $driver_list_array['device_type'];

							/*
							if($device_type == 1)
							$pagination = 1;
							else
							$pagination = 0;
							*/
							$pagination = 0;
							//$ongoing_journey = array();
													
							/***********************Driver Upcoming******************************/					
							$driver_pending_bookings = $api->driver_pending_bookings($driver_id,'R','A','2',$default_companyid);
							if(count($driver_pending_bookings) > 0)
							{
								foreach($driver_pending_bookings as $key => $journey)
								{
									$passenger_photo = isset($journey['passenger_profile_image'])?$journey['passenger_profile_image']:'';			
									if((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo))
									{ 
										 $profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo; 
									}
									else
									{ 
										$profile_image = URL_BASE."public/images/no_image109.png";
									} 
									$driver_pending_bookings[$key]['profile_image']=$profile_image;
									$payment_type=isset($journey['payment_type'])?$journey['payment_type']:'';	
									switch($payment_type)
									{
										case 1:
										$driver_pending_bookings[$key]['payment_type']="Cash";
										break;
										case 2:
										$driver_pending_bookings[$key]['payment_type']="Credit Card";
										break;
										case 3:
										$driver_pending_bookings[$key]['payment_type']="Uncard";
										break;
										case 5:
										$driver_pending_bookings[$key]['payment_type']="Wallet";
										break;
										default:
										$driver_pending_bookings[$key]['payment_type']="Uncard";
										break;
									}
								}
							}
							
							$booktype=1;	
							$pending_booking = $api->driver_past_bookings($pagination,$booktype,$driver_id,'R','A','1',$start,$limit,$default_companyid);
							foreach($pending_booking as $key => $journey)
							{
								$passenger_photo = isset($journey['profile_image'])?$journey['profile_image']:'';			
								if((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo))
								{ 
									 $profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo; 
								}
								else
								{ 
									$profile_image = URL_BASE."public/images/no_image109.png";
								} 
								$pending_booking[$key]['profile_image']=$profile_image;
								$payment_type=isset($journey['payment_type'])?$journey['payment_type']:'';	
								switch($payment_type)
								{
									case 1:
									$pending_booking[$key]['payment_type']="Cash";
									break;
									case 2:
									$pending_booking[$key]['payment_type']="Credit Card";
									break;
									case 3:
									$pending_booking[$key]['payment_type']="Uncard";
									break;
									case 5:
									$pending_booking[$key]['payment_type']="Wallet";
									break;
									default:
									$pending_booking[$key]['payment_type']="Uncard";
									break;
								}
							}
							$detail = ["pending_booking"=>$driver_pending_bookings,"past_booking"=>$pending_booking];
							$message = ["message" => __('success'),"detail"=>$detail,"status"=>1];						
						}
						else
						{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2];							
						}												
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
			/************** Driver upcoming and ongoing details **************************/
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=driver_coming_trips&driver_id=1&start=0&limit=2&device_type=1
			case 'driver_coming_trips':
				//Current Journey after driver confirmation //TN1013619352
				$driver_coming_list_array = $mobiledata;
					if($driver_coming_list_array['driver_id'] != null)
					{
						$validator = $this->driver_coming_cancel($driver_coming_list_array);					
						if($validator->check()) 
						{						
							$driver_id= $driver_coming_list_array['driver_id'];
							$start = $driver_coming_list_array['start'];
							$limit = $driver_coming_list_array['limit'];	
							$device_type = $driver_coming_list_array['device_type'];
							/*
							if($device_type == 1)
							$pagination = 1;
							else
							$pagination = 0;
							*/
							$pagination = 0;
							//$ongoing_journey = array();
							$driver_logs_prog = [];
							
							/*************** Driver Ongoing Journey ***************************/
							$driver_logs_progress = $api->get_driver_current_ongoigtrips($driver_id,'R','A','2',$default_companyid);
							//print_r($driver_logs_progress);
							//exit;
							$driver_logs = [];
							if(count($driver_logs_progress)>0)
							{ $i=0;
								$alldetails = [];
								//for($i=0;$i<count($driver_logs_progress);$i++)
								foreach($driver_logs_progress as $v)
								{
									if($v['bookby']==2 && ($v['travel_status']==9 || $v['travel_status']==3))
									{
										//echo "restrict";
										//$alldetails = __('no_ongoing_data');
										//$ongoing = 0;
									}
									else
									{
										$driver_logs['passenger_name'] = $v['passenger_name'];
										$driver_logs['passenger_phone'] = $v['passenger_phone'];
										if($v['profile_image']!="" && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.$v['profile_image'])){ 
											$profile_image = URL_BASE.PASS_IMG_IMGPATH.$v['profile_image']; 
										}else{ 
											$profile_image = URL_BASE."public/images/no_image109.png";
										}
										$driver_logs['profile_image'] = $profile_image;
										$driver_logs['passengers_log_id'] = $v['passengers_log_id'];
										$driver_logs['pickup_location'] = $v['pickup_location'];
										$driver_logs['drop_location'] = $v['drop_location'];
										$driver_logs['pickup_longitude'] = $v['pickup_longitude'];
										$driver_logs['pickup_latitude'] = $v['pickup_latitude'];
										$driver_logs['drop_latitude'] = $v['drop_latitude'];
										$driver_logs['drop_longitude'] = $v['drop_longitude'];
										$driver_logs['travel_status'] = $v['travel_status'];
										$driver_logs['notes'] = $v['notes'];
										$driver_logs['distance'] = $v['distance'];
										$driver_logs['waiting_hour'] = $v['waiting_hour'];
										$driver_logs['bookby'] = $v['bookby'];

										//$alldetails[] = $v;
										$alldetails[] = $driver_logs;
										//$ongoing = 1;
									}
									$i++;
									
								}
								$ongoing = 1; 
								if(empty($alldetails))
								{
									$alldetails = __('no_ongoing_data');
									$ongoing = 0;
								}
								$ongoing_journey = 	$alldetails;
								$ongoing_status = $ongoing;
								
								foreach($driver_logs_progress as $key => $journey)
								{
									$passenger_photo = $journey['profile_image'];			
									if((!empty($passenger_photo)) && file_exists($_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo))
									{ 
										 $profile_image = URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$passenger_photo; 
									}
									else
									{ 
										$profile_image = URL_BASE."public/images/no_image109.png";
									} 
									$driver_logs_progress[$key]['profile_image']=$profile_image;
								}

							}		
							else
							{
								$ongoing_journey = __('no_ongoing_data');
								$ongoing_status = 0;
							}							
							/***********************Driver Upcoming******************************/					
							$driver_upcoming = $api->get_driver_current_log_details($default_companyid,$pagination,$driver_id,'','A','0',$start,$limit);
							//print_r($driver_upcoming);
							
							if(count($driver_upcoming) > 0)
							{
								$upcoming_journey = $driver_upcoming;
								$upgoing_status = 1;
							}	
							else
							{
								$upcoming_journey = __('no_upcoming_data');
								$upgoing_status = 0;
							}				
							$detail = ["ongoing_journey"=>$ongoing_journey,"upcoming_journey"=>$upcoming_journey];
							$message = ["message" => __('success'),"detail"=>$detail,"ongoing_status"=>$ongoing_status,"upcoming_status"=>$upgoing_status];						
						}
						else
						{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>2];							
						}												
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
							
			//URL : api/?type=update_ratings_comments&pass_id=1&ratings=&comments=	
			case 'update_ratings_comments':
			$rating_array = $mobiledata;
					if($rating_array['pass_id'] != null)
					{
						$validator = $this->update_ratings_comments_validation($rating_array);
						
						if($validator->check()) 
						{
							$pass_id= $rating_array['pass_id'];
							$ratings = $rating_array['ratings'];
							$comments = $rating_array['comments'];						
							$api->savecomments($pass_id,$ratings,$comments);
							$message = ["message" => __('rate_comment_updated'),"status"=>1];
						}	
						else
						{							
							
							$errors = $validator->errors('errors');		
							$message = ["message" => __('validation_error'),"detail"=>$errors,"status"=>-2];	
						}																						
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
					//URL : http://192.168.1.88:1009/api/index/?type=get_credit_card_details&passenger_id=58&card_type=P&default=yes
				case 'get_credit_card_details':
					$array = $mobiledata;
					$passenger_id = $array['passenger_id'];
					$default = $array['default'];
					$card_type = strtoupper($array['card_type']);
					if($array['passenger_id'] != null)
					{												
							$result = $api->get_creadit_card_details($passenger_id,$card_type,$default);
							if(count($result)>0)
							{
								$carddetails = [];
								if($default == 'yes')
								{									
									$plain_cardno = encrypt_decrypt('decrypt',$result[0]['creditcard_no']);
									$carddetails['creditcard_no'] = $plain_cardno;
									$carddetails['masked_creditcard_no'] = repeatx($plain_cardno,'X',4);
									$carddetails['expdatemonth'] = $result[0]['expdatemonth'];
									$carddetails['expdateyear'] = $result[0]['expdateyear'];
									$carddetails['creditcard_cvv'] = "";//$result[0]['creditcard_cvv'];
									$carddetails['masked_creditcard_cvv'] = "";//repeatx($result[0]['creditcard_cvv'],'X','All');		
									$carddetails['passenger_cardid'] = $result[0]['passenger_cardid'];
									$carddetails['card_type'] = $result[0]['card_type'];									
									$message = ["message" =>__('success'),"detail"=>$carddetails,"status"=>1];					
								}
								else
								{
									$i = 0;
									$alldetails = [];
									foreach($result as $value)
									{
										$plain_cardno = encrypt_decrypt('decrypt',$value['creditcard_no']);
										$carddetails['creditcard_no'] = $plain_cardno;
										$carddetails['masked_creditcard_no'] = repeatx($plain_cardno,'X',4);
										$carddetails['expdatemonth'] = $value['expdatemonth'];
										$carddetails['expdateyear'] = $value['expdateyear'];
										$carddetails['creditcard_cvv'] = "";//$value['creditcard_cvv'];
										$carddetails['masked_creditcard_cvv'] = "";//repeatx($value['creditcard_cvv'],'X','All');		
										$carddetails['default_card'] = $value['default_card'];
										$carddetails['passenger_cardid'] = $value['passenger_cardid'];										
										$carddetails['card_type'] = $value['card_type'];
										$alldetails[] = $carddetails;
										$i = $i+1;										
									}
									$message = ["message" =>__('success'),"detail"=>$alldetails,"status"=>1];	
								}								
							}
							else
							{
								$message = ["message" =>__('no_card'),"status"=>2];
							}
					}	
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}			
			echo json_encode($message);
			break;
			
			/** Credit Card delete option//
			 * URI : http://192.168.1.116:1013/mobileapi114/index/dGF4aV9hbGw=/?type=credit_card_delete
			 * Params : {"passenger_cardid":"1125","passenger_id":"123"}
			 * **/
			case 'credit_card_delete':
				if(!empty($mobiledata['passenger_cardid']) && !empty($mobiledata['passenger_id'])) {
					$favourite_details = $api->delete_credit_card($mobiledata['passenger_cardid'], $mobiledata['passenger_id']);
					if($favourite_details) {
						$message = ["message" => __('credit_card_deleted'),"status"=>1];
					} else {
						$message = ["message" =>__('invalid_card_id'),"status"=>2];
					}
				} else {
					$message = ["message" =>__('invalid_card_id'),"status"=>2];
				}
				echo json_encode($message);
			break;
			
			//URL : api/?type=update_driver_reply&pass_id=1&driver_reply=C
			
			case 'update_driver_reply':
			$update_driver_array = $mobiledata;
					if($update_driver_array['pass_id'] != null)
					{
						$pass_id= $update_driver_array['pass_id'];
						$driver_reply= $update_driver_array['driver_reply'];
						
						$update_array = ["driver_reply"=>$driver_reply];						
						
						$api->update_table(PASSENGERS_LOG,$update_array,"passengers_log_id",$pass_id);
						$message = ["message" => __('get_another_taxi'),"status"=>1];																		
					}
					else
					{
						$message = ["message" =>  __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
			
								
			/*END OF PASSENGER DETAILS*/
			
			/*START OF DRIVER DETAILS*/
			//http://192.168.1.88:1000/api/index/wiOBAfPKdmAr544Tl1ayDEsUQN9Og3/?type=driver_profile&userid=6
			//URL : api/?type=driver_profile&userid=1
			case 'driver_profile':
			$driver_array = $mobiledata;
					if($driver_array['userid'] != null)
					{
						$check_driver_login_status = $this->is_login_status($driver_array['userid'],$default_companyid);
						if($check_driver_login_status == 1)
						{ 
								$result = $api->driver_profile($driver_array['userid']);
								if(count($result) >0)
								{
																
									  $name = $result[0]['name'];
									  $salutation = $result[0]['salutation'];
									  $email = $result[0]['email'];
									  $phone = $result[0]['phone'];
									  $profile_picture = $result[0]['profile_picture'];
									  $address = $result[0]['address'];
									  $driver_license_id = $result[0]['driver_license_id'];
									  $lastname = $result[0]['lastname'];
									  $bankname = $result[0]['bankname'];
									  $bankaccount_no = $result[0]['bankaccount_no'];
									  $taxi_no = $result[0]['taxi_no'];
									  $mapping_startdate = $result[0]['mapping_startdate'];
									  $mapping_enddate = $result[0]['mapping_enddate'];
									  $model_name = $result[0]['model_name'];
									/************************************Driver Image *******************************/					
									$main_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DRIVER_IMGPATH.$profile_picture;
									$thumb_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DRIVER_IMGPATH.'thumb_'.$profile_picture;
									if(file_exists($main_image_path) && ($profile_picture !=''))
									{
										//echo 'as';
									$driver_main_image = URL_BASE.SITE_DRIVER_IMGPATH.$profile_picture;
									}else{
										//echo 'as';
									$driver_main_image = URL_BASE."/public/images/noimages109.png";
									}		

									if(file_exists($thumb_image_path) && ($profile_picture !=''))
									{
									$driver_thumb_image = URL_BASE.SITE_DRIVER_IMGPATH.'thumb_'.$profile_picture;
									}else{
									$driver_thumb_image = URL_BASE."/public/images/noimages109.png";
									}	
									
									$dresult = $api->driver_ratings($driver_array['userid']);
									$totalrating=0;
									if(count($dresult) > 0)
									{
										$overall_rating = 0; $i=0; $trip_total_with_rate=0;
									
										foreach($dresult as $comments)
										{
											if($comments['rating'] != 0)
											$trip_total_with_rate++;
											$rating = $comments['rating'];
											//print_r($comments);
											$overall_rating += $comments['rating'];
											$i++;	
										}
																				
										if($trip_total_with_rate!=0 && $overall_rating!=0){
											$totalrating = $overall_rating/$trip_total_with_rate;
										}							
										$totalrating = round($totalrating);									
									}
										
									$result = [
									"salutation" => $salutation,
									"name" => $name,
									"lastname"=>$lastname,
									"bankname"=>$bankname,
									"bankaccount_no"=>$bankaccount_no,
									"email"=> $email,
									"phone"=>$phone,
									"main_image_path" => $driver_main_image,
									"thumb_image_path" => $driver_thumb_image,
									"address" => $address,
									"taxi_no" => $taxi_no,
									"taxi_map_from" => $mapping_startdate,
									"taxi_map_to" => $mapping_enddate,
									"taxi_model" => $model_name,
									"driver_license_id" => $driver_license_id,
									"driver_rating" => $totalrating
									];
									$message = ["message" =>__('success'),"detail"=>$result,"status"=>1];	
								}
								else
								{
									$message = ["message" => __('invalid_user_driver'),"status"=>0];	
								}
						}
						else
						{
							$message = ["message" => __('driver_not_login'),"status"=>-1];
						}
								
					}
					else
					{
						$message = ["message" => __('invalid_user_driver'),"status"=>-1];	
					}
					echo json_encode($message);
					break;

			//URL : http://192.168.1.88:1003/api/index/dGF4aV9hbGw=/?type=driver_login&phone=9999988888&password=a4321f23a0119191688621018a0b2b0b&device_id=dfff&device_token=4534534&device_type=2
			case 'driver_login':
					$array = $mobiledata;
					//print_r($array);
					if(!empty($array))
					{
						$validator = $this->driver_login_validation($array);
						$driver_model = Model::factory('driver');
						if($validator->check())
						{
								$phone_exist = $api->check_phone_people($array['phone'],'D',$default_companyid);
								if($phone_exist == 0)
								{
									$message = ["message" =>  __('phone_not_exists'),"status"=> 2];
									echo json_encode($message);
									exit;									
								}		
								else
								{						
									$result = $api->driver_login($array['phone'],$array['password'],$default_companyid);								
									if(count($result) > 0)
									{	
										//Checking the User Status						
										$user_status = $result[0]['status'];
										$login_status = $result[0]['login_status'];
										$login_from = $result[0]['login_from'];
										$device_token = $result[0]['device_token'];
										$device_id = $result[0]['device_id'];
										$company_id = $result[0]['company_id'];
										$driver_id = $result[0]['id'];
										$driver_details = $api->driver_profile($driver_id);
										//print_r($driver_details);
										if($user_status == 'D')
										{
										$message = ["message" => __('account_deactivte'),"status"=> 0];								
										}
										else if($user_status == 'T')
										{
										$message = ["message" => __('account_deactivte'),"status"=> 0];	
										}
										else if(($login_status == 'S') && ($login_from == 'D') && ($device_id != $array['device_id']))
										{
										$message = ["message" => __('already_login'),"status"=> 0];								
										}					
										else if(($login_status == 'S') && ($login_from == 'D') && ($device_id == $array['device_id']))
										{
											
											$driver_status = 'F';
											$taxi_id = "";
											$getTaxiforDriver = $api->getTaxiforDriver($driver_id,$company_id);	

											if(count($getTaxiforDriver) > 0 )
											{
												$driver_reply = $api->update_driver_shift_status($driver_id,'IN');
											$taxi_id = $getTaxiforDriver[0]['mapping_taxiid'];														
											$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
											$insert_array = [
																	"driver_id" => $driver_id,
																	"taxi_id" 			=> $taxi_id,												
																	"shift_start" 	=> $company_all_currenttimestamp,
																	"shift_end"		=> "",
																	"reason"		=> "",
																	"createdate"		=> $this->currentdate,
																];																								
											//Inserting to Transaction Table 
											$transaction = $this->commonmodel->insert(DRIVERSHIFTSERVICE,$insert_array);	
											//print_r($transaction);		
											$shiftupdate_id = mysql_insert_id();											
											/***** Check whether new trips or payment waiting trips is availavble for the driver ********/
											$trip_id = $travel_status = "";
											$get_driver_trip_details = $api->get_driver_log_details($driver_id,$company_id);
											//print_r($get_driver_log_details);
											$driver_trip_count = count($get_driver_trip_details);//exit;
											if($driver_trip_count > 0)
											{												
												foreach($get_driver_trip_details as $details)
												{
													$trip_id = $details->passengers_log_id;
													$travel_status = $details->travel_status;
													$driver_status =  ($travel_status != '9') ?  'A' : $driver_status;
												}
											}
											/********************************************************************************************/
											$driver_details[0]["shiftupdate_id"]=$shiftupdate_id;
											$driver_details[0]["taxi_id"]=$taxi_id;	
											$driver_details[0]["trip_id"]=$trip_id;
											$driver_details[0]["travel_status"]=$travel_status;
											$driver_details[0]["driver_status"]=$driver_status;		
											$driver_details[0]["shift_status"]='IN';															
											// Driver Statistics ********************/
											$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$company_id);	
											$rejected_trips = count($driver_logs_rejected);	
											//to get cancelled trip counts from drivers
											$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$company_id);
											$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$company_id);
											$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
											$statistics = [];
											$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
																			
											foreach($driver_earnings as $stat){
											$total_trip++;
											$total_ratings += $stat['rating'];
											$total_amount += $stat['total_amount'];											
											}
											$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;							
											$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
											$statistics = [ 
												"total_trip" => $overall_trip,
												"completed_trip" => $total_trip,
												"total_earnings" => round($driver_tot_earnings,2),
												"overall_rejected_trips" => $rejected_trips,
												"cancelled_trips" => $driver_cancelled_trips,
												"today_earnings"=>round($total_amount,2),											
												"shift_status"=>'IN',
												"time_driven"=>$time_driven,
												"status"=> 1
											  ]; 
											$driver_details[0]["driver_statistics"]=$statistics;				
											/**************************************************/		
											$details = ["driver_details"=>$driver_details];
											$message = ["message" => __('login_success'),"status"=> 1,"detail"=>$details];		
											}
											else
											{
												$message = ["message" => __('taxi_not_assigned'),"status"=>-3];
											}	
										}		
										/*else if(($login_status == 'S') && ($login_from == 'W'))
										{
										$message = array("message" => __('alteady_login_website'),"status"=> 0);
										}*/								
										else
										{
											$update_id = $result[0]['id'];
											//print_r($login_status_update);
											
											$driver_status = 'F';
											$taxi_id = "";
											$getTaxiforDriver = $api->getTaxiforDriver($driver_id,$company_id);	

													if(count($getTaxiforDriver) > 0 )
													{
														$update_array  = ["notification_setting"=>"1","login_from"=>"D","login_status"=>"S","device_id" => $array['device_id'],"device_token" => $array['device_token'],"device_type" => $array['device_type'],"notification_status"=>"1"];							
														// Need for update labong settings automatically
														$login_status_update = $api->update_driver_phone($update_array,$update_id,$default_companyid);
																	//Enable Driver Shift status
														$driver_reply = $api->update_driver_shift_status($driver_id,'IN');
													$taxi_id = $getTaxiforDriver[0]['mapping_taxiid'];														
													$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
													$insert_array = [
																			"driver_id" => $driver_id,
																			"taxi_id" 			=> $taxi_id,												
																			"shift_start" 	=> $company_all_currenttimestamp,
																			"shift_end"		=> "",
																			"reason"		=> "",
																			"createdate"		=> $this->currentdate,
																		];								
													//Inserting to Transaction Table 
													$transaction = $this->commonmodel->insert(DRIVERSHIFTSERVICE,$insert_array);	
													//print_r($transaction);		
													$shiftupdate_id = mysql_insert_id();
													/***** Check whether new trips or payment waiting trips is availavble for the driver ********/
													$trip_id = $travel_status = "";
													$get_driver_trip_details = $api->get_driver_log_details($update_id,$company_id);
													//print_r($get_driver_log_details);
													$driver_trip_count = count($get_driver_trip_details);//exit;
													if($driver_trip_count > 0)
													{												
														foreach($get_driver_trip_details as $details)
														{
															$trip_id = $details->passengers_log_id;
															$travel_status = $details->travel_status;
															$driver_status =  ($travel_status != '9') ?  'A' : $driver_status;
														}												
													}	
													/*************************************************************************************/
													$driver_details[0]["shiftupdate_id"]=$shiftupdate_id;
													$driver_details[0]["taxi_id"]=$taxi_id;			
													$driver_details[0]["trip_id"]=$trip_id;
													$driver_details[0]["travel_status"]=$travel_status;
													$driver_details[0]["driver_status"]=$driver_status;	
													$driver_details[0]["shift_status"]='IN';			
											// Driver Statistics ********************/
											$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$company_id);
											$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$company_id);	
											$rejected_trips = count($driver_logs_rejected);	
											$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$company_id);
											$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
											$statistics = [];
											$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
																			
											foreach($driver_earnings as $stat){
											$total_trip++;
											$total_ratings += $stat['rating'];
											$total_amount += $stat['total_amount'];											
											}
											$overall_trip = $total_trip + $rejected_trips+	$driver_cancelled_trips;				
											$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
											$statistics = [ 
												"total_trip" => $overall_trip,
												"completed_trip" => $total_trip,
												"total_earnings" => round($driver_tot_earnings,2),
												"overall_rejected_trips" => $rejected_trips,
												"cancelled_trips" => $driver_cancelled_trips,
												"today_earnings"=>round($total_amount,2),											
												"shift_status"=>'IN',
												"time_driven"=>$time_driven,
												"status"=> 1
											  ]; 
											$driver_details[0]["driver_statistics"]=$statistics;				
											/**************************************************/
											$details = ["driver_details"=>$driver_details];
													$message = ["message" => __('login_success'),"status"=> 1,"detail"=>$details];		
													}
													else
													{
														$message = ["message" => __('taxi_not_assigned'),"status"=>-3];
													}				
										}
									}
									else
									{
										$message = ["message" => __('password_failed'),"status"=> -1];							
									}						
								echo json_encode($message);
							}
						}
						else
						{
							$errors = $validator->errors('errors');	
							$message = ["message" => __('validation_error'),"status"=>-5,"detail"=>$errors];	
							echo json_encode($message);
							exit;					
						}
					}
					else
					{
							$message = ["message" => __('invalid_request'),"status"=>-6];	
							echo json_encode($message);						
					}						
										
					break;
		//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=edit_driver_profile&driver_id=3&email=senthilkumar.a@ndot.in&phone=9999988888&salutation=Mr&firstname=senthil&lastname=kumar&password=e10adc3949ba59abbe56e057f20f883e&org_password=123456&profile_picture=&bankname=&bankaccount_no=
		
					case 'edit_driver_profile':					
					$d_personal_array = $mobiledata;
					//print_r($d_personal_array);
					//exit;
					if(!empty($d_personal_array))
					{
							$driver_id = $d_personal_array['driver_id'];
							//print_r($array);
							//exit;
							if($d_personal_array["driver_id"] != null)
							{
								$validator = $this->edit_passenger_profile_validation($d_personal_array);						
								if($validator->check())
								{
									$d_email = $d_personal_array['email'];
									$d_phone = $d_personal_array['phone'];
									$password = $d_personal_array['password'];					
									$bankname = $d_personal_array['bankname'];
									$bankaccount_no = $d_personal_array['bankaccount_no'];
									$email_exist = $api->edit_check_email_people($d_email,$driver_id);
								    $phone_exist = $api->edit_check_phone_people($d_phone,$driver_id);
									if($email_exist > 0)
									{
										$message = ["message" => __('email_exists'),"status"=> 0];
										//echo json_encode($message);
									}
									else if($phone_exist > 0)
									{
										$message = ["message" => __('phone_exists'),"status"=> 2];
										//echo json_encode($message);
									}
									else
									{			
												if($d_personal_array['profile_picture'] != NULL)
												{
												/* Profile Update */
												$imgdata = base64_decode($d_personal_array['profile_picture']);
												
												$f = finfo_open();
												$mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
												//echo '<img src="data:image/jpg;base64,' . $d_personal_array['profile_picture'] . '" />';
												//print_r($mime_type);
												//exit;
												$mime_type = explode('/',$mime_type);
												$mime_type = $mime_type[1];
												
												$img = imagecreatefromstring($imgdata); 
												if($img != false)
												{                   
													$result = $api->driver_profile($d_personal_array['driver_id'],$default_companyid);
													if(count($result) >0)
													{
														$profile_picture = $result[0]['profile_picture'];
														$thumb_image = 'thumb_'.$profile_picture;
														$main_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DRIVER_IMGPATH.$profile_picture;
														$thumb_image_path = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DRIVER_IMGPATH.'thumb_'.$profile_picture;
														if(file_exists($main_image_path) &&($profile_picture != ""))
														{
															unlink($main_image_path);
														}
														if(file_exists($thumb_image_path) && ($thumb_image != ""))
														{
															unlink($thumb_image_path);
														}
													}											//unlink($filename);
													$image_name = uniqid().'.'.$mime_type;
													$thumb_image_name = 'thumb_'.$image_name;
													$image_url = DOCROOT.SITE_DRIVER_IMGPATH.'/'.$image_name;                    								
													//header('Content-Type: image/jpeg');					
													$image_path = DOCROOT.SITE_DRIVER_IMGPATH.$image_name;  
													imagejpeg($img,$image_url);
													imagedestroy($img);
													chmod($image_path,0777);
													$d_image = Image::factory($image_path);
													$path11=DOCROOT.SITE_DRIVER_IMGPATH;
													//Commonfunction::imageresize($d_image,PASS_IMG_WIDTH, PASS_IMG_HEIGHT,$path11,$image_name,90);
													Commonfunction::imageoriginalsize($d_image,$path11,$image_name,90);
													
													$path12=$thumb_image_name;
													Commonfunction::imageresize($d_image,PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT,$path11,$thumb_image_name,90);
													//Commonfunction::imageoriginalsize($d_image,$path11,$thumb_image_name,90);
													if($password != "")
													{
													$update_array = [	
													"id"=>$d_personal_array['driver_id'],						
													"salutation"=>$d_personal_array['salutation'],
													"name" => $d_personal_array['firstname'],
													"lastname" => $d_personal_array['lastname'],
													"email" => $d_email,
													"phone" => $d_phone,
													"password" => md5($password),
													"org_password" => $password,
													"profile_picture" => $image_name];
													}
													else
													{
													$update_array = [	
													"id"=>$d_personal_array['driver_id'],						
													"salutation"=>$d_personal_array['salutation'],
													"name" => $d_personal_array['firstname'],
													"lastname" => $d_personal_array['lastname'],
													"email" => $d_email,
													"phone" => $d_phone,
													"profile_picture" => $image_name];
													}
													$bank_update_array = [
													"id"=>$d_personal_array['driver_id'],
													"bankname" => $bankname,
													"bankaccount_no" => $bankaccount_no];
													$message = $api->edit_driver_profile($update_array,$default_companyid);
													$update_bank = $api->edit_company_profile($bank_update_array);
													//$message = $api->edit_company_profile($update_array);
													
												//chmod($image_path, 0777);                    
												}
												else
												{
													$message = ["message" => __('image_not_upload'),"status"=>4];								
												}
												
											}
											else
											{
													if($password != "")
													{
													$update_array = [	
													"id"=>$d_personal_array['driver_id'],						
													"salutation"=>$d_personal_array['salutation'],
													"name" => $d_personal_array['firstname'],
													"lastname" => $d_personal_array['lastname'],
													"email" => $d_email,
													"phone" => $d_phone,
													"password" => md5($password),
													"org_password" => $password];
													}
													else
													{
													$update_array = [	
													"id"=>$d_personal_array['driver_id'],						
													"salutation"=>$d_personal_array['salutation'],
													"name" => $d_personal_array['firstname'],
													"lastname" => $d_personal_array['lastname'],
													"email" => $d_email,
													"phone" => $d_phone];
													}
													$bank_update_array = [
													"id"=>$d_personal_array['driver_id'],
													"bankname" => $bankname,
													"bankaccount_no" => $bankaccount_no];
													$message = $api->edit_driver_profile($update_array,$default_companyid);
													$update_bank = $api->edit_company_profile($bank_update_array);
											}
												/*****************************************/
																					
												if($message == 0)
												{
													$message = ["message" => __('profile_updated'),"status"=>1];	
												}	
												else
												{
													$message = ["message" => __('try_again'),"status"=>1];	
												}																				
											}				
									}
								else
								{							
									$errors = $validator->errors('errors');	
									$message = ["message" => __('validation_error'),"status"=>-5,"detail"=>$errors];		
								}
							}
							else
							{
								$message = ["message" => __('invalid_user_driver'),"status"=>-1];	
							}
					}
					else
					{
						$message = ["message" => __('invalid_request'),"status"=>-1];	
					}
					
					echo json_encode($message);
					break;
					
			/*URL : api?type=chg_password_driver&id=7&old_password=a4541576840a7a08f5331f84491d915d&new_password=e10adc3949ba59abbe56e057f20f883e&confirm_password=e10adc3949ba59abbe56e057f20f883e&org_new_password=123456
			*/
			case 'chg_password_driver':
			$driver_chg_password = $mobiledata;
					if($driver_chg_password['id'] != null)
					{
						$validator = $this->chg_password_passenger_validation($driver_chg_password);
						
						if($validator->check())
						{
							//array_shift($array);
							//array_shift($array);
							$message = $api->chg_password_passenger($driver_chg_password,PEOPLE,$default_companyid,'D');	
							
							//{-1 : confirm password must be the same as new password , -2 : Old Password is In Correct: -3: Invalid User,1:Password Changed Successfully	}
							
							switch($message){
								case -1 :
									$message = ["message" => __('confirm_new_same'),"status"=>-1];	
									break;
								case -2 :
									$message = ["message" => __('old_pass_incorrect'),"status"=>-2];
									break;
								case -3 :
									$message = ["message" => __('invalid_user'),"status"=>-3];
									break;
								case 1 :
									$message = ["message" => __('password_changed'),"status"=>1];	
									break;
								case -4 :
									$message = ["message" => __('old_new_pass_same'),"status"=>-4];	
									break;
								}
							
						}
						else
						{							
							$message = $validator->errors('errors');			
						}
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>0];	
					}
					echo json_encode($message);
					break;
			//URL: http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getdriver_update&passenger_tripid=703
			case 'getdriver_update':
						ignore_user_abort(true);
						$array = $mobiledata;
						$message = [];
						$trip_id = $array["passenger_tripid"];						
						$notification_time = $this->notification_time;			
						//exit;									
						if($notification_time != 0 ){ $timeoutseconds = $notification_time;}else{$timeoutseconds = 15;}
						$timeout = $this->continuous_request_time;//$timeoutseconds; // timeout in seconds
						$microseconds = $timeout*1000000; //Seconds to microseconds 1 second = 1000000 
						$flag = 0;
						$now = time();
						//exit;
						$search_flag=0;						
						if((int)$trip_id != "") 
						{					
							//echo 'as';								
								$i = 0;		
								while((time() - $now) < $timeout)
								{	
									$driver_status = $api->get_request_status($trip_id);	
									//print_r($driver_status);
									$driver_status_count=count($driver_status);
									
									if($driver_status_count >0)
									{
										$req_count=$driver_status_count*$timeoutseconds;
										//$microseconds = $req_count*1000000; //Seconds to microseconds 1 second = 1000000
										//echo $req_count;exit;
										$driver_reply = $driver_status[0]['status'];
										$selected_driver_id = $driver_status[0]['selected_driver'];
										$available_drivers = explode(',',$driver_status[0]['total_drivers']);
										$rejected_timeout_drivers = explode(',',$driver_status[0]['rejected_timeout_drivers']);	
										$comp_result = array_diff($available_drivers, $rejected_timeout_drivers);
										
										$timeout=count($available_drivers)*25+20;
										if($timeout < $this->continuous_request_time)
										{
											$timeout=$this->continuous_request_time;
										}
										$microseconds=$timeout*1000000;
										//to get drivers company timestamp
										$company_det =$api->get_company_id($selected_driver_id);
										if(count($company_det)>0){
											
											$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_det[0]['company_id']);
										}
										//condition to check driver not updated for above 30seconds if it is means we should change the request to next driver
										$driver_not_updated = $api->check_driver_not_updated($selected_driver_id,$company_all_currenttimestamp);
										//$time_difference=time()-strtotime($driver_not_updated);
										$time_difference = strtotime($company_all_currenttimestamp) - strtotime($driver_not_updated);
										if($time_difference > 25 && count($comp_result) != 0 && $driver_reply != '4') {
											$get_request_dets=$api->check_new_request_tripid("","",$trip_id,$selected_driver_id,$company_all_currenttimestamp,"");
										}
										//echo count($comp_result);
										if(count($comp_result) == 0)
										{
											$driver_reply  = 5;
										}

										//exit;
										if(!empty($driver_reply))
										{
											if($driver_reply == '3') 
											{
												$message = ["message" => __("request_confirmed_passenger"),"trip_id"=>$trip_id,"status"=>1];
												echo json_encode($message);
												exit;
											}
											elseif($driver_reply == '4')
											{
												$message = ["message" => __("driver_busy"),"status"=>2];
												echo json_encode($message);
												exit;
											}
											elseif($driver_reply == '5')
											{
												$message = ["message" => __("driver_busy"),"status"=>2];
												echo json_encode($message);
												exit;
											}
											else 
											{				
												$message = ["message" => __('try_again'),"status"=>0];
											}
											//echo json_encode($message);
											//exit;
										}
										usleep(5000000);	
												
										$i = $i+5000000;
										// echo $i;
										if($i == $microseconds)
										{
												$update_trip_array  = ["status"=>'4'];
												$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);
												$message = ["message" => __("driver_busy"),"status"=>2];
												echo json_encode($message);
												exit;											
										}							
									}
									else
									{
										$message = ["message" => __('try_again'),"status"=>0];	
										exit;
									}										
								}
																													
						}
						else
						{
							$message = ["message" => __('validation_error'),"status"=>0];	
						}
				echo json_encode($message);
				break;
            //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getdriver_reply&passenger_tripid=346					
			case 'getdriver_reply':
				$array = $mobiledata;
				if($array['passenger_tripid'] != null)
				{
					$passenger_tripid = $array["passenger_tripid"];
					$get_passenger_log_det = $api->get_trip_detail_only($passenger_tripid);
					if(count($get_passenger_log_det) > 0)															    		
					{
						//print_r($get_passenger_log_det);
						$driver_reply = $get_passenger_log_det[0]->driver_reply;
						if($driver_reply == 'A')
						{
							$detail = ["trip_id"=>$passenger_tripid,"driverdetails"=>""];
							$message = ["message" => __("request_confirmed_passenger"),"detail"=>$detail,"status"=>1];
						}
						else
						{
							$change_driver_status = $api->change_driver_status($passenger_tripid,'C');
							$update_trip_array  = ["status"=>'4'];
							$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_tripid);		
							$message = ["message" => __("request_canceled_passenger"),"status"=>3];
						}
					}
					else
					{
						$message = ["message" => __('invalid_trip'),"status"=>-1];	
					}
				}
				else
				{
					$message = ["message" => __('try_again'),"status"=>0];	
				}
				echo json_encode($message);
				break;

            //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=getpassenger_update&trip_id=627&request_type=0					
			case 'getpassenger_update':
				$array = $mobiledata;				
				$validator = $this->getpassenger_update_validation($array);						
				if($validator->check())
				{
							$trip_id = isset($array["trip_id"])?$array["trip_id"]:'';
							$passenger_id = $array["passenger_id"];
							$request_type = $array['request_type'];

							if($request_type == 0)
							{
								
								$arrived_display = $tripstart_display = $trip_complete_display = $tripfare_update_display = $driver_cancel_display = 0;
								
								$amt="";$pickup="";
								$get_passenger_log_det = $api->get_request_detail($passenger_id);					
								if(count($get_passenger_log_det) == 1)
								{
									//print_r($get_passenger_log_det);
									//$driver_status = $api->get_request_status($trip_id);
									$driver_reply = $get_passenger_log_det[0]->driver_reply;
									$travel_status = $get_passenger_log_det[0]->travel_status;
									$driver_id = $get_passenger_log_det[0]->driver_id;
									$transId = $get_passenger_log_det[0]->job_ref;
									$amt = round($get_passenger_log_det[0]->amt,2);
									$pickup_location = $get_passenger_log_det[0]->pickup_location;
									$notification_status = $get_passenger_log_det[0]->notification_status;
									/************** Driver Location ***************************/
									$driver_latitute = $driver_longtitute = '0.0';
									$current_driver_status = $api->get_driver_current_status($driver_id);
									if(count($current_driver_status)>0)
									{
										foreach($current_driver_status as $driver_details)
										{
											$trip_status = $driver_details->status;
											$driver_latitute = $driver_details->latitude;
											$driver_longtitute = $driver_details->longitude;									
										}
									}					
									/**********************************************************/	
									if(($driver_reply == 'A') && ($travel_status == 9))
									{
										$detail = ["trip_id"=>$trip_id,"driverdetails"=>""];
										$message = ["message" => __("request_confirmed_passenger"),"detail"=>$detail,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>1];
									}
									elseif(($driver_reply == 'A') && ($travel_status == 8))
									{
										$dispatcher_cancel_display = ($notification_status != 8) ?  1 : 0;
										$message = ["message" => __("dispatcher_trip_cancelled"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>10,"display"=>$dispatcher_cancel_display];
										$update_trip_array  = ["notification_status"=>'8'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
									}
									elseif(($driver_reply == 'C') && ($travel_status == 6))
									{
										$message = ["message" => __("trip_cancel"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>7];
									}
									elseif(($driver_reply == 'C') && ($travel_status == 9))
									{
										$driver_cancel_display = ($notification_status != 5) ?  1 : 0;										
										$message = ["message" => __("driver_cancel_after_confirm"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>8,"display"=>$driver_cancel_display];
										$update_trip_array  = ["notification_status"=>'5'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
									}
									elseif(($driver_reply == 'A') && ($travel_status == 3))
									{										
										$arrived_display = ($notification_status != 1) ?  1 : 0;										
										$message = ["message"=>__('passenger_on_board'),"trip_id"=>$trip_id,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>2,"display"=>$arrived_display];
										$update_trip_array  = ["notification_status"=>'1'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
									}
									elseif(($driver_reply == 'A') && ($travel_status == 2))
									{
										$tripstart_display = ($notification_status != 2) ?  1 : 0;
										$actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
										//$change_driver_status = $passengers->change_driver_status($passenger_tripid,'C');
										//$update_trip_array  = array("status"=>'4');
										//$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_tripid);		
										$message = ["message" =>__('journey_started'),"pickup_time"=>$actual_pickup_time,"trip_id"=>$trip_id,"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>3,"display"=>$tripstart_display];	
										$update_trip_array  = ["notification_status"=>'2'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
									}
									elseif(($driver_reply == 'A') && ($travel_status == 5))
									{
										$trip_complete_display = ($notification_status != 3) ?  1 : 0;
										$message = ["message"=>__('trip_completed'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>4,"display"=>$trip_complete_display];		
										$update_trip_array  = ["notification_status"=>'3'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
									}
									elseif(($driver_reply == 'A') && ($travel_status == 1) && $transId != 0)
									{
										$tripfare_update_display = ($notification_status != 4) ?  1 : 0;
										$message = ["message" => __('trip_fare_updated'),"fare" => $amt,"trip_id"=>$trip_id,"pickup" => $pickup_location, "status"=>5,"display"=>$tripfare_update_display,"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute];	
										$update_trip_array  = ["notification_status"=>'4'];
										$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
									}
									elseif(($driver_reply == 'A') && ($travel_status == 4))
									{
										$message = ["message" => __('trip_cancelled_passenger'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute, "status"=>9];	
									}									
									else
									{
										$message = ["message"=>__('trip_not_started'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>6];
									}
									
								}
								else if(count($get_passenger_log_det) > 0)
								{
									foreach($get_passenger_log_det as $status)
									{

										$driver_reply = $status->driver_reply;
										$trip_id = $status->trip_id;
										$travel_status = $status->travel_status;
										$driver_id = $status->driver_id;
										$transId = $status->job_ref;
										$amt = round($status->amt,2);
										$pickup_location = $status->pickup_location;
										$notification_status = $status->notification_status;
										/************** Driver Location ***************************/
										$driver_latitute = $driver_longtitute = '0.0';
										$current_driver_status = $api->get_driver_current_status($driver_id);
										if(count($current_driver_status)>0)
										{
											foreach($current_driver_status as $driver_details)
											{
												$trip_status = trim($driver_details->status);
												$driver_latitute = trim($driver_details->latitude);
												$driver_longtitute = trim($driver_details->longitude);									
											}
										}					
										/**********************************************************/	
										if(($driver_reply == 'A') && ($travel_status == 9))
										{
											$detail = ["trip_id"=>$trip_id,"driverdetails"=>""];
											$message = ["message" => __("request_confirmed_passenger"),"detail"=>$detail,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>1];
										}
										elseif(($driver_reply == 'A') && ($travel_status == 8))
										{
											$dispatcher_cancel_display = ($notification_status != 8) ?  1 : 0;
											$message = ["message" => __("dispatcher_trip_cancelled"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>10,"display"=>$dispatcher_cancel_display];
											$update_trip_array  = ["notification_status"=>'8'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
										}
										elseif(($driver_reply == 'C') && ($travel_status == 6) && ($notification_status != 5) )
										{
											$message = ["message" => __("trip_cancel"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>7];
											$update_trip_array  = ["notification_status"=>'5'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
										}
										elseif(($driver_reply == 'C') && ($travel_status == 9))
										{
											$driver_cancel_display = ($notification_status != 5) ?  1 : 0;										
											$message = ["message" => __("driver_cancel_after_confirm"),"detail"=>"","driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>8,"display"=>$driver_cancel_display];
											$update_trip_array  = ["notification_status"=>'5'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
										}
										elseif(($driver_reply == 'A') && ($travel_status == 3))
										{										
											$arrived_display = ($notification_status != 1) ?  1 : 0;										
											$message = ["message"=>__('passenger_on_board'),"trip_id"=>$trip_id,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>2,"display"=>$arrived_display];
											$update_trip_array  = ["notification_status"=>'1'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);
										}
										elseif(($driver_reply == 'A') && ($travel_status == 2))
										{
											$tripstart_display = ($notification_status != 2) ?  1 : 0;
											$actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											//$change_driver_status = $passengers->change_driver_status($passenger_tripid,'C');
											//$update_trip_array  = array("status"=>'4');
											//$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_tripid);		
											$message = ["message" =>__('journey_started'),"pickup_time"=>$actual_pickup_time,"trip_id"=>$trip_id,"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>3,"display"=>$tripstart_display];	
											$update_trip_array  = ["notification_status"=>'2'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
										}
										elseif(($driver_reply == 'A') && ($travel_status == 5))
										{
											$trip_complete_display = ($notification_status != 3) ?  1 : 0;
											$message = ["message"=>__('trip_completed'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>4,"display"=>$trip_complete_display];		
											$update_trip_array  = ["notification_status"=>'3'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
										}
										elseif(($driver_reply == 'A') && ($travel_status == 1) && $transId != 0)
										{
											$tripfare_update_display = ($notification_status != 4) ?  1 : 0;
											$message = ["message" => __('trip_fare_updated'),"fare" => $amt,"trip_id"=>$trip_id,"pickup" => $pickup_location, "status"=>5,"display"=>$tripfare_update_display,"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute];	
											$update_trip_array  = ["notification_status"=>'4'];
											$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$trip_id);										
										}
										elseif(($driver_reply == 'A') && ($travel_status == 4) && ($notification_status != 5) )
										{
											$message = ["message" => __('trip_cancelled_passenger'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute, "status"=>9];	
										}									
										else
										{
											$message = ["message"=>__('trip_not_started'),"driver_status"=>$trip_status,"driver_latitute"=>$driver_latitute,"driver_longtitute"=>$driver_longtitute,"status"=>6];
										}
									}
								}
								else
								{
									$message = ["message" => __('invalid_trip'),"status"=>-1];	
								}
							}
							elseif($request_type == 1)
							{
								$get_driver_request = $api->get_driver_request($trip_id);
								if(count($get_driver_request) >0)
								{
									//print_r($get_passenger_log_det);
									$driver_reply = $get_driver_request[0]['status'];
									$available_drivers = explode(',',$get_driver_request[0]['total_drivers']);
									$rejected_timeout_drivers = explode(',',$get_driver_request[0]['rejected_timeout_drivers']);	
									$comp_result = array_diff($available_drivers, $rejected_timeout_drivers);	
									
									//echo count($comp_result);
									if(count($comp_result) == 0)
									{
										$driver_reply  = 5;
									}
																			
									if($driver_reply == '3')
									{
										$detail = ["trip_id"=>$trip_id,"driverdetails"=>""];
										$message = ["message" => __("request_confirmed_passenger"),"detail"=>$detail,"status"=>1];
									}
									elseif($driver_reply == '4')
									{
										$message = ["message" => __("trip_cancel"),"detail"=>"","status"=>7];
									}					
									elseif($driver_reply == '5')
									{
										$message = ["message" => __("driver_busy"),"status"=>2];
										echo json_encode($message);
										exit;
									}
									else
									{
										$message = ["message"=>__('trip_not_started'),"status"=>6];
									}
								}
								else
								{
									$message = ["message" => __('invalid_trip'),"status"=>-1];	
								}														
							}
							else
							{
									$message = ["message" => __('No Trips '),"status"=>-1];
							}
				}
				else
				{
						$errors = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"status"=>-5,"detail"=>$errors];
				}
				echo json_encode($message);
				break;	
				
						
				
         //URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=gettriprequest_status&trip_id=627					
			case 'gettriprequest_status':
				$array = $mobiledata;				
				
				if($array['trip_id'] != null)
				{
					$trip_id = $array["trip_id"];
					$amount="";$pickup="";
					
					$get_driver_request = $api->get_driver_request($trip_id);
					if($get_driver_request != 0)
					{
						//print_r($get_passenger_log_det);
						$driver_reply = $get_driver_request[0]->status;

						if($driver_reply == '3')
						{
							$detail = ["trip_id"=>$trip_id,"driverdetails"=>""];
							$message = ["message" => __("request_confirmed_passenger"),"detail"=>$detail,"status"=>1];
						}
						elseif($driver_reply == '4')
						{
							$message = ["message" => __("trip_cancel"),"detail"=>"","status"=>7];
						}					
						else
						{
							$message = ["message"=>__('trip_not_started'),"status"=>6];
						}
					}
					else
					{
						$message = ["message" => __('invalid_trip'),"status"=>-1];	
					}
				}
				else
				{
					$message = ["message" => __('trip_id_req'),"status"=>0];	
				}
				echo json_encode($message);
				break;								
								
			//For Driver Cancell the trip
		
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=driver_status_update&driver_id=35&latitude=11&longitude=76.7997&status=A&trip_id=1216
			//Push Notifications in Driver Table
			case 'driver_status_update':	
			$driver_status_array = $mobiledata;	
			$act_pickup_location = isset($driver_status_array['actual_pickup_location']) ? 	urldecode($driver_status_array['actual_pickup_location']) : '';
					if($driver_status_array['driver_id'] != null)
					{						
						$check_driver_login_status = $this->is_login_status($driver_status_array['driver_id'],$default_companyid);
						if($check_driver_login_status == 1)
						{ 
							$driver_model = Model::factory('driver');
							$current_driver_status = $driver_model->get_driver_current_status($driver_status_array['driver_id']);
							if(count($current_driver_status) > 0)
							{
												//print_r($current_driver_status);
												//array_shift($driver_status_array);
												//array_shift($driver_status_array);							
												$trip_details = [];
												$passengers_log_id = $driver_status_array['trip_id'];
												$update_driver_arrary  = [
												"latitude" => $driver_status_array['latitude'],
												"longitude" => $driver_status_array['longitude'],
												"status" => strtoupper($driver_status_array['status'])];						
												if($current_driver_status[0]->status != 'A')
												{								
													if(($driver_status_array['status'] == 'A') && ($passengers_log_id != null))
													{
													$get_passenger_log_details = $api->get_passenger_log_detail($passengers_log_id);
													foreach($get_passenger_log_details as $values)
													{
															$current_location = $values->current_location;	
															$pickup_latitude = $values->pickup_latitude;
															$pickup_longitude = $values->pickup_longitude;			
															$drop_location = $values->drop_location;	
															$drop_latitude= $values->drop_latitude;
															$drop_longitude = $values->drop_longitude;
															$driver_name = $values->driver_name;															
															$p_device_type = $values->passenger_device_type;
															$p_device_token  = $values->passenger_device_token;	
															$actual_pickup_time  = $values->actual_pickup_time;
															$travel_status = $values->travel_status;
															$driver_reply = $values->driver_reply;
													}
													/********** Check whther the Trip is alreadt cancelled by the passenger **********/
													if(($driver_reply == 'A') && ($travel_status == 4))
													{
														$msg = ["message" => __("trip_cancelled_passenger"),"detail"=>"","status"=>7];
														echo json_encode($msg);
														exit;
													}
													/*********************************************************************************/
													
														/** update journey inprogress in Passenger log table when driver start the journey**/
														$company_det =$api->get_company_id($driver_status_array['driver_id']);
														$compId = (count($company_det) > 0) ? $company_det[0]['company_id'] : $default_companyid;
														$actual_pickup_time = $this->commonmodel->getcompany_all_currenttimestamp($compId);
														$travel_status = 2;
														//$act_pickup_location=$api->getaddress($driver_status_array['latitude'],$driver_status_array['longitude']);
														   //if($act_pickup_location == false)
														   if(empty($act_pickup_location))
														   {
																$act_pickup_location = $current_location;
														   }
														$update_passenger_log_array = ['travel_status' => $travel_status,'actual_pickup_time'=>$actual_pickup_time,'current_location'=>$act_pickup_location];									
														$result = $api->update_table(PASSENGERS_LOG,$update_passenger_log_array,'passengers_log_id',$passengers_log_id);
														/** Passenger log table update end **/
														/*************** Update arrival in driver request table ******************/
														$update_trip_array  = ["status"=>'6'];
														$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passengers_log_id);		
														/*************************************************************************/	
														if(($driver_status_array['latitude'] != 0) &&($driver_status_array['longitude'] != 0))
														{
															$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_status_array['driver_id']);	
														}
														$trip_details = ["pickup_location"=>$act_pickup_location,"drop_location"=>$drop_location];
														$message = ["message" => __('driver_location_update'),"status"=>1,"detail"=>$trip_details];		
														$push_message = ["message" =>__('journey_started'),"pickup_time"=>$actual_pickup_time,"trip_id"=>$passengers_log_id,"status"=>3];
														//print_r($push_message);
														//exit;
														//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api);															
													}	
													elseif(($driver_status_array['status'] == 'A') && ($passengers_log_id == null))
													{
														$message = ["message" => __('invalid_trip_id'),"status"=>-1,"detail"=>$trip_details];
													}
													else
													{
														if(($driver_status_array['latitude'] != 0) &&($driver_status_array['longitude'] != 0))
														{
															$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_status_array['driver_id']);	
														}
														$message = ["message" => __('driver_location_update'),"status"=>1];
													}
												}
												else
												{
													$update_driver_arrary  = [
													"latitude" => $driver_status_array['latitude'],
													"longitude" => $driver_status_array['longitude'],
													"status" => strtoupper($driver_status_array['status'])];	
													//print_r($update_driver_arrary);
													if(($driver_status_array['latitude'] != 0 ) &&($driver_status_array['longitude'] != 0))
													{
														$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_status_array['driver_id']);	
													}
													$message = ["message" => __('already_trip'),"status"=>-1];
												}
								}
								else
								{									
									$insert_array = [
									"driver_id" => $driver_status_array['driver_id'],
									"latitude"		=> $driver_status_array['latitude'],
									"longitude"		=> $driver_status_array['longitude'],
									"status"			=> 'F',
									"shift_status" => 'OUT'];									
									if(($driver_status_array['latitude'] != 0) &&($driver_status_array['longitude'] != 0))
									{
										$transaction = $this->commonmodel->insert(DRIVER,$insert_array);
									}
									$message = ["message" => __('driver_location_update'),"status"=>1];
								}
						}
						else
						{
							$message = ["message" => __('driver_not_login'),"status"=>-1];	
						}													
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
			//URL : http://192.168.1.88:1020/api/index/dGF4aV9KcUJRWjgwVjRJajc1RXhrSXFwaXpSUHA5Umd3eGI=?type=driver_reply&pass_logid=1138&driver_id=37&taxi_id=3&company_id=1&driver_reply=R&field=Sample Comments for rejection&flag=1
			case 'driver_reply':
			$driver_reply_array = $mobiledata;
			//print_r($driver_reply_array);exit;
					if($driver_reply_array['pass_logid'] != null)
					{
						$api_model = Model::factory(MOBILEAPI_107);			
						//array_shift($driver_reply_array);
						//array_shift($driver_reply_array);		
						//print_r($driver_reply_array);exit;					
						$pass_logid = $driver_reply_array['pass_logid'];
						$driver_reply = $driver_reply_array['driver_reply'];
						$driver_id = $driver_reply_array['driver_id'];
						$taxi_id = $driver_reply_array['taxi_id'];
						$company_id = $driver_reply_array['company_id'];
						$field = $driver_reply_array['field'];
						$flag = $driver_reply_array['flag'];													
						if($driver_reply == 'A'){$travel_status = 9;}elseif($driver_reply == 'R'){$travel_status=10;}else{$travel_status=9;}					
						//print_r($get_passenger_log_det);
						$driver_statistics=[];
						$result = $api_model->update_driverreply_status($pass_logid,$driver_id,$taxi_id,$company_id,$driver_reply,$travel_status,$field,$flag,$default_companyid);	
						//echo $result;exit;
							
						if($result == 1)
						{
							if($driver_reply == 'A')
							{
								/********* Update the status in driver request table **************/								
								$update_trip_array  = ["status"=>'3'];
								$update_result = $api_model->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$pass_logid);	
								/********** Update the Driver table he goes Busy status ****************/
								$update_driver_array  = ["status"=>'B'];
								$update_driver_result = $api_model->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);		
								/**************************************************************************/				
							}
							$message = __('request_confirmed');	
							$push_msg = __('driver_confirm_push');
							$push_status = 1;
							$response_status = 1;							
							//$delete_pass_log_temp =$api->delete_passengers_log_temp($pass_logid);
						}
						else if($result == 2)		
						{	
							/********** Update the Driver table he goes Busy status ****************/
								$update_driver_array  = ["status"=>'F'];
								$update_driver_result = $api_model->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);		
							/**************************************************************************/							
							$message = __('request_rejected');
							$push_msg = __('request_rejected_passenger');
							$push_status = 6;
							$response_status = 2;
						}else if($result == 3)		
						{
							//Driver Statistics Functionality Start
							/*
							$driver_model = Model::factory('driver');
							$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$default_companyid);	
							$rejected_trips = count($driver_logs_rejected);	
							$driver_earnings = $driver_model->get_driver_earnings($driver_id);
							$driver_comments = $api->get_driver_comments($driver_id,'',$default_companyid);	
							$today_goal = $amount_left = $today_earnings = 0;
							$goal_detail = $api->get_goal_details($driver_id,'R','A','1');
							if(count($goal_detail)>0)
							{
								$today_earnings = $goal_detail[0]['acheive_amt'];
							}
							$statistics = array();
							$total_trip = $trip_total_with_rate = $total_ratings = 0;
							foreach($driver_comments as $stat){
								$total_trip++;
								$total_ratings += $stat['rating'];
								if($stat['rating'] != 0)
									$trip_total_with_rate++;
							}
							$time_driven = $api->get_time_driven($driver_id,'R','A','1');
							

								$drivername = "";
								$notification_setting = "";
								$driver_statistics = array( 
									"drivername"=>$drivername,
									"total_trip" => $total_trip,
									"total_earnings" => round($driver_earnings[0]['total_amount'],2),
									"overall_rejected_trips" => $rejected_trips,
									"today_earnings"=>round($today_earnings,2),											
									"shift_status"=>'IN',
									"time_driven"=>$time_driven,
								);  */
								
								// Driver Statistics ********************/
								$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$company_id);
								$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$company_id);	
								$rejected_trips = count($driver_logs_rejected);	
								$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$company_id);
								$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
								$statistics = [];
								$total_trip = $today_earnings = $total_amount=0;
																
								foreach($driver_earnings as $stat){
								$total_trip++;
								$total_amount += $stat['total_amount'];											
								}
								$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;								
								$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
								$driver_statistics = [ 
									"total_trip" => $overall_trip,
									"completed_trip" => $total_trip,
									"total_earnings" => round($driver_tot_earnings,2),
									"overall_rejected_trips" => $rejected_trips,
									"cancelled_trips" => $driver_cancelled_trips,
									"today_earnings"=>round($total_amount,2),											
									"shift_status"=>'IN',
									"time_driven"=>$time_driven,
									"status"=> 1
								  ]; 
							
							//print_r($driver_statistics);exit;
							//Driver Statistics Functionality End
					
							/********** Update the Driver table he goes Busy status ****************/
								$update_driver_array  = ["status"=>'F'];
								$update_driver_result = $api_model->update_table(DRIVER,$update_driver_array,'driver_id',$driver_id);		
							/*************** Update in driver request table ******************/
								$update_trip_array  = ["status"=>'9'];
								$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$pass_logid);		
							/*************************************************************************/
							$message = __('trip_cancelled_driver');
							$push_msg = __('driver_cancel_after_confirm');
							$push_status = 7;
							$response_status = 3;
							//$message = array("message" => __('trip_fare_updated'),"detail"=>$detail,"driver_statistics"=>$driver_statistics,"status"=>1);
						}else if($result == 4)		
						{	
						$message = __('trip_already_cancel_rejected');
						$push_msg = __('trip_already_cancel_rejected');
						$push_status = 8;
						$response_status = 4;
						}
						else if($result == 5){
							$message = __('trip_already_confirm');	
							$push_msg = __('trip_already_confirm');	
							$push_status = 9;
							$response_status = 5;
						}
						else if($result == 6){
							$message = __('trip_already_rejected');	
							$push_msg = __('trip_already_rejected');	
							$push_status = 10;
							$response_status =6;
						}							
						else if($result == 7){
							$message = __('trip_cancel');
							$push_msg = __('trip_cancel');
							$push_status = 11;
							$response_status = 7;
						}
						else {
							$message = __('trip_cancel_timeout');
							$push_msg = __('trip_cancel_timeout');
							$push_status = 12;
							$response_status = 8;
						}
						//echo $push_status;

							$phone_no = '';
							$device_token = '';
							$driver_name = $p_device_token = $phone_no = $driver_phone = $p_device_type="";

						    $latitude = $longitude="";
						    $taxi_details = "";

							//free sms url with the arguments
							if((SMS == 1) && ($driver_phone !=''))
							{
							$message_details = $this->commonmodel->sms_message('3');
							$to = $driver_phone;
							$message_temp = $message_details['sms_description'];
							$sms_message = str_replace("##booking_key##",$pass_logid,$message_temp);
					
							//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($sms_message)."&senderid=NAJIK&recipient=$to");
							}
										
								$totalrating = "";																
								$driverdetails = [];
								$trip_detail = [];
								$driverdetails=$api->get_passenger_log_detail_reply($pass_logid);
								foreach($driverdetails as $values)
								{
									if($values->profile_image)
											{
												$img = URL_BASE.'public/uploads/passenger/thumb_'.$values->profile_image;
											}else{
												$img = URL_BASE."/public/images/noimages109.png";
											} 
											$values->profile_image=$img;
									//$driverdetails=$values;
								}
								
								
										
								$detail = ["trip_id"=>$pass_logid,"driverdetails"=>$driverdetails,"driver_statistics"=>$driver_statistics];
								if($response_status == 1)
								{
									$msg = ["message" => $message,"status" => $response_status,"detail"=>$detail];	
								}
								else
								{
									$msg = ["message" => $message,"status" => $response_status,"driver_statistics"=>$driver_statistics];	
								}
								if($push_status == 1 || $push_status == 6 || $push_status == 7)
								{														
									if($push_status == 1)
									{															
										$push_message = ["message"=>$push_msg,"trip_id"=>$pass_logid,"driverdetails"=>$driverdetails,"status"=>$push_status];
									}
									else
									{
										$push_message = ["message"=>$push_msg,"trip_id"=>$pass_logid,"trip_detail"=>$trip_detail,"status"=>$push_status];
									}
									//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api);
									//print_r($push_message);
									//exit;
								}
																																								
					}
					else
					{
						$msg = ["message" => __('invalid_trip'),"status"=>-1];	
					}
					echo json_encode($msg);
					break;
			
			
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9YRlJJb1p0NjdxYTU5ZmlIRFl1OGJPQ0J2elRHQVYxZmY=?type=driver_status_select&driver_id=60	
			case 'driver_status_select':
			$driver_status_array = $mobiledata;
					$check_result = $api->check_driver_companydetails($driver_status_array['driver_id'],$default_companyid);
					if($check_result == 0)	
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];
						echo json_encode($message);
						exit;;
					}

					if($driver_status_array['driver_id'] != null)
					{																						
						//$result = $api->select_table(DRIVER,'driver_id',$array['driver_id']);	
						$result = $api->select_driverloc($driver_status_array['driver_id'],$default_companyid);	
						$driver_details=[];
						$latitude = $longitude = '0.0';
						$status = 'F';
						
						//print_r($result);
						if(count($result)>0)
						{
							foreach($result as $details)
							{
								$driver_status = $details['status'];	
								$id = $details['id'];			//				
								$shift_status = $details['shift_status'];
								$driver_id = $details['driver_id'];
								$latitude = $details['latitude'];
								$longitude = $details['longitude'];		
								$update_date = $details['update_date'];	
							}
							//$result[0]['status'] =  ($driver_status != 'B') ?  $driver_status : 'F';
							$driver_details = [
									"id"=>$id,
									"driver_id"=>$driver_id,
									"latitude"=>$latitude,
									"longitude"=>$longitude,
									"status"=>$status,
									"shift_status"=>$shift_status,
									"update_date"=>$update_date];
						}
						
						$driver_current_journey = $api->get_driver_current_journey($driver_status_array['driver_id'],$default_companyid,'0');

						$trip_details=[];
						if(count($driver_current_journey)> 0)
						{
							foreach($driver_current_journey as $values)
								{
									$current_location = $values['current_location'];				
									$drop_location = $values['drop_location'];
									$current_latitude = $values['pickup_latitude'];
									$current_longitude = $values['pickup_longitude'];
									$drop_latitude = $values['drop_latitude'];
									$drop_longitude = $values['drop_longitude'];
									//$no_passengers = $value->no_passengers;									
								}

							$trip_details = [
									"pickup_location"=>$current_location,
									"drop_location"=>$drop_location,
									"current_latitude"=>$current_latitude,
									"current_longitude"=>$current_longitude,
									"drop_latitude"=>$drop_latitude,
									"drop_longitude"=>$drop_longitude
									];
						}
						else
						{
							$trip_details = ['No Trip Found.'];
						}
						if(count($result) > 0)				
							$message = ["current_location" => $result,"current_trip"=>$trip_details,"status"=>1];		
						else
							$message = ["message" => 'Driver Not Found or Kindly update your status',"status"=>-1];
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
					
			//URL : api/?type=driver_journey_status&pass_logid=7	
			case 'driver_journey_status':
			$driver_journey_array = $mobiledata;
					if($driver_journey_array['pass_logid'] != null)
					{													
						$result = $api->select_table(PASSENGERS_LOG,'passengers_log_id',$driver_journey_array['pass_logid']);		
						if(count($result) > 0)				
							$message = $result;		
						else
							$message = ["message" => __('invalid_trip'),"status"=>0];
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
				
			//PASSENGER LOG TABLE UPDATE		
			//URL : api/?type=driver_journey_status_update&pass_logid=7&time_to_reach_passen=&drop_time=&pickupdrop=&waitingtime=&rating=&comments=&travel_status=&driver_reply=&driver_comments=&msg_status
			case 'driver_journey_status_update':
			$journey_status_update = $mobiledata;
					if($journey_status_update['pass_logid'] != null)
					{	
						//Removing the URL Other parameters
						array_shift($journey_status_update);
						array_shift($journey_status_update);						
						//print_r($array);
						$passengers_log_id = $journey_status_update['pass_logid'];
						
						//Removing the $array['pass_logid'] from array	for the $org_array
						array_shift($journey_status_update);	
												
						foreach($journey_status_update as $key=>$arr)
						{
							if($arr != null)
								$org_array[$key] = $arr;
						}
												
						if(count($org_array) > 0)		{						
							$result = $api->update_table(PASSENGERS_LOG,$org_array,'passengers_log_id',$passengers_log_id);
							$message = ["message" => 'Data Updated Successfully',"status"=>1];	
						}
						else{
							$message = ["message" => 'Atleast Provide Single Field Data',"status"=>0];
						}
					
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;
											
			//URL : http://192.168.1.88:1235/api/index/dGF4aV9KcUJRWjgwVjRJajc1RXhrSXFwaXpSUHA5Umd3eGI=?type=driver_upcoming_journey&driver_id=3
			case 'driver_upcoming_journey':
			$driver_upcoming_journey = $mobiledata;
					$check_result = $api->check_driver_companydetails($driver_upcoming_journey['driver_id'],$default_companyid);
					if($check_result == 0)	
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];
						echo json_encode($message);
						exit;
					}

					if($array['driver_id'] != null)
					{
						$driver_id = $driver_upcoming_journey['driver_id'];
						
						$driver_model = Model::factory('driver');			
						$driver_logs_upcoming = $api->get_driver_logs($driver_id,'R','A','9',$default_companyid);		
						$array_inc = 0;
						foreach($driver_logs_upcoming as $journey)
						{
							$upcoming_journey[] = (array) $journey;		
							$pickuptime = date('H:i:s',strtotime($journey->pickup_time));	

							 $currenttime = date('H:i:s',strtotime("+10 min"));	
	 
							//$currenttime ="<script>document.write(currenttime);</script>";
							if($pickuptime <= $currenttime)
							{	
								//$this->array_put_to_position($upcoming_journey, 'P', 1, 'pickstatus');
								$upcoming_journey = $this->array_push_assoc($upcoming_journey,$array_inc, 'pickstatus', 'P');									
							}
							else
							{
								$upcoming_journey = $this->array_push_assoc($upcoming_journey,$array_inc, 'pickstatus', 'w');	
							}  
						$array_inc++;	
						}

						if(count($driver_logs_upcoming) == 0)
						{
							$message = ["message" => __('no_data'),"status"=>0];	
						}
						else
						{
							$message = ["message" => $upcoming_journey,"status" => 1];										
							//$message = Arr::merge($msg,$upcoming_journey);
						}				
						
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;							
									
		// http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_by_sms&driver_id=16&phone=
			case 'tell_to_friend_by_sms':
			$tell_sms_array = $mobiledata;
				//print_r();
				$validator = $this->tellfri_sms_validation($tell_sms_array);				
				if($validator->check())
				{
					//Set the Favourite Trips
					$driver_details = $api->driver_profile($tell_sms_array['driver_id'],$default_companyid);
					$driver_referral_code="";
					if(count($driver_details)>0)
					{
						$driver_referral_code = $driver_details[0]['driver_referral_code'];
					}
					$message_details = $this->commonmodel->sms_message('7');
					$to = $tell_sms_array['phone'];
					$message = $message_details['sms_description'];
					$message = str_replace("##SITENAME##",ucfirst(COMPANY_SITENAME),$message);
					$message = str_replace("##REFERRAL_CODE##",$driver_referral_code,$message);
					$message = str_replace("##ANDROID_PASSENGER_APP##",ANDROID_PASSENGER_APP,$message);
					$message = str_replace("##IOS_PASSENGER_APP##",IOS_PASSENGER_APP,$message);
					$message = str_replace("##ANDROID_DRIVER_APP##",ANDROID_DRIVER_APP,$message);
					//echo $message;exit;
					//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
					$result = true;
					if($result)
					{
						$message = ["message" => __('sms_invite_send'),"status"=>1];	
					}
					else
					{
						$message = ["message" => __('try_again'),"status"=>0];	
					}
					
				}
				else
				{
						$validation_error = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"status"=>-3,"detail"=>$validation_error];										
				}
				echo json_encode($message);
				break;				
			break;	
			//URL
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tell_to_friend_by_email&driver_id=16&email=
			case 'tell_to_friend_by_email':
			$tell_mail_array = $mobiledata;
			$driver_id = $tell_mail_array['driver_id'];
			$email = $tell_mail_array['email'];					
			$validator = $this->tellfri_email_validation($tell_mail_array);
			if($validator->check())
			{			
					$name = $driver_referral_code = "";
					$driver_details = $api->driver_profile($tell_mail_array['driver_id'],$default_companyid);
					$driver_referral_code="";
					if(count($driver_details)>0)
					{
						$driver_referral_code = $driver_details[0]['driver_referral_code'];
						$name = $driver_details[0]['name'];
					}
					$message = DRIVER_TELL_TO_FRIEND_MESSAGE;
					$mail="";
					$subject = __('driver_telltofriend_subject').' '.$this->app_name;
					$replace_variables=[REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>$this->app_name,REPLACE_NAME=>$name,REPLACE_SUBJECT=>$subject,REPLACE_MESSAGE=>$message,REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
					
			/* Added for language email template */
			if($this->lang!='en'){
			if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/driver_telltofriend-'.$this->lang.'.html')){
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/driver_telltofriend-'.$this->lang.'.html',$replace_variables);
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver_telltofriend.html',$replace_variables);
			}
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'driver_telltofriend.html',$replace_variables);
			}
			/* Added for language email template */
					$to = $email;
					$from = $this->siteemail;
					$redirect = "no";	
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
						//$rejectedemails.' '.__('already_reg')
						$message = ["message" => __('driver_tellfri_email_success'),"status"=> 1];	
			}
			else
			{
						$validation_error = $validator->errors('errors');	
						$message = ["message" => __('validation_error'),"status"=>-3,"detail"=>$validation_error];				
			}					
            echo json_encode($message);								
			break;

		
			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=driver_statistics&driver_id=7
			case 'driver_statistics':
			$driver_model = Model::factory('driver');
					if($mobiledata['driver_id'] != null)
					{
						$company_det =$api->get_company_id($mobiledata['driver_id']);
						$default_companyid = ($company_det > 0) ? $company_det[0]['company_id'] : $default_companyid;
						$check_driver_login_status = $this->is_login_status($mobiledata['driver_id'],$default_companyid);
						if($check_driver_login_status == 1)
						{
							$driver_id = $mobiledata['driver_id'];																		
							$driver_details = $api->driver_profile($driver_id);
							$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$default_companyid);	
							$rejected_trips = count($driver_logs_rejected);	
							$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$default_companyid);
							//$driver_earnings = $driver_model->get_driver_earnings($driver_id);
							$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
							//$driver_comments = $api->get_driver_comments($driver_id,'',$default_companyid);	
							$driver_comments = $api->get_driver_earnings_with_rating($driver_id,$default_companyid);
							$today_goal = $amount_left = $today_earnings = 0;
							$goal_detail = $api->get_goal_details($driver_id,'R','A','1');
							if(count($goal_detail)>0)
							{
								$today_earnings = $goal_detail[0]['acheive_amt'];
							}
								$statistics = [];
								$total_trip = $trip_total_with_rate = $total_ratings = $total_amount = 0;
								
								foreach($driver_comments as $stat){
									$total_trip++;
									$total_ratings += $stat['rating'];
									$total_amount += $stat['total_amount'];
									if($stat['rating'] != 0)
										$trip_total_with_rate++;
								}
								
								$time_driven = $api->get_time_driven($driver_id,'R','A','1');
								if(count($driver_details) > 0)
								{
									$drivername = ucfirst($driver_details[0]['name']).' '.ucfirst($driver_details[0]['lastname']);
									$notification_setting = $driver_details[0]['notification_setting'];
									$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;
									$statistics = [ 
												"drivername"=>$drivername,
												"total_trip" => $overall_trip,
												"completed_trip" => $total_trip,
												//"total_earnings" => round($driver_earnings[0]['total_amount'],2),
												"total_earnings" => round($driver_tot_earnings,2),
												"overall_rejected_trips" => $rejected_trips,
												"cancelled_trips" => $driver_cancelled_trips,
												//"today_earnings"=>round($today_earnings,2),											
												"today_earnings"=>round($total_amount,2),											
												"shift_status"=>'IN',
												"time_driven"=>$time_driven,
												"status"=> 1
											  ]; 
									$message = ["message" => __('success'),"detail"=>$statistics,"status"=>1];
								}
								else
								{
									$message = ["message" => __('invalid_driver'),"status"=>2];
								}
							//	$message = $statistics;		
							//}	
						}
						else
						{
							$message = ["message" => __('driver_not_login'),"status"=>-1];
						}
					}
					else
					{
						$message = ["message" => __('invalid_user'),"status"=>-1];	
					}
					echo json_encode($message);
					break;					

			//URL : http://192.168.1.88:1020/api/index/dGF4aV9hbGw=/?type=driver_shift_status&driver_id=8&shiftstatus=IN&reason=&update_id=
			case 'driver_shift_status':
			$array = $mobiledata;
			$driver_model = Model::factory('driver');
			$validator = $this->shift_status_validation($array);
			if($validator->check())
			{			
					$driver_id = $array['driver_id'];
					$company_status = $api->api_companystatus($array['driver_id']);	
					if(($company_status == 'D') || ($company_status == 'T')){
						$message = ["message" => __('user_blocked'),"status"=>-7];
						echo json_encode($message);
						//return;
						exit;
					}
					if($array['driver_id'] != null)
					{
					$check_result = $api->check_driver_companydetails($array['driver_id'],$default_companyid);
					if($check_result == 0)	
					{
						$message = ["message" => __('company_deactivaed_driver'),"status"=>'-1'];
						echo json_encode($message);
						exit;
					}						
						$getTaxiassignedforDriver = $api->get_assignedtaxi_list($driver_id,$default_companyid);			
						//echo count($getTaxiassignedforDriver);	
						$current_driver_status = $api->get_driver_current_status($array['driver_id'],$default_companyid);				

							$shiftstatus = $array['shiftstatus'];
								if($array['shiftstatus'] == 'IN')
								{
									if(count($getTaxiassignedforDriver)>0)
									{	
											$taxi_id = "";
											$getTaxiforDriver = $api->getTaxiforDriver($driver_id,$default_companyid);	
											if(count($getTaxiforDriver) > 0 )
											{
											$taxi_id = $getTaxiforDriver[0]['mapping_taxiid'];														
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											$driver_reply = $api->update_driver_shift_status($driver_id,$array['shiftstatus']);
											$insert_array = [
																	"driver_id" => $driver_id,
																	"taxi_id" 			=> $taxi_id,												
																	"shift_start" 	=> $company_all_currenttimestamp,
																	"shift_end"		=> "",
																	"reason"		=> $array['reason'],
																	"createdate"		=> $this->currentdate,
																];								
											//Inserting to Transaction Table 
											$transaction = $this->commonmodel->insert(DRIVERSHIFTSERVICE,$insert_array);	
											//print_r($transaction);		
											$insert_id = mysql_insert_id();
											if($transaction)
											{
													$detail = ["update_id"=>$insert_id];
													$message = ["message" => __('driver_shift'),"status"=>1,"detail"=>$detail];
											}
											else
											{
												$message = ["message" => __('try_again'),"status"=>-2];
											}
										   }	
										   else
										   {
												$message = ["message" => __('taxi_not_assigned'),"status"=>-3];
												//exit;				   
										   } 	
									 }
									 else
									 {
										 $message = ["message" => __('taxi_not_assigned'),"status"=>-3];
									 }						
								}
								else
								{
									if($current_driver_status[0]->status != 'A')
									{
										$get_driver_log_details = $api->get_driver_log_details($driver_id,$default_companyid);
										$driver_trip_count = count($get_driver_log_details);//exit;
										if($driver_trip_count == 0)
										{
											$update_id = $array['update_id'];
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											$update_arrary  = ["shift_end" => $company_all_currenttimestamp];
											if($update_id != "")
											{
												$transaction = $this->commonmodel->update(DRIVERSHIFTSERVICE,$update_arrary,'driver_shift_id',$update_id);
												$driver_reply = $api->update_driver_shift_status($driver_id,'OUT');
												if($transaction)
												{
													$message = ["message" => __('driver_shift_out'),"status"=>1];
												}
												else
												{
													$message = ["message" => __('try_again'),"status"=>-2];
												}
											}
											else
											{
												$message = ["message" => __('update_id_missing'),"status"=>-5];
											}
										}
										else
										{
											$message = ["message" => __('trip_in_future'),"status"=>-4];
										}
									}
									else
									{
										$message = ["message" => __('driver_in_trip'),"status"=>-1];
									}
								}
					}
					else
					{
						$message = ["message" => __('invalid_user_driver'),"status"=>-1];
					}
				}
				else
				{
					$validation_error = $validator->errors('errors');	
					$message = ["message" => __('validation_error'),"status"=>-3,"detail"=>$validation_error];				
				}
			echo json_encode($message);
			break;
			case 'driver_shift':
			$array = $mobiledata;
			$validator = $this->shift_status_validation($array);
			if($validator->check())
			{			
				$check_driver_login_status = $this->is_login_status($array['driver_id'],$default_companyid);
				if($check_driver_login_status == 1)
				{
					$driver_id = $array['driver_id'];
					$company_status = $api->api_companystatus($array['driver_id']);	
					if(($company_status == 'D') || ($company_status == 'T')){
						$message = ["message" => __('user_blocked'),"status"=>-7];
						echo json_encode($message);
						//return;
						exit;
					}
					if($array['driver_id'] != null)
					{						
						$getTaxiassignedforDriver = $api->get_assignedtaxi_list($driver_id,$default_companyid);			
						//print_r($getTaxiassignedforDriver);	
						$current_driver_status = $api->get_driver_current_status($array['driver_id'],$default_companyid);				

							$shiftstatus = $array['shiftstatus'];
								if($array['shiftstatus'] == 'IN')
								{ 
									if(count($getTaxiassignedforDriver)>0)
									{	
											$taxi_id = "";
											$taxi_id = $getTaxiassignedforDriver[0]['taxi_id'];														
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											$update_shift_status = $api->update_driver_shift_status($driver_id,$array['shiftstatus']);
											
												if(mysql_affected_rows() != 0)
												{
													$message = ["message" => __('driver_shift'),"status"=>1];
												}
												else
												{
													$message = ["message" => __('try_again'),"status"=>-2];
												}	
									 }
									 else
									 {
										 $message = ["message" => __('taxi_not_assigned'),"status"=>-3];
									 }						
								}
								else
								{
									if($current_driver_status[0]->status != 'A')
									{
										$get_driver_log_details = $api->get_driver_log_details($driver_id,$default_companyid);
										$driver_trip_count = count($get_driver_log_details);//exit;
										if($driver_trip_count == 0)
										{
											//$update_id = $array['update_id'];
											//$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($default_companyid);
											//$update_arrary  = array("shift_end" => $company_all_currenttimestamp);
											//if($update_id != "")
											//{
												//$transaction = $this->commonmodel->update(DRIVERSHIFTSERVICE,$update_arrary,'driver_shift_id',$update_id);
												$driver_reply = $api->update_driver_shift_status($driver_id,'OUT');
												if($driver_reply)
												{
													$message = ["message" => __('driver_shift_out'),"status"=>2];
												}
												else
												{
													$message = ["message" => __('try_again'),"status"=>-2];
												}
											/*}
											else
											{
												$message = array("message" => __('update_id_missing'),"status"=>-5);
											}*/
										}
										else
										{
											$message = ["message" => __('trip_in_future'),"status"=>-4];
										}
									}
									else
									{
										$message = ["message" => __('driver_in_trip'),"status"=>-1];
									}
								}
					}
					else
					{
						$message = ["message" => __('invalid_user_driver'),"status"=>-1];
					}
					
					}
				else
				{
					$message = ["message" => __('driver_not_login'),"status"=>-1];
				}
			}
			else
			{
				$validation_error = $validator->errors('errors');	
				$message = ["message" => __('validation_error'),"status"=>-3,"detail"=>$validation_error];				
			}
			echo json_encode($message);
			break;
						
		//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=complete_trip&trip_id=574&drop_latitude=11.7625134&drop_longitude=76.1235648&drop_location=vadavalli,coimbatoe&distance=6&actual_distance=&waiting_time=1.5
		case 'complete_trip':
		$array = $mobiledata;
		//print_r($array);exit;
		/* array(
		"passenger_log_id" => 457,
		"drop_latitude" => 11.0214907,
		"drop_longitude" => 76.9166205,
		"drop_location" => "gandhipuram,coimbatore");*/
		if(!empty($array))
		{    
			$driver_model = Model::factory('driver');
			$drop_latitude = $array['drop_latitude'];
			$drop_longitude = $array['drop_longitude'];
			$drop_location = urldecode($array['drop_location']);
			$trip_id = $array['trip_id'];
			$distance = $array['distance'];
			$actual_distance = $array['actual_distance'];
			$waiting_hours = $array['waiting_hour'];
			/*if($actual_distance == "")
				$total_distance = $distance;
			else
				$total_distance = $actual_distance;						
			//*/
			if($trip_id != null )
			{
				//echo $default_companyid;exit;
				$gateway_details = $this->commonmodel->gateway_details($default_companyid);
				$get_passenger_log_details = $api->get_passenger_log_detail($trip_id);		
				//print_r($get_passenger_log_details);exit;
				$p_referral_discount = 0;
				$pickupdrop = $taxi_id = $company_id = 0;
				$fare_per_hour = $waiting_per_hour = $total_fare = $nightfare = 0;
				if(count($get_passenger_log_details) > 0)
				{
						/******* Check whether the trip is completed if so we change the driver status and trip travel status and give response **********/
						$flag = 0;
						$trans_result = $api->check_tranc($trip_id,$flag);
						if(count($trans_result)>0)
						{       
								$travel_status=$trans_result[0]['travel_status'];
								//exit;
								$transid=$trans_result[0]['id'];
								$driver_id=$trans_result[0]['driver_id'];
								if($travel_status == 1 && $transid != "")
								{									
									/********** Update Driver Status after complete Payments *****************/									
									$update_driver_arrary = ["status" => 'F'];
									$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);	
									/************Update Driver Status ***************************************/				
									$msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
									$journey = $api->update_journey_status($trip_id,$msg_status,$driver_reply,$journey_status);
									/*************** Update arrival in driver request table ******************/
									$update_trip_array  = ["status"=>'7'];
									$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);		
									/*************************************************************************/										
									$message = ["message" => __('trip_fare_already_updated'), "status"=>-1];
									echo json_encode($message);
									break;
								}
								if($travel_status == 5 && $transid != "")
								{
									/********** Update Driver Status after complete Payments *****************/									
									$update_driver_arrary = ["status" => 'F'];
									$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);	
									/************Update Driver Status ***************************************/				
									$msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
									$journey = $api->update_journey_status($trip_id,$msg_status,$driver_reply,$journey_status);
									/*************** Update arrival in driver request table ******************/
									$update_trip_array  = ["status"=>'7'];
									$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);		
									/*************************************************************************/		
									$message = ["message" => __('trip_fare_and_status_updated'), "status"=>-1];
									echo json_encode($message);
									break;																	
								}
								if($travel_status == 2 && $transid != "")
								{
									/********** Update Driver Status after complete Payments *****************/									
									$update_driver_arrary = ["status" => 'F'];
									$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);	
									/************Update Driver Status ***************************************/				
									$msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
									$journey = $api->update_journey_status($trip_id,$msg_status,$driver_reply,$journey_status);
									/*************** Update arrival in driver request table ******************/
									$update_trip_array  = ["status"=>'7'];
									$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);		
									/*************************************************************************/		
									$message = ["message" => __('trip_fare_and_status_updated'), "status"=>-1];
									echo json_encode($message);
									break;																	
								}								

						}
						else
						{		
							$passenger_discount = $get_passenger_log_details[0]->passenger_discount; // 
							//print_r($get_passenger_log_details);exit;
							$passengers_id = $get_passenger_log_details[0]->passengers_id;
							$referred_by = $get_passenger_log_details[0]->referred_by;									
							///$referral_earned_amount = $get_passenger_log_details[0]->referral_earned_amount;
							$referrer_earned = $get_passenger_log_details[0]->referrer_earned;
							$company_tax = $get_passenger_log_details[0]->company_tax;
							$tax = (FARE_SETTINGS != 2) ? TAX : $company_tax;
							$travel_status = $get_passenger_log_details[0]->travel_status;
							$total_distance = $get_passenger_log_details[0]->distance;
							$used_wallet_amount = $get_passenger_log_details[0]->used_wallet_amount;
							$promocode = $get_passenger_log_details[0]->promocode;
							$p_referral_discount = 0;
							$pickupdrop = $taxi_id = $company_id = 0;
							$fare_per_hour = $waiting_per_hour = $total_fare = $nightfare = 0;
							if(($travel_status == 2) || ($travel_status == 5))
							{ 
								$pickup = $get_passenger_log_details[0]->current_location;
								$drop = $get_passenger_log_details[0]->drop_location;
								$pickupdrop = $get_passenger_log_details[0]->pickupdrop;
								$taxi_id = $get_passenger_log_details[0]->taxi_id;
								$pickuptime = date('H:i:s', strtotime($get_passenger_log_details[0]->pickup_time));
								$company_id = $get_passenger_log_details[0]->company_id;
								$driver_id = $get_passenger_log_details[0]->driver_id;
								$approx_distance = $get_passenger_log_details[0]->approx_distance;
								$approx_fare = $get_passenger_log_details[0]->approx_fare;
								$fixedprice = $get_passenger_log_details[0]->fixedprice;
								$passengers_id = $get_passenger_log_details[0]->passengers_id;
								$referred_by = $get_passenger_log_details[0]->referred_by;			
								$actual_pickup_time = $get_passenger_log_details[0]->actual_pickup_time;
								
								$company_id = $get_passenger_log_details[0]->company_id;
								$taxi_details = $api->get_taxi_model_details($taxi_id);
								$taxi_model_id = $taxi_details[0]['taxi_model'];	
											
								$taxi_fare_details = $api->get_model_fare_details($company_id,$taxi_model_id,$get_passenger_log_details[0]->search_city);
								//print_r($taxi_fare_details);exit;
								if($travel_status != 5) {
									$drop_time = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
									//echo $drop_time."--".$actual_pickup_time;exit;
									$msg_status = 'R';$driver_reply='A';$journey_status=5; // Waiting for Payment
									
									$journey = $api->update_journey_statuswith_drop($trip_id,$msg_status,$driver_reply,$journey_status,$drop_latitude,$drop_longitude,$drop_location,$drop_time,$total_distance,$waiting_hours,$tax);
								} else {
									$drop_time = $get_passenger_log_details[0]->drop_time;
								}
								
								/*************** Update arrival in driver request table ******************/
								$update_trip_array  = ["status"=>'7'];
								$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);		
								/*************************************************************************/	
								
								/** Update Driver Status **/
								$update_driver_arrary  = [
								"latitude" => $array['drop_latitude'],
								"longitude" => $array['drop_longitude'],
								"status" => 'A'];	
								if(($array['drop_latitude'] > 0 ) && ($array['drop_longitude'] > 0))
								{
									$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);	
								}
								else
								{
									$update_driver_arrary  = ["status" => 'A'];
									$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$driver_id);	
								}
								/*********************/
								$base_fare = '0';
								$min_km_range = '0';
								$min_fare = '0';
								$cancellation_fare = '0';
								$below_above_km_range = '0';
								$below_km = '0';
								$above_km = '0';
								$night_charge = '0';
								$night_timing_from = '0';
								$night_timing_to ='0';
								$night_fare = '0';
								$evening_charge = '0';
								$evening_timing_from = '0';
								$evening_timing_to ='0';
								$evening_fare = '0';
								$waiting_per_hour = '0';
								$minutes_cost= '0';
								if(count($taxi_fare_details) > 0)
								{
									$base_fare = $taxi_fare_details[0]['base_fare'];
									$min_km_range = $taxi_fare_details[0]['min_km'];
									$min_fare = $taxi_fare_details[0]['min_fare'];
									$cancellation_fare = $taxi_fare_details[0]['cancellation_fare'];
									$below_above_km_range = $taxi_fare_details[0]['below_above_km'];
									$below_km = $taxi_fare_details[0]['below_km'];
									$above_km = $taxi_fare_details[0]['above_km'];
									$night_charge = $taxi_fare_details[0]['night_charge'];
									$night_timing_from = $taxi_fare_details[0]['night_timing_from'];
									$night_timing_to = $taxi_fare_details[0]['night_timing_to'];
									$night_fare = $taxi_fare_details[0]['night_fare'];
									$evening_charge = $taxi_fare_details[0]['evening_charge'];
									$evening_timing_from = $taxi_fare_details[0]['evening_timing_from'];
									$evening_timing_to = $taxi_fare_details[0]['evening_timing_to'];
									$evening_fare = $taxi_fare_details[0]['evening_fare'];
									$waiting_per_hour = $taxi_fare_details[0]['waiting_time'];
									$minutes_fare = $taxi_fare_details[0]['minutes_fare'];
								}
								
								// Which is used when the driver send waiting time as minutes
								/*$split_time = explode(":",$waiting_time);
								
								if(count($split_time) == 3)
								{
									//Converting to Hours
									$waiting_hours = $split_time[0]/60;
								}
								else
								{
									//Converting to Hours
									$waiting_hours = $split_time[0];
									$waiting_hours += $split_time[1]/60;
								}
								print_r($split_time);echo '<br>';
								echo count($split_time);echo '<br>';
								echo $waiting_hours;exit;*/
								$roundtrip="No";
								if($pickupdrop == 1)
								{
									$roundtrip = "Yes";
									//$total_distance = $total_distance * 2;
								}
								// Minutes travelled functionlity starts here
								/*$trip_seconds = strtotime($drop_time) - strtotime($actual_pickup_time);
								$trip_days    = floor($trip_seconds / 86400);
								$trip_hours   = floor(($trip_seconds - ($trip_days * 86400)) / 3600);
								$trip_minutes = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600))/60);
								$trip_seconds = floor(($trip_seconds - ($trip_days * 86400) - ($trip_hours * 3600) - ($trip_minutes*60)));*/
								/********Minutes fare calculation *******/ 
							   $interval  = abs(strtotime($drop_time) - strtotime($actual_pickup_time));
							   $minutes   = round($interval / 60);       
							   /********Minutes fare calculation *******/
								//$minutes=$trip_minutes;
								// Minutes travelled functionlity ends here
								if(FARE_CALCULATION_TYPE==1 || FARE_CALCULATION_TYPE==3)
								{
									if($total_distance < $min_km_range)
									{
										$total_fare = $min_fare;
									}
									else if($total_distance <= $below_above_km_range)
									{
										$fare = $total_distance * $below_km;
										$total_fare  = 	$fare + $base_fare ;
									}
									else if($total_distance > $below_above_km_range)
									{
										$fare = $total_distance * $above_km;
										$total_fare  = 	$fare + $base_fare ;
									}
								}
								if(FARE_CALCULATION_TYPE==2 || FARE_CALCULATION_TYPE==3)
								{
									/********** Minutes fare calculation ************/
									//$date_difference = abs($drop_time - $actual_pickup_time);
									//$minutes = floor(((($date_difference % 604800) % 86400) % 3600) / 60);
									if($minutes_fare > 0)
									{
										$minutes_cost = $minutes * $minutes_fare;
										$total_fare  = $total_fare + $minutes_cost;
									}
									/************************************************/
								}
								
								$trip_fare = $total_fare;

								// Waiting Time calculation
								$waiting_cost = $waiting_per_hour * $waiting_hours;
								$total_fare = $waiting_cost + $total_fare;		
												
								
								
								//Night Fare Calculation
								$nightfare_applicable=$date_difference=0;
								if ($night_charge != 0) 
								{
									if( $pickuptime >= $night_timing_from && $pickuptime <= $night_timing_to)
									{									
										$nightfare_applicable = 1;
										$nightfare = ($night_fare/100)*$total_fare;//night_charge%100;					
										$total_fare  = $nightfare + $total_fare;
									}
								}
								
								//Evening Fare Calculation
								$eveningfare = 0;
								$evefare_applicable=$date_difference=0;
								if ($evening_charge != 0) 
								{
									if( $pickuptime >= $evening_timing_from && $pickuptime <= $evening_timing_to)
									{									
										$evefare_applicable = 1;
										$eveningfare = ($evening_fare/100)*$total_fare;//night_charge%100;					
										$total_fare  = $eveningfare + $total_fare;
									}
								}
								
								// Passenger individual Discount Calculation				
								$discount_fare="0.00";
								if($passenger_discount!='0')
								{
									$discount_fare = ($passenger_discount/100)*$total_fare;				
									$total_fare = $total_fare - $discount_fare;
								}	
									
								/*echo FARE_CALCULATION_TYPE;
								echo '<br>';
								echo $total_fare;
								exit;					*/
								// Referral Discount Claculation							
								$siteinfo_details = $api->siteinfo_details();
								$promo_discount = $promodiscount_amount = 0;
								if($promocode != "")
								{
									$promodetails = $api->getpromodetails($promocode,$passengers_id);
									//print_r($promodetails);
									if($promodetails > 0)
									{
										$promo_discount = $promodetails;
										$calculate_amt = ($promo_discount/100)*$total_fare;
										$promodiscount_amount = round($calculate_amt,2);
										$total_fare = $total_fare-$promodiscount_amount;
										//if($promodiscount_amount > 0)
										//$update_promo_discount = $api->update_promo_discount($passengers_id,$promocode,$promodiscount_amount);
									}
									else 
									{
										$promodiscount = 0;
										$promodiscount_amount = 0;
									}					
								}
								$referral_discount = $siteinfo_details[0]['referral_discount'];
								$referdiscount = 0;
								if($referred_by != "")
								{
									$check_reg_passenger_first_trip = $api->reg_passenger_first_trip($passengers_id);
									if($check_reg_passenger_first_trip ==1)
									{
										//Update referral_earned_amount in Passenger Table when registere complete first trip
										//$update_ref_discount = $api->update_ref_discount($referred_by,$referral_discount);
										// Calculate discount for registered user first trip
										//$referdiscount = ($referral_discount/100)*$total_fare;
										//Update registered user get discount and it detail to  passengers_referral_list when he complete first trip
										//$update_registerer_discount = $api->update_registerer_discount($passengers_id,$trip_id,$referral_discount);
										//$total_fare = $total_fare-$referdiscount;									
									}						
								}
								//if(($referral_earned_amount >=$referral_discount) && ($referrer_earned != 1))
								if($referrer_earned != 1)
								{
									// Calculate discount for referred user if he have earned discount and not used previously
									//$referdiscount = ($referral_discount/100)*$total_fare;
									//$update_referer_earn_status = $api->update_referer_earn_status($passengers_id);
								}
								// Company Tax amount Calculation							
								$tax_amount = "";
								if($tax > 0)
								{
										$tax_amount = ($tax/100)*$total_fare;//night_charge%100;							
										$total_fare =  $total_fare+$tax_amount;
								}
								$total_fare = ($fixedprice != 0) ? $fixedprice : $total_fare;														
								$trip_fare = round($trip_fare,2);
								$total_fare = round($total_fare,2);
								$subtotal_fare = $total_fare;//to display the actual total trip fare in complete trip page
								$usedAmount = 0;
								if($travel_status != 5) {//condition checked to avoid amount detection while trip is in waiting for payment status
									/** Referral amount detection if the passenger have amount in their wallet **/
									$show_credit_payment = 1;
									$passenger_referral = $api->check_passenger_referral_amount($passengers_id);
									$passenger_wallet = $api->get_passenger_wallet_amount($passengers_id);
									if($siteinfo_details[0]['referral_settings'] == 1 && count($passenger_referral) > 0 ) {
										if($total_fare > $passenger_referral[0]['referral_amount']) {
											$total_fare = $total_fare - $passenger_referral[0]['referral_amount'];
										} else {
											$total_fare = 0;
											$show_credit_payment = 0;
										}
										$balance_wallet_amount = $passenger_wallet[0]['wallet_amount'] - $passenger_referral[0]['referral_amount'];
										//update wallet amount in passenger table
										$update_wallet_array = ["wallet_amount" => $balance_wallet_amount];
										$wallet_update = $api->update_table(PASSENGERS,$update_wallet_array,'id',$passengers_id);
										//to add the referral amount in referred passengers( the person whose referral code is used ) wallet 
										$referredPass = $api->passenger_detailsbyreferralcode($passenger_referral[0]['referral_code']);
										$refeWallAmount = isset($referredPass[0]['wallet_amount']) ? $referredPass[0]['wallet_amount'] : 0;
										$tot_wallAmount = $refeWallAmount + $passenger_referral[0]['referral_amount'];
										//update wallet amount in passenger table
										$update_wallet_referred = ["wallet_amount" => $tot_wallAmount];
										$api->update_table(PASSENGERS,$update_wallet_referred,'id',$passengers_id);
										//update referral amount used status in passenger referral table
										$update_referral_used = ["referral_amount_used" => "1"];
										$referral_used_update = $api->update_table(PASSENGER_REFERRAL,$update_referral_used,'passenger_id',$passengers_id);
										//wallet amount used
										$usedAmount = $passenger_referral[0]['referral_amount'];
									} else {
										if($siteinfo_details[0]['referral_settings'] == 1 && count($passenger_wallet) > 0 && $passenger_wallet[0]['wallet_amount'] != 0) {
											if($total_fare > $passenger_wallet[0]['wallet_amount']) {
												$total_fare = $total_fare - $passenger_wallet[0]['wallet_amount'];
												$balance_wallet_amount = 0;
												//wallet amount used
												$usedAmount = $passenger_wallet[0]['wallet_amount'];
											} else {
												//wallet amount used
												$usedAmount = $total_fare;
												$balance_wallet_amount = $passenger_wallet[0]['wallet_amount'] - $total_fare;
												$total_fare = 0;
												$show_credit_payment = 0;
											}
											$update_wallet_array = ["wallet_amount" => $balance_wallet_amount];
											$wallet_update = $api->update_table(PASSENGERS,$update_wallet_array,'id',$passengers_id);	
										}
									}
									//to update the used wallet amount for a trip in passenger log table
									$update_usedAmount_array = ["used_wallet_amount" => $usedAmount];
									$api->update_table(PASSENGERS_LOG,$update_usedAmount_array,'passengers_log_id',$trip_id);
									/** Referral amount detection if the passenger have amount in their wallet **/
								} else {
									$usedAmount = $used_wallet_amount;
									$total_fare = $total_fare - $used_wallet_amount;
								}
								$referdiscount = 0;//round($referdiscount,2);
								$discount_fare = round($discount_fare,2);
								$tax_amount = round($tax_amount,2);
								$nightfare = round($nightfare,2);
								
								//$total_fare = ($usedAmount >= $total_fare) ? 0 : $total_fare;

								//For testing purpose only
								/*if($total_fare==0){
									$total_fare =5;
								}*/
								//For testing purpose only
								
								if(SMS ==1)
								{
									$passenger_phone_no=$api->get_passenger_phone_by_id($passengers_id);
									$message_details = $this->commonmodel->sms_message_by_title('complete_trip');
									$to = $passenger_phone_no;
									$message = $message_details['sms_description'];
									$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
									//$api->send_sms($to,$message);
								}
								/** Update Driver Status End**/		
								//variable to know whether the passenger have credit card
								$check_card_data = $api->check_passenger_card_data($passengers_id);
								$credit_card_sts = ($check_card_data == 0) ? 0:1;
								//condition checked to remove creditcard key value from array
								if($check_card_data == 0) {
									//condition checked to remove credit card if the passenger dont have credit card details
									$smpleArr = [];
									foreach($gateway_details as $key=>$valArr){
										if($valArr['pay_mod_id'] != 2) {
											$smpleArr[] = $valArr;
										}
									}
									$gateway_details = $smpleArr;
								}
								
								//to change the payment mode detail if trip fare is zero
								if($total_fare == 0) {
									$gateway_details = ["0"=>["pay_mod_id"=>"5","pay_mod_name"=>"Wallet","pay_mod_default"=>"1"]];
								}
								
								//the hours value has been changed to seconds
								$convertSeconds = $waiting_hours * 3600;
								$converthours = floor($convertSeconds / 3600);
								$convertmins = floor(($convertSeconds - ($converthours*3600)) / 60);
								$convertsecs = floor($convertSeconds % 60);
								$waitH = ($converthours < 10) ? '0'.$converthours : $converthours;
								$waitM = ($convertmins < 10) ? '0'.$convertmins : $convertmins;
								$waitS = ($convertsecs < 10) ? '0'.$convertsecs : $convertsecs;
								$waitingTime = ($waitH != "00") ? $waitH.':'.$waitM.':'.$waitS.' Hours' :  $waitM.':'.$waitS.' Mins';
								$detail = ["trip_id" => $trip_id,"pass_id"=>$passengers_id,"distance"=>$total_distance,"trip_fare"=>$trip_fare,"referdiscount"=>$referdiscount,"promo_discount_per"=>$promo_discount,"promodiscount_amount"=>$promodiscount_amount,"passenger_discount"=>$discount_fare,"nightfare_applicable"=>$nightfare_applicable,"nightfare"=>$nightfare,"eveningfare_applicable"=>$evefare_applicable,"eveningfare"=>$eveningfare,"waiting_time"=>$waitingTime,"waiting_cost"=>$waiting_cost,"tax_amount"=>$tax_amount,"subtotal_fare"=>$subtotal_fare,"total_fare"=>$total_fare,"gateway_details"=>$gateway_details,"pickup"=>$pickup,"drop"=>$drop_location,"company_tax"=>$tax,"waiting_per_hour" => $waiting_per_hour, "roundtrip"=> $roundtrip,"minutes_traveled"=>$minutes,"minutes_fare"=>$minutes_cost,"metric"=>UNIT_NAME,"credit_card_status"=>$credit_card_sts,"wallet_amount_used"=>$usedAmount];
											
								$message = ["message"=>__('trip_completed_driver'),"detail"=>$detail,"status"=>4];
								//print_r($message);
								//exit;
								/** Send Trip fare details to Driver ***/
								$d_device_token = $get_passenger_log_details[0]->driver_device_token;
								$d_device_type = $get_passenger_log_details[0]->driver_device_type;
								//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);	
								/** Send Trip fare details to Passenger ***/
								$pushmessage = ["message"=>__('trip_completed'),"status"=>4];
								$p_device_token = $get_passenger_log_details[0]->passenger_device_token;
								$p_device_type = $get_passenger_log_details[0]->passenger_device_type;

								//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api);						
								//$message = $pushmessage;
							}
							else if($travel_status == 1)
							{
								$message = ["message" => __('trip_already_completed'),"status"=>-1];	
							}		
							else
							{
								$message = ["message" => __('trip_not_started'),"status"=>-1];
							}
						}
				}
				else
				{
					$message = ["message" => __('invalid_trip'),"status"=>-1];	
				}
			}
			else
			{
				$message = ["message" => __('invalid_trip'),"status"=>-1];	
			}
		}
		else
		{
			$message = ["message" => __('invalid_request'),"status"=>-1];	
		}
		echo json_encode($message);
		break;
			//http://192.168.1.88:1003/api/index/dGF4aV9hbGw=?type=tripfare_update&trip_id=7&distance=25&actual_distance=&actual_amount=85&trip_fare=&fare=90&tips=0.50&passenger_discount=remarks=test%20driviing&nightfare_applicable=&remarks=&tax_amount=100&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&nightfare=&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=1

			//Cash :
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=1252&distance=25&actual_distance=&actual_amount=&trip_fare=120&fare=180.50&tips=10.50&passenger_discount=10&tax_amount=20&remarks=test%20driviing&nightfare_applicable=1&nightfare=20&waiting_time=1.6&waiting_cost=0.50&minutes_traveled=10&minutes_fare=150&creditcard_no=&creditcard_cvv=&expmonth=&expyear=&pay_mod_id=1

			//Card :
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=709&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=2

			//Uncard :
			//http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=tripfare_update&trip_id=990&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=3
			
			//Account :
			//http://192.168.1.73:1013/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0==/?type=tripfare_update&trip_id=58&distance=25&actual_distance=&actual_amount=&trip_fare=&fare=90&fare=90&tips=0.50&passenger_discount=&tax_amount=&remarks=test%20driviing&nightfare_applicable=&nightfare=&waiting_time=1.6&waiting_cost=0.333&minutes_traveled=10&minutes_fare=150&creditcard_no=4024007155409633&creditcard_cvv=567&expmonth=12&expyear=2031&pay_mod_id=4&group_id=&account_id=
			case 'tripfare_update':
			//$array = $_GET;		
			$array = $mobiledata;							
			$driver_model = Model::factory('driver');
			$api_model = Model::factory(MOBILEAPI_107);	
			//
			$pay_mod_id = $array['pay_mod_id'];
			if($pay_mod_id == '1' ||  $pay_mod_id == '2' ||  $pay_mod_id == '4' ||  $pay_mod_id == '5')
			{
				$validator = $this->payment_validation($array);
			}
			else
			{
				$validator = $this->payment_validationwith_card($array);	
			}
			$driver_statistics=[];
			if($validator->check())
			{

				$passenger_log_id = $array['trip_id'];
				if($array['actual_distance'] == "")
					$distance = $array['distance'];
				else
					$distance = $array['actual_distance'];				
				$actual_amount = $array['actual_amount'];
				$remarks = $array['remarks'];
				$minutes_traveled=$array['minutes_traveled'];
				$minutes_fare=$array['minutes_fare'];
				$trip_fare = $array['trip_fare']; // Trip Fare without Tax,Tips and Discounts
				$fare = round($array['fare'],2); // Total Fare with Tax,Tips and Discounts can editable by driver
				$tips = round($array['tips'],2); // Tips Optional
				$nightfare_applicable = $array['nightfare_applicable'];
				$nightfare = $array['nightfare'];	
				$eveningfare_applicable = $array['eveningfare_applicable'];
				$eveningfare = $array['eveningfare'];	
				$tax_amount = $array['tax_amount'];
				// Actual amount means if any deviations in trip fare driver will update it manualy but now this is not required.
				/*if($actual_amount != null)
				{
					$trip_fare = $actual_amount;
				}
				else
				{	
					$trip_fare = $fare;	
				}*/
				$trip_fare = round($trip_fare,2);	
				$total_fare = $fare;// + $tips; // Total fare with Tips if exist
				$amount = round($total_fare,2); // Total amount which is used for pass to payment gateways
				$get_passenger_log_details = $api->get_passenger_log_detail($passenger_log_id);		
				//print_r($get_passenger_log_details);exit;		
				if(count($get_passenger_log_details) > 0)
				{
					$promocode = $get_passenger_log_details[0]->promocode;
					$promodiscount_amount = isset($array['passenger_promo_discount'])?$array['passenger_promo_discount']:"";					
					$flag = 1;
					$trans_result = $api_model->check_tranc($passenger_log_id,$flag);
					if($trans_result == 1)
					{
						/********** Update Driver Status after complete Payments *****************/									
						$drivers_id = $get_passenger_log_details[0]->driver_id;
						$update_driver_arrary = ["status" => 'F'];
						$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$drivers_id);	
						/************Update Driver Status ***************************************/				
						$msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
						$journey = $api->update_journey_status($passenger_log_id,$msg_status,$driver_reply,$journey_status);
						/*************** Update in driver request table ******************/
						$update_trip_array  = ["status"=>'8'];
						$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_log_id);		
						/*************************************************************************/	
								if(count($get_passenger_log_details) > 0)
								{
											$default_companyid = isset($get_passenger_log_details[0]->company_id) ? $get_passenger_log_details[0]->company_id : $default_companyid;
											// Driver Statistics ********************/
											$driver_logs_rejected = $api->get_rejected_drivers($drivers_id,$default_companyid);	
											$rejected_trips = count($driver_logs_rejected);	
											$driver_cancelled_trips = $api->get_driver_cancelled_trips($drivers_id,$default_companyid);
											$driver_earnings = $api->get_driver_earnings_with_rating($drivers_id,$default_companyid);
											$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
											$driver_statistics = [];
											$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
																			
											foreach($driver_earnings as $stat){
											$total_trip++;
											$total_ratings += $stat['rating'];
											$total_amount += $stat['total_amount'];											
											}
											$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;					
											$time_driven = $api->get_time_driven($drivers_id,'R','A','1');	
											$driver_statistics = [ 
												"total_trip" => $overall_trip,
												"completed_trip" => $total_trip,
												"total_earnings" => round($driver_tot_earnings,2),
												"overall_rejected_trips" => $rejected_trips,
												"cancelled_trips" => $driver_cancelled_trips,
												"today_earnings"=>round($total_amount,2),											
												"shift_status"=>'IN',
												"time_driven"=>$time_driven,
												"status"=> 1
											  ]; 
											//$driver_details[0]["driver_statistics"]=$statistics;				
											/**************************************************/	
								}
								else
								{
									$driver_statistics=[];
								}
										//Driver Statistics Functionality End
						$message = ["message" => __('trip_fare_already_updated'), "status"=>-1];
						$message['driver_statistics']=$driver_statistics;
						echo json_encode($message);
						break;

					}
					
					if($array['pay_mod_id'] == 1 || $array['pay_mod_id'] == 5)//5 for wallet payment
					{																				
							//Inserting to Transaction Table 
							try {
								//$passenger_log_id = $passenger_log_id;
								//$msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
								//$journey = $driver_model->update_journey_status($passenger_log_id,$msg_status,$driver_reply,$journey_status);
								
								$update_commission = $this->commonmodel->update_commission($passenger_log_id,$total_fare,ADMIN_COMMISSON);
								
								$insert_array = [
									"passengers_log_id" => $passenger_log_id,
									"distance" 			=> $array['distance'],
									"actual_distance" 	=> $array['actual_distance'],
									"distance_unit" 	=> UNIT_NAME,
									"tripfare"			=> $trip_fare,
									"fare" 				=> $fare,
									"tips" 				=> $tips,
									"waiting_cost"		=> $array['waiting_cost'],
									"passenger_discount"=> $array['passenger_discount'],
									"company_tax"		=> $tax_amount,
									"waiting_time"		=> $array['waiting_time'],
									"trip_minutes"		=> $minutes_traveled,
									"minutes_fare"		=> $minutes_fare,
									"remarks"			=> $remarks,
									"payment_type"		=> $array['pay_mod_id'],
									"amt"				=> $amount,
									"nightfare_applicable" => $nightfare_applicable,
									"nightfare" 		=> $nightfare,
									"eveningfare_applicable" => $eveningfare_applicable,
									"eveningfare" 		=> $eveningfare,
									"admin_amount"		=> $update_commission['admin_commission'],
									"company_amount"	=> $update_commission['company_commission'],
									"trans_packtype"	=> $update_commission['trans_packtype']
								];
								$check_trans_already_exist = $api->checktrans_details($passenger_log_id);
								if(count($check_trans_already_exist)>0)
								{
									$tranaction_id = $check_trans_already_exist[0]['id'];
									$update_transaction = $api->update_table(TRANS,$insert_array,'id',$tranaction_id);
									$jobreferral = $tranaction_id;
								}
								else
								{
									$transaction = $this->commonmodel->insert(TRANS,$insert_array);		
									$jobreferral = mysql_insert_id();									
								}
								/********** Update Driver Status after complete Payments *****************/
								$drivers_id = $get_passenger_log_details[0]->driver_id;
								$update_driver_arrary = ["status" => 'F'];
								$result = $api->update_table(DRIVER,$update_driver_arrary,'driver_id',$drivers_id);	
								if($promodiscount_amount > 0)
								$update_promo_discount = $api->update_promo_discount($passenger_log_id,$promocode,$promodiscount_amount);
								/************Update Driver Status ***************************************/	
								/*************** Update in driver request table ******************/
								$update_trip_array  = ["status"=>'8'];
								$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_log_id);		
								/*************************************************************************/
								$pickup = $get_passenger_log_details[0]->current_location;			
								
								if(SMS == 1)
								{
									$passenger_phone_no =$get_passenger_log_details[0]->phone;
									$message_details = $this->commonmodel->sms_message_by_title('payment_confirmed_sms');
									$to = $passenger_phone_no;
									$message = $message_details['sms_description'];
									//$message = str_replace("##booking_key##",SITE_NAME,$message);
									$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
									$api->send_sms($to,$message);
								}
								
								$detail = ["fare" => $amount,"pickup" => $pickup,"jobreferral"=>$jobreferral,"trip_id"=>$passenger_log_id];			
								$message = ["message" => __('trip_fare_updated'),"detail"=>$detail,"status"=>1];		
								$pushmessage = ["message" => __('trip_fare_updated'),"fare" => $amount,"trip_id"=>$passenger_log_id,"pickup" => $pickup, "status"=>5];
								//print_r($pushmessage);
								//exit;

								//$message = $pushmessage;	
								$send_mail_status = $this->send_mail_passenger($passenger_log_id,1);								
							}
							catch (Kohana_Exception $e) {
								//	print_r($e);
								$message = ["message" => __('trip_fare_already_updated'), "status"=>-1];			
							}
					}
					else if($array['pay_mod_id'] == 2)
					{
						//$passenger_cardid = $array['passenger_cardid'];
						//$carddetails = $api->getcard_details($passenger_cardid);
						$passengers_id = $get_passenger_log_details[0]->passengers_id;
						$card_type = '';
						$default = 'yes';
						$carddetails = $api->get_creadit_card_details($passengers_id,$card_type,$default);					
						 if(count($carddetails)>0)
						 {
							$creditcard_no = encrypt_decrypt('decrypt',$carddetails[0]['creditcard_no']);										
							$creditcard_cvv = $array['creditcard_cvv'];
							$expmonth = $carddetails[0]['expdatemonth'];
							$expyear = $carddetails[0]['expdateyear'];
							
							if($creditcard_no != "")
							{
								$payment_status = $this->trippayment($array,$default_companyid);//$account_id
								if($payment_status == 0)
								{
									$gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0'])?$_SESSION['paymentresponse']['L_LONGMESSAGE0']:'Payment Failed';
									$message = ["message" => $gateway_response, "gateway_response" =>$gateway_response,"status"=>0];		
								}				
								else if($payment_status == 3)
								{
									$message = ["message" => __('gve_credit_card_details'), "status"=>-2];		
								}
								else if($payment_status == 1)
								{
									$tranaction_id = "";
									$check_trans_already_exist = $api->checktrans_details($passenger_log_id);
									if(count($check_trans_already_exist)>0)
									{
										$tranaction_id = $check_trans_already_exist[0]['id'];
									}
									if($promodiscount_amount > 0)
									$update_promo_discount = $api->update_promo_discount($passenger_log_id,$promocode,$promodiscount_amount);
										$jobreferral = $tranaction_id;
										$pickup = $get_passenger_log_details[0]->current_location;
										$detail = ["fare" => $amount,"pickup" => $pickup,"jobreferral"=>$jobreferral,"trip_id"=>$passenger_log_id];
										$message = ["message" => __('trip_fare_updated'), "detail" => $detail,"status"=>1];	
										$pushmessage = ["message" => __('trip_fare_updated'),"fare" => $amount,"trip_id"=>$passenger_log_id,"pickup" => $pickup, "status"=>5];
										/*************** Update in driver request table ******************/
										$update_trip_array  = ["status"=>'8'];
										$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_log_id);		
										/*************************************************************************/										
										$send_mail_status = $this->send_mail_passenger($passenger_log_id,1);
								}
								else if($payment_status == -1)
								{
									$message = ["message" => __('invalid_trip'),"status"=>-1];	
								}
								else if($payment_status == 7)
								{
									$message = ["message" => __('no_payment_gateway'),"status"=>-1];	
								}
							}
							else
							{
								$message = ["message" => __('no_creditcard'),"status"=>-9];
							} 
						 }		
						 else
						 {			 								
							 $message = ["message" => __('no_card'),"status"=>-9];
						 }
					}
					else if($array['pay_mod_id'] == 3)
					{
						$creditcard_no = $array['creditcard_no'];
						$creditcard_cvv = $array['creditcard_cvv'];
						$expmonth = $array['expmonth'];
						$expyear = $array['expyear'];
						$authorize_status =$api->isVAlidCreditCard($creditcard_no,"",true);
						
						if($authorize_status == 1)
						{
							$payment_status = $this->trippayment($array,$default_companyid);//$account_id
							if($payment_status == 0)
							{
								$gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0'])?$_SESSION['paymentresponse']['L_LONGMESSAGE0']:'Payment Failed';
								$message = ["message" => $gateway_response, "gateway_response" =>$gateway_response,"status"=>0];		
							}				
							else if($payment_status == 3)
							{
								$message = ["message" => __('gve_credit_card_details'), "status"=>-2];		
							}
							else if($payment_status == 1)
							{
								$tranaction_id = "";
								$check_trans_already_exist = $api->checktrans_details($passenger_log_id);
								if(count($check_trans_already_exist)>0)
								{
									$tranaction_id = $check_trans_already_exist[0]['id'];
								}
								if($promodiscount_amount > 0)
								$update_promo_discount = $api->update_promo_discount($passenger_log_id,$promocode,$promodiscount_amount);
								$jobreferral = $tranaction_id;
								$pickup = $get_passenger_log_details[0]->current_location;
								$detail = ["fare" => $amount,"pickup" => $pickup,"jobreferral"=>$jobreferral,"trip_id"=>$passenger_log_id];
								$message = ["message" =>  __('trip_fare_updated'), "detail" => $detail,"status"=>1];	
								$pushmessage = ["message" => __('trip_fare_updated'),"fare" => $amount,"trip_id"=>$passenger_log_id,"pickup" => $pickup, "status"=>5];
								/*************** Update in driver request table ******************/
								$update_trip_array  = ["status"=>'8'];
								$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_log_id);		
								/*************************************************************************/								
								/** Send Trip fare details to Driver ***/
								$d_device_token = $get_passenger_log_details[0]->driver_device_token;
								$d_device_type = $get_passenger_log_details[0]->driver_device_type;
								//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);	
								/** Send Trip fare details to Passenger ***/
								$p_device_token = $get_passenger_log_details[0]->passenger_device_token;
								$p_device_type = $get_passenger_log_details[0]->passenger_device_type;
								//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api);	
								$send_mail_status = $this->send_mail_passenger($passenger_log_id,1);
							}
							else if($payment_status == -1)
							{
								$message = ["message" => __('invalid_trip'),"status"=>-1];	
							}
						}
						else
						{
							$message = ["message" => __('invalid_card'),"status"=>-9];
						}
					}
					else if($array['pay_mod_id'] == 4)
					{
							//$account_id = $get_passenger_log_details[0]->account_id;
							//$accgroup_id = $get_passenger_log_details[0]->accgroup_id;
							
							//Account of Selected Passenger
							$account_id = $array['account_id'];
							$accgroup_id = $array['group_id'];
							

							if($account_id != 0)
							{
								$account_details = $api->get_account_discount($account_id);
								//print_r($get_passenger_profile);
								//print_r($account_discount);
								if(count($account_details)>0)
								{
									$account_holder_id = $account_details[0]['passid'];
									$get_passenger_profile = $api_model->passenger_profile($account_holder_id,$default_companyid);							
									$account_holder_status = $get_passenger_profile[0]['user_status'];
									if($account_holder_status == 'A')
									{
										$card_type = '';
										$default = 'yes';
										$carddetails = $api->get_creadit_card_details($account_holder_id,$card_type,$default);
										//echo $creditcard_no;exit;
										if(count($carddetails) > 0)
										{									
											$account_limit=$grp_limit="";//exit;
											$total_used_limit=$bal_limit=0;
											$account_limit = $account_details[0]['limit'];															
											$grouplimit = $api->get_groupdetails($accgroup_id);									
											if(count($grouplimit) > 0)
											{
												$grp_limit = $grouplimit[0]['limit'];
												if($grp_limit > 0)
												{
													$passenger_id_array = explode(',',$grouplimit[0]['passenger_id']);
													
													foreach($passenger_id_array as $passenger_id)
													{
														$bal_account_limit = $api->check_used_limit($passenger_id);
														if(count($bal_account_limit)>0)
														{
															if($bal_account_limit[0]['total_used_limit'] >0)
															{															
																$total_used_limit += $bal_account_limit[0]['total_used_limit'];
															}
														}	
													}	
													$bal_limit = $grp_limit - $total_used_limit;

													if($bal_limit > $amount)
													{
														//Inserting to Transaction Table 
															try 
															{
																$array['account_holder_id']=$account_holder_id;
																$payment_status = $this->trippayment($array,$default_companyid);//$account_holder_id			
																if($payment_status == 0)
																{
																	$gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0'])?$_SESSION['paymentresponse']['L_LONGMESSAGE0']:'Payment Failed';
																	$message = ["message" => $gateway_response, "gateway_response" =>$gateway_response,"status"=>0];		
																}				
																else if($payment_status == 3)
																{
																	$message = ["message" => __('gve_credit_card_details'), "status"=>-2];		
																}
																else if($payment_status == 1)
																{
																	$tranaction_id = "";
																	$check_trans_already_exist = $api->checktrans_details($passenger_log_id);
																	if(count($check_trans_already_exist)>0)
																	{
																		$tranaction_id = $check_trans_already_exist[0]['id'];
																	}
																	$pickup = $get_passenger_log_details[0]->current_location;
																	//$jobreferral = mysql_insert_id();
																	$jobreferral = $tranaction_id;
																	$detail = ["fare" => $amount,"pickup" => $pickup,"jobreferral"=>$jobreferral,"trip_id"=>$passenger_log_id];
																	$message = ["message" =>  __('trip_fare_updated'), "detail" => $detail,"driver_statistics"=>$driver_statistics,"status"=>1];	
																	$pushmessage = ["message" => __('trip_fare_updated'),"trip_id"=>$passenger_log_id,"fare" => $amount,"pickup" => $pickup, "status"=>5];
																	/*************** Update in driver request table ******************/
																	$update_trip_array  = ["status"=>'8'];
																	$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$passenger_log_id);		
																	/*************************************************************************/																	
																	/** Send Trip fare details to Driver ***/
																	$d_device_token = $get_passenger_log_details[0]->driver_device_token;
																	$d_device_type = $get_passenger_log_details[0]->driver_device_type;
																	//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);	
																	/** Send Trip fare details to Passenger ***/
																	$p_device_token = $get_passenger_log_details[0]->passenger_device_token;
																	$p_device_type = $get_passenger_log_details[0]->passenger_device_type;
																	//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api);	
																	$send_mail_status = $this->send_mail_passenger($passenger_log_id,1);
																}
																else if($payment_status == -1)
																{
																	$message = ["message" => __('invalid_trip'),"status"=>-1];	
																}											
															}
															catch (Kohana_Exception $e) 
															{
																$message = ["message" =>__('trip_fare_already_updated'), "status"=>-1];			
															}
													}
													else
													{
														$message = ["message" => __('no_sufficient_credits'),"status"=>-12];
													}
												}
												else
												{
													$message = ["message" => __('no_credits_in_account'),"status"=>-11];
												}
											}
											else
											{
												$message = ["message" => __('group_account_deactive'),"status"=>-10];
											}
										}
										else
										{
											$message = ["message" => __('no_creditcard'),"status"=>-9];
										}
									}
									else
									{
										$message = ["message" => __('account_holder_deactive'),"status"=>-8];
									}
								}
								else
								{
									$message = ["message" => __('account_deactive'),"status"=>-7];
								}
							}
							else
							{
								$message = ["message" => __('no_account'),"status"=>-6];								
							}
							
					}
					
					//Driver Statistics Functionality Start
					$driver_id = $get_passenger_log_details[0]->driver_id;
					$default_companyid = isset($get_passenger_log_details[0]->company_id) ? $get_passenger_log_details[0]->company_id : $default_companyid;
					// Driver Statistics ********************/
					$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$default_companyid);	
					$rejected_trips = count($driver_logs_rejected);	
					$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$default_companyid);
					$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$default_companyid);
					$statistics = [];
					$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
					foreach($driver_earnings as $stat){
							$total_trip++;
							$total_ratings += $stat['rating'];
							$total_amount += $stat['total_amount'];											
					}
					
					$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;													
					$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
					$driver_statistics = [ 
									"total_trip" => $overall_trip,
									"completed_trip" => $total_trip,
									"total_earnings" => round($total_amount,2),
									"overall_rejected_trips" => $rejected_trips,
									"cancelled_trips" => $driver_cancelled_trips,
									"today_earnings"=>round($total_amount,2),											
									"shift_status"=>'IN',
									"time_driven"=>$time_driven,
									"status"=> 1
											  ];
					/**************************************************/
					
				}
				else
				{
					$message = ["message" => __('invalid_trip'),"status"=>-1];
				}
			}
			else
			{
					$validation_error = $validator->errors('errors');	
					$message = ["message" => $validation_error,"status"=>-3];						
			}
						
					//Driver Statistics Functionality End
			$message['driver_statistics']=$driver_statistics;
			echo json_encode($message);
			break;			
			/*END OF DRIVER DETAILS*/

			//URL : http://192.168.1.88:1000/api/index/dGF4aV9hbGw=?type=cancel_trip&passenger_log_id=48&travel_status=4&remarks=test driviing&pay_mod_id=2&creditcard_cvv=

			case 'cancel_trip':			
			$driver_model = Model::factory('driver');
			$api_model = Model::factory(MOBILEAPI_107);	
			$cancel_trip_array = $mobiledata;		
			$passenger_log_id = $cancel_trip_array['passenger_log_id'];
			$remarks = $cancel_trip_array['remarks'];

			$check_travelstatus = $api_model->check_travelstatus($passenger_log_id);
			//echo $check_travelstatus;exit('out');
			if($check_travelstatus == -1)
			{
				$message = ["message" => __('invalid_trip'),"status"=>3];
				echo json_encode($message);
				break;
			}

			if($check_travelstatus == 4)
			{
				$message = ["message" => __('trip_already_canceled'), "status"=>-1];
				echo json_encode($message);
				break;
			}
						
			if($check_travelstatus == 2)
			{
				$message = ["message" => __('passenger_in_journey'), "status"=>-1];
				echo json_encode($message);
				break;
			}
			
			$flag = 1;
			 $trans_result = $api_model->check_tranc($passenger_log_id,$flag);

			if($trans_result == 1)
			{
				$message = ["message" => __('trip_fare_already_updated'), "status"=>-1];
				echo json_encode($message);
				break;
			}

				if($cancel_trip_array['passenger_log_id'] != null)
				{
				$get_passenger_log_det = $api_model->get_passenger_log_detail($passenger_log_id);
				//print_r($get_passenger_log_det);exit;
				$driver_id = $get_passenger_log_det[0]->driver_id;
				$passenger_id = $get_passenger_log_det[0]->passengers_id;
				$passenger_name = $get_passenger_log_det[0]->passenger_name;
				$passenger_email = $get_passenger_log_det[0]->passenger_email;
				$pickup_location = $get_passenger_log_det[0]->current_location;
				$cancel_trip_array['company_id'] = $get_passenger_log_det[0]->company_id;
				$cancellation_nfree = (FARE_SETTINGS == 2) ? $get_passenger_log_det[0]->cancellation_nfree : CANCELLATION_FARE;
				$status = "F";
				$result = $api_model->update_driver_status($status,$driver_id);
			
				if($cancellation_nfree == 0)
				{  
					 if(SMS == 1)
					{
						$phone_no=$api->get_driver_phone_by_id($driver_id);
						$message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
						$to = $phone_no;
						$message = $message_details['sms_description'];
						//$message = str_replace("##OTP##",$otp,$message);
						$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
						
						$api->send_sms($to,$message);
					}
					$payment_types=0;
					$transaction_detail=$api_model->cancel_triptransact_details($cancel_trip_array,$cancellation_nfree,$payment_types);
						$pushmessage = ["message"=>__('trip_cancelled_passenger'), "status"=>2];
						$d_device_token = $get_passenger_log_det[0]->driver_device_token;
						$d_device_type = $get_passenger_log_det[0]->driver_device_type;
						//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);
					$message = ["message" => __('trip_cancel_passenger'),"cancellation_from"=> __('Free'),"cancellation_amount"=> 0, "status"=>2];	//with out cancellation fee
					echo json_encode($message);
				}
				else
				{
					$total = $api_model->get_passenger_cancel_faredetail($passenger_log_id);
					$passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
					//echo $passenger_id.">".$passenger_wallet[0]['wallet_amount'].">". $total;exit;
					if($cancel_trip_array['pay_mod_id'] == 3 || (count($passenger_wallet) > 0 && $passenger_wallet[0]['wallet_amount'] >= $total)) // By cash
					{
						$get_passenger_log_details = $driver_model->get_passenger_log_details($passenger_log_id);

						if(count($get_passenger_log_details) > 0)
						{													
							//Inserting to Transaction Table 
							try {			
								$siteinfo_details = $api_model->siteinfo_details(); 
								$update_commission = $this->commonmodel->update_commission($passenger_log_id,$total,$siteinfo_details[0]['admin_commission']);

							$insert_array = [
									"passengers_log_id" => $passenger_log_id,
									"remarks"		=> $remarks,
									"payment_type"		=> $cancel_trip_array['pay_mod_id'],
									"amt"			=> $total,
									"admin_amount"		=> $update_commission['admin_commission'],
									"company_amount"	=> $update_commission['company_commission'],
									"trans_packtype"	=> $update_commission['trans_packtype']
								];

								$transaction = $this->commonmodel->insert(TRANS,$insert_array);
								
								$update_travel_status_array  = ["travel_status" => '4']; // Passenger Cancelled
								$result_sts_update = $api->update_table(PASSENGERS_LOG,$update_travel_status_array,'passengers_log_id',$passenger_log_id);
								/*$status_array  = array("status" => '4'); // Passenger Cancelled
								$result_sts_update = $api->update_table(DRIVER_REQUEST_DETAILS,$status_array,'trip_id',$passenger_log_id);*/
								$cancel_from = __('Cash');
								//to reduce the wallet amount while cancelling the trip
								if(count($passenger_wallet) > 0 && $passenger_wallet[0]['wallet_amount'] >= $total){
									$balance_wallet_amount = $passenger_wallet[0]['wallet_amount'] - $total;
									//update wallet amount in passenger table
									$update_wallet_array = ["wallet_amount" => $balance_wallet_amount];
									$wallet_update = $api->update_table(PASSENGERS,$update_wallet_array,'id',$passenger_id);
									$cancel_from = __('Wallet');
								}
								
								if(SMS == 1)
					            {
								$phone_no=$api->get_driver_phone_by_id($driver_id);
								$message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
								$to = $phone_no;
								$message = $message_details['sms_description'];
								//$message = str_replace("##OTP##",$otp,$message);
								$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
								
								$api->send_sms($to,$message);
							    }
								
								
								$pushmessage = ["message"=>__('trip_cancelled_passenger'), "status"=>2];	
								$d_device_token = $get_passenger_log_det[0]->driver_device_token;
								$d_device_type = $get_passenger_log_det[0]->driver_device_type;
								//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);
								$message = ["message" => __('trip_cancel_passenger'),"cancellation_from"=> $cancel_from,"cancellation_amount"=> $total, "status"=>1];
								echo json_encode($message);					
								//$send_mail_status = $this->send_mail_passenger($passenger_log_id,4);
							}
								catch (Kohana_Exception $e) {
								//	print_r($e);
								$message = ["message" => __('try_again'), "status"=>3];			
							}
						}
						else
						{
								$message = ["message" => __('invalid_trip'),"status"=>3];	
						}
					}
					else
					{
						$card_type = '';
						$default = 'yes';
						$carddetails = $api->get_creadit_card_details($passenger_id,$card_type,$default);	
						$no_default_card = $api->get_creadit_card_details($passenger_id,$card_type,"");							
						//echo count($carddetails);exit;
						 if(count($carddetails)>0)
						 {
							$payment_status = $this->cancel_trippayment($cancel_trip_array,$cancellation_nfree,$default_companyid);
							$cancelArr = ($payment_status != 0) ? explode("#",$payment_status):'';
							$payment_status = isset($cancelArr[0]) ? $cancelArr[0] : 0;
							$cancelAmount = isset($cancelArr[1]) ? $cancelArr[1] : 0;
							if($payment_status == 0)
							{
								$gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0'])?$_SESSION['paymentresponse']['L_LONGMESSAGE0']:'Payment Failed';
								$message = ["message" => __('cancel_payment_failed'), "gateway_response" =>$gateway_response,"status"=>0];		
								echo json_encode($message);
								break;
							}				
							else if($payment_status == 1)
							{
								
							    if(SMS == 1)
					            {
								$phone_no=$api->get_driver_phone_by_id($driver_id);
								$this->commonmodel = Model::factory('commonmodel');								
								$message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
								$to = $phone_no;
								$message = $message_details['sms_description'];
								//$message = str_replace("##OTP##",$otp,$message);
								$message = str_replace("##SITE_NAME##",SITE_NAME,$message);
								$api->send_sms($to,$message);
						     	}
						     	
								$message = ["message" => __('trip_cancel_passenger'),"cancellation_from"=> __('credit_card'),"cancellation_amount"=> $cancelAmount, "status"=>1];
								$pushmessage = ["message"=>__('trip_cancelled_passenger'), "status"=>2];
								$d_device_token = $get_passenger_log_det[0]->driver_device_token;
								$d_device_type = $get_passenger_log_det[0]->driver_device_type;
								//$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);
								$send_mail_status = $this->send_cancel_fare_mail_passenger($cancelAmount, $passenger_name, $pickup_location, $passenger_email);
								echo json_encode($message);
								break;						
							}
							else if($payment_status == -1)
							{
								$message = ["message" => __('invalid_trip'),"status"=>3];	
								echo json_encode($message);
								break;
							}
						} else if (count($carddetails) == 0 && count($no_default_card) > 0) {
							$message = ["message" => __('passenger_has_no_default_creditcard'),"status"=>5];	
							echo json_encode($message);		
							break;	
						} else {
								/*$status = "F";
								$result = $api_model->update_driver_status($status,$driver_id);
								$transaction_detail=$api_model->cancel_triptransact_details($array,$cancellation_nfree);
								$pushmessage = array("message"=>__('trip_cancelled_passenger'), "status"=>2);
								$d_device_token = $get_passenger_log_det[0]->driver_device_token;
								$d_device_type = $get_passenger_log_det[0]->driver_device_type;
								$d_send_notification = $api->send_driver_mobile_pushnotification($d_device_token,$d_device_type,$pushmessage,$this->driver_android_api);
								$message = array("message" => __('cancel_fare_update'),"status"=>1);									
								$send_mail_status = $this->send_mail_passenger($passenger_log_id,4);	*/
								$message = ["message" => __('cancel_no_creditcard'),"status"=>4];	
								echo json_encode($message);		
								break;				
						}
					}
				}
				}
				else
				{
					$message = ["message" => __('invalid_trip'),"status"=>3];	
					echo json_encode($message);
					break;
				}				
				//echo json_encode($message);
			break;												
				/** driver document upload api ***/
			//http://192.168.1.82:1023/mobileapi109/index/dGF4aV9hbGw=/?type=driver_document_upload, method = post, driver_id,driver_document,device_type
			case 'driver_document_upload':
				$p_personal_array = $mobiledata;				
					//for ios
					if($p_personal_array['driver_document'] != NULL)
					{						
						$dirname = $p_personal_array['driver_id'];						
						$imgdata = base64_decode($p_personal_array['driver_document']);
						$f = finfo_open();
						$mime_type = finfo_buffer($f, $imgdata, FILEINFO_MIME_TYPE);
						//echo '<img src="data:image/jpg;base64,' . $p_personal_array['driver_document'].'" />';
						//print_r($mime_type);
						//exit;
						$mime_type = explode('/',$mime_type);
						$mime_type = $mime_type[1];
						$img = imagecreatefromstring($imgdata); 							
							if($img != false)
							{                   
								$image_name = uniqid().'.'.$mime_type;
								$thumb_image_name = 'thumb_'.$image_name;			
								$image_path = DOCROOT.PUBLIC_UPLOADS_FOLDER.'/'.$image_name; 					
								$image_url = DOCROOT.PUBLIC_UPLOADS_FOLDER.'/'.$image_name;                    								
								//header('Content-Type: image/jpeg');					
								//$image_path = DOCROOT.PUBLIC_UPLOADS_FOLDER.'/'.$image_name; 
								//echo  $image_path;exit;
								imagejpeg($img,$image_url);
								imagedestroy($img);
								chmod($image_path,0777);
								$d_image = Image::factory($image_path);
								$foldername = DOCROOT.PUBLIC_UPLOADS_FOLDER."/driver_documents/".$dirname."/";

								if (!file_exists($foldername)) {
									mkdir(DOCROOT.PUBLIC_UPLOADS_FOLDER."/driver_documents/".$dirname, 0777);
								}
								//function called to unlink previous files from the folder
								$api->previous_files_unlink($foldername);
								Commonfunction::imageresize($d_image,DRIVER_DOC_IMG_WIDTH, DRIVER_DOC_IMG_HEIGHT,$foldername,$image_name,90);
								chmod($foldername,0777);
								unlink($image_path);
								$message = ["message" => __('file_upload_success'),"status"=>1];
							} else {
								$message = ["message" => __('image_not_upload'),"status"=>-1];
							}
					} else {
						$message = ["message" => __('image_not_upload'),"status"=>-1];
					} 				
				echo json_encode($message);
				exit;
		

			/* start of Passenger Forgot Password */		
		//URL : api/?type=forgot_password&phone_no=9999999999&user_type=P
		case 'forgot_password':												
		$array_values = $mobiledata;
		$message="";		
						if($array_values['user_type'] == 'P')
						{
							$check_fb_user = $api->check_fb_user($array_values['phone_no'],$default_companyid,$array_values['country_code']);
							if($check_fb_user > 0){
								$message = ["message" => __('fb_user'),'status' => 3];
								echo json_encode($message);
								break;
							}
							$phone_exist = $api->check_phone_passengers($array_values['phone_no'],$default_companyid,$array_values['country_code']);
						}
						else
						{
							$phone_exist = $api->check_phone_people($array_values['phone_no'],'D',$default_companyid);
						}	
						
						if($phone_exist > 0)
						{							
							$forgot_result = $api->get_passenger_details_phone($array_values,$default_companyid);							
							if(count($forgot_result) > 0) 
							{ 					
								$email = $forgot_result[0]['email'];
				                $mail="";
								if($array_values['user_type'] == 'P') {
												$replace_variables= [REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$forgot_result[0]['name'],REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,SITE_DESCRIPTION=>$this->app_description,RESET_LINK=>URL_BASE.'passengers/resetpassword/?phone_no='.$array_values['phone_no'].'&activation_key='.$forgot_result[0]['activation_key'],REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>COMPANY_COPYRIGHT];
								}
								else
								{
												$replace_variables= [REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$forgot_result[0]['name'],REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,SITE_DESCRIPTION=>$this->app_description,RESET_LINK=>URL_BASE.'driver/resetpassword/?phone_no='.$array_values['phone_no'],REPLACE_COMPANYDOMAIN=>$this->domain_name,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR];
								}								
			/*Added for language email template */
			if($this->lang!='en'){
			if(file_exists(DOCROOT.TEMPLATEPATH.$this->lang.'/reset-forgotpassword-'.$this->lang.'.html')){
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.$this->lang.'/reset-forgotpassword-'.$this->lang.'.html',$replace_variables);
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'reset-forgotpassword.html',$replace_variables);
			}
			}else{
			$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'reset-forgotpassword.html',$replace_variables);
			}
			/* Added for language email template */

								$to = $email;
								$from = $this->siteemail;
								$subject = __('forgot_password_subject')." - ".$this->app_name;	
								$redirect = "no";	
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
								$message = ["message" => __('forgot_pass_success'),'status' => 1];
							}
							else
							{
								$message = ["message" => __('invalid_user'),'status' => 2];
							}
	
						}
						else
						{
							$message = ["message" => __('invalid_user'),"status"=> 2];							
						}					
								
					echo json_encode($message);
					break;
				
				//http://192.168.1.88:1020/api/index/bnRheGlfYlVtUzZGMUJMVDY4VTZtWkdYaDNnRFV2WE5BRGo0==/?type=reject_trip&trip_id=12&driver_id=&reason=&reject_type=1
				case 'reject_trip':
				$array = $mobiledata;
				//print_r($array);
				$trip_id = $array['trip_id'];
				$reject_type = $array['reject_type'];
				$driver_id = $array['driver_id'];
				$taxi_id=$array['taxi_id'];
				$company_id= $array['company_id'];
				if($trip_id != "")
				{			
					//$passenger_log_details = $api->get_passenger_log_detail($trip_id);
					$passenger_log_details = $api->get_trip_detail_only($trip_id);
					//print_r($passenger_log_details);exit;					
					if(count($passenger_log_details) >0)
					{							
						$post=[];
						$post['driver_id']=$driver_id;
						$post['passengers_id']=$passenger_log_details[0]->passengers_id;
						$post['passengers_log_id']=$trip_id;
						$post['reason']=$array['reason'];	
						$company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($company_id);
						$post['createdate']= $company_all_currenttimestamp;
						$operator_id = $passenger_log_details[0]->operator_id;					
						if($reject_type == 1)
						{	
									if($passenger_log_details[0]->driver_reply == 'R')
									{
										$message=__('trip_cancel_timeout');
										$msg = ["message" => $message,"status" => '8'];	
										echo json_encode($msg);//exit;
									} 
									else if ($passenger_log_details[0]->travel_status == 6) 
									{
										$message = ["message" => __('trip_already_canceled'), "status"=>4];
										echo json_encode($message);
										break;
									}
									else
									{
										//push message for rejected driver
										$rejected_driver=$passenger_log_details[0]->driver_id;
										$passengers_log_id=$trip_id;
										$push_msg = __('request_rejected');
										$message = ["message"=>$push_msg,"trip_id"=>$passengers_log_id,"trip_detail"=>"","status"=>6];
										
										/********** Update Trip Status *****************/
										$driver_reply = "";
										//$update_trip_array  = array("driver_reply" => 'R');
										//$result = $api->update_table(PASSENGERS_LOG,$update_trip_array,'passengers_log_id',$passengers_log_id);	
										$get_driver_request = $api->get_driver_request($trip_id);
										//print_r($get_driver_request);exit;
										if($get_driver_request != 0)
										{
											/******* Update the driver id in */
											$rejection_type = 1;
											$prev_rejected_timeout_drivers = $get_driver_request[0]['rejected_timeout_drivers'];
											$status = $get_driver_request[0]['status'];

											$get_request_dets=$api->check_new_request_tripid($taxi_id,$company_id,$trip_id,$driver_id,$company_all_currenttimestamp,"",$operator_id);
											
											if($prev_rejected_timeout_drivers != "")
											{
												$rejected_timeout_drivers = $prev_rejected_timeout_drivers.','.$driver_id;
											}
											else
											{
												$rejected_timeout_drivers = $driver_id;
											}
											
											if($status != '4')
											{										
												$update_trip_array  = ["status"=>'0',"rejected_timeout_drivers" => $rejected_timeout_drivers];
												//$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);							
											}
											$add_rejected_list = $api->add_rejected_list($post,$rejection_type);
											// Driver Statistics ********************/
											$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$company_id);	
											$rejected_trips = count($driver_logs_rejected);	
											//to get cancelled trip counts from drivers
											$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$company_id);
											$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$company_id);
											$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
											$statistics = [];
											$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
																			
											foreach($driver_earnings as $stat){
											$total_trip++;
											$total_ratings += $stat['rating'];
											$total_amount += $stat['total_amount'];											
											}
											$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;							
											$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
											$statistics = [ 
												"total_trip" => $overall_trip,
												"completed_trip" => $total_trip,
												"total_earnings" => round($driver_tot_earnings,2),
												"overall_rejected_trips" => $rejected_trips,
												"cancelled_trips" => $driver_cancelled_trips,
												"today_earnings"=>round($total_amount,2),											
												"shift_status"=>'IN',
												"time_driven"=>$time_driven,
												"status"=> 1
											  ]; 
											
											$message = ["message" => __('request_rejected'),"driver_statistics"=>$statistics,"status" => 6];
										}								
										/***********************************************************************************/							
									}
						}
						else
						{
								$get_driver_request = $api->get_driver_request($trip_id);
//print_r($get_driver_request);exit;
								$rejection_type = 0;
								if($get_driver_request != 0)
								{
									/******* Update the driver id in */
									$prev_rejected_timeout_drivers = $get_driver_request[0]['rejected_timeout_drivers'];
									$status = $get_driver_request[0]['status'];
									$reject_driversArr = explode(",",$prev_rejected_timeout_drivers);
									if(!in_array($driver_id, $reject_driversArr)) 
									{
											if($prev_rejected_timeout_drivers != "")
											{
												$rejected_timeout_drivers = $prev_rejected_timeout_drivers.','.$driver_id;
											}
											else
											{
												$rejected_timeout_drivers = $driver_id;
											}
										$get_request_dets=$api->check_new_request_tripid($taxi_id,$company_id,$trip_id,$driver_id,$company_all_currenttimestamp,"",$operator_id);	
										if($status != '4')
										{
											$update_trip_array  = ["status"=>'0',"rejected_timeout_drivers" => $rejected_timeout_drivers];
											$result = $api->update_table(DRIVER_REQUEST_DETAILS,$update_trip_array,'trip_id',$trip_id);
																		
										}
									}
									$add_rejected_list = $api->add_rejected_list($post,$rejection_type);
									// Driver Statistics ********************/
									$driver_logs_rejected = $api->get_rejected_drivers($driver_id,$company_id);	
									$rejected_trips = count($driver_logs_rejected);	
									//to get cancelled trip counts from drivers
									$driver_cancelled_trips = $api->get_driver_cancelled_trips($driver_id,$company_id);
									$driver_earnings = $api->get_driver_earnings_with_rating($driver_id,$company_id);
									$driver_tot_earnings = $api->get_driver_total_earnings($driver_id);
									$statistics = [];
									$total_trip = $trip_total_with_rate = $total_ratings = $today_earnings = $total_amount=0;
																	
									foreach($driver_earnings as $stat){
									$total_trip++;
									$total_ratings += $stat['rating'];
									$total_amount += $stat['total_amount'];											
									}
									$overall_trip = $total_trip + $rejected_trips + $driver_cancelled_trips;							
									$time_driven = $api->get_time_driven($driver_id,'R','A','1');	
									$statistics = [ 
										"total_trip" => $overall_trip,
										"completed_trip" => $total_trip,
										"total_earnings" => round($driver_tot_earnings,2),
										"overall_rejected_trips" => $rejected_trips,
										"cancelled_trips" => $driver_cancelled_trips,
										"today_earnings"=>round($total_amount,2),											
										"shift_status"=>'IN',
										"time_driven"=>$time_driven,
										"status"=> 1
									  ]; 
									
									$message = ["message" => __('driver_reply_timeout'),"driver_statistics"=>$statistics,"status" => 7];
									
								}		
						}	
					}
					else
					{
						$message = ["message" => __('invalid_trip'),"status"=>2];
					}						
			}
			else
			{
				$message =__('trip_id_req');
				$message = ["message" => $message,"status" => '-1'];
			}
			echo json_encode($message);
			exit;
		}
		exit;				
		
		
	}
	else
	{
		$message = ["message" => __('invalid_company'),"status"=>-8];
		//"url_explode"=>$find_url,"count"=>count($apikey_result),"encrypt valu"=>$company_api_encrypt,"decrypt valu"=>$company_api_decrypt,"descrypt_split"=>$company_split,"Company APK"=>$company_api_key);
		echo json_encode($message);
		exit;
	}
}
	
							
}


?>
