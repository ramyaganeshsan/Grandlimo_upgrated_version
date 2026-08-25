<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-23 00:01:45 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-04-23 00:01:45 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-04-23 00:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 00:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 00:43:12 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-04-23 00:43:12 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-04-23 00:56:37 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-04-23 00:56:37 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-04-23 01:45:14 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-04-23 01:45:14 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-04-23 01:55:27 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-04-23 01:55:27 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-04-23 02:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 02:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 02:14:55 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2025-04-23 02:14:55 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-04-23 02:18:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 02:18:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 02:36:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-04-23 02:36:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-04-23 03:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 03:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 03:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 03:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 04:05:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 04:05:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 05:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 05:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 05:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 05:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 05:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 05:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 05:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 05:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 05:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 05:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 05:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 05:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 05:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 06:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 06:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 06:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 06:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 07:01:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 07:01:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 07:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 07:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 07:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 07:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 07:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 07:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 07:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 08:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 08:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 08:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 08:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 08:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jolokia/read/Users:database=UserDatabase,type=UserDatabase ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 08:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jolokia/read/Users:database=UserDatabase,type=UserDatabase ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 08:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/jolokia/read/Users:database=UserDatabase,type=UserDatabase ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 08:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/jolokia/read/Users:database=UserDatabase,type=UserDatabase ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 08:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 08:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 10:54:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 10:54:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 11:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 11:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 11:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 11:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 11:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 11:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 12:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 12:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 13:13:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 13:13:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 13:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 13:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 13:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 13:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 13:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 13:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 13:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 13:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 13:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 13:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 13:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 13:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/internal;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/internal;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 14:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/internal/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/en76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/en76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/en76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 14:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/en76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 14:04:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 14:04:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 14:04:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 14:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1745406286 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1745406286 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 14:04:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 14:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 14:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 14:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 14:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 14:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 15:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 15:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 15:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 15:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 15:45:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 15:45:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 16:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jolokia/read/getDiagnosticOptions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 16:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jolokia/read/getDiagnosticOptions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 16:55:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 16:55:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 16:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-23 16:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 17:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 17:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 17:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 17:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 17:24:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 17:24:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 17:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 17:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 17:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 17:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 18:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 18:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 18:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 18:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 18:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 18:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 18:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 19:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 19:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 19:08:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 19:08:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 19:08:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 19:08:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 20:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 20:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 20:53:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 20:53:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 21:08:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 21:08:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 21:58:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 21:58:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 22:14:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-23 22:14:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-23 22:24:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 22:24:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 22:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 22:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 22:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-23 22:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-23 22:37:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-23 22:37:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-23 23:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-23 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-23 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}