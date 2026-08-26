<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Giftcard extends Controller_Siteadmin
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
		$this->zonefare_model      = Model::factory('zonefare');
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

    public function cardRedemption()
    {
        $data = $_POST;
        //url-ify the data for the POST
        $fields_string = '';
        foreach($data as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        $fields_string = rtrim($fields_string,'&');			    
        $url=GIFT_CARD_URL;
        $ch = curl_init(); //open connection
        curl_setopt($ch,CURLOPT_URL,$url); //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_POST,count($data));
        curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($ch); //execute post
        curl_close($ch);  //close connection
    }

    public static function checkBalance($card_number)
    { 
        $headers = [
            'Content-Type: application/json',
            sprintf('Authorization: Bearer %s', GIFT_CARD_TOKEN)
          ];
        
          $curl = curl_init(GIFT_CARD_URL."/balance_check?card_number=".$card_number."&vendor_id=".GIFT_CARD_VENDOR);
        
          curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
          $result = json_decode(curl_exec($curl));
        
          return $result;
    }

   } // End Add
