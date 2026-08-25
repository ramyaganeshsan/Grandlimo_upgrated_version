<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains PASSENGER details

* @Package: ConnectTaxi

* @Author:  Team

* @URL : http://www.ndot.in

********************************************************************/
Class Controller_Passengers extends Controller_Website
{
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        /**To Set Errors Null to avoid error if not set in view**/
        $this->session = Session::instance();
        $user_error    = 0;
        $managemodel   = Model::factory('managemodel');
        //Currency Settings from admin End
        if (COMPANY_CID == 0) {
            $siteinfo        = $managemodel->select_site_settings();
            $this->fb_key    = $siteinfo[0]['facebook_key'];
            $this->fb_secret = $siteinfo[0]['facebook_secretkey'];
        } else {
            $this->fb_key    = COMPANY_FB_KEY;
            $this->fb_secret = COMPANY_FB_SECRET;
        }
        //	$this->phone = $siteinfo[0]['phone'];
        View::bind_global('siteinfo', $siteinfo);
        $this->session->set('siteinfo', $siteinfo);
		//$this->session->set('lang', 'en');
        //passengers model
        $id             = $this->session->get('id');
        $passengermodel = Model::factory('passengers');
        $user_det       = $passengermodel->select_current_user($id);
        View::bind_global('user_det', $user_det);
        $this->session->set('user_det', $user_det);
        $Commonmodel       = Model::factory('Commonmodel');
        $this->currentdate = $Commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
        /*        
        $this->paypal_db = Model::factory('paypal');	
        $this->paypalconfig = $this->paypal_db->getpaypalconfig();        
        $this->paypal_currencysymbol = count($this->paypalconfig) > 0?$this->paypalconfig[0]['currency_symbol']:'';
        $this->paypal_currencycode = count($this->paypalconfig) > 0?$this->paypalconfig[0]['currency_code']:'';
        */
        DEFINE("MOBILEAPI_107", "mobileapi115");
        View::bind_global('balance', $bal);
        $siteusers      = Model::factory('siteusers');
        $this->template = USERVIEW . "template";
    }
    public function action_index()
    {
		
        $id                      = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid                   = $id; //isset($userid)?$userid:$id;
        $radius                  = Arr::get($_REQUEST, "rad");
        $siteusers               = Model::factory('siteusers');
        $get_logged_user_details = $siteusers->get_logged_user_details($usrid);
        if (!isset($usrid)) {
            $view                          = View::factory(USERVIEW . 'home');
            $this->template->meta_desc     = $this->meta_description;
            $this->template->meta_keywords = $this->meta_keywords;
            $this->template->title         = $this->title;
            $this->template->content       = $view;
        } else {
            $this->request->redirect('users/profile');
        }
    }
   
    public function action_booking(){
		if(isset($_GET['type'])){
		$child_booking = 1;
		}
		$this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $userid                           = $this->session->get('id');
        $member_type = $passengers->get_member_types($userid);
        
       // echo '<pre>';print_r($member_type);//exit;
       
        $siteusers      = Model::factory('siteusers');
        $mobileapi      = Model::factory('mobileapi115');
		$favourite_list          = $passengers->get_favourite_list($userid,0, 0);
		$get_child_count = $passengers->get_passenger_childlist_count($userid,'');
		//echo '<pre>';print_r($get_child_count);exit;
		$chos_child = 0;if($get_child_count){ $chos_child = 1;}
		$model_list          = $mobileapi->modeldetails();
		$all_company_map_list          = $siteusers->all_driver_map_list(COMPANY_CID);
		
		
      
        $view                             = View::factory(USERVIEW . 'booking')->bind('favourite_list',$favourite_list)->bind('userid',$userid)->bind('all_company_map_list',$all_company_map_list)->bind('child_booking',$child_booking)->bind('member_type', $member_type)->bind('model_list',$model_list)->bind('get_child_count',$get_child_count)->bind('chos_child',$chos_child);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
        }
        public function action_airport_pickup(){
		
		$this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $siteusers      = Model::factory('siteusers');
        $userid                           = $this->session->get('id');
        $favourite_list          = $passengers->get_favourite_list($userid,0, 0);
		$all_company_map_list          = $siteusers->all_driver_map_list(COMPANY_CID);
      
        $view                             = View::factory(USERVIEW . 'airportpickup_booking')->bind('favourite_list',$favourite_list)->bind('userid',$userid)->bind('all_company_map_list',$all_company_map_list);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
        }
        public function action_check_model_based_search(){
		$passengers                       = Model::factory('passengers');
		$motor_model = $_POST['motor_model'];
		$no_passengers = $_POST['no_passengers'];
		$max_luggage = $_POST['max_luggage'];
		
		$modeldetails = $passengers->modeldetails($motor_model,$no_passengers,$max_luggage);
		if($modeldetails != 0 ){
			
			echo $modeldetails;exit;
		}
		else{
		echo 0; exit;	
		}
		}
		
		public function action_check_fav_based_search(){
		$passengers                       = Model::factory('passengers');
		$passenger_id = $_POST['passenger_id'];
		$d_fav_latitude = $_POST['d_fav_latitude'];
		$d_fav_longtitute = $_POST['d_fav_longtitute'];
		$type = $_POST['type']; //1-pickup,2-drop
		
		$modeldetails = $passengers->check_fav_based_search($passenger_id,$d_fav_latitude,$d_fav_longtitute,$type);
		if($modeldetails > 0 ){
			echo $modeldetails;exit;
		}
		else{
		echo 0; exit;	
		}
		}
      public function action_get_members_list(){
		$passengers                       = Model::factory('passengers');
		$passenger_id = $_POST['passenger_id'];
		$account_type = $_POST['account_type'];
		$get_child_details = $passengers->get_passenger_childlist($passenger_id,$account_type,1,20,0);
		if(count($get_child_details) > 0 ){
			$sele_arr = '<script>$("#member_list").select2();</script><select id="member_list" name="member_list" onchange="set_passenger(this.value)">';
			$sele_arr .= '<option value="">'.__("choose_child_name").'</option>';
			$i=0;
		foreach($get_child_details as $child ) { 
		$sele_arr .='<option value="'.$child['_id'].'">'.$get_child_details[$i]['name'].'</option>';
		$i++;
		}
		$sele_arr .='</select> <label class="control-group err"><span style="cursor:text;" id="member_list_error"> </span></label>';
		
		echo $sele_arr;
		exit;
		}
		else{
		echo 0; exit;	
		}
  
	  }
	  public function action_memberstrip(){
		   /*** Dashboard Style & Scripts ***/
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles                       = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                      = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
		if(isset($_GET['type'])){
			$my_id =1;
		}  
		$this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $upcoming_array = 0; //2
        $ongoing_array = 0;//1
        $past_array = 0;//0
        if($_POST){
			
			$passenger_id = $_POST['passenger_id'];
			$upcoming_array = $passengers->get_member_trip_details($passenger_id,'1','A',2);
			$ongoing_array = $passengers->get_member_trip_details($passenger_id,'1','A',1);
			$past_array = $passengers->get_member_trip_details($passenger_id,'1','A',0);
		}
		$userid                           = $this->session->get('id');
        $member_type = $passengers->get_member_types($userid);
        //echo '<pre>';print_r($member_type);exit;
        
        $siteusers      = Model::factory('siteusers');
      
        $view                             = View::factory(USERVIEW . 'memberstrip')->bind('userid',$userid)->bind('member_type', $member_type)->bind('upcoming_array',$upcoming_array)->bind('ongoing_array',$ongoing_array)->bind('past_array',$past_array)->bind('my_id',$my_id)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
       
		}
	  
	  
	   public function action_memberstrip_report(){
		$this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $upcoming_array = 0; //2
        $ongoing_array = 0;//1
        $past_array = 0;//0
        if($_POST){
			
			$passenger_id = $_POST['passenger_id'];
			$upcoming_array = $passengers->get_member_trip_details($passenger_id,'1','A',2);
			//print_r($upcoming_array);
			$ongoing_array = $passengers->get_member_trip_details($passenger_id,'1','A',1);
			//print_r($ongoing_array);
			$past_array = $passengers->get_member_trip_details($passenger_id,'1','A',0);
			//echo '<pre>'; print_r($past_array);
			//exit;
		}
       
        $view                             = View::factory(USERVIEW . 'memberstrip_reports')->bind('upcoming_array',$upcoming_array)->bind('ongoing_array',$ongoing_array)->bind('past_array',$past_array);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        echo $this->template->content          = $view;
        exit;
        
		}
	public function action_viewtrip(){
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles                               = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                              = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
		$log_id    = $this->request->param('id');//exit;
		$this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $trip_array = $passengers->get_member_trip_details_view($log_id);
        $view                             = View::factory(USERVIEW . 'viewtrip')->bind('trip_array',$trip_array)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
		 
	} 
    /* Favourites */
    public function action_add_favourite(){
		$this->is_login();
        $this->is_login_status();
       
        $passengers                       = Model::factory('passengers');
        $userid                           = $this->session->get('id');
        $view                             = View::factory(USERVIEW . 'add_favourite');
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
        }
      public function action_get_favourite_list(){
		$passengers = Model::factory('passengers');
        $errors     = array();
        $this->is_login();
        $this->is_login_status();
        $userid                                   = $this->session->get('id');
        $id                                       = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles                               = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                              = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //all Completed Status with transaction
       // $favourite_list = $passengers->get_favourite_list($userid);
       $favourite_list          = $passengers->get_favourite_list($userid,0, 0);
       
        //pagination loads here
        $page_no     = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        $pag_data                      = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => count($favourite_list),
            'view' => 'pagination/punbb'
        ));
        //echo REC_PER_PAGE;exit;
        // echo count($favourite_list);
        //print_r($favourite_list);exit;
        $favourite_list          = $passengers->get_favourite_list($userid,$offset, REC_PER_PAGE);
       
        $view                          = View::factory(USERVIEW . 'get_favourite_list')->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('favourite_list', $favourite_list)->bind('offset', $offset)->bind('userid', $id)->bind('errors', $errors);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
		
        }
    /* Favourites */
	public function action_dashboard()
    {
		
        $this->is_login();
        $this->is_login_status();
       
        $passengers                       = Model::factory('passengers');
        $userid                           = $this->session->get('id');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles                       = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'timerstyle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                      = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js',
            SCRIPTPATH . 'kkcountdown.js'
        );
        //Last argumant - 0 -> Today, 1->all
        //Today Completed Status
        $passengers_today_compl           = $passengers->get_passenger_log_details($userid, 1, 'A', '0', 0, REC_PER_PAGE, COMPANY_CID);
        //all Completed Status
        $passengers_all_compl             = $passengers->get_passenger_log_details($userid, 1, 'A', '1', 0, 2, COMPANY_CID);
        //all Completed Status with transaction
        $passengers_all_compl_trans       = $passengers->get_passenger_log_transactions($userid, 1, 'A', '1', '0', REC_PER_PAGE, COMPANY_CID);
        //Today Progress Status before getting driver request
        $passengers_booked                = $passengers->get_passenger_booked_log_details($userid, 0, '', '0', '0', REC_PER_PAGE, COMPANY_CID);
        //Current Jurney after driver confirm 
        //$passengers_current               = $passengers->get_passenger_current_log_details($userid, 9, 'A', '0', '0', REC_PER_PAGE, COMPANY_CID);
        $passengers_current = $passengers->get_member_trip_details($userid,'1','A',2);
        //get profile details for passengers
        $passengers_profile               = $passengers->get_passenger_profile_details($userid);
       // print_r($passengers_profile);exit;
        
        $passengers_all_total_compl_trans = $passengers->get_total_passenger_log_transactions($userid, 1, 'A', '1', COMPANY_CID);
        $passengers_total_all_compl       = $passengers->get_total_passenger_log_details($userid, 1, 'A', '1', COMPANY_CID);
        //cancelled trip
        $all_transaction_list             = $passengers->passenger_cancel_transaction_details($userid, COMPANY_CID, '0', REC_PER_PAGE);
        $tot_all_transaction_list         = $passengers->passenger_tot_cancel_transaction_details($userid, COMPANY_CID);
        $view                             = View::factory(USERVIEW . 'dashboard')->bind('passengers_all_compl', $passengers_all_compl)->bind('passengers_all_compl_trans', $passengers_all_compl_trans)->bind('passengers_booked', $passengers_booked)->bind('passengers_current', $passengers_current)->bind('passengers_all_total_compl_trans', $passengers_all_total_compl_trans)->bind('passengers_total_all_compl', $passengers_total_all_compl)->bind('all_transaction_list', $all_transaction_list)->bind('tot_all_transaction_list', $tot_all_transaction_list)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('passengers_profile', $passengers_profile)->bind('notification_time', $this->notification_time)->bind('userid', $userid);
        //print_r($user);exit;
        $this->template->meta_desc        = $this->meta_description;
        $this->template->meta_keywords    = $this->meta_keywords;
        $this->template->title            = $this->title;
        $this->template->content          = $view;
    }
    /** Get Driver Status **/
    public function action_getdriver_status()
    {
        $timeout = 55; // timeout in seconds
        $now     = time(); // start timeexit;
        if (isset($_POST["value"])) {
            $passengers_model = Model::factory('passengers');
            while ((time() - $now) < $timeout) {
                $driver_status = $passengers_model->get_driver_request($_POST["value"]);
                $driver_reply  = $driver_status[0]['driver_reply'];
                $time_to_reach = $driver_status[0]['time_to_reach_passen'];
                if (!empty($driver_reply)) {
                    if ($driver_reply == 'A') {
                        $result = __("request_confirmed_passenger") . '<br>' . __('time_to_reach') . ' ' . $time_to_reach . ' ' . __('mins');
                    } else if ($driver_reply == 'R') {
                        $result = __("request_rejected_passenger") . '<br><div class="btn btn-small btn-inverse" onclick=gettaxi("' . $_POST["value"] . '","Yes")>' . __('get_taxi') . ' <i class="icon-chevron-right icon-white"></i></div>';
                    }
                    echo $result;
                    exit;
                    break;
                }
                usleep(50000);
            }
        }
    }
    /** Change Driver status **/
    public function action_changedriver_status()
    {
        if (isset($_POST["value"])) {
            $passengers_model  = Model::factory('passengers');
            $tdispatch_model   = Model::factory('tdispatch');
            $driver_status     = $passengers_model->get_driver_request($_POST["value"]);
            $driver_reply      = $driver_status[0]['driver_reply'];
            $company_id        = $driver_status[0]['company_id'];
            $passengers_log_id = $driver_status[0]['passengers_log_id'];
            $bookby            = $driver_status[0]['bookby'];
            $company_owner     = $passengers_model->get_company_ownerid($company_id);
            $company_ownerid   = $company_owner[0]['id'];
            if ($driver_reply == 'A' && $bookby = '2') {
                /*
                // Create Log //
                $log_message = __('log_message_driver_confirmed');
                $log_message = str_replace("TRIPID",$passengers_log_id,$log_message); 
                $log_booking = __('log_booking_driver_confirmed');
                $log_booking = str_replace("TRIPID",$passengers_log_id,$log_booking);
                
                $log_status = $tdispatch_model->create_logs($passengers_log_id,$company_id,$company_ownerid,$log_message,$log_booking);
                
                //Create Log //
                */
                echo __("request_confirmed_passenger");
                exit;
            } else if ($driver_reply == 'R') {
                /*
                // Create Log //		
                $company_id = $_SESSION['company_id'];	
                $user_createdby = $_SESSION['userid'];				
                
                $log_message = __('log_message_driver_cancelled');
                $log_message = str_replace("TRIPID",$passengers_log_id,$log_message); 
                $log_booking = __('log_booking_driver_cancelled');
                $log_booking = str_replace("TRIPID",$passengers_log_id,$log_booking); 
                
                $log_status = $tdispatch_model->create_logs($passengers_log_id,$company_id,$company_ownerid,$log_message,$log_booking);
                // Create Log //
                */
                echo __("request_rejected_passenger") . '<br><div class="btn btn-small btn-inverse" onclick=gettaxi("' . $_POST["value"] . '","Yes")>' . __('get_taxi') . ' <i class="icon-chevron-right icon-white"></i></div>';
                exit;
            } else {
                /*
                // Create Log //		
                $company_id = $_SESSION['company_id'];	
                $user_createdby = $_SESSION['userid'];				
                
                $log_message = __('log_message_driver_missed');
                $log_message = str_replace("TRIPID",$passengers_log_id,$log_message); 
                $log_booking = __('log_booking_driver_missed');
                $log_booking = str_replace("TRIPID",$passengers_log_id,$log_booking); 
                
                $log_status = $tdispatch_model->create_logs($passengers_log_id,$company_id,$company_ownerid,$log_message,$log_booking);
                // Create Log //
                */
                $change_driver_status = $passengers_model->change_driver_status($_POST["value"], 'C');
                echo __("request_canceled_passenger") . '<br><div class="btn btn-small btn-inverse" onclick=gettaxi("' . $_POST["value"] . '","Yes")>' . __('get_taxi') . ' <i class="icon-chevron-right icon-white"></i></div>';
                exit;
            }
        }
    }
    /** Get taxi used to redirect user to search page **/
    public function action_gettaxi()
    {
        $passengers_model = Model::factory('passengers');
        $restrict         = $_POST['restrict'];
        $driver_status    = $passengers_model->get_driver_request(mysql_real_escape_string($_POST["value"]));
        $log_id           = $passengers_model->get_sublogid(mysql_real_escape_string($_POST["value"]));
        if (count($driver_status) > 0) {
            $current_location = $driver_status[0]['current_location'];
            $drop_location    = $driver_status[0]['drop_location'];
            $no_passengers    = $driver_status[0]['no_passengers'];
            $pickup_time      = date('h:i:s', strtotime($driver_status[0]['pickup_time']));
            $this->session->set("current_location", $current_location);
            $this->session->set("drop_location", $drop_location);
            $this->session->set("no_passengers", $no_passengers);
            $this->session->set("pickup_time", $pickup_time);
            if ($restrict == 'Yes') {
                $this->session->set("passengerlog_id", $log_id);
            } else {
                $this->session->set("passengerlog_id", "");
            }
            echo '1';
            exit;
        } else {
            echo '2';
            exit;
        }
    }
    /**
     *****action_signup()****
     *@ User Registration
     */
    /*public function action_signup()
    {
        $siteusers      = Model::factory('passengers');
        $mobile_api      = Model::factory('mobileapi115');
        $activation_key = Commonfunction::admin_random_user_password_generator();
        $errors         = array();
        $id             = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid          = $id; // isset($userid)?$userid:$id; 
        /**If session is set it should not allow login page through URL** /
        if (!isset($usrid)) {
            /*To get selected language at user side* /
            $lang_select = arr::get($_REQUEST, 'language');
            if ($_POST) {
                //print_r($_POST);exit;		
                /**Send entered values to model for validation** /
                $formvalues            = Arr::extract($_POST, array(
                    'name',
                    'lastname',
                    'salutation',
                    'email',
                    //'civil_number',
                    'phone',
                    'referral_code',
                    'address',
                    'creditcard_no',
                    'creditcard_cvv',
                    'expdatemonth',
                    'expdateyear',
                ));
                
                $random_key            = text::random($type = 'alnum', $length = 10);
                $userurl               = $random_key;
                $email_exist           = $siteusers->check_email_passengers($_POST['email'], COMPANY_CID);
                $phone_exist           = $siteusers->check_phone_passengers($_POST['phone'], COMPANY_CID);
                $referral_code         = ""; //$_POST['referral_code'];
                $referred_passenger_id = '';
                if ($referral_code != "") {
                    $validate_referral_code = $mobile_api->check_referral_code($referral_code);
                    //echo count($validate_referral_code);
                    if (is_array($validate_referral_code)) {
                        $referred_passenger_id = $validate_referral_code[0]['id'];
                    } else {
                        //$referred_passenger_id = '';
                        $email_exist = Message::success(__("invalid_referral_code"));
                        $this->request->redirect("/");
                    }
                }
                //If email exists show error message**
                if ($email_exist > 0 || $phone_exist > 0) {
                    //$email_exist= Message::success(__("email_exists"));
                    //$this->request->redirect("/");
                } else {
					$this->mongo_db = MangoDB::instance('default');
                    $otp       = text::random($type = 'alnum', $length = 5);
                    $signup_id = $siteusers->add_passenger($formvalues, $otp, $referred_passenger_id, $random_key);
                    $result = $this->mongo_db->find(MDB_PASSENGERS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
					$id = iterator_to_array($result);
					reset($id);
					$first_key = key($id);
                    $mobiledata = array(
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'passenger_id' => $first_key,
                    'creditcard_no' => $_POST['creditcard_no'],
                    'creditcard_cvv' => $_POST['creditcard_cvv'],
                    'expdatemonth' => $_POST['expdatemonth'],
                    'expdateyear' => $_POST['expdateyear'],
                    'card_type' => 'P',
                    'default' => (int)1,
                    
                    );
                    
                    $mobile_api_update = $mobile_api->add_passenger_carddata($mobiledata);
                    
                    
                }
                if ($signup_id == 1) {
                    $link              = URL_BASE . 'passengers/validateotp/?key=' . $random_key;
                    $mail              = "";
                    $replace_variables = array(
                        REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_USERNAME => '',
                        REPLACE_OTP => $otp,
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_ACTLINK => $link,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    );
                    if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
					}
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('otp_subject') . " - " . COMPANY_SITENAME;
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
                    //free sms url with the arguments
                    if (SMS == 1) {
                        $common_model    = Model::factory('commonmodel');
                        $message_details = $common_model->sms_message('1');
                        $to              = $_POST['phone'];
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                        //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                    }
                    // Message::success(__('sucessfull_registration').COMPANY_SITENAME);
                    //$this->request->redirect("users/profile");
                    // $this->request->redirect(URL_BASE);										
                } else {
                    Message::error($fail);
                }
            } else {
                //$this->request->redirect("find/search");
            }
        }
        exit;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }*/
    public function action_signup()
    {
        $siteusers      = Model::factory('passengers');
        $mobile_api      = Model::factory('mobileapi115');
        $activation_key = Commonfunction::admin_random_user_password_generator();
        $errors         = array();
        $id             = $this->session->get('id');
        $usrid          = $id; // isset($userid)?$userid:$id; 
        /**If session is set it should not allow login page through URL**/
        if (!isset($usrid)) {
            /*To get selected language at user side*/
            $lang_select = arr::get($_REQUEST, 'language');
            if ($_REQUEST) {
                /**Send entered values to model for validation**/
                $formvalues            = Arr::extract($_REQUEST, array(
                    'salutation',
                    'name',
                    'lastname',
                     'email',
                   // 'civil_number',
                    'phone',
                   // 'referral_code',
                    'address',
                    'creditcard_no',
                    'creditcard_cvv',
                    'expdatemonth',
                    'expdateyear',
                ));
                $passenger_validator = $siteusers->passenger_validation($formvalues);
                if($passenger_validator->check()){


                $random_key            = text::random($type = 'alnum', $length = 10);
                $userurl               = $random_key;
                $email_exist           = $siteusers->check_email_passengers($_POST['email'], COMPANY_CID);
                $phone_exist           = $siteusers->check_phone_passengers($_POST['phone'], COMPANY_CID);
                $referral_code         = ""; //$_POST['referral_code'];
                $referred_passenger_id = '';
                if ($referral_code != "") {
                    $validate_referral_code = $mobile_api->check_referral_code($referral_code);
                    //echo count($validate_referral_code);
                    if (is_array($validate_referral_code)) {
                        $referred_passenger_id = $validate_referral_code[0]['id'];
                    } else {
                        //$referred_passenger_id = '';
                        $email_exist = Message::success(__("invalid_referral_code"));
                        $this->request->redirect("/");
                    }
                }
                //If email exists show error message**
                if ($email_exist > 0 || $phone_exist > 0) {
                    echo 2;
                } else {
					$this->mongo_db = MangoDB::instance('default');
                    $otp       = text::random($type = 'alnum', $length = 5);
                    $signup_id = $siteusers->add_passenger($formvalues, $otp, $referred_passenger_id, $random_key);
                    $result = $this->mongo_db->find(MDB_PASSENGERS,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
					$id = iterator_to_array($result);
					reset($id);
					$first_key = key($id);
                    $mobiledata = array(
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'passenger_id' => $first_key,
                    'creditcard_no' => $_POST['creditcard_no'],
                    'creditcard_cvv' => $_POST['creditcard_cvv'],
                    'expdatemonth' => $_POST['expdatemonth'],
                    'expdateyear' => $_POST['expdateyear'],
                    'card_type' => 'P',
                    'default' => (int)1,
                    
                    );
                    
                    $mobile_api_update = $mobile_api->add_passenger_carddata($mobiledata);
                    
                        if ($signup_id == 1) {
                            $link              = URL_BASE . 'passengers/validateotp/?key=' . $random_key;
                            $mail              = "";
                            $replace_variables = array(
                                REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                                REPLACE_SITENAME => COMPANY_SITENAME,
                                REPLACE_USERNAME => '',
                                REPLACE_OTP => $otp,
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => CONTACT_EMAIL,
                                REPLACE_SITEURL => URL_BASE,
                                REPLACE_ACTLINK => $link,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            );
                            if ($this->lang != 'en') {
                                if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html')) {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html', $replace_variables);
                                } else {
                                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
                                }
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
                            }
                            $to                = $_POST['email'];
                            $from              = CONTACT_EMAIL;
                            $subject           = __('otp_subject') . " - " . COMPANY_SITENAME;
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
                            //free sms url with the arguments
                            if (SMS == 1) {
                                $common_model    = Model::factory('commonmodel');
                                $message_details = $common_model->sms_message('1');
                                $to              = $_POST['phone'];
                                $message         = $message_details['sms_description'];
                                $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                                
                            }
                         echo $signup_id;                                       
                        } else {
				echo 2;
		
                            //Message::error($fail);
                        }

                }
            }//end of validation
            else {
                                $errors = $passenger_validator->errors('errors');
              echo json_encode($errors);exit();
            }
                
            } else {
                echo 2;//2 FOR ERRORS
            }
        }
        exit;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    public function action_validateotp()
    {
        $siteusers = Model::factory('passengers');
        $api       = Model::factory('api');
        $errors    = array();
        $id        = $this->session->get('id');
        //$userid = $this->session->get('userid');
        $usrid     = $id; // isset($userid)?$userid:$id; 
        /**If session is set it should not allow login page through URL**/
        if (!isset($usrid)) {
            /*To get selected language at user side*/
            $passengers     = Model::factory('passengers');
            $activation_key = $_GET['key'];
            $get_details    = $passengers->passenger_detailsbyactivationkey($activation_key);
           // print_r($get_details);exit;
            if (count($get_details) > 0) {
                $view = View::factory(USERVIEW . 'otpvalidation')->bind('passengerdetails', $get_details);
            } else {
                Message::success(__('wrong_activation'));
                $this->request->redirect("/");
            }
            /**To Set Errors Null to avoid error if not set in view**/
            // ->bind('success',$success);
        } else {
            Message::success(__('already_login'));
            $this->request->redirect("/");
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    public function action_otpvalidation()
    {
        $passengers   = Model::factory('passengers');
        $api          = Model::factory('api');
        $potp         = $_POST['potp'];
        $email        = $_POST['email'];
        $key          = $_POST['key'];
        $validate_otp = $api->check_otp_expire($potp, $email, 'P', COMPANY_CID);
        //print_r($validate_otp);exit;
        if (count($validate_otp ) > 0) {
            $check_otp_expiry = $api->check_otp_expire($potp, $email, 'P', COMPANY_CID);
           // print_r( $check_otp_expiry);exit;
            if (TIMEZONE) {
                $current_time = convert_timezone('now', TIMEZONE);
                $current_date = explode(' ', $current_time);
                $start_time   = $current_date[0] . ' 00:00:01';
                $end_time     = $current_date[0] . ' 23:59:59';
                $date         = $current_date[0] . ' %';
            } else {
                $current_time = date('Y-m-d H:i:s');
                $start_time   = date('Y-m-d') . ' 00:00:01';
                $end_time     = date('Y-m-d') . ' 23:59:59';
                $date         = date('Y-m-d %');
            } //print_r($check_otp_expiry);
            $current_time =	date('Y-m-d H:i:s');
            $otpcreated_date = $check_otp_expiry['created_date'];
            $updated_date = $check_otp_expiry['updated_date'];
            $otp_expiry   = strtotime("+5 minutes", strtotime($otpcreated_date));
            if ($current_time <= $otp_expiry) {
                $result = $passengers->account_confirmation1($email, $key, COMPANY_CID);
                if ($result == 1) {
                    $passenger_details = $passengers->get_passenger_details($key);
                  //  print_r($passenger_details);exit;
                   // foreach ($passenger_details as $passenger_details_result) {
                        $id         = $passenger_details['_id'];
                        $name       = ucfirst($passenger_details['name']);
                        $email      = $passenger_details['email'];
                        $phone      = $passenger_details['phone'];
                        $password   = $passenger_details['org_password'];
                        $login_from = $passenger_details['login_from'];
                   // }
                    if ($login_from != 3) {
                        $replace_variables = array(
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => COMPANY_SITENAME,
                            REPLACE_USERNAME => $name,
                            REPLACE_MOBILE => $phone,
                            REPLACE_PASSWORD => $password,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => CONTACT_EMAIL,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
							REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                            REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP
                        );
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
                        $to                = $email;
                        $from              = CONTACT_EMAIL;
                        $subject           = __('activation_confirmation_subject') . " - " . COMPANY_SITENAME;
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
                    }
                    Message::success(__('activation_success') . COMPANY_SITENAME);
                    //Message::success(__('signup_success').'-'.COMPANY_SITENAME);
                    $message = array(
                        "message" => __('otp_expire'),
                        "status" => 1
                    );
                    echo json_encode($message);
                    exit;
                } else if ($result == 3) {
                    Message::success(__('otp_already_verified') . '-' . COMPANY_SITENAME);
                    $message = array(
                        "message" => __('otp_already_verified'),
                        "status" => 4
                    );
                    echo json_encode($message);
                    exit;
                }
           } else {
                $message = array(
                    "message" => __('otp_expire'),
                    "status" => 2
                );
                echo json_encode($message);
                exit;
            }
        } else {
            $message = array(
                "message" => __('invalid_otp'),
                "status" => 3
            );
            echo json_encode($message);
            exit;
        }
    }
    public function action_resendotp()
    {
        $passengers = Model::factory('passengers');
        $api        = Model::factory('api');
        $email      = $_POST['email'];
        //$key=$_POST['key'];	
        //$phone = $_POST['phone'];
        $random_key = text::random($type = 'alnum', $length = 10);
        $otp        = text::random($type = 'alnum', $length = 5);
        $otp_result = $passengers->update_otp($email, $random_key, $otp, COMPANY_CID);
        if ($otp_result == 3) {
            Message::success(__('otp_already_verified') . '-' . COMPANY_SITENAME);
            $message = array(
                "message" => __('otp_already_verified'),
                "status" => 2
            );
            echo json_encode($message);
            exit;
        } else if ($otp_result == 1) {
            $mail              = "";
            $link              = URL_BASE . 'passengers/validateotp/?key=' . $random_key;
            $replace_variables = array(
                REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                REPLACE_SITENAME => COMPANY_SITENAME,
                REPLACE_USERNAME => '',
                REPLACE_OTP => $otp,
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => CONTACT_EMAIL,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_ACTLINK => $link,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            );
            //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
			if ($this->lang != 'en') {
				if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html')) {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/otp_pass_website-' . $this->lang . '.html', $replace_variables);
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
				}
			} else {
				$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'otp_pass_website.html', $replace_variables);
			}
            $to                = $email;
            $from              = CONTACT_EMAIL;
            $subject           = __('otp_subject') . " - " . COMPANY_SITENAME;
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
            //free sms url with the arguments
            /*if(SMS == 1)
            {
            $common_model = Model::factory('commonmodel');									
            $message_details = $common_model->sms_message('1');
            $to = $phone;
            $message = $message_details['sms_description'];
            $message = str_replace("##SITE_NAME##",SITE_NAME,$message);
            $result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
            }*/
            Message::success(__('resend_otp') . '-' . COMPANY_SITENAME);
            $message = array(
                "message" => __('resend_otp'),
                "email" => $email,
                "status" => 1
            );
            echo json_encode($message);
            exit;
        } else {
            $message = array(
                "message" => __('otp_already_verified_try_again'),
                "status" => 3
            );
            echo json_encode($message);
            exit;
        }
    }
    public function action_signup_success()
    {
        Message::success(__('sucessfull_registration') . COMPANY_SITENAME);
        //$this->request->redirect("users/profile");
        $this->request->redirect(URL_BASE);
    }
    /*
     * Forget password Activation 
     */
    public function action_forget_pwd_activateaccount()
    {
		if(isset($_GET['key']) && !empty($_GET['key']) && isset($_COOKIE['PasswordExpire']) && ($_COOKIE['PasswordExpire'] == $_GET['key']) ) {
			$siteusers   = Model::factory('passengers');
			$email       = $_GET['email'];
			$random_key  = text::random($type = 'alnum', $length = 7);
			$email_exist = $siteusers->check_email_passengers($email, COMPANY_CID);
			
			if ($email_exist == 1) {
				$result = $siteusers->forgot_password_activation($email, $random_key);
				
				if ($result) {
					$mail              = "";
					
					$replace_variables = array(
						REPLACE_LOGO => EMAILTEMPLATELOGO,
						REPLACE_SITENAME => COMPANY_SITENAME,
						REPLACE_USERNAME => ucfirst($result['name']),
						REPLACE_MOBILE => $result['phone'],
						REPLACE_PASSWORD => $random_key,
						REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
						REPLACE_SITEEMAIL => CONTACT_EMAIL,
						REPLACE_SITEURL => URL_BASE,
						SITE_DESCRIPTION => $this->app_description,
						REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
						REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
					);
				   
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/user-forgotpassword-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/user-forgotpassword-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-forgotpassword.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-forgotpassword.html', $replace_variables);
					}
					$to                = $email;
					$from              = CONTACT_EMAIL;
					$subject           = __('forgot_password_subject') . " - " . COMPANY_SITENAME;
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
					
					Message::success(__('sucessful_forgot_password'));
					$this->request->redirect("/");
				} else {
					Message::error(__('fail_forgot_password'));
					$this->request->redirect("/");
					//echo $fail;
				}
			} else {
				$email_error = __("email_not_exist");
			}	
		} else {
			Message::error(__('invalid_link'));
			$this->request->redirect("/");
		}
        
    }
    /*
     * Account Activation 
     */
    public function action_activateaccount()
    {
        $siteusers                 = Model::factory('passengers');
        $key                       = mysql_real_escape_string($_GET['key']);
        $account_activation_status = $siteusers->account_confirmation($key);
        if ($account_activation_status == 1) {
            //print_r($checkkey);
            $passenger_details = $siteusers->get_passenger_details($key);
            foreach ($passenger_details as $result) {
                $id       = $result['id'];
                $name     = ucfirst($result['name']);
                $email    = $result['email'];
                $phone    = $result['phone'];
                $password = $result['org_password'];
            }
            $replace_variables = array(
                REPLACE_LOGO => EMAILTEMPLATELOGO,
                REPLACE_SITENAME => COMPANY_SITENAME,
                REPLACE_USERNAME => $name,
                REPLACE_MOBILE => $phone,
                REPLACE_PASSWORD => $password,
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => CONTACT_EMAIL,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
				REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP
            );
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
            $to                = $email;
            $from              = CONTACT_EMAIL;
            $subject           = __('activation_confirmation_subject') . " - " . COMPANY_SITENAME;
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
            Message::success(__('activation_success') . COMPANY_SITENAME);
            $this->request->redirect(URL_BASE);
        } else if ($account_activation_status == 2) {
            Message::success(__('activation_failure') . COMPANY_SITENAME);
            $this->request->redirect(URL_BASE);
        } else {
            Message::success(__('activation_code_wrong') . COMPANY_SITENAME);
            $this->request->redirect(URL_BASE);
        }
    }
    /**
     *****action_login()****
     *@ User Login
     */
    public function action_login()
    {
        $id            = $this->session->get('id'); //print_r($id);
        //$userid = $this->session->get('userid');
        $usrid         = $id; // isset($userid)?$userid:$id;
        /**To Set Errors Null to avoid error if not set in view**/
        $this->session = Session::instance();
        $siteusers     = Model::factory('passengers');
        /*
        $company_status = $siteusers->check_companystatus(COMPANY_CID);	
        
        if(($company_status[0]['company_status']=='D') || ($company_status[0]['company_status']=='T')){
        Message::error(__('login_deactive')); 
        }
        */
        /**Check if session set or not and if set it should not show login page**/
        if ($usrid == '') {
			$phone       = $_REQUEST['phone'];
            $phone_exist = $this->check_phone_exist($phone);
            $password    = $_REQUEST['password'];
            $remember    = isset($_REQUEST['remember']) ? $_REQUEST['remember'] : '';
            if ($phone_exist == 1) {//Maintain login for corporate account
                $result = $siteusers->login($phone, $password, $remember);
                if ($result == 1) {
					
                    $formvalues = Arr::extract($_REQUEST, array(
                        'c_location',
                        'd_location',
                        'n_passengers',
                        'timepicker1',
                        'driver_id',
                        'pickupdrop',
                        'waitingtime'
                    ));
                    $isbooking  = $_REQUEST['isbooking'];
                    if ($isbooking == '1') {
                        //$usrid =$this->session->get('id');
                        //$result=$siteusers->savebooking($formvalues,'5');
                        $smessage = __('save_booking_success');
                    } else {
                        $smessage = __('succesful_login_flash');
                    }
                    Message::success($smessage . COMPANY_SITENAME);
                    echo $result;
                    exit;
                } else {
                    echo $result;
                    exit;
                }
            } else {
                echo '2';
                exit;
            }
        } else {
            $this->request->redirect('passengers/dashboard');
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /* popup phone number update */
    public function action_phonenumber()
    {
        //$phone = $_POST['phone']; 
        $id            = $this->session->get('id');
        $usrid         = $id;
        $this->session = Session::instance();
        $siteusers     = Model::factory('passengers');
        if (isset($usrid)) {
            if ($_POST) {
                /**Send entered values to model for validation**/
                //  print_r($_POST); 
                $formvalues = Arr::extract($_POST, array(
                    'lphone',
                    'popup_creditcard_no',
                    'popup_creditcard_cvv',
                    'expdatemonth',
                    'expdateyear'
                ));
                // $signup_id=$siteusers->signup($formvalues,$random_key);
                $result     = $siteusers->update_phonenumber($formvalues, $usrid);
                if ($result == 1) {
                    //$smessage = __('succesful_login_flash');
                    //Message::success($smessage.COMPANY_SITENAME);	
                    echo $result;
                    //exit;
                } else {
                    echo 0;
                    //$this->request->redirect('passengers/dashboard');		
                }
                //$this->request->redirect('passengers/dashboard');
            }
            /*$phone = mysql_real_escape_string($_POST['phone']);  
            $result=$siteusers->update_phonenumber($phone,$usrid);
            if($result==1){		
            
            $smessage = __('succesful_login_flash');
            Message::success($smessage.COMPANY_SITENAME);
            echo $result;
            exit;
            
            }
            
            else
            {
            $this->request->redirect('passengers/dashboard');		
            
            }*/
            //$this->request->redirect('passengers/dashboard');
        }
        exit;
        // $this->template->meta_desc = $this->meta_description;
        //$this->template->meta_keywords = $this->meta_keywords;
        // $this->template->title =$this->title;		
    }
    public function action_check_popup_fields()
    {
        $siteusers        = Model::factory('passengers');
        $phone_exist      = $siteusers->check_phone_passengers($_GET['phone'], COMPANY_CID);
        $creditcard_no    = $_GET['creditcard_no'];
        $creditcard_cvv   = $_GET['creditcard_cvv'];
        $expdatemonth     = $_GET['expdatemonth'];
        $expdateyear      = $_GET['expdateyear'];
        $array            = array(
            'creditcard_no' => $creditcard_no,
            'creditcard_cvv' => $creditcard_cvv,
            'expdatemonth' => $expdatemonth,
            'expdateyear' => $expdateyear
        );
        $creditcard_valid = $siteusers->authorize_creditcard($array);
        //print_r($creditcard_valid);exit;
        echo $creditcard_valid . '~' . $phone_exist;
        exit;
    }
    public function action_fb_update_success()
    {
        $smessage = __('profile_updated_successfully');
        Message::success($smessage . COMPANY_SITENAME);
        $this->request->redirect('passengers/dashboard');
    }
    /* Pop up Email Check */
    public function check_email_exist()
    {
        //$_GET['email'];
        $siteusers   = Model::factory('passengers');
        $email_exist = $siteusers->check_email_passengers($_GET['email'], COMPANY_CID);
        return $email_exist;
    }
    public function check_phone_exist()
    {
        //$phone = $_GET['phone']; echo $phone; exit;
        $siteusers   = Model::factory('passengers');
        $phone_exist = $siteusers->check_phone_passengers($_GET['phone'], COMPANY_CID);
        return $phone_exist;
    }
    public function action_check_phone_exist()
    {
        //echo "test"; exit;
        //$_GET['email'];
        $siteusers   = Model::factory('passengers');
        $phone_exist = $siteusers->check_phone_passengers($_GET['phone'], COMPANY_CID);
        
    }
    public function action_check_signup_fields()
    {
        $siteusers              = Model::factory('passengers');
        //echo 'as'.COMPANY_CID;exit;
        $email_exist            = $siteusers->check_email_passengers($_GET['email'], COMPANY_CID);
        $phone_exist            = $siteusers->check_phone_passengers($_GET['phone'], COMPANY_CID);
        $creditcard_no          = $_GET['creditcard_no'];
        $creditcard_cvv         = $_GET['creditcard_cvv'];
        $expdatemonth           = $_GET['expdatemonth'];
        $expdateyear            = $_GET['expdateyear'];
        $referral_code          = $_GET['referral_code'];
        $array                  = array(
            'creditcard_no' => $creditcard_no,
            'creditcard_cvv' => $creditcard_cvv,
            'expdatemonth' => $expdatemonth,
            'expdateyear' => $expdateyear
        );
        /*$civilres = $siteusers->civilid_isValid($_GET['civil_id']);
	$civildup = $siteusers->civilid_duplicate($_GET['civil_id']);*/
		
		
        //$creditcard_valid = $siteusers->authorize_creditcard($array);
        $creditcard_valid       = $siteusers->isVAlidCreditCard($creditcard_no, "", true);
        $validate_referral_code = 1;
        /*if($referral_code != "")
        {
        $validate_referral_code = $siteusers->check_referral_code($referral_code);
        }*/
        //echo $email_exist . '~' . $creditcard_valid . '~' . $phone_exist . '~' . $civilres . '~' . $civildup;
        echo $email_exist . '~' . $creditcard_valid . '~' . $phone_exist;
        exit;
    }
    public function action_check_passenger_email_exist()
    {
        //$_GET['email'];
        $siteusers   = Model::factory('passengers');
        $email_exist = $siteusers->check_email_passengers($_GET['email'], COMPANY_CID);
        echo $email_exist;
        exit;
    }
    public function action_check_email_exist()
    {
        //$_GET['email'];
        $siteusers   = Model::factory('passengers');
        //echo COMPANY_CID;exit;
        $email_exist = $siteusers->check_email_passengers($_GET['email'], COMPANY_CID);
        echo $email_exist;
        exit;
    }
    public function action_profile()
    {
        $siteusers = Model::factory('passengers');
        $errors    = array();
        $this->is_login_status();
        //$this->is_login(); 		
        $passenger_id = $this->session->get('id');
        $id           = $passenger_id;
        $name         = $this->session->get('name');
        $this->request->redirect('find/search');
        /*$view= View::factory(USERVIEW.'editprofile')
        ->bind('name', $name)
        ->bind('id', $passenger_id);
        $this->template->content = $view;*/
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**
     * ****action_logout()****
     * @return auth logout action
     */
    public function action_logout()
    {
		$passengers        = Model::factory('passengers');
        $login_id     = $this->session->get("id");
        //$result_login = DB::update(PASSENGERS)->set($sql_query)->where('id', '=', $login_id)->execute();
		$result_login = $passengers->logout_pass($login_id);
        //destroy session while logout
        $this->session->destroy();
        // Sign out the user and redirects to login page
        //Auth::instance()->logout();	
        Message::success(__('succesful_logout_flash') . COMPANY_SITENAME);
        $this->session = Session::instance();
        $this->request->redirect("/");
    }
    /**
     * ****action_forgot_password()****
     * @return forgot_password action
     */
    public function action_forgotpassword()
    {
        $passengers        = Model::factory('passengers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors            = array();
        $view              = View::factory(USERVIEW . 'forgot_password')->bind('validator', $validator)->bind('errors', $errors)->bind('success', $success)->bind('email_error', $email_error);
        /**To generate random key if user enter email at forgot password**/
        $random_key        = text::random($type = 'alnum', $length = 7);
        /**To get the form submit button name**/
        $change_pwd_submit = arr::get($_REQUEST, 'submit_forgot_password');
        if ($change_pwd_submit && Validation::factory($_POST)) {
            $validator = $passengers->validate_forgotpwd(arr::extract($_POST, array(
                'email'
            )));
            if ($validator->check()) {
                $email_exist = $passengers->check_email_passengers($_POST['email'], COMPANY_CID);
                if ($email_exist == 1) {
					$expirekey        = text::random($type = 'alnum', $length = 5);
					setcookie("PasswordExpire", $expirekey, time()+3600);
                    $result            = $passengers->check_passengers_det($_POST['email']);
                    $mail              = "";
                    $link              = URL_BASE . 'passengers/forget_pwd_activateaccount/?email=' . $_POST['email']. '&key='.$expirekey;
                    $replace_variables = array(
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_NAME => ucfirst($result['name']),
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_ACTLINK => $link,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    );
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'customer_forget_pwd_activation.html', $replace_variables);
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/customer_forget_pwd_activation-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/customer_forget_pwd_activation-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'customer_forget_pwd_activation.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'customer_forget_pwd_activation.html', $replace_variables);
					}
					
                    //echo CONTACT_EMAIL;
                    //print_r($message);
                    //exit;
                    $to                = $_POST['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('forget_pwd_activation_subject');
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
					
                    //$mail=array("to" => $_POST['email'],"from"=>CONTACT_EMAIL,"subject"=>__('activation_subject')." - ".COMPANY_SITENAME,"message"=>$message);									
                    //$emailstatus=$this->email_send($mail,'smtp');								
                    Message::success(__('sucessfull_forget_pwd') . COMPANY_SITENAME);
                    //$this->request->redirect("users/profile");
                    $this->request->redirect(URL_BASE);
                    /* $result=$passengers->forgot_password($validator,$_POST,$random_key);
                    if($result)
                    { 
                    
                    
                    $mail="";		
                    //$forgotpassword=$this->emailtemplate->get_template_content(FORGOT_PASSWORD);
                    //$subject=$forgotpassword[0]['email_subject'];
                    //$content=$forgotpassword[0]['email_content'];
                    $replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>COMPANY_SITENAME,REPLACE_USERNAME=>ucfirst($result[0]['name']),REPLACE_MOBILE=>$result[0]['phone'],REPLACE_PASSWORD=>$random_key,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>CONTACT_EMAIL,REPLACE_SITEURL=>URL_BASE,SITE_DESCRIPTION=>$this->app_description);
                    $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'user-forgotpassword.html',$replace_variables);
                    
                    $to = $_POST['email'];
                    $from = CONTACT_EMAIL;
                    $subject = __('forgot_password_subject')." - ".COMPANY_SITENAME;	
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
                    
                    
                    
                    //free sms url with the arguments
                    if(SMS == 1)
                    {
                    $common_model = Model::factory('commonmodel');	
                    $message_details = $common_model->sms_message('2');
                    $to = $result[0]['phone'];
                    $message = $message_details['sms_description'];
                    $message = str_replace("##PASSWORD##",$random_key,$message);
                    
                    $result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                    }
                    
                    
                    Message::success(__('sucessful_forgot_password'));
                    $this->request->redirect("/");
                    
                    }	
                    else
                    {
                    echo $fail;
                    }*/
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
    /** Save Customer Booking **/
    public function action_savebooking()
    {
        $this->session           = Session::instance();
        $id                      = $this->session->get('id');
        $usertype                = $this->session->get('usertype');
        $passengerlog_id         = $this->session->get('passengerlog_id'); //echo $passengerlog_id;
        $current_location        = $this->session->get('current_location');
        //$userid = $this->session->get('userid');
        $usrid                   = $id; // isset($userid)?$userid:$id;
        /**To Set Errors Null to avoid error if not set in view**/
        $passengers              = Model::factory('passengers');
        $commonmodel             = Model::factory('commonmodel');
        $passenger_phone_details = $passengers->get_passenger_phone($usrid);
        if (count($passenger_phone_details) > 0) {
            $passenger_phone = $passenger_phone_details[0]['phone'];
        }
        if ($_GET) {
            //$current_time  = date('h:i:s A');
            $current_datetime = convert_timezone('now', TIMEZONE);
            $currentDate      = strtotime($current_datetime);
            $current_time     = date("h:i:s A", $currentDate);
            $current_str      = strtotime($current_time);
            $pick_up          = $_GET['timepicker1'];
            $pickup_str       = strtotime($pick_up);
            /*if ( $current_str > $pickup_str ) {
            echo '<span id="pickuptime_error" style="color:red">'.__('pickuptime_error').'</span>';
            exit;
            }
            else {*/
            /**Check user by sending values to model **/
            $formvalues       = Arr::extract($_GET, array(
                'c_location',
                'd_location',
                'n_passengers',
                'timepicker1',
                'driver_id',
                'pickupdrop',
                'waitingtime',
                'taxi_id',
                'pass_logid',
                'driver_away_in_km',
                'notes'
            ));
            $driver_id        = mysql_real_escape_string($_GET['driver_id']);
            $driver_model     = Model::factory('driver');
            $driver_details   = $driver_model->get_driver_profile_details($driver_id);
            $name             = $driver_details[0]['name'];
            $phone            = $driver_details[0]['phone'];
            $device_id        = $driver_details[0]['device_id'];
            $device_token     = $driver_details[0]['device_token'];
            $device_type      = $driver_details[0]['device_type'];
            $pickup           = $formvalues['c_location'];
            $drop             = $formvalues['d_location'];
            $no_of_passengers = $formvalues['n_passengers'];
            $pickup_time      = $formvalues['timepicker1'];
            $roundtrip        = $formvalues['pickupdrop'];
            $notes            = mysql_real_escape_string($formvalues['notes']);
            $travel_status    = 0;
            if ($current_location != "") {
                $result = $passengers->updatebooking($formvalues, $usrid, $passengerlog_id, $travel_status);
            } else {
                //echo 'save';
                $result = $passengers->savebooking($formvalues, $usrid, $travel_status);
                /*$res[]=$passengers->savebooking($formvalues,$usrid);
                $result = $res[0][0]; 
                $passenger_logid = $res[0][1][0];*/
            }
            if ($usertype == 'passengers') {
                //echo $current_location;
                if ($result['result'] == 1) {
                    //$passengerid=$passengers->get_passenger_id();
                    //$passenger_logid = mysql_insert_id();
                    $passenger_logid    = $result['pass_logid'];
                    //$passenger_logid = $passengerid[0]['id'];
                    $api                = Model::factory('api');
                    $config_array       = $api->select_site_settings(array(
                        'notification_settings'
                    ), SITEINFO);
                    $bookinglog_details = $api->get_passengerlog_notify($passenger_logid);
                    if (count($config_array) > 0) {
                        $notification_time = $config_array[0]['notification_settings'];
                    } else {
                        $notification_time = 60;
                    }
                    $time              = date('H:i:s', strtotime($pickup_time));
                    $city_id           = $bookinglog_details[0]['search_city'];
                    $city_query        = "select city_name from " . CITY . " where " . CITY . ".city_id='$city_id'";
                    $city_result       = Db::query(Database::SELECT, $city_query)->execute()->as_array();
                    $cityname          = $city_result[0]['city_name'];
                    $driver_away_in_km = round($formvalues['driver_away_in_km'], 2);
                    $booking_details   = array(
                        "approx_fare" => $bookinglog_details[0]['approx_fare'],
                        "drop_latitude" => $bookinglog_details[0]['drop_latitude'],
                        "bookedby" => BOOK_BY_PASSENGER,
                        "pickup" => $pickup,
                        "drop" => $drop,
                        "pickup_longitude" => $bookinglog_details[0]['pickup_longitude'],
                        "approx_distance" => $bookinglog_details[0]['approx_distance'],
                        "no_of_passengers" => $no_of_passengers,
                        "sub_logid" => $bookinglog_details[0]['sub_logid'],
                        "passenger_phone" => $passenger_phone,
                        "taxi_id" => $bookinglog_details[0]['taxi_id'],
                        "distance_away" => $driver_away_in_km,
                        "passenger_name" => $bookinglog_details[0]['passenger_name'],
                        "passenger_image" => $bookinglog_details[0]['passenger_image'],
                        "driver_id" => $driver_id,
                        "passenger_id" => $bookinglog_details[0]['passengers_id'],
                        "roundtrip" => $roundtrip,
                        "drop_longitude" => $bookinglog_details[0]['drop_longitude'],
                        "cityname" => $cityname,
                        "pickup_latitude" => $bookinglog_details[0]['pickup_latitude'],
                        "pickup_time" => $time
                    );
                    // Passenger Details 
                    $passenger_details = $api->passenger_profile($bookinglog_details[0]['passengers_id']);
                    $passenger_name    = $profile_image = "";
                    if (count($passenger_details) > 0) {
                        $passenger_name = ucfirst($passenger_details[0]['salutation']) . ' ' . ucfirst($passenger_details[0]['name']);
                        $profile_image  = $passenger_details[0]['profile_image'];
                    }
                    $booking_details['passenger_name'] = $passenger_name;
                    if ($profile_image != '') {
                        $booking_details['profile_image'] = $profile_image;
                    } else {
                        $booking_details['profile_image'] = 'noimage.jpg';
                    }
                    $taxi_speed     = $api->get_taxi_speed($formvalues['taxi_id']);
                    $estimated_time = $api->estimated_time($driver_away_in_km, $taxi_speed);
                    $msg            = array(
                        "message" => 'You have new trip request.Kindly response the request',
                        "status" => 1,
                        "Passenger_logid" => $passenger_logid,
                        "booking_details" => $booking_details,
                        "notification_time" => $notification_time,
                        "estimated_time" => $estimated_time,
                        "notes" => $notes
                    );
                    //print_r($msg);exit;
                    Message::success(__('save_booking_success'));
                    //echo __('save_booking_success');
                    //$this->request->redirect('/passengers/dashboard');AIzaSyAlFdMOAPiPDdcGdJtrxPmdRNiyWPeAvdQ
                    //---------------------------------- ANDROID ----------------------------------//
                    //$apikey = "AIzaSyAlFdMOAPiPDdcGdJtrxPmdRNiyWPeAvdQ"; //first for taximobility
                    $driver_android_api = $commonmodel->select_site_settings('driver_android_key', SITEINFO);
                    $registrationIDs    = array(
                        $device_token
                    );
                    // Message to be sent
                    if (!empty($registrationIDs)) {
                        // Set POST variables
                        $url     = 'https://android.googleapis.com/gcm/send';
                        //print_r($registrationIDs);exit;
                        $fields  = array(
                            'registration_ids' => $registrationIDs,
                            'data' => array(
                                "message" => $msg,
                                "title" => SITE_NAME
                            )
                        );
                        $headers = array(
                            'Authorization: key=' . $driver_android_api,
                            'Content-Type: application/json'
                        );
                        // Open connection
                        $ch      = curl_init();
                        // Set the url, number of POST vars, POST data
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                        // Execute post
                        $result = curl_exec($ch);
                        echo $driver_android_api;
                        echo $result;
                        exit;
                        // Close connection
                        curl_close($ch);
                        // echo "<script> document.location.href='".URL_BASE."passengers/dashboard';</script>";
                        exit;
                    }
                } else if ($result == 2) {
                    //Message::success(__('driver_already_booked'));
                    echo __('driver_already_booked');
                    exit;
                } else {
                    echo __('try_again');
                    exit;
                }
            } else {
                Message::success(__('driver_booking_error'));
                echo "<script> document.location.href='" . URL_BASE . "advance-search.html';</script>";
                exit;
            }
        }
        //}
    }
    /*** Passenger Log **/
    public function action_passengerlog()
    {
        /*$this->is_login(); 
        $this->is_login_status(); 
        $passengers = Model::factory('passengers');
        $userid =$this->session->get('id'); 
        $passengers = $passengers->get_passenger_log_details($userid,1,'A');
        $view= View::factory(USERVIEW.'passengerlog')
        ->bind('passengerslogs', $passengers);
        //print_r($user);exit;
        $this->template->meta_desc = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title =$this->title;
        $this->template->content = $view;		*/
    }
    /** Rate Driver **/
    public function action_rating()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers  = Model::factory('passengers');
        $userid      = $this->session->get('id');
        $ratevalue   = $_GET['value'];
        $driver_id   = $_GET['driver_id'];
        $log_id      = $_GET['log_id'];
        $save_result = $passengers->update_rating($ratevalue, $userid, $driver_id, $log_id);
        if (is_array($save_result)) {
            if ($save_result['rating'] != 0) {
                $output = "";
                for ($k = 1; $k <= $save_result['rating']; $k++) {
                    $output .= '<div class="rating_enb" id="' . $k . '">&nbsp;</div>';
                }
                $output .= '<div class="rating_value">' . $save_result['rating'] . ' / 5</div>';
            }
        } else {
            $output = "<div class='rating_message'>" . __('rating_already') . "</div>";
        }
        echo $output;
        exit;
    }
    /** Get Driver Rating **/
    public function action_getrating()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers = Model::factory('passengers');
        $userid     = $this->session->get('id');
        $driver_id  = $_GET['driver_id'];
        $log_id     = $_GET['log_id'];
        $get_result = $passengers->get_rating($userid, $driver_id, $log_id);
        //print_r($get_result);
         $output = "";
        if (count($get_result) > 0) {
            if ($get_result['rating'] != 0) {
               
                for ($k = 1; $k <= $get_result['rating']; $k++) {
                    $output .= '<div class="rating_enb" id="' . $k . '">&nbsp;</div>';
                }
                $output .= '<div class="rating_value">' . $get_result['rating'] . ' / 5</div>';
            } else {
                //$output = 0;
                $output = "";
                $k      = 1;
                for ($i = 5; $i >= 1; $i--) {
                    $output .= '<div class="rating_dis" id="' . $k . '" onclick="saverate(' . $k . ')">&nbsp;</div>';
                    $k++;
                }
                $output .= '<div class="rating_value">' . $get_result['rating'] . ' / 5</div>';
            }
        }
        echo $output;
        exit;
    }
    /*** Action Comments ***/
    public function action_comments()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers = Model::factory('passengers');
        $userid     = $this->session->get('id');
        $driver_id  = mysql_real_escape_string($_GET['driver_id']);
        $log_id     = mysql_real_escape_string($_GET['log_id']);
        $comments   = mysql_real_escape_string($_GET['comments']);
        $get_result = $passengers->savecomments($userid, $driver_id, $log_id, $comments);
        if ($get_result == 1) {
            Message::success(__('comments_update'));
            exit;
        } else {
            Message::success(__('comments_already'));
            exit;
        }
    }
    public function action_favourite_trip()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $userid                           = $this->session->get('id');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles                       = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                      = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //all Completed Status with transaction
        $passengers_all_total_compl_trans = $passengers->get_total_passenger_favourite_trip($userid, 1, 'A', '1', COMPANY_CID);
        //print_r($passengers_all_total_compl_trans[0]['co_nt']);
        //pagination loads here
        $page_no                          = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        $pag_data                      = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $passengers_all_total_compl_trans[0]['co_nt'],
            'view' => 'pagination/punbb'
        ));
        //all Completed Status with transaction
        $passengers_all_compl_trans    = $passengers->get_passenger_favourite_trip($userid, 1, 'A', '1', $offset, REC_PER_PAGE);
        $view                          = View::factory(USERVIEW . 'favourite_trip')->bind('passengers_all_compl_trans', $passengers_all_compl_trans)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('offset', $offset)->bind('userid', $userid);
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    public function action_markfavourite()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers  = Model::factory('passengers');
        $userid      = $this->session->get('id');
        $log_id      = mysql_real_escape_string($_GET['log_id']);
        $mark_status = mysql_real_escape_string($_GET['mark_status']);
        $get_result  = $passengers->savefavourite($log_id, $mark_status);
        if ($mark_status == 'N') {
            Message::success(__('changesmodified'));
            exit;
        } else {
            Message::success(__('changesmodified'));
            exit;
        }
    }
    public function action_ajaxforgotpassword()
    {
        $siteusers   = Model::factory('siteusers');
        $errors      = array();
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
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => COMPANY_SITENAME,
                    REPLACE_USERNAME => ucfirst($result[0]['name']),
                    REPLACE_EMAIL => $_POST['email'],
                    REPLACE_PASSWORD => $random_key,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => CONTACT_EMAIL,
                    REPLACE_SITEURL => URL_BASE,
                    SITE_DESCRIPTION => $this->app_description,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/mail_template-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/mail_template-' . $this->lang . '.html', $replace_variables, $content);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'mail_template.html', $replace_variables, $content);
				}
                $to                = $_POST['email'];
                $from              = CONTACT_EMAIL;
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
                // $mail=array("to" => $_POST['email'],"from"=>CONTACT_EMAIL,"subject"=>$subject,"message"=>$message);
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
     *****action_editprofile()****
     * @People edit profile
     */
    /*public function action_editprofile()
    { 
    $passengers = Model::factory('passengers');
    //To Set Errors Null to avoid error if not set in view           
    $errors = array();
    
    //Check Whether the user is logged in
    $this->is_login(); $this->is_login_status();
    
    //To get current logged user id from session
    $userid =$this->session->get('id'); 
    //$usrid = $this->session->get('userid');
    
    $id =$userid; // isset($userid)?$userid:$usrid;
    
    //$submit_profile =arr::get($_REQUEST,'submit_user_profile');
    $submit_profile_form2 =arr::get($_REQUEST,'signup');
    
    // Dashboard Style & Scripts
    $dashstyles = array(CSSPATH.'dashboard/bootstrap-responsive.css' =>'screen',
    CSSPATH.'dashboard/charisma-app.css' =>'screen',
    CSSPATH.'dashboard/jquery-ui-1.8.21.custom.css' =>'screen',
    CSSPATH.'dashboard/chosen.css' =>'screen',
    CSSPATH.'dashboard/uniform.default.css' =>'screen',
    CSSPATH.'dashboard/jquery.noty.css' =>'screen',
    CSSPATH.'dashboard/noty_theme_default.css' =>'screen',
    CSSPATH.'dashboard/jquery.iphone.toggle.css' =>'screen',
    CSSPATH.'dashboard/opa-icons.css' =>'screen');
    
    $dashscripts = array(SCRIPTPATH.'dashboard/jquery-ui-1.8.21.custom.min.js',
    SCRIPTPATH.'dashboard/bootstrap-transition.js',
    SCRIPTPATH.'dashboard/bootstrap-alert.js',
    SCRIPTPATH.'dashboard/bootstrap-modal.js',
    SCRIPTPATH.'dashboard/bootstrap-dropdown.js',
    SCRIPTPATH.'dashboard/bootstrap-scrollspy.js',
    SCRIPTPATH.'dashboard/bootstrap-tab.js',
    SCRIPTPATH.'dashboard/bootstrap-tooltip.js',
    SCRIPTPATH.'dashboard/bootstrap-popover.js',
    SCRIPTPATH.'dashboard/bootstrap-button.js',
    SCRIPTPATH.'dashboard/bootstrap-collapse.js',
    SCRIPTPATH.'dashboard/bootstrap-tour.js',
    SCRIPTPATH.'dashboard/jquery.cookie.js',
    SCRIPTPATH.'dashboard/jquery.dataTables.min.js',
    SCRIPTPATH.'dashboard/jquery.chosen.min.js',
    SCRIPTPATH.'dashboard/jquery.noty.js',
    SCRIPTPATH.'dashboard/jquery.iphone.toggle.js',
    SCRIPTPATH.'dashboard/jquery.history.js',
    SCRIPTPATH.'dashboard/charisma.js',
    SCRIPTPATH.'highcharts.js',
    );	
    
    
    $_POST= Arr::map('trim', $this->request->post());    
    if ($submit_profile_form2 && Validation::factory($_POST) ) 
    {	
    if(($_POST['creditcard_no'] == $_POST['valid_creditcard_no']))
    {
    $_POST['creditcard_no'] = $_POST['org_creditcard_no'];
    }
    
    if(($_POST['creditcard_cvv'] == $_POST['valid_creditcard_cvv']))
    {
    $_POST['creditcard_cvv'] = $_POST['org_creditcard_cvv'];
    }
    
    //Send entered values to model for validation     
    $validator = $passengers->validate_passengers_profilesettings(arr::extract($_POST,array('name','phone','address','creditcard_no','creditcard_cvv','expdatemonth','expdateyear')));
    
    if(!empty($_FILES['profile_picture']['name'])){
    $image_name = uniqid().$_FILES['profile_picture']['name'];
    $thumb_image_name = 'thumb_'.$image_name;
    $edit_image_name = 'edit_'.$image_name;
    
    $image_type=explode('.',$image_name);
    $image_type=end($image_type);
    //$image_name=url::title($image_name).'.'.$image_type;
    $filename = Upload::save($_FILES['profile_picture'],$image_name,DOCROOT.PASS_IMG_IMGPATH);								
    //Image resize and crop for thumb image
    //print_r($filename);exit;
    $logo_image = Image::factory($filename);
    $path11=DOCROOT.PASS_IMG_IMGPATH;
    $path1=$image_name;
    Commonfunction::imageresize($logo_image,PASS_IMG_WIDTH, PASS_IMG_HEIGHT,$path11,$image_name,90);								
    
    $path12=$thumb_image_name;
    Commonfunction::imageresize($logo_image,PASS_THUMBIMG_WIDTH1, PASS_THUMBIMG_HEIGHT1,$path11,$thumb_image_name,90);
    
    
    $path12=$edit_image_name;
    Commonfunction::imageresize($logo_image,PASS_THUMBIMG_WIDTH1, PASS_THUMBIMG_HEIGHT1,$path11,$edit_image_name,90);
    
    
    if ($image_type == 'jpeg' || $image_type == 'jpg' )
    {
    $base_image = imagecreatefromjpeg($path11.$edit_image_name);
    
    $width = 100;
    $height = 18;
    
    $top_image = imagecreatefrompng(URL_BASE."public/images/edit.png");
    $merged_image = $path11.$edit_image_name;
    
    
    imagesavealpha($top_image, true);
    imagealphablending($top_image, true);
    
    imagecopy($base_image, $top_image, 0, 82, 0, 0, $width, $height);
    imagejpeg($base_image, $merged_image);
    
    
    }
    if ($image_type == 'png')
    {
    $base_image = imagecreatefromjpeg($path11.$edit_image_name);
    
    $width = 100;
    $height = 18;
    
    $top_image = imagecreatefrompng(URL_BASE."public/images/edit.png");
    $merged_image = $path11.$edit_image_name;
    
    imagesavealpha($top_image, true);
    imagealphablending($top_image, true);
    
    imagecopy($base_image, $top_image, 0, 82, 0, 0, $width, $height);
    imagepng($base_image, $merged_image);
    
    }
    
    $status = $passengers->update_passengerimage($path1,$id);
    //unlink($filename);
    }
    
    $creditcard_no = $_POST['creditcard_no'];
    $creditcard_cvv = $_POST['creditcard_cvv'];
    $expdatemonth = $_POST['expdatemonth'];
    $expdateyear = $_POST['expdateyear'];
    $array = array('creditcard_no'=>$creditcard_no,'creditcard_cvv'=>$creditcard_cvv,'expdatemonth'=>$expdatemonth,'expdateyear'=>$expdateyear); 
    $creditcard_valid = $passengers->authorize_creditcard($array);
    
    $phone_exist = $passengers->check_passenger_phone_update($_POST['phone'],$id);
    //If email exists show error message**
    if($phone_exist > 0)			
    {	
    $phone_exist= __("phone_exists");
    
    }				
    else
    {
    if ($validator->check()) 
    {  
    $month = date('m');
    $year = date('Y');
    $cur_date = $year.$month;
    $sel_date = $expdateyear.$expdatemonth;
    if($cur_date >= $sel_date)
    {
    $date_invalid = __("date_invalid");
    }    
    else if($creditcard_valid == -1)			
    {	
    $creditcard_invalid = __("creditcard_invalid");
    
    }
    else
    {						
    $result=$passengers->update_user_settings($validator,$_POST,$id);
    
    Message::success(__('user_success_update'));
    $this->request->redirect('/passengers/editprofile');
    }
    
    }
    else 
    {
    //validation failed, get errors					
    $errors = $validator->errors('errors');
    
    print_r($errors); 					
    }
    }
    
    }    
    
    $passengers = $passengers->get_passenger_profile_details($id);
    $view= View::factory(USERVIEW.'editprofile')
    ->bind('validator', $validator)
    ->bind('errors', $errors)
    ->bind('user', $passengers)
    ->bind('email_exists', $email_exists)
    ->bind('phone_exist',$phone_exist)
    ->bind('creditcard_valid',$creditcard_invalid)
    ->bind('date_invalid',$date_invalid)
    ->bind('dashstyles',$dashstyles)
    ->bind('dashscripts',$dashscripts)
    ->bind('data',$_POST);
    //print_r($user);exit;
    $this->template->meta_desc = $this->meta_description;
    $this->template->meta_keywords = $this->meta_keywords;
    $this->template->title =$this->title;
    $this->template->content = $view;
    }*/
    public function action_editprofile()
    {
        $passengers = Model::factory('passengers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors     = array();
        /**Check Whether the user is logged in**/
        $this->is_login();
        $this->is_login_status();
        /**To get current logged user id from session**/
        $userid               = $this->session->get('id');
        //$usrid = $this->session->get('userid');
        $id                   = $userid; // isset($userid)?$userid:$usrid;
        //$submit_profile =arr::get($_REQUEST,'submit_user_profile');
        $submit_profile_form2 = arr::get($_REQUEST, 'signup');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles           = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts          = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $_POST                = Arr::map('trim', $this->request->post());
        if ($submit_profile_form2 && Validation::factory($_POST)) {
            /**Send entered values to model for validation**/
            $validator = $passengers->validate_passengers_profilesettings(arr::extract($_POST, array(
                'name',
                'phone',
                'address',
				'civilid',
                'creditcard_no',
                'creditcard_cvv',
                'expdatemonth',
                'expdateyear'
            )));
            if (!empty($_FILES['profile_picture']['name'])) {
                $img_name   = uniqid() . $_FILES['profile_picture']['name'];
                $image_type = explode('.', $img_name);
                $image_type = end($image_type);
                if ($image_type == 'jpeg' || $image_type == 'jpg' || $image_type == 'png' || $image_type == 'gif') {
                    $image_name       = uniqid() . $_FILES['profile_picture']['name'];
                    $thumb_image_name = 'thumb_' . $image_name;
                    $image_type       = explode('.', $image_name);
                    $image_type       = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename         = Upload::save($_FILES['profile_picture'], $image_name, DOCROOT . PASS_IMG_IMGPATH);
                    //Image resize and crop for thumb image
                    
                    $logo_image       = Image::factory($filename);
                    $path11           = DOCROOT . PASS_IMG_IMGPATH;
                    $path1            = $image_name;
                    Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
                    $path12 = $thumb_image_name;
                    Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                    $status = $passengers->update_passengerimage($path1, $id);
                    //unlink($filename);
                } else {
                    Message::error(__('passenger_image_message'));
                    $this->request->redirect('/passengers/editprofile');
                }
            }
            /** CIVIL ID IMAGES ** /
            $uploaddir = PASS_CIVIL_IMGPATH;
			if(!file_exists(DOCROOT.$uploaddir)) {
				mkdir(DOCROOT.$uploaddir,0777,true);
			}
			$civilid_front     = '';
			$civilid_back      = '';
			$civil_front_thumb = '';
			$civil_back_thumb  = '';
			$path              = DOCROOT . PASS_CIVIL_IMGPATH;
			
			$f_ext   = uniqid() . $_FILES['civilid_front']['name'];
			$f_ext_type = explode('.', $f_ext);
			$f_ext_type = end($f_ext_type);
				
			if(!empty($_FILES['civilid_front']) && $f_ext_type == 'jpeg' || $f_ext_type == 'jpg' || $f_ext_type == 'png' || $f_ext_type == 'gif') {
				$front_name       = uniqid() . str_replace(' ','_',$_FILES['civilid_front']['name']);
				$civilid_front    = Upload::save($_FILES['civilid_front'], $front_name, DOCROOT . PASS_CIVIL_IMGPATH);
				
				//$civilid_front = $this->_save_image($_FILES['civilid_front'],DOCROOT.$uploaddir);
				if(!empty($civilid_front)) {
					$civil_front_thumb = 'thumb_' . $front_name;
					$front_path        = DOCROOT . PASS_CIVIL_IMGPATH . $civilid_front;
					
					$front_image       = Image::factory($civilid_front);
					Commonfunction::imageresize($front_image,CIVIL_THUMBIMG_WIDTH, CIVIL_THUMBIMG_HEIGHT,$path,$civil_front_thumb,90);
					$status = $passengers->update_passengercivil($front_name, $id,'civilid_front');
				}
			} else {
				Message::error(__('passenger_image_message'));
				$this->request->redirect('/passengers/editprofile');
			}
			
			$b_ext   = uniqid() . $_FILES['civilid_back']['name'];
			$b_ext_type = explode('.', $b_ext);
			$b_ext_type = end($b_ext_type);
			
			if(!empty($_FILES['civilid_back']) && $b_ext_type == 'jpeg' || $b_ext_type == 'jpg' || $b_ext_type == 'png' || $b_ext_type == 'gif') {
				$back_name       = uniqid() . str_replace(' ','_',$_FILES['civilid_back']['name']);
				$civilid_back         = Upload::save($_FILES['civilid_back'], $back_name, DOCROOT . PASS_CIVIL_IMGPATH);
				
				//$civilid_back  = $this->_save_image($_FILES['civilid_back'],DOCROOT.$uploaddir);
				if(!empty($civilid_back)) {
					$civil_back_thumb  = 'thumb_' . $back_name;
					$back_path         = DOCROOT . PASS_CIVIL_IMGPATH . $civilid_back;
					$back_image        = Image::factory($civilid_back);
					Commonfunction::imageresize($back_image,CIVIL_THUMBIMG_WIDTH, CIVIL_THUMBIMG_HEIGHT,$path,$civil_back_thumb,90);
					$status = $passengers->update_passengercivil($back_name, $id,'civilid_back');
				}
			} else {
				Message::error(__('passenger_image_message'));
				$this->request->redirect('/passengers/editprofile');
			}
            /** CIVIL ID IMAGES **/
            
            $phone_exist = $passengers->check_passenger_phone_update($_POST['phone'], $id);
            //If email exists show error message**
            if ($phone_exist > 0) {
                $phone_exist = __("phone_exists");
            } else {
				if ($validator->check()) {
					
                    $result = $passengers->update_user_settings($validator, $_POST, $id);
                    Message::success(__('user_success_update'));
                    $this->request->redirect('/passengers/editprofile');
                } else {
					
					 //validation failed, get errors					
                    $errors = $validator->errors('errors');
                   
                   
                }
            }
        }
        $passengers                    = $passengers->get_passenger_profile_details($id);
       
        $view                          = View::factory(USERVIEW . 'editprofile')->bind('validator', $validator)->bind('errors', $errors)->bind('user', $passengers)->bind('email_exists', $email_exists)->bind('phone_exist', $phone_exist)->bind('creditcard_valid', $creditcard_invalid)->bind('date_invalid', $date_invalid)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('data', $_POST);
        //print_r($user);exit;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    /**
     *****action_change_password()****
     *@People change password
     */
    public function action_changepassword()
    {
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid             = $this->session->get('id');
        $id                 = $userid;
        $usrid              = $id = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles         = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts        = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $id                 = $userid;
        $usrid              = $id = $userid;
        $submit_change_pass = arr::get($_REQUEST, 'submit_change_pass');
        if ($submit_change_pass && Validation::factory($_POST)) {
            $userid1              = $this->session->get('id');
            //$userid2 =$this->session->get('userid');
            $userid               = isset($userid1) ? $userid1 : '';
            $validator_changepass = $passengers->validate_changepwd(arr::extract($_POST, array(
                'old_password',
                'new_password',
                'confirm_password'
            )));
            //print_r($validator_changepass);exit;
            if ($validator_changepass->check()) {
                $oldpass_check = $passengers->check_pass($_POST['old_password'], $userid);
                if ($_POST['old_password'] != $_POST['new_password']) {
                    if ($oldpass_check == 1) {
                        $result = $passengers->change_password($validator_changepass, $_POST, $userid);
                        if ($result) {
                            $mail              = "";
                            //$signup_cont=$this->emailtemplate->get_template_content(USER_CHANGE_PASSWORD);
                            //$subject=$signup_cont[0]['email_subject'];
                            //$content=$signup_cont[0]['email_content'];	
                            $replace_variables = array(
                                REPLACE_LOGO => EMAILTEMPLATELOGO,
                                REPLACE_SITENAME => COMPANY_SITENAME,
                                REPLACE_USERNAME => ucfirst($result['name']),
                                REPLACE_MOBILE => $result['phone'],
                                REPLACE_PASSWORD => $_POST['confirm_password'],
                                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL => CONTACT_EMAIL,
                                REPLACE_SITEURL => URL_BASE,
                                SITE_DESCRIPTION => $this->app_description,
                                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            );
                           // $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-changepassword.html', $replace_variables);
							if ($this->lang != 'en') {
								if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/user-changepassword-' . $this->lang . '.html')) {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/user-changepassword-' . $this->lang . '.html', $replace_variables);
								} else {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-changepassword.html', $replace_variables);
								}
							} else {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-changepassword.html', $replace_variables);
							}
							
                            $to                = $result['email'];
                            $from              = CONTACT_EMAIL;
                            $subject           = __('change_password_subject') . ' - ' . COMPANY_SITENAME;
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
                            //$mail=array("to" => $result[0]['email'],"from"=>CONTACT_EMAIL,"subject"=>__('change_password_subject').' - '.COMPANY_SITENAME,"message"=>$message);
                            //$emailstatus=$this->email_send($mail,'smtp');						
                            Message::success(__('sucessful_change_password'));
                            $this->request->redirect('/passengers/changepassword');
                            //$this->request->redirect("/");
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
        $user                          = $passengers->get_passenger_profile_details($userid);
        // print_r($user);
        $view                          = View::factory(USERVIEW . 'changepassword')->bind('validator', $_POST)->bind('validator_changepass', $validator_changepass)->bind('oldpass_error', $oldpass_error)->bind('same_pw', $same_pw)->bind('errors', $errors)->bind('usrid', $userid)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('user', $user);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**
     *****action Cancelled trips()****
     
     */
    public function action_transactionlog()
    {
        $passengers = Model::factory('passengers');
        $errors     = array();
        $this->is_login();
        $this->is_login_status();
        $userid                                   = $this->session->get('id');
        $id                                       = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles                               = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                              = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //all Completed Status with transaction
        $passenger_tot_cancel_transaction_details = $passengers->passenger_tot_cancel_transaction_details($id, COMPANY_CID);
        //print_r($passenger_tot_cancel_transaction_details[0]['tot']);
        //pagination loads here
        $page_no                                  = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        $pag_data                      = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => count($passenger_tot_cancel_transaction_details),
            'view' => 'pagination/punbb'
        ));
        /*$all_transaction_list = $manage_transaction->front_driver_transaction_details('','',$userid,'','',$offset, REC_PER_PAGE);*/
        $all_transaction_list          = $passengers->passenger_cancel_transaction_details($id, COMPANY_CID, $offset, REC_PER_PAGE);
        $view                          = View::factory(USERVIEW . 'transaction_log')->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('offset', $offset)->bind('userid', $id)->bind('errors', $errors);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /**
     *****action completed trips()****
     
     */
    public function action_completed_transactionlog()
    {
        $passengers = Model::factory('passengers');
        $errors     = array();
        $this->is_login();
        $this->is_login_status();
        $userid      = $this->session->get('id');
        $id          = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles  = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //pagination loads here
        $page_no     = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        /*$all_transaction_list = $manage_transaction->front_driver_transaction_details('','',$userid,'','',$offset, REC_PER_PAGE);*/
        //$all_transaction_list = $passengers->passenger_cancel_transaction_details($id,$offset, REC_PER_PAGE);
        //all Completed Status with transaction
        $passengers_all_compl_trans    = $passengers->get_passenger_log_transactions($userid, 1, 'A', '1', '0', REC_PER_PAGE);
        $view                          = View::factory(USERVIEW . 'transaction_log_completed')->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('passengers_all_compl_trans', $passengers_all_compl_trans)->bind('errors', $errors);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    public function get_driver_name($driver_id)
    {
        $siteusers = Model::factory('siteusers');
        $this->is_login();
        $this->is_login_status();
        $name = $siteusers->get_uname($driver_id);
        return $name;
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
            $siteusers = Model::factory('passengers');
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
    /**
     *****action_linkdinconnect()****
     *@purpose of linkdin connect
     */
    public function action_linkdinconnect()
    {
        require_once('oauth.php');
        require_once('feed.php');
        $siteusers           = Model::factory('passengers');
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
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                $req_req->to_header()
            ));
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
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                $acc_req->to_header()
            ));
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
                    $this->session->set('linkdin_details', array(
                        'username' => $uname,
                        'name' => $uname,
                        'pubprofile' => htmlspecialchars($profile_url),
                        'profileimage' => htmlspecialchars($image_url),
                        'access_token' => $oauth['oauth_token'],
                        'secret_key' => $oauth['oauth_token_secret']
                    ));
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
                $replace_variables       = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => COMPANY_SITENAME,
                    REPLACE_EMAIL => $cur_user[0]['email'],
                    REPLACE_SITELINK => URL_BASE,
                    REPLACE_SITEEMAIL => CONTACT_EMAIL,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
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
                $mail                    = array(
                    "to" => $details[0]['email'],
                    "from" => CONTACT_EMAIL,
                    "subject" => "Invitation to connect on taximobility",
                    "message" => $message
                );
                $emailstatus             = $this->email_send($mail, 'smtp');
                /*
                 * 						
                 $replace_variables=array(REPLACE_LOGO=>EMAILTEMPLATELOGO,REPLACE_SITENAME=>COMPANY_SITENAME,REPLACE_USERNAME=>$user_details['username'],REPLACE_EMAIL=>$details[0]['email'],REPLACE_PASSWORD=>$password,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>CONTACT_EMAIL);
                 $message=$this->emailtemplate->emailtemplate(DOCROOT.TEMPLATEPATH.'registertemp.html',$replace_variables);
                 $mail=array("to" => $details[0]['email'],"from"=>CONTACT_EMAIL,"subject"=>"Registration success","message"=>$message);
                 
                 $emailstatus=$this->email_send($mail,'smtp');								
                 //	Message::success(__('sucessfull_registration').COMPANY_SITENAME);
                 
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
        $pag_data                         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'total_items' => count($recent_con), //total items available
            'items_per_page' => 6, //total items per page
            'view' => 'pagination/punbb' //pagination style
        ));
        //get recent connections list
        //============================
        $recent_con_list                  = $siteusers->get_recent_connections_list($offset, 6, $conid);
        $view                             = View::factory(USERVIEW . 'my_profile')->bind('action', $action)->bind('recent_con', $recent_con_list)->bind('details1', $details1)->bind('check_already_connected', $check_already_connected)->bind('pag_data', $pag_data)->bind('details', $details);
        $this->template->content          = $view;
        $this->template->meta_description = " ";
        $this->title                      = "";
        $this->template->meta_keywords    = " ";
    }
    /**
     *****curl_function****
     *@ purpose of social network auto post and connect
     */
    public function curl_function($req_url = "", $type = "", $arguments = array())
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
    public function action_email_notification()
    {
        $siteusers = Model::factory('siteusers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors    = array();
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
    public function action_completedjourney()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers                       = Model::factory('passengers');
        $userid                           = $this->session->get('id');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles                       = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                      = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //all Completed Status with transaction
        $passengers_all_total_compl_trans = $passengers->get_total_passenger_log_transactions($userid, 1, 'A', '1', COMPANY_CID);
        //print_r(count($passengers_all_total_compl_trans));
        //pagination loads here
        $page_no                          = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        $pag_data                      = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => count($passengers_all_total_compl_trans),
            'view' => 'pagination/punbb'
        ));
        //all Completed Status with transaction
        $passengers_all_compl_trans    = $passengers->get_passenger_log_transactions($userid, 1, 'A', '1', $offset, REC_PER_PAGE, COMPANY_CID);
        $view                          = View::factory(USERVIEW . 'completedjourney')->bind('passengers_all_compl_trans', $passengers_all_compl_trans)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('offset', $offset)->bind('userid', $userid);
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    public function action_recenttravel()
    {
        $this->is_login();
        $this->is_login_status();
        $passengers                 = Model::factory('passengers');
        $userid                     = $this->session->get('id');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles                 = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts                = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        //all Completed Status with transaction
        $passengers_total_all_compl = $passengers->get_total_passenger_log_details($userid, 1, 'A', '1', COMPANY_CID);
        //print_r($passengers_total_all_compl);exit;
        //pagination loads here
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                        = REC_PER_PAGE * ($page_no - 1);
        $pag_data                      = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $passengers_total_all_compl[0]['co_nt'],
            'view' => 'pagination/punbb'
        ));
        //all Completed Status
        //$passengers_all_compl = $passengers->get_passenger_log_details($userid,1,'A','1',$offset,REC_PER_PAGE);
        $passengers_all_compl          = $passengers->get_passenger_log_details($userid, 1, 'A', '1', $offset, REC_PER_PAGE, COMPANY_CID);
        //print_r($passengers_all_compl);exit;
        $view                          = View::factory(USERVIEW . 'recenttravel')->bind('passengers_all_compl', $passengers_all_compl)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('pag_data', $pag_data)->bind('offset', $offset)->bind('userid', $userid);
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    public function action_track_location()
    {
        $passengers = Model::factory('passengers');
        $result     = $passengers->get_driver_location($_GET['driverid']);
        print_r($result);exit;
        echo $result[0]['latitude'] . "[BR]" . $result[0]['longitude'];
        exit;
    }
    /**
     *****action_fconnect()****
     *@ facebook connect
     */
    public function action_fconnect()
    {
        /*$id =$this->session->get('id'); 
        //$userid = $this->session->get('userid');
        $usrid = $id; //isset($userid)?$userid:$id;*/
        $id     = $this->session->get('id');
        $userid = $id;
        $usrid  = isset($userid) ? $userid : $id;
        if (!empty($usrid)) {
            Message::success(__('already_sign_in') . COMPANY_SITENAME);
?>
			<script>
				window.opener.location = "/passengers/dashboard";  
				window.close();
			</script>
			<?php
            exit;
            $this->request->redirect('/passengers/dashboard');
        }
        $siteusers       = Model::factory('passengers');
        $fb_access_token = $this->session->get("fb_access_token");
        $redirect_url    = URL_BASE . "passengers/fconnect/";
        if (!$fb_access_token && !$this->session->get('id')) {
            if (strpos($_SERVER["REQUEST_URI"], "code")) {
                $CODE         = arr::get($_REQUEST, 'code');
                //$token_url = "https://graph.facebook.com/oauth/access_token?client_id=".FB_APP_ID."&redirect_uri=".$redirect_url."&client_secret=".FB_APP_SECRET."&code=".$CODE;
                $token_url    = "https://graph.facebook.com/oauth/access_token?client_id=" . $this->fb_key . "&redirect_uri=" . $redirect_url . "&client_secret=" . $this->fb_secret . "&code=" . $CODE;
                $access_token = $this->curl_function($token_url);
                $FBtoken      = str_replace("access_token=", "", $access_token);
                $FBtoken      = explode("&expires=", $FBtoken);
                //print_r($FBtoken);	
                if (isset($FBtoken[0])) {
                    $profile_data_url = "https://graph.facebook.com/me?access_token=" . $FBtoken[0];
                    $Profile_data     = json_decode($this->curl_function($profile_data_url));
                    //foreach($Profile_datas as $values)
                    //{
                    //	print_r($values);
                    //}
                    //print_r($Profile_datas);
                    if (isset($Profile_data->error)) {
                        Message::error(__('error_fconnect'));
                        $this->request->redirect('/');
                    } else {
                        $arr          = 0;
                        $len          = 6;
                        $base         = 'ABCDEFGHKLMNOPQRSTWXYZ123456789';
                        $max          = strlen($base) - 1;
                        $activatecode = '';
                        mt_srand((double) microtime() * 1000000);
                        while (strlen($activatecode) < $len + 1)
                            $activatecode .= $base{mt_rand(0, $max)};
                        $dbpass           = md5($activatecode);
                        $uid              = $Profile_data->id;
                        $thumb_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                        $thumb_image_name = 'thumb_' . $uid . '.jpg';
                        $thumb_image_path = DOCROOT . PASS_IMG_IMGPATH . '/' . $thumb_image_name;
                        file_put_contents($thumb_image_path, $thumb_image);
                        $edit_image      = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_THUMBIMG_WIDTH1 . "&height=" . PASS_THUMBIMG_HEIGHT1 . "");
                        $edit_image_name = 'edit_' . $uid . '.jpg';
                        $edit_image_path = DOCROOT . PASS_IMG_IMGPATH . $edit_image_name;
                        file_put_contents($edit_image_path, $edit_image);
                        /** Big Image **/
                        $big_image        = file_get_contents("http://graph.facebook.com/" . $uid . "/picture?width=" . PASS_IMG_WIDTH . "&height=" . PASS_IMG_HEIGHT . "");
                        $image_name       = $uid . '.jpg';
                        $thumb_image_path = DOCROOT . PASS_IMG_IMGPATH . '/' . $image_name;
                        file_put_contents($thumb_image_path, $big_image);
                        $base_image   = imagecreatefromjpeg($edit_image_path);
                        $width        = 100;
                        $height       = 19;
                        $top_image    = imagecreatefrompng(URL_BASE . "public/images/edit.png");
                        $merged_image = DOCROOT . PASS_IMG_IMGPATH . 'edit_' . $uid . '.jpg';
                        imagesavealpha($top_image, true);
                        imagealphablending($top_image, true);
                        imagecopy($base_image, $top_image, 0, 83, 0, 0, $width, $height);
                        imagejpeg($base_image, $merged_image);
                        $status = $siteusers->register_facebook_user_taxi($Profile_data, $FBtoken[0], $image_name);
                    }
                }
                if ($status == 1) {
                    $userid = $this->session->get('id');
?>
							<script>
								window.opener.location = "/passengers/dashboard";  
								window.close();
							</script>
							<?php
                    exit;
                    $this->request->redirect('/passengers/dashboard');
                } elseif ($status == -1) {
                    Message::error(__('email_exists'));
?>
							<script>
								//window.opener.location = "/passengers/dashboard";  
								window.close();
								window.opener.location.reload(false);
								
							</script>
							<?php
                    exit;
                    $this->request->redirect("/");
                } else {
                    Message::error(__('error_fconnect'));
?>
							<script>
								window.opener.location = "/passengers/dashboard";  
								window.close();
							</script>
							<?php
                    exit;
                    $this->request->redirect('/');
                }
?><script>window.close();</script><?php
            } else {
                $this->request->redirect("https://www.facebook.com/dialog/oauth?client_id=" . $this->fb_key . "&redirect_uri=" . urlencode($redirect_url) . "&scope=email,read_stream,publish_stream,offline_access&display=popup");
                die();
            }
        } else {
?><script>window.close();</script><?php
        }
    }
    public function action_check_passenger_creditcard_valid()
    {
        $passengers       = Model::factory('passengers');
        $creditcard_no    = $_GET['creditcard_no'];
        $creditcard_cvv   = $_GET['creditcard_cvv'];
        $expdatemonth     = $_GET['expdatemonth'];
        $expdateyear      = $_GET['expdateyear'];
        $array            = array(
            'creditcard_no' => $creditcard_no,
            'creditcard_cvv' => $creditcard_cvv,
            'expdatemonth' => $expdatemonth,
            'expdateyear' => $expdateyear
        );
        $creditcard_valid = $passengers->authorize_creditcard($array);
        echo $creditcard_valid;
        exit;
    }
    /*public function action_check_passenger_email_exist()
    {
    //$_GET['email'];
    $siteusers = Model::factory('passengers');
    $email_exist = $siteusers->check_email_passengers($_GET['email']);
    echo  $email_exist;
    exit;
    }*/
    public function action_resetpassword()
    {
        $passengers      = Model::factory('passengers');
        /**To Set Errors Null to avoid error if not set in view**/
        $errors          = array();
        $siteusers       = Model::factory('siteusers');
        /**To get the form submit button name**/
        $country_details = $siteusers->country_details();
        $city_details    = $siteusers->city_details();
        $state_details   = $siteusers->state_details();
        $site_info       = $siteusers->get_site_info();
        $sitecms_info    = $siteusers->get_sitecms_info();
       // $banner_images   = $siteusers->get_banner_images();
        $view            = View::factory(USERVIEW . 'home')->bind('sitecms_info', $sitecms_info)->bind('banner_images', $banner_images)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('site_info', $site_info);
        /**To generate random key if user enter email at forgot password**/
        $random_key      = text::random($type = 'alnum', $length = 7);
        /**To get the form submit button name**/
        if (isset($_REQUEST)) {
            $email_exist = $passengers->check_phone_passengers($_REQUEST['phone_no'], COMPANY_CID);
            
            if ($email_exist == 1) {
                $validator = '';
                $result    = $passengers->forgot_password_phone($validator, $_REQUEST, $random_key, COMPANY_CID);
              //  echo COMPANY_CID;
                
              //  print_r($result);exit;
                if ($result) {
                    $mail              = "";
                    //$forgotpassword=$this->emailtemplate->get_template_content(FORGOT_PASSWORD);
                    //$subject=$forgotpassword[0]['email_subject'];
                    //$content=$forgotpassword[0]['email_content'];
                    $replace_variables = array(
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => COMPANY_SITENAME,
                        REPLACE_USERNAME => ucfirst($result['name']),
                        REPLACE_MOBILE => $result['phone'],
                        REPLACE_PASSWORD => $random_key,
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => CONTACT_EMAIL,
                        REPLACE_SITEURL => URL_BASE,
                        SITE_DESCRIPTION => $this->app_description,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    );
                    //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-forgotpassword.html', $replace_variables);
					if ($this->lang != 'en') {
						if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/user-forgotpassword-' . $this->lang . '.html')) {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/user-forgotpassword-' . $this->lang . '.html', $replace_variables);
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-forgotpassword.html', $replace_variables);
						}
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'user-forgotpassword.html', $replace_variables);
					}
                    //print_r($message);
                    //exit;
                    //echo $result[0]['email'];
                    $to                = $result['email'];
                    $from              = CONTACT_EMAIL;
                    $subject           = __('forgot_password_subject') . " - " . COMPANY_SITENAME;
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
                    //	print_r($message);exit;
                    //free sms url with the arguments
                    if (SMS == 1) {
                        $common_model    = Model::factory('commonmodel');
                        $message_details = $common_model->sms_message('2');
                        $to              = $result['phone'];
                        $message         = $message_details['sms_description'];
                        $message         = str_replace("##PASSWORD##", $random_key, $message);
                        //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                    }
                    Message::success(__('sucessful_forgot_password'));
                    $this->request->redirect("/");
                } else {
                    echo $fail;
                }
            } else {
                $email_error = __("email_not_exist");
            }
            $validator = null;
        }
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
    }
    //Cancel Trip
    public function action_cancel_upcoming_trips(){
					$driver_model       = Model::factory('driver');
                    $api_model          = Model::factory(MOBILEAPI_107);
                    $passengers       = Model::factory('passengers');
                    $cancel_trip_array  = $_POST;
                    $passenger_log_id   = $cancel_trip_array['value'];
                    
                    $check_travelstatus = $api_model->check_travelstatus($passenger_log_id);
					
                    if ($check_travelstatus == -1) {
                        echo __('invalid_trip');
                        exit;
                    }
                    if ($check_travelstatus == 4) {
                       
                        echo __('trip_already_canceled');
                       exit;
                    }
                    if ($check_travelstatus == 2) {
                       
                        echo __('passenger_in_journey');
                       exit;
                    }
                    $flag         = 1;
                    $trans_result = $api_model->check_tranc($passenger_log_id, $flag);
                    if (count($trans_result) > 1) {
                       
                        echo __('trip_fare_already_updated');
                        exit;
                    }
                    if ($passenger_log_id != null) {
						
						$get_passenger_log_det           = $passengers->get_passenger_log_detail_forcancel($passenger_log_id);
                        $driver_id                       = isset($get_passenger_log_det[0]['driver_id']) ?$get_passenger_log_det[0]['driver_id'] : '';
                        $passenger_id                    = isset($get_passenger_log_det[0]['passengers_id']) ? $get_passenger_log_det[0]['passengers_id'] : '';
                        $passenger_name                  = isset($get_passenger_log_det[0]['passenger_name']) ? $get_passenger_log_det[0]['passenger_name'] : '';
                        $passenger_email                 = isset($get_passenger_log_det[0]['passenger_email']) ? $get_passenger_log_det[0]['passenger_email'] : '';
                        $pickup_location                 = isset($get_passenger_log_det[0]['current_location']) ? $get_passenger_log_det[0]['current_location'] : '';
                        $cancel_trip_array['company_id'] = isset($get_passenger_log_det[0]['company_id']) ? $get_passenger_log_det[0]['company_id'] : '';
                        $cancellation_nfree              = (FARE_SETTINGS == 2) ? $get_passenger_log_det[0]['cancellation_nfree'] : CANCELLATION_FARE;
                        $status                          = "F";
                        $result                          = $api_model->update_driver_status($status, $driver_id);
						 if ($cancellation_nfree == 0) {
                            if (SMS == 1) {
                                $phone_no        = $api_model->get_driver_phone_by_id($driver_id);
                                $message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
                                $to              = $phone_no;
								$message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
								$result = $api_model->sendSms($to,$message);
                            }
                            $payment_types      = 0;
							
                            $transaction_detail = $passengers->cancel_triptransact_details_ct($cancel_trip_array, $cancellation_nfree, $payment_types);
                            $pushmessage        = array(
                                "message" => __('trip_cancelled_passenger'),
                                "status" => 2
                            );
                           
                            $message            = array(
                                "message" => __('trip_cancel_passenger'),
                                "cancellation_from" => __('Free'),
                                "cancellation_amount" => 0,
                                "status" => 2
                            ); //with out cancellation fee
                            echo __('trip_cancel_passenger');
                            exit;
                        } else {
							
							/* IF CANCELLATION FEE APPLICABLE MEANS **/
							$total            = $api_model->get_passenger_cancel_faredetail($passenger_log_id);
                            $passenger_wallet = $api->get_passenger_wallet_amount($passenger_id);
							if ($get_passenger_log_det[0]['payment_type'] == 1) // By cash
                                {
                                $get_passenger_log_details = $driver_model->get_passenger_log_details($passenger_log_id);
                                if (count($get_passenger_log_details) > 0) {
                                    //Inserting to Transaction Table
                                    try {
                                        $siteinfo_details           = $api_model->siteinfo_details();
                                         $auto_id = $this->commonmodel->get_auto_id(MDB_TRANSACTION);
                                        $insert_array               = array(
											"_id" => $auto_id,
                                            "passengers_log_id" => $passenger_log_id,
                                            "remarks" => $remarks,
                                            "payment_type" => $cancel_trip_array['pay_mod_id'],
                                            "amt" => $total,
                                            'current_date' => new MongoDate(strtotime($this->currentdate)),
                                        );
                                        $transaction                = $this->commonmodel->insert(MDB_TRANSACTION, $insert_array);
                                        $update_travel_status_array = array(
                                            "travel_status" => (int)4
                                        ); // Passenger Cancelled
                                        $result_sts_update          = $api->update_table(MDB_PASSENGERS_LOGS, $update_travel_status_array, '_id', (int)$passenger_log_id);
                                        $cancel_from                = __('Cash');
                                        //to reduce the wallet amount while cancelling the trip
                                    
                                        if (SMS == 1) {
                                            $phone_no        = $api->get_driver_phone_by_id($driver_id);
                                            $message_details = $this->commonmodel->sms_message_by_title('trip_cancel');
                                            $to              = $phone_no;
                                            $message_details = reset($message_details);
											$message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
											
											$result = $api->sendSms($to,$message);
                                        }
                                        $pushmessage    = array(
                                            "message" => __('trip_cancelled_passenger'),
                                            "status" => 2
                                        );
                                        $d_device_token = $get_passenger_log_det[0]['driver_device_token'];
                                        $d_device_type  = $get_passenger_log_det[0]['driver_device_type'];
                                        $message        = array(
                                            "message" => __('trip_cancel_passenger'),
                                            "cancellation_from" => $cancel_from,
                                            "cancellation_amount" => $total,
                                            "status" => 1
                                        );
                                        echo json_encode($message);
                                    }
                                    catch (Kohana_Exception $e) {
                                        //	print_r($e);
                                        $message = array(
                                            "message" => __('try_again'),
                                            "status" => 3
                                        );
                                    }
                                } else {
                                    $message = array(
                                        "message" => __('invalid_trip'),
                                        "status" => 3
                                    );
                                }
                            } else {
                                $card_type       = '';
                                $default         = 'yes';
                                $carddetails     = $api->get_creadit_card_details($passenger_id, $card_type, $default);
								
                                $no_default_card = $api->get_creadit_card_details($passenger_id, $card_type, "");
                                if (count($carddetails) > 0) {
                                    $payment_status = $this->cancel_trippayment($cancel_trip_array, $cancellation_nfree, $default_companyid);
                                    $cancelArr      = ($payment_status != 0) ? explode("#", $payment_status) : '';
                                    $payment_status = isset($cancelArr[0]) ? $cancelArr[0] : 0;
                                    $cancelAmount   = isset($cancelArr[1]) ? $cancelArr[1] : 0;
                                    if ($payment_status == 0) {
                                        $gateway_response = isset($_SESSION['paymentresponse']['L_LONGMESSAGE0']) ? $_SESSION['paymentresponse']['L_LONGMESSAGE0'] : 'Payment Failed';
                                        $message          = array(
                                            "message" => __('cancel_payment_failed'),
                                            "gateway_response" => $gateway_response,
                                            "status" => 0
                                        );
                                        echo json_encode($message);
                                        break;
                                    } else if ($payment_status == 1) {
                                        if (SMS == 1) {
                                            $phone_no          = $api->get_driver_phone_by_id($driver_id);
                                            $this->commonmodel = Model::factory('commonmodel');
                                            $message_details   = $this->commonmodel->sms_message_by_title('trip_cancel');
                                            $to                = $phone_no;
                                            $message_details = reset($message_details);
											$message         = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                                            //$message = str_replace("##OTP##",$otp,$message);
                                            $message           = str_replace("##SITE_NAME##", SITE_NAME, $message);
											$result = $this->commonmodel->send_sms($to,$message);
                                        }
                                        $message          = array(
                                            "message" => __('trip_cancel_passenger'),
                                            "cancellation_from" => __('credit_card'),
                                            "cancellation_amount" => $cancelAmount,
                                            "status" => 1
                                        );
                                        $pushmessage      = array(
                                            "message" => __('trip_cancelled_passenger'),
                                            "status" => 2
                                        );
                                        $d_device_token   = $get_passenger_log_det[0]['driver_device_token'];
                                        $d_device_type    = $get_passenger_log_det[0]['driver_device_type'];
										
                                        $send_mail_status = $this->send_cancel_fare_mail_passenger($cancelAmount, $passenger_name, $pickup_location, $passenger_email);
                                        echo json_encode($message);
                                        break;
                                    } else if ($payment_status == -1) {
                                        $message = array(
                                            "message" => __('invalid_trip'),
                                            "status" => 3
                                        );
                                        echo json_encode($message);
                                        break;
                                    }
                                } else if (count($carddetails) == 0 && count($no_default_card) > 0) {
                                    $message = array(
                                        "message" => __('passenger_has_no_default_creditcard'),
                                        "status" => 5
                                    );
                                    echo json_encode($message);
                                    break;
                                } else {
                                    $message = array(
                                        "message" => __('cancel_no_creditcard'),
                                        "status" => 4
                                    );
                                    echo json_encode($message);
                                    break;
                                }
                            }
                     
							/* IF CANCELLATION FEE APPLICABLE MEANS **/
							
							
						}
				    }
				    else {
                        
                        echo  __('invalid_trip');
                        exit;
                    }
                   
		
		
		
		
	}
    
    
    
    
    public function action_canceltrip()
    {
        $passengers       = Model::factory('passengers');
        $driver_model     = Model::factory('driver');
        $Commonmodel      = Model::factory('Commonmodel');
        $api_model        = Model::factory('api');
        $passenger_log_id = $_POST['value'];
        $pay_mod_id       = 3; //$_POST['pay_mod_id'];
        $remarks          = ""; //$_POST['remarks'];
        $travel_status    = 4;
        $trans_result     = $api_model->check_tranc($passenger_log_id);
        if ($trans_result == 1) {
            echo __('trip_fare_already_updated');
            //$this->request->redirect("/passengers/dashboard");
            exit;
        }
        $get_passenger_log_det = $passengers->get_passenger_log_detail($passenger_log_id);
        //print_r($get_passenger_log_det);exit;
        $driver_id             = $get_passenger_log_det[0]['driver_id'];
       // $cancellation_nfree    = $get_passenger_log_det[0]['cancellation_nfree'];
        //echo $cancellation_nfree;exit;
        $status                = "F";
        $result                = $api_model->update_driver_status($status, $driver_id);
       /* if ($cancellation_nfree == 0) {
            $cancel_array       = array(
                "passenger_log_id" => $passenger_log_id,
                "travel_status" => $travel_status,
                "remarks" => $remarks,
                "pay_mod_id" => $pay_mod_id
            );
            $transaction_detail = $api_model->cancel_triptransact_details($cancel_array, $cancellation_nfree);
            $message            = "Trip has been cancelled successfully";
            echo $message;
            exit;
        } */
        if ($pay_mod_id == 3) // By cash
            {
            $get_passenger_log_details = $passengers->get_passenger_log_detail($passenger_log_id);
            if (count($get_passenger_log_details) > 0) {
                //Inserting to Transaction Table 
                try {
                    //$siteinfo_details  = $api_model->siteinfo_details();
                    $total             = $api_model->get_passenger_cancel_faredetail($passenger_log_id);
                   // $update_commission = $Commonmodel->update_commission($passenger_log_id, $total, $siteinfo_details[0]['admin_commission']);
                    $insert_array      = array(
                        "passengers_log_id" => $passenger_log_id,
                        "remarks" => $remarks,
                        "payment_type" => $pay_mod_id,
                        "amt" => $total
                       // "admin_amount" => $update_commission['admin_commission'],
                      //  "company_amount" => $update_commission['company_commission'],
                     //   "trans_packtype" => $update_commission['trans_packtype']
                    );
                    $transaction       = $Commonmodel->insert(TRANS, $insert_array);
                    $send_mail_status  = $this->send_mail_passenger($passenger_log_id, 4);
                    echo __('trip_fare_updated');
                    //$this->request->redirect("/passengers/dashboard");
                    exit;
                }
                catch (Kohana_Exception $e) {
                    //	print_r($e);
                    echo __('trip_fare_already_updated');
                    //$this->request->redirect("/passengers/dashboard");
                    exit;
                }
            } else {
                echo ('invalid_trip');
                //$this->request->redirect("/passengers/dashboard");									
            }
        } else {
            $cancel_array   = array(
                "passenger_log_id" => $passenger_log_id,
                "travel_status" => $travel_status,
                "remarks" => $remarks,
                "pay_mod_id" => $pay_mod_id
            );
            $payment_status = $this->cancel_trippayment($cancel_array, $cancellation_nfree);
            if ($payment_status == 0) {
                echo $_SESSION['paymentresponse']['L_LONGMESSAGE0'];
                //$this->request->redirect("/passengers/dashboard");
                //$message = array("message" => __('payment_failed'), "gateway_response" =>$_SESSION['paymentresponse']['L_LONGMESSAGE0'],"status"=>0);		
                exit;
            } else if ($payment_status == 1) {
                echo __('trip_fare_updated');
                //$this->request->redirect("/passengers/dashboard");	
                exit;
            } else if ($payment_status == -1) {
                echo __('invalid_trip');
                //$this->request->redirect("/passengers/dashboard");		
                exit;
            }
        }
    }
    //Send mail same as the function used in API controler
      public function send_mail_passenger($log_id = '', $travel_status = '')
    {
        
        /**************************** Mail send to Passenger ***************/
        $api_model             = Model::factory('mobileapi115');
        $passenger_log_details = $api_model->passenger_transdetails($log_id);
        
        if (count($passenger_log_details) > 0) {
            $to            = $passenger_log_details[0]['passenger_email'];
            $name          = $passenger_log_details[0]['passenger_name'];
            $job_referral  = $passenger_log_details[0]['job_referral'];
            $api_model     = Model::factory(MOBILEAPI_107);
            $location_data = $api_model->get_location_details($log_id);
            if ($location_data) {
                $pickup = $location_data[0]['current_location'];
                $drop   = $location_data[0]['drop_location'];
                $path   = $location_data[0]['active_record'];
                $path   = str_replace('],[', '|', $path);
                $path   = str_replace(']', '', $path);
                $path   = str_replace('[', '', $path);
                $path   = explode('|', $path);
                $path   = array_unique($path);
                include_once MODPATH . "/email/vendor/polyline_encoder/encoder.php";
                $polylineEncoder = new PolylineEncoder();
                if (count($path) > 0) {
                    foreach ($path as $values) {
                        $values = explode(',', $values);
                        $polylineEncoder->addPoint($values[0], $values[1]);
                        $polylineEncoder->encodedString();
                    }
                }
                $encodedString = $polylineEncoder->encodedString();
                $marker_end    = $location_data[0]['drop_latitude'] . ',' . $location_data[0]['drop_longitude'];
                $marker_start  = $location_data[0]['pickup_latitude'] . ',' . $location_data[0]['pickup_longitude'];
                //$url= "http://maps.google.com/maps/api/staticmap?center=$center&zoom=11&markers=$markers&size=500x300&sensor=TRUE_OR_FALSE&path=color:0x0000ff|weight:5|$path";echo $url;exit;
                $mapurl        = "http://maps.googleapis.com/maps/api/staticmap?size=250x250&markers=color:red%7C$marker_start&markers=color:green%7C$marker_end&path=weight:3%7Ccolor:red%7Cenc:$encodedString";
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
                    $payment_mode = __('uncard');
                    break;
                default:
                    $payment_mode = __('account');
            }
            $distance_km       = ($passenger_log_details[0]['distance'] != '') ? $passenger_log_details[0]['distance'] : '0';
            $trip_minutes      = ($passenger_log_details[0]['trip_minutes'] != '') ? $passenger_log_details[0]['trip_minutes'] : '0';
            $distance_fare_row = "";
            if ($distance_fare != 0) {
                $distance_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('distance_fare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . round($distance_fare, 2) . "</td></tr>";
            }
            $minutes_fare_row = "";
            if ($passenger_log_details[0]['minutes_fare'] != 0) {
                $minutes_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('minutes_fare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . " " . round($passenger_log_details[0]['minutes_fare'], 2) . "</td></tr>";
            }
            $wallet_row = "";
            if ($used_wallet_amount != 0) {
                $wallet_row = "<tr style='color:#808080'><td width='150px'>" . __('wallet_amount_paid') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "		" . round($used_wallet_amount, 2) . "</td></tr>";
            }
            $evening_fare = "";
            if ($passenger_log_details[0]['eveningfare'] != 0) {
                $evening_fare = "<tr style='color:#808080'><td width='150px'>" . __('eveningfare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . round($passenger_log_details[0]['eveningfare'], 2) . "</td></tr>";
            }
            $night_fare = "";
            if ($passenger_log_details[0]['nightfare'] != 0) {
                $night_fare = "<tr style='color:#808080'><td width='150px'>" . __('nightfare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . round($passenger_log_details[0]['nightfare'], 2) . "</td></tr>";
            }
            $orderlist .= "<td valign='top'><table style='float:left;font-size:13px;position:relative;top:0px;left:10px' height='280px' cellpadding='8' width='250px'>
			<tbody><tr><td colspan='3' rowspan='2' width='250px' style='text-align:center;font-size:15px;color: #161616;font-weight:bold'>" . __('fare_details') . "</td><td></td></tr>
			<tr height='30'></tr>
			<tr style='color:#808080'><td width='150px'>" . __('payment_mode') . "</td><td style='color:#000' width='100px'>" . $payment_mode . "</td></tr>
			" . $distance_fare_row . " " . $minutes_fare_row . "
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_hours') . "</td><td style='color:#000'>" . $passenger_log_details[0]['waiting_time'] . "</td></tr>
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_cost') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . round($passenger_log_details[0]['waiting_cost'], 2) . "</td></tr>" . $night_fare . " " . $evening_fare . "
			<tr style='color:#808080'><td width='150px'>" . __('tax') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . " " . round($passenger_log_details[0]['tax_amount'], 2) . "</td></tr>
			<tr style='color:#808080'><td width='150px'>" . __('sub_total') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "		" . round($subtotal, 2) . "</td></tr>
			$wallet_row
			<tr style='color:#808080'><td width='150px' style='color: #161616;font-weight:bold'>" . __('trip_time') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "		" . round($passenger_log_details[0]['fare'], 2) . "</td></tr>
			</tbody></table></td></tr>
			<td colspan='4'><hr style='color:#d7d7d7' size='1px' /></td>
			<tr><td><table width='250px' height='100px' cellpadding='3' cellspacing='3' style='float:left;'>
			<tbody><tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Current_Location') . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='300px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['current_location'] . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Drop_Location') . "</td></tr>
			<tr style='color:#808080'><td width='280px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['drop_location'] . "</td></tr>
			</tbody></table></td>
			<td valign='top'><table style='float:left;margin:10px;font-size:13px;' width='250px' height='50px' cellpadding='0' cellspacing='0'>
			<tbody><tr><td width='80px' style='color:#000' align='center'>" . __('km') . "</td><td width='80px'align='center' style='color:#000'>" . __('trip_minutes') . "</td></tr>
			<tr><td width='80px' align='center'>" . $distance_km . "	" . __('km') . "</td><td width='80px' align='center'>" . $trip_minutes . "</td></tr>
			</tbody></table></td></tr>";
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
        }
        /**************************** Mail send to Passenger ***************/
    }
    public function send_cancel_fare_mail_passenger($cancelFare = 0, $passenger_name = "", $pickup_location = "", $to = "")
    {
        $orderlist = '<table cellspacing="8" cellpadding="5">';
        $orderlist .= "
			<tr style='color:#808080'><td>" . __('cancel_fare') . "</td><td style='color:#000'>" . COMPANY_CURRENCY . "	" . $cancelFare . "</td></tr>
			<tr style='color:#808080'><td>" . __('Current_Location') . "</td><td style='word-break:break-word;border-collapse:collapse!important;text-align:left;display:table-cell;line-height:16px;padding:0px;color:#000'>" . $pickup_location . "</td></tr>";
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
    public function send_mail_passenger_old($log_id = '', $travel_status = '')
    {
        /* *************************** Mail send to Passenger ************** */
        $api_model             = Model::factory('api');
        $passenger_log_details = $api_model->passenger_transdetails($log_id);
        $to                    = $passenger_log_details[0]['passenger_email'];
        $name                  = $passenger_log_details[0]['passenger_name'];
        $orderlist             = '';
        if ($travel_status == 4) {
            $orderlist .= '<p><b>' . __('cancel_trip') . '</b>';
        } else {
            $orderlist .= '<p><b>' . __('complete_from') . '</b>';
        }
        $orderlist .= '</p><p style="padding-left:5px;">' . __('complete_from1') . '' . $passenger_log_details[0]['current_location'] . ' </p><p style="padding-left:5px;"> To : ' . $passenger_log_details[0]['drop_location'] . '</p>' . '<p>' . __('total_cost') . ':' . CURRENCY . ' ' . $passenger_log_details[0]['amt'] . '</p>' . '<p>' . __('track_id') . ': ' . $log_id . '</p>';
        $mail              = "";
        $replace_variables = array(
            REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
            REPLACE_SITENAME => COMPANY_SITENAME,
            REPLACE_USERNAME => $name,
            REPLACE_EMAIL => $to,
            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
            REPLACE_SITEEMAIL => CONTACT_EMAIL,
            REPLACE_SITEURL => URL_BASE,
            REPLACE_ORDERID => $log_id,
            REPLACE_ORDERLIST => $orderlist,
            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
        );
        //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
		if ($this->lang != 'en') {
			if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html')) {
				$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html', $replace_variables);
			} else {
				$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
			}
		} else {
			$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
		}
        $from              = CONTACT_EMAIL;
        $subject           = __('payment_made_successfully');
        $redirect          = 'no';
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
        /* *************************** Mail send to Passenger ************** */
    }
    //Trip CAncel PAyment by Passenger via card
    public function cancel_trippayment($values, $cancellation_nfree)
    {
        $api_model              = Model::factory('api');
        $passenger_log_details  = $api_model->passengerlogid_details($values['passenger_log_id']);
        $passenger_userid       = $passenger_log_details[0]['passengers_id'];
        $driver_userid          = $passenger_log_details[0]['driver_id'];
        $company_id             = $passenger_log_details[0]['company_id'];
        $values['company_id']   = $passenger_log_details[0]['company_id'];
        $city_id                = $passenger_log_details[0]['search_city'];
        $taxi_id                = $passenger_log_details[0]['taxi_id'];
        $taxi_model_details     = $api_model->get_taxi_model_details($taxi_id);
        $taxi_model             = $taxi_model_details[0]['taxi_model'];
        $paypal_details         = $api_model->paypal_details();
        $company_paypal_details = $api_model->company_paypal_details($company_id);
        $siteinfo_details       = $api_model->siteinfo_details();
        $company_details        = $api_model->company_details($company_id);
        $fare_details           = $api_model->get_model_fare_details($company_id, $taxi_model, $city_id);
        $creditcard_no          = encrypt_decrypt('decrypt', $passenger_log_details[0]['creditcard_no']);
        $expdatemonth           = $passenger_log_details[0]['expdatemonth'];
        $expdateyear            = $passenger_log_details[0]['expdateyear'];
        $creditcard_cvv         = $passenger_log_details[0]['creditcard_cvv'];
        //$amount = $values['total_fare'] = $company_details[0]['cancellation_fare'];
        $amount                 = $values['total_fare'] = $fare_details[0]['cancellation_fare'];
        //echo $amount;exit;
        $product_title          = Html::chars('Complete Trip');
        //$payment_type = 'Authorization';
        $payment_action         = 'sale';
        $request                = 'METHOD=DoDirectPayment';
        $request .= '&VERSION=65.1'; //  $this->version='65.1';     51.0  
        $request .= '&USER=' . urlencode($company_paypal_details[0]['company_paypal_username']);
        $request .= '&PWD=' . urlencode($company_paypal_details[0]['company_paypal_password']);
        $request .= '&SIGNATURE=' . urlencode($company_paypal_details[0]['company_paypal_signature']);
        $request .= '&CUSTREF=' . (int) $values['passenger_log_id'];
        $request .= '&PAYMENTACTION=' . $payment_action; //type
        $request .= '&AMT=' . urlencode($amount); //   $amount = urlencode($data['amount']);
        //$request .= '&CREDITCARDTYPE=' . $_POST['cc_type'];
        $request .= '&ACCT=' . urlencode(str_replace(' ', '', $creditcard_no));
        // $request .= '&CARDSTART=' . urlencode($_POST['cc_start_date_month'] . $_POST['cc_start_date_year']);
        $request .= '&EXPDATE=' . urlencode($expdatemonth . $expdateyear);
        $request .= '&CVV2=' . urlencode($creditcard_cvv);
        /*$request .= '&FIRSTNAME=' . urlencode($shipping_first_name);
        $request .= '&LASTNAME=' . urlencode($shipping_last_name);
        $request .= '&EMAIL=' . urlencode($shipping_email);
        
        $request .= '&IPADDRESS=' . urlencode($_SERVER['REMOTE_ADDR']);
        $request .= '&STREET=' . urlencode($this->session->get('addr'));
        
        $request .= '&CITY=' . urlencode($city);
        $request .= '&STATE=' . urlencode($state);
        $request .= '&ZIP=' . urlencode($zipcode);
        
        $request .= '&COUNTRYCODE=' . urlencode($country_code);
        */
        $request .= '&CURRENCYCODE=' . $company_paypal_details[0]['company_currency_format'];
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
        $_SESSION["paymentresponse"] = array();
        $_SESSION["paymentresponse"] = $nvpArray;
        if (isset($_SESSION["paymentresponse"]) && !empty($_SESSION["paymentresponse"])) {
            $paymentresponse = array();
            $ack             = strtoupper($_SESSION['paymentresponse']["ACK"]);
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
                $invoceno           = commonfunction::randomkey_generator();
                $paymentresponse    = $_SESSION['paymentresponse'];
                $transactionfield   = $values + $paymentresponse + $siteinfo_details; // Data Store 
                //insert transaction status
                //===================================
                $transaction_detail = $api_model->cancel_triptransact_details($transactionfield, $cancellation_nfree);
                $phone              = $passenger_log_details[0]['passenger_phone'];
                $passenger_log_id   = $values['passenger_log_id'];
                //free sms url with the arguments
                if (SMS == 1) {
                    $common_model    = Model::factory('commonmodel');
                    $message_details = $common_model->sms_message('6');
                    $to              = $phone;
                    $message         = $message_details['sms_description'];
                    $message         = str_replace("##booking_key##", $passenger_log_id, $message);
                    //$result = file_get_contents("http://s1.freesmsapi.com/messages/send?skey=b5cedd7a407366c4b4459d3509d4cebf&message=".urlencode($message)."&senderid=NAJIK&recipient=$to");
                }
                /* *************************** Mail send to Passenger **************    */
                $to                = $passenger_log_details[0]['passenger_email'];
                $name              = $passenger_log_details[0]['passenger_name'];
                $orderlist         = '';
                $orderlist         = '<p><b>' . __('complete_from') . '</b><br />' . __('complete_from1') . '' . $passenger_log_details[0]['current_location'] . ' <br /> To : ' . $passenger_log_details[0]['drop_location'] . '</p>' . '<p>' . __('cancel_date') . $this->currentdate . '</p>' . '<p>' . __('total_cost') . ':' . CURRENCY . ' ' . $values['total_fare'] . '</p>' . '<p>' . __('transactionid_label') . ': ' . $paymentresponse['TRANSACTIONID'] . '</p>';
                $mail              = "";
                $replace_variables = array(
                    REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                    REPLACE_SITENAME => COMPANY_SITENAME,
                    REPLACE_USERNAME => $name,
                    REPLACE_EMAIL => $to,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => CONTACT_EMAIL,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_ORDERID => $paymentresponse['TRANSACTIONID'],
                    REPLACE_ORDERLIST => $orderlist,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
				}
                $from              = CONTACT_EMAIL;
                $subject           = __('payment_made_successfully');
                $redirect          = 'no';
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
                //Message::success("Payment has been completed succcessfully");
                return 1;
            } else {
                $message = $_SESSION['paymentresponse']['L_LONGMESSAGE0'];
                return 0;
            }
        } else {
            //set cancel message
            Message::success(__("payment_cancelled"));
        }
    }
	public function action_childlist()
    {
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
		//print "<pre>";
		//print_r($this->session);exit;
        $userid                 = $this->session->get('id');
        $id                     = $userid;
        $usrid                  = $id = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles             = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts            = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $id                     = $userid;
        
        $childlistcount = $passengers->get_passenger_childlist_count($id,'');
		
        //print_r($all_creditcard_details);exit;
        //print_r($passengers_all_total_compl_trans[0]['co_nt']);
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset      = REC_PER_PAGE * ($page_no - 1);
        $pag_data    = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $childlistcount,
            'view' => 'pagination/punbb'
        ));
		
        $childlist = $passengers->get_passenger_childlist($id,'',$offset,REC_PER_PAGE,''); // added 0 param
        $view                          = View::factory(USERVIEW . 'childlist')->bind('validator', $_POST)->bind('errors', $errors)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('childlist', $childlist)->bind('pag_data', $pag_data)->bind('offset', $offset)->bind('userid', $userid);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
	
	public function action_addchild()
    {
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid              = $this->session->get('id');
        $email               = $this->session->get('email');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
		
		/*** Dashboard Style & Scripts ***/
        $dashstyles          = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts         = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $submit_child_details = arr::get($_REQUEST, 'submit_child_details');
		
		$account_types = $passengers->getChildAccounts($this->lang);
		
        if ($submit_child_details && Validation::factory($_POST)) {
            $validator_child_details = $passengers->send_request_validation(arr::extract($_POST, array(
				'parent_id',
                'account_type',
				'name',
                'phone',
                'email',                
                'allow_creditcard',
				'trip_alert'
            )));
            
            if ($validator_child_details->check()) {
				$api                 = Model::factory('mobileapi115');
				$account_type = $_POST['account_type'];
				$passenger_id = $_POST['parent_id'];
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$code = isset($_POST['country_code'])?$_POST['country_code']:'';
				$email = $_POST['email'];
				$allow = 0;
				$alert = 0;
				if(isset($_POST['allow_creditcard'])) {
					$allow = $_POST['allow_creditcard'];	
				}
				if(isset($_POST['trip_alert'])) {
					$alert = $_POST['trip_alert'];	
				}
				$phone_exist = $api->check_phone_passengers_register_check($phone);
				
				if($phone_exist == 1){
					$requested = $api->requestedCheck($phone,$passenger_id);
					
					$alreadyExist = $api->alreadyExist($passenger_id,$phone,$email);
					
					if($alreadyExist == 0) {
						if($requested == 0) {
							$requestDetails = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$phone_exist);	
							$pushmessage           = array(
								"message" => str_replace("%s",$name,__('sent_child_account')),
								"parent_id" => $passenger_id,
								 "status" => 1
							);
							$get_passenger_details = $api->get_passenger_details($phone, 1);
							$parentInfo = $this->commonmodel->getParent($passenger_id);
							$username   = $parentInfo['name'].' '.$parentInfo['lastname'];
							
							$notify = App::helper('notifications');
							$notify->setSender($userid);
							$notify->setReceiver($get_passenger_details[0]['_id']);
							$notify->setMessage('');
							$notify->setRequestId($requestDetails);
							$notify->setNotificationType(1);
							$notify->sendNotification();
							
							if(isset($get_passenger_details[0]['device_token']) && isset($get_passenger_details[0]['device_type'])) {
								$p_device_token    = $get_passenger_details[0]['device_token'];
								$p_device_type     = $get_passenger_details[0]['device_type'];
								//$p_send_notification = $api->send_passenger_mobile_pushnotification($p_device_token,$p_device_type,$pushmessage,$this->customer_google_api);
							}
							$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_PARENTID=>$username,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP);									
							$from     = $this->siteemail;
							if ($this->lang != 'en') {
								if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/send_request-' . $this->lang . '.html')) {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/send_request-' . $this->lang . '.html', $replace_variables);
								} else {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'send_request.html', $replace_variables);
								}
							} else {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'send_request.html', $replace_variables);
							}
							$subject = __('add_child_request')." - ".'taxi';
							$to = $email;	
							if(SMTP == 1) {
								include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
							} else {
								$headers  = 'MIME-Version: 1.0' . "\r\n";
								$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								$headers .= 'From: '.$from.'' . "\r\n";
								$headers .= 'Bcc: '.$to.'' . "\r\n";
								mail($to,$subject,$message,$headers);	
							}
							Message::success(__('sent_child_account_success'));
						} else {
							Message::success(__('already_request_got'));
						}
					} else {
						Message::success(__('already_request_sent'));
					}
					$this->request->redirect("/passengers/childlist");		
				}else if($phone_exist == 0){
					
					$check_user_status = 2;
					$alreadyExist = $api->alreadyExist($passenger_id,$phone,$email);
					if($alreadyExist == 0) {
						$requestDetails = $api->insert_child_request($account_type,$passenger_id,$name,$phone,$email,$check_user_status);	
						$otp                = text::random($type = 'numeric', $length = 4);
						$acc_details_result = $api->add_cp_account($_POST, $otp, 1);
						if ($acc_details_result) {
							$mail="";
							$parentInfo = $this->commonmodel->getParent($passenger_id);
							
							$username   = $parentInfo['name'].' '.$parentInfo['lastname'];
							$updateChild = $api->update_child($passenger_id);
							
							$replace_variables=array(REPLACE_LOGO=>URL_BASE.PUBLIC_FOLDER_IMGPATH.'/logo.png',REPLACE_SITENAME=>$this->app_name,REPLACE_USERNAME=>'',REPLACE_OTP=>$otp,REPLACE_SITELINK=>URL_BASE.'users/contactinfo/',REPLACE_SITEEMAIL=>$this->siteemail,REPLACE_SITEURL=>URL_BASE,REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP,REPLACE_PARENTID=>$username,REPLACE_COPYRIGHTS=>SITE_COPYRIGHT,REPLACE_ACTLINK=>URL_BASE.'passengers/activate_account/?phone='.$phone.'&otp='.base64_encode($otp));									
							$from     = $this->siteemail;
							if ($this->lang != 'en') {
								if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/child_registration_web' . $this->lang . '.html')) {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/child_registration_web-' . $this->lang . '.html', $replace_variables);
								} else {
									$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'child_registration_web.html', $replace_variables);
								}
							} else {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'child_registration_web.html', $replace_variables);
							}
							$subject = __('add_child_request')." - ".'taxi';;
							$to = $email;	
							if(SMTP == 1) {
								include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
							} else {
								$headers  = 'MIME-Version: 1.0' . "\r\n";
								$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								$headers .= 'From: '.$from.'' . "\r\n";
								$headers .= 'Bcc: '.$to.'' . "\r\n";
								mail($to,$subject,$message,$headers);	
							}
							
							if (SMS == 1) {
								$message_details = $this->commonmodel->sms_message_by_title('add_child_request');
								$to              = $code.$phone;
								$message         = $message_details['sms_description'];
								$message         = str_replace("##VERIFY_CODE##", $otp, $message);
								$message         = str_replace("##PARENTID##", $name, $message);
								$message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
								$message         = str_replace("##SITEURL##", URL_BASE, $message);
								$message         = str_replace("##ANDROID_PASSENGER_APP##", ANDROID_PASSENGER_APP, $message);
								$message         = str_replace("##IOS_PASSENGER_APP##", IOS_PASSENGER_APP, $message);
								$result          = $api->sendSms($to, $message);										
							}
							$message = __('child_details_success');
						} else {
							$message = __('try_again');
						}
					} else {
						Message::success(__('already_request_sent'));
					}
					Message::success(__('sent_child_account_success'));
					$this->request->redirect("/passengers/childlist");
				} else{
					Message::success(__('sent_child_account_fail'));
					$this->request->redirect("/passengers/childlist");
				}      
            } else {                
                $errors = $validator_child_details->errors('errors');
            }
			
        }
        $user                          = $passengers->get_passenger_profile_details($userid);
        $view                          = View::factory(USERVIEW . 'addchild')->bind('validator', $_POST)->bind('errors', $errors)->bind('usrid', $userid)->bind('creditcard_valid', $creditcard_invalid)->bind('date_invalid', $date_invalid)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('user', $user)->bind('account_types',$account_types)->bind('data', $_POST);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
	
    public function action_paymentoption()
    {
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid                 = $this->session->get('id');
        $id                     = $userid;
        $usrid                  = $id = $userid;
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles             = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts            = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $id                     = $userid;
        $card_type              = "";
        $default                = 'no';
        //all Completed Status with transaction
        $all_creditcard_details = $passengers->get_all_creadit_card($id);
        //print_r($all_creditcard_details);exit;
        //print_r($passengers_all_total_compl_trans[0]['co_nt']);
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
			$offset      = REC_PER_PAGE * ($page_no - 1);
			$pag_data    = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $all_creditcard_details,
            'view' => 'pagination/punbb'
        ));
        $carddetails = $passengers->get_creadit_card_details($id, $card_type, $default);
        // print_r($result);
        $update_post = arr::get($_REQUEST, 'update');
        $post        = array();
        if ($update_post) {
            if (isset($_REQUEST['default_card'])) {
                $post                = $_REQUEST;
                $id                  = $post['default_card'];
                $update_default_card = $passengers->update_default_card($id,$userid);
                if ($update_default_card == 1) {
                    Message::success(__('default_card_updated_success'));
                    $this->request->redirect("passengers/paymentoption");
                } else {
                    Message::error(__('not_updated'));
                    $this->request->redirect("passengers/paymentoption");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("passengers/paymentoption");
            }
        }
        $view                          = View::factory(USERVIEW . 'paymentoption')->bind('validator', $_POST)->bind('errors', $errors)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('carddetails', $carddetails)->bind('pag_data', $pag_data)->bind('offset', $offset)->bind('userid', $userid);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /* Add the Card Details by Passenger */
    public function action_addcard()
    {
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid              = $this->session->get('id');
        $email               = $this->session->get('email');
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        /*** Dashboard Style & Scripts ***/
        $dashstyles          = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts         = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $submit_card_details = arr::get($_REQUEST, 'submit_card_details');
        if ($submit_card_details && Validation::factory($_POST)) {
            //print_r($_POST); exit;
            $validator_card_details = $passengers->validate_card_details(arr::extract($_POST, array(
                'card_type',
                'org_creditcard_no',
                'org_creditcard_cvv',
                'expdatemonth',
                'expdateyear'
            )));
            $creditcard_no          = $_POST['org_creditcard_no'];
            $creditcard_cvv         = $_POST['org_creditcard_cvv'];
            $expdatemonth           = $_POST['expdatemonth'];
            $expdateyear            = $_POST['expdateyear'];
            $array                  = array(
                'creditcard_no' => $creditcard_no,
                'creditcard_cvv' => $creditcard_cvv,
                'expdatemonth' => $expdatemonth,
                'expdateyear' => $expdateyear
            );
            //$creditcard_valid = $passengers->authorize_creditcard($array);
            $card_exist             = $passengers->check_card_exist($creditcard_no, $userid);
            $authorize_status       = $passengers->isVAlidCreditCard($creditcard_no, "", true);
	    $authorize_status       = 1; //To be removed in Phase 2
            if ($validator_card_details->check()) {
                $month              = date('m');
                $year               = date('Y');
                $cur_date           = $year . $month;
                $sel_date           = $expdateyear . $expdatemonth;
                $creditcard_invalid = "";
                if ($cur_date >= $sel_date) {
                    $date_invalid = __("date_invalid");
                } else if ($authorize_status == 0) {
                    $creditcard_invalid = __("creditcard_invalid");
                } else if ($card_exist > 0) {
                    $creditcard_invalid = __("card_exist");
                } else {
                    $result = $passengers->add_carddata($validator_card_details, $userid, $email);
                    Message::success(__('card_details_success'));
                    $this->request->redirect("/passengers/paymentoption");
                }
            } else {
                //validation failed, get errors
                $errors = $validator_card_details->errors('errors');
            }
        }
        $user                          = $passengers->get_passenger_profile_details($userid);
        $view                          = View::factory(USERVIEW . 'addcard')->bind('validator', $_POST)->bind('validator_changepass', $validator_changepass)->bind('oldpass_error', $oldpass_error)->bind('same_pw', $same_pw)->bind('errors', $errors)->bind('usrid', $userid)->bind('creditcard_valid', $creditcard_invalid)->bind('date_invalid', $date_invalid)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('user', $user)->bind('data', $_POST);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    /* Add the Card Details by Passenger end*/
    /* Add the Card Details by Passenger */
    public function action_editcard()
    {
        $card_id    = $this->request->param('id');
        $passengers = Model::factory('passengers');
        /*To set errors in array if errors not set*/
        $errors     = array();
        /*checks if user logged or not*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid              = $this->session->get('id');
        $email               = $this->session->get('email');
        /*** Dashboard Style & Scripts ***/
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles          = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts         = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $card_details        = $passengers->get_card_details($card_id,$userid);
        //echo '<pre>';print_r($card_details);exit;
        $submit_card_details = arr::get($_REQUEST, 'submit_card_details');
        if ($submit_card_details && Validation::factory($_POST)) {
            //print_r($_POST); exit;
            $validator_card_details = $passengers->validate_card_details(arr::extract($_POST, array(
                'card_type',
                'org_creditcard_no',
                'org_creditcard_cvv',
                'expdatemonth',
                'expdateyear'
            )));
            $creditcard_no          = $_POST['org_creditcard_no'];
            $creditcard_cvv         = $_POST['org_creditcard_cvv'];
            $expdatemonth           = $_POST['expdatemonth'];
            $expdateyear            = $_POST['expdateyear'];
            $array                  = array(
                'creditcard_no' => $creditcard_no,
                'creditcard_cvv' => $creditcard_cvv,
                'expdatemonth' => $expdatemonth,
                'expdateyear' => $expdateyear
            );
            //$creditcard_valid = $passengers->authorize_creditcard($array);
            $authorize_status       = $passengers->isVAlidCreditCard($creditcard_no, "", true);
	    $authorize_status       = 1; // To be removed as in Phase 2, added based on client request
            if ($validator_card_details->check()) {
                $month              = date('m');
                $year               = date('Y');
                $cur_date           = $year . $month;
                $sel_date           = $expdateyear . $expdatemonth;
                $creditcard_invalid = "";
                if ($cur_date >= $sel_date) {
                    $date_invalid = __("date_invalid");
                } else if ($authorize_status == 0) {
                    $creditcard_invalid = __("creditcard_invalid");
                } else {
                    $result = $passengers->edit_carddata($validator_card_details, $userid, $card_id, $email);
                    Message::success(__('card_details_update_success'));
                    $this->request->redirect("/passengers/paymentoption");
                }
            } else {
                //validation failed, get errors
                $errors = $validator_card_details->errors('errors');
            }
        }
        $user                          = $passengers->get_passenger_profile_details($userid);
        $view                          = View::factory(USERVIEW . 'editcard')->bind('validator', $_POST)->bind('validator_changepass', $validator_card_details)->bind('errors', $errors)->bind('usrid', $userid)->bind('creditcard_valid', $creditcard_invalid)->bind('date_invalid', $date_invalid)->bind('dashstyles', $dashstyles)->bind('dashscripts', $dashscripts)->bind('card_details', $card_details)->bind('data', $_POST);
        $this->template->content       = $view;
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
    }
    public function action_deletecard(){
		$card_id    = $this->request->param('id');
		$userid              = $this->session->get('id');
		$passengers = Model::factory('passengers');
		$result = $passengers->delete_carddata($card_id, $userid);
		if ($result == 1) {
			Message::success(__('card_details_delete_success'));
			$this->request->redirect("/passengers/paymentoption");
		}
	}
    public function action_tell_to_friend()
    {
        $email   = $_GET['email'];
        $message = $_GET['message'];
        /*To set errors in array if errors not set*/
        $this->is_login();
        $this->is_login_status();
        //$this->session = Session::instance();
        $userid = $this->session->get('id');
        $name   = $this->session->get('name');
        if (($userid != null) && ($email != null)) {
            $subject           = __('telltofrien_subject');
            $replace_variables = array(
                REPLACE_LOGO => EMAILTEMPLATELOGO,
                REPLACE_SITENAME => COMPANY_SITENAME,
                REPLACE_NAME => $name,
                REPLACE_EMAIL => $email,
                REPLACE_SUBJECT => $subject,
                REPLACE_MESSAGE => $message,
                REPLACE_SITEEMAIL => CONTACT_EMAIL,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            );
            //print_r($replace_variables);exit;
            //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
			if ($this->lang != 'en') {
				if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html')) {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/telltofriend-' . $this->lang . '.html', $replace_variables);
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
				}
			} else {
				$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'telltofriend.html', $replace_variables);
			}
            //echo $message; exit;
            $from              = CONTACT_EMAIL;
            $to                = $email;
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
        }
        echo 1;
        Message::success(__('msg_send_success'));
        exit;
    }
	
	public function action_activate_account()
    {
		$passengers  = Model::factory('passengers');
        $api         = Model::factory('mobileapi115');
        $errors      = array();
		$post_values = array();
        $phone       = isset($_GET['phone']) ? $_GET['phone'] : '';
		$otp         = isset($_GET['otp']) ? $_GET['otp'] : '';
		$otp         = base64_decode($otp);
		$signup_submit = arr::get($_REQUEST, 'submit');
		if ($signup_submit && Validation::factory($_REQUEST)) {
			$post_values = $_REQUEST;
			$validator = $passengers->validate_activate($_REQUEST);
            if ($validator->check()) {
                $passInfo = $api->update_passenger_data($_REQUEST);
				if (!empty($passInfo)) {
						$notify = App::helper('notifications');
						$notify->setSender($passInfo['_id']);
						$notify->setReceiver($passInfo['parent_id']);
						$notify->setMessage('');		
						$notify->setNotificationType(2);
						$notify->sendNotification();
						
						$replace_variables = array(
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => COMPANY_SITENAME,
                            REPLACE_USERNAME => $passInfo['name'],
                            REPLACE_MOBILE => $passInfo['phone'],
                            REPLACE_PASSWORD => $passInfo['org_password'],
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_SITEEMAIL => CONTACT_EMAIL,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR,
                            REPLACE_ANDROID_PASSENGER_APP => ANDROID_PASSENGER_APP,
                            REPLACE_IOS_PASSENGER_APP => IOS_PASSENGER_APP
                        );                        
						if ($this->lang != 'en') {
							if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html')) {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver-register-' . $this->lang . '.html', $replace_variables);
							} else {
								$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
							}
						} else {
							$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver-register.html', $replace_variables);
						}
						$to                = $passInfo['email'];
                        $from              = CONTACT_EMAIL;
                        $subject           = __('activation_confirmation_subject') . " - " . COMPANY_SITENAME;
                        $redirect          = "";
                        if (SMTP == 1) {
                            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                        } else {
                            $headers = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $headers .= 'From: ' . $from . '' . "\r\n";
                            $headers .= 'Bcc: ' . $to . '' . "\r\n";
                            mail($to, $subject, $message, $headers);
                        }
                    Message::success(__('account_activated'));
                    $this->request->redirect("/");
                }
            } else {
                $errors = $validator->errors('errors');				
            }			
		}
        if (!empty($phone) && !empty($otp)) {
            $passengers     = Model::factory('passengers');
			if ($phone) {
                $view = View::factory(USERVIEW . 'activate')->bind('phone', $phone)->bind('potp', $otp)->bind('errors',$errors)->bind('postvalue', $post_values);
            } else {
                Message::success(__('wrong_activation'));
                $this->request->redirect("/");
            }			
        } else {
            $this->request->redirect("/");
        }
		
			
        $this->template->meta_desc     = $this->meta_description;
        $this->template->meta_keywords = $this->meta_keywords;
        $this->template->title         = $this->title;
        $this->template->content       = $view;
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
    public function action_invoice()
    {
        $this->is_login();
        $this->is_login_status();
        $userid = $this->session->get('id');
        /*** Dashboard Style & Scripts ***/
		if($this->lang == 'en') {
			$charisma = 'charisma-app';
		} else {
			$charisma = 'charisma-app-arabic';	
		}
        $dashstyles          = array(
            CSSPATH . 'dashboard/bootstrap-responsive.css' => 'screen',
            CSSPATH . 'dashboard/'.$charisma.'.css' => 'screen',
            CSSPATH . 'dashboard/jquery-ui-1.8.21.custom.css' => 'screen',
            CSSPATH . 'dashboard/chosen.css' => 'screen',
            CSSPATH . 'dashboard/uniform.default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.noty.css' => 'screen',
            CSSPATH . 'dashboard/noty_theme_default.css' => 'screen',
            CSSPATH . 'dashboard/jquery.iphone.toggle.css' => 'screen',
            CSSPATH . 'dashboard/opa-icons.css' => 'screen'
        );
        $dashscripts         = array(
            SCRIPTPATH . 'dashboard/jquery-ui-1.8.21.custom.min.js',
            SCRIPTPATH . 'dashboard/bootstrap-transition.js',
            SCRIPTPATH . 'dashboard/bootstrap-alert.js',
            SCRIPTPATH . 'dashboard/bootstrap-modal.js',
            SCRIPTPATH . 'dashboard/bootstrap-dropdown.js',
            SCRIPTPATH . 'dashboard/bootstrap-scrollspy.js',
            SCRIPTPATH . 'dashboard/bootstrap-tab.js',
            SCRIPTPATH . 'dashboard/bootstrap-tooltip.js',
            SCRIPTPATH . 'dashboard/bootstrap-popover.js',
            SCRIPTPATH . 'dashboard/bootstrap-button.js',
            SCRIPTPATH . 'dashboard/bootstrap-collapse.js',
            SCRIPTPATH . 'dashboard/bootstrap-tour.js',
            SCRIPTPATH . 'dashboard/jquery.cookie.js',
            SCRIPTPATH . 'dashboard/jquery.dataTables.min.js',
            SCRIPTPATH . 'dashboard/jquery.chosen.min.js',
            SCRIPTPATH . 'dashboard/jquery.noty.js',
            SCRIPTPATH . 'dashboard/jquery.iphone.toggle.js',
            SCRIPTPATH . 'dashboard/jquery.history.js',
            SCRIPTPATH . 'dashboard/charisma.js',
            SCRIPTPATH . 'highcharts.js'
        );
        $commonmodel = Model::factory('commonmodel');
        
        if($userid != '')
        {
            if (isset($_GET['_id']))
            {
                $id = $_GET['_id'];
                //$mobile = Controller::factory('mobile101');
                $invoice_pay = $commonmodel->select_all('invoice_schedule_trip', array('_id'=>(int)$id),array());
                //print_r($invoice_pay); die();
                if( count($invoice_pay) > 0 )
                {
                    $param = array('amt'=>$invoice_pay[0]['amount'], '_id'=>$invoice_pay[0]['_id'],'passenger_id'=>$invoice_pay[0]['passenger_id'],'from'=>'schedule');
                    $hes = $commonmodel->hasabe_auth($param);
                    if($hes->status == 'success')
                    {
                        $url = $hes->data->paymenturl.$hes->data->token;
                        $this->request->redirect($url);
                        die();
                    }
                }
                else{
                    echo "Oops No Invoice Found."; die();
                }
                die();
                
            }
            $invoice    = $commonmodel->select_all('invoice_schedule_trip',array('passenger_id'=>$userid),array());
            $view   = View::factory(USERVIEW.'scheduletrip_invoice')
                    ->bind('inv_details',$invoice)->bind('dashstyles', $dashstyles)
                    ->bind('dashscripts', $dashscripts);
            $this->content = $view;
            $this->template->meta_desc     = $this->meta_description;
            $this->template->meta_keywords = $this->meta_keywords;
            $this->template->title         = $this->title;
            $this->template->content       = $view;
           // print_r($invoice); die();
        }
        else
        {
            Message::error(__('login_access'));
            $this->request->redirect("/");
        }
        
        
    }
    
}
