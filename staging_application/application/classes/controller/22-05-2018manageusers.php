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
        $pag_data                   = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ]);
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
				$pag_data    = Pagination::factory([
					'current_page' => [
						'source' => 'query_string',
						'key' => 'page'
					],
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_user_list,
					'view' => 'pagination/punbb'
				]);
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
        $pag_data                   = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ]);
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
        $pag_data                   = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ]);
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
			if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($company)){
				$count_user_list           = $this->admin_model->get_all_searchpassenger_list($keyword,$status ,$company,'','',true);
				$all_companies            = $this->manage_model->get_allcompany();
				//pagination loads here
				//-------------------------
				$page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
				$offset      = REC_PER_PAGE * ($page_no - 1);
				$pag_data    = Pagination::factory([
					'current_page' => [
						'source' => 'query_string',
						'key' => 'page'
					],
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_user_list,
					'view' => 'pagination/punbb'
				]);
				$all_user_list = $this->admin_model->get_all_searchpassenger_list($keyword,$status ,$company,$offset, REC_PER_PAGE);
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manageusers/passengers');
			}
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
        $activeusers_list_count     = $this->admin_model->all_users_list(NULL,NULL,$cid,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                    = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - PAGE_NO);
        $pag_data                   = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $activeusers_list_count,
            'view' => 'pagination/punbb'
        ]);
        $all_user_list              = $this->admin_model->all_users_list($offset, REC_PER_PAGE, $cid);
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
        $pag_data    = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_user_list,
            'view' => 'pagination/punbb'
        ]);
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
        $view                       = View::factory('admin/passengers_promo')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $count_user_list)->bind('pag_data', $pag_data)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_POST)->bind('company_id', $this->company_id)->bind('Offset', $offset)->bind('avail_package',$avail_package);
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
        if (!empty($cid)) {
            $company_dets = $this->manage_model->getcompanydomainName($cid);
            $email_logo   = URL_BASE . SITE_LOGO_IMGPATH . '/' . $company_dets['company_domain'] . '_email_logo.png';
        } else {
            $email_logo = EMAIL_TEMPLATE_LOGO;
        }
        if ($promocode_exit == 0) {
            $res = $this->commonmodel->select_all('coupon_package',['_id'=>(int)$package,'coupon_package_status'=>'A'],['passenger_commission']);
            $p_c = (!empty($res))?$res[0]['passenger_commission']:'';
            if ($mail_type == 1) {
                //$passenger_list = $this->manage_model->getactive_users($cid);
                $passenger_list = [];
                $currenttime    = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                $ins_array      = [
                            "company_id" => $cid,
                            "promocode" => $promo_code,
                            "package" => $package,
                            "promo_type" => $mail_type,
                            "start_date" => $start_date,
                            "expire_date" => $expire_date,
                            "promo_limit" => $promo_limit,
                            "createdate" => $currenttime
                        ];
                $p_insert  = $this->add_model->insert_promocode($ins_array);
                Message::success(__('promo_success'));
                $this->request->redirect("manage/promocode");
                die();
            } else {
                $passenger_list = $to_user;
            
            //echo count($passenger_list); exit;
            $bulkmessages = [];
            if (count($passenger_list) > 0) {
                foreach ($passenger_list as $values) {
                    $pdetail = explode('~', $values);
                    if (count($pdetail) > 0) {
                        $id                = $pdetail[0];
                        $email             = $pdetail[1];
                        $name              = $pdetail[2];
                        $currenttime       = $this->commonmodel->getcompany_all_currenttimestamp(COMPANY_CID);
                        for($i=1; $i<=$user_cnt; $i++){
                        $insert_array      = [
                            "corporate_id" => $id,
                            "company_id" => $cid,
                            "promocode" => $promo_code,
                            "package" => $package,
                            //"promo_discount" => $promo_discount,
                            "promo_used" => "0",
                            "amount_earned" => "0",
                            "start_date" => $start_date,
                            "expire_date" => $expire_date,
                            "promo_limit" => $promo_limit,
                            "createdate" => $currenttime,
                            "customer_number" => $_POST['cphone'.$i],
                            "customer_email" => $_POST['cemail'.$i],
                        ];
                        //Inserting to Transaction Table 
                        $promo_insert      = $this->add_model->insert_promocode($insert_array);
                        $promocode_msg     = __('promocode_msg');
                        //$code              = str_replace('##DISCOUNT##', 'discount', $promocode_msg);
                        $code              = str_replace('##PROMOCODE##', $promo_code, $promocode_msg);
                        $replace_variables = [
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
                        ];
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
        $errors        = [];
        $post_values   = [];
        
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

                                            $android_device_token = [];

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

                                            $android_device_token = [];

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
    
} // End Welcome
