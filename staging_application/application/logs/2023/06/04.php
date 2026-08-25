<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-06-04 00:10:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-06-04 00:10:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-06-04 01:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 01:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 04:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 04:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 04:53:22 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 04:53:22 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:53:22 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 04:53:22 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:53:23 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 04:53:23 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:53:23 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 04:53:23 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 04:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 04:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 04:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 04:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 04:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 04:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 04:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 04:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 04:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 04:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/rsvpmaker/v1/stripesuccess/anythinghere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 04:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/rsvpmaker/v1/stripesuccess/anythinghere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 04:59:23 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 04:59:23 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:59:33 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 04:59:33 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 04:59:51 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 04:59:51 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 05:00:06 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 05:00:06 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 05:00:21 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 05:00:21 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 05:00:37 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 05:00:37 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 05:00:51 --- ERROR: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
2023-06-04 05:00:51 --- STRACE: ErrorException [ 8 ]: Undefined index: driver_reply ~ APPPATH/classes/controller/taxidispatch.php [ 1256 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(1256): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1256, Array)
#1 [internal function]: Controller_Taxidispatch->action_all_booking_list_manage()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 05:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 05:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 05:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 05:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 05:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 05:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 05:51:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/model/taxidispatch.php [ 1619 ]
2023-06-04 05:51:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/model/taxidispatch.php [ 1619 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-06-04 05:52:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 2636 ]
2023-06-04 05:52:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting ')' ~ APPPATH/classes/model/taxidispatch.php [ 2636 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-06-04 05:52:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/taxidispatch.php [ 608 ]
2023-06-04 05:52:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/taxidispatch.php [ 608 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-06-04 07:56:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-06-04 07:56:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-06-04 07:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://checkip.amazonaws.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 07:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://checkip.amazonaws.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 09:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 09:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 10:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 10:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 11:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 11:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 11:22:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-06-04 11:22:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-06-04 11:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 11:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 11:23:35 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:23:35 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:23:35 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:23:35 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:23:35 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:23:35 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:23:35 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:23:35 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:23:47 --- ERROR: MongoCursorException [ 11000 ]: 10.128.0.5:27020: E11000 duplicate key error collection: Gradnlimotest.passengers_log index: _id_ dup key: { : 5861 } ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 438 ]
2023-06-04 11:23:47 --- STRACE: MongoCursorException [ 11000 ]: 10.128.0.5:27020: E11000 duplicate key error collection: Gradnlimotest.passengers_log index: _id_ dup key: { : 5861 } ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 438 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(438): MongoCollection->insert(Array, Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(292): Kohana_MangoDB->_call('insert', Array, Array)
#2 /var/www/html/application/classes/model/taxidispatch.php(823): Kohana_MangoDB->insert('passengers_log', Array)
#3 /var/www/html/application/classes/controller/taxidispatch.php(100): Model_Taxidispatch->addbooking(Array, 'HxLWkHKy2b', '0b79hW', '12.55')
#4 [internal function]: Controller_Taxidispatch->action_dashboard()
#5 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#6 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(115): Kohana_Request->execute()
#9 {main}
2023-06-04 11:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 11:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 11:25:37 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_device_token ~ APPPATH/classes/model/taxidispatch.php [ 2875 ]
2023-06-04 11:25:37 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_device_token ~ APPPATH/classes/model/taxidispatch.php [ 2875 ]
--
#0 /var/www/html/application/classes/model/taxidispatch.php(2875): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 2875, Array)
#1 /var/www/html/application/classes/controller/taxidispatch.php(2290): Model_Taxidispatch->cancelbooking_logid(Array)
#2 [internal function]: Controller_Taxidispatch->action_cancel_booking()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2023-06-04 11:28:58 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:28:58 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:28:58 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:28:58 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:28:58 --- ERROR: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
2023-06-04 11:28:58 --- STRACE: ErrorException [ 8 ]: Undefined index: minutes_fare ~ APPPATH/classes/controller/tdispatch.php [ 4781 ]
--
#0 /var/www/html/application/classes/controller/tdispatch.php(4781): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4781, Array)
#1 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-06-04 11:32:09 --- ERROR: ErrorException [ 8 ]: Undefined index: passenger_device_token ~ APPPATH/classes/model/taxidispatch.php [ 2875 ]
2023-06-04 11:32:09 --- STRACE: ErrorException [ 8 ]: Undefined index: passenger_device_token ~ APPPATH/classes/model/taxidispatch.php [ 2875 ]
--
#0 /var/www/html/application/classes/model/taxidispatch.php(2875): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 2875, Array)
#1 /var/www/html/application/classes/controller/taxidispatch.php(2290): Model_Taxidispatch->cancelbooking_logid(Array)
#2 [internal function]: Controller_Taxidispatch->action_cancel_booking()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2023-06-04 13:36:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-06-04 13:36:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-06-04 13:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 13:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 14:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 14:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 14:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 14:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 14:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 14:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 16:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 16:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 16:47:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-06-04 16:47:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-06-04 17:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 17:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 17:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 17:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 17:51:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-06-04 17:51:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-06-04 17:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 17:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 18:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 18:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 18:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 18:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 18:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-06-04 18:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-06-04 18:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 18:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 18:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 18:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 18:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-06-04 18:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-06-04 21:03:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-06-04 21:03:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-06-04 23:16:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-06-04 23:16:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}