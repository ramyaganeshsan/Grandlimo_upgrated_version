<?php defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users Module details

* @Package: Taximobility

* @Author: taxi Team

* @URL : taximobility.com

********************************************/
class Controller_Company extends Controller_Siteadmin
{
    public $balance_amount;
     /**
     ****__construct()****
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->session          = Session::instance();
        $this->user_createdby = $this->userid = $this->session->get("userid");
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
        
        $this->edit_model        = Model::factory('edit');
        $this->add_model         = Model::factory('add');
        $this->company_model     = Model::factory('company');
        $this->transaction_model = Model::factory('transaction');
        $this->common_model      = Model::factory('commonmodel');
        $this->manage_model      = Model::factory('manage');
        $this->site_model        = Model::factory('site');
        $this->admin_model        = Model::factory('admin');
    }
    public function action_index()
    {
        //$this->urlredirect->redirect('company/login');
        $this->urlredirect->redirect('manager/login');
        $this->template->meta_desc     = $this->metadescription;
        $this->template->meta_keywords = $this->metakeywords;
    }
    public function action_login()
    {
        if ($this->userid) {
            $this->urlredirect->redirect('company/dashboard');
        }
        $userid      = "";
        $success_msg = "";
        $error_msg   = "";
        //condition checked to show package period expire message
        if (isset($_REQUEST['type']) && $_REQUEST['type'] == "expire") {
            Message::error(__('please_upgrade_package'));
            $this->urlredirect->redirect('company/login');
        }
        $submit      = $this->request->post('admin_login');
        $form_values = Arr::extract($_REQUEST, array(
            'email',
            'password'
        ));
        $validate    = $this->authorize->login_validate($form_values);
         
        if (isset($submit)) {			
            if ($validate->check()) {
                if (($this->authorize->companylogin_details($form_values['email'], md5($form_values['password']), TRUE, "")) > 0) //,""
				{					
                    $select_result = $this->authorize->companylogin_details($form_values['email'], md5($form_values['password']), FALSE);
                    if (TIMEZONE) {
                        $current_time = convert_timezone('now', TIMEZONE);
                        $current_date = explode(' ', $current_time);
                        $date         = $current_date[0];
                    } else {
                        $current_time = date('Y-m-d H:i:s');
                        $date         = date('Y-m-d');
                    }
                    $date_dif    = strtotime($select_result[0]['upgrade_expirydate'] . ' +1 day');
                    $expiry_date = date('Y-m-d', $date_dif);
                    //echo $date.'------'.$expiry_date;
                    //exit;
                    if ($date >= $expiry_date) {
                        $upgrade_packageid = $select_result[0]['upgrade_packageid'];
                        if ($upgrade_packageid == 5) {
                            Message::error(__('trial_package_expired'));
                        } else {
                            Message::error(__('reminder_message'));
                        }
                    } else {
                        if (($select_result[0]['company_status'] == 'D') || ($select_result[0]['company_status'] == 'T')) {
                            Message::error(__('login_deactived'));
                        } else {
							//print_r($select_result);exit;
                            $userid          = $select_result[0]['id'];
                            $this->session->set("userid", $select_result[0]['id']);
                            $this->session->set("user_type", $select_result[0]['user_type']);
                            $this->session->set("name", $select_result[0]['name']);
                            //$this->session->set("username", $select_result[0]['username']);
                            $this->session->set("email", $select_result[0]['email']);
                            $this->session->set("company_id", $select_result[0]['company_id']);
                            $this->session->set("city_id", $select_result[0]['login_city']);
                            $this->session->set("state_id", $select_result[0]['login_state']);
                            $this->session->set("country_id", $select_result[0]['login_country']);
                            $usrid = $this->session->get('userid');
                            $id    = $usrid;
                            Message::success(__('succesful_login_flash') . COMPANY_SITENAME);
                            $this->urlredirect->redirect('company/login');
                        }
                    }
                } else {
                    Message::error(__('login_failure') . 'of ' . COMPANY_SITENAME);
                }
            } else {
                $errors = $validate->errors('errors');
            }
        }
        $this->template->page_title = __('comapny_login_title');
        $view                       = View::factory(COMPANYVIEW . 'login')->bind('validate', $validate)->bind('form_values', $form_values)->bind('errors', $errors);
        $this->template->content    = $view;
    }
    public function action_dashboard()
    {
        $this->is_login();
        if (isset($_SESSION['user_type'])) {
            $usertype = $_SESSION['user_type'];
            if ($usertype == 'A') {
                $this->urlredirect->redirect('admin/dashboard');
            }
            if ($usertype == 'M') {
                $this->urlredirect->redirect('manager/dashboard');
            }
        } else {
            $this->urlredirect->redirect('company/login');
        }
        $post_values              = array();
        $post_values              = $_REQUEST;
        
        $company_id               = $_SESSION['company_id'];
        $user_id                  = $_SESSION['userid'];
        $availabletaxi_list       = $this->company_model->get_availabletaxi_list();
        $availabletaxi_list_count = $this->company_model->get_availabletaxi_list(TRUE);
        $manager_list             = $this->company_model->get_manager_list();
        $freedriver_list          = $this->company_model->free_driver_list();
        $freedriver_list_count    = $this->company_model->free_driver_list(TRUE);
        $freetaxi_list            = $this->company_model->free_taxi_list();
        $freetaxi_list_count      = $this->company_model->free_taxi_list(TRUE);
        $company_tot_current_bal  = $this->company_model->company_tot_current_bal($user_id); //print_r($company_tot_current_bal);exit;    
        $admin_tot_current_bal    = $this->company_model->admin_tot_current_bal(); //print_r($company_tot_current_bal);exit;    
        if (isset($_REQUEST['userstartdate']) && isset($_REQUEST['userenddate'])) {
            if (($_REQUEST['userstartdate'] != '') && ($_REQUEST['userenddate'] != '')) {
                $dashboard_managerdetails = $this->company_model->changedashboard_managerdetails($company_id, $_REQUEST['userstartdate'], $_REQUEST['userenddate']);
                $dashboard_driverdetails  = $this->company_model->changedashboard_driverdetails($company_id, $_REQUEST['userstartdate'], $_REQUEST['userenddate']);
                $dashboard_taxidetails    = $this->company_model->changedashboard_taxidetails($company_id, $_REQUEST['userstartdate'], $_REQUEST['userenddate']);
            } else {
                $dashboard_managerdetails = $this->company_model->dashboard_managerdetails($company_id);
                $dashboard_driverdetails  = $this->company_model->dashboard_driverdetails($company_id);
                $dashboard_taxidetails    = $this->company_model->dashboard_taxidetails($company_id);
            }
        } else {
            $dashboard_managerdetails = $this->company_model->dashboard_managerdetails($company_id);
            $dashboard_driverdetails  = $this->company_model->dashboard_driverdetails($company_id);
            $dashboard_taxidetails    = $this->company_model->dashboard_taxidetails($company_id);
        }
        $transactionbycompanydriver = $this->company_model->transactionbycompanydriver($company_id);
        $admin_dashboard_data       = $this->company_model->get_admin_dashboard_data($company_id);
        $activeusers_list_count     = $this->company_model->get_activeusers_list_count($company_id);
        $all_company_map_list       = $this->admin_model->all_driver_map_list();
        $this->selected_page_title  = __("dashboard");
        $view                       = View::factory('company/dashboard')->bind('postvalue', $post_values)->bind('availabletaxi_list', $availabletaxi_list)->bind('availabletaxi_list_count', $availabletaxi_list_count)->bind('activeusers_list_count', $activeusers_list_count)->bind('admin_dashboard_data', $admin_dashboard_data)->bind('manager_list', $manager_list)->bind('freetaxi_list', $freetaxi_list)->bind('freetaxi_list_count', $freetaxi_list_count)->bind('company_tot_current_bal', $company_tot_current_bal)->bind('admin_tot_current_bal', $admin_tot_current_bal)->bind('dashboard_driverdetails', $dashboard_driverdetails)->bind('dashboard_managerdetails', $dashboard_managerdetails)->bind('dashboard_taxidetails', $dashboard_taxidetails)->bind('freedriver_list', $freedriver_list)->bind('freedriver_list_count', $freedriver_list_count)->bind('all_company_map_list', $all_company_map_list);
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
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'A') {
            $this->urlredirect->redirect('admin/dashboard');
        }
        if ($usertype == 'M') {
            $this->urlredirect->redirect('manager/dashboard');
        }
        $userid = $_SESSION['userid'];
        $uid    = $this->request->param('id');
        if ($uid != $userid) {
            $this->urlredirect->redirect('company/dashboard');
        }
        
        $Company_details = $this->edit_model->company_details_new($uid);
        $country_details = $this->add_model->country_details();
        $city_details    = $this->add_model->city_details();
        $state_details   = $this->add_model->state_details();
        $currencysymbol  = $this->currencysymbol;
        $signup_submit   = arr::get($_REQUEST, 'submit_addcompany');
        $errors          = array();
        $post_values     = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editcompany(arr::extract($post, array(
                'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'company_name',
                'company_address',
                'waiting_time',
                'country',
                'state',
                'city',
                'currency_code',
                'currency_symbol',
                'time_zone'
            )), $uid);
            if ($validator->check()) {
                $status = $this->edit_model->editcompany($uid, $post, $_FILES);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_company'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("company/dashboard");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $get_company_payment_settings = $this->edit_model->get_company_payment_settings($uid);
        //send data to view file 
        $view                         = View::factory(ADMINVIEW . 'edit_company')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('currency_symbol', $currencysymbol)->bind('company_details', $Company_details)->bind('get_company_payment_settings', $get_company_payment_settings);
        $this->template->title        = SITENAME . " | " . __('Edit Profile');
        $this->template->page_title   = SITENAME . " | " . __('Edit Profile');
        $this->template->content      = $view;
    }
    /**
     *****action_changepassword()****
     * @return admin change password
     */
    public function action_changepassword()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'A') {
            $this->urlredirect->redirect('admin/dashboard');
        }
        if ($usertype == 'M') {
            $this->urlredirect->redirect('manager/dashboard');
        }
        $errors         = array();
        $changepassword = arr::get($_REQUEST, 'submit_changepassword');
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
                    REPLACE_EMAIL => $update['email'],
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
                $to                = $update['email'];
                $from              = $this->siteemail;
                $subject           = __('reset_password_label') . " - " . $this->app_name;
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
        if (isset($_SESSION['company_id']) && isset($_SESSION['userid'])) {
            /* Create Log */
            $company_id     = $_SESSION['company_id'];
            $user_createdby = $_SESSION['userid'];
            $name           = $_SESSION['name'];
        }
        $this->session->destroy();
        Cookie::delete('userid');
        $this->request->redirect("/company/login");
    }
    public function action_forgot_password()
    {
        $errors         = array();
        $forgotpassword = arr::get($_REQUEST, 'submit_forgot_password_admin');
        if (isset($forgotpassword) && Validation::factory($_POST)) {
            $postvalue      = Arr::map('trim', $this->request->post());
            $validator = $this->authorize->forgotpassword_companyvalidate(arr::extract($postvalue, array(
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
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/forgotpassword-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/forgotpassword-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'forgotpassword.html', $replace_variables);
				}
                $to                = $postvalue['email'];
                $from              = $this->siteemail;
                $subject           = __('forgot_password_label') . " - " . $this->app_name;
                $redirect          = "company/login";
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
                $this->request->redirect("company/login");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                             = View::factory(COMPANYVIEW . 'forgot_password')->bind('errors', $errors)->bind('postvalue', $postvalue);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('forgot_password');
        $this->template->page_title       = __('forgot_password');
    }
    /** Fund Request From Company Site social settings **/
    public function action_fund_request()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        $fundrequest_submit = arr::get($_REQUEST, 'fundrequest_submit');
        $errors             = array();
        $post_values        = array();
        if ($fundrequest_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $validator   = $this->company_model->validate_fundrequest_amount(arr::extract($post_values, array(
                'amount'
            )));
            if ($validator->check()) {
                $status = $this->company_model->insert_fundrequest_amount($post_values);
                if ($status == 1) {
                    Message::success(__('sucessfully_request_sent'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("company/fund_request");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $this->selected_page_title  = __("transaction_fr");
        $view                       = View::factory('admin/fund_request')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values);
        $this->template->title      = SITENAME . " | " . __('transaction_fr');
        $this->template->page_title = __('transaction_fr');
        $this->template->content    = $view;
    }
    public function action_fund_request_report()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        //Page Title
        $this->page_title          = __('fundreqreport');
        $this->selected_page_title = __('fundreqreport');
        $count_fundrequest_list    = $this->company_model->count_fundrequest_list();
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
            'total_items' => $count_fundrequest_list,
            'view' => 'pagination/punbb'
        ));
        $all_fundrequest_list       = $this->company_model->all_fundreuest_list($offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/fund_request_report')->bind('all_fundrequest_list', $all_fundrequest_list)->bind('pag_data', $pag_data)->bind('srch', $_REQUEST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('fundreqreport');
        $this->template->page_title = __('fundreqreport');
        $this->template->content    = $view;
    }
    /** Manage Site Settings **/
    public function action_company_setting()
    {
        $this->is_login();
        $usertype     = $_SESSION['user_type'];
        //echo $usertype;exit;
        if ($usertype == 'A' || $usertype == 'C') {
        } else {
            $this->request->redirect("company/login");
        }
        $cid           = $_SESSION['company_id'];
        $errors        = array();
        $signup_submit = arr::get($_REQUEST, 'editsettings_submit');
        $errors        = array();
        $post_values   = array();
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, array(
                'company_copyrights',
                'fare_calculation',
                'default_unit',
                'skip_credit_card',
                'cancellation_fare',
                'company_tax'
            ));
            $file_values = Arr::extract($_FILES, array(
                'company_logo',
                'email_site_logo',
                'company_favicon'
            ));
            $values      = Arr::merge($form_values, $file_values);
            $validator   = $this->company_model->validate_updatesiteinfo($values);
            if ($validator->check()) {
                $status         = $this->company_model->updatesiteinfo($post, $cid);
                $res_com_info   = $this->company_model->get_company_info($cid);
                $company_domain = isset($res_com_info[$cid]['companyinfo']['company_domain']) ? $res_com_info[$cid]['companyinfo']['company_domain'] : '';
                if (!empty($_FILES['company_logo']['name'])) {
                    $image_name = $company_domain;
                    $image_type = explode('.', $image_name);
                    $image_type = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename   = Upload::save($_FILES['company_logo'], $image_name, DOCROOT . SITE_LOGO_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory($filename);
                    $path11     = DOCROOT . SITE_LOGO_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::logoresize($logo_image, SITE_LOGO_WIDTH, SITE_LOGO_HEIGHT, $path11, $image_name, 90);
                    $status = $this->company_model->updatesiteinfo_image($path1 . '.png', $cid);
                }
                if (!empty($_FILES['email_site_logo']['name'])) {
                    $image_name = $company_domain . '_email_logo.png';
                    $image_type = explode('.', $image_name);
                    $image_type = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename   = Upload::save($_FILES['email_site_logo'], $image_name, DOCROOT . SITE_LOGO_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory($filename);
                    $path11     = DOCROOT . SITE_LOGO_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::imageresize($logo_image, 175, 35, $path11, $image_name, 90);
                    //$status = $this->company_model->updatesite_email_einfo_image($path1);
                }
                if (!empty($_FILES['company_favicon']['name'])) {
                    if (!empty($favicon_old) && file_exists(DOCROOT . SITE_FAVICON_IMGPATH . $favicon_old)) {
                        unlink(DOCROOT . SITE_FAVICON_IMGPATH . $favicon_old);
                    }
                    $image_name = 'fav_' . $company_domain;
                    $image_type = explode('.', $image_name);
                    $image_type = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename   = Upload::save($_FILES['company_favicon'], $image_name, DOCROOT . SITE_FAVICON_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image = Image::factory($filename);
                    $path11     = DOCROOT . SITE_FAVICON_IMGPATH;
                    $path1      = $image_name;
                    Commonfunction::imageresize($logo_image, FAVICON_WIDTH, FAVICON_HEIGHT, $path11, $image_name, 90);
                    $status = $this->company_model->updatesiteinfo_faviconimage($path1, $cid);
                }
                Message::success(__('sucessful_settings_update'));
                //$this->request->redirect("admin/manage_site");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $currencysymbol             = $this->currencysymbol;
        // $id = $this->request->param('id');
        $site_settings              = $this->company_model->site_settings($cid);
        // print_r($site_settings);exit;
        $package_details            = $this->manage_model->current_package_details($cid);
        $company_type               = $this->company_model->get_company_type($cid);
        // $site_country = $this->company_model->site_country();
        // $site_city = $this->company_model->site_city();
        $this->selected_page_title  = __("company_setting");
        $view                       = View::factory('admin/add_settings_company')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('site_settings', $site_settings)->bind('package_details', $package_details)
        //->bind('site_country',$site_country)
            
        //->bind('site_city',$site_city)
            ->bind('cid', $cid)->bind('company_type', $company_type)->bind('currency_symbol', $currencysymbol);
        $this->template->title      = SITENAME . " | " . __('company_setting');
        $this->template->page_title = __('company_setting');
        $this->template->content    = $view;
    }
    /** Manage Site social settings **/
    public function action_social_network()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'A' || $usertype == 'C') {
        } else {
            $this->request->redirect("company/login");
        }
        $cid                   = $_SESSION['company_id'];
        $errors                = array();
        $socialsettings_submit = arr::get($_REQUEST, 'editsocialsettings_submit');
        $errors                = array();
        $post_values           = array();
        if ($socialsettings_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $validator   = $this->company_model->validate_update_socialinfo(arr::extract($_POST, array(
                'facebook_key',
                'facebook_secretkey',
                'facebook_share',
                'twitter_share',
                'google_share',
                'linkedin_share'
            )));
            //'site_city';
            if ($validator->check()) {
                $status = $this->company_model->update_socialinfo($_POST, $cid);
                if ($status == 1) {
                    Message::success(__('sucessful_settings_update'));
                } else {
                    Message::error(__('not_updated'));
                }
                //$this->request->redirect("admin/social_network");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        // $id = $this->request->param('id');
        // $id=1;
        $socialsettings             = $this->company_model->site_settings($cid);
        $this->selected_page_title  = __("site_settings");
        $view                       = View::factory('admin/company_socialnetwork_settings')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('socialsettings', $socialsettings);
        $this->template->title      = SITENAME . " | " . __('social_network_setting');
        $this->template->page_title = __('social_network_setting');
        $this->template->content    = $view;
    }
    /** Add Layout settings **/
    public function action_layout_setting()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'A' || $usertype == 'C') {
        } else {
            $this->request->redirect("company/login");
        }
        $cid                   = $_SESSION['company_id'];
        $errors                = array();
        $socialsettings_submit = arr::get($_REQUEST, 'layoutsettings_submit');
        $errors                = array();
        $post_values           = array();
        if ($socialsettings_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $validator   = $this->company_model->validate_update_layoutinfo(arr::extract($_POST, array(
                'header_bg',
                'menu_bg',
                'mover_bg'
            )));
            //'site_city';
            if ($validator->check()) {
                $status = $this->company_model->update_layoutinfo($_POST, $cid);
                if ($status == 1) {
                    Message::success(__('sucessful_settings_update'));
                } else {
                    Message::error(__('not_updated'));
                }
                //$this->request->redirect("admin/social_network");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $layoutsetting              = $this->company_model->layout_settings($cid);
        $this->selected_page_title  = __("layout_setting");
        $view                       = View::factory('admin/company_layout_setting')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('layoutsetting', $layoutsetting);
        $this->template->title      = SITENAME . " | " . __('layout_setting');
        $this->template->page_title = __('layout_setting');
        $this->template->content    = $view;
    }
    /** Manage module Settings **/
    public function action_module_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype == 'A' || $usertype == 'C') {
        } else {
            $this->request->redirect("company/login");
        }
        $cid           = $_SESSION['company_id'];
        $errors        = array();
        $signup_submit = arr::get($_REQUEST, 'submit_modules');
        $errors        = array();
        $post_values   = array();
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->company_model->validate_update_module(arr::extract($post, array(
                'banner_image1',
                'banner_image2',
                'banner_image3',
                'banner_image4',
                'banner_image5'
            )), $_FILES);
            if ($validator->check()) {
                $image_updated_status = '';
                $site_settings        = $this->company_model->site_module_settings($cid);
                $i                    = 1;
                foreach ($site_settings as $ss) {
                    $image_id = $_POST['image_id' . $i];
                    if (!empty($_FILES['banner_image' . $i]['name'])) {
                        /* image1 */
                        $image_name1 = uniqid() . $_FILES['banner_image' . $i]['name'];
                        $image_type  = explode('.', $image_name1);
                        $image_type  = end($image_type);
                        //$image_name=url::title($image_name).'.'.$image_type;
                        $filename    = Upload::save($_FILES['banner_image' . $i], $image_name1, DOCROOT . BANNER_IMGPATH);
                        //chmod($filename,'0777');
                        //Image resize and crop for thumb image
                        $logo_image1 = Image::factory($filename);
                        $path11      = DOCROOT . BANNER_IMGPATH;
                        $path1       = $image_name1;
                        Commonfunction::imageresize($logo_image1, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path11, $image_name1, 90);
                        $image_updated_status = $this->company_model->update_module_settings_images($path1, $image_id);
                    }
                    $tags                 = $_POST['tags' . $i];
                    $image_tag            = $_POST['image_tag' . $i];
                    $image_updated_status = $this->company_model->update_module_settings_tags($tags, $image_tag, $image_id);
                    $i++;
                }
                Message::success(__('sucessful_settings_update'));
                //$this->request->redirect("admin/module_settings");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $site_settings              = $this->company_model->site_module_settings($cid);
        //print_r($site_settings);exit;
        $this->selected_page_title  = __("module_setting");
        $view                       = View::factory('admin/company_module_settings')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('site_settings', $site_settings);
        $this->template->title      = SITENAME . " | " . __('module_setting');
        $this->template->page_title = __('module_setting');
        $this->template->content    = $view;
    }
    //List Passengers those are registered in Company
    /** passenger list **/
    public function action_passengers()
    {
        $this->is_login();
        //Page Title
        $this->page_title           = __('menu_manage_passengers');
        $this->selected_page_title  = __('menu_manage_passengers');
        $cid                        = $_SESSION['company_id'];
        $usertype                   = $_SESSION['user_type'];
        $id                         = $this->session->get('id');
        $userid                     = $this->session->get('userid');
        $usrid                      = isset($userid) ? $userid : $id;
        $this->template->title      = __('menu_user_list');
        $this->template->page_title = __('menu_user_list');
        $count_user_list            = $this->company_model->all_passenger_list_history($cid, NULL, NULL, TRUE);
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
        $all_user_list              = $this->company_model->all_passenger_list_history($cid, $offset, REC_PER_PAGE);
        //echo "<pre>"; print_r($all_user_list); exit;
        $get_allcompany             = $this->manage_model->get_allcompany();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/company_passengers_list')->bind('title', $title)->bind('details', $details)->bind('all_user_list', $all_user_list)->bind('pag_data', $pag_data)->bind('UserList', $UserList)->bind('get_allcompany', $get_allcompany)->bind('srch', $_POST)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | Passengers List";
        $this->template->page_title = "Passengers List";
        $this->template->content    = $view;
    }
    /** passengers list **/
    public function action_company_passenger_search()
    {
        $this->is_login();
        $this->session->get('userid');
        //Page Title
        $this->page_title          = __('menu_manage_passengers');
        $this->selected_page_title = __('menu_manage_passengers');
        $cid                       = $_SESSION['company_id'];
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();
        $count_user_list           = $this->company_model->get_all_searchpassenger_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $cid, NULL, NULL, TRUE);
        $get_allcompany            = $this->manage_model->get_allcompany();
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
            $all_user_list = $this->company_model->get_all_searchpassenger_list(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])), $cid, $offset, REC_PER_PAGE);
        }
        //set data to view file    
        $view                    = View::factory('admin/company_passengers_list')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('get_allcompany', $get_allcompany)->bind('all_user_list', $all_user_list);
        $this->template->content = $view;
    }
    /**
     *****action_editpassenger()****
     * @return admin edit passenger
     */
    public function action_company_editpassenger()
    {
        //$this->is_login();
        $usertype = $_SESSION['user_type'];
        //get current page segment id 
        $usrid    = $this->request->param('userid');
        $id       = $this->request->param('id');
        $userid   = isset($usrid) ? $usrid : $id;
        //check current action
        $action   = $this->request->action();
        $action .= "/" . $userid;
        $postvalue   = array();
        //getting request for form submit
        $editprofile = arr::get($_REQUEST, 'submit_editprofile');
        $errors      = array();
        if (isset($editprofile) && Validation::factory($_POST)) {
            $postvalue = $_POST;
            $post      = Arr::map('trim', $this->request->post());
            $validator = $this->authorize->editpassenger_validate(arr::extract($post, array(
                'name',
                'email',
                'phone',
                'address',
                'discount'
            )), $userid);
            if ($validator->check()) {
                /*
                $image_name = "";
                if($_FILES['photo']['name']!=''){
                $image_name = uniqid().$_FILES['photo']['name']; 
                $filename =Upload::save($_FILES['photo'],$image_name,DOCROOT.USER_IMGPATH, '0777');
                $image = Image::factory($filename);
                $image2 = Image::factory($filename);
                $path=DOCROOT.USER_IMGPATH_THUMB;
                Commonfunction::imageresize($image,USER_SMALL_THUMB_WIDTH, USER_SMALL_THUMB_HEIGHT,$path,$image_name,90);
                $path2=DOCROOT.USER_IMGPATH_PROFILE;
                Commonfunction::imageresize($image2,USER_SMALL_IMAGE_WIDTH, USER_SMALL_IMAGE_HEIGHT,$path2,$image_name,90);
                }
                */
                $status = $this->authorize->edit_passenger($userid, $post);
                if ($status == 1) {
                    Message::success(__('profile_updated_successfully'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("company/passengers");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $login_details                    = $this->authorize->login_details_by_passengerid($userid);
        $view                             = View::factory(ADMINVIEW . 'authorize/editpassenger')->bind('errors', $errors)->bind('action', $action)->bind('validate', $validate)->bind('user_exists', $user_exists)->bind('postvalue', $postvalue)->bind('login_detail', $login_details);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Passenger ";
        $this->template->meta_keywords    = SITENAME . "  | Passenger ";
        $this->template->title            = SITENAME . " | " . __('editprofile_label');
        $this->template->page_title       = SITENAME . " | " . __('editprofile_label');
    }
    /**  delete the passengers **/
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
        $this->request->redirect("company/passengers"); //transaction/index
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
        $this->request->redirect("company/passengers"); //transaction/index
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
        $this->request->redirect("company/passengers");
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
        $this->request->redirect("company/passengers");
    }
    public function is_login()
    {
        $session = Session::instance();
        //get current url and set it into session
        //========================================
        $this->session->set('requested_url', Request::detect_uri());
        /**To check Whether the user is logged in or not**/
        if (!isset($this->session) || (!$this->session->get('userid'))) // && !$this->session->get('id')        
            {
            Message::error(__('login_access'));
            $this->request->redirect("/company/login/");
        }
        return;
    }
    public function action_getcitylist()
    {
        $country_id = arr::get($_REQUEST, 'country_id');
        $output     = '';
        $city       = $this->company_model->get_city($country_id);
        $count      = count($city);
        if ($count > 0) {
            $output .= '<select name="city" id="city"  style="color:rgb(163, 159, 159) ! important;" title="' . __('select_the_city') . '" >
                       <option value="">--Select--</option>';
            foreach ($city as $modellist) {
                $output .= '<option value="' . $modellist["city_id"] . '"';
                $output .= '>' . $modellist["city_name"] . '</option>';
            }
            $output .= '</select>';
        } else {
            $output .= '<select name="city" id="city"  style="color:rgb(163, 159, 159) ! important;" title="' . __('select_the_city') . '">
                   <option value="">--Select--</option></select>';
        }
        echo $output;
        exit;
    }
    /*This function is used to create the Free Trial version for the new users. This will create the company, Company Drivers,
     *  Company Taxi and model fare details*/
    public function action_getfreetrial()
    {
        $post_values = $_POST;
        if ($post_values['time_zone']) {
            //This will convert the time to requested TIMEZONE
            $current_time = convert_timezone('now', $post_values['time_zone']);
        } else {
            $current_time = date('Y-m-d H:i:s');
        }
        $post               = Arr::map('trim', $this->request->post());
        $post['createdate'] = $current_time;
        $companyemail       = $post['g_email'];
        // Check whether the company email exist or not. We need to pass email to this function
        $check_email_exist  = $this->company_model->checkemail($companyemail);
        if ($check_email_exist == 0) {
            echo '2';
            exit;
        }
        // Check whether the company domain exist or not. We need to pass domain name to this function. Domain name used as a Subdomain in the URL
        $check_domain_exist = $this->add_model->checkcompanydomain($post_values["domain_name"]);
        if ($check_domain_exist == 1) {
            echo '3';
            exit;
        }
        /**********************************************/
        //exit;
        // Pass all values to model to save the free trial data. Once company created then all other information will be related to company will be created
        $budget          = isset($_POST['budget']) ? $_POST['budget'] : '-';
        //$message1=" FREE TRAIL REQUEST  ( Budget: ".$budget." ) " .ucfirst($_POST['message']);
        //$message1=" (FREE TRAIL REQUEST)  " .ucfirst($_POST['message']);
        $ip              = $_SERVER['REMOTE_ADDR'];
        // Get city and country details
        $url             = "http://api.ipinfodb.com/v3/ip-country/?key=" . IPINFOAPI_KEY . "&ip=$ip";
        $data            = @file_get_contents($url);
        $dat             = explode(";", $data);
        $city_name       = isset($dat[2]) ? $dat[2] : ""; //$this->company_model->get_city_name($post['city']);
        $country_name    = isset($dat[3]) ? $dat[3] : ""; //$this->company_model->get_country_name($post['country']);
        $post['city']    = isset($dat[2]) ? $dat[2] : "";
        $post['country'] = isset($dat[3]) ? $dat[3] : "";
        $message1        = " (FREE TRAIL REQUEST)  Company : " . $_POST['company_name'] . "  |  Message : " . $_POST['message'] . "   |   No. of Taxi : " . $_POST['no_of_taxi'] . "   |   Country : " . $country_name . "   |   IP Address : " . $ip;
        $save_free_trial = $this->company_model->save_free_trial($post);
        if (count($save_free_trial) > 0) {
            $mail              = "";
            $replace_variables = array(
                REPLACE_LOGO => EMAILTEMPLATELOGO,
                REPLACE_SITENAME => $this->app_name,
                REPLACE_EMAIL => $post['g_email'],
                REPLACE_NAME => $post['g_name'],
                REPLACE_PHONE => $post['g_phone'],
                REPLACE_COMPANY => $post['company_name'],
                REPLACE_NOOFTAXI => $post['no_of_taxi'],
                REPLACE_COUNTRY => $country_name,
                REPLACE_CITY => $city_name,
                MESSAGE => $message1,
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => $this->siteemail,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            );
            $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'get_free_quotes.html', $replace_variables);
            $to                = 'maheswaran.r@ndot.in,venkatesan@ndot.in';
            //$to = 'senthilkumar.a@ndot.in';
            $from              = $this->siteemail;
            $subject           = __('get_free_quotes_details') . " - " . $this->app_name;
            $redirect          = 'users/index';
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
            /* CURL FUNCTION FOR Place the data to NDOT CRM */
            $_POST['name']        = $_POST['g_name'];
            $_POST['email']       = $_POST['g_email'];
            $_POST['telephone']   = $_POST['g_phone'];
            $_POST['category']    = "220";
            $_POST['site']        = "ndot";
            $_POST['success_url'] = "http://www.taximobility.com";
            $_POST['country']     = $country_name;
            $_POST['source_type'] = "22";
            $_POST['feedback']    = $message1;
            $data                 = $_POST;
            //url-ify the data for the POST
            $fields_string        = '';
            foreach ($data as $key => $value) {
                $fields_string .= $key . '=' . $value . '&';
            }
            $fields_string = rtrim($fields_string, '&');
            $url           = "http://ndot.engagedots.com/api/contactUs";
            $ch            = curl_init(); //open connection
            curl_setopt($ch, CURLOPT_URL, $url); //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_POST, count($data));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($ch); //execute post
            curl_close($ch); //close connection
            /* CURL FUNCTION FOR CONTACT CRM */
            /********** Auto company creation ***************/
            $signup_id = $this->company_model->addcompanydetails($post_values);
            if ($signup_id == 1) {
                $mail                    = "";
                $domain                  = trim($post['domain_name']);
                $passengerdriver_details = "";
                $passengerdriver_details .= "<p style='color: #333'>Passenger Details</p>";
                $passengerdriver_details .= '<table cellspacing="0" cellpadding="0" width="300" style="font-size: 14px; line-height: 20px; font-family: "Lucida Grande",Arial,sans-serif;font-color: #000; border="1" ">
                    <tr>
                        <td><b>#</b></td>
                        <td><b>Username(Mobile Number)</b></td>
                        <td><b>Password</b></td>
                    </tr>';
                // Dynmaic Passenger login details 
                for ($i = 1; $i < 3; $i++) {
                    $passengerdriver_details .= '<tr>
                        <td>' . $i . '</td>
                        <td>' . $domain . $i . '</td>
                        <td>qwerty</td>
                    </tr>';
                }
                $passengerdriver_details .= '</table>';
                $passengerdriver_details .= '<img src="##SITEURL##public/images/email_temp_spacer-header.jpg" width="520px" height="20px" alt="##SITENAME##"/>';
                $passengerdriver_details .= '<p style="color: #333;">Driver Details</p>';
                $passengerdriver_details .= '<table  cellspacing="0" cellpadding="0" width="300" style="font-size: 14px; line-height: 20px; font-family: "Lucida Grande",Arial,sans-serif;font-color: #000; border="1" ">
                    <tr>
                        <td><b>#</b></td>
                        <td><b>Username(Mobile Number)</b></td>
                        <td><b>Password</b></td>
                    </tr>';
                // Dynmaic driver login details 
                for ($i = 1; $i < 3; $i++) {
                    $passengerdriver_details .= '<tr>
                        <td>' . $i . '</td>
                        <td>' . $domain . $i . '</td>
                        <td>qwerty</td>
                    </tr>';
                }
                $passengerdriver_details .= '</table>';
                $passengerdriver_details .= '<img src="##SITEURL##public/images/email_temp_spacer-header.jpg" width="520px" height="20px" alt="##SITENAME##"/>';
                $replace_variables = array(
                    REPLACE_LOGO => EMAILTEMPLATELOGO,
                    REPLACE_SITENAME => $this->app_name,
                    REPLACE_USERNAME => $_POST['g_name'],
                    REPLACE_EMAIL => $_POST['g_email'],
                    REPLACE_PASSWORD => 'qwerty',
                    REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                    REPLACE_SITEEMAIL => $this->siteemail,
                    MESSAGE => $passengerdriver_details,
                    REPLACE_SITEURL => URL_BASE,
                    REPLACE_COMPANYDOMAIN => $domain,
                    REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                    REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                );
                // Place the content to Email templete 
                //$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
				if ($this->lang != 'en') {
					if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/autotrail_company_registration-' . $this->lang . '.html')) {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/autotrail_company_registration-' . $this->lang . '.html', $replace_variables);
					} else {
						$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
					}
				} else {
					$message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'autotrail_company_registration.html', $replace_variables);
				}
                $to                = $_POST['g_email'];
                $from              = $this->siteemail;
                $subject           = __('registration_success'); //Language string for internationalization
                $redirect          = 'no';
                if (SMTP == 1) {
                    // send the mail to user from SMTP 
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
                //Message::success(__('sucessfull_added_company'));
                //$this->request->redirect(URL_BASE);
                echo '1';
                exit;
            }
        }
    }
    public function action_sms_settings()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        $errors                = array();
        $socialsettings_submit = arr::get($_REQUEST, 'editsms_settings_submit');
        $errors                = array();
        $post_values           = array();
        $company_id            = $_SESSION['company_id'];
        $sms_id                = '';
        $smssettings           = $this->company_model->sms_settings($company_id);
        if (empty($smssettings)) {
            $smssettings[0]['sms_account_id']  = '';
            $smssettings[0]['sms_auth_token']  = '';
            $smssettings[0]['sms_from_number'] = '';
            $smssettings[0]['sms_id']          = '';
        }
        $sms_id = $smssettings[0]['sms_id'];
        if ($socialsettings_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $validator   = $this->company_model->validate_update_smssettings(arr::extract($_POST, array(
                'sms_account_id',
                'sms_auth_token',
                'sms_from_number'
            )));
            //'site_city';
            if ($validator->check()) {
                $status = $this->company_model->update_sms_settings($_POST, $company_id, $sms_id);
                if ($status == 1) {
                    Message::success(__('sucessful_settings_update'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("company/sms_settings");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //$id = $this->request->param('id');
        // $id=1;
        $this->selected_page_title  = __("sms_settings");
        $view                       = View::factory('admin/sms_settings')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('smssettings', $smssettings);
        $this->template->title      = SITENAME . " | " . __('sms_settings');
        $this->template->page_title = __('sms_settings');
        $this->template->content    = $view;
    }
    public function action_checkemail()
    {
        $check_domain_exist = $this->company_model->checkemail($_REQUEST["type"]);
        if ($check_domain_exist == 0) {
            echo '<span style="color:red;">' . __('emailexists') . '</span>';
            exit;
        } else {
            echo "";
            exit;
        }
    }
    public function action_checkdomain()
    {
        $check_domain_exist = $this->add_model->checkcompanydomain($_REQUEST["type"]);
        if ($check_domain_exist == 0) {
            echo '<span style="color:green;">' . __('company_domain_is_avaliable') . '</span>';
            exit;
        } else {
            echo '<span style="color:red;">' . __('company_domain_is_exist') . '</span>';
            exit;
        }
    }
    /**************Dashboard Trip Details Chart***************/
    public function action_get_company_trip_count()
    {
        $this->auto_render = false;
        $year              = date('Y');
        for ($i = 1; $i <= 12; $i++) {
            $count    = $this->company_model->get_company_trip_count($i, $year);
            $revenues = $this->company_model->get_company_trip_revenues($i, $year);
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
        $get_transaction = $this->company_model->total_trip_details($startdate, $enddate);
        $view            = View::factory('company/total_trip_revenue')->bind('post_values', $post_values)->bind('get_transaction', $get_transaction);
        echo $view;
        exit;
    }
    /**************Dashboard Trip Details Chart***************/
    /** Account Report **/
    //Admin Transactions without Search action 
    public function action_account_reports()
    {
        $this->is_login();
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[2]);
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        
        $page_title                 = __("account_report");
        $list                       = 'all';
        $company                    = $_SESSION['company_id'];
        $get_allcompany             = ""; //$this->transaction_model->get_allcompany_tranaction($usertype);
        $taxilist                   = $this->transaction_model->gettaxidetails('', '');
        $passengerlist              = $this->transaction_model->getpassengerdetails('', '');
        $driverlist                 = $this->transaction_model->getdriverdetails('', '');
        $managerlist                = $this->transaction_model->getmanagerdetails('');
        $startdate                  = date('Y-m-01 00:00:00');
        $enddate                    = date('Y-m-t 12:59:59');
        //$count_transaction_list = $this->transaction_model->count_accountreport_list($list,'All','','','');
        $grpahdata                  = $this->transaction_model->getaccountreportvalues($list, $company, $startdate, $enddate, '');
        $gateway_details            = $this->common_model->gateway_details();
        $package_details            = ""; //$this->common_model->package_details();
        $all_transaction_list       = $this->transaction_model->accountreport_details($list, $company, $startdate, $enddate, '');
        //****pagination ends here***/
        //send data to view file 
        //echo 'as';exit;
        $view                       = View::factory('admin/company_account_report')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('gateway_details', $gateway_details)->bind('package_details', $package_details)->bind('grpahdata', $grpahdata)->bind('id', $id);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_account_report_lists()
    {
        $this->is_login();
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[2]);
        $list           = $split[0];
        $user_createdby = $_SESSION['userid'];
        $usertype       = $_SESSION['user_type'];
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $page_title                 = __("account_report");
        $list                       = 'all';
        $company                    = trim(Html::chars($_REQUEST['filter_company']));
        $startdate                  = trim(Html::chars($_REQUEST['startdate']));
        $enddate                    = trim(Html::chars($_REQUEST['enddate']));
        $payment_type               = trim(Html::chars($_REQUEST['payment_type']));
        
        $get_allcompany             = $this->transaction_model->get_allcompany_tranaction();
        $managerlist                = $this->transaction_model->getmanagerdetails($company);
        $all_transaction_list       = $this->transaction_model->accountreport_details($list, $company, $startdate, $enddate, $payment_type);
        $grpahdata                  = $this->transaction_model->getaccountreportvalues($list, $company, $startdate, $enddate, $payment_type);
        $gateway_details            = $this->common_model->gateway_details();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/company_account_report')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('grpahdata', $grpahdata)->bind('gateway_details', $gateway_details)->bind('id', $id);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    /** Account Report **/
    public function action_payment_module_setting()
    {
        $this->is_login();
        $usertype = $_SESSION['user_type'];
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        $user_id       = $_SESSION['userid'];
        $company_id    = $_SESSION['company_id'];
        $page_title    = __("payment_module_settings");
        $signup_submit = arr::get($_REQUEST, 'submit_addcompany');
        $errors        = array();
        $post_values   = array();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->company_model->validate_payment_settings(arr::extract($post, array(
                'paymodstatus'
            )), $user_id);
            if (!isset($_POST['paymodstatus'])) {
                $check_paystatus = 0;
            } else {
                if (in_array($_POST['default'][0], $_POST['paymodstatus'])) {
                    $check_paystatus = 1;
                } else {
                    $check_paystatus = 2;
                }
            }
            $check_default = $this->company_model->check_array($_POST['default']);
            if ($check_paystatus == 1 && $validator->check()) {
                $status = $this->company_model->update_payment_setting($user_id, $post_values, $company_id);
            } else {
                $errors = $validator->errors('errors');
                if ($check_paystatus == 0) {
                    $errors['paymodstatus'] = 'Please select any one of the gateway';
                } else if ($check_paystatus == 2) {
                    $errors['paymodstatus'] = 'Please select the default gateway';
                }
                //echo $errors['paymodstatus'];exit;
            }
        }
        $get_company_payment_settings = $this->company_model->get_company_payment_settings($user_id);
        $view                         = View::factory('admin/company_payment_setting')->bind('get_company_payment_settings', $get_company_payment_settings)->bind('errors', $errors);
        $this->page_title             = $page_title;
        $this->template->title        = $page_title . " | " . SITENAME;
        $this->template->page_title   = $page_title;
        $this->template->content      = $view;
    }
    public function action_payment_gateway_module()
    {
        $this->is_login();
        $usertype    = $_SESSION['user_type'];
        /*if($usertype !='C'){
        $this->request->redirect("admin/login");
        } */
        $update_post = arr::get($_REQUEST, 'update');
        $post        = array();
        if ($update_post) {
            $post = $_REQUEST;
            if (isset($post['default_payment'])) {
                $id                     = $post['default_payment'];
                $update_default_country = $this->company_model->update_default_payment($id);
                if ($update_default_country == 1) {
                    Message::success(__('changed_default_payment'));
                    $this->request->redirect("company/payment_gateway_module");
                } else if ($update_default_country == '-1') {
                    Message::error(__('select_the_activepayment'));
                    $this->request->redirect("company/payment_gateway_module");
                } else {
                    Message::error(__('select_the_defaultpayment'));
                    $this->request->redirect("company/payment_gateway_module");
                }
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("admin/payment_gateway_module");
            }
        }
        //$id = $this->request->param('id');
        //$currencysymbol = $this->currencysymbol;
        //$currencycode = $this->all_currency_code;
        $payment_settings           = $this->company_model->get_payment_gateways();
        $this->selected_page_title  = __("site_settings");
        $view                       = View::factory('admin/manage_company_payment_module')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('pag_data', $pag_data)->bind('payment_settings', $payment_settings)->bind('Offset', $offset);
        $this->template->title      = SITENAME . " | " . __('payment_gateway_setting');
        $this->template->page_title = __('payment_gateway_setting');
        $this->template->content    = $view;
    }
    
    
}
