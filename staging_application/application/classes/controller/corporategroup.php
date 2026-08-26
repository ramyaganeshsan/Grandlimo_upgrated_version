<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_CorporateGroup extends Controller_Siteadmin
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
		$this->corporategroup_model      = Model::factory('corporategroup');
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
    // Customization
    public function action_add()
    {
		$this->page_title = __('add_corporate_group');
        $user_createdby = $_SESSION['userid'];

        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_zone');
        $errors              = [];
        $post_values         = [];
        if ($signup_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());

            $form_values = Arr::extract($post_values, [
                'corporate_group_name',
                'wallet_positive_limit',
                'wallet_max_limit_check',
                'surge_pricing',
                'corporate_passengers_list'

            ]);
            $validator   = $this->corporategroup_model->validate_add_corporate_group($form_values);

            if ($validator->check()) {
                
                $result = $this->corporategroup_model->add_corporate_group($form_values);

                Message::success(__('successfull_added_corporate_group'));
                 $this->request->redirect("corporategroup/manage");

            } else {
                $errors = $validator->errors('errors');
            }
        }

        $view = View::factory('admin/add_corporate_group')->bind('validator', $validator)
        ->bind('errors', $errors)
        ->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->page_title = __('add_corporate_group');
        $this->template->title      = SITENAME . " | " . __('add_corporate_group');
        $this->template->page_title = __('add_corporate_group');
        $this->template->content    = $view;
    }

    public function action_edit()
    {
        $this->page_title = __('edit_corporate_group');

        $user_createdby = $_SESSION['userid'];
        $id              = $this->request->param( 'id' );

        $corporate_group_detail = $this->corporategroup_model->corporate_group_detail($id);

        $zone_submit = arr::get($_REQUEST, 'submit_editzone');
        $errors        = [];
        $post_values   = [];

        if ($zone_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());
            
            $values      = $post_values;


			//echo '<pre>'; print_r($values); exit();
            $validator = $this->corporategroup_model->validate_edit_corporate_group(arr::extract($values, [
                'corporate_group_name',
                'wallet_positive_limit',
                'wallet_max_limit_check',
                'surge_pricing',
                'corporate_passengers_list'
            ]),$id);
            if ($validator->check()) {
                 $signup_id = $this->corporategroup_model->edit_corporate_group($post_values,$id);
                if ($signup_id == 1) {
                    Message::success(__('successful_edit_corporate_group'));
                    $this->request->redirect("corporategroup/manage");
                }
            } else {
                $errors = $validator->errors('errors');
              // echo '<pre>'; print_r($errors); exit();
            }
        }
        $view   = View::factory('admin/edit_corporate_group')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)
        ->bind('corporate_group_detail',$corporate_group_detail);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_corporate_group');
        $this->template->page_title = __('edit_corporate_group');
        $this->template->content    = $view;
    }

    public function action_manage()
    {   
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype == 'S' && $usertype == 'DA' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        
        $keyword = isset($_REQUEST['keyword']) ? trim( Html::chars( $_REQUEST['keyword'] ) ) : '';
        $status = isset($_REQUEST['status']) ? trim( Html::chars( $_REQUEST['status'] ) ) : '';
        
        $corporate_group_details = $this->corporategroup_model->manage_corporate_group_search($keyword,$status,'', REC_PER_PAGE,true);
        
		//echo '<pre>'; print_r($zone_details); exit();

        //pagination loads here
        //-------------------------
        $page_no                   = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( [
             'current_page' => [
                 'source' => 'query_string',
                'key' => 'page' 
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => count($corporate_group_details),
            'view' => 'pagination/punbb' 
        ] );
		$corporate_group_details = $this->corporategroup_model->manage_corporate_group_search($keyword,$status,$offset, REC_PER_PAGE);
        //****pagination ends here***//

        $this->page_title          = __( 'manage_corporate_group' );
       
        //send data to view file 
        $view                       = View::factory( 'admin/manage_corporate_group' )->bind( 'pag_data', $pag_data )->bind('corporate_group_details',$corporate_group_details)->bind('Offset',$offset);
        $this->template->title      = SITENAME . " | " . __( 'manage_corporate_group' );
        $this->template->page_title = __( 'manage_corporate_group' );
        $this->template->content    = $view;
    }

    public function action_block_corporate_group_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'S' && $usertype != 'DA' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status   = $this->corporategroup_model->block_corporate_group_request( $_REQUEST['uniqueId'] );
        $pagedata = explode( "/", $_SERVER["REQUEST_URI"] );
        $page     = isset( $pagedata[3] ) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests have been changed to blocked status.' ) );
        //redirects to job_feedback details page after deletion
        $this->request->redirect('corporategroup/manage');
    }

    public function action_active_corporate_group_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'S' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status   = $this->corporategroup_model->active_corporate_group_request( $_REQUEST['uniqueId'] );
        $pagedata = explode( "/", $_SERVER["REQUEST_URI"] );
        $page     = isset( $pagedata[3] ) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests have been changed to activated status.' ) );
        $this->request->redirect('corporategroup/manage'); 
    }

    public function action_trash_corporate_group_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'DA' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status = $this->corporategroup_model->trash_corporate_group_request( $_REQUEST['uniqueId'] );
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests has been deleted' ) );
        //redirects to job_feedback details page after deletion
        $this->request->redirect('corporategroup/manage');
    }

    public function action_passengers_list(){
        if(isset($_REQUEST['keyword'])) {
            $passengers_list = $this->corporategroup_model->passengers_list( $_REQUEST['keyword'] ,isset($_REQUEST['selected'])?$_REQUEST['selected']:[] );
            echo json_encode($passengers_list);exit;
        } else {
            echo json_encode([]);exit;
        }
    }

} // End Add
