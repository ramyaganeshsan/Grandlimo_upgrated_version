<?php defined('SYSPATH') or die('No direct script access.');
//DEFsVmFwF8
class Controller_Taxidispatch extends Controller_Dispatchadmin
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->session = Session::instance();
        $cid           = $this->session->get('company_id');
        if (!isset($cid)) {
            $this->urlredirect->redirect('company/login');
        }
        //Model Defining
        $this->common_model                 = Model::factory('commonmodel');
        $this->tdispatch_model              = Model::factory('taxidispatch');
        
        $this->transaction_model = Model::factory('transaction');
        $this->manage_model      = Model::factory('manage');

        $this->company_all_currenttimestamp = $this->common_model->getcompany_all_currenttimestamp($this->company_id);
        View::bind_global('company_all_currenttimestamp', $this->company_all_currenttimestamp);
        $cdate = date('d/m H:i:s', strtotime($this->company_all_currenttimestamp));
        View::bind_global('cdate', $cdate);
        $this->customer_google_api = $this->commonmodel->select_site_settings('customer_android_key',SITEINFO);
        $this->user_createdby = $this->user_id = $this->session->get('userid');
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');  
        $this->api            = Model::factory('mobileapi119');
        if(SURGE_PRICING == 1) {
			$surge_price_model_details     = $this->commonmodel->get_surge_price_model_list2();
            $surge_price_model_detailss     = $this->commonmodel->get_surge_price_model_list();
			View::bind_global('surge_price_model_details', $surge_price_model_details);
            View::bind_global('surge_price_model_detailss', $surge_price_model_detailss);
		}
      
    }
     public function action_dashboard()
    {
        $this->is_login();
        $user_createdby = $this->userid;
        $usertype       = $this->usertype;
        if ($usertype == 'S') {
            $this->request->redirect("admin/login");
        }
        // Get Pickup & Drop location Lat & Long using Google API 
        $company_location  = $this->city_company . ',' . $this->state_company . ',' . $this->country_company;
        $current_location  = $this->getLatLong($company_location);
        //print_r($current_location);exit;
        $current_latitude  = $current_location[0];
        $current_longitude = $current_location[1];
        $company_id        = $this->company_id;
        $company_tax       = (FARE_SETTINGS == 2 && !empty($company_id)) ? $this->common_model->company_tax($company_id) : TAX;
        $company_timezone  = $this->common_model->company_timezone($company_id);
        /**To get the form submit button name**/
        $create_submit     = arr::get($_REQUEST, 'create');
        $dispatch_submit   = arr::get($_REQUEST, 'dispatch');
        $update_submit     = arr::get($_REQUEST, 'update');
        $update_dispatch   = arr::get($_REQUEST, 'update_dispatch');
        $dispatch_type     = arr::get($_REQUEST, 'dispatch_type');
        
        $model_details     = $this->tdispatch_model->model_details();
        $promo_res_edit = $this->tdispatch_model->get_promocodes();
        $errors            = array();
        $post_values       = array();
        $passenger_logid = '';//addedby
        $recurrent_id = '';//addedby
      //  echo $create_submit;exit();
        if ($create_submit || $dispatch_submit) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->tdispatch_model->validate_dispatchbooking(arr::extract($post_values, array(
                'firstname',
                'email',
                'country_code',
                'phone',
                'current_location',
                'pickup_lat',
                'pickup_lng',
                'drop_location',
                'drop_lat',
                'drop_lng',
                'pickup_date',
                'pickup_time',
                'taxi_model',
                'recurrent',
                'lablename',
                'frmdate',
                'todate',
                'total_fare',
                'notes',
                'promo_code',
            )));

            if ($validator->check()) {

                //print_r($post_values);exit;
                $random_key      = text::random($type = 'alnum', $length = 10);
                $password        = text::random($type = 'alnum', $length = 6);
                $req_result      = $this->tdispatch_model->addbooking($post_values, $random_key, $password, $company_tax);
                //print_r($req_result);exit;
                $send_mail       = $req_result['send_mail'];
                $passenger_logid = $req_result['pass_logid'];
                $recurrent_id    = $req_result['recurrent_id'];
                $insert_booking  = $req_result['insert_booking'];

                //Feb 19 2021
                if(SURGE_PRICING == 1) {
                	//26 feb 2021
                	$admin_companyid = 1;
                	$request = array();
		            $request['dispatch_type'] = 2;
		            $request['search_driver'] = "";
		            $booking_details = $this->tdispatch_model->get_bookingdetails($passenger_logid, $admin_companyid);
		            $latitude        = $booking_details[0]["pickup_latitude"];
		            $longitude       = $booking_details[0]["pickup_longitude"];
		            $miles           = '';
		            $no_passengers   = $booking_details[0]["no_passengers"];
		            $taxi_fare_km    = $booking_details[0]["min_fare"];
		            $taxi_model      = $booking_details[0]["taxi_modelid"];
		            $taxi_type       = '';
		            $maximum_luggage = $booking_details[0]["luggage"];
			    	$airport         = isset($booking_details[0]["airport_pickup"])?$booking_details[0]["airport_pickup"]:0;
		            $pass_logid      = $passenger_logid;
		            $cityname        = isset($_SESSION['search_city'])?$_SESSION['search_city']:"";
		            $search_driver  =  $request['search_driver'];

		            $taxi_edit_modelid    = isset($booking_details[0]["taxi_edit_modelid"])?$booking_details[0]["taxi_edit_modelid"]:'';

		            if($taxi_edit_modelid!=''){
		                $request_taxi_model = $taxi_edit_modelid;
		            }else{
		                $request_taxi_model = $taxi_model;
		            }
		            
		            $driver_details = $this->tdispatch_model->search_driver_location($latitude, $longitude, $miles, $no_passengers, $request, $taxi_fare_km, $request_taxi_model, $taxi_type, $maximum_luggage, $cityname, $pass_logid, $admin_companyid, $search_driver,$airport);

                    if($dispatch_submit) {
                        $now_after = 0;
                    } else {
                        $now_after = 1;
                    }
		            //print "<pre>"; print_r($post_values);exit;
		            $free_drivers = count($driver_details);

		            $update_surge_price = $this->common_model->update_trip_data($post_values['taxi_model'],$passenger_logid,$free_drivers,$post_values['pickup_date'],$now_after);
					
					//$update_surge_price = $this->common_model->update_trip_surge_price($post_values['taxi_model'],$post_values['pickup_date'],$passenger_logid);

                    //26 feb 2021
                }
                //Feb 19 2021

                if ($passenger_logid != '') {
                    /* Create Log */
                    $company_id  = $this->company_id;
                    $log_message = __('log_message_added');
                    $log_message = str_replace("PASS_LOG_ID", $passenger_logid, $log_message);
                    $log_booking = __('log_booking_added');
                    $log_booking = str_replace("PASS_LOG_ID", $passenger_logid, $log_booking);
                    $log_status  = $this->tdispatch_model->create_logs($passenger_logid, $company_id, $user_createdby, $log_message, $log_booking);
                    /* Create Log */
                } else {
                    $company_id  = $this->company_id;
                    $log_message = __('log_message_recurrent_added');
                    $log_message = str_replace("RECURRENT_ID", $recurrent_id, $log_message);
                    $log_status  = $this->tdispatch_model->create_logs($recurrent_id, $company_id, $user_createdby, $log_message);
                }
                if (($passenger_logid)) {
					// 03 Feb 2020
					if($post_values['passenger_id'] != "") { 
						$det    = $this->common_model->get_dispacttripdetails($passenger_logid);
						if(isset($det['result']) && count($det['result']) > 0){
							$dets   = $det['result'][0];
							$p_device_token     = isset($dets['p_device_token'])?$dets['p_device_token']:'';
							$p_device_id     = isset($dets['p_device_id'])?$dets['p_device_id']:'';
							$p_device_type     =  isset($dets['p_device_type'])?$dets['p_device_type']:1;

							$notify_msg = __('booking_created_notification').$post_values['pickup_date'];
							$push_message = array('message'=>$notify_msg,'trip_id'=>$passenger_logid,'status'=>11);
							$title='';

							$p_send_notification = $this->api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api,$title);
						}
					}					
					$generateMap = $this->common_model->generateStaticMap($passenger_logid,$post_values['current_location'],$post_values['drop_location']);
					// 03 Feb 2020
					
                    if ($send_mail == 'S') {
                        /** Mail to new User **/
                        $mail              = "";
                        $pass_phNo         = $post_values['country_code'].$post_values['phone'];
                        $replace_variables = array(
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => $post_values['firstname'],
                            REPLACE_MOBILE => $pass_phNo,
                            REPLACE_PASSWORD => $password,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        );
                        //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                        if ($this->lang != 'en') {
                            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html')) {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html', $replace_variables);
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                            }
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                        }
                        $to                = $post_values['email'];
                        $from              = $this->siteemail;
                        $subject           = __('pass_account_details') . " - " . $this->app_name;
                        $redirect          = "taxidispatch/dashboard";
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
                        //echo SMS;exit;
                        //free sms url with the arguments
                        if (SMS == 1) {
                            $message_details = $this->common_model->sms_message('1');
                            $to              = $pass_phNo;
                            $message         = $message_details['sms_description'];
                            //Phone : ##PHONE_NO##.
                            //Password : ##PASSWORD##.
                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                            $message         = str_replace("##PHONE_NO##", $pass_phNo, $message);
                            $message         = str_replace("##PASSWORD##", $password, $message);
                        }
                        /** Mail to new User **/
                    }
                    /** Dispatch **/
                    $company_id    = $this->company_id;
                    if($company_id==0){
                        $tdispatch_type = $this->tdispatch_model->admin_dispatch_settings();
                    } else {
                        $dispatch_data = $this->tdispatch_model->dispatch_settings($company_id);
                        //echo '<pre>';print_r($dispatch_data);exit;
                        if (count($dispatch_data) > 0) {
                            $company_dispatch  = $dispatch_data[$company_id]['dispatch_algorithm'];
                            if(count($company_dispatch)>0){
                                $tdispatch_type    = $company_dispatch['labelname'];
                            } else {
                                $data = array_reverse($company_dispatch);
                                $tdispatch_type    = '2';
                            }
                        }
                    }
                    //echo $dispatch_submit."--".$tdispatch_type."--".$passenger_logid."--".$recurrent_id;exit;
                    if ($dispatch_submit && $tdispatch_type != 1 && $passenger_logid != '' && $recurrent_id == "") {
                    ?>
						<form action="<?php
                        echo URL_BASE;
?>taxidispatch/dashboard" method="post" id="form_showpopup">
						<input type="hidden" name="show_pass_logid" value="<?php
                        echo $passenger_logid;
?>" id="show_pass_logid" />
						<input type="hidden" name="pickup_latitude" value="<?php
                        echo $post_values['pickup_lat'];
?>" id="pickup_latitude" />
						<input type="hidden" name="pickup_longitude" value="<?php
                        echo $post_values['pickup_lng'];
?>" id="pickup_longitude" />
						<input type="hidden" name="drop_latitude" value="<?php
                        echo $post_values['drop_lat'];
?>" id="drop_longitude" />
						<input type="hidden" name="drop_longitude" value="<?php
                        echo $post_values['drop_lng'];
?>" id="drop_latitude" />
						<input type="hidden" name="no_passengers" value="<?php
                        echo $post_values['no_passengers'];
?>" id="no_passengers" />
						</form>
						<script>
						document.getElementById('form_showpopup').submit();
						</script>
					<?php
                    } else {
                        Message::success(__('booking_added'));
                        $this->request->redirect("taxidispatch/dashboard");
                    }
                } else {
                    Message::success(__('booking_added'));
                    $this->request->redirect("taxidispatch/dashboard");
                }
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        } elseif (($update_submit || $update_dispatch || ($dispatch_type == 1) || $_POST) && Validation::factory($_POST)) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->tdispatch_model->validate_dispatchbooking_edit(arr::extract($post_values, array(
                'edit_firstname',
                'edit_email',
                'edit_country_code',
                'edit_phone',
                'edit_current_location',
                'edit_pickup_lat',
                'edit_pickup_lng',
                'edit_drop_location',
                'edit_drop_lat',
                'edit_drop_lng',
                'edit_pickup_date',
                'edit_pickup_time',
                'edit_luggage',
                'edit_no_passengers',
                'edit_taxi_model',
                'edit_recurrent',
                'lablename',
                'frmdate',
                'todate',
                'total_fare',
                'edit_promo_code',
            )));
            if ($validator->check() || ($dispatch_type == 1)) {
                $random_key = text::random($type = 'alnum', $length = 10);
                $password   = text::random($type = 'alnum', $length = 6);
                
                if ($dispatch_type == 1) {
                    $req_result = $this->tdispatch_model->directdispatch($_REQUEST['splid']);
                } else {
                    $req_result = $this->tdispatch_model->updatebooking($post_values, $random_key, $password);
                }
                
                $send_mail       = $req_result['send_mail'];
                $passenger_logid = $req_result['pass_logid'];

                //Feb 19 2021
                if(SURGE_PRICING == 1) {
                	//26 feb 2021
                    //$update_surge_price = $this->common_model->update_trip_surge_price($post_values['edit_taxi_model'],$post_values['edit_pickup_date'],$passenger_logid);
                    //26 feb 2021
                }
                //Feb 19 2021

                
                // 03 Feb 2020
                if(isset($post_values['old_model_id']) && isset($post_values['edit_taxi_model']) && $post_values['old_model_id'] != $post_values['edit_taxi_model']) { // Model Changed
                    $det    = $this->common_model->get_dispacttripdetails($post_values['edit_pass_logid']);
                    if(isset($det['result']) && count($det['result']) > 0){
                        $dets   = $det['result'][0];
                        $p_device_token     = isset($dets['p_device_token'])?$dets['p_device_token']:'';
                        $p_device_id     = isset($dets['p_device_id'])?$dets['p_device_id']:'';
                        $p_device_type     =  isset($dets['p_device_type'])?$dets['p_device_type']:1;
                        
                        $model_info = $this->common_model->get_model_detail_info($post_values['edit_taxi_model']);
                        $notify_msg = __('model_changed_notification').$model_info;
                        $push_message = array('message'=>$notify_msg,'trip_id'=>$passenger_logid,'status'=>11);
                        $title='';

                        $p_send_notification = $this->api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api,$title);
                    }
                }               
                // 03 Feb 2020
                
                /* Create Log */
                $company_id      = $this->company_id;
                $log_message     = __('log_message_updated');
                $log_message     = str_replace("PASS_LOG_ID", $passenger_logid, $log_message);
                $log_booking     = __('log_booking_updated');
                $log_booking     = str_replace("PASS_LOG_ID", $passenger_logid, $log_booking);
                $log_status      = $this->tdispatch_model->create_logs($passenger_logid, $company_id, $user_createdby, $log_message, $log_booking);
                /* Create Log */
                if ($passenger_logid) {
                    if ($send_mail == 'S') {
                        /** Mail to new User **/
                        $mail              = "";
                        $pass_phNo         = $post_values['edit_country_code'].$post_values['edit_phone'];
                        $replace_variables = array(
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => $post_values['edit_firstname'],
                            REPLACE_MOBILE => $pass_phNo,
                            REPLACE_PASSWORD => $password,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        );
                        //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                        if ($this->lang != 'en') {
                            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html')) {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/passenger-register-' . $this->lang . '.html', $replace_variables);
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                            }
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'passenger-register.html', $replace_variables);
                        }
                        $to                = $post_values['edit_email'];
                        $from              = $this->siteemail;
                        $subject           = __('pass_account_details') . " - " . $this->app_name;
                        $redirect          = "taxidispatch/dashboard";
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
                        //free sms url with the arguments
                        if (SMS == 1) {
                            $message_details = $this->common_model->sms_message('1');
                            $to              = $pass_phNo;
                            $message         = $message_details['sms_description'];
                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                        }
                        /** Mail to new User **/
                    }
                    /** Dispatch **/
                    $company_id       = $this->company_id;
                     if($company_id==0){
                        $tdispatch_type = $this->tdispatch_model->admin_dispatch_settings();
                    } else {
                        $dispatch_data = $this->tdispatch_model->dispatch_settings($company_id);
                        if (count($dispatch_data) > 0) {
                            $company_dispatch  = $dispatch_data[$company_id]['dispatch_algorithm'];
                            if(count($company_dispatch)>0){
                                $tdispatch_type    = $company_dispatch['labelname'];
                            } else {
                                $data = array_reverse($company_dispatch);
                                $tdispatch_type    = '2';
                            }
                        }
                    }
                    //echo $dispatch_submit."--".$tdispatch_type."--".$passenger_logid."--";exit;
                    if ($update_dispatch && $tdispatch_type != 1 && $passenger_logid != '') {
                        
                ?>
						<form action="<?php
                        echo URL_BASE;
?>taxidispatch/dashboard" method="post" id="form_showpopup">
						<input type="hidden" name="show_pass_logid" value="<?php
                        echo $passenger_logid;
?>" id="show_pass_logid" />
						<input type="hidden" name="pickup_latitude" value="<?php
                        echo $post_values['edit_pickup_lat'];
?>" id="pickup_latitude" />
						<input type="hidden" name="pickup_longitude" value="<?php
                        echo $post_values['edit_pickup_lng'];
?>" id="pickup_longitude" />
						<input type="hidden" name="drop_latitude" value="<?php
                        echo $post_values['edit_drop_lat'];
?>" id="drop_longitude" />
						<input type="hidden" name="drop_longitude" value="<?php
                        echo $post_values['edit_drop_lng'];
?>" id="drop_latitude" />
						<input type="hidden" name="no_passengers" value="<?php
                        echo $post_values['edit_no_passengers'];
?>" id="no_passengers" />
						</form>
						<script>	
						document.getElementById('form_showpopup').submit();
						</script>
				<?php
                    } else {
                        Message::success(__('booking_added'));
                        $this->request->redirect("taxidispatch/dashboard");
                    }
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $all_company_map_list       = $this->tdispatch_model->all_driver_map_list("");
        $get_active_company_details = $this->tdispatch_model->get_active_company_details();
        $operator_id = isset($_SESSION['userid'])?$_SESSION['userid']:'';
        $total_sum =  $this->tdispatch_model->get_total_sum($operator_id);
        $total_sum_day =  $this->tdispatch_model->get_total_sum_day($operator_id);
        //echo '<pre>';print_r($all_company_map_list);print_r($get_active_company_details);exit;
        $view                       = View::factory(TAXI_DISPATCH . 'dashboard')->bind('validator', $validator)->bind('errors', $errors)->bind('company_tax', $company_tax)->bind('company_timezone', $company_timezone)->bind('model_details', $model_details)->bind('postvalue', $post_values)->bind('all_company_map_list', $all_company_map_list)->bind('show_popup', $_REQUEST)->bind('current_latitude', $current_latitude)->bind('current_longitude', $current_longitude)->bind('get_active_company_details', $get_active_company_details)->bind('total_sum', $total_sum)->bind('promo_res_edit',$promo_res_edit)->bind('total_sum_day',$total_sum_day);
        $this->template->title      = SITENAME . " | " . __('dashboard');
        $this->template->page_title = __('dashboard');
        $this->template->content    = $view;
        unset($default);
    }
    public function action_sample()
    {
        $view                       = View::factory(TAXI_DISPATCH . 'sample');
        $this->template->title      = SITENAME . " | " . __('Sample');
        $this->template->page_title = __('Sample');
        $this->template->content    = $view;
    }
    /**
     * ****action_is_login()****
     * @return check user logged or not
     */
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================			
        /**To check Whether the user is logged in or not**/
        if (!isset($this->session) || (!$this->session->get('userid'))) //&& !$this->session->get('id')
            {
            Message::error(__('login_access'));
            $request->redirect("/company/login/");
        }
        return;
    }
    public function action_edit_booking()
    {
        $pass_log_id         = $_REQUEST['passenger_logid'];
        $edit_bookingdetails = $this->tdispatch_model->edit_bookingdetails($pass_log_id);
        if(isset($edit_bookingdetails[0]['luggage']) && (string)$edit_bookingdetails[0]['luggage'] == "NAN") {
			$edit_bookingdetails[0]['luggage'] = 0;
		}
		if(isset($edit_bookingdetails[0]['approx_distance']) && (string)$edit_bookingdetails[0]['approx_distance'] == "NAN") {
			$edit_bookingdetails[0]['approx_distance'] = 0;
		}
		if(isset($edit_bookingdetails[0]['approx_fare']) && (string)$edit_bookingdetails[0]['approx_fare'] == "NAN") {
			$edit_bookingdetails[0]['approx_fare'] = 0;
		}
        if(isset($edit_bookingdetails[0]['pending_amt']) && (string)$edit_bookingdetails[0]['pending_amt'] == "NAN") {
            $edit_bookingdetails[0]['pending_amt'] = 0;
        }
        echo json_encode($edit_bookingdetails);
        exit;
    }
    public function action_firstname_load_new()
    {
        $name             = array();
        $like_q           = arr::get($_REQUEST, 'query');
        $like_q           = urlencode($like_q);
        $user_details = $this->tdispatch_model->getuser_details($like_q, 1);
        foreach ($user_details as $details) {
            $name[] = $details['name'] . ' - (' . $details['phone'] . ')';
        }
        echo json_encode($name);
        exit;
    }
    public function action_email_load_new()
    {
        $name             = array();
        $like_q           = arr::get($_REQUEST, 'q');
        $like_q           = urlencode($like_q);
        $user_details = $this->tdispatch_model->getuser_details($like_q, 2);
        foreach ($user_details as $details) {
            $name[] = $details['email'];
        }
        echo json_encode($name);
        exit;
    }
    public function action_phone_load_new()
    {
        $name             = array();
        $like_q           = arr::get($_REQUEST, 'query');
        $like_q           = urlencode($like_q);
        $user_details = $this->tdispatch_model->getuser_details($like_q, 3);
        foreach ($user_details as $details) {
            $name[] = $details['phone'];
        }
        echo json_encode($name);
        exit;
    }
    public function action_check_pass_phone_email_exist()
    {
        if ($_GET['pass_id'] != '') {
            $result = $this->tdispatch_model->check_passenger_email_phone_exist($_GET['pass_id'], $_GET['pass_email'], $_GET['pass_phone']);
            echo $result;
        }
        exit;
    }
    public function action_get_passengerDetails_new()
    {
        $name             = arr::get($_REQUEST, 'field_name');
        $user_details = $this->tdispatch_model->getpassenger_Detailinfo_new($_REQUEST);
        //echo '<pre>';print_r($user_details);exit;
        if (is_array($user_details) && count($user_details) > 0) {
            echo  $user_details['_id']. ',' . $user_details['name'] . ',' . $user_details['email'] . ',' . $user_details['phone'] . ',' . $user_details['country_code'];
        } else {
            echo 0;
        }
        exit;
    }
    public function action_driver_status_details_search_new()
    {
        $post_values          = $_POST;
        $driver_status        = $_REQUEST['driver_status'];
        $taxi_company         = $_REQUEST['taxi_company'];
        $send_array           = array(
            'driver_status' => $driver_status,
            'taxi_company' => $taxi_company
        );
        $all_company_map_list = $this->tdispatch_model->driver_status_details($_REQUEST);
        $markers              = array();
        $tmarkers             = array();
        $book_now             = "";
        foreach ($all_company_map_list as $key => $val) {
            if ($val['driver_status'] == "F" && $val['shift_status'] == "IN") {
                $driver_info = '<span style="color:green">' . __('free_in') . '</span>';
                $book_now    = '<button type="button" class="btn btn-outline btn-primary btn-xs" name="bookingnow" onclick="bookingnow_click(this.id);" id="driverid_' . $val['driver_id'] . '" >' . __('booknow') . '</button>';
            } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "OUT") {
                $driver_info = '<span style="color:blue">' . __('free_out') . '</span>';
            } elseif ($val['driver_status'] == "B") {
                $driver_info = '<span style="color:red">' . __('trip_assigned') . '</span>';
            } elseif ($val['driver_status'] == "A") {
                $driver_info = '<span style="color:#07841E">' . __('hired') . '</span>';
            }
            $update_date = $val['update_date'];
            $drv_info    = '<span class="info-content">' . ucfirst($val['name']) . '</span>';
            $drv_info .= '</br>';
            $drv_info .= '<span class="info-content">' . $driver_info . '</span>';
            $drv_info .= '</br>';
            $drv_info .= '<span class="info-content">' . $update_date . '</span>';
            if ($book_now != "") {
                $drv_info .= '</br>';
                //$drv_info.='<span class="info-content">'.$book_now.'</span>';
            }
            $markers[$key]['info']         = $drv_info;
            $markers[$key]['lat']          = $val['loc'][1];
            $markers[$key]['lng']          = $val['loc'][0];
            $markers[$key]['status']       = $val['driver_status'];
            $markers[$key]['shift_status'] = $val['shift_status'];
            $book_now                      = ""; //For clear existing value
        }
        echo json_encode($markers);
        exit;
    }
    public function action_driver_status_search_details()
    {
        $driver_status = $_REQUEST['driver_status'];
        $taxi_model    = $_REQUEST['taxi_model'];
        if ($taxi_model != "") {
            $all_company_map_list = $this->tdispatch_model->driver_status_details_model($_REQUEST);
        } else {
            $all_company_map_list = $this->tdispatch_model->driver_status_details($_REQUEST);
        }
        $i               = 0;
        $driver_active   = 0;
        $driver_free_in  = 0;
        $driver_free_out = 0;
        $driver_busy     = 0;
        if (count($all_company_map_list) > 0) {
            $output = "<h4>" . __('driver_details') . "<span id='driver_dets_count'></span> </h4>";
            $output .= "<ul class='driver_details'>";
            foreach ($all_company_map_list as $key => $val) {
                if ($val['driver_status'] == "A") {
                    $status     = "Active";
                    $span_class = "driver_status_active";
                    $driver_active++;
                } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "IN") {
                    $status     = "Free In";
                    $span_class = "driver_status_in";
                    $driver_free_in++;
                } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "OUT") {
                    $status     = "Free Out";
                    $span_class = "driver_status_out";
                    $driver_free_out++;
                } elseif ($val['driver_status'] == "B") {
                    $status     = "Busy";
                    $span_class = "driver_status_busy";
                    $driver_busy++;
                }
                $i++;
                if ($i % 2) {
                    $class = "driver_status_li_one";
                } else {
                    $class = "driver_status_li_two";
                }
                $driver_page = URL_BASE . "manage/driverinfo/" . $val['driver_id'];
                $output .= "<li class=" . $class . ">";
                //$output.="<span><a href='".$driver_page."' target='_blank' title='Goto' class='goto_driver'>".ucfirst($val['name'])."</a></span>";
                $output .= "<span><a href='" . $driver_page . "' target='_blank' title='Goto'>" . ucfirst($val['name']) . "</a></span>";
                $output .= "<span class=" . $span_class . ">" . $status . "</span>";
                //$output.="<a href='".$driver_page."' target='_blank' title='Goto' class='goto_driver'></a>";
                $output .= "</li>";
            }
            $output .= "</ul>";
        } else {
            $no_driver_class = "no_driver";
            $output          = "<ul class='driver_details'>";
            $output .= "<h4>Driver Details</h4>";
            $output .= "<li class='" . $no_driver_class . "'>";
            $output .= "No Driver Found";
            $output .= "</li>";
        }
        $driver_count_dets = "(A - " . $driver_active . ", In - " . $driver_free_in . ", Out - " . $driver_free_out . ", B - " . $driver_busy . ")";
        echo $output . "#" . $driver_count_dets;
        exit;
    }
    /** This function is used to get driver list as well as icons in the map in dispatcher dashboard **/
    public function action_driver_list_with_status()
    {
        $all_company_map_list = $this->tdispatch_model->get_driver_list_with_status($_REQUEST, $this->company_id, $this->usertype);
        //print "<pre>";
        //print_r($all_company_map_list);
        //exit;
        $i                    = 0;
        $driver_active        = 0;
        $driver_free_in       = 0;
        $driver_free_out      = 0;
        $driver_busy          = 0;
        $markers              = array();
        $book_now             = "";
        //26 feb 2021
        $model_array          = array();
        //26 feb 2021
        if (count($all_company_map_list) > 0) {
            $output = "<h4>Driver Details <span id='driver_dets_count'></span> </h4>";
            $output .= "<ul class='driver_details'>";
            foreach ($all_company_map_list as $key => $val) {
				$remain_time = '';
				if(($val['updatetime_difference'] >  LOCATIONUPDATESECONDS && $val['driver_status'] == "A") || ($val['updatetime_difference'] >  LOCATIONUPDATESECONDS && $val['driver_status'] == "F" &&  $val['shift_status'] == "OUT" ))
                {
                    continue;
                }
                if ($val['driver_status'] == "A") {
                    $status      = "Active";
                    $span_class  = "driver_status_active";
                    $driver_info = '<span style="color:orange">' . __('hired') . '</span>';
                    $driver_active++;
                    
                    if(isset($val['trip_remaining_time']) && $val['trip_remaining_time'] >0 && is_numeric($val['trip_remaining_time'])){
                        $remain_time = $this->convertToHoursMins($val['trip_remaining_time']).':00';
                    }
                } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "IN") {
                    $status      = "Free In";
                    $span_class  = "driver_status_in";
                    $driver_info = '<span style="color:green">' . __('free_in') . '</span>';
                    $book_now    = '<button type="button" class="btn btn-outline btn-primary btn-xs" name="bookingnow" onclick="bookingnow_click(this.id);" id="driverid_' . $val['driver_id'] . '" >' . __('booknow') . '</button>';
                    $driver_free_in++;
                } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "OUT") {
                    $status      = "Free Out";
                    $span_class  = "driver_status_out";
                    $driver_info = '<span style="color:blue">' . __('free_out') . '</span>';
                    $driver_free_out++;
                } elseif ($val['driver_status'] == "B") {
                    $status      = "Busy";
                    $span_class  = "driver_status_busy";
                    $driver_info = '<span style="color:red">' . __('trip_assigned') . '</span>';
                    $driver_busy++;
                }

                //26 feb 2021
                if ($val['shift_status'] != "OUT") {
                    $model_array[] = (int)$val['model_id'];
                }
                //26 feb 2021

                $i++;
                if ($i % 2) {
                    $class = "driver_status_li_one";
                } else {
                    $class = "driver_status_li_two";
                }
                $gps_enable = ($val['gps_enable'] == 1)?'ON':'OFF';
                $gps_color = ($val['gps_enable'] == 1)?'green':'red';
                $gps_image = ($val['gps_enable'] == 1)?URL_BASE.'public/images/gps_green.png':URL_BASE.'public/images/gps_red.png';

                $internet_image = URL_BASE.'public/images/internet_green.png';
                if($val['updatetime_difference'] >  LOCATIONUPDATESECONDS && $val['driver_status'] == "F" && $val['shift_status'] == "IN")
                {
                    $internet_image = URL_BASE.'public/images/internet_red.png';
                }

                $driver_page = URL_BASE . "manage/driverinfo/" . $val['driver_id']; 
                $output .= "<li class=" . $class . ">";
                $output .= "<span><a href='" . $driver_page . "' target='_blank' title='".$val['taxi_no']."'>" . ucfirst($val['name']). "</a> - ". (isset($val['driver_code']) ? $val['driver_code'] : "")."<p style='color:GoldenRod;'>".$val['model_name']."</p>";
                
                if($remain_time!=''){
                    $output .= '<p style="color:green;">' . $remain_time . '</p>';
                }
                $output .= '</span>';
                
               // $output .= "<p>" . $val['model_name'] . "</p>";

				$output .= "<span style='width:24px;margin-right:5px'><p><img  src='".$gps_image."'  /></p></span>";
                $output .= "<span style='width:24px;margin-right:5px'><p><img  src='".$internet_image."'  /></p></span>";
                $output .= "<span class=" . $span_class . ">" . $status . "</span>";
                $output .= "</li>";
                //driver display in map side
                $drv_info = '<div class="info_drivercontent">';
                $drv_info .= '<span class="info-content"><a style="color:black;" href="' . $driver_page . '" target="_blank" title="'.$val['taxi_no'].'">' . ucfirst($val['name']) . "</a> - " . (isset($val['driver_code']) ? $val['driver_code'] : ""). '</span>';
                $drv_info .= '<p style="color:GoldenRod;">' . $val['model_name'] . '</p>';
                $drv_info .= '<span class="info-content">' . $driver_info . '</span>';
                $drv_info .= '</br>';
                $drv_info .= '<span class="info-content">' . Commonfunction::convertphpdate('d/m/Y H:i:s', $val['update_date']) . '</span>';
                if ($book_now != "") {
                    $drv_info .= '</br>';
                    //$drv_info.='<span class="info-content">'.$book_now.'</span>';
                }
                $drv_info .= '</div>';
                //if($val['shift_status']!="OUT"){
                $markers[$key]['info']         = $drv_info;
                $markers[$key]['lat']          = $val['loc'][1];
                $markers[$key]['lng']          = $val['loc'][0];
                $markers[$key]['status']       = $val['driver_status'];
                $markers[$key]['shift_status'] = $val['shift_status'];
                //}
            }
            $output .= "</ul>";
        } else {
            $no_driver_class = "no_driver";
            $output          = "<ul class='driver_details'>";
            $output .= "<h4>Driver Details</h4>";
            $output .= "<li class='" . $no_driver_class . "'>";
            $output .= "No Driver Found";
            $output .= "</li>";
        }
        //26 feb 2021
        if(!empty($model_array)) {
            $model_array = array_replace($model_array,array_fill_keys(array_keys($model_array, null),''));
            $drivers_data = array_count_values($model_array);
            if(!empty($drivers_data)) {
                foreach($drivers_data as $key => $value) {
                    $res = $this->tdispatch_model->update_drivers_count($key,$value);
                }
            }
        }
        //26 feb 2021
        $driver_count_dets = "(A - " . $driver_active . ", In - " . $driver_free_in . ", Out - " . $driver_free_out . ", B - " . $driver_busy . ")";
        echo json_encode($markers) . "#" . $output . "#" . $driver_count_dets;
        exit;
    }
    
    function convertToHoursMins($time, $format = '%02d:%02d') {
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
    
    public function action_get_recent_activity()
    {
        $output         = '';
        $get_logcontent = $this->tdispatch_model->load_logcontent();
        $i              = 0;
        if (count($get_logcontent) > 0) {
            foreach ($get_logcontent as $details) {
                $i++;
                if ($i % 2) {
                    $class = "show_logs_li_one";
                } else {
                    $class = "show_logs_li_two";
                }
                $badge_class = "badge";
                $time_now    = $this->time_since($details['log_createdate']);
                $output .= "<li class=" . $class . ">";
                $output .= "<span>" . $details['log_message'] . "</span>";
                $output .= "<span class=" . $badge_class . ">" . $time_now . "</span>";
                $output .= "</li>";
            }
        } else {
            $output .= "<li>";
            $output .= "<span>" . __('no_data') . "</span>";
            $output .= "</li>";
        }
        echo $output;
        unset(Database::$instances['default']);
        exit;
    }
    public function time_since($date)
    {
        $time_ago     = strtotime($date);
        $cur_time     = $this->company_all_currenttimestamp;
        $cur_time     = strtotime($cur_time);
        $time_elapsed = $cur_time - $time_ago;
        $seconds      = $time_elapsed;
        $minutes      = round($time_elapsed / 60);
        $hours        = round($time_elapsed / 3600);
        $days         = round($time_elapsed / 86400);
        $weeks        = round($time_elapsed / 604800);
        $months       = round($time_elapsed / 2600640);
        $years        = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return $timen = "just now";
        }
        //Minutes
        else if ($minutes <= 60) {
            if ($minutes == 1) {
                return $timen = "one min ago";
            } else {
                return $timen = "$minutes mins ago";
            }
        }
        //Hours
        else if ($hours <= 24) {
            if ($hours == 1) {
                return $timen = "an hour ago";
            } else {
                return $timen = "$hours hrs ago";
            }
        }
        //Days
        else if ($days <= 7) {
            if ($days == 1) {
                return $timen = "yesterday";
            } else {
                return $timen = "$days days ago";
            }
        }
        //Weeks
        else if ($weeks <= 4.3) {
            if ($weeks == 1) {
                return $timen = "a week ago";
            } else {
                return $timen = "$weeks weeks ago";
            }
        }
        //Months
        else if ($months <= 12) {
            if ($months == 1) {
                return $timen = "a month ago";
            } else {
                return $timen = "$months months ago";
            }
        }
        //Years
        else {
            if ($years == 1) {
                return $timen = "one year ago";
            } else {
                return $timen = "$years years ago";
            }
        }
    }
    public function action_all_booking_list_manage()
    {
        $output               = '';
        //print_r($_GET);exit;
        $current_time         = $this->company_all_currenttimestamp;
        $travel_status        = isset($_GET['travel_status']) ? $_GET['travel_status'] : "";
        $driver_reply_cancel  = isset($_GET['status_cancel']) ? $_GET['status_cancel'] : "";
        $manage_status        = isset($_GET['manage_status']) ? $_GET['manage_status'] : 0;
        $taxi_company         = isset($_GET['taxi_company']) ? $_GET['taxi_company'] : 0;
        //echo $taxi_company;exit;
        $send_array           = array(
            "current_time" => $current_time,
            "travel_status" => $travel_status,
            "driver_reply_cancel" => $driver_reply_cancel,
            "manage_status" => $manage_status,
            "taxi_company" => $taxi_company
        );
	$bk_type = isset($_GET['bk_t']) ? $_GET['bk_t'] : "";
        if($bk_type != '')
        {
            $send_array['book_type'] = $bk_type;
        }
        $get_all_booking_list = $this->tdispatch_model->dispatcher_booking_list($send_array);
        $i                    = 0;
        $sno                  = 0;
        $status_button        = "";
        $edit                 = "";
        $name_color           = "";
        $op                   = array();
        $confirmflag = 0;

        if (count($get_all_booking_list) > 0) {
            foreach ($get_all_booking_list as $listings) {
                
                $trcolor = 'oddtr';
                $i++;
                if ($i % 2) {
                    $trcolor_class = "show_tr_one";
                } else {
                    $trcolor_class = "show_tr_two";
                }

                $confirmflag = isset($listings['confirm_flag'])?$listings['confirm_flag']:0;
                $pickup_time      = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['pickup_time']);
		$actpickup_time = ($listings['act_pickuptime'] != '')?commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['act_pickuptime']):'';
                $drop_time      = ($listings['drop_time'] !='')?commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['drop_time']):'';
                
                $booking_time   = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['booking_time']);
                
                $pass_logid             = $listings['pass_logid'];
                $passenger_id             = $listings['passenger_id'];
                //$pickup_time            = $listings['pickup_time'];
                //$act_pickuptime         = isset($listings['act_pickuptime'])?$listings['act_pickuptime']:'0000-00-00 00:00:00';
                $passenger_name         = (isset($listings['passenger_name'])) ? urldecode($listings['passenger_name']) : "--";
                $passenger_name = wordwrap($passenger_name, 15, "\n", true);
                if($passenger_name != '')
                {
                    $passenger_name = '<a style="text-decoration:none;" href="' . URL_BASE . 'manage/passengerinfo/' . $passenger_id . '" target="_blank">' . $passenger_name . '</a>' ;
                }
                $driver_name            = isset($listings['driver_name'][0])?$listings['driver_name'][0]:'';
                $driver_code            = isset($listings['driver_code'][0])?$listings['driver_code'][0]:'---';
                $driver_id              = $listings['driver_id'];
                $company_name           = (isset($listings['company_name'][0]) && $listings['company_name'][0] != '') ? $listings['company_name'][0] : "---";
                $passenger_country_code = (isset($listings['passenger_country_code'][0])) ? $listings['passenger_country_code'][0] : "";
                $passenger_phone        = (isset($listings['passenger_phone']) && $listings['passenger_phone'] != '') ? $listings['passenger_phone'] : "---";
                $model_name             = (isset($listings['model_name']) && $listings['model_name'] != '') ? $listings['model_name'] : "---";
                $taxicompany_id         = $listings['company_id'];
                $fixedprice             = (!empty($listings['fare'])) ? $listings['fare'] : 0;
                //$edit_fare = (isset($listings['edit_fare']))?array_sum($listings['edit_fare']):0;

                $edit_model_name             = (isset($listings['edit_model_name'])) ? $listings['edit_model_name'] : "";

                if($edit_model_name!=''){
                    $model_name = ucfirst($edit_model_name).' <span style="color:green;">( '.ucfirst(substr($model_name,0,1)).' )</span>';
                }
                
                $edit_fare='';

                 $actual_pending=0;

                if(isset($listings['edit_fare']))
                {
                    //if(is_array($listings['edit_fare']))
                    //{
                        unset($listings['edit_fare'][6]);
                        unset($listings['edit_fare'][4]);
                        $edit_fare = array_sum($listings['edit_fare']);
                    //}

                        $actual_pending = $listings['edit_fare'][5];
                        $actual_pending = (is_nan($actual_pending) == 1) ? 0 : $actual_pending;
                }



                $edit_fare = ($edit_fare>0)? "(".$edit_fare.")":" ";
                $faretype = (!empty($listings['faretype'])) ? $listings['faretype'] : 0;
                $approx_distance        = (!empty($listings['distance'])) ? $listings['distance'] : 0;
				$airport_pickup        = (!empty($listings['airport_pickup'])) ? $listings['airport_pickup'] : '';
				$airport_flight_number  = (!empty($listings['airport_flight_number'])) ? $listings['airport_flight_number'] : '';
				$no_passengers  = (!empty($listings['no_passengers'])) ? $listings['no_passengers'] : '';
				$max_luggage  = (!empty($listings['max_luggage'])) ? $listings['max_luggage'] : '';
				// New Field //
				$approx_distance  = (!empty($listings['approx_distance'])) ? $listings['approx_distance'] : '-';
				$approx_duration  = (!empty($listings['approx_duration'])) ? $listings['approx_duration'] : '-';

                //check payment type
                $payment_type  = (!empty($listings['payment_type'])) ? $listings['payment_type'] : '';
                $advance_payment  = (!empty($listings['advance_payment'])) ? $listings['advance_payment'] : 0;
                $pending_amt  = (!empty($listings['pending_amt'])) ? $listings['pending_amt'] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'])) ? $listings['wallet_amount_used'] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'])) ? $listings['driver_edit_status'] : 0;
                $actual_paid_amt  = (!empty($listings['actual_paid_amt'])) ? $listings['actual_paid_amt'] : 0;
                $add_amt  = (!empty($listings['add_amt'])) ? $listings['add_amt'] : 0;
                $passenger_pending_amt  = (!empty($listings['passenger_pending_amt'])) ? $listings['passenger_pending_amt'] : 0;
                $passenger_wallet_amount  = (!empty($listings['passenger_wallet_amount'])) ? $listings['passenger_wallet_amount'] : 0;

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }


                $fare = isset($listings['fare'])?$listings['fare']:'';
                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';
                $fixedprice      = $fare + $wallet_amount_used;
                $approx_distance = $listings['actual_distance'];

				// New Field //
                
                // if ($listings['travel_status'] == 1) {
                //     $trans_details = $this->tdispatch_model->dispatcher_booking_transaction($pass_logid);
                //    // echo '<pre>'; print_r($trans_details);exit;
                //     if (count($trans_details) > 0) {
                //         $fixedprice      = $trans_details[0]['fare'];
                //         $approx_distance = $trans_details[0]['distance'];
                //     }
                // }
               	//$time = ' - ';
               	$time = $approx_duration;
                if($drop_time != '' & $actpickup_time != '')
                {
                    $time = commonfunction::dateDiff($drop_time,$actpickup_time);
                }
                $pickup_lat    = $listings['pickup_latitude'];
                $pickup_lng    = $listings['pickup_longitude'];
                $drop_lat      = $listings['drop_latitude'];
                $drop_lng      = $listings['drop_longitude'];
                $no_passengers = $listings['no_passengers'];
		$current_location = $listings['current_location'];
		$drop_location = $listings['drop_location'];
		$listings['pickup_latitude'] = substr($listings['pickup_latitude'],0,9);
                $listings['pickup_longitude'] = substr($listings['pickup_longitude'],0,9);
                $listings['drop_latitude'] = substr($listings['drop_latitude'],0,9);
                $listings['drop_longitude'] = substr($listings['drop_longitude'],0,9);
                $pick_ll        = $listings['pickup_latitude'].'-'.$listings['pickup_longitude'];
                $drop_ll        = ($listings['drop_latitude'] != '' && $listings['drop_latitude'] != 0)?$listings['drop_latitude'].'-'.$listings['drop_longitude']:'';

                $google_current_location = str_replace(' ', '+', $current_location);
                $google_current_location = str_replace('null', '', $current_location);
                $google_current_location = str_replace(',', '', $current_location);
                $google_drop_location = str_replace(' ', '+', $drop_location);
                $google_drop_location = str_replace('null', '', $drop_location);
                $google_drop_location = str_replace(',', '', $drop_location);

                $google_map_link = "https://www.google.com/maps/dir/?api=1&origin=$google_current_location&destination=$google_drop_location&travelmode=driving";

                 $google_map = '<a target="_blank" href="'.$google_map_link.'" style="color:#000;text-decoration:none;" title="Google Link"><img src="' . URL_BASE . 'public/images/maplink.png"></a>';

                 $pickup_link = "https://www.google.com/maps/search/?api=1&query=$pickup_lat,$pickup_lng";
                 $drop_link = "https://www.google.com/maps/search/?api=1&query=$drop_lat,$drop_lng";

                  $pick_ll = '<a style="color:#337ab7" target="_blank" href="'.$pickup_link.'" style="color:#000;text-decoration:none;" title="Google Link">'.$pick_ll.'</a>';
                  $drop_ll = '<a style="color:#337ab7" target="_blank" href="'.$drop_link.'" style="color:#000;text-decoration:none;" title="Google Link">'.$drop_ll.'</a>';

                
                /*if (strlen($listings['current_location']) > 25) {
                    $current_location = substr(ucfirst($listings['current_location']), 0, 25) . "..";
                } else {
                    $current_location = $listings['current_location'];
                }
                if (strlen($listings['drop_location']) > 25) {
                    $drop_location = substr(ucfirst($listings['drop_location']), 0, 25) . "..";
                } else {
                    $drop_location = $listings['drop_location'];
                }*/
                $dispatch_time = isset($listings['dispatch_time'])?strtotime($listings['dispatch_time']):strtotime('0000-00-00 00:00:00');
                $total_drivers = isset($listings['total_drivers'][0]) ? $listings['total_drivers'][0] : "";
                $count_sec     = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec
                if ($total_drivers != NULL && $total_drivers != "") {
                    //$drivers_count=count(explode(',',$total_drivers));
                    if ($total_drivers == 2) {
                        $count_sec = date("Y-m-d H:i:s", time() + 15); // wait for 45 sec
                    } elseif ($total_drivers == 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-10 seconds')); // wait for 65 sec
                    } elseif ($total_drivers > 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-45 seconds')); // wait for 85 sec
                    } else {
                        $count_sec = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec(20+5) for first Notification
                    }
                }
		$dispatch_time = '';
		if(isset($listings['dispatch_time']) && $listings['dispatch_time']!=''){
                    $dispatch_time = commonfunction::convertphpdate('Y-m-d H:i:s',$listings['dispatch_time']);  
               	}
                //echo $listings['dispatch_time']."<br>";
                //echo $count_sec;exit;
                $edit_tab_display = "";
                $cancel           = "";
				 $fare_edit = "";
                if ($listings['travel_status'] == 0) {
                    $status_color  = "#1298ff";
                    $tr_icon_class = "assign_icon";
                    $tr_icon_title = __('assign');
                    $travel_status = '<div style="color:red;">' . __('assign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid .'_'.$driver_id. '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                    //$edit='<i class="glyphicon glyphicon-edit">&nbsp;</i><i class="glyphicon glyphicon-remove">&nbsp;</i>';
                } elseif ($listings['travel_status'] == 1) {
                    $status_color  = "#07841e";
                    $tr_icon_class = "complete_icon";
                    $tr_icon_title = __('completed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('completed') . '</div>';
                    $fare_edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtrfare_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs completed" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('completedd') . '</button>';
                } elseif ($listings['travel_status'] == 2) {
                    $status_color     = "#ff9600";
                    $tr_icon_class    = "inprogress_icon";
                    $tr_icon_title    = __('inprogress');
                    $travel_status    = '<div style="color:' . $status_color . ';">' . __('inprogress') . '</div>';
                    $status_button    = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('inprogress') . '</button>';
                    $edit_tab_display = "<script>$('.edit_booking_" . $pass_logid . "').hide();$('#add_booking_tab').html('Add Booking');</script>";
                } elseif ($listings['travel_status'] == 3) {
                    $status_color  = "#f9c213";
                    $tr_icon_class = "start_to_pickup_icon";
                    $tr_icon_title = __('start_to_pickup');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('start_to_pickup') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('start_to_pickup') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button><button type="submit" class="status cancelBtn" name="cancel" id="cancel_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                  //  $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid . '_'.$driver_id.'" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 4) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancel_by_passenger');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancel_by_passenger') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 5) {
                    $status_color  = "#f91313";
                    $tr_icon_class = "waiting_payment_icon";
                    $tr_icon_title = __('waiting_payment');
                    $travel_status = '<div style="color:' . $status_color . '">' . __('waiting_payment') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('waiting_payment') . '</button>';
                } elseif ($listings['travel_status'] == 6) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                  //  $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid . '_'.$driver_id.'" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 7 && $dispatch_time >= $count_sec) {
                    $driver_not_updated = $this->tdispatch_model->check_driver_not_updated($driver_id);
                    $time_difference    = time() - strtotime($driver_not_updated);
                    if ($time_difference > 25) {
                        //$get_request_dets = $this->tdispatch_model->check_new_request_tripid("", "", $pass_logid, $driver_id, $current_time, "");
                    }
                    //date("Y-m-d H:i:s", time() + 35) it means wait for 25 sec
                    $status_color  = "#eb13f9";
                    $name_color    = "#eb13f9";
                    $tr_icon_class = "waiting_response_icon";
                    $tr_icon_title = __('dispatched');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('dispatched') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs waiting_response" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatched') . '" >' . __('dispatched') . '</button>';
                } elseif ($listings['travel_status'] == 7 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 7) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                  //  $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid .'_'.$driver_id. '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 8) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 9 && $listings['driver_reply'] == 'A') {
                    $status_color  = "#12ff00";
                    $tr_icon_class = "confirm_icon";
                    $tr_icon_title = __('confirmed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('confirmed') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('confirmed') . '</button>';
                 //   $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid .'_'.$driver_id. '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 9 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                    $edit          = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $this->company_id . '" value="' . __('dispatch') . '" >' . __('reassign') . '</button>';
                } elseif ($listings['travel_status'] == 10) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $cancel        = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' . $pass_logid .'_'.$driver_id. '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                }
                $passenger_last_four_drivers = '';
                if ($driver_name != "") {
                    $driver_name  = $driver_name." (".$driver_code.") ";
                    $driverphone = isset($listings['driver_phone'][0])?"-(".$listings['driver_phone'][0].")":'-';
                    $driver_phone = $driverphone;
                } else {
                    if($passenger_id != '') {
                        $passenger_last_four_drivers ='<a href="javascript:void(0)" class="view_last_four_drivers" title="Click to view last four drivers" id="passengerdrivers_'.$passenger_id.'" style="color:#000;text-decoration:none;cursor:default;" ><img src="' . URL_BASE . 'public/images/passenger-notes.png"></a>';
                    }
                    $driver_name  = "<span style='color:red;'>No Driver</span>".$passenger_last_four_drivers;
                    $driver_phone = "";
                }
                $notes_img = '-';
                if (!empty($listings['notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
					$html_clear_text = preg_replace("/[^\w ]+/", "", $listings['notes']);
                    $notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                    
                    //$notes_img = '';
                }

                $pass_notes_img = '';

                 if (!empty($listings['passenger_admin_notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
                    $html_clear_text = preg_replace("/[^\w ]+/", "", $listings['passenger_admin_notes']);
                    $pass_notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/passenger-notes.png"></a>';
                    
                    //$notes_img = '';
                }
                $class = '';
                $bgstyle = '';
                if($listings['book_tag'] == "N") {
                    $tag = __("normal_book");
                    $link = $listings['book_type'];
                    if($airport_pickup == 1)
                    {
                        $class  = "style='color: #ff9600;'";
                        $link   = __('airport').'<br>'; 
                        //$airport_info = 'FN :'.$airport_flight_number.'\nP :'.$no_passengers.'\nL :'.$max_luggage;
                        $airport_info = $airport_flight_number;
                        if($airport_flight_number != "") {
							$link  .= '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' . $airport_info . '"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
						}
                    }
                    else{
                        $class = ( $link == __('book_later')) ? "style='color: #1298ff;'":"style='color: #07841e;'";

                        if($driver_id == 0){
                            $bgstyle = ( $link == __('book_later')) ? "":"style='background: #c6ecc6;'";
                            if($listings['travel_status'] == 0 && $confirmflag == 0 && $link != __('book_later')){

                            $status_button = '<button style="background:green;cursor:pointer" type="submit" class="btn btn-outline btn-primary btn-xs confirmBtn"  name="update_confirm" id="confirm_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('confirm') . '" >' . __('confirm') . '</button>';
                            }
                            
                        }
                    }
                        
                } else {
                    $tag = __("recurrent_book");
                    $link = '<a href="'.URL_BASE.'taxidispatch/recurrent_booking?booking_key='.$listings['booking_key'].'">' . $listings['book_type'] . '</a>';
                }

                //  if('('.$fixedprice.')' == $edit_fare)
                // {
                //     $edit_fare ='';
                // }

                // $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span><span>'.$edit_fare.'</span>'.$fare_edit. '</td>';

                // if($add_amt != 0 && $add_amt != '')
                // {
                //     $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span><span>'.$edit_fare.'</span>'.$fare_edit. '</td>';
                // }
                // else
                // {
                //     if($actual_pending > 0)
                //     {
                //         if($driver_edit_status == 1)
                //         {
                //         $edit_fare = "<span class='pending_payment_class'>(".$actual_pending.")</span>";
                //         $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' . '<span>'.$fixedprice.'</span>'.$edit_fare." ".$fare_edit. '</td>';
                //         }
                //         else
                //         {
                //         $edit_fare = "<span class='fixed_payment_class'>(".$actual_paid_amt.")</span>";
                //         $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span>'.$edit_fare." ".$fare_edit. '</td>';
                //         }
                //     } 
                // }

                //check payment type
                $payment_type  = (!empty($listings['payment_type'])) ? $listings['payment_type'] : '';
                $advance_payment  = (!empty($listings['advance_payment'])) ? $listings['advance_payment'] : 0;
                $pending_amt  = (!empty($listings['pending_amt'])) ? $listings['pending_amt'] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'])) ? $listings['wallet_amount_used'] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'])) ? $listings['driver_edit_status'] : 0;
                $actual_paid_amt  = (!empty($listings['actual_paid_amt'])) ? $listings['actual_paid_amt'] : 0;
                $add_amt  = (!empty($listings['add_amt'])) ? $listings['add_amt'] : 0;
                $passenger_pending_amt  = (!empty($listings['passenger_pending_amt'])) ? $listings['passenger_pending_amt'] : 0;
                $passenger_wallet_amount  = (!empty($listings['passenger_wallet_amount'])) ? $listings['passenger_wallet_amount'] : 0;

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }


                $fare = isset($listings['fare'])?$listings['fare']:'';
                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';
                $fixedprice      = $fare + $wallet_amount_used;

                if($listings['travel_status']  == 1)
                {
                    if($add_amt != '' && $add_amt != 0)
                    {
                        $fixed_amt = $add_amt+$fixedprice;
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$fixed_amt.")</span>";
                    }
                    else
                    {
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$actual_paid_amt.")</span>"; 
                    }
                    
                    $pending_edit_fare = "<span class='pending_payment_class'>(".$actual_pending.")</span>";

                    // if('('.$fixedprice.')' == $edit_fare)
                    // {
                    //     $edit_fare ='';
                    //     $fixed_edit_fare='';
                    //     $pending_edit_fare='';
                    // }
                }
                else
                {
                    $edit_fare ='';
                    $fixed_edit_fare='';
                    $pending_edit_fare='';
                    $payment_type_msg='';
                }

                $passenger_pending_amt_txt = '';
                if($pending_amt > 0)
                {
                   //$passenger_pending_amt_txt = "<span class='pass_pend_payment_class'>(".$passenger_pending_amt.")</span>";
                   $passenger_pending_amt_txt = "<span class='pass_pend_payment_class'>(".$pending_amt.")</span>";
                }

                $edit_fare = $fixed_edit_fare.$pending_edit_fare;
                $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span>'.$edit_fare." ".$fare_edit. " ".$passenger_pending_amt_txt.'</td>';

                // $passenger_pending_amt_txt='';
                // if($passenger_pending_amt != '' && $passenger_pending_amt != 0)
                // $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_pending_amt.")</span>"; if($passenger_pending_amt != '' && $passenger_pending_amt != 0)
                
                $passenger_wallet_amount = (is_nan($passenger_wallet_amount) == 1) ? 0 : $passenger_wallet_amount;
                //$passenger_wallet_amount = gettype($passenger_wallet_amount);
                
                ////// New Changes //////////
                $pwa = explode(".",$passenger_wallet_amount);
                $int = substr($pwa[0],0,5);
                $float = 00;
                if(isset($pwa[1])) {
					$float = substr($pwa[1],0,2);	
				}
                
                $passenger_wallet_amount = $int.'.'.$float;
                ////// New Changes //////////

                if($passenger_wallet_amount < 0)
                {
                 $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                else
                {
                $passenger_pending_amt_txt = "<span class='fixed_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                 





                $op[] .= '<tr '.$bgstyle.' align="center" class="' . $trcolor_class . ' ' . $tr_icon_class . '" id="addtr_' . $pass_logid . '">';
                $op[] .= '<td width="10%" style="border-left:5px solid ' . $status_color . ';">' . $booking_time . '</td>';
                $op[] .= '<td width="10%">' . $pickup_time . '</td>';
                if ($listings['travel_status'] == 1) {
                    $op[] .= '<td width="5%" style="color:blue;text-decoration:none;"><a style="text-decoration:none;" href="' . URL_BASE . 'transaction/transaction_details/' . $pass_logid . '">' . $pass_logid . '</a></td>';
                } else {
                    $op[] .= '<td width="5%" style="color:blue;">' . $pass_logid . '</td>';
                }
                $op[] .= '<td width="7%"><span>' . ucfirst($passenger_name) .'<br/>'.$pass_notes_img.'</span>'.$passenger_pending_amt_txt.'</td>';
               /* if ($this->usertype == "A") {
                    $op[] .= '<td width="7%">' . ucfirst($company_name) . '</td>';
                }*/
                $op[] .= '<td width="7%">' . ucfirst($driver_name) . '' . $driver_phone . '</td>';
                $op[] .= '<td width="5%">' . $model_name . '</td>';
                $op[] .= '<td width="10%">' . $passenger_phone . '</td>';
                $op[] .= '<td width="11%">' . $current_location ."<br>".$pick_ll.'</td>';
                $op[] .= '<td width="11%">' . $drop_location ."<br>".$drop_ll. '</td>';
                //$op[] .= '<td width="11%">' . $current_location .'</td>';
                //$op[] .= '<td width="11%">' . $drop_location .'</td>';
                $op[] .= '<td width="5%">' . $time . '</td>';
                $op[] .= '<td width="5%">' . $payment_type_msg . '</td>';
                $op[] .=  $trifare_text;
               // $op[] .= '<td width="5%">' . $pending_amt . '</td>';
                $op[] .= '<td width="5%">' . $createdby_username . '</td>';
                $op[] .= '<td width="6%"><a href="javascript:;" style="cursor:default;" title="' . $tr_icon_title . '">' . $travel_status . '</a></td>';
                
                $op[] .= '<td width="5%" title="'.$tag.'"><span '.$class.' >'.$link.'</span></td>';
                $op[] .= '<td width="5%">' . $notes_img .'</td>';//'<td width="5%">' . $notes_img .'  '. $google_map .'</td>';
                $op[] .= '<td colspan="2"><span>' . $edit . $cancel . '</span></td>';
                $op[] .= '<td width="4%"><span>' . $status_button . '</span></td>';
                $op[] .= $edit_tab_display;
                $op[] .= '</tr>';
                $status_button = "";
                $edit          = "";
            }
            
            if ($op != NULL) {
                $output = implode(" ", $op);
            }
        } else {
            $output .= '<div class="nodata">';
            $output .= '<p>' . __('no_data') . '</p>';
            $output .= '</div>';
        }
        echo count($get_all_booking_list) . "@" . $output;
        exit;
    }
    public function action_all_booking_list_manage_all()
    {
        $output               = '';
        //print_r($_GET);exit;
        $current_time         = $this->company_all_currenttimestamp;
        $travel_status        = isset($_GET['travel_status']) ? $_GET['travel_status'] : "";
        $driver_reply_cancel  = isset($_GET['status_cancel']) ? $_GET['status_cancel'] : "";
        $manage_status        = isset($_GET['manage_status']) ? $_GET['manage_status'] : 0;
        $search_txt           = isset($_GET['search_txt']) ? $_GET['search_txt'] : "";
        $search_location      = isset($_GET['search_location']) ? $_GET['search_location'] : "";
        $filter_date          = isset($_GET['filter_date']) ? $_GET['filter_date'] : "";
        $to_date              = isset($_GET['to_date']) ? $_GET['to_date'] : "";
        $booking_filter       = isset($_GET['booking_filter']) ? $_GET['booking_filter'] : "";
        $booking_key          = isset($_GET['booking_key']) ? $_GET['booking_key'] : "";
        $type          = isset($_GET['type']) ? $_GET['type'] : "";
        $send_array           = array(
            "current_time" => $current_time,
            "travel_status" => $travel_status,
            "driver_reply_cancel" => $driver_reply_cancel,
            "manage_status" => $manage_status,
            "search_txt" => $search_txt,
            "search_location" => $search_location,
            "filter_date" => $filter_date,
            "to_date" => $to_date,
            "booking_filter" => $booking_filter,
            "booking_key" => $booking_key,
            "type" => $type
        );
        $get_all_booking_list = $this->tdispatch_model->get_all_booking_list_all($send_array);
        //echo "<pre>"; print_r($get_all_booking_list); exit;
        $i                    = 0;
        $sno                  = 0;
        $status_button        = "";
        $edit                 = "";
        $name_color           = "";
        $op                   = array();
        $taxicompany_id       = 0;
       
        if (count($get_all_booking_list) > 0) {
            foreach ($get_all_booking_list as $listings) {
                $trcolor = 'oddtr';
                $i++;
                if ($i % 2) {
                    $trcolor_class = "show_tr_one";
                } else {
                    $trcolor_class = "show_tr_two";
                }
                $pass_logid       = $listings['pass_logid'];
                $pickup_time      = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['pickup_time']);
                $booking_time   = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['booking_time']);
                $passenger_name   = (isset($listings['passenger_name'][0]))?urldecode($listings['passenger_name'][0]):"";
                $passenger_id   = (isset($listings['passenger_id'][0]))?urldecode($listings['passenger_id'][0]):"";
                if($passenger_name != '')
                {
                    $passenger_name = '<a style="text-decoration:none;" href="' . URL_BASE . 'manage/passengerinfo/' . $passenger_id . '" target="_blank">' . $passenger_name . '</a>' ;
                }

                $passenger_phone  = $listings['passenger_phone'];
                $driver_name      = (isset($listings['driver_name'][0]))?$listings['driver_name'][0]:"";
                $driver_code      = (isset($listings['driver_code'][0]))?$listings['driver_code'][0]:"";
                $driver_id        = $listings['driver_id'];
                $reachable_mobile   = (isset($listings['driver_phone'][0]))?$listings['driver_phone'][0]:"";
                $passengerphone   = (isset($listings['passenger_phone'][0]))?$listings['passenger_phone'][0]:"-";
                 $passenger_country_code   = (isset($listings['passenger_country_code'][0]))?$listings['passenger_country_code'][0]:"-";
                $passenger_phone  = $passenger_country_code . ' - ' . $passengerphone ;
                $company_name   = (isset($listings['company_name'][0]))?$listings['company_name'][0]:"-";
                $model_name   = (isset($listings['model_name'][0]))?$listings['model_name'][0]:"-";
                $taxicompany_id   = is_array($listings['company_id'])?$listings['company_id'][0]:$listings['company_id'];
                if ($reachable_mobile != "") {
                    $reachable_mobile = $reachable_mobile;
                } else {
                    $reachable_mobile = "---";
                }
                $fare     = isset($listings['fare'][0])?$listings['fare'][0]:0;
                //check payment type
                $payment_type  = (!empty($listings['payment_type'][0])) ? $listings['payment_type'][0] : '';
                $advance_payment  = (!empty($listings['advance_payment'][0])) ? $listings['advance_payment'][0] : 0;
                $pending_amt  = (!empty($listings['pending_amt'][0])) ? $listings['pending_amt'][0] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'][0])) ? $listings['wallet_amount_used'][0] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'][0])) ? $listings['driver_edit_status'][0] : 0;

                $add_amt  = (!empty($listings['add_amt'])) ? $listings['add_amt'] : 0;

                $edit_model_name             = (isset($listings['edit_model_name'])) ? $listings['edit_model_name'] : "";
                if($edit_model_name!=''){
                    $model_name = ucfirst($edit_model_name).' <span style="color:green;">( '.ucfirst(substr($model_name,0,1)).' )</span>';
                }

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }
                $fare_edit = '';


                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';

                $distance = isset($listings['distance'][0])?$listings['distance'][0]:0;
                if ($fare != NULL && $distance != NULL) {
                    $approx_distance = $distance;
                    //$fixedprice=$listings['fixedprice'];
                    $fixedprice      = $fare+$wallet_amount_used;
                } else {
                    $approx_distance = $listings['approx_distance'];
                    //$fixedprice=$listings['fixedprice'];
                    $fixedprice      = $listings['approx_fare'];
                }
                $pickup_lat    = $listings['pickup_latitude'];
                $pickup_lng    = $listings['pickup_longitude'];
                $drop_lat      = $listings['drop_latitude'];
                $drop_lng      = $listings['drop_longitude'];
                $no_passengers = $listings['no_passengers'];
                if (strlen($listings['current_location']) > 25) {
                    $current_location = substr(ucfirst($listings['current_location']), 0, 25) . "..";
                } else {
                    $current_location = $listings['current_location'];
                }
                if (strlen($listings['drop_location']) > 25) {
                    $drop_location = substr(ucfirst($listings['drop_location']), 0, 25) . "..";
                } else {
                    $drop_location = $listings['drop_location'];
                }
                
                //$dispatch_time = strtotime($listings['dispatch_time']);
                $total_drivers = "";
                $count_sec     = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec
                if ($total_drivers != NULL && $total_drivers != "") {
                    $drivers_count = count(explode(',', $total_drivers));
                    if ($drivers_count == 2) {
                        $count_sec = date("Y-m-d H:i:s", time() + 15); // wait for 45 sec
                        //$count_sec=date("Y-m-d H:i:s", strtotime('+45 seconds')); // wait for 45 sec
                    } elseif ($drivers_count == 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-70 seconds')); // wait for 70 sec
                    } elseif ($drivers_count > 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-90 seconds')); // wait for 90 sec
                    } else {
                        $count_sec = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec(20+5) for first Notification
                        //$count_sec=date("Y-m-d H:i:s", strtotime('+25 seconds')); // wait for 25 sec(20+5) for first Notification
                    }
                }
                   $dispatch_time = '';
		   if(isset($listings['dispatch_time']) && $listings['dispatch_time']!=''){
                      $dispatch_time = commonfunction::convertphpdate('Y-m-d H:i:s',$listings['dispatch_time']);  
       		   }

                //echo date('Y-m-d H:i:s')."<br>";
                //echo date('Y-m-d H:i:s', strtotime('+70 seconds'));exit;
                $edit_tab_display = "";
                if ($listings['travel_status'] == 0) {
                    $status_color  = "#1298ff";
                    $tr_icon_class = "assign_icon";
                    $tr_icon_title = __('assign');
                    $travel_status = '<div style="color:red;">' . __('assign') . '</div>';
                    //$status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 1) {
                    $status_color  = "#07841e";
                    $tr_icon_class = "complete_icon";
                    $tr_icon_title = __('completed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('completed') . '</div>';
                    $fare_edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtrfare_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs completed" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('completedd') . '</button>';
                } elseif ($listings['travel_status'] == 2) {
                    $status_color     = "#ff9600";
                    $tr_icon_class    = "inprogress_icon";
                    $tr_icon_title    = __('inprogress');
                    $travel_status    = '<div style="color:' . $status_color . ';">' . __('inprogress') . '</div>';
                    $status_button    = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('inprogress') . '</button>';
                    $edit_tab_display = "<script>$('.edit_booking" . $pass_logid . "').hide();$('#add_booking_tab').html('Add Booking');</script>";
                } elseif ($listings['travel_status'] == 3) {
                    $status_color  = "#f9c213";
                    $tr_icon_class = "start_to_pickup_icon";
                    $tr_icon_title = __('start_to_pickup');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('start_to_pickup') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('start_to_pickup') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 4) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancel_by_passenger');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancel_by_passenger') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 5) {
                    $status_color  = "#f91313";
                    $tr_icon_class = "waiting_payment_icon";
                    $tr_icon_title = __('waiting_payment');
                    $travel_status = '<div style="color:' . $status_color . '">' . __('waiting_payment') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('waiting_payment') . '</button>';
                    //$status_button='<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_'.$pass_logid.'" value="'.__('dispatch').'" >'.__('waiting_payment').'</button>';
                } elseif ($listings['travel_status'] == 6) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 7 && $dispatch_time >= $count_sec) {
                    //date("Y-m-d H:i:s", time() + 35) it means wait for 25 sec
                    $status_color  = "#eb13f9";
                    $name_color    = "#eb13f9";
                    $tr_icon_class = "waiting_response_icon";
                    $tr_icon_title = __('dispatched');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('dispatched') . '</div>';
                    //$status_button='<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_'.$pass_logid.'" value="'.__('dispatch').'" >'.__('dispatch').'</button>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs waiting_response" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatched') . '" >' . __('dispatched') . '</button>';
                } elseif ($listings['travel_status'] == 7 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 7) {
					//print_r($taxicompany_id);exit;
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 8) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 9 && $listings['driver_reply'] == 'A') {
                    $status_color  = "#12ff00";
                    $tr_icon_class = "confirm_icon";
                    $tr_icon_title = __('confirmed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('confirmed') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('confirmed') . '</button>';
                    $edit          = '<button type="submit" class="status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ></button>';
                } elseif ($listings['travel_status'] == 9 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                    $edit          = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $this->company_id . '" value="' . __('dispatch') . '" >' . __('reassign') . '</button>';
                } elseif ($listings['travel_status'] == 10) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                }
                if ($driver_name != "") {
                    $driver_name  = $driver_name;
                    $driver_name .= ' ('.$driver_code.') ';
                    $driver_phone = (isset($listings['driver_phone'][0]))?$listings['driver_phone'][0]:"-";
                    $driver_phone = "-(" . $driver_phone . ")";
                } else {
                    $driver_name  = "<span style='color:red;'>No Driver</span>";
                    $driver_phone = "";
                }
                /*if($passenger_name!=""){
                $passenger_phone="-(".$passenger_phone.")";
                }else{
                $passenger_phone="";
                } */

                //check payment type
                $payment_type  = (!empty($listings['payment_type'][0])) ? $listings['payment_type'][0] : '';
                $advance_payment  = (!empty($listings['advance_payment'][0])) ? $listings['advance_payment'][0] : 0;
                $pending_amt  = (!empty($listings['pending_amt'][0])) ? $listings['pending_amt'][0] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'][0])) ? $listings['wallet_amount_used'][0] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'][0])) ? $listings['driver_edit_status'][0] : 0;
                $actual_paid_amt  = (!empty($listings['actual_paid_amt'][0])) ? $listings['actual_paid_amt'][0] : 0;
                $add_amt  = (!empty($listings['add_amt'][0])) ? $listings['add_amt'][0] : 0;
                $passenger_pending_amt  = (!empty($listings['passenger_pending_amt'][0])) ? $listings['passenger_pending_amt'][0] : 0;
                $passenger_wallet_amount  = (!empty($listings['passenger_wallet_amount'][0])) ? $listings['passenger_wallet_amount'][0] : 0;

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }

                $actual_pending=0;

                if(isset($listings['edit_fare']))
                {
                    //if(is_array($listings['edit_fare']))
                    //{
                        unset($listings['edit_fare'][6]);
                        unset($listings['edit_fare'][4]);
                        $edit_fare = array_sum($listings['edit_fare']);
                    //}

                        $actual_pending = $listings['edit_fare'][5];
                }


                $fare = isset($listings['fare'][0])?$listings['fare'][0]:'';
                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';
                $fixedprice      = $fare + $wallet_amount_used;

                if($listings['travel_status']  == 1)
                {
                    if($add_amt != '' && $add_amt != 0)
                    {
                        $fixed_amt = $add_amt+$fixedprice;
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$fixed_amt.")</span>";
                    }
                    else
                    {
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$actual_paid_amt.")</span>"; 
                    }
                    
                    $pending_edit_fare = "<span class='pending_payment_class'>(".$actual_pending.")</span>";

                    // if('('.$fixedprice.')' == $edit_fare)
                    // {
                    //     $edit_fare ='';
                    //     $fixed_edit_fare='';
                    //     $pending_edit_fare='';
                    // }
                }
                else
                {
                    $edit_fare ='';
                    $fixed_edit_fare='';
                    $pending_edit_fare='';
                    $payment_type_msg='';
                }

                $passenger_pending_amt_txt = '';
                if($passenger_pending_amt > 0)
                {
                   $passenger_pending_amt_txt = "<span class='pass_pend_payment_class'>(".$passenger_pending_amt.")</span>";
                }

                $edit_fare = $fixed_edit_fare.$pending_edit_fare;
                $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span>'.$edit_fare." ".$fare_edit. " ".$passenger_pending_amt_txt.'</td>';

                // $passenger_pending_amt_txt='';
                // if($passenger_pending_amt != '' && $passenger_pending_amt != 0)
                // $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_pending_amt.")</span>"; if($passenger_pending_amt != '' && $passenger_pending_amt != 0)

                if($passenger_wallet_amount < 0)
                {
                 $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                else
                {
                $passenger_pending_amt_txt = "<span class='fixed_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                 

                
                $notes_img = '-';
                if (!empty($listings['notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
					$html_clear_text = preg_replace("/[^\w ]+/", "", $listings['notes']);
                    $notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                    
                    //$notes_img = '';
                }

                $pass_notes_img ='';

                if (!empty($listings['passenger_admin_notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
                    $html_clear_text = preg_replace("/[^\w ]+/", "", $listings['passenger_admin_notes']);
                    $pass_notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                    
                    //$notes_img = '';
                }
                $op[] .= '<tr align="center" class="' . $trcolor_class . ' ' . $tr_icon_class . '" id="addtr_' . $pass_logid . '">';
                $op[] .= '<td width="10%" style="border-left:5px solid ' . $status_color . ';">' . $booking_time . '</td>';
                $op[] .= '<td width="10%" >' . $pickup_time . '</td>';
                if ($listings['travel_status'] == 1) {
                    $op[] .= '<td width="5%" style="color:blue;text-decoration:none;"><a style="text-decoration:none;" href="' . URL_BASE . 'transaction/transaction_details/' . $pass_logid . '">' . $pass_logid . '</a></td>';
                } else {
                    $op[] .= '<td width="5%" style="color:blue;">' . $pass_logid . '</td>';
                }
                $op[] .= '<td width="7%"><span>' . ucfirst($passenger_name) .'<br/>'.$pass_notes_img.'</span>'.$passenger_pending_amt_txt.'</td>';
               /* if ($this->usertype == "A") {
                    $op[] .= '<td width="7%">' . ucfirst($company_name) . '</td>';
                }*/
                $op[] .= '<td width="7%">' . ucfirst($driver_name) . $driver_phone . '</td>';
                $op[] .= '<td width="5%">' . $model_name . '</td>';
                $op[] .= '<td width="10%">' . $passenger_phone . '</td>';
                $op[] .= '<td width="11%">' . $current_location . '</td>';
                $op[] .= '<td width="11%">' . $drop_location . '</td>';
                $op[] .= '<td width="5%">' . $approx_distance . '</td>';
                $op[] .= $trifare_text;
                $op[] .= '<td width="5%">' . $payment_type_msg . '</td>';
                // $op[] .= '<td width="5%">' . $pending_amt . '</td>';
                $op[] .= '<td width="5%">' . $createdby_username . '</td>';

                $op[] .= '<td width="6%" title="' . $tr_icon_title . '">' . $travel_status . '</td>';
                if($listings['book_tag'] == "N") {
                    $tag = __("normal_book");
                    $link = $listings['book_tag'];
                } else {
                    $tag = __("recurrent_book");
                    $link = '<a href="'.URL_BASE.'taxidispatch/recurrent_booking?booking_key='.$listings['booking_key'].'">' . $listings['book_tag'] . '</a>';
                }
                $op[] .= '<td width="5%" title="'.$tag.'"><span>'.$link.'</span></td>';
                $op[] .= '<td width="5%">' . $notes_img . '</td>';
                $op[] .= '<td width="6%"><span>' . $edit . '</span></td>';
                $op[] .= '<td width="5%"><span>' . $status_button . '</span></td>';
                $op[] .= $edit_tab_display;
                $op[] .= '</tr>';
                $status_button = "";
                $edit          = "";
            }
            if ($op != NULL) {
                $output = implode(" ", $op);
            }
        } else {
            $output = '<div class="nodata"><p>' . __('no_data') . '</p></div>';
        }
        echo $output;
        exit;
    }
    public function action_view_all_driverss()
    {
        $taxi_model = $_REQUEST['taxi_model'];
        if ($taxi_model != "") {
            $all_company_map_list = $this->tdispatch_model->all_driver_map_list_model($_REQUEST);
        } else {
            $all_company_map_list = $this->tdispatch_model->all_driver_map_list($_REQUEST);
        }
        $markers  = array();
        $tmarkers = array();
        foreach ($all_company_map_list as $key => $val) {
            //print_r($val);exit;
            $book_now = "";
            if ($val['driver_status'] == "F" && $val['shift_status'] == "IN") {
                $driver_info = '<span style="color:green">' . __('free_in') . '</span>';
                $book_now    = '<button type="button" class="btn btn-outline btn-primary btn-xs" name="bookingnow" onclick="bookingnow_click(this.id);" id="driverid_' . $val['driver_id'] . '" >' . __('booknow') . '</button>';
            } elseif ($val['driver_status'] == "F" && $val['shift_status'] == "OUT") {
                $driver_info = '<span style="color:blue">' . __('free_out') . '</span>';
            } elseif ($val['driver_status'] == "B") {
                $driver_info = '<span style="color:red">' . __('trip_assigned') . '</span>';
            } elseif ($val['driver_status'] == "A") {
                $driver_info = '<span style="color:orange">' . __('hired') . '</span>';
            }
            $update_date = $val['update_date'];
            $drv_info    = '<div class="info_drivercontent">';
            $drv_info .= '<span class="info-content">' . ucfirst($val['name']) . '</span>';
            $drv_info .= '</br>';
            $drv_info .= '<span class="info-content">' . $driver_info . '</span>';
            $drv_info .= '</br>';
            $drv_info .= '<span class="info-content">' . $update_date . '</span>';
            if ($book_now != "") {
                $drv_info .= '</br>';
                //$drv_info.='<span class="info-content">'.$book_now.'</span>';
            }
            $drv_info .= '</div>';
            $markers[$key]['info']         = $drv_info;
            $markers[$key]['lat']          = $val['loc'][1];
            $markers[$key]['lng']          = $val['loc'][0];
            $markers[$key]['status']       = $val['driver_status'];
            $markers[$key]['shift_status'] = $val['shift_status'];
        }
        echo json_encode($markers);
        exit;
    }
    public function action_search_driver_location()
    {
        if (isset($_REQUEST["pass_logid"])) {
            //print_r($_REQUEST);exit;
            //$admin_companyid = isset($_REQUEST["admin_companyid"]) ? $_REQUEST["admin_companyid"] : 0;
            $admin_companyid = 1;
            $booking_details = $this->tdispatch_model->get_bookingdetails($_REQUEST['pass_logid'], $admin_companyid);
            $latitude        = $booking_details[0]["pickup_latitude"];
            $longitude       = $booking_details[0]["pickup_longitude"];
            $miles           = '';
            $no_passengers   = $booking_details[0]["no_passengers"];
            $taxi_fare_km    = $booking_details[0]["min_fare"];
            $taxi_model      = $booking_details[0]["taxi_modelid"];
            $taxi_type       = '';
            $maximum_luggage = $booking_details[0]["luggage"];
	    	$airport         = isset($booking_details[0]["airport_pickup"])?$booking_details[0]["airport_pickup"]:0;
            $pass_logid      = $_REQUEST["pass_logid"];
            $cityname        = isset($_SESSION['search_city'])?$_SESSION['search_city']:"";
            $search_driver  = $_REQUEST['search_driver'];

            $taxi_edit_modelid    = isset($booking_details[0]["taxi_edit_modelid"])?$booking_details[0]["taxi_edit_modelid"]:'';

            if($taxi_edit_modelid!=''){
                $request_taxi_model = $taxi_edit_modelid;
            }else{
                $request_taxi_model = $taxi_model;
            }
            

            $driver_details = $this->tdispatch_model->search_driver_location($latitude, $longitude, $miles, $no_passengers, $_REQUEST, $taxi_fare_km, $request_taxi_model, $taxi_type, $maximum_luggage, $cityname, $pass_logid, $admin_companyid, $search_driver,$airport);
            //print "<pre>"; print_r($driver_details);exit;
            $count          = count($driver_details);
            $output         = '';
            $sno            = 0;
            if ($count > 0) {
                foreach ($driver_details as $key => $listings) {
                    $sno++;
                    $miles_to_km     = round(($listings['_id']['distance_miles'] * 1.609344), 2);
                    $distance_miles  = (ceil($miles_to_km * 100) / 100);
                    $color           = ($sno % 2 == 0) ? 'whitecp' : 'colorcp';
                    $driver_has_trip = $this->tdispatch_model->check_driver_has_trip_request($listings['_id']['driver_id']);
                    $current_request = $this->tdispatch_model->currently_driver_has_trip_request($listings['_id']['driver_id']);
                    $driver_status = '';
                    $driver_model = '<span style="color:#ff9600" >' . $listings['_id']['driver_model'] . '</span> ';
                    if ($listings['_id']['driver_status'] == "F" && $listings['_id']['shift_status'] == "OUT") {
                        //$status  = "Free Out";
                        $status      = "Free Out";
                        $span_class  = "driver_status_out";
                        $driver_status = ' - '.'<span style="color:#189bff" class=' . $span_class . '>' . $status . '</span> ';

                    } 
                    if ($driver_has_trip == 0 && $current_request == 0) {
                        $output .= '<p class=' . $color . ' id="' . $listings['_id']['driver_id'] . '_' . $listings['_id']['taxi_id'] . '_' . round($distance_miles, 2) . '_' . $listings['_id']['company_id'] . '"><a  href="javascript:;">' . $listings['_id']['name'] . ' (' . __('miles') . ' ' . $distance_miles . ')</a>'." - ".$driver_model.$driver_status.'</p>';
                    }
                }
            } else {
                $output .= __('no_driver_available');
            }
            ?>
			<script>
            $('#driver_details p').click(function() {
                var detailsid = this.id;
                var findimg = detailsid.split('_');
                var pass_logid = $('#passenger_log_id').val();                
                var dataS = "pass_logid="+pass_logid+"&driver_id="+findimg[0]+"&taxi_id="+findimg[1]+"&driver_away_in_km="+findimg[2]+"&company_id="+findimg[3];                
                $("#show_process").html('<img src="<?php echo IMGPATH;?>loader.gif">');
                $.ajax({
                    type: "GET",
                    url: "<?php echo URL_BASE; ?>taxidispatch/updatebooking", 
                    data: dataS, 
                    cache: false, 
                    dataType: 'html',
                    success: function(response) 
                    {
                        $("#show_process").html('');
                        //console.log(response);
                        //document.location.href="<?php echo URL_BASE; ?>tdispatch/managebooking/#stuff";
                         window.location="<?php echo URL_BASE; ?>taxidispatch/dashboard";
                    }
                });
            });
		</script>
		<?php
            echo (!empty($output)) ? $output : __('no_driver_available');
            exit;
        }
    }
    public function action_updatebooking()
    {
        $user_createdby               = $this->userid;
        $company_id                   = $this->company_id;
        $company_all_currenttimestamp = $this->company_all_currenttimestamp;
        if (isset($_REQUEST['driver_id'])) {
            $update_booking = $this->tdispatch_model->updatebooking_logid($_REQUEST);
        } else {
            Message::error(__('no_driver_available'));
            $this->request->redirect("tdispatch/managebooking#stuff");
        }
        //print_r($_REQUEST);exit;
        $passenger_logid   = $_REQUEST['pass_logid'];
        $driver_details    = $this->tdispatch_model->get_driver_profile_details($_REQUEST['driver_id']);
        /* Create Log */
        $log_message       = __('log_message_dispatched');
        $log_message       = str_replace("PASS_LOG_ID", $passenger_logid, $log_message);
        $log_booking       = __('log_booking_dispatched');
        $log_booking       = str_replace("DRIVERNAME", $driver_details['name'], $log_booking);
        $log_status        = $this->tdispatch_model->create_logs($passenger_logid, $company_id, $user_createdby, $log_message, $log_booking);
?>
		<script type="text/javascript">load_logcontent();</script>
		<?php
        /* Create Log */
        if ($update_booking) {
            $driver_away_in_km = $_REQUEST['driver_away_in_km'];
            $exist_request     = $this->tdispatch_model->exist_request($passenger_logid);
            if ($exist_request == 1) {
                 $delete_exist_request = $this->common_model->delete(MDB_REQUEST_HISTORY,'trip_id',$passenger_logid);
            }
            /***** Insert the druiver details to driver request table ************/
            
             $id = $this->common_model->get_auto_id(MDB_REQUEST_HISTORY);
            $insert_array = array(
                "_id" => (int)$id,
                "trip_id" => (int)$passenger_logid,
                "available_drivers" => $_REQUEST['driver_id'],
                "total_drivers" => $_REQUEST['driver_id'],
                "selected_driver" => (int)$_REQUEST['driver_id'],
                "status" => 0,
                "rejected_timeout_drivers" => "",
                //"createdate" => $company_all_currenttimestamp
                "createdate" =>new \MongoDB\BSON\UTCDateTime(strtotime($company_all_currenttimestamp) * 1000)
            );
            //Inserting to Driver request table Table 
            $driver_request        = $this->common_model->insert(MDB_REQUEST_HISTORY, $insert_array);
            $detail       = array(
                "passenger_tripid" => $passenger_logid,
                "notification_time" => ""
            );
            $msg          = array(
                "message" => __('api_request_confirmed_passenger'),
                "status" => 1,
                "detail" => $detail
            );
;
             $det    = $this->common_model->get_dispacttripdetails($passenger_logid);
              if(isset($det['result']) && count($det['result']) > 0)
            {

            $dets   = $det['result'][0];
            $p_device_token     = isset($dets['p_device_token'])?$dets['p_device_token']:'';
            $p_device_id     = isset($dets['p_device_id'])?$dets['p_device_id']:'';
            $p_device_type     =  isset($dets['p_device_type'])?$dets['p_device_type']:1;

            $push_message = array('message'=>'Trip Dispatched','trip_id'=>$passenger_logid,'status'=>20);
            $title='';

            $p_send_notification = $this->api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$push_message,$this->customer_google_api,$title);
            }
	    if (SMS == 1)    
            {
                $text   = $this->common_model->sms_message_by_title('dispatched_trip');
                
                if(isset($det['result']) && count($det['result']) > 0)
                {
                $dets   = $det['result'][0];
                    $phone     = $dets['p_phone'];
                    $code     = $dets['p_country_code'];
                    $d_to   = $dets['d_phone'];
                    $d_name = $dets['d_name'];
                    $text   = $text['sms_description'];
                    $text   = str_replace("##SITE_NAME##", SITE_NAME, $text);
                    $text   = str_replace("##NAME##", $d_name, $text);
                    $text   = str_replace("##NUMBER##", $d_to, $text);
                    //$res = $this->tdispatch_model->sendSMSDispatcher($d_to, $text);
                    $res = $this->api->sendSMS($d_to, $text);
                }
            }
            exit;
        }
    }
    public function action_driver_sequence_list()
    {
        $trip_id                  = $_REQUEST['trip_id'];
        $get_driver_sequence_list = $this->tdispatch_model->get_driver_sequence_list($trip_id);
        //print_r($get_driver_sequence_list);exit;
        $markers                  = array();
        if (count($get_driver_sequence_list) > 0) {
            foreach ($get_driver_sequence_list as $key => $val) {
                $markers[$key]['trip_id']       = $val['trip_id'];
                $markers[$key]['total_drivers'] = $this->tdispatch_model->get_selected_driver_sequence_list($val['total_drivers'], $val['trip_id']);
            }
        }
        echo json_encode($markers);
        exit;
    }
    public function action_manage_booking()
    {
        $user_createdby = $this->userid;
        $usertype       = $this->usertype;
        if ($usertype == 'A' && $usertype == 'S') {
            $this->request->redirect("admin/login");
        }
        $company_id                 = $this->company_id;
        $company_tax                = $this->common_model->company_tax($company_id);
        $company_timezone           = $this->common_model->company_timezone($company_id);
        /**To get the form submit button name**/
        $create_submit              = arr::get($_REQUEST, 'create');
        $dispatch_submit            = arr::get($_REQUEST, 'dispatch');
        //print_r($dispatch_submit);exit;
        $model_details              = $this->tdispatch_model->model_details();
        $errors                     = array();
        $post_values                = array();
        $booking_key                = '';
        $type                       = 'N';
        $view                       = View::factory(TAXI_DISPATCH . 'manage_booking')->bind('validator', $validator)->bind('errors', $errors)->bind('company_tax', $company_tax)->bind('company_timezone', $company_timezone)->bind('model_details', $model_details)->bind('postvalue', $post_values)->bind('booking_key', $booking_key)->bind('type',$type);
        $this->template->title      = SITENAME . " | " . __('manage_booking');
        $this->template->page_title = __('manage_booking');
        $this->template->content    = $view;
    }
    
    public function action_recurrent_booking()
    {
        $user_createdby = $this->userid;
        $usertype       = $this->usertype;
        if ($usertype == 'A' && $usertype == 'S') {
            $this->request->redirect("admin/login");
        }
        $company_id                 = $this->company_id;
        $company_tax                = $this->common_model->company_tax($company_id);
        $company_timezone           = $this->common_model->company_timezone($company_id);
        /**To get the form submit button name**/
        $create_submit              = arr::get($_REQUEST, 'create');
        $dispatch_submit            = arr::get($_REQUEST, 'dispatch');
        $booking_key            = arr::get($_REQUEST, 'booking_key');
        $type                       = 'R';
        //print_r($dispatch_submit);exit;
        $model_details              = $this->tdispatch_model->model_details();
        $errors                     = array();
        $post_values                = array();
        $view                       = View::factory(TAXI_DISPATCH . 'manage_booking')->bind('validator', $validator)->bind('errors', $errors)->bind('company_tax', $company_tax)->bind('company_timezone', $company_timezone)->bind('model_details', $model_details)->bind('postvalue', $post_values)->bind('booking_key', $booking_key)->bind('type',$type);
        $this->template->title      = SITENAME . " | " . __('recurrent_booking');
        $this->template->page_title = __('recurrent_booking');
        $this->template->content    = $view;
    }
    
    public function action_test_sms() {
        $this->tdispatch_model->test_sms();
   }
    
    public function action_cancel_booking()
    {
		$passenger_logid = $_REQUEST['pass_logid'];
        $cancel_reason = $_REQUEST['reason'];
        $user_createdby  = $this->userid;
        $company_id      = $this->company_id;
        $update_booking  = $this->tdispatch_model->cancelbooking_logid($_REQUEST);
        /* Create Log */
        $log_message     = __('log_message_cancelled');
        $log_message     = str_replace("PASS_LOG_ID", $passenger_logid, $log_message);
        $log_booking     = __('log_booking_cancelled');
        $log_booking     = str_replace("PASS_LOG_ID", $passenger_logid, $log_booking);
        $log_status      = $this->tdispatch_model->create_logs($passenger_logid, $company_id, $user_createdby, $log_message, $log_booking);
         /** move to passengerlog split table **/
        $update_cancel_trip_det = $this->tdispatch_model->update_cancel_trip_det($passenger_logid); 
?>
		<script type="text/javascript">load_logcontent();</script>
	<?php
        if ($update_booking == 1) {
            Message::success(__('successfully_cancel_booking'));
            $this->request->redirect("taxidispatch/dashboard");
        } else {
            Message::error(__('Trip in Progress'));
            $this->request->redirect("taxidispatch/dashboard");
        }
    }
    //Getting the latitude and Longitude	
    public function getLatLong($address)
    {
        $address = str_replace(' ', '+', $address);
        $url     = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $geoloc = curl_exec($ch);
        //print_r($geoloc);
        $json   = json_decode($geoloc);
        //print_r($json);exit;
        if (isset($json) && $json->status == 'OK') {
            return array(
                $json->results[0]->geometry->location->lat,
                $json->results[0]->geometry->location->lng
            );
        } else {
			return array(
                29.3117,
                47.4818
            );
            /* return array(
                11.621354,
                76.14253698
            );*/
        }
    }
    //function to get tax value for a particular company/admin
    public function action_gettaxval()
    {
        echo $company_tax = (FARE_SETTINGS == 2 && !empty($_REQUEST['company'])) ? $this->common_model->company_tax($_REQUEST['company']) : TAX;
        exit;
    }
    //function to get taxi dispatch settings
    public function action_checkdispatchsettings()
    {
        if (isset($this->company_id) && $this->company_id!=0) {
            $dispatch_settings = $this->tdispatch_model->dispatch_settings($this->company_id);
            $tdispatch_type = '';
            if (count($dispatch_settings) > 0) {
                $company_dispatch  = $dispatch_settings[1]['dispatch_algorithm'];
                 if(count($company_dispatch)>0){
                     $tdispatch_type    = $company_dispatch['labelname'];
                }  else {
                    $data = array_reverse($company_dispatch);
                    $tdispatch_type    = '2';
                }
            }
            echo ($tdispatch_type !='') ? $tdispatch_type : 0;
        } else {
            $dispatch_settings = $this->tdispatch_model->admin_dispatch_settings();
            echo $dispatch_settings;
        }
        exit;
    }
    public function action_confirm_booking(){
        $passenger_logid = $_REQUEST['pass_logid'];
        $user_createdby  = $this->userid;
        $company_id      = $this->company_id;
        $update_booking  = $this->tdispatch_model->confirmbooking_logid($_REQUEST);
        /* Create Log */
        $log_message     = __('log_message_confirmed');
        $log_message     = str_replace("PASS_LOG_ID", $passenger_logid, $log_message);
        $log_booking     = __('log_booking_confirmed');
        $log_booking     = str_replace("PASS_LOG_ID", $passenger_logid, $log_booking);
        $log_status      = $this->tdispatch_model->create_logs($passenger_logid, $company_id, $user_createdby, $log_message, $log_booking);
         if ($update_booking == 1) {
            Message::success(__('successfully_confirmed_booking'));
            $this->request->redirect("taxidispatch/dashboard");
        } else {
            Message::error(__('booking_is_not_confirmed'));
            $this->request->redirect("taxidispatch/dashboard");
        }
    }
 public function action_upcoming_trip_list()
    {
            $trip_details = $this->tdispatch_model->search_upcoming_trips();
            //echo "<pre>";print_r($trip_details);exit();
            $count          = count($trip_details);
            $sno            = 0;
            $output = '';
            if ($count > 0) {
                $output         = '<table><tr><th width="25%">Tripid</th><th width="50%">Pickup Time</th></tr>';

                foreach ($trip_details as $key => $listings) {
                    $sno++;
      
                    $color           = ($sno % 2 == 0) ? 'whitecp' : 'colorcp';
      
                    $pickup_time      = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['pickup_time']);
                    $output .='<tr><td>'.$listings['pass_logid'].'</td><td>'.$pickup_time.'</td></tr>';
                    $output1 = '<p class=' . $color . ' id="' . $listings['pass_logid'] . '_' . $listings['pass_logid'] . '_' . $listings['pass_logid'] . '"><span>'.$listings['pass_logid'].'</span><a  href="javascript:;">' . $pickup_time . ' </a></p>';
                 
                }    

                $output .= '</table>';
            } else {
                $output = 1;
            }
            echo (!empty($output)) ? $output : 1;
            exit;
        
    }
public function action_pay_details()
    {
       /* echo "<pre>";
        print_r($_REQUEST);
        exit();*/
        $post = $_REQUEST;
        $id = $_REQUEST["edit_pass_logid"];
        $res = $this->tdispatch_model->payentry($id,$post);
        //echo "<pre>";print_r($res);exit();
        if(isset($res['ok']) && $res['ok'] == 1){
            echo 1;
        }else{
            echo 2;
        }
        //Message::success(__('Entry added'));
        exit;
       // $this->request->redirect("taxidispatch/dashboard");

    }


     public function action_get_promocodes(){

        $res = $this->tdispatch_model->get_promocodes();

        $select_field = '<option value="">'.__('select_the_promocode').'</option>';
        if(count($res)){

            $promo_arr = array();

            foreach($res as $val){
                
                if(!in_array($val['promocode'], $promo_arr))
                {
                    if(isset($val['fixed_fare_apply']) && isset($val['fixed_fare_amt']) && $val['fixed_fare_amt']>0 && $val['fixed_fare_apply'] ==1){
                        $disp_data = $val['promocode'].' ( Trip fare fixed KD: '.$val['fixed_fare_amt'].' )';
                    }else{
                        $disp_data = $val['promocode'].' ('.$val['passenger_commission'].'%)';
                    }

                    $select_field .= '<option value="'.$val['promocode'].'">'.$disp_data.'</option>';
                    $promo_arr[] = $val['promocode'];                  
                }
            }
        }

        echo $select_field;exit;        
    }

    public function action_validate_promocode(){

         $promo_code = $_REQUEST['promo_code'];
         $passenger_id = $_REQUEST['passenger_id'];
         //$passenger_number = isset($_REQUEST['passenger_number'])?$_REQUEST['passenger_number']:'';
         $passenger_info =   $this->tdispatch_model->get_passenger_details_by_id($passenger_id);
         $passenger_number = $passenger_info[0]['phone'];
         $check_promo = $this->tdispatch_model->checkpromocode($promo_code, $passenger_number, $default_companyid='',$passenger_id);
            //echo $check_promo;
            //exit;
            if ($check_promo == 0) {
                $msg = array(
                    "message" => __('invalid_promocode'),
                    "status" => 3
                );
               
            } else if ($check_promo == 3) {
                $msg = array(
                    "message" => __('promo_code_startdate'),
                    "status" => 3
                );
               
            } else if ($check_promo == 4) {
                $msg = array(
                    "message" => __('promo_code_expired'),
                    "status" => 3
                );                
            } else if ($check_promo == 2) {
                $msg = array(
                    "message" => __('promo_code_limit_exceed'),
                    "status" => 3
                );              
                
            } else {
                $msg = array(
                    "message" => __('promo_applied_succees'),
                    "status" => 1
                );                
            }

            echo json_encode($msg);
            exit;
    }
    
    public function action_validate_giftcard(){

        $gift_card_number = $_REQUEST['giftcard'];
        $passenger_id = $_REQUEST['passenger_id'];

        $giftcard_response = Controller_Giftcard::checkBalance($gift_card_number);

        if($giftcard_response->code == 200){
            $msg = array(
            "message" => __('gift_applied_succees'),
            "status" => 1);
        }
        else{
            $msg = array(
            "message" => __('invalid_promocode'),
            "status" => 3);
        }

        echo json_encode($msg);
        exit;
           
   }
    public function action_manage_complete_booking()
    {
        $user_createdby = $this->userid;
        $usertype       = $this->usertype;
        if ($usertype == 'A' && $usertype == 'S') {
            $this->request->redirect("admin/login");
        }
        $company_id                 = $this->company_id;
        $company_tax                = $this->common_model->company_tax($company_id);
        $company_timezone           = $this->common_model->company_timezone($company_id);
        /**To get the form submit button name**/
        $create_submit              = arr::get($_REQUEST, 'create');
        $dispatch_submit            = arr::get($_REQUEST, 'dispatch');
        //print_r($dispatch_submit);exit;
        $model_details              = $this->tdispatch_model->model_details();
        $errors                     = array();
        $post_values                = array();
        $booking_key                = '';
        $type                       = 'N';
        $view                       = View::factory(TAXI_DISPATCH . 'manage_complete_booking')->bind('validator', $validator)->bind('errors', $errors)->bind('company_tax', $company_tax)->bind('company_timezone', $company_timezone)->bind('model_details', $model_details)->bind('postvalue', $post_values)->bind('booking_key', $booking_key)->bind('type',$type);
        $this->template->title      = SITENAME . " | " . __('manage_booking');
        $this->template->page_title = __('manage_booking');
        $this->template->content    = $view;
    }
    
    public function action_all_complete_booking_list_manage_all()
    {
        $output               = '';
        //print_r($_GET);exit;
        $current_time         = $this->company_all_currenttimestamp;
        $travel_status        = isset($_GET['travel_status']) ? $_GET['travel_status'] : "";
        $driver_reply_cancel  = isset($_GET['status_cancel']) ? $_GET['status_cancel'] : "";
        $manage_status        = isset($_GET['manage_status']) ? $_GET['manage_status'] : 0;
        $search_txt           = isset($_GET['search_txt']) ? $_GET['search_txt'] : "";
        $search_location      = isset($_GET['search_location']) ? $_GET['search_location'] : "";
        $filter_date          = isset($_GET['filter_date']) ? $_GET['filter_date'] : "";
        $to_date              = isset($_GET['to_date']) ? $_GET['to_date'] : "";
        $booking_filter       = isset($_GET['booking_filter']) ? $_GET['booking_filter'] : "";
        $booking_key          = isset($_GET['booking_key']) ? $_GET['booking_key'] : "";
        $type          = isset($_GET['type']) ? $_GET['type'] : "";
        $send_array           = array(
            "current_time" => $current_time,
            "travel_status" => $travel_status,
            "driver_reply_cancel" => $driver_reply_cancel,
            "manage_status" => $manage_status,
            "search_txt" => $search_txt,
            "search_location" => $search_location,
            "filter_date" => $filter_date,
            "to_date" => $to_date,
            "booking_filter" => $booking_filter,
            "booking_key" => $booking_key,
            "type" => $type
        );
        $get_all_booking_list = $this->tdispatch_model->get_all_complete_booking_list_all($send_array);
        //echo "<pre>"; print_r($get_all_booking_list); exit;
        $i                    = 0;
        $sno                  = 0;
        $status_button        = "";
        $edit                 = "";
        $name_color           = "";
        $op                   = array();
        $taxicompany_id       = 0;
       
        if (count($get_all_booking_list) > 0) {
            foreach ($get_all_booking_list as $listings) {
                $trcolor = 'oddtr';
                $i++;
                if ($i % 2) {
                    $trcolor_class = "show_tr_one";
                } else {
                    $trcolor_class = "show_tr_two";
                }
                $pass_logid       = $listings['pass_logid'];
                $pickup_time      = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['pickup_time']);
                $booking_time   = commonfunction::convertphpdate('d-M-Y h:i:s A',$listings['booking_time']);
                $passenger_name   = (isset($listings['passenger_name'][0]))?urldecode($listings['passenger_name'][0]):"";
                $passenger_id   = (isset($listings['passenger_id'][0]))?urldecode($listings['passenger_id'][0]):"";
                if($passenger_name != '')
                {
                    $passenger_name = '<a style="text-decoration:none;" href="' . URL_BASE . 'manage/passengerinfo/' . $passenger_id . '" target="_blank">' . $passenger_name . '</a>' ;
                }

                $passenger_phone  = $listings['passenger_phone'];
                $driver_name      = (isset($listings['driver_name'][0]))?$listings['driver_name'][0]:"";
                $driver_code      = (isset($listings['driver_code'][0]))?$listings['driver_code'][0]:"";
                $driver_id        = $listings['driver_id'];
                $reachable_mobile   = (isset($listings['driver_phone'][0]))?$listings['driver_phone'][0]:"";
                $passengerphone   = (isset($listings['passenger_phone'][0]))?$listings['passenger_phone'][0]:"-";
                 $passenger_country_code   = (isset($listings['passenger_country_code'][0]))?$listings['passenger_country_code'][0]:"-";
                $passenger_phone  = $passenger_country_code . ' - ' . $passengerphone ;
                $company_name   = (isset($listings['company_name'][0]))?$listings['company_name'][0]:"-";
                $model_name   = (isset($listings['model_name'][0]))?$listings['model_name'][0]:"-";
                $taxicompany_id   = is_array($listings['company_id'])?$listings['company_id'][0]:$listings['company_id'];
                if ($reachable_mobile != "") {
                    $reachable_mobile = $reachable_mobile;
                } else {
                    $reachable_mobile = "---";
                }
                $fare     = isset($listings['fare'][0])?$listings['fare'][0]:0;
                //check payment type
                $payment_type  = (!empty($listings['payment_type'][0])) ? $listings['payment_type'][0] : '';
                $advance_payment  = (!empty($listings['advance_payment'][0])) ? $listings['advance_payment'][0] : 0;
                $pending_amt  = (!empty($listings['pending_amt'][0])) ? $listings['pending_amt'][0] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'][0])) ? $listings['wallet_amount_used'][0] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'][0])) ? $listings['driver_edit_status'][0] : 0;

                $add_amt  = (!empty($listings['add_amt'])) ? $listings['add_amt'] : 0;

                $edit_model_name             = (isset($listings['edit_model_name'])) ? $listings['edit_model_name'] : "";
                if($edit_model_name!=''){
                    $model_name = ucfirst($edit_model_name).' <span style="color:green;">( '.ucfirst(substr($model_name,0,1)).' )</span>';
                }

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }
                $fare_edit = '';


                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';

                $distance = isset($listings['distance'][0])?$listings['distance'][0]:0;
                if ($fare != NULL && $distance != NULL) {
                    $approx_distance = $distance;
                    //$fixedprice=$listings['fixedprice'];
                    $fixedprice      = $fare+$wallet_amount_used;
                } else {
                    $approx_distance = $listings['approx_distance'];
                    //$fixedprice=$listings['fixedprice'];
                    $fixedprice      = $listings['approx_fare'];
                }
                $pickup_lat    = $listings['pickup_latitude'];
                $pickup_lng    = $listings['pickup_longitude'];
                $drop_lat      = $listings['drop_latitude'];
                $drop_lng      = $listings['drop_longitude'];
                $no_passengers = $listings['no_passengers'];
                if (strlen($listings['current_location']) > 25) {
                    $current_location = substr(ucfirst($listings['current_location']), 0, 25) . "..";
                } else {
                    $current_location = $listings['current_location'];
                }
                if (strlen($listings['drop_location']) > 25) {
                    $drop_location = substr(ucfirst($listings['drop_location']), 0, 25) . "..";
                } else {
                    $drop_location = $listings['drop_location'];
                }
                
                //$dispatch_time = strtotime($listings['dispatch_time']);
                $total_drivers = "";
                $count_sec     = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec
                if ($total_drivers != NULL && $total_drivers != "") {
                    $drivers_count = count(explode(',', $total_drivers));
                    if ($drivers_count == 2) {
                        $count_sec = date("Y-m-d H:i:s", time() + 15); // wait for 45 sec
                        //$count_sec=date("Y-m-d H:i:s", strtotime('+45 seconds')); // wait for 45 sec
                    } elseif ($drivers_count == 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-70 seconds')); // wait for 70 sec
                    } elseif ($drivers_count > 3) {
                        $count_sec = date('Y-m-d H:i:s', strtotime('-90 seconds')); // wait for 90 sec
                    } else {
                        $count_sec = date("Y-m-d H:i:s", time() + 35); // wait for 25 sec(20+5) for first Notification
                        //$count_sec=date("Y-m-d H:i:s", strtotime('+25 seconds')); // wait for 25 sec(20+5) for first Notification
                    }
                }
                   $dispatch_time = '';
           if(isset($listings['dispatch_time']) && $listings['dispatch_time']!=''){
                      $dispatch_time = commonfunction::convertphpdate('Y-m-d H:i:s',$listings['dispatch_time']);  
               }

                //echo date('Y-m-d H:i:s')."<br>";
                //echo date('Y-m-d H:i:s', strtotime('+70 seconds'));exit;
                $edit_tab_display = "";
                if ($listings['travel_status'] == 0) {
                    $status_color  = "#1298ff";
                    $tr_icon_class = "assign_icon";
                    $tr_icon_title = __('assign');
                    $travel_status = '<div style="color:red;">' . __('assign') . '</div>';
                    //$status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 1) {
                    $status_color  = "#07841e";
                    $tr_icon_class = "complete_icon";
                    $tr_icon_title = __('completed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('completed') . '</div>';
                    $fare_edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtrfare_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs completed" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('completedd') . '</button>';
                } elseif ($listings['travel_status'] == 2) {
                    $status_color     = "#ff9600";
                    $tr_icon_class    = "inprogress_icon";
                    $tr_icon_title    = __('inprogress');
                    $travel_status    = '<div style="color:' . $status_color . ';">' . __('inprogress') . '</div>';
                    $status_button    = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('inprogress') . '</button>';
                    $edit_tab_display = "<script>$('.edit_booking" . $pass_logid . "').hide();$('#add_booking_tab').html('Add Booking');</script>";
                } elseif ($listings['travel_status'] == 3) {
                    $status_color  = "#f9c213";
                    $tr_icon_class = "start_to_pickup_icon";
                    $tr_icon_title = __('start_to_pickup');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('start_to_pickup') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('start_to_pickup') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 4) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancel_by_passenger');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancel_by_passenger') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 5) {
                    $status_color  = "#f91313";
                    $tr_icon_class = "waiting_payment_icon";
                    $tr_icon_title = __('waiting_payment');
                    $travel_status = '<div style="color:' . $status_color . '">' . __('waiting_payment') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('waiting_payment') . '</button>';
                    //$status_button='<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_'.$pass_logid.'" value="'.__('dispatch').'" >'.__('waiting_payment').'</button>';
                } elseif ($listings['travel_status'] == 6) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 7 && $dispatch_time >= $count_sec) {
                    //date("Y-m-d H:i:s", time() + 35) it means wait for 25 sec
                    $status_color  = "#eb13f9";
                    $name_color    = "#eb13f9";
                    $tr_icon_class = "waiting_response_icon";
                    $tr_icon_title = __('dispatched');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('dispatched') . '</div>';
                    //$status_button='<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_'.$pass_logid.'" value="'.__('dispatch').'" >'.__('dispatch').'</button>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs waiting_response" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatched') . '" >' . __('dispatched') . '</button>';
                } elseif ($listings['travel_status'] == 7 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 7) {
                    //print_r($taxicompany_id);exit;
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                } elseif ($listings['travel_status'] == 8) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                } elseif ($listings['travel_status'] == 9 && $listings['driver_reply'] == 'A') {
                    $status_color  = "#12ff00";
                    $tr_icon_class = "confirm_icon";
                    $tr_icon_title = __('confirmed');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('confirmed') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('confirmed') . '</button>';
                    $edit          = '<button type="submit" class="status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ></button>';
                } elseif ($listings['travel_status'] == 9 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color  = "#844d06";
                    $tr_icon_class = "cancel_icon";
                    $tr_icon_title = __('cancelled');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' . $pass_logid . '" value="' . __('dispatch') . '" >' . __('cancelledd') . '</button>';
                    $edit          = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $this->company_id . '" value="' . __('dispatch') . '" >' . __('reassign') . '</button>';
                } elseif ($listings['travel_status'] == 10) {
                    $status_color  = "#1339f9";
                    $tr_icon_class = "reassign_icon";
                    $tr_icon_title = __('reassign');
                    $travel_status = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                    $status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' . $pass_logid . '_' . $taxicompany_id . '" value="' . __('dispatch') . '" >' . __('dispatch') . '</button>';
                    //$edit='<button type="submit" class="status '.$trcolor.'" name="edit" id="addtr_'.$pass_logid.'" value="'.__('dispatch').'" ></button>';
                    $edit          = '<a href="javascript:;" class="edit-ico status ' . $trcolor . '" name="edit" id="addtr_' . $pass_logid . '" value="' . __('dispatch') . '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                }
                if ($driver_name != "") {
                    $driver_name  = $driver_name;
                    $driver_name .= ' ('.$driver_code.') ';
                    $driver_phone = (isset($listings['driver_phone'][0]))?$listings['driver_phone'][0]:"-";
                    $driver_phone = "-(" . $driver_phone . ")";
                } else {
                    $driver_name  = "<span style='color:red;'>No Driver</span>";
                    $driver_phone = "";
                }
                /*if($passenger_name!=""){
                $passenger_phone="-(".$passenger_phone.")";
                }else{
                $passenger_phone="";
                } */

                //check payment type
                $payment_type  = (!empty($listings['payment_type'][0])) ? $listings['payment_type'][0] : '';
                $advance_payment  = (!empty($listings['advance_payment'][0])) ? $listings['advance_payment'][0] : 0;
                $pending_amt  = (!empty($listings['pending_amt'][0])) ? $listings['pending_amt'][0] : 0;
                $wallet_amount_used  = (!empty($listings['wallet_amount_used'][0])) ? $listings['wallet_amount_used'][0] : 0;
                $driver_edit_status  = (!empty($listings['driver_edit_status'][0])) ? $listings['driver_edit_status'][0] : 0;
                $actual_paid_amt  = (!empty($listings['actual_paid_amt'][0])) ? $listings['actual_paid_amt'][0] : 0;
                $add_amt  = (!empty($listings['add_amt'][0])) ? $listings['add_amt'][0] : 0;
                $passenger_pending_amt  = (!empty($listings['passenger_pending_amt'][0])) ? $listings['passenger_pending_amt'][0] : 0;
                $passenger_wallet_amount  = (!empty($listings['passenger_wallet_amount'][0])) ? $listings['passenger_wallet_amount'][0] : 0;

                $payment_type_msg = '';

                $payment_type_msg = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);

                if($pending_amt == 0)
                {
                    $pending_amt = '';
                }

                $actual_pending=0;

                if(isset($listings['edit_fare']))
                {
                    //if(is_array($listings['edit_fare']))
                    //{
                        unset($listings['edit_fare'][6]);
                        unset($listings['edit_fare'][4]);
                        $edit_fare = array_sum($listings['edit_fare']);
                    //}

                        $actual_pending = $listings['edit_fare'][5];
                }


                $fare = isset($listings['fare'][0])?$listings['fare'][0]:'';
                $tripfare = isset($listings['tripfare'][0])?$listings['tripfare'][0]:'';
                $createdby_username = isset($listings['createdby_username'])?$listings['createdby_username']:'-';
                $fixedprice      = $fare + $wallet_amount_used;

                if($listings['travel_status']  == 1)
                {
                    if($add_amt != '' && $add_amt != 0)
                    {
                        $fixed_amt = $add_amt+$fixedprice;
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$fixed_amt.")</span>";
                    }
                    else
                    {
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(".$actual_paid_amt.")</span>"; 
                    }
                    
                    $pending_edit_fare = "<span class='pending_payment_class'>(".$actual_pending.")</span>";

                    // if('('.$fixedprice.')' == $edit_fare)
                    // {
                    //     $edit_fare ='';
                    //     $fixed_edit_fare='';
                    //     $pending_edit_fare='';
                    // }
                }
                else
                {
                    $edit_fare ='';
                    $fixed_edit_fare='';
                    $pending_edit_fare='';
                    $payment_type_msg='';
                }

                $passenger_pending_amt_txt = '';
                if($passenger_pending_amt > 0)
                {
                   $passenger_pending_amt_txt = "<span class='pass_pend_payment_class'>(".$passenger_pending_amt.")</span>";
                }

                $edit_fare = $fixed_edit_fare.$pending_edit_fare;
                $trifare_text = '<td width="10%" id = "fare_'.$pass_logid.'">' .'<span>'. $fixedprice.'</span>'.$edit_fare." ".$fare_edit. " ".$passenger_pending_amt_txt.'</td>';

                // $passenger_pending_amt_txt='';
                // if($passenger_pending_amt != '' && $passenger_pending_amt != 0)
                // $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_pending_amt.")</span>"; if($passenger_pending_amt != '' && $passenger_pending_amt != 0)

                if($passenger_wallet_amount < 0)
                {
                 $passenger_pending_amt_txt = "<span class='pending_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                else
                {
                $passenger_pending_amt_txt = "<span class='fixed_payment_class'>(".$passenger_wallet_amount.")</span>";
                }
                 

                
                $notes_img = '-';
                if (!empty($listings['notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
                    $html_clear_text = preg_replace("/[^\w ]+/", "", $listings['notes']);
                    $notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                    
                    //$notes_img = '';
                }

                $pass_notes_img ='';

                if (!empty($listings['passenger_admin_notes'])) {
                    //$html_clear_text = str_replace('/','',$listings['notes']);
                    $html_clear_text = preg_replace("/[^\w ]+/", "", $listings['passenger_admin_notes']);
                    $pass_notes_img = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'.$html_clear_text.'"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                    
                    //$notes_img = '';
                }
                $op[] .= '<tr align="center" class="' . $trcolor_class . ' ' . $tr_icon_class . '" id="addtr_' . $pass_logid . '">';
                $op[] .= '<td width="10%" style="border-left:5px solid ' . $status_color . ';">' . $booking_time . '</td>';
                $op[] .= '<td width="10%" >' . $pickup_time . '</td>';
                if ($listings['travel_status'] == 1) {
                    $op[] .= '<td width="5%" style="color:blue;text-decoration:none;"><a style="text-decoration:none;" href="' . URL_BASE . 'transaction/transaction_details/' . $pass_logid . '">' . $pass_logid . '</a></td>';
                } else {
                    $op[] .= '<td width="5%" style="color:blue;">' . $pass_logid . '</td>';
                }
                $op[] .= '<td width="7%"><span>' . ucfirst($passenger_name) .'<br/>'.$pass_notes_img.'</span>'.$passenger_pending_amt_txt.'</td>';
               /* if ($this->usertype == "A") {
                    $op[] .= '<td width="7%">' . ucfirst($company_name) . '</td>';
                }*/
                $op[] .= '<td width="7%">' . ucfirst($driver_name) . $driver_phone . '</td>';
                $op[] .= '<td width="5%">' . $model_name . '</td>';
                $op[] .= '<td width="10%">' . $passenger_phone . '</td>';
                $op[] .= '<td width="11%">' . $current_location . '</td>';
                $op[] .= '<td width="11%">' . $drop_location . '</td>';
                $op[] .= '<td width="5%">' . $approx_distance . '</td>';
                $op[] .= $trifare_text;
                $op[] .= '<td width="5%">' . $payment_type_msg . '</td>';
                // $op[] .= '<td width="5%">' . $pending_amt . '</td>';
                $op[] .= '<td width="5%">' . $createdby_username . '</td>';

                $op[] .= '<td width="6%" title="' . $tr_icon_title . '">' . $travel_status . '</td>';
                if($listings['book_tag'] == "N") {
                    $tag = __("normal_book");
                    $link = $listings['book_tag'];
                } else {
                    $tag = __("recurrent_book");
                    $link = '<a href="'.URL_BASE.'taxidispatch/recurrent_booking?booking_key='.$listings['booking_key'].'">' . $listings['book_tag'] . '</a>';
                }
                $op[] .= '<td width="5%" title="'.$tag.'"><span>'.$link.'</span></td>';
                $op[] .= '<td width="5%">' . $notes_img . '</td>';
                $op[] .= '<td width="6%"><span>' . $edit . '</span></td>';
                $op[] .= '<td width="5%"><span>' . $status_button . '</span></td>';
                $op[] .= $edit_tab_display;
                $op[] .= '</tr>';
                $status_button = "";
                $edit          = "";
            }
            if ($op != NULL) {
                $output = implode(" ", $op);
            }
        } else {
            $output = '<div class="nodata"><p>' . __('no_data') . '</p></div>';
        }
        echo $output;
        exit;
    }
    
    public function action_edit_complete_booking()
    {
        $pass_log_id         = $_REQUEST['passenger_logid'];
        $edit_bookingdetails = $this->tdispatch_model->edit_complete_bookingdetails($pass_log_id);
        echo json_encode($edit_bookingdetails);
        exit;
    }

    public function action_pay_complete_details()
    {      
        $post = $_REQUEST;
        $id = $_REQUEST["edit_pass_logid"];
        $res = $this->tdispatch_model->pay_complete_entry($id,$post);
        //echo "<pre>";print_r($res);exit();
        if(isset($res['ok']) && $res['ok'] == 1){
            echo 1;
        }else{
            echo 2;
        }        
        exit;
    }
    
    public function action_get_past_places(){

        $pass_id = isset($_REQUEST["id"])?$_REQUEST["id"]:'';
        $res = $this->tdispatch_model->get_past_places($pass_id);

        $select_field = '<option value="">'.__('Select favourite place').'</option>';
        if(count($res)){

            foreach($res as $val){

                //$place_disp = wordwrap($val['place'],15,"<br>\n");

                $type = isset($val['type'])?$val['type']:'';

                if($type!=''){
                   $fav_place_disp = $val['place'].' ('.$type.')';
                }else{
                   $fav_place_disp = $val['place'];
                }

                $select_field .= '<option data-lat="'.$val['latitude'].'" data-lng="'.$val['longitude'].'" value="'.$val['place'].'">'.$fav_place_disp.'</option>';
            }
        }

        echo $select_field;exit;        
    }

    public function action_get_last_four_drivers_list(){

        $pass_id = isset($_REQUEST["id"])?$_REQUEST["id"]:'';
        $res = $this->tdispatch_model->get_last_four_drivers_list($pass_id);
        echo $res;exit;        
    }

}
?>
