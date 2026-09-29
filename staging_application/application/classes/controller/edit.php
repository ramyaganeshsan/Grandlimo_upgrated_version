<?php defined('SYSPATH') or die('No direct script access.');
/****************************************************************

* Contains User Management(Users)details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Edit extends Controller_Siteadmin
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
		//Model Defining
		$this->edit_model     = Model::factory('edit');
        $this->add_model      = Model::factory('add');
		$this->view_model     = Model::factory('manage');
		$this->driver         = Model::factory('driver');
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
        $usertype       = $this->usertype;
        $company_userid = $this->user_createdby;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
		if (($usertype == 'C')) {
            if (($company_userid != $uid)) {
                $this->urlredirect->redirect('company/dashboard');
            }
        }
        if (($usertype == 'M')) {
            $this->urlredirect->redirect('company/dashboard');
        }
        $edit_model      = Model::factory('edit');
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->company_details_new($uid);
        //if invalid id is given redirect to manage page
        if (count($Company_details) == 0) {
			Message::error(__('no_data'));
            $this->request->redirect("manage/company");
        }
        $country_details              = $this->edit_model->country_details();
        $city_details                 = $this->edit_model->city_details();
        $state_details                = $this->edit_model->state_details();
		$payment_modules 			  = $this->edit_model->payment_modules();
        $currencysymbol               = $this->currencysymbol;
        $currencycode                 = $this->all_currency_code;
        $get_company_payment_settings = $this->edit_model->get_company_payment_settings($uid);
        $signup_submit                = arr::get($_REQUEST, 'submit_addcompany');
        $errors                       = [];
        $post_values                  = [];
        
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
			//print_r($post_values);exit;
            $validator   = $this->edit_model->validate_editcompany(arr::extract($post_values, [
                'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'company_name',
                'company_address',
                'country',
                'state',
                'city',
                'currency_code',
                'currency_symbol',
                'time_zone',
                'paymodstatus'
            ]), $uid);
            if (!isset($_POST['paymodstatus'])) {
                $check_paystatus = 0;
            } else {
                if (in_array($_POST['default'][0], $_POST['paymodstatus'])) {
                    $check_paystatus = 1;
                } else {
                    $check_paystatus = 2;
                }
            }
            if ($validator->check() && ($check_paystatus == 1)) {
                $status = $this->edit_model->editcompany($uid, $post_values, $_FILES);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_company'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/company");
            } else {
                $errors = $validator->errors('errors');
                if ($check_paystatus == 0) {
                    $errors['paymodstatus'] = 'Please select any one of the gateway';
                } else if ($check_paystatus == 2) {
                    $errors['paymodstatus'] = 'Please select the default gateway';
                }
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_company')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('company_details', $Company_details)->bind('currency_symbol', $currencysymbol)->bind('currency_code', $currencycode)->bind('user_type', $usertype)->bind('get_company_payment_settings', $get_company_payment_settings)->bind('payment_modules', $payment_modules);
        $this->template->title      = SITENAME . " | " . __('manage_company');
        $this->template->page_title = SITENAME . " | " . __('manage_company');
        $this->template->content    = $view;
    }
    public function action_motor()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->motor_details($uid);
        $signup_submit   = arr::get($_REQUEST, 'submit_editmotor');
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editmotor(arr::extract($post, [
                'companyname'
            ]), $uid);
            if ($validator->check()) {
                $status = $this->edit_model->editmotor($uid, $post);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_motor_company'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/motor");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_motor')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details);
        $this->template->title      = SITENAME . " | " . __('manage_motor_company');
        $this->template->page_title = SITENAME . " | " . __('manage_motor_company');
        $this->template->content    = $view;
    }
    public function action_paymentgateway()
    {
        $usertype         = $this->usertype;
        $uid              = $this->request->param('id');
        $payment_settings = $this->edit_model->get_payment_details($uid);
        $signup_submit    = arr::get($_REQUEST, 'submit_editpayment');
        $errors           = [];
        $post_values      = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editcompanypayment(arr::extract($post_values, [
                'description',
                'currency_code',
                'currency_symbol',
                'payment_method',
                //'paypal_api_username',
               // 'paypal_api_password',
               // 'paypal_api_signature',
                'knet_response_url',
                'knet_error_url',
                'knet_resource_path',
                'knet_alias'
            ]), $uid);
            if ($validator->check()) {
				
                $status = $this->edit_model->editcompanypayment($uid, $post_values);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_payment_gateway'));
                } else {
                    Message::error(__('not_updated'));
                }
                if ($usertype == "C") {
                    $this->request->redirect("company/payment_gateway_module");
                } else {
                    $this->request->redirect("admin/payment_gateway_module");
                }
            } else {
				
                $errors = $validator->errors('errors');
            }
        }
        $currencysymbol             = $this->currencysymbol;
        $currencycode               = $this->all_currency_code;
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_company_paymentgateway')->bind('errors', $errors)->bind('validator', $validator)->bind('postvalue', $post_values)->bind('currency_symbol', $currencysymbol)->bind('currency_code', $currencycode)->bind('payment_settings', $payment_settings);
        $this->template->title      = SITENAME . " | " . __('edit_payment_gateway');
        $this->template->page_title = SITENAME . " | " . __('edit_payment_gateway');
        $this->template->content    = $view;
    }
    public function action_model()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model    = Model::factory('edit');
        $uid           = $this->request->param('id');
        $motor_details = $this->edit_model->motordetails();
        $model_details = $this->edit_model->model_motordetails($uid);
        //if invalid id is given redirect to manage page
        if (count($model_details) == 0) {
			Message::error(__('no_data'));
            $this->request->redirect("manage/model");
        }
        $signup_submit = arr::get($_POST, 'submit_editmodel');
        $errors        = [];
        $post_values   = [];
		
		$mobiledata = $_POST;
		
		if(isset($_FILES['model_image']['name']) && !empty($_FILES['model_image']['name'])) {
			$mobiledata['model_image'] = $_FILES['model_image']['name'];
		}
        if(isset($_FILES['model_image_unfocus']['name']) && !empty($_FILES['model_image_unfocus']['name'])) {
            $mobiledata['model_image_unfocus'] = $_FILES['model_image_unfocus']['name'];
        }
		if(isset($_FILES['iconic_image']['name']) && !empty($_FILES['iconic_image']['name'])) {
			$mobiledata['iconic_image'] = $_FILES['iconic_image']['name'];
		}
        if(isset($_FILES['model_image_2']['name']) && !empty($_FILES['model_image_2']['name'])) {
            $mobiledata['model_image_2'] = $_FILES['model_image_2']['name'];
        }
        if(isset($_FILES['model_image_unfocus_2']['name']) && !empty($_FILES['model_image_unfocus_2']['name'])) {
            $mobiledata['model_image_unfocus_2'] = $_FILES['model_image_unfocus_2']['name'];
        }
        if(isset($_FILES['iconic_image_2']['name']) && !empty($_FILES['iconic_image_2']['name'])) {
            $mobiledata['iconic_image_2'] = $_FILES['iconic_image_2']['name'];
        }
        if(isset($_FILES['website_model_image']['name']) && !empty($_FILES['website_model_image']['name'])) {
            $mobiledata['website_model_image'] = $_FILES['website_model_image']['name'];
        }

        if ($signup_submit && Validation::factory($mobiledata)) {
			
            $post_values = Arr::map('trim', $mobiledata);//print_r($post_values);exit;
			$validator   = $this->edit_model->validate_editmodel(array_merge($post_values,$_FILES), $uid);
			
			if ($validator->check()) {
				$model_image       = '';
				$model_image_name       = '';
				$model_image_thumb = '';

                $model_image_unfocus       = '';
                $model_image_unfocus_name       = '';
                $model_image_unfocus_thumb = '';

				$iconic_image       = '';
				$iconic_image_name       = '';
				$iconic_image_thumb = '';
				
                $model_image_2       = '';
                $model_image_name_2       = '';
                $model_image_thumb_2 = '';

                $model_image_unfocus_2       = '';
                $model_image_unfocus_name_2       = '';
                $model_image_unfocus_thumb_2 = '';

                $iconic_image_2       = '';
                $iconic_image_name_2       = '';
                $iconic_image_thumb_2 = '';

                $website_model_image_name = '';

                $path              = DOCROOT . MODEL_IMGPATH;
             //   echo "<pre>";print_r($_FILES);exit();
                $_FILES['model_image']['name'] =  str_replace(" ","_",$_FILES['model_image']['name']);
                $_FILES['model_image_unfocus']['name'] =  str_replace(" ","_",$_FILES['model_image_unfocus']['name']);
                $_FILES['iconic_image']['name'] =  str_replace(" ","_",$_FILES['iconic_image']['name']);
                
                if(isset($mobiledata['model_image']) && $mobiledata['model_image'] != '') {
					if(!empty($mobiledata['model_image'])) {
						$model_image = $this->_save_image($_FILES['model_image'],DOCROOT.MODEL_IMGPATH);
						$model_image_name = $model_image;
					}
                    if(!empty($model_image)) {
						$model_image_thumb = 'thumb_' . $model_image;
						$model_path        = DOCROOT . MODEL_IMGPATH . $model_image;
						$model_image       = Image::factory($model_path);
						Commonfunction::imageresize($model_image,MODEL_THUMBIMG_WIDTH, MODEL_THUMBIMG_HEIGHT,$path,$model_image_thumb,90);
					}
                                        else{
                                            Message::error(__('not_updated'));
                                            $this->request->redirect("manage/model");
                                        }
				}

                if(isset($mobiledata['website_model_image']) && $mobiledata['website_model_image'] != '') {
                    if(!empty($mobiledata['website_model_image'])) {
                        $website_model_image = $this->_save_image($_FILES['website_model_image'],DOCROOT.MODEL_IMGPATH);
                        $website_model_image_name = $website_model_image;
                    }
                    
                }

                 //   echo "<pre>";print_r($mobiledata);exit();

                if(isset($mobiledata['model_image_unfocus']) && $mobiledata['model_image_unfocus'] != '') {
                    if(!empty($mobiledata['model_image_unfocus'])) {
                        $model_image_unfocus = $this->_save_image($_FILES['model_image_unfocus'],DOCROOT.MODEL_IMGPATH);
                        $model_image_unfocus_name = $model_image_unfocus;
                    }
                    if(!empty($model_image_unfocus)) {
                        $model_image_unfocus_thumb = 'thumb_' . $model_image_unfocus;
                        $model_unfocus_path        = DOCROOT . MODEL_IMGPATH . $model_image_unfocus;
                        $model_image_unfocus       = Image::factory($model_unfocus_path);
                        Commonfunction::imageresize($model_image_unfocus,MODEL_THUMBIMG_WIDTH, MODEL_THUMBIMG_HEIGHT,$path,$model_image_unfocus_thumb,90);
                    }
                    else{
                        Message::error(__('not_updated'));
                        $this->request->redirect("manage/model");
                    }
                }


        

				if(isset($mobiledata['iconic_image']) && $mobiledata['iconic_image'] != '') {
					if(!empty($mobiledata['iconic_image'])) {
						$iconic_image = $this->_save_image($_FILES['iconic_image'],DOCROOT.MODEL_IMGPATH);
						$iconic_image_name = $iconic_image;
					}
					if(!empty($iconic_image)) {
						$iconic_image_thumb = 'thumb_' . $iconic_image;
						$iconic_path        = DOCROOT . MODEL_IMGPATH . $iconic_image;
						$iconic_image       = Image::factory($iconic_path);
						Commonfunction::imageresize($iconic_image,ICONIC_THUMBIMG_WIDTH, ICONIC_THUMBIMG_HEIGHT,$path,$iconic_image_thumb,90);
					}
                    else{
                        Message::error(__('not_updated'));
                        $this->request->redirect("manage/model");
                    }
				}

                if(isset($mobiledata['model_image_2']) && $mobiledata['model_image_2'] != '') {
                    if(!empty($mobiledata['model_image_2'])) {
                        $model_image_2 = $this->_save_image($_FILES['model_image_2'],DOCROOT.MODEL_IMGPATH);
                        $model_image_name_2 = $model_image_2;
                    }
                    if(!empty($model_image_2 )) {
                        $model_image_thumb_2  = 'thumb_' . $model_image_2 ;
                        $model_path_2         = DOCROOT . MODEL_IMGPATH . $model_image_2 ;
                        $model_image_2        = Image::factory($model_path_2);
                        Commonfunction::imageresize($model_image_2 ,MODEL_THUMBIMG_WIDTH, MODEL_THUMBIMG_HEIGHT,$path,$model_image_thumb_2 ,90);
                    }
                    else{
                        Message::error(__('not_updated'));
                        $this->request->redirect("manage/model");
                    }
                }
                  //  echo "<pre>";print_r($mobiledata);exit();
                if(isset($mobiledata['model_image_unfocus_2']) && $mobiledata['model_image_unfocus_2'] != '') {
                    if(!empty($mobiledata['model_image_unfocus_2'])) {
                        $model_image_unfocus_2 = $this->_save_image($_FILES['model_image_unfocus_2'],DOCROOT.MODEL_IMGPATH);
                        $model_image_unfocus_name_2 = $model_image_unfocus_2;
                    }
                    if(!empty($model_image_unfocus_2 )) {
                        $model_image_unfocus_thumb_2  = 'thumb_' . $model_image_unfocus_2 ;
                        $model_unfocus_path_2         = DOCROOT . MODEL_IMGPATH . $model_image_unfocus_2 ;
                        $model_image_unfocus_2        = Image::factory($model_unfocus_path_2);
                        Commonfunction::imageresize($model_image_unfocus_2 ,MODEL_THUMBIMG_WIDTH, MODEL_THUMBIMG_HEIGHT,$path,$model_image_unfocus_thumb_2 ,90);
                    }
                    else{
                        Message::error(__('not_updated'));
                        $this->request->redirect("manage/model");
                    }
                }

        

                if(isset($mobiledata['iconic_image_2']) && $mobiledata['iconic_image_2'] != '') {
                    if(!empty($mobiledata['iconic_image_2'])) {
                        $iconic_image_2  = $this->_save_image($_FILES['iconic_image_2'],DOCROOT.MODEL_IMGPATH);
                        $iconic_image_name_2  = $iconic_image_2 ;
                    }
                    if(!empty($iconic_image_2 )) {
                        $iconic_image_thumb_2  = 'thumb_' . $iconic_image_2 ;
                        $iconic_path_2         = DOCROOT . MODEL_IMGPATH . $iconic_image_2 ;
                        $iconic_image_2        = Image::factory($iconic_path_2 );
                        Commonfunction::imageresize($iconic_image_2 ,ICONIC_THUMBIMG_WIDTH, ICONIC_THUMBIMG_HEIGHT,$path,$iconic_image_thumb_2 ,90);
                    }
                    else{
                        Message::error(__('not_updated'));
                        $this->request->redirect("manage/model");
                    }
                }
				if($model_image_name != '') {
					$post_values['model_image'] = $model_image_name;
				}
				if($model_image_thumb != '') {
					$post_values['model_image_thumb'] = $model_image_thumb;
				}
                if($model_image_unfocus_name != '') {
                    $post_values['model_image_unfocus'] = $model_image_unfocus_name;
                }
                if($model_image_unfocus_thumb != '') {
                    $post_values['model_image_unfocus_thumb'] = $model_image_unfocus_thumb;
                }
				if($iconic_image_name != '') {
					$post_values['iconic_image'] = $iconic_image_name;
				}
				if($iconic_image_thumb != '') {
					$post_values['iconic_image_thumb'] = $iconic_image_thumb;
				}
			    if($model_image_name_2 != '') {
                    $post_values['model_image_2'] = $model_image_name_2;
                }
                if($model_image_thumb_2 != '') {
                    $post_values['model_image_thumb_2'] = $model_image_thumb_2;
                }
                if($model_image_unfocus_name_2 != '') {
                    $post_values['model_image_unfocus_2'] = $model_image_unfocus_name_2;
                }
                if($model_image_unfocus_thumb_2 != '') {
                    $post_values['model_image_unfocus_thumb_2'] = $model_image_unfocus_thumb_2;
                }
                if($iconic_image_name_2 != '') {
                    $post_values['iconic_image_2'] = $iconic_image_name_2;
                }
                if($iconic_image_thumb_2 != '') {
                    $post_values['iconic_image_thumb_2'] = $iconic_image_thumb_2;
                }

                if($website_model_image_name != '') {
                    $post_values['website_model_image'] = $website_model_image_name;
                }

                $status = $this->edit_model->editmodel($uid, $post_values);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_model_company'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/model");
            } else {
				$errors = $validator->errors('errors');//print_r($errors);exit;
               
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_model')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('motor_details', $motor_details)->bind('model_details', $model_details);
        $this->template->title      = SITENAME . " | " . __('manage_model');
        $this->template->page_title = SITENAME . " | " . __('manage_model');
        $this->template->content    = $view;
    }
	
	public function _save_image($image, $dir)
    {
        if (! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, ['jpg', 'jpeg', 'png', 'gif','mp4','flv','avi','wmv','mov']))
        {
            return FALSE;
        }
        $directory = $dir;
        if ($file = Upload::save($image, time().$image['name'], $directory)) {
            return time().$image['name'];
        }
        return FALSE;
    }
	
    public function action_fare()
    {
        $usertype = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        $edit_model    = Model::factory('edit');
        $uid           = $this->request->param('id');
        $motor_details = $this->edit_model->motordetails();
        $model_details = $this->edit_model->model_faredetails($uid);
        if (count($model_details) > 0) {
            $modelid    = $model_details['model_id'];
            $model_name = $this->edit_model->model_motordetails($modelid);
        } else {
            $this->request->redirect("manage/fare");
        }
		//echo "<pre>"; print_r($model_details);exit;
        $signup_submit = arr::get($_REQUEST, 'submit_editmodel');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            //print_r($_POST); exit;
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editfare(arr::extract($post, [
                'company_model_fare_id',
                'model_name',
                'model_size',
                'base_fare',
                'min_fare',
                'cancellation_fare',
                'below_km',
                'above_km',
                'night_charge',
                'night_timing_from',
                'night_timing_to',
                'night_fare',
                'waiting_time',
                'min_km',
                'below_and_above_km',
                'minutes_fare',
                'evening_charge',
                'evening_timing_from',
                'evening_timing_to',
                'evening_fare'
            ]));
            if ($validator->check()) {
                $status = $this->edit_model->editfare($post);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_fare_company'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/fare");   
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_fare')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('motor_details', $motor_details)->bind('model_details', $model_details)->bind('model_name', $model_name);
        $this->template->title      = SITENAME . " | " . __('manage_fare');
        $this->template->page_title = SITENAME . " | " . __('manage_fare');
        $this->template->content    = $view;
    }
    public function action_driver()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        $company_id     = $this->company_id;
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        
        /**To get the form submit button name**/
        $signup_submit  = arr::get($_REQUEST, 'submit_driver');
        $errors         = [];
        $post_values    = [];
        $uid            = $this->request->param('id');
        
        $pmid           = $this->view_model->check_peoplecompanyid($uid);
        //echo '<pre>'; print_r($pmid); echo '</pre>';exit;
        if (($usertype == 'C')) {
            if (($company_id != $pmid['company_id']) || ($pmid['user_type'] != 'D')) {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else if (($usertype == 'M')) {
			
            if (($company_id != $pmid['company_id']) || ($state_id != $pmid['login_state']) || ($city_id != $pmid['login_city']) || ($country_id != $pmid['login_country']) || ($pmid['user_type'] != 'D')) {
                $this->urlredirect->redirect('manager/dashboard');
            }
        }
        $Company_details = $this->edit_model->driver_details($uid);
        if (count($Company_details) == 0) {
            $this->urlredirect->redirect('manage/driver');
        }
        $driver_info_details = $this->edit_model->driver_info_details($uid);
        $country_details     = $this->add_model->country_details();
        $city_details        = $this->add_model->city_details();
        $state_details       = $this->add_model->state_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        //echo "<pre>";print_r($city_details);exit;
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'firstname',
                'lastname',
                'dob',
                'email',
                'password',
                'repassword',
                'driver_license_id',
                'driver_license_expire_date',
                'driver_pco_license_number',
                'driver_pco_license_expire_date',
                'driver_insurance_number',
                'driver_insurance_expire_date',
                'driver_national_insurance_number',
                'driver_national_insurance_expire_date',
                'phone',
                'address',
               // 'country',
              // 'state',
                //'city',
                'company_name',
                'booking_limit',
                'twitter_account',
                'facebook_account',
                'instagram_account',
            ]);
            $file_values = Arr::extract($_FILES, [
                'profile_picture','website_photo',
            ]);
            $values      = Arr::merge($form_values, $file_values);
            $validator   = $this->edit_model->validate_editdriver($values, $uid);
            if ($validator->check()) {
                $imgstatus = 0;
                if (!empty($_FILES['profile_picture']['name'])) {
                    $image_name       = uniqid() . $_FILES['profile_picture']['name'];
                    $thumb_image_name = 'thumb_' . $image_name;
                    $image_type       = explode('.', $image_name);
                    $image_type       = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename         = Upload::save($_FILES['profile_picture'], $image_name, DOCROOT . SITE_DRIVER_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image       = Image::factory($filename);
                    $path11           = DOCROOT . SITE_DRIVER_IMGPATH;
                    $path1            = $image_name;
                    Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
                    $path12 = $thumb_image_name;
                    Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                    $imgstatus = $this->driver->update_driverimage($path1, $post['id']);
                }

                if(!empty($_FILES['website_photo']['name'])){

                    $web_image_name       = uniqid() . $_FILES['website_photo']['name'];
                    $web_filename         = Upload::save($_FILES['website_photo'], $web_image_name, DOCROOT.SITE_DRIVER_IMGPATH.'website/');
                    $web_image       = Image::factory($web_filename);
                    $web_path11           = DOCROOT . SITE_DRIVER_IMGPATH.'website/';                   
                    Commonfunction::imageresize($web_image,380,341, $web_path11, $web_image_name, 90);

                    $web_image_old = isset($_POST['web_image_old'])?$_POST['web_image_old']:'';
                    if($web_image_old && $web_image_old!=''){
                        $old_path = DOCROOT.SITE_DRIVER_IMGPATH.'website/'.$web_image_old;
                        if(file_exists($old_path)){
                            unlink($old_path);                            
                        }
                    }
                }else{
                    $web_image_name = '';
                }

                //  $filename = Upload::save($_FILES['photo'],NULL, $_SERVER['DOCUMENT_ROOT'].'/public/uploads/users_image');
                $status = $this->edit_model->edit_driver($post, $uid,$web_image_name);
                if ($status == 1 || $imgstatus == 1) {
                    Message::success(__('sucessfull_updated_driver'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/driver");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_driver')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('driver_info_details', $driver_info_details)->bind('company_details', $Company_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_driver');
        $this->template->page_title = __('manage_driver');
        $this->template->content    = $view;
    }
    public function action_field()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->managefield_details($uid);
        $signup_submit   = arr::get($_REQUEST, 'submit_editfield');
        $field_type      = arr::get($_REQUEST, 'field_type');
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $values      = Arr::extract($post, [
                'field_labelname',
                'field_name',
                'field_type'
            ]);
            if ($field_type != 'Textbox') {
                $field_values = Arr::extract($post, [
                    'field_value'
                ]);
                $values       = Arr::merge($values, $field_values);
            }
            $validator = $this->edit_model->validate_editfield($values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->editfield($uid, $post);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_field'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/field");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_field')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details);
        $this->template->title      = SITENAME . " | " . __('manage_field');
        $this->template->page_title = SITENAME . " | " . __('manage_field');
        $this->template->content    = $view;
    }
    public function action_taxi()
    {
        $user_createdby  = $this->user_createdby;
        $usertype        = $this->usertype;
        $company_id      = $this->company_id;
        $country_id      = $this->country_id;
        $state_id        = $this->state_id;
        $city_id         = $this->city_id;
		
        $add_model       = Model::factory('add');
        $edit_model      = Model::factory('edit');
        $id             = $this->request->param('id');
        $taxi_details = $this->edit_model->managetaxi_details($id);
        if (count($taxi_details) == 0) {
            $this->request->redirect("manage/taxi");
        }
        $tmid = $this->edit_model->check_taxicompanyid($id);
        if (($usertype == 'C')) {
            if ($company_id != $tmid['taxi_company']) {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else if (($usertype == 'M')) {
            if (($company_id != $tmid['taxi_company']) || ($state_id != $tmid['taxi_state']) || ($city_id != $tmid['taxi_city']) || ($country_id != $tmid['taxi_country'])) {
                $this->urlredirect->redirect('manager/dashboard');
            }
        }
        $signup_submit       = arr::get($_REQUEST, 'submit_edittaxi');
        $errors              = [];
        $post_values         = [];
        $model_details       = $this->add_model->model_details_new();
        $country_details     = $this->add_model->country_details();
        $city_details        = $this->add_model->city_details();
        $state_details       = $this->add_model->state_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        //print_r($city_details);
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
			$post_values   = Arr::map('trim', $this->request->post());
            $comny_id         = $_POST['company_name'];
            $modelid          = $_POST['taxi_model'];
            $check_fare_exist = $this->add_model->check_fare_exist($comny_id, $modelid);
            /*if ($check_fare_exist == 0) {
                Message::error(__('fare_not_avaliable'));
                if ($usertype == 'C') {
                    $this->request->redirect("manage/fare");
                } else {
                    $this->request->redirect("manage/model");
                }
            } */ 
            $taxi_old_img = $_POST['taxi_old_img'];
            $validator    = $this->edit_model->validate_edittaxi($post_values, $id);
            if ($validator->check()) {
				try {
					if (!empty($_FILES['taxi_image']['name'])) {
						/* image */
						if (file_exists(DOCROOT . TAXI_IMG_IMGPATH . $taxi_old_img)) {
							unlink(DOCROOT . TAXI_IMG_IMGPATH . $taxi_old_img);
						}
						if (file_exists(DOCROOT . TAXI_IMG_IMGPATH . "tmb32_" . $taxi_old_img)) {
							unlink(DOCROOT . TAXI_IMG_IMGPATH . "tmb32_" . $taxi_old_img);
						}
						if (file_exists(DOCROOT . TAXI_IMG_IMGPATH . "tmb100_" . $taxi_old_img)) {
							unlink(DOCROOT . TAXI_IMG_IMGPATH . "tmb100_" . $taxi_old_img);
						}
						$image_name = uniqid() . $_FILES['taxi_image']['name'];
						$image_type = explode('.', $image_name);
						$image_type = end($image_type);
						$image_name = url::title($image_name) . '.' . $image_type;
						$filename   = Upload::save($_FILES['taxi_image'], $image_name, DOCROOT . TAXI_IMG_IMGPATH);
						//chmod($filename,'0777');
						//Image resize and crop for thumb image
						$logo_image = Image::factory($filename);
						$path1      = DOCROOT . TAXI_IMG_IMGPATH;
						$path       = $image_name;
						Commonfunction::taxiimageresize($logo_image, TAXI_IMG_WIDTH, TAXI_IMG_HEIGHT, $path1, $image_name, 90);
						/**** Taxi APP THU100 ***/
						$tmb100_image_name = 'tmb100_' . $image_name;
						Commonfunction::taxiimageresize($logo_image, TAXI_APP_THMB100_IMG_WIDTH, TAXI_APP_THMB100_IMG_HEIGHT, $path1, $tmb100_image_name, 90);
						/**** TAxi APP THUM50 ***/
						$tmb32_image_name = 'tmb32_' . $image_name;
						Commonfunction::taxiimageresize($logo_image, TAXI_APP_THMB32_IMG_WIDTH, TAXI_APP_THMB32_IMG_HEIGHT, $path1, $tmb32_image_name, 90);
						if ($image_type == 'jpeg' || $image_type == 'jpg') {
							$base_image   = imagecreatefromjpeg($path1 . $tmb32_image_name);
							$width        = 32;
							$height       = 12;
							$top_image    = imagecreatefrompng(URL_BASE . "public/images/view.png");
							$merged_image = $path1 . $tmb32_image_name;
							imagesavealpha($top_image, true);
							imagealphablending($top_image, true);
							imagecopy($base_image, $top_image, 0, 23, 0, 0, $width, $height);
							imagejpeg($base_image, $merged_image);
						}
						if ($image_type == 'png') {
							$base_image   = imagecreatefrompng($path1 . $tmb32_image_name);
							$width        = 32;
							$height       = 12;
							$top_image    = imagecreatefrompng(URL_BASE . "public/images/view.png");
							$merged_image = $path1 . $tmb32_image_name;
							imagesavealpha($top_image, true);
							imagealphablending($top_image, true);
							imagecopy($base_image, $top_image, 0, 23, 0, 0, $width, $height);
							imagepng($base_image, $merged_image);
						}
						
						
						
						$status = $this->edit_model->edittaxi_image($path, $id);
					}
					
					/** QR CODE GENERATION **/
                        $PNG_TEMP_DIR = DOCROOT . TAXI_IMG_IMGPATH.'/qrcode/';
                        include($_SERVER['DOCUMENT_ROOT'] . "/modules/phpqrcode/qrlib.php");
                        if (!file_exists($PNG_TEMP_DIR))
						mkdir($PNG_TEMP_DIR);
						$errorCorrectionLevel = 'L';
						if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], ['L','M','Q','H']))
							$errorCorrectionLevel = $_REQUEST['level'];    
							$matrixPointSize = 4;
						if (isset($_REQUEST['size']))
							$matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);
						$encodeString = md5($_POST['taxi_model'].'_'.$_POST['taxi_no']);	
						$filename = $PNG_TEMP_DIR.md5($encodeString.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
						QRcode::png($encodeString, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
						/** QR CODE GENERATION **/
						$status = $this->edit_model->edittaxi($post_values, $id, $_FILES,$encodeString,basename($filename));
						Message::success(__('sucessfull_updated_taxi'));
						$this->request->redirect("manage/taxi");
				} catch(exception $e) {
					$errors['taxi_image'] = "Not an image or invalid image";
				}
                 
            } else {
                $errors = $validator->errors('errors');                
            }
        }
		//echo "<pre>"; print_r($taxicompany_details);exit;
        $view                       = View::factory('admin/edit_taxi')->bind('validator', $validator)->bind('errors', $errors)->bind('additional_fields', $additional_fields)->bind('motor_details', $motor_details)->bind('taxi_details', $taxi_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('model_details', $model_details)->bind('country_details', $country_details)->bind('taxicompany_details', $taxicompany_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_taxi');
        $this->template->page_title = SITENAME . " | " . __('manage_taxi');
        $this->template->content    = $view;
    }
    public function action_package()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_editpackage');
        $errors          = [];
        $post_values     = [];
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->package_details($uid);
        if (count($Company_details) == 0) {
            $this->request->redirect("manage/package");
        }
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'package_name',
                'package_description',
                'no_of_taxi',
                'no_of_driver',
                'driver_tracking',
                'package_price',
                'days_expire'
            ]);
            $validator   = $this->edit_model->validate_editpackage($form_values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_package($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_added_package'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/package");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_package')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_package');
        $this->template->page_title = __('manage_package');
        $this->template->content    = $view;
    }
    public function action_country()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->country_detail($uid);
		if(count($Company_details)==0){
			Message::error(__('No data found'));
			$this->request->redirect('manage/country');
		}
        $signup_submit   = arr::get($_REQUEST, 'submit_editcountry');
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editcountry(arr::extract($post_values, [
                'country_name',
                'iso_country_code',
                'telephone_code',
                'currency_code',
                'currency_symbol'
            ]), $uid);
            if ($validator->check()) {
                $status = $this->edit_model->editcountry($uid, $post_values);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_country'));
                } else {
                    Message::error($status);
                }
                $this->request->redirect("manage/country");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_country')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details);
        $this->template->title      = SITENAME . " | " . __('edit_country');
        $this->template->page_title = SITENAME . " | " . __('edit_country');
        $this->template->content    = $view;
    }
    public function action_city()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $country_id           = $this->request->param('id');
		$state_id           = $this->request->param('method');
		$city_id           = $this->request->param('lparam');
		//echo $country_id.','.$state_id.','.$city_id;exit;
        $country_details = $this->edit_model->country_details_new();
        $state_details = $this->edit_model->state_details();
        $city_details = $this->edit_model->city_countrydetails($country_id,$state_id,$city_id);
		//echo '<pre>';print_r($city_details);exit;
		if(count($city_details)==0){
			Message::error(__('No data found'));
			$this->request->redirect('manage/city');
		}
        $signup_submit = arr::get($_REQUEST, 'submit_editcity');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editcity(arr::extract($post, [
              //  'country_name',
            //    'state_name',
                'city_name',
                'zipcode',
                'city_countryid',
            //    'city_model_fare'
            ]), $city_id);
            if ($validator->check()) {
                $status = $this->edit_model->editcity($city_id, $_POST);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_city'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/city");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file
        $view                       = View::factory(ADMINVIEW . 'edit_city')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details);
        $this->template->title      = SITENAME . " | " . __('manage_city');
        $this->template->page_title = SITENAME . " | " . __('manage_city');
        $this->template->content    = $view;
    }
    public function action_state()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $country_id         = $this->request->param('id');
		$state_id           = $this->request->param('method');
        $country_details = $this->edit_model->country_details_new();
        $state_details   = $this->edit_model->state_countrydetails($state_id,$country_id);
		if(count($state_details)==0){
			Message::error(__('No data found'));
			$this->request->redirect('manage/state');
		}
        $signup_submit   = arr::get($_REQUEST, 'submit_editstate');
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editstate(arr::extract($post_values, [
                'country_name',
                'state_name',
                'state_countryid'
            ]), $state_id);
            if ($validator->check()) {
                $status = $this->edit_model->editstate($state_id, $post_values);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_state'));
                } else {
                    Message::error($status);
                }
                $this->request->redirect("manage/state");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_state')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('state_details', $state_details);
        $this->template->title      = SITENAME . " | " . __('manage_state');
        $this->template->page_title = SITENAME . " | " . __('manage_state');
        $this->template->content    = $view;
    }
    public function action_manager()
    {
        $usertype   = $this->usertype;
        $company_id = $this->company_id;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_editmanager');
        $errors        = [];
        $post_values   = [];
        $uid           = $this->request->param('id');
        $cmid          = $this->edit_model->check_peoplecompanyid($uid);
		
		if ($usertype == 'C') {
            if (($company_id != $cmid[$uid]['company_id']) && ($cmid[$uid]['user_type'] != 'M')) {
                $this->urlredirect->redirect('company/dashboard');
            }
        }
        $all_companies_list = $this->edit_model->taxicompany_details();
        $Manager_details     = $this->edit_model->peoplecompany_details($uid);
        $country_details     = $this->edit_model->country_details_new();
        $state_details       = $this->edit_model->state_details();
        $city_details        = $this->edit_model->city_details();
        if (count($Manager_details) == 0) {
            $this->request->redirect("manage/manager");
        }
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                //'country',
              //  'state',
                'city',
                'company_name'
            ]);
            $validator   = $this->edit_model->validate_editmanager($form_values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_manager($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_manager'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/manager");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_manager')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('all_companies_list', $all_companies_list)->bind('state_details', $state_details)->bind('manager_details', $Manager_details[$uid])->bind('people_id', $uid);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_manager');
        $this->template->page_title = __('manage_manager');
        $this->template->content    = $view;
    }
    public function action_admin()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        $uid             = $this->request->param('id');
        $user_details    = $this->edit_model->moderator_details($uid);
		if(count($user_details)==0){
			Message::error(__('no_data'));
			$this->request->redirect("manage/admin");
		}
        $country_details = $this->edit_model->country_details();
		/**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_editadmin');
        $errors          = [];
        $post_values     = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post_values, [
                'firstname',
                'lastname',
                'email',
                'phone',
                'address',
                'country',
                'company_name'
            ]);
            $validator   = $this->edit_model->validate_editadmin($form_values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_admin($post_values, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_superadmin'));
                } else {
                    Message::error($status);
                }
                $this->request->redirect("manage/admin");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_admin')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('user_details', $user_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_superadmin');
        $this->template->page_title = __('manage_superadmin');
    }
    public function action_assigntaxi()
    {
        $usertype        = $this->usertype;
        $edit_model      = Model::factory('edit');
        $add_model       = Model::factory('add');
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_editassigntaxi');
        $errors          = [];
        $post_values     = [];
        $uid             = $this->request->param('id');
        $company_details = $this->edit_model->assigntaxi_details($uid);
        //redirect to list page if the assigned details not there
        if (count($company_details) == 0) {
            $this->request->redirect("manage/assigntaxi");
        }
        $country_details     = $this->add_model->country_details();
        $state_details       = $this->add_model->state_details();
        $city_details        = $this->add_model->city_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        $driver_details      = $this->add_model->driver_details();
        $taxi_details        = $this->add_model->taxi_details();
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'company_name',
                'country',
                'state',
                'city',
                'driver',
                'taxi',
                'startdate',
                'enddate'
            ]);
            //$file_values=Arr::extract($_FILES,array('photo'));
            //$values=Arr::merge($form_values,$file_values);
            $validator   = $this->edit_model->validate_editassigntaxi($form_values, $uid);
            if ($validator->check()) {
				
                //  $filename = Upload::save($_FILES['photo'],NULL, $_SERVER['DOCUMENT_ROOT'].'/public/uploads/users_image');
                $update = $this->edit_model->edit_assigntaxi($post, $uid);
                if ($update != 0) {
                    $mail              = "";
                    $replace_variables = [
                        REPLACE_LOGO => EMAILTEMPLATELOGO,
                        REPLACE_SITENAME => $this->app_name,
                        REPLACE_USERNAME => ucfirst($update[0]['name']),
                        REPLACE_TAXINO => $update[0]['taxi_no'],
                        REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                        REPLACE_SITEEMAIL => $this->siteemail,
                        REPLACE_SITEURL => URL_BASE,
                        REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                        REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                    ];
                    $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'assign_taxi.html', $replace_variables);
                    $to                = $update[0]['email'];
                    $from              = $this->siteemail;
                    $subject           = __('taxi_assigned_you');
                    $redirect          = "manage/assigntaxi";
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
                    //$mail=array("to" => $update[0]['email'],"from"=>$this->siteemail,"subject"=>"Taxi Assigned to you","message"=>$message);									
                    //$emailstatus=$this->email_send($mail,'smtp');								
                    Message::success(__('sucessfull_assign_taxi'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/assigntaxi");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_assigntaxi')->bind('validator', $validator)->bind('errors', $errors)->bind('country_details', $country_details)->bind('city_details', $city_details)->bind('state_details', $state_details)->bind('taxicompany_details', $taxicompany_details)->bind('driver_details', $driver_details)->bind('taxi_details', $taxi_details)->bind('postvalue', $post_values)->bind('company_details', $company_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_assigned_taxi');
        $this->template->page_title = __('manage_assigned_taxi');
        $this->template->content    = $view;
    }
    public function action_unavailability()
    {
        $user_createdby      = $this->user_createdby;
        $usertype            = $this->usertype;
        $uid                 = $this->request->param('id');
        $view_controller     = Model::factory('edit');
        $post_values         = [];
        $errors              = [];
        $unavailable_details = $view_controller->unavailability_details($uid);
        $signup_submit       = arr::get($_REQUEST, 'submit_addleave');
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $view_controller->validate_unavailabledriver(arr::extract($post, [
                'reason',
                'startdate',
                'enddate',
                'driver_id',
                'taxi_id'
            ]), $uid);
            if ($validator->check()) {
                $update = $view_controller->edit_unavailabledriver($post, $uid);
                Message::success(__('profile_updated_successfully'));
                $this->request->redirect("manage/unavailability");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_unavailability')->bind('pag_data', $pag_data)->bind('validator', $validator)->bind('errors', $errors)->bind('unavailable_details', $unavailable_details)->bind('Offset', $offset)->bind('postvalue', $post_values);
        $this->page_title           = __('mark_unavailable');
        $this->template->title      = SITENAME . " | " . __('mark_unavailable');
        $this->template->page_title = __('mark_unavailable');
        $this->template->content    = $view;
    }
    public function action_getunavilabledriverlist()
    {
        $manage_model  = Model::factory('edit');
        $output        = '';
        $driver_id     = arr::get($_REQUEST, 'driver_id');
        $taxi_id       = arr::get($_REQUEST, 'taxi_id');
        $page_title    = __('unavailability');
        $page_no       = arr::get($_REQUEST, 'page');
        $count_details = $manage_model->getunavailabledriverlist($driver_id, $taxi_id);
        if ($page_no)
            $offset = REC_PER_PAGE * ($page_no - 1);
        $pag_data          = Pagination::factory([
            'current_page' => [
                'source' => 'query_string',
                'key' => 'page'
            ],
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_details,
            'view' => 'pagination/punceal'
        ]);
        $getdriver_details = $manage_model->get_unavailabledriverlist($driver_id, $taxi_id, $offset, REC_PER_PAGE);
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
    // Edit manu details
    public function action_menu()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        $mid           = $this->request->param('id');
        $model_details = $this->edit_model->get_menu($mid);
        if (count($model_details) == 0) {
            $this->request->redirect("manage/menu");
        }
        $signup_submit = arr::get($_REQUEST, 'submit_editmenu');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editmenu(arr::extract($post, [
                'menu_name',
                'slug'
            ]), $mid);
            if ($validator->check()) {
                /*$menu_name_exits = $this->edit_model->menu_name_exits($mid, $_POST);
                if ($menu_name_exits == 1) {
                    Message::error(__('menu_name_exits'));
                    $this->request->redirect("manage/menu");
                }*/
                // $status = $this->edit_model->update_menu($mid,$_POST,$str_convertoUrl_val);
                $status = $this->edit_model->update_menu($mid, $_POST);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_menu'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/menu");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        
        //send data to view file 
        $view                       = View::factory('admin/edit_menu')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('model_details', $model_details);
        $this->template->title      = SITENAME . " | " . __('edit_menu');
        $this->template->page_title = SITENAME . " | " . __('edit_menu');
        $this->template->content    = $view;
    }
    // Edit mile details
    public function action_mile()
    {
        $usertype = $this->usertype;
        if (($usertype != 'A') && ($usertype != 'S')) {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        $mid           = $this->request->param('id');
        $model_details = $this->edit_model->get_mile($mid);
        $signup_submit = arr::get($_REQUEST, 'submit_editmile');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editmile(arr::extract($post, [
                'mile'
            ]), $mid);
            if ($validator->check()) {
                $mile_name_exits = $this->edit_model->mile_name_exits($mid, $_POST);
                if ($mile_name_exits == 1) {
                    Message::error(__('mile_name_exits'));
                    $this->request->redirect("manage/mile");
                }
                $status = $this->edit_model->update_mile($mid, $_POST);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_mile'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/mile");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory('admin/edit_mile')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('model_details', $model_details);
        $this->template->title      = SITENAME . " | " . __('edit_mile');
        $this->template->page_title = SITENAME . " | " . __('edit_mile');
        $this->template->content    = $view;
    }
	/*
	 * Edit SMS Templates
	*/
    public function action_sms_templates()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        $sms_id        = $this->request->param('id');
        $sms_template  = $this->edit_model->sms_template($sms_id);
        $signup_submit = arr::get($_REQUEST, 'submit_edit_template');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_edit_template(arr::extract($post_values, [
                'sms_description'
            ]), $sms_id);
            if ($validator->check()) {
                $status = $this->edit_model->edittemplate($sms_id, $post_values);
                if ($status == 1) {
                    Message::success(__('sucessfull_modified_sms_message'));
                } else {
                    Message::error($status);
                }
                $this->request->redirect("admin/sms_template");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_smstemplate')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('sms_template', $sms_template);
        $this->template->title      = __('edit_sms_template');
        $this->template->page_title = __('edit_sms_template');
        $this->template->content    = $view;
    }
	
	public function action_email_templates()
    {
		$email_id        = $this->request->param('id');
		$englishcontent  = '';
		$arabiccontent   = '';
		
		if(file_exists('public/emailtemplate/'.$email_id.'.html')) {
			$englishcontent = htmlentities(file_get_contents(URL_BASE.'public/emailtemplate/'.$email_id.'.html'));
		}
		if(file_exists('public/emailtemplate/ar/'.$email_id.'-ar.html')) {
			$arabiccontent  = htmlentities(file_get_contents(URL_BASE.'public/emailtemplate/ar/'.$email_id.'-ar.html'));
		}
		
		$replace = ['-','_'];
		$title = ucwords(str_replace($replace,' ',$email_id));
        $usertype = $this->usertype;
        if ($usertype != 'A') {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        
        $signup_submit = arr::get($_REQUEST, 'submit_edit_template');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values        = Arr::map('trim', $this->request->post());
			$validator   = $this->edit_model->validate_edit_emailtemplate(arr::extract($post_values, [
                'english_content'
            ]), $email_id);
            if ($validator->check()) {
				@chmod(DOCROOT.'public/emailtemplate/', 0777);
				@chmod(DOCROOT.'public/emailtemplate/'.$email_id.'.html', 0777);
				@chmod(DOCROOT.'public/emailtemplate/ar/'.$email_id.'.html', 0777);
				if(file_exists('public/emailtemplate/'.$email_id.'.html')) {
					file_put_contents('public/emailtemplate/'.$email_id.'.html', $post_values['english_content']);
				}
				if(file_exists('public/emailtemplate/ar/'.$email_id.'-ar.html')) {
					file_put_contents('public/emailtemplate/ar/'.$email_id.'-ar.html', $post_values['arabic_content']);
				}
                Message::success(__('sucessfull_modified_email_message'));                
                $this->request->redirect("admin/email_template");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_emailtemplate')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('email_title', $title)->bind('english_email_template', $englishcontent)->bind('arabic_email_template', $arabiccontent);
        $this->template->title      = __('edit_email_template');
        $this->template->page_title = __('edit_email_template');
        $this->template->content    = $view;
    }
	
    public function action_banner()
    {
        $usertype = $this->usertype;
        if ($usertype != 'C') {
            $this->request->redirect("company/login");
        }
        $edit_model     = Model::factory('edit');
        $uid            = $this->request->param('id');
        $banner_details = $this->edit_model->bannerdetails($uid);
        $signup_submit  = arr::get($_REQUEST, 'submit_banner');
        $errors         = [];
        $post_values    = [];
        if ($signup_submit && Validation::factory($_POST)) {
            //print_r($_POST); exit;
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $add         = Model::factory('add');
            $validator   = $add->validate_addbanner(arr::extract($post, [
                'banner_image',
                'tags',
                'image_tag'
            ]), $_FILES);
            if ($validator->check()) {
                $image_updated_status = '';
                $image_id             = $_POST['image_id'];
                if (!empty($_FILES['banner_image']['name'])) {
                    /* image1 */
                    $image_name1 = uniqid() . $_FILES['banner_image']['name'];
                    $image_type  = explode('.', $image_name1);
                    $image_type  = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename    = Upload::save($_FILES['banner_image'], $image_name1, DOCROOT . BANNER_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image1 = Image::factory($filename);
                    $path11      = DOCROOT . BANNER_IMGPATH;
                    $path1       = $image_name1;
                    Commonfunction::imageresize($logo_image1, BANNER_SLIDER_WIDTH, BANNER_SLIDER_HEIGHT, $path11, $image_name1, 90);
                    $image_updated_status = $this->edit_model->update_banner_image($path1, $image_id);
                }
                $tags                 = $_POST['tags'];
                $image_tag            = $_POST['image_tag'];
                $image_updated_status = $this->edit_model->update_banner_details($tags, $image_tag, $image_id);
                //if($image_updated_status == 1)
                if ($image_updated_status == 0) {
                    Message::success(__('banner_updated_successfully'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/banner");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        //send data to view file 
        $view                       = View::factory(ADMINVIEW . 'edit_banner')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('banner_details', $banner_details);
        $this->template->title      = SITENAME . " | " . __('manage_banner');
        $this->template->page_title = SITENAME . " | " . __('manage_banner');
        $this->template->content    = $view;
    }
	/* Removed On March-05-2016
    public function action_faq()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        /**To get the form submit button name/
        $signup_submit = arr::get($_REQUEST, 'submit_editfaq');
        $errors        = array();
        $post_values   = array();
        $fid           = $this->request->param('id');
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editfaq(arr::extract($post, array(
                'faq_title',
                'faq_details'
            )), $fid);
            //print_r($validator);exit;
            if ($validator->check()) {
                $signup_id = $this->edit_model->editfaq($post, $fid);
                if ($signup_id == 1) {
                    Message::success(__('sucessfull_added_faq'));
                    $this->request->redirect("manage/faq");
                } else {
                    Message::error(__('not_updated'));
                    $this->request->redirect("manage/faq");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $faq_details                = $this->edit_model->get_faqdetails($fid);
        $view                       = View::factory('admin/edit_faq')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('faq_details', $faq_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_faq');
        $this->template->page_title = __('edit_faq');
        $this->template->content    = $view;
    }*/
    public function action_upgrade_company_package()
    {
        $company_id      = $_REQUEST['cid'];
        $add_model       = Model::factory('add');
        $edit_model      = Model::factory('edit');
        $common_model    = Model::factory('commonmodel');
        $package_details = $this->add_model->package_details();
        if ($_POST) {
            $upgrade_packid       = $_POST['pack'];
            $get_packagedetails   = $this->add_model->payment_packagedetails($upgrade_packid);
            $get_company_timezone = $this->edit_model->findcompany_timezone($company_id);
            $package_name         = $get_packagedetails[0]['package_name'];
            $no_of_taxi           = $get_packagedetails[0]['no_of_taxi'];
            $no_of_driver         = $get_packagedetails[0]['no_of_driver'];
            $days                 = $get_packagedetails[0]['days_expire'];
            $amount               = $get_packagedetails[0]['package_price'];
            $package_type         = $get_packagedetails[0]['package_type'];
            if ($upgrade_packid == 5) {
                ($_POST['expire_days'] != '') ? $days = $_POST['expire_days'] : $days;
            }
            $userid       = $this->user_createdby;
            $current_time = convert_timezone('now', $get_company_timezone);
            // Convert Time
            if ($days > 0) {
                $expirydate = Commonfunction::getExpiryTimeStamp($current_time, $days);
            } else {
                $expirydate = $current_time;
            }
            $insert_array                   = [
                'upgrade_companyid' => $company_id,
                'upgrade_packageid' => $upgrade_packid,
                'upgrade_packagename' => $package_name,
                'upgrade_no_taxi' => $no_of_taxi,
                'upgrade_no_driver' => $no_of_driver,
                'upgrade_expirydate' => $expirydate,
                'upgrade_ack' => 'Success',
                'upgrade_capture' => '1',
                'upgrade_amount' => $amount,
                'upgrade_type' => 'D',
                'upgrade_by' => $userid,
                'check_expirydate' => $expirydate,
                'check_package_type' => $package_type
            ];
            $insert_upgrade_company_package = $common_model->insert(PACKAGE_REPORT, $insert_array);
            if ($insert_upgrade_company_package) {
                Message::success(__('company_package_upgrade_success'));
                $this->request->redirect("admin/saas_report");
            } else {
                Message::error(__('not_updated'));
                $this->request->redirect("admin/saas_report");
            }
        }
        $view                       = View::factory('admin/upgrade_company_package')->bind('package_details', $package_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('upgrade_package');
        $this->template->page_title = __('upgrade_package');
        $this->template->content    = $view;
    }
    public function action_promocode()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        $id                = $this->request->param('id');
        $edit_model        = Model::factory('edit');
        $manage            = Model::factory('manage');
        /**To get the form submit button name**/
        $signup_submit     = arr::get($_REQUEST, 'submit_addmodel');
        $errors            = [];
        $post_values       = [];
        $promocode_details = $this->edit_model->get_promocodedetails($id);
        if (count($promocode_details) == 0) {
            $this->request->redirect("manage/promocode");
        }
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values    = $_POST;
            $post           = Arr::map('trim', $this->request->post());
            $validator      = $this->edit_model->validate_editpromocode(arr::extract($post, [
                'promo_limit'
            ]), $id);
            //$promo_discount = $post['promo_discount'];
            $promo_code     = $post['promocode'];
            $start_date     = $post['start_date'];
            $expire_date    = $post['expire_date'];
            $promo_limit    = $post['promo_limit'];

            /* Sasidharan apr 15 - 2022 */
            $corporate_promocode = (isset($_POST['corporate_promocode']) && !empty($_POST['corporate_promocode'])) ? $_POST['corporate_promocode'] : 0;

            if ($validator->check()) {
                //$promo_code = $this->edit_model->get_promocode_byid($id);
                if (isset($_POST['resend']) && $corporate_promocode == 0) {
                    $promocode_users = $this->edit_model->get_promocode_users($promo_code);
                    //echo '<pre>'; print_r($promocode_users);exit;
                    foreach ($promocode_users as $val) {
                        $content           = __('promocode_details_changed');
                        $subjects          = 'Promo code';
                        $name              = $val['name'];
                        $email             = $val['email'];
                        $promocode_msg     = __('promocode_msg');
                        //$code              = str_replace('##DISCOUNT##', $promo_discount, $promocode_msg);
                        $code              = str_replace('##PROMOCODE##', $promo_code, $code);
                        $replace_variables = [
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => $name,
                            REPLACE_MESSAGE => str_replace('\n', '', $content),
                            REPLACE_STARTDATE => $start_date,
                            REPLACE_EXPIREDATE => $expire_date,
                            REPLACE_USAGELIMIT => $promo_limit,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_PROMOCODE => $code,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        ];
						$message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'promocode_message.html', $replace_variables);
                        //print_r($message);
                        //exit;
                        $to                = $email;
                        $from              = $this->siteemail;
                        $subject           = $subjects . " - " . $this->app_name;
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
                }
                $signup_id = $this->edit_model->editpromocode($post, $promo_code);
                if ($signup_id == 1) {		
                    //print_r($errors);exit;
                    Message::success(__('sucessfull_promocode_update'));
                    $this->request->redirect("manage/promocode");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }

        /* Sasidharan Nov 15 2022 */
        $corporateModal   = Model::factory('corporate');
        $corporateGroups = $corporateModal->get_all_corporate_groups();

        /* Sasidharan Nov 15 2022 bind corporateGroups */
        $view                       = View::factory('admin/edit_promocode')
        //->bind('validator', $validator)
            ->bind('errors', $errors)->bind('promocode_details', $promocode_details)->bind('postvalue', $post_values)->bind("corporateGroups", $corporateGroups);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_promocode');
        $this->template->page_title = __('edit_promocode');
        $this->template->content    = $view;
    }
	
	// Accounts Type Module
	// Edit Accounts Type details
    public function action_account_type()
    {
        $usertype = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        $edit_model    = Model::factory('edit');
        $mid           = $this->request->param('id');
		$model_details = $this->edit_model->get_account_type($mid);
		if (count($model_details) == 0) {
            $this->request->redirect("manage/account_type");
        }
        $signup_submit = arr::get($_REQUEST, 'submit_editaccount_type');
        $errors        = [];
        $post_values   = [];
        if ($signup_submit && Validation::factory($_POST)) {
			
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $validator   = $this->edit_model->validate_editaccounttype(arr::extract($post, [
                'account_type',
				'account_type_arabic'
            ]), $mid);
			
            if ($validator->check()) {
                $status = $this->edit_model->update_account_type($mid, $_POST);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_account_type'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/account_type");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        
        //send data to view file 
        $view                       = View::factory('admin/edit_account_type')->bind('errors', $errors)->bind('postvalue', $post_values)->bind('model_details', $model_details);
        $this->template->title      = SITENAME . " | " . __('edit_account_type');
        $this->template->page_title =  __('edit_account_type');
        $this->template->content    = $view;
    }
	
	
	// Accounts Type Module
	
	/** COUPON CODE **/
	public function action_coupon_package()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_editcoupon_package');
        $errors          = [];
        $post_values     = [];
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->coupon_package_details($uid);
        if (count($Company_details) == 0) {
            $this->request->redirect("manage/coupon_package");
        }
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
               'coupon_package_name',
                'coupon_package_description',
                'coupon_package_name_ar',
                'coupon_package_description_ar',
                'corporate_commission',
                'passenger_commission'
            ]);
            $validator   = $this->edit_model->validate_editcoupon_package($form_values, $uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_coupon_package($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_added_coupon_package'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/coupon_package");
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_coupon_package')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_coupon_package');
        $this->template->page_title = __('manage_coupon_package');
        $this->template->content    = $view;
    }
     public function action_corporate()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
       
        $country_id     = $this->country_id;
        $state_id       = $this->state_id;
        $city_id        = $this->city_id;
        
        /**To get the form submit button name**/
        $signup_submit  = arr::get($_REQUEST, 'submit_corporate');
        $errors         = [];
        $post_values    = [];
        $uid            = $this->request->param('id');
        
        $pmid           = $this->view_model->check_peoplecompanyid($uid);
        //echo '<pre>'; print_r($pmid); echo '</pre>';exit;
        if (($usertype == 'C')) {
            if (($company_id != $pmid['company_id']) || ($pmid['user_type'] != 'D')) {
                $this->urlredirect->redirect('company/dashboard');
            }
        } else if (($usertype == 'M')) {
			
            if (($company_id != $pmid['company_id']) || ($state_id != $pmid['login_state']) || ($city_id != $pmid['login_city']) || ($country_id != $pmid['login_country']) || ($pmid['user_type'] != 'D')) {
                $this->urlredirect->redirect('manager/dashboard');
            }
        }
        $Company_details = $this->edit_model->corporate_details($uid);
        if (count($Company_details) == 0) {
            $this->urlredirect->redirect('manage/corporate');
        }
        //$corporate_info_details = $this->edit_model->corporate_info_details($uid);
        $country_details     = $this->add_model->country_details();
        $city_details        = $this->add_model->city_details();
        $state_details       = $this->add_model->state_details();
        $taxicompany_details = $this->add_model->taxicompany_details();
        //echo "<pre>";print_r($city_details);exit;
        if ($signup_submit && Validation::factory($_POST, $_FILES)) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'firstname',
                'lastname',
                'email',
                'password',
                'repassword',
               
                'phone',
                'address',
        
            ]);
            $file_values = Arr::extract($_FILES, [
                'profile_picture'
            ]);
            $values      = Arr::merge($form_values, $file_values);
            $validator   = $this->edit_model->validate_editcorporate($values, $uid);
            if ($validator->check()) {
                $imgstatus = 0;
                if (!empty($_FILES['profile_picture']['name'])) {
                    $image_name       = uniqid() . $_FILES['profile_picture']['name'];
                    $thumb_image_name = 'thumb_' . $image_name;
                    $image_type       = explode('.', $image_name);
                    $image_type       = end($image_type);
                    //$image_name=url::title($image_name).'.'.$image_type;
                    $filename         = Upload::save($_FILES['profile_picture'], $image_name, DOCROOT . SITE_CORPORATE_IMGPATH);
                    //Image resize and crop for thumb image
                    $logo_image       = Image::factory($filename);
                    $path11           = DOCROOT . SITE_CORPORATE_IMGPATH;
                    $path1            = $image_name;
                    Commonfunction::imageresize($logo_image, PASS_IMG_WIDTH, PASS_IMG_HEIGHT, $path11, $image_name, 90);
                    $path12 = $thumb_image_name;
                    Commonfunction::imageresize($logo_image, PASS_THUMBIMG_WIDTH, PASS_THUMBIMG_HEIGHT, $path11, $thumb_image_name, 90);
                    $imgstatus = $this->edit_model->update_corporateimage($path1, $post['id']);
                }
                //  $filename = Upload::save($_FILES['photo'],NULL, $_SERVER['DOCUMENT_ROOT'].'/public/uploads/users_image');
                $status = $this->edit_model->edit_corporate($post, $uid);
                if ($status == 1 || $imgstatus == 1) {
                    Message::success(__('sucessfull_updated_corporate'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/corporate");
            } else {
                $errors = $validator->errors('errors');
                //print_r($errors);exit;
            }
        }
        $view                       = View::factory('admin/edit_corporate')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('country_details', $country_details)->bind('state_details', $state_details)->bind('city_details', $city_details)->bind('taxicompany_details', $taxicompany_details)->bind('corporate_info_details', $corporate_info_details)->bind('company_details', $Company_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('manage_corporate');
        $this->template->page_title = __('manage_corporate');
        $this->template->content    = $view;
    }
    
    
	/** COUPON CODE **/

    public function action_ratings()
    {
        $usertype   = $this->usertype;
        $company_id = $this->company_id;
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_editratings');
        $errors        = [];
        $post_values   = [];
        $uid           = $this->request->param('id');
        $ratings_details = $this->edit_model->getratingsdetails($uid);
      
        if ($signup_submit && Validation::factory($_POST)) {

            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());
            $form_values = Arr::extract($post, [
                'ratings_no',
                'ratings_title',
                'ratings_tags'
            ]);
            $validator   = $this->edit_model->validate_editratings($form_values,$uid);
            if ($validator->check()) {
                $status = $this->edit_model->edit_ratings($post, $uid);
                if ($status == 1) {
                    Message::success(__('sucessfull_updated_ratings_information'));
                } else {
                    Message::error(__('not_updated'));
                }
                $this->request->redirect("manage/ratings");
            } else {
              //  echo "string1";exit();
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_ratings')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('ratings_details',$ratings_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_ratings');
        $this->template->page_title = __('edit_ratings');
        $this->template->content    = $view;
    }

    public function action_testimonial(){

        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'S') {
            $this->request->redirect("admin/login");
        }

        $uid           = $this->request->param('id');
        $testimonial_details = $this->edit_model->get_testimonial_details($uid);
        
        /**To get the form submit button name**/
        $signup_submit = arr::get($_REQUEST, 'submit_addmotor');
        $errors        = [];
        $post_values   = [];
        if ($_POST) {
            $post_values = $_POST;
            $post        = Arr::map('trim', $this->request->post());

            $form_values = arr::extract($post, ['name','skype','description','description_arabic']);

            $file_values = Arr::extract($_FILES, ['image']);
            $values      = Arr::merge($form_values, $file_values);

            $validator   = $this->edit_model->validate_testimonial($values);
            if ($validator->check()) {
                if(!empty($_FILES['image']['name'])){

                    $web_image_name       = uniqid() . $_FILES['image']['name'];
                    $web_filename         = Upload::save($_FILES['image'], $web_image_name, DOCROOT.'public/uploads/testimonial/');
                    $web_image       = Image::factory($web_filename);
                    $web_path11           = DOCROOT .'public/uploads/testimonial/';                   
                    Commonfunction::imageresize($web_image,89,89, $web_path11, $web_image_name, 90);

                    $web_image_old = isset($_POST['web_image_old'])?$_POST['web_image_old']:'';
                    if($web_image_old && $web_image_old!=''){
                        $old_path = DOCROOT.'public/uploads/testimonial/'.$web_image_old;
                        if(file_exists($old_path)){
                            unlink($old_path);                            
                        }
                    }
                }else{
                    $web_image_name = '';
                }

                $signup_id = $this->edit_model->update_testimonial($post,$web_image_name);
                if ($signup_id == 1) {
                    Message::success('Successfully update testimonial');
                    $this->request->redirect("manage/testimonial");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_testimonial')->bind('validator', $validator)->bind('errors', $errors)->bind('post_values', $post_values)->bind('testimonial_details',$testimonial_details);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_testimonial');
        $this->template->page_title = __('edit_testimonial');
        $this->template->content    = $view;

    }
    
    // Customization
    public function action_zone()
    {
        $this->page_title = __('edit_zone');

        $user_createdby = $_SESSION['userid'];
        $edit_zone      = Model::factory('edit');
        $add_model     = Model::factory('add');
        $id              = $this->request->param( 'id' );

        $zone_detail = $edit_zone->zone_detail($id);
        //echo '<pre>'; print_r($zone_detail); exit();
        $zone_submit = arr::get($_REQUEST, 'submit_editzone');
        $errors        = [];
        $post_values   = [];

        if ($zone_submit && Validation::factory($_POST)) {

            $post_values = Arr::map('trim', $this->request->post());
            
            $values      = $post_values;
			$zone_id = $values['zone_id'];

			//echo '<pre>'; print_r($values); exit();
            $validator = $edit_zone->validate_editzone(arr::extract($values, [
                'zone_name',
                'source_polygon',
                'zone_icon',
                'source_polygon_drawn',
                'old_zone',
                'is_pickup',
                'is_drop'
            ]),$zone_id);
            if ($validator->check()) {
              // echo '<pre>'; print_r($zone_detail); exit();
               if(!empty($values['source_polygon']))
                {
                    $polygon = str_replace(':',',',$values['source_polygon']);
                    
                    $source_polygon = explode(',',$polygon);
                    $j = $k =0;
                    for ($i=0; $i < count($source_polygon)-1 && $k < count($source_polygon)-1; $i++) { 
                           $source_coordinates[$j][0] = $source_polygon[$k++];
                           $source_coordinates[$j][0] = (double)trim($source_coordinates[$j][0],'( ');
                           $source_coordinates[$j][1] = $source_polygon[$k];
                           $source_coordinates[$j][1] = (double)trim($source_coordinates[$j][1],' )');
                           
                           $temp = $source_coordinates[$j][0];
                           $source_coordinates[$j][0] = $source_coordinates[$j][1];
                           $source_coordinates[$j][1] = $temp;
                            $k++;$j++;
                    }
                   // echo '<pre>'; print_r($source_coordinates); exit();
                }
               else if(!empty($values['source_polygon_drawn']))
                {
                    $source_polygon = explode(',',$values['source_polygon_drawn']);
                    $j = $k =0;
                    for ($i=0; $i <= count($source_polygon)-1 && $k <= count($source_polygon)-1; $i++) { 
                           $source_coordinates[$j][0] = $source_polygon[$k++];
                           $source_coordinates[$j][0] = (double)trim($source_coordinates[$j][0],'( ');
                           $source_coordinates[$j][1] = $source_polygon[$k];
                           $source_coordinates[$j][1] = (double)trim($source_coordinates[$j][1],' )');
                           
                           $temp = $source_coordinates[$j][0];
                           $source_coordinates[$j][0] = $source_coordinates[$j][1];
                           $source_coordinates[$j][1] = $temp;
                            $k++;$j++;
                    }
                }
                else
                {
                    $source_polygon = explode(',',$values['source_polygon1']);
                    $j = $k =0;
                    for ($i=0; $i <= count($source_polygon)-1 && $k <= count($source_polygon)-1; $i++) { 
                           $source_coordinates[$j][0] = $source_polygon[$k++];
                           $source_coordinates[$j][0] = (double)trim($source_coordinates[$j][0],'(');
                           $source_coordinates[$j][1] = $source_polygon[$k];
                           $source_coordinates[$j][1] = (double)trim($source_coordinates[$j][1],')');
                           $k++;$j++;
                       
                    }
                }

				
                
             
                 $signup_id = $edit_zone->edit_zone($post_values,$zone_id,$source_coordinates);
                if ($signup_id == 1) {
                    Message::success(__('successful_edit_zone'));
                    $this->request->redirect("manage/zone");
                }
            } else {
                $errors = $validator->errors('errors');
              // echo '<pre>'; print_r($errors); exit();
            }
        }
        $view   = View::factory('admin/edit_zone')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('zone_detail',$zone_detail);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_zone');
        $this->template->page_title = __('edit_zone');
        $this->template->content    = $view;
    }
    
    //03 Feb 2020
    public function action_surge_pricing()
    {
        $usertype = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $edit_model      = Model::factory('edit');
        /**To get the form submit button name**/
        $signup_submit   = arr::get($_REQUEST, 'submit_editcoupon_package');
        $errors          = [];
        $post_values     = [];
        $uid             = $this->request->param('id');
        $Company_details = $this->edit_model->surge_pricing_details($uid);
       
        if ($signup_submit && Validation::factory($_POST)) {
             $post_values = $_POST;
             
             $post        = Arr::map('trim', $this->request->post());
             //echo "<pre>";print_r($post);
             $form_values = Arr::extract($post, [
                 'package',
                 'book_later_time_interval',
                 'book_later_fare',
                 'book_later_display_fare'
             ]);
             //$validator   = $this->edit_model->validate_editcoupon_package($form_values, $uid);
             if (true) {
                 $status = $this->edit_model->update_surge_pricing($uid, $post);
                 if ($status == 1) {
                     Message::success(__('Successfully updated surge pricing'));
                 } else {
                     Message::error(__('not_updated'));
                 }
                 $this->request->redirect("manage/surge_pricing");
             } else {
                 $errors = $validator->errors('errors');
             }
         }
        
        //26 feb 2021
        //$view                       = View::factory('admin/edit_surge_pricing')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details)->bind('id',$uid);

        $view                       = View::factory('admin/edit_surge_pricing_new')->bind('validator', $validator)->bind('errors', $errors)->bind('postvalue', $post_values)->bind('company_details', $Company_details)->bind('id',$uid);
        //26 feb 2021
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_surge_price');
        $this->template->page_title = __('edit_surge_price');
        $this->template->content    = $view;
    }
    // Customization

    // Added By Sasi(feb 26 2020)

    public function action_time_interval()
    {
        $bool=false;
        $bool2=true;

        $uid   = $_POST['id'];

        $monday_from=$_POST['monday_from'];
        $monday_to=$_POST['monday_to'];
        $package=$_POST['package'];
        $default=$_POST['default'];


        global $final_array;
        $final_array = [];
        $errors=[];
        $package_error = [];


        $arr = [];
        $index = 0;
        foreach ($package as $key => $value) {
            if($value == ""){
                array_push($package_error, ['message'=>"Package must not be empty
",'status'=>0,"id"=>$index]);
            } else if(!array_key_exists($value, $arr)){
               $arr[$value] = $value;
            } else {
                array_push($package_error, ['message'=>"Duplicate Values Are Not Alloewd",'status'=>0,"id"=>$index]);
            }
            $index++;
        }

        function pushValuesIntoArray($from,$to,$default)
        {
            $values=[];
            for($i=0;$i<count($from);$i++)
            {
                array_push($values,(object)["from"=>Commonfunction::convert_hours_to_seconds($from[$i]),"to"=>Commonfunction::convert_hours_to_seconds($to[$i]),'default'=>(int)$default[$i]]);
            }
            return $values;
        }

        function pushValuesIntoArray2($package)
        {
            $values=[];
            for($i=0;$i<count($package);$i++)
            {   
                if($i == 0){
                    $key = 1;
                } else{
                    $key = 0;
                }
                array_push($values,(object)["fare"=>(float)$package[$i],'default'=>(int)$key]);
            }
            return $values;
        }

        function condtions($from,$to,$arr_name)
        {
            $len = count($from);
            $success=[];
            $fail=0;

            if($len>1)
            {   
                for ($i=0; $i < $len ; $i++) 
                {   
                    if(!empty($from[$i]) && !empty($to[$i])){
                        if(strtotime($from[$i])>strtotime($to[$i])||strtotime($from[$i])==strtotime($to[$i]))   
                        {
                            array_push($success, ['message'=>"The To Time Should Be Greater Then From Time",'status'=>$fail,"id"=>$i]);
                        } else {
                            for ($j=1; $j < $len; $j++) 
                            {
                                if($i!=$j)
                                {
                                    if(strtotime($from[$j])==strtotime($from[$i])||strtotime($to[$j])==strtotime($to[$i])||strtotime($from[$j])>strtotime($to[$j])||strtotime($to[$i])==strtotime($from[$j])||strtotime($from[$i])==strtotime($to[$j]))
                                    {
                                        if(strtotime($from[$j])>strtotime($to[$j]))
                                        {
                                            // array_push($success, ['message'=>"The To Time Should be Greater Then From Time",'status'=>$fail,"id"=>$i]);
                                            // break;
                                            //return $success;
                                        }
                                        else
                                        {                                           
                                            array_push($success, ['message'=>"The Intervals is Matching With Previous One So Please Change The Time",'status'=>$fail,"id"=>$i]);
                                            break;
                                            //return $success;
                                        }
                                    }
                                    else
                                    {
                                        if(strtotime($from[$j])>strtotime($from[$i]) && strtotime($to[$j])<strtotime($from[$i]) || strtotime($from[$j])<strtotime($from[$i]) &&strtotime($to[$j])>strtotime($from[$i])||strtotime($from[$j])>strtotime($from[$i]) && strtotime($to[$j])<strtotime($from[$i])||strtotime($from[$j])<strtotime($to[$i])&&strtotime($to[$j])>strtotime($to[$i])||strtotime($from[$i])<strtotime($from[$j])&&strtotime($to[$j])<strtotime($to[$i])||strtotime($to[$i])==strtotime($from[$j])||strtotime($from[$j])>strtotime($from[$i])&&strtotime($to[$i])==strtotime($to[$j])||strtotime($from[$j])<strtotime($from[$i])&&strtotime($to[$i])==strtotime($to[$j])||strtotime($to[$i])==strtotime($from[$j]))
                                        {
                                            array_push($success, ['message'=>"Two Time Intervals Are Collide With Each Other So Please Change The Intervals",'status'=>$fail,"id"=>$i]);
                                            break;
                                            //return $success;
                                        }
                                    }
                                }
                            }
                        }
                    } else {
                        array_push($success, ['message'=>"Time Limit Must Not Be Empty",'status'=>$fail,"id"=>$i]);
                    }
                }
                return $success;
            }
            else
            {
                    if(!in_array('', $from) && !in_array('', $to))
                    {
                        if(strtotime($from[0])>strtotime($to[0])||strtotime($from[0])==strtotime($to[0]))
                        {
                            if(strtotime($from[0])==strtotime($to[0]))
                            {
                                array_push($success, ['message'=>"The To Time Should be Greater Then From Time ",'status'=>$fail,"id"=>0]);
                                return $success;
                            }
                            else
                            {
                                array_push($success, ['message'=>"The To Time Should be Greater Then From Time",'status'=>$fail,"id"=>0]);
                                return $success;
                            }
                        }
                    } else {
                        array_push($success, ['message'=>"Time Interval Must Not Be Empty",'status'=>$fail,"id"=>0]);
                    }
                return $success;
            }
            // }
        }

        function convert_12_hours_to_24_hours_time_format($from){
            $len = count($from);
            for ($j=0; $j < $len ; $j++) {
                if($from[$j] != "Select the interval"){
                    $temp = explode(":",$from[$j]);
                    if($temp[2] == "PM" && $from[$j] != "12:00:PM") {
                        $str = $temp[0].":".$temp[1];
                        $date = new DateTime($str);
                        $date->modify("+12 hours");
                        $from[$j] = $date->format("H:i");
                    } else {
                        if($from[$j] == "12:00:AM"){
                            $str = $temp[0].":".$temp[1];
                            $date = new DateTime($str);
                            $date->modify("+12 hours");
                            $from[$j] = $date->format("H:i");
                        } else {
                            $str = $temp[0].":".$temp[1];
                            $date = new DateTime($str);
                            $from[$j] = $date->format("H:i");
                        }
                    } 
                } else {
                    $from[$j] = "";
                }
            }
            return $from;
        }

        $monday_from = convert_12_hours_to_24_hours_time_format($monday_from);
        $monday_to = convert_12_hours_to_24_hours_time_format($monday_to);

        $mon = condtions($monday_from,$monday_to,"time_interval");

        // echo "<pre>";
        // print_r($monday_from);
        // print_r($monday_to);
        // print_r($mon);
        // exit;

        if(!is_array($mon)) {$mon=[];}

        array_push($errors, $mon,$package_error);

        foreach ($errors as $key => $value) 
        {
            if($bool2)
            {                     
                if(isset($value[0])&&array_key_exists('status', $value[0]))
                {
                    $bool=false;
                    $bool2=false;
                }
                else
                {
                    $bool=true;
                }
            }
        }

        if($bool)
        {
            $monFinal = pushValuesIntoArray($monday_from,$monday_to,$default);

            $package_arr = pushValuesIntoArray2($package);

            // echo "<pre>";
            // print_r($monday_from);
            // print_r($monday_to);
            // print_r($monFinal);
            // print_r($package_arr);
            //exit;

            $edit_model      = Model::factory('edit');
            $hours = $edit_model->edit_surge_pricing($monFinal,$package_arr,$uid);

            echo json_encode("success");
        }
        else
        {   
            // echo "<pre>";
            // print_r($monday_from);
            // print_r($monday_to);
            // exit;
            $responce=json_encode($errors);
            echo $responce; 
        }
        exit;
    }
    // Customization

    /* Sasidharan */
    public function action_corporate_promocode()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype != 'A' && $usertype != 'C') {
            $this->request->redirect("admin/login");
        }
        $id                = $this->request->param('id');
        $edit_model        = Model::factory('edit');
        $manage            = Model::factory('manage');
        /**To get the form submit button name**/
        $signup_submit     = arr::get($_REQUEST, 'submit_addmodel');
        $errors            = [];
        $post_values       = [];
        $promocode_details = $this->edit_model->get_corporate_promocodedetails($id);
        if (count($promocode_details) == 0) {
            $this->request->redirect("manage/promocode");
        }
        if ($signup_submit && Validation::factory($_POST)) {
            $post_values    = $_POST;
            $post           = Arr::map('trim', $this->request->post());
            $validator      = $this->edit_model->validate_editpromocode(arr::extract($post, [
                'promo_limit'
            ]), $id);
            //$promo_discount = $post['promo_discount'];
            $promo_code     = $post['promocode'];
            $start_date     = $post['start_date'];
            $expire_date    = $post['expire_date'];
            $promo_limit    = $post['promo_limit'];
            if ($validator->check()) {
                //$promo_code = $this->edit_model->get_promocode_byid($id);
                /*if (isset($_POST['resend'])) {
                    $promocode_users = $this->edit_model->get_promocode_users($promo_code);
                    //echo '<pre>'; print_r($promocode_users);exit;
                    foreach ($promocode_users as $val) {
                        $content           = __('promocode_details_changed');
                        $subjects          = 'Promo code';
                        $name              = $val['name'];
                        $email             = $val['email'];
                        $promocode_msg     = __('promocode_msg');
                        //$code              = str_replace('##DISCOUNT##', $promo_discount, $promocode_msg);
                        $code              = str_replace('##PROMOCODE##', $promo_code, $code);
                        $replace_variables = array(
                            REPLACE_LOGO => EMAILTEMPLATELOGO,
                            REPLACE_SITENAME => $this->app_name,
                            REPLACE_USERNAME => $name,
                            REPLACE_MESSAGE => str_replace('\n', '', $content),
                            REPLACE_STARTDATE => $start_date,
                            REPLACE_EXPIREDATE => $expire_date,
                            REPLACE_USAGELIMIT => $promo_limit,
                            REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                            REPLACE_PROMOCODE => $code,
                            REPLACE_SITEEMAIL => $this->siteemail,
                            REPLACE_SITEURL => URL_BASE,
                            REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                            REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                        );
                        $message           = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'promocode_message.html', $replace_variables);
                        //print_r($message);
                        //exit;
                        $to                = $email;
                        $from              = $this->siteemail;
                        $subject           = $subjects . " - " . $this->app_name;
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
                }*/
                $signup_id = $this->edit_model->editcorporatepromocode($post, $promo_code);
                if ($signup_id == 1) {      
                    //print_r($errors);exit;
                    Message::success(__('sucessfull_promocode_update'));
                    $this->request->redirect("manage/corporate_promocode");
                }
            } else {
                $errors = $validator->errors('errors');
            }
        }
        $view                       = View::factory('admin/edit_corporate_promocode')
        //->bind('validator', $validator)
            ->bind('errors', $errors)->bind('promocode_details', $promocode_details)->bind('postvalue', $post_values);
        $this->template->content    = $view;
        $this->template->title      = SITENAME . " | " . __('edit_promocode');
        $this->template->page_title = __('edit_promocode');
        $this->template->content    = $view;
    }

} // End Edit
