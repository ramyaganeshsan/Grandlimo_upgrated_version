<?php defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains Finding By IP details


* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Find extends Controller_Website {

	/**
	****__construct()****
	*/	
	public function action_index()
	{  		
		$view=View::factory(USERVIEW.'find');				
		$this->template->content=$view;
		$this->template->title=$this->title;	
	}
	
	public function action_search()
	{
		
		$find_model = Model::factory('find');
		
		$this->session = Session::instance();
		$data_address = $this->session->get('data_address');
		$current_location = $this->session->get("current_location");
		$drop_location = $this->session->get("drop_location");
		$no_passenger = $this->session->get("no_passengers");
		//$pickup_time = $this->session->get("pickup_time");
		$pickup_time = '';
		$userid =$this->session->get('id');
		$content = $this->commonmodel->getcontents('search');
		
		// get cancel_rejected_driver_id for current user
		if(isset($userid))
		{
			$cancel_reject_trips = $find_model->get_cancel_reject_trips($userid);
			//print_r($cancel_reject_trips);
			$driver_ids ="";
			foreach($cancel_reject_trips as $values)
			{
				$driver_ids .= $values['driver_id'].',';
			}
			$cancel_rejected_driver_id = substr($driver_ids,0,strlen($driver_ids)-1);
		}
		else
		{
			$cancel_rejected_driver_id = "";
		}
		////////////
		if($data_address == null)
		{
			//$ip=$_SERVER['SERVER_ADDR'];
			$ip=IPADDRESS;		
			$api_link = 'http://api.ipinfodb.com/v3/ip-city/?key='.IPINFOAPI_KEY.'&ip='.$ip.'&format=json';
			$data_address = @file_get_contents($api_link);			
			$this->session->set('data_address',$data_address);
		}					
		
		$json_data = json_decode($data_address);	
		
		$miles = $this->session->get('miles');
		$no_passengers = '';
		$bookingtime = '';
		//Sending the latitude and lonitude to the file
		$driver_details = $find_model->get_driver_location($json_data->latitude,$json_data->longitude,$miles,$no_passengers,$bookingtime);	
		
		$getMiles = $find_model->getMiles();
		//print_r($getMiles);
		$view=View::factory(USERVIEW.'find')
				->bind('data_address',$data_address)			
				->bind('current_location',$current_location)
				->bind('drop_location',$drop_location)
				->bind('no_passengers',$no_passenger)
				->bind('pickup_time',$pickup_time)
				->bind('lastdriver_id',$lastdriver_id)
				->bind('getMiles',$getMiles)
				->bind('cancel_rejected_driver_id',$cancel_rejected_driver_id)
				->bind('content',$content)						
				->bind('driver_details',$driver_details);			
		
		$this->template->content=$view;
		$this->template->title=$this->title;	
	}

	//Function for Ajax ; getting the Driver Location
	public function action_get_driver_location()
	{
		if(isset($_POST["latitude"]))
		{
			$find_model = Model::factory('find');
			$latitude = $_POST["latitude"];
			$longitude = $_POST["longitude"];
			$no_passengers = $_POST["no_passengers"];
			$miles = $_POST["miles"];
			$bookingtime = $_POST["bookingtime"];
			/** Unset passenger search sessions **/
			$this->session->set("current_location",'');
			$this->session->set("drop_location",'');
			$this->session->set("no_passengers",'');
			$this->session->set("pickup_time",'');
			/*************/
			$driver_details = $find_model->get_driver_location($latitude,$longitude,$miles,$no_passengers,$bookingtime);

			echo json_encode($driver_details);
			
			exit;
		}
	}
	
	public function action_displayname()
	{
		echo 'demo testing';
		exit;
	}
	
	public function action_advancesearch()
	{

		$find_model = Model::factory('find');
		$this->session = Session::instance();
		$data_address = $this->session->get('data_address');
		$add_model = Model::factory('add');					
		$userid = $this->session->get('id');
		$usertype = $this->session->get('usertype');	

		if($userid !='' && $usertype =='driver')
		{
			Message::error(__('you_dont_access'));
			$this->request->redirect("driver/dashboard");
		}	

		$current_location = $this->session->get("current_location");
		$drop_location = $this->session->get("drop_location");
		$no_passenger = $this->session->get("no_passengers");
		$pass_log_id = $this->session->get("passengerlog_id");

		$this->session->set("current_location",'');
		$this->session->set("drop_location",'');
		$this->session->set("no_passengers",'');	
		$this->session->set("passengerlog_id",'');

		if(isset($_POST['search_country']))
		{	
			$_SESSION['search_country'] = $_POST['search_country'];
			$_SESSION['search_city'] = $_POST['search_city'];

		}

		$content = $this->commonmodel->getcontents('advancesearch');



		// get cancel_rejected_driver_id for current user
		if(isset($userid))
		{
			$cancel_reject_trips = $find_model->get_cancel_reject_trips($userid);
			$driver_ids ="";
			foreach($cancel_reject_trips as $values)
			{
				$driver_ids .= $values['driver_id'].',';
			}
			$cancel_rejected_driver_id = substr($driver_ids,0,strlen($driver_ids)-1);
		}
		else
		{
			$cancel_rejected_driver_id = "";
		}
		////////////
		//From Normal Search Values
		if(isset($_POST) && count($_POST) > 0){
			$post_values = $_POST;
		}
		else{
			$post_values = array(
						"current_location"=>"",
						"drop_location"=>"",
						"no_passengers"=>"",
						"pick_up_time"=>"",
						"miles"=>""
						);
			}
						
		
		if($data_address == null)
		{
			$ip=$_SERVER['SERVER_ADDR'];
			//$ip=IPADDRESS;		
			$api_link = 'http://api.ipinfodb.com/v3/ip-city/?key='.IPINFOAPI_KEY.'&ip='.$ip.'&format=json';
			$data_address = @file_get_contents($api_link);			
			if($data_address!='')
			{
				$this->session->set('data_address',$data_address);
				$json_data = json_decode($data_address);	
				$cityName = $json_data->cityName; 
				$countryName = $json_data->countryName; 
				$this->session->set('search_city',$cityName);
				$this->session->set('search_country',$countryName);
			}
			else
			{
				$data_address = $find_model->getcityname(DEFAULT_CITY);
				$data_address = $data_address[0]['city_name'];
				$this->session->set('search_city',$data_address[0]['city_name']);
			}
			/*
				{
					"statusCode" : "OK",
					"statusMessage" : "",
					"ipAddress" : "209.21.92.148",
					"countryCode" : "US",
					"countryName" : "UNITED STATES",
					"regionName" : "CALIFORNIA",
					"cityName" : "SAN FRANCISCO",
					"zipCode" : "94104",
					"latitude" : "37.7913",
					"longitude" : "-122.401",
					"timeZone" : "-07:00"
				}
				*/
		}	
		
		$json_data = json_decode($data_address);	
		
		$miles = $this->session->get('miles');
		$no_passengers = '';
		$taxi_fare_km = '';
		$taxi_min_fare = '';
		$taxi_model = '';
		$taxi_type = '';
		$maximum_luggage = "";

		if(isset($_SESSION['search_city']))
		{
			$cityname = $_SESSION['search_city'];			
		}
		else
		{
			$cityname = '';			
		}
		
		//Sending the latitude and lonitude to the file
		//$driver_details = $find_model->search_driver_location($json_data->latitude,$json_data->longitude,$miles,$no_passengers,$_REQUEST,$taxi_fare_km,$taxi_min_fare,$taxi_model,$taxi_type,$maximum_luggage,$cityname,$pass_log_id);	

	$driver_details = $find_model->search_driver_location(LOCATION_LATI,LOCATION_LONG,$miles,$no_passengers,$_REQUEST,$taxi_fare_km,$taxi_model,$taxi_type,$maximum_luggage,$cityname,$pass_log_id);	

		$motor_details = $add_model->motor_details();
		$motor_id = 1;
		$model_details = $find_model->getmodel_details($motor_id );
					
		$additional_fields = $add_model->taxi_additionalfields();
		$getMiles = $find_model->getMiles();
		
		$view=View::factory(USERVIEW.'advancesearch')
				->bind('data_address',$data_address)
				->bind('current_location',$current_location)
				->bind('drop_location',$drop_location)
				->bind('pass_log_id',$pass_log_id)
				->bind('no_passengers',$no_passenger)
				->bind('motor_details',$motor_details)
				->bind('model_details',$model_details)
				->bind('post_values',$post_values)							
				->bind('additional_fields',$additional_fields)
				->bind('getMiles',$getMiles)
				->bind('cancel_rejected_driver_id',$cancel_rejected_driver_id)	
				->bind('content',$content)						
				->bind('driver_details',$driver_details);			
		$cms = Model::factory('cms');
		$content_cms = $cms->getcmscontent('advance-search');
		$this->meta_title=isset($content_cms[0]['meta_title'])?$content_cms[0]['meta_title']:"";
		$this->meta_keywords=isset($content_cms[0]['meta_keyword'])?$content_cms[0]['meta_keyword']:"";
		$this->meta_description=isset($content_cms[0]['meta_description'])?$content_cms[0]['meta_description']:"";
		$this->template->content=$view;
		$this->template->title=$this->title;	
	}

	public function action_getmodellist()
	{
		$find_model = Model::factory('find');
		$output ='';
		$motorid =arr::get($_REQUEST,'motor_id'); 
		$modelid =arr::get($_REQUEST,'model_id'); 

		$getmodel_details = $find_model->getmodel_details($motorid);

		if(isset($motorid))
		{
				
			$count=count($getmodel_details);
			if($count>0)
			{
				$output .='<select name="taxi_model" id="taxi_model">
					   <option value="">--Select--</option>';

					foreach($getmodel_details as $modellist) { 
					$output .='<option value="'.$modellist["model_id"].'"';
					if($modelid == $modellist["model_id"])
					{
						$output .='selected=selected';
					}
					$output .='>'.$modellist["model_name"].'</option>';
					}
	
				$output .='</select>';
				
			}
			else
			{
				$output .='<select name="taxi_model" id="taxi_model">
				<option value="">--Select--</option></select>';
			}	   

		}
			echo $output;exit;
			
	}

	public function action_search_driver_location()
	{
		
		if(isset($_REQUEST["latitude"]))
		{
			$find_model = Model::factory('find');
			$common_model = Model::factory('commonmodel');
			$latitude = $_POST["latitude"];
			$longitude = $_POST["longitude"];
			$miles = "1500";
			$no_passengers = $_POST["no_passengers"];
			$taxi_fare_km = $_POST["taxi_min_fare"];
			//$taxi_min_fare = $_POST["taxi_min_fare"]; 
			$taxi_model = $_POST["taxi_model"];
			$taxi_type = $_POST["taxi_type"]; 
			$maximum_luggage = $_POST["maximum_luggage"];
			$pass_logid = $_POST["pass_logid"];
			$passenger_id = $_POST["passenger_id"];

			if(isset($_SESSION['search_city']))
			{
				$cityname = $_SESSION['search_city'];			
			}
			else
			{
				$cityname = '';			
			}

			$driver_details = $find_model->search_driver_location($latitude,$longitude,$miles,$no_passengers,$_REQUEST,$taxi_fare_km,$taxi_model,$taxi_type,$maximum_luggage,$cityname,$pass_logid);
			//print_r($driver_details);exit;
			$nearest_driver='';
			$a=1;
			$temp='10000';
			$driver_list="";
			$prev_min_distance='10000~0~0~0';
			$taxi_id='';
			$temp_driver=0;
			$nearest_key=0;
			$prev_key=0;
			$driverdetails=array();
			$total_count = count($driver_details);		
			//echo COMPANY_CONTACT_PHONE_NUMBER;					
			$company_contact_no='';
			if(COMPANY_CID != 0)
			{
				$company_contact_no=COMPANY_CONTACT_PHONE_NUMBER;
			}
			$no_vehicle_msg=__('no_vehicle_msg').$company_contact_no;
			if($total_count > 0)
			{
				foreach($driver_details as $key => $value)
				{										
						/*Nearest driver calculation */
						$prev_min_distance = explode('~',$prev_min_distance);
						$prev_key=$prev_min_distance[1];
						$prev_min_distance = $prev_min_distance[0];
						$driver_distance = $value['distance_km'];
						//$location_update_date = $value['location_update_date'];
						//SELECT DATEDIFF($company_all_currenttimestamp,$location_update_date)
						$distance = round($driver_distance,4);
						//checking with previous minimum 
						$driver_list .= $value['driver_id'].',';
						$available_drivers = substr_replace($driver_list ,"",-1);
						if($distance < $prev_min_distance)
						{	
							//new minimum distance
							$nearest_key=$key;
							$prev_min_distance = $distance.'~'.$key;
						}
						else
						{
							//previous minimum
							$nearest_key=$prev_key;
							$prev_min_distance = $prev_min_distance.'~'.$prev_key;
						}
						
						$totalrating = 0;
						
					 //Set nearest driver equal to 1											
						if($a == $total_count)
						{
							$driver_details[$nearest_key]['nearest_driver'] ='1';
							$taxi_id=$value['taxi_id'];
							$nearest_driver=$driver_details[$nearest_key]['driver_id'];
							$driverdetails[0]['driver_id']=$driver_details[$nearest_key]['driver_id'];
							$driverdetails[0]['taxi_id']=$driver_details[$nearest_key]['taxi_id'];
							$driverdetails[0]['below_km']=$driver_details[$nearest_key]['below_km'];
							$driverdetails[0]['above_km']=$driver_details[$nearest_key]['above_km'];
							$driverdetails[0]['min_fare']=$driver_details[$nearest_key]['min_fare'];
							$driverdetails[0]['company_id']=$driver_details[$nearest_key]['get_companyid'];
							if($nearest_key != $key)
							{
							$driver_details[$key]['nearest_driver'] ='0';
							}
						}
						else
						{
							$driver_details[$key]['nearest_driver'] ='0';
						}
						$driver_details[$key]['distance_km'] =$distance;
						$a++;
				}
			}
			
			//print_r($driverdetails);exit;
			// Passenger Settings
			if($passenger_id !='' && count($driverdetails) > 0)
			{

				$company_id = $driver_details[0]['get_companyid'];

				//$passenger_setting = $find_model->get_passenger_company($passenger_id);
				//$passenger_setting = $find_model->get_company_setting($company_id);
				$passenger_setting =1;
				if($passenger_setting == 1)
				{
					
					$result = $find_model->auto_savebooking($driverdetails,$_REQUEST,$passenger_id,$company_id);
					
					$company_all_currenttimestamp = $common_model->getcompany_all_currenttimestamp($company_id);
											$insert_array = array(
																	"trip_id" => $result['pass_logid'],
																	"available_drivers" 			=> $available_drivers,
																	"status" 	=> '0',
																	"rejected_timeout_drivers"		=> "",
																	"createdate"		=> $company_all_currenttimestamp,
																);								
					//Inserting to Transaction Table 
					$transaction = $common_model->insert(DRIVER_REQUEST_DETAILS,$insert_array);	
							/*if($result['result'] == 1)
							{

								$passenger_logid = $result['pass_logid'];
								//$passenger_logid = $passengerid[0]['id'];
								$api = Model::factory('api');
								$config_array = $api->select_site_settings(array('notification_settings'),SITEINFO);
								if(count($config_array) > 0)
								{
									$notification_time = $config_array[0]['notification_settings'];
								}
								else
								{
									$notification_time = 60;
								}

								$driver_model = Model::factory('driver');
								$driver_info = $driver_model->get_driver_profile_details($driver_details[0]['driver_id']);
								$name = $driver_info[0]['name'];
								$phone = $driver_info[0]['phone'];
								$device_id = $driver_info[0]['device_id'];
								$device_token = $driver_info[0]['device_token'];								
								$device_type = $driver_info[0]['device_type'];

								$booking_details = array(
								"pickup"=>$_REQUEST['cur_loc'],
								"drop"=>$_REQUEST['drop_loc'],
								"no_of_passengers"=>$_REQUEST['no_passengers'],
								"pickup_time"=>$_REQUEST['bookingtime'],
								"driver_id"=>$driver_details[0]['driver_id'],
								"passenger_id"=>'',
								"roundtrip"=>'',
								"passenger_phone"=>'',
								"bookedby"=>BOOK_BY_PASSENGER
								);
								$msg = array("message" => 'You have new trip request.Kindly response the request',"status" => 1,"Passenger_logid"=>$passenger_logid,"booking_details" =>$booking_details,"notification_time"=>$notification_time);

								Message::success(__('save_booking_success'));
								//echo __('save_booking_success');
								//$this->request->redirect('/passengers/dashboard');AIzaSyAlFdMOAPiPDdcGdJtrxPmdRNiyWPeAvdQ
								//---------------------------------- ANDROID ----------------------------------//
								//  $apikey = "AIzaSyBaXJNLQajj74IS1A1tvUk5i-rm4ekvBzM"; //for client.taximobility.com
								//$apiKey = "AIzaSyAkKhg71cHRWWzYxfvlLUGm0FEeKPlZ1Z0"; //for client.taximobility.com
								$apikey = "AIzaSyAlFdMOAPiPDdcGdJtrxPmdRNiyWPeAvdQ"; //first for taximobility
								//$apiKey = "AIzaSyBQzVb-gm8BqqmSXaD53Zw-Hnk0VKn1i90";//second
								//$apiKey = "AIzaSyCxqKQ8eqgIJFF3W8GUjT0x3n3IBPf3kCw";//third
								$registrationIDs = array($device_token);
								// Message to be sent
                                    
								if(!empty($registrationIDs))
								{
								// Set POST variables
								$url = 'https://android.googleapis.com/gcm/send';
								//print_r($registrationIDs);exit;
								$fields = array(
								'registration_ids'  => $registrationIDs,
								'data'              => array( "message" => $msg,"title" => SITE_NAME ),
								);

								$headers = array( 
								'Authorization: key=' . $apikey,
								'Content-Type: application/json'
								);
								// Open connection
								$ch = curl_init();

								// Set the url, number of POST vars, POST data
								curl_setopt( $ch, CURLOPT_URL, $url );

								curl_setopt( $ch, CURLOPT_POST, true );
								curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
								curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

								curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

								// Execute post
								$result = curl_exec($ch);
								//echo $result;
								// Close connection
								curl_close($ch);

								}

								$message = array('status' => 1); 
								echo json_encode($message); exit;

							}
							else
							{
								echo json_encode($driver_details);exit;
							}*/

				}
				elseif($passenger_setting == '3')
				{
					echo "here1";exit;
					echo json_encode($driver_details[0]);exit;
				}
			

			}
			
			
				echo json_encode($driver_details);
				exit;

		}
	}
	
	function action_get_driver_details()
	{ ?>
		<script>
			jQuery(document).ready(function($) {

			  $('#banner-fade').bjqs({
			    height      : 260,
			    width       : 340,
		    	    left	: 40,	
			    responsive  : true
			  });

			});
		</script>
		<?php
		if(isset($_POST["driver_id"]))
		{
			$common_model = Model::factory('Commonmodel');
			$result = $common_model->get_driver_details($_POST["driver_id"]);
			//echo "<pre>";print_r($result);echo "</pre>";exit;
			$html = "";
			$chk = 0;
			if(count($result) > 0)
			{
				if(isset($result[0]) && count($result[0]) > 0)
				{
					$output ='<ul class="bjqs">';
					
					$taxi_image = $_SERVER['DOCUMENT_ROOT'].'/'.TAXI_IMG_IMGPATH.$result[0]['taxi_image'];
					if(file_exists($taxi_image) && $result[0]['taxi_image'] !='')
					{
					$taxi_image = URL_BASE.TAXI_IMG_IMGPATH.$result[0]['taxi_image'];
					}else{
					$taxi_image = URL_BASE."/public/uploads/taxi_image/no-image.jpg";
					}
					$output .='<li><img src="'.$taxi_image.'" ></li>';	
		
					$count = $result[0]['taxi_sliderimage'];
					$serialize_count = unserialize($result[0]['taxi_serializeimage']);
					$taxi_id = $result[0]['taxi_id'];
					$j = 0;
					if(is_array($serialize_count))
					{
						foreach($serialize_count as $value)
						{
							if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/taxi_image/'.$taxi_id.'_'.$value.'.png'))
							{ 
							$image_path = URL_BASE.'/public/uploads/taxi_image/'.$taxi_id.'_'.$value.'.png';
							$output .='<li><img src="'.$image_path.'" ></li>';	
							}						
						
						}

					}
					$output .='</ul>';

					
					$html ="<div id='banner-fade'>".$output."</div>";	
					$html .= "<div class='taxi_driver'>
								<dl class='dl-horizontal'>
								  <dt>".__('taxicompany')."</dt>
								  <dd>: ".ucfirst($result[0]['company_name'])."</dd>
								  <dt>".__('taxi_number')."</dt>
								  <dd>: ".$result[0]['taxi_no']."</dd>
								  <dt>".__('taxi_model')."</dt>
								  <dd>: ".ucfirst($result[0]['model_name'])."</dd>
								  <dt>".__('taxi_capacity')."</dt>
								  <dd>: ".$result[0]['taxi_capacity']."</dd>	
								  <dt>".__('maximum_luggage')."</dt>
								  <dd>: ".$result[0]['max_luggage']."</dd>								  							 
							</dl>";
						/*echo " <dt>".str_replace('%currency%',CURRENCY,__('taxi_fare_km'))."</dt>
								  <dd>: ".CURRENCY." ".$result[0]['taxi_fare_km']."</dd>";	*/
				
				
					if($result[0]['cancellation_nfree'] == 1)
					{
						$cancellation_fare = CURRENCY." ".$result[0]['cancellation_fare'];
					}
					else
					{
						$cancellation_fare = 'No';
					}
				$html .="<div class='other_features'>
					<label class='title_h3'>".__('fare_det')."</label>
					<dl class='dl-horizontal'>
						  <dt>".__('base_fare')."</dt>
						  <dd>: ".CURRENCY." ".ucfirst($result[0]['base_fare'])."</dd>
						   <dt>".__('min_fare')."</dt>
						  <dd>: ".CURRENCY." ".$result[0]['min_fare']."</dd>
						  <dt>".__('cancel_fare')."</dt>
						  <dd>: ".$cancellation_fare."</dd>
						  <dt>".sprintf(__('below_km'),$result[0]['below_above_km'])."</dt>
						  <dd>: ".CURRENCY." ".ucfirst($result[0]['below_km'])."</dd>
						  <dt>".sprintf(__('above_km'),$result[0]['below_above_km'])."</dt>
						  <dd>: ".CURRENCY." ".$result[0]['above_km']."</dd>
						  <dt>".__('wait_charge')."</dt>
						  <dd>: ".CURRENCY." ".$result[0]['waiting_time']."</dd>
					</dl>
					</div>";
					
				}	


				if(isset($result[1]) && count($result[1]) > 0 && count($result['label_name']) > 0)
				{
					$html .="<div class='other_features'>
					<label class='title_h3'>".__('Other Features')."</label>
					<dl class='dl-horizontal'>";

					foreach($result['label_name'] as $key => $value)
					{
						if($result[1][$result['label_name'][$key]['field_name']] !='') 
						{ 
							$html .="<dt>".$result['label_name'][$key]['field_labelname']."</dt><dd>: ".$result[1][$result['label_name'][$key]['field_name']]."</dd>";
							
						}
						else
						{
							$html .="<dt>".$result['label_name'][$key]['field_labelname']."</dt><dd>: ".__('not_specified')."</dd>";
						}
						

					}
					
					$html .="</dl>
					</div>";
				}	
				
				//Rating of the Driver			

				if(isset($result['comments']) && count($result['comments']) > 0)
				{
					$overall_rating = 0; $i=0;
					$html .="<div class='rating_driver'>";
								
						foreach($result['comments'] as $comments)
						{
							
							switch($comments['rating']){
								case 1: $star = "one";
										break;
								case 2: $star = "two";
										break;
								case 3: $star = "three";
										break;
								case 4: $star = "four";
										break;
								case 5: $star = "five";
										break;
								default: $star = "";
										break;
							}
							
							if($comments['comments'])
							{ 
								$comment = $comments['comments']; 
							}else{
								$comment = "";//__('no_data');
							}
							$passenger_details = $common_model->get_passenger_details($comments["passengers_id"]);
							$passenger_image = $_SERVER['DOCUMENT_ROOT'].'/'.PASS_IMG_IMGPATH.$passenger_details[0]['profile_image'];
							if(file_exists($passenger_image) && $passenger_details[0]['profile_image']!='')
							{
								$img = URL_BASE.'public/uploads/passenger/thumb_'.$passenger_details[0]['profile_image'];
							}else{
								$img = URL_BASE."/public/images/noimages.jpg";
							}
							
							if(($star != "") ||($comment != ""))
							{

								if($chk == 0)
								{	
									$html .="<label class='title_h3'>".__('recent_comments')."</label>";
									$chk = 1;
								}

								$html .="<div class='driver_comment comments_area'>
										<div class='comment_area_img'><img src=".$img." class='img-polaroid'/></div>
										<div class='comment_area_right'>
											<p class='pass_name'><a href='#'>".ucfirst($passenger_details[0]['name'])."</a></p>
											<p class='ratings ".$star."'></p>											
											<p class='comments'>".$comment."</p>
										</div>
									</div>";
							}
							$overall_rating += $comments['rating'];
							$i++;
						}
								
					$html .="</div>";
				}
				else
				{

				}
						
				$html .="</div>";
						
				
			}			
			else
			{
				$html = "";
			}
			echo $html;
			exit;
		}
	}
	
	public function action_get_motor_model()
	{
		if(isset($_POST['motor_type']))
		{
			$common_model = Model::factory('Commonmodel');
			$motor_model= $common_model->get_motor_model($_POST['motor_type']);
			$html = "";
			$html .='<label>'.__("taxi_model").'</label>
					<select name="taxi_model" id="taxi_model">
						<option value="">'.__("select_label").'</option>';
			foreach($motor_model as $list) { 
				$html .='<option value="'.$list["model_id"].'" >'.$list["model_name"].'</option>';
			} 
						 
			$html .='</select>';
			
			echo $html;
			exit;
		}
	}
	
	

	
} // End Controller_Find class
