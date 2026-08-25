<?php defined('SYSPATH') OR die('No Direct Script Access');
/******************************************

* Contains Users Module details

* @Created on July, 2013

* @Updated on July, 2013

* @Package: taxi

* @Author: taxi Team

* @URL : taxiapp.com

********************************************/
class Controller_Corporate extends Controller_Siteadmin
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
        $this->corporate_model     = Model::factory('corporate');
        $this->admin_model       = Model::factory('admin');
        $this->manage_model       = Model::factory('manage');
        $this->transaction_model = Model::factory('transaction');
	}
    public function action_index()
    {
        $this->urlredirect->redirect('corporate/login');
        $this->template->meta_desc     = $this->metadescription;
        $this->template->meta_keywords = $this->metakeywords;
    }
	
    public function action_login()
    {
        if ($this->userid) {
            $this->urlredirect->redirect('corporate/dashboard');
        }
        //condition checked to show package period expire message
        if (isset($_REQUEST['type']) && $_REQUEST['type'] == "expire") {
            Message::error(__('check_company_owner'));
            $this->urlredirect->redirect('corporate/login');
        }
        $submit      = $this->request->post('admin_login');
        $form_values = Arr::extract($_REQUEST, array(
            'email',
            'password'
        ));
        $validate    = $this->authorize->login_validate($form_values);
        if (isset($submit)) {
            if ($validate->check()) {
				
                if (($this->authorize->corporatelogin_details($form_values['email'], md5($form_values['password']), TRUE)) > 0)
                    {
						
                    $select_result = $this->authorize->corporatelogin_details($form_values['email'], md5($form_values['password']), FALSE);
                 
                        $userid = $select_result[0]['id'];
                        $this->session->set("userid", $select_result[0]['id']);
                        $this->session->set("user_type", $select_result[0]['user_type']);
                        $this->session->set("name", $select_result[0]['name']);
                        $this->session->set("pname", $select_result[0]['name'].' '.$select_result[0]['lastname']);
                        //$this->session->set("username", $select_result[0]['username']);
                        $this->session->set("company_id", $select_result[0]['company_id']);
                        $this->session->set("email", $select_result[0]['email']);
                        $this->session->set("city_id", $select_result[0]['login_city']);
                        $this->session->set("state_id", $select_result[0]['login_state']);
                        $this->session->set("country_id", $select_result[0]['login_country']);
                        Message::success(__('succesful_login_flash') . COMPANY_SITENAME);
                        $this->urlredirect->redirect('corporate/dashboard');

                } else {
                    Message::error(__('login_failure') . 'of ' . COMPANY_SITENAME);
                }
            } else {
                $errors = $validate->errors('errors');
                //print_r($errors);exit;
            }
        }
        $this->template->page_title = __('corporate_login_title');
        $view                       = View::factory(CORPORATEVIEW . 'login')->bind('validate', $validate)->bind('form_values', $form_values)->bind('errors', $errors);
        $this->template->content    = $view;
    }
     public function action_dashboard()
    {
		
        $this->is_login();
        if (isset($this->usertype)) {
            $usertype = $this->usertype;
            if ($usertype == 'A') {
                $this->urlredirect->redirect('admin/dashboard');
            }
            if ($usertype == 'C') {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else {
            $this->urlredirect->redirect('corporate/login');
        }
        $post_values        = array();
        $promocode_list        = array();
        $post_values        = $_REQUEST;
       
       
       
        $company_id                 = $this->company_id;
        $admin_dashboard_data       = $this->corporate_model->get_admin_dashboard_data($company_id);
        $count_company_list        = $this->manage_model->all_coupon_package_list(NULL,NULL,TRUE);
		$package_list = 		$this->manage_model->all_coupon_package_list(0, $count_company_list);
		$count_promocode_list       = $this->manage_model->promocode_list(NULL,NULL,'', $company_id,$this->userid,TRUE);
		
		if($count_promocode_list > 0 ){
		$promocode_list = 		$this->manage_model->promocode_list(0,$count_promocode_list,'', $company_id,$this->userid ,FALSE);	
		}
        $this->selected_page_title  = __("dashboard");
        $view                       = View::factory('corporate/dashboard')->bind('postvalue', $post_values)->bind('admin_dashboard_data', $admin_dashboard_data)->bind('package_list',$package_list)->bind('promocode_list',$promocode_list);
        $this->template->title      = SITENAME . " | " . __('dashboard');
        $this->template->page_title = __('dashboard');
        $this->template->content    = $view;
    }
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
            $this->urlredirect->redirect('corporate/dashboard');
        }
        /**To get the form submit button name**/
        $signup_submit       = arr::get($_REQUEST, 'submit_editmanager');
        $errors              = array();
        $post_values         = array();
        $company_details = $this->add_model->taxicompany_details();
        
        $manager_details     = $this->corporate_model->corporate_details($uid);
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
                $status = $this->corporate_model->edit_corporate($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_corporate'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("corporate/dashboard");
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
      public function action_logout()
    {
        $this->is_login();
        $this->session->destroy();
        Cookie::delete('userid');
        //$this->urlredirect->redirect("admin/login");
        $this->request->redirect("/corporate/login");
    }
     public function action_forgot_password()
    {
		$errors         = array();
        $forgotpassword = arr::get($_REQUEST, 'submit_forgot_password_admin');
		
        if (isset($forgotpassword) && Validation::factory($_POST)) {
			
            $postvalue      = Arr::map('trim', $this->request->post());
            $validator = $this->authorize->forgotpassword_corporatevalidate(arr::extract($postvalue, array(
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
                $redirect          = "corporate/login";
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
                $this->request->redirect("corporate/login");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                             = View::factory(CORPORATEVIEW . 'forgot_password')->bind('errors', $errors)->bind('postvalue', $postvalue);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('forgot_password');
        $this->template->page_title       = __('forgot_password');
    }
    
    /* Sasi */
    // public function action_view_group() {

    //     if (!isset($_SESSION['user_type'])) {
    //         $this->urlredirect->redirect('admin/login');
    //     }

    //     $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
    //     if ($page_no == 0 || $page_no == 'index') {
    //         $page_no = PAGE_NO;
    //     }
    //     $Offset  = REC_PER_PAGE * ($page_no - 1);

    //     $total_count = $this->corporate_model->countAllCorporateGroups();
    //     $groups = $this->corporate_model->get_corporate_groups($Offset, REC_PER_PAGE);
    
    //     $pag_data  = Pagination::factory(array(
    //         'current_page' => array(
    //             'source' => 'query_string',
    //             'key' => 'page'
    //         ),
    //         'items_per_page' => REC_PER_PAGE,
    //         'total_items' => $total_count,
    //         'view' => 'pagination/punbb'
    //     ));

    //     $view  = View::factory(ADMINVIEW . 'view_group')->bind("groups",$groups)->bind("total_count",$total_count)->bind("Offset",$Offset)->bind('pag_data', $pag_data);
    //     $this->template->content          = $view;
    //     $this->template->meta_description = SITENAME . " | Admin ";
    //     $this->template->meta_keywords    = SITENAME . " | Admin ";
    //     $this->template->title            = SITENAME . " | " . __('corporate_group');
    //     $this->template->page_title       = __('corporate_group');
    // }

    // public function getPassengerDetails($passengers,$id) {
    //     foreach ($passengers as $key => $value) {
    //         if($value['id'] == $id) {
    //             return $value['text'];
    //         }
    //     }
    //     return "";
    // }

    // public function action_add_group(){

    //     if (!isset($_SESSION['user_type'])) {
    //         $this->urlredirect->redirect('admin/login');
    //     }

    //     $post_values = $_REQUEST;
    //     $errors = array();

    //     if($_POST && isset($_POST['submit_addgroup'])) {
    //         $members = array();
    //         $membersPostForm = array();

    //         if(!empty($_POST['members'])) {
    //             foreach ($_POST['members'] as $key => $value) {
    //                 $newArray = array();
    //                 $newArrayPostForm = array();
    //                 $splitValues = explode("--", $value);
    //                 if(isset($splitValues[0])) {
    //                     $name = isset($splitValues[1]) ? $splitValues[1] : "";
    //                     $phone = isset($splitValues[2]) ? $splitValues[2] : "";

    //                     $newArrayPostForm['id'] = $splitValues[0]."--".$name."--".$phone;
    //                     $newArrayPostForm['text'] = $name."-".$phone;
    //                 }
    //                 if(isset($splitValues[0])) {
    //                     array_push($members,(int)$splitValues[0]);
    //                 }
    //                 if(!empty($newArrayPostForm)) {
    //                     array_push($membersPostForm,$newArrayPostForm);
    //                 }
    //             }
    //         }

    //         $post_values['members'] = $membersPostForm;

    //         $validator = $this->corporate_model->validate_category_group($post_values);
    //         if ($validator->check()) {
    //             /* Check if the passengers already in group */
    //             $previousGroups = $this->corporate_model->checkPassengerAlreadyInGroup($members);
    //             $validPassengers = true;
    //             foreach ($previousGroups as $key => $value) {
    //                 if(count($value['members']) > 0) {
    //                     $validPassengers = false;
    //                 }
    //             }

    //             if($validPassengers) {
    //                 $groupDetails = array(
    //                     "group_name" => $post_values['group_name'],
    //                     // "minimum_wallet_balance" => $post_values['minimum_wallet_balance'],
    //                     // "discount_wallet" => (int)$post_values['discount_wallet'],
    //                     "minimum_wallet_balance" => 0,
    //                     "discount_wallet" => 0,
    //                     "surge_price" => (int)$post_values['surge_price'],
    //                     "restrict_wallet_amount" => (int)$post_values['restrict_wallet_amount'],
    //                     "apply_to_airport" => (int)$post_values['apply_to_airport'],
    //                     "corporate_trip_discount" => (int)$post_values['corporate_trip_discount'],
    //                     "corporate_discount" => (double)$post_values['corporate_discount'],
    //                     "members" => $members,
    //                 );
    //                 $response = $this->corporate_model->add_corporate_group($groupDetails);
    //                 if($response == 1) {
    //                     Message::success(__('sucessfull_added_group'));
    //                     $this->request->redirect("corporate/view_group");
    //                 }
    //             } else {
    //                 $passengers = array();
    //                 foreach ($previousGroups as $key => $value) {
    //                     if(!empty($value['members'])) {
    //                         foreach ($value['members'] as $key => $memberId) {
    //                             $passenger = $this->getPassengerDetails($membersPostForm,$memberId);
    //                             if($passenger != "") {
    //                                 $passengerGroupDetails = array(
    //                                     "group_name" => $value['group_name'],
    //                                     "id" => $memberId,
    //                                     "passenger" => $passenger
    //                                 );
    //                                 array_push($passengers,$passengerGroupDetails);
    //                             }
    //                         }
    //                     }
    //                 }
    //                 $post_values['passenger_groups'] = $passengers;
    //             }
    //         } else {
    //             $errors = $validator->errors('errors');
    //         }
    //     }

    //     $view  = View::factory(ADMINVIEW . 'add_group')->bind('postvalue', $post_values)->bind("errors",$errors);
    //     $this->template->content          = $view;
    //     $this->template->meta_description = SITENAME . " | Admin ";
    //     $this->template->meta_keywords    = SITENAME . " | Admin ";
    //     $this->template->title            = SITENAME . " | " . __('add_group');
    //     $this->template->page_title       = __('add_group');
    // }

    // public function action_get_passengers() {
    //     $filter = isset($_GET['search']) ? $_GET['search'] : "";
    //     $page   = isset($_GET['page']) ? $_GET['page'] : 1;
    //     $passengers = $this->corporate_model->get_passengers_list($filter,$page);
    //     echo json_encode($passengers);
    //     exit;
    // }

    // public function action_group_view() {

    //     if (!isset($_SESSION['user_type'])) {
    //         $this->urlredirect->redirect('admin/login');
    //     }

    //     $id = $this->request->param('id');
    //     if ($id == "") {
    //         $this->urlredirect->redirect('corporate/view_group');
    //     }

    //     $groupInfo = $this->corporate_model->getGroupInfo($id);
    //     $groupInfo = isset($groupInfo[0]) ? $groupInfo[0] : array();

    //     $view  = View::factory(ADMINVIEW . 'view_group_passengers')->bind('groupInfo', $groupInfo);
    //     $this->template->content          = $view;
    //     $this->template->meta_description = SITENAME . " | Admin ";
    //     $this->template->meta_keywords    = SITENAME . " | Admin ";
    //     $this->template->title            = SITENAME . " | " . __('corporate_group');
    //     $this->template->page_title       = __('corporate_group');
    // }

    // public function action_group_edit() {

    //     if (!isset($_SESSION['user_type'])) {
    //         $this->urlredirect->redirect('admin/login');
    //     }

    //     $id = $this->request->param('id');
    //     if ($id == "") {
    //         $this->urlredirect->redirect('corporate/view_group');
    //     }

    //     $post_values = $_REQUEST;
    //     $errors = array();

    //     if($_POST && isset($_POST['submit_addgroup'])) {
    //         $members = array();
    //         $membersPostForm = array();

    //         if(!empty($_POST['members'])) {
    //             foreach ($_POST['members'] as $key => $value) {
    //                 $newArray = array();
    //                 $newArrayPostForm = array();
    //                 $splitValues = explode("--", $value);
    //                 if(isset($splitValues[0])) {
    //                     $name = isset($splitValues[1]) ? $splitValues[1] : "";
    //                     $phone = isset($splitValues[2]) ? $splitValues[2] : "";

    //                     $newArrayPostForm['id'] = $splitValues[0]."--".$name."--".$phone;
    //                     $newArrayPostForm['text'] = $name."-".$phone;
    //                 }
    //                 if(isset($splitValues[0])) {
    //                     array_push($members,(int)$splitValues[0]);
    //                 }
    //                 if(!empty($newArrayPostForm)) {
    //                     array_push($membersPostForm,$newArrayPostForm);
    //                 }
    //             }
    //         }

    //         $post_values['members'] = $membersPostForm;

    //         $validator = $this->corporate_model->validate_category_group($post_values);
    //         if ($validator->check()) {
    //             /* Check if the passengers already in group */
    //             $previousGroups = $this->corporate_model->checkPassengerAlreadyInGroup($members,$id);
    //             $validPassengers = true;
    //             foreach ($previousGroups as $key => $value) {
    //                 if(count($value['members']) > 0) {
    //                     $validPassengers = false;
    //                 }
    //             }

    //             if($validPassengers) {
    //                 $groupDetails = array(
    //                     "group_name" => $post_values['group_name'],
    //                     // "minimum_wallet_balance" => $post_values['minimum_wallet_balance'],
    //                     // "discount_wallet" => (int)$post_values['discount_wallet'],
    //                     "minimum_wallet_balance" => 0,
    //                     "discount_wallet" => 0,
    //                     "surge_price" => (int)$post_values['surge_price'],
    //                     "restrict_wallet_amount" => (int)$post_values['restrict_wallet_amount'],
    //                     "apply_to_airport" => (int)$post_values['apply_to_airport'],
    //                     "corporate_trip_discount" => (int)$post_values['corporate_trip_discount'],
    //                     "corporate_discount" => (double)$post_values['corporate_discount'],
    //                     "members" => $members,
    //                 );
    //                 $response = $this->corporate_model->update_corporate_group($groupDetails,$id);
    //                 if($response == 1) {
    //                     Message::success(__('sucessfull_updated_group'));
    //                     $this->request->redirect("corporate/view_group");
    //                 }
    //             } else {
    //                 $passengers = array();
    //                 foreach ($previousGroups as $key => $value) {
    //                     if(!empty($value['members'])) {
    //                         foreach ($value['members'] as $key => $memberId) {
    //                             $passenger = $this->getPassengerDetails($membersPostForm,$memberId);
    //                             if($passenger != "") {
    //                                 $passengerGroupDetails = array(
    //                                     "group_name" => $value['group_name'],
    //                                     "id" => $memberId,
    //                                     "passenger" => $passenger
    //                                 );
    //                                 array_push($passengers,$passengerGroupDetails);
    //                             }
    //                         }
    //                     }
    //                 }
    //                 $post_values['passenger_groups'] = $passengers;
    //             }
    //         } else {
    //             $errors = $validator->errors('errors');
    //         }
    //     }

    //     $groupInfo = $this->corporate_model->getGroupInfo($id);
    //     $groupInfo = isset($groupInfo[0]) ? $groupInfo[0] : array();

    //     $view  = View::factory(ADMINVIEW . 'edit_group')->bind('groupInfo', $groupInfo)->bind('postvalue', $post_values)->bind("errors",$errors);
    //     $this->template->content          = $view;
    //     $this->template->meta_description = SITENAME . " | Admin ";
    //     $this->template->meta_keywords    = SITENAME . " | Admin ";
    //     $this->template->title            = SITENAME . " | " . __('edit_group');
    //     $this->template->page_title       = __('edit_group');
    // }

    /* Sasidharan nov 15 2022 */
    public function action_view_group() {

        if (!isset($_SESSION['user_type'])) {
            $this->urlredirect->redirect('admin/login');
        }

        $page_no = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index') {
            $page_no = PAGE_NO;
        }
        $Offset  = REC_PER_PAGE * ($page_no - 1);

        $total_count = $this->corporate_model->countAllCorporateGroups();
        $groups = $this->corporate_model->get_corporate_groups($Offset, REC_PER_PAGE);
    
        $pag_data  = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $total_count,
            'view' => 'pagination/punbb'
        ));

        $view  = View::factory(ADMINVIEW . 'view_group')->bind("groups",$groups)->bind("total_count",$total_count)->bind("Offset",$Offset)->bind('pag_data', $pag_data);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('corporate_group');
        $this->template->page_title       = __('corporate_group');
    }

    public function getPassengerDetails($passengers,$id) {
        foreach ($passengers as $key => $value) {
            if($value['id'] == $id) {
                return $value['text'];
            }
        }
        return "";
    }

    public function action_add_group(){

        if (!isset($_SESSION['user_type'])) {
            $this->urlredirect->redirect('admin/login');
        }

        $post_values = $_REQUEST;
        $errors = array();

        if($_POST && isset($_POST['submit_addgroup'])) {
            $validator = $this->corporate_model->validate_category_group($post_values);
            if ($validator->check()) {
                $groupDetails = array(
                    "group_name" => $post_values['group_name']
                );
                $response = $this->corporate_model->add_corporate_group($groupDetails);
                if($response == 1) {
                    Message::success(__('sucessfull_added_group'));
                    $this->request->redirect("corporate/view_group");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }

        $view  = View::factory(ADMINVIEW . 'add_group')->bind('postvalue', $post_values)->bind("errors",$errors);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('add_group');
        $this->template->page_title       = __('add_group');
    }

    public function action_get_passengers() {
        $filter = isset($_GET['search']) ? $_GET['search'] : "";
        $page   = isset($_GET['page']) ? $_GET['page'] : 1;
        $passengers = $this->corporate_model->get_passengers_list($filter,$page);
        echo json_encode($passengers);
        exit;
    }

    public function action_group_view() {

        if (!isset($_SESSION['user_type'])) {
            $this->urlredirect->redirect('admin/login');
        }

        $id = $this->request->param('id');
        if ($id == "") {
            $this->urlredirect->redirect('corporate/view_group');
        }

        $groupInfo = $this->corporate_model->getGroupInfo($id);
        $groupInfo = isset($groupInfo[0]) ? $groupInfo[0] : array();

        $view  = View::factory(ADMINVIEW . 'view_group_passengers')->bind('groupInfo', $groupInfo);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('corporate_group');
        $this->template->page_title       = __('corporate_group');
    }

    public function action_group_edit() {

        if (!isset($_SESSION['user_type'])) {
            $this->urlredirect->redirect('admin/login');
        }

        $id = $this->request->param('id');
        if ($id == "") {
            $this->urlredirect->redirect('corporate/view_group');
        }

        $post_values = $_REQUEST;
        $errors = array();

        if($_POST && isset($_POST['submit_addgroup'])) {

            $validator = $this->corporate_model->validate_category_group($post_values);
            if ($validator->check()) {    
                $groupDetails = array(
                    "group_name" => $post_values['group_name']
                );
                $response = $this->corporate_model->update_corporate_group($groupDetails,$id);
                if($response == 1) {
                    Message::success(__('sucessfull_updated_group'));
                    $this->request->redirect("corporate/view_group");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }

        $groupInfo = $this->corporate_model->getGroupInfo($id);
        $groupInfo = isset($groupInfo[0]) ? $groupInfo[0] : array();

        $view  = View::factory(ADMINVIEW . 'edit_group')->bind('groupInfo', $groupInfo)->bind('postvalue', $post_values)->bind("errors",$errors);
        $this->template->content          = $view;
        $this->template->meta_description = SITENAME . " | Admin ";
        $this->template->meta_keywords    = SITENAME . " | Admin ";
        $this->template->title            = SITENAME . " | " . __('edit_group');
        $this->template->page_title       = __('edit_group');
    }
    
}
