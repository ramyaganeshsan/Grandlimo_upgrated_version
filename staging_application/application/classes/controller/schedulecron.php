<?php
defined('SYSPATH') or die('No direct script access.');

/* 
 * Author : MJ
 * Created Date : 22-Nov-2016
 * Description : The URL will accept only payment frequency via pay_mod variable.
 * pay_mod = 1 ==> Weekly Payment
 * pay_mod = 2 ==> Monthly Payment
 * URL Format : SITEURL/schedulecron/getreport?pay_mod=1
 */

class Controller_Schedulecron extends Controller_Config
{
    public function __construct(Request $request, Response $response) {
        parent::__construct($request, $response);
        $this->api    = Model::factory('mobileapi119');
        $this->common = Model::factory('commonmodel');
        $this->manage_model = Model::factory('manage');
        $this->mongo_db = MangoDB::instance('default');
    }
    public function action_getreport()
    {
        $flag = 1;
        $message = '';
        if(isset($_REQUEST['pay_mod']))
        {
            $pay_mod        = $_REQUEST['pay_mod']; // Determines the frequency of Payment like Monthly or Weekly
            $travel_status  = 1;
            $pay_made_by    = 5;
            //Considering the Cron is running on Monday. Report need to be generated till Sunday(one day before Monday)
            $current_time   = convert_timezone('-1 day', TIMEZONE);
            $current_date   = explode(' ', $current_time);
            $end_time       = $current_date[0] . ' 23:59:59';
            //Need to consider the start date as 1 week before or 1 onth before based on selected Payment frequency
            if( $pay_mod == 1 )
                $lastweek       = convert_timezone('-1 week', TIMEZONE);
            else if( $pay_mod == 2 )
                $lastweek       = convert_timezone('-1 month', TIMEZONE);
            else
            {
                $lastweek       = convert_timezone('now', TIMEZONE);
            }
            $lastweek_date  = explode(' ', $lastweek);
            $weekstart_time = $lastweek_date[0].' 00:00:01';
           
            $trip_details = $this->common->get_tripdetails_forcron($travel_status,$pay_made_by,$end_time,$weekstart_time,$pay_mod);
            //echo "<pre>";print_r($trip_details);die();
        //echo count($trip_details['result']);exit();

            if( isset($trip_details['result']) && count($trip_details['result']) > 0 )
            {
                //echo "<pre>";print_r($trip_details['result']);exit();
                $emailres =array();
                $emailres1 =array();
                $mail_status    = 0;
                $pay_status     = 0;
                foreach ($trip_details['result'] as $k) {

                    $invoice        = text::random($type = 'numeric', $length = 10);

                    //echo "<pre>";print_r($k['_id']['passenger_name']);
                    $html = View::factory('admin/schedule_pdf')
                        ->bind('list1', $k)
                        ->bind('enddate', $end_time)
                        ->bind('startdate', $weekstart_time);

                    $file     = 'Schedule_Trip_Report_'.$k['_id']['passenger_name']. "_" . date("Y-m-d_H-i", time());
                    $filename = PUBLIC_UPLOADS_FOLDER.'/reports/'. $file;
                    $html     = preg_replace("<tbody>", " ", $html);
                    $html     = preg_replace("</tbody>", " ", $html);
                    if (ob_get_length() > 0) { ob_end_clean(); } 
                    $generate_pdf = $this->manage_model->send_pdf($html,'','', $filename);
                    //Mail Passenger
                    $to = $k['_id']['passenger_email']; //'manu@ndot.in';
                    $replace_variables = array(
                                REPLACE_SITENAME    => $this->app_name,
                                '##START_DATE##'    => $weekstart_time,
                                '##END_DATE##'      => $end_time,
                                //'##DISTANCE##'      => round($trip_details['result'][0]['dist_count'], 2)." ".UNIT_NAME,
                                '##TRIP_COUNT##'    => $k['trip_count'],
                                REPLACE_NAME        => $k['_id']['passenger_name'],
                                REPLACE_PAY         => CURRENCY." ".$k['total_fare'],
                                REPLACE_SITELINK    => URL_BASE . 'users/contactinfo/',
                                REPLACE_SITEEMAIL   => $this->siteemail,
                                REPLACE_SITEURL     => URL_BASE,
                                REPLACE_COPYRIGHTS  => SITE_COPYRIGHT,
                                REPLACE_COPYRIGHTYEAR => COPYRIGHT_YEAR
                            );
                        if ($this->lang != 'en') {
                            if (file_exists(DOCROOT . TEMPLATEPATH . $this->lang . '/otp-' . $this->lang . '.html')) {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . $this->lang . '/otp-' . $this->lang . '.html', $replace_variables);
                            } else {
                                $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'scheduletrip_invoice.html', $replace_variables);
                            }
                        } else {
                            $message = $this->emailtemplate->emailtemplate(DOCROOT . TEMPLATEPATH . 'scheduletrip_invoice.html', $replace_variables);
                        }
                        $from     = $this->siteemail;
                        $subject  = __('schedule_inv') . " - " . $this->app_name;
                        $redirect = "no";
                        /*To attach the PDF File in Mail - Starts*/
                        $attachment = $filename.".pdf";
                        /*To attach the PDF File in Mail - Ends*/
                        if (SMTP == 1) {
                            include($_SERVER['DOCUMENT_ROOT'] . "/modules/SMTP/smtp.php");
                            if(!empty($mail->ErrorInfo))
                            {
                                $emailfail_mess = "<br>Mail Failed to Passenger (".$k['_id']['passenger_id'].") ".$k['_id']['passenger_name'];
                            }
                            else
                            {
                                $emailsucc_mess =  "<br>Successfully Mailed to Passenger (".$k['_id']['passenger_id'].") ".$k['_id']['passenger_name'];
                                $mail_status = 1;
                            }
                                
                        } else {
                            // To send HTML mail, the Content-type header must be set
                            $headers = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            // Additional headers
                            $headers .= 'From: ' . $from . '' . "\r\n";
                            $headers .= 'Bcc: ' . $to . '' . "\r\n";
                            mail($to, $subject, $message, $headers);
                        }
                        if(SMS == 1)
                        {
                            $sms_text   = $this->commonmodel->sms_message_by_title('send_invoice');
                            $to         = $k['_id']['passenger_country_code'].$k['_id']['passenger_phone'];
                            $sms_text   = $sms_text['sms_description'];
                            $sms_text   = str_replace("##SITE_NAME##", SITE_NAME, $sms_text);
                            $api        = Model::factory('mobileapi115');
                            $api->sendSMS($to, $sms_text);
                        }
                        $now = date('Y-m-d H:i:s');
                        
                        $rs = $this->mongo_db->find('invoice_schedule_trip',array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
                        $res = (!empty($rs))?iterator_to_array($rs):array(1);
                        reset($res);
                        $first_key = key($res);
                        $inc_id = $first_key+1;
                        
                        $insert_array['_id']            = $inc_id;
                        $insert_array['invoice']        = $invoice;
                        $insert_array['pay_status']     = __('pending');
                        $insert_array['mail_status']    = $mail_status;
                        $insert_array['passenger_id']   = $k['_id']['passenger_id'];
                        $insert_array['file']           = $attachment;
                        $insert_array['created_date']   = new MongoDate(strtotime($now));
                        $insert_array['period']         = $weekstart_time." - ".$end_time;
                        $insert_array['amount']         = $k['total_fare'];
                        
                        $result = $this->common->insert('invoice_schedule_trip',$insert_array);
                        if(isset($emailsucc_mess)){
                        array_push($emailres,$emailsucc_mess);    
                        }
                        if(isset($emailfail_mess)){
                        array_push($emailres1,$emailfail_mess);    
                        }
                        
                        
                    # code...
                }//end of foreach
                echo"<pre>";print_r($emailres);echo "<br>";
                echo"<pre>";print_r($emailres1);echo "<br>";
                exit();
            }
            else{
                echo "<br>No Trips Found for Passenger ";
                die();

            }
                
        }
        else
        {
            $msg = "No Parameters";
            $flag = 1;
        }
        //echo $message;
        die();
    }
}

