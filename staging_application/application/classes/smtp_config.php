<?php

defined('SYSPATH') or die("No direct script access.");
$mongodb        = MangoDB::instance('default');
$smtp_result = $mongodb->find_one(MDB_SMTP_SETTINGS,['_id'=>(int)1],['smtp_username','smtp_password','smtp_host','transport_layer_security','smtp_port','smtp']);
/*$smtp_result = DB::select(SMTP_SETTINGS.'.smtp_username',SMTP_SETTINGS.'.smtp_password',SMTP_SETTINGS.'.smtp_host',SMTP_SETTINGS.'.transport_layer_security',SMTP_SETTINGS.'.smtp_port',SMTP_SETTINGS.'.smtp')->from(SMTP_SETTINGS)
		->where('id', '=', '1')
		->execute()
		->as_array();
		*/

define("SMTP_USERNAME",$smtp_result["smtp_username"]);
define("SMTP_PASSWORD",$smtp_result["smtp_password"]);
define("SMTP_HOST",$smtp_result["smtp_host"]);
define("SMTP_TRANSPORT_LAYER_SECURITY",$smtp_result["transport_layer_security"]);
define("SMTP_PORT",$smtp_result["smtp_port"]); 
//define("SMTP",$smtp_result["smtp"]); 		
		
?>
