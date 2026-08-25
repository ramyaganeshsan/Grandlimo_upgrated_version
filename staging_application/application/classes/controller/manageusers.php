<?php defined('SYSPATH') or die('No direct script access.');
/****************************************************************
* Contains User Management(Users)details
* @Author: NDOT Team
* @URL : http://www.ndot.in
********************************************************************/
class Controller_Manageusers extends Controller_Siteadmin
{
    /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->is_login();
        $this->manage_model   = Model::factory('manage');
        $this->add_model      = Model::factory('add');
		$this->admin_model    = Model::factory('admin');
		$this->site_model     = Model::factory('site');
		$this->api            = Model::factory('mobileapi115');
		$this->id             = $this->session->get('id');
        $this->userid         = $this->session->get('userid');
		$this->usertype       = $this->session->get('user_type');
		$this->company_id     = $this->session->get('company_id');
		$this->customer_google_api = CUS_ANDROID_KEY; 

		//Models
		$this->admin_model    = Model::factory('admin');
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
	 /**
     * ****action_index()****
     * @return people listings  view with pagination
     */
    public function action_index()
    {
		
        //Page Title
        $this->page_title          = __('menu_user_list');
        $this->selected_page_title = __('menu_user_list');
        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        if ($this->usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $count_user_list            = $this->admin_model->all_user_list('','',true);
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - PAGE_NO);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ));
        $all_user_list              = $this->admin_model->all_user_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        
        $view                       = View::factory('admin/admin_user_list')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('srch', $_POST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $this->template->content    = $view;
        
    }
	/**
     * ****action_search()****
     * @param 
     * @return search user listings
     */
    public function action_search()
    {
        //Page Title
        $this->page_title          = __('menu_user_list');
        $this->selected_page_title = __('menu_user_list');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
			$usertype = trim(Html::chars($_REQUEST['user_type']));
			if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($usertype)){
				$count_user_list           = $this->admin_model->get_all_search_list($keyword, $usertype, $status,'','',true);
				//pagination loads here
				//-------------------------
				$page_no = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
				$offset      = REC_PER_PAGE * ($page_no - 1);
				$pag_data    = Pagination::factory(array(
					'current_page' => array(
						'source' => 'query_string',
						'key' => 'page'
					),
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_user_list,
					'view' => 'pagination/punbb'
				));
				$all_user_list = $this->admin_model->get_all_search_list($keyword, $usertype, $status, $offset, REC_PER_PAGE);
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manageusers/index');
			}
        }
        //set data to view file	
        $view                    = View::factory('admin/admin_user_list')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_user_list', $all_user_list);
        $this->template->content = $view;
    }
	public function action_block_users_request()
    {
        $this->is_login();
        $status   = $this->site_model->block_users_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/index");
    }
    public function action_active_users_request()
    {
        $this->is_login();        
        $status   = $this->site_model->active_users_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
		if($status == 1){
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/index");
    }
    public function action_trash_users_request()
    {
        $this->is_login();
        $status   = $this->site_model->trash_users_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been moved to the Trash..'));
		} else {
			Message::error($status);
		}
        
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/index");
    }
    public function action_delete_users_request()
    {
        $this->is_login();
        $status   = $this->site_model->delete_users_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
		if($status == 1){
			Message::success(__('Checked requests have been deleted successfully'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/index");
    }
    public function action_history()
    {
        if ($this->usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        //$siteusers = Model::factory('siteusers');
        $UserList                   = $this->authorize->user_list();
        $count_user_list            = $this->authorize->count_user_list_history();
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ));
        $all_user_list              = $this->authorize->all_user_list_history($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/admin_user_list_history')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('UserList', $UserList)->bind('srch', $_POST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | Users History";
        $this->template->page_title = "Users History";
        $this->template->content    = $view;
    }
    /** passenger list **/
    public function action_passengers()
    {
        //Page Title
        $this->page_title          = __('menu_manage_passengers');
        $this->selected_page_title = __('menu_manage_passengers');
        if ($this->usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $count_user_list            = $this->admin_model->all_passenger_list('','',true);
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ));
        $all_user_list              = $this->admin_model->all_passenger_list($offset, REC_PER_PAGE);
        $all_companies             = $this->manage_model->get_allcompany('A');
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/passengers_list')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('ListCount', $count_user_list)->bind('all_companies', $all_companies)->bind('srch', $_POST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | Passengers List";
        $this->template->page_title = "Passengers List";
        $this->template->content    = $view;
    }
	/** passengers list **/
    public function action_passenger_search()
    {
		
        //Page Title
        $this->page_title          = __('menu_manage_passengers');
        $this->selected_page_title = __('menu_manage_passengers');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
		//Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
            $company = trim(Html::chars($_REQUEST['filter_company']));
			$customer_type = trim(Html::chars($_REQUEST['customer_type']));
			//if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($company) || !empty($customer_type)){
				$count_user_list           = $this->admin_model->get_all_searchpassenger_list($keyword,$status ,$company,$customer_type,'','',true);
				$all_companies            = $this->manage_model->get_allcompany();
				//pagination loads here
				//-------------------------
				$page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
				$offset      = REC_PER_PAGE * ($page_no - 1);
				$pag_data    = Pagination::factory(array(
					'current_page' => array(
						'source' => 'query_string',
						'key' => 'page'
					),
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_user_list,
					'view' => 'pagination/punbb'
				));
				$all_user_list = $this->admin_model->get_all_searchpassenger_list($keyword,$status ,$company,$customer_type,$offset, REC_PER_PAGE);
               // print_r($all_user_list);exit;
			// } else {
			// 	Message::error('Your search keyword must not be empty');
			// 	$this->request->redirect('manageusers/passengers');
			// }
        }
        //set data to view file	
        $view                    = View::factory('admin/passengers_list')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_companies', $all_companies)->bind('ListCount',$count_user_list)->bind('all_user_list', $all_user_list);
        $this->template->content = $view;
    }
    /** block passenger list**/
    public function action_block_passenger_request()
    {
        $this->is_login();
        
        $status   = $this->site_model->block_passenger_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/passengers"); //transaction/index
    }
    /** actvie passenger list**/
    public function action_active_passenger_request()
    {
        $this->is_login();
        
        $status   = $this->site_model->active_passenger_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/passengers"); //transaction/index
    }
    /** trash passenger list**/
    public function action_trash_passenger_request()
    {
        $this->is_login();
        
        $status   = $this->site_model->trash_passenger_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been moved to the Trash..'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/passengers");
    }
    /** delete passenger list**/
    public function action_delete_passenger_request()
    {
        $this->is_login();
        
        $status   = $this->site_model->delete_passenger_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been deleted successfully'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/passengers");
    }
    
    /**
     * ****action_export()****
     * @param 
     * @return functionality for csv export
     */
    public function action_export()
    {
        //import admin model
        $admin                   = Model::factory('admin');
        //export csv data retrieved here
        $UserList                = $admin->user_list();
        $list                    = $admin->export_data($_REQUEST['keyword'], $_REQUEST['type'], $_REQUEST['status']);
        //set data to view file
        $view                    = View::factory('admin/admin_user_list')->bind('UserList', $UserList);
        $this->template->content = $view;
    }
    
    
    //live users list
    public function action_live_users()
    {
        //Page Title
        $this->page_title           = __('live_passengers');
        $this->selected_page_title  = __('live_passengers');
        //$this->is_login();		
        $id                         = $this->session->get('id');
        $userid                     = $this->session->get('userid');
        $usrid                      = isset($userid) ? $userid : $id;
        $usertype                   = $_SESSION['user_type'];
        /*if($usertype =='C')
        {
        $this->request->redirect("company/login");
        } 
        if($usertype =='M')
        {
        $this->request->redirect("manager/login");
        }*/
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        //import model
        $admin_user                 = Model::factory('authorize');
        //$siteusers = Model::factory('siteusers');
        /*$UserList = $admin_user->user_list();
        $count_user_list = $admin_user->count_user_list();*/
        $cid                        = $_SESSION['company_id'];
        $keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : "";
        $activeusers_list_count     = $this->admin_model->all_users_list($keyword, NULL,NULL,$cid,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - PAGE_NO);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $activeusers_list_count,
            'view' => 'pagination/punbb'
        ));
        $all_user_list              = $this->admin_model->all_users_list($keyword, $offset, REC_PER_PAGE, $cid, FALSE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/admin_live_user_list')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('UserList', $UserList)->bind('srch', $_POST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('live_passengers');
        $this->template->page_title = __('live_passengers');
        $this->template->content    = $view;
    }
    //live users search
    public function action_live_users_search()
    {
        //Page Title
        $this->page_title          = __('live_users');
        $this->selected_page_title = __('live_users');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        $admin                     = Model::factory('admin');
        $UserList                  = $admin->live_usersearch_list(trim(Html::chars($_REQUEST['keyword'])));
        $count_user_list           = $admin->count_live_usersearch_list(trim(Html::chars($_REQUEST['keyword'])));
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset      = REC_PER_PAGE * ($page_no - 1);
        $pag_data    = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_user_list = $admin->get_all_live_search_list(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/admin_live_user_list')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_user_list', $all_user_list);
        $this->template->content = $view;
    }
    /** passenger list **/
    public function action_passengerspromo()
    {
        //Page Title
        $this->page_title          = __('passengerspromo');
        $this->selected_page_title = __('passengerspromo');
        /*if($usertype =='C')
        {
        $this->request->redirect("company/login");
        } */
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        $passengersCnt              = $this->manage_model->getpassengerscount($this->company_id);
        if ($passengersCnt == 0) {
            Message::error(__('no_passenger_to_send_promocode'));
            $this->request->redirect("manage/promocode");
        }
        $count_user_list            = $this->authorize->all_passenger_list_history(NULL, NULL, TRUE);
        //exit;
        //****pagination ends here***//
        $taxicompany_details        = $this->add_model->taxicompany_details();
        $avail_package        = $this->manage_model->avail_package();
       //echo '<pre>';print_r($avail_package);exit;
        //send data to view file 

        /* Sasidharan Nov 15 2022 */
        $corporateModal   = Model::factory('corporate');
        $corporateGroups = $corporateModal->get_all_corporate_groups();

        /* Sasidharan Nov 15 2022 bind corporateGroups */
        $view                       = View::factory('admin/passengers_promo')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $count_user_list)->bind('pag_data', $pag_data)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_POST)->bind('company_id', $this->company_id)->bind('Offset', $offset)->bind('avail_package',$avail_package)->bind("corporateGroups", $corporateGroups);
        $this->template->title      = SITENAME . ' ' . __('passengerspromo');
        $this->template->page_title = __('passengerspromo');
        $this->template->content    = $view;
    }
    public function action_getuserslist()
    {
        $manage = Model::factory('manage');
        echo $manage->getuserslist($_GET['company_id']);
        exit;
    }
    public function action_sendpromocode()
    {
        $id         = $this->session->get('id');
        $userid     = $this->session->get('userid');
        $usrid      = isset($userid) ? $userid : $id;
        //company id from session
        $company_id = $this->session->get('company_id');
        $usertype   = $_SESSION['user_type'];
        /*if($usertype =='C')
        {
        $this->request->redirect("company/login");
        } */
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $search_post                = $_POST;
        $mail_type                  = $_POST['mail_type'];
        $promo_code                 = $_POST['promo_code'];
        $package                 = $_POST['package'];
        $fixed_fare_amt          = isset($_POST['fixed_fare_amt'])?$_POST['fixed_fare_amt']:1;
        $user_cnt                 = $_POST['user_cnt'];
        //$promo_discount             = $_POST['promo_discount'];
        $subjects                   = $_POST['subject'];
        $content                    = $_POST['content'];
        $to_user                    = ($mail_type != 1) ? $_POST['to_user'] : '';
        $start_date                 = $_POST['start_date'];
        $expire_date                = $_POST['expire_date'];
        $promo_limit                = $_POST['limit'];
        $promocode_exit             = $this->manage_model->check_promo_exit($promo_code, $company_id);
        $cid                        = isset($company_id)? $company_id : $_POST['company'];


        /* Sasidharan apr 15 - 2022 */
        $corporate_promocode = (isset($_POST['corporate_promocode']) && !empty($_POST['corporate_promocode'])) ? $_POST['corporate_promocode'] : 0;
        $total_airport_trips = (isset($_POST['total_airport_trips']) && !empty($_POST['total_airport_trips'])) ? $_POST['total_airport_trips'] : 0;

        /* Sasidharan june 20 - 2022 */
        $register_promocode = (isset($_POST['register_promocode']) && !empty($_POST['register_promocode'])) ? $_POST['register_promocode'] : 0;

        /* Sasidharan June 12 2024 */
        $skipCard = (isset($_POST['skipCard']) && !empty($_POST['skipCard'])) ? $_POST['skipCard'] : 0;

        /* Sasidharan july 16 2022 */
        $apply_user_limit = (isset($_POST['apply_user_limit']) && !empty($_POST['apply_user_limit'])) ? $_POST['apply_user_limit'] : 0;
        $maximum_allowed_limit = (isset($_POST['maximum_allowed_limit']) && !empty($_POST['maximum_allowed_limit'])) ? $_POST['maximum_allowed_limit'] : 0;

        /* Sasidharan Nov 15 2022 */
        $corporateGroup = (isset($_POST['corporate_group']) && !empty($_POST['corporate_group'])) ? $_POST['corporate_group'] : "";
        
        if (!empty($cid)) {
            $company_dets = $this->manage_model->getcompanydomainName($cid);
            $email_logo   = URL_BASE . SITE_LOGO_IMGPATH . '/' . $company_dets['company_domain'] . '_email_logo.png';
        } else {
            $email_logo = EMAIL_TEMPLATE_LOGO;
        }
        if ($promocode_exit == 0) {
            $res = $this->commonmodel->select_all('coupon_package',array('_id'=>(int)$package,'coupon_package_status'=>'A'),array('passenger_commission'));
            $p_c = (!empty($res))?$res[0]['passenger_commission']:'';
            if ($mail_type == 1) {
                //$passenger_list = $this->manage_model->getactive_users($cid);
                $passenger_list = array();
                $currenttime    = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                $ins_array      = array(
                            "company_id" => $cid,
                            "promocode" => $promo_code,
                            "package" => $package,
                            "fixed_fare_amt"=>(int)$fixed_fare_amt,
                            "promo_type" => $mail_type,
                            "start_date" => $start_date,
                            "expire_date" => $expire_date,
                            "promo_limit" => $promo_limit,
                            "createdate" => $currenttime,

                    /* Sasidharan apr 15 - 2022 */
                    "corporate_promocode" => $corporate_promocode,
                    "total_airport_trips" => $total_airport_trips,

                    /* Sasidharan june 20 - 2022 */
                    "register_promocode" => $register_promocode,

                    /* Sasidharan july 16 2022 */
                    "apply_user_limit" => $apply_user_limit,
                    "maximum_allowed_limit" => $maximum_allowed_limit,

                    /* Sasidharan nov 15 2022 */
                    "corporate_group" => $corporateGroup,

                    /* Sasidharan June 12 2024 */
                    "skipCard" => $skipCard
                );
                $p_insert  = $this->add_model->insert_promocode($ins_array);
                Message::success(__('promo_success'));
                $this->request->redirect("manage/promocode");
                die();
            } else {
                $passenger_list = $to_user;
            
            //echo count($passenger_list); exit;
            $bulkmessages = array();
            if (count($passenger_list) > 0) {
                foreach ($passenger_list as $values) {
                    $pdetail = explode('~', $values);
                    if (count($pdetail) > 0) {
                        $id                = $pdetail[0];
                        $email             = $pdetail[1];
                        $name              = $pdetail[2];
                        $currenttime       = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                        for($i=1; $i<=$user_cnt; $i++){
                        $insert_array      = array(
                            "corporate_id" => $id,
                            "company_id" => $cid,
                            "promocode" => $promo_code,
                            "package" => $package,
                            //"promo_discount" => $promo_discount,
                            "fixed_fare_amt"=>(int)$fixed_fare_amt,
                            "promo_used" => "0",
                            "amount_earned" => "0",
                            "start_date" => $start_date,
                            "expire_date" => $expire_date,
                            "promo_limit" => $promo_limit,
                            "createdate" => $currenttime,
                            "customer_number" => $_POST['cphone'.$i],
                            "customer_email" => $_POST['cemail'.$i],

                            /* Sasidharan apr 15 - 2022 */
                            "corporate_promocode" => $corporate_promocode,
                            "total_airport_trips" => $total_airport_trips,

                            /* Sasidharan june 20 - 2022 */
                            "register_promocode" => $register_promocode,

                            /* Sasidharan july 16 2022 */
                            "apply_user_limit" => $apply_user_limit,
                            "maximum_allowed_limit" => $maximum_allowed_limit,

                            /* Sasidharan nov 15 2022 */
                            "corporate_group" => $corporateGroup,

                            /* Sasidharan June 12 2024 */
                            "skipCard" => $skipCard
                        );
                        //Inserting to Transaction Table 
                        $promo_insert      = $this->add_model->insert_promocode($insert_array);
                        $promocode_msg     = __('promocode_msg');
                        //$code              = str_replace('##DISCOUNT##', 'discount', $promocode_msg);
                        $code              = str_replace('##PROMOCODE##', $promo_code, $promocode_msg);
                        $replace_variables = array(
                            REPLACE_LOGO => $email_logo,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => 'Customer',
                            REPLACE_MESSAGE => str_replace('\n', '', $content),
                            REPLACE_STARTDATE => $start_date,
                            REPLACE_EXPIREDATE => $expire_date,
                            REPLACE_USAGELIMIT => $promo_limit,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_PROMOCODE => $code,
                            REPLACE_SITEEMAIL => CONTACT_EMAIL, //$this->site_modelemail
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        );
						//exit;
                        $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'promocode_message.html', $replace_variables);
                       // print_r($message);
                        //exit;
                        $to                =  $_POST['cemail'.$i];//'suresh.g@ndot.in';
                        $from              = CONTACT_EMAIL; //$this->site_modelemail
                        $subject           = $subjects; //
                        $redirect          = "";
                        //echo $to;exit;
                        /*if (SMTP == 1) {
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
                        /* Send SMS */
                        
                        /*if (SMS == 1) {
                            $message_details = $this->commonmodel->sms_message_by_title('send_promocode');
                            $to              = $_POST['cphone'.$i];
                            $message         = $message_details['sms_description'];
                            $message         = str_replace("##PROMOCODE##", $promo_code, $message);
                            $message         = str_replace("##SITE_NAME##", SITE_NAME, $message);
                            $message         = str_replace("##DISCOUNT##", $p_c, $message);
                            $result = $this->api->sendSMS($to, $message);
                            //$bulkmessages[$to]  = $message;								
                        }*/
                       } //Custom Forloop
                       //$result = $this->api->sendSMSBulk($bulkmessages);	
                    } // Main IF
                }
                Message::success(__('promo_success'));
                $this->request->redirect("manage/promocode");
            } else {
                Message::error(__('no_user_to_send_promocode'));
                $this->request->redirect("manageusers/passengerspromo");
            }
            
            }
        } else {
            Message::success(__('promo_already'));
            $this->request->redirect("manage/promocode");
        }
        $this->request->redirect("manageusers/passengerspromo");
    }
    public function action_checkpromocode()
    {
        $manage            = Model::factory('manage');
        $companyId         = isset($_REQUEST["company_id"]) ? $_REQUEST["company_id"] : 0;
        $check_promo_exist = $manage->check_promo_exit($_REQUEST["promo"], $companyId);
        if ($check_promo_exist == 0) {
            echo '<span style="color:green;">' . __('promo_is_avaliable') . '</span>';
            exit;
        } else {
            echo '<span style="color:red;">' . __('promo_already') . '</span>';
            exit;
        }
    }
    public function action_getcompanypromo()
    {
        $company_id     = $_GET['company_id'];
        $manage_company = Model::factory('manage');
        $getpromocode   = $manage_company->getpromocode();
        if ($company_id != 0) {
            $company_dets = $manage_company->getcompanydomainName($company_id);
            $getpromocode = $company_dets['company_domain'] . "_" . $getpromocode;
        }
        echo $getpromocode;
        exit;
    }
    public function action_admin_pnotification()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A') {
           $this->request->redirect("admin/login");
        }
        $signup_submit = arr::get($_REQUEST, 'submit_admin_pnotification');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit) {

            $post_values        = Arr::map('trim', $this->request->post());
           
            $pushmessage['message'] = $post_values['admin_push_message'];
            $pushmessage['status'] = 13;
            $title = __('admin_push_notification');
           
            $allpassenger = $this->manage_model->get_allpassenger_details_limit();
         // echo "<pre>";print_r($allpassenger);exit();
           if(!empty($allpassenger)){
                for($j=0;$j<count($allpassenger);$j++){



                    if(isset($allpassenger[$j]) && !empty($allpassenger[$j]))
                    {

                        if(isset($allpassenger[$j]['_id']) && !empty($allpassenger[$j]['_id']))
                        {

                            if( isset($allpassenger[$j]['_id']['device_type']) && $allpassenger[$j]['_id']['device_type']!= '')
                            {

                                if($allpassenger[$j]['_id']['device_type'] ==1)
                                {

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details']))
                                    {

                                        $android_pass = array_chunk($allpassenger[$j]['details'],1000);
                                        
                                        for($i=0;$i<count($android_pass);$i++){

                                            $android_device_token = array();

                                            foreach ($android_pass[$i] as $akey => $avalue) {
                                                $android_device_token[] = $avalue['device_token'];
                                                $this->manage_model->passengers_count_update($avalue['_id']);


                                            }
	
                                            //echo "<pre>android";print_r($android_device_token);exit();
                                           $android_status = $this->api->send_passenger_mobile_pushnotification($android_device_token,1,$pushmessage,$this->customer_google_api,$title);
                                        }
                                    }
                                    

                                }
                             if($allpassenger[$j]['_id']['device_type'] == 2){

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details'])){
                        
                                        foreach ($allpassenger[$j]['details'] as $ikey => $ivalue) {
                                                if($ivalue['device_token'] != '' && $ivalue['device_token'] != NULL && strlen($ivalue['device_token']) > 30) {

                                                    $ios_device_token[] = $ivalue['device_token'];
                                                }
                                                $this->manage_model->passengers_count_update($ivalue['_id']);
                                                
                                        }
                                        $ios_status = $this->api->send_passenger_mobile_pushnotification($ios_device_token,2,$pushmessage,'',$title);

                                    }

                                }
                            }
                        }
                    }   
                    
                }
                $notification_status = $this->manage_model->admin_push_notification($pushmessage['message']);
                
                if($notification_status == 1)
                {
                    
                    Message::success(__('admin_push_notification_success'));
                    $this->request->redirect("manage/admin_pnotification");

                }
                
                
            }else{

                echo Message::error("no_passenger_avail");
                
            }
        
        }
        //send data to view file 
        $total_passengers = $this->manage_model->passengers_count_push();
        $remaining_total_passengers = $this->manage_model->passengers_uncount_push();
        
        $view                       = View::factory(ADMINVIEW . 'admin_pnotification')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('total_passengers', $total_passengers)->bind('remaining_total_passengers', $remaining_total_passengers);
        $this->template->title      = __('admin_pnotification');
        $this->template->page_title = __('admin_pnotification');
        $this->template->content    = $view;
    }

    public function action_send_pushnotification_limit()
    {
        $limit = isset($_REQUEST['limit'])?$_REQUEST['limit']:0;
        $skip = isset($_REQUEST['skip'])?$_REQUEST['skip']:0;

        $pushmessage['message'] = $post_values['admin_push_message'];
        $pushmessage['status'] = 13;
        $title = __('admin_push_notification');
           
        $allpassenger = $this->manage_model->get_allpassenger_details_limit($limit,$skip);
         // echo "<pre>";print_r($allpassenger);exit();
           if(!empty($allpassenger)){
                for($j=0;$j<count($allpassenger);$j++){

                    if(isset($allpassenger[$j]) && !empty($allpassenger[$j]))
                    {

                        if(isset($allpassenger[$j]['_id']) && !empty($allpassenger[$j]['_id']))
                        {

                            if( isset($allpassenger[$j]['_id']['device_type']) && $allpassenger[$j]['_id']['device_type']!= '')
                            {

                                if($allpassenger[$j]['_id']['device_type'] ==1)
                                {

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details']))
                                    {

                                        $android_pass = array_chunk($allpassenger[$j]['details'],1000);
                                        
                                        for($i=0;$i<count($android_pass);$i++){

                                            $android_device_token = array();

                                            foreach ($android_pass[$i] as $akey => $avalue) {
                                                $android_device_token[] = $avalue['device_token'];
                                            }
    
                                            //echo "<pre>android";print_r($android_device_token);exit();
                                           $android_status = $this->api->send_passenger_mobile_pushnotification($android_device_token,1,$pushmessage,$this->customer_google_api,$title);
                                        }
                                    }
                                }
                             if($allpassenger[$j]['_id']['device_type'] == 2){

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details'])){
                        
                                        foreach ($allpassenger[$j]['details'] as $ikey => $ivalue) {
                                                $ios_device_token[] = $ivalue['device_token'];
                                        }
                                        $ios_status = $this->api->send_passenger_mobile_pushnotification($ios_device_token,2,$pushmessage,'',$title);

                                    }
                                }
                            }
                        }
                    }   
                    
                }
                $notification_status = $this->manage_model->admin_push_notification($pushmessage['message']);
                
                if($notification_status == 1)
                {
                    
                    Message::success(__('admin_push_notification_success'));
                    $this->request->redirect("manage/admin_pnotification");

                }
                
                
            }else{

                echo Message::error("no_passenger_avail");
                
            }
    }

    public function action_p_block_passenger_request()
    {
        $this->is_login();
        
        $status   = $this->site_model->p_block_passenger_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manageusers/passengers"); //transaction/index
    }

    public function action_sent_pnotification()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A') {
           $this->request->redirect("admin/login");
        }
        $signup_submit = arr::get($_REQUEST, 'submit_admin_pnotification');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit) {

            $post_values        = Arr::map('trim', $this->request->post());

            //print_r($post_values);exit;

            $title = $post_values['push_title'];
            $sub_title = $post_values['push_sub_title'];
           
            $pushmessage['message'] = $post_values['admin_push_message'];
            $pushmessage['status'] = 13;
            //$title = __('admin_push_notification');
           
            $allpassenger = $this->manage_model->get_allpassenger_details_limit();
         // echo "<pre>";print_r($allpassenger);exit();
        //    if(!empty($allpassenger)){
                /*for($j=0;$j<count($allpassenger);$j++){



                    if(isset($allpassenger[$j]) && !empty($allpassenger[$j]))
                    {

                        if(isset($allpassenger[$j]['_id']) && !empty($allpassenger[$j]['_id']))
                        {

                            if( isset($allpassenger[$j]['_id']['device_type']) && $allpassenger[$j]['_id']['device_type']!= '')
                            {

                                if($allpassenger[$j]['_id']['device_type'] ==1)
                                {

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details']))
                                    {

                                        $android_pass = array_chunk($allpassenger[$j]['details'],1000);
                                        
                                        for($i=0;$i<count($android_pass);$i++){

                                            $android_device_token = array();

                                            foreach ($android_pass[$i] as $akey => $avalue) {
                                                $android_device_token[] = $avalue['device_token'];
                                                $this->manage_model->passengers_count_update($avalue['_id']);


                                            }
    
                                            //echo "<pre>android";print_r($android_device_token);exit();
                                           $android_status = $this->api->send_passenger_mobile_pushnotification($android_device_token,1,$pushmessage,$this->customer_google_api,$title);
                                        }
                                    }
                                    

                                }
                             if($allpassenger[$j]['_id']['device_type'] == 2){

                                    if(isset($allpassenger[$j]['details']) && !empty($allpassenger[$j]['details'])){
                        
                                        foreach ($allpassenger[$j]['details'] as $ikey => $ivalue) {
                                                if($ivalue['device_token'] != '' && $ivalue['device_token'] != NULL && strlen($ivalue['device_token']) > 30) {

                                                    $ios_device_token[] = $ivalue['device_token'];
                                                }
                                                $this->manage_model->passengers_count_update($ivalue['_id']);
                                                
                                        }
                                        $ios_status = $this->api->send_passenger_mobile_pushnotification($ios_device_token,2,$pushmessage,'',$title);

                                    }

                                }
                            }
                        }
                    }   
                    
                } */

                $form_values = Arr::extract($_POST, array('admin_push_message','push_title','push_sub_title', 'code'));
                $file_values = Arr::extract($_FILES, array('notification_image'));
                $values      = Arr::merge($form_values, $file_values);


                $validator   = $this->manage_model->validate_add_push_notification($values);
            if ($validator->check()) {

                if (!empty($_FILES['notification_image']['name'])) {

                    $image_name = uniqid() . $_FILES['notification_image']['name'];
                    $image_name = str_replace(" ","_",$image_name);
                    $image_type = explode('.', $image_name);
                    $image_type = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename   = Upload::save($_FILES['notification_image'], $image_name, DOCROOT . NOTIFY_IMG_IMGPATH);
                    //chmod($filename,'0777');
                    //Image resize and crop for thumb image
                       /* $logo_image = Image::factory($filename);
                        $path1      = DOCROOT . TAXI_IMG_IMGPATH;
                        $path       = $image_name;
                    Commonfunction::taxiimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90); */

                    $logo_image       = Image::factory($filename);
                    $path11           = DOCROOT . NOTIFY_IMG_IMGPATH.'/android/';
                    $path22           = DOCROOT . NOTIFY_IMG_IMGPATH.'/ios/';
                    $path1            = $image_name;
                    Commonfunction::imageresize($logo_image,1024,512, $path11, $image_name, 90);                    
                    Commonfunction::imageresize($logo_image, 1030, 512, $path22, $image_name, 90);//772

                    $code = isset($form_values['code']) && !empty($form_values['code']) ? $form_values['code'] : "";
                    $notification_status = $this->manage_model->admin_add_push_notification($pushmessage['message'],$image_name,$title,$sub_title,$code);

                }
                
                if($notification_status == 1)
                {
                    
                    Message::success(__('admin_push_notification_success'));
                    $this->request->redirect("manage/admin_pnotification");

                }

            // }else{

            //     $errors = $validator->errors('errors');
            //     //print_r($errors);exit;

            // }
                
                
            }else{

                echo Message::error("no_passenger_avail");
                
            }
        
        }
        //send data to view file 
        $total_passengers = $this->manage_model->passengers_count_push();
        $remaining_total_passengers = $this->manage_model->passengers_uncount_push();
        
        $view                       = View::factory(ADMINVIEW . 'sent_pnotification')->bind('errors', $errors)->bind('post_values', $post_values)->bind('total_passengers', $total_passengers)->bind('remaining_total_passengers', $remaining_total_passengers);
        $this->template->title      = __('admin_pnotification');
        $this->template->page_title = __('admin_pnotification');
        $this->template->content    = $view;
    }

    public function action_notification_status(){
        //print_r($_GET);EXIT;
        if(isset($_GET['id']) && isset($_GET['id']) != ''){

            $id = $_GET['id'];

            $status = $this->manage_model->change_notification_status($id,2);

            if($status==1){
                 Message::success(__('notification_status_update_successfully'));
                $this->request->redirect("manage/admin_pnotification");
            }

        }

        $this->request->redirect("manage/admin_pnotification");
    }

    public function action_delete_notification(){
        //print_r($_GET);EXIT;
        if(isset($_GET['id']) && isset($_GET['id']) != ''){

            $id = $_GET['id'];

            $status = $this->manage_model->delete_notification($id);

            if($status==1){
                 Message::success(' Notification delete successfully');
                $this->request->redirect("manage/admin_pnotification");
            }

        }

        $this->request->redirect("manage/admin_pnotification");
    }

    /** passenger list **/
    public function action_passengers_wallet_list()
    {
        //Page Title
        $this->page_title          = __('menu_manage_passengers_wallet');
        $this->selected_page_title = __('menu_manage_passengers_wallet');
        if ($this->usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');

        if ($_REQUEST) {
           
            $keyword = isset($_REQUEST['keyword'])?trim(Html::chars($_REQUEST['keyword'])):'';
            $customer_type = isset($_REQUEST['customer_type'])?trim(Html::chars($_REQUEST['customer_type'])):'';


            if(isset($_SESSION['download_set']))
            {
                $passenger_list = $this->admin_model->all_passenger_wallet_list($keyword,$customer_type,0,25000);
                $xls_output = $passenger_list;
                foreach($passenger_list as $key => $val)
                {   

                     $vip_user = isset($val['vip_user'])?$val['vip_user']:0;
                     if($vip_user == 1)
                     {
                        $xls_output[$key]['customer_type'] = __('vip_label');
                     }
                     else
                     {
                        $xls_output[$key]['customer_type'] = __('normal_label');
                     }

                     //echo $vip_user.'---->'.$xls_output[$key]['customer_type'].'<br>';
                    
                    if(isset($val['created_date']) && $val['created_date']!=''){
                        $xls_output[$key]['created_date'] = $val['created_date'];//Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['created_date']);
                    }else{
                        $xls_output[$key]['created_date'] = '-';
                    }
                    
                }
                //print_r($passenger_list);
                //exit;

                $export_table_header = array(__('passenger_name'),__('email'),__('passenger_phone'),__('customer_type'),__('wallet_amount'),__('created_date'));
                $export_table_field_select = array('name','email','phone','customer_type','wallet_amount','created_date');

                $heading = 'Passengers wallet';

                $total_fare='';


                $sub_heading = 'Passengers wallet';

                $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
            }

        }else{
            $keyword = $customer_type = '';
        }
        $count_user_list            = $this->admin_model->all_passenger_wallet_list($keyword,$customer_type,'','',true);
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ));
        $all_user_list              = $this->admin_model->all_passenger_wallet_list($keyword,$customer_type,$offset, REC_PER_PAGE);
        $all_companies             = $this->manage_model->get_allcompany('A');
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/passengers_wallet_list')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('ListCount', $count_user_list)->bind('all_companies', $all_companies)->bind('srch', $_GET)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | Passengers List";
        $this->template->page_title = "Passengers List";
        $this->template->content    = $view;
    }

    /* Sasidharan */
    public function action_corporate_promocode() {
        $this->page_title          = __('corporate_promocode');
        $this->selected_page_title = __('corporate_promocode');
        
        if ($this->usertype == 'M') {
            $this->request->redirect("manager/login");
        }

        $usrid                     = isset($this->userid) ? $this->userid : $this->id;
        $passengersCnt              = $this->manage_model->getpassengerscount($this->company_id);
        if ($passengersCnt == 0) {
            Message::error(__('no_passenger_to_send_promocode'));
            $this->request->redirect("manage/promocode");
        }
        $count_user_list            = $this->authorize->all_passenger_list_history(NULL, NULL, TRUE);
        $taxicompany_details        = $this->add_model->taxicompany_details();
        $avail_package        = $this->manage_model->avail_package();
       
        $view                       = View::factory('admin/corporate_promocode')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $count_user_list)->bind('pag_data', $pag_data)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_POST)->bind('company_id', $this->company_id)->bind('Offset', $offset)->bind('avail_package',$avail_package);
        $this->template->title      = SITENAME . ' ' . __('corporate_promocode');
        $this->template->page_title = __('corporate_promocode');
        $this->template->content    = $view;
    }

    public function action_sendpromocodecorporate()
    {
        $id         = $this->session->get('id');
        $userid     = $this->session->get('userid');
        $usrid      = isset($userid) ? $userid : $id;

        $company_id = $this->session->get('company_id');
        $usertype   = $_SESSION['user_type'];
        
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }

        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $search_post                = $_POST;
        $mail_type                  = $_POST['mail_type'];
        $promo_code                 = $_POST['promo_code'];
        $package                 = $_POST['package'];
        $fixed_fare_amt          = isset($_POST['fixed_fare_amt'])?$_POST['fixed_fare_amt']:1;
        $user_cnt                 = $_POST['user_cnt'];
        $subjects                   = $_POST['subject'];
        $content                    = $_POST['content'];
        $to_user                    = ($mail_type != 1) ? $_POST['to_user'] : '';
        $start_date                 = $_POST['start_date'];
        $expire_date                = $_POST['expire_date'];
        $promo_limit                = $_POST['limit'];
        $promocode_exit             = $this->manage_model->check_promo_exit_corporate($promo_code, $company_id);
        $cid                        = isset($company_id)? $company_id : $_POST['company'];

        if ($promocode_exit == 0) {
            $res = $this->commonmodel->select_all('coupon_package',array('_id'=>(int)$package,'coupon_package_status'=>'A'),array('passenger_commission'));
            $p_c = (!empty($res))?$res[0]['passenger_commission']:'';
            if ($mail_type == 1) {
                $passenger_list = array();
                $currenttime    = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                $ins_array      = array(
                    "company_id" => $cid,
                    "promocode" => $promo_code,
                    "package" => $package,
                    "fixed_fare_amt"=>(int)$fixed_fare_amt,
                    "promo_type" => $mail_type,
                    "start_date" => $start_date,
                    "expire_date" => $expire_date,
                    "promo_limit" => $promo_limit,
                    "createdate" => $currenttime
                );
                $p_insert  = $this->add_model->insert_promocode_corporate($ins_array);
                Message::success(__('promo_success'));
                $this->request->redirect("manage/corporate_promocode");
                die();
            } else {
                $passenger_list = $to_user;
                $bulkmessages = array();
                if (count($passenger_list) > 0) {
                    foreach ($passenger_list as $values) {
                        $pdetail = explode('~', $values);
                        if (count($pdetail) > 0) {
                        $id                = $pdetail[0];
                        $email             = $pdetail[1];
                        $name              = $pdetail[2];
                        $currenttime       = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                        for($i=1; $i<=$user_cnt; $i++){
                        $insert_array      = array(
                            "corporate_id" => $id,
                            "company_id" => $cid,
                            "promocode" => $promo_code,
                            "package" => $package,
                            "fixed_fare_amt"=>(int)$fixed_fare_amt,
                            "promo_used" => "0",
                            "amount_earned" => "0",
                            "start_date" => $start_date,
                            "expire_date" => $expire_date,
                            "promo_limit" => $promo_limit,
                            "createdate" => $currenttime,
                            "customer_number" => $_POST['cphone'.$i],
                            "customer_email" => $_POST['cemail'.$i],
                        );
                        //Inserting to Transaction Table 
                        $promo_insert = $this->add_model->insert_promocode_corporate($insert_array);
                       }
                    }
                }
                Message::success(__('promo_success'));
                $this->request->redirect("manage/corporate_promocode");
            } else {
                Message::error(__('no_user_to_send_promocode'));
                $this->request->redirect("manageusers/passengerspromo");
            }
            
            }
        } else {
            Message::success(__('promo_already'));
            $this->request->redirect("manage/corporate_promocode");
        }
        $this->request->redirect("manageusers/passengerspromo");
    }

    public function action_checkpromocode_corporate()
    {
        $manage            = Model::factory('manage');
        $companyId         = isset($_REQUEST["company_id"]) ? $_REQUEST["company_id"] : 0;
        $check_promo_exist = $manage->check_promo_exit_corporate($_REQUEST["promo"], $companyId);
        if ($check_promo_exist == 0) {
            echo '<span style="color:green;">' . __('promo_is_avaliable') . '</span>';
            exit;
        } else {
            echo '<span style="color:red;">' . __('promo_already') . '</span>';
            exit;
        }
    }

    
} // End Welcome
