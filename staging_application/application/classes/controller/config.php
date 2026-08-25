<?php defined('SYSPATH') or die('No direct script access.');

/****************************************************************

* website controller - Contains abstract class of front end 

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/

abstract class Controller_Config extends Controller_Template
{
	//Default variables
	public $template="themes/template";
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
	public $job_settings; 
	public $selected_theme;
	public $page_title;
	public $miles;
	
	/**
	****__construct()****
	*/
	public function __construct(Request $request, Response $response)
	{
		
		$controller = $request->controller();
		$action = $request->action();
		
		// Assign the request to the controller
		$this->request = $request;

		// Assign a response to the controller
		$this->response = $response;	       
		//Session instance
		$this->session = Session::instance();
		
		$this->urlredirect=Request::current();		



		//License checker
		
			
		# copy the server vars 
		$server_array = $_SERVER;
                
        $file_name1 = "license.library.php";    
        $file_name2 = "license.application.php";
        $file_name3 = "license.generator.php";    
       
		if (!file_exists(APPPATH.'classes/'.$file_name1) || !file_exists(APPPATH.'classes/'.$file_name2) || !file_exists(APPPATH.'classes/'.$file_name3)) {
				die("$file_name1 doesn't exist.");
			} else {
				require_once(APPPATH.'classes/'.$file_name1);
				require_once(APPPATH.'classes/'.$file_name2);
				require_once(APPPATH.'classes/'.$file_name3);	
			} 
			
		if(!class_exists('ndot_license_application')) die('
			<!Doctype html>
		<html lang="en">
	    <head>
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <title>Error page</title>
	    </head>

	    <body style="background: #eee;width: 100%;">
	        <div class="inner" style="width:700px;margin: 0 auto;">
	            <div class="error" style ="float: left;width: 100%;border-radius: 5px;padding: 20px;box-sizing: border-box;-webkit-box-sizing: border-box;margin-top: 150px;text-align: center;background: #fff;box-shadow: 0 0 15px rgba(0,0,0,0.3);-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);">
	                <h1 style="width: 100%;margin: 0;font: 20px arial;color: #ff0000;float: left;">License Key Validation Error : </h1>
	                <p style ="float: left;width: 100%;font:14px arial;color: #666;margin: 15px 0 0 0; "> Class file is corrupted, so please contact our team <a href="http://www.ndottech.com/" title="Ndottech"> http://www.ndottech.com/ </a>. </p>
	                
	            </div>
	        </div>        
	    </body>
	    
	    </html>');
		
		
		$application = new ndot_license_application(APPPATH.'ndot.taximobility.license.supplied.dat', true, true, true, true);	
		
		$application->set_server_vars($server_array);
		
		$set_data 	= $application->validate();		
			
		//~ if($set_data['RESULT'] != 'OK')
		//~ {
			
			//~ $template ='
			//~ <!Doctype html>
		//~ <html lang="en">
	    //~ <head>
	        //~ <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        //~ <title>Error page</title>
	    //~ </head>

	    //~ <body style="background: #eee;width: 100%;">
	        //~ <div class="inner" style="width:700px;margin: 0 auto;">
	            //~ <div class="error" style ="float: left;width: 100%;border-radius: 5px;padding: 20px;box-sizing: border-box;-webkit-box-sizing: border-box;margin-top: 150px;text-align: center;background: #fff;box-shadow: 0 0 15px rgba(0,0,0,0.3);-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);">
	                //~ <h1 style="width: 100%;margin: 0;font: 20px arial;color: #ff0000;float: left;">License Key Validation Error : </h1>
	                //~ <p style ="float: left;width: 100%;font:14px arial;color: #666;margin: 15px 0 0 0; "> Supplied License key is : '.$set_data['RESULT'].', so please contact our team <a href="http://www.ndottech.com/" title="Ndottech"> http://www.ndottech.com/ </a>. </p>
	                
	            //~ </div>
	        //~ </div>        
	    //~ </body>
	    
	    //~ </html>';
	    
			//~ echo $template;
				
			//~ $application->make_secure();

			//~ unset($application);
			
			//~ die($error_content);
			
		//~ }
		
		
		//Models declaration
		$siteusers = Model::factory('siteusers');
		$driver = Model::factory('driver');
		$passengers = Model::factory('passengers');
		//$find_model = Model::factory('find');
		$this->authorize=Model::factory('authorize');
		$this->commonmodel=Model::factory('commonmodel');
		$this->managemodel=Model::factory('managemodel');
		$this->site=Model::factory('site');
		$this->emailtemplate=Model::factory('emailtemplate');
		
		
		$this->lang =$this->session->get('lang');
		if($this->lang !=""){
			$lang=$this->lang;
		}else{
			$lang="en";
		}
		$this->currlang=I18n::lang($lang);
		$this->javascript_language=json_encode(I18n::load($this->lang));
        
		$this->usertype=$this->session->get('user_type');
		$this->username=$this->session->get('username');
		$this->name=$this->session->get('name');
		$this->user_name=$this->session->get('user_name');
		$this->firstname=$this->session->get('first_name');

		//$this->userid=$this->session->get('userid');

		View::bind_global('usertype',$this->usertype);
		View::bind_global('username',$this->username);
		View::bind_global('name',$this->name);
		View::bind_global('user_name',$this->user_name);
		View::bind_global('first_name',$this->firstname);
		View::bind_global('js_language',$this->javascript_language);
		//View::bind_global('userid',$this->userid);
		
		
		 //passengers model
        $id =$this->session->get('id');  
        $passengermodel = Model::factory('passengers');
		$user_det=$passengermodel->select_current_user($id);
		View::bind_global('user_det', $user_det);
        $this->session->set('user_det',$user_det);

		//Get cookie values if cookie is set and apply to session variables
		Cookie::$salt='userid';
		$cookie=Cookie::get('userid');
		if($cookie)
		{
			$this->session->set("userid",$cookie);
			$user_details=$this->authorize->select_user_details_by_id($cookie);
			if(count($user_details)>0){
				$this->session->set("user_type",$user_details[0]['user_type']);
				$this->session->set("email",$user_details[0]['email']);
			}
		}
        	$this->userid='';

		//Css & Script include for admin
		/**To Define path for selected theme**/
		define("ADMINIMGPATH",URL_BASE.'public/admin/images/');
		define("CSSADMIN",URL_BASE.'public/admin/');
		define("ADMINCSSPATH",CSSADMIN.'css/');		
		

		//Users Themes
		define("THEME","default/");
		define("USERVIEW","themes/".THEME);
		define("CSSPATH","public/css/");

		$this->template = USERVIEW.'template';

	
		$id =$this->session->get('id');
		$usertype =$this->session->get('usertype');
		$usrid =$id ;
		if($usertype == 'passengers')
		{
			$usr_details = $passengers->get_passenger_profile_details($usrid);
		}
		else
		{
			$usr_details = $driver->get_my_profile_details($usrid);
		}
		/** for header menu info **/
		$menuorder = $siteusers->menu_listingorder();
		View::bind_global('menuorder',$menuorder);
		/** for footer info **/
		$footer_contents = $siteusers->footer_contents();
		View::bind_global('footer_contents',$footer_contents);
		
		View::bind_global('usrid',$usrid);
		View::bind_global('usr_details',$usr_details);
		View::bind_global('usertype',$usertype);

	
			
		if(!isset($usrid) && $action != 'signup' && $action != 'forgotpassword' && $action!='foursquare_connect' && $action!='twittersignin' && $action!='linkdin_signin'){
			$userstyles = array(CSSPATH.'layout_home.css' =>'screen',
							CSSPATH.'mobile_slider/skin.css' =>'screen');
		}else{
			$userstyles = array(CSSPATH.'layout.css' =>'screen',
							CSSPATH.'mobile_slider/skin.css' =>'screen');		
		
		}
							
		$userscripts = array(SCRIPTPATH.'jquery-1.4.2.min.js',
							SCRIPTPATH.'lightbox-form.js',
							SCRIPTPATH.'rating.min.js',
							SCRIPTPATH.'text_sahdow.js');	
							
		$this->app_name=$this->commonmodel->select_site_settings('app_name',SITEINFO);		
		$this->app_description=$this->commonmodel->select_site_settings('app_description',SITEINFO);		
		$this->siteemail=$this->commonmodel->select_site_settings('email_id',SITEINFO);
		$this->notification_time = $this->commonmodel->select_site_settings('notification_settings',SITEINFO);
		
 #print_r($this->app_name);	exit;
		DEFINE("SITENAME",$this->app_name);

		//~ $getMiles = $find_model->getMiles();

		//~ foreach($getMiles as $mile){
			//~ //$m .= '"'.$mile['mile_name'].'" => "'.$mile['mile_name'].'"'.',';
			//~ $miles[$mile['mile_name']] = $mile['mile_name'];
		//~ }


		if(COMPANY_CID!=0)
		{		
			$company_content=getcompanycontent(COMPANY_CID);
			View::bind_global('company_content',$company_content);
			foreach($company_content as $cc)
			{
				Route::set($cc['page_url'], $cc['page_url'].'.html')
					->defaults(array(
						'controller' => 'page',
						'action'     => 'companycms'
					));	
			}
			//print_r($company_content);
		}
		

        $waitingtime = array(
					"15" => "15 Mins",
					"30" => "30 Mins",
					"45" => "45 Mins",
					"60" => "60 Mins"
				 );
				 
    	$this->session->set("miles",5);
    
    	if($action)
    	{ 
    		
		$this->meta_keyword=$this->commonmodel->get_meta_settings('meta_keyword',$action);		
		$this->meta_description=$this->commonmodel->get_meta_settings('meta_description',$action);
		$this->meta_title = $this->commonmodel->get_meta_settings('meta_title',$action);
    	}
    	
    	if($this->meta_keyword == '')
    	{
		$this->meta_keyword = $this->commonmodel->select_site_settings('meta_keyword',SITEINFO);			    	
    	}

    	if($this->meta_description == '')
    	{
		$this->meta_description = $this->commonmodel->select_site_settings('meta_description',SITEINFO);			    	
    	}
    	
    	if($this->meta_title == '')
    	{
    		$this->meta_title = $this->app_name;			    	
    	}
        if(COMPANY_CID==0)
        {		    	
			$this->title=$this->app_name; //
			$this->meta_keywords=$this->meta_keyword; //
			$this->meta_description=$this->meta_description; //
        }
        else
        {
			$this->title=COMPANY_APP_NAME; //
			$this->meta_title = COMPANY_META_TITLE;
			$this->meta_keywords=COMPANY_META_KEYWORD; //
			$this->meta_description=COMPANY_META_DESCRIPTION; //				
		}
		
		
		View::bind_global('meta_description',$this->meta_description);
		View::bind_global('page_title',$this->title);
		View::bind_global('meta_keywords',$this->meta_keywords);
		View::bind_global('meta_title',$this->meta_title);
		
		
		View::bind_global('miles', $miles);
		View::bind_global('waitingtime', $waitingtime);//
		View::bind_global('notification_time', $notification_time);		

        
		View::bind_global('currency_code',$this->all_currency_code);
		//View::bind_global('currency_symbol',$this->currency_symbol);
		View::bind_global('success_msg', $this->success_msg);
		View::bind_global('failure_msg', $this->failure_msg );

		View::bind_global('app_name',$this->app_name);
		//View::bind_global('currencysymbol',$this->currencysymbol);
		View::bind_global('siteemail',$this->siteemail);
		
		View::bind_global('styles', $userstyles);
		View::bind_global('scripts', $userscripts);		
		
		View::bind_global('action', $action );
		View::bind_global('controller', $controller);
        
		$this->currenttimestamp=$this->currenttimestamp();

		View::bind_global('data', $_POST);
	    $ip=$_SERVER['REMOTE_ADDR'];	
		$ip =IPADDRESS; 			
	}
}
