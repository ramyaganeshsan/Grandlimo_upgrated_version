<?php defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users Module details

* @Created on July, 2013

* @Updated on July, 2013

* @Package: taxi

* @Author: taxi Team

* @URL : taxiapp.com

********************************************/
class Controller_Manager extends Controller_Siteadmin
{
	/**
	****__construct()****
	*/
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
		$this->session          = Session::instance();
		$this->userid 			= $this->session->get("userid");
        $this->company_id     	= $this->session->get('company_id');
		$this->usertype 		= $this->session->get("user_type");
		
        $this->edit_model        = Model::factory('edit');
        $this->add_model         = Model::factory('add');
        $this->manager_model     = Model::factory('manager');
        $this->admin_model       = Model::factory('admin');
        $this->transaction_model = Model::factory('transaction');
	}
    public function action_index()
    {
        $this->urlredirect->redirect('manager/login');
        $this->template->meta_desc     = $this->metadescription;
        $this->template->meta_keywords = $this->metakeywords;
    }
	
    public function action_login()
    {
        if ($this->userid) {
            $this->urlredirect->redirect('manager/dashboard');
        }
        //condition checked to show package period expire message
        if (isset($_REQUEST['type']) && $_REQUEST['type'] == "expire") {
            Message::error(__('check_company_owner'));
            $this->urlredirect->redirect('manager/login');
        }
        $submit      = $this->request->post('admin_login');
        $form_values = Arr::extract($_REQUEST, array(
            'email',
            'password'
        ));
        $validate    = $this->authorize->login_validate($form_values);
        if (isset($submit)) {
            if ($validate->check()) {
				
                if (($this->authorize->managerlogin_details($form_values['email'], md5($form_values['password']), TRUE)) > 0)
                    {
						
                    $select_result = $this->authorize->managerlogin_details($form_values['email'], md5($form_values['password']), FALSE);
                    if (($select_result[0]['company_status'] == 'D') || ($select_result[0]['company_status'] == 'T')) {
                        Message::error(__('login_deactive'));
                    } else {
                        $userid = $select_result[0]['id'];
                        $this->session->set("userid", $select_result[0]['id']);
                        $this->session->set("user_type", $select_result[0]['user_type']);
                        $this->session->set("name", $select_result[0]['name']);
                        //$this->session->set("username", $select_result[0]['username']);
                        $this->session->set("email", $select_result[0]['email']);
                        $this->session->set("company_id", $select_result[0]['company_id']);
                        $this->session->set("city_id", $select_result[0]['login_city']);
                        $this->session->set("state_id", $select_result[0]['login_state']);
                        $this->session->set("country_id", $select_result[0]['login_country']);
                        Message::success(__('succesful_login_flash') . COMPANY_SITENAME);
                        $this->urlredirect->redirect('taxidispatch/dashboard');
                    }
                } else {
                    Message::error(__('login_failure') . 'of ' . COMPANY_SITENAME);
                }
            } else {
                $errors = $validate->errors('errors');
            }
        }
        $this->template->page_title = __('manager_login_title');
        $view                       = View::factory(MANAGERVIEW . 'login')->bind('validate', $validate)->bind('form_values', $form_values)->bind('errors', $errors);
        $this->template->content    = $view;
    }
    public function action_dashboard()
    {
        $this->is_login();
        $this->urlredirect->redirect('taxidispatch/dashboard');
        if (isset($this->usertype)) {
            $usertype = $this->usertype;
            if ($usertype == 'A') {
                $this->urlredirect->redirect('admin/dashboard');
            }
            if ($usertype == 'C') {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else {
            $this->urlredirect->redirect('manager/login');
        }
        $post_values        = array();
        $post_values        = $_REQUEST;
        $availabletaxi_list = $this->manager_model->get_availabletaxi_list();
        $freedriver_list    = $this->manager_model->free_driver_list();
        $freetaxi_list      = $this->manager_model->free_taxi_list(true,$this->company_id);
        $getdriverdetails   = $this->transaction_model->getdriverdetails($this->company_id, $this->userid);
        $driver_id          = array();
        if (count($getdriverdetails) > 0) {
            foreach ($getdriverdetails as $res) {
                $driver_id []= $res['id'];
            }
        }
        if (isset($_REQUEST['userstartdate']) && isset($_REQUEST['userenddate'])) {
            if (($_REQUEST['userstartdate'] != '') && ($_REQUEST['userenddate'] != '')) {
                $gettransaction = $this->manager_model->changegettransaction($driver_id, $_REQUEST['userstartdate'], $_REQUEST['userenddate']);
            } else {
                $gettransaction = $this->manager_model->gettransaction($driver_id);
            }
        } else {
            $gettransaction = $this->manager_model->gettransaction($driver_id);
        }
		//echo "<pre>"; print_r($gettransaction) ;exit;
        $count = "";
        $name  = "";
        foreach ($gettransaction as $res) {
            $name .= "'" . $res["driver_name"] . "',";
            $count .= $res["count"] . ",";
        }
        //echo count($gettransaction);
        $name                       = rtrim($name, ',');
        $count                      = rtrim($count, ',');
        $company_id                 = $this->company_id;
        $admin_dashboard_data       = $this->manager_model->get_admin_dashboard_data($company_id);
        $activeusers_list           = $this->manager_model->get_activeusers_list($company_id);
        $all_company_map_list       = $this->admin_model->all_driver_map_list();
		//echo "<pre>"; print_r($all_company_map_list); exit;
        $this->selected_page_title  = __("dashboard");
        $view                       = View::factory('manager/dashboard')->bind('postvalue', $post_values)->bind('activeusers_list', $activeusers_list)->bind('availabletaxi_list', $availabletaxi_list)->bind('freetaxi_list', $freetaxi_list)->bind('admin_dashboard_data', $admin_dashboard_data)->bind('freedriver_list', $freedriver_list)->bind('name', $name)->bind('gettransaction', $gettransaction)->bind('count', $count)->bind('all_company_map_list', $all_company_map_list);
        $this->template->title      = SITENAME . " | " . __('dashboard');
        $this->template->page_title = __('dashboard');
        $this->template->content    = $view;
    }
    /**
     *****action_editprofile()****
     * @return admin edit profile
     */
    public function action_editprofile()
    {
        $this->is_login();
        $usertype = $this->usertype;
        if ($usertype == 'A') {
            $this->urlredirect->redirect('admin/dashboard');
        }
        if ($usertype == 'C') {
            $this->urlredirect->redirect('company/dashboard');
        }
        $userid = $this->userid;
        $uid    = $this->request->param('id');
        if ($uid != $userid) {
            $this->urlredirect->redirect('manager/dashboard');
        }
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_editmanager');
        $errors              = array();
        $post_values         = array();
        $company_details = $this->add_model->taxicompany_details();
        
        $manager_details     = $this->edit_model->manager_details($uid);
        $country_details     = $this->add_model->country_details();
        $state_details       = $this->add_model->state_details();
        $city_details        = $this->add_model->city_details();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, array(
                'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'country',
                'state',
                'city',
                'company_name'
            ));
            $validator   = $this->edit_model->validate_editmanager($form_values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_manager($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_manager'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manager/dashboard");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_manager')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('state_details', $state_details)->bind('manager_details', $manager_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('Edit Profile');
        $this->template->page_title = SITENAME . " | " . __('Edit Profile');
        $this->template->content    = $view;
    }
    /**
     *****action_changepassword()****
     * @return admin change password
     */
    public function action_changepassword()
    {
        $this->is_login();
        $usertype = $this->usertype;
        if ($usertype == 'A') {
            $this->urlredirect->redirect('admin/dashboard');
        }
        if ($usertype == 'C') {
            $this->urlredirect->redirect('company/dashboard');
        }
        $errors         = array();
        $changepassword = arr::get($_REQUEST, 'submit_changepassword');
        /**To get current logged user id from session**/
        if (isset($changepassword) && Validation::factory($_POST)) {
            $postvalue = $_POST;
            $post      = Arr::map('trim', $this->request->post());
            $validator = $this->authorize->changepassword_validate(arr::extract($post, array(
                'oldpassword',
                'password',
                'repassword'
            )), $this->userid);
            if ($validator->check()) {
                $update_status            = $this->authorize->changepassword($post['password'], $this->userid);
				$update = $this->authorize->select_user_details_by_id($this->userid);
                $mail              = "";
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => ucfirst($update['name']),
                    REPLACE_EMAIL => 'sankar.m@ndot.in',//$update['email'],
                    REPLACE_PASSWORD => $post['password'],
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'changepassword.html', $replace_variables);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/changepassword-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/changepassword-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'changepassword.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'changepassword.html', $replace_variables);
				}
                $to                = 'sankar.m@ndot.in';//$update['email'];
                $from              = $this->siteemail;
                $subject           = __('reset_password_label');
                $redirect          = "company/changepassword";
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
                Message::success(__('sucessful_change_password'));
                $this->request->redirect("company/changepassword");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                             = View::factory(ADMINVIEW . 'authorize/changepassword')->bind('errors', $errors)->bind('postvalue', $postvalue);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('changepassword_label');
        $this->template->page_title       = __('changepassword_label');
    }
    /**
     *****action_logout()****
     * @return admin logout from site
     */
    public function action_logout()
    {
        $this->is_login();
        $this->session->destroy();
        Cookie::delete('userid');
        //$this->urlredirect->redirect("admin/login");
        $this->request->redirect("/manager/login");
    }
    public function action_forgot_password()
    {
		$errors         = array();
        $forgotpassword = arr::get($_REQUEST, 'submit_forgot_password_admin');
		
        if (isset($forgotpassword) && Validation::factory($_POST)) {
			
            $postvalue      = Arr::map('trim', $this->request->post());
            $validator = $this->authorize->forgotpassword_managervalidate(arr::extract($postvalue, array(
                'email'
            )));
			
            if ($validator->check()) {
                $user_detail = $this->authorize->select_users_byemail($postvalue['email']);
                $password    = Text::random();
                $result = $this->authorize->changepassword($password, $user_detail['_id']);
                $mail              = "";
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => ucfirst($user_detail['name']),
                    REPLACE_EMAIL => $postvalue['email'],
                    REPLACE_PASSWORD => $password,
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
				if ($this->currlang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/forgotpassword-' . $this->currlang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->currlang . '/forgotpassword-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
				}
                $to                = $postvalue['email'];
                $from              = $this->siteemail;
                $subject           = __('forgot_password_label') . " - " . $this->app_name;
                $redirect          = "manage/login";
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
                $this->request->redirect("manager/login");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                             = View::factory(MANAGERVIEW . 'forgot_password')->bind('errors', $errors)->bind('postvalue', $postvalue);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('forgot_password');
        $this->template->page_title       = __('forgot_password');
    }
    /***********Dashboard Trip details chart************/
    public function action_get_company_trip_count()
    {
        $this->auto_render = false;
        $year              = date('Y');
        for ($i = 1; $i <= 12; $i++) {
            $count    = $this->manager_model->get_company_trip_count($i, $year);
            $revenues = $this->manager_model->get_company_trip_revenues($i, $year);
            if ($revenues == '' || $revenues == 'NULL') {
                $revenues = "0";
            } else {
                $revenues = $revenues;
            }
            if ($count == '' || $count == 'NULL') {
                $count = "0";
            } else {
                $count = $count;
            }
            if ($revenues != 0 && $count != 0) {
                $average = $count / $revenues;
            } else {
                $average = "0";
            }
            $data['trips'][] = array(
                'trips' => $count,
                'revenues' => $revenues,
                'average' => round($average, 3)
            );
        }
        $json            = array();
        $json['success'] = $data;
        echo json_encode($json);
    }
    public function action_total_trip_details_search()
    {
        $post_values     = $_POST;
        $startdate       = $post_values['startdate'];
        $enddate         = $post_values['enddate'];
        $get_transaction = $this->manager_model->total_trip_details($startdate, $enddate);
        $view            = View::factory('company/total_trip_revenue')->bind('post_values', $post_values)->bind('get_transaction', $get_transaction);
        echo $view;
        exit;
    }
    /***********Dashboard Trip details chart************/
}
