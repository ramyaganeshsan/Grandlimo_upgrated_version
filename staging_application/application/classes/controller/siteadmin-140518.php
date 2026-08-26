<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************
* Contains SITE ADMIN details
* @Package: ConnectTaxi
* @Author: NDOT Team
* @URL : http://www.ndot.in
********************************************************************/
abstract class Controller_Siteadmin extends Controller_Template
{
    //Default variables
    public $template = "admin/template";
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
        $controller          = $request->controller();
        $action              = $request->action();
        //Session instance
        $this->session       = Session::instance();
        $this->urlredirect   = Request::current();
        //Assign the request to the controller
        $this->request  = $request;
        //Assign a response to the controller
        $this->response = $response;
        //Models declaration
        $this->add_model = $add_model = Model::factory('add');
        $this->authorize     = Model::factory('authorize');
        $this->commonmodel   = Model::factory('commonmodel');
        $this->emailtemplate = Model::factory('emailtemplate');
        $this->add_model     = Model::factory('add');
        $this->siteusers     = Model::factory('siteusers');
       /* $this->lang          = $this->session->get('lang');
        if ($this->lang != "") {
            $lang = $this->lang;
        } else {
            $lang = "en";
        }*/
        $lang = "en";
        $this->lang = "en";
        $this->currlang            = I18n::lang($lang);
        $this->javascript_language = json_encode(I18n::load($this->currlang));
        View::bind_global('js_language', $this->javascript_language);
        /** get location **/
        $location = $this->commonmodel->company_location(COMPANY_CID);
        if (count($location) > 0) {
            View::bind_global('country_company', $location['login_country']);
            View::bind_global('state_company', $location['login_state']);
            View::bind_global('city_company', $location['login_city']);
        }
        $this->usertype  = $this->session->get('user_type');
        $this->username  = $this->session->get('username');
        $this->firstname = $this->session->get('first_name');
        $this->adminid   = $this->session->get('userid');
        /*if (!empty($this->usertype) && ($this->usertype == 'M' || $this->usertype == 'C')) {
            $cid          = $this->session->get('company_id');
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result == 0) {
                if ($this->usertype == 'C') {
                    $returnUrl = "company/login?type=expire";
                } else {
                    $returnUrl = "manager/login?type=expire";
                }
                $this->session->destroy();
                Cookie::delete('userid');
                $this->urlredirect->redirect($returnUrl);
            }
        }*/
        //Filter type
        View::bind_global('filter', $this->allfilter);
        //Get cookie values if cookie is set and apply to session variables
        Cookie::$salt = 'userid';
        $cookie       = Cookie::get('userid');
        if ($cookie) {
            $this->session->set("userid", $cookie);
            $user_details = $this->authorize->select_user_details_by_id($cookie);
            if (count($user_details) > 0) {
                $this->session->set("user_type", $user_details['user_type']);
                $this->session->set("email", $user_details['email']);
            }
        }
        if (isset($_SESSION) && array_key_exists('usertype', $_SESSION) && $_SESSION['usertype'] != ADMIN) {
            //if not admin redirect to home page (front end)
            $this->urlredirect->redirect('/');
        }
        $this->userid           = $this->session->get("userid");
        $userid         = $this->session->get('userid');
        $usrid          = $userid; 
        $this->currenttimestamp = $this->currenttimestamp();
        //Css & Script include for admin
        /**To Define path for selected theme**/
        define("ADMINIMGPATH", URL_BASE . 'public/admin/images/');
        define("CSSADMIN", URL_BASE . 'public/admin/');
        define("ADMINCSSPATH", CSSADMIN . 'css/');
        $adminstyles  = [
            ADMINCSSPATH . 'admin_style.css' => 'screen',
            ADMINCSSPATH . 'jquery-ui-1.8.11.custom.css' => 'screen'
        ];
        $adminscripts = [
            SCRIPTPATH . 'jquery-1.4.3.min.js'
        ];
        View::bind_global('adminstyles', $adminstyles);
        View::bind_global('adminscripts', $adminscripts);
        //Users Themes
        define("THEME", "default/");
        define("USERVIEW", "themes/" . THEME);
        define("CSSPATH", "public/" . THEME . "css/");
        //DEFINE("EMAILTEMPLATELOGO",URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png'); //IMAGESPATH      
        $userstyles  = [
            CSSPATH . 'layout.css' => 'screen'
        ]; //CSSPATH.'mobile_slider/skin.css' =>'screen'
        $userscripts = [
            SCRIPTPATH . 'jquery.jcarousel.pack.js',
            SCRIPTPATH . 'jquery-1.4.2.min.js'
        ];
        View::bind_global('styles', $userstyles);
        View::bind_global('scripts', $userscripts);
        //For Filter Defining
        //=====================
        $this->allfilter = [
           // "C" => "Company Owner",
            "D" => "Taxi Driver",
            "M" => "Company Manager"
           // "S" => "Moderator"
        ];
        //For status Defining
        //===================== 
        $this->allstatus = [
            "A" => "Active",
            "D" => "Block",
            "T" => "Trash"
        ];
        $site_settings = $this->commonmodel->select_site_settings_old();
        //print_r($site_settings);echo $site_settings['app_name'];exit;
        $this->app_name  = $site_settings['app_name'];
        $this->siteemail = $site_settings['email_id'];
        $getcurrencycode = $this->commonmodel->getcurrencycode();
        if (count($getcurrencycode) > 0) {
            $curr_codes = [];
            $curr_symbol = [];
            foreach ($getcurrencycode as $ccode) {
                $crcode       = $ccode['currency_code'];
                $curr_codes[] = $crcode;
                
                $crsymbol      = $ccode['currency_symbol'];
                $curr_symbol[] = $crsymbol;
            }
            $currencycoderesult      = array_combine($curr_codes, $curr_codes);
            $this->all_currency_code = $currencycoderesult;
            $currencysymbolresult = array_combine($curr_symbol, $curr_symbol);
            $this->currencysymbol = $currencysymbolresult;
        } else {
            $curr_codes[]            = CURRENCY_FORMAT;
            $currencycoderesult      = array_combine($curr_codes, $curr_codes);
            $this->all_currency_code = $currencycoderesult;
            $curr_symbol[]        = CURRENCY;
            $currencysymbolresult = array_combine($curr_symbol, $curr_symbol);
            $this->currencysymbol = $currencysymbolresult;
        }
        DEFINE("SITENAME", $this->app_name);
        //binding variables to views    
        View::bind_global('app_name', $this->app_name);
        View::bind_global('currencysymbol', $this->currencysymbol);
        View::bind_global('siteemail', $this->siteemail);
        View::bind_global('usertype', $this->usertype);
        View::bind_global('username', $this->username);
        View::bind_global('first_name', $this->firstname);
        View::bind_global('adminid', $this->adminid);
        View::bind_global('currency_code', $this->all_currency_code);
        //View::bind_global('currency_symbol',$this->currency_symbol);
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
        
        /** for footer info **/
        $footer_contents = $site_settings;
        View::bind_global('footer_contents', $footer_contents);
        
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
        if (!isset($this->session) || (!$this->session->get('userid'))) //&& !$this->session->get('id')
            {
            Message::error(__('login_access'));
            $this->request->redirect("/admin/login/");
        }
        return;
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
                        $smtp_detail = $this->siteusers->get_smtpdetails();
                        $smtp_config = "";
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
                        //$smtp_config = array('driver' => 'smtp','options' => array('hostname'=>'smtp.gmail.com','username'=>'johnjoeshep@gmail.com','password' =>'test@123','port' => '465','encryption' => 'ssl'));
                        //mail sending option here
                        try {
                            if (Email::connect($smtp_config)) {
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
 public function action_create_the_document_opt($input_table,$export_table_header,$export_table_field_select,$heading,$total_fare=''){
        $vars=explode('-',$_SESSION['download_set']);
            $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
            $this->session->delete('download_set');
            $total_card_fare = $total_cash_fare = $total_additional_fare=$total_online_knet_fare = 0;

            if($type==2)
            {
                /*
                .tr_border{border-bottom:1px solid #2c2c2c;}
                .invoice_head{text-align: center;color:#000000;}
                .head_border{border-bottom:1px solid #2c2c2c;margin-top:5px;}
                .totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:right;}
                  */
                $pdffile='<style>h1{color: navy;font-family: times;font-size: 24pt;font-weight:bold;}
                            td {font:12pt arial; color:#000000;}

                        </style>';
                    $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                     <tr>
                        <td width="100%" colspan="3" style="width:100%;height:80px;">
                            <img src="'.URL_BASE.'/public/uploads/site_logo/logo.png"/>
                        </td>
                    </tr>
                     </table>';
                     $hstart = $start+1;
                     $hend = $end+1;
                    $pdffile .='<table border="0" cellpadding="1" cellspacing="0">

                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>'.$heading.' from '.$hstart.' to '.$hend.'</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                     </tr> ';
                    
                     $pdffile.='
                     </table>';
                /*$pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
                $pdffile .='<tr><td style="text-align:center;">'.$heading.' from '.$start.' to '.$end.'</td></tr>';
                $pdffile .='</table>';*/
                $pdffile .='<table border="1" cellpadding="4" cellspacing="0">';
                $pdffile .='<tr>';
                $pdffile .='<td class="head_border"><b>'.__('payment_type').'</b></td>';
                $pdffile .='<td class="head_border"><b>'.__('sno_label').'</b></td>';
                foreach($export_table_header as $head){
                    $pdffile .='<td class="head_border"><b>'.$head.'</b></td>';
                }
                $pdffile .='</tr>';
            //    for($io=$start;$io<=$end;$io++){
                $detail_count = 0;
               // echo "<pre>";print_r($input_table);exit();
                foreach ($input_table as $key => $value) {
                    # code...
                     $pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b>'.ucfirst($value["pay_type"]).'</b></td>';
                    $pdffile .='</tr>';
                   
                /*    $pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b>Total Fare: </b>'.ucfirst($value["total_pay_pertype"]).'</td>';
                    $pdffile .='</tr>'; 

                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b> Total Edited fare: </b>'.ucfirst($value["total_edited_pay_pertype"]).'</td>';
                    $pdffile .='</tr>';*/

                

                    //foreach ($value['details'] as $dkey => $dvalue) {
                        # code...
                    $detail_count += count($value['details']);
                    $sno=0;
                    for($io=$start;$io<$detail_count;$io++){
                        $sno++;
                        if(isset($value['details'][$io])){
                            $pdffile .='<tr>';
                            $pdffile .='<td></td>';
                            $pdffile .='<td class="head_border">'.($sno).'</td>';
                            $apt_array=$value['details'][$io];
                            foreach($export_table_field_select as $kmr){
                                if(is_array($kmr)){
                                    $pdffile .='<td class="head_border">';
                                     $koo=1;foreach($kmr['field'] as $vat){
                                        if(isset($apt_array[$vat]) && $apt_array[$vat] !=""){
                                            if($koo < count($kmr['field'])){
                                                $pdffile .=$apt_array[$vat].$kmr['symbol'];
                                            }else{
                                                $pdffile .=$apt_array[$vat];
                                            }
                                        }else{
                                            $pdffile .='';
                                        }
                                    $koo++;
                                    }
                                    $pdffile .='</td>';
                                }elseif(isset($apt_array[$kmr])){
                                $pdffile .='<td class="head_border">'.$apt_array[$kmr].'</td>';
                                }else{
                                $pdffile .='<td class="head_border">---</td>';
                                }
                            }
                            $pdffile .='</tr>';     

                           // $pdffile.='<tr><td>Total:'.$payment_total.'</td></tr>';
                        }else{
                        $sno=0;    
                        }
                        
                    }
                       
                      $total_cash_fare += $value['total_cash_fare'];
                    $total_card_fare += $value['total_card_fare'];
                    $total_online_knet_fare += $value['total_online_knet_fare'];
                    $total_additional_fare += $value['total_additional_fare'];

                }
          //  }//end of foreach
            //}//end of for
          //  exit();
                 //$pdffile .='<tr><td></td></tr>';
                 $pdffile .='<tr>';
                    $pdffile .='<td colspan = "5" class="head_border"><b>Total Cash : </b></td><td>'.$total_cash_fare.'</td>';
                    $pdffile .='</tr>'; 

                    $pdffile .='<tr>';
                    $pdffile .='<td colspan = "5" class="head_border"><b> Total Card : </b></td><td>'.$total_card_fare.'</td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan = "5" class="head_border"><b> Total Online-Knet : </b></td><td>'.$total_online_knet_fare.'</td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan = "5" class="head_border"><b> Total Additional Fare: </b></td><td>'.$total_additional_fare.'</td>';
                    $pdffile .='</tr>';
                    

                 if(isset($total_fare) && $total_fare!=''){
                    $pdffile .='
                     <tr>
                      <td colspan = "5" class="head_border" style="text-align:left;"><b>Grand Total fare : '.$total_fare.'</b></td>
                     </tr>';
                 }
                $pdffile .='</table>';
                $filename = $heading."_".date("Y-m-d_H-i",time());
                $html = preg_replace("<tbody>"," ",$pdffile);
                $html = preg_replace("</tbody>"," ",$html);
                $html = trim($pdffile);
                ob_clean();
                $manage_model = Model::factory('manage');
                $generate_pdf = $manage_model->generate_pdf($html,$filename);
            }
            else{
                    $hstart = $start+1;
                    $hend = $end+1;
                    $pdffile ='<table border="0" cellpadding="1" cellspacing="0">

                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>'.$heading.'</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                     </tr> ';
                    
                     $pdffile.='
                     </table>';


                $pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
             /*   if(isset($total_fare) && $total_fare!=''){

                       $pdffile .='<tr>';
                        $pdffile .='<th>'.__('Grand Total Fare').'</th>';

                        $pdffile .='<td>'.$total_fare.'</td></tr>';
                }*/
                $pdffile .='<th>'.__('payment_type').'</th>';
                $pdffile .='<th>'.__('sno_label').'</th>';
                foreach($export_table_header as $head){
                $pdffile .='<th>'.$head.'</th>';
                }
                
                $detail_count = 0;
                foreach ($input_table as $key => $value) {
                    
                    # code...
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b>'.ucfirst($value["pay_type"]).'</b></td>';
                    $pdffile .='</tr>';
                   
                    /*$pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b>Total Fare: </b>'.ucfirst($value["total_pay_pertype"]).'</td>';
                    $pdffile .='</tr>'; 

                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="5" class="head_border"><b> Total Edited fare: </b>'.ucfirst($value["total_edited_pay_pertype"]).'</td>';
                    $pdffile .='</tr>';*/


                    //foreach ($value['details'] as $dkey => $dvalue) {
                        # code...
                    $detail_count += count($value['details']);
                    $sno=0;
                    for($io=$start;$io<$detail_count;$io++){
                        $sno++;
                        if(isset($value['details'][$io])){
                            $pdffile .='<tr>';
                            $pdffile .='<td></td>';
                            $pdffile .='<td class="head_border">'.($sno).'</td>';
                            $apt_array=$value['details'][$io];


                            foreach($export_table_field_select as $kmr){
                                if(is_array($kmr)){
                                    $pdffile .='<td>';
                                     $koo=1;foreach($kmr['field'] as $vat){
                                        if(isset($apt_array[$vat]) && $apt_array[$vat] !=""){
                                            if($koo < count($kmr['field'])){
                                                $pdffile .=$apt_array[$vat].$kmr['symbol'];
                                            }else{
                                                $pdffile .=$apt_array[$vat];
                                            }
                                        }else{
                                            $pdffile .='';
                                        }
                                    $koo++;
                                    }
                                    $pdffile .='</td>';
                                }elseif(isset($apt_array[$kmr])){
                                $pdffile .='<td class="head_border">'.$apt_array[$kmr].'</td>';
                                }else{
                                $pdffile .='<td class="head_border">---</td>';
                                }
                            }
                            $pdffile .='</tr>';
                        }else{
                        $sno=0;    
                        }
                        
                    }
                  /*  $pdffile .='<tr>';
                    $string = $value["pay_type"].' Total Fare';
                    $pdffile .='<td colspan="15" align="right" class="head_border">'.$string.'</td>';
                    $pdffile .='<td class="head_border">'.$value["total_pay_pertype"].'</td>';
                    $pdffile .='<td class="head_border">'.$value["total_edited_pay_pertype"].'</td>';
                    $pdffile .='</tr>';*/
                    $total_cash_fare += $value['total_cash_fare'];
                    $total_card_fare += $value['total_card_fare'];
                    $total_online_knet_fare += $value['total_online_knet_fare'];
                    $total_additional_fare += $value['total_additional_fare'];
                }
                 $pdffile .='<tr></tr>';
                 $pdffile .='<tr>';
                    $pdffile .='<td class="head_border"><b>Total Cash : </b></td><td>'.$total_cash_fare.'</td>';
                    $pdffile .='</tr>'; 

                    $pdffile .='<tr>';
                    $pdffile .='<td class="head_border"><b> Total Card : </b></td><td>'.$total_card_fare.'</td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td class="head_border"><b> Total Online-Knet : </b></td><td>'.$total_online_knet_fare.'</td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td class="head_border"><b> Total Additional Fare: </b></td><td>'.$total_additional_fare.'</td>';
                    $pdffile .='</tr>';
                    
                    if(isset($total_fare) && $total_fare!=''){
                    $pdffile .='
                         <tr><td class="head_border" style="text-align:left;"><b>Grand Total fare :</b></td>
                         <td>'.$total_fare.'</td>
                         </tr>';
                    }

                                  
                $pdffile .='</table>';

                $filename = $heading."_".date("Y-m-d_H-i",time());
                $pdffile_cnf = mb_convert_encoding($pdffile, 'UTF-16LE', 'UTF-8');
                header("Content-Type: application/octet-stream");
                header("Content-Disposition: attachment; filename='".$filename.".xls'");
                echo chr(255) . chr(254) . $pdffile_cnf;
                exit;

            }

    }
    public function action_create_the_document($input_table,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading=''){
        $vars=explode('-',$_SESSION['download_set']);
            $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
            $this->session->delete('download_set');

            if($type==2)
            {
                /*
                .tr_border{border-bottom:1px solid #2c2c2c;}
                .invoice_head{text-align: center;color:#000000;}
                .head_border{border-bottom:1px solid #2c2c2c;margin-top:5px;}
                .totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:right;}
                  */
                $pdffile ='<style>h1{color: navy;font-family: times;font-size: 24pt;font-weight:bold;}
                            td {font:12pt arial; color:#000000;}

                        </style>';
                    $pdffile .='<table border="0" cellpadding="8" cellspacing="0">
                     <tr>
                        <td valign="middle"  align="center" height="50px" colspan="1" style="background-color:#0e0e0e;" >
                            <img  height="60px" src="'.URL_BASE.'/public/images/logopdf.png"/>
                        </td>
                        <td align="right" height="50px" colspan="4" style="text-align:left;font-size:70px;background-color:#0e0e0e;color:#c78c32">'.ucwords($heading).'
                        </td>
                    </tr>
                    <tr>
                    <td height="10px" colspan="5">
                        </td>
                    </tr>
                     </table>';

                    $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
         
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                      <td style="text-align:right;"><b>'.$sub_heading.'</b></td>
                     </tr>
                     <tr>
                    <td height="10px">
                        </td>
                    </tr> ';
                  /*   if(isset($total_fare) && $total_fare!=''){
$pdffile .='
                     <tr>
                      <td class="head_border" style="text-align:left;"><b>Grand Total fare : '.$total_fare.'</b></td>
                     </tr>';
                 }*/
                     $pdffile.='
                     </table>';
                /*$pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
                $pdffile .='<tr><td style="text-align:center;">'.$heading.' from '.$start.' to '.$end.'</td></tr>';
                $pdffile .='</table>';*/
                $pdffile .='<table border="1" cellpadding="4" cellspacing="0">';
                $pdffile .='<tr style="background-color:##a6aaaf;;">';
                $pdffile .='<td ><b>'.__('sno_label').'</b></td>';
                foreach($export_table_header as $head){
                    $pdffile .='<td class=""><b>'.$head.'</b></td>';
                }
                $pdffile .='</tr>';
//echo "<pre>";print_r($input_table);exit();
                for($io=$start;$io<=$end;$io++){

                    if(isset($input_table[$io])){
                        $pdffile .='<tr>';
                        $pdffile .='<td class="head_border">'.($io+1).'</td>';
                        $apt_array=$input_table[$io];
                        foreach($export_table_field_select as $kmr){
                            if(is_array($kmr)){
                                $pdffile .='<td class="head_border">';
                                 $koo=1;foreach($kmr['field'] as $vat){
                                    if(isset($apt_array[$vat]) && $apt_array[$vat] !=""){
                                        if($koo < count($kmr['field'])){
                                            $pdffile .=$apt_array[$vat].$kmr['symbol'];
                                        }else{
                                            $pdffile .=$apt_array[$vat];
                                        }
                                    }else{
                                        $pdffile .='';
                                    }
                                $koo++;
                                }
                                $pdffile .='</td>';
                            }elseif(isset($apt_array[$kmr])){
                            $pdffile .='<td class="head_border">'.$apt_array[$kmr].'</td>';
                            }else{
                            $pdffile .='<td class="head_border">---</td>';
                            }
                        }
                        $pdffile .='</tr>';
                    }

                }
               // $pdffile .='<tr></tr>';
                 if(isset($input_table['total_cash_fare']))
                 {
                    $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td colspan="6" height="10px">
                        </td>
                </tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b>Total Cash : </b></td><td colspan="2">'.$input_table['total_cash_fare'].'</td>';
                    $pdffile .='</tr>'; 
                }

                 if(isset($input_table['total_card_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Card : </b></td><td colspan="2">'.$input_table['total_card_fare'].'</td>';
                    $pdffile .='</tr>';
                }
                 if(isset($input_table['total_online_knet_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Online-Knet : </b></td><td colspan="2">'.$input_table['total_online_knet_fare'].'</td>';
                    $pdffile .='</tr>';
                }
                 if(isset($input_table['total_additional_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Additional Fare: </b></td><td colspan="2" >'.$input_table['total_additional_fare'].'</td>';
                    $pdffile .='</tr>';
                }

               if(isset($input_table['grand_total_amt']))
                 {
                  $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td colspan="5" height="10px">
                        </td>
                </tr>';
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Fare: </b></td><td colspan="3" >'.$input_table['grand_total_amt'].'</td>';
                    $pdffile .='</tr>';  
                 } 
                 if(isset($input_table['grand_total_pending_amt']))
                 {
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Pending Amount </b></td><td colspan="3" >'.$input_table['grand_total_pending_amt'].'</td>';
                    $pdffile .='</tr>';  
                 } 
                 if(isset($input_table['grand_total_count']))
                 {
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Total Trip Count: </b></td><td colspan="3" >'.$input_table['grand_total_count'].'</td>';
                    $pdffile .='</tr>';  
                 }
                    
                    if(isset($total_fare) && $total_fare!=''){
                    $pdffile .='
                         <tr><td colspan="4" class="head_border" style="text-align:left;"><b>Grand Total fare :</b></td>
                         <td colspan="2">'.$total_fare.'</td>
                         </tr>';
                    }

                $pdffile .='</table>';
                $filename = $heading."_".date("Y-m-d_H-i",time());
                $html = preg_replace("<tbody>"," ",$pdffile);
                $html = preg_replace("</tbody>"," ",$html);
                $html = trim($pdffile);
                ob_clean();
                $manage_model = Model::factory('manage');
                $generate_pdf = $manage_model->generate_pdf($html,$filename);
            }else{
                $hstart = $start+1;
                $hend = $end+1;
                $pdffile ='<table border="0" cellpadding="1" cellspacing="0">

                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>'.$heading.'</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                     </tr> ';
                    
              //  $pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
               /* if(isset($total_fare) && $total_fare!=''){

                       $pdffile .='<tr>';
                        $pdffile .='<th>'.__('Grand Total Fare').'</th>';

                        $pdffile .='<td>'.$total_fare.'</td></tr>';
                }*/
                $pdffile .='<th>'.__('sno_label').'</th>';
                foreach($export_table_header as $head){
                $pdffile .='<th>'.$head.'</th>';
                }
            //    echo "<pre>";print_r($input_table);exit();

                for($io=$start;$io<=$end;$io++){
                    if(isset($input_table[$io])){
                        $pdffile .='<tr>';
                        $pdffile .='<td>'.($io+1).'</td>';
                        $apt_array=$input_table[$io];
                        foreach($export_table_field_select as $kmr){
                            if(is_array($kmr)){
                                $pdffile .='<td>';
                                 $koo=1;foreach($kmr['field'] as $vat){
                                    if(isset($apt_array[$vat]) && $apt_array[$vat] !=""){
                                        if($koo < count($kmr['field'])){
                                            $pdffile .=$apt_array[$vat].$kmr['symbol'];
                                        }else{
                                            $pdffile .=$apt_array[$vat];
                                        }
                                    }else{
                                        $pdffile .='';
                                    }
                                $koo++;
                                }
                                $pdffile .='</td>';
                            }elseif(isset($apt_array[$kmr])){
                            $pdffile .='<td>'.$apt_array[$kmr].'</td>';
                            }else{
                            $pdffile .='<td>---</td>';
                            }
                        }
                        $pdffile .='</tr>';
                    }

                }
                 //$pdffile .='<tr></tr>';
                 $pdffile .='<tr>';
                      if(isset($input_table['total_cash_fare']))
                 {
                    $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td colspan="6" height="10px">
                        </td>
                </tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b>Total Cash : </b></td><td colspan="2">'.$input_table['total_cash_fare'].'</td>';
                    $pdffile .='</tr>'; 
                }

                 if(isset($input_table['total_card_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Card : </b></td><td colspan="2">'.$input_table['total_card_fare'].'</td>';
                    $pdffile .='</tr>';
                }
                 if(isset($input_table['total_online_knet_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Online-Knet : </b></td><td colspan="2">'.$input_table['total_online_knet_fare'].'</td>';
                    $pdffile .='</tr>';
                }
                 if(isset($input_table['total_additional_fare']))
                 {
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b> Total Additional Fare: </b></td><td colspan="2" >'.$input_table['total_additional_fare'].'</td>';
                    $pdffile .='</tr>';
                }

               if(isset($input_table['grand_total_amt']))
                 {
                  $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td colspan="5" height="10px">
                        </td>
                </tr>';
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Fare: </b></td><td colspan="3" >'.$input_table['grand_total_amt'].'</td>';
                    $pdffile .='</tr>';  
                 } 
                 if(isset($input_table['grand_total_pending_amt']))
                 {
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Pending Amount </b></td><td colspan="3" >'.$input_table['grand_total_pending_amt'].'</td>';
                    $pdffile .='</tr>';  
                 } 
                 if(isset($input_table['grand_total_count']))
                 {
                  $pdffile .='<tr>';
                    $pdffile .='<td colspan="2" class="head_border"><b> Total Trip Count: </b></td><td colspan="3" >'.$input_table['grand_total_count'].'</td>';
                    $pdffile .='</tr>';  
                 }
                    
                    if(isset($total_fare) && $total_fare!=''){
                    $pdffile .='
                         <tr><td colspan="4" class="head_border" style="text-align:left;"><b>Grand Total fare :</b></td>
                         <td colspan="2">'.$total_fare.'</td>
                         </tr>';
                    }



                $pdffile .='</table>';

                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit;

            }

    }


    public function action_daily_sales_export($input_table,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading=''){
        $vars=explode('-',$_SESSION['download_set']);
            $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
            $this->session->delete('download_set');

            if($type==2)
            {
                /*
                .tr_border{border-bottom:1px solid #2c2c2c;}
                .invoice_head{text-align: center;color:#000000;}
                .head_border{border-bottom:1px solid #2c2c2c;margin-top:5px;}
                .totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:right;}
                  */
                $pdffile ='<style>h1{color: navy;font-family: times;font-size: 24pt;font-weight:bold;}
                            td {font:12pt arial; color:#000000;}

                        </style>';
                    $pdffile .='<table border="0" cellpadding="8" cellspacing="0">
                     <tr>
                        <td valign="middle"  align="center" height="50px" colspan="1" style="background-color:#0e0e0e;" >
                            <img  height="60px" src="'.URL_BASE.'/public/images/logopdf.png"/>
                        </td>
                        <td align="right" height="50px" colspan="4" style="text-align:left;font-size:70px;background-color:#0e0e0e;color:#c78c32">'.ucwords($heading).'
                        </td>
                    </tr>
                    <tr>
                    <td height="10px" colspan="5">
                        </td>
                    </tr>
                     </table>';

                    $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
         
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                      <td style="text-align:right;"><b>'.$sub_heading.'</b></td>
                     </tr>
                     <tr>
                    <td height="10px">
                        </td>
                    </tr> ';
                  /*   if(isset($total_fare) && $total_fare!=''){
$pdffile .='
                     <tr>
                      <td class="head_border" style="text-align:left;"><b>Grand Total fare : '.$total_fare.'</b></td>
                     </tr>';
                 }*/
                     $pdffile.='
                     </table>';
                /*$pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
                $pdffile .='<tr><td style="text-align:center;">'.$heading.' from '.$start.' to '.$end.'</td></tr>';
                $pdffile .='</table>';*/
                $pdffile .='<table border="1" cellpadding="4" cellspacing="0">';
                $pdffile .='<tr style="background-color:#a6aaaf;;">';
                $pdffile .='<td ><b>'.__('sno_label').'</b></td>';
                foreach($export_table_header as $head){
                    $pdffile .='<td class=""><b>'.$head.'</b></td>';
                }
                $pdffile .='</tr>';
//echo "<pre>";print_r($input_table);exit();
                for($io=$start;$io<=$end;$io++){

                    if(isset($input_table[$io])){
                        $det = $input_table[$io];
                        $pdffile .='<tr>';
                        $pdffile .='<td colspan="9" style="font-size:40px"><b>'.ucfirst($det['driver_names']).' '.ucfirst($det['driver_lnames']).'</b></td>';
                        $pdffile .='</tr>';

                    //for($io=$start;$io<=$end;$io++){
//print_r($input_table[$io]['tripdet']);
                        if(isset($input_table[$io]['tripdet'])){
                            
                            $apt_array=$input_table[$io]['tripdet'];

                        foreach($apt_array as $key=>$val)
                        {
                            $payment_type = isset($apt_array[$key]['payment_type'])?$apt_array[$key]['payment_type']:'';
                            $wallet_amount_used = isset($apt_array[$key]['wallet_amount_used'])?$apt_array[$key]['wallet_amount_used']:0;
                            $pending_amt = isset($apt_array[$key]['pending_amt'])?$apt_array[$key]['pending_amt']:0;
                            $advance_payment = isset($apt_array[$key]['advance_payment'])?$apt_array[$key]['advance_payment']:0;
                            $driver_edit_status = isset($apt_array[$key]['driver_edit_status'])?$apt_array[$key]['driver_edit_status']:0;
                            $add_amt = isset($apt_array[$key]['add_amt'])?$apt_array[$key]['add_amt']:0;
                            
                            $pdffile .='<tr>';
                            $pdffile .='<td class="head_border">'.($key+1).'</td>';
                            foreach($export_table_field_select as $kmr){
                                if(is_array($kmr)){
                                    $pdffile .='<td class="head_border">';
                                     $koo=1;foreach($kmr['field'] as $vat){
                                        if(isset($apt_array[$key][$vat]) && $apt_array[$key][$vat] !=""){
                                            echo $vat;echo "</br>";
                                            if($koo < count($kmr['field'])){
                                                $pdffile .=$apt_array[$key][$vat].$kmr['symbol'];
                                            }else{
                                                $pdffile .=$apt_array[$key][$vat];
                                            }

                                            if($vat == 'payment_type')
                                            {
                                                $pdffile .= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);
                                            }
                                        }else{
                                            $pdffile .='';
                                        }
                                    $koo++;
                                    }
                                    $pdffile .='</td>';
                                }elseif(isset($apt_array[$key][$kmr])){                             
                                     if($kmr == 'payment_type')
                                    {
                                        $pay_type = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);
                                         $pdffile .='<td class="head_border">'.$pay_type.'</td>';
                                    }
                                    else
                                    {
                                       $pdffile .='<td class="head_border">'.$apt_array[$key][$kmr].'</td>'; 
                                    }
                                }else{
                                $pdffile .='<td class="head_border">---</td>';
                                }
                            }
                             $pdffile .='</tr>';
                        }
                           
                        }                      //}
                    $pdffile .='<tr>';
                        $pdffile .='<td colspan="6" style="font-size:40px"><b>Total</b></td>';
                        $pdffile .='<td style="font-size:40px"><b>'.CURRENCY.$det['total_amount'].'</b></td>';
                        $pdffile .='<td style="font-size:40px"><b>'.CURRENCY.$det['total_pending_amt'].'</b></td>';
                        $pdffile .='<td style="font-size:40px"><b></b></td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                        $pdffile .='<td style="height:10px" colspan="9"></td>';
                    $pdffile .='</tr>';
                    }
                }
               // $pdffile .='<tr></tr>';
                 if(isset($input_table['total_cash_fare']))
                 {
                    $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td colspan="6" height="10px">
                        </td>
                </tr>';
                    $pdffile .='<tr>';
                    $pdffile .='<td colspan="4" class="head_border"><b>Total Cash : </b></td><td colspan="2">'.$input_table['total_cash_fare'].'</td>';
                    $pdffile .='</tr>'; 
                }

               //   if(isset($input_table['total_card_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Card : </b></td><td colspan="2">'.$input_table['total_card_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }
               //   if(isset($input_table['total_online_knet_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Online-Knet : </b></td><td colspan="2">'.$input_table['total_online_knet_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }
               //   if(isset($input_table['total_additional_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Additional Fare: </b></td><td colspan="2" >'.$input_table['total_additional_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }

               // if(isset($input_table['grand_total_amt']))
               //   {
               //    $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
               //    <tr>
               //      <td colspan="5" height="10px">
               //          </td>
               //  </tr>';
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Fare: </b></td><td colspan="3" >'.$input_table['grand_total_amt'].'</td>';
               //      $pdffile .='</tr>';  
               //   } 
               //   if(isset($input_table['grand_total_pending_amt']))
               //   {
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Pending Amount </b></td><td colspan="3" >'.$input_table['grand_total_pending_amt'].'</td>';
               //      $pdffile .='</tr>';  
               //   } 
               //   if(isset($input_table['grand_total_count']))
               //   {
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Total Trip Count: </b></td><td colspan="3" >'.$input_table['grand_total_count'].'</td>';
               //      $pdffile .='</tr>';  
               //   }
                    
               //      if(isset($total_fare) && $total_fare!=''){
               //      $pdffile .='
               //           <tr><td colspan="4" class="head_border" style="text-align:left;"><b>Grand Total fare :</b></td>
               //           <td colspan="2">'.$total_fare.'</td>
               //           </tr>';
               //      }

                $pdffile .='</table>';

                //echo $pdffile;exit;
                $filename = $heading."_".date("Y-m-d_H-i",time());
                $html = preg_replace("<tbody>"," ",$pdffile);
                $html = preg_replace("</tbody>"," ",$html);
                $html = trim($pdffile);
                ob_clean();
                $manage_model = Model::factory('manage');
                $generate_pdf = $manage_model->generate_pdf($html,$filename);
            }else{
                $hstart = $start+1;
                $hend = $end+1;
                $pdffile ='<table border="0" cellpadding="1" cellspacing="0">

                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>'.$heading.'</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                     </tr> ';
                    
              //  $pdffile .='<table border="0" cellpadding="1" cellspacing="1">';
               /* if(isset($total_fare) && $total_fare!=''){

                       $pdffile .='<tr>';
                        $pdffile .='<th>'.__('Grand Total Fare').'</th>';

                        $pdffile .='<td>'.$total_fare.'</td></tr>';
                }*/
                $pdffile .='<th>'.__('sno_label').'</th>';
                foreach($export_table_header as $head){
                $pdffile .='<th>'.$head.'</th>';
                }
            //    echo "<pre>";print_r($input_table);exit();

                for($io=$start;$io<=$end;$io++){

                    if(isset($input_table[$io])){
                        $det = $input_table[$io];
                        $pdffile .='<tr>';
                        $pdffile .='<td colspan="9" style="font-size:40px"><b>'.ucfirst($det['driver_names']).' '.ucfirst($det['driver_lnames']).'</b></td>';
                        $pdffile .='</tr>';

                    //for($io=$start;$io<=$end;$io++){
//print_r($input_table[$io]['tripdet']);
                        if(isset($input_table[$io]['tripdet'])){
                            
                            $apt_array=$input_table[$io]['tripdet'];

                        foreach($apt_array as $key=>$val)
                        {
                            $payment_type = isset($apt_array[$key]['payment_type'])?$apt_array[$key]['payment_type']:'';
                            $wallet_amount_used = isset($apt_array[$key]['wallet_amount_used'])?$apt_array[$key]['wallet_amount_used']:0;
                            $pending_amt = isset($apt_array[$key]['pending_amt'])?$apt_array[$key]['pending_amt']:0;
                            $advance_payment = isset($apt_array[$key]['advance_payment'])?$apt_array[$key]['advance_payment']:0;
                            $driver_edit_status = isset($apt_array[$key]['driver_edit_status'])?$apt_array[$key]['driver_edit_status']:0;
                            $add_amt = isset($apt_array[$key]['add_amt'])?$apt_array[$key]['add_amt']:0;
                            
                            $pdffile .='<tr>';
                            $pdffile .='<td class="head_border">'.($key+1).'</td>';
                            foreach($export_table_field_select as $kmr){
                                if(is_array($kmr)){
                                    $pdffile .='<td class="head_border">';
                                     $koo=1;foreach($kmr['field'] as $vat){
                                        if(isset($apt_array[$key][$vat]) && $apt_array[$key][$vat] !=""){
                                            echo $vat;echo "</br>";
                                            if($koo < count($kmr['field'])){
                                                $pdffile .=$apt_array[$key][$vat].$kmr['symbol'];
                                            }else{
                                                $pdffile .=$apt_array[$key][$vat];
                                            }

                                            if($vat == 'payment_type')
                                            {
                                                $pdffile .= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);
                                            }
                                        }else{
                                            $pdffile .='';
                                        }
                                    $koo++;
                                    }
                                    $pdffile .='</td>';
                                }elseif(isset($apt_array[$key][$kmr])){                             
                                     if($kmr == 'payment_type')
                                    {
                                        $pay_type = commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt);
                                         $pdffile .='<td class="head_border">'.$pay_type.'</td>';
                                    }
                                    else
                                    {
                                       $pdffile .='<td class="head_border">'.$apt_array[$key][$kmr].'</td>'; 
                                    }
                                }else{
                                $pdffile .='<td class="head_border">---</td>';
                                }
                            }
                             $pdffile .='</tr>';
                        }
                           
                        }                      //}
                    $pdffile .='<tr>';
                        $pdffile .='<td colspan="6" style="font-size:40px"><b>Total</b></td>';
                        $pdffile .='<td style="font-size:40px"><b>'.CURRENCY.$det['total_amount'].'</b></td>';
                        $pdffile .='<td style="font-size:40px"><b>'.CURRENCY.$det['total_pending_amt'].'</b></td>';
                        $pdffile .='<td style="font-size:40px"><b></b></td>';
                    $pdffile .='</tr>';
                    $pdffile .='<tr>';
                        $pdffile .='<td style="height:10px" colspan="9"></td>';
                    $pdffile .='</tr>';
                    }
                }
               // $pdffile .='<tr></tr>';
               //   if(isset($input_table['total_cash_fare']))
               //   {
               //      $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
               //    <tr>
               //      <td colspan="6" height="10px">
               //          </td>
               //  </tr>';
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b>Total Cash : </b></td><td colspan="2">'.$input_table['total_cash_fare'].'</td>';
               //      $pdffile .='</tr>'; 
               //  }
               //   //$pdffile .='<tr></tr>';
               //   $pdffile .='<tr>';
               //        if(isset($input_table['total_cash_fare']))
               //   {
               //      $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
               //    <tr>
               //      <td colspan="6" height="10px">
               //          </td>
               //  </tr>';
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b>Total Cash : </b></td><td colspan="2">'.$input_table['total_cash_fare'].'</td>';
               //      $pdffile .='</tr>'; 
               //  }

               //   if(isset($input_table['total_card_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Card : </b></td><td colspan="2">'.$input_table['total_card_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }
               //   if(isset($input_table['total_online_knet_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Online-Knet : </b></td><td colspan="2">'.$input_table['total_online_knet_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }
               //   if(isset($input_table['total_additional_fare']))
               //   {
               //      $pdffile .='<tr>';
               //      $pdffile .='<td colspan="4" class="head_border"><b> Total Additional Fare: </b></td><td colspan="2" >'.$input_table['total_additional_fare'].'</td>';
               //      $pdffile .='</tr>';
               //  }

               // if(isset($input_table['grand_total_amt']))
               //   {
               //    $pdffile .='</table><table border="0" cellpadding="4" cellspacing="0">
               //    <tr>
               //      <td colspan="5" height="10px">
               //          </td>
               //  </tr>';
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Fare: </b></td><td colspan="3" >'.$input_table['grand_total_amt'].'</td>';
               //      $pdffile .='</tr>';  
               //   } 
               //   if(isset($input_table['grand_total_pending_amt']))
               //   {
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Grand Total Pending Amount </b></td><td colspan="3" >'.$input_table['grand_total_pending_amt'].'</td>';
               //      $pdffile .='</tr>';  
               //   } 
               //   if(isset($input_table['grand_total_count']))
               //   {
               //    $pdffile .='<tr>';
               //      $pdffile .='<td colspan="2" class="head_border"><b> Total Trip Count: </b></td><td colspan="3" >'.$input_table['grand_total_count'].'</td>';
               //      $pdffile .='</tr>';  
               //   }
                    
               //      if(isset($total_fare) && $total_fare!=''){
               //      $pdffile .='
               //           <tr><td colspan="4" class="head_border" style="text-align:left;"><b>Grand Total fare :</b></td>
               //           <td colspan="2">'.$total_fare.'</td>
               //           </tr>';
               //      }



                $pdffile .='</table>';

                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit;

            }

    }

} // End Welcome
