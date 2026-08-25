<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-12-06 00:38:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 00:38:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 01:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 01:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:04:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 02:04:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/" type="image/x-icon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/" type="image/x-icon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 02:22:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-12-06 02:22:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-12-06 02:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 02:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 03:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 03:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 03:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 03:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 04:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 04:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 04:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 04:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 04:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 04:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 04:51:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 04:51:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 06:13:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 06:13:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 06:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 06:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 06:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 06:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 06:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 06:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 07:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 07:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 08:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/media_style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/media_style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/bootstrap3.7.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/bootstrap3.7.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/css/intlTelInput.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/css/intlTelInput.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 09:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 09:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 09:19:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 09:19:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 09:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 09:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 09:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 09:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 09:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 09:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 10:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 10:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 11:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 11:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 11:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 11:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 11:34:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 11:34:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 11:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 11:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 11:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 11:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 12:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 12:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 12:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 12:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 12:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 12:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 12:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 12:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 13:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 13:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 13:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: addon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: addon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cfg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 13:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 13:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 14:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 14:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 14:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 14:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 16:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 16:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 16:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 16:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 16:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 16:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 17:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 17:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 17:55:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 17:55:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 19:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 19:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 19:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 19:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 20:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 20:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 20:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-06 20:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 21:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-06 21:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 21:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 21:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 21:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL awsconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL awsconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/lambda_function.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/task/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/task/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/task/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/task/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lambda/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lambda/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL functions/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL functions/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/amplify-meta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/amplify-meta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL amplify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL amplify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL amplify/backend/awscloudformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL amplify/backend/awscloudformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.out ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.out ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-sdk-credential-file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-sdk-credential-file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-sdk-config-file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-sdk-config-file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cloudwatch-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cloudwatch-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-cloudtrail-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-cloudtrail-logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-cost-reports was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-cost-reports was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL VERSION was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL VERSION was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/version.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/system.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.www ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.www ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.class.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envconfig.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envconfig.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envsettings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: envsettings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_vars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_vars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.json  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.json  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.save.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.save.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.save.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.zip  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.zip  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL *env* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL *env* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/*.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbg.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devel.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpstatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpstatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apache-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apache-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apache_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apache_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nginx_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nginx_status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nginx-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nginx-status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PHPINFO was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PHPINFO was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PhpInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PhpInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PHPinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PHPinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPINFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPINFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpInfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpInfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PhpInfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PhpInfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHP_INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHP_INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHP-INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHP-INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: INFO.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: XX.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: XX.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: t.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about-php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-06 22:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-06 22:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/css/intlTelInput.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/css/intlTelInput.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/media_style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/media_style_211118new.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/bootstrap3.7.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/css/bootstrap3.7.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-06 22:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-06 22:44:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 22:44:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-06 23:42:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-06 23:42:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}