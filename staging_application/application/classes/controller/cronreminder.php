<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cronreminder extends Controller_Siteadmin 
{

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		$this->emailtemplate=Model::factory('emailtemplate');
		$this->domain_name = SUBDOMAIN;
	}

	//5 days before Reminder to all companies
	public function action_reminder()
	{
		//$r_array=array();
		$cronremainder_model = Model::factory('Cronreminder');
		
		$remainder_status = $cronremainder_model->cron_reminder();
		//print_r($remainder_status);exit;
		
		if($remainder_status !=0)
		{
			$r_array = array();
			foreach($remainder_status as $rs)
			{
				if($rs['timezone'] !=""){
					$this->current_time = convert_timezone('now',$rs['timezone']);
					$this->current_date = explode(' ',$this->current_time);
					$this->start_time = $this->current_date[0].' 00:00:01';
					$this->end_time = $this->current_date[0].' 23:59:59';
					$this->date = $this->current_date[0];
				}else{
					$this->current_time =	date('Y-m-d H:i:s');
					$this->start_time = date('Y-m-d').' 00:00:01';
					$this->end_time = date('Y-m-d').' 23:59:59';
					$this->date = date('Y-m-d');
				}
					$company_cid = $rs['company_cid'];
					//echo '<br>';
					// Get the company package expiry date details which is must be recent package
					$company_package_expiry_date = $cronremainder_model->get_company_package_expdate($company_cid);
					
					if($company_package_expiry_date != 0)
					{
						$expiry_date = strtotime($company_package_expiry_date[0]['upgrade_expirydate'] . ' -5 day');
						$date_dif=date('Y-m-d', $expiry_date);
						//echo $this->date."-------".$date_dif."--------".$company_package_expiry_date[0]['upgrade_expirydate'].'-----'.$rs['company_name']."<br>"."<br>";
						
						//Check whrther the company current date is equal to company expiry date which is 5 days before
						if($this->date==$date_dif)
						{
													
							$r_company_email=$rs['company_email_id'];
							$r_upgrade_packageid=$company_package_expiry_date[0]['upgrade_packageid'];
							$r_upgrade_packagename=$company_package_expiry_date[0]['upgrade_packagename'];
							$r_upgrade_no_taxi=$company_package_expiry_date[0]['upgrade_no_taxi'];
							$r_upgrade_expirydate=$company_package_expiry_date[0]['upgrade_expirydate'];
							$r_company_client_name=$company_package_expiry_date[0]['name'];
							$r_company_name=$rs['company_name'];
							//echo $this->date."--".$r_company_name;
							//echo '<br>';
							$remind_msg = __('reminder_message_before_5_days');
							if($r_upgrade_packageid==5){
								$remind_msg=__('trial_reminder_message_before_5_days');
							}elseif($r_upgrade_packageid==6){
								$remind_msg=__('reminder_message_before_5_days');
							}
							
							$r_array=array(
								'r_company_email'=>$r_company_email,
								'r_upgrade_packagename'=>$r_upgrade_packagename,
								'r_upgrade_no_taxi'=>$r_upgrade_no_taxi,
								'r_upgrade_expirydate'=>$r_upgrade_expirydate,
								'r_company_name'=>$r_company_name,
								'r_company_client_name'=>$r_company_client_name
							);
								//Send Reminder mail to company owners

							$validator = $this->feedback_validation($r_array);
							if($validator->check())
							{
								
								$mail="";
								
								$company_name = $r_array['r_company_name'];
								$company_client_name = $r_array['r_company_client_name'];
								$package_name = $r_array['r_upgrade_packagename'];
								$no_of_taxis = $r_array['r_upgrade_no_taxi'];
								$taxi_charge = TAXI_CHARGE;
								$total_amount = TAXI_CHARGE * $no_of_taxis;

								$subject = SITE_NAME.__('package_renewal');
								$message = $remind_msg;
								$replace_variables=array(
									REPLACE_LOGO=>EMAILTEMPLATELOGO,
									REPLACE_SITENAME=>$this->app_name,
									REPLACE_COMPANY=>ucfirst($company_name),
									REPLACE_CLIENT_NAME=>ucfirst($company_client_name),
									REPLACE_PACKAGE=>$package_name,
									REPLACE_TAXIS=>$no_of_taxis,
									REPLACE_CHARGE=>$taxi_charge,
									REPLACE_AMOUNT=>$total_amount,
									REPLACE_CURRENCY=>CURRENCY,
									REPLACE_SUBJECT=>$subject,
									REPLACE_MESSAGE=>$message,
									REPLACE_SITEEMAIL=>$this->siteemail,
									REPLACE_SITEURL=>URL_BASE,
									REPLACE_COMPANYDOMAIN=>$this->domain_name,
									REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,
									REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR
								);
												
								$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'package_renewal.html',$replace_variables);
								//echo $message;exit;
								//echo $to = "abuthahir.m@ndot.in";
								//$to = "senthilkumar.a@ndot.in,maheswaran.r@ndot.in";//
								$to = $r_array['r_company_email'].",senthilkumar.a@ndot.in,maheswaran.r@ndot.in";
								$from = $this->siteemail;
								//echo $to."--".$from;exit;
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
								echo 'Reminder Sent successfully.';//exit;
							}
							else
							{
								$detail = $validator->errors('errors');
								$message = array("detail"=>$detail,"message"=>__('validation_error'));
								echo 'No data found';//exit;
								//print_r($detail);exit;
							}
							
						} //print_r($r_array);
					}		
			}		
			

		
		}
		else
		{
			echo "No data found";
		}
	exit;
	}
	
	//1 Day before Reminder to all companies
	public function action_oneday_reminder()
	{
		$cronremainder_model = Model::factory('Cronreminder');
		
		$remainder_status = $cronremainder_model->cron_reminder();
		//print_r($remainder_status);exit;
		if($remainder_status !=0)
		{
			$r_array = array();
			foreach($remainder_status as $rs)
			{
				if($rs['timezone'] !=""){
					$this->current_time = convert_timezone('now',$rs['timezone']);
					$this->current_date = explode(' ',$this->current_time);
					$this->start_time = $this->current_date[0].' 00:00:01';
					$this->end_time = $this->current_date[0].' 23:59:59';
					$this->date = $this->current_date[0];
				}else{
					$this->current_time =	date('Y-m-d H:i:s');
					$this->start_time = date('Y-m-d').' 00:00:01';
					$this->end_time = date('Y-m-d').' 23:59:59';
					$this->date = date('Y-m-d');
				}
					$company_cid = $rs['company_cid'];
					//echo '<br>';
					// Get the company package expiry date details which is must be recent package
					$company_package_expiry_date = $cronremainder_model->get_company_package_expdate($company_cid);
					//print_r($company_package_expiry_date);exit;
					if($company_package_expiry_date != 0)
					{
						
						$expiry_date = strtotime($company_package_expiry_date[0]['upgrade_expirydate'] . ' -1 day');
						$date_dif=date('Y-m-d', $expiry_date);
						echo $this->date."-----".$date_dif."-----".$rs['company_name']."-----".$company_package_expiry_date[0]['upgrade_expirydate']."<br>";
						//exit;
						//Check whrther the company current date is equal to company expiry date which is 1 days before
						if($this->date==$date_dif)
						{
							$r_company_email=$rs['company_email_id'];
							$r_upgrade_packageid=$company_package_expiry_date[0]['upgrade_packageid'];
							$r_upgrade_packagename=$company_package_expiry_date[0]['upgrade_packagename'];
							$r_upgrade_no_taxi=$company_package_expiry_date[0]['upgrade_no_taxi'];
							$r_upgrade_expirydate=$company_package_expiry_date[0]['upgrade_expirydate'];
							$r_company_client_name=$company_package_expiry_date[0]['name'];
							$r_company_name=$rs['company_name'];
							//echo $this->date."--".$r_company_client_name;exit;
							//echo '<br>';
							$remind_msg=__('reminder_message_before_1_day');
							if($r_upgrade_packageid==5){
								$remind_msg=__('trial_reminder_message_before_1_day');
							}elseif($r_upgrade_packageid==6){
								$remind_msg=__('reminder_message_before_1_day');
							}
							
							$r_array=array(
								'r_company_email'=>$r_company_email,
								'r_upgrade_packagename'=>$r_upgrade_packagename,
								'r_upgrade_no_taxi'=>$r_upgrade_no_taxi,
								'r_upgrade_expirydate'=>$r_upgrade_expirydate,
								'r_company_name'=>$r_company_name,
								'r_company_client_name'=>$r_company_client_name
							);
							//Send Reminder mail to company owners
							$validator = $this->feedback_validation($r_array);
							if($validator->check())
							{
								$mail="";								
								$company_name = $r_array['r_company_name'];
								$package_name = $r_array['r_upgrade_packagename'];
								$no_of_taxis = $r_array['r_upgrade_no_taxi'];
								$company_client_name = $r_array['r_company_client_name'];
								
								$taxi_charge = TAXI_CHARGE;
								$total_amount = TAXI_CHARGE * $no_of_taxis;

								$subject = SITE_NAME.__('package_renewal');
								$message = $remind_msg;
								$replace_variables=array(
									REPLACE_LOGO=>EMAILTEMPLATELOGO,
									REPLACE_SITENAME=>$this->app_name,
									REPLACE_COMPANY=>ucfirst($company_name),
									REPLACE_CLIENT_NAME=>ucfirst($company_client_name),
									REPLACE_PACKAGE=>$package_name,
									REPLACE_TAXIS=>$no_of_taxis,
									REPLACE_CHARGE=>$taxi_charge,
									REPLACE_AMOUNT=>$total_amount,
									REPLACE_CURRENCY=>CURRENCY,
									REPLACE_SUBJECT=>$subject,
									REPLACE_MESSAGE=>$message,
									REPLACE_SITEEMAIL=>$this->siteemail,
									REPLACE_SITEURL=>URL_BASE,
									REPLACE_COMPANYDOMAIN=>$this->domain_name,
									REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,
									REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR
								);
												
								$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'package_renewal.html',$replace_variables);
								//echo $message;exit;
								//$to = "abuthahir.m@ndot.in";
								//$to = "senthilkumar.a@ndot.in";
								$to = $r_array['r_company_email'].",senthilkumar.a@ndot.in,maheswaran.r@ndot.in";
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
								echo 'Reminder Sent successfully.';
							}
							else
							{
								$detail = $validator->errors('errors');
								//print_r($detail);exit;
								$message = array("detail"=>$detail,"message"=>__('validation_error'));
								echo 'No Email-id found';
							}
						}
						
					}		
			//}
				 //exit;
			}
				
		}
		else
		{
			echo "No data found";
		}
		exit;
	}
	
	//Reminder for expired companies after expiry date of the company
	public function action_check_status_expiry()
	{
		
		$company_current_expiry_date=0;
		$cronremainder_model = Model::factory('Cronreminder');
		
		$remainder_status = $cronremainder_model->cron_reminder();

		if($remainder_status !=0)
		{
			$r_array=array();
			foreach($remainder_status as $rs)
			{
				//print_r($rs);exit;
				if($rs['timezone'] !=""){
					$this->current_time = convert_timezone('now',$rs['timezone']);
					$this->current_date = explode(' ',$this->current_time);
					$this->start_time = $this->current_date[0].' 00:00:01';
					$this->end_time = $this->current_date[0].' 23:59:59';
					$this->date = $this->current_date[0];
				}else{
					$this->current_time =	date('Y-m-d H:i:s');
					$this->start_time = date('Y-m-d').' 00:00:01';
					$this->end_time = date('Y-m-d').' 23:59:59';
					$this->date = date('Y-m-d');
				}
				
				$company_cid = $rs['company_cid'];
				// Get the company package expiry date details which is must be recent package
				$company_package_expiry_date = $cronremainder_model->get_company_package_expdate($company_cid);
				echo '<br>';
				
				if($company_package_expiry_date != 0)
				{
					
					$company_package_exp_date = $company_package_expiry_date[0]['upgrade_expirydate'];
					$expiry_date = strtotime($company_package_expiry_date[0]['upgrade_expirydate']. ' +1 day');
					$org_date_dif=date('Y-m-d', $expiry_date);
					echo 'date1-'.$org_date_dif;
					echo '----';
					echo '<br>';
					echo 'date2-'.$this->date;
					echo '<br>';
					
					$r_company_name="";
					// check After expiry
					if($org_date_dif<$this->date)
					{
												
						$r_company_email=$rs['company_email_id'];
						$r_upgrade_packagename=$company_package_expiry_date[0]['upgrade_packagename'];
						$r_upgrade_no_taxi=$company_package_expiry_date[0]['upgrade_no_taxi'];
						$r_upgrade_expirydate=$company_package_expiry_date[0]['upgrade_expirydate'];
						$r_company_client_name=$company_package_expiry_date[0]['name'];
						$r_company_name=$rs['company_name'];
						
						//echo $this->date."--".$r_company_name;
						//echo '<br>';
						$r_array=array(
							
							'r_company_email'=>$r_company_email,
							'r_upgrade_packagename'=>$r_upgrade_packagename,
							'r_upgrade_no_taxi'=>$r_upgrade_no_taxi,
							'r_upgrade_expirydate'=>$r_upgrade_expirydate,
							'r_company_name'=>$r_company_name,
							'r_company_client_name'=>$r_company_client_name
						);
						$deactive_company = $cronremainder_model->cron_deactive_company($company_cid);
						echo "<br>".$r_company_name.' company deactivated'."<br>";

						$validator = $this->feedback_validation($r_array);
						if($validator->check())
						{
							$mail="";
							
							$company_name = $r_array['r_company_name'];
							$package_name = $r_array['r_upgrade_packagename'];
							$no_of_taxis = $r_array['r_upgrade_no_taxi'];
							$taxi_charge = TAXI_CHARGE;
							$total_amount = TAXI_CHARGE * $no_of_taxis;
							$company_client_name = $r_array['r_company_client_name'];
							
							$subject = SITE_NAME.__('package_expired');
							$message = __('reminder_message');
							$replace_variables=array(
								REPLACE_LOGO=>EMAILTEMPLATELOGO,
								REPLACE_SITENAME=>$this->app_name,
								REPLACE_COMPANY=>ucfirst($company_name),
								REPLACE_CLIENT_NAME=>ucfirst($company_client_name),
								REPLACE_PACKAGE=>$package_name,
								REPLACE_TAXIS=>$no_of_taxis,
								REPLACE_CHARGE=>$taxi_charge,
								REPLACE_AMOUNT=>$total_amount,
								REPLACE_CURRENCY=>CURRENCY,
								REPLACE_SUBJECT=>$subject,
								REPLACE_MESSAGE=>$message,
								REPLACE_SITEEMAIL=>$this->siteemail,
								REPLACE_SITEURL=>URL_BASE,
								REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,
								REPLACE_COPYRIGHTYEAR=>COPYRIGHT_YEAR
							);
							$message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'package_renewal.html',$replace_variables);
							//echo $message;exit;

							//$to = "abuthahir.m@ndot.in";
							//$to = "senthilkumar.a@ndot.in";
							$to = $r_array['r_company_email'].",senthilkumar.a@ndot.in,maheswaran.r@ndot.in";
							
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
							echo 'Reminder Sent successfully.';
						}
						else
						{
							$detail = $validator->errors('errors');
							$message = array("detail"=>$detail,"message"=>__('validation_error'));
							//print_r($message);
							echo 'No company found';
						}
					}

				}
			}
		}
		else
		{
			echo "No data found";
		}
		exit;
	}


	function encrypt_decrypt($action, $string)
	{
	   $output = false;

	   $key = 'Taxi Application';

	   // initialization vector 
	   $iv = md5(md5($key));

	   if( $action == 'encrypt' ) {
	       $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
	       $output = base64_encode($string);
	   }
	   else if( $action == 'decrypt' ){
	       $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
	       //$output = rtrim($output, "");
	       $output = base64_decode($string);
	   }
	   return $output;
	}

	function feedback_validation($array)
	{
		return Validation::factory($array)
			->rule('r_company_email','not_empty');
	}

	function action_sent_notifications(){

		$cronremainder_model = Model::factory('Cronreminder');
		
		$notifycation_list = $cronremainder_model->pushnotification_list();

		if(count($notifycation_list)){

			foreach($notifycation_list as $notify){


				$title = $notify['title'];
				$message = $notify['message'];
				$image = $notify['image'];

				$notify_id = $notify['_id'];

				$android_image = $ios_image = '';

				if(isset($notify['image']) && file_exists($_SERVER["DOCUMENT_ROOT"].'/'.NOTIFY_IMG_IMGPATH.'/android/'.$notify['image']) && !empty($notify['image'])) 
                {
                    $android_image = URL_BASE.NOTIFY_IMG_IMGPATH.'/android/'.$notify['image'];
                }

                if(isset($notify['image']) && file_exists($_SERVER["DOCUMENT_ROOT"].'/'.NOTIFY_IMG_IMGPATH.'/ios/'.$notify['image']) && !empty($notify['image'])) 
                {
                    $ios_image = URL_BASE.NOTIFY_IMG_IMGPATH.'/ios/'.$notify['image'];
                }

                $passengers = $cronremainder_model->get_notification_passengers_list();

                //print_r($passengers);exit;

                //echo 555;exit;

                $android_ids = $ios_ids = array();

                $AndroidPushMessage  = array("message"=> $message,"title"=> $title,"image"=>$android_image,"status" => "38");

                $IosPushMessage  = array("message"=> $message,"title"=> $title,"image"=>$ios_image);               


                if(count($passengers)){

                	foreach($passengers as $pass){

                		if($pass['device_type'] == 1){

                			$android_ids[] = $pass['device_token'];
                		}else if($pass['device_type'] == 2){

                			$ios_ids[] = $pass['device_token'];
                		}

                		$passengers_ids[] = $pass['_id'];
                		
                	}


                	$status = $cronremainder_model->update_passenger_status($passengers_ids);
                	//print_r($passengers_ids);

                	/*if(count($android_ids)){

                		 $cronremainder_model->send_passenger_android_pushnotification($android_ids,$AndroidPushMessage);
                	}*/

					$ios_ids = ["e568f2d7f167a44db6330bec4ecfe891f9679343b9eea3dabb0081234e2186ec"];
                	if(count($ios_ids)){
                		$cronremainder_model->send_passenger_ios_pushnotification($ios_ids,$IosPushMessage);
                	}
                	

                }else{

                	$status = $cronremainder_model->change_notification_status($notify_id);
                	$statuss = $cronremainder_model->update_passenger_sent_status();

                }

                

                //print_r($android_ids);
				//print_r($ios_ids);
				exit;
			}
		}

		

		//$cronremainder_model->change_notification_status();

		exit;

	}
	
	// 03 Feb 2020
	public function action_auto_generate_promocode() {
		$cronremainder_model = Model::factory('Cronreminder');
			
		for($i=1;$i<=100;$i++) {
			$generate_promocode = $this->generate_promocode("NBK",3);			
			if(!$generate_promocode) {
				$generate_promocode1 = $this->generate_promocode("NBK",3);	
				if(!$generate_promocode1) {
					$generate_promocode2 = $this->generate_promocode("NBK",3);							
				}						
			}		
		}
		
		for($i=1;$i<=100;$i++) {
			$generate_promocode = $this->generate_promocode("UNBK",2);			
			if(!$generate_promocode) {
				$generate_promocode3 = $this->generate_promocode("UNBK",2);		
				if(!$generate_promocode3) {
					$generate_promocode4 = $this->generate_promocode("UNBK",2);								
				}						
			}		
		}	
		
		echo "Done";
		exit;		
	}
	
	public function generate_promocode($promocode_prefix,$digits) {
		$cronremainder_model = Model::factory('Cronreminder');
		$currenttime          = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
		$start_date           = "2020-02-05 00:00:00";
		$expire_date          = "2020-12-31 23:59:59";
		$length = 1;
		
		$str = substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil($length/strlen($x)) )),1,$digits);
		$random = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);		
		$promocode = $promocode_prefix.$str;
		$promocode_array = $promocode;
		$ins_array      	  = array(
					"company_id" => 1,
					"promocode" => $promocode,
					"package" => 7,
					"fixed_fare_amt"=>(int)0,
					"promo_type" => 1,
					"start_date" => $start_date,
					"expire_date" => $expire_date,
					"promo_limit" => 1,
					"auto_generated_promocode" => (int)$digits,
					"createdate" => $currenttime
				);
		$p_insert  = $cronremainder_model->insert_promocode($ins_array);		
		return $p_insert;		
	}
	
	public function action_clear_custom_interval(){
		$cronremainder_model = Model::factory('Cronreminder');
		$res = $cronremainder_model->clear_all_custom_interval();
		if(empty($res['err'])){
			echo "successfully updated";
		} else {
			echo "Failed to update";
		}
		exit();
	}
	// 03 Feb 2020

	public function action_update_passenger_fields(){
		$cronremainder_model = Model::factory('Cronreminder');
		$passenger_id = $_REQUEST['id'];
		$field_name = isset($_REQUEST['field_name'])?$_REQUEST['field_name']:'';
		$field_value = isset($_REQUEST['field_value'])?$_REQUEST['field_value']:'';

		$res = $cronremainder_model->update_any_field_passenger($passenger_id,$field_name,$field_value);
		if(empty($res['err'])){
			echo "successfully updated";
		} else {
			echo "Failed to update";
		}
		exit();
	}

	//26 feb 2021
	public function action_update_total_drivers() {
		$cronremainder_model = Model::factory('Cronreminder');
		
		$drivers_data = $cronremainder_model->getDriversData();
		if(!empty($drivers_data)) {
			foreach($drivers_data as $key => $value) {
				$res = $cronremainder_model->update_drivers_count($value['_id'],$value['count']);
			}
		}
		print "<pre>";
		print_r($drivers_data);
		exit;
	}
	//26 feb 2021	

}
?>
