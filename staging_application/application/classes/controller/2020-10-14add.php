<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Add extends Controller_Siteadmin
{
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->is_login();
		$this->user_createdby = $this->session->get('userid');
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
		
		//Models
		$this->driver      = Model::factory('driver');
		$this->common_model    = Model::factory('commonmodel');
		$this->add_model      = Model::factory('add');
		$this->api                 = Model::factory('mobileapi115');
		$this->lang                    = I18n::lang(LANG);
    }
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set('requested_url', Request::detect_uri());
        /**To check Whether the user is logged in or not**/
        if (!isset($this->session) || (!$this->session->get('userid')) && !$this->session->get('id')) {
            Message::error(__('login_access'));
            $this->request->redirect("/admin/login/");
        }
        return;
    }
    public function action_motor()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addmotor');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmotor(arr::extract($post, [
                'companyname'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addmotor($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_motor_company'));
                    $this->request->redirect("add/motor");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_motor')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_motor_company');
        $this->template->page_title = __('add_motor_company');
        $this->template->content    = $view;
    }
    public function action_model()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addmodel');
        $errors        = [];
        $post_values   = [];
        $motor_details = $this->add_model->motor_details();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmodel(arr::extract($post, [
                'companyname',
                'model_name',
                'model_size',
                'waiting_time',
                'base_fare',
                'min_km',
                'min_fare',
                'cancellation_fare',
                'below_and_above_km',
                'below_km',
                'above_km',
                'minutes_fare',
                'night_charge',
                'night_timing_from',
                'night_timing_to',
                'night_fare'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addmodel($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_model_company'));
                    $this->request->redirect("manage/model");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_model')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('motor_details', $motor_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_model');
        $this->template->page_title = __('add_model');
        $this->template->content    = $view;
    }
    public function action_fare()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        $add_fare      = Model::factory('add');
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addfare');
        $errors        = [];
        $post_values   = [];
        $model_details = $add_fare->modeldetails();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values  = $_POST;
            $exist_models = $add_fare->exist_models($post_values['model_name']);
            if (count($exist_models) == 1) {
				echo "called"; exit;
                Message::error(__('fare_added_already'));
                $this->request->redirect("manage/fare");
            }
            $post      = Arr::map('trim', $this->request->post());
            $validator = $add_fare->validate_addfare(arr::extract($post, [
                'model_name',
                'model_size',
                'waiting_time',
                'base_fare',
                'min_fare',
                'cancellation_fare',
                'below_km',
                'above_km',
                'night_charge',
                'night_timing_from',
                'night_timing_to',
                'night_fare',
                'min_km',
                'below_and_above_km',
                'minutes_fare',
                'evening_charge',
                'evening_timing_from',
                'evening_timing_to',
                'evening_fare'
            ]));
            if ($validator->check()) {
                $signup_id = $add_fare->addfare($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_fare_company'));
                    $this->request->redirect("manage/fare");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_fare')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('model_details', $model_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_fare');
        $this->template->page_title = __('add_fare');
        $this->template->content    = $view;
    }
    public function action_checkmodel()
    {
        $exist_models = $this->add_model->exist_models($_REQUEST['modelId']);
        $message      = '';
        if (count($exist_models) > 0) {
            $message = __('fare_added_already');
        }
        echo $message;
        exit;
    }
    public function action_checkdomain()
    {
        $check_domain_exist = $this->add_model->checkcompanydomain($_REQUEST["type"]);
        if ($check_domain_exist == 0) {
            echo '<span style="color:green;">' . __('company_domain_is_avaliable') . '</span>';
            exit;
        } else {
            echo '<span style="color:red;">' . __('company_domain_is_exist') . '</span>';
            exit;
        }
    }
    public function action_company()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
		$country_details = $this->add_model->country_details();
        $state_details   = $this->add_model->state_details();
		$city_details    = $this->add_model->city_details();
        $package_details = $this->add_model->package_details();
		$payment_modules = $this->add_model->payment_modules();
        $currencysymbol  = $this->currencysymbol;
        $currencycode    = $this->all_currency_code;
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_addcompany');        
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addcompany(arr::extract($post_values, [
                'firstname',
                'lastname',
                'email',
                'password',
                'repassword',
                'phone',
                'address',
                'company_name',
                'domain_name',
                'company_address',
                'country',
                'state',
                'city',
                'currency_code',
                'currency_symbol',
                'time_zone'
            ]), $_FILES);
            //'paypal_api_username','paypal_api_password','paypal_api_signature','payment_method',
            if (!isset($_POST['paymodstatus'])) {
                $check_paystatus = 0;
            } else {
                if (in_array($_POST['default'][0], $_POST['paymodstatus'])) {
                    $check_paystatus = 1;
                } else {
                    $check_paystatus = 2;
                }
            }
            $check_default = $this->add_model->check_array($_POST['default']);
            if ($validator->check() && ($check_paystatus == 1)) {
                //print_r($post); exit;
                $signup_id = $this->add_model->addcompany($post_values, $_FILES);
                if ($signup_id == 1) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_DOMAINNAME => $_POST['domain_name'],
                        REPLACE_USERNAME => $_POST['firstname'],
                        REPLACE_EMAIL => $_POST['email'],
                        REPLACE_PASSWORD => $_POST['password'],
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'registertemp.html', $replace_variables);
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('registration_success');
                    $redirect          = "manage/company";
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
                    Message::success(__('sucessfull_added_company'));
                    $this->request->redirect("manage/company");
                } else if ($signup_id == 2) {
                    Message::success(__('invalid_image_uploaded'));
                    $this->request->redirect("add/company");
                }
            } else {
                $errors = $validator->errors('errors');
                if ($check_paystatus == 0) {
                    $errors['paymodstatus'] = 'Please select any one of the gateway';
                } else if ($check_paystatus == 2) {
                    $errors['paymodstatus'] = 'Please select the default gateway';
                }
                //echo $errors['paymodstatus'];exit;
            }
        }
        //print_r($errors);exit;
        $view                       = View::factory('admin/add_company')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('payment_modules', $payment_modules)->bind('package_details', $package_details)->bind('postvalue', $post_values)->bind('currency_symbol', $currencysymbol)->bind('currency_code', $currencycode);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_company');
        $this->template->page_title = __('add_company');
        $this->template->content    = $view;
    }
    public function action_moderator()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addcompany');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmoderator(arr::extract($post, [
                'name',
                'email',
                'sales_person_email',
                'phone',
                'company_name',
                'domain_name',
                'message',
                'time_zone',
                'no_of_taxi'
            ]));
            if ($validator->check()) {
                $company = Model::factory('company');
                if ($post_values['time_zone']) {
                    //This will convert the time to requested TIMEZONE
                    $current_time = convert_timezone('now', $post_values['time_zone']);
                } else {
                    $current_time = date('Y-m-d H:i:s');
                }
                $post               = Arr::map('trim', $this->request->post());
                $post['createdate'] = $current_time;
                $companyemail       = $post['email'];
                // Check whether the company email exist or not. We need to pass email to this function
                $check_email_exist  = $company->checkemail($companyemail);
                if ($check_email_exist == 0) {
                    Message::error(__('email_exists'));
                    $this->request->redirect("add/moderator");
                }
                // Check whether the company domain exist or not. We need to pass domain name to this function. Domain name used as a Subdomain in the URL
                $check_domain_exist = $this->add_model->checkcompanydomain($post_values["domain_name"]);
                if ($check_domain_exist == 1) {
                    Message::error(__('company_domain_is_exist'));
                    $this->request->redirect("add/moderator");
                }
                /**********************************************/
                //exit;
                // Pass all values to model to save the free trial data. Once company created then all other information will be related to company will be created
                $budget          = isset($_POST['budget']) ? $_POST['budget'] : '-';
                //$message1=" FREE TRAIL REQUEST  ( Budget: ".$budget." ) " .ucfirst($_POST['message']);
                //$message1=" (FREE TRAIL REQUEST)  " .ucfirst($_POST['message']);
                $ip              = $_SERVER['REMOTE_ADDR'];
                // Get city and country details
                $url             = "http://api.ipinfodb.com/v3/ip-country/?key=" . IPINFOAPI_KEY . "&ip=$ip";
                $data            = @file_get_contents($url);
                $dat             = explode(";", $data);
                $city_name       = isset($dat[2]) ? $dat[2] : ""; //$company->get_city_name($post['city']);
                $country_name    = isset($dat[3]) ? $dat[3] : ""; //$company->get_country_name($post['country']);
                $post['city']    = isset($dat[2]) ? $dat[2] : "";
                $post['country'] = isset($dat[3]) ? $dat[3] : "";
                $message1        = " (FREE TRAIL REQUEST)  Company : " . $_POST['company_name'] . "  |  Message : " . $_POST['message'] . "   |   No. of Taxi : " . $_POST['no_of_taxi'] . "   |   Country : " . $country_name . "   |   IP Address : " . $ip;
                $save_free_trial = $company->save_moderator_trial($post);
                if (count($save_free_trial) > 0) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_EMAIL => $post['email'],
                        REPLACE_NAME => $post['name'],
                        REPLACE_PHONE => $post['phone'],
                        REPLACE_COMPANY => $post['company_name'],
                        REPLACE_NOOFTAXI => $post['no_of_taxi'],
                        REPLACE_COUNTRY => $country_name,
                        REPLACE_CITY => $city_name,
                        MESSAGE => $message1,
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_SALES_PERSON_EMAIL => $_POST['sales_person_email'],
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'get_free_quotes.html', $replace_variables);
                    $to                = 'mahes@taximobility.com,sales@taximobility.com';
                    //$to = 'pandiarajan.v@ndot.in';
                    $from              = CONTACT_EMAIL;
                    $subject           = __('get_free_quotes_details') . " - " . COMPANY_SITENAME;
                    $redirect          = 'users/index';
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
                    /* CURL FUNCTION FOR Place the data to NDOT CRM *
                    $_POST['name']=$_POST['name'];
                    $_POST['email']=$_POST['email'];
                    $_POST['telephone']=$_POST['phone'];
                    $_POST['category']="220";
                    $_POST['site']="ndot";
                    $_POST['success_url']="http://www.taximobility.com";
                    $_POST['country']=$country_name;
                    $_POST['source_type']="22";
                    $_POST['feedback']= $message1;
                    $data = $_POST;
                    //url-ify the data for the POST
                    $fields_string = '';
                    foreach($data as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
                    $fields_string = rtrim($fields_string,'&');			    
                    $url="http://ndot.engagedots.com/api/contactUs";
                    $ch = curl_init(); //open connection
                    curl_setopt($ch,CURLOPT_URL,$url); //set the url, number of POST vars, POST data
                    curl_setopt($ch,CURLOPT_POST,count($data));
                    curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
                    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
                    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
                    $result = curl_exec($ch); //execute post
                    curl_close($ch);  //close connection
                    
                    /* CURL FUNCTION FOR CONTACT CRM */
                    /********** Auto company creation ***************/
                    $signup_id = $company->addcompanydetails($post_values);
                    if ($signup_id != 0) {
                        $mail                    = "";
                        $domain                  = trim($post['domain_name']);
                        $mobile                  = $signup_id . date('ymd');
                        $passengerdriver_details = "";
                        $passengerdriver_details .= "<p style='color: #333'>Passenger Details</p>";
                        $passengerdriver_details .= '<table cellspacing="0" cellpadding="0" width="300" style="font-size: 14px; line-height: 20px; font-family: "Lucida Grande",Arial,sans-serif;font-color: #000; border="1" ">
					<tr>
						<td><b>#</b></td>
						<td><b>Username(Mobile Number)</b></td>
						<td><b>Password</b></td>
					</tr>';
                        // Dynmaic Passenger login details 
                        $length = ($_POST['no_of_taxi']) ? $_POST['no_of_taxi'] : 3;
                        for ($i = 1; $i <= $length; $i++) {
                            $passengerdriver_details .= '<tr>
						<td>' . $i . '</td>
						<td>' . $mobile . $i . '</td>
						<td>qwerty</td>
					</tr>';
                        }
                        $passengerdriver_details .= '</table>';
                        $passengerdriver_details .= '<img src="##SITEURL##public/images/email_temp_spacer-header.jpg" width="520px" height="20px" alt="##SITENAME##"/>';
                        $passengerdriver_details .= '<p style="color: #333;">Driver Details</p>';
                        $passengerdriver_details .= '<table  cellspacing="0" cellpadding="0" width="300" style="font-size: 14px; line-height: 20px; font-family: "Lucida Grande",Arial,sans-serif;font-color: #000; border="1" ">
					<tr>
						<td><b>#</b></td>
						<td><b>Username(Mobile Number)</b></td>
						<td><b>Password</b></td>
					</tr>';
                        // Dynmaic driver login details 
                        for ($i = 1; $i <= $length; $i++) {
                            $passengerdriver_details .= '<tr>
						<td>' . $i . '</td>
						<td>' . $mobile . $i . '</td>
						<td>qwerty</td>
					</tr>';
                        }
                        $passengerdriver_details .= '</table>';
                        $passengerdriver_details .= '<img src="##SITEURL##public/images/email_temp_spacer-header.jpg" width="520px" height="20px" alt="##SITENAME##"/>';
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => COMPANY_SITENAME,
                            REPLACE_USERNAME => $_POST['name'],
                            REPLACE_EMAIL => $_POST['email'],
                            REPLACE_PASSWORD => 'qwerty',
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => CONTACT_EMAIL,
                            MESSAGE => $passengerdriver_details,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COMPANYDOMAIN => $domain,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                        // Place the content to Email templete 
                        //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
						if ($this->lang != 'en') {
							if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/autotrail_company_registration-' . $this->lang . '.html')) {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/autotrail_company_registration-' . $this->lang . '.html', $replace_variables);
							} else {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
							}
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
						}
                        //$to = $_POST['email'];
                        $to                = $_POST['sales_person_email'];
                        $from              = CONTACT_EMAIL;
                        $subject           = __('registration_success'); //Language string for internationalization
                        $redirect          = 'no';
                        if (SMTP == 1) {
                            // send the mail to user from SMTP 
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
                        Message::success(__('sucessfull_added_company'));
                        $this->request->redirect('add/moderator');
                        //echo '1';exit;
                    }
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_moderator')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_company');
        $this->template->page_title = __('add_company');
        $this->template->content    = $view;
    }
    public function action_create_login()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $cid            = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        $usertype = $this->usertype;
        if ($cid == '') {
            $cid = $this->company_id;
        }
        if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("company/dashboard");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addcompany');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            //print_r($post);
            $validator   = $this->add_model->validate_createlogin(arr::extract($post, [
                'firstname',
                'lastname',
                'phone',
                'no_of_login',
                'company_id'
            ]));
            if ($validator->check()) {
                $signup_id         = $this->add_model->create_login($post);
                $driver_details    = $this->add_model->view_login($post);
                $passenger_details = $this->add_model->view_passengerlogin($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_login_created'));
                    $this->request->redirect("add/create_login");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/create_login')->bind('validator', $validator)->bind('errors', $errors)->bind('errors', $errors)->bind('driver_details', $driver_details)->bind('passenger_details', $passenger_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('create_login');
        $this->template->page_title = __('create_login');
        $this->template->content    = $view;
    }
    public function action_taxi()
    {
        $cid       = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        $taxi_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($cid == '') {
            $cid = $this->company_id;
        }
        $model_details_new   = $this->add_model->model_details_new();
        $country_details     = $this->add_model->country_details();
        $state_details       = $this->add_model->state_details();
        $city_details        = $this->add_model->city_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
       //echo '<pre>';print_r($model_details_new);exit;
		 /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_addtaxi');
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
			$post_values   = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addtaxi($post_values, $_FILES);
            if ($validator->check()) {
              $comny_id         = $_POST['company_name'];
               $modelid          = $_POST['taxi_model'];//exit;
                $check_fare_exist = $this->add_model->check_fare_exist($comny_id, $modelid);
              /*  if ($check_fare_exist == 0) {
                    Message::error(__('fare_not_avaliable'));
                    if ($usertype == 'C') {
                        $this->request->redirect("manage/fare");
                    } else {
                        $this->request->redirect("manage/model");
                    }
                } else {  */
					try {
						if (!empty($_FILES['taxi_image']['name'])) {
							/* image */
							$image_name = uniqid() . $_FILES['taxi_image']['name'];
							$image_type = explode('.', $image_name);
							$image_type = end($image_type);
							//$image_name=url::title($image_name).'.'.$image_type;
							$filename   = Upload::save($_FILES['taxi_image'], $image_name, DOCROOT . TAXI_IMG_IMGPATH);
							//chmod($filename,'0777');
							//Image resize and crop for thumb image
							$logo_image = Image::factory($filename);
							$path1      = DOCROOT . TAXI_IMG_IMGPATH;
							$path       = $image_name;
							Commonfunction::taxiimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
							/**** Taxi APP THU100 ***/
							$tmb100_image_name = 'tmb100_' . $image_name;
							Commonfunction::taxiimageresize($logo_image, TAXI_APP_THMB100_IMG_WIDTH, TAXI_APP_THMB100_IMG_HEIGHT, $path1, $tmb100_image_name, 90);
							/**** TAxi APP THUM50 ***/
							$tmb32_image_name = 'tmb32_' . $image_name;
							Commonfunction::taxiimageresize($logo_image, TAXI_APP_THMB32_IMG_WIDTH, TAXI_APP_THMB32_IMG_HEIGHT, $path1, $tmb32_image_name, 90);
							if ($image_type == 'jpeg' || $image_type == 'jpg') {
								$base_image   = imagecreatefromjpeg($path1 . $tmb32_image_name);
								$width        = 32;
								$height       = 12;
								$top_image    = imagecreatefrompng(URL_BASE . "public/images/view.png");
								$merged_image = $path1 . $tmb32_image_name;
								imagesavealpha($top_image, true);
								imagealphablending($top_image, true);
								imagecopy($base_image, $top_image, 0, 23, 0, 0, $width, $height);
								imagejpeg($base_image, $merged_image);
							}
							if ($image_type == 'png') {
								$base_image   = imagecreatefrompng($path1 . $tmb32_image_name);
								$width        = 32;
								$height       = 12;
								$top_image    = imagecreatefrompng(URL_BASE . "public/images/view.png");
								$merged_image = $path1 . $tmb32_image_name;
								imagesavealpha($top_image, true);
								imagealphablending($top_image, true);
								imagecopy($base_image, $top_image, 0, 23, 0, 0, $width, $height);
								imagepng($base_image, $merged_image);
							}
							/** QR CODE GENERATION **/
							$PNG_TEMP_DIR = DOCROOT . TAXI_IMG_IMGPATH.'/qrcode/';
							include($_SERVER['DOCUMENT_ROOT'] . "/modules/phpqrcode/qrlib.php");
							if (!file_exists($PNG_TEMP_DIR))
							mkdir($PNG_TEMP_DIR);
							$errorCorrectionLevel = 'L';
							if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], ['L','M','Q','H']))
								$errorCorrectionLevel = $_REQUEST['level'];    
								$matrixPointSize = 4;
							if (isset($_REQUEST['size']))
								$matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);
							$encodeString = md5($_POST['taxi_model'].'_'.$_POST['taxi_no']);	
							$filename = $PNG_TEMP_DIR.md5($encodeString.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
							QRcode::png($encodeString, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
							/** QR CODE GENERATION **/
							
							
							$signup_id = $this->add_model->addtaxi($post_values, $path, $_FILES,$encodeString,basename($filename));
							if ($signup_id == 1) {
								$mail = "";
								Message::success(__('sucessfull_added_taxi'));
								$this->request->redirect("manage/taxi");
							}
						}
					} catch(exception $e) {
						$errors['taxi_image'] = "Not an image or invalid image";
					}	
             //   }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_taxi')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('model_details_new', $model_details_new)->bind('taxicompany_details', $taxicompany_details)->bind('cid', $cid)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_taxi');
        $this->template->page_title = __('add_taxi');
        $this->template->content    = $view;
    }
    public function action_driver()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        
        $cid            = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        $usertype = $this->usertype;
        if ($cid == '') {
            $cid = $this->company_id;
        }
        if ($usertype == 'A') {
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("company/dashboard");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_driver');
        $country_details     = $this->add_model->country_details();
        $state_details       = $this->add_model->state_details();
        $city_details        = $this->add_model->city_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        $getuniqueId         = $this->add_model->getDriverUniqueId();
        $uniqueId            = str_pad($getuniqueId, 4, "0", STR_PAD_LEFT);
        $dcPrefix            = "GL";
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());            
            $form_values = Arr::extract($post, [
                'firstname',
                'lastname',
                'dob',
                'email',
                'password',
                'repassword',
                'driver_license_id',
                'driver_license_expire_date',
                'driver_pco_license_number',
                'driver_pco_license_expire_date',
                'driver_insurance_number',
                'driver_insurance_expire_date',
                'driver_national_insurance_number',
                'driver_national_insurance_expire_date',
                'phone',
                'address',
               // 'country',
               // 'state',
               // 'city',
                'company_name',
                'booking_limit',
                'driver_code_prefix',
                'driver_code_suffix',
                'twitter_account',
                'facebook_account',
                'instagram_account',
            ]);
            $file_values = Arr::extract($_FILES, [
                'photo','website_photo',
            ]);
            $values      = Arr::merge($form_values, $file_values);
            $validator   = $this->add_model->validate_adddriver($values);
            if ($validator->check()) {
				//print_r($_FILES);exit;
                /*$image_name       = uniqid() . $_FILES['photo']['name'];
                $thumb_image_name = 'thumb_' . $image_name;
                $image_type       = explode('.', $image_name);
                $image_type       = end($image_type);
                //$image_name=url::title($image_name).'.'.$image_type;
                $filename         = Upload::save($_FILES['photo'], $image_name, DOCROOT . SITE_DRIVER_IMGPATH);
                $logo_image       = Image::factory($filename);
                $path11           = DOCROOT . SITE_DRIVER_IMGPATH;
                $path1            = $image_name;
                Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
                $path12 = $thumb_image_name;
                Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                $signup_id = $this->add_model->add_driver($_POST, $path1);
                $status    = $this->driver->update_driverimage($path1, $signup_id);*/
                $driver_code = $post['driver_code_prefix'].$post['driver_code_suffix'];
                $image_name       = uniqid() . $_FILES['photo']['name'];
				$thumb_image_name = 'thumb_' . $image_name;
				$image_type       = explode('.', $image_name);
				$image_type       = end($image_type);
				//$image_name=url::title($image_name).'.'.$image_type;
				$filename         = Upload::save($_FILES['photo'], $image_name, DOCROOT . SITE_DRIVER_IMGPATH);
				//Image resize and crop for thumb image
				  $logo_image       = Image::factory($filename);
                    $path11           = DOCROOT . SITE_DRIVER_IMGPATH;
                    $path1            = $image_name;
                    Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
                    $path12 = $thumb_image_name;
                    Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);

                if(!empty($_FILES['website_photo']['name'])){

                    $web_image_name       = uniqid() . $_FILES['website_photo']['name'];
                    $web_filename         = Upload::save($_FILES['website_photo'], $web_image_name, DOCROOT.SITE_DRIVER_IMGPATH.'website/');
                    $web_image       = Image::factory($web_filename);
                    $web_path11           = DOCROOT . SITE_DRIVER_IMGPATH.'website/';                   
                    Commonfunction::imageresize($web_image,380,341, $web_path11, $web_image_name, 90);
                }else{
                    $web_image_name = '';
                }
                

				$signup_id = $this->add_model->add_driver($_POST, $path1,$web_image_name);
                //$status    = $this->driver->update_driverimage($path1, $signup_id);
                if ($signup_id != 0) {
                    $signup_id = 1;
                } else {
                    $signup_id = 0;
                }
                //$signup_id=$this->add_model->add_driver($_POST);
                if ($signup_id == 1) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_USERNAME => $post['firstname'],
                        REPLACE_MOBILE => $post['phone'],
                        REPLACE_PASSWORD => $post['password'],
                        REPLACE_DRIVER_CODE => $driver_code,
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
                        REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                        REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
					}
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('driver_registration_success');
                    $redirect          = "manage/driver";
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
						$to              = $_POST['phone'];
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
						$result = $this->api->sendSMS($to,$message);
						if($result['code'] == 1)  {
							Message::success($result['message']);
						} else {
							Message::error($result['message']);
						}
						//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                        //print_r($result);exit;					
                    }
                    Message::success(__('sucessfull_added_driver'));
                    $this->request->redirect("manage/driver");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_driver')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('cid', $cid)->bind('postvalue', $post_values)->bind('dcPrefix',$dcPrefix)->bind('uniqueId', $uniqueId);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_driver');
        $this->template->page_title = __('add_driver');
        $this->template->content    = $view;
    }
    public function action_field()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addfield');
        $field_type    = arr::get($_REQUEST, 'field_type');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $values      = Arr::extract($post, [
                'field_labelname',
                'field_name',
                'field_type'
            ]);
            if ($field_type != 'Textbox') {
                $field_values = Arr::extract($post, [
                    'field_value'
                ]);
                $values       = Arr::merge($values, $field_values);
            }
            $validator = $this->add_model->validate_addfield($values);
            if ($validator->check()) {
                $signup_id = $this->add_model->addfield($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_field'));
                    $this->request->redirect("manage/field");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_field')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_field');
        $this->template->page_title = __('add_field');
        $this->template->content    = $view;
    }
    public function action_package()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addpackage');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'package_name',
                'package_description',
                'no_of_taxi',
                'no_of_driver',
                'package_price',
                'days_expire'
            ]);
            $validator   = $this->add_model->validate_addpackage($form_values);
            if ($validator->check()) {
                $signup_id = $this->add_model->add_package($post);
                Message::success(__('sucessfull_added_package'));
                $this->request->redirect("manage/package");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $view                       = View::factory('admin/add_package')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_package');
        $this->template->page_title = __('add_package');
        $this->template->content    = $view;
    }
    public function action_country()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addcountry');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addcountry(arr::extract($post_values, [
                'country_name',
                'iso_country_code',
                'telephone_code',
                'currency_code',
                'currency_symbol'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addcountry($post_values);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_country'));
                    $this->request->redirect("manage/country");
                } else {
					Message::success(__('something_wrong'));
                    $this->request->redirect("add/country");
				}
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_country')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_country');
        $this->template->page_title = __('add_country');
        $this->template->content    = $view;
    }
    public function action_city()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addcity');
        $errors        = [];
        $post_values   = [];
        $country_details = $this->add_model->country_details_new();
        $state_details = $this->add_model->get_city_state_details($countryid = '');
        $def_country_name = isset($post_values['country_name'])?$post_values['country_name']:DEFAULT_COUNTRY;
		//echo "ssss". $post_values['country_name'] ;exit;
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values =Arr::map('trim', $this->request->post());
           // if isset($post_values['country_name']) {
                $state_details = $this->add_model->get_city_state_details($def_country_name);
          //  }
            $validator = $this->add_model->validate_addcity(arr::extract($post_values, [
                //'country_name',
                //'state_name',
                'city_name',
                'zipcode',
               // 'city_model_fare'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addcity($post_values);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_city'));
                    $this->request->redirect("manage/city");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_city')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('state_details', $state_details)->bind('country_details', $country_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_city');
        $this->template->page_title = __('add_city');
        $this->template->content    = $view;
    }
	public function action_getstatelist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $state_details = $this->add_model->getstate_details($country_id);
        if (isset($country_id)) {
            $count = count($state_details);
            if ($count > 0) {
                $output .= '<select name="state_name" id="state_name" >';
                foreach ($state_details as $key => $list) {
                    $output .= '<option value="' . $list["state_id"] . '"';
                    if ($state_id == $list["state_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $list["state_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="state_name" id="state_name"><option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_state()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addstate');
        $errors        = [];
        $post_values   = [];
        $country_details = $this->add_model->country_detail();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addstate(arr::extract($post_values, [
                'country_name',
                'state_name'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addstate($post_values);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_state'));
                    $this->request->redirect("manage/state");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_state')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_state');
        $this->template->page_title = __('add_state');
        $this->template->content    = $view;
    }
    public function action_getmodellist()
    {
        $output           = '';
        $motorid          = arr::get($_REQUEST, 'motor_id');
        $modelid          = arr::get($_REQUEST, 'model_id');
        $getmodel_details = $this->add_model->getmodel_details($motorid);
        if (isset($motorid)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="taxi_model" id="taxi_model" class="required" title="' . __('select_the_taximodel') . '" >
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["model_id"] . '"';
                    if ($modelid == $modellist["model_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["model_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="taxi_model" id="taxi_model" class="required" title="' . __('select_the_taximodel') . '">
				<option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_getcitylist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        $city_details = $this->add_model->getcity_details($country_id, $state_id);
		//echo '<pre>';print_r($city_details);exit;
        if (isset($country_id) && isset($state_id)) {
			$count = count($city_details);
            if ($count > 0) {
                $output .= '<select name="city" id="city" class="required" title="' . __('select_the_city') . '" >
					   <option value="">--Select--</option>';
                foreach ($city_details as $list) {
                    $output .= '<option value="' . $list["city_id"] . '"';
                    if ($city_id == $list["city_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $list["city_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="city" id="city" class="required" title="' . __('select_the_city') . '"><option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_getlist_state()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $state_details = $this->add_model->getstate_details($country_id);
		//echo '<pre>';print_r($state_details);exit;
        if (isset($country_id)) {
			$count = count($state_details);
            if ($count > 0) {
                $output .= '<select name="state" id="state" onchange="change_city();" class="required" title="' . __('select_the_state') . '">
					   <option value="">--Select--</option>';
                foreach ($state_details as $list) {
                    $output .= '<option value="' . $list["state_id"] . '"';
                    if ($state_id == $list["state_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $list["state_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="state" id="state" onchange="change_city();" class="required" title="' . __('select_the_state') . '" >
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    
    public function action_getassigntaxilist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        $city_details = $this->add_model->getcity_details($country_id, $state_id);
		//echo '<pre>';print_r($city_details);exit;
        if (isset($country_id) && isset($state_id)) {
            $count = count($city_details);
            if ($count > 0) {
                $output .= '<select name="city" id="city" class="required" title=" ' . __('select_the_city') . '" ><option value="">--Select--</option>';
                foreach ($city_details as $list) {
                    $output .= '<option value="' . $list["city_id"] . '"';
                    if ($city_id == $list["city_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $list["city_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="city" id="city" title=" ' . __('select_the_city') . '" class="required"><option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_getassignstatelist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $getmodel_details = $this->add_model->getstate_details($country_id);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="state" id="state" onchange="change_city_drop(\'\',\'\',\'\'); change_info(\'\',\'\',\'\',\'\');" class="required" title="' . __('select_the_state') . '">
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["state_id"] . '"';
                    if ($state_id == $modellist["state_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["state_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="state" id="state" onchange="change_city_drop(); change_info();" class="required" title="' . __('select_the_state') . '" >
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_manager()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        $company_model = Model::factory('company');
        $cid           = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_addmanager');
        $country_details     = $this->add_model->country_details();
        $city_details        = $this->add_model->city_details();
        $all_companies_list = $this->add_model->taxicompany_details();
        $state_details       = $this->add_model->state_details();
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmanager(arr::extract($post_values, [
                'firstname',
                'lastname',
                'email',
                'password',
                'repassword',
                'phone',
                'address',
                //'country',
                //'state',
                'city',
                'company_name'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addmanager($post_values);
                if ($signup_id == 1) {
                    $mail              = "";
                    //function to get company domain name			
                    $company_dets      = $company_model->get_company_info($post_values['company_name']);
					//print_r($company_dets);exit;
                    //if there is no domain name comes go to product url
                    $companyDomain     = (count($company_dets) > 0 && isset($company_dets[$post_values['company_name']]['companyinfo']['company_domain'])) ? $company_dets[$post_values['company_name']]['companyinfo']['company_domain'] : 'www';
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_DOMAINNAME => $companyDomain,
                        REPLACE_USERNAME => $_POST['firstname'],
                        REPLACE_EMAIL => $_POST['email'],
                        REPLACE_PASSWORD => $_POST['password'],
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'register_dispatcher.html', $replace_variables);
					if ($this->lang != 'en') {
                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/register_dispatcher-' . $this->lang . '.html')) {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/register_dispatcher-' . $this->lang . '.html', $replace_variables);
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'register_dispatcher.html', $replace_variables);
                        }
                    } else {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'register_dispatcher.html', $replace_variables);
                    }
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('registration_success');
                    $redirect          = "manage/manager";
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
                    Message::success(__('sucessfull_added_manager'));
                    $this->request->redirect("manage/manager");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_manager')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('all_companies_list', $all_companies_list)->bind('state_details', $state_details)->bind('cid', $cid)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_manager');
        $this->template->page_title = __('add_manager');
        $this->template->content    = $view;
    }
    public function action_getcompanylist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        $company_name     = arr::get($_REQUEST, 'company_name');
        $user_type        = $this->usertype;
        $company_id       = $this->company_id;
        $getmodel_details = $this->add_model->getcompany_details($country_id, $state_id, $city_id);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="company_name" id="company_name" class="required">
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["cid"] . '"';
                    if ($company_name == $modellist["cid"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["company_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="company_name" id="company_name">
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_assigntaxi()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $cid            = $this->company_id;
        if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagetaxi($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
            }
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    Message::success(__('limited_driver'));
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    Message::success(__('limited_driver'));
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($cid);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("company/dashboard");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_addassigntaxi');
        $country_details     = $this->add_model->country_details();
        $state_details       = $this->add_model->state_details();
        $city_details        = $this->add_model->city_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        $driver_details      = $this->add_model->driver_details();
        $taxi_details        = $this->add_model->taxi_details();
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addassigntaxi(arr::extract($post, [
                'company_name',
                'country',
                'state',
                'city',
                'driver',
                'taxi',
                'startdate',
                'enddate'
            ]));
            if ($validator->check()) {
                $update            = $this->add_model->addassigntaxi($post);
                $mail              = "";
                $replace_variables = [
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => COMPANY_SITENAME,
                    REPLACE_USERNAME => $update[0]['name'],
                    REPLACE_TAXINO => $update[0]['taxi_no'],
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => CONTACT_EMAIL,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                ];
                $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'assign_taxi.html', $replace_variables);
                $to                = 'suresh.g@ndot.in';//$update[0]['email'];
                $from              = CONTACT_EMAIL;
                $subject           = __('taxi_assigned_you');
                $redirect          = "manage/assigntaxi";
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
                //$mail=array("to" => $update[0]['email'],"from"=>CONTACT_EMAIL,"subject"=>"Taxi Assigned to you","message"=>$message);									
                //$emailstatus=$this->email_send($mail,'smtp');								
                Message::success(__('sucessfull_assign_taxi'));
                $this->request->redirect("manage/assigntaxi");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_assigntaxi')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('driver_details', $driver_details)->bind('taxi_details', $taxi_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('assign_taxi');
        $this->template->page_title = __('assign_taxi');
        $this->template->content    = $view;
    }
    public function action_getassignedlist()
    {
        
        $output        = '';
        $country_id    = arr::get($_REQUEST, 'country_id');
        $state_id      = arr::get($_REQUEST, 'state_id');
        $city_id       = arr::get($_REQUEST, 'city_id');
        $company_name  = arr::get($_REQUEST, 'company_name');
        $driver_id     = arr::get($_REQUEST, 'driver_id');
        $taxi_id       = arr::get($_REQUEST, 'taxi_no');
        $startdate     = arr::get($_REQUEST, 'startdate');
        $enddate       = arr::get($_REQUEST, 'enddate');
        $user_type     = $this->usertype;
        $company_id    = $this->company_id;
        $page_title    = __('assign_taxi');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->add_model->getassignedlist($country_id, $state_id, $city_id, $company_name, $driver_id, $taxi_id, $startdate, $enddate,NULL,NULL,TRUE);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punajax'
        ]);
        $getmodel_details = $this->add_model->getassignedlist($country_id, $state_id, $city_id, $company_name, $driver_id, $taxi_id, $startdate, $enddate, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">
				<div class="button greyishB"></div>                       
				</div>
				</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" style="text-align:left;" width="8%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" style="text-align:left;" width="10%">' . __('taxi_no') . '</td>
				<td align="left" style="text-align:left;" width="8%">' . __('companyname') . '</td>
				<td align="left" style="text-align:left;" width="10%">' . __('country_label') . '</td>
				<td align="left" style="text-align:left;" width="8%">' . __('city_label') . '</td>
				<td align="left" style="text-align:left;" width="10%">' . __('from_date') . '</td>
				<td align="left" style="text-align:left;" width="10%">' . __('end_date') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td align="center">';
                if ($listings['mapping_status'] == 'A') {
                    $txt   = "Active";
                    $class = "unsuspendicon";
                } elseif ($listings['mapping_status'] == 'T') {
                    $txt   = "Trash";
                    $class = "trashicon";
                } else {
                    $txt   = "Deactive";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td align="center">' . $sno . '</td>
				<td align="left">' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['taxi_no']), 30, '<br/>', 1) . '</td>
				<td align="left">' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td align="left">' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>
				<td>' . wordwrap($listings['mapping_startdate'], 25, '<br />', 1) . '</td>
				<td>' . wordwrap($listings['mapping_enddate'], 25, '<br />', 1) . '</td>
				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    public function action_getdriverlist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        $company_id       = arr::get($_REQUEST, 'company_name');
        $user_type        = $this->usertype;
        $driver_id        = arr::get($_REQUEST, 'driver_id');
        $getmodel_details = $this->add_model->getdriverdetails($company_id, $country_id, $state_id, $city_id, $user_type);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="driver" id="driver" onchange="change_info("","","");" size=5>
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["id"] . '"';
                    if ($driver_id == $modellist["id"]) {
                        $output .= 'selected=selected class="selected_active"';
                    }
                    $output .= '>' . $modellist["name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="driver" id="driver" onchange="change_info("","","");" size=5>
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_gettaxilist()
    {
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        $company_id       = arr::get($_REQUEST, 'company_name');
        $user_type        = $this->usertype;
        $taxi_id          = arr::get($_REQUEST, 'taxi_id');
        $getmodel_details = $this->add_model->gettaxidetails($company_id, $country_id, $state_id, $city_id, $user_type);
        //print_r($getmodel_details);exit;
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="taxi" id="taxi" onchange="change_info("","","");" size=5>
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["taxi_id"] . '"';
                    if ($taxi_id == $modellist["taxi_id"]) {
                        $output .= 'selected=selected class="selected_active"';
                    }
                    $output .= '>' . $modellist["taxi_no"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="taxi" id="taxi" onchange="change_info("","","");" size=5>
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_upgradepackage()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
        if ($usertype == 'A') {
            $this->request->redirect("admin/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_upgradepackage');
        $package_details = $this->add_model->package_details();
        $field_count     = count($package_details);
        if ($field_count == 0) {
            $this->request->redirect("admin/upgradereports");
        }
        $errors      = [];
        $post_values = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $signup_id   = $this->add_model->packageupgrade($_POST, $company_id);
            Message::success(__('sucessfull_upgrade_package'));
            $this->request->redirect("add/upgradepackage");
        }
        $package_count              = $this->add_model->packagecount($company_id);
        $view                       = View::factory('admin/upgrade_package')->bind('validator', $validator)->bind('errors', $errors)->bind('package_count', $package_count)->bind('package_details', $package_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('package_upgrade');
        $this->template->page_title = __('package_upgrade');
        $this->template->content    = $view;
    }
    public function action_packageupgrade()
    {
        $user_createdby    = $this->user_createdby;
        $usertype          = $this->usertype;
        $company_id        = $this->request->param('id');
        $current_packageid = $this->add_model->current_package($company_id);
        /**To get the form submit button name**/
        $signup_submit     = arr::get($_REQUEST, 'submit_upgradepackage');
        $package_details   = $this->add_model->package_details();
        $field_count       = count($package_details);
        if ($field_count == 0) {
            $this->request->redirect("admin/upgradereports");
        }
        $errors      = [];
        $post_values = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $signup_id   = $this->add_model->packageupgrade($_POST, $company_id);
            if ($signup_id == 1) {
                $mail = "";
                /*$signup_cont=$this->emailtemplate->get_template_content(USER_CHANGE_PASSWORD);
                $subject=$signup_cont[0]['email_subject'];
                $content=$signup_cont[0]['email_content'];
                $replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>COMPANY_SITENAME,REPLACE_USERNAME=>$_POST['name'],REPLACE_EMAIL=>$_POST['email'],REPLACE_PASSWORD=>$_POST['password'],REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>CONTACT_EMAIL,REPLACE_SITEURL=>URL_BASE);
                $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'registertemp.html',$replace_variables);
                $mail=array("to" => $_POST['email'],"from"=>CONTACT_EMAIL,"subject"=>"Registration success","message"=>$message);									
                $emailstatus=$this->email_send($mail,'smtp');								
                */
                Message::success(__('sucessfull_upgrade_package'));
                $this->request->redirect("manage/company");
            }
        }
        $package_count              = $this->add_model->packagecount($company_id);
        $view                       = View::factory('admin/upgradepackage')->bind('validator', $validator)->bind('errors', $errors)->bind('current_packageid', $current_packageid)->bind('package_details', $package_details)->bind('package_count', $package_count)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('package_upgrade');
        $this->template->page_title = __('package_upgrade');
        $this->template->content    = $view;
    }
    /** for adding contents **/
    public function action_contents()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        
        /** Select menus **/
        $menu_details  = $this->add_model->get_menus();
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addmanager');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addcontents(arr::extract($post, [
                'menu_name',
                'meta_title',
                'meta_keyword',
                'meta_description'
            ]));
            
            if ($validator->check()) {
                /*$menu_name_exits = $this->add_model->menu_content_exits($post);
                if(isset($menu_name_exits[$post['menu_name']]['menu'])){
                    Message::error(__('content_already_exits'));
                    $this->request->redirect("manage/contents");
                }*/
                $signup_id = $this->add_model->addcontents($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_contents'));
                    $this->request->redirect("manage/contents");
                }
            } else {
                $errors = $validator->errors('errors');
                print_r($errors);
            }
        }
        $view                       = View::factory('admin/add_contents')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('menu_details', $menu_details);
        $this->template->title      = SITENAME . " | " . __('add_content');
        $this->template->page_title = __('add_content');
        $this->template->content    = $view;
    }
    public function action_getdriverassignedlist()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $output         = '';
        $driver_id      = arr::get($_REQUEST, 'driver_id');
        $startdate      = arr::get($_REQUEST, 'startdate');
        $enddate        = arr::get($_REQUEST, 'enddate');
        $page_title     = __('assign_taxi');
        $page_no        = arr::get($_REQUEST, 'page');
        $count_details  = $this->add_model->countdriverassignedlist($driver_id, $startdate, $enddate);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punmad'
        ]);
        $getmodel_details = $this->add_model->getdriverassignedlist($driver_id, $startdate, $enddate, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">
				<div class="button greyishB"></div>                       
				</div>
				</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('taxi_no') . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				<td align="left" width="10%">' . __('from_date') . '</td>
				<td align="left" width="10%">' . __('end_date') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['mapping_status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '<a href="javascript:;" id="change_driver"> Change </a></td>
				<td>' . wordwrap(ucfirst($listings['taxi_no']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>
				<td>' . wordwrap($listings['mapping_startdate'], 25, '<br />', 1) . '</td>
				<td>' . wordwrap($listings['mapping_enddate'], 25, '<br />', 1) . '</td>
				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    public function action_delete_image()
    {
        $file_path = $_REQUEST['sPath'];
        $filepath  = $_SERVER["DOCUMENT_ROOT"] . 'public/uploads/taxi_image/';
        $taxi_id   = $_REQUEST['taxi_id'];
        $imageid   = $_REQUEST['image_id'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $count     = $this->add_model->change_imagecount($taxi_id, $imageid);
        $output    = '';
        $j         = 0;
        if (is_array($count)) {
            foreach ($count as $value) {
                if (file_exists($_SERVER["DOCUMENT_ROOT"] . 'public/uploads/taxi_image/' . $taxi_id . '_' . $value . '.png')) {
            $output .= '<tr>
			<td width="20%"></td>
			<td valign="top" width="20%">
				<input type="file" class="text" name="updateimage[' . $value . ']" id="cpicture' . $value . '" value="" ><br>
				<span id="error' . $value . '" class="err_count" style="display:none;color:red;font-size:11px;">*Only jpeg, jpg or png images</span>
			</td>
			<td valign="top">
				<img style="margin-left:10px;" width="75" height="75" src="' . URL_BASE . 'public/uploads/taxi_image/' . $taxi_id . '_' . $value . '.png"  width="300" alt="Slider Image"/><a href="javascript:;" onclick="remove_image(\'' . $filepath . $taxi_id . '_' . $value . '.png\',\'' . $value . '\')" class="ml10" title="Delete">Delete</a>
			</td>
			</tr>';
                } else {
                    $output .= '<tr style="display:none;">
			<td width="20%"></td>
			<td valign="top" width="20%"><br>
			<span id="error<?php echo $value; ?>" class="err_count" style="display:none;color:red;font-size:11px;">*Only jpeg, jpg or png images</span>
			</td>
			</tr>';
                }
            }
        }
        echo $output;
        exit;
    }
    // Add menu function
    public function action_menu()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_menu');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmenu(arr::extract($post, [
                'menu_name',
                'slug'
            ]));
            if ($validator->check()) {
                /*$menu_name_exits = $this->add_model->menu_name_exits($_POST);
                if ($menu_name_exits == 1) {
                    Message::error(__('menu_name_exits'));
                    $this->request->redirect("manage/menu");
                }*/
                //$status =$this->add_model->addmenu($post,$str_convertoUrl_val);
                $status = $this->add_model->addmenu($post);
                if ($status == 1) {
                    Message::success(__('sucessfull_added_menu'));
                    $this->request->redirect("manage/menu");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_menu')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_menu');
        $this->template->page_title = __('add_menu');
        $this->template->content    = $view;
    }
    // Add mile function
    public function action_mile()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        //echo $usertype;exit;
        if (($usertype != 'A') && ($usertype != 'S')) {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_mile');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addmile(arr::extract($post, [
                'mile'
            ]));
            if ($validator->check()) {
                $mile_name_exits = $this->add_model->mile_name_exits($_POST);
                if ($mile_name_exits == 1) {
                    Message::error(__('mile_name_exits'));
                    $this->request->redirect("manage/mile");
                }
                $status = $this->add_model->addmile($post);
                if ($status == 1) {
                    Message::success(__('sucessfull_added_mile'));
                    $this->request->redirect("manage/mile");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_mile')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_mile');
        $this->template->page_title = __('add_mile');
        $this->template->content    = $view;
    }
    public function action_admin()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/login");
        }
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_addadmin');
        $country_details = $this->add_model->country_details();
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addadmin(arr::extract($post_values, [
                'firstname',
                'lastname',
                'email',
                'password',
                'repassword',
                'phone',
                'address',
                'country',
                'company_name'
            ]));
            if ($validator->check()) {
                $signup_id = $this->add_model->addadmin($post_values);
                if ($signup_id == 1) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_USERNAME => $_POST['firstname'],
                        REPLACE_EMAIL => $_POST['email'],
                        REPLACE_PASSWORD => $_POST['password'],
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'moderator_registertemp.html', $replace_variables);
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/moderator_registertemp-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/moderator_registertemp-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'moderator_registertemp.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'moderator_registertemp.html', $replace_variables);
					}
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = COMPANY_SITENAME . '-' . __('MODERATOR_CREATION_NOTIFICATION');
                    $redirect          = "manage/admin";
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
                    Message::success(__('sucessfull_added_superadmin'));
                    $this->request->redirect("manage/admin");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_admin')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_superadmin');
        $this->template->page_title = __('add_superadmin');
        $this->template->content    = $view;
    }
    /** Add Banner **/
    public function action_banner()
    {
        $this->is_login();
        $usertype = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        $cid           = $this->company_id;
        $add           = Model::factory('add');
        $errors        = [];
        $banner_submit = arr::get($_REQUEST, 'submit_banner');
        $errors        = [];
        $post_values   = [];
        if ($banner_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $add->validate_addbanner(arr::extract($post, [
                'banner_image',
                'tags',
                'image_tag'
            ]), $_FILES);
            if ($validator->check()) {
                $image_updated_status = '';
                $image_id             = $cid;
                if (!empty($_FILES['banner_image']['name'])) {
                    /* image1 */
                    $image_name1 = uniqid() . $_FILES['banner_image']['name'];
                    $image_type  = explode('.', $image_name1);
                    $image_type  = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename    = Upload::save($_FILES['banner_image'], $image_name1, DOCROOT . BANNER_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image1 = Image::factory($filename);
                    $path11      = DOCROOT . BANNER_IMGPATH;
                    $path1       = $image_name1;
                    Commonfunction::imageresize($logo_image1, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path11, $image_name1, 90);
                }
                $tags                 = $_POST['tags'];
                $image_tag            = $_POST['image_tag'];
                $image_updated_status = $add->update_banner($tags, $image_tag, $path1, $image_id);
                Message::success(__('banner_added_successfully'));
                $this->request->redirect("manage/banner");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $this->selected_page_title  = __("add_banner");
        $view                       = View::factory('admin/add_banner')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('site_settings', $site_settings);
        $this->template->title      = SITENAME . " | " . __('add_banner');
        $this->template->page_title = __('add_banner');
        $this->template->content    = $view;
    }
	/* Removed On March-05-2016
    public function action_faq()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name/
        $signup_submit = arr::get($_REQUEST, 'submit_addmodel');
        $errors        = array();
        $post_values   = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addfaq(arr::extract($post, array(
                'faq_title',
                'faq_details'
            )));
            if ($validator->check()) {
                $signup_id = $this->add_model->addfaq($post);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_faq'));
                    $this->request->redirect("manage/faq");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_faq')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_faq');
        $this->template->page_title = __('add_faq');
        $this->template->content    = $view;
    }*/
    public function action_getcountry()
    {
        $output     = '';
        $company_id = arr::get($_REQUEST, 'company_id');
        $state_id   = '';
        $city_id    = '';
        if (isset($company_id)) {
            $location = $this->commonmodel->get_country_details($company_id);
            if (count($location) > 0) {
                $output .= '<option value="' . $location[0]["login_country"] . '">' . $location[0]["country_name"] . '</option>';
                $state_id = $location[0]["login_state"];
                $city_id  = $location[0]["login_city"];
            } else {
                $output .= '<option value="">--Select--</option>';
            }
        }
        echo $output . "~" . $state_id . "~" . $city_id;
        exit;
    }
	
	// Accounts Type Module
	// Add accounts type function
    public function action_account_type()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_menu');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->add_model->validate_addaccounttype(arr::extract($post, [
                'account_type',
				'account_type_arabic'
            ]));
            if ($validator->check()) {
                $status = $this->add_model->addaccounttype($post);
                if ($status == 1) {
                    Message::success(__('sucessfull_added_account_type'));
                    $this->request->redirect("manage/account_type");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_account')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_account_type');
        $this->template->page_title = __('add_account_type');
        $this->template->content    = $view;
    }
    
    /** ADD COUPON PACKAGE **/
    public function action_coupon_package()
    {
		// echo '<pre>';  echo "ssss";exit;//print_r($_POST);exit;
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addcoupon_package');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'coupon_package_name',
                'coupon_package_description',
                'corporate_commission',
                'passenger_commission'
             
            ]);
            $validator   = $this->add_model->validate_addcoupon_package($form_values);
            if ($validator->check()) {
                $signup_id = $this->add_model->add_coupon_package($post);
                Message::success(__('sucessfull_added_coupon_package'));
                $this->request->redirect("manage/coupon_package");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_coupon_package')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_coupon_package');
        $this->template->page_title = __('add_coupon_package');
        $this->template->content    = $view;
    }
    
    public function action_corporate()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        
        $cid            = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        $usertype = $this->usertype;
        if ($cid == '') {
            $cid = $this->company_id;
        }
       
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_corporate');
        
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());            
            $form_values = Arr::extract($post, [
                'firstname',
                'lastname',
                'email',
                'password',
                'repassword',
				'phone',
                'address'
            
            ]);
            $file_values = Arr::extract($_FILES, [
                'photo'
            ]);
            $values      = Arr::merge($form_values, $file_values);
            $validator   = $this->add_model->validate_addcorporate($values);
            if ($validator->check()) {
				
                $image_name       = uniqid() . $_FILES['photo']['name'];
				$thumb_image_name = 'thumb_' . $image_name;
				$image_type       = explode('.', $image_name);
				$image_type       = end($image_type);
				//$image_name=url::title($image_name).'.'.$image_type;
				$filename         = Upload::save($_FILES['photo'], $image_name, DOCROOT . SITE_CORPORATE_IMGPATH);
				//Image resize and crop for thumb image
				$logo_image       = Image::factory($filename);
				$path11           = DOCROOT . SITE_CORPORATE_IMGPATH;
				$path1            = $image_name;
				Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
				$path12 = $thumb_image_name;
				Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
				$signup_id = $this->add_model->add_corporate($_POST, $path1);
                if ($signup_id != 0) {
                    $signup_id = 1;
                } else {
                    $signup_id = 0;
                }
                //$signup_id=$this->add_model->add_corporate($_POST);
                if ($signup_id == 1) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_USERNAME => $post['firstname'],
                        REPLACE_MOBILE => $post['phone'].' , '.$post['email'],
                        REPLACE_PASSWORD => $post['password'],
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE."corporate/login",
                        REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                        REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'corporate-register.html', $replace_variables);
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/corporate-register-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
					}
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('corporate_registration_success');
                    $redirect          = "manage/corporate";
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
						$to              = $_POST['phone'];
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
						$result = $this->api->sendSMS($to,$message);
						if($result['code'] == 1)  {
							Message::success($result['message']);
						} else {
							Message::error($result['message']);
						}
						//$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                        //print_r($result);exit;					
                    }
                    Message::success(__('sucessfull_added_corporate'));
                    $this->request->redirect("manage/corporate");
                }
            } else {
                $errors = $validator->errors('errors');
               // print_r($errors);exit;
            }
        }
        $view                       = View::factory('admin/add_corporate')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('cid', $cid)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_corporate');
        $this->template->page_title = __('add_corporate');
        $this->template->content    = $view;
    }
    
    /** ADD COUPON PACKAGE **/
    // Accounts Type Module

    public function action_ratings()
    {
        $cid       = $this->request->param('id');
        if ($cid != '') {
            $check_cid = $this->add_model->check_companyid($cid);
            if ($check_cid == 0) {
                Message::success(__('invalid_companyid'));
                $this->request->redirect("manage/company");
            }
        }
        $usertype       = $this->usertype;

        $signup_submit       = arr::get($_REQUEST, 'submit_addratings');
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post  = Arr::map('trim', $this->request->post());
             $post_values = Arr::extract($post, [
                'ratings_title',
                'ratings_tags',
                
            ]);
            $post_values['ratings_no'] = (int)$post['ratings_no'];
            
            $validator   = $this->add_model->validate_addratings($post_values);
            //echo "<pre>";print_r($validator);exit();
            if ($validator->check()) {
             
               $signup_id = $this->add_model->add_ratings($post_values);
                if ($signup_id == 1) {
                    
                    Message::success(__('sucessfull_added_ratings_information'));
                    $this->request->redirect("manage/ratings");
                }
            } else {
                $errors = $validator->errors('errors');
            //    echo "<pre>";print_r($errors);exit();
            }
        }
        $view = View::factory('admin/add_ratings')
                ->bind('validator', $validator)
                ->bind('errors', $errors)
                ->bind('postvalue', $post_values);
        
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_ratings');
        $this->template->page_title = __('add_ratings');
        $this->template->content    = $view;
    }

    public function action_testimonial(){

        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addmotor');
        $errors        = [];
        $post_values   = [];
        if ($_POST) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());

            $form_values = arr::extract($post, ['name','skype','description','description_arabic']);

            $file_values = Arr::extract($_FILES, ['image']);
            $values      = Arr::merge($form_values, $file_values);

            $validator   = $this->add_model->validate_testimonial($values);
            if ($validator->check()) {
                if(!empty($_FILES['image']['name'])){

                    $web_image_name       = uniqid() . $_FILES['image']['name'];
                    $web_filename         = Upload::save($_FILES['image'], $web_image_name, DOCROOT.'public/uploads/testimonial/');
                    $web_image       = Image::factory($web_filename);
                    $web_path11           = DOCROOT .'public/uploads/testimonial/';                   
                    Commonfunction::imageresize($web_image,89,89, $web_path11, $web_image_name, 90);
                }else{
                    $web_image_name = '';
                }

                $signup_id = $this->add_model->add_testimonial($post,$web_image_name);
                if ($signup_id == 1) {
                    Message::success('Successfully added testimonial');
                    $this->request->redirect("manage/testimonial");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/add_testimonial')->bind('validator', $validator)->bind('errors', $errors)->bind('post_values', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('add_testimonial');
        $this->template->page_title = __('add_testimonial');
        $this->template->content    = $view;

    }
    
    // Customization
    public function action_zone()
    {
		$this->page_title = __('add_zone');
        $user_createdby = $_SESSION['userid'];
        $add_model      = Model::factory('add');

        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_zone');
        $errors              = [];
        $post_values         = [];

        if ($signup_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());
            $file_values = Arr::extract($_FILES, ['zone_icon']);
            $values      = Arr::merge($post_values, $file_values);
            $source_coordinates = [];
           //echo '<pre>'; print_r($values); exit();

            $form_values = Arr::extract($values, [
                'zone_name',
                'source_location',
                'source_lat',
                'source_lng',
                'source_polygon',
                'source_polygon_drawn'
            ]);
            $validator   = $add_model->validate_add_zone($form_values);

            if ($validator->check()) {

                if(!empty($values['source_polygon_drawn']))
                {
					$polygon_index = [];
                    $source_polygon = explode(',',$values['source_polygon_drawn']);
                    $j = $k =0;
                    for ($i=0; $i <= count($source_polygon)-1 && $k <= count($source_polygon)-1; $i++) {
						   $source_coordinates[$j][0] = $source_polygon[$k++];
                           $source_coordinates[$j][0] = (double)trim($source_coordinates[$j][0],'( ');
                           $source_coordinates[$j][1] = $source_polygon[$k];
                           $source_coordinates[$j][1] = (double)trim($source_coordinates[$j][1],' )');

                           $temp = $source_coordinates[$j][0];
                           $source_coordinates[$j][0] = $source_coordinates[$j][1];
                           $source_coordinates[$j][1] = $temp;
                           if($i == 0) {							   
							   $polygon_index[$j][0] = $source_coordinates[$j][0];
							   $polygon_index[$j][1] = $source_coordinates[$j][1];                           							   
						   }
                           $k++;$j++;
                    }
                }
                else
                {
                    $source_polygon = explode(',',$values['source_polygon']);
                    $j = $k =0;
                    for ($i=0; $i <= count($source_polygon)-1 && $k <= count($source_polygon)-1; $i++) {
                           $source_coordinates[$j][0] = $source_polygon[$k++];
                           $source_coordinates[$j][0] = (double)trim($source_coordinates[$j][0],'(');
                           $source_coordinates[$j][1] = $source_polygon[$k];
                           $source_coordinates[$j][1] = (double)trim($source_coordinates[$j][1],')');
                           $k++;$j++;

                    }
                }
                
                $source_coordinates = array_merge($source_coordinates, $polygon_index);
                
				//echo '<pre>'; print_r($source_coordinates); print_r($polygon_index); exit();
            
                $result = $add_model->add_zone($values,$source_coordinates);

                Message::success(__('successfull_added_zone'));
                $this->request->redirect("manage/zone");

            } else {
                $errors = $validator->errors('errors');
				//echo "<pre>";print_r($errors);exit;
            }
        }

        $view = View::factory('admin/add_zone')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->page_title = __('add_zone');
        $this->template->title      = SITENAME . " | " . __('add_zone');
        $this->template->page_title = __('add_zone');
        $this->template->content    = $view;
    }
    // Customization


} // End Add
