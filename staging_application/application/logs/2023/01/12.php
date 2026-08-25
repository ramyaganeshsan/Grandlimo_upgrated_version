<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-01-12 00:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 00:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 01:11:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-12 01:11:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-12 01:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 01:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 01:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 01:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 01:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 01:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 01:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 01:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 01:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 01:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 01:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 01:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 02:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 02:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 04:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 04:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 06:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 06:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 06:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 06:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 08:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 08:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 09:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 09:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 09:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 09:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 10:05:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-12 10:05:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-12 10:05:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-12 10:05:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-12 12:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 12:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 13:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 13:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 15:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 15:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 15:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 15:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 16:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 16:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 16:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 16:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 18:08:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-12 18:08:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-12 19:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 19:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 20:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 20:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 21:21:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-12 21:21:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-12 21:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/version.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/version.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/clients_live.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: streaming/clients_live.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/c/version.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/c/version.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream/live.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stream/live.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flu/403.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 21:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flu/403.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 21:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-01-12 21:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config - Copy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config - Copy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config copy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config copy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config_backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config_backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config_good was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config_good was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config-backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config-backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config-good was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config-good was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.good ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.good ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.ORG ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.ORG ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php__ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php__ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php______ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php______ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php__olds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php__olds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2017 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2017 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2018 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2018 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2019 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2019 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2020 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2020 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-n ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-n ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-o ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-o ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-work ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-work ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.6 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.7 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.8 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.9 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.a ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.a ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.b ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.b ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.cust ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.cust ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.disabled ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.disabled ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.in ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.in ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.maj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.maj ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.org ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.org ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.uk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.uk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.us ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.us ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~~~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~~~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpbak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpbak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpn ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpnew ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpnew ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpold ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phpold ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phporiginal ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phporiginal ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phptmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.phptmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.prod.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.prod.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config~ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-configbak was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-configbak was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/envConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/envConfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-12 23:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-12 23:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-12 23:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}