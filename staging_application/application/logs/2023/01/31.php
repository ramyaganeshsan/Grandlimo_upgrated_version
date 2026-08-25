<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-01-31 00:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 00:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 03:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 03:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 04:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 04:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 05:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://v4.ident.me ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 05:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://v4.ident.me ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 06:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 06:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 06:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 06:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 07:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 07:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 08:03:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:03:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:03:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:03:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:03:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:03:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:03:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:03:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:04:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:04:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:04:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:04:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:04:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:04:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:04:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:04:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:04:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:04:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:05:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:05:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:05:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:05:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
2023-01-31 08:05:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"By "' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/model/commonmodel.php [ 1312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 08:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 08:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 08:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 08:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 08:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 08:13:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/taxidispatch.php [ 720 ]
2023-01-31 08:13:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/taxidispatch.php [ 720 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:14:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:14:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:15:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:15:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:15:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
2023-01-31 08:15:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4474 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:15:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/taxidispatch.php [ 5397 ]
2023-01-31 08:15:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/taxidispatch.php [ 5397 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:24:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/commonmodel.php [ 640 ]
2023-01-31 08:24:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/commonmodel.php [ 640 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/model/taxidispatch.php [ 2636 ]
2023-01-31 08:34:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/model/taxidispatch.php [ 2636 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:34:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
2023-01-31 08:34:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"mail_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 4489 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 08:41:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/commonmodel.php [ 640 ]
2023-01-31 08:41:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/commonmodel.php [ 640 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-01-31 09:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 09:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 09:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL taxidispatchnode/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-01-31 09:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL taxidispatchnode/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 09:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL taxidispatchnode/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-01-31 09:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL taxidispatchnode/< was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 09:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 09:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 10:36:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
2023-01-31 10:36:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
--
#0 /var/www/html/application/classes/model/commonmodel.php(1318): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 1318, Array)
#1 /var/www/html/application/classes/model/taxidispatch.php(4480): Model_Commonmodel->sendNotificationEmail('5785', 'test', Array, Array)
#2 /var/www/html/application/classes/controller/taxidispatch.php(2411): Model_Taxidispatch->payentry('5785', Array)
#3 [internal function]: Controller_Taxidispatch->action_pay_details()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(115): Kohana_Request->execute()
#8 {main}
2023-01-31 10:36:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
2023-01-31 10:36:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
--
#0 /var/www/html/application/classes/model/commonmodel.php(1318): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 1318, Array)
#1 /var/www/html/application/classes/model/taxidispatch.php(4480): Model_Commonmodel->sendNotificationEmail('5785', 'test', Array, Array)
#2 /var/www/html/application/classes/controller/taxidispatch.php(2411): Model_Taxidispatch->payentry('5785', Array)
#3 [internal function]: Controller_Taxidispatch->action_pay_details()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(115): Kohana_Request->execute()
#8 {main}
2023-01-31 10:36:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
2023-01-31 10:36:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH/classes/model/commonmodel.php [ 1318 ]
--
#0 /var/www/html/application/classes/model/commonmodel.php(1318): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 1318, Array)
#1 /var/www/html/application/classes/model/taxidispatch.php(4480): Model_Commonmodel->sendNotificationEmail('5785', 'test', Array, Array)
#2 /var/www/html/application/classes/controller/taxidispatch.php(2411): Model_Taxidispatch->payentry('5785', Array)
#3 [internal function]: Controller_Taxidispatch->action_pay_details()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(115): Kohana_Request->execute()
#8 {main}
2023-01-31 10:47:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
2023-01-31 10:47:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
--
#0 /var/www/html/application/classes/common_config.php(324): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 324, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-31 11:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 11:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 12:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 12:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 15:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 15:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 15:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 15:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 15:29:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
2023-01-31 15:29:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
--
#0 /var/www/html/application/classes/common_config.php(324): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 324, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-31 15:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-01-31 15:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 16:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-01-31 16:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 16:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 16:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaaaaaaaaaaaaaaaaaaaaaaaaqr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaaaaaaaaaaaaaaaaaaaaaaaaqr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 99vt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 99vt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 99vu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 99vu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 19:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 19:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 20:10:56 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-01-31 20:10:56 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-01-31 20:10:56 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-01-31 20:10:56 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-01-31 20:10:56 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-01-31 20:10:56 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-01-31 20:10:56 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-01-31 20:10:56 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-01-31 21:35:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
2023-01-31 21:35:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 324 ]
--
#0 /var/www/html/application/classes/common_config.php(324): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 324, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-31 21:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 21:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 22:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 22:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 23:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mao-476467.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 23:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mao-476467.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-31 23:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/masterCGI was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-31 23:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/masterCGI was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-31 23:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin_console.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-31 23:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin_console.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}