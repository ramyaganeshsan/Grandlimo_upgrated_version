<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Zonefare extends Controller_Siteadmin
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
    // Customization
    public function action_add()
    {
		$this->page_title = __('add_zone_fare');
        $user_createdby = $_SESSION['userid'];


        $zone_details = $this->zonefare_model->all_zone_detail();
        $model_details = $this->zonefare_model->all_model_details();

        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_zone');
        $errors              = [];
        $post_values         = [];

        if ($signup_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());

            $form_values = Arr::extract($post_values, [
                'zone_id',
                'model_id',
                'is_drop',
                'is_pickup',
                'zone_fixed_fare'

            ]);
            $validator   = $this->zonefare_model->validate_add_zone_fare($form_values);

            if ($validator->check()) {
                
                $result = $this->zonefare_model->add_zone_fare($form_values);

                Message::success(__('successfull_added_zone_fare'));
                 $this->request->redirect("zonefare/manage");

            } else {
                $errors = $validator->errors('errors');
            }
        }

        $view = View::factory('admin/add_zone_fare')->bind('validator', $validator)
        ->bind('errors', $errors)
        ->bind('postvalue', $post_values)
        ->bind('model_details',$model_details)
        ->bind('zone_details',$zone_details);
        $this->template->content    = $view;
        $this->page_title = __('add_zone_fare');
        $this->template->title      = SITENAME . " | " . __('add_zone_fare');
        $this->template->page_title = __('add_zone_fare');
        $this->template->content    = $view;
    }

    public function action_edit()
    {
        $this->page_title = __('edit_zone_fare');

        $user_createdby = $_SESSION['userid'];
        $id              = $this->request->param( 'id' );

        $zone_detail = $this->zonefare_model->all_zone_detail();
        $zone_fare_details = $this->zonefare_model->zone_fare_detail($id);
        $model_details = $this->zonefare_model->all_model_details();

        $zone_submit = arr::get($_REQUEST, 'submit_editzone');
        $errors        = [];
        $post_values   = [];

        if ($zone_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());
            
            $values      = $post_values;
            $zone_id = $values['zone_id'];


			//echo '<pre>'; print_r($values); exit();
            $validator = $this->zonefare_model->validate_edit_zone_fare(arr::extract($values, [
                'zone_fixed_fare',
                'is_drop',
                'is_pickup',
            ]),$zone_id);
            if ($validator->check()) {
                 $signup_id = $this->zonefare_model->edit_zone_fare($post_values,$id);
                if ($signup_id == 1) {
                    Message::success(__('successful_edit_zone_fare'));
                    $this->request->redirect("zonefare/manage");
                }
            } else {
                $errors = $validator->errors('errors');
              // echo '<pre>'; print_r($errors); exit();
            }
        }
        $view   = View::factory('admin/edit_zone_fare')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)
        ->bind('zone_detail',$zone_detail)
        ->bind('model_details',$model_details)
        ->bind('zone_fare_details',$zone_fare_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_zone_fare');
        $this->template->page_title = __('edit_zone_fare');
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
        
        $zone_details = $this->zonefare_model->manage_zone_fare_search($keyword,$status,'', REC_PER_PAGE,true);
        
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
            'total_items' => count($zone_details),
            'view' => 'pagination/punbb' 
        ] );
		$detail_zone = $this->zonefare_model->manage_zone_fare_search($keyword,$status,$offset, REC_PER_PAGE);
        //****pagination ends here***//

        $this->page_title          = __( 'manage_zone_fare' );
       
        //send data to view file 
        $view                       = View::factory( 'admin/manage_zone_fare' )->bind( 'pag_data', $pag_data )->bind('zone_details',$detail_zone)->bind('Offset',$offset);
        $this->template->title      = SITENAME . " | " . __( 'manage_zone_fare' );
        $this->template->page_title = __( 'manage_zone_fare' );
        $this->template->content    = $view;
    }

    public function action_block_zone_fare_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'S' && $usertype != 'DA' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status   = $this->zonefare_model->block_zone_fare_request( $_REQUEST['uniqueId'] );
        $pagedata = explode( "/", $_SERVER["REQUEST_URI"] );
        $page     = isset( $pagedata[3] ) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests have been changed to blocked status.' ) );
        //redirects to job_feedback details page after deletion
        $this->request->redirect('zonefare/manage');
    }

    public function action_active_zone_fare_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'S' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status   = $this->zonefare_model->active_zone_fare_request( $_REQUEST['uniqueId'] );
        $pagedata = explode( "/", $_SERVER["REQUEST_URI"] );
        $page     = isset( $pagedata[3] ) ? $pagedata[3] : '';
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests have been changed to activated status.' ) );
        $this->request->redirect('zonefare/manage'); 
    }

    public function action_trash_zone_fare_request()
    {
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ( $usertype != 'A' && $usertype != 'DA' ) {
            $this->request->redirect( "admin/dashboard" );
        }
        $this->is_login();
        $status = $this->zonefare_model->trash_zone_fare_request( $_REQUEST['uniqueId'] );
        //Flash message for Reject
        //==========================
        Message::success( __( 'Checked requests has been deleted' ) );
        //redirects to job_feedback details page after deletion
        $this->request->redirect('zonefare/manage');
    }

} // End Add
