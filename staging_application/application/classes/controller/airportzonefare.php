<?php
defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Airportzonefare extends Controller_Siteadmin
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
		$this->airportzonefare_model      = Model::factory('airportzonefare');
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


        $zone_details = $this->airportzonefare_model->all_zone_detail();
        $model_details = $this->airportzonefare_model->all_model_details();

        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_zone');
        $errors              = array();
        $post_values         = array();

        if ($signup_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());

            $form_values = Arr::extract($post_values, array(
                'zone_id',
                'model_id',
                'is_drop',
                'is_pickup',
                'zone_fixed_fare'

            ));
            $validator   = $this->airportzonefare_model->validate_add_airport_zone_fare($form_values);

            if ($validator->check()) {
                
                $result = $this->airportzonefare_model->add_airport_zone_fare($form_values);

                Message::success(__('successfull_added_zone_fare'));
                 $this->request->redirect("aiportzonefare/manage");

            } else {
                $errors = $validator->errors('errors');
            }
        }

        $view = View::factory('admin/add_airport_zone_fare')->bind('validator', $validator)
        ->bind('errors', $errors)
        ->bind('postvalue', $post_values)
        ->bind('model_details',$model_details)
        ->bind('zone_details',$zone_details);
        $this->template->content    = $view;
        $this->page_title = __('add_airport_zone_fare');
        $this->template->title      = SITENAME . " | " . __('add_airport_zone_fare');
        $this->template->page_title = __('add_airport_zone_fare');
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
        
        $zone_details = $this->airportzonefare_model->manage_zone_fare_search($keyword,$status,'', REC_PER_PAGE,true);
        
		//echo '<pre>'; print_r($zone_details); exit();

        //pagination loads here
        //-------------------------
        $page_no                   = isset( $_GET['page'] ) ? $_GET['page'] : 0;
        if ( $page_no == 0 || $page_no == 'index' )
            $page_no = PAGE_NO;
        $offset                     = REC_PER_PAGE * ( $page_no - 1 );
        $pag_data                   = Pagination::factory( array(
             'current_page' => array(
                 'source' => 'query_string',
                'key' => 'page' 
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => count($zone_details),
            'view' => 'pagination/punbb' 
        ) );
		$detail_zone = $this->airportzonefare_model->manage_zone_fare_search($keyword,$status,$offset, REC_PER_PAGE);
        //****pagination ends here***//

        $this->page_title          = __( 'manage_airport_zone_fare' );
       
        //send data to view file 
        $view                       = View::factory( 'admin/manage_airport_zone_fare' )->bind( 'pag_data', $pag_data )->bind('zone_details',$detail_zone)->bind('Offset',$offset);
        $this->template->title      = SITENAME . " | " . __( 'manage_airport_zone_fare' );
        $this->template->page_title = __( 'manage_airport_zone_fare' );
        $this->template->content    = $view;
    }
}