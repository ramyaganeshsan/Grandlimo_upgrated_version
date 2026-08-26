<?php
defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Knetpayment extends Controller_Website
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct(Request $request, Response $response)
	{
		
		parent::__construct($request, $response);		
		$this->payment  = Model::factory('Knetpayment');
		$this->api      = Model::factory('mobileapi115');
	        $this->commonmodel = Model::factory('commonmodel');
		$this->mongo_db = MangoDB::instance('default');
	}
		    
	
	public function action_knet_response(){

		if (empty($_REQUEST)) {
		    $result_url = URL_BASE . "tap_cancel.html";
		    $this->request->redirect($result_url);
		    die();
		}
		$PaymentID = $_REQUEST['PaymentId'];
		$presult   = $_REQUEST['Status'];
		$postdate  = $_REQUEST['PaidOn'];
		$token     = $_REQUEST['PaymentToken'];
		$tranid    = isset($_REQUEST['tranid']) ? $_REQUEST['tranid'] : '';
		$auth      = isset($_REQUEST['auth']) ? $_REQUEST['auth'] : '';
		$ref       = isset($_REQUEST['ref']) ? $_REQUEST['ref'] : '';
		$trackid   = isset($_REQUEST['trackid']) ? $_REQUEST['trackid'] : '';
		$udf1      = $_REQUEST['Variable1'];
		$udf2      = $_REQUEST['Variable2'];
		$udf3      = $_REQUEST['Variable3'];
		$udf4      = $_REQUEST['Variable4'];
		$udf5      = $_REQUEST['Variable5'];

		if ( $presult != 0 )
		{
			$result_url = URL_BASE."tap_success.html";				
			$result_params = "?PaymentID=" . $PaymentID . "&Result=" . $presult . "&PostDate=" . $postdate . "&TranID=" . $tranid . "&Auth=" . $auth . "&Ref=" . $ref . "&TrackID=" . $trackid ."&UDF1=" . $udf1 . "&UDF2=" .$udf2  . "&UDF3=" . $udf3  . "&UDF4=" . $udf4 . "&UDF5=" . $udf5 . "&token=". $token;
		}
		else
		{
			$result_url = URL_BASE."tap_error.html";
			$result_params = "?PaymentID=" . $PaymentID . "&Result=" . $presult . "&PostDate=" . $postdate . "&TranID=" . $tranid . "&Auth=" . $auth . "&Ref=" . $ref . "&TrackID=" . $trackid ."&UDF1=" . $udf1 . "&UDF2=" .$udf2  . "&UDF3=" . $udf3  . "&UDF4=" . $udf4 . "&UDF5=" . $udf5 . "&token=". $token;
		}			
		
		$this->request->redirect($result_url.$result_params);
	}

	public function action_tap_success()
	{
		
        
        $api_model = Model::factory('mobileapi115');
        $flag = isset($_REQUEST['UDF4'])?$_REQUEST['UDF4']:'';
        
        if($flag == 'schedule')
        {   
            $id = $_REQUEST['UDF2'];
            $update_status = $api_model->update_table('invoice_schedule_trip', ['pay_status'=>__('success')], '_id', $id);
            $this->request->redirect(URL_BASE.'passengers/invoice');
            die();
        }
        
        $tempdata = $this->payment->get_log_temp($_GET['token']);

        $trip_id = isset($_GET['UDF1']) ? $_GET['UDF1'] : $_GET['Variable1'];
        $tripfare = isset($_GET['UDF2']) ? $_GET['UDF2'] : $_GET['Variable2'];
        $distance = isset($_GET['UDF3']) ? $_GET['UDF3'] : $_GET['Variable3'];
        $trip_minutes = isset($_GET['UDF4']) ? $_GET['UDF4'] : $_GET['Variable4'];
        $waiting_cost = isset($_GET['UDF5']) ? $_GET['UDF5'] : $_GET['Variable5'];

        
        $driver_model = Model::factory('driver');
        $this->commonmodel = Model::factory('commonmodel');
        $this->customer_google_api = $this->commonmodel->select_site_settings('customer_android_key', SITEINFO);
        $this->driver_android_api = $this->commonmodel->select_site_settings('driver_android_key', SITEINFO);

        $passenger_log_details = $api_model->passengerlogid_details($trip_id);

        $passengers_id = $passenger_log_details[0]['passengers_id'];
        $pickupDate = $passenger_log_details[0]['pickup_time'];
        $pickupLocation = $passenger_log_details[0]['pickupLocation'];
        $dropLocation = $passenger_log_details[0]['dropLocation'];
        $pickup_latitude = $passenger_log_details[0]['pickup_latitude'];
        $pickup_longitude = $passenger_log_details[0]['pickup_longitude'];
        $drop_latitude = $passenger_log_details[0]['drop_latitude'];
        $drop_longitude = $passenger_log_details[0]['drop_longitude'];

        $driver_name = isset($passenger_log_details[0]['driver_name']) ? $passenger_log_details[0]['driver_name'] : "";
        $driver_lastname = isset($passenger_log_details[0]['driver_lastname']) ? $passenger_log_details[0]['driver_lastname'] : "";
        $driver_email = isset($passenger_log_details[0]['driver_email']) ? $passenger_log_details[0]['driver_email'] : "";
        $driver_id = isset($passenger_log_details[0]['driver_id']) ? $passenger_log_details[0]['driver_id'] : "";
        $company_id = isset($passenger_log_details[0]['company_id']) ? $passenger_log_details[0]['company_id'] : "";

        $siteinfo_details = $api_model->siteinfo_details();

        $passenger_log_id = $trip_id;
        //if ($tempdata['actual_distance'] == "")
        $distance = $distance;


        $actual_amount = isset($tempdata['actual_amount']) ? $tempdata['actual_amount'] : 0;
        $waiting_cost = $waiting_cost;
        $waiting_hours = isset($tempdata['waiting_time']) ? $tempdata['waiting_time'] : 0;
        $remarks = isset($tempdata['remarks']) ? $tempdata['remarks'] : '';
        $trip_fare = $tripfare; // Trip Fare without Tax,Tips and Discounts
        $fare = round(isset($tempdata['fare']) ? $tempdata['fare'] : 0, 2); // Total Fare with Tax,Tips and Discounts can editable by driver
        $tips = round(isset($tempdata['tips']) ? $tempdata['tips'] : 0, 2); // Tips Optional
        $passenger_discount = isset($tempdata['passenger_discount']) ? $tempdata['passenger_discount'] : 0;
        $account_discount = ""; //$tempdata['account_discount'];
        $company_tax = isset($tempdata['tax_amount']) ? $tempdata['tax_amount'] : 0;
        $passenger_discount_amt = $passenger_discount;
        $account_discount_amt = 0;
        //echo $creditcard_no;
        $trip_fare = round($trip_fare, 2);
        $total_fare = $fare; // + $tips; // Total fare with Tips if exist
        $amount = round($total_fare, 2); // Total amount which is used for pass to payment gateways
        $amt = round($total_fare, 2);
        $credits_used = 0;

        /*         * ***** Process the next step once we get the response from payment gateway *************************** */


        $paymentresponse = [];
        if ($_GET['Result'] == 1) {
            
            $driver_details = isset($driver_id)?$this->commonmodel->select(PEOPLE,['_id'=>$driver_id]) : '';
            $driver_no = (isset($driver_details['phone']))?$driver_details['phone']:0;
                                                
            if ($driver_no != 0) 
            {
                $message_details    = $this->commonmodel->sms_message_by_title('payment_confirmed_sms');
                $to                 = $driver_no;
                $message    = (isset($message_details['sms_description']))?$message_details['sms_description']:"";
                $message    = str_replace("##SITE_NAME##", SITE_NAME, $message);
                $result     = $this->api->sendSMS($to, $message);
            }  
            $invoceno = commonfunction::randomkey_generator();
            //if ($payment_types == 2) {
            //$paymentresponse['TRANSACTIONID'] = $braintree_trans_id['TRANSACTIONID'];
            //} else {
            //$paymentresponse = $_SESSION['paymentresponse'];
            //}
            $match = ['passengers_log_id' => (int) $passenger_log_id];
            $delete = $this->mongo_db->remove(MDB_TRANSACTION, $match);

            $inc_id = $api_model->get_insert_id(MDB_TRANSACTION);
            $insert_array = [
                "_id" => $inc_id,
                "passengers_log_id" => (int) $passenger_log_id,
                "distance" => $distance,
                "actual_distance" => isset($tempdata['actual_distance']) ? $tempdata['actual_distance'] : $distance,
                "distance_unit" => UNIT_NAME,
                "tripfare" => $trip_fare,
                "fare" => $fare,
                "tips" => $tips,
                "waiting_cost" => $waiting_cost,
                "passenger_discount" => (double) $tempdata['passenger_discount'],
                "corporate_amount" => isset($tempdata['corporate_discount']) ? (double) $tempdata['corporate_discount'] : 0,
                "company_tax" => $company_tax,
                "passenger_discount" => $passenger_discount_amt,
                "account_discount" => $account_discount_amt,
                "credits_used" => $credits_used,
                "waiting_time" => $waiting_hours,
                "trip_minutes" => $trip_minutes,
                "minutes_fare" => isset($tempdata['minutes_fare']) ? $tempdata['minutes_fare'] : 0,
                "remarks" => $remarks,
                "payment_type" => $tempdata['pay_mod_id'],
                "amt" => $amt,
                "company_id" => $company_id, //nightfare_applicable
                "nightfare_applicable" => isset($tempdata['nightfare_applicable']) ? $tempdata['nightfare_applicable'] : 0,
                "nightfare" => isset($tempdata['nightfare']) ? $tempdata['nightfare'] : 0,
                "eveningfare_applicable" => isset($tempdata['eveningfare_applicable']) ? $tempdata['eveningfare_applicable'] : 0,
                "eveningfare" => isset($tempdata['eveningfare']) ? $tempdata['eveningfare'] : 0
            ];
            //print_r($insert_array);
            $transactionfield = $insert_array + $siteinfo_details;
            //print_r($transactionfield);
            //exit;
            //$transactionfield     = $insert_array + $paymentresponse + $siteinfo_details; // Data Store
            //print_r($transactionfield);exit;
            /*             * ******** Update Driver Status after complete Payments **************** */
            $update_driver_arrary = [
                "status" => 'F'
            ];
            $result = $api_model->update_table(MDB_DRIVER_INFO, $update_driver_arrary, '_id', $driver_id);
            /*             * ******************************************************************************** */
            //Update Travel Status after payment done
            /* $passenger_log_id = $values['trip_id'];
              $msg_status = 'R';$driver_reply='A';$journey_status=1; // Waiting for Payment
              $journey = $driver_model->update_journey_status($passenger_log_id,$msg_status,$driver_reply,$journey_status); */
            //insert transaction status
            //===================================
            //$transaction_detail = $api_model->triptransact_details($transactionfield, $payment_types);
            $result = $this->mongo_db->Insert(MDB_TRANSACTION, $insert_array);
            $update_payment_status = [
                "payment_status" => 1,
                "travel_status" => 1
            ];
            $update_status = $api_model->update_table(MDB_PASSENGERS_LOGS, $update_payment_status, '_id', $passenger_log_id);

            /*             * ********** */
            $tranaction_id = "";
            $check_trans_already_exist = $api_model->checktrans_details($passenger_log_id);

            if (count($check_trans_already_exist) > 0) {
                $tranaction_id = $check_trans_already_exist['_id'];
            }
            $jobreferral = $tranaction_id;
            $pickup = isset($pickupLocation) ? $pickupLocation : '';
            $detail = [
                "fare" => $tripfare,
                "pickup" => $pickup,
                "jobreferral" => $jobreferral,
                "trip_id" => $passenger_log_id
            ];
            $message = [
                "message" => __('trip_fare_updated'),
                "detail" => $detail,
                "status" => 1
            ];
            $pushmessage = [
                "message" => __('trip_fare_updated'),
                "fare" => $tripfare,
                "trip_id" => $passenger_log_id,
                "pickup" => $pickup,
                "status" => 5
            ];

            $update_trip_array = [
                "status" => 8
            ];
            $result = $api_model->update_table(MDB_REQUEST_HISTORY, $update_trip_array, 'trip_id', $passenger_log_id);


            $d_device_token = isset($passenger_log_details[0]['driver_devicetoken']) ? $passenger_log_details[0]['driver_devicetoken'] : '';
            $d_device_type = isset($passenger_log_details[0]['driver_devicetype']) ? $passenger_log_details[0]['driver_devicetype'] : '';
            //$d_send_notification = $api_model->send_driver_mobile_pushnotification($d_device_token, $d_device_type, $pushmessage, $this->driver_android_api);

            $p_device_token = isset($passenger_log_details[0]['passenger_devicetoken']) ? $passenger_log_details[0]['passenger_devicetoken'] : '';
            $p_device_type = isset($passenger_log_details[0]['passenger_devicetype']) ? $passenger_log_details[0]['passenger_devicetype'] : '';
            //$p_send_notification = $api_model->send_passenger_mobile_pushnotification($p_device_token, $p_device_type, $pushmessage, $this->customer_google_api);
            $send_mail_status = $this->send_mail_passenger($passenger_log_id, 1);
            /*             * ********* */
            //echo json_encode($message);
            exit;
        }      		
	}
	
	public function send_mail_passenger($log_id = '', $travel_status = '')
    {
        
        /**************************** Mail send to Passenger ***************/
        $api_model             = Model::factory('mobileapi115');
        $passenger_log_details = $api_model->passenger_transdetails($log_id);
        
        if (count($passenger_log_details) > 0) {
            $to            = $passenger_log_details[0]['passenger_email'];
            $name          = $passenger_log_details[0]['passenger_name'];
            $job_referral  = $passenger_log_details[0]['job_referral'];
            //$api_model     = Model::factory(MOBILEAPI_107);
            $location_data = $api_model->get_location_details($log_id);
			if ($location_data) {
                $pickup = $location_data[0]['current_location'];
                $drop   = $location_data[0]['drop_location'];
                $path   = $location_data[0]['active_record'];
                //print_r($path);exit;
                /*$path   = str_replace('],[', '|', $path);
                $path   = str_replace(']', '', $path);
                $path   = str_replace('[', '', $path);
                $path   = explode('|', $path);
                $path   = array_unique($path);*/
                include_once MODPATH . "/email/vendor/polyline_encoder/encoder.php";
                $polylineEncoder = new PolylineEncoder();
                if (count($path) > 0) {
                    foreach ($path as $values) {
                        //$values = explode(',', $values);
                        $polylineEncoder->addPoint($values[1], $values[0]);
                        $polylineEncoder->encodedString();
                    }
                }
                $encodedString = $polylineEncoder->encodedString();
                $marker_end    = $location_data[0]['drop_latitude'] . ',' . $location_data[0]['drop_longitude'];
                $marker_start  = $location_data[0]['pickup_latitude'] . ',' . $location_data[0]['pickup_longitude'];
                //$url= "http://maps.google.com/maps/api/staticmap?center=$center&zoom=11&markers=$markers&size=500x300&sensor=TRUE_OR_FALSE&path=color:0x0000ff|weight:5|$path";echo $url;exit;
                $mapurl        = "http://maps.googleapis.com/maps/api/staticmap?size=250x250&markers=color:red%7C$marker_start&markers=color:green%7C$marker_end&path=weight:3%7Ccolor:red%7Cenc:$encodedString";
				
            } else {
                $mapurl = "";
                $pickup = "";
                $drop   = "";
            }
            $subtotal  = '';
            $orderlist = '';
            $orderlist = '<table cellspacing="8" cellpadding="5">';
            if ($travel_status == 4) {
                //$orderlist.='<tr style="color:#808080"><td colspan="2" style="color: #161616; font-size: 15px; font-weight: bold"><b>'.__('cancel_trip').'</b></td><td></td></tr>';
            } else {
                //$orderlist.='<tr style="color:#808080"><td colspan="2" style="color: #161616; font-size: 15px; font-weight: bold"><b>'.__('complete_from').'</b></td><td></td></tr>';
            }
            $used_wallet_amount = (isset($passenger_log_details[0]['used_wallet_amount'])) ? $passenger_log_details[0]['used_wallet_amount'] : 0;
            $distance_fare      = $passenger_log_details[0]['tripfare'] - $passenger_log_details[0]['minutes_fare'];
            //$subtotal= $passenger_log_details[0]['fare'];
            $subtotal           = $passenger_log_details[0]['fare'] + $used_wallet_amount;
            $payment_mode_value = $passenger_log_details[0]['payment_type'];
            switch ($payment_mode_value) {
                case 1:
                    $payment_mode = __('cash');
                    break;
                case 2:
                    $payment_mode = __('credit_card');
                    break;
                case 3:
                    $payment_mode = __('knet');
                    break;
                default:
                    $payment_mode = __('account');
            }
            $distance_km       = ($passenger_log_details[0]['distance'] != '') ? $passenger_log_details[0]['distance'] : '0';
            $trip_minutes      = ($passenger_log_details[0]['trip_minutes'] != '') ? $passenger_log_details[0]['trip_minutes'] : '0';
            $distance_fare_row = "";
            if ($distance_fare != 0) {
                $distance_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('distance_fare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($distance_fare, 2) . "</td></tr>";
            }
            $minutes_fare_row = "";
            if ($passenger_log_details[0]['minutes_fare'] != 0) {
                $minutes_fare_row = "<tr style='color:#808080'><td width='150px'>" . __('minutes_fare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . " " . round($passenger_log_details[0]['minutes_fare'], 2) . "</td></tr>";
            }
            $wallet_row = "";
            if ($used_wallet_amount != 0) {
                $wallet_row = "<tr style='color:#808080'><td width='150px'>" . __('wallet_amount_paid') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($used_wallet_amount, 2) . "</td></tr>";
            }
            $evening_fare = "";
            if ($passenger_log_details[0]['eveningfare'] != 0) {
                $evening_fare = "<tr style='color:#808080'><td width='150px'>" . __('eveningfare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['eveningfare'], 2) . "</td></tr>";
            }
            $night_fare = "";
            if ($passenger_log_details[0]['nightfare'] != 0) {
                $night_fare = "<tr style='color:#808080'><td width='150px'>" . __('nightfare') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['nightfare'], 2) . "</td></tr>";
            }
            $orderlist .= "<td valign='top'><table style='float:left;font-size:13px;position:relative;top:0px;left:10px' height='280px' cellpadding='8' width='250px'>
			<tbody><tr><td colspan='3' rowspan='2' width='250px' style='text-align:center;font-size:15px;color: #161616;font-weight:bold'>" . __('fare_details') . "</td><td></td></tr>
			<tr height='30'></tr>
			<tr style='color:#808080'><td width='150px'>" . __('payment_mode') . "</td><td style='color:#000' width='100px'>" . $payment_mode . "</td></tr>
			" . $distance_fare_row . " " . $minutes_fare_row . "
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_hours') . "</td><td style='color:#000'>" . $passenger_log_details[0]['waiting_time'] . "</td></tr>
			<tr style='color:#808080'><td width='150px'>" . __('waiting_time_cost') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "	" . round($passenger_log_details[0]['waiting_cost'], 2) . "</td></tr>" . $night_fare . " " . $evening_fare . "
			
			<tr style='color:#808080'><td width='150px'>" . __('sub_total') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($subtotal, 2) . "</td></tr>
			$wallet_row
			<tr style='color:#808080'><td width='150px' style='color: #161616;font-weight:bold'>" . __('trip_time') . "</td><td style='color:#000'>" . CURRENCY_FORMAT . "		" . round($passenger_log_details[0]['fare'], 2) . "</td></tr>
			</tbody></table></td></tr>
			<td colspan='4'><hr style='color:#d7d7d7' size='1px' /></td>
			<tr><td><table width='250px' height='100px' cellpadding='3' cellspacing='3' style='float:left;'>
			<tbody><tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Current_Location') . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='300px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['current_location'] . "</td></tr>
			<tr colspan='3' style='color:#808080'><td width='80px' style='color:#000'>" . __('Drop_Location') . "</td></tr>
			<tr style='color:#808080'><td width='280px' height='30px' style='word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:left;display:table-cell;width:279px;line-height:16px;height:57px;padding:0 0px 0px 0'>" . $passenger_log_details[0]['drop_location'] . "</td></tr>
			</tbody></table></td>
			<td valign='top'><table style='float:left;margin:10px;font-size:13px;' width='250px' height='50px' cellpadding='0' cellspacing='0'>
			<tbody><tr><td width='80px' style='color:#000' align='center'>" . __('km') . "</td><td width='80px'align='center' style='color:#000'>" . __('trip_minutes') . "</td></tr>
			<tr><td width='80px' align='center'>" . $distance_km . "	" . __('km') . "</td><td width='80px' align='center'>" . $trip_minutes . "</td></tr>
			</tbody></table></td></tr>";
            $mail              = "";
            $replace_variables = [
                REPLACE_LOGO => URL_BASE . PUBLIC_FOLDER_IMGPATH . '/logo.png',
                REPLACE_SITENAME => $this->app_name,
                REPLACE_USERNAME => $name,
                REPLACE_EMAIL => $to,
                REPLACE_SITELINK => URL_BASE . 'users/contactinfo/',
                REPLACE_SITEEMAIL => $this->siteemail,
                REPLACE_SITEURL => URL_BASE,
                REPLACE_ORDERID => $log_id,
                REPLACE_ORDERLIST => $orderlist,
                REPLACE_MAPURl => $mapurl,
                REPLACE_PICKUP => $pickup,
                REPLACE_DROP => $drop,
                //REPLACE_COMPANYDOMAIN => $this->domain_name,
                REPLACE_COPYRIGHTS => SITE_COPYRIGHT,
                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
            ];
            /* Added for language email template */
            if ($this->lang != 'en') {
                if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html')) {
                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/tripcomplete-mail-' . $this->lang . '.html', $replace_variables);
                } else {
                    $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
                }
            } else {
                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'tripcomplete-mail.html', $replace_variables);
            }
            /* Added for language email template */
            //echo $message;exit;
            $from     = $this->siteemail;
            $subject  = __('payment_made_successfully');
            $redirect = 'no';
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
            $msg_status     = 'R';
            $driver_reply   = 'A';
            $journey_status = 1; // Waiting for Payment
            $journey        = $api_model->update_journey_status($log_id, $msg_status, $driver_reply, $journey_status);
        }
        /**************************** Mail send to Passenger ***************/
    }
	
	public function action_tap_error() {
        
        //print_r($_REQUEST); die();
        $api_model = Model::factory('mobileapi115');
        $flag = isset($_REQUEST['UDF4'])?$_REQUEST['UDF4']:'';
        
        if($flag == 'schedule')
        {   
            $id = $_REQUEST['UDF2'];
            $update_status = $api_model->update_table('invoice_schedule_trip', ['pay_status'=>__('failed')], '_id', $id);
            $this->request->redirect(URL_BASE.'passengers/invoice');
            die();
        }
        
        $trip_id = $_REQUEST['UDF1'];
        $update_payment_status = [
            "payment_status" => 0,
            "travel_status" => 5
        ];
        $update_status = $api_model->update_table(MDB_PASSENGERS_LOGS, $update_payment_status, '_id', $trip_id);
        $message = [
            "message" => __('payment_failed'),
            "trip_id" => $trip_id,
            "status" => 0
        ];
        //echo json_encode($message);
        exit;
    }
	public function action_tap_cancel() {
        echo '<strong>Oops !!. You have cancelled the transaction. Please go back and try again.</strong>';
        exit;
    }
		
}
