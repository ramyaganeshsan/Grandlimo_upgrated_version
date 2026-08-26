
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
		$result1 = DB::update(PEOPLE)->set(array('status' => 'D'))
				->and_where('company_id', '=', $company_id)
				->and_where('user_type', '=', 'C') //Deactive Company
				->execute();
		
		$result2 = DB::update(PEOPLE)->set(array('status' => 'D'))
				->and_where('company_id', '=', $company_id)
				->and_where('user_type', '=', 'M') //Deactive Dispatchers
				->execute();
				
		$result3 = DB::update(PEOPLE)->set(array('status' => 'D'))
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

            $field_arguments = array(
                array(
                      '$match'=>array(
							// 'push_notification' => array('$ne' => 1),
							'user_status'=>'A',
							'device_type'=>array('$in'=>['1','2']),
							'device_token'=>array('$ne'=>'')
						)
                    ),
                array( '$project' => array('_id'=>'$_id','device_type'=>'$device_type','device_token'=>'$device_token')
                ),            
                array(
                    '$sort' => array(
                        '_id' => -1
                    ),
                ),
                array(
                    '$skip' => 0
                ),
                array(
                  '$limit' => 1
                )

                
            );

        $qresult = $this->mongo_db->aggregate(MDB_PASSENGERS,$field_arguments); 
        //print_r($qresult);exit;
        return (!empty($qresult['result']))?$qresult['result']:array();

    }

    public function change_notification_status($id){

    	$result = $this->mongo_db->update(MDB_NOTIFICATIONS,array('_id'=>(int)$id ),array('$set'=>array('sent_status'=>1) ) );
    	
    	return (empty($result['err']))?1:$result['err'];
    }

    public function pushnotification_list(){    	

		$field_arguments = array(
                // array(
                //       '$match'=>array('sent_status' => 2)
                //     ),
                array( '$project' => array('_id'=>'$_id','title'=>'$title','sub_title'=>'$sub_title','message'=>'$message','image'=>'$image')
                ),            
                array(
                    '$sort' => array(
                        '_id' => -1
                    ),
                ),
                array(
                    '$skip' => 0
                ),
                array(
                  '$limit' => 1
                )

                
            );

        $qresult = $this->mongo_db->aggregate(MDB_NOTIFICATIONS,$field_arguments); 
        //print_r($qresult);exit;
        return (!empty($qresult['result']))?$qresult['result']:array();

    
    }

    public function send_passenger_android_pushnotification($d_device_tokens = "", $pushmessage = null)
    {
        
			$apiKey = CUS_ANDROID_KEY;
            $registrationIDs = $d_device_tokens;
                                                  
            if (!empty($registrationIDs) && count($registrationIDs) && count($pushmessage)) {

				$url = "https://fcm.googleapis.com/v1/projects/new-push-notification-5902e/messages:send";

                $pushmessage = json_encode($pushmessage);               
				
				$fields      = array(
                    'registration_ids' => $registrationIDs,
                    'data' => array(
                        "message" => $pushmessage
                    )
                );

                $headers     = array(
                    'Authorization: Bearer ' . $apiKey,
                    'Content-Type: application/json'
                );
                $ch          = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);

				if (curl_errno($ch)) {
					$error = curl_error($ch);
					echo "cURL Error: " . $error;
				} else {
					echo "Response: " . $result;
				}

                curl_close($ch);                                     
            }

            return 1;
      
    }

    // public function send_passenger_ios_pushnotification($d_device_tokens = "", $pushmessage = null)
    // {
    			
	// 	$deviceToken = $d_device_tokens;
	// 	$body['aps'] = array(
	// 		'alert' => array('title'=>$pushmessage['title'],'body'=>$pushmessage['message']),
	// 		'badge' => 1,
	// 		'status' => 22,
	// 		'sound' => 'default',
	// 		'mutable-content'=> 1,        					
	// 	);

	// 	$body['data'] = array('attachment-url'=>$pushmessage['image']);

	// 	$passphrase = '';
	// 	$live = false;
	// 	$root = ($live != true) ? $_SERVER['DOCUMENT_ROOT'] . '/GrandlimoPassengerAPNS.pem' : $_SERVER['DOCUMENT_ROOT'] . '/localGrandlimoDistribution.pem';
		
	// 	$root = $_SERVER['DOCUMENT_ROOT'] . '/cer.p12';
	// 	$ctx        = stream_context_create();
	// 	stream_context_set_option($ctx, 'ssl', 'local_cert', $root);
	// 	stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
	// 	foreach ($deviceToken as $tokenvalue) {

	// 		//echo $tokenvalue.'<br>';
	// 		$pushURL = ($live == true) ? 'ssl://gateway.push.apple.com:2195' : 'ssl://gateway.sandbox.push.apple.com:2195';	

	// 		$fp = stream_socket_client("ssl://gateway.sandbox.push.apple.com:2195" , $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); 

	// 		if (!$fp)
	// 		exit("Failed to connect: $err $errstr" . PHP_EOL);
	// 		// Encode the payload as JSON
	// 		$payload = json_encode($body);
	// 		$tokenvalue = trim("04fe2243a2d27c70a5a1a63df36e402d1330b95007b01854ac44b032c6c9147a");

	// 		//Due to some dummy token blocker issue then use try catch (Error:pack(): Type H: illegal hex digit s)
	// 		try{

	// 			$msg     = chr(0) . pack('n', 32) . pack('H*', $tokenvalue) . pack('n', strlen($payload)) . $payload;
	// 			$result  = fwrite($fp, $msg, strlen($msg));
	// 			print_r($result, $msg);
	// 			fclose($fp);

	// 		}catch(Exception $e){
	// 			echo 'Message: ' .$e->getMessage().'<br>';
	// 		}
			
	// 	}

	// 	// $deviceToken = $d_device_tokens;
	// 	// $body['aps'] = [
	// 	// 	'alert' => [
	// 	// 		'title' => $pushmessage['title'],
	// 	// 		'body' => $pushmessage['message']
	// 	// 	],
	// 	// 	'badge' => 1,
	// 	// 	'status' => 22,
	// 	// 	'sound' => 'default',
	// 	// 	'mutable-content' => 1,
	// 	// ];

	// 	// $body['data'] = ['attachment-url' => $pushmessage['image']];

	// 	// // Path to your .p12 file
	// 	// $p12File = $_SERVER['DOCUMENT_ROOT'] . '/cer.p12';
	// 	// $passphrase = ''; // Your passphrase for the .p12 file
	// 	// $live = false;
	// 	// $pushURL = $live ? 'ssl://gateway.push.apple.com:2195' : 'ssl://gateway.sandbox.push.apple.com:2195';

	// 	// // Create the stream context with .p12 file
	// 	// $ctx = stream_context_create();
	// 	// stream_context_set_option($ctx, 'ssl', 'cafile', $p12File);
	// 	// stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
		
	// 	// foreach ($deviceToken as $tokenvalue) {
	// 	// 	$fp = stream_socket_client($pushURL, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
			
	// 	// 	if (!$fp) {
	// 	// 		exit("Failed to connect: $err $errstr" . PHP_EOL);
	// 	// 	}

	// 	// 	// Encode the payload as JSON
	// 	// 	$payload = json_encode($body);
	// 	// 	$tokenvalue = trim($tokenvalue);

	// 	// 	try {
	// 	// 		$msg = chr(0) . pack('n', 32) . pack('H*', $tokenvalue) . pack('n', strlen($payload)) . $payload;
	// 	// 		$result = fwrite($fp, $msg, strlen($msg));
	// 	// 		fclose($fp);
	// 	// 	} catch (Exception $e) {
	// 	// 		echo 'Message: ' . $e->getMessage() . '<br>';
	// 	// 	}
	// 	// }

	// 	// Path to your .p8 file
	// 	// $p8File = $_SERVER['DOCUMENT_ROOT'] . '/AuthKey_7Z6DJ2T5LA.p8';
	// 	// $keyId = '7Z6DJ2T5LA';
	// 	// $teamId = 'FDG4PBGHHM';
	// 	// $bundleId = 'com.grandlimo.passenger';
	// 	// $production = false;
	// 	// $apnsHost = $production ? 'https://api.push.apple.com' : 'https://api.sandbox.push.apple.com';

	// 	// // Create JWT token
	// 	// $key = file_get_contents($p8File);
	// 	// $header = [
	// 	// 	'alg' => 'ES256',
	// 	// 	'kid' => $keyId,
	// 	// ];
	// 	// $claims = [
	// 	// 	'iss' => $teamId,
	// 	// 	'iat' => time(),
	// 	// ];
	// 	// $jwt = JWT::encode($claims, $key, 'ES256', $keyId);

	// 	// // Payload for the notification
	// 	// $payload = [
	// 	// 	'aps' => [
	// 	// 		'alert' => [
	// 	// 			'title' => $pushmessage['title'],
	// 	// 			'body' => $pushmessage['message']
	// 	// 		],
	// 	// 		'badge' => 1,
	// 	// 		'status' => 22,
	// 	// 		'sound' => 'default',
	// 	// 		'mutable-content' => 1,
	// 	// 	],
	// 	// 	'data' => [
	// 	// 		'attachment-url' => $pushMessage['image'],
	// 	// 	],
	// 	// ];

	// 	// foreach ($deviceTokens as $deviceToken) {
	// 	// 	$deviceToken = "04fe2243a2d27c70a5a1a63df36e402d1330b95007b01854ac44b032c6c9147a";
	// 	// 	$url = "$apnsHost/3/device/$deviceToken";

	// 	// 	$ch = curl_init($url);
	// 	// 	curl_setopt($ch, CURLOPT_POST, true);
	// 	// 	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
	// 	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 	// 	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
	// 	// 	curl_setopt($ch, CURLOPT_HTTPHEADER, [
	// 	// 		"authorization: bearer $jwt",
	// 	// 		"apns-topic: $bundleId",
	// 	// 		"content-type: application/json",
	// 	// 	]);

	// 	// 	$response = curl_exec($ch);
	// 	// 	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	// 	// 	if ($httpCode !== 200) {
	// 	// 		echo "Failed to send notification to $deviceToken. HTTP Code: $httpCode, Response: $response\n";
	// 	// 	} else {
	// 	// 		echo "Notification sent successfully to $deviceToken.\n";
	// 	// 	}

	// 	// 	curl_close($ch);
	// 	// }
    // }

	public function send_passenger_ios_pushnotification($deviceTokens = [], $pushMessage = null)
	{
		// Path to your .p8 file
		$p8File = $_SERVER['DOCUMENT_ROOT'] . '/AuthKey_7Z6DJ2T5LA.p8'; // Replace with actual file path
		$keyId = '7Z6DJ2T5LA';
		$teamId = 'FDG4PBGHHM';
		$bundleId = 'com.grandlimo.passenger';
		$production = true; // Set to true for production
		$apnsHost = $production ? 'https://api.push.apple.com' : 'https://api.sandbox.push.apple.com';

		// Create JWT header and claims
		$header = [
			'alg' => 'ES256',
			'kid' => $keyId,
		];
		$claims = [
			'iss' => $teamId,
			'iat' => time(),
		];

		// Base64 encode the header and claims
		$headerEncoded = rtrim(strtr(base64_encode(json_encode($header)), '+/', '-_'), '=');
		$claimsEncoded = rtrim(strtr(base64_encode(json_encode($claims)), '+/', '-_'), '=');

		print_r($header);
		print("<br/>");
		print_r($claims);
		print("<br/>");
		print($headerEncoded);
		print("<br/>");
		print($claimsEncoded);

		// Create the unsigned token
		$unsignedToken = "$headerEncoded.$claimsEncoded";

		// Sign the token with ES256 using the .p8 private key
		$privateKey = openssl_pkey_get_private('file://' . $p8File);

		print("<br/>");
		print_r($unsignedToken);
		print("<br/>");
		print($privateKey);

		openssl_sign($unsignedToken, $signature, $privateKey);
		openssl_free_key($privateKey);

		// Base64 encode the signature
		$signatureEncoded = rtrim(strtr(base64_encode($signature), '+/', '-_'), '=');

		// Combine the header, claims, and signature to form the JWT
		$jwt = "$unsignedToken.$signatureEncoded";

		// Notification payload
		$payload = [
			'aps' => [
				'alert' => [
					'title' => $pushmessage['title'],
					'body' => $pushmessage['message']
				],
				'badge' => 1,
				'status' => 22,
				'sound' => 'default',
				'mutable-content' => 1,
			],
			'data' => [
				'attachment-url' => $pushMessage['image'],
			],
		];

		foreach ($deviceTokens as $deviceToken) {
			$deviceToken = "e568f2d7f167a44db6330bec4ecfe891f9679343b9eea3dabb0081234e2186ec";
			$url = "$apnsHost/3/device/$deviceToken";

			// Send the notification via cURL
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				"authorization: bearer $jwt",
				"apns-topic: $bundleId",
				"content-type: application/json",
			]);

			$response = curl_exec($ch);
			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			if ($httpCode !== 200) {
				echo "Failed to send notification to $deviceToken. HTTP Code: $httpCode, Response: $response\n";
			} else {
				echo "Notification sent successfully to $deviceToken.\n";
			}

			curl_close($ch);
		}
	}

    public function update_passenger_status($passengers_ids){

	      if(count($passengers_ids)){
	                  //print_r($passengers_ids);exit;
	            $result = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>array('$in'=>$passengers_ids)),array('$set'=>array('push_notification' => 1)),array('multiple'=>true) );
	      }
    }

    public function update_passenger_sent_status(){
	      
	    $result = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>array('$ne'=>'')),array('$set'=>array('push_notification' => 0)),array('multiple'=>true) );
	      
    }
    
    	// 03 Feb 2020
	public function insert_promocode($insert_array) { 		
		$exists = $this->mongo_db->find(MDB_PASSENGERS_PROMO,array('promocode'=>$insert_array['promocode']),array('_id'))->sort(array('_id'=>-1));
		$exists_data = iterator_to_array($exists);
		
		if(!empty($exists_data)) {
			return false;
		}
		
		$rs = $this->mongo_db->find(MDB_PASSENGERS_PROMO,array(),array('_id'))->sort(array('_id'=>-1))->limit(1);
		$res = iterator_to_array($rs);
		reset($res);
		$first_key = key($res);
		$inc_id = $first_key+1;
				
		$query = array(
						'_id' => (int)$inc_id,
                        'company_id' =>  (int)$insert_array['company_id'],
                        'promocode' =>  $insert_array['promocode'],
                        'package' =>(int) $insert_array['package'],
                        'start_date' => new \MongoDB\BSON\UTCDateTime(strtotime($insert_array['start_date']) * 1000),
                        'expire_date' => new \MongoDB\BSON\UTCDateTime(strtotime($insert_array['expire_date']) * 1000),
                        'promo_limit' => (int)$insert_array['promo_limit'],
                        'promo_type' => (string) $insert_array['promo_type'],
                        'createdate' => new \MongoDB\BSON\UTCDateTime(strtotime($insert_array['createdate']) * 1000),
                        'fixed_fare_amt'=>(int)$insert_array['fixed_fare_amt'],
                        'total_applied' => 0,
                        'auto_generated_promocode' => (int)1,
                        'total_used' => 0, 
                    );
               
                    
		$result = $this->mongo_db->insert(MDB_PASSENGERS_PROMO,$query);
		return true;             
	}
	
	public function clear_all_custom_interval(){

		$update_array = array('surge_pricing_custom_interval' => []);
		$res = $this->mongo_db->update(MDB_MOTOR_MODEL,array(),array('$set'=>$update_array),array('multiple'=>true) );

		return $res;
	}

	public function update_any_field_passenger($passengers_ids,$field_name,$value){

		if(count($passengers_ids)){
					//print_r($passengers_ids);exit;
					echo $field_name.$value;
					print_r($passengers_ids);
					$result = $this->mongo_db->update(MDB_PASSENGERS,array('_id'=>(int)$passengers_ids),array('$set'=>array('banner_notification_status' => 0)),array('multiple'=>true) );
					print_r($result);
			}
  	}
	// 03 Feb 2020

	//26 feb 2021
  	public function getDriversData(){
  		$arguments = array(
            array('$lookup' => array(
                    'from' => MDB_TAXI,
                    'localField' => 'mapping_taxiid',
                    'foreignField' => "_id",
                    'as' => "taxi"
                )
            ),
            array('$unwind' => '$taxi'),
            array('$match' => array("mapping_status"=>"A")),
            array('$project' => array(
                "_id" => 0,
                "taxi_model" => '$taxi.taxi_model',
                "taxi_no" => '$taxi.taxi_no'
                )
            ),
            array('$group' => array(
                    '_id'=>'$taxi_model',
                    'count'=>array('$sum'=>1)
                )
            )
        );
		$result    = $this->mongo_db->aggregate(MDB_TAXI_DRIVER_MAPPING, $arguments);
		return (isset($result['result']) && !empty($result['result']) ) ? $result['result'] : array();
  	}

  	public function update_drivers_count($id,$count){
		$update_array = array('total_drivers' => (int)$count);
		$res = $this->mongo_db->update(MDB_MOTOR_MODEL,array('_id'=>(int)$id),array('$set'=>$update_array),array('multiple'=>true) );
		return $res;
	}
	//26 feb 2021

		
	

}
?>
