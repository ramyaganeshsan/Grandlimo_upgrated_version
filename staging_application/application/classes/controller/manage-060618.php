<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Manage extends Controller_Siteadmin
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
        $this->country_id     = $this->session->get('country_id');
        $this->state_id       = $this->session->get('state_id');
        $this->city_id        = $this->session->get('city_id');
		
		//Model
		$this->manage_model     	= Model::factory('manage');
		$this->add_model       		= Model::factory('add');
		$this->driver_model 		= Model::factory('driver');
		$this->passengers_model   	= Model::factory('passengers');
		$this->commonmodel          = Model::factory('commonmodel');
		$this->edit_model    		= Model::factory('edit');
		$this->admin_model          = Model::factory('admin');
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
    public function action_company()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_company');
        $this->selected_page_title = __('manage_company');
        $count_company_list = $this->manage_model->all_company_list('','',true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list = $this->manage_model->all_company_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_company')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyListCount', $count_company_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_company');
        $this->template->page_title = __('manage_company');
        $this->template->content    = $view;
    }
    public function action_companysearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_company');
        $this->selected_page_title = __('manage_company');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_company_list        = $this->manage_model->all_company_searchlist($keyword, $status,'','',true);
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
					'total_items' => $count_company_list,
					'view' => 'pagination/punbb'
				));
			
				$all_company_list = $this->manage_model->all_company_searchlist($keyword, $status, $offset, REC_PER_PAGE);
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect("manage/company");
			}
        }
        
        //set data to view file	
        $view                    = View::factory('admin/manage_company')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyListCount', $count_company_list)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
	public function action_companydetails()
    {
        $user_createdby  = $this->user_createdby;
        $usertype        = $this->usertype;
        $company_id      = $this->company_id;
        $id              = $this->request->param('id');
        $cmid            = $this->manage_model->check_companyid($id);
        //print_r($id);
        if (count($cmid) > 0) {
            if ($usertype == 'C') {
                if ($company_id != $cmid['_id']) {
                    $this->urlredirect->redirect('company/dashboard');
                }
            } else if ($usertype == 'M') {
				//echo $company_id ."--".$cmid['_id'];exit;
                if ($company_id != $cmid['_id']) {
                    $this->urlredirect->redirect('manager/dashboard');
                }
            }
        } else {
            if (($usertype == 'C')) {
                $this->urlredirect->redirect('company/dashboard');
            } else if (($usertype == 'M')) {
                $this->urlredirect->redirect('manager/dashboard');
            }
        }
        $user_details = $this->manage_model->details_userinfo($id);
		//print_r($user_details); exit;
        //if invalid id is given redirect to manage page
        if (count($user_details) == 0) {
            $this->request->redirect("manage/company");
        }
        $package_details            = $this->manage_model->current_package_details($cmid['_id']);
        $company_info               = $this->manage_model->company_info($cmid['_id']);
        $view                       = View::factory('admin/companydetails')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('id', $id)->bind('package_details', $package_details)->bind('Offset', $offset)->bind('company_info', $company_info);
        $this->page_title           = __('companyinformation');
        $this->template->title      = SITENAME . " | " . __('companyinformation');
        $this->template->page_title = __('companyinformation');
        $this->template->content    = $view;
    }
    public function action_active_company_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        /*$res_com = $this->manage_model->get_front_company_request($_REQUEST['uniqueId']);
        //print_r($res_com);exit;
        foreach ($res_com as $rc) {
            DB::update(PEOPLE)->set(array(
                'login_from' => 'W'
            ))->where('id', '=', $rc['id'])->where('user_type', '=', 'C')->execute();
            $mail              = "";
            $replace_variables = array(
                REPLACE_LOGO => EMAILTEMPLATELOGO,
                REPLACE_SITENAME => $this->app_name,
                REPLACE_USERNAME => ucfirst($rc['name']),
                REPLACE_EMAIL => $rc['email'],
                REPLACE_PASSWORD => $rc['org_password'],
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => $this->siteemail,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            );
            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'registertemp.html', $replace_variables);
            //print($message);
            $to                = $rc['email'];
            $from              = $this->siteemail;
            $subject           = __('registration_success');
            $redirect          = "manage/company";
            //print($to);
            //print($from);exit;
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
        }*/
        $status   = $this->manage_model->active_company_request($_REQUEST['uniqueId']);
        //Flash message for Success & Error 
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects corresponding page after update completed
        $this->request->redirect("manage/company"); 
    }
    public function action_block_company_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $status   = $this->manage_model->block_company_request($_REQUEST['uniqueId']);
        //Flash message for Success & Error 
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}
        //redirects corresponding page after update completed
        $this->request->redirect("manage/company");
    }
	public function action_trash_company_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status = $this->manage_model->trash_company_request($_REQUEST['uniqueId']);
        //Flash message for Success & Error 
        //==========================
		if($status==1){
			Message::success(__('Checked requests has been deleted'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/company");
    }
    public function action_motor()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_motor_company');
        $this->selected_page_title = __('manage_motor_company');
        
        $count_company_list        = $this->manage_model->count_motor_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_motor_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_motorcompany')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_motor_company');
        $this->template->page_title = __('manage_motor_company');
        $this->template->content    = $view;
    }
    public function action_motorsearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_motor_company');
        $this->selected_page_title = __('manage_motor_company');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->count_motorsearch_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])));
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_company_list = $this->manage_model->get_all_motor_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_motorcompany')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_motor_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_motor_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/motor"); //transaction/index
    }
    public function action_block_motor_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_motor_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/motor"); //transaction/index
    }
    public function action_model()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_model');
        $this->selected_page_title = __('manage_model');
        $count_model_list        = $this->manage_model->all_model_list('','',true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_model_list,
            'view' => 'pagination/punbb'
        ));
        $all_model_list           = $this->manage_model->all_model_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_motormodel')->bind('all_model_list', $all_model_list)->bind('pag_data', $pag_data)->bind('ListCount', $count_model_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_model');
        $this->template->page_title = __('manage_model');
        $this->template->content    = $view;
    }
	public function action_modelsearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_model');
        $this->selected_page_title = __('manage_model');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        //Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_model_list        = $this->manage_model->get_all_model_searchlist($keyword, $status,'','',true);
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
					'total_items' => $count_model_list,
					'view' => 'pagination/punbb'
				));
			
				$all_model_list = $this->manage_model->get_all_model_searchlist($keyword, $status, $offset, REC_PER_PAGE);
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manage/model');
			}
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_motormodel')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ListCount', $count_model_list)->bind('all_model_list', $all_model_list);
        $this->template->content = $view;
    }
    public function action_modelinfo()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $uid           = $this->request->param('id');
        $model_details = $this->manage_model->model_motordetails($uid);
        //if invalid id is given redirect to manage page
        if (count($model_details) == 0) {
            $this->request->redirect("manage/model");
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'manage_motormodelinfo')->bind('motor_details', $motor_details)->bind('model_details', $model_details);
        $this->template->title      = SITENAME . " | " . __('MODEL_INFORMATION');
        $this->template->page_title = SITENAME . " | " . __('MODEL_INFORMATION');
        $this->template->content    = $view;
    }
	public function action_block_model_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }        
        
        $status   = $this->manage_model->block_model_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/model");
    }
	public function action_active_model_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }        
        
        $status   = $this->manage_model->active_model_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}        
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/model");
    }
	public function action_trash_model_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }        
        
        $status                    = $this->manage_model->trash_model_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests has been deleted'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/model");
    }
    public function action_fare()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_fare');
        $this->selected_page_title = __('manage_fare');
        
        $company_id                = $this->company_id;
        $count_fare_list           = $this->manage_model->all_fare_list($company_id,NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_fare_list,
            'view' => 'pagination/punbb'
        ));
        $all_fare_list              = $this->manage_model->all_fare_list($company_id, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_fare')->bind('all_fare_list', $all_fare_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_fare');
        $this->template->page_title = __('manage_fare');
        $this->template->content    = $view;
    }
    public function action_companymodelsearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_fare');
        $this->selected_page_title = __('manage_fare');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_fare_list           = $this->manage_model->get_company_all_model_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),NULL,NULL,TRUE);
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
            'total_items' => $count_fare_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_fare_list = $this->manage_model->get_company_all_model_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_fare')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_fare_list', $all_fare_list);
        $this->template->title      = SITENAME . " | " . __('manage_fare');
        $this->template->page_title = __('manage_fare');
        $this->template->content    = $view;
    }
  
    public function action_fareinfo()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        
        $uid           = $this->request->param('id');
        $motor_details = $this->edit_model->motordetails();        
        $model_details = $this->manage_model->model_faredetails($uid);
        if (count($model_details) > 0) {
            $modelid    = $model_details[0]['model_id'];
            $model_name = $this->edit_model->model_motordetails($modelid);
        } else {
            $this->request->redirect("manage/fare");
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'manage_motormodelinfo')->bind('motor_details', $motor_details)->bind('model_details', $model_details)->bind('model_name', $model_name);
        $this->template->title      = SITENAME . " | " . __('MODEL_INFORMATION');
        $this->template->page_title = SITENAME . " | " . __('MODEL_INFORMATION');
        $this->template->content    = $view;
    }
   
    public function action_active_fare_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_fare_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/fare"); //transaction/index
    }
    
    public function action_block_fare_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_fare_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/fare"); //transaction/index
    }
    public function action_driver()
    {
        //Page Title
        $this->page_title          = __('manage_driver');
        $this->selected_page_title = __('manage_driver');
        
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        $count_company_list        = $this->manage_model->all_driver_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_driver_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany('A');
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_driver')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_driver');
        $this->template->page_title = __('manage_driver');
        $this->template->content    = $view;
    }
    public function action_driversearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_driver');
        $this->selected_page_title = __('manage_driver');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
		//get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
			if ($usertype != 'A') {
				$company = trim(Html::chars($company_id));
			} else {
				$company = trim(Html::chars(isset($_REQUEST['filter_company'])));
			}
			$count_company_list = $this->manage_model->get_all_driver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company,NULL,NULL,TRUE);
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
				'total_items' => $count_company_list,
				'view' => 'pagination/punbb'
			));
			$all_company_list = $this->manage_model->get_all_driver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company, $offset, REC_PER_PAGE);
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_driver')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_driver_request()
    {
        $this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        /*if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagedriver($company_id);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($company_id);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }*/
        $status   = $this->manage_model->active_driver_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/driver"); //transaction/index
    }
	
    public function action_block_driver_request()
    {		
        $this->is_login();
        
        $pagedata         = explode("/", $_SERVER["REQUEST_URI"]);
        $page             = isset($pagedata[3]) ? $pagedata[3] : '';
        $isDriverAssigned = $this->manage_model->isdriverassigned($_REQUEST['uniqueId']);
        //echo "<pre>";echo count($isDriverAssigned);exit;
        if ($isDriverAssigned == 0) {
            $status = $this->manage_model->block_driver_request($_REQUEST['uniqueId']);
            //Flash message for Reject
            //==========================
            Message::success(__('Checked requests have been changed to blocked status.'));
        } else {
            Message::error(__('assigned_driver_not_block'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/driver"); //transaction/index
    }
    public function action_field()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_field');
        $this->selected_page_title = __('manage_field');
        
        $CompanyList               = $this->manage_model->field_list();
        $count_company_list        = $this->manage_model->count_field_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_field_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_field')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_field');
        $this->template->page_title = __('manage_field');
        $this->template->content    = $view;
    }
    public function action_fieldsearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_field');
        $this->selected_page_title = __('manage_field');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->count_fieldsearch_list();
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_company_list = $this->manage_model->get_all_field_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_field')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_field_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_field_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/field"); //transaction/index
    }
    public function action_block_field_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_field_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/field"); //transaction/index
    }
    public function action_order_field_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->change_order_request($_REQUEST['change_value']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/field"); //transaction/index
    }
    public function action_taxi()
    {
        //Page Title
        $this->page_title          = __('manage_taxi');
        $this->selected_page_title = __('manage_taxi');

        $cid                       = $this->company_id;
        $availabilitycount         = $this->manage_model->validate_packagetaxi($cid);
        
        $count_taxi_list        = $this->manage_model->all_taxi_list('', '',true);
       // echo "<pre>"; print_r($count_taxi_list); exit;
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_taxi_list,
            'view' => 'pagination/punbb'
        ));
        $all_taxi_list           = $this->manage_model->all_taxi_list($offset, REC_PER_PAGE);
		//print_r($all_taxi_list);exit;
        //****pagination ends here***//
        $all_companies             = $this->manage_model->get_allcompany('A');
        //send data to view file 
        $view                       = View::factory('admin/manage_taxi')->bind('all_taxi_list', $all_taxi_list)->bind('all_companies', $all_companies)->bind('pag_data', $pag_data)->bind('ListCount', $count_taxi_list)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_taxi');
        $this->template->page_title = __('manage_taxi');
        $this->template->content    = $view;
    }
    public function action_taxisearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_taxi');
        $this->selected_page_title = __('manage_taxi');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        $availabilitycount  = $this->manage_model->validate_packagetaxi($company_id);
		if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
			$companyid = isset($_REQUEST['filter_company'])?trim(Html::chars($_REQUEST['filter_company'])):$company_id;
			if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($companyid) ){
				if ($usertype != 'A') {
					$count_taxi_list = $this->manage_model->get_all_taxi_searchlist($keyword, $status, $companyid,'','',true);
				} else {
					$count_taxi_list = $this->manage_model->get_all_taxi_searchlist($keyword, $status,$companyid,'','',true );
				}
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
					'total_items' => $count_taxi_list,
					'view' => 'pagination/punbb'
				));
				if ($usertype != 'A') {
					$all_taxi_list = $this->manage_model->get_all_taxi_searchlist($keyword, $status, $companyid, $offset, REC_PER_PAGE);
				} else {
					$all_taxi_list = $this->manage_model->get_all_taxi_searchlist($keyword, $status, $companyid, $offset, REC_PER_PAGE);
				}
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manage/taxi');
			}
        }
        $all_companies          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_taxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ListCount', $count_taxi_list)->bind('availabilitycount', $availabilitycount)->bind('all_companies', $all_companies)->bind('all_taxi_list', $all_taxi_list);
        $this->template->content = $view;
    }
    public function action_active_taxi_request()
    {
        $this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;//exit;
        $company_id     = $this->company_id;
        /*if ($usertype != 'A') {
            $check_result = $this->manage_model->validate_packagetaxi($company_id);
           
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
            }
            $check_result = $this->manage_model->validate_package_assigntaxi($company_id);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }*/
        $status   = $this->manage_model->active_taxi_request($_REQUEST['uniqueId']);
		if($status == 1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/taxi");
    }
    public function action_block_taxi_request()
    {
        $this->is_login();
        $isTaxiAssigned = $this->manage_model->istaxiassigned($_REQUEST['uniqueId']);
        
        if ($isTaxiAssigned == 0) {
            $status = $this->manage_model->block_taxi_request($_REQUEST['uniqueId']);
			if($status==1){
				//Flash message for Reject
				//==========================
				Message::success(__('Checked requests have been changed to blocked status.'));
			} else {
				Message::error($status);
			}
        } else {
            Message::error(__('assigned_taxi_not_blocked'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/taxi");
    }
	public function action_trash_taxi_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $this->is_login();
        $isTaxiAssigned = $this->manage_model->istaxiassigned($_REQUEST['uniqueId']);
        //print_r($isTaxiAssigned);exit;
        if ($isTaxiAssigned == 0) {
            $status = $this->manage_model->trash_taxi_request($_REQUEST['uniqueId']);
			if($status==1){
				Message::success(__('Checked requests has been deleted'));
			} else {
				Message::error($status);
			}
        } else {
            Message::error(__('assigned_taxi_not_delete'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/taxi");
    }
	public function action_taxiinfo()
    {
        $user_createdby  = $this->user_createdby;
        $usertype        = $this->usertype;
        $company_id      = $this->company_id;
        $country_id      = $this->country_id;
        $state_id        = $this->state_id;
        $city_id         = $this->city_id;
        $id              = $this->request->param('id');
        $taxi_details    = $this->manage_model->details_taxiinfo($id);
        //redirect to list page		
        if (count($taxi_details) == 0) {
			Message::error(__('no_data'));
            $this->request->redirect("manage/taxi");
        }
        $tmid = $this->manage_model->check_taxicompanyid($id);
        if ($usertype == 'C') {
            if ($company_id != $tmid['taxi_company']) {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else if ($usertype == 'M') {
            if (($company_id != $tmid['taxi_company']) || ($state_id != $tmid['taxi_state']) || ($city_id != $tmid['taxi_city']) || ($country_id != $tmid['taxi_country'])) {
                $this->urlredirect->redirect('manager/dashboard');
            }
        }
        $taxi_driver = $this->manage_model->details_taxi_driver($taxi_details[0]['taxi_id']);
       
        if ($taxi_driver) {
            $user_details1 = $this->manage_model->details_userinfo($taxi_driver['mapping_driverid']);
        }
		$count_taxi_logs_completed_transaction = $this->driver_model->get_taxi_logs_completed_transaction($id, 'R', 'A', '1', '','', 1);
		//echo '<pre>';
		//echo $count_taxi_logs_completed_transaction;
		//exit;
		if($count_taxi_logs_completed_transaction > 0){
        $taxi_logs_completed_transaction       = $this->driver_model->get_taxi_logs_completed_transaction($id, 'R', 'A', '1', 0,$count_taxi_logs_completed_transaction, 0);}else {
		 $taxi_logs_completed_transaction       = $this->driver_model->get_taxi_logs_completed_transaction($id, 'R', 'A', '1', 0,10, 0);	
		}
		
        $driver_tracking                       = $this->driver_model->get_taxi_trips($id);
		//echo '<pre>';print_r($taxi_logs_completed_transaction);exit;
        $view                                  = View::factory('admin/taxiinfo')->bind('pag_data', $pag_data)->bind('taxi_details', $taxi_details)->bind('taxi_driver', $taxi_driver)->bind('user_details1', $user_details1)->bind('count_taxi_logs_completed_transaction', $count_taxi_logs_completed_transaction)->bind('taxi_logs_completed_transaction', $taxi_logs_completed_transaction)->bind('Offset', $offset)->bind('driver_tracking', $driver_tracking);
        $this->page_title                      = __('taxi_inform');
        $this->template->title                 = SITENAME . " | " . __('taxi_inform');
        $this->template->page_title            = __('taxi_inform');
        $this->template->content               = $view;
    }
    public function action_package()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_package');
        $this->selected_page_title = __('manage_package');
        
        $count_company_list        = $this->manage_model->all_package_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_package_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_package')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_package');
        $this->template->page_title = __('manage_package');
        $this->template->content    = $view;
    }
    public function action_packagesearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_package');
        $this->selected_page_title = __('manage_package');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->get_all_package_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), NULL, NULL, TRUE);
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_company_list = $this->manage_model->get_all_package_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_package')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_package_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/package"); //transaction/index
    }
    public function action_block_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_package_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/package"); //transaction/index
    }
    public function action_country()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_country');
        $this->selected_page_title = __('manage_mountry');
        
        $count_countries        = $this->manage_model->all_country_list(null,null,true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset           = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_countries,
            'view' => 'pagination/punbb'
        ));
        $all_countries_list = $this->manage_model->all_country_list($offset, REC_PER_PAGE);
		
        //****pagination ends here***//
        //get form submit request update default country
        $update_post      = arr::get($_REQUEST, 'update');
        $post             = array();
        if ($update_post) {
            $post = $_REQUEST;
            if (isset($post['default_country'])) {
                $id                     = $post['default_country'];
                $update_default_country = $this->manage_model->update_default_country($id);
                if ($update_default_country == 1) {
                    Message::success(__('changed_default_country'));
                    $this->request->redirect("manage/country");
                } else if ($update_default_country == -2) {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/country");
                } else if ($update_default_country == -1) {
                    Message::error(__('select_the_activecountry'));
                    $this->request->redirect("manage/country");
                } else {
                    Message::error(__('select_the_defaultcountry'));
                    $this->request->redirect("manage/country");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/country");
            }
        }
        //send data to view file 
        $view                       = View::factory('admin/manage_country')->bind('all_countries_list', $all_countries_list)->bind('pag_data', $pag_data)->bind('count_countries', $count_countries)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_country');
        $this->template->page_title = __('manage_country');
        $this->template->content    = $view;
    }
    public function action_countrysearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_country');
        $this->selected_page_title = __('manage_country');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
		//get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search datas
        if ($_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status  = trim(Html::chars($_REQUEST['status']));
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_countries_list        = $this->manage_model->get_all_country_searchlist($keyword,$status,'','',true);
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
					'total_items' => $count_countries_list,
					'view' => 'pagination/punbb'
				));
				$all_countries_list = $this->manage_model->get_all_country_searchlist($keyword, $status, $offset, REC_PER_PAGE,false);
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/country");
			}
        }
		//get form submit request update default country
        $update_post      = arr::get($_REQUEST, 'update');
        $updatepost             = array();
        if ($update_post) {
            $updatepost = $_REQUEST;
            if (isset($updatepost['default_country'])) {
                $id                     = $updatepost['default_country'];
                $update_default_country = $this->manage_model->update_default_country($id);
                if ($update_default_country == 1) {
                    Message::success(__('changed_default_country'));
                    $this->request->redirect("manage/country");
                } else if ($update_default_country == -2) {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/country");
                } else if ($update_default_country == -1) {
                    Message::error(__('select_the_activecountry'));
                    $this->request->redirect("manage/country");
                } else {
                    Message::error(__('select_the_defaultcountry'));
                    $this->request->redirect("manage/country");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/country");
            }
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_country')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('count_countries', $count_countries_list)->bind('all_countries_list', $all_countries_list);
        $this->template->content = $view;
    }
    public function action_active_country_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status   = $this->manage_model->active_country_request($_REQUEST['uniqueId']);
        //Flash message for Reject
		if($status==1) {
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to country manage page after activation
        $this->request->redirect("manage/country");
    }
    public function action_block_country_request()
    {
        $this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status   = $this->manage_model->block_country_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        if ($status == 1) {
            Message::success(__('Checked requests have been changed to blocked status.'));
        } else {
            Message::error(__('country_not_delete'));
        }
        //redirects to country manage page after deletion
        $this->request->redirect("manage/country");
    }
    
    public function action_trash_country_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status = $this->manage_model->trash_country_request($_REQUEST['uniqueId']);
        if ($status == 1) {
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('country_not_delete'));
        }
        $this->request->redirect("manage/country");
    }
	public function action_block_gateway()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C' && $usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        if (in_array($_REQUEST['default_payment'], $_REQUEST['uniqueId'])) {
            $default = 0;
        } else {
            $default = 1;
        }        
        if ($default > 0) {
            $status   = $this->manage_model->block_gateway($_REQUEST['uniqueId'], $_REQUEST['default_payment']);
            //Flash message for Reject
            //==========================
            if ($status == 1) {
                Message::success(__('Checked requests have been changed to blocked status.'));
            } else {
                Message::error(__('block_default_gateway'));
            }
        } else {
            Message::error(__('block_default_gateway'));
        }
        if ($usertype == 'A') {
            $this->request->redirect("admin/payment_gateway_module");
        } else {
            $this->request->redirect("company/payment_gateway_module");
        }
    }
    public function action_active_gateway()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();        
        $status   = $this->manage_model->active_gateway($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        if ($usertype == 'A') {
            $this->request->redirect("admin/payment_gateway_module");
        } else {
            $this->request->redirect("company/payment_gateway_module");
        }
    }
    public function action_trash_gateway()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        if (in_array($_REQUEST['default_payment'], $_REQUEST['uniqueId'])) {
            $default = 0;
        } else {
            $default = 1;
        }
        
        if ($default > 0) {
            $status = $this->manage_model->trash_gateway($_REQUEST['uniqueId']);
            if ($status == 1) {
                Message::success(__('Checked requests has been deleted'));
            } else {
                Message::error(__('country_not_delete'));
            }
        } else {
            Message::error(__('gateway_not_delete'));
        }
        if ($usertype == 'A') {
            $this->request->redirect("admin/payment_gateway_module");
        } else {
            $this->request->redirect("company/payment_gateway_module");
        }
    }
    public function action_city()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_city');
        $this->selected_page_title = __('manage_city');
        $count_city_list        = $this->manage_model->all_city_list(null,null,true);
		//$count_city_list = 0;
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset           = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_city_list,
            'view' => 'pagination/punbb'
        ));
        $all_cities_list = $this->manage_model->all_city_list($offset, REC_PER_PAGE);
        
        //get form submit request
        $update_post      = arr::get($_REQUEST, 'update');
        $post             = array();
        if ($update_post) {
            if (isset($_REQUEST['default_city'])) {
				$post = $_REQUEST;
                $id   = $post['default_city'];
                $update_default_city = $this->manage_model->update_default_city($id);
                if ($update_default_city == 1) {
                    Message::success(__('changed_default_city'));
                    $this->request->redirect("manage/city");
                } else if ($update_default_city == '-1') {
                    Message::error(__('select_the_activecity'));
                    $this->request->redirect("manage/city");
                } else if ($update_default_city == '-2') {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/city");
                } else {
                    Message::error(__('select_the_defaultcity'));
                    $this->request->redirect("manage/city");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/city");
            }
        }
        //print_r($all_cities_list);
        //exit;
        //send data to view file 
        $view                       = View::factory('admin/manage_city')->bind('all_cities_list', $all_cities_list)->bind('pag_data', $pag_data)->bind('CountCity', $count_city_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_city');
        $this->template->page_title = __('manage_city');
        $this->template->content    = $view;
    }
    public function action_citysearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_city');
        $this->selected_page_title = __('manage_city');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
		//Post results for search 
		if ($_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status  = trim(Html::chars($_REQUEST['status']));
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_cities_list        = $this->manage_model->get_all_city_searchlist($keyword, $status,'','',true);
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
					'total_items' => $count_cities_list,
					'view' => 'pagination/punbb',
					'uri_segment' => 'page'
				));
				$all_cities_list = $this->manage_model->get_all_city_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE,false);
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/state");
			}
		}
		//get form submit request
        $update_post      = arr::get($_REQUEST, 'update');
        $post             = array();
        if ($update_post) {
            if (isset($_REQUEST['default_city'])) {
				$post = $_REQUEST;
                $id   = $post['default_city'];
                $update_default_city = $this->manage_model->update_default_city($id);
                if ($update_default_city == 1) {
                    Message::success(__('changed_default_city'));
                    $this->request->redirect("manage/city");
                } else if ($update_default_city == '-1') {
                    Message::error(__('select_the_activecity'));
                    $this->request->redirect("manage/city");
                } else if ($update_default_city == '-2') {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/city");
                } else {
                    Message::error(__('select_the_defaultcity'));
                    $this->request->redirect("manage/city");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/city");
            }
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_city')->bind('title', $title)->bind('Offset', $offset)->bind('CountCity', $count_cities_list)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_cities_list', $all_cities_list);
        $this->template->content = $view;
    }
    public function action_state()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_state');
        $this->selected_page_title = __('manage_state');
        
        $count_state_list          = $this->manage_model->all_state_list(null,null,true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset         = REC_PER_PAGE * ($page_no - 1);
        $pag_data       = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_state_list,
            'view' => 'pagination/punbb'
        ));
        $all_state_list = $this->manage_model->all_state_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //Find page action in view
        $action         = $this->request->action();
        //get form submit request
        $update_post    = arr::get($_REQUEST, 'update');
        $post           = array();
        if ($update_post) {
            if (isset($_REQUEST['default_state'])) {
                $post                   = $_REQUEST;
                $id                     = $post['default_state'];
                $update_default_country = $this->manage_model->update_default_state($id);
                if ($update_default_country == 1) {
                    Message::success(__('changed_default_state'));
                    $this->request->redirect("manage/state");
                } else if ($update_default_country == -1) {
                    Message::error(__('select_the_activestate'));
                    $this->request->redirect("manage/state");
                } else if ($update_default_country == -2) {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/state");
                } else {
                    Message::error(__('select_the_defaultstate'));
                    $this->request->redirect("manage/state");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/state");
            }
        }
        //send data to view file 
        $view                       = View::factory('admin/manage_state')->bind('all_state_list', $all_state_list)->bind('pag_data', $pag_data)->bind('CountState', $count_state_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_state');
        $this->template->page_title = __('manage_state');
        $this->template->content    = $view;
    }
    public function action_statesearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_state');
        $this->selected_page_title = __('manage_state');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
		 if ($_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status  = trim(Html::chars($_REQUEST['status']));
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_state');
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_state_list          = $this->manage_model->get_all_state_searchlist($keyword, $status,'','',true);
				//pagination loads here
				//-------------------------
				$page_no    = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
				$offset      = REC_PER_PAGE * ($page_no - 1);
				$pag_data    = Pagination::factory(array(
					'current_page' => array(
						'source' => 'query_string',
						'key' => 'page'
					),
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_state_list,
					'view' => 'pagination/punbb'
				));
				
				$all_state_list = $this->manage_model->get_all_state_searchlist($keyword, $status, $offset, REC_PER_PAGE,false);
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/state");
			}
        }
		//get form submit request
        $update_post    = arr::get($_REQUEST, 'update');
        $post           = array();
        if ($update_post) {
            if (isset($_REQUEST['default_state'])) {
                $post                   = $_REQUEST;
                $id                     = $post['default_state'];
                $update_default_country = $this->manage_model->update_default_state($id);
                if ($update_default_country == 1) {
                    Message::success(__('changed_default_state'));
                    $this->request->redirect("manage/state");
                } else if ($update_default_country == -1) {
                    Message::error(__('select_the_activestate'));
                    $this->request->redirect("manage/state");
                } else if ($update_default_country == -2) {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/state");
                } else {
                    Message::error(__('select_the_defaultstate'));
                    $this->request->redirect("manage/state");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("manage/state");
            }
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_state')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('CountState', $count_state_list)->bind('pag_data', $pag_data)->bind('all_state_list', $all_state_list);
        $this->template->content = $view;
    }
    public function action_active_city_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_city_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/city");
    }
    public function action_block_city_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_city_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        if ($status == 1) {
            Message::success(__('Checked requests have been changed to blocked status.'));
        } else {
            Message::error(__('city_not_block'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/city");
    }
    public function action_trash_city_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->trash_city_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        if ($status == 1) {
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('city_not_delete'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/city");
    }
    public function action_active_state_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status   = $this->manage_model->active_state_request($_REQUEST['uniqueId']);
        
        //Flash message for Reject
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been changed to activated status.'));
		}else{
			Message::error(__('state_not_active'));
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/state");
    }
    public function action_block_state_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status   = $this->manage_model->block_state_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        if ($status == 1) {
            Message::success(__('Checked requests have been changed to blocked status.'));
        } else {
            Message::error(__('state_not_block'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/state");
    }
    public function action_trash_state_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        
        $status   = $this->manage_model->trash_state_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        if ($status == 1) {
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('state_not_delete'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/state");
    }
    public function action_manager()
    {
        //Page Title
        $this->page_title          = __('manage_manager');
        $this->selected_page_title = __('manage_manager');
        
        $count_manager_list        = $this->manage_model->all_manager_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_manager_list,
            'view' => 'pagination/punbb'
        ));
        $all_manager_list           = $this->manage_model->all_manager_list($offset, REC_PER_PAGE);
        $all_companies             = $this->manage_model->get_allcompany();
		//echo "<pre>"; print_r($all_manager_list); exit;
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_manager')->bind('all_manager_list', $all_manager_list)->bind('all_companies', $all_companies)->bind('pag_data', $pag_data)->bind('ListCount', $count_manager_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_manager');
        $this->template->page_title = __('manage_manager');
        $this->template->content    = $view;
    }
    public function action_managersearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_manager');
        $this->selected_page_title = __('manage_manager');        
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
		//default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Post results for search 
        if ($_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status  = trim(Html::chars($_REQUEST['status']));
			if ($usertype != 'A') {
				$company = trim(Html::chars($company_id));
			} else {
				$company = trim(Html::chars($_REQUEST['filter_company']));
			}
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($company)){
				$count_manager_list = $this->manage_model->all_manager_searchlist($keyword, $status, $company, NULL, NULL, TRUE);
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
					'total_items' => $count_manager_list,
					'view' => 'pagination/punbb'
				));
				$all_manager_list = $this->manage_model->all_manager_searchlist($keyword, $status, $company, $offset, REC_PER_PAGE);
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/manager");
			}
        }
        $all_companies          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_manager')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ListCount', $count_manager_list)->bind('all_companies', $all_companies)->bind('all_manager_list', $all_manager_list);
        $this->template->content = $view;
    }
    public function action_active_manager_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->active_manager_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/manager"); //transaction/index
    }
    public function action_block_manager_request()
    {
        $this->is_login();        
        $status   = $this->manage_model->block_manager_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/manager"); //transaction/index
    }
	public function action_trash_manager_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $this->is_login();
        
        $status = $this->manage_model->trash_manager_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests has been deleted'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/manager");
    }
    public function action_admin()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/login");
        }
        //Page Title
        $this->page_title          = __('manage_superadmin');
        $this->selected_page_title = __('manage_superadmin');
        
        $count_admin_list          = $this->manage_model->all_admin_list('','',true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_admin_list,
            'view' => 'pagination/punbb'
        ));
        $all_admin_list             = $this->manage_model->all_admin_list($offset, REC_PER_PAGE,false);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_admin')->bind('all_admin_list', $all_admin_list)->bind('ListCount', $count_admin_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_superadmin');
        $this->template->page_title = __('manage_superadmin');
        $this->template->content    = $view;
    }
    public function action_adminsearch()
    {
        //Page Title
        $this->page_title          = __('manage_superadmin');
        $this->selected_page_title = __('manage_superadmin');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
		//Post results for search datas
        if ($_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status  = trim(Html::chars($_REQUEST['status']));
			//get form submit request
			$search_post             = arr::get($_REQUEST, 'search_user');
			if((!empty($keyword) && isset($search_post)) || !empty($status)){
				$count_admin_list          = $this->manage_model->all_admin_searchlist($keyword, $status, '', '',true);
				//pagination loads here
				//-------------------------
				$page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
				$offset                  = REC_PER_PAGE * ($page_no - 1);
				$pag_data                = Pagination::factory(array(
					'current_page' => array(
						'source' => 'query_string',
						'key' => 'page'
					),
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_admin_list,
					'view' => 'pagination/punbb'
				));
				$all_admin_list          = $this->manage_model->all_admin_searchlist($keyword, $status, $offset, REC_PER_PAGE,false);
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/admin");
			}
		}
        //set data to view file	
        $view                    = View::factory('admin/manage_admin')->bind('title', $title)->bind('Offset', $offset)->bind('ListCount', $count_admin_list)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_admin_list', $all_admin_list);
        $this->template->content = $view;
    }
    public function action_active_admin_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->active_admin_request($_REQUEST['uniqueId']);
        
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/admin"); //transaction/index
    }
    public function action_block_admin_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->block_admin_request($_REQUEST['uniqueId']);
        
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/admin"); //transaction/index
    }
	public function action_trash_admin_request()
    {
		$this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        
        $status = $this->manage_model->trash_admin_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests has been deleted'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/admin");
    }
    public function action_assigntaxi()
    {
        //Page Title
        $this->page_title          = __('manage_assigned_taxi');
        $this->selected_page_title = __('manage_assigned_taxi');
        $usertype                  = $this->usertype;
        $cid                       = $this->company_id;
        /*if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagetaxi($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
            }
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($cid);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }*/
        $count_company_list = $this->manage_model->all_assigntaxi_list( NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no            = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_assigntaxi_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany('A');
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_assignedtaxi')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_assigned_taxi');
        $this->template->page_title = __('manage_assigned_taxi');
        $this->template->content    = $view;
    }
    public function action_assigntaxisearch()
	{
		$user_createdby            = $this->user_createdby;
		$company_id                = $this->company_id;
		$usertype                  = $this->usertype;
		//Page Title
		$this->page_title          = __('manage_assigned_taxi');
		$this->selected_page_title = __('manage_assigned_taxi');
		//default empty list and offset
		$search_list               = '';
		$offset                    = '';
		//Find page action in view
		$action                    = $this->request->action();
		//import model
		$cid                       = $this->company_id;
		if ($usertype != 'A') {
			$check_result = $this->add_model->validate_packagetaxi($cid);
			if ($check_result < 0) {
				if ($usertype == 'C') {
					Message::success(__('limited_taxi'));
					$this->request->redirect("manage/availabilitytaxi");
				}
				if ($usertype == 'M') {
					Message::success(__('limited_taxi'));
					$this->request->redirect("manage/availabilitytaxi");
				}
			}
			$check_result = $this->add_model->validate_packagedriver($cid);
			if ($check_result < 0) {
				if ($usertype == 'C') {
					Message::success(__('limited_driver'));
					$this->request->redirect("manage/availabilitydriver");
				}
				if ($usertype == 'M') {
					Message::success(__('limited_driver'));
					$this->request->redirect("manage/availabilitydriver");
				}
			}
			$check_result = $this->add_model->validate_package_assigntaxi($cid);
			if ($check_result == 0) {
				if ($usertype == 'C') {
					Message::success(__('please_upgrade_package'));
					$this->request->redirect("add/upgradepackage");
				}
				if ($usertype == 'M') {
					Message::success(__('check_company_owner'));
					$this->request->redirect("manager/dashboard");
				}
			}
		}
		if ($usertype != 'A') {
			$companyid = trim(Html::chars($company_id));
		} else {
			$companyid = trim(Html::chars($_REQUEST['filter_company']));
		}
		if ($_REQUEST) {
			$count_company_list = $this->manage_model->get_all_assigntaxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $companyid,NULL,NULL,TRUE);
			//-------------------------
			$page_no            = isset($_GET['page']) ? $_GET['page'] : 0;
			if ($page_no == 0 || $page_no == 'index')
				$page_no = PAGE_NO;
			$offset           = REC_PER_PAGE * ($page_no - 1);
			$pag_data         = Pagination::factory(array(
				'current_page' => array(
					'source' => 'query_string',
					'key' => 'page'
				),
				'items_per_page' => REC_PER_PAGE,
				'total_items' => $count_company_list,
				'view' => 'pagination/punbb'
			));
			//get form submit request
			$search_post      = arr::get($_REQUEST, 'search_user');
			//Post results for search 
			$all_company_list = $this->manage_model->get_all_assigntaxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $companyid, $offset, REC_PER_PAGE);
		}
		$get_allcompany          = $this->manage_model->get_allcompany();
		//set data to view file    
		$view                    = View::factory('admin/manage_assigntaxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
		$this->template->content = $view;
	}
    public function action_active_assigntaxi_request()
    {
        $this->is_login();
        $assignCnt   = 0;
        $drhastaxi   = 0;
        $driveridArr = array();
        foreach ($_REQUEST['uniqueId'] as $key => $assignId) {
            $assignedDets = $this->manage_model->get_assigned_details($assignId);
            if (count($assignedDets) > 0) {
                $alreadyAssigned = $this->manage_model->check_already_assigned($assignedDets[0]['mapping_driverid'], $assignedDets[0]['mapping_taxiid'], $assignedDets[0]['mapping_startdate'], $assignedDets[0]['mapping_enddate']);
                if (in_array($assignedDets[0]['mapping_driverid'], $driveridArr)) {
                    $drhastaxi = $this->manage_model->check_driver_have_taxi($assignId, $assignedDets[0]['mapping_driverid'], $assignedDets[0]['mapping_startdate'], $assignedDets[0]['mapping_enddate']);
                }
                if ($alreadyAssigned > 0 || $drhastaxi > 0) {
                    $assignCnt++;
                }
                $driveridArr[] = $assignedDets[0]['mapping_driverid'];
            }
        }
		print_r($driveridArr);exit;
        if ($assignCnt == 0) {
            $status   = $this->manage_model->active_assigntaxi_request($_REQUEST['uniqueId']);
            $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
            $page     = isset($pagedata[3]) ? $pagedata[3] : '';
            //Flash message for Reject
            //==========================
            Message::success(__('Checked requests have been changed to activated status.'));
        } else {
            Message::error(__('selected_taxi_already_assign'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/assigntaxi"); //transaction/index
    }
    public function action_block_assigntaxi_request()
    {
        $this->is_login();
        $status   = $this->manage_model->block_assigntaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/assigntaxi"); //transaction/index
    }
    public function action_trash_assigntaxi_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->trash_assigntaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been deleted.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/assigntaxi"); //transaction/index
    }
    
    public function action_ratingcompanies()
    {
        $user_createdby            = $this->user_createdby;
        $usertype                  = $this->usertype;
        $this->page_title          = __('manage_rating_company');
        $this->selected_page_title = __('manage_rating_company');
        $count_rating_companies    = $this->manage_model->count_rating_companies_list();
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_rating_companies,
            'view' => 'pagination/punbb'
        ));
        $all_rating_companies       = $this->manage_model->all_rating_companies($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/managerating_companies')->bind('all_rating_companies', $all_rating_companies)->bind('pag_data', $pag_data)->bind('ListCount', $count_rating_companies)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_rating_comapany');
        $this->template->page_title = __('manage_rating_company');
        $this->template->content    = $view;
    }
	
    public function action_ratingcompanies_search()
    {
        $user_createdby            = $this->user_createdby;
        //Page Title
        $this->page_title          = __('manage_rating_company');
        $this->selected_page_title = __('manage_rating_company');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        $count_rating_companies    = $this->manage_model->count_rating_companies_list();
        //get form submit request
        $search_post               = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if (isset($search_post) && $_REQUEST) {
            $all_rating_companies = $this->manage_model->get_all_ratingcompanies_searchlist(trim(Html::chars($_REQUEST['keyword'])));
        }
        //set data to view file	
        $view                    = View::factory('admin/managerating_companies')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('RatingcompanyList', $RatingcompanyList)->bind('all_rating_companies', $all_rating_companies);
        $this->template->content = $view;
    }
    public function action_delete_ratingcompanies()
    {
        $id                     = $this->request->param('id');
        $ratingcompanies        = $this->manage_model->delete_ratingcompanies($id);
        if ($ratingcompanies) {
            Message::success(__('Rating was deleted.'));
            $this->request->redirect("manage/ratingcompanies");
        }
    }
	public function action_ratingdrivers()
    {
        $user_createdby            = $this->user_createdby;
        $usertype                  = $this->usertype;
        $this->page_title          = __('manage_rating_taxi');
        $this->selected_page_title = __('manage_rating_taxi');
        
        $count_rating_drivers      = $this->manage_model->all_rating_drivers(null,null,true);
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_rating_drivers,
            'view' => 'pagination/punbb'
        ));
        $all_rating_drivers         = $this->manage_model->all_rating_drivers($offset, REC_PER_PAGE);
		
        $get_rate_company           = $this->manage_model->get_rating_company();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/managerating_drivers')->bind('all_rating_drivers', $all_rating_drivers)->bind('pag_data', $pag_data)->bind('ListCount', $count_rating_drivers)->bind('get_rate_company', $get_rate_company)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_rating_drivers');
        $this->template->page_title = __('manage_rating_drivers');
        $this->template->content    = $view;
    }
    
    public function action_ratingdriver_search()
    {
        $user_createdby            = $this->user_createdby;
        //Page Title
        $this->page_title          = __('manage_rating_taxi');
        $this->selected_page_title = __('manage_rating_taxi');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
		//Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post               = arr::get($_REQUEST, 'search_user');
			$keyword                   = trim(Html::chars($_REQUEST['keyword']));
			//$company_id                = trim(Html::chars($_REQUEST['filter_company']));
			$company_id="";
			if((!empty($keyword) && isset($search_post)) || !empty($company_id)){
				$count_rating_drivers      = $this->manage_model->get_all_ratingdrivers_searchlist($keyword, $company_id,null,null,true);
				//get form submit request
				$search_post               = arr::get($_REQUEST, 'search_user');
				$pag_data                  = Pagination::factory(array(
					'current_page' => array(
						'source' => 'query_string',
						'key' => 'page'
					),
					'items_per_page' => REC_PER_PAGE,
					'total_items' => $count_rating_drivers,
					'view' => 'pagination/punbb'
				));
			
				$all_rating_drivers = $this->manage_model->get_all_ratingdrivers_searchlist($keyword, $company_id,$offset,REC_PER_PAGE);
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manage/ratingdrivers');
			}
        }
        $get_rate_company           = $this->manage_model->get_rating_company();
        //set data to view file	
        $view                       = View::factory('admin/managerating_drivers')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('ListCount', $count_rating_drivers)->bind('get_rate_company', $get_rate_company)->bind('all_rating_drivers', $all_rating_drivers);
        $this->template->page_title = __('manage_rating_drivers');
        $this->template->content    = $view;
    }
	public function action_managerating_driversview()
    {
        $user_createdby            = $this->user_createdby;
        $usertype                  = $this->usertype;
        $uid                       = $this->request->param('id');
        $this->page_title          = __('rating_drivers');
        $this->selected_page_title = __('rating_drivers');
        $count_rating_drivers      = $this->driver_model->get_driver_logs1($uid, 'R', 'A', '1',null,null,true);
        $driver_profile            = $this->driver_model->get_my_profile_details($uid);
        if (count($driver_profile) == 0) {
            $this->request->redirect("manage/ratingdrivers");
        }
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_rating_drivers,
            'view' => 'pagination/punbb'
        ));
        $all_rating_drivers         = $this->driver_model->get_driver_logs1($uid, 'R', 'A', '1', $offset,REC_PER_PAGE );
        //send data to view file 
        $view                       = View::factory('admin/managerating_driversview')->bind('all_rating_drivers', $all_rating_drivers)->bind('pag_data', $pag_data)->bind('driver_profile', $driver_profile)->bind('ListCount', $count_rating_drivers)->bind('pag_data', $pag_data)->bind('driver_profile', $driver_profile)->bind('Offset', $offset)->bind('driver_id', $uid);
        $this->template->title      = SITENAME . " | " . __('rating_drivers');
        $this->template->page_title = __('rating_drivers');
        $this->template->content    = $view;
    }
	public function action_delete_ratingdrivers()
    {
        $id                   = $this->request->param('id');
        $ratingdrivers        = $this->manage_model->delete_ratingdrivers($id);
        if ($ratingdrivers) {
            Message::success(__('Rating was deleted.'));
            $this->request->redirect("manage/ratingdrivers");
        }
    }
    public function action_packagereport()
    {
        $usertype = $this->usertype;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        //Page Title
        $this->page_title          = __('upgrade_reports');
        $this->selected_page_title = __('upgrade_reports');
        $company_val               = isset($_GET["filter_company"]) ? $_GET["filter_company"] : '';
		$rcompany_list              = $this->manage_model->get_all_company_list();
        $count_report_list        = $this->manage_model->all_packagereport_list($company_val,null,null,true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_report_list,
            'view' => 'pagination/punbb'
        ));
        
        $all_report_list           = $this->manage_model->all_packagereport_list($company_val, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/package_report')->bind('all_company_list', $all_report_list)->bind('pag_data', $pag_data)->bind('ListCount', $count_report_list)->bind('srch', $_REQUEST)->bind('Offset', $offset)->bind('rcompany_list', $rcompany_list);
        $this->template->title      = SITENAME . " | " . __('upgrade_reports');
        $this->template->page_title = __('upgrade_reports');
        $this->template->content    = $view;
    }
    public function action_packagereports()
    {
        $usertype = $this->usertype;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        //Page Title
        $this->page_title          = __('upgrade_reports');
        $this->selected_page_title = __('upgrade_reports');
        
        $count_company_list        = $this->manage_model->count_packagereport_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_packagereport_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/package_reports')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('upgrade_reports');
        $this->template->page_title = __('upgrade_reports');
        $this->template->content    = $view;
    }
    public function action_packagereportsearch()
    {
        //Page Title
        $this->page_title          = __('upgrade_reports');
        $this->selected_page_title = __('upgrade_reports');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->count_assigntaxi_list(trim(Html::chars($_REQUEST['keyword'])));
        //get form submit request
        $search_post               = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if (isset($search_post) && $_REQUEST) {
            $all_company_list = $this->manage_model->get_all_assigntaxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_assigntaxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('CompanyList', $CompanyList)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_packagereport_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->active_assigntaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/assigntaxi"); //transaction/index
    }
    public function action_block_packagereport_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->block_assigntaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/assigntaxi"); //transaction/index
    }
    public function action_trash_motor_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        //default empty list and offset
        $search_list = '';
        $offset      = '';
        $status      = $this->manage_model->trash_motor_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests has been deleted'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/motor");
    }
    
    public function action_trash_field_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status = $this->manage_model->trash_field_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests has been deleted'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/field");
    }
    public function action_trash_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status = $this->manage_model->trash_package_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        
		
		if ($status == 1) {
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('package_not_delete'));
        }
		
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/package");
    }
    
    public function action_trash_driver_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $this->is_login();
        
        $isDriverAssigned = $this->manage_model->isdriverassigned($_REQUEST['uniqueId']);
        if ($isDriverAssigned == 0) {
            $status = $this->manage_model->trash_driver_request($_REQUEST['uniqueId']);
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('assigned_driver_not_delete'));
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/driver");
    }
    public function action_contacts_search()
    {
        $user_createdby            = $this->user_createdby;
        //Page Title
        $this->page_title          = __('manage_contactus_search');
        $this->selected_page_title = __('manage_contactus_search');
        $cid                       = $this->company_id;
        $usertype                  = $this->usertype;
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //import model
        
        //get form submit request
        $search_post               = arr::get($_REQUEST, 'search_user');
		//Post results for search 
        if (isset($search_post) && $_REQUEST) {
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			if(!empty($keyword)){
				if ($usertype != 'C'):
					$count_contacts_list = $this->manage_model->get_all_contact_searchlist_count(trim(Html::chars($_REQUEST['keyword'])));
				else:
					$count_contacts_list = $this->manage_model->get_all_contact_searchlist_count(trim(Html::chars($_REQUEST['keyword'])), $cid);
				endif;
				//pagination loads here
				$page_no = isset($_GET['page']) ? $_GET['page'] : 0;
				if ($page_no == 0 || $page_no == 'index')
					$page_no = PAGE_NO;
					$offset   = REC_PER_PAGE * ($page_no - 1);
					$pag_data = Pagination::factory(array(
						'current_page' => array(
							'source' => 'query_string',
							'key' => 'page'
						),
						'items_per_page' => REC_PER_PAGE,
						'total_items' => $count_contacts_list,
						'view' => 'pagination/punbb'
					));
			
				if ($usertype != 'C'):
					$all_contacts_list = $this->manage_model->get_all_contact_searchlist($offset, REC_PER_PAGE,trim(Html::chars($_REQUEST['keyword'])));
				else:
					$all_contacts_list = $this->manage_model->get_all_contact_searchlist($offset, REC_PER_PAGE,trim(Html::chars($_REQUEST['keyword'])), $cid);
				endif;
			} else {
				Message::error(__('Your search keyword must not be empty'));
				$this->request->redirect("manage/contact");
			}
        }
        //set data to view file	
        $view                       = View::factory('admin/manage_contact')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ListCount', $count_contacts_list)->bind('all_contacts_list', $all_contacts_list);
        $this->template->title      = SITENAME . " | " . __('manage_contactus_search');
        $this->template->page_title = __('manage_contactus_search');
        $this->template->content    = $view;
    }
     public function action_contact()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            //$this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_contact');
        $this->selected_page_title = __('manage_contact');
        $cid                       = $this->company_id;
        
		
        if ($usertype != 'C')
            $count_contacts_list = $this->manage_model->count_contact_list();
        else
            $count_contacts_list = $this->manage_model->count_contact_list($cid);
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_contacts_list,
            'view' => 'pagination/punbb'
        ));
        if ($usertype != 'C')
            $all_contacts_list = $this->manage_model->all_contact_list($offset, REC_PER_PAGE);
        else
            $all_contacts_list = $this->manage_model->all_contact_list($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_contact')->bind('all_contacts_list', $all_contacts_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ListCount', $count_contacts_list);
        $this->template->title      = SITENAME . " | " . __('manage_contact');
        $this->template->page_title = __('manage_contact');
        $this->template->content    = $view;
    }
    public function action_contacts()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            //$this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_contactus');
        $this->selected_page_title = __('manage_contactus');
        $cid                       = $this->company_id;
        
		
        if ($usertype != 'C')
            $count_contacts_list = $this->manage_model->count_contacts_list();
        else
            $count_contacts_list = $this->manage_model->count_contacts_list($cid);
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_contacts_list,
            'view' => 'pagination/punbb'
        ));
        if ($usertype != 'C')
            $all_contacts_list = $this->manage_model->all_contacts_list($offset, REC_PER_PAGE);
        else
            $all_contacts_list = $this->manage_model->all_contacts_list($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_contacts')->bind('all_contacts_list', $all_contacts_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ListCount', $count_contacts_list);
        $this->template->title      = SITENAME . " | " . __('manage_contactus');
        $this->template->page_title = __('manage_contactus');
        $this->template->content    = $view;
    }
    public function action_contact_view()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $cid            = $this->company_id;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_contacts_view');
        $this->selected_page_title = __('manage_contacts_view');
        $id                        = $this->request->param('id');
        
        $ContactsList              = $this->manage_model->contacts_list_view($id);
        if ($usertype == 'C' && $cid != $ContactsList['contact_cid']) {
            $this->request->redirect("manage/contacts");
        }
        $view                       = View::factory('admin/manage_contact_view')->bind('pag_data', $pag_data)->bind('contacts_list', $ContactsList)->bind('Offset', $offset)->bind('usertype', $usertype);
        $this->template->title      = SITENAME . " | " . __('manage_contacts_view');
        $this->template->page_title = __('manage_contacts_view');
        $this->template->content    = $view;
    }
    public function action_delete_contacts()
    {
        $id              = $this->request->param('id');
        
        $contacts        = $this->manage_model->delete_contacts($id);
        if ($contacts==1) {
            Message::success(__('Contact was deleted.'));
            $this->request->redirect("manage/contact");
        } else {
			Message::success($contacts);
            $this->request->redirect("manage/contact");
		}
    }
    // Free script download customer for search list 
    public function action_free_quotes_search()
    {
        $user_createdby            = $this->user_createdby;
        //Page Title
        $this->page_title          = __('manage_free_quotes_search');
        $this->selected_page_title = __('manage_free_quotes_search');
        $usertype                  = $this->usertype;
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //import model
        
        //get form submit request
        $search_post               = arr::get($_REQUEST, 'search_user');
        if ($usertype != 'C')
            $count_free_quotes_list = $this->manage_model->get_all_free_quotes_searchlist_count(trim(Html::chars($_REQUEST['keyword'])));
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_free_quotes_list,
            'view' => 'pagination/punbb'
        ));
        //Post results for search 
        if (isset($search_post) && $_REQUEST) {
            if ($usertype != 'C')
                $all_free_quotes_list = $this->manage_model->get_all_free_quotes_searchlist(trim(Html::chars($_REQUEST['keyword'])));
        }
        //set data to view file	
        $view                       = View::factory('admin/manage_free_quotes')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ContactsList', $ContactsList)->bind('all_free_quotes_list', $all_free_quotes_list);
        $this->template->title      = SITENAME . " | " . __('manage_free_quotes_search');
        $this->template->page_title = __('manage_free_quotes_search');
        $this->template->content    = $view;
    }
    // Free script download customer list
    public function action_free_quotes()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            //$this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_free_quotes');
        $this->selected_page_title = __('manage_free_quotes');
        $cid                       = $this->company_id;
        
        if ($usertype != 'C')
            $count_free_quotes_list = $this->manage_model->count_free_quotes_list();
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_free_quotes_list,
            'view' => 'pagination/punbb'
        ));
        if ($usertype != 'C')
            $all_free_quotes_list = $this->manage_model->all_free_quotes_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_free_quotes')->bind('all_free_quotes_list', $all_free_quotes_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ContactsList', $ContactsList)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_free_quotes');
        $this->template->page_title = __('manage_free_quotes');
        $this->template->content    = $view;
    }
    // Free script download customer details view
    public function action_free_quotes_view()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $cid            = $this->company_id;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_free_quotes_view');
        $this->selected_page_title = __('manage_free_quotes_view');
        $id                        = $this->request->param('id');
        
        $ContactsList              = $this->manage_model->free_quotes_list_view($id);
        if ($usertype == 'C' && $cid != $ContactsList[0]['id']) {
            $this->request->redirect("manage/free_quotes");
        }
        $view                       = View::factory('admin/manage_free_quotes_view')->bind('pag_data', $pag_data)->bind('ContactsList', $ContactsList)->bind('Offset', $offset)->bind('usertype', $usertype);
        $this->template->title      = SITENAME . " | " . __('manage_free_quotes_view');
        $this->template->page_title = __('manage_free_quotes_view');
        $this->template->content    = $view;
    }
    // Free script download customer for delete
    public function action_delete_free_quotes()
    {
        $id              = $this->request->param('id');
        
        $contacts        = $this->manage_model->delete_free_quotes($id);
        if ($contacts) {
            Message::success(__('Free Quotes details was deleted.'));
            $this->request->redirect("manage/free_quotes");
        }
    }
    /** user info details **/
    public function action_userinfo()
    {
		
        $user_createdby     = $this->user_createdby;
        $usertype           = $this->usertype;
        $id                 = $this->request->param('id');
        
        $user_details       = $this->manage_model->details_userinfo($id);
		//echo '<pre>';print_r($user_details);exit;
		if(count($user_details)==0){
			Message::error(__('no_data'));
			$this->request->redirect('admin/dashboard');
		}
        $view                       = View::factory('admin/userinfo')->bind('user_details', $user_details);
        $this->page_title           = __('user_inform');
        $this->template->title      = SITENAME . " | " . __('user_inform');
        $this->template->page_title = __('user_inform');
        $this->template->content    = $view;
    }
    public function action_admin_userinfo()
    {
        $user_createdby             = $this->user_createdby;
        $usertype                   = $this->usertype;
        $id                         = $this->request->param('id');
        $user_details               = $this->manage_model->details_userinfo($id);
        $view                       = View::factory('admin/admin_userinfo')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('Offset', $offset);
        $this->page_title           = __('user_inform');
        $this->template->title      = SITENAME . " | " . __('user_inform');
        $this->template->page_title = __('user_inform');
        $this->template->content    = $view;
    }
    /** passenger info details **/
    public function action_passengerinfo()
    {
        $user_createdby  = $this->user_createdby;
        $usertype        = $this->usertype;
        $id              = $this->request->param('id');
        
        $user_details    = $this->manage_model->details_passengerinfo($id);
        if (count($user_details) == 0) {
            $this->request->redirect("manageusers/passengers");
        }
        /***** Completed Transaction *********************/
        $passenger_logs_completed_transaction       = $this->manage_model->get_passenger_completed_transaction($id, 'R', 'A', '1', REC_PER_PAGE, 0, 1, '', '');
		$passengers                       = Model::factory('passengers');
		$passenger_logs_cancelled_transaction    = $passengers->passenger_cancel_transaction_details($id, COMPANY_CID, '0', REC_PER_PAGE);
		
        /**************************************************/
        
        /******* GET CHILD ACCOUNT DETAILS *******/
        $get_child_details = $this->manage_model->get_passenger_childlist($id);
		$get_favourites = $this->manage_model->get_favourite_list($id);
        
        /******* GET CHILD ACCOUNT DETAILS *******/
        
        $view                                       = View::factory('admin/passengerinfo')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('user_account_details', $user_account_details)->bind('passenger_logs_completed_transaction', $passenger_logs_completed_transaction)->bind('passenger_logs_cancelled_transaction',$passenger_logs_cancelled_transaction)->bind('get_child_details',$get_child_details)->bind('get_favourites',$get_favourites)->bind('Offset', $offset);
        $this->page_title                           = __('user_inform');
        $this->template->title                      = SITENAME . " | " . __('user_inform');
        $this->template->page_title                 = __('user_inform');
        $this->template->content                    = $view;
    }
    /** company info details **/
    public function action_companyinfo()
    {
        $user_createdby             = $this->user_createdby;
        $usertype                   = $this->usertype;
        $id                         = $this->request->param('id');
        
        $user_details               = $this->manage_model->details_userinfo($id);
        $view                       = View::factory('admin/companyinfo')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('Offset', $offset);
        $this->page_title           = __('companyinformation');
        $this->template->title      = SITENAME . " | " . __('companyinformation');
        $this->template->page_title = __('companyinformation');
        $this->template->content    = $view;
    }
    /** driver info details **/
    public function action_driverinfo()
    {
		$param = $this->request->query();
		
		if(!empty($param)) {
			$status = $this->request->query('status');
			$code = $this->request->query('code');
			if($code == 1)  {
				Message::success(__($status));			
			} else {
				Message::error(__($status));
			}
		}

        $user_createdby  = $this->user_createdby;
        $usertype        = $this->usertype;
        $company_id      = $this->company_id;
        $country_id      = $this->country_id;
        $state_id        = $this->state_id;
        $city_id         = $this->city_id;
        $id              = $this->request->param('id');
        $user_details1   = $this->manage_model->details_userinfo($id, '1');
       
        if (count($user_details1) == 0) {
            $this->urlredirect->redirect('manage/driver');
        }
        $pmid        = $this->manage_model->check_peoplecompanyid($id);
		if(!empty($pmid)){
			$driver_cmid = $pmid['company_id'];
			if ($usertype == 'C') {
				
				if (($company_id != $pmid['company_id']) || ($pmid['user_type'] != 'D')) {
					$this->urlredirect->redirect('company/dashboard');
				}
			} else if ($usertype == 'M') {
				if (($company_id !== $pmid['company_id']) || ($state_id !== $pmid['login_state']) || ($city_id !== $pmid['login_city']) || ($country_id !== $pmid['login_country']) || ($pmid['user_type'] != 'D')) {
					$this->urlredirect->redirect('manager/dashboard');
				}
			}	
		}
        $user_details                      = $this->driver_model->get_driver_logs1($id, 'R', 'A', '1', '0',REC_PER_PAGE);
		
        $driver_profile                    = $this->driver_model->get_my_profile_details($id);
        $getDriverShiftStatus              = $this->driver_model->getDriverShiftStatus($id);
        $get_transaction                   = $this->driver_model->get_trans_of_driver($id, REC_PER_PAGE);
        $get_tot_trans_driver              = $this->driver_model->get_total_trans_driver($id);
        $get_tot_ratings_driver            = $this->driver_model->get_total_ratings_driver($id);
        //Getting In Progress Data
        $driver_logs_progress              = $this->driver_model->get_driver_logs($id, 'R', 'A', '2', $driver_cmid);
		
        //Getting all Completed driver logs
        $driver_logs_completed             = $this->driver_model->get_driver_logs_completed($id, 'R', 'A', '1', REC_PER_PAGE, '0');
		
        //Getting all Completed driver logs
        $driver_logs_completed_transaction = $this->manage_model->get_driver_completed_transaction($id, 'R', 'A', '1', REC_PER_PAGE, 0, 1, '', '');
        //$count_driver_logs_completed_transaction = count($this->manage_model->get_driver_completed_transaction($id,'R','A','1',REC_PER_PAGE,0,1,'',''));
        //Getting Up Coming Data
        $driver_logs_upcoming              = $this->driver_model->get_driver_logs($id, 'R', 'A', '0', $driver_cmid);
		
        $get_trip_statitics                = $this->driver_model->get_trip_statitics($id);
		$rejected_count = $completed_trips = $cancelled_trips = 0;
		
		$rejected_count = (isset($get_trip_statitics['rejected_trips']))?$this->datalooping($get_trip_statitics['rejected_trips'],'rejected_count'):0;
		$completed_count = (isset($get_trip_statitics['completed_trips']))?$this->datalooping($get_trip_statitics['completed_trips'],'completed_count'):0;
		$cancelled_count = (isset($get_trip_statitics['cancelled_trips']))?$this->datalooping($get_trip_statitics['cancelled_trips'],'cancelled_count'):0;
		if ($rejected_count != 0 && $completed_count != 0 && $cancelled_count != 0) {
            $total_trip_statitics = 1;
        } else {
            $total_trip_statitics = 0;
        }
//~ echo $id;
        $get_driver_shift_logs             = $this->driver_model->get_driver_shift_logs($id, REC_PER_PAGE, '0');
		
	       //~ echo "<pre>"; print_r( $get_driver_shift_logs    ); exit;
		$count_get_driver_shift_logs       = count($get_driver_shift_logs);
        $driver_tracking                   = $this->driver_model->get_my_trips($id);
		//echo "<pre>"; print_r( $get_trip_statitics ); exit;
        $view                              = View::factory('admin/driverinfo')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('user_details1', $user_details1)->bind('driver_profile', $driver_profile)->bind('get_transaction', $get_transaction)->bind('get_tot_trans_driver', $get_tot_trans_driver)->bind('get_tot_ratings_driver', $get_tot_ratings_driver)->bind('get_trip_statitics', $get_trip_statitics)->bind('total_trip_statitics', $total_trip_statitics)->bind('driver_logs_progress', $driver_logs_progress)->bind('driver_logs_completed', $driver_logs_completed)->bind('driver_logs_completed_transaction', $driver_logs_completed_transaction)
        //->bind('count_driver_logs_completed_transaction',$count_driver_logs_completed_transaction)
            ->bind('driver_logs_upcoming', $driver_logs_upcoming)->bind('count_get_driver_shift_logs', $count_get_driver_shift_logs)->bind('get_driver_shift_logs', $get_driver_shift_logs)->bind('driver_tracking', $driver_tracking)->bind('Offset', $offset)->bind('drivershift',$getDriverShiftStatus);
        $this->page_title                  = __('rating_drivers');
        $this->template->title             = SITENAME . " | " . __('driver_info');
        $this->template->page_title        = __('driver_info');
        $this->template->content           = $view;
    }
	public function datalooping($param,$param2)
    {
		$count = 0;
		if(!empty($param)){
			for($i=0;$i<=count($param);$i++){
				$count += (isset($param[$i][$param2]))?$param[$i][$param2]:0;
			}
		}else{
			$count = 0;
		}
		//echo "<pre>"; print_r($param); exit;
		return $count;
	}
    public function action_driver_completed_logs()
    {
        $startdate                         = $_POST['startdate'];
        $enddate                           = $_POST['enddate'];
        $driver_id                         = $_POST['driver_id'];
        $driver_logs_completed_transaction = $this->manage_model->get_driver_completed_transaction($driver_id, 'R', 'A', '1', REC_PER_PAGE, 0, 0, $startdate, $enddate);
        //echo count($driver_logs_completed_transaction);
		$view                              = View::factory('admin/drivercompleted_logs')->bind('driver_logs_completed_transaction', $driver_logs_completed_transaction);
        echo $view; exit;
    }
    public function action_passenger_completed_logs()
    {
        $startdate                         = $_POST['startdate'];
        $enddate                           = $_POST['enddate'];
        $passenger_id                      = $_POST['passenger_id'];
        $driver_logs_completed_transaction = $this->manage_model->get_passenger_completed_transaction($passenger_id, 'R', 'A', '1', REC_PER_PAGE, 0, 0, $startdate, $enddate);
        //echo count($driver_logs_completed_transaction);			
        $html                              = "";
        if (count($driver_logs_completed_transaction) > 0) {
            $html .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">						
						<thead>
						<tr>
							<td>#</td>
							<td>' . __('passenger_name') . '</td>
							<td><b>' . __('pickuploc_droploc') . '</b></td>
							<td><b>' . __('pictup_date') . '</b></td>
							<td><b>' . __('distance_km') . '</b></td>		
							<td><b>' . __('tax') . '</b></td>	
							<td><b>' . __('trip_total_fare') . '</b></td>								
							<td><b>' . __('equivalent_to_usd') . CURRENCY_FORMAT . '</b></td>
							</tr>
						</tr>
						</thead>';
            $i = 1;
            ($i % 2 == 1) ? $class = "eventr" : $class = "oddtr";
            foreach ($driver_logs_completed_transaction as $values) {
                $distance      = round($values['distance'], 2);
                $current_fare  = round($values['fare'], 2);
                $company_tax   = $values['Taxamt'];
                //$percentvalue = ($company_tax/100)*$current_fare;
                //$currtotal = $current_fare - $company_tax;
                $travel_status = $values['travel_status'];
                if ($this->company_id != 0) {
                    $company_currency = findcompany_currency($this->company_id);
                } else {
                    $company_currency = findcompany_currency($values['company_id']);
                }
                $company_currency_format = findcompany_currencyformat($values['company_id']);
                $convet_amt              = currency_conversion($company_currency_format, $current_fare);
                $convet_amt              = round($convet_amt, 2);
                if ($travel_status == 0) {
                    $status    = __('critical');
                    $row_solor = 'style="color:#00FF00;"';
                } elseif ($travel_status == 1) {
                    $status    = __('completed');
                    $row_solor = 'style="color:#00FF00;"';
                } elseif ($travel_status == 2) {
                    $status    = __('inprogress');
                    $row_solor = 'style="color:#0000FF;"';
                }
                if ($travel_status == 3) {
                    $status    = __('start_to_pickup');
                    $row_solor = 'style="color:#FFFF00;"';
                } elseif ($travel_status == 4) {
                    $status    = __('cancel_by_passenger');
                    $row_solor = 'style="color:#990066;"';
                } elseif ($travel_status == 5) {
                    $status    = __('waiting_payment');
                    $row_solor = 'style="color:#00FFFF;"';
                } elseif ($travel_status == 6) {
                    $status    = __('missed');
                    $row_solor = 'style="color:#FF6633;"';
                } elseif ($travel_status == 7) {
                    $status    = __('dispatched');
                    $row_solor = 'style="color:#003333;"';
                } elseif ($travel_status == 8) {
                    $status    = __('cancelled');
                    $row_solor = 'style="color:#990000;"';
                } //echo $row_solor;
				$name = (isset($values['name'][0]))?ucfirst($values['name'][0]):"";
                $html .= '
								<tr class=' . $class . '>	
								<td>' . $i . '</td>
								<td>' . $name . '</td>
								<td><p ' . $row_solor . '>' . $values['current_location'] . '</p>
								<p>' . $values['drop_location'] . '</p></td>
								<td>' . date('d/m/Y', strtotime($values['pickup_time'])) . ' ' . __('at') . '<br>' . date('h:i:s A', strtotime($values['pickup_time'])) . '</td>
								<td>' . $distance . '</td>								
								<td>' . $company_currency . $company_tax . '</td>
								<td>' . $company_currency . $current_fare . '</td>
								<td>' . $convet_amt . '</td>															
								</tr>';
                $i++;
            }
            $html .= '</table>
							<div align="left" class="button blackB"> 
				<input type="button" name="gen_pdf" id="gen_pdf" value="' . __('gen_pdf') . '" title="' . __('gen_pdf') . '" onclick="gen_pdf(this.value)">				
				</div><div align="left" class="button blackB"> 
				<input type="button" name="sendmail" id="sendmail" value="' . __('send_mail') . '" title="' . __('send_mail') . '" onclick="gen_pdf(this.value)"></div>	';
        } else {
            $html .= "<div class='no_data'>" . __('no_data') . "</div>";
        }
        echo $html;
        exit;
    }
    // Generate PDF *******************/
    public function action_genpdf()
    {
        $url          = $_SERVER['HTTP_REFERER'];
        $split        = explode('/', $url);
        $request_page = $split[4];
        $startdate    = $_POST['userstartdate'];
        $enddate      = $_POST['userenddate'];
        $driver_id    = $_POST['user_id'];
        $driver_name  = $_POST['user_name'];
        $type         = $_POST['type_export'];
        $user_type    = $_POST['user_type'];
        if ($request_page != 'passengerinfo') {
            $user_details1 = $this->manage_model->details_userinfo($driver_id);
        }
		$driver_details                    = $this->driver_model->get_driver_profile_details($driver_id);
        if ($user_type == 'D') {
            $driver_details                    = $this->driver_model->get_driver_profile_details($driver_id);
            $email                             = $driver_details[0]['email'];
            $driver_logs_completed_transaction = $this->manage_model->get_driver_completed_transaction($driver_id, 'R', 'A', '1', REC_PER_PAGE, 0, 0, $startdate, $enddate);
        } else {
            $passengers_details                = $this->passengers_model->get_passenger_profile_details($driver_id);
            $email                             = $passengers_details['passengerdetails'][0]['email'];
            $driver_logs_completed_transaction = $this->manage_model->get_passenger_completed_transaction($driver_id, 'R', 'A', '1', REC_PER_PAGE, 0, 0, $startdate, $enddate);
        }
		//print_r($driver_logs_completed_transaction); exit;
		$html = View::factory('admin/genpdf')
				->bind('request_page', $request_page)
				->bind('user_details1', $user_details1)
				->bind('passengers_details', $passengers_details)
				->bind('companyid', $this->company_id)
				->bind('driver_logs_completed_transaction', $driver_logs_completed_transaction);
        $html = preg_replace("<tbody>", " ", $html);
        $html = preg_replace("</tbody>", " ", $html);
       // echo $html; exit;
        ob_clean();
        $filename = __('INVOICE') . '-' . $driver_name . '-' . date('m-d-y-s');
        if ($type == __('gen_pdf')) {
            $generate_pdf = $this->manage_model->generate_pdf($html, $filename);
        } else {
            $filepath     = $_SERVER['DOCUMENT_ROOT'] . "/public/uploads/driver_invoice/" . $filename;
            $generate_pdf = $this->manage_model->send_pdf($html, $driver_name, $email, $filepath);
            if ($generate_pdf == 1) {
                $mail              = "";
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => $driver_name,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver_invoice.html', $replace_variables);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/driver_invoice-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/driver_invoice-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver_invoice.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'driver_invoice.html', $replace_variables);
				}
                $to                = $email; //'senthilkumar.a@ndot.in';//
                $from              = $this->siteemail;
                $subject           = __('driver_invoice') . ' ' . $this->app_name;
                $redirect          = ($user_type == 'D') ? "manage/driverinfo/" . $driver_id : "manage/passengerinfo/" . $driver_id;
                $attachment        = $filepath . '.pdf';
                if (SMTP == 1) {
                    include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                } else {
                    $email_from    = 'maheswaran.r@ndot.in'; // Who the email is from
                    $email_subject = 'driver invoice'; // The Subject of the email
                    $email_message = 'driver invoice';
                    $email_to      = 'senthilkumar.a@ndot.in'; // Who the email is to
                    $headers       = "From: " . $email_from;
                    $semi_rand     = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
                    $email_message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type:text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $email_message .= "\n\n";
                    $fileatt      = $filename; // Path to the file
                    $fileatt_type = "application/pdf"; // File Type
                    //$fileatt_name = 'voucher'.$id.".pdf"; // Filename that will be used for the file as the attachment
                    $file         = fopen($fileatt, 'rb');
                    $data         = fread($file, filesize($fileatt));
                    fclose($file);
                    $data         = chunk_split(base64_encode($data));
                    $fileatt_name = 'voucher' . md5(time()) . ".pdf";
                    $email_message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" . " name=\"{$fileatt_name}\"\n" . 
                    //"Content-Disposition: attachment;\n" .
                        
                    //" filename=\"{$fileatt_name}\"\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data .= "\n\n";
                    $email_message .= "--{$mime_boundary}\n" . $ok = @mail($email_to, $email_subject, $email_message, $headers);
                    // To send HTML mail, the Content-type header must be set      
                }
                Message::success(__('invoice_send'));
                $this->request->redirect(URL_BASE . $redirect);
            } else {
                $this->request->redirect("manage/driver/" . $driver_id . "");
            }
        }
    }
    public function action_driverlogs()
    {
        $id                        = $this->request->param('id');
        $this->selected_page_title = __('manage_content');
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        $count_driver_logs         = $this->driver_model->count_get_driver_logs_service($id);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_driver_logs,
            'view' => 'pagination/punbb'
        ));
        $driver_logs_service        = $this->driver_model->get_driver_logs_service($id, REC_PER_PAGE, $offset);
        $view                       = View::factory('admin/driverlogs')->bind('pag_data', $pag_data)->bind('driver_logs_service', $driver_logs_service);
        $this->page_title           = __('service_time');
        $this->template->title      = SITENAME . " | " . __('service_time');
        $this->template->page_title = __('service_time');
        $this->template->content    = $view;
    }
    public function action_drivershifthistory()
    {
        $id                          = $this->request->param('id');
        $this->selected_page_title   = __('manage_content');
        //pagination loads here
        $page_no                     = isset($_GET['page']) ? $_GET['page'] : 0;
        $count_get_driver_shift_logs = $this->driver_model->count_get_driver_shift_logs($id);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_get_driver_shift_logs,
            'view' => 'pagination/punbb'
        ));
        $_POST['desc'] = true;
        $driver_shift_logs          = $this->driver_model->get_driver_shift_logs($id, REC_PER_PAGE, $offset);
        
        $view                       = View::factory('admin/drivershifts')->bind('pag_data', $pag_data)->bind('driver_shift_logs', $driver_shift_logs)->bind('driver_id', $id);
        $this->page_title           = __('shift_history');
        $this->template->title      = SITENAME . " | " . __('shift_history');
        $this->template->page_title = __('shift_history');
        $this->template->content    = $view;
    }
    public function action_taxilogs()
    {
        $id                        = $this->request->param('id');
        $this->selected_page_title = __('manage_content');
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        $count_driver_logs         = $this->driver_model->count_get_taxi_logs_service($id);
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_driver_logs,
            'view' => 'pagination/punbb'
        ));
        $taxi_logs_service          = $this->driver_model->get_taxi_logs_service($id, REC_PER_PAGE, $offset);
        $view                       = View::factory('admin/taxilogs')->bind('pag_data', $pag_data)->bind('taxi_logs_service', $taxi_logs_service);
        $this->page_title           = __('service_time');
        $this->template->title      = SITENAME . " | " . __('service_time');
        $this->template->page_title = __('service_time');
        $this->template->content    = $view;
    }
    
    public function action_contents()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_content');
        $this->selected_page_title = __('manage_content');
        
        $count_content_list        = $this->manage_model->count_content_list();
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_content_list,
            'view' => 'pagination/punbb'
        ));
        $all_content_list           = $this->manage_model->all_content_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_content')->bind('all_content_list', $all_content_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ContentList', $ContentList)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_content');
        $this->template->page_title = __('manage_content');
        $this->template->content    = $view;
    }
    public function action_company_contents()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'A' || $usertype == 'C') {
            //$this->request->redirect("company/login");
        } else {
            $this->request->redirect("admin/login");
        }
        $cid                       = $this->company_id;
        $this->page_title          = __('manage_content');
        $this->selected_page_title = __('manage_content');
        
        $count_content_list        = $this->manage_model->count_company_content_list($cid);
        //pagination loads here
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_content_list,
            'view' => 'pagination/punbb'
        ));
        $all_content_list           = $this->manage_model->all_company_content_list($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_company_content')->bind('all_content_list', $all_content_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ContentList', $ContentList)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_content');
        $this->template->page_title = __('manage_content');
        $this->template->content    = $view;
    }
    public function action_content_view()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title           = __('manage_content_view');
        $this->selected_page_title  = __('manage_content_view');
        $id                         = $this->request->param('id');
        $ContactsList               = $this->manage_model->content_list_view($id);
        $view                       = View::factory('admin/manage_content_view')->bind('pag_data', $pag_data)->bind('ContactsList', $ContactsList)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_content_view');
        $this->template->page_title = __('manage_content_view');
        $this->template->content    = $view;
    }
    //for deleting contents
    public function action_delete_content()
    {
        $id                   = $this->request->param('id');
        $ratingdrivers        = $this->manage_model->delete_content($id);
        if ($ratingdrivers) {
            Message::success(__('Content was deleted.'));
            $this->request->redirect("manage/contents");
        }
    }
    public function action_status_company_content()
    {
        $status = $this->request->param('id');
        //echo $status;exit;
        //$status = $this->request->query('status'); 
        
        $this->manage_model->company_content_request_change($_REQUEST['uniqueId'], $status);
        //Flash message for Reject
        //==========================
        if ($status == 1)
            Message::success(__('Checked requests have been changed to activated status.'));
        else if ($status == 0)
            Message::success(__('Checked requests have been changed to blocked status.'));
        $this->request->redirect("manage/company_contents");
    }
    //for edit content view 
    public function action_content_edit_view()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('edit_content_view');
        $this->selected_page_title = __('edit_content_view');
        $id                        = $this->request->param('id');
        /** Select menus **/
        $menu_details              = $this->manage_model->get_menus();
        $signup_submit             = arr::get($_REQUEST, 'submit_addcompany');
        $ContactsList              = $this->manage_model->content_list_view($id);
        //redirect to list page if there is no content
        if (count($ContactsList) == 0) {
            $this->request->redirect("manage/contents");
        }
        $errors     = array();
        $postvalues = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalues = $_POST;
            $post       = Arr::map('trim', $this->request->post());
            $validator  = $this->manage_model->validate_editview(arr::extract($post, array(
                'menu_name',
                'meta_title',
                'meta_keyword',
                'meta_description'
            )));
            if ($validator->check()) {
                $menu_name_exits = $this->manage_model->menu_name_exits($post, $id);
                if ($menu_name_exits == 1) {
                    Message::error(__('content_already_exits'));
                    $this->request->redirect("manage/contents");
                }
                $signup_id = $this->manage_model->update_editview_content($post, $id);
                if ($signup_id == 1) {
                    Message::success(__('profile_updated_successfully'));
                    $this->request->redirect("manage/contents");
                } else {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/contents");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_content_view')->bind('errors', $errors)->bind('pag_data', $pag_data)->bind('postvalue', $postvalues)->bind('company_details', $ContactsList)->bind('Offset', $offset)->bind('menu_details', $menu_details);
        $this->template->title      = SITENAME . " | " . __('edit_content_view');
        $this->template->page_title = __('edit_content_view');
        $this->template->content    = $view;
    }
    //for edit content view 
    public function action_company_content_edit()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'A' || $usertype == 'C') {
        } else {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('edit_content_view');
        $this->selected_page_title = __('edit_content_view');
        $id                        = $this->request->param('id');
        
        $ContactsList              = $this->manage_model->company_content_list_view($id);
        $cid                       = $this->company_id;
        if ($usertype == 'C' && $ContactsList[0]['company_id'] != $cid) {
            Message::error(__('company_content_error_msg'));
            $this->request->redirect("manage/company_contents");
        }
        /** Select menus **/
        $menu_details  = $this->manage_model->get_menus();
        $signup_submit = arr::get($_REQUEST, 'submit_addcompany');
        $errors        = array();
        $postvalues    = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $postvalues = $_POST;
            $post       = Arr::map('trim', $this->request->post());
            $validator  = $this->manage_model->validate_companyeditview(arr::extract($post, array(
                'menu_name',
                'page_title',
                'page_url'
            )), $cid, $id);
            if ($validator->check()) {
                $signup_id = $this->manage_model->update_edit_company_content($post, $id);
                Message::success(__('profile_updated_successfully'));
                $this->request->redirect("manage/company_contents");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $ContactsList               = $this->manage_model->company_content_list_view($id);
        $view                       = View::factory('admin/edit_content_company')->bind('errors', $errors)->bind('pag_data', $pag_data)->bind('postvalue', $postvalues)->bind('company_details', $ContactsList)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('edit_content_view');
        $this->template->page_title = __('edit_content_view');
        $this->template->content    = $view;
    }
    
    /** getting manager details **/
    public function action_managerdetails()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if (($usertype == 'M')) {
            $this->urlredirect->redirect('manager/dashboard');
        }
        $id              = $this->request->param('id');
        
        $cmid            = $this->manage_model->check_peoplecompanyid($id);
        //print_r($cmid );exit;
        if ($usertype == 'C') {
            if (($company_id != $cmid['company_id']) || ($cmid['user_type'] != 'M')) {
                $this->urlredirect->redirect('company/dashboard');
            }
        }
        $user_details = $this->manage_model->details_userinfo($id);
        //if invalid id is given redirect to manage page
        if (count($user_details) == 0) {
            $this->request->redirect("manage/manager");
        }
        $view                       = View::factory('admin/managerdetails')->bind('pag_data', $pag_data)->bind('user_details', $user_details)->bind('id', $id)->bind('Offset', $offset);
        $this->page_title           = __('managerinformation');
        $this->template->title      = SITENAME . " | " . __('managerinformation');
        $this->template->page_title = __('managerinformation');
        $this->template->content    = $view;
    }
    public function action_getcompanymanagerlist()
    {
        
        $output        = '';
        $company_id    = arr::get($_REQUEST, 'company_id');
        $page_no       = arr::get($_REQUEST, 'page');
		$page_title = __('manager_management');
        $count_details = $this->manage_model->get_companymanagerlist($company_id,'','',true);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/puncm'
        ));
        $getmodel_details = $this->manage_model->get_companymanagerlist($company_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 5) {
            $output .= '<div class="button greyish"><a href="' . URL_BASE . 'manage/managersearch?keyword=&status=&filter_company=' . $company_id . '">View All</a></div>                       
				</div>';
        } else {
            $output .= '<div class="button greyish"></div></div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('manager_management')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('state_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/managerdetails/' . $listings['id'] . '>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>	
				<td>' . wordwrap($listings['state_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>

				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > REC_PER_PAGE) {
            $output .= '</div>';
            //} 
            $output .= '</div><div class="clr">&nbsp;</div>';
            $output .= '<div class="pagination">';
            //if($count > 0) { 
            $output .= '<p>' . $pag_data->render() . '</p>';
            //}
            $output .= '</div><div class="clr">&nbsp;</div>';
        }
        echo $output;
        exit;
    }
    public function action_getcompanydriverlist()
    {
        
        $output        = '';
        $company_id    = arr::get($_REQUEST, 'company_id');
        $page_title    = __('company_driver');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->get_companydriverlist($company_id,'','',true);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/puncd'
        ));
        $getmodel_details = $this->manage_model->get_companydriverlist($company_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 5) {
            $output .= '<div class="button greyish"><a href="' . URL_BASE . 'manage/driversearch?keyword=&status=&filter_company=' . $company_id . '">View All</a></div>                       
				</div>';
        } else {
            $output .= '<div class="button greyish"></div></div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('state_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/driverinfo/' . $listings['id'] . '>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>	
				<td>' . wordwrap($listings['state_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>

				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > REC_PER_PAGE) {
            $output .= '</div>';
            // } 
            $output .= '</div><div class="clr">&nbsp;</div>';
            $output .= '<div class="pagination">';
            //if($count > 0) { 
            $output .= '<p>' . $pag_data->render() . '</p>';
            //}
            $output .= '</div><div class="clr">&nbsp;</div>';
        }
        echo $output;
        exit;
    }
    public function action_getcompanytaxilist()
    {
        
        $output        = '';
        $company_id    = arr::get($_REQUEST, 'company_id');
        $page_title    = __('company_taxi');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->get_companytaxilist($company_id,'','',true);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punct'
        ));
        $getmodel_details = $this->manage_model->get_companytaxilist($company_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 5) {
            $output .= '<div class="button greyish"><a href="' . URL_BASE . 'manage/taxisearch?keyword=&status=&filter_company=' . $company_id . '">View All</a></div> </div>';
        } else {
            $output .= '<div class="button greyish"></div> </div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('taxi_no')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('state_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['taxi_status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/taxiinfo/' . $listings['taxi_id'] . '>' . wordwrap(ucfirst($listings['taxi_no']), 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>	
				<td>' . wordwrap($listings['state_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>

				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > REC_PER_PAGE) {
            $output .= '</div>';
            //} 
            $output .= '</div><div class="clr">&nbsp;</div>';
            $output .= '<div class="pagination">';
            //if($count > 0) { 
            $output .= '<p>' . $pag_data->render() . '</p>';
            //}
            $output .= '</div><div class="clr">&nbsp;</div>';
        }
        echo $output;
        exit;
    }
    /** getting driver rating list **/
    public function action_getuserratinglist()
    {
        
        $output        = '';
        $driver_id     = arr::get($_REQUEST, 'user_id');
        $page_title    = __('manage_rating_taxi');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->getuserratinglist($driver_id);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punrtu'
        ));
        $getmodel_details = $this->manage_model->get_userratinglist($driver_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        //<div class="button greyish"><a href="'.URL_BASE.'manageusers/passengers">View All</a></div>
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('Current_Location') . '</td>
				<td align="left" width="10%">' . __('Drop_Location') . '</td>
				<td align="left" width="10%">' . __('No_Passengers') . '</td>
				<td align="left" width="10%">' . __('pictup_date') . '</td>
				<td align="left" width="10%">' . __('pictup_time') . '</td>
				<td align="left" width="10%">' . __('rating_points') . '</td>
				<td align="left" width="10%">' . __('comments') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">';
                if ($listings['rating'] == 0) {
                    $txt = "Not rated yet";
                } else {
                    $txt = $listings['rating'] . ' / 5';
                }
                if (empty($listings['comments'])) {
                    $txt1 = "No comments";
                } else {
                    $txt1 = $listings['comments'];
                }
                $drop = "-";
                if ($listings['drop_location'])
                    $drop = wordwrap(ucfirst($listings['drop_location']), 30, '<br/>', 1);
                $no_passengers = "-";
                if ($listings['no_passengers'])
                    $no_passengers = wordwrap(ucfirst($listings['no_passengers']), 30, '<br/>', 1);
                $output .= '<td>' . $sno . '</td>
				<td>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['current_location']), 30, '<br/>', 1) . '</td>
				<td>' . $drop . '</td>
				<td>' . $no_passengers . '</td>
				<td>' . wordwrap(date('d/m/Y', strtotime($listings['pickup_time'])), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['waitingtime']), 30, '<br/>', 1) . ' Mins</td>
				<td>' . $txt . '</td>
				<td>' . wordwrap(ucfirst($txt1), 30, '<br/>', 1) . '</td>
				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    /** getting driver rating list **/
    public function action_getdriverratinglist()
    {
        
        $output        = '';
        $driver_id     = arr::get($_REQUEST, 'driver_id');
        $page_title    = __('manage_rating_taxi');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->getdriverratinglist($driver_id);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punrtd'
        ));
        $getmodel_details = $this->manage_model->get_driverratinglist($driver_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 0) {
            $output .= '<div class="button greyish"></div></div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('passenger_name')) . '</td>
				<td align="left" width="10%">' . __('Current_Location') . '</td>
				<td align="left" width="10%">' . __('Drop_Location') . '</td>
				<td align="left" width="10%">' . __('No_Passengers') . '</td>
				<td align="left" width="10%">' . __('pictup_date') . '</td>
				<td align="left" width="10%">' . __('pictup_time') . '</td>
				<td align="left" width="10%">' . __('waiting_time') . '</td>
				<td align="left" width="10%">' . __('rating_points') . '</td>
				<td align="left" width="10%">' . __('comments') . '</td>
				</tr>
				</thead>
				<tbody>	';
            $sno = $offset;
            /* For Serial No */
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">';
                if ($listings['rating'] == 0) {
                    $txt = "Not rated yet";
                } else {
                    $txt = $listings['rating'] . ' / 5';
                }
                if (empty($listings['comments'])) {
                    $txt1 = "No comments";
                } else {
                    $txt1 = $listings['comments'];
                }
                $output .= '<td>' . $sno . '</td>
				<td>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['current_location']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['drop_location']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['no_passengers']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(date('d/m/Y', strtotime($listings['pickup_time'])), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(date('H:i:s', strtotime($listings['pickup_time'])), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap(ucfirst($listings['waitingtime']), 30, '<br/>', 1) . ' Mins</td>
				<td>' . $txt . '</td>
				<td>' . wordwrap(ucfirst($txt1), 30, '<br/>', 1) . '</td>
				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    /** getting manager driver list **/
    public function action_getmanagerdriverlist()
    {
        
        $output        = '';
        $manager_id    = arr::get($_REQUEST, 'manager_id');
        $page_title    = __('company_driver');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->getmanagerdriverlist($manager_id,'','',true);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punmd'
        ));
		if($count_details>0){
			$driver_details = $this->manage_model->getmanagerdriverlist($manager_id, $offset, REC_PER_PAGE);
			//echo '<pre>';print_r($driver_details);exit;
			$company_id         = $driver_details[0]['company_id'];
		}
        
        $output .= '<div class="widget"><div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6> <div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count_details > 5) {
            $output .= '<div class="button greyish"><a href="' . URL_BASE . 'manage/driversearch?keyword=&status=&filter_company=' . $company_id . '">View All</a></div></div>';
        } else {
            $output .= '<div class="button greyish"></div></div>';
        }
        $output .= '</div>';
        if ($count_details > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count_details > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('state_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				</tr>
				</thead>
				<tbody>	';
            /* For Serial No */
            $sno = $offset;
            foreach ($driver_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/driverinfo/' . $listings['_id'] . '>' . wordwrap(ucfirst($listings['name']), 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>	
				<td>' . wordwrap($listings['state_name'], 25, '<br />', 1) . '</td>						
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>

				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        /*if ($count_details > REC_PER_PAGE) {
            $output .= '</div>';
            // } 
            $output .= '</div><div class="clr">&nbsp;</div>';
            $output .= '<div class="pagination">';
            //if($count > 0) { 
            $output .= '<p>' . $pag_data->render() . '</p>';
            //}
            $output .= '</div><div class="clr">&nbsp;</div>';
        }*/
        echo $output;
        exit;
    }
    /** getting manger taxi list**/
    public function action_getmanagertaxilist()
    {
        
        $output        = '';
        $manager_id    = arr::get($_REQUEST, 'manager_id');
        $page_title    = __('company_taxi');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->get_managertaxilist($manager_id,'','',true);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punmt'
        ));
		if($count_details>0){
			$taxi_details = $this->manage_model->get_managertaxilist($manager_id, $offset, REC_PER_PAGE);
			//echo '<pre>';print_r($taxi_details);exit;
			$company_id         = $taxi_details[0]['company_id'];
		}
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count_details > 5) {
            $output .= '<div class="button greyish"><a href="' . URL_BASE . 'manage/taxisearch?keyword=&status=&filter_company=' . $company_id . '">View All</a></div>                       
				</div>';
        } else {
            $output .= '<div class="button greyish"></div>                       
				</div>';
        }
        $output .= '</div>';
        if ($count_details > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count_details > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%" style="min-width: 22px !important;" >Status</td>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('taxi_no')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('country_label') . '</td>
				<td align="left" width="10%">' . __('state_label') . '</td>
				<td align="left" width="10%">' . __('city_label') . '</td>
				</tr>
				</thead>
				<tbody>	';
            /* For Serial No */
            $sno = $offset;
            foreach ($taxi_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">
				<td>';
                if ($listings['taxi_status'] == 'A') {
                    $txt   = "Deactivate";
                    $class = "unsuspendicon";
                } else {
                    $txt   = "Activate";
                    $class = "blockicon";
                }
                $output .= '<a href="javascript:void(0);" title =' . $txt . ' class=' . $class . '></a>';
                $output .= '</td> 
				<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/taxiinfo/' . $listings['taxi_id'] . '>' . wordwrap(ucfirst($listings['taxi_no']), 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap(ucfirst($listings['company_name']), 30, '<br/>', 1) . '</td>
				<td>' . wordwrap($listings['country_name'], 25, '<br />', 1) . '</td>	
				<td>' . wordwrap($listings['state_name'], 25, '<br />', 1) . '</td>
				<td>' . wordwrap($listings['city_name'], 25, '<br />', 1) . '</td>

				</tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        /*if ($count_details > REC_PER_PAGE) {
            $output .= '</div>';
            //} 
            $output .= '</div><div class="clr">&nbsp;</div>';
            $output .= '<div class="pagination">';
            //f($count > 0) { 
            $output .= '<p>' . $pag_data->render() . '</p>';
            //}
            $output .= '</div><div class="clr">&nbsp;</div>';
        }*/
        echo $output;
        exit;
    }
    //Transactions without Search action 
    public function action_transaction()
    {
        $user_createdby         = $this->user_createdby;
        $usertype               = $this->usertype;
        
        $get_allcompany         = $this->manage_model->get_allcompany_tranaction($usertype);
        $count_transaction_list = $this->manage_model->count_transaction_list('', '', '');
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_transaction_list,
            'view' => 'pagination/punbb'
        ));
        $all_transaction_list       = $this->manage_model->transaction_details('', '', '', $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/transactiondetails')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('get_allcompany', $get_allcompany)->bind('id', $id);
        $this->page_title           = __('transaction_list');
        $this->template->title      = SITENAME . " | " . __('transaction_list');
        $this->template->page_title = __('transaction_list');
        $this->template->content    = $view;
    }
    public function action_transaction_list()
    {
        $user_createdby         = $this->user_createdby;
        $usertype               = $this->usertype;
        $company                = trim(Html::chars($_REQUEST['filter_company']));
        $startdate              = trim(Html::chars($_REQUEST['startdate']));
        $enddate                = trim(Html::chars($_REQUEST['enddate']));
        
        $get_allcompany         = $this->manage_model->get_allcompany_tranaction();
        $count_transaction_list = $this->manage_model->count_transaction_list($company, $startdate, $enddate);
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_transaction_list,
            'view' => 'pagination/punbb'
        ));
        $all_transaction_list       = $this->manage_model->transaction_details($company, $startdate, $enddate, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/transactiondetails')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('get_allcompany', $get_allcompany)->bind('id', $id);
        $this->page_title           = __('transaction_list');
        $this->template->title      = SITENAME . " | " . __('transaction_list');
        $this->template->page_title = __('transaction_list');
        $this->template->content    = $view;
    }
    public function action_get_translist()
    {
        
        $output        = '';
        $company_id    = arr::get($_REQUEST, 'company_id');
        $page_title    = __('transaction_list');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->getcompanytranslist($company_id);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data         = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punctl'
        ));
        $getmodel_details = $this->manage_model->get_translist($company_id, $offset, REC_PER_PAGE);
        $count            = count($getmodel_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 5) {
            $output .= '<div class="button greyish"></div>                       
				</div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . __('passenger_name') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('companyname') . '</td>
				<td align="left" width="10%">' . __('email_label') . '</td>
				<td align="left" width="10%">' . __('Current_Location') . '</td>
				<td align="left" width="10%">' . __('Drop_Location') . '</td>
				<td align="left" width="10%">' . __('No_Passengers') . '</td>
				<td align="left" width="10%">' . __('pictup_date') . '</td>
				<td align="left" width="10%">' . __('pictup_time') . '</td>
				<td align="left" width="10%">' . __('waiting_time') . '</td>	
				<td align="left" width="10%">' . __('dropdate_time') . '</td>								
				<td align="left" width="10%">' . __('rating_points') . '</td>
				<td align="left" width="10%">' . __('comments') . '</td>
				</tr>
				</thead>
				<tbody>	';
            /* For Serial No */
            $sno = $offset;
            foreach ($getmodel_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">';
                $output .= '<td>' . $sno . '</td>
				<td>' . $listings['passenger_name'] . '</td>
				<td><a href=' . URL_BASE . 'manage/driverinfo/' . $listings['id'] . '>' . wordwrap($listings['driver_name'], 30, '<br/>', 1) . '</a></td>
				<td><a href=' . URL_BASE . 'manage/companydetails/' . $listings['id'] . '>' . wordwrap($listings['company_name'], 25, '<br />', 1) . '</a></td>
				<td>' . wordwrap($listings['email'], 25, '<br />', 1) . '</td>
				<td>' . $listings['current_location'] . '</td>
				<td>' . $listings['drop_location'] . '</td>
				<td>' . $listings['no_passengers'] . '</td>
				<td>' . date('d/m/Y', strtotime($listings['pickup_time'])) . '</td>
				<td>' . date('h:i:s', strtotime($listings['pickup_time'])) . '</td>
				<td>' . $listings['waitingtime'] . ' Mins</td>
				<td>' . $listings['drop_time'] . '</td>';
                if ($listings['rating'] == 0) {
                    $output .= '<td>' . '' . '</td>';
                } else {
                    $output .= '<td>' . $listings['rating'] . '</td>';
                }
                $output .= '<td>' . $listings['comments'] . '</td></tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    /** driver info details **/
    public function action_driver_unavailable()
    {
        $user_createdby      = $this->user_createdby;
        $usertype            = $this->usertype;
        $driver_id           = $this->request->param('id');
        $unavailable_details = $this->manage_model->driver_unavailable($driver_id);
        $signup_submit       = arr::get($_REQUEST, 'submit_addleave');
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->manage_model->validate_unavailabledriver(arr::extract($post, array(
                'driver_id',
                'reason',
                'startdate',
                'enddate'
            )));
            if ($validator->check()) {
                $update = $this->manage_model->add_unavailabledriver($post);
                Message::success(__('profile_updated_successfully'));
                $this->request->redirect("manage/unavailability");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/driver_unavailable')->bind('pag_data', $pag_data)->bind('validator', $validator)->bind('driver_id', $driver_id)->bind('errors', $errors)->bind('unavailable_details', $unavailable_details)->bind('Offset', $offset)->bind('postvalue', $post_values);
        $this->page_title           = __('mark_unavailable');
        $this->template->title      = SITENAME . " | " . __('mark_unavailable');
        $this->template->page_title = __('mark_unavailable');
        $this->template->content    = $view;
    }
    public function action_getunavilabledriverlist()
    {
        
        $output        = '';
        $driver_id     = arr::get($_REQUEST, 'driver_id');
        $page_title    = __('unavailability');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $this->manage_model->getunavailabledriverlist($driver_id);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data          = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/puncmal'
        ));
        $getdriver_details = $this->manage_model->get_unavailabledriverlist($driver_id, $offset, REC_PER_PAGE);
        $count             = count($getdriver_details);
        $output .= '<div class="widget">
				<div class="title"><img src="' . IMGPATH . 'icons/dark/frames.png" alt="" class="titleIcon" /><h6>' . $page_title . '</h6>
				<div style="width:auto; float:right; margin: 4px 3px;">';
        if ($count > 0) {
            $output .= '<div class="button greyish"></div>                       
				</div>';
        }
        $output .= '</div>';
        if ($count > 0) {
            $output .= '<div class= "overflow-block">';
        }
        $output .= '<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">';
        if ($count > 0) {
            $output .= '<thead>
				<tr>
				<td align="left" width="5%">' . __('sno_label') . '</td>
				<td align="left" width="10%">' . ucfirst(__('driver_name')) . '</td>
				<td align="left" width="10%">' . __('email_label') . '</td>
				<td align="left" width="10%">' . __('reason') . '</td>
				<td align="left" width="10%">' . __('from_date') . '</td>
				<td align="left" width="10%">' . __('end_date') . '</td>
				</tr>
				</thead>
				<tbody>	';
            /* For Serial No */
            $sno = $offset;
            foreach ($getdriver_details as $listings) {
                //S.No Increment
                //==============
                $sno++;
                //For Odd / Even Rows
                //===================
                $trcolor = ($sno % 2 == 0) ? 'oddtr' : 'eventr';
                $output .= '<tr class="' . $trcolor . '">';
                $output .= '<td>' . $sno . '</td>
				<td><a href=' . URL_BASE . 'manage/driverinfo/' . $listings['id'] . '>' . wordwrap($listings['name'], 30, '<br/>', 1) . '</a></td>
				<td>' . wordwrap($listings['email'], 25, '<br />', 1) . '</td>
				<td>' . $listings['u_reason'] . '</td>
				<td>' . $listings['u_startdate'] . '</td>
				<td>' . $listings['u_enddate'] . '</td></tr>';
            }
        }
        //For No Records
        //==============
        else {
            $output .= '<tr>
				<td class="nodata">' . __('no_data') . '</td>
				</tr>';
        }
        $output .= '</tbody>
				</table>';
        if ($count > 0) {
            $output .= '</div>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        $output .= '<div class="pagination">';
        if ($count > 0) {
            $output .= '<p>' . $pag_data->render() . '</p>';
        }
        $output .= '</div><div class="clr">&nbsp;</div>';
        echo $output;
        exit;
    }
    public function action_unavailability()
    {
        $user_createdby         = $this->user_createdby;
        $usertype               = $this->usertype;
        
        $count_transaction_list = $this->manage_model->count_unavailability_list();
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_transaction_list,
            'view' => 'pagination/punbb'
        ));
        $all_unavailablity_list     = $this->manage_model->unavailability_details($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_unavailability')->bind('pag_data', $pag_data)->bind('all_unavailablity_list', $all_unavailablity_list)->bind('id', $id)->bind('Offset', $offset);
        $this->page_title           = __('unavailability_driver_taxi');
        $this->template->title      = SITENAME . " | " . __('unavailability_driver_taxi');
        $this->template->page_title = __('unavailability_driver_taxi');
        $this->template->content    = $view;
    }
    public function action_unavailabilitysearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('unavailability_driver_taxi');
        $this->selected_page_title = __('unavailability_driver_taxi');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->count_unavailabilitysearch_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])));
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_unavailablity_list = $this->manage_model->get_unavailabilitysearch_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_unavailability')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_unavailablity_list', $all_unavailablity_list);
        $this->template->content = $view;
    }
    public function action_availabilitytaxi()
    {
        //Page Title
        $this->page_title          = __('manage_availability_taxi');
        $this->selected_page_title = __('manage_availability_taxi');
        $count_company_list        = $this->manage_model->all_taxi_list('','',true);
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagetaxi($cid);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_taxi_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany();
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_availabilitytaxi')->bind('all_taxi_list', $all_company_list)->bind('all_companies', $get_allcompany)->bind('pag_data', $pag_data)->bind('ListCount', $count_company_list)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_availability_taxi');
        $this->template->page_title = __('manage_availability_taxi');
        $this->template->content    = $view;
    }
    public function action_availabilitytaxisearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_availability_taxi');
        $this->selected_page_title = __('manage_availability_taxi');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        $cid                       = $this->company_id;
		//get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
			//get form submit request
			$search_post = arr::get($_REQUEST, 'search_user');
			$keyword = trim(Html::chars($_REQUEST['keyword']));
			$status = trim(Html::chars($_REQUEST['status']));
			$companyid = isset($_REQUEST['filter_company'])?trim(Html::chars($_REQUEST['filter_company'])):$company_id;
			if((!empty($keyword) && isset($search_post)) || !empty($status) || !empty($companyid) ){
				if ($usertype != 'A') {
					$count_company_list = $this->manage_model->get_all_untaxi_searchlist($keyword, $status, $companyid,'','',true);
				} else {
					$count_company_list = $this->manage_model->get_all_untaxi_searchlist($keyword, $status, $companyid,'','',true);
				}
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
					'total_items' => $count_company_list,
					'view' => 'pagination/punbb'
				));
			
				if ($usertype != 'A') {
					$all_company_list = $this->manage_model->get_all_untaxi_searchlist($keyword, $status, $companyid, $offset, REC_PER_PAGE);
				} else {
					$companyid = (isset($_REQUEST['filter_company']) && !empty($_REQUEST['filter_company']))?trim(Html::chars($_REQUEST['filter_company'])):'';
					$all_company_list = $this->manage_model->get_all_untaxi_searchlist($keyword, $status, $companyid, $offset, REC_PER_PAGE);
				}
			} else {
				Message::error('Your search keyword must not be empty');
				$this->request->redirect('manage/availabilitytaxi');
			}
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        $availabilitycount       = $this->add_model->validate_packagetaxi($cid);
        //set data to view file	
        $view                    = View::factory('admin/manage_availabilitytaxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('ListCount', $count_company_list)->bind('all_companies', $get_allcompany)->bind('availabilitycount', $availabilitycount)->bind('all_taxi_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_availabilitytaxi_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->active_availabilitytaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
		if($status == 1){
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/availabilitytaxi"); //transaction/index
    }
    public function action_block_availabilitytaxi_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->block_availabilitytaxi_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
		if($status==1){
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/availabilitytaxi"); //transaction/index
    }
    public function action_availabilitydriver()
    {
        //Page Title
        $this->page_title          = __('manage_availability_driver');
        $this->selected_page_title = __('manage_availability_driver');      
        
        $count_company_list        = $this->manage_model->all_driver_list(NULL,NULL,TRUE);
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_driver_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany();
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_availabilitydriver')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_availability_driver');
        $this->template->page_title = __('manage_availability_driver');
        $this->template->content    = $view;
    }
    public function action_availabilitydriversearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_availability_driver');
        $this->selected_page_title = __('manage_availability_driver');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        if ($usertype != 'A') {
            $count_company_list = $this->manage_model->get_all_undriver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), trim(Html::chars($company_id)),NULL,NULL);
        } else {
            $count_company_list = $this->manage_model->get_all_undriver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), trim(Html::chars(isset($_REQUEST['filter_company']))),NULL,NULL);
        }
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            if ($usertype != 'A') {
                $all_company_list = $this->manage_model->get_all_undriver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), trim(Html::chars($company_id)), $offset, REC_PER_PAGE);
            } else {
                $all_company_list = $this->manage_model->get_all_undriver_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), trim(Html::chars(isset($_REQUEST['filter_company']))), $offset, REC_PER_PAGE);
            }
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_availabilitydriver')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_availabilitydriver_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->active_availabilitydriver_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/availabilitydriver"); //transaction/index
    }
    public function action_block_availabilitydriver_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->block_availabilitydriver_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/availabilitydriver"); //transaction/index
    }
    //Listed the menus
    public function action_menu()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_menu');
        $this->selected_page_title = __('manage_menu');
        $count_menu_list           = $this->manage_model->count_menu_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
			$offset                     = REC_PER_PAGE * ($page_no - 1);
			$pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_menu_list,
            'view' => 'pagination/punbb'
        ));
        $all_menu_list              = $this->manage_model->all_menu_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //Find page action in view
        $action                     = $this->request->action();
        //send data to view file 
        $view                       = View::factory('admin/manage_menu')->bind('all_menu_list', $all_menu_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_menu');
        $this->template->page_title = __('manage_menu');
        $this->template->content    = $view;
    }
    //For deleting contents
    public function action_delete_menu()
    {
        $id          = $this->request->param('id');
        $status      = $this->manage_model->delete_menu($id);
        if ($status) {
            Message::success(__('menu_was_delete'));
            $this->request->redirect("manage/menu");
        }
    }
    //Listed the miles
    public function action_mile()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if (($usertype != 'A') && ($usertype != 'S')) {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_mile');
        $this->selected_page_title = __('manage_mile');
        $count_mile_list           = $this->manage_model->count_mile_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_mile_list,
            'view' => 'pagination/punbb'
        ));
        $all_mile_list              = $this->manage_model->all_mile_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //Find page action in view
        $action                     = $this->request->action();
        //send data to view file 
        $view                       = View::factory('admin/manage_mile')->bind('all_mile_list', $all_mile_list)->bind('pag_data', $pag_data)->bind('MileList', $MileList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_mile');
        $this->template->page_title = __('manage_mile');
        $this->template->content    = $view;
    }
    //Active miles request function
    public function action_active_mile_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_mile_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/mile");
    }
    //Block miles request function
    public function action_block_mile_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_mile_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/mile");
    }
    //Trash miles request function
    public function action_trash_mile_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->trash_mile_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests has been deleted'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/mile");
    }
    //For deleting miles
    public function action_delete_mile()
    {
        $id          = $this->request->param('id');
        $status      = $this->manage_model->delete_mile($id);
        if ($status) {
            Message::success(__('mile_was_delete'));
            $this->request->redirect("manage/mile");
        }
    }
    //For deleting miles
    public function action_update_comments()
    {
        $passengers_log_id = $this->request->param('id');
        $status            = $this->manage_model->update_comments($passengers_log_id);
        if ($status) {
            Message::success(__('comments_del'));
            $this->request->redirect("manage/ratingdrivers");
        } else {
            Message::error(__('not_updated'));
        }
    }
    public function action_today_unassigned_taxi()
    {
        //Page Title
        $this->page_title          = __('unassigned_taxy');
        $this->selected_page_title = __('unassigned_taxy');
        $cid                       = $this->company_id;
        $availabilitycount         = $this->admin_model->free_taxi_list($cid);
        $count_company_list        = $this->admin_model->free_taxi_list_all_pag(NULL,NULL,$cid,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->admin_model->free_taxi_list_all_pag($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany();
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_today_unassigned_taxi')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('unassigned_taxy');
        $this->template->page_title = __('unassigned_taxy');
        $this->template->content    = $view;
    }
    //unassigned taxi search
    public function action_unassigned_taxisearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('unassigned_taxy');
        $this->selected_page_title = __('unassigned_taxy');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagetaxi($cid);
        $count_company_list        = $this->manage_model->count_unassign_searchtaxi_list(trim(Html::chars($_REQUEST['keyword'])));
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            if ($usertype != 'A') {
                $all_company_list = $this->manage_model->get_unassign_taxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            } else {
                $all_company_list = $this->manage_model->get_unassign_taxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            }
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_today_unassigned_taxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_freetaxi()
    {
        //Page Title
        $this->page_title          = __('free_taxy');
        $this->selected_page_title = __('free_taxy');
        $usertype                  = $this->usertype;
        $cid                       = $this->company_id;
        if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagetaxi($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitytaxi");
                }
            }
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($cid);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        $count_company_list = $this->manage_model->all_freetaxi_list(NULL,NULL,$cid,TRUE);
        //pagination loads here
        //-------------------------
        $page_no            = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //$all_company_list = $this->manage_model->all_assigntaxi_list($offset, REC_PER_PAGE);
        $all_company_list           = $this->manage_model->all_freetaxi_list($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany();
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_freetaxi')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('free_taxy');
        $this->template->page_title = __('free_taxy');
        $this->template->content    = $view;
    }
    public function action_freetaxisearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('free_taxy');
        $this->selected_page_title = __('free_taxy');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        
        $cid                       = $this->company_id;
        if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagetaxi($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    Message::success(__('limited_taxi'));
                    $this->request->redirect("manage/availabilitytaxi");
                }
                if ($usertype == 'M') {
                    Message::success(__('limited_taxi'));
                    $this->request->redirect("manage/availabilitytaxi");
                }
            }
            $check_result = $this->add_model->validate_packagedriver($cid);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    Message::success(__('limited_driver'));
                    $this->request->redirect("manage/availabilitydriver");
                }
                if ($usertype == 'M') {
                    Message::success(__('limited_driver'));
                    $this->request->redirect("manage/availabilitydriver");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($cid);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        if ($usertype != 'A') {
            $count_company_list = $this->manage_model->count_freetaxisearch_list(trim(Html::chars($_REQUEST['keyword'])));
        } else {
            $count_company_list = $this->manage_model->count_freetaxisearch_list(trim(Html::chars($_REQUEST['keyword'])));
        }
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            if ($usertype != 'A') {
                $all_company_list = $this->manage_model->get_all_freetaxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            } else {
                $all_company_list = $this->manage_model->get_all_freetaxi_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            }
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_freetaxi')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_unassign_driver()
    {
        //Page Title
        $this->page_title          = __('unass_drivers');
        $this->selected_page_title = __('unass_drivers');
        
        
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        $count_company_list        = $this->manage_model->all_free_driver_list(null,null,$cid,true);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_free_driver_list($offset, REC_PER_PAGE, $cid);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany();
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_unassign_driver')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('unass_drivers');
        $this->template->page_title = __('unass_drivers');
        $this->template->content    = $view;
    }
    public function action_unassign_driversearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('unass_drivers');
        $this->selected_page_title = __('unass_drivers');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        
        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        if ($usertype != 'A') {
            $count_company_list = $this->manage_model->count_unassign_searchdriver_list(trim(Html::chars($_REQUEST['keyword'])));
        } else {
            $count_company_list = $this->manage_model->count_unassign_searchdriver_list(trim(Html::chars($_REQUEST['keyword'])));
        }
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            if ($usertype != 'A') {
                $all_company_list = $this->manage_model->get_unassign_driver_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            } else {
                $all_company_list = $this->manage_model->get_unassign_driver_searchlist(trim(Html::chars($_REQUEST['keyword'])), $offset, REC_PER_PAGE);
            }
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_unassign_driver')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    // Mute the Driver Those are not displayed in Search
    public function action_mute_driver_request()
    {
        $this->is_login();
        
        $status   = $this->manage_model->mute_driver_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to Mute status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/driver"); //transaction/index
    }
    public function action_banner()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        //Page Title
        $this->page_title          = __('manage_banner');
        $this->selected_page_title = __('manage_banner');
        
        $company_id                = $this->company_id;
        $count_banner_list         = $this->manage_model->count_banner_list($company_id);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_banner_list,
            'view' => 'pagination/punbb'
        ));
        $all_banner_list            = $this->manage_model->all_banner_list($company_id, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_banner')->bind('all_banner_list', $all_banner_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_banner');
        $this->template->page_title = __('manage_banner');
        $this->template->content    = $view;
    }
    public function action_bannersearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_banner');
        $this->selected_page_title = __('manage_banner');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_banner_list         = $this->manage_model->count_company_searchbanner_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])));
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
            'total_items' => $count_banner_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_banner_list = $this->manage_model->get_company_all_banner_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_banner')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_banner_list', $all_banner_list);
        $this->template->content = $view;
    }
    public function action_block_banner_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_banner_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/banner"); //transaction/index
    }
    public function action_active_banner_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_banner_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/banner"); //transaction/index
    }
	/** Removed On March-05-2016
    public function action_faq()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_faq');
        $this->selected_page_title = __('manage_faq');
        
        $count_faq_list            = $this->manage_model->count_faq_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_faq_list,
            'view' => 'pagination/punbb'
        ));
        $all_faq_list               = $this->manage_model->all_faq_list($offset, REC_PER_PAGE);
        //****pagination ends here//
        //$details = $siteusers->get_favorite_people($usrid);
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_faq')->bind('all_faq_list', $all_faq_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_faq');
        $this->template->page_title = __('manage_faq');
        $this->template->content    = $view;
    }
    public function action_block_faq_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_faq_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/faq"); //transaction/index
    }
    public function action_active_faq_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_faq_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/faq"); //transaction/index
    }
    public function action_trash_faq_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        $this->page_title          = __('manage_faq');
        $this->selected_page_title = __('manage_faq');
        $status                    = $this->manage_model->trash_faq_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests has been deleted'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/faq");
    }
    public function action_faqsearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_faq');
        $this->selected_page_title = __('manage_faq');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->count_searchfaq_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])));
        //echo $count_company_list;
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_faq_list = $this->manage_model->get_all_faq_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_faq')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_faq_list', $all_faq_list);
        $this->template->content = $view;
    } */
    public function action_driver_transaction_search()
    {
        
        if (isset($_POST)) {
            $start_date      = $_POST['startdate'];
            $end_date        = $_POST['enddate'];
            $driver_id       = $_POST['driver_id'];
            $output          = "";
            $get_transaction = $this->driver_model->get_trans_of_driver($driver_id, REC_PER_PAGE, $start_date, $end_date);
            if (!empty($get_transaction)) {
                $fare  = array();
                $month = array();
                foreach ($get_transaction as $vl) {
                    if ($vl['fare'] != NULL) {
                        $fare[]  = $vl['fare'];
                        $month[] = "'" . $vl['date'] . " " . Commonfunction::date_month_details($vl['month']) . "'";
                    }
                }
                if ($fare != NULL) {
                    $fare = implode(",", $fare);
                }
                if ($month != NULL) {
                    $month = implode(",", $month);
                }
                $display = "display:block;";
                //echo $fare;
                //echo '<br>';
                //echo $month;
                //exit;
                $output  = '<div id="transaction_chart" style="min-width: 400px; height: 400px; margin: 0 auto;' . $display . '"></div>';
?>
					<script>
					$('#transaction_chart').highcharts({
					title: {
						text: 'Transaction from <?php
                echo $start_date;
?> to <?php
                echo $end_date;
?>',
						x: -20 //center
					},
					subtitle: {
						text: '',
						x: -20
					},
					xAxis: {
						categories: [<?php
                echo $month;
?>]
					},
					yAxis: {
						title: {
							text: 'Amount (Rs)'
						},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						valueSuffix: ''
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'middle',
						borderWidth: 0
					},
					series: [{
						name: 'Transaction',
						data: [<?php
                echo $fare;
?>]
					}]
				});
					</script>
				<?php
            } else {
                $output = "<div class='no_data'>" . __('no_data') . "</div>";
            }
        } else {
            $output = "<div class='no_data'>" . __('no_data') . "</div>";
        }
        echo $output;
        exit;
    }
    public function action_driver_statistics_search()
    {
        
        if (isset($_POST)) {
            $start_date         = $_POST['startdate'];
            $end_date           = $_POST['enddate'];
            $driver_id          = $_POST['driver_id'];
            $output             = "";
            $get_trip_statitics = $this->driver_model->get_trip_statitics($driver_id, REC_PER_PAGE, $start_date, $end_date);
            if ((!empty($get_trip_statitics['completed_trips'])) || (!empty($get_trip_statitics['rejected_trips'])) || (!empty($get_trip_statitics['cancelled_trips']))) {
                $createdate      = array();
                $resdate         = array();
                $reject_trips    = array();
                $cancelled_trips = array();
                $completed_trips = array();
                $display_trip    = '';
                $a               = 0;
                $b               = 0;
                $date_conv       = '';
                $end             = (date('M-d'));
                //to get number of days between to datetimes
                $start_ts        = strtotime($start_date);
                $end_ts          = strtotime($end_date);
                $diff            = $end_ts - $start_ts;
                $no_of_days      = (round($diff / 86400));
                while ($a <= $no_of_days) {
                    $end          = date('M-d', mktime(0, 0, 0, date("m", strtotime($end_date)), date("d", strtotime($end_date)) - $a, date("Y", strtotime($end_date))));
                    $createdate[] = "'$end'";
                    $a++;
                }
                while ($b < count($get_trip_statitics['cancelled_trips'])) {
                    if (isset($get_trip_statitics['cancelled_trips'][$b]['cancelled_count'])) {
                        foreach ($createdate as $ct) {
                            $date_conv = date('M-d', strtotime($get_trip_statitics['cancelled_trips'][$b]['createdate']));
                            $ct        = str_replace("'", "", $ct);
                            if ($ct == $date_conv) {
                                $resdate[]         = "'$date_conv'";
                                $cancelled_trips[] = $get_trip_statitics['cancelled_trips'][$b]['cancelled_count'];
                            } else {
                                //$cancelled_trips[]=0;
                            }
                        }
                    } else {
                        //$cancelled_trips[]=0;
                    }
                    $b++;
                }
                $b = 0;
                while ($b < count($get_trip_statitics['rejected_trips'])) {
                    if (isset($get_trip_statitics['rejected_trips'][$b]['rejected_count'])) {
                        foreach ($createdate as $ct) {
                            $date_conv = date('M-d', strtotime($get_trip_statitics['rejected_trips'][$b]['createdate']));
                            $ct        = str_replace("'", "", $ct);
                            if ($ct == $date_conv) {
                                //echo $get_trip_statitics['rejected_trips'][$b]['createdate']."=".$date_conv."=".$get_trip_statitics['rejected_trips'][$b]['rejected_count']."<br>";
                                $resdate[]      = "'$date_conv'";
                                $reject_trips[] = $get_trip_statitics['rejected_trips'][$b]['rejected_count'];
                            } else {
                                //$reject_trips[]=0;
                            }
                        }
                    } else {
                        //$reject_trips[]=0;
                    }
                    $b++;
                }
                $b = 0;
                while ($b < count($get_trip_statitics['completed_trips'])) {
                    if (isset($get_trip_statitics['completed_trips'][$b]['completed_count'])) {
                        foreach ($createdate as $ct) {
                            $date_conv = date('M-d', strtotime($get_trip_statitics['completed_trips'][$b]['createdate']));
                            $ct        = str_replace("'", "", $ct);
                            if ($ct == $date_conv) {
                                //echo $get_trip_statitics['completed_trips'][$b]['createdate']."=".$date_conv."=".$get_trip_statitics['completed_trips'][$b]['completed_count'];
                                $resdate[]         = "'$date_conv'";
                                $completed_trips[] = $get_trip_statitics['completed_trips'][$b]['completed_count'];
                            } else {
                                //$completed_trips[]=0;
                            }
                        }
                    } else {
                        //$completed_trips[]=0;
                    }
                    $b++;
                }
                $redateArr       = array_unique($resdate);
                $reject_trips    = implode(",", $reject_trips);
                $cancelled_trips = implode(",", $cancelled_trips);
                $completed_trips = implode(",", $completed_trips);
                $resdate         = implode(",", $redateArr);
                $display_trip    = "display:block;";
                $output          = '<div id="trip_statitics" style="min-width: 400px; height: 400px; margin: 0 auto;' . $display_trip . '"></div>';
?>
					<script>
					$('#trip_statitics').highcharts({
						chart: {
							type: 'column'
						},
						title: {
							text: '<?php
                echo __('trip_statitics');
?>'
						},
						subtitle: {
							text: ''
						},
						xAxis: {
							categories: [<?php
                echo $resdate;
?>]
							//categories: ['Jun-11','Jun-10']
						},
						yAxis: {
							min: 0,
							title: {
								text: 'Trip Counts'
							}
						},
						tooltip: {
							headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
							pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
								'<td style="padding:0"><b>{point.y:.1f} Trips</b></td></tr>',
							footerFormat: '</table>',
							shared: true,
							useHTML: true
						},
						plotOptions: {
							column: {
								pointPadding: 0.2,
								borderWidth: 0
							}
						},
						series: [{
							name: 'Rejected Trips',
							data: [<?php
                echo $reject_trips;
?>]
				
						}, {
							name: 'Cancelled Trips',
							data: [<?php
                echo $cancelled_trips;
?>]
				
						}, {
							name: 'Completed Trips',
							data: [<?php
                echo $completed_trips;
?>]
				
						}]
					});
					</script>
				<?php
            } else {
                $output = "<div class='no_data'>" . __('no_data') . "</div>";
            }
        } else {
            $output = "<div class='no_data'>" . __('no_data') . "</div>";
        }
        echo $output;
        exit;
    }
    public function action_taxi_transaction_search()
    {
        if (isset($_POST)) {
            $start_date      = $_POST['startdate'];
            $end_date        = $_POST['enddate'];
            $taxi_name       = $_POST['taxi_name'];
            $driver_id       = $_POST['driver_id'];
            $output          = "";
            $for_date        = $start_date . " to " . $end_date;
            $get_transaction = $this->driver_model->get_trans_of_taxi($driver_id, REC_PER_PAGE, $start_date, $end_date);
            //function to get total count of taxi transaction
            $totTransCount   = $this->driver_model->get_total_trans_taxi($driver_id);
          // echo '<pre>';print_r($get_transaction);//exit;
            if (!empty($get_transaction)) {
                $fare  = $trips  = $month = array();
                foreach ($get_transaction as $key=>$val) {
                   // if ($val['fare'] != NULL) {
                        $trips[] = $val['trips'];
                        $fare[]  = $val['fare'];
                        $month[] = "'" . $val['_id']['date'] . " " . commonfunction::date_month_details($val['_id']['month']) . "'";
                 //   }
                }
                if ($trips != NULL) {
                    $trips = implode(",", $trips);
                }
                if ($fare != NULL) {
                    $fare = implode(",", $fare);
                }
                if ($month != NULL) {
                    $month = implode(",", $month);
                }
				
                $display = "display:block;";
                //echo $month);
                //echo '<br>';
                //echo $month;
                //exit;
                $output  = '<div id="transaction_chart" style="min-width: 400px; height: 400px; margin: 0 auto;' . $display . '"></div>';
?>
					<script>
		$('#transaction_chart').highcharts({
			chart: {
				shortMonths:true,
				zoomType: 'xy'
			},
			title: {
					text: 'Total Trip Details [<?php
                echo $taxi_name;
?>]'
				},
				subtitle: {
					text: "<?php
                echo __('for_label') . ' ' . $for_date;
?>",
				},
				xAxis: [{
					shortMonths:true,
					categories: [<?php
                echo $month;
?>]
				}],
				yAxis: [{ // Primary yAxis
					labels: {
						format: '{value} Trips',
						style: {
							color: Highcharts.getOptions().colors[2]
						}
					},
					title: {
						text: 'Trip Counts',
						style: {
							color: Highcharts.getOptions().colors[2]
						}
					},
					opposite: true

				}, { // Secondary yAxis
					gridLineWidth: 0,
					title: {
						text: 'Trip Revenues',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					},
					labels: {
						format: '{value} $',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					}

				}, ],
				tooltip: {
					shared: true
				},
				legend: {
					layout: 'vertical',
					align: 'left',
					x: 120,
					verticalAlign: 'top',
					y: 80,
					floating: true,
					backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
				},
				series: [{
					name: 'Trip Revenues',
					type: 'column',
					yAxis: 1,
					data : [<?php
                echo $fare;
?>],
					tooltip: {
						valueSuffix: ' $'
					}

				},
				 {
					name: 'Trip Counts',
					type: 'spline',
					data : [<?php
                echo $trips;
?>],
					tooltip: {
						valueSuffix: ' Trips'
					}
				}]
			});
	</script>
					
				<?php
            } else {
                $output = "<div class='no_data'>" . __('no_data') . "</div>";
            }
        } else {
            $output = "<div class='no_data'>" . __('no_data') . "</div>";
        }
        echo $output . '~' . $totTransCount;
        exit;
    }
	
	
    /************* Dashboard All Driver status***************/
    public function action_view_all_drivers()
    {
        
        $all_company_map_list = $this->manage_model->all_driver_map_list();
        $a                    = 0;
        $b                    = 5;
        $markers              = array();
        if (count($all_company_map_list) > 0) {
            foreach ($all_company_map_list as $v) {
                for ($b = 0; $b < 6; $b++) {
                    if ($b == 0) {
                        $markers[$a][$b] = $v['latitude'];
                    }
                    if ($b == 1) {
                        $markers[$a][$b] = $v['longitude'];
                    }
                    if ($b == 2) {
                        $markers[$a][$b] = '<div class="info_content"><b>' . __('driver_name') . '</b> : ' . $v['name'];
                    }
                    if ($b == 3) {
                        //$driver_status =($v['driver_status']=='F')?__('Free'):(($v['driver_status']=='A')?"<span>".__('Hired')."</span>":(($v['driver_status']=='B')?__('break_in'):__('service_in')));
                        $driver_status   = ($v['driver_status'] == 'F') ? __('Free') : (($v['driver_status'] == 'A') ? "<span>" . __('Hired') . "</span>" : __('Free'));
                        $markers[$a][$b] = '<div id="bodyContent"><p><b>' . __('driver_status') . '</b>: <b style="color:green;">' . $driver_status . '</b>';
                    }
                    if ($b == 4) {
                        $shift_status    = ($v['shift_status'] == 'IN') ? __('in') : __('out');
                        $markers[$a][$b] = '<b style="color:#0F9ED6;">' . $shift_status . '</b></p></div></div>';
                    }
                    if ($b == 5) {
                        if ($v['driver_status'] == 'F' && $v['shift_status'] == 'OUT') {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_four.png';
                        } elseif ($v['driver_status'] == 'A') {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_one.png';
                        } else {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_two.png';
                        }
                    }
                }
                $a++;
            }
        }
        echo json_encode($markers);
        exit;
    }
    public function action_view_all_drivers_company()
    {
        $company              = $_REQUEST['company'];
        
        $all_company_map_list = $this->manage_model->all_driver_map_list_company($company);
        $a                    = 0;
        $b                    = 5;
        $markers              = array();
        if (count($all_company_map_list) > 0) {
            foreach ($all_company_map_list as $v) {
                for ($b = 0; $b < 6; $b++) {
                    if ($b == 0) {
                        $markers[$a][$b] = $v['latitude'];
                    }
                    if ($b == 1) {
                        $markers[$a][$b] = $v['longitude'];
                    }
                    if ($b == 2) {
                        $markers[$a][$b] = '<div class="info_content"><b>' . __('driver_name') . '</b> : ' . $v['name'];
                    }
                    if ($b == 3) {
                        $driver_status   = ($v['driver_status'] == 'F') ? __('Free') : (($v['driver_status'] == 'A') ? "<span>" . __('Hired') . "</span>" : __('Free'));
                        $markers[$a][$b] = '<div id="bodyContent"><p><b>' . __('driver_status') . '</b>: <b style="color:green;">' . $driver_status . '</b>';
                    }
                    if ($b == 4) {
                        $shift_status    = ($v['shift_status'] == 'IN') ? __('in') : __('out');
                        $markers[$a][$b] = '<b style="color:#0F9ED6;">' . $shift_status . '</b></p></div></div>';
                    }
                    if ($b == 5) {
                        if ($v['driver_status'] == 'F' && $v['shift_status'] == 'OUT') {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_four.png';
                        } elseif ($v['driver_status'] == 'A') {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_one.png';
                        } else {
                            $markers[$a][$b] = PUBLIC_IMGPATH . '/driver_two.png';
                        }
                    }
                }
                $a++;
            }
        } else {
            $markers = "";
        }
        echo json_encode($markers);
        exit;
    }
    /************* Dashboard All Driver status***************/
    public function action_promocode()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
        if (isset($_GET['search_user'])) {
            $search = $_GET;
        } else {
            $search = '';
        }
        if($usertype == 'A'){
			$corporate_id = 0;
		}else if($usertype  == 'O'){
		$corporate_id = $this->userid;
			
		}
        
        //Page Title
        $this->page_title          = __('manage_promocode');
        $this->selected_page_title = __('manage_promocode');
		$count_promocode_list       = $this->manage_model->promocode_list(NULL,NULL,$search, $company_id,$corporate_id,TRUE);
		//pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_promocode_list,
            'view' => 'pagination/punbb'
        ));
        //	echo $offset;
		//echo REC_PER_PAGE;exit;
        $promocode_list             = $this->manage_model->promocode_list($offset, REC_PER_PAGE, $search, $company_id,$corporate_id,'');
       //echo '<pre>'; print_r($promocode_list);exit;
       
        $taxicompany_details        = $this->add_model->taxicompany_details();
        $total_users                = count($promocode_list);
        //send data to view file 
        $view                       = View::factory('admin/manage_promocode')->bind('promocode_list', $promocode_list)->bind('pag_data', $pag_data)->bind('total_users', $total_users)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('promocode_list');
        $this->template->page_title = __('manage_promocode');
        $this->template->content    = $view;
    }
    public function action_driver_logout()
    {
        $loginfo                = $_GET;
        $driver_id              = $loginfo['driver_id'];
        $company_id             = isset($loginfo['company_id']) ? $loginfo['company_id'] : "";
        $get_driver_log_details = $this->manage_model->get_driver_current_status($driver_id, $company_id);
        
        if (count($get_driver_log_details) == 0) {
            $update_array        = array(
                "login_from" => "",
                "login_status" => "N",
                "device_id" => "",
                "device_token" => "",
                "device_type" => "",
                "notification_setting" => "0"
            );
            $login_status_update = $this->commonmodel->update(MDB_PEOPLE, $update_array, '_id', $driver_id);
            /** GET Shift ID **/
            $driver_shift        = $this->driver_model->get_shift_status($driver_id);
            if (count($driver_shift) > 0) {
                $this->currentdate  = Commonfunction::getCurrentTimeStamp();
                $shiftupdate_arrary = array(
                    "shift_end" => new MongoDate(strtotime($this->currentdate))
                );
                $driver_shift_id    = isset($driver_shift[0]['driver_shift_id']) ? $driver_shift[0]['driver_shift_id'] : '';
                $transaction        = $this->commonmodel->update(MDB_SHIFT_HISTORY, $shiftupdate_arrary, 'driver_shift_id', $driver_shift_id);
            }
            /*** Update in Driver table **/
            $driver_reply = $this->driver_model->update_driver_shift_status($driver_id, '0');
            $result       = 1;
        } else {
            $result = 0;
        }
        echo $result;
        exit;
    }
	// Accounts Type Module
	public function action_account_type()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_account');
        $this->selected_page_title = __('manage_account');
        $count_account_list           = $this->manage_model->count_account_type_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
			$offset                     = REC_PER_PAGE * ($page_no - 1);
			$pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_account_list,
            'view' => 'pagination/punbb'
        ));
        $all_account_list              = $this->manage_model->all_account_list($offset, REC_PER_PAGE);
		
        //****pagination ends here***//
        //Find page action in view
        $action                     = $this->request->action();
        //send data to view file 
        $view                       = View::factory('admin/manage_account')->bind('all_account_list', $all_account_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_account');
        $this->template->page_title = __('manage_account');
        $this->template->content    = $view;
    }
    //For deleting contents
    public function action_delete_account_type()
    {
        $id          = $this->request->param('id');
        $status      = $this->manage_model->delete_account_type($id);
        if ($status) {
            Message::success(__('account_type_was_delete'));
            $this->request->redirect("manage/account_type");
        }
    }
    
    public function action_update_priority(){
		$priority = $_POST['priority'];
		$model_id = $_POST['model_id'];
		echo $priority_update = $this->manage_model->update_priority($priority,$model_id);
		
		exit;
		
	}
	/** MANAGE PACKAGE **/
	  public function action_coupon_package()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_coupon_package');
        $this->selected_page_title = __('manage_coupon_package');
        
        $count_company_list        = $this->manage_model->all_coupon_package_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_coupon_package_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_coupon_package')->bind('all_company_list', $all_company_list)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_coupon_package');
        $this->template->page_title = __('manage_coupon_package');
        $this->template->content    = $view;
    }
     public function action_coupon_packagesearch()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_coupon_package');
        $this->selected_page_title = __('manage_coupon_package');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        //import model
        
        $count_company_list        = $this->manage_model->get_all_coupon_package_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), NULL, NULL, TRUE);
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
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
            $all_company_list = $this->manage_model->get_all_coupon_package_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $offset, REC_PER_PAGE);
        }
        //set data to view file	
        $view                    = View::factory('admin/manage_coupon_package')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
     public function action_active_coupon_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->active_coupon_package_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/coupon_package"); //transaction/index
    }
    public function action_block_coupon_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status   = $this->manage_model->block_coupon_package_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to blocked status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/coupon_package"); //transaction/index
    }
     public function action_trash_coupon_package_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/dashboard");
        }
        $this->is_login();
        
        $status = $this->manage_model->trash_coupon_package_request($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        
		
		if ($status == 1) {
            Message::success(__('Checked requests has been deleted'));
        } else {
            Message::error(__('coupon_package_not_delete'));
        }
		
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/coupon_package");
    }
	/** MANAGE PACKAGE **/
    /** MANAGE CORPORATE CODE **/
    
     public function action_corporate()
    {
        //Page Title
        $this->page_title          = __('manage_corporate');
        $this->selected_page_title = __('manage_corporate');
        
        $cid                       = $this->company_id;
        //$availabilitycount         = $this->add_model->validate_packagecorporate($cid);
        $count_company_list        = $this->manage_model->all_corporate_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_company_list,
            'view' => 'pagination/punbb'
        ));
        $all_company_list           = $this->manage_model->all_corporate_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        $get_allcompany             = $this->manage_model->get_allcompany('A');
        $details                    = '';
        //send data to view file 
        $view                       = View::factory('admin/manage_corporate')->bind('all_company_list', $all_company_list)->bind('get_allcompany', $get_allcompany)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_corporate');
        $this->template->page_title = __('manage_corporate');
        $this->template->content    = $view;
    }
    public function action_corporatesearch()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('manage_corporate');
        $this->selected_page_title = __('manage_corporate');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $cid                       = $this->company_id;
        //$availabilitycount         = $this->add_model->validate_packagecorporate($cid);
		//get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if ($_REQUEST) {
			if ($usertype != 'A') {
				$company = trim(Html::chars($company_id));
			} else {
				$company = trim(Html::chars(isset($_REQUEST['filter_company'])));
			}
			$count_company_list = $this->manage_model->get_all_corporate_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company,NULL,NULL,TRUE);
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
				'total_items' => $count_company_list,
				'view' => 'pagination/punbb'
			));
			$all_company_list = $this->manage_model->get_all_corporate_searchlist(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company, $offset, REC_PER_PAGE);
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file	
        $view                    = View::factory('admin/manage_corporate')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }
    public function action_active_corporate_request()
    {
        $this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        if ($usertype != 'A') {
            $check_result = $this->add_model->validate_packagecorporate($company_id);
            if ($check_result < 0) {
                if ($usertype == 'C') {
                    $this->request->redirect("manage/availabilitycorporate");
                }
                if ($usertype == 'M') {
                    $this->request->redirect("manage/availabilitycorporate");
                }
            }
            $check_result = $this->add_model->validate_package_assigntaxi($company_id);
            if ($check_result == 0) {
                if ($usertype == 'C') {
                    Message::success(__('please_upgrade_package'));
                    $this->request->redirect("add/upgradepackage");
                }
                if ($usertype == 'M') {
                    Message::success(__('check_company_owner'));
                    $this->request->redirect("manager/dashboard");
                }
            }
        }
        $status   = $this->manage_model->active_corporate_request($_REQUEST['uniqueId']);
        $pagedata = explode("/", $_SERVER["REQUEST_URI"]);
        $page     = isset($pagedata[3]) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success(__('Checked requests have been changed to activated status.'));
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/corporate"); //transaction/index
    }
	
    public function action_block_corporate_request()
    {		
        $this->is_login();
        
        $pagedata         = explode("/", $_SERVER["REQUEST_URI"]);
        $page             = isset($pagedata[3]) ? $pagedata[3] : '';
       
            $status = $this->manage_model->block_corporate_request($_REQUEST['uniqueId']);
            //Flash message for Reject
            //==========================
            Message::success(__('Checked requests have been changed to blocked status.'));
      
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/corporate"); //transaction/index
    }
      public function action_trash_corporate_request()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $this->is_login();
        
       
            $status = $this->manage_model->trash_corporate_request($_REQUEST['uniqueId']);
            Message::success(__('Checked requests has been deleted'));
   
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/corporate");
    }
    /* PROMO REPORT SECTION */
    public function action_promocode_report()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
        if (isset($_GET['search_user'])) {
            $search = $_GET;
        } else {
            $search = '';
        }
        if($usertype == 'A'){
			$corporate_id = 0;
		}else if($usertype  == 'O'){
		$corporate_id = $this->userid;
			
		}
		$package = isset($_GET['package'])?$_GET['package']:'';
        
        //Page Title
        $this->page_title          = __('manage_promocode');
        $this->selected_page_title = __('manage_promocode');
        //echo REC_PER_PAGE;exit;
		$count_promocode_list       = $this->manage_model->promocode_list_report('','',$search, $company_id,$corporate_id,$package,TRUE);
		//exit;//pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_promocode_list,
            'view' => 'pagination/punbb'
        ));
        //echo $offset;exit;
        
		
        $promocode_list             = $this->manage_model->promocode_list_report($offset, REC_PER_PAGE, $search, $company_id,$corporate_id,$package,'');
       //echo '<pre>'; print_r($promocode_list);exit;
       
        /* Coupon Package Count */
		$count_package_list        = $this->manage_model->all_coupon_package_list(NULL,NULL,TRUE);
		if($count_package_list > 0 ){
		$all_package_list       = $this->manage_model->all_coupon_package_list(0, $count_package_list);
		}
		/* Coupon Package Count */
   
		/* Corporate Account */
		$count_company_list        = $this->manage_model->all_corporate_list(NULL,NULL,TRUE);
		if($count_company_list > 0){
		$all_company_list           = $this->manage_model->all_corporate_list(0, $count_company_list);
		}
		/* Corporate Account */
       
       
       
        $taxicompany_details        = $this->add_model->taxicompany_details();
        $total_users                = count($promocode_list);
        //send data to view file 
        $view                       = View::factory('admin/manage_promocode_report')->bind('promocode_list', $promocode_list)->bind('pag_data', $pag_data)->bind('total_users', $total_users)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_REQUEST)->bind('Offset', $offset)->bind('package_list',$all_package_list)->bind('corporate_list',$all_company_list);
        $this->template->title      = SITENAME . " | " . __('promocode_list');
        $this->template->page_title = __('manage_promocode');
        $this->template->content    = $view;
    }
    
    
    /* PROMO REPORT SECTION */
    
    
    /** MANAGE CORPORATE CODE **/
    
    
    
    public function action_set_ajax_session(){
        $var=$_GET['set'];
        $this->session->set('download_set',$var);
        echo 'true';exit;
    }

    /************start of ratings management************/
 public function action_ratings()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            //$this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_ratings');
        $this->selected_page_title = __('manage_ratings');
        $cid                       = $this->company_id;
        $search = $_REQUEST;
        $total_flag = 1;
        //echo "<pre>";print_r($search);exit();
       $count_ratings_list = $this->manage_model->ratings_management_list($total_flag,$search,'','');        
       //echo "<pre>";print_r($count_ratings_list);exit();
        
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_ratings_list,
            'view' => 'pagination/punbb'
        ));
        
        $total_flag = 0;
        $all_ratings_list = $this->manage_model->ratings_management_list($total_flag,$search,$offset, REC_PER_PAGE);
       // echo "<pre>";print_r($all_ratings_list);exit();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_ratings')->bind('all_ratings_list', $all_ratings_list)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ListCount', $count_ratings_list)->bind('srch', $search);
        $this->template->title      = SITENAME . " | " . __('manage_ratings');
        $this->template->page_title = __('manage_ratings');
        $this->template->content    = $view;
    }
    
     public function action_delete_ratings()
    {
        $id          = $this->request->param('id');
         $status      = $this->manage_model->delete_ratings($id);
        if ($status==1) {
            Message::success(__('ratings_information_was_delete'));
            $this->request->redirect("manage/ratings");
        }
    }

    public function action_admin_pnotification()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
       
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
       
        //Page Title
        $this->page_title          = __('manage_pnotification');
        $this->selected_page_title = __('manage_pnotification');
        $count_push_list       = $this->manage_model->pushnotification_list(NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_push_list,
            'view' => 'pagination/punbb'
        ));

        $push_list             = $this->manage_model->pushnotification_list($offset, REC_PER_PAGE,FALSE);

        $total_users                = count($push_list);
       
        //send data to view file 
        $view                       = View::factory('admin/manage_pnotification')->bind('push_list', $push_list)->bind('pag_data', $pag_data)->bind('total_users', $total_users)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_pnotification');
        $this->template->page_title = __('manage_pnotification');
        $this->template->content    = $view;
    }
    
    /////////// Service History ////////////
    public function action_taxi_service()
    {
        //Page Title
        $this->page_title          = __('manage_taxi_service');
        $this->selected_page_title = __('manage_taxi_service');

        $cid                       = $this->company_id;
        $count_taxi_list        = $this->manage_model->all_taxi_service_list('', '',true);
        
		// echo "<pre>"; print_r($count_taxi_list); exit;
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_taxi_list,
            'view' => 'pagination/punbb'
        ));
        $all_taxi_service_list           = $this->manage_model->all_taxi_service_list($offset, REC_PER_PAGE);
		
		//~ print "<pre>";
		//~ print_r($all_taxi_service_list);exit;
        //****pagination ends here***//
        $all_companies             = $this->manage_model->get_allcompany('A');
        //send data to view file 
        $view                       = View::factory('admin/manage_taxi_service')->bind('all_taxi_service_list', $all_taxi_service_list)->bind('all_companies', $all_companies)->bind('pag_data', $pag_data)->bind('ListCount', $count_taxi_list)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_taxi_service');
        $this->template->page_title = __('manage_taxi_service');
        $this->template->content    = $view;
    }
    public function action_active_taxi_service_request()
    {
        $this->is_login();
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;//exit;
        $company_id     = $this->company_id;
        $status   = $this->manage_model->active_taxi_service_request($_REQUEST['uniqueId']);
		if($status == 1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to activated status.'));
		} else {
			Message::error($status);
		}
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/taxi_service");
    }
    public function action_block_taxi_service_request()
    {
        $this->is_login();        
		$status = $this->manage_model->block_taxi_service_request($_REQUEST['uniqueId']);
		if($status==1){
			//Flash message for Reject
			//==========================
			Message::success(__('Checked requests have been changed to blocked status.'));
		} else {
			Message::error($status);
		}        
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/taxi_service");
    }
    /////////// Service History ////////////



    function action_assign_manually()
    {
        $mongo_db         = MangoDB::instance('default');
        $start_driver = (isset($_GET['driver']))?$_GET['driver']:0;
        $start_taxi = (isset($_GET['taxi']))?$_GET['taxi']:0;
        $company = (isset($_GET['company']))?$_GET['company']:0;
        $startdate = (isset($_GET['start']))?$_GET['start']:0;
        $enddate = (isset($_GET['end']))?$_GET['end']:0;
        $startdate = Commonfunction::MongoDate(strtotime($startdate));
        $enddate = Commonfunction::MongoDate(strtotime($enddate));

        $manage = Model::factory( 'manage' );

        $driver_match=array('_id'=> array('$gt'=> (int)$start_driver), 'user_type' => 'D', 'company_id' => (int)$company);
        
        $options=[
            'projection'=>[
                '_id'=>1
            ]
        ];
        
        $driver_list = $mongo_db->find(MDB_PEOPLE,$driver_match,$options);

        if(count($driver_list) > 0){
            foreach($driver_list as $val){
                $drivers[] = $val['_id'];
            }
        }

        $taxi_match=array('_id'=> array('$gt'=> (int)$start_taxi), 'taxi_company' => (int)$company);
        
        $options=[
            'projection'=>[
                '_id'=>1
            ]
        ];
        $taxi_list = $mongo_db->find(MDB_TAXI,$taxi_match,$options);

        if(count($taxi_list) > 0){
            foreach($taxi_list as $val){
                $taxis[] = $val['_id'];
            }
        }

        //echo '<pre>'; print_r($drivers); print_r($taxis); exit;

        if(!empty($taxis) && !empty($drivers))
        {
            $options=[
                'projection'=>[ '_id'=>1 ],
                'sort'=>[ '_id'=>-1 ],
                'limit'=>1
            ];
            $rs = $mongo_db->find(MDB_TAXI_DRIVER_MAPPING,[],$options);
            $res = (!empty($rs))?array($rs[0]['_id']=>0):array(1);
            reset($res);
            $first_key = key($res);
            
            foreach($taxis as $k=>$v)
            {
                
                $first_key++;
                if(isset($drivers[$k]) && $drivers[$k] != '')
                {
                    $taxi_data = array('_id' => (int)$first_key,
                        'mapping_driverid' => (int)$drivers[$k],
                        'mapping_taxiid' => (int)$taxis[$k],
                        'mapping_companyid' => 1,
                        'mapping_countryid' => 1,
                        'mapping_stateid' => 1,
                        'mapping_cityid' => 1,
                        'mapping_startdate' => $startdate,
                        'mapping_enddate' => $enddate,
                        'mapping_status' => ACTIVE,
                        'mapping_createdby' => 1
                    );
                    $result = $mongo_db->insertOne(MDB_TAXI_DRIVER_MAPPING,$taxi_data);
                }
                echo 'Success--'.$first_key.'<br>';
            }
        } else {
            echo 'No drivers or taxis found';
        }
        exit;
        
    }
    

    function action_manual_trip()
    {
        $mongo_db         = MangoDB::instance('default');
        $start_driver = (isset($_GET['driver']))?$_GET['driver']:0;
        $start_taxi = (isset($_GET['taxi']))?$_GET['taxi']:0;

        $manage = Model::factory( 'manage' );

        $driver_match=array('_id'=> array('$gt'=> (int)$start_driver), 'user_type' => 'D');
        
        
        $driver_list = $mongo_db->find(MDB_PEOPLE,$driver_match,array('_id'));

        if(count($driver_list) > 0){
            foreach($driver_list as $val){
                $drivers[] = $val['_id'];
            }
        }

        $taxi_match=array('_id'=> array('$gt'=> (int)$start_taxi));
        
        $taxi_list = $mongo_db->find(MDB_TAXI,$taxi_match,array('_id'));

        if(count($taxi_list) > 0){
            foreach($taxi_list as $val){
                $taxis[] = $val['_id'];
            }
        }

        //echo '<pre>'; print_r($drivers); print_r($taxis); exit;

        if(!empty($taxis) && !empty($drivers))
        {

            $inc_id = $this->commonmodel->get_auto_id(MDB_REQUEST_HISTORY);

            foreach($taxis as $k=>$v)
            {
                
                $inc_id++;
                if(isset($drivers[$k]) && $drivers[$k] != '')
                {

                    $driver_request = array("_id"=>(int)$inc_id,
                                            "available_drivers"=>$drivers[$k],
                                            "total_drivers"=>$drivers[$k],
                                            "selected_driver"=>$drivers[$k],
                                            "status"=>6,
                                            "trip_type"=>0,
                                            "rejected_timeout_drivers"=>"",
                                            "createdate"=>Commonfunction::getCurrentTimeStamp(),
                                            "driver_limit"=>5,
                                            "actual_limit"=>0);
                    $result = $mongo_db->insert(MDB_REQUEST_HISTORY,$driver_request);

                    $passenger_logs = array("_id"=>(int)$inc_id,
                                            "passengers_id"=>2,
                                            "driver_id"=>(int)$drivers[$k],
                                            "company_id"=>2,
                                            "current_location"=>"53, Coimbatore IT Park Road, B.R. Puram Industrial Estate, Peelamedu, Coimbatore, Tamil Nadu 641004",
                                            "pickup_latitude"=>11.0318555,
                                            "pickup_longitude"=>77.020215,
                                            'loc' => array("type" => "Point","coordinates" => array((double)77.020215,(double)11.0318555)),
                                            "drop_location"=>"",
                                            "drop_latitude"=>0,
                                            "drop_longitude"=>0,
                                            "no_passengers"=>1,
                                            "approx_distance"=>0,
                                            "approx_fare"=>0,
                                            "time_to_reach_passen"=>0,
                                            "pickup_time"=>Commonfunction::getCurrentTimeStamp(),
                                            "pickupdrop"=>0,
                                            "waitingtime"=>"",
                                            "createdate"=>Commonfunction::getCurrentTimeStamp(),
                                            "taxi_id"=>(int)$taxis[$k],
                                            "booking_from"=>1,
                                            "search_city"=>0,
                                            "sub_logid"=>0,
                                            "notes_driver"=>"",
                                            "booking_from_cid"=>4,
                                            "company_tax"=>0,
                                            "bookingtype"=>1,
                                            "bookby"=>1,
                                            "promocode"=>"",
                                            "now_after"=>0,
                                            "pre_transaction_id"=>"",
                                            "pre_transaction_amount"=>0,
                                            "city_name"=>"coimbatore",
                                            "passenger_app_version"=>"7.1",
                                            "is_split_trip"=>0,
                                            "trip_timezone"=>"Asia/Kolkata",
                                            "notification_status"=>0,
                                            "travel_status"=>2,
                                            "taxi_modelid"=>10,
                                            "sub_log_id"=>32,
                                            "split_details"=>[ 
                                                [
                                                    "split_id"=>1,
                                                    "trip_id"=>(int)$inc_id,
                                                    "friends_p_id"=>2,
                                                    "fare_percentage"=>100,
                                                    "createdate"=>Commonfunction::getCurrentTimeStamp(),
                                                    "approve_status"=>"A",
                                                    "appx_amount"=>0,
                                                    "passenger_payment_option"=>0,
                                                    "notification_status"=>2
                                                ]
                                            ],
                                            "driver_reply"=>"A",
                                            "msg_status"=>"R",
                                            "actual_pickup_time"=>Commonfunction::getCurrentTimeStamp(),
                                            "distance"=>0);
                    $result = $mongo_db->insert(MDB_PASSENGERS_LOGS,$passenger_logs);
                    echo 'Success--'.$inc_id.'<br>';
                }
                
            }
        } else {
            echo 'No drivers or taxis found';
        }
        exit;
        
    }

    public function action_manual_passengers()
    {
        $mongo_db = MangoDB::instance('default');
        $total_count = 20;
        
        $passenger = array();
        for($i=1;$i<=$total_count;$i++)
        {
           $inc_id = Commonfunction::get_auto_id(MDB_PASSENGERS);
           $promo_prefix = '';
           $auto_referral_code = $promo_prefix.commonfunction::randomkey_generator('6');
           $passenger = array( "_id"=>(int)$inc_id,
                               "name"=>"testpassenger".($inc_id),
                               "lastname"=>"Ndot".($inc_id),
                               "email"=>"testpassenger".($inc_id)."@mailinator.com",
                               "phone"=>"1001011098".($inc_id),
                               "password"=>"e10adc3949ba59abbe56e057f20f883e",
                               "org_password"=>"123456",
                               "otp"=>"1426",
                               "country_code"=>"+91",
                               "referral_code"=>$auto_referral_code,
                               "referral_code_amount"=>125,
                               "referral_code_limit"=>1,
                               "activation_key"=>null,
                               "activation_status"=>1,
                               "user_status"=>"A",
                               "created_date"=>Commonfunction::getCurrentTimeStamp(),
                               "updated_date"=>Commonfunction::getCurrentTimeStamp(),
                               "passenger_cid"=>0,
                               "device_token"=>"",
                               "device_id"=>"",
                               "device_type"=>0,
                               "login_status"=>'S' );
          
           $insert = $mongo_db->insert(MDB_PASSENGERS,$passenger);
           //echo '<pre>'; print_r($passenger);
        }
        echo 'Inserted '.($i-1).' records successfully';
        exit();

    }

    function action_manual_trip_new()
    {
        $mongo_db         = MangoDB::instance('default');
        $p_start = (isset($_GET['passenger']))?$_GET['passenger']:0;
        $m_start = (isset($_GET['mapped']))?$_GET['mapped']:0;
        $limit = (isset($_GET['limit']))?$_GET['limit']:5;

        $manage = Model::factory( 'manage' );

        $passenger_match=array('_id'=> array('$gt'=> (int)$p_start));
        
        $options=[
            'projection'=>[
                '_id'=>1
            ]
        ];
        
        $passenger_list = $mongo_db->find(MDB_PASSENGERS,$passenger_match,$options);

        if(count($passenger_list) > 0){
            foreach($passenger_list as $val){
                $passengers[] = $val['_id'];
            }
        }

        $taxi_match=array('_id'=> array('$gt'=> (int)$m_start));
        
        $options=[
            'projection'=>[
                '_id'=>1,
                'mapping_driverid' => 1,
                'mapping_taxiid' => 1,
                'mapping_companyid' => 1,
                'taxi.taxi_model' => 1
            ]
        ];
        $taxi_list = $mongo_db->find(MDB_TAXI_DRIVER_MAPPING,$taxi_match,$options);
        
        if(count($taxi_list) > 0){
            foreach($taxi_list as $val){
                $mapped[] = array(
                    '_id' => $val['_id'],
                    'driver' => $val['mapping_driverid'],
                    'taxi' => $val['mapping_taxiid'],
                    'company' => $val['mapping_companyid']
                );
            }
        }

        //echo '<pre>';print_r($mapped); exit;  print_r($mapped); exit;

        $locations = array(
            array(
                'c_latitute' => 10.9902127,
                'c_longitude' => 76.96286580000003,
                'c_location' => 'Ukkadam, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.0317782,
                'd_longitude' => 77.01853919999996,
                'd_location' => 'Tidel Park, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu, India',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0315610523748,
                'c_longitude' => 77.0187812671065,
                'c_location' => '53, Coimbatore IT Park Road, B.R. Puram Industrial Estate, Peelamedu, Coimbatore, Tamil Nadu 641004',
                'd_latitute' => 11.05983,
                'd_longitude' => 77.08505,
                'd_location' => '1/504, Avinashi Road, Cexus Nagar, Neelambur, Coimbatore, Tamil Nadu 641062',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0532039,
                'c_longitude' => 77.07515379999995,
                'c_location' => 'Venkitapuram, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.020983,
                'd_longitude' => 76.96633440000005,
                'd_location' => 'Gandhipuram, Coimbatore, India',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0317782,
                'c_longitude' => 77.01853919999996,
                'c_location' => 'Tidel Park, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.020983,
                'd_longitude' => 76.96633440000005,
                'd_location' => 'Gandhipuram, Coimbatore, India',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0104033,
                'c_longitude' => 76.94990280000002,
                'c_location' => 'R.S. Puram, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 10.9940508,
                'd_longitude' => 76.95566429999997,
                'd_location' => 'Town Hall, Coimbatore, Tamil Nadu, India',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0315610523748,
                'c_longitude' => 77.0187812671065,
                'c_location' => '53, Coimbatore IT Park Road, B.R. Puram Industrial Estate, Peelamedu, Coimbatore, Tamil Nadu 641004',
                'd_latitute' => 10.9940508,
                'd_longitude' => 76.95566429999997,
                'd_location' => 'Town Hall, Coimbatore, Tamil Nadu, India',
                'taximodel' => 10
            ),
        );

        

        if(!empty($passengers) && !empty($mapped))
        {
            $currentdate = Commonfunction::MongoDate(strtotime("2017-11-07T11:10:27.000Z"));
            $options=[
                'projection'=>[ '_id'=>1 ],
                'sort'=>[ '_id'=>-1 ],
                'limit'=>1
            ];
            $rs = $mongo_db->find(MDB_REQUEST_HISTORY,[],$options);
            $res = (!empty($rs))?array($rs[0]['_id']=>0):array(1);
            reset($res);
            $first_key = key($res);
            $inc_id = $first_key;
            $reject = 0;
            foreach($mapped as $k=>$v)
            {
                if($reject == $limit)
                {
                    echo 'end'; exit;
                }
                $l = rand(0, 5);
                $first_key++; $inc_id++;
                if(isset($passengers[$k]) && $passengers[$k] != '')
                {
                    $driver_request = array("_id"=>(int)$inc_id,
                                            "available_drivers"=>(string)$mapped[$k]['driver'],
                                            "total_drivers"=>(string)$mapped[$k]['driver'],
                                            "selected_driver"=>$mapped[$k]['driver'],
                                            "status"=>3,
                                            "trip_type"=>0,
                                            "rejected_timeout_drivers"=>"",
                                            "createdate"=>$currentdate,
                                            "driver_limit"=>5,
                                            "actual_limit"=>0
                                    );
                    $result = $mongo_db->insertOne(MDB_REQUEST_HISTORY,$driver_request);

                    $passenger_logs = array(
                                "_id" => (int)$inc_id,
                                "passengers_id" => $passengers[$k],
                                "driver_id" => $mapped[$k]['driver'],
                                "company_id" => $mapped[$k]['company'],
                                "current_location" => $locations[$l]['c_location'],
                                "pickup_latitude" => $locations[$l]['c_latitute'],
                                "pickup_longitude" => $locations[$l]['c_longitude'],
                                "drop_location" => $locations[$l]['d_location'],
                                "drop_latitude" => $locations[$l]['d_latitute'],
                                "drop_longitude" => $locations[$l]['d_longitude'],
                                "no_passengers" => 1,
                                "approx_distance" => 0,
                                "approx_fare" => 0,
                                "time_to_reach_passen" => 1,
                                "pickup_time" => $currentdate,
                                "pickupdrop" => 0,
                                "waitingtime" => "",
                                "createdate" => $currentdate,
                                "taxi_id" => $mapped[$k]['taxi'],
                                "booking_from" => 1,
                                "search_city" => 0,
                                "sub_logid" => 0,
                                "notes_driver" => "",
                                "booking_from_cid" => 1,
                                "company_tax" => 0,
                                "bookingtype" => 1,
                                "bookby" => 1,
                                "promocode" => "",
                                "now_after" => 0,
                                "pre_transaction_id" => "",
                                "pre_transaction_amount" => 0,
                                "city_name" => "coimbatore",
                                "passenger_app_version" => "8",
                                "is_split_trip" => 0,
                                "trip_timezone" => "Asia/Calcutta",
                                "notification_status" => 0,
                                "travel_status" => 2,
                                "taxi_modelid" => $locations[$l]['taximodel'],
                                "sub_log_id" => 25,
                                "split_details" => array( 
                                        "split_id" => 1,
                                        "trip_id" => (int)$inc_id,
                                        "friends_p_id" => $passengers[$k],
                                        "fare_percentage" => 100,
                                        "createdate" => $currentdate,
                                        "approve_status" => "A",
                                        "appx_amount" => 0,
                                        "passenger_payment_option" => 0
                                ),
                                "driver_reply" => "A",
                                "msg_status" => "R"
                    );
                    $result = $mongo_db->insertOne(MDB_PASSENGERS_LOGS,$passenger_logs);

                    $update_array = array(
                        "status" => 'A',
                        "shift_status" => 'IN',
                        "update_date" => $currentdate
                    );
                    $match['_id'] = $mapped[$k]['driver'];
                    $update_device_token_result = $mongo_db->updateOne(MDB_DRIVER_INFO,$match,array('$set'=>$update_array),array('upsert'=>false));
                    $reject++;
                    echo 'Success--'.$inc_id.'-'.$mapped[$k]['driver'].'<br>';
                    
                }
                
            }
        } else {
            echo 'No drivers or taxis found';
        }
        exit;
    }    

    function action_manual_book_later_trip()
    {
        $mongo_db         = MangoDB::instance('default');
        $start_passenger = (isset($_GET['start']))?$_GET['start']:0;
        $end_passenger = (isset($_GET['end']))?$_GET['end']:100;

        $manage = Model::factory( 'manage' );

        $passenger_match=array('_id'=> array('$gt'=> (int)$start_passenger, '$lte'=> (int)$end_passenger));
        
        $options=[
            'projection'=>[
                '_id'=>1
            ]
        ];
        
        $passenger_list = $mongo_db->find(MDB_PASSENGERS,$passenger_match,$options);

        if(count($passenger_list) > 0){
            foreach($passenger_list as $val){
                $passengers[] = $val['_id'];
            }
        }

        $locations = array(
            array(
                'c_latitute' => 10.9902127,
                'c_longitude' => 76.96286580000003,
                'c_location' => 'Ukkadam, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.0317782,
                'd_longitude' => 77.01853919999996,
                'd_location' => 'Tidel Park, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu, India',
                'taximodel' => 1
            ),
            array(
                'c_latitute' => 11.0315610523748,
                'c_longitude' => 77.0187812671065,
                'c_location' => '53, Coimbatore IT Park Road, B.R. Puram Industrial Estate, Peelamedu, Coimbatore, Tamil Nadu 641004',
                'd_latitute' => 11.05983,
                'd_longitude' => 77.08505,
                'd_location' => '1/504, Avinashi Road, Cexus Nagar, Neelambur, Coimbatore, Tamil Nadu 641062',
                'taximodel' => 3
            ),
            array(
                'c_latitute' => 11.0532039,
                'c_longitude' => 77.07515379999995,
                'c_location' => 'Venkitapuram, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.020983,
                'd_longitude' => 76.96633440000005,
                'd_location' => 'Gandhipuram, Coimbatore, India',
                'taximodel' => 10
            ),
            array(
                'c_latitute' => 11.0317782,
                'c_longitude' => 77.01853919999996,
                'c_location' => 'Tidel Park, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 11.020983,
                'd_longitude' => 76.96633440000005,
                'd_location' => 'Gandhipuram, Coimbatore, India',
                'taximodel' => 1
            ),
            array(
                'c_latitute' => 11.0104033,
                'c_longitude' => 76.94990280000002,
                'c_location' => 'R.S. Puram, Coimbatore, Tamil Nadu, India',
                'd_latitute' => 10.9940508,
                'd_longitude' => 76.95566429999997,
                'd_location' => 'Town Hall, Coimbatore, Tamil Nadu, India',
                'taximodel' => 3
            ),
            array(
                'c_latitute' => 11.0315610523748,
                'c_longitude' => 77.0187812671065,
                'c_location' => '53, Coimbatore IT Park Road, B.R. Puram Industrial Estate, Peelamedu, Coimbatore, Tamil Nadu 641004',
                'd_latitute' => 10.9940508,
                'd_longitude' => 76.95566429999997,
                'd_location' => 'Town Hall, Coimbatore, Tamil Nadu, India',
                'taximodel' => 10
            ),
        );

        //echo '<pre>'; print_r($locations[0]); exit;

        if(!empty($passengers))
        {
            $options=[
                'projection'=>[ '_id'=>1 ],
                'sort'=>[ '_id'=>-1 ],
                'limit'=>1
            ];
            $rs = $mongo_db->find(MDB_PASSENGERS_LOGS,[],$options);
            $res = (!empty($rs))?array($rs[0]['_id']=>0):array(1);
            reset($res);
            $first_key = key($res);
            $inc_id = $first_key+1;
            foreach($passengers as $k=>$v)
            {
                $l = rand(1, 6);
                $first_key++; $inc_id++;
                $booking_key  = commonfunction::randomkey_generator();
                $passenger_logs = array("_id"=>(int)$inc_id,
                                        "booking_key" => $booking_key,
                                        "passengers_id"=>(int)$passengers[$k],
                                        "driver_id"=>0,
                                        "company_id"=>0,
                                        "current_location"=>$locations[$l]['c_location'],
                                        "pickup_latitude"=>$locations[$l]['c_latitute'],
                                        "pickup_longitude"=>$locations[$l]['c_longitude'],
                                        "drop_location"=>$locations[$l]['d_location'],
                                        "drop_latitude"=>$locations[$l]['d_latitute'],
                                        "drop_longitude"=>$locations[$l]['d_longitude'],
                                        "no_passengers"=>1,
                                        "approx_distance"=>0,
                                        "approx_fare"=>0,
                                        "time_to_reach_passen"=>0,
                                        "pickup_time"=>Commonfunction::MongoDate(strtotime("2017-10-05T22:00:00.000Z")),
                                        "pickupdrop"=>0,
                                        "waitingtime"=>"",
                                        "createdate"=>Commonfunction::MongoDate(strtotime("2017-10-05T14:00:27.000Z")),
                                        "taxi_id"=>0,
                                        "booking_from"=>3,
                                        "search_city"=>0,
                                        "sub_logid"=>0,
                                        "notes_driver"=>"",
                                        "booking_from_cid"=>0,
                                        "company_tax"=>0,
                                        "bookingtype"=>1,
                                        "bookby"=>1,
                                        "promocode"=>"",
                                        "now_after"=>0,
                                        "pre_transaction_id"=>"",
                                        "pre_transaction_amount"=>0,
                                        "city_name"=>"coimbatore",
                                        "passenger_app_version"=>"7.1",
                                        "is_split_trip"=>0,
                                        "trip_timezone"=>"Asia/Kolkata",
                                        "notification_status"=>0,
                                        "travel_status"=>0,
                                        "taxi_modelid"=>$locations[$l]['taximodel'],
                                        "sub_log_id"=>32,
                                        "split_details"=>[ 
                                            [
                                                "split_id"=>1,
                                                "trip_id"=>(int)$inc_id,
                                                "friends_p_id"=>2,
                                                "fare_percentage"=>100,
                                                "createdate"=>Commonfunction::MongoDate(strtotime("2017-09-21T11:00:27.000Z")),
                                                "approve_status"=>"A",
                                                "appx_amount"=>0,
                                                "passenger_payment_option"=>0,
                                                "notification_status"=>2
                                            ]
                                        ],
                                        "driver_reply"=>"A",
                                        "msg_status"=>"R",
                                        "actual_pickup_time"=>Commonfunction::MongoDate(strtotime("2017-09-21T11:00:54.000Z")),
                                        "distance"=>0);
                $result = $mongo_db->insertOne(MDB_PASSENGERS_LOGS,$passenger_logs);
                echo 'Success--'.$first_key.'<br>';
            }
                
        } else {
            echo 'No drivers or taxis found';
        }
        exit;
        
    }


	// Accounts Type Module
    public function action_wallet_logs()
 
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('passenger_wallet_logs');
        $this->selected_page_title = __('passenger_wallet_logs');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        $recharge_type = isset($_REQUEST['recharge_type'])?$_REQUEST['recharge_type']:'';
        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-d 00:00:00');
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d 23:59:59');

        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->manage_model->passenger_wallet_logs(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$recharge_type,$start_date,$end_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->manage_model->passenger_wallet_logs('','','','','','',NULL,NULL,TRUE);  
        }
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
                'total_items' => $count_company_list,
                'view' => 'pagination/punbb'
            ));
        if (isset($_REQUEST['keyword']))
        {
            $all_company_list = $this->manage_model->passenger_wallet_logs(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$recharge_type,$start_date,$end_date, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->manage_model->passenger_wallet_logs('','','','','','', $offset, REC_PER_PAGE);
        }
            if(isset($_SESSION['download_set']))
            {
                $xls_output = $all_company_list;
                foreach($all_company_list as $key => $val)
                {
                    if($val['change_amount'] > 0)
                    {
                    $xls_output[$key]['amount_credit'] =$val['change_amount'];
                    }
                    else
                    {
                       $xls_output[$key]['amount_credit'] =0;

                    }
                    if($val['change_amount'] < 0)
                    {
                    $xls_output[$key]['amount_debit'] =$val['change_amount'];
                    }
                    else
                    {
                       $xls_output[$key]['amount_debit'] =0;

                    }

                    switch($val['recharge_type'])
                    {
                        case 1:
                        $recharge_type = __('manual_pay'); 
                        break;
                        case 2:
                        $recharge_type = __('credit_pay');
                        break;
                        case 3:
                        $recharge_type = __('pending_pay');
                        break;
                        case 4:
                        $recharge_type = __('trip_payment');
                        break;
                        case 5:
                        $recharge_type = __('trip_pending_payment');
                        break; 
                        case 6:
                        $recharge_type = __('pending_repayment');
                        break;
                        case 7:
                        $recharge_type = __('dispatcher_alteration');
                        break;
                        case 8:
                        $recharge_type = __('knet_payment');
                        break;
                        default:
                        $recharge_type = __('manual_pay'); 
                        break;
                    }
                    $xls_output[$key]['recharge_type'] = $recharge_type;

                    $xls_output[$key]['created_date'] = Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['created_date']);
                }

                $export_table_header = array(__('passenger_name'),__('passenger_phone'),__('current_wallet_amt'),__('amount_credit'),__('amount_debit'),__('recharge_type'),__('created_date'));
                $export_table_field_select = array('passenger_name','passenger_phone','wallet_amount','amount_credit','amount_debit','recharge_type','created_date');

                $heading = __('passenger_wallet_logs');

                $total_fare='';


                $sub_heading = $start_date." to ".$end_date;

                $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
            }


        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/passenger_wallet_logs')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

    public function action_update_passenger_wallet()
    {
        $data =  $_REQUEST;
        $validator   = $this->manage_model->validate_update_wallet(arr::extract($data, array(
                'passenger','amount',''
            )));
        if ($validator->check()) {
            $negative = isset($data['negative'])?$data['negative']:0;
            $update_wallet = $this->manage_model->update_wallet_amount($data['passenger'],$data['amount'],$negative);
            if($update_wallet > 0)
            {
                $response =  array('message'=>__('wallet_update_successfully'),'status'=>1);
                echo json_encode($response);exit;
            }
        } else {
            $errors = $validator->errors('errors');
            $response =  array('message'=>__('wallet_missing_fields'),'errors'=>$errors,'status'=>0);
            echo json_encode($response);exit;
        }
    }

    public function action_passenger_payout()
    {
        $data =  $_REQUEST;
        $validator   = $this->manage_model->validate_passenger_payout(arr::extract($data, array(
                'passenger','amount',''
            )));
        if ($validator->check()) {

            $update_wallet = $this->manage_model->update_payout($data['passenger'],$data['amount']);
            if($update_wallet > 0)
            {
                $response =  array('message'=>__('payout_update_successfully'),'status'=>1);
                echo json_encode($response);exit;
            }
        } else {
            $errors = $validator->errors('errors');
            $response =  array('message'=>__('wallet_missing_fields'),'errors'=>$errors,'status'=>0);
            echo json_encode($response);exit;
        }
    }

    public function action_firstname_load_new()
    {
        $name             = array();
        $like_q           = arr::get($_REQUEST, 'query');
        $type            = arr::get($_REQUEST, 'search_by');
        $like_q           = urlencode($like_q);
        $user_details = $this->manage_model->getuser_details($like_q,  $type);
        $i = 0;
        foreach ($user_details as $key => $details) {
            if($type == 1)
            $name[$i]['name'] = $details['name'];
            else if($type == 2)
            $name[$i]['name'] = $details['email'];
            else if($type == 3)
            $name[$i]['name'] = $details['phone'];


            $name[$i]['id'] = $details['_id'];
            $name[$i]['wallet_amount'] = isset($details['wallet_amount'])?CURRENCY." ".$details['wallet_amount']:CURRENCY." 0";
            $i++;
        }
        echo json_encode($name);
        exit;
    }


    public function action_wallet_log_success()
    {
        $negative = isset($_REQUEST['negative'])?$_REQUEST['negative']:0;
        if($negative == 1)
        {
            Message::error(__('amount_deducted_wallet'));
        }
        else
        {
            Message::success(__('amount_add_wallet'));
        }
                
        $this->request->redirect("/manage/wallet_logs");
    }

    public function action_pass_payout_success()
    {

        Message::success(__('payout_update_successfully'));
                
        $this->request->redirect("/manage/vip_payment_invoice");
    }


     //passenger wallet logs 

     public function action_vip_payment_invoice()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('vip_payment_invoice');
        $this->selected_page_title = __('vip_payment_invoice');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->manage_model->vip_pending_payments(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->manage_model->vip_pending_payments('','','',NULL,NULL,TRUE);  
        }
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
                'total_items' => $count_company_list,
                'view' => 'pagination/punbb'
            ));
        if (isset($_REQUEST['keyword']))
        {
            $all_company_list = $this->manage_model->vip_pending_payments(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->manage_model->vip_pending_payments('','','', $offset, REC_PER_PAGE);
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/vip_payment_invoice')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

    public function action_normal_payment_invoice()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('normal_payment_invoice');
        $this->selected_page_title = __('normal_payment_invoice');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $cid                       = $this->company_id;
        $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');
        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->manage_model->normal_pending_payments(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->manage_model->normal_pending_payments('','','',NULL,NULL,TRUE);  
        }
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
                'total_items' => $count_company_list,
                'view' => 'pagination/punbb'
            ));
        if (isset($_REQUEST['keyword']))
        {
            $all_company_list = $this->manage_model->normal_pending_payments(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->manage_model->normal_pending_payments('','','', $offset, REC_PER_PAGE);
        }
        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/normal_payment_invoice')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }


    public function action_monthlist()
    {
        $year = $_REQUEST['year'];
        $month = isset($_REQUEST['month'])?$_REQUEST['month']:'';

        $html_data = '';
        $month_limit=12;
        if($year == date('Y'))
        {
            $month_limit = date('n');
        }

        $html_data .='<select class="select2" name="month" id="month">
                                <option value="">'. __('select_label').'</option> ';   
        for($j=1;$j<=$month_limit;$j++) 
        {   
            $month_name = date("F", mktime(0, 0, 0, $j, 10));
            $selected = '';
            if($month == $j)
            {
                $selected = "selected='selected'";
            }
            $html_data .=' <option value="'.$j.'" '.$selected.'>'.$month_name.'</option>';
        }  
        $html_data .='</select>';

        echo $html_data;exit;
    }

    public function action_driver_shift_logs()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('driver_shift_logs');
        $this->selected_page_title = __('driver_shift_logs');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->manage_model->get_company_time_details('');
        $current_time  = $get_company_time_details['current_time']; //S

        $cid                       = $this->company_id;
       // $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');

        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-d 00:00:00',strtotime($current_time));
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d H:i:s',strtotime($current_time));
        $search_date = isset($_REQUEST['search_date'])?$_REQUEST['search_date']:date('Y-m-d',strtotime($current_time));

        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->manage_model->driver_shift_logs(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$search_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->manage_model->driver_shift_logs('','',$start_date,$end_date,$search_date,'',NULL,NULL,TRUE);  
        }
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
                'items_per_page' => 10000,
                'total_items' => $count_company_list,
                'view' => 'pagination/punbb'
            ));
        if (isset($_REQUEST['keyword']))
        {
            $all_company_list = $this->manage_model->driver_shift_logs(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$search_date, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->manage_model->driver_shift_logs('','',$start_date,$end_date,$search_date,'', $offset, REC_PER_PAGE);
        }

        // if(isset($_SESSION['download_set']))
        // {
        //     $xls_output = $all_company_list;
        //     $export_table_header = array(__('trip_id'),__('passenger_name'),__('mobile'),__('pickupplace'),__('payment_type'),__('fare'),__('pending_amt'),__('fare_notes'));
        //     $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','fare_notes');

        //     $heading = __('daily_sales_report');

        //     $total_fare='';

        //     $sub_heading = Date('d F ,Y',strtotime($search_date));

        //     $this->action_daily_sales_export($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
        // }

        //$get_allcompany          = $this->manage_model->get_allcompany();
        $get_allcompany=array();
        //set data to view file 
        $view                    = View::factory('admin/driver_shift_logs')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);    
        $this->template->content = $view;
    }

    public function action_careers()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
       
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
       
        //Page Title
        $this->page_title          = __('manage_careers');
        $this->selected_page_title = __('manage_careers');

        $keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
        $status = isset($_GET['status'])?$_GET['status']:'';

        $count_careers_list       = $this->manage_model->careers_list($keyword,$status,NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_careers_list,
            'view' => 'pagination/punbb'
        ));

        $careers_list             = $this->manage_model->careers_list($keyword,$status,$offset, REC_PER_PAGE,FALSE);

        $total_users                = count($careers_list);
       
        //send data to view file 
        $view                       = View::factory('admin/manage_careers')->bind('careers_list', $careers_list)->bind('pag_data', $pag_data)->bind('count_careers_list', $count_careers_list)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_careers');
        $this->template->page_title = __('manage_careers');
        $this->template->content    = $view;
    }


    public function action_add_careers()
    {
        //print_r($_REQUEST);exit;
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
       
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
        
       
        $signup_submit = arr::get($_REQUEST, 'submit_addcareer');
        $errors        = array();
        $post   = array();
        
        if ($signup_submit && Validation::factory($_POST)) {

            $post = $_POST;

            $validator = $this->manage_model->validate_add_career(arr::extract($post, array(
                'title',
                'title_ar',
                'description',
                'description_ar'
                
            )));
            if ($validator->check()) {
                $signup_id = $this->manage_model->add_career($post);
                
                    Message::success(__('sucessfull_added_career'));
                    $this->request->redirect("manage/careers");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $view                       = View::factory('admin/add_careers')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post);        
        $this->template->title      = SITENAME . " | " . __('add_careers');
        $this->template->page_title = __('add_careers');
        $this->template->content    = $view;

    }

    public function action_edit_careers()
    {
        //print_r($_REQUEST);exit;
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
       
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }       
      
        $uid             = $this->request->param('id');        
        $signup_submit = arr::get($_REQUEST, 'submit_editcareer');
        $errors        = array();
        $post   = array();
        
        $careers_list             = $this->manage_model->get_careers($uid);
        //print_r($careers_list);exit;
        if(count($careers_list)==0){
            $this->request->redirect("manage/careers");
        }

        if ($signup_submit && Validation::factory($_POST)) {

            $post = $_POST;

            $validator = $this->manage_model->validate_add_career(arr::extract($post, array(
                'title',
                'title_ar',
                'description',
                'description_ar'
                
            )));
            if ($validator->check()) {
                $signup_id = $this->manage_model->update_career($post,$uid);
                
                    Message::success(__('sucessfull_updated_career'));
                    $this->request->redirect("manage/careers");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $view                       = View::factory('admin/edit_careers')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post)->bind('careers_list',$careers_list);        
        $this->template->title      = SITENAME . " | " . __('edit_careers');
        $this->template->page_title = __('edit_careers');
        $this->template->content    = $view;

    }

    public function action_block_career()
    {
        $this->is_login();
        $status   = $this->manage_model->block_career($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        if($status==1){
            Message::success(__('Checked requests have been changed to blocked status.'));
        } else {
            Message::error($status);
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/careers");
    }
    public function action_active_career()
    {
        $this->is_login();        
        $status   = $this->manage_model->active_career($_REQUEST['uniqueId']);
        //Flash message for Reject
        //==========================
        if($status == 1){
            Message::success(__('Checked requests have been changed to activated status.'));
        } else {
            Message::error($status);
        }
        //redirects to job_feedback details page after deletion
        $this->request->redirect("manage/careers");
    }


    public function action_careers_request()
    {
        $user_createdby = $this->user_createdby;
        $company_id     = $this->company_id;
        $usertype       = $this->usertype;
       
        if ($usertype != 'A' && $usertype != 'S' && $usertype != 'C' && $usertype != 'O') {
            $this->request->redirect("admin/dashboard");
        }
       
        //Page Title
        $this->page_title          = __('manage_careers_req');
        $this->selected_page_title = __('manage_careers_req');

        $keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
        $status = isset($_GET['status'])?$_GET['status']:'';

        $count_careers_list       = $this->manage_model->careers_request_list($keyword,$status,NULL,NULL,TRUE);
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ($page_no - 1);
        $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_careers_list,
            'view' => 'pagination/punbb'
        ));

        $careers_list             = $this->manage_model->careers_request_list($keyword,$status,$offset, REC_PER_PAGE,FALSE);

        $total_users                = count($careers_list);
       
        //send data to view file 
        $view                       = View::factory('admin/manage_careers_request')->bind('careers_list', $careers_list)->bind('pag_data', $pag_data)->bind('count_careers_list', $count_careers_list)->bind('taxicompany_details', $taxicompany_details)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        
        $this->template->content    = $view;
    }

    public function action_download_resume(){

        //print_r($_GET);exit;
        if(isset($_GET['res']) && $_GET['res']!=''){

            if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/resumes/'.$_GET['res']) && !empty($_GET['res']) ){

                $this->request->redirect("public/resumes/".$_GET['res']);
            }else{
                $this->request->redirect("admin/careers_request");
            }
        }

        $this->request->redirect("admin/careers_request");
    }


    public function action_testimonial()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            //$this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $this->page_title          = __('manage_testimonial');
        $this->selected_page_title = __('manage_testimonial');
        $cid                       = $this->company_id;
        $search = isset($_GET['keyword'])?$_GET['keyword']:'';//$_REQUEST[''];
        $total_flag = 1;
        //echo "<pre>";print_r($search);exit();

        $all_testimonial = $this->manage_model->get_testimonial($search);

       $count_testimonial = count($all_testimonial);// $this->manage_model->get_testimonial($total_flag,$search,'','');        
       //echo "<pre>";print_r($count_ratings_list);exit();
        
        //pagination loads here
        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset   = REC_PER_PAGE * ($page_no - 1);
        $pag_data = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_testimonial,
            'view' => 'pagination/punbb'
        ));
        
        $total_flag = 0;
        
       // echo "<pre>";print_r($all_ratings_list);exit();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/manage_testimonial')->bind('all_testimonial', $all_testimonial)->bind('pag_data', $pag_data)->bind('Offset', $offset)->bind('ListCount', $count_testimonial)->bind('srch', $search);
        $this->template->title      = SITENAME . " | " . __('manage_testimonial');
        $this->template->page_title = __('manage_testimonial');
        $this->template->content    = $view;
    }

    public function action_delete_testimonial()
    {
        $id                     = $this->request->param('id');

        $testimonial_details = $this->edit_model->get_testimonial_details($id);
        if ( !empty($testimonial_details['image']) && file_exists(DOCROOT.'public/uploads/testimonial/'.$testimonial_details['image'])) {
            unlink(DOCROOT.'public/uploads/testimonial/'.$testimonial_details['image']);
        }
        $testimonial        = $this->manage_model->delete_testimonial($id);
        if ($testimonial) {
            Message::success(__('Testimonial was deleted.'));
            $this->request->redirect("manage/testimonial");
        }
    }

    public function action_website_content(){

        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/dashboard");
        }
        //Page Title
        $this->page_title          = __('manage_website_content');
        $this->selected_page_title = __('manage_website_content');
        $count_menu_list           = $this->manage_model->count_menu_list();
        //pagination loads here
        //-------------------------
        $page_no                   = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
            $offset                     = REC_PER_PAGE * ($page_no - 1);
            $pag_data                   = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_menu_list,
            'view' => 'pagination/punbb'
        ));
        $all_menu_list              = $this->manage_model->all_menu_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //Find page action in view
        $action                     = $this->request->action();
        //send data to view file 
        $view                       = View::factory('admin/manage_webpage_content')->bind('all_menu_list', $all_menu_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('manage_website_content');
        $this->template->page_title = __('manage_website_content');
        $this->template->content    = $view;

    }

    public function action_website_home_content(){

        $postvalue = $errors= array();
        

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('website_content',$website_content)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_home_content');
        $this->template->page_title = __('manage_website_home_content');
        $this->template->content    = $view;

    }

    public function action_website_features_content(){

        $postvalue = $errors= array();

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_features_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_features_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_features_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('website_content',$website_content)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_feature_content');
        $this->template->page_title = __('manage_website_feature_content');
        $this->template->content    = $view;

    }


    public function action_website_how_works_content(){

        $postvalue = $errors= array();

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_how_works_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_how_works_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_how_works_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('website_content',$website_content)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_how_it_content');
        $this->template->page_title = __('manage_website_how_it_content');
        $this->template->content    = $view;

    }


    public function action_website_pricing_content(){

        $postvalue = $errors= array();

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_pricing_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_pricing_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_pricing_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('website_content',$website_content)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_pricing_content');
        $this->template->page_title = __('manage_website_pricing_content');
        $this->template->content    = $view;

    }

    public function action_website_careers_content(){

        $postvalue = $errors= array();

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_careers_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_careers_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_careers_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('website_content',$website_content)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_careers_content');
        $this->template->page_title = __('manage_website_careers_content');
        $this->template->content    = $view;

    }

    public function action_manage_website_cms_content(){

        $postvalue = $errors= array();

        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = Arr::map('trim', $this->request->post());
            
            $validator   = $this->manage_model->validate_website_cms_content($post_values);

            if ($validator->check()) {
                $signup_id = $this->manage_model->update_website_cms_content($post_values);
                
                    Message::success('Successfully update website content');
                    $this->request->redirect("manage/website_content");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }

        }
        $website_content = $this->manage_model->get_website_content();
        //print_r($website_content);exit;

        $view                       = View::factory('admin/manage_website_cms_content')->bind('website_content', $website_content)->bind('postvalue',$postvalue)->bind('errors',$errors);
        $this->template->title      = SITENAME . " | " . __('manage_website_careers_content');
        $this->template->page_title = __('manage_website_careers_content');
        $this->template->content    = $view;

    }




} // End Manage
