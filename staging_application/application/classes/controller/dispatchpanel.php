<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Dispatchpanel extends Controller_Template
{
    public $template = 'dispatch_panel/template';

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->session     = Session::instance();
        $this->urlredirect = Request::current();
        $this->request     = $request;
        $this->response    = $response;
        $this->mongo_db    = MangoDB::instance('default');
        $this->commonmodel = Model::factory('commonmodel');
        $this->usertype    = $this->session->get('user_type');
        $this->userid      = $this->session->get('userid');
        $this->company_id  = $this->session->get('company_id');
        $this->username    = $this->session->get('name');

        $lang = 'en';
        I18n::lang($lang);
        View::bind_global('js_language', '');
        View::bind_global('usertype', $this->usertype);
        View::bind_global('username', $this->username);
        View::bind_global('action', $request->action());
        View::bind_global('controller', $request->controller());

        $site_settings = $this->commonmodel->select_site_settings_old();
        $this->app_name = isset($site_settings['app_name']) ? $site_settings['app_name'] : 'Grand Limo';
        if (!defined('SITENAME')) {
            DEFINE('SITENAME', $this->app_name);
        }

        $company_currency = $this->company_id ? findcompany_currency($this->company_id) : 'KWD';
        View::bind_global('company_currency', $company_currency);

        if ($this->company_id) {
            $this->company_all_currenttimestamp = $this->commonmodel->getcompany_all_currenttimestamp($this->company_id);
            View::bind_global('company_all_currenttimestamp', $this->company_all_currenttimestamp);
            $location = $this->commonmodel->company_location($this->company_id);
            if (count($location) > 0) {
                $this->country_company = $location['login_country'];
                $this->state_company   = $location['login_state'];
                $this->city_company    = $location['login_city'];
            }
        }
    }

    public function before()
    {
        $action = $this->request->action();
        if ($action == 'login' || $action == 'index') {
            $this->template = 'dispatch_panel/login_template';
        }
        parent::before();
    }

    public function action_index()
    {
        $this->request->redirect('dispatch-panel/login');
    }

    public function action_login()
    {
        if ($this->usertype == 'V' && $this->userid) {
            $this->request->redirect('dispatch-panel/view-only');
        }

        $errors         = [];
        $error_login    = '';
        $email          = '';

        if ($this->request->post('admin_login')) {
            $email    = trim($this->request->post('email'));
            $password = $this->request->post('password');
            if ($email == '' || $password == '') {
                $error_login = 'Enter email and password';
            } else {
                $user = $this->mongo_db->find_one(MDB_PEOPLE, [
                    'email'     => $email,
                    'password'  => md5($password),
                    'user_type' => 'V',
                    'status'    => ACTIVE,
                ]);
                if (!empty($user)) {
                    $this->session->set('userid', $user['_id']);
                    $this->session->set('user_type', 'V');
                    $this->session->set('name', isset($user['name']) ? $user['name'] : 'View Dispatcher');
                    $this->session->set('email', $user['email']);
                    $this->session->set('company_id', isset($user['company_id']) ? $user['company_id'] : '');
                    $this->session->set('city_id', isset($user['login_city']) ? $user['login_city'] : 1);
                    $this->session->set('state_id', isset($user['login_state']) ? $user['login_state'] : 1);
                    $this->session->set('country_id', isset($user['login_country']) ? $user['login_country'] : 1);
                    $this->request->redirect('dispatch-panel/view-only');
                } else {
                    $error_login = 'Invalid view-only dispatcher login';
                }
            }
        }

        $this->template->page_title = 'View Dispatcher Login';
        $this->template->title      = 'View Dispatcher Login';
        $this->template->content    = View::factory('dispatch_panel/login')
            ->bind('error_login', $error_login)
            ->bind('errors', $errors)
            ->set('email', $email);
    }

    public function action_logout()
    {
        $this->session->delete('userid');
        $this->session->delete('user_type');
        $this->session->delete('name');
        $this->session->delete('email');
        $this->session->delete('company_id');
        $this->request->redirect('dispatch-panel/login');
    }

    private function require_viewer()
    {
        if ($this->usertype != 'V' || !$this->userid) {
            $this->request->redirect('dispatch-panel/login');
        }
    }

    public function action_view_only()
    {
        $this->require_viewer();
        $this->tdispatch_model = Model::factory('taxidispatch');

        /* Same Kuwait center the live dispatcher uses as fallback — do not use LOCATION_LATI (Los Angeles). */
        $current_latitude  = 29.3117;
        $current_longitude = 47.4818;

        $model_details        = $this->tdispatch_model->model_details();
        $all_company_map_list = $this->tdispatch_model->all_driver_map_list('');
        $operator_id          = $this->userid;
        $total_sum            = $this->tdispatch_model->get_total_sum($operator_id);
        $total_sum_day        = $this->tdispatch_model->get_total_sum_day($operator_id);

        $view = View::factory('dispatch_panel/view_only')
            ->bind('model_details', $model_details)
            ->bind('all_company_map_list', $all_company_map_list)
            ->bind('current_latitude', $current_latitude)
            ->bind('current_longitude', $current_longitude)
            ->bind('total_sum', $total_sum)
            ->bind('total_sum_day', $total_sum_day);

        $this->template->title      = SITENAME . ' | View Only Dispatcher';
        $this->template->page_title = 'View Only Dispatcher';
        $this->template->content    = $view;
    }

    public function action_driver_list_with_status()
    {
        $this->require_viewer();
        $this->tdispatch_model = Model::factory('taxidispatch');
        $all_company_map_list  = $this->tdispatch_model->get_driver_list_with_status($_REQUEST, $this->company_id, $this->usertype);
        $i                     = 0;
        $driver_active         = 0;
        $driver_free_in        = 0;
        $driver_free_out       = 0;
        $driver_busy           = 0;
        $markers               = [];

        if (count($all_company_map_list) > 0) {
            $output = "<h4>Driver Details <span id='driver_dets_count'></span> </h4>";
            $output .= "<ul class='driver_details'>";
            foreach ($all_company_map_list as $key => $val) {
                $remain_time = '';
                if (($val['updatetime_difference'] > LOCATIONUPDATESECONDS && $val['driver_status'] == 'A') || ($val['updatetime_difference'] > LOCATIONUPDATESECONDS && $val['driver_status'] == 'F' && $val['shift_status'] == 'OUT')) {
                    continue;
                }
                if ($val['driver_status'] == 'A') {
                    $status      = 'Active';
                    $span_class  = 'driver_status_active';
                    $driver_info = '<span style="color:orange">' . __('hired') . '</span>';
                    $driver_active++;
                    if (isset($val['trip_remaining_time']) && $val['trip_remaining_time'] > 0 && is_numeric($val['trip_remaining_time'])) {
                        $remain_time = $this->convertToHoursMins($val['trip_remaining_time']) . ':00';
                    }
                } elseif ($val['driver_status'] == 'F' && $val['shift_status'] == 'IN') {
                    $status      = 'Free In';
                    $span_class  = 'driver_status_in';
                    $driver_info = '<span style="color:green">' . __('free_in') . '</span>';
                    $driver_free_in++;
                } elseif ($val['driver_status'] == 'F' && $val['shift_status'] == 'OUT') {
                    $status      = 'Free Out';
                    $span_class  = 'driver_status_out';
                    $driver_info = '<span style="color:blue">' . __('free_out') . '</span>';
                    $driver_free_out++;
                } elseif ($val['driver_status'] == 'B') {
                    $status      = 'Busy';
                    $span_class  = 'driver_status_busy';
                    $driver_info = '<span style="color:red">' . __('trip_assigned') . '</span>';
                    $driver_busy++;
                } else {
                    $status      = $val['driver_status'];
                    $span_class  = 'driver_status_busy';
                    $driver_info = '';
                }

                $i++;
                $class          = ($i % 2) ? 'driver_status_li_one' : 'driver_status_li_two';
                $gps_image      = ($val['gps_enable'] == 1) ? URL_BASE . 'public/images/gps_green.png' : URL_BASE . 'public/images/gps_red.png';
                $internet_image = URL_BASE . 'public/images/internet_green.png';
                if ($val['updatetime_difference'] > LOCATIONUPDATESECONDS && $val['driver_status'] == 'F' && $val['shift_status'] == 'IN') {
                    $internet_image = URL_BASE . 'public/images/internet_red.png';
                }

                $output .= '<li class="' . $class . '">';
                $output .= '<span>' . ucfirst($val['name']) . ' - ' . (isset($val['driver_code']) ? $val['driver_code'] : '') . '<p style="color:GoldenRod;">' . $val['model_name'] . '</p>';
                if ($remain_time != '') {
                    $output .= '<p style="color:green;">' . $remain_time . '</p>';
                }
                $output .= '</span>';
                $output .= "<span style='width:24px;margin-right:5px'><p><img src='" . $gps_image . "' /></p></span>";
                $output .= "<span style='width:24px;margin-right:5px'><p><img src='" . $internet_image . "' /></p></span>";
                $output .= '<span class="' . $span_class . '">' . $status . '</span>';
                $output .= '</li>';

                $drv_info = '<div class="info_drivercontent">';
                $drv_info .= '<span class="info-content">' . ucfirst($val['name']) . ' - ' . (isset($val['driver_code']) ? $val['driver_code'] : '') . '</span>';
                $drv_info .= '<p style="color:GoldenRod;">' . $val['model_name'] . '</p>';
                $drv_info .= '<span class="info-content">' . $driver_info . '</span><br>';
                $drv_info .= '<span class="info-content">' . Commonfunction::convertphpdate('d/m/Y H:i:s', $val['update_date']) . '</span>';
                $drv_info .= '</div>';

                $markers[$key]['info']         = $drv_info;
                $markers[$key]['lat']          = $val['loc'][1];
                $markers[$key]['lng']          = $val['loc'][0];
                $markers[$key]['status']       = $val['driver_status'];
                $markers[$key]['shift_status'] = $val['shift_status'];
            }
            $output .= '</ul>';
        } else {
            $output = "<ul class='driver_details'><h4>Driver Details</h4><li class='no_driver'>No Driver Found</li></ul>";
        }

        $driver_count_dets = '(A - ' . $driver_active . ', In - ' . $driver_free_in . ', Out - ' . $driver_free_out . ', B - ' . $driver_busy . ')';
        echo json_encode($markers) . '#' . $output . '#' . $driver_count_dets;
        exit;
    }

    public function convertToHoursMins($time, $format = '%02d:%02d')
    {
        if ($time < 1) {
            return;
        }
        $hours   = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }

    public function getLatLong($address)
    {
        $address = str_replace(' ', '+', $address);
        $url     = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&sensor=false&key=' . GOOGLE_GEO_API_KEY;
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $geoloc = curl_exec($ch);
        $json   = json_decode($geoloc);
        if (isset($json) && $json->status == 'OK') {
            return [
                $json->results[0]->geometry->location->lat,
                $json->results[0]->geometry->location->lng,
            ];
        }
        return [29.3117, 47.4818];
    }

    public function action_all_booking_list_manage()
    {
        $this->require_viewer();
        $this->tdispatch_model = Model::factory('taxidispatch');
        $output                = '';
        $current_time          = $this->company_all_currenttimestamp;
        $travel_status         = isset($_GET['travel_status']) ? $_GET['travel_status'] : '';
        $driver_reply_cancel   = isset($_GET['status_cancel']) ? $_GET['status_cancel'] : '';
        $manage_status         = isset($_GET['manage_status']) ? $_GET['manage_status'] : 0;
        $taxi_company          = isset($_GET['taxi_company']) ? $_GET['taxi_company'] : 0;
        $send_array            = [
            'current_time'        => $current_time,
            'travel_status'       => $travel_status,
            'driver_reply_cancel' => $driver_reply_cancel,
            'manage_status'       => $manage_status,
            'taxi_company'        => $taxi_company,
        ];
        $bk_type = isset($_GET['bk_t']) ? $_GET['bk_t'] : '';
        if ($bk_type != '') {
            $send_array['book_type'] = $bk_type;
        }
        $get_all_booking_list = $this->tdispatch_model->dispatcher_booking_list($send_array);
        $i                    = 0;
        $op                   = [];

        if (count($get_all_booking_list) > 0) {
            foreach ($get_all_booking_list as $listings) {
                $i++;
                $trcolor_class = ($i % 2) ? 'show_tr_one' : 'show_tr_two';
                $pickup_time   = commonfunction::convertphpdate('d-M-Y h:i:s A', $listings['pickup_time']);
                $actpickup_time = ($listings['act_pickuptime'] != '') ? commonfunction::convertphpdate('d-M-Y h:i:s A', $listings['act_pickuptime']) : '';
                $drop_time     = ($listings['drop_time'] != '') ? commonfunction::convertphpdate('d-M-Y h:i:s A', $listings['drop_time']) : '';
                $booking_time  = commonfunction::convertphpdate('d-M-Y h:i:s A', $listings['booking_time']);
                $pass_logid    = $listings['pass_logid'];
                $passenger_id  = $listings['passenger_id'];
                $passenger_name = (isset($listings['passenger_name'])) ? urldecode($listings['passenger_name']) : '--';
                $passenger_name = wordwrap($passenger_name, 15, "\n", true);
                $driver_name   = isset($listings['driver_name'][0]) ? $listings['driver_name'][0] : '';
                $driver_code   = isset($listings['driver_code'][0]) ? $listings['driver_code'][0] : '---';
                $driver_id     = $listings['driver_id'];
                $promocode     = isset($listings['promocode']) ? $listings['promocode'] : '';
                $passenger_phone = (isset($listings['passenger_phone']) && $listings['passenger_phone'] != '') ? $listings['passenger_phone'] : '---';
                $passenger_phone = $passenger_phone . ' (' . $promocode . ')';
                $model_name    = (isset($listings['model_name']) && $listings['model_name'] != '') ? $listings['model_name'] : '---';
                $edit_model_name = (isset($listings['edit_model_name'])) ? $listings['edit_model_name'] : '';
                if ($edit_model_name != '') {
                    $model_name = ucfirst($edit_model_name) . ' <span style="color:green;">( ' . ucfirst(substr($model_name, 0, 1)) . ' )</span>';
                }

                $payment_type       = (!empty($listings['payment_type'])) ? $listings['payment_type'] : '';
                $advance_payment    = (!empty($listings['advance_payment'])) ? $listings['advance_payment'] : 0;
                $pending_amt        = (!empty($listings['pending_amt'])) ? $listings['pending_amt'] : 0;
                $wallet_amount_used = (!empty($listings['wallet_amount_used'])) ? $listings['wallet_amount_used'] : 0;
                $discount_wallet_amount_used = (!empty($listings['discount_wallet_amount_used'])) ? $listings['discount_wallet_amount_used'] : 0;
                $wallet_amount_used += $discount_wallet_amount_used;
                $driver_edit_status = (!empty($listings['driver_edit_status'])) ? $listings['driver_edit_status'] : 0;
                $add_amt            = (!empty($listings['add_amt'])) ? $listings['add_amt'] : 0;
                $payment_type_msg   = commonfunction::get_payment_message($payment_type, $wallet_amount_used, $pending_amt, $advance_payment, $driver_edit_status, $add_amt);
                $fare               = isset($listings['fare']) ? $listings['fare'] : '';
                $createdby_username = isset($listings['createdby_username']) ? $listings['createdby_username'] : '-';
                $fixedprice         = $fare + $wallet_amount_used;
                $approx_duration    = (!empty($listings['approx_duration'])) ? $listings['approx_duration'] : '-';
                $time               = $approx_duration;
                if ($drop_time != '' && $actpickup_time != '') {
                    $time = commonfunction::dateDiff($drop_time, $actpickup_time);
                }

                $pickup_lat       = $listings['pickup_latitude'];
                $pickup_lng       = $listings['pickup_longitude'];
                $drop_lat         = $listings['drop_latitude'];
                $drop_lng         = $listings['drop_longitude'];
                $current_location = $listings['current_location'];
                $drop_location    = $listings['drop_location'];
                $pick_ll          = substr($listings['pickup_latitude'], 0, 9) . '-' . substr($listings['pickup_longitude'], 0, 9);
                $drop_ll          = ($listings['drop_latitude'] != '' && $listings['drop_latitude'] != 0) ? substr($listings['drop_latitude'], 0, 9) . '-' . substr($listings['drop_longitude'], 0, 9) : '';
                $pickup_link      = 'https://www.google.com/maps/search/?api=1&query=' . $pickup_lat . ',' . $pickup_lng;
                $drop_link        = 'https://www.google.com/maps/search/?api=1&query=' . $drop_lat . ',' . $drop_lng;
                $pick_ll          = '<a style="color:#337ab7" target="_blank" href="' . $pickup_link . '">' . $pick_ll . '</a>';
                $drop_ll          = '<a style="color:#337ab7" target="_blank" href="' . $drop_link . '">' . $drop_ll . '</a>';

                $status_color  = '#1298ff';
                $tr_icon_class = 'assign_icon';
                $tr_icon_title = __('assign');
                $travel_status_html = '<div style="color:red;">' . __('assign') . '</div>';
                if ($listings['travel_status'] == 1) {
                    $status_color       = '#07841e';
                    $tr_icon_class      = 'complete_icon';
                    $tr_icon_title      = __('completed');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('completed') . '</div>';
                } elseif ($listings['travel_status'] == 2) {
                    $status_color       = '#ff9600';
                    $tr_icon_class      = 'inprogress_icon';
                    $tr_icon_title      = __('inprogress');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('inprogress') . '</div>';
                } elseif ($listings['travel_status'] == 3) {
                    $status_color       = '#f9c213';
                    $tr_icon_class      = 'start_to_pickup_icon';
                    $tr_icon_title      = __('start_to_pickup');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('start_to_pickup') . '</div>';
                } elseif ($listings['travel_status'] == 4) {
                    $status_color       = '#844d06';
                    $tr_icon_class      = 'cancel_icon';
                    $tr_icon_title      = __('cancel_by_passenger');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('cancel_by_passenger') . '</div>';
                } elseif ($listings['travel_status'] == 5) {
                    $status_color       = '#f91313';
                    $tr_icon_class      = 'waiting_payment_icon';
                    $tr_icon_title      = __('waiting_payment');
                    $travel_status_html = '<div style="color:' . $status_color . '">' . __('waiting_payment') . '</div>';
                } elseif ($listings['travel_status'] == 6 || $listings['travel_status'] == 10) {
                    $status_color       = '#1339f9';
                    $tr_icon_class      = 'reassign_icon';
                    $tr_icon_title      = __('reassign');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                } elseif ($listings['travel_status'] == 7 && ($listings['driver_reply'] == 'C' || $listings['driver_reply'] == 'R')) {
                    $status_color       = '#844d06';
                    $tr_icon_class      = 'cancel_icon';
                    $tr_icon_title      = __('cancelled');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                } elseif ($listings['travel_status'] == 7) {
                    $status_color       = '#1339f9';
                    $tr_icon_class      = 'reassign_icon';
                    $tr_icon_title      = __('reassign');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('reassign') . '</div>';
                } elseif ($listings['travel_status'] == 8) {
                    $status_color       = '#844d06';
                    $tr_icon_class      = 'cancel_icon';
                    $tr_icon_title      = __('cancelled');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                } elseif ($listings['travel_status'] == 9 && $listings['driver_reply'] == 'A') {
                    $status_color       = '#12ff00';
                    $tr_icon_class      = 'confirm_icon';
                    $tr_icon_title      = __('confirmed');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('confirmed') . '</div>';
                } elseif ($listings['travel_status'] == 9) {
                    $status_color       = '#844d06';
                    $tr_icon_class      = 'cancel_icon';
                    $tr_icon_title      = __('cancelled');
                    $travel_status_html = '<div style="color:' . $status_color . ';">' . __('cancelled') . '</div>';
                }

                if ($driver_name != '') {
                    $driverphone = isset($listings['driver_phone'][0]) ? '-(' . $listings['driver_phone'][0] . ')' : '-';
                    $driver_name = $driver_name . ' (' . $driver_code . ') ' . $driverphone;
                } else {
                    $driver_name = "<span style='color:red;'>No Driver</span>";
                }

                $notes_img = '-';
                if (!empty($listings['notes'])) {
                    $html_clear_text = preg_replace("/[^\w ]+/", '', $listings['notes']);
                    $notes_img       = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' . $html_clear_text . '"><img src="' . URL_BASE . 'public/images/notes.jpg"></a>';
                }
                $pass_notes_img = '';
                if (!empty($listings['passenger_admin_notes'])) {
                    $html_clear_text = preg_replace("/[^\w ]+/", '', $listings['passenger_admin_notes']);
                    $pass_notes_img  = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' . $html_clear_text . '"><img src="' . URL_BASE . 'public/images/passenger-notes.png"></a>';
                }

                $airport_pickup = (!empty($listings['airport_pickup'])) ? $listings['airport_pickup'] : '';
                $class          = '';
                $bgstyle        = '';
                if ($listings['book_tag'] == 'N') {
                    $tag  = __('normal_book');
                    $link = $listings['book_type'];
                    if ($airport_pickup == 1) {
                        $class = "style='color: #ff9600;'";
                        $link  = __('airport');
                    } else {
                        $class = ($link == __('book_later')) ? "style='color: #1298ff;'" : "style='color: #07841e;'";
                    }
                } else {
                    $tag  = __('recurrent_book');
                    $link = $listings['book_type'];
                }

                $actual_pending = 0;
                $edit_fare      = '';
                if (isset($listings['edit_fare'])) {
                    $actual_pending = isset($listings['edit_fare'][5]) ? $listings['edit_fare'][5] : 0;
                    $actual_pending = (is_nan($actual_pending) == 1) ? 0 : $actual_pending;
                }
                $actual_paid_amt = (!empty($listings['actual_paid_amt'])) ? $listings['actual_paid_amt'] : 0;
                $fixed_edit_fare = '';
                $pending_edit_fare = '';
                if ($listings['travel_status'] == 1) {
                    if ($add_amt != '' && $add_amt != 0) {
                        $fixed_amt       = $add_amt + $fixedprice;
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(" . $fixed_amt . ')</span>';
                    } else {
                        $fixed_edit_fare = "<span class='fixed_payment_class'>(" . $actual_paid_amt . ')</span>';
                    }
                    $pending_edit_fare = "<span class='pending_payment_class'>(" . $actual_pending . ')</span>';
                } else {
                    $payment_type_msg = '';
                }
                $passenger_pending_amt_txt = '';
                if ($pending_amt > 0) {
                    $passenger_pending_amt_txt = "<span class='pass_pend_payment_class'>(" . $pending_amt . ')</span>';
                }
                $trifare_text = '<td width="10%" id="fare_' . $pass_logid . '"><span>' . $fixedprice . '</span>' . $fixed_edit_fare . $pending_edit_fare . ' ' . $passenger_pending_amt_txt . '</td>';

                $passenger_corporate_name = (!empty($listings['corporate_name'])) ? $listings['corporate_name'] : '';
                $passenger_corporate_name_text = ($passenger_corporate_name != '') ? '<br/>(' . $passenger_corporate_name . ')' : '';
                $bookedBy = $createdby_username != '-' ? 'W' : 'A';

                $op[] = '<tr ' . $bgstyle . ' align="center" class="' . $trcolor_class . ' ' . $tr_icon_class . '" id="viewtr_' . $pass_logid . '">';
                $op[] = '<td width="10%" style="border-left:5px solid ' . $status_color . ';">' . $booking_time . '</td>';
                $op[] = '<td width="10%">' . $pickup_time . '</td>';
                $op[] = '<td width="5%" style="color:blue;">' . $pass_logid . '(' . $bookedBy . ')</td>';
                $op[] = '<td width="7%"><span>' . ucfirst($passenger_name) . '<br/>' . $pass_notes_img . '</span>' . $passenger_corporate_name_text . '</td>';
                $op[] = '<td width="7%">' . ucfirst($driver_name) . '</td>';
                $op[] = '<td width="5%">' . $model_name . '</td>';
                $op[] = '<td width="10%">' . $passenger_phone . '</td>';
                $op[] = '<td width="11%">' . $current_location . '<br>' . $pick_ll . '</td>';
                $op[] = '<td width="11%">' . $drop_location . '<br>' . $drop_ll . '</td>';
                $op[] = '<td width="5%">' . $time . '</td>';
                $op[] = '<td width="5%">' . $payment_type_msg . '</td>';
                $op[] = $trifare_text;
                $op[] = '<td width="5%">' . $createdby_username . '</td>';
                $op[] = '<td width="6%"><a href="javascript:;" style="cursor:default;" title="' . $tr_icon_title . '">' . $travel_status_html . '</a></td>';
                $op[] = '<td width="5%" title="' . $tag . '"><span ' . $class . ' >' . $link . '</span></td>';
                $op[] = '<td width="5%">' . $notes_img . '</td>';
                $op[] = '</tr>';
            }
            $output = implode(' ', $op);
        } else {
            $output .= '<div class="nodata"><p>' . __('no_data') . '</p></div>';
        }
        echo count($get_all_booking_list) . '@' . $output;
        exit;
    }
}
