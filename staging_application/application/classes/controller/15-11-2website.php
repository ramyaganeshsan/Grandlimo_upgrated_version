<?php defined('SYSPATH') or die('No direct script access.');

/****************************************************************

* website controller - Contains abstract class of front end 

* @Author: NDOT Team

* @URL : http://www.ndot.in

********************************************************************/

abstract class Controller_Website extends Controller_Config {

	public $template="themes/template";

	public function __construct(Request $request, Response $response)
	{

	parent::__construct($request, $response);

	$controller          = $request->controller();

	$action              = $request->action();

	// Assign the request to the controller

	$this->request       = $request;

	// Assign a response to the controller

	$this->response      = $response;

	//Session instance

	$this->session       = Session::instance();

	$this->urlredirect   = Request::current();

	}


	/**
	 * ****action_email_send()****
	 * @E-Mail function calls from here
	 */		
	public function email_send(array $mail,$type='smtp',$htmlneed=true)
	{
		if(is_array($mail))
		{
			if($this->array_keys_exists($mail,array('to','from','subject','message')))
			{
				$to=$mail['to'];
				$from=$mail['from'];
				$subject=$mail['subject'];
				$message=$mail['message'];
				$headers = 'MIME-Version: 1.0'. "\r\n";
				$headers .= "Content-language: he" . "\r\n";
				$headers .= 'Content-type:text/html;charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '. $from . "\r\n";
				switch($type)
				{		
					case "smtp":
					 //mail send thru smtp
					
					 $this->siteusers=Model::factory('siteusers');
					 $smtp_detail=$this->siteusers->get_smtpdetails();
					 $smtp_config="";
					 if(isset($smtp_detail[0]))
					 {
						$host= $smtp_detail[0]['smtp_host'];
						$username=$smtp_detail[0]['smtp_username'];
						$password=$smtp_detail[0]['smtp_password'];
						$port=$smtp_detail[0]['smtp_port'];
						$smtp_config = array('driver' => 'smtp','options' => array('hostname'=>$host,
									'username'=>$username,'password' =>$password,
									'port' => $port,'encryption' => 'ssl')); 	
					 }		
					 $smtp_config1 = array('driver' => 'smtp','options' => array('hostname'=>'smtp-mail.outlook.com',
								  'username'=>'info@taximobility.com','password' =>'ndotadmin',
									'port' => '587','encryption' => 'tls'));

					
						//mail sending option here
						$connect_result = Email::connect($smtp_config1);
						
						try{
							if(Email::connect($smtp_config1))
							{                         	                      
								if(Email::send($to,$from,$subject,$message,$html = $htmlneed)==0)
								{                                  		                
									return 1;
								}
								return 0;
							}
						}
						catch(Exception $e)
						{
							try{
								if(mail($to, $subject,$message,$headers))
								{                               
									return 1;
								}
							}
							catch(Exception $e)
							{
								return 0;
							}
						}	

						break;
					default:
						if(mail($to, $subject,$message,$headers))
						{                               
							return 1;
						}
						break;
				}
			}
			else
			{
				return 2;
			}
		}
	}
	
	/**
	 * ***action_array_keys_exists()****
	 * ** User Defined Function **
	 * @return check array exist otr not
	 */
	public function array_keys_exists($array,$keys) 
	{
		foreach($keys as $k) 
		{
			if(!isset($array[$k])) 
			{
				return false;
			}
		}
		return true;
	}
	
	public function action_index()
	{				
		$view=View::factory(USERVIEW.'home');		
		$this->template->content=$view;	
	}
	
	/**
	*****action_network_activity()****
	*@purpose of linkdin curl function
	*/

		/** SEND GRID FUNCTION **/
		
		public function sendgrid($host = array(), $from = "", $receiver = array(), $subject = "", $message = "")
		{
			include MODPATH."/email/swift/lib/swift_required.php";
			include_once MODPATH."/email/swift/SmtpApiHeader.php";
			$hdr = new SmtpApiHeader();
			$times = array();
			$names = array();
			 
			$hdr->addFilterSetting('subscriptiontrack', 'enable', 1);
			$hdr->addFilterSetting('twitter', 'enable', 1);

			$hdr->addTo($receiver);

			 
			$hdr->addSubVal('-time-', $times);
			$hdr->addSubVal('-name-', $names);
			$hdr->setUniqueArgs(array());

			$sitename = "Sayboard";
			if(!$sitename){
				$sitename = $_SERVER['HTTP_HOST'];
			}
			$fromEmail = $from;
			if(!$fromEmail){
				$fromEmail = "noreply@".$_SERVER['HTTP_HOST'];
			}
				 
			$from = array($fromEmail => $sitename );

			$to = array('defaultdestination@example.com' => 'Personal Name Of Recipient');
			$text = "test text..";
			$html = $message;

			
			$transport = Swift_SmtpTransport::newInstance($host['host'], $host['port']);

			$transport ->setUsername($host['uname']);

			$transport ->setPassword($host['password']);
			$swift = Swift_Mailer::newInstance($transport);
			 
			$message = new Swift_Message($subject);
			$headers = $message->getHeaders();

			$headers->addTextHeader('X-SMTPAPI', $hdr->asJSON());
			
			$message->setFrom($from);
			$message->setBody($html, 'text/html');
			$message->setTo($to);
			$message->addPart($text, 'text/plain');
			
			if ($recipients = $swift->send($message, $failures)){
			  //common::message(1, "Message sent out to ".$recipients." users");
			}
			else{
			  //common::message(-1, "Something went wrong - Try Later");
			}
			return;
		}
			
	 public function  network_activity( $oauth_token, $oauth_token_secret, $endpoint)
	 {
	
		$req_token = new OAuthConsumer($oauth_token, $oauth_token_secret, 1);
 
		$profile_req = OAuthRequest::from_consumer_and_token($this->test_consumer,$req_token, "GET", $endpoint, array());
	
		$profile_req->sign_request($this->sig_method, $this->test_consumer, $req_token);
			
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER,array (
				$profile_req->to_header()
		));
		curl_setopt($ch, CURLOPT_URL, $endpoint);
		$output = curl_exec($ch);
		
		if(curl_errno($ch)){
			echo 'Curl error 2: ' . curl_error($ch);
		}
		curl_close($ch);
		return $output;

	 }		 
	 
	/**
	 * ****action_currenttimestamp()****
	 * @return time format
	 */
	public function currenttimestamp()
	{
		return date("Y:m:d H:i:s",time());		
	}
	
	
	/**
	 * ****DisplayDateTimeFormat()****
	 * @param $input_date_time string
	 * @return  time format
	 */
	public function DisplayDateTimeFormat($input_date_time)
	{
		//getting input data from last login db field
		//===========================================
		$input_date_split = explode("-",$input_date_time);

		//splitting year and time in two arrays
		//=====================================
		$input_date_explode = explode(' ',$input_date_split[2]);
		$input_date_explode1 = explode(':',$input_date_explode[1]);

		//getting to display datetime format
		//==================================
		$display_datetime_format = date('j M Y h:i:s A',mktime($input_date_explode1[0], $input_date_explode1[1], $input_date_explode1[2], $input_date_split[1], $input_date_explode[0], $input_date_split[0]));

		return $display_datetime_format;
	}
	
	
	/**
	 * ****get_bitly_short_url()****
	 *
	 * @param url format
	 * @param 
	 * @return  the shortened bitly url
	 */
	public function get_bitly_short_url($url,$login,$appkey,$format='txt') {
		
		  $connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
		  return $this->curl_get_result($connectURL);
	}
	
	public function curl_get_result($url) {
		
		  $ch = curl_init();
		  curl_setopt($ch,CURLOPT_URL,$url);
		  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
	}
	
	/*
	 
	// POST STATUS UPDATE 
	public function facebook_status_update($Status_Message ="",$image)
	{
		$id =$this->session->get('id');
		$userid = $this->session->get('userid');
		$usrid = isset($userid)?$userid:$id;
		$siteusers = Model::factory('siteusers');		
	
		//get the facebook userid and token id
		$fb_user_check = $siteusers->check_fb_account_exist($usrid);	
		
		
		//$count_facebook_info = $siteusers->select_fb_account(1,TRUE);
		$fb_user_id = '';
		$fb_access_token = '';
		if(count($fb_user_check) > 0)
		{
				$fb_user_id = $fb_user_check[0]["fb_user_id"];
				$fb_access_token = $fb_user_check[0]["access_key"];
		}

		
		if($fb_access_token && $fb_user_id)
		{

			$Post_url = "https://graph.facebook.com/feed";	//exit;
			$post_arg = array("access_token" => $fb_access_token, "message" => $Status_Message,"id" => $fb_user_id,"method" => "post","scope" => "publish_stream,manage_pages" );
		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $Post_url);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_TIMEOUT, 100);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$type = "POST";
			if($type == "POST"){
		
				curl_setopt($ch, CURLOPT_POST, 1);			
				curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post_arg));
			
			}
		
			$result = curl_exec($ch);  print_r($result); exit;
		
			curl_close ($ch);
			
			return $result; 
		}
		return;
	}
	
	public function twitter_status_update($Status_Message = "",$image)
	{

		//require Kohana::find_file('classes/controller','oauth');
		require Kohana::find_file('classes/twitter','OAuth');
		require Kohana::find_file('classes/twitter','twitterOAuth');
	
		$share_link ="http://scriptfiverrclone.com";//exit;
		
		// get the short url 
		$short_url = $this->get_bitly_short_url($share_link,'karthikavel','R_ff285853e5765e8f7879184f0d4107b8');			
	
		//$tweet_message = $short_url;	

		$consumer_key = "mO3lcBCttO1hMzf1Wam4A";
		$consumer_secret ="f6l9mIgM8NHEoBwZKseLgHt0z91W8fykhUaBG06y2g";		

		
		$id =$this->session->get('id');
		$userid = $this->session->get('userid');
		$usrid = isset($userid)?$userid:$id;
		$socialnetwork = Model::factory('socialnetwork');
		
		$get_twitter_details = $socialnetwork->check_twitter_account($usrid);
		
		
		if(count($get_twitter_details) > 0){

		
			$oauth_access_token = $get_twitter_details[0]['oauth_token'];
			$oauth_access_token_secret = $get_twitter_details[0]['oauth_token_secret'];

		}
		
		// Create TwitterOAuth with app key/secret and user access key/secret
		$to = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_access_token, $oauth_access_token_secret);

		$tweet_message = $Status_Message;

		$content = $to->OAuthRequest('https://twitter.com/statuses/update.xml', array('status' => $tweet_message), 'POST');
	
		return $content;	

	}	

	
	 // POST STATUS UPDATE 	 
	 public function post_updates($oauth_token, $oauth_token_secret , $status = "", $endpoint = "" )
	 {	
		require Kohana::find_file('classes/controller','oauth');
		//require_once('oauth.php');
		//require_once('feed.php');
		
		$this->domain = "https://api.linkedin.com/uas/oauth";
		$this->sig_method = new OAuthSignatureMethod_HMAC_SHA1();

		define(LINKDIN_API_KEY,"qseccnfij011");
		define(LINKDIN_SECRET_KEY,"HRYuAPFAGdiGfRC7");

		$this->test_consumer = new OAuthConsumer(LINKDIN_API_KEY, LINKDIN_SECRET_KEY, NULL);
		
		$this->callback = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=getaccesstoken";	
		$status ="test";

		$xml = '<?xml version="1.0" encoding="UTF-8"?>
		<current-status>'.$status.'</current-status>';
		
		$req_token = new OAuthConsumer($oauth_token, $oauth_token_secret, 1);
		
		$profile_req = OAuthRequest::from_consumer_and_token($this->test_consumer,$req_token, "PUT", $endpoint, array());
		
		$profile_req->sign_request($this->sig_method, $this->test_consumer, $req_token);
		
		$headers[] = $profile_req->to_header();
		$headers[] = 'Content-Type: text/xml';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $endpoint);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		$output = curl_exec($ch);
	
		if(curl_errno($ch)){		
			echo 'Curl error 2: ' . curl_error($ch);
		}
		curl_close($ch);
		
		return $output;
	 }
	 
	*/

	
} // End Website
