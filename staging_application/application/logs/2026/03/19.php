<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-03-19 00:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 00:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 00:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 00:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 00:55:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 00:55:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 02:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 02:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 02:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 02:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 02:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 113.184.28.34.bc.googleusercontent.com/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 113.184.28.34.bc.googleusercontent.com/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 02:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 02:49:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 02:49:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 02:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jsonrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 02:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jsonrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 02:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 02:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 02:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 02:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 02:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/cmdb/system/global was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 02:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/cmdb/system/global was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 03:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 03:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 03:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 03:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 03:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 03:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 03:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 03:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 03:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 03:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 04:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 04:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 04:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 04:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 04:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 04:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 04:56:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 04:56:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 05:35:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 05:35:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 07:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 07:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 07:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 07:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 07:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 07:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 07:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 07:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 08:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 08:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 08:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 08:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 08:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 08:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:57:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-03-19 09:57:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-03-19 09:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:57:39 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-03-19 09:57:39 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:39 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-03-19 09:57:39 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:39 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-03-19 09:57:39 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-03-19 09:57:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-03-19 09:57:41 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-03-19 09:57:41 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:41 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-03-19 09:57:41 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:41 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-03-19 09:57:41 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-03-19 09:57:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-03-19 09:57:44 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-03-19 09:57:44 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:44 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2026-03-19 09:57:44 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:45 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-03-19 09:57:45 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-03-19 09:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/stripeController.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/stripeController.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/StripeService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/StripeService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/StripeController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/StripeController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/keys/stripe.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/app/keys/stripe.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/payment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/payment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings_stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings_stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings_stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings_stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/payment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/payment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/payment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/payment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/stripe.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/stripe.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/stripe/keys.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/stripe/keys.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL terraform was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tox.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tox.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SonarQube.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SonarQube.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sonar-project.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sonar-project.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/stripe.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/payments.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/payments.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/stripe.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/stripe.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/stripe.keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/stripe.keys ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/secrets/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/secrets/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connect.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oldsite was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oldsite was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backups was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backups was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/default/files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/default.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/default.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL node_modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL node_modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pipfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pipfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pipfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pipfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __pycache__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __pycache__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL venv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL venv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: persistence.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: persistence.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpd.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .vscode/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL panel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL panel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL access_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL access_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configmap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configmap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.rdb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.rdb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filezilla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filezilla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL LICENSE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL LICENSE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL VERSION was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL VERSION was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: INSTALL.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: INSTALL.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/postmark.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/postmark.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/postmark.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/PostmarkService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/PostmarkService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/PostmarkService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/PostmarkService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/postmark.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/postmark.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/postmark.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/postmark.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/PostmarkController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/PostmarkController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_server_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark_server_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/postmark.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SendgridService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SendgridService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SendgridService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SendgridService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SendgridController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SendgridController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templates/sendgrid was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templates/sendgrid was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sg_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sg_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_s3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3_upload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/s3_upload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/S3Service.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/S3Service.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/S3Service.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/S3Service.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3cmd.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3cmd.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/ses.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/ses.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sns_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sns.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sns.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/notifications/sns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/notifications/sns.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dynamodb.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dynamodb.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rds_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rds.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscli.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscli.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_secret_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_publishable_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_publishable_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_webhook_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_webhook_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pk_live.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pk_live.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sk_live.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sk_live.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pk_test.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pk_test.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sk_test.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sk_test.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/stripe.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Payment/StripeService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Payment/StripeService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/payment/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/payment/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/payment/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/payment/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/StripePaymentService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/StripePaymentService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/PaymentController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/PaymentController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/BillingController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/BillingController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/CheckoutController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/CheckoutController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SubscriptionController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SubscriptionController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/stripe_events.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/stripe_events.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/stripe/webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 10:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/stripe/webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/webhooks/stripe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 10:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/webhooks/stripe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook/stripe_handler.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook/stripe_handler.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: listeners/StripeWebhookListener.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: listeners/StripeWebhookListener.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/stripe_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/payment.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/payment.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/payment_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/payment_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stripe_transactions.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/stripe_transactions.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe_customers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe_customers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe_products.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/stripe_products.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_connect.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe_connect.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe_connect.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe_connect.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connected_accounts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connected_accounts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailchimp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailchimp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailgun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templates/emails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templates/emails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL views/emails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL views/emails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twilio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twilio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nexmo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nexmo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plivo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plivo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messagebird.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messagebird.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_analytics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_analytics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ga_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ga_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mixpanel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mixpanel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: segment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: segment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry_dsn.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sentry_dsn.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sentry.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sentry.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datadog.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datadog.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newrelic.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastly.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastly.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudinary.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudinary.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudinary_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudinary_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imgix.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imgix.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb_uri.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb_uri.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo_connection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo_connection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis_password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_url.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wercker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wercker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saml.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saml.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sso_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sso_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: okta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: okta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth0.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth0.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth0_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth0_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: weekly_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: weekly_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: daily_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: daily_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2024.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2024.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2025.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2025.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman_collection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman_collection.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: varnish.vcl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: varnish.vcl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tmp/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tmp/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: celery.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: celery.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidekiq.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidekiq.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchdarkly.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchdarkly.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature_flags.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature_flags.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/features.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/features.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unleash.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unleash.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_client_id.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_client_id.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: paypal_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: braintree.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: square.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: square.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adyen.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adyen.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: razorpay.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: razorpay.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hashicorp_vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hashicorp_vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doppler.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doppler.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infisical.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infisical.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: activation_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: activation_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_certificate.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl_certificate.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca-bundle.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca-bundle.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: encryption_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signing_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signing_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_inbound.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_inbound.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sendgrid_inbound.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sendgrid_inbound.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sendgrid/send was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sendgrid/send was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sendgrid/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sendgrid/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_templates.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_templates.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sendgrid.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_subuser.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_subuser.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_stats.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_stats.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid_events.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid_events.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sendgrid_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_contacts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_contacts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_contacts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_contacts.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_suppressions.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_suppressions.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_unsubscribes.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_unsubscribes.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_api_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SendgridMailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SendgridMailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/SendgridMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/SendgridMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: listeners/SendgridWebhookListener.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: listeners/SendgridWebhookListener.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.out ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.out ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/local-aws-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.config/local-aws-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eb.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_keypair.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_keypair.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kms_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kms_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_key_id.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_key_id.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_session_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_session_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_default_region.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_default_region.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cognito.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cognito.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cognito.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cognito.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dynamodb.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/elasticache.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/elasticache.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sqs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sqs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqs_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kinesis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kinesis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kinesis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kinesis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awslogs.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awslogs.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloudwatch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloudwatch.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: route53.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: route53.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/route53.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/route53.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acm_certificate.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acm_certificate.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: waf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: waf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/mandrill.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/mandrill.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/mandrill.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/MandrillService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/MandrillService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/MandrillService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/MandrillService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/mandrill.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/mandrill.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/mandrill.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/mandrill.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/MandrillController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/MandrillController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/mandrill.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templates/mandrill was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templates/mandrill was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_subaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_subaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mandrill.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mandrill.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mandrill_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/mandrill_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mandrill_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill_test_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mc_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mc_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp_transactional.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailchimp_transactional.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailchimp_transactional.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailchimp_transactional.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/sparkpost.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/sparkpost.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/sparkpost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SparkPostService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SparkPostService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SparkPostService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SparkPostService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/sparkpost.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/keys/sparkpost.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/sparkpost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/sparkpost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SparkPostController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SparkPostController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_live_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/sparkpost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templates/sparkpost was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templates/sparkpost was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_subaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_subaccount.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sparkpost.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sparkpost.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sparkpost_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/sparkpost_webhook.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sparkpost_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_sending_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_sending_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_suppression.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost_suppression.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/billing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/billing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/billing.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/billing.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/billing.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/billing.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/checkout.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/checkout.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/StripeController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/StripeController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/PaymentController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/PaymentController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/BillingController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Http/Controllers/BillingController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/PaymentService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/PaymentService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/BillingService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/BillingService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/checkout.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/checkout.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhooks/payment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhook.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/webhook.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhook.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/payment.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/payment.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_api_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_access_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: akia_ses.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: akia_ses.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_akia.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_akia.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_access.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_access.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/ses_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/ses_credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/aws_ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/aws_ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/ses.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.ses ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.ses ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_key.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_user.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_user.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_user.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_smtp_user.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_region.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_region.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sending_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sending_domain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_verified_email.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_verified_email.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_verified_emails.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_verified_emails.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_identities.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_identities.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_dkim.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_dkim.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_dkim_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_dkim_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_suppression.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_suppression.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sending_statistics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sending_statistics.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_templates.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_template_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_template_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/ses_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_bounces.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_bounces.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_complaints.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_complaints.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_delivery.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/ses_delivery.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/email_delivery.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/email_delivery.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/ses_mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/ses_mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/mailer/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/mailer/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SESMailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/SESMailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/AWSSESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/AWSSESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/email/aws_ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/MailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/MailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/SESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/AWSSESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/AWSSESService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/MailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Services/MailService.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/SESMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/SESMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/AWSSESMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/Mail/AWSSESMailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SESController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/SESController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/EmailController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/EmailController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/MailController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/MailController.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/mail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/send-email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/send-email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/send-email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/api/send-email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/email/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/ses.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/send_email.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/mailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless_ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless_ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/ses.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/ses.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/ses.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/ses.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/ses.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/ses.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/ses.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/ses.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_iam_role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_iam_role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_iam_user.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_iam_user.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sender_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sender_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_raw_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_raw_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_templated_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam/ses_send_templated_email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_smtp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_smtp.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ses.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 10:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 10:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 10:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 10:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 11:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 11:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 11:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 11:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 11:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 11:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 11:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hltty_tlonqfz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 11:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hltty_tlonqfz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 12:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 12:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 12:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 12:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 12:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 12:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 13:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 13:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 13:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 13:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 13:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL l0wbwzvjqxwge0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 13:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL l0wbwzvjqxwge0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 13:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 13:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 14:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 14:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 14:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 14:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 14:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 14:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 14:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oklh9iozo6_i1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 14:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oklh9iozo6_i1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 15:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 15:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 15:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 15:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 15:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 8h7n3jkwkn76f44 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 15:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 8h7n3jkwkn76f44 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 16:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 16:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 16:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _layouts/15/error.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _layouts/15/error.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/signin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/signin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact_us.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact_us.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 17:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/checkout.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/checkout.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/details.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/details.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 17:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 17:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 17:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 17:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 17:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 17:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 18:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 18:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 18:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 18:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 18:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 19:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 19:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 19:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 21:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 21:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 21:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-03-19 21:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/is-sslvpn-enabled was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 21:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 21:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 21:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 21:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 21:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 21:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 21:56:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 21:56:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 21:57:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 21:57:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 21:58:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 21:58:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 21:59:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-03-19 21:59:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-03-19 22:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 22:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-03-19 22:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/hellopress/wp_filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: max.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: max.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/astra/inc/ki1k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/astra/inc/ki1k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ALFA_DATA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ALFA_DATA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: click.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: click.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lv.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 13k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 13k.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x1949.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x1949.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fw.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bs1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bs1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: termps.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: termps.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brand.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brand.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: goods.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cong.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atomlib.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: atomlib.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/product.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/product.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/mod_simplefileuploadv1.3/elements/filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/mod_simplefileuploadv1.3/elements/filemanager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/maint.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/maint.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classwithtostring.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropdown.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dropdown.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moon.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inputs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/css/wp-conflg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: item.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: item.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/Cache/footer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/Cache/footer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 404.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: article.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alfa.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 403.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: link.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: link.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: byp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-trackback.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-trackback.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/certificates/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/certificates/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/seotheme/mar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/seotheme/mar.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/network/plugins.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chosen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chosen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/ID3/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/xmrlpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/xmrlpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/SimplePie/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/SimplePie/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/maint/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/Requests/Text/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/Requests/Text/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/customize/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/customize/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/autoload_classmap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/dist/preferences/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/dist/preferences/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/style-engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/style-engine/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/theme-compat/chosen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/theme-compat/chosen.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/colors/blue/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/pwnd/as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/pwnd/as.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/user/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/js/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/upgrade/about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/assets/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/radio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/fonts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/fonts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentytwentytwo/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bless.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/codemirror/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/codemirror/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/block-patterns/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/block-patterns/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 22:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-03-19 22:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lock360.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-03-19 23:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-03-19 23:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}