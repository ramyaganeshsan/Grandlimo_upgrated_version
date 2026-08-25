<?php defined('SYSPATH') or die('No direct script access.');

/****************************************************************

* Transaction details

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/
class Controller_Transaction extends Controller_Siteadmin
{
    /**
     ****__construct()****
     * Common Function in this controller
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->is_login();
        $this->user_createdby = $this->session->get('userid');
        $this->usertype       = $this->session->get('user_type');
        $this->company_id     = $this->session->get('company_id');
        
        $this->transaction_model = Model::factory('transaction');
        $this->common_model      = Model::factory('commonmodel');
        $this->manage_model      = Model::factory('manage');
    }
    /**
     ****is login()****
     * function to check whether the user is logged in or not
     */
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
     ****Transaction List****
     * function to get overall transaction list
     */
    public function action_admintransaction()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[3]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        //if ($usertype == 'M') {
          //  $this->request->redirect("manager/login");
        //}
        //echo $list; exit;
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        } elseif ($list == 'missed') {
            $page_title = __("missed_trip_log");
        } elseif ($list == 'upcoming') {
            $page_title = __("upcoming_transaction_log");
        } elseif ($list == 'inprogress') {
            $page_title = __("inprogress_transaction_log");
        } else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction($usertype);
        $taxilist               = $this->transaction_model->gettaxidetails(1, '');
        $passengerlist          = $this->transaction_model->getpassengerdetails('', '');
        
        $driverlist             = $this->transaction_model->getdriverdetails(1, '');
       
        $managerlist            = $this->transaction_model->getmanagerdetails(1);
        $startdate              = date('Y-m-01 00:00:00');
        $enddate                = date('Y-m-d 23:59:59');

        //$startdate              = date('2014-01-01 00:00:00');
        //$enddate                = date('2016-04-31 00:00:00');
        
         $count_transaction = $this->transaction_model->transaction_details($list, 'All', 'All', 'All', 'All', 'All', $startdate, $enddate, '', '');
        //echo "<pre>";print_r($count_transaction);exit;
             $count_transaction_list = $total_fare = 0;
            if(!empty($count_transaction)){
                $count_transaction_list = $count_transaction['count'];
                $total_fare = $count_transaction['total_fare'];
            }
        //$grpahdata              = $this->transaction_model->getgraphvalues($list, 'All', 'All', 'All', 'All', '', $startdate, $enddate, '', '');
        $gateway_details        = $this->common_model->gateway_details();
        $package_details        = $this->common_model->package_details();
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
        
        /* NEW UUPDATE */
        if($count_transaction_list > 0 ){
       $all_transaction_list_dup       = $this->transaction_model->transaction_details($list, 'All', 'All', 'All', 'All', 'All', $startdate, $enddate, '', '',0, $count_transaction_list);
       
        foreach($all_transaction_list_dup as $dup){
            $month_new[] = date( "Y-m-d",strtotime($dup['createdate']));
        }
        $month_new = array_unique($month_new);
        sort($month_new);
        foreach($month_new as $mn){
            $month[] = "'".date( "d",strtotime($mn))." ".date( "M",strtotime($mn))."'";
            $start_new = $mn. ' 00:00:00';
            $end_new   = $mn. ' 23:59:59';
            $grpahdata[]              = $this->transaction_model->getgraphvalues($list, 'All', 'All', 'All', 'All', '', $start_new, $end_new,$startdate,$enddate,'', '');
            
        }
        }   
        /* NEW UUPDATE */
        
        //print "<pre>";
        //print_r($all_transaction_list_dup);
        //exit;
        $all_transaction_list       = $this->transaction_model->transaction_details($list, 'All', 'All', 'All', 'All', 'All', $startdate, $enddate, '', '',$offset, REC_PER_PAGE);
       // print "<pre>";
       // print_r($count_transaction_list);
        //exit;
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/admintransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('gateway_details', $gateway_details)->bind('package_details', $package_details)->bind('grpahdata', $grpahdata)->bind('id', $id)->bind('ListCount', $count_transaction_list)->bind('month',$month)->bind('total_fare',$total_fare);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    /**
     ****Transaction List()****
     * function to get transaction list with search option
     */
    public function action_admintransaction_list()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[3]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        // if ($usertype == 'M') {
        //     $this->request->redirect("manager/login");
        // }
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        }  elseif ($list == 'missed') {
            $page_title = __("missed_trip_log");
        }  elseif ($list == 'upcoming') {
            $page_title = __("upcoming_transaction_log");
        } elseif ($list == 'inprogress') {
            $page_title = __("inprogress_transaction_log");
        }else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }
        $company                = trim(Html::chars($_REQUEST['filter_company']));
        $startdate              = trim(Html::chars($_REQUEST['startdate']));
        $enddate                = trim(Html::chars($_REQUEST['enddate']));
        $taxiid                 = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id              = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id             = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid            = trim(Html::chars($_REQUEST['passengerid']));
        $transaction_id         = '';
        $payment_type           = trim(Html::chars($_REQUEST['payment_type']));
        //$startdate              = date('Y-m-01 00:00:00');
        //$enddate                = date('Y-m-d 23:59:59');
         $count_transaction = $this->transaction_model->transaction_details($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);

       $count_transaction_list = $total_fare = 0;
        if(!empty($count_transaction)){
            $count_transaction_list = $count_transaction['count'];
            $total_fare = $count_transaction['total_fare'];
        }
           /*start of export*/
        if(isset($_SESSION['download_set']))
        {
			$all_list = $this->transaction_model->transaction_details($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type,'','','1');
			
          //  echo "<pre>";print_r($all_list);exit();
            $tax_total= $percenttotal = $subtotal = "";
            $i=0;
            $cash_total = 0;$card_total = 0;$online_knet_total = 0;$additional_total = 0;$wallet_total = 0;$pending_total =0;

            foreach($all_list as $result)
            {
                //START
                $xls_output[$i] = array();
                
                $fare = isset($result['fare'][0])?$result['fare'][0]:0;
                $payment_type = isset($result['payment_type'][0])?$result['payment_type'][0]:'';
//seg
                $cancel_reason = isset($result['cancel_reason'])?$result['cancel_reason']:'-';
                $edited_fare = isset($result['total_fare_detail'])?$result['total_fare_detail']:0;
                $faredetail = isset($result['fare_detail'])?$result['fare_detail']:array();
                $advance_payment = isset($result['advance_payment'][0])?$result['advance_payment'][0]:0;
                $cash_fare = '-';$card_fare = '-'; $online_knet = '-';$additional_fare = '-';$fare_note = '-';$wallet_amt='-';$pending_amt = '-';
                
                if(!empty($faredetail)){
                        foreach ($faredetail as $fkey => $fvalue) {
                            if($fvalue['key'] == 1){

                                $cash_fare = $fvalue['value'];
                                $cash_total +=  $cash_fare;
                            }elseif($fvalue['key'] == 6){
                                $online_knet = $fvalue['value'];
                                $online_knet_total += $online_knet;

                            }elseif($fvalue['key'] == 3){
                                $card_fare = $fvalue['value'];
                                $card_total += $card_fare;
                                
                            }elseif($fvalue['key'] == 'fare_note'){
                                $fare_note = $fvalue['value'];
                                
                            }elseif($fvalue['key'] == 'wallet'){
                                $wallet_amt = $fvalue['value'];
                                
                            }elseif($fvalue['key'] == 'pending'){
                                $pending_amt = $fvalue['value'];
                                
                            }else{
                                $additional_fare = $fvalue['value'];
                                $additional_total += $additional_fare;
                            }
                            # code...
                        }
                    }

//seg

             


                $company_currency = $result['company_id'];
                $ccur = findcompany_currency($company_currency);
               // $ccur = 'curency';
                if($list != 'rejected') {

                    $xls_output[$i]['transaction_id'] = isset($result['transaction_id'][0])?$result['transaction_id'][0]:'-';
                    $payment_type_msg = '';

                switch($payment_type)
                {
                    case 1:

                    $payment_type_msg = __('cash_label');
                    if($wallet_amt > 0)
                    $payment_type_msg = __('wallet_cash_label');

                    break;

                    case 2:

                    $payment_type_msg = __('card_label');
                    if($wallet_amt > 0)
                    $payment_type_msg = __('wallet_card_label');

                    if($pending_amt > 0)
                    $payment_type_msg = __('pending_cash_label');


                    break;

                    case 3:

                    $payment_type_msg = __('knet_label');
                    if($wallet_amt > 0)
                    $payment_type_msg = __('wallet_knet_label');

                    if($pending_amt > 0)
                    $payment_type_msg = __('pending_knet_label');


                    case 6:

                    $payment_type_msg = __('wallet_label');
                    if($advance_payment > 0)
                    $payment_type_msg = __('advance_label');
                    break;

                }

                    // if($payment_type == 1)
                    // {
                    //     $xls_output[$i]['payment_type'] = __('cash');
                    // }
                    // else if($payment_type == 2 )
                    // {
                    //     $xls_output[$i]['payment_type'] = __('credit_card_paypal');
                    // }
                    // else if($payment_type == 3 )
                    // {
                    // $xls_output[$i]['payment_type'] = __('Online-KNET');
                    // }
                    // else if($payment_type == 4 )
                    // {
                    // $xls_output[$i]['payment_type'] = __('account');
                    // }
                    //  else if($payment_type == 6 )
                    // {
                    // $xls_output[$i]['payment_type'] = __('card');
                    // }
                    // else
                    // {
                    // $xls_output[$i]['payment_type'] = '-';
                    // }

                    $xls_output[$i]['payment_type'] = $payment_type_msg;

                    $xls_output[$i]['passengers_log_id'] = isset($result['passengers_log_id'][0])?$result['passengers_log_id'][0]:$result['id'];

                }

                $xls_output[$i]['passenger_name'] =isset($result['passenger_name'])?ucfirst($result['passenger_name']):'-';
                $xls_output[$i]['passenger_phone'] =isset($result['passenger_phone'])?ucfirst($result['passenger_phone']):'-';
                $xls_output[$i]['driver_name'] =isset($result['driver_name'][0])?wordwrap(ucfirst($result['driver_name'][0]),30,'<br/>',1):'-';
              //  $xls_output[$i]['driver_name']= wordwrap(ucfirst($result['driver_name']),30,'<br/>',1);
                $journeyDate = (isset($result['pickup_time']) && $result['pickup_time'] != '0000-00-00 00:00:00') ? $result['pickup_time'] : '-';
                   
                $dispatch_time = (isset($result['dispatch_time']) ) ? Commonfunction::convertphpdate('Y-m-d h:i:s A',$result['dispatch_time']) : '-';

                $xls_output[$i]['journey_date'] = $journeyDate;
                $xls_output[$i]['dispatch_time'] = $dispatch_time;
                if(isset($result['current_location']) && $result['current_location']!=''){
                    $xls_output[$i]['current_location'] = strip_tags(htmlentities($result['current_location']));                    
                }
                else{
                    $xls_output[$i]['current_location'] = '-';
                }
                if(isset($result['drop_location']) && $result['drop_location']!=''){
                    $xls_output[$i]['drop_location'] = strip_tags(htmlentities($result['drop_location']));
                }
                else{
                    $xls_output[$i]['drop_location'] = '-';
                }
                
                if($list != 'rejected'){
                    if($list != 'cancelled'){

                        $distance_unit = isset($result['distance_unit'][0])?$result['distance_unit'][0]:'';
                        $nightfare = isset($result['nightfare'][0])?$result['nightfare'][0]:0;
                        $eveningfare = isset($result['eveningfare'][0])?$result['eveningfare'][0]:0;
                        $passenger_discount = isset($result['passenger_discount'][0])?$result['passenger_discount'][0]:0;
                        $promocode = isset($result['promocode'])?$result['promocode']:'-';


                        if(isset($result['distance']) && $result['distance'] != 0) { 
                            $distance = round($result['distance'],2).' '.$distance_unit;

                        } 
                        else { 
                            $distance =  '-'; 

                        }
                        if($nightfare == 0)
                         {
                            $nightfare = '-';
                           } 
                         else { 
                            $nightfare =  $ccur.round($nightfare,2);
                        }
                        if($eveningfare == 0) {
                          $eveningfare = '-'; 
                        } else { 
                            $eveningfare =  $ccur.round($eveningfare,2);
                        }

                        if( $passenger_discount == 0) {
                          $passenger_discount = '-'; 
                        } 
                          else { 
                            $passenger_discount = $ccur.round($passenger_discount,2);
                          }
                        $xls_output[$i]['distance'] = $distance;
                        $xls_output[$i]['nightfare'] = $nightfare;
                        $xls_output[$i]['eveningfare'] = $eveningfare;
                        $xls_output[$i]['promocode'] = $promocode;
                        $xls_output[$i]['promo_discount'] = $passenger_discount;


                    }   
                   
                    if($list != 'success') {
                    $travel_status = isset($result['travel_status'])?$result['travel_status']:'-';

                        if($travel_status == 0) {
                            $travel = __('to_be_dispatched');
                        } else if($travel_status == 1) {
                            $travel = __('completed');
                        } else if($travel_status == 2) {
                            $travel = __('inprogress');
                        } else if($travel_status == 3) {
                            $travel = __('start_to_pickup');
                        } else if($travel_status == 4) {
                            $travel = __('cancel_by_passenger');
                        } else if($travel_status == 5) {
                            $travel = __('waiting_for_payment');
                        } else if($travel_status == 6) {
                            $travel = __('missed');
                        } else if($travel_status == 7) {
                            $travel = __('dispatched');
                        } else if($travel_status == 8) {
                            $travel = __('cancelledd');
                        } else if($travel_status == 9) {
                            $travel = __('confirmed');
                        } else if($travel_status == 10) {
                            $travel = __('reassign');
                        }  else{
                            $travel = '-';
                        }
                        $xls_output[$i]['travel_status'] = $travel;
                                   
                    }
                    
                    if($fare != 0) { 
                        $fare1 = round($fare,2); 
                    }
                    else { 
                        $fare1 = '-'; 
                    }
                    if($edited_fare != 0) { 
                        $edited_fare1 = round($edited_fare,2); 
                    }
                    else { 
                        $edited_fare1 = '-'; 
                    }

                    if($fare != 0) {
                        $ccur_for = findcompany_currencyformat($company_currency);
                        $convet_amt = currency_conversion($ccur_for,$fare);
                       // $equivalent_to_usd =  round($convet_amt,2);
                    }
                    else { 
                        //$equivalent_to_usd = '-'; 
                        $convet_amt = 0; 
                    }
                   // $xls_output[$i]['equivalent_to_usd'] = $equivalent_to_usd;
                    $xls_output[$i]['fare'] = $fare1;
                    //seg
                    $xls_output[$i]['cancel_reason'] = $cancel_reason;
                    if($list == "all" ||$list == "success"){
                        $xls_output[$i]['total_edited_fare'] = $edited_fare1;
                        $xls_output[$i]['cash_fare'] = $cash_fare;
                        $xls_output[$i]['wallet'] = $wallet_amt;
                        $xls_output[$i]['pending_amt'] = $pending_amt;
                        $xls_output[$i]['card_fare'] = $card_fare;
                        $xls_output[$i]['online_knet_fare'] = $online_knet;
                        $xls_output[$i]['additional_fare'] = $additional_fare;
                        $xls_output[$i]['fare_note'] = $fare_note;

                    }
                   
                    //seg
                 /*   array_push($export_table_header,__('equivalent_to_usd'));
                    array_push($export_table_field_select,'equivalent_to_usd');  */
                }
                else{
                    if(isset($result['driver_reply']) && $result['driver_reply'] == 'C') {
                        $driver_reply =  __('cancelled_by_driver'); 
                    } 
                    else {
                        $driver_reply =  __('rejected_by_driver'); 
                    }
                    if(isset($result['driver_comments']) && $result['driver_comments'] != '') { 
                        $driver_comments =  $result['driver_comments']; 

                    }
                    else { 
                        $driver_comments =  '-'; 
                    }

                    $xls_output[$i]['driver_reply'] = $driver_reply;
                    $xls_output[$i] ['reason']= $driver_comments;
 
                }


                //END

             
                $i++;
            }
             $xls_output['total_cash_fare'] = $cash_total;
             $xls_output['total_card_fare'] = $card_total;
             $xls_output['total_online_knet_fare'] = $online_knet_total;
             $xls_output['total_additional_fare'] = $additional_total;
             $xls_output['total_wallet_fare'] = $wallet_total;
             $xls_output['total_pending_total'] = $pending_total;

            $export_table_header = '';
            if($list != 'rejected') {
                $export_table_header =  array(/*__('cctransaction_id'),*/__('payment_type'),__('trip_id'));
                $export_table_field_select = array(/*'transaction_id',*/'payment_type','passengers_log_id');
            }
            if(is_array($export_table_header)){
                array_push($export_table_header,__('passenger_name'),__('passenger_phone'),__('driver_name'),__('dispatch_time'),__('journey_date'),__('Current_Location'), __('Drop_Location'));     
                array_push($export_table_field_select,'passenger_name','passenger_phone','driver_name','dispatch_time','journey_date','current_location','drop_location');            
            }
            else{
                $export_table_header= array(__('passenger_name'),__('passenger_phone'),__('driver_name'),__('dispatch_time'),__('journey_date'),__('Current_Location'), __('Drop_Location'));             
                $export_table_field_select= array('passenger_name','passenger_phone','driver_name','dispatch_time','journey_date','current_location','drop_location');                
            }      
            if($list != 'rejected'){
                if($list != 'cancelled'){
                   array_push($export_table_header,__('distance_km'),__('nightfare'),__('eveningfare'),__('promocode'),__('promo_discount'));
                   array_push($export_table_field_select,'distance','nightfare','eveningfare','promocode','promo_discount');     
                }   
                if($list == 'cancelled'){
                    array_push($export_table_header,__('cancel_fare'),__('cancel_reason'));
                   array_push($export_table_field_select,'fare','cancel_reason');             
                }
                else{
                    array_push($export_table_header,__('trip_total_fare'));
                    array_push($export_table_field_select,'fare'); 
                    if($list == "all" || $list == "success"){
                        array_push($export_table_header,__('trip_edited_fare'),__('cash_fare'),__('card_fare'),__('online-knet_fare'),__('additional_fare'),__('wallet_label'),__('pending_amt'),__('fare_note'));
                        array_push($export_table_field_select,'total_edited_fare','cash_fare','card_fare','online_knet_fare','additional_fare','wallet_amt','fare_note');    
                    }
                    
                }
                 if($list == 'all'){
                    array_push($export_table_header,__('cancel_reason'));
                    array_push($export_table_field_select,'cancel_reason');             

                }

               // array_push($export_table_header,__('equivalent_to_usd'));
                //array_push($export_table_field_select,'equivalent_to_usd');   

                if($list != 'success') {
                    array_push($export_table_header,__('travel_status'));
                    array_push($export_table_field_select,'travel_status');                        
                }
                /*
                if($list == 'all'){
                    array_push($export_table_header,__('cancel_reason'));
                    array_push($export_table_field_select,'cancel_reason');             

                }
                if($list == 'cancelled'){
                    array_push($export_table_header,__('cancel_reason'),__('cancel_fare'));
                   array_push($export_table_field_select,'cancel_reason','fare');             
                }
                else{
                    array_push($export_table_header,__('trip_total_fare'));
                   array_push($export_table_field_select,'fare'); 
                }

               // array_push($export_table_header,__('equivalent_to_usd'));
                //array_push($export_table_field_select,'equivalent_to_usd');   

                if($list != 'success') {
                    array_push($export_table_header,__('travel_status'));
                    array_push($export_table_field_select,'travel_status');                        
                }
     */
            } 
            else{
                 array_push($export_table_header,__('driver_reply'),__('reason'));
                array_push($export_table_field_select,'driver_reply','reason');     
            }
                
            $heading =  __('report_head');
            if($startdate != "")
            {
                $heading = __('report_head');
                $sub_heading = __('from').' '.$startdate.' '.__('to').' '.$enddate;
            }

            $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
        }
        /*end of export*/
           
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction();
       
        $taxilist               = $this->transaction_model->gettaxidetails($company, $manager_id);
       
        $passengerlist          = $this->transaction_model->getpassengerdetails($company, '');
       
        $driverlist             = $this->transaction_model->getdriverdetails($company, $manager_id);
       
        $managerlist            = $this->transaction_model->getmanagerdetails($company);
       
       
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
         /* NEW UUPDATE */
        if($count_transaction_list > 0 ){
    
        /*$all_transaction_list_dup       = $this->transaction_model->transaction_details($list, 'All', 'All', 'All', 'All', 'All', $startdate, $enddate, '', '',0, $count_transaction_list);*/
        $all_transaction_list_dup       = $this->transaction_model->transaction_details($list, $company,$manager_id, $taxiid,$driver_id, $passengerid, $startdate, $enddate, $transaction_id,$payment_type,0,$count_transaction_list);

        //echo '<pre>'; 
       //print_r($all_transaction_list_dup);
        foreach($all_transaction_list_dup as $dup){
            $month_new[] = date( "Y-m-d",strtotime($dup['createdate']));
        }
        $month_new = array_unique($month_new);
        sort($month_new);
        //echo '<pre>'; 
        //print_r($month_new);exit;
        foreach($month_new as $mn){
            $month[] = "'".date( "d",strtotime($mn))." ".date( "M",strtotime($mn))."'";
            $start_new = $mn. ' 00:00:00';
            $end_new   = $mn. ' 23:59:59';
            /*$grpahdata[]              = $this->transaction_model->getgraphvalues($list, 'All', 'All', 'All', 'All', '', $start_new, $end_new, '', '');*/
            $grpahdata[]              = $this->transaction_model->getgraphvalues($list, $company, $manager_id, $taxiid, $driver_id,$passengerid, $start_new, $end_new,$startdate,$enddate,$transaction_id, $payment_type);

            
        }
    
        }
       /* echo '<pre>'; 
        print_r($grpahdata);exit;*/
        
        /* NEW UUPDATE */
        
        $all_transaction_list       = $this->transaction_model->transaction_details($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type,$offset, REC_PER_PAGE);
       //echo '<pre>'; 
       //print_r($all_transaction_list);
      // exit;
        //$grpahdata                  = $this->transaction_model->getgraphvalues($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        $gateway_details            = $this->common_model->gateway_details();
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/admintransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('grpahdata', $grpahdata)->bind('gateway_details', $gateway_details)->bind('id', $id)->bind('ListCount', $count_transaction_list)->bind('month',$month)->bind('total_fare',$total_fare);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
     //Company Transactions without Search action 
    public function action_companytransaction()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[3]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'A') {
            $company_id = $this->request->param('id');
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        if ($usertype != 'A') {
            $company_id = $this->company_id;
        }
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        } else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }
        $startdate              = date('Y-m-01 00:00:00');
        $enddate                = date('Y-m-d H:i:s');
        $startdate              = date('2014-01-01 00:00:00');
        $enddate                = date('2015-12-01 00:00:00');
        $taxilist               = $this->transaction_model->gettaxidetails($company_id, '');
       
        $passengerlist          = $this->transaction_model->getpassengerdetails($company_id, '');
        $driverlist             = $this->transaction_model->getdriverdetails($company_id, '');
        $managerlist            = $this->transaction_model->getmanagerdetails($company_id);
        $gateway_details        = $this->common_model->gateway_details();
        $grpahdata              = $this->transaction_model->getgraphvalues($list, $company_id, 'All', 'All', 'All', 'All', $startdate, $enddate, '', '');
        $count_transaction_list = $this->transaction_model->transaction_details($list, $company_id, 'All', 'All', 'All', 'All', $startdate, $enddate, '', '');
        //echo $count_transaction_list;exit;
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
        $all_transaction_list       = $this->transaction_model->transaction_details($list, $company_id, 'All', 'All', 'All', 'All', $startdate, $enddate, '', '', $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/companytransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('grpahdata', $grpahdata)->bind('passengerlist', $passengerlist)->bind('gateway_details', $gateway_details)->bind('id', $id)->bind('ListCount', $count_transaction_list);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_companytransaction_list()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[3]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'A') {
            $company_id    = $this->request->param('id');
        }
        if ($usertype != 'A') {
            $company_id = $this->company_id;
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        } else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }
        
        $startdate          = trim(Html::chars($_REQUEST['startdate']));
        $enddate            = trim(Html::chars($_REQUEST['enddate']));
        $taxiid             = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id          = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id         = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid        = trim(Html::chars($_REQUEST['passengerid']));
        $transaction_id     = trim(Html::chars($_REQUEST['transaction_id']));
        $payment_type       = trim(Html::chars($_REQUEST['payment_type']));
        //echo $passengerid;exit;
        /*$startdate              = date('2014-01-01 00:00:00');
        $enddate                = date('2015-12-01 00:00:00');*/
        
        $taxilist               = $this->transaction_model->gettaxidetails($company_id, $manager_id);
        $passengerlist          = $this->transaction_model->getpassengerdetails($company_id, $manager_id);
        $driverlist             = $this->transaction_model->getdriverdetails($company_id, $manager_id);
        $managerlist            = $this->transaction_model->getmanagerdetails($company_id);
        $gateway_details        = $this->common_model->gateway_details();        
        //$grpahdata              = $this->transaction_model->getgraphvalues($list, $company_id, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
		$grpahdata              = $this->transaction_model->getgraphvalues($list, $company_id, 'All', 'All', 'All', 'All', $startdate, $enddate, '', '');
        $count_transaction_list = $this->transaction_model->transaction_details($list, $company_id, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        
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
        $all_transaction_list       = $this->transaction_model->transaction_details($list, $company_id, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/companytransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('grpahdata', $grpahdata)->bind('passengerlist', $passengerlist)->bind('gateway_details', $gateway_details)->bind('id', $id)->bind('ListCount', $count_transaction_list);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    //Manager Transactions without Search action 
    public function action_managertransaction()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[3]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'M') {
            $_REQUEST['manager_id'] = $user_createdby;
        }
        if ($usertype == 'A') {
            $this->request->redirect("admin/login");
        }
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        } else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }        
        
        $company_id             = $this->company_id;
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction();
        $taxilist               = $this->transaction_model->gettaxidetails($company_id, $user_createdby);
        $driverlist             = $this->transaction_model->getdriverdetails($company_id, $user_createdby);
        $passengerlist          = $this->transaction_model->getpassengerdetails($company_id, $user_createdby);
        
     $startdate              = date('Y-m-01 00:00:00');
        $enddate                = date('Y-m-d 23:59:59');
        $count_transaction_list = $this->transaction_model->transaction_details($list, $company_id, $user_createdby, 'All', 'All', 'All', $startdate, $enddate, '', '');
        $grpahdata              = $this->transaction_model->getgraphvalues($list, $company_id, $user_createdby, 'All', 'All', 'All', $startdate, $enddate, '', '');
        $gateway_details        = $this->common_model->gateway_details();
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
        //echo $user_createdby;exit;
        $all_transaction_list       = $this->transaction_model->transaction_details($list, $company_id, $user_createdby, 'All', 'All', 'All', $startdate, $enddate, '', '',$offset, REC_PER_PAGE);
        //($list, $company_id, 'All', 'All', 'All', 'All', $startdate, $enddate, '', '')
		//echo '<pre>';print_r($_REQUEST);exit;
        //****pagination ends here***//
        //send data to view file
        
        $view                       = View::factory('admin/report/managertransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('grpahdata', $grpahdata)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('gateway_details', $gateway_details)->bind('id', $id);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }
    public function action_managertransaction_list()
    {
        $find_url       = explode('/', $_SERVER['REQUEST_URI']);
        $split          = explode('?', $find_url[2]);
        $list           = $split[0];
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'A') {
            $this->request->redirect("admin/login");
        }
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($list == 'all') {
            $page_title = __("all_transaction_log");
        } elseif ($list == 'success') {
            $page_title = __("success_transaction_log");
        } elseif ($list == 'cancelled') {
            $page_title = __("cancelled_transaction_log");
        } elseif ($list == 'rejected') {
            $page_title = __("rejected_trip_log");
        } else {
            $page_title = __("all_transaction_log");
            $list       = 'all';
        }
        $startdate   = trim(Html::chars($_REQUEST['startdate']));
        $enddate     = trim(Html::chars($_REQUEST['enddate']));
        $taxiid      = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id   = trim(Html::chars($_REQUEST['driver_id']));
        $passengerid = trim(Html::chars($_REQUEST['passengerid']));
        if (isset($_REQUEST['transaction_id'])) {
            $transaction_id = trim(Html::chars($_REQUEST['transaction_id']));
        } else {
            $transaction_id = "";
        }
        if (isset($_REQUEST['payment_type'])) {
            $payment_type = trim(Html::chars($_REQUEST['payment_type']));
        } else {
            $payment_type = "";
        }
        
        
        $company_id             = $this->company_id;
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction();
        $taxilist               = $this->transaction_model->gettaxidetails($company_id, $user_createdby);
        $passengerlist          = $this->transaction_model->getpassengerdetails($company_id, $user_createdby);
        $driverlist             = $this->transaction_model->getdriverdetails($company_id, $user_createdby);
        $count_transaction_list = $this->transaction_model->transaction_details($list, $company_id, $user_createdby, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        $grpahdata              = $this->transaction_model->getgraphvalues($list, $company_id, $user_createdby, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        $gateway_details        = $this->common_model->gateway_details();
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
        $all_transaction_list       = $this->transaction_model->transaction_details($list, $company_id, $user_createdby, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type,$offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/managertransaction')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('grpahdata', $grpahdata)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('gateway_details', $gateway_details)->bind('id', $id);
        $this->page_title           = __('transaction_list');
        $this->template->title      = SITENAME . " | " . __('transaction_list');
        $this->template->page_title = __('transaction_list');
        $this->template->content    = $view;
    }
    /**
     ****Transaction List****
     * function to get overall reaject/cancel trip list
     */
    public function action_adminrejcancel()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction($usertype);
        $taxilist               = $this->transaction_model->gettaxidetails('', '');
        $passengerlist          = $this->transaction_model->getpassengerdetails('', '');
        $driverlist             = $this->transaction_model->getdriverdetails('', '');
        $managerlist            = $this->transaction_model->getmanagerdetails('');
        $count_transaction_list = $this->transaction_model->count_rejcancel_list('All', 'All', 'All', 'All', 'All', '', '');
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
        $all_transaction_list       = $this->transaction_model->rejcancel_details('All', 'All', 'All', 'All', 'All', '', '', $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/adminrejcancel')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('id', $id);
        $this->page_title           = __('cancelledtrip_logs');
        $this->template->title      = SITENAME . " | " . __('cancelledtrip_logs');
        $this->template->page_title = __('cancelledtrip_logs');
        $this->template->content    = $view;
    }
    public function action_adminrejcancel_list()
    {
        $user_createdby = $this->user_createdby;
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $company                = trim(Html::chars($_REQUEST['filter_company']));
        $startdate              = trim(Html::chars($_REQUEST['startdate']));
        $enddate                = trim(Html::chars($_REQUEST['enddate']));
        $taxiid                 = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id              = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id             = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid            = trim(Html::chars($_REQUEST['passengerid']));
        
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction();
        $taxilist               = $this->transaction_model->gettaxidetails($company, $manager_id);
        $passengerlist          = $this->transaction_model->getpassengerdetails($company, $manager_id);
        $driverlist             = $this->transaction_model->getdriverdetails($company, $manager_id);
        $managerlist            = $this->transaction_model->getmanagerdetails($company);
        $count_transaction_list = $this->transaction_model->count_rejcancel_list($company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate);
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
        $all_transaction_list       = $this->transaction_model->rejcancel_details($company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $offset, REC_PER_PAGE);
        //****pagination ends here***//
        //send data to view file 
        $view                       = View::factory('admin/report/adminrejcancel')->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('all_transaction_list', $all_transaction_list)->bind('taxilist', $taxilist)->bind('driverlist', $driverlist)->bind('managerlist', $managerlist)->bind('passengerlist', $passengerlist)->bind('get_allcompany', $get_allcompany)->bind('id', $id);
        $this->page_title           = __('cancelledtrip_logs');
        $this->template->title      = SITENAME . " | " . __('cancelledtrip_logs');
        $this->template->page_title = __('cancelledtrip_logs');
        $this->template->content    = $view;
    }
   
    
    //Function used to get company taxi by company id
    public function action_gettaxilist()
    {
        $output             = '';
        $company_id         = arr::get($_REQUEST, 'company_id');
        
        $gettaxi_details    = $this->transaction_model->gettaxidetails($company_id, '');
        if (count($gettaxi_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type">
							<select name="taxiid" id="taxiid" class="select2">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($gettaxi_details as $modellist) {
                $output .= '<option value="' . $modellist["taxi_id"] . '"';
                $output .= '>' . $modellist["taxi_no"] . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="taxiid" id="taxiid">
					   <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    //Function used to get company driver by company id
    public function action_getdriverlist()
    {
        $output             = '';
        $company_id         = arr::get($_REQUEST, 'company_id');
        
        $getdriver_details  = $this->transaction_model->getdriverdetails($company_id, '');
        if (count($getdriver_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type">
							<select name="driver_id" id="driver_id" class="select2">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($getdriver_details as $modellist) {
                $drivername = $modellist["name"] . ' ' . $modellist["lastname"];
                $output .= '<option value="' . $modellist["id"] . '"';
                $output .= '>' . ucfirst($drivername) . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="driver_id" id="driver_id">
					    <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    //Function used to get company passenger by company id
    public function action_getpassengerlist()
    {
        $output               = '';
        $company_id           = arr::get($_REQUEST, 'company_id');
        
        $getpassenger_details = $this->transaction_model->getpassengerdetails($company_id, '');
        if (count($getpassenger_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type">
							<select name="passengerid" id="passengerid" class="select2">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($getpassenger_details as $key => $modellist) {
                $passengername = ucfirst($modellist["name"]);
                $output .= '<option value="' . $modellist["id"] . '"';
                $output .= '>' . $passengername . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="passengerid" id="passengerid">
					    <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    //Function used to get company Manager by company id
    public function action_getmanagerlist()
    {
        $output             = '';
        $company_id         = arr::get($_REQUEST, 'company_id');
        
        $getmanager_details = $this->transaction_model->getmanagerdetails($company_id);
        if (count($getmanager_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type" onchange="getmanagertaxi(this.value),getmanagerdriver(this.value),getcompanypassengers(filter_company.value)">
							<select name="manager_id" id="manager_id">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($getmanager_details as $modellist) {
                $managername = $modellist["name"] . ' ' . $modellist["lastname"];
                $output .= '<option value="' . $modellist["id"] . '"';
                $output .= '>' . ucfirst($managername) . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="manager_id" id="manager_id">
					    <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    //Function used to get manger taxi by company id
    public function action_getmanager_taxilist()
    {
        $output             = '';
        $company_id         = arr::get($_REQUEST, 'company_id');
        $manager_id         = arr::get($_REQUEST, 'manager_id');
        
        $gettaxi_details    = $this->transaction_model->getmanager_taxidetails($company_id, $manager_id);
        if (count($gettaxi_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type">
							<select name="taxiid" id="taxiid" class="select2">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($gettaxi_details as $modellist) {
                $output .= '<option value="' . $modellist["taxi_id"] . '"';
                $output .= '>' . $modellist["taxi_no"] . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="taxiid" id="taxiid">
					   <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    //Function used to get company driver by company id
    public function action_getmanager_driverlist()
    {
        $output             = '';
        $company_id         = arr::get($_REQUEST, 'company_id');
        $manager_id         = arr::get($_REQUEST, 'manager_id');
        
        $getdriver_details  = $this->transaction_model->getmanager_driverdetails($company_id, $manager_id);
        if (count($getdriver_details) > 0) {
            $output .= '<div class="selector" id="uniform-user_type">
							<select name="driver_id" id="driver_id" class="select2">
						   <option value="All">' . __('all_label') . '</option>';
            foreach ($getdriver_details as $modellist) {
                $drivername = $modellist["name"] . ' ' . $modellist["lastname"];
                $output .= '<option value="' . $modellist["id"] . '"';
                $output .= '>' . ucfirst($drivername) . '</option>';
            }
            $output .= '</select></div>';
        } else {
            $output .= '<div class="selector" id="uniform-user_type">
					<select name="driver_id" id="driver_id">
					    <option value="">' . __('select_label') . '</option></select></div>';
        }
        echo $output;
        exit;
    }
    /**
     * ****action_export()****
     * @param 
     * @return functionality for csv export
     */
    public function action_export()
    {
        $cid = (trim(Html::chars($_REQUEST['filter_company']))!=0)?trim(Html::chars($_REQUEST['filter_company'])):'';
        $company           = $cid;
        $startdate         = trim(Html::chars($_REQUEST['startdate']));
        $enddate           = trim(Html::chars($_REQUEST['enddate']));
        $taxiid            = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id         = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id        = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid       = trim(Html::chars($_REQUEST['passengerid']));
        $transaction_id    = trim(Html::chars($_REQUEST['transaction_id']));
        $payment_type      = trim(Html::chars($_REQUEST['payment_type']));
       /* $startdate         = date('2014-01-01 00:00:00');
        $enddate           = date('2016-04-31 00:00:00'); */
        $startdate              = date('Y-m-01 00:00:00');
        $enddate                = date('Y-m-d 23:59:59');
        
        
        $find_url          = explode('/', $_SERVER['REQUEST_URI']);
        $split             = explode('?', $find_url[3]);
        $list              = $split[0];
        //export csv data retrieved here
        $list_data = $this->transaction_model->export_data($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        //echo '<pre>';print_r($list_data);exit;
        if(count($list_data) > 0){
            //set data to view file
            $view = View::factory('admin/transaction_xls')
                    ->bind('results',$list_data)
                    ->bind('list',$list);
            $file = 'Transaction_Export';
            $filename = $file . "_" . date("Y-m-d_H-i", time());
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Content-Length: " . strlen($view));
            header("Content-type: application/vnd.ms-excel");
            header("Content-type: application/octet-stream, charset=UTF-8; encoding=UTF-8");
            header('Content-Type: text/csv; charset=utf-8');
            header("Content-Disposition: attachment; filename=" . $filename . ".xls");
            echo $view;
            exit;
        } else {
            Message::error(__('no_data'));
            $this->request->redirect('transaction/admintransaction/'.$list);
        }
    }
    /**
     * ****action_export()****
     * @param 
     * @return functionality for csv export
     */
    public function action_exportpdf()
    {
        $company           = trim(Html::chars($_REQUEST['filter_company']));
        $startdate         = trim(Html::chars($_REQUEST['startdate']));
        $enddate           = trim(Html::chars($_REQUEST['enddate']));
        $taxiid            = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id         = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id        = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid       = trim(Html::chars($_REQUEST['passengerid']));
        $transaction_id    = trim(Html::chars($_REQUEST['transaction_id']));
        $payment_type      = trim(Html::chars($_REQUEST['payment_type']));
        /*$startdate         = date('2014-01-01 00:00:00');
        $enddate           = date('2016-04-31 00:00:00');*/
        $startdate              = date('Y-m-01 00:00:00');
        $enddate                = date('Y-m-d 23:59:59');
        $find_url          = explode('/', $_SERVER['REQUEST_URI']);
        $split             = explode('?', $find_url[3]);
        $list              = $split[0];
       /* if ($list == 'all') {
        } else if ($list == 'success') {
        } else if ($list == 'cancelled') {
        } else if ($list == 'rejected') {
        } else {
            $company = $list;
            $list    = 'all';
        }*/
        //export csv data retrieved here
        $list1     = $this->transaction_model->export_data($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id, $payment_type);
        if(count($list1) > 0){
            $html = View::factory('admin/transaction_pdf')
                    ->bind('list1', $list1)
                    ->bind('list', $list)
                    ->bind('enddate', $enddate)
                    ->bind('startdate', $startdate);
            $file       = 'Transaction_Report';
            $filename = $file . "_" . date("Y-m-d_H-i", time());
            $html     = preg_replace("<tbody>", " ", $html);
            $html     = preg_replace("</tbody>", " ", $html);
            /*echo '<pre>';
            echo $html;
            echo '</pre>';
            exit;*/
            ob_clean();
            $generate_pdf = $this->manage_model->generate_pdf($html, $filename);
        } else {
            Message::error(__('no_data'));
            $this->request->redirect('transaction/admintransaction/'.$list);
        }
    }
    public function action_accountexport()
    {
        //$company,$taxiid,$driver_id,$startdate,$enddate,
        $company           = trim(Html::chars($_REQUEST['filter_company']));
        $startdate         = trim(Html::chars($_REQUEST['startdate']));
        $enddate           = trim(Html::chars($_REQUEST['enddate']));
        $taxiid            = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id         = trim(Html::chars($_REQUEST['driver_id']));
        $manager_id        = trim(Html::chars($_REQUEST['manager_id']));
        $passengerid       = trim(Html::chars($_REQUEST['passengerid']));
        $transaction_id    = trim(Html::chars($_REQUEST['transaction_id']));
        //import admin model
        $transaction_model = Model::factory('transaction');
        $find_url          = explode('/', $_SERVER['REQUEST_URI']);
        $split             = explode('?', $find_url[2]);
        $list              = $split[0];
        $list              = 'all';
        //export csv data retrieved here
        $list              = $transaction_model->accountexport_data($list, $company, $manager_id, $taxiid, $driver_id, $passengerid, $startdate, $enddate, $transaction_id);
        //set data to view file
        //$view = View::factory('admin/admin_user_list')
        //->bind('UserList',$UserList);
        //$this->template->content = $view;
    }
    /**** For Graph **************/
    public function action_gettriptotals()
    {
        $this->auto_render = false;
        $transaction_model = Model::factory('transaction');
        $company           = trim(Html::chars($_REQUEST['filter_company']));
        $startdate         = trim(Html::chars($_REQUEST['startdate']));
        $enddate           = trim(Html::chars($_REQUEST['enddate']));
        $taxiid            = trim(Html::chars($_REQUEST['taxiid']));
        $driver_id         = trim(Html::chars($_REQUEST['driver_id']));
        $split_time        = explode(":", $waiting_time);
        $year              = date('Y');
        for ($i = 1; $i <= 12; $i++) {
            $count = $model_dashboard->getUsers($i, $year);
            if ($count == '' || $count == 'NULL') {
                $count = "0";
            }
            $data['users'][] = array(
                'count' => $count
            );
        }
        $json            = array();
        $json['success'] = $data;
        echo json_encode($json);
    }
    //Transactions Details
    public function action_transaction_details()
    {
        $user_createdby      = $this->user_createdby;
        $usertype            = $this->usertype;
        $company_id          = $this->company_id;
        $log_id              = $this->request->param('id');
        $transaction_details = $this->transaction_model->viewtransaction_details($log_id);
        
        if (count($transaction_details) == 0) {
            if ($usertype == 'A') {
                $this->request->redirect("transaction/admintransaction/all");
            } else if ($usertype == 'C') {
                $this->request->redirect("transaction/companytransaction/all");
            } else {
                $this->request->redirect("transaction/managertransaction/all");
            }
        }
        $driver_tracking            = $this->transaction_model->viewdriver_tracking($log_id);
        //print_r($driver_tracking);exit;
        //send data to view file 
        $view                       = View::factory('admin/transaction_details')->bind('transaction_details', $transaction_details)->bind('driver_tracking', $driver_tracking);
        $this->page_title           = __('transaction_list');
        $this->template->title      = SITENAME . " | " . __('transaction_list');
        $this->template->page_title = __('transaction_list');
        $this->template->content    = $view;
    }
    //Braintree Settlement
    public function action_settlement_list()
    {
        $user_createdby         = $this->user_createdby;
        $usertype               = $this->usertype;
        $company_id             = $this->company_id;
        $log_id                 = explode('/', $_SERVER['REQUEST_URI']);
        $company_id             = ($company_id != '0') ? $company_id : '';
        $current_date           = $this->common_model->getcompany_all_currenttimestamp($company_id);
        $default_start          = date('Y-m-d', strtotime('-1 month', strtotime($current_date)));
        $default_end            = date('Y-m-d', strtotime($current_date));
        $keyword                = trim(Html::chars(isset($_GET['keyword']) ? $_GET['keyword'] : ''));
        $filter_company         = (isset($_GET['filter_company']) ? $_GET['filter_company'] : '');
        $start_date             = isset($_GET['startdate']) ? $_GET['startdate'] : $default_start;
        $end_date               = isset($_GET['enddate']) ? $_GET['enddate'] : $default_end;
        $start_date         = date('2014-01-01 00:00:00');
        $end_date           = date('2016-04-31 00:00:00');
        
        $get_allcompany         = $this->transaction_model->get_allcompany_tranaction($usertype);
        $count_transaction_list    = $this->transaction_model->braintree_transaction_details($keyword, $start_date, $end_date, $company_id, $filter_company,'','',true);
        //pagination loads here
        $page_no                = isset($_GET['page']) ? $_GET['page'] : 0;
        if ($page_no == 0 || $page_no == 'index')
            $page_no = PAGE_NO;
        $offset              = REC_PER_PAGE * ($page_no - 1);
        $pag_data            = Pagination::factory(array(
            'current_page' => array(
                'source' => 'query_string',
                'key' => 'page'
            ),
            'items_per_page' => REC_PER_PAGE,
            'total_items' => $count_transaction_list,
            'view' => 'pagination/punbb'
        ));
        $transactionid_array = array();
        $transaction_details = $this->transaction_model->braintree_transaction_details($keyword, $start_date, $end_date, $company_id, $filter_company, REC_PER_PAGE, $offset);
        foreach ($transaction_details as $key => $val) {
            if ($val['payment_status'] != 'settled') {
                $transactionid_array[$key] = $val['transaction_id'] . ":" . $val['trip_id'];
            }
        }
        if (!empty($transactionid_array) && $usertype != 'A') {
            $update_settlement_status = $this->transaction_model->update_settlement_status($transactionid_array, $company_id);
        }
        if (isset($_POST['update'])) {
            $transaction_array = isset($_POST['uniqueId']) ? $_POST['uniqueId'] : '';
            if ($company_id > 0) {
                $paypal_details           = $this->common_model->company_payment_details($company_id);
                $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
                $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
                $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
                $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
                $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
                $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
                $payment_gateway            = isset($paypal_details[0]['gateway_name']) ? $paypal_details[0]['gateway_name'] : "";
                $street                   = COMPANY_STREET_ADDR;
                $city                     = COMPANY_LOGIN_CITY_NAME;
                $state                    = COMPANY_LOGIN_STATE_NAME;
                $country_code             = COMPANY_LOGIN_ISO_COUNTRYCODE;
                $currency_code            = COMPANY_CURRENCY_FORMAT;
                $zipcode                  = COMPANY_ZIPCODE;
            } else {
                $paypal_details           = $this->common_model->payment_gateway_details();
                $payment_gateway_username = isset($paypal_details[0]['payment_gateway_username']) ? $paypal_details[0]['payment_gateway_username'] : "";
                $payment_gateway_password = isset($paypal_details[0]['payment_gateway_password']) ? $paypal_details[0]['payment_gateway_password'] : "";
                $payment_gateway_key      = isset($paypal_details[0]['payment_gateway_key']) ? $paypal_details[0]['payment_gateway_key'] : "";
                $currency_format          = isset($paypal_details[0]['gateway_currency_format']) ? $paypal_details[0]['gateway_currency_format'] : "";
                $payment_method           = isset($paypal_details[0]['payment_method']) ? $paypal_details[0]['payment_method'] : "";
                $payment_types            = isset($paypal_details[0]['payment_type']) ? $paypal_details[0]['payment_type'] : "";
                $payment_gateway            = isset($paypal_details[0]['gateway_name']) ? $paypal_details[0]['gateway_name'] : "";
            }
            if(!empty($payment_gateway) && ($payment_gateway=='Brain tree' || $payment_gateway=='Braintree')){
                /** Brain Tree payment gateway **/
                $product_title  = Html::chars('Complete Trip');
                $payment_action = 'sale';
                require_once(APPPATH . 'vendor/braintree-payment/lib/Braintree.php');
                $pay_type = ($payment_method == "L") ? "live" : "sandbox";
                if ($pay_type == "live") {
                    Braintree_Configuration::environment('production');
                } else {
                    Braintree_Configuration::environment('sandbox');
                }
                Braintree_Configuration::merchantId($payment_gateway_username); //your_merchant_id
                Braintree_Configuration::publicKey($payment_gateway_password); //your_public_key
                Braintree_Configuration::privateKey($payment_gateway_key); //your_private_key
                foreach ($transaction_array as $key => $val) {
                    $trans          = explode(":", $val);
                    $transaction_id = $trans[0];
                    $trip_id        = $trans[1];
                    $transaction    = Braintree_Transaction::submitForSettlement($transaction_id);
                    //echo json_encode($transaction);exit;
                    if ($transaction->success == '1') {
                        $result = $transaction->transaction;
                        /*$this->common_model->update(TRANS, array(
                            'payment_status' => str_replace('_', ' ', $result->status)
                        ), 'passengers_log_id', $trip_id);*/
                        
                        //MongoDB update
                        $update_arr =  array('payment_status' => str_replace('_', ' ', $result->status));
                        $match_condition = array('passengers_log_id'=>(int)$trip_id);
                        $update = $this->common_model->mongo_update(MDB_TRANSACTION,$update_arr,$match_condition);
                        if ($result->status == 'Settled') {
                            Message::success(__('Settlement Success for Selected Request'));
                            $this->request->redirect("/transaction/settlement_list");
                        } else {
                            Message::success(__('Selected Request is') . " " . str_replace('_', ' ', ucwords($result->status)));
                            $this->request->redirect("/transaction/settlement_list");
                        }
                    } else {
                        $braintree_message = $transaction->message;
                        $result            = $transaction->transaction;
                        /*$this->common_model->update(TRANS, array(
                            'payment_status' => str_replace('_', ' ', $result->status)
                        ), 'passengers_log_id', $trip_id);*/
                        
                        //MongoDB update
                        $update_arr =  array('payment_status' => str_replace('_', ' ', $result->status));
                        $match_condition = array('passengers_log_id'=>(int)$trip_id);
                        $update = $this->common_model->mongo_update(MDB_TRANSACTION,$update_arr,$match_condition);
                        Message::error($braintree_message);
                        $this->request->redirect("/transaction/settlement_list");
                    }
                }
            } else {
                Message::error('Please select the brain tree as default payment gateway type');
                $this->request->redirect("/transaction/settlement_list");
            }
        }
        //send data to view file 
        $view                       = View::factory('admin/manage_settlement')->bind('Offset', $offset)->bind('action', $action)->bind('current_date', $current_date)->bind('srch', $_REQUEST)->bind('company_id', $company_id)->bind('pag_data', $pag_data)->bind('get_allcompany', $get_allcompany)->bind('transaction_details', $transaction_details)->bind('ListCount',$count_transaction_list);
        $this->page_title           = __('braintree_transaction_list');
        $this->template->title      = SITENAME . " | " . __('braintree_transaction_list');
        $this->template->page_title = __('braintree_transaction_list');
        $this->template->content    = $view;
    }
    // End Braintree Settlement
    public function action_invoice()
    {
        $usertype       = $this->usertype;
        if ($usertype == 'C') {
            $this->request->redirect("company/login");
        }
        if ($usertype == 'M') {
            $this->request->redirect("manager/login");
        }
        $search_user = isset($_GET['search_user'])?$_GET['search_user']:'';
        if($search_user != '')
        {
            
        }
        $passenger  = isset($_GET['passenger'])?$_GET['passenger']:'';
        $pay_status = isset($_GET['pay_status'])?$_GET['pay_status']:'';
        
        $page_title     = __('schedule_inv');
        $inv_list_c     = $this->transaction_model->getAllInvoice($passenger,$pay_status,'','');
        $all_passengers = $this->transaction_model->getpassengerdetails('','');
        
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
            'total_items' => $inv_list_c,
            'view' => 'pagination/punbb'
        ));
        $invoice_list   = $this->transaction_model->getAllInvoice($passenger,$pay_status,$offset, REC_PER_PAGE);
        $view = View::factory('admin/report/schedule_invoice')
                ->bind('invoice_list', $invoice_list)
                ->bind('passenger_list',$all_passengers)
                ->bind('Offset', $offset)
                ->bind('srch', $_REQUEST)
                ->bind('pag_data', $pag_data);
        $this->page_title           = $page_title;
        $this->template->title      = $page_title . " | " . SITENAME;
        $this->template->page_title = $page_title;
        $this->template->content    = $view;
    }

    public function action_driver_sales_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('driver_sales_report');
        $this->selected_page_title = __('driver_sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
        $current_time  = $get_company_time_details['current_time']; //S

        $cid                       = $this->company_id;
       // $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');

        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-01 00:00:00',strtotime($current_time));
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d H:i:s',strtotime($current_time));
        $year = isset($_REQUEST['year'])?$_REQUEST['year']:date('Y',strtotime($current_time));
        $month = isset($_REQUEST['month'])?$_REQUEST['month']:date('n',strtotime($current_time));

        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->transaction_model->driver_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->driver_sales_report('','',$start_date,$end_date,$year,$month,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->driver_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->driver_sales_report('','',$start_date,$end_date,$year,$month,'', $offset, REC_PER_PAGE);
        }

	 if(isset($_SESSION['download_set']))
            {
				if (isset($_REQUEST['keyword']))
				{
					$all_company_list = $this->transaction_model->driver_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company, $offset, 1000);
				}
				else
				{
					$all_company_list = $this->transaction_model->driver_sales_report('','',$start_date,$end_date,$year,$month,'', $offset, 1000);
				}
        
                $xls_output = $all_company_list;
                foreach($all_company_list as $key => $val)
                {
                    if($key == 0)
                    {
                        $xls_output['grand_total_amt'] = $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] = $val['total_pending_amt'];
                        $xls_output['grand_total_count'] = $val['total_count'];
                    }
                    else
                    {
                        $xls_output['grand_total_amt'] += $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] += $val['total_pending_amt'];
                        $xls_output['grand_total_count'] += $val['total_count'];
                    }
                }
                $export_table_header = array(__('driver_name'),__('total_amount'),__('total_pending_amt'),__('total_trips'));
                $export_table_field_select = array('driver_name','total_amount','total_pending_amt','total_count');

                $heading = __('driver_sales_report');

                $total_fare='';

                $month_name = date("F", mktime(0, 0, 0, $month, 10));

                $sub_heading = $month_name.','.$year;


                $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
            }

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/driver_sales')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

     public function action_limo_sales_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('limo_sales_report');
        $this->selected_page_title = __('limo_sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
        $current_time  = $get_company_time_details['current_time']; //S

        $cid                       = $this->company_id;
       // $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');

        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-01 00:00:00',strtotime($current_time));
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d H:i:s',strtotime($current_time));
        $year = isset($_REQUEST['year'])?$_REQUEST['year']:date('Y',strtotime($current_time));
        $month = isset($_REQUEST['month'])?$_REQUEST['month']:date('n',strtotime($current_time));

        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->transaction_model->limo_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->limo_sales_report('','',$start_date,$end_date,$year,$month,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->limo_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->limo_sales_report('','',$start_date,$end_date,$year,$month,'', $offset, REC_PER_PAGE);
        }
          if(isset($_SESSION['download_set']))
            {
                $xls_output = $all_company_list;
                foreach($all_company_list as $key => $val)
                {
                    if($key == 0)
                    {
                        $xls_output['grand_total_amt'] = $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] = $val['total_pending_amt'];
                        $xls_output['grand_total_count'] = $val['total_count'];
                    }
                    else
                    {
                        $xls_output['grand_total_amt'] += $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] += $val['total_pending_amt'];
                        $xls_output['grand_total_count'] += $val['total_count'];
                    }
                }
                $export_table_header = array(__('create_date'),__('total_amount'),__('total_pending_amt'),__('total_trips'));
                $export_table_field_select = array('create_day','total_amount','total_pending_amt','total_count');

                $heading = __('grand_limo_sales_report');

                $total_fare='';

                $month_name = date("F", mktime(0, 0, 0, $month, 10));

                $sub_heading = $month_name.','.$year;


                $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
            }

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/limo_sales')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

     public function action_daily_sales_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('daily_sales_report');
        $this->selected_page_title = __('daily_sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
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
            $count_company_list = $this->transaction_model->daily_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->daily_sales_report('','',$start_date,$end_date,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->daily_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->daily_sales_report('','',$start_date,$end_date,'', $offset, REC_PER_PAGE);
        }

        if(isset($_SESSION['download_set']))
        {
            $xls_output = $all_company_list;
           foreach($all_company_list as $key => $val)
            {
                if($key == 0)
                {
                    $xls_output['grand_total_amt'] = $val['total_amount'];
                    $xls_output['grand_total_pending_amt'] = $val['total_pending_amt'];
                    $xls_output['grand_total_wallet_amt'] = $val['total_wallet'];
                }
                else
                {
                    $xls_output['grand_total_amt'] += $val['total_amount'];
                    $xls_output['grand_total_pending_amt'] += $val['total_pending_amt'];
                    $xls_output['grand_total_wallet_amt'] += $val['total_wallet'];
                }
            }   

            $export_table_header = array(__('trip_id'),__('passenger_name'),__('mobile'),__('pickupplace'),__('payment_type'),__('fare'),__('pending_amt'),__('wallet_amount'),__('fare_notes'));
            $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','wallet_amount_used','fare_notes');

            $heading = __('daily_sales_report');

            $total_fare='';

            $sub_heading = Date('d F ,Y',strtotime($start_date))." -  ".Date('d F ,Y',strtotime($end_date));

            $this->action_daily_sales_export($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
        }

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/daily_sales')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

    public function action_consolidated_driver_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('consolidated_driver_report');
        $this->selected_page_title = __('consolidated_driver_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
        $current_time  = $get_company_time_details['current_time']; //S

        $cid                       = $this->company_id;
       // $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');

        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-d 00:00:00',strtotime($current_time));
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d H:i:s',strtotime($current_time));
        $search_date = isset($_REQUEST['search_date'])?$_REQUEST['search_date']:date('Y-m-d',strtotime($current_time));

        if(isset($_SESSION['download_set']) && isset($_REQUEST['driver_exportt_id'])){
            $driver_export_id = $_REQUEST['driver_exportt_id'];
        }else{
            $driver_export_id = '';
        }
        
        //print_r($_REQUEST);exit;
        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->transaction_model->consolidated_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->consolidated_sales_report('','',$start_date,$end_date,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->consolidated_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset, REC_PER_PAGE,'',$driver_export_id);

            $all_shift_logs = $this->transaction_model->driver_shift_logs(trim(Html::chars($_REQUEST['keyword'])),'',$start_date,$end_date,$driver_export_id);
        }
        else
        {
            $all_company_list = $this->transaction_model->consolidated_sales_report('','',$start_date,$end_date,'', $offset, REC_PER_PAGE,'',$driver_export_id);

            $all_shift_logs = $this->transaction_model->driver_shift_logs('','',$start_date,$end_date,$driver_export_id);
        }

        if(isset($_SESSION['download_set']))
        {
            //print_r($all_shift_logs[0]['tripdet']);exit;
            $xls_output = $all_company_list;
            $export_table_header = array(__('driver_name'));
            $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','fare_notes');

            $heading = __('consolidated_driver_report');

            $total_fare='';

            $sub_heading = Date('d F ,Y',strtotime($start_date))." -  ".Date('d F ,Y',strtotime($end_date));

            $this->action_consolidated_sales_export($xls_output,$all_shift_logs,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
        }

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 

        //print_r($all_company_list);exit;

        /*foreach($all_company_list as $listings)
        {
            $id = $listings['_id'];
            $driver_logs_key = Commonfunction::get_array_id($id,$all_shift_logs);
            $driver_logs = isset($all_shift_logs[$driver_logs_key])?$all_shift_logs[$driver_logs_key]:array();
            print_r($driver_logs);exit;

             foreach($driver_logs as $key => $vall) { print_r($vall);exit;
                 //S.No Increment
                 //=======
                 $sno++;
                
                 //For Odd / Even Rows
                 //===================
                 $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  

                $create_day = isset($val['create_day'])?$val['create_day']:'';
                $status = isset($val['status'])?$val['status']:'Shift IN';

        }
        }
        exit;*/

/*
        foreach($all_shift_logs as $listings)
        {
            $id = $listings['_id'];
            $driver_logs_key = Commonfunction::get_array_id($id,$all_company_list);
            $driver_logs = isset($all_company_list[$driver_logs_key])?$all_company_list[$driver_logs_key]:array();
            print_r($driver_logs['tripdet']);exit;

            $listings['tripdet'] = $all_company_list[$driver_logs];

            print_r($listings['tripdet']);exit;

             foreach($driver_logs as $key => $vall) { print_r($vall);exit;
                 //S.No Increment
                 //=======
                 $sno++;
                
                 //For Odd / Even Rows
                 //===================
                 $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  

                $create_day = isset($val['create_day'])?$val['create_day']:'';
                $status = isset($val['status'])?$val['status']:'Shift IN';

                 $pickup = isset($val['pickup'])?$val['pickup']:'';
                $fare = isset($val['fare'])?$val['fare']:0;
                $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
                $wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used']:0;
                $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
                $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
                $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
                $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
                $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
                $phone = isset($val['phone'])?$val['phone']:'';
                $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
                $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';
                $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';

                $pickup_time_date = isset($val['pickup_time'])? Commonfunction::convertphpdate('d/m/Y',$val['pickup_time']):'';
                $pickup_time_only = isset($val['pickup_time'])? Commonfunction::convertphpdate('H:i:s',$val['pickup_time']):'';        

                $drop_time_date = isset($val['drop_time'])? Commonfunction::convertphpdate('Y-m-d',$val['drop_time']):'';
                $drop_time_only = isset($val['drop_time'])? Commonfunction::convertphpdate('H:i:s',$val['drop_time']):'';

                echo $drop_time_date;


        }
        }
        exit;*/
    
        

        $view                    = View::factory('admin/report/consolidated_driver')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list)->bind('all_shift_logs',$all_shift_logs);
        $this->template->content = $view;
    }

    public function action_passenger_sales_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('passenger_sales_report');
        $this->selected_page_title = __('passenger_sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
        $current_time  = $get_company_time_details['current_time']; //S

        $cid                       = $this->company_id;
       // $availabilitycount         = $this->add_model->validate_packagedriver($cid);
        //get form submit request
        $search_post = arr::get($_REQUEST, 'search_user');

        $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-01 00:00:00',strtotime($current_time));
        $end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d H:i:s',strtotime($current_time));
        $year = isset($_REQUEST['year'])?$_REQUEST['year']:date('Y',strtotime($current_time));
        $month = isset($_REQUEST['month'])?$_REQUEST['month']:date('n',strtotime($current_time));

        //Post results for search 
        if (isset($_REQUEST['keyword'])) {
            if ($usertype != 'A') {
                $company = trim(Html::chars($company_id));
            } else {
                $company = trim(Html::chars(isset($_REQUEST['filter_company'])));
            }
            $count_company_list = $this->transaction_model->passenger_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->passenger_sales_report('','',$start_date,$end_date,$year,$month,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->passenger_sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$year,$month,$company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->passenger_sales_report('','',$start_date,$end_date,$year,$month,'', $offset, REC_PER_PAGE);     
        }

        if(isset($_SESSION['download_set']))
            {
                $xls_output = $all_company_list;
                foreach($all_company_list as $key => $val)
                {
                    if($key == 0)
                    {
                        $xls_output['grand_total_amt'] = $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] = $val['total_pending_amt'];
                        $xls_output['grand_total_count'] = $val['total_count'];
                    }
                    else
                    {
                        $xls_output['grand_total_amt'] += $val['total_amount'];
                        $xls_output['grand_total_pending_amt'] += $val['total_pending_amt'];
                        $xls_output['grand_total_count'] += $val['total_count'];
                    }
                }
                $export_table_header = array(__('passenger_name'),__('total_amount'),__('total_pending_amt'),__('total_wallet_amt'),__('total_trips'));
                $export_table_field_select = array('driver_name','total_amount','total_pending_amt','total_count');

                $heading = __('passenger_sales_report');

                $total_fare='';

                $month_name = date("F", mktime(0, 0, 0, $month, 10));

                $sub_heading = $month_name.','.$year;


                $this->action_create_the_document($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading);
            }

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/passenger_sales')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;
    }

    
    public function action_sales_report()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('sales_report');
        $this->selected_page_title = __('sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
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
            $count_company_list = $this->transaction_model->sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);
            $count_unused_wallet_list = $this->transaction_model->passengers_unused_wallet_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);        

        }
        else
        {
           $count_company_list = $this->transaction_model->sales_report('','',$start_date,$end_date,'',NULL,NULL,TRUE);  
           $count_unused_wallet_list = $this->transaction_model->passengers_unused_wallet_report('','',$start_date,$end_date,'',NULL,NULL,TRUE);        

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

	$page_no_2 = isset($_GET['page_2']) ? $_GET['page_2'] : 0;
	    if ($page_no_2 == 0 || $page_no_2 == 'index')
		$page_no_2 = PAGE_NO;
	    $offset_2      = REC_PER_PAGE * ($page_no_2 - 1);
	    $pag_data_2    = Pagination::factory(array(
		'current_page' => array(
		    'source' => 'query_string',
		    'key' => 'page_2'
		),
		'items_per_page' => REC_PER_PAGE,
		'total_items' => $count_unused_wallet_list,
		'view' => 'pagination/punbb'
	    ));            


        if (isset($_REQUEST['keyword']))
        {
            $all_company_list = $this->transaction_model->sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset, REC_PER_PAGE);
            $passengers_unused_wallet_list = $this->transaction_model->passengers_unused_wallet_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset_2, REC_PER_PAGE);        

//             echo '<pre>';
// print_r($all_company_list);
// echo '</pre>';
// exit();
}

        else
        {
            $all_company_list = $this->transaction_model->sales_report('','',$start_date,$end_date,'', $offset, REC_PER_PAGE);
            $passengers_unused_wallet_list = $this->transaction_model->passengers_unused_wallet_report('','',$start_date,$end_date,'', $offset_2, REC_PER_PAGE);        
        }


        if(isset($_SESSION['download_set']))
        {
            $xls_output = $all_company_list;

            $xls_unused_output = $passengers_unused_wallet_list;

            
            $export_table_header = array(__('trip_id'),__('passenger_name'),__('mobile'),__('pickupplace'),__('payment_type'),__('fare'),__('pending_amt'),__('fare_notes'),__('DriverCode'),__('PassengerWalletBeforeTrip'));
            $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','fare_notes','driver_code','wallet_amt_before_payment');

            $heading = 'Grand Limo Renting & Leasing Cars Co.';

            $total_fare='';

            $sub_heading = Date('d F ,Y',strtotime($start_date))." -  ".Date('d F ,Y',strtotime($end_date));

            $this->action_sales_export($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading,$start_date,$end_date,$xls_unused_output);
        }

        //echo $pag_data;exit;

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/sales_report')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('pag_data_2', $pag_data_2)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list)->bind('passengers_unused_wallet_list', $passengers_unused_wallet_list);
        $this->template->content = $view;
    }

    public function action_sales_report_test()
    {
        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('sales_report');
        $this->selected_page_title = __('sales_report');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
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
            $count_company_list = $this->transaction_model->sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->sales_report('','',$start_date,$end_date,'',NULL,NULL,TRUE);  
            $passengers_unused_wallet_list = $this->transaction_model->passengers_unused_wallet_report('','',$start_date,$end_date,'', $offset_2, REC_PER_PAGE);        
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
            $all_company_list = $this->transaction_model->sales_report(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->sales_report('','',$start_date,$end_date,'', $offset, REC_PER_PAGE);
        }

        if(isset($_SESSION['download_set']))
        {
            $xls_output = $all_company_list;
            $xls_unused_output = $passengers_unused_wallet_list;
            $export_table_header = array(__('trip_id'),__('passenger_name'),__('mobile'),__('pickupplace'),__('payment_type'),__('fare'),__('pending_amt'),__('fare_notes'));
            $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','fare_notes');

            $heading = 'Grand Limo Renting & Leasing Cars Co.';

            $total_fare='';

            $sub_heading = Date('d F ,Y',strtotime($start_date))." -  ".Date('d F ,Y',strtotime($end_date));

            $this->action_sales_export($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading,$start_date,$end_date,$xls_unused_output);
        }

        //echo $pag_data;exit;

        print "<pre>";
        print_r($all_company_list);
        exit;

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/sales_report')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('pag_data_2', $pag_data_2)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list)->bind('passengers_unused_wallet_list', $passengers_unused_wallet_list);
        $this->template->content = $view;
    }


    public function action_sales_report_daily(){

        $user_createdby            = $this->user_createdby;
        $company_id                = $this->company_id;
        $usertype                  = $this->usertype;
        //Page Title
        $this->page_title          = __('sales_report_daily');
        $this->selected_page_title = __('sales_report_daily');
        //default empty list and offset
        $search_list               = '';
        $offset                    = '';
        //Find page action in view
        $action                    = $this->request->action();

        $get_company_time_details = $this->transaction_model->get_company_time_details('');
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
            $count_company_list = $this->transaction_model->sales_report_daily(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date,$company,NULL,NULL,TRUE);
        }
        else
        {
           $count_company_list = $this->transaction_model->sales_report_daily('','',$start_date,$end_date,'',NULL,NULL,TRUE);  
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
            $all_company_list = $this->transaction_model->sales_report_daily(trim(Html::chars($_REQUEST['keyword'])), trim(Html::chars($_REQUEST['status'])),$start_date,$end_date, $company, $offset, REC_PER_PAGE);
        }
        else
        {
            $all_company_list = $this->transaction_model->sales_report_daily('','',$start_date,$end_date,'', $offset, REC_PER_PAGE);
        }

        if(isset($_SESSION['download_set']))
        {
            $xls_output = $all_company_list;
            $export_table_header = array(__('trip_id'),__('passenger_name'),__('mobile'),__('pickupplace'),__('payment_type'),__('fare'),__('pending_amt'),__('fare_notes'));
            $export_table_field_select = array('trip_id','pass_name','phone','pickup','payment_type','fare','pending_amt','fare_notes');

            $heading = 'Grand Limo Renting & Leasing Cars Co.';

            $total_fare='';

            $sub_heading = Date('d F ,Y',strtotime($start_date))." -  ".Date('d F ,Y',strtotime($end_date));

            $this->action_sales_daily_export($xls_output,$export_table_header,$export_table_field_select,$heading,$total_fare,$sub_heading,$start_date,$end_date);
        }

        //echo $pag_data;exit;

        $get_allcompany          = $this->manage_model->get_allcompany();
        //set data to view file 
        $view                    = View::factory('admin/report/sales_report_daily')->bind('title', $title)->bind('Offset', $offset)->bind('action', $action)->bind('srch', $_REQUEST)->bind('pag_data', $pag_data)->bind('CompanyList', $CompanyList)->bind('availabilitycount', $availabilitycount)->bind('get_allcompany', $get_allcompany)->bind('all_company_list', $all_company_list);
        $this->template->content = $view;

    }

public function action_trips_analytics()
    {
        $analytics_date = $start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:date('Y-m-d');

        $analytics_interval1 = $analytics_date." 00:00:00";
        $analytics_interval2 = $analytics_date." 03:00:00";
        $analytics_interval3 = $analytics_date." 06:00:00";
        $analytics_interval4 = $analytics_date." 09:00:00";
        $analytics_interval5 = $analytics_date." 12:00:00";
        $analytics_interval6 = $analytics_date." 15:00:00";
        $analytics_interval7 = $analytics_date." 18:00:00";
        $analytics_interval8 = $analytics_date." 21:00:00";
        $analytics_interval9 = $analytics_date." 23:59:59";

        $time1 = strtotime($analytics_interval1);
        $time2 = strtotime($analytics_interval2);
        $time3 = strtotime($analytics_interval3);
        $time4 = strtotime($analytics_interval4);
        $time5 = strtotime($analytics_interval5);
        $time6 = strtotime($analytics_interval6);
        $time7 = strtotime($analytics_interval7);
        $time8 = strtotime($analytics_interval8);
        $time9 = strtotime($analytics_interval9);

        $get_shift_drivers = $this->transaction_model->get_shift_drivers($analytics_date);
        $get_trips = $this->transaction_model->get_trips_list($analytics_date);

        $interval1 =$interval2 =$interval3 =$interval4 =$interval5 =$interval6 =$interval7 =$interval8 = 0;
        $driver_list = $driver_list = [];

        foreach($get_shift_drivers as $drivers){

            $shift_start_sec = $drivers['shift_start']->sec;
            $shift_end_sec = $drivers['shift_end']->sec;
          // echo date('d-M-Y h:i:s A',$time1).'--'. date('d-M-Y h:i:s A',$time2).'<br>';
            //echo commonfunction::convertphpdate('d-M-Y h:i:s A',$drivers['shift_start']).'-in/out-'.commonfunction::convertphpdate('d-M-Y h:i:s A',$drivers['shift_end']).'<br>';

            //if( ($time1<$shift_start_sec && $time2>$shift_start_sec) || ($time1<$shift_end_sec && $time2>$shift_end_sec) && ($time2>$shift_start_sec) ){
            if( ($time1<$shift_start_sec && $shift_start_sec<$time2) || ($time1<$shift_end_sec && $time2>$shift_start_sec) ){
                $driver_list['1_3'][] = $drivers['driver_id'];            }
            if( ($time2<$shift_start_sec && $shift_start_sec<$time3) || ($time2<$shift_end_sec && $time3>$shift_start_sec) ){

                $driver_list['3_6'][] = $drivers['driver_id']; 
            }
            if( ($time3<$shift_start_sec && $shift_start_sec<$time4) || ($time3<$shift_end_sec && $time4>$shift_start_sec) ){

                $driver_list['6_9'][] = $drivers['driver_id'];
            }
            if( ($time4<$shift_start_sec && $shift_start_sec<$time5) || ($time4<$shift_end_sec && $time5>$shift_start_sec) ){

                $driver_list['9_12'][] = $drivers['driver_id'];
            }
            if( ($time5<$shift_start_sec && $shift_start_sec<$time6) || ($time5<$shift_end_sec && $time6>$shift_start_sec) ){

                $driver_list['12_15'][] = $drivers['driver_id'];
            }
            if( ($time6<$shift_start_sec && $shift_start_sec<$time7) || ($time6<$shift_end_sec && $time7>$shift_start_sec) ){

                $driver_list['15_18'][] = $drivers['driver_id'];
            }
            if( ($time7<$shift_start_sec && $shift_start_sec<$time8) || ($time7<$shift_end_sec && $time8>$shift_start_sec) ){

                $driver_list['18_21'][] = $drivers['driver_id'];
            }
            if( ($time8<$shift_start_sec && $shift_start_sec<$time9) || ($time8<$shift_end_sec && $time9>$shift_start_sec) ){

                $driver_list['21_24'][] = $drivers['driver_id'];
            }
        }//exit;

        foreach($get_trips as $trips){

            $createdate = $trips['createdate']->sec;
           // echo date('d-M-Y h:i:s A',$time1).'--'. date('d-M-Y h:i:s A',$time2).'<br>';
            //echo commonfunction::convertphpdate('d-M-Y h:i:s A',$trips['shift_start']).'-in/out-'.commonfunction::convertphpdate('d-M-Y h:i:s A',$trips['shift_end']).'<br>';

            //if( ($time1<$shift_start_sec && $time2>$shift_start_sec) || ($time1<$shift_end_sec && $time2>$shift_end_sec) && ($time2>$shift_start_sec) ){
            if( ($time1<$createdate && $createdate<$time2) ){
                $trip_list['1_3']['trips'][] = $trips['_id']; 
                if($trips['travel_status']==1){
                    $trip_list['1_3']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['1_3']['cancelled'][] = $trips['_id']; 
                }          
            }else if( ($time2<$createdate && $createdate<$time3)){
                $trip_list['3_6']['trips'][] = $trips['_id']; 
                if($trips['travel_status']==1){
                    $trip_list['3_6']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['3_6']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($time3<$createdate && $createdate<$time4) ){
                $trip_list['6_9']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['6_9']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['6_9']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($createdate<$shift_start_sec && $createdate<$time5)){
                $trip_list['9_12']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['9_12']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['9_12']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($time5<$createdate && $createdate<$time6)){

                $trip_list['12_15']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['12_15']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['12_15']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($time6<$createdate && $createdate<$time7)){

                $trip_list['15_18']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['15_18']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['15_18']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($time7<$createdate && $createdate<$time8)){

                $trip_list['18_21']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['18_21']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['18_21']['cancelled'][] = $trips['_id']; 
                } 
            }else if( ($time8<$createdate && $createdate<$time9) ){

                $trip_list['21_24']['trips'][] = $trips['_id'];
                if($trips['travel_status']==1){
                    $trip_list['21_24']['completed'][] = $trips['_id']; 
                }else if($trips['travel_status']==4 || $trips['travel_status']==8){
                    $trip_list['21_24']['cancelled'][] = $trips['_id']; 
                } 
            }
        }

      //print_r($trip_list);exit;
        $this->page_title          = __('trip_analytics');
        $this->selected_page_title = __('trip_analytics');        
        $action                    = $this->request->action();	
        $get_allcompany          = [];
        //set data to view file 
        $view                    = View::factory('admin/report/trip_analytics')->bind('title', $title)->bind('action', $action)->bind('srch', $_REQUEST)->bind('all_company_list', $all_company_list)->bind('driver_list',$driver_list)->bind('trip_list',$trip_list);
        $this->template->content = $view;
    }

    /* Sasidharan aug 3 2022 */
    public function action_convert_fare_details_string_to_double() {
        $count = 500;
        $tripDetails = $this->transaction_model->get_trips_fare_details($count);
        if(count($tripDetails) > 0) {
            foreach($tripDetails as $key => $value) {
                if(isset($value['fare_detail'])) {
                    $fare_detail = $value['fare_detail'];
                    foreach ($fare_detail as $key => $farevalue) {
                        if($farevalue['key'] != "fare_note") {
                            $fare_detail[$key]['value'] = (double)$farevalue['value'];
                        }
                    }
                    /* update the trip details */
                    $updateStatus = $this->transaction_model->update_trips_fare_details($value['_id'],$fare_detail);
                    if($updateStatus) {
                        echo $value['_id'] . " - ". 'Updated';
                    } else {
                        echo $value['_id'] . " - ". 'Failed to update';
                    }
                }
            }
        } else {
            echo "No Data Found";
        }
        exit;
    }

} // End Tranaction

