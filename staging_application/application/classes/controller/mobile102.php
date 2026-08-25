<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* website controller - Contains abstract class of API

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
abstract class Controller_Mobile102 extends Controller
{
    //Default variables
    public $template = "themes/template";
    public $alllanguage;
    public $success_msg;
    public $failure_msg;
    public $script;
    public $style;
    public $curr_lang;
    public $session_instance;
    public $userid;
    public $user_name;
    public $user_email;
    public $user_type;
    public $user_paypal_account;
    public $all_countries;
    public $user_shipping;
    public $other_shipping;
    public $gig_alt_name;
    public $replace_variables;
    public $site_settings;
    public $miles;
    public $passenger_data = array();
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        $controller        = $request->controller();
        $action            = $request->action();
        // Assign the request to the controller
        $this->request     = $request;
        // Assign a response to the controller
        $this->response    = $response;
        //Session instance
        $this->session     = Session::instance();
        $this->urlredirect = Request::current();
        $this->lang        = $this->session->get('lang');
        if ($this->lang != "") {
            $lang = $this->lang;
        } else {
            $lang = "en";
        }
        $this->userid = '';
        //Css & Script include for admin
        /**To Define path for selected theme**/
        $id           = $this->session->get('id');
        $usertype     = $this->session->get('usertype');
        //$userid = $this->session->get('userid');
        $usrid        = $id; // isset($userid)?$userid:$id;
        DEFINE("SITENAME", $this->app_name);
        //View::bind_global('currency_symbol',$this->currency_symbol);
        View::bind_global('app_name', $this->app_name);
        //View::bind_global('currencysymbol',$this->currencysymbol);
        View::bind_global('siteemail', $this->siteemail);
        View::bind_global('action', $action);
        View::bind_global('controller', $controller);
        View::bind_global('data', $_POST);
        $ip = $_SERVER['REMOTE_ADDR'];
        $ip = IPADDRESS;
    }
    /**
     * ***action_array_keys_exists()****
     * ** User Defined Function **
     * @return check array exist otr not
     */
    /**
     *****action_network_activity()****
     *@purpose of linkdin curl function
     */
    /** SEND GRID FUNCTION **/
    public function sendgrid($host = array(), $from = "", $receiver = array(), $subject = "", $message = "")
    {
        include MODPATH . "/email/swift/lib/swift_required.php";
        include_once MODPATH . "/email/swift/SmtpApiHeader.php";
        $hdr   = new SmtpApiHeader();
        $times = array();
        $names = array();
        $hdr->addFilterSetting('subscriptiontrack', 'enable', 1);
        $hdr->addFilterSetting('twitter', 'enable', 1);
        $hdr->addTo($receiver);
        $hdr->addSubVal('-time-', $times);
        $hdr->addSubVal('-name-', $names);
        $hdr->setUniqueArgs(array());
        $sitename = "Sayboard";
        if (!$sitename) {
            $sitename = $_SERVER['HTTP_HOST'];
        }
        $fromEmail = $from;
        if (!$fromEmail) {
            $fromEmail = "noreply@" . $_SERVER['HTTP_HOST'];
        }
        $from      = array(
            $fromEmail => $sitename
        );
        $to        = array(
            'defaultdestination@example.com' => 'Personal Name Of Recipient'
        );
        $text      = "test text..";
        $html      = $message;
        $transport = Swift_SmtpTransport::newInstance($host['host'], $host['port']);
        $transport->setUsername($host['uname']);
        $transport->setPassword($host['password']);
        $swift   = Swift_Mailer::newInstance($transport);
        $message = new Swift_Message($subject);
        $headers = $message->getHeaders();
        $headers->addTextHeader('X-SMTPAPI', $hdr->asJSON());
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        $message->addPart($text, 'text/plain');
        if ($recipients = $swift->send($message, $failures)) {
            //common::message(1, "Message sent out to ".$recipients." users");
        } else {
            //common::message(-1, "Something went wrong - Try Later");
        }
        return;
    }
    /**
     * ****action_currenttimestamp()****
     * @return time format
     */
    public function currenttimestamp()
    {
        return date("Y:m:d H:i:s", time());
    }
    //Search validation
    function search_validation($search_array)
    {
        return Validation::factory($search_array)->rule('latitude', 'not_empty')->rule('longitude', 'not_empty')->rule('pickup_time', 'not_empty')->rule('pickupplace', 'not_empty')->rule('passenger_id', 'not_empty');
    }
    //Passenger Login Validation
    function passenger_login_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')
        //->rule('email','email')				
            ->rule('phone_number', 'numeric')->rule('password', 'not_empty');
        //->rule('devicetoken','not_empty');
    }
    //Passenger Edit Profile Validation
    function passenger_profile_validation($array)
    {
        return Validation::factory($array)->rule('salutation', 'not_empty')->rule('firstname', 'not_empty')->rule('lastname', 'not_empty');
        //->rule('otp','not_empty');				
        //->rule('phone','not_empty')				
        //->rule('phone','numeric')				
        //->rule('email','email')
        //->rule('email','not_empty')
        //->rule('address','not_empty');
    }
    //Passenger Edit Profile Validation
    function edit_passenger_profile_validation($array)
    {
        return Validation::factory($array)->rule('firstname', 'not_empty')->rule('lastname', 'not_empty')->rule('email', 'not_empty')
        //->rule('email','email')		
            ->rule('phone', 'not_empty')/*->rule('salutation', 'not_empty')*/->rule('password', 'not_empty')->rule('password', 'min_length', array(
            ':value',
            '6'
        ))->rule('password', 'max_length', array(
            ':value',
            '20'
        ))->rule('password', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'not_empty')->rule('repassword', 'min_length', array(
            ':value',
            '6'
        ))->rule('repassword', 'max_length', array(
            ':value',
            '20'
        ))->rule('repassword', 'valid_password', array(
            ':value',
            '/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'
        ))->rule('repassword', 'matches', array(
            ':validation',
            'password',
            'repassword'
        ))->rule('start_km','not_empty');
        //->rule('phone','numeric');
        //->rule('password','min_length', array(':value', '6'));
    }
    
    function edit_passengers_profile_validation($array)
    {
        return Validation::factory($array)
            ->rule('firstname', 'not_empty')
            //->rule('lastname', 'not_empty')
            ->rule('email', 'not_empty')
            ->rule('email','email')		
            ->rule('phone', 'not_empty');
            //->rule('salutation', 'not_empty');        
    }
    //Payment Validation
    //index/?type=tripfare_updateby_passenger&trip_id=1&distance=2.6&actual_distance=&actual_amount=120&total_fare=120&remarks=test driviing&nightfare_applicable=1&nightfare=12.50	
    function payment_validation($array)
    {
        return Validation::factory($array)->rule('trip_id', 'not_empty')->rule('distance', 'not_empty')->rule('fare', 'not_empty');
    }
    // For card paymement Validation
    //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=payment_updateby_driver&trip_id=165&distance=25&actual_distance=&actual_amount=120&total_fare=120&remarks=test%20driviing&nightfare_applicable=1&nightfare=12.50&creditcard_no=&creditcard_cvv=&expmonth=&expyear=&pay_mod_id=1
    function payment_validationwith_card($array)
    {
        return Validation::factory($array)->rule('trip_id', 'not_empty')->rule('distance', 'not_empty')->rule('fare', 'not_empty')->rule('creditcard_no', 'not_empty')->rule('creditcard_no', 'min_length', array(
            ':value',
            '9'
        ))->rule('creditcard_no', 'max_length', array(
            ':value',
            '16'
        ))
        //->rule('creditcard_cvv','not_empty')
            ->rule('expmonth', 'not_empty')->rule('expyear', 'not_empty');
    }
    function payment_validationwith_account($array)
    {
        return Validation::factory($array)->rule('trip_id', 'not_empty')->rule('distance', 'not_empty')->rule('fare', 'not_empty')->rule('creditcard_no', 'not_empty')->rule('creditcard_no', 'min_length', array(
            ':value',
            '9'
        ))->rule('creditcard_no', 'max_length', array(
            ':value',
            '16'
        ))
        //->rule('creditcard_cvv','not_empty')
            ->rule('expmonth', 'not_empty')->rule('expyear', 'not_empty')->rule('account_id', 'not_empty')->rule('group_id', 'not_empty');
    }
    //Passenger Card Validation
    function passenger_card_validation($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('email', 'email')->rule('creditcard_no', 'not_empty')->rule('creditcard_no', 'min_length', array(
            ':value',
            '9'
        ))->rule('creditcard_no', 'max_length', array(
            ':value',
            '16'
        ))
        ->rule('creditcard_cvv','not_empty')
            
        //->rule('creditcard_cvv','numeric')
            ->rule('expdatemonth', 'not_empty')->rule('expdateyear', 'not_empty')->rule('expdatemonth', 'numeric')->rule('expdateyear', 'numeric')->rule('creditcard_cvv', 'numeric');
        //->rule('phone','not_empty')				
        //->rule('phone','numeric')				
        //
        //
        //->rule('address','not_empty');
    }
    //Edit Card Validation
    function edit_passenger_card_validation($array)
    {
        return Validation::factory($array)->rule('creditcard_no', 'not_empty')->rule('creditcard_no', 'min_length', array(
            ':value',
            '9'
        ))->rule('creditcard_no', 'max_length', array(
            ':value',
            '16'
        ))
        ->rule('creditcard_cvv','not_empty')
            
        //->rule('creditcard_cvv','numeric')
            ->rule('expdatemonth', 'not_empty')->rule('expdateyear', 'not_empty')->rule('expdatemonth', 'numeric')->rule('expdateyear', 'numeric')->rule('creditcard_cvv', 'numeric');
        //->rule('phone','not_empty')				
        //->rule('phone','numeric')				
        //
        //
        //->rule('address','not_empty');
    }
    //Change Password
    function chg_password_passenger_validation($array)
    {
        return Validation::factory($array)->rule('old_password', 'not_empty')->rule('new_password', 'not_empty')
        //->rule('new_password','valid_password',array(':value','/^[A-Za-z0-9@#$%!^&*(){}?-_<>=+|~`\'".,:;[]+]*$/u'))		
            ->rule('confirm_password', 'not_empty');
    }
    // Feed back validation
    function feedback_validation($array)
    {
        return Validation::factory($array)->rule('to', 'not_empty')->rule('passenger_id', 'not_empty')->rule('subject', 'not_empty')->rule('message', 'not_empty');
    }
    function check_dynamic_array($array)
    {
        return Validation::factory($array)->rule('pagename', 'not_empty')->rule('device_type', 'not_empty')->rule('device_type', 'numeric');
    }
    //nearest validation
    function nearestdriver_validation($search_array)
    {
        return Validation::factory($search_array)->rule('latitude', 'not_empty')->rule('longitude', 'not_empty');
    }
    //Update Ratings and Comments
    function update_ratings_comments_validation($array)
    {
        return Validation::factory($array)->rule('ratings', 'not_empty');
        //->rule('comments','not_empty');
    }
    //Driver Login Validation
    function driver_login_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')->rule('password', 'not_empty');
        //->rule('device_token','not_empty');
    }
    
    public function token_validation($array)
    {
        return Validation::factory($array)->rule('id', 'not_empty')->rule('device_type', 'not_empty')->rule('device_id','not_empty')->rule('device_token','not_empty')->rule('type','not_empty');
    }
    
    public function pasenger_signup_validation($array)
    {
        $password = isset($array['password']) ? $array['password'] : '';
        return Validation::factory($array)->rule('first_name', 'not_empty')->rule('last_name', 'not_empty')->rule('email', 'not_empty')->rule('email', 'email')->rule('phone', 'not_empty')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('password', 'not_empty')->rule('confirm_password', 'not_empty')->rule('confirm_password', 'Controller_Mobile101::checkwithpassword', array(
            ':value',
            $password
        ));
    }
    public function account_validation($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('email', 'email')->rule('phone', 'not_empty')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('password', 'not_empty');
    }
    
    public function passenger_account_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')->rule('phone', 'numeric')->rule('phone', 'min_length', array(
            ':value',
            '8'
        ))->rule('devicetype', 'not_empty')->rule('deviceid', 'not_empty'); //->rule('devicetoken', 'not_empty');
    }
    
    public function phone_verify_code_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')->rule('verification_code', 'not_empty')->rule('phone', 'numeric')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ));
    }
    
    public function passenger_register_validation($array)
    {
        return Validation::factory($array)->rule('phone', 'not_empty')->rule('phone', 'numeric')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ))->rule('firstname', 'not_empty')->rule('email', 'not_empty')/*->rule('lastname', 'not_empty')->rule('civilid', 'not_empty')->rule('civilid','Model_Add::civilid_isValid',array(':value'))*/
        //->rule('civilid','Model_Add::civilid_exist',array(':value'))
        /*->rule('creditcard_no', 'credit_card')*/->rule('expdatemonth', 'numeric')->rule('expdateyear', 'numeric')->rule('creditcard_cvv', 'numeric')/*->rule('civilid_front', 'not_empty')->rule('civilid_back', 'not_empty')*/;
    }
    
    public function child_account_validation($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('parent_id', 'not_empty')->rule('parent_id', 'numeric')->rule('account_type', 'not_empty')->rule('account_type', 'numeric')->rule('parent_id','Model_Add::parent_id_isValid',array(':value'))->rule('account_type','Model_Add::account_type_isValid',array(':value'))->rule('email', 'email')->rule('phone', 'not_empty')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ));
        //->rule('password', 'not_empty')->rule('confirm_password',  'matches', array(':validation', 'password', 'confirm_password'));
    }
    
    public function send_request_validation($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('parent_id', 'not_empty')->rule('parent_id', 'numeric')->rule('account_type', 'not_empty')->rule('account_type', 'numeric')->rule('parent_id','Model_Add::parent_id_isValid',array(':value'))->rule('account_type','Model_Add::account_type_isValid',array(':value'))->rule('email', 'email')->rule('phone', 'not_empty')->rule('phone', 'min_length', array(
            ':value',
            '7'
        ));
    }
    
    public function getpassenger_update_validation($array)
    {
        return Validation::factory($array)
        //->rule('trip_id','not_empty')	
            ->rule('passenger_id', 'not_empty')->rule('request_type', 'not_empty');
    }
    //add_expense&expense_driver_id=16&expense_amount=100&expense_type_id=test&payment_type=&expense_date=expense_validation	
    public function expense_validation($array)
    {
        return Validation::factory($array)->rule('expense_driver_id', 'not_empty')->rule('expense_amount', 'not_empty')->rule('expense_type_id', 'not_empty')->rule('expense_date', 'not_empty');
    }
    public function delete_expense_validation($array)
    {
        return Validation::factory($array)->rule('expense_id', 'not_empty');
    }
    public function delete_card_validation($array)
    {
        return Validation::factory($array)->rule('passenger_cardid', 'not_empty');
    }
    //&driver_id=16&pickup_location=gandhipuram,coimbatore&drop_location=marudhamalai,coimbatore&distance=10&fare=100.32&tips=10.00&travel_date=2012-12-26 15:16:00
    public function street_validation($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('pickup_location', 'not_empty')->rule('drop_location', 'not_empty')->rule('distance', 'not_empty')->rule('fare', 'not_empty')->rule('tips', 'not_empty')->rule('travel_date', 'not_empty');
    } //&target_driver_id=16&target_amount=100&target_date=2012-12-26 15:16:00
    public function target_validation($array)
    {
        return Validation::factory($array)->rule('target_driver_id', 'not_empty')->rule('target_amount', 'not_empty')->rule('target_date', 'not_empty');
    }
    //&driver_id=16&phone=
    public function tellfri_sms_validation($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('phone', 'not_empty')->rule('phone', 'numeric');
    }
    //tellfri_email_validation
    public function tellfri_email_validation($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('email', 'not_empty')->rule('email', 'email');
    }
    //
    public function get_target_validation($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('fromdate', 'not_empty')->rule('todate', 'not_empty');
    }
    public function get_target_validationby_month($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('month', 'not_empty')->rule('year', 'not_empty');
    }
    public function get_target_validationby_year($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('year', 'not_empty');
    }
    //&driver_id=5&shiftstatus=IN&reason=&update_id=
    public function shift_status_validation($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('shiftstatus', 'not_empty');
    }
    //http://192.168.1.88:1000/api/index/dGF4aV9hbGw=/?type=driver_taxi_details&email=senthilkumar.a@ndot.in&company_email=&tvdlno=&taxi_company=&taxi_model=&referral_code=&bank_name=&bank_account_no=
    //
    public function check_tell_to_friend($array)
    {
        return Validation::factory($array)->rule('to', 'not_empty')->rule('to', 'email')->rule('passenger_id', 'not_empty');
    }
    //&=dfff&=4534534&=2
    public function taxi_validation($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('email', 'email')->rule('tvdlno', 'not_empty')->rule('taxi_company', 'not_empty')->rule('taxi_model', 'not_empty')->rule('bank_name', 'not_empty')->rule('bank_account_no', 'not_empty')->rule('device_id', 'not_empty')->rule('device_token', 'not_empty')->rule('device_type', 'not_empty');
    }
    // Validation for Coming List
    public function coming_cancel($array)
    {
        return Validation::factory($array)->rule('id', 'not_empty')->rule('start', 'not_empty')->rule('limit', 'not_empty')->rule('device_type', 'not_empty');
    }
    // Validation for Driver Coming List
    public function driver_coming_cancel($array)
    {
        return Validation::factory($array)->rule('driver_id', 'not_empty')->rule('start', 'not_empty')->rule('limit', 'not_empty')->rule('device_type', 'not_empty');
    }
    public function trip_history_month_wise($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty')->rule('start', 'not_empty')->rule('limit', 'not_empty')->rule('month', 'not_empty')->rule('device_type', 'not_empty');
    }
    public function trip_history_date_wise($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty')->rule('start', 'not_empty')->rule('limit', 'not_empty')->rule('date', 'not_empty')->rule('device_type', 'not_empty');
    }
    //&passenger_id=&favourite_place=Vadavalli,Gandhipuram&fav_comments=test
    public function favourite_validation($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty')->rule('p_fav_locationtype', 'not_empty');
    }
    //p_favourite_id=2&favourite_place=Vadavalli,Gandhipuram,west&fav_comments=
    public function edit_favourite_validation($array)
    {
        return Validation::factory($array)->rule('p_favourite_id', 'not_empty')->rule('passenger_id', 'not_empty')->rule('p_fav_locationtype', 'not_empty');
    }
    /**
     * ****DisplayDateTimeFormat()****
     * @param $input_date_time string
     * @return  time format
     */
    public function DisplayDateTimeFormat($input_date_time)
    {
        //getting input data from last login db field
        //===========================================
        $input_date_split        = explode("-", $input_date_time);
        //splitting year and time in two arrays
        //=====================================
        $input_date_explode      = explode(' ', $input_date_split[2]);
        $input_date_explode1     = explode(':', $input_date_explode[1]);
        //getting to display datetime format
        //==================================
        $display_datetime_format = date('j M Y h:i:s A', mktime($input_date_explode1[0], $input_date_explode1[1], $input_date_explode1[2], $input_date_split[1], $input_date_explode[0], $input_date_split[0]));
        return $display_datetime_format;
    }
    /**
     * ****get_bitly_short_url()****
     *
     * @param url format
     * @param 
     * @return  the shortened bitly url
     */
    public function get_bitly_short_url($url, $login, $appkey, $format = 'txt')
    {
        $connectURL = 'http://api.bit.ly/v3/shorten?login=' . $login . '&apiKey=' . $appkey . '&uri=' . urlencode($url) . '&format=' . $format;
        return $this->curl_get_result($connectURL);
    }
    public function curl_get_result($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    function history_validation($search_array)
    {
        return Validation::factory($search_array)->rule('driver_id', 'not_empty')->rule('locations', 'not_empty')->rule('above_min_km', 'not_empty')->rule('status', 'not_empty');
    }
    // Used for encrypt and decrypt the keys		
    function encrypt_decrypt($action, $string)
    {
        $output = false;
        $key    = 'Taxi Application';
        // initialization vector 
        $iv     = md5(md5($key));
        if ($action == 'encrypt') {
            $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
            $output = base64_encode($string);
        } else if ($action == 'decrypt') {
            //$output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
            //$output = rtrim($output, "");
            $output = base64_decode($string);
        }
        return $output;
    }
   /* function findcompany_timezone($company_cid)
    {
        $rs = DB::select()->from(COMPANY)->where('cid', '=', $company_cid)->execute()->as_array();
        if (count($rs) > 0)
            return $rs[0]['time_zone'];
        else
            return 0;
    }*/
    function findcompany_timezone($company_cid)
{
    //MongoDB
    $mongodb        = MangoDB::instance('default');
    $rs = $mongodb->find_one(MDB_COMPANY,array('_id'=>(int)$company_cid),array('companydetails.time_zone'));
    return (count($rs)>0)?$rs['companydetails']['time_zone']:0;
}
    /********* Get Subdomain details from URL *************/
    function getUrlSubdomain($url)
    {
        $urlSegments     = parse_url($url);
        $urlHostSegments = explode('.', $urlSegments['host']);
        if (count($urlHostSegments) > 2) {
            return $urlHostSegments[0];
        } else {
            return null;
        }
    }
    public static function action_cron_push()
    {
        /*$api = Model::factory(MOBILEAPI_107);	
        $result = $api->cron_push();
        echo json_encode($result);	*/
        exit;
    }
    ///Check whther the user logged in the system or not
    public function is_login_status($driver_id, $company_id = '')
    {
        $api    = Model::factory(MOBILEAPI_107);
        /**Check user is Logged in or not  **/
        $result = $api->logged_user_status($driver_id, $company_id);
        /* If user Logged IN*/
        if ($result == 1) {
            return 1;
        }
        /* If user Logged OUT*/
        else {
            return 0;
        }
    }
    // Used for push the records into array for mobile display
    public function array_put_to_position(&$array, $object, $position, $name = null)
    {
        //$this->array_put_to_position($upcoming_journey, 'P', 1, 'pickstatus');
        //echo $object;
        //echo $position;
        //echo $name; 
        $count  = 0;
        $return = array();
        foreach ($array as $k => $v) {
            //echo $k.'=>'.$v;	
            // insert new object
            if ($count == $position) {
                if (!$name)
                    $name = $count;
                $return[$name] = $object;
                $inserted      = true;
            }
            // insert old object
            $return[$k] = $v;
            $count++;
        }
        if (!$name)
            $name = $count;
        //if (!$inserted) $return[$name];
        $array = $return;
        return $array;
    }
    public function array_push_assoc($array, $position, $key, $value)
    {
        //print_r($array);
        $array[$position][$key] = $value;
        return $array;
    }
    /** CURL GET AND POST**/
    private function curl_function($req_url = "", $type = "", $arguments = array())
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
    public function close_mysql_connection($instance)
    {
        $db = Database::$instances[$instance];
        //print_r($db);
        $db->disconnect();
    }
    public function send_mail_passenger($log_id = '', $travel_status = '')
    {
        
        /**************************** Mail send to Passenger ***************/
        $api_model             = Model::factory('mobileapi119');
        $passenger_log_details = $api_model->passenger_transdetails($log_id);
        
        if (count($passenger_log_details) > 0) {
            $to            = $passenger_log_details[0]['passenger_email'];
            $name          = $passenger_log_details[0]['passenger_name'];
            $job_referral  = $passenger_log_details[0]['job_referral'];
            //$api_model     = Model::factory(MOBILEAPI_107);
            $location_data = $api_model->get_location_details($log_id);
            if ($location_data) {
                $pickup = $location_data[0]['current_location'];
                $drop   = $location_data[0]['drop_location'];
                $path   = $location_data[0]['active_record'];
                //print_r($path);exit;
                /*$path   = str_replace('],[', '|', $path);
                $path   = str_replace(']', '', $path);
                $path   = str_replace('[', '', $path);
                $path   = explode('|', $path);
                $path   = array_unique($path);*/
                include_once MODPATH . "/email/vendor/polyline_encoder/encoder.php";
                $polylineEncoder = new PolylineEncoder();
                if (count($path) > 0) {
                    foreach ($path as $values) {
                        //$values = explode(',', $values);
                        $polylineEncoder->addPoint($values[1], $values[0]);
                        $polylineEncoder->encodedString();
                    }
                }
                $encodedString = $polylineEncoder->encodedString();
                $marker_end    = $location_data[0]['drop_latitude'] . ',' . $location_data[0]['drop_longitude'];
                $marker_start  = $location_data[0]['pickup_latitude'] . ',' . $location_data[0]['pickup_longitude'];
                //$url= "http://maps.google.com/maps/api/staticmap?center=$center&zoom=11&markers=$markers&size=500x300&sensor=TRUE_OR_FALSE&path=color:0x0000ff|weight:5|$path";echo $url;exit;
                //$mapurl        = "http://maps.googleapis.com/maps/api/staticmap?size=size=".MAP_WIDTH."x".MAP_HEIGHT."&markers=color:red%7C$marker_start&markers=color:green%7C$marker_end&path=weight:3%7Ccolor:red%7Cenc:$encodedString";


                try {
                    $mapurl   = "https://maps.googleapis.com/maps/api/staticmap?size=".MAP_WIDTH."x".MAP_HEIGHT."&markers=icon:".URL_BASE."ic.png?s=32%26d=identicon%26r=PG|$marker_start&markers=icon:".URL_BASE."ic2.png?s=32%26d=identicon%26r=PG|$marker_end";

                    $data = @file_get_contents( $mapurl);
                    if($data != '')
                    {
                        @file_put_contents(DOCROOT.PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$log_id.'.png', $data);
                        $static_map = URL_BASE .PUBLIC_UPLOADS_FOLDER.'/static_maps/'.$log_id.'.png';
                    }
                    else
                    {
                        $static_map='';
                    }
                }
                catch (Kohana_Exception $e) {
                //print_r($e);
                return -1;
                }


            } else {
                $mapurl = "";
                $pickup = "";
                $drop   = "";
            }
            $subtotal  = '';
            $orderlist = '';
            $orderlist = '<table cellspacing="8" cellpadding="5">';
            if ($travel_status == 4) {
                //$orderlist.='<tr style="color:#808080"><td colspan="2" style="color: #161616; font-size: 15px; font-weight: bold"><b>'.__('cancel_trip').'</b></td><td></td></tr>';
            } else {
                //$orderlist.='<tr style="color:#808080"><td colspan="2" style="color: #161616; font-size: 15px; font-weight: bold"><b>'.__('complete_from').'</b></td><td></td></tr>';
            }
            $used_wallet_amount = (isset($passenger_log_details[0]['used_wallet_amount'])) ? $passenger_log_details[0]['used_wallet_amount'] : 0;
            $passenger_discount = (isset($passenger_log_details[0]['passenger_discount'])) ? $passenger_log_details[0]['passenger_discount'] : 0;
            $distance_fare      = $passenger_log_details[0]['tripfare'] - $passenger_log_details[0]['minutes_fare'];
            //$subtotal= $passenger_log_details[0]['fare'];
            $subtotal           = $passenger_log_details[0]['fare'] + $used_wallet_amount;
            $payment_mode_value = $passenger_log_details[0]['payment_type'];
            switch ($payment_mode_value) {
                case 1:
                    $payment_mode = __('cash');
                    break;
                case 2:
                    $payment_mode = __('credit_card');
                    break;
                case 3:
                    $payment_mode = __('knet');
                    break;
                case 6:
                    $payment_mode = __('card');
                    break;
                default:
                    $payment_mode = __('account');
            }
            $distance_km       = ($passenger_log_details[0]['distance'] != '') ? $passenger_log_details[0]['distance'] : '0';
            $trip_minutes      = ($passenger_log_details[0]['trip_minutes'] != '') ? $passenger_log_details[0]['trip_minutes'] : '0';
            $distance_fare_row = "";
            if ($distance_fare != 0) {
                $distance_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('distance_fare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($distance_fare, 2) . "</td></tr>";
            }
            $minutes_fare_row = "";
            if ($passenger_log_details[0]['minutes_fare'] != 0) {
                $minutes_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('minutes_fare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . " " . round($passenger_log_details[0]['minutes_fare'], 2) . "</td></tr>";
            }
            $wallet_row = "";
            if ($used_wallet_amount != 0) {
                $wallet_row = "<tr style='color:#808080'><td width='150px'>" . __('wallet_amount_paid') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($used_wallet_amount, 2) . "</td></tr>";
            }
             $discount_row = "";
            if ($passenger_discount != 0.00) {
                $wallet_row = "<tr style='color:#808080'><td width='150px'>" . __('discounts_passenger') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($passenger_discount, 2) . "</td></tr>";
            }
            $evening_fare = "";
            if ($passenger_log_details[0]['eveningfare'] != 0) {
                $evening_fare = "<tr style='color:#808080'><td width='150px'>" . __('eveningfare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['eveningfare'], 2) . "</td></tr>";
            }
            $night_fare = "";
            if ($passenger_log_details[0]['nightfare'] != 0) {
                $night_fare = "<tr style='color:#808080'><td width='150px'>" . __('nightfare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['nightfare'], 2) . "</td></tr>";
            }
            $orderlist .= "<tr><td valign='top'><table style='float:left;font-size:13px;position:relative;top:0px;left:10px' height='280px' cellpadding='8' width='250px'>
			<tbody><tr><td colspan='3' rowspan='2' width='250px' style='text-align:center;font-size:15px;color: #161616;font-weight:bold'>" . __('fare_details') . "</td><td></td></tr>
			<tr height='30'></tr>
			<tr style='color:#808080'><td width='150px'>" . __('payment_mode') . "</td><td style='color:#000' width='100px'>" . $payment_mode . "</td></tr>
			" . $distance_fare_row . " " . $minutes_fare_row . "
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_hours') . "</td><td style='color:#000'>" . $passenger_log_details[0]['waiting_time'] . "</td></tr>
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_cost') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['waiting_cost'], 2) . "</td></tr>" . $night_fare . " " . $evening_fare . "
			
			<tr style='color:#808080'><td width='150px'>" . __('sub_total') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($subtotal, 2) . "</td></tr>
			$wallet_row
			<tr style='color:#808080'><td width='150px' style='color: #161616;font-weight:bold'>" . __('trip_time') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($passenger_log_details[0]['fare'], 2) . "</td></tr>
			</tbody></table></td></tr>
			<tr><td colspan='2'><hr style='color:#d7d7d7' size='1px' /></td></tr>
			<tr><td><table width='250px' height='100px' cellpadding='3' cellspacing='3' style='float:left;'>
			<tbody><tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Current_Location') . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='300px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['current_location'] . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Drop_Location') . "</td></tr>
			<tr style='color:#808080'><td width='280px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['drop_location'] . "</td></tr>
			</tbody></table></td>
			<td valign='top'><table style='float:left;margin:10px;font-size:13px;' width='250px' height='50px' cellpadding='0' cellspacing='0'>
			<tbody><tr><td width='80px' style='color:#000' align='center'>" . __('km') . "</td><td width='80px'align='center' style='color:#000'>" . __('trip_minutes') . "</td></tr>
			<tr><td width='80px' align='center'>" . $distance_km . "	" . __('km') . "</td><td width='80px' align='center'>" . $trip_minutes . "</td></tr>
			</tbody></table></td></tr></table>";
            $mail              = "";
            $replace_variables = array(
                REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                REPLACE_SITENAME => $this->app_name,
                REPLACE_USERNAME => $name,
                REPLACE_EMAIL => $to,
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => $this->siteemail,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_ORDERID => $log_id,
                REPLACE_ORDERLIST => $orderlist,
                REPLACE_MAPURl => $mapurl,
                REPLACE_PICKUP => $pickup,
                REPLACE_DROP => $drop,
                REPLACE_COMPANYDOMAIN => $this->domain_name,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            );
            /* Added for language email template */
            if ($this->lang != 'en') {
                if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html')) {
                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html', $replace_variables);
                } else {
                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
                }
            } else {
                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
            }
            /* Added for language email template */
            //echo $message;exit;
            $from     = $this->siteemail;
            $subject  = __('payment_made_successfully');
            $redirect = 'no';
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
            $msg_status     = 'R';
            $driver_reply   = 'A';
            $journey_status = 1; // Waiting for Payment
            $journey        = $api_model->update_journey_status($log_id, $msg_status, $driver_reply, $journey_status);

            /** Update in passnger_log_complete table **/
            $update_complete = $api_model->update_complete_trip_det($log_id);            
        }
        /**************************** Mail send to Passenger ***************/
    }
    public function send_cancel_fare_mail_passenger($cancelFare = 0, $passenger_name = "", $pickup_location = "", $to = "")
    {
        $orderlist = '<table cellspacing="8" cellpadding="5">';
        $orderlist .= "
			<tr style='color:#808080'><td>" . __('cancel_fare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . $cancelFare . "</td></tr>
			<tr style='color:#808080'><td>" . __('Current_Location') . "</td><td style='word-break:break-word;border-collapse:collapse!important;text-align:left;display:table-cell;line-height:16px;padding:0px;color:#000'>" . $pickup_location . "</td></tr></table>";
        $mail              = "";
        $replace_variables = array(
            REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
            REPLACE_SITENAME => $this->app_name,
            REPLACE_USERNAME => $passenger_name,
            REPLACE_SITEEMAIL => $this->siteemail,
            REPLACE_SITEURL => URL_BASE,
            REPLACE_ORDERLIST => $orderlist,
            REPLACE_COMPANYDOMAIN => $this->domain_name,
            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
        );
        /* Added for language email template */
        if ($this->lang != 'en') {
            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcancel-' . $this->lang . '.html')) {
                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcancel-' . $this->lang . '.html', $replace_variables);
            } else {
                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcancel.html', $replace_variables);
            }
        } else {
            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcancel.html', $replace_variables);
        }
        /* Added for language email template */
        //echo $message;exit;
        $from     = $this->siteemail;
        $subject  = __('payment_made_successfully');
        $redirect = 'no';
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
    public function authorize_creditcard($values)
    {
        $api_model      = Model::factory(MOBILEAPI_107);
        $paypal_details = $api_model->paypal_details();
        $amount         = '0';
        $product_title  = Html::chars('Authorize Creditcard');
        $payment_action = 'Authorization';
        //$payment_action='sale';
        $request        = 'METHOD=DoDirectPayment';
        $request .= '&VERSION=65.1'; //  $this->version='65.1';     51.0  
        $request .= '&USER=' . urlencode($paypal_details[0]['paypal_api_username']);
        $request .= '&PWD=' . urlencode($paypal_details[0]['paypal_api_password']);
        $request .= '&SIGNATURE=' . urlencode($paypal_details[0]['paypal_api_signature']);
        $request .= '&PAYMENTACTION=' . $payment_action; //type
        $request .= '&AMT=' . urlencode($amount); //   
        $request .= '&ACCT=' . urlencode(str_replace(' ', '', $values['creditcard_no']));
        $request .= '&EXPDATE=' . urlencode($values['expdatemonth'] . $values['expdateyear']);
        $request .= '&CVV2=' . urlencode($values['creditcard_cvv']);
        $request .= '&CURRENCYCODE=' . $paypal_details[0]['currency_code'];
        $paypal_type = ($paypal_details[0]['payment_method'] == "L") ? "live" : "sandbox";
        if ($paypal_type == "live") {
            $curl = curl_init('https://api-3t.paypal.com/nvp');
        } else {
            $curl = curl_init('https://api-3t.sandbox.paypal.com/nvp');
        }
        curl_setopt($curl, CURLOPT_PORT, 443);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
        $response = curl_exec($curl);
        $nvpstr   = $response;
        curl_close($curl);
        $intial   = 0;
        $nvpArray = array();
        while (strlen($nvpstr)) {
            //postion of Key
            $keypos                       = strpos($nvpstr, '=');
            //position of value
            $valuepos                     = strpos($nvpstr, '&') ? strpos($nvpstr, '&') : strlen($nvpstr);
            /*getting the Key and Value values and storing in a Associative Array*/
            $keyval                       = substr($nvpstr, $intial, $keypos);
            $valval                       = substr($nvpstr, $keypos + 1, $valuepos - $keypos - 1);
            //decoding the respose
            $nvpArray[urldecode($keyval)] = urldecode($valval);
            $nvpstr                       = substr($nvpstr, $valuepos + 1, strlen($nvpstr));
        }
        $ack = isset($nvpArray['ACK']) ? strtoupper($nvpArray['ACK']) : '';
        if (($ack == 'SUCCESSWITHWARNING') || ($ack == 'SUCCESS')) {
            return 1;
        } else {
            return 0;
        }
    }
    public function weeks_in_month($month, $year)
    {
        // Start of month
        $start      = mktime(0, 0, 0, $month, 1, $year);
        // End of month
        // echo '<br>';
        $end        = mktime(0, 0, 0, $month, date('t', $start), $year);
        // Start week
        $start_week = date('W', $start);
        // End week
        $end_week   = date('W', $end);
        if ($end_week < $start_week) { // Month wraps
            return ((52 + $end_week) - $start_week) + 1;
        }
        return ($end_week - $start_week) + 1;
    }
    
    public function trippayment($values, $default_companyid)
    {
        $api_model             = Model::factory(MOBILEAPI_107);
        $driver_model          = Model::factory('driver');
        $passenger_log_details = $api_model->passengerlogid_details($values['trip_id']);
        $passengers_id = $passenger_log_details[0]['passengers_id'];
		$pickupDate = $passenger_log_details[0]['pickup_time'];
		$pickupLocation = $passenger_log_details[0]['pickupLocation'];
		$dropLocation = $passenger_log_details[0]['dropLocation'];
		$pickup_latitude = $passenger_log_details[0]['pickup_latitude'];
		$pickup_longitude = $passenger_log_details[0]['pickup_longitude'];
		$drop_latitude = $passenger_log_details[0]['drop_latitude'];
		$drop_longitude = $passenger_log_details[0]['drop_longitude'];
		$active_record = $passenger_log_details[0]['active_record'];
		$used_wallet_amount = (isset($passenger_log_details[0]['used_wallet_amount'])) ? $passenger_log_details[0]['used_wallet_amount'] : 0;
		$pre_transaction_id = isset($passenger_log_details[0]['pre_transaction_id'])?$passenger_log_details[0]['pre_transaction_id']:"";
		$pre_transaction_amount = isset($passenger_log_details[0]['pre_transaction_amount'])?$passenger_log_details[0]['pre_transaction_amount']:0;
        
        $shipping_first_name   = isset($passenger_log_details[0]['driver_name']) ? $passenger_log_details[0]['driver_name'] : "";
        $shipping_last_name    = isset($passenger_log_details[0]['driver_lastname']) ? $passenger_log_details[0]['driver_lastname'] : "";
        $shipping_email        = isset($passenger_log_details[0]['driver_email']) ? $passenger_log_details[0]['driver_email'] : "";
        
        $driver_userid        = isset($passenger_log_details[0]['driver_id']) ? $passenger_log_details[0]['driver_id'] : "";
        $company_id           = isset($passenger_log_details[0]['company_id']) ? $passenger_log_details[0]['company_id'] : "";
        $values['company_id'] = $company_id;
        $street               = $city = $state = $country_code = $currency_code = $country_code = $zipcode = $paypal_api_username =        $paypal_api_password = $paypal_api_signature = $currency_format = "";
        $siteinfo_details     = $api_model->siteinfo_details();
        $passenger_log_id     = $values['trip_id'];
        if ($values['actual_distance'] == "")
            $distance = $values['distance'];
        else
            $distance = $values['actual_distance'];
        $actual_amount          = $values['actual_amount'];
        $waiting_cost           = $values['waiting_cost'];
        $waiting_hours          = $values['waiting_time'];
        $remarks                = $values['remarks'];
        $trip_fare              = $values['trip_fare']; // Trip Fare without Tax,Tips and Discounts
        $fare                   = round($values['fare'], 2); // Total Fare with Tax,Tips and Discounts can editable by driver
        $tips                   = round($values['tips'], 2); // Tips Optional
        $passenger_discount     = $values['passenger_discount'];
        $account_discount       = ""; //$values['account_discount'];
        $company_tax            = $values['tax_amount'];
        $passenger_discount_amt = $passenger_discount;
        $account_discount_amt   = 0;
        //echo $creditcard_no;
        $trip_fare              = round($trip_fare, 2);
        $total_fare             = $fare; // + $tips; // Total fare with Tips if exist
        $amount                 = round($total_fare, 2); // Total amount which is used for pass to payment gateways
        $amt                    = round($total_fare, 2);
        $credits_used           = 0;
        
        
        $paypal_details           = $api_model->payment_gateway_details();
            $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
            $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
            $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
            $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
            $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
            $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
            
            
            /** Split fare payment section **/
		//get the total non approved percentage
		$totalPendingPercentage = $api_model->getpendingFarePercentage($passenger_log_id);
		$approvedSplitFares = $api_model->getTripSplitFareDets($passenger_log_id,'A');
		if(count($approvedSplitFares) > 0) {
			$failurePercent = 0;
			foreach($approvedSplitFares as $sfares){
				if($sfares['friends_p_id'] == $passengers_id) {
					$passPercent = $sfares['fare_percentage'] + $totalPendingPercentage + $failurePercent;
					$amountToPay = $amount + ($amount * ($passPercent / 100));
					$amountToPay = round($amountToPay,2);
					$primaryPassenger = 1;
				} else {
					$passPercent = $sfares['fare_percentage'];
					$amountToPay = $amount + ($amount * ($passPercent / 100));
					$amountToPay = round($amountToPay,2);
					$primaryPassenger = 2;
				}
				$creditcard_no = encrypt_decrypt('decrypt',$sfares['creditcard_no']);
				//payment process
				list($paymentResult,$result) = $this->paymentProcess($payment_method, $payment_gateway_username, $payment_gateway_password, $payment_gateway_key, $creditcard_no, $sfares['creditcard_cvv'], $sfares['expdatemonth'], $sfares['expdateyear'], $sfares['card_holder_name'], $amountToPay, $sfares['firstname'], $sfares['lastname'], $sfares['phone'], $sfares['email'], $passenger_log_id, $sfares['friends_p_id'], $primaryPassenger, $pre_transaction_amount, $pre_transaction_id, $pickupDate, $payment_types, $currency_format);
				if($paymentResult == 2){//if payment failure for secondary passenger that fare percentage will be added to primary passenger
					$failurePercent = $failurePercent + $sfares['fare_percentage'];
					//function to send Message to passenger
					$this->sendMessageToSplittedPassenger($passenger_log_id,$sfares['phone'],'failure');
				} else {
					//function to send Mail to passenger
					$this->sendMailToSplittedPassenger($passenger_log_id,$sfares['email'],$sfares['firstname'],$pickupLocation,$pickup_latitude,$pickup_longitude,$dropLocation,$drop_latitude,$drop_longitude,$active_record,$used_wallet_amount,$trip_fare,$values['minutes_fare'],$fare,$values['pay_mod_id'],$values['distance'],$values['minutes_traveled'],$values['eveningfare'],$values['nightfare'],$waiting_hours,$waiting_cost,$company_tax,$passPercent,$amountToPay);
					//function to send Message to passenger
					$this->sendMessageToSplittedPassenger($passenger_log_id,$sfares['phone'],'success');
				}
			}
		}
        
        /******* Process the next step once we get the response from payment gateway ****************************/
        
        if (isset($_SESSION["paymentresponse"]) && !empty($_SESSION["paymentresponse"]) || isset($result->success)) {
            $paymentresponse = array();
            $ack             = isset($_SESSION['paymentresponse']["ACK"]) ? strtoupper($_SESSION['paymentresponse']["ACK"]) : '';
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING" || isset($result->success)) {
                $invoceno = commonfunction::randomkey_generator();
                if ($payment_types == 2) {
                    $paymentresponse['TRANSACTIONID'] = $braintree_trans_id['TRANSACTIONID'];
                } else {
                    $paymentresponse = $_SESSION['paymentresponse'];
                }
                
                $insert_array         = array(
                    "passengers_log_id" => $passenger_log_id,
                    "distance" => $values['distance'],
                    "actual_distance" => $values['actual_distance'],
                    "distance_unit" => UNIT_NAME,
                    "tripfare" => $trip_fare,
                    "fare" => $fare,
                    "tips" => $tips,
                    "waiting_cost" => $waiting_cost,
                    "company_tax" => $company_tax,
                    "passenger_discount" => $passenger_discount_amt,
                    "account_discount" => $account_discount_amt,
                    "credits_used" => $credits_used,
                    "waiting_time" => $waiting_hours,
                    "trip_minutes" => $values['minutes_traveled'],
                    "minutes_fare" => $values['minutes_fare'],
                    "remarks" => $remarks,
                    "payment_type" => $values['pay_mod_id'],
                    "amt" => $amt,
                    "company_id" => $company_id, //nightfare_applicable
                    "nightfare_applicable" => $values['nightfare_applicable'],
                    "nightfare" => $values['nightfare'],
                    "eveningfare_applicable" => $values['eveningfare_applicable'],
                    "eveningfare" => $values['eveningfare'],
                    "wallet_amount_used" => $array['wallet_amount_used']

                );
                $transactionfield     = $insert_array + $paymentresponse + $siteinfo_details; // Data Store
                //print_r($transactionfield);exit;
                /********** Update Driver Status after complete Payments *****************/
                $update_driver_arrary = array(
                    "status" => 'F'
                );
                $result               = $api_model->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_userid);
                /***********************************************************************************/
                //Update Travel Status after payment done
                /*$passenger_log_id = $values['trip_id'];
                $msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
                $journey = $driver_model->update_journey_status($passenger_log_id,$msg_status,$driver_reply,$journey_status);*/
                //insert transaction status
                //===================================
                $transaction_detail = $api_model->triptransact_details($transactionfield, $payment_types);
                return 1;
            } else {
                $message = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                return 0;
            }
        } else {
            $message = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
            return 0;
        }
    }
    
    public function hasabe_pay($array) {        
        $trip_id                = $array['trip_id'];
        $amt                    = $array['actual_amount'];        
        $distance               = $array['distance'];
        $trip_minutes           = $array['minutes_traveled'];
        $waiting_cost           = $array['waiting_cost'];
        
        $api_model             = Model::factory(MOBILEAPI_107);
        $amt =number_format($amt, 3, '.', '');
        $success_url=URL_BASE."knet_response.html";
        $failure_url=URL_BASE."knet_response.html";
            
        $knet_details = $api_model->knet_details();
        $knet_alias = $knet_details['knet_alias'];
        
        $payment_method = $knet_details['payment_method'];
        $knet_type = ($payment_method =="L") ? "live" : "sandbox";
        if ($knet_type == "live") {
            $url="https://www.hesabe.com/authpost";                        
        } else {
            $url="http://demo.hesabe.com/authpost";        
        }
           
        //$amt = 0.001;
        $data="MerchantCode=$knet_alias&Amount=$amt&SuccessUrl=$success_url&FailureUrl=$failure_url&Variable1=$trip_id&Variable2=$amt&Variable3=$distance&Variable4=$trip_minutes&Variable5=$waiting_cost&Method=1";
        
        $result= $this->common_curl_json_request($data,$url);
        return $result;
    }

    public function hasabe_pay_wallet($array) {        
        $amt                = $array['amt'];
        $passenger_id       = $array['passenger_id'];        
        
        $api_model             = Model::factory(MOBILEAPI_107);
        $amt =number_format($amt, 3, '.', '');
        $success_url=URL_BASE."knet_wallet_response.html";
        $failure_url=URL_BASE."knet_wallet_response.html";
            
        $knet_details = $api_model->knet_details();
        $knet_alias = $knet_details['knet_alias'];
        
        $payment_method = $knet_details['payment_method'];
        $knet_type = ($payment_method =="L") ? "live" : "sandbox";
        if ($knet_type == "live") {
            $url="https://www.hesabe.com/authpost";                        
        } else {
            $url="http://demo.hesabe.com/authpost";        
        }
           
        //$amt = 0.001;
        $data="MerchantCode=$knet_alias&Amount=$amt&SuccessUrl=$success_url&FailureUrl=$failure_url&Variable1=$amt&Variable2=$passenger_id&Method=1";
        
        $result= $this->common_curl_json_request($data,$url);
        return $result;
    }
    
    public function common_curl_json_request($data,$url) {
        $data_string = $data;        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        $result = json_decode(curl_exec($ch));
        return $result;
    }

    
    public function cancel_trippayment($values, $cancellation_nfree, $default_companyid)
    {
        $api_model             = Model::factory(MOBILEAPI_107);
        $passenger_log_details = $api_model->passengerlogid_details($values['passenger_log_id']);
        $passenger_userid      = $passenger_log_details[0]['passengers_id'];
        $driver_userid         = $passenger_log_details[0]['driver_id'];
        $driver_userid         = $passenger_log_details[0]['driver_id'];
        $company_id            = $passenger_log_details[0]['company_id'];
        //$array['company_id'] = $passenger_log_details[0]['company_id'];
        $values['company_id']  = $passenger_log_details[0]['company_id'];
        $shipping_first_name   = isset($passenger_log_details[0]['name']) ? $passenger_log_details[0]['name'] : "";
        $shipping_last_name    = isset($passenger_log_details[0]['lastname']) ? $passenger_log_details[0]['lastname'] : "";
        $shipping_email        = isset($passenger_log_details[0]['email']) ? $passenger_log_details[0]['email'] : "";
        $street                = $city = $state = $country_code = $currency_code = $country_code = $zipcode = $paypal_api_username = $paypal_api_password = $trip_id = $paypal_api_signature = $currency_format = "";
        $card_type             = '';
        $default               = 'yes';
        $carddetails           = $api_model->get_creadit_card_details($passenger_userid, $card_type, $default);
        if (count($carddetails) > 0) {
            $creditcard_no  = encrypt_decrypt('decrypt', $carddetails[0]['creditcard_no']);
            $creditcard_cvv = $values['creditcard_cvv'];
            $expdatemonth   = $carddetails[0]['expdatemonth'];
            $expdateyear    = $carddetails[0]['expdateyear'];
        }
        //echo $creditcard_no;exit;
        $city_id              = $passenger_log_details[0]['search_city'];
        $taxi_id              = $passenger_log_details[0]['taxi_id'];
        $taxi_model_details   = $api_model->get_taxi_model_details($taxi_id);
        $taxi_model           = $taxi_model_details[0]['taxi_model'];
        $siteinfo_details     = $api_model->siteinfo_details();
        $fare_details         = $api_model->get_model_fare_details($company_id, $taxi_model, $city_id);
        //$amount = $values['total_fare'] = $company_details[0]['cancellation_fare'];
        $values['total_fare'] = $fare_details[0]['cancellation_fare'];
        $amount               = $fare_details[0]['cancellation_fare'];
        /******** SAR Equal USD ******************/
        //$c_amount = round(currency_conversion_usd('SAR',$amount),2); //exit;			
        if ($default_companyid > 0) {
            //$paypal_details = $api_model->company_paypal_details($values['company_id']);		
            //$company_addr_details = $api_model->company_addr_details($values['company_id']);
            //$city=$api_model->company_get_city_name($company_addr_details[0]['login_city']);
            $paypal_details           = $api_model->company_payment_details($values['company_id']);
            $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
            $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
            $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
            $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
            $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
            $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
            $street                   = COMPANY_STREET_ADDR;
            $city                     = COMPANY_LOGIN_CITY_NAME;
            $state                    = COMPANY_LOGIN_STATE_NAME;
            $country_code             = COMPANY_LOGIN_ISO_COUNTRYCODE;
            //$country_dets=$api_model->company_get_country_code($company_addr_details[0]['login_country']);
            //	print_r($country_dets);exit;
            $currency_code            = COMPANY_CURRENCY_FORMAT;
            //$country_code=isset($country_dets[0]['iso_country_code'])?$country_dets[0]['iso_country_code']:"";
            $zipcode                  = COMPANY_ZIPCODE;
        } else {
            //$paypal_details = $api_model->paypal_details(); 
            $paypal_details           = $api_model->payment_gateway_details();
            $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
            $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
            $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
            $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
            $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
            $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
        }
        /******* For Paypal Payment Pro**********************/
        if ($payment_types == 1) {
            //echo $creditcard_no;exit;
            $product_title  = Html::chars('Complete Trip');
            //$payment_type = 'Authorization';
            $payment_action = 'sale';
            $request        = 'METHOD=DoDirectPayment';
            $request .= '&VERSION=65.1'; //  $this->version='65.1';     51.0  
            $request .= '&USER=' . urlencode($payment_gateway_username);
            $request .= '&PWD=' . urlencode($payment_gateway_password);
            $request .= '&SIGNATURE=' . urlencode($payment_gateway_key);
            $request .= '&CUSTREF=' . (int) $values['passenger_log_id'];
            $request .= '&PAYMENTACTION=' . $payment_action; //type
            $request .= '&AMT=' . urlencode($amount); //   $amount = urlencode($data['amount']);
            //$request .= '&CREDITCARDTYPE=' . $_POST['cc_type'];
            $request .= '&ACCT=' . urlencode(str_replace(' ', '', $creditcard_no));
            // $request .= '&CARDSTART=' . urlencode($_POST['cc_start_date_month'] . $_POST['cc_start_date_year']);
            $request .= '&EXPDATE=' . urlencode($expdatemonth . $expdateyear);
            $request .= '&CVV2=' . urlencode($creditcard_cvv);
            $request .= '&CURRENCYCODE=' . $currency_format;
            //exit;
            $paypal_type = ($payment_method == "L") ? "live" : "sandbox";
            //echo $paypal_type;
            if ($paypal_type == "live") {
                $curl = curl_init('https://api-3t.paypal.com/nvp');
                /*** Billing Address ************/
                $request .= '&FIRSTNAME=' . urlencode($shipping_first_name);
                $request .= '&LASTNAME=' . urlencode($shipping_last_name);
                $request .= '&EMAIL=' . urlencode($shipping_email);
                $request .= '&IPADDRESS=' . urlencode($_SERVER['REMOTE_ADDR']);
                $request .= '&STREET=' . urlencode($street);
                $request .= '&CITY=' . urlencode($city);
                $request .= '&STATE=' . urlencode($state);
                $request .= '&ZIP=' . urlencode($zipcode);
                $request .= '&COUNTRYCODE=' . urlencode($country_code);
                /***************************************/
            } else {
                $curl = curl_init('https://api-3t.sandbox.paypal.com/nvp');
            }
            //	print_r($request);
            curl_setopt($curl, CURLOPT_PORT, 443);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
            curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
            $response = curl_exec($curl);
            $nvpstr   = $response;
            curl_close($curl);
            //print_r($nvpstr);	
            $intial   = 0;
            $nvpArray = array();
            while (strlen($nvpstr)) {
                //postion of Key
                $keypos                       = strpos($nvpstr, '=');
                //position of value
                $valuepos                     = strpos($nvpstr, '&') ? strpos($nvpstr, '&') : strlen($nvpstr);
                /*getting the Key and Value values and storing in a Associative Array*/
                $keyval                       = substr($nvpstr, $intial, $keypos);
                $valval                       = substr($nvpstr, $keypos + 1, $valuepos - $keypos - 1);
                //decoding the respose
                $nvpArray[urldecode($keyval)] = urldecode($valval);
                $nvpstr                       = substr($nvpstr, $valuepos + 1, strlen($nvpstr));
            }
            $_SESSION["paymentresponse"] = array();
            $_SESSION["paymentresponse"] = $nvpArray;
            //print_r($_SESSION["paymentresponse"]);exit;
        }
        /******* For Braintree Payment**********************/
        else if ($payment_types == 2) {
            try {
                /** Brain Tree payment gateway **/
                $product_title  = Html::chars('Complete Trip');
                $payment_action = 'sale';
                //require_once DOCROOT.'braintree-payment/lib/Braintree.php';
                require_once(APPPATH . 'vendor/braintree-payment/lib/Braintree.php');
                $pay_type = ($payment_method == "L") ? "live" : "sandbox";
                if ($pay_type == "live") {
                    Braintree_Configuration::environment('production');
                } else {
                    Braintree_Configuration::environment('sandbox');
                }
                Braintree_Configuration::merchantId($payment_gateway_username); //your_merchant_id
                Braintree_Configuration::publicKey($payment_gateway_password); //your_public_key
                Braintree_Configuration::privateKey($payment_gateway_key); //your_private_key
                $amount          = $amount;
                $firstName       = $shipping_first_name;
                $lastName        = $shipping_last_name;
                $company         = "";
                $phone           = "";
                $cnumber         = str_replace(' ', '', $creditcard_no);
                $ccv             = str_replace(' ', '', $creditcard_cvv);
                $expirationMonth = $expdatemonth;
                $expirationYear  = $expdateyear;
                $email           = $shipping_email;
                $result          = Braintree_Transaction::sale(array(
                    'amount' => $amount,
                    'creditCard' => array(
                        'cardholderName' => $firstName,
                        'number' => $cnumber, //$_POST['creditCard']
                        'expirationMonth' => $expirationMonth, //$_POST['month']
                        'expirationYear' => $expirationYear, //$_POST['year']
                        'cvv' => $ccv
                    ),
                    'customer' => array(
                        'firstName' => isset($passenger_log_details[0]['passenger_name']) ? $passenger_log_details[0]['passenger_name'] : "",
                        'lastName' => isset($passenger_log_details[0]['passenger_lastname']) ? $passenger_log_details[0]['passenger_lastname'] : "",
                        'company' => '',
                        'phone' => isset($passenger_log_details[0]['passenger_phone']) ? $passenger_log_details[0]['passenger_phone'] : "",
                        'fax' => '',
                        'website' => '',
                        'email' => isset($passenger_log_details[0]['passenger_email']) ? $passenger_log_details[0]['passenger_email'] : ""
                    ),
                    'shipping' => array(
                        'firstName' => $shipping_first_name,
                        'lastName' => $shipping_last_name,
                        'company' => '',
                        'streetAddress' => $street,
                        'extendedAddress' => '',
                        'locality' => $state,
                        'region' => $country_code,
                        'postalCode' => $zipcode,
                        'countryCodeAlpha2' => $country_code
                    )
                ));
            }
            catch (Braintree_Exception $message) {
                return 0;
            }
            $braintree_trans_id = array();
            if ($result->success) {
                $braintree_trans_id['TRANSACTIONID'] = $result->transaction->id;
            } else if ($result->transaction) {
                $message                                       = isset($result->transaction->processorResponseText) ? $result->transaction->processorResponseText : "Payment Failed";
                $_SESSION['paymentresponse']['L_LONGMESSAGE0'] = $message;
                return 0;
            } else if ($result->message) {
                $message                                       = isset($result->message) ? $result->message : 'Payment Failed';
                $_SESSION['paymentresponse']['L_LONGMESSAGE0'] = $message;
                return 0;
            }
            /******* No Payment Gateway selected **********************/
        } else {
            return 7;
        }
        if (isset($_SESSION["paymentresponse"]) && !empty($_SESSION["paymentresponse"]) || isset($result->success)) {
            $paymentresponse = array();
            $ack             = isset($_SESSION['paymentresponse']["ACK"]) ? strtoupper($_SESSION['paymentresponse']["ACK"]) : '';
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING" || isset($result->success)) {
                $invoceno = commonfunction::randomkey_generator();
                if ($payment_types == 2) {
                    $paymentresponse['TRANSACTIONID'] = $braintree_trans_id['TRANSACTIONID'];
                } else {
                    $paymentresponse = $_SESSION['paymentresponse'];
                }
                $transactionfield   = $values + $paymentresponse + $siteinfo_details;
                $transaction_detail = $api_model->cancel_triptransact_details($transactionfield, $cancellation_nfree, $payment_types);
                $phone              = $passenger_log_details[0]['passenger_phone'];
                $passenger_log_id   = $values['passenger_log_id'];
                //free sms url with the arguments
                if (SMS == 1) {
                    $api             = Model::factory('mobileapi105');
                    //$this->phone=$this->commonmodel->get_passengers_details($email,1);
                    $message_details = $this->commonmodel->sms_message_by_title('payment_cancel');
                    $phone           = $passenger_log_details['passenger_phone'];
                    $to              = $phone;
                    $message         = $message_details[0]['sms_description'];
                    //$message = str_replace("##booking_key##",$passenger_log_id,$message);
                    $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                    //$api->send_sms($to,$message);
                }
                //Message::success("Payment has been completed succcessfully");
                $resVal = '1#' . $amount;
                return $resVal;
            } else {
                $message = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                return 0;
            }
        } else {
            return 0;
        }
    }
    /** Function to add money in passenger wallet from paypal or Brain Tree payment gateways **/
    public function wallet_addmoney($values, $default_companyid, $promo_code, $promocodeAmount)
    {
        $api_model                = Model::factory(MOBILEAPI_107);
        $passenger_details        = $api_model->get_passenger_wallet_amount($values['passenger_id']);
        $shipping_first_name      = isset($passenger_details[0]['name']) ? $passenger_details[0]['name'] : "";
        $shipping_last_name       = isset($passenger_details[0]['lastname']) ? $passenger_details[0]['lastname'] : "";
        $shipping_email           = isset($passenger_details[0]['email']) ? $passenger_details[0]['email'] : "";
        $wallet_amount            = isset($passenger_details[0]['wallet_amount']) ? $passenger_details[0]['wallet_amount'] : "";
        $street                   = $city = $state = $country_code = $currency_code = $country_code = $zipcode = $paypal_api_username = $paypal_api_password = $paypal_api_signature = $currency_format = "";
        $creditcard_no            = $values['creditcard_no'];
        $creditcard_cvv           = $values['creditcard_cvv'];
        $expdatemonth             = $values['expmonth'];
        $expdateyear              = $values['expyear'];
        $amount                   = $values['money'];
        $cardholder_name          = $values['cardholder_name'];
        $payment_types            = $values['payment_type'];
        $savecard                 = $values['savecard'];
        $paypal_details           = $api_model->payment_gateway_bytype($payment_types);
        $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
        $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
        $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
        $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
        $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
        /******* For Paypal Payment Pro**********************/
        if ($payment_types == 1) {
            //echo $creditcard_no;exit;
            $product_title  = Html::chars('Add Money');
            //$payment_type = 'Authorization';
            $payment_action = 'sale';
            $request        = 'METHOD=DoDirectPayment';
            $request .= '&VERSION=65.1'; //  $this->version='65.1';     51.0  
            $request .= '&USER=' . urlencode($payment_gateway_username);
            $request .= '&PWD=' . urlencode($payment_gateway_password);
            $request .= '&SIGNATURE=' . urlencode($payment_gateway_key);
            $request .= '&CUSTREF=' . (int) $values['passenger_id'];
            $request .= '&PAYMENTACTION=' . $payment_action; //type
            $request .= '&AMT=' . urlencode($amount); //   $amount = urlencode($data['amount']);
            //$request .= '&CREDITCARDTYPE=' . $_POST['cc_type'];
            $request .= '&ACCT=' . urlencode(str_replace(' ', '', $creditcard_no));
            // $request .= '&CARDSTART=' . urlencode($_POST['cc_start_date_month'] . $_POST['cc_start_date_year']);
            $request .= '&EXPDATE=' . urlencode($expdatemonth . $expdateyear);
            $request .= '&CVV2=' . urlencode($creditcard_cvv);
            $request .= '&CURRENCYCODE=' . $currency_format;
            //exit;
            $paypal_type = ($payment_method == "L") ? "live" : "sandbox";
            //echo $paypal_type;
            if ($paypal_type == "live") {
                $curl = curl_init('https://api-3t.paypal.com/nvp');
                /*** Billing Address ************/
                $request .= '&FIRSTNAME=' . urlencode($shipping_first_name);
                $request .= '&LASTNAME=' . urlencode($shipping_last_name);
                $request .= '&EMAIL=' . urlencode($shipping_email);
                $request .= '&IPADDRESS=' . urlencode($_SERVER['REMOTE_ADDR']);
                $request .= '&STREET=' . urlencode($street);
                $request .= '&CITY=' . urlencode($city);
                $request .= '&STATE=' . urlencode($state);
                $request .= '&ZIP=' . urlencode($zipcode);
                $request .= '&COUNTRYCODE=' . urlencode($country_code);
                /***************************************/
            } else {
                $curl = curl_init('https://api-3t.sandbox.paypal.com/nvp');
            }
            //	print_r($request);
            curl_setopt($curl, CURLOPT_PORT, 443);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
            curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
            $response = curl_exec($curl);
            $nvpstr   = $response;
            curl_close($curl);
            //print_r($nvpstr);	
            $intial   = 0;
            $nvpArray = array();
            while (strlen($nvpstr)) {
                //postion of Key
                $keypos                       = strpos($nvpstr, '=');
                //position of value
                $valuepos                     = strpos($nvpstr, '&') ? strpos($nvpstr, '&') : strlen($nvpstr);
                /*getting the Key and Value values and storing in a Associative Array*/
                $keyval                       = substr($nvpstr, $intial, $keypos);
                $valval                       = substr($nvpstr, $keypos + 1, $valuepos - $keypos - 1);
                //decoding the respose
                $nvpArray[urldecode($keyval)] = urldecode($valval);
                $nvpstr                       = substr($nvpstr, $valuepos + 1, strlen($nvpstr));
            }
            $_SESSION["paymentresponse"] = array();
            $_SESSION["paymentresponse"] = $nvpArray;
            //print_r($_SESSION["paymentresponse"]);exit;
        }
        /******* For Braintree Payment**********************/
        else if ($payment_types == 2) {
            try {
                /** Brain Tree payment gateway **/
                $product_title  = Html::chars('Add Money');
                $payment_action = 'sale';
                //require_once DOCROOT.'braintree-payment/lib/Braintree.php';
                require_once(APPPATH . 'vendor/braintree-payment/lib/Braintree.php');
                $pay_type = ($payment_method == "L") ? "live" : "sandbox";
                if ($pay_type == "live") {
                    Braintree_Configuration::environment('production');
                } else {
                    Braintree_Configuration::environment('sandbox');
                }
                Braintree_Configuration::merchantId($payment_gateway_username); //your_merchant_id
                Braintree_Configuration::publicKey($payment_gateway_password); //your_public_key
                Braintree_Configuration::privateKey($payment_gateway_key); //your_private_key
                $amount          = $amount;
                $firstName       = $shipping_first_name;
                $lastName        = $shipping_last_name;
                $company         = "";
                $phone           = "";
                $cnumber         = str_replace(' ', '', $creditcard_no);
                $ccv             = str_replace(' ', '', $creditcard_cvv);
                $expirationMonth = $expdatemonth;
                $expirationYear  = $expdateyear;
                $email           = $shipping_email;
                $result          = Braintree_Transaction::sale(array(
                    'amount' => $amount,
                    'creditCard' => array(
                        'cardholderName' => $firstName,
                        'number' => $cnumber, //$_POST['creditCard']
                        'expirationMonth' => $expirationMonth, //$_POST['month']
                        'expirationYear' => $expirationYear, //$_POST['year']
                        'cvv' => $ccv
                    ),
                    'customer' => array(
                        'firstName' => isset($passenger_details[0]['name']) ? $passenger_details[0]['name'] : "",
                        'lastName' => isset($passenger_details[0]['lastname']) ? $passenger_details[0]['lastname'] : "",
                        'company' => '',
                        'phone' => isset($passenger_details[0]['phone']) ? $passenger_details[0]['phone'] : "",
                        'fax' => '',
                        'website' => '',
                        'email' => isset($passenger_details[0]['email']) ? $passenger_details[0]['email'] : ""
                    ),
                    'shipping' => array(
                        'firstName' => $shipping_first_name,
                        'lastName' => $shipping_last_name,
                        'company' => '',
                        'streetAddress' => $street,
                        'extendedAddress' => '',
                        'locality' => $state,
                        'region' => $country_code,
                        'postalCode' => $zipcode,
                        'countryCodeAlpha2' => $country_code
                    )
                ));
            }
            catch (Braintree_Exception $message) {
                //print_r($message);exit;
                return 0;
            }
            $braintree_trans_id = array();
            if ($result->success) {
                $braintree_trans_id['TRANSACTIONID'] = $result->transaction->id;
            } else if ($result->transaction) {
                $message                                       = isset($result->transaction->processorResponseText) ? $result->transaction->processorResponseText : "Payment Failed";
                $_SESSION['paymentresponse']['L_LONGMESSAGE0'] = $message;
                return 0;
            } else if ($result->message) {
                $message                                       = isset($result->message) ? $result->message : 'Payment Failed';
                $_SESSION['paymentresponse']['L_LONGMESSAGE0'] = $message;
                return 0;
            }
            /******* No Payment Gateway selected **********************/
        } else {
            return 7;
        }
        /******* Process the next step once we get the response from payment gateway ****************************/
        if (isset($_SESSION["paymentresponse"]) && !empty($_SESSION["paymentresponse"]) || isset($result->success)) {
            $paymentresponse = array();
            $ack             = isset($_SESSION['paymentresponse']["ACK"]) ? strtoupper($_SESSION['paymentresponse']["ACK"]) : '';
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING" || isset($result->success)) {
                $invoceno = commonfunction::randomkey_generator();
                if ($payment_types == 2) {
                    $paymentresponse['TRANSACTIONID'] = $braintree_trans_id['TRANSACTIONID'];
                } else {
                    $paymentresponse = $_SESSION['paymentresponse'];
                }
                /********** Update Wallet Money and Payment Status Status after complete Payments *****************/
                $totalWalletAmount   = $wallet_amount + $amount;
                $update_wallet_array = array(
                    "wallet_amount" => $totalWalletAmount
                );
                $result              = $api_model->update_table(PASSENGERS, $update_wallet_array, 'id', $values['passenger_id']);
                $correlation_id      = isset($paymentresponse['CORRELATIONID']) ? $paymentresponse['CORRELATIONID'] : '';
                $ack                 = isset($paymentresponse['ACK']) ? $paymentresponse['ACK'] : '1';
                $currecncy_code      = isset($paymentresponse['CURRENCYCODE']) ? $paymentresponse['CURRENCYCODE'] : '';
                $creditcard_no       = encrypt_decrypt('encrypt', $creditcard_no);
                $wallet_fieldArr     = array(
                    "passenger_id",
                    "creditcard_no",
                    "card_holder_name",
                    "expdatemonth",
                    "expdateyear",
                    "amount",
                    "currency_code",
                    "payment_status",
                    "payment_type",
                    "correlation_id",
                    "transaction_id",
                    "promocode",
                    "promocode_amount"
                );
                $wallet_valueArr     = array(
                    $values['passenger_id'],
                    $creditcard_no,
                    $cardholder_name,
                    $expdatemonth,
                    $expdateyear,
                    $amount,
                    $currecncy_code,
                    $ack,
                    $payment_types,
                    $correlation_id,
                    $paymentresponse['TRANSACTIONID'],
                    $promo_code,
                    $promocodeAmount
                );
                $wallet_log          = $api_model->add_wallet_log($wallet_fieldArr, $wallet_valueArr);
                //save the card details if savecard param is one
                if ($savecard == 1) {
					$args = array(array('$unwind' => 'creditcard_details'),
								array('$project' => array('id'=>'$creditcard_details.passenger_cardid')),
								array('$sort' => array('$creditcard_details.passenger_cardid'=>-1)),
								array('$limit' => 1)
								);
					$rs = $this->mongo_db->aggregate(MDB_CONTACTS,$args);
					$first_key = (isset($rs['result'])) ? $rs['result'][0]['id'] : 0;
					$inc_id = $first_key+1;
                    $passenger_id = $values['passenger_id'];
                    $card_fieldArr = array(
						'passenger_cardid' => (int)$inc_id,
						'passenger_id' => (int)$passenger_id,
                        'passenger_email' => $shipping_email,
                        'creditcard_no' => $creditcard_no,
                        'card_holder_name' => $cardholder_name,
                        'expdatemonth' => (int)$expdatemonth,
                        'expdateyear' => (int)$expdateyear
                    );
                    $api_model->add_credit_card_details($card_fieldArr, $passenger_id);
                }   
                /***********************************************************************************/
                return '1#' . $totalWalletAmount;
            } else {
                $message = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                return 0;
            }
        } else {
            $message = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
            return 0;
        }
    }
    /** function to check password and confirm password are same **/
    public static function checkwithpassword($confirmPass, $password)
    {
        if ($confirmPass != $password) {
            return false;
        } else {
            return true;
        }
    }
    /* wallet add money form validation */
    function wallet_addmoney_validation($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty')->rule('creditcard_no', 'not_empty')->rule('creditcard_no', 'min_length', array(
            ':value',
            '9'
        ))->rule('creditcard_no', 'max_length', array(
            ':value',
            '16'
        ))->rule('expmonth', 'not_empty')->rule('expyear', 'not_empty')->rule('money', 'not_empty')->rule('cardholder_name', 'not_empty');
    }
    
    public function _save_image($image, $dir)
    {
        if (! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif','mp4','flv','avi','wmv','mov')))
        {
            return FALSE;
        }
        $directory = $dir;
        if ($file = Upload::save($image, time().$image['name'], $directory)) {
            return time().$image['name'];
        }
        return FALSE;
    }
    
    /* Changes On 20-may-2016 */
     public function car_info_validation($array)
    {
        return Validation::factory($array)->rule('model_type', 'not_empty')->rule('taxi_number', 'not_empty')
		->rule('taxi_number', 'min_length', array(
            ':value',
            '4'
        ))->rule('taxi_number', 'max_length', array(
            ':value',
            '30'
        ))
        //->rule('taxi_no', 'alpha_numeric', array(':value','/^[0-9]{1,}/'))
            ->rule('taxi_number', 'regex', array(
            ':value',
            '/^[a-z0-9A-Z -]++$/iD'
        ))->rule('start_km', 'not_empty')->rule('driver_id','not_empty');
    }
      public function car_info_validation1($array)
    {		
        return Validation::factory($array)->rule('model_type', 'not_empty')->rule('taxi_number', 'not_empty')
		->rule('taxi_number', 'min_length', array(
            ':value',
            '4'
        ))->rule('taxi_number', 'max_length', array(
            ':value',
            '30'
        ))
        //->rule('taxi_no', 'alpha_numeric', array(':value','/^[0-9]{1,}/'))
            ->rule('taxi_number', 'regex', array(
            ':value',
            '/^[a-z0-9A-Z -]++$/iD'
        ))->rule('feedback', 'not_empty')->rule('driver_id','not_empty')->rule('end_km', 'not_empty')->rule('end_km', 'numeric');
    }
       public function check_validation_passenger($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty');
    }
       public function check_validation_passenger1($array)
    {
        return Validation::factory($array)->rule('passenger_id', 'not_empty');
    }
    public function check_validation_child_member($array){
		return Validation::factory($array)->rule('child_id', 'not_empty')->rule('flag', 'not_empty')->rule('checkflag','not_empty')->rule('request_id', 'not_empty');
	}
    
    public function validate_update_payment_type($array){
		return Validation::factory($array)->rule('trip_id', 'not_empty')->rule('payment_type', 'not_empty')->rule('payment_type', 'numeric');
	}
    /* Changes On 20-may-2016 */
	
    /* Changes On 24-may-2016 */
    public function find_contacts_validation($array){
		return Validation::factory($array)->rule('phone', 'not_empty');
	}
	public function check_validation_send_sms($array){
		
		return Validation::factory($array)->rule('fromname', 'not_empty')->rule('to', 'not_empty')->rule('content', 'not_empty')->rule('app', 'not_empty');
	}
	
	public function validate_qrcode($array){
		return Validation::factory($array)->rule('code', 'not_empty');
	}
	
	/* VALIDATION FOR REGISTRATION STEP -3 */
	  public function passenger_register_validation_step3($array)
    {
        return Validation::factory($array)->rule('email', 'not_empty')->rule('email', 'email');
	/*->rule('civilid','Model_Add::civilid_isValid',array(':value'))->rule('civilid', 'not_empty')
        ->rule('civilid','Model_Add::civilid_exist',array(':value'))*/
       
    }
	
	 public function validate_update_drop_location($array){
		return Validation::factory($array)->rule('trip_id', 'not_empty')->rule('latitude', 'not_empty')->rule('longitude', 'not_empty')->rule('drop_location','not_empty');
	}

     public function validate_passenger_detail($array)
    {
        return Validation::factory($array)->rule('id', 'not_empty');
    }
    //
	
	/* VALIDATION FOR REGISTRATION STEP -3 */
    /* Changes On 24-may-2016 */
    
    
    
    
} //  End Website  
