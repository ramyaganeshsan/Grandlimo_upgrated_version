
<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Cronreminder extends Model
{
	public function __construct()
    {
		$this->mongo_db         = MangoDB::instance('default');
	}


	public function cron_reminder()
	{
				
		$apikey_query = "select company_cid,company_api_key,company_email_id,company_name,time_zone as timezone from companyinfo 
					left join company on company.cid=companyinfo.company_cid where company_status='A'";

		$apikey_result =  Db::query(Database::SELECT, $apikey_query)
		->execute()
		->as_array();
		if(count($apikey_result)>0)
		{
			return $apikey_result;
		}
		else
		{
			return 0;
		}
		
	}

	public function get_company_package_expdate($company_id)
	{
		$query = "select upgrade_packageid,upgrade_packagename,upgrade_no_taxi,upgrade_expirydate,name from package_report
				left join people on people.company_id=package_report.upgrade_companyid
				where package_report.upgrade_companyid = '$company_id'
				and people.status NOT IN ('D')
				order by upgrade_id desc limit 0,1";
				
		$query_result =  Db::query(Database::SELECT, $query)->execute()->as_array();
		if(count($query_result)>0)
		{
			return $query_result;
		}
		else
		{
			return 0;
		}		
	}
	
	public function cron_deactive_company($company_id)
	{
		$result1 = DB::update(PEOPLE)->set(['status' => 'D'])
				->and_where('company_id', '=', $company_id)
				->and_where('user_type', '=', 'C') //Deactive Company
				->execute();
		
		$result2 = DB::update(PEOPLE)->set(['status' => 'D'])
				->and_where('company_id', '=', $company_id)
				->and_where('user_type', '=', 'M') //Deactive Dispatchers
				->execute();
				
		$result3 = DB::update(PEOPLE)->set(['status' => 'D'])
				->and_where('company_id', '=', $company_id)
				->and_where('user_type', '=', 'D') //Deactive Drivers
				->execute();
		
		if($result1 || $result2 || $result3){
			return 1;
		}else{
			return 0;
		}
	}

	public function company_current_expiry_date($company_id)
	{
		$query="select max(upgrade_id) as max_id
				from ".PACKAGE_REPORT."
				where upgrade_companyid=".$company_id."";
				
		$result =  Db::query(Database::SELECT, $query)->execute()->as_array();
		
		if(count($result)>0){
			$max_id=$result[0]['max_id'];
			$query="select upgrade_expirydate,company_name,cid
					from ".PACKAGE_REPORT."
					left join ".COMPANY." on company.cid=".PACKAGE_REPORT.".upgrade_companyid
					left join ".PEOPLE." on company_id=".PACKAGE_REPORT.".upgrade_companyid
					where ".PACKAGE_REPORT.".upgrade_id=".$max_id."
					and ".PEOPLE.".status NOT IN ('D')";
			$result1 =  Db::query(Database::SELECT, $query)->execute()->as_array();
			
			if(count($result1)>0){
				return $result1;
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}

	public function get_notification_passengers_list(){			

            $field_arguments = [
                [
                      '$match'=>['push_notification' => ['$ne' => 1],'user_status'=>'A','device_type'=>['$in'=>['1','2']],'device_token'=>['$ne'=>'']]
                    ],
                [ '$project' => ['_id'=>'$_id','device_type'=>'$device_type','device_token'=>'$device_token']
                ],            
                [
                    '$sort' => [
                        '_id' => -1
                    ],
                ],
                [
                    '$skip' => 0
                ],
                [
                  '$limit' => 100
                ]

                
            ];

        $qresult = $this->mongo_db->aggregate(MDB_PASSENGERS,$field_arguments); 
        //print_r($qresult);exit;
        return (!empty($qresult['result']))?$qresult['result']:[];

    }

    public function change_notification_status($id){

    	$result = $this->mongo_db->update(MDB_NOTIFICATIONS,['_id'=>(int)$id ],['$set'=>['sent_status'=>1] ] );
    	
    	return (empty($result['err']))?1:$result['err'];
    }

    public function pushnotification_list(){    	

		$field_arguments = [
                [
                      '$match'=>['sent_status' => 2]
                    ],
                [ '$project' => ['_id'=>'$_id','title'=>'$title','sub_title'=>'$sub_title','message'=>'$message','image'=>'$image']
                ],            
                [
                    '$sort' => [
                        '_id' => -1
                    ],
                ],
                [
                    '$skip' => 0
                ],
                [
                  '$limit' => 1
                ]

                
            ];

        $qresult = $this->mongo_db->aggregate(MDB_NOTIFICATIONS,$field_arguments); 
        //print_r($qresult);exit;
        return (!empty($qresult['result']))?$qresult['result']:[];

    
    }

    public function send_passenger_android_pushnotification($d_device_tokens = "", $pushmessage = null)
    {
        
			$apiKey = CUS_ANDROID_KEY;
            $registrationIDs = $d_device_tokens;
                                                  
            if (!empty($registrationIDs) && count($registrationIDs) && count($pushmessage)) {
                // Set POST variables
              //  $url         = 'https://android.googleapis.com/gcm/send'; //https://fcm.googleapis.com/fcm/send
                  $url         = 'https://fcm.googleapis.com/fcm/send';

                $pushmessage = json_encode($pushmessage);               
				
				$fields      = [
                    'registration_ids' => $registrationIDs,
                    'data' => [
                        "message" => $pushmessage
                    ]
                ];
                //print_r( $fields );exit;
                $headers     = [
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                ];
                // Open connection
                $ch          = curl_init();
                // Set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                // Execute post
                $result = curl_exec($ch);
				
                curl_close($ch);                                     
            }

            return 1;
      
    }

    public function send_passenger_ios_pushnotification($d_device_tokens = "", $pushmessage = null)
    {
    			
    			$deviceToken = $d_device_tokens;
    			$body['aps'] = [
									'alert' => ['title'=>$pushmessage['title'],'body'=>$pushmessage['message']],
									'badge' => 1,
									'status' => 22,
									'sound' => 'default',
									'mutable-content'=> 1,        					
								];

    			$body['data'] = ['attachment-url'=>$pushmessage['image']];

    			//print_r(json_encode($body));exit;

				$passphrase = '';
				$live = false;
				$root = ($live != true) ? $_SERVER['DOCUMENT_ROOT'] . '/GrandlimoDistribution.pem' : $_SERVER['DOCUMENT_ROOT'] . '/localGrandlimoDistribution.pem';
				$ctx        = stream_context_create();
				stream_context_set_option($ctx, 'ssl', 'local_cert', $root);
				stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
				foreach ($deviceToken as $tokenvalue) {

					echo $tokenvalue.'<br>';
					$pushURL = ($live == true) ? 'ssl://gateway.push.apple.com:2195' : 'ssl://gateway.sandbox.push.apple.com:2195';	

					$fp = stream_socket_client($pushURL , $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); 

					if (!$fp)
					exit("Failed to connect: $err $errstr" . PHP_EOL);
					// Encode the payload as JSON
					$payload = json_encode($body);
					$tokenvalue = trim($tokenvalue);

					//Due to some dummy token blocker issue then use try catch (Error:pack(): Type H: illegal hex digit s)
					try{

						$msg     = chr(0) . pack('n', 32) . pack('H*', $tokenvalue) . pack('n', strlen($payload)) . $payload;
						$result  = fwrite($fp, $msg, strlen($msg));
						fclose($fp);

					}catch(Exception $e){

						//echo 'Message: ' .$e->getMessage().'<br>';
					}
					
				}

    }


    public function update_passenger_status($passengers_ids){

	      if(count($passengers_ids)){
	                  //print_r($passengers_ids);exit;
	            $result = $this->mongo_db->update(MDB_PASSENGERS,['_id'=>['$in'=>$passengers_ids]],['$set'=>['push_notification' => 1]],['multiple'=>true] );
	      }
    }

		
	

}
?>
