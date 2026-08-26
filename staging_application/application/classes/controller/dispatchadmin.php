<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains SITE ADMIN details

* @Package: ConnectTaxi

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
abstract class Controller_Dispatchadmin extends Controller_Template
{
    //Default variables
    public $template = "admin/taxi_dispatch/template";
    public $selected_page_title;
    public $page_title;
    public $filter;
    public $status;
    public $footer_contents;
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        $controller = $request->controller();
        $action     = $request->action();

        //Session instance
        $this->session       = Session::instance();
        $this->urlredirect   = Request::current();
        //Assign the request to the controller
        $this->request  = $request;
        //Assign a response to the controller
        $this->response = $response;
        
        $this->emailtemplate = Model::factory('emailtemplate');
        $this->commonmodel   = Model::factory('commonmodel');
        $this->company_id    = $company_id = isset($_SESSION['company_id']) ? $_SESSION['company_id'] : "";
        $this->lang          = $this->session->get('lang');
        if ($this->lang != "") {
            $lang = $this->lang;
        } else {
            $lang = "en";
        }
        $lang = "en";
        $this->currlang            = I18n::lang($lang);
        $this->javascript_language = "";
        View::bind_global('js_language', $this->javascript_language);
        /** get location **/
        $location = $this->commonmodel->company_location($company_id);

        if (count($location) > 0) {
            $this->country_company = $location['login_country'];
            $this->state_company   = $location['login_state'];
            $this->city_company    = $location['login_city'];
        }
        $this->usertype  = $this->session->get('user_type');
        $this->username  = $this->session->get('username');
        $this->firstname = $this->session->get('first_name');
        $this->adminid   = $this->session->get('userid');
        //Filter type	
        //Get cookie values if cookie is set and apply to session variables
        Cookie::$salt    = 'userid';
        $cookie          = Cookie::get('userid');
        if ($cookie) {
            $this->session->set("userid", $cookie);
            $user_details = $this->authorize->select_user_details_by_id($cookie);
            if (count($user_details) > 0) {
                $this->session->set("user_type", $user_details['user_type']);
                $this->session->set("email", $user_details['email']);
            }
        }
        $this->userid = $this->session->get("userid");
        $site_settings = $this->commonmodel->select_site_settings_old();
        $this->app_name  = $site_settings['app_name'];
        $this->siteemail = $site_settings['email_id'];

        $this->all_currency_code = "";
        $this->currencysymbol    = "";
        DEFINE("SITENAME", $this->app_name);
        //binding variables to views	
        View::bind_global('app_name', $this->app_name);
        View::bind_global('currencysymbol', $this->currencysymbol);
        View::bind_global('siteemail', $this->siteemail);
        View::bind_global('usertype', $this->usertype);
        View::bind_global('username', $this->username);
        View::bind_global('first_name', $this->firstname);
        View::bind_global('adminid', $this->adminid);
        $company_currency = findcompany_currency($company_id);
        View::bind_global('currency_code', $this->all_currency_code);
        View::bind_global('company_currency', $company_currency);
        View::bind_global('action', $action);
        View::bind_global('controller', $controller);
        View::bind_global('selected_page_title', $this->selected_page_title);
        //status to all views
        View::bind_global('status', $this->allstatus);
        $this->meta_description = ''; //
        $this->meta_keywords    = ''; //
        $this->title            = ''; //
        View::bind_global('meta_description', $this->meta_description);
        View::bind_global('page_title', $this->page_title);
        View::bind_global('meta_keywords', $this->meta_keywords);

    } //End of construct method
    /**
     *****encode()****
     * @return encoded API Result
     */
    public function encode($result)
    {
        return json_encode($result);
    }
    /**
     *****decode()****
     * @return decoded API Result
     */
    public function decode($result)
    {
        $result  = json_decode($result);
        $version = explode(".", phpversion());
        if ($version[0] > 5) {
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    $error = "";
                    break;
                case JSON_ERROR_DEPTH:
                    $error = "Maximum stack depth exceeded";
                    break;
                case JSON_ERROR_STATE_MISMATCH:
                    $error = "Underflow or the modes mismatch";
                    break;
                case JSON_ERROR_CTRL_CHAR:
                    $error = "Unexpected control character found";
                    break;
                case JSON_ERROR_SYNTAX:
                    $error = "Syntax error, malformed JSON";
                    break;
                case JSON_ERROR_UTF8:
                    $error = "Malformed UTF-8 characters, possibly incorrectly encoded";
                    break;
                default:
                    $error = "";
                    break;
            }
            if (!empty($error)) {
                throw new exception("JSON Error: " . $error);
            }
        }
        return $result;
    }
    /**
     * ****action_currenttimestamp()****
     * @return time format
     */
    public function currenttimestamp()
    {
        return date("Y:m:d H:i:s", time());
    }
    /**
     * ****action_email_send()****
     * @E-Mail function calls from here
     */
    public function email_send(array $mail, $type = 'smtp', $htmlneed = true)
    {
        if (is_array($mail)) {
            if ($this->array_keys_exists($mail, [
                'to',
                'from',
                'subject',
                'message'
            ])) {
                $to      = $mail['to'];
                $from    = $mail['from'];
                $subject = $mail['subject'];
                $message = $mail['message'];
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type:text/html;charset=iso-8859-1' . "\r\n";
                $headers .= 'From: ' . $from . "\r\n";
                switch ($type) {
                    case "smtp":
                        $this->siteusers = Model::factory('siteusers');
                        $smtp_detail     = $this->siteusers->get_smtpdetails();
                        $smtp_config     = "";
                        if (isset($smtp_detail[0])) {
                            $host        = $smtp_detail[0]['smtp_host'];
                            $username    = $smtp_detail[0]['smtp_username'];
                            $password    = $smtp_detail[0]['smtp_password'];
                            $port        = $smtp_detail[0]['smtp_port'];
                            $smtp_config = [
                                'driver' => 'smtp',
                                'options' => [
                                    'hostname' => $host,
                                    'username' => $username,
                                    'password' => $password,
                                    'port' => $port,
                                    'encryption' => 'ssl'
                                ]
                            ];
                        }
                        $smtp_config1 = [
                            'driver' => 'smtp',
                            'options' => [
                                'hostname' => 'smtp.gmail.com',
                                'username' => 'johnjoeshep@gmail.com',
                                'password' => 'test@123',
                                'port' => '465',
                                'encryption' => 'ssl'
                            ]
                        ];
                        //mail sending option here
                        try {
                            if (Email::connect($smtp_config1)) {
                                if (Email::send($to, $from, $subject, $message, $html = $htmlneed) == 0) {
                                    return 1;
                                }
                                return 0;
                            }
                        }
                        catch (Exception $e) {
                            try {
                                if (mail($to, $subject, $message, $headers)) {
                                    return 1;
                                }
                            }
                            catch (Exception $e) {
                                return 0;
                            }
                        }
                        break;
                    default:
                        if (mail($to, $subject, $message, $headers)) {
                            return 1;
                        }
                        break;
                }
            } else {
                return 2;
            }
        }
    }
    /**
     * ***action_array_keys_exists()****
     * ** User Defined Function **
     * @return check array exist otr not
     */
    public function array_keys_exists($array, $keys)
    {
        foreach ($keys as $k) {
            if (!isset($array[$k])) {
                return false;
            }
        }
        return true;
    }
    /**
     * ****DisplayDateTimeFormat()****
     *
     * @param $input_date_time string
     * @param 
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
    public function get_geolocation()
    {
        //return $rs;
    }
} // End Dispatch Admin
