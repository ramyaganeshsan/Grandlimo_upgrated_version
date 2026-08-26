<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains SITE USERS details

* @Package: taximobility

* @Author:  Team

* @URL : http://www.ndot.in

********************************************************************/
Class Controller_Users extends Controller_Website
{
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        /**To Set Errors Null to avoid error if not set in view**/
        $this->session   = Session::instance();
        $user_error      = 0;
        $managemodel     = Model::factory('managemodel');
        $this->cms = Model::factory('cms');
        //Currency Settings from admin End
        $siteinfo        = $managemodel->select_site_settings();
        //print_r($siteinfo);
        $this->fb_key    = $siteinfo['facebook_key'];
        $this->fb_secret = $siteinfo['facebook_secretkey'];
        View::bind_global('siteinfo', $siteinfo);
        $this->session->set('siteinfo', $siteinfo);
        //$this->session->set('lang', 'en');
        $this->countryArr = [
            "AM" => "Armenia",
            "AR" => "Argentina",
            "AG" => "Antigua And Barbuda",
            "AQ" => "Antarctica",
            "AI" => "Anguilla",
            "AO" => "Angola",
            "AD" => "Andorra",
            "AS" => "American Samoa",
            "DZ" => "Algeria",
            "AX" => "Aland Islands",
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BS" => "Bahamas",
            "BH" => "Bahrain",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BZ" => "Belize",
            "BJ" => "Benin",
            "BM" => "Bermuda",
            "BT" => "Bhutan",
            "BO" => "Bolivia",
            "BA" => "Bosnia And Herzegovina",
            "BW" => "Botswana",
            "BV" => "Bouvet Island",
            "BR" => "Brazil",
            "IO" => "British Indian Ocean Territory",
            "BN" => "Brunei Darussalam",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "CI" => "Ivoire",
            "KH" => "Cambodia",
            "CM" => "Cameroon",
            "CA" => "Canada",
            "CV" => "Cape Verde",
            "KY" => "Cayman Islands",
            "CF" => "Central African Republic",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CX" => "Christmas Island",
            "CC" => "Cocos (Keeling) Islands",
            "CO" => "Colombia",
            "KM" => "Comoros",
            "CG" => "Congo",
            "CK" => "Cook Islands",
            "CR" => "Costa Rica",
            "HR" => "Croatia",
            "CU" => "Cuba",
            "CY" => "Cyprus",
            "CZ" => "Czech Republic",
            "DK" => "Denmark",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "DO" => "Dominican Republic",
            "EC" => "Ecuador",
            "EG" => "Egypt",
            "SV" => "El Salvador",
            "GQ" => "Equatorial Guinea",
            "ER" => "Eritrea",
            "EE" => "Estonia",
            "ET" => "Ethiopia",
            "FK" => "Falkland Islands (Malvinas)",
            "FO" => "Faroe Islands",
            "FJ" => "Fiji",
            "FI" => "Finland",
            "FR" => "France",
            "GF" => "French Guiana",
            "PF" => "French Polynesia",
            "TF" => "French Southern Territories",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "DE" => "Germany",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GR" => "Greece",
            "GL" => "Greenland",
            "GD" => "Grenada",
            "GP" => "Guadeloupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GN" => "Guinea",
            "GW" => "Guinea-Bissau",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HM" => "Heard Island And Mcdonald Islands",
            "VA" => "Holy See (Vatican City State)",
            "HN" => "Honduras",
            "HK" => "Hong Kong",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran",
            "IQ" => "Iraq",
            "IE" => "Ireland",
            "IM" => "Isle Of Man",
            "IL" => "Israel",
            "IT" => "Italy",
            "JM" => "Jamaica",
            "JP" => "Japan",
            "JE" => "Jersey",
            "JO" => "Jordan",
            "KZ" => "Kazakhstan",
            "KE" => "Kenya",
            "KI" => "Kiribati",
            "KR" => "Korea",
            "KW" => "Kuwait",
            "KG" => "Kyrgyzstan",
            "LA" => "Lao",
            "LV" => "Latvia",
            "LB" => "Lebanon",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libyan Arab Jamahiriya",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MO" => "Macao",
            "MK" => "Macedonia",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "MY" => "Malaysia",
            "MV" => "Maldives",
            "ML" => "Mali",
            "MT" => "Malta",
            "MH" => "Marshall Islands",
            "MQ" => "Martinique",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "MX" => "Mexico",
            "FM" => "Micronesia",
            "MD" => "Moldova",
            "MC" => "Monaco",
            "MN" => "Mongolia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "MA" => "Morocco",
            "MZ" => "Mozambique",
            "MM" => "Myanmar",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NL" => "Netherlands",
            "AN" => "Netherlands Antilles",
            "NC" => "New Caledonia",
            "NZ" => "New Zealand",
            "NI" => "Nicaragua",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk Island",
            "MP" => "Northern Mariana Islands",
            "NO" => "Norway",
            "OM" => "Oman",
            "PK" => "Pakistan",
            "PW" => "Palau",
            "PS" => "Palestinian Territory",
            "PA" => "Panama",
            "PG" => "Papua New Guinea",
            "PY" => "Paraguay",
            "PE" => "Peru",
            "PH" => "Philippines",
            "PN" => "Pitcairn",
            "PL" => "Poland",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "RE" => "R?union",
            "RO" => "Romania",
            "RU" => "Russian Federation",
            "RW" => "Rwanda",
            "BL" => "Saint Barth?lemy",
            "SH" => "Saint Helena",
            "KN" => "Saint Kitts And Nevis",
            "LC" => "Saint Lucia",
            "MF" => "Saint Martin",
            "PM" => "Saint Pierre And Miquelon",
            "VC" => "Saint Vincent And The Grenadines",
            "WS" => "Samoa",
            "SM" => "San Marino",
            "ST" => "Sao Tome And Principe",
            "SA" => "Saudi Arabia",
            "SN" => "Senegal",
            "RS" => "Serbia",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SG" => "Singapore",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "SB" => "Solomon Islands",
            "SO" => "Somalia",
            "ZA" => "South Africa",
            "GS" => "South Georgia And The South Sandwich Islands",
            "ES" => "Spain",
            "LK" => "Sri Lanka",
            "SD" => "Sudan",
            "SR" => "Suriname",
            "SJ" => "Svalbard And Jan Mayen",
            "SZ" => "Swaziland",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "SY" => "Syrian Arab Republic",
            "TW" => "Taiwan",
            "TJ" => "Tajikistan",
            "TZ" => "Tanzania",
            "TH" => "Thailand",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trinidad And Tobago",
            "TN" => "Tunisia",
            "TR" => "Turkey",
            "TM" => "Turkmenistan",
            "TC" => "Turks And Caicos Islands",
            "TV" => "Tuvalu",
            "UG" => "Uganda",
            "UA" => "Ukraine",
            "AE" => "United Arab Emirates",
            "GB" => "United Kingdom",
            "US" => "United States",
            "UM" => "United States Minor Outlying Islands",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistan",
            "VU" => "Vanuatu",
            "VE" => "Venezuela",
            "VN" => "Viet Nam",
            "VG" => "Virgin Islands UK",
            "VI" => "Virgin Islands US",
            "WF" => "Wallis And Futuna",
            "EH" => "Western Sahara",
            "YE" => "Yemen",
            "ZM" => "Zambia",
            "USA" => "US",
            "GBR" => "UK",
            "UAE" => "UAE"
        ];
        /*
        $this->paypal_db = Model::factory('paypal');	
        $this->paypalconfig = $this->paypal_db->getpaypalconfig(); 
        $this->paypal_currencysymbol = count($this->paypalconfig) > 0?$this->paypalconfig[0]['currency_symbol']:'';
        $this->paypal_currencycode = count($this->paypalconfig) > 0?$this->paypalconfig[0]['currency_code']:'';
        */
        View::bind_global('balance', $bal);
        $siteusers      = Model::factory('siteusers');
        $this->template = USERVIEW . "template";
    }
    public function action_index()
    {
		$id              = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid           = $id; //isset($userid)?$userid:$id;
        $radius          = Arr::get($_REQUEST, "rad");
        $siteusers       = Model::factory('siteusers');
        /**To get the form submit button name**/
        $country_details = $siteusers->country_details();
        $city_details    = $siteusers->city_details();
        $state_details   = $siteusers->state_details();
        /////// Slider Settings ///////
        $slider_settings = $siteusers->slider_settings();//echo "<pre>"; print_r($slider_settings);exit;
        /////// Slider Settings ///////
        $signup_submit   = arr::get($_REQUEST, 'submit_company');
        $postvalues      = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalues = $_POST;
            /**Send entered values to model for validation**/
            $validator  = $siteusers->validate_contactus(arr::extract($_POST, [
                'name',
                'email',
                'phone',
                'subject',
                'message',
                'security_code'
            ]));
            /**If validation success without error **/
            if ($validator->check()) {
                $signup_id = $siteusers->contactus_add($_POST, COMPANY_CID);
                if (COMPANY_CID == 0) {
                    $message = $_POST['message'];
                } else {
                    $message = $_POST['message'] . " <br><br><b>" . __('Current_Location') . "</b> : " . $_POST['clocation'] . "<br><br><b>" . __('Drop_Location') . "</b> : " . $_POST['droplocation'];
                }
                if ($signup_id) {
                    $mail = "";
                    if (COMPANY_CID == 0) {
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => SUBDOMAIN,
                            REPLACE_NAME => $_POST['name'],
                            //REPLACE_EMAIL=>$_POST['email'],
                            //REPLACE_SUBJECT=>$_POST['subject'],
                            REPLACE_PHONE => $_POST['phone'],
                            REPLACE_MESSAGE => $message,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE
                        ];
                    } else {
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => SUBDOMAIN,
                            REPLACE_NAME => $_POST['name'],
                            REPLACE_PHONE => $_POST['phone'],
                            REPLACE_MESSAGE => $message,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                    }
                    //$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'booknow_company.html', $replace_variables);
                    if ($this->lang != 'en') {
                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/booknow_company-' . $this->lang . '.html')) {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/booknow_company-' . $this->lang . '.html', $replace_variables);
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'booknow_company.html', $replace_variables);
                        }
                    } else {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'booknow_company.html', $replace_variables);
                    }
                    if (COMPANY_CID == 0) {
                        //$to = 'maheswaran.r@ndot.in,venkatesan@ndot.in';
                        $to = 'sales@taximobility.com,mahes@taximobility.com';
                    } else {
                        $to = COMPANY_CONTACT_EMAIL;
                    }
                    //echo COMPANY_CONTACT_EMAIL;
                    //exit;
                    $from     = $this->siteemail;
                    $subject  = __('you_have_booking_enquiry');
                    $redirect = "";
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
                    Message::success(__('home_contact_thank'));
                    $this->request->redirect("/");
                }
            } else {
                //validation failed, get errors
                $errors = $validator->errors('errors');
            }
        }
        /*
        if($_POST){
        $company = Model::factory('siteusers');
        $signup_id=$company->contactus_add($_POST,COMPANY_CID);
        if($signup_id){
        $mail="";
        $replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>$this->app_name,REPLACE_NAME=>$_POST['name'],REPLACE_EMAIL=>$_POST['email'],REPLACE_SUBJECT=>$_POST['subject'],REPLACE_PHONE=>$_POST['phone'],REPLACE_MESSAGE=>$_POST['message'],REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE);
        $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'Contact.html',$replace_variables);
        
        $to = 'maheswaran.r@ndot.in,venkatesan@ndot.in';
        $from = $this->siteemail;
        $subject = __('you_have_enquiry');	
        $redirect = "";	
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
        
        Message::success(__('thank_contacting_us'));
        $this->request->redirect("/");
        }
        }
        */
        $get_logged_user_details = $siteusers->get_logged_user_details($usrid);
        $site_info               = $siteusers->get_site_info();
        $sitecms_info            = $siteusers->get_sitecms_info();
        $banner_images           = $siteusers->get_banner_images();
        if (COMPANY_CID == 0) {
            $view                          = View::factory(USERVIEW . 'home')->bind('sitecms_info', $sitecms_info)->bind('banner_images', $banner_images)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('site_info', $site_info);
            $this->template->meta_description     = $this->commonmodel->select_site_settings('meta_description',SITEINFO);
            $this->template->meta_keywords = $this->commonmodel->select_site_settings('meta_keyword',SITEINFO);
            $this->template->title         = $this->title;
        }
        /*else if(SUBDOMAIN=='demo')
        {
        //echo 'as';
        $companybanner_images = $siteusers->get_company_images(COMPANY_CID);
        $company_cms = $siteusers->get_company_cms(COMPANY_CID);			
        //$view=View::factory(USERVIEW.'home_company')
        $view=View::factory(USERVIEW.'home-demo')
        ->bind('sitecms_info',$sitecms_info)
        ->bind('companybanner_images',$companybanner_images)
        ->bind('banner_images',$banner_images)
        ->bind('country_details',$country_details)
        ->bind('city_details',$city_details)
        ->bind('state_details',$state_details)
        ->bind('site_info',$site_info)
        ->bind('company_cms',$company_cms);			
        $this->template->meta_desc = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title =$this->title;
        }*/
        else {
			//$this->request->redirect("/admin/login/");
            $companybanner_images          = $siteusers->get_company_images(COMPANY_CID);
            $company_cms                   = $siteusers->get_company_cms(COMPANY_CID);
            $company_cms_page              = $siteusers->get_company_cms_page(COMPANY_CID);
            $company_taxi_image            = $siteusers->get_company_taxi_image(COMPANY_CID);
            $company_info                  = $siteusers->get_company_info(COMPANY_CID);
            $company_type                  = $siteusers->get_company_type(COMPANY_CID);
            $all_company_map_list          = $siteusers->all_driver_map_list(COMPANY_CID);

            $model_list = $this->cms->get_model_list();
            $home_page_drivers = $this->cms->get_home_page_drivers();
            $testimonials = $this->cms->get_testimonials();
            $home_page_content = $this->cms->get_website_page_content('home_page');
            //print_r($model_list);exit;

            //	print_r($company_info);exit;
            //echo USERVIEW;exit;
            //$view                          = View::factory(USERVIEW . 'home_company')
            $view                          = View::factory(USERVIEW . 'home')
            //$view=View::factory(USERVIEW.'home')
                ->bind('sitecms_info', $sitecms_info)->bind('companybanner_images', $companybanner_images)->bind('banner_images', $banner_images)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('site_info', $site_info)->bind('company_cms', $company_cms)->bind('company_cms_page', $company_cms_page)->bind('company_taxi_image', $company_taxi_image)->bind('company_info', $company_info)->bind('validator', $validator)->bind('errors', $errors)->bind('all_company_map_list', $all_company_map_list)->bind('company_type', $company_type)->bind('slider_settings',$slider_settings)->bind('model_list',$model_list)->bind('home_page_drivers',$home_page_drivers)->bind('testimonials',$testimonials)->bind('home_page_content',$home_page_content);
            $this->template->meta_description     = $this->commonmodel->select_site_settings('meta_description',SITEINFO);
            $this->template->meta_keywords = $this->commonmodel->select_site_settings('meta_keyword',SITEINFO);
            $this->template->title         = $this->title;
        }
        //$view=View::factory(USERVIEW.'under');
        $this->template->content = $view;
    }
    
   
    
    /**
     *****action_signup()****
     *@ User Registration
     */
    public function action_signup()
    {
        $siteusers      = Model::factory('siteusers');
        $activation_key = Commonfunction::admin_random_user_password_generator();
        $errors         = [];
        $id             = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid          = $id; // isset($userid)?$userid:$id; 
        $account_type   = "";
        $accounttype    = explode("/", $_SERVER["REQUEST_URI"]); //type=
        if (isset($accounttype[3]) && ($accounttype[3] == "job")) {
            $account_type = $accounttype[3];
        }
        /**If session is set it should not allow login page through URL**/
        if (!isset($usrid)) {
            /**To Set Errors Null to avoid error if not set in view**/
            $errors        = [];
            /*To get selected language at user side*/
            $lang_select   = arr::get($_REQUEST, 'language');
            /**To get the form submit button name**/
            $signup_submit = arr::get($_REQUEST, 'submit_signup');
            if ($signup_submit && Validation::factory($_POST)) {
                /**Send entered values to model for validation**/
                $validator   = $siteusers->validate_signup(arr::extract($_POST, [
                    'name',
                    'lastname',
                    'email',
                    'password',
                    'repassword'
                ]));
                /**To check email already exists or not,if exists return 1**/
                $email_exist = $siteusers->check_email($_POST['email']);
                /**If validation success without error **/
                if ($validator->check()) //&& $captcha_val
                    {
                    if ($email_exist > 0) {
                        $email_exists = __('email_exists');
                    } else {
                        $usrname    = $_POST['name'] . '-' . $_POST['lastname'];
                        /**To form URL from  user title**/
                        $user_url   = url::title($usrname);
                        /**To check url already exists or not,if exists return 1**/
                        $url_exist  = $siteusers->unique_userurl($user_url);
                        $image_name = "";
                        /**To generate random key**/
                        $userurl    = '';
                        if ($url_exist > 0) {
                            $random_key_new = text::random($type = 'alnum', $length = 7);
                            $userurl        = $user_url . '-' . $random_key_new;
                            $signup_id      = $siteusers->signup($validator, $_POST, $image_name, $this->get_location, $account_type, $userurl, $random_key_new);
                        } else {
                            $random_key = text::random($type = 'alnum', $length = 5);
                            $userurl    = $user_url . '-' . $random_key;
                            $signup_id  = $siteusers->signup($validator, $_POST, $image_name, $this->get_location, $account_type, $userurl, $random_key);
                        }
                        // Profile completeness :: WEBSITE_SIGNUP 
                        //============================================							      
                        $profile_rslt = $siteusers->profile_complete($this->session->get('id'), WEBSITE_SIGNUP);
                        if ($signup_id == 1) {
                            $mail              = "";
                            $replace_variables = [
                                REPLACE_LOGO => EMAILTEMPLATELOGO,
                                REPLACE_SITENAME => $this->app_name,
                                REPLACE_USERNAME => ucfirst($_POST['name']),
                                REPLACE_EMAIL => $_POST['email'],
                                REPLACE_PASSWORD => $_POST['password'],
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => $this->siteemail,
                                REPLACE_SITEURL => URL_BASE,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            ];
                            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'registertemp.html', $replace_variables);
                            $to                = $_POST['email'];
                            $from              = $this->siteemail;
                            $subject           = __('registration_success');
                            $redirect          = "users/profile";
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
                            //$mail=array("to" => $_POST['email'],"from"=>$this->siteemail,"subject"=>"Registration success","message"=>$message);									
                            //$emailstatus=$this->email_send($mail,'smtp');								
                            Message::success(__('sucessfull_registration') . $this->app_name);
                            $this->request->redirect("users/profile");
                            //$this->request->redirect(URL_BASE);										
                        } else {
                            Message::error($fail);
                        }
                    }
                } else { //validation failed, get errors
                    $errors = $validator->errors('errors');
                }
            }
            //Message::success("Please login to Access");
            $this->request->redirect('/');
            $view                    = View::factory(USERVIEW . 'signup')->bind('validator', $validator)->bind('errors', $errors)->bind('term', $term)->bind('email_exists', $email_exists)
            //->bind('uname_exists', $name_exists)
                ->bind('category', $job_category)->bind('captcha', $captcha)->bind('suggestions', $suggestions)->bind('category_selected', $category_name)->bind('captcha_val', $captcha_val);
            $this->template->content = $view;
        } else {
            //if session id set means redirects to home page
            //============================================
            $this->request->redirect('users/profile'); //people
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**
     *****action_login()****
     *@ User Login
     */
    public function action_login()
    {		
        $id            = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid         = $id; // isset($userid)?$userid:$id;
        /**To Set Errors Null to avoid error if not set in view**/
        $this->session = Session::instance();
        $siteusers     = Model::factory('siteusers');
        /**Check if session set or not and if set it should not show login page**/
        if (!isset($usrid)) {
            $errors       = [];
            /**To get the form submit button name**/
            $login_submit = arr::get($_REQUEST, 'submit_login');
            if ($login_submit && Validation::factory($_POST)) {
                /**Send entered values to model for validation**/
                $validator = $siteusers->validate_login(arr::extract($_POST, [
                    'email',
                    'password'
                ]));
                /**If validation success without error **/
                if ($validator->check()) {
                    //check if email is exist or not
                    //===============================
                    $check_ppl_exist = $siteusers->check_email($_POST['email']);
                    if ($check_ppl_exist > "0") {
                        //get location of user
                        //====================
                        $location = isset($this->get_location) ? $this->get_location : '';
                        /**Check user by sending values to model **/
                        $result   = $siteusers->login($validator, $location);
                        /**If user exists ans status is active redirect to home**/
                        if ($result == 1) {
                            Message::success(__('succesful_login_flash') . $this->app_name);
                            $this->request->redirect('users/profile'); //people
                        }
                        /**If user status is not active**/
                        elseif ($result == -1) {
                            $blocked = __('user_blocked');
                        }
                        /**If user name or password is wrong**/
                        else {
                            //$user_wrong=$validator['email'];
                            $user_error = __('invalid_credentials');
                        }
                        $validator = null;
                    } else {
                        $ppl_nt_exist = __('email_not_exist');
                    }
                } else {
                    //validation failed, get errors
                    $errors = $validator->errors('errors');
                }
            }
            //Message::success("Please login to Access");
            $this->request->redirect('/');
            $view                          = View::factory(USERVIEW . 'login')->bind('validator', $validator)->bind('errors', $errors)->bind('blocked', $blocked)->bind('user_wrong', $user_wrong)->bind('ppl_nt_exist', $ppl_nt_exist)->bind('user_error', $user_error);
            $this->template->content       = $view;
            $this->template->meta_desc     = $this->meta_description;
            $this->template->meta_keywords = $this->meta_keywords;
            $this->template->title         = $this->title;
        } else {
            $this->request->redirect('users/profile');
        }
    }
    /**
     * ****action_logout()****
     * @return auth logout action
     */
    public function action_logout()
    {
        //destroy session while logout
        $this->session->destroy();
        $pastdate = mktime(0, 0, 0, 1, 1, 1970);
        setcookie("XSESSIONID", "", time() - 18600);
        setcookie("access_token", "", time() - 18600);
        setcookie("ext_id", "", time() - 18600);
        setcookie("LOCATION", "", time() - 18600);
        setcookie("access_token", "", $pastdate);
        setcookie("XSESSIONID", "", $pastdate);
        setcookie("ext_id", "", $pastdate);
        setcookie("LOCATION", "", $pastdate);
        setcookie("_chartbeat2", "", $pastdate);
        setcookie("__utmb", "", $pastdate);
        setcookie("__utmc", "", $pastdate);
        setcookie("__utma", "", $pastdate);
        setcookie("__utmz", "", $pastdate);
        $_SESSION['XSESSIONID'] = false;
        unset($_SESSION['XSESSIONID']);
        // Sign out the user and redirects to login page
        //Auth::instance()->logout();
        $this->session = Session::instance();
        Message::success(__('succesful_logout_flash') . $this->app_name);
        $this->request->redirect("/");
    }
    /**
     * ****action_forgot_password()****
     * @return forgot_password action
     */
    public function action_forgotpassword()
    {
        $siteusers         = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors            = [];
        $view              = View::factory(USERVIEW . 'forgot_password')->bind('validator', $validator)->bind('errors', $errors)->bind('success', $success)->bind('email_error', $email_error);
        /**To generate random key if user enter email at forgot password**/
        $random_key        = text::random($type = 'alnum', $length = 7);
        /**To get the form submit button name**/
        $change_pwd_submit = arr::get($_REQUEST, 'submit_forgot_password');
        if ($change_pwd_submit && Validation::factory($_POST)) {
            $validator = $siteusers->validate_forgotpwd(arr::extract($_POST, [
                'email'
            ]));
            if ($validator->check()) {
                $email_exist = $siteusers->check_email($_POST['email']);
                if ($email_exist == 1) {
                    $result = $siteusers->forgot_password($validator, $_POST, $random_key);
                    if ($result) {
                        $mail              = "";
                        $forgotpassword    = $this->emailtemplate->get_template_content(FORGOT_PASSWORD);
                        $subject           = $forgotpassword[0]['email_subject'];
                        $content           = $forgotpassword[0]['email_content'];
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => ucfirst($result[0]['name']),
                            REPLACE_EMAIL => $_POST['email'],
                            REPLACE_PASSWORD => $random_key,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            SITE_DESCRIPTION => $this->app_description,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
                        $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
                        $to                = $_POST['email'];
                        $from              = $this->siteemail;
                        $subject           = $subject;
                        $redirect          = "users/login";
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
                        //$mail=array("to" => $_POST['email'],"from"=>$this->siteemail,"subject"=>$subject,"message"=>$message);
                        //$emailstatus=$this->email_send($mail,'smtp');	
                        Message::success(__('sucessful_forgot_password'));
                        $this->request->redirect("users/login");
                    } else {
                        echo $fail;
                    }
                } else {
                    $email_error = __("email_not_exist");
                }
                $validator = null;
            } else {
                //validation failed, get errors
                $errors = $validator->errors('errors');
            }
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    public function action_ajaxforgotpassword()
    {
        $siteusers   = Model::factory('siteusers');
        $errors      = [];
        /**To generate random key if user enter email at forgot password**/
        $random_key  = text::random($type = 'alnum', $length = 7);
        $email_exist = $siteusers->check_email($_POST['email']);
        if ($email_exist == 1) {
            $result = $siteusers->forgot_password($_POST, $_POST, $random_key);
            if ($result) {
                $mail              = "";
                $forgotpassword    = $this->emailtemplate->get_template_content(FORGOT_PASSWORD);
                $subject           = $forgotpassword[0]['email_subject'];
                $content           = $forgotpassword[0]['email_content'];
                $replace_variables = [
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => ucfirst($result[0]['name']),
                    REPLACE_EMAIL => $_POST['email'],
                    REPLACE_PASSWORD => $random_key,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    SITE_DESCRIPTION => $this->app_description,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                ];
                $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
                $to                = $_POST['email'];
                $from              = $this->siteemail;
                $subject           = $subject;
                $redirect          = "no";
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
                //$mail=array("to" => $_POST['email'],"from"=>$this->siteemail,"subject"=>$subject,"message"=>$message);
                //$emailstatus=$this->email_send($mail,'smtp');	
                echo "1";
                exit;
            } else {
                echo "Error occured";
                exit;
            }
        } else {
            $email_error = __("email_not_exist");
            echo $email_error;
            exit;
        }
        exit;
    }
    /**
     *****action_setting()****
     * @People setting
     */
    public function action_setting()
    {
        $siteusers = Model::factory('siteusers');
        $errors    = [];
        $this->is_login();
        $this->is_login_status();
        $userid = $this->session->get('id');
        $id     = $userid;
        $usrid  = $id = $userid;
        $status = Arr::get($_REQUEST, 'status');
        $type   = Arr::get($_REQUEST, 'type');
        $cat    = Arr::get($_REQUEST, 'cat');
        if ($type == "fb") {
            //case for checking whether fb connection or chcekin
            //==================================================
            switch ($cat) {
                case "fbcheckin":
                    $fb_share_update = $siteusers->fb_connection_update($status, $usrid);
                    break;
                case "fbconn":
                    $fb_con_update = $siteusers->fb_conn_update($status, $usrid);
                    break;
            }
        }
        //update twitter checkbox values 
        if ($type == "twi") {
            switch ($cat) {
                case "twicheckin":
                    $twiter_share_update = $siteusers->twitter_connection_update($status, $usrid);
                    break;
                case "twiconn":
                    $twiter_con_update = $siteusers->twitter_conn_update($status, $usrid);
                    break;
            }
        }
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $view                          = View::factory(USERVIEW . 'setting')->bind('validator', $validator)->bind('errors', $errors)->bind('user', $user)->bind('email_exists', $email_exists)->bind('user_email_setting', $user_email_setting)->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork)->bind('data', $_POST);
        View::bind_global('settingfaqdetails', $settingfaqdetails);
        $submit_profile_form2    = arr::get($_REQUEST, 'submit_user_profile_edit');
        $_FILES                  = [];
        //To check if user photo existing in database		
        $image_name              = $siteusers->check_photo($id);
        $submit_profile          = arr::get($_REQUEST, 'submit_user_profile'); //submit_user_profile
        $submit_profile_optional = arr::get($_REQUEST, 'submit_user_profile_optional');
        $_POST                   = Arr::map('trim', $this->request->post());
        if ($submit_profile_form2 && Validation::factory($_POST)) {
            /**Send entered values to model for validation**/
            $validator   = $siteusers->validate_user_profilesettings(arr::extract($_POST, [
                'name',
                'lastname',
                'email',
                'description',
                'school',
                'education'
            ]));
            $email_exist = $siteusers->check_email_update($_POST['email'], $id);
            /**If email exists show error message**/
            if ($email_exist > 0) {
                $email_exists = __("email_exists");
            } else {
                if ($validator->check()) {
                    $IMG_NAME = "";
                    $result   = $siteusers->update_user_settings($validator, $_POST, $id, $IMG_NAME);
                    Message::success(__('user_success_update'));
                    $this->request->redirect('/users/setting');
                } else {
                    $errors = $validator->errors('errors');
                }
            }
            //unset($_REQUEST['submit_user_profile_edit']);
        }
        $user_email_setting            = $siteusers->get_user_email_setting($id);
        $user                          = $siteusers->get_user_details($id, $this->get_location);
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    /**
     *****action_profile_optional()****
     * @People profile_optional
     */
    public function action_profile_optional()
    {
        $siteusers = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid                        = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $id                            = $userid; // isset($userid)?$userid:$usrid;
        $usrid                         = $id = $userid;
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $view                          = View::factory(USERVIEW . 'setting')->bind('validator', $validator)->bind('errors', $errors)->bind('user', $user)->bind('user_email_setting', $user_email_setting)->bind('email_exists', $email_exists)->bind('data', $_POST)->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork);
        $_FILES                        = [];
        $submit_profile_optional       = arr::get($_REQUEST, 'submit_user_profile_optional');
        $_POST                         = Arr::map('trim', $this->request->post());
        if ($submit_profile_optional && Validation::factory($_POST)) {
            $validator = $siteusers->validate_user_profilesettings_optional(arr::extract($_POST, [
                'phone',
                'dob',
                'organisation',
                'work',
                'website',
                'user_paypal_account',
                'account_balance_amt',
                'group'
            ]));
            if ($validator) {
                $result = $siteusers->update_user_settings_optional($_POST, $id);
                Message::success(__('user_success_update'));
                $this->request->redirect('/users/setting');
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $user_email_setting            = $siteusers->get_user_email_setting($id);
        $user                          = $siteusers->get_user_details($id, $this->get_location);
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    // profile ajax load
    public function action_load()
    {
        $json      = [];
        $get       = Arr::extract($_GET, [
            'data'
        ]);
        $data      = explode(",", $get['data']);
        $start     = $data[0];
        $limit     = $data[1];
        $siteusers = Model::factory('siteusers');
        $errors    = [];
        $userid    = $this->session->get('id');
        $id        = $userid; // isset($userid)?$userid:$usrid;
        $site      = Model::factory('site');
        if ($userid = $this->session->get('id')) {
            $jobs_likeids = $siteusers->get_user_jobslikeid($userid); //print_r($jobs_likeids); exit;
            $jobs_likeid  = [];
            foreach ($jobs_likeids as $jobs_likeid_extract) {
                $jobs_likeid[] = $jobs_likeid_extract['care_id'];
            }
        } else {
            $jobs_likeid = null;
        }
        $caregorylist   = [];
        $parentcategory = $site->get_parentcategory();
        //$wishlisting=$siteusers->wishlisted_cares($id,$this->get_location); 
        $wishlisting    = $siteusers->wishlisted_cares_load($start, $limit, $id, $this->get_location);
        foreach ($parentcategory as $caty) {
            $subcategory    = $site->subcategory($caty["id"]);
            $caregorylist[] = [
                "id" => $caty["id"],
                "category_name" => $caty["category_name"],
                "parent_category" => $caty["parent_category"],
                "status" => $caty["status"],
                "created_date" => $caty["created_date"],
                "subcategory" => $subcategory
            ];
        }
        View::bind_global('caregorylist', $caregorylist);
        $view           = View::factory(USERVIEW . 'profile_scroll')->bind('validator', $validator)->bind('validator_changepass', $validator_changepass)->bind('errors', $errors)->bind('user', $user)->bind('notify_user', $notify_user)->bind('email_exists', $email_exists)->bind('data', $_POST)->bind('show', $show)->bind('care_follow', $care_follow)->bind('following', $following)->bind('followers', $followers)->bind('following_detail', $following_detail)->bind('followers_detail', $followers_detail)->bind('userid', $userid)->bind('jobs_likeid', $jobs_likeid)->bind('wishlisting', $wishlisting);
        $json['output'] = $view->render();
        echo json_encode($json);
        exit;
        $this->template->content = $view;
        /*To get selected language at user side*/
        $lang_select             = arr::get($_REQUEST, 'language');
        $submit_profile          = arr::get($_REQUEST, 'submit_user_profile');
        //To check if user photo existing in database		
        if ($id != null)
            $image_name = $siteusers->check_photo($id);
        $user_profileid = $this->request->param('id'); //echo $user_profileid;exit;  
        if (!empty($user_profileid)) //profileid
            {
            $user_profilelist = explode("-", $user_profileid);
            $profileid        = end($user_profilelist); //print_r($user_profilelist); echo $test; exit;
            $user_profileid   = $siteusers->get_user_profileid($profileid);
            $this->session->set('cur_prof_id', $user_profileid);
            $this->session->set('profileid', $profileid);
            $notify_user = $user_profileid;
            if ($user_profileid == 0) {
                //Message::success("No user found !");
                $this->request->redirect('/service'); //listing
            }
            $user        = $siteusers->get_user_details($user_profileid, $this->get_location);
            $notify_user = $user_profileid;
            if (!empty($id))
                $care_follow = $siteusers->get_userfollow_details($id, $notify_user);
            $following_detail = $siteusers->get_userfollowcount($notify_user);
            $followers_detail = $siteusers->get_userfollowerscount($notify_user);
            $following        = count($following_detail);
            $followers        = count($followers_detail);
            //print_r($following_detail);exit;
            $show             = 1;
        } else {
            if ($id != null) {
                $user             = $siteusers->get_user_details($id, $this->get_location);
                $notify_user      = '';
                $following_detail = $siteusers->get_userfollowcount($userid);
                $following        = count($following_detail);
                $followers_detail = $siteusers->get_userfollowerscount($userid);
                $followers        = count($followers_detail);
                $show             = 0;
            } else {
                //Message::success("No user found !");
                $this->request->redirect('/service'); //listing
            }
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    public function action_profile()
    {
        $siteusers = Model::factory('siteusers');
        $errors    = [];
        $this->is_login_status();
        //$this->is_login(); 		
        $userid = $this->session->get('id');
        $id     = $userid;
        $site   = Model::factory('site');
        if ($userid = $this->session->get('id')) {
            $jobs_likeids = $siteusers->get_user_jobslikeid($userid); //print_r($jobs_likeids); exit;
            $jobs_likeid  = [];
            foreach ($jobs_likeids as $jobs_likeid_extract) {
                $jobs_likeid[] = $jobs_likeid_extract['care_id'];
            }
        } else {
            $jobs_likeid = null;
        }
        $caregorylist   = [];
        $parentcategory = $site->get_parentcategory();
        foreach ($parentcategory as $caty) {
            $subcategory    = $site->subcategory($caty["id"]);
            $caregorylist[] = [
                "id" => $caty["id"],
                "category_name" => $caty["category_name"],
                "parent_category" => $caty["parent_category"],
                "status" => $caty["status"],
                "created_date" => $caty["created_date"],
                "subcategory" => $subcategory
            ];
        }
        View::bind_global('caregorylist', $caregorylist);
        $view                    = View::factory(USERVIEW . 'profile')->bind('validator', $validator)->bind('validator_changepass', $validator_changepass)->bind('errors', $errors)->bind('user', $user)->bind('notify_user', $notify_user)->bind('email_exists', $email_exists)->bind('data', $_POST)->bind('show', $show)->bind('care_follow', $care_follow)->bind('following', $following)->bind('followers', $followers)->bind('following_detail', $following_detail)->bind('followers_detail', $followers_detail)->bind('userid', $userid)->bind('jobs_likeid', $jobs_likeid)->bind('profile_completeness', $profile_completeness)->bind('wishlisting', $wishlisting);
        $this->template->content = $view;
        $wishlisting             = $siteusers->wishlisted_cares($id, $this->get_location); //print_r($wishlisting);exit;
        /*To get selected language at user side*/
        $lang_select             = arr::get($_REQUEST, 'language');
        $submit_profile          = arr::get($_REQUEST, 'submit_user_profile');
        //To check if user photo existing in database		
        if ($id != null)
            $image_name = $siteusers->check_photo($id);
        $user_profileid = $this->request->param('id'); //echo $user_profileid;exit;  
        if (!empty($user_profileid)) //profileid
            {
            $user_profilelist = explode("-", $user_profileid);
            $profileid        = end($user_profilelist); //print_r($user_profilelist); echo $test; exit;
            $user_profileid   = $siteusers->get_user_profileid($profileid);
            $this->session->set('cur_prof_id', $user_profileid);
            $this->session->set('profileid', $profileid);
            /* $user_profilelist=explode("-", $user_profileid); 
            $profileid=end($user_profilelist); //print_r($user_profilelist); echo $test; exit;
            $user_profileid = $siteusers->get_user_profileid($profileid);*/
            $notify_user = $user_profileid;
            if ($user_profileid == 0) {
                //Message::success("No user found !");
                $this->request->redirect('/service'); //listing
            }
            $profile_completeness = $siteusers->get_profile_completeness($user_profileid);
            $user                 = $siteusers->get_user_details($user_profileid, $this->get_location);
            $notify_user          = $user_profileid;
            if (!empty($id))
                $care_follow = $siteusers->get_userfollow_details($id, $notify_user);
            $following_detail = $siteusers->get_userfollowcount($notify_user);
            $followers_detail = $siteusers->get_userfollowerscount($notify_user);
            $following        = count($following_detail);
            $followers        = count($followers_detail);
            //print_r($following_detail);exit;
            $show             = 1;
        } else {
            if ($id != null) {
                $user_profileid = '';
                $profileid      = '';
                $this->session->set('cur_prof_id', $user_profileid);
                $this->session->set('profileid', $profileid);
                $profile_completeness = $siteusers->get_profile_completeness($id);
                $user                 = $siteusers->get_user_details($id, $this->get_location);
                $notify_user          = '';
                $following_detail     = $siteusers->get_userfollowcount($userid); //print_r($following_detail);
                $following            = count($following_detail);
                $followers_detail     = $siteusers->get_userfollowerscount($userid); //print_r($followers_detail);
                $followers            = count($followers_detail);
                $show                 = 0;
            } else {
                //Message::success("No user found !");
                $this->request->redirect('/'); //listing // /service
            }
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        //}
    }
    /**
     *****action_editprofile()****
     * @People edit profile
     */
    public function action_editprofile()
    {
        $siteusers = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid               = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $id                   = $userid; // isset($userid)?$userid:$usrid;
        $view                 = View::factory(USERVIEW . 'editprofile')->bind('validator', $validator)
        //->bind('validator_changepass', $validator_changepass)
            ->bind('errors', $errors)->bind('user', $user)->bind('email_exists', $email_exists)->bind('data', $_POST)
            //->bind('user_exists', $user_exists)
                ;
        /*To get selected language at user side*/
        //$lang_select =arr::get($_REQUEST,'language');
        //$submit_profile =arr::get($_REQUEST,'submit_user_profile');
        $submit_profile_form2 = arr::get($_REQUEST, 'submit_user_profile_edit');
        $_FILES               = [];
        //To check if user photo existing in database		
        $image_name           = $siteusers->check_photo($id);
        $_POST                = Arr::map('trim', $this->request->post());
        if ($submit_profile_form2 && Validation::factory($_POST)) {
            /**Send entered values to model for validation**/
            $validator   = $siteusers->validate_user_profilesettings(arr::extract($_POST, [
                'name',
                'lastname',
                'email',
                'description',
                'location',
                'phone',
                'dob',
                'education',
                'organisation',
                'work',
                'website',
                'user_paypal_account',
                'account_balance_amt'
            ]));
            $email_exist = $siteusers->check_email_update($_POST['email'], $id);
            /**If email exists show error message**/
            if ($email_exist > 0) {
                $email_exists = __("email_exists");
            } else {
                if ($validator->check()) {
                    $IMG_NAME = "";
                    $result   = $siteusers->update_user_settings($validator, $_POST, $id, $IMG_NAME);
                    Message::success(__('user_success_update'));
                    $this->request->redirect('/users/profile');
                } else {
                    //validation failed, get errors					
                    $errors = $validator->errors('errors');
                }
            }
        }
        $user                          = $siteusers->get_user_details($id, $this->get_location);
        //print_r($user);exit;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    /**
     *****action_picture()****
     * @People picture
     */
    public function action_picture()
    {
        $siteusers = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $this->session->set('set_tab', '2');
        $id                            = $userid; // $id = isset($userid)?$userid:$usrid;
        /*To get selected language at user side*/
        $lang_select                   = arr::get($_REQUEST, 'language');
        //To check if user photo existing in database		
        $image_name                    = $siteusers->check_photo($id);
        $usrid                         = $id = $userid;
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $view                          = View::factory(USERVIEW . 'setting')->bind('validator', $validator)->bind('errors', $errors)->bind('user', $user)->bind('email_exists', $email_exists)->bind('data', $_POST)->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork);
        View::bind_global('settingfaqdetails', $settingfaqdetails);
        $submit_profile = arr::get($_REQUEST, 'submit_user_profile');
        $_POST          = Arr::map('trim', $this->request->post());
        if ($submit_profile && Validation::factory($_POST, $_FILES)) {
            /**Send entered values to model for validation**/
            $validator = $siteusers->validate_user_settings(array_merge($_POST, [
                'photo'
            ]), $_FILES); //'location','industry','smart_tags',
            if ($validator->check()) {
                $IMG_NAME = "";
                /*Uploading and saving image*/
                if ($_FILES['photo']['name'] != "") {
                    $IMG_NAME = uniqid() . $_FILES['photo']['name'];
                    $filename = Upload::save($_FILES['photo'], $IMG_NAME, DOCROOT . USER_IMGPATH, '0777');
                    $image    = Image::factory($filename);
                    $image2   = Image::factory($filename);
                    $path     = DOCROOT . USER_IMGPATH_THUMB;
                    Commonfunction::imageresize($image, USER_SMALL_THUMB_WIDTH, USER_SMALL_THUMB_HEIGHT, $path, $IMG_NAME, 90);
                    $path2 = DOCROOT . USER_IMGPATH_PROFILE;
                    Commonfunction::imageresize($image2, USER_SMALL_IMAGE_WIDTH, USER_SMALL_IMAGE_HEIGHT, $path2, $IMG_NAME, 90);
                }
                if ($IMG_NAME != '' && $image_name != '') {
                    if (file_exists(DOCROOT . USER_IMGPATH . $image_name)) {
                        unlink(DOCROOT . USER_IMGPATH . $image_name);
                    }
                    if (file_exists(DOCROOT . USER_IMGPATH_THUMB . $image_name)) {
                        unlink(DOCROOT . USER_IMGPATH_THUMB . $image_name);
                    }
                    if (file_exists(DOCROOT . USER_IMGPATH_PROFILE . $image_name)) {
                        unlink(DOCROOT . USER_IMGPATH_PROFILE . $image_name);
                    }
                }
                $result = $siteusers->update_user_settings($validator, $_POST, $id, $IMG_NAME);
                Message::success(__('add_userphoto_flash')); //__('user_success_update')
                //'Profile picture has been updated successfully' //'update_userphoto_flash')
                $this->request->redirect('users/picture'); //setting
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $user                          = $siteusers->get_user_details($id, $this->get_location);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**
     *****action_delete_userphoto()****
     *@People delete photo
     */
    public function action_delete_userphoto()
    {
        //auth login check
        $this->is_login();
        $this->is_login_status();
        $siteusers = Model::factory('siteusers');
        /**To get current logged user id from session**/
        $userid    = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $this->session->delete('set_tab', '2');
        $id         = $userid; // isset($userid)?$userid:$usrid;
        //To check if user photo existing in database
        $image_name = $siteusers->check_photo($id);
        //If user photo exists unlink image from the folder
        if (file_exists(DOCROOT . USER_IMGPATH . $image_name) && $image_name != '') {
            unlink(DOCROOT . USER_IMGPATH . $image_name);
        }
        //If user photo exists unlink image from the folder
        if (file_exists(DOCROOT . USER_IMGPATH_THUMB . $image_name) && $image_name != '') {
            unlink(DOCROOT . USER_IMGPATH_THUMB . $image_name);
        }
        //To update user photo null after deleteing user photo
        $status = $siteusers->update_user_photo($id);
        Message::success(__('delete_userphoto_flash'));
        //Flash message 	
        $this->request->redirect("users/picture/");
        //$this->request->redirect("users/editprofile/");
    }
    /**
     *****action_change_currency()****
     *@People change Currency
     */
    public function action_change_currency()
    {
        $siteusers = Model::factory('siteusers');
        $this->is_login();
        $this->is_login_status();
        $userid                        = $this->session->get('id');
        $id                            = $userid;
        $usrid                         = $id = $userid;
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $view                          = View::factory(USERVIEW . 'setting')->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork);
        View::bind_global('settingfaqdetails', $settingfaqdetails);
        $change_currency = arr::get($_REQUEST, 'change_currency');
        //echo $change_currency;exit;
        $siteusers->update_currency_code($id, $change_currency);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->request->redirect("users/setting/");
    }
    /**
     *****action_change_password()****
     *@People change password
     */
    public function action_password()
    {
        $siteusers = Model::factory('siteusers');
        /*To set errors in array if errors not set*/
        $errors    = [];
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        $userid = $this->session->get('id');
        $this->session->set('set_tab', '3');
        $id                            = $userid;
        $usrid                         = $id = $userid;
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $view                          = View::factory(USERVIEW . 'setting')->bind('validator', $_POST)->bind('validator_changepass', $validator_changepass)->bind('oldpass_error', $oldpass_error)->bind('same_pw', $same_pw)->bind('errors', $errors)->bind('category', $job_category)->bind('email_exists', $email_exists)->bind('user_exists', $user_exists)->bind('user_email_setting', $user_email_setting)->bind('category_selected', $category_name)->bind('suggestions', $suggestions)->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork)->bind('user', $user);
        View::bind_global('settingfaqdetails', $settingfaqdetails);
        $submit_change_pass = arr::get($_REQUEST, 'submit_change_pass');
        $userid             = $this->session->get('id');
        if ($submit_change_pass && Validation::factory($_POST)) {
            $userid1              = $this->session->get('id');
            //$userid2 =$this->session->get('userid');
            $userid               = isset($userid1) ? $userid1 : '';
            $validator_changepass = $siteusers->validate_changepwd(arr::extract($_POST, [
                'old_password',
                'new_password',
                'confirm_password'
            ]));
            //print_r($validator_changepass);exit;
            if ($validator_changepass->check()) {
                $oldpass_check = $siteusers->check_pass($_POST['old_password'], $userid);
                if ($_POST['old_password'] != $_POST['new_password']) {
                    if ($oldpass_check == 1) {
                        $result = $siteusers->change_password($validator_changepass, $_POST, $userid);
                        if ($result) {
                            $mail              = "";
                            $signup_cont       = $this->emailtemplate->get_template_content(USER_CHANGE_PASSWORD);
                            $subject           = $signup_cont[0]['email_subject'];
                            $content           = $signup_cont[0]['email_content'];
                            $replace_variables = [
                                REPLACE_LOGO => EMAILTEMPLATELOGO,
                                REPLACE_SITENAME => $this->app_name,
                                REPLACE_USERNAME => ucfirst($result[0]['name']),
                                REPLACE_EMAIL => $result[0]['email'],
                                REPLACE_PASSWORD => $_POST['confirm_password'],
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => $this->siteemail,
                                REPLACE_SITEURL => URL_BASE,
                                SITE_DESCRIPTION => $this->app_description,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            ];
                            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
                            $to                = $result[0]['email'];
                            $from              = $this->siteemail;
                            $subject           = $subject;
                            $redirect          = "";
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
                            //$mail=array("to" => $result[0]['email'],"from"=>$this->siteemail,"subject"=>$subject,"message"=>$message);
                            //$emailstatus=$this->email_send($mail,'smtp');						
                            Message::success(__('sucessful_change_password'));
                            $this->request->redirect("/");
                        } else {
                            echo __("fail_change_password");
                        }
                        $validator_changepass = null;
                        $email_exists         = "";
                        $user_exists          = "";
                    } else {
                        $oldpass_error = __('oldpassword_error');
                    }
                } else {
                    $same_pw = __('samepw_error');
                }
            } else {
                //validation failed, get errors
                $errors = $validator_changepass->errors('errors');
            }
        }
        $user_email_setting            = $siteusers->get_user_email_setting($id);
        $user                          = $siteusers->get_user_details($id, $this->get_location);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**** Delete Account ****/
    public function action_delete_account()
    {
        $siteusers = Model::factory('authorize');
        //check user id from url
        $id        = arr::get($_REQUEST, 'id');
        //check if param id is set in session 
        if (isset($_SESSION) && (($id == $_SESSION['id']) || ($id == $_SESSION['userid']))) {
            $del_acc = $siteusers->delete_people($id);
            $this->session->destroy();
            Cookie::delete('userid');
            Cookie::delete('id');
        } else {
            //Flash message 
            Message::success(__('You are not autorized to this action'));
        }
        $this->request->redirect("/");
    }
    /**** EOF Delete Account ****/
    /**
     * ****action_is_login()****
     * @return check user logged or not
     */
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set('requested_url', Request::detect_uri());
        /**To check Whether the user is logged in or not**/
        if (!isset($this->session) || !$this->session->get('id')) // (!$this->session->get('userid')) && 		 
            {
            Message::error(__('login_access'));
            $this->request->redirect("/users/login/");
        }
        return;
    }
    public function is_login_status()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set('requested_url', Request::detect_uri());
        if (isset($this->session) || $this->session->get('id')) {
            $siteusers = Model::factory('siteusers');
            /**Check user is blocked or not  **/
            $result    = $siteusers->logged_user_status();
            /**If user exists ans status is active redirect to home**/
            if (($result == 1) || ($result == 0)) {
                return;
            }
            /**If user status is not active**/
            elseif ($result == -1) {
                Message::success(__('user_blocked'));
                $this->request->redirect("/users/logout/");
            }
            /**If user name or password is wrong**/
            else {
                Message::success(__('invalid_credentials'));
                $this->request->redirect("/users/logout/");
            }
            //return;
        } else {
            return;
        }
    }
    /*  ********************** Caregiver  **********************  */
    /**
     *****action_caregivers  dashboard ****
     * @People caregivers dashboard
     */
    public function action_dashboard() //carelist
    {
        $siteusers = Model::factory('siteusers');
        $site      = Model::factory('site');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid            = $this->session->get('id');
        $rating            = $siteusers->getRatingDeatils($userid);
        $care_usermsg_send = $siteusers->getcareuser_msg_send($userid);
        $caregorylist      = [];
        $parentcategory    = $site->get_parentcategory();
        $followers         = $siteusers->get_user_carefollows($userid); //$siteusers->get_followers($userid);
        $wish_list         = $siteusers->getWishlist($userid);
        foreach ($parentcategory as $caty) {
            $subcategory    = $site->subcategory($caty["id"]);
            $caregorylist[] = [
                "id" => $caty["id"],
                "category_name" => $caty["category_name"],
                "parent_category" => $caty["parent_category"],
                "status" => $caty["status"],
                "created_date" => $caty["created_date"],
                "subcategory" => $subcategory
            ];
        }
        $care_usermsg_reci     = $siteusers->getcareuser_msg_received($userid);
        $id                    = $userid;
        /*
        $balance=$siteusers->getcaregiver_balance($userid);
        if(count($balance)>0)
        {
        $bal=$balance[0]['balance'];
        }
        else
        {
        $bal=0.00;
        }
        
        $order_complete_amount_total =$bal;
        
        
        $order_complete_amount=$order_complete_amount_total;
        $withdraw_status = array(WITHDRAW_SUCESS); 
        
        $withdraw_status_insert = array(WITHDRAW_PENDING);
        $withdraw_amount = $siteusers->get_withdraw_amount($userid,$withdraw_status); 
        
        $withdraw_amount = count($withdraw_amount) > 0?$withdraw_amount[0]['amount']:0;
        
        $cleared_amount = ($order_complete_amount - $withdraw_amount);
        View::bind_global('balance',$cleared_amount);		
        */
        //balance amount fetch query 
        //================================      	
        $accountbalance_result = $siteusers->get_user_accountbalance($id);
        if (count($accountbalance_result) > 0) {
            $bal = $accountbalance_result[0]['balance'];
        } else {
            $bal = 0;
        }
        View::bind_global('balance', $bal);
        //=================================  
        $view = View::factory(USERVIEW . 'dashboard')->bind('listing', $listing)->bind('orders', $orders)->bind('userid', $userid)->bind('jobs_likeid', $jobs_likeid)->bind('caregorylist', $caregorylist)->bind('care_usermsg_send', $care_usermsg_send)->bind('care_usermsg_reci', $care_usermsg_reci)->bind('past_listing', $past_listing)->bind('future_listing', $future_listing)->bind('canview', $canview)->bind('user', $user);
        View::bind_global('rating_des', $rating);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        View::bind_global('followers', $followers);
        View::bind_global('wish_list', $wish_list);
        $user    = $siteusers->get_user_details($id, $this->get_location); // print_r($user);exit;
        $canview = $siteusers->dash_canview($id); // check user type caregiver or care seeker
        if ($canview == 1) {
            $past_listing   = $siteusers->get_past_booked_listing($id);
            $future_listing = $siteusers->get_future_booked_listing($id);
        }
        if ($canview == 0) {
            $past_listing   = $siteusers->get_cg_past_booked_listing($id);
            $future_listing = $siteusers->get_cg_future_booked_listing($id);
        }
        $listing = $siteusers->get_user_listing($id, $this->get_location); // print_r($listing);exit;
        //$wishlisting=$siteusers->wishlisted_cares($id,$this->get_location);  //print_r($wishlisting);exit;
        $orders  = $siteusers->careservice_orders($id, $this->get_location); //print_r($wishlisting);exit;
        /** get current user jobs like if logged in **/
        if ($userid = $this->session->get('id')) {
            $jobs_likeids = $siteusers->get_user_jobslikeid($userid); //print_r($jobs_likeids); exit;
            $jobs_likeid  = [];
            foreach ($jobs_likeids as $jobs_likeid_extract) {
                $jobs_likeid[] = $jobs_likeid_extract['care_id'];
            }
        } else {
            $jobs_likeid = null;
        }
        $this->template->content = $view;
    }
    public function action_dashboardload() //carelist
    {
        $json      = [];
        $get       = Arr::extract($_GET, [
            'data'
        ]);
        $data      = explode(",", $get['data']);
        $start     = $data[0];
        $limit     = $data[1];
        $siteusers = Model::factory('siteusers');
        $site      = Model::factory('site');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid            = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $care_usermsg_send = $siteusers->getcareuser_msg_send($userid);
        //print_r($care_usermsg_send);exit;
        $caregorylist      = [];
        $parentcategory    = $site->get_parentcategory();
        foreach ($parentcategory as $caty) {
            $subcategory    = $site->subcategory($caty["id"]);
            $caregorylist[] = [
                "id" => $caty["id"],
                "category_name" => $caty["category_name"],
                "parent_category" => $caty["parent_category"],
                "status" => $caty["status"],
                "created_date" => $caty["created_date"],
                "subcategory" => $subcategory
            ];
        }
        $care_usermsg_reci     = $siteusers->getcareuser_msg_received($userid);
        $id                    = $userid;
        /*
        $balance=$siteusers->getcaregiver_balance($userid);
        if(count($balance)>0)
        {
        $bal=$balance[0]['balance'];
        }
        else
        {
        $bal=0.00;
        }
        
        $order_complete_amount_total =$bal;
        
        
        $order_complete_amount=$order_complete_amount_total;
        $withdraw_status = array(WITHDRAW_SUCESS); 
        
        $withdraw_status_insert = array(WITHDRAW_PENDING);
        $withdraw_amount = $siteusers->get_withdraw_amount($userid,$withdraw_status); 
        
        $withdraw_amount = count($withdraw_amount) > 0?$withdraw_amount[0]['amount']:0;
        
        $cleared_amount = ($order_complete_amount - $withdraw_amount);
        View::bind_global('balance',$cleared_amount);		
        */
        //balance amount fetch query 
        //================================      	
        $accountbalance_result = $siteusers->get_user_accountbalance($id);
        if (count($accountbalance_result) > 0) {
            $bal = $accountbalance_result[0]['balance'];
        } else {
            $bal = 0;
        }
        View::bind_global('balance', $bal);
        //=================================  
        $user    = $siteusers->get_user_details($id, $this->get_location); // print_r($user);exit;
        $listing = $siteusers->get_user_listingload($start, $limit, $id, $this->get_location); //print_r($listing);exit;
        //$wishlisting=$siteusers->wishlisted_cares($id,$this->get_location);  //print_r($wishlisting);exit;
        $orders  = $siteusers->careservice_orders($id, $this->get_location); //print_r($wishlisting);exit;
        $view    = View::factory(USERVIEW . 'dash_boardscroll')->bind('listing', $listing)->bind('orders', $orders)->bind('userid', $userid)->bind('jobs_likeid', $jobs_likeid)->bind('caregorylist', $caregorylist)->bind('care_usermsg_send', $care_usermsg_send)->bind('care_usermsg_reci', $care_usermsg_reci)->bind('user', $user);
        //View::bind_global('balance',$bal);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        $json['output'] = $view->render();
        echo json_encode($json);
        /** get current user jobs like if logged in **/
        if ($userid = $this->session->get('id')) {
            $jobs_likeids = $siteusers->get_user_jobslikeid($userid); //print_r($jobs_likeids); exit;
            $jobs_likeid  = [];
            foreach ($jobs_likeids as $jobs_likeid_extract) {
                $jobs_likeid[] = $jobs_likeid_extract['care_id'];
            }
        } else {
            $jobs_likeid = null;
        }
        $this->template->content = $view;
        exit;
    }
    public function action_subcategory()
    {
        $catid          = $_POST["catid"];
        $siteusers      = Model::factory('siteusers');
        $site           = Model::factory('site');
        $subcategory    = $site->subcategory($catid);
        $result         = '';
        $subcategorycnt = count($subcategory);
        if ($subcategorycnt > 0) {
            $result .= '<div class="details_tab_middle_inner similar_category' . $catid . '">
                                <div class="create_page">
                                    <ul> ';
            foreach ($subcategory as $sc) {
                $category_image_path = '';
                $category_desc       = '';
                if ($sc["category_image"] != null) {
                    if ((file_exists(DOCROOT . CATEGORYPATH . $sc["category_image"])))
                        $category_image_path = URL_BASE . CATEGORYPATH . $sc["category_image"];
                } else {
                    $category_image_path = CATEGORYPATH . DEFAULT_CATEGORYIMG;
                }
                if (strlen($sc["category_desc"]) > 250) {
                    $category_desc = substr($sc["category_desc"], 0, 250);
                } else {
                    $category_desc = $sc["category_desc"];
                }
                $result .= '<li>
                                     <a style="cursor:pointer;" onclick=createform("' . $catid . '","' . $sc["id"] . '") >

                                        <div class="create_image"><img src="' . $category_image_path . '" alt="' . $sc["category_name"] . '" width="46" height="73"  /></div>
                                         <div class="create_desc">
                                           <b>' . $sc["category_name"] . '</b>
                                           <p>' . $category_desc . '</p> 
                                         </div>
                                    </a>
                                 </li> ';
            }
            $result .= '  </ul>
                        </div>                         
                    </div>';
        } else {
            $result .= "<span style='margin-left:30px;'> No data </span>";
        }
        echo $result;
        exit;
    }
    public function action_subcategorydetails()
    {
        $catid          = $_POST["catid"];
        $scatid         = $_POST["scatid"];
        $siteusers      = Model::factory('siteusers');
        $site           = Model::factory('site');
        $subcategory    = $site->category($scatid);
        $result         = [];
        $subcategorycnt = count($subcategory);
        if ($subcategorycnt > 0) {
            foreach ($subcategory as $sc) {
                $category_image_path = '';
                if ($sc["category_image"] != null) {
                    if ((file_exists(DOCROOT . CATEGORYPATH . $sc["category_image"])))
                        $category_image_path = URL_BASE . CATEGORYPATH . $sc["category_image"];
                } else {
                    $category_image_path = CATEGORYPATH . DEFAULT_CATEGORYIMG;
                }
                $result = [
                    "sid" => $sc["id"],
                    "category_name" => $sc["category_name"],
                    "category_desc" => $sc["category_desc"],
                    "category_image" => $category_image_path,
                    "parent_categoryinfo" => $sc["parent_categoryinfo"]
                ];
            }
        }
        echo json_encode($result);
        exit;
    }
    public function action_subcategoryedit()
    {
        $catid          = $_POST["catid"];
        $siteusers      = Model::factory('siteusers');
        $site           = Model::factory('site');
        $subcategory    = $site->subcategory($catid);
        $result         = "";
        $subcategorycnt = count($subcategory);
        if ($subcategorycnt > 0) {
            $result .= "<select name='subcategory'><option value=''>Choose<option>";
            foreach ($subcategory as $sc) {
                $result .= "<option value='" . $sc["id"] . "'  > " . $sc["category_name"] . " <option>";
            }
            $result .= "</select>";
        } else {
            $result .= "No data";
        }
        echo $result;
        exit;
    }
    /*  ********************** Caregiver  **********************  */
    /* ***************  End  ***************  */
    /**
     * ****action linked_accounts()****
     
     * @return list of people linked accounts
     */
    public function action_linkedaccounts()
    {
        $this->is_login();
        $this->is_login_status();
        $id        = $this->session->get('id');
        $usrid     = $id;
        $siteusers = Model::factory('siteusers');
        $details   = $siteusers->get_people_details($usrid);
        $status    = Arr::get($_REQUEST, 'status');
        $type      = Arr::get($_REQUEST, 'type');
        $cat       = Arr::get($_REQUEST, 'cat');
        // echo $type; exit; 
        //update FB checkbox values
        if ($type == "fb") {
            //case for checking whether fb connection or chcekin
            //==================================================
            switch ($cat) {
                case "fbcheckin":
                    $fb_share_update = $siteusers->fb_connection_update($status, $usrid);
                    break;
                case "fbconn":
                    $fb_con_update = $siteusers->fb_conn_update($status, $usrid);
                    break;
            }
        }
        //update twitter checkbox values 
        if ($type == "twi") {
            switch ($cat) {
                case "twicheckin":
                    $twiter_share_update = $siteusers->twitter_connection_update($status, $usrid);
                    break;
                case "twiconn":
                    $twiter_con_update = $siteusers->twitter_conn_update($status, $usrid);
                    break;
            }
        }
        //update linkedin checkbox values
        if ($type == "lnk") {
            switch ($cat) {
                case "lkncheckin":
                    $lkn_share_update = $siteusers->linkedin_connection_update($status, $usrid);
                    break;
                case "lknconn":
                    $lkn_con_update = $siteusers->linkedin_conn_update($status, $usrid);
                    break;
            }
        }
        $Socialnetwork                    = Model::factory('Socialnetwork');
        $site_socialnetwork               = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork       = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        $site_linkedin_socialnetwork      = $Socialnetwork->get_linkedin_account(LINKDIN, $usrid);
        $view                             = View::factory(USERVIEW . 'linked_accounts')->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_linkedin_socialnetwork', $site_linkedin_socialnetwork)->bind('usrid', $usrid)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = " ";
        $this->title                      = "";
        $this->template->meta_keywords    = "";
    }
    /**
     * ****action_is_people()****
     * @return list of people
     */
    public function action_people()
    {
        $this->is_login();
        $this->is_login_status();
        $siteusers               = Model::factory('siteusers');
        $errors                  = [];
        $id                      = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                   = $id; // $usrid = isset($userid)?$userid:$id;
        $radius                  = Arr::get($_REQUEST, "rad");
        $get_logged_user_details = $siteusers->get_logged_user_details($usrid);
        /**To Get Page Number in pagination**/
        $page_no                 = isset($_GET['page']) ? $_GET['page'] : 0;
        /**To get Active Total user jobs**/
        if ($radius == "All")
            $count_user_list = $siteusers->count_user_list($get_logged_user_details, $usrid, $radius);
        else
            $count_user_list = $siteusers->count_user_list($get_logged_user_details, $usrid);
        //print_r($count_user_list);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => $count_user_list, //total items available
            'items_per_page' => REC_PER_PAGE, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        //print_r($_POST);exit;
        /**To Get All Job List According to the pagination condition**/
        if ($radius == "All") {
            $all_user_list = $siteusers->all_user_list($offset, REC_PER_PAGE, $get_logged_user_details, $usrid, $radius);
        } else {
            $all_user_list = $siteusers->all_user_list($offset, REC_PER_PAGE, $get_logged_user_details, $usrid);
        }
        $all_user_checkinlist        = $siteusers->all_user_checkinlist($offset, REC_PER_PAGE, $get_logged_user_details, $usrid);
        $Socialnetwork               = Model::factory('Socialnetwork');
        $site_socialnetwork          = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork  = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        $site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN, $usrid);
        $people_fav_id               = $this->request->param('id');
        if ($people_fav_id != "") {
            $details_list = $siteusers->add_favorite_people($usrid, $people_fav_id);
            //Message::success(__('sucessful_add_fav_people'));
            $this->request->redirect('users/people');
        }
        $details                          = $siteusers->get_favorite_people($usrid);
        $view                             = View::factory(USERVIEW . 'peoplelist')->bind('all_user_list', $all_user_list)->bind('details', $details)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_linkedin_socialnetwork', $site_linkedin_socialnetwork)->bind('pag_data', $pag_data)->bind('radius', $radius)
        //->bind('matches',$matches)
            ->bind('srch', $_POST) //To get page data in user page
            ->bind('Offset', $offset);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        //$this->template->meta_keywords=" ";
    }
    public function action_siteintro()
    {
        $view                             = View::factory(USERVIEW . 'intro');
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        //$this->template->meta_keywords="";
    }
    /**
     *****action_linkdinconnect()****
     *@purpose of linkdin connect
     */
    public function action_linkdinconnect()
    {
        require_once('oauth.php');
        require_once('feed.php');
        $siteusers           = Model::factory('siteusers');
        $this->domain        = "https://api.linkedin.com/uas/oauth";
        $this->sig_method    = new OAuthSignatureMethod_HMAC_SHA1();
        $this->test_consumer = new OAuthConsumer(LINKDIN_API_KEY, LINKDIN_SECRET_KEY, NULL);
        $this->callback      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?action=getaccesstoken";
        if (!isset($_GET['action'])) {
            $req_req = OAuthRequest::from_consumer_and_token($this->test_consumer, NULL, "POST", $this->domain . "/requestToken");
            $req_req->set_parameter("oauth_callback", $this->callback);
            $req_req->sign_request($this->sig_method, $this->test_consumer, NULL);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POSTFIELDS, '');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $req_req->to_header()
            ]);
            curl_setopt($ch, CURLOPT_URL, $this->domain . "/requestToken");
            curl_setopt($ch, CURLOPT_POST, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            parse_str($output, $oauth);
            if (isset($oauth['oauth_token']) && isset($oauth['oauth_token_secret'])) {
                $this->session->set("oauth_token", $oauth['oauth_token']);
                $this->session->set("oauth_token_secret", $oauth['oauth_token_secret']);
                // print_r($_SESSION['oauth_token']);echo "dfdsfd";
                //echo $_SESSION['oauth_token_secret'];exit;
                //2b9b6b01-f7eb-4744-892f-e13fc9c387da6db519d8-9e71-4aba-9fd9-73b3de15284e
                $this->request->redirect($this->domain . '/authorize?oauth_token=' . $oauth['oauth_token']);
            } else {
                echo '<strong class="p10">Problem in Linkedin API , Please Try again Later !</strong>';
            }
        } else {
            $req_token = new OAuthConsumer($_REQUEST['oauth_token'], $this->session->get("oauth_token_secret"), 1);
            $acc_req   = OAuthRequest::from_consumer_and_token($this->test_consumer, $req_token, "POST", $this->domain . '/accessToken');
            $acc_req->set_parameter("oauth_verifier", $_REQUEST['oauth_verifier']);
            $acc_req->sign_request($this->sig_method, $this->test_consumer, $req_token);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POSTFIELDS, '');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $acc_req->to_header()
            ]);
            curl_setopt($ch, CURLOPT_URL, $this->domain . "/accessToken");
            curl_setopt($ch, CURLOPT_POST, 1);
            $output = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Curl error 1: ' . curl_error($ch);
            }
            curl_close($ch);
            parse_str($output, $oauth);
            if (isset($oauth['oauth_token']) && $oauth['oauth_token_secret']) {
                $url                = "http://api.linkedin.com/v1/people/~:(id,first-name,last-name)";
                $user_profile       = $this->network_activity($oauth['oauth_token'], $oauth['oauth_token_secret'], $url);
                $profile_data       = feed::custom_parse($user_profile, "person");
                $user               = "";
                $uname              = "";
                $image_url          = "";
                $public_profile_url = "";
                if (isset($profile_data->id)) {
                    $user         = $profile_data->id;
                    $fname        = "first-name";
                    $lname        = "last-name";
                    $uname        = $profile_data->$fname . " " . $profile_data->$lname;
                    //get linkedin public profile  url
                    //=================================
                    $url          = "http://api.linkedin.com/v1/people::(id=" . $user . "):(picture-url,public-profile-url)";
                    $user_profile = $this->network_activity($oauth['oauth_token'], $oauth['oauth_token_secret'], $url);
                    $profile_data = feed::custom_parse($user_profile, "person");
                    $picture_url  = "picture-url";
                    if (isset($profile_data->person->$picture_url)) {
                        $image_url = $profile_data->person->$picture_url;
                    }
                    $public_url = "public-profile-url";
                    if (isset($profile_data->person->$public_url)) {
                        $profile_url = $profile_data->person->$public_url;
                    }
                    //set linkedin details in session
                    //================================
                    $this->session->set('linkdin_details', [
                        'username' => $uname,
                        'name' => $uname,
                        'pubprofile' => htmlspecialchars($profile_url),
                        'profileimage' => htmlspecialchars($image_url),
                        'access_token' => $oauth['oauth_token'],
                        'secret_key' => $oauth['oauth_token_secret']
                    ]);
                    $linkdin_add = $this->session->get('linkdin_add');
                    if ($linkdin_add == 'addlinkdin') {
                        $this->request->redirect("socialnetwork/linkedin_user_add");
                    } else {
                        $this->request->redirect("socialnetwork/linkdin_signin");
                    }
                }
            } else {
                $this->request->redirect("users/login");
            }
        }
    }
    /**
     *****action_contactinfo()****
     *@purpose of contact information show
     */
    public function action_contactinfo()
    {
        /*
        
        
        */
        $this->request->redirect("users/contact");
    }
    /**
     *****action_userprofile()****
     *@purpose of myprofile information show
     */
    public function action_userprofile()
    {
        $this->is_login();
        $this->is_login_status();
        $id1                 = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid               = $id1; //$usrid = isset($userid)?$userid:$id1;
        $action              = $this->request->action();
        $id                  = $this->request->param('id');
        $siteusers           = Model::factory('siteusers');
        $authorize           = Model::factory('authorize');
        //check if people connected already or not
        //=========================================
        $check_ppl_connected = $authorize->check_ppl_connected($usrid, $id);
        $details             = $siteusers->get_people_details($id);
        $details1            = $siteusers->get_favorite_people($usrid);
        //print_r($details);exit;
        //get recent connections
        //======================	
        $recent_con          = $siteusers->get_recent_connections($id);
        //get recent connection count
        //===========================
        $rec_con_count       = $siteusers->get_count_recent_connections($id);
        /**To Get Page Number in pagination**/
        //REC_PER_PAGE = 5;
        $page_no             = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset                           = REC_PER_PAGE * ($page_no - 1);
        $pag_data                         = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => $rec_con_count, //total items available
            'items_per_page' => REC_PER_PAGE, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        //get recent connections list
        //============================
        $recent_con_list                  = $siteusers->get_recent_connections_list($offset, REC_PER_PAGE, $id);
        $view                             = View::factory(USERVIEW . 'my_profile')->bind('action', $action)->bind('check_already_connected', $check_ppl_connected)->bind('details', $details)->bind('pag_data', $pag_data)->bind('recent_con', $recent_con_list)->bind('details1', $details1);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        //$this->template->meta_keywords="";
    }
    /**
     *****action_add_favorite_people()****
     *@purpose of add_favorite_people
     */
    public function action_add_favorite_people()
    {
        $siteusers = Model::factory('siteusers');
        $this->is_login();
        $this->is_login_status();
        $userid        = $this->session->get('id');
        //$id = $this->session->get('userid');
        $usrid         = $id; // isset($id)?$id:$userid;
        $people_fav_id = $this->request->param('id');
        $details       = $siteusers->add_favorite_people($usrid, $people_fav_id);
        //Message::success(__('sucessful_add_fav_people'));
        $this->request->redirect('users/people');
        $this->template->meta_description = "";
        $this->title                      = "";
        //$this->template->meta_keywords=" ";
    }
    /**
     *****action_remove_favorite_people()****
     *@purpose of remove_favorite_people
     */
    public function action_remove_favorite_people()
    {
        $siteusers = Model::factory('siteusers');
        $this->is_login();
        $this->is_login_status();
        $userid        = $this->session->get('id');
        //$id = $this->session->get('userid');
        $usrid         = $userid; //isset($id)?$id:$userid;
        $people_fav_id = $this->request->param('id');
        //echo $usrid; echo " " . $people_fav_id; exit;
        $details       = $siteusers->remove_favorite_people($usrid, $people_fav_id);
        //Message::success(__('sucessful_remove_fav_people'));
        $this->request->redirect('users/people');
        $this->template->meta_description = "";
        $this->title                      = "";
        //$this->template->meta_keywords="";
    }
    /**
     * ****action_search()****
     * @param 
     * @return search Jobs listings
     */
    public function action_people_search()
    {
        $this->is_login();
        $this->is_login_status();
        $id          = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid       = $id; // isset($userid)?$userid:$id;
        $radius      = Arr::get($_REQUEST, "rad");
        //$matches = Arr::get($_REQUEST,"matches");
        $siteusers   = Model::factory('siteusers');
        //Find page action in view
        $action      = $this->request->action();
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_people');
        //Post results for search 
        if (isset($search_post) && $_POST) {
            /**To Get Page Number in pagination**/
            $page_no         = isset($_GET['page']) ? $_GET['page'] : 0;
            /**To get Active Total user jobs**/
            $count_user_list = "";
            //$count_user_list = $siteusers->count_all_ppl_search_list($_POST['ppl_search']);
            if ($page_no == 0 || $page_no == 'index')
                $page_no = 1;
            $offset                  = REC_PER_PAGE * ($page_no - 1);
            $pag_data                = Pagination::factory([
                'current_page' => [
                    'source' => 'query_string',
                    'key' => 'page'
                ],
                'total_items' => $count_user_list, //total items available
                'items_per_page' => REC_PER_PAGE, //total items per page
                'view' => 'pagination/punbb' //pagination style
            ]);
            //get filter settings for distance and matches
            //============================================
            $get_logged_user_details = $siteusers->get_logged_user_details($usrid);
            $get_filter_data         = $siteusers->get_user_filter($usrid);
            $all_user_list           = $siteusers->get_all_ppl_search_list($_POST['ppl_search'], $get_logged_user_details, $get_filter_data);
        }
        $people_fav_id = $this->request->param('id');
        if ($people_fav_id != "") {
            $details_list = $siteusers->add_favorite_people($usrid, $people_fav_id);
            Message::success(__('sucessful_add_fav_people'));
            $this->request->redirect('users/people');
        }
        $details                          = $siteusers->get_favorite_people($usrid);
        $Socialnetwork                    = Model::factory('Socialnetwork');
        $site_socialnetwork               = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork       = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        $site_linkedin_socialnetwork      = $Socialnetwork->get_linkedin_account(LINKDIN, $usrid);
        //set data to view file	
        $view                             = View::factory(USERVIEW . 'peoplelist')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('details', $details)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_linkedin_socialnetwork', $site_linkedin_socialnetwork)->bind('radius', $radius)
        //->bind('matches',$matches)
            ->bind('srch', $_POST)->bind('all_user_list', $all_user_list);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        $this->template->meta_keywords    = "";
    }
    /**
     *****action_connect()****
     *@purpose of myprofile information show
     */
    public function action_connect()
    {
        $this->is_login();
        $this->is_login_status();
        $id1       = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid     = $id1; //isset($userid)?$userid:$id1;
        $conid     = $this->request->param('id');
        $connec_id = isset($_POST['conid']) ? $_POST['conid'] : $conid;
        //read all post values in cookies
        //================================	
        if (!empty($_POST)) {
            Cookie::set('conid', $connec_id);
        }
        if ($connec_id == "") {
            //write all post values in cookies if post is empty
            //=================================================
            $connec_id = Cookie::get('conid', NULL);
        }
        $action    = $this->request->action();
        $siteusers = Model::factory('siteusers');
        $authorize = Model::factory('authorize');
        $details   = $siteusers->get_people_details($connec_id);
        //session user details
        $cur_user  = $siteusers->get_people_details($usrid);
        $details1  = $siteusers->get_favorite_people($usrid);
        if (isset($connec_id)) {
            //check if same people already connected
            //======================================
            $check_already_connected = $authorize->check_ppl_connected($usrid, $connec_id);
            if (count($check_already_connected) == 0) {
                //connect people starts here
                //==========================
                $connect                 = $siteusers->people_connect($usrid, $connec_id);
                //print_r($details); print_r($cur_user);  print_r($details1);exit;
                $replace_variables       = [
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_EMAIL => $cur_user[0]['email'],
                    REPLACE_SITELINK => URL_BASE,
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                ];
                //$message                 = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'connect.html', $replace_variables);
                
                if ($this->lang != 'en') {
                    if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/connect-' . $this->lang . '.html')) {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/connect-' . $this->lang . '.html', $replace_variables);
                    } else {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'connect.html', $replace_variables);
                    }
                } else {
                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'connect.html', $replace_variables);
                }
                $mail                    = [
                    "to" => $details[0]['email'],
                    "from" => $this->siteemail,
                    "subject" => "Invitation to connect on taximobility",
                    "message" => $message
                ];
                $emailstatus             = $this->email_send($mail, 'smtp');
                /*
                 * 						
                 $replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>$user_details['username'],REPLACE_EMAIL=>$details[0]['email'],REPLACE_PASSWORD=>$password,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail);
                 $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'registertemp.html',$replace_variables);
                 $mail=array("to" => $details[0]['email'],"from"=>$this->siteemail,"subject"=>"Registration success","message"=>$message);
                 
                 $emailstatus=$this->email_send($mail,'smtp');								
                 //	Message::success(__('sucessfull_registration').$this->app_name);
                 
                 */
                //get current logged in username
                //=============================
                $user_name               = isset($_SESSION['username']) ? $_SESSION['username'] : '';
                $name                    = isset($_SESSION['name']) ? $_SESSION['name'] : '';
                $usrname                 = isset($user_name) ? $user_name : $name;
                $connected_username      = isset($details[0]['username']) ? $details[0]['username'] : '';
                $connected_user_name     = isset($details[0]['name']) ? $details[0]['name'] : '';
                $connected_usrname       = isset($connected_user_name) ? $connected_user_name : $connected_username;
                $check_already_connected = $authorize->check_ppl_connected($usrid, $connec_id);
                $usr_details             = $siteusers->get_my_profile_details($usrid);
                $usr_connect_count       = $siteusers->people_connect_count($usrid);
                $places_connect_count    = $siteusers->places_connect_count($usrid);
                $user_fav_count          = $siteusers->people_fav_count($usrid);
                $places_fav_count        = $siteusers->places_fav_count($usrid);
                $req_list_count          = $siteusers->get_count_allconnection_requestlist($usrid);
                $msgs                    = Model::factory('chat');
                $chat_list_count         = $msgs->count_loggedinuser_chat_list($usrid);
                View::bind_global('usrid', $usrid);
                View::bind_global('usr_details', $usr_details);
                View::bind_global('usr_connect_count', $usr_connect_count);
                View::bind_global('user_fav_count', $user_fav_count);
                View::bind_global('places_fav_count', $places_fav_count);
                View::bind_global('places_connect_count', $places_connect_count);
                View::bind_global('req_list_count', $req_list_count);
                View::bind_global('chat_list_count', $chat_list_count);
                Message::success(__('sucessful_people_connect'));
                //$this->request->redirect('users/userprofile/'.$conid);
            } else {
                Message::success(__('You are already in connection'));
                //$this->request->redirect('users/userprofile/'.$conid);
            }
        } else {
            $this->request->redirect('users/people');
        }
        //get recent connections
        //======================	
        $recent_con    = $siteusers->get_recent_connections($conid);
        //get recent connection count
        //===========================
        $rec_con_count = $siteusers->get_count_recent_connections($conid);
        /**To Get Page Number in pagination**/
        //REC_PER_PAGE = 6;
        $page_no       = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset                           = REC_PER_PAGE * ($page_no - 1);
        $pag_data                         = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => count($recent_con), //total items available
            'items_per_page' => 6, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        //get recent connections list
        //============================
        $recent_con_list                  = $siteusers->get_recent_connections_list($offset, 6, $conid);
        $view                             = View::factory(USERVIEW . 'my_profile')->bind('action', $action)->bind('recent_con', $recent_con_list)->bind('details1', $details1)->bind('check_already_connected', $check_already_connected)->bind('pag_data', $pag_data)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        $this->template->meta_keywords    = "";
    }
    /**
     * ****action_disconnect()****
     * @param 
     * @return all disconnect connection 
     */
    public function action_disconnect()
    {
        $this->is_login();
        $this->is_login_status();
        $id1                     = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                   = $id1; //isset($userid)?$userid:$id1;
        $siteusers               = Model::factory('siteusers');
        $authorize               = Model::factory('authorize');
        $conid                   = $this->request->param('id');
        //check if same people already connected
        //======================================
        $check_already_connected = $authorize->check_ppl_connected($usrid, $conid);
        if (count($check_already_connected) > 0) {
            //disconnect people connection from here
            //=======================================
            $disconnect_ppl = $siteusers->people_disconnect($conid, $usrid);
            Message::success(__('sucessful_people_disconnect'));
            $this->request->redirect('users/userprofile/' . $conid);
        }
        //get recent connections
        //======================	
        $recent_con                       = $siteusers->get_recent_connections($usrid);
        $view                             = View::factory(USERVIEW . 'my_profile')->bind('action', $action)->bind('recent_con', $recent_con)->bind('details1', $details1)->bind('check_already_connected', $check_already_connected)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        $this->template->meta_keywords    = "";
    }
    /**
     * ****action_connectionrequests()****
     * @param 
     * @return all connection requests
     */
    public function action_connectionrequests()
    {
        $this->is_login();
        $this->is_login_status();
        $id               = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid            = $id; //isset($userid)?$userid:$id;	
        $siteusers        = Model::factory('siteusers');
        $errors           = [];
        /**To Get Page Number in pagination**/
        $page_no          = isset($_GET['page']) ? $_GET['page'] : 0;
        /**To get Active Total user jobs**/
        /* To show total counts */
        $count_user_list  = $siteusers->get_count_allconnection_requestlist($usrid); // all request users 	    
        $count_user_clist = $siteusers->get_count_allconnection_confirmlist($usrid); //  all accepted users
        $count_user_dlist = $siteusers->get_count_allconnection_denylist($usrid); // all denied users
        //print_r($count_user_list);exit;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset                           = REC_PER_PAGE * ($page_no - 1);
        $pag_data                         = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => $count_user_list, //total items available
            'items_per_page' => REC_PER_PAGE, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        /**To Get All Job List According to the pagination condition**/
        $all_user_list                    = $siteusers->get_allconnection_requestlist($offset, REC_PER_PAGE, $usrid);
        $all_user_clist                   = $siteusers->get_allconnection_confirmlist($offset, REC_PER_PAGE, $usrid);
        $all_user_dlist                   = $siteusers->get_allconnection_denylist($offset, REC_PER_PAGE, $usrid);
        $view                             = View::factory(USERVIEW . 'connection_requests')->bind('all_user_list', $all_user_list)->bind('all_user_clist', $all_user_clist)->bind('all_user_dlist', $all_user_dlist)->bind('count_user_list', $count_user_list)->bind('count_user_clist', $count_user_clist)->bind('count_user_dlist', $count_user_dlist)->bind('pag_data', $pag_data)->bind('srch', $_POST) //To get page data in user page
            ->bind('Offset', $offset);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = " ";
        $this->template->meta_keywords    = " ";
    }
    /**
     * ****action_confirm_connectionrequests()****
     * @param 
     * @return all connection requests
     */
    public function action_confirm_connectionrequests()
    {
        $this->is_login();
        $this->is_login_status();
        $id                  = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid               = $id; // isset($userid)?$userid:$id;		
        $siteusers           = Model::factory('siteusers');
        //get connection user details
        //=========================== 
        $conid               = Arr::get($_REQUEST, "conid");
        $status              = Arr::get($_REQUEST, "status");
        $confirm             = $siteusers->get_confirm_requestlist($conid, $usrid, $status);
        // Newly added
        $connec_id           = $conid;
        $siteusers           = Model::factory('siteusers');
        $authorize           = Model::factory('authorize');
        $details             = $siteusers->get_people_details($connec_id);
        //session user details
        $cur_user            = $siteusers->get_people_details($usrid);
        $details1            = $siteusers->get_favorite_people($usrid);
        $user_name           = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $name                = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $usrname             = isset($user_name) ? $user_name : $name;
        $connected_username  = isset($details[0]['username']) ? $details[0]['username'] : '';
        $connected_user_name = isset($details[0]['name']) ? $details[0]['name'] : '';
        $connected_usrname   = isset($connected_user_name) ? $connected_user_name : $connected_username;
        if ($status == 1) {
            $base_url            = $base_url1 = "";
            //linkedin wall post	
            //===================
            $linkedin_user_check = $siteusers->check_linkedin_account_exist($usrid);
            if ((count($linkedin_user_check) > 0) && ($linkedin_user_check[0]['connection_share'] == "Y")) {
                $linked_token  = $linkedin_user_check[0]['oauth_token'];
                //$linked_secret = "0ee81f26-b442-4938-b029-926b263bcc5a";
                $linked_secret = $linkedin_user_check[0]['oauth_token_secret'];
                //check logint type
                if (($cur_user[0]['login_type'] == "") || ($details[0]['login_type'] == "")) {
                    $base_url  = URL_BASE . USER_IMGPATH_PROFILE . $details[0]['photo'];
                    $base_url1 = URL_BASE . USER_IMGPATH_PROFILE . $cur_user[0]['photo'];
                } else {
                    $base_url  = $details[0]['photo'];
                    $base_url1 = $cur_user[0]['photo'];
                }
                $status                = $usrname . " is connected with " . $connected_usrname;
                $linkedin_post_updates = $this->post_updates($linked_token, $linked_secret, $status, "https://api.linkedin.com/v1/people/~/current-status");
            }
            //Facebook wall post	
            //===================
            $fb_user_check = $siteusers->check_fb_account_exist($usrid);
            if ((count($fb_user_check) > 0) && ($fb_user_check[0]['connection_share'] == "Y")) {
                //check logint type
                if (($cur_user[0]['login_type'] == "") || ($details[0]['login_type'] == "")) {
                    $base_url  = URL_BASE . USER_IMGPATH_PROFILE . $details[0]['photo'];
                    $base_url1 = URL_BASE . USER_IMGPATH_PROFILE . $cur_user[0]['photo'];
                } else {
                    $base_url  = $details[0]['photo'];
                    $base_url1 = $cur_user[0]['photo'];
                }
                $this->facebook_status_update($base_url1 . " " . $usrname . " is connected with " . $connected_usrname . " Please Check with your taximobility Account " . URL_BASE, $base_url);
            }
            //Twitter wall post
            //==================
            $twitter_user_check = $siteusers->check_twitterorg_account_exist($usrid);
            if ((count($twitter_user_check) > 0) && ($twitter_user_check[0]['connection_share'] == "Y")) {
                //check logint type
                if (($cur_user[0]['login_type'] == "") || ($details[0]['login_type'] == "")) {
                    $base_url  = URL_BASE . USER_IMGPATH_PROFILE . $details[0]['photo'];
                    $base_url1 = URL_BASE . USER_IMGPATH_PROFILE . $cur_user[0]['photo'];
                } else {
                    $base_url  = $details[0]['photo'];
                    $base_url1 = $cur_user[0]['photo'];
                }
                $this->twitter_status_update($base_url1 . " " . $usrname . " is connected with " . $connected_usrname . " Please Check with your taximobility Account " . URL_BASE, $base_url);
            }
            // Ends here
            Message::success(__('sucessful_people_connect_confirm'));
        } else {
            Message::success(__('sucessful_people_connect_deny'));
        }
        $this->request->redirect("users/connectionrequests");
        $view                             = View::factory(USERVIEW . 'connection_requests')->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('srch', $_POST) //To get page data in user page
            ->bind('Offset', $offset);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = " ";
        $this->template->meta_keywords    = " ";
    }
    /**
     * ****action_filter()****
     * @param 
     * @return search Jobs listings
     */
    public function action_filter()
    {
        $this->is_login();
        $this->is_login_status();
        $action                           = $this->request->action();
        $id                               = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                            = $id; //isset($userid)?$userid:$id;
        $siteusers                        = Model::factory('siteusers');
        $details                          = $siteusers->get_people_details($usrid);
        $get_filter_data                  = $siteusers->get_user_filter($usrid);
        $view                             = View::factory(USERVIEW . 'filter')->bind('action', $action)->bind('get_filter_data', $get_filter_data)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        $this->template->meta_keywords    = "";
    }
    /**
     * ****action_filter()****
     * @param 
     * @return search Jobs listings
     
     */
    public function action_filter_settings()
    {
        $this->is_login();
        $this->is_login_status();
        $id                        = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                     = $id; // isset($userid)?$userid:$id;
        $radius                    = Arr::get($_REQUEST, 'rad');
        $matches                   = Arr::get($_REQUEST, 'match');
        $action                    = $this->request->action();
        $siteusers                 = Model::factory('siteusers');
        //check filter settings availbale or not to user
        //==============================================
        $check_filter_existforuser = $siteusers->check_filter_existforuser($usrid);
        if ($check_filter_existforuser > 0) {
            //save filter settings for particular user
            $update_data = $siteusers->filter_settings_update($radius, $matches, $usrid);
        } else {
            //save filter settings for particular user
            $save_data = $siteusers->filter_settings($radius, $matches, $usrid);
        }
        //SUCCESS once details are saved
        //=============================
        Message::success(__('sucessful_settings_update'));
        $details                          = $siteusers->get_people_details($usrid);
        //get filter details
        //===================
        $get_filter_data                  = $siteusers->get_user_filter($usrid);
        $view                             = View::factory(USERVIEW . 'filter')->bind('action', $action)->bind('get_filter_data', $get_filter_data)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "";
        $this->template->meta_keywords    = " ";
    }
    /**
     * ****action_foursquare_connect()****
     * @param 
     * @return connect on foursquare
     */
    public function action_foursquare_connect()
    {
        //GET oauth token
        //================
        $token        = arr::get($_REQUEST, 'accessid');
        //import siteusers model
        //=======================
        $siteusers    = Model::factory('siteusers');
        //curl https://api.foursquare.com/v2/users/self/checkins?oauth_token=ACCESS_TOKEN
        $user_details = json_decode($this->curl_function("https://api.foursquare.com/v2/users/self?oauth_token=$token"));
        //print_r($user_details);exit;
        //spiliting foursquare details
        foreach ($user_details->response as $user):
        endforeach;
        $errors            = [];
        $email             = isset($user->contact->email) ? $user->contact->email : '';
        $fname             = isset($user->firstName) ? $user->firstName : '';
        $photo             = isset($user->photo) ? $user->photo : '';
        $lat               = isset($this->get_location[8]) ? $this->get_location[8] : '';
        $lng               = isset($this->get_location[9]) ? $this->get_location[9] : '';
        $city              = isset($this->get_location[6]) ? $this->get_location[6] : '';
        $state             = isset($this->get_location[5]) ? $this->get_location[5] : '';
        $country           = isset($this->get_location[4]) ? $this->get_location[4] : '';
        $country_code      = isset($this->get_location[3]) ? $this->get_location[3] : '';
        $ip                = isset($this->get_location[2]) ? $this->get_location[2] : '';
        //check user email exist in Taxi db
        //==================================
        $email_exist_check = $siteusers->check_email($email);
        //get user details if email exist
        //===============================
        $get_email         = $siteusers->get_peopleprofile_details($email);
        if (count($get_email) == 0) {
            //get form submit request
            $submit = arr::get($_REQUEST, 'submit_social_acc_signup');
            $email  = arr::extract($_POST, [
                'email'
            ]);
            if (isset($submit)) {
                $validate = $siteusers->validate_email($email);
                if ($validate->check()) {
                    $password = Commonfunction::randomkey_generator();
                    if (isset($user_details)) {
                        $insert = $this->commonmodel->insert(PEOPLE, [
                            'username' => $fname,
                            'email' => $email['email'],
                            'photo' => $photo,
                            'password' => md5($password),
                            'login_type' => FOURSQUARE,
                            'status' => ACTIVE,
                            'latitude' => $lat,
                            'langitude' => $lng,
                            'login_city' => $city,
                            'login_state' => $state,
                            'login_country' => $country,
                            'login_country_code' => $country_code,
                            'created_date' => Commonfunction::getCurrentTimeStamp(),
                            'user_type' => NORMALUSER
                        ]);
                        if ($insert) {
                            $this->session->set('id', $insert[0]);
                            $this->session->set('username', $fname);
                            $details           = $siteusers->get_twitter_usr_details($email['email']);
                            $replace_variables = [
                                REPLACE_LOGO => EMAILTEMPLATELOGO,
                                REPLACE_SITENAME => $this->app_name,
                                REPLACE_USERNAME => ucfirst($details[0]['username']),
                                REPLACE_EMAIL => $details[0]['email'],
                                REPLACE_PASSWORD => $details[0]['password'],
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => $this->siteemail,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            ];
                            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'registertemp.html', $replace_variables);
                            $mail              = [
                                "to" => $details[0]['email'],
                                "from" => $this->siteemail,
                                "subject" => "Registration success",
                                "message" => $message
                            ];
                            $emailstatus       = $this->email_send($mail, 'smtp');
                            Message::success(__('sucessfull_registration') . $this->app_name);
                            $this->request->redirect("/");
                        }
                    }
                } else {
                    $errors = $validate->errors('errors');
                }
            }
            $view                    = View::factory(USERVIEW . 'social_account_signup')->bind('errors', $errors)->bind('email_exist', $email_exist);
            $this->template->content = $view;
        } else {
            $this->commonmodel->update(PEOPLE, [
                'last_login' => commonfunction::getCurrentTimeStamp(),
                'latitude' => $lat,
                'langitude' => $lng,
                'login_city' => $city,
                'login_state' => $state,
                'login_country' => $country,
                'login_country_code' => $country_code
            ], 'id', $get_email[0]['id']);
            $this->session->set('userid', $get_email[0]['id']);
            $this->session->set('username', $get_email[0]['username']);
            $this->session->set('email', $get_email[0]['email']);
            Message::success(__('logged_in_successfully', [
                ':param' => ($this->app_name)
            ]));
            $this->session->delete('oauth_token', 'oauth_token_secret');
            $this->request->redirect("users/editprofile");
        }
    }
    /**
     *****curl_function****
     *@ purpose of social network auto post and connect
     */
    public function curl_function($req_url = "", $type = "", $arguments = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $req_url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        if ($type == "POST") {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $arguments);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    /**
     * ****action_radiusfilter_search()****
     * @param 
     * @return result by for radius filter selct 
     */
    public function action_radiusfilter_search()
    {
        $this->is_login();
        $this->is_login_status();
        $id                      = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                   = $id; //isset($userid)?$userid:$id;	
        //get posted radius values and set that in list
        //=============================================
        $radius                  = Arr::get($_REQUEST, "rad");
        $siteusers               = Model::factory('siteusers');
        $errors                  = [];
        $get_logged_user_details = $siteusers->get_logged_user_details($usrid);
        /**To Get Page Number in pagination**/
        $page_no                 = isset($_GET['page']) ? $_GET['page'] : 0;
        /**To get Active Total user jobs**/
        $count_user_list         = $siteusers->count_user_list($get_logged_user_details, $usrid, $radius);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset                      = REC_PER_PAGE * ($page_no - 1);
        $pag_data                    = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => $count_user_list, //total items available
            'items_per_page' => REC_PER_PAGE, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        /**To Get All Job List According to the pagination condition**/
        $all_user_list               = $siteusers->all_user_list($offset, REC_PER_PAGE, $get_logged_user_details, $usrid, $radius);
        $all_user_checkinlist        = $siteusers->all_user_checkinlist($offset, REC_PER_PAGE, $get_logged_user_details, $usrid);
        $Socialnetwork               = Model::factory('Socialnetwork');
        $site_socialnetwork          = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork  = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        $site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN, $usrid);
        $people_fav_id               = $this->request->param('id');
        if ($people_fav_id != "") {
            $details_list = $siteusers->add_favorite_people($usrid, $people_fav_id);
            //Message::success(__('sucessful_add_fav_people'));
            $this->request->redirect('users/people');
        }
        $details                          = $siteusers->get_favorite_people($usrid);
        $view                             = View::factory(USERVIEW . 'peoplelist')->bind('all_user_list', $all_user_list)->bind('details', $details)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_linkedin_socialnetwork', $site_linkedin_socialnetwork)->bind('pag_data', $pag_data)->bind('radius', $radius)->bind('srch', $_POST) //To get page data in user page
            ->bind('Offset', $offset);
        $this->template->content          = $view;
        $this->template->meta_description = "";
        $this->title                      = "Taxi | Web  Application | People ";
        $this->template->meta_keywords    = " ";
    }
    public function action_recent_chat()
    {
        $this->is_login();
        $this->is_login_status();
        $id1       = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid     = $id1; //isset($userid)?$userid:$id1;
        $action    = $this->request->action();
        $val       = $this->request->param('id');
        $siteusers = Model::factory('siteusers');
        $authorize = Model::factory('authorize');
        $chat      = Model::factory('chat');
        //read all post values in cookies
        //================================	
        if ($val) {
            Cookie::set('val', $val);
        }
        if ($val == "") {
            //write all post values in cookies if post is empty
            //=================================================
            $val = Cookie::get('val', NULL);
        }
        if ($val != "" && $val != 0) {
            //get parent and sub parent ids
            //==============================
            $par_id              = arr::get($_REQUEST, 'parentid');
            $subpar_id           = arr::get($_REQUEST, 'subparentid');
            $srtype              = arr::get($_REQUEST, 'srtype');
            //check if people connected already or not
            //=========================================
            $check_ppl_connected = $authorize->check_ppl_connected($usrid, $val);
            $details             = $siteusers->get_people_details($val);
            $details1            = $siteusers->get_favorite_people($usrid);
            //get recent connections
            //======================	
            $recent_con          = $siteusers->get_recent_connections($val);
            //get chat list
            //==============
            //$chat_list = $chat->get_chat_details($usrid,$val);
            //$chat_list_count = count($chat_list);
            /**To Get Page Number in pagination**/
            //REC_PER_PAGE = 6;
            /*$page_no= isset($_GET['page'])?$_GET['page']:0;
            
            if($page_no==0 || $page_no=='index')
            $page_no = 1;
            $offset=6*($page_no-1);
            
            
            $pag_data = Pagination::factory(array (
            'current_page' => array('source' => 'query_string', 'key' => 'page'),
            'total_items'    =>count($chat_list_count),  //total items available
            'items_per_page'  => 6,  //total items per page
            'view' => 'pagination/punbb',  //pagination style
            
            ));*/
            //get recent connections list
            //============================
            //$recent_con_list = $siteusers->get_recent_connections_list($offset,6,$val);	
            //get form submit request
            $search_post         = arr::get($_REQUEST, 'chat_reply');
            if (isset($search_post) && $_POST) {
                $validator = $chat->validate_add_chat(arr::extract($_POST, [
                    'chat_msg'
                ]));
                if ($validator->check()) {
                    $add_chat = $chat->add_chat_message($usrid, $val, $_POST, $par_id, $subpar_id, $srtype);
                    if ($add_chat > 0) {
                        Message::success(__('add_chat_message'));
                        $this->request->redirect('users/recent_chat/' . $val);
                    }
                } else {
                    //validation failed, get errors
                    $errors = $validator->errors('errors');
                }
            }
            $view                             = View::factory(USERVIEW . 'my_profile')->bind('action', $action)->bind('check_already_connected', $check_ppl_connected)->bind('details', $details)->bind('val', $val)->bind('pag_data', $pag_data)->bind('validator', $validator)->bind('errors', $errors)
            //->bind('chat_list',$chat_list)
                
            //->bind('recent_con',$recent_con_list)
                ->bind('details1', $details1);
            $this->template->content          = $view;
            $this->template->meta_description = "";
            $this->title                      = "Taxi | Web  Application | Chat";
            $this->template->meta_keywords    = " ";
        } else {
            Message::error(__('err_user_not_authorized'));
            $this->request->redirect("/");
        }
    }
    public function action_terms()
    {
        $siteusers                        = Model::factory('siteusers');
        $res                              = $siteusers->page_details_terms();
        $view                             = View::factory(USERVIEW . 'cterms')->bind('res', $res[0]);
        $this->template->content          = $view;
        $this->template->meta_description = "Terms";
        $this->title                      = "Terms";
        $this->template->meta_keywords    = " Taxi,Terms";
    }
    public function action_privacy()
    {
        $siteusers                        = Model::factory('siteusers');
        $res                              = $siteusers->page_details_privacy();
        $view                             = View::factory(USERVIEW . 'cprivacy')->bind('res', $res[0]);
        $this->template->content          = $view;
        $this->template->meta_description = "Privacy";
        $this->title                      = "Privacy";
        $this->template->meta_keywords    = " Taxi,Privacy";
    }
    public function action_help()
    {
        $siteusers                        = Model::factory('siteusers');
        $res                              = $siteusers->page_details_help();
        $view                             = View::factory(USERVIEW . 'chelp')->bind('res', $res[0]);
        $this->template->content          = $view;
        $this->template->meta_description = "Help";
        $this->title                      = "Help";
        $this->template->meta_keywords    = " Taxi,Help";
    }
    public function action_press()
    {
        $siteusers                        = Model::factory('siteusers');
        $res                              = $siteusers->page_details_press();
        $view                             = View::factory(USERVIEW . 'cpress')->bind('res', $res[0]);
        $this->template->content          = $view;
        $this->template->meta_description = "Press";
        $this->title                      = "Press";
        $this->template->meta_keywords    = " Taxi,Press";
    }
    public function action_contact()
    {
        $siteusers   = Model::factory('siteusers');
        $res         = $siteusers->page_details_contact();
        $view        = View::factory(USERVIEW . 'ccontact')->bind('data', $_POST)->bind('res', $res[0])->bind('errors', $errors);
        $search_post = arr::get($_REQUEST, 'send_submit');
        //validation starts here	
        if (isset($search_post) && Validation::factory($_POST)) {
            //****send validation fields into model for checking rules***//
            //===================================================================
            $validator = $siteusers->validate_contact(arr::extract($_POST, [
                'name1',
                'email',
                'phone',
                'type',
                'subject',
                'message'
            ]));
            //validation starts here			 		
            if ($validator->check()) {
                //*********page edit process starts here*************//
                //===========================================================
                $status            = $siteusers->savecontact($_POST);
                $follow_cont       = $this->emailtemplate->get_template_content(CONTACT_US);
                $subject           = $follow_cont[0]['email_subject'];
                $content           = $follow_cont[0]['email_content'];
                $replace_variables = [
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    NAME => isset($_POST['name1']) ? $_POST['name1'] : '',
                    REPLACE_EMAIL => isset($_POST['email']) ? $_POST['email'] : '',
                    SUBJECT => isset($_POST['subject']) ? $_POST['subject'] : '',
                    MSG_DESCRIPTION => isset($_POST['message']) ? $_POST['message'] : '',
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    SITE_DESCRIPTION => $this->app_description,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                ];
                $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
                $mail              = [
                    "to" => $this->siteemail,
                    "from" => $this->siteemail,
                    "subject" => $subject,
                    "message" => $message
                ];
                $emailstatus       = $this->email_send($mail, 'smtp');
                //Flash message 
                Message::success('Message has been sent to admin successfully'); // __('') Sucessfully saved
                //page redirection after success
                $this->request->redirect("/users/contact");
            } else {
                //validation failed, get errors
                $errors = $validator->errors('errors');
            }
        }
        $this->template->content          = $view;
        $this->template->meta_description = "Contact";
        $this->title                      = "Contact";
        $this->template->meta_keywords    = " Taxi,Contact";
    }
    /*public function action_aboutus()
    {
    $siteusers = Model::factory('siteusers');
    $res=$siteusers->page_details_aboutus();
    $view=View::factory(USERVIEW.'caboutus')
    ->bind('res',$res[0]);
    $this->template->content=$view;
    $this->template->meta_description="About us";
    $this->title="About us";
    $this->template->meta_keywords="Taxi, About us";			
    }	
    
    
    public function action_jobs()
    {
    $siteusers = Model::factory('siteusers');
    $res=$siteusers->page_details_jobs();
    $view=View::factory(USERVIEW.'cjobs')
    ->bind('res',$res[0]);
    $this->template->content=$view;
    $this->template->meta_description="Jobs";
    $this->title="Jobs";
    $this->template->meta_keywords="Taxi, Jobs";			
    }*/
    //Withdraw Request
    public function action_withdraw() //account balance link
    {
        $action = $this->request->action();
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        $userid                = $this->session->get('id');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors                = [];
        $this->userjobs        = Model::factory('siteusers');
        $clear_amount          = isset($_POST['clear_amount']) ? $_POST['clear_amount'] : "";
        //$palpal_exist= $this->userjobs->get_paypal_account($userid);
        $withdraw_min_max      = $this->userjobs->get_withdraw_min_max($userid);
        // $order_complete_amount = $this->userjobs->get_order_complete_amount($userid);
        // $order_complete_amount_total = count($order_complete_amount) > 0?$order_complete_amount[0]['total_order_amount']:0;
        /*    
        $balance=$this->userjobs->getcaregiver_balance($userid);
        if(count($balance)>0)
        {
        $bal=$balance[0]['balance'];
        }
        else
        {
        $bal=0.00;
        }                
        
        $order_complete_amount_total =$bal;
        
        
        //Subtracting commission amount from total amount
        //$order_complete_amount=$order_complete_amount_total-$order_complete_amount[0]['commission_amount'];
        
        
        $order_complete_amount=$order_complete_amount_total;
        $withdraw_status = array(WITHDRAW_SUCESS); //add withdraw status Pending + Success
        
        $withdraw_status_insert = array(WITHDRAW_PENDING);
        $withdraw_amount = $this->userjobs->get_withdraw_amount($userid,$withdraw_status); 
        
        $withdraw_amount = count($withdraw_amount) > 0?$withdraw_amount[0]['amount']:0;
        
        //$cleared_amount = number_format($order_complete_amount - $withdraw_amount,4);
        $cleared_amount = ($order_complete_amount - $withdraw_amount);
        
        View::bind_global('balance',$cleared_amount);
        */
        //balance amount fetch query 
        //================================      	
        $accountbalance_result = $this->userjobs->get_user_accountbalance($userid);
        if (count($accountbalance_result) > 0) {
            $bal = $accountbalance_result[0]['balance'];
        } else {
            $bal = 0;
        }
        View::bind_global('balance', $bal);
        //=================================       	  
        $care_usermsg_send = $this->userjobs->getcareuser_msg_send($userid);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        $errors            = [];
        $this->userjobs    = Model::factory('siteusers');
        $view              = View::factory(USERVIEW . 'withdraw')->bind('total_amount', $bal); //$cleared_amount	
        /* ***********    Global decalration  ***********  */
        $rating            = $this->userjobs->getRatingDeatils($userid);
        $care_usermsg_send = $this->userjobs->getcareuser_msg_send($userid);
        $followers         = $this->userjobs->get_user_carefollows($userid); //get_followers
        $wish_list         = $this->userjobs->getWishlist($userid);
        View::bind_global('rating_des', $rating);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        View::bind_global('followers', $followers);
        View::bind_global('wish_list', $wish_list);
        /* ***********   Global decalration   ***********  */
        $this->template->meta_description = "Balance";
        $this->title                      = "Balance";
        $this->template->meta_keywords    = "Taxi, Balance";
        $this->template->content          = $view;
    }
    public function action_get_payment_setting()
    {
        $out                        = "";
        $site_currency              = !empty($site_settings) ? $site_settings[0]['site_paypal_currency'] : '';
        $pay_method                 = isset($_POST['paymethod']) ? $_POST['paymethod'] : '';
        $this->userjobs             = Model::factory('siteusers');
        $withdraw_settings_details  = $this->userjobs->get_withdraw_setting($pay_method);
        $withdraw_min               = isset($withdraw_settings_details[0]['min_amount']) ? $withdraw_settings_details[0]['min_amount'] : '';
        $withdraw_max               = isset($withdraw_settings_details[0]['max_amount']) ? $withdraw_settings_details[0]['max_amount'] : '';
        $withdraw_commission_status = isset($withdraw_settings_details[0]['enable_transaction_fee']) ? $withdraw_settings_details[0]['enable_transaction_fee'] : '';
        $withdraw_commission_amount = isset($withdraw_settings_details[0]['transaction_fee']) ? $withdraw_settings_details[0]['transaction_fee'] : '';
        $out .= __('min_withdraw_label') . ' : ' . $site_currency . number_format($withdraw_min, 2) . '<br/>';
        $out .= __('max_withdraw_label') . ' : ' . $site_currency . number_format($withdraw_max, 2) . '<br/>';
        if ($withdraw_commission_status == 'Y') {
            $out .= __('Withdraw commission amount') . ' : ' . ' ' . $site_currency . number_format($withdraw_commission_amount, 2) . "%";
        }
        echo $out;
        exit;
    }
    //Withdraw Request
    public function action_withdrawal()
    {
        $action = $this->request->action();
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        $userid                = $this->session->get('id');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors                = [];
        $this->userjobs        = Model::factory('siteusers');
        $clear_amount          = isset($_POST['clear_amount']) ? $_POST['clear_amount'] : "";
        /*      
        $balance=$this->userjobs->getcaregiver_balance($userid);
        if(count($balance)>0)
        {
        $bal=$balance[0]['balance'];
        }
        else
        {
        $bal=0.00;
        } 
        //$order_complete_amount = $this->userjobs->get_order_complete_amount($userid);
        //$order_complete_amount_total = count($order_complete_amount) > 0?$order_complete_amount[0]['total_order_amount']:0;
        
        $order_complete_amount_total =$bal;
        
        //Subtracting commission amount from total amount
        //$order_complete_amount=$order_complete_amount_total-$order_complete_amount[0]['commission_amount'];
        
        
        $order_complete_amount=$order_complete_amount_total;
        $withdraw_status = array(WITHDRAW_SUCESS); //add withdraw status Pending + Success
        $withdraw_status_insert = array(WITHDRAW_PENDING);
        $withdraw_amount = $this->userjobs->get_withdraw_amount($userid,$withdraw_status); 
        $withdraw_amount = count($withdraw_amount) > 0?$withdraw_amount[0]['amount']:0;
        //$cleared_amount = number_format($order_complete_amount - $withdraw_amount,4);
        $cleared_amount = ($order_complete_amount - $withdraw_amount);
        View::bind_global('balance',$cleared_amount);
        
        */
        /**To get available amount in logged user account**/
        //$available_seller_balance=Commonfunction::get_user_balance($userid,"".ORDER_COMPLETED."","".FROM_ORDER."");
        //$cancel_order_balance=Commonfunction::get_user_balance($userid,"".ORDER_CANCELLED."","".ORDER_CANCELLED."");
        //balance amount fetch query 
        //================================      	
        $accountbalance_result = $this->userjobs->get_user_accountbalance($userid);
        if (count($accountbalance_result) > 0) {
            $bal = $accountbalance_result[0]['balance'];
        } else {
            $bal = 0;
        }
        View::bind_global('balance', $bal);
        //=================================    
        // withdraw avilable balance :: withdraw pending amount - with acc balance
        //========================================================================    
        $order_complete_amount_total = $bal;
        $order_complete_amount       = $order_complete_amount_total;
        $withdraw_status             = [
            WITHDRAW_SUCESS
        ];
        $withdraw_status_insert      = [
            WITHDRAW_PENDING
        ];
        $withdraw_amount             = $this->userjobs->get_withdraw_pending_amount($userid, $withdraw_status);
        $withdraw_amount             = count($withdraw_amount) > 0 ? $withdraw_amount[0]['amount'] : 0;
        $cleared_amount              = ($order_complete_amount - $withdraw_amount);
        //=========================================================================                  
        /**To get total amount by adding reversed amount and cleared amount**/
        $total_amount                = $bal; //$cleared_amount; // +$cancel_order_balance;
        $view                        = View::factory(USERVIEW . 'withdrawal')->bind('validator', $validator)->bind('errors', $errors)->bind('withdraw_settings_details', $withdraw_settings_details)->bind('order_complete_amount', $order_complete_amount)->bind('withdraw_amount', $withdraw_amount)->bind('cleared_amount', $cleared_amount)->bind('withdraw_commission_status', $withdraw_commission_status)->bind('withdraw_commission_amount', $withdraw_commission_amount)->bind('withdraw_error', $withdraw_error)->bind('total_suggestions', $total_suggestions)->bind('category_selected', $category_name)->bind('total_amount', $total_amount); //To get offset value in user page
        //$view=View::factory(USERVIEW.'cjobs')->bind('res',$res[0]);       
        if (isset($_POST['amount']) && Validation::factory($_POST)) {
            $payment_method             = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';
            $withdraw_settings_details  = $this->userjobs->get_withdraw_setting($payment_method);
            $withdraw_min               = isset($withdraw_settings_details[0]['min_amount']) ? $withdraw_settings_details[0]['min_amount'] : '';
            $withdraw_max               = isset($withdraw_settings_details[0]['max_amount']) ? $withdraw_settings_details[0]['max_amount'] : '';
            $withdraw_commission_status = isset($withdraw_settings_details[0]['enable_transaction_fee']) ? $withdraw_settings_details[0]['enable_transaction_fee'] : '';
            $withdraw_commission_amount = isset($withdraw_settings_details[0]['transaction_fee']) ? $withdraw_settings_details[0]['transaction_fee'] : '';
            $validator                  = $this->userjobs->validate_withdraw_amount(arr::extract($_POST, [
                'payment_method',
                'amount'
            ]), $withdraw_min, $withdraw_max);
            if ($validator->check()) {
                if ($_POST['amount'] > 0) {
                    $amount                     = $_POST['amount'];
                    $random_key                 = Commonfunction::randomkey_generator($length = 17);
                    $withdraw_commission_amount = $amount * ($withdraw_commission_amount / 100);
                    /**To get withdraw amount settings from admin**/
                    $withdraw_commission_amount = ($withdraw_commission_status == 'Y') ? $withdraw_commission_amount : 0;
                    /**Adding commission with withdraw request amount if commission is set **/
                    $withdraw_request_amount    = $amount + $withdraw_commission_amount;
                    /**Check entered amount with cleared amount, if entered amount is less than or equal to cleared amount transaction will happens else not allow**/
                    if ($withdraw_request_amount <= $cleared_amount) //$total_amount
                        {
                        $withdraw = $this->userjobs->widthdraw_amount($random_key, $amount, $userid, $withdraw_status_insert, $clear_amount, $withdraw_commission_amount, $payment_method);
                        //Message::success(__('Withdrawal request sent'));		
                        Message::success('Withdraw request has been sent to admin successfully');
                        $this->request->redirect('/users/withdrawalhistory');
                    } else {
                        //Message::error(__('Balance insufficient'));
                        //  $req_amt=$_POST["amount"]+$withdraw_commission_amount; //min_amount
                        Message::error(__('Insufficient Balance.You only have $' . $cleared_amount . ' for fund request')); //'.$req_amt.' required you to make withdraw
                    }
                } else {
                    Message::error(__('Amount should be greater than Zero'));
                }
                $validator = null;
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $care_usermsg_send = $this->userjobs->getcareuser_msg_send($userid);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        //view
        /* ***********    Global decalration  ***********  */
        $rating            = $this->userjobs->getRatingDeatils($userid);
        $care_usermsg_send = $this->userjobs->getcareuser_msg_send($userid);
        $followers         = $this->userjobs->get_user_carefollows($userid); //get_followers
        $wish_list         = $this->userjobs->getWishlist($userid);
        View::bind_global('rating_des', $rating);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        View::bind_global('followers', $followers);
        View::bind_global('wish_list', $wish_list);
        /* ***********   Global decalration   ***********  */
        $this->template->content          = $view;
        $this->template->meta_description = "Withdrawal";
        $this->title                      = "Withdrawal";
        $this->template->meta_keywords    = "Taxi, Withdrawal";
    }
    public function action_withdrawalhistory()
    {
        $userid                = $this->session->get('id');
        $view                  = View::factory(USERVIEW . 'withdrawalhistory')->bind('all_withdraw_amount', $all_withdraw_amount)->bind('pag_data', $pag_data)->bind('Offset', $offset);
        $userjobs              = Model::factory('siteusers');
        /*
        $balance=$userjobs->getcaregiver_balance($userid);
        if(count($balance)>0)
        {
        $bal=$balance[0]['balance'];
        }
        else
        {
        $bal=0.00;
        }                
        
        $order_complete_amount_total =$bal;
        $order_complete_amount=$order_complete_amount_total;
        $withdraw_status = array(WITHDRAW_SUCESS); //add withdraw status Pending + Success
        
        $withdraw_status_insert = array(WITHDRAW_PENDING);
        $withdraw_amount = $userjobs->get_withdraw_amount($userid,$withdraw_status); 
        
        $withdraw_amount = count($withdraw_amount) > 0?$withdraw_amount[0]['amount']:0;
        
        //$cleared_amount = number_format($order_complete_amount - $withdraw_amount,4);
        $cleared_amount = ($order_complete_amount - $withdraw_amount);
        View::bind_global('balance',$cleared_amount);   
        
        */
        //balance amount fetch query 
        //================================      	
        $accountbalance_result = $userjobs->get_user_accountbalance($userid);
        if (count($accountbalance_result) > 0) {
            $bal = $accountbalance_result[0]['balance'];
        } else {
            $bal = 0;
        }
        View::bind_global('balance', $bal);
        //=================================   
        $page_no       = isset($_GET['page']) ? $_GET['page'] : 0;
        /**To get Active Total user jobs**/
        $withdraw_page = $userjobs->count_page_withdraw($userid);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = 1;
        $offset            = 10 * ($page_no - 1);
        $pag_data          = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'total_items' => $withdraw_page, //total items available
            'items_per_page' => 10, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ]);
        $care_usermsg_send = $userjobs->getcareuser_msg_send($userid);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        $all_withdraw_amount = $userjobs->get_withdraw_page($userid, $offset, 10);
        /* ***********    Global decalration  ***********  */
        $rating              = $userjobs->getRatingDeatils($userid);
        $care_usermsg_send   = $userjobs->getcareuser_msg_send($userid);
        $followers           = $userjobs->get_user_carefollows($userid); //get_followers
        $wish_list           = $userjobs->getWishlist($userid);
        View::bind_global('rating_des', $rating);
        View::bind_global('care_usermsg_sen', $care_usermsg_send);
        View::bind_global('followers', $followers);
        View::bind_global('wish_list', $wish_list);
        /* ***********   Global decalration   ***********  */
        $this->template->content          = $view;
        $this->template->meta_description = "Withdrawal history";
        $this->title                      = "Withdrawal history";
        $this->template->meta_keywords    = "Taxi, Withdrawal history";
    }
    public function action_change_location()
    {
        $userid                           = $this->session->get('id');
        $view                             = View::factory(USERVIEW . 'changelocation')->bind('all_withdraw_amount', $all_withdraw_amount)->bind('pag_data', $pag_data)->bind('Offset', $offset);
        $userjobs                         = Model::factory('siteusers');
        $all_withdraw_amount              = $userjobs->get_withdraw_page($userid, $offset, 10);
        $this->template->content          = $view;
        $this->template->meta_description = "Withdrawal history";
        $this->title                      = "Withdrawal history";
        $this->template->meta_keywords    = "Taxi, Withdrawal history";
    }
    public function action_email_notification()
    {
        $siteusers = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = [];
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        $userid                        = $this->session->get('id');
        $id                            = $userid;
        $usrid                         = $id = $userid;
        $Socialnetwork                 = Model::factory('Socialnetwork');
        $site_socialnetwork            = $Socialnetwork->get_site_socialnetwork_account(FACEBOOK, $usrid);
        $site_twitter_socialnetwork    = $Socialnetwork->get_twitter_account(TWITTER, $usrid);
        //$site_linkedin_socialnetwork = $Socialnetwork->get_linkedin_account(LINKDIN,$usrid);	        
        $site_googleplus_socialnetwork = $Socialnetwork->get_googleplus_account(GOOGLEPLUS, $usrid);
        $settingfaqdetails             = $siteusers->get_settingfaq_details();
        $this->session->set('set_tab', '4');
        $view = View::factory(USERVIEW . 'setting')->bind('validator', $validator)->bind('errors', $errors)->bind('user', $user)->bind('usrid', $userid)->bind('site_socialnetwork', $site_socialnetwork)->bind('site_twitter_socialnetwork', $site_twitter_socialnetwork)->bind('site_googleplus_socialnetwork', $site_googleplus_socialnetwork);
        View::bind_global('settingfaqdetails', $settingfaqdetails);
        $submit_email_setting = arr::get($_REQUEST, 'submit_email_setting');
        $arr                  = Arr::map('trim', $this->request->post());
        if ($submit_email_setting) {
            $result = $siteusers->update_useremail_settings($arr, $id);
            Message::success(__('user_success_update'));
            $this->request->redirect('/users/setting');
        }
        $user                    = $siteusers->get_user_details($id, $this->get_location);
        $this->template->content = $view;
    }
    public function action_trust_score()
    {
        $siteusers      = Model::factory('siteusers');
        $id             = $this->session->get('id');
        $user_profileid = $this->request->param('id');
        if ($user_profileid == '') {
            $user_profileid = $id;
        }
        $user                 = $siteusers->get_user_details($user_profileid, '');
        $profile_completeness = $siteusers->get_profile_completeness($user_profileid);
        $trust_score          = $siteusers->get_trust_score($user_profileid);
        echo $view = View::factory('themes/default/trust_score')->bind('trust_score', $trust_score)->bind('user', $user);
        exit;
    }
    /***User verification link***/
    public function action_verify()
    {
        $siteusers     = Model::factory('siteusers');
        $verify_code   = $this->request->param('id');
        $update_verify = $siteusers->get_verify($verify_code);
        if ($update_verify == '1') {
            $get_verify_userid          = $siteusers->get_verify_userid($verify_code);
            $typeid                     = EMAIL_VERIFY;
            $already_type_filled_result = $siteusers->chk_already_type_filled($get_verify_userid, $typeid);
            if (count($already_type_filled_result) == 0) {
                // Profile completeness :: EMAIL_VERIFY 
                //============================================							      
                $profile_rslt = $siteusers->profile_complete($get_verify_userid, $typeid);
            }
            Message::success(__('user_verification_success'));
            $this->request->redirect(URL_BASE);
        } else {
            Message::error(__('user_verification_error'));
            $this->request->redirect(URL_BASE);
        }
        $view                          = View::factory(USERVIEW . 'home');
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    /**for company registration **/
    public function action_company_registration()
    {
        /**If session is set it should not allow login page through URL**/
        if (!$this->session->get('id')) {
            /**To Set Errors Null to avoid error if not set in view**/
            $errors               = [];
            /** Call the model and get the values**/
            $company              = Model::factory('siteusers');
            /** Get list from country,city,state details**/
            $country_details      = $company->country_details();
            $city_details         = $company->city_details();
            $state_details        = $company->state_details();
            $package_details      = $company->package_details();
            $registration_content = $this->commonmodel->getcontents('company_registration');
            /**To get the form submit button name**/
            $signup_submit        = arr::get($_REQUEST, 'submit_company');
            $postvalues           = [];
            if ($signup_submit && Validation::factory($_POST)) {
                $postvalues = $_POST;
                /**Send entered values to model for validation**/
                $validator  = $company->validate_company_signup(arr::extract($_POST, [
                    'firstname',
                    'lastname',
                    'email',
                    'mobile',
                    'address',
                    'paypal_account',
                    'companyname',
                    'domain_name',
                    'companyaddress',
                    'country',
                    'state',
                    'city',
                    'password',
                    'confirm_password',
                    'time_zone'
                ]));
                /**If validation success without error **/
                if ($validator->check()) {
                    $checkmail_exist = $company->check_email($_POST['email']);
                    if ($checkmail_exist == 0) {
                        $signup_id = $company->company_signup($_POST, $validator);
                        if ($signup_id) {
                            $mail              = "";
                            $replace_variables = [
                                REPLACE_LOGO => EMAILTEMPLATELOGO,
                                REPLACE_SITENAME => $this->app_name,
                                REPLACE_COMPANYNAME => ucfirst($_POST['companyname']),
                                REPLACE_EMAIL => $_POST['email'],
                                REPLACE_COMPANYDOMAIN => $_POST['domain_name'],
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => $this->siteemail,
                                REPLACE_SITEURL => URL_BASE,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            ];
                            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'company_registert_admin_notification.html', $replace_variables);
                            $to                = SITE_EMAIL_CONTACT;
                            $from              = $this->siteemail;
                            $subject           = __('registration_success');
                            $redirect          = "";
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
                            //$mail=array("to" => $_POST['email'],"from"=>$this->siteemail,"subject"=>"Registration success","message"=>$message);
                            //$emailstatus=$this->email_send($mail,'smtp');						
                            Message::success(__('sucessfull_added_company'));
                            $this->request->redirect("/");
                        }
                    } else {
                        $errors = $validator->errors('errors');
                        Message::success(__('email_exists'));
                        //$this->request->redirect("/users/company_registration");						
                    }
                } else {
                    //validation failed, get errors
                    $errors = $validator->errors('errors');
                }
            }
        } else {
            Message::success(__('company_reg_permission_driver'));
            $this->request->redirect("/");
        }
        $cms                     = Model::factory('cms');
        $content_cms             = $cms->getcmscontent('company-registration');
        $this->meta_title        = isset($content_cms[0]['meta_title']) ? $content_cms[0]['meta_title'] : $this->title;
        $this->meta_keywords     = isset($content_cms[0]['meta_keyword']) ? $content_cms[0]['meta_keyword'] : $this->meta_keywords;
        $this->meta_description  = isset($content_cms[0]['meta_description']) ? $content_cms[0]['meta_description'] : $this->title;
        $view                    = View::factory(USERVIEW . 'company_registration')->bind('validator', $validator)->bind('errors', $errors)->bind('email_exists', $email_exists)
        //->bind('user_exists', $user_exists)
            ->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('package_details', $package_details)->bind('post', $_POST)->bind('registration_content', $registration_content)->bind('postvalue', $postvalues);
        $this->template->content = $view;
    }
    public static function action_getcitylist()
    {
        $add_company      = Model::factory('siteusers');
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        $city_id          = arr::get($_REQUEST, 'city_id');
        //print_r($_REQUEST);
        $getmodel_details = $add_company->getcity_details($country_id, $state_id);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="city" id="city">
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["city_id"] . '"';
                    if ($city_id == $modellist["city_id"]) {
                        $output .= 'selected=selected';
                    }
                    $output .= '>' . $modellist["city_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="city" id="city">
					<option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_getlist_state()
    {
        $add_company      = Model::factory('siteusers');
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $state_id         = arr::get($_REQUEST, 'state_id');
        //print_r($_REQUEST);
        $getmodel_details = $add_company->getstate_details($country_id);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="state" id="state" onchange="change_city();">
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
                $output .= '<select name="state" id="state" onchange="change_city();">
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    /** contactus page **/
    public function action_contactus()
    {
		//echo $this->lang; exit;
        /**To Set Errors Null to avoid error if not set in view**/
        $errors        = [];
        /** Call the model and get the values**/
        $company       = Model::factory('siteusers');
        $cms           = Model::factory('cms');
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_company');
        $service       = arr::get($_REQUEST, 'service');
        $postvalues    = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalues = $_POST;
            /**Send entered values to model for validation**/
            $validator  = $company->validate_contactus(arr::extract($_POST, [
                'name',
                'email',
                'phone',
                'subject',
                'message',
                'security_code'
            ]));
            /**If validation success without error **/
            if ($validator->check()) {
                
                //$service=(isset($_POST['services']))?'<b>Service: </b>'.$_POST['services']:'';
                //$country   = (isset($_POST['country'])) ? '<b>Country: </b>' . $this->countryArr[$_POST['country']] : '';
                $message1  = ucfirst($_POST['message']);
                $signup_id = $company->contactus_add($_POST, COMPANY_CID);
                if ($signup_id) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => $this->app_name,
                        REPLACE_NAME => $_POST['name'],
                        REPLACE_EMAIL => $_POST['email'],
                        REPLACE_SUBJECT => $_POST['subject'],
                        REPLACE_PHONE => $_POST['phone'],
                        REPLACE_MESSAGE => $message1,
                        REPLACE_SITEEMAIL => $this->siteemail,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'Contact.html', $replace_variables);
                    if ($this->lang != 'en') {
                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/Contact-' . $this->lang . '.html')) {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/Contact-' . $this->lang . '.html', $replace_variables);
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'Contact.html', $replace_variables);
                        }
                    } else {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'Contact.html', $replace_variables);
                    }
                   
                    $to = SITE_EMAIL_CONTACT;
                    $from     = $this->siteemail;
                    $subject  = __('you_have_enquiry');
                    $redirect = "";
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
                   
                   
                    /******* Send Response mail to users *******/
                    $replace_variables = [
                        REPLACE_SITENAME => $this->app_name,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_NAME => $_POST['name'],
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'email_auto_response.html', $replace_variables);
                    if ($this->lang != 'en') {
                        if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/email_auto_response-' . $this->lang . '.html')) {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/email_auto_response-' . $this->lang . '.html', $replace_variables);
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'email_auto_response.html', $replace_variables);
                        }
                    } else {
                        $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'email_auto_response.html', $replace_variables);
                    }
                    $to                = $_POST['email'];
                    $from              = $this->siteemail;
                    $subject           = __('Thank you for contacting us');
                    $redirect          = "";
                    include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                    
                    $this->request->redirect("/thank-you.html");
                }
            } else {
                //validation failed, get errors
               
                $errors = $validator->errors('errors');
               //  print_r($errors);exit;
            }
        }
        $country_details         = $this->countryArr;
        $content_cms             = $cms->getcmscontent('contact-us');
        $content_com             = $cms->get_company_addr(COMPANY_CID);
        $view                    = View::factory(USERVIEW . 'contact_us')->bind('validator', $validator)->bind('errors', $errors)->bind('content', $content)->bind('service', $service)->bind('country_details', $country_details)->bind('content_com', $content_com)->bind('postvalue', $postvalues);
        $this->meta_title        = isset($content_cms[0]['meta_title']) ? $content_cms[0]['meta_title'] : "";
        $this->meta_keywords     = isset($content_cms[0]['meta_keyword']) ? $content_cms[0]['meta_keyword'] : "";
        $this->meta_description  = isset($content_cms[0]['meta_description']) ? $content_cms[0]['meta_description'] : "";
        $this->template->content = $view;
    }
    /** contactus page **/
    public function action_contactuslive()
    {
        /**To get the form submit button name**/
        $postvalues = [];
        if ($_POST) {
            $company    = Model::factory('siteusers');
            $postvalues = $_POST;
            /**Send entered values to model for validation**/
            $validator  = $company->validate_contactus(arr::extract($_POST, [
                'name',
                'email',
                'phone',
                'subject',
                'message',
                'security_code'
            ]));
            /**If validation success without error **/
            if ($validator->check()) {
                $signup_id = $company->contactus_add($_POST, COMPANY_CID);
                //$budget=isset($_POST['budget'])?$_POST['budget']:'-';
                //$message="Budget: ".$budget."   -    Message: ".$_POST['message'];
                $message1  = "" . ucfirst($_POST['message']);
                if ($signup_id) {
                    /** GET COUNTRY **/
                    $ip                   = $_SERVER['REMOTE_ADDR'];
                    $url                  = "http://api.ipinfodb.com/v3/ip-country/?key=" . IPINFOAPI_KEY . "&ip=$ip";
                    $data                 = @file_get_contents($url);
                    $dat                  = explode(";", $data);
                    $city_name            = isset($dat[2]) ? $dat[2] : ""; //$company->get_city_name($post['city']);
                    $country_name         = isset($dat[3]) ? $dat[3] : "";
                    /** GET COUNTRY **/
                    /* CURL FUNCTION FOR Place the data to NDOT CRM */
                    $_POST['name']        = $_POST['name'];
                    $_POST['email']       = $_POST['email'];
                    $_POST['telephone']   = $_POST['phone'];
                    $_POST['category']    = "215";
                    $_POST['site']        = "taxi";
                    $_POST['country']     = $country_name;
                    $_POST['success_url'] = "http://www.taximobility.com";
                    $_POST['source_type'] = "22";
                    $_POST['feedback']    = $message1;
                    $data                 = $_POST;
                    //url-ify the data for the POST
                    $fields_string        = '';
                    foreach ($data as $key => $value) {
                        $fields_string .= $key . '=' . $value . '&';
                    }
                    $fields_string = rtrim($fields_string, '&');
                    $url           = "http://taxi.engagedots.com/api/contactUs";
                    $ch            = curl_init(); //open connection
                    curl_setopt($ch, CURLOPT_URL, $url); //set the url, number of POST vars, POST data
                    curl_setopt($ch, CURLOPT_POST, count($data));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $result = curl_exec($ch); //execute post
                    curl_close($ch); //close connection
                    /* CURL FUNCTION FOR CONTACT CRM */
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => $this->app_name,
                        REPLACE_NAME => $_POST['name'],
                        REPLACE_EMAIL => $_POST['email'],
                        REPLACE_SUBJECT => $_POST['subject'],
                        REPLACE_PHONE => $_POST['phone'],
                        REPLACE_MESSAGE => $message1,
                        REPLACE_SITEEMAIL => $this->siteemail,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'Contact.html', $replace_variables);
                    if (COMPANY_CID == 0) {
                        $to = 'sales@taximobility.com,mahes@taximobility.com';
                        //$to = 'sivakumar.s@ndot.in';
                    } else {
                        $to = COMPANY_CONTACT_EMAIL;
                    }
                    //$to = 'sivakumar.mr@ndot.in';
                    $from     = $this->siteemail;
                    $subject  = __('you_have_enquiry');
                    $redirect = "";
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
                    //Message::success(__('thank_contacting_us'));
                    $this->request->redirect("/thank-you.html");
                }
            } else {
                $this->request->redirect("/contact-us.html");
            }
        }
    }
    public function action_thankyou()
    {
        $cms                     = Model::factory('cms');
        $content_cms             = $cms->getcmscontent('thank-you');
        $view                    = View::factory(USERVIEW . 'thankyou');
        $this->template->content = $view;
        $this->meta_title        = isset($content_cms[0]['meta_title']) ? $content_cms[0]['meta_title'] : "";
        $this->meta_keywords     = isset($content_cms[0]['meta_keyword']) ? $content_cms[0]['meta_keyword'] : "";
        $this->meta_description  = isset($content_cms[0]['meta_description']) ? $content_cms[0]['meta_description'] : "";
    }
    public function action_trial_thankyou()
    {
        $cms                     = Model::factory('cms');
        $content_cms             = $cms->getcmscontent('thank-you');
        $view                    = View::factory(USERVIEW . 'trial_thankyou');
        $this->template->content = $view;
        $this->meta_title        = isset($content_cms[0]['meta_title']) ? $content_cms[0]['meta_title'] : "";
        $this->meta_keywords     = isset($content_cms[0]['meta_keyword']) ? $content_cms[0]['meta_keyword'] : "";
        $this->meta_description  = isset($content_cms[0]['meta_description']) ? $content_cms[0]['meta_description'] : "";
    }
    public function action_contactuscaptch()
    {
        echo new View("themes/default/contact_captcha");
        exit;
    }
    public function action_get_trialcaptch()
    {
        echo new View("themes/default/get_trial_captcha");
        exit;
    }
    public function action_change_company_captcha()
    {
        echo new View("themes/default/get_company_captcha");
        exit;
    }
    /** contactus page **/
    public function action_demo()
    {
        $cms                     = Model::factory('cms');
        $content                 = $cms->getcmscontent('Contact Us');
        $content                 = $this->commonmodel->getcontents('demo');
        $view                    = View::factory(USERVIEW . 'demo')->bind('content', $content)->bind('content', $content);
        $this->template->content = $view;
    }
    /** How it Works **/
    public function action_how_it_works()
    {
        $cms                     = Model::factory('cms');
        $content                 = $this->commonmodel->getcontents('how-it-works');
        $left_content            = $this->commonmodel->getcontents('how-it-works-left');
        $view                    = View::factory(USERVIEW . 'how-it-works')->bind('content', $content)->bind('left_content', $left_content);
        $this->template->content = $view;
    }
    public function action_country_citylist()
    {
        $siteuser_model   = Model::factory('siteusers');
        $output           = '';
        $country_id       = arr::get($_REQUEST, 'country_id');
        $getmodel_details = $siteuser_model->country_citylist($country_id);
        if (isset($country_id)) {
            $count = count($getmodel_details);
            if ($count > 0) {
                $output .= '<select name="search_city" id="search_city" class="required" title="' . __('select_the_city') . '" >
					   <option value="">--Select--</option>';
                foreach ($getmodel_details as $modellist) {
                    $output .= '<option value="' . $modellist["city_name"] . '"';
                    $output .= '>' . $modellist["city_name"] . '</option>';
                }
                $output .= '</select>';
            } else {
                $output .= '<select name="search_city" id="search_city" class="required" title="' . __('select_the_city') . '">
				   <option value="">--Select--</option></select>';
            }
        }
        echo $output;
        exit;
    }
    public function action_setsessioncity()
    {
        $_SESSION['search_country'] = $_REQUEST['country_id'];
        $_SESSION['search_city']    = $_REQUEST['city_name'];
        $_SESSION['search_cityid']  = $_REQUEST['city_id'];
        $this->request->redirect(URL_BASE);
    }
    public function action_change_language()
    {
        $_SESSION['lang'] = $_REQUEST['lang'];
        $current_page = $_REQUEST['current_page'];
        //echo URL_BASE.$current_page;exit;
        if($current_page != '' ){
        $this->request->redirect(URL_BASE.$current_page);
		}else {
		$this->request->redirect(URL_BASE);
		}
    }
    
    ///////////////////// 
    public function action_new_login()
    {
		$errors        = [];
        $postvalues    = [];
        $validator     = [];
        $view                    = View::factory(USERVIEW . 'newlogin')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $postvalues);
        $this->template->content       = $view;
		$this->template->meta_desc     = $this->meta_description;
		$this->template->meta_keywords = $this->meta_keywords;
		$this->template->title         = $this->title;        
    }
    public function action_new_signup()
    {
		$errors        = [];
        $postvalues    = [];
        $validator     = [];
        $view                    = View::factory(USERVIEW . 'newsignup')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $postvalues);
        $this->template->content       = $view;
		$this->template->meta_desc     = $this->meta_description;
		$this->template->meta_keywords = $this->meta_keywords;
		$this->template->title         = $this->title;        
    }
    ///////////////////// 

    public function action_booking_request(){

        if($_GET){
            //print_r($_GET);exit;

            $pickup_loc = isset($_GET['pickup'])?$_GET['pickup']:'';
            $drop_loc = isset($_GET['drop'])?$_GET['drop']:'';
            $phone = isset($_GET['phone'])?$_GET['phone']:'';
            $email = isset($_GET['email'])?$_GET['email']:'';
            $car_type = isset($_GET['car_type'])?$_GET['car_type']:'';
            $p_date = isset($_GET['p_date'])?$_GET['p_date']:'';
            $p_time = isset($_GET['p_time'])?$_GET['p_time']:'';
            $passenger = isset($_GET['passenger'])?$_GET['passenger']:'';
            $baggage = isset($_GET['baggage'])?$_GET['baggage']:'';
            $flight_no = isset($_GET['flight_no'])?$_GET['flight_no']:'';

            $this->request->redirect(URL_BASE);
            if($pickup_loc!='' && $drop_loc!='' && $phone!='' && $car_type!='' && $p_date!='' && $p_time!='' && $passenger!=''){

                //echo 'innn';
                if($email==''){
                    $email='-';
                }
                if($baggage==''){
                    $baggage='-';
                }
                if($flight_no==''){
                    $flight_no='-';
                }

               $replace_variables =  ['##PICKUP##'=> $pickup_loc,'##DROP##'=> $drop_loc,'##PHONE##'=> $phone,'##EMAIL##'=> $email,'##CAR_TYPE##'=> $car_type,'##DATE##'=> $p_date,'##TIME##'=> $p_time,'##PASSENGER##'=> $passenger,'##BAGGAGE##'=>$baggage,'##FLIGHT_NO##'=> $flight_no,REPLACE_SITEURL => URL_BASE,  REPLACE_COPYRIGHTS => SITE_COPYRIGHT, REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,REPLACE_SITENAME => $this->app_name];

               $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'booking_request.html', $replace_variables);

                    $from     = $this->siteemail;
                    $to = 'rajasekar.m@ndot.in';
                    $subject  = 'Booking request - Website';
                    $redirect = "";
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


                //$this->request->redirect(URL_BASE);
            }else{

                //$this->request->redirect(URL_BASE);
            }            
        }else{
            //$this->request->redirect(URL_BASE);
        }
        $this->request->redirect(URL_BASE);
        exit;
    }
}
