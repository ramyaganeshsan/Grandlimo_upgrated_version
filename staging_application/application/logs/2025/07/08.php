<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-08 00:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 00:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 00:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 00:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 00:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 00:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 00:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 00:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 00:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 00:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 00:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 00:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 00:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 00:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 00:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 00:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 01:09:49 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 01:09:49 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 01:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 01:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 02:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:08:32 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 02:08:32 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 02:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 02:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-08 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-08 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 02:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 02:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wsman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 02:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 02:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 02:22:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 02:22:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 02:23:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 02:23:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 02:29:30 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 02:29:30 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 02:40:58 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 02:40:58 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 02:52:55 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 02:52:55 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 02:59:32 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 02:59:32 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 03:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 03:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 03:14:52 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-07-08 03:14:52 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-08 03:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 03:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 04:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 04:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 04:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 04:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 04:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 04:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 04:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 04:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 04:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 04:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 04:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 04:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 04:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 04:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 05:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 05:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 05:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 05:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 06:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 06:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 06:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 06:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:15:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 07:15:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 07:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 07:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 07:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 07:54:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 07:54:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 08:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/js/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/js/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Home/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Home/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:24:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-08 08:24:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-08 08:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 08:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 08:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 09:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 09:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 09:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 09:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 09:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 09:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 10:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 10:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 10:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 10:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 10:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 10:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 10:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 11:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 11:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 11:45:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 11:45:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 12:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 12:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 12:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 12:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 12:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 12:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 13:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 13:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 13:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 13:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 13:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 13:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 13:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 13:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 15:26:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 15:26:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 15:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 15:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 15:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 15:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 15:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 15:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 16:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 16:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 17:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 17:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 17:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 17:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 17:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 17:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 18:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 18:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 19:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 19:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 19:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 19:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 19:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 19:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 20:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1671-stephens-boulevard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 20:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1671-stephens-boulevard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 20:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 20:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 20:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 20:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 20:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 20:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 21:27:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 21:27:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 21:33:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-08 21:33:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-08 21:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 21:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 21:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 21:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 22:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 22:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 22:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-08 22:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-policy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-policy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-access.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-access.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskey.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskey.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-function.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-function.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-role.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-role.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-state.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-state.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-buckets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-buckets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-08 23:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-08 23:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}