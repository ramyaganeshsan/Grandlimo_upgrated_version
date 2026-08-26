<?php defined('SYSPATH') or die("No direct script access."); ?>
<?php
  class helpers_notifications {      
      private $sender = '';
      private $receiver = '';
      private $content = '';
	  private $request_id = 0;
      private $notification_type = '';
      
      public function __construct() {
          
      }
      
      public function setSender($from) {
          $this->sender = $from;                    
      }
      
      public function setReceiver($to) {
          $this->receiver = $to;          
      }
      
      public function setMessage($body) {
          $this->content = $body;        
      }
	  
	  public function setRequestId($id) {
		  $this->request_id = $id;
	  }
      
      public function setNotificationType($type) {
          $this->notification_type = $type;
      }
      
      public function sendNotification() {
          if(!empty($this->sender) && !empty($this->receiver)) {
            $mongo = MangoDB::instance('default');
            $rs = $mongo->find(MDB_NOTIFICATIONS,[],['_id'])->sort(['_id'=>-1])->limit(1);
			$rs = iterator_to_array($rs);
			reset($rs);
			$rs_first_key = key($rs);
			$_id = $rs_first_key + 1;
            
            $data = ['_id'=>$_id,
				'sender' => (int)$this->sender,			
				'receiver' => (int)$this->receiver,			
				'message' => $this->content,
				'request_id' => (int)$this->request_id,
				'notification_type' => (int)$this->notification_type,			
				'read_status' => (int)0,									
			];
			$result = $mongo->insert(MDB_NOTIFICATIONS,$data);
          } 
      }
  }
  
?>