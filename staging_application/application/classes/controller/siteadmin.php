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


    public function action_consolidated_sales_export($driver_trip_data,$all_shift_logs,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading=''){
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

                $driver_name = isset($all_shift_logs[0]['tripdet'][0]['driver_name'])?$all_shift_logs[0]['tripdet'][0]['driver_name']:''; 

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
                      <td style="text-align:right;"><b>Driver Name: '.$driver_name.'</b></td>
                      <td style="text-align:right;"><b>'.$sub_heading.'</b></td>
                     </tr>
                     <tr>
                      <td height="10px">
                        </td>
                    </tr>
                     <tr>
                     <td class="head_border" style="text-align:left;"><b>Attendance</b></td>
                     </tr>
                     <tr>
                    <td height="7px">
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
                $pdffile .='<tr style="background-color:#a6aaaf;;">
                            <td><b>'.__('sno_label').'</b></td>
                            <td><b>'.__('shift_day').'</b></td>                           
                            <td><b>'. __('logged_in').'</b></td>
                            <td><b>'. __('shiftin').'</b></td>
                            <td><b>'.__('shiftout').'</b></td>
                            <td><b>'. __('logout').'</b></td>                            
                            <td><b>'.__('work_hrs').'</b></td>
                        </tr>';

                $driver_logs['tripdet'] = isset($all_shift_logs[0]['tripdet'])?$all_shift_logs[0]['tripdet']:[];

                $total_shift_hours= $tot_shift_out_hrs = 0;
                $login_start_final = '';
                $login_end_final = '';

                /* For Serial No */
                $sno=0; 

                $previous_date = '';
                
                 foreach($driver_logs['tripdet'] as $key => $val) { //echo $val['create_day'];exit;
                 //S.No Increment
                 //=======
                 $sno++;
                

                $create_day = isset($val['create_day'])?$val['create_day']:'';


                $status = isset($val['status'])?$val['status']:'Shift IN';
                $shift_start_disp = isset($val['shift_start'])?Commonfunction::convertphpdate('H:i:s ',$val['shift_start']):'';         
                $login_start_disp = isset($val['login_start'])?Commonfunction::convertphpdate('H:i:s ',$val['login_start']):''; 
                $login_end_disp = isset($val['login_end'])?Commonfunction::convertphpdate('H:i:s ',$val['login_end']):''; 
                $shift_end_disp = isset($val['shift_end'])?Commonfunction::convertphpdate('H:i:s ',$val['shift_end']):'';

                $shift_start = isset($val['shift_start'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['shift_start']):'';
                $shift_end = isset($val['shift_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['shift_end']):''; 
                $login_start = isset($val['login_start'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['login_start']):''; 
                $login_end = isset($val['login_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['login_end']):''; 

                $shift_hours = 0;
                if($shift_end != '')
                {
                    $shift_hours = strtotime($shift_end) - strtotime($shift_start); 
                }

                $total_shift_hours += $shift_hours;

                if($login_start != '')
                {
                    $login_start_final = $login_start;
                } 
                if($login_end != '')
                {
                    $login_end_final = $login_end;
                }

                if($previous_date == $create_day){
                    $tot_shift_out = '';
                    $tot_work_hrs += $shift_hours;
                    $shift_day_show = '';
                    $tot_shift_per_day_show = 1;
                    $pre_shift_end = isset($driver_logs['tripdet'][$key-1]['shift_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$driver_logs['tripdet'][$key-1]['shift_end']):'';
                    if($pre_shift_end != '' && $shift_start!='')
                    {

                        $shift_out_hrs = strtotime($shift_start) - strtotime($pre_shift_end);
                        $tot_shift_out_hrs_day += $shift_out_hrs;
                        $tot_shift_out_hrs += $shift_out_hrs;
                    }

                }else{
                    $tot_shift_out = '';
                    $tot_work_hrs = $shift_hours;
                    $shift_day_show = $create_day;
                    $tot_shift_per_day_show = 0;
                    $tot_shift_out_hrs_day = 0;
                }

                $previous_date = $create_day;

                $next_day_chk = isset($driver_logs['tripdet'][$key+1]['create_day'])?$driver_logs['tripdet'][$key+1]['create_day']:'';

                $pdffile .= '<tr><td>'.$sno.'</td>
                             <td>'.$create_day.'</td>        
                             <td>'.$login_start_disp.'</td>         
                             <td>'.$shift_start_disp.'</td>
                             <td>'.$shift_end_disp.'</td>
                             <td>'.$login_end_disp.'</td>
                             <td>'.Commonfunction::time_format_at_shift($shift_hours).'</td>
                            </tr>';

                            if($next_day_chk != $create_day ) { 
                            $pdffile .= '<tr>
                            <td></td>
                            <td> </td>
                            <td> </td>
                            <td><b>Shift out Hrs</b></td>
                            <td>'.Commonfunction::time_format_at_shift($tot_shift_out_hrs_day).'</td>
                            <td><b>Shift in Hrs</b></td>
                            <td>'.Commonfunction::time_format_at_shift($tot_work_hrs).'</td>
                            </tr>';
                             } 
                           } 
                           
                             $pdffile .= '<tr><td align="right" colspan="3"><b>'.__('sub_total').'</b></td><td><b>'.Commonfunction::time_format_at_shift($tot_shift_out_hrs).'</b></td> 
                            <td align="right" colspan="2"><b>'. __('sub_total').'</b></td><td><b>'.Commonfunction::time_format_at_shift($total_shift_hours).'</b></td></tr>';



                $pdffile .='</table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">                     
                             <tr>
                              <td height="10px">
                                </td>
                            </tr>
                             <tr>
                             <td class="head_border" style="text-align:left;"><b>Sales</b></td>
                             </tr>
                             <tr>
                            <td height="7px">
                                </td>
                            </tr> ';

                 $pdffile .='<table border="1" cellpadding="4" cellspacing="0">';
                $pdffile .='<tr style="background-color:#a6aaaf;;">
                                <td><b>'.__('sno_label').'</b></td>
                                <td><b>'.__('trip_id').'</b></td>                                                         
                                <td><b>'. __('Date').'</b></td>
                                <td><b>'.__('plate_no').'</b></td>
                                <td><b>'. __('pick_up_time').'</b></td>
                                <td><b>'.__('drop_time').'</b></td>
                                <td><b>'. __('payment_type').'</b></td>                            
                                <td><b>'.__('Sales').'</b></td>
                            </tr>';

                $sno=0; 
        $payment_type_msg = '';
        $previous_datee = ''; $tot_amt_knet = $tot_amt_cash =  $total_pending_amt = $tot_amt_card = $tot_amt_wallet = $tot_amt_pending = 0;

        //$trip_list = isset($all_company_list[$driver_trip_data])?$all_company_list[$driver_trip_data]:array();

        //print_r($driver_trip_data);exit;
        $driver_trip_data = isset($driver_trip_data[0]['tripdet'])?$driver_trip_data[0]['tripdet']:[];
        if(count($driver_trip_data)){
         foreach($driver_trip_data as $key => $val) {
         //S.No Increment
         //==============
         $sno++;        
         

        //$pass_names = isset($val['pass_name'])?$val['pass_name']:'';
        //$pass_lastnames = isset($val['pass_lastname'])?$val['pass_lastname']:'';
        $pickup = isset($val['pickup'])?$val['pickup']:'';
        $fare = isset($val['fare'])?$val['fare']:0;
        $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
        $wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used']:0;
        $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
        $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
        $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
        $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
        $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
        $phone = isset($val['phone'])?$val['phone']:'';
        $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
        $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';
        $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';

        $pickup_time_date = isset($val['pickup_time'])? Commonfunction::convertphpdate('d/m/Y',$val['pickup_time']):'';
        $pickup_time_only = isset($val['pickup_time'])? Commonfunction::convertphpdate('H:i:s',$val['pickup_time']):'';        

        $drop_time_date = isset($val['drop_time'])? Commonfunction::convertphpdate('Y-m-d',$val['drop_time']):'';
        $drop_time_only = isset($val['drop_time'])? Commonfunction::convertphpdate('H:i:s',$val['drop_time']):'';

        if($previous_datee == $pickup_time_date){

            /*if($pending_amt > 0 && $driver_edit_status == 1)
            {
                if($driver_edit_status == 1)
                {
                    $tot_pending_amt_day += $pending_amt;//+$fare;
                    //$tot_amt_pending += $pending_amt;
                    $payment_type_msg = __('pending_label');
                }
            }else*/
            if($payment_type==3){
                $tot_amt_day_knet += $fare;
                $tot_amt_knet += $fare;
                $payment_type_msg = __('knet_label');
            }else if($payment_type==1){
                $tot_amt_day_cash += $fare;
                $tot_amt_cash += $fare;
                $payment_type_msg = __('cash_label');
            }else if($payment_type==2){
                $tot_amt_day_card += $fare;
                $tot_amt_card += $fare;
                $payment_type_msg = __('card_label');
            }else if($payment_type==6){
                $tot_amt_day_wallet += $fare;
                $tot_amt_wallet += $fare;
                $payment_type_msg = __('wallet_label');
            }
            
            $tot_pending_amt_day += $pending_amt;           
            $tot_amt_per_day_show = 1;
            $tot_amt_pending += $pending_amt;

        }else{
            $tot_amt_day_cash = $tot_amt_day_knet = $tot_pending_amt_day = $tot_amt_day_card = $tot_amt_day_wallet = 0;

            /*if($pending_amt > 0 && $driver_edit_status == 1 )
            {
                if($driver_edit_status == 1)
                {
                    $tot_pending_amt_day = $pending_amt;//+$fare;
                    //$tot_amt_pending += $pending_amt;
                    $payment_type_msg = __('pending_label');
                }
            }else*/
            if($payment_type==3){
                $tot_amt_day_knet = $fare;
                $tot_amt_knet += $fare;
                $payment_type_msg = __('knet_label');
            }else if($payment_type==1){
                $tot_amt_day_cash = $fare;
                $tot_amt_cash += $fare;
                $payment_type_msg = __('cash_label');
            }else if($payment_type==2){
                $tot_amt_day_card = $fare;
                $tot_amt_card += $fare;
                $payment_type_msg = __('card_label');
            }else if($payment_type==6){
                $tot_amt_day_wallet = $fare;
                $tot_amt_wallet += $fare;
                $payment_type_msg = __('wallet_label');
            }            
            $tot_pending_amt_day = $pending_amt;            
            $tot_amt_per_day_show = 0;
            $tot_amt_pending += $pending_amt;
            
        }

        if($pending_amt>0){
            $payment_type_msg = $payment_type_msg.' with Pending';
        }
        $total_pending_amt += $pending_amt;
        $previous_datee = $pickup_time_date;

        $fare_with_pending = $pending_amt+$fare;

       // isset($driver_trip_data['tripdet'][$key+1]['create_day'])?$driver_trip_data['tripdet'][$key+1]['create_day']:'';
        //$next_day_chkk = isset($listings['tripdet'][$key+1]['pickup_time'])?Commonfunction::convertphpdate('d/m/Y',$listings['tripdet'][$key+1]['pickup_time']):'';

        $next_day_chkk = isset($driver_trip_data[$key+1]['pickup_time'])?Commonfunction::convertphpdate('d/m/Y',$driver_trip_data[$key+1]['pickup_time']):'';

       $payment_msg= $payment_type_msg;

        $pdffile .= '<tr>
                     <td>'.$sno.'</td>
                     <td>'.$trip_id.'</td>
                     <td>'.$pickup_time_date.'</td>
                     <td>'.$taxi_no.'</td>         
                     <td>'. $pickup_time_only.'</td>
                     <td>'.$drop_time_only.'</td>
                     <td>'.$payment_msg.'</td>
                     <td>'.$fare.CURRENCY_NEW.'</td>        
                    </tr>';

        if($next_day_chkk != $pickup_time_date ) { 
            $pdffile .= '<tr>
                        <td></td>
                        <td><b>Total</b></td>
                        <td><b> Cash '.$tot_amt_day_cash.CURRENCY_NEW.'</b> </td>
                        <td><b> Card '. $tot_amt_day_card.CURRENCY_NEW.'</b></td>
                        <td><b> Knet '.$tot_amt_day_knet.CURRENCY_NEW.'</b> </td>
                        <td><b> Wallet '.$tot_amt_day_wallet.CURRENCY_NEW.'</b> </td>
                        <td><b> Pending '. $tot_pending_amt_day.CURRENCY_NEW.'</b></td>
                        <td><b></b></td>
                        </tr>';
        } 

        } 

         $pdffile .= '<tr>
                        <td></td>
                        <td><b>Sub Total</b></td>
                        <td><b> Cash '. $tot_amt_cash.CURRENCY_NEW .'</b> </td>
                        <td><b> Card '. $tot_amt_card.CURRENCY_NEW .'</b></td>
                        <td><b> Knet '. $tot_amt_knet.CURRENCY_NEW .'</b> </td>
                        <td><b> Wallet '.$tot_amt_wallet.CURRENCY_NEW.'</b> </td>
                        <td><b> Pending '.$tot_amt_pending.CURRENCY_NEW.'</b></td>
                        <td><b></b></td>
                        </tr>';

        }else{
            $pdffile .= '<tr>
                        <td colspan="8" style="text-align: center;">No sales</td>          
                        </tr>';

        }
            $pdffile .= '</table>';


             $pdffile .='<table border="0" cellpadding="1" cellspacing="0">                  
                     <tr>
                      <td height="10px">
                        </td>
                    </tr>
                     <tr>
                     <td class="head_border" style="text-align:left;"><b>Free Rides</b></td>
                     </tr>
                     <tr>
                    <td height="7px">
                        </td>
                    </tr></table> ';
             $pdffile .='<table border="1" cellpadding="4" cellspacing="0">';
                $pdffile .='<tr style="background-color:#a6aaaf;;">
                                <td><b>'.__('sno_label').'</b></td>
                                <td><b>'.__('Start').'</b></td>
                                <td><b>'.__('End').'</b></td>                           
                                <td><b>'. __('Date').'</b></td>
                                <td><b>'. __('Location A').'</b></td>
                                <td><b>'.__('Location B').'</b></td>
                                <td><b>'. __('Free Ride hrs').'</b></td>                        
                            </tr>
                            <tr>
                            <td colspan="7" style="text-align: center;">Under development</td>
                            </tr></table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">                  
                     <tr>
                      <td height="30px">
                        </td>
                    </tr>
                     <tr>
                     <td class="head_border" style="text-align:left;">I "'.$driver_name.'" acknowledge above informations are correct of my knowledge, Grad Limo holds the right to check the provided information and if there is any discrepency I will be partially or fully liable.</td>
                     </tr>
                     <tr>
                      <td height="30px">
                        </td>
                    </tr>
                     <tr>
                     <td class="head_border" style="text-align:left">Signature</td>
                     </tr>
                     <tr>
                        <td height="20px">
                        </td>
                    </tr>
                     <tr>
                     <td class="head_border" style="text-align:left;">Date</td>
                     </tr>
                     <tr>
                        <td height="20px">
                        </td>
                    </tr>
                    <tr>
                    <td class="head_border">* Late in, Early out and Shift off above grace hours will be automatically considered for salary deductiion.
                        </td>
                    </tr>
                    </table> ';

               

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

                $driver_name = isset($all_shift_logs[0]['tripdet'][0]['driver_name'])?$all_shift_logs[0]['tripdet'][0]['driver_name']:'';         


                $pdffile ='<table border="0" cellpadding="1" cellspacing="0">
                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>'.$heading.'</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Generated Date : '.date("F j, Y").'</b></td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b>Driver Name : '.$driver_name.'</b></td>
                     </tr> ';

                $pdffile .= '<tr>
                        <td  width="100%"  style="text-align:left;"><b>Attendance</b></td>
                     </tr>                     
                        <tr>
                            <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                            <td align="left" style="text-align:left;" width="1%"><b>'.__('shift_day').'</b></td>                           
                            <td align="left" style="text-align:left;" width="1%"><b>'. __('logged_in').'</b></td>

                            <td align="left" style="text-align:left;" width="1%"><b>'. __('shiftin').'</b></td>
                            <td align="left" style="text-align:left;" width="1%"><b>'.__('shiftout').'</b></td>

                            <td align="left" style="text-align:left;" width="1%"><b>'. __('logout').'</b></td>                            
                            <td align="left" style="text-align:left;" width="3%"><b>'.__('work_hrs').'</b></td>
                        </tr>';        
         

       // $driver_logs_key = Commonfunction::get_array_id($driver_id,$all_shift_logs);

       // $driver_logs = isset($all_shift_logs[$driver_logs_key])?$all_shift_logs[$driver_logs_key]:array();

        //print_r($driver_logs);exit;

        $driver_logs['tripdet'] = isset($all_shift_logs[0]['tripdet'])?$all_shift_logs[0]['tripdet']:[];

        $total_shift_hours= $tot_shift_out_hrs = 0;
        $login_start_final = '';
        $login_end_final = '';

        /* For Serial No */
        $sno=0; 

        $previous_date = '';
        
         foreach($driver_logs['tripdet'] as $key => $val) { //echo $val['create_day'];exit;
         //S.No Increment
         //=======
         $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  

        $create_day = isset($val['create_day'])?$val['create_day']:'';


        $status = isset($val['status'])?$val['status']:'Shift IN';
        $shift_start_disp = isset($val['shift_start'])?Commonfunction::convertphpdate('H:i:s ',$val['shift_start']):'';         
        $login_start_disp = isset($val['login_start'])?Commonfunction::convertphpdate('H:i:s ',$val['login_start']):''; 
        $login_end_disp = isset($val['login_end'])?Commonfunction::convertphpdate('H:i:s ',$val['login_end']):''; 
        $shift_end_disp = isset($val['shift_end'])?Commonfunction::convertphpdate('H:i:s ',$val['shift_end']):'';

        $shift_start = isset($val['shift_start'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['shift_start']):'';
        $shift_end = isset($val['shift_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['shift_end']):''; 
        $login_start = isset($val['login_start'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['login_start']):''; 
        $login_end = isset($val['login_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['login_end']):''; 

        $shift_hours = 0;
        if($shift_end != '')
        {
            $shift_hours = strtotime($shift_end) - strtotime($shift_start); 
        }

        $total_shift_hours += $shift_hours;

        if($login_start != '')
        {
            $login_start_final = $login_start;
        } 
        if($login_end != '')
        {
            $login_end_final = $login_end;
        }

        if($previous_date == $create_day){
            $tot_shift_out = '';
            $tot_work_hrs += $shift_hours;
            $shift_day_show = '';
            $tot_shift_per_day_show = 1;
            $pre_shift_end = isset($driver_logs['tripdet'][$key-1]['shift_end'])?Commonfunction::convertphpdate('Y-m-d h:i:s A',$driver_logs['tripdet'][$key-1]['shift_end']):'';
            if($pre_shift_end != '' && $shift_start!='')
            {

                $shift_out_hrs = strtotime($shift_start) - strtotime($pre_shift_end);
                $tot_shift_out_hrs_day += $shift_out_hrs;
                $tot_shift_out_hrs += $shift_out_hrs;
            }

        }else{
            $tot_shift_out = '';
            $tot_work_hrs = $shift_hours;
            $shift_day_show = $create_day;
            $tot_shift_per_day_show = 0;
            $tot_shift_out_hrs_day = 0;
        }

        $previous_date = $create_day;

        $next_day_chk = isset($driver_logs['tripdet'][$key+1]['create_day'])?$driver_logs['tripdet'][$key+1]['create_day']:'';  

           
         $pdffile .= '<td align="center">'.$sno.'</td>
         <td>'.$create_day.'</td>        
         <td>'.$login_start_disp.'</td>         
         <td>'.$shift_start_disp.'</td>
         <td>'.$shift_end_disp.'</td>
         <td>'.$login_end_disp.'</td>
         <td>'.Commonfunction::time_format_at_shift($shift_hours).'</td>
        </tr>';

        if($next_day_chk != $create_day ) { 
        $pdffile .= '<tr>
        <td align="center"></td>
        <td> </td>
        <td> </td>
        <td><b>Shift out Hrs</b></td>
        <td>'.Commonfunction::time_format_at_shift($tot_shift_out_hrs_day).'</td>
        <td><b>Shift in Hrs</b></td>
        <td>'.Commonfunction::time_format_at_shift($tot_work_hrs).'</td>
        </tr>';
         } 
       } 
       
         $pdffile .= '<tr><td align="right" colspan="3"><b>'.__('sub_total').'</b></td><td><b>'.Commonfunction::time_format_at_shift($tot_shift_out_hrs).'</b></td> 
        <td align="right" colspan="2"><b>'. __('sub_total').'</b></td><td><b>'.Commonfunction::time_format_at_shift($total_shift_hours).'</b></td></tr>

        </table>';


        $pdffile .= '<table border="0" cellpadding="1" cellspacing="0"><tr></tr>
                     <tr><td  width="100%"  style="text-align:left;"><b>Sales</b></td>
                     </tr>
                     <tr>
                        <td align="left" width="1%"><b>'. __('sno_label').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('trip_id').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('Date').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'.__('plate_no').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('pick_up_time').'</b></td>
                        <td align="left" style="text-align:left;" width="3%"><b>'.__('drop_time').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('payment_type').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('Sales').'</b></td>                        
                        </tr>';

        $sno=0; 
        $payment_type_msg = '';
        $previous_datee = ''; $tot_amt_knet = $tot_amt_cash =  $total_pending_amt = $tot_amt_card = $tot_amt_wallet = $tot_amt_pending = 0;

        //$trip_list = isset($all_company_list[$driver_trip_data])?$all_company_list[$driver_trip_data]:array();

        //print_r($driver_trip_data);exit;
        $driver_trip_data = isset($driver_trip_data[0]['tripdet'])?$driver_trip_data[0]['tripdet']:[];
        if(count($driver_trip_data)){
         foreach($driver_trip_data as $key => $val) {
         //S.No Increment
         //==============
         $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  

        //$pass_names = isset($val['pass_name'])?$val['pass_name']:'';
        //$pass_lastnames = isset($val['pass_lastname'])?$val['pass_lastname']:'';
        $pickup = isset($val['pickup'])?$val['pickup']:'';
        $fare = isset($val['fare'])?$val['fare']:0;
        $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
        $wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used']:0;
        $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
        $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
        $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
        $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
        $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
        $phone = isset($val['phone'])?$val['phone']:'';
        $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
        $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';
        $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';

        $pickup_time_date = isset($val['pickup_time'])? Commonfunction::convertphpdate('d/m/Y',$val['pickup_time']):'';
        $pickup_time_only = isset($val['pickup_time'])? Commonfunction::convertphpdate('H:i:s',$val['pickup_time']):'';        

        $drop_time_date = isset($val['drop_time'])? Commonfunction::convertphpdate('Y-m-d',$val['drop_time']):'';
        $drop_time_only = isset($val['drop_time'])? Commonfunction::convertphpdate('H:i:s',$val['drop_time']):'';

        if($previous_datee == $pickup_time_date){

            /*if($pending_amt > 0 && $driver_edit_status == 1)
            {
                if($driver_edit_status == 1)
                {
                    $tot_pending_amt_day += $pending_amt;//+$fare;
                    //$tot_amt_pending += $pending_amt;
                    $payment_type_msg = __('pending_label');
                }
            }else*/
            if($payment_type==3){
                $tot_amt_day_knet += $fare;
                $tot_amt_knet += $fare;
                $payment_type_msg = __('knet_label');
            }else if($payment_type==1){
                $tot_amt_day_cash += $fare;
                $tot_amt_cash += $fare;
                $payment_type_msg = __('cash_label');
            }else if($payment_type==2){
                $tot_amt_day_card += $fare;
                $tot_amt_card += $fare;
                $payment_type_msg = __('card_label');
            }else if($payment_type==6){
                $tot_amt_day_wallet += $fare;
                $tot_amt_wallet += $fare;
                $payment_type_msg = __('wallet_label');
            }
            
            $tot_pending_amt_day += $pending_amt;           
            $tot_amt_per_day_show = 1;
            $tot_amt_pending += $pending_amt;

        }else{
            $tot_amt_day_cash = $tot_amt_day_knet = $tot_pending_amt_day = $tot_amt_day_card = $tot_amt_day_wallet = 0;

            /*if($pending_amt > 0 && $driver_edit_status == 1 )
            {
                if($driver_edit_status == 1)
                {
                    $tot_pending_amt_day = $pending_amt;//+$fare;
                    //$tot_amt_pending += $pending_amt;
                    $payment_type_msg = __('pending_label');
                }
            }else*/
            if($payment_type==3){
                $tot_amt_day_knet = $fare;
                $tot_amt_knet += $fare;
                $payment_type_msg = __('knet_label');
            }else if($payment_type==1){
                $tot_amt_day_cash = $fare;
                $tot_amt_cash += $fare;
                $payment_type_msg = __('cash_label');
            }else if($payment_type==2){
                $tot_amt_day_card = $fare;
                $tot_amt_card += $fare;
                $payment_type_msg = __('card_label');
            }else if($payment_type==6){
                $tot_amt_day_wallet = $fare;
                $tot_amt_wallet += $fare;
                $payment_type_msg = __('wallet_label');
            }            
            $tot_pending_amt_day = $pending_amt;            
            $tot_amt_per_day_show = 0;
            $tot_amt_pending += $pending_amt;
            
        }

        if($pending_amt>0){
            $payment_type_msg = $payment_type_msg.' with Pending';
        }
        $total_pending_amt += $pending_amt;
        $previous_datee = $pickup_time_date;

        $fare_with_pending = $pending_amt+$fare;

       // isset($driver_trip_data['tripdet'][$key+1]['create_day'])?$driver_trip_data['tripdet'][$key+1]['create_day']:'';
        //$next_day_chkk = isset($listings['tripdet'][$key+1]['pickup_time'])?Commonfunction::convertphpdate('d/m/Y',$listings['tripdet'][$key+1]['pickup_time']):'';

        $next_day_chkk = isset($driver_trip_data[$key+1]['pickup_time'])?Commonfunction::convertphpdate('d/m/Y',$driver_trip_data[$key+1]['pickup_time']):'';

       $payment_msg= $payment_type_msg;

        $pdffile .= '<td align="center">'.$sno.'</td>
                     <td>'.$trip_id.'</td>
                     <td>'.$pickup_time_date.'</td>
                     <td>'.$taxi_no.'</td>         
                     <td>'. $pickup_time_only.'</td>
                     <td>'.$drop_time_only.'</td>
                     <td>'.$payment_msg.'</td>
                     <td>'.$fare.CURRENCY_NEW.'</td>        
                    </tr>';

        if($next_day_chkk != $pickup_time_date ) { 
            $pdffile .= '<tr>
                        <td align="center"></td>
                        <td><b>Total</b></td>
                        <td><b> Cash '.$tot_amt_day_cash.CURRENCY_NEW.'</b> </td>
                        <td><b> Card '. $tot_amt_day_card.CURRENCY_NEW.'</b></td>
                        <td><b> Knet '.$tot_amt_day_knet.CURRENCY_NEW.'</b> </td>
                        <td><b> Wallet '.$tot_amt_day_wallet.CURRENCY_NEW.'</b> </td>
                        <td><b> Pending '. $tot_pending_amt_day.CURRENCY_NEW.'</b></td>
                        <td><b></b></td>
                        </tr>';
        } 

        } 

         $pdffile .= '<tr>
                        <td align="center"></td>
                        <td><b>Sub Total</b></td>
                        <td><b> Cash '. $tot_amt_cash.CURRENCY_NEW .'</b> </td>
                        <td><b> Card '. $tot_amt_card.CURRENCY_NEW .'</b></td>
                        <td><b> Knet '. $tot_amt_knet.CURRENCY_NEW .'</b> </td>
                        <td><b> Wallet '.$tot_amt_wallet.CURRENCY_NEW.'</b> </td>
                        <td><b> Pending '.$tot_amt_pending.CURRENCY_NEW.'</b></td>
                        <td><b></b></td>
                        </tr>';

        }else{
            $pdffile .= '<tr>
                        <td colspan="8"><center>No sales</center></td>          
                        </tr>';

        }
            $pdffile .= '</table>';


             $pdffile .= '<table border="0" cellpadding="1" cellspacing="0">
                    <tr></tr>
                     <tr><td  width="100%"  style="text-align:left;"><b>Free Ride</b></td>
                     </tr>
                     <tr>
                        <td align="left" width="1%"><b>'. __('sno_label').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('Start').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('End').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'.__('Location A').'</b></td>
                        <td align="left" style="text-align:left;" width="1%"><b>'. __('Location B').'</b></td>
                        <td align="left" style="text-align:left;" width="3%"><b>'.__('Free Ride hrs').'</b></td>                                               
                        </tr>                             
                        <tr><td align="center" colspan="6">Under development</td></tr>
                        <tr></tr>
                        </table>';

                         $pdffile .= '<table border="0" cellpadding="1" cellspacing="0">
                    <tr></tr><tr></tr>
                        <tr></tr>
                     <tr><td  width="100%"  style="text-align:left;">I "'.$driver_name.'" acknowledge above informations are correct of my knowledge, Grad Limo holds the</td>
                     </tr>
                     <tr>
                     <td  width="100%"  style="text-align:left;">right to check the provided information and if there is any discrepency I will be partially or fully liable.</td>
                     </tr>                   
                        <tr></tr>
                        <tr><td></td><td></td><td></td><td></td><td>Signature</td></tr>
                        <tr><td></td><td></td><td></td><td></td><td>Date</td></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr><td>* Late in, Early out and Shift off above grace hours will be automatically considered for salary deductiion.</td></tr>
                        </table>';

              

                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit;

            }

    }


    public function action_sales_export($input_table,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading='',$from,$to,$xls_unused_output=[]){

        $vars=explode('-',$_SESSION['download_set']);
        $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
        $this->session->delete('download_set');

        if($type==2)
        {


        }else{

            $pdffile ='<table border="0" cellpadding="1" cellspacing="0">
                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>Grand Limo Renting & Leasing Cars Co.</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Sales Report</b></td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b>Date</b></td>
                      <td class="head_border" style="text-align:left;"><b>From</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($from)).'</td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"></td>
                      <td class="head_border" style="text-align:left;"><b>To</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($to)).'</td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b></b></td>
                     </tr> ';

                $pdffile .= '<tr>                                
                             </tr>                     
                                <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('payment_type').'</b></td>  
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('Payment Gateway').'</b></td>                                                    
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('trip_id').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('passenger_name').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('passenger_phone').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('vechile_no').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('driver_name').'</b></td>  
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('gross_sales').'</b></td>

                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('promocode').'</b></td>                            
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('promocode_discount_amt').'</b></td>

                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('corporate_group').'</b></td>

                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('total_sales').'</b></td>                            
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('discount_wallet_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Total sale after discount</b></td>  
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('cash_reciept').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('card_reciept').'</b></td>                            
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('online_reciept').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('wallet_reciept').'</b></td>

                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('corporate_amount').'</b></td>
                                    
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('Previous Pending').'</b></td>
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('Current Trip Pending').'</b></td>
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('balance_recievable').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('remark').'</b></td>                            
                                    
                                </tr>';

            $i=0;

            $total_fare = $total_pass_discount = $total_sales_data = $total_cash_fare = $total_knet_fare = $total_card_fare = $total_wallet_fare = $total_tap_wallet_fare= $total_pending_amt = 0;

            $total_discount_cash_pay = $total_discount_wallet_pay = $total_discount_knet_pay = $total_discount_card_pay = $total_discount_pending = $total_discount_promo_pay = $total_discount_pending_pay = 0;

            /* Sasidharan Nov 28 2022 */
            $total_corporate_amount = 0;

            /* June 8 2023 */
            $total_discount_amount = 0;
            $total_sales_with_discount_amount = 0;
            
            $pass_ids = [];
            foreach($input_table as $key=>$val)
            {
                $i++;    


                $driver_name = isset($val['driver_name'])?$val['driver_name']:'';
                $pass_names = isset($val['pass_name'])?$val['pass_name']:'';
                $pass_lastnames = isset($val['pass_lastname'])?$val['pass_lastname']:'';
                $pickup = isset($val['pickup'])?$val['pickup']:'';
                $fare = isset($val['fare'])?$val['fare']:0;
                $trip_cost = isset($val['trip_cost'])?$val['trip_cost']:0;
                $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
                //$wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used'][$key]:0;
                $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
                $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
                $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
                $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
                $actual_paid_amt = isset($val['actual_paid_amt'])?$val['actual_paid_amt']:0;
                $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
                $phone = isset($val['phone'])?$val['phone']:'';
                $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
                $edit_status = isset($val['edit_status'])?$val['edit_status']:'';
                $passenger_pending_amt = isset($val['passenger_pending_amt'])?$val['passenger_pending_amt']:'';
                $promocode = isset($val['promocode'])?$val['promocode']:'';
                $passenger_discount = isset($val['passenger_discount'])?$val['passenger_discount']:'';
                $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
                $trans_fare = isset($val['trans_fare'])?$val['trans_fare']:0;

                $passenger_phone = isset($val['phone'])?$val['phone']:'';
                $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';


                /*if($fare==0){
                    $fare = $trans_fare;
                }*/               

                $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';
                //$payment_msg= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt) ;
                
                $fare_detail = isset($val['fare_details'])?$val['fare_details']:[];

                /* This fare was static keys based on complete trip API, If any change regarding this one update mandatory */
                $cash_fare = isset($fare_detail[0]['value'])?$fare_detail[0]['value']:0;
                $card_fare = isset($fare_detail[1]['value'])?$fare_detail[1]['value']:0;
                $knet_fare = isset($fare_detail[2]['value'])?$fare_detail[2]['value']:0;
                $additional_fare = isset($fare_detail[3]['value'])?$fare_detail[3]['value']:0;
                $wallet_fare = isset($fare_detail[4]['value'])?$fare_detail[4]['value']:0;
                $pending_fare = isset($fare_detail[5]['value'])?$fare_detail[5]['value']:0;
                $remarks = (isset($fare_detail[6]['value']) && $fare_detail[6]['value']!='')?$fare_detail[6]['value']:'-';

                $current_pending_amt = isset($val['current_pending_amt'])?$val['current_pending_amt']:0;
                $pass_wallet_amt = isset($val['pass_wallet_amt'])?$val['pass_wallet_amt']:0;

                /* Sasidharan Nov 28 2022 */
                $corporate_name = isset($val['corporate_name'])?$val['corporate_name']:'-';
                $dispatcher_altered = isset($val['dispatcher_altered'])?$val['dispatcher_altered']:0;
                $corporate_amount = isset($val['corporate_amount'])?$val['corporate_amount']:0;

                  $tapAutoPayment = isset($val['tapAutoPayment']) ? $val['tapAutoPayment'] : '';
                  $tapAutoPayment = ($tapAutoPayment == 1) ? 'tap' : '-';

                  

    


                /* June 8 2023 */
                $discount_wallet_amount_used = isset($val['discount_wallet_amount_used'])?$val['discount_wallet_amount_used']:'0';
                 /* June 8 2023 */
                $total_discount_amount += $discount_wallet_amount_used;

                // $corporate_amount = 0;
                // if($dispatcher_altered) {
                // }

                $total_corporate_amount += $corporate_amount;

                if($pass_wallet_amt < 0){
                    if(!in_array($pass_id, $pass_ids)) {
                        $pass_ids[] = $pass_id;
                        $total_pending_amt += abs($pass_wallet_amt);
                    }
                }

                //$fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$wallet_fare+$pending_fare+$passenger_discount;
                if($driver_edit_status == 4)
                {
                     $fare = $cash_fare+$card_fare+$knet_fare+$current_pending_amt+$wallet_fare+$passenger_discount;
                }
                else if($current_pending_amt < 0)
                {
                    $fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$wallet_fare+$passenger_discount;
                }
                else
                {
                     $fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$current_pending_amt+$wallet_fare+$passenger_discount;
                }

                $total_sales = $fare - $passenger_discount;

                /* Sasidharan Nov 28 2022 */
                $total_sales += $corporate_amount;

                //print_r($fare_detail);exit;
                $payment_type_msg = '';
                if($cash_fare && $wallet_fare){

                    $payment_type_msg = 'Cash & Wallet';

                    if($cash_fare){
                        $cash_fare = $cash_fare+$additional_fare;
                        $total_discount_cash_pay += $passenger_discount;
                    }else{
                        $wallet_fare = $wallet_fare+$additional_fare;
                        $total_discount_wallet_pay += $passenger_discount;                       
                    }
                     
                }else if($cash_fare){ 
                    $payment_type_msg = 'Cash';
                    $cash_fare = $cash_fare+$additional_fare;
                    $total_discount_cash_pay += $passenger_discount;
                    
                }else if($knet_fare){        
                    $payment_type_msg = 'Online';
                    $knet_fare = $knet_fare+$additional_fare;
                    $total_discount_knet_pay += $passenger_discount;                    

                }else if($card_fare){
                    $payment_type_msg = 'Card';
                    $card_fare = $card_fare+$additional_fare;
                    $total_discount_card_pay += $passenger_discount;
                   
                }else if($wallet_fare){
                    $payment_type_msg = 'Wallet';
                    $wallet_fare = $wallet_fare+$additional_fare;
                    $total_discount_wallet_pay += $passenger_discount;
                   
                }else if($passenger_discount){

                    $payment_type_msg = 'Promocode';
                    //if($pending_fare==0){
                        $total_discount_promo_pay += $passenger_discount;
                    //}
                }

                if($current_pending_amt && $payment_type_msg){
                    $payment_type_msg = $payment_type_msg.' & Pending';
                    //$total_discount_pending_pay += $passenger_discount;
                }else if($current_pending_amt){
                    $payment_type_msg = 'Pending';
                    $total_discount_pending_pay += $passenger_discount;
                }                

                $total_fare += $fare;
                $total_pass_discount += $passenger_discount;
                $total_sales_data += $total_sales;


                
                $total_cash_fare += $cash_fare;
                $total_knet_fare += $knet_fare;
                $total_card_fare += $card_fare;
                $total_wallet_fare += $wallet_fare;
                //$total_pending_amt += $pending_fare;                
              
                $passenger_discount_disp = $total_sales_disp = $cash_fare_disp = $card_fare_disp = $knet_fare_disp = $wallet_fare_disp = $pending_amt_disp = '-';
                if($passenger_discount){
                    $passenger_discount_disp = number_format($passenger_discount, 3, '.', '');
                }

                if($total_sales){
                    $total_sales_disp = number_format($total_sales, 3, '.', '');
                }

                if($cash_fare){
                    $cash_fare_disp = number_format($cash_fare, 3, '.', '');
                }

                if($card_fare){
                    $card_fare_disp = number_format($card_fare, 3, '.', '');
                }

                if($knet_fare){
                    $knet_fare_disp = number_format($knet_fare, 3, '.', '');
                }

                if($wallet_fare){
                    $wallet_fare_disp = number_format($wallet_fare, 3, '.', '');
                }

                /*
                if($pending_fare){
                    $pending_amt_disp = number_format($pending_fare, 3, '.', '');
                }
                */

                if($pass_wallet_amt < 0){
                    $pending_amt_disp = number_format($pass_wallet_amt, 3, '.', '');
                }

                $totalSalesWithDiscount = $total_sales_disp + $discount_wallet_amount_used;
                $total_sales_with_discount_amount += $totalSalesWithDiscount;

                $pdffile .= '<tr>
                                <td>'.$i.'</td>
                                <td>'.$payment_type_msg.'</td>
                                <td>'.$tapAutoPayment.'</td>
                                <td>'.$trip_id.'</td>
                                <td>'.$pass_names.'</td>
                                <td>'.$passenger_phone.'</td>
                                <td>'.$taxi_no.'</td>

                                <td>'.$driver_name.'</td>
                                <td>'.number_format($fare, 3, '.', '').'</td>
                                <td>'.$promocode.'</td>
                                <td>'.$passenger_discount_disp.'</td>

                                <td>'.$corporate_name.'</td>

                                <td>'.$totalSalesWithDiscount.'</td>
                                <td>'.$discount_wallet_amount_used.'</td>
                                <td>'.$total_sales_disp.'</td>
                                <td>'.$cash_fare_disp.'</td>
                                <td>'.$card_fare_disp.'</td>
                                <td>'.$knet_fare_disp .'</td>
                                <td>'.$wallet_fare_disp.'</td>


                                

                                                                                                

                               
                                <td>'.$corporate_amount.'</td>


                                
                                
                                <td>'.$passenger_pending_amt.'</td>

                                <td>'.$current_pending_amt.'</td>

                                <td>'.$pending_amt_disp .'</td>

                                <td>'.$remarks.'</td>
                            </tr>';

            }

           


            $total_fare = number_format($total_fare, 3, '.', '');
            $total_pass_discount = number_format($total_pass_discount, 3, '.', '');
            $total_sales_data =number_format($total_sales_data, 3, '.', '');
            $total_cash_fare = number_format($total_cash_fare, 3, '.', '');
            $total_knet_fare = number_format($total_knet_fare, 3, '.', '');
            $total_card_fare = number_format($total_card_fare, 3, '.', '');
            $total_wallet_fare = number_format($total_wallet_fare, 3, '.', '');
            $total_pending_amt = number_format($total_pending_amt, 3, '.', '');

            /* Sasidharan Nov 28 2022 */
            $total_corporate_amount = number_format($total_corporate_amount, 3, '.', '');

                $pdffile .= '<tr></tr>
                                <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> 
                                <td></td>
                                <td></td>                               
                                <td></td>  
                                 <td></td>                             
                                <td>'.$total_fare.'</td>
                                <td></td>
                                <td>'.$total_pass_discount.'</td>

                                <td></td>


                                <td>'.$total_sales_with_discount_amount.'</td>
                                <td>'.$total_discount_amount.'</td>
                                <td>'.$total_sales_data.'</td>
                                <td>'.$total_cash_fare.'</td>
                                <td>'.$total_card_fare.'</td>
                                <td>'.$total_knet_fare .'</td>
                                <td>'.$total_wallet_fare.'</td>
                                
                                <td>'.$total_corporate_amount.'</td>
                                
                                <td>'.$total_pending_amt .'</td>
                                <td></td>
                            </tr><tr></tr><tr></tr>';

                           $total_discount_cash_pay = number_format($total_discount_cash_pay,3,'.','');
                           $total_discount_card_pay = number_format($total_discount_card_pay,3,'.','');
                           $total_discount_knet_pay = number_format($total_discount_knet_pay,3,'.','');
                           $total_discount_wallet_pay = number_format($total_discount_wallet_pay,3,'.','');
                           $total_discount_pending_pay = number_format($total_discount_pending_pay,3,'.','');
                           $total_discount_promo_pay = number_format($total_discount_promo_pay,3,'.','');


                           $total_cash_fare = $total_cash_fare+$total_discount_cash_pay;
                           $total_card_fare = $total_card_fare+$total_discount_card_pay;
                           $total_knet_fare = $total_knet_fare+$total_discount_knet_pay;
                           $total_wallet_fare = $total_wallet_fare+$total_discount_wallet_pay;
                           $total_pending_amt = $total_pending_amt+$total_discount_pending_pay;

                           $net_cash = number_format($total_cash_fare - $total_discount_cash_pay, 3, '.', '');
                           $net_card = number_format($total_card_fare - $total_discount_card_pay, 3, '.', '');
                           $net_knet = number_format($total_knet_fare - $total_discount_knet_pay, 3, '.', '');
                           $net_wallet = number_format($total_wallet_fare - $total_discount_wallet_pay, 3, '.', '');
                           $net_pending = number_format($total_pending_amt - $total_discount_pending_pay, 3, '.', '');


                           $total_gross_amt = $total_cash_fare + $total_card_fare + $total_knet_fare + $total_wallet_fare + $total_pending_amt+$total_discount_promo_pay;
                           $total_discount_amt = $total_discount_cash_pay + $total_discount_card_pay + $total_discount_knet_pay + $total_discount_wallet_pay + $total_discount_pending_pay+$total_discount_promo_pay;   
                           $total_net_amt = $net_cash+$net_card+$net_knet+$net_wallet+$net_pending;

                           /* Sasidharan Nov 28 2022 */
                           $total_net_amt += $total_corporate_amount;

                           $total_gross_amt = number_format($total_gross_amt, 3, '.', '');
                           $total_discount_amt = number_format($total_discount_amt, 3, '.', '');
                           $total_net_amt = number_format($total_net_amt, 3, '.', '');

                           

                $pdffile .= '<tr><td></td><td>Gross Sales</td><td>Discount</td><td>Net Sales</td><td>Net Sales With Discount</td></tr>
                            <tr><td>'.__("cash_sales").'</td><td>'.$total_cash_fare.'</td><td>'.$total_discount_cash_pay.'</td><td>'.$net_cash.'</td><td>'.$net_cash.'</td></tr>

                            <tr><td>'.__("debit_card_sales").'</td><td>'.$total_card_fare.'</td><td>'.$total_discount_card_pay.'</td><td>'.$net_card.'</td><td>'.$net_card.'</td></tr>

                            <tr><td>'.__("online_sales").'</td><td>'.$total_knet_fare.'</td><td>'.$total_discount_knet_pay.'</td><td>'.$net_knet.'</td><td>'.$net_knet.'</td></tr>

                            <tr><td>'.__("corporate_amount").'</td><td>'.''.'</td><td>'.''.'</td><td>'.$total_corporate_amount.'</td><td>'.$total_corporate_amount.'</td></tr>
                            
                            <tr><td>'.__("wallet_sales").'</td><td>'.$total_wallet_fare.'</td><td>'.$total_discount_wallet_pay.'</td><td>'.$net_wallet.'</td><td>'.$net_wallet.'</td></tr>

                            <tr><td>'.__("pending_recievable").'</td><td>'.$total_pending_amt.'</td><td>'.$total_discount_pending_pay.'</td><td>'.$net_pending.'</td><td>'.$net_pending.'</td></tr>

                            <tr><td>'.__("promocode_only").'</td><td>'.$total_discount_promo_pay.'</td><td>'.$total_discount_promo_pay.'</td><td>0</td><td>0</td></tr>

                            <tr><td>'.__("discount_wallet_label").'</td><td>0</td><td>0</td><td>0</td><td>'.$total_discount_amount.'</td></tr>

                            <tr><td>'.__("Total").'</td><td>'.$total_gross_amt.'</td><td>'.$total_discount_amt.'</td><td>'.$total_net_amt.'</td><td>'.($total_net_amt + $total_discount_amount).'</td></tr>';

                $pdffile .= '<tr><td ></td><td ></td><td ></td><td ></td></tr>';
                $pdffile .= '<tr><td ></td><td ></td><td ></td><td ></td></tr>';
                $pdffile .= '<tr><td  width="100%"  style="text-align:left;"><b>Passenger Unused Wallet</b></td></tr>';
                $pdffile .= '<tr><td ><b>Passenger Name</b></td><td ><b>Passenger Phone</b></td><td ><b>Recharge Amount</b></td><td ><b>Recharge Date</b></td></tr>';
                $pdffile .= '<tr><td ></td><td ></td><td ></td><td ></td></tr>';
    
                $pdffile .= '<tr><td ><b>Passenger Name</b></td><td ><b>Passenger Phone</b></td><td ><b>Recharge Amount</b></td><td ><b>Recharge Date</b></td></tr>';
                foreach($xls_unused_output as $key=>$val) {
                $sno = $key+1;
                $pass_names = isset($val['pass_name'])?$val['pass_name']:'';
                $passenger_phone = isset($val['pass_phone'])?$val['pass_phone']:'';
                $recharge_date = isset($val['recharge_date'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['recharge_date']):'';
                $recharge_amount = isset($val['recharge_amount'])? $val['recharge_amount']:0;
                $pdffile .= '<tr><td>'.$sno.'</td>
                <td>'.$pass_names.'</td>
                <td>'.$passenger_phone.'</td>  
                <td>'.$recharge_amount.'</td>     
                <td>'.$recharge_date.'</td></tr>';
                }
                $pdffile .= '</table>';

                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit; 
            
        }


    }


    public function action_sales_daily_export($input_table,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading='',$from,$to){

        $vars=explode('-',$_SESSION['download_set']);
        $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
        $this->session->delete('download_set');

        if($type==2)
        {


        }else{

            $pdffile ='<table border="0" cellpadding="1" cellspacing="0">
                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>Grand Limo Renting & Leasing Cars Co.</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Sales Report</b></td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b>Date</b></td>
                      <td class="head_border" style="text-align:left;"><b>From</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($from)).'</td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"></td>
                      <td class="head_border" style="text-align:left;"><b>To</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($to)).'</td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b></b></td>
                     </tr> ';

                $pdffile .= '<tr>                                
                             </tr>                     
                                <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('date').'</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('gross_sales').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('promocode_discount_amt').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('total_sales').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'.__('cash_reciept').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('card_reciept').'</b></td>              
                                                             
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('online_reciept').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('wallet_reciept').'</b></td>                            
                                    <td align="left" style="text-align:left;" width="3%"><b>'.__('balance_recievable').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>'. __('remark').'</b></td>                            
                                    
                                </tr>';

            $i=0;

        $sub_total_gross_amt = $sub_total_discount_promo_pay = $sub_total_net_pay = $sub_total_cash_fare = $sub_total_card_fare = $sub_total_knet_fare = $sub_total_wallet_fare = $sub_total_pending_amt = 0;

        foreach($input_table as $k=>$trip_data){

            $trip_detail = $trip_data['tripdet'];            

            $i++;

            $total_fare = $total_pass_discount = $total_sales_data = $total_cash_fare = $total_knet_fare = $total_card_fare = $total_wallet_fare = $total_pending_amt = 0;

            $total_discount_cash_pay = $total_discount_wallet_pay = $total_discount_knet_pay = $total_discount_card_pay = $total_discount_pending = $total_discount_promo_pay = $total_discount_pending_pay = 0;

            foreach($trip_detail as $key=>$val)
            {      


                $driver_name = isset($val['driver_name'])?$val['driver_name']:'';
                $pass_names = isset($val['pass_name'])?$val['pass_name']:'';
                $pass_lastnames = isset($val['pass_lastname'])?$val['pass_lastname']:'';
                $pickup = isset($val['pickup'])?$val['pickup']:'';
                $fare = isset($val['fare'])?$val['fare']:0;
                $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
                //$wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used'][$key]:0;
                $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
                $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
                $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
                $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
                $actual_paid_amt = isset($val['actual_paid_amt'])?$val['actual_paid_amt']:0;
                $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
                $phone = isset($val['phone'])?$val['phone']:'';
                $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
                $edit_status = isset($val['edit_status'])?$val['edit_status']:'';
                $passenger_pending_amt = isset($val['passenger_pending_amt'])?$val['passenger_pending_amt']:'';
                $promocode = isset($val['promocode'])?$val['promocode']:'';
                $passenger_discount = isset($val['passenger_discount'])?$val['passenger_discount']:'';
                $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
                $trans_fare = isset($val['trans_fare'])?$val['trans_fare']:0;

                $passenger_phone = isset($val['phone'])?$val['phone']:'';
                $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';
                

                /*if($fare==0){
                    $fare = $trans_fare;
                }*/               

                $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';
                //$payment_msg= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt) ;
                
                $fare_detail = isset($val['fare_details'])?$val['fare_details']:[];

                /* This fare was static keys based on complete trip API, If any change regarding this one update mandatory */
                $cash_fare = isset($fare_detail[0]['value'])?$fare_detail[0]['value']:0;
                $card_fare = isset($fare_detail[1]['value'])?$fare_detail[1]['value']:0;
                $knet_fare = isset($fare_detail[2]['value'])?$fare_detail[2]['value']:0;
                $additional_fare = isset($fare_detail[3]['value'])?$fare_detail[3]['value']:0;
                $wallet_fare = isset($fare_detail[4]['value'])?$fare_detail[4]['value']:0;
                $pending_fare = isset($fare_detail[5]['value'])?$fare_detail[5]['value']:0;
                $remarks = (isset($fare_detail[6]['value']) && $fare_detail[6]['value']!='')?$fare_detail[6]['value']:'-';

                $fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$wallet_fare+$pending_fare+$passenger_discount;
                $total_sales = $fare - $passenger_discount;

                //print_r($fare_detail);exit;
                $payment_type_msg = '';
                if($cash_fare && $wallet_fare){

                    $payment_type_msg = 'Cash & Wallet';

                    if($cash_fare){
                        $cash_fare = $cash_fare+$additional_fare;
                        $total_discount_cash_pay += $passenger_discount;
                    }else{
                        $wallet_fare = $wallet_fare+$additional_fare;
                        $total_discount_wallet_pay += $passenger_discount;                       
                    }
                     
                }else if($cash_fare){ 
                    $payment_type_msg = 'Cash';
                    $cash_fare = $cash_fare+$additional_fare;
                    $total_discount_cash_pay += $passenger_discount;
                    
                }else if($knet_fare){        
                    $payment_type_msg = 'Online';
                    $knet_fare = $knet_fare+$additional_fare;
                    $total_discount_knet_pay += $passenger_discount;                    

                }else if($card_fare){
                    $payment_type_msg = 'Card';
                    $card_fare = $card_fare+$additional_fare;
                    $total_discount_card_pay += $passenger_discount;
                   
                }else if($wallet_fare){
                    $payment_type_msg = 'Wallet';
                    $wallet_fare = $wallet_fare+$additional_fare;
                    $total_discount_wallet_pay += $passenger_discount;
                   
                }else if($passenger_discount){

                    $payment_type_msg = 'Promocode';
                    //if($pending_fare==0){
                        $total_discount_promo_pay += $passenger_discount;
                    //}
                }

                if($pending_fare && $payment_type_msg){
                    $payment_type_msg = $payment_type_msg.' & Pending';
                    //$total_discount_pending_pay += $passenger_discount;
                }else if($pending_fare){
                    $payment_type_msg = 'Pending';
                    $total_discount_pending_pay += $passenger_discount;
                }                

                $total_fare += $fare;
                $total_pass_discount += $passenger_discount;
                $total_sales_data += $total_sales;


                
                $total_cash_fare += $cash_fare;
                $total_knet_fare += $knet_fare;
                $total_card_fare += $card_fare;
                $total_wallet_fare += $wallet_fare;
                $total_pending_amt += $pending_fare;                
              
                $passenger_discount_disp = $total_sales_disp = $cash_fare_disp = $card_fare_disp = $knet_fare_disp = $wallet_fare_disp = $pending_amt_disp = '-';
                if($passenger_discount){
                    $passenger_discount_disp = number_format($passenger_discount, 3, '.', '');
                }

                if($total_sales){
                    $total_sales_disp = number_format($total_sales, 3, '.', '');
                }

                if($cash_fare){
                    $cash_fare_disp = number_format($cash_fare, 3, '.', '');
                }

                if($card_fare){
                    $card_fare_disp = number_format($card_fare, 3, '.', '');
                }

                if($knet_fare){
                    $knet_fare_disp = number_format($knet_fare, 3, '.', '');
                }

                if($wallet_fare){
                    $wallet_fare_disp = number_format($wallet_fare, 3, '.', '');
                }

                if($pending_fare){
                    $pending_amt_disp = number_format($pending_fare, 3, '.', '');
                }
                

            }


            $total_discount_cash_pay = number_format($total_discount_cash_pay,3,'.','');
            $total_discount_card_pay = number_format($total_discount_card_pay,3,'.','');
            $total_discount_knet_pay = number_format($total_discount_knet_pay,3,'.','');
            $total_discount_wallet_pay = number_format($total_discount_wallet_pay,3,'.','');
            $total_discount_pending_pay = number_format($total_discount_pending_pay,3,'.','');
            $total_discount_promo_pay = number_format($total_discount_promo_pay,3,'.','');

            $total_cash_fare = number_format($total_cash_fare,3,'.','');
            $total_card_fare = number_format($total_card_fare,3,'.','');
            $total_knet_fare = number_format($total_knet_fare,3,'.','');
            $total_wallet_fare = number_format($total_wallet_fare,3,'.','');
            $total_pending_amt = number_format($total_pending_amt,3,'.','');

            $total_gross_amt = $total_cash_fare + $total_card_fare + $total_knet_fare + $total_wallet_fare + $total_pending_amt+$total_discount_promo_pay;

            $total_gross_amt = number_format($total_gross_amt,3,'.','');

            $total_net_pay = $total_gross_amt - $total_discount_promo_pay;
            $total_net_pay = number_format($total_net_pay,3,'.','');

            $sub_total_gross_amt += $total_gross_amt;
            $sub_total_discount_promo_pay += $total_discount_promo_pay;
            $sub_total_net_pay += $total_net_pay;
            $sub_total_cash_fare += $total_cash_fare;
            $sub_total_card_fare += $total_card_fare;
            $sub_total_knet_fare += $total_knet_fare;

            $sub_total_wallet_fare += $total_wallet_fare;
            $sub_total_pending_amt += $total_pending_amt;

            $actual_pickup_time = isset($trip_data['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d ',$trip_data['actual_pickup_time']):'';

                $pdffile .= '<tr>
                                <td>'.$i.'</td>
                                <td>'.$actual_pickup_time.'</td>
                                <td>'.$total_gross_amt.'</td>
                                <td>'.$total_discount_promo_pay.'</td>
                                <td>'.$total_net_pay.'</td>                              
                                <td>'.$total_cash_fare.'</td>
                                <td>'.$total_card_fare.'</td>
                                <td>'.$total_knet_fare.'</td>                               
                                <td>'.$total_wallet_fare.'</td>
                                <td>'.$total_pending_amt .'</td>
                                <td>-</td>
                            </tr>';         

    }  

            $sub_total_gross_amt = number_format($sub_total_gross_amt,3,'.','');
            $sub_total_discount_promo_pay = number_format($sub_total_discount_promo_pay,3,'.','');
            $sub_total_net_pay = number_format($sub_total_net_pay,3,'.','');
            $sub_total_cash_fare = number_format($sub_total_cash_fare,3,'.','');
            $sub_total_card_fare = number_format($sub_total_card_fare,3,'.','');
            $sub_total_knet_fare = number_format($sub_total_knet_fare,3,'.','');
            $sub_total_wallet_fare = number_format($sub_total_wallet_fare,3,'.','');
            $sub_total_pending_amt = number_format($sub_total_pending_amt,3,'.','');


            $pdffile .= '<tr></tr><tr>
                        <td></td>
                        <td></td>
                        <td>'.$sub_total_gross_amt.'</td>
                        <td>'.$sub_total_discount_promo_pay.'</td>
                        <td>'.$sub_total_net_pay.'</td>
                        <td>'.$sub_total_cash_fare.'</td>
                        <td>'.$sub_total_card_fare.'</td>
                        <td>'.$sub_total_knet_fare.'</td>
                        <td>'.$sub_total_wallet_fare.'</td>
                        <td>'.$sub_total_pending_amt.'</td>
                        <td></td></tr>';               

               /* $pdffile .= '<tr><td></td><td>Gross Sales</td><td>Discount</td><td>Net Sales</td></tr>
                            <tr><td>'.__("cash_sales").'</td><td>'.$total_cash_fare.'</td><td>'.$total_discount_cash_pay.'</td><td>'.$net_cash.'</td></tr>
                            <tr><td>'.__("debit_card_sales").'</td><td>'.$total_card_fare.'</td><td>'.$total_discount_card_pay.'</td><td>'.$net_card.'</td></tr>
                            <tr><td>'.__("online_sales").'</td><td>'.$total_knet_fare.'</td><td>'.$total_discount_knet_pay.'</td><td>'.$net_knet.'</td></tr>
                            <tr><td>'.__("wallet_sales").'</td><td>'.$total_wallet_fare.'</td><td>'.$total_discount_wallet_pay.'</td><td>'.$net_wallet.'</td></tr>
                            <tr><td>'.__("pending_recievable").'</td><td>'.$total_pending_amt.'</td><td>'.$total_discount_pending_pay.'</td><td>'.$net_pending.'</td></tr>
                            <tr><td>'.__("promocode_only").'</td><td>'.$total_discount_promo_pay.'</td><td>'.$total_discount_promo_pay.'</td><td>0</td></tr>
                            <tr><td>'.__("Total").'</td><td>'.$total_gross_amt.'</td><td>'.$total_discount_amt.'</td><td>'.$total_net_amt.'</td></tr>';*/

                $pdffile .= '</table>';

                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit; 
            
        }


    }
    
    public function action_dispatcher_performance_export($all_company_list,$export_table_header,$export_table_field_select,$heading,$total_fare='',$sub_heading='',$from,$to){

        $vars=explode('-',$_SESSION['download_set']);
        $start=$vars['0']-1;$end=$vars['1']-1;$type=$vars['2'];
        $this->session->delete('download_set');

        if($type==2)
        {


        }else{

            $dispatcher_name = isset($all_company_list[0]['dispatcher_name'])?$all_company_list[0]['dispatcher_name']:'';

            $total_late_key = Commonfunction::searchForId(1, $all_company_list);
            $total_too_late_key = Commonfunction::searchForId(2, $all_company_list);
            $total_on_time_key = Commonfunction::searchForId(3, $all_company_list);
            $total_missed_key = Commonfunction::searchForId(4, $all_company_list);
            $total_cancel_key = Commonfunction::searchForId(5, $all_company_list);

            $total_late = isset($all_company_list[$total_late_key]['total_late'])?$all_company_list[$total_late_key]['total_late']:0;
            $total_too_late = isset($all_company_list[$total_too_late_key]['total_too_late'])?$all_company_list[$total_too_late_key]['total_too_late']:0;
            $total_on_time = isset($all_company_list[$total_on_time_key]['total_on_time'])?$all_company_list[$total_on_time_key]['total_on_time']:0;
            $total_missed = isset($all_company_list[$total_missed_key]['total_missed'])?$all_company_list[$total_missed_key]['total_missed']:0;
            $total_cancel = isset($all_company_list[$total_cancel_key]['total_cancel'])?$all_company_list[$total_cancel_key]['total_cancel']:0;


            $pdffile ='<table border="0" cellpadding="1" cellspacing="0">
                     <tr>
                        <td  width="100%"  style="text-align:left;"><b>Dispatcher Performance Report.</b></td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"><b>Performance Report</b></td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b></b></td>
                      <td class="head_border" style="text-align:left;"><b>From</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($from)).'</td>
                     </tr>
                      <tr>
                      <td class="head_border" style="text-align:left;"></td>
                      <td class="head_border" style="text-align:left;"><b>To</b></td>
                      <td class="head_border" style="text-align:left;">'.Date('d F ,Y',strtotime($to)).'</td>
                     </tr>
                     <tr>
                      <td class="head_border" style="text-align:left;"><b></b></td>
                     </tr> ';

                $pdffile .= '<tr>                                
                             </tr>                     
                                <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Name</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Late</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Too Late</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Ontime</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Missed</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Cancel</b></td>                         
                                </tr>';

                $pdffile .= ' <tr>  <td align="left" width="1%">1</td>
                                    <td align="left" style="text-align:left;" width="1%">'.ucfirst($dispatcher_name).'</td>                           
                                    <td align="left" style="text-align:left;" width="1%">'.$total_late.'</td>
                                    <td align="left" style="text-align:left;" width="1%">'.$total_too_late.'</td>
                                    <td align="left" style="text-align:left;" width="1%">'.$total_on_time.'</td>
                                    <td align="left" style="text-align:left;" width="1%">'.$total_missed.'</td>
                                    <td align="left" style="text-align:left;" width="1%">'.$total_cancel.'</td>                         
                              </tr>
                              <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';


                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                    <td  width="100%"  style="text-align:left;"><b>Late Trips.</b></td>
                                </tr>
                                 <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Trip ID</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Date</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Passenger name</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Phone</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Pickup</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Drop</b></td>                         
                                </tr>';

                if( isset($all_company_list[$total_late_key]['trip_details']) && count($all_company_list[$total_late_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_late_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            $pdffile .= '<tr>
                                            <td align="left" width="1%">'.$i.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['trip_id'].'</td>                           
                                            <td align="left" style="text-align:left;" width="1%">'.$pickup_date.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.ucfirst($tot_late['pass_name']).'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pass_phone'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pickup'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['drop_location'].'</td>                         
                                        </tr>';

                        }

                }else{

                     $pdffile .= '<tr><td colspan="7"><center>No Data Found</center></td></tr>';
                }

                $pdffile .='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                    <td  width="100%"  style="text-align:left;"><b>Too Late Trips.</b></td>
                                </tr>
                                 <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Trip ID</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Date</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Passenger name</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Phone</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Pickup</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Drop</b></td>                         
                                </tr>';

                if( isset($all_company_list[$total_too_late_key]['trip_details']) && count($all_company_list[$total_too_late_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_too_late_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            $pdffile .= '<tr>
                                            <td align="left" width="1%">'.$i.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['trip_id'].'</td>                           
                                            <td align="left" style="text-align:left;" width="1%">'.$pickup_date.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.ucfirst($tot_late['pass_name']).'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pass_phone'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pickup'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['drop_location'].'</td>                         
                                        </tr>';

                        }

                }else{

                     $pdffile .= '<tr><td colspan="7"><center>No Data Found</center></td></tr>';
                }
                
                $pdffile .='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                    <td  width="100%"  style="text-align:left;"><b>Ontime Trips.</b></td>
                                </tr>
                                 <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Trip ID</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Date</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Passenger name</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Phone</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Pickup</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Drop</b></td>                         
                                </tr>';

                if( isset($all_company_list[$total_on_time_key]['trip_details']) && count($all_company_list[$total_on_time_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_on_time_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            $pdffile .= '<tr>
                                            <td align="left" width="1%">'.$i.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['trip_id'].'</td>                           
                                            <td align="left" style="text-align:left;" width="1%">'.$pickup_date.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.ucfirst($tot_late['pass_name']).'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pass_phone'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pickup'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['drop_location'].'</td>                         
                                        </tr>';

                        }

                }else{

                     $pdffile .= '<tr><td colspan="7"><center>No Data Found</center></td></tr>';
                }
                
                $pdffile .='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                    <td  width="100%"  style="text-align:left;"><b>Missed Trips.</b></td>
                                </tr>
                                 <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Trip ID</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Date</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Passenger name</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Phone</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Pickup</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Drop</b></td>                         
                                </tr>';

                if( isset($all_company_list[$total_missed_key]['trip_details']) && count($all_company_list[$total_missed_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_missed_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            $pdffile .= '<tr>
                                            <td align="left" width="1%">'.$i.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['trip_id'].'</td>                           
                                            <td align="left" style="text-align:left;" width="1%">'.$pickup_date.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.ucfirst($tot_late['pass_name']).'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pass_phone'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pickup'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['drop_location'].'</td>                         
                                        </tr>';

                        }

                }else{

                     $pdffile .= '<tr><td colspan="7"><center>No Data Found</center></td></tr>';
                }
                
                $pdffile .='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';

                $pdffile .='<table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                    <td  width="100%"  style="text-align:left;"><b>Cancel Trips.</b></td>
                                </tr>
                                 <tr>
                                    <td align="left" width="1%"><b>'.__('sno_label').'</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Trip ID</b></td>                           
                                    <td align="left" style="text-align:left;" width="1%"><b>Date</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Passenger name</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Phone</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Pickup</b></td>
                                    <td align="left" style="text-align:left;" width="1%"><b>Drop</b></td>                         
                                </tr>';

                if( isset($all_company_list[$total_cancel_key]['trip_details']) && count($all_company_list[$total_cancel_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_cancel_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            $pdffile .= '<tr>
                                            <td align="left" width="1%">'.$i.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['trip_id'].'</td>                           
                                            <td align="left" style="text-align:left;" width="1%">'.$pickup_date.'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.ucfirst($tot_late['pass_name']).'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pass_phone'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['pickup'].'</td>
                                            <td align="left" style="text-align:left;" width="1%">'.$tot_late['drop_location'].'</td>                         
                                        </tr>';

                        }

                }else{

                     $pdffile .= '<tr><td colspan="7"><center>No Data Found</center></td></tr>';
                }
                
                $pdffile .='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';


                $filename = $heading."_".date("Y-m-d_H-i",time());
                header("Content-Disposition: attachment; filename=".$filename.".xls");
                echo $pdffile;
                exit; 
            
        }


    }



} // End Welcome
