<?php defined('SYSPATH') or die("No direct script access."); ?>
<?php require_once(APPPATH.'classes/smtp_config.php'); ?>
<?php require_once(MODPATH.'/SMTP/PHPMailerAutoload.php'); ?>
<?php
  class helpers_notification {
      public $host = SMTP_HOST;
      public $port = SMTP_PORT;
      public $username = SMTP_USERNAME;
      public $password = SMTP_PASSWORD;
      public $status = array();
      public $success = 'Mail Sent Successfully';
      
      public $mail;
      public $site = APPLICATION_NAME;
      public $subject = '';
      public $content = '';
      public $attachment = array();
      public $altbody = 'To view the message, please use an HTML compatible email viewer!';
      
      private $senders = SMTP_USERNAME;
      private $receivers = array();
      private $_sysNotification = true;
      private $_emailNotification = true;
      
      public function __construct() {
          $this->mail = new PHPMailer();
          $this->mail->IsSMTP(TRUE); 
          $this->mail->SMTPAuth   = true;                         
          $this->mail->SMTPSecure = true;
          $this->mail->Host       = $this->host;      	            
          $this->mail->Port       = $this->port;                    
          $this->mail->Username   = $this->username;  	           
          $this->mail->Password   = $this->password;
      }
      
      public function setSubject($subject) {
          $this->subject = $subject;
          $this->mail->Subject    = $this->subject;
      }
      
      public function setSender($from) {
          if(!empty($from)) {
            $this->senders = $from;
          }          
      }
      
      public function setReceivers($to = array()) {
          $this->mail->SetFrom($this->senders, $this->site);  
          $this->mail->AddReplyTo($this->senders, $this->site);
          $this->receivers = $to;          
      }
      
      public function setCc($cc) {
        if(!empty($cc)) {
          $this->mail->addCC($cc);
        }
      }
      
      public function setBcc($bcc) {
        if(!empty($bcc)) {
          $this->mail->addBCC($bcc);
        }
      }
      
      public function setContent($body) {
        $this->content = $body;
        $this->mail->MsgHTML($this->content);
        $this->mail->AltBody = $this->altbody;
      }
      
      public function setAttachments($attachment) {
        $this->attachment = $attachment;
        if(is_array($this->attachment) && !empty($this->attachment))
        {
            foreach($this->attachment as $attach) {
              $this->mail->AddAttachment(PUBLIC_UPLOADS_FOLDER.'/'.$attach);
            }
        }        
      }
      
      public function ForceStopEmailNotification() {
        $this->_emailNotification = false;
      }
      
      public function ForceStopSystemNotification() {
        $this->_sysNotification = false;
      }
      
      public function sendNotification() {
          if(is_array($this->receivers) && !empty($this->receivers)) {
            if($this->_emailNotification) {
              foreach($this->receivers as $row)
              {
                  $address = $row;
                  if(!empty($address)) {
                      $this->mail->AddAddress($address, "User");
                      if($this->mail->Send()) {
                          $this->status['code'] = 1;
                          $this->status['response'] = $this->success;
                          return $this->status;
                      } else {                          
                          $this->status['code'] = 0;
                          $this->status['response'] = $this->mail->ErrorInfo;
                          return $this->status;
                      }                          
                      $this->mail->ClearAddresses(); //clear address
                  }
              }
            }
            if($this->_sysNotification) {
              
            }
          } 
      }
  }
  
?>